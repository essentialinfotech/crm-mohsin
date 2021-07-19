<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Canva Button</title>
    <script src="https://sdk.canva.com/designbutton/v2/api.js"></script>
  </head>
  <body>
    <button>Create a new design</button>
    <script type="text/javascript">
      (async () => {
        if (!window.Canva || !window.Canva.DesignButton) {
          return;
        }

        const api = await window.Canva.DesignButton.initialize({
          apiKey: "https://www.canva.com/brand/join?token=aRGR6fAfsQ-I_A4i1ypM7A&referrer=team-invite",
        });

        const button = document.querySelector("button");

        button.onclick = () => {
          api.createDesign({
            design: {
              type: "Poster",
            },
          });
        };
      })();
    </script>
  </body>
</html>
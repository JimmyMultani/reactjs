<!DOCTYPE html>
<html>
<head>
    <script src="https://fb.me/react-0.13.3.min.js"></script>
    <script src="https://fb.me/JSXTransformer-0.13.3.js"></script>
    <script type="text/jsx">
        var ipsumText = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. Praesent libero.';

        React.render(
            <div>
                <button type="button">Button</button>
                <p>{ipsumText}</p>
            </div>,
            document.getElementById('react-container')
        );
    </script>
</head>
<body>
    <div id="react-container"></div>
</body>
</html>

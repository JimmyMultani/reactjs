<!DOCTYPE html>
<html>
<head>
    <script src="https://fb.me/react-0.13.3.min.js"></script>
    <script src="https://fb.me/JSXTransformer-0.13.3.js"></script>
    <script type="text/jsx">
    var MyComponent = React.createClass({
        render: function() {
            return (
                <h1>Hello, {this.props.name} world!</h1>
            );
        }
    });

    React.render(
        <MyComponent name="awesome" />,
        document.getElementById('mount-point')
    );
    </script>
</head>
<body>
    <div id="mount-point"></div>
</body>
</html>

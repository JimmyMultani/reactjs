<!DOCTYPE html>
<html>
<head>
    <script src="https://fb.me/react-0.13.3.min.js"></script>
    <script src="https://fb.me/JSXTransformer-0.13.3.js"></script>
    <script type="text/jsx">
        var ChildComponent = React.createClass({
            render: function() {
                return (
                    <div>
                        <div className="prompt">Add a click handler to this button so that when clicked, performMagic is called in the parent component.</div>
                        <button onClick={this.props.onMagicClick}>Do Magic</button>
                    </div>
                );
            }
        });

        var ParentComponent = React.createClass({
            performMagic: function() {
                alert('TAADAH!');
            },
            render: function() {
                return (
                    <div>
                        <ChildComponent onMagicClick={this.performMagic} />
                    </div>
                );
            }
        });

        React.render(
            <ParentComponent />,
            document.getElementById('react-container')
        );
    </script>
</head>
<body>
    <div id="react-container"></div>
</body>
</html>

import React from "react";
import ReactDOM from "react-dom/client";

function Example() {
    return (
        <div className="container">
            <div className="row justify-content-center">
                <table class="table-auto">
                    <thead>
                        <tr>
                            <th>Song</th>
                            <th>Artist</th>
                            <th>Year</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                The Sliding Mr. Bones (Next Stop, Pottersville)
                            </td>
                            <td>Malcolm Lockyer</td>
                            <td>1961</td>
                        </tr>
                        <tr>
                            <td>Witchy Woman</td>
                            <td>The Eagles</td>
                            <td>1972</td>
                        </tr>
                        <tr>
                            <td>Shining Star</td>
                            <td>Earth, Wind, and Fire</td>
                            <td>1975</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    );
}

export default Example;

if (document.getElementById("example")) {
    const Index = ReactDOM.createRoot(document.getElementById("example"));

    Index.render(
        <React.StrictMode>
            <Example />
        </React.StrictMode>
    );
}

var laravel = {
    chart: {
        height: 280,
        type: "radialBar",
    },

    series: [85],
    colors: ["#F22225"],

    plotOptions: {
        radialBar: {
            hollow: {
                margin: 15,
                size: "70%",
            },

            dataLabels: {
                showOn: "always",
                name: {
                    offsetY: -10,
                    show: true,
                    color: "#888",
                    fontSize: "20px",
                },
                value: {
                    color: "#111",
                    fontSize: "30px",
                    show: true,
                },
            },
        },
    },

    stroke: {
        lineCap: "round",
    },
    labels: ["Laravel"],
};

new ApexCharts(document.querySelector(".chart-laravel"), laravel).render();

var bs = {
    chart: {
        height: 280,
        type: "radialBar",
    },

    series: [87],
    colors: ["#F22225"],

    plotOptions: {
        radialBar: {
            hollow: {
                margin: 15,
                size: "70%",
            },

            dataLabels: {
                showOn: "always",
                name: {
                    offsetY: -10,
                    show: true,
                    color: "#888",
                    fontSize: "20px",
                },
                value: {
                    color: "#111",
                    fontSize: "30px",
                    show: true,
                },
            },
        },
    },

    stroke: {
        lineCap: "round",
    },
    labels: ["Bootstrap"],
};

new ApexCharts(document.querySelector(".chart-bs"), bs).render();

var sql = {
    chart: {
        height: 280,
        type: "radialBar",
    },

    series: [80],
    colors: ["#F22225"],

    plotOptions: {
        radialBar: {
            hollow: {
                margin: 15,
                size: "70%",
            },

            dataLabels: {
                showOn: "always",
                name: {
                    offsetY: -10,
                    show: true,
                    color: "#888",
                    fontSize: "20px",
                },
                value: {
                    color: "#111",
                    fontSize: "30px",
                    show: true,
                },
            },
        },
    },

    stroke: {
        lineCap: "round",
    },
    labels: ["MySQL"],
};

new ApexCharts(document.querySelector(".chart-sql"), sql).render();

var react = {
    chart: {
        height: 280,
        type: "radialBar",
    },

    series: [73],
    colors: ["#F22225"],

    plotOptions: {
        radialBar: {
            hollow: {
                margin: 15,
                size: "70%",
            },

            dataLabels: {
                showOn: "always",
                name: {
                    offsetY: -10,
                    show: true,
                    color: "#888",
                    fontSize: "20px",
                },
                value: {
                    color: "#111",
                    fontSize: "30px",
                    show: true,
                },
            },
        },
    },

    stroke: {
        lineCap: "round",
    },
    labels: ["React Native"],
};

new ApexCharts(document.querySelector(".chart-react"), react).render();

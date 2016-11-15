/**
 * Adobe Edge: symbol definitions
 */
(function($, Edge, compId){
//images folder
var im='images/';

var fonts = {};
var opts = {
    'gAudioPreloadPreference': 'auto',

    'gVideoPreloadPreference': 'auto'
};
var resources = [
];
var symbols = {
"stage": {
    version: "4.0.0",
    minimumCompatibleVersion: "4.0.0",
    build: "4.0.0.359",
    baseState: "Base State",
    scaleToFit: "both",
    centerStage: "none",
    initialState: "Base State",
    gpuAccelerate: false,
    resizeInstances: false,
    content: {
            dom: [
            {
                id: 'Symbol_1',
                type: 'rect',
                rect: ['49', '50','auto','auto','auto', 'auto']
            }],
            symbolInstances: [
            {
                id: 'Symbol_1',
                symbolName: 'Symbol_1',
                autoPlay: {

                }
            }
            ]
        },
    states: {
        "Base State": {
            "${_Stage}": [
                ["color", "background-color", 'rgba(255,255,255,1)'],
                ["style", "width", '260px'],
                ["style", "height", '50px'],
                ["style", "overflow", 'hidden']
            ],
            "${_Symbol_1}": [
                ["style", "left", '3px'],
                ["style", "top", '6px']
            ]
        }
    },
    timelines: {
        "Default Timeline": {
            fromState: "Base State",
            toState: "",
            duration: 3000,
            autoPlay: true,
            timeline: [
                { id: "eid285", tween: [ "style", "${_Symbol_1}", "top", '6px', { fromValue: '6px'}], position: 3000, duration: 0 },
                { id: "eid284", tween: [ "style", "${_Symbol_1}", "left", '3px', { fromValue: '3px'}], position: 3000, duration: 0 }            ]
        }
    }
},
"Symbol_1": {
    version: "4.0.0",
    minimumCompatibleVersion: "4.0.0",
    build: "4.0.0.359",
    baseState: "Base State",
    scaleToFit: "none",
    centerStage: "none",
    initialState: "Base State",
    gpuAccelerate: false,
    resizeInstances: false,
    content: {
            dom: [
                {
                    id: 'E-GROUP',
                    type: 'group',
                    rect: ['0px', '0px', '39', '39', 'auto', 'auto'],
                    c: [
                    {
                        rect: ['0px', '0px', '39px', '12px', 'auto', 'auto'],
                        stroke: [0, 'rgb(0, 0, 0)', 'none'],
                        id: 'E1',
                        opacity: 1,
                        type: 'rect',
                        fill: ['rgba(170,232,228,1.00)']
                    },
                    {
                        rect: ['0px', '13px', '39px', '13px', 'auto', 'auto'],
                        stroke: [0, 'rgb(0, 0, 0)', 'none'],
                        id: 'E2',
                        opacity: 1,
                        type: 'rect',
                        fill: ['rgba(170,232,228,1.00)']
                    },
                    {
                        rect: ['0px', '27px', '39px', '12px', 'auto', 'auto'],
                        stroke: [0, 'rgb(0, 0, 0)', 'none'],
                        id: 'E3',
                        opacity: 1,
                        type: 'rect',
                        fill: ['rgba(170,232,228,1.00)']
                    },
                    {
                        rect: ['0px', '12px', '39px', '2px', 'auto', 'auto'],
                        stroke: [0, 'rgb(0, 0, 0)', 'none'],
                        id: 'Eline1',
                        opacity: 1,
                        type: 'rect',
                        fill: ['rgba(170,232,228,1)']
                    },
                    {
                        rect: ['0px', '26px', '39px', '2px', 'auto', 'auto'],
                        stroke: [0, 'rgb(0, 0, 0)', 'none'],
                        id: 'Eline2',
                        opacity: 1,
                        type: 'rect',
                        fill: ['rgba(170,232,228,1)']
                    }]
                },
                {
                    id: 'C-GROUP',
                    type: 'group',
                    rect: ['44px', '0px', '39', '39', 'auto', 'auto'],
                    c: [
                    {
                        rect: ['0px', '0px', '99%', '39px', 'auto', 'auto'],
                        borderRadius: ['50%', '50%', '50%', '50%'],
                        id: 'C1',
                        stroke: [0, 'rgb(0, 0, 0)', 'none'],
                        type: 'ellipse',
                        fill: ['rgba(170,232,228,1)']
                    },
                    {
                        rect: ['0px', '0px', '99%', '39px', 'auto', 'auto'],
                        borderRadius: ['50%', '50%', '50%', '50%'],
                        id: 'C2',
                        stroke: [0, 'rgb(0, 0, 0)', 'none'],
                        type: 'ellipse',
                        fill: ['rgba(170,232,228,1)']
                    }]
                },
                {
                    rect: ['88px', '0px', '39px', '39px', 'auto', 'auto'],
                    id: 'H1',
                    stroke: [0, 'rgb(0, 0, 0)', 'none'],
                    type: 'rect',
                    fill: ['rgba(170,232,228,1.00)']
                },
                {
                    rect: ['88px', '0px', '39px', '39px', 'auto', 'auto'],
                    id: 'H2',
                    stroke: [0, 'rgb(0, 0, 0)', 'none'],
                    type: 'rect',
                    fill: ['rgba(170,232,228,1.00)']
                },
                {
                    id: 'O-GROUP',
                    type: 'group',
                    rect: ['132px', '0px', '39', '39', 'auto', 'auto'],
                    c: [
                    {
                        rect: ['0px', '0px', '99%', '39px', 'auto', 'auto'],
                        borderRadius: ['50%', '50%', '50%', '50%'],
                        type: 'ellipse',
                        id: 'O1',
                        stroke: [0, 'rgb(0, 0, 0)', 'none'],
                        clip: ['rect(0px -2.393554925918579px 39px 0px)'],
                        fill: ['rgba(170,232,228,1)']
                    },
                    {
                        rect: ['0px', '0px', '99%', '39px', 'auto', 'auto'],
                        borderRadius: ['50%', '50%', '50%', '50%'],
                        id: 'O2',
                        stroke: [0, 'rgb(0, 0, 0)', 'none'],
                        type: 'ellipse',
                        fill: ['rgba(170,232,228,1)']
                    }]
                },
                {
                    rect: ['171px', '0px', '1px', '39px', 'auto', 'auto'],
                    type: 'rect',
                    id: 'DIVIDER',
                    stroke: [0, 'rgb(0, 0, 0)', 'none'],
                    clip: ['rect(-0.1474609375px 2.8994140625px 38.8525390625px -2.736328125px)'],
                    fill: ['rgba(170,232,228,1.00)']
                },
                {
                    id: 'Echo_name_only',
                    type: 'image',
                    rect: ['184px', '0px', '71px', '40px', 'auto', 'auto'],
                    fill: ['rgba(0,0,0,0)', '/wp-content/themes/EchoCapital/assets/animations/LOGO_LINE_SLIDE/images/Echo_name_only.svg', '0px', '0px']
                }
            ],
            symbolInstances: [
            ]
        },
    states: {
        "Base State": {
            "${_O-GROUP}": [
                ["style", "top", '0px'],
                ["style", "opacity", '0.000000'],
                ["style", "left", '132px']
            ],
            "${_H2}": [
                ["style", "top", '0px'],
                ["color", "background-color", 'rgba(170,232,228,1)'],
                ["style", "clip", [0,39,39,0], {valueTemplate:'rect(@@0@@px @@1@@px @@2@@px @@3@@px)'} ],
                ["style", "opacity", '0'],
                ["style", "left", '88px'],
                ["style", "width", '39px']
            ],
            "${_C1}": [
                ["style", "top", '0px'],
                ["style", "left", '0px'],
                ["style", "clip", [0,-1.0917969942092896,39,0], {valueTemplate:'rect(@@0@@px @@1@@px @@2@@px @@3@@px)'} ]
            ],
            "${_C-GROUP}": [
                ["style", "top", '0px'],
                ["style", "opacity", '0.000000'],
                ["style", "left", '44px']
            ],
            "${symbolSelector}": [
                ["style", "height", '40px'],
                ["style", "width", '254px']
            ],
            "${_Eline1}": [
                ["style", "top", '11px'],
                ["transform", "scaleY", '2'],
                ["style", "clip", [0,39,2,0], {valueTemplate:'rect(@@0@@px @@1@@px @@2@@px @@3@@px)'} ],
                ["style", "left", '0px']
            ],
            "${_C2}": [
                ["style", "top", '0px'],
                ["style", "left", '0px'],
                ["style", "clip", [0,39,39,0], {valueTemplate:'rect(@@0@@px @@1@@px @@2@@px @@3@@px)'} ]
            ],
            "${_Echo_name_only}": [
                ["style", "top", '0px'],
                ["style", "opacity", '0'],
                ["style", "left", '167px']
            ],
            "${_E2}": [
                ["color", "background-color", 'rgba(170,232,228,1.00)'],
                ["style", "height", '13px'],
                ["style", "top", '13px'],
                ["style", "left", '0px'],
                ["style", "width", '39px']
            ],
            "${_E1}": [
                ["color", "background-color", 'rgba(170,232,228,1.00)'],
                ["style", "height", '12px'],
                ["style", "top", '0px'],
                ["style", "left", '0px'],
                ["style", "width", '39px']
            ],
            "${_O1}": [
                ["style", "top", '0px'],
                ["style", "left", '0px'],
                ["style", "clip", [0,-2.393554925918579,39,0], {valueTemplate:'rect(@@0@@px @@1@@px @@2@@px @@3@@px)'} ]
            ],
            "${_E3}": [
                ["color", "background-color", 'rgba(170,232,228,1.00)'],
                ["style", "height", '12px'],
                ["style", "top", '27px'],
                ["style", "left", '0px'],
                ["style", "width", '39px']
            ],
            "${_H1}": [
                ["color", "background-color", 'rgba(170,232,228,1.00)'],
                ["style", "top", '0px'],
                ["style", "clip", [0,-0.6738280057907104,39,0], {valueTemplate:'rect(@@0@@px @@1@@px @@2@@px @@3@@px)'} ],
                ["style", "opacity", '0'],
                ["style", "left", '88px'],
                ["style", "width", '39px']
            ],
            "${_O2}": [
                ["style", "top", '0px'],
                ["style", "left", '0px'],
                ["style", "clip", [0,39,39,0], {valueTemplate:'rect(@@0@@px @@1@@px @@2@@px @@3@@px)'} ]
            ],
            "${_DIVIDER}": [
                ["style", "top", '0px'],
                ["style", "left", '171px'],
                ["style", "height", '39px'],
                ["style", "opacity", '0'],
                ["style", "clip", [-0.1474609375,2.8994140625,38.8525390625,-2.736328125], {valueTemplate:'rect(@@0@@px @@1@@px @@2@@px @@3@@px)'} ],
                ["color", "background-color", 'rgba(170,232,228,1.00)']
            ],
            "${_E-GROUP}": [
                ["style", "top", '0px'],
                ["style", "opacity", '0.000000'],
                ["style", "left", '0px']
            ],
            "${_Eline2}": [
                ["style", "top", '25px'],
                ["transform", "scaleY", '2'],
                ["style", "left", '0px'],
                ["style", "clip", [0,39,2,0], {valueTemplate:'rect(@@0@@px @@1@@px @@2@@px @@3@@px)'} ]
            ]
        }
    },
    timelines: {
        "Default Timeline": {
            fromState: "Base State",
            toState: "",
            duration: 3000,
            autoPlay: true,
            timeline: [
                { id: "eid155", tween: [ "style", "${_DIVIDER}", "left", '183px', { fromValue: '171px'}], position: 2407, duration: 593 },
                { id: "eid136", tween: [ "style", "${_C2}", "clip", [0,39,39,25.16796875], { valueTemplate: 'rect(@@0@@px @@1@@px @@2@@px @@3@@px)', fromValue: [0,39,39,0]}], position: 1702, duration: 380 },
                { id: "eid125", tween: [ "style", "${_H1}", "opacity", '1', { fromValue: '0'}], position: 500, duration: 500 },
                { id: "eid135", tween: [ "style", "${_C1}", "clip", [0,24.048828125,39,0], { valueTemplate: 'rect(@@0@@px @@1@@px @@2@@px @@3@@px)', fromValue: [0,-1.0917969942092896,39,0]}], position: 1702, duration: 380 },
                { id: "eid120", tween: [ "style", "${_C-GROUP}", "opacity", '1', { fromValue: '0.000000'}], position: 250, duration: 500 },
                { id: "eid126", tween: [ "style", "${_H2}", "opacity", '1', { fromValue: '0'}], position: 500, duration: 500 },
                { id: "eid129", tween: [ "style", "${_Eline1}", "clip", [0,39,2,39.794921875], { valueTemplate: 'rect(@@0@@px @@1@@px @@2@@px @@3@@px)', fromValue: [0,39,2,0]}], position: 1000, duration: 380 },
                { id: "eid147", tween: [ "style", "${_O2}", "clip", [0,39,39,40.310546875], { valueTemplate: 'rect(@@0@@px @@1@@px @@2@@px @@3@@px)', fromValue: [0,39,39,0]}], position: 2384, duration: 408 },
                { id: "eid114", tween: [ "style", "${_E-GROUP}", "opacity", '1', { fromValue: '0.000000'}], position: 0, duration: 500 },
                { id: "eid156", tween: [ "style", "${_DIVIDER}", "opacity", '0.92', { fromValue: '0'}], position: 2747, duration: 253 },
                { id: "eid130", tween: [ "style", "${_Eline2}", "clip", [0,39,2,40.0810546875], { valueTemplate: 'rect(@@0@@px @@1@@px @@2@@px @@3@@px)', fromValue: [0,39,2,0]}], position: 1323, duration: 380 },
                { id: "eid164", tween: [ "style", "${_Echo_name_only}", "left", '183px', { fromValue: '167px'}], position: 2747, duration: 253 },
                { id: "eid142", tween: [ "style", "${_H2}", "clip", [0,39,39,20.1201171875], { valueTemplate: 'rect(@@0@@px @@1@@px @@2@@px @@3@@px)', fromValue: [0,39,39,0]}], position: 2056, duration: 289 },
                { id: "eid141", tween: [ "style", "${_H1}", "clip", [0,18.9365234375,39,0], { valueTemplate: 'rect(@@0@@px @@1@@px @@2@@px @@3@@px)', fromValue: [0,-0.6738280057907104,39,0]}], position: 2056, duration: 289 },
                { id: "eid163", tween: [ "style", "${_Echo_name_only}", "opacity", '1', { fromValue: '0'}], position: 2789, duration: 211 },
                { id: "eid128", tween: [ "style", "${_O-GROUP}", "opacity", '1', { fromValue: '0.000000'}], position: 750, duration: 500 },
                { id: "eid146", tween: [ "style", "${_O1}", "clip", [0,39.2666015625,39,0], { valueTemplate: 'rect(@@0@@px @@1@@px @@2@@px @@3@@px)', fromValue: [0,-2.393554925918579,39,0]}], position: 2371, duration: 419 }            ]
        }
    }
}
};


Edge.registerCompositionDefn(compId, symbols, fonts, resources, opts);

/**
 * Adobe Edge DOM Ready Event Handler
 */
$(window).ready(function() {
     Edge.launchComposition(compId);
});
})(jQuery, AdobeEdge, "logo_lines");
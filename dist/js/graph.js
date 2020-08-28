//radar
var ctxR = document.getElementById("radarChart").getContext('2d');
var myRadarChart = new Chart(ctxR, {
type: 'radar',
data: {
labels: ["HTML", "CSS", "JavaScript", "Bootstrap", "jQuery", "React", "Vue"],
datasets: [{
label: "Proficiency",
data: [94, 91, 82, 90, 87, 76, 86],
backgroundColor: [
'rgba(149, 54, 54, 0.52)',
],
borderColor: [
'rgb(175, 18, 18)',
],
borderWidth: 2
},
]
},
options: {
responsive: true
}
});
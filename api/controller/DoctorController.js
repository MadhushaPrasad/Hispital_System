$(document).ready(function () {
    getAllDoctors();
});


function getAllDoctors() {
    for (var i = 1; i <= 10; i++) {
        $('#doctorBody').append(" <tr>\n" +
            "                            <th scope=\"row\">" + i+ "</th>\n" +
            "                            <td>Madhusha Prasad</td>\n" +
            "                            <td>0715546544</td>\n" +
            "                            <td>43/2,Kalutara</td>\n" +
            "                            <td>1500</td>\n" +
            "                            <td>PHD</td>\n" +
            "                            <td>Medic Center</td>\n" +
            "                            <td>15/8/1990</td>\n" +
            "                        </tr>");
    }
}

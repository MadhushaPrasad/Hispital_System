$(document).ready(function () {
    getAllAppointment();
    getAllDoctors();
    getAllOutofStockmedic();
});


function getAllAppointment() {
    for (var i = 1;i<=10;i++){
        $('#appointmentBody').append(" <tr>\n" +
            "                            <th scope=\"row\">"+i+"</th>\n" +
            "                            <td>Madhusha</td>\n" +
            "                            <td>OPD</td>\n" +
            "                            <td>Prasad</td>\n" +
            "                            <td>12/5/2020</td>\n" +
            "                            <td>12.25.P.M</td>\n" +
            "                        </tr>");
    }
}

function getAllDoctors() {
    for (var i = 1; i <= 10; i++) {
        $('#doctorBody').append(" <tr>\n" +
            "                            <th scope=\"row\">"+i+"</th>\n" +
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

function getAllOutofStockmedic() {
    for (var i = 1;i<=10;i++){
        $('#outOfStock').append(" <tr>\n" +
            "                            <th scope=\"row\">"+i+"</th>\n" +
            "                            <td>Penadol</td>\n" +
            "                            <td>Penadol</td>\n" +
            "                            <td>10g</td>\n" +
            "                            <td>12/5/2020</td>\n" +
            "                            <td>12.25.P.M</td>\n" +
            "                        </tr>");
    }
}
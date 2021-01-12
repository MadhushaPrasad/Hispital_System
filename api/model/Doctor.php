<?php


class Doctor
{
    private $doctor_id;
    private $clinic_id;
    private $firstName;
    private $lastName;
    private $address;
    private $mNumber;
    private $conCharge;
    private $education;
    private $dob;
    private $status;

    /**
     * Doctor constructor.
     * @param $clinic_id
     * @param $firstName
     * @param $lastName
     * @param $address
     * @param $mNumber
     * @param $conCharge
     * @param $education
     * @param $dob
     * @param $status
     */
    public function __construct($clinic_id, $firstName, $lastName, $address, $mNumber, $conCharge, $education, $dob, $status)
    {
        $this->clinic_id = $clinic_id;
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->address = $address;
        $this->mNumber = $mNumber;
        $this->conCharge = $conCharge;
        $this->education = $education;
        $this->dob = $dob;
        $this->status = $status;
    }

    /**
     * @return mixed
     */
    public function getDoctorId()
    {
        return $this->doctor_id;
    }

    /**
     * @param mixed $doctor_id
     */
    public function setDoctorId($doctor_id)
    {
        $this->doctor_id = $doctor_id;
    }

    /**
     * @return mixed
     */
    public function getClinicId()
    {
        return $this->clinic_id;
    }

    /**
     * @param mixed $clinic_id
     */
    public function setClinicId($clinic_id)
    {
        $this->clinic_id = $clinic_id;
    }

    /**
     * @return mixed
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * @param mixed $firstName
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;
    }

    /**
     * @return mixed
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * @param mixed $lastName
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;
    }

    /**
     * @return mixed
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * @param mixed $address
     */
    public function setAddress($address)
    {
        $this->address = $address;
    }

    /**
     * @return mixed
     */
    public function getMNumber()
    {
        return $this->mNumber;
    }

    /**
     * @param mixed $mNumber
     */
    public function setMNumber($mNumber)
    {
        $this->mNumber = $mNumber;
    }

    /**
     * @return mixed
     */
    public function getConCharge()
    {
        return $this->conCharge;
    }

    /**
     * @param mixed $conCharge
     */
    public function setConCharge($conCharge)
    {
        $this->conCharge = $conCharge;
    }

    /**
     * @return mixed
     */
    public function getEducation()
    {
        return $this->education;
    }

    /**
     * @param mixed $education
     */
    public function setEducation($education)
    {
        $this->education = $education;
    }

    /**
     * @return mixed
     */
    public function getDob()
    {
        return $this->dob;
    }

    /**
     * @param mixed $dob
     */
    public function setDob($dob)
    {
        $this->dob = $dob;
    }

    /**
     * @return mixed
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param mixed $status
     */
    public function setStatus($status)
    {
        $this->status = $status;
    }

}
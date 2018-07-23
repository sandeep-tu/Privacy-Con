<?php
/*******************************************************************************
* WESD                                                                         *
*                                                                              *
* Version: 1.0                                                                 *
* Date:    July 18, 2018                                                       *
* Author:  Sandee Tu                                                           *
*******************************************************************************/
require('fpdf.php'); 


$words=array("This Addendum A to the Agreement (\"Agreement\") between the Woodside Elementary School District (\"District\") and ",
    "(\"Contractor\") is entered into on",
    "(\"Effective Date\").", 

        ", the District and Contractor entered into the Agreement, which relates to the provision by Contractor of certain technology services; and ",

        "the District is a California public entity subject to all state and federal laws governing education, including but not limited to California Assembly Bill 1584 (\"AB 1584\"), the California Education Code, the Children's Online Privacy and Protection Act (\"COPPA\"), and the Family Educational Rights and Privacy Act (\"FERPA\");",

        "AB 1584 requires, in part, that any agreement entered into, renewed or amended after January 1, 2015 between a local education agency and a third-party service provider must include certain terms related to, among other things, the treatment and protection of pupil-related records and data; and",

        "the District and the Contractor wish to incorporate into the Agreement all terms and conditions required to be included pursuant to AB 1584.",

        " the Parties agree as follows:",

        "1. The terms and conditions of this Addendum A are incorporated by reference in full into the Agreement.",

        "2. The term of this Addendum A shall be the same as the term of the Agreement.",

        "3. Contractor acknowledges and agrees that pupil records obtained by Contractor from the District pursuant to the Agreement continue to be the property of and under the control of the District.  ",

        "a.  For purposes of this Addendum, \"pupil records\") include any information directly related to a pupil that is maintained by the District and that is provided to the Contractor pursuant to the Agreement or any information acquired directly from a pupil of the District through the use of instructional software or applications assigned to the pupil by a teacher or other District employee.  ",

        "b.  For purposes of this Addendum, \"pupil records\") exclude de-identified information (information that cannot be used to identify an individual pupil) used by the third party (i) to improve educational products for adaptive learning purposes and for customized pupil learning; (ii) to demonstrate the effectiveness of the operator's products in the marketing of those products; or (iii) for the development and improvement of educational sites, services, or applications.",

        "4.  The Contractor shall employ all of the following procedures to ensure that District pupils may retain possession and control of their own pupil-generated content: ",

        "5.  The Contractor shall employ and make available the following procedures by which a District pupil may transfer pupil-generated content to a personal account: ",

        "6.  The Contractor shall make available the following protocols/procedures by which District parents, legal guardians, or eligible pupils may review personally identifiable information in the pupil's records and correct erroneous information:",

        "7.  The Contractor shall take all of the following measures to ensure the security and confidentiality of District pupil records, including but not limited to designating and training responsible individuals on ensuring the security and confidentiality of pupil records, provided, however, that Contractor acknowledges that compliance with such procedures shall not itself absolve Contractor of liability in the event of an unauthorized disclosure of pupil records: ",

        "8.  In the event of an unauthorized disclosure of a District pupil's records, Contractor shall report such disclosure to all affected parents, legal guardians, or eligible pupils pursuant to the following procedure: ",

        "9.  Contractor shall not use any information in a District pupil record for any purpose other than those required or specifically permitted by the terms of the Agreement and Contractor specifically agrees that Contractor shall not use any personally identifiable information in District pupil records to engage in targeted advertising, nor shall Contractor make such personally identifiable information available to any other party for targeted advertising.",

        "10. Contractor certifies that no District pupil's records shall not be retained or available to the Contractor after the end of the term of the Agreement, except where a pupil's parent or guardian chooses to establish or maintain an account with Contractor for the purpose of storing pupil-generated content, either by retaining possession and control of their own pupil-generated content, or by transferring pupil-generated content to a personal account. Contractor shall enforce this certification that pupil records shall not be retained or available to Contractor after the end of the term of the Agreement through the following procedure:",

        "11.  The District will to work with Service Provider to ensure compliance with FERPA and the Parties will work to jointly ensure compliance with FERPA through the following procedure: ",

        "parties execute this Addendum, effective as of the date set forth above.  ",

        "_______________________________",

        "Woodside Elementary School District",

        "Contractor");


if(isset($_POST['field1']) && isset($_POST['field2'])) {

    //create a FPDF object
$pdf=new FPDF();

//set document properties
$pdf->SetAuthor('Lana Kovacevic');
$pdf->SetTitle('Addendum A to the Agreement');

//set font for the entire document
$pdf->SetFont('Helvetica','B',15);
$pdf->SetTextColor(50,60,100);

//set up a page
$pdf->AddPage('P'); 
$pdf->SetDisplayMode(real,'default');


//display the title with a border around it
$pdf->SetXY(60,20);
$pdf->SetDrawColor(50,60,100);
$str = "Addendum A to the Agreement"."\r\n"."   Between the Woodside Elementary School District and ".$_POST['field']."\r\n"."               \t\t\tRegarding Assembly Bill 1584 Compliance"."\r\n";
//$pdf->Cell(100,20,$str,1,0,'C',0);
$pdf->Write(5,$str);

//Set x and y position for the main text, reduce font size and write content
$pdf->SetXY (10,50);
$pdf->SetFont('Helvetica','',10);
	
	 
    $data = $words[0]." ".$_POST['field1']."".$words[1]." ".$_POST['field2']." ".$words[2]."\n\n";

    $ret = file_put_contents('mydata.txt', $data, FILE_APPEND | LOCK_EX);
    $pdf->Write(5,$data);

    $pdf->SetFont('Helvetica','B',10);

    $data2 = "      WHEREAS, on ";
    $pdf->Write(5,$data2);
    $data3 = $_POST['field3']." ".$words[3]."\n\n";;
    $pdf->SetFont('Helvetica','',10);
    $pdf->Write(5,$data3);

    $data4 = "      WHEREAS, ";
    $pdf->SetFont('Helvetica','B',10);
    $pdf->Write(5,$data4);

    $pdf->SetFont('Helvetica','',10);
    $data5 = $words[4]."\n\n";
    $pdf->Write(5,$data5);

    $pdf->SetFont('Helvetica','B',10);
    $pdf->Write(5,$data4);
    $pdf->SetFont('Helvetica','',10);
    $data6 = $words[5]."\n\n";
    $pdf->Write(5,$data6);

    $pdf->SetFont('Helvetica','B',10);
    $pdf->Write(5,$data4);
    $pdf->SetFont('Helvetica','',10);
    $data7 = $words[6]."\n\n";
    $pdf->Write(5,$data7);

    $data8 = "        NOW, THEREFORE,";
    $pdf->SetFont('Helvetica','B',10);
    $pdf->Write(5,$data8);
    $pdf->SetFont('Helvetica','',10);
    $data8 = $words[7]."\n\n";
    $pdf->Write(5,$data8);

    $pdf->SetFont('Helvetica','',10);
    $data9 = $words[8]."\n\n".$words[9]."\n\n".$words[10]."\n\n"."      ".$words[11]."\n\n"."       ".$words[12]."\n\n".$words[13]."\n\n".
    $_POST['field4']."\n\n".$words[14]."\n\n".
    $_POST['field5']."\n\n".$words[15]."\n\n".
    $_POST['field6']."\n\n".$words[16]."\n\n".
    $_POST['field7']."\n\n".$words[17]."\n\n".
    $_POST['field8']."\n\n".$words[18]."\n\n".$words[19]."\n\n".$_POST['field9']."\n\n".$words[20]."\n\n".$_POST['field10']."\n\n";
    ;

    $pdf->Write(5,$data9);

    $pdf->SetFont('Helvetica','B',10);
    $data10 = "IN WITNESSWHEREOF, ";
    $pdf->Write(5,$data10);

    $pdf->SetFont('Helvetica','',10);
    $data11 = $words[21];
    $pdf->Write(5,$data11);


    $data12 = "\n\n\n\n\n\n\n\n\n\n\n".$words[22]. "                                           ".$words[22];
    $pdf->Write(5,$data12);

    $data13 = "\n".$words[23]. "                                                 ".$words[24];
    $pdf->Write(5,$data13);



        //Output the document
$pdf->Output('example1.pdf','I');
    if($ret === false) {
        die('There was an error writing this file');
    }
    else {
        echo "$ret bytes written to file";

        
    }


}
else {
   die('no post data to process');
}
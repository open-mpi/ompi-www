<?
$subject_val = "Re: [OMPI users] FW: Issue with mpicc --showme in windows";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jun  9 23:41:14 2011" -->
<!-- isoreceived="20110610034114" -->
<!-- sent="Fri, 10 Jun 2011 05:41:03 +0200" -->
<!-- isosent="20110610034103" -->
<!-- name="AMARNATH, Balachandar" -->
<!-- email="BALACHANDAR.AMARNATH_at_[hidden]" -->
<!-- subject="Re: [OMPI users] FW: Issue with mpicc --showme in windows" -->
<!-- id="18294_1307677267_4DF19253_18294_9163_1_E6472BD072676843ADB8D37E50F4C88DFBC1B3C1_at_DE0-MAILMBX-P21.res.airbus.corp" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="2253_1307656881_4DF142B0_2253_89_1_4DF142B2.2090909_at_hlrs.de" -->
<!-- expires="-1" -->
<div class="center">
<table border="2" width="100%" class="links">
<tr>
<th><a href="date.php">Date view</a></th>
<th><a href="index.php">Thread view</a></th>
<th><a href="subject.php">Subject view</a></th>
<th><a href="author.php">Author view</a></th>
</tr>
</table>
</div>
<p class="headers">
<strong>Subject:</strong> Re: [OMPI users] FW: Issue with mpicc --showme in windows<br>
<strong>From:</strong> AMARNATH, Balachandar (<em>BALACHANDAR.AMARNATH_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-06-09 23:41:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16701.php">Shiqing Fan: "Re: [OMPI users] FW: Issue with mpicc --showme in windows"</a>
<li><strong>Previous message:</strong> <a href="16699.php">Shiqing Fan: "Re: [OMPI users] Building OpenMPI v. 1.4.3 in VS2008"</a>
<li><strong>Maybe in reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2011/05/16603.php">AMARNATH, Balachandar: "[OMPI users] FW: Issue with mpicc --showme in windows"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16701.php">Shiqing Fan: "Re: [OMPI users] FW: Issue with mpicc --showme in windows"</a>
<li><strong>Reply:</strong> <a href="16701.php">Shiqing Fan: "Re: [OMPI users] FW: Issue with mpicc --showme in windows"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I use this version <a href="http://www.open-mpi.org/software/ompi/v1.5/downloads/OpenMPI_v1.5.3-2_win32.exe">http://www.open-mpi.org/software/ompi/v1.5/downloads/OpenMPI_v1.5.3-2_win32.exe</a>
<br>
<p><p>Regards
<br>
Balachandar
<br>
<p>From: Shiqing Fan [mailto:fan_at_[hidden]]
<br>
Sent: 10 June 2011 03:31
<br>
To: Open MPI Users
<br>
Cc: AMARNATH, Balachandar
<br>
Subject: Re: [OMPI users] FW: Issue with mpicc --showme in windows
<br>
<p>Hi Balachandar,
<br>
<p>Which version of OMPI did you use? I know old versions on Windows have such problem. Using a newer version will solve your problem.
<br>
<p><p>Regards,
<br>
Shiqing
<br>
<p>On 2011-05-23 11:45 AM, AMARNATH, Balachandar wrote:
<br>
Hi,
<br>
<p>I still don't understand why the command is trying to open a configuration file from a non-existing location. For me its weird..!! May be, I am doing wrong somewhere? Am I missing some environment variables which I need to set before starts working with it ?
<br>
<p><p>Regards
<br>
Balachandar
<br>
<p>_____________________________________________
<br>
From: AMARNATH, Balachandar
<br>
Sent: 20 May 2011 17:48
<br>
To: 'users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;'
<br>
Subject: Issue with mpicc --showme in windows
<br>
<p><p>Hello,
<br>
<p>Here in my windows machine, if i ran mpicc -showme, i get erroneous output like below:-
<br>
<p>******************
<br>
C:\&gt;C:\Users\BAAMARNA5617\Programs\mpi\OpenMPI_v1.5.3-win32\bin\mpicc.exe --showme
<br>
Cannot open configuration file C:/Users/hpcfan/Documents/OpenMPI/openmpi-1.5.3/i
<br>
nstalled-32/share/openmpi\mpif77.exe-wrapper-data.txt
<br>
Error parsing data file mpif77.exe: Not found
<br>
******************
<br>
<p><p>I installed openmpi from <a href="http://www.open-mpi.org/software/ompi/v1.5/downloads/OpenMPI_v1.5.3-2_win32.exe">http://www.open-mpi.org/software/ompi/v1.5/downloads/OpenMPI_v1.5.3-2_win32.exe</a> and end up with error.  (Read in a forum that 1.4 version of openmpi does not support fortran bindings and hence obtained one of the recent releases). Hope to fix this soon,
<br>
<p>With thanks and regards
<br>
Balachandar
<br>
<p><p><p><p>The information in this e-mail is confidential. The contents may not be disclosed or used by anyone other than the addressee. Access to this e-mail by anyone else is unauthorised.
<br>
<p>If you are not the intended recipient, please notify Airbus immediately and delete this e-mail.
<br>
<p>Airbus cannot accept any responsibility for the accuracy or completeness of this e-mail as it has been sent over public networks. If you have any concerns over the content of this message or its Accuracy or Integrity, please contact Airbus immediately.
<br>
<p>All outgoing e-mails from Airbus are checked using regularly updated virus scanning software but you should take whatever measures you deem to be appropriate to ensure that this message and any attachments are virus free.
<br>
<p><p><p><p><p>_______________________________________________
<br>
<p>users mailing list
<br>
<p>users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;
<br>
<p><a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
<p><p><p><p><pre>
--
---------------------------------------------------------------
Shiqing Fan
High Performance Computing Center Stuttgart (HLRS)
Tel: ++49(0)711-685-87234      Nobelstrasse 19
Fax: ++49(0)711-685-65832      70569 Stuttgart
<a href="http://www.hlrs.de/organization/people/shiqing-fan/">http://www.hlrs.de/organization/people/shiqing-fan/</a>
email: fan_at_[hidden]&lt;mailto:fan_at_[hidden]&gt;
This mail has originated outside your organization, either from an external partner or the Global Internet.
Keep this in mind if you answer this message.
The information in this e-mail is confidential. The contents may not be disclosed or used by anyone other than the addressee. Access to this e-mail by anyone else is unauthorised.
If you are not the intended recipient, please notify Airbus immediately and delete this e-mail.
Airbus cannot accept any responsibility for the accuracy or completeness of this e-mail as it has been sent over public networks. If you have any concerns over the content of this message or its Accuracy or Integrity, please contact Airbus immediately.
All outgoing e-mails from Airbus are checked using regularly updated virus scanning software but you should take whatever measures you deem to be appropriate to ensure that this message and any attachments are virus free.
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-16700/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16701.php">Shiqing Fan: "Re: [OMPI users] FW: Issue with mpicc --showme in windows"</a>
<li><strong>Previous message:</strong> <a href="16699.php">Shiqing Fan: "Re: [OMPI users] Building OpenMPI v. 1.4.3 in VS2008"</a>
<li><strong>Maybe in reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2011/05/16603.php">AMARNATH, Balachandar: "[OMPI users] FW: Issue with mpicc --showme in windows"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16701.php">Shiqing Fan: "Re: [OMPI users] FW: Issue with mpicc --showme in windows"</a>
<li><strong>Reply:</strong> <a href="16701.php">Shiqing Fan: "Re: [OMPI users] FW: Issue with mpicc --showme in windows"</a>
<!-- reply="end" -->
</ul>
<div class="center">
<table border="2" width="100%" class="links">
<tr>
<th><a href="date.php">Date view</a></th>
<th><a href="index.php">Thread view</a></th>
<th><a href="subject.php">Subject view</a></th>
<th><a href="author.php">Author view</a></th>
</tr>
</table>
</div>
<!-- trailer="footer" -->
<? include("../../include/msg-footer.inc") ?>

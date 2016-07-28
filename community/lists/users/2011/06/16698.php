<?
$subject_val = "Re: [OMPI users] FW: Issue with mpicc --showme in windows";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jun  9 18:01:27 2011" -->
<!-- isoreceived="20110609220127" -->
<!-- sent="Fri, 10 Jun 2011 00:01:22 +0200" -->
<!-- isosent="20110609220122" -->
<!-- name="Shiqing Fan" -->
<!-- email="fan_at_[hidden]" -->
<!-- subject="Re: [OMPI users] FW: Issue with mpicc --showme in windows" -->
<!-- id="4DF142B2.2090909_at_hlrs.de" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="25071_1306143955_4DDA2CD3_25071_8_1_E6472BD072676843ADB8D37E50F4C88DFBAC68DD_at_DE0-MAILMBX-P21.res.airbus.corp" -->
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
<strong>From:</strong> Shiqing Fan (<em>fan_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-06-09 18:01:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16699.php">Shiqing Fan: "Re: [OMPI users] Building OpenMPI v. 1.4.3 in VS2008"</a>
<li><strong>Previous message:</strong> <a href="16697.php">francoise.roch_at_[hidden]: "Re: [OMPI users] MPI_COMM_DUP freeze with OpenMPI 1.4.1"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2011/05/16603.php">AMARNATH, Balachandar: "[OMPI users] FW: Issue with mpicc --showme in windows"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16700.php">AMARNATH, Balachandar: "Re: [OMPI users] FW: Issue with mpicc --showme in windows"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Balachandar,
<br>
<p>Which version of OMPI did you use? I know old versions on Windows have 
<br>
such problem. Using a newer version will solve your problem.
<br>
<p><p>Regards,
<br>
Shiqing
<br>
<p>On 2011-05-23 11:45 AM, AMARNATH, Balachandar wrote:
<br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; I still don't understand why the command is trying to open a 
</span><br>
<span class="quotelev1">&gt; configuration file from a non-existing location. For me its weird..!! 
</span><br>
<span class="quotelev1">&gt; May be, I am doing wrong somewhere? Am I missing some environment 
</span><br>
<span class="quotelev1">&gt; variables which I need to set before starts working with it ?
</span><br>
<span class="quotelev1">&gt; Regards
</span><br>
<span class="quotelev1">&gt; Balachandar
</span><br>
<span class="quotelev1">&gt; _____________________________________________
</span><br>
<span class="quotelev1">&gt; *From:* AMARNATH, Balachandar
</span><br>
<span class="quotelev1">&gt; *Sent:* 20 May 2011 17:48
</span><br>
<span class="quotelev1">&gt; *To:* 'users_at_[hidden]'
</span><br>
<span class="quotelev1">&gt; *Subject:* Issue with mpicc --showme in windows
</span><br>
<span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt; Here in my windows machine, if i ran mpicc --showme, i get erroneous 
</span><br>
<span class="quotelev1">&gt; output like below:-
</span><br>
<span class="quotelev1">&gt; ******************
</span><br>
<span class="quotelev1">&gt; C:\&gt;C:\Users\BAAMARNA5617\Programs\mpi\OpenMPI_v1.5.3-win32\bin\mpicc.exe 
</span><br>
<span class="quotelev1">&gt; --showme
</span><br>
<span class="quotelev1">&gt; Cannot open configuration file 
</span><br>
<span class="quotelev1">&gt; C:/Users/hpcfan/Documents/OpenMPI/openmpi-1.5.3/i
</span><br>
<span class="quotelev1">&gt; nstalled-32/share/openmpi\mpif77.exe-wrapper-data.txt
</span><br>
<span class="quotelev1">&gt; Error parsing data file mpif77.exe: Not found
</span><br>
<span class="quotelev1">&gt; ******************
</span><br>
<span class="quotelev1">&gt; I installed openmpi from 
</span><br>
<span class="quotelev1">&gt; _<a href="http://www.open-mpi.org/software/ompi/v1.5/downloads/OpenMPI_v1.5.3-2_win32.exe">http://www.open-mpi.org/software/ompi/v1.5/downloads/OpenMPI_v1.5.3-2_win32.exe</a>_ 
</span><br>
<span class="quotelev1">&gt; and end up with error.  (Read in a forum that 1.4 version of openmpi 
</span><br>
<span class="quotelev1">&gt; does not support fortran bindings and hence obtained one of the recent 
</span><br>
<span class="quotelev1">&gt; releases). Hope to fix this soon,
</span><br>
<span class="quotelev1">&gt; With thanks and regards
</span><br>
<span class="quotelev1">&gt; Balachandar
</span><br>
<span class="quotelev1">&gt; The information in this e-mail is confidential. The contents may not be disclosed or used by anyone other than the addressee. Access to this e-mail by anyone else is unauthorised.
</span><br>
<span class="quotelev1">&gt; If you are not the intended recipient, please notify Airbus immediately and delete this e-mail.
</span><br>
<span class="quotelev1">&gt; Airbus cannot accept any responsibility for the accuracy or completeness of this e-mail as it has been sent over public networks. If you have any concerns over the content of this message or its Accuracy or Integrity, please contact Airbus immediately.
</span><br>
<span class="quotelev1">&gt; All outgoing e-mails from Airbus are checked using regularly updated virus scanning software but you should take whatever measures you deem to be appropriate to ensure that this message and any attachments are virus free.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><pre>
-- 
---------------------------------------------------------------
Shiqing Fan
High Performance Computing Center Stuttgart (HLRS)
Tel: ++49(0)711-685-87234      Nobelstrasse 19
Fax: ++49(0)711-685-65832      70569 Stuttgart
<a href="http://www.hlrs.de/organization/people/shiqing-fan/">http://www.hlrs.de/organization/people/shiqing-fan/</a>
email: fan_at_[hidden]
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-16698/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16699.php">Shiqing Fan: "Re: [OMPI users] Building OpenMPI v. 1.4.3 in VS2008"</a>
<li><strong>Previous message:</strong> <a href="16697.php">francoise.roch_at_[hidden]: "Re: [OMPI users] MPI_COMM_DUP freeze with OpenMPI 1.4.1"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2011/05/16603.php">AMARNATH, Balachandar: "[OMPI users] FW: Issue with mpicc --showme in windows"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16700.php">AMARNATH, Balachandar: "Re: [OMPI users] FW: Issue with mpicc --showme in windows"</a>
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

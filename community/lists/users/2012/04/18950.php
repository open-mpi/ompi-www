<?
$subject_val = "Re: [OMPI users] configuration of openmpi-1.5.4 with visual studio";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Apr  5 04:48:03 2012" -->
<!-- isoreceived="20120405084803" -->
<!-- sent="Thu, 5 Apr 2012 08:47:57 +0000" -->
<!-- isosent="20120405084757" -->
<!-- name="toufik hadjazi" -->
<!-- email="h_toufik7_at_[hidden]" -->
<!-- subject="Re: [OMPI users] configuration of openmpi-1.5.4 with visual studio" -->
<!-- id="DUB114-W50672EC3B7ECFABB6EF1BBB0330_at_phx.gbl" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="DUB114-W117F7AB002038B23BA15B1AB0330_at_phx.gbl" -->
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
<strong>Subject:</strong> Re: [OMPI users] configuration of openmpi-1.5.4 with visual studio<br>
<strong>From:</strong> toufik hadjazi (<em>h_toufik7_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-04-05 04:47:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18951.php">Mathieu westphal: "[OMPI users] &quot;Partial&quot; Reduce and overlapping communicator"</a>
<li><strong>Previous message:</strong> <a href="18949.php">toufik hadjazi: "Re: [OMPI users] configuration of openmpi-1.5.4 with visual studio"</a>
<li><strong>In reply to:</strong> <a href="18949.php">toufik hadjazi: "Re: [OMPI users] configuration of openmpi-1.5.4 with visual studio"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18970.php">Greg Blair: "Re: [OMPI users] configuration of openmpi-1.5.4 with visual studio"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Shiqing,
<br>
&nbsp;
<br>
About that new version, I tried it but i got the error message: [Toufik-PC:03612] [[18893,0],0] ORTE_ERROR_LOG: Error in file ..\..\..\ompi-v1.5\orte\mca\ras\base\ras_base_allocate.c at line 147
<br>
[Toufik-PC:03612] [[18893,0],0] ORTE_ERROR_LOG: Error in file ..\..\..\ompi-v1.5\orte\mca\plm\base\plm_base_launch_support.c at line 99
<br>
[Toufik-PC:03612] [[18893,0],0] ORTE_ERROR_LOG: Error in file ..\..\..\ompi-v1.5\orte\mca\plm\ccp\plm_ccp_module.c at line 186 
<br>
Best regards,
<br>
Toufik
<br>
&nbsp;
<br>
Date: Wed, 4 Apr 2012 15:22:14 +0200
<br>
From: fan_at_[hidden]
<br>
To: users_at_[hidden]
<br>
CC: h_toufik7_at_[hidden]
<br>
Subject: Re: [OMPI users] configuration of openmpi-1.5.4 with visual studio
<br>
<p><p>&nbsp;&nbsp;
<br>
<p><p>&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;
<br>
&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Hi Toufik,
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;Could you please try the 1.5.5 installer?
<br>
<p><a href="http://www.open-mpi.org/software/ompi/v1.5/downloads/OpenMPI_v1.5.5-1_win32.exe">http://www.open-mpi.org/software/ompi/v1.5/downloads/OpenMPI_v1.5.5-1_win32.exe</a>
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;Please let me know if it works for you. Thanks.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;Shiqing
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;On 2012-04-02 8:02 PM, toufik hadjazi wrote:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Hi
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Shiqing,
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;i haven't yet find a solution and for
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;the record, i have installed openmpi from an executable on
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;windows 7(i don't know if i mentioned that before). at first,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;i had an error message while compiling the hello world
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;application : unresolved link or something like that, then i
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;added &quot;OMPI_IMPORTS&quot; to the configuration of visual studio
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;it's here when i got the error message described before.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;and for the output of ompi_info it's
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;attached to this email.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;best regards.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Toufik
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;-- 
<br>
---------------------------------------------------------------
<br>
Shiqing Fan
<br>
High Performance Computing Center Stuttgart (HLRS)
<br>
Tel: ++49(0)711-685-87234      Nobelstrasse 19
<br>
Fax: ++49(0)711-685-65832      70569 Stuttgart
<br>
<a href="http://www.hlrs.de/organization/people/shiqing-fan/">http://www.hlrs.de/organization/people/shiqing-fan/</a>
<br>
email: fan_at_[hidden]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
<p>_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a> 		 	   		  
<br>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-18950/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18951.php">Mathieu westphal: "[OMPI users] &quot;Partial&quot; Reduce and overlapping communicator"</a>
<li><strong>Previous message:</strong> <a href="18949.php">toufik hadjazi: "Re: [OMPI users] configuration of openmpi-1.5.4 with visual studio"</a>
<li><strong>In reply to:</strong> <a href="18949.php">toufik hadjazi: "Re: [OMPI users] configuration of openmpi-1.5.4 with visual studio"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18970.php">Greg Blair: "Re: [OMPI users] configuration of openmpi-1.5.4 with visual studio"</a>
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

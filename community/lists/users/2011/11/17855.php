<?
$subject_val = "[OMPI users] FW:  Problem launching application on windows";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Nov 29 04:09:41 2011" -->
<!-- isoreceived="20111129090941" -->
<!-- sent="Tue, 29 Nov 2011 06:09:35 -0300" -->
<!-- isosent="20111129090935" -->
<!-- name="Martin Santa Mar&#237;a" -->
<!-- email="martin_san03_at_[hidden]" -->
<!-- subject="[OMPI users] FW:  Problem launching application on windows" -->
<!-- id="SNT105-W454F1583CCC27E31B9C8BE2B30_at_phx.gbl" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="SNT105-W18BFA55236BC2FB87F61D8DDB30_at_phx.gbl" -->
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
<strong>Subject:</strong> [OMPI users] FW:  Problem launching application on windows<br>
<strong>From:</strong> Martin Santa Mar&#237;a (<em>martin_san03_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-11-29 04:09:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17856.php">MM: "Re: [OMPI users] orte_debugger_select and orte_ess_set_name failed"</a>
<li><strong>Previous message:</strong> <a href="17854.php">arnaud Heritier: "Re: [OMPI users] Qlogic &amp; openmpi"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello all,
<br>
<p><p>I have the same problem on Vista x64 using 1.5.4. But my configuration is different:
<br>
I have a Jenkins server that launches the executable in a remote Windows machine, so I suppose that something is missing in my environment.
<br>
If I manually launch the application in the machine locally, everything works well.
<br>
I checked using depends and it seems it found the required libraries without problems so I don't understand what is causing the problems.
<br>
Perhaps some windows permissions?
<br>
<p><p>Regards
<br>
<p><p>Martin
<br>
<p><p><p>________________________________ 
<br>
<p>Subject: Re: [OMPI users] Problem launching application on windows
<br>
<p>From: Alex van 't Veer (avantveer_at_[hidden])
<br>
<p>Date: 2011-10-28 07:33:06 
<br>
<p><p><p>Hi Shiqing,
<br>
<p><p><p>&nbsp;
<br>
<p><p><p>Unfortunately that did not solve the problem.
<br>
<p><p><p>Can you tell me something more about how the sockets work and how they could
<br>
<p><p>get corrupted? Maybe I can figure out what is going wrong.
<br>
<p><p><p>&nbsp;
<br>
<p><p><p>Thanks
<br>
<p><p><p>&nbsp;
<br>
<p><p><p>________________________________
<br>
<p><p><p>From: Shiqing Fan [mailto:fan_at_[hidden]] 
<br>
<p><p>Sent: Friday, October 28, 2011 12:16 PM
<br>
<p><p>To: Open MPI Users
<br>
<p><p>Cc: Alex van 't Veer
<br>
<p><p>Subject: Re: [OMPI users] Problem launching application on windows
<br>
<p><p><p>&nbsp;
<br>
<p><p><p>Hi,
<br>
<p><p><p>This looks not normal, because this error might happen mainly by improper
<br>
<p><p>sockets. I don't have any clue at moment, as I can't reproduce it.
<br>
<p><p><p>Could you try to reinstall Open MPI? And make sure there is no other
<br>
<p><p>installation on your system. If this is still not working, try using Open MPI
<br>
<p><p>1.5.3. Please let me know whether these will work for you or not.
<br>
<p><p><p>Regards,
<br>
<p><p>Shiqing
<br>
<p><p><p>On 2011-10-27 11:35 AM, Alex van 't Veer wrote: 
<br>
<p><p><p>Hi
<br>
<p><p><p>&nbsp;
<br>
<p><p><p>I've installed the OpenMPI 1.5.4-1 64-bit binaries on windows 7 when I run
<br>
<p><p>mpirun.exe without any options I get the help text and everything seems to
<br>
<p><p>work fine but when I try to actually run a application, I get the following
<br>
<p><p>error:
<br>
<p><p><p>..\..\..\openmpi-1.5.4\opal\event\event.c: ompi_evesel-&gt;dispatch() failed.
<br>
<p><p><p>I get the error when running any application, to exclude my own application I
<br>
<p><p>tried the hello world example and it returns the same error. (The command I
<br>
<p><p>used is mpirun.exe helloworld.exe)
<br>
<p><p><p>Searching for the error in the list or looking at event.c didn't get me much
<br>
<p><p>further, can anyone point me in the right direction for solving this problem?
<br>
<p><p><p>&nbsp;
<br>
<p><p><p>Thanks
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-17855/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17856.php">MM: "Re: [OMPI users] orte_debugger_select and orte_ess_set_name failed"</a>
<li><strong>Previous message:</strong> <a href="17854.php">arnaud Heritier: "Re: [OMPI users] Qlogic &amp; openmpi"</a>
<!-- nextthread="start" -->
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

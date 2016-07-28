<?
$subject_val = "Re: [OMPI users] Getting MPI to access processes on a 2nd computer.";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jul  5 09:58:26 2012" -->
<!-- isoreceived="20120705135826" -->
<!-- sent="Thu, 5 Jul 2012 09:58:19 -0400" -->
<!-- isosent="20120705135819" -->
<!-- name="VimalMathew_at_[hidden]" -->
<!-- email="VimalMathew_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Getting MPI to access processes on a 2nd computer." -->
<!-- id="DE2CB86A93428A408B1E6BE8E73DCCB401DEDE5B_at_CLEOHSMB13.napa.ad.etn.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="4FF40C92.8070005_at_hlrs.de" -->
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
<strong>Subject:</strong> Re: [OMPI users] Getting MPI to access processes on a 2nd computer.<br>
<strong>From:</strong> <a href="mailto:VimalMathew_at_[hidden]?Subject=Re:%20[OMPI%20users]%20Getting%20MPI%20to%20access%20processes%20on%20a%202nd%20computer."><em>VimalMathew_at_[hidden]</em></a><br>
<strong>Date:</strong> 2012-07-05 09:58:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19739.php">SLIM H.A.: "Re: [OMPI users] ompi mca mxm version"</a>
<li><strong>Previous message:</strong> <a href="19737.php">Reuti: "Re: [OMPI users] automatically creating a machinefile"</a>
<li><strong>In reply to:</strong> <a href="19734.php">Shiqing Fan: "Re: [OMPI users] Getting MPI to access processes on a 2nd computer."</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Shiqing,
<br>
<p>&nbsp;
<br>
<p>We went through the steps mentioned in the links to modify DCOM and COM
<br>
settings.
<br>
<p>wmic /node:remote_node_ip process call create notepad.exe is able to
<br>
create a notepad process remotely, but I'm getting the same error
<br>
message as before using mpirun -np 2 -host host1 host2 notepad.exe.
<br>
<p>&nbsp;
<br>
<p>I'm running this on two Windows 7 machines both of which I have admin
<br>
rights on.
<br>
<p>Any suggestions?
<br>
<p>&nbsp;
<br>
<p>Thanks,
<br>
<p>Vimal 
<br>
<p>&nbsp;
<br>
<p>From: Shiqing Fan [mailto:fan_at_[hidden]] 
<br>
Sent: Wednesday, July 04, 2012 5:28 AM
<br>
To: Open MPI Users
<br>
Cc: Mathew, Vimal
<br>
Subject: Re: [OMPI users] Getting MPI to access processes on a 2nd
<br>
computer.
<br>
<p>&nbsp;
<br>
<p>Hi,
<br>
<p>The Open MPI potentially uses WMI to launch remote processes, so the WMI
<br>
has to be configured correctly. There are two links talking about how to
<br>
set it up in README.WINDOWS file:
<br>
<p><a href="http://msdn.microsoft.com/en-us/library/aa393266(VS.85">http://msdn.microsoft.com/en-us/library/aa393266(VS.85</a>).aspx
<br>
&lt;<a href="http://msdn.microsoft.com/en-us/library/aa393266%28VS.85%29.aspx">http://msdn.microsoft.com/en-us/library/aa393266%28VS.85%29.aspx</a>&gt; 
<br>
<a href="http://community.spiceworks.com/topic/578">http://community.spiceworks.com/topic/578</a>
<br>
<p>For testing whether it works or not, you can use following command:
<br>
wmic /node:remote_node_ip process call create notepad.exe
<br>
<p>then log onto the other Windows, check in the task manager if the
<br>
notepad.exe process is created (don't forget to delete it afterwards). 
<br>
<p>If that works, this command will also work:
<br>
mpirun -np 2 -host host1 host2 notepad.exe
<br>
<p>Please try to run the above two test commands, if they all works you
<br>
application should also work. Just let me know if you have any question
<br>
or trouble with that.
<br>
<p><p>Shiqing
<br>
<p>On 2012-07-03 8:53 PM, VimalMathew_at_[hidden] wrote:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Hi,
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;I'm trying to run an MPI code using processes on a remote
<br>
machine.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;I've connected the 2 machines using a crossover cable and they
<br>
are communicating with each other(I'm getting ping replies and I can
<br>
access drives on one another).
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;When I run mpiexec -host system_name MPI_Test.exe, I get the
<br>
following error:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;C:\OpenMPI\openmpi-1.6\build\Debug&gt;mpiexec -host SOUMIWHP4500449
<br>
MPI_Test.exe
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;connecting to SOUMIWHP4500449
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;username:C9995799
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;password:**********
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Save Credential?(Y/N) N
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[SOUMIWHP5003567:01728] Could not connect to namespace cimv2 on
<br>
node SOUMIWHP450
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;0449. Error code =-2147023174
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
------------------------------------------------------------------------
<br>
<pre>
--
	mpiexec was unable to start the specified application as it
encountered an error
	.
	More information may be available above.
	
------------------------------------------------------------------------
--
	[SOUMIWHP5003567:01728] [[38316,0],0] ORTE_ERROR_LOG: A message
is attempting to
	be sent to a process whose contact information is unknown in
file ..\..\..\open
	mpi-1.6\orte\mca\rml\oob\rml_oob_send.c at line 145
	[SOUMIWHP5003567:01728] [[38316,0],0] attempted to send to
[[38316,0],1]: tag 1
	[SOUMIWHP5003567:01728] [[38316,0],0] ORTE_ERROR_LOG: A message
is attempting to
	be sent to a process whose contact information is unknown in
file ..\..\..\open
	mpi-1.6\orte\orted\orted_comm.c at line 126
	 
	Could anyone tell me what I'm missing?
	 
	I've configured MPI on VS Express 2010 and I'm able to run MPI
programs on one system.
	On the other computer, I pasted the MPI_Test.exe file in the
same location as the calling computer.
	 
	Thanks,
	Vimal
	 
	
	
	
	
	_______________________________________________
	users mailing list
	users_at_[hidden]
	<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-19738/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19739.php">SLIM H.A.: "Re: [OMPI users] ompi mca mxm version"</a>
<li><strong>Previous message:</strong> <a href="19737.php">Reuti: "Re: [OMPI users] automatically creating a machinefile"</a>
<li><strong>In reply to:</strong> <a href="19734.php">Shiqing Fan: "Re: [OMPI users] Getting MPI to access processes on a 2nd computer."</a>
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

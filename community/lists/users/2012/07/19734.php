<?
$subject_val = "Re: [OMPI users] Getting MPI to access processes on a 2nd computer.";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jul  4 05:26:31 2012" -->
<!-- isoreceived="20120704092631" -->
<!-- sent="Wed, 04 Jul 2012 11:27:46 +0200" -->
<!-- isosent="20120704092746" -->
<!-- name="Shiqing Fan" -->
<!-- email="fan_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Getting MPI to access processes on a 2nd computer." -->
<!-- id="4FF40C92.8070005_at_hlrs.de" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="DE2CB86A93428A408B1E6BE8E73DCCB401DEDA11_at_CLEOHSMB13.napa.ad.etn.com" -->
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
<strong>From:</strong> Shiqing Fan (<em>fan_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-07-04 05:27:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19735.php">Hodgess, Erin: "[OMPI users] automatically creating a machinefile"</a>
<li><strong>Previous message:</strong> <a href="19733.php">Steve Kargl: "Re: [OMPI users] fortran program with integer kind=8 using openmpi?"</a>
<li><strong>In reply to:</strong> <a href="19729.php">VimalMathew_at_[hidden]: "[OMPI users] Getting MPI to access processes on a 2nd computer."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19738.php">VimalMathew_at_[hidden]: "Re: [OMPI users] Getting MPI to access processes on a 2nd computer."</a>
<li><strong>Reply:</strong> <a href="19738.php">VimalMathew_at_[hidden]: "Re: [OMPI users] Getting MPI to access processes on a 2nd computer."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>The Open MPI potentially uses WMI to launch remote processes, so the WMI 
<br>
has to be configured correctly. There are two links talking about how to 
<br>
set it up in README.WINDOWS file:
<br>
<p><a href="http://msdn.microsoft.com/en-us/library/aa393266(VS.85">http://msdn.microsoft.com/en-us/library/aa393266(VS.85</a>).aspx
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm trying to run an MPI code using processes on a remote machine.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I've connected the 2 machines using a crossover cable and they are 
</span><br>
<span class="quotelev1">&gt; communicating with each other(I'm getting ping replies and I can 
</span><br>
<span class="quotelev1">&gt; access drives on one another).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; When I run mpiexec --host /system_name/ MPI_Test.exe, I get the 
</span><br>
<span class="quotelev1">&gt; following error:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; C:\OpenMPI\openmpi-1.6\build\Debug&gt;mpiexec -host SOUMIWHP4500449 
</span><br>
<span class="quotelev1">&gt; MPI_Test.exe
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; connecting to SOUMIWHP4500449
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; username:C9995799
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; password:**********
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Save Credential?(Y/N) N
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [SOUMIWHP5003567:01728] Could not connect to namespace cimv2 on node 
</span><br>
<span class="quotelev1">&gt; SOUMIWHP450
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 0449. Error code =-2147023174
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpiexec was unable to start the specified application as it 
</span><br>
<span class="quotelev1">&gt; encountered an error
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; .
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; More information may be available above.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [SOUMIWHP5003567:01728] [[38316,0],0] ORTE_ERROR_LOG: A message is 
</span><br>
<span class="quotelev1">&gt; attempting to
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; be sent to a process whose contact information is unknown in file 
</span><br>
<span class="quotelev1">&gt; ..\..\..\open
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpi-1.6\orte\mca\rml\oob\rml_oob_send.c at line 145
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [SOUMIWHP5003567:01728] [[38316,0],0] attempted to send to 
</span><br>
<span class="quotelev1">&gt; [[38316,0],1]: tag 1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [SOUMIWHP5003567:01728] [[38316,0],0] ORTE_ERROR_LOG: A message is 
</span><br>
<span class="quotelev1">&gt; attempting to
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; be sent to a process whose contact information is unknown in file 
</span><br>
<span class="quotelev1">&gt; ..\..\..\open
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpi-1.6\orte\orted\orted_comm.c at line 126
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Could anyone tell me what I'm missing?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I've configured MPI on VS Express 2010 and I'm able to run MPI 
</span><br>
<span class="quotelev1">&gt; programs on one system.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On the other computer, I pasted the MPI_Test.exe file in the same 
</span><br>
<span class="quotelev1">&gt; location as the calling computer.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Vimal
</span><br>
<span class="quotelev1">&gt;
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-19734/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19735.php">Hodgess, Erin: "[OMPI users] automatically creating a machinefile"</a>
<li><strong>Previous message:</strong> <a href="19733.php">Steve Kargl: "Re: [OMPI users] fortran program with integer kind=8 using openmpi?"</a>
<li><strong>In reply to:</strong> <a href="19729.php">VimalMathew_at_[hidden]: "[OMPI users] Getting MPI to access processes on a 2nd computer."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19738.php">VimalMathew_at_[hidden]: "Re: [OMPI users] Getting MPI to access processes on a 2nd computer."</a>
<li><strong>Reply:</strong> <a href="19738.php">VimalMathew_at_[hidden]: "Re: [OMPI users] Getting MPI to access processes on a 2nd computer."</a>
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

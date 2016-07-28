<?
$subject_val = "[OMPI users] call to fork() error";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May 10 04:10:43 2012" -->
<!-- isoreceived="20120510081043" -->
<!-- sent="Thu, 10 May 2012 09:10:38 +0100" -->
<!-- isosent="20120510081038" -->
<!-- name="Jim Maas" -->
<!-- email="j.maas_at_[hidden]" -->
<!-- subject="[OMPI users] call to fork() error" -->
<!-- id="4FAB77FE.8010108_at_uea.ac.uk" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] call to fork() error<br>
<strong>From:</strong> Jim Maas (<em>j.maas_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-05-10 04:10:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19244.php">Jeff Squyres: "Re: [OMPI users] call to fork() error"</a>
<li><strong>Previous message:</strong> <a href="19242.php">Ricardo Reis: "Re: [OMPI users] OpenMPI with SGE: &quot;-np N&quot; for mpirun needed?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19244.php">Jeff Squyres: "Re: [OMPI users] call to fork() error"</a>
<li><strong>Reply:</strong> <a href="19244.php">Jeff Squyres: "Re: [OMPI users] call to fork() error"</a>
<li><strong>Reply:</strong> <a href="19253.php">Don Armstrong: "Re: [OMPI users] call to fork() error"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'm getting the following error when running an open-mpi job on a LSF 
<br>
cluster using a new version of R 2.15.  I didn't get the error message 
<br>
when running previously using R 2.13.  Could anyone point me to the 
<br>
possible cause, or how to find the offending code?  I'm not a sysop, 
<br>
just a user.
<br>
<p>Thanks
<br>
<p>Jim
<br>
--------------------------------------------------------------------------
<br>
An MPI process has executed an operation involving a call to the
<br>
&quot;fork()&quot; system call to create a child process.  Open MPI is currently
<br>
operating in a condition that could result in memory corruption or
<br>
other system errors; your MPI job may hang, crash, or produce silent
<br>
data corruption.  The use of fork() (or system() or other calls that
<br>
create child processes) is strongly discouraged.
<br>
<p>The process that invoked fork was:
<br>
<p>&nbsp;&nbsp;&nbsp;Local host:          cn159.private.dns.zone (PID 12792)
<br>
&nbsp;&nbsp;&nbsp;MPI_COMM_WORLD rank: 7
<br>
<p>If you are *absolutely sure* that your application will successfully
<br>
and correctly survive a call to fork(), you may disable this warning
<br>
by setting the mpi_warn_on_fork MCA parameter to 0.
<br>
<p><pre>
-- 
Dr. Jim Maas
University of East Anglia
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19244.php">Jeff Squyres: "Re: [OMPI users] call to fork() error"</a>
<li><strong>Previous message:</strong> <a href="19242.php">Ricardo Reis: "Re: [OMPI users] OpenMPI with SGE: &quot;-np N&quot; for mpirun needed?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19244.php">Jeff Squyres: "Re: [OMPI users] call to fork() error"</a>
<li><strong>Reply:</strong> <a href="19244.php">Jeff Squyres: "Re: [OMPI users] call to fork() error"</a>
<li><strong>Reply:</strong> <a href="19253.php">Don Armstrong: "Re: [OMPI users] call to fork() error"</a>
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

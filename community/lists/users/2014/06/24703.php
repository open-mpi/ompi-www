<?
$subject_val = "[OMPI users] Fwd: openmpi linking problem";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jun 25 13:19:51 2014" -->
<!-- isoreceived="20140625171951" -->
<!-- sent="Wed, 25 Jun 2014 18:19:50 +0100" -->
<!-- isosent="20140625171950" -->
<!-- name="Sergii Veremieiev" -->
<!-- email="s.veremieiev_at_[hidden]" -->
<!-- subject="[OMPI users] Fwd: openmpi linking problem" -->
<!-- id="CAHaow_-ENWB8XPePJ3J=0_Jbp6g-soR=NVydTu+hCvCsNafkjA_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CAHaow__UzUC+=EOJfnG5cPGcjmn+QtCLt3fatNTzGDyZYJh_sw_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] Fwd: openmpi linking problem<br>
<strong>From:</strong> Sergii Veremieiev (<em>s.veremieiev_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-06-25 13:19:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24704.php">Brock Palen: "Re: [OMPI users] affinity issues under cpuset torque 1.8.1"</a>
<li><strong>Previous message:</strong> <a href="24702.php">Fischer, Greg A.: "Re: [OMPI users] poor performance using the openib btl"</a>
<li><strong>In reply to:</strong> <a href="24604.php">Sergii Veremieiev: "[OMPI users] openmpi linking problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24705.php">Jeff Squyres (jsquyres): "Re: [OMPI users] openmpi linking problem"</a>
<li><strong>Reply:</strong> <a href="24705.php">Jeff Squyres (jsquyres): "Re: [OMPI users] openmpi linking problem"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear Sir/Madam,
<br>
<p>I'm trying to run a parallel finite element analysis 64-bit code on my
<br>
desktop with Windows 7, Cygwin, Open MPI 1.7.5, 64Gb RAM and 6-core Intel
<br>
Core i7-3930K CPU via &quot;mpirun -np 6 executable&quot; command. The code runs
<br>
fine, but if I increase the number of elements to a critical one (roughly
<br>
more than 100k) the built-in Mumps library returns an error message (please
<br>
see below). Can you possibly advise me what can be a problem? I have
<br>
checked in Task Manager the code is using about 3-6Gb per process or about
<br>
20Gb in total, that is much smaller than the amount of physical memory
<br>
available on the system 55Gb. Is there possibly a memory limit in Windows
<br>
available per process? Thank you.
<br>
<p>Best regards,
<br>
<p>Sergii
<br>
<p><p>mpirun has exited due to process rank 1 with PID 6028 on
<br>
node exiting improperly. There are three reasons this could occur:
<br>
<p>1. this process did not call &quot;init&quot; before exiting, but others in
<br>
the job did. This can cause a job to hang indefinitely while it waits
<br>
for all processes to call &quot;init&quot;. By rule, if one process calls &quot;init&quot;,
<br>
then ALL processes must call &quot;init&quot; prior to termination.
<br>
<p>2. this process called &quot;init&quot;, but exited without calling &quot;finalize&quot;.
<br>
By rule, all processes that call &quot;init&quot; MUST call &quot;finalize&quot; prior to
<br>
exiting or it will be considered an &quot;abnormal termination&quot;
<br>
<p>3. this process called &quot;MPI_Abort&quot; or &quot;orte_abort&quot; and the mca parameter
<br>
orte_create_session_dirs is set to false. In this case, the run-time cannot
<br>
detect that the abort call was an abnormal termination. Hence, the only
<br>
error message you will receive is this one.
<br>
<p>This may have caused other processes in the application to be
<br>
terminated by signals sent by mpirun (as reported here).
<br>
<p>You can avoid this message by specifying -quiet on the mpirun command line.
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-24703/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24704.php">Brock Palen: "Re: [OMPI users] affinity issues under cpuset torque 1.8.1"</a>
<li><strong>Previous message:</strong> <a href="24702.php">Fischer, Greg A.: "Re: [OMPI users] poor performance using the openib btl"</a>
<li><strong>In reply to:</strong> <a href="24604.php">Sergii Veremieiev: "[OMPI users] openmpi linking problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24705.php">Jeff Squyres (jsquyres): "Re: [OMPI users] openmpi linking problem"</a>
<li><strong>Reply:</strong> <a href="24705.php">Jeff Squyres (jsquyres): "Re: [OMPI users] openmpi linking problem"</a>
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

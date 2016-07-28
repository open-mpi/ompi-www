<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Aug 29 05:52:59 2007" -->
<!-- isoreceived="20070829095259" -->
<!-- sent="Wed, 29 Aug 2007 15:22:54 +0530" -->
<!-- isosent="20070829095254" -->
<!-- name="Amit Kumar Saha" -->
<!-- email="amitsaha.in_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Basic problems with OpenMPI" -->
<!-- id="547db2260708290252q2ca97f2fs96c58fd0d5669f02_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="20070829092344.GY25167_at_minantech.com" -->
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
<strong>From:</strong> Amit Kumar Saha (<em>amitsaha.in_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-08-29 05:52:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3943.php">Gleb Natapov: "Re: [OMPI users] Basic problems with OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="3941.php">Gleb Natapov: "Re: [OMPI users] Basic problems with OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="3941.php">Gleb Natapov: "Re: [OMPI users] Basic problems with OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3943.php">Gleb Natapov: "Re: [OMPI users] Basic problems with OpenMPI"</a>
<li><strong>Reply:</strong> <a href="3943.php">Gleb Natapov: "Re: [OMPI users] Basic problems with OpenMPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Glib,
<br>
<p>i am sending a sample trace of my program:
<br>
<p>amit_at_ubuntu-desktop-1:~/mpi-exec$ mpirun --np 3 --hostfile
<br>
mpi-host-file HellMPI
<br>
<p>amit_at_debian-desktop-1's password: [ubuntu-desktop-1:28575] [0,0,0]
<br>
ORTE_ERROR_LOG: Timeout in file base/pls_base_orted_cmds.c at line 275
<br>
[ubuntu-desktop-1:28575] [0,0,0] ORTE_ERROR_LOG: Timeout in file
<br>
pls_rsh_module.c at line 1164
<br>
[ubuntu-desktop-1:28575] [0,0,0] ORTE_ERROR_LOG: Timeout in file
<br>
errmgr_hnp.c at line 90
<br>
[ubuntu-desktop-1:28575] ERROR: A daemon on node ubuntu-desktop-2
<br>
failed to start as expected.
<br>
[ubuntu-desktop-1:28575] ERROR: There may be more information available from
<br>
[ubuntu-desktop-1:28575] ERROR: the remote shell (see above).
<br>
[ubuntu-desktop-1:28575] ERROR: The daemon exited unexpectedly with status 255.
<br>
[ubuntu-desktop-1:28575] [0,0,0] ORTE_ERROR_LOG: Timeout in file
<br>
base/pls_base_orted_cmds.c at line 188
<br>
[ubuntu-desktop-1:28575] [0,0,0] ORTE_ERROR_LOG: Timeout in file
<br>
pls_rsh_module.c at line 1196
<br>
--------------------------------------------------------------------------
<br>
mpirun was unable to cleanly terminate the daemons for this job.
<br>
Returned value Timeout instead of ORTE_SUCCESS.
<br>
<p>--------------------------------------------------------------------------
<br>
<p>this is what I get when i run the program.
<br>
<p>However when i use &quot;--np 2 &quot; it works perfectly which of course means
<br>
that it is not a problem with &quot;debian-desktop-1&quot; as the above output
<br>
may show.
<br>
<p>Please refer to the host file as well. (attached). I am using the same
<br>
openMPI version 1.2.3 and compiled all the executables using that.
<br>
<p>Waiting for your suggestions.
<br>
<p>Thanks
<br>
<pre>
-- 
Amit Kumar Saha
[URL]:<a href="http://amitsaha.in.googlepages.com">http://amitsaha.in.googlepages.com</a>

</pre>
<hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/users/att-3942/mpi-host-file">mpi-host-file</a>
</ul>
<!-- attachment="mpi-host-file" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3943.php">Gleb Natapov: "Re: [OMPI users] Basic problems with OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="3941.php">Gleb Natapov: "Re: [OMPI users] Basic problems with OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="3941.php">Gleb Natapov: "Re: [OMPI users] Basic problems with OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3943.php">Gleb Natapov: "Re: [OMPI users] Basic problems with OpenMPI"</a>
<li><strong>Reply:</strong> <a href="3943.php">Gleb Natapov: "Re: [OMPI users] Basic problems with OpenMPI"</a>
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

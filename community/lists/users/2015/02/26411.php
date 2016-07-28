<?
$subject_val = "[OMPI users] mpirun fails across cluster";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Feb 27 11:47:55 2015" -->
<!-- isoreceived="20150227164755" -->
<!-- sent="Fri, 27 Feb 2015 21:47:55 +0500" -->
<!-- isosent="20150227164755" -->
<!-- name="Syed Ahsan Ali" -->
<!-- email="ahsanshah01_at_[hidden]" -->
<!-- subject="[OMPI users] mpirun fails across cluster" -->
<!-- id="CAMvdAsLUusTdy_8mg8XjoBtTs0ieWXeBBkXW+n5WGjqAzWawwg_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] mpirun fails across cluster<br>
<strong>From:</strong> Syed Ahsan Ali (<em>ahsanshah01_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-02-27 11:47:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26412.php">Gus Correa: "Re: [OMPI users] mpirun fails across cluster"</a>
<li><strong>Previous message:</strong> <a href="26410.php">Rob Latham: "Re: [OMPI users] LAM/MPI -&gt; OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26412.php">Gus Correa: "Re: [OMPI users] mpirun fails across cluster"</a>
<li><strong>Reply:</strong> <a href="26412.php">Gus Correa: "Re: [OMPI users] mpirun fails across cluster"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I am trying to run openmpi application on my cluster.  But the mpirun
<br>
fails, simple hostname command gives this error
<br>
<p>[pmdtest_at_hpc bin]$ mpirun --host compute-0-0 hostname
<br>
--------------------------------------------------------------------------
<br>
Sorry!  You were supposed to get help about:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;opal_init:startup:internal-failure
<br>
But I couldn't open the help file:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;/export/apps/openmpi-1.8.4_gcc-4.9.2/share/openmpi/help-opal-runtime.txt:
<br>
No such file or directory.  Sorry!
<br>
--------------------------------------------------------------------------
<br>
--------------------------------------------------------------------------
<br>
Sorry!  You were supposed to get help about:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;orte_init:startup:internal-failure
<br>
But I couldn't open the help file:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;/export/apps/openmpi-1.8.4_gcc-4.9.2/share/openmpi/help-orte-runtime:
<br>
No such file or directory.  Sorry!
<br>
--------------------------------------------------------------------------
<br>
[compute-0-0.local:03410] [[INVALID],INVALID] ORTE_ERROR_LOG: Error in
<br>
file orted/orted_main.c at line 369
<br>
--------------------------------------------------------------------------
<br>
ORTE was unable to reliably start one or more daemons.
<br>
<p>I am using Environment modules to load OpenMPI 1.8.4 and PATH and
<br>
LD_LIBRARY_PATH points to same openmpi on nodes
<br>
<p>[pmdtest_at_hpc bin]$ which mpirun
<br>
/share/apps/openmpi-1.8.4_gcc-4.9.2/bin/mpirun
<br>
[pmdtest_at_hpc bin]$ ssh compute-0-0
<br>
Last login: Sat Feb 28 02:15:50 2015 from hpc.local
<br>
Rocks Compute Node
<br>
Rocks 6.1.1 (Sand Boa)
<br>
Profile built 01:53 28-Feb-2015
<br>
Kickstarted 01:59 28-Feb-2015
<br>
[pmdtest_at_compute-0-0 ~]$ which mpirun
<br>
/share/apps/openmpi-1.8.4_gcc-4.9.2/bin/mpirun
<br>
<p>The only this I notice important is that in the error it is referring to
<br>
&nbsp;&nbsp;&nbsp;&nbsp;/export/apps/openmpi-1.8.4_gcc-4.9.2/share/openmpi/help-opal-runtime.txt:
<br>
<p>While it should have shown
<br>
/share/apps/openmpi-1.8.4_gcc-4.9.2/share/openmpi/help-opal-runtime.txt:
<br>
which is the path compute nodes see.
<br>
<p>Please help!
<br>
Ahsan
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26412.php">Gus Correa: "Re: [OMPI users] mpirun fails across cluster"</a>
<li><strong>Previous message:</strong> <a href="26410.php">Rob Latham: "Re: [OMPI users] LAM/MPI -&gt; OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26412.php">Gus Correa: "Re: [OMPI users] mpirun fails across cluster"</a>
<li><strong>Reply:</strong> <a href="26412.php">Gus Correa: "Re: [OMPI users] mpirun fails across cluster"</a>
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

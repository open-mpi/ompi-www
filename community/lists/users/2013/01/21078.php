<?
$subject_val = "[OMPI users] problem: help-hostfile.txt: Too many open files in system.";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan  4 12:48:19 2013" -->
<!-- isoreceived="20130104174819" -->
<!-- sent="Fri, 4 Jan 2013 11:48:13 -0600" -->
<!-- isosent="20130104174813" -->
<!-- name="Mariana Vargas Magana" -->
<!-- email="mmarianav_at_[hidden]" -->
<!-- subject="[OMPI users] problem: help-hostfile.txt: Too many open files in system." -->
<!-- id="06F499EC-7749-4CCD-A264-74119B8976C6_at_yahoo.com.mx" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [OMPI users] problem: help-hostfile.txt: Too many open files in system.<br>
<strong>From:</strong> Mariana Vargas Magana (<em>mmarianav_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-01-04 12:48:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21079.php">William Au: "[OMPI users] [SPAM:## 71%] checkpoint --term core dump"</a>
<li><strong>Previous message:</strong> <a href="21077.php">Dave Goodell: "Re: [OMPI users] MPI_IN_PLACE not working for Fortran-compiled code linked with mpicc on Mac OS X"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21097.php">Jeff Squyres (jsquyres): "Re: [OMPI users] problem: help-hostfile.txt: Too many open files in	system."</a>
<li><strong>Reply:</strong> <a href="21097.php">Jeff Squyres (jsquyres): "Re: [OMPI users] problem: help-hostfile.txt: Too many open files in	system."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello open MPI users:
<br>
<p>I was just running a program that usually works well in the cluster and suddenly in the 32 iteration I get this strange set of errors associated with. I will appreciate if someone could give me some hint of the problem and how to solve
<br>
<p>Thanks!
<br>
<p>Mariana
<br>
<p><p>/usr/bin/ssh: error while loading shared libraries: libcrypt.so.1: cannot open shared object file: Error 23
<br>
/usr/bin/ssh: error while loading shared libraries: libutil.so.1: cannot open shared object file: Error 23
<br>
/usr/bin/ssh: error while loading shared libraries: libfipscheck.so.1: cannot open shared object file: Error 23
<br>
/usr/bin/ssh: error while loading shared libraries: libkrb5.so.3: cannot open shared object file: Error 23
<br>
--------------------------------------------------------------------------
<br>
A daemon (pid 1486) died unexpectedly with status 127 while attempting
<br>
to launch so we are aborting.
<br>
<p>There may be more information reported by the environment (see above).
<br>
<p>This may be because the daemon was unable to find all the needed shared
<br>
libraries on the remote node. You may set your LD_LIBRARY_PATH to have the
<br>
location of the shared libraries on the remote nodes and this will
<br>
automatically be forwarded to the remote nodes.
<br>
--------------------------------------------------------------------------
<br>
--------------------------------------------------------------------------
<br>
mpirun noticed that the job aborted, but has no info as to the process
<br>
that caused that situation.
<br>
--------------------------------------------------------------------------
<br>
--------------------------------------------------------------------------
<br>
Sorry!  You were supposed to get help about:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;no-hostfile
<br>
But I couldn't open the help file:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;/home/mvargas/openmpi/share/openmpi/help-hostfile.txt: Too many open files in system.  Sorry!
<br>
--------------------------------------------------------------------------
<br>
[ferrari:01490] [[65228,0],0] ORTE_ERROR_LOG: Not found in file base/ras_base_allocate.c at line 200
<br>
[ferrari:01490] [[65228,0],0] ORTE_ERROR_LOG: Not found in file base/plm_base_launch_support.c at line 99
<br>
[ferrari:01490] [[65228,0],0] ORTE_ERROR_LOG: Not found in file plm_rsh_module.c at line 1167
<br>
--------------------------------------------------------------------------
<br>
Sorry!  You were supposed to get help about:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;no-hostfile
<br>
But I couldn't open the help file:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;/home/mvargas/openmpi/share/openmpi/help-hostfile.txt: Too many open files in system.  Sorry!
<br>
--------------------------------------------------------------------------
<br>
[ferrari:01491] [[65229,0],0] ORTE_ERROR_LOG: Not found in file base/ras_base_allocate.c at line 200
<br>
[ferrari:01491] [[65229,0],0] ORTE_ERROR_LOG: Not found in file base/plm_base_launch_support.c at line 99
<br>
[ferrari:01491] [[65229,0],0] ORTE_ERROR_LOG: Not found in file plm_rsh_module.c at line 1167
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21079.php">William Au: "[OMPI users] [SPAM:## 71%] checkpoint --term core dump"</a>
<li><strong>Previous message:</strong> <a href="21077.php">Dave Goodell: "Re: [OMPI users] MPI_IN_PLACE not working for Fortran-compiled code linked with mpicc on Mac OS X"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21097.php">Jeff Squyres (jsquyres): "Re: [OMPI users] problem: help-hostfile.txt: Too many open files in	system."</a>
<li><strong>Reply:</strong> <a href="21097.php">Jeff Squyres (jsquyres): "Re: [OMPI users] problem: help-hostfile.txt: Too many open files in	system."</a>
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

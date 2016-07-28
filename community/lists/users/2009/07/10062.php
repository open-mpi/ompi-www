<?
$subject_val = "[OMPI users] Problem launching jobs in SGE (with loose integration), OpenMPI 1.3.3";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jul 23 10:35:17 2009" -->
<!-- isoreceived="20090723143517" -->
<!-- sent="Thu, 23 Jul 2009 08:34:52 -0600" -->
<!-- isosent="20090723143452" -->
<!-- name="Craig Tierney" -->
<!-- email="craig.tierney_at_[hidden]" -->
<!-- subject="[OMPI users] Problem launching jobs in SGE (with loose integration), OpenMPI 1.3.3" -->
<!-- id="4A68750C.4070301_at_noaa.gov" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="fa4af8200907230725g6454e11i4556fac7a088e800_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] Problem launching jobs in SGE (with loose integration), OpenMPI 1.3.3<br>
<strong>From:</strong> Craig Tierney (<em>craig.tierney_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-07-23 10:34:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10063.php">Durga Choudhury: "Re: [OMPI users] Network connection check"</a>
<li><strong>Previous message:</strong> <a href="10061.php">vipin kumar: "Re: [OMPI users] Network connection check"</a>
<li><strong>In reply to:</strong> <a href="10061.php">vipin kumar: "Re: [OMPI users] Network connection check"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10064.php">Rolf Vandevaart: "Re: [OMPI users] Problem launching jobs in SGE (with loose integration), OpenMPI 1.3.3"</a>
<li><strong>Reply:</strong> <a href="10064.php">Rolf Vandevaart: "Re: [OMPI users] Problem launching jobs in SGE (with loose integration), OpenMPI 1.3.3"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I have built OpenMPI 1.3.3 without support for SGE.
<br>
I just want to launch jobs with loose integration right
<br>
now.
<br>
<p>Here is how I configured it:
<br>
<p>./configure CC=pgcc CXX=pgCC F77=pgf90 F90=pgf90 FC=pgf90 
<br>
--prefix=/opt/openmpi/1.3.3-pgi --without-sge
<br>
&nbsp;&nbsp;--enable-io-romio --with-openib=/opt/hjet/ofed/1.4.1 
<br>
--with-io-romio-flags=--with-file-system=lustre 
<br>
--enable-orterun-prefix-by-default
<br>
<p>I can start jobs from the commandline just fine.  When
<br>
I try to do the same thing inside an SGE job, I get
<br>
errors like the following:
<br>
<p><p>error: executing task of job 5041155 failed:
<br>
--------------------------------------------------------------------------
<br>
A daemon (pid 13324) died unexpectedly with status 1 while attempting
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
mpirun: clean termination accomplished
<br>
<p><p>I am starting mpirun with the following options:
<br>
<p>$OMPI/bin/mpirun -mca btl openib,sm,self --mca pls ^sge \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-machinefile $MACHINE_FILE -x LD_LIBRARY_PATH -np 16 ./xhpl
<br>
<p>The options are to ensure I am using IB, that SGE is not used, and that
<br>
the LD_LIBRARY_PATH is sent along to ensure dynamic linking is done 
<br>
correctly.
<br>
<p>This worked with 1.2.7 (except setting the pls option as gridengine 
<br>
instead of sge), but I can't get it to work with 1.3.3.
<br>
<p>Am I missing something obvious for getting jobs with loose integration
<br>
started?
<br>
<p>Thanks,
<br>
Craig
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10063.php">Durga Choudhury: "Re: [OMPI users] Network connection check"</a>
<li><strong>Previous message:</strong> <a href="10061.php">vipin kumar: "Re: [OMPI users] Network connection check"</a>
<li><strong>In reply to:</strong> <a href="10061.php">vipin kumar: "Re: [OMPI users] Network connection check"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10064.php">Rolf Vandevaart: "Re: [OMPI users] Problem launching jobs in SGE (with loose integration), OpenMPI 1.3.3"</a>
<li><strong>Reply:</strong> <a href="10064.php">Rolf Vandevaart: "Re: [OMPI users] Problem launching jobs in SGE (with loose integration), OpenMPI 1.3.3"</a>
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

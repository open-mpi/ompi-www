<?
$subject_val = "[OMPI users] Problem getting OpenMPI to run";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jun  1 14:03:56 2009" -->
<!-- isoreceived="20090601180356" -->
<!-- sent="Mon, 01 Jun 2009 14:04:39 -0400" -->
<!-- isosent="20090601180439" -->
<!-- name="Jeff Layton" -->
<!-- email="laytonjb_at_[hidden]" -->
<!-- subject="[OMPI users] Problem getting OpenMPI to run" -->
<!-- id="4A241837.60105_at_att.net" -->
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
<strong>Subject:</strong> [OMPI users] Problem getting OpenMPI to run<br>
<strong>From:</strong> Jeff Layton (<em>laytonjb_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-06-01 14:04:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9484.php">Jeff Squyres: "Re: [OMPI users] Problem getting OpenMPI to run"</a>
<li><strong>Previous message:</strong> <a href="9482.php">Jeff Squyres: "Re: [OMPI users] make vt_tracefilter.cc:133: internal compilererror: Segmentation fault - openmpi-1.3.2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9484.php">Jeff Squyres: "Re: [OMPI users] Problem getting OpenMPI to run"</a>
<li><strong>Reply:</strong> <a href="9484.php">Jeff Squyres: "Re: [OMPI users] Problem getting OpenMPI to run"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Good morning,
<br>
<p>I think I sent this out last week but I did some &quot;experimentation&quot;
<br>
and kind-of/sort-of got my OpenMPI application to run. But I do
<br>
have a weird problem.
<br>
<p>I can get the application (build with OpenMPI-1.3.2 with gcc and
<br>
the app is built with Intel 10.2) to run on the IB network (not sure
<br>
of the version of OFED but it might be 1.3.x) with certain CPUs.
<br>
For example I can run the application on AMD Shanghai processors
<br>
just fine. But when I try some other processors (also AMD), I
<br>
get the following error message:
<br>
<p><p>error: executing task of job 3084 failed: execution daemon on host 
<br>
&quot;compute-2-2.local&quot; didn't accept task
<br>
--------------------------------------------------------------------------
<br>
A daemon (pid 27796) died unexpectedly with status 1 while attempting
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
<p><p><p>I've been googling my fingers off without any luck. My next steps are
<br>
to start putting printf's in OpenMPI to figure out where the problem
<br>
is occurring :)  Any ideas or things I can do to start? (I can provide all
<br>
kinds of information including ompi_info if you anyone cares to look
<br>
through it).
<br>
<p>TIA!
<br>
<p>Jeff
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9484.php">Jeff Squyres: "Re: [OMPI users] Problem getting OpenMPI to run"</a>
<li><strong>Previous message:</strong> <a href="9482.php">Jeff Squyres: "Re: [OMPI users] make vt_tracefilter.cc:133: internal compilererror: Segmentation fault - openmpi-1.3.2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9484.php">Jeff Squyres: "Re: [OMPI users] Problem getting OpenMPI to run"</a>
<li><strong>Reply:</strong> <a href="9484.php">Jeff Squyres: "Re: [OMPI users] Problem getting OpenMPI to run"</a>
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

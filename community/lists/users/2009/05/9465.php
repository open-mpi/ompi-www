<?
$subject_val = "[OMPI users] Problem with 1.3.2 - need tips on debugging";
include("../../include/msg-header.inc");
?>
<!-- received="Fri May 29 10:02:59 2009" -->
<!-- isoreceived="20090529140259" -->
<!-- sent="Fri, 29 May 2009 10:03:33 -0400" -->
<!-- isosent="20090529140333" -->
<!-- name="Jeff Layton" -->
<!-- email="laytonjb_at_[hidden]" -->
<!-- subject="[OMPI users] Problem with 1.3.2 - need tips on debugging" -->
<!-- id="4A1FEB35.3060505_at_att.net" -->
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
<strong>Subject:</strong> [OMPI users] Problem with 1.3.2 - need tips on debugging<br>
<strong>From:</strong> Jeff Layton (<em>laytonjb_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-05-29 10:03:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9466.php">Eugene Loh: "Re: [OMPI users] &quot;An error occurred in MPI_Recv&quot; with more than 2 CPU"</a>
<li><strong>Previous message:</strong> <a href="9464.php">vasilis: "Re: [OMPI users] &quot;An error occurred in MPI_Recv&quot; with more than 2 CPU"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9467.php">Jeff Layton: "Re: [OMPI users] Problem with 1.3.2 - need tips on debugging"</a>
<li><strong>Reply:</strong> <a href="9467.php">Jeff Layton: "Re: [OMPI users] Problem with 1.3.2 - need tips on debugging"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Good morning,
<br>
<p>I just built 1.3.2 on a ROCKS 4.something system. I built my code
<br>
(CFL3D) with the Intel 10.1 compilers. I also linked in the
<br>
OpenMPI libs and the Intel libraries to make sure I had the paths
<br>
correct. When I try running my code, I get the following,
<br>
<p><p>error: executing task of job 2951 failed: execution daemon on host 
<br>
&quot;compute-2-3.local&quot; didn't accept task
<br>
--------------------------------------------------------------------------
<br>
A daemon (pid 12015) died unexpectedly with status 1 while attempting
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
<p><p><p>Everything seems correct. I checked that the mpirun was correct
<br>
and the binary has the correct libraries (checked using ldd).
<br>
<p>Can anyone tell me what the &quot;status 1&quot; means? Any tips on debugging
<br>
the problem?
<br>
<p>Thanks!
<br>
<p>Jeff
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9466.php">Eugene Loh: "Re: [OMPI users] &quot;An error occurred in MPI_Recv&quot; with more than 2 CPU"</a>
<li><strong>Previous message:</strong> <a href="9464.php">vasilis: "Re: [OMPI users] &quot;An error occurred in MPI_Recv&quot; with more than 2 CPU"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9467.php">Jeff Layton: "Re: [OMPI users] Problem with 1.3.2 - need tips on debugging"</a>
<li><strong>Reply:</strong> <a href="9467.php">Jeff Layton: "Re: [OMPI users] Problem with 1.3.2 - need tips on debugging"</a>
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

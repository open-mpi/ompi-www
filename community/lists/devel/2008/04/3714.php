<?
$subject_val = "[OMPI devel] Using do-not-launch, display-map, and do-not-resolve to test mappings";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Apr 17 10:25:17 2008" -->
<!-- isoreceived="20080417142517" -->
<!-- sent="Thu, 17 Apr 2008 08:25:04 -0600" -->
<!-- isosent="20080417142504" -->
<!-- name="Ralph H Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="[OMPI devel] Using do-not-launch, display-map, and do-not-resolve to test mappings" -->
<!-- id="C42CB9E0.D20B%rhc_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
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
<strong>Subject:</strong> [OMPI devel] Using do-not-launch, display-map, and do-not-resolve to test mappings<br>
<strong>From:</strong> Ralph H Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-04-17 10:25:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3715.php">Ralph Castain: "[OMPI devel] SIGUSR2 response"</a>
<li><strong>Previous message:</strong> <a href="3713.php">Jeff Squyres: "Re: [OMPI devel] New mapper module"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Brief summary:
<br>
In r18190, I have restored the --do-not-launch capability, and added a
<br>
--do-not-resolve flag. This note describes how you can use those to build
<br>
and test application mappings without first getting an allocation and/or
<br>
launching it.
<br>
<p>Longer description:
<br>
<p>Users and developers have both expressed a need to develop potentially
<br>
complex process mappings &quot;offline&quot; - i.e., before attempting to actually
<br>
launch the application. This has been particularly problematic when the
<br>
mappings are large and target managed environments where obtaining an
<br>
allocation can take quite some time to clear the queue.
<br>
<p>We used to have a &quot;do-not-launch&quot; flag that would allow the system to
<br>
allocate and map a job, but then exit without attempting to launch it. This
<br>
had been &quot;disabled&quot; during ORTE changes in recent months. We still had the
<br>
ability to &quot;display-map&quot; however, but the procedure would often hang or
<br>
abort as the system would attempt to resolve all network names in a
<br>
hostfile.
<br>
<p>To resolve these problems, I have:
<br>
<p>1. re-implemented the &quot;do-not-launch&quot; flag so it properly works. It is set
<br>
by specifying --do-not-launch on the mpirun command line
<br>
<p>2. added a --do-not-resolve option to the mpirun command line that instructs
<br>
the system to not attempt to resolve network names
<br>
<p><p>For an example of how these can be used, consider the case where you want to
<br>
build a sequential map of processes versus hostfile names via the new RMAPS
<br>
seq module. It will be a big job, so you would like to ensure that the map
<br>
is correct before (a) sitting in a queue for hours/days waiting to get an
<br>
allocation, and (b) finding out it is wrong and having to abort.
<br>
<p>What you can do is use these new options to build and test your map
<br>
-without- getting an allocation by:
<br>
<p>1. build a hostfile that describes your desired mapping - it would have a
<br>
list of host names in rank order of where you want a process to go. These
<br>
hosts can have any names - we won't be trying to resolve them, so the fact
<br>
that they are not necessarily reachable on the network is irrelevant.
<br>
<p>2. do an mpirun of your job, including -mca rmaps seq -hostfile my_hosts
<br>
--do-not-launch --do-not-resolve --display-map on the cmd line. This
<br>
instructs mpirun to use the seq mapper, which will subsequently use the
<br>
specified hostfile to do the mapping. It also tells mpirun to display the
<br>
resulting map so you can see where your procs would have gone, but to not
<br>
attempt to find them on the network and to -not- attempt to launch the job.
<br>
<p>What you'll get is a display node-by-node of what proc ranks are assigned to
<br>
that node. Once you get this looking the way you want, you can then simply
<br>
submit the job to your target cluster with confidence that the procs will be
<br>
mapped the way you wanted.
<br>
<p><p>Hope that helps
<br>
Ralph
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3715.php">Ralph Castain: "[OMPI devel] SIGUSR2 response"</a>
<li><strong>Previous message:</strong> <a href="3713.php">Jeff Squyres: "Re: [OMPI devel] New mapper module"</a>
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

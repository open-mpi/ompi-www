<?
$subject_val = "Re: [OMPI users] Open MPI program cannot complete";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Oct 25 15:40:27 2010" -->
<!-- isoreceived="20101025194027" -->
<!-- sent="Mon, 25 Oct 2010 20:40:18 +0100" -->
<!-- isosent="20101025194018" -->
<!-- name="Ashley Pittman" -->
<!-- email="ashley_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Open MPI program cannot complete" -->
<!-- id="B65C0579-B9D7-4ED9-B4BB-B5360E3524F0_at_pittman.co.uk" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="SNT134-w254CACF5286D48F237A9F7CB410_at_phx.gbl" -->
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
<strong>Subject:</strong> Re: [OMPI users] Open MPI program cannot complete<br>
<strong>From:</strong> Ashley Pittman (<em>ashley_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-10-25 15:40:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14617.php">David Zhang: "Re: [OMPI users] Open MPI program cannot complete"</a>
<li><strong>Previous message:</strong> <a href="14615.php">saahil.in_at_[hidden]: "Re: [OMPI users] Fwd: Cross compiling for 32 bit from a 64 bit machine"</a>
<li><strong>In reply to:</strong> <a href="14614.php">Jack Bryan: "Re: [OMPI users] Open MPI program cannot complete"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14617.php">David Zhang: "Re: [OMPI users] Open MPI program cannot complete"</a>
<li><strong>Reply:</strong> <a href="14617.php">David Zhang: "Re: [OMPI users] Open MPI program cannot complete"</a>
<li><strong>Reply:</strong> <a href="14618.php">Jack Bryan: "Re: [OMPI users] Open MPI program cannot complete"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 25 Oct 2010, at 20:18, Jack Bryan wrote:
<br>
<p><span class="quotelev1">&gt; Thanks
</span><br>
<span class="quotelev1">&gt; I have downloaded 
</span><br>
<span class="quotelev1">&gt; <a href="http://padb.googlecode.com/files/padb-3.0.tgz">http://padb.googlecode.com/files/padb-3.0.tgz</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; and compile it.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; But, no user manual, I can not use it by padb -aQ.
</span><br>
<p>The -a flag is a shortcut to all jobs, if you are providing a jobid (which is normally numeric) then don't set the -a flag.
<br>
<p><span class="quotelev1">&gt; Do you have use manual about how to use it ? 
</span><br>
<p>In my previous mail I was assuming you were using orte to launch the jobs but if you are using PBS then you'll need to use the 3.2 beta as the PBS code is new, alternatively you could find the host where the PBS script itself runs and check of the &quot;ompi-ps&quot; command gives you any output, if it does then you could run it from there giving it the orte jobid.
<br>
<p>A bit of background about resource managers (in which I'm including orte and PBS), padb supports many resource managers and tries to automatically detect which ones you have installed on your system.  If you don't specify one then it'll see what is installed, if there is more than one resource manager installed then it'll see which of them claim to have active jobs - if only one resource manager meets this criteria then it'll pick that one - hence 99% of the time it should just work.  If more than one resource manager claims to have active jobs then padb will refuse to run but ask the user to specify one explicitly.
<br>
<p>You should try the following in order once you have 3.2 installed.
<br>
<p>padb -Ormgr=pbs -Q &lt;myjob&gt;
<br>
<p>Or - find the node where the PBS script is being executed, check that the ompi-ps command is returning the jobid and then run
<br>
<p>padb -Ormgr=orte -Q &lt;openmpi_jobid&gt;
<br>
<p>Ashley,
<br>
<p><pre>
-- 
Ashley Pittman, Bath, UK.
Padb - A parallel job inspection tool for cluster computing
<a href="http://padb.pittman.org.uk">http://padb.pittman.org.uk</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14617.php">David Zhang: "Re: [OMPI users] Open MPI program cannot complete"</a>
<li><strong>Previous message:</strong> <a href="14615.php">saahil.in_at_[hidden]: "Re: [OMPI users] Fwd: Cross compiling for 32 bit from a 64 bit machine"</a>
<li><strong>In reply to:</strong> <a href="14614.php">Jack Bryan: "Re: [OMPI users] Open MPI program cannot complete"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14617.php">David Zhang: "Re: [OMPI users] Open MPI program cannot complete"</a>
<li><strong>Reply:</strong> <a href="14617.php">David Zhang: "Re: [OMPI users] Open MPI program cannot complete"</a>
<li><strong>Reply:</strong> <a href="14618.php">Jack Bryan: "Re: [OMPI users] Open MPI program cannot complete"</a>
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

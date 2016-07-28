<?
$subject_val = "Re: [OMPI users] Open MPI program cannot complete";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Oct 25 15:52:59 2010" -->
<!-- isoreceived="20101025195259" -->
<!-- sent="Mon, 25 Oct 2010 12:52:34 -0700" -->
<!-- isosent="20101025195234" -->
<!-- name="David Zhang" -->
<!-- email="solarbikedz_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Open MPI program cannot complete" -->
<!-- id="AANLkTi=h8Q9GNJRCSFdYaezBPL3-TsFU8GsTy_qnL_zr_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="B65C0579-B9D7-4ED9-B4BB-B5360E3524F0_at_pittman.co.uk" -->
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
<strong>From:</strong> David Zhang (<em>solarbikedz_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-10-25 15:52:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14618.php">Jack Bryan: "Re: [OMPI users] Open MPI program cannot complete"</a>
<li><strong>Previous message:</strong> <a href="14616.php">Ashley Pittman: "Re: [OMPI users] Open MPI program cannot complete"</a>
<li><strong>In reply to:</strong> <a href="14616.php">Ashley Pittman: "Re: [OMPI users] Open MPI program cannot complete"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14618.php">Jack Bryan: "Re: [OMPI users] Open MPI program cannot complete"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
can you install MPI on your local machine? As someone said earlier, you
<br>
don't need a cluster to run MPI.  You can run MPI with multiple processes on
<br>
a single computer.
<br>
<p>On Mon, Oct 25, 2010 at 12:40 PM, Ashley Pittman &lt;ashley_at_[hidden]&gt;wrote:
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 25 Oct 2010, at 20:18, Jack Bryan wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Thanks
</span><br>
<span class="quotelev2">&gt; &gt; I have downloaded
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://padb.googlecode.com/files/padb-3.0.tgz">http://padb.googlecode.com/files/padb-3.0.tgz</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; and compile it.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; But, no user manual, I can not use it by padb -aQ.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The -a flag is a shortcut to all jobs, if you are providing a jobid (which
</span><br>
<span class="quotelev1">&gt; is normally numeric) then don't set the -a flag.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Do you have use manual about how to use it ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In my previous mail I was assuming you were using orte to launch the jobs
</span><br>
<span class="quotelev1">&gt; but if you are using PBS then you'll need to use the 3.2 beta as the PBS
</span><br>
<span class="quotelev1">&gt; code is new, alternatively you could find the host where the PBS script
</span><br>
<span class="quotelev1">&gt; itself runs and check of the &quot;ompi-ps&quot; command gives you any output, if it
</span><br>
<span class="quotelev1">&gt; does then you could run it from there giving it the orte jobid.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; A bit of background about resource managers (in which I'm including orte
</span><br>
<span class="quotelev1">&gt; and PBS), padb supports many resource managers and tries to automatically
</span><br>
<span class="quotelev1">&gt; detect which ones you have installed on your system.  If you don't specify
</span><br>
<span class="quotelev1">&gt; one then it'll see what is installed, if there is more than one resource
</span><br>
<span class="quotelev1">&gt; manager installed then it'll see which of them claim to have active jobs -
</span><br>
<span class="quotelev1">&gt; if only one resource manager meets this criteria then it'll pick that one -
</span><br>
<span class="quotelev1">&gt; hence 99% of the time it should just work.  If more than one resource
</span><br>
<span class="quotelev1">&gt; manager claims to have active jobs then padb will refuse to run but ask the
</span><br>
<span class="quotelev1">&gt; user to specify one explicitly.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; You should try the following in order once you have 3.2 installed.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; padb -Ormgr=pbs -Q &lt;myjob&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Or - find the node where the PBS script is being executed, check that the
</span><br>
<span class="quotelev1">&gt; ompi-ps command is returning the jobid and then run
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; padb -Ormgr=orte -Q &lt;openmpi_jobid&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ashley,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ashley Pittman, Bath, UK.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Padb - A parallel job inspection tool for cluster computing
</span><br>
<span class="quotelev1">&gt; <a href="http://padb.pittman.org.uk">http://padb.pittman.org.uk</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
David Zhang
University of California, San Diego
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-14617/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14618.php">Jack Bryan: "Re: [OMPI users] Open MPI program cannot complete"</a>
<li><strong>Previous message:</strong> <a href="14616.php">Ashley Pittman: "Re: [OMPI users] Open MPI program cannot complete"</a>
<li><strong>In reply to:</strong> <a href="14616.php">Ashley Pittman: "Re: [OMPI users] Open MPI program cannot complete"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14618.php">Jack Bryan: "Re: [OMPI users] Open MPI program cannot complete"</a>
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

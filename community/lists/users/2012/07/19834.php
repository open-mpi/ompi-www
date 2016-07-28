<?
$subject_val = "Re: [OMPI users] restricting a job to a set of hosts";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jul 26 17:58:30 2012" -->
<!-- isoreceived="20120726215830" -->
<!-- sent="Thu, 26 Jul 2012 16:58:26 -0500" -->
<!-- isosent="20120726215826" -->
<!-- name="Erik Nelson" -->
<!-- email="nelsonerikd_at_[hidden]" -->
<!-- subject="Re: [OMPI users] restricting a job to a set of hosts" -->
<!-- id="CAM=OgihvaYuuQS1zHv4Lm-W4pPxcM5YeuDm_mSoRrSHemG0gtw_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="92106F22-B070-4E0B-A55F-C0E2BD09EA39_at_staff.uni-marburg.de" -->
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
<strong>Subject:</strong> Re: [OMPI users] restricting a job to a set of hosts<br>
<strong>From:</strong> Erik Nelson (<em>nelsonerikd_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-07-26 17:58:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19835.php">Ralph Castain: "Re: [OMPI users] OpenMPI and Rmpi/snow"</a>
<li><strong>Previous message:</strong> <a href="19833.php">Reuti: "Re: [OMPI users] restricting a job to a set of hosts"</a>
<li><strong>In reply to:</strong> <a href="19831.php">Reuti: "Re: [OMPI users] restricting a job to a set of hosts"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19836.php">Reuti: "Re: [OMPI users] restricting a job to a set of hosts"</a>
<li><strong>Reply:</strong> <a href="19836.php">Reuti: "Re: [OMPI users] restricting a job to a set of hosts"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Reuti,
<br>
<p>Thank you. Our queue is backed up, so it will take a little while before I
<br>
can try this.
<br>
<p>I assume that by specifying the nodes this way, I don't need (and it would
<br>
confuse
<br>
the system) to add -nolocal. In other words, qsub will try to put the
<br>
parent node
<br>
somewhere in this set.
<br>
<p>Is this the idea?
<br>
<p>Erik
<br>
<p><p>On Thu, Jul 26, 2012 at 4:48 PM, Reuti &lt;reuti_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Am 26.07.2012 um 23:33 schrieb Erik Nelson:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; I have a purely parallel job that runs ~100 processes. Each process has
</span><br>
<span class="quotelev1">&gt; ~identical
</span><br>
<span class="quotelev2">&gt; &gt; overhead so the speed of the program is dominated by the slowest
</span><br>
<span class="quotelev1">&gt; processor.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; For this reason, I would like to restrict the job to a specific set of
</span><br>
<span class="quotelev1">&gt; identical (fast)
</span><br>
<span class="quotelev2">&gt; &gt; processors on our cluster.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I read the FAQ on -hosts and -hostfile, but it is still unclear to me
</span><br>
<span class="quotelev1">&gt; what affect these
</span><br>
<span class="quotelev2">&gt; &gt; directives will have in a queuing environment.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Currently, I submit the job using the &quot;qsub&quot; command in the &quot;sge&quot;
</span><br>
<span class="quotelev1">&gt; environment as :
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;             qsub -pe mpich 101 jobfile.job
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; where jobfile contains the command
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;             mpirun -np 101 -nolocal ./executable
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I would leave -nolocal out here.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; $ qsub -l
</span><br>
<span class="quotelev1">&gt; &quot;h=compute-5-[1-9]|compute-5-1[0-9]|compute-5-2[0-9]|compute-5-3[0-2]&quot; -pe
</span><br>
<span class="quotelev1">&gt; mpich 101 jobfile.job
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- Reuti
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; I would like to restrict the job to nodes compute-5-1 to compute-5-32 on
</span><br>
<span class="quotelev1">&gt; our machine,
</span><br>
<span class="quotelev2">&gt; &gt; each containing 8 cpu's (slots). How do I go about this?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Thanks, Erik
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; --
</span><br>
<span class="quotelev2">&gt; &gt; Erik Nelson
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Howard Hughes Medical Institute
</span><br>
<span class="quotelev2">&gt; &gt; 6001 Forest Park Blvd., Room ND10.124
</span><br>
<span class="quotelev2">&gt; &gt; Dallas, Texas 75235-9050
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; p : 214 645 5981
</span><br>
<span class="quotelev2">&gt; &gt; f : 214 645 5948
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
Erik Nelson
Howard Hughes Medical Institute
6001 Forest Park Blvd., Room ND10.124
Dallas, Texas 75235-9050
p : 214 645 5981
f : 214 645 5948
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-19834/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19835.php">Ralph Castain: "Re: [OMPI users] OpenMPI and Rmpi/snow"</a>
<li><strong>Previous message:</strong> <a href="19833.php">Reuti: "Re: [OMPI users] restricting a job to a set of hosts"</a>
<li><strong>In reply to:</strong> <a href="19831.php">Reuti: "Re: [OMPI users] restricting a job to a set of hosts"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19836.php">Reuti: "Re: [OMPI users] restricting a job to a set of hosts"</a>
<li><strong>Reply:</strong> <a href="19836.php">Reuti: "Re: [OMPI users] restricting a job to a set of hosts"</a>
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

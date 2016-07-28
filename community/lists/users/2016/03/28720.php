<?
$subject_val = "Re: [OMPI users] running OpenMPI jobs (either 1.10.1 or 1.8.7) on SoGE more problems";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Mar 16 19:00:28 2016" -->
<!-- isoreceived="20160316230028" -->
<!-- sent="Wed, 16 Mar 2016 16:00:15 -0700" -->
<!-- isosent="20160316230015" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] running OpenMPI jobs (either 1.10.1 or 1.8.7) on SoGE more problems" -->
<!-- id="22A756AC-0175-469B-A008-4AB2410D032E_at_open-mpi.org" -->
<!-- charset="utf-8" -->
<!-- inreplyto="434F2BB0AF80484CA04DE0D8C0738BF2A29F18BA_at_cshsmsgmbx01.CSMC.EDU" -->
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
<strong>Subject:</strong> Re: [OMPI users] running OpenMPI jobs (either 1.10.1 or 1.8.7) on SoGE more problems<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-03-16 19:00:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28721.php">dpchoudh .: "[OMPI users] Issue about cm PML"</a>
<li><strong>Previous message:</strong> <a href="28719.php">Lane, William: "[OMPI users] running OpenMPI jobs (either 1.10.1 or 1.8.7) on SoGE more problems"</a>
<li><strong>In reply to:</strong> <a href="28719.php">Lane, William: "[OMPI users] running OpenMPI jobs (either 1.10.1 or 1.8.7) on SoGE more problems"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28729.php">Dave Love: "Re: [OMPI users] running OpenMPI jobs (either 1.10.1 or 1.8.7) on SoGE more problems"</a>
<li><strong>Reply:</strong> <a href="28729.php">Dave Love: "Re: [OMPI users] running OpenMPI jobs (either 1.10.1 or 1.8.7) on SoGE more problems"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
That&#226;&#128;&#153;s an SGE error message - looks like your tmp file system on one of the remote nodes is full. We don&#226;&#128;&#153;t control where SGE puts its files, but it might be that your backend nodes are having issues with us doing a tree-based launch (i.e., where each backend daemon launches more daemons along the tree).
<br>
<p>You could try turning the tree-based launch &#226;&#128;&#156;off&#226;&#128;&#157; and see if that helps: &quot;-mca plm_rsh_no_tree_spawn 1&quot;
<br>
<p><p><span class="quotelev1">&gt; On Mar 16, 2016, at 3:50 PM, Lane, William &lt;William.Lane_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm getting an error message early on:
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-11:17355] [[36373,0],17] plm:rsh: using &quot;/opt/sge/bin/lx-amd64/qrsh -inherit -nostdin -V -verbose&quot; for launching
</span><br>
<span class="quotelev1">&gt; unable to write to file /tmp/285019.1.verylong.q/qrsh_error: No space left on device[csclprd3-6-10:18352] [[36373,0],21] plm:rsh: using &quot;/opt/sge/bin/lx-amd64/qrsh -inherit -nostdin -V -verbose&quot; for launching
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; According to the OpenMPI FAQ:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 'You may want to alter other parameters, but the important one is &quot;control_slaves&quot;, specifying that the environment has &quot;tight integration&quot;. Note also the lack of a start or stop procedure. The tight integration means that mpirun automatically picks up the slot count to use as a default in place of the '-np' argument, picks up a host file, spawns remote processes via 'qrsh' so that SGE can control and monitor them, and creates and destroys a per-job temporary directory ($TMPDIR), in which Open MPI's directory will be created (by default).'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; When I look at my OpenMPI environment there is no $TMPDIR environment variable.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; How does OpenMPI determine where it's going to put the &quot;per-job temporary directory ($TMPDIR)&quot;? Does it use an SoGE defined environment variable? Is the host file used by OpenMPI spawned in this $TMPDIR temporary directory?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Bill L.
</span><br>
<span class="quotelev1">&gt; IMPORTANT WARNING: This message is intended for the use of the person or entity to which it is addressed and may contain information that is privileged and confidential, the disclosure of which is governed by applicable law. If the reader of this message is not the intended recipient, or the employee or agent responsible for delivering it to the intended recipient, you are hereby notified that any dissemination, distribution or copying of this information is strictly prohibited. Thank you for your cooperation. _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a> &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>&gt;
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/03/28719.php">http://www.open-mpi.org/community/lists/users/2016/03/28719.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/users/2016/03/28719.php">http://www.open-mpi.org/community/lists/users/2016/03/28719.php</a>&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-28720/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28721.php">dpchoudh .: "[OMPI users] Issue about cm PML"</a>
<li><strong>Previous message:</strong> <a href="28719.php">Lane, William: "[OMPI users] running OpenMPI jobs (either 1.10.1 or 1.8.7) on SoGE more problems"</a>
<li><strong>In reply to:</strong> <a href="28719.php">Lane, William: "[OMPI users] running OpenMPI jobs (either 1.10.1 or 1.8.7) on SoGE more problems"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28729.php">Dave Love: "Re: [OMPI users] running OpenMPI jobs (either 1.10.1 or 1.8.7) on SoGE more problems"</a>
<li><strong>Reply:</strong> <a href="28729.php">Dave Love: "Re: [OMPI users] running OpenMPI jobs (either 1.10.1 or 1.8.7) on SoGE more problems"</a>
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

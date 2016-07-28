<?
$subject_val = "Re: [OMPI users] RSH agent working but no output";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Sep 27 13:08:50 2015" -->
<!-- isoreceived="20150927170850" -->
<!-- sent="Sun, 27 Sep 2015 10:08:46 -0700" -->
<!-- isosent="20150927170846" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] RSH agent working but no output" -->
<!-- id="7CA3E184-8B40-4262-8A5B-2566B7D5BA54_at_open-mpi.org" -->
<!-- charset="utf-8" -->
<!-- inreplyto="FB6637F4-9DF6-4899-8367-74AF08609975_at_gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] RSH agent working but no output<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-09-27 13:08:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27685.php">marcin.krotkiewski: "[OMPI users] Using POSIX shared memory as send buffer"</a>
<li><strong>Previous message:</strong> <a href="27683.php">Filippo Spiga: "[OMPI users] RSH agent working but no output"</a>
<li><strong>In reply to:</strong> <a href="27683.php">Filippo Spiga: "[OMPI users] RSH agent working but no output"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27686.php">Filippo Spiga: "Re: [OMPI users] RSH agent working but no output"</a>
<li><strong>Reply:</strong> <a href="27686.php">Filippo Spiga: "Re: [OMPI users] RSH agent working but no output"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Is this a debug build of OMPI? In other words, was it configured with &#226;&#128;&#148;enable-debug? If so, you can get some further output to see what is causing the problem by adding the following to your cmd line:
<br>
<p>&#226;&#128;&#148;leave-session-attached &#226;&#128;&#148;mca plm_base_verbose 5  &#226;&#128;&#148;mca state_base_verbose 5
<br>
<p>BTW: what version of OMPI are you using?
<br>
<p><p><span class="quotelev1">&gt; On Sep 27, 2015, at 8:47 AM, Filippo Spiga &lt;spiga.filippo_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am trying to run OpenMPI on a cluster where I am only allow to use RSH to spawn processes across compute nodes. I modified my mpirun command in this way:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; mpirun -np 48 --hostfile ./hostfile --mca plm_rsh_agent &quot;rsh&quot; /central_storage/osu_barrier
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; the file &quot;hostfile&quot; contain the machine where I am running mpirun plus another node. Libraries and osu_barrier are located in a central storage mounted by all nodes. The processes osu_barrier are spawn correctly across two nodes but no output is returned and the command seems stuck. Any idea what can I look at to try to solve this issue?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Mr. Filippo SPIGA, M.Sc.
</span><br>
<span class="quotelev1">&gt; <a href="http://fspiga.github.io">http://fspiga.github.io</a> ~ skype: filippo.spiga
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; &#194;&#171;Nobody will drive us out of Cantor's paradise.&#194;&#187; ~ David Hilbert
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; *****
</span><br>
<span class="quotelev1">&gt; Disclaimer: &quot;Please note this message and any attachments are CONFIDENTIAL and may be privileged or otherwise protected from disclosure. The contents are not to be disclosed to anyone other than the addressee. Unauthorized recipients are requested to preserve this confidentiality and to advise the sender immediately of any error in transmission.&quot;
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
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/09/27683.php">http://www.open-mpi.org/community/lists/users/2015/09/27683.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27685.php">marcin.krotkiewski: "[OMPI users] Using POSIX shared memory as send buffer"</a>
<li><strong>Previous message:</strong> <a href="27683.php">Filippo Spiga: "[OMPI users] RSH agent working but no output"</a>
<li><strong>In reply to:</strong> <a href="27683.php">Filippo Spiga: "[OMPI users] RSH agent working but no output"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27686.php">Filippo Spiga: "Re: [OMPI users] RSH agent working but no output"</a>
<li><strong>Reply:</strong> <a href="27686.php">Filippo Spiga: "Re: [OMPI users] RSH agent working but no output"</a>
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

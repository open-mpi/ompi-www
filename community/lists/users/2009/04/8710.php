<?
$subject_val = "Re: [OMPI users] Beginner's question: how to avoid a running mpi job hang if host or network failed or orted deamon killed?";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr  1 09:34:56 2009" -->
<!-- isoreceived="20090401133456" -->
<!-- sent="Wed, 1 Apr 2009 07:34:46 -0600" -->
<!-- isosent="20090401133446" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Beginner's question: how to avoid a running mpi job hang if host or network failed or orted deamon killed?" -->
<!-- id="3291EA76-211B-474D-A827-24CDE5D6B77B_at_lanl.gov" -->
<!-- charset="GB2312" -->
<!-- inreplyto="BLU114-W87035A794D3B0A0B78970A58B0_at_phx.gbl" -->
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
<strong>Subject:</strong> Re: [OMPI users] Beginner's question: how to avoid a running mpi job hang if host or network failed or orted deamon killed?<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-04-01 09:34:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8711.php">Ralph Castain: "Re: [OMPI users] Strange behaviour of SGE+OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="8709.php">Rolf Vandevaart: "Re: [OMPI users] Strange behaviour of SGE+OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="8708.php">Guanyinzhu: "Re: [OMPI users] Beginner's question: how to avoid a running mpi job hang if host or network failed or orted deamon killed?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8727.php">Guanyinzhu: "Re: [OMPI users] Beginner's question: how to avoid a running mpi job hang if host or network failed or orted deamon killed?"</a>
<li><strong>Reply:</strong> <a href="8727.php">Guanyinzhu: "Re: [OMPI users] Beginner's question: how to avoid a running mpi job hang if host or network failed or orted deamon killed?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
There is indeed a heartbeat mechanism you can use - it is &quot;off&quot; by  
<br>
default. You can set it to check every N seconds with:
<br>
<p>-mca orte_heartbeat_rate N
<br>
<p>on your command line. Or if you want it to always run, add  
<br>
&quot;orte_heartbeat_rate = N&quot; to your default MCA param file. OMPI will  
<br>
declare the orted &quot;dead&quot; if two consecutive heartbeats are not seen.
<br>
<p>Let me know how it works for you - it hasn't been extensively tested,  
<br>
but has worked so far.
<br>
Ralph
<br>
<p>On Apr 1, 2009, at 6:07 AM, Guanyinzhu wrote:
<br>
<p><span class="quotelev1">&gt; I mean killed the orted deamon process during the mpi job running ,  
</span><br>
<span class="quotelev1">&gt; but the mpi job hang and could't notice one of it's rank failed.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Date: Wed, 1 Apr 2009 19:09:34 +0800
</span><br>
<span class="quotelev2">&gt; &gt; From: ml.jgmbenoit_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; To: users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; Subject: Re: [OMPI users] Beginner's question: how to avoid a  
</span><br>
<span class="quotelev1">&gt; running mpi job hang if host or network failed or orted deamon killed?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Is there a firewall somewhere ?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Jerome
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Guanyinzhu wrote:
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Hi!
</span><br>
<span class="quotelev3">&gt; &gt; &gt; I'm using OpenMPI 1.3 on ten nodes connected with Gigabit  
</span><br>
<span class="quotelev1">&gt; Ethernet on
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Redhat Linux x86_64.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; I run a test like this: just killed the orted process and the  
</span><br>
<span class="quotelev1">&gt; job hung
</span><br>
<span class="quotelev3">&gt; &gt; &gt; for a long time (hang for 2~3 hours then I killed the job).
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; I have the follow questions:
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; when network failed or host failed or orted deamon was killed by
</span><br>
<span class="quotelev3">&gt; &gt; &gt; accident, How long would the running mpi job notice and exit?
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Does OpenMPI support a heartbeat mechanism or how c! ould I fast
</span><br>
<span class="quotelev3">&gt; &gt; &gt; detect the failture to avoid the mpi job hang?
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; thanks a lot!
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;  
</span><br>
<span class="quotelev1">&gt; ------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt; &gt; &gt; ?MSN????,??????????! ????! &lt;<a href="http://mobile.msn.com.cn/">http://mobile.msn.com.cn/</a>&gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;  
</span><br>
<span class="quotelev1">&gt; ------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt; &gt; users mailing list
</span><br>
<span class="quotelev3">&gt; &gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
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
<span class="quotelev1">&gt; &#184;&#252;&#182;&#224;&#200;&#200;&#192;&#177;&#215;&#202;&#209;&#182;&#190;&#161;&#212;&#218;&#208;&#194;&#176;&#230;MSN&#202;&#215;&#210;&#179;&#163;&#161; &#193;&#162;&#191;&#204;&#183;&#195;&#206;&#202;&#163;&#161;  
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-8710/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8711.php">Ralph Castain: "Re: [OMPI users] Strange behaviour of SGE+OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="8709.php">Rolf Vandevaart: "Re: [OMPI users] Strange behaviour of SGE+OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="8708.php">Guanyinzhu: "Re: [OMPI users] Beginner's question: how to avoid a running mpi job hang if host or network failed or orted deamon killed?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8727.php">Guanyinzhu: "Re: [OMPI users] Beginner's question: how to avoid a running mpi job hang if host or network failed or orted deamon killed?"</a>
<li><strong>Reply:</strong> <a href="8727.php">Guanyinzhu: "Re: [OMPI users] Beginner's question: how to avoid a running mpi job hang if host or network failed or orted deamon killed?"</a>
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

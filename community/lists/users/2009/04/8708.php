<?
$subject_val = "Re: [OMPI users] Beginner's question: how to avoid a running mpi job hang if host or network failed or orted deamon killed?";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr  1 08:07:17 2009" -->
<!-- isoreceived="20090401120717" -->
<!-- sent="Wed, 1 Apr 2009 20:07:12 +0800" -->
<!-- isosent="20090401120712" -->
<!-- name="Guanyinzhu" -->
<!-- email="buptzhugy_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Beginner's question: how to avoid a running mpi job hang if host or network failed or orted deamon killed?" -->
<!-- id="BLU114-W87035A794D3B0A0B78970A58B0_at_phx.gbl" -->
<!-- charset="gb2312" -->
<!-- inreplyto="49D34B6E.8070905_at_mailsnare.net" -->
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
<strong>From:</strong> Guanyinzhu (<em>buptzhugy_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-04-01 08:07:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8709.php">Rolf Vandevaart: "Re: [OMPI users] Strange behaviour of SGE+OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="8707.php">Marce: "[OMPI users]  Can't find libsvml in the execution"</a>
<li><strong>In reply to:</strong> <a href="8706.php">Jerome BENOIT: "Re: [OMPI users] Beginner's question: how to avoid a running mpi job hang if host or network failed or orted deamon killed?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8710.php">Ralph Castain: "Re: [OMPI users] Beginner's question: how to avoid a running mpi job hang if host or network failed or orted deamon killed?"</a>
<li><strong>Reply:</strong> <a href="8710.php">Ralph Castain: "Re: [OMPI users] Beginner's question: how to avoid a running mpi job hang if host or network failed or orted deamon killed?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I mean killed the orted deamon process during the mpi job running , but the mpi job hang and could't notice one of it's rank failed.
<br>
<p>&nbsp;
<br>
<p>&nbsp;
<br>
<p><p>&nbsp;
<br>
<span class="quotelev1">&gt; Date: Wed, 1 Apr 2009 19:09:34 +0800
</span><br>
<span class="quotelev1">&gt; From: ml.jgmbenoit_at_[hidden]
</span><br>
<span class="quotelev1">&gt; To: users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] Beginner's question: how to avoid a running mpi job hang if host or network failed or orted deamon killed?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Is there a firewall somewhere ?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Jerome
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Guanyinzhu wrote:
</span><br>
<span class="quotelev2">&gt; &gt; Hi! 
</span><br>
<span class="quotelev2">&gt; &gt; I'm using OpenMPI 1.3 on ten nodes connected with Gigabit Ethernet on 
</span><br>
<span class="quotelev2">&gt; &gt; Redhat Linux x86_64. 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; I run a test like this: just killed the orted process and the job hung 
</span><br>
<span class="quotelev2">&gt; &gt; for a long time (hang for 2~3 hours then I killed the job).
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; I have the follow questions:
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; when network failed or host failed or orted deamon was killed by 
</span><br>
<span class="quotelev2">&gt; &gt; accident, How long would the running mpi job notice and exit? 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Does OpenMPI support a heartbeat mechanism or how could I fast 
</span><br>
<span class="quotelev2">&gt; &gt; detect the failture to avoid the mpi job hang?
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; thanks a lot!
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; ------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt; ?MSN????,??????????! ????! &lt;<a href="http://mobile.msn.com.cn/">http://mobile.msn.com.cn/</a>&gt;
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; ------------------------------------------------------------------------
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
<p>_________________________________________________________________
<br>
Live Search&#202;&#211;&#198;&#181;&#203;&#209;&#203;&#247;&#163;&#172;&#191;&#236;&#203;&#217;&#188;&#236;&#203;&#247;&#202;&#211;&#198;&#181;&#181;&#196;&#192;&#251;&#198;&#247;&#163;&#161;
<br>
<a href="http://www.live.com/?scope=video">http://www.live.com/?scope=video</a>
<br>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-8708/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8709.php">Rolf Vandevaart: "Re: [OMPI users] Strange behaviour of SGE+OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="8707.php">Marce: "[OMPI users]  Can't find libsvml in the execution"</a>
<li><strong>In reply to:</strong> <a href="8706.php">Jerome BENOIT: "Re: [OMPI users] Beginner's question: how to avoid a running mpi job hang if host or network failed or orted deamon killed?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8710.php">Ralph Castain: "Re: [OMPI users] Beginner's question: how to avoid a running mpi job hang if host or network failed or orted deamon killed?"</a>
<li><strong>Reply:</strong> <a href="8710.php">Ralph Castain: "Re: [OMPI users] Beginner's question: how to avoid a running mpi job hang if host or network failed or orted deamon killed?"</a>
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

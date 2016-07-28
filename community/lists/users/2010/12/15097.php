<?
$subject_val = "Re: [OMPI users] how to set the connecttimeout para?";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Dec 13 09:35:47 2010" -->
<!-- isoreceived="20101213143547" -->
<!-- sent="Mon, 13 Dec 2010 07:35:39 -0700" -->
<!-- isosent="20101213143539" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] how to set the connecttimeout para?" -->
<!-- id="A16CF958-ED3E-45D1-8DD5-BAC1AA6B6DD3_at_open-mpi.org" -->
<!-- charset="utf-8" -->
<!-- inreplyto="400523a5.e1a0.12cdf675ccb.Coremail.fp356_at_163.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] how to set the connecttimeout para?<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-12-13 09:35:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15098.php">Ralph Castain: "Re: [OMPI users] curious behavior during wait for broadcast: 100% cpu"</a>
<li><strong>Previous message:</strong> <a href="15096.php">Jeff Squyres: "Re: [OMPI users] curious behavior during wait for broadcast: 100% cpu"</a>
<li><strong>In reply to:</strong> <a href="15093.php">peifan: "[OMPI users] how to set the connecttimeout para?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
What version of OMPI are you using? That error message looks like something from an ancient version - might be worth updating.
<br>
<p>On Dec 13, 2010, at 4:04 AM, peifan wrote:
<br>
<p><span class="quotelev1">&gt; i have 3 nodes, one is master node and another is computing nodes,these nodes deployed in the internet (not in cluster)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; when i running NPB (NASA parallel benchmark) in one node (use 2 processes)
</span><br>
<span class="quotelev1">&gt;  mpirun -np 2  exe. 
</span><br>
<span class="quotelev1">&gt; I can get the successful result, but when i running in two nodes(for example running on B and C nodes) i got a fail
</span><br>
<span class="quotelev1">&gt; mprirun -nolocal -hostfile hostfile -np 2 exe.
</span><br>
<span class="quotelev1">&gt; the fail information is :
</span><br>
<span class="quotelev1">&gt; B [0,1,0] connectimeout ,connect() fail errno=110 
</span><br>
<span class="quotelev1">&gt; C [0,1,1] connectimeout ,connect() fail errno=110
</span><br>
<span class="quotelev1">&gt; but the connect between B and  C has no problem, because i can use ping and ssh form B to C (or C to B).
</span><br>
<span class="quotelev1">&gt; I think this problem may be caused by the para connectimeout (so little that lead  fail?). Because my nodes deployed on internet so delay is bigger. 
</span><br>
<span class="quotelev1">&gt; who can help me attack this problem and how to set the connectimeout in openmpi?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; &#231;&#189;&#145;&#230;&#152;&#147;163/126&#233;&#130;&#174;&#231;&#174;&#177;&#231;&#153;&#190;&#229;&#136;&#134;&#231;&#153;&#190;&#229;&#133;&#188;&#229;&#174;&#185;iphone ipad&#233;&#130;&#174;&#228;&#187;&#182;&#230;&#148;&#182;&#229;&#143;&#145; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-15097/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15098.php">Ralph Castain: "Re: [OMPI users] curious behavior during wait for broadcast: 100% cpu"</a>
<li><strong>Previous message:</strong> <a href="15096.php">Jeff Squyres: "Re: [OMPI users] curious behavior during wait for broadcast: 100% cpu"</a>
<li><strong>In reply to:</strong> <a href="15093.php">peifan: "[OMPI users] how to set the connecttimeout para?"</a>
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

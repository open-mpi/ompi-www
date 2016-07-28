<?
$subject_val = "Re: [OMPI users] Factor of 10 loss in performance with 1.3.x";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr  7 11:22:33 2009" -->
<!-- isoreceived="20090407152233" -->
<!-- sent="Tue, 07 Apr 2009 11:22:25 -0400" -->
<!-- isosent="20090407152225" -->
<!-- name="Iain Bason" -->
<!-- email="Iain.Bason_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Factor of 10 loss in performance with 1.3.x" -->
<!-- id="608A5B67-731E-44B0-A656-02162B658F7B_at_sun.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="49DB6A97.4080204_at_sun.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Factor of 10 loss in performance with 1.3.x<br>
<strong>From:</strong> Iain Bason (<em>Iain.Bason_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-04-07 11:22:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8814.php">Peter Kjellstrom: "Re: [OMPI users] MPI can not open file?"</a>
<li><strong>Previous message:</strong> <a href="8812.php">Eugene Loh: "Re: [OMPI users] Factor of 10 loss in performance with 1.3.x"</a>
<li><strong>In reply to:</strong> <a href="8812.php">Eugene Loh: "Re: [OMPI users] Factor of 10 loss in performance with 1.3.x"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8815.php">Eugene Loh: "Re: [OMPI users] Factor of 10 loss in performance with 1.3.x"</a>
<li><strong>Reply:</strong> <a href="8815.php">Eugene Loh: "Re: [OMPI users] Factor of 10 loss in performance with 1.3.x"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Apr 7, 2009, at 11:00 AM, Eugene Loh wrote:
<br>
<p><span class="quotelev1">&gt; Iain Bason wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; There are a bunch changes in the shared memory module between  
</span><br>
<span class="quotelev2">&gt;&gt; 1.2.9  and 1.3.1.  One significant change is the introduction of  
</span><br>
<span class="quotelev2">&gt;&gt; the &quot;sendi&quot;  internal interface.  I believe George Bosilca did the  
</span><br>
<span class="quotelev2">&gt;&gt; initial  implementation.  This is just a wild guess, but maybe  
</span><br>
<span class="quotelev2">&gt;&gt; there is  something about sendi that increases latency when using  
</span><br>
<span class="quotelev2">&gt;&gt; the shared  memory module.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; But the sm BTL doesn't expose its sendi function, which puts it in  
</span><br>
<span class="quotelev1">&gt; the same camp as most BTLs.
</span><br>
<p>Ah, right.  I didn't notice that your change to expose it is not in  
<br>
1.3.1.
<br>
<p>There are a bunch of other changes.  I count 53 revisions in all to  
<br>
btl_sm.c, though doubtless many of them are either trivial or related  
<br>
to initialization rather than sending or receiving messages.
<br>
<p>But maybe Steve should try 1.3.2 instead?  Does that have your  
<br>
improvements in it?
<br>
<p><span class="quotelev1">&gt; And the slowdown doesn't seem to be observed by anyone other than  
</span><br>
<span class="quotelev1">&gt; Steve and his colleague?
</span><br>
<p>It would be useful to know who else has compared these two revisions.
<br>
<p>Iain
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8814.php">Peter Kjellstrom: "Re: [OMPI users] MPI can not open file?"</a>
<li><strong>Previous message:</strong> <a href="8812.php">Eugene Loh: "Re: [OMPI users] Factor of 10 loss in performance with 1.3.x"</a>
<li><strong>In reply to:</strong> <a href="8812.php">Eugene Loh: "Re: [OMPI users] Factor of 10 loss in performance with 1.3.x"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8815.php">Eugene Loh: "Re: [OMPI users] Factor of 10 loss in performance with 1.3.x"</a>
<li><strong>Reply:</strong> <a href="8815.php">Eugene Loh: "Re: [OMPI users] Factor of 10 loss in performance with 1.3.x"</a>
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

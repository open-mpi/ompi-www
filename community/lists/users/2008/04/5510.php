<?
$subject_val = "Re: [OMPI users] Busy waiting [was Re:  (no subject)]";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Apr 24 13:53:56 2008" -->
<!-- isoreceived="20080424175356" -->
<!-- sent="Thu, 24 Apr 2008 13:53:47 -0400" -->
<!-- isosent="20080424175347" -->
<!-- name="Barry Rountree" -->
<!-- email="rountree_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Busy waiting [was Re:  (no subject)]" -->
<!-- id="20080424175347.GA25087_at_eponymous" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="AB5DA59F-D88B-49B3-9655-64528221FE99_at_eecs.utk.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] Busy waiting [was Re:  (no subject)]<br>
<strong>From:</strong> Barry Rountree (<em>rountree_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-04-24 13:53:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5511.php">Josh Hursey: "Re: [OMPI users] How to restart a job twice"</a>
<li><strong>Previous message:</strong> <a href="5509.php">Danesh Daroui: "Re: [OMPI users] Busy waiting [was Re:  (no subject)]"</a>
<li><strong>In reply to:</strong> <a href="5498.php">George Bosilca: "Re: [OMPI users] Busy waiting [was Re:  (no subject)]"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5501.php">Ingo Josopait: "Re: [OMPI users] Busy waiting [was Re:  (no subject)]"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Thu, Apr 24, 2008 at 11:17:30AM -0400, George Bosilca wrote:
<br>
<span class="quotelev1">&gt; Well, blocking or not blocking this is the question !!! Unfortunately, it's 
</span><br>
<span class="quotelev1">&gt; more complex than this thread seems to indicate. It's not that we didn't 
</span><br>
<span class="quotelev1">&gt; want to implement it in Open MPI, it's that at one point we had to make a 
</span><br>
<span class="quotelev1">&gt; choice ... and we decided to always go for performance first.
</span><br>
<p>Of course -- that's the correct choice.
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; However, there were some experimentations to go in blocking more at least 
</span><br>
<span class="quotelev1">&gt; when only TCP was used. Unfortunately, this break some other things in Open 
</span><br>
<span class="quotelev1">&gt; MPI, because of our progression model. We are component based and these 
</span><br>
<span class="quotelev1">&gt; components are allowed to register periodically called callbacks ... And 
</span><br>
<span class="quotelev1">&gt; here periodically means as often as possible. There are at least 2 
</span><br>
<span class="quotelev1">&gt; components that use this mechanism for their own progression: romio 
</span><br>
<span class="quotelev1">&gt; (mca/io/romio) and one-sided communications (mca/osc/*). Switching in 
</span><br>
<span class="quotelev1">&gt; blocking mode will break these 2 components completely. This was the reason 
</span><br>
<span class="quotelev1">&gt; why we're not blocking when only TCP is used.
</span><br>
<span class="quotelev1">&gt;
</span><br>
Ok, good to know.  
<br>
<p><p><span class="quotelev1">&gt; Anyway, there is a solution. We have to move from a poll base progress for 
</span><br>
<span class="quotelev1">&gt; these components to an event base progress. There were some discussions, 
</span><br>
<span class="quotelev1">&gt; and if I remember well ... everybody's waiting for one of my patches :) A 
</span><br>
<span class="quotelev1">&gt; patch that allow a component to add a completion callback to MPI requests 
</span><br>
<span class="quotelev1">&gt; ... I don't have a clear deadline for this, and unfortunately I'm a little 
</span><br>
<span class="quotelev1">&gt; busy right now ... but I'll work on it asap.
</span><br>
<span class="quotelev1">&gt;
</span><br>
Ok, thanks for that.  I doubt I'll be able to come up with a patch
<br>
before you do, but at least you've told me where to start looking.
<br>
<p>Thanks,
<br>
<p>Barry
<br>
<p><p><span class="quotelev1">&gt;   george.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5511.php">Josh Hursey: "Re: [OMPI users] How to restart a job twice"</a>
<li><strong>Previous message:</strong> <a href="5509.php">Danesh Daroui: "Re: [OMPI users] Busy waiting [was Re:  (no subject)]"</a>
<li><strong>In reply to:</strong> <a href="5498.php">George Bosilca: "Re: [OMPI users] Busy waiting [was Re:  (no subject)]"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5501.php">Ingo Josopait: "Re: [OMPI users] Busy waiting [was Re:  (no subject)]"</a>
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

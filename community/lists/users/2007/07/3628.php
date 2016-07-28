<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Jul 10 14:57:03 2007" -->
<!-- isoreceived="20070710185703" -->
<!-- sent="Tue, 10 Jul 2007 14:56:56 -0400" -->
<!-- isosent="20070710185656" -->
<!-- name="Scott Atchley" -->
<!-- email="atchley_at_[hidden]" -->
<!-- subject="Re: [OMPI users] warning:regcache incompatible with malloc" -->
<!-- id="A9E2541F-0828-4E05-90B1-1451737575D1_at_myri.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="45D909C1-37DF-4E03-B1A4-46256F476A0B_at_lanl.gov" -->
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
<strong>From:</strong> Scott Atchley (<em>atchley_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-07-10 14:56:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3629.php">Scott Atchley: "Re: [OMPI users] warning:regcache incompatible with malloc"</a>
<li><strong>Previous message:</strong> <a href="3627.php">Tim Prins: "Re: [OMPI users] warning:regcache incompatible with malloc"</a>
<li><strong>In reply to:</strong> <a href="3624.php">Brian Barrett: "Re: [OMPI users] warning:regcache incompatible with malloc"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jul 10, 2007, at 2:37 PM, Brian Barrett wrote:
<br>
<p><span class="quotelev1">&gt; Scott -
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm having trouble getting the warning to go away with Open MPI.
</span><br>
<span class="quotelev1">&gt; I've disabled our copy of ptmalloc2, so we're not providing a malloc
</span><br>
<span class="quotelev1">&gt; anymore.  I'm wondering if there's also something with the use of
</span><br>
<span class="quotelev1">&gt; DSOs to load libmyriexpress?  Is your belief that MX_RCACHE=2 is safe
</span><br>
<span class="quotelev1">&gt; just for the BTL or for the MTL as well?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Brian
</span><br>
<p>Hi Brian,
<br>
<p>I asked another developer. He says that the issue is that Open MPI  
<br>
uses dl_open() to load MX after the application has started. In that  
<br>
case, MX cannot use the regcache. He believes that there is/was a  
<br>
change made to the MX MTL to provide a reference to MX.
<br>
<p>Patrick may want to clear this up further and correct me where I  
<br>
probably have led you astray. ;-)
<br>
<p>Scott
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3629.php">Scott Atchley: "Re: [OMPI users] warning:regcache incompatible with malloc"</a>
<li><strong>Previous message:</strong> <a href="3627.php">Tim Prins: "Re: [OMPI users] warning:regcache incompatible with malloc"</a>
<li><strong>In reply to:</strong> <a href="3624.php">Brian Barrett: "Re: [OMPI users] warning:regcache incompatible with malloc"</a>
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

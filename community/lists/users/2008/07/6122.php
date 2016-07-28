<?
$subject_val = "Re: [OMPI users] Can't use tcp instead of openib/infinipath";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jul 23 17:55:38 2008" -->
<!-- isoreceived="20080723215538" -->
<!-- sent="Wed, 23 Jul 2008 17:55:33 -0400" -->
<!-- isosent="20080723215533" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Can't use tcp instead of openib/infinipath" -->
<!-- id="E08FB71E-7768-4E9E-92BF-61C57B15A43F_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="4887A426.6000708_at_cse.ucdavis.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] Can't use tcp instead of openib/infinipath<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-07-23 17:55:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6123.php">Mostyn Lewis: "[OMPI users] Continuous poll/select using btl sm (svn 1.4a1r18899)"</a>
<li><strong>Previous message:</strong> <a href="6121.php">Bill Broadley: "Re: [OMPI users] Can't use tcp instead of openib/infinipath"</a>
<li><strong>In reply to:</strong> <a href="6121.php">Bill Broadley: "Re: [OMPI users] Can't use tcp instead of openib/infinipath"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jul 23, 2008, at 5:35 PM, Bill Broadley wrote:
<br>
<p><span class="quotelev1">&gt; My understanding is that -mca btl foo should fail since there isn't  
</span><br>
<span class="quotelev1">&gt; a transport layer called foo.
</span><br>
<p>It should, but it's getting trumped.  See below.
<br>
<p><span class="quotelev1">&gt; So OFED-1.3.1 (or an openmpi build from source) ./install.pl works  
</span><br>
<span class="quotelev1">&gt; with TCP, but not infinipath (because of a missing psm library).   
</span><br>
<span class="quotelev1">&gt; All the &quot;-mca btl&quot; functionality works as expected.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; OFED-1.3.1 (or an openmpi build from source) when I add &quot;--with-psm&quot;  
</span><br>
<span class="quotelev1">&gt; works with infinipath, but all -mca parameters are ignored.  Is  
</span><br>
<span class="quotelev1">&gt; there a way to get openmpi working with infinipath without the psm  
</span><br>
<span class="quotelev1">&gt; library?  Or a suggestion on how to get the -mca functionality  
</span><br>
<span class="quotelev1">&gt; working?
</span><br>
<p><p>Ah -- here's what's happening: Open MPI has 2 different MPI point-to- 
<br>
point engines:
<br>
<p>&nbsp;&nbsp;1. &quot;ob1&quot;, which uses the BTL components
<br>
&nbsp;&nbsp;2. &quot;cm&quot;, which uses the MTL components
<br>
<p>The two different engines reflect two different models for network  
<br>
APIs.  For the most part, users don't care what the difference is.   
<br>
Usually, when an MTL is available, it will give better performance  
<br>
than the corresponding BTL (lots of caveats here -- there's always  
<br>
cases where the BTL will give better performance than the MTL, but in  
<br>
general, the MTL will perform better).
<br>
<p>So what's happening in your case is that &quot;cm&quot; sees that it can be  
<br>
activated with the &quot;psm&quot; MTL (i.e., the native infinipath API), and  
<br>
does so.  Therefore, anything you specify about BTLs is ignored,  
<br>
because cm doesn't see/know/use BTLs at all.
<br>
<p>So you can force the use of specific BTLs by forcing the use of ob1,  
<br>
like so:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mpirun --mca pml ob1 --mca btl tcp,self ...
<br>
<p>If you don't specify the pml, the auto-selection will take over and  
<br>
default to cm because you have the psm MTL available and able to be  
<br>
used at run-time.
<br>
<p>Make sense?
<br>
<p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6123.php">Mostyn Lewis: "[OMPI users] Continuous poll/select using btl sm (svn 1.4a1r18899)"</a>
<li><strong>Previous message:</strong> <a href="6121.php">Bill Broadley: "Re: [OMPI users] Can't use tcp instead of openib/infinipath"</a>
<li><strong>In reply to:</strong> <a href="6121.php">Bill Broadley: "Re: [OMPI users] Can't use tcp instead of openib/infinipath"</a>
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

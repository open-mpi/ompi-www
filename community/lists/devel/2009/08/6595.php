<?
$subject_val = "Re: [OMPI devel] libtool issue with crs/self";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Aug  5 12:44:18 2009" -->
<!-- isoreceived="20090805164418" -->
<!-- sent="Wed, 5 Aug 2009 12:44:14 -0400 (EDT)" -->
<!-- isosent="20090805164414" -->
<!-- name="Brian W. Barrett" -->
<!-- email="brbarret_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] libtool issue with crs/self" -->
<!-- id="alpine.DEB.1.10.0908051235040.8837_at_marvin.we-be-smart.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="D06884F2-006A-42BD-83C9-945C7070179C_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] libtool issue with crs/self<br>
<strong>From:</strong> Brian W. Barrett (<em>brbarret_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-08-05 12:44:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6596.php">Rolf Vandevaart: "[OMPI devel] Mistake with commit 21767"</a>
<li><strong>Previous message:</strong> <a href="6594.php">Josh Hursey: "Re: [OMPI devel] libtool issue with crs/self"</a>
<li><strong>In reply to:</strong> <a href="6594.php">Josh Hursey: "Re: [OMPI devel] libtool issue with crs/self"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6593.php">Josh Hursey: "Re: [OMPI devel] libtool issue with crs/self"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Wed, 5 Aug 2009, Josh Hursey wrote:
<br>
<p><span class="quotelev1">&gt; On Aug 5, 2009, at 11:35 AM, Brian W. Barrett wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Josh -
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Just in case it wasn't clear -- if you're only looking for a symbol in the 
</span><br>
<span class="quotelev2">&gt;&gt; executable (which you know is there), you do *NOT* have to dlopen() the 
</span><br>
<span class="quotelev2">&gt;&gt; executable first (you do with libtool to support the &quot;i don't have dynamic 
</span><br>
<span class="quotelev2">&gt;&gt; library support&quot; mode of operatoin).  You only have to dlsym() with 
</span><br>
<span class="quotelev2">&gt;&gt; RTLD_DEFAULT, as the symbol is already in the process space.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So is it wrong to dlopen() before dlsym()? The patch I just committed in 
</span><br>
<span class="quotelev1">&gt; r21766 does this, since I was following the man page for dlopen() to make 
</span><br>
<span class="quotelev1">&gt; sure I was using it correctly.
</span><br>
<p>I don't know that it's &quot;wrong&quot;, it's just not necessary.  I believe that:
<br>
<p>&nbsp;&nbsp;&nbsp;handle = dlopen(NULL, RTLD_LOCAL|RTLD_LAZY);
<br>
&nbsp;&nbsp;&nbsp;sym = dlsym(handle, &quot;foo&quot;);
<br>
&nbsp;&nbsp;&nbsp;dlclose(handle)l
<br>
<p>and
<br>
<p>&nbsp;&nbsp;&nbsp;sym = dlsym(RTLD_DEFAULT, &quot;foo&quot;);
<br>
<p>are functionally equivalent, but the second one means no handle to pass 
<br>
around :).
<br>
<p>Brian
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6596.php">Rolf Vandevaart: "[OMPI devel] Mistake with commit 21767"</a>
<li><strong>Previous message:</strong> <a href="6594.php">Josh Hursey: "Re: [OMPI devel] libtool issue with crs/self"</a>
<li><strong>In reply to:</strong> <a href="6594.php">Josh Hursey: "Re: [OMPI devel] libtool issue with crs/self"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6593.php">Josh Hursey: "Re: [OMPI devel] libtool issue with crs/self"</a>
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

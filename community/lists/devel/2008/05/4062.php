<?
$subject_val = "Re: [OMPI devel] Notes from mem hooks call today";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May 28 20:25:33 2008" -->
<!-- isoreceived="20080529002533" -->
<!-- sent="Wed, 28 May 2008 18:25:26 -0600" -->
<!-- isosent="20080529002526" -->
<!-- name="Brian Barrett" -->
<!-- email="brbarret_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Notes from mem hooks call today" -->
<!-- id="042DAE59-7ACC-4B67-AE18-86D0BDEDF25B_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="adaiqwyowjt.fsf_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Notes from mem hooks call today<br>
<strong>From:</strong> Brian Barrett (<em>brbarret_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-05-28 20:25:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4063.php">Patrick Geoffray: "Re: [OMPI devel] Notes from mem hooks call today"</a>
<li><strong>Previous message:</strong> <a href="4061.php">Roland Dreier: "Re: [OMPI devel] Notes from mem hooks call today"</a>
<li><strong>In reply to:</strong> <a href="4061.php">Roland Dreier: "Re: [OMPI devel] Notes from mem hooks call today"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4063.php">Patrick Geoffray: "Re: [OMPI devel] Notes from mem hooks call today"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On May 28, 2008, at 5:09 PM, Roland Dreier wrote:
<br>
<p><span class="quotelev2">&gt;&gt; I think Patrick's point is that it's not too much more expensive to  
</span><br>
<span class="quotelev2">&gt;&gt; do the
</span><br>
<span class="quotelev2">&gt;&gt; syscall on Linux vs just doing the cache lookup, particularly in the
</span><br>
<span class="quotelev2">&gt;&gt; context of a long message.  And it means that upper layer protocols  
</span><br>
<span class="quotelev2">&gt;&gt; like
</span><br>
<span class="quotelev2">&gt;&gt; MPI don't have to deal with caches (and since MPI implementors hate
</span><br>
<span class="quotelev2">&gt;&gt; registration caches only slightly less than we hate MPI_CANCEL,  
</span><br>
<span class="quotelev2">&gt;&gt; that will
</span><br>
<span class="quotelev2">&gt;&gt; make us happy).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Stick in a separate library then?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I don't think we want the complexity in the kernel -- I personally  
</span><br>
<span class="quotelev1">&gt; would
</span><br>
<span class="quotelev1">&gt; argue against merging it upstream; and given that the userspace  
</span><br>
<span class="quotelev1">&gt; solution
</span><br>
<span class="quotelev1">&gt; is actually faster, it becomes pretty hard to justify.
</span><br>
<p>If someone would like to pull registration cache into OFED, that would  
<br>
be great.  But something tells me they won't want to.  It's a pain, it  
<br>
screws up users, and it only works about 50% of the time.
<br>
<p>It's a support issue -- pushing it in a separate library doesn't help  
<br>
anyone unless someone's willing to handle the support.  I sure as heck  
<br>
don't want to do the support anymore, particularly since OFED is the  
<br>
*ONLY* major software stack that requires such evil hacks.  MX handles  
<br>
it at the lower layer.  Portals is specified such that the hardware  
<br>
and/or Portals library must handle it (by specifying semantics that  
<br>
require registration per message).  Quadrics (with tports) handles it  
<br>
in a combination of the kernel and library.  TCP doesn't require  
<br>
pinning and/or registration.
<br>
<p>Brian
<br>
<p><pre>
-- 
   Brian Barrett
   Open MPI developer
   <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4063.php">Patrick Geoffray: "Re: [OMPI devel] Notes from mem hooks call today"</a>
<li><strong>Previous message:</strong> <a href="4061.php">Roland Dreier: "Re: [OMPI devel] Notes from mem hooks call today"</a>
<li><strong>In reply to:</strong> <a href="4061.php">Roland Dreier: "Re: [OMPI devel] Notes from mem hooks call today"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4063.php">Patrick Geoffray: "Re: [OMPI devel] Notes from mem hooks call today"</a>
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

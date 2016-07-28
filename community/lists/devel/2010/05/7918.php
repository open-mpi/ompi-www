<?
$subject_val = "Re: [OMPI devel] Open-MPI on TIPC";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May 12 13:50:24 2010" -->
<!-- isoreceived="20100512175024" -->
<!-- sent="Wed, 12 May 2010 13:50:15 -0400" -->
<!-- isosent="20100512175015" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Open-MPI on TIPC" -->
<!-- id="E241F928-1CD7-47EB-A353-4FFAAD44BA82_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="2A6B476C-C2F3-48B0-B60E-E4487F91D8F4_at_ludd.ltu.se" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Open-MPI on TIPC<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-05-12 13:50:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7919.php">Nils Carlson: "Re: [OMPI devel] Open-MPI on TIPC"</a>
<li><strong>Previous message:</strong> <a href="7917.php">David Gunter: "Re: [OMPI devel] Open-MPI on TIPC"</a>
<li><strong>In reply to:</strong> <a href="7916.php">Nils Carlson: "Re: [OMPI devel] Open-MPI on TIPC"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7919.php">Nils Carlson: "Re: [OMPI devel] Open-MPI on TIPC"</a>
<li><strong>Reply:</strong> <a href="7919.php">Nils Carlson: "Re: [OMPI devel] Open-MPI on TIPC"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On May 12, 2010, at 1:21 PM, Nils Carlson wrote:
<br>
<p><span class="quotelev1">&gt; Probably not me personally, my employer is considering financing a 
</span><br>
<span class="quotelev1">&gt; masters thesis with the aim of doing an implementation.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Is there a guide for adding support? I took a quick look at the tcp 
</span><br>
<span class="quotelev1">&gt; code, and it wasn't all that straightforward,
</span><br>
<span class="quotelev1">&gt; though I suppose a lot of the code is aimed at maximising performance.
</span><br>
<p>There has been a paper or two written about this kind of stuff (like what David mentioned; and I have a dim recollection of someone else writing their about their experiences of adding a BTL).  But nothing in the way of formal documentation, sorry.  :-\
<br>
<p>I'd be happy to chat on the phone about it.
<br>
<p><span class="quotelev1">&gt; How long do you think a basic implementation would take?
</span><br>
<p>I don't know much about the TIPC API to say.  Have a look at ompi/mca/btl/btl.h -- that's the set of interfaces that need to be implemented.  They're mostly focused on connecting, disconnecting, and sending/receiving data.
<br>
<p>We do have a subsystem for monitoring fds for read and write events, so if TIPC is based on fd's, it could probably use our internal libevent to monitor for progress, etc.
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7919.php">Nils Carlson: "Re: [OMPI devel] Open-MPI on TIPC"</a>
<li><strong>Previous message:</strong> <a href="7917.php">David Gunter: "Re: [OMPI devel] Open-MPI on TIPC"</a>
<li><strong>In reply to:</strong> <a href="7916.php">Nils Carlson: "Re: [OMPI devel] Open-MPI on TIPC"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7919.php">Nils Carlson: "Re: [OMPI devel] Open-MPI on TIPC"</a>
<li><strong>Reply:</strong> <a href="7919.php">Nils Carlson: "Re: [OMPI devel] Open-MPI on TIPC"</a>
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

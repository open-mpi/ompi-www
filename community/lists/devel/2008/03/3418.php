<?
$subject_val = "Re: [OMPI devel] OMPI OpenIB Credit Schema breaks Chelsio HW";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Mar 10 11:05:43 2008" -->
<!-- isoreceived="20080310150543" -->
<!-- sent="Mon, 10 Mar 2008 10:05:35 -0500" -->
<!-- isosent="20080310150535" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] OMPI OpenIB Credit Schema breaks Chelsio HW" -->
<!-- id="F56103ED-F97A-48FC-AC39-BB7451C847E6_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="47D54C73.60708_at_opengridcomputing.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] OMPI OpenIB Credit Schema breaks Chelsio HW<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-03-10 11:05:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3419.php">Leonardo Fialho: "[OMPI devel] orte\mca\smr"</a>
<li><strong>Previous message:</strong> <a href="3417.php">Jeff Squyres: "Re: [OMPI devel] OMPI OpenIB Credit Schema breaks Chelsio HW"</a>
<li><strong>In reply to:</strong> <a href="3416.php">Steve Wise: "Re: [OMPI devel] OMPI OpenIB Credit Schema breaks Chelsio HW"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3425.php">Steve Wise: "Re: [OMPI devel] OMPI OpenIB Credit Schema breaks Chelsio HW"</a>
<li><strong>Reply:</strong> <a href="3425.php">Steve Wise: "Re: [OMPI devel] OMPI OpenIB Credit Schema breaks Chelsio HW"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mar 10, 2008, at 9:57 AM, Steve Wise wrote:
<br>
<p><span class="quotelev1">&gt; A single PP QP might be fine for now, and chelsio's next-gen part will
</span><br>
<span class="quotelev1">&gt; support SRQs and not have this funky issue.
</span><br>
<p>Good!
<br>
<p><span class="quotelev1">&gt; But why use such a large buffer size for a single PP QP?  Why not use
</span><br>
<span class="quotelev1">&gt; something around 16KB?
</span><br>
<p><p>You can do that, but you'll also need to make the max_send_size be  
<br>
16kb (and therefore ob1 will switch to rendezvous protocol above that  
<br>
size).  See our paper on the long message protocol that OMPI uses --  
<br>
the minimum &quot;large&quot; message size was specifically designed to be kinda  
<br>
big so that we could do some send/recv to offset the registration  
<br>
penalty of pinning user's large buffers.
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
<li><strong>Next message:</strong> <a href="3419.php">Leonardo Fialho: "[OMPI devel] orte\mca\smr"</a>
<li><strong>Previous message:</strong> <a href="3417.php">Jeff Squyres: "Re: [OMPI devel] OMPI OpenIB Credit Schema breaks Chelsio HW"</a>
<li><strong>In reply to:</strong> <a href="3416.php">Steve Wise: "Re: [OMPI devel] OMPI OpenIB Credit Schema breaks Chelsio HW"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3425.php">Steve Wise: "Re: [OMPI devel] OMPI OpenIB Credit Schema breaks Chelsio HW"</a>
<li><strong>Reply:</strong> <a href="3425.php">Steve Wise: "Re: [OMPI devel] OMPI OpenIB Credit Schema breaks Chelsio HW"</a>
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

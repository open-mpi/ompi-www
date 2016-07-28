<?
$subject_val = "Re: [OMPI devel] Inherent limit on #communicators?";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Apr 30 15:20:28 2009" -->
<!-- isoreceived="20090430192028" -->
<!-- sent="Thu, 30 Apr 2009 15:20:24 -0400 (EDT)" -->
<!-- isosent="20090430192024" -->
<!-- name="Brian W. Barrett" -->
<!-- email="brbarret_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Inherent limit on #communicators?" -->
<!-- id="alpine.DEB.1.10.0904301519170.6970_at_marvin.we-be-smart.org" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="71d2d8cc0904301211g1beeddch624dcffcbae4e5e9_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Inherent limit on #communicators?<br>
<strong>From:</strong> Brian W. Barrett (<em>brbarret_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-04-30 15:20:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5933.php">Jeff Squyres: "Re: [OMPI devel] Fwd: [ROMIO Req #947] New version of ROMIO?"</a>
<li><strong>Previous message:</strong> <a href="5931.php">Ralph Castain: "Re: [OMPI devel] Inherent limit on #communicators?"</a>
<li><strong>In reply to:</strong> <a href="5930.php">Ralph Castain: "Re: [OMPI devel] Inherent limit on #communicators?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5924.php">David Gunter: "Re: [OMPI devel] Inherent limit on #communicators?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Thu, 30 Apr 2009, Ralph Castain wrote:
<br>
<span class="quotelev1">&gt; well, that's only because the code's doing something it shouldn't.
</span><br>
<span class="quotelev1">&gt; &#160;Have a look at comm_cid.c:185 - there's the check we added to the
</span><br>
<span class="quotelev1">&gt; multi-threaded case (which was the only case when we added it).
</span><br>
<span class="quotelev1">&gt; &#160;The cid generation should never generate a number larger than
</span><br>
<span class="quotelev1">&gt; mca_pml.pml_max_contextid. I'm actually somewhat amazed this fails
</span><br>
<span class="quotelev1">&gt; gracefully, as OB1 doesn't appear to check it got a valid cid in
</span><br>
<span class="quotelev1">&gt; add_comm, which it should probably do.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Actually, as an FYI: it doesn't fail gracefully. It just hangs...ick.
</span><br>
<p>Ah.  Patch to change the hang into an abort coming RSN.
<br>
<p>Brian
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5933.php">Jeff Squyres: "Re: [OMPI devel] Fwd: [ROMIO Req #947] New version of ROMIO?"</a>
<li><strong>Previous message:</strong> <a href="5931.php">Ralph Castain: "Re: [OMPI devel] Inherent limit on #communicators?"</a>
<li><strong>In reply to:</strong> <a href="5930.php">Ralph Castain: "Re: [OMPI devel] Inherent limit on #communicators?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5924.php">David Gunter: "Re: [OMPI devel] Inherent limit on #communicators?"</a>
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

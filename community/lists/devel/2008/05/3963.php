<?
$subject_val = "Re: [OMPI devel] RFC: Linuxes shipping libibverbs";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May 21 12:17:14 2008" -->
<!-- isoreceived="20080521161714" -->
<!-- sent="Wed, 21 May 2008 12:17:06 -0400 (EDT)" -->
<!-- isosent="20080521161706" -->
<!-- name="Brian W. Barrett" -->
<!-- email="brbarret_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: Linuxes shipping libibverbs" -->
<!-- id="Pine.LNX.4.64.0805211209130.10912_at_marvin.we-be-smart.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="7ECC85C1-428B-4A72-BC30-D7FBE8D12515_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RFC: Linuxes shipping libibverbs<br>
<strong>From:</strong> Brian W. Barrett (<em>brbarret_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-05-21 12:17:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3964.php">Terry Dontje: "Re: [OMPI devel] RFC: Linuxes shipping libibverbs"</a>
<li><strong>Previous message:</strong> <a href="3962.php">Jeff Squyres: "Re: [OMPI devel] RFC: Linuxes shipping libibverbs"</a>
<li><strong>In reply to:</strong> <a href="3962.php">Jeff Squyres: "Re: [OMPI devel] RFC: Linuxes shipping libibverbs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3967.php">Jeff Squyres: "Re: [OMPI devel] RFC: Linuxes shipping libibverbs"</a>
<li><strong>Reply:</strong> <a href="3967.php">Jeff Squyres: "Re: [OMPI devel] RFC: Linuxes shipping libibverbs"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Wed, 21 May 2008, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; 2. An out-of-the-box &quot;mpirun a.out&quot; will print warning messages in
</span><br>
<span class="quotelev1">&gt; perfectly valid/good configurations (no verbs-capable hardware, but
</span><br>
<span class="quotelev1">&gt; just happen to have libibverbs installed).  This is a Big Deal.
</span><br>
<p>Which is easily solved with a better error message, as Pasha suggested.
<br>
<p><span class="quotelev1">&gt; 3. Problems with HCA hardware and/or verbs stack are uncommon
</span><br>
<span class="quotelev1">&gt; (nowadays).  I'd be ok asking someone to enable a debug flag to get
</span><br>
<span class="quotelev1">&gt; more information on configuration problems or hardware faults.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Shouldn't we be optimizing for the common case?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In short: I think it's no longer safe to assume that machines with
</span><br>
<span class="quotelev1">&gt; libibverbs installed must also have verbs-capable hardware.
</span><br>
<p>But here's the real problem -- with our current selection logic, a user 
<br>
with libibverbs but no IB cards gets an error message saying &quot;hey, we need 
<br>
you to set this flag to make this error go away&quot; (or would, per Pasha's 
<br>
suggestion).  A user with a busted IB stack on a node (which we still saw 
<br>
pretty often at LANL) starts using TCP and their application runs like a 
<br>
dog.
<br>
<p>I guess it's a matter of how often you see errors in the IB stack that 
<br>
cause nic initialization to fail.  The machines I tend to use still 
<br>
exhibit this problem pretty often, but it's possible I just work on bad 
<br>
hardware more often than is usual in the wild.
<br>
<p>It would be great if libibverbs could return two different error messages 
<br>
- one for &quot;there's no IB card in this machine&quot; and one for &quot;there's an IB 
<br>
card here, but we can't initialize it&quot;.  I think that would make this 
<br>
argument go away.  Open MPI could probably mimic that behavior by parsing 
<br>
the PCI tables, but that sounds ... painful.
<br>
<p>I guess the root of my concern is that unexpected behavior with no 
<br>
explanation is (in my mind) the most dangerous case and the one we should 
<br>
address by default.  And turning this error message off is going to cause 
<br>
unexpected behavior without explanation.
<br>
<p>Just my $0.02.
<br>
<p><p>Brian
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3964.php">Terry Dontje: "Re: [OMPI devel] RFC: Linuxes shipping libibverbs"</a>
<li><strong>Previous message:</strong> <a href="3962.php">Jeff Squyres: "Re: [OMPI devel] RFC: Linuxes shipping libibverbs"</a>
<li><strong>In reply to:</strong> <a href="3962.php">Jeff Squyres: "Re: [OMPI devel] RFC: Linuxes shipping libibverbs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3967.php">Jeff Squyres: "Re: [OMPI devel] RFC: Linuxes shipping libibverbs"</a>
<li><strong>Reply:</strong> <a href="3967.php">Jeff Squyres: "Re: [OMPI devel] RFC: Linuxes shipping libibverbs"</a>
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

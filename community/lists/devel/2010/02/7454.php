<?
$subject_val = "Re: [OMPI devel] RFC: ABI break between 1.4 and 1.5 / .so versioning";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb 18 01:53:49 2010" -->
<!-- isoreceived="20100218065349" -->
<!-- sent="Thu, 18 Feb 2010 07:53:43 +0100" -->
<!-- isosent="20100218065343" -->
<!-- name="Ralf Wildenhues" -->
<!-- email="Ralf.Wildenhues_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: ABI break between 1.4 and 1.5 / .so versioning" -->
<!-- id="20100218065343.GA10922_at_gmx.de" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="80F00569-5587-4137-9973-CFF81574AE03_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RFC: ABI break between 1.4 and 1.5 / .so versioning<br>
<strong>From:</strong> Ralf Wildenhues (<em>Ralf.Wildenhues_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-02-18 01:53:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7455.php">Nadia Derbey: "Re: [OMPI devel] PATCH: remove trailing colon at the end of	thegenerated	LD_LIBRARY_PATH"</a>
<li><strong>Previous message:</strong> <a href="7453.php">Christian Csar: "[OMPI devel] Limitations on pending nonblocking operations"</a>
<li><strong>In reply to:</strong> <a href="7452.php">Jeff Squyres: "Re: [OMPI devel] RFC: ABI break between 1.4 and 1.5 / .so versioning"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7456.php">Jeff Squyres: "Re: [OMPI devel] RFC: ABI break between 1.4 and 1.5 / .so versioning"</a>
<li><strong>Reply:</strong> <a href="7456.php">Jeff Squyres: "Re: [OMPI devel] RFC: ABI break between 1.4 and 1.5 / .so versioning"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
* Jeff Squyres wrote on Wed, Feb 17, 2010 at 11:51:42PM CET:
<br>
<span class="quotelev1">&gt; On Feb 17, 2010, at 3:05 PM, Ralf Wildenhues wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; The issue is that if the user has to specify -static to their linker,
</span><br>
<span class="quotelev3">&gt; &gt; &gt; they *also* have to specify --ompi:static, or Bad Things will happen.
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Or, if they don't specify -static but *only* specify --ompi:static,
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Bad Things will happen.  In short: it seems like adding yet another
</span><br>
<span class="quotelev3">&gt; &gt; &gt; wrapper-compiler-specific flag to the MPI ecosystem will cause
</span><br>
<span class="quotelev3">&gt; &gt; &gt; confusion, fear, and possibly the death of some cats.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Do you care for omitting -lopen-pal and -lorte only for capable Linux
</span><br>
<span class="quotelev2">&gt; &gt; systems?  With new-enough binutils, you should be able to use
</span><br>
<span class="quotelev2">&gt; &gt; -Wl,--as-needed -Wl,--no-as-needed around these two libs.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Mmmm.  Good point.  But I don't think it helps us on Solaris or OS X, does it?  (maybe it does on OS X?)  Or do all linkers have some kind of option like this?  (this *might* be a way out, but I would probably need to be convinced :-) )
</span><br>
<p>No, I think only binutils ld (and gold) have this.  Sorry.
<br>
<p><span class="quotelev2">&gt; &gt; I'm not entirely sure I understand your argumentation for why libmpi
</span><br>
<span class="quotelev2">&gt; &gt; from 1.5.x has to be binary incompatible, but I haven't fully thought
</span><br>
<span class="quotelev2">&gt; &gt; through this yet.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The context for this issue is so long that much was left out of my mail.  Here's this particular issue in a nutshell:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; - Open MPI v1.4.1 has libmpi at 0:1:0 and libopen-rte and libopen-pal both at 0:0:0.
</span><br>
<span class="quotelev1">&gt; - Open MPI v1.4.1 links MPI apps against -lmpi -lopen-rte -lopen-pal.
</span><br>
<span class="quotelev1">&gt; - If we start .so versioning properly in v1.5, it's likely that libopen-rte and libopen-pal will both be 1:0:0.
</span><br>
<span class="quotelev1">&gt;   --&gt; Note that these are both internal libraries; there are no symbols in these libraries that are used in the MPI applications.
</span><br>
<span class="quotelev1">&gt; - Open MPI v1.5 libmpi *could* be 1:0:1.
</span><br>
<span class="quotelev1">&gt; - Hence, an a.out created for OMPI v1.4.1 would work fine with v1.5 libmpi.
</span><br>
<span class="quotelev1">&gt; - But that a.out would not work with v1.5 libopen-rte and libopen-pal.
</span><br>
<p>You could probably create fake empty libopen-rte and libopen-pal stub
<br>
libraries with 0:0:0 purely for the sake of allowing such an a.out to
<br>
still work (on systems with versioned sonames[1]).  Since this doesn't
<br>
actually use any of the APIs from those libraries, there is no problem
<br>
here, and your 1.5 libmpi will pull in the 1:0:0 versions of the other
<br>
two libraries.
<br>
<p>I understand if you decide not to go such ways, and in that case, I
<br>
agree that bumping libmpi to 1:0:0 won't cause much extra pain.
<br>
<p>Cheers,
<br>
Ralf
<br>
<p>[1] This includes many but probably not all systems with shared
<br>
libraries.  E.g., I think AIX without runtimelinking (-Wl,-brtl)
<br>
would have a problem.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7455.php">Nadia Derbey: "Re: [OMPI devel] PATCH: remove trailing colon at the end of	thegenerated	LD_LIBRARY_PATH"</a>
<li><strong>Previous message:</strong> <a href="7453.php">Christian Csar: "[OMPI devel] Limitations on pending nonblocking operations"</a>
<li><strong>In reply to:</strong> <a href="7452.php">Jeff Squyres: "Re: [OMPI devel] RFC: ABI break between 1.4 and 1.5 / .so versioning"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7456.php">Jeff Squyres: "Re: [OMPI devel] RFC: ABI break between 1.4 and 1.5 / .so versioning"</a>
<li><strong>Reply:</strong> <a href="7456.php">Jeff Squyres: "Re: [OMPI devel] RFC: ABI break between 1.4 and 1.5 / .so versioning"</a>
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

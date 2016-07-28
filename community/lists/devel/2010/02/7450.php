<?
$subject_val = "Re: [OMPI devel] RFC: ABI break between 1.4 and 1.5 / .so versioning";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb 17 15:05:50 2010" -->
<!-- isoreceived="20100217200550" -->
<!-- sent="Wed, 17 Feb 2010 21:05:42 +0100" -->
<!-- isosent="20100217200542" -->
<!-- name="Ralf Wildenhues" -->
<!-- email="Ralf.Wildenhues_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: ABI break between 1.4 and 1.5 / .so versioning" -->
<!-- id="20100217200542.GE9993_at_gmx.de" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="24086B94-A5CB-42CE-92DF-82CA2826A430_at_cisco.com" -->
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
<strong>Date:</strong> 2010-02-17 15:05:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7451.php">Jeff Squyres: "Re: [OMPI devel] PATCH: remove trailing colon at the end of thegenerated	LD_LIBRARY_PATH"</a>
<li><strong>Previous message:</strong> <a href="7449.php">Jeff Squyres: "Re: [OMPI devel] RFC: ABI break between 1.4 and 1.5 / .so versioning"</a>
<li><strong>In reply to:</strong> <a href="7449.php">Jeff Squyres: "Re: [OMPI devel] RFC: ABI break between 1.4 and 1.5 / .so versioning"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7452.php">Jeff Squyres: "Re: [OMPI devel] RFC: ABI break between 1.4 and 1.5 / .so versioning"</a>
<li><strong>Reply:</strong> <a href="7452.php">Jeff Squyres: "Re: [OMPI devel] RFC: ABI break between 1.4 and 1.5 / .so versioning"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello Jeff,
<br>
<p>* Jeff Squyres wrote on Wed, Feb 17, 2010 at 08:19:25PM CET:
<br>
<span class="quotelev1">&gt; The issue is that if the user has to specify -static to their linker,
</span><br>
<span class="quotelev1">&gt; they *also* have to specify --ompi:static, or Bad Things will happen.
</span><br>
<span class="quotelev1">&gt; Or, if they don't specify -static but *only* specify --ompi:static,
</span><br>
<span class="quotelev1">&gt; Bad Things will happen.  In short: it seems like adding yet another
</span><br>
<span class="quotelev1">&gt; wrapper-compiler-specific flag to the MPI ecosystem will cause
</span><br>
<span class="quotelev1">&gt; confusion, fear, and possibly the death of some cats.
</span><br>
<p>Do you care for omitting -lopen-pal and -lorte only for capable Linux
<br>
systems?  With new-enough binutils, you should be able to use
<br>
-Wl,--as-needed -Wl,--no-as-needed around these two libs.
<br>
<p>I'm not entirely sure I understand your argumentation for why libmpi
<br>
from 1.5.x has to be binary incompatible, but I haven't fully thought
<br>
through this yet.
<br>
<p>Cheers,
<br>
Ralf
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7451.php">Jeff Squyres: "Re: [OMPI devel] PATCH: remove trailing colon at the end of thegenerated	LD_LIBRARY_PATH"</a>
<li><strong>Previous message:</strong> <a href="7449.php">Jeff Squyres: "Re: [OMPI devel] RFC: ABI break between 1.4 and 1.5 / .so versioning"</a>
<li><strong>In reply to:</strong> <a href="7449.php">Jeff Squyres: "Re: [OMPI devel] RFC: ABI break between 1.4 and 1.5 / .so versioning"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7452.php">Jeff Squyres: "Re: [OMPI devel] RFC: ABI break between 1.4 and 1.5 / .so versioning"</a>
<li><strong>Reply:</strong> <a href="7452.php">Jeff Squyres: "Re: [OMPI devel] RFC: ABI break between 1.4 and 1.5 / .so versioning"</a>
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

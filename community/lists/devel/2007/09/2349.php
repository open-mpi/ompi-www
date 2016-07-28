<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Sep 21 10:08:00 2007" -->
<!-- isoreceived="20070921140800" -->
<!-- sent="Fri, 21 Sep 2007 10:07:46 -0400" -->
<!-- isosent="20070921140746" -->
<!-- name="Tim Prins" -->
<!-- email="tprins_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Malloc segfaulting?" -->
<!-- id="200709211007.46877.tprins_at_cs.indiana.edu" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="38B2C298-76DD-42D3-95ED-1419F6AEEF1A_at_open-mpi.org" -->
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
<strong>From:</strong> Tim Prins (<em>tprins_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-09-21 10:07:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2350.php">George Bosilca: "Re: [OMPI devel] Malloc segfaulting?"</a>
<li><strong>Previous message:</strong> <a href="2348.php">Jeff Squyres: "[OMPI devel] VT integration"</a>
<li><strong>In reply to:</strong> <a href="2347.php">Brian Barrett: "Re: [OMPI devel] Malloc segfaulting?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2350.php">George Bosilca: "Re: [OMPI devel] Malloc segfaulting?"</a>
<li><strong>Reply:</strong> <a href="2350.php">George Bosilca: "Re: [OMPI devel] Malloc segfaulting?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Aurelien and Brian.
<br>
<p>Thanks for the suggestions. I reran the runs with --without-memory-manager and 
<br>
got (on 2 of 5000 runs):
<br>
*** glibc detected *** corrupted double-linked list: 0xf704dff8 ***
<br>
on one and
<br>
*** glibc detected *** malloc(): memory corruption: 0xeda00c70 ***
<br>
on the other.
<br>
<p>So it looks like somewhere we are over-running our allocated space. So now I 
<br>
am attempting to redo the run with valgrind.
<br>
<p>Tim
<br>
<p>On Thursday 20 September 2007 09:59:14 pm Brian Barrett wrote:
<br>
<span class="quotelev1">&gt; On Sep 20, 2007, at 7:02 AM, Tim Prins wrote:
</span><br>
<span class="quotelev2">&gt; &gt; In our nightly runs with the trunk I have started seeing cases
</span><br>
<span class="quotelev2">&gt; &gt; where we
</span><br>
<span class="quotelev2">&gt; &gt; appear to be segfaulting within/below malloc. Below is a typical
</span><br>
<span class="quotelev2">&gt; &gt; output.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Note that this appears to only happen on the trunk, when we use
</span><br>
<span class="quotelev2">&gt; &gt; openib,
</span><br>
<span class="quotelev2">&gt; &gt; and are in 32 bit mode. It seems to happen randomly at a very low
</span><br>
<span class="quotelev2">&gt; &gt; frequency (59 out of about 60,000 32 bit openib runs).
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; This could be a problem with our machine, and has showed up since I
</span><br>
<span class="quotelev2">&gt; &gt; started testing 32bit ofed 10 days ago.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Anyways, just curious if anyone had any ideas.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; As someone else said, this usually points to a duplicate free or the
</span><br>
<span class="quotelev1">&gt; like in malloc.  You might want to try compiling with --without-
</span><br>
<span class="quotelev1">&gt; memory-manager, as the ptmalloc2 in glibc frequently is more verbose
</span><br>
<span class="quotelev1">&gt; about where errors occurred than is the one in Open MPI.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Brian
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2350.php">George Bosilca: "Re: [OMPI devel] Malloc segfaulting?"</a>
<li><strong>Previous message:</strong> <a href="2348.php">Jeff Squyres: "[OMPI devel] VT integration"</a>
<li><strong>In reply to:</strong> <a href="2347.php">Brian Barrett: "Re: [OMPI devel] Malloc segfaulting?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2350.php">George Bosilca: "Re: [OMPI devel] Malloc segfaulting?"</a>
<li><strong>Reply:</strong> <a href="2350.php">George Bosilca: "Re: [OMPI devel] Malloc segfaulting?"</a>
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

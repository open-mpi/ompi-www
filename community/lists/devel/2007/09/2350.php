<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Sep 21 10:40:36 2007" -->
<!-- isoreceived="20070921144036" -->
<!-- sent="Fri, 21 Sep 2007 10:40:21 -0400" -->
<!-- isosent="20070921144021" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Malloc segfaulting?" -->
<!-- id="F511EFB5-F505-456F-9BE9-836965D7212E_at_eecs.utk.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="200709211007.46877.tprins_at_cs.indiana.edu" -->
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
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-09-21 10:40:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2351.php">George Bosilca: "Re: [OMPI devel] UD BTL alltoall hangs"</a>
<li><strong>Previous message:</strong> <a href="2349.php">Tim Prins: "Re: [OMPI devel] Malloc segfaulting?"</a>
<li><strong>In reply to:</strong> <a href="2349.php">Tim Prins: "Re: [OMPI devel] Malloc segfaulting?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2358.php">Tim Prins: "Re: [OMPI devel] Malloc segfaulting?"</a>
<li><strong>Reply:</strong> <a href="2358.php">Tim Prins: "Re: [OMPI devel] Malloc segfaulting?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Tim,
<br>
<p>Valgrind will not help ... It can help with double free or things  
<br>
like this, but not with over-running memory that belong to your  
<br>
application. However, in Open MPI we have something that might help  
<br>
you. The option --enable-mem-debug add a unused space at the end of  
<br>
each memory allocation and make sure we don't write anything there. I  
<br>
think this is the simplest way to pinpoint this problem.
<br>
<p>&nbsp;&nbsp;&nbsp;Thanks,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;george.
<br>
<p>On Sep 21, 2007, at 10:07 AM, Tim Prins wrote:
<br>
<p><span class="quotelev1">&gt; Aurelien and Brian.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks for the suggestions. I reran the runs with --without-memory- 
</span><br>
<span class="quotelev1">&gt; manager and
</span><br>
<span class="quotelev1">&gt; got (on 2 of 5000 runs):
</span><br>
<span class="quotelev1">&gt; *** glibc detected *** corrupted double-linked list: 0xf704dff8 ***
</span><br>
<span class="quotelev1">&gt; on one and
</span><br>
<span class="quotelev1">&gt; *** glibc detected *** malloc(): memory corruption: 0xeda00c70 ***
</span><br>
<span class="quotelev1">&gt; on the other.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So it looks like somewhere we are over-running our allocated space.  
</span><br>
<span class="quotelev1">&gt; So now I
</span><br>
<span class="quotelev1">&gt; am attempting to redo the run with valgrind.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Tim
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Thursday 20 September 2007 09:59:14 pm Brian Barrett wrote:
</span><br>
<span class="quotelev2">&gt;&gt; On Sep 20, 2007, at 7:02 AM, Tim Prins wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; In our nightly runs with the trunk I have started seeing cases
</span><br>
<span class="quotelev3">&gt;&gt;&gt; where we
</span><br>
<span class="quotelev3">&gt;&gt;&gt; appear to be segfaulting within/below malloc. Below is a typical
</span><br>
<span class="quotelev3">&gt;&gt;&gt; output.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Note that this appears to only happen on the trunk, when we use
</span><br>
<span class="quotelev3">&gt;&gt;&gt; openib,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; and are in 32 bit mode. It seems to happen randomly at a very low
</span><br>
<span class="quotelev3">&gt;&gt;&gt; frequency (59 out of about 60,000 32 bit openib runs).
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; This could be a problem with our machine, and has showed up since I
</span><br>
<span class="quotelev3">&gt;&gt;&gt; started testing 32bit ofed 10 days ago.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Anyways, just curious if anyone had any ideas.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; As someone else said, this usually points to a duplicate free or the
</span><br>
<span class="quotelev2">&gt;&gt; like in malloc.  You might want to try compiling with --without-
</span><br>
<span class="quotelev2">&gt;&gt; memory-manager, as the ptmalloc2 in glibc frequently is more verbose
</span><br>
<span class="quotelev2">&gt;&gt; about where errors occurred than is the one in Open MPI.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Brian
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p><p>
<br><hr>
<ul>
<li>application/pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-2350/smime.p7s">smime.p7s</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2351.php">George Bosilca: "Re: [OMPI devel] UD BTL alltoall hangs"</a>
<li><strong>Previous message:</strong> <a href="2349.php">Tim Prins: "Re: [OMPI devel] Malloc segfaulting?"</a>
<li><strong>In reply to:</strong> <a href="2349.php">Tim Prins: "Re: [OMPI devel] Malloc segfaulting?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2358.php">Tim Prins: "Re: [OMPI devel] Malloc segfaulting?"</a>
<li><strong>Reply:</strong> <a href="2358.php">Tim Prins: "Re: [OMPI devel] Malloc segfaulting?"</a>
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

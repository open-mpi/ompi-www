<?
$subject_val = "Re: [OMPI devel] MPI_Op_free crashes in MTT";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb 12 14:16:01 2009" -->
<!-- isoreceived="20090212191601" -->
<!-- sent="Thu, 12 Feb 2009 11:15:56 -0800" -->
<!-- isosent="20090212191556" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] MPI_Op_free crashes in MTT" -->
<!-- id="3A382913-5D64-4084-84BB-92C6452E1FE3_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="F3F132CE-B8C8-4172-9318-3EFD7CD2AC19_at_eecs.utk.edu" -->
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
<strong>Subject:</strong> Re: [OMPI devel] MPI_Op_free crashes in MTT<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-02-12 14:15:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5405.php">Ralph Castain: "Re: [OMPI devel] RFC: Eliminate	ompi/class/ompi_[circular_buffer_]fifo.h"</a>
<li><strong>Previous message:</strong> <a href="5403.php">Eugene Loh: "Re: [OMPI devel] RFC: Eliminate	ompi/class/ompi_[circular_buffer_]fifo.h"</a>
<li><strong>In reply to:</strong> <a href="5402.php">George Bosilca: "Re: [OMPI devel] MPI_Op_free crashes in MTT"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5406.php">Tim Mattox: "Re: [OMPI devel] MPI_Op_free crashes in MTT"</a>
<li><strong>Reply:</strong> <a href="5406.php">Tim Mattox: "Re: [OMPI devel] MPI_Op_free crashes in MTT"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Should be fixed in r20532.
<br>
<p>On Feb 12, 2009, at 9:27 AM, George Bosilca wrote:
<br>
<p><span class="quotelev1">&gt; I'm unable to replicate these errors with revision r20529. All tests  
</span><br>
<span class="quotelev1">&gt; pass on my Linux cluster, TCP based not Myrinet. Let's see if other  
</span><br>
<span class="quotelev1">&gt; contributors to the MTT tests trigger the same errors.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  george.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Feb 12, 2009, at 12:04 , Tim Mattox wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hello,
</span><br>
<span class="quotelev2">&gt;&gt; Last night's MTT runs show a fairly consistent segfault on the
</span><br>
<span class="quotelev2">&gt;&gt; trunk (1.4a1r20525) in the MPI_Op_free routine, and shows up
</span><br>
<span class="quotelev2">&gt;&gt; in various tests (including the IBM test suite's collective/op test):
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mtt/index.php?do_redir=953">http://www.open-mpi.org/mtt/index.php?do_redir=953</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I've not investigated in detail, so it could be a coincidence...
</span><br>
<span class="quotelev2">&gt;&gt; but it sure seems like it was caused by either/both of
</span><br>
<span class="quotelev2">&gt;&gt; these changes to the &quot;op&quot; stuff yesterday: r20521 and/or r20522
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; Tim Mattox, Ph.D. - <a href="http://homepage.mac.com/tmattox/">http://homepage.mac.com/tmattox/</a>
</span><br>
<span class="quotelev2">&gt;&gt; tmattox_at_[hidden] || timattox_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;   I'm a bright... <a href="http://www.the-brights.net/">http://www.the-brights.net/</a>
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
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5405.php">Ralph Castain: "Re: [OMPI devel] RFC: Eliminate	ompi/class/ompi_[circular_buffer_]fifo.h"</a>
<li><strong>Previous message:</strong> <a href="5403.php">Eugene Loh: "Re: [OMPI devel] RFC: Eliminate	ompi/class/ompi_[circular_buffer_]fifo.h"</a>
<li><strong>In reply to:</strong> <a href="5402.php">George Bosilca: "Re: [OMPI devel] MPI_Op_free crashes in MTT"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5406.php">Tim Mattox: "Re: [OMPI devel] MPI_Op_free crashes in MTT"</a>
<li><strong>Reply:</strong> <a href="5406.php">Tim Mattox: "Re: [OMPI devel] MPI_Op_free crashes in MTT"</a>
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

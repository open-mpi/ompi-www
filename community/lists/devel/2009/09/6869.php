<?
$subject_val = "Re: [OMPI devel] Ticket #1982 - Fortran MPI_IN_PLACE issue";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Sep 22 10:24:18 2009" -->
<!-- isoreceived="20090922142418" -->
<!-- sent="Tue, 22 Sep 2009 10:24:13 -0400" -->
<!-- isosent="20090922142413" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Ticket #1982 - Fortran MPI_IN_PLACE issue" -->
<!-- id="7E305400-76AD-442B-BFDC-13E4577F882E_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="B5C331E5-945F-4DC4-9393-4B905BFFCC9D_at_lanl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Ticket #1982 - Fortran MPI_IN_PLACE issue<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-09-22 10:24:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6870.php">David Gunter: "Re: [OMPI devel] Ticket #1982 - Fortran MPI_IN_PLACE issue"</a>
<li><strong>Previous message:</strong> <a href="6868.php">David Gunter: "Re: [OMPI devel] Ticket #1982 - Fortran MPI_IN_PLACE issue"</a>
<li><strong>In reply to:</strong> <a href="6867.php">David Gunter: "[OMPI devel] Ticket #1982 - Fortran MPI_IN_PLACE issue"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6870.php">David Gunter: "Re: [OMPI devel] Ticket #1982 - Fortran MPI_IN_PLACE issue"</a>
<li><strong>Reply:</strong> <a href="6870.php">David Gunter: "Re: [OMPI devel] Ticket #1982 - Fortran MPI_IN_PLACE issue"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks!  I added these comments to #1982 (don't hesitate to add  
<br>
comments yourself :-) ).
<br>
<p><p>On Sep 22, 2009, at 10:05 AM, David Gunter wrote:
<br>
<p><span class="quotelev1">&gt; I've been playing around with Jeff's &quot;bogus&quot; tarball and I, too, see  
</span><br>
<span class="quotelev1">&gt; it fail on OS X.  If I make the following changes it works perfectly:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; in configure.in
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1) replace -fno-common with -fcommon
</span><br>
<span class="quotelev1">&gt; 2) add -flat_namespace as part of the arguments for creating shared  
</span><br>
<span class="quotelev1">&gt; libs.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; After that, things work fine:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; (dog_at_domdechant 63%) main
</span><br>
<span class="quotelev1">&gt; Fortran MPI_BOTTOM is          93
</span><br>
<span class="quotelev1">&gt; Assigning C variables
</span><br>
<span class="quotelev1">&gt; MPI_SEND_F: This is BOTTOM: 0x2040 == (0x6020/17, 0x6024/18,  
</span><br>
<span class="quotelev1">&gt; 0x2040/19, 0x602c/20)
</span><br>
<span class="quotelev1">&gt; Fortran MPI_BOTTOM is          19
</span><br>
<span class="quotelev1">&gt; Fortran MPI_BOTTOM is          32
</span><br>
<span class="quotelev1">&gt; MPI_SEND_F: This is BOTTOM: 0x2040 == (0x6020/17, 0x6024/18,  
</span><br>
<span class="quotelev1">&gt; 0x2040/32, 0x602c/20)
</span><br>
<span class="quotelev1">&gt; Fortran MPI_BOTTOM is          32
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I still don't see what the problem is for the two different versions  
</span><br>
<span class="quotelev1">&gt; of OMPI are.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; OSX 10.5.8, GCC 4.4.1, most recent libtool, autoconf, automake and m4.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -david
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; David Gunter
</span><br>
<span class="quotelev1">&gt; HPC-3: Parallel Tools Team
</span><br>
<span class="quotelev1">&gt; Los Alamos National Laboratory
</span><br>
<span class="quotelev1">&gt;
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
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6870.php">David Gunter: "Re: [OMPI devel] Ticket #1982 - Fortran MPI_IN_PLACE issue"</a>
<li><strong>Previous message:</strong> <a href="6868.php">David Gunter: "Re: [OMPI devel] Ticket #1982 - Fortran MPI_IN_PLACE issue"</a>
<li><strong>In reply to:</strong> <a href="6867.php">David Gunter: "[OMPI devel] Ticket #1982 - Fortran MPI_IN_PLACE issue"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6870.php">David Gunter: "Re: [OMPI devel] Ticket #1982 - Fortran MPI_IN_PLACE issue"</a>
<li><strong>Reply:</strong> <a href="6870.php">David Gunter: "Re: [OMPI devel] Ticket #1982 - Fortran MPI_IN_PLACE issue"</a>
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

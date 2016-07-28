<?
$subject_val = "Re: [OMPI devel] regression with derived datatypes";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May  8 05:57:43 2014" -->
<!-- isoreceived="20140508095743" -->
<!-- sent="Thu, 08 May 2014 18:57:53 +0900" -->
<!-- isosent="20140508095753" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles.gouaillardet_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] regression with derived datatypes" -->
<!-- id="536B5521.7060700_at_iferc.org" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="AE45F2F55FE69B4F99BB3455E821D7153A8AFA04_at_ECS-EXG-P-MB07.win.lanl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI devel] regression with derived datatypes<br>
<strong>From:</strong> Gilles Gouaillardet (<em>gilles.gouaillardet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-05-08 05:57:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14749.php">Jeff Squyres (jsquyres): "[OMPI devel] RFC: Remove autogen.sh sym link"</a>
<li><strong>Previous message:</strong> <a href="14747.php">Elena Elkina: "Re: [OMPI devel] regression with derived datatypes"</a>
<li><strong>In reply to:</strong> <a href="14745.php">Hjelm, Nathan T: "Re: [OMPI devel] regression with derived datatypes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14722.php">George Bosilca: "Re: [OMPI devel] regression with derived datatypes"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Nathan and George,
<br>
<p>here are the (compressed) traces
<br>
<p>Gilles
<br>
<p>On 2014/05/08 16:43, Hjelm, Nathan T wrote:
<br>
<span class="quotelev1">&gt; If you can get me the backtrace from one of the crash core files I would like to see what is going on there.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Nathan
</span><br>
<span class="quotelev1">&gt; ________________________________________
</span><br>
<span class="quotelev1">&gt; From: devel [devel-bounces_at_[hidden]] on behalf of Gilles Gouaillardet [gilles.gouaillardet_at_[hidden]]
</span><br>
<span class="quotelev1">&gt; Sent: Thursday, May 08, 2014 1:32 AM
</span><br>
<span class="quotelev1">&gt; To: Open MPI Developers
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI devel] regression with derived datatypes
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; George,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; you do not need any hardware, just download MPSS from Intel and install it.
</span><br>
<span class="quotelev1">&gt; make sure the mic kernel module is loaded *and* you can read/write to the
</span><br>
<span class="quotelev1">&gt; newly created /dev/mic/* devices.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; /* i am now running this on a virtual machine with no MIC whatsoever */
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; i was able to improve things a bit for the new attached test case
</span><br>
<span class="quotelev1">&gt; /* send MPI_PACKED / recv newtype */
</span><br>
<span class="quotelev1">&gt; with the attached unpack.patch.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; it has to be applied on r31678 (aka the latest checkout of the v1.8 branch)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; with this patch (zero regression test so far, it might solve one problem
</span><br>
<span class="quotelev1">&gt; but break anything else !)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpirun -np 2 -host localhost --mca btl,scif,vader ./test_scif2
</span><br>
<span class="quotelev1">&gt; works fine :-)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; but
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpirun -np 2 -host localhost --mca btl scif,vader ./test_scif2
</span><br>
<span class="quotelev1">&gt; still crashes (and it did not crash before r31496)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; i will provide the output you requested shortly
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Gilles
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/05/14745.php">http://www.open-mpi.org/community/lists/devel/2014/05/14745.php</a>
</span><br>
<p><p>

<br><hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-14748/r31678.log.bz2">r31678.log.bz2</a>
</ul>
<!-- attachment="r31678.log.bz2" -->
<hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-14748/r31678withoutr31496.log.bz2">r31678withoutr31496.log.bz2</a>
</ul>
<!-- attachment="r31678withoutr31496.log.bz2" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14749.php">Jeff Squyres (jsquyres): "[OMPI devel] RFC: Remove autogen.sh sym link"</a>
<li><strong>Previous message:</strong> <a href="14747.php">Elena Elkina: "Re: [OMPI devel] regression with derived datatypes"</a>
<li><strong>In reply to:</strong> <a href="14745.php">Hjelm, Nathan T: "Re: [OMPI devel] regression with derived datatypes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14722.php">George Bosilca: "Re: [OMPI devel] regression with derived datatypes"</a>
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

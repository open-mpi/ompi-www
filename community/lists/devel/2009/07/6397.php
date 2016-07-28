<?
$subject_val = "Re: [OMPI devel] Open MPI v1.3.3rc1 has escaped";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jul 10 10:17:00 2009" -->
<!-- isoreceived="20090710141700" -->
<!-- sent="Fri, 10 Jul 2009 16:16:51 +0200" -->
<!-- isosent="20090710141651" -->
<!-- name="Peter Kjellstrom" -->
<!-- email="cap_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Open MPI v1.3.3rc1 has escaped" -->
<!-- id="200907101616.55859.cap_at_nsc.liu.se" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="6A913707-4147-400F-B70C-214FF7C64DC4_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Open MPI v1.3.3rc1 has escaped<br>
<strong>From:</strong> Peter Kjellstrom (<em>cap_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-07-10 10:16:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6398.php">Jeff Squyres: "[OMPI devel] 1.3.3rc2 ran out"</a>
<li><strong>Previous message:</strong> <a href="6396.php">Jeff Squyres: "Re: [OMPI devel] Open MPI v1.3.3rc1 has escaped"</a>
<li><strong>In reply to:</strong> <a href="6396.php">Jeff Squyres: "Re: [OMPI devel] Open MPI v1.3.3rc1 has escaped"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Friday 10 July 2009, Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; On Jul 10, 2009, at 6:54 AM, Peter Kjellstrom wrote:
</span><br>
<span class="quotelev2">&gt; &gt; On Friday 10 July 2009, Jeff Squyres wrote:
</span><br>
<span class="quotelev3">&gt; &gt; &gt; <a href="http://www.open-mpi.org/software/ompi/v1.3/">http://www.open-mpi.org/software/ompi/v1.3/</a>
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Please test!
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Built and ran just like(*) 1.3.2 on my limited tests (that is,
</span><br>
<span class="quotelev2">&gt; &gt; worked quite
</span><br>
<span class="quotelev2">&gt; &gt; well)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; OS:CentOS-5.3.x86_64 with its own OFED
</span><br>
<span class="quotelev2">&gt; &gt; HW:ConnectX-DDR on a Nehalem dual-quad platform
</span><br>
<span class="quotelev2">&gt; &gt; Size:4 nodes
</span><br>
<span class="quotelev2">&gt; &gt; Compilers: Intel-11.0-074 (built with C/C++/F90, tested C and F90)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; (*) It seems to still have the problem reported in:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks for the testing!  We haven't updated the default tuned settings
</span><br>
<span class="quotelev1">&gt; -- I don't think it'll make the 1.3.3 cutoff.  There's a number of
</span><br>
<span class="quotelev1">&gt; other important fixes in 1.3.3 that we wanted to get out there. 1.3.4
</span><br>
<span class="quotelev1">&gt; will come along presently.
</span><br>
<p>Right, just don't forget about it. With the current settings performance for 
<br>
certain package sizes truely sucks. The thread I referenced was about CPMD 
<br>
performance so this is not just a syntetic thing. IMHO the default should be 
<br>
bruck to pair-wise (without ever going near basic linear).
<br>
<p>The impact with the current config is that alltoall (maybe others are bad too 
<br>
but alltoall is the only one I've tested) in the range ~100+ bytes to a few 
<br>
Kbytes sucks big times (atleast for nranks &gt;= 32).
<br>
<p>Keep up the good work,
<br>
&nbsp;Peter
<br>
<p>
<br><hr>
<ul>
<li>application/pgp-signature attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-6397/signature.asc_">This is a digitally signed message part.</a>
</ul>
<!-- attachment="signature.asc_" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6398.php">Jeff Squyres: "[OMPI devel] 1.3.3rc2 ran out"</a>
<li><strong>Previous message:</strong> <a href="6396.php">Jeff Squyres: "Re: [OMPI devel] Open MPI v1.3.3rc1 has escaped"</a>
<li><strong>In reply to:</strong> <a href="6396.php">Jeff Squyres: "Re: [OMPI devel] Open MPI v1.3.3rc1 has escaped"</a>
<!-- nextthread="start" -->
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

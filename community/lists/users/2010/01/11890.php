<?
$subject_val = "Re: [OMPI users] ABI stabilization/versioning";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan 26 06:47:22 2010" -->
<!-- isoreceived="20100126114722" -->
<!-- sent="Tue, 26 Jan 2010 12:49:05 +0100" -->
<!-- isosent="20100126114905" -->
<!-- name="Jed Brown" -->
<!-- email="jed_at_[hidden]" -->
<!-- subject="Re: [OMPI users] ABI stabilization/versioning" -->
<!-- id="877hr5qe6m.fsf_at_59A2.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="873a1tazha.fsf_at_liv.ac.uk" -->
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
<strong>Subject:</strong> Re: [OMPI users] ABI stabilization/versioning<br>
<strong>From:</strong> Jed Brown (<em>jed_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-01-26 06:49:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11891.php">cjohnson_at_[hidden]: "Re: [OMPI users] Windows CMake build problems ..."</a>
<li><strong>Previous message:</strong> <a href="11889.php">Dave Love: "Re: [OMPI users] ABI stabilization/versioning"</a>
<li><strong>In reply to:</strong> <a href="11888.php">Dave Love: "Re: [OMPI users] ABI stabilization/versioning"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11948.php">Jeff Squyres: "Re: [OMPI users] ABI stabilization/versioning"</a>
<li><strong>Reply:</strong> <a href="11948.php">Jeff Squyres: "Re: [OMPI users] ABI stabilization/versioning"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Tue, 26 Jan 2010 11:15:45 +0000, Dave Love &lt;d.love_at_[hidden]&gt; wrote:
<br>
<span class="quotelev2">&gt; &gt; Versions where bumped to 0.0.1 for libmpi which has no
</span><br>
<span class="quotelev2">&gt; &gt; effect for dynamic linking.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I've forgotten the rules on this, but the point is that it needs to
</span><br>
<span class="quotelev1">&gt; affect dynamic linking to avoid running with earlier libraries
</span><br>
<span class="quotelev1">&gt; (specifically picking up ones from 1.2, which is the most common
</span><br>
<span class="quotelev1">&gt; problem).
</span><br>
<p>Dave, I think you are correct that this has not actually been done.  In
<br>
particular, I have 1.4.1 installed, but the soname is still libmpi.so.0.
<br>
It's irrelevant that the symbolic links are set up for libmpi.so.0.0.1,
<br>
this minor versioning only affects which DSO gets used when the linker
<br>
(not the loader) sees -lmpi.
<br>
<p>And inspecting a binary built in Sep 2008 (must have been 1.2.7), ldd
<br>
resolves to my 1.4.1 copy without complaints.  However, the loader is
<br>
intelligent and at least offers a warning when I try to run this ancient
<br>
binary
<br>
<p>&nbsp;&nbsp;./a.out: Symbol `ompi_mpi_comm_null' has different size in shared object, consider re-linking
<br>
<p><p>Chapter 3 of this paper was useful to me when learning about ABI
<br>
versioning.
<br>
<p>&nbsp;&nbsp;<a href="http://people.redhat.com/drepper/dsohowto.pdf">http://people.redhat.com/drepper/dsohowto.pdf</a>
<br>
<p>Jed
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11891.php">cjohnson_at_[hidden]: "Re: [OMPI users] Windows CMake build problems ..."</a>
<li><strong>Previous message:</strong> <a href="11889.php">Dave Love: "Re: [OMPI users] ABI stabilization/versioning"</a>
<li><strong>In reply to:</strong> <a href="11888.php">Dave Love: "Re: [OMPI users] ABI stabilization/versioning"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11948.php">Jeff Squyres: "Re: [OMPI users] ABI stabilization/versioning"</a>
<li><strong>Reply:</strong> <a href="11948.php">Jeff Squyres: "Re: [OMPI users] ABI stabilization/versioning"</a>
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

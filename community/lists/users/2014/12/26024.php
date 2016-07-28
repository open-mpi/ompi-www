<?
$subject_val = "Re: [OMPI users] [EXTERNAL] Re: How to find MPI ranks located in remote nodes?";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec 17 21:52:16 2014" -->
<!-- isoreceived="20141218025216" -->
<!-- sent="Wed, 17 Dec 2014 21:52:14 -0500" -->
<!-- isosent="20141218025214" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI users] [EXTERNAL] Re: How to find MPI ranks located in remote nodes?" -->
<!-- id="CAMJJpkWoejHjONT09D=KvfpETa4YHfCLHHJabaYTz9HHxVu8uA_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="34A24AD4-70BA-4D90-BD38-CDEF25DA7018_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] [EXTERNAL] Re: How to find MPI ranks located in remote nodes?<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-12-17 21:52:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26025.php">Howard Pritchard: "Re: [OMPI users] Deadlock in OpenMPI 1.8.3 and PETSc 3.4.5"</a>
<li><strong>Previous message:</strong> <a href="26023.php">Gilles Gouaillardet: "Re: [OMPI users] OMPI users] OpenMPI 1.8.4rc3, 1.6.5 and 1.6.3: segmentation violation in mca_io_romio_dist_MPI_File_close"</a>
<li><strong>In reply to:</strong> <a href="26019.php">Jeff Squyres (jsquyres): "Re: [OMPI users] [EXTERNAL] Re: How to find MPI ranks located in remote nodes?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26037.php">Jeff Squyres (jsquyres): "Re: [OMPI users] [EXTERNAL] Re: How to find MPI ranks located in remote nodes?"</a>
<li><strong>Reply:</strong> <a href="26037.php">Jeff Squyres (jsquyres): "Re: [OMPI users] [EXTERNAL] Re: How to find MPI ranks located in remote nodes?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Wed, Dec 17, 2014 at 7:29 PM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]
<br>
<span class="quotelev1">&gt; wrote:
</span><br>
<p><span class="quotelev1">&gt; Returning to a super-old thread that was never finished...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Dec 2, 2014, at 6:49 PM, George Bosilca &lt;bosilca_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; That's not enough. They will have to check for the right version of Open
</span><br>
<span class="quotelev1">&gt; MPI and then for the availability of the OMPI_&lt;something&gt; functions. That
</span><br>
<span class="quotelev1">&gt; looks as having the sabe cost as checking for the MPIX_&lt;something&gt; function
</span><br>
<span class="quotelev1">&gt; without looking for a specific MPI library.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I don't understand how MPIX_&lt;something&gt; is better.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Given that there is *zero* commonality between any MPI extension
</span><br>
<span class="quotelev1">&gt; implemented between MPI implementations, how exactly is having the same
</span><br>
<span class="quotelev1">&gt; prefix any less confusing?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>This is an overstatement. There were quite a few examples over the last few
<br>
years (PERUSE, libNBC, ULFM). They all took different approaches for the
<br>
naming of their functions, increasing the potential users confusion. As a
<br>
developer for one of these MPI extensions I would rather go with a unique
<br>
naming scheme to free our users from the hassle of the name checking.
<br>
<p><p><span class="quotelev1">&gt; My point is that using an extension is inherently non-portable.  The
</span><br>
<span class="quotelev1">&gt; chances for &lt;something&gt; to collide between different MPI implementations is
</span><br>
<span class="quotelev1">&gt; actually quite high.  Indeed, if everyone uses MPIX_&lt;something&gt;, then
</span><br>
<span class="quotelev1">&gt; there's a very real possibility that MPIX_Foo != MPIX_Foo != MPIX_Foo.
</span><br>
<span class="quotelev1">&gt; That's *horrible*.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>Horrible sure, but highly improbable (function names have a meaning)
<br>
<p><p><span class="quotelev1">&gt; This is at least slightly more readable, and more clear that you're using
</span><br>
<span class="quotelev1">&gt; an Open MPI-specific extension:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -----
</span><br>
<span class="quotelev1">&gt; #if defined(OPEN_MPI) &amp;&amp; OPEN_MPI
</span><br>
<span class="quotelev1">&gt;   OMPI_Foo(a,b,c);
</span><br>
<span class="quotelev1">&gt; #endif
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #if defined(MPICH) &amp;&amp; MPICH
</span><br>
<span class="quotelev1">&gt;   MPIX_Foo(f,e,d,c,b,a);
</span><br>
<span class="quotelev1">&gt; #endif
</span><br>
<span class="quotelev1">&gt; -----
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>This is horrible! This is the kind of solution that neither a developer or
<br>
a user of such an extension would promote.
<br>
<p><p><span class="quotelev1">&gt; I guess my fundamental question is: why impose commonality of names where
</span><br>
<span class="quotelev1">&gt; there is no commonality of function signature and behavior?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>The overarching goal of an MPI extension is to show the interest of the
<br>
approach and eventually become part of the standard. A well designed
<br>
extension will have a unique function signature and behavior, not only
<br>
across different implementations but across different versions.
<br>
<p>As I mentioned earlier, as a developer of such extensions I do consider
<br>
that having a common naming scheme across multiple MPI implementation for
<br>
extensions is a good thing. However, as an alternative I don't care about
<br>
ditching all-together the library specific flavor from the naming scheme,
<br>
and going directly to something extension specific (&lt;MYEXT&gt;_Foo).
<br>
<p>&nbsp;&nbsp;George.
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-26024/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26025.php">Howard Pritchard: "Re: [OMPI users] Deadlock in OpenMPI 1.8.3 and PETSc 3.4.5"</a>
<li><strong>Previous message:</strong> <a href="26023.php">Gilles Gouaillardet: "Re: [OMPI users] OMPI users] OpenMPI 1.8.4rc3, 1.6.5 and 1.6.3: segmentation violation in mca_io_romio_dist_MPI_File_close"</a>
<li><strong>In reply to:</strong> <a href="26019.php">Jeff Squyres (jsquyres): "Re: [OMPI users] [EXTERNAL] Re: How to find MPI ranks located in remote nodes?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26037.php">Jeff Squyres (jsquyres): "Re: [OMPI users] [EXTERNAL] Re: How to find MPI ranks located in remote nodes?"</a>
<li><strong>Reply:</strong> <a href="26037.php">Jeff Squyres (jsquyres): "Re: [OMPI users] [EXTERNAL] Re: How to find MPI ranks located in remote nodes?"</a>
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

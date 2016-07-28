<?
$subject_val = "Re: [OMPI users] [EXTERNAL] Re: mpicc link shouldn't add -ldl and -lhwloc";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May 31 13:04:03 2012" -->
<!-- isoreceived="20120531170403" -->
<!-- sent="Thu, 31 May 2012 12:03:58 -0500" -->
<!-- isosent="20120531170358" -->
<!-- name="Jed Brown" -->
<!-- email="jed_at_[hidden]" -->
<!-- subject="Re: [OMPI users] [EXTERNAL] Re: mpicc link shouldn't add -ldl and -lhwloc" -->
<!-- id="CAM9tzSnGWA+sfQJSP0JHthTGduFNQ=C8wShFFGq0fTfYLjzOpw_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="5C0F15F3-4CCC-4BB5-858C-D19C7ACF2438_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] [EXTERNAL] Re: mpicc link shouldn't add -ldl and -lhwloc<br>
<strong>From:</strong> Jed Brown (<em>jed_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-05-31 13:03:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19401.php">Edmund Sumbar: "[OMPI users] seg fault with intel compiler"</a>
<li><strong>Previous message:</strong> <a href="19399.php">Jeff Squyres: "Re: [OMPI users] Building openmpi from src rpm: rpmbuild --rebuild errors with 'cpio: MD5 sum mismatch' (since openmpi 1.4.5)"</a>
<li><strong>In reply to:</strong> <a href="19398.php">Jeff Squyres: "Re: [OMPI users] [EXTERNAL] Re: mpicc link shouldn't add -ldl and -lhwloc"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Thu, May 31, 2012 at 6:20 AM, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; On May 29, 2012, at 11:42 AM, Jed Brown wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; The pkg-config approach is to use pkg-config --static if you want to
</span><br>
<span class="quotelev1">&gt; link that library statically.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Do the OMPI pkg-config files not do this properly?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>Looks right to me. I think the complaint was that there was no way to
<br>
specify the equivalent using wrapper compilers. I don't like the wrapper
<br>
compiler model (certainly not for languages with a common ABI like C), but
<br>
pkg-config doesn't have a good way to manage multiple configurations.
<br>
<p><p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; So the problem is almost exclusively one of binary compatibility. If an
</span><br>
<span class="quotelev1">&gt; app or library is only linked to the interface libs, underlying system
</span><br>
<span class="quotelev1">&gt; libraries can be upgraded to different soname without needing to relink the
</span><br>
<span class="quotelev1">&gt; applications. For example, libhwloc could be upgraded to a different ABI,
</span><br>
<span class="quotelev1">&gt; Open MPI rebuilt, and then the user application and intermediate MPI-based
</span><br>
<span class="quotelev1">&gt; libraries would not need to be rebuilt. This is great for distributions and
</span><br>
<span class="quotelev1">&gt; convenient if you work on projects with lots of dependencies.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; It's not such an issue for HPC applications because we tend to recompile
</span><br>
<span class="quotelev1">&gt; a lot and don't need binary compatibility for many of the most common use
</span><br>
<span class="quotelev1">&gt; cases. There is also the linker option -Wl,--as-needed that usually does
</span><br>
<span class="quotelev1">&gt; what is desired.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Mmmm.  Ok.  Brian and I are going to be in the same physical location next
</span><br>
<span class="quotelev1">&gt; week; I'll chat with him about this.
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-19400/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19401.php">Edmund Sumbar: "[OMPI users] seg fault with intel compiler"</a>
<li><strong>Previous message:</strong> <a href="19399.php">Jeff Squyres: "Re: [OMPI users] Building openmpi from src rpm: rpmbuild --rebuild errors with 'cpio: MD5 sum mismatch' (since openmpi 1.4.5)"</a>
<li><strong>In reply to:</strong> <a href="19398.php">Jeff Squyres: "Re: [OMPI users] [EXTERNAL] Re: mpicc link shouldn't add -ldl and -lhwloc"</a>
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

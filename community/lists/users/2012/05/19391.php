<?
$subject_val = "Re: [OMPI users] [EXTERNAL] Re: mpicc link shouldn't add -ldl and -lhwloc";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May 29 11:42:44 2012" -->
<!-- isoreceived="20120529154244" -->
<!-- sent="Tue, 29 May 2012 10:42:39 -0500" -->
<!-- isosent="20120529154239" -->
<!-- name="Jed Brown" -->
<!-- email="jed_at_[hidden]" -->
<!-- subject="Re: [OMPI users] [EXTERNAL] Re: mpicc link shouldn't add -ldl and -lhwloc" -->
<!-- id="CAM9tzSk7X_ci8vx=rjs6205H+yPQh-B==3iPJ6y=9c8SmyQ-SQ_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CD9E9432-CE10-4137-A635-2450AFF50166_at_cisco.com" -->
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
<strong>Date:</strong> 2012-05-29 11:42:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19392.php">Jeff Squyres: "Re: [OMPI users] The option &quot;--mca hwloc_base_mem_alloc_policy local_only&quot; doesn't bind memory to numa node"</a>
<li><strong>Previous message:</strong> <a href="19390.php">Jeff Squyres: "Re: [OMPI users] [EXTERNAL] Re: mpicc link shouldn't add -ldl and -lhwloc"</a>
<li><strong>In reply to:</strong> <a href="19390.php">Jeff Squyres: "Re: [OMPI users] [EXTERNAL] Re: mpicc link shouldn't add -ldl and -lhwloc"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19398.php">Jeff Squyres: "Re: [OMPI users] [EXTERNAL] Re: mpicc link shouldn't add -ldl and -lhwloc"</a>
<li><strong>Reply:</strong> <a href="19398.php">Jeff Squyres: "Re: [OMPI users] [EXTERNAL] Re: mpicc link shouldn't add -ldl and -lhwloc"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Tue, May 29, 2012 at 9:05 AM, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; We've tossed around ideas such as having the wrappers always assume
</span><br>
<span class="quotelev1">&gt; dynamic linking (e.g., only include a minimum of libraries), and then add
</span><br>
<span class="quotelev1">&gt; another wrapper option like --wrapper:static (or whatever) to know when to
</span><br>
<span class="quotelev1">&gt; add in all the dependent libraries.  Or possibly even look for some popular
</span><br>
<span class="quotelev1">&gt; linker options like --static, or some such (which we've tried to avoid,
</span><br>
<span class="quotelev1">&gt; because that can turn into a slippery slope), but such switches aren't
</span><br>
<span class="quotelev1">&gt; always necessary for MPI-only-static (vs. completely-100%-static) linking.
</span><br>
<span class="quotelev1">&gt;  It gets even fuzzier when both libmpi.so and libmpi.a are present.  Which
</span><br>
<span class="quotelev1">&gt; way should we assume?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Another problem is backwards compatibility -- users who are currently
</span><br>
<span class="quotelev1">&gt; statically linking will assume the old behavior (of not needing to specify
</span><br>
<span class="quotelev1">&gt; anything additional).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Now I'm not saying that Open MPI should commit to pkg-config instead of
</span><br>
<span class="quotelev1">&gt; wrapper compilers, but the concept of linking differently for static versus
</span><br>
<span class="quotelev1">&gt; shared libraries is something that should be observed.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Fair enough.  But we've never been able to come up with a rational way to
</span><br>
<span class="quotelev1">&gt; do it (note that pkg-config has its own problems -- OMPI provides
</span><br>
<span class="quotelev1">&gt; pkg-config files in addition to wrapper compilers, but they don't fix
</span><br>
<span class="quotelev1">&gt; everything, either).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; We have users who both --enable-static and --enable-shared (meaning: both
</span><br>
<span class="quotelev1">&gt; libmpi.so and libmpi.a are present).  And therefore we've come down on the
</span><br>
<span class="quotelev1">&gt; conservative side of adding in whatever is necessary for static linking.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>The pkg-config approach is to use pkg-config --static if you want to link
<br>
that library statically.
<br>
<p><p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; (Over-linking is an ongoing problem with HPC-oriented packages. We are
</span><br>
<span class="quotelev1">&gt; probably all guilty of it, but tools like pkg-config don't handle multiple
</span><br>
<span class="quotelev1">&gt; configurations well and I don't know of a similar system that manages both
</span><br>
<span class="quotelev1">&gt; static/shared and multi-configuration well.)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I suppose, but it does depend on how you define &quot;problem&quot;.  The linker
</span><br>
<span class="quotelev1">&gt; will ignore any unused libraries -- so it's a problem like lint is a
</span><br>
<span class="quotelev1">&gt; problem.  It's annoying, but it doesn't do any harm.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ...or are there cases where it actually does something harmful?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>So the problem is almost exclusively one of binary compatibility. If an app
<br>
or library is only linked to the interface libs, underlying system
<br>
libraries can be upgraded to different soname without needing to relink the
<br>
applications. For example, libhwloc could be upgraded to a different ABI,
<br>
Open MPI rebuilt, and then the user application and intermediate MPI-based
<br>
libraries would not need to be rebuilt. This is great for distributions and
<br>
convenient if you work on projects with lots of dependencies.
<br>
<p>It's not such an issue for HPC applications because we tend to recompile a
<br>
lot and don't need binary compatibility for many of the most common use
<br>
cases. There is also the linker option -Wl,--as-needed that usually does
<br>
what is desired.
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-19391/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19392.php">Jeff Squyres: "Re: [OMPI users] The option &quot;--mca hwloc_base_mem_alloc_policy local_only&quot; doesn't bind memory to numa node"</a>
<li><strong>Previous message:</strong> <a href="19390.php">Jeff Squyres: "Re: [OMPI users] [EXTERNAL] Re: mpicc link shouldn't add -ldl and -lhwloc"</a>
<li><strong>In reply to:</strong> <a href="19390.php">Jeff Squyres: "Re: [OMPI users] [EXTERNAL] Re: mpicc link shouldn't add -ldl and -lhwloc"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19398.php">Jeff Squyres: "Re: [OMPI users] [EXTERNAL] Re: mpicc link shouldn't add -ldl and -lhwloc"</a>
<li><strong>Reply:</strong> <a href="19398.php">Jeff Squyres: "Re: [OMPI users] [EXTERNAL] Re: mpicc link shouldn't add -ldl and -lhwloc"</a>
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

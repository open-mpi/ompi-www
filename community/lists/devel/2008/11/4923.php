<?
$subject_val = "Re: [OMPI devel] RFC: Add SunStudio/Libtool helper script for	post-configure";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Nov 19 13:38:02 2008" -->
<!-- isoreceived="20081119183802" -->
<!-- sent="Wed, 19 Nov 2008 13:37:57 -0500" -->
<!-- isosent="20081119183757" -->
<!-- name="Ethan Mallove" -->
<!-- email="ethan.mallove_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: Add SunStudio/Libtool helper script for	post-configure" -->
<!-- id="20081119183757.GA240_at_sun.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="A83A1D26-4A46-45CE-AD1D-52EE0C7442B0_at_eecs.utk.edu" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RFC: Add SunStudio/Libtool helper script for	post-configure<br>
<strong>From:</strong> Ethan Mallove (<em>ethan.mallove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-11-19 13:37:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4924.php">Ethan Mallove: "Re: [OMPI devel] RFC: Add SunStudio/Libtool helper script for	post-configure"</a>
<li><strong>Previous message:</strong> <a href="4922.php">Ralf Wildenhues: "Re: [OMPI devel] RFC: Add SunStudio/Libtool helper script for	post-configure"</a>
<li><strong>In reply to:</strong> <a href="4921.php">George Bosilca: "Re: [OMPI devel] RFC: Add SunStudio/Libtool helper script for post-configure"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4925.php">Terry Dontje: "Re: [OMPI devel] RFC: Add SunStudio/Libtool helper script	for	post-configure"</a>
<li><strong>Reply:</strong> <a href="4925.php">Terry Dontje: "Re: [OMPI devel] RFC: Add SunStudio/Libtool helper script	for	post-configure"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Wed, Nov/19/2008 10:05:55AM, George Bosilca wrote:
<br>
<span class="quotelev1">&gt; We're still using STL ? I was pretty much sure that we removed this 
</span><br>
<span class="quotelev1">&gt; dependency a while ago ?
</span><br>
<p>Open MPI is now set up to use either of Solaris's two versions of STL. The
<br>
problem is that if libtool links in libCrun/libCstd, then bad things happen if
<br>
the user code contains code for the other STL version. (Not sure if I got that
<br>
100% right.) Dan overhauled Open MPI's handling of STL a while ago (r17448,
<br>
r17418, r17409, ...). 
<br>
<p>-Ethan
<br>
<p><p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   george.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Nov 19, 2008, at 09:11 , Ethan Mallove wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ----------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; WHAT: Add patch-libtool-for-sun-studio.pl script
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ----------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; WHY:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; There are a couple issues with SunStudio and Libtool:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    1. The SunStudio libCrun/libCstd C++ libs get linked into Open MPI by
</span><br>
<span class="quotelev2">&gt;&gt;       libtool, which can lead to STL incompatibilities on Solaris
</span><br>
<span class="quotelev2">&gt;&gt;    2. Libtool uses the wrong linker flags for C++ and Fortran (on Linux 
</span><br>
<span class="quotelev2">&gt;&gt; Sun
</span><br>
<span class="quotelev2">&gt;&gt;       Studio)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Benefits of the fix:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    1. Anyone can easily build Open MPI using SunStudio
</span><br>
<span class="quotelev2">&gt;&gt;    2. Nightly MTT Linux/SunStudio runs will pass
</span><br>
<span class="quotelev2">&gt;&gt;    3. We can remove (most) of the Open MPI SunStudio building FAQ:
</span><br>
<span class="quotelev2">&gt;&gt;       <a href="http://www.open-mpi.org/faq/?category=building#build-sun-compilers">http://www.open-mpi.org/faq/?category=building#build-sun-compilers</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ----------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; WHERE: See attached patch; config/patch-libtool-for-sun-studio.pl and
</span><br>
<span class="quotelev2">&gt;&gt; configure.ac
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ----------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; WHEN: Soon
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ----------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; TIMEOUT: Later
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ----------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; One concern is that there's no precedent in Open MPI for patching libtool
</span><br>
<span class="quotelev2">&gt;&gt; *after* configure (we only patch libtool beforehand in autogen.sh). The
</span><br>
<span class="quotelev2">&gt;&gt; problem is that this particular libtool &quot;patch&quot; should only be used in the
</span><br>
<span class="quotelev2">&gt;&gt; case of Sun Studio which is not known until configure-time, and there does
</span><br>
<span class="quotelev2">&gt;&gt; not seem to be a generic patch that we could apply before configure.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -Ethan
</span><br>
<span class="quotelev2">&gt;&gt; &lt;patch-libtool-for-sun-studio.diff&gt;_______________________________________________
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4924.php">Ethan Mallove: "Re: [OMPI devel] RFC: Add SunStudio/Libtool helper script for	post-configure"</a>
<li><strong>Previous message:</strong> <a href="4922.php">Ralf Wildenhues: "Re: [OMPI devel] RFC: Add SunStudio/Libtool helper script for	post-configure"</a>
<li><strong>In reply to:</strong> <a href="4921.php">George Bosilca: "Re: [OMPI devel] RFC: Add SunStudio/Libtool helper script for post-configure"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4925.php">Terry Dontje: "Re: [OMPI devel] RFC: Add SunStudio/Libtool helper script	for	post-configure"</a>
<li><strong>Reply:</strong> <a href="4925.php">Terry Dontje: "Re: [OMPI devel] RFC: Add SunStudio/Libtool helper script	for	post-configure"</a>
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

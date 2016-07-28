<?
$subject_val = "Re: [OMPI devel] RFC: Add SunStudio/Libtool helper script	for	post-configure";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Nov 19 13:47:35 2008" -->
<!-- isoreceived="20081119184735" -->
<!-- sent="Wed, 19 Nov 2008 13:47:16 -0500" -->
<!-- isosent="20081119184716" -->
<!-- name="Terry Dontje" -->
<!-- email="Terry.Dontje_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: Add SunStudio/Libtool helper script	for	post-configure" -->
<!-- id="49245F34.7000604_at_sun.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="20081119183757.GA240_at_sun.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RFC: Add SunStudio/Libtool helper script	for	post-configure<br>
<strong>From:</strong> Terry Dontje (<em>Terry.Dontje_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-11-19 13:47:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4926.php">Ethan Mallove: "Re: [OMPI devel] RFC: Add SunStudio/Libtool helper script for	post-configure"</a>
<li><strong>Previous message:</strong> <a href="4924.php">Ethan Mallove: "Re: [OMPI devel] RFC: Add SunStudio/Libtool helper script for	post-configure"</a>
<li><strong>In reply to:</strong> <a href="4923.php">Ethan Mallove: "Re: [OMPI devel] RFC: Add SunStudio/Libtool helper script for	post-configure"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4922.php">Ralf Wildenhues: "Re: [OMPI devel] RFC: Add SunStudio/Libtool helper script for	post-configure"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ethan Mallove wrote:
<br>
<span class="quotelev1">&gt; On Wed, Nov/19/2008 10:05:55AM, George Bosilca wrote:
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev2">&gt;&gt; We're still using STL ? I was pretty much sure that we removed this 
</span><br>
<span class="quotelev2">&gt;&gt; dependency a while ago ?
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Open MPI is now set up to use either of Solaris's two versions of STL. The
</span><br>
<span class="quotelev1">&gt; problem is that if libtool links in libCrun/libCstd, then bad things happen if
</span><br>
<span class="quotelev1">&gt; the user code contains code for the other STL version. (Not sure if I got that
</span><br>
<span class="quotelev1">&gt; 100% right.) Dan overhauled Open MPI's handling of STL a while ago (r17448,
</span><br>
<span class="quotelev1">&gt; r17418, r17409, ...). 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Ethan
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   
</span><br>
I think what Ethan is trying to say is that even though OMPI does not 
<br>
require libCrun/libCstd libtool insists on adding one of them.  If I 
<br>
recall this thread correctly I think Ralf suggested we try a later 
<br>
version of autotools to see if this still exists.
<br>
<p>--td
<br>
<span class="quotelev2">&gt;&gt;   george.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Nov 19, 2008, at 09:11 , Ethan Mallove wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ----------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; WHAT: Add patch-libtool-for-sun-studio.pl script
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ----------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; WHY:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; There are a couple issues with SunStudio and Libtool:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    1. The SunStudio libCrun/libCstd C++ libs get linked into Open MPI by
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       libtool, which can lead to STL incompatibilities on Solaris
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    2. Libtool uses the wrong linker flags for C++ and Fortran (on Linux 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Sun
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       Studio)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Benefits of the fix:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    1. Anyone can easily build Open MPI using SunStudio
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    2. Nightly MTT Linux/SunStudio runs will pass
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    3. We can remove (most) of the Open MPI SunStudio building FAQ:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       <a href="http://www.open-mpi.org/faq/?category=building#build-sun-compilers">http://www.open-mpi.org/faq/?category=building#build-sun-compilers</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ----------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; WHERE: See attached patch; config/patch-libtool-for-sun-studio.pl and
</span><br>
<span class="quotelev3">&gt;&gt;&gt; configure.ac
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ----------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; WHEN: Soon
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ----------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; TIMEOUT: Later
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ----------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; One concern is that there's no precedent in Open MPI for patching libtool
</span><br>
<span class="quotelev3">&gt;&gt;&gt; *after* configure (we only patch libtool beforehand in autogen.sh). The
</span><br>
<span class="quotelev3">&gt;&gt;&gt; problem is that this particular libtool &quot;patch&quot; should only be used in the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; case of Sun Studio which is not known until configure-time, and there does
</span><br>
<span class="quotelev3">&gt;&gt;&gt; not seem to be a generic patch that we could apply before configure.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -Ethan
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &lt;patch-libtool-for-sun-studio.diff&gt;_______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4926.php">Ethan Mallove: "Re: [OMPI devel] RFC: Add SunStudio/Libtool helper script for	post-configure"</a>
<li><strong>Previous message:</strong> <a href="4924.php">Ethan Mallove: "Re: [OMPI devel] RFC: Add SunStudio/Libtool helper script for	post-configure"</a>
<li><strong>In reply to:</strong> <a href="4923.php">Ethan Mallove: "Re: [OMPI devel] RFC: Add SunStudio/Libtool helper script for	post-configure"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4922.php">Ralf Wildenhues: "Re: [OMPI devel] RFC: Add SunStudio/Libtool helper script for	post-configure"</a>
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

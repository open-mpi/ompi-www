<?
$subject_val = "Re: [OMPI devel] RFC: Add SunStudio/Libtool helper script for post-configure";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Nov 19 11:06:09 2008" -->
<!-- isoreceived="20081119160609" -->
<!-- sent="Wed, 19 Nov 2008 10:05:55 -0600" -->
<!-- isosent="20081119160555" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: Add SunStudio/Libtool helper script for post-configure" -->
<!-- id="A83A1D26-4A46-45CE-AD1D-52EE0C7442B0_at_eecs.utk.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20081119151123.GA258_at_sun.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RFC: Add SunStudio/Libtool helper script for post-configure<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-11-19 11:05:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4922.php">Ralf Wildenhues: "Re: [OMPI devel] RFC: Add SunStudio/Libtool helper script for	post-configure"</a>
<li><strong>Previous message:</strong> <a href="4920.php">Ethan Mallove: "[OMPI devel] RFC: Add SunStudio/Libtool helper script for post-configure"</a>
<li><strong>In reply to:</strong> <a href="4920.php">Ethan Mallove: "[OMPI devel] RFC: Add SunStudio/Libtool helper script for post-configure"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4923.php">Ethan Mallove: "Re: [OMPI devel] RFC: Add SunStudio/Libtool helper script for	post-configure"</a>
<li><strong>Reply:</strong> <a href="4923.php">Ethan Mallove: "Re: [OMPI devel] RFC: Add SunStudio/Libtool helper script for	post-configure"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
We're still using STL ? I was pretty much sure that we removed this  
<br>
dependency a while ago ?
<br>
<p>&nbsp;&nbsp;&nbsp;george.
<br>
<p>On Nov 19, 2008, at 09:11 , Ethan Mallove wrote:
<br>
<p><span class="quotelev1">&gt; ----------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; WHAT: Add patch-libtool-for-sun-studio.pl script
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ----------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; WHY:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; There are a couple issues with SunStudio and Libtool:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    1. The SunStudio libCrun/libCstd C++ libs get linked into Open  
</span><br>
<span class="quotelev1">&gt; MPI by
</span><br>
<span class="quotelev1">&gt;       libtool, which can lead to STL incompatibilities on Solaris
</span><br>
<span class="quotelev1">&gt;    2. Libtool uses the wrong linker flags for C++ and Fortran (on  
</span><br>
<span class="quotelev1">&gt; Linux Sun
</span><br>
<span class="quotelev1">&gt;       Studio)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Benefits of the fix:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    1. Anyone can easily build Open MPI using SunStudio
</span><br>
<span class="quotelev1">&gt;    2. Nightly MTT Linux/SunStudio runs will pass
</span><br>
<span class="quotelev1">&gt;    3. We can remove (most) of the Open MPI SunStudio building FAQ:
</span><br>
<span class="quotelev1">&gt;       <a href="http://www.open-mpi.org/faq/?category=building#build-sun-compilers">http://www.open-mpi.org/faq/?category=building#build-sun-compilers</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ----------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; WHERE: See attached patch; config/patch-libtool-for-sun-studio.pl and
</span><br>
<span class="quotelev1">&gt; configure.ac
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ----------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; WHEN: Soon
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ----------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; TIMEOUT: Later
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ----------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; One concern is that there's no precedent in Open MPI for patching  
</span><br>
<span class="quotelev1">&gt; libtool
</span><br>
<span class="quotelev1">&gt; *after* configure (we only patch libtool beforehand in autogen.sh).  
</span><br>
<span class="quotelev1">&gt; The
</span><br>
<span class="quotelev1">&gt; problem is that this particular libtool &quot;patch&quot; should only be used  
</span><br>
<span class="quotelev1">&gt; in the
</span><br>
<span class="quotelev1">&gt; case of Sun Studio which is not known until configure-time, and  
</span><br>
<span class="quotelev1">&gt; there does
</span><br>
<span class="quotelev1">&gt; not seem to be a generic patch that we could apply before configure.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Ethan
</span><br>
<span class="quotelev1">&gt; &lt;patch-libtool-for-sun- 
</span><br>
<span class="quotelev1">&gt; studio.diff&gt;_______________________________________________
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
<li><strong>Next message:</strong> <a href="4922.php">Ralf Wildenhues: "Re: [OMPI devel] RFC: Add SunStudio/Libtool helper script for	post-configure"</a>
<li><strong>Previous message:</strong> <a href="4920.php">Ethan Mallove: "[OMPI devel] RFC: Add SunStudio/Libtool helper script for post-configure"</a>
<li><strong>In reply to:</strong> <a href="4920.php">Ethan Mallove: "[OMPI devel] RFC: Add SunStudio/Libtool helper script for post-configure"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4923.php">Ethan Mallove: "Re: [OMPI devel] RFC: Add SunStudio/Libtool helper script for	post-configure"</a>
<li><strong>Reply:</strong> <a href="4923.php">Ethan Mallove: "Re: [OMPI devel] RFC: Add SunStudio/Libtool helper script for	post-configure"</a>
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

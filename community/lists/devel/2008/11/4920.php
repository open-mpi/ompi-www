<?
$subject_val = "[OMPI devel] RFC: Add SunStudio/Libtool helper script for post-configure";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Nov 19 10:11:28 2008" -->
<!-- isoreceived="20081119151128" -->
<!-- sent="Wed, 19 Nov 2008 10:11:23 -0500" -->
<!-- isosent="20081119151123" -->
<!-- name="Ethan Mallove" -->
<!-- email="ethan.mallove_at_[hidden]" -->
<!-- subject="[OMPI devel] RFC: Add SunStudio/Libtool helper script for post-configure" -->
<!-- id="20081119151123.GA258_at_sun.com" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [OMPI devel] RFC: Add SunStudio/Libtool helper script for post-configure<br>
<strong>From:</strong> Ethan Mallove (<em>ethan.mallove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-11-19 10:11:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4921.php">George Bosilca: "Re: [OMPI devel] RFC: Add SunStudio/Libtool helper script for post-configure"</a>
<li><strong>Previous message:</strong> <a href="4919.php">Bogdan Costescu: "[OMPI devel] 1.3 PML default choice"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4921.php">George Bosilca: "Re: [OMPI devel] RFC: Add SunStudio/Libtool helper script for post-configure"</a>
<li><strong>Reply:</strong> <a href="4921.php">George Bosilca: "Re: [OMPI devel] RFC: Add SunStudio/Libtool helper script for post-configure"</a>
<li><strong>Reply:</strong> <a href="4922.php">Ralf Wildenhues: "Re: [OMPI devel] RFC: Add SunStudio/Libtool helper script for	post-configure"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
----------------------------------------------------------------------------
<br>
WHAT: Add patch-libtool-for-sun-studio.pl script
<br>
<p>----------------------------------------------------------------------------
<br>
WHY: 
<br>
<p>There are a couple issues with SunStudio and Libtool:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;1. The SunStudio libCrun/libCstd C++ libs get linked into Open MPI by
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libtool, which can lead to STL incompatibilities on Solaris
<br>
&nbsp;&nbsp;&nbsp;&nbsp;2. Libtool uses the wrong linker flags for C++ and Fortran (on Linux Sun
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Studio)
<br>
<p>Benefits of the fix: 
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;1. Anyone can easily build Open MPI using SunStudio
<br>
&nbsp;&nbsp;&nbsp;&nbsp;2. Nightly MTT Linux/SunStudio runs will pass
<br>
&nbsp;&nbsp;&nbsp;&nbsp;3. We can remove (most) of the Open MPI SunStudio building FAQ:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/faq/?category=building#build-sun-compilers">http://www.open-mpi.org/faq/?category=building#build-sun-compilers</a>
<br>
<p>----------------------------------------------------------------------------
<br>
WHERE: See attached patch; config/patch-libtool-for-sun-studio.pl and
<br>
configure.ac
<br>
<p>----------------------------------------------------------------------------
<br>
WHEN: Soon
<br>
<p>----------------------------------------------------------------------------
<br>
TIMEOUT: Later
<br>
<p>----------------------------------------------------------------------------
<br>
<p>One concern is that there's no precedent in Open MPI for patching libtool
<br>
*after* configure (we only patch libtool beforehand in autogen.sh). The
<br>
problem is that this particular libtool &quot;patch&quot; should only be used in the
<br>
case of Sun Studio which is not known until configure-time, and there does
<br>
not seem to be a generic patch that we could apply before configure.
<br>
<p>-Ethan
<br>
<p>
<br><hr>
<ul>
<li>text/plain attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-4920/patch-libtool-for-sun-studio.diff">patch-libtool-for-sun-studio.diff</a>
</ul>
<!-- attachment="patch-libtool-for-sun-studio.diff" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4921.php">George Bosilca: "Re: [OMPI devel] RFC: Add SunStudio/Libtool helper script for post-configure"</a>
<li><strong>Previous message:</strong> <a href="4919.php">Bogdan Costescu: "[OMPI devel] 1.3 PML default choice"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4921.php">George Bosilca: "Re: [OMPI devel] RFC: Add SunStudio/Libtool helper script for post-configure"</a>
<li><strong>Reply:</strong> <a href="4921.php">George Bosilca: "Re: [OMPI devel] RFC: Add SunStudio/Libtool helper script for post-configure"</a>
<li><strong>Reply:</strong> <a href="4922.php">Ralf Wildenhues: "Re: [OMPI devel] RFC: Add SunStudio/Libtool helper script for	post-configure"</a>
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

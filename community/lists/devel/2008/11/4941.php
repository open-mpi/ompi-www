<?
$subject_val = "Re: [OMPI devel] RFC: Add SunStudio/Libtool helper script for	post-configure";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Nov 21 07:02:20 2008" -->
<!-- isoreceived="20081121120220" -->
<!-- sent="Fri, 21 Nov 2008 13:02:12 +0100" -->
<!-- isosent="20081121120212" -->
<!-- name="Ralf Wildenhues" -->
<!-- email="Ralf.Wildenhues_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: Add SunStudio/Libtool helper script for	post-configure" -->
<!-- id="20081121120212.GB23585_at_ins.uni-bonn.de" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20081120213308.GE240_at_sun.com" -->
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
<strong>From:</strong> Ralf Wildenhues (<em>Ralf.Wildenhues_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-11-21 07:02:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4942.php">Jeff Squyres: "[OMPI devel] SC08 slides"</a>
<li><strong>Previous message:</strong> <a href="4940.php">Terry Dontje: "Re: [OMPI devel] RFC: Add SunStudio/Libtool helper script	for	post-configure"</a>
<li><strong>In reply to:</strong> <a href="4937.php">Ethan Mallove: "Re: [OMPI devel] RFC: Add SunStudio/Libtool helper script for	post-configure"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4943.php">Ethan Mallove: "Re: [OMPI devel] RFC: Add SunStudio/Libtool helper script for	post-configure"</a>
<li><strong>Reply:</strong> <a href="4943.php">Ethan Mallove: "Re: [OMPI devel] RFC: Add SunStudio/Libtool helper script for	post-configure"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello Ethan, all,
<br>
<p>* Ethan Mallove wrote on Thu, Nov 20, 2008 at 10:33:08PM CET:
<br>
<span class="quotelev1">&gt; On Thu, Nov/20/2008 07:00:31PM, Ralf Wildenhues wrote:
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Ah, ok.  Please try the patch below instead of yours, thanks.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Your patch seems to work, though I get this:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    libtool: Version mismatch error.  This is libtool 2.2.7a, but the
</span><br>
<span class="quotelev1">&gt;    libtool: definition of this LT_INIT comes from libtool 2.2.6.
</span><br>
<span class="quotelev1">&gt;    libtool: You should recreate aclocal.m4 with macros from libtool 2.2.7a
</span><br>
<span class="quotelev1">&gt;    libtool: and run autoconf again.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I take it the above error will occur if I have two different libtools
</span><br>
<span class="quotelev1">&gt; in my PATH?
</span><br>
<p>No.  That means the macro files that were picked up were from Libtool
<br>
2.2.6, while the ltmain.sh file is from 2.2.7a.
<br>
<p><span class="quotelev1">&gt; This comment could be a little misleading because the same is true for
</span><br>
<span class="quotelev1">&gt; Sun Fortran 8.1 and 8.2:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   # Sun Fortran 8.3 passes all unrecognized flags to the linker
</span><br>
<p>OK.  I think we simply didn't have any other version to test at the time
<br>
this was written.  We usually list the version somewhere so we can check
<br>
for version-specific issues, should they later show up.
<br>
<p>I will update the comment to list '8.1 through 8.3', when I commit your
<br>
patch (sometime this weekend); thanks for testing it.
<br>
<p><span class="quotelev1">&gt; I don't know of a version of Sun Fortran that accepts -Wl the way GNU
</span><br>
<span class="quotelev1">&gt; Fortran does. I will let you know if I find one.
</span><br>
<p>Thanks.
<br>
<p><span class="quotelev3">&gt; &gt; &gt; I'm still running into the Cstd/stlport4 issue with 2.2.6. That is,
</span><br>
<span class="quotelev3">&gt; &gt; &gt; this line appears in the libtool script:
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt;   postdeps=&quot;-library=Cstd -library=Crun&quot;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Do you have the string &quot; -library=stlport4 &quot; in $CXX $CXXFLAGS?
</span><br>
<span class="quotelev2">&gt; &gt; If not, then how can Libtool detect that you use stlport?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Ok. When I use -library=stlport4, I get libstlport linked to
</span><br>
<span class="quotelev1">&gt; libmpi_cxx, instead of libCstd. Doesn't that then lock the user into
</span><br>
<span class="quotelev1">&gt; having to use stlport4 when we want them to be able to use either Cstd
</span><br>
<span class="quotelev1">&gt; or stlport4?
</span><br>
<p>Hmm, yes, it does.  It is a bit of a problem to let libtool avoid either
<br>
standard C++ library in general: with shared libraries or even
<br>
dlopen'able modules, this can result in undefined symbols at run time.
<br>
<p>As the code is currently written in libtool.m4, there is an undocumented
<br>
way which you can use to get the effects of adding neither library: set
<br>
solaris_use_stlport4=yes.  You can use this, either as argument to
<br>
configure, or set it inside configure.ac (or a macro) so that it is
<br>
expanded before AC_PROG_LIBTOOL.
<br>
<p>However, as it is undocumented, there is no guarantee that it will
<br>
continue to work indefinitely.  What Libtool should instead do future is
<br>
provide some configure flag to allow to specify that no C++ standard
<br>
library is to be linked in by default.  That would help for a couple of
<br>
different setups with other compilers as well.  IMHO OpenMPI can use
<br>
the solaris_use_stlport4=yes until such a functionality is in place.
<br>
<p>Cheers, and thanks,
<br>
Ralf
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4942.php">Jeff Squyres: "[OMPI devel] SC08 slides"</a>
<li><strong>Previous message:</strong> <a href="4940.php">Terry Dontje: "Re: [OMPI devel] RFC: Add SunStudio/Libtool helper script	for	post-configure"</a>
<li><strong>In reply to:</strong> <a href="4937.php">Ethan Mallove: "Re: [OMPI devel] RFC: Add SunStudio/Libtool helper script for	post-configure"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4943.php">Ethan Mallove: "Re: [OMPI devel] RFC: Add SunStudio/Libtool helper script for	post-configure"</a>
<li><strong>Reply:</strong> <a href="4943.php">Ethan Mallove: "Re: [OMPI devel] RFC: Add SunStudio/Libtool helper script for	post-configure"</a>
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

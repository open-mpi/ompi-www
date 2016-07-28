<?
$subject_val = "Re: [OMPI devel] RFC: Add SunStudio/Libtool helper script for	post-configure";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Nov 21 15:02:01 2008" -->
<!-- isoreceived="20081121200201" -->
<!-- sent="Fri, 21 Nov 2008 15:01:56 -0500" -->
<!-- isosent="20081121200156" -->
<!-- name="Ethan Mallove" -->
<!-- email="ethan.mallove_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: Add SunStudio/Libtool helper script for	post-configure" -->
<!-- id="20081121200155.GF240_at_sun.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20081121120212.GB23585_at_ins.uni-bonn.de" -->
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
<strong>Date:</strong> 2008-11-21 15:01:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4944.php">Jeff Squyres: "Re: [OMPI devel] RFC: Add SunStudio/Libtool helper script	for	post-configure"</a>
<li><strong>Previous message:</strong> <a href="4942.php">Jeff Squyres: "[OMPI devel] SC08 slides"</a>
<li><strong>In reply to:</strong> <a href="4941.php">Ralf Wildenhues: "Re: [OMPI devel] RFC: Add SunStudio/Libtool helper script for	post-configure"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4946.php">Ralf Wildenhues: "Re: [OMPI devel] RFC: Add SunStudio/Libtool helper script for	post-configure"</a>
<li><strong>Reply:</strong> <a href="4946.php">Ralf Wildenhues: "Re: [OMPI devel] RFC: Add SunStudio/Libtool helper script for	post-configure"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Fri, Nov/21/2008 01:02:12PM, Ralf Wildenhues wrote:
<br>
<span class="quotelev1">&gt; Hello Ethan, all,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; * Ethan Mallove wrote on Thu, Nov 20, 2008 at 10:33:08PM CET:
</span><br>
<span class="quotelev2">&gt; &gt; On Thu, Nov/20/2008 07:00:31PM, Ralf Wildenhues wrote:
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Ah, ok.  Please try the patch below instead of yours, thanks.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Your patch seems to work, though I get this:
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt;    libtool: Version mismatch error.  This is libtool 2.2.7a, but the
</span><br>
<span class="quotelev2">&gt; &gt;    libtool: definition of this LT_INIT comes from libtool 2.2.6.
</span><br>
<span class="quotelev2">&gt; &gt;    libtool: You should recreate aclocal.m4 with macros from libtool 2.2.7a
</span><br>
<span class="quotelev2">&gt; &gt;    libtool: and run autoconf again.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; I take it the above error will occur if I have two different libtools
</span><br>
<span class="quotelev2">&gt; &gt; in my PATH?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; No.  That means the macro files that were picked up were from Libtool
</span><br>
<span class="quotelev1">&gt; 2.2.6, while the ltmain.sh file is from 2.2.7a.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; This comment could be a little misleading because the same is true for
</span><br>
<span class="quotelev2">&gt; &gt; Sun Fortran 8.1 and 8.2:
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt;   # Sun Fortran 8.3 passes all unrecognized flags to the linker
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; OK.  I think we simply didn't have any other version to test at the time
</span><br>
<span class="quotelev1">&gt; this was written.  We usually list the version somewhere so we can check
</span><br>
<span class="quotelev1">&gt; for version-specific issues, should they later show up.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I will update the comment to list '8.1 through 8.3', when I commit your
</span><br>
<span class="quotelev1">&gt; patch (sometime this weekend); thanks for testing it.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; I don't know of a version of Sun Fortran that accepts -Wl the way GNU
</span><br>
<span class="quotelev2">&gt; &gt; Fortran does. I will let you know if I find one.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; I'm still running into the Cstd/stlport4 issue with 2.2.6. That is,
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; this line appears in the libtool script:
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;   postdeps=&quot;-library=Cstd -library=Crun&quot;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Do you have the string &quot; -library=stlport4 &quot; in $CXX $CXXFLAGS?
</span><br>
<span class="quotelev3">&gt; &gt; &gt; If not, then how can Libtool detect that you use stlport?
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Ok. When I use -library=stlport4, I get libstlport linked to
</span><br>
<span class="quotelev2">&gt; &gt; libmpi_cxx, instead of libCstd. Doesn't that then lock the user into
</span><br>
<span class="quotelev2">&gt; &gt; having to use stlport4 when we want them to be able to use either Cstd
</span><br>
<span class="quotelev2">&gt; &gt; or stlport4?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hmm, yes, it does.  It is a bit of a problem to let libtool avoid either
</span><br>
<span class="quotelev1">&gt; standard C++ library in general: with shared libraries or even
</span><br>
<span class="quotelev1">&gt; dlopen'able modules, this can result in undefined symbols at run time.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; As the code is currently written in libtool.m4, there is an undocumented
</span><br>
<span class="quotelev1">&gt; way which you can use to get the effects of adding neither library: set
</span><br>
<span class="quotelev1">&gt; solaris_use_stlport4=yes.  You can use this, either as argument to
</span><br>
<span class="quotelev1">&gt; configure, or set it inside configure.ac (or a macro) so that it is
</span><br>
<span class="quotelev1">&gt; expanded before AC_PROG_LIBTOOL.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; However, as it is undocumented, there is no guarantee that it will
</span><br>
<span class="quotelev1">&gt; continue to work indefinitely.  What Libtool should instead do future is
</span><br>
<span class="quotelev1">&gt; provide some configure flag to allow to specify that no C++ standard
</span><br>
<span class="quotelev1">&gt; library is to be linked in by default.  That would help for a couple of
</span><br>
<span class="quotelev1">&gt; different setups with other compilers as well.  IMHO OpenMPI can use
</span><br>
<span class="quotelev1">&gt; the solaris_use_stlport4=yes until such a functionality is in place.
</span><br>
<p>Nice. This workaround works. I don't suppose there's a similar
<br>
workaround to unset &quot;wl&quot; in the FC libtool section? If not, I think we
<br>
still need the heinous post-configure workaround script. Otherwise,
<br>
since there won't be a stable Libtool that contains the Sun Fortran
<br>
fix for a while, I propose the attached patch.
<br>
<p>Thanks,
<br>
Ethan
<br>
<p><p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Cheers, and thanks,
</span><br>
<span class="quotelev1">&gt; Ralf
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p>
<br><hr>
<ul>
<li>text/plain attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-4943/patch-libtool-for-sun-studio-2.diff">patch-libtool-for-sun-studio-2.diff</a>
</ul>
<!-- attachment="patch-libtool-for-sun-studio-2.diff" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4944.php">Jeff Squyres: "Re: [OMPI devel] RFC: Add SunStudio/Libtool helper script	for	post-configure"</a>
<li><strong>Previous message:</strong> <a href="4942.php">Jeff Squyres: "[OMPI devel] SC08 slides"</a>
<li><strong>In reply to:</strong> <a href="4941.php">Ralf Wildenhues: "Re: [OMPI devel] RFC: Add SunStudio/Libtool helper script for	post-configure"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4946.php">Ralf Wildenhues: "Re: [OMPI devel] RFC: Add SunStudio/Libtool helper script for	post-configure"</a>
<li><strong>Reply:</strong> <a href="4946.php">Ralf Wildenhues: "Re: [OMPI devel] RFC: Add SunStudio/Libtool helper script for	post-configure"</a>
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

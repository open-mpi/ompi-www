<?
$subject_val = "Re: [OMPI devel] RFC: Add SunStudio/Libtool helper script	for	post-configure";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Nov 21 06:55:33 2008" -->
<!-- isoreceived="20081121115533" -->
<!-- sent="Fri, 21 Nov 2008 06:55:28 -0500" -->
<!-- isosent="20081121115528" -->
<!-- name="Terry Dontje" -->
<!-- email="Terry.Dontje_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: Add SunStudio/Libtool helper script	for	post-configure" -->
<!-- id="4926A1B0.2010705_at_sun.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RFC: Add SunStudio/Libtool helper script	for	post-configure<br>
<strong>From:</strong> Terry Dontje (<em>Terry.Dontje_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-11-21 06:55:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4941.php">Ralf Wildenhues: "Re: [OMPI devel] RFC: Add SunStudio/Libtool helper script for	post-configure"</a>
<li><strong>Previous message:</strong> <a href="4939.php">Ralph Castain: "Re: [OMPI devel] RFC: merge windows branch into trunk"</a>
<li><strong>In reply to:</strong> <a href="4937.php">Ethan Mallove: "Re: [OMPI devel] RFC: Add SunStudio/Libtool helper script for	post-configure"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4944.php">Jeff Squyres: "Re: [OMPI devel] RFC: Add SunStudio/Libtool helper script	for	post-configure"</a>
<li><strong>Reply:</strong> <a href="4944.php">Jeff Squyres: "Re: [OMPI devel] RFC: Add SunStudio/Libtool helper script	for	post-configure"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ethan Mallove wrote:
<br>
<span class="quotelev3">&gt;&gt;&gt; I'm still running into the Cstd/stlport4 issue with 2.2.6. That is,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; this line appears in the libtool script:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   postdeps=&quot;-library=Cstd -library=Crun&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       
</span><br>
<span class="quotelev2">&gt;&gt; Do you have the string &quot; -library=stlport4 &quot; in $CXX $CXXFLAGS?
</span><br>
<span class="quotelev2">&gt;&gt; If not, then how can Libtool detect that you use stlport?
</span><br>
<span class="quotelev2">&gt;&gt;     
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Ethan
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   
</span><br>
I think Ethan's point above is important.  We went through great lengths 
<br>
earlier this year to make Open MPI STL agnostic so an application can 
<br>
choose which STL it would like to link in.  In other words there really 
<br>
should be no need to tie (link) libmpi to a specific STL thus allowing 
<br>
the application to do the actual linking to the STL it prefers.
<br>
<p>--td
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4941.php">Ralf Wildenhues: "Re: [OMPI devel] RFC: Add SunStudio/Libtool helper script for	post-configure"</a>
<li><strong>Previous message:</strong> <a href="4939.php">Ralph Castain: "Re: [OMPI devel] RFC: merge windows branch into trunk"</a>
<li><strong>In reply to:</strong> <a href="4937.php">Ethan Mallove: "Re: [OMPI devel] RFC: Add SunStudio/Libtool helper script for	post-configure"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4944.php">Jeff Squyres: "Re: [OMPI devel] RFC: Add SunStudio/Libtool helper script	for	post-configure"</a>
<li><strong>Reply:</strong> <a href="4944.php">Jeff Squyres: "Re: [OMPI devel] RFC: Add SunStudio/Libtool helper script	for	post-configure"</a>
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

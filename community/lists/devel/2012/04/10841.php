<?
$subject_val = "Re: [OMPI devel] OpenMPI and R";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Apr  6 11:21:29 2012" -->
<!-- isoreceived="20120406152129" -->
<!-- sent="Fri, 6 Apr 2012 11:21:23 -0400" -->
<!-- isosent="20120406152123" -->
<!-- name="Benedict Holland" -->
<!-- email="benedict.m.holland_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] OpenMPI and R" -->
<!-- id="CAD+mzoy-yf=Ksz3S3gfaxYCP87tj3Pzd6ZX_vTeYS26xBwkmFA_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="320D8823-59CF-42D1-96F0-080969BDB649_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] OpenMPI and R<br>
<strong>From:</strong> Benedict Holland (<em>benedict.m.holland_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-04-06 11:21:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10842.php">Ralph Castain: "Re: [OMPI devel] [EXTERNAL] Re: Developers Meeting"</a>
<li><strong>Previous message:</strong> <a href="10840.php">Jeffrey Squyres: "Re: [OMPI devel] OpenMPI and R"</a>
<li><strong>In reply to:</strong> <a href="10840.php">Jeffrey Squyres: "Re: [OMPI devel] OpenMPI and R"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10837.php">TERRY DONTJE: "Re: [OMPI devel] OpenMPI and R"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Oh this actually does make a lot of sense. The kicker is that Rmpi doesn't
<br>
like to use OMPI and really loves to use LAM so I have to use R in batch
<br>
mode by running mpirun -np 12 and specify the host file. I have a bad
<br>
feeling that this is loading the library 12 times, once for each R
<br>
namespace. While this is annoying, not having Rmpi working was far more so
<br>
and ram is cheap. I do agree whole heatedly that dynamic libraries are far
<br>
superior to static ones but I wonder if setting the configuration by
<br>
default to build both would allow those applications which require the
<br>
static libraries to compile to compile but at the same time getting the
<br>
applications which use dynamic loading libraries to exist side by side. I
<br>
don't plan on writing applications which require -libmpi but I know that
<br>
there are developers not nearly in tune with this line of thinking or know
<br>
the difference between static and dynamic libraries.
<br>
<p>Also this was tripping me up for weeks. I will let the Rmpi developer know
<br>
though and hopefully they can shift code to the dynamic libraries or
<br>
perhaps take part in development of the library to make it load dynamic
<br>
libraries.
<br>
<p>Anyway Jeff, thank you for a wonderful explication. I wonder if this should
<br>
be posted anywhere on OpenMPI as a note for Rmpi developers which desire to
<br>
compile OMPI themselves. The packages which exist out there are multiple
<br>
years old at this point, at least for ubuntu and the released version was
<br>
actually one of your development releases and had several large bug fixes
<br>
since then.
<br>
<p>BTW, I don't see myself not using OMPI for a while, are there any simple
<br>
projects which I might be able to work on to get to know the code base and
<br>
maybe move up the chain? Fixing some low hanging fruit bugs and learning
<br>
how to debug OMPI would be optimal.
<br>
<p>Thanks again,
<br>
~Ben
<br>
<p>On Fri, Apr 6, 2012 at 8:45 AM, Jeffrey Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; On Apr 5, 2012, at 9:07 PM, Benedict Holland wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Oh how interesting and I hope this helps someone. Following another
</span><br>
<span class="quotelev1">&gt; link, I had to use:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; ./configure --prefix /usr --enable-shared --enable-static
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This makes sense.  You were falling victim to the fact that R dlopens
</span><br>
<span class="quotelev1">&gt; libmpi as a dynamic library in a private namespace.  Hence, when Open MPI
</span><br>
<span class="quotelev1">&gt; then dlopens its own plugins, it can't find libmpi's symbols.  This is a
</span><br>
<span class="quotelev1">&gt; generic problem with any system that opens plugins that, themselves, open
</span><br>
<span class="quotelev1">&gt; plugns.  I wish there was a better solution to this -- the OS guys need to
</span><br>
<span class="quotelev1">&gt; give us a better mechanism here.  :-(
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; OMPI's --enable-static option does two things:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; - it builds libmpi.a (vs. libmpi.so)
</span><br>
<span class="quotelev1">&gt; - it slurps all of OMPI's plugins into libmpi.a (so it doesn't need to
</span><br>
<span class="quotelev1">&gt; dlopen anything at run-time)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It's the latter point that is saving you.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Note that you could also just --disable-dlopen (vs. --disable-shared
</span><br>
<span class="quotelev1">&gt; --enable-static), which just does the latter of the above things (meaning:
</span><br>
<span class="quotelev1">&gt; OMPI still builds libmpi.so), and it should also work for you.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; when compiling this for Rmpi. Just curious, why isn't --enable-static a
</span><br>
<span class="quotelev1">&gt; default option?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Among other reasons, shared libraries generally help save memory at run
</span><br>
<span class="quotelev1">&gt; time.  This is somewhat important as core counts go up.  If you &quot;mpirun -np
</span><br>
<span class="quotelev1">&gt; 32&quot; on a single, 32-core machine, would you rather have 32 independent
</span><br>
<span class="quotelev1">&gt; copies of libmpi.a loaded into RAM, or just one copy that all processes
</span><br>
<span class="quotelev1">&gt; share?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Using libmpi.so enables the latter option.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Make sense?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-10841/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10842.php">Ralph Castain: "Re: [OMPI devel] [EXTERNAL] Re: Developers Meeting"</a>
<li><strong>Previous message:</strong> <a href="10840.php">Jeffrey Squyres: "Re: [OMPI devel] OpenMPI and R"</a>
<li><strong>In reply to:</strong> <a href="10840.php">Jeffrey Squyres: "Re: [OMPI devel] OpenMPI and R"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10837.php">TERRY DONTJE: "Re: [OMPI devel] OpenMPI and R"</a>
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

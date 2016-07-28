<?
$subject_val = "Re: [OMPI devel] vt integration -- still problems on os x";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jan 14 04:43:49 2008" -->
<!-- isoreceived="20080114094349" -->
<!-- sent="Mon, 14 Jan 2008 10:43:43 +0100" -->
<!-- isosent="20080114094343" -->
<!-- name="Matthias Jurenz" -->
<!-- email="matthias.jurenz_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] vt integration -- still problems on os x" -->
<!-- id="1200303823.5870.21.camel_at_ricolap" -->
<!-- charset="utf-8" -->
<!-- inreplyto="B08210F9-6208-4430-B107-31EA134BA54F_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] vt integration -- still problems on os x<br>
<strong>From:</strong> Matthias Jurenz (<em>matthias.jurenz_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-01-14 04:43:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2971.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [PATCH] openib btl: extensable cpcselection	enablement"</a>
<li><strong>Previous message:</strong> <a href="2969.php">Pavel Shamis (Pasha): "Re: [OMPI devel] [PATCH] openib btl: extensable cpc selection	enablement"</a>
<li><strong>In reply to:</strong> <a href="2966.php">Jeff Squyres: "Re: [OMPI devel] vt integration -- still problems on os x"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2974.php">Jeff Squyres: "Re: [OMPI devel] vt integration -- still problems on os x"</a>
<li><strong>Reply:</strong> <a href="2974.php">Jeff Squyres: "Re: [OMPI devel] vt integration -- still problems on os x"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Jeff,
<br>
<p>unfortunalety, also for this problem I need some more information,
<br>
because I could 
<br>
not reproduce this error on our Leopard...
<br>
Please add the option '-vt:verbose' to the compile command in order that
<br>
I can see what
<br>
the VT's compiler wrapper do. Futhermore, could you send me the source
<br>
file hello.c?
<br>
<p>Thanks, Matthias
<br>
<p>On Fr, 2008-01-11 at 13:18 -0500, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; I am able to compile now on OS X -- great!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; However, I seem to get some weird errors when running on Leopard:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [13:14] beezle:~/tmp/foo % mpicc-vt ../hello.c -o hello
</span><br>
<span class="quotelev1">&gt; [13:14] beezle:~/tmp/foo % nm hello &gt; hello.nm
</span><br>
<span class="quotelev1">&gt; [13:14] beezle:~/tmp/foo % setenv VT_NMFILE ~/tmp/foo/hello.nm
</span><br>
<span class="quotelev1">&gt; [13:14] beezle:~/tmp/foo % mpirun -np 4 hello
</span><br>
<span class="quotelev1">&gt; Hello, world!
</span><br>
<span class="quotelev1">&gt; Hello, world!
</span><br>
<span class="quotelev1">&gt; Hello, world!
</span><br>
<span class="quotelev1">&gt; vtunify: Error: Could not open file ./a.1.uctl
</span><br>
<span class="quotelev1">&gt; Hello, world!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; That's a weird one -- here's what the dir looks like:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [13:14] beezle:~/tmp/foo % ls -l
</span><br>
<span class="quotelev1">&gt; total 352
</span><br>
<span class="quotelev1">&gt; drwxrwxr-x   7 jsquyres  staff     238 Jan 11 13:14 ./
</span><br>
<span class="quotelev1">&gt; drwxrwxr-x  41 jsquyres  staff    1394 Jan 11 13:14 ../
</span><br>
<span class="quotelev1">&gt; -rw-rw-r--   1 jsquyres  staff    1601 Jan 11 13:14 a.0.def.z
</span><br>
<span class="quotelev1">&gt; -rw-rw-r--   1 jsquyres  staff      26 Jan 11 13:14 a.1.events.z
</span><br>
<span class="quotelev1">&gt; -rw-rw-r--   1 jsquyres  staff       4 Jan 11 13:14 a.otf
</span><br>
<span class="quotelev1">&gt; -rwxrwxr-x   1 jsquyres  staff  150336 Jan 11 13:14 hello*
</span><br>
<span class="quotelev1">&gt; -rw-rw-r--   1 jsquyres  staff   13266 Jan 11 13:14 hello.nm
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Just for the heckuvit, let's try running again...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [13:14] beezle:~/tmp/foo % mpirun -np 4 hello
</span><br>
<span class="quotelev1">&gt; Hello, world!
</span><br>
<span class="quotelev1">&gt; Hello, world!
</span><br>
<span class="quotelev1">&gt; Hello, world!
</span><br>
<span class="quotelev1">&gt; Hello, world!
</span><br>
<span class="quotelev1">&gt; Assertion failed: (p_vecLocDefs-&gt;size() &gt; 0), function createGlobal,  
</span><br>
<span class="quotelev1">&gt; file vt_unify_defs.cc, line 508.
</span><br>
<span class="quotelev1">&gt; vtunify: Error: Could not open file ./a.1.uctl
</span><br>
<span class="quotelev1">&gt; [13:14] beezle:~/tmp/foo %
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Yoinks -- an assertion failure...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Successive runs seems to be variations on these errors (the assertion  
</span><br>
<span class="quotelev1">&gt; failure and various &quot;could not open&quot; and &quot;could not remove&quot; errors).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Jan 11, 2008, at 11:45 AM, Matthias Jurenz wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Hi Jeff,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I could reproduce the linker problem with the sf.net GCC. Thanks for  
</span><br>
<span class="quotelev2">&gt; &gt; your hint.
</span><br>
<span class="quotelev2">&gt; &gt; A header include was missing for STL's functional objects. :-(
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Matthias
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Do, 2008-01-10 at 13:21 -0500, Jeff Squyres wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; On Jan 10, 2008, at 10:19 AM, Andreas Kn&#195;&#188;pfer wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; unfortunately, we're unable to reproduce this error. Could you pass
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; some more
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; information about your configure command line? This was done with
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; gcc 4.2 on
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; mac os X, wasn't it?
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; I'm on Leopard on my MBP with:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; ./configure --prefix=/Users/jsquyres/bogus --enable-mpi-f90 -- 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; without-
</span><br>
<span class="quotelev3">&gt; &gt;&gt; threads
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; But I might see the problem here -- I just realized/remembered that
</span><br>
<span class="quotelev3">&gt; &gt;&gt; I'm using the sf.net GCC install (hpc.sf.net).  If I force /usr/bin/
</span><br>
<span class="quotelev3">&gt; &gt;&gt; gcc (and friends), it seems to work:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; ./configure --prefix=/Users/jsquyres/bogus CC=/usr/bin/gcc CXX=/usr/
</span><br>
<span class="quotelev3">&gt; &gt;&gt; bin/g++ --disable-mpi-fortran
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; However, the hpc.sf.net OS X compilers are not uncommon (because they
</span><br>
<span class="quotelev3">&gt; &gt;&gt; provide fortran compiler support for OS X).  Do you think you'll be
</span><br>
<span class="quotelev3">&gt; &gt;&gt; able to test with these compilers?
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt; --
</span><br>
<span class="quotelev2">&gt; &gt; Matthias Jurenz,
</span><br>
<span class="quotelev2">&gt; &gt; Center for Information Services and
</span><br>
<span class="quotelev2">&gt; &gt; High Performance Computing (ZIH), TU Dresden,
</span><br>
<span class="quotelev2">&gt; &gt; Willersbau A106, Zellescher Weg 12, 01062 Dresden
</span><br>
<span class="quotelev2">&gt; &gt; phone +49-351-463-31945, fax +49-351-463-37773
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p><pre>
--
Matthias Jurenz,
Center for Information Services and 
High Performance Computing (ZIH), TU Dresden, 
Willersbau A106, Zellescher Weg 12, 01062 Dresden
phone +49-351-463-31945, fax +49-351-463-37773
</pre>
<p>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-2970/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2971.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [PATCH] openib btl: extensable cpcselection	enablement"</a>
<li><strong>Previous message:</strong> <a href="2969.php">Pavel Shamis (Pasha): "Re: [OMPI devel] [PATCH] openib btl: extensable cpc selection	enablement"</a>
<li><strong>In reply to:</strong> <a href="2966.php">Jeff Squyres: "Re: [OMPI devel] vt integration -- still problems on os x"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2974.php">Jeff Squyres: "Re: [OMPI devel] vt integration -- still problems on os x"</a>
<li><strong>Reply:</strong> <a href="2974.php">Jeff Squyres: "Re: [OMPI devel] vt integration -- still problems on os x"</a>
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

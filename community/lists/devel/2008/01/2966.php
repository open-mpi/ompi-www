<?
$subject_val = "Re: [OMPI devel] vt integration -- still problems on os x";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan 11 13:19:11 2008" -->
<!-- isoreceived="20080111181911" -->
<!-- sent="Fri, 11 Jan 2008 13:18:48 -0500" -->
<!-- isosent="20080111181848" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] vt integration -- still problems on os x" -->
<!-- id="B08210F9-6208-4430-B107-31EA134BA54F_at_cisco.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="1200069942.5957.36.camel_at_ricolap" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-01-11 13:18:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2967.php">Rayson Ho: "[OMPI devel] On Host Topology Description (carto)"</a>
<li><strong>Previous message:</strong> <a href="2965.php">Matthias Jurenz: "Re: [OMPI devel] vt integration -- still problems on os x"</a>
<li><strong>In reply to:</strong> <a href="2965.php">Matthias Jurenz: "Re: [OMPI devel] vt integration -- still problems on os x"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2970.php">Matthias Jurenz: "Re: [OMPI devel] vt integration -- still problems on os x"</a>
<li><strong>Reply:</strong> <a href="2970.php">Matthias Jurenz: "Re: [OMPI devel] vt integration -- still problems on os x"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I am able to compile now on OS X -- great!
<br>
<p>However, I seem to get some weird errors when running on Leopard:
<br>
<p>[13:14] beezle:~/tmp/foo % mpicc-vt ../hello.c -o hello
<br>
[13:14] beezle:~/tmp/foo % nm hello &gt; hello.nm
<br>
[13:14] beezle:~/tmp/foo % setenv VT_NMFILE ~/tmp/foo/hello.nm
<br>
[13:14] beezle:~/tmp/foo % mpirun -np 4 hello
<br>
Hello, world!
<br>
Hello, world!
<br>
Hello, world!
<br>
vtunify: Error: Could not open file ./a.1.uctl
<br>
Hello, world!
<br>
<p>That's a weird one -- here's what the dir looks like:
<br>
<p>[13:14] beezle:~/tmp/foo % ls -l
<br>
total 352
<br>
drwxrwxr-x   7 jsquyres  staff     238 Jan 11 13:14 ./
<br>
drwxrwxr-x  41 jsquyres  staff    1394 Jan 11 13:14 ../
<br>
-rw-rw-r--   1 jsquyres  staff    1601 Jan 11 13:14 a.0.def.z
<br>
-rw-rw-r--   1 jsquyres  staff      26 Jan 11 13:14 a.1.events.z
<br>
-rw-rw-r--   1 jsquyres  staff       4 Jan 11 13:14 a.otf
<br>
-rwxrwxr-x   1 jsquyres  staff  150336 Jan 11 13:14 hello*
<br>
-rw-rw-r--   1 jsquyres  staff   13266 Jan 11 13:14 hello.nm
<br>
<p>Just for the heckuvit, let's try running again...
<br>
<p>[13:14] beezle:~/tmp/foo % mpirun -np 4 hello
<br>
Hello, world!
<br>
Hello, world!
<br>
Hello, world!
<br>
Hello, world!
<br>
Assertion failed: (p_vecLocDefs-&gt;size() &gt; 0), function createGlobal,  
<br>
file vt_unify_defs.cc, line 508.
<br>
vtunify: Error: Could not open file ./a.1.uctl
<br>
[13:14] beezle:~/tmp/foo %
<br>
<p>Yoinks -- an assertion failure...
<br>
<p>Successive runs seems to be variations on these errors (the assertion  
<br>
failure and various &quot;could not open&quot; and &quot;could not remove&quot; errors).
<br>
<p><p><p>On Jan 11, 2008, at 11:45 AM, Matthias Jurenz wrote:
<br>
<p><span class="quotelev1">&gt; Hi Jeff,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I could reproduce the linker problem with the sf.net GCC. Thanks for  
</span><br>
<span class="quotelev1">&gt; your hint.
</span><br>
<span class="quotelev1">&gt; A header include was missing for STL's functional objects. :-(
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Matthias
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Do, 2008-01-10 at 13:21 -0500, Jeff Squyres wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Jan 10, 2008, at 10:19 AM, Andreas Kn&#252;pfer wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; unfortunately, we're unable to reproduce this error. Could you pass
</span><br>
<span class="quotelev3">&gt;&gt; &gt; some more
</span><br>
<span class="quotelev3">&gt;&gt; &gt; information about your configure command line? This was done with
</span><br>
<span class="quotelev3">&gt;&gt; &gt; gcc 4.2 on
</span><br>
<span class="quotelev3">&gt;&gt; &gt; mac os X, wasn't it?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I'm on Leopard on my MBP with:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ./configure --prefix=/Users/jsquyres/bogus --enable-mpi-f90 -- 
</span><br>
<span class="quotelev2">&gt;&gt; without-
</span><br>
<span class="quotelev2">&gt;&gt; threads
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; But I might see the problem here -- I just realized/remembered that
</span><br>
<span class="quotelev2">&gt;&gt; I'm using the sf.net GCC install (hpc.sf.net).  If I force /usr/bin/
</span><br>
<span class="quotelev2">&gt;&gt; gcc (and friends), it seems to work:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ./configure --prefix=/Users/jsquyres/bogus CC=/usr/bin/gcc CXX=/usr/
</span><br>
<span class="quotelev2">&gt;&gt; bin/g++ --disable-mpi-fortran
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; However, the hpc.sf.net OS X compilers are not uncommon (because they
</span><br>
<span class="quotelev2">&gt;&gt; provide fortran compiler support for OS X).  Do you think you'll be
</span><br>
<span class="quotelev2">&gt;&gt; able to test with these compilers?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Matthias Jurenz,
</span><br>
<span class="quotelev1">&gt; Center for Information Services and
</span><br>
<span class="quotelev1">&gt; High Performance Computing (ZIH), TU Dresden,
</span><br>
<span class="quotelev1">&gt; Willersbau A106, Zellescher Weg 12, 01062 Dresden
</span><br>
<span class="quotelev1">&gt; phone +49-351-463-31945, fax +49-351-463-37773
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2967.php">Rayson Ho: "[OMPI devel] On Host Topology Description (carto)"</a>
<li><strong>Previous message:</strong> <a href="2965.php">Matthias Jurenz: "Re: [OMPI devel] vt integration -- still problems on os x"</a>
<li><strong>In reply to:</strong> <a href="2965.php">Matthias Jurenz: "Re: [OMPI devel] vt integration -- still problems on os x"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2970.php">Matthias Jurenz: "Re: [OMPI devel] vt integration -- still problems on os x"</a>
<li><strong>Reply:</strong> <a href="2970.php">Matthias Jurenz: "Re: [OMPI devel] vt integration -- still problems on os x"</a>
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

<?
$subject_val = "Re: [OMPI devel] vt integration -- still problems on os x";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan 15 07:50:24 2008" -->
<!-- isoreceived="20080115125024" -->
<!-- sent="Tue, 15 Jan 2008 07:50:18 -0500" -->
<!-- isosent="20080115125018" -->
<!-- name="Terry Dontje" -->
<!-- email="Terry.Dontje_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] vt integration -- still problems on os x" -->
<!-- id="478CAC0A.503_at_sun.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="FBF524FF-C0F0-415C-AA09-54618FBC550C_at_cisco.com" -->
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
<strong>From:</strong> Terry Dontje (<em>Terry.Dontje_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-01-15 07:50:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2980.php">Rainer Keller: "Re: [OMPI devel] Integrating the memchecker branch"</a>
<li><strong>Previous message:</strong> <a href="2978.php">Peter Breitenlohner: "[OMPI devel] patch for mpirun.1 manpage"</a>
<li><strong>In reply to:</strong> <a href="2974.php">Jeff Squyres: "Re: [OMPI devel] vt integration -- still problems on os x"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Sun has no objections to the vt integration.
<br>
<p>--td
<br>
Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; Truly weird; I am now unable to reproduce the problem as well.  Can  
</span><br>
<span class="quotelev1">&gt; you think of any dumb user-level error that I could have done to  
</span><br>
<span class="quotelev1">&gt; create this problem?  It was very repeatable the other day.  :-(
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Oh well.  Barring any objections from Sun, I say that this stuff  
</span><br>
<span class="quotelev1">&gt; should *finally* be merged back up to the trunk (you guys have the  
</span><br>
<span class="quotelev1">&gt; patience of saints -- many thanks for all your work! :-) ).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; One last tibit that would be nice to have fixed, though, is to set  
</span><br>
<span class="quotelev1">&gt; svn:ignore throughout the vt tree to properly ignore files so that an  
</span><br>
<span class="quotelev1">&gt; &quot;svn status&quot; doesn't turn up a bunch of &quot;?&quot; files that really should  
</span><br>
<span class="quotelev1">&gt; be ignored by SVN:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [8:09] beezle:~/svn/vt-integration/ompi/contrib/vt % svn st | egrep '^ 
</span><br>
<span class="quotelev1">&gt; \?' | wc
</span><br>
<span class="quotelev1">&gt;        90     180    3149
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jan 14, 2008, at 4:43 AM, Matthias Jurenz wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev2">&gt;&gt; Hi Jeff,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; unfortunalety, also for this problem I need some more information,  
</span><br>
<span class="quotelev2">&gt;&gt; because I could
</span><br>
<span class="quotelev2">&gt;&gt; not reproduce this error on our Leopard...
</span><br>
<span class="quotelev2">&gt;&gt; Please add the option '-vt:verbose' to the compile command in order  
</span><br>
<span class="quotelev2">&gt;&gt; that I can see what
</span><br>
<span class="quotelev2">&gt;&gt; the VT's compiler wrapper do. Futhermore, could you send me the  
</span><br>
<span class="quotelev2">&gt;&gt; source file hello.c?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks, Matthias
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Fr, 2008-01-11 at 13:18 -0500, Jeff Squyres wrote:
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I am able to compile now on OS X -- great!
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; However, I seem to get some weird errors when running on Leopard:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [13:14] beezle:~/tmp/foo % mpicc-vt ../hello.c -o hello
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [13:14] beezle:~/tmp/foo % nm hello &gt; hello.nm
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [13:14] beezle:~/tmp/foo % setenv VT_NMFILE ~/tmp/foo/hello.nm
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [13:14] beezle:~/tmp/foo % mpirun -np 4 hello
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hello, world!
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hello, world!
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hello, world!
</span><br>
<span class="quotelev3">&gt;&gt;&gt; vtunify: Error: Could not open file ./a.1.uctl
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hello, world!
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; That's a weird one -- here's what the dir looks like:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [13:14] beezle:~/tmp/foo % ls -l
</span><br>
<span class="quotelev3">&gt;&gt;&gt; total 352
</span><br>
<span class="quotelev3">&gt;&gt;&gt; drwxrwxr-x   7 jsquyres  staff     238 Jan 11 13:14 ./
</span><br>
<span class="quotelev3">&gt;&gt;&gt; drwxrwxr-x  41 jsquyres  staff    1394 Jan 11 13:14 ../
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -rw-rw-r--   1 jsquyres  staff    1601 Jan 11 13:14 a.0.def.z
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -rw-rw-r--   1 jsquyres  staff      26 Jan 11 13:14 a.1.events.z
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -rw-rw-r--   1 jsquyres  staff       4 Jan 11 13:14 a.otf
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -rwxrwxr-x   1 jsquyres  staff  150336 Jan 11 13:14 hello*
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -rw-rw-r--   1 jsquyres  staff   13266 Jan 11 13:14 hello.nm
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Just for the heckuvit, let's try running again...
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [13:14] beezle:~/tmp/foo % mpirun -np 4 hello
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hello, world!
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hello, world!
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hello, world!
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hello, world!
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Assertion failed: (p_vecLocDefs-&gt;size() &gt; 0), function createGlobal,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; file vt_unify_defs.cc, line 508.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; vtunify: Error: Could not open file ./a.1.uctl
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [13:14] beezle:~/tmp/foo %
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Yoinks -- an assertion failure...
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Successive runs seems to be variations on these errors (the assertion
</span><br>
<span class="quotelev3">&gt;&gt;&gt; failure and various &quot;could not open&quot; and &quot;could not remove&quot; errors).
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Jan 11, 2008, at 11:45 AM, Matthias Jurenz wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Hi Jeff,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I could reproduce the linker problem with the sf.net GCC. Thanks  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         
</span><br>
<span class="quotelev3">&gt;&gt;&gt; for
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; your hint.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; A header include was missing for STL's functional objects. :-(
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Matthias
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Do, 2008-01-10 at 13:21 -0500, Jeff Squyres wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; On Jan 10, 2008, at 10:19 AM, Andreas Kn&#252;pfer wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;           
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; unfortunately, we're unable to reproduce this error. Could you  
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;             
</span><br>
<span class="quotelev3">&gt;&gt;&gt; pass
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; some more
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; information about your configure command line? This was done  
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;             
</span><br>
<span class="quotelev3">&gt;&gt;&gt; with
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; gcc 4.2 on
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; mac os X, wasn't it?
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;             
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I'm on Leopard on my MBP with:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; ./configure --prefix=/Users/jsquyres/bogus --enable-mpi-f90 --
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; without-
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; threads
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; But I might see the problem here -- I just realized/remembered  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;           
</span><br>
<span class="quotelev3">&gt;&gt;&gt; that
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I'm using the sf.net GCC install (hpc.sf.net).  If I force /usr/ 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;           
</span><br>
<span class="quotelev3">&gt;&gt;&gt; bin/
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; gcc (and friends), it seems to work:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; ./configure --prefix=/Users/jsquyres/bogus CC=/usr/bin/gcc CXX=/ 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;           
</span><br>
<span class="quotelev3">&gt;&gt;&gt; usr/
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; bin/g++ --disable-mpi-fortran
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; However, the hpc.sf.net OS X compilers are not uncommon (because  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;           
</span><br>
<span class="quotelev3">&gt;&gt;&gt; they
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; provide fortran compiler support for OS X).  Do you think you'll  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;           
</span><br>
<span class="quotelev3">&gt;&gt;&gt; be
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; able to test with these compilers?
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;           
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Matthias Jurenz,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Center for Information Services and
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; High Performance Computing (ZIH), TU Dresden,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Willersbau A106, Zellescher Weg 12, 01062 Dresden
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; phone +49-351-463-31945, fax +49-351-463-37773
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Matthias Jurenz,
</span><br>
<span class="quotelev2">&gt;&gt; Center for Information Services and
</span><br>
<span class="quotelev2">&gt;&gt; High Performance Computing (ZIH), TU Dresden,
</span><br>
<span class="quotelev2">&gt;&gt; Willersbau A106, Zellescher Weg 12, 01062 Dresden
</span><br>
<span class="quotelev2">&gt;&gt; phone +49-351-463-31945, fax +49-351-463-37773
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2980.php">Rainer Keller: "Re: [OMPI devel] Integrating the memchecker branch"</a>
<li><strong>Previous message:</strong> <a href="2978.php">Peter Breitenlohner: "[OMPI devel] patch for mpirun.1 manpage"</a>
<li><strong>In reply to:</strong> <a href="2974.php">Jeff Squyres: "Re: [OMPI devel] vt integration -- still problems on os x"</a>
<!-- nextthread="start" -->
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

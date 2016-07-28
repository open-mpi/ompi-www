<?
$subject_val = "Re: [OMPI users] OpenMPI 1.3.2 with PathScale 3.2";
include("../../include/msg-header.inc");
?>
<!-- received="Mon May 18 21:09:19 2009" -->
<!-- isoreceived="20090519010919" -->
<!-- sent="Mon, 18 May 2009 21:09:13 -0400" -->
<!-- isosent="20090519010913" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI 1.3.2 with PathScale 3.2" -->
<!-- id="A57FFE3D-E906-4F2C-A0E8-6363527F2DB6_at_cisco.com" -->
<!-- charset="WINDOWS-1252" -->
<!-- inreplyto="4A11CE79.906_at_penguincomputing.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] OpenMPI 1.3.2 with PathScale 3.2<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-05-18 21:09:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9376.php">Jeff Squyres: "Re: [OMPI users] Problem installing Dalton with OpenMPI overPelicanHPC"</a>
<li><strong>Previous message:</strong> <a href="9374.php">Eugene Loh: "Re: [OMPI users] MPI processes hang when using OpenMPI 1.3.2 and Gcc-4.4.0"</a>
<li><strong>In reply to:</strong> <a href="9372.php">Joshua Bernstein: "Re: [OMPI users] OpenMPI 1.3.2 with PathScale 3.2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9391.php">Joshua Bernstein: "Re: [OMPI users] OpenMPI 1.3.2 with PathScale 3.2"</a>
<li><strong>Reply:</strong> <a href="9391.php">Joshua Bernstein: "Re: [OMPI users] OpenMPI 1.3.2 with PathScale 3.2"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hah; this is probably at least tangentially related to
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/faq/?category=building#pathscale-broken-with-mpi-c++-api">http://www.open-mpi.org/faq/?category=building#pathscale-broken-with-mpi-c++-api</a>
<br>
<p>I'll be kind and say that Pathscale has been &quot;unwilling to help on  
<br>
these kinds of issues&quot; with me in the past as well.  :-)
<br>
<p>It's not entirely clear from the text, but I guess that sounds like  
<br>
Pathscale is unsupported on GCC 3.x systems...?  Is that what you  
<br>
parse his answer to mean?
<br>
<p><p><p><p>On May 18, 2009, at 5:09 PM, Joshua Bernstein wrote:
<br>
<p><span class="quotelev1">&gt; Well,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         I spoke Gautam Chakrabarti at Pathscale. It seems the long  
</span><br>
<span class="quotelev1">&gt; and short of it is
</span><br>
<span class="quotelev1">&gt; that using OpenMP with C++ with a GNU3.3 (RHEL4) frontend creates some
</span><br>
<span class="quotelev1">&gt; limitations inside of pathCC. On a RHEL4 system, the compilier  
</span><br>
<span class="quotelev1">&gt; activates the
</span><br>
<span class="quotelev1">&gt; proper frontend for GCC 3.3, this is what creates the crash. As  
</span><br>
<span class="quotelev1">&gt; suggested I
</span><br>
<span class="quotelev1">&gt; forced the compilier to use the newer frontend with the -gnu4 option  
</span><br>
<span class="quotelev1">&gt; and the
</span><br>
<span class="quotelev1">&gt; build completes without an issue. Sad though that they aren't trying  
</span><br>
<span class="quotelev1">&gt; to be
</span><br>
<span class="quotelev1">&gt; backwards compatible, or even testing on RHEL4 systems. I imagine  
</span><br>
<span class="quotelev1">&gt; there is still
</span><br>
<span class="quotelev1">&gt; large group of people using RHEL4.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Perhaps this is an OMPI FAQ entry?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The full response from Pathscale appears below:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ---SNIP---
</span><br>
<span class="quotelev1">&gt; It appears you are using the compiler on a relatively old linux  
</span><br>
<span class="quotelev1">&gt; distribution
</span><br>
<span class="quotelev1">&gt; which has a default GCC compiler based on version 3.3. Our compiler  
</span><br>
<span class="quotelev1">&gt; has a
</span><br>
<span class="quotelev1">&gt; front-end that is activated on such systems, and a different newer  
</span><br>
<span class="quotelev1">&gt; improved
</span><br>
<span class="quotelev1">&gt; front-end which is activated on the newer GCC4-based systems. Our  
</span><br>
<span class="quotelev1">&gt; compiler is
</span><br>
<span class="quotelev1">&gt; tested on GCC-based systems with versions up to 4.2. I see that you  
</span><br>
<span class="quotelev1">&gt; are using
</span><br>
<span class="quotelev1">&gt; OpenMP (using -mp). C++ OpenMP has limitations when being used with  
</span><br>
<span class="quotelev1">&gt; the GNU3.3
</span><br>
<span class="quotelev1">&gt; based front-end, and is only fully supported when on a GNU4 based  
</span><br>
<span class="quotelev1">&gt; system.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; You can invoke the newer front-end by the option -gnu4 on a GNU3  
</span><br>
<span class="quotelev1">&gt; based system.
</span><br>
<span class="quotelev1">&gt; While compiling this particular file may work with -gnu4 on a GNU3  
</span><br>
<span class="quotelev1">&gt; based system,
</span><br>
<span class="quotelev1">&gt; it is generally not safe to use this option for C++ on a GNU3 based  
</span><br>
<span class="quotelev1">&gt; system due
</span><br>
<span class="quotelev1">&gt; to incompatibility issues.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The ideal fix would be to try your compilation on a GNU4 based linux  
</span><br>
<span class="quotelev1">&gt; distribution.
</span><br>
<span class="quotelev1">&gt; ---END SNIP---
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Joshua Bernstein
</span><br>
<span class="quotelev1">&gt; Software Engineer
</span><br>
<span class="quotelev1">&gt; Penguin Computing
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Jeff Squyres wrote:
</span><br>
<span class="quotelev2">&gt; &gt; FWIW, I'm able to duplicate the error.  Looks definitely like  
</span><br>
<span class="quotelev1">&gt; a[nother]
</span><br>
<span class="quotelev2">&gt; &gt; pathscale bug to me.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Perhaps David's suggestions to disable some of the optimizations may
</span><br>
<span class="quotelev2">&gt; &gt; help; otherwise, you can disable that entire chunk of code with the
</span><br>
<span class="quotelev2">&gt; &gt; following:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;    --enable-contrib-no-build=vt
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; (as Ralph mentioned, this VampirTrace code is an add-on to Open MPI;
</span><br>
<span class="quotelev2">&gt; &gt; it's not part of core OMPI itself)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On May 15, 2009, at 9:17 AM, David O. Gunter wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Pathscale supports -O3 (at least as of the 3.1 line).  Here are  
</span><br>
<span class="quotelev1">&gt; some
</span><br>
<span class="quotelev3">&gt; &gt;&gt; suggestions from the 3.2 Users Manual you may also want to try.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; -david
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; If there are numerical problems with -O3 -OPT:Ofast, then try  
</span><br>
<span class="quotelev1">&gt; either
</span><br>
<span class="quotelev3">&gt; &gt;&gt; of the
</span><br>
<span class="quotelev3">&gt; &gt;&gt; following:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;   -O3 -OPT:Ofast:ro=1
</span><br>
<span class="quotelev3">&gt; &gt;&gt;   -O3 -OPT:Ofast:div_split=OFF
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Note that &#146;ro&#146; is short for roundoff.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; -Ofast is equivalent to -O3 -ipa -OPT:Ofast -fno-math-errno - 
</span><br>
<span class="quotelev1">&gt; ffast-math
</span><br>
<span class="quotelev3">&gt; &gt;&gt; so similar cautions apply to it as to -O3 -OPT:Ofast.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; To use interprocedural analysis without the &quot;Ofast-type&quot;  
</span><br>
<span class="quotelev1">&gt; optimizations,
</span><br>
<span class="quotelev3">&gt; &gt;&gt; use either of the following:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;   -O3 -ipa
</span><br>
<span class="quotelev3">&gt; &gt;&gt;   -O2 -ipa
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Testing different optimizations can be automated by pathopt2. This
</span><br>
<span class="quotelev3">&gt; &gt;&gt; program
</span><br>
<span class="quotelev3">&gt; &gt;&gt; compiles and runs your program with a variety of compiler options  
</span><br>
<span class="quotelev1">&gt; and
</span><br>
<span class="quotelev3">&gt; &gt;&gt; creates a sorted list of the execution times for each run.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; --
</span><br>
<span class="quotelev3">&gt; &gt;&gt; David Gunter
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Los Alamos National Laboratory
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; Last I checked when we were building here, I'm not sure Pathscale
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; supports -O3. IIRC, O2 is the max supported value, though it  
</span><br>
<span class="quotelev1">&gt; has been
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; awhile since I played with it.
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; Have you checked the man page for it?
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; It could also be something in the VampirTrace code since that  
</span><br>
<span class="quotelev1">&gt; is where
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; you are failing. That is a contributed code - not part of OMPI  
</span><br>
<span class="quotelev1">&gt; itself
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; - so we would have to check with those developers.
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; On May 14, 2009, at 2:49 PM, &#197;ke Sandgren wrote:
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; On Thu, 2009-05-14 at 13:35 -0700, Joshua Bernstein wrote:
</span><br>
<span class="quotelev2">&gt; &gt;&gt; &gt;&gt;&gt; Greetings All,
</span><br>
<span class="quotelev2">&gt; &gt;&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt; &gt;&gt;&gt;     I'm trying to build OpenMPI 1.3.2 with the Pathscale  
</span><br>
<span class="quotelev1">&gt; compiler,
</span><br>
<span class="quotelev2">&gt; &gt;&gt; &gt;&gt;&gt; version 3.2. A
</span><br>
<span class="quotelev2">&gt; &gt;&gt; &gt;&gt;&gt; bit of the way through the build the compiler dies with what it
</span><br>
<span class="quotelev2">&gt; &gt;&gt; &gt;&gt;&gt; things is a bad
</span><br>
<span class="quotelev2">&gt; &gt;&gt; &gt;&gt;&gt; optimization. Has anybody else seen this, or know a work  
</span><br>
<span class="quotelev1">&gt; around for
</span><br>
<span class="quotelev2">&gt; &gt;&gt; &gt;&gt;&gt; it? I'm
</span><br>
<span class="quotelev2">&gt; &gt;&gt; &gt;&gt;&gt; going to take it up with Pathscale of course, but I thought I'd
</span><br>
<span class="quotelev2">&gt; &gt;&gt; &gt;&gt;&gt; throw it out here:
</span><br>
<span class="quotelev2">&gt; &gt;&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt; &gt;&gt;&gt; ---SNIP---
</span><br>
<span class="quotelev2">&gt; &gt;&gt; &gt;&gt;&gt; /opt/pathscale/bin/pathCC -DHAVE_CONFIG_H -I. -I../.. -I../../
</span><br>
<span class="quotelev2">&gt; &gt;&gt; &gt;&gt;&gt; extlib/otf/otflib
</span><br>
<span class="quotelev2">&gt; &gt;&gt; &gt;&gt;&gt; -I../../extlib/otf/otflib -I../../vtlib/ -I../../vtlib  -
</span><br>
<span class="quotelev2">&gt; &gt;&gt; &gt;&gt;&gt; D_GNU_SOURCE -mp
</span><br>
<span class="quotelev2">&gt; &gt;&gt; &gt;&gt;&gt; -DVT_OMP -O3 -DNDEBUG -finline-functions -pthread -MT vtfilter-
</span><br>
<span class="quotelev2">&gt; &gt;&gt; &gt;&gt;&gt; vt_tracefilter.o
</span><br>
<span class="quotelev2">&gt; &gt;&gt; &gt;&gt;&gt; -MD -MP -MF .deps/vtfilter-vt_tracefilter.Tpo -c -o vtfilter-
</span><br>
<span class="quotelev2">&gt; &gt;&gt; &gt;&gt;&gt; vt_tracefilter.o
</span><br>
<span class="quotelev2">&gt; &gt;&gt; &gt;&gt;&gt; `test -f 'vt_tracefilter.cc' || echo './'`vt_tracefilter.cc
</span><br>
<span class="quotelev2">&gt; &gt;&gt; &gt;&gt;&gt; Signal: Segmentation fault in Global Optimization -- Dead Store
</span><br>
<span class="quotelev2">&gt; &gt;&gt; &gt;&gt;&gt; Elimination phase.
</span><br>
<span class="quotelev2">&gt; &gt;&gt; &gt;&gt;&gt; Error: Signal Segmentation fault in phase Global Optimization  
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev2">&gt; &gt;&gt; &gt;&gt;&gt; Dead Store
</span><br>
<span class="quotelev2">&gt; &gt;&gt; &gt;&gt;&gt; Elimination -- processing aborted
</span><br>
<span class="quotelev2">&gt; &gt;&gt; &gt;&gt;&gt; *** Internal stack backtrace:
</span><br>
<span class="quotelev2">&gt; &gt;&gt; &gt;&gt;&gt; pathCC INTERNAL ERROR: /opt/pathscale/lib/3.2/be died due to  
</span><br>
<span class="quotelev1">&gt; signal 4
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; Haven't seen it. But I'm only using -O2 when building openmpi.
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; Report it quickly, if we're lucky they might get a fix into  
</span><br>
<span class="quotelev1">&gt; the 3.3
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; release that is due out very soon. (I just got the beta  
</span><br>
<span class="quotelev1">&gt; yesterday)
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; --
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; Ake Sandgren, HPC2N, Umea University, S-90187 Umea, Sweden
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; Internet: ake_at_[hidden]   Phone: +46 90 7866134 Fax: +46 90  
</span><br>
<span class="quotelev1">&gt; 7866126
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; Mobile: +46 70 7716134 WWW: <a href="http://www.hpc2n.umu.se">http://www.hpc2n.umu.se</a>
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; users mailing list
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt; &gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
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
<li><strong>Next message:</strong> <a href="9376.php">Jeff Squyres: "Re: [OMPI users] Problem installing Dalton with OpenMPI overPelicanHPC"</a>
<li><strong>Previous message:</strong> <a href="9374.php">Eugene Loh: "Re: [OMPI users] MPI processes hang when using OpenMPI 1.3.2 and Gcc-4.4.0"</a>
<li><strong>In reply to:</strong> <a href="9372.php">Joshua Bernstein: "Re: [OMPI users] OpenMPI 1.3.2 with PathScale 3.2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9391.php">Joshua Bernstein: "Re: [OMPI users] OpenMPI 1.3.2 with PathScale 3.2"</a>
<li><strong>Reply:</strong> <a href="9391.php">Joshua Bernstein: "Re: [OMPI users] OpenMPI 1.3.2 with PathScale 3.2"</a>
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

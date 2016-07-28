<?
$subject_val = "Re: [OMPI devel] === CREATE FAILURE ===";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jul 11 09:12:02 2008" -->
<!-- isoreceived="20080711131202" -->
<!-- sent="Fri, 11 Jul 2008 09:07:03 -0400" -->
<!-- isosent="20080711130703" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] === CREATE FAILURE ===" -->
<!-- id="65DB4415-0028-4D58-9BD2-74589DA67677_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="200807110124.m6B1OtJ5030614_at_eddie.osl.iu.edu" -->
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
<strong>Subject:</strong> Re: [OMPI devel] === CREATE FAILURE ===<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-07-11 09:07:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4313.php">Terry Dontje: "Re: [OMPI devel] v1.3 RM: need a ruling"</a>
<li><strong>Previous message:</strong> <a href="4311.php">Bogdan Costescu: "Re: [OMPI devel] open ib dependency question"</a>
<li><strong>Maybe in reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2007/11/2599.php">Josh Hursey: "Re: [OMPI devel] === CREATE FAILURE ==="</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4437.php">Jeff Squyres: "Re: [OMPI devel] === CREATE FAILURE ==="</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I can find no reason that this failed.  :-\
<br>
<p>I am unable to duplicate the problem, and this area of code has not  
<br>
changed in a while -- I don't know why plpa/src/plpa-taskset/parser.c  
<br>
would suddenly be left behind.
<br>
<p><p><p>On Jul 10, 2008, at 9:24 PM, MPI Team wrote:
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ERROR: Command returned a non-zero exist status
</span><br>
<span class="quotelev1">&gt;       make distcheck
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Start time: Thu Jul 10 21:00:14 EDT 2008
</span><br>
<span class="quotelev1">&gt; End time:   Thu Jul 10 21:24:55 EDT 2008
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; ======================================================================
</span><br>
<span class="quotelev1">&gt; [... previous lines snipped ...]
</span><br>
<span class="quotelev1">&gt; test -z &quot;&quot; || rm -f
</span><br>
<span class="quotelev1">&gt; rm -f class/.deps/.dirstamp
</span><br>
<span class="quotelev1">&gt; rm -f class/.dirstamp
</span><br>
<span class="quotelev1">&gt; rm -f dss/.deps/.dirstamp
</span><br>
<span class="quotelev1">&gt; rm -f dss/.dirstamp
</span><br>
<span class="quotelev1">&gt; rm -f memoryhooks/.deps/.dirstamp
</span><br>
<span class="quotelev1">&gt; rm -f memoryhooks/.dirstamp
</span><br>
<span class="quotelev1">&gt; rm -f runtime/.deps/.dirstamp
</span><br>
<span class="quotelev1">&gt; rm -f runtime/.dirstamp
</span><br>
<span class="quotelev1">&gt; rm -f threads/.deps/.dirstamp
</span><br>
<span class="quotelev1">&gt; rm -f threads/.dirstamp
</span><br>
<span class="quotelev1">&gt; rm -f win32/.deps/.dirstamp
</span><br>
<span class="quotelev1">&gt; rm -f win32/.dirstamp
</span><br>
<span class="quotelev1">&gt; rm -f TAGS ID GTAGS GRTAGS GSYMS GPATH tags
</span><br>
<span class="quotelev1">&gt; make[3]: Leaving directory `/home/mpiteam/openmpi/nightly-tarball- 
</span><br>
<span class="quotelev1">&gt; build-root/v1.3/create-r18869/ompi/openmpi-1.3a1r18869/_build/opal'
</span><br>
<span class="quotelev1">&gt; rm -rf class/.deps dss/.deps memoryhooks/.deps runtime/.deps  
</span><br>
<span class="quotelev1">&gt; threads/.deps win32/.deps
</span><br>
<span class="quotelev1">&gt; rm -f Makefile
</span><br>
<span class="quotelev1">&gt; make[2]: Leaving directory `/home/mpiteam/openmpi/nightly-tarball- 
</span><br>
<span class="quotelev1">&gt; build-root/v1.3/create-r18869/ompi/openmpi-1.3a1r18869/_build/opal'
</span><br>
<span class="quotelev1">&gt; Making distclean in contrib
</span><br>
<span class="quotelev1">&gt; make[2]: Entering directory `/home/mpiteam/openmpi/nightly-tarball- 
</span><br>
<span class="quotelev1">&gt; build-root/v1.3/create-r18869/ompi/openmpi-1.3a1r18869/_build/contrib'
</span><br>
<span class="quotelev1">&gt; test -z &quot;*~ .#*&quot; || rm -f *~ .#*
</span><br>
<span class="quotelev1">&gt; rm -rf .libs _libs
</span><br>
<span class="quotelev1">&gt; rm -f *.lo
</span><br>
<span class="quotelev1">&gt; test -z &quot;&quot; || rm -f
</span><br>
<span class="quotelev1">&gt; rm -f Makefile
</span><br>
<span class="quotelev1">&gt; make[2]: Leaving directory `/home/mpiteam/openmpi/nightly-tarball- 
</span><br>
<span class="quotelev1">&gt; build-root/v1.3/create-r18869/ompi/openmpi-1.3a1r18869/_build/contrib'
</span><br>
<span class="quotelev1">&gt; Making distclean in config
</span><br>
<span class="quotelev1">&gt; make[2]: Entering directory `/home/mpiteam/openmpi/nightly-tarball- 
</span><br>
<span class="quotelev1">&gt; build-root/v1.3/create-r18869/ompi/openmpi-1.3a1r18869/_build/config'
</span><br>
<span class="quotelev1">&gt; test -z &quot;*~ .#*&quot; || rm -f *~ .#*
</span><br>
<span class="quotelev1">&gt; rm -rf .libs _libs
</span><br>
<span class="quotelev1">&gt; rm -f *.lo
</span><br>
<span class="quotelev1">&gt; test -z &quot;&quot; || rm -f
</span><br>
<span class="quotelev1">&gt; rm -f Makefile
</span><br>
<span class="quotelev1">&gt; make[2]: Leaving directory `/home/mpiteam/openmpi/nightly-tarball- 
</span><br>
<span class="quotelev1">&gt; build-root/v1.3/create-r18869/ompi/openmpi-1.3a1r18869/_build/config'
</span><br>
<span class="quotelev1">&gt; Making distclean in .
</span><br>
<span class="quotelev1">&gt; make[2]: Entering directory `/home/mpiteam/openmpi/nightly-tarball- 
</span><br>
<span class="quotelev1">&gt; build-root/v1.3/create-r18869/ompi/openmpi-1.3a1r18869/_build'
</span><br>
<span class="quotelev1">&gt; test -z &quot;*~ .#*&quot; || rm -f *~ .#*
</span><br>
<span class="quotelev1">&gt; rm -rf .libs _libs
</span><br>
<span class="quotelev1">&gt; rm -f *.lo
</span><br>
<span class="quotelev1">&gt; test -z &quot;ompi/include/ompi/version.h orte/include/orte/version.h  
</span><br>
<span class="quotelev1">&gt; opal/include/opal/version.h&quot; || rm -f ompi/include/ompi/version.h  
</span><br>
<span class="quotelev1">&gt; orte/include/orte/version.h opal/include/opal/version.h
</span><br>
<span class="quotelev1">&gt; rm -f libtool
</span><br>
<span class="quotelev1">&gt; rm -f TAGS ID GTAGS GRTAGS GSYMS GPATH tags
</span><br>
<span class="quotelev1">&gt; make[2]: Leaving directory `/home/mpiteam/openmpi/nightly-tarball- 
</span><br>
<span class="quotelev1">&gt; build-root/v1.3/create-r18869/ompi/openmpi-1.3a1r18869/_build'
</span><br>
<span class="quotelev1">&gt; rm -f config.status config.cache config.log configure.lineno  
</span><br>
<span class="quotelev1">&gt; config.status.lineno
</span><br>
<span class="quotelev1">&gt; rm -f Makefile
</span><br>
<span class="quotelev1">&gt; ERROR: files left in build directory after distclean:
</span><br>
<span class="quotelev1">&gt; ./opal/mca/paffinity/linux/plpa/src/plpa-taskset/parser.c
</span><br>
<span class="quotelev1">&gt; make[1]: *** [distcleancheck] Error 1
</span><br>
<span class="quotelev1">&gt; make[1]: Leaving directory `/home/mpiteam/openmpi/nightly-tarball- 
</span><br>
<span class="quotelev1">&gt; build-root/v1.3/create-r18869/ompi/openmpi-1.3a1r18869/_build'
</span><br>
<span class="quotelev1">&gt; make: *** [distcheck] Error 2
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; ======================================================================
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Your friendly daemon,
</span><br>
<span class="quotelev1">&gt; Cyrador
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; testing mailing list
</span><br>
<span class="quotelev1">&gt; testing_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/testing">http://www.open-mpi.org/mailman/listinfo.cgi/testing</a>
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
<li><strong>Next message:</strong> <a href="4313.php">Terry Dontje: "Re: [OMPI devel] v1.3 RM: need a ruling"</a>
<li><strong>Previous message:</strong> <a href="4311.php">Bogdan Costescu: "Re: [OMPI devel] open ib dependency question"</a>
<li><strong>Maybe in reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2007/11/2599.php">Josh Hursey: "Re: [OMPI devel] === CREATE FAILURE ==="</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4437.php">Jeff Squyres: "Re: [OMPI devel] === CREATE FAILURE ==="</a>
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

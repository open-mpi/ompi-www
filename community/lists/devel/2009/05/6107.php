<?
$subject_val = "Re: [OMPI devel] === CREATE FAILURE (trunk) ===";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May 27 09:10:27 2009" -->
<!-- isoreceived="20090527131027" -->
<!-- sent="Wed, 27 May 2009 09:10:22 -0400" -->
<!-- isosent="20090527131022" -->
<!-- name="Josh Hursey" -->
<!-- email="jjhursey_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] === CREATE FAILURE (trunk) ===" -->
<!-- id="F7B51D37-3E50-40AB-A5BF-F9B18E0713FB_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="200905270153.n4R1rjoV014550_at_eddie.osl.iu.edu" -->
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
<strong>Subject:</strong> Re: [OMPI devel] === CREATE FAILURE (trunk) ===<br>
<strong>From:</strong> Josh Hursey (<em>jjhursey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-05-27 09:10:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6108.php">Jeff Squyres: "Re: [OMPI devel] Remove IMB 2.3 from ompi-tests?"</a>
<li><strong>Previous message:</strong> <a href="6106.php">Sylvain Jeaugey: "Re: [OMPI devel] problem in the ORTE notifier framework"</a>
<li><strong>Maybe in reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2008/08/4602.php">Tim Mattox: "Re: [OMPI devel] === CREATE FAILURE (trunk) ==="</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6114.php">Josh Hursey: "Re: [OMPI devel] === CREATE FAILURE (trunk) ==="</a>
<li><strong>Reply:</strong> <a href="6114.php">Josh Hursey: "Re: [OMPI devel] === CREATE FAILURE (trunk) ==="</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
It seems that the MPI Extensions commit broke that tarball  
<br>
(distcheckclean) last night. This shouldn't effect too many people,  
<br>
but I am working on a solution so hopefully everything is better  
<br>
tonight.
<br>
<p>-- Josh
<br>
<p>On May 26, 2009, at 9:53 PM, MPI Team wrote:
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ERROR: Command returned a non-zero exist status (trunk):
</span><br>
<span class="quotelev1">&gt;       make distcheck
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Start time: Tue May 26 21:26:07 EDT 2009
</span><br>
<span class="quotelev1">&gt; End time:   Tue May 26 21:53:45 EDT 2009
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
<span class="quotelev1">&gt; build-root/trunk/create-r21285/ompi/openmpi-1.4a1r21285/_build/opal'
</span><br>
<span class="quotelev1">&gt; rm -rf class/.deps dss/.deps memoryhooks/.deps runtime/.deps  
</span><br>
<span class="quotelev1">&gt; threads/.deps win32/.deps
</span><br>
<span class="quotelev1">&gt; rm -f Makefile
</span><br>
<span class="quotelev1">&gt; make[2]: Leaving directory `/home/mpiteam/openmpi/nightly-tarball- 
</span><br>
<span class="quotelev1">&gt; build-root/trunk/create-r21285/ompi/openmpi-1.4a1r21285/_build/opal'
</span><br>
<span class="quotelev1">&gt; Making distclean in contrib
</span><br>
<span class="quotelev1">&gt; make[2]: Entering directory `/home/mpiteam/openmpi/nightly-tarball- 
</span><br>
<span class="quotelev1">&gt; build-root/trunk/create-r21285/ompi/openmpi-1.4a1r21285/_build/ 
</span><br>
<span class="quotelev1">&gt; contrib'
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
<span class="quotelev1">&gt; build-root/trunk/create-r21285/ompi/openmpi-1.4a1r21285/_build/ 
</span><br>
<span class="quotelev1">&gt; contrib'
</span><br>
<span class="quotelev1">&gt; Making distclean in config
</span><br>
<span class="quotelev1">&gt; make[2]: Entering directory `/home/mpiteam/openmpi/nightly-tarball- 
</span><br>
<span class="quotelev1">&gt; build-root/trunk/create-r21285/ompi/openmpi-1.4a1r21285/_build/config'
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
<span class="quotelev1">&gt; build-root/trunk/create-r21285/ompi/openmpi-1.4a1r21285/_build/config'
</span><br>
<span class="quotelev1">&gt; Making distclean in .
</span><br>
<span class="quotelev1">&gt; make[2]: Entering directory `/home/mpiteam/openmpi/nightly-tarball- 
</span><br>
<span class="quotelev1">&gt; build-root/trunk/create-r21285/ompi/openmpi-1.4a1r21285/_build'
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
<span class="quotelev1">&gt; build-root/trunk/create-r21285/ompi/openmpi-1.4a1r21285/_build'
</span><br>
<span class="quotelev1">&gt; rm -f config.status config.cache config.log configure.lineno  
</span><br>
<span class="quotelev1">&gt; config.status.lineno
</span><br>
<span class="quotelev1">&gt; rm -f Makefile
</span><br>
<span class="quotelev1">&gt; ERROR: files left in build directory after distclean:
</span><br>
<span class="quotelev1">&gt; ./ompi/include/mpi-ext.h
</span><br>
<span class="quotelev1">&gt; make[1]: *** [distcleancheck] Error 1
</span><br>
<span class="quotelev1">&gt; make[1]: Leaving directory `/home/mpiteam/openmpi/nightly-tarball- 
</span><br>
<span class="quotelev1">&gt; build-root/trunk/create-r21285/ompi/openmpi-1.4a1r21285/_build'
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6108.php">Jeff Squyres: "Re: [OMPI devel] Remove IMB 2.3 from ompi-tests?"</a>
<li><strong>Previous message:</strong> <a href="6106.php">Sylvain Jeaugey: "Re: [OMPI devel] problem in the ORTE notifier framework"</a>
<li><strong>Maybe in reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2008/08/4602.php">Tim Mattox: "Re: [OMPI devel] === CREATE FAILURE (trunk) ==="</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6114.php">Josh Hursey: "Re: [OMPI devel] === CREATE FAILURE (trunk) ==="</a>
<li><strong>Reply:</strong> <a href="6114.php">Josh Hursey: "Re: [OMPI devel] === CREATE FAILURE (trunk) ==="</a>
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

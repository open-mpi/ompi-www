<?
$subject_val = "Re: [OMPI devel] === CREATE FAILURE (v1.3) ===";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan 20 10:55:46 2009" -->
<!-- isoreceived="20090120155546" -->
<!-- sent="Tue, 20 Jan 2009 10:55:36 -0500" -->
<!-- isosent="20090120155536" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] === CREATE FAILURE (v1.3) ===" -->
<!-- id="0C6DFD0A-3802-49AB-8088-A436F164F840_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="200901201509.n0KF9KM2030046_at_eddie.osl.iu.edu" -->
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
<strong>Subject:</strong> Re: [OMPI devel] === CREATE FAILURE (v1.3) ===<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-01-20 10:55:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5239.php">Ralph Castain: "Re: [OMPI devel] -display-map"</a>
<li><strong>Previous message:</strong> <a href="5237.php">Ralph Castain: "Re: [OMPI devel] When can I use OOB channel?"</a>
<li><strong>Maybe in reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2008/10/4751.php">Josh Hursey: "Re: [OMPI devel] === CREATE FAILURE (v1.3) ==="</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
This problem has been fixed (thankfully, it occurred after the v1.3  
<br>
tarballs were made).
<br>
<p>The problem is that ftp.gnu.org has disabled repository downloads of  
<br>
config.guess and config.sub while some git vulnerability is being  
<br>
fixed.  Hence, the scripts that we downloaded while making the  
<br>
tarballs [intentionally] have a syntax error that makes the script un- 
<br>
runnable.
<br>
<p>We've make OMPI's distscript a little more resilient now -- it checks  
<br>
that the config.guess/config.sub are runnable  before schlepping them  
<br>
into the new tarball.
<br>
<p><p><p>On Jan 20, 2009, at 10:09 AM, MPI Team wrote:
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ERROR: Command returned a non-zero exist status (v1.3):
</span><br>
<span class="quotelev1">&gt;        make distcheck
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Start time: Tue Jan 20 10:00:08 EST 2009
</span><br>
<span class="quotelev1">&gt; End time:   Tue Jan 20 10:09:20 EST 2009
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; ======================================================================
</span><br>
<span class="quotelev1">&gt; [... previous lines snipped ...]
</span><br>
<span class="quotelev1">&gt;   &amp;&amp; ../configure --srcdir=.. --prefix=&quot;$dc_install_base&quot; \
</span><br>
<span class="quotelev1">&gt;      \
</span><br>
<span class="quotelev1">&gt;   &amp;&amp; make  \
</span><br>
<span class="quotelev1">&gt;   &amp;&amp; make  dvi \
</span><br>
<span class="quotelev1">&gt;   &amp;&amp; make  check \
</span><br>
<span class="quotelev1">&gt;   &amp;&amp; make  install \
</span><br>
<span class="quotelev1">&gt;   &amp;&amp; make  installcheck \
</span><br>
<span class="quotelev1">&gt;   &amp;&amp; make  uninstall \
</span><br>
<span class="quotelev1">&gt;   &amp;&amp; make  distuninstallcheck_dir=&quot;$dc_install_base&quot; \
</span><br>
<span class="quotelev1">&gt;         distuninstallcheck \
</span><br>
<span class="quotelev1">&gt;   &amp;&amp; chmod -R a-w &quot;$dc_install_base&quot; \
</span><br>
<span class="quotelev1">&gt;   &amp;&amp; ({ \
</span><br>
<span class="quotelev1">&gt;        (cd ../.. &amp;&amp; umask 077 &amp;&amp; mkdir &quot;$dc_destdir&quot;) \
</span><br>
<span class="quotelev1">&gt;        &amp;&amp; make  DESTDIR=&quot;$dc_destdir&quot; install \
</span><br>
<span class="quotelev1">&gt;        &amp;&amp; make  DESTDIR=&quot;$dc_destdir&quot; uninstall \
</span><br>
<span class="quotelev1">&gt;        &amp;&amp; make  DESTDIR=&quot;$dc_destdir&quot; \
</span><br>
<span class="quotelev1">&gt;             distuninstallcheck_dir=&quot;$dc_destdir&quot; distuninstallcheck; \
</span><br>
<span class="quotelev1">&gt;       } || { rm -rf &quot;$dc_destdir&quot;; exit 1; }) \
</span><br>
<span class="quotelev1">&gt;   &amp;&amp; rm -rf &quot;$dc_destdir&quot; \
</span><br>
<span class="quotelev1">&gt;   &amp;&amp; make  dist \
</span><br>
<span class="quotelev1">&gt;   &amp;&amp; rm -rf openmpi-1.3.1a0r20299.tar.gz  
</span><br>
<span class="quotelev1">&gt; openmpi-1.3.1a0r20299.tar.bz2 \
</span><br>
<span class="quotelev1">&gt;   &amp;&amp; make  distcleancheck
</span><br>
<span class="quotelev1">&gt; checking for a BSD-compatible install... /usr/bin/install -c
</span><br>
<span class="quotelev1">&gt; checking whether build environment is sane... yes
</span><br>
<span class="quotelev1">&gt; checking for a thread-safe mkdir -p... /bin/mkdir -p
</span><br>
<span class="quotelev1">&gt; checking for gawk... gawk
</span><br>
<span class="quotelev1">&gt; checking whether make sets $(MAKE)... yes
</span><br>
<span class="quotelev1">&gt; checking how to create a ustar tar archive... gnutar
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; ======================================================================
</span><br>
<span class="quotelev1">&gt; == Configuring Open MPI
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; ======================================================================
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *** Checking versions
</span><br>
<span class="quotelev1">&gt; checking Open MPI version... 1.3.1a0r20299
</span><br>
<span class="quotelev1">&gt; checking Open MPI release date... Unreleased developer copy
</span><br>
<span class="quotelev1">&gt; checking Open MPI Subversion repository version... r20299
</span><br>
<span class="quotelev1">&gt; checking Open Run-Time Environment version... 1.3.1a0r20299
</span><br>
<span class="quotelev1">&gt; checking Open Run-Time Environment release date... Unreleased  
</span><br>
<span class="quotelev1">&gt; developer copy
</span><br>
<span class="quotelev1">&gt; checking Open Run-Time Environment Subversion repository version...  
</span><br>
<span class="quotelev1">&gt; r20299
</span><br>
<span class="quotelev1">&gt; checking Open Portable Access Layer version... 1.3.1a0r20299
</span><br>
<span class="quotelev1">&gt; checking Open Portable Access Layer release date... Unreleased  
</span><br>
<span class="quotelev1">&gt; developer copy
</span><br>
<span class="quotelev1">&gt; checking Open Portable Access Layer Subversion repository version...  
</span><br>
<span class="quotelev1">&gt; r20299
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *** Initialization, setup
</span><br>
<span class="quotelev1">&gt; configure: builddir: /home/mpiteam/openmpi/nightly-tarball-build- 
</span><br>
<span class="quotelev1">&gt; root/v1.3/create-r20299/ompi/openmpi-1.3.1a0r20299/_build
</span><br>
<span class="quotelev1">&gt; configure: srcdir: /home/mpiteam/openmpi/nightly-tarball-build-root/ 
</span><br>
<span class="quotelev1">&gt; v1.3/create-r20299/ompi/openmpi-1.3.1a0r20299
</span><br>
<span class="quotelev1">&gt; configure: Detected VPATH build
</span><br>
<span class="quotelev1">&gt; configure: error: cannot run /bin/sh ../config/config.sub
</span><br>
<span class="quotelev1">&gt; make: *** [distcheck] Error 1
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
<li><strong>Next message:</strong> <a href="5239.php">Ralph Castain: "Re: [OMPI devel] -display-map"</a>
<li><strong>Previous message:</strong> <a href="5237.php">Ralph Castain: "Re: [OMPI devel] When can I use OOB channel?"</a>
<li><strong>Maybe in reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2008/10/4751.php">Josh Hursey: "Re: [OMPI devel] === CREATE FAILURE (v1.3) ==="</a>
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

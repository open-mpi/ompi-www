<?
$subject_val = "Re: [OMPI devel] parallel make install";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jun  3 21:28:26 2008" -->
<!-- isoreceived="20080604012826" -->
<!-- sent="Tue, 3 Jun 2008 21:28:09 -0400" -->
<!-- isosent="20080604012809" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] parallel make install" -->
<!-- id="16C16839-B83D-49FE-8FBC-DF3FC820590B_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20080603215330.GB19750_at_ins.uni-bonn.de" -->
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
<strong>Subject:</strong> Re: [OMPI devel] parallel make install<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-06-03 21:28:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4086.php">Ralf Wildenhues: "Re: [OMPI devel] parallel make install"</a>
<li><strong>Previous message:</strong> <a href="4084.php">Ralph Castain: "Re: [OMPI devel] parallel make install"</a>
<li><strong>In reply to:</strong> <a href="4083.php">Ralf Wildenhues: "Re: [OMPI devel] parallel make install"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Whew; I never would have been able to track that down.
<br>
<p>Many thanks, Ralf!
<br>
<p><p>On Jun 3, 2008, at 5:53 PM, Ralf Wildenhues wrote:
<br>
<p><span class="quotelev1">&gt; Hi Jeff,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; * Jeff Squyres wrote on Tue, Jun 03, 2008 at 11:11:32PM CEST:
</span><br>
<span class="quotelev2">&gt;&gt; ERROR: Command returned a non-zero exist status
</span><br>
<span class="quotelev2">&gt;&gt;       make -j 4 distcheck
</span><br>
<span class="quotelev1">&gt; [...]
</span><br>
<span class="quotelev2">&gt;&gt; Making install in etc
</span><br>
<span class="quotelev2">&gt;&gt; make[3]: Entering directory `/home/mpiteam/openmpi/nightly-tarball- 
</span><br>
<span class="quotelev2">&gt;&gt; build-root/trunk/create-r18551/ompi/openmpi-1.3a1r18551/_build/opal/ 
</span><br>
<span class="quotelev2">&gt;&gt; etc'
</span><br>
<span class="quotelev2">&gt;&gt; make[4]: Entering directory `/home/mpiteam/openmpi/nightly-tarball- 
</span><br>
<span class="quotelev2">&gt;&gt; build-root/trunk/create-r18551/ompi/openmpi-1.3a1r18551/_build/opal/ 
</span><br>
<span class="quotelev2">&gt;&gt; etc'
</span><br>
<span class="quotelev2">&gt;&gt; test -z &quot;/home/mpiteam/openmpi/nightly-tarball-build-root/trunk/ 
</span><br>
<span class="quotelev2">&gt;&gt; create-r18551/ompi/openmpi-1.3a1r18551/_inst/etc&quot; || /bin/mkdir -p  
</span><br>
<span class="quotelev2">&gt;&gt; &quot;/home/mpiteam/openmpi/nightly-tarball-build-root/trunk/create- 
</span><br>
<span class="quotelev2">&gt;&gt; r18551/ompi/openmpi-1.3a1r18551/_inst/etc&quot;
</span><br>
<span class="quotelev2">&gt;&gt; /usr/bin/install -c -m 644 ../../../opal/etc/openmpi-mca- 
</span><br>
<span class="quotelev2">&gt;&gt; params.conf /home/mpiteam/openmpi/nightly-tarball-build-root/trunk/ 
</span><br>
<span class="quotelev2">&gt;&gt; create-r18551/ompi/openmpi-1.3a1r18551/_inst/etc/openmpi-mca- 
</span><br>
<span class="quotelev2">&gt;&gt; params.conf
</span><br>
<span class="quotelev2">&gt;&gt; /usr/bin/install: cannot create regular file `/home/mpiteam/openmpi/ 
</span><br>
<span class="quotelev2">&gt;&gt; nightly-tarball-build-root/trunk/create-r18551/ompi/ 
</span><br>
<span class="quotelev2">&gt;&gt; openmpi-1.3a1r18551/_inst/etc/openmpi-mca-params.conf': No such  
</span><br>
<span class="quotelev2">&gt;&gt; file or directory
</span><br>
<span class="quotelev2">&gt;&gt; make[4]: *** [install-data-local] Error 1
</span><br>
<span class="quotelev2">&gt;&gt; make[4]: *** Waiting for unfinished jobs....
</span><br>
<span class="quotelev2">&gt;&gt; make[4]: *** Waiting for unfinished jobs....
</span><br>
<span class="quotelev2">&gt;&gt; make[4]: Leaving directory `/home/mpiteam/openmpi/nightly-tarball- 
</span><br>
<span class="quotelev2">&gt;&gt; build-root/trunk/create-r18551/ompi/openmpi-1.3a1r18551/_build/opal/ 
</span><br>
<span class="quotelev2">&gt;&gt; etc'
</span><br>
<span class="quotelev2">&gt;&gt; make[3]: *** [install-am] Error 2
</span><br>
<span class="quotelev2">&gt;&gt; make[3]: Leaving directory `/home/mpiteam/openmpi/nightly-tarball- 
</span><br>
<span class="quotelev2">&gt;&gt; build-root/trunk/create-r18551/ompi/openmpi-1.3a1r18551/_build/opal/ 
</span><br>
<span class="quotelev2">&gt;&gt; etc'
</span><br>
<span class="quotelev2">&gt;&gt; make[2]: *** [install-recursive] Error 1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Nice clue, thanks.  This is a bug in opal/etc/Makefile.am:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --- quote opal/etc/Makefile.am ---
</span><br>
<span class="quotelev1">&gt; # This has to be here, even though it's empty, so that AM thinks that
</span><br>
<span class="quotelev1">&gt; # &quot;something&quot; will happen here (details fuzzy, but we remember that  
</span><br>
<span class="quotelev1">&gt; this
</span><br>
<span class="quotelev1">&gt; # *needs* to be here -- you have been warned).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; sysconf_DATA =
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; # Steal a little trickery from a generated Makefile to only install
</span><br>
<span class="quotelev1">&gt; # files if they do not already exist at the target.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; install-data-local:
</span><br>
<span class="quotelev1">&gt; 	@ p=&quot;$(opal_config_files)&quot;; \
</span><br>
<span class="quotelev1">&gt; 	for file in $$p; do \
</span><br>
<span class="quotelev1">&gt; 	  if test -f $(DESTDIR)$(sysconfdir)/$$file; then \
</span><br>
<span class="quotelev1">&gt; 	    echo &quot;******************************* WARNING  
</span><br>
<span class="quotelev1">&gt; ************************************&quot;; \
</span><br>
<span class="quotelev1">&gt; 	    echo &quot;*** Not installing new $$file over existing file in:&quot;; \
</span><br>
<span class="quotelev1">&gt; 	    echo &quot;***   $(DESTDIR)$(sysconfdir)/$$file&quot;; \
</span><br>
<span class="quotelev1">&gt; 	    echo &quot;******************************* WARNING  
</span><br>
<span class="quotelev1">&gt; ************************************&quot;; \
</span><br>
<span class="quotelev1">&gt; 	  else \
</span><br>
<span class="quotelev1">&gt; 	    if test -f &quot;$$file&quot;; then d=; else d=&quot;$(srcdir)/&quot;; fi; \
</span><br>
<span class="quotelev1">&gt; 	    f=&quot;`echo $$file | sed -e 's|^.*/||'`&quot;; \
</span><br>
<span class="quotelev1">&gt; 	    echo &quot; $(INSTALL_DATA) $$d$$file $(DESTDIR)$(sysconfdir)/$$f&quot;; \
</span><br>
<span class="quotelev1">&gt; 	    $(INSTALL_DATA) $$d$$file $(DESTDIR)$(sysconfdir)/$$f; \
</span><br>
<span class="quotelev1">&gt; 	  fi; \
</span><br>
<span class="quotelev1">&gt; 	done
</span><br>
<span class="quotelev1">&gt; --- snip ---
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; To clarify the mysterious comment above, the &quot;sysconf_DATA =&quot; line
</span><br>
<span class="quotelev1">&gt; causes automake to emit an undocumented target install-sysconfDATA  
</span><br>
<span class="quotelev1">&gt; which
</span><br>
<span class="quotelev1">&gt; effectively runs something like
</span><br>
<span class="quotelev1">&gt;  mkdir -p $(DESTDIR)$(sysconfdir)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; and then installs zero files there.  The install-data-local rule is  
</span><br>
<span class="quotelev1">&gt; also
</span><br>
<span class="quotelev1">&gt; updated as a dependency of 'install', just like install-sysconfDATA,
</span><br>
<span class="quotelev1">&gt; however there exists no dependency relation between the two.  Which
</span><br>
<span class="quotelev1">&gt; means that with parallel make, they can be run concurrently, which I
</span><br>
<span class="quotelev1">&gt; assume is what happened in your case; although the log shows them in  
</span><br>
<span class="quotelev1">&gt; the
</span><br>
<span class="quotelev1">&gt; right order, it can still happen that mkdir wasn't done with its work
</span><br>
<span class="quotelev1">&gt; before install-data-local accessed the directory.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; An easy fix is to use install-data-hook instead, which is documented  
</span><br>
<span class="quotelev1">&gt; to
</span><br>
<span class="quotelev1">&gt; run after the normal install rules; or to generate the directory in  
</span><br>
<span class="quotelev1">&gt; the
</span><br>
<span class="quotelev1">&gt; install-data-local rule itself, and drop the sysconf_DATA line.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Proposed, untested patch below.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have not checked whether there are more instances of this in OMPI.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt; Ralf
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Fix race condition in 'make install': let install-data-local
</span><br>
<span class="quotelev1">&gt; create $(sysconfdir), rather than an automake-generated rule
</span><br>
<span class="quotelev1">&gt; which may be run in parallel (with make -j).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Index: opal/etc/Makefile.am
</span><br>
<span class="quotelev1">&gt; ===================================================================
</span><br>
<span class="quotelev1">&gt; --- opal/etc/Makefile.am	(Revision 17766)
</span><br>
<span class="quotelev1">&gt; +++ opal/etc/Makefile.am	(Arbeitskopie)
</span><br>
<span class="quotelev1">&gt; @@ -23,16 +23,11 @@
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; EXTRA_DIST = $(opal_config_files)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -# This has to be here, even though it's empty, so that AM thinks that
</span><br>
<span class="quotelev1">&gt; -# &quot;something&quot; will happen here (details fuzzy, but we remember that  
</span><br>
<span class="quotelev1">&gt; this
</span><br>
<span class="quotelev1">&gt; -# *needs* to be here -- you have been warned).
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; -sysconf_DATA =
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; # Steal a little trickery from a generated Makefile to only install
</span><br>
<span class="quotelev1">&gt; # files if they do not already exist at the target.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; install-data-local:
</span><br>
<span class="quotelev1">&gt; +	$(mkdir_p) $(DESTDIR)$(sysconfdir)
</span><br>
<span class="quotelev1">&gt; 	@ p=&quot;$(opal_config_files)&quot;; \
</span><br>
<span class="quotelev1">&gt; 	for file in $$p; do \
</span><br>
<span class="quotelev1">&gt; 	  if test -f $(DESTDIR)$(sysconfdir)/$$file; then \
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
<li><strong>Next message:</strong> <a href="4086.php">Ralf Wildenhues: "Re: [OMPI devel] parallel make install"</a>
<li><strong>Previous message:</strong> <a href="4084.php">Ralph Castain: "Re: [OMPI devel] parallel make install"</a>
<li><strong>In reply to:</strong> <a href="4083.php">Ralf Wildenhues: "Re: [OMPI devel] parallel make install"</a>
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

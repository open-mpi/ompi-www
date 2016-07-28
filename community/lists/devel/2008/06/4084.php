<?
$subject_val = "Re: [OMPI devel] parallel make install";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jun  3 17:59:23 2008" -->
<!-- isoreceived="20080603215923" -->
<!-- sent="Tue, 03 Jun 2008 15:59:07 -0600" -->
<!-- isosent="20080603215907" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] parallel make install" -->
<!-- id="C46B1ACB.52D8%rhc_at_lanl.gov" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-06-03 17:59:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4085.php">Jeff Squyres: "Re: [OMPI devel] parallel make install"</a>
<li><strong>Previous message:</strong> <a href="4083.php">Ralf Wildenhues: "Re: [OMPI devel] parallel make install"</a>
<li><strong>In reply to:</strong> <a href="4083.php">Ralf Wildenhues: "Re: [OMPI devel] parallel make install"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4086.php">Ralf Wildenhues: "Re: [OMPI devel] parallel make install"</a>
<li><strong>Reply:</strong> <a href="4086.php">Ralf Wildenhues: "Re: [OMPI devel] parallel make install"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Very interesting. Don't know if it's the same problem, but I noted an issue
<br>
quite a while ago where make -jN all/install would fail when traversing
<br>
opal. I built a workaround that was just a script that does make all in
<br>
opal, then goes back to make -jN for orte/ompi.
<br>
<p>Perhaps this would fix that problem too....
<br>
<p>Thanks Ralf!
<br>
<p><p>On 6/3/08 3:53 PM, &quot;Ralf Wildenhues&quot; &lt;Ralf.Wildenhues_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi Jeff,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; * Jeff Squyres wrote on Tue, Jun 03, 2008 at 11:11:32PM CEST:
</span><br>
<span class="quotelev2">&gt;&gt; ERROR: Command returned a non-zero exist status
</span><br>
<span class="quotelev2">&gt;&gt;        make -j 4 distcheck
</span><br>
<span class="quotelev1">&gt; [...]
</span><br>
<span class="quotelev2">&gt;&gt; Making install in etc
</span><br>
<span class="quotelev2">&gt;&gt; make[3]: Entering directory
</span><br>
<span class="quotelev2">&gt;&gt; `/home/mpiteam/openmpi/nightly-tarball-build-root/trunk/create-r18551/ompi/op
</span><br>
<span class="quotelev2">&gt;&gt; enmpi-1.3a1r18551/_build/opal/etc'
</span><br>
<span class="quotelev2">&gt;&gt; make[4]: Entering directory
</span><br>
<span class="quotelev2">&gt;&gt; `/home/mpiteam/openmpi/nightly-tarball-build-root/trunk/create-r18551/ompi/op
</span><br>
<span class="quotelev2">&gt;&gt; enmpi-1.3a1r18551/_build/opal/etc'
</span><br>
<span class="quotelev2">&gt;&gt; test -z 
</span><br>
<span class="quotelev2">&gt;&gt; &quot;/home/mpiteam/openmpi/nightly-tarball-build-root/trunk/create-r18551/ompi/op
</span><br>
<span class="quotelev2">&gt;&gt; enmpi-1.3a1r18551/_inst/etc&quot; || /bin/mkdir -p
</span><br>
<span class="quotelev2">&gt;&gt; &quot;/home/mpiteam/openmpi/nightly-tarball-build-root/trunk/create-r18551/ompi/op
</span><br>
<span class="quotelev2">&gt;&gt; enmpi-1.3a1r18551/_inst/etc&quot;
</span><br>
<span class="quotelev2">&gt;&gt; /usr/bin/install -c -m 644 ../../../opal/etc/openmpi-mca-params.conf
</span><br>
<span class="quotelev2">&gt;&gt; /home/mpiteam/openmpi/nightly-tarball-build-root/trunk/create-r18551/ompi/ope
</span><br>
<span class="quotelev2">&gt;&gt; nmpi-1.3a1r18551/_inst/etc/openmpi-mca-params.conf
</span><br>
<span class="quotelev2">&gt;&gt; /usr/bin/install: cannot create regular file
</span><br>
<span class="quotelev2">&gt;&gt; `/home/mpiteam/openmpi/nightly-tarball-build-root/trunk/create-r18551/ompi/op
</span><br>
<span class="quotelev2">&gt;&gt; enmpi-1.3a1r18551/_inst/etc/openmpi-mca-params.conf': No such file or
</span><br>
<span class="quotelev2">&gt;&gt; directory
</span><br>
<span class="quotelev2">&gt;&gt; make[4]: *** [install-data-local] Error 1
</span><br>
<span class="quotelev2">&gt;&gt; make[4]: *** Waiting for unfinished jobs....
</span><br>
<span class="quotelev2">&gt;&gt; make[4]: *** Waiting for unfinished jobs....
</span><br>
<span class="quotelev2">&gt;&gt; make[4]: Leaving directory
</span><br>
<span class="quotelev2">&gt;&gt; `/home/mpiteam/openmpi/nightly-tarball-build-root/trunk/create-r18551/ompi/op
</span><br>
<span class="quotelev2">&gt;&gt; enmpi-1.3a1r18551/_build/opal/etc'
</span><br>
<span class="quotelev2">&gt;&gt; make[3]: *** [install-am] Error 2
</span><br>
<span class="quotelev2">&gt;&gt; make[3]: Leaving directory
</span><br>
<span class="quotelev2">&gt;&gt; `/home/mpiteam/openmpi/nightly-tarball-build-root/trunk/create-r18551/ompi/op
</span><br>
<span class="quotelev2">&gt;&gt; enmpi-1.3a1r18551/_build/opal/etc'
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
<span class="quotelev1">&gt; # &quot;something&quot; will happen here (details fuzzy, but we remember that this
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
<span class="quotelev1">&gt; @ p=&quot;$(opal_config_files)&quot;; \
</span><br>
<span class="quotelev1">&gt; for file in $$p; do \
</span><br>
<span class="quotelev1">&gt;  if test -f $(DESTDIR)$(sysconfdir)/$$file; then \
</span><br>
<span class="quotelev1">&gt;    echo &quot;******************************* WARNING
</span><br>
<span class="quotelev1">&gt; ************************************&quot;; \
</span><br>
<span class="quotelev1">&gt;    echo &quot;*** Not installing new $$file over existing file in:&quot;; \
</span><br>
<span class="quotelev1">&gt;    echo &quot;***   $(DESTDIR)$(sysconfdir)/$$file&quot;; \
</span><br>
<span class="quotelev1">&gt;    echo &quot;******************************* WARNING
</span><br>
<span class="quotelev1">&gt; ************************************&quot;; \
</span><br>
<span class="quotelev1">&gt;  else \
</span><br>
<span class="quotelev1">&gt;    if test -f &quot;$$file&quot;; then d=; else d=&quot;$(srcdir)/&quot;; fi; \
</span><br>
<span class="quotelev1">&gt;    f=&quot;`echo $$file | sed -e 's|^.*/||'`&quot;; \
</span><br>
<span class="quotelev1">&gt;    echo &quot; $(INSTALL_DATA) $$d$$file $(DESTDIR)$(sysconfdir)/$$f&quot;; \
</span><br>
<span class="quotelev1">&gt;    $(INSTALL_DATA) $$d$$file $(DESTDIR)$(sysconfdir)/$$f; \
</span><br>
<span class="quotelev1">&gt;  fi; \
</span><br>
<span class="quotelev1">&gt; done
</span><br>
<span class="quotelev1">&gt; --- snip ---
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; To clarify the mysterious comment above, the &quot;sysconf_DATA =&quot; line
</span><br>
<span class="quotelev1">&gt; causes automake to emit an undocumented target install-sysconfDATA which
</span><br>
<span class="quotelev1">&gt; effectively runs something like
</span><br>
<span class="quotelev1">&gt;   mkdir -p $(DESTDIR)$(sysconfdir)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; and then installs zero files there.  The install-data-local rule is also
</span><br>
<span class="quotelev1">&gt; updated as a dependency of 'install', just like install-sysconfDATA,
</span><br>
<span class="quotelev1">&gt; however there exists no dependency relation between the two.  Which
</span><br>
<span class="quotelev1">&gt; means that with parallel make, they can be run concurrently, which I
</span><br>
<span class="quotelev1">&gt; assume is what happened in your case; although the log shows them in the
</span><br>
<span class="quotelev1">&gt; right order, it can still happen that mkdir wasn't done with its work
</span><br>
<span class="quotelev1">&gt; before install-data-local accessed the directory.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; An easy fix is to use install-data-hook instead, which is documented to
</span><br>
<span class="quotelev1">&gt; run after the normal install rules; or to generate the directory in the
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
<span class="quotelev1">&gt; --- opal/etc/Makefile.am (Revision 17766)
</span><br>
<span class="quotelev1">&gt; +++ opal/etc/Makefile.am (Arbeitskopie)
</span><br>
<span class="quotelev1">&gt; @@ -23,16 +23,11 @@
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;  EXTRA_DIST = $(opal_config_files)
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; -# This has to be here, even though it's empty, so that AM thinks that
</span><br>
<span class="quotelev1">&gt; -# &quot;something&quot; will happen here (details fuzzy, but we remember that this
</span><br>
<span class="quotelev1">&gt; -# *needs* to be here -- you have been warned).
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; -sysconf_DATA = 
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt;  # Steal a little trickery from a generated Makefile to only install
</span><br>
<span class="quotelev1">&gt;  # files if they do not already exist at the target.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;  install-data-local:
</span><br>
<span class="quotelev1">&gt; + $(mkdir_p) $(DESTDIR)$(sysconfdir)
</span><br>
<span class="quotelev1">&gt; @ p=&quot;$(opal_config_files)&quot;; \
</span><br>
<span class="quotelev1">&gt; for file in $$p; do \
</span><br>
<span class="quotelev1">&gt;  if test -f $(DESTDIR)$(sysconfdir)/$$file; then \
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4085.php">Jeff Squyres: "Re: [OMPI devel] parallel make install"</a>
<li><strong>Previous message:</strong> <a href="4083.php">Ralf Wildenhues: "Re: [OMPI devel] parallel make install"</a>
<li><strong>In reply to:</strong> <a href="4083.php">Ralf Wildenhues: "Re: [OMPI devel] parallel make install"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4086.php">Ralf Wildenhues: "Re: [OMPI devel] parallel make install"</a>
<li><strong>Reply:</strong> <a href="4086.php">Ralf Wildenhues: "Re: [OMPI devel] parallel make install"</a>
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

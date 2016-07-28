<?
$subject_val = "Re: [OMPI devel] parallel make install";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jun  3 17:53:52 2008" -->
<!-- isoreceived="20080603215352" -->
<!-- sent="Tue, 3 Jun 2008 23:53:31 +0200" -->
<!-- isosent="20080603215331" -->
<!-- name="Ralf Wildenhues" -->
<!-- email="Ralf.Wildenhues_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] parallel make install" -->
<!-- id="20080603215330.GB19750_at_ins.uni-bonn.de" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="46147903-BAA9-4AAB-98DB-02F22B8DF471_at_cisco.com" -->
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
<strong>From:</strong> Ralf Wildenhues (<em>Ralf.Wildenhues_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-06-03 17:53:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4084.php">Ralph Castain: "Re: [OMPI devel] parallel make install"</a>
<li><strong>Previous message:</strong> <a href="4082.php">George Bosilca: "Re: [OMPI devel] parallel make install"</a>
<li><strong>In reply to:</strong> <a href="4081.php">Jeff Squyres: "Re: [OMPI devel] parallel make install"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4084.php">Ralph Castain: "Re: [OMPI devel] parallel make install"</a>
<li><strong>Reply:</strong> <a href="4084.php">Ralph Castain: "Re: [OMPI devel] parallel make install"</a>
<li><strong>Reply:</strong> <a href="4085.php">Jeff Squyres: "Re: [OMPI devel] parallel make install"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Jeff,
<br>
<p>* Jeff Squyres wrote on Tue, Jun 03, 2008 at 11:11:32PM CEST:
<br>
<span class="quotelev1">&gt; ERROR: Command returned a non-zero exist status
</span><br>
<span class="quotelev1">&gt;        make -j 4 distcheck
</span><br>
[...]
<br>
<span class="quotelev1">&gt; Making install in etc
</span><br>
<span class="quotelev1">&gt; make[3]: Entering directory `/home/mpiteam/openmpi/nightly-tarball-build-root/trunk/create-r18551/ompi/openmpi-1.3a1r18551/_build/opal/etc'
</span><br>
<span class="quotelev1">&gt; make[4]: Entering directory `/home/mpiteam/openmpi/nightly-tarball-build-root/trunk/create-r18551/ompi/openmpi-1.3a1r18551/_build/opal/etc'
</span><br>
<span class="quotelev1">&gt; test -z &quot;/home/mpiteam/openmpi/nightly-tarball-build-root/trunk/create-r18551/ompi/openmpi-1.3a1r18551/_inst/etc&quot; || /bin/mkdir -p &quot;/home/mpiteam/openmpi/nightly-tarball-build-root/trunk/create-r18551/ompi/openmpi-1.3a1r18551/_inst/etc&quot;
</span><br>
<span class="quotelev1">&gt; /usr/bin/install -c -m 644 ../../../opal/etc/openmpi-mca-params.conf /home/mpiteam/openmpi/nightly-tarball-build-root/trunk/create-r18551/ompi/openmpi-1.3a1r18551/_inst/etc/openmpi-mca-params.conf
</span><br>
<span class="quotelev1">&gt; /usr/bin/install: cannot create regular file `/home/mpiteam/openmpi/nightly-tarball-build-root/trunk/create-r18551/ompi/openmpi-1.3a1r18551/_inst/etc/openmpi-mca-params.conf': No such file or directory
</span><br>
<span class="quotelev1">&gt; make[4]: *** [install-data-local] Error 1
</span><br>
<span class="quotelev1">&gt; make[4]: *** Waiting for unfinished jobs....
</span><br>
<span class="quotelev1">&gt; make[4]: *** Waiting for unfinished jobs....
</span><br>
<span class="quotelev1">&gt; make[4]: Leaving directory `/home/mpiteam/openmpi/nightly-tarball-build-root/trunk/create-r18551/ompi/openmpi-1.3a1r18551/_build/opal/etc'
</span><br>
<span class="quotelev1">&gt; make[3]: *** [install-am] Error 2
</span><br>
<span class="quotelev1">&gt; make[3]: Leaving directory `/home/mpiteam/openmpi/nightly-tarball-build-root/trunk/create-r18551/ompi/openmpi-1.3a1r18551/_build/opal/etc'
</span><br>
<span class="quotelev1">&gt; make[2]: *** [install-recursive] Error 1
</span><br>
<p>Nice clue, thanks.  This is a bug in opal/etc/Makefile.am:
<br>
<p>--- quote opal/etc/Makefile.am ---
<br>
# This has to be here, even though it's empty, so that AM thinks that
<br>
# &quot;something&quot; will happen here (details fuzzy, but we remember that this
<br>
# *needs* to be here -- you have been warned).
<br>
<p>sysconf_DATA = 
<br>
<p># Steal a little trickery from a generated Makefile to only install
<br>
# files if they do not already exist at the target.
<br>
<p>install-data-local:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;@ p=&quot;$(opal_config_files)&quot;; \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;for file in $$p; do \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if test -f $(DESTDIR)$(sysconfdir)/$$file; then \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;echo &quot;******************************* WARNING ************************************&quot;; \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;echo &quot;*** Not installing new $$file over existing file in:&quot;; \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;echo &quot;***   $(DESTDIR)$(sysconfdir)/$$file&quot;; \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;echo &quot;******************************* WARNING ************************************&quot;; \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;else \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if test -f &quot;$$file&quot;; then d=; else d=&quot;$(srcdir)/&quot;; fi; \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;f=&quot;`echo $$file | sed -e 's|^.*/||'`&quot;; \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;echo &quot; $(INSTALL_DATA) $$d$$file $(DESTDIR)$(sysconfdir)/$$f&quot;; \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$(INSTALL_DATA) $$d$$file $(DESTDIR)$(sysconfdir)/$$f; \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;fi; \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;done
<br>
--- snip ---
<br>
<p>To clarify the mysterious comment above, the &quot;sysconf_DATA =&quot; line
<br>
causes automake to emit an undocumented target install-sysconfDATA which
<br>
effectively runs something like
<br>
&nbsp;&nbsp;mkdir -p $(DESTDIR)$(sysconfdir)
<br>
<p>and then installs zero files there.  The install-data-local rule is also
<br>
updated as a dependency of 'install', just like install-sysconfDATA,
<br>
however there exists no dependency relation between the two.  Which
<br>
means that with parallel make, they can be run concurrently, which I
<br>
assume is what happened in your case; although the log shows them in the
<br>
right order, it can still happen that mkdir wasn't done with its work
<br>
before install-data-local accessed the directory.
<br>
<p>An easy fix is to use install-data-hook instead, which is documented to
<br>
run after the normal install rules; or to generate the directory in the
<br>
install-data-local rule itself, and drop the sysconf_DATA line.
<br>
<p>Proposed, untested patch below.
<br>
<p>I have not checked whether there are more instances of this in OMPI.
<br>
<p>Cheers,
<br>
Ralf
<br>
<p>Fix race condition in 'make install': let install-data-local
<br>
create $(sysconfdir), rather than an automake-generated rule
<br>
which may be run in parallel (with make -j).
<br>
<p>Index: opal/etc/Makefile.am
<br>
===================================================================
<br>
--- opal/etc/Makefile.am	(Revision 17766)
<br>
+++ opal/etc/Makefile.am	(Arbeitskopie)
<br>
@@ -23,16 +23,11 @@
<br>
&nbsp;
<br>
&nbsp;EXTRA_DIST = $(opal_config_files)
<br>
&nbsp;
<br>
-# This has to be here, even though it's empty, so that AM thinks that
<br>
-# &quot;something&quot; will happen here (details fuzzy, but we remember that this
<br>
-# *needs* to be here -- you have been warned).
<br>
-
<br>
-sysconf_DATA = 
<br>
-
<br>
&nbsp;# Steal a little trickery from a generated Makefile to only install
<br>
&nbsp;# files if they do not already exist at the target.
<br>
&nbsp;
<br>
&nbsp;install-data-local:
<br>
+	$(mkdir_p) $(DESTDIR)$(sysconfdir)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;@ p=&quot;$(opal_config_files)&quot;; \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;for file in $$p; do \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if test -f $(DESTDIR)$(sysconfdir)/$$file; then \
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4084.php">Ralph Castain: "Re: [OMPI devel] parallel make install"</a>
<li><strong>Previous message:</strong> <a href="4082.php">George Bosilca: "Re: [OMPI devel] parallel make install"</a>
<li><strong>In reply to:</strong> <a href="4081.php">Jeff Squyres: "Re: [OMPI devel] parallel make install"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4084.php">Ralph Castain: "Re: [OMPI devel] parallel make install"</a>
<li><strong>Reply:</strong> <a href="4084.php">Ralph Castain: "Re: [OMPI devel] parallel make install"</a>
<li><strong>Reply:</strong> <a href="4085.php">Jeff Squyres: "Re: [OMPI devel] parallel make install"</a>
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

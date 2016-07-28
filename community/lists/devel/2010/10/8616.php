<?
$subject_val = "Re: [OMPI devel] [OMPI svn] svn:open-mpi r23931";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Oct 25 13:54:51 2010" -->
<!-- isoreceived="20101025175451" -->
<!-- sent="Mon, 25 Oct 2010 13:54:36 -0400" -->
<!-- isosent="20101025175436" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn] svn:open-mpi r23931" -->
<!-- id="36C4399D-DBEF-4F8A-B7A5-23C2E3966AAF_at_cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="88BA1BDD-BDB4-4596-A1DC-7632CE69B839_at_eecs.utk.edu" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [OMPI svn] svn:open-mpi r23931<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-10-25 13:54:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8617.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r23936"</a>
<li><strong>Previous message:</strong> <a href="8615.php">Aur&#233;lien Bouteiller: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r23931"</a>
<li><strong>In reply to:</strong> <a href="8615.php">Aur&#233;lien Bouteiller: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r23931"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
It's a VPATH build issue -- I have a fix that I am testing right now before I commit... (am testing with &quot;make distcheck&quot; which takes at least 30 mins...)
<br>
<p><p>On Oct 25, 2010, at 1:53 PM, Aur&#233;lien Bouteiller wrote:
<br>
<p><span class="quotelev1">&gt; Ralph, 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; In file included from ../../../../../trunk/opal/mca/event/libevent207/libevent207_module.c:44:
</span><br>
<span class="quotelev1">&gt; ../../../../../trunk/opal/mca/event/libevent207/libevent/event.h:165:33: error: event2/event-config.h: No such file or directory
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Looks like you forgot some files. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Aurelien 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Le 25 oct. 2010 &#224; 10:53, rhc_at_[hidden] a &#233;crit :
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Author: rhc
</span><br>
<span class="quotelev2">&gt;&gt; Date: 2010-10-25 10:53:33 EDT (Mon, 25 Oct 2010)
</span><br>
<span class="quotelev2">&gt;&gt; New Revision: 23931
</span><br>
<span class="quotelev2">&gt;&gt; URL: <a href="https://svn.open-mpi.org/trac/ompi/changeset/23931">https://svn.open-mpi.org/trac/ompi/changeset/23931</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Log:
</span><br>
<span class="quotelev2">&gt;&gt; Remove the sample and test code from the libevent distro - don't need to include them in ompi
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Removed:
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/opal/mca/event/libevent207/libevent/sample/
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/opal/mca/event/libevent207/libevent/test/
</span><br>
<span class="quotelev2">&gt;&gt; Text files modified: 
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/opal/mca/event/libevent207/libevent/Makefile.am  |     2 +-                                      
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/opal/mca/event/libevent207/libevent/configure.in |     2 +-                                      
</span><br>
<span class="quotelev2">&gt;&gt;  2 files changed, 2 insertions(+), 2 deletions(-)
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Modified: trunk/opal/mca/event/libevent207/libevent/Makefile.am
</span><br>
<span class="quotelev2">&gt;&gt; ==============================================================================
</span><br>
<span class="quotelev2">&gt;&gt; --- trunk/opal/mca/event/libevent207/libevent/Makefile.am	(original)
</span><br>
<span class="quotelev2">&gt;&gt; +++ trunk/opal/mca/event/libevent207/libevent/Makefile.am	2010-10-25 10:53:33 EDT (Mon, 25 Oct 2010)
</span><br>
<span class="quotelev2">&gt;&gt; @@ -85,7 +85,7 @@
</span><br>
<span class="quotelev2">&gt;&gt; 	libevent.pc.in \
</span><br>
<span class="quotelev2">&gt;&gt; 	Doxyfile \
</span><br>
<span class="quotelev2">&gt;&gt; 	whatsnew-2.0.txt \
</span><br>
<span class="quotelev2">&gt;&gt; -	Makefile.nmake test/Makefile.nmake \
</span><br>
<span class="quotelev2">&gt;&gt; +	Makefile.nmake \
</span><br>
<span class="quotelev2">&gt;&gt; 	$(PLATFORM_DEPENDENT_SRC)
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; # OMPI: Changed to noinst and libevent.la
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Modified: trunk/opal/mca/event/libevent207/libevent/configure.in
</span><br>
<span class="quotelev2">&gt;&gt; ==============================================================================
</span><br>
<span class="quotelev2">&gt;&gt; --- trunk/opal/mca/event/libevent207/libevent/configure.in	(original)
</span><br>
<span class="quotelev2">&gt;&gt; +++ trunk/opal/mca/event/libevent207/libevent/configure.in	2010-10-25 10:53:33 EDT (Mon, 25 Oct 2010)
</span><br>
<span class="quotelev2">&gt;&gt; @@ -838,4 +838,4 @@
</span><br>
<span class="quotelev2">&gt;&gt; fi
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; AC_CONFIG_FILES( [libevent.pc libevent_openssl.pc libevent_pthreads.pc] )
</span><br>
<span class="quotelev2">&gt;&gt; -AC_OUTPUT(Makefile include/Makefile test/Makefile sample/Makefile)
</span><br>
<span class="quotelev2">&gt;&gt; +AC_OUTPUT(Makefile include/Makefile)
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; svn mailing list
</span><br>
<span class="quotelev2">&gt;&gt; svn_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/svn">http://www.open-mpi.org/mailman/listinfo.cgi/svn</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
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
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8617.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r23936"</a>
<li><strong>Previous message:</strong> <a href="8615.php">Aur&#233;lien Bouteiller: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r23931"</a>
<li><strong>In reply to:</strong> <a href="8615.php">Aur&#233;lien Bouteiller: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r23931"</a>
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

<?
$subject_val = "Re: [OMPI devel] openmpi-1.2.4 compilation error in orte_abort.c on Fedora 8 - patch included";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Dec 10 16:59:49 2007" -->
<!-- isoreceived="20071210215949" -->
<!-- sent="Mon, 10 Dec 2007 16:59:31 -0500" -->
<!-- isosent="20071210215931" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] openmpi-1.2.4 compilation error in orte_abort.c on Fedora 8 - patch included" -->
<!-- id="32626760-BADB-45C9-B715-EE3C95777F19_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="475D6312.6030801_at_hamburgnet.de" -->
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
<strong>Subject:</strong> Re: [OMPI devel] openmpi-1.2.4 compilation error in orte_abort.c on Fedora 8 - patch included<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-12-10 16:59:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2777.php">Ralph Castain: "Re: [OMPI devel] openmpi-1.2.4 compilation error in orte_abort.c on Fedora 8 - patch included"</a>
<li><strong>Previous message:</strong> <a href="2775.php">Jeff Squyres: "Re: [OMPI devel] [PATCH] openib btl: correct help message error"</a>
<li><strong>In reply to:</strong> <a href="2770.php">Sebastian Schmitzdorff: "[OMPI devel] openmpi-1.2.4 compilation error in orte_abort.c on Fedora 8 - patch included"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2777.php">Ralph Castain: "Re: [OMPI devel] openmpi-1.2.4 compilation error in orte_abort.c on Fedora 8 - patch included"</a>
<li><strong>Reply:</strong> <a href="2777.php">Ralph Castain: "Re: [OMPI devel] openmpi-1.2.4 compilation error in orte_abort.c on Fedora 8 - patch included"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Yo Ralph --
<br>
<p>I see you committed this to the ORTE-future branch.  Any objections to  
<br>
me committing to trunk/v1.2?
<br>
<p>(Thanks Sebastian -- stupid Fedora! ;-) )
<br>
<p><p>On Dec 10, 2007, at 11:02 AM, Sebastian Schmitzdorff wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; on Fedora 8 x86_64 openmpi-1.2.4 doesn't compile.
</span><br>
<span class="quotelev1">&gt; A quick glance at the nightly openmpi snapshot leads me to the
</span><br>
<span class="quotelev1">&gt; conclusion that
</span><br>
<span class="quotelev1">&gt; this is still the case.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ----------------------------------------------------
</span><br>
<span class="quotelev1">&gt; In function 'open',
</span><br>
<span class="quotelev1">&gt;   inlined from 'orte_abort' at runtime/orte_abort.c:91:
</span><br>
<span class="quotelev1">&gt; /usr/include/bits/fcntl2.h:51: error: call to '__open_missing_mode'
</span><br>
<span class="quotelev1">&gt; declared with attribute error: open with O_CREAT in second argument
</span><br>
<span class="quotelev1">&gt; needs 3 arguments
</span><br>
<span class="quotelev1">&gt; make[1]: *** [runtime/orte_abort.lo] Error 1
</span><br>
<span class="quotelev1">&gt; make[1]: Leaving directory `/var/tmp/OFED_topdir/BUILD/openmpi-1.2.4/ 
</span><br>
<span class="quotelev1">&gt; orte'
</span><br>
<span class="quotelev1">&gt; make: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; ----------------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; There is a missing filemode in &quot;open&quot; in orte_abort.c:91.
</span><br>
<span class="quotelev1">&gt; fcntl2.h doesnt allow this anymore.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; please find the simple diff below.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --------------------------------------------
</span><br>
<span class="quotelev1">&gt; --- runtime/orte_abort.c        2007-12-10 00:01:50.000000000 +0100
</span><br>
<span class="quotelev1">&gt; +++ test        2007-12-10 00:01:00.000000000 +0100
</span><br>
<span class="quotelev1">&gt; @@ -88,7 +88,7 @@
</span><br>
<span class="quotelev1">&gt;            ORTE_ERROR_LOG(ORTE_ERR_OUT_OF_RESOURCE);
</span><br>
<span class="quotelev1">&gt;            goto CLEANUP;
</span><br>
<span class="quotelev1">&gt;        }
</span><br>
<span class="quotelev1">&gt; -        fd = open(abort_file, O_CREAT);
</span><br>
<span class="quotelev1">&gt; +        fd = open(abort_file, O_CREAT, 0666);
</span><br>
<span class="quotelev1">&gt;        if (0 &lt; fd) close(fd);
</span><br>
<span class="quotelev1">&gt;    }
</span><br>
<span class="quotelev1">&gt; --------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hope this is the right place for the diff.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; regards
</span><br>
<span class="quotelev1">&gt; sebastian
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Sebastian Schmitzdorff - Managing Director
</span><br>
<span class="quotelev1">&gt; Hamburgnet
</span><br>
<span class="quotelev1">&gt; <a href="http://www.hamburgnet.de">http://www.hamburgnet.de</a>
</span><br>
<span class="quotelev1">&gt; Kottwitzstrasse 49 D-20253 Hamburg
</span><br>
<span class="quotelev1">&gt; fon: +49 40 736 72-322 fax: +49 40 736 72-321
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
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2777.php">Ralph Castain: "Re: [OMPI devel] openmpi-1.2.4 compilation error in orte_abort.c on Fedora 8 - patch included"</a>
<li><strong>Previous message:</strong> <a href="2775.php">Jeff Squyres: "Re: [OMPI devel] [PATCH] openib btl: correct help message error"</a>
<li><strong>In reply to:</strong> <a href="2770.php">Sebastian Schmitzdorff: "[OMPI devel] openmpi-1.2.4 compilation error in orte_abort.c on Fedora 8 - patch included"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2777.php">Ralph Castain: "Re: [OMPI devel] openmpi-1.2.4 compilation error in orte_abort.c on Fedora 8 - patch included"</a>
<li><strong>Reply:</strong> <a href="2777.php">Ralph Castain: "Re: [OMPI devel] openmpi-1.2.4 compilation error in orte_abort.c on Fedora 8 - patch included"</a>
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

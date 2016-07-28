<?
$subject_val = "Re: [OMPI devel] openmpi-1.2.4 compilation error in orte_abort.c on Fedora 8 - patch included";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Dec 10 17:16:00 2007" -->
<!-- isoreceived="20071210221600" -->
<!-- sent="Mon, 10 Dec 2007 15:15:49 -0700" -->
<!-- isosent="20071210221549" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] openmpi-1.2.4 compilation error in orte_abort.c on Fedora 8 - patch included" -->
<!-- id="C38308A5.4092%rhc_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="32626760-BADB-45C9-B715-EE3C95777F19_at_cisco.com" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-12-10 17:15:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2778.php">Peter Wong: "[OMPI devel] Dynamically Turning On and Off Memory Manager of Open MPI at Runtime??"</a>
<li><strong>Previous message:</strong> <a href="2776.php">Jeff Squyres: "Re: [OMPI devel] openmpi-1.2.4 compilation error in orte_abort.c on Fedora 8 - patch included"</a>
<li><strong>In reply to:</strong> <a href="2776.php">Jeff Squyres: "Re: [OMPI devel] openmpi-1.2.4 compilation error in orte_abort.c on Fedora 8 - patch included"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2781.php">George Bosilca: "Re: [OMPI devel] openmpi-1.2.4 compilation error in orte_abort.c on Fedora 8 - patch included"</a>
<li><strong>Reply:</strong> <a href="2781.php">George Bosilca: "Re: [OMPI devel] openmpi-1.2.4 compilation error in orte_abort.c on Fedora 8 - patch included"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Nah, go ahead! Just change the permission to 0660 - that's a private file
<br>
that others shouldn't really perturb.
<br>
<p>Ralph
<br>
<p><p><p>On 12/10/07 2:59 PM, &quot;Jeff Squyres&quot; &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Yo Ralph --
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I see you committed this to the ORTE-future branch.  Any objections to
</span><br>
<span class="quotelev1">&gt; me committing to trunk/v1.2?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; (Thanks Sebastian -- stupid Fedora! ;-) )
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Dec 10, 2007, at 11:02 AM, Sebastian Schmitzdorff wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Hi,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; on Fedora 8 x86_64 openmpi-1.2.4 doesn't compile.
</span><br>
<span class="quotelev2">&gt;&gt; A quick glance at the nightly openmpi snapshot leads me to the
</span><br>
<span class="quotelev2">&gt;&gt; conclusion that
</span><br>
<span class="quotelev2">&gt;&gt; this is still the case.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; ----------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; In function 'open',
</span><br>
<span class="quotelev2">&gt;&gt;   inlined from 'orte_abort' at runtime/orte_abort.c:91:
</span><br>
<span class="quotelev2">&gt;&gt; /usr/include/bits/fcntl2.h:51: error: call to '__open_missing_mode'
</span><br>
<span class="quotelev2">&gt;&gt; declared with attribute error: open with O_CREAT in second argument
</span><br>
<span class="quotelev2">&gt;&gt; needs 3 arguments
</span><br>
<span class="quotelev2">&gt;&gt; make[1]: *** [runtime/orte_abort.lo] Error 1
</span><br>
<span class="quotelev2">&gt;&gt; make[1]: Leaving directory `/var/tmp/OFED_topdir/BUILD/openmpi-1.2.4/
</span><br>
<span class="quotelev2">&gt;&gt; orte'
</span><br>
<span class="quotelev2">&gt;&gt; make: *** [all-recursive] Error 1
</span><br>
<span class="quotelev2">&gt;&gt; ----------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; There is a missing filemode in &quot;open&quot; in orte_abort.c:91.
</span><br>
<span class="quotelev2">&gt;&gt; fcntl2.h doesnt allow this anymore.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; please find the simple diff below.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; --- runtime/orte_abort.c        2007-12-10 00:01:50.000000000 +0100
</span><br>
<span class="quotelev2">&gt;&gt; +++ test        2007-12-10 00:01:00.000000000 +0100
</span><br>
<span class="quotelev2">&gt;&gt; @@ -88,7 +88,7 @@
</span><br>
<span class="quotelev2">&gt;&gt;            ORTE_ERROR_LOG(ORTE_ERR_OUT_OF_RESOURCE);
</span><br>
<span class="quotelev2">&gt;&gt;            goto CLEANUP;
</span><br>
<span class="quotelev2">&gt;&gt;        }
</span><br>
<span class="quotelev2">&gt;&gt; -        fd = open(abort_file, O_CREAT);
</span><br>
<span class="quotelev2">&gt;&gt; +        fd = open(abort_file, O_CREAT, 0666);
</span><br>
<span class="quotelev2">&gt;&gt;        if (0 &lt; fd) close(fd);
</span><br>
<span class="quotelev2">&gt;&gt;    }
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Hope this is the right place for the diff.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; regards
</span><br>
<span class="quotelev2">&gt;&gt; sebastian
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Sebastian Schmitzdorff - Managing Director
</span><br>
<span class="quotelev2">&gt;&gt; Hamburgnet
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.hamburgnet.de">http://www.hamburgnet.de</a>
</span><br>
<span class="quotelev2">&gt;&gt; Kottwitzstrasse 49 D-20253 Hamburg
</span><br>
<span class="quotelev2">&gt;&gt; fon: +49 40 736 72-322 fax: +49 40 736 72-321
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2778.php">Peter Wong: "[OMPI devel] Dynamically Turning On and Off Memory Manager of Open MPI at Runtime??"</a>
<li><strong>Previous message:</strong> <a href="2776.php">Jeff Squyres: "Re: [OMPI devel] openmpi-1.2.4 compilation error in orte_abort.c on Fedora 8 - patch included"</a>
<li><strong>In reply to:</strong> <a href="2776.php">Jeff Squyres: "Re: [OMPI devel] openmpi-1.2.4 compilation error in orte_abort.c on Fedora 8 - patch included"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2781.php">George Bosilca: "Re: [OMPI devel] openmpi-1.2.4 compilation error in orte_abort.c on Fedora 8 - patch included"</a>
<li><strong>Reply:</strong> <a href="2781.php">George Bosilca: "Re: [OMPI devel] openmpi-1.2.4 compilation error in orte_abort.c on Fedora 8 - patch included"</a>
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

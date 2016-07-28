<?
$subject_val = "Re: [OMPI devel] openmpi-1.2.4 compilation error in orte_abort.c on Fedora 8 - patch included";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Dec 11 07:53:24 2007" -->
<!-- isoreceived="20071211125324" -->
<!-- sent="Tue, 11 Dec 2007 07:52:53 -0500" -->
<!-- isosent="20071211125253" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] openmpi-1.2.4 compilation error in orte_abort.c on Fedora 8 - patch included" -->
<!-- id="CA59FE8B-24C4-4853-864E-293724037F7A_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="CE859140-4DDB-47A1-9486-0DD38B929ECA_at_eecs.utk.edu" -->
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
<strong>Date:</strong> 2007-12-11 07:52:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2783.php">Tim Prins: "Re: [OMPI devel] opal_condition_wait"</a>
<li><strong>Previous message:</strong> <a href="2781.php">George Bosilca: "Re: [OMPI devel] openmpi-1.2.4 compilation error in orte_abort.c on Fedora 8 - patch included"</a>
<li><strong>In reply to:</strong> <a href="2781.php">George Bosilca: "Re: [OMPI devel] openmpi-1.2.4 compilation error in orte_abort.c on Fedora 8 - patch included"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Er, ya -- duh.  Oops.  I'll fix...
<br>
<p><p>On Dec 11, 2007, at 5:07 AM, George Bosilca wrote:
<br>
<p><span class="quotelev1">&gt; 0600 you means ? I don't really see why you want to share the file  
</span><br>
<span class="quotelev1">&gt; with the whole group ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Thanks,
</span><br>
<span class="quotelev1">&gt;    george.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Dec 10, 2007, at 5:15 PM, Ralph Castain wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Nah, go ahead! Just change the permission to 0660 - that's a  
</span><br>
<span class="quotelev2">&gt;&gt; private file
</span><br>
<span class="quotelev2">&gt;&gt; that others shouldn't really perturb.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Ralph
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On 12/10/07 2:59 PM, &quot;Jeff Squyres&quot; &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Yo Ralph --
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I see you committed this to the ORTE-future branch.  Any  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; objections to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; me committing to trunk/v1.2?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (Thanks Sebastian -- stupid Fedora! ;-) )
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Dec 10, 2007, at 11:02 AM, Sebastian Schmitzdorff wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; on Fedora 8 x86_64 openmpi-1.2.4 doesn't compile.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; A quick glance at the nightly openmpi snapshot leads me to the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; conclusion that
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; this is still the case.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ----------------------------------------------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; In function 'open',
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; inlined from 'orte_abort' at runtime/orte_abort.c:91:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /usr/include/bits/fcntl2.h:51: error: call to '__open_missing_mode'
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; declared with attribute error: open with O_CREAT in second argument
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; needs 3 arguments
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; make[1]: *** [runtime/orte_abort.lo] Error 1
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; make[1]: Leaving directory `/var/tmp/OFED_topdir/BUILD/ 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; openmpi-1.2.4/
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; orte'
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; make: *** [all-recursive] Error 1
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ----------------------------------------------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; There is a missing filemode in &quot;open&quot; in orte_abort.c:91.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; fcntl2.h doesnt allow this anymore.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; please find the simple diff below.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --------------------------------------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --- runtime/orte_abort.c        2007-12-10 00:01:50.000000000 +0100
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +++ test        2007-12-10 00:01:00.000000000 +0100
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; @@ -88,7 +88,7 @@
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;          ORTE_ERROR_LOG(ORTE_ERR_OUT_OF_RESOURCE);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;          goto CLEANUP;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;      }
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -        fd = open(abort_file, O_CREAT);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +        fd = open(abort_file, O_CREAT, 0666);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;      if (0 &lt; fd) close(fd);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  }
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --------------------------------------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Hope this is the right place for the diff.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; regards
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; sebastian
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -- 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Sebastian Schmitzdorff - Managing Director
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Hamburgnet
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.hamburgnet.de">http://www.hamburgnet.de</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Kottwitzstrasse 49 D-20253 Hamburg
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; fon: +49 40 736 72-322 fax: +49 40 736 72-321
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
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
<li><strong>Next message:</strong> <a href="2783.php">Tim Prins: "Re: [OMPI devel] opal_condition_wait"</a>
<li><strong>Previous message:</strong> <a href="2781.php">George Bosilca: "Re: [OMPI devel] openmpi-1.2.4 compilation error in orte_abort.c on Fedora 8 - patch included"</a>
<li><strong>In reply to:</strong> <a href="2781.php">George Bosilca: "Re: [OMPI devel] openmpi-1.2.4 compilation error in orte_abort.c on Fedora 8 - patch included"</a>
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

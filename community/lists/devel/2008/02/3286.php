<?
$subject_val = "Re: [OMPI devel] PLPA ready?";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb 21 11:58:12 2008" -->
<!-- isoreceived="20080221165812" -->
<!-- sent="Thu, 21 Feb 2008 08:57:48 -0800" -->
<!-- isosent="20080221165748" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] PLPA ready?" -->
<!-- id="C5F1C669-DF0C-404A-9252-CDBEFF59514E_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="000801c8749f$f49ab1e0$710519ac_at_voltaire.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] PLPA ready?<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-02-21 11:57:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3287.php">Sharon Melamed: "Re: [OMPI devel] PLPA ready?"</a>
<li><strong>Previous message:</strong> <a href="3285.php">Pak Lui: "Re: [OMPI devel] rch-step2 branch errors"</a>
<li><strong>In reply to:</strong> <a href="3284.php">Sharon Melamed: "Re: [OMPI devel] PLPA ready?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3287.php">Sharon Melamed: "Re: [OMPI devel] PLPA ready?"</a>
<li><strong>Reply:</strong> <a href="3287.php">Sharon Melamed: "Re: [OMPI devel] PLPA ready?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Sounds perfect.
<br>
<p>How about this -- since your and my changes are inter-dependent, can  
<br>
you send me a patch for the paffinity change?  I'll apply it at the  
<br>
same time that I apply the new PLPA (later today).
<br>
<p>Thanks!
<br>
<p><p>On Feb 21, 2008, at 7:39 AM, Sharon Melamed wrote:
<br>
<p><span class="quotelev1">&gt; Yes, I think we should change paffinity.h and  
</span><br>
<span class="quotelev1">&gt; paffinity_solaris_module.c and
</span><br>
<span class="quotelev1">&gt; paffinity_windows_module.c .
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I added those API's some time ago based on the plpa API's. Now, the  
</span><br>
<span class="quotelev1">&gt; plpa API
</span><br>
<span class="quotelev1">&gt; has changed and no one uses those API's. (Except me and in the  
</span><br>
<span class="quotelev1">&gt; future, maybe
</span><br>
<span class="quotelev1">&gt; Sun guys) So I don't see why not change those API's including their
</span><br>
<span class="quotelev1">&gt; signature in paffinity.h
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Sharon.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -----Original Message-----
</span><br>
<span class="quotelev1">&gt; From: devel-bounces_at_[hidden] [mailto:devel-bounces_at_[hidden]]  
</span><br>
<span class="quotelev1">&gt; On
</span><br>
<span class="quotelev1">&gt; Behalf Of Jeff Squyres
</span><br>
<span class="quotelev1">&gt; Sent: Thursday, February 21, 2008 5:19 PM
</span><br>
<span class="quotelev1">&gt; To: Open MPI Developers
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI devel] PLPA ready?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Feb 21, 2008, at 7:13 AM, Jeff Squyres wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Right, but the plpa_solaris_module.c file will need to be updated
</span><br>
<span class="quotelev3">&gt;&gt;&gt; with
</span><br>
<span class="quotelev2">&gt;&gt; the new function signatures so that it will still compile (i.e., if
</span><br>
<span class="quotelev2">&gt;&gt; you're going to be changing the function signatures in paffinity.h).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hah -- I meant paffinity_solaris_module.c.  :-)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; Cisco Systems
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
<li><strong>Next message:</strong> <a href="3287.php">Sharon Melamed: "Re: [OMPI devel] PLPA ready?"</a>
<li><strong>Previous message:</strong> <a href="3285.php">Pak Lui: "Re: [OMPI devel] rch-step2 branch errors"</a>
<li><strong>In reply to:</strong> <a href="3284.php">Sharon Melamed: "Re: [OMPI devel] PLPA ready?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3287.php">Sharon Melamed: "Re: [OMPI devel] PLPA ready?"</a>
<li><strong>Reply:</strong> <a href="3287.php">Sharon Melamed: "Re: [OMPI devel] PLPA ready?"</a>
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

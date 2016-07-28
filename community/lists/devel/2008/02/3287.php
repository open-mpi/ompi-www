<?
$subject_val = "Re: [OMPI devel] PLPA ready?";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb 21 13:25:56 2008" -->
<!-- isoreceived="20080221182556" -->
<!-- sent="Thu, 21 Feb 2008 20:25:44 +0200" -->
<!-- isosent="20080221182544" -->
<!-- name="Sharon Melamed" -->
<!-- email="sharonm135_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] PLPA ready?" -->
<!-- id="000f01c874b7$2d710d40$710519ac_at_voltaire.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="C5F1C669-DF0C-404A-9252-CDBEFF59514E_at_cisco.com" -->
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
<strong>From:</strong> Sharon Melamed (<em>sharonm135_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-02-21 13:25:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3288.php">George Bosilca: "Re: [OMPI devel] 1.3 Release schedule and contents"</a>
<li><strong>Previous message:</strong> <a href="3286.php">Jeff Squyres: "Re: [OMPI devel] PLPA ready?"</a>
<li><strong>In reply to:</strong> <a href="3286.php">Jeff Squyres: "Re: [OMPI devel] PLPA ready?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Sure. 
<br>
<p>-----Original Message-----
<br>
From: devel-bounces_at_[hidden] [mailto:devel-bounces_at_[hidden]] On
<br>
Behalf Of Jeff Squyres
<br>
Sent: Thursday, February 21, 2008 6:58 PM
<br>
To: Open MPI Developers
<br>
Subject: Re: [OMPI devel] PLPA ready?
<br>
<p>Sounds perfect.
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
_______________________________________________
devel mailing list
devel_at_[hidden]
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>

</pre>
<p>
<p><hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-3287/linux-paffinity.patch">linux-paffinity.patch</a>
</ul>
<!-- attachment="linux-paffinity.patch" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3288.php">George Bosilca: "Re: [OMPI devel] 1.3 Release schedule and contents"</a>
<li><strong>Previous message:</strong> <a href="3286.php">Jeff Squyres: "Re: [OMPI devel] PLPA ready?"</a>
<li><strong>In reply to:</strong> <a href="3286.php">Jeff Squyres: "Re: [OMPI devel] PLPA ready?"</a>
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

<?
$subject_val = "Re: [OMPI devel] PLPA ready?";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb 21 10:39:45 2008" -->
<!-- isoreceived="20080221153945" -->
<!-- sent="Thu, 21 Feb 2008 17:39:30 +0200" -->
<!-- isosent="20080221153930" -->
<!-- name="Sharon Melamed" -->
<!-- email="sharonm135_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] PLPA ready?" -->
<!-- id="000801c8749f$f49ab1e0$710519ac_at_voltaire.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="85223A6F-A21F-480A-84CC-23869A401B6A_at_cisco.com" -->
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
<strong>Date:</strong> 2008-02-21 10:39:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3285.php">Pak Lui: "Re: [OMPI devel] rch-step2 branch errors"</a>
<li><strong>Previous message:</strong> <a href="3283.php">Tim Prins: "Re: [OMPI devel] rch-step2 branch errors"</a>
<li><strong>In reply to:</strong> <a href="3282.php">Jeff Squyres: "Re: [OMPI devel] PLPA ready?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3286.php">Jeff Squyres: "Re: [OMPI devel] PLPA ready?"</a>
<li><strong>Reply:</strong> <a href="3286.php">Jeff Squyres: "Re: [OMPI devel] PLPA ready?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Yes, I think we should change paffinity.h and paffinity_solaris_module.c and
<br>
paffinity_windows_module.c .
<br>
<p>I added those API's some time ago based on the plpa API's. Now, the plpa API
<br>
has changed and no one uses those API's. (Except me and in the future, maybe
<br>
Sun guys) So I don't see why not change those API's including their
<br>
signature in paffinity.h 
<br>
<p>Sharon. 
<br>
<p>-----Original Message-----
<br>
From: devel-bounces_at_[hidden] [mailto:devel-bounces_at_[hidden]] On
<br>
Behalf Of Jeff Squyres
<br>
Sent: Thursday, February 21, 2008 5:19 PM
<br>
To: Open MPI Developers
<br>
Subject: Re: [OMPI devel] PLPA ready?
<br>
<p>On Feb 21, 2008, at 7:13 AM, Jeff Squyres wrote:
<br>
<p><span class="quotelev2">&gt;&gt; Right, but the plpa_solaris_module.c file will need to be updated  
</span><br>
<span class="quotelev2">&gt;&gt; with
</span><br>
<span class="quotelev1">&gt; the new function signatures so that it will still compile (i.e., if
</span><br>
<span class="quotelev1">&gt; you're going to be changing the function signatures in paffinity.h).
</span><br>
<p><p>Hah -- I meant paffinity_solaris_module.c.  :-)
<br>
<p><pre>
-- 
Jeff Squyres
Cisco Systems
_______________________________________________
devel mailing list
devel_at_[hidden]
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3285.php">Pak Lui: "Re: [OMPI devel] rch-step2 branch errors"</a>
<li><strong>Previous message:</strong> <a href="3283.php">Tim Prins: "Re: [OMPI devel] rch-step2 branch errors"</a>
<li><strong>In reply to:</strong> <a href="3282.php">Jeff Squyres: "Re: [OMPI devel] PLPA ready?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3286.php">Jeff Squyres: "Re: [OMPI devel] PLPA ready?"</a>
<li><strong>Reply:</strong> <a href="3286.php">Jeff Squyres: "Re: [OMPI devel] PLPA ready?"</a>
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

<?
$subject_val = "Re: [OMPI devel] [EXTERNAL]  oshmem implementation still lacking";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Sep 15 06:16:52 2013" -->
<!-- isoreceived="20130915101652" -->
<!-- sent="Sun, 15 Sep 2013 10:16:50 +0000" -->
<!-- isosent="20130915101650" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [EXTERNAL]  oshmem implementation still lacking" -->
<!-- id="EF66BBEB19BADC41AC8CCF5F684F07FC4F8AC13C_at_xmb-rcd-x01.cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="69A29AB53D57F54D81061A9E4E45B8FD4410DBBA_at_EXMB01.srn.sandia.gov" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [EXTERNAL]  oshmem implementation still lacking<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-09-15 06:16:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12902.php">Ralph Castain: "Re: [OMPI devel] Intercomm Merge"</a>
<li><strong>Previous message:</strong> <a href="12900.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL]  oshmem implementation still lacking"</a>
<li><strong>In reply to:</strong> <a href="12900.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL]  oshmem implementation still lacking"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ok.
<br>
<p>Mellanox: please rename shmemcc and shmemfort, and please create shmemCC (shmemcxx for non-case-sensitive filesystems -- see ompi/tools/wrappers for how this is done).
<br>
<p>Thanks.
<br>
<p><p>On Sep 15, 2013, at 12:14 PM, &quot;Barrett, Brian W&quot; &lt;bwbarre_at_[hidden]&gt;
<br>
&nbsp;wrote:
<br>
<p><span class="quotelev1">&gt; Yes, they should be oshcc, oshCC (there are no C++ bindings, but there is a wrapper compiler), and oshfort, according to the specification.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Brian
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt;  Brian W. Barrett
</span><br>
<span class="quotelev1">&gt;  Scalable System Software Group
</span><br>
<span class="quotelev1">&gt;  Sandia National Laboratories
</span><br>
<span class="quotelev1">&gt; ________________________________________
</span><br>
<span class="quotelev1">&gt; From: devel [devel-bounces_at_[hidden]] on behalf of Jeff Squyres (jsquyres) [jsquyres_at_[hidden]]
</span><br>
<span class="quotelev1">&gt; Sent: Sunday, September 15, 2013 4:13 AM
</span><br>
<span class="quotelev1">&gt; To: Open MPI Developers
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI devel] [EXTERNAL]  oshmem implementation still lacking
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Sep 15, 2013, at 12:10 PM, &quot;Barrett, Brian W&quot; &lt;bwbarre_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Are the wrapper compilers named shmem&lt;lang&gt;?  Given that the OpenSHMEM specification specifically calls out the name of the wrapper compilers as osh&lt;lang&gt;, we should probably follow that convention.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Yes, they're named shmemcc and shmemfort.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; So they should be named oshcc and oshfort?  I.e., is there a convention for &lt;lang&gt;?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
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
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12902.php">Ralph Castain: "Re: [OMPI devel] Intercomm Merge"</a>
<li><strong>Previous message:</strong> <a href="12900.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL]  oshmem implementation still lacking"</a>
<li><strong>In reply to:</strong> <a href="12900.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL]  oshmem implementation still lacking"</a>
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

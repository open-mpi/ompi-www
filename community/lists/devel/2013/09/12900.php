<?
$subject_val = "Re: [OMPI devel] [EXTERNAL]  oshmem implementation still lacking";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Sep 15 06:14:46 2013" -->
<!-- isoreceived="20130915101446" -->
<!-- sent="Sun, 15 Sep 2013 10:14:29 +0000" -->
<!-- isosent="20130915101429" -->
<!-- name="Barrett, Brian W" -->
<!-- email="bwbarre_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [EXTERNAL]  oshmem implementation still lacking" -->
<!-- id="69A29AB53D57F54D81061A9E4E45B8FD4410DBBA_at_EXMB01.srn.sandia.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="EF66BBEB19BADC41AC8CCF5F684F07FC4F8AC09E_at_xmb-rcd-x01.cisco.com" -->
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
<strong>From:</strong> Barrett, Brian W (<em>bwbarre_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-09-15 06:14:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12901.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [EXTERNAL]  oshmem implementation still lacking"</a>
<li><strong>Previous message:</strong> <a href="12899.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [EXTERNAL]  oshmem implementation still lacking"</a>
<li><strong>In reply to:</strong> <a href="12899.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [EXTERNAL]  oshmem implementation still lacking"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12901.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [EXTERNAL]  oshmem implementation still lacking"</a>
<li><strong>Reply:</strong> <a href="12901.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [EXTERNAL]  oshmem implementation still lacking"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Yes, they should be oshcc, oshCC (there are no C++ bindings, but there is a wrapper compiler), and oshfort, according to the specification.

Brian

--
  Brian W. Barrett
  Scalable System Software Group
  Sandia National Laboratories
________________________________________
From: devel [devel-bounces_at_[hidden]] on behalf of Jeff Squyres (jsquyres) [jsquyres_at_[hidden]]
Sent: Sunday, September 15, 2013 4:13 AM
To: Open MPI Developers
Subject: Re: [OMPI devel] [EXTERNAL]  oshmem implementation still lacking

On Sep 15, 2013, at 12:10 PM, &quot;Barrett, Brian W&quot; &lt;bwbarre_at_[hidden]&gt; wrote:

&gt; Are the wrapper compilers named shmem&lt;lang&gt;?  Given that the OpenSHMEM specification specifically calls out the name of the wrapper compilers as osh&lt;lang&gt;, we should probably follow that convention.

Yes, they're named shmemcc and shmemfort.

So they should be named oshcc and oshfort?  I.e., is there a convention for &lt;lang&gt;?

--
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>

_______________________________________________
devel mailing list
devel_at_[hidden]
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12901.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [EXTERNAL]  oshmem implementation still lacking"</a>
<li><strong>Previous message:</strong> <a href="12899.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [EXTERNAL]  oshmem implementation still lacking"</a>
<li><strong>In reply to:</strong> <a href="12899.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [EXTERNAL]  oshmem implementation still lacking"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12901.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [EXTERNAL]  oshmem implementation still lacking"</a>
<li><strong>Reply:</strong> <a href="12901.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [EXTERNAL]  oshmem implementation still lacking"</a>
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

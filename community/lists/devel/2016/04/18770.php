<?
$subject_val = "Re: [OMPI devel] Missing support for 2 types in MPI_Sizeof()";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Apr 15 09:20:49 2016" -->
<!-- isoreceived="20160415132049" -->
<!-- sent="Fri, 15 Apr 2016 13:20:47 +0000" -->
<!-- isosent="20160415132047" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Missing support for 2 types in MPI_Sizeof()" -->
<!-- id="3F67738B-7C1D-4E18-8D4A-D80F16A5CEA1_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="5710E6F6.9090607_at_atos.net" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Missing support for 2 types in MPI_Sizeof()<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-04-15 09:20:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18771.php">Gilles Gouaillardet: "Re: [OMPI devel] Missing support for 2 types in MPI_Sizeof()"</a>
<li><strong>Previous message:</strong> <a href="18769.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Missing support for 2 types in MPI_Sizeof()"</a>
<li><strong>In reply to:</strong> <a href="18768.php">DERBEY, NADIA: "Re: [OMPI devel] Missing support for 2 types in MPI_Sizeof()"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18771.php">Gilles Gouaillardet: "Re: [OMPI devel] Missing support for 2 types in MPI_Sizeof()"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Apr 15, 2016, at 9:05 AM, DERBEY, NADIA &lt;nadia.derbey_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Actually, we have a functional test suite that used to pass for these 
</span><br>
<span class="quotelev1">&gt; types and it fails now with v2.x. So I thought it was a regression.
</span><br>
<p>Gotcha.
<br>
<p><span class="quotelev1">&gt; But from what you're saying, the new standard doesn't have a strong 
</span><br>
<span class="quotelev1">&gt; requirement on LOGICAL and CHARACTER.
</span><br>
<p>It looks like that definition of &quot;numeric&quot; types for MPI_SIZEOF goes back to MPI-2.0 (I just checked), which is when MPI_SIZEOF was introduced.
<br>
<p><span class="quotelev1">&gt; So I really don't mind, since I 
</span><br>
<span class="quotelev1">&gt; don't know whether these types are widely used in client applications. I 
</span><br>
<span class="quotelev1">&gt; guess no?
</span><br>
<p>I doubt that MPI_SIZEOF is used much in client applications, but I don't know that for a fact.
<br>
<p>There is lingering / low priority work in the MPI Forum to get rid of MPI_SIZEOF altogether because the Fortran &quot;storage_size&quot; intrinsic should wholly replace this (which didn't exist back when MPI_SIZEOF was created).  ...I had to dig to find the old ticket, but it's here:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;<a href="https://svn.mpi-forum.org/trac/mpi-forum-web/ticket/465">https://svn.mpi-forum.org/trac/mpi-forum-web/ticket/465</a>
<br>
<p>I.e., it didn't migrate over from the Forum old Trac system to the new Forum Github system, which goes to tell you how much work has occurred on this ticket... :-)
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18771.php">Gilles Gouaillardet: "Re: [OMPI devel] Missing support for 2 types in MPI_Sizeof()"</a>
<li><strong>Previous message:</strong> <a href="18769.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Missing support for 2 types in MPI_Sizeof()"</a>
<li><strong>In reply to:</strong> <a href="18768.php">DERBEY, NADIA: "Re: [OMPI devel] Missing support for 2 types in MPI_Sizeof()"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18771.php">Gilles Gouaillardet: "Re: [OMPI devel] Missing support for 2 types in MPI_Sizeof()"</a>
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

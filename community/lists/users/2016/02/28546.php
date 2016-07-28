<?
$subject_val = "Re: [OMPI users] difference between OpenMPI - intel MPI -- how to understand where\why";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb 17 09:11:24 2016" -->
<!-- isoreceived="20160217141124" -->
<!-- sent="Wed, 17 Feb 2016 14:11:23 +0000" -->
<!-- isosent="20160217141123" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] difference between OpenMPI - intel MPI -- how to understand where\why" -->
<!-- id="etPan.56c47f8a.29e46f9b.cef3_at_JSQUYRES-M-H05C" -->
<!-- charset="utf-8" -->
<!-- inreplyto="CAG8o1y57pmk+pPREE28NXuobgyDgsAtHoPdF_m3KY+Sz=297PQ_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] difference between OpenMPI - intel MPI -- how to understand where\why<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-02-17 09:11:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28547.php">Jeff Squyres (jsquyres): "Re: [OMPI users] OMPI users] Fortran vs C reductions"</a>
<li><strong>Previous message:</strong> <a href="28545.php">Diego Avesani: "Re: [OMPI users] difference between OpenMPI - intel MPI -- how to understand where\why"</a>
<li><strong>In reply to:</strong> <a href="28545.php">Diego Avesani: "Re: [OMPI users] difference between OpenMPI - intel MPI -- how to understand where\why"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
-----Original Message-----
<br>
From:&#194;&#160;Diego Avesani &lt;diego.avesani_at_[hidden]&gt;
<br>
Reply:&#194;&#160;Open MPI Users &lt;users_at_[hidden]&gt;
<br>
Date:&#194;&#160;February 17, 2016 at 8:13:35 AM
<br>
To:&#194;&#160;Open MPI Users &lt;users_at_[hidden]&gt;
<br>
Subject:&#194;&#160; Re: [OMPI users] difference between OpenMPI - intel MPI -- how to understand where\why
<br>

<br>
<span class="quotelev1">&gt; I am trying to solve a huge linear system, which converges with open MPI
</span><br>
<span class="quotelev1">&gt; and not with MPI.&#194;&#160;
</span><br>

<br>
I think you're trying to say &quot;...which converges with Open MPI and not with *Intel* MPI&quot;, right?
<br>

<br>
<span class="quotelev1">&gt; The problem is that I do not know what is the exact
</span><br>
<span class="quotelev1">&gt; result.
</span><br>

<br>
What are the differences between your runs?
<br>

<br>
- you already identified Open MPI vs. Intel MPI
<br>
- are you running on different hardware? &#194;&#160;(e.g., different clusters with different processors / accelerators, different network types, ...etc.)
<br>
- are you compiling with different compilers?
<br>
- are you using the same support libraries (e.g., numerical support libraries), and if so, were they compiled differently?
<br>

<br>
Usually, the best idea in these kinds of cases is to reduce the issue to a small program where you can reproduce the problem (i.e., reduce the unknowns to as small a number as possible), and then see where that leads to.
<br>

<br>
--  
<br>
Jeff Squyres
<br>
jsquyres_at_[hidden]  
<br>
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28547.php">Jeff Squyres (jsquyres): "Re: [OMPI users] OMPI users] Fortran vs C reductions"</a>
<li><strong>Previous message:</strong> <a href="28545.php">Diego Avesani: "Re: [OMPI users] difference between OpenMPI - intel MPI -- how to understand where\why"</a>
<li><strong>In reply to:</strong> <a href="28545.php">Diego Avesani: "Re: [OMPI users] difference between OpenMPI - intel MPI -- how to understand where\why"</a>
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

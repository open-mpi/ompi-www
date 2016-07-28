<?
$subject_val = "[hwloc-devel] Fwd:  BGQ empty topology with MPI";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar 22 18:07:15 2012" -->
<!-- isoreceived="20120322220715" -->
<!-- sent="Thu, 22 Mar 2012 18:07:11 -0400" -->
<!-- isosent="20120322220711" -->
<!-- name="Daniel Ibanez" -->
<!-- email="dan.a.ibanez_at_[hidden]" -->
<!-- subject="[hwloc-devel] Fwd:  BGQ empty topology with MPI" -->
<!-- id="CADcFuaaSkx-KCSSZkoSsqU5MrmPDJzbeo-HkQAKJ5_mOaziksQ_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CADcFuaaWFhsTX8OJpFWYd_P3HTjuAdJ80S98UGUFjuzogBBUnQ_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [hwloc-devel] Fwd:  BGQ empty topology with MPI<br>
<strong>From:</strong> Daniel Ibanez (<em>dan.a.ibanez_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-03-22 18:07:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2977.php">Samuel Thibault: "Re: [hwloc-devel] BGQ empty topology with MPI"</a>
<li><strong>Previous message:</strong> <a href="2975.php">Samuel Thibault: "Re: [hwloc-devel] BGQ empty topology with MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2978.php">Brice Goglin: "Re: [hwloc-devel] Fwd:  BGQ empty topology with MPI"</a>
<li><strong>Reply:</strong> <a href="2978.php">Brice Goglin: "Re: [hwloc-devel] Fwd:  BGQ empty topology with MPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
---------- Forwarded message ----------
<br>
From: Daniel Ibanez &lt;dan.a.ibanez_at_[hidden]&gt;
<br>
Date: Thu, Mar 22, 2012 at 6:06 PM
<br>
Subject: Re: [hwloc-devel] BGQ empty topology with MPI
<br>
To: Samuel Thibault &lt;samuel.thibault_at_[hidden]&gt;
<br>
<p><p>I suspected this might be the reason, so I called &quot;nm&quot;
<br>
with the static versions of the libraries their compiler wrappers
<br>
link against and I could not find the term &quot;hwloc&quot; in the output.
<br>
Is this a valid test?
<br>
<p><p>On Thu, Mar 22, 2012 at 6:35 AM, Samuel Thibault
<br>
&lt;samuel.thibault_at_[hidden]&gt;wrote:
<br>
<p><span class="quotelev1">&gt; Brice Goglin, le Thu 22 Mar 2012 10:58:46 +0100, a &#195;&#169;crit :
</span><br>
<span class="quotelev2">&gt; &gt; I don't see anything bad in your outputs.
</span><br>
<span class="quotelev2">&gt; &gt; So there's something strange going on when MPI is added. Which MPI are
</span><br>
<span class="quotelev1">&gt; using?
</span><br>
<span class="quotelev2">&gt; &gt; Is this a derivative of MPICH that embeds hwloc? (MPICH &gt;= 1.2.1 if I
</span><br>
<span class="quotelev1">&gt; remember
</span><br>
<span class="quotelev2">&gt; &gt; correctly)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; There might be symbol conflicts then, indeed.  That's the usual problem
</span><br>
<span class="quotelev1">&gt; with embedding instead of using an installed library.  Doesn't its
</span><br>
<span class="quotelev1">&gt; configure use the installed library if one exists?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Samuel
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
Dan Ibanez
-- 
Dan Ibanez
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-devel/att-2976/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2977.php">Samuel Thibault: "Re: [hwloc-devel] BGQ empty topology with MPI"</a>
<li><strong>Previous message:</strong> <a href="2975.php">Samuel Thibault: "Re: [hwloc-devel] BGQ empty topology with MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2978.php">Brice Goglin: "Re: [hwloc-devel] Fwd:  BGQ empty topology with MPI"</a>
<li><strong>Reply:</strong> <a href="2978.php">Brice Goglin: "Re: [hwloc-devel] Fwd:  BGQ empty topology with MPI"</a>
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

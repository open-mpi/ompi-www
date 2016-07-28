<?
$subject_val = "Re: [OMPI users] Question on handling of memory for communications";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jul  8 14:07:19 2013" -->
<!-- isoreceived="20130708180719" -->
<!-- sent="Mon, 8 Jul 2013 18:07:06 +0000" -->
<!-- isosent="20130708180706" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Question on handling of memory for communications" -->
<!-- id="EF66BBEB19BADC41AC8CCF5F684F07FC4F6F382C_at_xmb-rcd-x01.cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="51DAFE78.8010909_at_inria.fr" -->
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
<strong>Subject:</strong> Re: [OMPI users] Question on handling of memory for communications<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-07-08 14:07:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22288.php">Elken, Tom: "Re: [OMPI users] Support for CUDA and GPU-direct with OpenMPI 1.6.5 an 1.7.2"</a>
<li><strong>Previous message:</strong> <a href="22286.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Question on handling of memory for communications"</a>
<li><strong>In reply to:</strong> <a href="22285.php">Brice Goglin: "Re: [OMPI users] Question on handling of memory for communications"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22291.php">Michael Thomadakis: "Re: [OMPI users] Question on handling of memory for communications"</a>
<li><strong>Reply:</strong> <a href="22291.php">Michael Thomadakis: "Re: [OMPI users] Question on handling of memory for communications"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jul 8, 2013, at 2:01 PM, Brice Goglin &lt;Brice.Goglin_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; The driver doesn't allocate much memory here. Maybe some small control buffers, but nothing significantly involved in large message transfer performance. Everything critical here is allocated by user-space (either MPI lib or application), so we just have to make sure we bind the process memory properly. I used hwloc-bind to do that.
</span><br>
<p>+1
<br>
<p>Remember that the point of IB and other operating-system bypass devices is that the driver is not involved in the fast path of sending / receiving.  One of the side-effects of that design point is that userspace does all the allocation of send / receive buffers.
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
<li><strong>Next message:</strong> <a href="22288.php">Elken, Tom: "Re: [OMPI users] Support for CUDA and GPU-direct with OpenMPI 1.6.5 an 1.7.2"</a>
<li><strong>Previous message:</strong> <a href="22286.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Question on handling of memory for communications"</a>
<li><strong>In reply to:</strong> <a href="22285.php">Brice Goglin: "Re: [OMPI users] Question on handling of memory for communications"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22291.php">Michael Thomadakis: "Re: [OMPI users] Question on handling of memory for communications"</a>
<li><strong>Reply:</strong> <a href="22291.php">Michael Thomadakis: "Re: [OMPI users] Question on handling of memory for communications"</a>
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

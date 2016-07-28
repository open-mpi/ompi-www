<?
$subject_val = "Re: [OMPI devel] RFC: Remove (broken) heterogeneous support";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jan 30 09:46:51 2013" -->
<!-- isoreceived="20130130144651" -->
<!-- sent="Wed, 30 Jan 2013 14:46:45 +0000" -->
<!-- isosent="20130130144645" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: Remove (broken) heterogeneous support" -->
<!-- id="EF66BBEB19BADC41AC8CCF5F684F07FC42CBD222_at_xmb-rcd-x01.cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="20130130144033.GA12955_at_neuromancer" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RFC: Remove (broken) heterogeneous support<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-01-30 09:46:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12076.php">Jure Pečar: "Re: [OMPI devel] Open MPI (not quite) on Cray XC30"</a>
<li><strong>Previous message:</strong> <a href="12074.php">Andreas Sch&#228;fer: "Re: [OMPI devel] RFC: Remove (broken) heterogeneous support"</a>
<li><strong>In reply to:</strong> <a href="12074.php">Andreas Sch&#228;fer: "Re: [OMPI devel] RFC: Remove (broken) heterogeneous support"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jan 30, 2013, at 9:40 AM, Andreas Sch&#228;fer &lt;gentryx_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; But isn't heterogeneity the main reason for having MPI datatypes in
</span><br>
<span class="quotelev1">&gt; the first place? Otherwise I could always use MPI_CHAR and sizeof(Foo).
</span><br>
<p>Heterogeneity was a much bigger issue back in the 90s.  Nowadays, most people have pretty homogeneous clusters.
<br>
<p><span class="quotelev2">&gt;&gt; Understood.  But the reality is that this is a very uncommon feature, and we apparently don't have the resources to fix it.  :-\
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Could you give a rough estimate on how much effort this would be?
</span><br>
<p><p>Unfortunately, no.  No one has even looked into this.
<br>
<p>I'm *guessing* that it's not a difficult issue to fix -- that something is just broken down in the datatype handling of heterogeneous machines.  But that's an assumption/guess.  Tracking that down, however, will likely take a little effort, especially for someone unfamiliar with the code base.  I can give hints where to start looking, but that's about it.
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
<li><strong>Next message:</strong> <a href="12076.php">Jure Pečar: "Re: [OMPI devel] Open MPI (not quite) on Cray XC30"</a>
<li><strong>Previous message:</strong> <a href="12074.php">Andreas Sch&#228;fer: "Re: [OMPI devel] RFC: Remove (broken) heterogeneous support"</a>
<li><strong>In reply to:</strong> <a href="12074.php">Andreas Sch&#228;fer: "Re: [OMPI devel] RFC: Remove (broken) heterogeneous support"</a>
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

<?
$subject_val = "Re: [OMPI users] wrong library version for dependent open-rte lib when libtool relinks";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Feb 27 08:22:21 2016" -->
<!-- isoreceived="20160227132221" -->
<!-- sent="Sat, 27 Feb 2016 13:22:18 +0000" -->
<!-- isosent="20160227132218" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] wrong library version for dependent open-rte lib when libtool relinks" -->
<!-- id="BEE600BF-1CEC-49A3-8E1C-D336AC490093_at_cisco.com" -->
<!-- charset="utf-8" -->
<!-- inreplyto="CAPLAFj79558o4gBV6H_NLpg4ZnLwgzn2P8hYV+tJeFT=r_Ehng_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] wrong library version for dependent open-rte lib when libtool relinks<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-02-27 08:22:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28599.php">Emmanuel Thomé: "Re: [OMPI users] wrong library version for dependent open-rte lib when libtool relinks"</a>
<li><strong>Previous message:</strong> <a href="28597.php">Gilles Gouaillardet: "Re: [OMPI users] wrong library version for dependent open-rte lib when libtool relinks"</a>
<li><strong>In reply to:</strong> <a href="28596.php">Emmanuel Thom&#195;&#169;: "Re: [OMPI users] wrong library version for dependent open-rte lib when libtool relinks"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28599.php">Emmanuel Thomé: "Re: [OMPI users] wrong library version for dependent open-rte lib when libtool relinks"</a>
<li><strong>Reply:</strong> <a href="28599.php">Emmanuel Thomé: "Re: [OMPI users] wrong library version for dependent open-rte lib when libtool relinks"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Feb 27, 2016, at 5:42 AM, Emmanuel Thom&#195;&#169; &lt;emmanuel.thome_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Specifically, I have /usr/lib/libosmcomp.la. If I delete that file,
</span><br>
<span class="quotelev1">&gt; then no -L/usr/lib shows up in the relink command for libmpi; libtool
</span><br>
<span class="quotelev1">&gt; just emits -losmcomp alone, which is fine. Then the subsequent
</span><br>
<span class="quotelev1">&gt; -lopen-rte finds the one installed for the library being build, not
</span><br>
<span class="quotelev1">&gt; the /usr one.
</span><br>

<br>
Does /usr/lib/libosmcomp.la contain the -L/usr/lib flag, or rpath it?
<br>

<br>
If so, then Open MPI has no way of knowing that a given dependent library's .la file is faulty (i.e., inserting -L / etc. flags that point to linker-default locations).  The real fix would be to fix /usr/lib/libosmcomp.la.
<br>

<br>
-- 
<br>
Jeff Squyres
<br>
jsquyres_at_[hidden]
<br>
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
<br>

<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28599.php">Emmanuel Thomé: "Re: [OMPI users] wrong library version for dependent open-rte lib when libtool relinks"</a>
<li><strong>Previous message:</strong> <a href="28597.php">Gilles Gouaillardet: "Re: [OMPI users] wrong library version for dependent open-rte lib when libtool relinks"</a>
<li><strong>In reply to:</strong> <a href="28596.php">Emmanuel Thom&#195;&#169;: "Re: [OMPI users] wrong library version for dependent open-rte lib when libtool relinks"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28599.php">Emmanuel Thomé: "Re: [OMPI users] wrong library version for dependent open-rte lib when libtool relinks"</a>
<li><strong>Reply:</strong> <a href="28599.php">Emmanuel Thomé: "Re: [OMPI users] wrong library version for dependent open-rte lib when libtool relinks"</a>
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

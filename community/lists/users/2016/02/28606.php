<?
$subject_val = "Re: [OMPI users] wrong library version for dependent open-rte lib when libtool relinks";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Feb 27 09:57:32 2016" -->
<!-- isoreceived="20160227145732" -->
<!-- sent="Sat, 27 Feb 2016 14:57:30 +0000" -->
<!-- isosent="20160227145730" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] wrong library version for dependent open-rte lib when libtool relinks" -->
<!-- id="E1A1BEC1-FB86-4B3D-926A-294E76919907_at_cisco.com" -->
<!-- charset="utf-8" -->
<!-- inreplyto="CAPLAFj7TmtK+WFoJzM-nZ6=zEhgPbVtoSFx+iastgeqULyz0Xw_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2016-02-27 09:57:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28607.php">Saliya Ekanayake: "[OMPI users] Java MPI Code for NAS Benchmarks"</a>
<li><strong>Previous message:</strong> <a href="28605.php">Emmanuel Thom&#195;&#169;: "Re: [OMPI users] wrong library version for dependent open-rte lib when libtool relinks"</a>
<li><strong>In reply to:</strong> <a href="28604.php">Emmanuel Thom&#195;&#169;: "Re: [OMPI users] wrong library version for dependent open-rte lib when libtool relinks"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28605.php">Emmanuel Thom&#195;&#169;: "Re: [OMPI users] wrong library version for dependent open-rte lib when libtool relinks"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Feb 27, 2016, at 9:33 AM, Emmanuel Thom&#195;&#169; &lt;emmanuel.thome_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; dependency_libs=' -losmcomp -libverbs
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /tmp/openmpi-1.10.2/orte/libopen-rte.la
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /tmp/openmpi-1.10.2/opal/libopen-pal.la -lnuma -ldl -lrt -lm -lutil'
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Why does this not look good?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Because my general rule of thumb about link-related command lines is
</span><br>
<span class="quotelev1">&gt; &quot;my stuff first, then the stuff I depend on&quot;.
</span><br>

<br>
I haven't checked carefully, but I'll bet the libmca_common_verbs_usnic issue is what causes -losmcomp -libverbs to be pulled left towards libmpi.
<br>

<br>
<span class="quotelev2">&gt;&gt; Note, too, that 1.10.2 has a bug that one of the core Open MPI libs has a dependency on libibverbs (only Open MPI's plugins are supposed to be dependent upon libibverbs).  This was a mistake that is fixed in the 1.10.3 nightly tarballs.  Indeed, fixing this bug may have the side-effect of fixing your issue.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Is it libmca_common_verbs_usnic ? It seems to be the one which pulls
</span><br>
<span class="quotelev1">&gt; osmcomp as well
</span><br>

<br>
Yes.
<br>

<br>
<span class="quotelev1">&gt; (which, if I follow the same reasoning, has absolutely
</span><br>
<span class="quotelev1">&gt; no reason to be a dependency of libmpi).
</span><br>

<br>
Per your later mail: the v1.10.3 nightly tarball fixes the issue by removing the libmca_common_verbs_usnic stuff.  Yay!
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
<li><strong>Next message:</strong> <a href="28607.php">Saliya Ekanayake: "[OMPI users] Java MPI Code for NAS Benchmarks"</a>
<li><strong>Previous message:</strong> <a href="28605.php">Emmanuel Thom&#195;&#169;: "Re: [OMPI users] wrong library version for dependent open-rte lib when libtool relinks"</a>
<li><strong>In reply to:</strong> <a href="28604.php">Emmanuel Thom&#195;&#169;: "Re: [OMPI users] wrong library version for dependent open-rte lib when libtool relinks"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28605.php">Emmanuel Thom&#195;&#169;: "Re: [OMPI users] wrong library version for dependent open-rte lib when libtool relinks"</a>
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

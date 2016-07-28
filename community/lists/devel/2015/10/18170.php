<?
$subject_val = "Re: [OMPI devel] 16 byte real in Fortran";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Oct 14 18:38:55 2015" -->
<!-- isoreceived="20151014223855" -->
<!-- sent="Wed, 14 Oct 2015 22:38:22 +0000" -->
<!-- isosent="20151014223822" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 16 byte real in Fortran" -->
<!-- id="7E2E6657-58ED-4073-AA5E-27981B9D0E9F_at_cisco.com" -->
<!-- charset="utf-8" -->
<!-- inreplyto="CAKe2itcoi8S9-JAYuXyi2hA7v2kCfDqsCOpRGEB8QSGft3FEgQ_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] 16 byte real in Fortran<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-10-14 18:38:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18171.php">Mark Santcroos: "Re: [OMPI devel] orte-dvm / orte-submit race condition"</a>
<li><strong>Previous message:</strong> <a href="18169.php">Ralph Castain: "Re: [OMPI devel] orte-dvm / orte-submit race condition"</a>
<li><strong>In reply to:</strong> <a href="18168.php">Vladim&#195;&#173;r Fuka: "Re: [OMPI devel] 16 byte real in Fortran"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18172.php">Larry Baker: "Re: [OMPI devel] 16 byte real in Fortran"</a>
<li><strong>Reply:</strong> <a href="18172.php">Larry Baker: "Re: [OMPI devel] 16 byte real in Fortran"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Oct 14, 2015, at 5:53 PM, Vladim&#195;&#173;r Fuka &lt;vladimir.fuka_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; As that ticket notes if REAL*16 &lt;&gt; long double Open MPI should be
</span><br>
<span class="quotelev2">&gt;&gt; disabling redutions on MPI_REAL16. I can take a look and see if I can
</span><br>
<span class="quotelev2">&gt;&gt; determine why that is not working as expected.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Does it really need to be just disabled when the `real(real128)` is
</span><br>
<span class="quotelev1">&gt; actually equivalent to c_long_double? Wouldn't making the explicit
</span><br>
<span class="quotelev1">&gt; interfaces to MPI_Send and others to accept `real(real128)` make more
</span><br>
<span class="quotelev1">&gt; sense? As I wrote in the stackoverflow post, the MPI standard (3.1,
</span><br>
<span class="quotelev1">&gt; pages 628 and 674) is not very clear if MPI_REAL16 corresponds to
</span><br>
<span class="quotelev1">&gt; real*16 or real(real128) if these differ, but making it correspond to
</span><br>
<span class="quotelev1">&gt; real(real128) might be reasonable.
</span><br>

<br>
As I understand it, real*16 is not a real type -- it's a commonly-used type and supported by many (all?) compilers, but it's not actually defined in the Fortran spec.
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
<li><strong>Next message:</strong> <a href="18171.php">Mark Santcroos: "Re: [OMPI devel] orte-dvm / orte-submit race condition"</a>
<li><strong>Previous message:</strong> <a href="18169.php">Ralph Castain: "Re: [OMPI devel] orte-dvm / orte-submit race condition"</a>
<li><strong>In reply to:</strong> <a href="18168.php">Vladim&#195;&#173;r Fuka: "Re: [OMPI devel] 16 byte real in Fortran"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18172.php">Larry Baker: "Re: [OMPI devel] 16 byte real in Fortran"</a>
<li><strong>Reply:</strong> <a href="18172.php">Larry Baker: "Re: [OMPI devel] 16 byte real in Fortran"</a>
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

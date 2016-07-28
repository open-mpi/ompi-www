<?
$subject_val = "Re: [OMPI devel] v1.7.0rc7";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Feb 25 21:42:58 2013" -->
<!-- isoreceived="20130226024258" -->
<!-- sent="Tue, 26 Feb 2013 02:42:54 +0000" -->
<!-- isosent="20130226024254" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] v1.7.0rc7" -->
<!-- id="EF66BBEB19BADC41AC8CCF5F684F07FC43F5B85E_at_xmb-rcd-x01.cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CAFamD4X=iHRgu_gevucM75gWOkfMq=+tqTAuiWMER-r4kP5Ugg_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] v1.7.0rc7<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-02-25 21:42:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12164.php">marco atzeri: "Re: [OMPI devel] v1.7.0rc7"</a>
<li><strong>Previous message:</strong> <a href="12162.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] v1.7.0rc7"</a>
<li><strong>In reply to:</strong> <a href="12161.php">Pavel Mezentsev: "Re: [OMPI devel] v1.7.0rc7"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12162.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] v1.7.0rc7"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Feb 25, 2013, at 6:30 PM, Pavel Mezentsev &lt;pavel.mezentsev_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; I've tried to build it but got different errors with different compilers.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; With Intel (2011.5.220) and pgi (13.2) I get the following error:
</span><br>
<span class="quotelev1">&gt; CC       bcol_iboffload_module.lo
</span><br>
<span class="quotelev1">&gt; bcol_iboffload_module.c(37): catastrophic error: cannot open source file &quot;ompi/mca/common/netpatterns/common_netpatterns.h&quot;
</span><br>
<span class="quotelev1">&gt;   #include &quot;ompi/mca/common/netpatterns/common_netpatterns.h&quot;
</span><br>
<p>This is a clear error.
<br>
<p>Pasha?
<br>
<p><span class="quotelev1">&gt; I failed to find that file anywhere among the sources.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; With pathscale (4.0.12.1) I get the following:
</span><br>
<span class="quotelev1">&gt;   PPFC     mpi-f08-interfaces-callbacks.lo
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; module mpi_f08_interfaces_callbacks
</span><br>
<span class="quotelev1">&gt;        ^                            
</span><br>
<span class="quotelev1">&gt; pathf95-855 pathf95: ERROR MPI_F08_INTERFACES_CALLBACKS, File = mpi-f08-interfaces-callbacks.F90, Line = 9, Column = 8 
</span><br>
<p>I don't have access to the Pathscale compiler.  Without more detail, it's hard to say what's wrong here.
<br>
<p>I've pinged my pathscale contact; perhaps he can shed some light on this...
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
<li><strong>Next message:</strong> <a href="12164.php">marco atzeri: "Re: [OMPI devel] v1.7.0rc7"</a>
<li><strong>Previous message:</strong> <a href="12162.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] v1.7.0rc7"</a>
<li><strong>In reply to:</strong> <a href="12161.php">Pavel Mezentsev: "Re: [OMPI devel] v1.7.0rc7"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12162.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] v1.7.0rc7"</a>
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

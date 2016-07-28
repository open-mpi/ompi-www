<?
$subject_val = "[OMPI devel] autogen.sh generates broken configure on FreeBSD-8.2";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Dec 20 21:55:29 2011" -->
<!-- isoreceived="20111221025529" -->
<!-- sent="Tue, 20 Dec 2011 18:55:00 -0800" -->
<!-- isosent="20111221025500" -->
<!-- name="Paul H. Hargrove" -->
<!-- email="PHHargrove_at_[hidden]" -->
<!-- subject="[OMPI devel] autogen.sh generates broken configure on FreeBSD-8.2" -->
<!-- id="4EF14A84.6000309_at_lbl.gov" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI devel] autogen.sh generates broken configure on FreeBSD-8.2<br>
<strong>From:</strong> Paul H. Hargrove (<em>PHHargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-12-20 21:55:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10192.php">Paul H. Hargrove: "[OMPI devel] openmpi-1.5.5rc1: atomic_cmpset failure on Solaris10/UltraSPARC-T2"</a>
<li><strong>Previous message:</strong> <a href="10190.php">Paul H. Hargrove: "Re: [OMPI devel] openmpi-1.5.5rc1: 2nd gmake dependence (mostly VT)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10194.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] autogen.sh generates broken configure on FreeBSD-8.2"</a>
<li><strong>Reply:</strong> <a href="10194.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] autogen.sh generates broken configure on FreeBSD-8.2"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
While dealing w/ GNU-vs-Berkeley Make issues, mentioned in passing that 
<br>
I wasn't able to autogen on my FreeBSD tester because the resulting 
<br>
configure failed.  The specific failure I encountered was:
<br>
<span class="quotelev1">&gt; configure: error: No atomic primitives available for 
</span><br>
<span class="quotelev1">&gt; amd64-unknown-freebsd8.2
</span><br>
<p>The problem boils down to the difference in the following:
<br>
<p><span class="quotelev1">&gt; $ /usr/local/share/autoconf-2.68/config.guess
</span><br>
<span class="quotelev1">&gt; amd64-unknown-freebsd8.2
</span><br>
<span class="quotelev1">&gt; $ openmpi-1.5.5rc1/config/config.guess
</span><br>
<span class="quotelev1">&gt; x86_64-unknown-freebsd8.2
</span><br>
<p>These differ in the arch identifier, which then causes (at least) 
<br>
opal/config/opal_config_asm.m4 to decide there is no atomics support for 
<br>
the (unknown) architecture.  The included hwloc also appears unhappy w/ 
<br>
arch=amd64, but at least that is non-fatal.  I cannot (yet?) say what 
<br>
else is broken due to this disagreement in system tuple.  I can say that 
<br>
adding &quot;|amd64-*&quot; in the appropriate spot in 
<br>
opal/config/opal_config_asm.m4 is sufficient to get past the configure 
<br>
failure.
<br>
<p>The basic problem is that this system's config.guess is ancient 
<br>
(timestamp='2003-07-02') despite the recent autoconf-2.68.
<br>
I suggest that autogen.sh should include logic to keep the NEWER of the 
<br>
config/config.guess and the one that &quot;automake --copy&quot; wishes to install.
<br>
<p>While looking into this I also noted something &quot;odd&quot; in autogen.sh:
<br>
Why is ompi_autoconf_version=&quot;2.59&quot; when there is ALSO a check for 2.60 
<br>
or later?
<br>
<p>Note that I don't think this is worth fixing for 1.5.5.
<br>
<p>-Paul
<br>
<p><pre>
-- 
Paul H. Hargrove                          PHHargrove_at_[hidden]
Future Technologies Group
HPC Research Department                   Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10192.php">Paul H. Hargrove: "[OMPI devel] openmpi-1.5.5rc1: atomic_cmpset failure on Solaris10/UltraSPARC-T2"</a>
<li><strong>Previous message:</strong> <a href="10190.php">Paul H. Hargrove: "Re: [OMPI devel] openmpi-1.5.5rc1: 2nd gmake dependence (mostly VT)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10194.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] autogen.sh generates broken configure on FreeBSD-8.2"</a>
<li><strong>Reply:</strong> <a href="10194.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] autogen.sh generates broken configure on FreeBSD-8.2"</a>
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

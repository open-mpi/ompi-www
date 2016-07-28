<?
$subject_val = "Re: [OMPI users] wrong library version for dependent open-rte lib when libtool relinks";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Feb 27 09:33:14 2016" -->
<!-- isoreceived="20160227143314" -->
<!-- sent="Sat, 27 Feb 2016 15:33:14 +0100" -->
<!-- isosent="20160227143314" -->
<!-- name="Emmanuel Thom&#195;&#169;" -->
<!-- email="emmanuel.thome_at_[hidden]" -->
<!-- subject="Re: [OMPI users] wrong library version for dependent open-rte lib when libtool relinks" -->
<!-- id="CAPLAFj7TmtK+WFoJzM-nZ6=zEhgPbVtoSFx+iastgeqULyz0Xw_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="BC65F4B6-1A86-4FA5-989B-83A0A8C81578_at_cisco.com" -->
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
<strong>From:</strong> Emmanuel Thom&#195;&#169; (<em>emmanuel.thome_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-02-27 09:33:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28605.php">Emmanuel Thomé: "Re: [OMPI users] wrong library version for dependent open-rte lib when libtool relinks"</a>
<li><strong>Previous message:</strong> <a href="28603.php">Jeff Squyres (jsquyres): "Re: [OMPI users] wrong library version for dependent open-rte lib when libtool relinks"</a>
<li><strong>In reply to:</strong> <a href="28603.php">Jeff Squyres (jsquyres): "Re: [OMPI users] wrong library version for dependent open-rte lib when libtool relinks"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28606.php">Jeff Squyres (jsquyres): "Re: [OMPI users] wrong library version for dependent open-rte lib when libtool relinks"</a>
<li><strong>Reply:</strong> <a href="28606.php">Jeff Squyres (jsquyres): "Re: [OMPI users] wrong library version for dependent open-rte lib when libtool relinks"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks for your analysis.
<br>
<p>On Sat, Feb 27, 2016 at 3:19 PM, Jeff Squyres (jsquyres)
<br>
&lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; [...]
</span><br>
<span class="quotelev1">&gt; 1. osmcomp should not have installed a .la file for a default linker location
</span><br>
<p>Probably not, although the no-brainer default solution does this
<br>
(plus, the .la files say &quot;do not delete&quot;...).
<br>
<p><span class="quotelev1">&gt; 2. Libtool is assuming that .la files are only available for non-default linker locations, and therefore adds a -L for each directory where it finds a .la file
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #1 can probably easily be fixed by the packager.
</span><br>
<span class="quotelev1">&gt; #2 is probably not unreasonable to assume, but certainly could also benefit from a more rigorous check at run-time.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Neither of these are fixable by Open MPI, unfortunately.
</span><br>
<p>I understand that.
<br>
<p><span class="quotelev2">&gt;&gt; It still does not look good that the libmpi.la file has the following:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; dependency_libs=' -losmcomp -libverbs
</span><br>
<span class="quotelev2">&gt;&gt; /tmp/openmpi-1.10.2/orte/libopen-rte.la
</span><br>
<span class="quotelev2">&gt;&gt; /tmp/openmpi-1.10.2/opal/libopen-pal.la -lnuma -ldl -lrt -lm -lutil'
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Why does this not look good?
</span><br>
<p>Because my general rule of thumb about link-related command lines is
<br>
&quot;my stuff first, then the stuff I depend on&quot;. But here it's more
<br>
complicated because everything gets slightly shuffled by libtool
<br>
anyway. I would not have encountered an issue if the -L/usr/lib pulled
<br>
by /usr/lib/libosmcomp.la had been *after* the opal &amp; orte libs.
<br>
<p><span class="quotelev2">&gt;&gt; I have the impression that having -losmcomp -libverbs *after* the opal
</span><br>
<span class="quotelev2">&gt;&gt; and orte .la files would be better. I don't see how to achieve this,
</span><br>
<span class="quotelev2">&gt;&gt; though (just playing with ompi/Makefile.am at the moment, to no avail
</span><br>
<span class="quotelev2">&gt;&gt; so far).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm not sure that this would have any effect.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Note, too, that 1.10.2 has a bug that one of the core Open MPI libs has a dependency on libibverbs (only Open MPI's plugins are supposed to be dependent upon libibverbs).  This was a mistake that is fixed in the 1.10.3 nightly tarballs.  Indeed, fixing this bug may have the side-effect of fixing your issue.
</span><br>
<p>Is it libmca_common_verbs_usnic ? It seems to be the one which pulls
<br>
osmcomp as well (which, if I follow the same reasoning, has absolutely
<br>
no reason to be a dependency of libmpi).
<br>
<p>Best,
<br>
<p>E.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28605.php">Emmanuel Thomé: "Re: [OMPI users] wrong library version for dependent open-rte lib when libtool relinks"</a>
<li><strong>Previous message:</strong> <a href="28603.php">Jeff Squyres (jsquyres): "Re: [OMPI users] wrong library version for dependent open-rte lib when libtool relinks"</a>
<li><strong>In reply to:</strong> <a href="28603.php">Jeff Squyres (jsquyres): "Re: [OMPI users] wrong library version for dependent open-rte lib when libtool relinks"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28606.php">Jeff Squyres (jsquyres): "Re: [OMPI users] wrong library version for dependent open-rte lib when libtool relinks"</a>
<li><strong>Reply:</strong> <a href="28606.php">Jeff Squyres (jsquyres): "Re: [OMPI users] wrong library version for dependent open-rte lib when libtool relinks"</a>
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

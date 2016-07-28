<?
$subject_val = "Re: [OMPI users] wrong library version for dependent open-rte lib when libtool relinks";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Feb 27 09:19:37 2016" -->
<!-- isoreceived="20160227141937" -->
<!-- sent="Sat, 27 Feb 2016 14:19:26 +0000" -->
<!-- isosent="20160227141926" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] wrong library version for dependent open-rte lib when libtool relinks" -->
<!-- id="BC65F4B6-1A86-4FA5-989B-83A0A8C81578_at_cisco.com" -->
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
<strong>Date:</strong> 2016-02-27 09:19:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28604.php">Emmanuel Thomé: "Re: [OMPI users] wrong library version for dependent open-rte lib when libtool relinks"</a>
<li><strong>Previous message:</strong> <a href="28602.php">Emmanuel Thom&#195;&#169;: "Re: [OMPI users] wrong library version for dependent open-rte lib when libtool relinks"</a>
<li><strong>In reply to:</strong> <a href="28596.php">Emmanuel Thom&#195;&#169;: "Re: [OMPI users] wrong library version for dependent open-rte lib when libtool relinks"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28604.php">Emmanuel Thomé: "Re: [OMPI users] wrong library version for dependent open-rte lib when libtool relinks"</a>
<li><strong>Reply:</strong> <a href="28604.php">Emmanuel Thomé: "Re: [OMPI users] wrong library version for dependent open-rte lib when libtool relinks"</a>
<li><strong>Reply:</strong> <a href="28605.php">Emmanuel Thomé: "Re: [OMPI users] wrong library version for dependent open-rte lib when libtool relinks"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I got your log files and looked at them, but am replying earlier in the thread in order to give more specific answers.  More below.
<br>

<br>

<br>
<span class="quotelev1">&gt; On Feb 27, 2016, at 5:42 AM, Emmanuel Thom&#195;&#169; &lt;emmanuel.thome_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks for your answer.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have no LD_LIBRARY_PATH. I am not sure it should matter anyway,
</span><br>
<span class="quotelev1">&gt; though: the objdump command looks at what the object file requests,
</span><br>
<span class="quotelev1">&gt; not necessarily what happens at runtime as if we were using ldd.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This seems to be related to the MOFED debian packages including a .la
</span><br>
<span class="quotelev1">&gt; file for the stuff they install (which is against debian practice,
</span><br>
<span class="quotelev1">&gt; although not exactly for the same reason:
</span><br>
<span class="quotelev1">&gt; <a href="https://wiki.debian.org/ReleaseGoals/LAFileRemoval">https://wiki.debian.org/ReleaseGoals/LAFileRemoval</a> ).
</span><br>
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
I think that there are two issues here:
<br>

<br>
1. osmcomp should not have installed a .la file for a default linker location
<br>
2. Libtool is assuming that .la files are only available for non-default linker locations, and therefore adds a -L for each directory where it finds a .la file
<br>

<br>
#1 can probably easily be fixed by the packager.
<br>
#2 is probably not unreasonable to assume, but certainly could also benefit from a more rigorous check at run-time.
<br>

<br>
Neither of these are fixable by Open MPI, unfortunately.  Fortunately, you discovered what seems to be the correct workaround: delete the /usr/lib/libosmcomp.la file.
<br>

<br>
As noted, #1 is only fixable by the osmcomp package. #2 is really only fixable by the GNU Libtool project.  I don't know if they'll fix it, or just tell you &quot;packages should not install .la files for linker-default locations&quot; (because it may be an effectively impossible problem to portably determine linker-default locations).
<br>

<br>
<span class="quotelev1">&gt; It still does not look good that the libmpi.la file has the following:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; dependency_libs=' -losmcomp -libverbs
</span><br>
<span class="quotelev1">&gt; /tmp/openmpi-1.10.2/orte/libopen-rte.la
</span><br>
<span class="quotelev1">&gt; /tmp/openmpi-1.10.2/opal/libopen-pal.la -lnuma -ldl -lrt -lm -lutil'
</span><br>

<br>
Why does this not look good?
<br>

<br>
<span class="quotelev1">&gt; I have the impression that having -losmcomp -libverbs *after* the opal
</span><br>
<span class="quotelev1">&gt; and orte .la files would be better. I don't see how to achieve this,
</span><br>
<span class="quotelev1">&gt; though (just playing with ompi/Makefile.am at the moment, to no avail
</span><br>
<span class="quotelev1">&gt; so far).
</span><br>

<br>
I'm not sure that this would have any effect.
<br>

<br>
Note, too, that 1.10.2 has a bug that one of the core Open MPI libs has a dependency on libibverbs (only Open MPI's plugins are supposed to be dependent upon libibverbs).  This was a mistake that is fixed in the 1.10.3 nightly tarballs.  Indeed, fixing this bug may have the side-effect of fixing your issue.
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
<li><strong>Next message:</strong> <a href="28604.php">Emmanuel Thomé: "Re: [OMPI users] wrong library version for dependent open-rte lib when libtool relinks"</a>
<li><strong>Previous message:</strong> <a href="28602.php">Emmanuel Thom&#195;&#169;: "Re: [OMPI users] wrong library version for dependent open-rte lib when libtool relinks"</a>
<li><strong>In reply to:</strong> <a href="28596.php">Emmanuel Thom&#195;&#169;: "Re: [OMPI users] wrong library version for dependent open-rte lib when libtool relinks"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28604.php">Emmanuel Thomé: "Re: [OMPI users] wrong library version for dependent open-rte lib when libtool relinks"</a>
<li><strong>Reply:</strong> <a href="28604.php">Emmanuel Thomé: "Re: [OMPI users] wrong library version for dependent open-rte lib when libtool relinks"</a>
<li><strong>Reply:</strong> <a href="28605.php">Emmanuel Thomé: "Re: [OMPI users] wrong library version for dependent open-rte lib when libtool relinks"</a>
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

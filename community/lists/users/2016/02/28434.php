<?
$subject_val = "Re: [OMPI users] New libmpi.so dependency on libibverbs.so?";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Feb  2 09:21:06 2016" -->
<!-- isoreceived="20160202142106" -->
<!-- sent="Tue, 02 Feb 2016 14:21:01 +0000" -->
<!-- isosent="20160202142101" -->
<!-- name="Dave Love" -->
<!-- email="d.love_at_[hidden]" -->
<!-- subject="Re: [OMPI users] New libmpi.so dependency on libibverbs.so?" -->
<!-- id="87vb679os2.fsf_at_pc102091.liv.ac.uk" -->
<!-- inreplyto="56AF9B47.4080204_at_ntlworld.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] New libmpi.so dependency on libibverbs.so?<br>
<strong>From:</strong> Dave Love (<em>d.love_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-02-02 09:21:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28435.php">Jeff Squyres (jsquyres): "Re: [OMPI users] MX replacement?"</a>
<li><strong>Previous message:</strong> <a href="28433.php">Peter Wind: "Re: [OMPI users] shared memory under fortran, bug?"</a>
<li><strong>In reply to:</strong> <a href="28424.php">Number Cruncher: "[OMPI users] New libmpi.so dependency on libibverbs.so?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28437.php">Jeff Squyres (jsquyres): "Re: [OMPI users] New libmpi.so dependency on libibverbs.so?"</a>
<li><strong>Reply:</strong> <a href="28437.php">Jeff Squyres (jsquyres): "Re: [OMPI users] New libmpi.so dependency on libibverbs.so?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Number Cruncher &lt;number.cruncher_at_[hidden]&gt; writes:
<br>
<p><span class="quotelev1">&gt; Having compiled various recent Open MPI sources with the same
</span><br>
<span class="quotelev1">&gt; &quot;configure&quot; options, I've noticed that the &quot;libmpi.so&quot; shared library
</span><br>
<span class="quotelev1">&gt; from 1.10.1 now depends itself directly on
</span><br>
<span class="quotelev1">&gt; libibverbs.so.1. Previously, 1.10.0 for example, only plugins such as
</span><br>
<span class="quotelev1">&gt; mca_btl_openib.so depended on it.
</span><br>
<p>For what it's worth, you can work around that (using GNU tools) by
<br>
adding -Wl,--as-needed to LDFLAGS on configure.  There's a lot of
<br>
similar instances, and it would be good to tidy them by only linking
<br>
against what's necessary, even if it doesn't help startup.  That's
<br>
probably tedious but should be a straightforward way to contribute, in
<br>
case anyone's interested.
<br>
<p>It seems we mostly don't believe in packaging round here, but you can
<br>
see easily by running rpmlint (or the dpkg equivalent? -- I forget):
<br>
<p>&nbsp;&nbsp;$ vagrant ssh -c 'rpm -q openmpi; rpmlint openmpi | grep -c unused-direct-shlib-dependency'
<br>
&nbsp;&nbsp;openmpi-1.10.2-2.fc24.x86_64
<br>
&nbsp;&nbsp;144
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28435.php">Jeff Squyres (jsquyres): "Re: [OMPI users] MX replacement?"</a>
<li><strong>Previous message:</strong> <a href="28433.php">Peter Wind: "Re: [OMPI users] shared memory under fortran, bug?"</a>
<li><strong>In reply to:</strong> <a href="28424.php">Number Cruncher: "[OMPI users] New libmpi.so dependency on libibverbs.so?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28437.php">Jeff Squyres (jsquyres): "Re: [OMPI users] New libmpi.so dependency on libibverbs.so?"</a>
<li><strong>Reply:</strong> <a href="28437.php">Jeff Squyres (jsquyres): "Re: [OMPI users] New libmpi.so dependency on libibverbs.so?"</a>
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

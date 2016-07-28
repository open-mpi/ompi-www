<?
$subject_val = "Re: [OMPI users] New libmpi.so dependency on libibverbs.so?";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Feb  2 09:42:19 2016" -->
<!-- isoreceived="20160202144219" -->
<!-- sent="Tue, 2 Feb 2016 14:42:17 +0000" -->
<!-- isosent="20160202144217" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] New libmpi.so dependency on libibverbs.so?" -->
<!-- id="CB8CB8EA-924D-4445-B7E7-134E65AA3D89_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="87vb679os2.fsf_at_pc102091.liv.ac.uk" -->
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
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-02-02 09:42:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28438.php">Brice Goglin: "Re: [OMPI users] MX replacement?"</a>
<li><strong>Previous message:</strong> <a href="28436.php">Gilles Gouaillardet: "Re: [OMPI users] shared memory under fortran, bug?"</a>
<li><strong>In reply to:</strong> <a href="28434.php">Dave Love: "Re: [OMPI users] New libmpi.so dependency on libibverbs.so?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28440.php">Dave Love: "Re: [OMPI users] New libmpi.so dependency on libibverbs.so?"</a>
<li><strong>Reply:</strong> <a href="28440.php">Dave Love: "Re: [OMPI users] New libmpi.so dependency on libibverbs.so?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
This functionality is there to overcome a bug in libibverbs (that prints a dire warning about Cisco usNIC devices not being supported).
<br>
<p>However, I can see how this additional linkage is undesirable.  We can probably flip the default on this component to not build by default -- but leave it there as a workaround for users who want to use it (i.e., all this component does is suppress the warning from libibverbs).  Another workaround that Cisco is now shipping is a &quot;dummy&quot; libibverbs plugin for usnic devices that also suppresses this warning (see <a href="https://github.com/cisco/libusnic_verbs">https://github.com/cisco/libusnic_verbs</a>, if you care).
<br>
<p><p><p><span class="quotelev1">&gt; On Feb 2, 2016, at 9:21 AM, Dave Love &lt;d.love_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Number Cruncher &lt;number.cruncher_at_[hidden]&gt; writes:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Having compiled various recent Open MPI sources with the same
</span><br>
<span class="quotelev2">&gt;&gt; &quot;configure&quot; options, I've noticed that the &quot;libmpi.so&quot; shared library
</span><br>
<span class="quotelev2">&gt;&gt; from 1.10.1 now depends itself directly on
</span><br>
<span class="quotelev2">&gt;&gt; libibverbs.so.1. Previously, 1.10.0 for example, only plugins such as
</span><br>
<span class="quotelev2">&gt;&gt; mca_btl_openib.so depended on it.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; For what it's worth, you can work around that (using GNU tools) by
</span><br>
<span class="quotelev1">&gt; adding -Wl,--as-needed to LDFLAGS on configure.  There's a lot of
</span><br>
<span class="quotelev1">&gt; similar instances, and it would be good to tidy them by only linking
</span><br>
<span class="quotelev1">&gt; against what's necessary, even if it doesn't help startup.  That's
</span><br>
<span class="quotelev1">&gt; probably tedious but should be a straightforward way to contribute, in
</span><br>
<span class="quotelev1">&gt; case anyone's interested.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It seems we mostly don't believe in packaging round here, but you can
</span><br>
<span class="quotelev1">&gt; see easily by running rpmlint (or the dpkg equivalent? -- I forget):
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  $ vagrant ssh -c 'rpm -q openmpi; rpmlint openmpi | grep -c unused-direct-shlib-dependency'
</span><br>
<span class="quotelev1">&gt;  openmpi-1.10.2-2.fc24.x86_64
</span><br>
<span class="quotelev1">&gt;  144
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/02/28434.php">http://www.open-mpi.org/community/lists/users/2016/02/28434.php</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28438.php">Brice Goglin: "Re: [OMPI users] MX replacement?"</a>
<li><strong>Previous message:</strong> <a href="28436.php">Gilles Gouaillardet: "Re: [OMPI users] shared memory under fortran, bug?"</a>
<li><strong>In reply to:</strong> <a href="28434.php">Dave Love: "Re: [OMPI users] New libmpi.so dependency on libibverbs.so?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28440.php">Dave Love: "Re: [OMPI users] New libmpi.so dependency on libibverbs.so?"</a>
<li><strong>Reply:</strong> <a href="28440.php">Dave Love: "Re: [OMPI users] New libmpi.so dependency on libibverbs.so?"</a>
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

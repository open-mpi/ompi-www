<?
$subject_val = "Re: [OMPI users] New libmpi.so dependency on libibverbs.so?";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Feb  2 12:15:47 2016" -->
<!-- isoreceived="20160202171547" -->
<!-- sent="Tue, 02 Feb 2016 17:15:43 +0000" -->
<!-- isosent="20160202171543" -->
<!-- name="Number Cruncher" -->
<!-- email="number.cruncher_at_[hidden]" -->
<!-- subject="Re: [OMPI users] New libmpi.so dependency on libibverbs.so?" -->
<!-- id="56B0E43F.6040305_at_ntlworld.com" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="56B005DD.5040309_at_rist.or.jp" -->
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
<strong>From:</strong> Number Cruncher (<em>number.cruncher_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-02-02 12:15:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28440.php">Dave Love: "Re: [OMPI users] New libmpi.so dependency on libibverbs.so?"</a>
<li><strong>Previous message:</strong> <a href="28438.php">Brice Goglin: "Re: [OMPI users] MX replacement?"</a>
<li><strong>In reply to:</strong> <a href="28427.php">Gilles Gouaillardet: "Re: [OMPI users] New libmpi.so dependency on libibverbs.so?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28441.php">Jeff Squyres (jsquyres): "Re: [OMPI users] New libmpi.so dependency on libibverbs.so?"</a>
<li><strong>Reply:</strong> <a href="28441.php">Jeff Squyres (jsquyres): "Re: [OMPI users] New libmpi.so dependency on libibverbs.so?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks for the info. I'll probably go with insisting on libibverbs.
<br>
<p>Does seem a bit contrary to the very high modularity in OpenMPI that 
<br>
essentially a Cisco-specific module introduces a libmpi dependency where 
<br>
openib never did....
<br>
<p>Simon
<br>
<p><p>On 02/02/16 01:26, Gilles Gouaillardet wrote:
<br>
<span class="quotelev1">&gt; Simon,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; this is an usnic requirement
</span><br>
<span class="quotelev1">&gt; (mca/common/verbs_usnic to be more specific)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; as a workaround (and assuming you do not need usnic stuff on any of 
</span><br>
<span class="quotelev1">&gt; your nodes) you can
</span><br>
<span class="quotelev1">&gt; configure DISABLE_common_verbs_usnic=1 ... &amp;&amp; make install
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; note that if libibverbs.so.1 is missing on some nodes, you will get 
</span><br>
<span class="quotelev1">&gt; warnings
</span><br>
<span class="quotelev1">&gt; (such as cannot dlopen mca_btl_openib.so) on these nodes unless you 
</span><br>
<span class="quotelev1">&gt; specify
</span><br>
<span class="quotelev1">&gt; --mca btl ^openib
</span><br>
<span class="quotelev1">&gt; on these nodes
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; i think it would be much easier if libibverbs.so.1 were available on 
</span><br>
<span class="quotelev1">&gt; all your nodes, including those with no infiniband hardware
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Gilles
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 2/2/2016 2:52 AM, Number Cruncher wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Having compiled various recent Open MPI sources with the same 
</span><br>
<span class="quotelev2">&gt;&gt; &quot;configure&quot; options, I've noticed that the &quot;libmpi.so&quot; shared library 
</span><br>
<span class="quotelev2">&gt;&gt; from 1.10.1 now depends itself directly on libibverbs.so.1. 
</span><br>
<span class="quotelev2">&gt;&gt; Previously, 1.10.0 for example, only plugins such as 
</span><br>
<span class="quotelev2">&gt;&gt; mca_btl_openib.so depended on it.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; E.g.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; readelf -d ../ompi_install4/lib/libmpi.so.12.0.0:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  0x0000000000000001 (NEEDED)             Shared library: 
</span><br>
<span class="quotelev2">&gt;&gt; [libopen-rte.so.12]
</span><br>
<span class="quotelev2">&gt;&gt;  0x0000000000000001 (NEEDED)             Shared library: 
</span><br>
<span class="quotelev2">&gt;&gt; [libopen-pal.so.13]
</span><br>
<span class="quotelev2">&gt;&gt;  0x0000000000000001 (NEEDED)             Shared library: [libdl.so.2]
</span><br>
<span class="quotelev2">&gt;&gt;  0x0000000000000001 (NEEDED)             Shared library: [librt.so.1]
</span><br>
<span class="quotelev2">&gt;&gt;  0x0000000000000001 (NEEDED)             Shared library: [libm.so.6]
</span><br>
<span class="quotelev2">&gt;&gt;  0x0000000000000001 (NEEDED)             Shared library: [libutil.so.1]
</span><br>
<span class="quotelev2">&gt;&gt;  0x0000000000000001 (NEEDED)             Shared library: 
</span><br>
<span class="quotelev2">&gt;&gt; [libpthread.so.0]
</span><br>
<span class="quotelev2">&gt;&gt;  0x0000000000000001 (NEEDED)             Shared library: [libc.so.6]
</span><br>
<span class="quotelev2">&gt;&gt;  0x000000000000000e (SONAME)             Library soname: [libmpi.so.12]
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; readelf -d ../ompi_install4/lib/libmpi.so.12.0.1
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  0x0000000000000001 (NEEDED)             Shared library: 
</span><br>
<span class="quotelev2">&gt;&gt; [libibverbs.so.1]
</span><br>
<span class="quotelev2">&gt;&gt;  0x0000000000000001 (NEEDED)             Shared library: 
</span><br>
<span class="quotelev2">&gt;&gt; [libopen-rte.so.12]
</span><br>
<span class="quotelev2">&gt;&gt;  0x0000000000000001 (NEEDED)             Shared library: 
</span><br>
<span class="quotelev2">&gt;&gt; [libopen-pal.so.13]
</span><br>
<span class="quotelev2">&gt;&gt;  0x0000000000000001 (NEEDED)             Shared library: [libdl.so.2]
</span><br>
<span class="quotelev2">&gt;&gt;  0x0000000000000001 (NEEDED)             Shared library: [librt.so.1]
</span><br>
<span class="quotelev2">&gt;&gt;  0x0000000000000001 (NEEDED)             Shared library: [libm.so.6]
</span><br>
<span class="quotelev2">&gt;&gt;  0x0000000000000001 (NEEDED)             Shared library: [libutil.so.1]
</span><br>
<span class="quotelev2">&gt;&gt;  0x0000000000000001 (NEEDED)             Shared library: 
</span><br>
<span class="quotelev2">&gt;&gt; [libpthread.so.0]
</span><br>
<span class="quotelev2">&gt;&gt;  0x0000000000000001 (NEEDED)             Shared library: [libc.so.6]
</span><br>
<span class="quotelev2">&gt;&gt;  0x000000000000000e (SONAME)             Library soname: [libmpi.so.12]
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; This could make it difficult to share an install between machines. Is 
</span><br>
<span class="quotelev2">&gt;&gt; this intended?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks,
</span><br>
<span class="quotelev2">&gt;&gt; Simon
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: 
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/02/28424.php">http://www.open-mpi.org/community/lists/users/2016/02/28424.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: 
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/02/28427.php">http://www.open-mpi.org/community/lists/users/2016/02/28427.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28440.php">Dave Love: "Re: [OMPI users] New libmpi.so dependency on libibverbs.so?"</a>
<li><strong>Previous message:</strong> <a href="28438.php">Brice Goglin: "Re: [OMPI users] MX replacement?"</a>
<li><strong>In reply to:</strong> <a href="28427.php">Gilles Gouaillardet: "Re: [OMPI users] New libmpi.so dependency on libibverbs.so?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28441.php">Jeff Squyres (jsquyres): "Re: [OMPI users] New libmpi.so dependency on libibverbs.so?"</a>
<li><strong>Reply:</strong> <a href="28441.php">Jeff Squyres (jsquyres): "Re: [OMPI users] New libmpi.so dependency on libibverbs.so?"</a>
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

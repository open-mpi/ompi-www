<?
$subject_val = "Re: [OMPI users] New libmpi.so dependency on libibverbs.so?";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Feb  1 20:26:56 2016" -->
<!-- isoreceived="20160202012656" -->
<!-- sent="Tue, 2 Feb 2016 10:26:53 +0900" -->
<!-- isosent="20160202012653" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles_at_[hidden]" -->
<!-- subject="Re: [OMPI users] New libmpi.so dependency on libibverbs.so?" -->
<!-- id="56B005DD.5040309_at_rist.or.jp" -->
<!-- charset="windows-1252" -->
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
<strong>From:</strong> Gilles Gouaillardet (<em>gilles_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-02-01 20:26:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28428.php">Peter Wind: "[OMPI users] shared memory under fortran, bug?"</a>
<li><strong>Previous message:</strong> <a href="28426.php">Gilles Gouaillardet: "Re: [OMPI users] OpenMPI against multiple, evolving SLURM versions"</a>
<li><strong>In reply to:</strong> <a href="28424.php">Number Cruncher: "[OMPI users] New libmpi.so dependency on libibverbs.so?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28439.php">Number Cruncher: "Re: [OMPI users] New libmpi.so dependency on libibverbs.so?"</a>
<li><strong>Reply:</strong> <a href="28439.php">Number Cruncher: "Re: [OMPI users] New libmpi.so dependency on libibverbs.so?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Simon,
<br>
<p>this is an usnic requirement
<br>
(mca/common/verbs_usnic to be more specific)
<br>
<p>as a workaround (and assuming you do not need usnic stuff on any of your 
<br>
nodes) you can
<br>
configure DISABLE_common_verbs_usnic=1 ... &amp;&amp; make install
<br>
<p>note that if libibverbs.so.1 is missing on some nodes, you will get warnings
<br>
(such as cannot dlopen mca_btl_openib.so) on these nodes unless you specify
<br>
--mca btl ^openib
<br>
on these nodes
<br>
<p>i think it would be much easier if libibverbs.so.1 were available on all 
<br>
your nodes, including those with no infiniband hardware
<br>
<p><p>Cheers,
<br>
<p>Gilles
<br>
<p><p>On 2/2/2016 2:52 AM, Number Cruncher wrote:
<br>
<span class="quotelev1">&gt; Having compiled various recent Open MPI sources with the same 
</span><br>
<span class="quotelev1">&gt; &quot;configure&quot; options, I've noticed that the &quot;libmpi.so&quot; shared library 
</span><br>
<span class="quotelev1">&gt; from 1.10.1 now depends itself directly on libibverbs.so.1. 
</span><br>
<span class="quotelev1">&gt; Previously, 1.10.0 for example, only plugins such as mca_btl_openib.so 
</span><br>
<span class="quotelev1">&gt; depended on it.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; E.g.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; readelf -d ../ompi_install4/lib/libmpi.so.12.0.0:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  0x0000000000000001 (NEEDED)             Shared library: 
</span><br>
<span class="quotelev1">&gt; [libopen-rte.so.12]
</span><br>
<span class="quotelev1">&gt;  0x0000000000000001 (NEEDED)             Shared library: 
</span><br>
<span class="quotelev1">&gt; [libopen-pal.so.13]
</span><br>
<span class="quotelev1">&gt;  0x0000000000000001 (NEEDED)             Shared library: [libdl.so.2]
</span><br>
<span class="quotelev1">&gt;  0x0000000000000001 (NEEDED)             Shared library: [librt.so.1]
</span><br>
<span class="quotelev1">&gt;  0x0000000000000001 (NEEDED)             Shared library: [libm.so.6]
</span><br>
<span class="quotelev1">&gt;  0x0000000000000001 (NEEDED)             Shared library: [libutil.so.1]
</span><br>
<span class="quotelev1">&gt;  0x0000000000000001 (NEEDED)             Shared library: 
</span><br>
<span class="quotelev1">&gt; [libpthread.so.0]
</span><br>
<span class="quotelev1">&gt;  0x0000000000000001 (NEEDED)             Shared library: [libc.so.6]
</span><br>
<span class="quotelev1">&gt;  0x000000000000000e (SONAME)             Library soname: [libmpi.so.12]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; readelf -d ../ompi_install4/lib/libmpi.so.12.0.1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  0x0000000000000001 (NEEDED)             Shared library: 
</span><br>
<span class="quotelev1">&gt; [libibverbs.so.1]
</span><br>
<span class="quotelev1">&gt;  0x0000000000000001 (NEEDED)             Shared library: 
</span><br>
<span class="quotelev1">&gt; [libopen-rte.so.12]
</span><br>
<span class="quotelev1">&gt;  0x0000000000000001 (NEEDED)             Shared library: 
</span><br>
<span class="quotelev1">&gt; [libopen-pal.so.13]
</span><br>
<span class="quotelev1">&gt;  0x0000000000000001 (NEEDED)             Shared library: [libdl.so.2]
</span><br>
<span class="quotelev1">&gt;  0x0000000000000001 (NEEDED)             Shared library: [librt.so.1]
</span><br>
<span class="quotelev1">&gt;  0x0000000000000001 (NEEDED)             Shared library: [libm.so.6]
</span><br>
<span class="quotelev1">&gt;  0x0000000000000001 (NEEDED)             Shared library: [libutil.so.1]
</span><br>
<span class="quotelev1">&gt;  0x0000000000000001 (NEEDED)             Shared library: 
</span><br>
<span class="quotelev1">&gt; [libpthread.so.0]
</span><br>
<span class="quotelev1">&gt;  0x0000000000000001 (NEEDED)             Shared library: [libc.so.6]
</span><br>
<span class="quotelev1">&gt;  0x000000000000000e (SONAME)             Library soname: [libmpi.so.12]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This could make it difficult to share an install between machines. Is 
</span><br>
<span class="quotelev1">&gt; this intended?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Simon
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/02/28424.php">http://www.open-mpi.org/community/lists/users/2016/02/28424.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28428.php">Peter Wind: "[OMPI users] shared memory under fortran, bug?"</a>
<li><strong>Previous message:</strong> <a href="28426.php">Gilles Gouaillardet: "Re: [OMPI users] OpenMPI against multiple, evolving SLURM versions"</a>
<li><strong>In reply to:</strong> <a href="28424.php">Number Cruncher: "[OMPI users] New libmpi.so dependency on libibverbs.so?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28439.php">Number Cruncher: "Re: [OMPI users] New libmpi.so dependency on libibverbs.so?"</a>
<li><strong>Reply:</strong> <a href="28439.php">Number Cruncher: "Re: [OMPI users] New libmpi.so dependency on libibverbs.so?"</a>
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

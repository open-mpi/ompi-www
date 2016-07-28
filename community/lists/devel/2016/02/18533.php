<?
$subject_val = "[OMPI devel] Fwd: Re: [OMPI users] New libmpi.so dependency on libibverbs.so?";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Feb  1 20:34:11 2016" -->
<!-- isoreceived="20160202013411" -->
<!-- sent="Tue, 2 Feb 2016 10:34:08 +0900" -->
<!-- isosent="20160202013408" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles_at_[hidden]" -->
<!-- subject="[OMPI devel] Fwd: Re: [OMPI users] New libmpi.so dependency on libibverbs.so?" -->
<!-- id="56B00790.3070708_at_rist.or.jp" -->
<!-- charset="UTF-8" -->
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
<strong>Subject:</strong> [OMPI devel] Fwd: Re: [OMPI users] New libmpi.so dependency on libibverbs.so?<br>
<strong>From:</strong> Gilles Gouaillardet (<em>gilles_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-02-01 20:34:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18534.php">Gilles Gouaillardet: "Re: [OMPI devel] malloc(0) warnings in post/wait and start/complete calls with GROUP_EMPTY"</a>
<li><strong>Previous message:</strong> <a href="18532.php">Lisandro Dalcin: "[OMPI devel] malloc(0) warnings in post/wait and start/complete calls with GROUP_EMPTY"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Folks,
<br>
<p>this is a question (and my reply) initially posted on the users ML
<br>
<p>in v1.10 libmpi.so depends on libibverbs.so.1 because of 
<br>
ompi/mca/common/verbs_usnic
<br>
i can understand this is not desired if OpenMPI install tree is shared 
<br>
with nodes without infiniband libraries.
<br>
<p>so far, the non-user friendly workaround is to
<br>
<p>configure DISABLE_common_verbs_usnic=1
<br>
<p><p>configure --without-usnic still builds ompi/mca/common/verbs_usnic, and 
<br>
hence the dependency on libibverbs.so.1
<br>
<p><p>i made the attached patch as a proof of concept :
<br>
note there are now two AC_ARG_WITH([usnic],...)
<br>
- ompi/mca/common/verbs_usnic/configure.m4
<br>
- ompi/mca/btl/usnic/configure.m4
<br>
<p>though it seems to work as expected, i am not sure this is the right way 
<br>
to do things.
<br>
<p>any thoughts ?
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
-------- Forwarded Message --------
<br>
Subject: 	Re: [OMPI users] New libmpi.so dependency on libibverbs.so?
<br>
Date: 	Tue, 2 Feb 2016 10:26:53 +0900
<br>
From: 	Gilles Gouaillardet &lt;gilles_at_[hidden]&gt;
<br>
To: 	Open MPI Users &lt;users_at_[hidden]&gt;
<br>
<p><p><p>Simon,
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
<p><p><p><p><p><p>
<p>
<br><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-18533/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>text/plain attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-18533/common_verbs_usnic.patch">common_verbs_usnic.patch</a>
</ul>
<!-- attachment="common_verbs_usnic.patch" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18534.php">Gilles Gouaillardet: "Re: [OMPI devel] malloc(0) warnings in post/wait and start/complete calls with GROUP_EMPTY"</a>
<li><strong>Previous message:</strong> <a href="18532.php">Lisandro Dalcin: "[OMPI devel] malloc(0) warnings in post/wait and start/complete calls with GROUP_EMPTY"</a>
<!-- nextthread="start" -->
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

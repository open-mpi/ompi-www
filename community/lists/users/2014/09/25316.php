<?
$subject_val = "Re: [OMPI users] Runtime replacement of mpi libraries?";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Sep 11 16:40:33 2014" -->
<!-- isoreceived="20140911204033" -->
<!-- sent="Thu, 11 Sep 2014 14:40:26 -0600" -->
<!-- isosent="20140911204026" -->
<!-- name="John Cary" -->
<!-- email="cary_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Runtime replacement of mpi libraries?" -->
<!-- id="541208BA.3000100_at_txcorp.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="5411F7A9.8020306_at_sgi.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Runtime replacement of mpi libraries?<br>
<strong>From:</strong> John Cary (<em>cary_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-09-11 16:40:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25317.php">Michael Raymond: "Re: [OMPI users] Runtime replacement of mpi libraries?"</a>
<li><strong>Previous message:</strong> <a href="25315.php">Michael Raymond: "Re: [OMPI users] Runtime replacement of mpi libraries?"</a>
<li><strong>In reply to:</strong> <a href="25315.php">Michael Raymond: "Re: [OMPI users] Runtime replacement of mpi libraries?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25317.php">Michael Raymond: "Re: [OMPI users] Runtime replacement of mpi libraries?"</a>
<li><strong>Reply:</strong> <a href="25317.php">Michael Raymond: "Re: [OMPI users] Runtime replacement of mpi libraries?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks much!
<br>
<p>So does mpiexec_mpt then set the LD_LIBRARY_PATH as needed?
<br>
<p>John
<br>
<p>On 9/11/2014 1:27 PM, Michael Raymond wrote:
<br>
<span class="quotelev1">&gt; Another option is SGI PerfBoost. It will let you run apps compiled 
</span><br>
<span class="quotelev1">&gt; against other ABIs with SGI MPT with practically no performance loss.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; $ module load openmpi
</span><br>
<span class="quotelev1">&gt; $ make
</span><br>
<span class="quotelev1">&gt; $ module unload openmpi
</span><br>
<span class="quotelev1">&gt; $ module load mpt perfboost
</span><br>
<span class="quotelev1">&gt; $ mpiexec_mpt -np 2 perfboost -ompi a.out
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 09/11/2014 01:28 PM, JR Cary wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; We need to build an application on our machine with one mpi (e.g. 
</span><br>
<span class="quotelev2">&gt;&gt; openmpi),
</span><br>
<span class="quotelev2">&gt;&gt; but for performance reasons, upon installation, we would like to runtime
</span><br>
<span class="quotelev2">&gt;&gt; link to a different, specialized mpi, such as an SGI implementation 
</span><br>
<span class="quotelev2">&gt;&gt; provided
</span><br>
<span class="quotelev2">&gt;&gt; for their systems.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Can one expect this to work?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I tried this with openmpi and mpich, building the code against shared
</span><br>
<span class="quotelev2">&gt;&gt; openmpi
</span><br>
<span class="quotelev2">&gt;&gt; and then changing the LD_LIBRARY_PATH to point to the shared mpich.  
</span><br>
<span class="quotelev2">&gt;&gt; This
</span><br>
<span class="quotelev2">&gt;&gt; failed due to the sonames being different.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; $ ldd foo  | grep mpi
</span><br>
<span class="quotelev2">&gt;&gt;      libmpi_usempi.so.1 =&gt; not found
</span><br>
<span class="quotelev2">&gt;&gt;      libmpi_mpifh.so.2 =&gt; not found
</span><br>
<span class="quotelev2">&gt;&gt;      libmpi.so.1 =&gt; not found
</span><br>
<span class="quotelev2">&gt;&gt;      libmpi_cxx.so.1 =&gt; not found
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; but in the mpich distribution one has different sonames
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; libmpi.so.12
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; so the runtime loader will not load the mpich libraries instead.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; and the fortran libraries (which may not matter to us) have different
</span><br>
<span class="quotelev2">&gt;&gt; names,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; $ \ls /contrib/mpich-shared/lib/*.so.12
</span><br>
<span class="quotelev2">&gt;&gt; /contrib/mpich-shared/lib/libmpicxx.so.12
</span><br>
<span class="quotelev2">&gt;&gt; /contrib/mpich-shared/lib/libmpifort.so.12
</span><br>
<span class="quotelev2">&gt;&gt; /contrib/mpich-shared/lib/libmpi.so.12
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Is there a general approach to this?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Or in practice, must one build on a machine to use that machine's MPI?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thx.....John Cary
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
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
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2014/09/25311.php">http://www.open-mpi.org/community/lists/users/2014/09/25311.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25317.php">Michael Raymond: "Re: [OMPI users] Runtime replacement of mpi libraries?"</a>
<li><strong>Previous message:</strong> <a href="25315.php">Michael Raymond: "Re: [OMPI users] Runtime replacement of mpi libraries?"</a>
<li><strong>In reply to:</strong> <a href="25315.php">Michael Raymond: "Re: [OMPI users] Runtime replacement of mpi libraries?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25317.php">Michael Raymond: "Re: [OMPI users] Runtime replacement of mpi libraries?"</a>
<li><strong>Reply:</strong> <a href="25317.php">Michael Raymond: "Re: [OMPI users] Runtime replacement of mpi libraries?"</a>
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

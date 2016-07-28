<?
$subject_val = "Re: [OMPI users] Runtime replacement of mpi libraries?";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Sep 11 16:58:12 2014" -->
<!-- isoreceived="20140911205812" -->
<!-- sent="Thu, 11 Sep 2014 15:58:11 -0500" -->
<!-- isosent="20140911205811" -->
<!-- name="Michael Raymond" -->
<!-- email="mraymond_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Runtime replacement of mpi libraries?" -->
<!-- id="54120CE3.9010700_at_sgi.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="541208BA.3000100_at_txcorp.com" -->
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
<strong>From:</strong> Michael Raymond (<em>mraymond_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-09-11 16:58:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25318.php">Muhammad Ansar Javed: "Re: [OMPI users] Forcing OpenMPI to use Ethernet interconnect instead of InfiniBand"</a>
<li><strong>Previous message:</strong> <a href="25316.php">John Cary: "Re: [OMPI users] Runtime replacement of mpi libraries?"</a>
<li><strong>In reply to:</strong> <a href="25316.php">John Cary: "Re: [OMPI users] Runtime replacement of mpi libraries?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
&nbsp;&nbsp;&nbsp;Doing the `module load perfboost` sets the LD_LIBRARY_PATH. To see 
<br>
more, after doing the module load of both SGI modules, do an `ldd` on 
<br>
your app.
<br>
<p>On 09/11/2014 03:40 PM, John Cary wrote:
<br>
<span class="quotelev1">&gt; Thanks much!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So does mpiexec_mpt then set the LD_LIBRARY_PATH as needed?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; John
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 9/11/2014 1:27 PM, Michael Raymond wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Another option is SGI PerfBoost. It will let you run apps compiled
</span><br>
<span class="quotelev2">&gt;&gt; against other ABIs with SGI MPT with practically no performance loss.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; $ module load openmpi
</span><br>
<span class="quotelev2">&gt;&gt; $ make
</span><br>
<span class="quotelev2">&gt;&gt; $ module unload openmpi
</span><br>
<span class="quotelev2">&gt;&gt; $ module load mpt perfboost
</span><br>
<span class="quotelev2">&gt;&gt; $ mpiexec_mpt -np 2 perfboost -ompi a.out
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On 09/11/2014 01:28 PM, JR Cary wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; We need to build an application on our machine with one mpi (e.g.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; openmpi),
</span><br>
<span class="quotelev3">&gt;&gt;&gt; but for performance reasons, upon installation, we would like to runtime
</span><br>
<span class="quotelev3">&gt;&gt;&gt; link to a different, specialized mpi, such as an SGI implementation
</span><br>
<span class="quotelev3">&gt;&gt;&gt; provided
</span><br>
<span class="quotelev3">&gt;&gt;&gt; for their systems.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Can one expect this to work?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I tried this with openmpi and mpich, building the code against shared
</span><br>
<span class="quotelev3">&gt;&gt;&gt; openmpi
</span><br>
<span class="quotelev3">&gt;&gt;&gt; and then changing the LD_LIBRARY_PATH to point to the shared mpich. This
</span><br>
<span class="quotelev3">&gt;&gt;&gt; failed due to the sonames being different.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; $ ldd foo  | grep mpi
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      libmpi_usempi.so.1 =&gt; not found
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      libmpi_mpifh.so.2 =&gt; not found
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      libmpi.so.1 =&gt; not found
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      libmpi_cxx.so.1 =&gt; not found
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; but in the mpich distribution one has different sonames
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; libmpi.so.12
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; so the runtime loader will not load the mpich libraries instead.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; and the fortran libraries (which may not matter to us) have different
</span><br>
<span class="quotelev3">&gt;&gt;&gt; names,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; $ \ls /contrib/mpich-shared/lib/*.so.12
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /contrib/mpich-shared/lib/libmpicxx.so.12
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /contrib/mpich-shared/lib/libmpifort.so.12
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /contrib/mpich-shared/lib/libmpi.so.12
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Is there a general approach to this?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Or in practice, must one build on a machine to use that machine's MPI?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thx.....John Cary
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Link to this post:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2014/09/25311.php">http://www.open-mpi.org/community/lists/users/2014/09/25311.php</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2014/09/25316.php">http://www.open-mpi.org/community/lists/users/2014/09/25316.php</a>
</span><br>
<p><pre>
-- 
Michael A. Raymond
SGI MPT Team Leader
1 (651) 683-7523
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25318.php">Muhammad Ansar Javed: "Re: [OMPI users] Forcing OpenMPI to use Ethernet interconnect instead of InfiniBand"</a>
<li><strong>Previous message:</strong> <a href="25316.php">John Cary: "Re: [OMPI users] Runtime replacement of mpi libraries?"</a>
<li><strong>In reply to:</strong> <a href="25316.php">John Cary: "Re: [OMPI users] Runtime replacement of mpi libraries?"</a>
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

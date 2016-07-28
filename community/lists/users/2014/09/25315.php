<?
$subject_val = "Re: [OMPI users] Runtime replacement of mpi libraries?";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Sep 11 15:27:38 2014" -->
<!-- isoreceived="20140911192738" -->
<!-- sent="Thu, 11 Sep 2014 14:27:37 -0500" -->
<!-- isosent="20140911192737" -->
<!-- name="Michael Raymond" -->
<!-- email="mraymond_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Runtime replacement of mpi libraries?" -->
<!-- id="5411F7A9.8020306_at_sgi.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="5411E9BE.4000609_at_txcorp.com" -->
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
<strong>Date:</strong> 2014-09-11 15:27:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25316.php">John Cary: "Re: [OMPI users] Runtime replacement of mpi libraries?"</a>
<li><strong>Previous message:</strong> <a href="25314.php">Howard Pritchard: "Re: [OMPI users] Runtime replacement of mpi libraries?"</a>
<li><strong>In reply to:</strong> <a href="25311.php">JR Cary: "[OMPI users] Runtime replacement of mpi libraries?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25316.php">John Cary: "Re: [OMPI users] Runtime replacement of mpi libraries?"</a>
<li><strong>Reply:</strong> <a href="25316.php">John Cary: "Re: [OMPI users] Runtime replacement of mpi libraries?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
&nbsp;&nbsp;&nbsp;Another option is SGI PerfBoost. It will let you run apps compiled 
<br>
against other ABIs with SGI MPT with practically no performance loss.
<br>
<p>$ module load openmpi
<br>
$ make
<br>
$ module unload openmpi
<br>
$ module load mpt perfboost
<br>
$ mpiexec_mpt -np 2 perfboost -ompi a.out
<br>
<p>On 09/11/2014 01:28 PM, JR Cary wrote:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; We need to build an application on our machine with one mpi (e.g. openmpi),
</span><br>
<span class="quotelev1">&gt; but for performance reasons, upon installation, we would like to runtime
</span><br>
<span class="quotelev1">&gt; link to a different, specialized mpi, such as an SGI implementation provided
</span><br>
<span class="quotelev1">&gt; for their systems.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Can one expect this to work?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I tried this with openmpi and mpich, building the code against shared
</span><br>
<span class="quotelev1">&gt; openmpi
</span><br>
<span class="quotelev1">&gt; and then changing the LD_LIBRARY_PATH to point to the shared mpich.  This
</span><br>
<span class="quotelev1">&gt; failed due to the sonames being different.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; $ ldd foo  | grep mpi
</span><br>
<span class="quotelev1">&gt;      libmpi_usempi.so.1 =&gt; not found
</span><br>
<span class="quotelev1">&gt;      libmpi_mpifh.so.2 =&gt; not found
</span><br>
<span class="quotelev1">&gt;      libmpi.so.1 =&gt; not found
</span><br>
<span class="quotelev1">&gt;      libmpi_cxx.so.1 =&gt; not found
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; but in the mpich distribution one has different sonames
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; libmpi.so.12
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; so the runtime loader will not load the mpich libraries instead.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; and the fortran libraries (which may not matter to us) have different
</span><br>
<span class="quotelev1">&gt; names,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; $ \ls /contrib/mpich-shared/lib/*.so.12
</span><br>
<span class="quotelev1">&gt; /contrib/mpich-shared/lib/libmpicxx.so.12
</span><br>
<span class="quotelev1">&gt; /contrib/mpich-shared/lib/libmpifort.so.12
</span><br>
<span class="quotelev1">&gt; /contrib/mpich-shared/lib/libmpi.so.12
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Is there a general approach to this?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Or in practice, must one build on a machine to use that machine's MPI?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thx.....John Cary
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/09/25311.php">http://www.open-mpi.org/community/lists/users/2014/09/25311.php</a>
</span><br>
<span class="quotelev1">&gt;
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
<li><strong>Next message:</strong> <a href="25316.php">John Cary: "Re: [OMPI users] Runtime replacement of mpi libraries?"</a>
<li><strong>Previous message:</strong> <a href="25314.php">Howard Pritchard: "Re: [OMPI users] Runtime replacement of mpi libraries?"</a>
<li><strong>In reply to:</strong> <a href="25311.php">JR Cary: "[OMPI users] Runtime replacement of mpi libraries?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25316.php">John Cary: "Re: [OMPI users] Runtime replacement of mpi libraries?"</a>
<li><strong>Reply:</strong> <a href="25316.php">John Cary: "Re: [OMPI users] Runtime replacement of mpi libraries?"</a>
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

<?
$subject_val = "Re: [OMPI users] Runtime replacement of mpi libraries?";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Sep 11 14:43:34 2014" -->
<!-- isoreceived="20140911184334" -->
<!-- sent="Thu, 11 Sep 2014 11:42:51 -0700" -->
<!-- isosent="20140911184251" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Runtime replacement of mpi libraries?" -->
<!-- id="245EC2E2-CA90-4D17-99D4-B7E2FAFB8880_at_open-mpi.org" -->
<!-- charset="iso-8859-1" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-09-11 14:42:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25313.php">Rob Latham: "Re: [OMPI users] Runtime replacement of mpi libraries?"</a>
<li><strong>Previous message:</strong> <a href="25311.php">JR Cary: "[OMPI users] Runtime replacement of mpi libraries?"</a>
<li><strong>In reply to:</strong> <a href="25311.php">JR Cary: "[OMPI users] Runtime replacement of mpi libraries?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25313.php">Rob Latham: "Re: [OMPI users] Runtime replacement of mpi libraries?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'm afraid the various MPI implementations are not ABI compatible, so you have to compile against the one you intend to use
<br>
<p>On Sep 11, 2014, at 11:28 AM, JR Cary &lt;cary_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; 
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
<span class="quotelev1">&gt; I tried this with openmpi and mpich, building the code against shared openmpi
</span><br>
<span class="quotelev1">&gt; and then changing the LD_LIBRARY_PATH to point to the shared mpich.  This
</span><br>
<span class="quotelev1">&gt; failed due to the sonames being different.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; $ ldd foo  | grep mpi
</span><br>
<span class="quotelev1">&gt;     libmpi_usempi.so.1 =&gt; not found
</span><br>
<span class="quotelev1">&gt;     libmpi_mpifh.so.2 =&gt; not found
</span><br>
<span class="quotelev1">&gt;     libmpi.so.1 =&gt; not found
</span><br>
<span class="quotelev1">&gt;     libmpi_cxx.so.1 =&gt; not found
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
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-25312/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25313.php">Rob Latham: "Re: [OMPI users] Runtime replacement of mpi libraries?"</a>
<li><strong>Previous message:</strong> <a href="25311.php">JR Cary: "[OMPI users] Runtime replacement of mpi libraries?"</a>
<li><strong>In reply to:</strong> <a href="25311.php">JR Cary: "[OMPI users] Runtime replacement of mpi libraries?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25313.php">Rob Latham: "Re: [OMPI users] Runtime replacement of mpi libraries?"</a>
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

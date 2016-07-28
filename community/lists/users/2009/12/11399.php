<?
$subject_val = "Re: [OMPI users] Program deadlocks, on simple send/recv loop";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Dec  3 11:15:23 2009" -->
<!-- isoreceived="20091203161523" -->
<!-- sent="Thu, 3 Dec 2009 18:15:20 +0200" -->
<!-- isosent="20091203161520" -->
<!-- name="vasilis gkanis" -->
<!-- email="gkanis_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Program deadlocks, on simple send/recv loop" -->
<!-- id="200912031815.20365.gkanis_at_ipta.demokritos.gr" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="ED1AC9E1-9B44-47BE-A346-5CAA27A4CBF4_at_umich.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] Program deadlocks, on simple send/recv loop<br>
<strong>From:</strong> vasilis gkanis (<em>gkanis_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-12-03 11:15:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11400.php">Eugene Loh: "Re: [OMPI users] Program deadlocks, on simple send/recv loop"</a>
<li><strong>Previous message:</strong> <a href="11398.php">Brock Palen: "Re: [OMPI users] Program deadlocks, on simple send/recv loop"</a>
<li><strong>In reply to:</strong> <a href="11398.php">Brock Palen: "Re: [OMPI users] Program deadlocks, on simple send/recv loop"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11633.php">Eugene Loh: "Re: [OMPI users] Program deadlocks, on simple send/recv loop"</a>
<li><strong>Reply:</strong> <a href="11633.php">Eugene Loh: "Re: [OMPI users] Program deadlocks, on simple send/recv loop"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I had a similar problem with the portland Fortran compiler. I new that this 
<br>
was not caused by a network problem ( I run the code on a single node with 4 
<br>
CPUs). After I tested pretty much anything, I decided to change the compiler.
<br>
I used the Intel Fortran compiler and everything is running fine. 
<br>
It could be a PGI compiler voodoo :)
<br>
<p>Vasilis
<br>
<p><p><p>On Thursday 03 December 2009 05:56:39 pm Brock Palen wrote:
<br>
<span class="quotelev1">&gt; On Dec 1, 2009, at 8:09 PM, John R. Cary wrote:
</span><br>
<span class="quotelev2">&gt; &gt; Jeff Squyres wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; (for the web archives)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Brock and I talked about this .f90 code a bit off list -- he's
</span><br>
<span class="quotelev3">&gt; &gt;&gt; going to investigate with the test author a bit more because both
</span><br>
<span class="quotelev3">&gt; &gt;&gt; of us are a bit confused by the F90 array syntax used.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Jeff, I talked to the user this morning, that data is contiguous in
</span><br>
<span class="quotelev1">&gt; memory, sans any PGI compiler voodoo,
</span><br>
<span class="quotelev1">&gt; The allocation statement is ok:
</span><br>
<span class="quotelev1">&gt; allocate(vec(vec_size,vec_per_proc*(size-1)))
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This allocates memory vec(32768, 2350)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Note that Fortran is column major in memory, that explains (I knew
</span><br>
<span class="quotelev1">&gt; this sorry forgot) why the indexes are switched,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Brock Palen
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11400.php">Eugene Loh: "Re: [OMPI users] Program deadlocks, on simple send/recv loop"</a>
<li><strong>Previous message:</strong> <a href="11398.php">Brock Palen: "Re: [OMPI users] Program deadlocks, on simple send/recv loop"</a>
<li><strong>In reply to:</strong> <a href="11398.php">Brock Palen: "Re: [OMPI users] Program deadlocks, on simple send/recv loop"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11633.php">Eugene Loh: "Re: [OMPI users] Program deadlocks, on simple send/recv loop"</a>
<li><strong>Reply:</strong> <a href="11633.php">Eugene Loh: "Re: [OMPI users] Program deadlocks, on simple send/recv loop"</a>
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

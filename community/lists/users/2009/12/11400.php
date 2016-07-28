<?
$subject_val = "Re: [OMPI users] Program deadlocks, on simple send/recv loop";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Dec  3 11:18:29 2009" -->
<!-- isoreceived="20091203161829" -->
<!-- sent="Thu, 03 Dec 2009 08:19:43 -0800" -->
<!-- isosent="20091203161943" -->
<!-- name="Eugene Loh" -->
<!-- email="Eugene.Loh_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Program deadlocks, on simple send/recv loop" -->
<!-- id="4B17E51F.6000908_at_sun.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="1259836431.6352.106.camel_at_alpha" -->
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
<strong>From:</strong> Eugene Loh (<em>Eugene.Loh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-12-03 11:19:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11401.php">Jeff Squyres: "Re: [OMPI users] Program deadlocks, on simple send/recv loop"</a>
<li><strong>Previous message:</strong> <a href="11399.php">vasilis gkanis: "Re: [OMPI users] Program deadlocks, on simple send/recv loop"</a>
<li><strong>In reply to:</strong> <a href="11396.php">Ashley Pittman: "Re: [OMPI users] Program deadlocks, on simple send/recv loop"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11343.php">Jeff Squyres: "Re: [OMPI users] Program deadlocks, on simple send/recv loop"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ashley Pittman wrote:
<br>
<p><span class="quotelev1">&gt;On Wed, 2009-12-02 at 13:11 -0500, Brock Palen wrote:
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;On Dec 1, 2009, at 11:15 AM, Ashley Pittman wrote:
</span><br>
<span class="quotelev2">&gt;&gt;    
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;On Tue, 2009-12-01 at 10:46 -0500, Brock Palen wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;The attached code, is an example where openmpi/1.3.2 will lock up, if
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;ran on 48 cores, of IB (4 cores per node),
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;The code loops over recv from all processors on rank 0 and sends from
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;all other ranks, as far as I know this should work, and I can't see
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;why not.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;Note yes I know we can do the same thing with a gather, this is a
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;simple case to demonstrate the issue.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;Note that if I increase the openib eager limit, the program runs,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;which normally means improper MPI, but I can't on my own figure out
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;the problem with this code.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;        
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;What are you increasing the eager limit from and too?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;The same value as ethernet on our system,
</span><br>
<span class="quotelev2">&gt;&gt;mpirun --mca btl_openib_eager_limit 655360 --mca  
</span><br>
<span class="quotelev2">&gt;&gt;btl_openib_max_send_size 655360 ./a.out
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;Huge values compared to the defaults, but works,
</span><br>
<span class="quotelev2">&gt;&gt;    
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;My understanding of the code is that each message will be 256k long
</span><br>
<span class="quotelev1">&gt;
</span><br>
Yes.  Brock's Fortran code has each nonzero rank send 50 messages, each 
<br>
256K, via standard send to rank 0.  Rank 0 uses standard receives on 
<br>
them all, pulling in all 50 messages in order from rank 1, then from 
<br>
rank 2, etc.
<br>
<a href="http://www.open-mpi.org/community/lists/users/2009/12/11311.php">http://www.open-mpi.org/community/lists/users/2009/12/11311.php</a>
<br>
<p>John Cary sent out a C++ code on this same e-mail thread.  It sends 
<br>
256*8=2048-byte messages.  Each nonzero rank sends 1 message and rank 0 
<br>
pulls these in in rank order.  Then there is a barrier.  The program 
<br>
iterates on this pattern.
<br>
<a href="http://www.open-mpi.org/community/lists/users/2009/12/11348.php">http://www.open-mpi.org/community/lists/users/2009/12/11348.php</a>
<br>
<p>I can imagine the two programs are illustrating two different problems.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11401.php">Jeff Squyres: "Re: [OMPI users] Program deadlocks, on simple send/recv loop"</a>
<li><strong>Previous message:</strong> <a href="11399.php">vasilis gkanis: "Re: [OMPI users] Program deadlocks, on simple send/recv loop"</a>
<li><strong>In reply to:</strong> <a href="11396.php">Ashley Pittman: "Re: [OMPI users] Program deadlocks, on simple send/recv loop"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11343.php">Jeff Squyres: "Re: [OMPI users] Program deadlocks, on simple send/recv loop"</a>
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

<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Nov  3 13:03:15 2006" -->
<!-- isoreceived="20061103180315" -->
<!-- sent="Fri, 3 Nov 2006 13:02:56 -0500" -->
<!-- isosent="20061103180256" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OMPI collectives" -->
<!-- id="BDD94FF0-0A0D-43C3-8E31-BA40BDA41E5F_at_cs.utk.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="060e01c6fefc$9c2c9920$ca79e30a_at_ladd02" -->
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
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-11-03 13:02:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2134.php">Jose Quiroga: "[OMPI users] Suspected bug during MPI_Barrier."</a>
<li><strong>Previous message:</strong> <a href="2132.php">Durga Choudhury: "Re: [OMPI users] openmpi problem"</a>
<li><strong>In reply to:</strong> <a href="2128.php">Tony Ladd: "[OMPI users] OMPI collectives"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
v1.1 does not have the tuned collective (I think but now I'm not 100%  
<br>
sure anymore), or at least they were not active by default. The first  
<br>
version with the tuned collective will be 1.2. The current decision  
<br>
function (from the nightly builds) target high performance networks  
<br>
with 2 characteristics: low latency (4-5 micro-sec) and high  
<br>
bandwidth (over 1Gb/s).
<br>
<p>There are several implementations for each of the algorithms. Some  
<br>
are wired and some are not. The most difficult part is to make sure  
<br>
each of these implementations is correct (from MPI point of view) and  
<br>
give the expected answer in all circumstances. More functions we  
<br>
have, more tests we have to perform, and right now that's the main  
<br>
limitation. We have other algorithms implemented which are not in the  
<br>
Open MPI right now. They will come as soon as they get tested well  
<br>
enough in order for us to feel confident about their correctness.
<br>
<p>Here are the answers:
<br>
1. Not all algorithms are wired to be showed by ompi_info. Everything  
<br>
out of range is set to the default value which means the current  
<br>
decision function.
<br>
2. The Allreduce algorithms are coming soon. Btw, all algorithms  
<br>
inside Open MPi support segmentation and all of the tree based one,  
<br>
support a fanout input (number of children).
<br>
<p>Time is the only thing we're missing right now ... i.e. the weeks  
<br>
(now without the s) before SC.
<br>
<p>&nbsp;&nbsp;&nbsp;george.
<br>
<p><p>On Nov 2, 2006, at 11:00 PM, Tony Ladd wrote:
<br>
<p><span class="quotelev1">&gt; George
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I found the info I think you were referring to. Thanks. I then  
</span><br>
<span class="quotelev1">&gt; experimented
</span><br>
<span class="quotelev1">&gt; essentially randomly with different algorithms for all reduce. But  
</span><br>
<span class="quotelev1">&gt; the issue
</span><br>
<span class="quotelev1">&gt; with really bad performance for certain message sizes persisted  
</span><br>
<span class="quotelev1">&gt; with v1.1.
</span><br>
<span class="quotelev1">&gt; The good news is that the upgrade to 1.2 fixed my worst problem.  
</span><br>
<span class="quotelev1">&gt; Now the
</span><br>
<span class="quotelev1">&gt; performance is reasonable for all message sizes. I will test the tuned
</span><br>
<span class="quotelev1">&gt; algorithms again asap.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I had a couple of questions
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1) Ompi_info lists only 3 or 4 algorithms for allreduce and reduce  
</span><br>
<span class="quotelev1">&gt; and about
</span><br>
<span class="quotelev1">&gt; 5 for b'cast. But you can use higher numbers as well. Are these  
</span><br>
<span class="quotelev1">&gt; additional
</span><br>
<span class="quotelev1">&gt; undocmented algorithms (you mentioned a number like 15) or is it  
</span><br>
<span class="quotelev1">&gt; ignoring
</span><br>
<span class="quotelev1">&gt; out of range parameters?
</span><br>
<span class="quotelev1">&gt; 2) It seems for allreduce you can select a tuned reduce and tuned  
</span><br>
<span class="quotelev1">&gt; bcast
</span><br>
<span class="quotelev1">&gt; instead of the binary tree. But there is a faster allreduce which  
</span><br>
<span class="quotelev1">&gt; is order
</span><br>
<span class="quotelev1">&gt; 2N rather than 4N for Reduce + Bcast (N is msg size). It segments  
</span><br>
<span class="quotelev1">&gt; the vector
</span><br>
<span class="quotelev1">&gt; and distributes the root among the nodes; in an allreduce there is  
</span><br>
<span class="quotelev1">&gt; no need
</span><br>
<span class="quotelev1">&gt; to gather the root vector to one processor and then scatter it  
</span><br>
<span class="quotelev1">&gt; again. I
</span><br>
<span class="quotelev1">&gt; wrote a simple version for powers of 2 (MPI_SUM)-any chance of it  
</span><br>
<span class="quotelev1">&gt; being
</span><br>
<span class="quotelev1">&gt; implemented in OMPI.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Tony
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2134.php">Jose Quiroga: "[OMPI users] Suspected bug during MPI_Barrier."</a>
<li><strong>Previous message:</strong> <a href="2132.php">Durga Choudhury: "Re: [OMPI users] openmpi problem"</a>
<li><strong>In reply to:</strong> <a href="2128.php">Tony Ladd: "[OMPI users] OMPI collectives"</a>
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

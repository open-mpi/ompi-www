<?
$subject_val = "Re: [OMPI users] Thread as MPI process";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Sep 21 05:31:57 2010" -->
<!-- isoreceived="20100921093157" -->
<!-- sent="Tue, 21 Sep 2010 10:31:50 +0100" -->
<!-- isosent="20100921093150" -->
<!-- name="Ashley Pittman" -->
<!-- email="ashley_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Thread as MPI process" -->
<!-- id="7783B586-8973-411D-A5E5-5FED7B0F4468_at_pittman.co.uk" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="AANLkTinMfxwd9HL-HMOTkZg8wBNaYbYwTw2J3i6rpbbC_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Thread as MPI process<br>
<strong>From:</strong> Ashley Pittman (<em>ashley_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-09-21 05:31:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14256.php">Rafael Arco Arredondo: "[OMPI users] PathScale problems persist"</a>
<li><strong>Previous message:</strong> <a href="14254.php">Reuti: "Re: [OMPI users] Thread as MPI process"</a>
<li><strong>In reply to:</strong> <a href="14252.php">Mikael Lavoie: "Re: [OMPI users] Thread as MPI process"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14253.php">Reuti: "Re: [OMPI users] Thread as MPI process"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 21 Sep 2010, at 09:54, Mikael Lavoie wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Sorry, but i get lost in what i wanna do, i have build a small home cluster with Pelican_HPC, that user openMPI, and i was trying to find a way to get a multithreaded program work in a multiprocess way without taking the time to learn MPI. And my vision was a sort of wrapper that take C posix app src code, and convert it from pthread to a multiprocessMPI app. But the problem is the remote memory access, that will only be implemented in MPI 3.0(for what i've read of it).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; So, after 12 hour of intensive reading about MPI and POSIX, the best way to deal with my problem(running a C pthreaded app in my cluster) is to convert the src in a SPMD way.
</span><br>
<span class="quotelev1">&gt; I didn't mentionned that basicly, my prog open huge text file, take each string and process it through lot's of cryptographic iteration and then save the result in an output.out like file.
</span><br>
<span class="quotelev1">&gt; So i will need to make the master process split the input file and then send them as input for the worker process.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; But if you or someone else know a kind of interpretor like program to run a multithreaded C program and convert it logically to a master/worker multiprocess MPI that will be sended by ssh to the interpreter on the worker side and then lunched.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This is what i've tried to explain in the last msg. A dream for the hobyist that want to get the full power of a night-time cluster, without having to learn all the MPI syntax and structure.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If it doesn't exist, this would be a really great tool i think.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thank you for your reply, but i think i have answered my question alone... No Pain, No Gain...
</span><br>
<p>What you are thinking of is I believe something more like ScaleMP or Mosix, neither of which I have first-hand experience of.  It's a hard problem to solve and I don't believe there is any general solution available.
<br>
<p>It sounds like your application would be a fairly easy conversion to MPI but to do that you will need to re-code areas of your application, it almost sounds like you could get away with just using MPI_Init, MPI_Scatter and MPI_Gather.  Typically you would use the head-node to launch the job but not do any computation, rank 0 in the job would then do the marshalling of data and all ranks would be started simultaneously, you'll find this easier than having one single-rank job spawn more ranks as required.
<br>
<p>Ashley,
<br>
<p><pre>
-- 
Ashley Pittman, Bath, UK.
Padb - A parallel job inspection tool for cluster computing
<a href="http://padb.pittman.org.uk">http://padb.pittman.org.uk</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14256.php">Rafael Arco Arredondo: "[OMPI users] PathScale problems persist"</a>
<li><strong>Previous message:</strong> <a href="14254.php">Reuti: "Re: [OMPI users] Thread as MPI process"</a>
<li><strong>In reply to:</strong> <a href="14252.php">Mikael Lavoie: "Re: [OMPI users] Thread as MPI process"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14253.php">Reuti: "Re: [OMPI users] Thread as MPI process"</a>
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

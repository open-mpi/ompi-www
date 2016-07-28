<?
$subject_val = "Re: [OMPI users] Thread as MPI process";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Sep 21 05:24:43 2010" -->
<!-- isoreceived="20100921092443" -->
<!-- sent="Tue, 21 Sep 2010 11:24:30 +0200" -->
<!-- isosent="20100921092430" -->
<!-- name="Reuti" -->
<!-- email="reuti_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Thread as MPI process" -->
<!-- id="1518AE08-049E-4361-A498-6F1BEE0453FB_at_staff.uni-marburg.de" -->
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
<strong>From:</strong> Reuti (<em>reuti_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-09-21 05:24:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14255.php">Ashley Pittman: "Re: [OMPI users] Thread as MPI process"</a>
<li><strong>Previous message:</strong> <a href="14253.php">Reuti: "Re: [OMPI users] Thread as MPI process"</a>
<li><strong>In reply to:</strong> <a href="14252.php">Mikael Lavoie: "Re: [OMPI users] Thread as MPI process"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14255.php">Ashley Pittman: "Re: [OMPI users] Thread as MPI process"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>Am 21.09.2010 um 10:54 schrieb Mikael Lavoie:
<br>
<p><span class="quotelev1">&gt; Sorry, but i get lost in what i wanna do, i have build a small home cluster with Pelican_HPC, that user openMPI, and i was trying to find a way to get a multithreaded program work in a multiprocess way without taking the time to learn MPI. And my vision was a sort of wrapper that take C posix app src code, and convert it from pthread to a multiprocessMPI app. But the problem is the remote memory access, that will only be implemented in MPI 3.0(for what i've read of it).
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
<p>what about taking a step back and use PVM? Of course you have no shared memory access, but it will allow you to transfer information between nodes and start worker processes:
<br>
<p><a href="http://www.netlib.org/pvm3/book/node17.html">http://www.netlib.org/pvm3/book/node17.html</a>
<br>
<p>Looks like PVM is no longer included in Pelican_HPC by default, but you can compile it on your own.
<br>
<p>-- Reuti
<br>
<p><p><span class="quotelev1">&gt; This is what i've tried to explain in the last msg. A dream for the hobyist that want to get the full power of a night-time cluster, without having to learn all the MPI syntax and structure.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If it doesn't exist, this would be a really great tool i think.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thank you for your reply, but i think i have answered my question alone... No Pain, No Gain...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 20 Sep 2010, at 22:24, Mikael Lavoie wrote:
</span><br>
<span class="quotelev2">&gt; &gt; I wanna know if it exist a implementation that permit to run a single host process on the master of the cluster, that will then spawn 1 process per -np X defined thread at the host specified in the host list. The host will then act as a syncronized sender/collecter of the work done.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I don't fully understand you explanation either but I may be able to help clear up what you are asking for:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If you mean &quot;pthreads&quot; or &quot;linux threads&quot; then no, you cannot have different threads on different nodes under any programming paradigm.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; However if you mean &quot;execution threads&quot; or in MPI parlance &quot;ranks&quot; then yes, under OpenMPI each &quot;rank&quot; will be a separate process on one of the nodes in the host list, as Jody says look at MPI_Comm_Spawn for this.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Ashley,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Ashley Pittman, Bath, UK.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Padb - A parallel job inspection tool for cluster computing
</span><br>
<span class="quotelev1">&gt; <a href="http://padb.pittman.org.uk">http://padb.pittman.org.uk</a>
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
<li><strong>Next message:</strong> <a href="14255.php">Ashley Pittman: "Re: [OMPI users] Thread as MPI process"</a>
<li><strong>Previous message:</strong> <a href="14253.php">Reuti: "Re: [OMPI users] Thread as MPI process"</a>
<li><strong>In reply to:</strong> <a href="14252.php">Mikael Lavoie: "Re: [OMPI users] Thread as MPI process"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14255.php">Ashley Pittman: "Re: [OMPI users] Thread as MPI process"</a>
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

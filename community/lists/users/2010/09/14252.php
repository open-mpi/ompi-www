<?
$subject_val = "Re: [OMPI users] Thread as MPI process";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Sep 21 04:54:21 2010" -->
<!-- isoreceived="20100921085421" -->
<!-- sent="Tue, 21 Sep 2010 04:54:16 -0400" -->
<!-- isosent="20100921085416" -->
<!-- name="Mikael Lavoie" -->
<!-- email="mikael.lavoie_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Thread as MPI process" -->
<!-- id="AANLkTinMfxwd9HL-HMOTkZg8wBNaYbYwTw2J3i6rpbbC_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="E8227994-F503-4E35-9943-D29FB57E18E3_at_pittman.co.uk" -->
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
<strong>From:</strong> Mikael Lavoie (<em>mikael.lavoie_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-09-21 04:54:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14253.php">Reuti: "Re: [OMPI users] Thread as MPI process"</a>
<li><strong>Previous message:</strong> <a href="14251.php">Ashley Pittman: "Re: [OMPI users] Thread as MPI process"</a>
<li><strong>In reply to:</strong> <a href="14251.php">Ashley Pittman: "Re: [OMPI users] Thread as MPI process"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14254.php">Reuti: "Re: [OMPI users] Thread as MPI process"</a>
<li><strong>Reply:</strong> <a href="14254.php">Reuti: "Re: [OMPI users] Thread as MPI process"</a>
<li><strong>Reply:</strong> <a href="14255.php">Ashley Pittman: "Re: [OMPI users] Thread as MPI process"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>Sorry, but i get lost in what i wanna do, i have build a small home cluster
<br>
with Pelican_HPC, that user openMPI, and i was trying to find a way to get a
<br>
multithreaded program work in a multiprocess way without taking the time to
<br>
learn MPI. And my vision was a sort of wrapper that take C posix app src
<br>
code, and convert it from pthread to a multiprocessMPI app. But the problem
<br>
is the remote memory access, that will only be implemented in MPI 3.0(for
<br>
what i've read of it).
<br>
<p>So, after 12 hour of intensive reading about MPI and POSIX, the best way to
<br>
deal with my problem(running a C pthreaded app in my cluster) is to convert
<br>
the src in a SPMD way.
<br>
I didn't mentionned that basicly, my prog open huge text file, take each
<br>
string and process it through lot's of cryptographic iteration and then save
<br>
the result in an output.out like file.
<br>
So i will need to make the master process split the input file and then send
<br>
them as input for the worker process.
<br>
<p>But if you or someone else know a kind of interpretor like program to run a
<br>
multithreaded C program and convert it logically to a master/worker
<br>
multiprocess MPI that will be sended by ssh to the interpreter on the worker
<br>
side and then lunched.
<br>
<p>This is what i've tried to explain in the last msg. A dream for the hobyist
<br>
that want to get the full power of a night-time cluster, without having to
<br>
learn all the MPI syntax and structure.
<br>
<p>If it doesn't exist, this would be a really great tool i think.
<br>
<p>Thank you for your reply, but i think i have answered my question alone...
<br>
No Pain, No Gain...
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 20 Sep 2010, at 22:24, Mikael Lavoie wrote:
</span><br>
<span class="quotelev2">&gt; &gt; I wanna know if it exist a implementation that permit to run a single
</span><br>
<span class="quotelev1">&gt; host process on the master of the cluster, that will then spawn 1 process
</span><br>
<span class="quotelev1">&gt; per -np X defined thread at the host specified in the host list. The host
</span><br>
<span class="quotelev1">&gt; will then act as a syncronized sender/collecter of the work done.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I don't fully understand you explanation either but I may be able to help
</span><br>
<span class="quotelev1">&gt; clear up what you are asking for:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If you mean &quot;pthreads&quot; or &quot;linux threads&quot; then no, you cannot have
</span><br>
<span class="quotelev1">&gt; different threads on different nodes under any programming paradigm.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; However if you mean &quot;execution threads&quot; or in MPI parlance &quot;ranks&quot; then
</span><br>
<span class="quotelev1">&gt; yes, under OpenMPI each &quot;rank&quot; will be a separate process on one of the
</span><br>
<span class="quotelev1">&gt; nodes in the host list, as Jody says look at MPI_Comm_Spawn for this.
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
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-14252/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14253.php">Reuti: "Re: [OMPI users] Thread as MPI process"</a>
<li><strong>Previous message:</strong> <a href="14251.php">Ashley Pittman: "Re: [OMPI users] Thread as MPI process"</a>
<li><strong>In reply to:</strong> <a href="14251.php">Ashley Pittman: "Re: [OMPI users] Thread as MPI process"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14254.php">Reuti: "Re: [OMPI users] Thread as MPI process"</a>
<li><strong>Reply:</strong> <a href="14254.php">Reuti: "Re: [OMPI users] Thread as MPI process"</a>
<li><strong>Reply:</strong> <a href="14255.php">Ashley Pittman: "Re: [OMPI users] Thread as MPI process"</a>
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

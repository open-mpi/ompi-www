<?
$subject_val = "Re: [OMPI users] MPI_Comm_spawn lots of times";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Dec  1 18:38:44 2009" -->
<!-- isoreceived="20091201233844" -->
<!-- sent="Tue, 1 Dec 2009 16:38:20 -0700" -->
<!-- isosent="20091201233820" -->
<!-- name="Nicolas Bock" -->
<!-- email="nicolasbock_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_Comm_spawn lots of times" -->
<!-- id="dcf611bd0912011538j7e231f0fqd8a5490ad0b8d234_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="223eadbc0912011528y76200aeapbfd7c7e55962003b_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI_Comm_spawn lots of times<br>
<strong>From:</strong> Nicolas Bock (<em>nicolasbock_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-12-01 18:38:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11337.php">Belaid MOA: "Re: [OMPI users] mpirun is using one PBS node only"</a>
<li><strong>Previous message:</strong> <a href="11335.php">Gus Correa: "Re: [OMPI users] mpirun is using one PBS node only"</a>
<li><strong>In reply to:</strong> <a href="11333.php">Abhishek Kulkarni: "Re: [OMPI users] MPI_Comm_spawn lots of times"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11347.php">Ralph Castain: "Re: [OMPI users] MPI_Comm_spawn lots of times"</a>
<li><strong>Reply:</strong> <a href="11347.php">Ralph Castain: "Re: [OMPI users] MPI_Comm_spawn lots of times"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Tue, Dec 1, 2009 at 16:28, Abhishek Kulkarni &lt;abbyzcool_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; On Tue, Dec 1, 2009 at 6:15 PM, Nicolas Bock &lt;nicolasbock_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt; After reading Anthony's question again, I am not sure now that we are
</span><br>
<span class="quotelev1">&gt; having
</span><br>
<span class="quotelev2">&gt; &gt; the same problem, but we might. In any case, the attached example
</span><br>
<span class="quotelev1">&gt; programs
</span><br>
<span class="quotelev2">&gt; &gt; trigger the issue of running out of pipes. I don't see how orted could,
</span><br>
<span class="quotelev1">&gt; even
</span><br>
<span class="quotelev2">&gt; &gt; if it was reused. There is only a very limited number of processes
</span><br>
<span class="quotelev1">&gt; running
</span><br>
<span class="quotelev2">&gt; &gt; at any given time. Once slave terminates, how would it still have open
</span><br>
<span class="quotelev2">&gt; &gt; pipes? Shouldn't the total number of open files, or pipes, be very
</span><br>
<span class="quotelev1">&gt; limited
</span><br>
<span class="quotelev2">&gt; &gt; in this situation? And yet, after maybe 20 or so iterations in master.c,
</span><br>
<span class="quotelev2">&gt; &gt; orted complains about running out of pipes.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; nick
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; What version of OMPI are you trying it with? I can easily run it up to more
</span><br>
<span class="quotelev1">&gt; than 200 iterations.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
openmpi-1.3.3
<br>
<p><p><p><span class="quotelev1">&gt; Also, how many nodes are you running this on?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This is on one node with 4 cores. I am using
</span><br>
<p>mpirun -np 1
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-11336/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11337.php">Belaid MOA: "Re: [OMPI users] mpirun is using one PBS node only"</a>
<li><strong>Previous message:</strong> <a href="11335.php">Gus Correa: "Re: [OMPI users] mpirun is using one PBS node only"</a>
<li><strong>In reply to:</strong> <a href="11333.php">Abhishek Kulkarni: "Re: [OMPI users] MPI_Comm_spawn lots of times"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11347.php">Ralph Castain: "Re: [OMPI users] MPI_Comm_spawn lots of times"</a>
<li><strong>Reply:</strong> <a href="11347.php">Ralph Castain: "Re: [OMPI users] MPI_Comm_spawn lots of times"</a>
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

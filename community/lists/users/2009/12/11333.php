<?
$subject_val = "Re: [OMPI users] MPI_Comm_spawn lots of times";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Dec  1 18:29:00 2009" -->
<!-- isoreceived="20091201232900" -->
<!-- sent="Tue, 1 Dec 2009 18:28:36 -0500" -->
<!-- isosent="20091201232836" -->
<!-- name="Abhishek Kulkarni" -->
<!-- email="abbyzcool_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_Comm_spawn lots of times" -->
<!-- id="223eadbc0912011528y76200aeapbfd7c7e55962003b_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="dcf611bd0912011515na3d9df0q5a3b989466b77850_at_mail.gmail.com" -->
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
<strong>From:</strong> Abhishek Kulkarni (<em>abbyzcool_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-12-01 18:28:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11334.php">Ralph Castain: "Re: [OMPI users] mpirun is using one PBS node only"</a>
<li><strong>Previous message:</strong> <a href="11332.php">Nicolas Bock: "Re: [OMPI users] MPI_Comm_spawn lots of times"</a>
<li><strong>In reply to:</strong> <a href="11329.php">Nicolas Bock: "Re: [OMPI users] MPI_Comm_spawn lots of times"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11336.php">Nicolas Bock: "Re: [OMPI users] MPI_Comm_spawn lots of times"</a>
<li><strong>Reply:</strong> <a href="11336.php">Nicolas Bock: "Re: [OMPI users] MPI_Comm_spawn lots of times"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Tue, Dec 1, 2009 at 6:15 PM, Nicolas Bock &lt;nicolasbock_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; After reading Anthony's question again, I am not sure now that we are having
</span><br>
<span class="quotelev1">&gt; the same problem, but we might. In any case, the attached example programs
</span><br>
<span class="quotelev1">&gt; trigger the issue of running out of pipes. I don't see how orted could, even
</span><br>
<span class="quotelev1">&gt; if it was reused. There is only a very limited number of processes running
</span><br>
<span class="quotelev1">&gt; at any given time. Once slave terminates, how would it still have open
</span><br>
<span class="quotelev1">&gt; pipes? Shouldn't the total number of open files, or pipes, be very limited
</span><br>
<span class="quotelev1">&gt; in this situation? And yet, after maybe 20 or so iterations in master.c,
</span><br>
<span class="quotelev1">&gt; orted complains about running out of pipes.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; nick
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>What version of OMPI are you trying it with? I can easily run it up to more
<br>
than 200 iterations.
<br>
<p>Also, how many nodes are you running this on?
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Tue, Dec 1, 2009 at 16:08, Nicolas Bock &lt;nicolasbock_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hello list,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; a while back in January of this year, a user (Anthony Thevenin) had the
</span><br>
<span class="quotelev2">&gt;&gt; problem of running out of open pipes when he tried to use MPI_Comm_spawn a
</span><br>
<span class="quotelev2">&gt;&gt; few times. As I the thread his started in the mailing list archives and have
</span><br>
<span class="quotelev2">&gt;&gt; just joined the mailing list myself, I unfortunately can't reply to the
</span><br>
<span class="quotelev2">&gt;&gt; thread. &quot;The thread was titled: Doing a lot of spawns does not work with
</span><br>
<span class="quotelev2">&gt;&gt; ompi 1.3 BUT works with ompi 1.2.7&quot;.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The discussion stopped without really presenting a solution. Is the issue
</span><br>
<span class="quotelev2">&gt;&gt; brought up by Anthony fixed? We are running into the same problem.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks, nick
</span><br>
<span class="quotelev2">&gt;&gt;
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11334.php">Ralph Castain: "Re: [OMPI users] mpirun is using one PBS node only"</a>
<li><strong>Previous message:</strong> <a href="11332.php">Nicolas Bock: "Re: [OMPI users] MPI_Comm_spawn lots of times"</a>
<li><strong>In reply to:</strong> <a href="11329.php">Nicolas Bock: "Re: [OMPI users] MPI_Comm_spawn lots of times"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11336.php">Nicolas Bock: "Re: [OMPI users] MPI_Comm_spawn lots of times"</a>
<li><strong>Reply:</strong> <a href="11336.php">Nicolas Bock: "Re: [OMPI users] MPI_Comm_spawn lots of times"</a>
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

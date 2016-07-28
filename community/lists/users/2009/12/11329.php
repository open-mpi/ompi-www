<?
$subject_val = "Re: [OMPI users] MPI_Comm_spawn lots of times";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Dec  1 18:16:18 2009" -->
<!-- isoreceived="20091201231618" -->
<!-- sent="Tue, 1 Dec 2009 16:15:54 -0700" -->
<!-- isosent="20091201231554" -->
<!-- name="Nicolas Bock" -->
<!-- email="nicolasbock_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_Comm_spawn lots of times" -->
<!-- id="dcf611bd0912011515na3d9df0q5a3b989466b77850_at_mail.gmail.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="dcf611bd0912011508i56e26c1dm268009510294fa67_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2009-12-01 18:15:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11330.php">Ralph Castain: "Re: [OMPI users] MPI_Comm_spawn lots of times"</a>
<li><strong>Previous message:</strong> <a href="11328.php">Nicolas Bock: "[OMPI users] MPI_Comm_spawn lots of times"</a>
<li><strong>In reply to:</strong> <a href="11328.php">Nicolas Bock: "[OMPI users] MPI_Comm_spawn lots of times"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11330.php">Ralph Castain: "Re: [OMPI users] MPI_Comm_spawn lots of times"</a>
<li><strong>Reply:</strong> <a href="11330.php">Ralph Castain: "Re: [OMPI users] MPI_Comm_spawn lots of times"</a>
<li><strong>Reply:</strong> <a href="11333.php">Abhishek Kulkarni: "Re: [OMPI users] MPI_Comm_spawn lots of times"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
After reading Anthony's question again, I am not sure now that we are having
<br>
the same problem, but we might. In any case, the attached example programs
<br>
trigger the issue of running out of pipes. I don't see how orted could, even
<br>
if it was reused. There is only a very limited number of processes running
<br>
at any given time. Once slave terminates, how would it still have open
<br>
pipes? Shouldn't the total number of open files, or pipes, be very limited
<br>
in this situation? And yet, after maybe 20 or so iterations in master.c,
<br>
orted complains about running out of pipes.
<br>
<p>nick
<br>
<p><p>On Tue, Dec 1, 2009 at 16:08, Nicolas Bock &lt;nicolasbock_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hello list,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; a while back in January of this year, a user (Anthony Thevenin) had the
</span><br>
<span class="quotelev1">&gt; problem of running out of open pipes when he tried to use MPI_Comm_spawn a
</span><br>
<span class="quotelev1">&gt; few times. As I the thread his started in the mailing list archives and have
</span><br>
<span class="quotelev1">&gt; just joined the mailing list myself, I unfortunately can't reply to the
</span><br>
<span class="quotelev1">&gt; thread. &quot;The thread was titled: Doing a lot of spawns does not work with
</span><br>
<span class="quotelev1">&gt; ompi 1.3 BUT works with ompi 1.2.7&quot;.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The discussion stopped without really presenting a solution. Is the issue
</span><br>
<span class="quotelev1">&gt; brought up by Anthony fixed? We are running into the same problem.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks, nick
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>

<br><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-11329/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>text/x-csrc attachment: <a href="http://www.open-mpi.org/community/lists/users/att-11329/master.c">master.c</a>
</ul>
<!-- attachment="master.c" -->
<hr>
<ul>
<li>text/x-csrc attachment: <a href="http://www.open-mpi.org/community/lists/users/att-11329/slave.c">slave.c</a>
</ul>
<!-- attachment="slave.c" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11330.php">Ralph Castain: "Re: [OMPI users] MPI_Comm_spawn lots of times"</a>
<li><strong>Previous message:</strong> <a href="11328.php">Nicolas Bock: "[OMPI users] MPI_Comm_spawn lots of times"</a>
<li><strong>In reply to:</strong> <a href="11328.php">Nicolas Bock: "[OMPI users] MPI_Comm_spawn lots of times"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11330.php">Ralph Castain: "Re: [OMPI users] MPI_Comm_spawn lots of times"</a>
<li><strong>Reply:</strong> <a href="11330.php">Ralph Castain: "Re: [OMPI users] MPI_Comm_spawn lots of times"</a>
<li><strong>Reply:</strong> <a href="11333.php">Abhishek Kulkarni: "Re: [OMPI users] MPI_Comm_spawn lots of times"</a>
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

<?
$subject_val = "Re: [OMPI users] How to start MPI_Spawn child processes early?";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jan 27 18:27:28 2010" -->
<!-- isoreceived="20100127232728" -->
<!-- sent="Wed, 27 Jan 2010 18:27:14 -0500" -->
<!-- isosent="20100127232714" -->
<!-- name="Richard Treumann" -->
<!-- email="treumann_at_[hidden]" -->
<!-- subject="Re: [OMPI users] How to start MPI_Spawn child processes early?" -->
<!-- id="OFCBA3F135.F6DDBA35-ON852576B8.00806AD0-852576B8.0080D632_at_us.ibm.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="7B9FEAF2-BEB2-4C19-B9E7-4E3D588BA22D_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] How to start MPI_Spawn child processes early?<br>
<strong>From:</strong> Richard Treumann (<em>treumann_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-01-27 18:27:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11901.php">Douglas Guptill: "Re: [OMPI users] How to start MPI_Spawn child processes early?"</a>
<li><strong>Previous message:</strong> <a href="11899.php">Ralph Castain: "Re: [OMPI users] How to start MPI_Spawn child processes early?"</a>
<li><strong>In reply to:</strong> <a href="11899.php">Ralph Castain: "Re: [OMPI users] How to start MPI_Spawn child processes early?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11901.php">Douglas Guptill: "Re: [OMPI users] How to start MPI_Spawn child processes early?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I cannot resist:
<br>
<p>Jaison -
<br>
<p>The MPI_Comm_spawn call specifies what you want to have happen. The child
<br>
launch is what does happen.
<br>
<p>If we can come up with a way to have things happen correctly before we know
<br>
what it is that we want to have happen, the heck with this HPC stuff. Lets
<br>
get together and place stock orders on yesterday's market.
<br>
<p>Just joking - Ralph's suggestion about launching all parts of the
<br>
application up front and then using JOIN or ACCEPT/CONNECT will work. I
<br>
also agree with his skepticism about the problem. Most applications that
<br>
are worth running in parallel take long enough so the time it takes to
<br>
spawn should be barely noticeable.
<br>
<p>Are you using parallelism for something that only takes a few seconds and
<br>
if so, why not just do it with a serial run?
<br>
<p>Dick Treumann  -  MPI Team
<br>
IBM Systems &amp; Technology Group
<br>
Dept X2ZA / MS P963 -- 2455 South Road -- Poughkeepsie, NY 12601
<br>
Tele (845) 433-7846         Fax (845) 433-8363
<br>
<p><p>users-bounces_at_[hidden] wrote on 01/27/2010 06:07:43 PM:
<br>
<p><span class="quotelev1">&gt; [image removed]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Re: [OMPI users] How to start MPI_Spawn child processes early?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ralph Castain
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; to:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Open MPI Users
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 01/27/2010 06:09 PM
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Sent by:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; users-bounces_at_[hidden]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Please respond to Open MPI Users
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I can't imagine how you would do that - only thing I can think of
</span><br>
<span class="quotelev1">&gt; would be to start your &quot;child&quot; processes as one job, then start your
</span><br>
<span class="quotelev1">&gt; &quot;parent&quot; processes and have them do an MPI_Comm_join with the child job.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; That said, I can't imagine that comm_spawn is -that- slow to make
</span><br>
<span class="quotelev1">&gt; much difference to an HPC application! At least, not in anything
</span><br>
<span class="quotelev1">&gt; I've measured.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jan 27, 2010, at 3:24 PM, Jaison Paul wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Hi, I am just reposting my early query once again. If anyone one
</span><br>
<span class="quotelev1">&gt; can give some hint, that would be great.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Thanks, Jaison
</span><br>
<span class="quotelev2">&gt; &gt; ANU
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Jaison Paul wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Hi All,
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; I am trying to use MPI for scientific High Performance (hpc)
</span><br>
<span class="quotelev1">&gt; applications. I use MPI_Spawn to create child processes. Is there a
</span><br>
<span class="quotelev1">&gt; way to start child processes early than the parent process, using
</span><br>
MPI_Spawn?
<br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; I want this because, my experiments showed that the time to spawn
</span><br>
<span class="quotelev1">&gt; the children by parent is too long for HPC apps which slows down the
</span><br>
<span class="quotelev1">&gt; whole process. If the children are ready when parent application
</span><br>
<span class="quotelev1">&gt; process seeks for them, that initial delay can be avoided. Is there
</span><br>
<span class="quotelev1">&gt; a way to do that?
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Thanks in advance,
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Jaison
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Australian National University
</span><br>
<span class="quotelev3">&gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt; &gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<p>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-11900/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11901.php">Douglas Guptill: "Re: [OMPI users] How to start MPI_Spawn child processes early?"</a>
<li><strong>Previous message:</strong> <a href="11899.php">Ralph Castain: "Re: [OMPI users] How to start MPI_Spawn child processes early?"</a>
<li><strong>In reply to:</strong> <a href="11899.php">Ralph Castain: "Re: [OMPI users] How to start MPI_Spawn child processes early?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11901.php">Douglas Guptill: "Re: [OMPI users] How to start MPI_Spawn child processes early?"</a>
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

<?
$subject_val = "Re: [OMPI users] MPI_Comm_spawn lots of times";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Dec  1 18:26:40 2009" -->
<!-- isoreceived="20091201232640" -->
<!-- sent="Tue, 1 Dec 2009 16:26:15 -0700" -->
<!-- isosent="20091201232615" -->
<!-- name="Nicolas Bock" -->
<!-- email="nicolasbock_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_Comm_spawn lots of times" -->
<!-- id="dcf611bd0912011526y7c0281bds5580fac5518b8d5e_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="6F783459-A583-4EDA-8CF0-2CA1230A0E7C_at_open-mpi.org" -->
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
<strong>Date:</strong> 2009-12-01 18:26:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11332.php">Nicolas Bock: "Re: [OMPI users] MPI_Comm_spawn lots of times"</a>
<li><strong>Previous message:</strong> <a href="11330.php">Ralph Castain: "Re: [OMPI users] MPI_Comm_spawn lots of times"</a>
<li><strong>In reply to:</strong> <a href="11330.php">Ralph Castain: "Re: [OMPI users] MPI_Comm_spawn lots of times"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11332.php">Nicolas Bock: "Re: [OMPI users] MPI_Comm_spawn lots of times"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Sorry,
<br>
<p>openmpi-1.3.3 compiled with gcc-4.4.2
<br>
<p>nick
<br>
<p><p>On Tue, Dec 1, 2009 at 16:24, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; It really does help if we have some idea what OMPI version you are talking
</span><br>
<span class="quotelev1">&gt; about, and on what kind of platform.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This issue was fixed to the best of my knowledge (not all the pipes were
</span><br>
<span class="quotelev1">&gt; getting closed), but I would have to look and see what release might contain
</span><br>
<span class="quotelev1">&gt; the fix...would be nice to know where to start.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Dec 1, 2009, at 4:15 PM, Nicolas Bock wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; After reading Anthony's question again, I am not sure now that we are
</span><br>
<span class="quotelev1">&gt; having the same problem, but we might. In any case, the attached example
</span><br>
<span class="quotelev1">&gt; programs trigger the issue of running out of pipes. I don't see how orted
</span><br>
<span class="quotelev1">&gt; could, even if it was reused. There is only a very limited number of
</span><br>
<span class="quotelev1">&gt; processes running at any given time. Once slave terminates, how would it
</span><br>
<span class="quotelev1">&gt; still have open pipes? Shouldn't the total number of open files, or pipes,
</span><br>
<span class="quotelev1">&gt; be very limited in this situation? And yet, after maybe 20 or so iterations
</span><br>
<span class="quotelev1">&gt; in master.c, orted complains about running out of pipes.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; nick
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Tue, Dec 1, 2009 at 16:08, Nicolas Bock &lt;nicolasbock_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &lt;master.c&gt;&lt;slave.c&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-11331/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11332.php">Nicolas Bock: "Re: [OMPI users] MPI_Comm_spawn lots of times"</a>
<li><strong>Previous message:</strong> <a href="11330.php">Ralph Castain: "Re: [OMPI users] MPI_Comm_spawn lots of times"</a>
<li><strong>In reply to:</strong> <a href="11330.php">Ralph Castain: "Re: [OMPI users] MPI_Comm_spawn lots of times"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11332.php">Nicolas Bock: "Re: [OMPI users] MPI_Comm_spawn lots of times"</a>
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

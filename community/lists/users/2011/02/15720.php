<?
$subject_val = "Re: [OMPI users] nonblock alternative to MPI_Win_complete";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb 24 07:07:14 2011" -->
<!-- isoreceived="20110224120714" -->
<!-- sent="Thu, 24 Feb 2011 13:07:07 +0100" -->
<!-- isosent="20110224120707" -->
<!-- name="Toon Knapen" -->
<!-- email="toon.knapen_at_[hidden]" -->
<!-- subject="Re: [OMPI users] nonblock alternative to MPI_Win_complete" -->
<!-- id="AANLkTikgFVfV+NAi+JR7RYopYXguSV38d_fdyWvj7bN9_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="F798AB12-9F75-41C4-B11D-40A9D410FBA4_at_sandia.gov" -->
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
<strong>Subject:</strong> Re: [OMPI users] nonblock alternative to MPI_Win_complete<br>
<strong>From:</strong> Toon Knapen (<em>toon.knapen_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-02-24 07:07:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15721.php">Michael Shuey: "Re: [OMPI users] RoCE (IBoE) &amp; OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="15719.php">Vasiliy G Tolstov: "Re: [OMPI users] multicast not available"</a>
<li><strong>In reply to:</strong> <a href="15681.php">Barrett, Brian W: "Re: [OMPI users] nonblock alternative to MPI_Win_complete"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15722.php">James Dinan: "Re: [OMPI users] nonblock alternative to MPI_Win_complete"</a>
<li><strong>Reply:</strong> <a href="15722.php">James Dinan: "Re: [OMPI users] nonblock alternative to MPI_Win_complete"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
In that case, I have a small question concerning design:
<br>
<p>Suppose task-based parallellism where one node (master) distributes
<br>
work/tasks to 2 other nodes (slaves) by means of an MPI_Put. The master
<br>
allocates 2 buffers locally in which it will store all necessary data that
<br>
is needed by the slave to perform the task. So I do an MPI_Put on each of my
<br>
2 buffers to send each buffer to a specific slave. Now I need to know when I
<br>
can reuse one of my buffers to already store the next task (that I will
<br>
MPI_Put later on). The only way to know this is call MPI_Complete. But since
<br>
this is blocking and if this buffer is not ready to be reused yet, I
<br>
can neither verify if the other buffer is already available to me again (in
<br>
the same thread).
<br>
<p>I would very much appreciate input on how to solve such issue !
<br>
<p>thanks in advance,
<br>
<p>toon
<br>
<p>On Tue, Feb 22, 2011 at 7:21 PM, Barrett, Brian W &lt;bwbarre_at_[hidden]&gt;wrote:
<br>
<p><span class="quotelev1">&gt;  On Feb 18, 2011, at 8:59 AM, Toon Knapen wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; (Probably this issue has been discussed at length before but
</span><br>
<span class="quotelev1">&gt; unfortunately I did not find any threads (on this site or anywhere else) on
</span><br>
<span class="quotelev1">&gt; this topic, if you are able to provide me with links to earlier discussions
</span><br>
<span class="quotelev1">&gt; on this topic, please do not hesitate)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Is there an alternative to MPI_Win_complete that does not 'enforce
</span><br>
<span class="quotelev1">&gt; completion of preceding RMS calls at the origin' (as said on pag 353 of the
</span><br>
<span class="quotelev1">&gt; mpi-2.2 standard) ?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I would like to know if I can reuse the buffer I gave to MPI_Put but
</span><br>
<span class="quotelev1">&gt; without blocking on it, if the MPI lib is still using it, I want to be able
</span><br>
<span class="quotelev1">&gt; to continue (and use another buffer).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; There is not.   MPI_Win_complete is the only way to finish a MPI_Win_start
</span><br>
<span class="quotelev1">&gt; epoch, and is always blocking until local completion of all messages started
</span><br>
<span class="quotelev1">&gt; during the epoch.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Brian
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt;  Brian W. Barrett
</span><br>
<span class="quotelev1">&gt;  Dept. 1423: Scalable System Software
</span><br>
<span class="quotelev1">&gt;  Sandia National Laboratories
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-15720/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15721.php">Michael Shuey: "Re: [OMPI users] RoCE (IBoE) &amp; OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="15719.php">Vasiliy G Tolstov: "Re: [OMPI users] multicast not available"</a>
<li><strong>In reply to:</strong> <a href="15681.php">Barrett, Brian W: "Re: [OMPI users] nonblock alternative to MPI_Win_complete"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15722.php">James Dinan: "Re: [OMPI users] nonblock alternative to MPI_Win_complete"</a>
<li><strong>Reply:</strong> <a href="15722.php">James Dinan: "Re: [OMPI users] nonblock alternative to MPI_Win_complete"</a>
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

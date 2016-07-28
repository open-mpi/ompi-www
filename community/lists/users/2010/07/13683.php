<?
$subject_val = "Re: [OMPI users] do all processors have to execute MPI_Bcast?";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Jul 17 08:13:50 2010" -->
<!-- isoreceived="20100717121350" -->
<!-- sent="Sat, 17 Jul 2010 05:13:25 -0700" -->
<!-- isosent="20100717121325" -->
<!-- name="David Zhang" -->
<!-- email="solarbikedz_at_[hidden]" -->
<!-- subject="Re: [OMPI users] do all processors have to execute MPI_Bcast?" -->
<!-- id="AANLkTim1793fX7cVCt33L8cUG_wIPR5V3lLfp3XAeNh9_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="20100717081339.GA50676_at_mech-cluster241.men.bris.ac.uk" -->
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
<strong>Subject:</strong> Re: [OMPI users] do all processors have to execute MPI_Bcast?<br>
<strong>From:</strong> David Zhang (<em>solarbikedz_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-07-17 08:13:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13684.php">Anton Shterenlikht: "Re: [OMPI users] is loop unrolling safe for MPI logic?"</a>
<li><strong>Previous message:</strong> <a href="13682.php">Anton Shterenlikht: "Re: [OMPI users] do all processors have to execute MPI_Bcast?"</a>
<li><strong>In reply to:</strong> <a href="13678.php">Anton Shterenlikht: "Re: [OMPI users] do all processors have to execute MPI_Bcast?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13685.php">Jeff Squyres: "Re: [OMPI users] do all processors have to execute MPI_Bcast?"</a>
<li><strong>Reply:</strong> <a href="13685.php">Jeff Squyres: "Re: [OMPI users] do all processors have to execute MPI_Bcast?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
collective calls return once it receive reply from everyone in the
<br>
communicator that the message has been received (this is done under the
<br>
hood).  Thus since only one process in the communicator calls Bcast, that
<br>
process will hang indefinitely waiting for reply from other processes on the
<br>
same communicator.
<br>
<p>On Sat, Jul 17, 2010 at 1:13 AM, Anton Shterenlikht &lt;mexas_at_[hidden]&gt;wrote:
<br>
<p><span class="quotelev1">&gt; On Fri, Jul 16, 2010 at 05:20:53PM -0400, Prentice Bisbal wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Eugene Loh wrote:
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Anton Shterenlikht wrote:
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; Will this bit of code work:
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;     if (rank .eq. &lt;somerank&gt;) then
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;         *change var*
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;         call MPI_Bcast(var, 1, MPI_INTEGER, rank, &amp;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;             MPI_COMM_WORLD, errstat)
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;     end if
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;     call MPI_Barrier(MPI_COMM_WORLD, errstat)
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; I'm using a int variable on all processors.
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; At some point some process can change its
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; value of this variable.
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; I then need to let all other
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; processes know the new value. So I tried
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; to use MPI_Bcast for this. But I think
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; MPI waits indefinitely at MPI_Barrier.
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; I'm now wondering if MPI_Bcast must
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; be executed by all processes, similar
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; to MPI_Barrier. Is this correct?
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; All processes in the communicator must make the collective call...
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Bcast, Barrier, Allreduce, etc.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Therefore, following a Bcast with a Barrier is redundant in this example.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Sorry, just to be absolutely clear, are you saying
</span><br>
<span class="quotelev1">&gt; that even though only one process in the communicator
</span><br>
<span class="quotelev1">&gt; is calling Bcast, the call will be made on all
</span><br>
<span class="quotelev1">&gt; processes?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Or are you saying I cannot put Bcast (or any other collective call)
</span><br>
<span class="quotelev1">&gt; inside a &quot;if (rank== ...) {} &quot; construct?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; many thanks
</span><br>
<span class="quotelev1">&gt; anton
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Anton Shterenlikht
</span><br>
<span class="quotelev1">&gt; Room 2.6, Queen's Building
</span><br>
<span class="quotelev1">&gt; Mech Eng Dept
</span><br>
<span class="quotelev1">&gt; Bristol University
</span><br>
<span class="quotelev1">&gt; University Walk, Bristol BS8 1TR, UK
</span><br>
<span class="quotelev1">&gt; Tel: +44 (0)117 331 5944
</span><br>
<span class="quotelev1">&gt; Fax: +44 (0)117 929 4423
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
<p><p><p><pre>
-- 
David Zhang
University of California, San Diego
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-13683/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13684.php">Anton Shterenlikht: "Re: [OMPI users] is loop unrolling safe for MPI logic?"</a>
<li><strong>Previous message:</strong> <a href="13682.php">Anton Shterenlikht: "Re: [OMPI users] do all processors have to execute MPI_Bcast?"</a>
<li><strong>In reply to:</strong> <a href="13678.php">Anton Shterenlikht: "Re: [OMPI users] do all processors have to execute MPI_Bcast?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13685.php">Jeff Squyres: "Re: [OMPI users] do all processors have to execute MPI_Bcast?"</a>
<li><strong>Reply:</strong> <a href="13685.php">Jeff Squyres: "Re: [OMPI users] do all processors have to execute MPI_Bcast?"</a>
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

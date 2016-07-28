<?
$subject_val = "Re: [OMPI users] Partitioning problem set data";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jul 21 11:17:25 2010" -->
<!-- isoreceived="20100721151725" -->
<!-- sent="Wed, 21 Jul 2010 11:16:57 -0400" -->
<!-- isosent="20100721151657" -->
<!-- name="Alexandru Blidaru" -->
<!-- email="alexsb92_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Partitioning problem set data" -->
<!-- id="AANLkTimXw6J6OiiZFIPJ76d7bz5MiwFuDCi86eXDsSsr_at_mail.gmail.com" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="76097BB0C025054786EFAB631C4A2E3C093733B8_at_MERCMBX04R.na.SAS.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Partitioning problem set data<br>
<strong>From:</strong> Alexandru Blidaru (<em>alexsb92_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-07-21 11:16:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13725.php">Ralph Castain: "Re: [OMPI users] Dynamic processes connection and segfault on MPI_Comm_accept"</a>
<li><strong>Previous message:</strong> <a href="13723.php">Bill Rankin: "Re: [OMPI users] Partitioning problem set data"</a>
<li><strong>In reply to:</strong> <a href="13723.php">Bill Rankin: "Re: [OMPI users] Partitioning problem set data"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13728.php">Richard Treumann: "Re: [OMPI users] Partitioning problem set data"</a>
<li><strong>Reply:</strong> <a href="13728.php">Richard Treumann: "Re: [OMPI users] Partitioning problem set data"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hey Bill,
<br>
<p>I took a look at the documentation for MPI_Scatter(), but I noticed that you
<br>
need buffers to use it. My supervisor wasn't really happy with using
<br>
buffers, and for that reason the code that I am writing is only using
<br>
blocking routines, which will make my life a tad bit harder due to the fact
<br>
that i have to avoid a deadlock, i believe it's called. I know it might not
<br>
make sense due to the way MPI works, but is there any Scatter-like function
<br>
that does not use buffers?
<br>
<p>NB: I haven't looked through that book yet, so i am not sure whether they
<br>
provide any non-buffer examples.
<br>
<p>Alex
<br>
<p>On Wed, Jul 21, 2010 at 10:48 AM, Bill Rankin &lt;Bill.Rankin_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt;  Depending on the datatype and its order in memory, the &#147;Block,*&#148; and
</span><br>
<span class="quotelev1">&gt; &#147;*,Block&#148; (which we used to call &#147;slabs&#148; in 3D) may be implemented by a
</span><br>
<span class="quotelev1">&gt; simple scatter/gather call in MPI.   The &#147;Block,Block&#148; distribution is a
</span><br>
<span class="quotelev1">&gt; little more complex, but if you take advantage of MPI&#146;s derived datatypes,
</span><br>
<span class="quotelev1">&gt; you may be able to reference an arbitrary 3D sub-space as a single data
</span><br>
<span class="quotelev1">&gt; entity and then use gather/scatter with that.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I recommend that look through some of the examples in &#147;MPI &#150; The Complete
</span><br>
<span class="quotelev1">&gt; Reference (Vol. 1)&#148; by Snir, et.al. for use of  MPI_Gather(),
</span><br>
<span class="quotelev1">&gt; MPI_Scatter(), as well as the section on user-defined datatypes.  Section
</span><br>
<span class="quotelev1">&gt; 5.2 of &#147;Using MPI&#148; by Gropp, Lusk and Skjellum has an example code for an
</span><br>
<span class="quotelev1">&gt; N-Body Problem which you may find useful.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hope this helps.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -bill
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *From:* users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] *On
</span><br>
<span class="quotelev1">&gt; Behalf Of *Alexandru Blidaru
</span><br>
<span class="quotelev1">&gt; *Sent:* Tuesday, July 20, 2010 10:54 AM
</span><br>
<span class="quotelev1">&gt; *To:* Open MPI Users
</span><br>
<span class="quotelev1">&gt; *Subject:* Re: [OMPI users] Partitioning problem set data
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If there is an already existing implementation of the *Block or Block*
</span><br>
<span class="quotelev1">&gt; methods that splits the array and sends the individual pieces to
</span><br>
<span class="quotelev1">&gt; the proper nodes, can you point me to it please?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Tue, Jul 20, 2010 at 9:52 AM, Alexandru Blidaru &lt;alexsb92_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have a 3D array, which I need to split into equal n parts, so that each
</span><br>
<span class="quotelev1">&gt; part would run on a different node. I found the picture in the attachment
</span><br>
<span class="quotelev1">&gt; from this website (
</span><br>
<span class="quotelev1">&gt; <a href="https://computing.llnl.gov/tutorials/parallel_comp/#DesignPartitioning">https://computing.llnl.gov/tutorials/parallel_comp/#DesignPartitioning</a>) on
</span><br>
<span class="quotelev1">&gt; the different ways to partition data. I am interested in the block methods,
</span><br>
<span class="quotelev1">&gt; as the cyclic methods wouldn't really work for me at all. Obviously the *,
</span><br>
<span class="quotelev1">&gt; BLOCK and the BLOCK, * methods would be really easy to implement for 3D
</span><br>
<span class="quotelev1">&gt; arrays, assuming that the 2D picture would be looking at the array from the
</span><br>
<span class="quotelev1">&gt; top. My question is if there are other better ways to do it from a
</span><br>
<span class="quotelev1">&gt; performance standpoint?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks for your replies,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Alex
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-13724/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13725.php">Ralph Castain: "Re: [OMPI users] Dynamic processes connection and segfault on MPI_Comm_accept"</a>
<li><strong>Previous message:</strong> <a href="13723.php">Bill Rankin: "Re: [OMPI users] Partitioning problem set data"</a>
<li><strong>In reply to:</strong> <a href="13723.php">Bill Rankin: "Re: [OMPI users] Partitioning problem set data"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13728.php">Richard Treumann: "Re: [OMPI users] Partitioning problem set data"</a>
<li><strong>Reply:</strong> <a href="13728.php">Richard Treumann: "Re: [OMPI users] Partitioning problem set data"</a>
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

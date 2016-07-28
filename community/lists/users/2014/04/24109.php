<?
$subject_val = "Re: [OMPI users] Simple Question regarding MPI Scatterv";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr  8 07:01:37 2014" -->
<!-- isoreceived="20140408110137" -->
<!-- sent="Tue, 8 Apr 2014 13:01:36 +0200" -->
<!-- isosent="20140408110136" -->
<!-- name="Hamid Saeed" -->
<!-- email="e.hamidsaeed_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Simple Question regarding MPI Scatterv" -->
<!-- id="CAADBNWySkq6bVe1DUJpGdY4P-kOGMYfreVcRfDR=32kht8Jwtg_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CAADBNWwhRJ_uZz7q32Kk2v-xs0NTikbnB1bO9zvzNL82KkULBw_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Simple Question regarding MPI Scatterv<br>
<strong>From:</strong> Hamid Saeed (<em>e.hamidsaeed_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-04-08 07:01:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24110.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Contributing Examples for Java Binding"</a>
<li><strong>Previous message:</strong> <a href="24108.php">Jeff Squyres (jsquyres): "Re: [OMPI users] openmpi query"</a>
<li><strong>In reply to:</strong> <a href="24103.php">Hamid Saeed: "[OMPI users] Simple Question regarding MPI Scatterv"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24111.php">Hamid Saeed: "Re: [OMPI users] Simple Question regarding MPI Scatterv"</a>
<li><strong>Reply:</strong> <a href="24111.php">Hamid Saeed: "Re: [OMPI users] Simple Question regarding MPI Scatterv"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>I think that the MPI open its sockets even though the number of processor
<br>
is only 1 on the same machine?
<br>
regards.
<br>
<p><p><p>On Tue, Apr 8, 2014 at 9:43 AM, Hamid Saeed &lt;e.hamidsaeed_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hello all,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have a very basic question regarding MPI communication.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In my Task, what i am doing is..
</span><br>
<span class="quotelev1">&gt; Comparing Scatterv and MPIO.
</span><br>
<span class="quotelev1">&gt; 1) In scatterv, I scatter all the data to the other ranks and SCAN for the
</span><br>
<span class="quotelev1">&gt; specific characters.
</span><br>
<span class="quotelev1">&gt; MPI_Scatterv (chunk, send_counts, displacements, MPI_CHAR, copychunk, smallchunk_size,
</span><br>
<span class="quotelev1">&gt; MPI_CHAR, 0,  MPI_COMM_WORLD);
</span><br>
<span class="quotelev1">&gt; &amp;
</span><br>
<span class="quotelev1">&gt; 2) On the other hand using MPIO, I have the data available in the shared
</span><br>
<span class="quotelev1">&gt; memory and every rank searches in the specific chunk.
</span><br>
<span class="quotelev1">&gt; MPI_File_open(MPI_COMM_WORLD, &quot;170mb.txt&quot;, MPI_MODE_RDONLY, MPI_INFO_NULL,
</span><br>
<span class="quotelev1">&gt; &amp;in);
</span><br>
<span class="quotelev1">&gt; here i assign every processor to search in a specific &quot;chunk&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; My question is..
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Why MPI_Scatterv using 1 processor takes more time then MPI_File_open?
</span><br>
<span class="quotelev1">&gt; How does MPI sending and receiving takes place?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I think using 1 processor does not include physical sending and
</span><br>
<span class="quotelev1">&gt; receiving. Then why it consumes more clock?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In the attachment you can observe the plots in which i performed some
</span><br>
<span class="quotelev1">&gt; tests using both algorithms.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Kindly explain briefly the mpi communication using 1 processor and
</span><br>
<span class="quotelev1">&gt; multiple processors.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks in advance.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Regards
</span><br>
<span class="quotelev1">&gt; Hamid
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
--
Hamid
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-24109/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24110.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Contributing Examples for Java Binding"</a>
<li><strong>Previous message:</strong> <a href="24108.php">Jeff Squyres (jsquyres): "Re: [OMPI users] openmpi query"</a>
<li><strong>In reply to:</strong> <a href="24103.php">Hamid Saeed: "[OMPI users] Simple Question regarding MPI Scatterv"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24111.php">Hamid Saeed: "Re: [OMPI users] Simple Question regarding MPI Scatterv"</a>
<li><strong>Reply:</strong> <a href="24111.php">Hamid Saeed: "Re: [OMPI users] Simple Question regarding MPI Scatterv"</a>
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

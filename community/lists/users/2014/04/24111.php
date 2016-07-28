<?
$subject_val = "Re: [OMPI users] Simple Question regarding MPI Scatterv";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr  8 09:12:53 2014" -->
<!-- isoreceived="20140408131253" -->
<!-- sent="Tue, 8 Apr 2014 15:12:52 +0200" -->
<!-- isosent="20140408131252" -->
<!-- name="Hamid Saeed" -->
<!-- email="e.hamidsaeed_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Simple Question regarding MPI Scatterv" -->
<!-- id="CAADBNWxWvy2FXEnmWTrOJPfrm3ZWCDHmJY93vnR7JZXW7sW-Bg_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CAADBNWySkq6bVe1DUJpGdY4P-kOGMYfreVcRfDR=32kht8Jwtg_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2014-04-08 09:12:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24112.php">Joshua Ladd: "Re: [OMPI users] mca_coll_hcoll.so: undefined symbol	hcoll_group_destroy_notify"</a>
<li><strong>Previous message:</strong> <a href="24110.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Contributing Examples for Java Binding"</a>
<li><strong>In reply to:</strong> <a href="24109.php">Hamid Saeed: "Re: [OMPI users] Simple Question regarding MPI Scatterv"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24113.php">Ralph Castain: "Re: [OMPI users] Simple Question regarding MPI Scatterv"</a>
<li><strong>Reply:</strong> <a href="24113.php">Ralph Castain: "Re: [OMPI users] Simple Question regarding MPI Scatterv"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Can someone kindly reply?
<br>
<p><p><p>On Tue, Apr 8, 2014 at 1:01 PM, Hamid Saeed &lt;e.hamidsaeed_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt; I think that the MPI open its sockets even though the number of processor
</span><br>
<span class="quotelev1">&gt; is only 1 on the same machine?
</span><br>
<span class="quotelev1">&gt; regards.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Tue, Apr 8, 2014 at 9:43 AM, Hamid Saeed &lt;e.hamidsaeed_at_[hidden]&gt;wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hello all,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  I have a very basic question regarding MPI communication.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; In my Task, what i am doing is..
</span><br>
<span class="quotelev2">&gt;&gt; Comparing Scatterv and MPIO.
</span><br>
<span class="quotelev2">&gt;&gt; 1) In scatterv, I scatter all the data to the other ranks and SCAN for
</span><br>
<span class="quotelev2">&gt;&gt; the specific characters.
</span><br>
<span class="quotelev2">&gt;&gt; MPI_Scatterv (chunk, send_counts, displacements, MPI_CHAR, copychunk, smallchunk_size,
</span><br>
<span class="quotelev2">&gt;&gt; MPI_CHAR, 0,  MPI_COMM_WORLD);
</span><br>
<span class="quotelev2">&gt;&gt; &amp;
</span><br>
<span class="quotelev2">&gt;&gt; 2) On the other hand using MPIO, I have the data available in the shared
</span><br>
<span class="quotelev2">&gt;&gt; memory and every rank searches in the specific chunk.
</span><br>
<span class="quotelev2">&gt;&gt; MPI_File_open(MPI_COMM_WORLD, &quot;170mb.txt&quot;, MPI_MODE_RDONLY,
</span><br>
<span class="quotelev2">&gt;&gt; MPI_INFO_NULL, &amp;in);
</span><br>
<span class="quotelev2">&gt;&gt; here i assign every processor to search in a specific &quot;chunk&quot;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; My question is..
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Why MPI_Scatterv using 1 processor takes more time then MPI_File_open?
</span><br>
<span class="quotelev2">&gt;&gt; How does MPI sending and receiving takes place?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I think using 1 processor does not include physical sending and
</span><br>
<span class="quotelev2">&gt;&gt; receiving. Then why it consumes more clock?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; In the attachment you can observe the plots in which i performed some
</span><br>
<span class="quotelev2">&gt;&gt; tests using both algorithms.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Kindly explain briefly the mpi communication using 1 processor and
</span><br>
<span class="quotelev2">&gt;&gt; multiple processors.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks in advance.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Regards
</span><br>
<span class="quotelev2">&gt;&gt; Hamid
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Hamid
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><pre>
-- 
_______________________________________________
Hamid Saeed
CoSynth GmbH &amp; Co. KG
Escherweg 2 - 26121 Oldenburg - Germany
Tel +49 441 9722 738 | Fax -278
<a href="http://www.cosynth.com">http://www.cosynth.com</a>
_______________________________________________
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-24111/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24112.php">Joshua Ladd: "Re: [OMPI users] mca_coll_hcoll.so: undefined symbol	hcoll_group_destroy_notify"</a>
<li><strong>Previous message:</strong> <a href="24110.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Contributing Examples for Java Binding"</a>
<li><strong>In reply to:</strong> <a href="24109.php">Hamid Saeed: "Re: [OMPI users] Simple Question regarding MPI Scatterv"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24113.php">Ralph Castain: "Re: [OMPI users] Simple Question regarding MPI Scatterv"</a>
<li><strong>Reply:</strong> <a href="24113.php">Ralph Castain: "Re: [OMPI users] Simple Question regarding MPI Scatterv"</a>
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

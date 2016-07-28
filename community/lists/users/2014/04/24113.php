<?
$subject_val = "Re: [OMPI users] Simple Question regarding MPI Scatterv";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr  8 10:46:17 2014" -->
<!-- isoreceived="20140408144617" -->
<!-- sent="Tue, 8 Apr 2014 07:45:38 -0700" -->
<!-- isosent="20140408144538" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Simple Question regarding MPI Scatterv" -->
<!-- id="65787FBA-FC39-40DD-B175-4B4A7C87E167_at_open-mpi.org" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CAADBNWxWvy2FXEnmWTrOJPfrm3ZWCDHmJY93vnR7JZXW7sW-Bg_at_mail.gmail.com" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-04-08 10:45:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24114.php">Hamid Saeed: "Re: [OMPI users] Simple Question regarding MPI Scatterv"</a>
<li><strong>Previous message:</strong> <a href="24112.php">Joshua Ladd: "Re: [OMPI users] mca_coll_hcoll.so: undefined symbol	hcoll_group_destroy_notify"</a>
<li><strong>In reply to:</strong> <a href="24111.php">Hamid Saeed: "Re: [OMPI users] Simple Question regarding MPI Scatterv"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24114.php">Hamid Saeed: "Re: [OMPI users] Simple Question regarding MPI Scatterv"</a>
<li><strong>Reply:</strong> <a href="24114.php">Hamid Saeed: "Re: [OMPI users] Simple Question regarding MPI Scatterv"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I suspect it all depends on when you start the clock. If the data is sitting in the file at time=0, then the file I/O method will likely be faster as every proc just reads its data in parallel - no comm required as it is all handled by the parallel file system.
<br>
<p>I confess I don't quite understand your reference to &quot;shared memory&quot; in the MPIO case, but I suspect what you really meant was just &quot;parallel file system&quot;?
<br>
<p><p>On Apr 8, 2014, at 6:12 AM, Hamid Saeed &lt;e.hamidsaeed_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Can someone kindly reply?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Tue, Apr 8, 2014 at 1:01 PM, Hamid Saeed &lt;e.hamidsaeed_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt; I think that the MPI open its sockets even though the number of processor is only 1 on the same machine?
</span><br>
<span class="quotelev1">&gt; regards.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Tue, Apr 8, 2014 at 9:43 AM, Hamid Saeed &lt;e.hamidsaeed_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; Hello all,
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
<span class="quotelev1">&gt; 1) In scatterv, I scatter all the data to the other ranks and SCAN for the specific characters.
</span><br>
<span class="quotelev1">&gt; MPI_Scatterv (chunk, send_counts, displacements, MPI_CHAR, copychunk, smallchunk_size, MPI_CHAR, 0,  MPI_COMM_WORLD);  
</span><br>
<span class="quotelev1">&gt; &amp;
</span><br>
<span class="quotelev1">&gt; 2) On the other hand using MPIO, I have the data available in the shared memory and every rank searches in the specific chunk.
</span><br>
<span class="quotelev1">&gt; MPI_File_open(MPI_COMM_WORLD, &quot;170mb.txt&quot;, MPI_MODE_RDONLY, MPI_INFO_NULL, &amp;in);
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
<span class="quotelev1">&gt; I think using 1 processor does not include physical sending and receiving. Then why it consumes more clock?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; In the attachment you can observe the plots in which i performed some tests using both algorithms.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Kindly explain briefly the mpi communication using 1 processor and multiple processors.
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
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; Hamid Saeed
</span><br>
<span class="quotelev1">&gt; CoSynth GmbH &amp; Co. KG
</span><br>
<span class="quotelev1">&gt; Escherweg 2 - 26121 Oldenburg - Germany
</span><br>
<span class="quotelev1">&gt; Tel +49 441 9722 738 | Fax -278
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cosynth.com">http://www.cosynth.com</a>
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-24113/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24114.php">Hamid Saeed: "Re: [OMPI users] Simple Question regarding MPI Scatterv"</a>
<li><strong>Previous message:</strong> <a href="24112.php">Joshua Ladd: "Re: [OMPI users] mca_coll_hcoll.so: undefined symbol	hcoll_group_destroy_notify"</a>
<li><strong>In reply to:</strong> <a href="24111.php">Hamid Saeed: "Re: [OMPI users] Simple Question regarding MPI Scatterv"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24114.php">Hamid Saeed: "Re: [OMPI users] Simple Question regarding MPI Scatterv"</a>
<li><strong>Reply:</strong> <a href="24114.php">Hamid Saeed: "Re: [OMPI users] Simple Question regarding MPI Scatterv"</a>
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

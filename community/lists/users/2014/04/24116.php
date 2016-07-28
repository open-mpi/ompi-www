<?
$subject_val = "Re: [OMPI users] Simple Question regarding MPI Scatterv";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr  8 11:45:26 2014" -->
<!-- isoreceived="20140408154526" -->
<!-- sent="Tue, 8 Apr 2014 15:45:25 +0000" -->
<!-- isosent="20140408154525" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Simple Question regarding MPI Scatterv" -->
<!-- id="8A4227B4-2C87-4FBC-9AFB-B72C3C16392C_at_cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="3AF0C503-4E02-494B-AFA0-556E6830434F_at_open-mpi.org" -->
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
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-04-08 11:45:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24117.php">Gus Correa: "Re: [OMPI users] openmpi query"</a>
<li><strong>Previous message:</strong> <a href="24115.php">Ralph Castain: "Re: [OMPI users] Simple Question regarding MPI Scatterv"</a>
<li><strong>In reply to:</strong> <a href="24115.php">Ralph Castain: "Re: [OMPI users] Simple Question regarding MPI Scatterv"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
In general, benchmarking is very hard.
<br>
<p>For example, you almost certainly want to do some &quot;warmup&quot; communications of the pattern that you're going to measure.  This gets all communications setup, resources allocated, caches warmed up, etc.
<br>
<p>That is, there's generally some one-time setup that happens the &quot;first&quot; time you do a particular communication pattern (e.g., open sockets, allocate resources, etc.).  Then there's every-time setup (e.g., load caches, etc.).
<br>
<p>In your benchmarking, you probably don't want to measure the first-time setup because your real program where you use this stuff will amortize the first-time setup costs away over time.  The every-time setup may or may not be amortized depending on how you use it (e.g., if you're using it in a tight loop and caches are still warm, etc.).
<br>
<p>My only real point: be sure to factor all this kind of stuff in your timing.  At a minimum, I suggest doing some warmup communications before beginning your timing loop.
<br>
<p><p>On Apr 8, 2014, at 11:35 AM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Apr 8, 2014, at 8:05 AM, Hamid Saeed &lt;e.hamidsaeed_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Yes i meant Parallel file system.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; And can you kindly explain what exactly happens if 
</span><br>
<span class="quotelev2">&gt;&gt; the RANK0 want to send to RANK0?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It goes thru the &quot;self&quot; BTL, which is pretty fast but does require a little time You also have the collective operation overhead in the scatterv algorithm.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Why does MPIO is different in time consumption than RANK0 to RANK0 communication?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Again, it depends on how you did the test. MPIO on a single node is just a file read operation - depending on the parallel file system, that can be heavily optimized with pre-fetch and memory caching.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Tue, Apr 8, 2014 at 4:45 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; I suspect it all depends on when you start the clock. If the data is sitting in the file at time=0, then the file I/O method will likely be faster as every proc just reads its data in parallel - no comm required as it is all handled by the parallel file system.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I confess I don't quite understand your reference to &quot;shared memory&quot; in the MPIO case, but I suspect what you really meant was just &quot;parallel file system&quot;?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Apr 8, 2014, at 6:12 AM, Hamid Saeed &lt;e.hamidsaeed_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Can someone kindly reply?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Tue, Apr 8, 2014 at 1:01 PM, Hamid Saeed &lt;e.hamidsaeed_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hello,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I think that the MPI open its sockets even though the number of processor is only 1 on the same machine?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; regards.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Tue, Apr 8, 2014 at 9:43 AM, Hamid Saeed &lt;e.hamidsaeed_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hello all,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I have a very basic question regarding MPI communication.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; In my Task, what i am doing is..
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Comparing Scatterv and MPIO.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 1) In scatterv, I scatter all the data to the other ranks and SCAN for the specific characters.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI_Scatterv (chunk, send_counts, displacements, MPI_CHAR, copychunk, smallchunk_size, MPI_CHAR, 0,  MPI_COMM_WORLD);  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &amp;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 2) On the other hand using MPIO, I have the data available in the shared memory and every rank searches in the specific chunk.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI_File_open(MPI_COMM_WORLD, &quot;170mb.txt&quot;, MPI_MODE_RDONLY, MPI_INFO_NULL, &amp;in);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; here i assign every processor to search in a specific &quot;chunk&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; My question is..
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Why MPI_Scatterv using 1 processor takes more time then MPI_File_open?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; How does MPI sending and receiving takes place?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I think using 1 processor does not include physical sending and receiving. Then why it consumes more clock?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; In the attachment you can observe the plots in which i performed some tests using both algorithms.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Kindly explain briefly the mpi communication using 1 processor and multiple processors.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks in advance.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Regards
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hamid
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hamid
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hamid Saeed
</span><br>
<span class="quotelev3">&gt;&gt;&gt; CoSynth GmbH &amp; Co. KG
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Escherweg 2 - 26121 Oldenburg - Germany
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Tel +49 441 9722 738 | Fax -278
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.cosynth.com">http://www.cosynth.com</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; Hamid Saeed
</span><br>
<span class="quotelev2">&gt;&gt; CoSynth GmbH &amp; Co. KG
</span><br>
<span class="quotelev2">&gt;&gt; Escherweg 2 - 26121 Oldenburg - Germany
</span><br>
<span class="quotelev2">&gt;&gt; Tel +49 441 9722 738 | Fax -278
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.cosynth.com">http://www.cosynth.com</a>
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24117.php">Gus Correa: "Re: [OMPI users] openmpi query"</a>
<li><strong>Previous message:</strong> <a href="24115.php">Ralph Castain: "Re: [OMPI users] Simple Question regarding MPI Scatterv"</a>
<li><strong>In reply to:</strong> <a href="24115.php">Ralph Castain: "Re: [OMPI users] Simple Question regarding MPI Scatterv"</a>
<!-- nextthread="start" -->
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

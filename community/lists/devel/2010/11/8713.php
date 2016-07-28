<?
$subject_val = "Re: [OMPI devel] Simple program (103 lines) makes Open-1.4.3 hang";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Nov 23 20:22:02 2010" -->
<!-- isoreceived="20101124012202" -->
<!-- sent="Tue, 23 Nov 2010 20:21:58 -0500" -->
<!-- isosent="20101124012158" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Simple program (103 lines) makes Open-1.4.3 hang" -->
<!-- id="54642EC2-7B57-4F33-83EA-FDC3FE22A5F9_at_cisco.com" -->
<!-- charset="utf-8" -->
<!-- inreplyto="1290551785.24821.35.camel_at_godzilla" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Simple program (103 lines) makes Open-1.4.3 hang<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-11-23 20:21:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8714.php">Eugene Loh: "Re: [OMPI devel] Simple program (103 lines) makes Open-1.4.3 hang"</a>
<li><strong>Previous message:</strong> <a href="8712.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Simple program (103 lines) makes Open-1.4.3 hang"</a>
<li><strong>In reply to:</strong> <a href="8705.php">S&#233;bastien Boisvert: "Re: [OMPI devel] Simple program (103 lines) makes Open-1.4.3 hang"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8716.php">Sébastien Boisvert: "Re: [OMPI devel] Simple program (103 lines) makes Open-1.4.3 hang"</a>
<li><strong>Reply:</strong> <a href="8716.php">Sébastien Boisvert: "Re: [OMPI devel] Simple program (103 lines) makes Open-1.4.3 hang"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Beware that MPI-request-free on active buffers is valid but evil. You CANNOT be sure when the buffer is available for reuse. 
<br>
<p>There was a sentence or paragraph added yo MPI 2.2 describing exactly this case. 
<br>
<p>Sent from my PDA. No type good. 
<br>
<p>On Nov 23, 2010, at 5:36 PM, S&#195;&#169;bastien Boisvert &lt;Sebastien.Boisvert.3_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Le mardi 23 novembre 2010 &#195;&#160; 17:28 -0500, George Bosilca a &#195;&#169;crit :
</span><br>
<span class="quotelev2">&gt;&gt; Sebastien,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Using MPI_Isend doesn't guarantee asynchronous progress. As you might be aware, the non-blocking communications are guaranteed to progress only when the application is in the MPI library. Currently very few MPI implementations progress asynchronously (and unfortunately Open MPI is not one of them).
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Regardless, I just need the non-blocking behavior.
</span><br>
<span class="quotelev1">&gt; I call MPI_Request_free just after MPI_Isend, and I use a ring allocator
</span><br>
<span class="quotelev1">&gt; to allocate message buffers.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Message recipients just reply with another message to the source, using
</span><br>
<span class="quotelev1">&gt; a NULL buffer.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The sender waits for the reply before sending the next message.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; And it works for assembling bacterial genomes on many MPI ranks:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt; Rank 0: 162 contigs/4576725 nucleotides
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Rank 0 reports the elapsed time, Tue Nov 23 01:35:48 2010
</span><br>
<span class="quotelev1">&gt; ---&gt; Step: Collection of fusions
</span><br>
<span class="quotelev1">&gt;      Elapsed time: 0 seconds
</span><br>
<span class="quotelev1">&gt;      Since beginning: 17 minutes, 33 seconds
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Elapsed time for each step, Tue Nov 23 01:35:48 2010
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Beginning of computation: 1 seconds
</span><br>
<span class="quotelev1">&gt; Distribution of sequence reads: 7 minutes, 49 seconds
</span><br>
<span class="quotelev1">&gt; Distribution of vertices: 19 seconds
</span><br>
<span class="quotelev1">&gt; Calculation of coverage distribution: 1 seconds
</span><br>
<span class="quotelev1">&gt; Distribution of edges: 29 seconds
</span><br>
<span class="quotelev1">&gt; Indexing of sequence reads: 1 seconds
</span><br>
<span class="quotelev1">&gt; Computation of seeds: 2 minutes, 33 seconds
</span><br>
<span class="quotelev1">&gt; Computation of library sizes: 1 minutes, 47 seconds
</span><br>
<span class="quotelev1">&gt; Extension of seeds: 3 minutes, 34 seconds
</span><br>
<span class="quotelev1">&gt; Computation of fusions: 59 seconds
</span><br>
<span class="quotelev1">&gt; Collection of fusions: 0 seconds
</span><br>
<span class="quotelev1">&gt; Completion of the assembly: 17 minutes, 33 seconds
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Rank 0 wrote Ecoli-THEONE.CoverageDistribution.txt
</span><br>
<span class="quotelev1">&gt; Rank 0 wrote Ecoli-THEONE.fasta
</span><br>
<span class="quotelev1">&gt; Rank 0 wrote Ecoli-THEONE.ReceivedMessages.txt
</span><br>
<span class="quotelev1">&gt; Rank 0 wrote Ecoli-THEONE.Library0.txt
</span><br>
<span class="quotelev1">&gt; Rank 0 wrote Ecoli-THEONE.Library1.txt
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Au revoir !
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;  george.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Nov 23, 2010, at 17:17 , S&#195;&#169;bastien Boisvert wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I now use MPI_Isend, so the problem is no more.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; M. S&#195;&#169;bastien Boisvert
</span><br>
<span class="quotelev1">&gt; &#195;&#137;tudiant au doctorat en physiologie-endocrinologie &#195;&#160; l'Universit&#195;&#169; Laval
</span><br>
<span class="quotelev1">&gt; Boursier des Instituts de recherche en sant&#195;&#169; du Canada
</span><br>
<span class="quotelev1">&gt; &#195;&#137;quipe du Professeur Jacques Corbeil
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Centre de recherche en infectiologie de l'Universit&#195;&#169; Laval
</span><br>
<span class="quotelev1">&gt; Local R-61B
</span><br>
<span class="quotelev1">&gt; 2705, boulevard Laurier
</span><br>
<span class="quotelev1">&gt; Qu&#195;&#169;bec, Qu&#195;&#169;bec
</span><br>
<span class="quotelev1">&gt; Canada G1V 4G2
</span><br>
<span class="quotelev1">&gt; T&#195;&#169;l&#195;&#169;phone: 418 525 4444 46342
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Courriel: SEB_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Web: <a href="http://boisvert.info">http://boisvert.info</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; &quot;Innovation comes only from an assault on the unknown&quot; -Sydney Brenner
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8714.php">Eugene Loh: "Re: [OMPI devel] Simple program (103 lines) makes Open-1.4.3 hang"</a>
<li><strong>Previous message:</strong> <a href="8712.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Simple program (103 lines) makes Open-1.4.3 hang"</a>
<li><strong>In reply to:</strong> <a href="8705.php">S&#233;bastien Boisvert: "Re: [OMPI devel] Simple program (103 lines) makes Open-1.4.3 hang"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8716.php">Sébastien Boisvert: "Re: [OMPI devel] Simple program (103 lines) makes Open-1.4.3 hang"</a>
<li><strong>Reply:</strong> <a href="8716.php">Sébastien Boisvert: "Re: [OMPI devel] Simple program (103 lines) makes Open-1.4.3 hang"</a>
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

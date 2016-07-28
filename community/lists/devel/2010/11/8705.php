<?
$subject_val = "Re: [OMPI devel] Simple program (103 lines) makes Open-1.4.3 hang";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Nov 23 17:36:21 2010" -->
<!-- isoreceived="20101123223621" -->
<!-- sent="Tue, 23 Nov 2010 17:36:25 -0500" -->
<!-- isosent="20101123223625" -->
<!-- name="S&#233;bastien Boisvert" -->
<!-- email="Sebastien.Boisvert.3_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Simple program (103 lines) makes Open-1.4.3 hang" -->
<!-- id="1290551785.24821.35.camel_at_godzilla" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="E330E813-B739-4B4B-B8DB-BF112B319F05_at_eecs.utk.edu" -->
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
<strong>From:</strong> S&#233;bastien Boisvert (<em>Sebastien.Boisvert.3_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-11-23 17:36:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8706.php">George Bosilca: "Re: [OMPI devel] Simple program (103 lines) makes Open-1.4.3 hang"</a>
<li><strong>Previous message:</strong> <a href="8704.php">S&#233;bastien Boisvert: "Re: [OMPI devel] Simple program (103 lines) makes Open-1.4.3 hang"</a>
<li><strong>In reply to:</strong> <a href="8703.php">George Bosilca: "Re: [OMPI devel] Simple program (103 lines) makes Open-1.4.3 hang"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8713.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Simple program (103 lines) makes Open-1.4.3 hang"</a>
<li><strong>Reply:</strong> <a href="8713.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Simple program (103 lines) makes Open-1.4.3 hang"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Le mardi 23 novembre 2010 &#195;&#160; 17:28 -0500, George Bosilca a &#195;&#169;crit :
<br>
<span class="quotelev1">&gt; Sebastien,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Using MPI_Isend doesn't guarantee asynchronous progress. As you might be aware, the non-blocking communications are guaranteed to progress only when the application is in the MPI library. Currently very few MPI implementations progress asynchronously (and unfortunately Open MPI is not one of them).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p>Regardless, I just need the non-blocking behavior.
<br>
I call MPI_Request_free just after MPI_Isend, and I use a ring allocator
<br>
to allocate message buffers.
<br>
<p>Message recipients just reply with another message to the source, using
<br>
a NULL buffer.
<br>
<p>The sender waits for the reply before sending the next message.
<br>
<p>And it works for assembling bacterial genomes on many MPI ranks:
<br>
<p>...
<br>
Rank 0: 162 contigs/4576725 nucleotides
<br>
<p>Rank 0 reports the elapsed time, Tue Nov 23 01:35:48 2010
<br>
&nbsp;---&gt; Step: Collection of fusions
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Elapsed time: 0 seconds
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Since beginning: 17 minutes, 33 seconds
<br>
<p>Elapsed time for each step, Tue Nov 23 01:35:48 2010
<br>
<p>&nbsp;Beginning of computation: 1 seconds
<br>
&nbsp;Distribution of sequence reads: 7 minutes, 49 seconds
<br>
&nbsp;Distribution of vertices: 19 seconds
<br>
&nbsp;Calculation of coverage distribution: 1 seconds
<br>
&nbsp;Distribution of edges: 29 seconds
<br>
&nbsp;Indexing of sequence reads: 1 seconds
<br>
&nbsp;Computation of seeds: 2 minutes, 33 seconds
<br>
&nbsp;Computation of library sizes: 1 minutes, 47 seconds
<br>
&nbsp;Extension of seeds: 3 minutes, 34 seconds
<br>
&nbsp;Computation of fusions: 59 seconds
<br>
&nbsp;Collection of fusions: 0 seconds
<br>
&nbsp;Completion of the assembly: 17 minutes, 33 seconds
<br>
<p>Rank 0 wrote Ecoli-THEONE.CoverageDistribution.txt
<br>
Rank 0 wrote Ecoli-THEONE.fasta
<br>
Rank 0 wrote Ecoli-THEONE.ReceivedMessages.txt
<br>
Rank 0 wrote Ecoli-THEONE.Library0.txt
<br>
Rank 0 wrote Ecoli-THEONE.Library1.txt
<br>
<p>Au revoir !
<br>
<p><p><span class="quotelev1">&gt;   george.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Nov 23, 2010, at 17:17 , S&#195;&#169;bastien Boisvert wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; I now use MPI_Isend, so the problem is no more.
</span><br>
<span class="quotelev1">&gt; 
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
<p><pre>
-- 
M. S&#195;&#169;bastien Boisvert
&#195;&#137;tudiant au doctorat en physiologie-endocrinologie &#195;&#160; l'Universit&#195;&#169; Laval
Boursier des Instituts de recherche en sant&#195;&#169; du Canada
&#195;&#137;quipe du Professeur Jacques Corbeil
Centre de recherche en infectiologie de l'Universit&#195;&#169; Laval
Local R-61B
2705, boulevard Laurier
Qu&#195;&#169;bec, Qu&#195;&#169;bec
Canada G1V 4G2
T&#195;&#169;l&#195;&#169;phone: 418 525 4444 46342
Courriel: SEB_at_[hidden]
Web: <a href="http://boisvert.info">http://boisvert.info</a>
&quot;Innovation comes only from an assault on the unknown&quot; -Sydney Brenner
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8706.php">George Bosilca: "Re: [OMPI devel] Simple program (103 lines) makes Open-1.4.3 hang"</a>
<li><strong>Previous message:</strong> <a href="8704.php">S&#233;bastien Boisvert: "Re: [OMPI devel] Simple program (103 lines) makes Open-1.4.3 hang"</a>
<li><strong>In reply to:</strong> <a href="8703.php">George Bosilca: "Re: [OMPI devel] Simple program (103 lines) makes Open-1.4.3 hang"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8713.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Simple program (103 lines) makes Open-1.4.3 hang"</a>
<li><strong>Reply:</strong> <a href="8713.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Simple program (103 lines) makes Open-1.4.3 hang"</a>
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

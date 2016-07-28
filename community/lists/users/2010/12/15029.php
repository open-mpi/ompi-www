<?
$subject_val = "Re: [OMPI users] Scalability issue";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Dec  7 11:54:52 2010" -->
<!-- isoreceived="20101207165452" -->
<!-- sent="Tue, 7 Dec 2010 08:54:46 -0800" -->
<!-- isosent="20101207165446" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Scalability issue" -->
<!-- id="C188C428-16FF-467E-A2D2-93199DDF8E63_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4CFE61BD.80106_at_ldeo.columbia.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] Scalability issue<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-12-07 11:54:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15030.php">Jeff Squyres: "Re: [OMPI users] glut display 'occasionally' opens"</a>
<li><strong>Previous message:</strong> <a href="15028.php">Gus Correa: "Re: [OMPI users] Scalability issue"</a>
<li><strong>In reply to:</strong> <a href="15028.php">Gus Correa: "Re: [OMPI users] Scalability issue"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15224.php">Benjamin Toueg: "Re: [OMPI users] Scalability issue"</a>
<li><strong>Reply:</strong> <a href="15224.php">Benjamin Toueg: "Re: [OMPI users] Scalability issue"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Dec 7, 2010, at 8:33 AM, Gus Correa wrote:
<br>
<p><span class="quotelev1">&gt; Did I understand you right?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Are you saying that one can effectively double the counting
</span><br>
<span class="quotelev1">&gt; capability (i.e. the &quot;count&quot; parameters in MPI calls) of OpenMPI
</span><br>
<span class="quotelev1">&gt; by compiling it with 8-byte integer flags?
</span><br>
<p>Yes and no.
<br>
<p>If you increase the size of INTEGER *and* int, then hypothetically yes -- although I literally just got a report from someone today that tried a compiler flag to increase the size of C int to 8 bytes and something didn't work right (I don't think we've ever tried this before, so it's not surprising that there are likely some bugs in there).  
<br>
<p>We have previously tested the increase-the-sizeof-INTEGER-to-8-bytes compiler flags and AFAIK, that's still working fine.
<br>
<p>When you call MPI_SEND with an INTEGER count, OMPI will truncate it down to the size of a C int (if we had 8 byte C ints working, this might be a different story).  But keep in mind that increasing the size of C ints will likely cause problems in other areas -- are OS system calls that take int parameters firmly sized (i.e., int32 and the like)?  I'm not so sure -- indeed, that might even be (one of the) problem(s) with the report that I got earlier today...
<br>
<p><span class="quotelev1">&gt; And long as one consistently uses the same flags to compile
</span><br>
<span class="quotelev1">&gt; the application, everything would work smoothly?
</span><br>
<p>I always recommend using the same flags for compiling OMPI as compiling your application.  Of course, you can vary some flags that don't matter (e.g., compiling your app with -g and compiling OMPI with -Ox).  But for &quot;significant&quot; behavior changes (like changing the size of INTEGER), they should definitely match between your app and OMPI.
<br>
<p><span class="quotelev1">&gt; As per several previous discussions here in the list,
</span><br>
<span class="quotelev1">&gt; I was persuaded to believe that MPI_INT / MPI_INTEGER is written
</span><br>
<span class="quotelev1">&gt; in stone to be 4-bytes (perhaps by MPI standard,
</span><br>
<span class="quotelev1">&gt; perhaps the configure script, maybe by both),
</span><br>
<p>Neither, actually.  :-)
<br>
<p>The MPI spec is very, very careful not to mandate the size of int or INTEGER at all.
<br>
<p><span class="quotelev1">&gt; and that &quot;counts&quot; in [Open]MPI would also be restricted to that size
</span><br>
<span class="quotelev1">&gt; i.e., effectively up to 2147483647, if I counted right.
</span><br>
<p>*Most* commodity systems (excluding the embedded world) have 4 byte int's these days, in part because most systems are this way (i.e., momentum).  
<br>
Hence, when we talk about the 2B count limit, we're referring to the fact that most systems where MPI is used default to 4 byte int's.
<br>
<p><span class="quotelev1">&gt; I may have inadvertently misled Benjamin, if this perception is wrong.
</span><br>
<span class="quotelev1">&gt; I will gladly stand corrected, if this is so.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; You are the OpenMPI user's oracle (oops, sorry Cisco),
</span><br>
<span class="quotelev1">&gt; so please speak out.
</span><br>
<p>Please buy Cisco stuff!  :-p
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15030.php">Jeff Squyres: "Re: [OMPI users] glut display 'occasionally' opens"</a>
<li><strong>Previous message:</strong> <a href="15028.php">Gus Correa: "Re: [OMPI users] Scalability issue"</a>
<li><strong>In reply to:</strong> <a href="15028.php">Gus Correa: "Re: [OMPI users] Scalability issue"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15224.php">Benjamin Toueg: "Re: [OMPI users] Scalability issue"</a>
<li><strong>Reply:</strong> <a href="15224.php">Benjamin Toueg: "Re: [OMPI users] Scalability issue"</a>
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

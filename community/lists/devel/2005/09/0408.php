<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Sep 26 07:24:26 2005" -->
<!-- isoreceived="20050926122426" -->
<!-- sent="Mon, 26 Sep 2005 06:24:21 -0600" -->
<!-- isosent="20050926122421" -->
<!-- name="David R. (Chip) Kent IV" -->
<!-- email="drkent_at_[hidden]" -->
<!-- subject="Re:  mpif.h problems" -->
<!-- id="20050926122421.GB24525_at_duckhorn.lanl.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="159d76da712fed6dc74d3ca9dc28aefc_at_open-mpi.org" -->
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
<strong>From:</strong> David R. (Chip) Kent IV (<em>drkent_at_[hidden]</em>)<br>
<strong>Date:</strong> 2005-09-26 07:24:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0409.php">Jeff Squyres: "Re:  mpif.h problems"</a>
<li><strong>Previous message:</strong> <a href="0407.php">Galen M. Shipman: "p2p linpack ---"</a>
<li><strong>In reply to:</strong> <a href="0400.php">Jeff Squyres: "Re:  mpif.h problems"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0409.php">Jeff Squyres: "Re:  mpif.h problems"</a>
<li><strong>Reply:</strong> <a href="0409.php">Jeff Squyres: "Re:  mpif.h problems"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I was able to get the code to compile and run by including only these 3 
<br>
constants.  Thanks for fixing this.
<br>
<p>Chip
<br>
<p>On Fri, Sep 23, 2005 at 11:35:14AM -0400, Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; On Sep 21, 2005, at 3:37 PM, David R. (Chip) Kent IV wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; I managed to find a number of problems with the mpif.h when I tried it 
</span><br>
<span class="quotelev2">&gt; &gt; on
</span><br>
<span class="quotelev2">&gt; &gt; a big application.  It looks like a lot of key constants are not 
</span><br>
<span class="quotelev2">&gt; &gt; defined
</span><br>
<span class="quotelev2">&gt; &gt; in this file.  So far, MPI_SEEK_SET, MPI_MODE_CREATE, MPI_MODE_WRONLY
</span><br>
<span class="quotelev2">&gt; &gt; have broken the build.  I've added them to mpif.h as I find them so 
</span><br>
<span class="quotelev2">&gt; &gt; that
</span><br>
<span class="quotelev2">&gt; &gt; I can get the build to go, but I assume there are many more values 
</span><br>
<span class="quotelev2">&gt; &gt; still
</span><br>
<span class="quotelev2">&gt; &gt; missing.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; (sorry I didn't reply earlier; was traveling with limited connectivity 
</span><br>
<span class="quotelev1">&gt; when you sent this)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Yoinks.  Looks like we forgot to add the MPI-2 IO constants into 
</span><br>
<span class="quotelev1">&gt; mpif.h; thanks for finding this.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'll go add them and take a swipe through the file to see if I can find 
</span><br>
<span class="quotelev1">&gt; any others that we're missing.  Did you find any others that are 
</span><br>
<span class="quotelev1">&gt; missing?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; {+} Jeff Squyres
</span><br>
<span class="quotelev1">&gt; {+} The Open MPI Project
</span><br>
<span class="quotelev1">&gt; {+} <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
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
-----------------------------------------------------
David R. &quot;Chip&quot; Kent IV
Parallel Tools Team
High Performance Computing Environments Group (CCN-8)
Los Alamos National Laboratory
(505)665-5021
drkent_at_[hidden]
-----------------------------------------------------
This message is &quot;Technical data or Software  Publicly 
Available&quot; or &quot;Correspondence&quot;.
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0409.php">Jeff Squyres: "Re:  mpif.h problems"</a>
<li><strong>Previous message:</strong> <a href="0407.php">Galen M. Shipman: "p2p linpack ---"</a>
<li><strong>In reply to:</strong> <a href="0400.php">Jeff Squyres: "Re:  mpif.h problems"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0409.php">Jeff Squyres: "Re:  mpif.h problems"</a>
<li><strong>Reply:</strong> <a href="0409.php">Jeff Squyres: "Re:  mpif.h problems"</a>
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

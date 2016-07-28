<?
$subject_val = "Re: [OMPI users] How to avoid abort when calling MPI_Finalize without calling MPI_File_close?";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec  1 16:44:52 2010" -->
<!-- isoreceived="20101201214452" -->
<!-- sent="Wed, 1 Dec 2010 16:44:45 -0500" -->
<!-- isosent="20101201214445" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] How to avoid abort when calling MPI_Finalize without calling MPI_File_close?" -->
<!-- id="28767FC5-4244-42FB-AD62-E3FEB0776364_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20101201152820.GB4508_at_mcs.anl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI users] How to avoid abort when calling MPI_Finalize without calling MPI_File_close?<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-12-01 16:44:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14971.php">Hicham Mouline: "Re: [OMPI users] win: mpic++ -showme reports duplicate .libs"</a>
<li><strong>Previous message:</strong> <a href="14969.php">Jeff Squyres: "Re: [OMPI users] SIGPIPE handling?"</a>
<li><strong>In reply to:</strong> <a href="14963.php">Rob Latham: "Re: [OMPI users] How to avoid abort when calling MPI_Finalize without calling MPI_File_close?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Dec 1, 2010, at 10:28 AM, Rob Latham wrote:
<br>
<p><span class="quotelev1">&gt; under openmpi, this test program fails because openmpi is trying to
</span><br>
<span class="quotelev1">&gt; help you out.  I'm going to need some help from the openmpi folks
</span><br>
<span class="quotelev1">&gt; here, but the backtrace makes it look like MPI_Finalize is setting the
</span><br>
<span class="quotelev1">&gt; &quot;no more mpi calls allowed&quot; flag, and then goes and calls some mpi
</span><br>
<span class="quotelev1">&gt; routines to clean up the opened files:
</span><br>
<p>Rob -- I think you're right.
<br>
<p>I'll file a ticket, but I don't know exactly when this will be addressed.  James; if you can find a good solution and send a patch, that would be most appreciated.
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
<li><strong>Next message:</strong> <a href="14971.php">Hicham Mouline: "Re: [OMPI users] win: mpic++ -showme reports duplicate .libs"</a>
<li><strong>Previous message:</strong> <a href="14969.php">Jeff Squyres: "Re: [OMPI users] SIGPIPE handling?"</a>
<li><strong>In reply to:</strong> <a href="14963.php">Rob Latham: "Re: [OMPI users] How to avoid abort when calling MPI_Finalize without calling MPI_File_close?"</a>
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

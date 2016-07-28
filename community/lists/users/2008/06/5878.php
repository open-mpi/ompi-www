<?
$subject_val = "Re: [OMPI users] Crash in _int_malloc via MPI_Init";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Jun 15 19:11:28 2008" -->
<!-- isoreceived="20080615231128" -->
<!-- sent="Sun, 15 Jun 2008 17:11:20 -0600" -->
<!-- isosent="20080615231120" -->
<!-- name="Brian Barrett" -->
<!-- email="brbarret_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Crash in _int_malloc via MPI_Init" -->
<!-- id="A63F9BA4-CF0E-4A7B-900F-89220C6F0ADC_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="18517.31133.88459.978309_at_ron.nulle.part" -->
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
<strong>Subject:</strong> Re: [OMPI users] Crash in _int_malloc via MPI_Init<br>
<strong>From:</strong> Brian Barrett (<em>brbarret_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-06-15 19:11:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5879.php">Dirk Eddelbuettel: "Re: [OMPI users] Crash in _int_malloc via MPI_Init"</a>
<li><strong>Previous message:</strong> <a href="5877.php">Dirk Eddelbuettel: "Re: [OMPI users] Crash in _int_malloc via MPI_Init"</a>
<li><strong>In reply to:</strong> <a href="5877.php">Dirk Eddelbuettel: "Re: [OMPI users] Crash in _int_malloc via MPI_Init"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5879.php">Dirk Eddelbuettel: "Re: [OMPI users] Crash in _int_malloc via MPI_Init"</a>
<li><strong>Reply:</strong> <a href="5879.php">Dirk Eddelbuettel: "Re: [OMPI users] Crash in _int_malloc via MPI_Init"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jun 15, 2008, at 2:20 PM, Dirk Eddelbuettel wrote:
<br>
<p><span class="quotelev1">&gt; Yup: I still suspect compiler / linker changes in Ubuntu between Gutsy
</span><br>
<span class="quotelev1">&gt; (released Oct 2007) and Hardy (April 2008).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Why? Because the exactly same source package for Open MPI (as  
</span><br>
<span class="quotelev1">&gt; maintained by
</span><br>
<span class="quotelev1">&gt; Manuel and myself for Debian) works for me on Ubuntu Hardy __if I  
</span><br>
<span class="quotelev1">&gt; compile it
</span><br>
<span class="quotelev1">&gt; on Ubuntu Gutsy__.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Now, I reported this to Ubuntu ... for no answer.  Lucas and  
</span><br>
<span class="quotelev1">&gt; Christoph at
</span><br>
<span class="quotelev1">&gt; Debian today released a feature allowing us Debian maintainers to  
</span><br>
<span class="quotelev1">&gt; see which
</span><br>
<span class="quotelev1">&gt; our packages have bugreports in Ubuntu.  It was only through this  
</span><br>
<span class="quotelev1">&gt; mechanism
</span><br>
<span class="quotelev1">&gt; that I learned that the segfault I saw with Rmpi (using Open MPI)  
</span><br>
<span class="quotelev1">&gt; had been
</span><br>
<span class="quotelev1">&gt; experienced by someone else, and that a similar bug occurs with  
</span><br>
<span class="quotelev1">&gt; Python use on
</span><br>
<span class="quotelev1">&gt; top of Open MPI.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; But still no tangible answer from Canonical / Ubuntu other that some
</span><br>
<span class="quotelev1">&gt; reshuffling of bug reports titles and numbers.  Very disappointing.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am CCing Steffen and Andreas who've seen similar bugs and are  
</span><br>
<span class="quotelev1">&gt; awaiting
</span><br>
<span class="quotelev1">&gt; answers too.  I am also CCing Cesare at Ubuntu who did the bug  
</span><br>
<span class="quotelev1">&gt; rearrangement,
</span><br>
<span class="quotelev1">&gt; maybe he will find a moment to share their plans with us.
</span><br>
<p>I suppose I'm glad that it doesn't look like an Open MPI problem.  Due  
<br>
to continual problems with the ptmalloc2 code in Open MPI, we've  
<br>
decided that for v1.3, we'll extract that code out into its own  
<br>
library.  Users who need the malloc hooks for InifiniBand support  
<br>
(only a small number of applications really benefit from it) will have  
<br>
to explicitly link in the extra library.  Hopefully, this will resolve  
<br>
some of these headaches.
<br>
<p>Brian
<br>
<p><p><pre>
-- 
   Brian Barrett
   Open MPI developer
   <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5879.php">Dirk Eddelbuettel: "Re: [OMPI users] Crash in _int_malloc via MPI_Init"</a>
<li><strong>Previous message:</strong> <a href="5877.php">Dirk Eddelbuettel: "Re: [OMPI users] Crash in _int_malloc via MPI_Init"</a>
<li><strong>In reply to:</strong> <a href="5877.php">Dirk Eddelbuettel: "Re: [OMPI users] Crash in _int_malloc via MPI_Init"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5879.php">Dirk Eddelbuettel: "Re: [OMPI users] Crash in _int_malloc via MPI_Init"</a>
<li><strong>Reply:</strong> <a href="5879.php">Dirk Eddelbuettel: "Re: [OMPI users] Crash in _int_malloc via MPI_Init"</a>
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

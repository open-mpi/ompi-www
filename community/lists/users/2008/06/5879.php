<?
$subject_val = "Re: [OMPI users] Crash in _int_malloc via MPI_Init";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Jun 15 23:24:03 2008" -->
<!-- isoreceived="20080616032403" -->
<!-- sent="Sun, 15 Jun 2008 22:23:48 -0500" -->
<!-- isosent="20080616032348" -->
<!-- name="Dirk Eddelbuettel" -->
<!-- email="edd_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Crash in _int_malloc via MPI_Init" -->
<!-- id="18517.56516.259793.129059_at_ron.nulle.part" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="A63F9BA4-CF0E-4A7B-900F-89220C6F0ADC_at_open-mpi.org" -->
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
<strong>From:</strong> Dirk Eddelbuettel (<em>edd_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-06-15 23:23:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5880.php">Siegmar Gross: "[OMPI users] wrong results from MPI_Scatter with strided vector"</a>
<li><strong>Previous message:</strong> <a href="5878.php">Brian Barrett: "Re: [OMPI users] Crash in _int_malloc via MPI_Init"</a>
<li><strong>In reply to:</strong> <a href="5878.php">Brian Barrett: "Re: [OMPI users] Crash in _int_malloc via MPI_Init"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 15 June 2008 at 17:11, Brian Barrett wrote:
<br>
| On Jun 15, 2008, at 2:20 PM, Dirk Eddelbuettel wrote:
<br>
| 
<br>
| &gt; Yup: I still suspect compiler / linker changes in Ubuntu between Gutsy
<br>
| &gt; (released Oct 2007) and Hardy (April 2008).
<br>
| &gt;
<br>
| &gt; Why? Because the exactly same source package for Open MPI (as  
<br>
| &gt; maintained by
<br>
| &gt; Manuel and myself for Debian) works for me on Ubuntu Hardy __if I  
<br>
| &gt; compile it
<br>
| &gt; on Ubuntu Gutsy__.
<br>
| &gt;
<br>
| &gt; Now, I reported this to Ubuntu ... for no answer.  Lucas and  
<br>
| &gt; Christoph at
<br>
| &gt; Debian today released a feature allowing us Debian maintainers to  
<br>
| &gt; see which
<br>
| &gt; our packages have bugreports in Ubuntu.  It was only through this  
<br>
| &gt; mechanism
<br>
| &gt; that I learned that the segfault I saw with Rmpi (using Open MPI)  
<br>
| &gt; had been
<br>
| &gt; experienced by someone else, and that a similar bug occurs with  
<br>
| &gt; Python use on
<br>
| &gt; top of Open MPI.
<br>
| &gt;
<br>
| &gt; But still no tangible answer from Canonical / Ubuntu other that some
<br>
| &gt; reshuffling of bug reports titles and numbers.  Very disappointing.
<br>
| &gt;
<br>
| &gt; I am CCing Steffen and Andreas who've seen similar bugs and are  
<br>
| &gt; awaiting
<br>
| &gt; answers too.  I am also CCing Cesare at Ubuntu who did the bug  
<br>
| &gt; rearrangement,
<br>
| &gt; maybe he will find a moment to share their plans with us.
<br>
| 
<br>
| I suppose I'm glad that it doesn't look like an Open MPI problem.  Due  
<br>
<p>Yup. Just heard from the fellow at Ubuntu/Canonical: they broke things via 
<br>
LDFLAGS=&quot;-Wl,-Bsymbolic&quot; which makes Open MPI fall on its face due to the
<br>
three distinct libraries...  Setting LDFLAGS=&quot;&quot; as we do for Debian overcomes
<br>
the problem.
<br>
<p>Cheers, Dirk
<br>
<p><p>| to continual problems with the ptmalloc2 code in Open MPI, we've  
<br>
| decided that for v1.3, we'll extract that code out into its own  
<br>
| library.  Users who need the malloc hooks for InifiniBand support  
<br>
| (only a small number of applications really benefit from it) will have  
<br>
| to explicitly link in the extra library.  Hopefully, this will resolve  
<br>
| some of these headaches.
<br>
<p><pre>
-- 
Three out of two people have difficulties with fractions.
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5880.php">Siegmar Gross: "[OMPI users] wrong results from MPI_Scatter with strided vector"</a>
<li><strong>Previous message:</strong> <a href="5878.php">Brian Barrett: "Re: [OMPI users] Crash in _int_malloc via MPI_Init"</a>
<li><strong>In reply to:</strong> <a href="5878.php">Brian Barrett: "Re: [OMPI users] Crash in _int_malloc via MPI_Init"</a>
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

<?
$subject_val = "Re: [hwloc-devel] [hwloc] #16: hwloc build fails with strict compiler flags";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Oct 21 12:59:11 2009" -->
<!-- isoreceived="20091021165911" -->
<!-- sent="Wed, 21 Oct 2009 12:59:05 -0400" -->
<!-- isosent="20091021165905" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] [hwloc] #16: hwloc build fails with strict compiler flags" -->
<!-- id="0C03258C-2A53-4577-B116-5C2FF4CEC5F7_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="066.acb5d613e77eb9645627d5ee77d89350_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] [hwloc] #16: hwloc build fails with strict compiler flags<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-10-21 12:59:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0210.php">Samuel Thibault: "Re: [hwloc-devel] MPICH2 question"</a>
<li><strong>Previous message:</strong> <a href="0208.php">Jeff Squyres: "Re: [hwloc-devel] MPICH2 question"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0213.php">Pavan Balaji: "Re: [hwloc-devel] [hwloc] #16: hwloc build fails with strict	compiler flags"</a>
<li><strong>Reply:</strong> <a href="0213.php">Pavan Balaji: "Re: [hwloc-devel] [hwloc] #16: hwloc build fails with strict	compiler flags"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Pavan --
<br>
<p>Can you send a copy of your stderr?  I don't get the warnings about  
<br>
fgets output not getting checked.
<br>
<p>Thanks!
<br>
<p><p>On Oct 21, 2009, at 9:39 AM, hwloc wrote:
<br>
<p><span class="quotelev1">&gt; #16: hwloc build fails with strict compiler flags
</span><br>
<span class="quotelev1">&gt; ------------------- 
</span><br>
<span class="quotelev1">&gt; +--------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; Reporter:  balaji  |        Owner:
</span><br>
<span class="quotelev1">&gt;     Type:  defect  |       Status:  closed
</span><br>
<span class="quotelev1">&gt; Priority:  normal  |    Milestone:  v0.9.1
</span><br>
<span class="quotelev1">&gt;  Version:          |   Resolution:  fixed
</span><br>
<span class="quotelev1">&gt; Keywords:          |
</span><br>
<span class="quotelev1">&gt; ------------------- 
</span><br>
<span class="quotelev1">&gt; +--------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Comment(by balaji):
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  The vsnprintf warnings occur because snprintf and vsnprintf are  
</span><br>
<span class="quotelev1">&gt; present
</span><br>
<span class="quotelev1">&gt;  only in C99, not C89. There are a few solutions possible:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  1. Check in configure to (i) add a prototype for snprintf/vsnprintf  
</span><br>
<span class="quotelev1">&gt; where
</span><br>
<span class="quotelev1">&gt;  needed and (ii) add an alternative implementation for them for  
</span><br>
<span class="quotelev1">&gt; platforms
</span><br>
<span class="quotelev1">&gt;  that don't provide them.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  2. An alternative (simpler) solution is to include MPL
</span><br>
<span class="quotelev1">&gt;  (<a href="https://svn.mcs.anl.gov/repos/mpi/mpich2/trunk/src/mpl">https://svn.mcs.anl.gov/repos/mpi/mpich2/trunk/src/mpl</a>) into hwloc  
</span><br>
<span class="quotelev1">&gt; and
</span><br>
<span class="quotelev1">&gt;  just use MPL_snprintf and friends everywhere.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  3. Check if snprintf/vsnprintf exist in configure and abort if they  
</span><br>
<span class="quotelev1">&gt; don't.
</span><br>
<span class="quotelev1">&gt;  Other libraries relying on hwloc can see this error and not build  
</span><br>
<span class="quotelev1">&gt; hwloc in
</span><br>
<span class="quotelev1">&gt;  those cases.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Not sure if either approach is acceptable for you guys, so I'm  
</span><br>
<span class="quotelev1">&gt; leaving
</span><br>
<span class="quotelev1">&gt;  this ticket as closed. Please reopen if appropriate.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Btw, there are some other warnings too because the return values of  
</span><br>
<span class="quotelev1">&gt; fgets
</span><br>
<span class="quotelev1">&gt;  and fscanf are not checked. But those are relatively minor, IMHO.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Ticket URL: &lt;<a href="https://svn.open-mpi.org/trac/hwloc/ticket/16#comment:3">https://svn.open-mpi.org/trac/hwloc/ticket/16#comment:3</a>&gt;
</span><br>
<span class="quotelev1">&gt; hwloc &lt;<a href="http://www.open-mpi.org/projects/hwloc/">http://www.open-mpi.org/projects/hwloc/</a>&gt;
</span><br>
<span class="quotelev1">&gt; Portable hardware locality
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0210.php">Samuel Thibault: "Re: [hwloc-devel] MPICH2 question"</a>
<li><strong>Previous message:</strong> <a href="0208.php">Jeff Squyres: "Re: [hwloc-devel] MPICH2 question"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0213.php">Pavan Balaji: "Re: [hwloc-devel] [hwloc] #16: hwloc build fails with strict	compiler flags"</a>
<li><strong>Reply:</strong> <a href="0213.php">Pavan Balaji: "Re: [hwloc-devel] [hwloc] #16: hwloc build fails with strict	compiler flags"</a>
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

<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Sep 23 10:35:21 2005" -->
<!-- isoreceived="20050923153521" -->
<!-- sent="Fri, 23 Sep 2005 11:35:14 -0400" -->
<!-- isosent="20050923153514" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re:  mpif.h problems" -->
<!-- id="159d76da712fed6dc74d3ca9dc28aefc_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20050921193722.GP16065_at_duckhorn.lanl.gov" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2005-09-23 10:35:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0401.php">George Bosilca: "Re:  mca selection"</a>
<li><strong>Previous message:</strong> <a href="0399.php">Jeff Squyres: "using MPI_Alloc_mem"</a>
<li><strong>In reply to:</strong> <a href="0390.php">David R. (Chip) Kent IV: "mpif.h problems"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0403.php">George Bosilca: "mpi.h and mpif.h"</a>
<li><strong>Reply:</strong> <a href="0403.php">George Bosilca: "mpi.h and mpif.h"</a>
<li><strong>Reply:</strong> <a href="0408.php">David R. (Chip) Kent IV: "Re:  mpif.h problems"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Sep 21, 2005, at 3:37 PM, David R. (Chip) Kent IV wrote:
<br>
<p><span class="quotelev1">&gt; I managed to find a number of problems with the mpif.h when I tried it 
</span><br>
<span class="quotelev1">&gt; on
</span><br>
<span class="quotelev1">&gt; a big application.  It looks like a lot of key constants are not 
</span><br>
<span class="quotelev1">&gt; defined
</span><br>
<span class="quotelev1">&gt; in this file.  So far, MPI_SEEK_SET, MPI_MODE_CREATE, MPI_MODE_WRONLY
</span><br>
<span class="quotelev1">&gt; have broken the build.  I've added them to mpif.h as I find them so 
</span><br>
<span class="quotelev1">&gt; that
</span><br>
<span class="quotelev1">&gt; I can get the build to go, but I assume there are many more values 
</span><br>
<span class="quotelev1">&gt; still
</span><br>
<span class="quotelev1">&gt; missing.
</span><br>
<p>(sorry I didn't reply earlier; was traveling with limited connectivity 
<br>
when you sent this)
<br>
<p>Yoinks.  Looks like we forgot to add the MPI-2 IO constants into 
<br>
mpif.h; thanks for finding this.
<br>
<p>I'll go add them and take a swipe through the file to see if I can find 
<br>
any others that we're missing.  Did you find any others that are 
<br>
missing?
<br>
<p><pre>
-- 
{+} Jeff Squyres
{+} The Open MPI Project
{+} <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0401.php">George Bosilca: "Re:  mca selection"</a>
<li><strong>Previous message:</strong> <a href="0399.php">Jeff Squyres: "using MPI_Alloc_mem"</a>
<li><strong>In reply to:</strong> <a href="0390.php">David R. (Chip) Kent IV: "mpif.h problems"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0403.php">George Bosilca: "mpi.h and mpif.h"</a>
<li><strong>Reply:</strong> <a href="0403.php">George Bosilca: "mpi.h and mpif.h"</a>
<li><strong>Reply:</strong> <a href="0408.php">David R. (Chip) Kent IV: "Re:  mpif.h problems"</a>
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

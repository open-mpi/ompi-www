<?
$subject_val = "Re: [OMPI users] Prototypes for Fortran MPI_ commands using 64-bit	indexing";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Oct 31 17:05:38 2013" -->
<!-- isoreceived="20131031210538" -->
<!-- sent="Thu, 31 Oct 2013 21:05:37 +0000" -->
<!-- isosent="20131031210537" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Prototypes for Fortran MPI_ commands using 64-bit	indexing" -->
<!-- id="EF66BBEB19BADC41AC8CCF5F684F07FC4F9A11C3_at_xmb-rcd-x01.cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CAEGKUyyLX03fkD5D2xiYp90Mp10s+A4cP2iBy3Ze4vVyhSgqBg_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Prototypes for Fortran MPI_ commands using 64-bit	indexing<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-10-31 17:05:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22890.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Prototypes for Fortran MPI_ commands using 64-bit	indexing"</a>
<li><strong>Previous message:</strong> <a href="22888.php">Jim Parker: "Re: [OMPI users] Prototypes for Fortran MPI_ commands using 64-bit indexing"</a>
<li><strong>In reply to:</strong> <a href="22882.php">Jim Parker: "[OMPI users] Fwd: Prototypes for Fortran MPI_ commands using 64-bit indexing"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22891.php">Jeff Hammond: "Re: [OMPI users] Prototypes for Fortran MPI_ commands using 64-bit indexing"</a>
<li><strong>Reply:</strong> <a href="22891.php">Jeff Hammond: "Re: [OMPI users] Prototypes for Fortran MPI_ commands using 64-bit indexing"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Oct 30, 2013, at 11:55 PM, Jim Parker &lt;jimparker96313_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Perhaps I should start with the most pressing issue for me.  I need 64-bit indexing 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; @Martin,
</span><br>
<span class="quotelev1">&gt;    you indicated that even if I get this up and running, the MPI library still uses signed 32-bit ints to count (your term), or index (my term) the recvbuffer lengths.  More concretely,
</span><br>
<span class="quotelev1">&gt; in a call to MPI_Allgatherv( buffer, count, MPI_Integer, recvbuf, recv-count, displ, MPI_integer, MPI_COMM_WORLD, status, mpierr): count, recvcounts, and displs must be  32-bit integers, not 64-bit.  Actually, all I need is displs to hold 64-bit values...
</span><br>
<span class="quotelev1">&gt; If this is true, then compiling OpenMPI this way is not a solution.  I'll have to restructure my code to collect 31-bit chunks...
</span><br>
<span class="quotelev1">&gt; Not that it matters, but I'm not using DIRAC, but a custom code to compute circuit analyses.
</span><br>
<p>Yes, that is correct -- the MPI specification makes us use C &quot;int&quot; for outer level count specifications.  We do use larger than that internally, though.
<br>
<p>The common workaround for this is to make your own MPI datatype -- perhaps an MPI_TYPE_VECTOR -- that strings together N contiguous datatypes, and then send M of those.
<br>
<p>For example, say you need to send 8B (billion) contiguous INTEGERs.  You obviously can't represent 8B with a C int (or a 4 byte Fortran INTEGER).  So what you would do is something like this (forgive me -- I'm a C guy):
<br>
<p>-----
<br>
int my_buffer[8 billion];
<br>
MPI_Datatype my_type;
<br>
// This makes a datatype of 8 contiguous int's
<br>
MPI_Type_vector(1, 8, 0, MPI_INT, &amp;my_type);
<br>
MPI_Type_commit(&amp;my_type);
<br>
MPI_Send(my_buffer, 1048576, my_type, ...);
<br>
-----
<br>
<p>This basically sends 1B types that are 8 int's long, and is therefore an 8B int message.
<br>
<p>Make sense?
<br>
<p><span class="quotelev1">&gt; @Jeff,
</span><br>
<span class="quotelev1">&gt;   Interesting, your runtime behavior has a different error than mine.  You have problems with the passed variable tempInt, which would make sense for the reasons you gave.  However, my problem involves the fact that the local variable &quot;rank&quot; gets overwritten by a memory corruption after MPI_RECV is called.
</span><br>
<p>Odd.  :-\
<br>
<p><span class="quotelev1">&gt; Re: config.log. I will try to have the admin guy recompile tomorrow and see if I can get the log for you.  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; BTW, I'm using the gcc 4.7.2 compiler suite on a Rocks 5.4 HPC cluster.  I use the options -m64 and -fdefault-integer-8
</span><br>
<p>Ok.  I was using icc/ifort with -m64 and -i8.
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22890.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Prototypes for Fortran MPI_ commands using 64-bit	indexing"</a>
<li><strong>Previous message:</strong> <a href="22888.php">Jim Parker: "Re: [OMPI users] Prototypes for Fortran MPI_ commands using 64-bit indexing"</a>
<li><strong>In reply to:</strong> <a href="22882.php">Jim Parker: "[OMPI users] Fwd: Prototypes for Fortran MPI_ commands using 64-bit indexing"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22891.php">Jeff Hammond: "Re: [OMPI users] Prototypes for Fortran MPI_ commands using 64-bit indexing"</a>
<li><strong>Reply:</strong> <a href="22891.php">Jeff Hammond: "Re: [OMPI users] Prototypes for Fortran MPI_ commands using 64-bit indexing"</a>
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

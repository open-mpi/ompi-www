<?
$subject_val = "Re: [OMPI users] Newbie needs help! MPI_Wait/MPI_Start/MPI_Issend";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Feb  1 06:26:44 2009" -->
<!-- isoreceived="20090201112644" -->
<!-- sent="Sun, 1 Feb 2009 06:26:36 -0500" -->
<!-- isosent="20090201112636" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Newbie needs help! MPI_Wait/MPI_Start/MPI_Issend" -->
<!-- id="583320A8-DA09-4631-8C5A-F5065798B8DC_at_cisco.com" -->
<!-- charset="WINDOWS-1252" -->
<!-- inreplyto="01B49D24DCA6104D925B3BCAC891D08C118C94_at_XMBTX133.northgrum.com" -->
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
<strong>Date:</strong> 2009-02-01 06:26:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7909.php">Jeff Squyres: "Re: [OMPI users] Question about compatibility issues"</a>
<li><strong>Previous message:</strong> <a href="../../2009/01/7907.php">Jack Bryan: "[OMPI users] Open mpi 123 install error for BLACS"</a>
<li><strong>In reply to:</strong> <a href="../../2009/01/7844.php">Hartzman, Leslie D (MS): "Re: [OMPI users] Newbie needs help! MPI_Wait/MPI_Start/MPI_Issend"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jan 26, 2009, at 4:04 PM, Hartzman, Leslie D (MS) wrote:
<br>
<p><span class="quotelev1">&gt;         Process 'A'
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ---------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Initialize requests to MPI_REQUEST_NULL
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; for i=0; i &lt; n; i++
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         if (rank == 0)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         {
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                 initialize 'command' structure
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                         (set cmd = 'step 1')
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                 set destination to Process 'B'
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                 mpi_issend(command, sizeof(struct command),  
</span><br>
<span class="quotelev1">&gt; dest, ...);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         send data to be processed by Process 'B'
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                 mpi_issend(data, numWords, MPI_FLOAT, ...);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         if (rank == 0)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         {
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                 mpi_wait(command request for 'step 1' command);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                 sending new command, set cmd = 'step 2',  
</span><br>
<span class="quotelev1">&gt; mpi_issend(...)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         send data to be processed by Process 'B'
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                 mpi_issend(data, ...);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         mpi_wait(command request for &#145;step n&#146;);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>I'm not quite sure I understand this pseudocode; it looks like there's  
<br>
a missing MPI_Wait in there...?  Specifically, I count 3 MPI_ISSEND's  
<br>
and 2 MPI_WAIT's.
<br>
<p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7909.php">Jeff Squyres: "Re: [OMPI users] Question about compatibility issues"</a>
<li><strong>Previous message:</strong> <a href="../../2009/01/7907.php">Jack Bryan: "[OMPI users] Open mpi 123 install error for BLACS"</a>
<li><strong>In reply to:</strong> <a href="../../2009/01/7844.php">Hartzman, Leslie D (MS): "Re: [OMPI users] Newbie needs help! MPI_Wait/MPI_Start/MPI_Issend"</a>
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

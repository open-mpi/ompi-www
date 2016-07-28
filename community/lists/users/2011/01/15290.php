<?
$subject_val = "Re: [OMPI users] MPI_ERR_INTERN with MPI_Accumulate using MPI_REPLACE";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan  6 16:19:54 2011" -->
<!-- isoreceived="20110106211954" -->
<!-- sent="Thu, 6 Jan 2011 16:19:49 -0500" -->
<!-- isosent="20110106211949" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_ERR_INTERN with MPI_Accumulate using MPI_REPLACE" -->
<!-- id="5DAAFF5C-36B5-4A1E-96CD-499F1DDA16D3_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="alpine.LRH.2.00.1101061555060.5288_at_flowerpot.osl.iu.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI_ERR_INTERN with MPI_Accumulate using MPI_REPLACE<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-01-06 16:19:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15291.php">Tom Rosmond: "Re: [OMPI users] questions about MPI-IO"</a>
<li><strong>Previous message:</strong> <a href="15289.php">Jeff Squyres: "Re: [OMPI users] Running OpenMPI on SGI Altix with 4096 cores	:	very poor performance"</a>
<li><strong>In reply to:</strong> <a href="15287.php">Jeremiah Willcock: "[OMPI users] MPI_ERR_INTERN with MPI_Accumulate using MPI_REPLACE"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15292.php">Barrett, Brian W: "Re: [OMPI users] MPI_ERR_INTERN with MPI_Accumulate using MPI_REPLACE"</a>
<li><strong>Reply:</strong> <a href="15292.php">Barrett, Brian W: "Re: [OMPI users] MPI_ERR_INTERN with MPI_Accumulate using MPI_REPLACE"</a>
<li><strong>Reply:</strong> <a href="15293.php">Jeremiah Willcock: "Re: [OMPI users] MPI_ERR_INTERN with MPI_Accumulate using MPI_REPLACE"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeremiah --
<br>
<p>Is this the same as:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;<a href="https://svn.open-mpi.org/trac/ompi/ticket/2656">https://svn.open-mpi.org/trac/ompi/ticket/2656</a>
<br>
<p><p>On Jan 6, 2011, at 3:58 PM, Jeremiah Willcock wrote:
<br>
<p><span class="quotelev1">&gt; When I run the following program on one rank using Open MPI 1.5:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #include &lt;mpi.h&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;stdlib.h&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;string.h&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; int main(int argc, char** argv) {
</span><br>
<span class="quotelev1">&gt;  int size = 128;
</span><br>
<span class="quotelev1">&gt;  unsigned char one = 1;
</span><br>
<span class="quotelev1">&gt;  MPI_Init(&amp;argc, &amp;argv);
</span><br>
<span class="quotelev1">&gt;  unsigned char* data = (unsigned char*)malloc(size * sizeof(unsigned char));
</span><br>
<span class="quotelev1">&gt;  memset(data, 0, size * sizeof(unsigned char));
</span><br>
<span class="quotelev1">&gt;  MPI_Win data_win;
</span><br>
<span class="quotelev1">&gt;  MPI_Win_create((void*)data, size * sizeof(unsigned char), sizeof(unsigned char), MPI_INFO_NULL, MPI_COMM_WORLD, &amp;data_win);
</span><br>
<span class="quotelev1">&gt;  MPI_Win_fence(0, data_win);
</span><br>
<span class="quotelev1">&gt;  MPI_Accumulate((void*)&amp;one, 1, MPI_UNSIGNED_CHAR, 0, 0, 1, MPI_UNSIGNED_CHAR, MPI_REPLACE, data_win);
</span><br>
<span class="quotelev1">&gt;  MPI_Win_fence(0, data_win);
</span><br>
<span class="quotelev1">&gt;  MPI_Win_free(&amp;data_win);
</span><br>
<span class="quotelev1">&gt;  free(data);
</span><br>
<span class="quotelev1">&gt;  MPI_Finalize();
</span><br>
<span class="quotelev1">&gt;  return 0;
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I receive the following error message:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [flowerpot.osl.iu.edu:13803] *** An error occurred in MPI_Accumlate
</span><br>
<span class="quotelev1">&gt; [flowerpot.osl.iu.edu:13803] *** on win 3
</span><br>
<span class="quotelev1">&gt; [flowerpot.osl.iu.edu:13803] *** MPI_ERR_INTERN: internal error
</span><br>
<span class="quotelev1">&gt; [flowerpot.osl.iu.edu:13803] *** MPI_ERRORS_ARE_FATAL (your MPI job will now abort)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am running on 64-bit x86 Linux.  The code is sensitive to the value of &quot;size&quot; (smaller values such as 64 do not cause errors).  Is this an issue that is fixed in OMPI 1.5.1?  Is it known otherwise?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- Jeremiah Willcock
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><pre>
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
<li><strong>Next message:</strong> <a href="15291.php">Tom Rosmond: "Re: [OMPI users] questions about MPI-IO"</a>
<li><strong>Previous message:</strong> <a href="15289.php">Jeff Squyres: "Re: [OMPI users] Running OpenMPI on SGI Altix with 4096 cores	:	very poor performance"</a>
<li><strong>In reply to:</strong> <a href="15287.php">Jeremiah Willcock: "[OMPI users] MPI_ERR_INTERN with MPI_Accumulate using MPI_REPLACE"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15292.php">Barrett, Brian W: "Re: [OMPI users] MPI_ERR_INTERN with MPI_Accumulate using MPI_REPLACE"</a>
<li><strong>Reply:</strong> <a href="15292.php">Barrett, Brian W: "Re: [OMPI users] MPI_ERR_INTERN with MPI_Accumulate using MPI_REPLACE"</a>
<li><strong>Reply:</strong> <a href="15293.php">Jeremiah Willcock: "Re: [OMPI users] MPI_ERR_INTERN with MPI_Accumulate using MPI_REPLACE"</a>
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

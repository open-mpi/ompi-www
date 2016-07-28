<?
$subject_val = "[OMPI users] MPI_ERR_INTERN with MPI_Accumulate using MPI_REPLACE";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan  6 15:58:34 2011" -->
<!-- isoreceived="20110106205834" -->
<!-- sent="Thu, 6 Jan 2011 15:58:32 -0500 (EST)" -->
<!-- isosent="20110106205832" -->
<!-- name="Jeremiah Willcock" -->
<!-- email="jewillco_at_[hidden]" -->
<!-- subject="[OMPI users] MPI_ERR_INTERN with MPI_Accumulate using MPI_REPLACE" -->
<!-- id="alpine.LRH.2.00.1101061555060.5288_at_flowerpot.osl.iu.edu" -->
<!-- charset="US-ASCII" -->
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
<strong>Subject:</strong> [OMPI users] MPI_ERR_INTERN with MPI_Accumulate using MPI_REPLACE<br>
<strong>From:</strong> Jeremiah Willcock (<em>jewillco_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-01-06 15:58:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15288.php">Gilbert Grosdidier: "Re: [OMPI users] Running OpenMPI on SGI Altix with 4096 cores	:	very poor performance"</a>
<li><strong>Previous message:</strong> <a href="15286.php">Rob Latham: "Re: [OMPI users] questions about MPI-IO"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15290.php">Jeff Squyres: "Re: [OMPI users] MPI_ERR_INTERN with MPI_Accumulate using MPI_REPLACE"</a>
<li><strong>Reply:</strong> <a href="15290.php">Jeff Squyres: "Re: [OMPI users] MPI_ERR_INTERN with MPI_Accumulate using MPI_REPLACE"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
When I run the following program on one rank using Open MPI 1.5:
<br>
<p>#include &lt;mpi.h&gt;
<br>
#include &lt;stdlib.h&gt;
<br>
#include &lt;string.h&gt;
<br>
<p>int main(int argc, char** argv) {
<br>
&nbsp;&nbsp;&nbsp;int size = 128;
<br>
&nbsp;&nbsp;&nbsp;unsigned char one = 1;
<br>
&nbsp;&nbsp;&nbsp;MPI_Init(&amp;argc, &amp;argv);
<br>
&nbsp;&nbsp;&nbsp;unsigned char* data = (unsigned char*)malloc(size * sizeof(unsigned char));
<br>
&nbsp;&nbsp;&nbsp;memset(data, 0, size * sizeof(unsigned char));
<br>
&nbsp;&nbsp;&nbsp;MPI_Win data_win;
<br>
&nbsp;&nbsp;&nbsp;MPI_Win_create((void*)data, size * sizeof(unsigned char), sizeof(unsigned char), MPI_INFO_NULL, MPI_COMM_WORLD, &amp;data_win);
<br>
&nbsp;&nbsp;&nbsp;MPI_Win_fence(0, data_win);
<br>
&nbsp;&nbsp;&nbsp;MPI_Accumulate((void*)&amp;one, 1, MPI_UNSIGNED_CHAR, 0, 0, 1, MPI_UNSIGNED_CHAR, MPI_REPLACE, data_win);
<br>
&nbsp;&nbsp;&nbsp;MPI_Win_fence(0, data_win);
<br>
&nbsp;&nbsp;&nbsp;MPI_Win_free(&amp;data_win);
<br>
&nbsp;&nbsp;&nbsp;free(data);
<br>
&nbsp;&nbsp;&nbsp;MPI_Finalize();
<br>
&nbsp;&nbsp;&nbsp;return 0;
<br>
}
<br>
<p>I receive the following error message:
<br>
<p>[flowerpot.osl.iu.edu:13803] *** An error occurred in MPI_Accumlate
<br>
[flowerpot.osl.iu.edu:13803] *** on win 3
<br>
[flowerpot.osl.iu.edu:13803] *** MPI_ERR_INTERN: internal error
<br>
[flowerpot.osl.iu.edu:13803] *** MPI_ERRORS_ARE_FATAL (your MPI job will 
<br>
now abort)
<br>
<p>I am running on 64-bit x86 Linux.  The code is sensitive to the value of 
<br>
&quot;size&quot; (smaller values such as 64 do not cause errors).  Is this an issue 
<br>
that is fixed in OMPI 1.5.1?  Is it known otherwise?
<br>
<p>-- Jeremiah Willcock
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15288.php">Gilbert Grosdidier: "Re: [OMPI users] Running OpenMPI on SGI Altix with 4096 cores	:	very poor performance"</a>
<li><strong>Previous message:</strong> <a href="15286.php">Rob Latham: "Re: [OMPI users] questions about MPI-IO"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15290.php">Jeff Squyres: "Re: [OMPI users] MPI_ERR_INTERN with MPI_Accumulate using MPI_REPLACE"</a>
<li><strong>Reply:</strong> <a href="15290.php">Jeff Squyres: "Re: [OMPI users] MPI_ERR_INTERN with MPI_Accumulate using MPI_REPLACE"</a>
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

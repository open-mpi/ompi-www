<?
$subject_val = "Re: [OMPI users] MPI_PROC_NULL";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb 12 19:18:57 2009" -->
<!-- isoreceived="20090213001857" -->
<!-- sent="Thu, 12 Feb 2009 16:18:52 -0800" -->
<!-- isosent="20090213001852" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_PROC_NULL" -->
<!-- id="C5ACDDE5-133E-4775-9F1C-54CD60485097_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="9b0da5ce0902121400y7aadda3eo4bdd20056513cefe_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI_PROC_NULL<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-02-12 19:18:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8051.php">Ramya Narasimhan: "[OMPI users] mpirun takes only single processor instead of multiple processors"</a>
<li><strong>Previous message:</strong> <a href="8049.php">Rainer Keller: "Re: [OMPI users] OpenMPI and Valgrind"</a>
<li><strong>In reply to:</strong> <a href="8048.php">jody: "[OMPI users] MPI_PROC_NULL"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8058.php">jody: "Re: [OMPI users] MPI_PROC_NULL"</a>
<li><strong>Reply:</strong> <a href="8058.php">jody: "Re: [OMPI users] MPI_PROC_NULL"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Feb 12, 2009, at 2:00 PM, jody wrote:
<br>
<p><span class="quotelev1">&gt; In my application i use MPI_PROC_NULL
</span><br>
<span class="quotelev1">&gt; as an argument in MPI_Sendrecv to simplify the
</span><br>
<span class="quotelev1">&gt; program (i.e. no special cases for borders)
</span><br>
<span class="quotelev1">&gt; With 1.3 it works, but under 1.3.1a0r20520
</span><br>
<span class="quotelev1">&gt; i get the following error:
</span><br>
<span class="quotelev1">&gt; [jody_at_localhost 3D]$ mpirun -np 2 ./sr
</span><br>
<span class="quotelev1">&gt; [localhost.localdomain:29253] *** An error occurred in MPI_Sendrecv
</span><br>
<span class="quotelev1">&gt; [localhost.localdomain:29253] *** on communicator MPI_COMM_WORLD
</span><br>
<span class="quotelev1">&gt; [localhost.localdomain:29253] *** MPI_ERR_RANK: invalid rank
</span><br>
<span class="quotelev1">&gt; [localhost.localdomain:29253] *** MPI_ERRORS_ARE_FATAL (goodbye)
</span><br>
<span class="quotelev1">&gt; [localhost.localdomain:29252] *** An error occurred in MPI_Sendrecv
</span><br>
<span class="quotelev1">&gt; [localhost.localdomain:29252] *** on communicator MPI_COMM_WORLD
</span><br>
<span class="quotelev1">&gt; [localhost.localdomain:29252] *** MPI_ERR_RANK: invalid rank
</span><br>
<span class="quotelev1">&gt; [localhost.localdomain:29252] *** MPI_ERRORS_ARE_FATAL (goodbye)
</span><br>
<p>Your program as written should hang, right?  You're trying to receive  
<br>
from MCW rank 1 and no process is sending.
<br>
<p>I slightly modified your code:
<br>
<p>#include &lt;stdio.h&gt;
<br>
#include &quot;mpi.h&quot;
<br>
<p>int main() {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int iRank;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int iSize;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Status st;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Init(NULL, NULL);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Comm_size(MPI_COMM_WORLD, &amp;iSize);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Comm_rank(MPI_COMM_WORLD, &amp;iRank);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (1 == iRank) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Send(&amp;iSize, 1, MPI_INT, 0, 77, MPI_COMM_WORLD);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;} else if (0 == iRank) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Sendrecv(&amp;iRank, 1, MPI_INT, MPI_PROC_NULL, 77,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&amp;iSize, 1, MPI_INT, 1, 77, MPI_COMM_WORLD, &amp;st);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Finalize();
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return 0;
<br>
}
<br>
<p>And that works fine for me at the head of the v1.3 branch:
<br>
<p>[16:17] svbu-mpi:~/svn/ompi-1.3 % svnversion .
<br>
20538
<br>
<p>We did have a few bad commits on the v1.3 branch recently; could you  
<br>
try with a tarball from tonight, perchance?
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
<li><strong>Next message:</strong> <a href="8051.php">Ramya Narasimhan: "[OMPI users] mpirun takes only single processor instead of multiple processors"</a>
<li><strong>Previous message:</strong> <a href="8049.php">Rainer Keller: "Re: [OMPI users] OpenMPI and Valgrind"</a>
<li><strong>In reply to:</strong> <a href="8048.php">jody: "[OMPI users] MPI_PROC_NULL"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8058.php">jody: "Re: [OMPI users] MPI_PROC_NULL"</a>
<li><strong>Reply:</strong> <a href="8058.php">jody: "Re: [OMPI users] MPI_PROC_NULL"</a>
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

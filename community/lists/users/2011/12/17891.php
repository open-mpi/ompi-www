<?
$subject_val = "[OMPI users] MPI_Comm_spawn problem";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Dec  5 15:28:05 2011" -->
<!-- isoreceived="20111205202805" -->
<!-- sent="Mon, 5 Dec 2011 18:27:39 -0200" -->
<!-- isosent="20111205202739" -->
<!-- name="Fernanda Oliveira" -->
<!-- email="nandagooliveira_at_[hidden]" -->
<!-- subject="[OMPI users] MPI_Comm_spawn problem" -->
<!-- id="CAASfj3SG2N-mOjrdrojyh1Jo-rx+tS0EWcBvvpo1rgdG2nm1oA_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] MPI_Comm_spawn problem<br>
<strong>From:</strong> Fernanda Oliveira (<em>nandagooliveira_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-12-05 15:27:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17892.php">bhimesh akula: "[OMPI users] OSU_latency_mt is failing"</a>
<li><strong>Previous message:</strong> <a href="17890.php">Bogdan Costescu: "Re: [OMPI users] Qlogic &amp; openmpi"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I'm working with MPI_Comm_spawn and I have some error messages.
<br>
<p>The code is relatively simple:
<br>
<p>#include &lt;stdio.h&gt;
<br>
#include &lt;stdlib.h&gt;
<br>
#include &lt;string.h&gt;
<br>
#include &lt;math.h&gt;
<br>
#include &lt;mpi.h&gt;
<br>
<p>int main(int argc, char ** argv){
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int i;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int rank, size, child_rank;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;char nomehost[20];
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Comm parent, intercomm1, intercomm2;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int erro;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int level, curr_level;
<br>
<p><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Init(&amp;argc, &amp;argv);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;level = atoi(argv[1]);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Comm_get_parent(&amp;parent);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(parent == MPI_COMM_NULL){
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;rank=0;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;else{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Recv(&amp;rank, 1, MPI_INT, 0, 0, parent, MPI_STATUS_IGNORE);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;curr_level = (int) log2(rank+1);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot; --&gt; rank: %d and curr_level: %d\n&quot;, rank, curr_level);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;// Node propagation
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(curr_level &lt; level){
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;// 2^(curr_level+1) - 1 + 2*(rank - 2^curr_level - 1)
<br>
= 2*rank + 1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;child_rank = 2*rank + 1;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot;(%d) Before create rank %d\n&quot;, rank, child_rank);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Comm_spawn(argv[0], &amp;argv[1], 1, MPI_INFO_NULL, 0,
<br>
MPI_COMM_SELF, &amp;intercomm1, &amp;erro);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot;(%d) After create rank %d\n&quot;, rank, child_rank);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Send(&amp;child_rank, 1, MPI_INT, 0, 0, intercomm1);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;//sleep(1);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;child_rank = child_rank + 1;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot;(%d) Before create rank %d\n&quot;, rank, child_rank);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Comm_spawn(argv[0], &amp;argv[1], 1, MPI_INFO_NULL, 0,
<br>
MPI_COMM_SELF, &amp;intercomm2, &amp;erro);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot;(%d) After create rank %d\n&quot;, rank, child_rank);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Send(&amp;child_rank, 1, MPI_INT, 0, 0, intercomm2);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;gethostname(nomehost, 20);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot;(%d) in %s\n&quot;, rank, nomehost);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Finalize();
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return(0);
<br>
<p>}
<br>
<p>The program will create a binary tree of process until get a specific
<br>
level determined by the variable &quot;level&quot;. If the level is 2, the tree
<br>
will be:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/     \
<br>
&nbsp;&nbsp;(1)       (2)
<br>
&nbsp;&nbsp;/  \       /  \
<br>
(3) (4)  (5) (6)
<br>
<p>Error messages are (when a use 1 host):
<br>
<p>Compiling: mpicc test.c -o test -lm
<br>
Running: mpirun -np 1 ./test 3
<br>
<p>&nbsp;--&gt; rank: 0 and curr_level: 0
<br>
(0) Before create rank 1
<br>
(0) After create rank 1
<br>
(0) Before create rank 2
<br>
&nbsp;--&gt; rank: 1 and curr_level: 1
<br>
(1) Before create rank 3
<br>
[cacau.ic.uff.br:17892] [[31928,0],0] ORTE_ERROR_LOG: Not found in
<br>
file base/plm_base_launch_support.c at line 75
<br>
<p>When I use 2 hosts, error is worst. The code is similar to the writing
<br>
here (I have to set hosts before spawn by MPI_Info_set).
<br>
Using MPILAM, program runs normally.
<br>
<p>I think something wrong occurs when I try to use 2 MPI_Comm_spawn
<br>
consecutively and children processes spawn another processes too.
<br>
Seems to be a race condition because the error does not always happen
<br>
(when the level is 2, for example). Using 3 levels or more, error is
<br>
recurrent.
<br>
<p>Similar error has been previously posted in another thread:
<br>
<a href="http://www.open-mpi.org/community/lists/users/2009/12/11601.php">http://www.open-mpi.org/community/lists/users/2009/12/11601.php</a>
<br>
However, I used the stable version 1.4.4 and this problem still happens.
<br>
Developers think of to fix it?
<br>
<p>Thanks,
<br>
Fernanda
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17892.php">bhimesh akula: "[OMPI users] OSU_latency_mt is failing"</a>
<li><strong>Previous message:</strong> <a href="17890.php">Bogdan Costescu: "Re: [OMPI users] Qlogic &amp; openmpi"</a>
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

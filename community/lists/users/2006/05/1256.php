<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue May 23 08:56:26 2006" -->
<!-- isoreceived="20060523125626" -->
<!-- sent="Tue, 23 May 2006 14:56:19 +0200" -->
<!-- isosent="20060523125619" -->
<!-- name="Mykael BOUQUEY" -->
<!-- email="mickael.bouquey_at_[hidden]" -->
<!-- subject="[OMPI users] mca_btl_sm_send: write fifo failed: errno=9" -->
<!-- id="44730673.1070303_at_fr.thalesgroup.com" -->
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
<strong>From:</strong> Mykael BOUQUEY (<em>mickael.bouquey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-05-23 08:56:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1257.php">Luigi Paioro: "[OMPI users] Python, Perl and Java bindings"</a>
<li><strong>Previous message:</strong> <a href="1255.php">Mahesh Barve: "[OMPI users] Help regarding send/recv code"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1260.php">Brian Barrett: "Re: [OMPI users] mca_btl_sm_send: write fifo failed: errno=9"</a>
<li><strong>Reply:</strong> <a href="1260.php">Brian Barrett: "Re: [OMPI users] mca_btl_sm_send: write fifo failed: errno=9"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>I have written this short program
<br>
<p>#include &lt;mpi.h&gt;
<br>
#include &lt;stdio.h&gt;
<br>
#include &lt;sys/utsname.h&gt;
<br>
<p>int main(int argc, char **argv){
<br>
&nbsp;int i, myid, numprocs;
<br>
&nbsp;struct utsname name;
<br>
&nbsp;MPI_Status status;
<br>
<p>&nbsp;MPI_Init(&amp;argc, &amp;argv);
<br>
&nbsp;MPI_Comm_size(MPI_COMM_WORLD, &amp;numprocs);
<br>
&nbsp;MPI_Comm_rank(MPI_COMM_WORLD, &amp;myid);
<br>
<p>&nbsp;uname(&amp;name);
<br>
&nbsp;printf(&quot;Je suis %d/%d on %s\n&quot;, myid, numprocs, name.nodename);
<br>
<p>&nbsp;if (myid == 0){
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;buf[0]='i';
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Send(buf,1,MPI_INT,1,0,MPI_COMM_WORLD);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;fprintf(stderr,&quot;Tour %d : Envoye '%c' vers 1\n&quot;, i, buf[0]);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;else{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Recv(buf,1,MPI_INT,0,0,MPI_COMM_WORLD,&amp;status);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;fprintf(stderr,&quot;Tour %d : Recu '%c' de 0\n&quot;, i, buf[0]);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;MPI_Finalize();
<br>
&nbsp;return 0;
<br>
}
<br>
<p>I compile with : mpicc pingpong.c -o pingpong
<br>
And when i try to launch it with : mpiexec -n 2 pingpong
<br>
I have this :
<br>
Je suis 0/2 on xpscp117892.tasfr.thales
<br>
Je suis 1/2 on xpscp117892.tasfr.thales
<br>
[xpscp117892.tasfr.thales:08216] mca_btl_sm_send: write fifo failed: 
<br>
errno=9
<br>
Tour 4130968 : Envoye 'i' vers 1
<br>
Tour 4716696 : Recu 'i' de 0
<br>
<p>And I don't understant why I have an error &quot;mca_btl........&quot;
<br>
PS: I'm working with only one PC
<br>
<p>Thanks
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1257.php">Luigi Paioro: "[OMPI users] Python, Perl and Java bindings"</a>
<li><strong>Previous message:</strong> <a href="1255.php">Mahesh Barve: "[OMPI users] Help regarding send/recv code"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1260.php">Brian Barrett: "Re: [OMPI users] mca_btl_sm_send: write fifo failed: errno=9"</a>
<li><strong>Reply:</strong> <a href="1260.php">Brian Barrett: "Re: [OMPI users] mca_btl_sm_send: write fifo failed: errno=9"</a>
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

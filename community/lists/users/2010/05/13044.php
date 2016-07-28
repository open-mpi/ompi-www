<?
$subject_val = "[OMPI users] GM + OpenMPI bug ...";
include("../../include/msg-header.inc");
?>
<!-- received="Fri May 14 02:28:41 2010" -->
<!-- isoreceived="20100514062841" -->
<!-- sent="Wed, 12 May 2010 22:57:25 +0200" -->
<!-- isosent="20100512205725" -->
<!-- name="Jos&#233; Ignacio Aliaga Estell&#233;s" -->
<!-- email="aliaga_at_[hidden]" -->
<!-- subject="[OMPI users] GM + OpenMPI bug ..." -->
<!-- id="B11B05CE-B12E-4E08-86D2-CE40B554AA7C_at_icc.uji.es" -->
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
<strong>Subject:</strong> [OMPI users] GM + OpenMPI bug ...<br>
<strong>From:</strong> Jos&#233; Ignacio Aliaga Estell&#233;s (<em>aliaga_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-05-12 16:57:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13045.php">Paul-Michael Agapow: "[OMPI users] Segmentation fault at program end with 2+ processes"</a>
<li><strong>Previous message:</strong> <a href="13043.php">Aleksej Saushev: "Re: [OMPI users] Open MPI 1.4.2 released"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13107.php">Patrick Geoffray: "Re: [OMPI users] GM + OpenMPI bug ..."</a>
<li><strong>Maybe reply:</strong> <a href="13107.php">Patrick Geoffray: "Re: [OMPI users] GM + OpenMPI bug ..."</a>
<li><strong>Maybe reply:</strong> <a href="13309.php">José Ignacio Aliaga Estellés: "Re: [OMPI users] GM + OpenMPI bug ..."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I think that I have found a bug on the implementation of GM  
<br>
collectives routines included in OpenMPI. The version of the GM  
<br>
software is 2.0.30 for the PCI64 cards.
<br>
Sometimes, when I broadcast a vector with 1024 integer by using the  
<br>
MPI_Bcast call, some processor receives a bad packet. Usually, the  
<br>
difference with the original packet is only 1 bit, but it is enough  
<br>
to break the communication.
<br>
I obtain the same problems when I use the 1.4.1 or the 1.4.2 version.
<br>
Could you help me? Thanks.
<br>
<p>Best regards,
<br>
<p>&nbsp;&nbsp;&nbsp;Jos&#233; I. Aliaga
<br>
<p>=================================================
<br>
&nbsp;&nbsp;&nbsp;COMPILATION COMMAND
<br>
=================================================
<br>
&nbsp;&nbsp;&nbsp;mpicc test_comm.c -o test_comm
<br>
<p>=================================================
<br>
&nbsp;&nbsp;&nbsp;EXECUTION COMMAND
<br>
=================================================
<br>
&nbsp;&nbsp;&nbsp;mpirun --mca btl gm,sm,self -np 8 -machinefile mach_file test_comm  
<br>
1 10 1000
<br>
<p>=================================================
<br>
&nbsp;&nbsp;&nbsp;SOME EXECUTION ERRORS
<br>
=================================================
<br>
## EXECUTION 1 ##
<br>
[2] receives 3039 when it must receive 7135. Its subtraction is 4096.
<br>
[2] receives 7142 when it must receive 7143. Its subtraction is 1.
<br>
[2,411th] (Bcast of 7 en 8) 1024 integers with 2 errors.
<br>
<p>## EXECUTION 2 ##
<br>
[5] receives 7142 when it must receive 7136. Its subtraction is 6.
<br>
[5,277th] (Bcast of 0 en 8) 1024 integers with 1 errors.
<br>
[1] receives 7138 when it must receive 7140. Its subtraction is 2.
<br>
[1,385th] (Bcast of 4 en 8) 1024 integers with 1 errors.
<br>
<p>## EXECUTION 3 ##
<br>
[5] receives 3038 when it must receive 7134. Its subtraction is 4096.
<br>
[5] receives 7141 when it must receive 7142. Its subtraction is 1.
<br>
[5,479th] (Bcast of 6 en 8) 1024 integers with 2 errors.
<br>
<p>## EXECUTION 4 ##
<br>
[3] receives 3034 when it must receive 7130. Its subtraction is 4096.
<br>
[3] receives 7140 when it must receive 7138. Its subtraction is 2.
<br>
[3,539th] (Bcast of 2 en 8) 1024 integers with 2 errors.
<br>
<p>## EXECUTION 5 ##
<br>
[5] receives 7135 when it must receive 3039. Its subtraction is 4096.
<br>
[5] receives 3046 when it must receive 3047. Its subtraction is 1.
<br>
[5,135th] (Bcast of 7 en 8) 1024 integers with 2 errors.
<br>
<p>## EXECUTION 6 ##
<br>
[5] receives 7135 when it must receive 3039. Its subtraction is 4096.
<br>
[5] receives 3046 when it must receive 3047. Its subtraction is 1.
<br>
[5,246th] (Bcast of 7 en 8) 1024 integers with 2 errors.
<br>
<p>## EXECUTION 7 ##
<br>
[2] receives 7128 when it must receive 3032. Its subtraction is 4096.
<br>
[2] receives 3047 when it must receive 3040. Its subtraction is 7.
<br>
[2,232th] (Bcast of 0 en 8) 1024 integers with 2 errors.
<br>
<p>## EXECUTION 8 ##
<br>
[3] receives 3036 when it must receive 7132. Its subtraction is 4096.
<br>
[3] receives 7139 when it must receive 7140. Its subtraction is 1.
<br>
[3,344th] (Bcast of 4 en 8) 1024 integers with 2 errors.
<br>
<p>=================================================
<br>
&nbsp;&nbsp;&nbsp;SOURCE CODE --&gt; test_comm.c
<br>
=================================================
<br>
#include &lt;stdio.h&gt;
<br>
#include &lt;stdlib.h&gt;
<br>
#include &lt;string.h&gt;
<br>
#include &lt;math.h&gt;
<br>
#include &lt;mpi.h&gt;
<br>
<p>int *CreateVector (int tam) {
<br>
&nbsp;&nbsp;&nbsp;int *ptr = NULL, my_id;
<br>
<p>&nbsp;&nbsp;&nbsp;MPI_Comm_rank(MPI_COMM_WORLD, &amp;my_id);
<br>
&nbsp;&nbsp;&nbsp;ptr = (int *) malloc (sizeof(int) * tam);
<br>
&nbsp;&nbsp;&nbsp;if (ptr == NULL)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{ printf (&quot;ERROR MEMORIA (%d)\n&quot;, my_id); exit(-1); }
<br>
<p>&nbsp;&nbsp;&nbsp;return ptr;
<br>
}
<br>
<p>void InitVector (int *vec, int tam, int inic) {
<br>
&nbsp;&nbsp;&nbsp;int i, val = inic, numprocs;
<br>
<p>&nbsp;&nbsp;&nbsp;MPI_Comm_size(MPI_COMM_WORLD, &amp;numprocs);
<br>
&nbsp;&nbsp;&nbsp;if (inic &gt;= 0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;for (i= 0; i&lt;tam; i++)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{ vec[i] = val; val += numprocs; }
<br>
&nbsp;&nbsp;&nbsp;else
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;for (i= 0; i&lt;tam; i++) vec[i] = -1;
<br>
}
<br>
<p>int CompareVector (int *vec, int tam, int inic) {
<br>
&nbsp;&nbsp;&nbsp;int i, val = inic, numprocs, my_id, bool = 0;
<br>
<p>&nbsp;&nbsp;&nbsp;MPI_Comm_size(MPI_COMM_WORLD, &amp;numprocs);  MPI_Comm_rank 
<br>
(MPI_COMM_WORLD, &amp;my_id);
<br>
&nbsp;&nbsp;&nbsp;for (i= 0; i&lt;tam; i++) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (vec[i] != val) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;printf (&quot;[%d] receives %d when it must receive %d. Its  
<br>
subtraction is %d.\n&quot;,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;my_id, vec[i], val, ((val&gt;vec[i])?(val-vec[i]): 
<br>
(vec[i]-val)));
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;bool++;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;val += numprocs;
<br>
&nbsp;&nbsp;&nbsp;}
<br>
<p>&nbsp;&nbsp;&nbsp;return bool;
<br>
}
<br>
<p>int main (int argc, char **argv) {
<br>
&nbsp;&nbsp;&nbsp;int i, j, k, tam, num, bool;
<br>
&nbsp;&nbsp;&nbsp;int pos1, pos2,  dim1, dim2, nexecs;
<br>
&nbsp;&nbsp;&nbsp;int my_id, numprocs, prc_src, prc_dst;
<br>
&nbsp;&nbsp;&nbsp;int *mess = NULL;
<br>
&nbsp;&nbsp;&nbsp;int *mess1 = NULL, *mess2 = NULL;;
<br>
&nbsp;&nbsp;&nbsp;char name[MPI_MAX_PROCESSOR_NAME];
<br>
&nbsp;&nbsp;&nbsp;MPI_Request req;
<br>
&nbsp;&nbsp;&nbsp;MPI_Status sta;
<br>
<p>&nbsp;&nbsp;&nbsp;MPI_Init (&amp;argc, &amp;argv);
<br>
&nbsp;&nbsp;&nbsp;MPI_Comm_size(MPI_COMM_WORLD, &amp;numprocs);  MPI_Comm_rank 
<br>
(MPI_COMM_WORLD, &amp;my_id);
<br>
<p>&nbsp;&nbsp;&nbsp;pos1 = atoi(argv[1]); dim1 = (1 &lt;&lt; pos1);
<br>
&nbsp;&nbsp;&nbsp;pos2 = atoi(argv[2]); dim2 = (1 &lt;&lt; pos2);
<br>
&nbsp;&nbsp;&nbsp;nexecs = atoi(argv[3]);
<br>
<p>&nbsp;&nbsp;&nbsp;MPI_Barrier(MPI_COMM_WORLD);
<br>
<p>&nbsp;&nbsp;&nbsp;mess = CreateVector(dim2); InitVector(mess, dim2, -1);
<br>
&nbsp;&nbsp;&nbsp;for (tam=dim1; tam&lt;=dim2; tam &lt;&lt;= 1) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;for (k=0; k&lt;nexecs; k++)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;for (i=0; i&lt;numprocs; i++) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;InitVector(mess, tam, ((my_id==i)?i:-1));
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Bcast(mess, tam, MPI_INT, i, MPI_COMM_WORLD);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;bool = CompareVector (mess, tam, i);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (bool &gt; 0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;printf (&quot;[%d,%dth] (Bcast of %d in %d) %d integers with %d  
<br>
errors\n&quot;,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;my_id, k, i, numprocs, tam, bool);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;free (mess); mess = NULL;
<br>
<p>&nbsp;&nbsp;&nbsp;MPI_Barrier(MPI_COMM_WORLD);
<br>
<p>&nbsp;&nbsp;&nbsp;MPI_Finalize ();
<br>
<p>&nbsp;&nbsp;&nbsp;return 0;
<br>
}
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13045.php">Paul-Michael Agapow: "[OMPI users] Segmentation fault at program end with 2+ processes"</a>
<li><strong>Previous message:</strong> <a href="13043.php">Aleksej Saushev: "Re: [OMPI users] Open MPI 1.4.2 released"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13107.php">Patrick Geoffray: "Re: [OMPI users] GM + OpenMPI bug ..."</a>
<li><strong>Maybe reply:</strong> <a href="13107.php">Patrick Geoffray: "Re: [OMPI users] GM + OpenMPI bug ..."</a>
<li><strong>Maybe reply:</strong> <a href="13309.php">José Ignacio Aliaga Estellés: "Re: [OMPI users] GM + OpenMPI bug ..."</a>
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

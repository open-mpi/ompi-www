<?
$subject_val = "[OMPI users] MPI with dynamic arrays";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Aug 10 11:57:16 2011" -->
<!-- isoreceived="20110810155716" -->
<!-- sent="Wed, 10 Aug 2011 17:57:12 +0200" -->
<!-- isosent="20110810155712" -->
<!-- name="Sylvestre Ledru" -->
<!-- email="sylvestre.ledru_at_[hidden]" -->
<!-- subject="[OMPI users] MPI with dynamic arrays" -->
<!-- id="1312991832.18414.100.camel_at_korcula.inria.fr" -->
<!-- charset="UTF-8" -->
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
<strong>Subject:</strong> [OMPI users] MPI with dynamic arrays<br>
<strong>From:</strong> Sylvestre Ledru (<em>sylvestre.ledru_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-08-10 11:57:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17046.php">Matthew Russell: "Re: [OMPI users] CMAQ crashes with OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="17044.php">Matthew Russell: "Re: [OMPI users] CMAQ crashes with OpenMPI"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>I would like to know what could be the best way to send three variables
<br>
with the following types:
<br>
double * data; (which can be also int *, float * but that is a different
<br>
issue)
<br>
int row;  // number of row
<br>
int col;  // number of cols
<br>
<p>On the nodes, I have no way to know a priori what is going to be the
<br>
size of myArray.
<br>
<p>After playing with various solutions MPI_Pack or MPI_Type_contiguous
<br>
(which were failures...), I started to play with MPI_Type_Create_Struct.
<br>
<p>Unfortunately, as the following (long) code [1] shows, it won't send the
<br>
actual content of &quot;data&quot; but just the pointer. 
<br>
Is there any way to specify that I want to send the actual data ? 
<br>
(or what could be a good way to do so)
<br>
<p>Thanks,
<br>
Sylvestre
<br>
<p>PS: I tried with a two steps MPI_Send/MPI_Recv (first sending the
<br>
size/type, then receiving the data). It is working but I am afraid of
<br>
bad performances... I would prefer send everything at once.
<br>
<p><p>[1]
<br>
#include &lt;mpi.h&gt;
<br>
#include &lt;string.h&gt;
<br>
#include &lt;stdio.h&gt;
<br>
<p>#define N      1
<br>
#define NUMBER_PARAM 3
<br>
typedef struct particule {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;char myString[6];
<br>
&nbsp;&nbsp;&nbsp;&nbsp;int mass;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;double *data;
<br>
//    double data[2];
<br>
} PARTICULE;
<br>
<p>int main(int argc,char *argv[])
<br>
{
<br>
<p>&nbsp;&nbsp;int          rang, code, i;
<br>
&nbsp;&nbsp;const int    TAG=100;
<br>
&nbsp;&nbsp;int          block_length[NUMBER_PARAM];
<br>
&nbsp;&nbsp;MPI_Aint     adresses[NUMBER_PARAM],displacements[NUMBER_PARAM];
<br>
&nbsp;&nbsp;MPI_Datatype type_particule,types[NUMBER_PARAM];
<br>
&nbsp;&nbsp;MPI_Status   statut;
<br>
&nbsp;&nbsp;PARTICULE    p[N];
<br>
<p>&nbsp;&nbsp;MPI_Init(&amp;argc,&amp;argv);
<br>
&nbsp;&nbsp;MPI_Comm_rank(MPI_COMM_WORLD,&amp;rang);
<br>
<p>&nbsp;&nbsp;if (rang == 0){
<br>
&nbsp;&nbsp;&nbsp;&nbsp;for (i=0; i&lt;N ; i++)  {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;strcpy(p[i].myString,&quot;CELL0&quot;);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;p[i].mass= 0;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;p[i].data=(double*) malloc(2*sizeof(double));
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;p[i].data[0]=21.0;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;p[i].data[1]=3.0;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;}
<br>
<p>&nbsp;&nbsp;types[0] = MPI_CHAR;
<br>
&nbsp;&nbsp;types[1] = MPI_INT;
<br>
&nbsp;&nbsp;types[2] = MPI_DOUBLE;
<br>
&nbsp;&nbsp;block_length[0] = 6;
<br>
&nbsp;&nbsp;block_length[1] = 1;
<br>
&nbsp;&nbsp;block_length[2] = 2; /* cf malloc of data */
<br>
<p>&nbsp;&nbsp;MPI_Get_address(&amp;p[0].myString,&amp;adresses[0]);
<br>
&nbsp;&nbsp;MPI_Get_address(&amp;p[0].mass,&amp;adresses[1]);
<br>
&nbsp;&nbsp;MPI_Get_address(&amp;p[0].data,&amp;adresses[2]);
<br>
<p>&nbsp;&nbsp;for (i=0; i&lt;NUMBER_PARAM ; i++)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;displacements[i] = adresses[i]-adresses[0];
<br>
<p><p>MPI_Type_create_struct(NUMBER_PARAM,block_length,displacements,types,&amp;type_particule);
<br>
&nbsp;&nbsp;MPI_Type_commit(&amp;type_particule);
<br>
<p>&nbsp;&nbsp;if (rang == 0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Send(&amp;p,N,type_particule,1,TAG,MPI_COMM_WORLD);
<br>
&nbsp;&nbsp;else   {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Recv(&amp;p,N,type_particule,0,TAG,MPI_COMM_WORLD,&amp;statut);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;printf (&quot;Struct received by CPU 1 \n&quot;);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;for (i=0; i&lt;N ; i++) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;printf (&quot;%s &quot;,p[i].myString);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;printf (&quot;%d &quot;,p[i].mass);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;printf (&quot;%d &quot;,p[i].data);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;fflush(NULL);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;printf (&quot;%f &quot;,p[i].data[0]); // Crashes.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;printf (&quot;\n&quot;);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<p>&nbsp;&nbsp;}
<br>
<p>&nbsp;&nbsp;MPI_Type_free(&amp;type_particule);
<br>
&nbsp;&nbsp;MPI_Finalize();
<br>
&nbsp;&nbsp;return(0);
<br>
}
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17046.php">Matthew Russell: "Re: [OMPI users] CMAQ crashes with OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="17044.php">Matthew Russell: "Re: [OMPI users] CMAQ crashes with OpenMPI"</a>
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

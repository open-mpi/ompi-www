<?
$subject_val = "[OMPI users] issue with column type in language C";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Aug 19 00:59:08 2012" -->
<!-- isoreceived="20120819045908" -->
<!-- sent="Sun, 19 Aug 2012 06:59:02 +0200" -->
<!-- isosent="20120819045902" -->
<!-- name="Christian Perrier" -->
<!-- email="christian01.perrier_at_[hidden]" -->
<!-- subject="[OMPI users] issue with column type in language C" -->
<!-- id="CAEH56udP7dBhXLjj6xYF8q4=oNuyJ7VdfTmLqbe1zvhf+qQzLw_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] issue with column type in language C<br>
<strong>From:</strong> Christian Perrier (<em>christian01.perrier_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-08-19 00:59:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19956.php">Bill Mulberry: "[OMPI users] MPI/FORTRAN on a cluster system"</a>
<li><strong>Previous message:</strong> <a href="19954.php">Jeff Squyres: "Re: [OMPI users] mpi_group_incl erros"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19957.php">Rayson Ho: "Re: [OMPI users] issue with column type in language C"</a>
<li><strong>Reply:</strong> <a href="19957.php">Rayson Ho: "Re: [OMPI users] issue with column type in language C"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I have a problem with MPI_Senrecv communication where I send columns on
<br>
edges between processes.
<br>
For debugging, I show you below a basic example where I initialize a 10x10
<br>
matrix (&quot;x0&quot; array) with x_domain=4
<br>
and y_domain=4. For the test, I simply initialize the 2D array values with
<br>
x0[i][j] = i+j . After, in updateBound.c&quot;, I'm
<br>
using the MPI_Sendrecv functions for the North-South and Est-West process.
<br>
<p>Here's the main program &quot;example.c&quot; :
<br>
<p>-------------------------------------------------------------------------------------------
<br>
<p>#include &lt;stdio.h&gt;
<br>
#include &lt;stdlib.h&gt;
<br>
#include &lt;math.h&gt;
<br>
#include &quot;mpi.h&quot;
<br>
<p>int main(int argc, char *argv[])
<br>
&nbsp;&nbsp;&nbsp;&nbsp;{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/* size of the discretization */
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;double** x;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;double** x0;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int i,j,k,l;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int nproc;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int ndims;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int S=0, E=1, N=2, W=3;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int NeighBor[4];
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int xcell, ycell, size_tot_x, size_tot_y;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int *xs,*ys,*xe,*ye;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int size_x = 4;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int size_y = 4;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int me;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int x_domains=2;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int y_domains=2;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Comm comm, comm2d;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int dims[2];
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int periods[2];
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int reorganisation = 0;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int row;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Datatype column_type;
<br>
<p><p><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;size_tot_x=size_x+2*x_domains+2;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;size_tot_y=size_y+2*y_domains+2;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;xcell=(size_x/x_domains);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ycell=(size_y/y_domains);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Init(&amp;argc, &amp;argv);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;comm = MPI_COMM_WORLD;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Comm_size(comm,&amp;nproc);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Comm_rank(comm,&amp;me);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;x = malloc(size_tot_y*sizeof(double*));
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;x0 = malloc(size_tot_y*sizeof(double*));
<br>
<p><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;for(j=0;j&lt;=size_tot_y-1;j++) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;x[j] = malloc(size_tot_x*sizeof(double));
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;x0[j] = malloc(size_tot_x*sizeof(double));
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;xs = malloc(nproc*sizeof(int));
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;xe = malloc(nproc*sizeof(int));
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ys = malloc(nproc*sizeof(int));
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ye = malloc(nproc*sizeof(int));
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/* Create 2D cartesian grid */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;periods[0] = 0;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;periods[1] = 0;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ndims = 2;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;dims[0]=x_domains;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;dims[1]=y_domains;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Cart_create(comm, ndims, dims, periods, reorganisation, &amp;comm2d);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/* Identify neighbors */
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;NeighBor[0] = MPI_PROC_NULL;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;NeighBor[1] = MPI_PROC_NULL;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;NeighBor[2] = MPI_PROC_NULL;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;NeighBor[3] = MPI_PROC_NULL;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/* Left/West and right/Est neigbors */
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Cart_shift(comm2d,0,1,&amp;NeighBor[W],&amp;NeighBor[E]);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/* Bottom/South and Upper/North neigbors */
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Cart_shift(comm2d,1,1,&amp;NeighBor[S],&amp;NeighBor[N]);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/* coordinates of current cell with me rank */
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;xcell=(size_x/x_domains);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ycell=(size_y/y_domains);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ys[me]=(y_domains-me%(y_domains)-1)*(ycell+2)+2;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ye[me]=ys[me]+ycell-1;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;for(i=0;i&lt;=y_domains-1;i++)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{xs[i]=2;}
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;for(i=0;i&lt;=y_domains-1;i++)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{xe[i]=xs[i]+xcell-1;}
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;for(i=1;i&lt;=(x_domains-1);i++)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{ for(j=0;j&lt;=(y_domains-1);j++)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;xs[i*y_domains+j]=xs[(i-1)*y_domains+j]+xcell+2;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;xe[i*y_domains+j]=xs[i*y_domains+j]+xcell-1;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;for(i=0;i&lt;=size_tot_y-1;i++)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{ for(j=0;j&lt;=size_tot_x-1;j++)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{ x0[i][j]= i+j;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;//  printf(&quot;%f\n&quot;,x0[i][j]);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/*  Create column data type to communicate with South and North
<br>
neighbors */
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Type_vector( ycell, 1, size_tot_x, MPI_DOUBLE, &amp;column_type);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Type_commit(&amp;column_type);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;updateBound(x0, NeighBor, comm2d, column_type, me, xs, ys, xe, ye,
<br>
xcell);
<br>
<p><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;for(i=0;i&lt;=size_tot_y-1;i++)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;free(x[i]);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;free(x0[i]);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;free(x);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;free(x0);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;free(xs);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;free(xe);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;free(ys);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;free(ye);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Finalize();
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return 0;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
-------------------------------------------------------------------------------------------
<br>
<p>and the second file &quot;updateBound.c&quot; which sends the columns and rows
<br>
<p><p>-------------------------------------------------------------------------------------------
<br>
<p><p>#include &quot;mpi.h&quot;
<br>
#include &lt;stdio.h&gt;
<br>
<p>/*******************************************************************/
<br>
/*    Update Bounds of subdomain with me process      */
<br>
/*******************************************************************/
<br>
<p>&nbsp;&nbsp;void updateBound(double** x,int NeighBor[], MPI_Comm comm2d, MPI_Datatype
<br>
column_type , int me, int* xs, int* ys, int* xe, int* ye, int xcell)
<br>
&nbsp;&nbsp;{
<br>
<p>&nbsp;&nbsp;int S=0, E=1, N=2, W=3;
<br>
&nbsp;&nbsp;int flag;
<br>
&nbsp;&nbsp;MPI_Status status;
<br>
<p>&nbsp;&nbsp;int i,j;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(me==0) {printf(&quot;verif_update_before\n&quot;);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;for(i=ys[me]-1;i&lt;=ye[me]+1;i++)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{ for(j=xs[me]-1;j&lt;=xe[me]+1;j++)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{ printf(&quot;%f &quot;,x[i][j]);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot;\n&quot;);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot;\n&quot;);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<p>/********* North/South communication **********************************/
<br>
&nbsp;&nbsp;flag = 1;
<br>
&nbsp;&nbsp;/*Send my boundary to North and receive from South*/
<br>
&nbsp;&nbsp;MPI_Sendrecv(&amp;x[ys[me]][xs[me]], xcell, MPI_DOUBLE, NeighBor[N], flag,
<br>
&amp;x[ye[me]+1][xs[me]], xcell, MPI_DOUBLE, NeighBor[S], flag, comm2d,
<br>
&amp;status);
<br>
<p>&nbsp;&nbsp;/*Send my boundary to South and receive from North*/
<br>
&nbsp;&nbsp;MPI_Sendrecv(&amp;x[ye[me]][xs[me]], xcell, MPI_DOUBLE, NeighBor[S], flag,
<br>
&amp;x[ys[me]-1][xs[me]], xcell, MPI_DOUBLE, NeighBor[N], flag, comm2d,
<br>
&amp;status);
<br>
<p>/********* Est/West communication ************************************/
<br>
&nbsp;&nbsp;flag = 2;
<br>
&nbsp;&nbsp;/*Send my boundary to Est and receive from West*/
<br>
&nbsp;&nbsp;MPI_Sendrecv(&amp;x[ys[me]][xe[me]], 1, column_type, NeighBor[E], flag,
<br>
&amp;x[ys[me]][xs[me]-1], 1, column_type, NeighBor[W], flag, comm2d, &amp;status);
<br>
<p>&nbsp;&nbsp;/*Send my boundary to West and receive from Est*/
<br>
&nbsp;&nbsp;MPI_Sendrecv(&amp;x[ys[me]][xs[me]], 1, column_type, NeighBor[W], flag,
<br>
&amp;x[ys[me]][xe[me]+1], 1, column_type, NeighBor[E], flag, comm2d, &amp;status);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(me==0) {printf(&quot;verif_update_after\n&quot;);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;for(i=ys[me]-1;i&lt;=ye[me]+1;i++)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{ for(j=xs[me]-1;j&lt;=xe[me]+1;j++)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{ printf(&quot;%f &quot;,x[i][j]);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot;\n&quot;);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot;\n&quot;);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;}
<br>
<p>------------------------------------------------------------------------------
<br>
<p>Running with nproc=4, I print the values of the subarray with rank=0 (so at
<br>
left bottom of the grid) and I get before and after the
<br>
bounds udpate  :
<br>
<p>verif_update_before
<br>
6.000000 7.000000 8.000000 9.000000
<br>
7.000000 8.000000 9.000000 10.000000
<br>
8.000000 9.000000 10.000000 11.000000
<br>
9.000000 10.000000 11.000000 12.000000
<br>
<p>verif_update_after
<br>
6.000000 5.000000 6.000000 9.000000
<br>
7.000000 8.000000 9.000000 12.000000
<br>
8.000000 9.000000 10.000000 *11.000000 *
<br>
9.000000 10.000000 11.000000 12.000000
<br>
<p>As you can see, after the udpate, I don't have the correct value ( in
<br>
underligned bold : 11.0 ) at the second element
<br>
of the column coming from the Est. I expected 13.0 instead of 11.0.
<br>
<p>So there's a problem with the column datatype which only send the first
<br>
element of this column.
<br>
<p>In &quot;example.c&quot;, I define the column as following :
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Type_vector( ycell, 1, size_tot_x, MPI_DOUBLE, &amp;column_type);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Type_commit(&amp;column_type);
<br>
<p>However, It seems ok and the computation of begin and end coordinates as a
<br>
function of rank &quot;me&quot; is also good.
<br>
<p>I make you notice there's no problem between the exchange of rows between
<br>
the North and the South, only
<br>
between columns.
<br>
<p>If you could help me, I don't know what to do.
<br>
<p>Regards
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-19955/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19956.php">Bill Mulberry: "[OMPI users] MPI/FORTRAN on a cluster system"</a>
<li><strong>Previous message:</strong> <a href="19954.php">Jeff Squyres: "Re: [OMPI users] mpi_group_incl erros"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19957.php">Rayson Ho: "Re: [OMPI users] issue with column type in language C"</a>
<li><strong>Reply:</strong> <a href="19957.php">Rayson Ho: "Re: [OMPI users] issue with column type in language C"</a>
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

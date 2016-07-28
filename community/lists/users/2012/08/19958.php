<?
$subject_val = "Re: [OMPI users] issue with column type in language C";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Aug 19 20:38:15 2012" -->
<!-- isoreceived="20120820003815" -->
<!-- sent="Mon, 20 Aug 2012 02:38:09 +0200" -->
<!-- isosent="20120820003809" -->
<!-- name="Christian Perrier" -->
<!-- email="christian01.perrier_at_[hidden]" -->
<!-- subject="Re: [OMPI users] issue with column type in language C" -->
<!-- id="CAEH56udS7Ee6coOwGRPFxUETFXBPgiET9u9ft0HmMxo4dYaqig_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CAHwLALMNgvxjRpH1C9u5qH0F05+_tES2A2Hf=mNMF-ANG5npKw_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] issue with column type in language C<br>
<strong>From:</strong> Christian Perrier (<em>christian01.perrier_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-08-19 20:38:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19959.php">devendra rai: "[OMPI users] MPI_Irecv: Confusion with &lt;&lt;int count&gt;&gt; inputy parameter"</a>
<li><strong>Previous message:</strong> <a href="19957.php">Rayson Ho: "Re: [OMPI users] issue with column type in language C"</a>
<li><strong>In reply to:</strong> <a href="19957.php">Rayson Ho: "Re: [OMPI users] issue with column type in language C"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19968.php">Jeff Squyres: "Re: [OMPI users] issue with column type in language C"</a>
<li><strong>Reply:</strong> <a href="19968.php">Jeff Squyres: "Re: [OMPI users] issue with column type in language C"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>Indeed I try to make the equivalent of this Fortran program in C. The
<br>
Fortran version works fine but I have problems now in C.
<br>
<p>I can't get to exchange between 2 processes a single column.
<br>
<p>Could you try please to compile and execute the following test code wich
<br>
simply sends a column from the rank=2 and received by rank=0 ( you need to
<br>
execute it with nproc=4) :
<br>
<p>--------------------------------------------------------------------------------------------------
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
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int bonk1, bonk2;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int i,j,k,l;
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
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int flag = 1;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Comm comm, comm2d;
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
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Status status;
<br>
<p><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;size_tot_x=size_x+2*x_domains+2;
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
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;NeighBor[0] = MPI_PROC_NULL;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;NeighBor[1] = MPI_PROC_NULL;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;NeighBor[2] = MPI_PROC_NULL;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;NeighBor[3] = MPI_PROC_NULL;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/* Left/West and right/Est neigbors */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Cart_shift(comm2d,0,1,&amp;NeighBor[W],&amp;NeighBor[E]);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/* Bottom/South and Upper/North neigbors */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Cart_shift(comm2d,1,1,&amp;NeighBor[S],&amp;NeighBor[N]);
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
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/*  Create column data type to communicate with South and North
<br>
neighbors */
<br>
<p><p><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Type_vector( ycell, 1, size_tot_x, MPI_DOUBLE, &amp;column_type);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Type_commit(&amp;column_type);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(me==2) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot;Before Send - Process 2 subarray\n&quot;);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;for(i=ys[me]-1;i&lt;=ye[me]+1;i++)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{ for(j=xs[me]-1;j&lt;=xe[me]+1;j++)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{ printf(&quot;%f &quot;,x0[i][j]);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot;\n&quot;);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot;\n&quot;);
<br>
<p><p><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Send(&amp;(x0[ys[2]][xs[2]]), 1, column_type,  0, flag, comm2d );
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(me==0) {
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Recv(&amp;(x0[ys[0]][xe[0]]), 1, column_type,  2, flag, comm2d ,
<br>
&amp;status);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot;After Receive - Process 0 subarray\n&quot;);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;for(i=ys[me]-1;i&lt;=ye[me]+1;i++)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{ for(j=xs[me]-1;j&lt;=xe[me]+1;j++)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{ printf(&quot;%f &quot;,x0[i][j]);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot;\n&quot;);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot;\n&quot;);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Get_count(&amp;status,column_type,&amp;bonk1);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Get_elements(&amp;status,MPI_DOUBLE,&amp;bonk2);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot;got %d elements of type column_type\n&quot;,bonk1);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot;which contained %d elements of type MPI_DOUBLE\n&quot;,bonk2);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot;\n&quot;);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;for(i=0;i&lt;=size_tot_y-1;i++)
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
<p>--------------------------------------------------------------------------------------------------
<br>
<p>xs[me] and xe[me] correspond respectively to x_start[me] and x_end[me] of
<br>
rank = me. This is the same for ys[me] and ye[me].
<br>
<p>As I said in the precedent post, there's only the first value of the column
<br>
which is received par
<br>
process of rank 0. Here's the output of this program :
<br>
<p>Before Send - Process 2 subarray
<br>
10.000000 11.000000 12.000000 13.000000
<br>
11.000000 *12.000000 13.000000* 14.000000
<br>
12.000000 *13.000000 14.000000* 15.000000
<br>
13.000000 14.000000 15.000000 16.000000
<br>
<p>After Receive - Process 0 subarray
<br>
6.000000 7.000000 8.000000 9.000000
<br>
7.000000 *8.000000 12.000000* 10.000000
<br>
8.000000 *9.000000 10.000000* 11.000000
<br>
9.000000 10.000000 11.000000 12.000000
<br>
<p>got 1 elements of type column_type
<br>
which contained 2 elements of type MPI_DOUBLE
<br>
<p>------------------------------------------------------------------------
<br>
<p>I get &quot;12.00000&quot; for the first element but for the second element, I have
<br>
&quot;10.00000&quot; instead of &quot;13.00000&quot;.
<br>
<p>Any help would be really appreciated.
<br>
<p><p>On Sun, Aug 19, 2012 at 6:25 PM, Rayson Ho &lt;raysonlogin_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi Christian,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The code you posted is very similar to another school assignment sent
</span><br>
<span class="quotelev1">&gt; to this list 2 years ago:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2010/10/14619.php">http://www.open-mpi.org/community/lists/users/2010/10/14619.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; At that time, the code was written in Fortran, and now it is written
</span><br>
<span class="quotelev1">&gt; in C - however, the variable names, logic, etc are quite similar! :-D
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Remember, debugging and bug fix is part of the (home) work!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Rayson
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ==================================================
</span><br>
<span class="quotelev1">&gt; Open Grid Scheduler - The Official Open Source Grid Engine
</span><br>
<span class="quotelev1">&gt; <a href="http://gridscheduler.sourceforge.net/">http://gridscheduler.sourceforge.net/</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Sun, Aug 19, 2012 at 12:59 AM, Christian Perrier
</span><br>
<span class="quotelev1">&gt; &lt;christian01.perrier_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt; Hi,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I have a problem with MPI_Senrecv communication where I send columns on
</span><br>
<span class="quotelev2">&gt; &gt; edges between processes.
</span><br>
<span class="quotelev2">&gt; &gt; For debugging, I show you below a basic example where I initialize a
</span><br>
<span class="quotelev1">&gt; 10x10
</span><br>
<span class="quotelev2">&gt; &gt; matrix (&quot;x0&quot; array) with x_domain=4
</span><br>
<span class="quotelev2">&gt; &gt; and y_domain=4. For the test, I simply initialize the 2D array values
</span><br>
<span class="quotelev1">&gt; with
</span><br>
<span class="quotelev2">&gt; &gt; x0[i][j] = i+j . After, in updateBound.c&quot;, I'm
</span><br>
<span class="quotelev2">&gt; &gt; using the MPI_Sendrecv functions for the North-South and Est-West
</span><br>
<span class="quotelev1">&gt; process.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Here's the main program &quot;example.c&quot; :
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; -------------------------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; #include &lt;stdio.h&gt;
</span><br>
<span class="quotelev2">&gt; &gt; #include &lt;stdlib.h&gt;
</span><br>
<span class="quotelev2">&gt; &gt; #include &lt;math.h&gt;
</span><br>
<span class="quotelev2">&gt; &gt; #include &quot;mpi.h&quot;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; int main(int argc, char *argv[])
</span><br>
<span class="quotelev2">&gt; &gt;     {
</span><br>
<span class="quotelev2">&gt; &gt;       /* size of the discretization */
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;       double** x;
</span><br>
<span class="quotelev2">&gt; &gt;       double** x0;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;       int i,j,k,l;
</span><br>
<span class="quotelev2">&gt; &gt;       int nproc;
</span><br>
<span class="quotelev2">&gt; &gt;       int ndims;
</span><br>
<span class="quotelev2">&gt; &gt;       int S=0, E=1, N=2, W=3;
</span><br>
<span class="quotelev2">&gt; &gt;       int NeighBor[4];
</span><br>
<span class="quotelev2">&gt; &gt;       int xcell, ycell, size_tot_x, size_tot_y;
</span><br>
<span class="quotelev2">&gt; &gt;       int *xs,*ys,*xe,*ye;
</span><br>
<span class="quotelev2">&gt; &gt;       int size_x = 4;
</span><br>
<span class="quotelev2">&gt; &gt;       int size_y = 4;
</span><br>
<span class="quotelev2">&gt; &gt;       int me;
</span><br>
<span class="quotelev2">&gt; &gt;       int x_domains=2;
</span><br>
<span class="quotelev2">&gt; &gt;       int y_domains=2;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;       MPI_Comm comm, comm2d;
</span><br>
<span class="quotelev2">&gt; &gt;       int dims[2];
</span><br>
<span class="quotelev2">&gt; &gt;       int periods[2];
</span><br>
<span class="quotelev2">&gt; &gt;       int reorganisation = 0;
</span><br>
<span class="quotelev2">&gt; &gt;       int row;
</span><br>
<span class="quotelev2">&gt; &gt;       MPI_Datatype column_type;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;       size_tot_x=size_x+2*x_domains+2;
</span><br>
<span class="quotelev2">&gt; &gt;       size_tot_y=size_y+2*y_domains+2;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;       xcell=(size_x/x_domains);
</span><br>
<span class="quotelev2">&gt; &gt;       ycell=(size_y/y_domains);
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;       MPI_Init(&amp;argc, &amp;argv);
</span><br>
<span class="quotelev2">&gt; &gt;       comm = MPI_COMM_WORLD;
</span><br>
<span class="quotelev2">&gt; &gt;       MPI_Comm_size(comm,&amp;nproc);
</span><br>
<span class="quotelev2">&gt; &gt;       MPI_Comm_rank(comm,&amp;me);
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;       x = malloc(size_tot_y*sizeof(double*));
</span><br>
<span class="quotelev2">&gt; &gt;       x0 = malloc(size_tot_y*sizeof(double*));
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;       for(j=0;j&lt;=size_tot_y-1;j++) {
</span><br>
<span class="quotelev2">&gt; &gt;         x[j] = malloc(size_tot_x*sizeof(double));
</span><br>
<span class="quotelev2">&gt; &gt;         x0[j] = malloc(size_tot_x*sizeof(double));
</span><br>
<span class="quotelev2">&gt; &gt;       }
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;       xs = malloc(nproc*sizeof(int));
</span><br>
<span class="quotelev2">&gt; &gt;       xe = malloc(nproc*sizeof(int));
</span><br>
<span class="quotelev2">&gt; &gt;       ys = malloc(nproc*sizeof(int));
</span><br>
<span class="quotelev2">&gt; &gt;       ye = malloc(nproc*sizeof(int));
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;       /* Create 2D cartesian grid */
</span><br>
<span class="quotelev2">&gt; &gt;       periods[0] = 0;
</span><br>
<span class="quotelev2">&gt; &gt;       periods[1] = 0;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;       ndims = 2;
</span><br>
<span class="quotelev2">&gt; &gt;       dims[0]=x_domains;
</span><br>
<span class="quotelev2">&gt; &gt;       dims[1]=y_domains;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;       MPI_Cart_create(comm, ndims, dims, periods, reorganisation,
</span><br>
<span class="quotelev1">&gt; &amp;comm2d);
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;       /* Identify neighbors */
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;       NeighBor[0] = MPI_PROC_NULL;
</span><br>
<span class="quotelev2">&gt; &gt;       NeighBor[1] = MPI_PROC_NULL;
</span><br>
<span class="quotelev2">&gt; &gt;       NeighBor[2] = MPI_PROC_NULL;
</span><br>
<span class="quotelev2">&gt; &gt;       NeighBor[3] = MPI_PROC_NULL;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;       /* Left/West and right/Est neigbors */
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;       MPI_Cart_shift(comm2d,0,1,&amp;NeighBor[W],&amp;NeighBor[E]);
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;       /* Bottom/South and Upper/North neigbors */
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;       MPI_Cart_shift(comm2d,1,1,&amp;NeighBor[S],&amp;NeighBor[N]);
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;       /* coordinates of current cell with me rank */
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;       xcell=(size_x/x_domains);
</span><br>
<span class="quotelev2">&gt; &gt;       ycell=(size_y/y_domains);
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;       ys[me]=(y_domains-me%(y_domains)-1)*(ycell+2)+2;
</span><br>
<span class="quotelev2">&gt; &gt;       ye[me]=ys[me]+ycell-1;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;       for(i=0;i&lt;=y_domains-1;i++)
</span><br>
<span class="quotelev2">&gt; &gt;       {xs[i]=2;}
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;       for(i=0;i&lt;=y_domains-1;i++)
</span><br>
<span class="quotelev2">&gt; &gt;       {xe[i]=xs[i]+xcell-1;}
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;       for(i=1;i&lt;=(x_domains-1);i++)
</span><br>
<span class="quotelev2">&gt; &gt;          { for(j=0;j&lt;=(y_domains-1);j++)
</span><br>
<span class="quotelev2">&gt; &gt;               {
</span><br>
<span class="quotelev2">&gt; &gt;                xs[i*y_domains+j]=xs[(i-1)*y_domains+j]+xcell+2;
</span><br>
<span class="quotelev2">&gt; &gt;                xe[i*y_domains+j]=xs[i*y_domains+j]+xcell-1;
</span><br>
<span class="quotelev2">&gt; &gt;               }
</span><br>
<span class="quotelev2">&gt; &gt;          }
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;       for(i=0;i&lt;=size_tot_y-1;i++)
</span><br>
<span class="quotelev2">&gt; &gt;           { for(j=0;j&lt;=size_tot_x-1;j++)
</span><br>
<span class="quotelev2">&gt; &gt;             { x0[i][j]= i+j;
</span><br>
<span class="quotelev2">&gt; &gt;         //  printf(&quot;%f\n&quot;,x0[i][j]);
</span><br>
<span class="quotelev2">&gt; &gt;         }
</span><br>
<span class="quotelev2">&gt; &gt;       }
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;       /*  Create column data type to communicate with South and North
</span><br>
<span class="quotelev2">&gt; &gt; neighbors */
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;       MPI_Type_vector( ycell, 1, size_tot_x, MPI_DOUBLE, &amp;column_type);
</span><br>
<span class="quotelev2">&gt; &gt;       MPI_Type_commit(&amp;column_type);
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;       updateBound(x0, NeighBor, comm2d, column_type, me, xs, ys, xe, ye,
</span><br>
<span class="quotelev2">&gt; &gt; xcell);
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;               for(i=0;i&lt;=size_tot_y-1;i++)
</span><br>
<span class="quotelev2">&gt; &gt;            {
</span><br>
<span class="quotelev2">&gt; &gt;             free(x[i]);
</span><br>
<span class="quotelev2">&gt; &gt;             free(x0[i]);
</span><br>
<span class="quotelev2">&gt; &gt;            }
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;         free(x);
</span><br>
<span class="quotelev2">&gt; &gt;         free(x0);
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;         free(xs);
</span><br>
<span class="quotelev2">&gt; &gt;         free(xe);
</span><br>
<span class="quotelev2">&gt; &gt;         free(ys);
</span><br>
<span class="quotelev2">&gt; &gt;         free(ye);
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;         MPI_Finalize();
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;         return 0;
</span><br>
<span class="quotelev2">&gt; &gt;     }
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; -------------------------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; and the second file &quot;updateBound.c&quot; which sends the columns and rows
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; -------------------------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; #include &quot;mpi.h&quot;
</span><br>
<span class="quotelev2">&gt; &gt; #include &lt;stdio.h&gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; /*******************************************************************/
</span><br>
<span class="quotelev2">&gt; &gt; /*    Update Bounds of subdomain with me process      */
</span><br>
<span class="quotelev2">&gt; &gt; /*******************************************************************/
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;   void updateBound(double** x,int NeighBor[], MPI_Comm comm2d,
</span><br>
<span class="quotelev1">&gt; MPI_Datatype
</span><br>
<span class="quotelev2">&gt; &gt; column_type , int me, int* xs, int* ys, int* xe, int* ye, int xcell)
</span><br>
<span class="quotelev2">&gt; &gt;   {
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;   int S=0, E=1, N=2, W=3;
</span><br>
<span class="quotelev2">&gt; &gt;   int flag;
</span><br>
<span class="quotelev2">&gt; &gt;   MPI_Status status;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;   int i,j;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;          if(me==0) {printf(&quot;verif_update_before\n&quot;);
</span><br>
<span class="quotelev2">&gt; &gt;                     for(i=ys[me]-1;i&lt;=ye[me]+1;i++)
</span><br>
<span class="quotelev2">&gt; &gt;                     { for(j=xs[me]-1;j&lt;=xe[me]+1;j++)
</span><br>
<span class="quotelev2">&gt; &gt;                       { printf(&quot;%f &quot;,x[i][j]);
</span><br>
<span class="quotelev2">&gt; &gt;                       }
</span><br>
<span class="quotelev2">&gt; &gt;                       printf(&quot;\n&quot;);
</span><br>
<span class="quotelev2">&gt; &gt;                     }
</span><br>
<span class="quotelev2">&gt; &gt;                     printf(&quot;\n&quot;);
</span><br>
<span class="quotelev2">&gt; &gt;          }
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; /********* North/South communication **********************************/
</span><br>
<span class="quotelev2">&gt; &gt;   flag = 1;
</span><br>
<span class="quotelev2">&gt; &gt;   /*Send my boundary to North and receive from South*/
</span><br>
<span class="quotelev2">&gt; &gt;   MPI_Sendrecv(&amp;x[ys[me]][xs[me]], xcell, MPI_DOUBLE, NeighBor[N], flag,
</span><br>
<span class="quotelev2">&gt; &gt; &amp;x[ye[me]+1][xs[me]], xcell, MPI_DOUBLE, NeighBor[S], flag, comm2d,
</span><br>
<span class="quotelev2">&gt; &gt; &amp;status);
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;   /*Send my boundary to South and receive from North*/
</span><br>
<span class="quotelev2">&gt; &gt;   MPI_Sendrecv(&amp;x[ye[me]][xs[me]], xcell, MPI_DOUBLE, NeighBor[S], flag,
</span><br>
<span class="quotelev2">&gt; &gt; &amp;x[ys[me]-1][xs[me]], xcell, MPI_DOUBLE, NeighBor[N], flag, comm2d,
</span><br>
<span class="quotelev2">&gt; &gt; &amp;status);
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; /********* Est/West communication ************************************/
</span><br>
<span class="quotelev2">&gt; &gt;   flag = 2;
</span><br>
<span class="quotelev2">&gt; &gt;   /*Send my boundary to Est and receive from West*/
</span><br>
<span class="quotelev2">&gt; &gt;   MPI_Sendrecv(&amp;x[ys[me]][xe[me]], 1, column_type, NeighBor[E], flag,
</span><br>
<span class="quotelev2">&gt; &gt; &amp;x[ys[me]][xs[me]-1], 1, column_type, NeighBor[W], flag, comm2d,
</span><br>
<span class="quotelev1">&gt; &amp;status);
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;   /*Send my boundary to West and receive from Est*/
</span><br>
<span class="quotelev2">&gt; &gt;   MPI_Sendrecv(&amp;x[ys[me]][xs[me]], 1, column_type, NeighBor[W], flag,
</span><br>
<span class="quotelev2">&gt; &gt; &amp;x[ys[me]][xe[me]+1], 1, column_type, NeighBor[E], flag, comm2d,
</span><br>
<span class="quotelev1">&gt; &amp;status);
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;          if(me==0) {printf(&quot;verif_update_after\n&quot;);
</span><br>
<span class="quotelev2">&gt; &gt;                     for(i=ys[me]-1;i&lt;=ye[me]+1;i++)
</span><br>
<span class="quotelev2">&gt; &gt;                     { for(j=xs[me]-1;j&lt;=xe[me]+1;j++)
</span><br>
<span class="quotelev2">&gt; &gt;                       { printf(&quot;%f &quot;,x[i][j]);
</span><br>
<span class="quotelev2">&gt; &gt;                       }
</span><br>
<span class="quotelev2">&gt; &gt;                       printf(&quot;\n&quot;);
</span><br>
<span class="quotelev2">&gt; &gt;                     }
</span><br>
<span class="quotelev2">&gt; &gt;                     printf(&quot;\n&quot;);
</span><br>
<span class="quotelev2">&gt; &gt;          }
</span><br>
<span class="quotelev2">&gt; &gt;   }
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; ------------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Running with nproc=4, I print the values of the subarray with rank=0 (so
</span><br>
<span class="quotelev1">&gt; at
</span><br>
<span class="quotelev2">&gt; &gt; left bottom of the grid) and I get before and after the
</span><br>
<span class="quotelev2">&gt; &gt; bounds udpate  :
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; verif_update_before
</span><br>
<span class="quotelev2">&gt; &gt; 6.000000 7.000000 8.000000 9.000000
</span><br>
<span class="quotelev2">&gt; &gt; 7.000000 8.000000 9.000000 10.000000
</span><br>
<span class="quotelev2">&gt; &gt; 8.000000 9.000000 10.000000 11.000000
</span><br>
<span class="quotelev2">&gt; &gt; 9.000000 10.000000 11.000000 12.000000
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; verif_update_after
</span><br>
<span class="quotelev2">&gt; &gt; 6.000000 5.000000 6.000000 9.000000
</span><br>
<span class="quotelev2">&gt; &gt; 7.000000 8.000000 9.000000 12.000000
</span><br>
<span class="quotelev2">&gt; &gt; 8.000000 9.000000 10.000000 11.000000
</span><br>
<span class="quotelev2">&gt; &gt; 9.000000 10.000000 11.000000 12.000000
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; As you can see, after the udpate, I don't have the correct value ( in
</span><br>
<span class="quotelev2">&gt; &gt; underligned bold : 11.0 ) at the second element
</span><br>
<span class="quotelev2">&gt; &gt; of the column coming from the Est. I expected 13.0 instead of 11.0.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; So there's a problem with the column datatype which only send the first
</span><br>
<span class="quotelev2">&gt; &gt; element of this column.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; In &quot;example.c&quot;, I define the column as following :
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;       MPI_Type_vector( ycell, 1, size_tot_x, MPI_DOUBLE, &amp;column_type);
</span><br>
<span class="quotelev2">&gt; &gt;       MPI_Type_commit(&amp;column_type);
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; However, It seems ok and the computation of begin and end coordinates as
</span><br>
<span class="quotelev1">&gt; a
</span><br>
<span class="quotelev2">&gt; &gt; function of rank &quot;me&quot; is also good.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I make you notice there's no problem between the exchange of rows between
</span><br>
<span class="quotelev2">&gt; &gt; the North and the South, only
</span><br>
<span class="quotelev2">&gt; &gt; between columns.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; If you could help me, I don't know what to do.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Regards
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-19958/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19959.php">devendra rai: "[OMPI users] MPI_Irecv: Confusion with &lt;&lt;int count&gt;&gt; inputy parameter"</a>
<li><strong>Previous message:</strong> <a href="19957.php">Rayson Ho: "Re: [OMPI users] issue with column type in language C"</a>
<li><strong>In reply to:</strong> <a href="19957.php">Rayson Ho: "Re: [OMPI users] issue with column type in language C"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19968.php">Jeff Squyres: "Re: [OMPI users] issue with column type in language C"</a>
<li><strong>Reply:</strong> <a href="19968.php">Jeff Squyres: "Re: [OMPI users] issue with column type in language C"</a>
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

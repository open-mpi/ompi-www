<?
$subject_val = "Re: [OMPI users] issue with column type in language C";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Aug 19 12:25:20 2012" -->
<!-- isoreceived="20120819162520" -->
<!-- sent="Sun, 19 Aug 2012 12:25:14 -0400" -->
<!-- isosent="20120819162514" -->
<!-- name="Rayson Ho" -->
<!-- email="raysonlogin_at_[hidden]" -->
<!-- subject="Re: [OMPI users] issue with column type in language C" -->
<!-- id="CAHwLALMNgvxjRpH1C9u5qH0F05+_tES2A2Hf=mNMF-ANG5npKw_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CAEH56udP7dBhXLjj6xYF8q4=oNuyJ7VdfTmLqbe1zvhf+qQzLw_at_mail.gmail.com" -->
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
<strong>From:</strong> Rayson Ho (<em>raysonlogin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-08-19 12:25:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19958.php">Christian Perrier: "Re: [OMPI users] issue with column type in language C"</a>
<li><strong>Previous message:</strong> <a href="19956.php">Bill Mulberry: "[OMPI users] MPI/FORTRAN on a cluster system"</a>
<li><strong>In reply to:</strong> <a href="19955.php">Christian Perrier: "[OMPI users] issue with column type in language C"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19958.php">Christian Perrier: "Re: [OMPI users] issue with column type in language C"</a>
<li><strong>Reply:</strong> <a href="19958.php">Christian Perrier: "Re: [OMPI users] issue with column type in language C"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Christian,
<br>
<p>The code you posted is very similar to another school assignment sent
<br>
to this list 2 years ago:
<br>
<p><a href="http://www.open-mpi.org/community/lists/users/2010/10/14619.php">http://www.open-mpi.org/community/lists/users/2010/10/14619.php</a>
<br>
<p>At that time, the code was written in Fortran, and now it is written
<br>
in C - however, the variable names, logic, etc are quite similar! :-D
<br>
<p>Remember, debugging and bug fix is part of the (home) work!
<br>
<p>Rayson
<br>
<p>==================================================
<br>
Open Grid Scheduler - The Official Open Source Grid Engine
<br>
<a href="http://gridscheduler.sourceforge.net/">http://gridscheduler.sourceforge.net/</a>
<br>
<p><p>On Sun, Aug 19, 2012 at 12:59 AM, Christian Perrier
<br>
&lt;christian01.perrier_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have a problem with MPI_Senrecv communication where I send columns on
</span><br>
<span class="quotelev1">&gt; edges between processes.
</span><br>
<span class="quotelev1">&gt; For debugging, I show you below a basic example where I initialize a 10x10
</span><br>
<span class="quotelev1">&gt; matrix (&quot;x0&quot; array) with x_domain=4
</span><br>
<span class="quotelev1">&gt; and y_domain=4. For the test, I simply initialize the 2D array values with
</span><br>
<span class="quotelev1">&gt; x0[i][j] = i+j . After, in updateBound.c&quot;, I'm
</span><br>
<span class="quotelev1">&gt; using the MPI_Sendrecv functions for the North-South and Est-West process.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Here's the main program &quot;example.c&quot; :
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -------------------------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;stdio.h&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;stdlib.h&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;math.h&gt;
</span><br>
<span class="quotelev1">&gt; #include &quot;mpi.h&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; int main(int argc, char *argv[])
</span><br>
<span class="quotelev1">&gt;     {
</span><br>
<span class="quotelev1">&gt;       /* size of the discretization */
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;       double** x;
</span><br>
<span class="quotelev1">&gt;       double** x0;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;       int i,j,k,l;
</span><br>
<span class="quotelev1">&gt;       int nproc;
</span><br>
<span class="quotelev1">&gt;       int ndims;
</span><br>
<span class="quotelev1">&gt;       int S=0, E=1, N=2, W=3;
</span><br>
<span class="quotelev1">&gt;       int NeighBor[4];
</span><br>
<span class="quotelev1">&gt;       int xcell, ycell, size_tot_x, size_tot_y;
</span><br>
<span class="quotelev1">&gt;       int *xs,*ys,*xe,*ye;
</span><br>
<span class="quotelev1">&gt;       int size_x = 4;
</span><br>
<span class="quotelev1">&gt;       int size_y = 4;
</span><br>
<span class="quotelev1">&gt;       int me;
</span><br>
<span class="quotelev1">&gt;       int x_domains=2;
</span><br>
<span class="quotelev1">&gt;       int y_domains=2;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;       MPI_Comm comm, comm2d;
</span><br>
<span class="quotelev1">&gt;       int dims[2];
</span><br>
<span class="quotelev1">&gt;       int periods[2];
</span><br>
<span class="quotelev1">&gt;       int reorganisation = 0;
</span><br>
<span class="quotelev1">&gt;       int row;
</span><br>
<span class="quotelev1">&gt;       MPI_Datatype column_type;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;       size_tot_x=size_x+2*x_domains+2;
</span><br>
<span class="quotelev1">&gt;       size_tot_y=size_y+2*y_domains+2;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;       xcell=(size_x/x_domains);
</span><br>
<span class="quotelev1">&gt;       ycell=(size_y/y_domains);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;       MPI_Init(&amp;argc, &amp;argv);
</span><br>
<span class="quotelev1">&gt;       comm = MPI_COMM_WORLD;
</span><br>
<span class="quotelev1">&gt;       MPI_Comm_size(comm,&amp;nproc);
</span><br>
<span class="quotelev1">&gt;       MPI_Comm_rank(comm,&amp;me);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;       x = malloc(size_tot_y*sizeof(double*));
</span><br>
<span class="quotelev1">&gt;       x0 = malloc(size_tot_y*sizeof(double*));
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;       for(j=0;j&lt;=size_tot_y-1;j++) {
</span><br>
<span class="quotelev1">&gt;         x[j] = malloc(size_tot_x*sizeof(double));
</span><br>
<span class="quotelev1">&gt;         x0[j] = malloc(size_tot_x*sizeof(double));
</span><br>
<span class="quotelev1">&gt;       }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;       xs = malloc(nproc*sizeof(int));
</span><br>
<span class="quotelev1">&gt;       xe = malloc(nproc*sizeof(int));
</span><br>
<span class="quotelev1">&gt;       ys = malloc(nproc*sizeof(int));
</span><br>
<span class="quotelev1">&gt;       ye = malloc(nproc*sizeof(int));
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;       /* Create 2D cartesian grid */
</span><br>
<span class="quotelev1">&gt;       periods[0] = 0;
</span><br>
<span class="quotelev1">&gt;       periods[1] = 0;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;       ndims = 2;
</span><br>
<span class="quotelev1">&gt;       dims[0]=x_domains;
</span><br>
<span class="quotelev1">&gt;       dims[1]=y_domains;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;       MPI_Cart_create(comm, ndims, dims, periods, reorganisation, &amp;comm2d);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;       /* Identify neighbors */
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;       NeighBor[0] = MPI_PROC_NULL;
</span><br>
<span class="quotelev1">&gt;       NeighBor[1] = MPI_PROC_NULL;
</span><br>
<span class="quotelev1">&gt;       NeighBor[2] = MPI_PROC_NULL;
</span><br>
<span class="quotelev1">&gt;       NeighBor[3] = MPI_PROC_NULL;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;       /* Left/West and right/Est neigbors */
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;       MPI_Cart_shift(comm2d,0,1,&amp;NeighBor[W],&amp;NeighBor[E]);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;       /* Bottom/South and Upper/North neigbors */
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;       MPI_Cart_shift(comm2d,1,1,&amp;NeighBor[S],&amp;NeighBor[N]);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;       /* coordinates of current cell with me rank */
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;       xcell=(size_x/x_domains);
</span><br>
<span class="quotelev1">&gt;       ycell=(size_y/y_domains);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;       ys[me]=(y_domains-me%(y_domains)-1)*(ycell+2)+2;
</span><br>
<span class="quotelev1">&gt;       ye[me]=ys[me]+ycell-1;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;       for(i=0;i&lt;=y_domains-1;i++)
</span><br>
<span class="quotelev1">&gt;       {xs[i]=2;}
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;       for(i=0;i&lt;=y_domains-1;i++)
</span><br>
<span class="quotelev1">&gt;       {xe[i]=xs[i]+xcell-1;}
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;       for(i=1;i&lt;=(x_domains-1);i++)
</span><br>
<span class="quotelev1">&gt;          { for(j=0;j&lt;=(y_domains-1);j++)
</span><br>
<span class="quotelev1">&gt;               {
</span><br>
<span class="quotelev1">&gt;                xs[i*y_domains+j]=xs[(i-1)*y_domains+j]+xcell+2;
</span><br>
<span class="quotelev1">&gt;                xe[i*y_domains+j]=xs[i*y_domains+j]+xcell-1;
</span><br>
<span class="quotelev1">&gt;               }
</span><br>
<span class="quotelev1">&gt;          }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;       for(i=0;i&lt;=size_tot_y-1;i++)
</span><br>
<span class="quotelev1">&gt;           { for(j=0;j&lt;=size_tot_x-1;j++)
</span><br>
<span class="quotelev1">&gt;             { x0[i][j]= i+j;
</span><br>
<span class="quotelev1">&gt;         //  printf(&quot;%f\n&quot;,x0[i][j]);
</span><br>
<span class="quotelev1">&gt;         }
</span><br>
<span class="quotelev1">&gt;       }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;       /*  Create column data type to communicate with South and North
</span><br>
<span class="quotelev1">&gt; neighbors */
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;       MPI_Type_vector( ycell, 1, size_tot_x, MPI_DOUBLE, &amp;column_type);
</span><br>
<span class="quotelev1">&gt;       MPI_Type_commit(&amp;column_type);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;       updateBound(x0, NeighBor, comm2d, column_type, me, xs, ys, xe, ye,
</span><br>
<span class="quotelev1">&gt; xcell);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;               for(i=0;i&lt;=size_tot_y-1;i++)
</span><br>
<span class="quotelev1">&gt;            {
</span><br>
<span class="quotelev1">&gt;             free(x[i]);
</span><br>
<span class="quotelev1">&gt;             free(x0[i]);
</span><br>
<span class="quotelev1">&gt;            }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         free(x);
</span><br>
<span class="quotelev1">&gt;         free(x0);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         free(xs);
</span><br>
<span class="quotelev1">&gt;         free(xe);
</span><br>
<span class="quotelev1">&gt;         free(ys);
</span><br>
<span class="quotelev1">&gt;         free(ye);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         MPI_Finalize();
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         return 0;
</span><br>
<span class="quotelev1">&gt;     }
</span><br>
<span class="quotelev1">&gt; -------------------------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; and the second file &quot;updateBound.c&quot; which sends the columns and rows
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -------------------------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #include &quot;mpi.h&quot;
</span><br>
<span class="quotelev1">&gt; #include &lt;stdio.h&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; /*******************************************************************/
</span><br>
<span class="quotelev1">&gt; /*    Update Bounds of subdomain with me process      */
</span><br>
<span class="quotelev1">&gt; /*******************************************************************/
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   void updateBound(double** x,int NeighBor[], MPI_Comm comm2d, MPI_Datatype
</span><br>
<span class="quotelev1">&gt; column_type , int me, int* xs, int* ys, int* xe, int* ye, int xcell)
</span><br>
<span class="quotelev1">&gt;   {
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   int S=0, E=1, N=2, W=3;
</span><br>
<span class="quotelev1">&gt;   int flag;
</span><br>
<span class="quotelev1">&gt;   MPI_Status status;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   int i,j;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;          if(me==0) {printf(&quot;verif_update_before\n&quot;);
</span><br>
<span class="quotelev1">&gt;                     for(i=ys[me]-1;i&lt;=ye[me]+1;i++)
</span><br>
<span class="quotelev1">&gt;                     { for(j=xs[me]-1;j&lt;=xe[me]+1;j++)
</span><br>
<span class="quotelev1">&gt;                       { printf(&quot;%f &quot;,x[i][j]);
</span><br>
<span class="quotelev1">&gt;                       }
</span><br>
<span class="quotelev1">&gt;                       printf(&quot;\n&quot;);
</span><br>
<span class="quotelev1">&gt;                     }
</span><br>
<span class="quotelev1">&gt;                     printf(&quot;\n&quot;);
</span><br>
<span class="quotelev1">&gt;          }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; /********* North/South communication **********************************/
</span><br>
<span class="quotelev1">&gt;   flag = 1;
</span><br>
<span class="quotelev1">&gt;   /*Send my boundary to North and receive from South*/
</span><br>
<span class="quotelev1">&gt;   MPI_Sendrecv(&amp;x[ys[me]][xs[me]], xcell, MPI_DOUBLE, NeighBor[N], flag,
</span><br>
<span class="quotelev1">&gt; &amp;x[ye[me]+1][xs[me]], xcell, MPI_DOUBLE, NeighBor[S], flag, comm2d,
</span><br>
<span class="quotelev1">&gt; &amp;status);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   /*Send my boundary to South and receive from North*/
</span><br>
<span class="quotelev1">&gt;   MPI_Sendrecv(&amp;x[ye[me]][xs[me]], xcell, MPI_DOUBLE, NeighBor[S], flag,
</span><br>
<span class="quotelev1">&gt; &amp;x[ys[me]-1][xs[me]], xcell, MPI_DOUBLE, NeighBor[N], flag, comm2d,
</span><br>
<span class="quotelev1">&gt; &amp;status);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; /********* Est/West communication ************************************/
</span><br>
<span class="quotelev1">&gt;   flag = 2;
</span><br>
<span class="quotelev1">&gt;   /*Send my boundary to Est and receive from West*/
</span><br>
<span class="quotelev1">&gt;   MPI_Sendrecv(&amp;x[ys[me]][xe[me]], 1, column_type, NeighBor[E], flag,
</span><br>
<span class="quotelev1">&gt; &amp;x[ys[me]][xs[me]-1], 1, column_type, NeighBor[W], flag, comm2d, &amp;status);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   /*Send my boundary to West and receive from Est*/
</span><br>
<span class="quotelev1">&gt;   MPI_Sendrecv(&amp;x[ys[me]][xs[me]], 1, column_type, NeighBor[W], flag,
</span><br>
<span class="quotelev1">&gt; &amp;x[ys[me]][xe[me]+1], 1, column_type, NeighBor[E], flag, comm2d, &amp;status);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;          if(me==0) {printf(&quot;verif_update_after\n&quot;);
</span><br>
<span class="quotelev1">&gt;                     for(i=ys[me]-1;i&lt;=ye[me]+1;i++)
</span><br>
<span class="quotelev1">&gt;                     { for(j=xs[me]-1;j&lt;=xe[me]+1;j++)
</span><br>
<span class="quotelev1">&gt;                       { printf(&quot;%f &quot;,x[i][j]);
</span><br>
<span class="quotelev1">&gt;                       }
</span><br>
<span class="quotelev1">&gt;                       printf(&quot;\n&quot;);
</span><br>
<span class="quotelev1">&gt;                     }
</span><br>
<span class="quotelev1">&gt;                     printf(&quot;\n&quot;);
</span><br>
<span class="quotelev1">&gt;          }
</span><br>
<span class="quotelev1">&gt;   }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ------------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Running with nproc=4, I print the values of the subarray with rank=0 (so at
</span><br>
<span class="quotelev1">&gt; left bottom of the grid) and I get before and after the
</span><br>
<span class="quotelev1">&gt; bounds udpate  :
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; verif_update_before
</span><br>
<span class="quotelev1">&gt; 6.000000 7.000000 8.000000 9.000000
</span><br>
<span class="quotelev1">&gt; 7.000000 8.000000 9.000000 10.000000
</span><br>
<span class="quotelev1">&gt; 8.000000 9.000000 10.000000 11.000000
</span><br>
<span class="quotelev1">&gt; 9.000000 10.000000 11.000000 12.000000
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; verif_update_after
</span><br>
<span class="quotelev1">&gt; 6.000000 5.000000 6.000000 9.000000
</span><br>
<span class="quotelev1">&gt; 7.000000 8.000000 9.000000 12.000000
</span><br>
<span class="quotelev1">&gt; 8.000000 9.000000 10.000000 11.000000
</span><br>
<span class="quotelev1">&gt; 9.000000 10.000000 11.000000 12.000000
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; As you can see, after the udpate, I don't have the correct value ( in
</span><br>
<span class="quotelev1">&gt; underligned bold : 11.0 ) at the second element
</span><br>
<span class="quotelev1">&gt; of the column coming from the Est. I expected 13.0 instead of 11.0.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So there's a problem with the column datatype which only send the first
</span><br>
<span class="quotelev1">&gt; element of this column.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In &quot;example.c&quot;, I define the column as following :
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;       MPI_Type_vector( ycell, 1, size_tot_x, MPI_DOUBLE, &amp;column_type);
</span><br>
<span class="quotelev1">&gt;       MPI_Type_commit(&amp;column_type);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; However, It seems ok and the computation of begin and end coordinates as a
</span><br>
<span class="quotelev1">&gt; function of rank &quot;me&quot; is also good.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I make you notice there's no problem between the exchange of rows between
</span><br>
<span class="quotelev1">&gt; the North and the South, only
</span><br>
<span class="quotelev1">&gt; between columns.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If you could help me, I don't know what to do.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Regards
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19958.php">Christian Perrier: "Re: [OMPI users] issue with column type in language C"</a>
<li><strong>Previous message:</strong> <a href="19956.php">Bill Mulberry: "[OMPI users] MPI/FORTRAN on a cluster system"</a>
<li><strong>In reply to:</strong> <a href="19955.php">Christian Perrier: "[OMPI users] issue with column type in language C"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19958.php">Christian Perrier: "Re: [OMPI users] issue with column type in language C"</a>
<li><strong>Reply:</strong> <a href="19958.php">Christian Perrier: "Re: [OMPI users] issue with column type in language C"</a>
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

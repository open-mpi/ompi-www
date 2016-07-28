<?
$subject_val = "Re: [OMPI users] wrong results from MPI_Scatter with strided vector";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jun 16 09:31:27 2008" -->
<!-- isoreceived="20080616133127" -->
<!-- sent="Mon, 16 Jun 2008 09:31:09 -0400" -->
<!-- isosent="20080616133109" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI users] wrong results from MPI_Scatter with strided vector" -->
<!-- id="03DA0837-5BC0-42C4-8F88-3E222E5C574A_at_eecs.utk.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="200806160636.m5G6aXPj009462_at_rs1.informatik.hs-fulda.de" -->
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
<strong>Subject:</strong> Re: [OMPI users] wrong results from MPI_Scatter with strided vector<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-06-16 09:31:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5882.php">pat.o'bryant_at_[hidden]: "[OMPI users] Application Context and OpenMPI 1.2.4"</a>
<li><strong>Previous message:</strong> <a href="5880.php">Siegmar Gross: "[OMPI users] wrong results from MPI_Scatter with strided vector"</a>
<li><strong>In reply to:</strong> <a href="5880.php">Siegmar Gross: "[OMPI users] wrong results from MPI_Scatter with strided vector"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The derived datatype used together with the scatter operation is  
<br>
wrong. Your datatype looks correct, except when you use it with a count.
<br>
<p>A MPI datatype is defined by its size and content, as well as its  
<br>
extent. When multiple elements of the same size are used in a  
<br>
contiguous manner (such in your scatter operation with a count &gt; 1),  
<br>
the extent is used to compute where the next element will start. As,  
<br>
your extent is as big as the size of the derived datatype, the first  
<br>
elements of the second structure will start after the last element of  
<br>
the first structure. Which obviously will not do what you expect.
<br>
<p>/* Create a type that span over the whole column */
<br>
MPI_Type_vector( N, 1, N, MPI_DOUBLE, &amp;temp_type );
<br>
/* Restrict the extent of this type, in such a way that when used with  
<br>
a count
<br>
&nbsp;&nbsp;* the extent of the whole column is just one element.
<br>
&nbsp;&nbsp;*/
<br>
MPI_Type_create_resized( temp_type, 0, sizeof(double), column_type );
<br>
<p>MPI_Scatter( sbuf, 1, column_type, rbuf, 1, column_type, root, comm );
<br>
<p>&nbsp;&nbsp;&nbsp;george.
<br>
<p>On Jun 16, 2008, at 2:36 AM, Siegmar Gross wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have a problem with derived data types and MPI_Scatter/MPI_Gather  
</span><br>
<span class="quotelev1">&gt; in C
</span><br>
<span class="quotelev1">&gt; (Solaris 10 sparc, openmpi-1.2.4).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I want to distribute the columns of a matrix with MPI_Scatter/ 
</span><br>
<span class="quotelev1">&gt; MPI_Gather.
</span><br>
<span class="quotelev1">&gt; Unfortunately my program didn't work with my derived data type, so I  
</span><br>
<span class="quotelev1">&gt; used
</span><br>
<span class="quotelev1">&gt; a 2x2 matrix to figure out what's wrong and added a printf statement  
</span><br>
<span class="quotelev1">&gt; after
</span><br>
<span class="quotelev1">&gt; MPI_Scatter to print the contents of the column vector of each  
</span><br>
<span class="quotelev1">&gt; process. The
</span><br>
<span class="quotelev1">&gt; process with rank 1 didn't get the values &quot;2&quot; and &quot;4&quot; (see below),  
</span><br>
<span class="quotelev1">&gt; but more
</span><br>
<span class="quotelev1">&gt; or less 0. Now I used a 4x2 matrix and still a 2-element column  
</span><br>
<span class="quotelev1">&gt; vector (so
</span><br>
<span class="quotelev1">&gt; I should see the upper 2x2 &quot;matrix&quot; in my columns) to get an idea  
</span><br>
<span class="quotelev1">&gt; which
</span><br>
<span class="quotelev1">&gt; values are used for process 1. As you can see below it got &quot;5&quot; and  
</span><br>
<span class="quotelev1">&gt; &quot;7&quot;, i.e.
</span><br>
<span class="quotelev1">&gt; the values of the first column of the lower 2x2 matrix and not the  
</span><br>
<span class="quotelev1">&gt; values of
</span><br>
<span class="quotelev1">&gt; the block which starts after the first element of the first block  
</span><br>
<span class="quotelev1">&gt; (a[2][0]
</span><br>
<span class="quotelev1">&gt; instead of a[0][1]).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Since I wasn't sure if I could use MPI_Type_struct I rewrote the  
</span><br>
<span class="quotelev1">&gt; program
</span><br>
<span class="quotelev1">&gt; with MPI_Type_vector. This time the result was better but still not
</span><br>
<span class="quotelev1">&gt; satisfying. Process 1 got values from the second column but one  
</span><br>
<span class="quotelev1">&gt; value too
</span><br>
<span class="quotelev1">&gt; late (starting with a[1][1] instead of a[1][0]).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I run into the same problem with MPICH, MPICH2, and LAM-MPI, so that  
</span><br>
<span class="quotelev1">&gt; I have
</span><br>
<span class="quotelev1">&gt; probably misunderstood something or have a programming error. Since  
</span><br>
<span class="quotelev1">&gt; I dont't
</span><br>
<span class="quotelev1">&gt; know how to proceed, I would be very grateful if someone could tell  
</span><br>
<span class="quotelev1">&gt; me if I
</span><br>
<span class="quotelev1">&gt; can't use a strided vector with MPI_Scatter or if it is eventually a  
</span><br>
<span class="quotelev1">&gt; bug in
</span><br>
<span class="quotelev1">&gt; the implementations of the MPI libraries (how unlikely it is).  
</span><br>
<span class="quotelev1">&gt; Mainly I've
</span><br>
<span class="quotelev1">&gt; implemented this part in the following way (the full program code is  
</span><br>
<span class="quotelev1">&gt; appended).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  int blockcounts[2] = {1, 1};
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  MPI_Datatype  types[2]       = {MPI_DOUBLE, MPI_UB};
</span><br>
<span class="quotelev1">&gt;  MPI_Aint      offsets[2]     = {0, Q * sizeof (double)};
</span><br>
<span class="quotelev1">&gt;  MPI_Datatype  coltype;
</span><br>
<span class="quotelev1">&gt;  MPI_Type_struct (2, blockcounts, offsets, types, &amp;coltype);
</span><br>
<span class="quotelev1">&gt;  MPI_Type_commit (&amp;coltype);
</span><br>
<span class="quotelev1">&gt;  MPI_Scatter (matrix, P, coltype, column, P, MPI_DOUBLE, 0,
</span><br>
<span class="quotelev1">&gt;               MPI_COMM_WORLD);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; MPI_Type_struct
</span><br>
<span class="quotelev1">&gt; ===============
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; tyr e5 158 mpiexec -mca btl ^udapl -np 2 e5_1a
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; original matrix:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     1     2
</span><br>
<span class="quotelev1">&gt;     3     4
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; rank: 0  c0: 1  c1: 3
</span><br>
<span class="quotelev1">&gt; rank: 1  c0: 5.51719e-313  c1: 4.24399e-314
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; tyr e5 160 mpiexec -mca btl ^udapl -np 2 e5_1a
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; original matrix:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     1     2
</span><br>
<span class="quotelev1">&gt;     3     4
</span><br>
<span class="quotelev1">&gt;     5     6
</span><br>
<span class="quotelev1">&gt;     7     8
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; rank: 0  c0: 1  c1: 3
</span><br>
<span class="quotelev1">&gt; rank: 1  c0: 5  c1: 7
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; MPI_Type_vector
</span><br>
<span class="quotelev1">&gt; ===============
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; tyr e5 119 mpiexec -mca btl ^udapl -np 2 e5_1b
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; original matrix:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     1     2
</span><br>
<span class="quotelev1">&gt;     3     4
</span><br>
<span class="quotelev1">&gt;     5     6
</span><br>
<span class="quotelev1">&gt;     7     8
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; rank: 0  c0: 1  c1: 3
</span><br>
<span class="quotelev1">&gt; rank: 1  c0: 4  c1: 6
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thank you very much for any help or suggestions in advance.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Kind regards
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Siegmar
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;stdio.h&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;stdlib.h&gt;
</span><br>
<span class="quotelev1">&gt; #include &quot;mpi.h&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #define	P		4		/* # of rows			*/
</span><br>
<span class="quotelev1">&gt; #define Q		2		/* # of columns			*/
</span><br>
<span class="quotelev1">&gt; #define FAKTOR		2		/* multiplicator for col. elem.	*/
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; static void print_matrix (int p, int q, double **mat);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; int main (int argc, char *argv[])
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt;  int    ntasks,			/* number of parallel tasks	*/
</span><br>
<span class="quotelev1">&gt;         mytid,				/* my task id			*/
</span><br>
<span class="quotelev1">&gt;         namelen,			/* length of processor name	*/
</span><br>
<span class="quotelev1">&gt;         i, j,				/* loop variables		*/
</span><br>
<span class="quotelev1">&gt;         tmp;				/* temporary value		*/
</span><br>
<span class="quotelev1">&gt;  double matrix[P][Q],
</span><br>
<span class="quotelev1">&gt; 	 column[2];
</span><br>
<span class="quotelev1">&gt;  /*	 column[P];*/
</span><br>
<span class="quotelev1">&gt;  int	 blockcounts[2] = {1, 1};
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  MPI_Datatype	types[2]       = {MPI_DOUBLE, MPI_UB};
</span><br>
<span class="quotelev1">&gt;  MPI_Aint	offsets[2]     = {0, Q * sizeof (double)};
</span><br>
<span class="quotelev1">&gt;  MPI_Datatype	coltype;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  MPI_Init (&amp;argc, &amp;argv);
</span><br>
<span class="quotelev1">&gt;  MPI_Comm_rank (MPI_COMM_WORLD, &amp;mytid);
</span><br>
<span class="quotelev1">&gt;  MPI_Comm_size (MPI_COMM_WORLD, &amp;ntasks);
</span><br>
<span class="quotelev1">&gt;  /* check that we have the correct number of processes in our  
</span><br>
<span class="quotelev1">&gt; universe	*/
</span><br>
<span class="quotelev1">&gt;  if (mytid == 0)
</span><br>
<span class="quotelev1">&gt;  {
</span><br>
<span class="quotelev1">&gt;    if (ntasks != Q)
</span><br>
<span class="quotelev1">&gt;    {
</span><br>
<span class="quotelev1">&gt;      printf (&quot;\n\nWe need exactly %d processes.\n&quot;
</span><br>
<span class="quotelev1">&gt; 	      &quot;Usage: mpirun -w -np %d N %s\n\n\n&quot;,
</span><br>
<span class="quotelev1">&gt; 	      Q, Q, argv[0]);
</span><br>
<span class="quotelev1">&gt;    }
</span><br>
<span class="quotelev1">&gt;  }
</span><br>
<span class="quotelev1">&gt;  if (ntasks != Q)
</span><br>
<span class="quotelev1">&gt;  {
</span><br>
<span class="quotelev1">&gt;    MPI_Finalize ();
</span><br>
<span class="quotelev1">&gt;    exit (EXIT_FAILURE);
</span><br>
<span class="quotelev1">&gt;  }
</span><br>
<span class="quotelev1">&gt;  /* build the new type for a strided vector				*/
</span><br>
<span class="quotelev1">&gt;  MPI_Type_struct (2, blockcounts, offsets, types, &amp;coltype);
</span><br>
<span class="quotelev1">&gt;  MPI_Type_commit (&amp;coltype);
</span><br>
<span class="quotelev1">&gt;  if (mytid == 0)
</span><br>
<span class="quotelev1">&gt;  {
</span><br>
<span class="quotelev1">&gt;    tmp = 1;
</span><br>
<span class="quotelev1">&gt;    for (i = 0; i &lt; P; ++i)		/* initialize matrix		*/
</span><br>
<span class="quotelev1">&gt;    {
</span><br>
<span class="quotelev1">&gt;      for (j = 0; j &lt; Q; ++j)
</span><br>
<span class="quotelev1">&gt;      {
</span><br>
<span class="quotelev1">&gt; 	matrix[i][j] = tmp++;
</span><br>
<span class="quotelev1">&gt;      }
</span><br>
<span class="quotelev1">&gt;    }
</span><br>
<span class="quotelev1">&gt;    printf (&quot;\n\noriginal matrix:\n\n&quot;);
</span><br>
<span class="quotelev1">&gt;    print_matrix (P, Q, (double **) matrix);
</span><br>
<span class="quotelev1">&gt;  }
</span><br>
<span class="quotelev1">&gt;  /* distribute columns							*/
</span><br>
<span class="quotelev1">&gt;  MPI_Scatter (matrix, 2, coltype, column, 2, MPI_DOUBLE, 0,
</span><br>
<span class="quotelev1">&gt;  /*  MPI_Scatter (matrix, P, coltype, column, P, MPI_DOUBLE, 0,*/
</span><br>
<span class="quotelev1">&gt; 	       MPI_COMM_WORLD);
</span><br>
<span class="quotelev1">&gt;  printf (&quot;rank: %d  c0: %g  c1: %g\n&quot;, mytid, column[0], column[1]);
</span><br>
<span class="quotelev1">&gt;  for (i = 0; i &lt; 2; ++i)
</span><br>
<span class="quotelev1">&gt;  /*  for (i = 0; i &lt; P; ++i)*/
</span><br>
<span class="quotelev1">&gt;  {
</span><br>
<span class="quotelev1">&gt;    if ((mytid % 2) == 0)
</span><br>
<span class="quotelev1">&gt;    {
</span><br>
<span class="quotelev1">&gt;      column[i] = column[i] * column[i];
</span><br>
<span class="quotelev1">&gt;    }
</span><br>
<span class="quotelev1">&gt;    else
</span><br>
<span class="quotelev1">&gt;    {
</span><br>
<span class="quotelev1">&gt;      column[i] = column[i] * FAKTOR;
</span><br>
<span class="quotelev1">&gt;    }
</span><br>
<span class="quotelev1">&gt;  }
</span><br>
<span class="quotelev1">&gt;  /* wait for result vectors		     				*/
</span><br>
<span class="quotelev1">&gt;  MPI_Gather (column, 2, MPI_DOUBLE, matrix, 2, coltype, 0,
</span><br>
<span class="quotelev1">&gt;  /*  MPI_Gather (column, P, MPI_DOUBLE, matrix, P, coltype, 0,*/
</span><br>
<span class="quotelev1">&gt; 	      MPI_COMM_WORLD);
</span><br>
<span class="quotelev1">&gt;  if (mytid == 0)
</span><br>
<span class="quotelev1">&gt;  {
</span><br>
<span class="quotelev1">&gt;    printf (&quot;\n\nresult matrix:\n&quot;
</span><br>
<span class="quotelev1">&gt; 	    &quot;(odd columns: elements squared; even columns: elements &quot;
</span><br>
<span class="quotelev1">&gt; 	    &quot;multiplied with %d)\n\n&quot;, FAKTOR);
</span><br>
<span class="quotelev1">&gt;    print_matrix (P, Q, (double **) matrix);
</span><br>
<span class="quotelev1">&gt;  }
</span><br>
<span class="quotelev1">&gt;  MPI_Type_free (&amp;coltype);
</span><br>
<span class="quotelev1">&gt;  MPI_Finalize ();
</span><br>
<span class="quotelev1">&gt;  return EXIT_SUCCESS;
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; /* print the values of a matrix
</span><br>
<span class="quotelev1">&gt; *
</span><br>
<span class="quotelev1">&gt; * input parameters:	p	number of rows
</span><br>
<span class="quotelev1">&gt; *			q	number of columns
</span><br>
<span class="quotelev1">&gt; *			mat	2D-matrix of &quot;double&quot; values
</span><br>
<span class="quotelev1">&gt; * output parameters:	none
</span><br>
<span class="quotelev1">&gt; * return value:	none
</span><br>
<span class="quotelev1">&gt; * side effects:	none
</span><br>
<span class="quotelev1">&gt; *
</span><br>
<span class="quotelev1">&gt; */
</span><br>
<span class="quotelev1">&gt; void print_matrix (int p, int q, double **mat)
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt;  int i, j;				/* loop variables		*/
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  for (i = 0; i &lt; p; ++i)
</span><br>
<span class="quotelev1">&gt;  {
</span><br>
<span class="quotelev1">&gt;    for (j = 0; j &lt; q; ++j)
</span><br>
<span class="quotelev1">&gt;    {
</span><br>
<span class="quotelev1">&gt;      printf (&quot;%6g&quot;, *((double *) mat + i * q + j));
</span><br>
<span class="quotelev1">&gt;    }
</span><br>
<span class="quotelev1">&gt;    printf (&quot;\n&quot;);
</span><br>
<span class="quotelev1">&gt;  }
</span><br>
<span class="quotelev1">&gt;  printf (&quot;\n&quot;);
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;stdio.h&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;stdlib.h&gt;
</span><br>
<span class="quotelev1">&gt; #include &quot;mpi.h&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #define	P		4		/* # of rows			*/
</span><br>
<span class="quotelev1">&gt; #define Q		2		/* # of columns			*/
</span><br>
<span class="quotelev1">&gt; #define FAKTOR		2		/* multiplicator for col. elem.	*/
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; static void print_matrix (int p, int q, double **mat);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; int main (int argc, char *argv[])
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt;  int    ntasks,			/* number of parallel tasks	*/
</span><br>
<span class="quotelev1">&gt;         mytid,				/* my task id			*/
</span><br>
<span class="quotelev1">&gt;         namelen,			/* length of processor name	*/
</span><br>
<span class="quotelev1">&gt;         i, j,				/* loop variables		*/
</span><br>
<span class="quotelev1">&gt;         tmp;				/* temporary value		*/
</span><br>
<span class="quotelev1">&gt;  double matrix[P][Q],
</span><br>
<span class="quotelev1">&gt; 	 column[2];
</span><br>
<span class="quotelev1">&gt;  MPI_Datatype	coltype;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  MPI_Init (&amp;argc, &amp;argv);
</span><br>
<span class="quotelev1">&gt;  MPI_Comm_rank (MPI_COMM_WORLD, &amp;mytid);
</span><br>
<span class="quotelev1">&gt;  MPI_Comm_size (MPI_COMM_WORLD, &amp;ntasks);
</span><br>
<span class="quotelev1">&gt;  /* check that we have the correct number of processes in our  
</span><br>
<span class="quotelev1">&gt; universe	*/
</span><br>
<span class="quotelev1">&gt;  if (mytid == 0)
</span><br>
<span class="quotelev1">&gt;  {
</span><br>
<span class="quotelev1">&gt;    if (ntasks != Q)
</span><br>
<span class="quotelev1">&gt;    {
</span><br>
<span class="quotelev1">&gt;      printf (&quot;\n\nWe need exactly %d processes.\n&quot;
</span><br>
<span class="quotelev1">&gt; 	      &quot;Usage: mpirun -w -np %d N %s\n\n\n&quot;,
</span><br>
<span class="quotelev1">&gt; 	      Q, Q, argv[0]);
</span><br>
<span class="quotelev1">&gt;    }
</span><br>
<span class="quotelev1">&gt;  }
</span><br>
<span class="quotelev1">&gt;  if (ntasks != Q)
</span><br>
<span class="quotelev1">&gt;  {
</span><br>
<span class="quotelev1">&gt;    MPI_Finalize ();
</span><br>
<span class="quotelev1">&gt;    exit (EXIT_FAILURE);
</span><br>
<span class="quotelev1">&gt;  }
</span><br>
<span class="quotelev1">&gt;  /* build the new type for a strided vector				*/
</span><br>
<span class="quotelev1">&gt;  MPI_Type_vector (2, 1, Q, MPI_DOUBLE, &amp;coltype);
</span><br>
<span class="quotelev1">&gt;  MPI_Type_commit (&amp;coltype);
</span><br>
<span class="quotelev1">&gt;  if (mytid == 0)
</span><br>
<span class="quotelev1">&gt;  {
</span><br>
<span class="quotelev1">&gt;    tmp = 1;
</span><br>
<span class="quotelev1">&gt;    for (i = 0; i &lt; P; ++i)		/* initialize matrix		*/
</span><br>
<span class="quotelev1">&gt;    {
</span><br>
<span class="quotelev1">&gt;      for (j = 0; j &lt; Q; ++j)
</span><br>
<span class="quotelev1">&gt;      {
</span><br>
<span class="quotelev1">&gt; 	matrix[i][j] = tmp++;
</span><br>
<span class="quotelev1">&gt;      }
</span><br>
<span class="quotelev1">&gt;    }
</span><br>
<span class="quotelev1">&gt;    printf (&quot;\n\noriginal matrix:\n\n&quot;);
</span><br>
<span class="quotelev1">&gt;    print_matrix (P, Q, (double **) matrix);
</span><br>
<span class="quotelev1">&gt;  }
</span><br>
<span class="quotelev1">&gt;  /* distribute columns							*/
</span><br>
<span class="quotelev1">&gt;  MPI_Scatter (matrix, 1, coltype, column, 2, MPI_DOUBLE, 0,
</span><br>
<span class="quotelev1">&gt; 	       MPI_COMM_WORLD);
</span><br>
<span class="quotelev1">&gt;  printf (&quot;rank: %d  c0: %g  c1: %g\n&quot;, mytid, column[0], column[1]);
</span><br>
<span class="quotelev1">&gt;  for (i = 0; i &lt; 2; ++i)
</span><br>
<span class="quotelev1">&gt;  {
</span><br>
<span class="quotelev1">&gt;    if ((mytid % 2) == 0)
</span><br>
<span class="quotelev1">&gt;    {
</span><br>
<span class="quotelev1">&gt;      column[i] = column[i] * column[i];
</span><br>
<span class="quotelev1">&gt;    }
</span><br>
<span class="quotelev1">&gt;    else
</span><br>
<span class="quotelev1">&gt;    {
</span><br>
<span class="quotelev1">&gt;      column[i] = column[i] * FAKTOR;
</span><br>
<span class="quotelev1">&gt;    }
</span><br>
<span class="quotelev1">&gt;  }
</span><br>
<span class="quotelev1">&gt;  /* wait for result vectors		     				*/
</span><br>
<span class="quotelev1">&gt;  MPI_Gather (column, 2, MPI_DOUBLE, matrix, 1, coltype, 0,
</span><br>
<span class="quotelev1">&gt; 	      MPI_COMM_WORLD);
</span><br>
<span class="quotelev1">&gt;  if (mytid == 0)
</span><br>
<span class="quotelev1">&gt;  {
</span><br>
<span class="quotelev1">&gt;    printf (&quot;\n\nresult matrix:\n&quot;
</span><br>
<span class="quotelev1">&gt; 	    &quot;(odd columns: elements squared; even columns: elements &quot;
</span><br>
<span class="quotelev1">&gt; 	    &quot;multiplied with %d)\n\n&quot;, FAKTOR);
</span><br>
<span class="quotelev1">&gt;    print_matrix (P, Q, (double **) matrix);
</span><br>
<span class="quotelev1">&gt;  }
</span><br>
<span class="quotelev1">&gt;  MPI_Type_free (&amp;coltype);
</span><br>
<span class="quotelev1">&gt;  MPI_Finalize ();
</span><br>
<span class="quotelev1">&gt;  return EXIT_SUCCESS;
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; /* print the values of a matrix
</span><br>
<span class="quotelev1">&gt; *
</span><br>
<span class="quotelev1">&gt; * input parameters:	p	number of rows
</span><br>
<span class="quotelev1">&gt; *			q	number of columns
</span><br>
<span class="quotelev1">&gt; *			mat	2D-matrix of &quot;double&quot; values
</span><br>
<span class="quotelev1">&gt; * output parameters:	none
</span><br>
<span class="quotelev1">&gt; * return value:	none
</span><br>
<span class="quotelev1">&gt; * side effects:	none
</span><br>
<span class="quotelev1">&gt; *
</span><br>
<span class="quotelev1">&gt; */
</span><br>
<span class="quotelev1">&gt; void print_matrix (int p, int q, double **mat)
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt;  int i, j;				/* loop variables		*/
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  for (i = 0; i &lt; p; ++i)
</span><br>
<span class="quotelev1">&gt;  {
</span><br>
<span class="quotelev1">&gt;    for (j = 0; j &lt; q; ++j)
</span><br>
<span class="quotelev1">&gt;    {
</span><br>
<span class="quotelev1">&gt;      printf (&quot;%6g&quot;, *((double *) mat + i * q + j));
</span><br>
<span class="quotelev1">&gt;    }
</span><br>
<span class="quotelev1">&gt;    printf (&quot;\n&quot;);
</span><br>
<span class="quotelev1">&gt;  }
</span><br>
<span class="quotelev1">&gt;  printf (&quot;\n&quot;);
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p>
<br><hr>
<ul>
<li>application/pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-5881/smime.p7s">smime.p7s</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5882.php">pat.o'bryant_at_[hidden]: "[OMPI users] Application Context and OpenMPI 1.2.4"</a>
<li><strong>Previous message:</strong> <a href="5880.php">Siegmar Gross: "[OMPI users] wrong results from MPI_Scatter with strided vector"</a>
<li><strong>In reply to:</strong> <a href="5880.php">Siegmar Gross: "[OMPI users] wrong results from MPI_Scatter with strided vector"</a>
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

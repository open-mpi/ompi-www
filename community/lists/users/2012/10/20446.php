<?
$subject_val = "[OMPI users] Datatype.Vector in mpijava in openmpi-1.9a1r27380";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Oct 10 05:46:11 2012" -->
<!-- isoreceived="20121010094611" -->
<!-- sent="Wed, 10 Oct 2012 11:39:16 +0200 (CEST)" -->
<!-- isosent="20121010093916" -->
<!-- name="Siegmar Gross" -->
<!-- email="Siegmar.Gross_at_[hidden]" -->
<!-- subject="[OMPI users] Datatype.Vector in mpijava in openmpi-1.9a1r27380" -->
<!-- id="201210100939.q9A9dGYG021954_at_tyr.informatik.hs-fulda.de" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [OMPI users] Datatype.Vector in mpijava in openmpi-1.9a1r27380<br>
<strong>From:</strong> Siegmar Gross (<em>Siegmar.Gross_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-10-10 05:39:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20447.php">Siegmar Gross: "[OMPI users] internal error with mpiJava in openmpi-1.9a1r27380"</a>
<li><strong>Previous message:</strong> <a href="20445.php">Matthias Jurenz: "Re: [OMPI users] undefined reference to `__intel_sse2_strlen'"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I have built openmpi-1.9a1r27380 with Java support and try some small
<br>
programs. When I try to Send/Recv the columns of a matrix, I don't get
<br>
the expected results. I used &quot;offset = 0&quot; instead of &quot;offset = i&quot;
<br>
in MPI.COMM_WORLD.Send for the following output, so that all processes
<br>
should have received the first column.
<br>
<p>tyr java 115 mpijavac ColumnSendRecvMain.java
<br>
tyr java 116 mpiexec -np 7 java ColumnSendRecvMain
<br>
<p>matrix:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1.00      2.00      3.00      4.00      5.00      6.00
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;7.00      8.00      9.00     10.00     11.00     12.00
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;13.00     14.00     15.00     16.00     17.00     18.00
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;19.00     20.00     21.00     22.00     23.00     24.00
<br>
<p>Column of process 5
<br>
<p>Column of process 1
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;0.00      3.00      7.00      0.00
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;0.00      3.00      7.00      0.00
<br>
...
<br>
<p><p>I use the following program.
<br>
<p>import mpi.*;
<br>
<p>public class ColumnSendRecvMain
<br>
{
<br>
&nbsp;&nbsp;static final int P = 4;			/* # of rows		*/
<br>
&nbsp;&nbsp;static final int Q = 6;			/* # of columns		*/
<br>
&nbsp;&nbsp;static final int NUM_ELEM_PER_LINE = 6;	/* to print a vector	*/
<br>
<p>&nbsp;&nbsp;public static void main (String args[]) throws MPIException
<br>
&nbsp;&nbsp;{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;int      ntasks,			/* number of parallel tasks	*/
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mytid,			/* my task id			*/
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;i, j,			/* loop variables		*/
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;tmp;			/* temporary value		*/
<br>
&nbsp;&nbsp;&nbsp;&nbsp;double   matrix[][],
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;column[];
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Datatype column_t;			/* strided vector		*/
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;MPI.Init (args);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;matrix = new double[P][Q];
<br>
&nbsp;&nbsp;&nbsp;&nbsp;column = new double[P];
<br>
&nbsp;&nbsp;&nbsp;&nbsp;mytid  = MPI.COMM_WORLD.Rank ();
<br>
&nbsp;&nbsp;&nbsp;&nbsp;ntasks = MPI.COMM_WORLD.Size ();
<br>
&nbsp;&nbsp;&nbsp;&nbsp;/* check that we have the correct number of processes in our
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;* universe
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*/
<br>
&nbsp;&nbsp;&nbsp;&nbsp;if (mytid == 0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (ntasks != (Q + 1))
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;System.err.println (&quot;\n\nI need exactly &quot; + (Q + 1) +
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&quot; processes.\n\n&quot; +
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&quot;Usage:\n&quot; +
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&quot;  mpiexec -np &quot; + (Q + 1) + 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&quot; java &lt;program name&gt;\n&quot;);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;if (ntasks != (Q + 1))
<br>
&nbsp;&nbsp;&nbsp;&nbsp;{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI.Finalize ();
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;System.exit (0);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;/* Build the new type for a strided vector.				*/
<br>
&nbsp;&nbsp;&nbsp;&nbsp;column_t = Datatype.Vector (P, 1, Q, MPI.DOUBLE);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;column_t.Commit ();
<br>
&nbsp;&nbsp;&nbsp;&nbsp;if (mytid == 0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;tmp = 1;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;for (i = 0; i &lt; P; ++i)			/* initialize matrix	*/
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;for (j = 0; j &lt; Q; ++j)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;matrix[i][j] = tmp++;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;System.out.println (&quot;\nmatrix:\n&quot;);	/* print matrix		*/
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;for (i = 0; i &lt; P; ++i)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;for (j = 0; j &lt; Q; ++j)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;System.out.printf (&quot;%10.2f&quot;, matrix[i][j]);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;System.out.println ();
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;System.out.println ();
<br>
&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;if (mytid == 0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/* send one column to each process				*/
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;for (i = 0; i &lt; Q; ++i)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI.COMM_WORLD.Send (matrix, i, 1, column_t, i + 1, 0);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;else
<br>
&nbsp;&nbsp;&nbsp;&nbsp;{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI.COMM_WORLD.Recv (column, 0, P, MPI.DOUBLE, 0, 0);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/* Each process prints its column. The output will probably
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;* intermingle on the screen so that you must use
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;* &quot;-output-filename&quot; in Open MPI.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*/
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;System.out.println (&quot;\nColumn of process &quot; + mytid + &quot;\n&quot;);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;for (i = 0; i &lt; P; ++i)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (((i + 1) % NUM_ELEM_PER_LINE) == 0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;System.out.printf (&quot;%10.2f\n&quot;, column[i]);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;else
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;System.out.printf (&quot;%10.2f&quot;, column[i]);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;System.out.println ();
<br>
&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;column_t.finalize ();
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI.Finalize();
<br>
&nbsp;&nbsp;}
<br>
}
<br>
<p><p>In my opinion Datatype.Vector doesn't work as expected. mpiJava doesn't
<br>
support something similar to MPI_Type_create_resized so how can I use
<br>
column_t in a scatter operation? Will scatter automatically start with
<br>
the next element and not with the element following the extent of
<br>
column_t? Is the wrong output of my program related to a bug in the
<br>
mpiJava operation, so that I must wait for a fix or do I make a mistake
<br>
in my program? Thank you very much for any help in advance.
<br>
<p><p>Kind regards
<br>
<p>Siegmar
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20447.php">Siegmar Gross: "[OMPI users] internal error with mpiJava in openmpi-1.9a1r27380"</a>
<li><strong>Previous message:</strong> <a href="20445.php">Matthias Jurenz: "Re: [OMPI users] undefined reference to `__intel_sse2_strlen'"</a>
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

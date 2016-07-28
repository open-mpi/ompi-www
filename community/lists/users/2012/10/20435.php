<?
$subject_val = "[OMPI users] question to Datatype.Vector and MPI.COMM_WORLD.Scatter";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Oct  9 11:02:32 2012" -->
<!-- isoreceived="20121009150232" -->
<!-- sent="Tue, 9 Oct 2012 16:55:37 +0200 (CEST)" -->
<!-- isosent="20121009145537" -->
<!-- name="Siegmar Gross" -->
<!-- email="Siegmar.Gross_at_[hidden]" -->
<!-- subject="[OMPI users] question to Datatype.Vector and MPI.COMM_WORLD.Scatter" -->
<!-- id="201210091455.q99EtbTM019482_at_tyr.informatik.hs-fulda.de" -->
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
<strong>Subject:</strong> [OMPI users] question to Datatype.Vector and MPI.COMM_WORLD.Scatter<br>
<strong>From:</strong> Siegmar Gross (<em>Siegmar.Gross_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-10-09 10:55:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20436.php">Elken, Tom: "Re: [OMPI users] Communication Round-trip time"</a>
<li><strong>Previous message:</strong> <a href="20434.php">Siegmar Gross: "Re: [OMPI users] EXTERNAL: Re: unacceptable latency in gatheringprocess"</a>
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
programs. When I try to scatter the columns of a matrix, I don't get
<br>
the expected results.
<br>
<p>tyr java 106 mpijavac ColumnMain.java 
<br>
tyr java 107 mpiexec -np 6 java ColumnMain
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
<p>Column of process 0
<br>
<p>Column of process 4
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;0.00      0.00      0.00      0.00
<br>
<p>Column of process 1
<br>
<p>Column of process 5
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;0.00      0.00      0.00      0.00
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;0.00      0.00      0.00      0.00
<br>
<p>Column of process 3
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;0.00      0.00      0.00      0.00
<br>
<p>Column of process 2
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;NaN       NaN      0.00      0.00
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;NaN      0.00       NaN      0.00
<br>
<p>I use the following program.
<br>
<p>import mpi.*;
<br>
<p>public class ColumnMain
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
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (ntasks != Q)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;System.err.println (&quot;\n\nI need exactly &quot; + Q +
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&quot; processes.\n\n&quot; +
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&quot;Usage:\n&quot; +
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&quot;  mpiexec -np &quot; + Q + 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&quot; java &lt;program name&gt;\n&quot;);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;if (ntasks != Q)
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
&nbsp;&nbsp;&nbsp;&nbsp;MPI.COMM_WORLD.Scatter (matrix, 0, 1, column_t,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;column, 0, P, MPI.DOUBLE, 0);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;/* Each process prints its column. The output will probably
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;* intermingle on the screen so that you must use
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;* &quot;-output-filename&quot; in Open MPI.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*/
<br>
&nbsp;&nbsp;&nbsp;&nbsp;System.out.println (&quot;\nColumn of process &quot; + mytid + &quot;\n&quot;);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;for (i = 0; i &lt; P; ++i)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (((i + 1) % NUM_ELEM_PER_LINE) == 0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;System.out.printf (&quot;%10.2f\n&quot;, column[i]);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;else
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;System.out.printf (&quot;%10.2f&quot;, column[i]);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;System.out.println ();
<br>
&nbsp;&nbsp;&nbsp;&nbsp;column_t.finalize ();
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI.Finalize();
<br>
&nbsp;&nbsp;}
<br>
}
<br>
<p><p>Does anybody know if something is wrong with my program or if I can't
<br>
use a strided vector in Java (even if it is available in the API) or
<br>
if it is a problem of openmpi-1.9a1r27380? Thank you very much for
<br>
any help in advance.
<br>
<p><p>Kind regards
<br>
<p>Siegmar
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20436.php">Elken, Tom: "Re: [OMPI users] Communication Round-trip time"</a>
<li><strong>Previous message:</strong> <a href="20434.php">Siegmar Gross: "Re: [OMPI users] EXTERNAL: Re: unacceptable latency in gatheringprocess"</a>
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

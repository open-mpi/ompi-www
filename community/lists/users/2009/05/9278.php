<?
$subject_val = "[OMPI users] Please help me with this simple setup. i am stuck";
include("../../include/msg-header.inc");
?>
<!-- received="Sat May  9 11:43:10 2009" -->
<!-- isoreceived="20090509154310" -->
<!-- sent="Sat, 9 May 2009 19:42:45 +0400" -->
<!-- isosent="20090509154245" -->
<!-- name="Venu Gopal" -->
<!-- email="venudxb_at_[hidden]" -->
<!-- subject="[OMPI users] Please help me with this simple setup. i am stuck" -->
<!-- id="82b4d5c90905090842n77809fb7g37d6b27a60894f3a_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] Please help me with this simple setup. i am stuck<br>
<strong>From:</strong> Venu Gopal (<em>venudxb_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-05-09 11:42:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9279.php">Luis Vitorio Cargnini: "Re: [OMPI users] Please help me with this simple setup. i am stuck"</a>
<li><strong>Previous message:</strong> <a href="9277.php">Jeff Squyres: "Re: [OMPI users] OMPI-1.3.2, openib/iWARP(cxgb3) problem: PML add procs failed (Unreachable)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9279.php">Luis Vitorio Cargnini: "Re: [OMPI users] Please help me with this simple setup. i am stuck"</a>
<li><strong>Reply:</strong> <a href="9279.php">Luis Vitorio Cargnini: "Re: [OMPI users] Please help me with this simple setup. i am stuck"</a>
<li><strong>Reply:</strong> <a href="9287.php">Jeff Squyres: "Re: [OMPI users] Please help me with this simple setup. i am stuck"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I am venu,
<br>
<p>I have tried to setup a simple 2 node openmpi system.
<br>
<p>on two machines one is running debian lenny (ip 10.0.3.1)
<br>
other is running ubuntu hardy (ip 10.0.3.3)
<br>
<p>I am getting error when i try to execute a file using mpiexec, i am sure
<br>
password is correct. as ssh is working
<br>
and the file pi3 is in directory code which in turn is in my home directory
<br>
venu.
<br>
<p>the file pi.c is below
<br>
<p><p><p>/* To run this program:                                               */
<br>
/*---------------------                                               */
<br>
/*                                                                    */
<br>
/*                                                                    */
<br>
/*    Issue:   time  mpirun  -np  [nprocs]  ./pi      (SGI, Beowulf)  */
<br>
/*                                                                    */
<br>
/*                                                                    */
<br>
/* ------------------------------------------------------------------ */
<br>
<p>#include &lt;stdio.h&gt;
<br>
#include &lt;stdlib.h&gt;
<br>
<p>#include &quot;mpi.h&quot;
<br>
<p>int main(int argc, char *argv[])
<br>
{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int    i, n;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;double h, pi, x;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int    me, nprocs;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;double piece;
<br>
<p>/* --------------------------------------------------- */
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Init (&amp;argc, &amp;argv);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Comm_size (MPI_COMM_WORLD, &amp;nprocs);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Comm_rank (MPI_COMM_WORLD, &amp;me);
<br>
<p>/* --------------------------------------------------- */
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (me == 0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot;%s&quot;, &quot;Input number of intervals:\n&quot;);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;scanf (&quot;%d&quot;, &amp;n);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<p>/* --------------------------------------------------- */
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Bcast (&amp;n, 1, MPI_INT,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;0, MPI_COMM_WORLD);
<br>
<p>/* --------------------------------------------------- */
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;h     = 1. / (double) n;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;piece = 0.;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;for (i=me+1; i &lt;= n; i+=nprocs)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;x     = (i-1)*h;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;piece = piece + (
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4/
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(1+(x)*(x))
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;+
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4/
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(1+(x+h)*(x+h))
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;) / 2 * h;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot;%d: pi = %25.15f\n&quot;, me, piece);
<br>
<p>/* --------------------------------------------------- */
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Reduce (&amp;piece, &amp;pi, 1, MPI_DOUBLE,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_SUM, 0, MPI_COMM_WORLD);
<br>
<p>/* --------------------------------------------------- */
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (me == 0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot;pi = %25.15f\n&quot;, pi);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<p>/* --------------------------------------------------- */
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Finalize();
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return 0;
<br>
}
<br>
<p><p><p>the code directory is nfs shared and mounted on the client system which is
<br>
10.0.3.3.
<br>
the server system is 10.0.3.1
<br>
<p>i can ping the client from server and also server from client. ssh is
<br>
working bothways.
<br>
<p>the /etc/openmpi/openmpi-default-hostfile is having the line on the first
<br>
node ie. 10.0.3.1
<br>
<p>10.0.3.3 slots=2
<br>
<p><p>the other nodes file is just empty. i mean only comments are there.
<br>
<p><p>this is the error is get when i execute.
<br>
<p><p>venu_at_mainframe:~$ mpiexec -np 3 ./code/pi3
<br>
venu_at_10.0.3.3's password:
<br>
--------------------------------------------------------------------------
<br>
Could not execute the executable &quot;./code/pi3&quot;: Exec format error
<br>
<p>This could mean that your PATH or executable name is wrong, or that you do
<br>
not
<br>
have the necessary permissions.  Please ensure that the executable is able
<br>
to be
<br>
found and executed.
<br>
<p>--------------------------------------------------------------------------
<br>
--------------------------------------------------------------------------
<br>
Could not execute the executable &quot;./code/pi3&quot;: Exec format error
<br>
<p>This could mean that your PATH or executable name is wrong, or that you do
<br>
not
<br>
have the necessary permissions.  Please ensure that the executable is able
<br>
to be
<br>
found and executed.
<br>
<p>--------------------------------------------------------------------------
<br>
--------------------------------------------------------------------------
<br>
Could not execute the executable &quot;./code/pi3&quot;: Exec format error
<br>
<p>This could mean that your PATH or executable name is wrong, or that you do
<br>
not
<br>
have the necessary permissions.  Please ensure that the executable is able
<br>
to be
<br>
found and executed.
<br>
<p>--------------------------------------------------------------------------
<br>
<p><p><p>now, when i remove that line from /etc/openmpi/openmpi-default-hostfile on
<br>
the first node
<br>
<p>the program compiles and executes on the first node node.
<br>
<p>same, when i compile it and execute it on the second node, it works.
<br>
<p>only problem is when i try to run it on both.
<br>
<p>i get the error mesage as above.
<br>
<p><p>someone, please help me. as i am trying to setup this system for the first
<br>
time.
<br>
<p>and i am stuck.
<br>
<p>i am fairly good with linux. so i know my way around linux. but am stuck
<br>
with open mpi.
<br>
<pre>
-- 
Regards,
Venu Gopal
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-9278/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9279.php">Luis Vitorio Cargnini: "Re: [OMPI users] Please help me with this simple setup. i am stuck"</a>
<li><strong>Previous message:</strong> <a href="9277.php">Jeff Squyres: "Re: [OMPI users] OMPI-1.3.2, openib/iWARP(cxgb3) problem: PML add procs failed (Unreachable)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9279.php">Luis Vitorio Cargnini: "Re: [OMPI users] Please help me with this simple setup. i am stuck"</a>
<li><strong>Reply:</strong> <a href="9279.php">Luis Vitorio Cargnini: "Re: [OMPI users] Please help me with this simple setup. i am stuck"</a>
<li><strong>Reply:</strong> <a href="9287.php">Jeff Squyres: "Re: [OMPI users] Please help me with this simple setup. i am stuck"</a>
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

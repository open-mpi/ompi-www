<?
$subject_val = "[OMPI users] Multi-program between Java and C/Fortran...";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jul 18 03:18:33 2013" -->
<!-- isoreceived="20130718071833" -->
<!-- sent="Thu, 18 Jul 2013 01:18:29 -0600" -->
<!-- isosent="20130718071829" -->
<!-- name="Andre Dozier" -->
<!-- email="hambre_at_[hidden]" -->
<!-- subject="[OMPI users] Multi-program between Java and C/Fortran..." -->
<!-- id="51E796C5.5070001_at_engr.colostate.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="51E7949D.6010900_at_engr.colostate.edu" -->
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
<strong>Subject:</strong> [OMPI users] Multi-program between Java and C/Fortran...<br>
<strong>From:</strong> Andre Dozier (<em>hambre_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-07-18 03:18:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22329.php">mohammad assadsolimani: "Re: [OMPI users] max. message size"</a>
<li><strong>Previous message:</strong> <a href="22327.php">Mike Dubman: "Re: [OMPI users] max. message size"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22359.php">Andre Dozier: "Re: [OMPI users] Multi-program between Java and C/Fortran..."</a>
<li><strong>Reply:</strong> <a href="22359.php">Andre Dozier: "Re: [OMPI users] Multi-program between Java and C/Fortran..."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'm interested in connecting new Java programs with legacy programs 
<br>
written in C and Fortran using MPI (so that they are machine independent 
<br>
and parallel). To try this out at first, I was hoping to simply Send 
<br>
arrays of basic datatypes (integer, floats, etc.) from a Java program to 
<br>
a simple C or Fortran program. So, I put together a simple example, but 
<br>
am unable to Send or Receive anything (the program just freezes... I'm 
<br>
guessing it freezes at the MPI_Send and MPI_Recv calls). What am I doing 
<br>
wrong (see code below)?
<br>
<p>*Java program - interopj.java (sending program): *
<br>
import mpi.*;
<br>
public class interopj
<br>
{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;public static void main(String args[])
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;try
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI.Init(args);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int rank = MPI.COMM_WORLD.Rank();
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int size = MPI.COMM_WORLD.Size();
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int offset = 0, cnt = 1;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int buf[] = new int[cnt];
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;for (int i = 1; i &lt; size; i++)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;buf[0] = i;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;System.out.println(&quot;Sending &quot; + i);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI.COMM_WORLD.Send(buf, offset, cnt, MPI.INT, i, 0);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;catch (Exception e)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;e.printStackTrace();
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;finally
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;try
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI.Finalize();
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;catch(Exception ex)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ex.printStackTrace();
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
}
<br>
<p>*C program - interop.c (receiving program): *
<br>
#include &quot;mpi.h&quot;
<br>
int main(int argc, char *argv[])
<br>
{
<br>
&nbsp;&nbsp;&nbsp;int rank, size;
<br>
&nbsp;&nbsp;&nbsp;int i, bsize;
<br>
&nbsp;&nbsp;&nbsp;MPI_Status status;
<br>
<p>&nbsp;&nbsp;&nbsp;MPI_Init(&amp;argc, &amp;argv);
<br>
&nbsp;&nbsp;&nbsp;MPI_Comm_rank(MPI_COMM_WORLD, &amp;rank);
<br>
&nbsp;&nbsp;&nbsp;MPI_Comm_size(MPI_COMM_WORLD, &amp;size);
<br>
<p>&nbsp;&nbsp;&nbsp;bsize = 1;
<br>
&nbsp;&nbsp;&nbsp;int buf[bsize];
<br>
&nbsp;&nbsp;&nbsp;printf(&quot;Waiting for an integer&quot;);
<br>
&nbsp;&nbsp;&nbsp;MPI_Recv(&amp;buf, 1, MPI_INT, 0, 0, MPI_COMM_WORLD, &amp;status);
<br>
&nbsp;&nbsp;&nbsp;printf(&quot;Received %d&quot;, buf[0]);
<br>
<p>&nbsp;&nbsp;&nbsp;MPI_Finalize();
<br>
&nbsp;&nbsp;&nbsp;return 0;
<br>
}
<br>
<p>*Makefile: *
<br>
CC = mpicc
<br>
JCC = mpijavac
<br>
LIB = /usr/local/lib
<br>
<p>all: interop interopj
<br>
<p>interop: interop.c
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$(CC) -o interop interop.c
<br>
<p>interopj: interopj.java
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$(JCC) -cp $(LIB)/mpi.jar interopj.java
<br>
<p>*Shell file to run a test: *
<br>
echo Building
<br>
make -B
<br>
echo Running
<br>
mpirun -np 1 java interopj : -np 2 interop
<br>
<p>Thanks for your help in advance,
<br>
<p>Andr&#233;
<br>
<p><p><p><p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-22328/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22329.php">mohammad assadsolimani: "Re: [OMPI users] max. message size"</a>
<li><strong>Previous message:</strong> <a href="22327.php">Mike Dubman: "Re: [OMPI users] max. message size"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22359.php">Andre Dozier: "Re: [OMPI users] Multi-program between Java and C/Fortran..."</a>
<li><strong>Reply:</strong> <a href="22359.php">Andre Dozier: "Re: [OMPI users] Multi-program between Java and C/Fortran..."</a>
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

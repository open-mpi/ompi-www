<?
$subject_val = "[OMPI users] function fgets hangs a mpi program when it is used ompi-ps command";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Sep 17 15:13:29 2010" -->
<!-- isoreceived="20100917191329" -->
<!-- sent="Fri, 17 Sep 2010 13:13:24 -0600" -->
<!-- isosent="20100917191324" -->
<!-- name="Matheus Bersot Siqueira Barros" -->
<!-- email="matheusbersotsb_at_[hidden]" -->
<!-- subject="[OMPI users] function fgets hangs a mpi program when it is used ompi-ps command" -->
<!-- id="AANLkTim3y2GviVQhWp1dBadD-OVmSER6f8mzg9rvhxTF_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] function fgets hangs a mpi program when it is used ompi-ps command<br>
<strong>From:</strong> Matheus Bersot Siqueira Barros (<em>matheusbersotsb_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-09-17 15:13:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14244.php">Richard Walsh: "[OMPI users] Continued functionality across a SLES10 to SLES11 upgrade ..."</a>
<li><strong>Previous message:</strong> <a href="14242.php">Eloi Gaudry: "Re: [OMPI users] [openib] segfault when using openib btl"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14280.php">Jeff Squyres: "Re: [OMPI users] function fgets hangs a mpi program when it is used ompi-ps command"</a>
<li><strong>Reply:</strong> <a href="14280.php">Jeff Squyres: "Re: [OMPI users] function fgets hangs a mpi program when it is used ompi-ps command"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Open MPI Version = 1.4.2
<br>
OS = Ubuntu 10.04 LTS and CentOS 5.3
<br>
<p>When I run the mpi program below in the terminal, the function fgets hangs.
<br>
How do I know it? I do a printf before and later the call of fgets and only
<br>
the message &quot;before fgets()&quot; is showed.
<br>
<p>However, when I run the same program at Eclipse 3.6 with CDT
<br>
7.0.0.201006141710 or using gdb it runs normally.
<br>
If you change the command in the function popen  to another one(for
<br>
instance: &quot;ls -l&quot;), it will run correctly.
<br>
<p>I use the following commands to compile and run the program:
<br>
<p>compile : mpicc teste.c -o teste.run
<br>
<p>run : mpirun -np 4 ./teste.run
<br>
<p><p>Does anyone know why the program behaves like that?
<br>
<p>Thanks in advance,
<br>
<p>Matheus Bersot.
<br>
<p>MPI_PROGRAM:
<br>
<p>#include &lt;stdio.h&gt;
<br>
#include &quot;mpi.h&quot;
<br>
<p>int main(int argc, char *argv[])
<br>
{
<br>
&nbsp;&nbsp;&nbsp;int rank, nprocs;
<br>
&nbsp;&nbsp;&nbsp;FILE * pFile = NULL;
<br>
&nbsp;&nbsp;&nbsp;char mystring [100];
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;MPI_Init(&amp;argc,&amp;argv);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Comm_size(MPI_COMM_WORLD,&amp;nprocs);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Comm_rank(MPI_COMM_WORLD,&amp;rank);
<br>
<p>&nbsp;&nbsp;&nbsp;if(rank == 0)
<br>
&nbsp;&nbsp;&nbsp;{
<br>
&nbsp;&nbsp;&nbsp;pFile = popen (&quot;ompi-ps&quot; , &quot;r&quot;);
<br>
&nbsp;&nbsp;&nbsp;if (pFile == NULL) perror (&quot;Error opening file&quot;);
<br>
&nbsp;&nbsp;&nbsp;else {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;while(!feof(pFile))
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot;before fgets()\n&quot;);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;fgets (mystring , 100 , pFile);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot;after fgets()\n&quot;);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;puts (mystring);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;pclose (pFile);
<br>
&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;}
<br>
<p>&nbsp;&nbsp;MPI_Finalize();
<br>
&nbsp;&nbsp;&nbsp;return 0;
<br>
}
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-14243/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14244.php">Richard Walsh: "[OMPI users] Continued functionality across a SLES10 to SLES11 upgrade ..."</a>
<li><strong>Previous message:</strong> <a href="14242.php">Eloi Gaudry: "Re: [OMPI users] [openib] segfault when using openib btl"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14280.php">Jeff Squyres: "Re: [OMPI users] function fgets hangs a mpi program when it is used ompi-ps command"</a>
<li><strong>Reply:</strong> <a href="14280.php">Jeff Squyres: "Re: [OMPI users] function fgets hangs a mpi program when it is used ompi-ps command"</a>
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

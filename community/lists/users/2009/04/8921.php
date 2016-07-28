<?
$subject_val = "[OMPI users] Problem with MPI_File_read()";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr 14 16:21:10 2009" -->
<!-- isoreceived="20090414202110" -->
<!-- sent="Tue, 14 Apr 2009 22:21:06 +0200" -->
<!-- isosent="20090414202106" -->
<!-- name="Jovana Knezevic" -->
<!-- email="jovana.knezevic.83_at_[hidden]" -->
<!-- subject="[OMPI users] Problem with MPI_File_read()" -->
<!-- id="9d13e50c0904141321p639e0baagd63b5dde972a42cf_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] Problem with MPI_File_read()<br>
<strong>From:</strong> Jovana Knezevic (<em>jovana.knezevic.83_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-04-14 16:21:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8922.php">Shaun Jackman: "Re: [OMPI users] Problem with MPI_File_read()"</a>
<li><strong>Previous message:</strong> <a href="8920.php">Shaun Jackman: "Re: [OMPI users] Debugging memory use of Open MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8922.php">Shaun Jackman: "Re: [OMPI users] Problem with MPI_File_read()"</a>
<li><strong>Reply:</strong> <a href="8922.php">Shaun Jackman: "Re: [OMPI users] Problem with MPI_File_read()"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello everyone!
<br>
<p>I have a problems using MPI_File_read() in C. Simple code below,
<br>
trying to read an integer prints to the standard output wrong result
<br>
(instead of 1 prints 825307441). I tried this function with 'MPI_CHAR'
<br>
datatype and it works. Probably I'm not using it properly for MPI_INT,
<br>
but I can't find what can be a problem anywhere in the literature, so
<br>
I would really appreciate if anyone of you could check out the code
<br>
below quickly and maybe give me some advice, or tell me what's wrong
<br>
with it.
<br>
<p>Thanks a lot in advance.
<br>
<p>Regards,
<br>
Jovana Knezevic
<br>
<p><p>#include &lt;stdlib.h&gt;
<br>
#include &lt;stdio.h&gt;
<br>
#include &lt;mpi.h&gt;
<br>
<p>void
<br>
read_file (MPI_File *infile)
<br>
{
<br>
&nbsp;&nbsp;MPI_Status status;
<br>
&nbsp;&nbsp;int *buf;
<br>
&nbsp;&nbsp;int i;
<br>
&nbsp;&nbsp;buf = (int *)malloc( 5 * sizeof(int) );
<br>
<p>&nbsp;&nbsp;for(i=0; i&lt;5; i++)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;buf[i]=0;
<br>
<p><p>&nbsp;&nbsp;MPI_File_read(*infile, buf, 1, MPI_INT, &amp;status);
<br>
&nbsp;&nbsp;printf(&quot;%d\n&quot;, buf[0]);
<br>
}
<br>
<p><p>int
<br>
main (int argc, char **argv)
<br>
{
<br>
&nbsp;&nbsp;MPI_File infile1;
<br>
&nbsp;&nbsp;int procID, nproc;
<br>
<p>&nbsp;MPI_Init (&amp;argc, &amp;argv);
<br>
&nbsp;MPI_Comm_rank (MPI_COMM_WORLD, &amp;procID);
<br>
&nbsp;MPI_Comm_size (MPI_COMM_WORLD, &amp;nproc);
<br>
<p><p>&nbsp;printf(&quot;begin\n&quot;);
<br>
&nbsp;MPI_File_open(MPI_COMM_WORLD,&quot;first.dat&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;,MPI_MODE_RDONLY,MPI_INFO_NULL,&amp;infile1);
<br>
<p>&nbsp;if(procID==0) {
<br>
&nbsp;&nbsp;&nbsp;printf(&quot;proc0\n&quot;);
<br>
&nbsp;&nbsp;&nbsp;read_file(&amp;infile1);
<br>
&nbsp;}
<br>
&nbsp;else
<br>
&nbsp;&nbsp;&nbsp;{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot;proc1\n&quot;);
<br>
&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;MPI_File_close(&amp;infile1);
<br>
&nbsp;printf(&quot;end\n&quot;);
<br>
<p><p>&nbsp;MPI_Finalize();
<br>
<p>&nbsp;return EXIT_SUCCESS;
<br>
<p>}
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8922.php">Shaun Jackman: "Re: [OMPI users] Problem with MPI_File_read()"</a>
<li><strong>Previous message:</strong> <a href="8920.php">Shaun Jackman: "Re: [OMPI users] Debugging memory use of Open MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8922.php">Shaun Jackman: "Re: [OMPI users] Problem with MPI_File_read()"</a>
<li><strong>Reply:</strong> <a href="8922.php">Shaun Jackman: "Re: [OMPI users] Problem with MPI_File_read()"</a>
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

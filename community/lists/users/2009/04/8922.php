<?
$subject_val = "Re: [OMPI users] Problem with MPI_File_read()";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr 14 16:40:55 2009" -->
<!-- isoreceived="20090414204055" -->
<!-- sent="Tue, 14 Apr 2009 13:40:22 -0700" -->
<!-- isosent="20090414204022" -->
<!-- name="Shaun Jackman" -->
<!-- email="sjackman_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problem with MPI_File_read()" -->
<!-- id="49E4F4B6.8000703_at_bcgsc.ca" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="9d13e50c0904141321p639e0baagd63b5dde972a42cf_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Problem with MPI_File_read()<br>
<strong>From:</strong> Shaun Jackman (<em>sjackman_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-04-14 16:40:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8923.php">Eugene Loh: "Re: [OMPI users] Debugging memory use of Open MPI"</a>
<li><strong>Previous message:</strong> <a href="8921.php">Jovana Knezevic: "[OMPI users] Problem with MPI_File_read()"</a>
<li><strong>In reply to:</strong> <a href="8921.php">Jovana Knezevic: "[OMPI users] Problem with MPI_File_read()"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Jovana,
<br>
<p>825307441 is 0x31313131 in base 16 (hexadecimal), which is the string
<br>
`1111' in ASCII. MPI_File_read reads in binary values (not ASCII) just 
<br>
as the standard functions read(2) and fread(3) do.
<br>
<p>So, your program is fine; however, your data file (first.dat) is not.
<br>
<p>Cheers,
<br>
Shaun
<br>
<p>Jovana Knezevic wrote:
<br>
<span class="quotelev1">&gt; Hello everyone!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have a problems using MPI_File_read() in C. Simple code below,
</span><br>
<span class="quotelev1">&gt; trying to read an integer prints to the standard output wrong result
</span><br>
<span class="quotelev1">&gt; (instead of 1 prints 825307441). I tried this function with 'MPI_CHAR'
</span><br>
<span class="quotelev1">&gt; datatype and it works. Probably I'm not using it properly for MPI_INT,
</span><br>
<span class="quotelev1">&gt; but I can't find what can be a problem anywhere in the literature, so
</span><br>
<span class="quotelev1">&gt; I would really appreciate if anyone of you could check out the code
</span><br>
<span class="quotelev1">&gt; below quickly and maybe give me some advice, or tell me what's wrong
</span><br>
<span class="quotelev1">&gt; with it.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks a lot in advance.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; Jovana Knezevic
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #include &lt;stdlib.h&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;stdio.h&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;mpi.h&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; void
</span><br>
<span class="quotelev1">&gt; read_file (MPI_File *infile)
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt;   MPI_Status status;
</span><br>
<span class="quotelev1">&gt;   int *buf;
</span><br>
<span class="quotelev1">&gt;   int i;
</span><br>
<span class="quotelev1">&gt;   buf = (int *)malloc( 5 * sizeof(int) );
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   for(i=0; i&lt;5; i++)
</span><br>
<span class="quotelev1">&gt;     buf[i]=0;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   MPI_File_read(*infile, buf, 1, MPI_INT, &amp;status);
</span><br>
<span class="quotelev1">&gt;   printf(&quot;%d\n&quot;, buf[0]);
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; int
</span><br>
<span class="quotelev1">&gt; main (int argc, char **argv)
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt;   MPI_File infile1;
</span><br>
<span class="quotelev1">&gt;   int procID, nproc;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  MPI_Init (&amp;argc, &amp;argv);
</span><br>
<span class="quotelev1">&gt;  MPI_Comm_rank (MPI_COMM_WORLD, &amp;procID);
</span><br>
<span class="quotelev1">&gt;  MPI_Comm_size (MPI_COMM_WORLD, &amp;nproc);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  printf(&quot;begin\n&quot;);
</span><br>
<span class="quotelev1">&gt;  MPI_File_open(MPI_COMM_WORLD,&quot;first.dat&quot;
</span><br>
<span class="quotelev1">&gt;                       ,MPI_MODE_RDONLY,MPI_INFO_NULL,&amp;infile1);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  if(procID==0) {
</span><br>
<span class="quotelev1">&gt;    printf(&quot;proc0\n&quot;);
</span><br>
<span class="quotelev1">&gt;    read_file(&amp;infile1);
</span><br>
<span class="quotelev1">&gt;  }
</span><br>
<span class="quotelev1">&gt;  else
</span><br>
<span class="quotelev1">&gt;    {
</span><br>
<span class="quotelev1">&gt;      printf(&quot;proc1\n&quot;);
</span><br>
<span class="quotelev1">&gt;    }
</span><br>
<span class="quotelev1">&gt;  MPI_File_close(&amp;infile1);
</span><br>
<span class="quotelev1">&gt;  printf(&quot;end\n&quot;);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  MPI_Finalize();
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  return EXIT_SUCCESS;
</span><br>
<span class="quotelev1">&gt; 
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
<span class="quotelev1">&gt; 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8923.php">Eugene Loh: "Re: [OMPI users] Debugging memory use of Open MPI"</a>
<li><strong>Previous message:</strong> <a href="8921.php">Jovana Knezevic: "[OMPI users] Problem with MPI_File_read()"</a>
<li><strong>In reply to:</strong> <a href="8921.php">Jovana Knezevic: "[OMPI users] Problem with MPI_File_read()"</a>
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

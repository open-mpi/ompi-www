<?
$subject_val = "Re: [OMPI users] function fgets hangs a mpi program when it is used ompi-ps command";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Sep 22 10:15:34 2010" -->
<!-- isoreceived="20100922141534" -->
<!-- sent="Wed, 22 Sep 2010 10:15:29 -0400" -->
<!-- isosent="20100922141529" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] function fgets hangs a mpi program when it is used ompi-ps command" -->
<!-- id="E0F4A11A-49A6-4880-8AC2-CB41DEA8C21C_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="AANLkTim3y2GviVQhWp1dBadD-OVmSER6f8mzg9rvhxTF_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] function fgets hangs a mpi program when it is used ompi-ps command<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-09-22 10:15:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14281.php">Ralph Castain: "Re: [OMPI users] function fgets hangs a mpi program when it is used ompi-ps command"</a>
<li><strong>Previous message:</strong> <a href="14279.php">Jeff Squyres: "Re: [OMPI users] Continued functionality across a SLES10 to SLES11	upgrade ..."</a>
<li><strong>In reply to:</strong> <a href="14243.php">Matheus Bersot Siqueira Barros: "[OMPI users] function fgets hangs a mpi program when it is used ompi-ps command"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14281.php">Ralph Castain: "Re: [OMPI users] function fgets hangs a mpi program when it is used ompi-ps command"</a>
<li><strong>Reply:</strong> <a href="14281.php">Ralph Castain: "Re: [OMPI users] function fgets hangs a mpi program when it is used ompi-ps command"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Are you running on machines with OpenFabrics devices (that Open MPI is using)?
<br>
<p>Is ompi-ps printing 100 bytes or more?
<br>
<p>What does ps show when your program is hung?
<br>
<p><p><p>On Sep 17, 2010, at 3:13 PM, Matheus Bersot Siqueira Barros wrote:
<br>
<p><span class="quotelev1">&gt; Open MPI Version = 1.4.2
</span><br>
<span class="quotelev1">&gt; OS = Ubuntu 10.04 LTS and CentOS 5.3
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; When I run the mpi program below in the terminal, the function fgets hangs. 
</span><br>
<span class="quotelev1">&gt; How do I know it? I do a printf before and later the call of fgets and only the message &quot;before fgets()&quot; is showed.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; However, when I run the same program at Eclipse 3.6 with CDT 7.0.0.201006141710 or using gdb it runs normally. 
</span><br>
<span class="quotelev1">&gt; If you change the command in the function popen  to another one(for instance: &quot;ls -l&quot;), it will run correctly. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I use the following commands to compile and run the program:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; compile : mpicc teste.c -o teste.run
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; run : mpirun -np 4 ./teste.run
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Does anyone know why the program behaves like that?
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Thanks in advance,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Matheus Bersot. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; MPI_PROGRAM:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #include &lt;stdio.h&gt;
</span><br>
<span class="quotelev1">&gt; #include &quot;mpi.h&quot;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; int main(int argc, char *argv[])
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt;    int rank, nprocs;
</span><br>
<span class="quotelev1">&gt;    FILE * pFile = NULL;
</span><br>
<span class="quotelev1">&gt;    char mystring [100];
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     MPI_Init(&amp;argc,&amp;argv);
</span><br>
<span class="quotelev1">&gt;     MPI_Comm_size(MPI_COMM_WORLD,&amp;nprocs);
</span><br>
<span class="quotelev1">&gt;     MPI_Comm_rank(MPI_COMM_WORLD,&amp;rank);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    if(rank == 0)
</span><br>
<span class="quotelev1">&gt;    {
</span><br>
<span class="quotelev1">&gt;    pFile = popen (&quot;ompi-ps&quot; , &quot;r&quot;);
</span><br>
<span class="quotelev1">&gt;    if (pFile == NULL) perror (&quot;Error opening file&quot;);
</span><br>
<span class="quotelev1">&gt;    else {
</span><br>
<span class="quotelev1">&gt;      while(!feof(pFile))
</span><br>
<span class="quotelev1">&gt;      {   
</span><br>
<span class="quotelev1">&gt;        printf(&quot;before fgets()\n&quot;);
</span><br>
<span class="quotelev1">&gt;        fgets (mystring , 100 , pFile);  
</span><br>
<span class="quotelev1">&gt;        printf(&quot;after fgets()\n&quot;);         
</span><br>
<span class="quotelev1">&gt;        puts (mystring);
</span><br>
<span class="quotelev1">&gt;      }
</span><br>
<span class="quotelev1">&gt;      pclose (pFile);
</span><br>
<span class="quotelev1">&gt;    }
</span><br>
<span class="quotelev1">&gt;   }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   MPI_Finalize();
</span><br>
<span class="quotelev1">&gt;    return 0;
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
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14281.php">Ralph Castain: "Re: [OMPI users] function fgets hangs a mpi program when it is used ompi-ps command"</a>
<li><strong>Previous message:</strong> <a href="14279.php">Jeff Squyres: "Re: [OMPI users] Continued functionality across a SLES10 to SLES11	upgrade ..."</a>
<li><strong>In reply to:</strong> <a href="14243.php">Matheus Bersot Siqueira Barros: "[OMPI users] function fgets hangs a mpi program when it is used ompi-ps command"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14281.php">Ralph Castain: "Re: [OMPI users] function fgets hangs a mpi program when it is used ompi-ps command"</a>
<li><strong>Reply:</strong> <a href="14281.php">Ralph Castain: "Re: [OMPI users] function fgets hangs a mpi program when it is used ompi-ps command"</a>
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

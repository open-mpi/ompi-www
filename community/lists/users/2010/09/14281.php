<?
$subject_val = "Re: [OMPI users] function fgets hangs a mpi program when it is used ompi-ps command";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Sep 22 10:24:19 2010" -->
<!-- isoreceived="20100922142419" -->
<!-- sent="Wed, 22 Sep 2010 08:24:13 -0600" -->
<!-- isosent="20100922142413" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] function fgets hangs a mpi program when it is used ompi-ps command" -->
<!-- id="AANLkTimqW_7Mg1W-8+CEsZgD_k77shEJ=vOtZ7kwPmEZ_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="E0F4A11A-49A6-4880-8AC2-CB41DEA8C21C_at_cisco.com" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-09-22 10:24:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14282.php">Dave Love: "Re: [OMPI users] OpenMPI on the ARM processor architecture?"</a>
<li><strong>Previous message:</strong> <a href="14280.php">Jeff Squyres: "Re: [OMPI users] function fgets hangs a mpi program when it is used ompi-ps command"</a>
<li><strong>In reply to:</strong> <a href="14280.php">Jeff Squyres: "Re: [OMPI users] function fgets hangs a mpi program when it is used ompi-ps command"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14302.php">Matheus Bersot Siqueira Barros: "Re: [OMPI users] function fgets hangs a mpi program when it is used ompi-ps command"</a>
<li><strong>Reply:</strong> <a href="14302.php">Matheus Bersot Siqueira Barros: "Re: [OMPI users] function fgets hangs a mpi program when it is used ompi-ps command"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Printouts of less than 100 bytes would be unusual...but possible
<br>
<p>On Wed, Sep 22, 2010 at 8:15 AM, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Are you running on machines with OpenFabrics devices (that Open MPI is
</span><br>
<span class="quotelev1">&gt; using)?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Is ompi-ps printing 100 bytes or more?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; What does ps show when your program is hung?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Sep 17, 2010, at 3:13 PM, Matheus Bersot Siqueira Barros wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Open MPI Version = 1.4.2
</span><br>
<span class="quotelev2">&gt; &gt; OS = Ubuntu 10.04 LTS and CentOS 5.3
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; When I run the mpi program below in the terminal, the function fgets
</span><br>
<span class="quotelev1">&gt; hangs.
</span><br>
<span class="quotelev2">&gt; &gt; How do I know it? I do a printf before and later the call of fgets and
</span><br>
<span class="quotelev1">&gt; only the message &quot;before fgets()&quot; is showed.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; However, when I run the same program at Eclipse 3.6 with CDT
</span><br>
<span class="quotelev1">&gt; 7.0.0.201006141710 or using gdb it runs normally.
</span><br>
<span class="quotelev2">&gt; &gt; If you change the command in the function popen  to another one(for
</span><br>
<span class="quotelev1">&gt; instance: &quot;ls -l&quot;), it will run correctly.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I use the following commands to compile and run the program:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; compile : mpicc teste.c -o teste.run
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; run : mpirun -np 4 ./teste.run
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Does anyone know why the program behaves like that?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Thanks in advance,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Matheus Bersot.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; MPI_PROGRAM:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; #include &lt;stdio.h&gt;
</span><br>
<span class="quotelev2">&gt; &gt; #include &quot;mpi.h&quot;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; int main(int argc, char *argv[])
</span><br>
<span class="quotelev2">&gt; &gt; {
</span><br>
<span class="quotelev2">&gt; &gt;    int rank, nprocs;
</span><br>
<span class="quotelev2">&gt; &gt;    FILE * pFile = NULL;
</span><br>
<span class="quotelev2">&gt; &gt;    char mystring [100];
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;     MPI_Init(&amp;argc,&amp;argv);
</span><br>
<span class="quotelev2">&gt; &gt;     MPI_Comm_size(MPI_COMM_WORLD,&amp;nprocs);
</span><br>
<span class="quotelev2">&gt; &gt;     MPI_Comm_rank(MPI_COMM_WORLD,&amp;rank);
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;    if(rank == 0)
</span><br>
<span class="quotelev2">&gt; &gt;    {
</span><br>
<span class="quotelev2">&gt; &gt;    pFile = popen (&quot;ompi-ps&quot; , &quot;r&quot;);
</span><br>
<span class="quotelev2">&gt; &gt;    if (pFile == NULL) perror (&quot;Error opening file&quot;);
</span><br>
<span class="quotelev2">&gt; &gt;    else {
</span><br>
<span class="quotelev2">&gt; &gt;      while(!feof(pFile))
</span><br>
<span class="quotelev2">&gt; &gt;      {
</span><br>
<span class="quotelev2">&gt; &gt;        printf(&quot;before fgets()\n&quot;);
</span><br>
<span class="quotelev2">&gt; &gt;        fgets (mystring , 100 , pFile);
</span><br>
<span class="quotelev2">&gt; &gt;        printf(&quot;after fgets()\n&quot;);
</span><br>
<span class="quotelev2">&gt; &gt;        puts (mystring);
</span><br>
<span class="quotelev2">&gt; &gt;      }
</span><br>
<span class="quotelev2">&gt; &gt;      pclose (pFile);
</span><br>
<span class="quotelev2">&gt; &gt;    }
</span><br>
<span class="quotelev2">&gt; &gt;   }
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;   MPI_Finalize();
</span><br>
<span class="quotelev2">&gt; &gt;    return 0;
</span><br>
<span class="quotelev2">&gt; &gt; }
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
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
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-14281/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14282.php">Dave Love: "Re: [OMPI users] OpenMPI on the ARM processor architecture?"</a>
<li><strong>Previous message:</strong> <a href="14280.php">Jeff Squyres: "Re: [OMPI users] function fgets hangs a mpi program when it is used ompi-ps command"</a>
<li><strong>In reply to:</strong> <a href="14280.php">Jeff Squyres: "Re: [OMPI users] function fgets hangs a mpi program when it is used ompi-ps command"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14302.php">Matheus Bersot Siqueira Barros: "Re: [OMPI users] function fgets hangs a mpi program when it is used ompi-ps command"</a>
<li><strong>Reply:</strong> <a href="14302.php">Matheus Bersot Siqueira Barros: "Re: [OMPI users] function fgets hangs a mpi program when it is used ompi-ps command"</a>
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

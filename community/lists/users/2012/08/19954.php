<?
$subject_val = "Re: [OMPI users] mpi_group_incl erros";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Aug 17 20:47:25 2012" -->
<!-- isoreceived="20120818004725" -->
<!-- sent="Fri, 17 Aug 2012 20:47:20 -0400" -->
<!-- isosent="20120818004720" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpi_group_incl erros" -->
<!-- id="6B62D601-3AB5-41C1-8C21-ECEA338BF0A3_at_cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="1345145452.86884.YahooMailNeo_at_web125803.mail.ne1.yahoo.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] mpi_group_incl erros<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-08-17 20:47:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19955.php">Christian Perrier: "[OMPI users] issue with column type in language C"</a>
<li><strong>Previous message:</strong> <a href="19953.php">Jeff Squyres: "Re: [OMPI users] Openmpi ./configure error - Fortran compiling error"</a>
<li><strong>In reply to:</strong> <a href="19951.php">maryam moein: "Re: [OMPI users] mpi_group_incl erros"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The third argument to MPI_Group_incl() and MPI_Group_excl() is supposed to be an array, not an integer constant.  Have a look at the man page for these two functions.
<br>
<p>On Aug 16, 2012, at 3:30 PM, maryam moein wrote:
<br>
<p><span class="quotelev1">&gt; I'm so sorry, Actually my problem is in another mpi program which is &quot;sudoku game&quot;. But because of the fact I got inclusion error whenever I use MPI_Group_incl. For simplicity, I decided to put a simple program with MPI_Group_incl. Please take a look at the following lines of code, and please note that in this program I'm supposed to work just with 82 processes and I tried to divide the processes into 2 groups, namely &quot;master&quot; and &quot;workers&quot;, master for &quot;rank 0&quot; process and workers for rest of processes(81 processes). 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Here is the codes:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #include &lt;string.h&gt;
</span><br>
<span class="quotelev1">&gt; #include &quot;mpi.h&quot;
</span><br>
<span class="quotelev1">&gt; #include &lt;stdio.h&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;unistd.h&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;time.h&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;stdlib.h&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; int main(int argc, char *argv[])
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;         //Initializing the MPI world, rank, and size
</span><br>
<span class="quotelev1">&gt;        int  size,rank,m,w,i;
</span><br>
<span class="quotelev1">&gt;        MPI_Group group,master,workers;
</span><br>
<span class="quotelev1">&gt;        MPI_Comm comm_world, comm_workers, comm_master;
</span><br>
<span class="quotelev1">&gt;        MPI_Status status;
</span><br>
<span class="quotelev1">&gt;         MPI_Request request;
</span><br>
<span class="quotelev1">&gt;         MPI_Init(&amp;argc, &amp;argv);
</span><br>
<span class="quotelev1">&gt;          MPI_Comm_size(MPI_COMM_WORLD, &amp;size);
</span><br>
<span class="quotelev1">&gt;          MPI_Comm_rank(MPI_COMM_WORLD, &amp;rank);
</span><br>
<span class="quotelev1">&gt;           if (size != 82 ){
</span><br>
<span class="quotelev1">&gt;                 printf(&quot;Please run with 82 processors.\n&quot;);
</span><br>
<span class="quotelev1">&gt;                 fflush(stdout);
</span><br>
<span class="quotelev1">&gt;                 MPI_Finalize();
</span><br>
<span class="quotelev1">&gt;                 exit(1);
</span><br>
<span class="quotelev1">&gt;             }
</span><br>
<span class="quotelev1">&gt;     comm_world = MPI_COMM_WORLD;
</span><br>
<span class="quotelev1">&gt;     MPI_Comm_group(comm_world, &amp;group);
</span><br>
<span class="quotelev1">&gt;     MPI_Group_incl(group, 1, 0 , &amp;master);
</span><br>
<span class="quotelev1">&gt;     MPI_Group_excl(group, 1, 0, &amp;workers);
</span><br>
<span class="quotelev1">&gt;     MPI_Comm_create(comm_world, master, &amp;comm_master);
</span><br>
<span class="quotelev1">&gt;     MPI_Comm_create(comm_world, workers, &amp;comm_workers);
</span><br>
<span class="quotelev1">&gt;     MPI_Finalize();
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; From: Jeff Squyres &lt;jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users &lt;users_at_[hidden]&gt; 
</span><br>
<span class="quotelev1">&gt; Cc: maryam moein &lt;maryam_moein2005_at_[hidden]&gt; 
</span><br>
<span class="quotelev1">&gt; Sent: Thursday, August 16, 2012 7:41 PM
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] mpi_group_incl erros
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Further, if Neven is greater than 3, then you've got uninitialized values in the members array.  That could be causing Open MPI to say &quot;there's a bad rank number in there!&quot;, for example, if members[3] is randomly initialized to 1234.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Aug 16, 2012, at 10:01 AM, Ralph Castain wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Well, one thing immediately leaps to the eye. You compute Neven based on the number of procs in the job, which you set when executing mpirun. However, the number of members you put in your group is fixed. Then you pass Neven to the MPI_Group call as the parameter telling it how many entries are in your member array!
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; On Aug 16, 2012, at 5:07 AM, maryam moein &lt;maryam_moein2005_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; I'm new memeber in this weblog, and I should deliver my assignment as soon as possible, but I have a big problem that I can't solve it. Please help me. In MPI I should divide my group into two groups. But all the time when I want to run a program I got error about mpi_group_incl. This is my error: 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; [ubuntu:3346] *** An error occurred in MPI_Group_incl
</span><br>
<span class="quotelev3">&gt; &gt;&gt; [ubuntu:3346] *** on communicator MPI_COMM_WORLD
</span><br>
<span class="quotelev3">&gt; &gt;&gt; [ubuntu:3346] *** MPI_ERR_RANK: invalid rank
</span><br>
<span class="quotelev3">&gt; &gt;&gt; [ubuntu:3346] *** MPI_ERRORS_ARE_FATAL (your MPI job will now abort)
</span><br>
<span class="quotelev3">&gt; &gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt; &gt;&gt; mpiexec has exited due to process rank 0 with PID 3345 on
</span><br>
<span class="quotelev3">&gt; &gt;&gt; node ubuntu exiting without calling &quot;finalize&quot;. This may
</span><br>
<span class="quotelev3">&gt; &gt;&gt; have caused other processes in the application to be
</span><br>
<span class="quotelev3">&gt; &gt;&gt; terminated by signals sent by mpiexec (as reported here).
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; I should mention that I run this program with diffrent number of process but I got same errors. In below you can find my c program.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt;  #include &lt;stdio.h&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; #include &quot;mpi.h&quot;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; #include &lt;unistd.h&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; #include &lt;time.h&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; #include &lt;stdlib.h&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; #include &lt;string.h&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; void main(int argc, char *argv[]) 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; {
</span><br>
<span class="quotelev3">&gt; &gt;&gt;      int Iam, p;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;      int Neven, Nodd, members[6], even_rank, odd_rank;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;      MPI_Group group_world, even_group, odd_group;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; /* Starts MPI processes ... */
</span><br>
<span class="quotelev3">&gt; &gt;&gt;      MPI_Init(&amp;argc, &amp;argv);                          /* starts MPI */
</span><br>
<span class="quotelev3">&gt; &gt;&gt;      MPI_Comm_rank(MPI_COMM_WORLD, &amp;Iam);  /* get current process id */
</span><br>
<span class="quotelev3">&gt; &gt;&gt;      MPI_Comm_size(MPI_COMM_WORLD, &amp;p);    /* get number of processes */
</span><br>
<span class="quotelev3">&gt; &gt;&gt;      Neven = (p + 1)/2;    /* All processes of MPI_COMM_WORLD are divided */
</span><br>
<span class="quotelev3">&gt; &gt;&gt;      Nodd = p - Neven;      /* into 2 groups, odd- and even-numbered groups */
</span><br>
<span class="quotelev3">&gt; &gt;&gt;      members[0] = 2;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;      members[1] = 0;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;      members[2] = 4;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;      MPI_Comm_group(MPI_COMM_WORLD, &amp;group_world);
</span><br>
<span class="quotelev3">&gt; &gt;&gt;      MPI_Group_incl(group_world, Neven, members, &amp;even_group);
</span><br>
<span class="quotelev3">&gt; &gt;&gt;      MPI_Group_excl(group_world, Neven, members,  &amp;odd_group);
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt;      MPI_Barrier(MPI_COMM_WORLD);
</span><br>
<span class="quotelev3">&gt; &gt;&gt;      if(Iam == 0) {
</span><br>
<span class="quotelev3">&gt; &gt;&gt;        printf(&quot;MPI_Group_incl/excl Usage Example\n&quot;);
</span><br>
<span class="quotelev3">&gt; &gt;&gt;        printf(&quot;\n&quot;);
</span><br>
<span class="quotelev3">&gt; &gt;&gt;        printf(&quot;Number of processes is %d\n&quot;, p);
</span><br>
<span class="quotelev3">&gt; &gt;&gt;        printf(&quot;Number of odd processes is %d\n&quot;, Nodd);
</span><br>
<span class="quotelev3">&gt; &gt;&gt;        printf(&quot;Number of even processes is %d\n&quot;, Neven);
</span><br>
<span class="quotelev3">&gt; &gt;&gt;        printf(&quot;\n&quot;);
</span><br>
<span class="quotelev3">&gt; &gt;&gt;        printf(&quot;    Iam    even      odd\n&quot;);
</span><br>
<span class="quotelev3">&gt; &gt;&gt;      }
</span><br>
<span class="quotelev3">&gt; &gt;&gt;      MPI_Barrier(MPI_COMM_WORLD);
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt;      MPI_Group_rank(even_group, &amp;even_rank);
</span><br>
<span class="quotelev3">&gt; &gt;&gt;      MPI_Group_rank( odd_group,  &amp;odd_rank);
</span><br>
<span class="quotelev3">&gt; &gt;&gt;      printf(&quot;%d %d %d\n&quot;,Iam, even_rank, odd_rank);
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt;      MPI_Finalize();                  /* let MPI finish up ...  */
</span><br>
<span class="quotelev3">&gt; &gt;&gt; }    
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt; &gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt; 
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
<span class="quotelev1">&gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19955.php">Christian Perrier: "[OMPI users] issue with column type in language C"</a>
<li><strong>Previous message:</strong> <a href="19953.php">Jeff Squyres: "Re: [OMPI users] Openmpi ./configure error - Fortran compiling error"</a>
<li><strong>In reply to:</strong> <a href="19951.php">maryam moein: "Re: [OMPI users] mpi_group_incl erros"</a>
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

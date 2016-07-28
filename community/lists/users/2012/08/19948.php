<?
$subject_val = "Re: [OMPI users] mpi_group_incl erros";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Aug 16 10:01:11 2012" -->
<!-- isoreceived="20120816140111" -->
<!-- sent="Thu, 16 Aug 2012 07:01:03 -0700" -->
<!-- isosent="20120816140103" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpi_group_incl erros" -->
<!-- id="C6193BA7-95E6-417D-ABC5-6A0E54D31131_at_open-mpi.org" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="1345118842.19217.YahooMailNeo_at_web125804.mail.ne1.yahoo.com" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-08-16 10:01:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19949.php">Jeff Squyres: "Re: [OMPI users] mpi_group_incl erros"</a>
<li><strong>Previous message:</strong> <a href="19947.php">maryam moein: "[OMPI users] mpi_group_incl erros"</a>
<li><strong>In reply to:</strong> <a href="19947.php">maryam moein: "[OMPI users] mpi_group_incl erros"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19949.php">Jeff Squyres: "Re: [OMPI users] mpi_group_incl erros"</a>
<li><strong>Reply:</strong> <a href="19949.php">Jeff Squyres: "Re: [OMPI users] mpi_group_incl erros"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Well, one thing immediately leaps to the eye. You compute Neven based on the number of procs in the job, which you set when executing mpirun. However, the number of members you put in your group is fixed. Then you pass Neven to the MPI_Group call as the parameter telling it how many entries are in your member array!
<br>
<p>On Aug 16, 2012, at 5:07 AM, maryam moein &lt;maryam_moein2005_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; I'm new memeber in this weblog, and I should deliver my assignment as soon as possible, but I have a big problem that I can't solve it. Please help me. In MPI I should divide my group into two groups. But all the time when I want to run a program I got error about mpi_group_incl. This is my error: 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [ubuntu:3346] *** An error occurred in MPI_Group_incl
</span><br>
<span class="quotelev1">&gt; [ubuntu:3346] *** on communicator MPI_COMM_WORLD
</span><br>
<span class="quotelev1">&gt; [ubuntu:3346] *** MPI_ERR_RANK: invalid rank
</span><br>
<span class="quotelev1">&gt; [ubuntu:3346] *** MPI_ERRORS_ARE_FATAL (your MPI job will now abort)
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; mpiexec has exited due to process rank 0 with PID 3345 on
</span><br>
<span class="quotelev1">&gt; node ubuntu exiting without calling &quot;finalize&quot;. This may
</span><br>
<span class="quotelev1">&gt; have caused other processes in the application to be
</span><br>
<span class="quotelev1">&gt; terminated by signals sent by mpiexec (as reported here).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I should mention that I run this program with diffrent number of process but I got same errors. In below you can find my c program.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  #include &lt;stdio.h&gt;
</span><br>
<span class="quotelev1">&gt; #include &quot;mpi.h&quot;
</span><br>
<span class="quotelev1">&gt; #include &lt;unistd.h&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;time.h&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;stdlib.h&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;string.h&gt;
</span><br>
<span class="quotelev1">&gt; void main(int argc, char *argv[]) 
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt;       int Iam, p;
</span><br>
<span class="quotelev1">&gt;       int Neven, Nodd, members[6], even_rank, odd_rank;
</span><br>
<span class="quotelev1">&gt;       MPI_Group group_world, even_group, odd_group;
</span><br>
<span class="quotelev1">&gt; /* Starts MPI processes ... */
</span><br>
<span class="quotelev1">&gt;       MPI_Init(&amp;argc, &amp;argv);                          /* starts MPI */
</span><br>
<span class="quotelev1">&gt;       MPI_Comm_rank(MPI_COMM_WORLD, &amp;Iam);  /* get current process id */
</span><br>
<span class="quotelev1">&gt;       MPI_Comm_size(MPI_COMM_WORLD, &amp;p);    /* get number of processes */
</span><br>
<span class="quotelev1">&gt;       Neven = (p + 1)/2;     /* All processes of MPI_COMM_WORLD are divided */
</span><br>
<span class="quotelev1">&gt;       Nodd = p - Neven;      /* into 2 groups, odd- and even-numbered groups */
</span><br>
<span class="quotelev1">&gt;       members[0] = 2;
</span><br>
<span class="quotelev1">&gt;       members[1] = 0;
</span><br>
<span class="quotelev1">&gt;       members[2] = 4;
</span><br>
<span class="quotelev1">&gt;       MPI_Comm_group(MPI_COMM_WORLD, &amp;group_world);
</span><br>
<span class="quotelev1">&gt;       MPI_Group_incl(group_world, Neven, members, &amp;even_group);
</span><br>
<span class="quotelev1">&gt;       MPI_Group_excl(group_world, Neven, members,  &amp;odd_group);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;       MPI_Barrier(MPI_COMM_WORLD);
</span><br>
<span class="quotelev1">&gt;       if(Iam == 0) {
</span><br>
<span class="quotelev1">&gt;         printf(&quot;MPI_Group_incl/excl Usage Example\n&quot;);
</span><br>
<span class="quotelev1">&gt;         printf(&quot;\n&quot;);
</span><br>
<span class="quotelev1">&gt;         printf(&quot;Number of processes is %d\n&quot;, p);
</span><br>
<span class="quotelev1">&gt;         printf(&quot;Number of odd processes is %d\n&quot;, Nodd);
</span><br>
<span class="quotelev1">&gt;         printf(&quot;Number of even processes is %d\n&quot;, Neven);
</span><br>
<span class="quotelev1">&gt;         printf(&quot;\n&quot;);
</span><br>
<span class="quotelev1">&gt;         printf(&quot;     Iam     even      odd\n&quot;);
</span><br>
<span class="quotelev1">&gt;       }
</span><br>
<span class="quotelev1">&gt;       MPI_Barrier(MPI_COMM_WORLD);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;       MPI_Group_rank(even_group, &amp;even_rank);
</span><br>
<span class="quotelev1">&gt;       MPI_Group_rank( odd_group,  &amp;odd_rank);
</span><br>
<span class="quotelev1">&gt;       printf(&quot;%d %d %d\n&quot;,Iam, even_rank, odd_rank);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;       MPI_Finalize();                  /* let MPI finish up ...  */
</span><br>
<span class="quotelev1">&gt; }     
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
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-19948/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19949.php">Jeff Squyres: "Re: [OMPI users] mpi_group_incl erros"</a>
<li><strong>Previous message:</strong> <a href="19947.php">maryam moein: "[OMPI users] mpi_group_incl erros"</a>
<li><strong>In reply to:</strong> <a href="19947.php">maryam moein: "[OMPI users] mpi_group_incl erros"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19949.php">Jeff Squyres: "Re: [OMPI users] mpi_group_incl erros"</a>
<li><strong>Reply:</strong> <a href="19949.php">Jeff Squyres: "Re: [OMPI users] mpi_group_incl erros"</a>
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

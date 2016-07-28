<?
$subject_val = "Re: [OMPI users] mpi_group_incl erros";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Aug 16 13:41:53 2012" -->
<!-- isoreceived="20120816174153" -->
<!-- sent="Thu, 16 Aug 2012 13:41:47 -0400" -->
<!-- isosent="20120816174147" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpi_group_incl erros" -->
<!-- id="27E18564-3050-40D4-9503-94C239C489D9_at_cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="C6193BA7-95E6-417D-ABC5-6A0E54D31131_at_open-mpi.org" -->
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
<strong>Date:</strong> 2012-08-16 13:41:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19950.php">eatdirt: "[OMPI users] hangs of MPI_WIN_LOCK/UNLOCK (gfortran)"</a>
<li><strong>Previous message:</strong> <a href="19948.php">Ralph Castain: "Re: [OMPI users] mpi_group_incl erros"</a>
<li><strong>In reply to:</strong> <a href="19948.php">Ralph Castain: "Re: [OMPI users] mpi_group_incl erros"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19951.php">maryam moein: "Re: [OMPI users] mpi_group_incl erros"</a>
<li><strong>Reply:</strong> <a href="19951.php">maryam moein: "Re: [OMPI users] mpi_group_incl erros"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Further, if Neven is greater than 3, then you've got uninitialized values in the members array.  That could be causing Open MPI to say &quot;there's a bad rank number in there!&quot;, for example, if members[3] is randomly initialized to 1234.
<br>
<p><p>On Aug 16, 2012, at 10:01 AM, Ralph Castain wrote:
<br>
<p><span class="quotelev1">&gt; Well, one thing immediately leaps to the eye. You compute Neven based on the number of procs in the job, which you set when executing mpirun. However, the number of members you put in your group is fixed. Then you pass Neven to the MPI_Group call as the parameter telling it how many entries are in your member array!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Aug 16, 2012, at 5:07 AM, maryam moein &lt;maryam_moein2005_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I'm new memeber in this weblog, and I should deliver my assignment as soon as possible, but I have a big problem that I can't solve it. Please help me. In MPI I should divide my group into two groups. But all the time when I want to run a program I got error about mpi_group_incl. This is my error: 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; [ubuntu:3346] *** An error occurred in MPI_Group_incl
</span><br>
<span class="quotelev2">&gt;&gt; [ubuntu:3346] *** on communicator MPI_COMM_WORLD
</span><br>
<span class="quotelev2">&gt;&gt; [ubuntu:3346] *** MPI_ERR_RANK: invalid rank
</span><br>
<span class="quotelev2">&gt;&gt; [ubuntu:3346] *** MPI_ERRORS_ARE_FATAL (your MPI job will now abort)
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; mpiexec has exited due to process rank 0 with PID 3345 on
</span><br>
<span class="quotelev2">&gt;&gt; node ubuntu exiting without calling &quot;finalize&quot;. This may
</span><br>
<span class="quotelev2">&gt;&gt; have caused other processes in the application to be
</span><br>
<span class="quotelev2">&gt;&gt; terminated by signals sent by mpiexec (as reported here).
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I should mention that I run this program with diffrent number of process but I got same errors. In below you can find my c program.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;  #include &lt;stdio.h&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;mpi.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &lt;unistd.h&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #include &lt;time.h&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #include &lt;stdlib.h&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #include &lt;string.h&gt;
</span><br>
<span class="quotelev2">&gt;&gt; void main(int argc, char *argv[]) 
</span><br>
<span class="quotelev2">&gt;&gt; {
</span><br>
<span class="quotelev2">&gt;&gt;       int Iam, p;
</span><br>
<span class="quotelev2">&gt;&gt;       int Neven, Nodd, members[6], even_rank, odd_rank;
</span><br>
<span class="quotelev2">&gt;&gt;       MPI_Group group_world, even_group, odd_group;
</span><br>
<span class="quotelev2">&gt;&gt; /* Starts MPI processes ... */
</span><br>
<span class="quotelev2">&gt;&gt;       MPI_Init(&amp;argc, &amp;argv);                          /* starts MPI */
</span><br>
<span class="quotelev2">&gt;&gt;       MPI_Comm_rank(MPI_COMM_WORLD, &amp;Iam);  /* get current process id */
</span><br>
<span class="quotelev2">&gt;&gt;       MPI_Comm_size(MPI_COMM_WORLD, &amp;p);    /* get number of processes */
</span><br>
<span class="quotelev2">&gt;&gt;       Neven = (p + 1)/2;     /* All processes of MPI_COMM_WORLD are divided */
</span><br>
<span class="quotelev2">&gt;&gt;       Nodd = p - Neven;      /* into 2 groups, odd- and even-numbered groups */
</span><br>
<span class="quotelev2">&gt;&gt;       members[0] = 2;
</span><br>
<span class="quotelev2">&gt;&gt;       members[1] = 0;
</span><br>
<span class="quotelev2">&gt;&gt;       members[2] = 4;
</span><br>
<span class="quotelev2">&gt;&gt;       MPI_Comm_group(MPI_COMM_WORLD, &amp;group_world);
</span><br>
<span class="quotelev2">&gt;&gt;       MPI_Group_incl(group_world, Neven, members, &amp;even_group);
</span><br>
<span class="quotelev2">&gt;&gt;       MPI_Group_excl(group_world, Neven, members,  &amp;odd_group);
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;       MPI_Barrier(MPI_COMM_WORLD);
</span><br>
<span class="quotelev2">&gt;&gt;       if(Iam == 0) {
</span><br>
<span class="quotelev2">&gt;&gt;         printf(&quot;MPI_Group_incl/excl Usage Example\n&quot;);
</span><br>
<span class="quotelev2">&gt;&gt;         printf(&quot;\n&quot;);
</span><br>
<span class="quotelev2">&gt;&gt;         printf(&quot;Number of processes is %d\n&quot;, p);
</span><br>
<span class="quotelev2">&gt;&gt;         printf(&quot;Number of odd processes is %d\n&quot;, Nodd);
</span><br>
<span class="quotelev2">&gt;&gt;         printf(&quot;Number of even processes is %d\n&quot;, Neven);
</span><br>
<span class="quotelev2">&gt;&gt;         printf(&quot;\n&quot;);
</span><br>
<span class="quotelev2">&gt;&gt;         printf(&quot;     Iam     even      odd\n&quot;);
</span><br>
<span class="quotelev2">&gt;&gt;       }
</span><br>
<span class="quotelev2">&gt;&gt;       MPI_Barrier(MPI_COMM_WORLD);
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;       MPI_Group_rank(even_group, &amp;even_rank);
</span><br>
<span class="quotelev2">&gt;&gt;       MPI_Group_rank( odd_group,  &amp;odd_rank);
</span><br>
<span class="quotelev2">&gt;&gt;       printf(&quot;%d %d %d\n&quot;,Iam, even_rank, odd_rank);
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;       MPI_Finalize();                  /* let MPI finish up ...  */
</span><br>
<span class="quotelev2">&gt;&gt; }     
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<li><strong>Next message:</strong> <a href="19950.php">eatdirt: "[OMPI users] hangs of MPI_WIN_LOCK/UNLOCK (gfortran)"</a>
<li><strong>Previous message:</strong> <a href="19948.php">Ralph Castain: "Re: [OMPI users] mpi_group_incl erros"</a>
<li><strong>In reply to:</strong> <a href="19948.php">Ralph Castain: "Re: [OMPI users] mpi_group_incl erros"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19951.php">maryam moein: "Re: [OMPI users] mpi_group_incl erros"</a>
<li><strong>Reply:</strong> <a href="19951.php">maryam moein: "Re: [OMPI users] mpi_group_incl erros"</a>
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

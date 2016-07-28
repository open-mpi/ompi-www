<?
$subject_val = "Re: [OMPI users] Simple MPI_Comm_spawn program hangs";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Dec  1 17:57:13 2007" -->
<!-- isoreceived="20071201225713" -->
<!-- sent="Sat, 01 Dec 2007 16:56:59 -0600" -->
<!-- isosent="20071201225659" -->
<!-- name="Edgar Gabriel" -->
<!-- email="gabriel_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Simple MPI_Comm_spawn program hangs" -->
<!-- id="4751E6BB.7070700_at_cs.uh.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="B50C5DA7-88B1-4DB1-BB98-5C55E797729C_at_cchmc.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] Simple MPI_Comm_spawn program hangs<br>
<strong>From:</strong> Edgar Gabriel (<em>gabriel_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-12-01 17:56:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4575.php">Prakash Velayutham: "Re: [OMPI users] Simple MPI_Comm_spawn program hangs"</a>
<li><strong>Previous message:</strong> <a href="4573.php">Prakash Velayutham: "[OMPI users] Simple MPI_Comm_spawn program hangs"</a>
<li><strong>In reply to:</strong> <a href="4573.php">Prakash Velayutham: "[OMPI users] Simple MPI_Comm_spawn program hangs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4575.php">Prakash Velayutham: "Re: [OMPI users] Simple MPI_Comm_spawn program hangs"</a>
<li><strong>Reply:</strong> <a href="4575.php">Prakash Velayutham: "Re: [OMPI users] Simple MPI_Comm_spawn program hangs"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
MPI_Comm_spawn has to build an intercommunicator with the child process 
<br>
that it spawns. Thus, you can not spawn a non-MPI job such as 
<br>
/bin/hostname, since the parent process waits for some messages from the 
<br>
child process(es) in order to set up the intercommunicator.
<br>
<p>Thanks
<br>
Edgar
<br>
<p>Prakash Velayutham wrote:
<br>
<span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Open MPI 1.2.4
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am trying to run a simple C program.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ######################################################################################
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #include &lt;string.h&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;stdlib.h&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;stdio.h&gt;
</span><br>
<span class="quotelev1">&gt; #include &quot;mpi.h&quot;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; void
</span><br>
<span class="quotelev1">&gt; main(int argc, char **argv)
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;          int             tag = 0;
</span><br>
<span class="quotelev1">&gt;          int             my_rank;
</span><br>
<span class="quotelev1">&gt;          int             num_proc;
</span><br>
<span class="quotelev1">&gt;          char            message_0[] = &quot;hello slave, i'm your master&quot;;
</span><br>
<span class="quotelev1">&gt;          char            message_1[50];
</span><br>
<span class="quotelev1">&gt;          char            master_data[] = &quot;slaves to work&quot;;
</span><br>
<span class="quotelev1">&gt;          int             array_of_errcodes[10];
</span><br>
<span class="quotelev1">&gt;          int             num;
</span><br>
<span class="quotelev1">&gt;          MPI_Status      status;
</span><br>
<span class="quotelev1">&gt;          MPI_Comm        inter_comm;
</span><br>
<span class="quotelev1">&gt;          MPI_Info        info;
</span><br>
<span class="quotelev1">&gt;          int             arr[1];
</span><br>
<span class="quotelev1">&gt;          int             rc1;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;          MPI_Init(&amp;argc, &amp;argv);
</span><br>
<span class="quotelev1">&gt;          MPI_Comm_rank(MPI_COMM_WORLD, &amp;my_rank);
</span><br>
<span class="quotelev1">&gt;          MPI_Comm_size(MPI_COMM_WORLD, &amp;num_proc);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;          printf(&quot;MASTER : spawning a slave ... \n&quot;);
</span><br>
<span class="quotelev1">&gt;          rc1 = MPI_Comm_spawn(&quot;/bin/hostname&quot;, MPI_ARGV_NULL, 1,  
</span><br>
<span class="quotelev1">&gt; MPI_INFO_NULL, 0, MPI_COMM_WORLD, &amp;inter_comm, arr);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;          MPI_Finalize();
</span><br>
<span class="quotelev1">&gt;          exit(0);
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ######################################################################################
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This program hangs as below:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; prakash_at_bmi-xeon1-01:~/thesis/CS/Samples&gt; ./master1
</span><br>
<span class="quotelev1">&gt; MASTER : spawning a slave ...
</span><br>
<span class="quotelev1">&gt; bmi-xeon1-01
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Any ideas  why?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Prakash
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><pre>
-- 
Edgar Gabriel
Assistant Professor
Parallel Software Technologies Lab      <a href="http://pstl.cs.uh.edu">http://pstl.cs.uh.edu</a>
Department of Computer Science          University of Houston
Philip G. Hoffman Hall, Room 524        Houston, TX-77204, USA
Tel: +1 (713) 743-3857                  Fax: +1 (713) 743-3335
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4575.php">Prakash Velayutham: "Re: [OMPI users] Simple MPI_Comm_spawn program hangs"</a>
<li><strong>Previous message:</strong> <a href="4573.php">Prakash Velayutham: "[OMPI users] Simple MPI_Comm_spawn program hangs"</a>
<li><strong>In reply to:</strong> <a href="4573.php">Prakash Velayutham: "[OMPI users] Simple MPI_Comm_spawn program hangs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4575.php">Prakash Velayutham: "Re: [OMPI users] Simple MPI_Comm_spawn program hangs"</a>
<li><strong>Reply:</strong> <a href="4575.php">Prakash Velayutham: "Re: [OMPI users] Simple MPI_Comm_spawn program hangs"</a>
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

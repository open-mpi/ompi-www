<?
$subject_val = "Re: [OMPI users] Simple MPI_Comm_spawn program hangs";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Dec  2 20:37:13 2007" -->
<!-- isoreceived="20071203013713" -->
<!-- sent="Sun, 02 Dec 2007 19:36:55 -0600" -->
<!-- isosent="20071203013655" -->
<!-- name="Edgar Gabriel" -->
<!-- email="gabriel_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Simple MPI_Comm_spawn program hangs" -->
<!-- id="47535DB7.6000007_at_cs.uh.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="EDE18332-E52C-4DB2-B56B-FC5A8EC725A3_at_cchmc.org" -->
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
<strong>Date:</strong> 2007-12-02 20:36:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4578.php">de Almeida, Valmor F.: "[OMPI users] Segmentation fault: intel 10.1.008 compilers w/ openmpi-1.2.4"</a>
<li><strong>Previous message:</strong> <a href="4576.php">Brian Budge: "Re: [OMPI users] Run a process double"</a>
<li><strong>In reply to:</strong> <a href="4575.php">Prakash Velayutham: "Re: [OMPI users] Simple MPI_Comm_spawn program hangs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4601.php">Prakash Velayutham: "Re: [OMPI users] Simple MPI_Comm_spawn program hangs"</a>
<li><strong>Reply:</strong> <a href="4601.php">Prakash Velayutham: "Re: [OMPI users] Simple MPI_Comm_spawn program hangs"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
MPI_Comm_spawn is tested nightly by the test our suites, so it should 
<br>
definitely work...
<br>
<p>Thanks
<br>
Edgar
<br>
<p>Prakash Velayutham wrote:
<br>
<span class="quotelev1">&gt; Thanks Edgar. I did not know that. Really?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Anyways, you are sure, an MPI job will work as a spawned process  
</span><br>
<span class="quotelev1">&gt; instead of &quot;hostname&quot;?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Prakash
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Dec 1, 2007, at 5:56 PM, Edgar Gabriel wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; MPI_Comm_spawn has to build an intercommunicator with the child  
</span><br>
<span class="quotelev2">&gt;&gt; process
</span><br>
<span class="quotelev2">&gt;&gt; that it spawns. Thus, you can not spawn a non-MPI job such as
</span><br>
<span class="quotelev2">&gt;&gt; /bin/hostname, since the parent process waits for some messages from  
</span><br>
<span class="quotelev2">&gt;&gt; the
</span><br>
<span class="quotelev2">&gt;&gt; child process(es) in order to set up the intercommunicator.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks
</span><br>
<span class="quotelev2">&gt;&gt; Edgar
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Prakash Velayutham wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hello,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Open MPI 1.2.4
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I am trying to run a simple C program.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ######################################################################################
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #include &lt;string.h&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #include &lt;stdlib.h&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #include &lt;stdio.h&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #include &quot;mpi.h&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; void
</span><br>
<span class="quotelev3">&gt;&gt;&gt; main(int argc, char **argv)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; {
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         int             tag = 0;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         int             my_rank;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         int             num_proc;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         char            message_0[] = &quot;hello slave, i'm your master&quot;;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         char            message_1[50];
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         char            master_data[] = &quot;slaves to work&quot;;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         int             array_of_errcodes[10];
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         int             num;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         MPI_Status      status;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         MPI_Comm        inter_comm;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         MPI_Info        info;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         int             arr[1];
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         int             rc1;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         MPI_Init(&amp;argc, &amp;argv);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         MPI_Comm_rank(MPI_COMM_WORLD, &amp;my_rank);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         MPI_Comm_size(MPI_COMM_WORLD, &amp;num_proc);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         printf(&quot;MASTER : spawning a slave ... \n&quot;);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         rc1 = MPI_Comm_spawn(&quot;/bin/hostname&quot;, MPI_ARGV_NULL, 1,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI_INFO_NULL, 0, MPI_COMM_WORLD, &amp;inter_comm, arr);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         MPI_Finalize();
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         exit(0);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; }
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ######################################################################################
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; This program hangs as below:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; prakash_at_bmi-xeon1-01:~/thesis/CS/Samples&gt; ./master1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MASTER : spawning a slave ...
</span><br>
<span class="quotelev3">&gt;&gt;&gt; bmi-xeon1-01
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Any ideas  why?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Prakash
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; Edgar Gabriel
</span><br>
<span class="quotelev2">&gt;&gt; Assistant Professor
</span><br>
<span class="quotelev2">&gt;&gt; Parallel Software Technologies Lab      <a href="http://pstl.cs.uh.edu">http://pstl.cs.uh.edu</a>
</span><br>
<span class="quotelev2">&gt;&gt; Department of Computer Science          University of Houston
</span><br>
<span class="quotelev2">&gt;&gt; Philip G. Hoffman Hall, Room 524        Houston, TX-77204, USA
</span><br>
<span class="quotelev2">&gt;&gt; Tel: +1 (713) 743-3857                  Fax: +1 (713) 743-3335
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
<li><strong>Next message:</strong> <a href="4578.php">de Almeida, Valmor F.: "[OMPI users] Segmentation fault: intel 10.1.008 compilers w/ openmpi-1.2.4"</a>
<li><strong>Previous message:</strong> <a href="4576.php">Brian Budge: "Re: [OMPI users] Run a process double"</a>
<li><strong>In reply to:</strong> <a href="4575.php">Prakash Velayutham: "Re: [OMPI users] Simple MPI_Comm_spawn program hangs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4601.php">Prakash Velayutham: "Re: [OMPI users] Simple MPI_Comm_spawn program hangs"</a>
<li><strong>Reply:</strong> <a href="4601.php">Prakash Velayutham: "Re: [OMPI users] Simple MPI_Comm_spawn program hangs"</a>
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

<?
$subject_val = "Re: [OMPI users] Error when using more than 88 processors for a specific executable -Abyss";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Oct 14 14:16:26 2011" -->
<!-- isoreceived="20111014181626" -->
<!-- sent="Fri, 14 Oct 2011 12:15:52 -0600" -->
<!-- isosent="20111014181552" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Error when using more than 88 processors for a specific executable -Abyss" -->
<!-- id="F898A396-68E1-4DEC-869E-516AC551C762_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAAx9Y01erey7gi0wdoGLfkMMzqnNeowG4q3XKj8=z+XRLCELKg_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Error when using more than 88 processors for a specific executable -Abyss<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-10-14 14:15:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17543.php">Thatyene Louise Alves de Souza Ramos: "Re: [OMPI users] MPI_Comm_accept - Busy wait"</a>
<li><strong>Previous message:</strong> <a href="17541.php">Ashwani Kumar Mishra: "[OMPI users] Error when using more than 88 processors for a specific executable -Abyss"</a>
<li><strong>In reply to:</strong> <a href="17541.php">Ashwani Kumar Mishra: "[OMPI users] Error when using more than 88 processors for a specific executable -Abyss"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17544.php">Ashwani Kumar Mishra: "Re: [OMPI users] Error when using more than 88 processors for a specific executable -Abyss"</a>
<li><strong>Reply:</strong> <a href="17544.php">Ashwani Kumar Mishra: "Re: [OMPI users] Error when using more than 88 processors for a specific executable -Abyss"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Can't offer much about the qsub job. On the first one, what is your limit on the number of file descriptors? Could be your sys admin has it too low.
<br>
<p><p>On Oct 14, 2011, at 12:07 PM, Ashwani Kumar Mishra wrote:
<br>
<p><span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt; When i try to run the following command i receive the following error when i try to submit this job on the cluster having 40 nodes with each node having 8 processor &amp; 8 GB RAM:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Both the command work well, as long as i use only upto 88 processors in the cluster, but the moment i allocate more than 88 processors it gives me the below 2 errors:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I tried to set the ulimit to unlimited &amp; setting mca parameter opal_set_max_sys_limits to 1 but still the problem wont go.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; $ mpirun=/opt/psc/ompi/bin/mpirun abyss-pe np=100 name=cattle k=50 n=10  in=s_1_1_sequence.txt
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /opt/mpi/openmpi/1.3.3/intel/
</span><br>
<span class="quotelev1">&gt; bin/mpirun -np 100 ABYSS-P -k50 -q3  --coverage-hist=coverage.hist -s cattle-bubbles.fa  -o cattle-1.fa s_1_1_sequence.txt
</span><br>
<span class="quotelev1">&gt; [coe:19807] [[62863,0],0] ORTE_ERROR_LOG: The system limit on number of pipes a process can open was reached in file base/iof_base_setup.c at line 107
</span><br>
<span class="quotelev1">&gt; [coe.:19807] [[62863,0],0] ORTE_ERROR_LOG: The system limit on number of pipes a process can open was reached in file odls_default_module.c at line 203
</span><br>
<span class="quotelev1">&gt; [coe.:19807] [[62863,0],0] ORTE_ERROR_LOG: The system limit on number of network connections a process can open was reached in file oob_tcp.c at line 447
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; Error: system limit exceeded on number of network connections that can be open
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This can be resolved by setting the mca parameter opal_set_max_sys_limits to 1,
</span><br>
<span class="quotelev1">&gt; increasing your limit descriptor setting (using limit or ulimit commands),
</span><br>
<span class="quotelev1">&gt; or asking the system administrator to increase the system limit.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; make: *** [cattle-1.fa] Error 1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; When i submit the same job through qsub, i receive the following error:
</span><br>
<span class="quotelev1">&gt; $ qsub  -cwd -pe  orte 100 -o qsub.out -e qsub.err -b y -N  abyss `which mpirun` /home/genome/abyss/bin/ABYSS-P -k 50 s_1_1_sequence.txt -o av
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [compute-0-19.local][[28273,1]
</span><br>
<span class="quotelev1">&gt; ,125][btl_tcp_endpoint.c:636:mca_btl_tcp_endpoint_complete_connect] connect() to 173.16.255.231 failed: Connection refused (111)
</span><br>
<span class="quotelev1">&gt; [compute-0-19.local][[28273,1],127][btl_tcp_endpoint.c:636:mca_btl_tcp_endpoint_complete_connect] connect() to 173.16.255.231 failed: Connection refused (111)
</span><br>
<span class="quotelev1">&gt; [compute-0-23.local][[28273,1],135][btl_tcp_endpoint.c:636:mca_btl_tcp_endpoint_complete_connect] connect() to 173.16.255.228 failed: Connection refused (111)
</span><br>
<span class="quotelev1">&gt; [compute-0-23.local][[28273,1],133][btl_tcp_endpoint.c:636:mca_btl_tcp_endpoint_complete_connect] connect() to 173.16.255.228 failed: Connection refused (111)
</span><br>
<span class="quotelev1">&gt; [compute-0-4.local][[28273,1],113][btl_tcp_endpoint.c:636:mca_btl_tcp_endpoint_complete_connect] connect() to 173.16.255.231 failed: Connection refused (111)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Best Regards,
</span><br>
<span class="quotelev1">&gt; Ashwani
</span><br>
<span class="quotelev1">&gt; 
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
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-17542/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17543.php">Thatyene Louise Alves de Souza Ramos: "Re: [OMPI users] MPI_Comm_accept - Busy wait"</a>
<li><strong>Previous message:</strong> <a href="17541.php">Ashwani Kumar Mishra: "[OMPI users] Error when using more than 88 processors for a specific executable -Abyss"</a>
<li><strong>In reply to:</strong> <a href="17541.php">Ashwani Kumar Mishra: "[OMPI users] Error when using more than 88 processors for a specific executable -Abyss"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17544.php">Ashwani Kumar Mishra: "Re: [OMPI users] Error when using more than 88 processors for a specific executable -Abyss"</a>
<li><strong>Reply:</strong> <a href="17544.php">Ashwani Kumar Mishra: "Re: [OMPI users] Error when using more than 88 processors for a specific executable -Abyss"</a>
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

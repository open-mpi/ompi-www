<?
$subject_val = "Re: [OMPI users] Error when using more than 88 processors for a specific executable -Abyss";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Oct 15 10:35:01 2011" -->
<!-- isoreceived="20111015143501" -->
<!-- sent="Sat, 15 Oct 2011 08:34:52 -0600" -->
<!-- isosent="20111015143452" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Error when using more than 88 processors for a specific executable -Abyss" -->
<!-- id="590E862E-5F1B-49FE-B9DF-753FE08E18A3_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAAx9Y03=BEiZz4KKQzPC-P+G2m1SQPes_gW04MF+1j5ETLuf3Q_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2011-10-15 10:34:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17551.php">Gustavo Correa: "Re: [OMPI users] Error when using more than 88 processors for a specific executable -Abyss"</a>
<li><strong>Previous message:</strong> <a href="17549.php">Bj&#246;rn Adlerborn: "[OMPI users] Build error using Cygwin on Winxp"</a>
<li><strong>In reply to:</strong> <a href="17548.php">Ashwani Kumar Mishra: "Re: [OMPI users] Error when using more than 88 processors for a specific executable -Abyss"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17551.php">Gustavo Correa: "Re: [OMPI users] Error when using more than 88 processors for a specific executable -Abyss"</a>
<li><strong>Reply:</strong> <a href="17551.php">Gustavo Correa: "Re: [OMPI users] Error when using more than 88 processors for a specific executable -Abyss"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Okay, let's try spreading them out more, just to avoid putting more on a node than you actually need. Add -bynode to your cmd line. This will spread the procs across all the nodes.
<br>
<p>Our default mode is &quot;byslot&quot;, which means we fill each node before adding procs to the next one. &quot;bynode&quot; puts one proc on each node, wrapping around until all procs have been assigned. You may lose a little performance as shared memory can't be used as much, but at least it has a better chance of running.
<br>
<p><p>On Oct 14, 2011, at 1:29 PM, Ashwani Kumar Mishra wrote:
<br>
<p><span class="quotelev1">&gt; Hi Ralph,
</span><br>
<span class="quotelev1">&gt; No idea how much this program consumes the numbers of file descriptors :(
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Best Regards,
</span><br>
<span class="quotelev1">&gt; Ashwani
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Sat, Oct 15, 2011 at 12:08 AM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; Should be plenty for us - does your program consume a lot?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Oct 14, 2011, at 12:25 PM, Ashwani Kumar Mishra wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Hi Ralph,
</span><br>
<span class="quotelev2">&gt;&gt; fs.file-max = 100000
</span><br>
<span class="quotelev2">&gt;&gt; is this ok or less?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Best Regards,
</span><br>
<span class="quotelev2">&gt;&gt; Ashwani
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Fri, Oct 14, 2011 at 11:45 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Can't offer much about the qsub job. On the first one, what is your limit on the number of file descriptors? Could be your sys admin has it too low.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Oct 14, 2011, at 12:07 PM, Ashwani Kumar Mishra wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hello,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; When i try to run the following command i receive the following error when i try to submit this job on the cluster having 40 nodes with each node having 8 processor &amp; 8 GB RAM:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Both the command work well, as long as i use only upto 88 processors in the cluster, but the moment i allocate more than 88 processors it gives me the below 2 errors:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I tried to set the ulimit to unlimited &amp; setting mca parameter opal_set_max_sys_limits to 1 but still the problem wont go.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; $ mpirun=/opt/psc/ompi/bin/mpirun abyss-pe np=100 name=cattle k=50 n=10  in=s_1_1_sequence.txt
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /opt/mpi/openmpi/1.3.3/intel/
</span><br>
<span class="quotelev3">&gt;&gt;&gt; bin/mpirun -np 100 ABYSS-P -k50 -q3  --coverage-hist=coverage.hist -s cattle-bubbles.fa  -o cattle-1.fa s_1_1_sequence.txt
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [coe:19807] [[62863,0],0] ORTE_ERROR_LOG: The system limit on number of pipes a process can open was reached in file base/iof_base_setup.c at line 107
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [coe.:19807] [[62863,0],0] ORTE_ERROR_LOG: The system limit on number of pipes a process can open was reached in file odls_default_module.c at line 203
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [coe.:19807] [[62863,0],0] ORTE_ERROR_LOG: The system limit on number of network connections a process can open was reached in file oob_tcp.c at line 447
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Error: system limit exceeded on number of network connections that can be open
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; This can be resolved by setting the mca parameter opal_set_max_sys_limits to 1,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; increasing your limit descriptor setting (using limit or ulimit commands),
</span><br>
<span class="quotelev3">&gt;&gt;&gt; or asking the system administrator to increase the system limit.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; make: *** [cattle-1.fa] Error 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; When i submit the same job through qsub, i receive the following error:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; $ qsub  -cwd -pe  orte 100 -o qsub.out -e qsub.err -b y -N  abyss `which mpirun` /home/genome/abyss/bin/ABYSS-P -k 50 s_1_1_sequence.txt -o av
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [compute-0-19.local][[28273,1]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ,125][btl_tcp_endpoint.c:636:mca_btl_tcp_endpoint_complete_connect] connect() to 173.16.255.231 failed: Connection refused (111)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [compute-0-19.local][[28273,1],127][btl_tcp_endpoint.c:636:mca_btl_tcp_endpoint_complete_connect] connect() to 173.16.255.231 failed: Connection refused (111)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [compute-0-23.local][[28273,1],135][btl_tcp_endpoint.c:636:mca_btl_tcp_endpoint_complete_connect] connect() to 173.16.255.228 failed: Connection refused (111)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [compute-0-23.local][[28273,1],133][btl_tcp_endpoint.c:636:mca_btl_tcp_endpoint_complete_connect] connect() to 173.16.255.228 failed: Connection refused (111)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [compute-0-4.local][[28273,1],113][btl_tcp_endpoint.c:636:mca_btl_tcp_endpoint_complete_connect] connect() to 173.16.255.231 failed: Connection refused (111)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Best Regards,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Ashwani
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-17550/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17551.php">Gustavo Correa: "Re: [OMPI users] Error when using more than 88 processors for a specific executable -Abyss"</a>
<li><strong>Previous message:</strong> <a href="17549.php">Bj&#246;rn Adlerborn: "[OMPI users] Build error using Cygwin on Winxp"</a>
<li><strong>In reply to:</strong> <a href="17548.php">Ashwani Kumar Mishra: "Re: [OMPI users] Error when using more than 88 processors for a specific executable -Abyss"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17551.php">Gustavo Correa: "Re: [OMPI users] Error when using more than 88 processors for a specific executable -Abyss"</a>
<li><strong>Reply:</strong> <a href="17551.php">Gustavo Correa: "Re: [OMPI users] Error when using more than 88 processors for a specific executable -Abyss"</a>
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

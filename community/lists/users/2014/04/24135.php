<?
$subject_val = "Re: [OMPI users] How to set a process on a host but not bound to any core";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Apr 10 10:33:22 2014" -->
<!-- isoreceived="20140410143322" -->
<!-- sent="Thu, 10 Apr 2014 07:32:29 -0700" -->
<!-- isosent="20140410143229" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] How to set a process on a host but not bound to any core" -->
<!-- id="EE94B72F-CF4D-4D76-879D-659140ABA207_at_open-mpi.org" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="BC61C7775820B1469DB38FAE0D52DCA10B9FC865_at_UUSNWE1W.na.utcmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] How to set a process on a host but not bound to any core<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-04-10 10:32:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24136.php">Victor Vysotskiy: "Re: [OMPI users] Performance issue of mpirun/mpi_init"</a>
<li><strong>Previous message:</strong> <a href="24134.php">Gan, Qi                    PW: "Re: [OMPI users] How to set a process on a host but not bound to any core"</a>
<li><strong>In reply to:</strong> <a href="24134.php">Gan, Qi                    PW: "Re: [OMPI users] How to set a process on a host but not bound to any core"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24144.php">Gan, Qi                    PW: "Re: [OMPI users] How to set a process on a host but not bound to any core"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Just add &quot;-mca rmaps seq&quot; to your command line, then. The mapper will take your hostfile (no rankfile) and map each proc sequentially to the listed nodes. You need to list each node once for each proc - something like this:
<br>
<p>nodeA
<br>
nodeB
<br>
nodeB
<br>
nodeC
<br>
nodeA
<br>
nodeC
<br>
...
<br>
<p>would produce your described pattern
<br>
<p><p><p>On Apr 10, 2014, at 7:25 AM, Gan, Qi PW &lt;Qi.Gan2_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; We have OMPI 1.4.0, 1.4.5 and 1.6.5 installed on our system.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;What version of OMPI are you using? We have a &quot;seq&quot; mapper that does what you want, but the precise cmd line option for directing to use it depends a bit on the version.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt;On Apr 9, 2014, at 9:22 AM, Gan, Qi PW &lt;Qi.Gan2_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Hi, 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; I have a problem when setting the processes of a parallel job with specified order. Suppose a job with 6 processes (rank0 to rank5) needs to run on 3 hosts (A, B, C) with following order: 
</span><br>
<span class="quotelev2">&gt; &gt; Rank0 -- A 
</span><br>
<span class="quotelev2">&gt; &gt; Rank1 -- B 
</span><br>
<span class="quotelev2">&gt; &gt; Rank2 -- B 
</span><br>
<span class="quotelev2">&gt; &gt; Rank3 -- C 
</span><br>
<span class="quotelev2">&gt; &gt; Rank4 -- A 
</span><br>
<span class="quotelev2">&gt; &gt; Rank5 -- C 
</span><br>
<span class="quotelev2">&gt; &gt; Specifying this order (ABBCAC) in hostfile doesn&#146;t work because Open MPI only supports &#147;byslot&#148; (AABBCC) or &#147;bynode&#148; (ABCABC) ranking orders. 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; However, if I use rankfile to implement this order in the format of 
</span><br>
<span class="quotelev2">&gt; &gt; rank 0=A slot=&lt;slot setting&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; rank 0=B slot=&lt;slot setting&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; rank 0=B slot=&lt;slot setting&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; rank 0=C slot=&lt;slot setting&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; rank 0=A slot=&lt;slot setting&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; rank 0=C slot=&lt;slot setting&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; I run into another problem on how to determine the &lt;slot setting&gt; for each rank. If I bind each rank to all cores/CPUs on a node (e.g. rank 0=A slot=0-n, where n is the maximal CPU number), I run into the following errors: 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; *** An error occurred in MPI_comm_size 
</span><br>
<span class="quotelev2">&gt; &gt; *** on a NULL communicator 
</span><br>
<span class="quotelev2">&gt; &gt; *** Unknown error 
</span><br>
<span class="quotelev2">&gt; &gt; *** MPI_ERRORS_ARE_FATAL (your MPI job will now abort) 
</span><br>
<span class="quotelev2">&gt; &gt; forrtl: severe (174): SIGSEGV, segmentation fault occurred 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; If I don&#146;t select all cores, I need to identify which cores are available to my job in order to avoid CPU oversubscribing since the nodes are shared by multiple jobs. 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Our system is the intel based cluster (12 or 16 cores per node) and the job is submitted by LSF batch submitter. 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Here is my question: how to implement a specified order of processes at node level without binding at core/cpu level? 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Any help and suggestions would be appreciated. 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Thanks, 
</span><br>
<span class="quotelev2">&gt; &gt; Chee 
</span><br>
<span class="quotelev2">&gt; &gt; 
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-24135/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24136.php">Victor Vysotskiy: "Re: [OMPI users] Performance issue of mpirun/mpi_init"</a>
<li><strong>Previous message:</strong> <a href="24134.php">Gan, Qi                    PW: "Re: [OMPI users] How to set a process on a host but not bound to any core"</a>
<li><strong>In reply to:</strong> <a href="24134.php">Gan, Qi                    PW: "Re: [OMPI users] How to set a process on a host but not bound to any core"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24144.php">Gan, Qi                    PW: "Re: [OMPI users] How to set a process on a host but not bound to any core"</a>
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

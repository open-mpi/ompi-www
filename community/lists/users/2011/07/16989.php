<?
$subject_val = "Re: [OMPI users] Rankfile problem with Open MPI 1.4.3";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jul 26 17:25:31 2011" -->
<!-- isoreceived="20110726212531" -->
<!-- sent="Tue, 26 Jul 2011 15:25:22 -0600" -->
<!-- isosent="20110726212522" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Rankfile problem with Open MPI 1.4.3" -->
<!-- id="806375A6-4CAE-410F-9CCD-42D74F0FF423_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4E2F2877.8010403_at_ldeo.columbia.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] Rankfile problem with Open MPI 1.4.3<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-07-26 17:25:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16990.php">Gus Correa: "Re: [OMPI users] Rankfile problem with Open MPI 1.4.3"</a>
<li><strong>Previous message:</strong> <a href="16988.php">Gus Correa: "[OMPI users] Rankfile problem with Open MPI 1.4.3"</a>
<li><strong>In reply to:</strong> <a href="16988.php">Gus Correa: "[OMPI users] Rankfile problem with Open MPI 1.4.3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16990.php">Gus Correa: "Re: [OMPI users] Rankfile problem with Open MPI 1.4.3"</a>
<li><strong>Reply:</strong> <a href="16990.php">Gus Correa: "Re: [OMPI users] Rankfile problem with Open MPI 1.4.3"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I normally hide my eyes when rankfiles appear, but since you provide so much help on this list yourself... :-)
<br>
<p>I believe the problem is that you have the keyword &quot;slots&quot; wrong - it is supposed to be &quot;slot&quot;:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;rank 1=host1 slot=1:0,1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;rank 0=host2 slot=0:*
<br>
&nbsp;&nbsp;&nbsp;&nbsp;rank 2=host4 slot=1-2
<br>
&nbsp;&nbsp;&nbsp;&nbsp;rank 3=host3 slot=0:1,1:0-2
<br>
<p>Hence the flex parser gets confused...
<br>
<p>I didn't write this code, but it seems to me that a little more leeway (e.g., allowing &quot;slots&quot; as well as &quot;slot&quot;) would be more appropriate. If you try the revision and it works, I'll submit a change to accept both syntax options.
<br>
<p>On Jul 26, 2011, at 2:49 PM, Gus Correa wrote:
<br>
<p><span class="quotelev1">&gt; Dear Open MPI pros
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am having trouble to get the mpiexec rankfile option right.
</span><br>
<span class="quotelev1">&gt; I would appreciate any help to solve the problem.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Also is there a way to tell Open MPI to print out its own numbering
</span><br>
<span class="quotelev1">&gt; of the &quot;slots&quot;, and perhaps how they're mapped to the socket:core pair?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am using Open MPI 1.4.3, compiled with Torque 2.4.11 support,
</span><br>
<span class="quotelev1">&gt; on Linux CentOS 5.2 x86_64.
</span><br>
<span class="quotelev1">&gt; This cluster has nodes with dual AMD Opteron quad-core processors,
</span><br>
<span class="quotelev1">&gt; a total of 8 cores per node.
</span><br>
<span class="quotelev1">&gt; I enclose a snippet of /proc/cpuinfo below.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I build the rankfile on the fly from the $PBS_NODEFILE.
</span><br>
<span class="quotelev1">&gt; The mpiexec command line is:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; mpiexec \
</span><br>
<span class="quotelev1">&gt;        -v \
</span><br>
<span class="quotelev1">&gt; 	-np ${NP} \
</span><br>
<span class="quotelev1">&gt;        -mca btl openib,sm,self \
</span><br>
<span class="quotelev1">&gt;        -tag-output \
</span><br>
<span class="quotelev1">&gt;        -report-bindings \
</span><br>
<span class="quotelev1">&gt;        -rf $my_rf \
</span><br>
<span class="quotelev1">&gt; 	-mca paffinity_base_verbose 1 \
</span><br>
<span class="quotelev1">&gt;        connectivity_c -v
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I tried two different ways to specify the slots on the rankfile:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; *First way (sequential &quot;slots&quot; on each node):
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; rank   0=node34 slots=0
</span><br>
<span class="quotelev1">&gt; rank   1=node34 slots=1
</span><br>
<span class="quotelev1">&gt; rank   2=node34 slots=2
</span><br>
<span class="quotelev1">&gt; rank   3=node34 slots=3
</span><br>
<span class="quotelev1">&gt; rank   4=node34 slots=4
</span><br>
<span class="quotelev1">&gt; rank   5=node34 slots=5
</span><br>
<span class="quotelev1">&gt; rank   6=node34 slots=6
</span><br>
<span class="quotelev1">&gt; rank   7=node34 slots=7
</span><br>
<span class="quotelev1">&gt; rank   8=node33 slots=0
</span><br>
<span class="quotelev1">&gt; rank   9=node33 slots=1
</span><br>
<span class="quotelev1">&gt; rank  10=node33 slots=2
</span><br>
<span class="quotelev1">&gt; rank  11=node33 slots=3
</span><br>
<span class="quotelev1">&gt; rank  12=node33 slots=4
</span><br>
<span class="quotelev1">&gt; rank  13=node33 slots=5
</span><br>
<span class="quotelev1">&gt; rank  14=node33 slots=6
</span><br>
<span class="quotelev1">&gt; rank  15=node33 slots=7
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; *Second way ( slots in socket:core style) :
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; rank   0=node34 slots=0:0
</span><br>
<span class="quotelev1">&gt; rank   1=node34 slots=0:1
</span><br>
<span class="quotelev1">&gt; rank   2=node34 slots=0:2
</span><br>
<span class="quotelev1">&gt; rank   3=node34 slots=0:3
</span><br>
<span class="quotelev1">&gt; rank   4=node34 slots=1:0
</span><br>
<span class="quotelev1">&gt; rank   5=node34 slots=1:1
</span><br>
<span class="quotelev1">&gt; rank   6=node34 slots=1:2
</span><br>
<span class="quotelev1">&gt; rank   7=node34 slots=1:3
</span><br>
<span class="quotelev1">&gt; rank   8=node33 slots=0:0
</span><br>
<span class="quotelev1">&gt; rank   9=node33 slots=0:1
</span><br>
<span class="quotelev1">&gt; rank  10=node33 slots=0:2
</span><br>
<span class="quotelev1">&gt; rank  11=node33 slots=0:3
</span><br>
<span class="quotelev1">&gt; rank  12=node33 slots=1:0
</span><br>
<span class="quotelev1">&gt; rank  13=node33 slots=1:1
</span><br>
<span class="quotelev1">&gt; rank  14=node33 slots=1:2
</span><br>
<span class="quotelev1">&gt; rank  15=node33 slots=1:3
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ***
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I get the errors messages below.
</span><br>
<span class="quotelev1">&gt; I am scratching my head to full baldness to try to understand them.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; They seem to suggest that my rankfile syntax is wrong
</span><br>
<span class="quotelev1">&gt; (which I copied from the FAQ and man mpiexec), or that it is not parsing it as I expected it to be.
</span><br>
<span class="quotelev1">&gt; Or is it perhaps that it doesn't like the numbers I am using for the
</span><br>
<span class="quotelev1">&gt; various slots in the rankfile?
</span><br>
<span class="quotelev1">&gt; The error messages also complaint about
</span><br>
<span class="quotelev1">&gt; node allocation or oversubscribed slots,
</span><br>
<span class="quotelev1">&gt; but the nodes were allocated by Torque, and the rankfiles were
</span><br>
<span class="quotelev1">&gt; written with no intent to oversubscribe.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; *First rankfile error:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; Rankfile claimed host 0 that was not allocated or oversubscribed it's slots.
</span><br>
<span class="quotelev1">&gt; Please review your rank-slot assignments and your host allocation to ensure
</span><br>
<span class="quotelev1">&gt; a proper match.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ... etc, etc ...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; *Second rankfile error:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; Rankfile claimed host 0:0 that was not allocated or oversubscribed it's slots.
</span><br>
<span class="quotelev1">&gt; Please review your rank-slot assignments and your host allocation to ensure
</span><br>
<span class="quotelev1">&gt; a proper match.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; A daemon (pid unknown) died unexpectedly on signal 1  while attempting to
</span><br>
<span class="quotelev1">&gt; launch so we are aborting.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ... etc, etc ...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; **********
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am stuck.
</span><br>
<span class="quotelev1">&gt; Any help is much appreciated.
</span><br>
<span class="quotelev1">&gt; Thank you.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Gus Correa
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; *****************************
</span><br>
<span class="quotelev1">&gt; Snippet of /proc/cpuinfo
</span><br>
<span class="quotelev1">&gt; *****************************
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; processor	: 0
</span><br>
<span class="quotelev1">&gt; physical id	: 0
</span><br>
<span class="quotelev1">&gt; core id		: 0
</span><br>
<span class="quotelev1">&gt; siblings	: 4
</span><br>
<span class="quotelev1">&gt; cpu cores	: 4
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; processor	: 1
</span><br>
<span class="quotelev1">&gt; physical id	: 0
</span><br>
<span class="quotelev1">&gt; core id		: 1
</span><br>
<span class="quotelev1">&gt; siblings	: 4
</span><br>
<span class="quotelev1">&gt; cpu cores	: 4
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; processor	: 2
</span><br>
<span class="quotelev1">&gt; physical id	: 0
</span><br>
<span class="quotelev1">&gt; core id		: 2
</span><br>
<span class="quotelev1">&gt; siblings	: 4
</span><br>
<span class="quotelev1">&gt; cpu cores	: 4
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; processor	: 3
</span><br>
<span class="quotelev1">&gt; physical id	: 0
</span><br>
<span class="quotelev1">&gt; core id		: 3
</span><br>
<span class="quotelev1">&gt; siblings	: 4
</span><br>
<span class="quotelev1">&gt; cpu cores	: 4
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; processor	: 4
</span><br>
<span class="quotelev1">&gt; physical id	: 1
</span><br>
<span class="quotelev1">&gt; core id		: 0
</span><br>
<span class="quotelev1">&gt; siblings	: 4
</span><br>
<span class="quotelev1">&gt; cpu cores	: 4
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; processor	: 5
</span><br>
<span class="quotelev1">&gt; physical id	: 1
</span><br>
<span class="quotelev1">&gt; core id		: 1
</span><br>
<span class="quotelev1">&gt; siblings	: 4
</span><br>
<span class="quotelev1">&gt; cpu cores	: 4
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; processor	: 6
</span><br>
<span class="quotelev1">&gt; physical id	: 1
</span><br>
<span class="quotelev1">&gt; core id		: 2
</span><br>
<span class="quotelev1">&gt; siblings	: 4
</span><br>
<span class="quotelev1">&gt; cpu cores	: 4
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; processor	: 7
</span><br>
<span class="quotelev1">&gt; physical id	: 1
</span><br>
<span class="quotelev1">&gt; core id		: 3
</span><br>
<span class="quotelev1">&gt; siblings	: 4
</span><br>
<span class="quotelev1">&gt; cpu cores	: 4
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16990.php">Gus Correa: "Re: [OMPI users] Rankfile problem with Open MPI 1.4.3"</a>
<li><strong>Previous message:</strong> <a href="16988.php">Gus Correa: "[OMPI users] Rankfile problem with Open MPI 1.4.3"</a>
<li><strong>In reply to:</strong> <a href="16988.php">Gus Correa: "[OMPI users] Rankfile problem with Open MPI 1.4.3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16990.php">Gus Correa: "Re: [OMPI users] Rankfile problem with Open MPI 1.4.3"</a>
<li><strong>Reply:</strong> <a href="16990.php">Gus Correa: "Re: [OMPI users] Rankfile problem with Open MPI 1.4.3"</a>
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

<?
$subject_val = "[OMPI users] Rankfile problem with Open MPI 1.4.3";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jul 26 16:50:09 2011" -->
<!-- isoreceived="20110726205009" -->
<!-- sent="Tue, 26 Jul 2011 16:49:59 -0400" -->
<!-- isosent="20110726204959" -->
<!-- name="Gus Correa" -->
<!-- email="gus_at_[hidden]" -->
<!-- subject="[OMPI users] Rankfile problem with Open MPI 1.4.3" -->
<!-- id="4E2F2877.8010403_at_ldeo.columbia.edu" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] Rankfile problem with Open MPI 1.4.3<br>
<strong>From:</strong> Gus Correa (<em>gus_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-07-26 16:49:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16989.php">Ralph Castain: "Re: [OMPI users] Rankfile problem with Open MPI 1.4.3"</a>
<li><strong>Previous message:</strong> <a href="16987.php">Ralph Castain: "Re: [OMPI users] Can run OpenMPI testcode on 86 or fewer slots in	cluster, but nothing more than that"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16989.php">Ralph Castain: "Re: [OMPI users] Rankfile problem with Open MPI 1.4.3"</a>
<li><strong>Reply:</strong> <a href="16989.php">Ralph Castain: "Re: [OMPI users] Rankfile problem with Open MPI 1.4.3"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear Open MPI pros
<br>
<p>I am having trouble to get the mpiexec rankfile option right.
<br>
I would appreciate any help to solve the problem.
<br>
<p>Also is there a way to tell Open MPI to print out its own numbering
<br>
of the &quot;slots&quot;, and perhaps how they're mapped to the socket:core pair?
<br>
<p>I am using Open MPI 1.4.3, compiled with Torque 2.4.11 support,
<br>
on Linux CentOS 5.2 x86_64.
<br>
This cluster has nodes with dual AMD Opteron quad-core processors,
<br>
a total of 8 cores per node.
<br>
I enclose a snippet of /proc/cpuinfo below.
<br>
<p>I build the rankfile on the fly from the $PBS_NODEFILE.
<br>
The mpiexec command line is:
<br>
<p>mpiexec \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-v \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-np ${NP} \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-mca btl openib,sm,self \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-tag-output \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-report-bindings \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-rf $my_rf \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-mca paffinity_base_verbose 1 \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;connectivity_c -v
<br>
<p><p>I tried two different ways to specify the slots on the rankfile:
<br>
<p>*First way (sequential &quot;slots&quot; on each node):
<br>
<p>rank   0=node34 slots=0
<br>
rank   1=node34 slots=1
<br>
rank   2=node34 slots=2
<br>
rank   3=node34 slots=3
<br>
rank   4=node34 slots=4
<br>
rank   5=node34 slots=5
<br>
rank   6=node34 slots=6
<br>
rank   7=node34 slots=7
<br>
rank   8=node33 slots=0
<br>
rank   9=node33 slots=1
<br>
rank  10=node33 slots=2
<br>
rank  11=node33 slots=3
<br>
rank  12=node33 slots=4
<br>
rank  13=node33 slots=5
<br>
rank  14=node33 slots=6
<br>
rank  15=node33 slots=7
<br>
<p><p>*Second way ( slots in socket:core style) :
<br>
<p>rank   0=node34 slots=0:0
<br>
rank   1=node34 slots=0:1
<br>
rank   2=node34 slots=0:2
<br>
rank   3=node34 slots=0:3
<br>
rank   4=node34 slots=1:0
<br>
rank   5=node34 slots=1:1
<br>
rank   6=node34 slots=1:2
<br>
rank   7=node34 slots=1:3
<br>
rank   8=node33 slots=0:0
<br>
rank   9=node33 slots=0:1
<br>
rank  10=node33 slots=0:2
<br>
rank  11=node33 slots=0:3
<br>
rank  12=node33 slots=1:0
<br>
rank  13=node33 slots=1:1
<br>
rank  14=node33 slots=1:2
<br>
rank  15=node33 slots=1:3
<br>
<p>***
<br>
<p>I get the errors messages below.
<br>
I am scratching my head to full baldness to try to understand them.
<br>
<p>They seem to suggest that my rankfile syntax is wrong
<br>
(which I copied from the FAQ and man mpiexec), or that it is not parsing 
<br>
it as I expected it to be.
<br>
Or is it perhaps that it doesn't like the numbers I am using for the
<br>
various slots in the rankfile?
<br>
The error messages also complaint about
<br>
node allocation or oversubscribed slots,
<br>
but the nodes were allocated by Torque, and the rankfiles were
<br>
written with no intent to oversubscribe.
<br>
<p>*First rankfile error:
<br>
<p>--------------------------------------------------------------------------
<br>
Rankfile claimed host 0 that was not allocated or oversubscribed it's slots.
<br>
Please review your rank-slot assignments and your host allocation to ensure
<br>
a proper match.
<br>
<p>--------------------------------------------------------------------------
<br>
-
<br>
<p>... etc, etc ...
<br>
<p>*Second rankfile error:
<br>
<p>--------------------------------------------------------------------------
<br>
Rankfile claimed host 0:0 that was not allocated or oversubscribed it's 
<br>
slots.
<br>
Please review your rank-slot assignments and your host allocation to ensure
<br>
a proper match.
<br>
<p>--------------------------------------------------------------------------
<br>
--------------------------------------------------------------------------
<br>
A daemon (pid unknown) died unexpectedly on signal 1  while attempting to
<br>
launch so we are aborting.
<br>
<p>... etc, etc ...
<br>
<p>**********
<br>
<p>I am stuck.
<br>
Any help is much appreciated.
<br>
Thank you.
<br>
<p>Gus Correa
<br>
<p><p><p>*****************************
<br>
Snippet of /proc/cpuinfo
<br>
*****************************
<br>
<p>processor	: 0
<br>
physical id	: 0
<br>
core id		: 0
<br>
siblings	: 4
<br>
cpu cores	: 4
<br>
<p>processor	: 1
<br>
physical id	: 0
<br>
core id		: 1
<br>
siblings	: 4
<br>
cpu cores	: 4
<br>
<p>processor	: 2
<br>
physical id	: 0
<br>
core id		: 2
<br>
siblings	: 4
<br>
cpu cores	: 4
<br>
<p>processor	: 3
<br>
physical id	: 0
<br>
core id		: 3
<br>
siblings	: 4
<br>
cpu cores	: 4
<br>
<p>processor	: 4
<br>
physical id	: 1
<br>
core id		: 0
<br>
siblings	: 4
<br>
cpu cores	: 4
<br>
<p>processor	: 5
<br>
physical id	: 1
<br>
core id		: 1
<br>
siblings	: 4
<br>
cpu cores	: 4
<br>
<p>processor	: 6
<br>
physical id	: 1
<br>
core id		: 2
<br>
siblings	: 4
<br>
cpu cores	: 4
<br>
<p>processor	: 7
<br>
physical id	: 1
<br>
core id		: 3
<br>
siblings	: 4
<br>
cpu cores	: 4
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16989.php">Ralph Castain: "Re: [OMPI users] Rankfile problem with Open MPI 1.4.3"</a>
<li><strong>Previous message:</strong> <a href="16987.php">Ralph Castain: "Re: [OMPI users] Can run OpenMPI testcode on 86 or fewer slots in	cluster, but nothing more than that"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16989.php">Ralph Castain: "Re: [OMPI users] Rankfile problem with Open MPI 1.4.3"</a>
<li><strong>Reply:</strong> <a href="16989.php">Ralph Castain: "Re: [OMPI users] Rankfile problem with Open MPI 1.4.3"</a>
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

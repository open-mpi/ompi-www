<?
$subject_val = "Re: [OMPI users] OpenMPI-1.10.0 bind-to core error";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Sep 18 08:48:28 2015" -->
<!-- isoreceived="20150918124828" -->
<!-- sent="Fri, 18 Sep 2015 14:48:12 +0200" -->
<!-- isosent="20150918124812" -->
<!-- name="Patrick Begou" -->
<!-- email="Patrick.Begou_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI-1.10.0 bind-to core error" -->
<!-- id="55FC080C.9070707_at_legi.grenoble-inp.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="55FBC74B.3050003_at_rist.or.jp" -->
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
<strong>Subject:</strong> Re: [OMPI users] OpenMPI-1.10.0 bind-to core error<br>
<strong>From:</strong> Patrick Begou (<em>Patrick.Begou_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-09-18 08:48:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27624.php">Gilles Gouaillardet: "Re: [OMPI users] OpenMPI-1.10.0 bind-to core error"</a>
<li><strong>Previous message:</strong> <a href="27622.php">Steffen Christgau: "[OMPI users] possible GATS bug in osc/sm"</a>
<li><strong>In reply to:</strong> <a href="27621.php">Gilles Gouaillardet: "Re: [OMPI users] OpenMPI-1.10.0 bind-to core error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27624.php">Gilles Gouaillardet: "Re: [OMPI users] OpenMPI-1.10.0 bind-to core error"</a>
<li><strong>Reply:</strong> <a href="27624.php">Gilles Gouaillardet: "Re: [OMPI users] OpenMPI-1.10.0 bind-to core error"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Gilles Gouaillardet wrote:
<br>
<span class="quotelev1">&gt; Patrick,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; by the way, this will work when running on a single node.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; i do not know what will happen when you run on multiple node ...
</span><br>
<span class="quotelev1">&gt; since there is no OAR integration in openmpi, i guess you are using ssh to 
</span><br>
<span class="quotelev1">&gt; start orted on the remote nodes
</span><br>
<span class="quotelev1">&gt; (unless you instructed ompi to use an OARified version of ssh)
</span><br>
Yes, OMPI_MCA_plm_rsh_agent=oarshmost
<br>
This exports also needed environment instead of multpiple -x options. To be as 
<br>
similar as possible to the environments on french national supercomputers.
<br>
<span class="quotelev1">&gt; my concern is the remote orted might not run within the cpuset that was 
</span><br>
<span class="quotelev1">&gt; created by OAR for this job,
</span><br>
<span class="quotelev1">&gt; so you might end up using all the cores on the remote nodes.
</span><br>
<span class="quotelev1">&gt;
</span><br>
The oar environment does this. With older OpenMPI version all is working fine.
<br>
<span class="quotelev1">&gt; please let us know how that works for you
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Gilles
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 9/18/2015 5:02 PM, Gilles Gouaillardet wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Patrick,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; i just filled PR 586 <a href="https://github.com/open-mpi/ompi-release/pull/586">https://github.com/open-mpi/ompi-release/pull/586</a> for 
</span><br>
<span class="quotelev2">&gt;&gt; the v1.10 series
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; this is only a three line patch.
</span><br>
<span class="quotelev2">&gt;&gt; could you please give it a try ?
</span><br>
<p>This patch solve the problem when OpenMPI uses one node but now I'm unable to 
<br>
use more than one node.
<br>
On one node, with 4 cores in the cpuset:
<br>
<p>mpirun --bind-to core --hostfile $OAR_NODEFILE ./location.exe |grep 'thread is 
<br>
now running on PU'  |sort
<br>
(process 0) thread is now running on PU logical index 0 (OS/physical index 12) 
<br>
on system frog26
<br>
(process 1) thread is now running on PU logical index 1 (OS/physical index 13) 
<br>
on system frog26
<br>
(process 2) thread is now running on PU logical index 2 (OS/physical index 14) 
<br>
on system frog26
<br>
(process 3) thread is now running on PU logical index 3 (OS/physical index 15) 
<br>
on system frog26
<br>
<p>[begou_at_frog26 MPI_TESTS]$ mpirun -np 5 --bind-to core --hostfile $OAR_NODEFILE 
<br>
./location.exe
<br>
--------------------------------------------------------------------------
<br>
A request was made to bind to that would result in binding more
<br>
processes than cpus on a resource:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;Bind to:     CORE
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Node:        frog26
<br>
&nbsp;&nbsp;&nbsp;&nbsp;#processes:  2
<br>
&nbsp;&nbsp;&nbsp;&nbsp;#cpus:       1
<br>
<p>You can override this protection by adding the &quot;overload-allowed&quot;
<br>
option to your binding directive.
<br>
<p><p><p>But if I request two nodes (4 cores one each) only 4 processes can start on the 
<br>
local cores, none on the second host:
<br>
[begou_at_frog5 MPI_TESTS]$ cat $OAR_NODEFILE
<br>
frog5
<br>
frog5
<br>
frog5
<br>
frog5
<br>
frog6
<br>
frog6
<br>
frog6
<br>
frog6
<br>
<p>[begou_at_frog5 MPI_TESTS]$ cat ./frog.txt
<br>
frog5 slots=4
<br>
frog6 slots=4
<br>
<p>But only 4 processes are launched:
<br>
[begou_at_frog5 MPI_TESTS]$ mpirun --hostfile frog.txt --bind-to core 
<br>
./location.exe |grep 'thread is now running on PU'
<br>
(process 0) thread is now running on PU logical index 0 (OS/physical index 12) 
<br>
on system frog5
<br>
(process 1) thread is now running on PU logical index 1 (OS/physical index 13) 
<br>
on system frog5
<br>
(process 2) thread is now running on PU logical index 2 (OS/physical index 14) 
<br>
on system frog5
<br>
(process 3) thread is now running on PU logical index 3 (OS/physical index 15) 
<br>
on system frog5
<br>
<p>If I ask explicitly 8 processes (one for each 4 cores of the 2 nodes)
<br>
[begou_at_frog5 MPI_TESTS]$ mpirun --hostfile frog.txt -np 8 --bind-to core 
<br>
./location.exe
<br>
--------------------------------------------------------------------------
<br>
A request was made to bind to that would result in binding more
<br>
processes than cpus on a resource:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;Bind to:     CORE
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Node:        frog5
<br>
&nbsp;&nbsp;&nbsp;&nbsp;#processes:  2
<br>
&nbsp;&nbsp;&nbsp;&nbsp;#cpus:       1
<br>
<p>You can override this protection by adding the &quot;overload-allowed&quot;
<br>
option to your binding directive.
<br>
<p><p><span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Cheers,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Gilles
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On 9/18/2015 4:54 PM, Patrick Begou wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Ralph Castain wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; As I said, if you don't provide an explicit slot count in your hostfile, we 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; default to allowing oversubscription. We don't have OAR integration in 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; OMPI, and so mpirun isn't recognizing that you are running under a resource 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; manager - it thinks this is just being controlled by a hostfile.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; That's look strange for me is that in this case (default) oversubscription 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; is allowed for the number of core of one cpu (8), not the number of cores 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; available in the node (16) or unlimited...
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; If you want us to error out on oversubscription, you can either add the 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; flag you identified, or simply change your hostfile to:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; frog53 slots=4
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Either will work.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; This syntax in the host file doesn't change anything to the oversuscribing 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; problem. It is still allowed with the same maximum amount of processes for 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; this test case:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [begou_at_frog7 MPI_TESTS]$ mpirun -np 8 *--hostfile frog7.txt* --bind-to core 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ./location.exe|grep 'thread is now running on PU'  |sort
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (process 0) thread is now running on PU logical index 0 (OS/physical index 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 0) on system frog7
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (process 1) thread is now running on PU logical index 2 (OS/physical index 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 6) on system frog7
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (process 2) thread is now running on PU logical index 0 (OS/physical index 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 0) on system frog7
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (process 3) thread is now running on PU logical index 2 (OS/physical index 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 6) on system frog7
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (process 4) thread is now running on PU logical index 3 (OS/physical index 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 7) on system frog7
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (process 5) thread is now running on PU logical index 1 (OS/physical index 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 5) on system frog7
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (process 6) thread is now running on PU logical index 2 (OS/physical index 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 6) on system frog7
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (process 7) thread is now running on PU logical index 3 (OS/physical index 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 7) on system frog7
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [begou_at_frog7 MPI_TESTS]$ *cat frog7.txt*
</span><br>
<span class="quotelev3">&gt;&gt;&gt; frog7 slots=4
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Patrick
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; On Sep 16, 2015, at 1:00 AM, Patrick Begou 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &lt;Patrick.Begou_at_[hidden] 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &lt;mailto:Patrick.Begou_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Thanks all for your answers, I've added some details about the tests I 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; have run.  See below.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Ralph Castain wrote:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Not precisely correct. It depends on the environment.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; If there is a resource manager allocating nodes, or you provide a 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; hostfile that specifies the number of slots on the nodes, or you use 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; -host, then we default to no-oversubscribe.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I'm using a batch scheduler (OAR).
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; # cat /dev/cpuset/oar/begou_7955553/cpuset.cpus
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 4-7
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; So 4 cores allowed. Nodes have two height cores cpus.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Node file contains:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; # cat $OAR_NODEFILE
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; frog53
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; frog53
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; frog53
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; frog53
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; # mpirun --hostfile $OAR_NODEFILE -bind-to core location.exe
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; is  okay (my test code show one process on each core)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; (process 3) thread is now running on PU logical index 1 (OS/physical index 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 5) on system frog53
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; (process 0) thread is now running on PU logical index 3 (OS/physical index 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 7) on system frog53
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; (process 1) thread is now running on PU logical index 0 (OS/physical index 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 4) on system frog53
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; (process 2) thread is now running on PU logical index 2 (OS/physical index 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 6) on system frog53
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; # mpirun -np 5 --hostfile $OAR_NODEFILE -bind-to core location.exe
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; oversuscribe with:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; (process 0) thread is now running on PU logical index 3 (OS/physical index 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 7) on system frog53
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; (process 1) thread is now running on PU logical index 1 (OS/physical index 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 5) on system frog53
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; (*process 3*) thread is now running on PU logical index*2 (OS/physical 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; index 6)*on system frog53
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; (process 4) thread is now running on PU logical index 0 (OS/physical index 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 4) on system frog53
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; (*process 2*) thread is now running on PU logical index*2 (OS/physical 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; index 6)*on system frog53
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; This is not allowed with OpenMPI 1.7.3
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I can increase until the maximul core number of this first pocessor (8 cores)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; # mpirun -np 8 --hostfile $OAR_NODEFILE -bind-to core location.exe |grep 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 'thread is now running on PU'
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; (process 5) thread is now running on PU logical index 1 (OS/physical index 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 5) on system frog53
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; (process 7) thread is now running on PU logical index 3 (OS/physical index 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 7) on system frog53
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; (process 4) thread is now running on PU logical index 0 (OS/physical index 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 4) on system frog53
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; (process 6) thread is now running on PU logical index 2 (OS/physical index 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 6) on system frog53
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; (process 2) thread is now running on PU logical index 1 (OS/physical index 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 5) on system frog53
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; (process 0) thread is now running on PU logical index 2 (OS/physical index 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 6) on system frog53
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; (process 1) thread is now running on PU logical index 0 (OS/physical index 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 4) on system frog53
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; (process 3) thread is now running on PU logical index 0 (OS/physical index 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 4) on system frog53
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; But I cannot overload more than the 8 cores (max core number of one cpu).
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; #mpirun -np 9 --hostfile $OAR_NODEFILE -bind-to core location.exe
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; A request was made to bind to that would result in binding more
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; processes than cpus on a resource:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    Bind to:     CORE
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    Node:        frog53
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    #processes:  2
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    #cpus:       1
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; You can override this protection by adding the &quot;overload-allowed&quot;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; option to your binding directive.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Now if I add*--nooversubscribe*the problem doesn't exist anymore (no more 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; than 4 processes, one on each core). So looks like if default behavior 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; would be a nooversuscribe on cores number of the socket ???
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Again, with 1.7.3 this problem doesn't occur at all.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Patrick
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; If you provide a hostfile that doesn't specify slots, then we use the 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; number of cores we find on each node, and we allow oversubscription.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; What is being described sounds like more of a bug than an intended 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; feature. I'd need to know more about it, though, to be sure. Can you tell 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; me how you are specifying this cpuset?
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; On Sep 15, 2015, at 4:44 PM, Matt Thompson &lt;fortran_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Looking at the Open MPI 1.10.0 man page:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; <a href="https://www.open-mpi.org/doc/v1.10/man1/mpirun.1.php">https://www.open-mpi.org/doc/v1.10/man1/mpirun.1.php</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; it looks like perhaps -oversubscribe (which was an option) is now the 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; default behavior. Instead we have:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; *-nooversubscribe, --nooversubscribe*
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;     Do not oversubscribe any nodes; error (without starting any
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;     processes) if the requested number of processes would cause
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;     oversubscription. This option implicitly sets &quot;max_slots&quot; equal to
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;     the &quot;slots&quot; value for each node.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; It also looks like -map-by has a way to implement it as well (see man page).
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Thanks for letting me/us know about this. On a system of mine I sort of 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; depend on the -nooversubscribe behavior!
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Matt
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; On Tue, Sep 15, 2015 at 11:17 AM, Patrick 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Begou&lt;Patrick.Begou_at_[hidden]&gt;wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;     Hi,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;     I'm runing OpenMPI 1.10.0 built with Intel 2015 compilers on a Bullx
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;     System.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;     I've some troubles with the bind-to core option when using cpuset.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;     If the cpuset is less than all the cores of a cpu (ex: 4 cores
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;     allowed on a 8 cores cpus) OpenMPI 1.10.0 allows to overload these
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;     cores  until the maximum number of cores of the cpu.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;     With this config and because the cpuset only allows 4 cores, I can
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;     reach 2 processes/core if I use:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;     mpirun -np 8 --bind-to core my_application
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;     OpenMPI 1.7.3 doesn't show the problem with the same situation:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;     mpirun -np 8 --bind-to-core my_application
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;     returns:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;     /A request was made to bind to that would result in binding more//
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;     //processes than cpus on a resource/
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;     and that's okay of course.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;     Is there a way to avoid this oveloading with OpenMPI 1.10.0 ?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;     Thanks
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;     Patrick
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;     -- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;     ===================================================================
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;     |  Equipe M.O.S.T.         |                                      |
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;     |  Patrick BEGOU           |mailto:Patrick.Begou_at_[hidden]  |
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;     |  LEGI                    |                                      |
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;     |  BP 53 X                 | Tel 04 76 82 51 35                   |
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;     |  38041 GRENOBLE CEDEX    | Fax 04 76 82 52 71                   |
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;     ===================================================================
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;     _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;     users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;     users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;     Subscription:<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;     Link to this
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;     post:<a href="http://www.open-mpi.org/community/lists/users/2015/09/27575.php">http://www.open-mpi.org/community/lists/users/2015/09/27575.php</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; --
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Matt Thompson
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;     Man Among Men
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;     Fulcrum of History
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Subscription:<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Link to this 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; post:<a href="http://www.open-mpi.org/community/lists/users/2015/09/27579.php">http://www.open-mpi.org/community/lists/users/2015/09/27579.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Subscription:<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Link to this post:<a href="http://www.open-mpi.org/community/lists/users/2015/09/27580.php">http://www.open-mpi.org/community/lists/users/2015/09/27580.php</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -- 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; ===================================================================
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; |  Equipe M.O.S.T.         |                                      |
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; |  Patrick BEGOU           |mailto:Patrick.Begou_at_[hidden]  |
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; |  LEGI                    |                                      |
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; |  BP 53 X                 | Tel 04 76 82 51 35                   |
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; |  38041 GRENOBLE CEDEX    | Fax 04 76 82 52 71                   |
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; ===================================================================
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Subscription:<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Link to this 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; post:<a href="http://www.open-mpi.org/community/lists/users/2015/09/27583.php">http://www.open-mpi.org/community/lists/users/2015/09/27583.php</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Subscription:<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Link to this post:<a href="http://www.open-mpi.org/community/lists/users/2015/09/27590.php">http://www.open-mpi.org/community/lists/users/2015/09/27590.php</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ===================================================================
</span><br>
<span class="quotelev3">&gt;&gt;&gt; |  Equipe M.O.S.T.         |                                      |
</span><br>
<span class="quotelev3">&gt;&gt;&gt; |  Patrick BEGOU           |mailto:Patrick.Begou_at_[hidden]  |
</span><br>
<span class="quotelev3">&gt;&gt;&gt; |  LEGI                    |                                      |
</span><br>
<span class="quotelev3">&gt;&gt;&gt; |  BP 53 X                 | Tel 04 76 82 51 35                   |
</span><br>
<span class="quotelev3">&gt;&gt;&gt; |  38041 GRENOBLE CEDEX    | Fax 04 76 82 52 71                   |
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ===================================================================
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
<span class="quotelev3">&gt;&gt;&gt; Subscription:<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Link to this post:<a href="http://www.open-mpi.org/community/lists/users/2015/09/27619.php">http://www.open-mpi.org/community/lists/users/2015/09/27619.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
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
<span class="quotelev2">&gt;&gt; Subscription:<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post:<a href="http://www.open-mpi.org/community/lists/users/2015/09/27620.php">http://www.open-mpi.org/community/lists/users/2015/09/27620.php</a>
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
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/09/27621.php">http://www.open-mpi.org/community/lists/users/2015/09/27621.php</a>
</span><br>
<p><p><pre>
-- 
===================================================================
|  Equipe M.O.S.T.         |                                      |
|  Patrick BEGOU           | mailto:Patrick.Begou_at_[hidden] |
|  LEGI                    |                                      |
|  BP 53 X                 | Tel 04 76 82 51 35                   |
|  38041 GRENOBLE CEDEX    | Fax 04 76 82 52 71                   |
===================================================================
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-27623/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27624.php">Gilles Gouaillardet: "Re: [OMPI users] OpenMPI-1.10.0 bind-to core error"</a>
<li><strong>Previous message:</strong> <a href="27622.php">Steffen Christgau: "[OMPI users] possible GATS bug in osc/sm"</a>
<li><strong>In reply to:</strong> <a href="27621.php">Gilles Gouaillardet: "Re: [OMPI users] OpenMPI-1.10.0 bind-to core error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27624.php">Gilles Gouaillardet: "Re: [OMPI users] OpenMPI-1.10.0 bind-to core error"</a>
<li><strong>Reply:</strong> <a href="27624.php">Gilles Gouaillardet: "Re: [OMPI users] OpenMPI-1.10.0 bind-to core error"</a>
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

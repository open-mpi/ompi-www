<?
$subject_val = "Re: [OMPI users] OpenMPI-1.10.0 bind-to core error";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Sep 21 11:42:14 2015" -->
<!-- isoreceived="20150921154214" -->
<!-- sent="Tue, 22 Sep 2015 00:42:11 +0900" -->
<!-- isosent="20150921154211" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles.gouaillardet_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI-1.10.0 bind-to core error" -->
<!-- id="CAAkFZ5veu7ChCVSp4WLGMiUgXJ=kdB9KNTmRWwMz92rjNEDnSQ_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="56001790.8030003_at_legi.grenoble-inp.fr" -->
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
<strong>From:</strong> Gilles Gouaillardet (<em>gilles.gouaillardet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-09-21 11:42:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27646.php">Nathan Hjelm: "Re: [OMPI users] possible GATS bug in osc/sm"</a>
<li><strong>Previous message:</strong> <a href="27644.php">Patrick Begou: "Re: [OMPI users] OpenMPI-1.10.0 bind-to core error"</a>
<li><strong>In reply to:</strong> <a href="27644.php">Patrick Begou: "Re: [OMPI users] OpenMPI-1.10.0 bind-to core error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27650.php">Ralph Castain: "Re: [OMPI users] OpenMPI-1.10.0 bind-to core error"</a>
<li><strong>Reply:</strong> <a href="27650.php">Ralph Castain: "Re: [OMPI users] OpenMPI-1.10.0 bind-to core error"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Patrick,
<br>
<p>thanks for the report.
<br>
<p>can you confirm what happened was
<br>
- you defined
<br>
OMPI_MCA_plm_rsh_agent=oarshmost
<br>
- oarshmost was not in the $PATH
<br>
- mpirun silently ignored the remote nodes
<br>
<p>if that is correct, then i think mpirun should have reported an error
<br>
(oarshmost not found, or cannot remote start orted)
<br>
instead of this silent behaviour
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p><p>On Mon, Sep 21, 2015 at 11:43 PM, Patrick Begou
<br>
&lt;Patrick.Begou_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; Hi Gilles,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I've done a big mistake! Compiling the patched version of openMPI and
</span><br>
<span class="quotelev1">&gt; creating a new module, I've forgotten to add the path to oarshmost command
</span><br>
<span class="quotelev1">&gt; while OMPI_MCA_plm_rsh_agent=oarshmost was set....
</span><br>
<span class="quotelev1">&gt; OpenMPI was silently ignoring oarshmost command as it was unable to find it
</span><br>
<span class="quotelev1">&gt; and so only one node was available!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The good thing is that with your patch, oversuscribing does not occur
</span><br>
<span class="quotelev1">&gt; anymore on the nodes, it seems to solves efficiently the problem we had.
</span><br>
<span class="quotelev1">&gt; I'll keep this patched version in prod for the users as the previous one was
</span><br>
<span class="quotelev1">&gt; allowing 2 processes on some cores time to time, and haphazardly bad code
</span><br>
<span class="quotelev1">&gt; performances in thes cases.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Yes this computer is the biggest one of CIMENT mesocenter, it is called...
</span><br>
<span class="quotelev1">&gt; froggy and all the nodes are littles frogs :-)
</span><br>
<span class="quotelev1">&gt; <a href="https://ciment.ujf-grenoble.fr/wiki-pub/index.php/Hardware:Froggy">https://ciment.ujf-grenoble.fr/wiki-pub/index.php/Hardware:Froggy</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I was using $OAR_NODEFILE and frog.txt to check different syntax, one with a
</span><br>
<span class="quotelev1">&gt; liste of nodes (on line with a node name for each available core) and the
</span><br>
<span class="quotelev1">&gt; second with one line per node and the &quot;slots&quot; information for the number of
</span><br>
<span class="quotelev1">&gt; cores. EG:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [begou_at_frog7 MPI_TESTS]$ cat $OAR_NODEFILE
</span><br>
<span class="quotelev1">&gt; frog7
</span><br>
<span class="quotelev1">&gt; frog7
</span><br>
<span class="quotelev1">&gt; frog7
</span><br>
<span class="quotelev1">&gt; frog7
</span><br>
<span class="quotelev1">&gt; frog8
</span><br>
<span class="quotelev1">&gt; frog8
</span><br>
<span class="quotelev1">&gt; frog8
</span><br>
<span class="quotelev1">&gt; frog8
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [begou_at_frog7 MPI_TESTS]$ cat frog.txt
</span><br>
<span class="quotelev1">&gt; frog7 slots=4
</span><br>
<span class="quotelev1">&gt; frog8 slots=4
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks again for the patch and your help.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Patrick
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Gilles Gouaillardet wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks Patrick,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; could you please try again with the --hetero-nodes mpirun option ?
</span><br>
<span class="quotelev1">&gt; (I am afk, and not 100% sure about the syntax)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; could you also submit a job with 2 nodes and 4 cores on each node, that does
</span><br>
<span class="quotelev1">&gt; cat /proc/self/status
</span><br>
<span class="quotelev1">&gt; oarshmost &lt;remote host&gt; cat /proc/self/status
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; btw, is there any reason why do you use a machine file (frog.txt) instead of
</span><br>
<span class="quotelev1">&gt; using $OAR_NODEFILE directly ?
</span><br>
<span class="quotelev1">&gt; /* not to mention I am surprised a French supercomputer is called &quot;frog&quot; ;-)
</span><br>
<span class="quotelev1">&gt; */
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
<span class="quotelev1">&gt; On Friday, September 18, 2015, Patrick Begou
</span><br>
<span class="quotelev1">&gt; &lt;Patrick.Begou_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Gilles Gouaillardet wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Patrick,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; by the way, this will work when running on a single node.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; i do not know what will happen when you run on multiple node ...
</span><br>
<span class="quotelev2">&gt;&gt; since there is no OAR integration in openmpi, i guess you are using ssh to
</span><br>
<span class="quotelev2">&gt;&gt; start orted on the remote nodes
</span><br>
<span class="quotelev2">&gt;&gt; (unless you instructed ompi to use an OARified version of ssh)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Yes, OMPI_MCA_plm_rsh_agent=oarshmost
</span><br>
<span class="quotelev2">&gt;&gt; This exports also needed environment instead of multpiple -x options. To
</span><br>
<span class="quotelev2">&gt;&gt; be as similar as possible to the environments on french national
</span><br>
<span class="quotelev2">&gt;&gt; supercomputers.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; my concern is the remote orted might not run within the cpuset that was
</span><br>
<span class="quotelev2">&gt;&gt; created by OAR for this job,
</span><br>
<span class="quotelev2">&gt;&gt; so you might end up using all the cores on the remote nodes.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The oar environment does this. With older OpenMPI version all is working
</span><br>
<span class="quotelev2">&gt;&gt; fine.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; please let us know how that works for you
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Cheers,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Gilles
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On 9/18/2015 5:02 PM, Gilles Gouaillardet wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
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
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; This patch solve the problem when OpenMPI uses one node but now I'm unable
</span><br>
<span class="quotelev2">&gt;&gt; to use more than one node.
</span><br>
<span class="quotelev2">&gt;&gt; On one node, with 4 cores in the cpuset:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; mpirun --bind-to core --hostfile $OAR_NODEFILE ./location.exe |grep
</span><br>
<span class="quotelev2">&gt;&gt; 'thread is now running on PU'  |sort
</span><br>
<span class="quotelev2">&gt;&gt; (process 0) thread is now running on PU logical index 0 (OS/physical index
</span><br>
<span class="quotelev2">&gt;&gt; 12) on system frog26
</span><br>
<span class="quotelev2">&gt;&gt; (process 1) thread is now running on PU logical index 1 (OS/physical index
</span><br>
<span class="quotelev2">&gt;&gt; 13) on system frog26
</span><br>
<span class="quotelev2">&gt;&gt; (process 2) thread is now running on PU logical index 2 (OS/physical index
</span><br>
<span class="quotelev2">&gt;&gt; 14) on system frog26
</span><br>
<span class="quotelev2">&gt;&gt; (process 3) thread is now running on PU logical index 3 (OS/physical index
</span><br>
<span class="quotelev2">&gt;&gt; 15) on system frog26
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [begou_at_frog26 MPI_TESTS]$ mpirun -np 5 --bind-to core --hostfile
</span><br>
<span class="quotelev2">&gt;&gt; $OAR_NODEFILE ./location.exe
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; A request was made to bind to that would result in binding more
</span><br>
<span class="quotelev2">&gt;&gt; processes than cpus on a resource:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    Bind to:     CORE
</span><br>
<span class="quotelev2">&gt;&gt;    Node:        frog26
</span><br>
<span class="quotelev2">&gt;&gt;    #processes:  2
</span><br>
<span class="quotelev2">&gt;&gt;    #cpus:       1
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; You can override this protection by adding the &quot;overload-allowed&quot;
</span><br>
<span class="quotelev2">&gt;&gt; option to your binding directive.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; But if I request two nodes (4 cores one each) only 4 processes can start
</span><br>
<span class="quotelev2">&gt;&gt; on the local cores, none on the second host:
</span><br>
<span class="quotelev2">&gt;&gt; [begou_at_frog5 MPI_TESTS]$ cat $OAR_NODEFILE
</span><br>
<span class="quotelev2">&gt;&gt; frog5
</span><br>
<span class="quotelev2">&gt;&gt; frog5
</span><br>
<span class="quotelev2">&gt;&gt; frog5
</span><br>
<span class="quotelev2">&gt;&gt; frog5
</span><br>
<span class="quotelev2">&gt;&gt; frog6
</span><br>
<span class="quotelev2">&gt;&gt; frog6
</span><br>
<span class="quotelev2">&gt;&gt; frog6
</span><br>
<span class="quotelev2">&gt;&gt; frog6
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [begou_at_frog5 MPI_TESTS]$ cat ./frog.txt
</span><br>
<span class="quotelev2">&gt;&gt; frog5 slots=4
</span><br>
<span class="quotelev2">&gt;&gt; frog6 slots=4
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; But only 4 processes are launched:
</span><br>
<span class="quotelev2">&gt;&gt; [begou_at_frog5 MPI_TESTS]$ mpirun --hostfile frog.txt --bind-to core
</span><br>
<span class="quotelev2">&gt;&gt; ./location.exe |grep 'thread is now running on PU'
</span><br>
<span class="quotelev2">&gt;&gt; (process 0) thread is now running on PU logical index 0 (OS/physical index
</span><br>
<span class="quotelev2">&gt;&gt; 12) on system frog5
</span><br>
<span class="quotelev2">&gt;&gt; (process 1) thread is now running on PU logical index 1 (OS/physical index
</span><br>
<span class="quotelev2">&gt;&gt; 13) on system frog5
</span><br>
<span class="quotelev2">&gt;&gt; (process 2) thread is now running on PU logical index 2 (OS/physical index
</span><br>
<span class="quotelev2">&gt;&gt; 14) on system frog5
</span><br>
<span class="quotelev2">&gt;&gt; (process 3) thread is now running on PU logical index 3 (OS/physical index
</span><br>
<span class="quotelev2">&gt;&gt; 15) on system frog5
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; If I ask explicitly 8 processes (one for each 4 cores of the 2 nodes)
</span><br>
<span class="quotelev2">&gt;&gt; [begou_at_frog5 MPI_TESTS]$ mpirun --hostfile frog.txt -np 8 --bind-to core
</span><br>
<span class="quotelev2">&gt;&gt; ./location.exe
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; A request was made to bind to that would result in binding more
</span><br>
<span class="quotelev2">&gt;&gt; processes than cpus on a resource:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    Bind to:     CORE
</span><br>
<span class="quotelev2">&gt;&gt;    Node:        frog5
</span><br>
<span class="quotelev2">&gt;&gt;    #processes:  2
</span><br>
<span class="quotelev2">&gt;&gt;    #cpus:       1
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; You can override this protection by adding the &quot;overload-allowed&quot;
</span><br>
<span class="quotelev2">&gt;&gt; option to your binding directive.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
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
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Ralph Castain wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; As I said, if you don&#226;&#128;&#153;t provide an explicit slot count in your hostfile,
</span><br>
<span class="quotelev2">&gt;&gt; we default to allowing oversubscription. We don&#226;&#128;&#153;t have OAR integration in
</span><br>
<span class="quotelev2">&gt;&gt; OMPI, and so mpirun isn&#226;&#128;&#153;t recognizing that you are running under a resource
</span><br>
<span class="quotelev2">&gt;&gt; manager - it thinks this is just being controlled by a hostfile.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; That's look strange for me is that in this case (default) oversubscription
</span><br>
<span class="quotelev2">&gt;&gt; is allowed for the number of core of one cpu (8), not the number of cores
</span><br>
<span class="quotelev2">&gt;&gt; available in the node (16) or unlimited...
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; If you want us to error out on oversubscription, you can either add the
</span><br>
<span class="quotelev2">&gt;&gt; flag you identified, or simply change your hostfile to:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; frog53 slots=4
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Either will work.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; This syntax in the host file doesn't change anything to the oversuscribing
</span><br>
<span class="quotelev2">&gt;&gt; problem. It is still allowed with the same maximum amount of processes for
</span><br>
<span class="quotelev2">&gt;&gt; this test case:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [begou_at_frog7 MPI_TESTS]$ mpirun -np 8 --hostfile frog7.txt --bind-to core
</span><br>
<span class="quotelev2">&gt;&gt; ./location.exe|grep 'thread is now running on PU'  |sort
</span><br>
<span class="quotelev2">&gt;&gt; (process 0) thread is now running on PU logical index 0 (OS/physical index
</span><br>
<span class="quotelev2">&gt;&gt; 0) on system frog7
</span><br>
<span class="quotelev2">&gt;&gt; (process 1) thread is now running on PU logical index 2 (OS/physical index
</span><br>
<span class="quotelev2">&gt;&gt; 6) on system frog7
</span><br>
<span class="quotelev2">&gt;&gt; (process 2) thread is now running on PU logical index 0 (OS/physical index
</span><br>
<span class="quotelev2">&gt;&gt; 0) on system frog7
</span><br>
<span class="quotelev2">&gt;&gt; (process 3) thread is now running on PU logical index 2 (OS/physical index
</span><br>
<span class="quotelev2">&gt;&gt; 6) on system frog7
</span><br>
<span class="quotelev2">&gt;&gt; (process 4) thread is now running on PU logical index 3 (OS/physical index
</span><br>
<span class="quotelev2">&gt;&gt; 7) on system frog7
</span><br>
<span class="quotelev2">&gt;&gt; (process 5) thread is now running on PU logical index 1 (OS/physical index
</span><br>
<span class="quotelev2">&gt;&gt; 5) on system frog7
</span><br>
<span class="quotelev2">&gt;&gt; (process 6) thread is now running on PU logical index 2 (OS/physical index
</span><br>
<span class="quotelev2">&gt;&gt; 6) on system frog7
</span><br>
<span class="quotelev2">&gt;&gt; (process 7) thread is now running on PU logical index 3 (OS/physical index
</span><br>
<span class="quotelev2">&gt;&gt; 7) on system frog7
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [begou_at_frog7 MPI_TESTS]$ cat frog7.txt
</span><br>
<span class="quotelev2">&gt;&gt; frog7 slots=4
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Patrick
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Sep 16, 2015, at 1:00 AM, Patrick Begou
</span><br>
<span class="quotelev2">&gt;&gt; &lt;Patrick.Begou_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks all for your answers, I've added some details about the tests I
</span><br>
<span class="quotelev2">&gt;&gt; have run.  See below.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Ralph Castain wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Not precisely correct. It depends on the environment.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; If there is a resource manager allocating nodes, or you provide a hostfile
</span><br>
<span class="quotelev2">&gt;&gt; that specifies the number of slots on the nodes, or you use -host, then we
</span><br>
<span class="quotelev2">&gt;&gt; default to no-oversubscribe.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I'm using a batch scheduler (OAR).
</span><br>
<span class="quotelev2">&gt;&gt; # cat /dev/cpuset/oar/begou_7955553/cpuset.cpus
</span><br>
<span class="quotelev2">&gt;&gt; 4-7
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; So 4 cores allowed. Nodes have two height cores cpus.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Node file contains:
</span><br>
<span class="quotelev2">&gt;&gt; # cat $OAR_NODEFILE
</span><br>
<span class="quotelev2">&gt;&gt; frog53
</span><br>
<span class="quotelev2">&gt;&gt; frog53
</span><br>
<span class="quotelev2">&gt;&gt; frog53
</span><br>
<span class="quotelev2">&gt;&gt; frog53
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; # mpirun --hostfile $OAR_NODEFILE -bind-to core location.exe
</span><br>
<span class="quotelev2">&gt;&gt; is  okay (my test code show one process on each core)
</span><br>
<span class="quotelev2">&gt;&gt; (process 3) thread is now running on PU logical index 1 (OS/physical index
</span><br>
<span class="quotelev2">&gt;&gt; 5) on system frog53
</span><br>
<span class="quotelev2">&gt;&gt; (process 0) thread is now running on PU logical index 3 (OS/physical index
</span><br>
<span class="quotelev2">&gt;&gt; 7) on system frog53
</span><br>
<span class="quotelev2">&gt;&gt; (process 1) thread is now running on PU logical index 0 (OS/physical index
</span><br>
<span class="quotelev2">&gt;&gt; 4) on system frog53
</span><br>
<span class="quotelev2">&gt;&gt; (process 2) thread is now running on PU logical index 2 (OS/physical index
</span><br>
<span class="quotelev2">&gt;&gt; 6) on system frog53
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; # mpirun -np 5 --hostfile $OAR_NODEFILE -bind-to core location.exe
</span><br>
<span class="quotelev2">&gt;&gt; oversuscribe with:
</span><br>
<span class="quotelev2">&gt;&gt; (process 0) thread is now running on PU logical index 3 (OS/physical index
</span><br>
<span class="quotelev2">&gt;&gt; 7) on system frog53
</span><br>
<span class="quotelev2">&gt;&gt; (process 1) thread is now running on PU logical index 1 (OS/physical index
</span><br>
<span class="quotelev2">&gt;&gt; 5) on system frog53
</span><br>
<span class="quotelev2">&gt;&gt; (process 3) thread is now running on PU logical index 2 (OS/physical index
</span><br>
<span class="quotelev2">&gt;&gt; 6) on system frog53
</span><br>
<span class="quotelev2">&gt;&gt; (process 4) thread is now running on PU logical index 0 (OS/physical index
</span><br>
<span class="quotelev2">&gt;&gt; 4) on system frog53
</span><br>
<span class="quotelev2">&gt;&gt; (process 2) thread is now running on PU logical index 2 (OS/physical index
</span><br>
<span class="quotelev2">&gt;&gt; 6) on system frog53
</span><br>
<span class="quotelev2">&gt;&gt; This is not allowed with OpenMPI 1.7.3
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I can increase until the maximul core number of this first pocessor (8
</span><br>
<span class="quotelev2">&gt;&gt; cores)
</span><br>
<span class="quotelev2">&gt;&gt; # mpirun -np 8 --hostfile $OAR_NODEFILE -bind-to core location.exe |grep
</span><br>
<span class="quotelev2">&gt;&gt; 'thread is now running on PU'
</span><br>
<span class="quotelev2">&gt;&gt; (process 5) thread is now running on PU logical index 1 (OS/physical index
</span><br>
<span class="quotelev2">&gt;&gt; 5) on system frog53
</span><br>
<span class="quotelev2">&gt;&gt; (process 7) thread is now running on PU logical index 3 (OS/physical index
</span><br>
<span class="quotelev2">&gt;&gt; 7) on system frog53
</span><br>
<span class="quotelev2">&gt;&gt; (process 4) thread is now running on PU logical index 0 (OS/physical index
</span><br>
<span class="quotelev2">&gt;&gt; 4) on system frog53
</span><br>
<span class="quotelev2">&gt;&gt; (process 6) thread is now running on PU logical index 2 (OS/physical index
</span><br>
<span class="quotelev2">&gt;&gt; 6) on system frog53
</span><br>
<span class="quotelev2">&gt;&gt; (process 2) thread is now running on PU logical index 1 (OS/physical index
</span><br>
<span class="quotelev2">&gt;&gt; 5) on system frog53
</span><br>
<span class="quotelev2">&gt;&gt; (process 0) thread is now running on PU logical index 2 (OS/physical index
</span><br>
<span class="quotelev2">&gt;&gt; 6) on system frog53
</span><br>
<span class="quotelev2">&gt;&gt; (process 1) thread is now running on PU logical index 0 (OS/physical index
</span><br>
<span class="quotelev2">&gt;&gt; 4) on system frog53
</span><br>
<span class="quotelev2">&gt;&gt; (process 3) thread is now running on PU logical index 0 (OS/physical index
</span><br>
<span class="quotelev2">&gt;&gt; 4) on system frog53
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; But I cannot overload more than the 8 cores (max core number of one cpu).
</span><br>
<span class="quotelev2">&gt;&gt; # mpirun -np 9 --hostfile $OAR_NODEFILE -bind-to core location.exe
</span><br>
<span class="quotelev2">&gt;&gt; A request was made to bind to that would result in binding more
</span><br>
<span class="quotelev2">&gt;&gt; processes than cpus on a resource:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    Bind to:     CORE
</span><br>
<span class="quotelev2">&gt;&gt;    Node:        frog53
</span><br>
<span class="quotelev2">&gt;&gt;    #processes:  2
</span><br>
<span class="quotelev2">&gt;&gt;    #cpus:       1
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; You can override this protection by adding the &quot;overload-allowed&quot;
</span><br>
<span class="quotelev2">&gt;&gt; option to your binding directive.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Now if I add --nooversubscribe the problem doesn't exist anymore (no more
</span><br>
<span class="quotelev2">&gt;&gt; than 4 processes, one on each core). So looks like if default behavior would
</span><br>
<span class="quotelev2">&gt;&gt; be a nooversuscribe on cores number of the socket ???
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Again, with 1.7.3 this problem doesn't occur at all.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Patrick
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; If you provide a hostfile that doesn&#226;&#128;&#153;t specify slots, then we use the
</span><br>
<span class="quotelev2">&gt;&gt; number of cores we find on each node, and we allow oversubscription.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; What is being described sounds like more of a bug than an intended
</span><br>
<span class="quotelev2">&gt;&gt; feature. I&#226;&#128;&#153;d need to know more about it, though, to be sure. Can you tell me
</span><br>
<span class="quotelev2">&gt;&gt; how you are specifying this cpuset?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Sep 15, 2015, at 4:44 PM, Matt Thompson &lt;fortran_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Looking at the Open MPI 1.10.0 man page:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   <a href="https://www.open-mpi.org/doc/v1.10/man1/mpirun.1.php">https://www.open-mpi.org/doc/v1.10/man1/mpirun.1.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; it looks like perhaps -oversubscribe (which was an option) is now the
</span><br>
<span class="quotelev2">&gt;&gt; default behavior. Instead we have:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -nooversubscribe, --nooversubscribe Do not oversubscribe any nodes; error
</span><br>
<span class="quotelev2">&gt;&gt; (without starting any processes) if the requested number of processes would
</span><br>
<span class="quotelev2">&gt;&gt; cause oversubscription. This option implicitly sets &quot;max_slots&quot; equal to the
</span><br>
<span class="quotelev2">&gt;&gt; &quot;slots&quot; value for each node.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; It also looks like -map-by has a way to implement it as well (see man
</span><br>
<span class="quotelev2">&gt;&gt; page).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks for letting me/us know about this. On a system of mine I sort of
</span><br>
<span class="quotelev2">&gt;&gt; depend on the -nooversubscribe behavior!
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Matt
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Tue, Sep 15, 2015 at 11:17 AM, Patrick Begou
</span><br>
<span class="quotelev2">&gt;&gt; &lt;Patrick.Begou_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I'm runing OpenMPI 1.10.0 built with Intel 2015 compilers on a Bullx
</span><br>
<span class="quotelev3">&gt;&gt;&gt; System.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I've some troubles with the bind-to core option when using cpuset.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; If the cpuset is less than all the cores of a cpu (ex: 4 cores allowed on
</span><br>
<span class="quotelev3">&gt;&gt;&gt; a 8 cores cpus) OpenMPI 1.10.0 allows to overload these cores  until the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; maximum number of cores of the cpu.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; With this config and because the cpuset only allows 4 cores, I can reach
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 2 processes/core if I use:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpirun -np 8 --bind-to core my_application
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; OpenMPI 1.7.3 doesn't show the problem with the same situation:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpirun -np 8 --bind-to-core my_application
</span><br>
<span class="quotelev3">&gt;&gt;&gt; returns:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; A request was made to bind to that would result in binding more
</span><br>
<span class="quotelev3">&gt;&gt;&gt; processes than cpus on a resource
</span><br>
<span class="quotelev3">&gt;&gt;&gt; and that's okay of course.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Is there a way to avoid this oveloading with OpenMPI 1.10.0 ?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Patrick
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ===================================================================
</span><br>
<span class="quotelev3">&gt;&gt;&gt; |  Equipe M.O.S.T.         |                                      |
</span><br>
<span class="quotelev3">&gt;&gt;&gt; |  Patrick BEGOU           | mailto:Patrick.Begou_at_[hidden] |
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
<span class="quotelev3">&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Link to this post:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/09/27575.php">http://www.open-mpi.org/community/lists/users/2015/09/27575.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Matt Thompson
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Man Among Men
</span><br>
<span class="quotelev2">&gt;&gt; Fulcrum of History
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/09/27579.php">http://www.open-mpi.org/community/lists/users/2015/09/27579.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
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
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/09/27580.php">http://www.open-mpi.org/community/lists/users/2015/09/27580.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; ===================================================================
</span><br>
<span class="quotelev2">&gt;&gt; |  Equipe M.O.S.T.         |                                      |
</span><br>
<span class="quotelev2">&gt;&gt; |  Patrick BEGOU           | mailto:Patrick.Begou_at_[hidden] |
</span><br>
<span class="quotelev2">&gt;&gt; |  LEGI                    |                                      |
</span><br>
<span class="quotelev2">&gt;&gt; |  BP 53 X                 | Tel 04 76 82 51 35                   |
</span><br>
<span class="quotelev2">&gt;&gt; |  38041 GRENOBLE CEDEX    | Fax 04 76 82 52 71                   |
</span><br>
<span class="quotelev2">&gt;&gt; ===================================================================
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/09/27583.php">http://www.open-mpi.org/community/lists/users/2015/09/27583.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
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
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/09/27590.php">http://www.open-mpi.org/community/lists/users/2015/09/27590.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; ===================================================================
</span><br>
<span class="quotelev2">&gt;&gt; |  Equipe M.O.S.T.         |                                      |
</span><br>
<span class="quotelev2">&gt;&gt; |  Patrick BEGOU           | mailto:Patrick.Begou_at_[hidden] |
</span><br>
<span class="quotelev2">&gt;&gt; |  LEGI                    |                                      |
</span><br>
<span class="quotelev2">&gt;&gt; |  BP 53 X                 | Tel 04 76 82 51 35                   |
</span><br>
<span class="quotelev2">&gt;&gt; |  38041 GRENOBLE CEDEX    | Fax 04 76 82 52 71                   |
</span><br>
<span class="quotelev2">&gt;&gt; ===================================================================
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
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/09/27619.php">http://www.open-mpi.org/community/lists/users/2015/09/27619.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
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
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/09/27620.php">http://www.open-mpi.org/community/lists/users/2015/09/27620.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
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
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/09/27621.php">http://www.open-mpi.org/community/lists/users/2015/09/27621.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; ===================================================================
</span><br>
<span class="quotelev2">&gt;&gt; |  Equipe M.O.S.T.         |                                      |
</span><br>
<span class="quotelev2">&gt;&gt; |  Patrick BEGOU           | mailto:Patrick.Begou_at_[hidden] |
</span><br>
<span class="quotelev2">&gt;&gt; |  LEGI                    |                                      |
</span><br>
<span class="quotelev2">&gt;&gt; |  BP 53 X                 | Tel 04 76 82 51 35                   |
</span><br>
<span class="quotelev2">&gt;&gt; |  38041 GRENOBLE CEDEX    | Fax 04 76 82 52 71                   |
</span><br>
<span class="quotelev2">&gt;&gt; ===================================================================
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
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/09/27624.php">http://www.open-mpi.org/community/lists/users/2015/09/27624.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; ===================================================================
</span><br>
<span class="quotelev1">&gt; |  Equipe M.O.S.T.         |                                      |
</span><br>
<span class="quotelev1">&gt; |  Patrick BEGOU           | mailto:Patrick.Begou_at_[hidden] |
</span><br>
<span class="quotelev1">&gt; |  LEGI                    |                                      |
</span><br>
<span class="quotelev1">&gt; |  BP 53 X                 | Tel 04 76 82 51 35                   |
</span><br>
<span class="quotelev1">&gt; |  38041 GRENOBLE CEDEX    | Fax 04 76 82 52 71                   |
</span><br>
<span class="quotelev1">&gt; ===================================================================
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
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/09/27644.php">http://www.open-mpi.org/community/lists/users/2015/09/27644.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27646.php">Nathan Hjelm: "Re: [OMPI users] possible GATS bug in osc/sm"</a>
<li><strong>Previous message:</strong> <a href="27644.php">Patrick Begou: "Re: [OMPI users] OpenMPI-1.10.0 bind-to core error"</a>
<li><strong>In reply to:</strong> <a href="27644.php">Patrick Begou: "Re: [OMPI users] OpenMPI-1.10.0 bind-to core error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27650.php">Ralph Castain: "Re: [OMPI users] OpenMPI-1.10.0 bind-to core error"</a>
<li><strong>Reply:</strong> <a href="27650.php">Ralph Castain: "Re: [OMPI users] OpenMPI-1.10.0 bind-to core error"</a>
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

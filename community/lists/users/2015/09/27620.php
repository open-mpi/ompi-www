<?
$subject_val = "Re: [OMPI users] OpenMPI-1.10.0 bind-to core error";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Sep 18 04:02:18 2015" -->
<!-- isoreceived="20150918080218" -->
<!-- sent="Fri, 18 Sep 2015 17:02:03 +0900" -->
<!-- isosent="20150918080203" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI-1.10.0 bind-to core error" -->
<!-- id="55FBC4FB.1090602_at_rist.or.jp" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="55FBC331.6030509_at_legi.grenoble-inp.fr" -->
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
<strong>From:</strong> Gilles Gouaillardet (<em>gilles_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-09-18 04:02:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27621.php">Gilles Gouaillardet: "Re: [OMPI users] OpenMPI-1.10.0 bind-to core error"</a>
<li><strong>Previous message:</strong> <a href="27619.php">Patrick Begou: "Re: [OMPI users] OpenMPI-1.10.0 bind-to core error"</a>
<li><strong>In reply to:</strong> <a href="27619.php">Patrick Begou: "Re: [OMPI users] OpenMPI-1.10.0 bind-to core error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27621.php">Gilles Gouaillardet: "Re: [OMPI users] OpenMPI-1.10.0 bind-to core error"</a>
<li><strong>Reply:</strong> <a href="27621.php">Gilles Gouaillardet: "Re: [OMPI users] OpenMPI-1.10.0 bind-to core error"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Patrick,
<br>
<p>i just filled PR 586 <a href="https://github.com/open-mpi/ompi-release/pull/586">https://github.com/open-mpi/ompi-release/pull/586</a> 
<br>
for the v1.10 series
<br>
<p>this is only a three line patch.
<br>
could you please give it a try ?
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p>On 9/18/2015 4:54 PM, Patrick Begou wrote:
<br>
<span class="quotelev1">&gt; Ralph Castain wrote:
</span><br>
<span class="quotelev2">&gt;&gt; As I said, if you don&#146;t provide an explicit slot count in your 
</span><br>
<span class="quotelev2">&gt;&gt; hostfile, we default to allowing oversubscription. We don&#146;t have OAR 
</span><br>
<span class="quotelev2">&gt;&gt; integration in OMPI, and so mpirun isn&#146;t recognizing that you are 
</span><br>
<span class="quotelev2">&gt;&gt; running under a resource manager - it thinks this is just being 
</span><br>
<span class="quotelev2">&gt;&gt; controlled by a hostfile.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; That's look strange for me is that in this case (default) 
</span><br>
<span class="quotelev1">&gt; oversubscription is allowed for the number of core of one cpu (8), not 
</span><br>
<span class="quotelev1">&gt; the number of cores available in the node (16) or unlimited...
</span><br>
<span class="quotelev2">&gt;&gt; If you want us to error out on oversubscription, you can either add 
</span><br>
<span class="quotelev2">&gt;&gt; the flag you identified, or simply change your hostfile to:
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
<span class="quotelev1">&gt; This syntax in the host file doesn't change anything to the 
</span><br>
<span class="quotelev1">&gt; oversuscribing problem. It is still allowed with the same maximum 
</span><br>
<span class="quotelev1">&gt; amount of processes for this test case:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [begou_at_frog7 MPI_TESTS]$ mpirun -np 8 *--hostfile frog7.txt* --bind-to 
</span><br>
<span class="quotelev1">&gt; core ./location.exe|grep 'thread is now running on PU' |sort
</span><br>
<span class="quotelev1">&gt; (process 0) thread is now running on PU logical index 0 (OS/physical 
</span><br>
<span class="quotelev1">&gt; index 0) on system frog7
</span><br>
<span class="quotelev1">&gt; (process 1) thread is now running on PU logical index 2 (OS/physical 
</span><br>
<span class="quotelev1">&gt; index 6) on system frog7
</span><br>
<span class="quotelev1">&gt; (process 2) thread is now running on PU logical index 0 (OS/physical 
</span><br>
<span class="quotelev1">&gt; index 0) on system frog7
</span><br>
<span class="quotelev1">&gt; (process 3) thread is now running on PU logical index 2 (OS/physical 
</span><br>
<span class="quotelev1">&gt; index 6) on system frog7
</span><br>
<span class="quotelev1">&gt; (process 4) thread is now running on PU logical index 3 (OS/physical 
</span><br>
<span class="quotelev1">&gt; index 7) on system frog7
</span><br>
<span class="quotelev1">&gt; (process 5) thread is now running on PU logical index 1 (OS/physical 
</span><br>
<span class="quotelev1">&gt; index 5) on system frog7
</span><br>
<span class="quotelev1">&gt; (process 6) thread is now running on PU logical index 2 (OS/physical 
</span><br>
<span class="quotelev1">&gt; index 6) on system frog7
</span><br>
<span class="quotelev1">&gt; (process 7) thread is now running on PU logical index 3 (OS/physical 
</span><br>
<span class="quotelev1">&gt; index 7) on system frog7
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [begou_at_frog7 MPI_TESTS]$ *cat frog7.txt*
</span><br>
<span class="quotelev1">&gt; frog7 slots=4
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Patrick
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Sep 16, 2015, at 1:00 AM, Patrick Begou 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &lt;Patrick.Begou_at_[hidden] 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &lt;mailto:Patrick.Begou_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks all for your answers, I've added some details about the tests 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I have run. See below.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Ralph Castain wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Not precisely correct. It depends on the environment.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; If there is a resource manager allocating nodes, or you provide a 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; hostfile that specifies the number of slots on the nodes, or you 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; use -host, then we default to no-oversubscribe.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I'm using a batch scheduler (OAR).
</span><br>
<span class="quotelev3">&gt;&gt;&gt; # cat /dev/cpuset/oar/begou_7955553/cpuset.cpus
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 4-7
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; So 4 cores allowed. Nodes have two height cores cpus.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Node file contains:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; # cat $OAR_NODEFILE
</span><br>
<span class="quotelev3">&gt;&gt;&gt; frog53
</span><br>
<span class="quotelev3">&gt;&gt;&gt; frog53
</span><br>
<span class="quotelev3">&gt;&gt;&gt; frog53
</span><br>
<span class="quotelev3">&gt;&gt;&gt; frog53
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; # mpirun --hostfile $OAR_NODEFILE -bind-to core location.exe
</span><br>
<span class="quotelev3">&gt;&gt;&gt; is  okay (my test code show one process on each core)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (process 3) thread is now running on PU logical index 1 (OS/physical 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; index 5) on system frog53
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (process 0) thread is now running on PU logical index 3 (OS/physical 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; index 7) on system frog53
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (process 1) thread is now running on PU logical index 0 (OS/physical 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; index 4) on system frog53
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (process 2) thread is now running on PU logical index 2 (OS/physical 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; index 6) on system frog53
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; # mpirun -np 5 --hostfile $OAR_NODEFILE -bind-to core location.exe
</span><br>
<span class="quotelev3">&gt;&gt;&gt; oversuscribe with:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (process 0) thread is now running on PU logical index 3 (OS/physical 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; index 7) on system frog53
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (process 1) thread is now running on PU logical index 1 (OS/physical 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; index 5) on system frog53
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (*process 3*) thread is now running on PU logical index*2 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (OS/physical index 6)*on system frog53
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (process 4) thread is now running on PU logical index 0 (OS/physical 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; index 4) on system frog53
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (*process 2*) thread is now running on PU logical index*2 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (OS/physical index 6)*on system frog53
</span><br>
<span class="quotelev3">&gt;&gt;&gt; This is not allowed with OpenMPI 1.7.3
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I can increase until the maximul core number of this first pocessor 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (8 cores)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; # mpirun -np 8 --hostfile $OAR_NODEFILE -bind-to core location.exe 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; |grep 'thread is now running on PU'
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (process 5) thread is now running on PU logical index 1 (OS/physical 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; index 5) on system frog53
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (process 7) thread is now running on PU logical index 3 (OS/physical 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; index 7) on system frog53
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (process 4) thread is now running on PU logical index 0 (OS/physical 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; index 4) on system frog53
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (process 6) thread is now running on PU logical index 2 (OS/physical 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; index 6) on system frog53
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (process 2) thread is now running on PU logical index 1 (OS/physical 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; index 5) on system frog53
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (process 0) thread is now running on PU logical index 2 (OS/physical 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; index 6) on system frog53
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (process 1) thread is now running on PU logical index 0 (OS/physical 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; index 4) on system frog53
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (process 3) thread is now running on PU logical index 0 (OS/physical 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; index 4) on system frog53
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; But I cannot overload more than the 8 cores (max core number of one 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; cpu).
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #mpirun -np 9 --hostfile $OAR_NODEFILE -bind-to core location.exe
</span><br>
<span class="quotelev3">&gt;&gt;&gt; A request was made to bind to that would result in binding more
</span><br>
<span class="quotelev3">&gt;&gt;&gt; processes than cpus on a resource:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    Bind to:     CORE
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    Node:        frog53
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    #processes:  2
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    #cpus:       1
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; You can override this protection by adding the &quot;overload-allowed&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; option to your binding directive.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Now if I add*--nooversubscribe*the problem doesn't exist anymore (no 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; more than 4 processes, one on each core). So looks like if default 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; behavior would be a nooversuscribe on cores number of the socket ???
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Again, with 1.7.3 this problem doesn't occur at all.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Patrick
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; If you provide a hostfile that doesn&#146;t specify slots, then we use 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; the number of cores we find on each node, and we allow 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; oversubscription.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; What is being described sounds like more of a bug than an intended 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; feature. I&#146;d need to know more about it, though, to be sure. Can 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; you tell me how you are specifying this cpuset?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; On Sep 15, 2015, at 4:44 PM, Matt Thompson &lt;fortran_at_[hidden] 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &lt;mailto:fortran_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Looking at the Open MPI 1.10.0 man page:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; <a href="https://www.open-mpi.org/doc/v1.10/man1/mpirun.1.php">https://www.open-mpi.org/doc/v1.10/man1/mpirun.1.php</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; it looks like perhaps -oversubscribe (which was an option) is now 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; the default behavior. Instead we have:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; *-nooversubscribe, --nooversubscribe*
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;     Do not oversubscribe any nodes; error (without starting any
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;     processes) if the requested number of processes would cause
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;     oversubscription. This option implicitly sets &quot;max_slots&quot;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;     equal to the &quot;slots&quot; value for each node.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; It also looks like -map-by has a way to implement it as well (see 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; man page).
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Thanks for letting me/us know about this. On a system of mine I 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; sort of depend on the -nooversubscribe behavior!
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Matt
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; On Tue, Sep 15, 2015 at 11:17 AM, Patrick 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Begou&lt;Patrick.Begou_at_[hidden] 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &lt;mailto:Patrick.Begou_at_[hidden]&gt;&gt;wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;     Hi,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;     I'm runing OpenMPI 1.10.0 built with Intel 2015 compilers on a
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;     Bullx System.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;     I've some troubles with the bind-to core option when using cpuset.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;     If the cpuset is less than all the cores of a cpu (ex: 4 cores
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;     allowed on a 8 cores cpus) OpenMPI 1.10.0 allows to overload
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;     these cores  until the maximum number of cores of the cpu.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;     With this config and because the cpuset only allows 4 cores, I
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;     can reach 2 processes/core if I use:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;     mpirun -np 8 --bind-to core my_application
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;     OpenMPI 1.7.3 doesn't show the problem with the same situation:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;     mpirun -np 8 --bind-to-core my_application
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;     returns:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;     /A request was made to bind to that would result in binding more//
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;     //processes than cpus on a resource/
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;     and that's okay of course.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;     Is there a way to avoid this oveloading with OpenMPI 1.10.0 ?
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;     Thanks
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;     Patrick
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;     -- 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;     ===================================================================
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;     |  Equipe M.O.S.T.         |                                      |
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;     |  Patrick BEGOU           |mailto:Patrick.Begou_at_[hidden]  |
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;     |  LEGI                    |                                      |
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;     |  BP 53 X                 | Tel 04 76 82 51 35                   |
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;     |  38041 GRENOBLE CEDEX    | Fax 04 76 82 52 71                   |
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;     ===================================================================
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;     _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;     users mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;     users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;     Subscription:<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;     Link to this
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;     post:<a href="http://www.open-mpi.org/community/lists/users/2015/09/27575.php">http://www.open-mpi.org/community/lists/users/2015/09/27575.php</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; --
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Matt Thompson
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;     Man Among Men
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;     Fulcrum of History
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
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
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; post:<a href="http://www.open-mpi.org/community/lists/users/2015/09/27579.php">http://www.open-mpi.org/community/lists/users/2015/09/27579.php</a>
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
<span class="quotelev4">&gt;&gt;&gt;&gt; Link to this post:<a href="http://www.open-mpi.org/community/lists/users/2015/09/27580.php">http://www.open-mpi.org/community/lists/users/2015/09/27580.php</a>
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
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subscription:<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Link to this 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; post:<a href="http://www.open-mpi.org/community/lists/users/2015/09/27583.php">http://www.open-mpi.org/community/lists/users/2015/09/27583.php</a>
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
<span class="quotelev2">&gt;&gt; Link to this post:<a href="http://www.open-mpi.org/community/lists/users/2015/09/27590.php">http://www.open-mpi.org/community/lists/users/2015/09/27590.php</a>
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
<span class="quotelev1">&gt; |  Patrick BEGOU           |mailto:Patrick.Begou_at_[hidden]  |
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/09/27619.php">http://www.open-mpi.org/community/lists/users/2015/09/27619.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-27620/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27621.php">Gilles Gouaillardet: "Re: [OMPI users] OpenMPI-1.10.0 bind-to core error"</a>
<li><strong>Previous message:</strong> <a href="27619.php">Patrick Begou: "Re: [OMPI users] OpenMPI-1.10.0 bind-to core error"</a>
<li><strong>In reply to:</strong> <a href="27619.php">Patrick Begou: "Re: [OMPI users] OpenMPI-1.10.0 bind-to core error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27621.php">Gilles Gouaillardet: "Re: [OMPI users] OpenMPI-1.10.0 bind-to core error"</a>
<li><strong>Reply:</strong> <a href="27621.php">Gilles Gouaillardet: "Re: [OMPI users] OpenMPI-1.10.0 bind-to core error"</a>
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

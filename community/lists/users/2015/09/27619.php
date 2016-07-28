<?
$subject_val = "Re: [OMPI users] OpenMPI-1.10.0 bind-to core error";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Sep 18 03:54:38 2015" -->
<!-- isoreceived="20150918075438" -->
<!-- sent="Fri, 18 Sep 2015 09:54:25 +0200" -->
<!-- isosent="20150918075425" -->
<!-- name="Patrick Begou" -->
<!-- email="Patrick.Begou_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI-1.10.0 bind-to core error" -->
<!-- id="55FBC331.6030509_at_legi.grenoble-inp.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="05A2A29E-0C7D-4C7A-B976-DAF039803F4B_at_open-mpi.org" -->
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
<strong>Date:</strong> 2015-09-18 03:54:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27620.php">Gilles Gouaillardet: "Re: [OMPI users] OpenMPI-1.10.0 bind-to core error"</a>
<li><strong>Previous message:</strong> <a href="27618.php">Ralph Castain: "Re: [OMPI users] C/R Enabled Debugging"</a>
<li><strong>In reply to:</strong> <a href="27590.php">Ralph Castain: "Re: [OMPI users] OpenMPI-1.10.0 bind-to core error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27620.php">Gilles Gouaillardet: "Re: [OMPI users] OpenMPI-1.10.0 bind-to core error"</a>
<li><strong>Reply:</strong> <a href="27620.php">Gilles Gouaillardet: "Re: [OMPI users] OpenMPI-1.10.0 bind-to core error"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ralph Castain wrote:
<br>
<span class="quotelev1">&gt; As I said, if you don't provide an explicit slot count in your hostfile, we 
</span><br>
<span class="quotelev1">&gt; default to allowing oversubscription. We don't have OAR integration in OMPI, 
</span><br>
<span class="quotelev1">&gt; and so mpirun isn't recognizing that you are running under a resource manager 
</span><br>
<span class="quotelev1">&gt; - it thinks this is just being controlled by a hostfile.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>That's look strange for me is that in this case (default) oversubscription is 
<br>
allowed for the number of core of one cpu (8), not the number of cores available 
<br>
in the node (16) or unlimited...
<br>
<span class="quotelev1">&gt; If you want us to error out on oversubscription, you can either add the flag 
</span><br>
<span class="quotelev1">&gt; you identified, or simply change your hostfile to:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; frog53 slots=4
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Either will work.
</span><br>
<span class="quotelev1">&gt;
</span><br>
This syntax in the host file doesn't change anything to the oversuscribing 
<br>
problem. It is still allowed with the same maximum amount of processes for this 
<br>
test case:
<br>
<p>[begou_at_frog7 MPI_TESTS]$ mpirun -np 8 *--hostfile frog7.txt* --bind-to core 
<br>
./location.exe|grep 'thread is now running on PU' |sort
<br>
(process 0) thread is now running on PU logical index 0 (OS/physical index 0) on 
<br>
system frog7
<br>
(process 1) thread is now running on PU logical index 2 (OS/physical index 6) on 
<br>
system frog7
<br>
(process 2) thread is now running on PU logical index 0 (OS/physical index 0) on 
<br>
system frog7
<br>
(process 3) thread is now running on PU logical index 2 (OS/physical index 6) on 
<br>
system frog7
<br>
(process 4) thread is now running on PU logical index 3 (OS/physical index 7) on 
<br>
system frog7
<br>
(process 5) thread is now running on PU logical index 1 (OS/physical index 5) on 
<br>
system frog7
<br>
(process 6) thread is now running on PU logical index 2 (OS/physical index 6) on 
<br>
system frog7
<br>
(process 7) thread is now running on PU logical index 3 (OS/physical index 7) on 
<br>
system frog7
<br>
<p>[begou_at_frog7 MPI_TESTS]$ *cat frog7.txt*
<br>
frog7 slots=4
<br>
<p>Patrick
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Sep 16, 2015, at 1:00 AM, Patrick Begou 
</span><br>
<span class="quotelev2">&gt;&gt; &lt;Patrick.Begou_at_[hidden] 
</span><br>
<span class="quotelev2">&gt;&gt; &lt;mailto:Patrick.Begou_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks all for your answers, I've added some details about the tests I have 
</span><br>
<span class="quotelev2">&gt;&gt; run.  See below.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Ralph Castain wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Not precisely correct. It depends on the environment.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; If there is a resource manager allocating nodes, or you provide a hostfile 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; that specifies the number of slots on the nodes, or you use -host, then we 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; default to no-oversubscribe.
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
<span class="quotelev2">&gt;&gt; (process 3) thread is now running on PU logical index 1 (OS/physical index 5) 
</span><br>
<span class="quotelev2">&gt;&gt; on system frog53
</span><br>
<span class="quotelev2">&gt;&gt; (process 0) thread is now running on PU logical index 3 (OS/physical index 7) 
</span><br>
<span class="quotelev2">&gt;&gt; on system frog53
</span><br>
<span class="quotelev2">&gt;&gt; (process 1) thread is now running on PU logical index 0 (OS/physical index 4) 
</span><br>
<span class="quotelev2">&gt;&gt; on system frog53
</span><br>
<span class="quotelev2">&gt;&gt; (process 2) thread is now running on PU logical index 2 (OS/physical index 6) 
</span><br>
<span class="quotelev2">&gt;&gt; on system frog53
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; # mpirun -np 5 --hostfile $OAR_NODEFILE -bind-to core location.exe
</span><br>
<span class="quotelev2">&gt;&gt; oversuscribe with:
</span><br>
<span class="quotelev2">&gt;&gt; (process 0) thread is now running on PU logical index 3 (OS/physical index 7) 
</span><br>
<span class="quotelev2">&gt;&gt; on system frog53
</span><br>
<span class="quotelev2">&gt;&gt; (process 1) thread is now running on PU logical index 1 (OS/physical index 5) 
</span><br>
<span class="quotelev2">&gt;&gt; on system frog53
</span><br>
<span class="quotelev2">&gt;&gt; (*process 3*) thread is now running on PU logical index*2 (OS/physical index 
</span><br>
<span class="quotelev2">&gt;&gt; 6)*on system frog53
</span><br>
<span class="quotelev2">&gt;&gt; (process 4) thread is now running on PU logical index 0 (OS/physical index 4) 
</span><br>
<span class="quotelev2">&gt;&gt; on system frog53
</span><br>
<span class="quotelev2">&gt;&gt; (*process 2*) thread is now running on PU logical index*2 (OS/physical index 
</span><br>
<span class="quotelev2">&gt;&gt; 6)*on system frog53
</span><br>
<span class="quotelev2">&gt;&gt; This is not allowed with OpenMPI 1.7.3
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I can increase until the maximul core number of this first pocessor (8 cores)
</span><br>
<span class="quotelev2">&gt;&gt; # mpirun -np 8 --hostfile $OAR_NODEFILE -bind-to core location.exe |grep 
</span><br>
<span class="quotelev2">&gt;&gt; 'thread is now running on PU'
</span><br>
<span class="quotelev2">&gt;&gt; (process 5) thread is now running on PU logical index 1 (OS/physical index 5) 
</span><br>
<span class="quotelev2">&gt;&gt; on system frog53
</span><br>
<span class="quotelev2">&gt;&gt; (process 7) thread is now running on PU logical index 3 (OS/physical index 7) 
</span><br>
<span class="quotelev2">&gt;&gt; on system frog53
</span><br>
<span class="quotelev2">&gt;&gt; (process 4) thread is now running on PU logical index 0 (OS/physical index 4) 
</span><br>
<span class="quotelev2">&gt;&gt; on system frog53
</span><br>
<span class="quotelev2">&gt;&gt; (process 6) thread is now running on PU logical index 2 (OS/physical index 6) 
</span><br>
<span class="quotelev2">&gt;&gt; on system frog53
</span><br>
<span class="quotelev2">&gt;&gt; (process 2) thread is now running on PU logical index 1 (OS/physical index 5) 
</span><br>
<span class="quotelev2">&gt;&gt; on system frog53
</span><br>
<span class="quotelev2">&gt;&gt; (process 0) thread is now running on PU logical index 2 (OS/physical index 6) 
</span><br>
<span class="quotelev2">&gt;&gt; on system frog53
</span><br>
<span class="quotelev2">&gt;&gt; (process 1) thread is now running on PU logical index 0 (OS/physical index 4) 
</span><br>
<span class="quotelev2">&gt;&gt; on system frog53
</span><br>
<span class="quotelev2">&gt;&gt; (process 3) thread is now running on PU logical index 0 (OS/physical index 4) 
</span><br>
<span class="quotelev2">&gt;&gt; on system frog53
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; But I cannot overload more than the 8 cores (max core number of one cpu).
</span><br>
<span class="quotelev2">&gt;&gt; #mpirun -np 9 --hostfile $OAR_NODEFILE -bind-to core location.exe
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
<span class="quotelev2">&gt;&gt; Now if I add*--nooversubscribe*the problem doesn't exist anymore (no more 
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
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; If you provide a hostfile that doesn't specify slots, then we use the number 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; of cores we find on each node, and we allow oversubscription.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; What is being described sounds like more of a bug than an intended feature. 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I'd need to know more about it, though, to be sure. Can you tell me how you 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; are specifying this cpuset?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Sep 15, 2015, at 4:44 PM, Matt Thompson &lt;fortran_at_[hidden] 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &lt;mailto:fortran_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Looking at the Open MPI 1.10.0 man page:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="https://www.open-mpi.org/doc/v1.10/man1/mpirun.1.php">https://www.open-mpi.org/doc/v1.10/man1/mpirun.1.php</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; it looks like perhaps -oversubscribe (which was an option) is now the 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; default behavior. Instead we have:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; *-nooversubscribe, --nooversubscribe*
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     Do not oversubscribe any nodes; error (without starting any processes)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     if the requested number of processes would cause oversubscription. This
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     option implicitly sets &quot;max_slots&quot; equal to the &quot;slots&quot; value for each
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     node.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; It also looks like -map-by has a way to implement it as well (see man page).
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Thanks for letting me/us know about this. On a system of mine I sort of 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; depend on the -nooversubscribe behavior!
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Matt
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Tue, Sep 15, 2015 at 11:17 AM, Patrick 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Begou&lt;Patrick.Begou_at_[hidden] 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &lt;mailto:Patrick.Begou_at_[hidden]&gt;&gt;wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     Hi,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     I'm runing OpenMPI 1.10.0 built with Intel 2015 compilers on a Bullx
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     System.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     I've some troubles with the bind-to core option when using cpuset.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     If the cpuset is less than all the cores of a cpu (ex: 4 cores allowed
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     on a 8 cores cpus) OpenMPI 1.10.0 allows to overload these cores until
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     the maximum number of cores of the cpu.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     With this config and because the cpuset only allows 4 cores, I can
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     reach 2 processes/core if I use:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     mpirun -np 8 --bind-to core my_application
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     OpenMPI 1.7.3 doesn't show the problem with the same situation:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     mpirun -np 8 --bind-to-core my_application
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     returns:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     /A request was made to bind to that would result in binding more//
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     //processes than cpus on a resource/
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     and that's okay of course.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     Is there a way to avoid this oveloading with OpenMPI 1.10.0 ?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     Thanks
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     Patrick
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     -- 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     ===================================================================
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     |  Equipe M.O.S.T.         |                                      |
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     |  Patrick BEGOU           |mailto:Patrick.Begou_at_[hidden]  |
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     |  LEGI                    |                                      |
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     |  BP 53 X                 | Tel 04 76 82 51 35                   |
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     |  38041 GRENOBLE CEDEX    | Fax 04 76 82 52 71                   |
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     ===================================================================
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     Subscription:<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     Link to this
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     post:<a href="http://www.open-mpi.org/community/lists/users/2015/09/27575.php">http://www.open-mpi.org/community/lists/users/2015/09/27575.php</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Matt Thompson
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     Man Among Men
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     Fulcrum of History
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Subscription:<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Link to this 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; post:<a href="http://www.open-mpi.org/community/lists/users/2015/09/27579.php">http://www.open-mpi.org/community/lists/users/2015/09/27579.php</a>
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
<span class="quotelev3">&gt;&gt;&gt; Subscription:<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Link to this post:<a href="http://www.open-mpi.org/community/lists/users/2015/09/27580.php">http://www.open-mpi.org/community/lists/users/2015/09/27580.php</a>
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
<span class="quotelev2">&gt;&gt; |  Patrick BEGOU           |mailto:Patrick.Begou_at_[hidden]  |
</span><br>
<span class="quotelev2">&gt;&gt; |  LEGI                    |                                      |
</span><br>
<span class="quotelev2">&gt;&gt; |  BP 53 X                 | Tel 04 76 82 51 35                   |
</span><br>
<span class="quotelev2">&gt;&gt; |  38041 GRENOBLE CEDEX    | Fax 04 76 82 52 71                   |
</span><br>
<span class="quotelev2">&gt;&gt; ===================================================================
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Subscription:<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post:<a href="http://www.open-mpi.org/community/lists/users/2015/09/27583.php">http://www.open-mpi.org/community/lists/users/2015/09/27583.php</a>
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/09/27590.php">http://www.open-mpi.org/community/lists/users/2015/09/27590.php</a>
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-27619/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27620.php">Gilles Gouaillardet: "Re: [OMPI users] OpenMPI-1.10.0 bind-to core error"</a>
<li><strong>Previous message:</strong> <a href="27618.php">Ralph Castain: "Re: [OMPI users] C/R Enabled Debugging"</a>
<li><strong>In reply to:</strong> <a href="27590.php">Ralph Castain: "Re: [OMPI users] OpenMPI-1.10.0 bind-to core error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27620.php">Gilles Gouaillardet: "Re: [OMPI users] OpenMPI-1.10.0 bind-to core error"</a>
<li><strong>Reply:</strong> <a href="27620.php">Gilles Gouaillardet: "Re: [OMPI users] OpenMPI-1.10.0 bind-to core error"</a>
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

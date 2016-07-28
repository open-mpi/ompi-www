<?
$subject_val = "Re: [OMPI users] OpenMPI-1.10.0 bind-to core error";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Sep 17 06:54:09 2015" -->
<!-- isoreceived="20150917105409" -->
<!-- sent="Thu, 17 Sep 2015 03:54:05 -0700" -->
<!-- isosent="20150917105405" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI-1.10.0 bind-to core error" -->
<!-- id="CAMD57oe6XoThGPxcqa3SW32oR4EdBesRcMXQv3hAcs9Z-A33JQ_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="55FA3FE0.8010105_at_rist.or.jp" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-09-17 06:54:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27607.php">Joel Hermanns: "[OMPI users] Problem with using MPI in a Python extension"</a>
<li><strong>Previous message:</strong> <a href="27605.php">Thomas Jahns: "Re: [OMPI users] open mpi gcc"</a>
<li><strong>In reply to:</strong> <a href="27604.php">Gilles Gouaillardet: "Re: [OMPI users] OpenMPI-1.10.0 bind-to core error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27619.php">Patrick Begou: "Re: [OMPI users] OpenMPI-1.10.0 bind-to core error"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks Gilles!!
<br>
<p><p>On Wed, Sep 16, 2015 at 9:21 PM, Gilles Gouaillardet &lt;gilles_at_[hidden]&gt;
<br>
wrote:
<br>
<p><span class="quotelev1">&gt; Ralph,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; you can reproduce this with master by manually creating a cpuset with less
</span><br>
<span class="quotelev1">&gt; cores than available,
</span><br>
<span class="quotelev1">&gt; and invoke mpirun with -bind-to core from within the cpuset.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; i made PR 904 <a href="https://github.com/open-mpi/ompi/pull/904">https://github.com/open-mpi/ompi/pull/904</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Brice,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; can you please double check the hwloc_bitmap_isincluded invokation is
</span><br>
<span class="quotelev1">&gt; correct ?
</span><br>
<span class="quotelev1">&gt; an other way to fix this could be to always set opal_hwloc_base_cpu_set
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 9/16/2015 11:47 PM, Ralph Castain wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; As I said, if you don&#226;&#128;&#153;t provide an explicit slot count in your hostfile,
</span><br>
<span class="quotelev1">&gt; we default to allowing oversubscription. We don&#226;&#128;&#153;t have OAR integration in
</span><br>
<span class="quotelev1">&gt; OMPI, and so mpirun isn&#226;&#128;&#153;t recognizing that you are running under a resource
</span><br>
<span class="quotelev1">&gt; manager - it thinks this is just being controlled by a hostfile.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If you want us to error out on oversubscription, you can either add the
</span><br>
<span class="quotelev1">&gt; flag you identified, or simply change your hostfile to:
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Sep 16, 2015, at 1:00 AM, Patrick Begou &lt;
</span><br>
<span class="quotelev1">&gt; Patrick.Begou_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks all for your answers, I've added some details about the tests I
</span><br>
<span class="quotelev1">&gt; have run.  See below.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ralph Castain wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Not precisely correct. It depends on the environment.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If there is a resource manager allocating nodes, or you provide a hostfile
</span><br>
<span class="quotelev1">&gt; that specifies the number of slots on the nodes, or you use -host, then we
</span><br>
<span class="quotelev1">&gt; default to no-oversubscribe.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm using a batch scheduler (OAR).
</span><br>
<span class="quotelev1">&gt; # cat /dev/cpuset/oar/begou_7955553/cpuset.cpus
</span><br>
<span class="quotelev1">&gt; 4-7
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So 4 cores allowed. Nodes have two height cores cpus.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Node file contains:
</span><br>
<span class="quotelev1">&gt; # cat $OAR_NODEFILE
</span><br>
<span class="quotelev1">&gt; frog53
</span><br>
<span class="quotelev1">&gt; frog53
</span><br>
<span class="quotelev1">&gt; frog53
</span><br>
<span class="quotelev1">&gt; frog53
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; # mpirun --hostfile $OAR_NODEFILE -bind-to core location.exe
</span><br>
<span class="quotelev1">&gt; is  okay (my test code show one process on each core)
</span><br>
<span class="quotelev1">&gt; (process 3) thread is now running on PU logical index 1 (OS/physical index
</span><br>
<span class="quotelev1">&gt; 5) on system frog53
</span><br>
<span class="quotelev1">&gt; (process 0) thread is now running on PU logical index 3 (OS/physical index
</span><br>
<span class="quotelev1">&gt; 7) on system frog53
</span><br>
<span class="quotelev1">&gt; (process 1) thread is now running on PU logical index 0 (OS/physical index
</span><br>
<span class="quotelev1">&gt; 4) on system frog53
</span><br>
<span class="quotelev1">&gt; (process 2) thread is now running on PU logical index 2 (OS/physical index
</span><br>
<span class="quotelev1">&gt; 6) on system frog53
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; # mpirun -np 5 --hostfile $OAR_NODEFILE -bind-to core location.exe
</span><br>
<span class="quotelev1">&gt; oversuscribe with:
</span><br>
<span class="quotelev1">&gt; (process 0) thread is now running on PU logical index 3 (OS/physical index
</span><br>
<span class="quotelev1">&gt; 7) on system frog53
</span><br>
<span class="quotelev1">&gt; (process 1) thread is now running on PU logical index 1 (OS/physical index
</span><br>
<span class="quotelev1">&gt; 5) on system frog53
</span><br>
<span class="quotelev1">&gt; (*process 3*) thread is now running on PU logical index *2 (OS/physical
</span><br>
<span class="quotelev1">&gt; index 6)* on system frog53
</span><br>
<span class="quotelev1">&gt; (process 4) thread is now running on PU logical index 0 (OS/physical index
</span><br>
<span class="quotelev1">&gt; 4) on system frog53
</span><br>
<span class="quotelev1">&gt; (*process 2*) thread is now running on PU logical index *2 (OS/physical
</span><br>
<span class="quotelev1">&gt; index 6)* on system frog53
</span><br>
<span class="quotelev1">&gt; This is not allowed with OpenMPI 1.7.3
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I can increase until the maximul core number of this first pocessor (8
</span><br>
<span class="quotelev1">&gt; cores)
</span><br>
<span class="quotelev1">&gt; # mpirun -np 8 --hostfile $OAR_NODEFILE -bind-to core location.exe |grep
</span><br>
<span class="quotelev1">&gt; 'thread is now running on PU'
</span><br>
<span class="quotelev1">&gt; (process 5) thread is now running on PU logical index 1 (OS/physical index
</span><br>
<span class="quotelev1">&gt; 5) on system frog53
</span><br>
<span class="quotelev1">&gt; (process 7) thread is now running on PU logical index 3 (OS/physical index
</span><br>
<span class="quotelev1">&gt; 7) on system frog53
</span><br>
<span class="quotelev1">&gt; (process 4) thread is now running on PU logical index 0 (OS/physical index
</span><br>
<span class="quotelev1">&gt; 4) on system frog53
</span><br>
<span class="quotelev1">&gt; (process 6) thread is now running on PU logical index 2 (OS/physical index
</span><br>
<span class="quotelev1">&gt; 6) on system frog53
</span><br>
<span class="quotelev1">&gt; (process 2) thread is now running on PU logical index 1 (OS/physical index
</span><br>
<span class="quotelev1">&gt; 5) on system frog53
</span><br>
<span class="quotelev1">&gt; (process 0) thread is now running on PU logical index 2 (OS/physical index
</span><br>
<span class="quotelev1">&gt; 6) on system frog53
</span><br>
<span class="quotelev1">&gt; (process 1) thread is now running on PU logical index 0 (OS/physical index
</span><br>
<span class="quotelev1">&gt; 4) on system frog53
</span><br>
<span class="quotelev1">&gt; (process 3) thread is now running on PU logical index 0 (OS/physical index
</span><br>
<span class="quotelev1">&gt; 4) on system frog53
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; But I cannot overload more than the 8 cores (max core number of one cpu).
</span><br>
<span class="quotelev1">&gt; # mpirun -np 9 --hostfile $OAR_NODEFILE -bind-to core location.exe
</span><br>
<span class="quotelev1">&gt; A request was made to bind to that would result in binding more
</span><br>
<span class="quotelev1">&gt; processes than cpus on a resource:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    Bind to:     CORE
</span><br>
<span class="quotelev1">&gt;    Node:        frog53
</span><br>
<span class="quotelev1">&gt;    #processes:  2
</span><br>
<span class="quotelev1">&gt;    #cpus:       1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; You can override this protection by adding the &quot;overload-allowed&quot;
</span><br>
<span class="quotelev1">&gt; option to your binding directive.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Now if I add *--nooversubscribe* the problem doesn't exist anymore (no
</span><br>
<span class="quotelev1">&gt; more than 4 processes, one on each core). So looks like if default behavior
</span><br>
<span class="quotelev1">&gt; would be a nooversuscribe on cores number of the socket ???
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Again, with 1.7.3 this problem doesn't occur at all.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Patrick
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If you provide a hostfile that doesn&#226;&#128;&#153;t specify slots, then we use the
</span><br>
<span class="quotelev1">&gt; number of cores we find on each node, and we allow oversubscription.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; What is being described sounds like more of a bug than an intended
</span><br>
<span class="quotelev1">&gt; feature. I&#226;&#128;&#153;d need to know more about it, though, to be sure. Can you tell
</span><br>
<span class="quotelev1">&gt; me how you are specifying this cpuset?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Sep 15, 2015, at 4:44 PM, Matt Thompson &lt;fortran_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Looking at the Open MPI 1.10.0 man page:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    &lt;<a href="https://www.open-mpi.org/doc/v1.10/man1/mpirun.1.php">https://www.open-mpi.org/doc/v1.10/man1/mpirun.1.php</a>&gt;
</span><br>
<span class="quotelev1">&gt; <a href="https://www.open-mpi.org/doc/v1.10/man1/mpirun.1.php">https://www.open-mpi.org/doc/v1.10/man1/mpirun.1.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; it looks like perhaps -oversubscribe (which was an option) is now the
</span><br>
<span class="quotelev1">&gt; default behavior. Instead we have:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *-nooversubscribe, --nooversubscribe* Do not oversubscribe any nodes;
</span><br>
<span class="quotelev1">&gt; error (without starting any processes) if the requested number of processes
</span><br>
<span class="quotelev1">&gt; would cause oversubscription. This option implicitly sets &quot;max_slots&quot; equal
</span><br>
<span class="quotelev1">&gt; to the &quot;slots&quot; value for each node.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It also looks like -map-by has a way to implement it as well (see man
</span><br>
<span class="quotelev1">&gt; page).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks for letting me/us know about this. On a system of mine I sort of
</span><br>
<span class="quotelev1">&gt; depend on the -nooversubscribe behavior!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Matt
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Tue, Sep 15, 2015 at 11:17 AM, Patrick Begou &lt;
</span><br>
<span class="quotelev1">&gt; &lt;Patrick.Begou_at_[hidden]&gt;Patrick.Begou_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I'm runing OpenMPI 1.10.0 built with Intel 2015 compilers on a Bullx
</span><br>
<span class="quotelev2">&gt;&gt; System.
</span><br>
<span class="quotelev2">&gt;&gt; I've some troubles with the bind-to core option when using cpuset.
</span><br>
<span class="quotelev2">&gt;&gt; If the cpuset is less than all the cores of a cpu (ex: 4 cores allowed on
</span><br>
<span class="quotelev2">&gt;&gt; a 8 cores cpus) OpenMPI 1.10.0 allows to overload these cores  until the
</span><br>
<span class="quotelev2">&gt;&gt; maximum number of cores of the cpu.
</span><br>
<span class="quotelev2">&gt;&gt; With this config and because the cpuset only allows 4 cores, I can reach
</span><br>
<span class="quotelev2">&gt;&gt; 2 processes/core if I use:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; mpirun -np 8 --bind-to core my_application
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; OpenMPI 1.7.3 doesn't show the problem with the same situation:
</span><br>
<span class="quotelev2">&gt;&gt; mpirun -np 8 --bind-to-core my_application
</span><br>
<span class="quotelev2">&gt;&gt; returns:
</span><br>
<span class="quotelev2">&gt;&gt; *A request was made to bind to that would result in binding more*
</span><br>
<span class="quotelev2">&gt;&gt; *processes than cpus on a resource*
</span><br>
<span class="quotelev2">&gt;&gt; and that's okay of course.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Is there a way to avoid this oveloading with OpenMPI 1.10.0 ?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Patrick
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; ===================================================================
</span><br>
<span class="quotelev2">&gt;&gt; |  Equipe M.O.S.T.         |                                      |
</span><br>
<span class="quotelev2">&gt;&gt; |  Patrick BEGOU           | mailto:Patrick.Begou_at_[hidden] &lt;Patrick.Begou_at_[hidden]&gt; |
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
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription:  &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt; &lt;<a href="http://www.open-mpi.org/community/lists/users/2015/09/27575.php">http://www.open-mpi.org/community/lists/users/2015/09/27575.php</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/09/27575.php">http://www.open-mpi.org/community/lists/users/2015/09/27575.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Matt Thompson
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Man Among Men
</span><br>
<span class="quotelev1">&gt; Fulcrum of History
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription:  &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>&gt;
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; &lt;<a href="http://www.open-mpi.org/community/lists/users/2015/09/27579.php">http://www.open-mpi.org/community/lists/users/2015/09/27579.php</a>&gt;
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/09/27579.php">http://www.open-mpi.org/community/lists/users/2015/09/27579.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing listusers_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/09/27580.php">http://www.open-mpi.org/community/lists/users/2015/09/27580.php</a>
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
<span class="quotelev1">&gt; |  Patrick BEGOU           | mailto:Patrick.Begou_at_[hidden] &lt;Patrick.Begou_at_[hidden]&gt; |
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
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription:  &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>&gt;
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; &lt;<a href="http://www.open-mpi.org/community/lists/users/2015/09/27583.php">http://www.open-mpi.org/community/lists/users/2015/09/27583.php</a>&gt;
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/09/27583.php">http://www.open-mpi.org/community/lists/users/2015/09/27583.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing listusers_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/09/27590.php">http://www.open-mpi.org/community/lists/users/2015/09/27590.php</a>
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/09/27604.php">http://www.open-mpi.org/community/lists/users/2015/09/27604.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-27606/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27607.php">Joel Hermanns: "[OMPI users] Problem with using MPI in a Python extension"</a>
<li><strong>Previous message:</strong> <a href="27605.php">Thomas Jahns: "Re: [OMPI users] open mpi gcc"</a>
<li><strong>In reply to:</strong> <a href="27604.php">Gilles Gouaillardet: "Re: [OMPI users] OpenMPI-1.10.0 bind-to core error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27619.php">Patrick Begou: "Re: [OMPI users] OpenMPI-1.10.0 bind-to core error"</a>
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

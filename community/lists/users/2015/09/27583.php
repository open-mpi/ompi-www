<?
$subject_val = "Re: [OMPI users] OpenMPI-1.10.0 bind-to core error";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Sep 16 04:00:20 2015" -->
<!-- isoreceived="20150916080020" -->
<!-- sent="Wed, 16 Sep 2015 10:00:06 +0200" -->
<!-- isosent="20150916080006" -->
<!-- name="Patrick Begou" -->
<!-- email="Patrick.Begou_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI-1.10.0 bind-to core error" -->
<!-- id="55F92186.1030506_at_legi.grenoble-inp.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="F8BCA201-FD6F-4F61-B4A1-326DBFFBDC8A_at_open-mpi.org" -->
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
<strong>Date:</strong> 2015-09-16 04:00:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27584.php">marcin.krotkiewski: "Re: [OMPI users] runtime MCA parameters"</a>
<li><strong>Previous message:</strong> <a href="27582.php">Ralph Castain: "Re: [OMPI users] OpenMPI-1.10.0 bind-to core error"</a>
<li><strong>In reply to:</strong> <a href="27580.php">Ralph Castain: "Re: [OMPI users] OpenMPI-1.10.0 bind-to core error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27590.php">Ralph Castain: "Re: [OMPI users] OpenMPI-1.10.0 bind-to core error"</a>
<li><strong>Reply:</strong> <a href="27590.php">Ralph Castain: "Re: [OMPI users] OpenMPI-1.10.0 bind-to core error"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks all for your answers, I've added some details about the tests I have 
<br>
run.  See below.
<br>
<p><p>Ralph Castain wrote:
<br>
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
I'm using a batch scheduler (OAR).
<br>
# cat /dev/cpuset/oar/begou_7955553/cpuset.cpus
<br>
4-7
<br>
<p>So 4 cores allowed. Nodes have two height cores cpus.
<br>
<p>Node file contains:
<br>
# cat $OAR_NODEFILE
<br>
frog53
<br>
frog53
<br>
frog53
<br>
frog53
<br>
<p># mpirun --hostfile $OAR_NODEFILE -bind-to core location.exe
<br>
is  okay (my test code show one process on each core)
<br>
(process 3) thread is now running on PU logical index 1 (OS/physical index 5) on 
<br>
system frog53
<br>
(process 0) thread is now running on PU logical index 3 (OS/physical index 7) on 
<br>
system frog53
<br>
(process 1) thread is now running on PU logical index 0 (OS/physical index 4) on 
<br>
system frog53
<br>
(process 2) thread is now running on PU logical index 2 (OS/physical index 6) on 
<br>
system frog53
<br>
<p># mpirun -np 5 --hostfile $OAR_NODEFILE -bind-to core location.exe
<br>
oversuscribe with:
<br>
(process 0) thread is now running on PU logical index 3 (OS/physical index 7) on 
<br>
system frog53
<br>
(process 1) thread is now running on PU logical index 1 (OS/physical index 5) on 
<br>
system frog53
<br>
(*process 3*) thread is now running on PU logical index *2 (OS/physical index 
<br>
6)* on system frog53
<br>
(process 4) thread is now running on PU logical index 0 (OS/physical index 4) on 
<br>
system frog53
<br>
(*process 2*) thread is now running on PU logical index *2 (OS/physical index 
<br>
6)* on system frog53
<br>
This is not allowed with OpenMPI 1.7.3
<br>
<p>I can increase until the maximul core number of this first pocessor (8 cores)
<br>
# mpirun -np 8 --hostfile $OAR_NODEFILE -bind-to core location.exe |grep 'thread 
<br>
is now running on PU'
<br>
(process 5) thread is now running on PU logical index 1 (OS/physical index 5) on 
<br>
system frog53
<br>
(process 7) thread is now running on PU logical index 3 (OS/physical index 7) on 
<br>
system frog53
<br>
(process 4) thread is now running on PU logical index 0 (OS/physical index 4) on 
<br>
system frog53
<br>
(process 6) thread is now running on PU logical index 2 (OS/physical index 6) on 
<br>
system frog53
<br>
(process 2) thread is now running on PU logical index 1 (OS/physical index 5) on 
<br>
system frog53
<br>
(process 0) thread is now running on PU logical index 2 (OS/physical index 6) on 
<br>
system frog53
<br>
(process 1) thread is now running on PU logical index 0 (OS/physical index 4) on 
<br>
system frog53
<br>
(process 3) thread is now running on PU logical index 0 (OS/physical index 4) on 
<br>
system frog53
<br>
<p>But I cannot overload more than the 8 cores (max core number of one cpu).
<br>
# mpirun -np 9 --hostfile $OAR_NODEFILE -bind-to core location.exe
<br>
A request was made to bind to that would result in binding more
<br>
processes than cpus on a resource:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;Bind to:     CORE
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Node:        frog53
<br>
&nbsp;&nbsp;&nbsp;&nbsp;#processes:  2
<br>
&nbsp;&nbsp;&nbsp;&nbsp;#cpus:       1
<br>
<p>You can override this protection by adding the &quot;overload-allowed&quot;
<br>
option to your binding directive.
<br>
<p>Now if I add *--nooversubscribe* the problem doesn't exist anymore (no more than 
<br>
4 processes, one on each core). So looks like if default behavior would be a 
<br>
nooversuscribe on cores number of the socket ???
<br>
<p>Again, with 1.7.3 this problem doesn't occur at all.
<br>
<p>Patrick
<br>
<p><p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If you provide a hostfile that doesn't specify slots, then we use the number 
</span><br>
<span class="quotelev1">&gt; of cores we find on each node, and we allow oversubscription.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; What is being described sounds like more of a bug than an intended feature. 
</span><br>
<span class="quotelev1">&gt; I'd need to know more about it, though, to be sure. Can you tell me how you 
</span><br>
<span class="quotelev1">&gt; are specifying this cpuset?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Sep 15, 2015, at 4:44 PM, Matt Thompson &lt;fortran_at_[hidden] 
</span><br>
<span class="quotelev2">&gt;&gt; &lt;mailto:fortran_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Looking at the Open MPI 1.10.0 man page:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; <a href="https://www.open-mpi.org/doc/v1.10/man1/mpirun.1.php">https://www.open-mpi.org/doc/v1.10/man1/mpirun.1.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; it looks like perhaps -oversubscribe (which was an option) is now the default 
</span><br>
<span class="quotelev2">&gt;&gt; behavior. Instead we have:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; *-nooversubscribe, --nooversubscribe*
</span><br>
<span class="quotelev2">&gt;&gt;     Do not oversubscribe any nodes; error (without starting any processes) if
</span><br>
<span class="quotelev2">&gt;&gt;     the requested number of processes would cause oversubscription. This
</span><br>
<span class="quotelev2">&gt;&gt;     option implicitly sets &quot;max_slots&quot; equal to the &quot;slots&quot; value for each node.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; It also looks like -map-by has a way to implement it as well (see man page).
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
<span class="quotelev2">&gt;&gt; On Tue, Sep 15, 2015 at 11:17 AM, Patrick Begou 
</span><br>
<span class="quotelev2">&gt;&gt; &lt;Patrick.Begou_at_[hidden] 
</span><br>
<span class="quotelev2">&gt;&gt; &lt;mailto:Patrick.Begou_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     Hi,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     I'm runing OpenMPI 1.10.0 built with Intel 2015 compilers on a Bullx System.
</span><br>
<span class="quotelev2">&gt;&gt;     I've some troubles with the bind-to core option when using cpuset.
</span><br>
<span class="quotelev2">&gt;&gt;     If the cpuset is less than all the cores of a cpu (ex: 4 cores allowed on
</span><br>
<span class="quotelev2">&gt;&gt;     a 8 cores cpus) OpenMPI 1.10.0 allows to overload these cores until the
</span><br>
<span class="quotelev2">&gt;&gt;     maximum number of cores of the cpu.
</span><br>
<span class="quotelev2">&gt;&gt;     With this config and because the cpuset only allows 4 cores, I can reach
</span><br>
<span class="quotelev2">&gt;&gt;     2 processes/core if I use:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     mpirun -np 8 --bind-to core my_application
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     OpenMPI 1.7.3 doesn't show the problem with the same situation:
</span><br>
<span class="quotelev2">&gt;&gt;     mpirun -np 8 --bind-to-core my_application
</span><br>
<span class="quotelev2">&gt;&gt;     returns:
</span><br>
<span class="quotelev2">&gt;&gt;     /A request was made to bind to that would result in binding more//
</span><br>
<span class="quotelev2">&gt;&gt;     //processes than cpus on a resource/
</span><br>
<span class="quotelev2">&gt;&gt;     and that's okay of course.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     Is there a way to avoid this oveloading with OpenMPI 1.10.0 ?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     Thanks
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     Patrick
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     -- 
</span><br>
<span class="quotelev2">&gt;&gt;     ===================================================================
</span><br>
<span class="quotelev2">&gt;&gt;     |  Equipe M.O.S.T.         |                                      |
</span><br>
<span class="quotelev2">&gt;&gt;     |  Patrick BEGOU           |mailto:Patrick.Begou_at_[hidden]  |
</span><br>
<span class="quotelev2">&gt;&gt;     |  LEGI                    |                                      |
</span><br>
<span class="quotelev2">&gt;&gt;     |  BP 53 X                 | Tel 04 76 82 51 35                   |
</span><br>
<span class="quotelev2">&gt;&gt;     |  38041 GRENOBLE CEDEX    | Fax 04 76 82 52 71                   |
</span><br>
<span class="quotelev2">&gt;&gt;     ===================================================================
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;     users mailing list
</span><br>
<span class="quotelev2">&gt;&gt;     users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;     Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt;     <a href="http://www.open-mpi.org/community/lists/users/2015/09/27575.php">http://www.open-mpi.org/community/lists/users/2015/09/27575.php</a>
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
<span class="quotelev2">&gt;&gt;     Man Among Men
</span><br>
<span class="quotelev2">&gt;&gt;     Fulcrum of History
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: 
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/09/27579.php">http://www.open-mpi.org/community/lists/users/2015/09/27579.php</a>
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/09/27580.php">http://www.open-mpi.org/community/lists/users/2015/09/27580.php</a>
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-27583/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27584.php">marcin.krotkiewski: "Re: [OMPI users] runtime MCA parameters"</a>
<li><strong>Previous message:</strong> <a href="27582.php">Ralph Castain: "Re: [OMPI users] OpenMPI-1.10.0 bind-to core error"</a>
<li><strong>In reply to:</strong> <a href="27580.php">Ralph Castain: "Re: [OMPI users] OpenMPI-1.10.0 bind-to core error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27590.php">Ralph Castain: "Re: [OMPI users] OpenMPI-1.10.0 bind-to core error"</a>
<li><strong>Reply:</strong> <a href="27590.php">Ralph Castain: "Re: [OMPI users] OpenMPI-1.10.0 bind-to core error"</a>
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

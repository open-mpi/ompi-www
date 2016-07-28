<?
$subject_val = "Re: [OMPI users] OpenMPI-1.10.0 bind-to core error";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Sep 15 20:10:59 2015" -->
<!-- isoreceived="20150916001059" -->
<!-- sent="Tue, 15 Sep 2015 17:10:55 -0700" -->
<!-- isosent="20150916001055" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI-1.10.0 bind-to core error" -->
<!-- id="F8BCA201-FD6F-4F61-B4A1-326DBFFBDC8A_at_open-mpi.org" -->
<!-- charset="utf-8" -->
<!-- inreplyto="CAFb48S_9zn8crmg3QS4TtbPOZEjNSoRdtvRB5qKrDjGGujacMQ_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2015-09-15 20:10:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27581.php">Gilles Gouaillardet: "Re: [OMPI users] OpenMPI-1.10.0 bind-to core error"</a>
<li><strong>Previous message:</strong> <a href="27579.php">Matt Thompson: "Re: [OMPI users] OpenMPI-1.10.0 bind-to core error"</a>
<li><strong>In reply to:</strong> <a href="27579.php">Matt Thompson: "Re: [OMPI users] OpenMPI-1.10.0 bind-to core error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27581.php">Gilles Gouaillardet: "Re: [OMPI users] OpenMPI-1.10.0 bind-to core error"</a>
<li><strong>Reply:</strong> <a href="27581.php">Gilles Gouaillardet: "Re: [OMPI users] OpenMPI-1.10.0 bind-to core error"</a>
<li><strong>Reply:</strong> <a href="27583.php">Patrick Begou: "Re: [OMPI users] OpenMPI-1.10.0 bind-to core error"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Not precisely correct. It depends on the environment.
<br>
<p>If there is a resource manager allocating nodes, or you provide a hostfile that specifies the number of slots on the nodes, or you use -host, then we default to no-oversubscribe.
<br>
<p>If you provide a hostfile that doesn&#226;&#128;&#153;t specify slots, then we use the number of cores we find on each node, and we allow oversubscription.
<br>
<p>What is being described sounds like more of a bug than an intended feature. I&#226;&#128;&#153;d need to know more about it, though, to be sure. Can you tell me how you are specifying this cpuset?
<br>
<p><p><span class="quotelev1">&gt; On Sep 15, 2015, at 4:44 PM, Matt Thompson &lt;fortran_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Looking at the Open MPI 1.10.0 man page:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   <a href="https://www.open-mpi.org/doc/v1.10/man1/mpirun.1.php">https://www.open-mpi.org/doc/v1.10/man1/mpirun.1.php</a> &lt;<a href="https://www.open-mpi.org/doc/v1.10/man1/mpirun.1.php">https://www.open-mpi.org/doc/v1.10/man1/mpirun.1.php</a>&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; it looks like perhaps -oversubscribe (which was an option) is now the default behavior. Instead we have:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -nooversubscribe, --nooversubscribe
</span><br>
<span class="quotelev1">&gt; Do not oversubscribe any nodes; error (without starting any processes) if the requested number of processes would cause oversubscription. This option implicitly sets &quot;max_slots&quot; equal to the &quot;slots&quot; value for each node.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It also looks like -map-by has a way to implement it as well (see man page).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks for letting me/us know about this. On a system of mine I sort of depend on the -nooversubscribe behavior!
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
<span class="quotelev1">&gt; On Tue, Sep 15, 2015 at 11:17 AM, Patrick Begou &lt;Patrick.Begou_at_[hidden] &lt;mailto:Patrick.Begou_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm runing OpenMPI 1.10.0 built with Intel 2015 compilers on a Bullx System.
</span><br>
<span class="quotelev1">&gt; I've some troubles with the bind-to core option when using cpuset. 
</span><br>
<span class="quotelev1">&gt; If the cpuset is less than all the cores of a cpu (ex: 4 cores allowed on a 8 cores cpus) OpenMPI 1.10.0 allows to overload these cores  until the maximum number of cores of the cpu.
</span><br>
<span class="quotelev1">&gt; With this config and because the cpuset only allows 4 cores, I can reach 2 processes/core if I use:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; mpirun -np 8 --bind-to core my_application
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; OpenMPI 1.7.3 doesn't show the problem with the same situation:
</span><br>
<span class="quotelev1">&gt; mpirun -np 8 --bind-to-core my_application
</span><br>
<span class="quotelev1">&gt; returns:
</span><br>
<span class="quotelev1">&gt; A request was made to bind to that would result in binding more
</span><br>
<span class="quotelev1">&gt; processes than cpus on a resource
</span><br>
<span class="quotelev1">&gt; and that's okay of course.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Is there a way to avoid this oveloading with OpenMPI 1.10.0 ?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Patrick
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; ===================================================================
</span><br>
<span class="quotelev1">&gt; |  Equipe M.O.S.T.         |                                      |
</span><br>
<span class="quotelev1">&gt; |  Patrick BEGOU           | mailto:Patrick.Begou_at_[hidden] &lt;mailto:Patrick.Begou_at_[hidden]&gt; |
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
<span class="quotelev1">&gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a> &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>&gt;
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/09/27575.php">http://www.open-mpi.org/community/lists/users/2015/09/27575.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/users/2015/09/27575.php">http://www.open-mpi.org/community/lists/users/2015/09/27575.php</a>&gt;
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
<span class="quotelev1">&gt; Man Among Men
</span><br>
<span class="quotelev1">&gt; Fulcrum of History
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/09/27579.php">http://www.open-mpi.org/community/lists/users/2015/09/27579.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-27580/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27581.php">Gilles Gouaillardet: "Re: [OMPI users] OpenMPI-1.10.0 bind-to core error"</a>
<li><strong>Previous message:</strong> <a href="27579.php">Matt Thompson: "Re: [OMPI users] OpenMPI-1.10.0 bind-to core error"</a>
<li><strong>In reply to:</strong> <a href="27579.php">Matt Thompson: "Re: [OMPI users] OpenMPI-1.10.0 bind-to core error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27581.php">Gilles Gouaillardet: "Re: [OMPI users] OpenMPI-1.10.0 bind-to core error"</a>
<li><strong>Reply:</strong> <a href="27581.php">Gilles Gouaillardet: "Re: [OMPI users] OpenMPI-1.10.0 bind-to core error"</a>
<li><strong>Reply:</strong> <a href="27583.php">Patrick Begou: "Re: [OMPI users] OpenMPI-1.10.0 bind-to core error"</a>
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

<?
$subject_val = "Re: [OMPI users] OpenMPI-1.10.0 bind-to core error";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Sep 15 19:45:16 2015" -->
<!-- isoreceived="20150915234516" -->
<!-- sent="Tue, 15 Sep 2015 19:44:46 -0400" -->
<!-- isosent="20150915234446" -->
<!-- name="Matt Thompson" -->
<!-- email="fortran_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI-1.10.0 bind-to core error" -->
<!-- id="CAFb48S_9zn8crmg3QS4TtbPOZEjNSoRdtvRB5qKrDjGGujacMQ_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="55F8367E.1050608_at_legi.grenoble-inp.fr" -->
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
<strong>From:</strong> Matt Thompson (<em>fortran_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-09-15 19:44:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27580.php">Ralph Castain: "Re: [OMPI users] OpenMPI-1.10.0 bind-to core error"</a>
<li><strong>Previous message:</strong> <a href="27578.php">Nathan Hjelm: "Re: [OMPI users] runtime MCA parameters"</a>
<li><strong>In reply to:</strong> <a href="27575.php">Patrick Begou: "[OMPI users] OpenMPI-1.10.0 bind-to core error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27580.php">Ralph Castain: "Re: [OMPI users] OpenMPI-1.10.0 bind-to core error"</a>
<li><strong>Reply:</strong> <a href="27580.php">Ralph Castain: "Re: [OMPI users] OpenMPI-1.10.0 bind-to core error"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Looking at the Open MPI 1.10.0 man page:
<br>
<p>&nbsp;&nbsp;<a href="https://www.open-mpi.org/doc/v1.10/man1/mpirun.1.php">https://www.open-mpi.org/doc/v1.10/man1/mpirun.1.php</a>
<br>
<p>it looks like perhaps -oversubscribe (which was an option) is now the
<br>
default behavior. Instead we have:
<br>
<p>*-nooversubscribe, --nooversubscribe*Do not oversubscribe any nodes; error
<br>
(without starting any processes) if the requested number of processes would
<br>
cause oversubscription. This option implicitly sets &quot;max_slots&quot; equal to
<br>
the &quot;slots&quot; value for each node.
<br>
<p>It also looks like -map-by has a way to implement it as well (see man page).
<br>
<p>Thanks for letting me/us know about this. On a system of mine I sort of
<br>
depend on the -nooversubscribe behavior!
<br>
<p>Matt
<br>
<p><p><p>On Tue, Sep 15, 2015 at 11:17 AM, Patrick Begou &lt;
<br>
Patrick.Begou_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm runing OpenMPI 1.10.0 built with Intel 2015 compilers on a Bullx
</span><br>
<span class="quotelev1">&gt; System.
</span><br>
<span class="quotelev1">&gt; I've some troubles with the bind-to core option when using cpuset.
</span><br>
<span class="quotelev1">&gt; If the cpuset is less than all the cores of a cpu (ex: 4 cores allowed on
</span><br>
<span class="quotelev1">&gt; a 8 cores cpus) OpenMPI 1.10.0 allows to overload these cores  until the
</span><br>
<span class="quotelev1">&gt; maximum number of cores of the cpu.
</span><br>
<span class="quotelev1">&gt; With this config and because the cpuset only allows 4 cores, I can reach 2
</span><br>
<span class="quotelev1">&gt; processes/core if I use:
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
<span class="quotelev1">&gt; *A request was made to bind to that would result in binding more*
</span><br>
<span class="quotelev1">&gt; *processes than cpus on a resource*
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/09/27575.php">http://www.open-mpi.org/community/lists/users/2015/09/27575.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
Matt Thompson
Man Among Men
Fulcrum of History
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-27579/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27580.php">Ralph Castain: "Re: [OMPI users] OpenMPI-1.10.0 bind-to core error"</a>
<li><strong>Previous message:</strong> <a href="27578.php">Nathan Hjelm: "Re: [OMPI users] runtime MCA parameters"</a>
<li><strong>In reply to:</strong> <a href="27575.php">Patrick Begou: "[OMPI users] OpenMPI-1.10.0 bind-to core error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27580.php">Ralph Castain: "Re: [OMPI users] OpenMPI-1.10.0 bind-to core error"</a>
<li><strong>Reply:</strong> <a href="27580.php">Ralph Castain: "Re: [OMPI users] OpenMPI-1.10.0 bind-to core error"</a>
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

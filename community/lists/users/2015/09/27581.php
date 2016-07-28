<?
$subject_val = "Re: [OMPI users] OpenMPI-1.10.0 bind-to core error";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Sep 15 22:10:50 2015" -->
<!-- isoreceived="20150916021050" -->
<!-- sent="Wed, 16 Sep 2015 11:10:49 +0900" -->
<!-- isosent="20150916021049" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles.gouaillardet_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI-1.10.0 bind-to core error" -->
<!-- id="CAAkFZ5vqnQqwBWMBAwT2G1MLOPheCzvHoByN61TVZ5D8Ddwo0Q_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
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
<strong>From:</strong> Gilles Gouaillardet (<em>gilles.gouaillardet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-09-15 22:10:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27582.php">Ralph Castain: "Re: [OMPI users] OpenMPI-1.10.0 bind-to core error"</a>
<li><strong>Previous message:</strong> <a href="27580.php">Ralph Castain: "Re: [OMPI users] OpenMPI-1.10.0 bind-to core error"</a>
<li><strong>In reply to:</strong> <a href="27580.php">Ralph Castain: "Re: [OMPI users] OpenMPI-1.10.0 bind-to core error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27582.php">Ralph Castain: "Re: [OMPI users] OpenMPI-1.10.0 bind-to core error"</a>
<li><strong>Reply:</strong> <a href="27582.php">Ralph Castain: "Re: [OMPI users] OpenMPI-1.10.0 bind-to core error"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ralph,
<br>
<p>my guess is that cupset is set by the batch manager (slurm?)
<br>
so I think this is an ompi bug/missing feature :
<br>
&quot;we&quot; should check the available cores (4 in this case because of cpuset)
<br>
instead of the online cores (8 in this case)
<br>
I wrote &quot;we&quot; because it could either be ompi or hwloc, or ompi should ask
<br>
the correct info to hwloc if it is available in hwloc.
<br>
<p>makes sense ?
<br>
<p>Brice, can you please comment on hwloc and cpuset ?
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p><p>On Wednesday, September 16, 2015, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Not precisely correct. It depends on the environment.
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
<span class="quotelev1">&gt; On Sep 15, 2015, at 4:44 PM, Matt Thompson &lt;fortran_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &lt;javascript:_e(%7B%7D,'cvml','fortran_at_[hidden]');&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Looking at the Open MPI 1.10.0 man page:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   <a href="https://www.open-mpi.org/doc/v1.10/man1/mpirun.1.php">https://www.open-mpi.org/doc/v1.10/man1/mpirun.1.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; it looks like perhaps -oversubscribe (which was an option) is now the
</span><br>
<span class="quotelev1">&gt; default behavior. Instead we have:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *-nooversubscribe, --nooversubscribe*Do not oversubscribe any nodes;
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
<span class="quotelev1">&gt; Patrick.Begou_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &lt;javascript:_e(%7B%7D,'cvml','Patrick.Begou_at_[hidden]');&gt;&gt;
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
<span class="quotelev2">&gt;&gt; |  Patrick BEGOU           | mailto:Patrick.Begou_at_[hidden] &lt;javascript:_e(%7B%7D,'cvml','Patrick.Begou_at_[hidden]');&gt; |
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
<span class="quotelev2">&gt;&gt; users_at_[hidden] &lt;javascript:_e(%7B%7D,'cvml','users_at_[hidden]');&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post:
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
<span class="quotelev1">&gt; users_at_[hidden] &lt;javascript:_e(%7B%7D,'cvml','users_at_[hidden]');&gt;
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/09/27579.php">http://www.open-mpi.org/community/lists/users/2015/09/27579.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-27581/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27582.php">Ralph Castain: "Re: [OMPI users] OpenMPI-1.10.0 bind-to core error"</a>
<li><strong>Previous message:</strong> <a href="27580.php">Ralph Castain: "Re: [OMPI users] OpenMPI-1.10.0 bind-to core error"</a>
<li><strong>In reply to:</strong> <a href="27580.php">Ralph Castain: "Re: [OMPI users] OpenMPI-1.10.0 bind-to core error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27582.php">Ralph Castain: "Re: [OMPI users] OpenMPI-1.10.0 bind-to core error"</a>
<li><strong>Reply:</strong> <a href="27582.php">Ralph Castain: "Re: [OMPI users] OpenMPI-1.10.0 bind-to core error"</a>
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

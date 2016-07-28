<?
$subject_val = "Re: [OMPI users] Using Open MPI as a communication library";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jul  8 13:05:19 2016" -->
<!-- isoreceived="20160708170519" -->
<!-- sent="Fri, 8 Jul 2016 10:05:11 -0700" -->
<!-- isosent="20160708170511" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Using Open MPI as a communication library" -->
<!-- id="9BF96432-3212-42DB-B80C-BA50808C70EA_at_open-mpi.org" -->
<!-- charset="utf-8" -->
<!-- inreplyto="CAPytMei17rvZvXT5R3UqMThscmN0KOSRh2T+umUwgW1O4kSVmg_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Using Open MPI as a communication library<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-07-08 13:05:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29620.php">Supun Kamburugamuve: "Re: [OMPI users] Using Open MPI as a communication library"</a>
<li><strong>Previous message:</strong> <a href="29618.php">Supun Kamburugamuve: "Re: [OMPI users] Using Open MPI as a communication library"</a>
<li><strong>In reply to:</strong> <a href="29618.php">Supun Kamburugamuve: "Re: [OMPI users] Using Open MPI as a communication library"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29620.php">Supun Kamburugamuve: "Re: [OMPI users] Using Open MPI as a communication library"</a>
<li><strong>Reply:</strong> <a href="29620.php">Supun Kamburugamuve: "Re: [OMPI users] Using Open MPI as a communication library"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I don&#226;&#128;&#153;t know anything about ZooKeeper. You would need another plugin to support it, probably down in the OPAL pmix framework I suppose.
<br>
<p>There is a list of info you&#226;&#128;&#153;d have to get from it: <a href="https://github.com/pmix/master/wiki/2.8-Pmix-Server-Data-Requirements">https://github.com/pmix/master/wiki/2.8-Pmix-Server-Data-Requirements</a> &lt;<a href="https://github.com/pmix/master/wiki/2.8-Pmix-Server-Data-Requirements">https://github.com/pmix/master/wiki/2.8-Pmix-Server-Data-Requirements</a>&gt;
<br>
<p><p><span class="quotelev1">&gt; On Jul 8, 2016, at 9:58 AM, Supun Kamburugamuve &lt;skamburugamuve_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I would like to discover the processes using a ZooKeeper server. The purpose is to use MPI as a communication library for applications managed by a resource manager such as Mesos or Yarn.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Supun..
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Fri, Jul 8, 2016 at 12:55 PM, Ralph Castain &lt;rhc_at_[hidden] &lt;mailto:rhc_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt; You&#226;&#128;&#153;d need to have some rendezvous mechanism. I suppose one option would be to launch a set of PMIx servers on the nodes (and ensure they know about each other) to support these things, but that&#226;&#128;&#153;s all mpirun really does anyway.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  What did you have in mind?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Jul 8, 2016, at 9:49 AM, Supun Kamburugamuve &lt;skamburugamuve_at_[hidden] &lt;mailto:skamburugamuve_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Thanks for the quick response. Is there a way for extending OpenMPI so that it can discover the processes using other means?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Supun.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Fri, Jul 8, 2016 at 12:45 PM, Ralph Castain &lt;rhc_at_[hidden] &lt;mailto:rhc_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; If not spawned by mpirun, and not spawned by a resource manager, then it won&#226;&#128;&#153;t work. There is no way for the procs to wireup.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Jul 8, 2016, at 9:42 AM, Supun Kamburugamuve &lt;skamburugamuve_at_[hidden] &lt;mailto:skamburugamuve_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Yes, the processes are not spawned by MPI and they are not spawned by something like Slurm/PBS. 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; How does MPI get to know what processes running in what nodes in a general sense? Do we need to write some plugin so that it can figure out this information? I guess this must be the way it is supporting Slurm/PBS etc.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Supun.. 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Fri, Jul 8, 2016 at 12:06 PM, Ralph Castain &lt;rhc_at_[hidden] &lt;mailto:rhc_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; You mean you didn&#226;&#128;&#153;t launch those procs via mpirun, yes? If you started them via some resource manager, then you might just be able to call MPI_Init and have them wireup.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; On Jul 8, 2016, at 8:55 AM, Supun Kamburugamuve &lt;skamburugamuve_at_[hidden] &lt;mailto:skamburugamuve_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; Hi,
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; I have a set of processes running and these are not managed/spawned by Open MPI. Is it possible to use Open MPI as a pure communication library among these processes?
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; Thanks,
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; Supun..
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a> &lt;<a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/07/29612.php">http://www.open-mpi.org/community/lists/users/2016/07/29612.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/users/2016/07/29612.php">http://www.open-mpi.org/community/lists/users/2016/07/29612.php</a>&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a> &lt;<a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/07/29613.php">http://www.open-mpi.org/community/lists/users/2016/07/29613.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/users/2016/07/29613.php">http://www.open-mpi.org/community/lists/users/2016/07/29613.php</a>&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a> &lt;<a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/07/29614.php">http://www.open-mpi.org/community/lists/users/2016/07/29614.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/users/2016/07/29614.php">http://www.open-mpi.org/community/lists/users/2016/07/29614.php</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a> &lt;<a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/07/29615.php">http://www.open-mpi.org/community/lists/users/2016/07/29615.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/users/2016/07/29615.php">http://www.open-mpi.org/community/lists/users/2016/07/29615.php</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a> &lt;<a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/07/29616.php">http://www.open-mpi.org/community/lists/users/2016/07/29616.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/users/2016/07/29616.php">http://www.open-mpi.org/community/lists/users/2016/07/29616.php</a>&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a> &lt;<a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>&gt;
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/07/29617.php">http://www.open-mpi.org/community/lists/users/2016/07/29617.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/users/2016/07/29617.php">http://www.open-mpi.org/community/lists/users/2016/07/29617.php</a>&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/07/29618.php">http://www.open-mpi.org/community/lists/users/2016/07/29618.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-29619/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29620.php">Supun Kamburugamuve: "Re: [OMPI users] Using Open MPI as a communication library"</a>
<li><strong>Previous message:</strong> <a href="29618.php">Supun Kamburugamuve: "Re: [OMPI users] Using Open MPI as a communication library"</a>
<li><strong>In reply to:</strong> <a href="29618.php">Supun Kamburugamuve: "Re: [OMPI users] Using Open MPI as a communication library"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29620.php">Supun Kamburugamuve: "Re: [OMPI users] Using Open MPI as a communication library"</a>
<li><strong>Reply:</strong> <a href="29620.php">Supun Kamburugamuve: "Re: [OMPI users] Using Open MPI as a communication library"</a>
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

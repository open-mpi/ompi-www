<?
$subject_val = "Re: [OMPI users] Using Open MPI as a communication library";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jul  8 13:11:24 2016" -->
<!-- isoreceived="20160708171124" -->
<!-- sent="Fri, 8 Jul 2016 13:11:22 -0400" -->
<!-- isosent="20160708171122" -->
<!-- name="Supun Kamburugamuve" -->
<!-- email="skamburugamuve_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Using Open MPI as a communication library" -->
<!-- id="CAPytMegtECGHWOwX+NDzXCHLnaDo+umRamVGh0LcDyJPe3=tGQ_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="9BF96432-3212-42DB-B80C-BA50808C70EA_at_open-mpi.org" -->
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
<strong>From:</strong> Supun Kamburugamuve (<em>skamburugamuve_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-07-08 13:11:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29621.php">Gang Chen: "[OMPI users] Can OMPI 1.8.8 or later support LSF 9.1.3 or 10.1?"</a>
<li><strong>Previous message:</strong> <a href="29619.php">Ralph Castain: "Re: [OMPI users] Using Open MPI as a communication library"</a>
<li><strong>In reply to:</strong> <a href="29619.php">Ralph Castain: "Re: [OMPI users] Using Open MPI as a communication library"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29627.php">Jeff Hammond: "Re: [OMPI users] Using Open MPI as a communication library"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks Ralph. Will have a look in these.
<br>
<p>Supun..
<br>
<p>On Fri, Jul 8, 2016 at 1:05 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; I don&#226;&#128;&#153;t know anything about ZooKeeper. You would need another plugin to
</span><br>
<span class="quotelev1">&gt; support it, probably down in the OPAL pmix framework I suppose.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; There is a list of info you&#226;&#128;&#153;d have to get from it:
</span><br>
<span class="quotelev1">&gt; <a href="https://github.com/pmix/master/wiki/2.8-Pmix-Server-Data-Requirements">https://github.com/pmix/master/wiki/2.8-Pmix-Server-Data-Requirements</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jul 8, 2016, at 9:58 AM, Supun Kamburugamuve &lt;skamburugamuve_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I would like to discover the processes using a ZooKeeper server. The
</span><br>
<span class="quotelev1">&gt; purpose is to use MPI as a communication library for applications managed
</span><br>
<span class="quotelev1">&gt; by a resource manager such as Mesos or Yarn.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Supun..
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Fri, Jul 8, 2016 at 12:55 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; You&#226;&#128;&#153;d need to have some rendezvous mechanism. I suppose one option would
</span><br>
<span class="quotelev2">&gt;&gt; be to launch a set of PMIx servers on the nodes (and ensure they know about
</span><br>
<span class="quotelev2">&gt;&gt; each other) to support these things, but that&#226;&#128;&#153;s all mpirun really does
</span><br>
<span class="quotelev2">&gt;&gt; anyway.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  What did you have in mind?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Jul 8, 2016, at 9:49 AM, Supun Kamburugamuve &lt;skamburugamuve_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks for the quick response. Is there a way for extending OpenMPI so
</span><br>
<span class="quotelev2">&gt;&gt; that it can discover the processes using other means?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Supun.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Fri, Jul 8, 2016 at 12:45 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; If not spawned by mpirun, and not spawned by a resource manager, then it
</span><br>
<span class="quotelev3">&gt;&gt;&gt; won&#226;&#128;&#153;t work. There is no way for the procs to wireup.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Jul 8, 2016, at 9:42 AM, Supun Kamburugamuve &lt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; skamburugamuve_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Yes, the processes are not spawned by MPI and they are not spawned by
</span><br>
<span class="quotelev3">&gt;&gt;&gt; something like Slurm/PBS.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; How does MPI get to know what processes running in what nodes in a
</span><br>
<span class="quotelev3">&gt;&gt;&gt; general sense? Do we need to write some plugin so that it can figure out
</span><br>
<span class="quotelev3">&gt;&gt;&gt; this information? I guess this must be the way it is supporting Slurm/PBS
</span><br>
<span class="quotelev3">&gt;&gt;&gt; etc.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Supun..
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Fri, Jul 8, 2016 at 12:06 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; You mean you didn&#226;&#128;&#153;t launch those procs via mpirun, yes? If you started
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; them via some resource manager, then you might just be able to call
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MPI_Init and have them wireup.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; On Jul 8, 2016, at 8:55 AM, Supun Kamburugamuve &lt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; skamburugamuve_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; Hi,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; I have a set of processes running and these are not managed/spawned
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; by Open MPI. Is it possible to use Open MPI as a pure communication library
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; among these processes?
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; Thanks,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; Supun..
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; users mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; Link to this post:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/07/29612.php">http://www.open-mpi.org/community/lists/users/2016/07/29612.php</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Link to this post:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/07/29613.php">http://www.open-mpi.org/community/lists/users/2016/07/29613.php</a>
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
<span class="quotelev3">&gt;&gt;&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Link to this post:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/07/29614.php">http://www.open-mpi.org/community/lists/users/2016/07/29614.php</a>
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
<span class="quotelev3">&gt;&gt;&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Link to this post:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/07/29615.php">http://www.open-mpi.org/community/lists/users/2016/07/29615.php</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/07/29616.php">http://www.open-mpi.org/community/lists/users/2016/07/29616.php</a>
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
<span class="quotelev2">&gt;&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/07/29617.php">http://www.open-mpi.org/community/lists/users/2016/07/29617.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
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
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/07/29618.php">http://www.open-mpi.org/community/lists/users/2016/07/29618.php</a>
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
<span class="quotelev1">&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/07/29619.php">http://www.open-mpi.org/community/lists/users/2016/07/29619.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-29620/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29621.php">Gang Chen: "[OMPI users] Can OMPI 1.8.8 or later support LSF 9.1.3 or 10.1?"</a>
<li><strong>Previous message:</strong> <a href="29619.php">Ralph Castain: "Re: [OMPI users] Using Open MPI as a communication library"</a>
<li><strong>In reply to:</strong> <a href="29619.php">Ralph Castain: "Re: [OMPI users] Using Open MPI as a communication library"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29627.php">Jeff Hammond: "Re: [OMPI users] Using Open MPI as a communication library"</a>
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

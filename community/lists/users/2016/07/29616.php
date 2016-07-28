<?
$subject_val = "Re: [OMPI users] Using Open MPI as a communication library";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jul  8 12:49:33 2016" -->
<!-- isoreceived="20160708164933" -->
<!-- sent="Fri, 8 Jul 2016 12:49:31 -0400" -->
<!-- isosent="20160708164931" -->
<!-- name="Supun Kamburugamuve" -->
<!-- email="skamburugamuve_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Using Open MPI as a communication library" -->
<!-- id="CAPytMegoG3Dik4EEkFaEj0f2hChOZUC4Dc0WJCg-bf2c-=bL=Q_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="446464B1-FB8F-4136-9E94-D545FF8E8F26_at_open-mpi.org" -->
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
<strong>Date:</strong> 2016-07-08 12:49:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29617.php">Ralph Castain: "Re: [OMPI users] Using Open MPI as a communication library"</a>
<li><strong>Previous message:</strong> <a href="29615.php">Ralph Castain: "Re: [OMPI users] Using Open MPI as a communication library"</a>
<li><strong>In reply to:</strong> <a href="29615.php">Ralph Castain: "Re: [OMPI users] Using Open MPI as a communication library"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29617.php">Ralph Castain: "Re: [OMPI users] Using Open MPI as a communication library"</a>
<li><strong>Reply:</strong> <a href="29617.php">Ralph Castain: "Re: [OMPI users] Using Open MPI as a communication library"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks for the quick response. Is there a way for extending OpenMPI so that
<br>
it can discover the processes using other means?
<br>
<p>Supun.
<br>
<p>On Fri, Jul 8, 2016 at 12:45 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; If not spawned by mpirun, and not spawned by a resource manager, then it
</span><br>
<span class="quotelev1">&gt; won&#226;&#128;&#153;t work. There is no way for the procs to wireup.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jul 8, 2016, at 9:42 AM, Supun Kamburugamuve &lt;skamburugamuve_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Yes, the processes are not spawned by MPI and they are not spawned by
</span><br>
<span class="quotelev1">&gt; something like Slurm/PBS.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; How does MPI get to know what processes running in what nodes in a general
</span><br>
<span class="quotelev1">&gt; sense? Do we need to write some plugin so that it can figure out this
</span><br>
<span class="quotelev1">&gt; information? I guess this must be the way it is supporting Slurm/PBS etc.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Supun..
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Fri, Jul 8, 2016 at 12:06 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; You mean you didn&#226;&#128;&#153;t launch those procs via mpirun, yes? If you started
</span><br>
<span class="quotelev2">&gt;&gt; them via some resource manager, then you might just be able to call
</span><br>
<span class="quotelev2">&gt;&gt; MPI_Init and have them wireup.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; On Jul 8, 2016, at 8:55 AM, Supun Kamburugamuve &lt;
</span><br>
<span class="quotelev2">&gt;&gt; skamburugamuve_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Hi,
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; I have a set of processes running and these are not managed/spawned by
</span><br>
<span class="quotelev2">&gt;&gt; Open MPI. Is it possible to use Open MPI as a pure communication library
</span><br>
<span class="quotelev2">&gt;&gt; among these processes?
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Thanks,
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Supun..
</span><br>
<span class="quotelev3">&gt;&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt; &gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/07/29612.php">http://www.open-mpi.org/community/lists/users/2016/07/29612.php</a>
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
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/07/29613.php">http://www.open-mpi.org/community/lists/users/2016/07/29613.php</a>
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/07/29614.php">http://www.open-mpi.org/community/lists/users/2016/07/29614.php</a>
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/07/29615.php">http://www.open-mpi.org/community/lists/users/2016/07/29615.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-29616/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29617.php">Ralph Castain: "Re: [OMPI users] Using Open MPI as a communication library"</a>
<li><strong>Previous message:</strong> <a href="29615.php">Ralph Castain: "Re: [OMPI users] Using Open MPI as a communication library"</a>
<li><strong>In reply to:</strong> <a href="29615.php">Ralph Castain: "Re: [OMPI users] Using Open MPI as a communication library"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29617.php">Ralph Castain: "Re: [OMPI users] Using Open MPI as a communication library"</a>
<li><strong>Reply:</strong> <a href="29617.php">Ralph Castain: "Re: [OMPI users] Using Open MPI as a communication library"</a>
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

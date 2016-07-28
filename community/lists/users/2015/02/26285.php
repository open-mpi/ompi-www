<?
$subject_val = "Re: [OMPI users] orted seg fault when using MPI_Comm_spawn on more than one host";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Feb  3 20:54:41 2015" -->
<!-- isoreceived="20150204015441" -->
<!-- sent="Tue, 3 Feb 2015 17:54:40 -0800" -->
<!-- isosent="20150204015440" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] orted seg fault when using MPI_Comm_spawn on more than one host" -->
<!-- id="CAMD57odPK71b2U+LYz5Ec9WoOVmGrczTY0U2mooWwyc=unzHyg_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CA+TA=9K7+MrhVhaUtZOvCouMvHo7bzwk9Y36s2LHuxVjZxGY9w_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] orted seg fault when using MPI_Comm_spawn on more than one host<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-02-03 20:54:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26286.php">Evan Samanas: "Re: [OMPI users] orted seg fault when using MPI_Comm_spawn on more than one host"</a>
<li><strong>Previous message:</strong> <a href="26284.php">Ralph Castain: "Re: [OMPI users] independent startup of orted and orterun"</a>
<li><strong>In reply to:</strong> <a href="26281.php">Evan Samanas: "Re: [OMPI users] orted seg fault when using MPI_Comm_spawn on more than one host"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26286.php">Evan Samanas: "Re: [OMPI users] orted seg fault when using MPI_Comm_spawn on more than one host"</a>
<li><strong>Reply:</strong> <a href="26286.php">Evan Samanas: "Re: [OMPI users] orted seg fault when using MPI_Comm_spawn on more than one host"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
When running your comm_spawn code, did you remove the Info key code? You
<br>
wouldn't need to provide a hostfile or hosts any more, which is why it
<br>
should resolve that problem.
<br>
<p>I agree that providing either hostfile or host as an Info key will cause
<br>
the program to segfault - I'm woking on that issue.
<br>
<p><p>On Tue, Feb 3, 2015 at 3:46 PM, Evan Samanas &lt;evan.samanas_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Setting these environment variables did indeed change the way mpirun maps
</span><br>
<span class="quotelev1">&gt; things, and I didn't have to specify a hostfile.  However, setting these
</span><br>
<span class="quotelev1">&gt; for my MPI_Comm_spawn code still resulted in the same segmentation fault.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Evan
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Tue, Feb 3, 2015 at 10:09 AM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; If you add the following to your environment, you should run on multiple
</span><br>
<span class="quotelev2">&gt;&gt; nodes:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; OMPI_MCA_rmaps_base_mapping_policy=node
</span><br>
<span class="quotelev2">&gt;&gt; OMPI_MCA_orte_default_hostfile=&lt;your hostfile&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The first tells OMPI to map-by node. The second passes in your default
</span><br>
<span class="quotelev2">&gt;&gt; hostfile so you don't need to specify it as an Info key.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; HTH
</span><br>
<span class="quotelev2">&gt;&gt; Ralph
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Tue, Feb 3, 2015 at 9:23 AM, Evan Samanas &lt;evan.samanas_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi Ralph,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Good to know you've reproduced it.  I was experiencing this using both
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the hostfile and host key.  A simple comm_spawn was working for me as well,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; but it was only launching locally, and I'm pretty sure each node only has 4
</span><br>
<span class="quotelev3">&gt;&gt;&gt; slots given past behavior (the mpirun -np 8 example I gave in my first
</span><br>
<span class="quotelev3">&gt;&gt;&gt; email launches on both hosts).  Is there a way to specify the hosts I want
</span><br>
<span class="quotelev3">&gt;&gt;&gt; to launch on without the hostfile or host key so I can test remote launch?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; And to the &quot;hostname&quot; response...no wonder it was hanging!  I just
</span><br>
<span class="quotelev3">&gt;&gt;&gt; constructed that as a basic example.  In my real use I'm launching
</span><br>
<span class="quotelev3">&gt;&gt;&gt; something that calls MPI_Init.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Evan
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
<span class="quotelev3">&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Link to this post:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/02/26271.php">http://www.open-mpi.org/community/lists/users/2015/02/26271.php</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
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
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/02/26272.php">http://www.open-mpi.org/community/lists/users/2015/02/26272.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/02/26281.php">http://www.open-mpi.org/community/lists/users/2015/02/26281.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-26285/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26286.php">Evan Samanas: "Re: [OMPI users] orted seg fault when using MPI_Comm_spawn on more than one host"</a>
<li><strong>Previous message:</strong> <a href="26284.php">Ralph Castain: "Re: [OMPI users] independent startup of orted and orterun"</a>
<li><strong>In reply to:</strong> <a href="26281.php">Evan Samanas: "Re: [OMPI users] orted seg fault when using MPI_Comm_spawn on more than one host"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26286.php">Evan Samanas: "Re: [OMPI users] orted seg fault when using MPI_Comm_spawn on more than one host"</a>
<li><strong>Reply:</strong> <a href="26286.php">Evan Samanas: "Re: [OMPI users] orted seg fault when using MPI_Comm_spawn on more than one host"</a>
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

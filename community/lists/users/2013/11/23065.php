<?
$subject_val = "Re: [OMPI users] MPI process hangs if OpenMPI is compiled with --enable-thread-multiple";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Nov 25 21:02:57 2013" -->
<!-- isoreceived="20131126020257" -->
<!-- sent="Mon, 25 Nov 2013 19:02:54 -0700" -->
<!-- isosent="20131126020254" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc.openmpi_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI process hangs if OpenMPI is compiled with --enable-thread-multiple" -->
<!-- id="AA66198A-04FC-4DF3-9EB1-4BDADFE5BBDF_at_gmail.com" -->
<!-- charset="utf-8" -->
<!-- inreplyto="C31366FD-97E0-4A64-BEAB-D25AD6E4DD2D_at_ann.jussieu.fr" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI process hangs if OpenMPI is compiled with --enable-thread-multiple<br>
<strong>From:</strong> Ralph Castain (<em>rhc.openmpi_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-11-25 21:02:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23066.php">Dominique Orban: "Re: [OMPI users] MPI process hangs if OpenMPI is compiled with --enable-thread-multiple"</a>
<li><strong>Previous message:</strong> <a href="23064.php">tmishima_at_[hidden]: "Re: [OMPI users] openmpi-1.7.4a1r29646 with -hostfile option under Torque manager"</a>
<li><strong>In reply to:</strong> <a href="23063.php">Pierre Jolivet: "Re: [OMPI users] MPI process hangs if OpenMPI is compiled with --enable-thread-multiple"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23066.php">Dominique Orban: "Re: [OMPI users] MPI process hangs if OpenMPI is compiled with --enable-thread-multiple"</a>
<li><strong>Reply:</strong> <a href="23066.php">Dominique Orban: "Re: [OMPI users] MPI process hangs if OpenMPI is compiled with --enable-thread-multiple"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Sent from my iPhone
<br>
<p><span class="quotelev1">&gt; On Nov 25, 2013, at 5:04 PM, Pierre Jolivet &lt;jolivet_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Nov 24, 2013, at 3:03 PM, Jed Brown &lt;jedbrown_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Ralph Castain &lt;rhc_at_[hidden]&gt; writes:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Given that we have no idea what Homebrew uses, I don't know how we
</span><br>
<span class="quotelev3">&gt;&gt;&gt; could clarify/respond.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Ralph, it is pretty easy to know what Homebrew uses, c.f. <a href="https://github.com/mxcl/homebrew/blob/master/Library/Formula/open-mpi.rb">https://github.com/mxcl/homebrew/blob/master/Library/Formula/open-mpi.rb</a> (sorry if you meant something else).
</span><br>
<p>Might be a surprise, but I don't track all these guys :-)
<br>
<p>Homebrew is new to me
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Pierre provided a link to MacPorts saying that all of the following
</span><br>
<span class="quotelev2">&gt;&gt; options were needed to properly enable threads.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; --enable-event-thread-support --enable-opal-multi-threads --enable-orte-progress-threads --enable-mpi-thread-multiple
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; If that is indeed the case, and if passing some subset of these options
</span><br>
<span class="quotelev2">&gt;&gt; results in deadlock, it's not exactly user-friendly.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Maybe --enable-mpi-thread-multiple is enough, in which case MacPorts is
</span><br>
<span class="quotelev2">&gt;&gt; doing something needlessly complicated and Pierre's link was a red
</span><br>
<span class="quotelev2">&gt;&gt; herring?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; That is very likely, though on the other hand, Homebrew is doing something pretty straightforward. I just wanted a quick and easy fix back when I had the same hanging issue, but there should be a better explanation if --enable-mpi-thread-multiple is indeed enough.
</span><br>
<p>It is enough - we set all required things internally
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Pierre
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-23065/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23066.php">Dominique Orban: "Re: [OMPI users] MPI process hangs if OpenMPI is compiled with --enable-thread-multiple"</a>
<li><strong>Previous message:</strong> <a href="23064.php">tmishima_at_[hidden]: "Re: [OMPI users] openmpi-1.7.4a1r29646 with -hostfile option under Torque manager"</a>
<li><strong>In reply to:</strong> <a href="23063.php">Pierre Jolivet: "Re: [OMPI users] MPI process hangs if OpenMPI is compiled with --enable-thread-multiple"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23066.php">Dominique Orban: "Re: [OMPI users] MPI process hangs if OpenMPI is compiled with --enable-thread-multiple"</a>
<li><strong>Reply:</strong> <a href="23066.php">Dominique Orban: "Re: [OMPI users] MPI process hangs if OpenMPI is compiled with --enable-thread-multiple"</a>
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

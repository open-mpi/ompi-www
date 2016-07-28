<?
$subject_val = "Re: [OMPI users] orted seg fault when using MPI_Comm_spawn on more than one host";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Feb  3 13:09:42 2015" -->
<!-- isoreceived="20150203180942" -->
<!-- sent="Tue, 3 Feb 2015 10:09:40 -0800" -->
<!-- isosent="20150203180940" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] orted seg fault when using MPI_Comm_spawn on more than one host" -->
<!-- id="CAMD57ofpbdjfFKk4M-=b08QcoiSLbVVqwg_am4pwwkD85cpH5w_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CA+TA=9LfcVRHf0WL0yRRDm42fSaNaecPMUJ0jQV39xCpoFhu2w_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2015-02-03 13:09:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26273.php">Elio Physics: "Re: [OMPI users] configuring a code with MPI/OPENMPI"</a>
<li><strong>Previous message:</strong> <a href="26271.php">Evan Samanas: "Re: [OMPI users] orted seg fault when using MPI_Comm_spawn on more than one host"</a>
<li><strong>In reply to:</strong> <a href="26271.php">Evan Samanas: "Re: [OMPI users] orted seg fault when using MPI_Comm_spawn on more than one host"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26281.php">Evan Samanas: "Re: [OMPI users] orted seg fault when using MPI_Comm_spawn on more than one host"</a>
<li><strong>Reply:</strong> <a href="26281.php">Evan Samanas: "Re: [OMPI users] orted seg fault when using MPI_Comm_spawn on more than one host"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
If you add the following to your environment, you should run on multiple
<br>
nodes:
<br>
<p>OMPI_MCA_rmaps_base_mapping_policy=node
<br>
OMPI_MCA_orte_default_hostfile=&lt;your hostfile&gt;
<br>
<p>The first tells OMPI to map-by node. The second passes in your default
<br>
hostfile so you don't need to specify it as an Info key.
<br>
<p>HTH
<br>
Ralph
<br>
<p><p>On Tue, Feb 3, 2015 at 9:23 AM, Evan Samanas &lt;evan.samanas_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi Ralph,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Good to know you've reproduced it.  I was experiencing this using both the
</span><br>
<span class="quotelev1">&gt; hostfile and host key.  A simple comm_spawn was working for me as well, but
</span><br>
<span class="quotelev1">&gt; it was only launching locally, and I'm pretty sure each node only has 4
</span><br>
<span class="quotelev1">&gt; slots given past behavior (the mpirun -np 8 example I gave in my first
</span><br>
<span class="quotelev1">&gt; email launches on both hosts).  Is there a way to specify the hosts I want
</span><br>
<span class="quotelev1">&gt; to launch on without the hostfile or host key so I can test remote launch?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; And to the &quot;hostname&quot; response...no wonder it was hanging!  I just
</span><br>
<span class="quotelev1">&gt; constructed that as a basic example.  In my real use I'm launching
</span><br>
<span class="quotelev1">&gt; something that calls MPI_Init.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Evan
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/02/26271.php">http://www.open-mpi.org/community/lists/users/2015/02/26271.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-26272/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26273.php">Elio Physics: "Re: [OMPI users] configuring a code with MPI/OPENMPI"</a>
<li><strong>Previous message:</strong> <a href="26271.php">Evan Samanas: "Re: [OMPI users] orted seg fault when using MPI_Comm_spawn on more than one host"</a>
<li><strong>In reply to:</strong> <a href="26271.php">Evan Samanas: "Re: [OMPI users] orted seg fault when using MPI_Comm_spawn on more than one host"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26281.php">Evan Samanas: "Re: [OMPI users] orted seg fault when using MPI_Comm_spawn on more than one host"</a>
<li><strong>Reply:</strong> <a href="26281.php">Evan Samanas: "Re: [OMPI users] orted seg fault when using MPI_Comm_spawn on more than one host"</a>
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

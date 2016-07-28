<?
$subject_val = "Re: [OMPI users] ssh between nodes";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Mar  2 11:09:51 2012" -->
<!-- isoreceived="20120302160951" -->
<!-- sent="Fri, 02 Mar 2012 11:09:47 -0500" -->
<!-- isosent="20120302160947" -->
<!-- name="Prentice Bisbal" -->
<!-- email="prentice_at_[hidden]" -->
<!-- subject="Re: [OMPI users] ssh between nodes" -->
<!-- id="4F50F0CB.3040302_at_ias.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="20120229215119.GC3256_at_stikine.sfu.ca" -->
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
<strong>Subject:</strong> Re: [OMPI users] ssh between nodes<br>
<strong>From:</strong> Prentice Bisbal (<em>prentice_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-03-02 11:09:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18666.php">Prentice Bisbal: "Re: [OMPI users] Simple question on GRID"</a>
<li><strong>Previous message:</strong> <a href="18664.php">Prentice Bisbal: "Re: [OMPI users] [EXTERNAL] Re: Question regarding osu-benchamarks 3.1.1"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2012/02/18621.php">Martin Siegert: "Re: [OMPI users] ssh between nodes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18675.php">Denver Smith: "Re: [OMPI users] ssh between nodes"</a>
<li><strong>Reply:</strong> <a href="18675.php">Denver Smith: "Re: [OMPI users] ssh between nodes"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 02/29/2012 04:51 PM, Martin Siegert wrote:
<br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Wed, Feb 29, 2012 at 09:09:27PM +0000, Denver Smith wrote:
</span><br>
<span class="quotelev2">&gt;&gt;    Hello,
</span><br>
<span class="quotelev2">&gt;&gt;    On my cluster running moab and torque, I cannot ssh without a password
</span><br>
<span class="quotelev2">&gt;&gt;    between compute nodes. I can however request multiple node jobs fine. I
</span><br>
<span class="quotelev2">&gt;&gt;    was wondering if passwordless ssh keys need to be set up between
</span><br>
<span class="quotelev2">&gt;&gt;    compute nodes in order for mpi applications to run correctly.
</span><br>
<span class="quotelev2">&gt;&gt;    Thanks
</span><br>
<span class="quotelev1">&gt; No. passwordless ssh keys are not needed. In fact, I strong advise
</span><br>
<span class="quotelev1">&gt; against using those (teaching users how to generate passwordless
</span><br>
<span class="quotelev1">&gt; ssh keys creates security problems: they start using those not just
</span><br>
<span class="quotelev1">&gt; for connecting to compute nodes). There are several alternatives:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1) use openmpi's hooks into torque (use the --with-tm configure option);
</span><br>
<span class="quotelev1">&gt; 2) use ssh hostbased authentication (and set IgnoreUserKnownHosts to yes);
</span><br>
<span class="quotelev1">&gt; 3) use rsh (works if your cluster is sufficiently small).
</span><br>
<p>What has been said for Torque also holds true for SGE - if you compile
<br>
Open MPI with the  --with-sge switch, passwordless SSH is not needed
<br>
since Open MPI will work directly with SGE .
<br>
<p>And as much as I agree passwordless SSH keys are not desirable, they can
<br>
be difficult to avoid., especially if you use commercial software on
<br>
your cluster. MATLAB, for example requires passwordless SSH between
<br>
cluster nodes in order to work.
<br>
<p><pre>
--
Prentice.
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18666.php">Prentice Bisbal: "Re: [OMPI users] Simple question on GRID"</a>
<li><strong>Previous message:</strong> <a href="18664.php">Prentice Bisbal: "Re: [OMPI users] [EXTERNAL] Re: Question regarding osu-benchamarks 3.1.1"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2012/02/18621.php">Martin Siegert: "Re: [OMPI users] ssh between nodes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18675.php">Denver Smith: "Re: [OMPI users] ssh between nodes"</a>
<li><strong>Reply:</strong> <a href="18675.php">Denver Smith: "Re: [OMPI users] ssh between nodes"</a>
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

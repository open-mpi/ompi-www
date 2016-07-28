<?
$subject_val = "Re: [OMPI users] LAM/MPI -&gt; OpenMPI";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar  3 09:06:06 2015" -->
<!-- isoreceived="20150303140606" -->
<!-- sent="Tue, 3 Mar 2015 14:05:49 +0000" -->
<!-- isosent="20150303140549" -->
<!-- name="Sasso, John (GE Power &amp; Water, Non-GE)" -->
<!-- email="John1.Sasso_at_[hidden]" -->
<!-- subject="Re: [OMPI users] LAM/MPI -&amp;gt; OpenMPI" -->
<!-- id="4F505D9A84D1D74E9397FB427DDF95BC46ABB886_at_ALPMBAPA12.e2k.ad.ge.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="54F099A2.30109_at_mcs.anl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI users] LAM/MPI -&gt; OpenMPI<br>
<strong>From:</strong> Sasso, John (GE Power &amp; Water, Non-GE) (<em>John1.Sasso_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-03-03 09:05:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26425.php">Lev Givon: "Re: [OMPI users] compiling OpenMPI 1.8.4 on system with multiarched SLURM libs (Ubuntu 15.04 prerelease)"</a>
<li><strong>Previous message:</strong> <a href="26423.php">Siegmar Gross: "[OMPI users] some warnings for openmpi-dev-1184-gbb22d26"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2015/02/26410.php">Rob Latham: "Re: [OMPI users] LAM/MPI -&gt; OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2015/02/26414.php">Jeff Squyres (jsquyres): "Re: [OMPI users] LAM/MPI -&gt; OpenMPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
As far as I know, no MPI-IO is done in their LAM/MPI-based apps
<br>
<p>-----Original Message-----
<br>
From: users [mailto:users-bounces_at_[hidden]] On Behalf Of Rob Latham
<br>
Sent: Friday, February 27, 2015 11:22 AM
<br>
To: users_at_[hidden]
<br>
Subject: Re: [OMPI users] LAM/MPI -&gt; OpenMPI
<br>
<p><p><p>On 02/27/2015 09:40 AM, Ralph Castain wrote:
<br>
<p><span class="quotelev2">&gt;&gt; Yeah, any other recommendations I can give to convince the 
</span><br>
<span class="quotelev2">&gt;&gt; powers-that-be that immediate sun-setting of LAM/MPI would be great.
</span><br>
<span class="quotelev2">&gt;&gt;  Sometimes I feel like I am trying to fit a square peg in a round 
</span><br>
<span class="quotelev2">&gt;&gt; holeL
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Other than the fact that LAM/MPI no longer is supported, the only real 
</span><br>
<span class="quotelev1">&gt; rationale would be that OMPI has a lot of enhancements in terms of 
</span><br>
<span class="quotelev1">&gt; binding options and other features, supports thru MPI-3, etc.
</span><br>
<p>Does this application do any I/O?  I was curious so I dug around in LAM's suversion repository.  Last change to ROMIO, the MPI-IO implementation, was this one:
<br>
<p>r10377 | brbarret | 2007-07-02 21:53:06
<br>
<p>so you're missing out on 8 years of I/O related bug fixes and optimizations.
<br>
<p><p>==rob
<br>
<p><pre>
--
Rob Latham
Mathematics and Computer Science Division Argonne National Lab, IL USA _______________________________________________
users mailing list
users_at_[hidden]
Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/02/26410.php">http://www.open-mpi.org/community/lists/users/2015/02/26410.php</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26425.php">Lev Givon: "Re: [OMPI users] compiling OpenMPI 1.8.4 on system with multiarched SLURM libs (Ubuntu 15.04 prerelease)"</a>
<li><strong>Previous message:</strong> <a href="26423.php">Siegmar Gross: "[OMPI users] some warnings for openmpi-dev-1184-gbb22d26"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2015/02/26410.php">Rob Latham: "Re: [OMPI users] LAM/MPI -&gt; OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2015/02/26414.php">Jeff Squyres (jsquyres): "Re: [OMPI users] LAM/MPI -&gt; OpenMPI"</a>
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

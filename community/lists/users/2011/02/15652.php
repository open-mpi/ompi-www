<?
$subject_val = "[OMPI users] RoCE (IBoE) &amp; OpenMPI";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Feb 18 08:17:58 2011" -->
<!-- isoreceived="20110218131758" -->
<!-- sent="Fri, 18 Feb 2011 08:17:53 -0500" -->
<!-- isosent="20110218131753" -->
<!-- name="Michael Shuey" -->
<!-- email="shuey_at_[hidden]" -->
<!-- subject="[OMPI users] RoCE (IBoE) &amp;amp; OpenMPI" -->
<!-- id="AANLkTimnSBSVW+A5e+Di2piACG4kQmoPcQgoB2qK065L_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] RoCE (IBoE) &amp; OpenMPI<br>
<strong>From:</strong> Michael Shuey (<em>shuey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-02-18 08:17:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15653.php">Jeff Squyres: "Re: [OMPI users] RoCE (IBoE) &amp; OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="15651.php">Ashley Pittman: "Re: [OMPI users] This must be ssh problem, but I can't figure out what it is..."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15653.php">Jeff Squyres: "Re: [OMPI users] RoCE (IBoE) &amp; OpenMPI"</a>
<li><strong>Reply:</strong> <a href="15653.php">Jeff Squyres: "Re: [OMPI users] RoCE (IBoE) &amp; OpenMPI"</a>
<li><strong>Maybe reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2011/03/15767.php">Michael Shuey: "Re: [OMPI users] RoCE (IBoE) &amp; OpenMPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I've been looking into OpenMPI's support for RoCE (Mellanox's recent
<br>
Infiniband-over-Ethernet) lately.  While it's promising, I've hit a
<br>
snag: RoCE requires lossless ethernet, and on my switches the only way
<br>
to guarantee this is with CoS.  RoCE adapters cannot emit CoS priority
<br>
tags unless the client program selects an IB service level and uses a
<br>
non-default GID.
<br>
<p>There's a command-line option in OpenMPI to pick an IB SL, but I can't
<br>
find one for picking a different GID.  Does this exist for the openib
<br>
btl?  Or am I going about this the wrong way?
<br>
<p><pre>
--
Mike Shuey
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15653.php">Jeff Squyres: "Re: [OMPI users] RoCE (IBoE) &amp; OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="15651.php">Ashley Pittman: "Re: [OMPI users] This must be ssh problem, but I can't figure out what it is..."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15653.php">Jeff Squyres: "Re: [OMPI users] RoCE (IBoE) &amp; OpenMPI"</a>
<li><strong>Reply:</strong> <a href="15653.php">Jeff Squyres: "Re: [OMPI users] RoCE (IBoE) &amp; OpenMPI"</a>
<li><strong>Maybe reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2011/03/15767.php">Michael Shuey: "Re: [OMPI users] RoCE (IBoE) &amp; OpenMPI"</a>
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

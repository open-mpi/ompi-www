<?
$subject_val = "Re: [OMPI users] EXTERNAL: Re: Can you set the gid of the processes	created by mpirun?";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Sep 14 11:40:10 2011" -->
<!-- isoreceived="20110914154010" -->
<!-- sent="Wed, 14 Sep 2011 09:39:52 -0600" -->
<!-- isosent="20110914153952" -->
<!-- name="Blosch, Edwin L" -->
<!-- email="edwin.l.blosch_at_[hidden]" -->
<!-- subject="Re: [OMPI users] EXTERNAL: Re: Can you set the gid of the processes	created by mpirun?" -->
<!-- id="E9F276A0010AF44ABD2C03ED2EDAE7DB275E483F26_at_HDXMSPB.us.lmco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="DA922AA9-BD91-42D1-A654-CAFD965F5E05_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] EXTERNAL: Re: Can you set the gid of the processes	created by mpirun?<br>
<strong>From:</strong> Blosch, Edwin L (<em>edwin.l.blosch_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-09-14 11:39:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17286.php">Reuti: "Re: [OMPI users] EXTERNAL: Re: Can you set the gid of the processes	created by mpirun?"</a>
<li><strong>Previous message:</strong> <a href="17284.php">Shamis, Pavel: "Re: [OMPI users] OpenIB error messages: reporting the default or telling you what's happening?"</a>
<li><strong>In reply to:</strong> <a href="17283.php">Ralph Castain: "Re: [OMPI users] EXTERNAL: Re: Can you set the gid of the processes created by mpirun?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17286.php">Reuti: "Re: [OMPI users] EXTERNAL: Re: Can you set the gid of the processes	created by mpirun?"</a>
<li><strong>Reply:</strong> <a href="17286.php">Reuti: "Re: [OMPI users] EXTERNAL: Re: Can you set the gid of the processes	created by mpirun?"</a>
<li><strong>Reply:</strong> <a href="17287.php">Ralph Castain: "Re: [OMPI users] EXTERNAL: Re: Can you set the gid of the processes	created by mpirun?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks, Ralph,
<br>
<p>I get the failure messages, unfortunately:
<br>
<p>setgid FAILED
<br>
setgid FAILED
<br>
setgid FAILED
<br>
<p>I actually had attempted to call setgid from within the application previously, which looks similar to what you've done, but it failed. That was when I initiated the post to the mailing list. My conclusion, a guess really, was that Linux would not let me setgid from within my program because I was not root.
<br>
<p><p>-----Original Message-----
<br>
From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] On Behalf Of Ralph Castain
<br>
Sent: Wednesday, September 14, 2011 8:15 AM
<br>
To: Open MPI Users
<br>
Subject: Re: [OMPI users] EXTERNAL: Re: Can you set the gid of the processes created by mpirun?
<br>
<p>The attached should set the gid of the remote daemons (and their children) to the gid of mpirun. No cmd line option or anything is required - it will just always do it.
<br>
<p>Would you mind giving it a try?
<br>
<p>Please let me know if/how it works.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17286.php">Reuti: "Re: [OMPI users] EXTERNAL: Re: Can you set the gid of the processes	created by mpirun?"</a>
<li><strong>Previous message:</strong> <a href="17284.php">Shamis, Pavel: "Re: [OMPI users] OpenIB error messages: reporting the default or telling you what's happening?"</a>
<li><strong>In reply to:</strong> <a href="17283.php">Ralph Castain: "Re: [OMPI users] EXTERNAL: Re: Can you set the gid of the processes created by mpirun?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17286.php">Reuti: "Re: [OMPI users] EXTERNAL: Re: Can you set the gid of the processes	created by mpirun?"</a>
<li><strong>Reply:</strong> <a href="17286.php">Reuti: "Re: [OMPI users] EXTERNAL: Re: Can you set the gid of the processes	created by mpirun?"</a>
<li><strong>Reply:</strong> <a href="17287.php">Ralph Castain: "Re: [OMPI users] EXTERNAL: Re: Can you set the gid of the processes	created by mpirun?"</a>
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

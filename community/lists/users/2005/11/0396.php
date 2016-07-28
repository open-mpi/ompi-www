<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Nov 28 11:18:04 2005" -->
<!-- isoreceived="20051128161804" -->
<!-- sent="Mon, 28 Nov 2005 11:17:56 -0500" -->
<!-- isosent="20051128161756" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [O-MPI users] Problems running simple hello world program" -->
<!-- id="a7841b640410619d05d78d94cc81859b_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="438B24D0.70202_at_rug.nl" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2005-11-28 11:17:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0397.php">John Ouellette: "[O-MPI users] problems with bproc cluster"</a>
<li><strong>Previous message:</strong> <a href="0395.php">Rainer Keller: "Re: [O-MPI users] pathscale 2.1/2.3 build problem"</a>
<li><strong>In reply to:</strong> <a href="0393.php">Arnold Meijster: "[O-MPI users] Problems running simple hello world program"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Nov 28, 2005, at 10:40 AM, Arnold Meijster wrote:
<br>
<p><span class="quotelev1">&gt; I've the following problem. I downloaded/compiled/installed openMPI 1.0
</span><br>
<span class="quotelev1">&gt; on my Linux i386 box with ubuntu 5.10.
</span><br>
<p>Greetings Arnold.
<br>
<p>It looks like you are experiencing the shared memory startup bug -- we 
<br>
neglected to include a specific fix in the 1.0 release.  See 
<br>
<a href="http://www.open-mpi.org/community/lists/users/2005/11/0382.php">http://www.open-mpi.org/community/lists/users/2005/11/0382.php</a> if you 
<br>
want to know a few more of the details.
<br>
<p>The short version is: 1.0.1 will be out shortly and will include a fix 
<br>
for this.  If you'd like to try an updated tarball, check out one of 
<br>
the 1.0.1 release candidates:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/software/v1.0/">http://www.open-mpi.org/software/v1.0/</a>
<br>
<p><pre>
-- 
{+} Jeff Squyres
{+} The Open MPI Project
{+} <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0397.php">John Ouellette: "[O-MPI users] problems with bproc cluster"</a>
<li><strong>Previous message:</strong> <a href="0395.php">Rainer Keller: "Re: [O-MPI users] pathscale 2.1/2.3 build problem"</a>
<li><strong>In reply to:</strong> <a href="0393.php">Arnold Meijster: "[O-MPI users] Problems running simple hello world program"</a>
<!-- nextthread="start" -->
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

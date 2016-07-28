<?
$subject_val = "Re: [OMPI users] libnuma issue";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr 15 07:04:46 2009" -->
<!-- isoreceived="20090415110446" -->
<!-- sent="Wed, 15 Apr 2009 07:04:41 -0400" -->
<!-- isosent="20090415110441" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] libnuma issue" -->
<!-- id="73E9DAFE-C849-495A-A113-045231EC46E9_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="49DA6512.10304_at_ias.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] libnuma issue<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-04-15 07:04:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8933.php">Jeff Squyres: "Re: [OMPI users] Incorrect results with MPI-IO under OpenMPI v1.3.1"</a>
<li><strong>Previous message:</strong> <a href="8931.php">Jeff Squyres: "Re: [OMPI users] Problem with MPI_File_read() (2)"</a>
<li><strong>In reply to:</strong> <a href="8793.php">Prentice Bisbal: "Re: [OMPI users] libnuma issue"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8936.php">Francesco Pietra: "Re: [OMPI users] libnuma issue"</a>
<li><strong>Reply:</strong> <a href="8936.php">Francesco Pietra: "Re: [OMPI users] libnuma issue"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Apr 6, 2009, at 4:24 PM, Prentice Bisbal wrote:
<br>
<p><span class="quotelev2">&gt; &gt; I would appreciate help in circumventing the problem.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I believe you need
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --with-libnuma=/usr.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p>Sorry for the late reply.
<br>
<p>FWIW, the above is correct -- you should use --with-libnuma=/usr, not  
<br>
--with-libnuma=/usr/lib.
<br>
<p>Please also note in this thread:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/community/lists/users/2009/04/8853.php">http://www.open-mpi.org/community/lists/users/2009/04/8853.php</a>
<br>
<p>We found some obscure logic issues with the handling of --with- 
<br>
libnuma.  I doubt that those should affect you (since you're  
<br>
mentioning an explicit directory for libnuma), but I mention it to be  
<br>
complete.
<br>
<p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8933.php">Jeff Squyres: "Re: [OMPI users] Incorrect results with MPI-IO under OpenMPI v1.3.1"</a>
<li><strong>Previous message:</strong> <a href="8931.php">Jeff Squyres: "Re: [OMPI users] Problem with MPI_File_read() (2)"</a>
<li><strong>In reply to:</strong> <a href="8793.php">Prentice Bisbal: "Re: [OMPI users] libnuma issue"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8936.php">Francesco Pietra: "Re: [OMPI users] libnuma issue"</a>
<li><strong>Reply:</strong> <a href="8936.php">Francesco Pietra: "Re: [OMPI users] libnuma issue"</a>
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

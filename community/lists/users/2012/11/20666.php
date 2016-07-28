<?
$subject_val = "Re: [OMPI users] mpi_leave_pinned is dangerous";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Nov  8 09:38:58 2012" -->
<!-- isoreceived="20121108143858" -->
<!-- sent="Thu, 8 Nov 2012 09:38:51 -0500" -->
<!-- isosent="20121108143851" -->
<!-- name="Shamis, Pavel" -->
<!-- email="shamisp_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpi_leave_pinned is dangerous" -->
<!-- id="5E5E956C-4705-4144-9FA7-22B12F297AE5_at_ornl.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="3FDE6BA3-EB22-4390-8917-1A5D483308DF_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] mpi_leave_pinned is dangerous<br>
<strong>From:</strong> Shamis, Pavel (<em>shamisp_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-11-08 09:38:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20667.php">Lim Jiew Meng: "[OMPI users] MPI_ERR_TRUNCATE: On Broadcast"</a>
<li><strong>Previous message:</strong> <a href="20665.php">Jeff Squyres: "Re: [OMPI users] mpi_leave_pinned is dangerous"</a>
<li><strong>In reply to:</strong> <a href="20665.php">Jeff Squyres: "Re: [OMPI users] mpi_leave_pinned is dangerous"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20668.php">Jeff Squyres: "Re: [OMPI users] mpi_leave_pinned is dangerous"</a>
<li><strong>Reply:</strong> <a href="20668.php">Jeff Squyres: "Re: [OMPI users] mpi_leave_pinned is dangerous"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Another good reason for ummunotify kernel module
<br>
(<a href="http://lwn.net/Articles/345013/">http://lwn.net/Articles/345013/</a>)
<br>
<p>Pavel (Pasha) Shamis
<br>
<pre>
---
Computer Science Research Group
Computer Science and Math Division
Oak Ridge National Laboratory
On Nov 8, 2012, at 9:08 AM, Jeff Squyres wrote:
On Nov 8, 2012, at 8:51 AM, Rolf vandeVaart wrote:
Not sure.  I will look into this.   And thank you for the feedback Jens!
FWIW, I +1 Jens' request.  MPI implementations are able to handle network registration mechanisms via standard memory hooks (their hooks are actually pretty terrible, but for the most part, they are generally functional).
If CUDA requires registered memory, then it should also provide hooks so that MPI implementations can &quot;just make it work&quot; from the users' perspective (and please please please provide BETTER hooks than verbs / glibc malloc!).
--
Jeff Squyres
jsquyres_at_[hidden]&lt;mailto:jsquyres_at_[hidden]&gt;
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
_______________________________________________
users mailing list
users_at_[hidden]
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20667.php">Lim Jiew Meng: "[OMPI users] MPI_ERR_TRUNCATE: On Broadcast"</a>
<li><strong>Previous message:</strong> <a href="20665.php">Jeff Squyres: "Re: [OMPI users] mpi_leave_pinned is dangerous"</a>
<li><strong>In reply to:</strong> <a href="20665.php">Jeff Squyres: "Re: [OMPI users] mpi_leave_pinned is dangerous"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20668.php">Jeff Squyres: "Re: [OMPI users] mpi_leave_pinned is dangerous"</a>
<li><strong>Reply:</strong> <a href="20668.php">Jeff Squyres: "Re: [OMPI users] mpi_leave_pinned is dangerous"</a>
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

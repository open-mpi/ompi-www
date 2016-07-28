<?
$subject_val = "Re: [OMPI users] Mimicking timeout for MPI_Wait";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Dec  6 10:42:34 2009" -->
<!-- isoreceived="20091206154234" -->
<!-- sent="Sun, 6 Dec 2009 17:42:26 +0200" -->
<!-- isosent="20091206154226" -->
<!-- name="Katz, Jacob" -->
<!-- email="jacob.katz_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Mimicking timeout for MPI_Wait" -->
<!-- id="89F8C511E9BE1F41AE2F1BB0424037F201C8C98E60_at_hasmsx504.ger.corp.intel.com" -->
<!-- charset="utf-8" -->
<!-- inreplyto="20091206135251.GA27795_at_scram" -->
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
<strong>Subject:</strong> Re: [OMPI users] Mimicking timeout for MPI_Wait<br>
<strong>From:</strong> Katz, Jacob (<em>jacob.katz_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-12-06 10:42:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11441.php">Ralph Castain: "Re: [OMPI users] How to detect a failure to start-up and MPI_Init()?"</a>
<li><strong>Previous message:</strong> <a href="11439.php">Katz, Jacob: "[OMPI users] How to detect a failure to start-up and MPI_Init()?"</a>
<li><strong>In reply to:</strong> <a href="11438.php">Douglas Guptill: "Re: [OMPI users] Mimicking timeout for MPI_Wait"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11444.php">Katz, Jacob: "Re: [OMPI users] Mimicking timeout for MPI_Wait"</a>
<li><strong>Reply:</strong> <a href="11444.php">Katz, Jacob: "Re: [OMPI users] Mimicking timeout for MPI_Wait"</a>
<li><strong>Reply:</strong> <a href="11448.php">Richard Treumann: "Re: [OMPI users] Mimicking timeout for MPI_Wait"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks, Douglas. 
<br>
I found your code in the archive.
<br>
--------------------------------
<br>
Jacob M. Katz | jacob.katz_at_[hidden] | Work: +972-4-865-5726 | iNet: (8)-465-5726
<br>
<p><p>-----Original Message-----
<br>
From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] On Behalf Of Douglas Guptill
<br>
Sent: Sunday, December 06, 2009 15:53
<br>
To: users_at_[hidden]
<br>
Subject: Re: [OMPI users] Mimicking timeout for MPI_Wait
<br>
<p>On Sun, Dec 06, 2009 at 02:29:01PM +0200, Katz, Jacob wrote:
<br>
<p><span class="quotelev1">&gt; Thanks.
</span><br>
<span class="quotelev1">&gt; Yes, I meant in the question that I was looking for something creative, both fast responding and not using 100% CPU all the time.
</span><br>
<span class="quotelev1">&gt; I guess I&#226;&#128;&#153;m not the first one to face this question. Have anyone done anything &#226;&#128;&#156;better&#226;&#128;&#157; than the simple solution?
</span><br>
<p>My MPI application is a two-process thing, in which data is thrown
<br>
back and forth.  For the most part, one process is calculating, and
<br>
the other is waiting.
<br>
<p>I got tired of seeing both cpus at 100% load, and based on suggestions
<br>
from Jeff Squyres and Eugene Loh, wrote MPI_Recv.c and MPI_Send.c.  I
<br>
load these with my application, and bingo!  Only one cpu busy at any
<br>
given time.
<br>
<p>They use a graduated sleep; the first sleep is short, the second is
<br>
twice as long, and so on, up to a maximum sleep time.
<br>
<p>I sent the code along with my last message on the subject (December
<br>
2008, or later) so it should be in the archives.  Failing that, I
<br>
could post it again, if anyone wants it.
<br>
<p>Douglas.
<br>
_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
---------------------------------------------------------------------
<br>
Intel Israel (74) Limited
<br>
<p>This e-mail and any attachments may contain confidential material for
<br>
the sole use of the intended recipient(s). Any review or distribution
<br>
by others is strictly prohibited. If you are not the intended
<br>
recipient, please contact the sender and delete all copies.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11441.php">Ralph Castain: "Re: [OMPI users] How to detect a failure to start-up and MPI_Init()?"</a>
<li><strong>Previous message:</strong> <a href="11439.php">Katz, Jacob: "[OMPI users] How to detect a failure to start-up and MPI_Init()?"</a>
<li><strong>In reply to:</strong> <a href="11438.php">Douglas Guptill: "Re: [OMPI users] Mimicking timeout for MPI_Wait"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11444.php">Katz, Jacob: "Re: [OMPI users] Mimicking timeout for MPI_Wait"</a>
<li><strong>Reply:</strong> <a href="11444.php">Katz, Jacob: "Re: [OMPI users] Mimicking timeout for MPI_Wait"</a>
<li><strong>Reply:</strong> <a href="11448.php">Richard Treumann: "Re: [OMPI users] Mimicking timeout for MPI_Wait"</a>
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

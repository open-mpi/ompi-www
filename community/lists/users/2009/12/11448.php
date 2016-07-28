<?
$subject_val = "Re: [OMPI users] Mimicking timeout for MPI_Wait";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Dec  7 08:21:52 2009" -->
<!-- isoreceived="20091207132152" -->
<!-- sent="Mon, 7 Dec 2009 08:21:46 -0500" -->
<!-- isosent="20091207132146" -->
<!-- name="Richard Treumann" -->
<!-- email="treumann_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Mimicking timeout for MPI_Wait" -->
<!-- id="OFF4A6A054.A24B717C-ON85257685.0046CC18-85257685.0049677A_at_us.ibm.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="89F8C511E9BE1F41AE2F1BB0424037F201C8C98E60_at_hasmsx504.ger.corp.intel.com" -->
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
<strong>From:</strong> Richard Treumann (<em>treumann_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-12-07 08:21:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11449.php">Stefan Kuhne: "Re: [OMPI users] OFED-1.5rc1 with OpenMPI and IB"</a>
<li><strong>Previous message:</strong> <a href="11447.php">Sangamesh B: "Re: [OMPI users] Job fails after hours of running on a specific node"</a>
<li><strong>In reply to:</strong> <a href="11440.php">Katz, Jacob: "Re: [OMPI users] Mimicking timeout for MPI_Wait"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11450.php">Douglas Guptill: "Re: [OMPI users] Mimicking timeout for MPI_Wait"</a>
<li><strong>Reply:</strong> <a href="11450.php">Douglas Guptill: "Re: [OMPI users] Mimicking timeout for MPI_Wait"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The need for a &quot;better&quot; timeout depends on what else there is for the CPU
<br>
to do.
<br>

<br>
If you get creative and shift from {99% MPI_WAIT , 1% OS_idle_process} to
<br>
{1% MPI_Wait, 99% OS_idle_process} at a cost of only a few extra
<br>
microseconds added lag on MPI_Wait, you may be pleased by the CPU load
<br>
statistic but still have have only hurt yourself. Perhaps you have not hurt
<br>
yourself much but for what? The CPU does not get tired of spinning in
<br>
MPI_Wait rather than in the OS_idle_process
<br>

<br>
Most MPI applications run with an essentially dedicated CPU per process. In
<br>
most MPI applications if even one task is sharing its CPU with other
<br>
processes, like users doing compiles, the whole job slows down too much.
<br>

<br>
There are exceptions. For example, a  work farm, in which a master doles
<br>
out a chunk of work, takes back the result as a worker produces one and
<br>
then doles out another chunk can get valuable work from CPUs that have
<br>
other useful work to do too and in that situation it can be a big win to
<br>
accept lag time in the MPI_Wait in return for making the CPU available to
<br>
another process. The symptom that  you need a &quot;better&quot; MPI_Wait then will
<br>
probably be more like {50% MPI_WAIT , 50% other process}
<br>

<br>
Dick Treumann  -  MPI Team
<br>
IBM Systems &amp; Technology Group
<br>
Dept X2ZA / MS P963 -- 2455 South Road -- Poughkeepsie, NY 12601
<br>
Tele (845) 433-7846         Fax (845) 433-8363
<br>

<br>

<br>
users-bounces_at_[hidden] wrote on 12/06/2009 10:42:26 AM:
<br>

<br>
<span class="quotelev1">&gt; [image removed]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Re: [OMPI users] Mimicking timeout for MPI_Wait
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Katz, Jacob
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; to:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Open MPI Users
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 12/06/2009 10:47 AM
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Sent by:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; users-bounces_at_[hidden]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Please respond to Open MPI Users
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks, Douglas.
</span><br>
<span class="quotelev1">&gt; I found your code in the archive.
</span><br>
<span class="quotelev1">&gt; --------------------------------
</span><br>
<span class="quotelev1">&gt; Jacob M. Katz | jacob.katz_at_[hidden] | Work: +972-4-865-5726 | iNet:
</span><br>
<span class="quotelev1">&gt; (8)-465-5726
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -----Original Message-----
</span><br>
<span class="quotelev1">&gt; From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]]
</span><br>
<span class="quotelev1">&gt; On Behalf Of Douglas Guptill
</span><br>
<span class="quotelev1">&gt; Sent: Sunday, December 06, 2009 15:53
</span><br>
<span class="quotelev1">&gt; To: users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] Mimicking timeout for MPI_Wait
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Sun, Dec 06, 2009 at 02:29:01PM +0200, Katz, Jacob wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Thanks.
</span><br>
<span class="quotelev2">&gt; &gt; Yes, I meant in the question that I was looking for something
</span><br>
<span class="quotelev1">&gt; creative, both fast responding and not using 100% CPU all the time.
</span><br>
<span class="quotelev2">&gt; &gt; I guess I&#226;&#128;&#153;m not the first one to face this question. Have anyone
</span><br>
<span class="quotelev1">&gt; done anything &#226;&#128;&#156;better&#226;&#128;&#157; than the simple solution?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; My MPI application is a two-process thing, in which data is thrown
</span><br>
<span class="quotelev1">&gt; back and forth.  For the most part, one process is calculating, and
</span><br>
<span class="quotelev1">&gt; the other is waiting.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I got tired of seeing both cpus at 100% load, and based on suggestions
</span><br>
<span class="quotelev1">&gt; from Jeff Squyres and Eugene Loh, wrote MPI_Recv.c and MPI_Send.c.  I
</span><br>
<span class="quotelev1">&gt; load these with my application, and bingo!  Only one cpu busy at any
</span><br>
<span class="quotelev1">&gt; given time.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; They use a graduated sleep; the first sleep is short, the second is
</span><br>
<span class="quotelev1">&gt; twice as long, and so on, up to a maximum sleep time.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I sent the code along with my last message on the subject (December
</span><br>
<span class="quotelev1">&gt; 2008, or later) so it should be in the archives.  Failing that, I
</span><br>
<span class="quotelev1">&gt; could post it again, if anyone wants it.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Douglas.
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; ---------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; Intel Israel (74) Limited
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This e-mail and any attachments may contain confidential material for
</span><br>
<span class="quotelev1">&gt; the sole use of the intended recipient(s). Any review or distribution
</span><br>
<span class="quotelev1">&gt; by others is strictly prohibited. If you are not the intended
</span><br>
<span class="quotelev1">&gt; recipient, please contact the sender and delete all copies.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a></span><br>
<p>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-11448/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11449.php">Stefan Kuhne: "Re: [OMPI users] OFED-1.5rc1 with OpenMPI and IB"</a>
<li><strong>Previous message:</strong> <a href="11447.php">Sangamesh B: "Re: [OMPI users] Job fails after hours of running on a specific node"</a>
<li><strong>In reply to:</strong> <a href="11440.php">Katz, Jacob: "Re: [OMPI users] Mimicking timeout for MPI_Wait"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11450.php">Douglas Guptill: "Re: [OMPI users] Mimicking timeout for MPI_Wait"</a>
<li><strong>Reply:</strong> <a href="11450.php">Douglas Guptill: "Re: [OMPI users] Mimicking timeout for MPI_Wait"</a>
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

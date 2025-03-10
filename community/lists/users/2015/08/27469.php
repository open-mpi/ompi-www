<?
$subject_val = "Re: [OMPI users] Oversubscription disabled by default in OpenMPI	1.8.7";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Aug 14 09:31:36 2015" -->
<!-- isoreceived="20150814133136" -->
<!-- sent="Fri, 14 Aug 2015 13:31:31 +0000" -->
<!-- isosent="20150814133131" -->
<!-- name="Schlottke-Lakemper, Michael" -->
<!-- email="m.schlottke-lakemper_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Oversubscription disabled by default in OpenMPI	1.8.7" -->
<!-- id="4F4833E6-C07C-4ED9-9D32-61A0DF1217F4_at_aia.rwth-aachen.de" -->
<!-- charset="utf-8" -->
<!-- inreplyto="CAMD57ocw_+TP8ffFOWhDxrtTphU1q_brhSPeuskwATHq6OJa+A_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Oversubscription disabled by default in OpenMPI	1.8.7<br>
<strong>From:</strong> Schlottke-Lakemper, Michael (<em>m.schlottke-lakemper_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-08-14 09:31:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27470.php">Khalid Hasanov: "[OMPI users] open mpi 1.8.6. MPI_T"</a>
<li><strong>Previous message:</strong> <a href="27468.php">&#195;&#133;ke Sandgren: "Re: [OMPI users] Bug in ompi/errhandler/errcode.h (1.8.6)?"</a>
<li><strong>In reply to:</strong> <a href="27467.php">Ralph Castain: "Re: [OMPI users] Oversubscription disabled by default in OpenMPI 1.8.7"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Ralph,
<br>

<br>
Thanks a lot for the fast reply and the clarification. We&#226;&#128;&#153;ve re-added the parameter to our MCA site configuration file.
<br>

<br>
Michael
<br>

<br>
On 14 Aug 2015, at 15:00 , Ralph Castain &lt;rhc_at_[hidden]&lt;mailto:rhc_at_[hidden]&gt;&gt; wrote:
<br>

<br>
During the 1.7 series, we changed things at the request of system admins so that we don't oversubscribe allocations given to us by resource managers unless specifically told to do so.
<br>

<br>

<br>
On Fri, Aug 14, 2015 at 12:52 AM, Schlottke-Lakemper, Michael &lt;m.schlottke-lakemper_at_[hidden]&lt;mailto:m.schlottke-lakemper_at_[hidden]&gt;&gt; wrote:
<br>
Hi folks,
<br>

<br>
It seems like oversubscription is disabled by default in OpenMPI 1.8.7, at least when running on a PBS/torque-managed node. When I run a program in parallel on a node with 8 cores, I am not able to use more than 8 ranks:
<br>

<br>
<span class="quotelev1">&gt; mic_at_aia272:~&gt; mpirun --display-allocation -n 9 hostname
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ======================   ALLOCATED NODES   ======================
</span><br>
<span class="quotelev1">&gt;       aia272: slots=8 max_slots=0 slots_inuse=0 state=UP
</span><br>
<span class="quotelev1">&gt; =================================================================
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; There are not enough slots available in the system to satisfy the 9 slots
</span><br>
<span class="quotelev1">&gt; that were requested by the application:
</span><br>
<span class="quotelev1">&gt;  hostname
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Either request fewer slots for your application, or make more slots available
</span><br>
<span class="quotelev1">&gt; for use.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>

<br>

<br>
However, if I specifically enable oversubscription through the rmaps_base_oversubscribe setting, it works again:
<br>

<br>
<span class="quotelev1">&gt; mic_at_aia272:~&gt; mpirun --display-allocation --mca rmaps_base_oversubscribe 1 -n 9 hostname
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ======================   ALLOCATED NODES   ======================
</span><br>
<span class="quotelev1">&gt;       aia272: slots=8 max_slots=0 slots_inuse=0 state=UP
</span><br>
<span class="quotelev1">&gt; =================================================================
</span><br>
<span class="quotelev1">&gt; aia272
</span><br>
<span class="quotelev1">&gt; aia272
</span><br>
<span class="quotelev1">&gt; aia272
</span><br>
<span class="quotelev1">&gt; aia272
</span><br>
<span class="quotelev1">&gt; aia272
</span><br>
<span class="quotelev1">&gt; aia272
</span><br>
<span class="quotelev1">&gt; aia272
</span><br>
<span class="quotelev1">&gt; aia272
</span><br>
<span class="quotelev1">&gt; aia272
</span><br>

<br>
Now I am wondering, is this a bug or a feature? We recently upgraded from 1.6.x to 1.8.7, and as far as I remember, in 1.6.x oversubscription was enabled by default.
<br>

<br>
Regards,
<br>

<br>
Michael
<br>

<br>
P.S.: In ompi_info, both rmaps_base_no_oversubscribe and rmaps_base_oversubscribe are reported as &#226;&#128;&#156;false&#226;&#128;&#157;. Our prefix/etc/openmpi-mca-params.conf file is empty.
<br>
_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;
<br>
Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/08/27466.php">http://www.open-mpi.org/community/lists/users/2015/08/27466.php</a>
<br>

<br>
_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;
<br>
Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/08/27467.php">http://www.open-mpi.org/community/lists/users/2015/08/27467.php</a>
<br>

<br>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-27469/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27470.php">Khalid Hasanov: "[OMPI users] open mpi 1.8.6. MPI_T"</a>
<li><strong>Previous message:</strong> <a href="27468.php">&#195;&#133;ke Sandgren: "Re: [OMPI users] Bug in ompi/errhandler/errcode.h (1.8.6)?"</a>
<li><strong>In reply to:</strong> <a href="27467.php">Ralph Castain: "Re: [OMPI users] Oversubscription disabled by default in OpenMPI 1.8.7"</a>
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

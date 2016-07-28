<?
$subject_val = "Re: [OMPI users] Oversubscription disabled by default in OpenMPI 1.8.7";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Aug 14 09:00:50 2015" -->
<!-- isoreceived="20150814130050" -->
<!-- sent="Fri, 14 Aug 2015 06:00:48 -0700" -->
<!-- isosent="20150814130048" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Oversubscription disabled by default in OpenMPI 1.8.7" -->
<!-- id="CAMD57ocw_+TP8ffFOWhDxrtTphU1q_brhSPeuskwATHq6OJa+A_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="AE4F0C58-37C1-412F-9F09-9870AB3C9F6C_at_aia.rwth-aachen.de" -->
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
<strong>Subject:</strong> Re: [OMPI users] Oversubscription disabled by default in OpenMPI 1.8.7<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-08-14 09:00:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27468.php">Åke Sandgren: "Re: [OMPI users] Bug in ompi/errhandler/errcode.h (1.8.6)?"</a>
<li><strong>Previous message:</strong> <a href="27466.php">Schlottke-Lakemper, Michael: "[OMPI users] Oversubscription disabled by default in OpenMPI 1.8.7"</a>
<li><strong>In reply to:</strong> <a href="27466.php">Schlottke-Lakemper, Michael: "[OMPI users] Oversubscription disabled by default in OpenMPI 1.8.7"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27469.php">Schlottke-Lakemper, Michael: "Re: [OMPI users] Oversubscription disabled by default in OpenMPI	1.8.7"</a>
<li><strong>Reply:</strong> <a href="27469.php">Schlottke-Lakemper, Michael: "Re: [OMPI users] Oversubscription disabled by default in OpenMPI	1.8.7"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
During the 1.7 series, we changed things at the request of system admins so
<br>
that we don't oversubscribe allocations given to us by resource managers
<br>
unless specifically told to do so.
<br>
<p><p>On Fri, Aug 14, 2015 at 12:52 AM, Schlottke-Lakemper, Michael &lt;
<br>
m.schlottke-lakemper_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi folks,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It seems like oversubscription is disabled by default in OpenMPI 1.8.7, at
</span><br>
<span class="quotelev1">&gt; least when running on a PBS/torque-managed node. When I run a program in
</span><br>
<span class="quotelev1">&gt; parallel on a node with 8 cores, I am not able to use more than 8 ranks:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; mic_at_aia272:~&gt; mpirun --display-allocation -n 9 hostname
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; ======================   ALLOCATED NODES   ======================
</span><br>
<span class="quotelev2">&gt; &gt;       aia272: slots=8 max_slots=0 slots_inuse=0 state=UP
</span><br>
<span class="quotelev2">&gt; &gt; =================================================================
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt; There are not enough slots available in the system to satisfy the 9 slots
</span><br>
<span class="quotelev2">&gt; &gt; that were requested by the application:
</span><br>
<span class="quotelev2">&gt; &gt;  hostname
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Either request fewer slots for your application, or make more slots
</span><br>
<span class="quotelev1">&gt; available
</span><br>
<span class="quotelev2">&gt; &gt; for use.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; However, if I specifically enable oversubscription through the
</span><br>
<span class="quotelev1">&gt; rmaps_base_oversubscribe setting, it works again:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; mic_at_aia272:~&gt; mpirun --display-allocation --mca
</span><br>
<span class="quotelev1">&gt; rmaps_base_oversubscribe 1 -n 9 hostname
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; ======================   ALLOCATED NODES   ======================
</span><br>
<span class="quotelev2">&gt; &gt;       aia272: slots=8 max_slots=0 slots_inuse=0 state=UP
</span><br>
<span class="quotelev2">&gt; &gt; =================================================================
</span><br>
<span class="quotelev2">&gt; &gt; aia272
</span><br>
<span class="quotelev2">&gt; &gt; aia272
</span><br>
<span class="quotelev2">&gt; &gt; aia272
</span><br>
<span class="quotelev2">&gt; &gt; aia272
</span><br>
<span class="quotelev2">&gt; &gt; aia272
</span><br>
<span class="quotelev2">&gt; &gt; aia272
</span><br>
<span class="quotelev2">&gt; &gt; aia272
</span><br>
<span class="quotelev2">&gt; &gt; aia272
</span><br>
<span class="quotelev2">&gt; &gt; aia272
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Now I am wondering, is this a bug or a feature? We recently upgraded from
</span><br>
<span class="quotelev1">&gt; 1.6.x to 1.8.7, and as far as I remember, in 1.6.x oversubscription was
</span><br>
<span class="quotelev1">&gt; enabled by default.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Michael
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; P.S.: In ompi_info, both rmaps_base_no_oversubscribe and
</span><br>
<span class="quotelev1">&gt; rmaps_base_oversubscribe are reported as &#226;&#128;&#156;false&#226;&#128;&#157;. Our
</span><br>
<span class="quotelev1">&gt; prefix/etc/openmpi-mca-params.conf file is empty.
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/08/27466.php">http://www.open-mpi.org/community/lists/users/2015/08/27466.php</a>
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-27467/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27468.php">Åke Sandgren: "Re: [OMPI users] Bug in ompi/errhandler/errcode.h (1.8.6)?"</a>
<li><strong>Previous message:</strong> <a href="27466.php">Schlottke-Lakemper, Michael: "[OMPI users] Oversubscription disabled by default in OpenMPI 1.8.7"</a>
<li><strong>In reply to:</strong> <a href="27466.php">Schlottke-Lakemper, Michael: "[OMPI users] Oversubscription disabled by default in OpenMPI 1.8.7"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27469.php">Schlottke-Lakemper, Michael: "Re: [OMPI users] Oversubscription disabled by default in OpenMPI	1.8.7"</a>
<li><strong>Reply:</strong> <a href="27469.php">Schlottke-Lakemper, Michael: "Re: [OMPI users] Oversubscription disabled by default in OpenMPI	1.8.7"</a>
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

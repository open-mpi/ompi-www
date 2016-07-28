<?
$subject_val = "Re: [OMPI users] Performance question about OpenMPI and MVAPICH2	on	IB";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Aug  7 07:18:28 2009" -->
<!-- isoreceived="20090807111828" -->
<!-- sent="Fri, 7 Aug 2009 16:51:05 +0530" -->
<!-- isosent="20090807112105" -->
<!-- name="neeraj_at_[hidden]" -->
<!-- email="neeraj_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Performance question about OpenMPI and MVAPICH2	on	IB" -->
<!-- id="OF62A95E62.D6758124-ON6525760B.003E2874-6525760B.003E1A66_at_crlindia.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="4A7C0967.9070206_at_sun.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Performance question about OpenMPI and MVAPICH2	on	IB<br>
<strong>From:</strong> <a href="mailto:neeraj_at_[hidden]?Subject=Re:%20[OMPI%20users]%20Performance%20question%20about%20OpenMPI%20and%20MVAPICH2	on	IB"><em>neeraj_at_[hidden]</em></a><br>
<strong>Date:</strong> 2009-08-07 07:21:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10240.php">neeraj_at_[hidden]: "Re: [OMPI users] Performance question about OpenMPI and MVAPICH2 on	IB"</a>
<li><strong>Previous message:</strong> <a href="10238.php">Terry Dontje: "Re: [OMPI users] Performance question about OpenMPI and MVAPICH2 on	IB"</a>
<li><strong>In reply to:</strong> <a href="10238.php">Terry Dontje: "Re: [OMPI users] Performance question about OpenMPI and MVAPICH2 on	IB"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10243.php">Craig Tierney: "Re: [OMPI users] Performance question about OpenMPI and MVAPICH2 on	IB"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Terry,
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;I feel hierarchical collectives are slower compare to tuned one. I 
<br>
had done some benchmark in the past specific to collectives, and this is 
<br>
what i feel based on my observation.
<br>
<p>Regards
<br>
<p>Neeraj Chourasia (MTS)
<br>
Computational Research Laboratories Ltd.
<br>
(A wholly Owned Subsidiary of TATA SONS Ltd)
<br>
B-101, ICC Trade Towers, Senapati Bapat Road
<br>
Pune 411016 (Mah) INDIA
<br>
(O) +91-20-6620 9863  (Fax) +91-20-6620 9862
<br>
M: +91.9225520634
<br>
<p><p><p><p>Terry Dontje &lt;Terry.Dontje_at_[hidden]&gt; 
<br>
Sent by: users-bounces_at_[hidden]
<br>
08/07/2009 04:35 PM
<br>
Please respond to
<br>
Open MPI Users &lt;users_at_[hidden]&gt;
<br>
<p><p>To
<br>
users_at_[hidden]
<br>
cc
<br>
<p>Subject
<br>
Re: [OMPI users] Performance question about OpenMPI and MVAPICH2        on 
<br>
IB
<br>
<p><p><p><p><p><p>Craig,
<br>
<p>Did your affinity script bind the processes per socket or linearly to 
<br>
cores.  If the former you'll want to look at using rankfiles and place the 
<br>
ranks based on sockets.  TWe have found this especially useful if you are 
<br>
not running fully subscribed on your machines.
<br>
<p>Also, if you think the main issue is collectives performance you may want 
<br>
to try using the hierarchical and SM collectives.  However, be forewarned 
<br>
we are right now trying to pound out some errors with these modules.  To 
<br>
enable them you add the following parameters &quot;--mca coll_hierarch_priority 
<br>
100 --mca coll_sm_priority 100&quot;.  We would be very interested in any 
<br>
results you get (failures, improvements, non-improvements).
<br>
<p>thanks,
<br>
<p>--td
<br>
<p><span class="quotelev1">&gt; Message: 4
</span><br>
<span class="quotelev1">&gt; Date: Thu, 06 Aug 2009 17:03:08 -0600
</span><br>
<span class="quotelev1">&gt; From: Craig Tierney &lt;Craig.Tierney_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] Performance question about OpenMPI and
</span><br>
<span class="quotelev1">&gt;                MVAPICH2 on             IB
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Message-ID: &lt;4A7B612C.8070501_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Content-Type: text/plain; charset=ISO-8859-1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; A followup....
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Part of problem was affinity.  I had written a script to do processor
</span><br>
<span class="quotelev1">&gt; and memory affinity (which works fine with MVAPICH2).  It is an
</span><br>
<span class="quotelev1">&gt; idea that I got from TACC.  However, the script didn't seem to
</span><br>
<span class="quotelev1">&gt; work correctly with OpenMPI (or I still have bugs).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Setting --mca mpi_paffinity_alone 1 made things better.  However,
</span><br>
<span class="quotelev1">&gt; the performance is still not as good:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Cores   Mvapich2    Openmpi
</span><br>
<span class="quotelev1">&gt; ---------------------------
</span><br>
<span class="quotelev1">&gt;    8      17.3        17.3
</span><br>
<span class="quotelev1">&gt;   16      31.7        31.5
</span><br>
<span class="quotelev1">&gt;   32      62.9        62.8
</span><br>
<span class="quotelev1">&gt;   64     110.8       108.0
</span><br>
<span class="quotelev1">&gt;  128     219.2       201.4
</span><br>
<span class="quotelev1">&gt;  256     384.5       342.7
</span><br>
<span class="quotelev1">&gt;  512     687.2       537.6
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The performance number is GFlops (so larger is better).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The first few numbers show that the executable is the right
</span><br>
<span class="quotelev1">&gt; speed.  I verified that IB is being used by using OMB and
</span><br>
<span class="quotelev1">&gt; checking latency and bandwidth.  Those numbers are what I
</span><br>
<span class="quotelev1">&gt; expect (3GB/s, 1.5mu/s for QDR).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; However, the Openmpi version is not scaling as well.  Any
</span><br>
<span class="quotelev1">&gt; ideas on why that might be the case?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Craig
</span><br>
<p>_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
<p><p>=====-----=====-----=====
<br>
<p><p><p>Notice: The information contained in this e-mail
<br>
message and/or attachments to it may contain 
<br>
confidential or privileged information. If you are 
<br>
not the intended recipient, any dissemination, use, 
<br>
review, distribution, printing or copying of the 
<br>
information contained in this e-mail message 
<br>
and/or attachments to it are strictly prohibited. If 
<br>
you have received this communication in error, 
<br>
please notify us by reply e-mail or telephone and 
<br>
immediately and permanently delete the message 
<br>
and any attachments. 
<br>
<p>Internet communications cannot be guaranteed to be timely,
<br>
secure, error or virus-free. The sender does not accept liability
<br>
for any errors or omissions.Thank you
<br>
<p>=====-----=====-----=====
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-10239/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10240.php">neeraj_at_[hidden]: "Re: [OMPI users] Performance question about OpenMPI and MVAPICH2 on	IB"</a>
<li><strong>Previous message:</strong> <a href="10238.php">Terry Dontje: "Re: [OMPI users] Performance question about OpenMPI and MVAPICH2 on	IB"</a>
<li><strong>In reply to:</strong> <a href="10238.php">Terry Dontje: "Re: [OMPI users] Performance question about OpenMPI and MVAPICH2 on	IB"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10243.php">Craig Tierney: "Re: [OMPI users] Performance question about OpenMPI and MVAPICH2 on	IB"</a>
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

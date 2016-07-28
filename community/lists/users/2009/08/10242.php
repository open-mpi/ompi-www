<?
$subject_val = "Re: [OMPI users] Performance question about OpenMPI and MVAPICH2	on	IB";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Aug  7 08:27:54 2009" -->
<!-- isoreceived="20090807122754" -->
<!-- sent="Fri, 7 Aug 2009 18:00:33 +0530" -->
<!-- isosent="20090807123033" -->
<!-- name="neeraj_at_[hidden]" -->
<!-- email="neeraj_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Performance question about OpenMPI and MVAPICH2	on	IB" -->
<!-- id="OF1C903349.E1B5C6EA-ON6525760B.00443214-6525760B.00447668_at_crlindia.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="4A7C12B5.3070105_at_sun.com" -->
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
<strong>Date:</strong> 2009-08-07 08:30:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10243.php">Craig Tierney: "Re: [OMPI users] Performance question about OpenMPI and MVAPICH2 on	IB"</a>
<li><strong>Previous message:</strong> <a href="10241.php">Terry Dontje: "Re: [OMPI users] Performance question about OpenMPI and MVAPICH2 on	IB"</a>
<li><strong>In reply to:</strong> <a href="10241.php">Terry Dontje: "Re: [OMPI users] Performance question about OpenMPI and MVAPICH2 on	IB"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10252.php">Gus Correa: "Re: [OMPI users] Performance question about OpenMPI and	MVAPICH2 on	IB"</a>
<li><strong>Reply:</strong> <a href="10252.php">Gus Correa: "Re: [OMPI users] Performance question about OpenMPI and	MVAPICH2 on	IB"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Terry,
<br>
&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;I had tested mostly MPI_Bcast, MPI_Reduce, MPI_Gather kind of MPI 
<br>
with openmpi-1.3 and hierarchical option enabled.In all these, i found 
<br>
results slower than regular tuned collectives.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;We have HP Blade with intel clovertown processor(two quad core) 
<br>
connected with DDR infiniband clos network.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Results were tested on 12-16 nodes with 8 mpi process each node.
<br>
<p><p>Regards
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
08/07/2009 05:15 PM
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
<p><p><p><p><p><p>Hi Neeraj,
<br>
<p>Were there specific collectives that were slower?  Also what kind of 
<br>
cluster were you running on?  How many nodes and cores per node?
<br>
<p>thanks,
<br>
<p>--td
<br>
<span class="quotelev1">&gt; Message: 3
</span><br>
<span class="quotelev1">&gt; Date: Fri, 7 Aug 2009 16:51:05 +0530
</span><br>
<span class="quotelev1">&gt; From: neeraj_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] Performance question about OpenMPI and
</span><br>
<span class="quotelev1">&gt;                MVAPICH2                on              IB
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Cc: users_at_[hidden], users-bounces_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Message-ID:
</span><br>
<span class="quotelev1">&gt; &lt;OF62A95E62.D6758124-ON6525760B.003E2874-6525760B.003E1A66_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Content-Type: text/plain; charset=&quot;us-ascii&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi Terry,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         I feel hierarchical collectives are slower compare to tuned one. 
</span><br>
I 
<br>
<span class="quotelev1">&gt; had done some benchmark in the past specific to collectives, and this is 
</span><br>
<p><span class="quotelev1">&gt; what i feel based on my observation.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Regards
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Neeraj Chourasia (MTS)
</span><br>
<span class="quotelev1">&gt; Computational Research Laboratories Ltd.
</span><br>
<span class="quotelev1">&gt; (A wholly Owned Subsidiary of TATA SONS Ltd)
</span><br>
<span class="quotelev1">&gt; B-101, ICC Trade Towers, Senapati Bapat Road
</span><br>
<span class="quotelev1">&gt; Pune 411016 (Mah) INDIA
</span><br>
<span class="quotelev1">&gt; (O) +91-20-6620 9863  (Fax) +91-20-6620 9862
</span><br>
<span class="quotelev1">&gt; M: +91.9225520634
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-10242/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10243.php">Craig Tierney: "Re: [OMPI users] Performance question about OpenMPI and MVAPICH2 on	IB"</a>
<li><strong>Previous message:</strong> <a href="10241.php">Terry Dontje: "Re: [OMPI users] Performance question about OpenMPI and MVAPICH2 on	IB"</a>
<li><strong>In reply to:</strong> <a href="10241.php">Terry Dontje: "Re: [OMPI users] Performance question about OpenMPI and MVAPICH2 on	IB"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10252.php">Gus Correa: "Re: [OMPI users] Performance question about OpenMPI and	MVAPICH2 on	IB"</a>
<li><strong>Reply:</strong> <a href="10252.php">Gus Correa: "Re: [OMPI users] Performance question about OpenMPI and	MVAPICH2 on	IB"</a>
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

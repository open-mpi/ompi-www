<?
$subject_val = "Re: [OMPI users] Performance question about OpenMPI and	MVAPICH2 on	IB";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Aug  7 12:50:56 2009" -->
<!-- isoreceived="20090807165056" -->
<!-- sent="Fri, 07 Aug 2009 12:50:46 -0400" -->
<!-- isosent="20090807165046" -->
<!-- name="Gus Correa" -->
<!-- email="gus_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Performance question about OpenMPI and	MVAPICH2 on	IB" -->
<!-- id="4A7C5B66.5060706_at_ldeo.columbia.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="OF1C903349.E1B5C6EA-ON6525760B.00443214-6525760B.00447668_at_crlindia.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Performance question about OpenMPI and	MVAPICH2 on	IB<br>
<strong>From:</strong> Gus Correa (<em>gus_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-08-07 12:50:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10253.php">Kenneth Yoshimoto: "[OMPI users] bin/orted: Command not found."</a>
<li><strong>Previous message:</strong> <a href="10251.php">Yann JOBIC: "Re: [OMPI users] pipes system limit"</a>
<li><strong>In reply to:</strong> <a href="10242.php">neeraj_at_[hidden]: "Re: [OMPI users] Performance question about OpenMPI and MVAPICH2	on	IB"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10246.php">Terry Dontje: "Re: [OMPI users] Performance question about OpenMPI and MVAPICH2 on	IB"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Craig, Terry, Neeraj, list
<br>
<p>Craig:  A fellow here runs WRF.
<br>
I grep the code and there is plenty of collectives there:
<br>
MPI_[All]Gather[v], MPI_[All]Reduce, etc.
<br>
Domain decomposition code like WRF, MITgcm, and other atmosphere
<br>
and ocean codes has point-to-point communication to exchange
<br>
subdomain boundaries, but also collective operations to calculate
<br>
sums, etc, in various types of PDE (matrix) solvers that require
<br>
global information.
<br>
<p>Terry: On the MITgcm, the apparent culprit is MPI_Allreduce,
<br>
which seems to be bad on **small** messages (rather than big ones).
<br>
This is the same behavior pattern that was reported here on May,
<br>
regarding MPI_Alltoall, by Roman Martonak, a list subscriber using a 
<br>
computational chemistry package on an IB cluster:
<br>
<p><a href="http://www.open-mpi.org/community/lists/users/2009/07/10045.php">http://www.open-mpi.org/community/lists/users/2009/07/10045.php</a>
<br>
<a href="http://www.open-mpi.org/community/lists/users/2009/05/9419.php">http://www.open-mpi.org/community/lists/users/2009/05/9419.php</a>
<br>
<p>At that point Pavel Shamis, Peter Kjellstrom, and others gave
<br>
very good suggestions, but they were only focused on MPI_Alltoall.
<br>
No other collectives were considered.
<br>
<p>All:  Any insights on how to tune MPI_Allreduce?
<br>
Maybe a hint on the other collectives also?
<br>
Any benchmark tool available that one can use to find the
<br>
sweet spot of each collective?
<br>
<p>Many thanks,
<br>
Gus Correa
<br>
---------------------------------------------------------------------
<br>
Gustavo Correa
<br>
Lamont-Doherty Earth Observatory - Columbia University
<br>
Palisades, NY, 10964-8000 - USA
<br>
---------------------------------------------------------------------
<br>
<p><p><p><p>neeraj_at_[hidden] wrote:
<br>
<span class="quotelev1">&gt; Hi Terry,
</span><br>
<span class="quotelev1">&gt;        
</span><br>
<span class="quotelev1">&gt;         I had tested mostly MPI_Bcast, MPI_Reduce, MPI_Gather kind of 
</span><br>
<span class="quotelev1">&gt; MPI with openmpi-1.3 and hierarchical option enabled.In all these, i 
</span><br>
<span class="quotelev1">&gt; found results slower than regular tuned collectives.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;         We have HP Blade with intel clovertown processor(two quad core) 
</span><br>
<span class="quotelev1">&gt; connected with DDR infiniband clos network.
</span><br>
<span class="quotelev1">&gt;         Results were tested on 12-16 nodes with 8 mpi process each node.
</span><br>
<span class="quotelev1">&gt; 
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
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; *Terry Dontje &lt;Terry.Dontje_at_[hidden]&gt;*
</span><br>
<span class="quotelev1">&gt; Sent by: users-bounces_at_[hidden]
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 08/07/2009 05:15 PM
</span><br>
<span class="quotelev1">&gt; Please respond to
</span><br>
<span class="quotelev1">&gt; Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 	
</span><br>
<span class="quotelev1">&gt; To
</span><br>
<span class="quotelev1">&gt; 	users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; cc
</span><br>
<span class="quotelev1">&gt; 	
</span><br>
<span class="quotelev1">&gt; Subject
</span><br>
<span class="quotelev1">&gt; 	Re: [OMPI users] Performance question about OpenMPI and MVAPICH2       
</span><br>
<span class="quotelev1">&gt;  on        IB
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 	
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hi Neeraj,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Were there specific collectives that were slower?  Also what kind of 
</span><br>
<span class="quotelev1">&gt; cluster were you running on?  How many nodes and cores per node?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; thanks,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --td
</span><br>
<span class="quotelev2">&gt;  &gt; Message: 3
</span><br>
<span class="quotelev2">&gt;  &gt; Date: Fri, 7 Aug 2009 16:51:05 +0530
</span><br>
<span class="quotelev2">&gt;  &gt; From: neeraj_at_[hidden]
</span><br>
<span class="quotelev2">&gt;  &gt; Subject: Re: [OMPI users] Performance question about OpenMPI and
</span><br>
<span class="quotelev2">&gt;  &gt;                  MVAPICH2                 on                 IB
</span><br>
<span class="quotelev2">&gt;  &gt; To: Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;  &gt; Cc: users_at_[hidden], users-bounces_at_[hidden]
</span><br>
<span class="quotelev2">&gt;  &gt; Message-ID:
</span><br>
<span class="quotelev2">&gt;  &gt;                 
</span><br>
<span class="quotelev1">&gt;  &lt;OF62A95E62.D6758124-ON6525760B.003E2874-6525760B.003E1A66_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;  &gt;                  
</span><br>
<span class="quotelev2">&gt;  &gt; Content-Type: text/plain; charset=&quot;us-ascii&quot;
</span><br>
<span class="quotelev2">&gt;  &gt;
</span><br>
<span class="quotelev2">&gt;  &gt; Hi Terry,
</span><br>
<span class="quotelev2">&gt;  &gt;
</span><br>
<span class="quotelev2">&gt;  &gt;         I feel hierarchical collectives are slower compare to tuned 
</span><br>
<span class="quotelev1">&gt; one. I
</span><br>
<span class="quotelev2">&gt;  &gt; had done some benchmark in the past specific to collectives, and this is
</span><br>
<span class="quotelev2">&gt;  &gt; what i feel based on my observation.
</span><br>
<span class="quotelev2">&gt;  &gt;
</span><br>
<span class="quotelev2">&gt;  &gt; Regards
</span><br>
<span class="quotelev2">&gt;  &gt;
</span><br>
<span class="quotelev2">&gt;  &gt; Neeraj Chourasia (MTS)
</span><br>
<span class="quotelev2">&gt;  &gt; Computational Research Laboratories Ltd.
</span><br>
<span class="quotelev2">&gt;  &gt; (A wholly Owned Subsidiary of TATA SONS Ltd)
</span><br>
<span class="quotelev2">&gt;  &gt; B-101, ICC Trade Towers, Senapati Bapat Road
</span><br>
<span class="quotelev2">&gt;  &gt; Pune 411016 (Mah) INDIA
</span><br>
<span class="quotelev2">&gt;  &gt; (O) +91-20-6620 9863  (Fax) +91-20-6620 9862
</span><br>
<span class="quotelev2">&gt;  &gt; M: +91.9225520634
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; =====-----=====-----===== Notice: The information contained in this 
</span><br>
<span class="quotelev1">&gt; e-mail message and/or attachments to it may contain confidential or 
</span><br>
<span class="quotelev1">&gt; privileged information. If you are not the intended recipient, any 
</span><br>
<span class="quotelev1">&gt; dissemination, use, review, distribution, printing or copying of the 
</span><br>
<span class="quotelev1">&gt; information contained in this e-mail message and/or attachments to it 
</span><br>
<span class="quotelev1">&gt; are strictly prohibited. If you have received this communication in 
</span><br>
<span class="quotelev1">&gt; error, please notify us by reply e-mail or telephone and immediately and 
</span><br>
<span class="quotelev1">&gt; permanently delete the message and any attachments. Internet 
</span><br>
<span class="quotelev1">&gt; communications cannot be guaranteed to be timely, secure, error or 
</span><br>
<span class="quotelev1">&gt; virus-free. The sender does not accept liability for any errors or 
</span><br>
<span class="quotelev1">&gt; omissions.Thank you =====-----=====-----=====
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10253.php">Kenneth Yoshimoto: "[OMPI users] bin/orted: Command not found."</a>
<li><strong>Previous message:</strong> <a href="10251.php">Yann JOBIC: "Re: [OMPI users] pipes system limit"</a>
<li><strong>In reply to:</strong> <a href="10242.php">neeraj_at_[hidden]: "Re: [OMPI users] Performance question about OpenMPI and MVAPICH2	on	IB"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10246.php">Terry Dontje: "Re: [OMPI users] Performance question about OpenMPI and MVAPICH2 on	IB"</a>
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

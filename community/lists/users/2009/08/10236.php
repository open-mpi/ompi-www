<?
$subject_val = "Re: [OMPI users] Performance question about OpenMPI and MVAPICH2 on	IB";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Aug  7 00:20:19 2009" -->
<!-- isoreceived="20090807042019" -->
<!-- sent="Fri, 7 Aug 2009 09:07:28 +0530" -->
<!-- isosent="20090807033728" -->
<!-- name="neeraj_at_[hidden]" -->
<!-- email="neeraj_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Performance question about OpenMPI and MVAPICH2 on	IB" -->
<!-- id="OFDB8A35C5.AF1A27B5-ON6525760B.00133C5D-6525760B.0013A8B0_at_crlindia.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="4A7B62BE.3020607_at_noaa.gov" -->
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
<strong>Subject:</strong> Re: [OMPI users] Performance question about OpenMPI and MVAPICH2 on	IB<br>
<strong>From:</strong> <a href="mailto:neeraj_at_[hidden]?Subject=Re:%20[OMPI%20users]%20Performance%20question%20about%20OpenMPI%20and%20MVAPICH2%20on	IB"><em>neeraj_at_[hidden]</em></a><br>
<strong>Date:</strong> 2009-08-06 23:37:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10237.php">Terry Frankcombe: "[OMPI users] Automated tuning tool"</a>
<li><strong>Previous message:</strong> <a href="10235.php">vipin kumar: "Re: [OMPI users] Bus Error (7) on PS3 running HPL (OpenMPI 1.2.8)"</a>
<li><strong>In reply to:</strong> <a href="10232.php">Craig Tierney: "Re: [OMPI users] Performance question about OpenMPI and MVAPICH2 on IB"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10237.php">Terry Frankcombe: "[OMPI users] Automated tuning tool"</a>
<li><strong>Reply:</strong> <a href="10237.php">Terry Frankcombe: "[OMPI users] Automated tuning tool"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Craig,
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;WRF has pattern of talking to nearest neighbours like p+1, p-1, 
<br>
p+3 and p-3, where p is the particular process. But in addition to that, 
<br>
it also uses collective calls like MPI_Bcast, MPI_AlltoAllv, 
<br>
MPI_Allgather, MPI_Gather, MPI_Gatherv, MPI_Scatterv.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Apparently openmpi-1.3 series are not better in terms of 
<br>
collectives as compare to its 1.2 series. But there are lot of parameters 
<br>
which has been added to tune collectives like giving dynamic file option 
<br>
which would override openmpi default selection of algorithm for particular 
<br>
collective operation.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Since collectives depend heavily on your network architecture and 
<br>
message size, i would like you to first fine tune your collectives on your 
<br>
network fabric before running any scientific application.
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
<p><p><p><p>Craig Tierney &lt;Craig.Tierney_at_[hidden]&gt; 
<br>
Sent by: users-bounces_at_[hidden]
<br>
08/07/2009 04:43 AM
<br>
Please respond to
<br>
Open MPI Users &lt;users_at_[hidden]&gt;
<br>
<p><p>To
<br>
Open MPI Users &lt;users_at_[hidden]&gt;
<br>
cc
<br>
<p>Subject
<br>
Re: [OMPI users] Performance question about OpenMPI and MVAPICH2 on     IB
<br>
<p><p><p><p><p><p>Gus Correa wrote:
<br>
<span class="quotelev1">&gt; Hi Craig, list
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I suppose WRF uses MPI collective calls (MPI_Reduce,
</span><br>
<span class="quotelev1">&gt; MPI_Bcast, MPI_Alltoall etc),
</span><br>
<span class="quotelev1">&gt; just like the climate models we run here do.
</span><br>
<span class="quotelev1">&gt; A recursive grep on the source code will tell.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p>I will check this out.  I am not the WRF expert, but
<br>
I was under the impression that most weather models are
<br>
nearest neighbor communications, not collectives.
<br>
<p><p><span class="quotelev1">&gt; If that is the case, you may need to tune the collectives dynamically.
</span><br>
<span class="quotelev1">&gt; We are experimenting with tuned collectives here also.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Specifically, we had a scaling problem with the MITgcm
</span><br>
<span class="quotelev1">&gt; (also running on an IB cluster)
</span><br>
<span class="quotelev1">&gt; that is probably due to collectives.
</span><br>
<span class="quotelev1">&gt; Similar problems were reported on this list before,
</span><br>
<span class="quotelev1">&gt; with computational chemistry software.
</span><br>
<span class="quotelev1">&gt; See these threads:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2009/07/10045.php">http://www.open-mpi.org/community/lists/users/2009/07/10045.php</a>
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2009/05/9419.php">http://www.open-mpi.org/community/lists/users/2009/05/9419.php</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If WRF outputs timing information, particularly the time spent on MPI
</span><br>
<span class="quotelev1">&gt; routines, you may also want to compare how the OpenMPI and
</span><br>
<span class="quotelev1">&gt; MVAPICH versions fare w.r.t. MPI collectives.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I hope this helps.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p>I will look into this.  Thanks for the ideas.
<br>
<p>Craig
<br>
<p><p><p><span class="quotelev1">&gt; Gus Correa
</span><br>
<span class="quotelev1">&gt; ---------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; Gustavo Correa
</span><br>
<span class="quotelev1">&gt; Lamont-Doherty Earth Observatory - Columbia University
</span><br>
<span class="quotelev1">&gt; Palisades, NY, 10964-8000 - USA
</span><br>
<span class="quotelev1">&gt; ---------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Craig Tierney wrote:
</span><br>
<span class="quotelev2">&gt;&gt; I am running openmpi-1.3.3 on my cluster which is using
</span><br>
<span class="quotelev2">&gt;&gt; OFED-1.4.1 for Infiniband support.  I am comparing performance
</span><br>
<span class="quotelev2">&gt;&gt; between this version of OpenMPI and Mvapich2, and seeing a
</span><br>
<span class="quotelev2">&gt;&gt; very large difference in performance.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The code I am testing is WRF v3.0.1.  I am running the
</span><br>
<span class="quotelev2">&gt;&gt; 12km benchmark.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The two builds are the exact same codes and configuration
</span><br>
<span class="quotelev2">&gt;&gt; files.  All I did different was use modules to switch versions
</span><br>
<span class="quotelev2">&gt;&gt; of MPI, and recompiled the code.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Performance:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Cores   Mvapich2    Openmpi
</span><br>
<span class="quotelev2">&gt;&gt; ---------------------------
</span><br>
<span class="quotelev2">&gt;&gt;    8      17.3        13.9
</span><br>
<span class="quotelev2">&gt;&gt;   16      31.7        25.9
</span><br>
<span class="quotelev2">&gt;&gt;   32      62.9        51.6
</span><br>
<span class="quotelev2">&gt;&gt;   64     110.8        92.8
</span><br>
<span class="quotelev2">&gt;&gt;  128     219.2       189.4
</span><br>
<span class="quotelev2">&gt;&gt;  256     384.5       317.8
</span><br>
<span class="quotelev2">&gt;&gt;  512     687.2       516.7
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The performance number is GFlops (so larger is better).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I am calling openmpi as:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /opt/openmpi/1.3.3-intel/bin/mpirun  --mca plm_rsh_disable_qrsh 1
</span><br>
<span class="quotelev2">&gt;&gt; --mca btl openib,sm,self \
</span><br>
<span class="quotelev2">&gt;&gt; -machinefile /tmp/6026489.1.qntest.q/machines -x LD_LIBRARY_PATH -np
</span><br>
<span class="quotelev2">&gt;&gt; $NSLOTS /home/ctierney/bin/noaa_affinity ./wrf.exe
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; So,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Is this expected?  Are some common sense optimizations to use?
</span><br>
<span class="quotelev2">&gt;&gt; Is there a way to verify that I am really using the IB?  When
</span><br>
<span class="quotelev2">&gt;&gt; I try:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -mca bta ^tcp,openib,sm,self
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I get the errors:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
--------------------------------------------------------------------------
<br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; No available btl components were found!
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; This means that there are no components of this type installed on your
</span><br>
<span class="quotelev2">&gt;&gt; system or all the components reported that they could not be used.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; This is a fatal error; your MPI process is likely to abort.  Check the
</span><br>
<span class="quotelev2">&gt;&gt; output of the &quot;ompi_info&quot; command and ensure that components of this
</span><br>
<span class="quotelev2">&gt;&gt; type are available on your system.  You may also wish to check the
</span><br>
<span class="quotelev2">&gt;&gt; value of the &quot;component_path&quot; MCA parameter and ensure that it has at
</span><br>
<span class="quotelev2">&gt;&gt; least one directory that contains valid MCA components.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
--------------------------------------------------------------------------
<br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; But ompi_info is telling me that I have openib support:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    MCA btl: openib (MCA v2.0, API v2.0, Component v1.3.3)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Note, I did rebuild OFED and put it in a different directory
</span><br>
<span class="quotelev2">&gt;&gt; and did not rebuild OpenMPI.  However, since ompi_info isn't
</span><br>
<span class="quotelev2">&gt;&gt; complaining and the libraries are available, I am thinking that
</span><br>
<span class="quotelev2">&gt;&gt; is isn't a problem.  I could be wrong.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks,
</span><br>
<span class="quotelev2">&gt;&gt; Craig
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
<p><p><pre>
-- 
Craig Tierney (craig.tierney_at_[hidden])
_______________________________________________
users mailing list
users_at_[hidden]
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
=====-----=====-----=====
Notice: The information contained in this e-mail
message and/or attachments to it may contain 
confidential or privileged information. If you are 
not the intended recipient, any dissemination, use, 
review, distribution, printing or copying of the 
information contained in this e-mail message 
and/or attachments to it are strictly prohibited. If 
you have received this communication in error, 
please notify us by reply e-mail or telephone and 
immediately and permanently delete the message 
and any attachments. 
Internet communications cannot be guaranteed to be timely,
secure, error or virus-free. The sender does not accept liability
for any errors or omissions.Thank you
=====-----=====-----=====
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-10236/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10237.php">Terry Frankcombe: "[OMPI users] Automated tuning tool"</a>
<li><strong>Previous message:</strong> <a href="10235.php">vipin kumar: "Re: [OMPI users] Bus Error (7) on PS3 running HPL (OpenMPI 1.2.8)"</a>
<li><strong>In reply to:</strong> <a href="10232.php">Craig Tierney: "Re: [OMPI users] Performance question about OpenMPI and MVAPICH2 on IB"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10237.php">Terry Frankcombe: "[OMPI users] Automated tuning tool"</a>
<li><strong>Reply:</strong> <a href="10237.php">Terry Frankcombe: "[OMPI users] Automated tuning tool"</a>
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

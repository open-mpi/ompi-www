<?
$subject_val = "Re: [OMPI users] Performance question about OpenMPI and MVAPICH2 on	IB";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Aug  7 09:14:58 2009" -->
<!-- isoreceived="20090807131458" -->
<!-- sent="Fri, 07 Aug 2009 07:14:22 -0600" -->
<!-- isosent="20090807131422" -->
<!-- name="Craig Tierney" -->
<!-- email="craig.tierney_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Performance question about OpenMPI and MVAPICH2 on	IB" -->
<!-- id="4A7C28AE.3060000_at_noaa.gov" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="OF6AD88FE2.702C4EB8-ON6525760B.003E75CF-6525760B.003E687D_at_crlindia.com" -->
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
<strong>From:</strong> Craig Tierney (<em>craig.tierney_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-08-07 09:14:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10245.php">Jeff Squyres: "Re: [OMPI users] init failing"</a>
<li><strong>Previous message:</strong> <a href="10243.php">Craig Tierney: "Re: [OMPI users] Performance question about OpenMPI and MVAPICH2 on	IB"</a>
<li><strong>In reply to:</strong> <a href="10240.php">neeraj_at_[hidden]: "Re: [OMPI users] Performance question about OpenMPI and MVAPICH2 on	IB"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10231.php">Craig Tierney: "Re: [OMPI users] Performance question about OpenMPI and MVAPICH2 on IB"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
neeraj_at_[hidden] wrote:
<br>
<span class="quotelev1">&gt; Hi Craig,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;         How was the nodefile selected for execution? Whether it was 
</span><br>
<span class="quotelev1">&gt; provided by scheduler say LSF/SGE/PBS or you manually gave it?
</span><br>
<span class="quotelev1">&gt; With WRF, we observed giving sequential nodes (Blades which are in the 
</span><br>
<span class="quotelev1">&gt; same order as in enclosure) gave us some performance benefit.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Regards
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p>I figured this might be the case.  Right now the batch system
<br>
is giving the nodes to the applciation.  They are not sorted,
<br>
and I have considered doing that.  I have also launched numerous
<br>
cases of one problems size, and I don't get that much variation
<br>
in run time, not to explain the differences in MPI stack.
<br>
<p>Craig
<br>
<p><p><p><p><span class="quotelev1">&gt; Neeraj Chourasia (MTS)
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
<span class="quotelev1">&gt; *Craig Tierney &lt;Craig.Tierney_at_[hidden]&gt;*
</span><br>
<span class="quotelev1">&gt; Sent by: users-bounces_at_[hidden]
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 08/07/2009 04:43 AM
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
<span class="quotelev1">&gt; 	Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; cc
</span><br>
<span class="quotelev1">&gt; 	
</span><br>
<span class="quotelev1">&gt; Subject
</span><br>
<span class="quotelev1">&gt; 	Re: [OMPI users] Performance question about OpenMPI and MVAPICH2 on     
</span><br>
<span class="quotelev1">&gt;    IB
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
<span class="quotelev1">&gt; Gus Correa wrote:
</span><br>
<span class="quotelev2">&gt;  &gt; Hi Craig, list
</span><br>
<span class="quotelev2">&gt;  &gt;
</span><br>
<span class="quotelev2">&gt;  &gt; I suppose WRF uses MPI collective calls (MPI_Reduce,
</span><br>
<span class="quotelev2">&gt;  &gt; MPI_Bcast, MPI_Alltoall etc),
</span><br>
<span class="quotelev2">&gt;  &gt; just like the climate models we run here do.
</span><br>
<span class="quotelev2">&gt;  &gt; A recursive grep on the source code will tell.
</span><br>
<span class="quotelev2">&gt;  &gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I will check this out.  I am not the WRF expert, but
</span><br>
<span class="quotelev1">&gt; I was under the impression that most weather models are
</span><br>
<span class="quotelev1">&gt; nearest neighbor communications, not collectives.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;  &gt; If that is the case, you may need to tune the collectives dynamically.
</span><br>
<span class="quotelev2">&gt;  &gt; We are experimenting with tuned collectives here also.
</span><br>
<span class="quotelev2">&gt;  &gt;
</span><br>
<span class="quotelev2">&gt;  &gt; Specifically, we had a scaling problem with the MITgcm
</span><br>
<span class="quotelev2">&gt;  &gt; (also running on an IB cluster)
</span><br>
<span class="quotelev2">&gt;  &gt; that is probably due to collectives.
</span><br>
<span class="quotelev2">&gt;  &gt; Similar problems were reported on this list before,
</span><br>
<span class="quotelev2">&gt;  &gt; with computational chemistry software.
</span><br>
<span class="quotelev2">&gt;  &gt; See these threads:
</span><br>
<span class="quotelev2">&gt;  &gt; <a href="http://www.open-mpi.org/community/lists/users/2009/07/10045.php">http://www.open-mpi.org/community/lists/users/2009/07/10045.php</a>
</span><br>
<span class="quotelev2">&gt;  &gt; <a href="http://www.open-mpi.org/community/lists/users/2009/05/9419.php">http://www.open-mpi.org/community/lists/users/2009/05/9419.php</a>
</span><br>
<span class="quotelev2">&gt;  &gt;
</span><br>
<span class="quotelev2">&gt;  &gt; If WRF outputs timing information, particularly the time spent on MPI
</span><br>
<span class="quotelev2">&gt;  &gt; routines, you may also want to compare how the OpenMPI and
</span><br>
<span class="quotelev2">&gt;  &gt; MVAPICH versions fare w.r.t. MPI collectives.
</span><br>
<span class="quotelev2">&gt;  &gt;
</span><br>
<span class="quotelev2">&gt;  &gt; I hope this helps.
</span><br>
<span class="quotelev2">&gt;  &gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I will look into this.  Thanks for the ideas.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Craig
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;  &gt; Gus Correa
</span><br>
<span class="quotelev2">&gt;  &gt; ---------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;  &gt; Gustavo Correa
</span><br>
<span class="quotelev2">&gt;  &gt; Lamont-Doherty Earth Observatory - Columbia University
</span><br>
<span class="quotelev2">&gt;  &gt; Palisades, NY, 10964-8000 - USA
</span><br>
<span class="quotelev2">&gt;  &gt; ---------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;  &gt;
</span><br>
<span class="quotelev2">&gt;  &gt;
</span><br>
<span class="quotelev2">&gt;  &gt;
</span><br>
<span class="quotelev2">&gt;  &gt; Craig Tierney wrote:
</span><br>
<span class="quotelev3">&gt;  &gt;&gt; I am running openmpi-1.3.3 on my cluster which is using
</span><br>
<span class="quotelev3">&gt;  &gt;&gt; OFED-1.4.1 for Infiniband support.  I am comparing performance
</span><br>
<span class="quotelev3">&gt;  &gt;&gt; between this version of OpenMPI and Mvapich2, and seeing a
</span><br>
<span class="quotelev3">&gt;  &gt;&gt; very large difference in performance.
</span><br>
<span class="quotelev3">&gt;  &gt;&gt;
</span><br>
<span class="quotelev3">&gt;  &gt;&gt; The code I am testing is WRF v3.0.1.  I am running the
</span><br>
<span class="quotelev3">&gt;  &gt;&gt; 12km benchmark.
</span><br>
<span class="quotelev3">&gt;  &gt;&gt;
</span><br>
<span class="quotelev3">&gt;  &gt;&gt; The two builds are the exact same codes and configuration
</span><br>
<span class="quotelev3">&gt;  &gt;&gt; files.  All I did different was use modules to switch versions
</span><br>
<span class="quotelev3">&gt;  &gt;&gt; of MPI, and recompiled the code.
</span><br>
<span class="quotelev3">&gt;  &gt;&gt;
</span><br>
<span class="quotelev3">&gt;  &gt;&gt; Performance:
</span><br>
<span class="quotelev3">&gt;  &gt;&gt;
</span><br>
<span class="quotelev3">&gt;  &gt;&gt; Cores   Mvapich2    Openmpi
</span><br>
<span class="quotelev3">&gt;  &gt;&gt; ---------------------------
</span><br>
<span class="quotelev3">&gt;  &gt;&gt;    8      17.3        13.9
</span><br>
<span class="quotelev3">&gt;  &gt;&gt;   16      31.7        25.9
</span><br>
<span class="quotelev3">&gt;  &gt;&gt;   32      62.9        51.6
</span><br>
<span class="quotelev3">&gt;  &gt;&gt;   64     110.8        92.8
</span><br>
<span class="quotelev3">&gt;  &gt;&gt;  128     219.2       189.4
</span><br>
<span class="quotelev3">&gt;  &gt;&gt;  256     384.5       317.8
</span><br>
<span class="quotelev3">&gt;  &gt;&gt;  512     687.2       516.7
</span><br>
<span class="quotelev3">&gt;  &gt;&gt;
</span><br>
<span class="quotelev3">&gt;  &gt;&gt; The performance number is GFlops (so larger is better).
</span><br>
<span class="quotelev3">&gt;  &gt;&gt;
</span><br>
<span class="quotelev3">&gt;  &gt;&gt; I am calling openmpi as:
</span><br>
<span class="quotelev3">&gt;  &gt;&gt;
</span><br>
<span class="quotelev3">&gt;  &gt;&gt; /opt/openmpi/1.3.3-intel/bin/mpirun  --mca plm_rsh_disable_qrsh 1
</span><br>
<span class="quotelev3">&gt;  &gt;&gt; --mca btl openib,sm,self \
</span><br>
<span class="quotelev3">&gt;  &gt;&gt; -machinefile /tmp/6026489.1.qntest.q/machines -x LD_LIBRARY_PATH -np
</span><br>
<span class="quotelev3">&gt;  &gt;&gt; $NSLOTS /home/ctierney/bin/noaa_affinity ./wrf.exe
</span><br>
<span class="quotelev3">&gt;  &gt;&gt;
</span><br>
<span class="quotelev3">&gt;  &gt;&gt; So,
</span><br>
<span class="quotelev3">&gt;  &gt;&gt;
</span><br>
<span class="quotelev3">&gt;  &gt;&gt; Is this expected?  Are some common sense optimizations to use?
</span><br>
<span class="quotelev3">&gt;  &gt;&gt; Is there a way to verify that I am really using the IB?  When
</span><br>
<span class="quotelev3">&gt;  &gt;&gt; I try:
</span><br>
<span class="quotelev3">&gt;  &gt;&gt;
</span><br>
<span class="quotelev3">&gt;  &gt;&gt; -mca bta ^tcp,openib,sm,self
</span><br>
<span class="quotelev3">&gt;  &gt;&gt;
</span><br>
<span class="quotelev3">&gt;  &gt;&gt; I get the errors:
</span><br>
<span class="quotelev3">&gt;  &gt;&gt; 
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;  &gt;&gt;
</span><br>
<span class="quotelev3">&gt;  &gt;&gt; No available btl components were found!
</span><br>
<span class="quotelev3">&gt;  &gt;&gt;
</span><br>
<span class="quotelev3">&gt;  &gt;&gt; This means that there are no components of this type installed on your
</span><br>
<span class="quotelev3">&gt;  &gt;&gt; system or all the components reported that they could not be used.
</span><br>
<span class="quotelev3">&gt;  &gt;&gt;
</span><br>
<span class="quotelev3">&gt;  &gt;&gt; This is a fatal error; your MPI process is likely to abort.  Check the
</span><br>
<span class="quotelev3">&gt;  &gt;&gt; output of the &quot;ompi_info&quot; command and ensure that components of this
</span><br>
<span class="quotelev3">&gt;  &gt;&gt; type are available on your system.  You may also wish to check the
</span><br>
<span class="quotelev3">&gt;  &gt;&gt; value of the &quot;component_path&quot; MCA parameter and ensure that it has at
</span><br>
<span class="quotelev3">&gt;  &gt;&gt; least one directory that contains valid MCA components.
</span><br>
<span class="quotelev3">&gt;  &gt;&gt; 
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;  &gt;&gt;
</span><br>
<span class="quotelev3">&gt;  &gt;&gt;
</span><br>
<span class="quotelev3">&gt;  &gt;&gt; But ompi_info is telling me that I have openib support:
</span><br>
<span class="quotelev3">&gt;  &gt;&gt;
</span><br>
<span class="quotelev3">&gt;  &gt;&gt;    MCA btl: openib (MCA v2.0, API v2.0, Component v1.3.3)
</span><br>
<span class="quotelev3">&gt;  &gt;&gt;
</span><br>
<span class="quotelev3">&gt;  &gt;&gt; Note, I did rebuild OFED and put it in a different directory
</span><br>
<span class="quotelev3">&gt;  &gt;&gt; and did not rebuild OpenMPI.  However, since ompi_info isn't
</span><br>
<span class="quotelev3">&gt;  &gt;&gt; complaining and the libraries are available, I am thinking that
</span><br>
<span class="quotelev3">&gt;  &gt;&gt; is isn't a problem.  I could be wrong.
</span><br>
<span class="quotelev3">&gt;  &gt;&gt;
</span><br>
<span class="quotelev3">&gt;  &gt;&gt; Thanks,
</span><br>
<span class="quotelev3">&gt;  &gt;&gt; Craig
</span><br>
<span class="quotelev2">&gt;  &gt;
</span><br>
<span class="quotelev2">&gt;  &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;  &gt; users mailing list
</span><br>
<span class="quotelev2">&gt;  &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;  &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;  &gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Craig Tierney (craig.tierney_at_[hidden])
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
<li><strong>Next message:</strong> <a href="10245.php">Jeff Squyres: "Re: [OMPI users] init failing"</a>
<li><strong>Previous message:</strong> <a href="10243.php">Craig Tierney: "Re: [OMPI users] Performance question about OpenMPI and MVAPICH2 on	IB"</a>
<li><strong>In reply to:</strong> <a href="10240.php">neeraj_at_[hidden]: "Re: [OMPI users] Performance question about OpenMPI and MVAPICH2 on	IB"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10231.php">Craig Tierney: "Re: [OMPI users] Performance question about OpenMPI and MVAPICH2 on IB"</a>
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

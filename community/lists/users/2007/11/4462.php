<?
$subject_val = "Re: [OMPI users] core from today";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Nov 14 06:46:49 2007" -->
<!-- isoreceived="20071114114649" -->
<!-- sent="Wed, 14 Nov 2007 12:23:52 +0100" -->
<!-- isosent="20071114112352" -->
<!-- name="Marcin Skoczylas" -->
<!-- email="Marcin.Skoczylas_at_[hidden]" -->
<!-- subject="Re: [OMPI users] core from today" -->
<!-- id="473ADAC8.6080304_at_lnl.infn.it" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4739DEBB.2030002_at_sun.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] core from today<br>
<strong>From:</strong> Marcin Skoczylas (<em>Marcin.Skoczylas_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-11-14 06:23:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4463.php">Sajjad: "[OMPI users] OpenMPI - compilation"</a>
<li><strong>Previous message:</strong> <a href="4461.php">Terry Dontje: "Re: [OMPI users] core from today"</a>
<li><strong>In reply to:</strong> <a href="4461.php">Terry Dontje: "Re: [OMPI users] core from today"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Terry,
<br>
<p>Linux Slackware, quite outdated kernel 2.6.15, gcc 3.4.6,
<br>
Yes, that was slightly oversubscribed - just to perform sanity tests 
<br>
locally. Obviously, I changed that part and I send data in bigger chunks 
<br>
(I think that should work faster anyway), also on not oversubscribed 
<br>
cluster machine this does not appear. Just was curious about the core. 
<br>
Thanks!
<br>
<p>greets, Marcin
<br>
<p><p>Terry Dontje wrote:
<br>
<span class="quotelev1">&gt; Marcin,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; A couple questions:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; What OS are you running on?
</span><br>
<span class="quotelev1">&gt; Did you run this job oversubscribed, that is more processes than there 
</span><br>
<span class="quotelev1">&gt; are cpus?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I've found with oversubscribed jobs that the recursive calls to 
</span><br>
<span class="quotelev1">&gt; opal_progress by the SM BTL that
</span><br>
<span class="quotelev1">&gt; the yield within opal_progress (intending to give up the cpu to others) 
</span><br>
<span class="quotelev1">&gt; doesn't always work for all
</span><br>
<span class="quotelev1">&gt; OSes.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --td
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev2">&gt;&gt; ----------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Message: 1
</span><br>
<span class="quotelev2">&gt;&gt; Date: Tue, 13 Nov 2007 12:26:43 +0100
</span><br>
<span class="quotelev2">&gt;&gt; From: Marcin Skoczylas &lt;Marcin.Skoczylas_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Subject: [OMPI users] core from today
</span><br>
<span class="quotelev2">&gt;&gt; To: Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Message-ID: &lt;473989F3.8070808_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Content-Type: text/plain; charset=ISO-8859-2; format=flowed
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; OpenMPI 1.2.4
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; mpirun noticed that job rank 0 with PID 19021 on node pc801 exited on 
</span><br>
<span class="quotelev2">&gt;&gt; signal 15 (Terminated).
</span><br>
<span class="quotelev2">&gt;&gt; 11 additional processes aborted (not shown)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; (gdb) bt
</span><br>
<span class="quotelev2">&gt;&gt; #0  0x411b776c in mca_pml_ob1_recv_frag_match () from 
</span><br>
<span class="quotelev2">&gt;&gt; /usr/local/openmpi//lib/openmpi/mca_pml_ob1.so
</span><br>
<span class="quotelev2">&gt;&gt; #1  0x411ce010 in mca_btl_sm_component_progress () from 
</span><br>
<span class="quotelev2">&gt;&gt; /usr/local/openmpi//lib/openmpi/mca_btl_sm.so
</span><br>
<span class="quotelev2">&gt;&gt; #2  0x411c2df9 in mca_bml_r2_progress () from 
</span><br>
<span class="quotelev2">&gt;&gt; /usr/local/openmpi//lib/openmpi/mca_bml_r2.so
</span><br>
<span class="quotelev2">&gt;&gt; #3  0x404fb549 in opal_progress () from 
</span><br>
<span class="quotelev2">&gt;&gt; /usr/local/openmpi/lib/libopen-pal.so.0
</span><br>
<span class="quotelev2">&gt;&gt; #4  0x411b87cb in mca_pml_ob1_recv_frag_match () from 
</span><br>
<span class="quotelev2">&gt;&gt; /usr/local/openmpi//lib/openmpi/mca_pml_ob1.so
</span><br>
<span class="quotelev2">&gt;&gt; #5  0x411ce010 in mca_btl_sm_component_progress () from 
</span><br>
<span class="quotelev2">&gt;&gt; /usr/local/openmpi//lib/openmpi/mca_btl_sm.so
</span><br>
<span class="quotelev2">&gt;&gt; #6  0x411c2df9 in mca_bml_r2_progress () from 
</span><br>
<span class="quotelev2">&gt;&gt; /usr/local/openmpi//lib/openmpi/mca_bml_r2.so
</span><br>
<span class="quotelev2">&gt;&gt; #7  0x404fb549 in opal_progress () from 
</span><br>
<span class="quotelev2">&gt;&gt; /usr/local/openmpi/lib/libopen-pal.so.0
</span><br>
<span class="quotelev2">&gt;&gt; #8  0x411b87cb in mca_pml_ob1_recv_frag_match () from 
</span><br>
<span class="quotelev2">&gt;&gt; /usr/local/openmpi//lib/openmpi/mca_pml_ob1.so
</span><br>
<span class="quotelev2">&gt;&gt; #9  0x411ce010 in mca_btl_sm_component_progress () from 
</span><br>
<span class="quotelev2">&gt;&gt; /usr/local/openmpi//lib/openmpi/mca_btl_sm.so
</span><br>
<span class="quotelev2">&gt;&gt; #10 0x411c2df9 in mca_bml_r2_progress () from 
</span><br>
<span class="quotelev2">&gt;&gt; /usr/local/openmpi//lib/openmpi/mca_bml_r2.so
</span><br>
<span class="quotelev2">&gt;&gt; #11 0x404fb549 in opal_progress () from 
</span><br>
<span class="quotelev2">&gt;&gt; /usr/local/openmpi/lib/libopen-pal.so.0
</span><br>
<span class="quotelev2">&gt;&gt; #12 0x411b87cb in mca_pml_ob1_recv_frag_match () from 
</span><br>
<span class="quotelev2">&gt;&gt; /usr/local/openmpi//lib/openmpi/mca_pml_ob1.so
</span><br>
<span class="quotelev2">&gt;&gt; #13 0x411ce010 in mca_btl_sm_component_progress () from 
</span><br>
<span class="quotelev2">&gt;&gt; /usr/local/openmpi//lib/openmpi/mca_btl_sm.so
</span><br>
<span class="quotelev2">&gt;&gt; #14 0x411c2df9 in mca_bml_r2_progress () from 
</span><br>
<span class="quotelev2">&gt;&gt; /usr/local/openmpi//lib/openmpi/mca_bml_r2.so
</span><br>
<span class="quotelev2">&gt;&gt; #15 0x404fb549 in opal_progress () from 
</span><br>
<span class="quotelev2">&gt;&gt; /usr/local/openmpi/lib/libopen-pal.so.0
</span><br>
<span class="quotelev2">&gt;&gt; #16 0x411b87cb in mca_pml_ob1_recv_frag_match () from 
</span><br>
<span class="quotelev2">&gt;&gt; /usr/local/openmpi//lib/openmpi/mca_pml_ob1.so
</span><br>
<span class="quotelev2">&gt;&gt; #17 0x411ce010 in mca_btl_sm_component_progress () from 
</span><br>
<span class="quotelev2">&gt;&gt; /usr/local/openmpi//lib/openmpi/mca_btl_sm.so
</span><br>
<span class="quotelev2">&gt;&gt; #18 0x411c2df9 in mca_bml_r2_progress () from 
</span><br>
<span class="quotelev2">&gt;&gt; /usr/local/openmpi//lib/openmpi/mca_bml_r2.so
</span><br>
<span class="quotelev2">&gt;&gt; #19 0x404fb549 in opal_progress () from 
</span><br>
<span class="quotelev2">&gt;&gt; /usr/local/openmpi/lib/libopen-pal.so.0
</span><br>
<span class="quotelev2">&gt;&gt; #20 0x411b87cb in mca_pml_ob1_recv_frag_match () from 
</span><br>
<span class="quotelev2">&gt;&gt; /usr/local/openmpi//lib/openmpi/mca_pml_ob1.so
</span><br>
<span class="quotelev2">&gt;&gt; #21 0x411ce010 in mca_btl_sm_component_progress () from 
</span><br>
<span class="quotelev2">&gt;&gt; /usr/local/openmpi//lib/openmpi/mca_btl_sm.so
</span><br>
<span class="quotelev2">&gt;&gt; #22 0x411c2df9 in mca_bml_r2_progress () from 
</span><br>
<span class="quotelev2">&gt;&gt; /usr/local/openmpi//lib/openmpi/mca_bml_r2.so
</span><br>
<span class="quotelev2">&gt;&gt; #23 0x404fb549 in opal_progress () from 
</span><br>
<span class="quotelev2">&gt;&gt; /usr/local/openmpi/lib/libopen-pal.so.0
</span><br>
<span class="quotelev2">&gt;&gt; #24 0x411b87cb in mca_pml_ob1_recv_frag_match () from 
</span><br>
<span class="quotelev2">&gt;&gt; /usr/local/openmpi//lib/openmpi/mca_pml_ob1.so
</span><br>
<span class="quotelev2">&gt;&gt; #25 0x411ce010 in mca_btl_sm_component_progress () from 
</span><br>
<span class="quotelev2">&gt;&gt; /usr/local/openmpi//lib/openmpi/mca_btl_sm.so
</span><br>
<span class="quotelev2">&gt;&gt; #26 0x411c2df9 in mca_bml_r2_progress () from 
</span><br>
<span class="quotelev2">&gt;&gt; /usr/local/openmpi//lib/openmpi/mca_bml_r2.so
</span><br>
<span class="quotelev2">&gt;&gt; #27 0x404fb549 in opal_progress () from 
</span><br>
<span class="quotelev2">&gt;&gt; /usr/local/openmpi/lib/libopen-pal.so.0
</span><br>
<span class="quotelev2">&gt;&gt; #28 0x411b87cb in mca_pml_ob1_recv_frag_match () from 
</span><br>
<span class="quotelev2">&gt;&gt; /usr/local/openmpi//lib/openmpi/mca_pml_ob1.so
</span><br>
<span class="quotelev2">&gt;&gt; #29 0x411ce010 in mca_btl_sm_component_progress () from 
</span><br>
<span class="quotelev2">&gt;&gt; /usr/local/openmpi//lib/openmpi/mca_btl_sm.so
</span><br>
<span class="quotelev2">&gt;&gt; #30 0x411c2df9 in mca_bml_r2_progress () from 
</span><br>
<span class="quotelev2">&gt;&gt; /usr/local/openmpi//lib/openmpi/mca_bml_r2.so
</span><br>
<span class="quotelev2">&gt;&gt; #31 0x404fb549 in opal_progress () from 
</span><br>
<span class="quotelev2">&gt;&gt; /usr/local/openmpi/lib/libopen-pal.so.0
</span><br>
<span class="quotelev2">&gt;&gt; #32 0x411b87cb in mca_pml_ob1_recv_frag_match () from 
</span><br>
<span class="quotelev2">&gt;&gt; /usr/local/openmpi//lib/openmpi/mca_pml_ob1.so
</span><br>
<span class="quotelev2">&gt;&gt; #33 0x411ce010 in mca_btl_sm_component_progress () from 
</span><br>
<span class="quotelev2">&gt;&gt; /usr/local/openmpi//lib/openmpi/mca_btl_sm.so
</span><br>
<span class="quotelev2">&gt;&gt; #34 0x411c2df9 in mca_bml_r2_progress () from 
</span><br>
<span class="quotelev2">&gt;&gt; /usr/local/openmpi//lib/openmpi/mca_bml_r2.so
</span><br>
<span class="quotelev2">&gt;&gt; #35 0x404fb549 in opal_progress () from 
</span><br>
<span class="quotelev2">&gt;&gt; /usr/local/openmpi/lib/libopen-pal.so.0
</span><br>
<span class="quotelev2">&gt;&gt; #36 0x411b87cb in mca_pml_ob1_recv_frag_match () from 
</span><br>
<span class="quotelev2">&gt;&gt; /usr/local/openmpi//lib/openmpi/mca_pml_ob1.so
</span><br>
<span class="quotelev2">&gt;&gt; #37 0x411ce010 in mca_btl_sm_component_progress () from 
</span><br>
<span class="quotelev2">&gt;&gt; /usr/local/openmpi//lib/openmpi/mca_btl_sm.so
</span><br>
<span class="quotelev2">&gt;&gt; #38 0x411c2df9 in mca_bml_r2_progress () from 
</span><br>
<span class="quotelev2">&gt;&gt; /usr/local/openmpi//lib/openmpi/mca_bml_r2.so
</span><br>
<span class="quotelev2">&gt;&gt; #39 0x404fb549 in opal_progress () from 
</span><br>
<span class="quotelev2">&gt;&gt; /usr/local/openmpi/lib/libopen-pal.so.0
</span><br>
<span class="quotelev2">&gt;&gt; #40 0x411b87cb in mca_pml_ob1_recv_frag_match () from 
</span><br>
<span class="quotelev2">&gt;&gt; /usr/local/openmpi//lib/openmpi/mca_pml_ob1.so
</span><br>
<span class="quotelev2">&gt;&gt; #41 0x411ce010 in mca_btl_sm_component_progress () from 
</span><br>
<span class="quotelev2">&gt;&gt; /usr/local/openmpi//lib/openmpi/mca_btl_sm.so
</span><br>
<span class="quotelev2">&gt;&gt; #42 0x411c2df9 in mca_bml_r2_progress () from 
</span><br>
<span class="quotelev2">&gt;&gt; /usr/local/openmpi//lib/openmpi/mca_bml_r2.so
</span><br>
<span class="quotelev2">&gt;&gt; #43 0x404fb549 in opal_progress () from 
</span><br>
<span class="quotelev2">&gt;&gt; /usr/local/openmpi/lib/libopen-pal.so.0
</span><br>
<span class="quotelev2">&gt;&gt; #44 0x411b87cb in mca_pml_ob1_recv_frag_match () from 
</span><br>
<span class="quotelev2">&gt;&gt; /usr/local/openmpi//lib/openmpi/mca_pml_ob1.so
</span><br>
<span class="quotelev2">&gt;&gt; (...)
</span><br>
<span class="quotelev2">&gt;&gt; #19661 0x411ce010 in mca_btl_sm_component_progress () from 
</span><br>
<span class="quotelev2">&gt;&gt; /usr/local/openmpi//lib/openmpi/mca_btl_sm.so
</span><br>
<span class="quotelev2">&gt;&gt; #19662 0x411c2df9 in mca_bml_r2_progress () from 
</span><br>
<span class="quotelev2">&gt;&gt; /usr/local/openmpi//lib/openmpi/mca_bml_r2.so
</span><br>
<span class="quotelev2">&gt;&gt; #19663 0x404fb549 in opal_progress () from 
</span><br>
<span class="quotelev2">&gt;&gt; /usr/local/openmpi/lib/libopen-pal.so.0
</span><br>
<span class="quotelev2">&gt;&gt; #19664 0x411b87cb in mca_pml_ob1_recv_frag_match () from 
</span><br>
<span class="quotelev2">&gt;&gt; /usr/local/openmpi//lib/openmpi/mca_pml_ob1.so
</span><br>
<span class="quotelev2">&gt;&gt; #19665 0x411ce010 in mca_btl_sm_component_progress () from 
</span><br>
<span class="quotelev2">&gt;&gt; /usr/local/openmpi//lib/openmpi/mca_btl_sm.so
</span><br>
<span class="quotelev2">&gt;&gt; #19666 0x411c2df9 in mca_bml_r2_progress () from 
</span><br>
<span class="quotelev2">&gt;&gt; /usr/local/openmpi//lib/openmpi/mca_bml_r2.so
</span><br>
<span class="quotelev2">&gt;&gt; #19667 0x404fb549 in opal_progress () from 
</span><br>
<span class="quotelev2">&gt;&gt; /usr/local/openmpi/lib/libopen-pal.so.0
</span><br>
<span class="quotelev2">&gt;&gt; #19668 0x400d9bb5 in ompi_request_wait_all () from 
</span><br>
<span class="quotelev2">&gt;&gt; /usr/local/openmpi/lib/libmpi.so.0
</span><br>
<span class="quotelev2">&gt;&gt; #19669 0x411f57a3 in ompi_coll_tuned_bcast_intra_generic () from 
</span><br>
<span class="quotelev2">&gt;&gt; /usr/local/openmpi//lib/openmpi/mca_coll_tuned.so
</span><br>
<span class="quotelev2">&gt;&gt; #19670 0x411f5e55 in ompi_coll_tuned_bcast_intra_binomial () from 
</span><br>
<span class="quotelev2">&gt;&gt; /usr/local/openmpi//lib/openmpi/mca_coll_tuned.so
</span><br>
<span class="quotelev2">&gt;&gt; #19671 0x411efb3f in ompi_coll_tuned_bcast_intra_dec_fixed () from 
</span><br>
<span class="quotelev2">&gt;&gt; /usr/local/openmpi//lib/openmpi/mca_coll_tuned.so
</span><br>
<span class="quotelev2">&gt;&gt; #19672 0x400ee239 in PMPI_Bcast () from /usr/local/openmpi/lib/libmpi.so.0
</span><br>
<span class="quotelev2">&gt;&gt; #19673 0x081009a3 in CProcessing::postProcessWorker (this=0x843a3c8) at 
</span><br>
<span class="quotelev2">&gt;&gt; CProcessing.cpp:403
</span><br>
<span class="quotelev2">&gt;&gt; #19674 0x081042ee in CInputSetMap::postProcessWorker (this=0x843a260) at 
</span><br>
<span class="quotelev2">&gt;&gt; CInputSetMap.cpp:554
</span><br>
<span class="quotelev2">&gt;&gt; #19675 0x0812f0f5 in CInputSetMap::processWorker (this=0x843a3f8) at 
</span><br>
<span class="quotelev2">&gt;&gt; CInputSetMap.cpp:580
</span><br>
<span class="quotelev2">&gt;&gt; #19676 0x080b0945 in CLS_WorkerStart () at CLS_WorkerStartup.cpp:11
</span><br>
<span class="quotelev2">&gt;&gt; #19677 0x080ac2e9 in CLS_Worker () at CLS_Worker.cpp:44
</span><br>
<span class="quotelev2">&gt;&gt; #19678 0x0813706f in main (argc=1, argv=0xbfae84d4) at SYS_Main.cpp:201
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Seems like recursive endless loop for me...
</span><br>
<span class="quotelev2">&gt;&gt; Unfortunately I have to spread one double per one MPI_Bcast (not whole 
</span><br>
<span class="quotelev2">&gt;&gt; vector for example), as the behavior later needs such approach (don't 
</span><br>
<span class="quotelev2">&gt;&gt; ask why). I commented out everything that can be dangerous, in fact I'm 
</span><br>
<span class="quotelev2">&gt;&gt; just spreading data now and this is enough to crash... it appears only 
</span><br>
<span class="quotelev2">&gt;&gt; on a big input set, whole code works perfecly on smaller datasets.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; code:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; HEAD:
</span><br>
<span class="quotelev2">&gt;&gt;         for(i=0; i &lt; numAlphaSets; i++)
</span><br>
<span class="quotelev2">&gt;&gt;         {
</span><br>
<span class="quotelev2">&gt;&gt;             CAlphaSet *alphaSet = *alphaSetIterator;
</span><br>
<span class="quotelev2">&gt;&gt;             for(cols=0; cols &lt; numCols; cols++)
</span><br>
<span class="quotelev2">&gt;&gt;             {
</span><br>
<span class="quotelev2">&gt;&gt;                 double alpha =alphaSet-&gt;alpha[cols-1];
</span><br>
<span class="quotelev2">&gt;&gt;                 MPI_Bcast(&amp;alpha, 1, MPI_DOUBLE, 0, MPI_COMM_WORLD);
</span><br>
<span class="quotelev2">&gt;&gt;             }
</span><br>
<span class="quotelev2">&gt;&gt;             *alphaSetIterator++;
</span><br>
<span class="quotelev2">&gt;&gt;         }
</span><br>
<span class="quotelev2">&gt;&gt;        
</span><br>
<span class="quotelev2">&gt;&gt; WORKER:
</span><br>
<span class="quotelev2">&gt;&gt;         double alpha;
</span><br>
<span class="quotelev2">&gt;&gt;         for(i=0; i &lt; numAlphaSets; i++)
</span><br>
<span class="quotelev2">&gt;&gt;         {
</span><br>
<span class="quotelev2">&gt;&gt;             for(cols=0; cols &lt; numCols; cols++)
</span><br>
<span class="quotelev2">&gt;&gt;             {
</span><br>
<span class="quotelev2">&gt;&gt;                 MPI_Bcast(&amp;alpha, 1, MPI_DOUBLE, 0, MPI_COMM_WORLD);
</span><br>
<span class="quotelev2">&gt;&gt;                 // do something with alpha, commented out for debug
</span><br>
<span class="quotelev2">&gt;&gt;             }
</span><br>
<span class="quotelev2">&gt;&gt;         }
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I try to spread around 820,000 MPI_DOUBLEs that way. Obviously, I will 
</span><br>
<span class="quotelev2">&gt;&gt; re-write this to spread data in bigger chunks and split them on workers, 
</span><br>
<span class="quotelev2">&gt;&gt; but seems strange anyway... could be some buffer issues, or...?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; greets, Marcin
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; End of users Digest, Vol 740, Issue 1
</span><br>
<span class="quotelev2">&gt;&gt; *************************************
</span><br>
<span class="quotelev2">&gt;&gt;   
</span><br>
<span class="quotelev2">&gt;&gt;     
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
<span class="quotelev1">&gt;   
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4463.php">Sajjad: "[OMPI users] OpenMPI - compilation"</a>
<li><strong>Previous message:</strong> <a href="4461.php">Terry Dontje: "Re: [OMPI users] core from today"</a>
<li><strong>In reply to:</strong> <a href="4461.php">Terry Dontje: "Re: [OMPI users] core from today"</a>
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

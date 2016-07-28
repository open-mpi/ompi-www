<?
$subject_val = "Re: [OMPI users] core from today";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Nov 13 12:28:44 2007" -->
<!-- isoreceived="20071113172844" -->
<!-- sent="Tue, 13 Nov 2007 12:28:27 -0500" -->
<!-- isosent="20071113172827" -->
<!-- name="Terry Dontje" -->
<!-- email="Terry.Dontje_at_[hidden]" -->
<!-- subject="Re: [OMPI users] core from today" -->
<!-- id="4739DEBB.2030002_at_sun.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="mailman.13.1194973206.4130.users_at_open-mpi.org" -->
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
<strong>From:</strong> Terry Dontje (<em>Terry.Dontje_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-11-13 12:28:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4462.php">Marcin Skoczylas: "Re: [OMPI users] core from today"</a>
<li><strong>Previous message:</strong> <a href="4460.php">Marcin Skoczylas: "[OMPI users] core from today"</a>
<li><strong>Maybe in reply to:</strong> <a href="4460.php">Marcin Skoczylas: "[OMPI users] core from today"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4462.php">Marcin Skoczylas: "Re: [OMPI users] core from today"</a>
<li><strong>Reply:</strong> <a href="4462.php">Marcin Skoczylas: "Re: [OMPI users] core from today"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Marcin,
<br>
<p>A couple questions:
<br>
<p>What OS are you running on?
<br>
Did you run this job oversubscribed, that is more processes than there 
<br>
are cpus?
<br>
<p>I've found with oversubscribed jobs that the recursive calls to 
<br>
opal_progress by the SM BTL that
<br>
the yield within opal_progress (intending to give up the cpu to others) 
<br>
doesn't always work for all
<br>
OSes.
<br>
<p>--td
<br>
<p><span class="quotelev1">&gt; ----------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Message: 1
</span><br>
<span class="quotelev1">&gt; Date: Tue, 13 Nov 2007 12:26:43 +0100
</span><br>
<span class="quotelev1">&gt; From: Marcin Skoczylas &lt;Marcin.Skoczylas_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subject: [OMPI users] core from today
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Message-ID: &lt;473989F3.8070808_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Content-Type: text/plain; charset=ISO-8859-2; format=flowed
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; OpenMPI 1.2.4
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpirun noticed that job rank 0 with PID 19021 on node pc801 exited on 
</span><br>
<span class="quotelev1">&gt; signal 15 (Terminated).
</span><br>
<span class="quotelev1">&gt; 11 additional processes aborted (not shown)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; (gdb) bt
</span><br>
<span class="quotelev1">&gt; #0  0x411b776c in mca_pml_ob1_recv_frag_match () from 
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi//lib/openmpi/mca_pml_ob1.so
</span><br>
<span class="quotelev1">&gt; #1  0x411ce010 in mca_btl_sm_component_progress () from 
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi//lib/openmpi/mca_btl_sm.so
</span><br>
<span class="quotelev1">&gt; #2  0x411c2df9 in mca_bml_r2_progress () from 
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi//lib/openmpi/mca_bml_r2.so
</span><br>
<span class="quotelev1">&gt; #3  0x404fb549 in opal_progress () from 
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi/lib/libopen-pal.so.0
</span><br>
<span class="quotelev1">&gt; #4  0x411b87cb in mca_pml_ob1_recv_frag_match () from 
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi//lib/openmpi/mca_pml_ob1.so
</span><br>
<span class="quotelev1">&gt; #5  0x411ce010 in mca_btl_sm_component_progress () from 
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi//lib/openmpi/mca_btl_sm.so
</span><br>
<span class="quotelev1">&gt; #6  0x411c2df9 in mca_bml_r2_progress () from 
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi//lib/openmpi/mca_bml_r2.so
</span><br>
<span class="quotelev1">&gt; #7  0x404fb549 in opal_progress () from 
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi/lib/libopen-pal.so.0
</span><br>
<span class="quotelev1">&gt; #8  0x411b87cb in mca_pml_ob1_recv_frag_match () from 
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi//lib/openmpi/mca_pml_ob1.so
</span><br>
<span class="quotelev1">&gt; #9  0x411ce010 in mca_btl_sm_component_progress () from 
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi//lib/openmpi/mca_btl_sm.so
</span><br>
<span class="quotelev1">&gt; #10 0x411c2df9 in mca_bml_r2_progress () from 
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi//lib/openmpi/mca_bml_r2.so
</span><br>
<span class="quotelev1">&gt; #11 0x404fb549 in opal_progress () from 
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi/lib/libopen-pal.so.0
</span><br>
<span class="quotelev1">&gt; #12 0x411b87cb in mca_pml_ob1_recv_frag_match () from 
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi//lib/openmpi/mca_pml_ob1.so
</span><br>
<span class="quotelev1">&gt; #13 0x411ce010 in mca_btl_sm_component_progress () from 
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi//lib/openmpi/mca_btl_sm.so
</span><br>
<span class="quotelev1">&gt; #14 0x411c2df9 in mca_bml_r2_progress () from 
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi//lib/openmpi/mca_bml_r2.so
</span><br>
<span class="quotelev1">&gt; #15 0x404fb549 in opal_progress () from 
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi/lib/libopen-pal.so.0
</span><br>
<span class="quotelev1">&gt; #16 0x411b87cb in mca_pml_ob1_recv_frag_match () from 
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi//lib/openmpi/mca_pml_ob1.so
</span><br>
<span class="quotelev1">&gt; #17 0x411ce010 in mca_btl_sm_component_progress () from 
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi//lib/openmpi/mca_btl_sm.so
</span><br>
<span class="quotelev1">&gt; #18 0x411c2df9 in mca_bml_r2_progress () from 
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi//lib/openmpi/mca_bml_r2.so
</span><br>
<span class="quotelev1">&gt; #19 0x404fb549 in opal_progress () from 
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi/lib/libopen-pal.so.0
</span><br>
<span class="quotelev1">&gt; #20 0x411b87cb in mca_pml_ob1_recv_frag_match () from 
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi//lib/openmpi/mca_pml_ob1.so
</span><br>
<span class="quotelev1">&gt; #21 0x411ce010 in mca_btl_sm_component_progress () from 
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi//lib/openmpi/mca_btl_sm.so
</span><br>
<span class="quotelev1">&gt; #22 0x411c2df9 in mca_bml_r2_progress () from 
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi//lib/openmpi/mca_bml_r2.so
</span><br>
<span class="quotelev1">&gt; #23 0x404fb549 in opal_progress () from 
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi/lib/libopen-pal.so.0
</span><br>
<span class="quotelev1">&gt; #24 0x411b87cb in mca_pml_ob1_recv_frag_match () from 
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi//lib/openmpi/mca_pml_ob1.so
</span><br>
<span class="quotelev1">&gt; #25 0x411ce010 in mca_btl_sm_component_progress () from 
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi//lib/openmpi/mca_btl_sm.so
</span><br>
<span class="quotelev1">&gt; #26 0x411c2df9 in mca_bml_r2_progress () from 
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi//lib/openmpi/mca_bml_r2.so
</span><br>
<span class="quotelev1">&gt; #27 0x404fb549 in opal_progress () from 
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi/lib/libopen-pal.so.0
</span><br>
<span class="quotelev1">&gt; #28 0x411b87cb in mca_pml_ob1_recv_frag_match () from 
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi//lib/openmpi/mca_pml_ob1.so
</span><br>
<span class="quotelev1">&gt; #29 0x411ce010 in mca_btl_sm_component_progress () from 
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi//lib/openmpi/mca_btl_sm.so
</span><br>
<span class="quotelev1">&gt; #30 0x411c2df9 in mca_bml_r2_progress () from 
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi//lib/openmpi/mca_bml_r2.so
</span><br>
<span class="quotelev1">&gt; #31 0x404fb549 in opal_progress () from 
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi/lib/libopen-pal.so.0
</span><br>
<span class="quotelev1">&gt; #32 0x411b87cb in mca_pml_ob1_recv_frag_match () from 
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi//lib/openmpi/mca_pml_ob1.so
</span><br>
<span class="quotelev1">&gt; #33 0x411ce010 in mca_btl_sm_component_progress () from 
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi//lib/openmpi/mca_btl_sm.so
</span><br>
<span class="quotelev1">&gt; #34 0x411c2df9 in mca_bml_r2_progress () from 
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi//lib/openmpi/mca_bml_r2.so
</span><br>
<span class="quotelev1">&gt; #35 0x404fb549 in opal_progress () from 
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi/lib/libopen-pal.so.0
</span><br>
<span class="quotelev1">&gt; #36 0x411b87cb in mca_pml_ob1_recv_frag_match () from 
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi//lib/openmpi/mca_pml_ob1.so
</span><br>
<span class="quotelev1">&gt; #37 0x411ce010 in mca_btl_sm_component_progress () from 
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi//lib/openmpi/mca_btl_sm.so
</span><br>
<span class="quotelev1">&gt; #38 0x411c2df9 in mca_bml_r2_progress () from 
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi//lib/openmpi/mca_bml_r2.so
</span><br>
<span class="quotelev1">&gt; #39 0x404fb549 in opal_progress () from 
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi/lib/libopen-pal.so.0
</span><br>
<span class="quotelev1">&gt; #40 0x411b87cb in mca_pml_ob1_recv_frag_match () from 
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi//lib/openmpi/mca_pml_ob1.so
</span><br>
<span class="quotelev1">&gt; #41 0x411ce010 in mca_btl_sm_component_progress () from 
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi//lib/openmpi/mca_btl_sm.so
</span><br>
<span class="quotelev1">&gt; #42 0x411c2df9 in mca_bml_r2_progress () from 
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi//lib/openmpi/mca_bml_r2.so
</span><br>
<span class="quotelev1">&gt; #43 0x404fb549 in opal_progress () from 
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi/lib/libopen-pal.so.0
</span><br>
<span class="quotelev1">&gt; #44 0x411b87cb in mca_pml_ob1_recv_frag_match () from 
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi//lib/openmpi/mca_pml_ob1.so
</span><br>
<span class="quotelev1">&gt; (...)
</span><br>
<span class="quotelev1">&gt; #19661 0x411ce010 in mca_btl_sm_component_progress () from 
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi//lib/openmpi/mca_btl_sm.so
</span><br>
<span class="quotelev1">&gt; #19662 0x411c2df9 in mca_bml_r2_progress () from 
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi//lib/openmpi/mca_bml_r2.so
</span><br>
<span class="quotelev1">&gt; #19663 0x404fb549 in opal_progress () from 
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi/lib/libopen-pal.so.0
</span><br>
<span class="quotelev1">&gt; #19664 0x411b87cb in mca_pml_ob1_recv_frag_match () from 
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi//lib/openmpi/mca_pml_ob1.so
</span><br>
<span class="quotelev1">&gt; #19665 0x411ce010 in mca_btl_sm_component_progress () from 
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi//lib/openmpi/mca_btl_sm.so
</span><br>
<span class="quotelev1">&gt; #19666 0x411c2df9 in mca_bml_r2_progress () from 
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi//lib/openmpi/mca_bml_r2.so
</span><br>
<span class="quotelev1">&gt; #19667 0x404fb549 in opal_progress () from 
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi/lib/libopen-pal.so.0
</span><br>
<span class="quotelev1">&gt; #19668 0x400d9bb5 in ompi_request_wait_all () from 
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi/lib/libmpi.so.0
</span><br>
<span class="quotelev1">&gt; #19669 0x411f57a3 in ompi_coll_tuned_bcast_intra_generic () from 
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi//lib/openmpi/mca_coll_tuned.so
</span><br>
<span class="quotelev1">&gt; #19670 0x411f5e55 in ompi_coll_tuned_bcast_intra_binomial () from 
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi//lib/openmpi/mca_coll_tuned.so
</span><br>
<span class="quotelev1">&gt; #19671 0x411efb3f in ompi_coll_tuned_bcast_intra_dec_fixed () from 
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi//lib/openmpi/mca_coll_tuned.so
</span><br>
<span class="quotelev1">&gt; #19672 0x400ee239 in PMPI_Bcast () from /usr/local/openmpi/lib/libmpi.so.0
</span><br>
<span class="quotelev1">&gt; #19673 0x081009a3 in CProcessing::postProcessWorker (this=0x843a3c8) at 
</span><br>
<span class="quotelev1">&gt; CProcessing.cpp:403
</span><br>
<span class="quotelev1">&gt; #19674 0x081042ee in CInputSetMap::postProcessWorker (this=0x843a260) at 
</span><br>
<span class="quotelev1">&gt; CInputSetMap.cpp:554
</span><br>
<span class="quotelev1">&gt; #19675 0x0812f0f5 in CInputSetMap::processWorker (this=0x843a3f8) at 
</span><br>
<span class="quotelev1">&gt; CInputSetMap.cpp:580
</span><br>
<span class="quotelev1">&gt; #19676 0x080b0945 in CLS_WorkerStart () at CLS_WorkerStartup.cpp:11
</span><br>
<span class="quotelev1">&gt; #19677 0x080ac2e9 in CLS_Worker () at CLS_Worker.cpp:44
</span><br>
<span class="quotelev1">&gt; #19678 0x0813706f in main (argc=1, argv=0xbfae84d4) at SYS_Main.cpp:201
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Seems like recursive endless loop for me...
</span><br>
<span class="quotelev1">&gt; Unfortunately I have to spread one double per one MPI_Bcast (not whole 
</span><br>
<span class="quotelev1">&gt; vector for example), as the behavior later needs such approach (don't 
</span><br>
<span class="quotelev1">&gt; ask why). I commented out everything that can be dangerous, in fact I'm 
</span><br>
<span class="quotelev1">&gt; just spreading data now and this is enough to crash... it appears only 
</span><br>
<span class="quotelev1">&gt; on a big input set, whole code works perfecly on smaller datasets.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; code:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; HEAD:
</span><br>
<span class="quotelev1">&gt;         for(i=0; i &lt; numAlphaSets; i++)
</span><br>
<span class="quotelev1">&gt;         {
</span><br>
<span class="quotelev1">&gt;             CAlphaSet *alphaSet = *alphaSetIterator;
</span><br>
<span class="quotelev1">&gt;             for(cols=0; cols &lt; numCols; cols++)
</span><br>
<span class="quotelev1">&gt;             {
</span><br>
<span class="quotelev1">&gt;                 double alpha =alphaSet-&gt;alpha[cols-1];
</span><br>
<span class="quotelev1">&gt;                 MPI_Bcast(&amp;alpha, 1, MPI_DOUBLE, 0, MPI_COMM_WORLD);
</span><br>
<span class="quotelev1">&gt;             }
</span><br>
<span class="quotelev1">&gt;             *alphaSetIterator++;
</span><br>
<span class="quotelev1">&gt;         }
</span><br>
<span class="quotelev1">&gt;        
</span><br>
<span class="quotelev1">&gt; WORKER:
</span><br>
<span class="quotelev1">&gt;         double alpha;
</span><br>
<span class="quotelev1">&gt;         for(i=0; i &lt; numAlphaSets; i++)
</span><br>
<span class="quotelev1">&gt;         {
</span><br>
<span class="quotelev1">&gt;             for(cols=0; cols &lt; numCols; cols++)
</span><br>
<span class="quotelev1">&gt;             {
</span><br>
<span class="quotelev1">&gt;                 MPI_Bcast(&amp;alpha, 1, MPI_DOUBLE, 0, MPI_COMM_WORLD);
</span><br>
<span class="quotelev1">&gt;                 // do something with alpha, commented out for debug
</span><br>
<span class="quotelev1">&gt;             }
</span><br>
<span class="quotelev1">&gt;         }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I try to spread around 820,000 MPI_DOUBLEs that way. Obviously, I will 
</span><br>
<span class="quotelev1">&gt; re-write this to spread data in bigger chunks and split them on workers, 
</span><br>
<span class="quotelev1">&gt; but seems strange anyway... could be some buffer issues, or...?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; greets, Marcin
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ------------------------------
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
<span class="quotelev1">&gt; End of users Digest, Vol 740, Issue 1
</span><br>
<span class="quotelev1">&gt; *************************************
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4462.php">Marcin Skoczylas: "Re: [OMPI users] core from today"</a>
<li><strong>Previous message:</strong> <a href="4460.php">Marcin Skoczylas: "[OMPI users] core from today"</a>
<li><strong>Maybe in reply to:</strong> <a href="4460.php">Marcin Skoczylas: "[OMPI users] core from today"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4462.php">Marcin Skoczylas: "Re: [OMPI users] core from today"</a>
<li><strong>Reply:</strong> <a href="4462.php">Marcin Skoczylas: "Re: [OMPI users] core from today"</a>
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

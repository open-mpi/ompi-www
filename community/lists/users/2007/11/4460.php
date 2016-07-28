<?
$subject_val = "[OMPI users] core from today";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Nov 13 06:47:07 2007" -->
<!-- isoreceived="20071113114707" -->
<!-- sent="Tue, 13 Nov 2007 12:26:43 +0100" -->
<!-- isosent="20071113112643" -->
<!-- name="Marcin Skoczylas" -->
<!-- email="Marcin.Skoczylas_at_[hidden]" -->
<!-- subject="[OMPI users] core from today" -->
<!-- id="473989F3.8070808_at_lnl.infn.it" -->
<!-- charset="ISO-8859-2" -->
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
<strong>Subject:</strong> [OMPI users] core from today<br>
<strong>From:</strong> Marcin Skoczylas (<em>Marcin.Skoczylas_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-11-13 06:26:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4461.php">Terry Dontje: "Re: [OMPI users] core from today"</a>
<li><strong>Previous message:</strong> <a href="4459.php">pat.o'bryant_at_[hidden]: "Re: [OMPI users] openib errors as user, but not root"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4461.php">Terry Dontje: "Re: [OMPI users] core from today"</a>
<li><strong>Maybe reply:</strong> <a href="4461.php">Terry Dontje: "Re: [OMPI users] core from today"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
OpenMPI 1.2.4
<br>
<p>mpirun noticed that job rank 0 with PID 19021 on node pc801 exited on 
<br>
signal 15 (Terminated).
<br>
11 additional processes aborted (not shown)
<br>
<p>(gdb) bt
<br>
#0  0x411b776c in mca_pml_ob1_recv_frag_match () from 
<br>
/usr/local/openmpi//lib/openmpi/mca_pml_ob1.so
<br>
#1  0x411ce010 in mca_btl_sm_component_progress () from 
<br>
/usr/local/openmpi//lib/openmpi/mca_btl_sm.so
<br>
#2  0x411c2df9 in mca_bml_r2_progress () from 
<br>
/usr/local/openmpi//lib/openmpi/mca_bml_r2.so
<br>
#3  0x404fb549 in opal_progress () from 
<br>
/usr/local/openmpi/lib/libopen-pal.so.0
<br>
#4  0x411b87cb in mca_pml_ob1_recv_frag_match () from 
<br>
/usr/local/openmpi//lib/openmpi/mca_pml_ob1.so
<br>
#5  0x411ce010 in mca_btl_sm_component_progress () from 
<br>
/usr/local/openmpi//lib/openmpi/mca_btl_sm.so
<br>
#6  0x411c2df9 in mca_bml_r2_progress () from 
<br>
/usr/local/openmpi//lib/openmpi/mca_bml_r2.so
<br>
#7  0x404fb549 in opal_progress () from 
<br>
/usr/local/openmpi/lib/libopen-pal.so.0
<br>
#8  0x411b87cb in mca_pml_ob1_recv_frag_match () from 
<br>
/usr/local/openmpi//lib/openmpi/mca_pml_ob1.so
<br>
#9  0x411ce010 in mca_btl_sm_component_progress () from 
<br>
/usr/local/openmpi//lib/openmpi/mca_btl_sm.so
<br>
#10 0x411c2df9 in mca_bml_r2_progress () from 
<br>
/usr/local/openmpi//lib/openmpi/mca_bml_r2.so
<br>
#11 0x404fb549 in opal_progress () from 
<br>
/usr/local/openmpi/lib/libopen-pal.so.0
<br>
#12 0x411b87cb in mca_pml_ob1_recv_frag_match () from 
<br>
/usr/local/openmpi//lib/openmpi/mca_pml_ob1.so
<br>
#13 0x411ce010 in mca_btl_sm_component_progress () from 
<br>
/usr/local/openmpi//lib/openmpi/mca_btl_sm.so
<br>
#14 0x411c2df9 in mca_bml_r2_progress () from 
<br>
/usr/local/openmpi//lib/openmpi/mca_bml_r2.so
<br>
#15 0x404fb549 in opal_progress () from 
<br>
/usr/local/openmpi/lib/libopen-pal.so.0
<br>
#16 0x411b87cb in mca_pml_ob1_recv_frag_match () from 
<br>
/usr/local/openmpi//lib/openmpi/mca_pml_ob1.so
<br>
#17 0x411ce010 in mca_btl_sm_component_progress () from 
<br>
/usr/local/openmpi//lib/openmpi/mca_btl_sm.so
<br>
#18 0x411c2df9 in mca_bml_r2_progress () from 
<br>
/usr/local/openmpi//lib/openmpi/mca_bml_r2.so
<br>
#19 0x404fb549 in opal_progress () from 
<br>
/usr/local/openmpi/lib/libopen-pal.so.0
<br>
#20 0x411b87cb in mca_pml_ob1_recv_frag_match () from 
<br>
/usr/local/openmpi//lib/openmpi/mca_pml_ob1.so
<br>
#21 0x411ce010 in mca_btl_sm_component_progress () from 
<br>
/usr/local/openmpi//lib/openmpi/mca_btl_sm.so
<br>
#22 0x411c2df9 in mca_bml_r2_progress () from 
<br>
/usr/local/openmpi//lib/openmpi/mca_bml_r2.so
<br>
#23 0x404fb549 in opal_progress () from 
<br>
/usr/local/openmpi/lib/libopen-pal.so.0
<br>
#24 0x411b87cb in mca_pml_ob1_recv_frag_match () from 
<br>
/usr/local/openmpi//lib/openmpi/mca_pml_ob1.so
<br>
#25 0x411ce010 in mca_btl_sm_component_progress () from 
<br>
/usr/local/openmpi//lib/openmpi/mca_btl_sm.so
<br>
#26 0x411c2df9 in mca_bml_r2_progress () from 
<br>
/usr/local/openmpi//lib/openmpi/mca_bml_r2.so
<br>
#27 0x404fb549 in opal_progress () from 
<br>
/usr/local/openmpi/lib/libopen-pal.so.0
<br>
#28 0x411b87cb in mca_pml_ob1_recv_frag_match () from 
<br>
/usr/local/openmpi//lib/openmpi/mca_pml_ob1.so
<br>
#29 0x411ce010 in mca_btl_sm_component_progress () from 
<br>
/usr/local/openmpi//lib/openmpi/mca_btl_sm.so
<br>
#30 0x411c2df9 in mca_bml_r2_progress () from 
<br>
/usr/local/openmpi//lib/openmpi/mca_bml_r2.so
<br>
#31 0x404fb549 in opal_progress () from 
<br>
/usr/local/openmpi/lib/libopen-pal.so.0
<br>
#32 0x411b87cb in mca_pml_ob1_recv_frag_match () from 
<br>
/usr/local/openmpi//lib/openmpi/mca_pml_ob1.so
<br>
#33 0x411ce010 in mca_btl_sm_component_progress () from 
<br>
/usr/local/openmpi//lib/openmpi/mca_btl_sm.so
<br>
#34 0x411c2df9 in mca_bml_r2_progress () from 
<br>
/usr/local/openmpi//lib/openmpi/mca_bml_r2.so
<br>
#35 0x404fb549 in opal_progress () from 
<br>
/usr/local/openmpi/lib/libopen-pal.so.0
<br>
#36 0x411b87cb in mca_pml_ob1_recv_frag_match () from 
<br>
/usr/local/openmpi//lib/openmpi/mca_pml_ob1.so
<br>
#37 0x411ce010 in mca_btl_sm_component_progress () from 
<br>
/usr/local/openmpi//lib/openmpi/mca_btl_sm.so
<br>
#38 0x411c2df9 in mca_bml_r2_progress () from 
<br>
/usr/local/openmpi//lib/openmpi/mca_bml_r2.so
<br>
#39 0x404fb549 in opal_progress () from 
<br>
/usr/local/openmpi/lib/libopen-pal.so.0
<br>
#40 0x411b87cb in mca_pml_ob1_recv_frag_match () from 
<br>
/usr/local/openmpi//lib/openmpi/mca_pml_ob1.so
<br>
#41 0x411ce010 in mca_btl_sm_component_progress () from 
<br>
/usr/local/openmpi//lib/openmpi/mca_btl_sm.so
<br>
#42 0x411c2df9 in mca_bml_r2_progress () from 
<br>
/usr/local/openmpi//lib/openmpi/mca_bml_r2.so
<br>
#43 0x404fb549 in opal_progress () from 
<br>
/usr/local/openmpi/lib/libopen-pal.so.0
<br>
#44 0x411b87cb in mca_pml_ob1_recv_frag_match () from 
<br>
/usr/local/openmpi//lib/openmpi/mca_pml_ob1.so
<br>
(...)
<br>
#19661 0x411ce010 in mca_btl_sm_component_progress () from 
<br>
/usr/local/openmpi//lib/openmpi/mca_btl_sm.so
<br>
#19662 0x411c2df9 in mca_bml_r2_progress () from 
<br>
/usr/local/openmpi//lib/openmpi/mca_bml_r2.so
<br>
#19663 0x404fb549 in opal_progress () from 
<br>
/usr/local/openmpi/lib/libopen-pal.so.0
<br>
#19664 0x411b87cb in mca_pml_ob1_recv_frag_match () from 
<br>
/usr/local/openmpi//lib/openmpi/mca_pml_ob1.so
<br>
#19665 0x411ce010 in mca_btl_sm_component_progress () from 
<br>
/usr/local/openmpi//lib/openmpi/mca_btl_sm.so
<br>
#19666 0x411c2df9 in mca_bml_r2_progress () from 
<br>
/usr/local/openmpi//lib/openmpi/mca_bml_r2.so
<br>
#19667 0x404fb549 in opal_progress () from 
<br>
/usr/local/openmpi/lib/libopen-pal.so.0
<br>
#19668 0x400d9bb5 in ompi_request_wait_all () from 
<br>
/usr/local/openmpi/lib/libmpi.so.0
<br>
#19669 0x411f57a3 in ompi_coll_tuned_bcast_intra_generic () from 
<br>
/usr/local/openmpi//lib/openmpi/mca_coll_tuned.so
<br>
#19670 0x411f5e55 in ompi_coll_tuned_bcast_intra_binomial () from 
<br>
/usr/local/openmpi//lib/openmpi/mca_coll_tuned.so
<br>
#19671 0x411efb3f in ompi_coll_tuned_bcast_intra_dec_fixed () from 
<br>
/usr/local/openmpi//lib/openmpi/mca_coll_tuned.so
<br>
#19672 0x400ee239 in PMPI_Bcast () from /usr/local/openmpi/lib/libmpi.so.0
<br>
#19673 0x081009a3 in CProcessing::postProcessWorker (this=0x843a3c8) at 
<br>
CProcessing.cpp:403
<br>
#19674 0x081042ee in CInputSetMap::postProcessWorker (this=0x843a260) at 
<br>
CInputSetMap.cpp:554
<br>
#19675 0x0812f0f5 in CInputSetMap::processWorker (this=0x843a3f8) at 
<br>
CInputSetMap.cpp:580
<br>
#19676 0x080b0945 in CLS_WorkerStart () at CLS_WorkerStartup.cpp:11
<br>
#19677 0x080ac2e9 in CLS_Worker () at CLS_Worker.cpp:44
<br>
#19678 0x0813706f in main (argc=1, argv=0xbfae84d4) at SYS_Main.cpp:201
<br>
<p>Seems like recursive endless loop for me...
<br>
Unfortunately I have to spread one double per one MPI_Bcast (not whole 
<br>
vector for example), as the behavior later needs such approach (don't 
<br>
ask why). I commented out everything that can be dangerous, in fact I'm 
<br>
just spreading data now and this is enough to crash... it appears only 
<br>
on a big input set, whole code works perfecly on smaller datasets.
<br>
<p>code:
<br>
<p>HEAD:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;for(i=0; i &lt; numAlphaSets; i++)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;CAlphaSet *alphaSet = *alphaSetIterator;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;for(cols=0; cols &lt; numCols; cols++)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;double alpha =alphaSet-&gt;alpha[cols-1];
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Bcast(&amp;alpha, 1, MPI_DOUBLE, 0, MPI_COMM_WORLD);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*alphaSetIterator++;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
WORKER:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;double alpha;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;for(i=0; i &lt; numAlphaSets; i++)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;for(cols=0; cols &lt; numCols; cols++)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Bcast(&amp;alpha, 1, MPI_DOUBLE, 0, MPI_COMM_WORLD);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;// do something with alpha, commented out for debug
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<p>I try to spread around 820,000 MPI_DOUBLEs that way. Obviously, I will 
<br>
re-write this to spread data in bigger chunks and split them on workers, 
<br>
but seems strange anyway... could be some buffer issues, or...?
<br>
<p>greets, Marcin
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4461.php">Terry Dontje: "Re: [OMPI users] core from today"</a>
<li><strong>Previous message:</strong> <a href="4459.php">pat.o'bryant_at_[hidden]: "Re: [OMPI users] openib errors as user, but not root"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4461.php">Terry Dontje: "Re: [OMPI users] core from today"</a>
<li><strong>Maybe reply:</strong> <a href="4461.php">Terry Dontje: "Re: [OMPI users] core from today"</a>
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

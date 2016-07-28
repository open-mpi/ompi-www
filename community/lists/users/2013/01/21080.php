<?
$subject_val = "Re: [OMPI users] [SPAM:## 71%] checkpoint --term core dump";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan  4 22:02:07 2013" -->
<!-- isoreceived="20130105030207" -->
<!-- sent="Fri, 4 Jan 2013 19:01:59 -0800" -->
<!-- isosent="20130105030159" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] [SPAM:## 71%] checkpoint --term core dump" -->
<!-- id="B3B4710F-81CE-4F74-B842-7F050C7A2A1E_at_open-mpi.org" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="23632_1357346079_r050YZfK020391_SNT002-W40700073E42AC194E61321D3270_at_phx.gbl" -->
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
<strong>Subject:</strong> Re: [OMPI users] [SPAM:## 71%] checkpoint --term core dump<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-01-04 22:01:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21081.php">Siegmar Gross: "[OMPI users] problem building openmpi-1.9a1r27751 on Solaris 10"</a>
<li><strong>Previous message:</strong> <a href="21079.php">William Au: "[OMPI users] [SPAM:## 71%] checkpoint --term core dump"</a>
<li><strong>In reply to:</strong> <a href="21079.php">William Au: "[OMPI users] [SPAM:## 71%] checkpoint --term core dump"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'm afraid we have lost our checkpoint/restart support, so we probably won't be able to address this unless he just happens to glance in at some time. Only suggestion I could make is to not enable the thread options as thread support is weak at best.
<br>
<p>On Jan 4, 2013, at 4:34 PM, William Au &lt;au_wai_chung_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi, 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I encountered a core dump when using ompi-checkpoint  --term pid.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Here is the trace:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [genova:01808] *** Process received signal ***
</span><br>
<span class="quotelev1">&gt; [genova:01808] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev1">&gt; [genova:01808] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev1">&gt; [genova:01808] Failing at address: 0x90
</span><br>
<span class="quotelev1">&gt; [genova:01808] [ 0] /lib64/libpthread.so.0 [0x3a78a0ebe0]
</span><br>
<span class="quotelev1">&gt; [genova:01808] [ 1] /import/cad-capex2/wa156553/openmpi-1.6_x86_64_i4/lib/openmpi/mca_crcp_bkmrk.so [0x2aaaaefe110b]
</span><br>
<span class="quotelev1">&gt; [genova:01808] [ 2] /import/cad-capex2/wa156553/openmpi-1.6_x86_64_i4/lib/openmpi/mca_crcp_bkmrk.so [0x2aaaaefe4952]
</span><br>
<span class="quotelev1">&gt; [genova:01808] [ 3] /import/cad-capex2/wa156553/openmpi-1.6_x86_64_i4/lib/openmpi/mca_crcp_bkmrk.so(ompi_crcp_bkmrk_pml_ft_event+0x74e) [0x2aaaaefe5b9e]
</span><br>
<span class="quotelev1">&gt; [genova:01808] [ 4] /import/cad-capex2/wa156553/openmpi-1.6_x86_64_i4/lib/openmpi/mca_pml_crcpw.so(mca_pml_crcpw_ft_event+0x59) [0x2aaaacc1eea9]
</span><br>
<span class="quotelev1">&gt; [genova:01808] [ 5] /import/cad-capex2/wa156553/openmpi-1.6_x86_64_i4/lib/libmpi.so.1(ompi_cr_coord+0xe0) [0x2b95b29a5690]
</span><br>
<span class="quotelev1">&gt; [genova:01808] [ 6] /import/cad-capex2/wa156553/openmpi-1.6_x86_64_i4/lib/libmpi.so.1(opal_cr_inc_core_prep+0xc) [0x2b95b2a6017c]
</span><br>
<span class="quotelev1">&gt; [genova:01808] [ 7] /import/cad-capex2/wa156553/openmpi-1.6_x86_64_i4/lib/openmpi/mca_snapc_full.so [0x2aaaab7d9d15]
</span><br>
<span class="quotelev1">&gt; [genova:01808] [ 8] /import/cad-capex2/wa156553/openmpi-1.6_x86_64_i4/lib/libmpi.so.1(opal_cr_test_if_checkpoint_ready+0x52) [0x2b95b2a60282]
</span><br>
<span class="quotelev1">&gt; [genova:01808] [ 9] /import/cad-capex2/wa156553/openmpi-1.6_x86_64_i4/lib/libmpi.so.1 [0x2b95b2a60ec1]
</span><br>
<span class="quotelev1">&gt; [genova:01808] [10] /lib64/libpthread.so.0 [0x3a78a0677d]
</span><br>
<span class="quotelev1">&gt; [genova:01808] [11] /lib64/libc.so.6(clone+0x6d) [0x3a77ad3c1d]
</span><br>
<span class="quotelev1">&gt; [genova:01808] *** End of error message ***
</span><br>
<span class="quotelev1">&gt; [genova:01807] local) Error: Unable to read state from named pipe (/tmp/opal_cr_prog_write.1808). 0
</span><br>
<span class="quotelev1">&gt; [genova:01807] [[8178,0],0] ORTE_ERROR_LOG: Error in file snapc_full_local.c at line 1602
</span><br>
<span class="quotelev1">&gt; [genova:01807] local) Error: Unable to read state from named pipe (/tmp/opal_cr_prog_write.1810). 0
</span><br>
<span class="quotelev1">&gt; [genova:01807] [[8178,0],0] ORTE_ERROR_LOG: Error in file snapc_full_local.c at line 1602
</span><br>
<span class="quotelev1">&gt; [genova:01807] local) Error: Unable to read state from named pipe (/tmp/opal_cr_prog_write.1809). 0
</span><br>
<span class="quotelev1">&gt; [genova:01807] [[8178,0],0] ORTE_ERROR_LOG: Error in file snapc_full_local.c at line 1602
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I configure with the following options:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ./configure  --enable-heterogeneous --enable-cxx-exceptions --enable-shared --enable-orterun-prefix-by-default --enable-mpi-f90 --with-mpi-f90-size=small --with-ft=cr --with-blcr=/opt/blcr --with-blcr-libdir=/opt/blcr/lib --enable-ft-thread --enable-opal-multi-threads
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am using openmpi 1.6.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Any idea where I should look?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; William
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-21080/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21081.php">Siegmar Gross: "[OMPI users] problem building openmpi-1.9a1r27751 on Solaris 10"</a>
<li><strong>Previous message:</strong> <a href="21079.php">William Au: "[OMPI users] [SPAM:## 71%] checkpoint --term core dump"</a>
<li><strong>In reply to:</strong> <a href="21079.php">William Au: "[OMPI users] [SPAM:## 71%] checkpoint --term core dump"</a>
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

<?
$subject_val = "[OMPI users] [SPAM:## 71%] checkpoint --term core dump";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan  4 19:34:39 2013" -->
<!-- isoreceived="20130105003439" -->
<!-- sent="Fri, 4 Jan 2013 16:34:32 -0800" -->
<!-- isosent="20130105003432" -->
<!-- name="William Au" -->
<!-- email="au_wai_chung_at_[hidden]" -->
<!-- subject="[OMPI users] [SPAM:## 71%] checkpoint --term core dump" -->
<!-- id="23632_1357346079_r050YZfK020391_SNT002-W40700073E42AC194E61321D3270_at_phx.gbl" -->
<!-- charset="iso-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] [SPAM:## 71%] checkpoint --term core dump<br>
<strong>From:</strong> William Au (<em>au_wai_chung_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-01-04 19:34:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21080.php">Ralph Castain: "Re: [OMPI users] [SPAM:## 71%] checkpoint --term core dump"</a>
<li><strong>Previous message:</strong> <a href="21078.php">Mariana Vargas Magana: "[OMPI users] problem: help-hostfile.txt: Too many open files in system."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21080.php">Ralph Castain: "Re: [OMPI users] [SPAM:## 71%] checkpoint --term core dump"</a>
<li><strong>Reply:</strong> <a href="21080.php">Ralph Castain: "Re: [OMPI users] [SPAM:## 71%] checkpoint --term core dump"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi, 
<br>
<p>I encountered a core dump when using ompi-checkpoint  --term pid.
<br>
<p>Here is the trace:
<br>
<p>[genova:01808] *** Process received signal ***
<br>
[genova:01808] Signal: Segmentation fault (11)
<br>
[genova:01808] Signal code: Address not mapped (1)
<br>
[genova:01808] Failing at address: 0x90
<br>
[genova:01808] [ 0] /lib64/libpthread.so.0 [0x3a78a0ebe0]
<br>
[genova:01808] [ 1] /import/cad-capex2/wa156553/openmpi-1.6_x86_64_i4/lib/openmpi/mca_crcp_bkmrk.so [0x2aaaaefe110b]
<br>
[genova:01808] [ 2] /import/cad-capex2/wa156553/openmpi-1.6_x86_64_i4/lib/openmpi/mca_crcp_bkmrk.so [0x2aaaaefe4952]
<br>
[genova:01808] [ 3] /import/cad-capex2/wa156553/openmpi-1.6_x86_64_i4/lib/openmpi/mca_crcp_bkmrk.so(ompi_crcp_bkmrk_pml_ft_event+0x74e) [0x2aaaaefe5b9e]
<br>
[genova:01808] [ 4] /import/cad-capex2/wa156553/openmpi-1.6_x86_64_i4/lib/openmpi/mca_pml_crcpw.so(mca_pml_crcpw_ft_event+0x59) [0x2aaaacc1eea9]
<br>
[genova:01808] [ 5] /import/cad-capex2/wa156553/openmpi-1.6_x86_64_i4/lib/libmpi.so.1(ompi_cr_coord+0xe0) [0x2b95b29a5690]
<br>
[genova:01808] [ 6] /import/cad-capex2/wa156553/openmpi-1.6_x86_64_i4/lib/libmpi.so.1(opal_cr_inc_core_prep+0xc) [0x2b95b2a6017c]
<br>
[genova:01808] [ 7] /import/cad-capex2/wa156553/openmpi-1.6_x86_64_i4/lib/openmpi/mca_snapc_full.so [0x2aaaab7d9d15]
<br>
[genova:01808] [ 8] /import/cad-capex2/wa156553/openmpi-1.6_x86_64_i4/lib/libmpi.so.1(opal_cr_test_if_checkpoint_ready+0x52) [0x2b95b2a60282]
<br>
[genova:01808] [ 9] /import/cad-capex2/wa156553/openmpi-1.6_x86_64_i4/lib/libmpi.so.1 [0x2b95b2a60ec1]
<br>
[genova:01808] [10] /lib64/libpthread.so.0 [0x3a78a0677d]
<br>
[genova:01808] [11] /lib64/libc.so.6(clone+0x6d) [0x3a77ad3c1d]
<br>
[genova:01808] *** End of error message ***
<br>
[genova:01807] local) Error: Unable to read state from named pipe (/tmp/opal_cr_prog_write.1808). 0
<br>
[genova:01807] [[8178,0],0] ORTE_ERROR_LOG: Error in file snapc_full_local.c at line 1602
<br>
[genova:01807] local) Error: Unable to read state from named pipe (/tmp/opal_cr_prog_write.1810). 0
<br>
[genova:01807] [[8178,0],0] ORTE_ERROR_LOG: Error in file snapc_full_local.c at line 1602
<br>
[genova:01807] local) Error: Unable to read state from named pipe (/tmp/opal_cr_prog_write.1809). 0
<br>
[genova:01807] [[8178,0],0] ORTE_ERROR_LOG: Error in file snapc_full_local.c at line 1602
<br>
<p>I configure with the following options:
<br>
<p>./configure  --enable-heterogeneous --enable-cxx-exceptions --enable-shared --enable-orterun-prefix-by-default --enable-mpi-f90 --with-mpi-f90-size=small --with-ft=cr --with-blcr=/opt/blcr --with-blcr-libdir=/opt/blcr/lib --enable-ft-thread --enable-opal-multi-threads
<br>
<p>I am using openmpi 1.6.
<br>
<p>Any idea where I should look?
<br>
<p>Thanks.
<br>
<p>Regards,
<br>
<p>William
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-21079/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21080.php">Ralph Castain: "Re: [OMPI users] [SPAM:## 71%] checkpoint --term core dump"</a>
<li><strong>Previous message:</strong> <a href="21078.php">Mariana Vargas Magana: "[OMPI users] problem: help-hostfile.txt: Too many open files in system."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21080.php">Ralph Castain: "Re: [OMPI users] [SPAM:## 71%] checkpoint --term core dump"</a>
<li><strong>Reply:</strong> <a href="21080.php">Ralph Castain: "Re: [OMPI users] [SPAM:## 71%] checkpoint --term core dump"</a>
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

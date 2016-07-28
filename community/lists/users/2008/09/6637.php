<?
$subject_val = "Re: [OMPI users] Segmentation Fault--libc.so.6(__libc_start_main...";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Sep 20 09:54:26 2008" -->
<!-- isoreceived="20080920135426" -->
<!-- sent="Sat, 20 Sep 2008 09:54:14 -0400" -->
<!-- isosent="20080920135414" -->
<!-- name="Aur&#233;lien Bouteiller" -->
<!-- email="bouteill_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Segmentation Fault--libc.so.6(__libc_start_main..." -->
<!-- id="7050BA49-51D5-46B2-A6B9-6409DA7CBD66_at_eecs.utk.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="405709.20690.qm_at_web34806.mail.mud.yahoo.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Segmentation Fault--libc.so.6(__libc_start_main...<br>
<strong>From:</strong> Aur&#233;lien Bouteiller (<em>bouteill_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-09-20 09:54:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6638.php">Shafagh Jafer: "Re: [OMPI users] Segmentation Fault--libc.so.6(__libc_start_main..."</a>
<li><strong>Previous message:</strong> <a href="6636.php">Gabriele Fatigati: "Re: [OMPI users] MPI Finalize"</a>
<li><strong>In reply to:</strong> <a href="6635.php">Shafagh Jafer: "[OMPI users] Segmentation Fault--libc.so.6(__libc_start_main..."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6638.php">Shafagh Jafer: "Re: [OMPI users] Segmentation Fault--libc.so.6(__libc_start_main..."</a>
<li><strong>Reply:</strong> <a href="6638.php">Shafagh Jafer: "Re: [OMPI users] Segmentation Fault--libc.so.6(__libc_start_main..."</a>
<li><strong>Reply:</strong> <a href="6639.php">Shafagh Jafer: "[OMPI users] Migrating from MPICH-1.2.6 to OpenMPI-1.2.7"</a>
<li><strong>Reply:</strong> <a href="6640.php">Shafagh Jafer: "Re: [OMPI users] Segmentation Fault--libc.so.6(__libc_start_main..."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Shafagh,
<br>
<p>You have a segfault in your own code. Because Open MPI detects it, it  
<br>
forwards the error to you and pretty print it but Open MPI is not the  
<br>
source of the bug. From the stack trace, I suggest you gdb debug the  
<br>
PhysicalGetID function.
<br>
<p>Aurelien
<br>
<p>Le 19 sept. 08 &#224; 22:22, Shafagh Jafer a &#233;crit :
<br>
<p><span class="quotelev1">&gt; Hi every one,
</span><br>
<span class="quotelev1">&gt; I need urgent help plz :-(
</span><br>
<span class="quotelev1">&gt; I am getting the following error when i run my program. OpenMPI  
</span><br>
<span class="quotelev1">&gt; compilation was all fine and went well, but now i dont understand  
</span><br>
<span class="quotelev1">&gt; the source of this error:
</span><br>
<span class="quotelev1">&gt; ============================================
</span><br>
<span class="quotelev1">&gt; [node01:29264] *** Process received signal ***
</span><br>
<span class="quotelev1">&gt; [node01:29264] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev1">&gt; [node01:29264] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev1">&gt; [node01:29264] Failing at address: 0xcf
</span><br>
<span class="quotelev1">&gt; [node01:29264] [ 0] /lib/tls/libpthread.so.0 [0x7ccf80]
</span><br>
<span class="quotelev1">&gt; [node01:29264] [ 1] /nfs/sjafer/phd/openMPI/latest_cd++_timewarp/cd++ 
</span><br>
<span class="quotelev1">&gt; (physicalGetId__C10CommPhyMPI+0x14) [0x8305880]
</span><br>
<span class="quotelev1">&gt; [node01:29264] [ 2] /nfs/sjafer/phd/openMPI/latest_cd++_timewarp/cd++ 
</span><br>
<span class="quotelev1">&gt; (physicalCommGetId__Fv+0x43) [0x82ff81b]
</span><br>
<span class="quotelev1">&gt; [node01:29264] [ 3] /nfs/sjafer/phd/openMPI/latest_cd++_timewarp/cd++ 
</span><br>
<span class="quotelev1">&gt; (openComm__16StandAloneLoader+0x1f) [0x80fdf43]
</span><br>
<span class="quotelev1">&gt; [node01:29264] [ 4] /nfs/sjafer/phd/openMPI/latest_cd++_timewarp/cd++ 
</span><br>
<span class="quotelev1">&gt; (run__21ParallelMainSimulator+0x1640) [0x81ea53c]
</span><br>
<span class="quotelev1">&gt; [node01:29264] [ 5] /nfs/sjafer/phd/openMPI/latest_cd++_timewarp/cd++ 
</span><br>
<span class="quotelev1">&gt; (main+0xde) [0x80a58ce]
</span><br>
<span class="quotelev1">&gt; [node01:29264] [ 6] /lib/tls/libc.so.6(__libc_start_main+0xda)  
</span><br>
<span class="quotelev1">&gt; [0xe3d79a]
</span><br>
<span class="quotelev1">&gt; [node01:29264] [ 7] /nfs/sjafer/phd/openMPI/latest_cd++_timewarp/cd++ 
</span><br>
<span class="quotelev1">&gt; (sinh+0x4d) [0x80a2221]
</span><br>
<span class="quotelev1">&gt; [node01:29264] *** End of error message ***
</span><br>
<span class="quotelev1">&gt; mpirun noticed that job rank 0 with PID 29264 on node node01 exited  
</span><br>
<span class="quotelev1">&gt; on signal 11 (Segmentation fault).
</span><br>
<span class="quotelev1">&gt; ===========================================
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
<p><p><p><pre>
--
* Dr. Aur&#233;lien Bouteiller
* Sr. Research Associate at Innovative Computing Laboratory
* University of Tennessee
* 1122 Volunteer Boulevard, suite 350
* Knoxville, TN 37996
* 865 974 6321
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6638.php">Shafagh Jafer: "Re: [OMPI users] Segmentation Fault--libc.so.6(__libc_start_main..."</a>
<li><strong>Previous message:</strong> <a href="6636.php">Gabriele Fatigati: "Re: [OMPI users] MPI Finalize"</a>
<li><strong>In reply to:</strong> <a href="6635.php">Shafagh Jafer: "[OMPI users] Segmentation Fault--libc.so.6(__libc_start_main..."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6638.php">Shafagh Jafer: "Re: [OMPI users] Segmentation Fault--libc.so.6(__libc_start_main..."</a>
<li><strong>Reply:</strong> <a href="6638.php">Shafagh Jafer: "Re: [OMPI users] Segmentation Fault--libc.so.6(__libc_start_main..."</a>
<li><strong>Reply:</strong> <a href="6639.php">Shafagh Jafer: "[OMPI users] Migrating from MPICH-1.2.6 to OpenMPI-1.2.7"</a>
<li><strong>Reply:</strong> <a href="6640.php">Shafagh Jafer: "Re: [OMPI users] Segmentation Fault--libc.so.6(__libc_start_main..."</a>
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

<?
$subject_val = "Re: [OMPI users] Segmentation Fault--libc.so.6(__libc_start_main...";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Sep 20 13:14:08 2008" -->
<!-- isoreceived="20080920171408" -->
<!-- sent="Sat, 20 Sep 2008 10:14:00 -0700 (PDT)" -->
<!-- isosent="20080920171400" -->
<!-- name="Shafagh Jafer" -->
<!-- email="barfy27_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Segmentation Fault--libc.so.6(__libc_start_main..." -->
<!-- id="141524.11919.qm_at_web34806.mail.mud.yahoo.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="7050BA49-51D5-46B2-A6B9-6409DA7CBD66_at_eecs.utk.edu" -->
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
<strong>From:</strong> Shafagh Jafer (<em>barfy27_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-09-20 13:14:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6639.php">Shafagh Jafer: "[OMPI users] Migrating from MPICH-1.2.6 to OpenMPI-1.2.7"</a>
<li><strong>Previous message:</strong> <a href="6637.php">Aur&#233;lien Bouteiller: "Re: [OMPI users] Segmentation Fault--libc.so.6(__libc_start_main..."</a>
<li><strong>In reply to:</strong> <a href="6637.php">Aur&#233;lien Bouteiller: "Re: [OMPI users] Segmentation Fault--libc.so.6(__libc_start_main..."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6639.php">Shafagh Jafer: "[OMPI users] Migrating from MPICH-1.2.6 to OpenMPI-1.2.7"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The thing is that my code runs perfectly when I use MPICH, this problem occurs only when i switch to openMPI. :(
<br>
<p>--- On Sat, 9/20/08, Aur&#233;lien Bouteiller &lt;bouteill_at_[hidden]&gt; wrote:
<br>
<p>From: Aur&#233;lien Bouteiller &lt;bouteill_at_[hidden]&gt;
<br>
Subject: Re: [OMPI users] Segmentation Fault--libc.so.6(__libc_start_main...
<br>
To: &quot;Open MPI Users&quot; &lt;users_at_[hidden]&gt;
<br>
Date: Saturday, September 20, 2008, 6:54 AM
<br>
<p>Shafagh,
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
_______________________________________________
users mailing list
users_at_[hidden]
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-6638/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6639.php">Shafagh Jafer: "[OMPI users] Migrating from MPICH-1.2.6 to OpenMPI-1.2.7"</a>
<li><strong>Previous message:</strong> <a href="6637.php">Aur&#233;lien Bouteiller: "Re: [OMPI users] Segmentation Fault--libc.so.6(__libc_start_main..."</a>
<li><strong>In reply to:</strong> <a href="6637.php">Aur&#233;lien Bouteiller: "Re: [OMPI users] Segmentation Fault--libc.so.6(__libc_start_main..."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6639.php">Shafagh Jafer: "[OMPI users] Migrating from MPICH-1.2.6 to OpenMPI-1.2.7"</a>
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

<?
$subject_val = "Re: [OMPI users] Problems running linpack benchmark on old Sunfire opteron nodes";
include("../../include/msg-header.inc");
?>
<!-- received="Sat May 23 03:55:10 2015" -->
<!-- isoreceived="20150523075510" -->
<!-- sent="Sat, 23 May 2015 16:55:03 +0900" -->
<!-- isosent="20150523075503" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles.gouaillardet_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problems running linpack benchmark on old Sunfire opteron nodes" -->
<!-- id="CAAkFZ5sNU_HrtKCA2WV4wrcqa__4+Uf3OafjgEF-dr92D2onRg_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="434F2BB0AF80484CA04DE0D8C0738BF293ECF391_at_cshsmsgmbx02.CSMC.EDU" -->
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
<strong>Subject:</strong> Re: [OMPI users] Problems running linpack benchmark on old Sunfire opteron nodes<br>
<strong>From:</strong> Gilles Gouaillardet (<em>gilles.gouaillardet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-05-23 03:55:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26908.php">XingFENG: "[OMPI users] OPENMPI only recognize 4 cores of AWS EC2 machine"</a>
<li><strong>Previous message:</strong> <a href="26906.php">Lane, William: "[OMPI users] Problems running linpack benchmark on old Sunfire opteron nodes"</a>
<li><strong>In reply to:</strong> <a href="26906.php">Lane, William: "[OMPI users] Problems running linpack benchmark on old Sunfire opteron nodes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26934.php">Aurélien Bouteiller: "Re: [OMPI users] Problems running linpack benchmark on old Sunfire opteron nodes"</a>
<li><strong>Reply:</strong> <a href="26934.php">Aurélien Bouteiller: "Re: [OMPI users] Problems running linpack benchmark on old Sunfire opteron nodes"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Bill,
<br>
<p>the root cause is likely there is not enough free space in /tmp.
<br>
<p>the simplest, but slowest, option is to run mpirun --mac btl tcp ...
<br>
if you cannot make enough space under /tmp (maybe you run diskless)
<br>
there are some options to create these kind of files under /dev/shm
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p><p>On Saturday, May 23, 2015, Lane, William &lt;William.Lane_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt;  I've compiled the linpack benchmark using openMPI 1.8.5 libraries
</span><br>
<span class="quotelev1">&gt; and include files on CentOS 6.4.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I've tested the binary on the one Intel node (some
</span><br>
<span class="quotelev1">&gt; sort of 4-core Xeon) and it runs, but when I try to run it on any of
</span><br>
<span class="quotelev1">&gt; the old Sunfire opteron compute nodes it appears to hang (although
</span><br>
<span class="quotelev1">&gt; top indicates CPU and memory usage) and eventually terminates
</span><br>
<span class="quotelev1">&gt; by itself. I'm also getting the following openMPI error messages/warnings:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpirun -np 16 --report-bindings --hostfile hostfile --prefix
</span><br>
<span class="quotelev1">&gt; /hpc/apps/mpi/openmpi/1.8.5-dev --mca btl_tcp_if_include eth0 xhpl
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [cscld1-0-6:24370] create_and_attach: unable to create shared memory BTL
</span><br>
<span class="quotelev1">&gt; coordinating structure :: size 134217728
</span><br>
<span class="quotelev1">&gt; [cscld1-0-3:24734] create_and_attach: unable to create shared memory BTL
</span><br>
<span class="quotelev1">&gt; coordinating structure :: size 134217728
</span><br>
<span class="quotelev1">&gt; [cscld1-0-7:25152] create_and_attach: unable to create shared memory BTL
</span><br>
<span class="quotelev1">&gt; coordinating structure :: size 134217728
</span><br>
<span class="quotelev1">&gt; [cscld1-0-4:18079] create_and_attach: unable to create shared memory BTL
</span><br>
<span class="quotelev1">&gt; coordinating structure :: size 134217728
</span><br>
<span class="quotelev1">&gt; [cscld1-0-8:21443] create_and_attach: unable to create shared memory BTL
</span><br>
<span class="quotelev1">&gt; coordinating structure :: size 134217728
</span><br>
<span class="quotelev1">&gt; [cscld1-0-2:19704] create_and_attach: unable to create shared memory BTL
</span><br>
<span class="quotelev1">&gt; coordinating structure :: size 134217728
</span><br>
<span class="quotelev1">&gt; [cscld1-0-5:13481] create_and_attach: unable to create shared memory BTL
</span><br>
<span class="quotelev1">&gt; coordinating structure :: size 134217728
</span><br>
<span class="quotelev1">&gt; [cscld1-0-0:21884] create_and_attach: unable to create shared memory BTL
</span><br>
<span class="quotelev1">&gt; coordinating structure :: size 134217728
</span><br>
<span class="quotelev1">&gt; [cscld1:24240] 7 more processes have sent help message
</span><br>
<span class="quotelev1">&gt; help-opal-shmem-mmap.txt / target full
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Note these errors also occur when I try to run the linpack benchmark on a
</span><br>
<span class="quotelev1">&gt; single
</span><br>
<span class="quotelev1">&gt; node as well.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Does anyone know what's going on here? Google came up w/nothing and I have
</span><br>
<span class="quotelev1">&gt; no
</span><br>
<span class="quotelev1">&gt; idea what a BTL coordinating structure is.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Bill L.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  IMPORTANT WARNING: This message is intended for the use of the person or
</span><br>
<span class="quotelev1">&gt; entity to which it is addressed and may contain information that is
</span><br>
<span class="quotelev1">&gt; privileged and confidential, the disclosure of which is governed by
</span><br>
<span class="quotelev1">&gt; applicable law. If the reader of this message is not the intended
</span><br>
<span class="quotelev1">&gt; recipient, or the employee or agent responsible for delivering it to the
</span><br>
<span class="quotelev1">&gt; intended recipient, you are hereby notified that any dissemination,
</span><br>
<span class="quotelev1">&gt; distribution or copying of this information is strictly prohibited. Thank
</span><br>
<span class="quotelev1">&gt; you for your cooperation.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-26907/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26908.php">XingFENG: "[OMPI users] OPENMPI only recognize 4 cores of AWS EC2 machine"</a>
<li><strong>Previous message:</strong> <a href="26906.php">Lane, William: "[OMPI users] Problems running linpack benchmark on old Sunfire opteron nodes"</a>
<li><strong>In reply to:</strong> <a href="26906.php">Lane, William: "[OMPI users] Problems running linpack benchmark on old Sunfire opteron nodes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26934.php">Aurélien Bouteiller: "Re: [OMPI users] Problems running linpack benchmark on old Sunfire opteron nodes"</a>
<li><strong>Reply:</strong> <a href="26934.php">Aurélien Bouteiller: "Re: [OMPI users] Problems running linpack benchmark on old Sunfire opteron nodes"</a>
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

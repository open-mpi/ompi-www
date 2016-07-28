<?
$subject_val = "[OMPI users] Problems running linpack benchmark on old Sunfire opteron nodes";
include("../../include/msg-header.inc");
?>
<!-- received="Sat May 23 03:17:16 2015" -->
<!-- isoreceived="20150523071716" -->
<!-- sent="Sat, 23 May 2015 07:17:09 +0000" -->
<!-- isosent="20150523071709" -->
<!-- name="Lane, William" -->
<!-- email="William.Lane_at_[hidden]" -->
<!-- subject="[OMPI users] Problems running linpack benchmark on old Sunfire opteron nodes" -->
<!-- id="434F2BB0AF80484CA04DE0D8C0738BF293ECF391_at_cshsmsgmbx02.CSMC.EDU" -->
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
<strong>Subject:</strong> [OMPI users] Problems running linpack benchmark on old Sunfire opteron nodes<br>
<strong>From:</strong> Lane, William (<em>William.Lane_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-05-23 03:17:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26907.php">Gilles Gouaillardet: "Re: [OMPI users] Problems running linpack benchmark on old Sunfire opteron nodes"</a>
<li><strong>Previous message:</strong> <a href="26905.php">Mike Dubman: "Re: [OMPI users] 1.8.5, mxm, and a spurious '-L' flag"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26907.php">Gilles Gouaillardet: "Re: [OMPI users] Problems running linpack benchmark on old Sunfire opteron nodes"</a>
<li><strong>Reply:</strong> <a href="26907.php">Gilles Gouaillardet: "Re: [OMPI users] Problems running linpack benchmark on old Sunfire opteron nodes"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I've compiled the linpack benchmark using openMPI 1.8.5 libraries
<br>
and include files on CentOS 6.4.
<br>
<p>I've tested the binary on the one Intel node (some
<br>
sort of 4-core Xeon) and it runs, but when I try to run it on any of
<br>
the old Sunfire opteron compute nodes it appears to hang (although
<br>
top indicates CPU and memory usage) and eventually terminates
<br>
by itself. I'm also getting the following openMPI error messages/warnings:
<br>
<p>mpirun -np 16 --report-bindings --hostfile hostfile --prefix /hpc/apps/mpi/openmpi/1.8.5-dev --mca btl_tcp_if_include eth0 xhpl
<br>
<p>[cscld1-0-6:24370] create_and_attach: unable to create shared memory BTL coordinating structure :: size 134217728
<br>
[cscld1-0-3:24734] create_and_attach: unable to create shared memory BTL coordinating structure :: size 134217728
<br>
[cscld1-0-7:25152] create_and_attach: unable to create shared memory BTL coordinating structure :: size 134217728
<br>
[cscld1-0-4:18079] create_and_attach: unable to create shared memory BTL coordinating structure :: size 134217728
<br>
[cscld1-0-8:21443] create_and_attach: unable to create shared memory BTL coordinating structure :: size 134217728
<br>
[cscld1-0-2:19704] create_and_attach: unable to create shared memory BTL coordinating structure :: size 134217728
<br>
[cscld1-0-5:13481] create_and_attach: unable to create shared memory BTL coordinating structure :: size 134217728
<br>
[cscld1-0-0:21884] create_and_attach: unable to create shared memory BTL coordinating structure :: size 134217728
<br>
[cscld1:24240] 7 more processes have sent help message help-opal-shmem-mmap.txt / target full
<br>
<p>Note these errors also occur when I try to run the linpack benchmark on a single
<br>
node as well.
<br>
<p>Does anyone know what's going on here? Google came up w/nothing and I have no
<br>
idea what a BTL coordinating structure is.
<br>
<p>-Bill L.
<br>
<p>IMPORTANT WARNING: This message is intended for the use of the person or entity to which it is addressed and may contain information that is privileged and confidential, the disclosure of which is governed by applicable law. If the reader of this message is not the intended recipient, or the employee or agent responsible for delivering it to the intended recipient, you are hereby notified that any dissemination, distribution or copying of this information is strictly prohibited. Thank you for your cooperation.
<br>
<p><p>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-26906/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26907.php">Gilles Gouaillardet: "Re: [OMPI users] Problems running linpack benchmark on old Sunfire opteron nodes"</a>
<li><strong>Previous message:</strong> <a href="26905.php">Mike Dubman: "Re: [OMPI users] 1.8.5, mxm, and a spurious '-L' flag"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26907.php">Gilles Gouaillardet: "Re: [OMPI users] Problems running linpack benchmark on old Sunfire opteron nodes"</a>
<li><strong>Reply:</strong> <a href="26907.php">Gilles Gouaillardet: "Re: [OMPI users] Problems running linpack benchmark on old Sunfire opteron nodes"</a>
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

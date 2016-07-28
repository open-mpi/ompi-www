<?
$subject_val = "Re: [OMPI users] processes aborting on MPI_Finalize";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb 20 11:48:31 2008" -->
<!-- isoreceived="20080220164831" -->
<!-- sent="Wed, 20 Feb 2008 10:48:19 -0600" -->
<!-- isosent="20080220164819" -->
<!-- name="Adams, Samuel D AFRL/RHDR" -->
<!-- email="Samuel.Adams_at_[hidden]" -->
<!-- subject="Re: [OMPI users] processes aborting on MPI_Finalize" -->
<!-- id="8BF06A36E7AD424197195998D9A0B8E10122F262_at_FBRMLBR01.Enterprise.afmc.ds.af.mil" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="8BF06A36E7AD424197195998D9A0B8E10122F091_at_FBRMLBR01.Enterprise.afmc.ds.af.mil" -->
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
<strong>Subject:</strong> Re: [OMPI users] processes aborting on MPI_Finalize<br>
<strong>From:</strong> Adams, Samuel D AFRL/RHDR (<em>Samuel.Adams_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-02-20 11:48:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5051.php">Ben Allan: "Re: [OMPI users] mpi.h macro naming"</a>
<li><strong>Previous message:</strong> <a href="5049.php">Jeff Squyres: "Re: [OMPI users] openmpi/openib problems"</a>
<li><strong>In reply to:</strong> <a href="5042.php">Adams, Samuel D AFRL/RHDR: "[OMPI users] processes aborting on MPI_Finalize"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5106.php">Jeff Squyres: "Re: [OMPI users] processes aborting on MPI_Finalize"</a>
<li><strong>Reply:</strong> <a href="5106.php">Jeff Squyres: "Re: [OMPI users] processes aborting on MPI_Finalize"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I noticed that I was spitting this out on stderr:
<br>
<p>Is this an OpenMPI problem?
<br>
<p>[prodnode31:26364] *** Process received signal ***
<br>
[prodnode31:26364] Signal: Segmentation fault (11)
<br>
[prodnode31:26364] Signal code:  (128)
<br>
[prodnode31:26364] Failing at address: (nil)
<br>
[prodnode31:26364] [ 0] /lib64/libpthread.so.0 [0x35cea0dd40]
<br>
[prodnode31:26364] [ 1]
<br>
/usr/local/profiles/gcc-openmpi/lib/libopen-pal.so.0(_int_free+0x18e)
<br>
[0x2aaaaafcb99e]
<br>
[prodnode31:26364] [ 2]
<br>
/usr/local/profiles/gcc-openmpi/lib/libopen-pal.so.0(free+0xbd)
<br>
[0x2aaaaafcbd9d]
<br>
[prodnode31:26364] [ 3] /usr/local/profiles/gcc-openmpi/lib/libmpi.so.0
<br>
[0x2aaaaaad4589]
<br>
[prodnode31:26364] [ 4]
<br>
/usr/local/profiles/gcc-openmpi/lib/openmpi/mca_btl_tcp.so(mca_btl_tcp_c
<br>
omponent_close+0x109) [0x2aaab0e341e9]
<br>
[prodnode31:26364] [ 5]
<br>
/usr/local/profiles/gcc-openmpi/lib/libopen-pal.so.0(mca_base_components
<br>
_close+0x83) [0x2aaaaafbbe53]
<br>
[prodnode31:26364] [ 6]
<br>
/usr/local/profiles/gcc-openmpi/lib/libmpi.so.0(mca_btl_base_close+0xb3)
<br>
[0x2aaaaab1da13]
<br>
[prodnode31:26364] [ 7]
<br>
/usr/local/profiles/gcc-openmpi/lib/openmpi/mca_pml_ob1.so(mca_pml_ob1_c
<br>
omponent_close+0x35) [0x2aaab060fd55]
<br>
[prodnode31:26364] [ 8]
<br>
/usr/local/profiles/gcc-openmpi/lib/libopen-pal.so.0(mca_base_components
<br>
_close+0x83) [0x2aaaaafbbe53]
<br>
[prodnode31:26364] [ 9]
<br>
/usr/local/profiles/gcc-openmpi/lib/libmpi.so.0(mca_pml_base_close+0x48)
<br>
[0x2aaaaab23818]
<br>
[prodnode31:26364] [10]
<br>
/usr/local/profiles/gcc-openmpi/lib/libmpi.so.0(ompi_mpi_finalize+0x1a2)
<br>
[0x2aaaaaaeda02]
<br>
[prodnode31:26364] [11] /home/sam/code/fdtd/fdtd_0.4/fdtd(main+0x1b2)
<br>
[0x4054f2]
<br>
[prodnode31:26364] [12] /lib64/libc.so.6(__libc_start_main+0xf4)
<br>
[0x35ce21d8a4]
<br>
[prodnode31:26364] [13] /home/sam/code/fdtd/fdtd_0.4/fdtd [0x4035e9]
<br>
[prodnode31:26364] *** End of error message ***
<br>
mpirun noticed that job rank 0 with PID 26364 on node
<br>
prodnode31.brooks.af.mil exited on signal 11 (Segmentation fault).
<br>
<p>Sam Adams
<br>
General Dynamics Information Technology
<br>
Phone: 210.536.5945
<br>
-----Original Message-----
<br>
From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] On
<br>
Behalf Of Adams, Samuel D AFRL/RHDR
<br>
Sent: Tuesday, February 19, 2008 3:02 PM
<br>
To: Open MPI Users
<br>
Subject: [OMPI users] processes aborting on MPI_Finalize
<br>
<p>This is probably some coding error on my part, but under some problem
<br>
divisions I get processes aborting when I call MPI_Finalize().  Perhaps
<br>
they are still waiting incorrectly to recived some message or something
<br>
like that.  Sometimes it seems to work.  Is there a good way to get to
<br>
the bottom of this error? 
<br>
<p><p>----output-----
<br>
4 additional processes aborted (not shown)
<br>
<p>Sam Adams
<br>
General Dynamics Information Technology
<br>
Phone: 210.536.5945
<br>
<p><p>_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5051.php">Ben Allan: "Re: [OMPI users] mpi.h macro naming"</a>
<li><strong>Previous message:</strong> <a href="5049.php">Jeff Squyres: "Re: [OMPI users] openmpi/openib problems"</a>
<li><strong>In reply to:</strong> <a href="5042.php">Adams, Samuel D AFRL/RHDR: "[OMPI users] processes aborting on MPI_Finalize"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5106.php">Jeff Squyres: "Re: [OMPI users] processes aborting on MPI_Finalize"</a>
<li><strong>Reply:</strong> <a href="5106.php">Jeff Squyres: "Re: [OMPI users] processes aborting on MPI_Finalize"</a>
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

<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Aug 18 19:11:59 2006" -->
<!-- isoreceived="20060818231159" -->
<!-- sent="Fri, 18 Aug 2006 19:11:57 -0400 (EDT)" -->
<!-- isosent="20060818231157" -->
<!-- name="Steven A. DuChene" -->
<!-- email="linux-clusters_at_[hidden]" -->
<!-- subject="Re: [OMPI users] building openmpi with gfortran and g95" -->
<!-- id="5638740.1155942718019.JavaMail.root_at_mswamui-andean.atl.sa.earthlink.net" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="[OMPI users] building openmpi with gfortran and g95" -->
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
<strong>From:</strong> Steven A. DuChene (<em>linux-clusters_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-08-18 19:11:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1760.php">micki _: "[OMPI users] mpi command not run in user mode only as root"</a>
<li><strong>Previous message:</strong> <a href="1758.php">Brian Barrett: "Re: [OMPI users] building openmpi with gfortran and g95"</a>
<li><strong>Maybe in reply to:</strong> <a href="1756.php">Steven A. DuChene: "[OMPI users] building openmpi with gfortran and g95"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
BTW, for x86_64 there are two different g95 binaries available
<br>
One that has 32bit default integers and another that has 64bit
<br>
default size integers. I have tried both with the same result.
<br>
<p>-----Original Message-----
<br>
<span class="quotelev1">&gt;From: &quot;Steven A. DuChene&quot; &lt;linux-clusters_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;Sent: Aug 18, 2006 1:55 PM
</span><br>
<span class="quotelev1">&gt;To: users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;Subject: [OMPI users] building openmpi with gfortran and g95
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;I am attempting to build OpenMPI-1.1 on a RHEL4u2 system that has
</span><br>
<span class="quotelev1">&gt;the standard gfortran install as part of the distro and with a self installed
</span><br>
<span class="quotelev1">&gt;recent version of g95 from g95.org but when I use the FC flag to
</span><br>
<span class="quotelev1">&gt;configure to tell it where to find the g95 executable I get a message
</span><br>
<span class="quotelev1">&gt;during the configure run of 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;*** Fortran 90/95 compiler
</span><br>
<span class="quotelev1">&gt;checking whether we are using the GNU Fortran compiler... yes
</span><br>
<span class="quotelev1">&gt;checking whether /app/g95-newer/g95-install/bin/x86_64-unknown-linux-gnu-g95 accepts -g... yes
</span><br>
<span class="quotelev1">&gt;checking if Fortran compiler works... yes
</span><br>
<span class="quotelev1">&gt;checking whether gfortran and /app/g95-newer/g95-install/bin/x86_64-unknown-linux-gnu-g95 compilers are compatible... no
</span><br>
<span class="quotelev1">&gt;configure: WARNING: *** Fortran 77 and Fortran 90 compilers are not link compatible
</span><br>
<span class="quotelev1">&gt;configure: WARNING: *** Disabling MPI Fortran 90/95 bindings
</span><br>
<span class="quotelev1">&gt;checking if Fortran 90 compiler supports LOGICAL... skipped
</span><br>
<span class="quotelev1">&gt;checking if Fortran 90 compiler supports INTEGER... skipped
</span><br>
<span class="quotelev1">&gt;checking if Fortran 90 compiler supports INTEGER*1... skipped
</span><br>
<span class="quotelev1">&gt;checking if Fortran 90 compiler supports INTEGER*2... skipped
</span><br>
<span class="quotelev1">&gt;checking if Fortran 90 compiler supports INTEGER*4... skipped
</span><br>
<span class="quotelev1">&gt;checking if Fortran 90 compiler supports INTEGER*8... skipped
</span><br>
<span class="quotelev1">&gt;checking if Fortran 90 compiler supports INTEGER*16... skipped
</span><br>
<span class="quotelev1">&gt;checking if Fortran 90 compiler supports REAL... skipped
</span><br>
<span class="quotelev1">&gt;checking if Fortran 90 compiler supports REAL*4... skipped
</span><br>
<span class="quotelev1">&gt;checking if Fortran 90 compiler supports REAL*8... skipped
</span><br>
<span class="quotelev1">&gt;checking if Fortran 90 compiler supports REAL*16... skipped
</span><br>
<span class="quotelev1">&gt;checking if Fortran 90 compiler supports DOUBLE PRECISION... skipped
</span><br>
<span class="quotelev1">&gt;checking if Fortran 90 compiler supports COMPLEX... skipped
</span><br>
<span class="quotelev1">&gt;checking if Fortran 90 compiler supports COMPLEX*8... skipped
</span><br>
<span class="quotelev1">&gt;checking if Fortran 90 compiler supports COMPLEX*16... skipped
</span><br>
<span class="quotelev1">&gt;checking if Fortran 90 compiler supports COMPLEX*32... skipped
</span><br>
<span class="quotelev1">&gt;checking if Fortran 90 compiler supports DOUBLE COMPLEX... skipped
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;I am not specifying any particular FCFLAGS but from searching through the mailing
</span><br>
<span class="quotelev1">&gt;lists I am pretty sure I should be but I just don't know what exactly.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Any info on this anywhere?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt;users mailing list
</span><br>
<span class="quotelev1">&gt;users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1760.php">micki _: "[OMPI users] mpi command not run in user mode only as root"</a>
<li><strong>Previous message:</strong> <a href="1758.php">Brian Barrett: "Re: [OMPI users] building openmpi with gfortran and g95"</a>
<li><strong>Maybe in reply to:</strong> <a href="1756.php">Steven A. DuChene: "[OMPI users] building openmpi with gfortran and g95"</a>
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

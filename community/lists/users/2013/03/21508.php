<?
$subject_val = "Re: [OMPI users] openmpi-1.6.4 mpicc fails to compile hello_c.c";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar  7 09:32:06 2013" -->
<!-- isoreceived="20130307143206" -->
<!-- sent="Thu, 7 Mar 2013 15:31:54 +0100" -->
<!-- isosent="20130307143154" -->
<!-- name="Reuti" -->
<!-- email="reuti_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openmpi-1.6.4 mpicc fails to compile hello_c.c" -->
<!-- id="AAFB8159-6AB9-4067-8212-9DE3FA5F0191_at_staff.uni-marburg.de" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAAU_HgZ82jPyVtAYGMc9ySRX8p0GDFwV0s0+E=o98uDEzvuTEg_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] openmpi-1.6.4 mpicc fails to compile hello_c.c<br>
<strong>From:</strong> Reuti (<em>reuti_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-03-07 09:31:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21509.php">Jeff Squyres (jsquyres): "Re: [OMPI users] openmpi-1.6.4 mpicc fails to compile hello_c.c"</a>
<li><strong>Previous message:</strong> <a href="21507.php">Limin Gu: "[OMPI users] openmpi-1.6.4 mpicc fails to compile hello_c.c"</a>
<li><strong>In reply to:</strong> <a href="21507.php">Limin Gu: "[OMPI users] openmpi-1.6.4 mpicc fails to compile hello_c.c"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21509.php">Jeff Squyres (jsquyres): "Re: [OMPI users] openmpi-1.6.4 mpicc fails to compile hello_c.c"</a>
<li><strong>Reply:</strong> <a href="21509.php">Jeff Squyres (jsquyres): "Re: [OMPI users] openmpi-1.6.4 mpicc fails to compile hello_c.c"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Am 06.03.2013 um 18:55 schrieb Limin Gu:
<br>
<p><span class="quotelev1">&gt; I have successfully built openmpi-1.6.3 and many previous openmpi versions on both RHEL5 and RHEL6, for the new openmpi-1.6.4 I do the same configure, make and install as before, but the resulting mpicc does not compile hello_c.c.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have PATH and LD_LIBRARY_PATH set correctly.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [root_at_tesla examples]# echo $LD_LIBRARY_PATH
</span><br>
<span class="quotelev1">&gt; /opt/scyld/openmpi/1.6.4/gnu/lib
</span><br>
<span class="quotelev1">&gt; [root_at_tesla examples]# which mpicc
</span><br>
<span class="quotelev1">&gt; /opt/scyld/openmpi/1.6.4/gnu/bin/mpicc
</span><br>
<span class="quotelev1">&gt; [root_at_tesla examples]# mpicc -o hello_c hello_c.c
</span><br>
<span class="quotelev1">&gt; /tmp/ccuZg1I9.o: In function `main':
</span><br>
<span class="quotelev1">&gt; hello_c.c:(.text+0x1d): undefined reference to `ompi_mpi_comm_world'
</span><br>
<span class="quotelev1">&gt; hello_c.c:(.text+0x2b): undefined reference to `ompi_mpi_comm_world'
</span><br>
<p>What is the output if you compile in addition with -v (verbose)?
<br>
<p>-- Reuti
<br>
<p><span class="quotelev1">&gt; collect2: ld returned 1 exit status
</span><br>
<span class="quotelev1">&gt; [root_at_tesla examples]#
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; But mpicxx does compile:
</span><br>
<span class="quotelev1">&gt; [root_at_tesla examples]# which mpicxx
</span><br>
<span class="quotelev1">&gt; /opt/scyld/openmpi/1.6.4/gnu/bin/mpicxx
</span><br>
<span class="quotelev1">&gt; [root_at_tesla examples]# mpicxx -o hello_cxx hello_cxx.cc
</span><br>
<span class="quotelev1">&gt; [root_at_tesla examples]#
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Any idea about what is wrong here? I have the same error on both RHEL5 and RHEL6 systems.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thank you!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Limin
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21509.php">Jeff Squyres (jsquyres): "Re: [OMPI users] openmpi-1.6.4 mpicc fails to compile hello_c.c"</a>
<li><strong>Previous message:</strong> <a href="21507.php">Limin Gu: "[OMPI users] openmpi-1.6.4 mpicc fails to compile hello_c.c"</a>
<li><strong>In reply to:</strong> <a href="21507.php">Limin Gu: "[OMPI users] openmpi-1.6.4 mpicc fails to compile hello_c.c"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21509.php">Jeff Squyres (jsquyres): "Re: [OMPI users] openmpi-1.6.4 mpicc fails to compile hello_c.c"</a>
<li><strong>Reply:</strong> <a href="21509.php">Jeff Squyres (jsquyres): "Re: [OMPI users] openmpi-1.6.4 mpicc fails to compile hello_c.c"</a>
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

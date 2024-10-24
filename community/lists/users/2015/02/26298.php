<?
$subject_val = "Re: [OMPI users] Signal code: Integer divide-by-zero";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Feb  6 10:24:42 2015" -->
<!-- isoreceived="20150206152442" -->
<!-- sent="Fri, 06 Feb 2015 09:24:40 -0600" -->
<!-- isosent="20150206152440" -->
<!-- name="Tabrez Ali" -->
<!-- email="stali_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Signal code: Integer divide-by-zero" -->
<!-- id="54D4DCB8.40604_at_geology.wisc.edu" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="7530B0BF-652F-4245-8F16-3A8D90623111_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Signal code: Integer divide-by-zero<br>
<strong>From:</strong> Tabrez Ali (<em>stali_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-02-06 10:24:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26299.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Signal code: Integer divide-by-zero"</a>
<li><strong>Previous message:</strong> <a href="26297.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Signal code: Integer divide-by-zero"</a>
<li><strong>In reply to:</strong> <a href="26297.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Signal code: Integer divide-by-zero"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26299.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Signal code: Integer divide-by-zero"</a>
<li><strong>Reply:</strong> <a href="26299.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Signal code: Integer divide-by-zero"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello
<br>
<p>Looks like it's v1.6.5. No, I haven't tried the latest version. On my 
<br>
own machines I usually build OpenMPI/MPICH from source and haven't had 
<br>
any problems in the past but in this case I was simply trying out Cloud9 
<br>
with all packages installed from official repository.
<br>
<p>Thanks,
<br>
<p>Tabrez
<br>
<p>On 02/06/2015 09:09 AM, Jeff Squyres (jsquyres) wrote:
<br>
<span class="quotelev1">&gt; What version of Open MPI is that?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Have you tried the latest version (v1.8.5)?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Feb 6, 2015, at 9:47 AM, Tabrez Ali &lt;stali_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hello
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; While trying out Cloud9 (Basically running vanilla Ubuntu 14.04 with OpenMPI installed from the official repository) I am getting the following error (below) with OpenMPI. Any ideas as to what would be wrong?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks in advance.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Tabrez
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; stali_at_test:~/workspace $ uname -a
</span><br>
<span class="quotelev2">&gt;&gt; Linux stali-test-1266846 3.14.13-c9 #1 SMP Tue Aug 19 16:13:44 UTC 2014 x86_64 x86_64 x86_64 GNU/Linux
</span><br>
<span class="quotelev2">&gt;&gt; stali_at_test:~/workspace $ dpkg -l | grep libopenmpi-dev
</span><br>
<span class="quotelev2">&gt;&gt; ii libopenmpi-dev 1.6.5-8 amd64 high performance message passing library -- header files
</span><br>
<span class="quotelev2">&gt;&gt; stali_at_test:~/workspace $ cat test.f90
</span><br>
<span class="quotelev2">&gt;&gt; program main
</span><br>
<span class="quotelev2">&gt;&gt;   use mpi
</span><br>
<span class="quotelev2">&gt;&gt;   implicit none
</span><br>
<span class="quotelev2">&gt;&gt;   integer :: ierr
</span><br>
<span class="quotelev2">&gt;&gt;   call MPI_Init(ierr)
</span><br>
<span class="quotelev2">&gt;&gt;   call MPI_Finalize(ierr)
</span><br>
<span class="quotelev2">&gt;&gt; end program main
</span><br>
<span class="quotelev2">&gt;&gt; stali_at_test:~/workspace $ mpif90 test.f90
</span><br>
<span class="quotelev2">&gt;&gt; stali_at_test:~/workspace $ mpiexec -n 1 ./a.out
</span><br>
<span class="quotelev2">&gt;&gt; [stali-test-1266846:02263] *** Process received signal ***
</span><br>
<span class="quotelev2">&gt;&gt; [stali-test-1266846:02263] Signal: Floating point exception (8)
</span><br>
<span class="quotelev2">&gt;&gt; [stali-test-1266846:02263] Signal code: Integer divide-by-zero (1)
</span><br>
<span class="quotelev2">&gt;&gt; [stali-test-1266846:02263] Failing at address: 0x7f6043d7483e
</span><br>
<span class="quotelev2">&gt;&gt; [stali-test-1266846:02263] [ 0] /lib/x86_64-linux-gnu/libpthread.so.0(+0x10340) [0x7f604455d340]
</span><br>
<span class="quotelev2">&gt;&gt; [stali-test-1266846:02263] [ 1] /usr/lib/x86_64-linux-gnu/libhwloc.so.5(+0x3083e) [0x7f6043d7483e]
</span><br>
<span class="quotelev2">&gt;&gt; [stali-test-1266846:02263] [ 2] /usr/lib/x86_64-linux-gnu/libhwloc.so.5(+0x323a1) [0x7f6043d763a1]
</span><br>
<span class="quotelev2">&gt;&gt; [stali-test-1266846:02263] [ 3] /usr/lib/x86_64-linux-gnu/libhwloc.so.5(+0x3271b) [0x7f6043d7671b]
</span><br>
<span class="quotelev2">&gt;&gt; [stali-test-1266846:02263] [ 4] /usr/lib/x86_64-linux-gnu/libhwloc.so.5(+0xbd4b) [0x7f6043d4fd4b]
</span><br>
<span class="quotelev2">&gt;&gt; [stali-test-1266846:02263] [ 5] /usr/lib/x86_64-linux-gnu/libhwloc.so.5(hwloc_topology_load+0x1a3) [0x7f6043d50d64]
</span><br>
<span class="quotelev2">&gt;&gt; [stali-test-1266846:02263] [ 6] /usr/lib/libopen-rte.so.4(orte_odls_base_open+0x7a6) [0x7f60447b47f6]
</span><br>
<span class="quotelev2">&gt;&gt; [stali-test-1266846:02263] [ 7] /usr/lib/openmpi/lib/openmpi/mca_ess_hnp.so(+0x2f14) [0x7f604290bf14]
</span><br>
<span class="quotelev2">&gt;&gt; [stali-test-1266846:02263] [ 8] /usr/lib/libopen-rte.so.4(orte_init+0x193) [0x7f604478c0f3]
</span><br>
<span class="quotelev2">&gt;&gt; [stali-test-1266846:02263] [ 9] mpiexec() [0x403e68]
</span><br>
<span class="quotelev2">&gt;&gt; [stali-test-1266846:02263] [10] mpiexec() [0x40347d]
</span><br>
<span class="quotelev2">&gt;&gt; [stali-test-1266846:02263] [11] /lib/x86_64-linux-gnu/libc.so.6(__libc_start_main+0xf5) [0x7f60441a8ec5]
</span><br>
<span class="quotelev2">&gt;&gt; [stali-test-1266846:02263] [12] mpiexec() [0x403399]
</span><br>
<span class="quotelev2">&gt;&gt; [stali-test-1266846:02263] *** End of error message ***
</span><br>
<span class="quotelev2">&gt;&gt; Floating point exception
</span><br>
<span class="quotelev2">&gt;&gt; stali_at_test:~/workspace $
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/02/26295.php">http://www.open-mpi.org/community/lists/users/2015/02/26295.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26299.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Signal code: Integer divide-by-zero"</a>
<li><strong>Previous message:</strong> <a href="26297.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Signal code: Integer divide-by-zero"</a>
<li><strong>In reply to:</strong> <a href="26297.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Signal code: Integer divide-by-zero"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26299.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Signal code: Integer divide-by-zero"</a>
<li><strong>Reply:</strong> <a href="26299.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Signal code: Integer divide-by-zero"</a>
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

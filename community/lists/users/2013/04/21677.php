<?
$subject_val = "Re: [OMPI users] openmpi-1.7 failed to build on Centos 6.4";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Apr  4 15:26:59 2013" -->
<!-- isoreceived="20130404192659" -->
<!-- sent="Thu, 4 Apr 2013 12:26:52 -0700" -->
<!-- isosent="20130404192652" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openmpi-1.7 failed to build on Centos 6.4" -->
<!-- id="14DB130C-998F-4E7B-8F5B-5676095BF775_at_open-mpi.org" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CAAU_HgZwMr-_Ps5P+B=4gUTUJJvQ76b4yBERGnzeLqzMp23TDw_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] openmpi-1.7 failed to build on Centos 6.4<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-04-04 15:26:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21678.php">Ralph Castain: "Re: [OMPI users] network related MPI errors on Amazon EC2"</a>
<li><strong>Previous message:</strong> <a href="21676.php">Limin Gu: "[OMPI users] openmpi-1.7 failed to build on Centos 6.4"</a>
<li><strong>In reply to:</strong> <a href="21676.php">Limin Gu: "[OMPI users] openmpi-1.7 failed to build on Centos 6.4"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21679.php">Limin Gu: "Re: [OMPI users] openmpi-1.7 failed to build on Centos 6.4"</a>
<li><strong>Reply:</strong> <a href="21679.php">Limin Gu: "Re: [OMPI users] openmpi-1.7 failed to build on Centos 6.4"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Fix is coming - it is the --without-memory-manager option (which is the same thing as --with-memory-manager=no) that is breaking it.
<br>
<p><p>On Apr 4, 2013, at 12:19 PM, Limin Gu &lt;lgu_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi all,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I downloaded openmpi-1.7, but it failed to build on Centos 6.4 with following error:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; make[10]: Entering directory `/root/openmpi/openmpi-1.7/ompi/contrib/vt/vt/extlib/otf/tools/otfmerge/mpi'
</span><br>
<span class="quotelev1">&gt;   CC       otfmerge_mpi-handler.o
</span><br>
<span class="quotelev1">&gt;   CC       otfmerge_mpi-otfmerge.o
</span><br>
<span class="quotelev1">&gt;   CCLD     otfmerge-mpi
</span><br>
<span class="quotelev1">&gt; /root/openmpi/openmpi-1.7/ompi/contrib/vt/vt/../../../.libs/libmpi.so: undefined reference to `opal_memory_linux_malloc_init_hook'
</span><br>
<span class="quotelev1">&gt; collect2: ld returned 1 exit status
</span><br>
<span class="quotelev1">&gt; make[10]: *** [otfmerge-mpi] Error 1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; And this is my configure options:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  ./configure --with-udapl --with-tm --with-openib --disable-dlopen --without-slurm --without-mx --without-lsf --without-loadleveler --without-memory-manager --with-memory-manager=no --with-psm CC=gcc CXX=g++ F77=gfortran FC=gfortran
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thank you!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Limin
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21678.php">Ralph Castain: "Re: [OMPI users] network related MPI errors on Amazon EC2"</a>
<li><strong>Previous message:</strong> <a href="21676.php">Limin Gu: "[OMPI users] openmpi-1.7 failed to build on Centos 6.4"</a>
<li><strong>In reply to:</strong> <a href="21676.php">Limin Gu: "[OMPI users] openmpi-1.7 failed to build on Centos 6.4"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21679.php">Limin Gu: "Re: [OMPI users] openmpi-1.7 failed to build on Centos 6.4"</a>
<li><strong>Reply:</strong> <a href="21679.php">Limin Gu: "Re: [OMPI users] openmpi-1.7 failed to build on Centos 6.4"</a>
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

<?
$subject_val = "Re: [OMPI users] openmpi-1.7 failed to build on Centos 6.4";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Apr  4 16:55:30 2013" -->
<!-- isoreceived="20130404205530" -->
<!-- sent="Thu, 4 Apr 2013 16:55:06 -0400" -->
<!-- isosent="20130404205506" -->
<!-- name="Limin Gu" -->
<!-- email="lgu_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openmpi-1.7 failed to build on Centos 6.4" -->
<!-- id="CAAU_HgZuv3LbcknTeq31yGxo_pdh78PY4c_X4_E2Ccq_zgxmug_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="14DB130C-998F-4E7B-8F5B-5676095BF775_at_open-mpi.org" -->
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
<strong>From:</strong> Limin Gu (<em>lgu_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-04-04 16:55:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21680.php">Alan Sayre: "[OMPI users] configure problem"</a>
<li><strong>Previous message:</strong> <a href="21678.php">Ralph Castain: "Re: [OMPI users] network related MPI errors on Amazon EC2"</a>
<li><strong>In reply to:</strong> <a href="21677.php">Ralph Castain: "Re: [OMPI users] openmpi-1.7 failed to build on Centos 6.4"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks Ralph!
<br>
After I removed  --without-memory-manager  --with-memory-manager=no, it
<br>
built fine.
<br>
<p>Limin
<br>
<p><p>On Thu, Apr 4, 2013 at 3:26 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Fix is coming - it is the --without-memory-manager option (which is the
</span><br>
<span class="quotelev1">&gt; same thing as --with-memory-manager=no) that is breaking it.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Apr 4, 2013, at 12:19 PM, Limin Gu &lt;lgu_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Hi all,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I downloaded openmpi-1.7, but it failed to build on Centos 6.4 with
</span><br>
<span class="quotelev1">&gt; following error:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; make[10]: Entering directory
</span><br>
<span class="quotelev1">&gt; `/root/openmpi/openmpi-1.7/ompi/contrib/vt/vt/extlib/otf/tools/otfmerge/mpi'
</span><br>
<span class="quotelev2">&gt; &gt;   CC       otfmerge_mpi-handler.o
</span><br>
<span class="quotelev2">&gt; &gt;   CC       otfmerge_mpi-otfmerge.o
</span><br>
<span class="quotelev2">&gt; &gt;   CCLD     otfmerge-mpi
</span><br>
<span class="quotelev2">&gt; &gt; /root/openmpi/openmpi-1.7/ompi/contrib/vt/vt/../../../.libs/libmpi.so:
</span><br>
<span class="quotelev1">&gt; undefined reference to `opal_memory_linux_malloc_init_hook'
</span><br>
<span class="quotelev2">&gt; &gt; collect2: ld returned 1 exit status
</span><br>
<span class="quotelev2">&gt; &gt; make[10]: *** [otfmerge-mpi] Error 1
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; And this is my configure options:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;  ./configure --with-udapl --with-tm --with-openib --disable-dlopen
</span><br>
<span class="quotelev1">&gt; --without-slurm --without-mx --without-lsf --without-loadleveler
</span><br>
<span class="quotelev1">&gt; --without-memory-manager --with-memory-manager=no --with-psm CC=gcc CXX=g++
</span><br>
<span class="quotelev1">&gt; F77=gfortran FC=gfortran
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Thank you!
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Limin
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-21679/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21680.php">Alan Sayre: "[OMPI users] configure problem"</a>
<li><strong>Previous message:</strong> <a href="21678.php">Ralph Castain: "Re: [OMPI users] network related MPI errors on Amazon EC2"</a>
<li><strong>In reply to:</strong> <a href="21677.php">Ralph Castain: "Re: [OMPI users] openmpi-1.7 failed to build on Centos 6.4"</a>
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

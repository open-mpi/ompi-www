<?
$subject_val = "Re: [OMPI users] Setting RPATH for Open MPI libraries";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Sep  8 14:47:52 2012" -->
<!-- isoreceived="20120908184752" -->
<!-- sent="Sat, 8 Sep 2012 20:47:41 +0200" -->
<!-- isosent="20120908184741" -->
<!-- name="Reuti" -->
<!-- email="reuti_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Setting RPATH for Open MPI libraries" -->
<!-- id="DF5513F2-938F-4E22-8428-B1E35AB74A1F_at_staff.uni-marburg.de" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAM9tzS=qFkOZW=C4=dFg65W+QcX1J=h4W2-DZxwbPNenOwjGkg_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Setting RPATH for Open MPI libraries<br>
<strong>From:</strong> Reuti (<em>reuti_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-09-08 14:47:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20159.php">Jeff Squyres: "Re: [OMPI users] gcc problem compiling openmpi-1.6.1 on Solaris 10 sparc"</a>
<li><strong>Previous message:</strong> <a href="20157.php">Jed Brown: "[OMPI users] Setting RPATH for Open MPI libraries"</a>
<li><strong>In reply to:</strong> <a href="20157.php">Jed Brown: "[OMPI users] Setting RPATH for Open MPI libraries"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20188.php">Jed Brown: "Re: [OMPI users] Setting RPATH for Open MPI libraries"</a>
<li><strong>Reply:</strong> <a href="20188.php">Jed Brown: "Re: [OMPI users] Setting RPATH for Open MPI libraries"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>Am 08.09.2012 um 14:46 schrieb Jed Brown:
<br>
<p><span class="quotelev1">&gt; Is there a way to configure Open MPI to use RPATH without needing to manually specify --with-wrapper-ldflags=-Wl,-rpath,${prefix}/lib (and similar for non-GNU-compatible compilers)? _______________________________________________
</span><br>
<p>What do you want to achieve in detail - just shorten the `./configure` command line? You could also add it after Open MPI's compilation in the text file:
<br>
<p>${prefix}/share/openmpi/mpicc-wrapper-data.txt 
<br>
<p>-- Reuti
<br>
<p><p><span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20159.php">Jeff Squyres: "Re: [OMPI users] gcc problem compiling openmpi-1.6.1 on Solaris 10 sparc"</a>
<li><strong>Previous message:</strong> <a href="20157.php">Jed Brown: "[OMPI users] Setting RPATH for Open MPI libraries"</a>
<li><strong>In reply to:</strong> <a href="20157.php">Jed Brown: "[OMPI users] Setting RPATH for Open MPI libraries"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20188.php">Jed Brown: "Re: [OMPI users] Setting RPATH for Open MPI libraries"</a>
<li><strong>Reply:</strong> <a href="20188.php">Jed Brown: "Re: [OMPI users] Setting RPATH for Open MPI libraries"</a>
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

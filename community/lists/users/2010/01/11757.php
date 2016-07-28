<?
$subject_val = "Re: [OMPI users] OpenMPI less fast than MPICH";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jan 13 20:01:48 2010" -->
<!-- isoreceived="20100114010148" -->
<!-- sent="Wed, 13 Jan 2010 20:01:41 -0500" -->
<!-- isosent="20100114010141" -->
<!-- name="Aaron Knister" -->
<!-- email="aaron.knister_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI less fast than MPICH" -->
<!-- id="85CDA548-A59C-4C6B-A6C7-7A85F4B853D5_at_gmail.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4B4B20D7.1020502_at_laposte.net" -->
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
<strong>Subject:</strong> Re: [OMPI users] OpenMPI less fast than MPICH<br>
<strong>From:</strong> Aaron Knister (<em>aaron.knister_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-01-13 20:01:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11758.php">Doug Reeder: "Re: [OMPI users] configure script fails"</a>
<li><strong>Previous message:</strong> <a href="11756.php">von Tycowicz, Christoph: "[OMPI users] configure script fails"</a>
<li><strong>In reply to:</strong> <a href="11730.php">Mathieu Gontier: "[OMPI users] OpenMPI less fast than MPICH"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11759.php">Ralph Castain: "Re: [OMPI users] OpenMPI less fast than MPICH"</a>
<li><strong>Reply:</strong> <a href="11759.php">Ralph Castain: "Re: [OMPI users] OpenMPI less fast than MPICH"</a>
<li><strong>Reply:</strong> <a href="11764.php">Mathieu Gontier: "Re: [OMPI users] OpenMPI less fast than MPICH"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Does your application do a lot of printing to stdout/stderr?
<br>
<p>On Jan 11, 2010, at 8:00 AM, Mathieu Gontier wrote:
<br>
<p><span class="quotelev1">&gt; Hi all
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I want to migrate my CFD application from MPICH-1.2.4 (ch_p4 device) to OpenMPI-1.4. Hence, I compared the two libraries compiled with my application and I noted OpenMPI is less efficient thant MPICH on ethernet (170min with MPICH against 200min with OpenMPI). So, I wonder if someone has more information/explanation.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Here the configure options of OpenMPI:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; export FC=gfortran
</span><br>
<span class="quotelev1">&gt; export F77=$FC
</span><br>
<span class="quotelev1">&gt; export CC=gcc
</span><br>
<span class="quotelev1">&gt; export PREFIX=/usr/local/bin/openmpi-1.4
</span><br>
<span class="quotelev1">&gt; ./configure --prefix=$PREFIX --enable-cxx-exceptions --enable-mpi-f77 --enable-mpi-f90 --enable-mpi-cxx --enable-mpi-cxx-seek --enable-dist --enable-mpi-profile --enable-binaries --enable-cxx-exceptions --enable-mpi-threads --enable-memchecker --with-pic --with-threads --with-valgrind --with-libnuma --with-openib
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Despite my OpenMPI compilation supports OpenIB, I did not specified any mca/btl options because the machine does not have access to a Infiniband interconnect. So, I guess tcp, sm and self are used (or at least something close).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thank you for your help.
</span><br>
<span class="quotelev1">&gt; Mathieu.
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-11757/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11758.php">Doug Reeder: "Re: [OMPI users] configure script fails"</a>
<li><strong>Previous message:</strong> <a href="11756.php">von Tycowicz, Christoph: "[OMPI users] configure script fails"</a>
<li><strong>In reply to:</strong> <a href="11730.php">Mathieu Gontier: "[OMPI users] OpenMPI less fast than MPICH"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11759.php">Ralph Castain: "Re: [OMPI users] OpenMPI less fast than MPICH"</a>
<li><strong>Reply:</strong> <a href="11759.php">Ralph Castain: "Re: [OMPI users] OpenMPI less fast than MPICH"</a>
<li><strong>Reply:</strong> <a href="11764.php">Mathieu Gontier: "Re: [OMPI users] OpenMPI less fast than MPICH"</a>
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

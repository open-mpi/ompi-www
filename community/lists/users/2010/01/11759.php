<?
$subject_val = "Re: [OMPI users] OpenMPI less fast than MPICH";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jan 13 20:13:45 2010" -->
<!-- isoreceived="20100114011345" -->
<!-- sent="Wed, 13 Jan 2010 18:13:35 -0700" -->
<!-- isosent="20100114011335" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI less fast than MPICH" -->
<!-- id="F7EDF8A5-5FED-4889-83A7-A68737E5B7F3_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="85CDA548-A59C-4C6B-A6C7-7A85F4B853D5_at_gmail.com" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-01-13 20:13:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11760.php">Luís Miranda: "Re: [OMPI users] Can't read values with MPI-IO"</a>
<li><strong>Previous message:</strong> <a href="11758.php">Doug Reeder: "Re: [OMPI users] configure script fails"</a>
<li><strong>In reply to:</strong> <a href="11757.php">Aaron Knister: "Re: [OMPI users] OpenMPI less fast than MPICH"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11764.php">Mathieu Gontier: "Re: [OMPI users] OpenMPI less fast than MPICH"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
More likely the difference is due to the fact that MPICH does some automatic process binding and OMPI doesn't. There have been a number of discussions on this list about this issue. You might search the list for &quot;MPICH&quot; to find them.
<br>
<p>See the OMPI FAQ on affinity:
<br>
<p><a href="http://www.open-mpi.org/faq/?category=tuning#using-paffinity">http://www.open-mpi.org/faq/?category=tuning#using-paffinity</a>
<br>
<p>On Jan 13, 2010, at 6:01 PM, Aaron Knister wrote:
<br>
<p><span class="quotelev1">&gt; Does your application do a lot of printing to stdout/stderr?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Jan 11, 2010, at 8:00 AM, Mathieu Gontier wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Hi all
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I want to migrate my CFD application from MPICH-1.2.4 (ch_p4 device) to OpenMPI-1.4. Hence, I compared the two libraries compiled with my application and I noted OpenMPI is less efficient thant MPICH on ethernet (170min with MPICH against 200min with OpenMPI). So, I wonder if someone has more information/explanation.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Here the configure options of OpenMPI:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; export FC=gfortran
</span><br>
<span class="quotelev2">&gt;&gt; export F77=$FC
</span><br>
<span class="quotelev2">&gt;&gt; export CC=gcc
</span><br>
<span class="quotelev2">&gt;&gt; export PREFIX=/usr/local/bin/openmpi-1.4
</span><br>
<span class="quotelev2">&gt;&gt; ./configure --prefix=$PREFIX --enable-cxx-exceptions --enable-mpi-f77 --enable-mpi-f90 --enable-mpi-cxx --enable-mpi-cxx-seek --enable-dist --enable-mpi-profile --enable-binaries --enable-cxx-exceptions --enable-mpi-threads --enable-memchecker --with-pic --with-threads --with-valgrind --with-libnuma --with-openib
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Despite my OpenMPI compilation supports OpenIB, I did not specified any mca/btl options because the machine does not have access to a Infiniband interconnect. So, I guess tcp, sm and self are used (or at least something close).
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Thank you for your help.
</span><br>
<span class="quotelev2">&gt;&gt; Mathieu.
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-11759/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11760.php">Luís Miranda: "Re: [OMPI users] Can't read values with MPI-IO"</a>
<li><strong>Previous message:</strong> <a href="11758.php">Doug Reeder: "Re: [OMPI users] configure script fails"</a>
<li><strong>In reply to:</strong> <a href="11757.php">Aaron Knister: "Re: [OMPI users] OpenMPI less fast than MPICH"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11764.php">Mathieu Gontier: "Re: [OMPI users] OpenMPI less fast than MPICH"</a>
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

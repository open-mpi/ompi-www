<?
$subject_val = "Re: [OMPI users] Asynchronous parallel I/O concerning MPI_File_write_all_begin() and MPI_File_write_all_end()";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Feb  4 09:40:34 2013" -->
<!-- isoreceived="20130204144034" -->
<!-- sent="Mon, 4 Feb 2013 09:40:29 -0500" -->
<!-- isosent="20130204144029" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Asynchronous parallel I/O concerning MPI_File_write_all_begin() and MPI_File_write_all_end()" -->
<!-- id="CAMJJpkXuBtrK250gWkWg2C0okiBL3GAN_xpAti+YPG75AOfekQ_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="1359891190.10855.41.camel_at_WMS005" -->
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
<strong>Subject:</strong> Re: [OMPI users] Asynchronous parallel I/O concerning MPI_File_write_all_begin() and MPI_File_write_all_end()<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-02-04 09:40:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21290.php">Clarinet: "[OMPI users] OpenMPI 1.6 with Intel 11 Compiler"</a>
<li><strong>Previous message:</strong> <a href="21288.php">Paul Hatton: "[OMPI users] FW:  error configuring OpenMPI 1.6.3 with gcc 4.7.2"</a>
<li><strong>In reply to:</strong> <a href="21287.php">Stefan Mauerberger: "[OMPI users] Asynchronous parallel I/O concerning MPI_File_write_all_begin() and MPI_File_write_all_end()"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Stefan,
<br>
<p>The MPI definition of progress is pretty loose. There is absolutely no
<br>
guarantee regarding the asynchrony of any non-blocking or asynchronous
<br>
operations, more specifically there is no guarantee of progress when
<br>
the library is outside an MPI call.
<br>
<p>&nbsp;&nbsp;George.
<br>
<p>PS: For the file operation an informative reading is 13.6.3.
<br>
<p>On Sun, Feb 3, 2013 at 6:33 AM, Stefan Mauerberger
<br>
&lt;stefan.mauerberger_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; Dear all!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; using the split collective procedures MPI_File_write_all_begin() and
</span><br>
<span class="quotelev1">&gt; MPI_File_write_all_end() causes some confusion to me.
</span><br>
<span class="quotelev1">&gt; It was my intention to implement asynchronous file i/o using those
</span><br>
<span class="quotelev1">&gt; procedures. The idea is to calculate some 'useful' stuff while writing
</span><br>
<span class="quotelev1">&gt; tons of data to disk.
</span><br>
<span class="quotelev1">&gt; Well, buffering the local arrays and replacing MPI_File_write_all() by
</span><br>
<span class="quotelev1">&gt; MPI_File_write_all_begin() and MPI_File_write_all_end() wasn't that
</span><br>
<span class="quotelev1">&gt; hard. However my expectations were not met:
</span><br>
<span class="quotelev1">&gt;  * No additional thread is spread out while writing
</span><br>
<span class="quotelev1">&gt;  * No benefit in runtime can be observed; The program simply waits as it
</span><br>
<span class="quotelev1">&gt; did before.
</span><br>
<span class="quotelev1">&gt; It just comes with the difference spending a lot of time calling
</span><br>
<span class="quotelev1">&gt; MPI_File_write_all_end() instead of MPI_File_write_all(). It appears to
</span><br>
<span class="quotelev1">&gt; me that MPI_File_write_begin() does not trigger the actual write
</span><br>
<span class="quotelev1">&gt; command.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; What I have is a iterative workflow where data shall be written to disk
</span><br>
<span class="quotelev1">&gt; every 20th increment. So, what I want to achieve is writing to disk in
</span><br>
<span class="quotelev1">&gt; the background while further 20 iterations are processed. I am coding a
</span><br>
<span class="quotelev1">&gt; mixture of Fortran 90, F03, F08 and building with gfortran 4.7.1 and
</span><br>
<span class="quotelev1">&gt; OpenMPI 1.6 .
</span><br>
<span class="quotelev1">&gt; The environment in question is a quad-socket system equipped with
</span><br>
<span class="quotelev1">&gt; E7-4860 running Debian Squeez. Unfortunately, I don't know about its i/o
</span><br>
<span class="quotelev1">&gt; capabilities but it is nothing fancy.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Do you have any idea what I have done wrong?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks in advance! Cheers,
</span><br>
<span class="quotelev1">&gt; Stefan
</span><br>
<span class="quotelev1">&gt;
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21290.php">Clarinet: "[OMPI users] OpenMPI 1.6 with Intel 11 Compiler"</a>
<li><strong>Previous message:</strong> <a href="21288.php">Paul Hatton: "[OMPI users] FW:  error configuring OpenMPI 1.6.3 with gcc 4.7.2"</a>
<li><strong>In reply to:</strong> <a href="21287.php">Stefan Mauerberger: "[OMPI users] Asynchronous parallel I/O concerning MPI_File_write_all_begin() and MPI_File_write_all_end()"</a>
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

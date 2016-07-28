<?
$subject_val = "Re: [OMPI users] Problem running openmpi-1.4.3";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar  8 20:06:27 2011" -->
<!-- isoreceived="20110309010627" -->
<!-- sent="Tue, 8 Mar 2011 17:06:03 -0800" -->
<!-- isosent="20110309010603" -->
<!-- name="David Zhang" -->
<!-- email="solarbikedz_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problem running openmpi-1.4.3" -->
<!-- id="AANLkTi=mkhR4o8ffzmtUyabp=fVdJBSs6DGpDjAuvY7k_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="AANLkTim_xqFRCcg+djLT0Sx_dQQ7XpBXTjJts-MM9b1i_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Problem running openmpi-1.4.3<br>
<strong>From:</strong> David Zhang (<em>solarbikedz_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-03-08 20:06:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15819.php">Ralph Castain: "Re: [OMPI users] Problem running openmpi-1.4.3"</a>
<li><strong>Previous message:</strong> <a href="15817.php">Amos Leffler: "[OMPI users] Problem running openmpi-1.4.3"</a>
<li><strong>In reply to:</strong> <a href="15817.php">Amos Leffler: "[OMPI users] Problem running openmpi-1.4.3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15819.php">Ralph Castain: "Re: [OMPI users] Problem running openmpi-1.4.3"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
you need to set your LD_LIBRARY_PATH to contain the MPI libraries.  The more
<br>
experienced MPI users in this mailing list would tell you what to include.
<br>
<p>On Tue, Mar 8, 2011 at 4:47 PM, Amos Leffler &lt;amosleffler_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;        I am trying to get openmpi-1.4.3 to run but am having trouble.
</span><br>
<span class="quotelev1">&gt;  It is run using SUSE-11.3 with Intel XE-2011 Composer C and Fortran
</span><br>
<span class="quotelev1">&gt; compilers.  The compilers installed without problems.  The openmpi
</span><br>
<span class="quotelev1">&gt; file was downloaded and unzipped and untarred.  The ./configure
</span><br>
<span class="quotelev1">&gt; command was run and it was found to be necessary to set CC=gcc and
</span><br>
<span class="quotelev1">&gt; CXX=g++.  The fortran F77 and F90 were set to ifort. The --prefix was
</span><br>
<span class="quotelev1">&gt; set to /usr.  The program appeared to compile properly but none of the
</span><br>
<span class="quotelev1">&gt; examples given would not compile.  The error messages are shown below:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; linux-q2bz:/home/amosleffler/Downloads/openmpi-1.4.3/examples # mpicc
</span><br>
<span class="quotelev1">&gt; hello_c.c =o hello_c
</span><br>
<span class="quotelev1">&gt; mpicc: error while loading shared libraries: libopen-pal.so.0: cannot
</span><br>
<span class="quotelev1">&gt; open shared object file: No such file or directory
</span><br>
<span class="quotelev1">&gt; linux-q2bz:/home/amosleffler/Downloads/openmpi-1.4.3/examples # mpiCC
</span><br>
<span class="quotelev1">&gt; hello_cxx.cc -o hello_cxx
</span><br>
<span class="quotelev1">&gt; mpiCC: error while loading shared libraries: libopen-pal.so.0: cannot
</span><br>
<span class="quotelev1">&gt; open shared object file: No such file or directory
</span><br>
<span class="quotelev1">&gt; linux-q2bz:/home/amosleffler/Downloads/openmpi-1.4.3/examples # mpif77
</span><br>
<span class="quotelev1">&gt; hello_f77.f -o hello_f77
</span><br>
<span class="quotelev1">&gt; mpif77: error while loading shared libraries: libopen-pal.so.0: cannot
</span><br>
<span class="quotelev1">&gt; open shared object file: No such file or directory
</span><br>
<span class="quotelev1">&gt; linux-q2bz:/home/amosleffler/Downloads/openmpi-1.4.3/examples # mpif90
</span><br>
<span class="quotelev1">&gt; hello_f90.f90 -o hello_f90
</span><br>
<span class="quotelev1">&gt; mpif90: error while loading shared libraries: libopen-pal.so.0: cannot
</span><br>
<span class="quotelev1">&gt; open shared object file: No such file or directory
</span><br>
<span class="quotelev1">&gt; linux-q2bz:/home/amosleffler/Downloads/openmpi-1.4.3/examples
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It is evident that the same error is present in all attempts to
</span><br>
<span class="quotelev1">&gt; compile but I don't know why it is absent.  Any help would be much
</span><br>
<span class="quotelev1">&gt; appreciated.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                                            Amos Leffler
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
<p><p><p><pre>
-- 
David Zhang
University of California, San Diego
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-15818/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15819.php">Ralph Castain: "Re: [OMPI users] Problem running openmpi-1.4.3"</a>
<li><strong>Previous message:</strong> <a href="15817.php">Amos Leffler: "[OMPI users] Problem running openmpi-1.4.3"</a>
<li><strong>In reply to:</strong> <a href="15817.php">Amos Leffler: "[OMPI users] Problem running openmpi-1.4.3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15819.php">Ralph Castain: "Re: [OMPI users] Problem running openmpi-1.4.3"</a>
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

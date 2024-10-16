<?
$subject_val = "Re: [OMPI users] Problem running openmpi-1.4.3";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar  8 20:30:19 2011" -->
<!-- isoreceived="20110309013019" -->
<!-- sent="Tue, 08 Mar 2011 20:30:10 -0500" -->
<!-- isosent="20110309013010" -->
<!-- name="Gus Correa" -->
<!-- email="gus_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problem running openmpi-1.4.3" -->
<!-- id="4D76D822.9060405_at_ldeo.columbia.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="5C62F72A-284C-4C81-B74D-4D31E7361B17_at_open-mpi.org" -->
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
<strong>From:</strong> Gus Correa (<em>gus_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-03-08 20:30:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15821.php">Waclaw Kusnierczyk: "[OMPI users] problems with establishing an intercommunicator"</a>
<li><strong>Previous message:</strong> <a href="15819.php">Ralph Castain: "Re: [OMPI users] Problem running openmpi-1.4.3"</a>
<li><strong>In reply to:</strong> <a href="15819.php">Ralph Castain: "Re: [OMPI users] Problem running openmpi-1.4.3"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ralph Castain wrote:
<br>
<span class="quotelev1">&gt; You need to set your LD_LIBRARY_PATH to point to where you installed openmpi.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Mar 8, 2011, at 5:47 PM, Amos Leffler wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Hi,
</span><br>
<span class="quotelev2">&gt;&gt;        I am trying to get openmpi-1.4.3 to run but am having trouble.
</span><br>
<span class="quotelev2">&gt;&gt; It is run using SUSE-11.3 with Intel XE-2011 Composer C and Fortran
</span><br>
<span class="quotelev2">&gt;&gt; compilers.  The compilers installed without problems.  The openmpi
</span><br>
<span class="quotelev2">&gt;&gt; file was downloaded and unzipped and untarred.  The ./configure
</span><br>
<span class="quotelev2">&gt;&gt; command was run and it was found to be necessary to set CC=gcc and
</span><br>
<span class="quotelev2">&gt;&gt; CXX=g++.  The fortran F77 and F90 were set to ifort. The --prefix was
</span><br>
<span class="quotelev2">&gt;&gt; set to /usr.  The program appeared to compile properly but none of the
</span><br>
<span class="quotelev2">&gt;&gt; examples given would not compile.  The error messages are shown below:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; linux-q2bz:/home/amosleffler/Downloads/openmpi-1.4.3/examples # mpicc
</span><br>
<span class="quotelev2">&gt;&gt; hello_c.c =o hello_c
</span><br>
<span class="quotelev2">&gt;&gt; mpicc: error while loading shared libraries: libopen-pal.so.0: cannot
</span><br>
<span class="quotelev2">&gt;&gt; open shared object file: No such file or directory
</span><br>
<span class="quotelev2">&gt;&gt; linux-q2bz:/home/amosleffler/Downloads/openmpi-1.4.3/examples # mpiCC
</span><br>
<span class="quotelev2">&gt;&gt; hello_cxx.cc -o hello_cxx
</span><br>
<span class="quotelev2">&gt;&gt; mpiCC: error while loading shared libraries: libopen-pal.so.0: cannot
</span><br>
<span class="quotelev2">&gt;&gt; open shared object file: No such file or directory
</span><br>
<span class="quotelev2">&gt;&gt; linux-q2bz:/home/amosleffler/Downloads/openmpi-1.4.3/examples # mpif77
</span><br>
<span class="quotelev2">&gt;&gt; hello_f77.f -o hello_f77
</span><br>
<span class="quotelev2">&gt;&gt; mpif77: error while loading shared libraries: libopen-pal.so.0: cannot
</span><br>
<span class="quotelev2">&gt;&gt; open shared object file: No such file or directory
</span><br>
<span class="quotelev2">&gt;&gt; linux-q2bz:/home/amosleffler/Downloads/openmpi-1.4.3/examples # mpif90
</span><br>
<span class="quotelev2">&gt;&gt; hello_f90.f90 -o hello_f90
</span><br>
<span class="quotelev2">&gt;&gt; mpif90: error while loading shared libraries: libopen-pal.so.0: cannot
</span><br>
<span class="quotelev2">&gt;&gt; open shared object file: No such file or directory
</span><br>
<span class="quotelev2">&gt;&gt; linux-q2bz:/home/amosleffler/Downloads/openmpi-1.4.3/examples
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; It is evident that the same error is present in all attempts to
</span><br>
<span class="quotelev2">&gt;&gt; compile but I don't know why it is absent.  Any help would be much
</span><br>
<span class="quotelev2">&gt;&gt; appreciated.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                                            Amos Leffler
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
<p>These FAQ detail what David and Ralph said:
<br>
<p><a href="http://www.open-mpi.org/faq/?category=running#run-prereqs">http://www.open-mpi.org/faq/?category=running#run-prereqs</a>
<br>
<a href="http://www.open-mpi.org/faq/?category=running#adding-ompi-to-path">http://www.open-mpi.org/faq/?category=running#adding-ompi-to-path</a>
<br>
<p>You can prepend or append (don't overwrite)
<br>
the OpenMPI library directory to your current LD_LIBRARY_PATH,
<br>
so as to keep he Intel ifort library path there also.
<br>
<p>My two cents,
<br>
Gus Correa
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15821.php">Waclaw Kusnierczyk: "[OMPI users] problems with establishing an intercommunicator"</a>
<li><strong>Previous message:</strong> <a href="15819.php">Ralph Castain: "Re: [OMPI users] Problem running openmpi-1.4.3"</a>
<li><strong>In reply to:</strong> <a href="15819.php">Ralph Castain: "Re: [OMPI users] Problem running openmpi-1.4.3"</a>
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

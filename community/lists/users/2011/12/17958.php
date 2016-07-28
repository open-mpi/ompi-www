<?
$subject_val = "Re: [OMPI users] openmpi - gfortran and ifort conflict";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec 14 11:21:06 2011" -->
<!-- isoreceived="20111214162106" -->
<!-- sent="Wed, 14 Dec 2011 11:21:01 -0500" -->
<!-- isosent="20111214162101" -->
<!-- name="Micah Sklut" -->
<!-- email="micahs2005_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openmpi - gfortran and ifort conflict" -->
<!-- id="CAKRSGb-Rr1sQuOAXrifrH3MOLHSQNk8bzEF7=-6+U43KWxTr2w_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="EE05F801-9692-41CF-AFB3-F76A856B4FBD_at_ldeo.columbia.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] openmpi - gfortran and ifort conflict<br>
<strong>From:</strong> Micah Sklut (<em>micahs2005_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-12-14 11:21:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17959.php">Gustavo Correa: "Re: [OMPI users] MPI_BCAST and fortran subarrays"</a>
<li><strong>Previous message:</strong> <a href="17957.php">Gustavo Correa: "Re: [OMPI users] openmpi - gfortran and ifort conflict"</a>
<li><strong>In reply to:</strong> <a href="17957.php">Gustavo Correa: "Re: [OMPI users] openmpi - gfortran and ifort conflict"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17960.php">Gustavo Correa: "Re: [OMPI users] openmpi - gfortran and ifort conflict"</a>
<li><strong>Reply:</strong> <a href="17960.php">Gustavo Correa: "Re: [OMPI users] openmpi - gfortran and ifort conflict"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks for your thoughts,
<br>
<p>It would certainly appear that it is a PATH issue, but I still haven't
<br>
figured it out.
<br>
<p>When I type the ifort command, ifort does run.
<br>
The intel path is in my PATH and is the first directory listed.
<br>
<p>Looking at the configure.log, there is nothing indicating use or mentioning
<br>
of &quot;gfortran&quot;.
<br>
<p>gfortran is in the /usr/bin directory, which is in the PATH as well.
<br>
<p>Any other suggestions of things to look for?
<br>
<p>Thank you,
<br>
<p>On Wed, Dec 14, 2011 at 11:05 AM, Gustavo Correa &lt;gus_at_[hidden]&gt;wrote:
<br>
<p><span class="quotelev1">&gt; Hi Micah
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Is  ifort in your PATH?
</span><br>
<span class="quotelev1">&gt; If not, the OpenMPI configure script will use any fortran compiler it
</span><br>
<span class="quotelev1">&gt; finds first, which may be gfortran.
</span><br>
<span class="quotelev1">&gt; You need to run the Intel compiler startup script before you run the
</span><br>
<span class="quotelev1">&gt; OpenMPI configure.
</span><br>
<span class="quotelev1">&gt; The easy thing to do is to source the Intel script inside your
</span><br>
<span class="quotelev1">&gt; .profile/.bashrc or .[t]cshrc file.
</span><br>
<span class="quotelev1">&gt; I hope this helps,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Gus Correa
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Dec 14, 2011, at 9:49 AM, Micah Sklut wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Hi All,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I have installed openmpi for gfortran, but am now attempting to install
</span><br>
<span class="quotelev1">&gt; openmpi as ifort.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I have run the following configuration:
</span><br>
<span class="quotelev2">&gt; &gt; ./configure --prefix=/opt/openmpi/intel CC=gcc CXX=g++ F77=ifort FC=ifort
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; The install works successfully, but when I run
</span><br>
<span class="quotelev1">&gt; /opt/openmpi/intel/bin/mpif90, it runs as gfortran.
</span><br>
<span class="quotelev2">&gt; &gt; Oddly, when I am user: root, the same mpif90 runs as ifort.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Can someone please alleviate my confusion as to why I mpif90 is not
</span><br>
<span class="quotelev1">&gt; running as ifort?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Thank you for your suggestions,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; --
</span><br>
<span class="quotelev2">&gt; &gt; Micah
</span><br>
<span class="quotelev2">&gt; &gt;
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
<p><p><p><pre>
-- 
Micah Sklut
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-17958/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17959.php">Gustavo Correa: "Re: [OMPI users] MPI_BCAST and fortran subarrays"</a>
<li><strong>Previous message:</strong> <a href="17957.php">Gustavo Correa: "Re: [OMPI users] openmpi - gfortran and ifort conflict"</a>
<li><strong>In reply to:</strong> <a href="17957.php">Gustavo Correa: "Re: [OMPI users] openmpi - gfortran and ifort conflict"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17960.php">Gustavo Correa: "Re: [OMPI users] openmpi - gfortran and ifort conflict"</a>
<li><strong>Reply:</strong> <a href="17960.php">Gustavo Correa: "Re: [OMPI users] openmpi - gfortran and ifort conflict"</a>
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

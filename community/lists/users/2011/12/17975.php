<?
$subject_val = "Re: [OMPI users] openmpi - gfortran and ifort conflict";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec 14 15:29:45 2011" -->
<!-- isoreceived="20111214202945" -->
<!-- sent="Wed, 14 Dec 2011 15:29:36 -0500" -->
<!-- isosent="20111214202936" -->
<!-- name="Micah Sklut" -->
<!-- email="micahs2005_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openmpi - gfortran and ifort conflict" -->
<!-- id="CAKRSGb832c_t3=Z=zpRykdOsdJpRi=ABbcj5cq_yBQngp3oiHw_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4EE905F1.5020309_at_ias.edu" -->
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
<strong>Date:</strong> 2011-12-14 15:29:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17976.php">Prentice Bisbal: "Re: [OMPI users] openmpi - gfortran and ifort conflict"</a>
<li><strong>Previous message:</strong> <a href="17974.php">Sabela Ramos Garea: "[OMPI users] MPI 2 support in sm btl"</a>
<li><strong>In reply to:</strong> <a href="17973.php">Prentice Bisbal: "Re: [OMPI users] openmpi - gfortran and ifort conflict"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17976.php">Prentice Bisbal: "Re: [OMPI users] openmpi - gfortran and ifort conflict"</a>
<li><strong>Reply:</strong> <a href="17976.php">Prentice Bisbal: "Re: [OMPI users] openmpi - gfortran and ifort conflict"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Okay thanks Prentice.
<br>
<p>I understand what you are saying about specifying the compilers during
<br>
configure.
<br>
Perhaps, that alone would have solved the problem, but removing the 1.4.2
<br>
ompi installation worked as well.
<br>
<p>Micah
<br>
<p>On Wed, Dec 14, 2011 at 3:24 PM, Prentice Bisbal &lt;prentice_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 12/14/2011 01:20 PM, Fernanda Oliveira wrote:
</span><br>
<span class="quotelev2">&gt; &gt; Hi Micah,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I do not know if it is exactly what you need but I know that there are
</span><br>
<span class="quotelev2">&gt; &gt; environment variables to use with intel mpi. They are: I_MPI_CC,
</span><br>
<span class="quotelev2">&gt; &gt; I_MPI_CXX, I_MPI_F77, I_MPI_F90. So, you can set this using 'export'
</span><br>
<span class="quotelev2">&gt; &gt; for bash, for instance or directly when you run.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I use in my bashrc:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; export I_MPI_CC=icc
</span><br>
<span class="quotelev2">&gt; &gt; export I_MPI_CXX=icpc
</span><br>
<span class="quotelev2">&gt; &gt; export I_MPI_F77=ifort
</span><br>
<span class="quotelev2">&gt; &gt; export I_MPI_F90=ifort
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Those environment variables are for Intel MPI.  For OpenMPI, the
</span><br>
<span class="quotelev1">&gt; equivalent variables would be OMPI_CC, OMPI_CXX, OMPI_F77, and OMPI_FC,
</span><br>
<span class="quotelev1">&gt; respectively.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Prentice
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-17975/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17976.php">Prentice Bisbal: "Re: [OMPI users] openmpi - gfortran and ifort conflict"</a>
<li><strong>Previous message:</strong> <a href="17974.php">Sabela Ramos Garea: "[OMPI users] MPI 2 support in sm btl"</a>
<li><strong>In reply to:</strong> <a href="17973.php">Prentice Bisbal: "Re: [OMPI users] openmpi - gfortran and ifort conflict"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17976.php">Prentice Bisbal: "Re: [OMPI users] openmpi - gfortran and ifort conflict"</a>
<li><strong>Reply:</strong> <a href="17976.php">Prentice Bisbal: "Re: [OMPI users] openmpi - gfortran and ifort conflict"</a>
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

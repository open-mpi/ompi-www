<?
$subject_val = "Re: [OMPI users] Need libmpi_f90.a";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jul 12 02:43:45 2016" -->
<!-- isoreceived="20160712064345" -->
<!-- sent="Tue, 12 Jul 2016 15:43:31 +0900" -->
<!-- isosent="20160712064331" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Need libmpi_f90.a" -->
<!-- id="c3dc76c6-5b0c-5a37-ef47-806b01263eb8_at_rist.or.jp" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="CADa2P2Vo2cQsCKuJeWUrjytsn54gtmWSsB+P7hrmO4P_h_v4ZQ_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Need libmpi_f90.a<br>
<strong>From:</strong> Gilles Gouaillardet (<em>gilles_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-07-12 02:43:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29647.php">Gundram Leifert: "Re: [OMPI users] Java-OpenMPI returns with SIGSEGV"</a>
<li><strong>Previous message:</strong> <a href="29645.php">Mahmood Naderan: "Re: [OMPI users] Need libmpi_f90.a"</a>
<li><strong>In reply to:</strong> <a href="29645.php">Mahmood Naderan: "Re: [OMPI users] Need libmpi_f90.a"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Instead of manually linking like this
<br>
<p>gfortran -o a.out a.o -lmpi_usempi -lmpi_mpifh -lmpi
<br>
<p>you can simply use the compiler wrapper
<br>
<p>mpifort -o a.out a.o
<br>
<p>so you do not have to worry about the Open MPI library names
<br>
<p>/* i do not think mpifort was available back in 1.6.5, but mpif90 was */
<br>
<p><p>Cheers,
<br>
<p><p>Gilles
<br>
<p><p>On 7/12/2016 3:21 PM, Mahmood Naderan wrote:
<br>
<span class="quotelev1">&gt; Sorry but I didn't understand the relation between name changes and 
</span><br>
<span class="quotelev1">&gt; wrapper compilers. I only used --enable-static in the configure process.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; -rw-r--r-- 1 root root 1029580 Jul 11 23:51 libmpi_mpifh.a
</span><br>
<span class="quotelev2">&gt; &gt; -rw-r--r-- 1 root root   17292 Jul 11 23:51 libmpi_usempi.a
</span><br>
<span class="quotelev2">&gt; &gt;These are the two for v1.10.x.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So, for an application that used libmpi_f90.a, I have to specify those 
</span><br>
<span class="quotelev1">&gt; two files. Is that right?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; MPI_INTERFACE=libmpi_f90.a
</span><br>
<span class="quotelev1">&gt; -&gt;
</span><br>
<span class="quotelev1">&gt; MPI_INTERFACE=libmpi_mpifh.a libmpi_usempi.a
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; Mahmood
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/07/29645.php">http://www.open-mpi.org/community/lists/users/2016/07/29645.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-29646/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29647.php">Gundram Leifert: "Re: [OMPI users] Java-OpenMPI returns with SIGSEGV"</a>
<li><strong>Previous message:</strong> <a href="29645.php">Mahmood Naderan: "Re: [OMPI users] Need libmpi_f90.a"</a>
<li><strong>In reply to:</strong> <a href="29645.php">Mahmood Naderan: "Re: [OMPI users] Need libmpi_f90.a"</a>
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

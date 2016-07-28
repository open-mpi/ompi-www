<?
$subject_val = "Re: [OMPI users] An error occured in MPI_Bcast; MPI_ERR_TYPE: invalid datatype";
include("../../include/msg-header.inc");
?>
<!-- received="Sat May 22 06:33:34 2010" -->
<!-- isoreceived="20100522103334" -->
<!-- sent="Sat, 22 May 2010 12:33:25 +0200" -->
<!-- isosent="20100522103325" -->
<!-- name="Pankatz, Klaus" -->
<!-- email="klaus.pankatz_at_[hidden]" -->
<!-- subject="Re: [OMPI users] An error occured in MPI_Bcast; MPI_ERR_TYPE: invalid datatype" -->
<!-- id="015394E5-E783-46F6-A539-C4B084D5AF45_at_mpic.de" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4BF696E3.8060000_at_oracle.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] An error occured in MPI_Bcast; MPI_ERR_TYPE: invalid datatype<br>
<strong>From:</strong> Pankatz, Klaus (<em>klaus.pankatz_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-05-22 06:33:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13130.php">Dawid Laszuk: "[OMPI users] mpirun: symbol lookup error: mpirun: undefined symbol: orte_xml_fp"</a>
<li><strong>Previous message:</strong> <a href="13128.php">Jeff Squyres: "Re: [OMPI users] General question on the implementation ofa&quot;scheduler&quot; on client side..."</a>
<li><strong>In reply to:</strong> <a href="13122.php">Eugene Loh: "Re: [OMPI users] An error occured in MPI_Bcast; MPI_ERR_TYPE: invalid datatype"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13123.php">Tom Rosmond: "Re: [OMPI users] An error occured in MPI_Bcast; MPI_ERR_TYPE:	invalid datatype"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Okay, that was easy... Thanks!
<br>
<p>Am 21.05.2010 um 16:21 schrieb Eugene Loh:
<br>
<p><span class="quotelev1">&gt; Pankatz, Klaus wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Hi folks,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; openMPI 1.4.1 seems to have another problem with my machine, or something on it. 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; This little program here (compiled with mpif90) startet with mpiexec -np 4 a.out produces the following output:
</span><br>
<span class="quotelev2">&gt;&gt; Suriprisingly the same thing written in C-Code (compiled with mpiCC) works without a problem.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; Not so surprising since it's C code!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; For Fortran:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; MPI_INT -&gt; MPI_INTEGER
</span><br>
<span class="quotelev1">&gt; and add an ierror argument to your MPI_Bcast call (the way you have for 
</span><br>
<span class="quotelev1">&gt; MPI_Comm_rank/size).
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
<li><strong>Next message:</strong> <a href="13130.php">Dawid Laszuk: "[OMPI users] mpirun: symbol lookup error: mpirun: undefined symbol: orte_xml_fp"</a>
<li><strong>Previous message:</strong> <a href="13128.php">Jeff Squyres: "Re: [OMPI users] General question on the implementation ofa&quot;scheduler&quot; on client side..."</a>
<li><strong>In reply to:</strong> <a href="13122.php">Eugene Loh: "Re: [OMPI users] An error occured in MPI_Bcast; MPI_ERR_TYPE: invalid datatype"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13123.php">Tom Rosmond: "Re: [OMPI users] An error occured in MPI_Bcast; MPI_ERR_TYPE:	invalid datatype"</a>
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

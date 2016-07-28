<?
$subject_val = "[OMPI users] signal 15 (terminated)";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Feb  7 13:01:47 2009" -->
<!-- isoreceived="20090207180147" -->
<!-- sent="Sat, 7 Feb 2009 10:01:37 -0800 (PST)" -->
<!-- isosent="20090207180137" -->
<!-- name="Hana Milani" -->
<!-- email="hana.milani_at_[hidden]" -->
<!-- subject="[OMPI users] signal 15 (terminated)" -->
<!-- id="576829.74591.qm_at_web111209.mail.gq1.yahoo.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="mailman.15.1234026024.23358.users_at_open-mpi.org" -->
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
<strong>Subject:</strong> [OMPI users] signal 15 (terminated)<br>
<strong>From:</strong> Hana Milani (<em>hana.milani_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-02-07 13:01:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7990.php">Jeff Squyres: "Re: [OMPI users] signal 15 (terminated)"</a>
<li><strong>Previous message:</strong> <a href="7988.php">Jeff Squyres: "Re: [OMPI users] open-mpi ssh hostname problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7958.php">Hana Milani: "Re: [OMPI users] signal 15 (terminated)"</a>
<li><strong>Maybe reply:</strong> <a href="7958.php">Hana Milani: "Re: [OMPI users] signal 15 (terminated)"</a>
<li><strong>Reply:</strong> <a href="7990.php">Jeff Squyres: "Re: [OMPI users] signal 15 (terminated)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1">&gt; Are you able to run *any* MPI applications (especially those compiled  
</span><br>
<span class="quotelev1">&gt; with Fortran) in parallel?  E.g., the hello world and the ring  
</span><br>
<span class="quotelev1">&gt; programs in the examples/ subdirectory in the OMPI distribution?
</span><br>
<p>I am ruuning another code which does not need scalapack and blacs with openmpi directly, it has been written by fortran as well. The parallel run is happily going on.
<br>
<p>The &quot;hello world&quot; and the ring programs in the examples are also working fine!!!
<br>
<p>As you can see in my prev. email, in the code there's an &quot;arch.make&quot; file in which I have to mention the MPI address + scalapack, blacs lapack and blas library addresses. Could this &quot;killing&quot; originate from this file. Because the scalapack installer is installed correctly the tests are running fine and the openmpi is functioning.
<br>
<p>I have had enclosed arch.make in my prev. email.
<br>
<p><p><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
<p>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-7989/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7990.php">Jeff Squyres: "Re: [OMPI users] signal 15 (terminated)"</a>
<li><strong>Previous message:</strong> <a href="7988.php">Jeff Squyres: "Re: [OMPI users] open-mpi ssh hostname problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7958.php">Hana Milani: "Re: [OMPI users] signal 15 (terminated)"</a>
<li><strong>Maybe reply:</strong> <a href="7958.php">Hana Milani: "Re: [OMPI users] signal 15 (terminated)"</a>
<li><strong>Reply:</strong> <a href="7990.php">Jeff Squyres: "Re: [OMPI users] signal 15 (terminated)"</a>
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

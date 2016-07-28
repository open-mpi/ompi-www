<?
$subject_val = "Re: [OMPI users] Equivalent .h files";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Oct 30 10:39:13 2008" -->
<!-- isoreceived="20081030143913" -->
<!-- sent="Thu, 30 Oct 2008 10:38:09 -0400" -->
<!-- isosent="20081030143809" -->
<!-- name="Brock Palen" -->
<!-- email="brockp_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Equivalent .h files" -->
<!-- id="270E8A4B-04D7-4A7C-A278-5BA60DFE780B_at_umich.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="71ec5a370810300733h5920d577hffaea987b7120378_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Equivalent .h files<br>
<strong>From:</strong> Brock Palen (<em>brockp_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-10-30 10:38:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7140.php">Brock Palen: "Re: [OMPI users] Mixed Threaded MPI code, how to launch?"</a>
<li><strong>Previous message:</strong> <a href="7138.php">Benjamin Lamptey: "[OMPI users] Equivalent .h files"</a>
<li><strong>In reply to:</strong> <a href="7138.php">Benjamin Lamptey: "[OMPI users] Equivalent .h files"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7143.php">Benjamin Lamptey: "Re: [OMPI users] Equivalent .h files"</a>
<li><strong>Reply:</strong> <a href="7143.php">Benjamin Lamptey: "Re: [OMPI users] Equivalent .h files"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
If your using fortran 90 the mpi module is best:
<br>
<p><p>use mpi
<br>
<p>If 77 (or don't have a working module)
<br>
<p>include 'mpif.h'
<br>
<p>Just like any other MPI library.
<br>
<p>Brock Palen
<br>
www.umich.edu/~brockp
<br>
Center for Advanced Computing
<br>
brockp_at_[hidden]
<br>
(734)936-1985
<br>
<p><p><p>On Oct 30, 2008, at 10:33 AM, Benjamin Lamptey wrote:
<br>
<p><span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt; I am new at using open-mpi and will like to know something basic.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; What is the equivalent of the &quot;mpif.h&quot; in open-mpi which is  
</span><br>
<span class="quotelev1">&gt; normally &quot;included&quot; at
</span><br>
<span class="quotelev1">&gt; the beginning of mpi codes (fortran in this case).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I shall appreciate that for cpp as well.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks
</span><br>
<span class="quotelev1">&gt; Ben
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
<li><strong>Next message:</strong> <a href="7140.php">Brock Palen: "Re: [OMPI users] Mixed Threaded MPI code, how to launch?"</a>
<li><strong>Previous message:</strong> <a href="7138.php">Benjamin Lamptey: "[OMPI users] Equivalent .h files"</a>
<li><strong>In reply to:</strong> <a href="7138.php">Benjamin Lamptey: "[OMPI users] Equivalent .h files"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7143.php">Benjamin Lamptey: "Re: [OMPI users] Equivalent .h files"</a>
<li><strong>Reply:</strong> <a href="7143.php">Benjamin Lamptey: "Re: [OMPI users] Equivalent .h files"</a>
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

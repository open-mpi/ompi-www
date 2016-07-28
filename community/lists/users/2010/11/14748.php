<?
$subject_val = "Re: [OMPI users] memcpy overlap in ompi_ddt_copy_content_same_ddt and glibc 2.12";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Nov 12 18:39:33 2010" -->
<!-- isoreceived="20101112233933" -->
<!-- sent="Fri, 12 Nov 2010 18:39:26 -0500" -->
<!-- isosent="20101112233926" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI users] memcpy overlap in ompi_ddt_copy_content_same_ddt and glibc 2.12" -->
<!-- id="5B103A74-44E7-4843-BA42-1D596D75A939_at_eecs.utk.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="AANLkTikgEZRVXZdqTizG5cQbmBhDemEbiO_-NeS4xrg1_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] memcpy overlap in ompi_ddt_copy_content_same_ddt and glibc 2.12<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-11-12 18:39:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14749.php">Yiannis Papadopoulos: "Re: [OMPI users] Calling MPI_Test() too many times results in a time spike"</a>
<li><strong>Previous message:</strong> <a href="14747.php">Martin Siegert: "[OMPI users] memory allocation - Fortran"</a>
<li><strong>In reply to:</strong> <a href="14734.php">Jed Brown: "Re: [OMPI users] memcpy overlap in ompi_ddt_copy_content_same_ddt and glibc 2.12"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I think I have a solution which solve both issues:
<br>
&nbsp;- deal with the overlapping regions
<br>
&nbsp;- maintain the level of today's performance
<br>
<p>Please try r24047. 
<br>
<p>&nbsp;&nbsp;george.
<br>
<p>On Nov 11, 2010, at 06:46 , Jed Brown wrote:
<br>
<p><span class="quotelev1">&gt; On Thu, Nov 11, 2010 at 12:36, Number Cruncher &lt;number.cruncher_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; However as commented here: <a href="https://bugzilla.redhat.com/show_bug.cgi?id=638477#c86">https://bugzilla.redhat.com/show_bug.cgi?id=638477#c86</a> the valgrind memcpy implementation is overlap-safe.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  Yes, of course.  That's how the bug in Open MPI was originally detected.  Of course you can't do production runs with valgrind.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Are you using an Intel Nehalem-class CPU?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; No, Core 2 Duo and Opteron (but the Opterons still have older glibc).  Reverse memcpy must only be turned on for Nehalem.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Jed
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
<li><strong>Next message:</strong> <a href="14749.php">Yiannis Papadopoulos: "Re: [OMPI users] Calling MPI_Test() too many times results in a time spike"</a>
<li><strong>Previous message:</strong> <a href="14747.php">Martin Siegert: "[OMPI users] memory allocation - Fortran"</a>
<li><strong>In reply to:</strong> <a href="14734.php">Jed Brown: "Re: [OMPI users] memcpy overlap in ompi_ddt_copy_content_same_ddt and glibc 2.12"</a>
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

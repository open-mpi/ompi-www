<?
$subject_val = "Re: [OMPI users] MPI_INIT failure while building coinor-ipopt";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Oct 24 21:23:11 2009" -->
<!-- isoreceived="20091025012311" -->
<!-- sent="Sat, 24 Oct 2009 21:23:03 -0400" -->
<!-- isosent="20091025012303" -->
<!-- name="Roberto C. S&#225;nchez" -->
<!-- email="roberto_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_INIT failure while building coinor-ipopt" -->
<!-- id="20091025012302.GA16132_at_connexer.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="4AE3A31B.3070109_at_khubla.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI_INIT failure while building coinor-ipopt<br>
<strong>From:</strong> Roberto C. S&#225;nchez (<em>roberto_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-10-24 21:23:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10960.php">Steve Kargl: "Re: [OMPI users] MPI-3 Fortran feedback"</a>
<li><strong>Previous message:</strong> <a href="10958.php">Damien Hocking: "Re: [OMPI users] MPI_INIT failure while building coinor-ipopt"</a>
<li><strong>In reply to:</strong> <a href="10958.php">Damien Hocking: "Re: [OMPI users] MPI_INIT failure while building coinor-ipopt"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Sat, Oct 24, 2009 at 07:00:11PM -0600, Damien Hocking wrote:
<br>
<span class="quotelev1">&gt; Roberto,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ipopt doesn't use MPI.  It can use the MUMPS parallel linear solver in  
</span><br>
<span class="quotelev1">&gt; sequential mode, but nothing is set up in IPOPT to use the parallel MPI  
</span><br>
<span class="quotelev1">&gt; version.  For sequential mode, MUMPS dummies out the MPI headers.  The  
</span><br>
<span class="quotelev1">&gt; dummy headers are part of the MUMPS distribution in the libseq  
</span><br>
<span class="quotelev1">&gt; directory.  You're probably getting the OpenMPI headers instead of the  
</span><br>
<span class="quotelev1">&gt; dummy ones.  I can't open your bz2, my machine tells me it's borked, so  
</span><br>
<span class="quotelev1">&gt; I can't read your log and see exactly where it's going wrong.
</span><br>
<span class="quotelev1">&gt;
</span><br>
Damien,
<br>
<p>That's the missing bit of information I needed.  The MUMPS package in
<br>
Debian apparently does not include those headers.
<br>
<p>Regards,
<br>
<p>-Roberto
<br>
<p><pre>
-- 
Roberto C. S&#225;nchez
<a href="http://people.connexer.com/~roberto">http://people.connexer.com/~roberto</a>
<a href="http://www.connexer.com">http://www.connexer.com</a>

</pre>
<hr>
<ul>
<li>application/pgp-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-10959/signature.asc">Digital signature</a>
</ul>
<!-- attachment="signature.asc" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10960.php">Steve Kargl: "Re: [OMPI users] MPI-3 Fortran feedback"</a>
<li><strong>Previous message:</strong> <a href="10958.php">Damien Hocking: "Re: [OMPI users] MPI_INIT failure while building coinor-ipopt"</a>
<li><strong>In reply to:</strong> <a href="10958.php">Damien Hocking: "Re: [OMPI users] MPI_INIT failure while building coinor-ipopt"</a>
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

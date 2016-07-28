<?
$subject_val = "Re: [OMPI users] Fortran - MPI_WORLD_COMM";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jun 22 18:57:58 2010" -->
<!-- isoreceived="20100622225758" -->
<!-- sent="Tue, 22 Jun 2010 17:57:54 -0500 (CDT)" -->
<!-- isosent="20100622225754" -->
<!-- name="Anthony Chan" -->
<!-- email="chan_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Fortran - MPI_WORLD_COMM" -->
<!-- id="1531174.1003331277247474827.JavaMail.root_at_zimbra" -->
<!-- charset="utf-8" -->
<!-- inreplyto="f65fadb138ea.4c21047d_at_mssm.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] Fortran - MPI_WORLD_COMM<br>
<strong>From:</strong> Anthony Chan (<em>chan_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-06-22 18:57:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13393.php">Jeff Squyres: "Re: [OMPI users] Fortran - MPI_WORLD_COMM - correction"</a>
<li><strong>Previous message:</strong> <a href="13391.php">Kevin.Buckley_at_[hidden]: "Re: [OMPI users] Fortran - MPI_WORLD_COMM - correction"</a>
<li><strong>In reply to:</strong> <a href="13388.php">Mihaly Mezei: "Re: [OMPI users] Fortran - MPI_WORLD_COMM"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13394.php">Kevin.Buckley_at_[hidden]: "Re: [OMPI users] Fortran - MPI_WORLD_COMM"</a>
<li><strong>Reply:</strong> <a href="13394.php">Kevin.Buckley_at_[hidden]: "Re: [OMPI users] Fortran - MPI_WORLD_COMM"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I don't think you can declare a function with a fortran parameter:
<br>
<p>subroutine testsubr(MPI_COMM_WORLD,ireadok)
<br>
<p>1) If you've already included mpif.h with in testsubr(),
<br>
&nbsp;&nbsp;&nbsp;you don't need the 1st argument above. 
<br>
2) If you don't have mpif.h in testsubr(), the 1st argument
<br>
&nbsp;&nbsp;&nbsp;could be MPI_comm.  In that case, replace MPI_COMM_WORLD
<br>
&nbsp;&nbsp;&nbsp;in MPI_Bcast by MPI_comm.
<br>
<p>This is basic fortran programming issue, you may want to consult
<br>
some fortran programming book.
<br>
<p>A.Chan
<br>
<p>----- &quot;Mihaly Mezei&quot; &lt;Mihaly.Mezei_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The previous example I posted shows that using a different integer
</span><br>
<span class="quotelev1">&gt; does not work, Attached is a case where I tired to pass the
</span><br>
<span class="quotelev1">&gt; MPI_COMM_WORLD to the subroutine as one of it arguments, resulting in
</span><br>
<span class="quotelev1">&gt; an invalid datatype error.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Mihaly Mezei
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Department of Structural and Chemical Biology, Mount Sinai School of
</span><br>
<span class="quotelev1">&gt; Medicine
</span><br>
<span class="quotelev1">&gt; Voice:  (212) 659-5475   Fax: (212) 849-2456
</span><br>
<span class="quotelev1">&gt; WWW (MSSM home):
</span><br>
<span class="quotelev1">&gt; <a href="http://www.mountsinai.org/Find%20A%20Faculty/profile.do?id=0000072500001497192632">http://www.mountsinai.org/Find%20A%20Faculty/profile.do?id=0000072500001497192632</a>
</span><br>
<span class="quotelev1">&gt; WWW (Lab home - software, publications): <a href="http://inka.mssm.edu/~mezei">http://inka.mssm.edu/~mezei</a>
</span><br>
<span class="quotelev1">&gt; WWW (Department): <a href="http://atlas.physbio.mssm.edu">http://atlas.physbio.mssm.edu</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13393.php">Jeff Squyres: "Re: [OMPI users] Fortran - MPI_WORLD_COMM - correction"</a>
<li><strong>Previous message:</strong> <a href="13391.php">Kevin.Buckley_at_[hidden]: "Re: [OMPI users] Fortran - MPI_WORLD_COMM - correction"</a>
<li><strong>In reply to:</strong> <a href="13388.php">Mihaly Mezei: "Re: [OMPI users] Fortran - MPI_WORLD_COMM"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13394.php">Kevin.Buckley_at_[hidden]: "Re: [OMPI users] Fortran - MPI_WORLD_COMM"</a>
<li><strong>Reply:</strong> <a href="13394.php">Kevin.Buckley_at_[hidden]: "Re: [OMPI users] Fortran - MPI_WORLD_COMM"</a>
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

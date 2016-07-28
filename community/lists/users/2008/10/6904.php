<?
$subject_val = "Re: [OMPI users] OMPI link error with petsc 2.3.3";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Oct  8 11:33:19 2008" -->
<!-- isoreceived="20081008153319" -->
<!-- sent="Wed, 08 Oct 2008 11:33:12 -0400" -->
<!-- isosent="20081008153312" -->
<!-- name="Terry Dontje" -->
<!-- email="Terry.Dontje_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OMPI link error with petsc 2.3.3" -->
<!-- id="48ECD2B8.4080504_at_sun.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="mailman.2986.1223476059.16379.users_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] OMPI link error with petsc 2.3.3<br>
<strong>From:</strong> Terry Dontje (<em>Terry.Dontje_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-10-08 11:33:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6905.php">Jeff Squyres: "Re: [OMPI users] Performance: MPICH2 vs OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="6903.php">Brock Palen: "Re: [OMPI users] Performance: MPICH2 vs OpenMPI"</a>
<li><strong>Maybe in reply to:</strong> <a href="6878.php">Yann JOBIC: "[OMPI users] OMPI link error with petsc 2.3.3"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Yann,
<br>
<p>Well, when you use f90 to link it passed the linker the -t option which is described in the manpage with the following:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Turns off the warning for multiply-defined symbols  that
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;have different sizes or different alignments.
<br>
<p>That's why :-)
<br>
<p>To your original question should you worry about this?  Answer is no.
<br>
<p>The reason why follows, after digging in the OMPI code no you should not.  The reason being is what is happening is in the Fortran library we define MPI_STATUS_IGNORE to be a size of 5 integers so when you pass it to an MPI call you don't get an error from the compiler complaining that the argument doesn't match the parameter type it was expecting.  However, we also define MPI_STATUS_IGNORE in a common block to overlap the libmpi.so variable mpi_fortran_status_ignore which is a pointer to an integer.  This is done so when you pass MPI_STATUS_IGNORE to an MPI call it can recognize this as a special MPI_STATUS_IGNORE value and operate appropriately (ie don't return values back via the status structure.
<br>
<p>The problem is that when libmpi_f90.so is made the size of mpi_fortran_status_ignore is assumed to be 5 integers (ie 0x14) but libmpi.so has it defined as a pointer to an integer in your case 8 bytes.  Since libmpi.so is actually doing nothing except looking at the address of the common block you do not run the risk of having issues with the size being off so ignoring the size differences of the symbol is ok.
<br>
<p><p>Sorry it took so long for me to piece all of this together.  I actually mucked with this before about 9 months ago.  I guess it was such a traumatic experience that I blanked out the workings :-).
<br>
<p>--td
<br>
<p><span class="quotelev1">&gt; Date: Wed, 08 Oct 2008 15:58:11 +0200
</span><br>
<span class="quotelev1">&gt; From: &quot;Yann JOBIC&quot; &lt;jobic_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] OMPI link error with petsc 2.3.3
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Message-ID: &lt;48ECBC73.2020003_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Content-Type: text/plain; charset=ISO-8859-1; format=flowed
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I just tried to link with mpif90. And that's working! I don't have the 
</span><br>
<span class="quotelev1">&gt; warning.
</span><br>
<span class="quotelev1">&gt; (the small change from your command : PIC, not fPIC)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm trying to compile PETSC with the new linker.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; How come we don't have the warning ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Yann
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6905.php">Jeff Squyres: "Re: [OMPI users] Performance: MPICH2 vs OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="6903.php">Brock Palen: "Re: [OMPI users] Performance: MPICH2 vs OpenMPI"</a>
<li><strong>Maybe in reply to:</strong> <a href="6878.php">Yann JOBIC: "[OMPI users] OMPI link error with petsc 2.3.3"</a>
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

<?
$subject_val = "Re: [OMPI users] pgi and gcc runtime compatability";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Dec  7 22:51:44 2008" -->
<!-- isoreceived="20081208035144" -->
<!-- sent="Mon, 08 Dec 2008 14:51:36 +1100" -->
<!-- isosent="20081208035136" -->
<!-- name="David Singleton" -->
<!-- email="David.Singleton_at_[hidden]" -->
<!-- subject="Re: [OMPI users] pgi and gcc runtime compatability" -->
<!-- id="493C99C8.9050904_at_anu.edu.au" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4866_1228705724_493C8FBB_4866_31455_1_B952C621-730C-4634-A9EE-973974CCAE2B_at_umich.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] pgi and gcc runtime compatability<br>
<strong>From:</strong> David Singleton (<em>David.Singleton_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-12-07 22:51:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7444.php">Eugene Loh: "Re: [OMPI users] trouble using --mca mpi_yield_when_idle 1"</a>
<li><strong>Previous message:</strong> <a href="7442.php">Terry Frankcombe: "Re: [OMPI users] pgi and gcc runtime compatability"</a>
<li><strong>Maybe in reply to:</strong> <a href="7441.php">Brock Palen: "[OMPI users] pgi and gcc runtime compatability"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7458.php">George Bosilca: "Re: [OMPI users] pgi and gcc runtime compatability"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I seem to remember Fortran logicals being represented differently in
<br>
PGI to other Fortran (1 vs -1 maybe - cant remember).  Causes
<br>
grief with things like MPI_Test.
<br>
<p>David
<br>
<p>Brock Palen wrote:
<br>
<span class="quotelev1">&gt; I did something today that I was happy worked,  but I want to know if 
</span><br>
<span class="quotelev1">&gt; anyone has had problem with it.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; At runtime. (not compiling)  would a OpenMPI built with pgi  work to run 
</span><br>
<span class="quotelev1">&gt; a code that was compiled with the same version but gcc built OpenMPI ?  
</span><br>
<span class="quotelev1">&gt; I tested a few apps today after I accidentally did this and found it 
</span><br>
<span class="quotelev1">&gt; worked.  They were all C/C++ apps  (namd and gromacs)  but what about 
</span><br>
<span class="quotelev1">&gt; fortran apps?   Should we expect problems if someone does this?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am not going to encourage this, but it is more if needed.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Brock Palen
</span><br>
<span class="quotelev1">&gt; www.umich.edu/~brockp
</span><br>
<span class="quotelev1">&gt; Center for Advanced Computing
</span><br>
<span class="quotelev1">&gt; brockp_at_[hidden]
</span><br>
<span class="quotelev1">&gt; (734)936-1985
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7444.php">Eugene Loh: "Re: [OMPI users] trouble using --mca mpi_yield_when_idle 1"</a>
<li><strong>Previous message:</strong> <a href="7442.php">Terry Frankcombe: "Re: [OMPI users] pgi and gcc runtime compatability"</a>
<li><strong>Maybe in reply to:</strong> <a href="7441.php">Brock Palen: "[OMPI users] pgi and gcc runtime compatability"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7458.php">George Bosilca: "Re: [OMPI users] pgi and gcc runtime compatability"</a>
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

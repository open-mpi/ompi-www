<?
$subject_val = "Re: [OMPI users] problem starting openmpi on core duo macosx5";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Aug 15 09:14:23 2009" -->
<!-- isoreceived="20090815131423" -->
<!-- sent="Sat, 15 Aug 2009 15:14:12 +0200" -->
<!-- isosent="20090815131412" -->
<!-- name="Joop van Lenthe" -->
<!-- email="j.h.vanlenthe_at_[hidden]" -->
<!-- subject="Re: [OMPI users] problem starting openmpi on core duo macosx5" -->
<!-- id="848A83E2-7390-4B07-8B32-95936345913B_at_uu.nl" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="6B2995F4-A98D-4304-BEEB-59E16AC2755E_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] problem starting openmpi on core duo macosx5<br>
<strong>From:</strong> Joop van Lenthe (<em>j.h.vanlenthe_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-08-15 09:14:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10374.php">Klymak Jody: "Re: [OMPI users] openmpi with xgrid"</a>
<li><strong>Previous message:</strong> <a href="10372.php">Jeff Squyres: "Re: [OMPI users] problem starting openmpi on core duo macosx5"</a>
<li><strong>In reply to:</strong> <a href="10372.php">Jeff Squyres: "Re: [OMPI users] problem starting openmpi on core duo macosx5"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10391.php">Jeff Squyres: "Re: [OMPI users] problem starting openmpi on core duo macosx5"</a>
<li><strong>Reply:</strong> <a href="10391.php">Jeff Squyres: "Re: [OMPI users] problem starting openmpi on core duo macosx5"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I think so
<br>
I used
<br>
MPI_LIB=/usr/local/lib
<br>
LIBMPI= -L$(MPI_LIB) -lmpi_f90 -lmpi_f77 -lmpi
<br>
and compiled with gfortran.
<br>
and loaded with tha LIBMPI given above
<br>
But you were very right. It was using the mpirun from /usr/bin instead  
<br>
of /usr/local/bin
<br>
When I did that the parallelo stuff was better;  I still have some  
<br>
trouble with io, but we 'll fix that later
<br>
Thanks
<br>
Joop
<br>
<p>On 15/08/2009, at 1:52 PM, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; On Aug 15, 2009, at 7:44 AM, Joop van Lenthe wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi
</span><br>
<span class="quotelev2">&gt;&gt; I downloaded and compiled openmpi and installed it.
</span><br>
<span class="quotelev2">&gt;&gt; I set met public /private keys.
</span><br>
<span class="quotelev2">&gt;&gt; I try to run and get:
</span><br>
<span class="quotelev2">&gt;&gt; ./gamess
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; A requested component was not found, or was unable to be opened.   
</span><br>
<span class="quotelev2">&gt;&gt; This
</span><br>
<span class="quotelev2">&gt;&gt; means that this component is either not installed or is unable to be
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Was gamess compiled against the new version of Open MPI that you  
</span><br>
<span class="quotelev1">&gt; downloaded and installed?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Note that OS X ships with its own version of Open MPI -- you should  
</span><br>
<span class="quotelev1">&gt; probably install Open MPI into an alternate location (e.g., /usr/ 
</span><br>
<span class="quotelev1">&gt; local) and put it in the front of your PATH (e.g., put /usr/local/ 
</span><br>
<span class="quotelev1">&gt; bin in front of your path).  Then you should be able to use mpicc/ 
</span><br>
<span class="quotelev1">&gt; mpif77/etc. to compile and link MPI applications as normal with the  
</span><br>
<span class="quotelev1">&gt; new version.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
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
<li><strong>Next message:</strong> <a href="10374.php">Klymak Jody: "Re: [OMPI users] openmpi with xgrid"</a>
<li><strong>Previous message:</strong> <a href="10372.php">Jeff Squyres: "Re: [OMPI users] problem starting openmpi on core duo macosx5"</a>
<li><strong>In reply to:</strong> <a href="10372.php">Jeff Squyres: "Re: [OMPI users] problem starting openmpi on core duo macosx5"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10391.php">Jeff Squyres: "Re: [OMPI users] problem starting openmpi on core duo macosx5"</a>
<li><strong>Reply:</strong> <a href="10391.php">Jeff Squyres: "Re: [OMPI users] problem starting openmpi on core duo macosx5"</a>
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

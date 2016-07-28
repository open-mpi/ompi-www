<?
$subject_val = "Re: [OMPI users] problem starting openmpi on core duo macosx5";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Aug 17 14:38:15 2009" -->
<!-- isoreceived="20090817183815" -->
<!-- sent="Mon, 17 Aug 2009 14:38:09 -0400" -->
<!-- isosent="20090817183809" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] problem starting openmpi on core duo macosx5" -->
<!-- id="60999A25-5FD0-4C46-9D8B-C4F91D53B94E_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="848A83E2-7390-4B07-8B32-95936345913B_at_uu.nl" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-08-17 14:38:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10392.php">Jeff Squyres: "Re: [OMPI users] How to make a job abort when one host dies?"</a>
<li><strong>Previous message:</strong> <a href="10390.php">Jeff Squyres: "Re: [OMPI users] Invalid Info object in MPI_Comm_spawn_multiple"</a>
<li><strong>In reply to:</strong> <a href="10373.php">Joop van Lenthe: "Re: [OMPI users] problem starting openmpi on core duo macosx5"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
FWIW, if you use the right mpicc/mpif77/mpif90, you shouldn't need to  
<br>
specify any of the -L or -l options.  Those will automatically be  
<br>
specified by the wrapper compiler.
<br>
<p>If you cannot use mpicc/mpif77/mpif90, then see this FAQ entry:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/faq/?category=mpi-apps#cant-use-wrappers">http://www.open-mpi.org/faq/?category=mpi-apps#cant-use-wrappers</a>
<br>
<p><p>On Aug 15, 2009, at 9:14 AM, Joop van Lenthe wrote:
<br>
<p><span class="quotelev1">&gt; I think so
</span><br>
<span class="quotelev1">&gt; I used
</span><br>
<span class="quotelev1">&gt; MPI_LIB=/usr/local/lib
</span><br>
<span class="quotelev1">&gt; LIBMPI= -L$(MPI_LIB) -lmpi_f90 -lmpi_f77 -lmpi
</span><br>
<span class="quotelev1">&gt; and compiled with gfortran.
</span><br>
<span class="quotelev1">&gt; and loaded with tha LIBMPI given above
</span><br>
<span class="quotelev1">&gt; But you were very right. It was using the mpirun from /usr/bin instead
</span><br>
<span class="quotelev1">&gt; of /usr/local/bin
</span><br>
<span class="quotelev1">&gt; When I did that the parallelo stuff was better;  I still have some
</span><br>
<span class="quotelev1">&gt; trouble with io, but we 'll fix that later
</span><br>
<span class="quotelev1">&gt; Thanks
</span><br>
<span class="quotelev1">&gt; Joop
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 15/08/2009, at 1:52 PM, Jeff Squyres wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Aug 15, 2009, at 7:44 AM, Joop van Lenthe wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Hi
</span><br>
<span class="quotelev3">&gt; &gt;&gt; I downloaded and compiled openmpi and installed it.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; I set met public /private keys.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; I try to run and get:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; ./gamess
</span><br>
<span class="quotelev3">&gt; &gt;&gt;  
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt; &gt;&gt; A requested component was not found, or was unable to be opened.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; This
</span><br>
<span class="quotelev3">&gt; &gt;&gt; means that this component is either not installed or is unable to  
</span><br>
<span class="quotelev1">&gt; be
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Was gamess compiled against the new version of Open MPI that you
</span><br>
<span class="quotelev2">&gt; &gt; downloaded and installed?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Note that OS X ships with its own version of Open MPI -- you should
</span><br>
<span class="quotelev2">&gt; &gt; probably install Open MPI into an alternate location (e.g., /usr/
</span><br>
<span class="quotelev2">&gt; &gt; local) and put it in the front of your PATH (e.g., put /usr/local/
</span><br>
<span class="quotelev2">&gt; &gt; bin in front of your path).  Then you should be able to use mpicc/
</span><br>
<span class="quotelev2">&gt; &gt; mpif77/etc. to compile and link MPI applications as normal with the
</span><br>
<span class="quotelev2">&gt; &gt; new version.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; --
</span><br>
<span class="quotelev2">&gt; &gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt; &gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<span class="quotelev1">&gt;
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10392.php">Jeff Squyres: "Re: [OMPI users] How to make a job abort when one host dies?"</a>
<li><strong>Previous message:</strong> <a href="10390.php">Jeff Squyres: "Re: [OMPI users] Invalid Info object in MPI_Comm_spawn_multiple"</a>
<li><strong>In reply to:</strong> <a href="10373.php">Joop van Lenthe: "Re: [OMPI users] problem starting openmpi on core duo macosx5"</a>
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

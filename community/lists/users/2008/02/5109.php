<?
$subject_val = "Re: [OMPI users] OpenMpi and Leopard";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Feb 29 16:41:53 2008" -->
<!-- isoreceived="20080229214153" -->
<!-- sent="Fri, 29 Feb 2008 16:41:46 -0500" -->
<!-- isosent="20080229214146" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMpi and Leopard" -->
<!-- id="FC17C885-27F3-43DD-B694-995143B6D8EB_at_cisco.com" -->
<!-- charset="WINDOWS-1252" -->
<!-- inreplyto="2CDB68DC-3079-499A-9D5C-9332E46F3697_at_pitt.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] OpenMpi and Leopard<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-02-29 16:41:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5110.php">Jeff Squyres: "Re: [OMPI users] build trouble"</a>
<li><strong>Previous message:</strong> <a href="5108.php">Frank Tabakin: "[OMPI users] OpenMpi and Leopard"</a>
<li><strong>In reply to:</strong> <a href="5108.php">Frank Tabakin: "[OMPI users] OpenMpi and Leopard"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5111.php">Frank Tabakin: "Re: [OMPI users] OpenMpi and Leopard"</a>
<li><strong>Reply:</strong> <a href="5111.php">Frank Tabakin: "Re: [OMPI users] OpenMpi and Leopard"</a>
<li><strong>Reply:</strong> <a href="5112.php">Frank Tabakin: "Re: [OMPI users] OpenMpi and Leopard"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
FWIW, this doesn't look like an Absoft error -- it looks like gcc  
<br>
cannot create executables.  So Open MPI (or any C application) cannot  
<br>
be built.
<br>
<p>Did you install the OS X developer tools?  IIRC, that's where gcc is  
<br>
located, and is not part of the default OS X install.
<br>
<p><p><p>On Feb 29, 2008, at 4:26 PM, Frank Tabakin wrote:
<br>
<p><span class="quotelev1">&gt; I just upgraded to OSX 10.5.2 on my imac
</span><br>
<span class="quotelev1">&gt; and am trying to install openmpi  for use with absoft fortran 90
</span><br>
<span class="quotelev1">&gt; based on their instruction page:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.absoft.com/Products/Compilers/Fortran/Linux/fortran95/BuildingOpenMPI_MacIntel_v101.pdf">http://www.absoft.com/Products/Compilers/Fortran/Linux/fortran95/BuildingOpenMPI_MacIntel_v101.pdf</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I got into trouble as per info below.
</span><br>
<span class="quotelev1">&gt; Seems to be a gcc problem.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; any suggestions?
</span><br>
<span class="quotelev1">&gt; Thanks for helping.
</span><br>
<span class="quotelev1">&gt; Frank
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ==============
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; sudo ./configure CC=/usr/bin/gcc F77=$ABSOFT/bin/f77 FFLAGS=&#148;-lU77&#148;  
</span><br>
<span class="quotelev1">&gt; FC=$ABSOFT/bin/f90 FCFLAGS=&#148;-lU77&#148;
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; ======================================================================
</span><br>
<span class="quotelev1">&gt; == Compiler and preprocessor tests
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; ======================================================================
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *** C compiler and preprocessor
</span><br>
<span class="quotelev1">&gt; checking for style of include used by make... GNU
</span><br>
<span class="quotelev1">&gt; checking for gcc... /usr/bin/gcc
</span><br>
<span class="quotelev1">&gt; checking for C compiler default output file name...
</span><br>
<span class="quotelev1">&gt; configure: error: C compiler cannot create executables
</span><br>
<span class="quotelev1">&gt; See `config.log' for more details.
</span><br>
<span class="quotelev1">&gt; *****************************************************************************
</span><br>
<span class="quotelev1">&gt; **                                                                         **
</span><br>
<span class="quotelev1">&gt; ** WARNING:  This email contains an attachment of a very suspicious  
</span><br>
<span class="quotelev1">&gt; type.  **
</span><br>
<span class="quotelev1">&gt; ** You are urged NOT to open this attachment unless you are  
</span><br>
<span class="quotelev1">&gt; absolutely     **
</span><br>
<span class="quotelev1">&gt; ** sure it is legitimate.  Opening this attachment may cause  
</span><br>
<span class="quotelev1">&gt; irreparable   **
</span><br>
<span class="quotelev1">&gt; ** damage to your computer and your files.  If you have any  
</span><br>
<span class="quotelev1">&gt; questions      **
</span><br>
<span class="quotelev1">&gt; ** about the validity of this message, PLEASE SEEK HELP BEFORE  
</span><br>
<span class="quotelev1">&gt; OPENING IT. **
</span><br>
<span class="quotelev1">&gt; **                                                                         **
</span><br>
<span class="quotelev1">&gt; ** This warning was added by the IU Computer Science Dept. mail  
</span><br>
<span class="quotelev1">&gt; scanner.   **
</span><br>
<span class="quotelev1">&gt; *****************************************************************************
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &lt;config.zip&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5110.php">Jeff Squyres: "Re: [OMPI users] build trouble"</a>
<li><strong>Previous message:</strong> <a href="5108.php">Frank Tabakin: "[OMPI users] OpenMpi and Leopard"</a>
<li><strong>In reply to:</strong> <a href="5108.php">Frank Tabakin: "[OMPI users] OpenMpi and Leopard"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5111.php">Frank Tabakin: "Re: [OMPI users] OpenMpi and Leopard"</a>
<li><strong>Reply:</strong> <a href="5111.php">Frank Tabakin: "Re: [OMPI users] OpenMpi and Leopard"</a>
<li><strong>Reply:</strong> <a href="5112.php">Frank Tabakin: "Re: [OMPI users] OpenMpi and Leopard"</a>
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

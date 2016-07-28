<?
$subject_val = "Re: [OMPI users] OpenMpi and Leopard";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Feb 29 16:53:12 2008" -->
<!-- isoreceived="20080229215312" -->
<!-- sent="Fri, 29 Feb 2008 16:53:01 -0500" -->
<!-- isosent="20080229215301" -->
<!-- name="Frank Tabakin" -->
<!-- email="tabakin_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMpi and Leopard" -->
<!-- id="89982EEB-431D-4BE0-832B-7BF7CD124495_at_pitt.edu" -->
<!-- charset="WINDOWS-1252" -->
<!-- inreplyto="FC17C885-27F3-43DD-B694-995143B6D8EB_at_cisco.com" -->
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
<strong>From:</strong> Frank Tabakin (<em>tabakin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-02-29 16:53:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5112.php">Frank Tabakin: "Re: [OMPI users] OpenMpi and Leopard"</a>
<li><strong>Previous message:</strong> <a href="5110.php">Jeff Squyres: "Re: [OMPI users] build trouble"</a>
<li><strong>In reply to:</strong> <a href="5109.php">Jeff Squyres: "Re: [OMPI users] OpenMpi and Leopard"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5112.php">Frank Tabakin: "Re: [OMPI users] OpenMpi and Leopard"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
That's probably the problem.
<br>
I will try to install it.
<br>
Thanks so much for the rapid reply.
<br>
Frank
<br>
<p>On Feb 29, 2008, at 4:41 PM, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; FWIW, this doesn't look like an Absoft error -- it looks like gcc
</span><br>
<span class="quotelev1">&gt; cannot create executables.  So Open MPI (or any C application) cannot
</span><br>
<span class="quotelev1">&gt; be built.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Did you install the OS X developer tools?  it, that's where gcc is
</span><br>
<span class="quotelev1">&gt; located, and is not part of the default OS X install.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Feb 29, 2008, at 4:26 PM, Frank Tabakin wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I just upgraded to OSX 10.5.2 on my imac
</span><br>
<span class="quotelev2">&gt;&gt; and am trying to install openmpi  for use with absoft fortran 90
</span><br>
<span class="quotelev2">&gt;&gt; based on their instruction page:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.absoft.com/Products/Compilers/Fortran/Linux/fortran95/BuildingOpenMPI_MacIntel_v101.pdf">http://www.absoft.com/Products/Compilers/Fortran/Linux/fortran95/BuildingOpenMPI_MacIntel_v101.pdf</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I got into trouble as per info below.
</span><br>
<span class="quotelev2">&gt;&gt; Seems to be a gcc problem.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; any suggestions?
</span><br>
<span class="quotelev2">&gt;&gt; Thanks for helping.
</span><br>
<span class="quotelev2">&gt;&gt; Frank
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ==============
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; sudo ./configure CC=/usr/bin/gcc F77=$ABSOFT/bin/f77 FFLAGS=&#148;-lU77&#148;
</span><br>
<span class="quotelev2">&gt;&gt; FC=$ABSOFT/bin/f90 FCFLAGS=&#148;-lU77&#148;
</span><br>
<span class="quotelev2">&gt;&gt; =
</span><br>
<span class="quotelev2">&gt;&gt; =
</span><br>
<span class="quotelev2">&gt;&gt; =
</span><br>
<span class="quotelev2">&gt;&gt; =
</span><br>
<span class="quotelev2">&gt;&gt; =
</span><br>
<span class="quotelev2">&gt;&gt; =
</span><br>
<span class="quotelev2">&gt;&gt; =
</span><br>
<span class="quotelev2">&gt;&gt; =====================================================================
</span><br>
<span class="quotelev2">&gt;&gt; == Compiler and preprocessor tests
</span><br>
<span class="quotelev2">&gt;&gt; =
</span><br>
<span class="quotelev2">&gt;&gt; =
</span><br>
<span class="quotelev2">&gt;&gt; =
</span><br>
<span class="quotelev2">&gt;&gt; =
</span><br>
<span class="quotelev2">&gt;&gt; =
</span><br>
<span class="quotelev2">&gt;&gt; =
</span><br>
<span class="quotelev2">&gt;&gt; =
</span><br>
<span class="quotelev2">&gt;&gt; =====================================================================
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; *** C compiler and preprocessor
</span><br>
<span class="quotelev2">&gt;&gt; checking for style of include used by make... GNU
</span><br>
<span class="quotelev2">&gt;&gt; checking for gcc... /usr/bin/gcc
</span><br>
<span class="quotelev2">&gt;&gt; checking for C compiler default output file name...
</span><br>
<span class="quotelev2">&gt;&gt; configure: error: C compiler cannot create executables
</span><br>
<span class="quotelev2">&gt;&gt; See `config.log' for more details.
</span><br>
<span class="quotelev2">&gt;&gt; *****************************************************************************
</span><br>
<span class="quotelev2">&gt;&gt; **                                                                         **
</span><br>
<span class="quotelev2">&gt;&gt; ** WARNING:  This email contains an attachment of a very suspicious
</span><br>
<span class="quotelev2">&gt;&gt; type.  **
</span><br>
<span class="quotelev2">&gt;&gt; ** You are urged NOT to open this attachment unless you are
</span><br>
<span class="quotelev2">&gt;&gt; absolutely     **
</span><br>
<span class="quotelev2">&gt;&gt; ** sure it is legitimate.  Opening this attachment may cause
</span><br>
<span class="quotelev2">&gt;&gt; irreparable   **
</span><br>
<span class="quotelev2">&gt;&gt; ** damage to your computer and your files.  If you have any
</span><br>
<span class="quotelev2">&gt;&gt; questions      **
</span><br>
<span class="quotelev2">&gt;&gt; ** about the validity of this message, PLEASE SEEK HELP BEFORE
</span><br>
<span class="quotelev2">&gt;&gt; OPENING IT. **
</span><br>
<span class="quotelev2">&gt;&gt; **                                                                         **
</span><br>
<span class="quotelev2">&gt;&gt; ** This warning was added by the IU Computer Science Dept. mail
</span><br>
<span class="quotelev2">&gt;&gt; scanner.   **
</span><br>
<span class="quotelev2">&gt;&gt; *****************************************************************************
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &lt;config.zip&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; Cisco Systems
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
<li><strong>Next message:</strong> <a href="5112.php">Frank Tabakin: "Re: [OMPI users] OpenMpi and Leopard"</a>
<li><strong>Previous message:</strong> <a href="5110.php">Jeff Squyres: "Re: [OMPI users] build trouble"</a>
<li><strong>In reply to:</strong> <a href="5109.php">Jeff Squyres: "Re: [OMPI users] OpenMpi and Leopard"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5112.php">Frank Tabakin: "Re: [OMPI users] OpenMpi and Leopard"</a>
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

<? include("../../include/msg-header.inc"); ?>
<!-- received="Sun Jul  1 10:52:37 2007" -->
<!-- isoreceived="20070701145237" -->
<!-- sent="Sun, 1 Jul 2007 13:05:25 +0200" -->
<!-- isosent="20070701110525" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openmpi on g4 mac with g95 (www.g95.org) in mpif90" -->
<!-- id="01C78085-B85F-401F-87A3-99E92C331342_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="4685D304.4030904_at_cs.utk.edu" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-07-01 07:05:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3564.php">Jeff Squyres: "Re: [OMPI users] initial setup"</a>
<li><strong>Previous message:</strong> <a href="3562.php">Jeff Squyres: "Re: [OMPI users] Absoft compilation problem"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2007/06/3558.php">Ed D'Azevedo: "[OMPI users] openmpi on g4 mac with g95 (www.g95.org) in mpif90"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Please see the &quot;Getting Help&quot; page on the OMPI web site (look in the  
<br>
links in the navigation on the left-hand side) -- we need some more  
<br>
information from you in order to correctly diagnose the problem.
<br>
<p>Thanks.
<br>
<p><p>On Jun 30, 2007, at 5:50 AM, Ed D'Azevedo wrote:
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am trying to build openmpi on a G4 mac osx 10.4 with Fortran g95
</span><br>
<span class="quotelev1">&gt; (www.g95.org) support. I would like to use mpif90 or mpif77 to  
</span><br>
<span class="quotelev1">&gt; compile Fortran MPI code.    I get an error in the configuration  
</span><br>
<span class="quotelev1">&gt; script. I use &quot;sh setup.sh&quot;. The file &quot;setup.sh&quot; is attached. Is  
</span><br>
<span class="quotelev1">&gt; there a way to make a reasonable guess say Fortran logical is the  
</span><br>
<span class="quotelev1">&gt; same size as Fortran integer and continue with the build process?  
</span><br>
<span class="quotelev1">&gt; Thanks. -------------------- checking if PowerPC registers have r  
</span><br>
<span class="quotelev1">&gt; prefix... yes checking for 64-bit PowerPC assembly support... no  
</span><br>
<span class="quotelev1">&gt; checking if gcc supports GCC inline assembly... yes checking if gcc  
</span><br>
<span class="quotelev1">&gt; supports DEC inline assembly... no checking if gcc supports XLC  
</span><br>
<span class="quotelev1">&gt; inline assembly... no checking if g++ supports GCC inline  
</span><br>
<span class="quotelev1">&gt; assembly... yes checking if g++ supports DEC inline assembly... no  
</span><br>
<span class="quotelev1">&gt; checking if g++ supports XLC inline assembly... no checking for  
</span><br>
<span class="quotelev1">&gt; assembly format... default-.text-.globl-:-_-L--0-1-1-0-0 checking  
</span><br>
<span class="quotelev1">&gt; for asssembly architecture... POWERPC32 checking for perl... perl  
</span><br>
<span class="quotelev1">&gt; checking for pre-built assembly file... yes (atomic-powerpc32- 
</span><br>
<span class="quotelev1">&gt; osx.s) checking for atomic assembly filename... atomic-powerpc32- 
</span><br>
<span class="quotelev1">&gt; osx.s *** Fortran 77 compiler checking whether we are using the GNU  
</span><br>
<span class="quotelev1">&gt; Fortran 77 compiler... yes checking whether /Users/e6d/bin/g95  
</span><br>
<span class="quotelev1">&gt; accepts -g... yes checking if Fortran 77 compiler works... yes  
</span><br>
<span class="quotelev1">&gt; checking /Users/e6d/bin/g95 external symbol convention... double  
</span><br>
<span class="quotelev1">&gt; underscore checking if C and Fortran 77 are link compatible... yes  
</span><br>
<span class="quotelev1">&gt; checking if Fortran 77 compiler supports LOGICAL... yes checking  
</span><br>
<span class="quotelev1">&gt; size of Fortran 77 LOGICAL... configure: error: Could not determine  
</span><br>
<span class="quotelev1">&gt; size of LOGICAL
</span><br>
<span class="quotelev1">&gt; F77=/Users/e6d/bin/g95
</span><br>
<span class="quotelev1">&gt; FFLAGS=&quot;-ffixed-form -i4 -fzero -g -ftrace=full&quot;
</span><br>
<span class="quotelev1">&gt; FC=/Users/e6d/bin/g95
</span><br>
<span class="quotelev1">&gt; FCFLAGS=&quot;-i4 -fzero -g -ftrace=full&quot;
</span><br>
<span class="quotelev1">&gt; export F77
</span><br>
<span class="quotelev1">&gt; export FFLAGS
</span><br>
<span class="quotelev1">&gt; export FC
</span><br>
<span class="quotelev1">&gt; export FCFLAGS
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ./configure --enable-mpi-f90  \
</span><br>
<span class="quotelev1">&gt; 	--with-mpi-f90-size=trivial \
</span><br>
<span class="quotelev1">&gt; 	--with-mpi-param-check=always \
</span><br>
<span class="quotelev1">&gt; 	F77=/Users/e6d/bin/g95 \
</span><br>
<span class="quotelev1">&gt; 	FC=/Users/e6d/bin/g95 \
</span><br>
<span class="quotelev1">&gt; 	FFLAGS=&quot; -ffixed-form -i4  -fzero -g -ftrace=full &quot; \
</span><br>
<span class="quotelev1">&gt; 	FCFLAGS=&quot; -ffixed-form -i4  -fzero -g -ftrace=full &quot;
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
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3564.php">Jeff Squyres: "Re: [OMPI users] initial setup"</a>
<li><strong>Previous message:</strong> <a href="3562.php">Jeff Squyres: "Re: [OMPI users] Absoft compilation problem"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2007/06/3558.php">Ed D'Azevedo: "[OMPI users] openmpi on g4 mac with g95 (www.g95.org) in mpif90"</a>
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

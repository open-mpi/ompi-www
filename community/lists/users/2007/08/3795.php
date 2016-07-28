<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Aug  1 20:59:09 2007" -->
<!-- isoreceived="20070802005909" -->
<!-- sent="Wed, 1 Aug 2007 20:58:44 -0400" -->
<!-- isosent="20070802005844" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] unable to compile open mpi using pgf90 in AMD opteron system" -->
<!-- id="5453C030-B7C9-48E1-BBA7-F04BCC43C9CB_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="3c20c5bc0708010838l4623bef8ka2a82803f5afb084_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2007-08-01 20:58:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3796.php">Francesco Pietra: "[OMPI users] mpi daemon"</a>
<li><strong>Previous message:</strong> <a href="3794.php">Adams, Samuel D Contr AFRL/HEDR: "Re: [OMPI users] torque and openmpi"</a>
<li><strong>In reply to:</strong> <a href="3791.php">S.Sundar Raman: "[OMPI users] unable to compile open mpi using pgf90 in AMD opteron system"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3806.php">Luke Hur: "Re: [OMPI users] unable to compile open mpi using pgf90 in AMD opteron system"</a>
<li><strong>Reply:</strong> <a href="3806.php">Luke Hur: "Re: [OMPI users] unable to compile open mpi using pgf90 in AMD opteron system"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Aug 1, 2007, at 11:38 AM, S.Sundar Raman wrote:
<br>
<p><span class="quotelev1">&gt; dear openmpi users,
</span><br>
<span class="quotelev1">&gt; i m trying to compile openmpi with pgf90 compiler in AMD opteron  
</span><br>
<span class="quotelev1">&gt; system.
</span><br>
<span class="quotelev1">&gt; i followed the procedure given in the mailer archives.
</span><br>
<p>What procedure are you referring to, specifically?
<br>
<p><span class="quotelev1">&gt; i found the following problem.
</span><br>
<span class="quotelev1">&gt; please kindly help me in this regard and i m eagerly waiting for  
</span><br>
<span class="quotelev1">&gt; your reply
</span><br>
<span class="quotelev1">&gt; make[2]: Entering directory `/usr/local/openmpi-1.2.3/ompi/mpi/f90'
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; /bin/sh ../../../libtool --mode=link pgf90 -I../../../ompi/include - 
</span><br>
<span class="quotelev1">&gt; I../../../ompi/include -I. -I. -I../../../ompi/mpi/f90 -export- 
</span><br>
<span class="quotelev1">&gt; dynamic -o libmpi_f90.la -rpath /usr/local/mpi/lib mpi.lo  
</span><br>
<span class="quotelev1">&gt; mpi_sizeof.lo mpi_comm_spawn_multiple_f90.lo mpi_testall_f90.lo  
</span><br>
<span class="quotelev1">&gt; mpi_testsome_f90.lo mpi_waitall_f90.lo mpi_waitsome_f90.lo  
</span><br>
<span class="quotelev1">&gt; mpi_wtick_f90.lo mpi_wtime_f90.lo -lnsl -lutil -lm
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; libtool: link: pgf90 -shared -fPIC -Mnomain .libs/mpi.o .libs/ 
</span><br>
<span class="quotelev1">&gt; mpi_sizeof.o .libs/mpi_comm_spawn_multiple_f90.o .libs/ 
</span><br>
<span class="quotelev1">&gt; mpi_testall_f90.o .libs/mpi_testsome_f90.o .libs/ 
</span><br>
<span class="quotelev1">&gt; mpi_waitall_f90.o .libs/mpi_waitsome_f90.o .libs/ 
</span><br>
<span class="quotelev1">&gt; mpi_wtick_f90.o .libs/mpi_wtime_f90.o -lnsl -lutil -lm -Wl,-soname - 
</span><br>
<span class="quotelev1">&gt; Wl,libmpi_f90.so.0 -o .libs/libmpi_f90.so.0.0.0
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; /usr/bin/ld: .libs/mpi.o: relocation R_X86_64_PC32 against  
</span><br>
<span class="quotelev1">&gt; `__pgio_ini' can not be used when making a shared object; recompile  
</span><br>
<span class="quotelev1">&gt; with -fPIC
</span><br>
<p>I can usually compile with the PGI compilers without needing to do  
<br>
anything special (PGI v6.2-5 and 7.0-2), although I usually do add  
<br>
the following option to configure:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--with-wrapper-cxxflags=-fPIC
<br>
<p>This puts &quot;-fPIC&quot; in the flags that the mpiCC wrapper compiler will  
<br>
automatically insert when compiling MPI C++ applications.
<br>
<p>Can you send all the information listed here:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>
<br>
<p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3796.php">Francesco Pietra: "[OMPI users] mpi daemon"</a>
<li><strong>Previous message:</strong> <a href="3794.php">Adams, Samuel D Contr AFRL/HEDR: "Re: [OMPI users] torque and openmpi"</a>
<li><strong>In reply to:</strong> <a href="3791.php">S.Sundar Raman: "[OMPI users] unable to compile open mpi using pgf90 in AMD opteron system"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3806.php">Luke Hur: "Re: [OMPI users] unable to compile open mpi using pgf90 in AMD opteron system"</a>
<li><strong>Reply:</strong> <a href="3806.php">Luke Hur: "Re: [OMPI users] unable to compile open mpi using pgf90 in AMD opteron system"</a>
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

<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Oct 17 16:29:58 2007" -->
<!-- isoreceived="20071017202958" -->
<!-- sent="Wed, 17 Oct 2007 16:29:45 -0400" -->
<!-- isosent="20071017202945" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OMPI not work with Intel '-fast' option" -->
<!-- id="A28231D7-3D3F-45DD-995D-CC4D6E4DEB63_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="Pine.LNX.4.64.0710171628060.4725_at_cappuccino.ucs.ed.ac.uk" -->
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
<strong>Date:</strong> 2007-10-17 16:29:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4236.php">Jeff Squyres: "Re: [OMPI users] MPI_Probe succeeds, but subsequent MPI_Recv gets stuck"</a>
<li><strong>Previous message:</strong> <a href="4234.php">Jeff Squyres: "Re: [OMPI users] Compiling OpenMPI for i386 on a x86_64"</a>
<li><strong>In reply to:</strong> <a href="4228.php">Yuan Wan: "[OMPI users] OMPI not work with Intel '-fast' option"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
This looks like a compiler issue, to me.  It is probably worth asking  
<br>
your Intel compiler support people as to why this happens.
<br>
<p>I tried with both icc 9.1 and 10.0 and am able to replicate your  
<br>
findings:
<br>
it works fine without -fast, but claims that it can't find mpi_f90  
<br>
when you use -fast:
<br>
<p>shell% ifort -I/home/jsquyres/bogus/include -pthread -I/home/jsquyres/ 
<br>
bogus/lib hello.f90 -o hello  -L/home/jsquyres/bogus/lib -lmpi_f90 - 
<br>
lmpi_f77 -lmpi -lopen-rte -lopen-pal -ldl -Wl,--export-dynamic -lnsl - 
<br>
lutil
<br>
/opt/intel/9.1/lib/libimf.so: warning: warning: feupdateenv is not  
<br>
implemented and will always fail
<br>
shell%
<br>
<p>And (icc 9.1):
<br>
<p>shell% ifort -I/home/jsquyres/bogus/include -pthread -I/home/jsquyres/ 
<br>
bogus/lib hello.f90 -o hello -fast -L/home/jsquyres/bogus/lib - 
<br>
lmpi_f90 -lmpi_f77 -lmpi -lopen-rte -lopen-pal -ldl -Wl,--export- 
<br>
dynamic -lnsl -lutil
<br>
IPO: performing single-file optimizations
<br>
IPO: generating object file /tmp/ipo_ifort93yZWY.o
<br>
ld: cannot find -lmpi_f90
<br>
shell%
<br>
<p>With icc 10.0:
<br>
<p>shell% mpif90 hello.f90 -o hello -fast
<br>
ipo: remark #11001: performing single-file optimizations
<br>
ipo: remark #11005: generating object file /tmp/ipo_ifortAT0da4.o
<br>
ld: cannot find -lmpi_f90
<br>
shell%
<br>
<p><p><p>On Oct 17, 2007, at 11:53 AM, Yuan Wan wrote:
<br>
<p><span class="quotelev1">&gt; Hi all,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm using OpenMPI 1.2.2 with Intel compilers (icc, ifort)
</span><br>
<span class="quotelev1">&gt; But I found mpicc and mpif90 cannot work with Intel -fast  
</span><br>
<span class="quotelev1">&gt; optimisation.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ---------------------------------------------------------------------- 
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; [ywan_at_frontend01 hello]$ mpif90 -fast -o hello -i-dynamic hello.f90
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; IPO: performing single-file optimizations
</span><br>
<span class="quotelev1">&gt; IPO: generating object file
</span><br>
<span class="quotelev1">&gt; /tmp/ipo_ifortTdJGQr.o
</span><br>
<span class="quotelev1">&gt; ld: cannot find -lmpi_f90
</span><br>
<span class="quotelev1">&gt; ---------------------------------------------------------------------- 
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The above command can be expanded as:
</span><br>
<span class="quotelev1">&gt; ---------------------------------------------------------------------- 
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; [ywan_at_frontend01 hello]$ mpif90 -fast -o hello -i-dynamic hello.f90  
</span><br>
<span class="quotelev1">&gt; -show
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ifort -I/usr/local/Cluster-Apps/openmpi/intel/64/1.2.2//include - 
</span><br>
<span class="quotelev1">&gt; pthread
</span><br>
<span class="quotelev1">&gt; -I/usr/local/Cluster-Apps/openmpi/intel/64/1.2.2//lib -fast -o hello
</span><br>
<span class="quotelev1">&gt; -i-dynamic hello.f90 -L/usr/local/Cluster-Apps/openmpi/intel/ 
</span><br>
<span class="quotelev1">&gt; 64/1.2.2//lib
</span><br>
<span class="quotelev1">&gt; -lmpi_f90 -lmpi_f77 -lmpi -lopen-rte -lopen-pal -ldl -Wl,--export- 
</span><br>
<span class="quotelev1">&gt; dynamic
</span><br>
<span class="quotelev1">&gt; -lirc -lstdc++ -lnsl -lutil
</span><br>
<span class="quotelev1">&gt; ---------------------------------------------------------------------- 
</span><br>
<span class="quotelev1">&gt; ---
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpif90 can find -lmpi_f90 if I remove -fast from above command.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Anyone knows the reseaon why OpenMPI not works with Intel -fast?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --Yuan
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Yuan Wan
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Unix Section
</span><br>
<span class="quotelev1">&gt; Information Services Infrastructure Division
</span><br>
<span class="quotelev1">&gt; University of Edinburgh
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; tel: 0131 650 4985
</span><br>
<span class="quotelev1">&gt; email: ywan_at_[hidden]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2032 Computing Services, JCMB
</span><br>
<span class="quotelev1">&gt; The King's Buildings,
</span><br>
<span class="quotelev1">&gt; Edinburgh, EH9 3JZ
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
<li><strong>Next message:</strong> <a href="4236.php">Jeff Squyres: "Re: [OMPI users] MPI_Probe succeeds, but subsequent MPI_Recv gets stuck"</a>
<li><strong>Previous message:</strong> <a href="4234.php">Jeff Squyres: "Re: [OMPI users] Compiling OpenMPI for i386 on a x86_64"</a>
<li><strong>In reply to:</strong> <a href="4228.php">Yuan Wan: "[OMPI users] OMPI not work with Intel '-fast' option"</a>
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

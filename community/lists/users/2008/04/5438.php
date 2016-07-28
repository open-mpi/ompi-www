<?
$subject_val = "Re: [OMPI users] Problems compiling OPENMPI !!";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr 22 08:05:24 2008" -->
<!-- isoreceived="20080422120524" -->
<!-- sent="Tue, 22 Apr 2008 08:05:16 -0400" -->
<!-- isosent="20080422120516" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problems compiling OPENMPI !!" -->
<!-- id="C38DE365-2C69-411C-B752-4D9465F4A444_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="8CA726EA6AB2AB2-4C0-4E33_at_webmail-dd08.sysops.aol.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Problems compiling OPENMPI !!<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-04-22 08:05:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5439.php">Simon Hammond: "Re: [OMPI users] Problems with program-execution with OpenMPI: Orted: command not found"</a>
<li><strong>Previous message:</strong> <a href="5437.php">Jeff Squyres: "Re: [OMPI users] Problems with program-execution with OpenMPI:	Orted: command not found"</a>
<li><strong>In reply to:</strong> <a href="5435.php">koppole_at_[hidden]: "[OMPI users] Problems compiling OPENMPI !!"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5440.php">koppole_at_[hidden]: "Re: [OMPI users] Problems compiling OPENMPI !!"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Is your C++ compiler installer properly?  Can you build and run other C 
<br>
++ programs that use the STL?
<br>
<p><p>On Apr 22, 2008, at 5:01 AM, koppole_at_[hidden] wrote:
<br>
<p><span class="quotelev1">&gt; Hello there,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I downloaded openmpi-1.2.5.tar and &quot;un-tar&quot;'ed it with tar -xvf  
</span><br>
<span class="quotelev1">&gt; openmpi-1.2.5.tar which created a directory openmpi-1.2.5.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I then created a build directory and called
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ../openmpi-1.2.5/configure --prefix=$home/openmpi FC=ifort64  
</span><br>
<span class="quotelev1">&gt; F77=ifort64 F95=ifort64 CC=icc64 CXX=icpc | &amp; tee config.out
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Everything went fine.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I then said : make -j 8 | &amp; tee make.out and the compilation crashed  
</span><br>
<span class="quotelev1">&gt; with:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; /bin/sh ../../../libtool --tag=CXX   --mode=link icpc  -O3 -DNDEBUG - 
</span><br>
<span class="quotelev1">&gt; finline-functions -pthread  -export-dynamic   -o libmpi_cxx.la - 
</span><br>
<span class="quotelev1">&gt; rpath /usr/people/camm/kopposa1/openmpi/lib mpicxx.lo intercepts.lo  
</span><br>
<span class="quotelev1">&gt; comm.lo datatype.lo file.lo win.lo  -lnsl -lutil
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; libtool: link: icpc -shared  .libs/mpicxx.o .libs/intercepts.o .libs/ 
</span><br>
<span class="quotelev1">&gt; comm.o .libs/datatype.o .libs/file.o .libs/win.o   -lnsl -lutil -L/ 
</span><br>
<span class="quotelev1">&gt; usr/prog/intel/cce/101015/lib -L/usr/lib/gcc/x86_64-redhat-linux/ 
</span><br>
<span class="quotelev1">&gt; 3.4.6/ -L/usr/lib/gcc/x86_64-redhat-linux/3.4.6/../../../../lib64 - 
</span><br>
<span class="quotelev1">&gt; limf -lsvml -lipgo /usr/people/camm/kopposa1/gcc64/lib/../lib64/ 
</span><br>
<span class="quotelev1">&gt; libstdc++.a -L/scratch/gcc/x86_64-unknown-linux-gnu/libstdc++-v3/src  
</span><br>
<span class="quotelev1">&gt; -L/scratch/gcc/x86_64-unknown-linux-gnu/libstdc++-v3/src/.libs -L/ 
</span><br>
<span class="quotelev1">&gt; scratch/gcc/./gcc -L/lib/../lib64 -L/usr/lib/../lib64 -lm -lgcc - 
</span><br>
<span class="quotelev1">&gt; lintlc -lpthread -lgcc_s -lirc_s -ldl -lc  -pthread   -pthread -Wl,- 
</span><br>
<span class="quotelev1">&gt; soname -Wl,libmpi_cxx.so.0 -o .libs/libmpi_cxx.so.0.0.0
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ld: /usr/people/camm/kopposa1/gcc64/lib/../lib64/libstdc+ 
</span><br>
<span class="quotelev1">&gt; +.a(ios_init.o): relocation R_X86_64_32 against `pthread_cancel' can  
</span><br>
<span class="quotelev1">&gt; not be used when making a shared object; recompile with -fPIC
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; /usr/people/camm/kopposa1/gcc64/lib/../lib64/libstdc++.a: could not  
</span><br>
<span class="quotelev1">&gt; read symbols: Bad value
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; make[3]: *** [libmpi_cxx.la] Error 1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; make[3]: Leaving directory `/scratch/openmpi/ompi/mpi/cxx'
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; make[2]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; make[2]: Leaving directory `/scratch/openmpi/ompi/mpi'
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; make[1]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; make[1]: Leaving directory `/scratch/openmpi/ompi'
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; make: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; FYI: I am attaching the zipped make.out and config.out files.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks a lot for your help,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Sampath.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Sampath Koppole,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The Computational Molecular Biophysics Group,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Interdisciplinary Center for Scientific Computing (IWR),
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 368, Im Neuenheimer Feld,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Heidelberg. D-69120.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Germany.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Web Home : <a href="http://www.sampath.koppole.com">http://www.sampath.koppole.com</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &lt; 
</span><br>
<span class="quotelev1">&gt; config 
</span><br>
<span class="quotelev1">&gt; .out 
</span><br>
<span class="quotelev1">&gt; .tar 
</span><br>
<span class="quotelev1">&gt; .gz&gt;&lt;make.out.tar.gz&gt;_______________________________________________
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
<li><strong>Next message:</strong> <a href="5439.php">Simon Hammond: "Re: [OMPI users] Problems with program-execution with OpenMPI: Orted: command not found"</a>
<li><strong>Previous message:</strong> <a href="5437.php">Jeff Squyres: "Re: [OMPI users] Problems with program-execution with OpenMPI:	Orted: command not found"</a>
<li><strong>In reply to:</strong> <a href="5435.php">koppole_at_[hidden]: "[OMPI users] Problems compiling OPENMPI !!"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5440.php">koppole_at_[hidden]: "Re: [OMPI users] Problems compiling OPENMPI !!"</a>
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

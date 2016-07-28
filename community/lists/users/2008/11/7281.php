<?
$subject_val = "Re: [OMPI users] Can I build development RPM from openmpi-1.2.8-1.src.rpm?";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Nov 11 12:53:54 2008" -->
<!-- isoreceived="20081111175354" -->
<!-- sent="Tue, 11 Nov 2008 12:53:28 -0500" -->
<!-- isosent="20081111175328" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Can I build development RPM from openmpi-1.2.8-1.src.rpm?" -->
<!-- id="A9DF0F44-C5EF-4838-876C-8D4F1E0C59B3_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="31768_1226421647_mABGehM1004996_971786.89764.qm_at_web56601.mail.re3.yahoo.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Can I build development RPM from openmpi-1.2.8-1.src.rpm?<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-11-11 12:53:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7282.php">Ray Muno: "[OMPI users] Trouble with OpenMPI and Intel 10.1 compilers"</a>
<li><strong>Previous message:</strong> <a href="7280.php">Oleg V. Zhylin: "Re: [OMPI users] Can I build development RPM from openmpi-1.2.8-1.src.rpm?"</a>
<li><strong>In reply to:</strong> <a href="7280.php">Oleg V. Zhylin: "Re: [OMPI users] Can I build development RPM from openmpi-1.2.8-1.src.rpm?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7275.php">Sofia Aparicio Secanellas: "[OMPI users] Problems using mpi with cmake"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Nov 11, 2008, at 11:40 AM, Oleg V. Zhylin wrote:
<br>
<p><span class="quotelev1">&gt; mpif90 -g -pg -CB -traceback --static -fno-range-check -L/usr/lib64/ 
</span><br>
<span class="quotelev1">&gt; openmpi/1.2.4-gcc -c forests.f90
</span><br>
<span class="quotelev1">&gt; gfortran: unrecognized option '-CB'
</span><br>
<span class="quotelev1">&gt; gfortran: unrecognized option '-traceback'
</span><br>
<span class="quotelev1">&gt; mpif90 -g -pg -CB -traceback --static -fno-range-check -L/usr/lib64/ 
</span><br>
<span class="quotelev1">&gt; openmpi/1.2.4-gcc -o parf main.f90 parallel.o trees.o bitvectors.o  
</span><br>
<span class="quotelev1">&gt; instancesets.o options.o utilities.o bootstraps.o forests.o  
</span><br>
<span class="quotelev1">&gt; importances.o prototypes.o graphics.o support.o
</span><br>
<span class="quotelev1">&gt; gfortran: unrecognized option '-CB'
</span><br>
<span class="quotelev1">&gt; gfortran: unrecognized option '-traceback'
</span><br>
<span class="quotelev1">&gt; /usr/bin/ld: cannot find -lmpi_f90
</span><br>
<span class="quotelev1">&gt; collect2: ld returned 1 exit status
</span><br>
<span class="quotelev1">&gt; make: *** [parf] Error 1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; /usr/bin/ld doesn't see libmpi_f90 despite
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ls /usr/lib64/openmpi/1.2.4-gcc/libmpi_f90*
</span><br>
<span class="quotelev1">&gt; /usr/lib64/openmpi/1.2.4-gcc/libmpi_f90.la
</span><br>
<span class="quotelev1">&gt; /usr/lib64/openmpi/1.2.4-gcc/libmpi_f90.so
</span><br>
<span class="quotelev1">&gt; /usr/lib64/openmpi/1.2.4-gcc/libmpi_f90.so.0
</span><br>
<span class="quotelev1">&gt; /usr/lib64/openmpi/1.2.4-gcc/libmpi_f90.so.0.0.0
</span><br>
<p>It doesn't see libmpi_f90.so because you specifically asked for the  
<br>
static library via the --static command line flag (i.e., it's  
<br>
specifically looking for libmpi_f90.a).
<br>
<p>Additionally, you might want to look into -CB and -traceback are  
<br>
supposed to be doing.  gfortran clearly doesn't know what they are --  
<br>
it's issuing warnings about these parameters.
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Here is information about MPI setup
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpif90 --showme
</span><br>
<span class="quotelev1">&gt; gfortran -I/usr/include/openmpi/1.2.4-gcc/64 -I/usr/include/openmpi/ 
</span><br>
<span class="quotelev1">&gt; 1.2.4-gcc -m64 -pthread -I/usr/lib64/openmpi/1.2.4-gcc -L/usr/lib64/ 
</span><br>
<span class="quotelev1">&gt; openmpi/1.2.4-gcc -lmpi_f90 -lmpi_f77 -lmpi -lopen-rte -lopen-pal - 
</span><br>
<span class="quotelev1">&gt; ldl -Wl,--export-dynamic -lnsl -lutil -lm -ldl
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ompi_info --all &gt;ompi_info.txt
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ompi_info.zip is attached to this message
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; echo $PATH
</span><br>
<span class="quotelev1">&gt; /usr/kerberos/sbin:/usr/kerberos/bin:/usr/lib64/ccache:/usr/bin:/bin
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; echo $LD_LIBRARY_PATH
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; # contains nothing
</span><br>
<p>Thanks!  This all looks normal.  I think the root of your issue is  
<br>
that you are specifically asking for static libraries where there are  
<br>
none.  I don't know if those yum packages provide static libraries or  
<br>
not; you'll need to ask their maintainer(s).  If not, you can compile  
<br>
RPMs with static libraries via the instructions I sent before, but be  
<br>
sure to read the FAQ items about creating static libraries -- there  
<br>
are some pitfalls and complications to deal with, especially if you  
<br>
are using high-speed interconnects.
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
<li><strong>Next message:</strong> <a href="7282.php">Ray Muno: "[OMPI users] Trouble with OpenMPI and Intel 10.1 compilers"</a>
<li><strong>Previous message:</strong> <a href="7280.php">Oleg V. Zhylin: "Re: [OMPI users] Can I build development RPM from openmpi-1.2.8-1.src.rpm?"</a>
<li><strong>In reply to:</strong> <a href="7280.php">Oleg V. Zhylin: "Re: [OMPI users] Can I build development RPM from openmpi-1.2.8-1.src.rpm?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7275.php">Sofia Aparicio Secanellas: "[OMPI users] Problems using mpi with cmake"</a>
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

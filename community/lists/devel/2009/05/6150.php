<?
$subject_val = "Re: [OMPI devel] [Fwd: LAM: undefined reference to `mpi_bcast__']";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May 28 14:00:54 2009" -->
<!-- isoreceived="20090528180054" -->
<!-- sent="Thu, 28 May 2009 11:00:47 -0700" -->
<!-- isosent="20090528180047" -->
<!-- name="Paul H. Hargrove" -->
<!-- email="PHHargrove_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [Fwd: LAM: undefined reference to `mpi_bcast__']" -->
<!-- id="4A1ED14F.8020602_at_lbl.gov" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4A1ED08C.8010603_at_sun.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [Fwd: LAM: undefined reference to `mpi_bcast__']<br>
<strong>From:</strong> Paul H. Hargrove (<em>PHHargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-05-28 14:00:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2009/06/6151.php">Ralph Castain: "[OMPI devel] Trunk is broken"</a>
<li><strong>Previous message:</strong> <a href="6149.php">Eugene Loh: "[OMPI devel] [Fwd: LAM: undefined reference to `mpi_bcast__']"</a>
<li><strong>In reply to:</strong> <a href="6149.php">Eugene Loh: "[OMPI devel] [Fwd: LAM: undefined reference to `mpi_bcast__']"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I think the user meant that PelicanHPC lacked clear OMPI-specifc 
<br>
documentation.
<br>
-Paul
<br>
<p>Eugene Loh wrote:
<br>
<span class="quotelev1">&gt; I guess a bunch of you already saw this on the lam mail alias.  The 
</span><br>
<span class="quotelev1">&gt; part that caught my eye was a user choosing LAM over OMPI due to lack 
</span><br>
<span class="quotelev1">&gt; of &quot;clear documentation&quot; for OMPI.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -------- Original Message --------
</span><br>
<span class="quotelev1">&gt; Subject: 	LAM: undefined reference to `mpi_bcast__'
</span><br>
<span class="quotelev1">&gt; Date: 	Thu, 28 May 2009 08:32:46 -0700 (PDT)
</span><br>
<span class="quotelev1">&gt; From: 	Silviu Groza &lt;silviugroza_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Reply-To: 	General LAM/MPI mailing list &lt;lam_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; To: 	lam_at_[hidden]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am trying to install a qauntum chemistry program (Dalton) with LAM-MPI under PelicanHPC. PelicanHPC has both LAM-MPI as well as OpenMPI. I have chosen LAM-MPI due to lack of clear documentation of OpenMPI, and because LAM-MPI environment is the default on PelicanHPC.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So, I have the following outputs:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; user_at_pelican:~$ mpif77 -c foo.c
</span><br>
<span class="quotelev1">&gt; user_at_pelican:~$ mpif77 -show
</span><br>
<span class="quotelev1">&gt; gfortran -I/usr/lib/lam/include -pthread -L/usr/lib/lam/lib -llammpio
</span><br>
<span class="quotelev1">&gt;  -llamf77mpi -lmpi -llam -lutil -ldl
</span><br>
<span class="quotelev1">&gt; user_at_pelican:~$ mpicc -show
</span><br>
<span class="quotelev1">&gt; gcc -I/usr/lib/lam/include -pthread -L/usr/lib/lam/lib -llammpio -llamf77mpi 
</span><br>
<span class="quotelev1">&gt; -lmpi -llam -lutil -ldl
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Therefore, my Makefile.config is:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ARCH        = linux 
</span><br>
<span class="quotelev1">&gt; # 
</span><br>
<span class="quotelev1">&gt; # 
</span><br>
<span class="quotelev1">&gt; CPPFLAGS      = -DVAR_G77 -DSYS_LINUX -DVAR_MFDS -D'INSTALL_WRKMEM=100000000' -D'INSTALL_BASDIR=&quot;/mnt/sda8/home/dan/Daltonsubpelican/dalton-2.0/basis/&quot;' -DVAR_MPI -DIMPLICIT_NONE 
</span><br>
<span class="quotelev1">&gt; F77           = mpif77 
</span><br>
<span class="quotelev1">&gt; CC            = mpicc 
</span><br>
<span class="quotelev1">&gt; RM            = rm -f 
</span><br>
<span class="quotelev1">&gt; FFLAGS        = -march=x86-64 -O3 -ffast-math -fexpensive-optimizations -funroll-loops -fno-range-check -fsecond-underscore 
</span><br>
<span class="quotelev1">&gt; SAFEFFLAGS    = -march=x86-64 -O3 -ffast-math -fexpensive-optimizations -funroll-loops -fno-range-check -fsecond-underscore 
</span><br>
<span class="quotelev1">&gt; CFLAGS        = -march=x86-64 -O3 -ffast-math -fexpensive-optimizations -funroll-loops -std=c99 -DRESTRICT=restrict 
</span><br>
<span class="quotelev1">&gt; INCLUDES      = -I../include 
</span><br>
<span class="quotelev1">&gt; LIBS          = -L/usr/lib -llapack -lblas 
</span><br>
<span class="quotelev1">&gt; INSTALLDIR    = /mnt/sda8/home/dalton-2.0/bin 
</span><br>
<span class="quotelev1">&gt; PDPACK_EXTRAS = linpack.o eispack.o 
</span><br>
<span class="quotelev1">&gt; GP_EXTRAS     = 
</span><br>
<span class="quotelev1">&gt; AR            = ar 
</span><br>
<span class="quotelev1">&gt; ARFLAGS       = rvs 
</span><br>
<span class="quotelev1">&gt; # flags for ftnchek on Dalton /hjaaj 
</span><br>
<span class="quotelev1">&gt; CHEKFLAGS  = -nopure -nopretty -nocommon -nousage -noarray -notruncation -quiet  -noargumants -arguments=number  -usage=var-unitialized 
</span><br>
<span class="quotelev1">&gt; # -usage=var-unitialized:arg-const-modified:arg-alias 
</span><br>
<span class="quotelev1">&gt; # -usage=var-unitialized:var-set-unused:arg-unused:arg-const-modified:arg-alias 
</span><br>
<span class="quotelev1">&gt; # 
</span><br>
<span class="quotelev1">&gt; default : linuxparallel.x 
</span><br>
<span class="quotelev1">&gt; # 
</span><br>
<span class="quotelev1">&gt; # Parallel initialization 
</span><br>
<span class="quotelev1">&gt; # 
</span><br>
<span class="quotelev1">&gt; MPI_INCLUDE_DIR = -I/usr/lib/lam/include 
</span><br>
<span class="quotelev1">&gt; MPI_LIB_PATH    = -L/usr/lib/lam/lib 
</span><br>
<span class="quotelev1">&gt; MPI_LIB         = -lmpi 
</span><br>
<span class="quotelev1">&gt; # 
</span><br>
<span class="quotelev1">&gt; # 
</span><br>
<span class="quotelev1">&gt; # Suffix rules 
</span><br>
<span class="quotelev1">&gt; # hjaaj Oct 04: .g is a &quot;cheat&quot; suffix, for debugging. 
</span><br>
<span class="quotelev1">&gt; #               'make x.g' will create x.o from x.F or x.c with -g debug flag set. 
</span><br>
<span class="quotelev1">&gt; # 
</span><br>
<span class="quotelev1">&gt; .SUFFIXES : .F .o .c .i .g 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; .F.o: 
</span><br>
<span class="quotelev1">&gt;         $(F77) $(INCLUDES) $(CPPFLAGS) $(FFLAGS) -c $*.F 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; .F.g: 
</span><br>
<span class="quotelev1">&gt;         $(F77) $(INCLUDES) $(CPPFLAGS) $(FFLAGS) -g -c $*.F 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; .c.o: 
</span><br>
<span class="quotelev1">&gt;         $(CC) $(INCLUDES) $(CPPFLAGS) $(CFLAGS) -c $*.c 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; .c.g: 
</span><br>
<span class="quotelev1">&gt;         $(CC) $(INCLUDES) $(CPPFLAGS) $(CFLAGS) -g -c $*.c 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; .F.i: 
</span><br>
<span class="quotelev1">&gt;         $(F77) $(INCLUDES) $(CPPFLAGS) -E $*.F &gt; $*.i 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; and the errors are: 
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
<span class="quotelev1">&gt; ---------------&gt; Linking parallel dalpar.x ... 
</span><br>
<span class="quotelev1">&gt; mpif77 -march=x86-64 -O3 -ffast-math -fexpensive-optimizations -funroll-loops -fno-range-check -fsecond-underscore \ 
</span><br>
<span class="quotelev1">&gt;         -o /mnt/sda8/home/dalton-2.0/bin/dalpar.x abacus/dalton.o cc/crayio.o abacus/linux_mem_allo.o \ 
</span><br>
<span class="quotelev1">&gt;         abacus/herpar.o eri/eri2par.o amfi/amfi.o amfi/symtra.o -Labacus -labacus -Lrsp -lrsp -Lsirius -lsirius -labacus -Leri -leri -Ldensfit -ldensfit -Lcc  -lcc -Ldft -ldft -Lgp -lgp -Lpdpack -lpdpack -L/usr/lib -llapack -lblas  \ 
</span><br>
<span class="quotelev1">&gt;         -L/usr/lib/lam/lib -lmpi 
</span><br>
<span class="quotelev1">&gt; abacus/dalton.o: In function `getmmbas_': 
</span><br>
<span class="quotelev1">&gt; dalton.F:(.text+0x379): undefined reference to `mpi_bcast__' 
</span><br>
<span class="quotelev1">&gt; abacus/dalton.o: In function `MAIN__': 
</span><br>
<span class="quotelev1">&gt; dalton.F:(.text+0x739): undefined reference to `mpi_bcast__' 
</span><br>
<span class="quotelev1">&gt; abacus/libabacus.a(dalgnr.o): In function `parion_': 
</span><br>
<span class="quotelev1">&gt; dalgnr.F:(.text+0x223): undefined reference to `mpi_bcast__' 
</span><br>
<span class="quotelev1">&gt; dalgnr.F:(.text+0x3ea): undefined reference to `mpi_bcast__' 
</span><br>
<span class="quotelev1">&gt; dalgnr.F:(.text+0x438): undefined reference to `mpi_bcast__' 
</span><br>
<span class="quotelev1">&gt; abacus/libabacus.a(dalgnr.o):dalgnr.F:(.text+0x686): more undefined references to `mpi_bcast__' follow 
</span><br>
<span class="quotelev1">&gt; dft/libdft.a(dft_ksm.o): In function `ksmcollect_': 
</span><br>
<span class="quotelev1">&gt; dft_ksm.F:(.text+0x8c): undefined reference to `mpi_reduce__' 
</span><br>
<span class="quotelev1">&gt; dft_ksm.F:(.text+0xd7): undefined reference to `mpi_reduce__' 
</span><br>
<span class="quotelev1">&gt; dft/libdft.a(dft_ksm.o): In function `ksmsync_': 
</span><br>
<span class="quotelev1">&gt; dft_ksm.F:(.text+0x12c): undefined reference to `mpi_bcast__' 
</span><br>
<span class="quotelev1">&gt; dft/libdft.a(dft_ksm.o): In function `kick_ksm_slaves_alive__': 
</span><br>
<span class="quotelev1">&gt; dft_ksm.F:(.text+0x27d): undefined reference to `mpi_bcast__' 
</span><br>
<span class="quotelev1">&gt; dft_ksm.F:(.text+0x29f): undefined reference to `mpi_bcast__' 
</span><br>
<span class="quotelev1">&gt; dft/libdft.a(dft_mag.o): In function `dft_suscep_collect__': 
</span><br>
<span class="quotelev1">&gt; dft_mag.F:(.text+0x21b0): undefined reference to `mpi_reduce__' 
</span><br>
<span class="quotelev1">&gt; dft/libdft.a(dft_mag.o): In function `kick_slaves_suscep__': 
</span><br>
<span class="quotelev1">&gt; dft_mag.F:(.text+0x231d): undefined reference to `mpi_bcast__' 
</span><br>
<span class="quotelev1">&gt; dft_mag.F:(.text+0x233f): undefined reference to `mpi_bcast__' 
</span><br>
<span class="quotelev1">&gt; dft/libdft.a(dft_mag.o): In function `dft_brhs_collect__': 
</span><br>
<span class="quotelev1">&gt; dft_mag.F:(.text+0x23e0): undefined reference to `mpi_reduce__' 
</span><br>
<span class="quotelev1">&gt; dft/libdft.a(dft_mag.o): In function `dft_brhs_slave__': 
</span><br>
<span class="quotelev1">&gt; dft_mag.F:(.text+0x2480): undefined reference to `mpi_bcast__' 
</span><br>
<span class="quotelev1">&gt; dft_mag.F:(.text+0x24a2): undefined reference to `mpi_bcast__' 
</span><br>
<span class="quotelev1">&gt; dft/libdft.a(dft_mag.o): In function `kick_slaves_brhs__': 
</span><br>
<span class="quotelev1">&gt; dft_mag.F:(.text+0x25e5): undefined reference to `mpi_bcast__' 
</span><br>
<span class="quotelev1">&gt; dft_mag.F:(.text+0x2607): undefined reference to `mpi_bcast__' 
</span><br>
<span class="quotelev1">&gt; dft_mag.F:(.text+0x2629): undefined reference to `mpi_bcast__' 
</span><br>
<span class="quotelev1">&gt; dft/libdft.a(dft_mag.o):dft_mag.F:(.text+0x264b): more undefined references to `mpi_bcast__' follow 
</span><br>
<span class="quotelev1">&gt; dft/libdft.a(dft_grad.o): In function `gradslave_collect__': 
</span><br>
<span class="quotelev1">&gt; dft_grad.F:(.text+0x11f0): undefined reference to `mpi_reduce__' 
</span><br>
<span class="quotelev1">&gt; dft/libdft.a(dft_grad.o): In function `kick_slaves_grad__': 
</span><br>
<span class="quotelev1">&gt; dft_grad.F:(.text+0x135d): undefined reference to `mpi_bcast__' 
</span><br>
<span class="quotelev1">&gt; dft_grad.F:(.text+0x137f): undefined reference to `mpi_bcast__' 
</span><br>
<span class="quotelev1">&gt; dft/libdft.a(dft_hes.o): In function `dft_hed_collect__': 
</span><br>
<span class="quotelev1">&gt; dft_hes.F:(.text+0x7ef): undefined reference to `mpi_reduce__' 
</span><br>
<span class="quotelev1">&gt; dft_hes.F:(.text+0x848): undefined reference to `mpi_reduce__' 
</span><br>
<span class="quotelev1">&gt; dft/libdft.a(dft_hes.o): In function `dfthed_slave__': 
</span><br>
<span class="quotelev1">&gt; dft_hes.F:(.text+0x924): undefined reference to `mpi_bcast__' 
</span><br>
<span class="quotelev1">&gt; dft_hes.F:(.text+0x967): undefined reference to `mpi_bcast__' 
</span><br>
<span class="quotelev1">&gt; dft/libdft.a(dft_hes.o): In function `kick_slaves_hed__': 
</span><br>
<span class="quotelev1">&gt; dft_hes.F:(.text+0xad5): undefined reference to `mpi_bcast__' 
</span><br>
<span class="quotelev1">&gt; dft_hes.F:(.text+0xaf7): undefined reference to `mpi_bcast__' 
</span><br>
<span class="quotelev1">&gt; dft_hes.F:(.text+0xb19): undefined reference to `mpi_bcast__' 
</span><br>
<span class="quotelev1">&gt; dft/libdft.a(dft_hes.o):dft_hes.F:(.text+0xb59): more undefined references to `mpi_bcast__' follow 
</span><br>
<span class="quotelev1">&gt; dft/libdft.a(dft_hes.o): In function `dft_hesstat_collect__': 
</span><br>
<span class="quotelev1">&gt; dft_hes.F:(.text+0xbd0): undefined reference to `mpi_reduce__' 
</span><br>
<span class="quotelev1">&gt; dft/libdft.a(dft_hes.o): In function `dft_hesstat_slave__': 
</span><br>
<span class="quotelev1">&gt; dft_hes.F:(.text+0xcb8): undefined reference to `mpi_bcast__' 
</span><br>
<span class="quotelev1">&gt; dft_hes.F:(.text+0xcf9): undefined reference to `mpi_bcast__' 
</span><br>
<span class="quotelev1">&gt; dft_hes.F:(.text+0xd43): undefined reference to `mpi_bcast__' 
</span><br>
<span class="quotelev1">&gt; dft_hes.F:(.text+0xd77): undefined reference to `mpi_bcast__' 
</span><br>
<span class="quotelev1">&gt; dft/libdft.a(dft_hes.o): In function `kick_slaves_hesstat__': 
</span><br>
<span class="quotelev1">&gt; dft_hes.F:(.text+0xee2): undefined reference to `mpi_bcast__' 
</span><br>
<span class="quotelev1">&gt; dft/libdft.a(dft_hes.o):dft_hes.F:(.text+0xf06): more undefined references to `mpi_bcast__' follow 
</span><br>
<span class="quotelev1">&gt; dft/libdft.a(dft_int.o): In function `dftintcollect_': 
</span><br>
<span class="quotelev1">&gt; dft_int.F:(.text+0x42): undefined reference to `mpi_reduce__' 
</span><br>
<span class="quotelev1">&gt; dft/libdft.a(dft_int.o): In function `dftintbcast_': 
</span><br>
<span class="quotelev1">&gt; dft_int.F:(.text+0x78): undefined reference to `mpi_bcast__' 
</span><br>
<span class="quotelev1">&gt; dft_int.F:(.text+0x9a): undefined reference to `mpi_bcast__' 
</span><br>
<span class="quotelev1">&gt; dft_int.F:(.text+0xbc): undefined reference to `mpi_bcast__' 
</span><br>
<span class="quotelev1">&gt; dft_int.F:(.text+0xde): undefined reference to `mpi_bcast__' 
</span><br>
<span class="quotelev1">&gt; dft_int.F:(.text+0x100): undefined reference to `mpi_bcast__' 
</span><br>
<span class="quotelev1">&gt; dft/libdft.a(dft_int.o):dft_int.F:(.text+0x122): more undefined references to `mpi_bcast__' follow 
</span><br>
<span class="quotelev1">&gt; gp/libgp.a(gptrygve.o): In function `quit_': 
</span><br>
<span class="quotelev1">&gt; gptrygve.F:(.text+0x581b): undefined reference to `mpi_abort__' 
</span><br>
<span class="quotelev1">&gt; gp/libgp.a(mpimacro.o): In function `mpi_myfail__': 
</span><br>
<span class="quotelev1">&gt; mpimacro.F:(.text+0x21): undefined reference to `mpi_error_class__' 
</span><br>
<span class="quotelev1">&gt; gp/libgp.a(mpimacro.o): In function `mpixsend_': 
</span><br>
<span class="quotelev1">&gt; mpimacro.F:(.text+0xb57): undefined reference to `mpi_send__' 
</span><br>
<span class="quotelev1">&gt; gp/libgp.a(mpimacro.o): In function `mpixrecv_': 
</span><br>
<span class="quotelev1">&gt; mpimacro.F:(.text+0xe8f): undefined reference to `mpi_recv__' 
</span><br>
<span class="quotelev1">&gt; mpimacro.F:(.text+0xf49): undefined reference to `mpi_recv__' 
</span><br>
<span class="quotelev1">&gt; gp/libgp.a(mpimacro.o): In function `mpixbcast_': 
</span><br>
<span class="quotelev1">&gt; mpimacro.F:(.text+0x10d7): undefined reference to `mpi_bcast__' 
</span><br>
<span class="quotelev1">&gt; gp/libgp.a(mpimacro.o): In function `mpixfinalize_': 
</span><br>
<span class="quotelev1">&gt; mpimacro.F:(.text+0x1260): undefined reference to `mpi_finalize__' 
</span><br>
<span class="quotelev1">&gt; gp/libgp.a(mpimacro.o): In function `mpixinit_': 
</span><br>
<span class="quotelev1">&gt; mpimacro.F:(.text+0x1296): undefined reference to `mpi_init__' 
</span><br>
<span class="quotelev1">&gt; mpimacro.F:(.text+0x12bf): undefined reference to `mpi_comm_rank__' 
</span><br>
<span class="quotelev1">&gt; mpimacro.F:(.text+0x12e8): undefined reference to `mpi_comm_size__' 
</span><br>
<span class="quotelev1">&gt; collect2: ld returned 1 exit status 
</span><br>
<span class="quotelev1">&gt; mpif77: No such file or directory 
</span><br>
<span class="quotelev1">&gt; make: *** [linuxparallel.x] Error 1 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; As you can see, I also get the error &quot;mpif77: No such file or directory&quot;.
</span><br>
<span class="quotelev1">&gt; Please look at the MPI_INCLUDE_DIR ,MPI_LIB_PATH  and MPI_LIB in Makefile.config, because I susspect that the paths are wrong.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; Silviu
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;       
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; This list is archived at <a href="http://www.lam-mpi.org/MailArchives/lam/">http://www.lam-mpi.org/MailArchives/lam/</a>
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev1">&gt; ------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p><p><pre>
-- 
Paul H. Hargrove                          PHHargrove_at_[hidden]
Future Technologies Group
HPC Research Department                   Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2009/06/6151.php">Ralph Castain: "[OMPI devel] Trunk is broken"</a>
<li><strong>Previous message:</strong> <a href="6149.php">Eugene Loh: "[OMPI devel] [Fwd: LAM: undefined reference to `mpi_bcast__']"</a>
<li><strong>In reply to:</strong> <a href="6149.php">Eugene Loh: "[OMPI devel] [Fwd: LAM: undefined reference to `mpi_bcast__']"</a>
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

<?
$subject_val = "[OMPI devel] [Fwd: LAM: undefined reference to `mpi_bcast__']";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May 28 13:57:36 2009" -->
<!-- isoreceived="20090528175736" -->
<!-- sent="Thu, 28 May 2009 10:57:32 -0700" -->
<!-- isosent="20090528175732" -->
<!-- name="Eugene Loh" -->
<!-- email="Eugene.Loh_at_[hidden]" -->
<!-- subject="[OMPI devel] [Fwd: LAM: undefined reference to `mpi_bcast__']" -->
<!-- id="4A1ED08C.8010603_at_sun.com" -->
<!-- charset="US-ASCII" -->
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
<strong>Subject:</strong> [OMPI devel] [Fwd: LAM: undefined reference to `mpi_bcast__']<br>
<strong>From:</strong> Eugene Loh (<em>Eugene.Loh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-05-28 13:57:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6150.php">Paul H. Hargrove: "Re: [OMPI devel] [Fwd: LAM: undefined reference to `mpi_bcast__']"</a>
<li><strong>Previous message:</strong> <a href="6148.php">Jeff Squyres: "Re: [OMPI devel] problem in the ORTE notifier framework"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6150.php">Paul H. Hargrove: "Re: [OMPI devel] [Fwd: LAM: undefined reference to `mpi_bcast__']"</a>
<li><strong>Reply:</strong> <a href="6150.php">Paul H. Hargrove: "Re: [OMPI devel] [Fwd: LAM: undefined reference to `mpi_bcast__']"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">

<head>
  <meta content="text/html;charset=ISO-8859-1" http-equiv="Content-Type">
  <title></title>
</head>
<body bgcolor="#ffffff" text="#000000">
I guess a bunch of you already saw this on the lam mail alias.&nbsp; The
part that caught my eye was a user choosing LAM over OMPI due to lack
of "clear documentation" for OMPI.<br>
<br>
-------- Original Message --------
<table border="0" cellpadding="0" cellspacing="0">
  <tbody>
    <tr>
      <th align="right" nowrap="nowrap" valign="baseline">Subject: </th>
      <td>LAM: undefined reference to `mpi_bcast__'</td>
    </tr>
    <tr>
      <th align="right" nowrap="nowrap" valign="baseline">Date: </th>
      <td>Thu, 28 May 2009 08:32:46 -0700 (PDT)</td>
    </tr>
    <tr>
      <th align="right" nowrap="nowrap" valign="baseline">From: </th>
      <td>Silviu Groza <a class="moz-txt-link-rfc2396E" href="mailto:silviugroza@yahoo.com">&lt;silviugroza@yahoo.com&gt;</a></td>
    </tr>
    <tr>
      <th align="right" nowrap="nowrap" valign="baseline">Reply-To: </th>
      <td>General LAM/MPI mailing list <a class="moz-txt-link-rfc2396E" href="mailto:lam@lam-mpi.org">&lt;lam@lam-mpi.org&gt;</a></td>
    </tr>
    <tr>
      <th align="right" nowrap="nowrap" valign="baseline">To: </th>
      <td><a class="moz-txt-link-abbreviated" href="mailto:lam@lam-mpi.org">lam@lam-mpi.org</a></td>
    </tr>
  </tbody>
</table>
<br>
<br>
<pre>Hello,

I am trying to install a qauntum chemistry program (Dalton) with LAM-MPI under PelicanHPC. PelicanHPC has both LAM-MPI as well as OpenMPI. I have chosen LAM-MPI due to lack of clear documentation of OpenMPI, and because LAM-MPI environment is the default on PelicanHPC.

So, I have the following outputs:

user@pelican:~$ mpif77 -c foo.c
user@pelican:~$ mpif77 -show
gfortran -I/usr/lib/lam/include -pthread -L/usr/lib/lam/lib -llammpio
 -llamf77mpi -lmpi -llam -lutil -ldl
user@pelican:~$ mpicc -show
gcc -I/usr/lib/lam/include -pthread -L/usr/lib/lam/lib -llammpio -llamf77mpi 
-lmpi -llam -lutil -ldl


Therefore, my Makefile.config is:

ARCH        = linux 
# 
# 
CPPFLAGS      = -DVAR_G77 -DSYS_LINUX -DVAR_MFDS -D'INSTALL_WRKMEM=100000000' -D'INSTALL_BASDIR="/mnt/sda8/home/dan/Daltonsubpelican/dalton-2.0/basis/"' -DVAR_MPI -DIMPLICIT_NONE 
F77           = mpif77 
CC            = mpicc 
RM            = rm -f 
FFLAGS        = -march=x86-64 -O3 -ffast-math -fexpensive-optimizations -funroll-loops -fno-range-check -fsecond-underscore 
SAFEFFLAGS    = -march=x86-64 -O3 -ffast-math -fexpensive-optimizations -funroll-loops -fno-range-check -fsecond-underscore 
CFLAGS        = -march=x86-64 -O3 -ffast-math -fexpensive-optimizations -funroll-loops -std=c99 -DRESTRICT=restrict 
INCLUDES      = -I../include 
LIBS          = -L/usr/lib -llapack -lblas 
INSTALLDIR    = /mnt/sda8/home/dalton-2.0/bin 
PDPACK_EXTRAS = linpack.o eispack.o 
GP_EXTRAS     = 
AR            = ar 
ARFLAGS       = rvs 
# flags for ftnchek on Dalton /hjaaj 
CHEKFLAGS  = -nopure -nopretty -nocommon -nousage -noarray -notruncation -quiet  -noargumants -arguments=number  -usage=var-unitialized 
# -usage=var-unitialized:arg-const-modified:arg-alias 
# -usage=var-unitialized:var-set-unused:arg-unused:arg-const-modified:arg-alias 
# 
default : linuxparallel.x 
# 
# Parallel initialization 
# 
MPI_INCLUDE_DIR = -I/usr/lib/lam/include 
MPI_LIB_PATH    = -L/usr/lib/lam/lib 
MPI_LIB         = -lmpi 
# 
# 
# Suffix rules 
# hjaaj Oct 04: .g is a "cheat" suffix, for debugging. 
#               'make x.g' will create x.o from x.F or x.c with -g debug flag set. 
# 
.SUFFIXES : .F .o .c .i .g 

.F.o: 
        $(F77) $(INCLUDES) $(CPPFLAGS) $(FFLAGS) -c $*.F 

.F.g: 
        $(F77) $(INCLUDES) $(CPPFLAGS) $(FFLAGS) -g -c $*.F 

.c.o: 
        $(CC) $(INCLUDES) $(CPPFLAGS) $(CFLAGS) -c $*.c 

.c.g: 
        $(CC) $(INCLUDES) $(CPPFLAGS) $(CFLAGS) -g -c $*.c 

.F.i: 
        $(F77) $(INCLUDES) $(CPPFLAGS) -E $*.F &gt; $*.i 




and the errors are: 





---------------&gt; Linking parallel dalpar.x ... 
mpif77 -march=x86-64 -O3 -ffast-math -fexpensive-optimizations -funroll-loops -fno-range-check -fsecond-underscore \ 
        -o /mnt/sda8/home/dalton-2.0/bin/dalpar.x abacus/dalton.o cc/crayio.o abacus/linux_mem_allo.o \ 
        abacus/herpar.o eri/eri2par.o amfi/amfi.o amfi/symtra.o -Labacus -labacus -Lrsp -lrsp -Lsirius -lsirius -labacus -Leri -leri -Ldensfit -ldensfit -Lcc  -lcc -Ldft -ldft -Lgp -lgp -Lpdpack -lpdpack -L/usr/lib -llapack -lblas  \ 
        -L/usr/lib/lam/lib -lmpi 
abacus/dalton.o: In function `getmmbas_': 
dalton.F:(.text+0x379): undefined reference to `mpi_bcast__' 
abacus/dalton.o: In function `MAIN__': 
dalton.F:(.text+0x739): undefined reference to `mpi_bcast__' 
abacus/libabacus.a(dalgnr.o): In function `parion_': 
dalgnr.F:(.text+0x223): undefined reference to `mpi_bcast__' 
dalgnr.F:(.text+0x3ea): undefined reference to `mpi_bcast__' 
dalgnr.F:(.text+0x438): undefined reference to `mpi_bcast__' 
abacus/libabacus.a(dalgnr.o):dalgnr.F:(.text+0x686): more undefined references to `mpi_bcast__' follow 
dft/libdft.a(dft_ksm.o): In function `ksmcollect_': 
dft_ksm.F:(.text+0x8c): undefined reference to `mpi_reduce__' 
dft_ksm.F:(.text+0xd7): undefined reference to `mpi_reduce__' 
dft/libdft.a(dft_ksm.o): In function `ksmsync_': 
dft_ksm.F:(.text+0x12c): undefined reference to `mpi_bcast__' 
dft/libdft.a(dft_ksm.o): In function `kick_ksm_slaves_alive__': 
dft_ksm.F:(.text+0x27d): undefined reference to `mpi_bcast__' 
dft_ksm.F:(.text+0x29f): undefined reference to `mpi_bcast__' 
dft/libdft.a(dft_mag.o): In function `dft_suscep_collect__': 
dft_mag.F:(.text+0x21b0): undefined reference to `mpi_reduce__' 
dft/libdft.a(dft_mag.o): In function `kick_slaves_suscep__': 
dft_mag.F:(.text+0x231d): undefined reference to `mpi_bcast__' 
dft_mag.F:(.text+0x233f): undefined reference to `mpi_bcast__' 
dft/libdft.a(dft_mag.o): In function `dft_brhs_collect__': 
dft_mag.F:(.text+0x23e0): undefined reference to `mpi_reduce__' 
dft/libdft.a(dft_mag.o): In function `dft_brhs_slave__': 
dft_mag.F:(.text+0x2480): undefined reference to `mpi_bcast__' 
dft_mag.F:(.text+0x24a2): undefined reference to `mpi_bcast__' 
dft/libdft.a(dft_mag.o): In function `kick_slaves_brhs__': 
dft_mag.F:(.text+0x25e5): undefined reference to `mpi_bcast__' 
dft_mag.F:(.text+0x2607): undefined reference to `mpi_bcast__' 
dft_mag.F:(.text+0x2629): undefined reference to `mpi_bcast__' 
dft/libdft.a(dft_mag.o):dft_mag.F:(.text+0x264b): more undefined references to `mpi_bcast__' follow 
dft/libdft.a(dft_grad.o): In function `gradslave_collect__': 
dft_grad.F:(.text+0x11f0): undefined reference to `mpi_reduce__' 
dft/libdft.a(dft_grad.o): In function `kick_slaves_grad__': 
dft_grad.F:(.text+0x135d): undefined reference to `mpi_bcast__' 
dft_grad.F:(.text+0x137f): undefined reference to `mpi_bcast__' 
dft/libdft.a(dft_hes.o): In function `dft_hed_collect__': 
dft_hes.F:(.text+0x7ef): undefined reference to `mpi_reduce__' 
dft_hes.F:(.text+0x848): undefined reference to `mpi_reduce__' 
dft/libdft.a(dft_hes.o): In function `dfthed_slave__': 
dft_hes.F:(.text+0x924): undefined reference to `mpi_bcast__' 
dft_hes.F:(.text+0x967): undefined reference to `mpi_bcast__' 
dft/libdft.a(dft_hes.o): In function `kick_slaves_hed__': 
dft_hes.F:(.text+0xad5): undefined reference to `mpi_bcast__' 
dft_hes.F:(.text+0xaf7): undefined reference to `mpi_bcast__' 
dft_hes.F:(.text+0xb19): undefined reference to `mpi_bcast__' 
dft/libdft.a(dft_hes.o):dft_hes.F:(.text+0xb59): more undefined references to `mpi_bcast__' follow 
dft/libdft.a(dft_hes.o): In function `dft_hesstat_collect__': 
dft_hes.F:(.text+0xbd0): undefined reference to `mpi_reduce__' 
dft/libdft.a(dft_hes.o): In function `dft_hesstat_slave__': 
dft_hes.F:(.text+0xcb8): undefined reference to `mpi_bcast__' 
dft_hes.F:(.text+0xcf9): undefined reference to `mpi_bcast__' 
dft_hes.F:(.text+0xd43): undefined reference to `mpi_bcast__' 
dft_hes.F:(.text+0xd77): undefined reference to `mpi_bcast__' 
dft/libdft.a(dft_hes.o): In function `kick_slaves_hesstat__': 
dft_hes.F:(.text+0xee2): undefined reference to `mpi_bcast__' 
dft/libdft.a(dft_hes.o):dft_hes.F:(.text+0xf06): more undefined references to `mpi_bcast__' follow 
dft/libdft.a(dft_int.o): In function `dftintcollect_': 
dft_int.F:(.text+0x42): undefined reference to `mpi_reduce__' 
dft/libdft.a(dft_int.o): In function `dftintbcast_': 
dft_int.F:(.text+0x78): undefined reference to `mpi_bcast__' 
dft_int.F:(.text+0x9a): undefined reference to `mpi_bcast__' 
dft_int.F:(.text+0xbc): undefined reference to `mpi_bcast__' 
dft_int.F:(.text+0xde): undefined reference to `mpi_bcast__' 
dft_int.F:(.text+0x100): undefined reference to `mpi_bcast__' 
dft/libdft.a(dft_int.o):dft_int.F:(.text+0x122): more undefined references to `mpi_bcast__' follow 
gp/libgp.a(gptrygve.o): In function `quit_': 
gptrygve.F:(.text+0x581b): undefined reference to `mpi_abort__' 
gp/libgp.a(mpimacro.o): In function `mpi_myfail__': 
mpimacro.F:(.text+0x21): undefined reference to `mpi_error_class__' 
gp/libgp.a(mpimacro.o): In function `mpixsend_': 
mpimacro.F:(.text+0xb57): undefined reference to `mpi_send__' 
gp/libgp.a(mpimacro.o): In function `mpixrecv_': 
mpimacro.F:(.text+0xe8f): undefined reference to `mpi_recv__' 
mpimacro.F:(.text+0xf49): undefined reference to `mpi_recv__' 
gp/libgp.a(mpimacro.o): In function `mpixbcast_': 
mpimacro.F:(.text+0x10d7): undefined reference to `mpi_bcast__' 
gp/libgp.a(mpimacro.o): In function `mpixfinalize_': 
mpimacro.F:(.text+0x1260): undefined reference to `mpi_finalize__' 
gp/libgp.a(mpimacro.o): In function `mpixinit_': 
mpimacro.F:(.text+0x1296): undefined reference to `mpi_init__' 
mpimacro.F:(.text+0x12bf): undefined reference to `mpi_comm_rank__' 
mpimacro.F:(.text+0x12e8): undefined reference to `mpi_comm_size__' 
collect2: ld returned 1 exit status 
mpif77: No such file or directory 
make: *** [linuxparallel.x] Error 1 


As you can see, I also get the error "mpif77: No such file or directory".
Please look at the MPI_INCLUDE_DIR ,MPI_LIB_PATH  and MPI_LIB in Makefile.config, because I susspect that the paths are wrong.

Regards,
Silviu


      
_______________________________________________
This list is archived at <a class="moz-txt-link-freetext" href="http://www.lam-mpi.org/MailArchives/lam/">http://www.lam-mpi.org/MailArchives/lam/</a>
</pre>
</body>

<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6150.php">Paul H. Hargrove: "Re: [OMPI devel] [Fwd: LAM: undefined reference to `mpi_bcast__']"</a>
<li><strong>Previous message:</strong> <a href="6148.php">Jeff Squyres: "Re: [OMPI devel] problem in the ORTE notifier framework"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6150.php">Paul H. Hargrove: "Re: [OMPI devel] [Fwd: LAM: undefined reference to `mpi_bcast__']"</a>
<li><strong>Reply:</strong> <a href="6150.php">Paul H. Hargrove: "Re: [OMPI devel] [Fwd: LAM: undefined reference to `mpi_bcast__']"</a>
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

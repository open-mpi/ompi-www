<?
$subject_val = "Re: [OMPI users] openmpi linking problem";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jun  9 14:39:39 2014" -->
<!-- isoreceived="20140609183939" -->
<!-- sent="Mon, 09 Jun 2014 20:39:28 +0200" -->
<!-- isosent="20140609183928" -->
<!-- name="Marco Atzeri" -->
<!-- email="marco.atzeri_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openmpi linking problem" -->
<!-- id="5395FF60.50308_at_gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CAHaow__UzUC+=EOJfnG5cPGcjmn+QtCLt3fatNTzGDyZYJh_sw_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] openmpi linking problem<br>
<strong>From:</strong> Marco Atzeri (<em>marco.atzeri_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-06-09 14:39:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24607.php">Vineet Rawat: "[OMPI users] orted 1.6.4 and 1.8.1 segv with bonded Cisco P81E"</a>
<li><strong>Previous message:</strong> <a href="24605.php">Tim Prince: "Re: [OMPI users] openmpi linking problem"</a>
<li><strong>In reply to:</strong> <a href="24604.php">Sergii Veremieiev: "[OMPI users] openmpi linking problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24703.php">Sergii Veremieiev: "[OMPI users] Fwd: openmpi linking problem"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 09/06/2014 19:14, Sergii Veremieiev wrote:
<br>
<span class="quotelev1">&gt; Dear Sir/Madam,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm trying to link a C/FORTRAN code on Cygwin with Open MPI 1.7.5 and
</span><br>
<span class="quotelev1">&gt; GCC 4.8.2:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpicxx ./lib/Multigrid.o ./lib/GridFE.o ./lib/Data.o ./lib/GridFD.o
</span><br>
<span class="quotelev1">&gt; ./lib/Parameters.o ./lib/MtInt.o ./lib/MtPol.o ./lib/MtDob.o -o
</span><br>
<span class="quotelev1">&gt; Test_cygwin_openmpi_gcc  -L./external/MUMPS/lib
</span><br>
<span class="quotelev1">&gt; -ldmumps_cygwin_openmpi_gcc -lmumps_common_cygwin_openmpi_gcc
</span><br>
<span class="quotelev1">&gt; -lpord_cygwin_openmpi_gcc -L./external/ParMETIS
</span><br>
<span class="quotelev1">&gt; -lparmetis_cygwin_openmpi_gcc -lmetis_cygwin_openmpi_gcc
</span><br>
<span class="quotelev1">&gt; -L./external/SCALAPACK -lscalapack_cygwin_openmpi_gcc
</span><br>
<span class="quotelev1">&gt; -L./external/BLACS/LIB -lblacs-0_cygwin_openmpi_gcc
</span><br>
<span class="quotelev1">&gt; -lblacsF77init-0_cygwin_openmpi_gcc -lblacsCinit-0_cygwin_openmpi_gcc
</span><br>
<span class="quotelev1">&gt; -lblacs-0_cygwin_openmpi_gcc -L./external/BLAS -lblas_cygwin_openmpi_gcc
</span><br>
<span class="quotelev1">&gt; -lmpi -lgfortran
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The following error messages are returned:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ./external/MUMPS/lib/libdmumps_cygwin_openmpi_gcc.a(dmumps_part3.o): In
</span><br>
<span class="quotelev1">&gt; function `dmumps_127_':
</span><br>
<span class="quotelev1">&gt; /cygdrive/d/Sergey/Research/Codes/Thinfilmsolver/external/MUMPS/src/dmumps_part3.F:6068:
</span><br>
<span class="quotelev1">&gt; undefined reference to `mpi_send_'
</span><br>
<p>the fortran openmpi inteface is in libmpi_mpifh.dll.a
<br>
<p>so try adding &quot;-lmpi_mpifh&quot; before &quot;-lmpi -lgfortran&quot;
<br>
and be sure to have libopenmpifh2-1.7.5-1 installed
<br>
<p><span class="quotelev1">&gt; /cygdrive/d/Sergey/Research/Codes/Thinfilmsolver/external/MUMPS/src/dmumps_part3.F:6068:(.text+0x1d3):
</span><br>
<span class="quotelev1">&gt; relocation truncated to fit: R_X86_64_PC32 against undefined symbol
</span><br>
<span class="quotelev1">&gt; `mpi_send_'
</span><br>
<p>this could be a side effect, but it could also be a complete
<br>
different issue
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Could you please advise me what further libraries should I include on
</span><br>
<span class="quotelev1">&gt; linking? Thank you.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Best regards,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Sergii
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>Regards
<br>
MArco
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24607.php">Vineet Rawat: "[OMPI users] orted 1.6.4 and 1.8.1 segv with bonded Cisco P81E"</a>
<li><strong>Previous message:</strong> <a href="24605.php">Tim Prince: "Re: [OMPI users] openmpi linking problem"</a>
<li><strong>In reply to:</strong> <a href="24604.php">Sergii Veremieiev: "[OMPI users] openmpi linking problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24703.php">Sergii Veremieiev: "[OMPI users] Fwd: openmpi linking problem"</a>
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

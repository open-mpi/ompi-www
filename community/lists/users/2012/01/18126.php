<?
$subject_val = "[OMPI users] OMPI C++ Bindings problems";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan 10 13:50:29 2012" -->
<!-- isoreceived="20120110185029" -->
<!-- sent="Tue, 10 Jan 2012 12:50:25 -0600" -->
<!-- isosent="20120110185025" -->
<!-- name="John Doe" -->
<!-- email="javadevelopercl_at_[hidden]" -->
<!-- subject="[OMPI users] OMPI C++ Bindings problems" -->
<!-- id="CAJ32XeaHneBSkgHw=pA5tXygC2sabYtMcF92s5ZLFHMP1nViWg_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] OMPI C++ Bindings problems<br>
<strong>From:</strong> John Doe (<em>javadevelopercl_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-01-10 13:50:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18127.php">Ralph Castain: "Re: [OMPI users] OMPI C++ Bindings problems"</a>
<li><strong>Previous message:</strong> <a href="18125.php">Anas Al-Trad: "Re: [OMPI users] SIGV at MPI_Cart_sub"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18127.php">Ralph Castain: "Re: [OMPI users] OMPI C++ Bindings problems"</a>
<li><strong>Reply:</strong> <a href="18127.php">Ralph Castain: "Re: [OMPI users] OMPI C++ Bindings problems"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'm trying to compile some code that uses the Chombo mesh package which
<br>
uses Open MPI's C++ but keep getting errors like this:
<br>
<p>AMRLevelX.o: In function `Intracomm':
<br>
/opt/ompi/gnu/1.4.4/include/openmpi/ompi/mpi/cxx/intracomm.h:25:
<br>
undefined reference to `MPI::Comm::Comm()'
<br>
AMRLevelX.o: In function `Intracomm':
<br>
/opt/ompi/gnu/1.4.4/include/openmpi/ompi/mpi/cxx/intracomm_inln.h:23:
<br>
undefined reference to `MPI::Comm::Comm()'
<br>
AMRLevelX.o: In function `MPI::Op::Init(void (*)(void const*, void*,
<br>
int, MPI::Datatype const&amp;), bool)':
<br>
/opt/ompi/gnu/1.4.4/include/openmpi/ompi/mpi/cxx/op_inln.h:122:
<br>
undefined reference to `ompi_mpi_cxx_op_intercept'
<br>
AMRLevelX.o:(.rodata._ZTVN3MPI3WinE[vtable for MPI::Win]+0x48):
<br>
undefined reference to `MPI::Win::Free()'
<br>
AMRLevelX.o:(.rodata._ZTVN3MPI8DatatypeE[vtable for
<br>
MPI::Datatype]+0x78): undefined reference to `MPI::Datatype::Free()'
<br>
collect2: ld returned 1 exit status
<br>
<p><p>which looks like a problem with some ompi c++ symbols. I have the path to
<br>
the library file libmpi_cxx.so in my LD_LIBRARY_PATH and compiled openmpi
<br>
with C++ and shared library support. Am I missing something?
<br>
<p>Thanks
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-18126/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18127.php">Ralph Castain: "Re: [OMPI users] OMPI C++ Bindings problems"</a>
<li><strong>Previous message:</strong> <a href="18125.php">Anas Al-Trad: "Re: [OMPI users] SIGV at MPI_Cart_sub"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18127.php">Ralph Castain: "Re: [OMPI users] OMPI C++ Bindings problems"</a>
<li><strong>Reply:</strong> <a href="18127.php">Ralph Castain: "Re: [OMPI users] OMPI C++ Bindings problems"</a>
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

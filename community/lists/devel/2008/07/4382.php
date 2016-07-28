<?
$subject_val = "[OMPI devel] Help on building openmpi with &quot;-Wl, --as-needed -Wl, --no-undefined&quot;";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Jul 19 23:30:03 2008" -->
<!-- isoreceived="20080720033003" -->
<!-- sent="Sun, 20 Jul 2008 11:29:57 +0800" -->
<!-- isosent="20080720032957" -->
<!-- name="Funda Wang" -->
<!-- email="fundawang_at_[hidden]" -->
<!-- subject="[OMPI devel] Help on building openmpi with &amp;quot;-Wl, --as-needed -Wl, --no-undefined&amp;quot;" -->
<!-- id="e7f875700807192029x320c69c7gb29fd5d7332d50a2_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
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
<strong>Subject:</strong> [OMPI devel] Help on building openmpi with &quot;-Wl, --as-needed -Wl, --no-undefined&quot;<br>
<strong>From:</strong> Funda Wang (<em>fundawang_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-07-19 23:29:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4383.php">Ralf Wildenhues: "Re: [OMPI devel] Help on building openmpi with &quot;-Wl, --as-needed	-Wl, --no-undefined&quot;"</a>
<li><strong>Previous message:</strong> <a href="4381.php">Josh Hursey: "Re: [OMPI devel] RFC: further changing mca_base_component_t before v1.3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4383.php">Ralf Wildenhues: "Re: [OMPI devel] Help on building openmpi with &quot;-Wl, --as-needed	-Wl, --no-undefined&quot;"</a>
<li><strong>Reply:</strong> <a href="4383.php">Ralf Wildenhues: "Re: [OMPI devel] Help on building openmpi with &quot;-Wl, --as-needed	-Wl, --no-undefined&quot;"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>I'm currently building openmpi 1.2.6 under Mandriva cooker, and its
<br>
default LDFLAGS is &quot;-Wl,--as-needed -Wl,--no-undefined&quot;.
<br>
<p>But openmpi 1.2.6 builds failed with:
<br>
libtool: link: g++ -shared -nostdlib
<br>
/usr/lib/gcc/i586-manbo-linux-gnu/4.3.1/../../../crti.o
<br>
/usr/lib/gcc/i586-manbo-linux-gnu/4.3.1/crtbeginS.o  .libs/mpicxx.o
<br>
.libs/intercepts.o .libs/comm.o .libs/datatype.o .libs/file.o
<br>
.libs/win.o   -lnsl -lutil -L/usr/lib/gcc/i586-manbo-linux-gnu/4.3.1
<br>
-L/usr/lib/gcc/i586-manbo-linux-gnu/4.3.1/../../.. -lstdc++ -lm
<br>
-lpthread -lc -lgcc_s
<br>
/usr/lib/gcc/i586-manbo-linux-gnu/4.3.1/crtendS.o
<br>
/usr/lib/gcc/i586-manbo-linux-gnu/4.3.1/../../../crtn.o  -march=i586
<br>
-mtune=generic -pthread -Wl,--no-undefined   -pthread -Wl,-soname
<br>
-Wl,libmpi_cxx.so.0 -o .libs/libmpi_cxx.so.0.0.0
<br>
.libs/mpicxx.o: In function `Errhandler':
<br>
/home/fwang/rpm/BUILD/openmpi-1.2.6/ompi/mpi/cxx/../../../ompi/mpi/cxx/errhandler.h:30:
<br>
undefined reference to `ompi_mpi_errors_are_fatal'
<br>
/home/fwang/rpm/BUILD/openmpi-1.2.6/ompi/mpi/cxx/../../../ompi/mpi/cxx/errhandler.h:30:
<br>
undefined reference to `ompi_mpi_errors_return'
<br>
/home/fwang/rpm/BUILD/openmpi-1.2.6/ompi/mpi/cxx/../../../ompi/mpi/cxx/errhandler.h:30:
<br>
undefined reference to `ompi_mpi_errors_throw_exceptions'
<br>
.libs/mpicxx.o: In function `Datatype':
<br>
/home/fwang/rpm/BUILD/openmpi-1.2.6/ompi/mpi/cxx/../../../ompi/mpi/cxx/datatype.h:71:
<br>
undefined reference to `ompi_mpi_char'
<br>
/home/fwang/rpm/BUILD/openmpi-1.2.6/ompi/mpi/cxx/../../../ompi/mpi/cxx/datatype.h:71:
<br>
undefined reference to `ompi_mpi_short'
<br>
/home/fwang/rpm/BUILD/openmpi-1.2.6/ompi/mpi/cxx/../../../ompi/mpi/cxx/datatype.h:71:
<br>
undefined reference to `ompi_mpi_int'
<br>
/home/fwang/rpm/BUILD/openmpi-1.2.6/ompi/mpi/cxx/../../../ompi/mpi/cxx/datatype.h:71:
<br>
undefined reference to `ompi_mpi_long'
<br>
/home/fwang/rpm/BUILD/openmpi-1.2.6/ompi/mpi/cxx/../../../ompi/mpi/cxx/datatype.h:71:
<br>
undefined reference to `ompi_mpi_signed_char'
<br>
/home/fwang/rpm/BUILD/openmpi-1.2.6/ompi/mpi/cxx/../../../ompi/mpi/cxx/datatype.h:71:
<br>
undefined reference to `ompi_mpi_unsigned_char'
<br>
/home/fwang/rpm/BUILD/openmpi-1.2.6/ompi/mpi/cxx/../../../ompi/mpi/cxx/datatype.h:71:
<br>
undefined reference to `ompi_mpi_unsigned_short'
<br>
/home/fwang/rpm/BUILD/openmpi-1.2.6/ompi/mpi/cxx/../../../ompi/mpi/cxx/datatype.h:71:
<br>
undefined reference to `ompi_mpi_unsigned'
<br>
/home/fwang/rpm/BUILD/openmpi-1.2.6/ompi/mpi/cxx/../../../ompi/mpi/cxx/datatype.h:71:
<br>
undefined reference to `ompi_mpi_unsigned_long'
<br>
/home/fwang/rpm/BUILD/openmpi-1.2.6/ompi/mpi/cxx/../../../ompi/mpi/cxx/datatype.h:71:
<br>
undefined reference to `ompi_mpi_float'
<br>
/home/fwang/rpm/BUILD/openmpi-1.2.6/ompi/mpi/cxx/../../../ompi/mpi/cxx/datatype.h:71:
<br>
undefined reference to `ompi_mpi_double'
<br>
/home/fwang/rpm/BUILD/openmpi-1.2.6/ompi/mpi/cxx/../../../ompi/mpi/cxx/datatype.h:71:
<br>
undefined reference to `ompi_mpi_long_double'
<br>
/home/fwang/rpm/BUILD/openmpi-1.2.6/ompi/mpi/cxx/../../../ompi/mpi/cxx/datatype.h:71:
<br>
undefined reference to `ompi_mpi_byte'
<br>
/home/fwang/rpm/BUILD/openmpi-1.2.6/ompi/mpi/cxx/../../../ompi/mpi/cxx/datatype.h:71:
<br>
undefined reference to `ompi_mpi_packed'
<br>
/home/fwang/rpm/BUILD/openmpi-1.2.6/ompi/mpi/cxx/../../../ompi/mpi/cxx/datatype.h:71:
<br>
undefined reference to `ompi_mpi_wchar'
<br>
/home/fwang/rpm/BUILD/openmpi-1.2.6/ompi/mpi/cxx/../../../ompi/mpi/cxx/datatype.h:71:
<br>
undefined reference to `ompi_mpi_float_int'
<br>
&lt;snap&gt;
<br>
<p>Is there anything I can do about it? Thanks.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4383.php">Ralf Wildenhues: "Re: [OMPI devel] Help on building openmpi with &quot;-Wl, --as-needed	-Wl, --no-undefined&quot;"</a>
<li><strong>Previous message:</strong> <a href="4381.php">Josh Hursey: "Re: [OMPI devel] RFC: further changing mca_base_component_t before v1.3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4383.php">Ralf Wildenhues: "Re: [OMPI devel] Help on building openmpi with &quot;-Wl, --as-needed	-Wl, --no-undefined&quot;"</a>
<li><strong>Reply:</strong> <a href="4383.php">Ralf Wildenhues: "Re: [OMPI devel] Help on building openmpi with &quot;-Wl, --as-needed	-Wl, --no-undefined&quot;"</a>
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

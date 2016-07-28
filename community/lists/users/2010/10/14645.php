<?
$subject_val = "[OMPI users] cannot install Open MPI 1.5 on Solaris x86_64 with Oracle/Sun C 5.11";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Oct 29 04:49:07 2010" -->
<!-- isoreceived="20101029084907" -->
<!-- sent="Fri, 29 Oct 2010 10:30:08 +0200 (CEST)" -->
<!-- isosent="20101029083008" -->
<!-- name="Siegmar Gross" -->
<!-- email="Siegmar.Gross_at_[hidden]" -->
<!-- subject="[OMPI users] cannot install Open MPI 1.5 on Solaris x86_64 with Oracle/Sun C 5.11" -->
<!-- id="201010290830.o9T8U8MW009601_at_tyr.informatik.hs-fulda.de" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [OMPI users] cannot install Open MPI 1.5 on Solaris x86_64 with Oracle/Sun C 5.11<br>
<strong>From:</strong> Siegmar Gross (<em>Siegmar.Gross_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-10-29 04:30:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14646.php">Vasiliy G Tolstov: "[OMPI users] failed to install openmpi trunk"</a>
<li><strong>Previous message:</strong> <a href="14644.php">christophe petit: "[OMPI users] Need Help for understand heat equation 2D mpi solving version"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14647.php">Terry Dontje: "Re: [OMPI users] cannot install Open MPI 1.5 on Solaris x86_64 with Oracle/Sun C 5.11"</a>
<li><strong>Reply:</strong> <a href="14647.php">Terry Dontje: "Re: [OMPI users] cannot install Open MPI 1.5 on Solaris x86_64 with Oracle/Sun C 5.11"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I tried to build Open MPI 1.5 on Solaris X86 and x86_64 with Oracle
<br>
Studio 12.2. I can compile Open MPI with thread support, but I can
<br>
only partly install it because &quot;libtool&quot; will not find &quot;f95&quot; although
<br>
it is available. &quot;make check&quot; shows no failures.
<br>
<p>tyr openmpi-1.5-SunOS.x86_64.32_cc 188 ssh sunpc4 cc -V
<br>
cc: Sun C 5.11 SunOS_i386 145355-01 2010/10/11
<br>
usage: cc [ options ] files.  Use 'cc -flags' for details
<br>
<p>No suspicious warnings or errors in log.configure.SunOS.x86_64.32_cc.
<br>
<p>tyr openmpi-1.5-SunOS.x86_64.32_cc 182 grep -i warning:
<br>
&nbsp;&nbsp;log.make.SunOS.x86_64.32_cc | more
<br>
<p>&quot;.../opal/mca/crs/none/crs_none_module.c&quot;, line 136:
<br>
&nbsp;&nbsp;warning: statement not reached
<br>
<p>&quot;.../orte/mca/errmgr/errmgr.h&quot;, line 135: warning: attribute
<br>
&nbsp;&nbsp;&quot;noreturn&quot; may not be applied to variable, ignored
<br>
(a lot of these warnings)
<br>
<p>&quot;.../orte/mca/rmcast/tcp/rmcast_tcp.c&quot;, line 982: warning:
<br>
&nbsp;&nbsp;assignment type mismatch:
<br>
&quot;.../orte/mca/rmcast/tcp/rmcast_tcp.c&quot;, line 1023: warning:
<br>
&nbsp;&nbsp;assignment type mismatch:
<br>
&quot;.../orte/mca/rmcast/udp/rmcast_udp.c&quot;, line 877: warning:
<br>
&nbsp;&nbsp;assignment type mismatch:
<br>
&quot;.../orte/mca/rmcast/udp/rmcast_udp.c&quot;, line 918: warning:
<br>
&nbsp;&nbsp;assignment type mismatch:
<br>
<p>&quot;.../orte/tools/orte-ps/orte-ps.c&quot;, line 288: warning:
<br>
&nbsp;&nbsp;initializer does not fit or is out of range: 0xfffffffe
<br>
&quot;.../orte/tools/orte-ps/orte-ps.c&quot;, line 289: warning:
<br>
&nbsp;&nbsp;initializer does not fit or is out of range: 0xfffffffe
<br>
<p>grep -i error: log.make.SunOS.x86_64.32_cc | more
<br>
<p>tyr openmpi-1.5-SunOS.x86_64.32_cc 185 grep -i FAIL
<br>
&nbsp;&nbsp;log.make-check.SunOS.x86_64.32_cc
<br>
tyr openmpi-1.5-SunOS.x86_64.32_cc 186 grep -i SKIP
<br>
&nbsp;&nbsp;log.make-check.SunOS.x86_64.32_cc
<br>
tyr openmpi-1.5-SunOS.x86_64.32_cc 187 grep -i PASS
<br>
&nbsp;&nbsp;log.make-check.SunOS.x86_64.32_cc
<br>
PASS: predefined_gap_test
<br>
File opened with dladvise_local, all passed
<br>
PASS: dlopen_test
<br>
All 2 tests passed
<br>
&nbsp;&nbsp;&nbsp;&nbsp;- 1 threads: Passed
<br>
&nbsp;&nbsp;&nbsp;&nbsp;- 2 threads: Passed
<br>
&nbsp;&nbsp;&nbsp;&nbsp;- 4 threads: Passed
<br>
&nbsp;&nbsp;&nbsp;&nbsp;- 5 threads: Passed
<br>
&nbsp;&nbsp;&nbsp;&nbsp;- 8 threads: Passed
<br>
PASS: atomic_barrier
<br>
&nbsp;&nbsp;&nbsp;&nbsp;- 1 threads: Passed
<br>
&nbsp;&nbsp;&nbsp;&nbsp;- 2 threads: Passed
<br>
&nbsp;&nbsp;&nbsp;&nbsp;- 4 threads: Passed
<br>
&nbsp;&nbsp;&nbsp;&nbsp;- 5 threads: Passed
<br>
&nbsp;&nbsp;&nbsp;&nbsp;- 8 threads: Passed
<br>
PASS: atomic_barrier_noinline
<br>
&nbsp;&nbsp;&nbsp;&nbsp;- 1 threads: Passed
<br>
&nbsp;&nbsp;&nbsp;&nbsp;- 2 threads: Passed
<br>
&nbsp;&nbsp;&nbsp;&nbsp;- 4 threads: Passed
<br>
&nbsp;&nbsp;&nbsp;&nbsp;- 5 threads: Passed
<br>
&nbsp;&nbsp;&nbsp;&nbsp;- 8 threads: Passed
<br>
PASS: atomic_spinlock
<br>
&nbsp;&nbsp;&nbsp;&nbsp;- 1 threads: Passed
<br>
&nbsp;&nbsp;&nbsp;&nbsp;- 2 threads: Passed
<br>
&nbsp;&nbsp;&nbsp;&nbsp;- 4 threads: Passed
<br>
&nbsp;&nbsp;&nbsp;&nbsp;- 5 threads: Passed
<br>
&nbsp;&nbsp;&nbsp;&nbsp;- 8 threads: Passed
<br>
PASS: atomic_spinlock_noinline
<br>
&nbsp;&nbsp;&nbsp;&nbsp;- 1 threads: Passed
<br>
&nbsp;&nbsp;&nbsp;&nbsp;- 2 threads: Passed
<br>
&nbsp;&nbsp;&nbsp;&nbsp;- 4 threads: Passed
<br>
&nbsp;&nbsp;&nbsp;&nbsp;- 5 threads: Passed
<br>
&nbsp;&nbsp;&nbsp;&nbsp;- 8 threads: Passed
<br>
PASS: atomic_math
<br>
&nbsp;&nbsp;&nbsp;&nbsp;- 1 threads: Passed
<br>
&nbsp;&nbsp;&nbsp;&nbsp;- 2 threads: Passed
<br>
&nbsp;&nbsp;&nbsp;&nbsp;- 4 threads: Passed
<br>
&nbsp;&nbsp;&nbsp;&nbsp;- 5 threads: Passed
<br>
&nbsp;&nbsp;&nbsp;&nbsp;- 8 threads: Passed
<br>
PASS: atomic_math_noinline
<br>
&nbsp;&nbsp;&nbsp;&nbsp;- 1 threads: Passed
<br>
&nbsp;&nbsp;&nbsp;&nbsp;- 2 threads: Passed
<br>
&nbsp;&nbsp;&nbsp;&nbsp;- 4 threads: Passed
<br>
&nbsp;&nbsp;&nbsp;&nbsp;- 5 threads: Passed
<br>
&nbsp;&nbsp;&nbsp;&nbsp;- 8 threads: Passed
<br>
PASS: atomic_cmpset
<br>
&nbsp;&nbsp;&nbsp;&nbsp;- 1 threads: Passed
<br>
&nbsp;&nbsp;&nbsp;&nbsp;- 2 threads: Passed
<br>
&nbsp;&nbsp;&nbsp;&nbsp;- 4 threads: Passed
<br>
&nbsp;&nbsp;&nbsp;&nbsp;- 5 threads: Passed
<br>
&nbsp;&nbsp;&nbsp;&nbsp;- 8 threads: Passed
<br>
PASS: atomic_cmpset_noinline
<br>
All 8 tests passed
<br>
All 0 tests passed
<br>
All 0 tests passed
<br>
decode [PASSED]
<br>
PASS: opal_datatype_test
<br>
PASS: checksum
<br>
PASS: position
<br>
decode [PASSED]
<br>
PASS: ddt_test
<br>
decode [PASSED]
<br>
PASS: ddt_raw
<br>
All 5 tests passed
<br>
SUPPORT: OMPI Test Passed: opal_path_nfs(): (0 tests)
<br>
PASS: opal_path_nfs
<br>
1 test passed
<br>
<p><p>tyr openmpi-1.5-SunOS.x86_64.32_cc 190 grep -i warning:
<br>
&nbsp;&nbsp;log.make-install.SunOS.x86_64.32_cc | more
<br>
libtool: install: warning: relinking `libmpi_cxx.la'
<br>
libtool: install: warning: relinking `libmpi_f77.la'
<br>
libtool: install: warning: relinking `libmpi_f90.la'
<br>
<p>tyr openmpi-1.5-SunOS.x86_64.32_cc 191 grep -i error:
<br>
&nbsp;&nbsp;log.make-install.SunOS.x86_64.32_cc | more
<br>
libtool: install: error: relink `libmpi_f90.la' with the above
<br>
&nbsp;&nbsp;command before installing it
<br>
<p>tyr openmpi-1.5-SunOS.x86_64.32_cc 194 tail -20
<br>
&nbsp;&nbsp;log.make-install.SunOS.x86_64.32_cc
<br>
make[4]: Leaving directory `.../ompi/mpi/f90/scripts'
<br>
make[4]: Entering directory `.../ompi/mpi/f90'
<br>
make[5]: Entering directory `.../ompi/mpi/f90'
<br>
test -z &quot;/usr/local/openmpi-1.5_32_cc/lib&quot; ||
<br>
&nbsp;&nbsp;/usr/local/bin/mkdir -p &quot;/usr/local/openmpi-1.5_32_cc/lib&quot;
<br>
&nbsp;/bin/bash ../../../libtool   --mode=install /usr/local/bin/install -c
<br>
&nbsp;&nbsp;&nbsp;libmpi_f90.la '/usr/local/openmpi-1.5_32_cc/lib'
<br>
libtool: install: warning: relinking `libmpi_f90.la'
<br>
libtool: install: (cd 
<br>
/export2/src/openmpi-1.5/openmpi-1.5-SunOS.x86_64.32_cc/ompi/mpi/f90; /bin/bash 
<br>
/export2/src/openmpi-1.5/openmpi-1.5-SunOS.x86_64.32_cc/libtool  --silent --tag FC 
<br>
--mode=relink f95 -I../../../ompi/include -I../../../../openmpi-1.5/ompi/include -I. 
<br>
-I../../../../openmpi-1.5/ompi/mpi/f90 -I../../../ompi/mpi/f90 -m32 -version-info 1:0:0 
<br>
-export-dynamic -m32 -o libmpi_f90.la -rpath /usr/local/openmpi-1.5_32_cc/lib mpi.lo 
<br>
mpi_sizeof.lo mpi_comm_spawn_multiple_f90.lo mpi_testall_f90.lo mpi_testsome_f90.lo 
<br>
mpi_waitall_f90.lo mpi_waitsome_f90.lo mpi_wtick_f90.lo mpi_wtime_f90.lo 
<br>
../../../ompi/mpi/f77/libmpi_f77.la -lsocket -lnsl -lrt -lm )
<br>
/export2/src/openmpi-1.5/openmpi-1.5-SunOS.x86_64.32_cc/libtool:
<br>
&nbsp;&nbsp;line 7846: f95: command not found
<br>
libtool: install: error: relink `libmpi_f90.la' with the above
<br>
&nbsp;&nbsp;command before installing it
<br>
make[5]: *** [install-libLTLIBRARIES] Error 1
<br>
make[5]: Leaving directory `.../ompi/mpi/f90'
<br>
make[4]: *** [install-am] Error 2
<br>
make[4]: Leaving directory `.../ompi/mpi/f90'
<br>
make[3]: *** [install-recursive] Error 1
<br>
make[3]: Leaving directory `.../ompi/mpi/f90'
<br>
make[2]: *** [install] Error 2
<br>
make[2]: Leaving directory `.../ompi/mpi/f90'
<br>
make[1]: *** [install-recursive] Error 1
<br>
make[1]: Leaving directory `.../ompi'
<br>
make: *** [install-recursive] Error 1
<br>
tyr openmpi-1.5-SunOS.x86_64.32_cc 195 
<br>
<p>Why doesn't libtool find &quot;f95&quot;?
<br>
<p>sunpc4 fd1026 101 which f77
<br>
/opt/solstudio12.2/bin/f77
<br>
sunpc4 fd1026 102 which f95
<br>
/opt/solstudio12.2/bin/f95
<br>
sunpc4 fd1026 103 
<br>
<p>sunpc4 openmpi-1.5-SunOS.x86_64.32_cc 114 grep f95
<br>
&nbsp;&nbsp;log.configure.SunOS.x86_64.32_cc 
<br>
checking whether f95 accepts -g... yes
<br>
checking whether f77 and f95 compilers are compatible... yes
<br>
...
<br>
<p>I have the same problem with the 64-bit version. I have looked into
<br>
&quot;libtool&quot; but don't understand what happens in line 7846. Does anybody
<br>
know what I can do to install the package? Please let me know if
<br>
you want any log-files or other files.
<br>
<p><p>Kind regards
<br>
<p>Siegmar
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14646.php">Vasiliy G Tolstov: "[OMPI users] failed to install openmpi trunk"</a>
<li><strong>Previous message:</strong> <a href="14644.php">christophe petit: "[OMPI users] Need Help for understand heat equation 2D mpi solving version"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14647.php">Terry Dontje: "Re: [OMPI users] cannot install Open MPI 1.5 on Solaris x86_64 with Oracle/Sun C 5.11"</a>
<li><strong>Reply:</strong> <a href="14647.php">Terry Dontje: "Re: [OMPI users] cannot install Open MPI 1.5 on Solaris x86_64 with Oracle/Sun C 5.11"</a>
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

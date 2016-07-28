<?
$subject_val = "Re: [OMPI users] cannot install Open MPI 1.5 on Solaris x86_64 with Oracle/Sun C 5.11";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Oct 29 07:05:53 2010" -->
<!-- isoreceived="20101029110553" -->
<!-- sent="Fri, 29 Oct 2010 07:04:56 -0400" -->
<!-- isosent="20101029110456" -->
<!-- name="Terry Dontje" -->
<!-- email="terry.dontje_at_[hidden]" -->
<!-- subject="Re: [OMPI users] cannot install Open MPI 1.5 on Solaris x86_64 with Oracle/Sun C 5.11" -->
<!-- id="4CCAAA58.7070705_at_oracle.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="201010290830.o9T8U8MW009601_at_tyr.informatik.hs-fulda.de" -->
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
<strong>Subject:</strong> Re: [OMPI users] cannot install Open MPI 1.5 on Solaris x86_64 with Oracle/Sun C 5.11<br>
<strong>From:</strong> Terry Dontje (<em>terry.dontje_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-10-29 07:04:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14648.php">Jeremy Roberts: "Re: [OMPI users] open MPI please recommend a debugger for open MPI"</a>
<li><strong>Previous message:</strong> <a href="14646.php">Vasiliy G Tolstov: "[OMPI users] failed to install openmpi trunk"</a>
<li><strong>In reply to:</strong> <a href="14645.php">Siegmar Gross: "[OMPI users] cannot install Open MPI 1.5 on Solaris x86_64 with Oracle/Sun C 5.11"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
&nbsp;&nbsp;Sorry, but can you give us the config line, the config.log and the 
<br>
full output of make preferrably with make V=1?
<br>
<p>--td
<br>
On 10/29/2010 04:30 AM, Siegmar Gross wrote:
<br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I tried to build Open MPI 1.5 on Solaris X86 and x86_64 with Oracle
</span><br>
<span class="quotelev1">&gt; Studio 12.2. I can compile Open MPI with thread support, but I can
</span><br>
<span class="quotelev1">&gt; only partly install it because &quot;libtool&quot; will not find &quot;f95&quot; although
</span><br>
<span class="quotelev1">&gt; it is available. &quot;make check&quot; shows no failures.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; tyr openmpi-1.5-SunOS.x86_64.32_cc 188 ssh sunpc4 cc -V
</span><br>
<span class="quotelev1">&gt; cc: Sun C 5.11 SunOS_i386 145355-01 2010/10/11
</span><br>
<span class="quotelev1">&gt; usage: cc [ options ] files.  Use 'cc -flags' for details
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; No suspicious warnings or errors in log.configure.SunOS.x86_64.32_cc.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; tyr openmpi-1.5-SunOS.x86_64.32_cc 182 grep -i warning:
</span><br>
<span class="quotelev1">&gt;    log.make.SunOS.x86_64.32_cc | more
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &quot;.../opal/mca/crs/none/crs_none_module.c&quot;, line 136:
</span><br>
<span class="quotelev1">&gt;    warning: statement not reached
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &quot;.../orte/mca/errmgr/errmgr.h&quot;, line 135: warning: attribute
</span><br>
<span class="quotelev1">&gt;    &quot;noreturn&quot; may not be applied to variable, ignored
</span><br>
<span class="quotelev1">&gt; (a lot of these warnings)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &quot;.../orte/mca/rmcast/tcp/rmcast_tcp.c&quot;, line 982: warning:
</span><br>
<span class="quotelev1">&gt;    assignment type mismatch:
</span><br>
<span class="quotelev1">&gt; &quot;.../orte/mca/rmcast/tcp/rmcast_tcp.c&quot;, line 1023: warning:
</span><br>
<span class="quotelev1">&gt;    assignment type mismatch:
</span><br>
<span class="quotelev1">&gt; &quot;.../orte/mca/rmcast/udp/rmcast_udp.c&quot;, line 877: warning:
</span><br>
<span class="quotelev1">&gt;    assignment type mismatch:
</span><br>
<span class="quotelev1">&gt; &quot;.../orte/mca/rmcast/udp/rmcast_udp.c&quot;, line 918: warning:
</span><br>
<span class="quotelev1">&gt;    assignment type mismatch:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &quot;.../orte/tools/orte-ps/orte-ps.c&quot;, line 288: warning:
</span><br>
<span class="quotelev1">&gt;    initializer does not fit or is out of range: 0xfffffffe
</span><br>
<span class="quotelev1">&gt; &quot;.../orte/tools/orte-ps/orte-ps.c&quot;, line 289: warning:
</span><br>
<span class="quotelev1">&gt;    initializer does not fit or is out of range: 0xfffffffe
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; grep -i error: log.make.SunOS.x86_64.32_cc | more
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; tyr openmpi-1.5-SunOS.x86_64.32_cc 185 grep -i FAIL
</span><br>
<span class="quotelev1">&gt;    log.make-check.SunOS.x86_64.32_cc
</span><br>
<span class="quotelev1">&gt; tyr openmpi-1.5-SunOS.x86_64.32_cc 186 grep -i SKIP
</span><br>
<span class="quotelev1">&gt;    log.make-check.SunOS.x86_64.32_cc
</span><br>
<span class="quotelev1">&gt; tyr openmpi-1.5-SunOS.x86_64.32_cc 187 grep -i PASS
</span><br>
<span class="quotelev1">&gt;    log.make-check.SunOS.x86_64.32_cc
</span><br>
<span class="quotelev1">&gt; PASS: predefined_gap_test
</span><br>
<span class="quotelev1">&gt; File opened with dladvise_local, all passed
</span><br>
<span class="quotelev1">&gt; PASS: dlopen_test
</span><br>
<span class="quotelev1">&gt; All 2 tests passed
</span><br>
<span class="quotelev1">&gt;      - 1 threads: Passed
</span><br>
<span class="quotelev1">&gt;      - 2 threads: Passed
</span><br>
<span class="quotelev1">&gt;      - 4 threads: Passed
</span><br>
<span class="quotelev1">&gt;      - 5 threads: Passed
</span><br>
<span class="quotelev1">&gt;      - 8 threads: Passed
</span><br>
<span class="quotelev1">&gt; PASS: atomic_barrier
</span><br>
<span class="quotelev1">&gt;      - 1 threads: Passed
</span><br>
<span class="quotelev1">&gt;      - 2 threads: Passed
</span><br>
<span class="quotelev1">&gt;      - 4 threads: Passed
</span><br>
<span class="quotelev1">&gt;      - 5 threads: Passed
</span><br>
<span class="quotelev1">&gt;      - 8 threads: Passed
</span><br>
<span class="quotelev1">&gt; PASS: atomic_barrier_noinline
</span><br>
<span class="quotelev1">&gt;      - 1 threads: Passed
</span><br>
<span class="quotelev1">&gt;      - 2 threads: Passed
</span><br>
<span class="quotelev1">&gt;      - 4 threads: Passed
</span><br>
<span class="quotelev1">&gt;      - 5 threads: Passed
</span><br>
<span class="quotelev1">&gt;      - 8 threads: Passed
</span><br>
<span class="quotelev1">&gt; PASS: atomic_spinlock
</span><br>
<span class="quotelev1">&gt;      - 1 threads: Passed
</span><br>
<span class="quotelev1">&gt;      - 2 threads: Passed
</span><br>
<span class="quotelev1">&gt;      - 4 threads: Passed
</span><br>
<span class="quotelev1">&gt;      - 5 threads: Passed
</span><br>
<span class="quotelev1">&gt;      - 8 threads: Passed
</span><br>
<span class="quotelev1">&gt; PASS: atomic_spinlock_noinline
</span><br>
<span class="quotelev1">&gt;      - 1 threads: Passed
</span><br>
<span class="quotelev1">&gt;      - 2 threads: Passed
</span><br>
<span class="quotelev1">&gt;      - 4 threads: Passed
</span><br>
<span class="quotelev1">&gt;      - 5 threads: Passed
</span><br>
<span class="quotelev1">&gt;      - 8 threads: Passed
</span><br>
<span class="quotelev1">&gt; PASS: atomic_math
</span><br>
<span class="quotelev1">&gt;      - 1 threads: Passed
</span><br>
<span class="quotelev1">&gt;      - 2 threads: Passed
</span><br>
<span class="quotelev1">&gt;      - 4 threads: Passed
</span><br>
<span class="quotelev1">&gt;      - 5 threads: Passed
</span><br>
<span class="quotelev1">&gt;      - 8 threads: Passed
</span><br>
<span class="quotelev1">&gt; PASS: atomic_math_noinline
</span><br>
<span class="quotelev1">&gt;      - 1 threads: Passed
</span><br>
<span class="quotelev1">&gt;      - 2 threads: Passed
</span><br>
<span class="quotelev1">&gt;      - 4 threads: Passed
</span><br>
<span class="quotelev1">&gt;      - 5 threads: Passed
</span><br>
<span class="quotelev1">&gt;      - 8 threads: Passed
</span><br>
<span class="quotelev1">&gt; PASS: atomic_cmpset
</span><br>
<span class="quotelev1">&gt;      - 1 threads: Passed
</span><br>
<span class="quotelev1">&gt;      - 2 threads: Passed
</span><br>
<span class="quotelev1">&gt;      - 4 threads: Passed
</span><br>
<span class="quotelev1">&gt;      - 5 threads: Passed
</span><br>
<span class="quotelev1">&gt;      - 8 threads: Passed
</span><br>
<span class="quotelev1">&gt; PASS: atomic_cmpset_noinline
</span><br>
<span class="quotelev1">&gt; All 8 tests passed
</span><br>
<span class="quotelev1">&gt; All 0 tests passed
</span><br>
<span class="quotelev1">&gt; All 0 tests passed
</span><br>
<span class="quotelev1">&gt; decode [PASSED]
</span><br>
<span class="quotelev1">&gt; PASS: opal_datatype_test
</span><br>
<span class="quotelev1">&gt; PASS: checksum
</span><br>
<span class="quotelev1">&gt; PASS: position
</span><br>
<span class="quotelev1">&gt; decode [PASSED]
</span><br>
<span class="quotelev1">&gt; PASS: ddt_test
</span><br>
<span class="quotelev1">&gt; decode [PASSED]
</span><br>
<span class="quotelev1">&gt; PASS: ddt_raw
</span><br>
<span class="quotelev1">&gt; All 5 tests passed
</span><br>
<span class="quotelev1">&gt; SUPPORT: OMPI Test Passed: opal_path_nfs(): (0 tests)
</span><br>
<span class="quotelev1">&gt; PASS: opal_path_nfs
</span><br>
<span class="quotelev1">&gt; 1 test passed
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; tyr openmpi-1.5-SunOS.x86_64.32_cc 190 grep -i warning:
</span><br>
<span class="quotelev1">&gt;    log.make-install.SunOS.x86_64.32_cc | more
</span><br>
<span class="quotelev1">&gt; libtool: install: warning: relinking `libmpi_cxx.la'
</span><br>
<span class="quotelev1">&gt; libtool: install: warning: relinking `libmpi_f77.la'
</span><br>
<span class="quotelev1">&gt; libtool: install: warning: relinking `libmpi_f90.la'
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; tyr openmpi-1.5-SunOS.x86_64.32_cc 191 grep -i error:
</span><br>
<span class="quotelev1">&gt;    log.make-install.SunOS.x86_64.32_cc | more
</span><br>
<span class="quotelev1">&gt; libtool: install: error: relink `libmpi_f90.la' with the above
</span><br>
<span class="quotelev1">&gt;    command before installing it
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; tyr openmpi-1.5-SunOS.x86_64.32_cc 194 tail -20
</span><br>
<span class="quotelev1">&gt;    log.make-install.SunOS.x86_64.32_cc
</span><br>
<span class="quotelev1">&gt; make[4]: Leaving directory `.../ompi/mpi/f90/scripts'
</span><br>
<span class="quotelev1">&gt; make[4]: Entering directory `.../ompi/mpi/f90'
</span><br>
<span class="quotelev1">&gt; make[5]: Entering directory `.../ompi/mpi/f90'
</span><br>
<span class="quotelev1">&gt; test -z &quot;/usr/local/openmpi-1.5_32_cc/lib&quot; ||
</span><br>
<span class="quotelev1">&gt;    /usr/local/bin/mkdir -p &quot;/usr/local/openmpi-1.5_32_cc/lib&quot;
</span><br>
<span class="quotelev1">&gt;   /bin/bash ../../../libtool   --mode=install /usr/local/bin/install -c
</span><br>
<span class="quotelev1">&gt;     libmpi_f90.la '/usr/local/openmpi-1.5_32_cc/lib'
</span><br>
<span class="quotelev1">&gt; libtool: install: warning: relinking `libmpi_f90.la'
</span><br>
<span class="quotelev1">&gt; libtool: install: (cd
</span><br>
<span class="quotelev1">&gt; /export2/src/openmpi-1.5/openmpi-1.5-SunOS.x86_64.32_cc/ompi/mpi/f90; /bin/bash
</span><br>
<span class="quotelev1">&gt; /export2/src/openmpi-1.5/openmpi-1.5-SunOS.x86_64.32_cc/libtool  --silent --tag FC
</span><br>
<span class="quotelev1">&gt; --mode=relink f95 -I../../../ompi/include -I../../../../openmpi-1.5/ompi/include -I.
</span><br>
<span class="quotelev1">&gt; -I../../../../openmpi-1.5/ompi/mpi/f90 -I../../../ompi/mpi/f90 -m32 -version-info 1:0:0
</span><br>
<span class="quotelev1">&gt; -export-dynamic -m32 -o libmpi_f90.la -rpath /usr/local/openmpi-1.5_32_cc/lib mpi.lo
</span><br>
<span class="quotelev1">&gt; mpi_sizeof.lo mpi_comm_spawn_multiple_f90.lo mpi_testall_f90.lo mpi_testsome_f90.lo
</span><br>
<span class="quotelev1">&gt; mpi_waitall_f90.lo mpi_waitsome_f90.lo mpi_wtick_f90.lo mpi_wtime_f90.lo
</span><br>
<span class="quotelev1">&gt; ../../../ompi/mpi/f77/libmpi_f77.la -lsocket -lnsl -lrt -lm )
</span><br>
<span class="quotelev1">&gt; /export2/src/openmpi-1.5/openmpi-1.5-SunOS.x86_64.32_cc/libtool:
</span><br>
<span class="quotelev1">&gt;    line 7846: f95: command not found
</span><br>
<span class="quotelev1">&gt; libtool: install: error: relink `libmpi_f90.la' with the above
</span><br>
<span class="quotelev1">&gt;    command before installing it
</span><br>
<span class="quotelev1">&gt; make[5]: *** [install-libLTLIBRARIES] Error 1
</span><br>
<span class="quotelev1">&gt; make[5]: Leaving directory `.../ompi/mpi/f90'
</span><br>
<span class="quotelev1">&gt; make[4]: *** [install-am] Error 2
</span><br>
<span class="quotelev1">&gt; make[4]: Leaving directory `.../ompi/mpi/f90'
</span><br>
<span class="quotelev1">&gt; make[3]: *** [install-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; make[3]: Leaving directory `.../ompi/mpi/f90'
</span><br>
<span class="quotelev1">&gt; make[2]: *** [install] Error 2
</span><br>
<span class="quotelev1">&gt; make[2]: Leaving directory `.../ompi/mpi/f90'
</span><br>
<span class="quotelev1">&gt; make[1]: *** [install-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; make[1]: Leaving directory `.../ompi'
</span><br>
<span class="quotelev1">&gt; make: *** [install-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; tyr openmpi-1.5-SunOS.x86_64.32_cc 195
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Why doesn't libtool find &quot;f95&quot;?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; sunpc4 fd1026 101 which f77
</span><br>
<span class="quotelev1">&gt; /opt/solstudio12.2/bin/f77
</span><br>
<span class="quotelev1">&gt; sunpc4 fd1026 102 which f95
</span><br>
<span class="quotelev1">&gt; /opt/solstudio12.2/bin/f95
</span><br>
<span class="quotelev1">&gt; sunpc4 fd1026 103
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; sunpc4 openmpi-1.5-SunOS.x86_64.32_cc 114 grep f95
</span><br>
<span class="quotelev1">&gt;    log.configure.SunOS.x86_64.32_cc
</span><br>
<span class="quotelev1">&gt; checking whether f95 accepts -g... yes
</span><br>
<span class="quotelev1">&gt; checking whether f77 and f95 compilers are compatible... yes
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have the same problem with the 64-bit version. I have looked into
</span><br>
<span class="quotelev1">&gt; &quot;libtool&quot; but don't understand what happens in line 7846. Does anybody
</span><br>
<span class="quotelev1">&gt; know what I can do to install the package? Please let me know if
</span><br>
<span class="quotelev1">&gt; you want any log-files or other files.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Kind regards
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Siegmar
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
Oracle
Terry D. Dontje | Principal Software Engineer
Developer Tools Engineering | +1.781.442.2631
Oracle * - Performance Technologies*
95 Network Drive, Burlington, MA 01803
Email terry.dontje_at_[hidden] &lt;mailto:terry.dontje_at_[hidden]&gt;
</pre>
<p>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-14647/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<img src="http://www.open-mpi.org/community/lists/users/att-14647/02-part" alt="picture">
<!-- attachment="02-part" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14648.php">Jeremy Roberts: "Re: [OMPI users] open MPI please recommend a debugger for open MPI"</a>
<li><strong>Previous message:</strong> <a href="14646.php">Vasiliy G Tolstov: "[OMPI users] failed to install openmpi trunk"</a>
<li><strong>In reply to:</strong> <a href="14645.php">Siegmar Gross: "[OMPI users] cannot install Open MPI 1.5 on Solaris x86_64 with Oracle/Sun C 5.11"</a>
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

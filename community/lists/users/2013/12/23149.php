<?
$subject_val = "[OMPI users] Bus error with openmpi-1.7.4a1r29784 and openmpi-1.9a1r29790";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec  4 10:16:45 2013" -->
<!-- isoreceived="20131204151645" -->
<!-- sent="Wed, 4 Dec 2013 16:16:16 +0100 (CET)" -->
<!-- isosent="20131204151616" -->
<!-- name="Siegmar Gross" -->
<!-- email="Siegmar.Gross_at_[hidden]" -->
<!-- subject="[OMPI users] Bus error with openmpi-1.7.4a1r29784 and openmpi-1.9a1r29790" -->
<!-- id="201312041516.rB4FGFn2017885_at_tyr.informatik.hs-fulda.de" -->
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
<strong>Subject:</strong> [OMPI users] Bus error with openmpi-1.7.4a1r29784 and openmpi-1.9a1r29790<br>
<strong>From:</strong> Siegmar Gross (<em>Siegmar.Gross_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-12-04 10:16:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23150.php">Dominique Orban: "Re: [OMPI users] MPI process hangs if OpenMPI is compiled with --enable-thread-multiple"</a>
<li><strong>Previous message:</strong> <a href="23148.php">Jeff Squyres (jsquyres): "Re: [OMPI users] open-mpi on Mac OS 10.9 (Mavericks)"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>today I installed openmpi-1.7.4a1r29784 on &quot;Solaris 10, Sparc&quot;
<br>
with &quot;Sun C 5.12&quot; with the following configure command.
<br>
<p>../openmpi-1.7.4a1r29784/configure \
<br>
&nbsp;&nbsp;--prefix=/usr/local/openmpi-1.7.4_64_cc \
<br>
&nbsp;&nbsp;--libdir=/usr/local/openmpi-1.7.4_64_cc/lib64 \
<br>
&nbsp;&nbsp;--with-jdk-bindir=/usr/local/jdk1.7.0_07/bin/sparcv9 \
<br>
&nbsp;&nbsp;--with-jdk-headers=/usr/local/jdk1.7.0_07/include \
<br>
&nbsp;&nbsp;JAVA_HOME=/usr/local/jdk1.7.0_07 \
<br>
&nbsp;&nbsp;LDFLAGS=&quot;-m64&quot; \
<br>
&nbsp;&nbsp;CC=&quot;cc&quot; CXX=&quot;CC&quot; FC=&quot;f95&quot; \
<br>
&nbsp;&nbsp;CFLAGS=&quot;-m64&quot; CXXFLAGS=&quot;-m64 -library=stlport4&quot; FCFLAGS=&quot;-m64&quot; \
<br>
&nbsp;&nbsp;CPP=&quot;cpp&quot; CXXCPP=&quot;cpp&quot; \
<br>
&nbsp;&nbsp;CPPFLAGS=&quot;&quot; CXXCPPFLAGS=&quot;&quot; \
<br>
&nbsp;&nbsp;--enable-cxx-exceptions \
<br>
&nbsp;&nbsp;--enable-mpi-java \
<br>
&nbsp;&nbsp;--enable-heterogeneous \
<br>
&nbsp;&nbsp;--enable-opal-multi-threads \
<br>
&nbsp;&nbsp;--enable-mpi-thread-multiple \
<br>
&nbsp;&nbsp;--with-threads=posix \
<br>
&nbsp;&nbsp;--with-hwloc=internal \
<br>
&nbsp;&nbsp;--without-verbs \
<br>
&nbsp;&nbsp;--with-wrapper-cflags=-m64 \
<br>
&nbsp;&nbsp;--enable-debug \
<br>
&nbsp;&nbsp;|&amp; tee log.configure.$SYSTEM_ENV.$MACHINE_ENV.64_cc
<br>
<p><p><p>1) Bus error with &quot;ompi_info -a&quot;
<br>
<p>tyr fd1026 108 ompi_info | grep MPI:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Open MPI: 1.7.4a1r29784
<br>
<p><p>I get a Bus Error, if I use option &quot;-a&quot;.
<br>
<p>tyr fd1026 109 ompi_info -a | grep MPI:
<br>
[tyr:17668] *** Process received signal ***
<br>
[tyr:17668] Signal: Bus Error (10)
<br>
[tyr:17668] Signal code: Invalid address alignment (1)
<br>
[tyr:17668] Failing at address: ffffffff7d3ca461
<br>
/export2/prog/SunOS_sparc/openmpi-1.7.4_64_cc/lib64/libopen-pal.so.6.0.0:
<br>
&nbsp;&nbsp;opal_backtrace_print+0x14
<br>
/export2/prog/SunOS_sparc/openmpi-1.7.4_64_cc/lib64/libopen-pal.so.6.0.0:
<br>
&nbsp;&nbsp;0x1843d8
<br>
/lib/sparcv9/libc.so.1:0xd8c28
<br>
/lib/sparcv9/libc.so.1:0xcc79c
<br>
/lib/sparcv9/libc.so.1:0xcc9a8
<br>
/export2/prog/SunOS_sparc/openmpi-1.7.4_64_cc/lib64/libopen-pal.so.6.0.0:
<br>
&nbsp;&nbsp;0x13a3dc [ Signal 2099942168 (?)]
<br>
/export2/prog/SunOS_sparc/openmpi-1.7.4_64_cc/lib64/libopen-pal.so.6.0.0:
<br>
&nbsp;&nbsp;mca_base_var_dump+0x190
<br>
/export2/prog/SunOS_sparc/openmpi-1.7.4_64_cc/lib64/libopen-pal.so.6.0.0:
<br>
&nbsp;&nbsp;0x899a8
<br>
/export2/prog/SunOS_sparc/openmpi-1.7.4_64_cc/lib64/libopen-pal.so.6.0.0:
<br>
&nbsp;&nbsp;opal_info_show_mca_params+0xb4
<br>
/export2/prog/SunOS_sparc/openmpi-1.7.4_64_cc/lib64/libopen-pal.so.6.0.0:
<br>
&nbsp;&nbsp;opal_info_do_params+0x364
<br>
/export2/prog/SunOS_sparc/openmpi-1.7.4_64_cc/bin/ompi_info:main+0x6e4
<br>
/export2/prog/SunOS_sparc/openmpi-1.7.4_64_cc/bin/ompi_info:_start+0x12c
<br>
[tyr:17668] *** End of error message ***
<br>
Bus error 
<br>
tyr fd1026 110 
<br>
<p><p>tyr fd1026 112 cd /usr/local/openmpi-1.7.4_64_cc/bin/
<br>
tyr bin 113 /opt/solstudio12.3/bin/sparcv9/dbx ompi_info
<br>
For information about new features see `help changes'
<br>
To remove this message, put `dbxenv suppress_startup_message 7.9' in your .dbxrc
<br>
Reading ompi_info
<br>
Reading ld.so.1
<br>
Reading libmpi.so.1.2.0
<br>
Reading libopen-rte.so.6.0.0
<br>
Reading libopen-pal.so.6.0.0
<br>
Reading libsendfile.so.1
<br>
Reading libpicl.so.1
<br>
Reading libkstat.so.1
<br>
Reading liblgrp.so.1
<br>
Reading libsocket.so.1
<br>
Reading libnsl.so.1
<br>
Reading librt.so.1
<br>
Reading libm.so.2
<br>
Reading libthread.so.1
<br>
Reading libc.so.1
<br>
Reading libdoor.so.1
<br>
Reading libaio.so.1
<br>
Reading libmd.so.1
<br>
(dbx) run -a
<br>
Running: ompi_info -a 
<br>
(process id 17678)
<br>
Reading libc_psr.so.1
<br>
...
<br>
Reading mca_topo_basic.so
<br>
Reading mca_vprotocol_pessimist.so
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Prefix: /usr/local/openmpi-1.7.4_64_cc
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Exec_prefix: /usr/local/openmpi-1.7.4_64_cc
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Bindir: /usr/local/openmpi-1.7.4_64_cc/bin
<br>
...
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_MAX_PORT_NAME: 1024
<br>
&nbsp;&nbsp;MPI_MAX_DATAREP_STRING: 128
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA mca: parameter &quot;mca_param_files&quot; (current value:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&quot;/home/fd1026/.openmpi/mca-params.conf:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
/usr/local/openmpi-1.7.4_64_cc/etc/openmpi-mca-params.conf&quot;,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;data source: default, level: 2 user/detail, type:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;string, deprecated, synonym of:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mca_base_param_files)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Path for MCA configuration files containing
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;variable values
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA mca: parameter &quot;mca_component_path&quot; (current value:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&quot;/usr/local/openmpi-1.7.4_64_cc/lib64/openmpi:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/home/fd1026/.openmpi/components&quot;,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;data source: default, level: 9 dev/all, type:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;string, deprecated, synonym of:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mca_base_component_path)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Path where to look for Open MPI and ORTE components
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA mca: parameter &quot;mca_component_show_load_errors&quot; (current
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;value: &quot;true&quot;, data source: default, level: 9
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;dev/all, type: bool, deprecated, synonym of:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mca_base_component_show_load_errors)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Whether to show errors for components that failed
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;to load or not
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Valid values: 0: f|false|disabled, 1:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;t|true|enabled
<br>
t_at_1 (l_at_1) signal BUS (invalid address alignment) in var_value_string at
<br>
&nbsp;&nbsp;line 1685 in file &quot;mca_base_var.c&quot;
<br>
&nbsp;1685   ret = var-&gt;mbv_enumerator-&gt;string_from_value(var-&gt;mbv_enumerator,
<br>
&nbsp;&nbsp;&nbsp;value-&gt;intval, &amp;tmp);
<br>
(dbx) 
<br>
(dbx) 
<br>
(dbx) 
<br>
(dbx) check -all
<br>
dbx: warning: check -all will be turned on in the next run of the process
<br>
access checking - OFF
<br>
memuse checking - OFF
<br>
(dbx) run -a
<br>
Running: ompi_info -a 
<br>
(process id 17680)
<br>
Reading rtcapihook.so
<br>
Reading libdl.so.1
<br>
Reading rtcaudit.so
<br>
Reading libmapmalloc.so.1
<br>
Reading rtcboot.so
<br>
Reading librtc.so
<br>
Reading libmd_psr.so.1
<br>
RTC: Enabling Error Checking...
<br>
RTC: Using UltraSparc trap mechanism
<br>
RTC: See `help rtc showmap' and `help rtc limitations' for details.
<br>
RTC: Running program...
<br>
Read from uninitialized (rui) on thread 1:
<br>
Attempting to read 4 bytes at address 0xffffffff7fffd548
<br>
&nbsp;&nbsp;&nbsp;&nbsp;which is 184 bytes above the current stack pointer
<br>
Variable is 'index'
<br>
t_at_1 (l_at_1) stopped in var_find at line 802 in file &quot;mca_base_var.c&quot;
<br>
&nbsp;&nbsp;802       return (OPAL_SUCCESS != ret) ? ret : index;
<br>
(dbx) 
<br>
<p><p><p>2) Bus error with &quot;make check&quot;
<br>
<p>tail -15 log.make-check.SunOS.sparc.64_cc 
<br>
<span class="quotelev2">&gt;&gt;--------------------------------------------&lt;&lt;
</span><br>
PASS: ddt_test
<br>
/bin/bash: line 5:  4466 Bus Error               ${dir}$tst
<br>
FAIL: ddt_raw
<br>
========================================================
<br>
1 of 6 tests failed
<br>
Please report to <a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>
<br>
========================================================
<br>
make[3]: *** [check-TESTS] Error 1
<br>
make[3]: Leaving directory `.../test/datatype'
<br>
make[2]: *** [check-am] Error 2
<br>
make[2]: Leaving directory `.../test/datatype'
<br>
make[1]: *** [check-recursive] Error 1
<br>
make[1]: Leaving directory `.../test'
<br>
make: *** [check-recursive] Error 1
<br>
<p><p>tyr openmpi-1.7.4a1r29784-SunOS.sparc.64_cc 116 cd test/datatype/.libs/
<br>
tyr .libs 117 /opt/solstudio12.3/bin/sparcv9/dbx ddt_raw
<br>
For information about new features see `help changes'
<br>
To remove this message, put `dbxenv suppress_startup_message 7.9' in your .dbxrc
<br>
Reading ddt_raw
<br>
Reading ld.so.1
<br>
Reading libmpi.so.1.2.0
<br>
Reading libopen-rte.so.6.0.0
<br>
Reading libopen-pal.so.6.0.0
<br>
Reading libsendfile.so.1
<br>
Reading libpicl.so.1
<br>
Reading libkstat.so.1
<br>
Reading liblgrp.so.1
<br>
Reading libsocket.so.1
<br>
Reading libnsl.so.1
<br>
Reading librt.so.1
<br>
Reading libm.so.2
<br>
Reading libthread.so.1
<br>
Reading libc.so.1
<br>
Reading libdoor.so.1
<br>
Reading libaio.so.1
<br>
Reading libmd.so.1
<br>
(dbx) run
<br>
Running: ddt_raw 
<br>
(process id 17689)
<br>
Reading libc_psr.so.1
<br>
<p><p>#
<br>
&nbsp;* TEST INVERSED VECTOR
<br>
&nbsp;#
<br>
<p>t_at_1 (l_at_1) signal BUS (invalid address alignment) in opal_convertor_raw
<br>
&nbsp;&nbsp;&nbsp;at line 64 in file &quot;opal_convertor_raw.c&quot;
<br>
&nbsp;&nbsp;&nbsp;64       DO_DEBUG( opal_output( 0, &quot;opal_convertor_raw( %p, {%p,
<br>
&nbsp;&nbsp;&nbsp;%u}, %lu )\n&quot;, (void*)pConvertor,
<br>
(dbx) 
<br>
(dbx) 
<br>
(dbx) 
<br>
(dbx) check -all
<br>
dbx: warning: check -all will be turned on in the next run of the process
<br>
access checking - OFF
<br>
memuse checking - OFF
<br>
(dbx) run
<br>
Running: ddt_raw 
<br>
(process id 17691)
<br>
Reading rtcapihook.so
<br>
Reading libdl.so.1
<br>
Reading rtcaudit.so
<br>
Reading libmapmalloc.so.1
<br>
Reading libgen.so.1
<br>
Reading rtcboot.so
<br>
Reading librtc.so
<br>
Reading libmd_psr.so.1
<br>
RTC: Enabling Error Checking...
<br>
RTC: Using UltraSparc trap mechanism
<br>
RTC: See `help rtc showmap' and `help rtc limitations' for details.
<br>
RTC: Running program...
<br>
<p><p>#
<br>
&nbsp;* TEST INVERSED VECTOR
<br>
&nbsp;#
<br>
<p>Misaligned read (mar) on thread 1:
<br>
Attempting to read 4 bytes at address 0xffffffff60cca179
<br>
t_at_1 (l_at_1) stopped in opal_convertor_raw at line 64 in file
<br>
&nbsp;&nbsp;&quot;opal_convertor_raw.c&quot;
<br>
&nbsp;&nbsp;&nbsp;64       DO_DEBUG( opal_output( 0, &quot;opal_convertor_raw( %p,
<br>
&nbsp;&nbsp;{%p, %u}, %lu )\n&quot;, (void*)pConvertor,
<br>
(dbx) 
<br>
<p><p><p><p>3) Bus error with my programs
<br>
<p>tyr small_prog 122 mpicc init_finalize.c
<br>
tyr small_prog 123 /opt/solstudio12.3/bin/sparcv9/dbx 
<br>
/usr/local/openmpi-1.7.4_64_cc/bin/mpiexec
<br>
For information about new features see `help changes'
<br>
To remove this message, put `dbxenv suppress_startup_message 7.9' in your .dbxrc
<br>
Reading mpiexec
<br>
Reading ld.so.1
<br>
Reading libopen-rte.so.6.0.0
<br>
Reading libopen-pal.so.6.0.0
<br>
Reading libsendfile.so.1
<br>
Reading libpicl.so.1
<br>
Reading libkstat.so.1
<br>
Reading liblgrp.so.1
<br>
Reading libsocket.so.1
<br>
Reading libnsl.so.1
<br>
Reading librt.so.1
<br>
Reading libm.so.2
<br>
Reading libthread.so.1
<br>
Reading libc.so.1
<br>
Reading libdoor.so.1
<br>
Reading libaio.so.1
<br>
Reading libmd.so.1
<br>
(dbx) run -np 1 a.out
<br>
Running: mpiexec -np 1 a.out 
<br>
(process id 17791)
<br>
Reading libc_psr.so.1
<br>
Reading mca_shmem_mmap.so
<br>
Reading libmp.so.2
<br>
...
<br>
<p>Reading mca_dfs_orted.so
<br>
Reading mca_dfs_test.so
<br>
t_at_1 (l_at_1) signal BUS (invalid address alignment) in opal_net_samenetwork
<br>
&nbsp;&nbsp;at line 272 in file &quot;net.c&quot;
<br>
&nbsp;&nbsp;272                  (inaddr2-&gt;sin_addr.s_addr &amp; netmask)) {
<br>
(dbx) 
<br>
(dbx) 
<br>
(dbx) 
<br>
(dbx) check -all
<br>
dbx: warning: check -all will be turned on in the next run of the process
<br>
access checking - OFF
<br>
memuse checking - OFF
<br>
(dbx) run -np 1 a.out
<br>
Running: mpiexec -np 1 a.out 
<br>
(process id 17794)
<br>
Reading rtcapihook.so
<br>
Reading libdl.so.1
<br>
Reading rtcaudit.so
<br>
Reading libmapmalloc.so.1
<br>
Reading rtcboot.so
<br>
Reading librtc.so
<br>
Reading libmd_psr.so.1
<br>
RTC: Enabling Error Checking...
<br>
RTC: Using UltraSparc trap mechanism
<br>
RTC: See `help rtc showmap' and `help rtc limitations' for details.
<br>
RTC: Running program...
<br>
Read from uninitialized (rui) on thread 1:
<br>
Attempting to read 4 bytes at address 0xffffffff7fffd368
<br>
&nbsp;&nbsp;&nbsp;&nbsp;which is 184 bytes above the current stack pointer
<br>
Variable is 'index'
<br>
t_at_1 (l_at_1) stopped in var_find at line 802 in file &quot;mca_base_var.c&quot;
<br>
&nbsp;&nbsp;802       return (OPAL_SUCCESS != ret) ? ret : index;
<br>
(dbx) 
<br>
<p><p><p>I have the same problems with openmpi-1.9a1r29790 (same files).
<br>
<p>tyr fd1026 107 ompi_info |grep MPI:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Open MPI: 1.9a1r29790
<br>
tyr fd1026 108 ompi_info -a | grep MPI:
<br>
[tyr:17867] *** Process received signal ***
<br>
[tyr:17867] Signal: Bus Error (10)
<br>
[tyr:17867] Signal code: Invalid address alignment (1)
<br>
[tyr:17867] Failing at address: ffffffff7d3c5ac1
<br>
/export2/prog/SunOS_sparc/openmpi-1.9_64_cc/lib64/libopen-pal.so.0.0.0:
<br>
&nbsp;&nbsp;opal_backtrace_print+0x14
<br>
/export2/prog/SunOS_sparc/openmpi-1.9_64_cc/lib64/libopen-pal.so.0.0.0:
<br>
&nbsp;&nbsp;0x17f268
<br>
/lib/sparcv9/libc.so.1:0xd8c28
<br>
/lib/sparcv9/libc.so.1:0xcc79c
<br>
/lib/sparcv9/libc.so.1:0xcc9a8
<br>
/export2/prog/SunOS_sparc/openmpi-1.9_64_cc/lib64/libopen-pal.so.0.0.0:
<br>
&nbsp;&nbsp;0x134b9c [ Signal 2099923552 (?)]
<br>
/export2/prog/SunOS_sparc/openmpi-1.9_64_cc/lib64/libopen-pal.so.0.0.0:
<br>
&nbsp;&nbsp;mca_base_var_dump+0x1b0
<br>
/export2/prog/SunOS_sparc/openmpi-1.9_64_cc/lib64/libopen-pal.so.0.0.0:
<br>
&nbsp;&nbsp;0x89828
<br>
/export2/prog/SunOS_sparc/openmpi-1.9_64_cc/lib64/libopen-pal.so.0.0.0:
<br>
&nbsp;&nbsp;opal_info_show_mca_params+0xb4
<br>
/export2/prog/SunOS_sparc/openmpi-1.9_64_cc/lib64/libopen-pal.so.0.0.0:
<br>
&nbsp;&nbsp;opal_info_do_params+0x364
<br>
/export2/prog/SunOS_sparc/openmpi-1.9_64_cc/bin/ompi_info:main+0x628
<br>
/export2/prog/SunOS_sparc/openmpi-1.9_64_cc/bin/ompi_info:_start+0x12c
<br>
[tyr:17867] *** End of error message ***
<br>
Bus error 
<br>
tyr fd1026 109 
<br>
<p><p>I would be grateful, if somebody could solve the problems. Do you need
<br>
any further information?
<br>
<p>Kind regards
<br>
<p>Siegmar
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23150.php">Dominique Orban: "Re: [OMPI users] MPI process hangs if OpenMPI is compiled with --enable-thread-multiple"</a>
<li><strong>Previous message:</strong> <a href="23148.php">Jeff Squyres (jsquyres): "Re: [OMPI users] open-mpi on Mac OS 10.9 (Mavericks)"</a>
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

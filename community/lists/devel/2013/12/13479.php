<?
$subject_val = "Re: [OMPI devel] Bus error with openmpi-1.7.4rc1 on Solaris";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Dec 19 08:52:37 2013" -->
<!-- isoreceived="20131219135237" -->
<!-- sent="Thu, 19 Dec 2013 14:52:15 +0100 (CET)" -->
<!-- isosent="20131219135215" -->
<!-- name="Siegmar Gross" -->
<!-- email="Siegmar.Gross_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Bus error with openmpi-1.7.4rc1 on Solaris" -->
<!-- id="201312191352.rBJDqFdx011073_at_tyr.informatik.hs-fulda.de" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="[OMPI devel] Bus error with openmpi-1.7.4rc1 on Solaris" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Bus error with openmpi-1.7.4rc1 on Solaris<br>
<strong>From:</strong> Siegmar Gross (<em>Siegmar.Gross_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-12-19 08:52:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13480.php">Jeff Squyres (jsquyres): "[OMPI devel] Consequence of bind-to-core by default"</a>
<li><strong>Previous message:</strong> <a href="13478.php">Thomas Naughton: "Re: [OMPI devel] Q: MPI-RTE / ompi_proc_t vs. ompi_process_info_t ?"</a>
<li><strong>Maybe in reply to:</strong> <a href="13461.php">Siegmar Gross: "[OMPI devel] Bus error with openmpi-1.7.4rc1 on Solaris"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13487.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Bus error with openmpi-1.7.4rc1 on Solaris"</a>
<li><strong>Reply:</strong> <a href="13487.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Bus error with openmpi-1.7.4rc1 on Solaris"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>at first thank you very much for your help.
<br>
<p>1st patch:
<br>
<p><span class="quotelev1">&gt; Can you apply the following patch to a trunk tarball and see if it works
</span><br>
<span class="quotelev1">&gt; for you?
</span><br>
<p>2nd patch:
<br>
<p><span class="quotelev1">&gt; Found the problem. Was accessing a boolean variable using intval. That
</span><br>
<span class="quotelev1">&gt; is a bug that has gone unnoticed on all platforms but thankfully Solaris
</span><br>
<span class="quotelev1">&gt; caught it.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Please try the attached patch.
</span><br>
<p><p>I applied both patches manually to openmpi-1.9a1r29972, because
<br>
my patch program couldn't use the patches. Unfortunately I still
<br>
get a Bus Error. Hopefully I didn't make a mistake applying your
<br>
patches. Therefore I show you a &quot;diff&quot; for my files. By the way,
<br>
I tried to apply your patches with &quot;patch -b -i &lt;your file&gt;&quot;.
<br>
Is it necessary to use a different command?
<br>
<p><p>tyr openmpi-1.9a1r29972 161 ls -l opal/mca/base/mca_base_var.c*
<br>
-rw-r--r-- 1 fd1026 inf 60418 Dec 19 08:35 opal/mca/base/mca_base_var.c
<br>
-rw-r--r-- 1 fd1026 inf 60236 Dec 19 03:05 opal/mca/base/mca_base_var.c.orig
<br>
tyr openmpi-1.9a1r29972 162 diff opal/mca/base/mca_base_var.c*
<br>
1685,1689c1685
<br>
&lt;        if (MCA_BASE_VAR_TYPE_BOOL == var-&gt;mbv_type) {
<br>
&lt;            ret = var-&gt;mbv_enumerator-&gt;string_from_value(var-&gt;mbv_enumerator, 
<br>
value-&gt;boolval, &amp;tmp);
<br>
&lt;        } else {
<br>
&lt;            ret = var-&gt;mbv_enumerator-&gt;string_from_value(var-&gt;mbv_enumerator, 
<br>
value-&gt;intval, &amp;tmp);
<br>
&lt;        }
<br>
<pre>
---
&gt;         ret = var-&gt;mbv_enumerator-&gt;string_from_value(var-&gt;mbv_enumerator, 
value-&gt;intval, &amp;tmp);
tyr openmpi-1.9a1r29972 163 
tyr openmpi-1.9a1r29972 165 ls -l opal/util/net.c*
-rw-r--r-- 1 fd1026 inf 12922 Dec 19 07:55 opal/util/net.c
-rw-r--r-- 1 fd1026 inf 12675 Dec 19 03:05 opal/util/net.c.orig
tyr openmpi-1.9a1r29972 166 diff opal/util/net.c*
267,271c267,268
&lt;             struct sockaddr_in inaddr1, inaddr2;
&lt;             /* Use temporary variables and memcpy's so that we don't
&lt;                run into bus errors on Solaris/SPARC */
&lt;             memcpy(&amp;inaddr1, addr1, sizeof(inaddr1));
&lt;             memcpy(&amp;inaddr2, addr2, sizeof(inaddr2));
---
&gt;             const struct sockaddr_in *inaddr1 = (struct sockaddr_in*) addr1;
&gt;             const struct sockaddr_in *inaddr2 = (struct sockaddr_in*) addr2;
274,275c271,272
&lt;             if((inaddr1.sin_addr.s_addr &amp; netmask) ==
&lt;                (inaddr2.sin_addr.s_addr &amp; netmask)) {
---
&gt;             if((inaddr1-&gt;sin_addr.s_addr &amp; netmask) ==
&gt;                (inaddr2-&gt;sin_addr.s_addr &amp; netmask)) {
284,290c281,284
&lt;             struct sockaddr_in6 inaddr1, inaddr2;
&lt;             /* Use temporary variables and memcpy's so that we don't
&lt;                run into bus errors on Solaris/SPARC */
&lt;             memcpy(&amp;inaddr1, addr1, sizeof(inaddr1));
&lt;             memcpy(&amp;inaddr2, addr2, sizeof(inaddr2));
&lt;             struct in6_addr *a6_1 = (struct in6_addr*) &amp;inaddr1.sin6_addr;
&lt;             struct in6_addr *a6_2 = (struct in6_addr*) &amp;inaddr2.sin6_addr;
---
&gt;             const struct sockaddr_in6 *inaddr1 = (struct sockaddr_in6*) addr1;
&gt;             const struct sockaddr_in6 *inaddr2 = (struct sockaddr_in6*) addr2;
&gt;             struct in6_addr *a6_1 = (struct in6_addr*) &amp;inaddr1-&gt;sin6_addr;
&gt;             struct in6_addr *a6_2 = (struct in6_addr*) &amp;inaddr2-&gt;sin6_addr;
tyr openmpi-1.9a1r29972 167 
Now my debug information.
tyr fd1026 52 cd /usr/local/openmpi-1.9_64_cc/bin/
tyr bin 53 /opt/solstudio12.3/bin/sparcv9/dbx ompi_info
For information about new features see `help changes'
To remove this message, put `dbxenv suppress_startup_message 7.9' in your .dbxrc
Reading ompi_info
Reading ld.so.1
Reading libmpi.so.0.0.0
Reading libopen-rte.so.0.0.0
Reading libopen-pal.so.0.0.0
Reading libsendfile.so.1
Reading libpicl.so.1
Reading libkstat.so.1
Reading liblgrp.so.1
Reading libsocket.so.1
Reading libnsl.so.1
Reading librt.so.1
Reading libm.so.2
Reading libthread.so.1
Reading libc.so.1
Reading libdoor.so.1
Reading libaio.so.1
Reading libmd.so.1
(dbx) run -a
Running: ompi_info -a 
(process id 10998)
Reading libc_psr.so.1
...
    MCA compress: parameter &quot;compress_base_verbose&quot; (current value:
                  &quot;-1&quot;, data source: default, level: 8 dev/detail,
                  type: int)
                  Verbosity level for the compress framework (0 = no
                  verbosity)
t_at_1 (l_at_1) signal BUS (invalid address alignment) in var_value_string
  at line 1680 in file &quot;mca_base_var.c&quot;
 1680  ret = asprintf (value_string, var_type_formats[var-&gt;mbv_type],
  value[0]);
(dbx) 
(dbx) 
(dbx) check -all
dbx: warning: check -all will be turned on in the next run of the process
access checking - OFF
memuse checking - OFF
(dbx) run -a
Running: ompi_info -a 
(process id 11000)
Reading rtcapihook.so
Reading libdl.so.1
Reading rtcaudit.so
Reading libmapmalloc.so.1
Reading rtcboot.so
Reading librtc.so
Reading libmd_psr.so.1
RTC: Enabling Error Checking...
RTC: Using UltraSparc trap mechanism
RTC: See `help rtc showmap' and `help rtc limitations' for details.
RTC: Running program...
Read from uninitialized (rui) on thread 1:
Attempting to read 4 bytes at address 0xffffffff7fffd5f8
    which is 184 bytes above the current stack pointer
Variable is 'index'
t_at_1 (l_at_1) stopped in var_find at line 802 in file &quot;mca_base_var.c&quot;
  802       return (OPAL_SUCCESS != ret) ? ret : index;
(dbx) 
In my opinion it is the same error as before.
I still get a Bus Error with &quot;make check&quot;.
tyr bin 54 cd 
/export2/src/openmpi-1.9/openmpi-1.9a1r29972-SunOS.sparc.64_cc/test/datatype/.li
bs/
tyr .libs 55 /opt/solstudio12.3/bin/sparcv9/dbx ddt_raw
For information about new features see `help changes'
To remove this message, put `dbxenv suppress_startup_message 7.9' in your .dbxrc
Reading ddt_raw
Reading ld.so.1
Reading libmpi.so.0.0.0
Reading libopen-rte.so.0.0.0
Reading libopen-pal.so.0.0.0
Reading libsendfile.so.1
Reading libpicl.so.1
Reading libkstat.so.1
Reading liblgrp.so.1
Reading libsocket.so.1
Reading libnsl.so.1
Reading librt.so.1
Reading libm.so.2
Reading libthread.so.1
Reading libc.so.1
Reading libdoor.so.1
Reading libaio.so.1
Reading libmd.so.1
(dbx) run
Running: ddt_raw 
(process id 11018)
Reading libc_psr.so.1
#
 * TEST INVERSED VECTOR
 #
t_at_1 (l_at_1) signal BUS (invalid address alignment) in opal_convertor_raw
  at line 71 in file &quot;opal_convertor_raw.c&quot;
   71       DO_DEBUG( opal_output( 0, &quot;opal_convertor_raw( %p, {%p,
   %u}, %lu )\n&quot;, (void*)pConvertor,
(dbx) 
Once more I think it is the same error. I have the same problem with
my small program.
tyr small_prog 62 mpicc init_finalize.c
tyr small_prog 63 /opt/solstudio12.3/bin/sparcv9/dbx \
  /usr/local/openmpi-1.9_64_cc/bin/mpiexec
For information about new features see `help changes'
To remove this message, put `dbxenv suppress_startup_message 7.9'
   in your .dbxrc
Reading mpiexec
Reading ld.so.1
Reading libopen-rte.so.0.0.0
Reading libopen-pal.so.0.0.0
Reading libsendfile.so.1
Reading libpicl.so.1
Reading libkstat.so.1
Reading liblgrp.so.1
Reading libsocket.so.1
Reading libnsl.so.1
Reading librt.so.1
Reading libm.so.2
Reading libthread.so.1
Reading libc.so.1
Reading libdoor.so.1
Reading libaio.so.1
Reading libmd.so.1
(dbx) 
(dbx) run -np 1 a.out
Running: mpiexec -np 1 a.out 
(process id 11050)
Reading libc_psr.so.1
Reading mca_shmem_mmap.so
Reading libmp.so.2
Reading libscf.so.1
Reading libuutil.so.1
Reading libgen.so.1
Reading mca_shmem_posix.so
Reading mca_shmem_sysv.so
Reading mca_ess_env.so
Reading mca_ess_hnp.so
Reading mca_ess_singleton.so
Reading mca_ess_tool.so
Reading mca_pstat_test.so
Reading mca_state_app.so
Reading mca_state_hnp.so
Reading mca_state_novm.so
Reading mca_state_orted.so
Reading mca_state_staged_hnp.so
Reading mca_state_staged_orted.so
Reading mca_state_tool.so
Reading mca_errmgr_default_app.so
Reading mca_errmgr_default_hnp.so
Reading mca_errmgr_default_orted.so
Reading mca_errmgr_default_tool.so
Reading mca_plm_rsh.so
Reading mca_oob_tcp.so
Reading mca_rml_oob.so
Reading mca_routed_binomial.so
Reading mca_routed_debruijn.so
Reading mca_routed_direct.so
Reading mca_routed_radix.so
Reading mca_db_hash.so
Reading mca_db_print.so
Reading mca_grpcomm_bad.so
Reading mca_ras_simulator.so
Reading mca_rmaps_lama.so
Reading mca_rmaps_mindist.so
Reading mca_rmaps_ppr.so
Reading mca_rmaps_rank_file.so
Reading mca_rmaps_resilient.so
Reading mca_rmaps_round_robin.so
Reading mca_rmaps_seq.so
Reading mca_rmaps_staged.so
Reading mca_odls_default.so
Reading mca_iof_hnp.so
Reading mca_iof_mr_hnp.so
Reading mca_iof_mr_orted.so
Reading mca_iof_orted.so
Reading mca_iof_tool.so
Reading mca_filem_raw.so
Reading mca_dfs_app.so
Reading mca_dfs_orted.so
Reading mca_dfs_test.so
Now the program hangs.
^Cdbx: warning: Interrupt ignored but forwarded to child.
t_at_1 (l_at_1) signal INT (Interrupt) in __pollsys at 0xffffffff7d5dc740
0xffffffff7d5dc740: __pollsys+0x0004:   ta       %icc,0x0000000000000040
Current function is orterun
 1049           opal_event_loop(orte_event_base, OPAL_EVLOOP_ONCE);
(dbx) 
(dbx) 
(dbx) 
(dbx) check -all
dbx: warning: check -all will be turned on in the next run of the process
access checking - OFF
memuse checking - OFF
(dbx) run -np 1 a.out
Running: mpiexec -np 1 a.out 
(process id 11054)
Reading rtcapihook.so
Reading libdl.so.1
Reading rtcaudit.so
Reading libmapmalloc.so.1
Reading rtcboot.so
Reading librtc.so
Reading libmd_psr.so.1
RTC: Enabling Error Checking...
RTC: Using UltraSparc trap mechanism
RTC: See `help rtc showmap' and `help rtc limitations' for details.
RTC: Running program...
Read from uninitialized (rui) on thread 1:
Attempting to read 4 bytes at address 0xffffffff7fffd438
    which is 184 bytes above the current stack pointer
Variable is 'index'
t_at_1 (l_at_1) stopped in var_find at line 802 in file &quot;mca_base_var.c&quot;
  802       return (OPAL_SUCCESS != ret) ? ret : index;
(dbx) 
I'm sorry that you have so much trouble with me and Solaris. On the
other hand I still hope that you can solve the problem(s). Once more
thank you very much for your help in advance.
Kind regards
Siegmar
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13480.php">Jeff Squyres (jsquyres): "[OMPI devel] Consequence of bind-to-core by default"</a>
<li><strong>Previous message:</strong> <a href="13478.php">Thomas Naughton: "Re: [OMPI devel] Q: MPI-RTE / ompi_proc_t vs. ompi_process_info_t ?"</a>
<li><strong>Maybe in reply to:</strong> <a href="13461.php">Siegmar Gross: "[OMPI devel] Bus error with openmpi-1.7.4rc1 on Solaris"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13487.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Bus error with openmpi-1.7.4rc1 on Solaris"</a>
<li><strong>Reply:</strong> <a href="13487.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Bus error with openmpi-1.7.4rc1 on Solaris"</a>
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

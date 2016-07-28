<?
$subject_val = "Re: [OMPI devel] Bus error with openmpi-1.7.4rc1 on Solaris";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Dec 19 11:15:35 2013" -->
<!-- isoreceived="20131219161535" -->
<!-- sent="Thu, 19 Dec 2013 16:15:33 +0000" -->
<!-- isosent="20131219161533" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Bus error with openmpi-1.7.4rc1 on Solaris" -->
<!-- id="25074BEA-C705-4AEB-AC41-86AFA1D913C4_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="201312191352.rBJDqFdx011073_at_tyr.informatik.hs-fulda.de" -->
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
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-12-19 11:15:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13488.php">Ralph Castain: "Re: [OMPI devel] [EXTERNAL] Consequence of bind-to-core by default"</a>
<li><strong>Previous message:</strong> <a href="13486.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL] Consequence of bind-to-core by default"</a>
<li><strong>In reply to:</strong> <a href="13479.php">Siegmar Gross: "Re: [OMPI devel] Bus error with openmpi-1.7.4rc1 on Solaris"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Siegmar --
<br>
<p>So it looks like the net problem is fixed; good.  I'll commit and CMR that.
<br>
<p>For the DDT test, can you give us access to this machine?  It might help speed debugging a lot.  (I'll let Nathan reply about the var problem)
<br>
<p>If not, can you provide the following information about the DDT test:
<br>
<p>1. It SIGBUS's at a point; can you send the full backtrace?
<br>
2. It complains about a misaligned read of a variable and shows its address.  Can you print the values of all the parameters of the function so that we can see *which* one it is using for the misaligned read?  (the printf is using 4 different variables, and we don't know which one is causing the misaligned read)
<br>
<p><p>On Dec 19, 2013, at 8:52 AM, Siegmar Gross &lt;Siegmar.Gross_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; at first thank you very much for your help.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 1st patch:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Can you apply the following patch to a trunk tarball and see if it works
</span><br>
<span class="quotelev2">&gt;&gt; for you?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 2nd patch:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Found the problem. Was accessing a boolean variable using intval. That
</span><br>
<span class="quotelev2">&gt;&gt; is a bug that has gone unnoticed on all platforms but thankfully Solaris
</span><br>
<span class="quotelev2">&gt;&gt; caught it.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Please try the attached patch.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I applied both patches manually to openmpi-1.9a1r29972, because
</span><br>
<span class="quotelev1">&gt; my patch program couldn't use the patches. Unfortunately I still
</span><br>
<span class="quotelev1">&gt; get a Bus Error. Hopefully I didn't make a mistake applying your
</span><br>
<span class="quotelev1">&gt; patches. Therefore I show you a &quot;diff&quot; for my files. By the way,
</span><br>
<span class="quotelev1">&gt; I tried to apply your patches with &quot;patch -b -i &lt;your file&gt;&quot;.
</span><br>
<span class="quotelev1">&gt; Is it necessary to use a different command?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; tyr openmpi-1.9a1r29972 161 ls -l opal/mca/base/mca_base_var.c*
</span><br>
<span class="quotelev1">&gt; -rw-r--r-- 1 fd1026 inf 60418 Dec 19 08:35 opal/mca/base/mca_base_var.c
</span><br>
<span class="quotelev1">&gt; -rw-r--r-- 1 fd1026 inf 60236 Dec 19 03:05 opal/mca/base/mca_base_var.c.orig
</span><br>
<span class="quotelev1">&gt; tyr openmpi-1.9a1r29972 162 diff opal/mca/base/mca_base_var.c*
</span><br>
<span class="quotelev1">&gt; 1685,1689c1685
</span><br>
<span class="quotelev1">&gt; &lt;        if (MCA_BASE_VAR_TYPE_BOOL == var-&gt;mbv_type) {
</span><br>
<span class="quotelev1">&gt; &lt;            ret = var-&gt;mbv_enumerator-&gt;string_from_value(var-&gt;mbv_enumerator, 
</span><br>
<span class="quotelev1">&gt; value-&gt;boolval, &amp;tmp);
</span><br>
<span class="quotelev1">&gt; &lt;        } else {
</span><br>
<span class="quotelev1">&gt; &lt;            ret = var-&gt;mbv_enumerator-&gt;string_from_value(var-&gt;mbv_enumerator, 
</span><br>
<span class="quotelev1">&gt; value-&gt;intval, &amp;tmp);
</span><br>
<span class="quotelev1">&gt; &lt;        }
</span><br>
<span class="quotelev1">&gt; ---
</span><br>
<span class="quotelev2">&gt;&gt;        ret = var-&gt;mbv_enumerator-&gt;string_from_value(var-&gt;mbv_enumerator, 
</span><br>
<span class="quotelev1">&gt; value-&gt;intval, &amp;tmp);
</span><br>
<span class="quotelev1">&gt; tyr openmpi-1.9a1r29972 163 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; tyr openmpi-1.9a1r29972 165 ls -l opal/util/net.c*
</span><br>
<span class="quotelev1">&gt; -rw-r--r-- 1 fd1026 inf 12922 Dec 19 07:55 opal/util/net.c
</span><br>
<span class="quotelev1">&gt; -rw-r--r-- 1 fd1026 inf 12675 Dec 19 03:05 opal/util/net.c.orig
</span><br>
<span class="quotelev1">&gt; tyr openmpi-1.9a1r29972 166 diff opal/util/net.c*
</span><br>
<span class="quotelev1">&gt; 267,271c267,268
</span><br>
<span class="quotelev1">&gt; &lt;             struct sockaddr_in inaddr1, inaddr2;
</span><br>
<span class="quotelev1">&gt; &lt;             /* Use temporary variables and memcpy's so that we don't
</span><br>
<span class="quotelev1">&gt; &lt;                run into bus errors on Solaris/SPARC */
</span><br>
<span class="quotelev1">&gt; &lt;             memcpy(&amp;inaddr1, addr1, sizeof(inaddr1));
</span><br>
<span class="quotelev1">&gt; &lt;             memcpy(&amp;inaddr2, addr2, sizeof(inaddr2));
</span><br>
<span class="quotelev1">&gt; ---
</span><br>
<span class="quotelev2">&gt;&gt;            const struct sockaddr_in *inaddr1 = (struct sockaddr_in*) addr1;
</span><br>
<span class="quotelev2">&gt;&gt;            const struct sockaddr_in *inaddr2 = (struct sockaddr_in*) addr2;
</span><br>
<span class="quotelev1">&gt; 274,275c271,272
</span><br>
<span class="quotelev1">&gt; &lt;             if((inaddr1.sin_addr.s_addr &amp; netmask) ==
</span><br>
<span class="quotelev1">&gt; &lt;                (inaddr2.sin_addr.s_addr &amp; netmask)) {
</span><br>
<span class="quotelev1">&gt; ---
</span><br>
<span class="quotelev2">&gt;&gt;            if((inaddr1-&gt;sin_addr.s_addr &amp; netmask) ==
</span><br>
<span class="quotelev2">&gt;&gt;               (inaddr2-&gt;sin_addr.s_addr &amp; netmask)) {
</span><br>
<span class="quotelev1">&gt; 284,290c281,284
</span><br>
<span class="quotelev1">&gt; &lt;             struct sockaddr_in6 inaddr1, inaddr2;
</span><br>
<span class="quotelev1">&gt; &lt;             /* Use temporary variables and memcpy's so that we don't
</span><br>
<span class="quotelev1">&gt; &lt;                run into bus errors on Solaris/SPARC */
</span><br>
<span class="quotelev1">&gt; &lt;             memcpy(&amp;inaddr1, addr1, sizeof(inaddr1));
</span><br>
<span class="quotelev1">&gt; &lt;             memcpy(&amp;inaddr2, addr2, sizeof(inaddr2));
</span><br>
<span class="quotelev1">&gt; &lt;             struct in6_addr *a6_1 = (struct in6_addr*) &amp;inaddr1.sin6_addr;
</span><br>
<span class="quotelev1">&gt; &lt;             struct in6_addr *a6_2 = (struct in6_addr*) &amp;inaddr2.sin6_addr;
</span><br>
<span class="quotelev1">&gt; ---
</span><br>
<span class="quotelev2">&gt;&gt;            const struct sockaddr_in6 *inaddr1 = (struct sockaddr_in6*) addr1;
</span><br>
<span class="quotelev2">&gt;&gt;            const struct sockaddr_in6 *inaddr2 = (struct sockaddr_in6*) addr2;
</span><br>
<span class="quotelev2">&gt;&gt;            struct in6_addr *a6_1 = (struct in6_addr*) &amp;inaddr1-&gt;sin6_addr;
</span><br>
<span class="quotelev2">&gt;&gt;            struct in6_addr *a6_2 = (struct in6_addr*) &amp;inaddr2-&gt;sin6_addr;
</span><br>
<span class="quotelev1">&gt; tyr openmpi-1.9a1r29972 167 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Now my debug information.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; tyr fd1026 52 cd /usr/local/openmpi-1.9_64_cc/bin/
</span><br>
<span class="quotelev1">&gt; tyr bin 53 /opt/solstudio12.3/bin/sparcv9/dbx ompi_info
</span><br>
<span class="quotelev1">&gt; For information about new features see `help changes'
</span><br>
<span class="quotelev1">&gt; To remove this message, put `dbxenv suppress_startup_message 7.9' in your .dbxrc
</span><br>
<span class="quotelev1">&gt; Reading ompi_info
</span><br>
<span class="quotelev1">&gt; Reading ld.so.1
</span><br>
<span class="quotelev1">&gt; Reading libmpi.so.0.0.0
</span><br>
<span class="quotelev1">&gt; Reading libopen-rte.so.0.0.0
</span><br>
<span class="quotelev1">&gt; Reading libopen-pal.so.0.0.0
</span><br>
<span class="quotelev1">&gt; Reading libsendfile.so.1
</span><br>
<span class="quotelev1">&gt; Reading libpicl.so.1
</span><br>
<span class="quotelev1">&gt; Reading libkstat.so.1
</span><br>
<span class="quotelev1">&gt; Reading liblgrp.so.1
</span><br>
<span class="quotelev1">&gt; Reading libsocket.so.1
</span><br>
<span class="quotelev1">&gt; Reading libnsl.so.1
</span><br>
<span class="quotelev1">&gt; Reading librt.so.1
</span><br>
<span class="quotelev1">&gt; Reading libm.so.2
</span><br>
<span class="quotelev1">&gt; Reading libthread.so.1
</span><br>
<span class="quotelev1">&gt; Reading libc.so.1
</span><br>
<span class="quotelev1">&gt; Reading libdoor.so.1
</span><br>
<span class="quotelev1">&gt; Reading libaio.so.1
</span><br>
<span class="quotelev1">&gt; Reading libmd.so.1
</span><br>
<span class="quotelev1">&gt; (dbx) run -a
</span><br>
<span class="quotelev1">&gt; Running: ompi_info -a 
</span><br>
<span class="quotelev1">&gt; (process id 10998)
</span><br>
<span class="quotelev1">&gt; Reading libc_psr.so.1
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt;    MCA compress: parameter &quot;compress_base_verbose&quot; (current value:
</span><br>
<span class="quotelev1">&gt;                  &quot;-1&quot;, data source: default, level: 8 dev/detail,
</span><br>
<span class="quotelev1">&gt;                  type: int)
</span><br>
<span class="quotelev1">&gt;                  Verbosity level for the compress framework (0 = no
</span><br>
<span class="quotelev1">&gt;                  verbosity)
</span><br>
<span class="quotelev1">&gt; t_at_1 (l_at_1) signal BUS (invalid address alignment) in var_value_string
</span><br>
<span class="quotelev1">&gt;  at line 1680 in file &quot;mca_base_var.c&quot;
</span><br>
<span class="quotelev1">&gt; 1680  ret = asprintf (value_string, var_type_formats[var-&gt;mbv_type],
</span><br>
<span class="quotelev1">&gt;  value[0]);
</span><br>
<span class="quotelev1">&gt; (dbx) 
</span><br>
<span class="quotelev1">&gt; (dbx) 
</span><br>
<span class="quotelev1">&gt; (dbx) check -all
</span><br>
<span class="quotelev1">&gt; dbx: warning: check -all will be turned on in the next run of the process
</span><br>
<span class="quotelev1">&gt; access checking - OFF
</span><br>
<span class="quotelev1">&gt; memuse checking - OFF
</span><br>
<span class="quotelev1">&gt; (dbx) run -a
</span><br>
<span class="quotelev1">&gt; Running: ompi_info -a 
</span><br>
<span class="quotelev1">&gt; (process id 11000)
</span><br>
<span class="quotelev1">&gt; Reading rtcapihook.so
</span><br>
<span class="quotelev1">&gt; Reading libdl.so.1
</span><br>
<span class="quotelev1">&gt; Reading rtcaudit.so
</span><br>
<span class="quotelev1">&gt; Reading libmapmalloc.so.1
</span><br>
<span class="quotelev1">&gt; Reading rtcboot.so
</span><br>
<span class="quotelev1">&gt; Reading librtc.so
</span><br>
<span class="quotelev1">&gt; Reading libmd_psr.so.1
</span><br>
<span class="quotelev1">&gt; RTC: Enabling Error Checking...
</span><br>
<span class="quotelev1">&gt; RTC: Using UltraSparc trap mechanism
</span><br>
<span class="quotelev1">&gt; RTC: See `help rtc showmap' and `help rtc limitations' for details.
</span><br>
<span class="quotelev1">&gt; RTC: Running program...
</span><br>
<span class="quotelev1">&gt; Read from uninitialized (rui) on thread 1:
</span><br>
<span class="quotelev1">&gt; Attempting to read 4 bytes at address 0xffffffff7fffd5f8
</span><br>
<span class="quotelev1">&gt;    which is 184 bytes above the current stack pointer
</span><br>
<span class="quotelev1">&gt; Variable is 'index'
</span><br>
<span class="quotelev1">&gt; t_at_1 (l_at_1) stopped in var_find at line 802 in file &quot;mca_base_var.c&quot;
</span><br>
<span class="quotelev1">&gt;  802       return (OPAL_SUCCESS != ret) ? ret : index;
</span><br>
<span class="quotelev1">&gt; (dbx) 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; In my opinion it is the same error as before.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I still get a Bus Error with &quot;make check&quot;.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; tyr bin 54 cd 
</span><br>
<span class="quotelev1">&gt; /export2/src/openmpi-1.9/openmpi-1.9a1r29972-SunOS.sparc.64_cc/test/datatype/.li
</span><br>
<span class="quotelev1">&gt; bs/
</span><br>
<span class="quotelev1">&gt; tyr .libs 55 /opt/solstudio12.3/bin/sparcv9/dbx ddt_raw
</span><br>
<span class="quotelev1">&gt; For information about new features see `help changes'
</span><br>
<span class="quotelev1">&gt; To remove this message, put `dbxenv suppress_startup_message 7.9' in your .dbxrc
</span><br>
<span class="quotelev1">&gt; Reading ddt_raw
</span><br>
<span class="quotelev1">&gt; Reading ld.so.1
</span><br>
<span class="quotelev1">&gt; Reading libmpi.so.0.0.0
</span><br>
<span class="quotelev1">&gt; Reading libopen-rte.so.0.0.0
</span><br>
<span class="quotelev1">&gt; Reading libopen-pal.so.0.0.0
</span><br>
<span class="quotelev1">&gt; Reading libsendfile.so.1
</span><br>
<span class="quotelev1">&gt; Reading libpicl.so.1
</span><br>
<span class="quotelev1">&gt; Reading libkstat.so.1
</span><br>
<span class="quotelev1">&gt; Reading liblgrp.so.1
</span><br>
<span class="quotelev1">&gt; Reading libsocket.so.1
</span><br>
<span class="quotelev1">&gt; Reading libnsl.so.1
</span><br>
<span class="quotelev1">&gt; Reading librt.so.1
</span><br>
<span class="quotelev1">&gt; Reading libm.so.2
</span><br>
<span class="quotelev1">&gt; Reading libthread.so.1
</span><br>
<span class="quotelev1">&gt; Reading libc.so.1
</span><br>
<span class="quotelev1">&gt; Reading libdoor.so.1
</span><br>
<span class="quotelev1">&gt; Reading libaio.so.1
</span><br>
<span class="quotelev1">&gt; Reading libmd.so.1
</span><br>
<span class="quotelev1">&gt; (dbx) run
</span><br>
<span class="quotelev1">&gt; Running: ddt_raw 
</span><br>
<span class="quotelev1">&gt; (process id 11018)
</span><br>
<span class="quotelev1">&gt; Reading libc_psr.so.1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #
</span><br>
<span class="quotelev1">&gt; * TEST INVERSED VECTOR
</span><br>
<span class="quotelev1">&gt; #
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; t_at_1 (l_at_1) signal BUS (invalid address alignment) in opal_convertor_raw
</span><br>
<span class="quotelev1">&gt;  at line 71 in file &quot;opal_convertor_raw.c&quot;
</span><br>
<span class="quotelev1">&gt;   71       DO_DEBUG( opal_output( 0, &quot;opal_convertor_raw( %p, {%p,
</span><br>
<span class="quotelev1">&gt;   %u}, %lu )\n&quot;, (void*)pConvertor,
</span><br>
<span class="quotelev1">&gt; (dbx) 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Once more I think it is the same error. I have the same problem with
</span><br>
<span class="quotelev1">&gt; my small program.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; tyr small_prog 62 mpicc init_finalize.c
</span><br>
<span class="quotelev1">&gt; tyr small_prog 63 /opt/solstudio12.3/bin/sparcv9/dbx \
</span><br>
<span class="quotelev1">&gt;  /usr/local/openmpi-1.9_64_cc/bin/mpiexec
</span><br>
<span class="quotelev1">&gt; For information about new features see `help changes'
</span><br>
<span class="quotelev1">&gt; To remove this message, put `dbxenv suppress_startup_message 7.9'
</span><br>
<span class="quotelev1">&gt;   in your .dbxrc
</span><br>
<span class="quotelev1">&gt; Reading mpiexec
</span><br>
<span class="quotelev1">&gt; Reading ld.so.1
</span><br>
<span class="quotelev1">&gt; Reading libopen-rte.so.0.0.0
</span><br>
<span class="quotelev1">&gt; Reading libopen-pal.so.0.0.0
</span><br>
<span class="quotelev1">&gt; Reading libsendfile.so.1
</span><br>
<span class="quotelev1">&gt; Reading libpicl.so.1
</span><br>
<span class="quotelev1">&gt; Reading libkstat.so.1
</span><br>
<span class="quotelev1">&gt; Reading liblgrp.so.1
</span><br>
<span class="quotelev1">&gt; Reading libsocket.so.1
</span><br>
<span class="quotelev1">&gt; Reading libnsl.so.1
</span><br>
<span class="quotelev1">&gt; Reading librt.so.1
</span><br>
<span class="quotelev1">&gt; Reading libm.so.2
</span><br>
<span class="quotelev1">&gt; Reading libthread.so.1
</span><br>
<span class="quotelev1">&gt; Reading libc.so.1
</span><br>
<span class="quotelev1">&gt; Reading libdoor.so.1
</span><br>
<span class="quotelev1">&gt; Reading libaio.so.1
</span><br>
<span class="quotelev1">&gt; Reading libmd.so.1
</span><br>
<span class="quotelev1">&gt; (dbx) 
</span><br>
<span class="quotelev1">&gt; (dbx) run -np 1 a.out
</span><br>
<span class="quotelev1">&gt; Running: mpiexec -np 1 a.out 
</span><br>
<span class="quotelev1">&gt; (process id 11050)
</span><br>
<span class="quotelev1">&gt; Reading libc_psr.so.1
</span><br>
<span class="quotelev1">&gt; Reading mca_shmem_mmap.so
</span><br>
<span class="quotelev1">&gt; Reading libmp.so.2
</span><br>
<span class="quotelev1">&gt; Reading libscf.so.1
</span><br>
<span class="quotelev1">&gt; Reading libuutil.so.1
</span><br>
<span class="quotelev1">&gt; Reading libgen.so.1
</span><br>
<span class="quotelev1">&gt; Reading mca_shmem_posix.so
</span><br>
<span class="quotelev1">&gt; Reading mca_shmem_sysv.so
</span><br>
<span class="quotelev1">&gt; Reading mca_ess_env.so
</span><br>
<span class="quotelev1">&gt; Reading mca_ess_hnp.so
</span><br>
<span class="quotelev1">&gt; Reading mca_ess_singleton.so
</span><br>
<span class="quotelev1">&gt; Reading mca_ess_tool.so
</span><br>
<span class="quotelev1">&gt; Reading mca_pstat_test.so
</span><br>
<span class="quotelev1">&gt; Reading mca_state_app.so
</span><br>
<span class="quotelev1">&gt; Reading mca_state_hnp.so
</span><br>
<span class="quotelev1">&gt; Reading mca_state_novm.so
</span><br>
<span class="quotelev1">&gt; Reading mca_state_orted.so
</span><br>
<span class="quotelev1">&gt; Reading mca_state_staged_hnp.so
</span><br>
<span class="quotelev1">&gt; Reading mca_state_staged_orted.so
</span><br>
<span class="quotelev1">&gt; Reading mca_state_tool.so
</span><br>
<span class="quotelev1">&gt; Reading mca_errmgr_default_app.so
</span><br>
<span class="quotelev1">&gt; Reading mca_errmgr_default_hnp.so
</span><br>
<span class="quotelev1">&gt; Reading mca_errmgr_default_orted.so
</span><br>
<span class="quotelev1">&gt; Reading mca_errmgr_default_tool.so
</span><br>
<span class="quotelev1">&gt; Reading mca_plm_rsh.so
</span><br>
<span class="quotelev1">&gt; Reading mca_oob_tcp.so
</span><br>
<span class="quotelev1">&gt; Reading mca_rml_oob.so
</span><br>
<span class="quotelev1">&gt; Reading mca_routed_binomial.so
</span><br>
<span class="quotelev1">&gt; Reading mca_routed_debruijn.so
</span><br>
<span class="quotelev1">&gt; Reading mca_routed_direct.so
</span><br>
<span class="quotelev1">&gt; Reading mca_routed_radix.so
</span><br>
<span class="quotelev1">&gt; Reading mca_db_hash.so
</span><br>
<span class="quotelev1">&gt; Reading mca_db_print.so
</span><br>
<span class="quotelev1">&gt; Reading mca_grpcomm_bad.so
</span><br>
<span class="quotelev1">&gt; Reading mca_ras_simulator.so
</span><br>
<span class="quotelev1">&gt; Reading mca_rmaps_lama.so
</span><br>
<span class="quotelev1">&gt; Reading mca_rmaps_mindist.so
</span><br>
<span class="quotelev1">&gt; Reading mca_rmaps_ppr.so
</span><br>
<span class="quotelev1">&gt; Reading mca_rmaps_rank_file.so
</span><br>
<span class="quotelev1">&gt; Reading mca_rmaps_resilient.so
</span><br>
<span class="quotelev1">&gt; Reading mca_rmaps_round_robin.so
</span><br>
<span class="quotelev1">&gt; Reading mca_rmaps_seq.so
</span><br>
<span class="quotelev1">&gt; Reading mca_rmaps_staged.so
</span><br>
<span class="quotelev1">&gt; Reading mca_odls_default.so
</span><br>
<span class="quotelev1">&gt; Reading mca_iof_hnp.so
</span><br>
<span class="quotelev1">&gt; Reading mca_iof_mr_hnp.so
</span><br>
<span class="quotelev1">&gt; Reading mca_iof_mr_orted.so
</span><br>
<span class="quotelev1">&gt; Reading mca_iof_orted.so
</span><br>
<span class="quotelev1">&gt; Reading mca_iof_tool.so
</span><br>
<span class="quotelev1">&gt; Reading mca_filem_raw.so
</span><br>
<span class="quotelev1">&gt; Reading mca_dfs_app.so
</span><br>
<span class="quotelev1">&gt; Reading mca_dfs_orted.so
</span><br>
<span class="quotelev1">&gt; Reading mca_dfs_test.so
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Now the program hangs.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ^Cdbx: warning: Interrupt ignored but forwarded to child.
</span><br>
<span class="quotelev1">&gt; t_at_1 (l_at_1) signal INT (Interrupt) in __pollsys at 0xffffffff7d5dc740
</span><br>
<span class="quotelev1">&gt; 0xffffffff7d5dc740: __pollsys+0x0004:   ta       %icc,0x0000000000000040
</span><br>
<span class="quotelev1">&gt; Current function is orterun
</span><br>
<span class="quotelev1">&gt; 1049           opal_event_loop(orte_event_base, OPAL_EVLOOP_ONCE);
</span><br>
<span class="quotelev1">&gt; (dbx) 
</span><br>
<span class="quotelev1">&gt; (dbx) 
</span><br>
<span class="quotelev1">&gt; (dbx) 
</span><br>
<span class="quotelev1">&gt; (dbx) check -all
</span><br>
<span class="quotelev1">&gt; dbx: warning: check -all will be turned on in the next run of the process
</span><br>
<span class="quotelev1">&gt; access checking - OFF
</span><br>
<span class="quotelev1">&gt; memuse checking - OFF
</span><br>
<span class="quotelev1">&gt; (dbx) run -np 1 a.out
</span><br>
<span class="quotelev1">&gt; Running: mpiexec -np 1 a.out 
</span><br>
<span class="quotelev1">&gt; (process id 11054)
</span><br>
<span class="quotelev1">&gt; Reading rtcapihook.so
</span><br>
<span class="quotelev1">&gt; Reading libdl.so.1
</span><br>
<span class="quotelev1">&gt; Reading rtcaudit.so
</span><br>
<span class="quotelev1">&gt; Reading libmapmalloc.so.1
</span><br>
<span class="quotelev1">&gt; Reading rtcboot.so
</span><br>
<span class="quotelev1">&gt; Reading librtc.so
</span><br>
<span class="quotelev1">&gt; Reading libmd_psr.so.1
</span><br>
<span class="quotelev1">&gt; RTC: Enabling Error Checking...
</span><br>
<span class="quotelev1">&gt; RTC: Using UltraSparc trap mechanism
</span><br>
<span class="quotelev1">&gt; RTC: See `help rtc showmap' and `help rtc limitations' for details.
</span><br>
<span class="quotelev1">&gt; RTC: Running program...
</span><br>
<span class="quotelev1">&gt; Read from uninitialized (rui) on thread 1:
</span><br>
<span class="quotelev1">&gt; Attempting to read 4 bytes at address 0xffffffff7fffd438
</span><br>
<span class="quotelev1">&gt;    which is 184 bytes above the current stack pointer
</span><br>
<span class="quotelev1">&gt; Variable is 'index'
</span><br>
<span class="quotelev1">&gt; t_at_1 (l_at_1) stopped in var_find at line 802 in file &quot;mca_base_var.c&quot;
</span><br>
<span class="quotelev1">&gt;  802       return (OPAL_SUCCESS != ret) ? ret : index;
</span><br>
<span class="quotelev1">&gt; (dbx) 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm sorry that you have so much trouble with me and Solaris. On the
</span><br>
<span class="quotelev1">&gt; other hand I still hope that you can solve the problem(s). Once more
</span><br>
<span class="quotelev1">&gt; thank you very much for your help in advance.
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
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13488.php">Ralph Castain: "Re: [OMPI devel] [EXTERNAL] Consequence of bind-to-core by default"</a>
<li><strong>Previous message:</strong> <a href="13486.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL] Consequence of bind-to-core by default"</a>
<li><strong>In reply to:</strong> <a href="13479.php">Siegmar Gross: "Re: [OMPI devel] Bus error with openmpi-1.7.4rc1 on Solaris"</a>
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

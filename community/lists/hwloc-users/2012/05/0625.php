<?
$subject_val = "Re: [hwloc-users] Blue Gene/Q support";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May  3 12:40:49 2012" -->
<!-- isoreceived="20120503164049" -->
<!-- sent="Thu, 03 May 2012 18:40:57 +0200" -->
<!-- isosent="20120503164057" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] Blue Gene/Q support" -->
<!-- id="be7791fa-e5ba-41f5-8807-eae4a82ba5db_at_email.android.com" -->
<!-- charset="utf-8" -->
<!-- inreplyto="CAGKz=uJE9tby6_FbxN176sXXM0SeNMfZ5Hj_ea7pescJn+EGUA_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [hwloc-users] Blue Gene/Q support<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-05-03 12:40:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0626.php">Christopher Samuel: "Re: [hwloc-users] Blue Gene/Q support"</a>
<li><strong>Previous message:</strong> <a href="0624.php">Jeff Hammond: "[hwloc-users] Blue Gene/Q support"</a>
<li><strong>In reply to:</strong> <a href="0624.php">Jeff Hammond: "[hwloc-users] Blue Gene/Q support"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0626.php">Christopher Samuel: "Re: [hwloc-users] Blue Gene/Q support"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
We're interested in getting bgq support but we'r&#195;&#169; not familiar with cnk at all. So if you know how to manipulate binding there, maybe helping you in adding cnk support would be easier ?
<br>
Btw, does lstopo work on the compute nodes ?
<br>
Brice
<br>
<p><p>Jeff Hammond &lt;jhammond_at_[hidden]&gt; a &#195;&#169;crit :
<br>
<p>Hi,
<br>
<p>I'm interested in seeing hwloc supported on Blue Gene/Q.
<br>
<p>As it is not listed on <a href="http://www.open-mpi.org/projects/hwloc/">http://www.open-mpi.org/projects/hwloc/</a> nor
<br>
does it use a standard operating system (although CNK is POSIX and
<br>
very Linux-like in general), I didn't have a reasonable expectation
<br>
that it would work without some development, but I verified that some
<br>
of the tests fail, just to be sure.
<br>
<p>Fortunately, almost all of the tests passed, except for glibc-sched
<br>
and hwloc_bind. I suspect this is due to the various
<br>
incompatibilities between glibc in CNK vs. Linux. The failure of both
<br>
tests occurs with XLC and GCC, although I report the details below for
<br>
XLC only.
<br>
<p>Should I report this as a bug? Is it sufficient to port to Blue
<br>
Gene/Q if I provide the kernel API calls related to thread location,
<br>
etc. or would any hwloc developers be interested in Blue Gene/Q access
<br>
for the purposes of development and testing?
<br>
<p>Thanks,
<br>
<p>Jeff
<br>
<p><p><p>[jhammond_at_cetuslac1 tests]$ ../configure
<br>
--prefix=/home/jhammond/HWLOC/hwloc-1.4.2rc1/install --enable-static
<br>
--disable-shared CC=bgxlc_r --host=powerpc64-bgq-linux
<br>
<p>==&gt; 16927.output &lt;==
<br>
<p>==&gt; 16927.cobaltlog &lt;==
<br>
/usr/bin/qsub.py -t 15 -n 1 --mode=c1 ./glibc-sched
<br>
<p>submitted with cwd set to: /veas_home/jhammond/HWLOC/hwloc-1.4.2rc1/build/tests
<br>
<p>Command: '/bgsys/drivers/ppcfloor/bin/runjob' '--np' '1'
<br>
'--ranks-per-node' '1' '--cwd'
<br>
'/veas_home/jhammond/HWLOC/hwloc-1.4.2rc1/build/tests' '--block'
<br>
'EAS-20040-31371-128' '--corner' 'R00-M1-N04-J09' '--shape'
<br>
'1x1x1x1x1' '--envs' 'COBALT_JOBID=16927' '--envs'
<br>
'BG_SHAREDMEMSIZE=32' '--verbose' '4' ':'
<br>
'/veas_home/jhammond/HWLOC/hwloc-1.4.2rc1/build/tests/./glibc-sched'
<br>
<p>Info: stdin received from /dev/null
<br>
Info: stdout sent to
<br>
/veas_home/jhammond/HWLOC/hwloc-1.4.2rc1/build/tests/16927.output
<br>
Info: stderr sent to
<br>
/veas_home/jhammond/HWLOC/hwloc-1.4.2rc1/build/tests/16927.error
<br>
<p>Job 16927/jhammond/19558: Block EAS-20040-31371-128 for location
<br>
EAS-31151-31151-1 already booted. Starting task for job 16927. (APG)
<br>
Info: task completed normally with an exit code of 134; initiating job
<br>
cleanup and removal
<br>
<p>==&gt; 16927.error &lt;==
<br>
2012-05-03 14:06:58.888 (INFO ) [0xfffac848a40]
<br>
EAS-20040-31371-128:1498:ibm.runjob.client.options.Parser: set local
<br>
socket to runjob_mux from properties file
<br>
2012-05-03 14:07:00.892 (INFO ) [0xfffac848a40]
<br>
EAS-20040-31371-128:34615:ibm.runjob.client.Job: job 34615 started
<br>
glibc-sched: ../../tests/glibc-sched.c:43: main: Assertion `!err' failed.
<br>
2012-05-03 14:07:02.772 (WARN ) [0xfffac848a40]
<br>
EAS-20040-31371-128:34615:ibm.runjob.client.Job: terminated by signal
<br>
6
<br>
2012-05-03 14:07:02.772 (WARN ) [0xfffac848a40]
<br>
EAS-20040-31371-128:34615:ibm.runjob.client.Job: abnormal termination
<br>
by signal 6 from rank 0
<br>
<p><p>==&gt; 16912.output &lt;==
<br>
system set is 0xffffffff,0xffffffff
<br>
Bind this singlethreaded process : FAILED (3, No such process)
<br>
<p>==&gt; 16912.cobaltlog &lt;==
<br>
/usr/bin/qsub.py -t 15 -n 1 --mode=c1 ./hwloc_bind
<br>
<p>submitted with cwd set to: /veas_home/jhammond/HWLOC/hwloc-1.4.2rc1/build/tests
<br>
<p>Command: '/bgsys/drivers/ppcfloor/bin/runjob' '--np' '1'
<br>
'--ranks-per-node' '1' '--cwd'
<br>
'/veas_home/jhammond/HWLOC/hwloc-1.4.2rc1/build/tests' '--block'
<br>
'EAS-20040-31371-128' '--corner' 'R00-M1-N04-J27' '--shape'
<br>
'1x1x1x1x1' '--envs' 'COBALT_JOBID=16912' '--envs'
<br>
'BG_SHAREDMEMSIZE=32' '--verbose' '4' ':'
<br>
'/veas_home/jhammond/HWLOC/hwloc-1.4.2rc1/build/tests/./hwloc_bind'
<br>
<p>Info: stdin received from /dev/null
<br>
Info: stdout sent to
<br>
/veas_home/jhammond/HWLOC/hwloc-1.4.2rc1/build/tests/16912.output
<br>
Info: stderr sent to
<br>
/veas_home/jhammond/HWLOC/hwloc-1.4.2rc1/build/tests/16912.error
<br>
<p>Job 16912/jhammond/19536: Block EAS-20040-31371-128 for location
<br>
EAS-20141-20141-1 already booted. Starting task for job 16912. (APG)
<br>
Info: task completed normally with an exit code of 134; initiating job
<br>
cleanup and removal
<br>
<p>==&gt; 16912.error &lt;==
<br>
2012-05-03 14:02:09.516 (INFO ) [0xfffb35c8a40]
<br>
EAS-20040-31371-128:31883:ibm.runjob.client.options.Parser: set local
<br>
socket to runjob_mux from properties file
<br>
2012-05-03 14:02:11.526 (INFO ) [0xfffb35c8a40]
<br>
EAS-20040-31371-128:34593:ibm.runjob.client.Job: job 34593 started
<br>
*** glibc detected ***
<br>
/veas_home/jhammond/HWLOC/hwloc-1.4.2rc1/build/tests/./hwloc_bind:
<br>
free(): invalid next size (fast): 0x00000019c5016b00 ***
<br>
======= Backtrace: =========
<br>
[0x103d398]
<br>
[0x1042ad8]
<br>
[0x1049800]
<br>
[0x101e178]
<br>
[0x101e220]
<br>
[0x1024520]
<br>
[0x1024974]
<br>
[0x1024ccc]
<br>
[0x1024eb0]
<br>
[0x1016478]
<br>
[0x10014a4]
<br>
[0x1001958]
<br>
[0x10260d8]
<br>
[0x10263d4]
<br>
======= Memory map: ========
<br>
10000000-10060000 r-xp 00000000 00:0f 1504118
<br>
/sbin/sysiod
<br>
10060000-10070000 rw-p 00050000 00:0f 1504118
<br>
/sbin/sysiod
<br>
10070000-10100000 rw-p 00000000 00:00 0 [heap]
<br>
fff90000000-fff90030000 rw-p 00000000 00:00 0
<br>
fff90030000-fff94000000 ---p 00000000 00:00 0
<br>
fff94c00000-fff94d00000 rw-p 00000000 00:00 0
<br>
fff95a00000-fff95a30000 rw-p 00000000 00:00 0
<br>
fff95a30000-fff95a40000 -w-s 3fcc48f0000 00:0e 11206
<br>
/dev/infiniband/uverbs0
<br>
fff95a40000-fff95a50000 -w-s 3fcc08f0000 00:0e 11206
<br>
/dev/infiniband/uverbs0
<br>
fff95a50000-fff95a60000 r-xp 00000000 00:0f 3369690
<br>
/usr/lib64/libbgvrnic-rdmav2.so
<br>
fff95a60000-fff95a70000 rw-p 00000000 00:0f 3369690
<br>
/usr/lib64/libbgvrnic-rdmav2.so
<br>
fff95a70000-fff95a80000 ---p 00000000 00:00 0
<br>
fff95a80000-fff96480000 rw-p 00000000 00:00 0
<br>
fff96480000-fff964b0000 r-xp 00000000 00:0f 3350116
<br>
/lib64/libselinux.so.1
<br>
fff964b0000-fff964c0000 r--p 00020000 00:0f 3350116
<br>
/lib64/libselinux.so.1
<br>
fff964c0000-fff964d0000 rw-p 00030000 00:0f 3350116
<br>
/lib64/libselinux.so.1
<br>
fff964d0000-fff96540000 r-xp 00000000 00:0f 2638150
<br>
/lib64/libfreebl3.so
<br>
fff96540000-fff96550000 r--p 00060000 00:0f 2638150
<br>
/lib64/libfreebl3.so
<br>
fff96550000-fff96560000 rw-p 00070000 00:0f 2638150
<br>
/lib64/libfreebl3.so
<br>
fff96560000-fff96570000 r-xp 00000000 00:0f 2939812
<br>
/lib64/libkeyutils.so.1.3
<br>
fff96570000-fff96580000 r--p 00000000 00:0f 2939812
<br>
/lib64/libkeyutils.so.1.3
<br>
fff96580000-fff96590000 rw-p 00010000 00:0f 2939812
<br>
/lib64/libkeyutils.so.1.3
<br>
fff96590000-fff965a0000 r-xp 00000000 00:0f 2924424
<br>
/lib64/libkrb5support.so.0.1
<br>
fff965a0000-fff965b0000 r--p 00000000 00:0f 2924424
<br>
/lib64/libkrb5support.so.0.1
<br>
fff965b0000-fff965c0000 rw-p 00010000 00:0f 2924424
<br>
/lib64/libkrb5support.so.0.1
<br>
fff965c0000-fff97510000 r-xp 00000000 00:0f 914026
<br>
/usr/lib64/libicudata.so.42.1
<br>
fff97510000-fff97520000 rw-p 00f40000 00:0f 914026
<br>
/usr/lib64/libicudata.so.42.1
<br>
fff97520000-fff97550000 r-xp 00000000 00:0f 1277798
<br>
/usr/lib64/libsasl2.so.2.0.23
<br>
fff97550000-fff97560000 r--p 00020000 00:0f 1277798
<br>
/usr/lib64/libsasl2.so.2.0.23
<br>
fff97560000-fff97570000 rw-p 00030000 00:0f 1277798
<br>
/usr/lib64/libsasl2.so.2.0.23
<br>
fff97570000-fff975d0000 r-xp 00000000 00:0f 1327117
<br>
/lib64/libnspr4.so
<br>
fff975d0000-fff975e0000 r--p 00050000 00:0f 1327117
<br>
/lib64/libnspr4.so
<br>
fff975e0000-fff975f0000 rw-p 00060000 00:0f 1327117
<br>
/lib64/libnspr4.so
<br>
fff975f0000-fff97600000 r-xp 00000000 00:0f 1250566
<br>
/lib64/libplc4.so
<br>
fff97600000-fff97610000 r--p 00000000 00:0f 1250566
<br>
/lib64/libplc4.so
<br>
fff97610000-fff97620000 rw-p 00010000 00:0f 1250566
<br>
/lib64/libplc4.so
<br>
fff97620000-fff97630000 r-xp 00000000 00:0f 2447916
<br>
/lib64/libplds4.so
<br>
fff97630000-fff97640000 r--p 00000000 00:0f 2447916
<br>
/lib64/libplds4.so
<br>
fff97640000-fff97650000 rw-p 00010000 00:0f 2447916
<br>
/lib64/libplds4.so
<br>
fff97650000-fff97680000 r-xp 00000000 00:0f 2121934
<br>
/usr/lib64/libnssutil3.so
<br>
fff97680000-fff97690000 r--p 00020000 00:0f 2121934
<br>
/usr/lib64/libnssutil3.so
<br>
fff97690000-fff976a0000 rw-p 00030000 00:0f 2121934
<br>
/usr/lib64/libnssutil3.so
<br>
fff976a0000-fff976b0000 rw-p 00000000 00:00 0
<br>
fff976b0000-fff97840000 r-xp 00000000 00:0f 811615
<br>
/usr/lib64/libnss3.so
<br>
fff97840000-fff97850000 r--p 00180000 00:0f 811615
<br>
/usr/lib64/libnss3.so
<br>
fff97850000-fff97860000 rw-p 00190000 00:0f 811615
<br>
/usr/lib64/libnss3.so
<br>
fff97860000-fff97870000 rw-p 00000000 00:00 0
<br>
fff97870000-fff978b0000 r-xp 00000000 00:0f 1001793
<br>
/usr/lib64/libsmime3.so
<br>
fff978b0000-fff978c0000 r--p 00030000 00:0f 1001793
<br>
/usr/lib64/libsmime3.so
<br>
fff978c0000-fff978d0000 rw-p 00040000 00:0f 1001793
<br>
/usr/lib64/libsmime3.so
<br>
fff978d0000-fff97920000 r-xp 00000000 00:0f 2769018
<br>
/usr/lib64/libssl3.so
<br>
fff97920000-fff97930000 r--p 00040000 00:0f 2769018
<br>
/usr/lib64/libssl3.so
<br>
fff97930000-fff97940000 rw-p 00050000 00:0f 2769018
<br>
/usr/lib64/libssl3.so
<br>
fff97940000-fff97960000 r-xp 00000000 00:0f 3219112
<br>
/lib64/libresolv-2.12.so
<br>
fff97960000-fff97970000 r--p 00010000 00:0f 3219112
<br>
/lib64/libresolv-2.12.so
<br>
fff97970000-fff97980000 rw-p 00020000 00:0f 3219112
<br>
/lib64/libresolv-2.12.so
<br>
fff97980000-fff97990000 r-xp 00000000 00:0f 822832
<br>
/lib64/libcrypt-2.12.so
<br>
fff97990000-fff979a0000 r--p 00000000 00:0f 822832
<br>
/lib64/libcrypt-2.12.so
<br>
fff979a0000-fff979b0000 rw-p 00010000 00:0f 822832
<br>
/lib64/libcrypt-2.12.so
<br>
fff979b0000-fff979d0000 rw-p 00000000 00:00 0
<br>
fff979d0000-fff979e0000 r-xp 00000000 00:0f 1327124
<br>
/lib64/libuuid.so.1.3.0
<br>
fff979e0000-fff979f0000 rw-p 00000000 00:0f 1327124
<br>
/lib64/libuuid.so.1.3.0
<br>
fff979f0000-fff97a10000 r-xp 00000000 00:0f 2029697
<br>
/lib64/libz.so.1.2.3
<br>
fff97a10000-fff97a20000 r--p 00010000 00:0f 2029697
<br>
/lib64/libz.so.1.2.3
<br>
fff97a20000-fff97a30000 rw-p 00020000 00:0f 2029697
<br>
/lib64/libz.so.1.2.3
<br>
fff97a30000-fff97c50000 r-xp 00000000 00:0f 2098005
<br>
/usr/lib64/libcrypto.so.1.0.0
<br>
fff97c50000-fff97c70000 r--p 00210000 00:0f 2098005
<br>
/usr/lib64/libcrypto.so.1.0.0
<br>
fff97c70000-fff97c90000 rw-p 00230000 00:0f 2098005
<br>
/usr/lib64/libcrypto.so.1.0.0
<br>
fff97c90000-fff97ca0000 rw-p 00000000 00:00 0
<br>
fff97ca0000-fff97ce0000 r-xp 00000000 00:0f 1250555
<br>
/lib64/libk5crypto.so.3.1
<br>
fff97ce0000-fff97cf0000 r--p 00030000 00:0f 1250555
<br>
/lib64/libk5crypto.so.3.1
<br>
fff97cf0000-fff97d00000 rw-p 00040000 00:0f 1250555
<br>
/lib64/libk5crypto.so.3.1
<br>
fff97d00000-fff97d10000 r-xp 00000000 00:0f 1327131
<br>
/lib64/libcom_err.so.2.1
<br>
fff97d10000-fff97d20000 r--p 00000000 00:0f 1327131
<br>
/lib64/libcom_err.so.2.1
<br>
fff97d20000-fff97d30000 rw-p 00010000 00:0f 1327131
<br>
/lib64/libcom_err.so.2.1
<br>
fff97d30000-fff97e40000 r-xp 00000000 00:0f 3350124
<br>
/lib64/libkrb5.so.3.3
<br>
fff97e40000-fff97e50000 r--p 00100000 00:0f 3350124
<br>
/lib64/libkrb5.so.3.3
<br>
fff97e50000-fff97e60000 rw-p 00110000 00:0f 3350124
<br>
/lib64/libkrb5.so.3.3
<br>
fff97e60000-fff97eb0000 r-xp 00000000 00:0f 1327132
<br>
/lib64/libgssapi_krb5.so.2.2
<br>
fff97eb0000-fff97ec0000 r--p 00040000 00:0f 1327132
<br>
/lib64/libgssapi_krb5.so.2.2
<br>
fff97ec0000-fff97ed0000 rw-p 00050000 00:0f 1327132
<br>
/lib64/libgssapi_krb5.so.2.2
<br>
fff97ed0000-fff980f0000 r-xp 00000000 00:0f 159290
<br>
/usr/lib64/libicui18n.so.42.1
<br>
fff980f0000-fff98120000 rw-p 00210000 00:0f 159290
<br>
/usr/lib64/libicui18n.so.42.1
<br>
fff98120000-fff982c0000 r-xp 00000000 00:0f 2142969
<br>
/usr/lib64/libicuuc.so.42.1
<br>
fff982c0000-fff982e0000 rw-p 001a0000 00:0f 2142969
<br>
/usr/lib64/libicuuc.so.42.1
<br>
fff982e0000-fff982f0000 r-xp 00000000 00:0f 1250562
<br>
/lib64/libdl-2.12.so
<br>
fff982f0000-fff98300000 r--p 00000000 00:0f 1250562
<br>
/lib64/libdl-2.12.so
<br>
fff98300000-fff98310000 rw-p 00010000 00:0f 1250562
<br>
/lib64/libdl-2.12.so
<br>
fff98310000-fff98350000 r-xp 00000000 00:0f 78455
<br>
/usr/lib64/libapr-1.so.0.3.9
<br>
fff98350000-fff98360000 rw-p 00040000 00:0f 78455
<br>
/usr/lib64/libapr-1.so.0.3.9
<br>
fff98360000-fff98530000 r-xp 00000000 00:0f 3221811
<br>
/lib64/libdb-4.7.so
<br>
fff98530000-fff98550000 rw-p 001d0000 00:0f 3221811
<br>
/lib64/libdb-4.7.so
<br>
fff98550000-fff98590000 r-xp 00000000 00:0f 3219122
<br>
/lib64/libexpat.so.1.5.2
<br>
fff98590000-fff985a0000 rw-p 00030000 00:0f 3219122
<br>
/lib64/libexpat.so.1.5.2
<br>
fff985a0000-fff985c0000 r-xp 00000000 00:0f 2029706
<br>
/lib64/liblber-2.4.so.2.5.6
<br>
fff985c0000-fff985d0000 r--p 00010000 00:0f 2029706
<br>
/lib64/liblber-2.4.so.2.5.6
<br>
fff985d0000-fff985e0000 rw-p 00020000 00:0f 2029706
<br>
/lib64/liblber-2.4.so.2.5.6
<br>
fff985e0000-fff98650000 r-xp 00000000 00:0f 1327127
<br>
/lib64/libldap-2.4.so.2.5.6
<br>
fff98650000-fff98660000 r--p 00060000 00:0f 1327127
<br>
/lib64/libldap-2.4.so.2.5.6
<br>
fff98660000-fff98670000 rw-p 00070000 00:0f 1327127
<br>
/lib64/libldap-2.4.so.2.5.6
<br>
fff98670000-fff986b0000 r-xp 00000000 00:0f 571721
<br>
/usr/lib64/libaprutil-1.so.0.3.9
<br>
fff986b0000-fff986c0000 rw-p 00030000 00:0f 571721
<br>
/usr/lib64/libaprutil-1.so.0.3.9
<br>
fff986c0000-fff986d0000 r-xp 00000000 00:0f 2632456
<br>
/lib64/librt-2.12.so
<br>
fff986d0000-fff986e0000 r--p 00000000 00:0f 2632456
<br>
/lib64/librt-2.12.so
<br>
fff986e0000-fff986f0000 rw-p 00010000 00:0f 2632456
<br>
/lib64/librt-2.12.so
<br>
fff986f0000-fff98760000 r-xp 00000000 00:0f 2078098
<br>
/usr/lib64/libssl.so.1.0.0
<br>
fff98760000-fff98770000 r--p 00060000 00:0f 2078098
<br>
/usr/lib64/libssl.so.1.0.0
<br>
fff98770000-fff98780000 rw-p 00070000 00:0f 2078098
<br>
/usr/lib64/libssl.so.1.0.0
<br>
fff98780000-fff988b0000 r-xp 00000000 00:0f 3397951
<br>
/usr/lib64/libboost_regex-mt.so.5
<br>
fff988b0000-fff988c0000 rw-p 00130000 00:0f 3397951
<br>
/usr/lib64/libboost_regex-mt.so.5
<br>
fff988c0000-fff988e0000 r-xp 00000000 00:0f 3135862
<br>
/usr/lib64/libboost_thread-mt.so.5
<br>
fff988e0000-fff988f0000 rw-p 00010000 00:0f 3135862
<br>
/usr/lib64/libboost_thread-mt.so.5
<br>
fff988f0000-fff98980000 r-xp 00000000 00:0f 784193
<br>
/usr/lib64/libboost_serialization-mt.so.5
<br>
fff98980000-fff98990000 rw-p 00080000 00:0f 784193
<br>
/usr/lib64/libboost_serialization-mt.so.5
<br>
fff98990000-fff989a0000 r-xp 00000000 00:0f 2912814
<br>
/usr/lib64/libmlx4-rdmav2.so
<br>
fff989a0000-fff989b0000 rw-p 00000000 00:0f 2912814
<br>
/usr/lib64/libmlx4-rdmav2.so
<br>
fff989b0000-fff989c0000 r-xp 00000000 00:0f 2213992
<br>
/usr/lib64/librdmacm.so.1.0.0
<br>
fff989c0000-fff989d0000 rw-p 00000000 00:0f 2213992
<br>
/usr/lib64/librdmacm.so.1.0.0
<br>
fff989d0000-fff989f0000 r-xp 00000000 00:0f 948700
<br>
/usr/lib64/libibverbs.so.1.0.0
<br>
fff989f0000-fff98a00000 rw-p 00010000 00:0f 948700
<br>
/usr/lib64/libibverbs.so.1.0.0
<br>
fff98a00000-fff98d60000 r-xp 00000000 00:0f 2989947
<br>
/lib/liblog4cxx.so.10.0.0
<br>
fff98d60000-fff98db0000 rw-p 00360000 00:0f 2989947
<br>
/lib/liblog4cxx.so.10.0.0
<br>
fff98db0000-fff98dc0000 rw-p 00000000 00:00 0
<br>
fff98dc0000-fff98f80000 r-xp 00000000 00:0f 76138
<br>
/lib64/libc-2.12.so
<br>
fff98f80000-fff98f90000 r--p 001b0000 00:0f 76138
<br>
/lib64/libc-2.12.so
<br>
fff98f90000-fff98fa0000 rw-p 001c0000 00:0f 76138
<br>
/lib64/libc-2.12.so
<br>
fff98fa0000-fff98fb0000 rw-p 00000000 00:00 0
<br>
fff98fb0000-fff98fd0000 r-xp 00000000 00:0f 3350121
<br>
/lib64/libpthread-2.12.so
<br>
fff98fd0000-fff98fe0000 r--p 00010000 00:0f 3350121
<br>
/lib64/libpthread-2.12.so
<br>
fff98fe0000-fff98ff0000 rw-p 00020000 00:0f 3350121
<br>
/lib64/libpthread-2.12.so
<br>
fff98ff0000-fff99010000 r-xp 00000000 00:0f 822834
<br>
/lib64/libgcc_s-4.4.6-20110824.so.1
<br>
fff99010000-fff99020000 rw-p 00010000 00:0f 822834
<br>
/lib64/libgcc_s-4.4.6-20110824.so.1
<br>
fff99020000-fff99100000 r-xp 00000000 00:0f 3219113
<br>
/lib64/libm-2.12.so
<br>
fff99100000-fff99110000 r--p 000d0000 00:0f 3219113
<br>
/lib64/libm-2.12.so
<br>
fff99110000-fff99120000 rw-p 000e0000 00:0f 3219113
<br>
/lib64/libm-2.12.so
<br>
fff99120000-fff99280000 r-xp 00000000 00:0f 2869896
<br>
/usr/lib64/libstdc++.so.6.0.13
<br>
fff99280000-fff99290000 r--p 00150000 00:0f 2869896
<br>
/usr/lib64/libstdc++.so.6.0.13
<br>
fff99290000-fff992a0000 rw-p 00160000 00:0f 2869896
<br>
/usr/lib64/libstdc++.so.6.0.13
<br>
fff992a0000-fff992c0000 rw-p 00000000 00:00 0
<br>
fff992c0000-fff99320000 r-xp 00000000 00:0f 1455532
<br>
/lib64/libbgcios.so.1.0.0
<br>
fff99320000-fff99330000 rw-p 00060000 00:0f 1455532
<br>
/lib64/libbgcios.so.1.0.0
<br>
fff99330000-fff99390000 r-xp 00000000 00:0f 2565847
<br>
/usr/lib64/libboost_program_options-mt.so.5
<br>
fff99390000-fff993a0000 rw-p 00060000 00:0f 2565847
<br>
/usr/lib64/libboost_program_options-mt.so.5
<br>
fff993a0000-fff993b0000 r-xp 00000000 00:0f 3263171
<br>
/usr/lib64/libboost_system-mt.so.5
<br>
fff993b0000-fff993c0000 rw-p 00000000 00:0f 3263171
<br>
/usr/lib64/libboost_system-mt.so.5
<br>
fff993c0000-fff99860000 r-xp 00000000 00:0f 2989944
<br>
/lib/libbgutility.so.1.0.0
<br>
fff99860000-fff99890000 rw-p 00490000 00:0f 2989944
<br>
/lib/libbgutility.so.1.0.0
<br>
fff99890000-fff998b0000 rw-p 00000000 00:00 0
<br>
fff998b0000-fff998d0000 r-xp 00000000 00:00 0 [vdso]
<br>
fff998d0000-fff99900000 r-xp 00000000 00:0f 2939827
<br>
/lib64/ld-2.12.so
<br>
fff99900000-fff99910000 r--p 00020000 00:0f 2939827
<br>
/lib64/ld-2.12.so
<br>
fff99910000-fff99920000 rw-p 00030000 00:0f 2939827
<br>
/lib64/ld-2.12.so
<br>
fffca310000-fffca460000 rw-p 00000000 00:00 0 [stack]
<br>
2012-05-03 14:02:13.391 (WARN ) [0xfffb35c8a40]
<br>
EAS-20040-31371-128:34593:ibm.runjob.client.Job: terminated by signal
<br>
6
<br>
2012-05-03 14:02:13.392 (WARN ) [0xfffb35c8a40]
<br>
EAS-20040-31371-128:34593:ibm.runjob.client.Job: abnormal termination
<br>
by signal 6 from rank 0
<br>
<p><p><p><pre>
-- 
Jeff Hammond
Argonne Leadership Computing Facility
University of Chicago Computation Institute
jhammond_at_[hidden] / (630) 252-5381
<a href="http://www.linkedin.com/in/jeffhammond">http://www.linkedin.com/in/jeffhammond</a>
<a href="https://wiki.alcf.anl.gov/parts/index.php/User:Jhammond">https://wiki.alcf.anl.gov/parts/index.php/User:Jhammond</a> (in-progress)
<a href="https://wiki.alcf.anl.gov/old/index.php/User:Jhammond">https://wiki.alcf.anl.gov/old/index.php/User:Jhammond</a> (deprecated)
<a href="https://wiki-old.alcf.anl.gov/index.php/User:Jhammond(deprecated">https://wiki-old.alcf.anl.gov/index.php/User:Jhammond(deprecated</a>)
_____________________________________________
hwloc-users mailing list
hwloc-users_at_[hidden]
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users</a>
</pre>
<p>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-users/att-0625/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0626.php">Christopher Samuel: "Re: [hwloc-users] Blue Gene/Q support"</a>
<li><strong>Previous message:</strong> <a href="0624.php">Jeff Hammond: "[hwloc-users] Blue Gene/Q support"</a>
<li><strong>In reply to:</strong> <a href="0624.php">Jeff Hammond: "[hwloc-users] Blue Gene/Q support"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0626.php">Christopher Samuel: "Re: [hwloc-users] Blue Gene/Q support"</a>
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

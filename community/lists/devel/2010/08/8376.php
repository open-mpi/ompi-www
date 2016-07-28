<?
$subject_val = "Re: [OMPI devel] 1.5rc5: opal_path_nfs test failure on GPFS filesystem";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Aug 26 06:14:10 2010" -->
<!-- isoreceived="20100826101410" -->
<!-- sent="Thu, 26 Aug 2010 15:43:58 +0530" -->
<!-- isosent="20100826101358" -->
<!-- name="Nysal Jan" -->
<!-- email="jnysal_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 1.5rc5: opal_path_nfs test failure on GPFS filesystem" -->
<!-- id="AANLkTi=6K9rFOxDK5tqhKaz0LOQJav7RC87Lsi3H+FyY_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4C74B75F.2060703_at_lbl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI devel] 1.5rc5: opal_path_nfs test failure on GPFS filesystem<br>
<strong>From:</strong> Nysal Jan (<em>jnysal_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-08-26 06:13:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8377.php">Rainer Keller: "Re: [OMPI devel] 1.5rc5: warning from gcc-4.0.1 on Mac OS 10.4.11 (x86 and ppc)"</a>
<li><strong>Previous message:</strong> <a href="8375.php">Sylvain Jeaugey: "Re: [OMPI devel] delivering SIGUSR2 to an ompi process"</a>
<li><strong>In reply to:</strong> <a href="8344.php">Paul H. Hargrove: "[OMPI devel] 1.5rc5: opal_path_nfs test failure on GPFS filesystem"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks for the report. Fixed in r23669 -
<br>
<a href="https://svn.open-mpi.org/trac/ompi/changeset/23669">https://svn.open-mpi.org/trac/ompi/changeset/23669</a>
<br>
I will file a CMR to move this to 1.5 branch
<br>
<p>--Nysal
<br>
<p>On Wed, Aug 25, 2010 at 11:55 AM, Paul H. Hargrove &lt;PHHargrove_at_[hidden]&gt;wrote:
<br>
<p><span class="quotelev1">&gt; Testing 1.5rc5 on Linux/PPC64 I get a test failure in &quot;make check&quot; that
</span><br>
<span class="quotelev1">&gt; probably relates to the GPFS filesystems used on this machine.  Not sure if
</span><br>
<span class="quotelev1">&gt; this is a serious error or just an annoyance:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; $  cat /etc/SuSE-release
</span><br>
<span class="quotelev1">&gt; SUSE Linux Enterprise Server 10 (ppc)
</span><br>
<span class="quotelev1">&gt; VERSION = 10
</span><br>
<span class="quotelev1">&gt; PATCHLEVEL = 3
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; $ uname -a
</span><br>
<span class="quotelev1">&gt; Linux login2 2.6.16.60-0.67.1-ppc64 #1 SMP Thu Aug 5 10:54:46 UTC 2010
</span><br>
<span class="quotelev1">&gt; ppc64 ppc64 ppc64 GNU/Linux
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; $ /lib64/libc.so.6
</span><br>
<span class="quotelev1">&gt; GNU C Library stable release version 2.4 (20090904), by Roland McGrath et
</span><br>
<span class="quotelev1">&gt; al.
</span><br>
<span class="quotelev1">&gt; Copyright (C) 2006 Free Software Foundation, Inc.
</span><br>
<span class="quotelev1">&gt; This is free software; see the source for copying conditions.
</span><br>
<span class="quotelev1">&gt; There is NO warranty; not even for MERCHANTABILITY or FITNESS FOR A
</span><br>
<span class="quotelev1">&gt; PARTICULAR PURPOSE.
</span><br>
<span class="quotelev1">&gt; Configured for ppc64-suse-linux.
</span><br>
<span class="quotelev1">&gt; Compiled by GNU CC version 4.1.2 20070115 (SUSE Linux).
</span><br>
<span class="quotelev1">&gt; Compiled on a Linux 2.6.16 system on 2009-09-04.
</span><br>
<span class="quotelev1">&gt; Available extensions:
</span><br>
<span class="quotelev1">&gt;       crypt add-on version 2.1 by Michael Glad and others
</span><br>
<span class="quotelev1">&gt;       GNU Libidn by Simon Josefsson
</span><br>
<span class="quotelev1">&gt;       GNU libio by Per Bothner
</span><br>
<span class="quotelev1">&gt;       NIS(YP)/NIS+ NSS modules 0.19 by Thorsten Kukuk
</span><br>
<span class="quotelev1">&gt;       Native POSIX Threads Library by Ulrich Drepper et al
</span><br>
<span class="quotelev1">&gt;       BIND-8.2.3-T5B
</span><br>
<span class="quotelev1">&gt; Thread-local storage support included.
</span><br>
<span class="quotelev1">&gt; For bug reporting instructions, please see:
</span><br>
<span class="quotelev1">&gt; &lt;<a href="http://www.gnu.org/software/libc/bugs.html">http://www.gnu.org/software/libc/bugs.html</a>&gt;.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; $ gcc -m64 --version
</span><br>
<span class="quotelev1">&gt; gcc (GCC) 4.1.2 20070115 (SUSE Linux)
</span><br>
<span class="quotelev1">&gt; Copyright (C) 2006 Free Software Foundation, Inc.
</span><br>
<span class="quotelev1">&gt; This is free software; see the source for copying conditions.  There is NO
</span><br>
<span class="quotelev1">&gt; warranty; not even for MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; $ mount | grep gpfs
</span><br>
<span class="quotelev1">&gt; /dev/surveyor_software on /gpfs/software type gpfs
</span><br>
<span class="quotelev1">&gt; (rw,mtime,dev=surveyor_software,autostart)
</span><br>
<span class="quotelev1">&gt; /dev/surveyor_home on /gpfs/home type gpfs
</span><br>
<span class="quotelev1">&gt; (rw,mtime,dev=surveyor_home,autostart)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; $ [path_to]/openmpi-1.5rc5/configure CC='gcc -m64' CXX='g++ -m64'
</span><br>
<span class="quotelev1">&gt; F77='gfortran -m64' FC='gfortran -m64'
</span><br>
<span class="quotelev1">&gt; [...]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; $ make
</span><br>
<span class="quotelev1">&gt; [...]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; $ make check
</span><br>
<span class="quotelev1">&gt; [...]
</span><br>
<span class="quotelev1">&gt; gmake[3]: Entering directory
</span><br>
<span class="quotelev1">&gt; `/gpfs/home/hargrove/tmp/openmpi-1.5rc5/BLD-64/test/util'
</span><br>
<span class="quotelev1">&gt;  CC     opal_path_nfs.o
</span><br>
<span class="quotelev1">&gt;  CCLD   opal_path_nfs
</span><br>
<span class="quotelev1">&gt; gmake[3]: Leaving directory
</span><br>
<span class="quotelev1">&gt; `/gpfs/home/hargrove/tmp/openmpi-1.5rc5/BLD-64/test/util'
</span><br>
<span class="quotelev1">&gt; gmake  check-TESTS
</span><br>
<span class="quotelev1">&gt; gmake[3]: Entering directory
</span><br>
<span class="quotelev1">&gt; `/gpfs/home/hargrove/tmp/openmpi-1.5rc5/BLD-64/test/util'
</span><br>
<span class="quotelev1">&gt; Failure : Mismatch: input &quot;/gpfs/software&quot;, expected:0 got:1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Failure : Mismatch: input &quot;/gpfs/home&quot;, expected:0 got:1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; SUPPORT: OMPI Test failed: opal_path_nfs() (2 of 17 failed)
</span><br>
<span class="quotelev1">&gt; FAIL: opal_path_nfs
</span><br>
<span class="quotelev1">&gt; ========================================================
</span><br>
<span class="quotelev1">&gt; 1 of 1 test failed
</span><br>
<span class="quotelev1">&gt; Please report to <a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>
</span><br>
<span class="quotelev1">&gt; ========================================================
</span><br>
<span class="quotelev1">&gt; [...]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Same error occurs when configure is run with no argument (yielding an ILP32
</span><br>
<span class="quotelev1">&gt; build).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This test does not exist in 1.4.3rc1.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Paul
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Paul H. Hargrove                          PHHargrove_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Future Technologies Group
</span><br>
<span class="quotelev1">&gt; HPC Research Department                   Tel: +1-510-495-2352
</span><br>
<span class="quotelev1">&gt; Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
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
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-8376/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8377.php">Rainer Keller: "Re: [OMPI devel] 1.5rc5: warning from gcc-4.0.1 on Mac OS 10.4.11 (x86 and ppc)"</a>
<li><strong>Previous message:</strong> <a href="8375.php">Sylvain Jeaugey: "Re: [OMPI devel] delivering SIGUSR2 to an ompi process"</a>
<li><strong>In reply to:</strong> <a href="8344.php">Paul H. Hargrove: "[OMPI devel] 1.5rc5: opal_path_nfs test failure on GPFS filesystem"</a>
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

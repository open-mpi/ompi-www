<?
$subject_val = "Re: [OMPI devel] basename: a faulty warning 'extra operand --test-name' in tests causes test-driver to fail";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jul 11 17:18:29 2013" -->
<!-- isoreceived="20130711211829" -->
<!-- sent="Thu, 11 Jul 2013 21:18:23 +0000" -->
<!-- isosent="20130711211823" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] basename: a faulty warning 'extra operand --test-name' in tests causes test-driver to fail" -->
<!-- id="EF66BBEB19BADC41AC8CCF5F684F07FC4F713C9F_at_xmb-rcd-x01.cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAHYyVz51QTvEaTWWQ=8KOkwgb5b8S4u6+Sv7WmYYQLTfPgB-Gw_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] basename: a faulty warning 'extra operand --test-name' in tests causes test-driver to fail<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-07-11 17:18:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12590.php">Vasiliy: "Re: [OMPI devel] basename: a faulty warning 'extra operand --test-name' in tests causes test-driver to fail"</a>
<li><strong>Previous message:</strong> <a href="12588.php">Shamis, Pavel: "Re: [OMPI devel] RFC: Dead code removal"</a>
<li><strong>In reply to:</strong> <a href="12584.php">Vasiliy: "[OMPI devel] Fwd: basename: a faulty warning 'extra operand --test-name' in tests causes test-driver to fail"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12590.php">Vasiliy: "Re: [OMPI devel] basename: a faulty warning 'extra operand --test-name' in tests causes test-driver to fail"</a>
<li><strong>Reply:</strong> <a href="12590.php">Vasiliy: "Re: [OMPI devel] basename: a faulty warning 'extra operand --test-name' in tests causes test-driver to fail"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'm not sure what you're saying -- isn't this an Automake bug?
<br>
<p>Or are you saying that we're doing something wrong in OMPI's Makefile.am's?
<br>
<p><p><p>On Jul 11, 2013, at 7:47 AM, Vasiliy &lt;testtest_2005_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; I've also tracked down that problem with 'test-driver'. Look at that:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; $ gdb --args /usr/bin/sh /usr/share/automake-1.14/test-driver
</span><br>
<span class="quotelev1">&gt; GNU gdb (GDB) 7.6.50.20130320-cvs
</span><br>
<span class="quotelev1">&gt; Copyright (C) 2013 Free Software Foundation, Inc.
</span><br>
<span class="quotelev1">&gt; License GPLv3+: GNU GPL version 3 or later &lt;<a href="http://gnu.org/licenses/gpl.html">http://gnu.org/licenses/gpl.html</a>&gt;
</span><br>
<span class="quotelev1">&gt; This is free software: you are free to change and redistribute it.
</span><br>
<span class="quotelev1">&gt; There is NO WARRANTY, to the extent permitted by law.  Type &quot;show copying&quot;
</span><br>
<span class="quotelev1">&gt; and &quot;show warranty&quot; for details.
</span><br>
<span class="quotelev1">&gt; This GDB was configured as &quot;x86_64-unknown-cygwin&quot;.
</span><br>
<span class="quotelev1">&gt; For bug reporting instructions, please see:
</span><br>
<span class="quotelev1">&gt; &lt;<a href="http://www.gnu.org/software/gdb/bugs/">http://www.gnu.org/software/gdb/bugs/</a>&gt;...
</span><br>
<span class="quotelev1">&gt; Reading symbols from /usr/bin/sh...Reading symbols from
</span><br>
<span class="quotelev1">&gt; /usr/lib/debug/usr/bin/sh.exe.dbg...done.
</span><br>
<span class="quotelev1">&gt; done.
</span><br>
<span class="quotelev1">&gt; (gdb) run
</span><br>
<span class="quotelev1">&gt; Starting program: /usr/bin/sh /usr/share/automake-1.14/test-driver
</span><br>
<span class="quotelev1">&gt; [New Thread 9900.0xc10]
</span><br>
<span class="quotelev1">&gt; [New Thread 9900.0x1bec]
</span><br>
<span class="quotelev1">&gt; [New Thread 9900.0xe38]
</span><br>
<span class="quotelev1">&gt; /usr/share/automake-1.14/test-driver: line 95: $log_file: ambiguous redirect
</span><br>
<span class="quotelev1">&gt; FAIL:
</span><br>
<span class="quotelev1">&gt; /usr/share/automake-1.14/test-driver: line 114: $trs_file: ambiguous redirect
</span><br>
<span class="quotelev1">&gt; /usr/share/automake-1.14/test-driver: line 115: $trs_file: ambiguous redirect
</span><br>
<span class="quotelev1">&gt; /usr/share/automake-1.14/test-driver: line 116: $trs_file: ambiguous redirect
</span><br>
<span class="quotelev1">&gt; /usr/share/automake-1.14/test-driver: line 117: $trs_file: ambiguous redirect
</span><br>
<span class="quotelev1">&gt; [Inferior 1 (process 9900) exited with code 01]
</span><br>
<span class="quotelev1">&gt; (gdb) quit
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; $ gdb --args /usr/bin/sh /usr/share/automake-1.14/test-driver --log-file=/tmp
</span><br>
<span class="quotelev1">&gt; GNU gdb (GDB) 7.6.50.20130320-cvs
</span><br>
<span class="quotelev1">&gt; Copyright (C) 2013 Free Software Foundation, Inc.
</span><br>
<span class="quotelev1">&gt; License GPLv3+: GNU GPL version 3 or later &lt;<a href="http://gnu.org/licenses/gpl.html">http://gnu.org/licenses/gpl.html</a>&gt;
</span><br>
<span class="quotelev1">&gt; This is free software: you are free to change and redistribute it.
</span><br>
<span class="quotelev1">&gt; There is NO WARRANTY, to the extent permitted by law.  Type &quot;show copying&quot;
</span><br>
<span class="quotelev1">&gt; and &quot;show warranty&quot; for details.
</span><br>
<span class="quotelev1">&gt; This GDB was configured as &quot;x86_64-unknown-cygwin&quot;.
</span><br>
<span class="quotelev1">&gt; For bug reporting instructions, please see:
</span><br>
<span class="quotelev1">&gt; &lt;<a href="http://www.gnu.org/software/gdb/bugs/">http://www.gnu.org/software/gdb/bugs/</a>&gt;...
</span><br>
<span class="quotelev1">&gt; Reading symbols from /usr/bin/sh...Reading symbols from
</span><br>
<span class="quotelev1">&gt; /usr/lib/debug/usr/bin/sh.exe.dbg...done.
</span><br>
<span class="quotelev1">&gt; done.
</span><br>
<span class="quotelev1">&gt; (gdb) run
</span><br>
<span class="quotelev1">&gt; Starting program: /usr/bin/sh /usr/share/automake-1.14/test-driver
</span><br>
<span class="quotelev1">&gt; --log-file=/tmp
</span><br>
<span class="quotelev1">&gt; [New Thread 2164.0x164c]
</span><br>
<span class="quotelev1">&gt; [New Thread 2164.0x24a4]
</span><br>
<span class="quotelev1">&gt; [New Thread 2164.0x2550]
</span><br>
<span class="quotelev1">&gt; /usr/share/automake-1.14/test-driver: invalid option: '--log-file=/tmp'
</span><br>
<span class="quotelev1">&gt; [New Thread 2164.0x19d4]
</span><br>
<span class="quotelev1">&gt; Usage:
</span><br>
<span class="quotelev1">&gt;  test-driver --test-name=NAME --log-file=PATH --trs-file=PATH
</span><br>
<span class="quotelev1">&gt;              [--expect-failure={yes|no}] [--color-tests={yes|no}]
</span><br>
<span class="quotelev1">&gt;              [--enable-hard-errors={yes|no}] [--] TEST-SCRIPT
</span><br>
<span class="quotelev1">&gt; The '--test-name', '--log-file' and '--trs-file' options are mandatory.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; So, there is a problem with 'test-driver' either because a testsuite
</span><br>
<span class="quotelev1">&gt; does not provide --test-name=NAME or because --log-file=/tmp or
</span><br>
<span class="quotelev1">&gt; --log-file=/tmp/delme is wrongly considered an invalid option. It
</span><br>
<span class="quotelev1">&gt; applies to automake 1.13 as well.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Could an Open MPI Team suggest if we could change that behavior, or,
</span><br>
<span class="quotelev1">&gt; at least, make omitting --test-name not so critical?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ---------- Forwarded message ----------
</span><br>
<span class="quotelev1">&gt; From: Vasiliy
</span><br>
<span class="quotelev1">&gt; Date: Thu, Jul 11, 2013 at 1:31 PM
</span><br>
<span class="quotelev1">&gt; Subject: basename: a faulty warning 'extra operand --test-name' in
</span><br>
<span class="quotelev1">&gt; tests causes test-driver to fail
</span><br>
<span class="quotelev1">&gt; To: Open MPI Developers
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; upon inspecting:
</span><br>
<span class="quotelev1">&gt; $ /usr/share/automake-1.14/test-driver --help
</span><br>
<span class="quotelev1">&gt; Usage:
</span><br>
<span class="quotelev1">&gt;  test-driver --test-name=NAME --log-file=PATH --trs-file=PATH
</span><br>
<span class="quotelev1">&gt;              [--expect-failure={yes|no}] [--color-tests={yes|no}]
</span><br>
<span class="quotelev1">&gt;              [--enable-hard-errors={yes|no}] [--] TEST-SCRIPT
</span><br>
<span class="quotelev1">&gt; The '--test-name', '--log-file' and '--trs-file' options are mandatory.
</span><br>
<span class="quotelev1">&gt; &lt;code&gt;
</span><br>
<span class="quotelev1">&gt; make  check-TESTS
</span><br>
<span class="quotelev1">&gt; make[1]: Entering directory
</span><br>
<span class="quotelev1">&gt; '/usr/src/64bit/release/openmpi/openmpi-1.9.0-a1/build/test/asm'
</span><br>
<span class="quotelev1">&gt; make[2]: Entering directory
</span><br>
<span class="quotelev1">&gt; '/usr/src/64bit/release/openmpi/openmpi-1.9.0-a1/build/test/asm'
</span><br>
<span class="quotelev1">&gt; basename: extra operand `--test-name'
</span><br>
<span class="quotelev1">&gt; Try `basename --help' for more information.
</span><br>
<span class="quotelev1">&gt; --&gt; Testing
</span><br>
<span class="quotelev1">&gt; basename: extra operand `--test-name'
</span><br>
<span class="quotelev1">&gt; Try `basename --help' for more information.
</span><br>
<span class="quotelev1">&gt; --&gt; Testing
</span><br>
<span class="quotelev1">&gt; basename: extra operand `--test-name'
</span><br>
<span class="quotelev1">&gt; Try `basename --help' for more information.
</span><br>
<span class="quotelev1">&gt; --&gt; Testing
</span><br>
<span class="quotelev1">&gt; basename: extra operand `--test-name'
</span><br>
<span class="quotelev1">&gt; Try `basename --help' for more information.
</span><br>
<span class="quotelev1">&gt; --&gt; Testing
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /usr/src/64bit/release/openmpi/openmpi-1.9.0-a1/src/openmpi-1.9.0/config/test-driver:
</span><br>
<span class="quotelev1">&gt; line 95:  &lt;PID&gt; Segmentation fault      (core dumped) &quot;$@&quot; &gt; $log_file
</span><br>
<span class="quotelev1">&gt; 2&gt;&amp;1
</span><br>
<span class="quotelev1">&gt; &lt;/code&gt;
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
<li><strong>Next message:</strong> <a href="12590.php">Vasiliy: "Re: [OMPI devel] basename: a faulty warning 'extra operand --test-name' in tests causes test-driver to fail"</a>
<li><strong>Previous message:</strong> <a href="12588.php">Shamis, Pavel: "Re: [OMPI devel] RFC: Dead code removal"</a>
<li><strong>In reply to:</strong> <a href="12584.php">Vasiliy: "[OMPI devel] Fwd: basename: a faulty warning 'extra operand --test-name' in tests causes test-driver to fail"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12590.php">Vasiliy: "Re: [OMPI devel] basename: a faulty warning 'extra operand --test-name' in tests causes test-driver to fail"</a>
<li><strong>Reply:</strong> <a href="12590.php">Vasiliy: "Re: [OMPI devel] basename: a faulty warning 'extra operand --test-name' in tests causes test-driver to fail"</a>
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

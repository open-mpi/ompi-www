<?
$subject_val = "[OMPI devel] Fwd: basename: a faulty warning 'extra operand --test-name' in tests causes test-driver to fail";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jul 11 07:47:27 2013" -->
<!-- isoreceived="20130711114727" -->
<!-- sent="Thu, 11 Jul 2013 13:47:23 +0200" -->
<!-- isosent="20130711114723" -->
<!-- name="Vasiliy" -->
<!-- email="testtest_2005_at_[hidden]" -->
<!-- subject="[OMPI devel] Fwd: basename: a faulty warning 'extra operand --test-name' in tests causes test-driver to fail" -->
<!-- id="CAHYyVz51QTvEaTWWQ=8KOkwgb5b8S4u6+Sv7WmYYQLTfPgB-Gw_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CAHYyVz7=2=k=YCsrDWKwQxtJmRssu5Ouad0BWDHnn=YM5Pbc6w_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI devel] Fwd: basename: a faulty warning 'extra operand --test-name' in tests causes test-driver to fail<br>
<strong>From:</strong> Vasiliy (<em>testtest_2005_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-07-11 07:47:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12585.php">marco atzeri: "Re: [OMPI devel] Fwd: basename: a faulty warning 'extra operand --test-name' in tests causes test-driver to fail"</a>
<li><strong>Previous message:</strong> <a href="12583.php">Vasiliy: "[OMPI devel] basename: a faulty warning 'extra operand --test-name' in tests causes test-driver to fail"</a>
<li><strong>In reply to:</strong> <a href="12583.php">Vasiliy: "[OMPI devel] basename: a faulty warning 'extra operand --test-name' in tests causes test-driver to fail"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12585.php">marco atzeri: "Re: [OMPI devel] Fwd: basename: a faulty warning 'extra operand --test-name' in tests causes test-driver to fail"</a>
<li><strong>Reply:</strong> <a href="12585.php">marco atzeri: "Re: [OMPI devel] Fwd: basename: a faulty warning 'extra operand --test-name' in tests causes test-driver to fail"</a>
<li><strong>Reply:</strong> <a href="12589.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] basename: a faulty warning 'extra operand --test-name' in tests causes test-driver to fail"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I've also tracked down that problem with 'test-driver'. Look at that:
<br>
<p>$ gdb --args /usr/bin/sh /usr/share/automake-1.14/test-driver
<br>
GNU gdb (GDB) 7.6.50.20130320-cvs
<br>
Copyright (C) 2013 Free Software Foundation, Inc.
<br>
License GPLv3+: GNU GPL version 3 or later &lt;<a href="http://gnu.org/licenses/gpl.html">http://gnu.org/licenses/gpl.html</a>&gt;
<br>
This is free software: you are free to change and redistribute it.
<br>
There is NO WARRANTY, to the extent permitted by law.  Type &quot;show copying&quot;
<br>
and &quot;show warranty&quot; for details.
<br>
This GDB was configured as &quot;x86_64-unknown-cygwin&quot;.
<br>
For bug reporting instructions, please see:
<br>
&lt;<a href="http://www.gnu.org/software/gdb/bugs/">http://www.gnu.org/software/gdb/bugs/</a>&gt;...
<br>
Reading symbols from /usr/bin/sh...Reading symbols from
<br>
/usr/lib/debug/usr/bin/sh.exe.dbg...done.
<br>
done.
<br>
(gdb) run
<br>
Starting program: /usr/bin/sh /usr/share/automake-1.14/test-driver
<br>
[New Thread 9900.0xc10]
<br>
[New Thread 9900.0x1bec]
<br>
[New Thread 9900.0xe38]
<br>
/usr/share/automake-1.14/test-driver: line 95: $log_file: ambiguous redirect
<br>
FAIL:
<br>
/usr/share/automake-1.14/test-driver: line 114: $trs_file: ambiguous redirect
<br>
/usr/share/automake-1.14/test-driver: line 115: $trs_file: ambiguous redirect
<br>
/usr/share/automake-1.14/test-driver: line 116: $trs_file: ambiguous redirect
<br>
/usr/share/automake-1.14/test-driver: line 117: $trs_file: ambiguous redirect
<br>
[Inferior 1 (process 9900) exited with code 01]
<br>
(gdb) quit
<br>
<p>$ gdb --args /usr/bin/sh /usr/share/automake-1.14/test-driver --log-file=/tmp
<br>
GNU gdb (GDB) 7.6.50.20130320-cvs
<br>
Copyright (C) 2013 Free Software Foundation, Inc.
<br>
License GPLv3+: GNU GPL version 3 or later &lt;<a href="http://gnu.org/licenses/gpl.html">http://gnu.org/licenses/gpl.html</a>&gt;
<br>
This is free software: you are free to change and redistribute it.
<br>
There is NO WARRANTY, to the extent permitted by law.  Type &quot;show copying&quot;
<br>
and &quot;show warranty&quot; for details.
<br>
This GDB was configured as &quot;x86_64-unknown-cygwin&quot;.
<br>
For bug reporting instructions, please see:
<br>
&lt;<a href="http://www.gnu.org/software/gdb/bugs/">http://www.gnu.org/software/gdb/bugs/</a>&gt;...
<br>
Reading symbols from /usr/bin/sh...Reading symbols from
<br>
/usr/lib/debug/usr/bin/sh.exe.dbg...done.
<br>
done.
<br>
(gdb) run
<br>
Starting program: /usr/bin/sh /usr/share/automake-1.14/test-driver
<br>
--log-file=/tmp
<br>
[New Thread 2164.0x164c]
<br>
[New Thread 2164.0x24a4]
<br>
[New Thread 2164.0x2550]
<br>
/usr/share/automake-1.14/test-driver: invalid option: '--log-file=/tmp'
<br>
[New Thread 2164.0x19d4]
<br>
Usage:
<br>
&nbsp;&nbsp;test-driver --test-name=NAME --log-file=PATH --trs-file=PATH
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[--expect-failure={yes|no}] [--color-tests={yes|no}]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[--enable-hard-errors={yes|no}] [--] TEST-SCRIPT
<br>
The '--test-name', '--log-file' and '--trs-file' options are mandatory.
<br>
<p>So, there is a problem with 'test-driver' either because a testsuite
<br>
does not provide --test-name=NAME or because --log-file=/tmp or
<br>
--log-file=/tmp/delme is wrongly considered an invalid option. It
<br>
applies to automake 1.13 as well.
<br>
<p>Could an Open MPI Team suggest if we could change that behavior, or,
<br>
at least, make omitting --test-name not so critical?
<br>
<p><p>---------- Forwarded message ----------
<br>
From: Vasiliy
<br>
Date: Thu, Jul 11, 2013 at 1:31 PM
<br>
Subject: basename: a faulty warning 'extra operand --test-name' in
<br>
tests causes test-driver to fail
<br>
To: Open MPI Developers
<br>
<p><p>upon inspecting:
<br>
$ /usr/share/automake-1.14/test-driver --help
<br>
Usage:
<br>
&nbsp;&nbsp;test-driver --test-name=NAME --log-file=PATH --trs-file=PATH
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[--expect-failure={yes|no}] [--color-tests={yes|no}]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[--enable-hard-errors={yes|no}] [--] TEST-SCRIPT
<br>
The '--test-name', '--log-file' and '--trs-file' options are mandatory.
<br>
&lt;code&gt;
<br>
make  check-TESTS
<br>
make[1]: Entering directory
<br>
'/usr/src/64bit/release/openmpi/openmpi-1.9.0-a1/build/test/asm'
<br>
make[2]: Entering directory
<br>
'/usr/src/64bit/release/openmpi/openmpi-1.9.0-a1/build/test/asm'
<br>
basename: extra operand `--test-name'
<br>
Try `basename --help' for more information.
<br>
--&gt; Testing
<br>
basename: extra operand `--test-name'
<br>
Try `basename --help' for more information.
<br>
--&gt; Testing
<br>
basename: extra operand `--test-name'
<br>
Try `basename --help' for more information.
<br>
--&gt; Testing
<br>
basename: extra operand `--test-name'
<br>
Try `basename --help' for more information.
<br>
--&gt; Testing
<br>
&nbsp;...
<br>
<p>/usr/src/64bit/release/openmpi/openmpi-1.9.0-a1/src/openmpi-1.9.0/config/test-driver:
<br>
line 95:  &lt;PID&gt; Segmentation fault      (core dumped) &quot;$@&quot; &gt; $log_file
<br>
2&gt;&amp;1
<br>
&lt;/code&gt;
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12585.php">marco atzeri: "Re: [OMPI devel] Fwd: basename: a faulty warning 'extra operand --test-name' in tests causes test-driver to fail"</a>
<li><strong>Previous message:</strong> <a href="12583.php">Vasiliy: "[OMPI devel] basename: a faulty warning 'extra operand --test-name' in tests causes test-driver to fail"</a>
<li><strong>In reply to:</strong> <a href="12583.php">Vasiliy: "[OMPI devel] basename: a faulty warning 'extra operand --test-name' in tests causes test-driver to fail"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12585.php">marco atzeri: "Re: [OMPI devel] Fwd: basename: a faulty warning 'extra operand --test-name' in tests causes test-driver to fail"</a>
<li><strong>Reply:</strong> <a href="12585.php">marco atzeri: "Re: [OMPI devel] Fwd: basename: a faulty warning 'extra operand --test-name' in tests causes test-driver to fail"</a>
<li><strong>Reply:</strong> <a href="12589.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] basename: a faulty warning 'extra operand --test-name' in tests causes test-driver to fail"</a>
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

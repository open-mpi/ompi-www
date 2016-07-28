<?
$subject_val = "Re: [OMPI devel] basename: a faulty warning 'extra operand --test-name' in tests causes test-driver to fail";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jul 12 08:26:11 2013" -->
<!-- isoreceived="20130712122611" -->
<!-- sent="Fri, 12 Jul 2013 12:26:05 +0000" -->
<!-- isosent="20130712122605" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] basename: a faulty warning 'extra operand --test-name' in tests causes test-driver to fail" -->
<!-- id="EF66BBEB19BADC41AC8CCF5F684F07FC4F7156C4_at_xmb-rcd-x01.cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAHYyVz6uEeXOZbddC_ktv8W2G=pXuonpt3aA4CNBrkf+fxqyKA_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2013-07-12 08:26:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12592.php">Vasiliy: "Re: [OMPI devel] basename: a faulty warning 'extra operand --test-name' in tests causes test-driver to fail"</a>
<li><strong>Previous message:</strong> <a href="12590.php">Vasiliy: "Re: [OMPI devel] basename: a faulty warning 'extra operand --test-name' in tests causes test-driver to fail"</a>
<li><strong>In reply to:</strong> <a href="12590.php">Vasiliy: "Re: [OMPI devel] basename: a faulty warning 'extra operand --test-name' in tests causes test-driver to fail"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12592.php">Vasiliy: "Re: [OMPI devel] basename: a faulty warning 'extra operand --test-name' in tests causes test-driver to fail"</a>
<li><strong>Reply:</strong> <a href="12592.php">Vasiliy: "Re: [OMPI devel] basename: a faulty warning 'extra operand --test-name' in tests causes test-driver to fail"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'm sorry, I'm still unclear what you're trying to tell us.  :-(
<br>
<p>1. What version of Open MPI are you testing?  If you're testing Open MPI 1.6.x with very new Automake, I'm not surprised that there's some failures.  We usually pick the newest GNU Autotools when we begin a release series, and then stick with those tool versions for the life of that series.  We do not attempt to forward-port to newer Autotools on that series, meaning that sometimes newer versions of the Autotools will break the builds of that series.  That's ok.
<br>
<p>2. Assumedly, you're seeing this failure when you run &quot;make check&quot;.  Is that correct?  What test, exactly, is failing?  It's very difficult to grok what you're reporting when you only include the last few lines of output, which exclude the majority of the context that we need to know what you're talking about.
<br>
<p>Your bug reports have been *extremely* helpful in cleaning out some old kruft from our tree, but could you include more context in the future?  E.g., include all the &quot;compile problems&quot; items from here:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>
<br>
<p>3. We don't have a test named &quot;basename&quot; or &quot;test-driver&quot;; basename is usually an OS utility, and test-driver is part of the new Automake testing framework.  If there's a mistake in how these are being invoked, it's coming from Automake, and you should report the bug to them.  
<br>
<p>...unless we're doing something wrong in our Makefile.am's in how we list the tests to be run.  Is that what you're saying?
<br>
<p><p>On Jul 12, 2013, at 3:59 AM, Vasiliy &lt;testtest_2005_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Oh, sorry. It is an Automake bug in terms of reacting to the
</span><br>
<span class="quotelev1">&gt; --log-file option, but 'basename' tells also it does not understand /
</span><br>
<span class="quotelev1">&gt; do not pass --test-name to 'test-driver', which, in turn, triggers the
</span><br>
<span class="quotelev1">&gt; above failure for yet another reason. So, it is combined.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Thu, Jul 11, 2013 at 11:18 PM, Jeff Squyres (jsquyres)
</span><br>
<span class="quotelev1">&gt; &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; I'm not sure what you're saying -- isn't this an Automake bug?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Or are you saying that we're doing something wrong in OMPI's Makefile.am's?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Jul 11, 2013, at 7:47 AM, Vasiliy &lt;testtest_2005_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I've also tracked down that problem with 'test-driver'. Look at that:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; $ gdb --args /usr/bin/sh /usr/share/automake-1.14/test-driver
</span><br>
<span class="quotelev3">&gt;&gt;&gt; GNU gdb (GDB) 7.6.50.20130320-cvs
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Copyright (C) 2013 Free Software Foundation, Inc.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; License GPLv3+: GNU GPL version 3 or later &lt;<a href="http://gnu.org/licenses/gpl.html">http://gnu.org/licenses/gpl.html</a>&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; This is free software: you are free to change and redistribute it.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; There is NO WARRANTY, to the extent permitted by law.  Type &quot;show copying&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; and &quot;show warranty&quot; for details.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; This GDB was configured as &quot;x86_64-unknown-cygwin&quot;.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; For bug reporting instructions, please see:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &lt;<a href="http://www.gnu.org/software/gdb/bugs/">http://www.gnu.org/software/gdb/bugs/</a>&gt;...
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Reading symbols from /usr/bin/sh...Reading symbols from
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /usr/lib/debug/usr/bin/sh.exe.dbg...done.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; done.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (gdb) run
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Starting program: /usr/bin/sh /usr/share/automake-1.14/test-driver
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [New Thread 9900.0xc10]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [New Thread 9900.0x1bec]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [New Thread 9900.0xe38]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /usr/share/automake-1.14/test-driver: line 95: $log_file: ambiguous redirect
</span><br>
<span class="quotelev3">&gt;&gt;&gt; FAIL:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /usr/share/automake-1.14/test-driver: line 114: $trs_file: ambiguous redirect
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /usr/share/automake-1.14/test-driver: line 115: $trs_file: ambiguous redirect
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /usr/share/automake-1.14/test-driver: line 116: $trs_file: ambiguous redirect
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /usr/share/automake-1.14/test-driver: line 117: $trs_file: ambiguous redirect
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [Inferior 1 (process 9900) exited with code 01]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (gdb) quit
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; $ gdb --args /usr/bin/sh /usr/share/automake-1.14/test-driver --log-file=/tmp
</span><br>
<span class="quotelev3">&gt;&gt;&gt; GNU gdb (GDB) 7.6.50.20130320-cvs
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Copyright (C) 2013 Free Software Foundation, Inc.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; License GPLv3+: GNU GPL version 3 or later &lt;<a href="http://gnu.org/licenses/gpl.html">http://gnu.org/licenses/gpl.html</a>&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; This is free software: you are free to change and redistribute it.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; There is NO WARRANTY, to the extent permitted by law.  Type &quot;show copying&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; and &quot;show warranty&quot; for details.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; This GDB was configured as &quot;x86_64-unknown-cygwin&quot;.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; For bug reporting instructions, please see:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &lt;<a href="http://www.gnu.org/software/gdb/bugs/">http://www.gnu.org/software/gdb/bugs/</a>&gt;...
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Reading symbols from /usr/bin/sh...Reading symbols from
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /usr/lib/debug/usr/bin/sh.exe.dbg...done.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; done.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (gdb) run
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Starting program: /usr/bin/sh /usr/share/automake-1.14/test-driver
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --log-file=/tmp
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [New Thread 2164.0x164c]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [New Thread 2164.0x24a4]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [New Thread 2164.0x2550]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /usr/share/automake-1.14/test-driver: invalid option: '--log-file=/tmp'
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [New Thread 2164.0x19d4]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Usage:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; test-driver --test-name=NAME --log-file=PATH --trs-file=PATH
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             [--expect-failure={yes|no}] [--color-tests={yes|no}]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             [--enable-hard-errors={yes|no}] [--] TEST-SCRIPT
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The '--test-name', '--log-file' and '--trs-file' options are mandatory.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; So, there is a problem with 'test-driver' either because a testsuite
</span><br>
<span class="quotelev3">&gt;&gt;&gt; does not provide --test-name=NAME or because --log-file=/tmp or
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --log-file=/tmp/delme is wrongly considered an invalid option. It
</span><br>
<span class="quotelev3">&gt;&gt;&gt; applies to automake 1.13 as well.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Could an Open MPI Team suggest if we could change that behavior, or,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; at least, make omitting --test-name not so critical?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ---------- Forwarded message ----------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; From: Vasiliy
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Date: Thu, Jul 11, 2013 at 1:31 PM
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subject: basename: a faulty warning 'extra operand --test-name' in
</span><br>
<span class="quotelev3">&gt;&gt;&gt; tests causes test-driver to fail
</span><br>
<span class="quotelev3">&gt;&gt;&gt; To: Open MPI Developers
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; upon inspecting:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; $ /usr/share/automake-1.14/test-driver --help
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Usage:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; test-driver --test-name=NAME --log-file=PATH --trs-file=PATH
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             [--expect-failure={yes|no}] [--color-tests={yes|no}]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             [--enable-hard-errors={yes|no}] [--] TEST-SCRIPT
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The '--test-name', '--log-file' and '--trs-file' options are mandatory.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &lt;code&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; make  check-TESTS
</span><br>
<span class="quotelev3">&gt;&gt;&gt; make[1]: Entering directory
</span><br>
<span class="quotelev3">&gt;&gt;&gt; '/usr/src/64bit/release/openmpi/openmpi-1.9.0-a1/build/test/asm'
</span><br>
<span class="quotelev3">&gt;&gt;&gt; make[2]: Entering directory
</span><br>
<span class="quotelev3">&gt;&gt;&gt; '/usr/src/64bit/release/openmpi/openmpi-1.9.0-a1/build/test/asm'
</span><br>
<span class="quotelev3">&gt;&gt;&gt; basename: extra operand `--test-name'
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Try `basename --help' for more information.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --&gt; Testing
</span><br>
<span class="quotelev3">&gt;&gt;&gt; basename: extra operand `--test-name'
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Try `basename --help' for more information.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --&gt; Testing
</span><br>
<span class="quotelev3">&gt;&gt;&gt; basename: extra operand `--test-name'
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Try `basename --help' for more information.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --&gt; Testing
</span><br>
<span class="quotelev3">&gt;&gt;&gt; basename: extra operand `--test-name'
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Try `basename --help' for more information.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --&gt; Testing
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ...
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /usr/src/64bit/release/openmpi/openmpi-1.9.0-a1/src/openmpi-1.9.0/config/test-driver:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; line 95:  &lt;PID&gt; Segmentation fault      (core dumped) &quot;$@&quot; &gt; $log_file
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 2&gt;&amp;1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &lt;/code&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt;&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
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
<li><strong>Next message:</strong> <a href="12592.php">Vasiliy: "Re: [OMPI devel] basename: a faulty warning 'extra operand --test-name' in tests causes test-driver to fail"</a>
<li><strong>Previous message:</strong> <a href="12590.php">Vasiliy: "Re: [OMPI devel] basename: a faulty warning 'extra operand --test-name' in tests causes test-driver to fail"</a>
<li><strong>In reply to:</strong> <a href="12590.php">Vasiliy: "Re: [OMPI devel] basename: a faulty warning 'extra operand --test-name' in tests causes test-driver to fail"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12592.php">Vasiliy: "Re: [OMPI devel] basename: a faulty warning 'extra operand --test-name' in tests causes test-driver to fail"</a>
<li><strong>Reply:</strong> <a href="12592.php">Vasiliy: "Re: [OMPI devel] basename: a faulty warning 'extra operand --test-name' in tests causes test-driver to fail"</a>
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

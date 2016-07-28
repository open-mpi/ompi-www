<?
$subject_val = "Re: [OMPI devel] basename: a faulty warning 'extra operand --test-name' in tests causes test-driver to fail";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jul 12 15:30:58 2013" -->
<!-- isoreceived="20130712193058" -->
<!-- sent="Fri, 12 Jul 2013 21:30:54 +0200" -->
<!-- isosent="20130712193054" -->
<!-- name="Vasiliy" -->
<!-- email="testtest_2005_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] basename: a faulty warning 'extra operand --test-name' in tests causes test-driver to fail" -->
<!-- id="CAHYyVz5MKzuRasU2cBp8JUw064xRsRCujbm-kRkFJapPqJwM7g_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CAHYyVz5SQ6ofYrB4e7Oix0dzGqxc+PZ_kcAdqs8yJ6TNx=NwPQ_at_mail.gmail.com" -->
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
<strong>From:</strong> Vasiliy (<em>testtest_2005_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-07-12 15:30:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12594.php">Vasiliy: "Re: [OMPI devel] basename: a faulty warning 'extra operand --test-name' in tests causes test-driver to fail"</a>
<li><strong>Previous message:</strong> <a href="12592.php">Vasiliy: "Re: [OMPI devel] basename: a faulty warning 'extra operand --test-name' in tests causes test-driver to fail"</a>
<li><strong>In reply to:</strong> <a href="12592.php">Vasiliy: "Re: [OMPI devel] basename: a faulty warning 'extra operand --test-name' in tests causes test-driver to fail"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12594.php">Vasiliy: "Re: [OMPI devel] basename: a faulty warning 'extra operand --test-name' in tests causes test-driver to fail"</a>
<li><strong>Reply:</strong> <a href="12594.php">Vasiliy: "Re: [OMPI devel] basename: a faulty warning 'extra operand --test-name' in tests causes test-driver to fail"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I've just gone through a test suite, and in 'test/asm/run_tests' there
<br>
is a statement:
<br>
<p>progname=&quot;`basename $*`&quot;
<br>
<p>where '--test-name' could accidentally get in, causing the reported
<br>
issues, since 'basename' does not have such an option. Somebody
<br>
familiar with a test suite may want to look into it.
<br>
<p>On Fri, Jul 12, 2013 at 5:17 PM, Vasiliy &lt;testtest_2005_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; Sorry again, my report was a stub because I didn't have enough time to
</span><br>
<span class="quotelev1">&gt; investigate the issue. Due to the verbose level was set to zero, I've
</span><br>
<span class="quotelev1">&gt; assumed from the log that 'basename' belongs to the Open MPI source
</span><br>
<span class="quotelev1">&gt; whereas it is not. Thank you for drawing my attention it's actually a
</span><br>
<span class="quotelev1">&gt; utility from 'coreutils' Cygwin package. I'll report it to their team.
</span><br>
<span class="quotelev1">&gt; I've also filed a report with Automake's team about their part.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1. I'm testing the Open MPI SVN patched source, that is, 1.9a1-svn
</span><br>
<span class="quotelev1">&gt; with the latest autotools assembled from their git/svn sources, and my
</span><br>
<span class="quotelev1">&gt; humble patches, yet have to be polished.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2. Indeed, I'm running 'make check' when seeing those failures.
</span><br>
<span class="quotelev1">&gt; Unfortunately, that failure with 'test-driver' obscures how many (how
</span><br>
<span class="quotelev1">&gt; less), if any, true tests have been failed. I've just run it now on
</span><br>
<span class="quotelev1">&gt; the latest sources (bzw, there's still an old rot with 'trace.c') and,
</span><br>
<span class="quotelev1">&gt; if I could manage to make 'test-drive' working, it passes *ALL* the
</span><br>
<span class="quotelev1">&gt; tests, except those with bogus 'test-drive' crashes, that is:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; atomic_spinlock_noinline.exe
</span><br>
<span class="quotelev1">&gt; atomic_cmpset_noinline.exe
</span><br>
<span class="quotelev1">&gt; atomic_math_noinline.exe
</span><br>
<span class="quotelev1">&gt; atomic_spinlock_noinline.exe
</span><br>
<span class="quotelev1">&gt; atomic_cmpset_noinline.exe
</span><br>
<span class="quotelev1">&gt; atomic_spinlock_noinline.exe
</span><br>
<span class="quotelev1">&gt; atomic_math_noinline.exe
</span><br>
<span class="quotelev1">&gt; atomic_cmpset_noinline.exe
</span><br>
<span class="quotelev1">&gt; atomic_spinlock_noinline.exe
</span><br>
<span class="quotelev1">&gt; atomic_math_noinline.exe
</span><br>
<span class="quotelev1">&gt; atomic_spinlock_noinline.exe
</span><br>
<span class="quotelev1">&gt; atomic_cmpset_noinline.exe
</span><br>
<span class="quotelev1">&gt; atomic_math_noinline.exe
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Clearly, they're inline/noinline issues, need to be looked into at
</span><br>
<span class="quotelev1">&gt; some time later.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I can now give a feedback why I've got early reported warning about
</span><br>
<span class="quotelev1">&gt; the shared libraries which haven't got created, and a blowout of
</span><br>
<span class="quotelev1">&gt; 'undefined symbols'. Indeed, that was a problem with Makefile.am's.
</span><br>
<span class="quotelev1">&gt; I've tested just two from about a hundred of other successfully
</span><br>
<span class="quotelev1">&gt; compiled static libraries, which DSO counterparts weren't created upon
</span><br>
<span class="quotelev1">&gt; compilation process, though being requested to:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; - 'ompi/datatype's Makefile compiles 'libdatatype' without very much
</span><br>
<span class="quotelev1">&gt; needed 'libopen-pal' and 'libmpi' libraries, what causes a shared
</span><br>
<span class="quotelev1">&gt; library not to be created because of undefined symbols; bzw, even if
</span><br>
<span class="quotelev1">&gt; added to the libtool (v2.4.2-374) invocation command line they are
</span><br>
<span class="quotelev1">&gt; still not being produced, gcc doesn't have this kind of a problem;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; - 'ompi/debuggers's Makefile does not make a 'libompi_dbg_msgq.dll.a'
</span><br>
<span class="quotelev1">&gt; import library (though there is a shared library), the corresponding
</span><br>
<span class="quotelev1">&gt; part has to be created manually;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I haven't checked other 95's.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Fri, Jul 12, 2013 at 2:26 PM, Jeff Squyres (jsquyres)
</span><br>
<span class="quotelev1">&gt; &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; I'm sorry, I'm still unclear what you're trying to tell us.  :-(
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 1. What version of Open MPI are you testing?  If you're testing Open MPI 1.6.x with very new Automake, I'm not surprised that there's some failures.  We usually pick the newest GNU Autotools when we begin a release series, and then stick with those tool versions for the life of that series.  We do not attempt to forward-port to newer Autotools on that series, meaning that sometimes newer versions of the Autotools will break the builds of that series.  That's ok.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 2. Assumedly, you're seeing this failure when you run &quot;make check&quot;.  Is that correct?  What test, exactly, is failing?  It's very difficult to grok what you're reporting when you only include the last few lines of output, which exclude the majority of the context that we need to know what you're talking about.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Your bug reports have been *extremely* helpful in cleaning out some old kruft from our tree, but could you include more context in the future?  E.g., include all the &quot;compile problems&quot; items from here:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     <a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 3. We don't have a test named &quot;basename&quot; or &quot;test-driver&quot;; basename is usually an OS utility, and test-driver is part of the new Automake testing framework.  If there's a mistake in how these are being invoked, it's coming from Automake, and you should report the bug to them.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ...unless we're doing something wrong in our Makefile.am's in how we list the tests to be run.  Is that what you're saying?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Jul 12, 2013, at 3:59 AM, Vasiliy &lt;testtest_2005_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Oh, sorry. It is an Automake bug in terms of reacting to the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --log-file option, but 'basename' tells also it does not understand /
</span><br>
<span class="quotelev3">&gt;&gt;&gt; do not pass --test-name to 'test-driver', which, in turn, triggers the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; above failure for yet another reason. So, it is combined.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Thu, Jul 11, 2013 at 11:18 PM, Jeff Squyres (jsquyres)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I'm not sure what you're saying -- isn't this an Automake bug?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Or are you saying that we're doing something wrong in OMPI's Makefile.am's?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Jul 11, 2013, at 7:47 AM, Vasiliy &lt;testtest_2005_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I've also tracked down that problem with 'test-driver'. Look at that:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; $ gdb --args /usr/bin/sh /usr/share/automake-1.14/test-driver
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; GNU gdb (GDB) 7.6.50.20130320-cvs
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Copyright (C) 2013 Free Software Foundation, Inc.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; License GPLv3+: GNU GPL version 3 or later &lt;<a href="http://gnu.org/licenses/gpl.html">http://gnu.org/licenses/gpl.html</a>&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; This is free software: you are free to change and redistribute it.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; There is NO WARRANTY, to the extent permitted by law.  Type &quot;show copying&quot;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; and &quot;show warranty&quot; for details.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; This GDB was configured as &quot;x86_64-unknown-cygwin&quot;.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; For bug reporting instructions, please see:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &lt;<a href="http://www.gnu.org/software/gdb/bugs/">http://www.gnu.org/software/gdb/bugs/</a>&gt;...
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Reading symbols from /usr/bin/sh...Reading symbols from
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; /usr/lib/debug/usr/bin/sh.exe.dbg...done.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; done.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; (gdb) run
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Starting program: /usr/bin/sh /usr/share/automake-1.14/test-driver
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [New Thread 9900.0xc10]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [New Thread 9900.0x1bec]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [New Thread 9900.0xe38]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; /usr/share/automake-1.14/test-driver: line 95: $log_file: ambiguous redirect
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; FAIL:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; /usr/share/automake-1.14/test-driver: line 114: $trs_file: ambiguous redirect
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; /usr/share/automake-1.14/test-driver: line 115: $trs_file: ambiguous redirect
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; /usr/share/automake-1.14/test-driver: line 116: $trs_file: ambiguous redirect
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; /usr/share/automake-1.14/test-driver: line 117: $trs_file: ambiguous redirect
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [Inferior 1 (process 9900) exited with code 01]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; (gdb) quit
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; $ gdb --args /usr/bin/sh /usr/share/automake-1.14/test-driver --log-file=/tmp
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; GNU gdb (GDB) 7.6.50.20130320-cvs
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Copyright (C) 2013 Free Software Foundation, Inc.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; License GPLv3+: GNU GPL version 3 or later &lt;<a href="http://gnu.org/licenses/gpl.html">http://gnu.org/licenses/gpl.html</a>&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; This is free software: you are free to change and redistribute it.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; There is NO WARRANTY, to the extent permitted by law.  Type &quot;show copying&quot;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; and &quot;show warranty&quot; for details.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; This GDB was configured as &quot;x86_64-unknown-cygwin&quot;.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; For bug reporting instructions, please see:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &lt;<a href="http://www.gnu.org/software/gdb/bugs/">http://www.gnu.org/software/gdb/bugs/</a>&gt;...
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Reading symbols from /usr/bin/sh...Reading symbols from
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; /usr/lib/debug/usr/bin/sh.exe.dbg...done.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; done.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; (gdb) run
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Starting program: /usr/bin/sh /usr/share/automake-1.14/test-driver
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; --log-file=/tmp
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [New Thread 2164.0x164c]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [New Thread 2164.0x24a4]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [New Thread 2164.0x2550]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; /usr/share/automake-1.14/test-driver: invalid option: '--log-file=/tmp'
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [New Thread 2164.0x19d4]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Usage:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; test-driver --test-name=NAME --log-file=PATH --trs-file=PATH
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;             [--expect-failure={yes|no}] [--color-tests={yes|no}]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;             [--enable-hard-errors={yes|no}] [--] TEST-SCRIPT
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; The '--test-name', '--log-file' and '--trs-file' options are mandatory.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; So, there is a problem with 'test-driver' either because a testsuite
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; does not provide --test-name=NAME or because --log-file=/tmp or
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; --log-file=/tmp/delme is wrongly considered an invalid option. It
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; applies to automake 1.13 as well.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Could an Open MPI Team suggest if we could change that behavior, or,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; at least, make omitting --test-name not so critical?
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; ---------- Forwarded message ----------
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; From: Vasiliy
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Date: Thu, Jul 11, 2013 at 1:31 PM
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Subject: basename: a faulty warning 'extra operand --test-name' in
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; tests causes test-driver to fail
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; To: Open MPI Developers
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; upon inspecting:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; $ /usr/share/automake-1.14/test-driver --help
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Usage:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; test-driver --test-name=NAME --log-file=PATH --trs-file=PATH
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;             [--expect-failure={yes|no}] [--color-tests={yes|no}]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;             [--enable-hard-errors={yes|no}] [--] TEST-SCRIPT
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; The '--test-name', '--log-file' and '--trs-file' options are mandatory.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &lt;code&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; make  check-TESTS
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; make[1]: Entering directory
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; '/usr/src/64bit/release/openmpi/openmpi-1.9.0-a1/build/test/asm'
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; make[2]: Entering directory
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; '/usr/src/64bit/release/openmpi/openmpi-1.9.0-a1/build/test/asm'
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; basename: extra operand `--test-name'
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Try `basename --help' for more information.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; --&gt; Testing
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; basename: extra operand `--test-name'
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Try `basename --help' for more information.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; --&gt; Testing
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; basename: extra operand `--test-name'
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Try `basename --help' for more information.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; --&gt; Testing
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; basename: extra operand `--test-name'
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Try `basename --help' for more information.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; --&gt; Testing
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; ...
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; /usr/src/64bit/release/openmpi/openmpi-1.9.0-a1/src/openmpi-1.9.0/config/test-driver:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; line 95:  &lt;PID&gt; Segmentation fault      (core dumped) &quot;$@&quot; &gt; $log_file
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 2&gt;&amp;1
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &lt;/code&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12594.php">Vasiliy: "Re: [OMPI devel] basename: a faulty warning 'extra operand --test-name' in tests causes test-driver to fail"</a>
<li><strong>Previous message:</strong> <a href="12592.php">Vasiliy: "Re: [OMPI devel] basename: a faulty warning 'extra operand --test-name' in tests causes test-driver to fail"</a>
<li><strong>In reply to:</strong> <a href="12592.php">Vasiliy: "Re: [OMPI devel] basename: a faulty warning 'extra operand --test-name' in tests causes test-driver to fail"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12594.php">Vasiliy: "Re: [OMPI devel] basename: a faulty warning 'extra operand --test-name' in tests causes test-driver to fail"</a>
<li><strong>Reply:</strong> <a href="12594.php">Vasiliy: "Re: [OMPI devel] basename: a faulty warning 'extra operand --test-name' in tests causes test-driver to fail"</a>
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

<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Aug 24 13:54:49 2006" -->
<!-- isoreceived="20060824175449" -->
<!-- sent="Thu, 24 Aug 2006 13:53:02 -0400" -->
<!-- isosent="20060824175302" -->
<!-- name="Dave Rogers" -->
<!-- email="wantye_at_[hidden]" -->
<!-- subject="[OMPI devel] Buffer Overflow Error" -->
<!-- id="2205580d0608241053j1e6078b7h2bb036c5a1f15377_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>From:</strong> Dave Rogers (<em>wantye_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-08-24 13:53:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1012.php">Brian Barrett: "[OMPI devel] LANL ORTE todo / milestones"</a>
<li><strong>Previous message:</strong> <a href="1010.php">Adrian Knoth: "[OMPI devel] First IPv6 communication with ORTE"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1022.php">Brian Barrett: "Re: [OMPI devel] Buffer Overflow Error"</a>
<li><strong>Reply:</strong> <a href="1022.php">Brian Barrett: "Re: [OMPI devel] Buffer Overflow Error"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I just compiled the latest version on my machine and ran a dumb test -
<br>
mpirun without any arguments.
<br>
This generated a buffer overflow error!
<br>
<p>Error message (reproducible with different mem. addr.s):
<br>
[ /home/dave/rpmbuild ] $ mpirun
<br>
*** buffer overflow detected ***: mpirun terminated
<br>
======= Backtrace: =========
<br>
/lib64/libc.so.6(__chk_fail+0x2f)[0x31669dee3f]
<br>
/lib64/libc.so.6[0x31669de69b]
<br>
/lib64/libc.so.6(__snprintf_chk+0x7b)[0x31669de56b]
<br>
/usr/lib64/libopal.so.0(opal_cmd_line_get_usage_msg+0x20a)[0x2aaaaac1088a]
<br>
mpirun[0x403c53]
<br>
mpirun(orterun+0xa0)[0x402798]
<br>
mpirun(main+0x1b)[0x4026f3]
<br>
/lib64/libc.so.6(__libc_start_main+0xf4)[0x316691d084]
<br>
mpirun[0x402649]
<br>
======= Memory map: ========
<br>
00400000-00408000 r-xp 00000000 09:01 2697992
<br>
/usr/bin/orterun
<br>
...
<br>
7fff20e92000-7fff20ea8000 rw-p 7fff20e92000 00:00 0
<br>
[stack]
<br>
ffffffffff600000-ffffffffffe00000 ---p 00000000 00:00 0
<br>
[vdso]
<br>
Aborted
<br>
<p>Installation details: System: FC5 AMD Opteron x86_64
<br>
downloaded SRPM version 1.1.1
<br>
<p>rpm -ivh /usr/local/src/dist/libs/openmpi-1.1-1.src.rpm
<br>
rpmbuild -ba SPECS/openmpi-1.1.spec --target x86_64
<br>
&nbsp;- generates an error from check-rpaths stating that the /usr/lib64 prefix
<br>
is unnecessary and may cause problems
<br>
QA_RPATHS=$[ 0x0001|0x0010 ] rpmbuild -ba SPECS/openmpi-1.1.spec --target
<br>
x86_64
<br>
&nbsp;- suggessted workaround - ignores as warnings
<br>
rpm -ivh ~dave/rpmbuild/RPMS/x86_64/openmpi-1.1-1.x86_64.rpm
<br>
&nbsp;- generates a package conflict -- file /usr/lib64/libopal.so from install
<br>
of openmpi-1.1-1 conflicts with file from package opal-2.2.1-1
<br>
&nbsp;- apparently, this comes from opal, the open phone abstraction library...
<br>
so I uninstalled opal
<br>
rpm -ivh ~dave/rpmbuild/RPMS/x86_64/openmpi-1.1-1.x86_64.rpm
<br>
&nbsp;- worked!
<br>
<p>The strange thing is that mpirun with normal arguments works as expected
<br>
without any sorts of mem. errors.
<br>
mpirun with flags -h or --help also buffer overflows, but not mpirun with an
<br>
unrecognized argument, to which it spits out a &quot;you must specify how many
<br>
processes to launch, via the -np argument.&quot; error.
<br>
<p>I hope this gets fixed soon, buffer overflows are potential security
<br>
vulnerabilities.
<br>
<p>~ David Rogers
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-1011/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1012.php">Brian Barrett: "[OMPI devel] LANL ORTE todo / milestones"</a>
<li><strong>Previous message:</strong> <a href="1010.php">Adrian Knoth: "[OMPI devel] First IPv6 communication with ORTE"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1022.php">Brian Barrett: "Re: [OMPI devel] Buffer Overflow Error"</a>
<li><strong>Reply:</strong> <a href="1022.php">Brian Barrett: "Re: [OMPI devel] Buffer Overflow Error"</a>
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

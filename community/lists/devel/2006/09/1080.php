<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Sep 25 11:46:35 2006" -->
<!-- isoreceived="20060925154635" -->
<!-- sent="Mon, 25 Sep 2006 09:46:31 -0600" -->
<!-- isosent="20060925154631" -->
<!-- name="Brian Barrett" -->
<!-- email="brbarret_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Buffer Overflow Error" -->
<!-- id="1159199191.24956.17.camel_at_boxtop.lanl.gov" -->
<!-- inreplyto="1157061409.17883.44.camel_at_boxtop.lanl.gov" -->
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
<strong>From:</strong> Brian Barrett (<em>brbarret_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-09-25 11:46:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1081.php">Jeff Squyres: "Re: [OMPI devel] btl_openib_max_btls"</a>
<li><strong>Previous message:</strong> <a href="1079.php">Rainer Keller: "Re: [OMPI devel] ORTE tutorial"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2006/08/1022.php">Brian Barrett: "Re: [OMPI devel] Buffer Overflow Error"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Following up on an old thread from the list.  The error was being thrown
<br>
by the FORTIFY_SOURCE option that Dave had used (actually, RPM added, I
<br>
believe) that does some bounds checking on C functions.  There was an
<br>
erroneous size value being passed to a call to snprintf() that was
<br>
larger than the buffer being passed.  However, the string being
<br>
processed by snprintf() could not possibly have overflowed the buffer,
<br>
so there was no possibility of a buffer overflow in this situation.
<br>
<p>We've fixed the code so that it will pass the correct value for the size
<br>
to snprintf() and this error will no longer occur.
<br>
<p>Brian
<br>
<p>On Thu, 2006-08-31 at 15:56 -0600, Brian Barrett wrote:
<br>
<span class="quotelev1">&gt; What facilities are you using to detect the buffer overflow?  We've seen
</span><br>
<span class="quotelev1">&gt; no such issues in our testing and I'd be surprised if there was an issue
</span><br>
<span class="quotelev1">&gt; in that code path.  Valgrind and friends don't show any issues on our
</span><br>
<span class="quotelev1">&gt; test machines, so without more detail, I'm afraid we really can't fix
</span><br>
<span class="quotelev1">&gt; the issue you are seeing.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Brian
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Thu, 2006-08-24 at 13:53 -0400, Dave Rogers wrote:
</span><br>
<span class="quotelev2">&gt; &gt; I just compiled the latest version on my machine and ran a dumb test -
</span><br>
<span class="quotelev2">&gt; &gt; mpirun without any arguments.
</span><br>
<span class="quotelev2">&gt; &gt; This generated a buffer overflow error!
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Error message (reproducible with different mem. addr.s):
</span><br>
<span class="quotelev2">&gt; &gt; [ /home/dave/rpmbuild ] $ mpirun 
</span><br>
<span class="quotelev2">&gt; &gt; *** buffer overflow detected ***: mpirun terminated
</span><br>
<span class="quotelev2">&gt; &gt; ======= Backtrace: =========
</span><br>
<span class="quotelev2">&gt; &gt; /lib64/libc.so.6(__chk_fail+0x2f)[0x31669dee3f]
</span><br>
<span class="quotelev2">&gt; &gt; /lib64/libc.so.6[0x31669de69b]
</span><br>
<span class="quotelev2">&gt; &gt; /lib64/libc.so.6(__snprintf_chk+0x7b)[0x31669de56b] 
</span><br>
<span class="quotelev2">&gt; &gt; /usr/lib64/libopal.so.0(opal_cmd_line_get_usage_msg
</span><br>
<span class="quotelev2">&gt; &gt; +0x20a)[0x2aaaaac1088a]
</span><br>
<span class="quotelev2">&gt; &gt; mpirun[0x403c53]
</span><br>
<span class="quotelev2">&gt; &gt; mpirun(orterun+0xa0)[0x402798]
</span><br>
<span class="quotelev2">&gt; &gt; mpirun(main+0x1b)[0x4026f3]
</span><br>
<span class="quotelev2">&gt; &gt; /lib64/libc.so.6(__libc_start_main+0xf4)[0x316691d084] 
</span><br>
<span class="quotelev2">&gt; &gt; mpirun[0x402649]
</span><br>
<span class="quotelev2">&gt; &gt; ======= Memory map: ========
</span><br>
<span class="quotelev2">&gt; &gt; 00400000-00408000 r-xp 00000000 09:01
</span><br>
<span class="quotelev2">&gt; &gt; 2697992                            /usr/bin/orterun
</span><br>
<span class="quotelev2">&gt; &gt; ...
</span><br>
<span class="quotelev2">&gt; &gt; 7fff20e92000-7fff20ea8000 rw-p 7fff20e92000 00:00 0
</span><br>
<span class="quotelev2">&gt; &gt; [stack] 
</span><br>
<span class="quotelev2">&gt; &gt; ffffffffff600000-ffffffffffe00000 ---p 00000000 00:00 0
</span><br>
<span class="quotelev2">&gt; &gt; [vdso]
</span><br>
<span class="quotelev2">&gt; &gt; Aborted
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Installation details: System: FC5 AMD Opteron x86_64
</span><br>
<span class="quotelev2">&gt; &gt; downloaded SRPM version 1.1.1
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; rpm -ivh /usr/local/src/dist/libs/openmpi- 1.1-1.src.rpm
</span><br>
<span class="quotelev2">&gt; &gt; rpmbuild -ba SPECS/openmpi-1.1.spec --target x86_64
</span><br>
<span class="quotelev2">&gt; &gt;  - generates an error from check-rpaths stating that the /usr/lib64
</span><br>
<span class="quotelev2">&gt; &gt; prefix is unnecessary and may cause problems
</span><br>
<span class="quotelev2">&gt; &gt; QA_RPATHS=$[ 0x0001|0x0010 ] rpmbuild -ba SPECS/openmpi- 1.1.spec
</span><br>
<span class="quotelev2">&gt; &gt; --target x86_64
</span><br>
<span class="quotelev2">&gt; &gt;  - suggessted workaround - ignores as warnings
</span><br>
<span class="quotelev2">&gt; &gt; rpm -ivh ~dave/rpmbuild/RPMS/x86_64/openmpi-1.1-1.x86_64.rpm
</span><br>
<span class="quotelev2">&gt; &gt;  - generates a package conflict -- file /usr/lib64/libopal.so from
</span><br>
<span class="quotelev2">&gt; &gt; install of openmpi-1.1-1 conflicts with file from package opal-2.2.1-1
</span><br>
<span class="quotelev2">&gt; &gt;  - apparently, this comes from opal, the open phone abstraction
</span><br>
<span class="quotelev2">&gt; &gt; library... so I uninstalled opal
</span><br>
<span class="quotelev2">&gt; &gt; rpm -ivh ~dave/rpmbuild/RPMS/x86_64/openmpi-1.1-1.x86_64.rpm 
</span><br>
<span class="quotelev2">&gt; &gt;  - worked! 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; The strange thing is that mpirun with normal arguments works as
</span><br>
<span class="quotelev2">&gt; &gt; expected without any sorts of mem. errors.
</span><br>
<span class="quotelev2">&gt; &gt; mpirun with flags -h or --help also buffer overflows, but not mpirun
</span><br>
<span class="quotelev2">&gt; &gt; with an unrecognized argument, to which it spits out a &quot;you must
</span><br>
<span class="quotelev2">&gt; &gt; specify how many processes to launch, via the -np argument.&quot; error. 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; I hope this gets fixed soon, buffer overflows are potential security
</span><br>
<span class="quotelev2">&gt; &gt; vulnerabilities.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; ~ David Rogers
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1081.php">Jeff Squyres: "Re: [OMPI devel] btl_openib_max_btls"</a>
<li><strong>Previous message:</strong> <a href="1079.php">Rainer Keller: "Re: [OMPI devel] ORTE tutorial"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2006/08/1022.php">Brian Barrett: "Re: [OMPI devel] Buffer Overflow Error"</a>
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

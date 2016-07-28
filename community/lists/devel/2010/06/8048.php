<?
$subject_val = "Re: [OMPI devel] Migrate OpenMPI to the VxWorks";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jun  4 01:43:15 2010" -->
<!-- isoreceived="20100604054315" -->
<!-- sent="Fri, 4 Jun 2010 13:43:10 +0800" -->
<!-- isosent="20100604054310" -->
<!-- name="&#213;&#197;&#190;&#167;" -->
<!-- email="iam.chilli_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Migrate OpenMPI to the VxWorks" -->
<!-- id="AANLkTinDZxqUtYvoeA158lkFP-MnNPRvyYtSe8QEDHDn_at_mail.gmail.com" -->
<!-- charset="GB2312" -->
<!-- inreplyto="01268D6F-7673-4650-BB96-C4FA90BD6083_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Migrate OpenMPI to the VxWorks<br>
<strong>From:</strong> &#213;&#197;&#190;&#167; (<em>iam.chilli_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-06-04 01:43:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8049.php">Jeff Squyres: "Re: [OMPI devel] Migrate OpenMPI to the VxWorks"</a>
<li><strong>Previous message:</strong> <a href="8047.php">Jeff Squyres: "[OMPI devel] v1.5 .so version numbers"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2010/03/7629.php">Ralph Castain: "Re: [OMPI devel] Migrate OpenMPI to the VxWorks"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8049.php">Jeff Squyres: "Re: [OMPI devel] Migrate OpenMPI to the VxWorks"</a>
<li><strong>Reply:</strong> <a href="8049.php">Jeff Squyres: "Re: [OMPI devel] Migrate OpenMPI to the VxWorks"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Castain ,
<br>
<p>Your last mail to me is really helpful . I met most of the issues
<br>
listed and fixed them as the off-list solution or mine .
<br>
Also as the openmpi code changed there are some other issues (almost
<br>
the missing function ) that are not reported .For example , the
<br>
gettimeofday posix function is not implemented by vxworks library ,I
<br>
just wrote a small library for those function. Until now I have
<br>
successfully compiled  the  libopen-rte.a  and libopen-pal.a , but now
<br>
I stuck
<br>
at the problem of fork and exec ,which is not available in the
<br>
vxworks. It is not possible to implement the fork and exec by myself.I
<br>
have to read through the code using the fork ,then substitute them
<br>
with rtpspawn() . It is a challenging work.I really want to know how
<br>
Brian Barrett deals with the fork() and exec() .
<br>
<p>Thanks
<br>
<p>Jing
<br>
<p>2010/3/18 Ralph Castain &lt;rhc_at_[hidden]&gt;:
<br>
<span class="quotelev1">&gt; Hi Jing
</span><br>
<span class="quotelev1">&gt; Someone else took a look at this off-list a few years ago. It was mostly a
</span><br>
<span class="quotelev1">&gt; problem with the build system (some flags are different) and header file
</span><br>
<span class="quotelev1">&gt; names. I don't believe the port was ever completed though.
</span><br>
<span class="quotelev1">&gt; I have appended the results of that conversation - the last message
</span><br>
<span class="quotelev1">&gt; contained a list of the issues. You would need to update that to the trunk
</span><br>
<span class="quotelev1">&gt; of course as the code has changed considerably since that discussion took
</span><br>
<span class="quotelev1">&gt; place. Brian Barrett subsequently created a first-cut at fixing some of
</span><br>
<span class="quotelev1">&gt; these, but that appears to have been lost in the years since it was done -
</span><br>
<span class="quotelev1">&gt; and wouldn't really be current anyway.
</span><br>
<span class="quotelev1">&gt; I would be happy to assist as I can.
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1. configure issues with &quot;checking prefix for global symbol labels&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1a. VxWorks assembler (CCAS=asppc) generates a.out by default (vs.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; conftest.o that we need subsequently)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; there is this fragment to determine the way to assemble conftest.s:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; if test &quot;$CC&quot; = &quot;$CCAS&quot; ; then
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    ompi_assemble=&quot;$CCAS $CCASFLAGS -c conftest.s &gt;conftest.out 2&gt;&amp;1&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; else
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    ompi_assemble=&quot;$CCAS $CCASFLAGS conftest.s &gt;conftest.out 2&gt;&amp;1&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; fi
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The subsequent link fails because conftest.o does not exist:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   ompi_link=&quot;$CC $CFLAGS conftest_c.$OBJEXT conftest.$OBJEXT -o conftest &gt;
</span><br>
<span class="quotelev1">&gt; conftest.link 2&gt;&amp;1&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; To work around the problem, I did not set CCAS. This gives me the first
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; invocation that includes the -c argument to CC=ccppc, generating
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; conftest.o output.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1b. linker fails because LDFLAGS are not passed
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The same linker command line caused problems because $CFLAGS were passed
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; to the linker
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   ompi_link=&quot;$CC $CFLAGS conftest_c.$OBJEXT conftest.$OBJEXT -o conftest &gt;
</span><br>
<span class="quotelev1">&gt; conftest.link 2&gt;&amp;1&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In my environment, I set CC/CFLAGS/LDFLAGS as follows:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; CC=ccppc
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; CFLAGS=-ggdb3 -std=c99 -pedantic -mrtp -msoft-float -mstrict-align
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -mregnames -fno-builtin -fexceptions'
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; LDFLAGS=-mrtp -msoft-float -Wl,--start-group -Wl,--end-group
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -L/amd/raptor/root/opt/WindRiver/vxworks-6.3/target/usr/lib/ppc/PPC32/sfcommon
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The linker flags are not passed because the ompi_link
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [xp-kcain1:build_vxworks]  ccppc -ggdb3 -std=c99 -pedantic -mrtp
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -msoft-float -mstrict-align -mregnames -fno-builtin -fexceptions -o
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; hello hello.c
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; /amd/raptor/root/opt/WindRiver/gnu/3.4.4-vxworks-6.3/x86-linux2/bin/../lib/gcc/powerpc-wrs-vxworks/3.4.4/../../../../powerpc-wrs-vxworks/bin/ld:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; cannot find -lc_internal
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; collect2: ld returned 1 exit status
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2. OPAL atomics asm.c:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; int versus int32_t (refer to email with Brian Barrett
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 3. OPAL event/event.c: sys/time.h and timercmp() macros not defined by
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; VxWorks
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; refer to workaround in event.c using #ifdef MCS_VXWORKS
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 4. OPAL event/event.c: pipe() syscall not found
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; workaround:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #ifdef HAVE_UNISTD_H
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;unistd.h&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #ifdef MCS_VXWORKS
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;ioLib.h&gt;        /* for pipe() */
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #endif
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #endif
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 5. OPAL event/signal.c
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; static sig_atomic_t opal_evsigcaught[NSIG];
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; NSIG is not defined
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; but _NSIGS is
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In Linux, NSIG is defined with -D__USE_MISC
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So I added this code fragment to signal.c:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; /* VxWorks signal.h defines _NSIGS, not NSIG */
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #ifdef MCS_VXWORKS
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #define NSIG (_NSIGS+1)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #endif
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 6. OPAL event/signal.c: no socketpair()
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; workaround: use pipe():
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #ifdef HAVE_UNISTD_H
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;unistd.h&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #ifdef MCS_VXWORKS
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;ioLib.h&gt;        /* for pipe() */
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #endif
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #endif
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; and later in void opal_evsignal_init(sigset_t *evsigmask)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #ifdef MCS_VXWORKS
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;        if (pipe(ev_signal_pair) == -1)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                event_err(1, &quot;%s: pipe&quot;, __func__);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #else
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    if (socketpair(AF_UNIX, SOCK_STREAM, 0, ev_signal_pair) == -1)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;        event_err(1, &quot;%s: socketpair&quot;, __func__);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #endif
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 7. OPAL util/basename.c: #if HAVE_DIRNAME problem
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ../../../opal/util/basename.c:23:5: warning: &quot;HAVE_DIRNAME&quot; is not defined
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ../../../opal/util/basename.c: In function `opal_dirname':
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; problem: HAVE_DIRNAME is not defined in opal_config.h so the #if
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; HAVE_DIRNAME will fail at preprocessor/compile time
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; workaround:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; change #if HAVE_DIRNAME to #if defined(HAVE_DIRNAME)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 8. OPAL util/basename.c: strncopy_s and _strdup
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ../../../opal/util/basename.c: In function `opal_dirname':
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ../../../opal/util/basename.c:153: error: implicit declaration of
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; function `strncpy_s'
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ../../../opal/util/basename.c:160: error: implicit declaration of
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; function `_strdup'
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #ifdef MCS_VXWORKS
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;        strncpy( ret, filename, p - filename);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #else
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                strncpy_s( ret, (p - filename + 1), filename, p - filename );
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #endif
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #ifdef MCS_VXWORKS
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    return strdup(&quot;.&quot;);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #else
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    return _strdup(&quot;.&quot;);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #endif
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 9. opal/util/if.c: socket() prototype not found in vxworks headers
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #ifdef HAVE_SYS_SOCKET_H
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;sys/socket.h&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #ifdef MCS_VXWORKS
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;sockLib.h&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #endif
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #endif
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 10. opal/util/if.c: ioctl()
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #ifdef HAVE_SYS_IOCTL_H
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;sys/ioctl.h&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #ifdef MCS_VXWORKS
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;ioLib.h&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #endif
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #endif
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 11. opal/util/os_path.c: MAXPATHLEN change to PATH_MAX
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #ifdef MCS_VXWORKS
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    if (total_length &gt; PATH_MAX) {  /* path length is too long - reject
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; it */
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;        return(NULL);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #else
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    if (total_length &gt; MAXPATHLEN) {  /* path length is too long -
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; reject it */
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;        return(NULL);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #endif
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 12. opal/util/output.c: gethostname()
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; include &lt;hostLib.h&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 13. opal/util/output.c: MAXPATHLEN
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; same fix as os_path.c above
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 14. opal/util/output.c: closelog/openlog/syslog
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; manually turned off HAVE_SYSLOG_H in opal_config.h
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; then got a patch from Jeff Squyres that avoids syslog
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 15. opal/util/opal_pty.c
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; complains about mismatched prototype of opal_openpty() between this
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; source file and opal_pty.h
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; workaround: manually edit build_vxworks_ppc/opal/include/opal_config.h,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; use the following line (change 1 to 0):
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #define OMPI_ENABLE_PTY_SUPPORT 0
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 16. opal/util/stacktrace.c
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; FPE_FLTINV not present in signal.h
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; workaround: edit opal_config.h to turn off
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; OMPI_WANT_PRETTY_PRINT_STACKTRACE (this can be explicitly configured out
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; but I don't want to reconfigure because I hacked #15 above)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 17. opal/mca/base/mca_base_open.c
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; gethostname() -- same as opal/util/output.c, must include hostLib.h
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 18. opal_progress.c
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; from opal/event/event.h (that I modified earlier)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; cannot find #include &lt;sys/_timeradd.h&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It is in opal/event/compat/sys
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; workaround: change event.h to include the definitions that are present
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; in _timeradd.h instead of including it.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 19. Link errors for opal_wrapper
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; strcasecmp
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; strncasecmp
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I rolled my own in mca_base_open.c (temporary fix, since we may come across
</span><br>
<span class="quotelev1">&gt; this problem elsewhere in the code).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 20. dss_internal.h uses a type 'uint'
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Not sure if it's depending on something in the headers, or something it
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; defined on its own.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I changed it to be just like the header I found somewhere under Linux
</span><br>
<span class="quotelev1">&gt; /usr/include:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #ifdef MCS_VXWORKS
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; typedef unsigned int uint;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #endif
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 21. struct iovec definition needed
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; orte/mca/iof/base/iof_base_fragment.h:45: warning: array type has
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; incomplete element type
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #ifdef MCS_VXWORKS
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;net/uio.h&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #endif
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; not sure if this is right, or if I should include something like
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &lt;netBufLib.h&gt; or &lt;ioLib.h&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 22. iof_base_setup.c
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; struct termios not understood
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; can only find termios.h header in 'diab' area and I'm not using that
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; compiler.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; a variable usepty is set to 0 already when OMPI_ENABLE_PTY_SUPPORT is 0.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So, why are we compiling this fragment of code at all? I hacked the file
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; so that the struct termios code will not get compiled.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 23. oob_base_send/recv.c, oob_base_send/recv_nb.c. struct iovec not known.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #ifdef MCS_VXWORKS
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;net/uio.h&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #endif
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 24. orte/mca/rmgr/base/rmgr_base_check_context.c:58: error:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; `MAXHOSTNAMELEN' undeclared (first use in this function)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #ifdef MCS_VXWORKS
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #define MAXHOSTNAMELEN 64
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #endif
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 25. orte/mca/rmgr/base/rmgr_base_check_context.c:58:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; gethostname()
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #ifdef MCS_VXWORKS
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;hostLib.h&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #endif
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 26. orte/mca/iof/proxy/iof_proxy.h:135: warning: array type has
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; incomplete element type
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ../../../../../orte/mca/iof/proxy/iof_proxy.h:135: error: field
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; `proxy_iov' has incomplete type
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #ifdef MCS_VXWORKS
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;net/uio.h&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #endif
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 27. /orte/mca/iof/svc/iof_svc.h:147: warning: array type has incomplete
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; element type
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ../../../../../orte/mca/iof/svc/iof_svc.h:147: error: field `svc_iov'
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; has incomplete type
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #ifdef MCS_VXWORKS
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;net/uio.h&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #endif
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 28. ../../../../../orte/mca/oob/tcp/oob_tcp_msg.h:66: warning: array
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; type has incomplete element type
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ../../../../../orte/mca/oob/tcp/oob_tcp_msg.h:66: error: field `msg_iov'
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; has incomplete type
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ../../../../../orte/mca/oob/tcp/oob_tcp_msg.h: In function
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; `mca_oob_tcp_msg_iov_alloc':
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ../../../../../orte/mca/oob/tcp/oob_tcp_msg.h:196: error: invalid
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; application of `sizeof' to incomplete type `iovec'
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 29. ../../../../../orte/mca/oob/tcp/oob_tcp.c:344: error: implicit
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; declaration of function `accept'
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ../../../../../orte/mca/oob/tcp/oob_tcp.c: In function
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; `mca_oob_tcp_create_listen':
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ../../../../../orte/mca/oob/tcp/oob_tcp.c:383: error: implicit
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; declaration of function `socket'
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ../../../../../orte/mca/oob/tcp/oob_tcp.c:399: error: implicit
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; declaration of function `bind'
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ../../../../../orte/mca/oob/tcp/oob_tcp.c:407: error: implicit
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; declaration of function `getsockname'
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ../../../../../orte/mca/oob/tcp/oob_tcp.c:415: error: implicit
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; declaration of function `listen'
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ../../../../../orte/mca/oob/tcp/oob_tcp.c: In function
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; `mca_oob_tcp_listen_thread':
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ../../../../../orte/mca/oob/tcp/oob_tcp.c:459: error: implicit
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; declaration of function `bzero'
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ../../../../../orte/mca/oob/tcp/oob_tcp.c: In function
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; `mca_oob_tcp_recv_probe':
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ../../../../../orte/mca/oob/tcp/oob_tcp.c:696: error: implicit
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; declaration of function `send'
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ../../../../../orte/mca/oob/tcp/oob_tcp.c: In function
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; `mca_oob_tcp_recv_handler':
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ../../../../../orte/mca/oob/tcp/oob_tcp.c:795: error: implicit
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; declaration of function `recv'
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ../../../../../orte/mca/oob/tcp/oob_tcp.c: In function `mca_oob_tcp_init':
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ../../../../../orte/mca/oob/tcp/oob_tcp.c:1087: error: implicit
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; declaration of function `usleep'
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This gets rid of most (except bzero and usleep)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #ifdef MCS_VXWORKS
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;sockLib.h&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #endif
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Trying to reconfigure the package so CFLAGS will not include -pedantic.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This is because $WIND_HOME/vxworks-6.3/target/h/string.h has protos for
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; bzero, but only when #if _EXTENSION_WRS is true. So turn off
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -ansi/-pedantic gets this? In my dreams?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Mar 17, 2010, at 9:54 PM, &#213;&#197;&#190;&#167; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hello all,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In order to add some real-time feature to the OpenMPI for some research ,I
</span><br>
<span class="quotelev1">&gt; need a OpenMPI version running on VxWorks. But after going through the
</span><br>
<span class="quotelev1">&gt; Open-MPI website ,I can't found any indication that it supports VxWorks .
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Follow the thread posted by Ralph Castain ,
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2006/06/1371.php">http://www.open-mpi.org/community/lists/users/2006/06/1371.php</a> .
</span><br>
<span class="quotelev1">&gt; I read some paper about the OpenRTE ,like &quot;Creating a transparent,
</span><br>
<span class="quotelev1">&gt; distributed, and resilient computing environment: the OpenRTE project&quot; and
</span><br>
<span class="quotelev1">&gt; &quot;The Open Run-Time Environment (OpenRTE):A Transparent Multi-cluster
</span><br>
<span class="quotelev1">&gt; Environment for High-Performance Computing&quot;which is written by Ralph H.
</span><br>
<span class="quotelev1">&gt; Castain &#161;&#164; Jeffrey M. Squyres and others .
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Now I have a basic understanding of the OpenRTE , however ,there is too few
</span><br>
<span class="quotelev1">&gt; document of the OpenRTE describing the implement of the OpenRTE . I don't
</span><br>
<span class="quotelev1">&gt; know
</span><br>
<span class="quotelev1">&gt; where and how to begin the migration . Any advice will be appreciated.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Jing Zhang
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
<p><p><p><pre>
-- 
&#213;&#197;&#190;&#167;
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8049.php">Jeff Squyres: "Re: [OMPI devel] Migrate OpenMPI to the VxWorks"</a>
<li><strong>Previous message:</strong> <a href="8047.php">Jeff Squyres: "[OMPI devel] v1.5 .so version numbers"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2010/03/7629.php">Ralph Castain: "Re: [OMPI devel] Migrate OpenMPI to the VxWorks"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8049.php">Jeff Squyres: "Re: [OMPI devel] Migrate OpenMPI to the VxWorks"</a>
<li><strong>Reply:</strong> <a href="8049.php">Jeff Squyres: "Re: [OMPI devel] Migrate OpenMPI to the VxWorks"</a>
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

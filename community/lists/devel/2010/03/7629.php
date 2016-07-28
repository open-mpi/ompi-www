<?
$subject_val = "Re: [OMPI devel] Migrate OpenMPI to the VxWorks";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar 18 02:39:26 2010" -->
<!-- isoreceived="20100318063926" -->
<!-- sent="Thu, 18 Mar 2010 00:39:14 -0600" -->
<!-- isosent="20100318063914" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Migrate OpenMPI to the VxWorks" -->
<!-- id="01268D6F-7673-4650-BB96-C4FA90BD6083_at_open-mpi.org" -->
<!-- charset="utf-8" -->
<!-- inreplyto="29534def1003172054h113925et6537a642eaf00944_at_mail.gmail.com" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-03-18 02:39:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7630.php">Takayuki Seki: "[OMPI devel] Some questions about checkpoint/restart (5)"</a>
<li><strong>Previous message:</strong> <a href="7628.php">&#213;&#197;&#190;&#167;: "[OMPI devel] Migrate OpenMPI to the VxWorks"</a>
<li><strong>In reply to:</strong> <a href="7628.php">&#213;&#197;&#190;&#167;: "[OMPI devel] Migrate OpenMPI to the VxWorks"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7649.php">张晶: "Re: [OMPI devel] Migrate OpenMPI to the VxWorks"</a>
<li><strong>Reply:</strong> <a href="7649.php">张晶: "Re: [OMPI devel] Migrate OpenMPI to the VxWorks"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2010/06/8048.php">张晶: "Re: [OMPI devel] Migrate OpenMPI to the VxWorks"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Jing
<br>
<p>Someone else took a look at this off-list a few years ago. It was mostly a problem with the build system (some flags are different) and header file names. I don't believe the port was ever completed though.
<br>
<p>I have appended the results of that conversation - the last message contained a list of the issues. You would need to update that to the trunk of course as the code has changed considerably since that discussion took place. Brian Barrett subsequently created a first-cut at fixing some of these, but that appears to have been lost in the years since it was done - and wouldn't really be current anyway.
<br>
<p>I would be happy to assist as I can.
<br>
Ralph
<br>
<p><span class="quotelev2">&gt;&gt; 1. configure issues with &quot;checking prefix for global symbol labels&quot;
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 1a. VxWorks assembler (CCAS=asppc) generates a.out by default (vs.
</span><br>
<span class="quotelev2">&gt;&gt; conftest.o that we need subsequently)
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; there is this fragment to determine the way to assemble conftest.s:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; if test &quot;$CC&quot; = &quot;$CCAS&quot; ; then
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    ompi_assemble=&quot;$CCAS $CCASFLAGS -c conftest.s &gt;conftest.out 2&gt;&amp;1&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; else
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    ompi_assemble=&quot;$CCAS $CCASFLAGS conftest.s &gt;conftest.out 2&gt;&amp;1&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; fi
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; The subsequent link fails because conftest.o does not exist:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   ompi_link=&quot;$CC $CFLAGS conftest_c.$OBJEXT conftest.$OBJEXT -o conftest &gt; conftest.link 2&gt;&amp;1&quot;
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; To work around the problem, I did not set CCAS. This gives me the first
</span><br>
<span class="quotelev2">&gt;&gt; invocation that includes the -c argument to CC=ccppc, generating
</span><br>
<span class="quotelev2">&gt;&gt; conftest.o output.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 1b. linker fails because LDFLAGS are not passed
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; The same linker command line caused problems because $CFLAGS were passed
</span><br>
<span class="quotelev2">&gt;&gt; to the linker
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   ompi_link=&quot;$CC $CFLAGS conftest_c.$OBJEXT conftest.$OBJEXT -o conftest &gt; conftest.link 2&gt;&amp;1&quot;
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; In my environment, I set CC/CFLAGS/LDFLAGS as follows:
</span><br>
<span class="quotelev2">&gt;&gt; CC=ccppc
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; CFLAGS=-ggdb3 -std=c99 -pedantic -mrtp -msoft-float -mstrict-align
</span><br>
<span class="quotelev2">&gt;&gt; -mregnames -fno-builtin -fexceptions'
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; LDFLAGS=-mrtp -msoft-float -Wl,--start-group -Wl,--end-group
</span><br>
<span class="quotelev2">&gt;&gt; -L/amd/raptor/root/opt/WindRiver/vxworks-6.3/target/usr/lib/ppc/PPC32/sfcommon 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; The linker flags are not passed because the ompi_link
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; [xp-kcain1:build_vxworks]  ccppc -ggdb3 -std=c99 -pedantic -mrtp
</span><br>
<span class="quotelev2">&gt;&gt; -msoft-float -mstrict-align -mregnames -fno-builtin -fexceptions -o
</span><br>
<span class="quotelev2">&gt;&gt; hello hello.c
</span><br>
<span class="quotelev2">&gt;&gt; /amd/raptor/root/opt/WindRiver/gnu/3.4.4-vxworks-6.3/x86-linux2/bin/../lib/gcc/powerpc-wrs-vxworks/3.4.4/../../../../powerpc-wrs-vxworks/bin/ld: 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; cannot find -lc_internal
</span><br>
<span class="quotelev2">&gt;&gt; collect2: ld returned 1 exit status
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 2. OPAL atomics asm.c:
</span><br>
<span class="quotelev2">&gt;&gt; int versus int32_t (refer to email with Brian Barrett
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 3. OPAL event/event.c: sys/time.h and timercmp() macros not defined by
</span><br>
<span class="quotelev2">&gt;&gt; VxWorks
</span><br>
<span class="quotelev2">&gt;&gt; refer to workaround in event.c using #ifdef MCS_VXWORKS
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 4. OPAL event/event.c: pipe() syscall not found
</span><br>
<span class="quotelev2">&gt;&gt; workaround:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #ifdef HAVE_UNISTD_H
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #include &lt;unistd.h&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #ifdef MCS_VXWORKS
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #include &lt;ioLib.h&gt;        /* for pipe() */
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #endif
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #endif
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 5. OPAL event/signal.c
</span><br>
<span class="quotelev2">&gt;&gt; static sig_atomic_t opal_evsigcaught[NSIG];
</span><br>
<span class="quotelev2">&gt;&gt; NSIG is not defined
</span><br>
<span class="quotelev2">&gt;&gt; but _NSIGS is
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; In Linux, NSIG is defined with -D__USE_MISC
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; So I added this code fragment to signal.c:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /* VxWorks signal.h defines _NSIGS, not NSIG */
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #ifdef MCS_VXWORKS
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #define NSIG (_NSIGS+1)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #endif
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 6. OPAL event/signal.c: no socketpair()
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; workaround: use pipe():
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #ifdef HAVE_UNISTD_H
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #include &lt;unistd.h&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #ifdef MCS_VXWORKS
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #include &lt;ioLib.h&gt;        /* for pipe() */
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #endif
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #endif
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; and later in void opal_evsignal_init(sigset_t *evsigmask)
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #ifdef MCS_VXWORKS
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        if (pipe(ev_signal_pair) == -1)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                event_err(1, &quot;%s: pipe&quot;, __func__);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #else
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    if (socketpair(AF_UNIX, SOCK_STREAM, 0, ev_signal_pair) == -1)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        event_err(1, &quot;%s: socketpair&quot;, __func__);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #endif
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 7. OPAL util/basename.c: #if HAVE_DIRNAME problem
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; ../../../opal/util/basename.c:23:5: warning: &quot;HAVE_DIRNAME&quot; is not defined
</span><br>
<span class="quotelev2">&gt;&gt; ../../../opal/util/basename.c: In function `opal_dirname':
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; problem: HAVE_DIRNAME is not defined in opal_config.h so the #if
</span><br>
<span class="quotelev2">&gt;&gt; HAVE_DIRNAME will fail at preprocessor/compile time
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; workaround:
</span><br>
<span class="quotelev2">&gt;&gt; change #if HAVE_DIRNAME to #if defined(HAVE_DIRNAME)
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 8. OPAL util/basename.c: strncopy_s and _strdup
</span><br>
<span class="quotelev2">&gt;&gt; ../../../opal/util/basename.c: In function `opal_dirname':
</span><br>
<span class="quotelev2">&gt;&gt; ../../../opal/util/basename.c:153: error: implicit declaration of
</span><br>
<span class="quotelev2">&gt;&gt; function `strncpy_s'
</span><br>
<span class="quotelev2">&gt;&gt; ../../../opal/util/basename.c:160: error: implicit declaration of
</span><br>
<span class="quotelev2">&gt;&gt; function `_strdup'
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #ifdef MCS_VXWORKS
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        strncpy( ret, filename, p - filename);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #else
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                strncpy_s( ret, (p - filename + 1), filename, p - filename );
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #endif
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #ifdef MCS_VXWORKS
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    return strdup(&quot;.&quot;);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #else
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    return _strdup(&quot;.&quot;);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #endif
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 9. opal/util/if.c: socket() prototype not found in vxworks headers
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #ifdef HAVE_SYS_SOCKET_H
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #include &lt;sys/socket.h&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #ifdef MCS_VXWORKS
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #include &lt;sockLib.h&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #endif
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #endif
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 10. opal/util/if.c: ioctl()
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #ifdef HAVE_SYS_IOCTL_H
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #include &lt;sys/ioctl.h&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #ifdef MCS_VXWORKS
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #include &lt;ioLib.h&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #endif
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #endif
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 11. opal/util/os_path.c: MAXPATHLEN change to PATH_MAX
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; #ifdef MCS_VXWORKS
</span><br>
<span class="quotelev2">&gt;&gt;    if (total_length &gt; PATH_MAX) {  /* path length is too long - reject
</span><br>
<span class="quotelev2">&gt;&gt; it */
</span><br>
<span class="quotelev2">&gt;&gt;        return(NULL);
</span><br>
<span class="quotelev2">&gt;&gt; #else
</span><br>
<span class="quotelev2">&gt;&gt;    if (total_length &gt; MAXPATHLEN) {  /* path length is too long -
</span><br>
<span class="quotelev2">&gt;&gt; reject it */
</span><br>
<span class="quotelev2">&gt;&gt;        return(NULL);
</span><br>
<span class="quotelev2">&gt;&gt; #endif
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 12. opal/util/output.c: gethostname()
</span><br>
<span class="quotelev2">&gt;&gt; include &lt;hostLib.h&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 13. opal/util/output.c: MAXPATHLEN
</span><br>
<span class="quotelev2">&gt;&gt; same fix as os_path.c above
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 14. opal/util/output.c: closelog/openlog/syslog
</span><br>
<span class="quotelev2">&gt;&gt; manually turned off HAVE_SYSLOG_H in opal_config.h
</span><br>
<span class="quotelev2">&gt;&gt; then got a patch from Jeff Squyres that avoids syslog
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 15. opal/util/opal_pty.c
</span><br>
<span class="quotelev2">&gt;&gt; complains about mismatched prototype of opal_openpty() between this
</span><br>
<span class="quotelev2">&gt;&gt; source file and opal_pty.h
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; workaround: manually edit build_vxworks_ppc/opal/include/opal_config.h,
</span><br>
<span class="quotelev2">&gt;&gt; use the following line (change 1 to 0):
</span><br>
<span class="quotelev2">&gt;&gt; #define OMPI_ENABLE_PTY_SUPPORT 0
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 16. opal/util/stacktrace.c
</span><br>
<span class="quotelev2">&gt;&gt; FPE_FLTINV not present in signal.h
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; workaround: edit opal_config.h to turn off
</span><br>
<span class="quotelev2">&gt;&gt; OMPI_WANT_PRETTY_PRINT_STACKTRACE (this can be explicitly configured out
</span><br>
<span class="quotelev2">&gt;&gt; but I don't want to reconfigure because I hacked #15 above)
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 17. opal/mca/base/mca_base_open.c
</span><br>
<span class="quotelev2">&gt;&gt; gethostname() -- same as opal/util/output.c, must include hostLib.h
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 18. opal_progress.c
</span><br>
<span class="quotelev2">&gt;&gt; from opal/event/event.h (that I modified earlier)
</span><br>
<span class="quotelev2">&gt;&gt; cannot find #include &lt;sys/_timeradd.h&gt;
</span><br>
<span class="quotelev2">&gt;&gt; It is in opal/event/compat/sys
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; workaround: change event.h to include the definitions that are present
</span><br>
<span class="quotelev2">&gt;&gt; in _timeradd.h instead of including it.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 19. Link errors for opal_wrapper
</span><br>
<span class="quotelev2">&gt;&gt; strcasecmp
</span><br>
<span class="quotelev2">&gt;&gt; strncasecmp
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I rolled my own in mca_base_open.c (temporary fix, since we may come across this problem elsewhere in the code).
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 20. dss_internal.h uses a type 'uint'
</span><br>
<span class="quotelev2">&gt;&gt; Not sure if it's depending on something in the headers, or something it
</span><br>
<span class="quotelev2">&gt;&gt; defined on its own.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I changed it to be just like the header I found somewhere under Linux /usr/include:
</span><br>
<span class="quotelev2">&gt;&gt; #ifdef MCS_VXWORKS
</span><br>
<span class="quotelev2">&gt;&gt; typedef unsigned int uint;
</span><br>
<span class="quotelev2">&gt;&gt; #endif
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 21. struct iovec definition needed
</span><br>
<span class="quotelev2">&gt;&gt; orte/mca/iof/base/iof_base_fragment.h:45: warning: array type has
</span><br>
<span class="quotelev2">&gt;&gt; incomplete element type
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; #ifdef MCS_VXWORKS
</span><br>
<span class="quotelev2">&gt;&gt; #include &lt;net/uio.h&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #endif
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; not sure if this is right, or if I should include something like
</span><br>
<span class="quotelev2">&gt;&gt; &lt;netBufLib.h&gt; or &lt;ioLib.h&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 22. iof_base_setup.c
</span><br>
<span class="quotelev2">&gt;&gt; struct termios not understood
</span><br>
<span class="quotelev2">&gt;&gt; can only find termios.h header in 'diab' area and I'm not using that
</span><br>
<span class="quotelev2">&gt;&gt; compiler.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; a variable usepty is set to 0 already when OMPI_ENABLE_PTY_SUPPORT is 0.
</span><br>
<span class="quotelev2">&gt;&gt; So, why are we compiling this fragment of code at all? I hacked the file
</span><br>
<span class="quotelev2">&gt;&gt; so that the struct termios code will not get compiled.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 23. oob_base_send/recv.c, oob_base_send/recv_nb.c. struct iovec not known.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; #ifdef MCS_VXWORKS
</span><br>
<span class="quotelev2">&gt;&gt; #include &lt;net/uio.h&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #endif
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 24. orte/mca/rmgr/base/rmgr_base_check_context.c:58: error:
</span><br>
<span class="quotelev2">&gt;&gt; `MAXHOSTNAMELEN' undeclared (first use in this function)
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; #ifdef MCS_VXWORKS
</span><br>
<span class="quotelev2">&gt;&gt; #define MAXHOSTNAMELEN 64
</span><br>
<span class="quotelev2">&gt;&gt; #endif
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 25. orte/mca/rmgr/base/rmgr_base_check_context.c:58:
</span><br>
<span class="quotelev2">&gt;&gt; gethostname()
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; #ifdef MCS_VXWORKS
</span><br>
<span class="quotelev2">&gt;&gt; #include &lt;hostLib.h&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #endif
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 26. orte/mca/iof/proxy/iof_proxy.h:135: warning: array type has
</span><br>
<span class="quotelev2">&gt;&gt; incomplete element type
</span><br>
<span class="quotelev2">&gt;&gt; ../../../../../orte/mca/iof/proxy/iof_proxy.h:135: error: field
</span><br>
<span class="quotelev2">&gt;&gt; `proxy_iov' has incomplete type
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; #ifdef MCS_VXWORKS
</span><br>
<span class="quotelev2">&gt;&gt; #include &lt;net/uio.h&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #endif
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 27. /orte/mca/iof/svc/iof_svc.h:147: warning: array type has incomplete
</span><br>
<span class="quotelev2">&gt;&gt; element type
</span><br>
<span class="quotelev2">&gt;&gt; ../../../../../orte/mca/iof/svc/iof_svc.h:147: error: field `svc_iov'
</span><br>
<span class="quotelev2">&gt;&gt; has incomplete type
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; #ifdef MCS_VXWORKS
</span><br>
<span class="quotelev2">&gt;&gt; #include &lt;net/uio.h&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #endif
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 28. ../../../../../orte/mca/oob/tcp/oob_tcp_msg.h:66: warning: array
</span><br>
<span class="quotelev2">&gt;&gt; type has incomplete element type
</span><br>
<span class="quotelev2">&gt;&gt; ../../../../../orte/mca/oob/tcp/oob_tcp_msg.h:66: error: field `msg_iov'
</span><br>
<span class="quotelev2">&gt;&gt; has incomplete type
</span><br>
<span class="quotelev2">&gt;&gt; ../../../../../orte/mca/oob/tcp/oob_tcp_msg.h: In function
</span><br>
<span class="quotelev2">&gt;&gt; `mca_oob_tcp_msg_iov_alloc':
</span><br>
<span class="quotelev2">&gt;&gt; ../../../../../orte/mca/oob/tcp/oob_tcp_msg.h:196: error: invalid
</span><br>
<span class="quotelev2">&gt;&gt; application of `sizeof' to incomplete type `iovec'
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 29. ../../../../../orte/mca/oob/tcp/oob_tcp.c:344: error: implicit
</span><br>
<span class="quotelev2">&gt;&gt; declaration of function `accept'
</span><br>
<span class="quotelev2">&gt;&gt; ../../../../../orte/mca/oob/tcp/oob_tcp.c: In function
</span><br>
<span class="quotelev2">&gt;&gt; `mca_oob_tcp_create_listen':
</span><br>
<span class="quotelev2">&gt;&gt; ../../../../../orte/mca/oob/tcp/oob_tcp.c:383: error: implicit
</span><br>
<span class="quotelev2">&gt;&gt; declaration of function `socket'
</span><br>
<span class="quotelev2">&gt;&gt; ../../../../../orte/mca/oob/tcp/oob_tcp.c:399: error: implicit
</span><br>
<span class="quotelev2">&gt;&gt; declaration of function `bind'
</span><br>
<span class="quotelev2">&gt;&gt; ../../../../../orte/mca/oob/tcp/oob_tcp.c:407: error: implicit
</span><br>
<span class="quotelev2">&gt;&gt; declaration of function `getsockname'
</span><br>
<span class="quotelev2">&gt;&gt; ../../../../../orte/mca/oob/tcp/oob_tcp.c:415: error: implicit
</span><br>
<span class="quotelev2">&gt;&gt; declaration of function `listen'
</span><br>
<span class="quotelev2">&gt;&gt; ../../../../../orte/mca/oob/tcp/oob_tcp.c: In function
</span><br>
<span class="quotelev2">&gt;&gt; `mca_oob_tcp_listen_thread':
</span><br>
<span class="quotelev2">&gt;&gt; ../../../../../orte/mca/oob/tcp/oob_tcp.c:459: error: implicit
</span><br>
<span class="quotelev2">&gt;&gt; declaration of function `bzero'
</span><br>
<span class="quotelev2">&gt;&gt; ../../../../../orte/mca/oob/tcp/oob_tcp.c: In function
</span><br>
<span class="quotelev2">&gt;&gt; `mca_oob_tcp_recv_probe':
</span><br>
<span class="quotelev2">&gt;&gt; ../../../../../orte/mca/oob/tcp/oob_tcp.c:696: error: implicit
</span><br>
<span class="quotelev2">&gt;&gt; declaration of function `send'
</span><br>
<span class="quotelev2">&gt;&gt; ../../../../../orte/mca/oob/tcp/oob_tcp.c: In function
</span><br>
<span class="quotelev2">&gt;&gt; `mca_oob_tcp_recv_handler':
</span><br>
<span class="quotelev2">&gt;&gt; ../../../../../orte/mca/oob/tcp/oob_tcp.c:795: error: implicit
</span><br>
<span class="quotelev2">&gt;&gt; declaration of function `recv'
</span><br>
<span class="quotelev2">&gt;&gt; ../../../../../orte/mca/oob/tcp/oob_tcp.c: In function `mca_oob_tcp_init':
</span><br>
<span class="quotelev2">&gt;&gt; ../../../../../orte/mca/oob/tcp/oob_tcp.c:1087: error: implicit
</span><br>
<span class="quotelev2">&gt;&gt; declaration of function `usleep'
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; This gets rid of most (except bzero and usleep)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #ifdef MCS_VXWORKS
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #include &lt;sockLib.h&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #endif
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Trying to reconfigure the package so CFLAGS will not include -pedantic.
</span><br>
<span class="quotelev2">&gt;&gt; This is because $WIND_HOME/vxworks-6.3/target/h/string.h has protos for
</span><br>
<span class="quotelev2">&gt;&gt; bzero, but only when #if _EXTENSION_WRS is true. So turn off
</span><br>
<span class="quotelev2">&gt;&gt; -ansi/-pedantic gets this? In my dreams?
</span><br>
On Mar 17, 2010, at 9:54 PM, &#229;&#188;&#160;&#230;&#153;&#182; wrote:
<br>
<p><span class="quotelev1">&gt; Hello all,
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; In order to add some real-time feature to the OpenMPI for some research ,I need a OpenMPI version running on VxWorks. But after going through the Open-MPI website ,I can&#226;&#128;&#153;t found any indication that it supports VxWorks .
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Follow the thread posted by Ralph Castain ,  <a href="http://www.open-mpi.org/community/lists/users/2006/06/1371.php">http://www.open-mpi.org/community/lists/users/2006/06/1371.php</a> .
</span><br>
<span class="quotelev1">&gt; I read some paper about the OpenRTE ,like &#226;&#128;&#156;Creating a transparent, distributed, and resilient computing environment: the OpenRTE project&#226;&#128;&#157; and &#226;&#128;&#156;The Open Run-Time Environment (OpenRTE):A Transparent Multi-cluster Environment for High-Performance Computing&#226;&#128;&#157;which is written by Ralph H. Castain &#194;&#183; Jeffrey M. Squyres and others .
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Now I have a basic understanding of the OpenRTE , however ,there is too few document of the OpenRTE describing the implement of the OpenRTE . I don&#226;&#128;&#153;t know
</span><br>
<span class="quotelev1">&gt; where and how to begin the migration . Any advice will be appreciated.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Thanks
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Jing Zhang
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-7629/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7630.php">Takayuki Seki: "[OMPI devel] Some questions about checkpoint/restart (5)"</a>
<li><strong>Previous message:</strong> <a href="7628.php">&#213;&#197;&#190;&#167;: "[OMPI devel] Migrate OpenMPI to the VxWorks"</a>
<li><strong>In reply to:</strong> <a href="7628.php">&#213;&#197;&#190;&#167;: "[OMPI devel] Migrate OpenMPI to the VxWorks"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7649.php">张晶: "Re: [OMPI devel] Migrate OpenMPI to the VxWorks"</a>
<li><strong>Reply:</strong> <a href="7649.php">张晶: "Re: [OMPI devel] Migrate OpenMPI to the VxWorks"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2010/06/8048.php">张晶: "Re: [OMPI devel] Migrate OpenMPI to the VxWorks"</a>
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

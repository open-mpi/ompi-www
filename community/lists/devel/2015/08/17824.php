<?
$subject_val = "[OMPI devel] 1.10.0rc6 - Solaris &quot;make check&quot; problem (regression vs. rc5)";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Aug 24 14:04:37 2015" -->
<!-- isoreceived="20150824180437" -->
<!-- sent="Mon, 24 Aug 2015 11:04:11 -0700" -->
<!-- isosent="20150824180411" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="[OMPI devel] 1.10.0rc6 - Solaris &amp;quot;make check&amp;quot; problem (regression vs. rc5)" -->
<!-- id="CAAvDA15X9xMovoks-h3khOBmKOGShKJ3_6hPwXbagiXMugpkOQ_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
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
<strong>Subject:</strong> [OMPI devel] 1.10.0rc6 - Solaris &quot;make check&quot; problem (regression vs. rc5)<br>
<strong>From:</strong> Paul Hargrove (<em>phhargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-08-24 14:04:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17825.php">Ralph Castain: "Re: [OMPI devel] 1.10.0rc6 - slightly different mx problem"</a>
<li><strong>Previous message:</strong> <a href="17823.php">Paul Hargrove: "Re: [OMPI devel] 1.10.0rc6 - slightly different mx problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17826.php">Ralph Castain: "Re: [OMPI devel] 1.10.0rc6 - Solaris &quot;make check&quot; problem (regression vs. rc5)"</a>
<li><strong>Reply:</strong> <a href="17826.php">Ralph Castain: "Re: [OMPI devel] 1.10.0rc6 - Solaris &quot;make check&quot; problem (regression vs. rc5)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
This is from testing the Studio compilers on a Solaris-11.1/amd64 platform,
<br>
in a configuration that passed my testing of rc5.
<br>
I have configured with
<br>
<p>--prefix=[...] --enable-debug CC=cc CXX=CC FC=f90 --with-verbs \
<br>
CXXFLAGS='-library=stlport4' --with-wrapper-cxxflags='-library=stlport4'
<br>
<p><p>Note that there is nothing but TCP and Verbs on this platform.
<br>
This is not yet another problem with mx or ofi.
<br>
<p>My &quot;make check&quot; step fails as shown below, apparently choking on the
<br>
$(OMPI_WRAPPER_EXTRA_LDFLAGS) that Ralph had to add to resolve the problems
<br>
I saw in rc5:
<br>
<p>gmake[3]: Entering directory
<br>
`/shared/OMPI/openmpi-1.10.0rc6-solaris11-x86-ib-ss12u3/BLD/ompi/debuggers'
<br>
source='/shared/OMPI/openmpi-1.10.0rc6-solaris11-x86-ib-ss12u3/openmpi-1.10.0rc6/ompi/debuggers/predefined_gap_test.c'
<br>
object='predefined_gap_test.o' libtool=no \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;DEPDIR=.deps depmode=none /bin/sh
<br>
/shared/OMPI/openmpi-1.10.0rc6-solaris11-x86-ib-ss12u3/openmpi-1.10.0rc6/config/depcomp
<br>
\
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;cc -DHAVE_CONFIG_H -I.
<br>
-I/shared/OMPI/openmpi-1.10.0rc6-solaris11-x86-ib-ss12u3/openmpi-1.10.0rc6/ompi/debuggers
<br>
-I../../opal/include -I../../orte/include -I../../ompi/include
<br>
-I../../oshmem/include
<br>
-I../../opal/mca/hwloc/hwloc191/hwloc/include/private/autogen
<br>
-I../../opal/mca/hwloc/hwloc191/hwloc/include/hwloc/autogen
<br>
-I/shared/OMPI/openmpi-1.10.0rc6-solaris11-x86-ib-ss12u3/openmpi-1.10.0rc6
<br>
-I../..
<br>
-I/shared/OMPI/openmpi-1.10.0rc6-solaris11-x86-ib-ss12u3/openmpi-1.10.0rc6/opal/include
<br>
-I/shared/OMPI/openmpi-1.10.0rc6-solaris11-x86-ib-ss12u3/openmpi-1.10.0rc6/orte/include
<br>
-I/shared/OMPI/openmpi-1.10.0rc6-solaris11-x86-ib-ss12u3/openmpi-1.10.0rc6/ompi/include
<br>
-I/shared/OMPI/openmpi-1.10.0rc6-solaris11-x86-ib-ss12u3/openmpi-1.10.0rc6/oshmem/include
<br>
&nbsp;-D_REENTRANT
<br>
&nbsp;-I/shared/OMPI/openmpi-1.10.0rc6-solaris11-x86-ib-ss12u3/openmpi-1.10.0rc6/opal/mca/hwloc/hwloc191/hwloc/include
<br>
-I/shared/OMPI/openmpi-1.10.0rc6-solaris11-x86-ib-ss12u3/BLD/opal/mca/hwloc/hwloc191/hwloc/include
<br>
-I/shared/OMPI/openmpi-1.10.0rc6-solaris11-x86-ib-ss12u3/openmpi-1.10.0rc6/opal/mca/event/libevent2021/libevent
<br>
-I/shared/OMPI/openmpi-1.10.0rc6-solaris11-x86-ib-ss12u3/openmpi-1.10.0rc6/opal/mca/event/libevent2021/libevent/include
<br>
-I/shared/OMPI/openmpi-1.10.0rc6-solaris11-x86-ib-ss12u3/BLD/opal/mca/event/libevent2021/libevent/include
<br>
&nbsp;-D_REENTRANT -g -c -o predefined_gap_test.o
<br>
/shared/OMPI/openmpi-1.10.0rc6-solaris11-x86-ib-ss12u3/openmpi-1.10.0rc6/ompi/debuggers/predefined_gap_test.c
<br>
&quot;/shared/OMPI/openmpi-1.10.0rc6-solaris11-x86-ib-ss12u3/openmpi-1.10.0rc6/opal/include/opal/sys/ia32/atomic.h&quot;,
<br>
line 173: warning: parameter in inline asm statement unused: %3
<br>
/bin/sh ../../libtool  --tag=CC   --mode=link cc  -D_REENTRANT -g -R@
<br>
{libdir}   -o predefined_gap_test predefined_gap_test.o ../../ompi/libmpi.la
<br>
-lm -lsocket -lnsl
<br>
libtool: link: only absolute run-paths are allowed
<br>
<p>I am going to venture a guess that libtool is complaining about &quot;-R@
<br>
{libdir}&quot;.
<br>
Looking at config/opal_setup_wrappers.m4 I find:
<br>
<p># Called to find all -L arguments in the LDFLAGS and add in RPATH args
<br>
# for each of them.  Then also add in an RPATH for @{libdir} (which
<br>
# will be replaced by the wrapper compile to the installdir libdir at
<br>
# runtime), and the RUNPATH args, if we have them.
<br>
<p><p>So, since it sounds like the wrapper compiler (not autoconf, automake or
<br>
libtool) is expected to perform the expansion, it sounds to me like the
<br>
$(*_WRAPPER_EXTRA_LDFLAGS) are *not* suitable for linking the tests.
<br>
This means that Ralph and I wasted our Sunday iterating to the wrong fix
<br>
for the mx+static problem I encountered in rc5.
<br>
<p>The good news (I hope) is the following comment in the same .m4 file:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;# Note that we have to setup &lt;package&gt;_PKG_CONFIG_LDFLAGS for the
<br>
&nbsp;&nbsp;&nbsp;&nbsp;# pkg-config files to parallel the
<br>
&nbsp;&nbsp;&nbsp;&nbsp;# &lt;package&gt;_WRAPPER_EXTRA_LDFLAGS.  This is because pkg-config
<br>
&nbsp;&nbsp;&nbsp;&nbsp;# will not understand the @{libdir} notation in
<br>
&nbsp;&nbsp;&nbsp;&nbsp;# *_WRAPPER_EXTRA_LDFLAGS; we have to translate it to ${libdir}.
<br>
<p>So, Ralph, I suspect that use of {OMPI,OPAL}_PKG_CONFIG_LDFLAGS is the
<br>
proper replacement for WRAPPER_LD_FLAGS.
<br>
I tried manually making this change in the three affected generated
<br>
Makefiles and was able to pass my testing on this platform.
<br>
<p>-Paul
<br>
<p><pre>
-- 
Paul H. Hargrove                          PHHargrove_at_[hidden]
Computer Languages &amp; Systems Software (CLaSS) Group
Computer Science Department               Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-17824/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17825.php">Ralph Castain: "Re: [OMPI devel] 1.10.0rc6 - slightly different mx problem"</a>
<li><strong>Previous message:</strong> <a href="17823.php">Paul Hargrove: "Re: [OMPI devel] 1.10.0rc6 - slightly different mx problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17826.php">Ralph Castain: "Re: [OMPI devel] 1.10.0rc6 - Solaris &quot;make check&quot; problem (regression vs. rc5)"</a>
<li><strong>Reply:</strong> <a href="17826.php">Ralph Castain: "Re: [OMPI devel] 1.10.0rc6 - Solaris &quot;make check&quot; problem (regression vs. rc5)"</a>
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

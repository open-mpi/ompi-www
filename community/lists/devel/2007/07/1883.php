<? include("../../include/msg-header.inc"); ?>
<!-- received="Sat Jul 14 12:53:42 2007" -->
<!-- isoreceived="20070714165342" -->
<!-- sent="Sat, 14 Jul 2007 11:53:16 -0500" -->
<!-- isosent="20070714165316" -->
<!-- name="Dirk Eddelbuettel" -->
<!-- email="edd_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Build failures of 1.2.3 on Debian hppa, mips, mipsel, s390, m68k" -->
<!-- id="18072.65404.644311.220832_at_basebud.nulle.part" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="119aab440707140803l77636566nfa4e4bf7ee8764ba_at_mail.gmail.com" -->
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
<strong>From:</strong> Dirk Eddelbuettel (<em>edd_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-07-14 12:53:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1884.php">Brian Barrett: "Re: [OMPI devel] Build failures of 1.2.3 on Debian hppa, mips, mipsel, s390, m68k"</a>
<li><strong>Previous message:</strong> <a href="1882.php">Brian Barrett: "Re: [OMPI devel] Build failures of 1.2.3 on Debian hppa, mips, mipsel, s390, m68k"</a>
<li><strong>Maybe in reply to:</strong> <a href="1881.php">Dirk Eddelbuettel: "[OMPI devel] Build failures of 1.2.3 on Debian hppa, mips, mipsel, s390, m68k"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1884.php">Brian Barrett: "Re: [OMPI devel] Build failures of 1.2.3 on Debian hppa, mips, mipsel, s390, m68k"</a>
<li><strong>Reply:</strong> <a href="1884.php">Brian Barrett: "Re: [OMPI devel] Build failures of 1.2.3 on Debian hppa, mips, mipsel, s390, m68k"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Carlos,
<br>
<p>Thanks for the quick reply.
<br>
<p>On 14 July 2007 at 11:03, Carlos O'Donell wrote:
<br>
| On 7/14/07, Dirk Eddelbuettel &lt;edd_at_[hidden]&gt; wrote:
<br>
| &gt;  i)  that hppa (in the way configure sees it) is not supported:
<br>
| &gt;
<br>
| &gt; checking if .size is needed... yes
<br>
| &gt; checking if .align directive takes logarithmic value... no
<br>
| &gt; configure: error: No atomic primitives available for hppa-unknown-linux-gnu
<br>
| &gt; make: *** [config.status] Error 1
<br>
| &gt;
<br>
| &gt;     Now, configure and aclocal have lots of 'hppa*64' statements.  Is it
<br>
| &gt;     enough to turn these into  'hppa*64*|hppa*linux*' or something similar ?
<br>
| &gt;
<br>
| &gt;     This issue has previously been logged in the Debian Bug Tracking System,
<br>
| &gt;     see <a href="http://bugs.debian.org/431631">http://bugs.debian.org/431631</a>
<br>
| 
<br>
| That bug does not appear to have any relevance to the failed configure check.
<br>
| What atomic primitives does Open MPI need?
<br>
<p>I am confused. I am not sure I understand your question.  Are you aware that
<br>
configure checks for this? Eg from my x86 build logs:
<br>
<p>checking for pre-built assembly file... yes (atomic-ia32-linux.s)
<br>
checking for atomic assembly filename... atomic-ia32-linux.s
<br>
<p>So atomic-$foo better be there for a given architecture foo as there are
<br>
sources for some platforms:
<br>
<p>edd_at_basebud:~/src/debian/SVN/tarballs/openmpi-1.2.3/opal&gt; ls -1 asm/generated/
<br>
atomic-alpha-linux.s
<br>
atomic-amd64-linux-nongas.s
<br>
atomic-amd64-linux.s
<br>
atomic-ia32-cygwin-nongas.s
<br>
atomic-ia32-cygwin.s
<br>
atomic-ia32-linux-nongas.s
<br>
atomic-ia32-linux.s
<br>
atomic-ia32-osx.s
<br>
atomic-ia64-linux-nongas.s
<br>
atomic-ia64-linux.s
<br>
atomic-mips-irix.s
<br>
atomic-powerpc32-64-osx.s
<br>
atomic-powerpc32-aix.s
<br>
atomic-powerpc32-linux-nongas.s
<br>
atomic-powerpc32-linux.s
<br>
atomic-powerpc32-osx.s
<br>
atomic-powerpc64-aix.s
<br>
atomic-powerpc64-linux-nongas.s
<br>
atomic-powerpc64-linux.s
<br>
atomic-powerpc64-osx.s
<br>
atomic-sparc-solaris.s
<br>
atomic-sparcv9-32-solaris.s
<br>
atomic-sparcv9-64-solaris.s
<br>
<p>Methinks we need to fill in a few blanks here, or make do with non-asm
<br>
solutions. I don't know the problem space that well (being a maintainer
<br>
rather than upstream developer) and am looking for guidance.  
<br>
<p>For what it's worth, lam (7.1.2, currently) us available on all build
<br>
architectures for Debian, but it may not push the (hardware) envelope as
<br>
hard. 
<br>
<p>Hope this helps, Dirk
<br>
<p><pre>
-- 
Hell, there are no rules here - we're trying to accomplish something. 
                                                  -- Thomas A. Edison
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1884.php">Brian Barrett: "Re: [OMPI devel] Build failures of 1.2.3 on Debian hppa, mips, mipsel, s390, m68k"</a>
<li><strong>Previous message:</strong> <a href="1882.php">Brian Barrett: "Re: [OMPI devel] Build failures of 1.2.3 on Debian hppa, mips, mipsel, s390, m68k"</a>
<li><strong>Maybe in reply to:</strong> <a href="1881.php">Dirk Eddelbuettel: "[OMPI devel] Build failures of 1.2.3 on Debian hppa, mips, mipsel, s390, m68k"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1884.php">Brian Barrett: "Re: [OMPI devel] Build failures of 1.2.3 on Debian hppa, mips, mipsel, s390, m68k"</a>
<li><strong>Reply:</strong> <a href="1884.php">Brian Barrett: "Re: [OMPI devel] Build failures of 1.2.3 on Debian hppa, mips, mipsel, s390, m68k"</a>
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

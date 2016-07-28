<? include("../../include/msg-header.inc"); ?>
<!-- received="Sat Dec  3 10:30:13 2005" -->
<!-- isoreceived="20051203153013" -->
<!-- sent="Sat, 3 Dec 2005 16:30:03 +0100" -->
<!-- isosent="20051203153003" -->
<!-- name="Ralf Wildenhues" -->
<!-- email="Ralf.Wildenhues_at_[hidden]" -->
<!-- subject="Re:  PGI configure failure.." -->
<!-- id="20051203153003.GB29162_at_iam.uni-bonn.de" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="ffb8293aaa318be95696722b2ed20c08_at_open-mpi.org" -->
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
<strong>From:</strong> Ralf Wildenhues (<em>Ralf.Wildenhues_at_[hidden]</em>)<br>
<strong>Date:</strong> 2005-12-03 10:30:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0578.php">Jeff Squyres: "Re:  PGI configure failure.."</a>
<li><strong>Previous message:</strong> <a href="0576.php">Carsten Kutzner: "Re:  LAM: MPI_Alltoall performance and congestion (fwd)"</a>
<li><strong>In reply to:</strong> <a href="../../2005/11/0551.php">Jeff Squyres: "Re:  PGI configure failure.."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0578.php">Jeff Squyres: "Re:  PGI configure failure.."</a>
<li><strong>Reply:</strong> <a href="0578.php">Jeff Squyres: "Re:  PGI configure failure.."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Wow, several bugs for the price of one report.  :)
<br>
<p>* Jeff Squyres wrote on Sat, Nov 26, 2005 at 08:24:33PM CET:
<br>
<span class="quotelev1">&gt; On Nov 25, 2005, at 4:03 PM, Galen M. Shipman wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; On a fresh co of the trunk, after a successful autogen.sh I get the
</span><br>
<span class="quotelev2">&gt; &gt; following error with this configure:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;   ./configure CC=pgcc CXX=pgCC F77=pgf77 FC=pgf90 --disable-io-romio -
</span><br>
<span class="quotelev2">&gt; &gt; with-mvapi=/usr/local/ib --enable-static --disable-shared --prefix=/u/
</span><br>
<span class="quotelev2">&gt; &gt; gshipman/myapps
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; *** Initialization, setup
</span><br>
<span class="quotelev2">&gt; &gt; configure: builddir: /u/gshipman/ompi_pgi
</span><br>
<span class="quotelev2">&gt; &gt; configure: srcdir: /u/gshipman/ompi_pgi
</span><br>
<span class="quotelev2">&gt; &gt; checking build system type... Invalid configuration `x86_64-unknown-linux-': machine `x86_64-unknown-linux' not recognized
</span><br>
<span class="quotelev2">&gt; &gt; configure: error: /bin/sh ./config/config.sub x86_64-unknown-linux- failed
</span><br>
<p><span class="quotelev2">&gt; &gt; Not sure what is going on here, Jeff fixed this for me one other time
</span><br>
<span class="quotelev2">&gt; &gt; but I am not sure what magic he did, this is occurring on odin.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; All I did was re-run autogen for you with my own copies of the Auto 
</span><br>
<span class="quotelev1">&gt; tools.  I think the difference was that I had the most most most recent 
</span><br>
<span class="quotelev1">&gt; version of Libtool (i.e., I don't use the system-installed auto tools 
</span><br>
<span class="quotelev1">&gt; on odin).
</span><br>
<p>I stumbled over this myself now.  It's due to an old version of
<br>
`config.guess'.  With a current version of the config.* scripts[1],
<br>
things seem to work, but the underlying bugs are merely not exposed
<br>
any longer, not fixed.  In any case, I'd recommend updating the systems'
<br>
various copies of the config.* scripts (the installed ones date
<br>
2005-03-24).
<br>
<p><p>Detailed analysis (so I can point to it in a mail to config-patches at
<br>
gnu.org):
<br>
<p>First, in some cases, config.guess executes
<br>
&nbsp;&nbsp;eval `$CC_FOR_BUILD -E $dummy.c 2&gt;/dev/null | grep ^LIBC=`
<br>
<p>with $dummy.c containing this (modulo leading white space):
<br>
&nbsp;&nbsp;#include &lt;features.h&gt;
<br>
&nbsp;&nbsp;#ifdef __ELF__
<br>
&nbsp;&nbsp;# ifdef __GLIBC__
<br>
&nbsp;&nbsp;#  if __GLIBC__ &gt;= 2
<br>
&nbsp;&nbsp;LIBC=gnu
<br>
&nbsp;&nbsp;#  else
<br>
&nbsp;&nbsp;LIBC=gnulibc1
<br>
&nbsp;&nbsp;#  endif
<br>
&nbsp;&nbsp;# else
<br>
&nbsp;&nbsp;LIBC=gnulibc1
<br>
&nbsp;&nbsp;# endif
<br>
&nbsp;&nbsp;#else
<br>
&nbsp;&nbsp;#ifdef __INTEL_COMPILER
<br>
&nbsp;&nbsp;LIBC=gnu
<br>
&nbsp;&nbsp;#else
<br>
&nbsp;&nbsp;LIBC=gnuaout
<br>
&nbsp;&nbsp;#endif
<br>
&nbsp;&nbsp;#endif
<br>
&nbsp;&nbsp;#ifdef __dietlibc__
<br>
&nbsp;&nbsp;LIBC=dietlibc
<br>
&nbsp;&nbsp;#endif
<br>
<p>Now the eval line above contains two flaws: First, it may screw up the
<br>
newlines in the output of the command substitution: the eval will
<br>
evaluate something like
<br>
<p>&nbsp;&nbsp;# 1 &quot;a.c&quot; # 1 &quot;&lt;built-in&gt;&quot; # 1 ... LIBC=gnu
<br>
<p>(abbreviated output with GCC)
<br>
<p>and thus $LIBC will not be set.  This may be fixed by double-quoting the
<br>
`...` part.
<br>
<p>Second, the preprocessor has the right to introduce spacing at token
<br>
boundaries, and pgcc will do just that:
<br>
&nbsp;&nbsp;# 1 &quot;a.c&quot;
<br>
&nbsp;&nbsp;# 1 &quot;/usr/include/features.h&quot;
<br>
&nbsp;&nbsp;...
<br>
&nbsp;&nbsp;LIBC = gnuaout
<br>
<p>An earlier version of the script correctly included provision for this:
<br>
| eval `$CC_FOR_BUILD -E $dummy.c 2&gt;/dev/null | grep LIBC= | sed -e 's: ::g'`
<br>
<p>We may remove the grep, and fix the quoting issue, although not strictly
<br>
necessary any more in this version, arriving at
<br>
&nbsp;&nbsp;eval &quot;`$CC_FOR_BUILD -E $dummy.c 2&gt;/dev/null | sed -n '/LIBC/{s: ::g;p;}'`&quot;
<br>
<p>(Several occasions of the same bugs exist in the script.)
<br>
&nbsp;
<br>
<p>Third, and this can be seen from the output of the second version, there
<br>
is another bug looming with pgcc: it will output gnuaout, wrongly.  Now,
<br>
this is because pgcc doesn't predefine __ELF__.  This may be handled
<br>
similarly to the Intel compiler case:
<br>
&nbsp;&nbsp;
<br>
&nbsp;&nbsp;#if defined(__INTEL_COMPILER) || defined(__PGI)
<br>
&nbsp;&nbsp;LIBC=gnu
<br>
&nbsp;&nbsp;#else
<br>
<p>The reason why newer config.guess scripts do not exhibit the issue (on
<br>
the x86_64 system in question) is that, for x86_64 the `eval' command is
<br>
not executed any more.  However, AFAIK the 32bit version of pgcc does
<br>
not define __ELF__ either, so potentially on x86 this issue may still be
<br>
open.
<br>
<p>The issue may be worked around by passing
<br>
&nbsp;&nbsp;--build=x86_64-unknown-linux-gnu
<br>
to the configure invocation.
<br>
<p>Cheers,
<br>
Ralf
<br>
<p><p>[1] wget \
<br>
<a href="http://savannah.gnu.org/cgi-bin/viewcvs/~checkout~/config/config/config.sub">http://savannah.gnu.org/cgi-bin/viewcvs/~checkout~/config/config/config.sub</a> \
<br>
<a href="http://savannah.gnu.org/cgi-bin/viewcvs/~checkout~/config/config/config.guess">http://savannah.gnu.org/cgi-bin/viewcvs/~checkout~/config/config/config.guess</a>
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0578.php">Jeff Squyres: "Re:  PGI configure failure.."</a>
<li><strong>Previous message:</strong> <a href="0576.php">Carsten Kutzner: "Re:  LAM: MPI_Alltoall performance and congestion (fwd)"</a>
<li><strong>In reply to:</strong> <a href="../../2005/11/0551.php">Jeff Squyres: "Re:  PGI configure failure.."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0578.php">Jeff Squyres: "Re:  PGI configure failure.."</a>
<li><strong>Reply:</strong> <a href="0578.php">Jeff Squyres: "Re:  PGI configure failure.."</a>
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

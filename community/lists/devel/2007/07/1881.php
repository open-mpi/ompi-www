<? include("../../include/msg-header.inc"); ?>
<!-- received="Sat Jul 14 10:26:38 2007" -->
<!-- isoreceived="20070714142638" -->
<!-- sent="Sat, 14 Jul 2007 09:26:22 -0500" -->
<!-- isosent="20070714142622" -->
<!-- name="Dirk Eddelbuettel" -->
<!-- email="edd_at_[hidden]" -->
<!-- subject="[OMPI devel] Build failures of 1.2.3 on Debian hppa, mips, mipsel, s390, m68k" -->
<!-- id="18072.56590.326202.513472_at_basebud.nulle.part" -->
<!-- charset="us-ascii" -->
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
<strong>Date:</strong> 2007-07-14 10:26:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1882.php">Brian Barrett: "Re: [OMPI devel] Build failures of 1.2.3 on Debian hppa, mips, mipsel, s390, m68k"</a>
<li><strong>Previous message:</strong> <a href="1880.php">Jeff Squyres: "[OMPI devel] pending openib commits"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1882.php">Brian Barrett: "Re: [OMPI devel] Build failures of 1.2.3 on Debian hppa, mips, mipsel, s390, m68k"</a>
<li><strong>Reply:</strong> <a href="1882.php">Brian Barrett: "Re: [OMPI devel] Build failures of 1.2.3 on Debian hppa, mips, mipsel, s390, m68k"</a>
<li><strong>Maybe reply:</strong> <a href="1883.php">Dirk Eddelbuettel: "Re: [OMPI devel] Build failures of 1.2.3 on Debian hppa, mips, mipsel, s390, m68k"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi folks,
<br>
<p>The 'new' Open MPI packages for Debian that are maintained by a few of us via
<br>
a group on alioth.debian.org have now [1] reached the main distribution. This
<br>
means they are being built on all supported architecture and logs accumulate at
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://buildd.debian.org/build.php?pkg=openmpi">http://buildd.debian.org/build.php?pkg=openmpi</a>
<br>
<p>This shows success on 'alpha', 'amd64', 'ia64', 'powerpc' and 'x86' (implied,
<br>
my build architecture).  However, we have failures on 'hppa', 'mips' and
<br>
'mipsel'. The remaining ones ('arm', 'm68k', 's390' and 'sparc') are still
<br>
outstanding. 
<br>
<p>Looking at the most recent error logs on the failing architectures we see
<br>
<p>&nbsp;i)  that hppa (in the way configure sees it) is not supported:
<br>
<p>checking if .size is needed... yes
<br>
checking if .align directive takes logarithmic value... no
<br>
configure: error: No atomic primitives available for hppa-unknown-linux-gnu
<br>
make: *** [config.status] Error 1
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;Now, configure and aclocal have lots of 'hppa*64' statements.  Is it
<br>
&nbsp;&nbsp;&nbsp;&nbsp;enough to turn these into  'hppa*64*|hppa*linux*' or something similar ?
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;This issue has previously been logged in the Debian Bug Tracking System,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;see <a href="http://bugs.debian.org/431631">http://bugs.debian.org/431631</a>
<br>
<p><p>&nbsp;ii) that mips croaks at the assembler level
<br>
<p>ln -s &quot;../../opal/asm/generated/atomic-local.s&quot; atomic-asm.s
<br>
/bin/sh ../../libtool --mode=compile gcc  -DNDEBUG -Wall -g -O2 -finline-functions -fno-strict-aliasing -c -o atomic-asm.lo atomic-asm.s
<br>
libtool: compile:  gcc -DNDEBUG -Wall -g -O2 -finline-functions -fno-strict-aliasing -c atomic-asm.s  -fPIC -DPIC -o .libs/atomic-asm.o
<br>
atomic-asm.s: Assembler messages:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;I haven't looked in detail, but is there a non-assembler code branch we
<br>
&nbsp;&nbsp;&nbsp;&nbsp;could invoke?
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;iii) mipsel is also not supported:
<br>
<p>checking if .size is needed... yes
<br>
checking if .align directive takes logarithmic value... yes
<br>
configure: error: No atomic primitives available for mipsel-unknown-linux-gnu
<br>
make: *** [config.status] Error 1
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;What can we do here?  Can the Debian porters help with tests to devise
<br>
&nbsp;&nbsp;&nbsp;&nbsp;a mips/mipsel configuration?
<br>
<p>Looking at the bug archive for 'openmpi' we see more failures:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;iv)  s390 has an open bug about the same 'atomic primitives' issue, see 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://bugs.debian.org/376833">http://bugs.debian.org/376833</a>
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;v)   m68k has an open bug about the same 'atomic primitives' issue, see
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://bugs.debian.org/405929">http://bugs.debian.org/405929</a>
<br>
<p><p>It is possible to just declare a lists of architectures on which to build,
<br>
but this is somewhat strongly discouraged.
<br>
<p>Please let us (ie Debian's openmpi maintainers) how else we can help.  I am
<br>
ccing the porters lists (for hppa, m68k, mips) too to invite them to help. I
<br>
hope that doesn't get the spam filters going...  I may contact the 'arm'
<br>
porters once we have a failure; s390 and sparc activity are not as big these
<br>
days. 
<br>
<p>Regards, Dirk
<br>
<p><p><p>[1] New packages go into the NEW queue so that the ftpfaster can inspect the
<br>
packaging, licenses, ... and reorganised source packages with new or renmamed
<br>
binary packages get the same treatment.
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
<li><strong>Next message:</strong> <a href="1882.php">Brian Barrett: "Re: [OMPI devel] Build failures of 1.2.3 on Debian hppa, mips, mipsel, s390, m68k"</a>
<li><strong>Previous message:</strong> <a href="1880.php">Jeff Squyres: "[OMPI devel] pending openib commits"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1882.php">Brian Barrett: "Re: [OMPI devel] Build failures of 1.2.3 on Debian hppa, mips, mipsel, s390, m68k"</a>
<li><strong>Reply:</strong> <a href="1882.php">Brian Barrett: "Re: [OMPI devel] Build failures of 1.2.3 on Debian hppa, mips, mipsel, s390, m68k"</a>
<li><strong>Maybe reply:</strong> <a href="1883.php">Dirk Eddelbuettel: "Re: [OMPI devel] Build failures of 1.2.3 on Debian hppa, mips, mipsel, s390, m68k"</a>
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

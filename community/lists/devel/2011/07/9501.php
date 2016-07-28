<?
$subject_val = "[OMPI devel] Problems compiling 1.5.3 on ARM";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jul 11 17:34:04 2011" -->
<!-- isoreceived="20110711213404" -->
<!-- sent="Mon, 11 Jul 2011 16:34:00 -0500 (CDT)" -->
<!-- isosent="20110711213400" -->
<!-- name="martin.bogomolni_at_[hidden]" -->
<!-- email="martin.bogomolni_at_[hidden]" -->
<!-- subject="[OMPI devel] Problems compiling 1.5.3 on ARM" -->
<!-- id="1310420040.437219472_at_mail.calxeda.com" -->
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
<strong>Subject:</strong> [OMPI devel] Problems compiling 1.5.3 on ARM<br>
<strong>From:</strong> <a href="mailto:martin.bogomolni_at_[hidden]?Subject=Re:%20[OMPI%20devel]%20Problems%20compiling%201.5.3%20on%20ARM"><em>martin.bogomolni_at_[hidden]</em></a><br>
<strong>Date:</strong> 2011-07-11 17:34:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9502.php">Ralph Castain: "Re: [OMPI devel] Libevent visibility problem"</a>
<li><strong>Previous message:</strong> <a href="9500.php">Barrett, Brian W: "[OMPI devel] Libevent visibility problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9503.php">Jeff Squyres: "Re: [OMPI devel] Problems compiling 1.5.3 on ARM"</a>
<li><strong>Reply:</strong> <a href="9503.php">Jeff Squyres: "Re: [OMPI devel] Problems compiling 1.5.3 on ARM"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Using the following configure line:
<br>
<p>./configure CFLAGS=-Wa,-mimplicit-it=thumb --with-ft=cr --with-blcr=/usr --with-blcr-libdir=/usr/lib --with-tm --prefix=/usr --mandir=/usr/share/man --infodir=/usr/share/info --sysconfdir=/etc/openmpi --libdir=/usr/lib/openmpi/lib --includedir=/usr/lib/openmpi/include --with-devel-headers --enable-heterogeneous --enable-static
<br>
<p>-------------------------------------------------------------------------------------
<br>
<p>Configuration succeeds, but when I attempted to compile OpenMPI the following error occurred:
<br>
<p>Making all in asm
<br>
make[2]: Entering directory `/tmp/deb-src/openmpi-1.5.3/opal/asm'
<br>
&nbsp;&nbsp;CC     asm.lo
<br>
In file included from asm.c:21:0:
<br>
../../opal/include/opal/sys/atomic.h:150:33: fatal error: opal/sys/arm/atomic.h: No such file or directory
<br>
compilation terminated.
<br>
make[2]: *** [asm.lo] Error 1
<br>
make[2]: Leaving directory `/tmp/deb-src/openmpi-1.5.3/opal/asm'
<br>
make[1]: *** [all-recursive] Error 1
<br>
make[1]: Leaving directory `/tmp/deb-src/openmpi-1.5.3/opal'
<br>
make: *** [all-recursive] Error 1
<br>
<p>The file &quot;arm/atomic.h&quot; is missing.    This was verified by running 'find'
<br>
<p>root_at_vs2:/usr/src/deb-src/openmpi-1.5.3# find . -name &quot;atomic.h&quot;
<br>
./opal/mca/memory/linux/sysdeps/generic/atomic.h
<br>
./opal/include/opal/sys/amd64/atomic.h
<br>
./opal/include/opal/sys/alpha/atomic.h
<br>
./opal/include/opal/sys/win32/atomic.h
<br>
./opal/include/opal/sys/ia64/atomic.h
<br>
./opal/include/opal/sys/sparcv9/atomic.h
<br>
./opal/include/opal/sys/ia32/atomic.h
<br>
./opal/include/opal/sys/sparc/atomic.h
<br>
./opal/include/opal/sys/mips/atomic.h
<br>
./opal/include/opal/sys/atomic.h
<br>
./opal/include/opal/sys/powerpc/atomic.h
<br>
<p>--------------------------------------------------------------------------------------
<br>
<p>Attempting to use the patch from the list : armv7-a.patch yielded:
<br>
<p>root_at_vs2:/usr/src/deb-src/openmpi-1.5.3# patch -p1 -i arm-v7a.patch -F6
<br>
patching file opal/asm/generate-asm.pl
<br>
Reversed (or previously applied) patch detected!  Assume -R? [n] n
<br>
Apply anyway? [n] n
<br>
Skipping patch.
<br>
1 out of 1 hunk ignored -- saving rejects to file opal/asm/generate-asm.pl.rej
<br>
patching file opal/asm/asm-data.txt
<br>
Hunk #1 succeeded at 57 (offset 9 lines).
<br>
patching file opal/asm/base/ARM.asm
<br>
patching file opal/include/opal/sys/arm/atomic.h
<br>
patching file opal/include/opal/sys/arm/timer.h
<br>
patching file opal/include/opal/sys/arm/Makefile.am
<br>
patching file opal/include/opal/sys/arm/update.sh
<br>
patching file opal/include/opal/sys/atomic.h
<br>
Reversed (or previously applied) patch detected!  Assume -R? [n] n
<br>
Apply anyway? [n] n
<br>
Skipping patch.
<br>
1 out of 1 hunk ignored -- saving rejects to file opal/include/opal/sys/atomic.h.rej
<br>
patching file opal/include/opal/sys/timer.h
<br>
Reversed (or previously applied) patch detected!  Assume -R? [n] n
<br>
Apply anyway? [n] n
<br>
Skipping patch.
<br>
1 out of 1 hunk ignored -- saving rejects to file opal/include/opal/sys/timer.h.rej
<br>
patching file opal/include/opal/sys/architecture.h
<br>
Reversed (or previously applied) patch detected!  Assume -R? [n] n
<br>
Apply anyway? [n] n
<br>
Skipping patch.
<br>
1 out of 1 hunk ignored -- saving rejects to file opal/include/opal/sys/architecture.h.rej
<br>
patching file opal/config/opal_config_asm.m4
<br>
Reversed (or previously applied) patch detected!  Assume -R? [n] n
<br>
Apply anyway? [n] n
<br>
Skipping patch.
<br>
1 out of 1 hunk ignored -- saving rejects to file opal/config/opal_config_asm.m4.rej
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9502.php">Ralph Castain: "Re: [OMPI devel] Libevent visibility problem"</a>
<li><strong>Previous message:</strong> <a href="9500.php">Barrett, Brian W: "[OMPI devel] Libevent visibility problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9503.php">Jeff Squyres: "Re: [OMPI devel] Problems compiling 1.5.3 on ARM"</a>
<li><strong>Reply:</strong> <a href="9503.php">Jeff Squyres: "Re: [OMPI devel] Problems compiling 1.5.3 on ARM"</a>
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

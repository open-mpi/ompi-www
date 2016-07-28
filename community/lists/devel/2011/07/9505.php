<?
$subject_val = "Re: [OMPI devel] Problems compiling 1.5.3 on ARM";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jul 12 10:35:22 2011" -->
<!-- isoreceived="20110712143522" -->
<!-- sent="Tue, 12 Jul 2011 10:35:12 -0400" -->
<!-- isosent="20110712143512" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Problems compiling 1.5.3 on ARM" -->
<!-- id="E13BAE45-2B72-4D49-9BE6-F92B2647A65E_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="1A5B1999-AB8E-411B-8CD3-7AB40C7662B7_at_calxeda.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Problems compiling 1.5.3 on ARM<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-07-12 10:35:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9506.php">Barrett, Brian W: "Re: [OMPI devel] Libevent visibility problem"</a>
<li><strong>Previous message:</strong> <a href="9504.php">Martin Bogomolni: "Re: [OMPI devel] Problems compiling 1.5.3 on ARM"</a>
<li><strong>In reply to:</strong> <a href="9504.php">Martin Bogomolni: "Re: [OMPI devel] Problems compiling 1.5.3 on ARM"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
That is quite possible.  ARM support was one of the advertised features in 1.5.3; it really should have been there.  Plus, a bunch of other random bugs have been fixed -- we've been waiting for an IB-related bug to get fixed, but it isn't moving fast, so perhaps we should just do a 1.5.4 release and push the IB-related bug fix to 1.5.4...
<br>
<p><p>On Jul 11, 2011, at 10:14 PM, Martin Bogomolni wrote:
<br>
<p><span class="quotelev1">&gt; Thanks Jeff.   Point release the tarball to 1.5.4 then for inclusion in Fedora, Debian, and Ubuntu?  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -Martin
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Jul 11, 2011, at 6:52 PM, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Yowza.  Our ARM contact has been testing from SVN, not the tarballs -- it looks like the ARM ASM was not included in the tarball.  :-(
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I just fixed that in the trunk:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;   <a href="https://svn.open-mpi.org/trac/ompi/changeset/24875">https://svn.open-mpi.org/trac/ompi/changeset/24875</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I'll get that moved over to the v1.5 tree shortly.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Jul 11, 2011, at 5:34 PM, martin.bogomolni_at_[hidden] wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Using the following configure line:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ./configure CFLAGS=-Wa,-mimplicit-it=thumb --with-ft=cr --with-blcr=/usr --with-blcr-libdir=/usr/lib --with-tm --prefix=/usr --mandir=/usr/share/man --infodir=/usr/share/info --sysconfdir=/etc/openmpi --libdir=/usr/lib/openmpi/lib --includedir=/usr/lib/openmpi/include --with-devel-headers --enable-heterogeneous --enable-static
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -------------------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Configuration succeeds, but when I attempted to compile OpenMPI the following error occurred:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Making all in asm
</span><br>
<span class="quotelev3">&gt;&gt;&gt; make[2]: Entering directory `/tmp/deb-src/openmpi-1.5.3/opal/asm'
</span><br>
<span class="quotelev3">&gt;&gt;&gt; CC     asm.lo
</span><br>
<span class="quotelev3">&gt;&gt;&gt; In file included from asm.c:21:0:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ../../opal/include/opal/sys/atomic.h:150:33: fatal error: opal/sys/arm/atomic.h: No such file or directory
</span><br>
<span class="quotelev3">&gt;&gt;&gt; compilation terminated.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; make[2]: *** [asm.lo] Error 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; make[2]: Leaving directory `/tmp/deb-src/openmpi-1.5.3/opal/asm'
</span><br>
<span class="quotelev3">&gt;&gt;&gt; make[1]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; make[1]: Leaving directory `/tmp/deb-src/openmpi-1.5.3/opal'
</span><br>
<span class="quotelev3">&gt;&gt;&gt; make: *** [all-recursive] Error 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The file &quot;arm/atomic.h&quot; is missing.    This was verified by running 'find'
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; root_at_vs2:/usr/src/deb-src/openmpi-1.5.3# find . -name &quot;atomic.h&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ./opal/mca/memory/linux/sysdeps/generic/atomic.h
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ./opal/include/opal/sys/amd64/atomic.h
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ./opal/include/opal/sys/alpha/atomic.h
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ./opal/include/opal/sys/win32/atomic.h
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ./opal/include/opal/sys/ia64/atomic.h
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ./opal/include/opal/sys/sparcv9/atomic.h
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ./opal/include/opal/sys/ia32/atomic.h
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ./opal/include/opal/sys/sparc/atomic.h
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ./opal/include/opal/sys/mips/atomic.h
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ./opal/include/opal/sys/atomic.h
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ./opal/include/opal/sys/powerpc/atomic.h
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --------------------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Attempting to use the patch from the list : armv7-a.patch yielded:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; root_at_vs2:/usr/src/deb-src/openmpi-1.5.3# patch -p1 -i arm-v7a.patch -F6
</span><br>
<span class="quotelev3">&gt;&gt;&gt; patching file opal/asm/generate-asm.pl
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Reversed (or previously applied) patch detected!  Assume -R? [n] n
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Apply anyway? [n] n
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Skipping patch.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 1 out of 1 hunk ignored -- saving rejects to file opal/asm/generate-asm.pl.rej
</span><br>
<span class="quotelev3">&gt;&gt;&gt; patching file opal/asm/asm-data.txt
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hunk #1 succeeded at 57 (offset 9 lines).
</span><br>
<span class="quotelev3">&gt;&gt;&gt; patching file opal/asm/base/ARM.asm
</span><br>
<span class="quotelev3">&gt;&gt;&gt; patching file opal/include/opal/sys/arm/atomic.h
</span><br>
<span class="quotelev3">&gt;&gt;&gt; patching file opal/include/opal/sys/arm/timer.h
</span><br>
<span class="quotelev3">&gt;&gt;&gt; patching file opal/include/opal/sys/arm/Makefile.am
</span><br>
<span class="quotelev3">&gt;&gt;&gt; patching file opal/include/opal/sys/arm/update.sh
</span><br>
<span class="quotelev3">&gt;&gt;&gt; patching file opal/include/opal/sys/atomic.h
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Reversed (or previously applied) patch detected!  Assume -R? [n] n
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Apply anyway? [n] n
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Skipping patch.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 1 out of 1 hunk ignored -- saving rejects to file opal/include/opal/sys/atomic.h.rej
</span><br>
<span class="quotelev3">&gt;&gt;&gt; patching file opal/include/opal/sys/timer.h
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Reversed (or previously applied) patch detected!  Assume -R? [n] n
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Apply anyway? [n] n
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Skipping patch.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 1 out of 1 hunk ignored -- saving rejects to file opal/include/opal/sys/timer.h.rej
</span><br>
<span class="quotelev3">&gt;&gt;&gt; patching file opal/include/opal/sys/architecture.h
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Reversed (or previously applied) patch detected!  Assume -R? [n] n
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Apply anyway? [n] n
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Skipping patch.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 1 out of 1 hunk ignored -- saving rejects to file opal/include/opal/sys/architecture.h.rej
</span><br>
<span class="quotelev3">&gt;&gt;&gt; patching file opal/config/opal_config_asm.m4
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Reversed (or previously applied) patch detected!  Assume -R? [n] n
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Apply anyway? [n] n
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Skipping patch.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 1 out of 1 hunk ignored -- saving rejects to file opal/config/opal_config_asm.m4.rej
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
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
<span class="quotelev2">&gt;&gt; For corporate legal information go to:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
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
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9506.php">Barrett, Brian W: "Re: [OMPI devel] Libevent visibility problem"</a>
<li><strong>Previous message:</strong> <a href="9504.php">Martin Bogomolni: "Re: [OMPI devel] Problems compiling 1.5.3 on ARM"</a>
<li><strong>In reply to:</strong> <a href="9504.php">Martin Bogomolni: "Re: [OMPI devel] Problems compiling 1.5.3 on ARM"</a>
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

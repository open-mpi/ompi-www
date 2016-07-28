<?
$subject_val = "Re: [OMPI devel] vt compiler warnings and errors";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan 31 08:09:33 2008" -->
<!-- isoreceived="20080131130933" -->
<!-- sent="Thu, 31 Jan 2008 08:09:23 -0500" -->
<!-- isosent="20080131130923" -->
<!-- name="Tim Prins" -->
<!-- email="tprins_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] vt compiler warnings and errors" -->
<!-- id="47A1C883.4090808_at_cs.indiana.edu" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="1201626784.30802.57.camel_at_ricolap" -->
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
<strong>Subject:</strong> Re: [OMPI devel] vt compiler warnings and errors<br>
<strong>From:</strong> Tim Prins (<em>tprins_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-01-31 08:09:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3100.php">Don Kerr: "Re: [OMPI devel] 32 bit udapl warnings"</a>
<li><strong>Previous message:</strong> <a href="3098.php">Tim Prins: "[OMPI devel] 32 bit udapl warnings"</a>
<li><strong>In reply to:</strong> <a href="3078.php">Matthias Jurenz: "Re: [OMPI devel] vt compiler warnings and errors"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3105.php">Matthias Jurenz: "Re: [OMPI devel] vt compiler warnings and errors"</a>
<li><strong>Reply:</strong> <a href="3105.php">Matthias Jurenz: "Re: [OMPI devel] vt compiler warnings and errors"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Matthias,
<br>
<p>I just noticed something else that seems odd. On a fresh checkout, I did 
<br>
a autogen and configure. Then I type 'make clean'. Things seem to 
<br>
progress normally, but once it gets to ompi/contrib/vt/vt/extlib/otf, a 
<br>
new configure script gets run.
<br>
<p>Specifically:
<br>
[tprins_at_sif test]$ make clean
<br>
&lt;lots of output&gt;
<br>
Making clean in otf
<br>
make[5]: Entering directory 
<br>
`/san/homedirs/tprins/sif/test/ompi/contrib/vt/vt/extlib/otf'
<br>
&nbsp;&nbsp;cd . &amp;&amp; /bin/sh 
<br>
/u/tprins/sif/test/ompi/contrib/vt/vt/extlib/otf/missing --run 
<br>
automake-1.10 --gnu
<br>
cd . &amp;&amp; /bin/sh /u/tprins/sif/test/ompi/contrib/vt/vt/extlib/otf/missing 
<br>
--run autoconf
<br>
/bin/sh ./config.status --recheck
<br>
running CONFIG_SHELL=/bin/sh /bin/sh ./configure  --with-zlib-lib=-lz 
<br>
--prefix=/usr/local --exec-prefix=/usr/local --bindir=/usr/local/bin 
<br>
--libdir=/usr/local/lib --includedir=/usr/local/include 
<br>
--datarootdir=/usr/local/share/vampirtrace 
<br>
--datadir=${prefix}/share/${PACKAGE_TARNAME} 
<br>
--docdir=${prefix}/share/${PACKAGE_TARNAME}/doc --cache-file=/dev/null 
<br>
--srcdir=. CXXFLAGS=-g -Wall -Wundef -Wno-long-long -finline-functions 
<br>
-pthread LDFLAGS=  LIBS=-lnsl -lutil  -lm  CPPFLAGS=  CFLAGS=-g -Wall 
<br>
-Wundef -Wno-long-long -Wsign-compare -Wmissing-prototypes 
<br>
-Wstrict-prototypes -Wcomment -pedantic 
<br>
-Werror-implicit-function-declaration -finline-functions 
<br>
-fno-strict-aliasing -pthread FFLAGS=  --no-create --no-recursion
<br>
checking build system type... x86_64-unknown-linux-gnu
<br>
&lt;configure output&gt;
<br>
&lt;rest of make clean&gt;
<br>
<p>Not sure if this is expected behavior, but it seems wrong to me.
<br>
<p>Thanks,
<br>
<p>Tim
<br>
<p>Matthias Jurenz wrote:
<br>
<span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; all three VT related errors which MTT reported should be fixed now.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 516:
</span><br>
<span class="quotelev1">&gt; The fix from George Bosilca at this morning should work on MacOS PPC. 
</span><br>
<span class="quotelev1">&gt; Thanks!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 517:
</span><br>
<span class="quotelev1">&gt; The compile error occurred due to a missing header include.
</span><br>
<span class="quotelev1">&gt; Futhermore, the compiler warnings should be also fixed.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 518:
</span><br>
<span class="quotelev1">&gt; I have added a check whether MPI I/O is available and add the 
</span><br>
<span class="quotelev1">&gt; corresponding VT's
</span><br>
<span class="quotelev1">&gt; configure option to enable/disable MPI I/O support. Therefor I used the 
</span><br>
<span class="quotelev1">&gt; variable
</span><br>
<span class="quotelev1">&gt; &quot;define_mpi_io&quot; from 'ompi/mca/io/configure.m4'. Is that o.k. or should 
</span><br>
<span class="quotelev1">&gt; I use another
</span><br>
<span class="quotelev1">&gt; variable ?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Matthias
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Di, 2008-01-29 at 09:19 -0500, Jeff Squyres wrote:
</span><br>
<span class="quotelev2">&gt;&gt; I got a bunch of compiler warnings and errors with VT on the PGI  
</span><br>
<span class="quotelev2">&gt;&gt; compiler last night -- my mail client won't paste it in nicely.  :-(
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; See these MTT reports for details:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; - On Absoft systems:
</span><br>
<span class="quotelev2">&gt;&gt;    <a href="http://www.open-mpi.org/mtt/index.php?do_redir=516">http://www.open-mpi.org/mtt/index.php?do_redir=516</a>
</span><br>
<span class="quotelev2">&gt;&gt; - On Cisco systems:
</span><br>
<span class="quotelev2">&gt;&gt;    With PGI compilers:
</span><br>
<span class="quotelev2">&gt;&gt;        <a href="http://www.open-mpi.org/mtt/index.php?do_redir=517">http://www.open-mpi.org/mtt/index.php?do_redir=517</a>
</span><br>
<span class="quotelev2">&gt;&gt;    With GNU compilers:
</span><br>
<span class="quotelev2">&gt;&gt;        <a href="http://www.open-mpi.org/mtt/index.php?do_redir=518">http://www.open-mpi.org/mtt/index.php?do_redir=518</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The output may be a bit hard to read -- for MTT builds, we separate  
</span><br>
<span class="quotelev2">&gt;&gt; the stdout and stderr into 2 streams.  So you kinda have to merge them  
</span><br>
<span class="quotelev2">&gt;&gt; in your head; sorry...
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Matthias Jurenz,
</span><br>
<span class="quotelev1">&gt; Center for Information Services and
</span><br>
<span class="quotelev1">&gt; High Performance Computing (ZIH), TU Dresden,
</span><br>
<span class="quotelev1">&gt; Willersbau A106, Zellescher Weg 12, 01062 Dresden
</span><br>
<span class="quotelev1">&gt; phone +49-351-463-31945, fax +49-351-463-37773
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ------------------------------------------------------------------------
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
<li><strong>Next message:</strong> <a href="3100.php">Don Kerr: "Re: [OMPI devel] 32 bit udapl warnings"</a>
<li><strong>Previous message:</strong> <a href="3098.php">Tim Prins: "[OMPI devel] 32 bit udapl warnings"</a>
<li><strong>In reply to:</strong> <a href="3078.php">Matthias Jurenz: "Re: [OMPI devel] vt compiler warnings and errors"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3105.php">Matthias Jurenz: "Re: [OMPI devel] vt compiler warnings and errors"</a>
<li><strong>Reply:</strong> <a href="3105.php">Matthias Jurenz: "Re: [OMPI devel] vt compiler warnings and errors"</a>
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

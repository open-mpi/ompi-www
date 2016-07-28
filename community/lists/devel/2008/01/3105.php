<?
$subject_val = "Re: [OMPI devel] vt compiler warnings and errors";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan 31 12:36:38 2008" -->
<!-- isoreceived="20080131173638" -->
<!-- sent="Thu, 31 Jan 2008 18:36:29 +0100" -->
<!-- isosent="20080131173629" -->
<!-- name="Matthias Jurenz" -->
<!-- email="matthias.jurenz_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] vt compiler warnings and errors" -->
<!-- id="1201800989.5763.119.camel_at_ricolap" -->
<!-- charset="utf-8" -->
<!-- inreplyto="47A1C883.4090808_at_cs.indiana.edu" -->
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
<strong>From:</strong> Matthias Jurenz (<em>matthias.jurenz_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-01-31 12:36:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3106.php">Jeff Squyres: "Re: [OMPI devel] vt compiler warnings and errors"</a>
<li><strong>Previous message:</strong> <a href="3104.php">Josh Hursey: "Re: [OMPI devel] SnapC"</a>
<li><strong>In reply to:</strong> <a href="3099.php">Tim Prins: "Re: [OMPI devel] vt compiler warnings and errors"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3106.php">Jeff Squyres: "Re: [OMPI devel] vt compiler warnings and errors"</a>
<li><strong>Reply:</strong> <a href="3106.php">Jeff Squyres: "Re: [OMPI devel] vt compiler warnings and errors"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2008/02/3115.php">Tim Prins: "[OMPI devel] More VT warnings"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Tim,
<br>
<p>that seems wrong for me, too. I could not reproduce this on my computer.
<br>
The VT-integration comes with an own configure script, which will not
<br>
created by the OMPI's autogen.sh.
<br>
I have not really an idea what's going wrong... I suppose, the problem
<br>
is that you use another version
<br>
of the Autotools as I have used to bootstap VT ?!? The VT's configure
<br>
script was created by following
<br>
version of the Autotools:
<br>
<p>autoconf 2.61, automake 1.10, libtool 1.5.24.
<br>
<p>Which version of the Autotools you are using to boostrap OpenMPI ?
<br>
<p><p>Matthias
<br>
<p><p>On Do, 2008-01-31 at 08:09 -0500, Tim Prins wrote:
<br>
<p><span class="quotelev1">&gt; Hi Matthias,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I just noticed something else that seems odd. On a fresh checkout, I did 
</span><br>
<span class="quotelev1">&gt; a autogen and configure. Then I type 'make clean'. Things seem to 
</span><br>
<span class="quotelev1">&gt; progress normally, but once it gets to ompi/contrib/vt/vt/extlib/otf, a 
</span><br>
<span class="quotelev1">&gt; new configure script gets run.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Specifically:
</span><br>
<span class="quotelev1">&gt; [tprins_at_sif test]$ make clean
</span><br>
<span class="quotelev1">&gt; &lt;lots of output&gt;
</span><br>
<span class="quotelev1">&gt; Making clean in otf
</span><br>
<span class="quotelev1">&gt; make[5]: Entering directory 
</span><br>
<span class="quotelev1">&gt; `/san/homedirs/tprins/sif/test/ompi/contrib/vt/vt/extlib/otf'
</span><br>
<span class="quotelev1">&gt;   cd . &amp;&amp; /bin/sh 
</span><br>
<span class="quotelev1">&gt; /u/tprins/sif/test/ompi/contrib/vt/vt/extlib/otf/missing --run 
</span><br>
<span class="quotelev1">&gt; automake-1.10 --gnu
</span><br>
<span class="quotelev1">&gt; cd . &amp;&amp; /bin/sh /u/tprins/sif/test/ompi/contrib/vt/vt/extlib/otf/missing 
</span><br>
<span class="quotelev1">&gt; --run autoconf
</span><br>
<span class="quotelev1">&gt; /bin/sh ./config.status --recheck
</span><br>
<span class="quotelev1">&gt; running CONFIG_SHELL=/bin/sh /bin/sh ./configure  --with-zlib-lib=-lz 
</span><br>
<span class="quotelev1">&gt; --prefix=/usr/local --exec-prefix=/usr/local --bindir=/usr/local/bin 
</span><br>
<span class="quotelev1">&gt; --libdir=/usr/local/lib --includedir=/usr/local/include 
</span><br>
<span class="quotelev1">&gt; --datarootdir=/usr/local/share/vampirtrace 
</span><br>
<span class="quotelev1">&gt; --datadir=${prefix}/share/${PACKAGE_TARNAME} 
</span><br>
<span class="quotelev1">&gt; --docdir=${prefix}/share/${PACKAGE_TARNAME}/doc --cache-file=/dev/null 
</span><br>
<span class="quotelev1">&gt; --srcdir=. CXXFLAGS=-g -Wall -Wundef -Wno-long-long -finline-functions 
</span><br>
<span class="quotelev1">&gt; -pthread LDFLAGS=  LIBS=-lnsl -lutil  -lm  CPPFLAGS=  CFLAGS=-g -Wall 
</span><br>
<span class="quotelev1">&gt; -Wundef -Wno-long-long -Wsign-compare -Wmissing-prototypes 
</span><br>
<span class="quotelev1">&gt; -Wstrict-prototypes -Wcomment -pedantic 
</span><br>
<span class="quotelev1">&gt; -Werror-implicit-function-declaration -finline-functions 
</span><br>
<span class="quotelev1">&gt; -fno-strict-aliasing -pthread FFLAGS=  --no-create --no-recursion
</span><br>
<span class="quotelev1">&gt; checking build system type... x86_64-unknown-linux-gnu
</span><br>
<span class="quotelev1">&gt; &lt;configure output&gt;
</span><br>
<span class="quotelev1">&gt; &lt;rest of make clean&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Not sure if this is expected behavior, but it seems wrong to me.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Tim
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Matthias Jurenz wrote:
</span><br>
<span class="quotelev2">&gt; &gt; Hello,
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; all three VT related errors which MTT reported should be fixed now.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 516:
</span><br>
<span class="quotelev2">&gt; &gt; The fix from George Bosilca at this morning should work on MacOS PPC. 
</span><br>
<span class="quotelev2">&gt; &gt; Thanks!
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 517:
</span><br>
<span class="quotelev2">&gt; &gt; The compile error occurred due to a missing header include.
</span><br>
<span class="quotelev2">&gt; &gt; Futhermore, the compiler warnings should be also fixed.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 518:
</span><br>
<span class="quotelev2">&gt; &gt; I have added a check whether MPI I/O is available and add the 
</span><br>
<span class="quotelev2">&gt; &gt; corresponding VT's
</span><br>
<span class="quotelev2">&gt; &gt; configure option to enable/disable MPI I/O support. Therefor I used the 
</span><br>
<span class="quotelev2">&gt; &gt; variable
</span><br>
<span class="quotelev2">&gt; &gt; &quot;define_mpi_io&quot; from 'ompi/mca/io/configure.m4'. Is that o.k. or should 
</span><br>
<span class="quotelev2">&gt; &gt; I use another
</span><br>
<span class="quotelev2">&gt; &gt; variable ?
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Matthias
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; On Di, 2008-01-29 at 09:19 -0500, Jeff Squyres wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; I got a bunch of compiler warnings and errors with VT on the PGI  
</span><br>
<span class="quotelev3">&gt; &gt;&gt; compiler last night -- my mail client won't paste it in nicely.  :-(
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; See these MTT reports for details:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; - On Absoft systems:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;    <a href="http://www.open-mpi.org/mtt/index.php?do_redir=516">http://www.open-mpi.org/mtt/index.php?do_redir=516</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt; - On Cisco systems:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;    With PGI compilers:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;        <a href="http://www.open-mpi.org/mtt/index.php?do_redir=517">http://www.open-mpi.org/mtt/index.php?do_redir=517</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt;    With GNU compilers:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;        <a href="http://www.open-mpi.org/mtt/index.php?do_redir=518">http://www.open-mpi.org/mtt/index.php?do_redir=518</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; The output may be a bit hard to read -- for MTT builds, we separate  
</span><br>
<span class="quotelev3">&gt; &gt;&gt; the stdout and stderr into 2 streams.  So you kinda have to merge them  
</span><br>
<span class="quotelev3">&gt; &gt;&gt; in your head; sorry...
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt; --
</span><br>
<span class="quotelev2">&gt; &gt; Matthias Jurenz,
</span><br>
<span class="quotelev2">&gt; &gt; Center for Information Services and
</span><br>
<span class="quotelev2">&gt; &gt; High Performance Computing (ZIH), TU Dresden,
</span><br>
<span class="quotelev2">&gt; &gt; Willersbau A106, Zellescher Weg 12, 01062 Dresden
</span><br>
<span class="quotelev2">&gt; &gt; phone +49-351-463-31945, fax +49-351-463-37773
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; ------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt; 
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
<span class="quotelev1">&gt; 
</span><br>
<p><pre>
--
Matthias Jurenz,
Center for Information Services and 
High Performance Computing (ZIH), TU Dresden, 
Willersbau A106, Zellescher Weg 12, 01062 Dresden
phone +49-351-463-31945, fax +49-351-463-37773
</pre>
<p>
<p>
<br><p>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-3105/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>application/x-pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-3105/smime.p7s">smime.p7s</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3106.php">Jeff Squyres: "Re: [OMPI devel] vt compiler warnings and errors"</a>
<li><strong>Previous message:</strong> <a href="3104.php">Josh Hursey: "Re: [OMPI devel] SnapC"</a>
<li><strong>In reply to:</strong> <a href="3099.php">Tim Prins: "Re: [OMPI devel] vt compiler warnings and errors"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3106.php">Jeff Squyres: "Re: [OMPI devel] vt compiler warnings and errors"</a>
<li><strong>Reply:</strong> <a href="3106.php">Jeff Squyres: "Re: [OMPI devel] vt compiler warnings and errors"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2008/02/3115.php">Tim Prins: "[OMPI devel] More VT warnings"</a>
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

<?
$subject_val = "Re: [OMPI devel] vt compiler warnings and errors";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan 31 13:11:28 2008" -->
<!-- isoreceived="20080131181128" -->
<!-- sent="Thu, 31 Jan 2008 13:10:36 -0500" -->
<!-- isosent="20080131181036" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] vt compiler warnings and errors" -->
<!-- id="8D296FD4-C2C1-4D17-97BB-CB86526A7F74_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="1201800989.5763.119.camel_at_ricolap" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-01-31 13:10:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3107.php">Ralph Castain: "Re: [OMPI devel] orte_ns_base_select failed: returned value -1 instead of ORTE_SUCCESS"</a>
<li><strong>Previous message:</strong> <a href="3105.php">Matthias Jurenz: "Re: [OMPI devel] vt compiler warnings and errors"</a>
<li><strong>In reply to:</strong> <a href="3105.php">Matthias Jurenz: "Re: [OMPI devel] vt compiler warnings and errors"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2008/02/3108.php">Andreas Knüpfer: "Re: [OMPI devel] vt compiler warnings and errors"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2008/02/3108.php">Andreas Knüpfer: "Re: [OMPI devel] vt compiler warnings and errors"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2008/02/3109.php">Ralf Wildenhues: "Re: [OMPI devel] vt compiler warnings and errors"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ah -- I didn't notice this before -- do you have a configure script  
<br>
committed to SVN?  If so, this could be the problem.
<br>
<p>Whether what Tim sees happens or not will depend on the timestamps  
<br>
that SVN puts on configure and all of the files dependent upon  
<br>
configure (Makefile.in, Makefile, ...etc.) in the VT tree.  If some of  
<br>
them have &quot;bad&quot; timestamps, then the dependencies in the Makefiles can  
<br>
end up re-running VT's configure, re-create configure, etc.
<br>
<p>Is there a way to get OMPI's autogen to also autogen the VT software?   
<br>
This would ensure one, consistent set of timestamps (not dependent  
<br>
upon what timestamps SVN wrote to your filesystem for these sensitive  
<br>
files).
<br>
<p><p><p>On Jan 31, 2008, at 12:36 PM, Matthias Jurenz wrote:
<br>
<p><span class="quotelev1">&gt; Hi Tim,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; that seems wrong for me, too. I could not reproduce this on my  
</span><br>
<span class="quotelev1">&gt; computer.
</span><br>
<span class="quotelev1">&gt; The VT-integration comes with an own configure script, which will  
</span><br>
<span class="quotelev1">&gt; not created by the OMPI's autogen.sh.
</span><br>
<span class="quotelev1">&gt; I have not really an idea what's going wrong... I suppose, the  
</span><br>
<span class="quotelev1">&gt; problem is that you use another version
</span><br>
<span class="quotelev1">&gt; of the Autotools as I have used to bootstap VT ?!? The VT's  
</span><br>
<span class="quotelev1">&gt; configure script was created by following
</span><br>
<span class="quotelev1">&gt; version of the Autotools:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; autoconf 2.61, automake 1.10, libtool 1.5.24.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Which version of the Autotools you are using to boostrap OpenMPI ?
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
<span class="quotelev1">&gt; On Do, 2008-01-31 at 08:09 -0500, Tim Prins wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi Matthias,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I just noticed something else that seems odd. On a fresh checkout,  
</span><br>
<span class="quotelev2">&gt;&gt; I did
</span><br>
<span class="quotelev2">&gt;&gt; a autogen and configure. Then I type 'make clean'. Things seem to
</span><br>
<span class="quotelev2">&gt;&gt; progress normally, but once it gets to ompi/contrib/vt/vt/extlib/ 
</span><br>
<span class="quotelev2">&gt;&gt; otf, a
</span><br>
<span class="quotelev2">&gt;&gt; new configure script gets run.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Specifically:
</span><br>
<span class="quotelev2">&gt;&gt; [tprins_at_sif test]$ make clean
</span><br>
<span class="quotelev2">&gt;&gt; &lt;lots of output&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Making clean in otf
</span><br>
<span class="quotelev2">&gt;&gt; make[5]: Entering directory
</span><br>
<span class="quotelev2">&gt;&gt; `/san/homedirs/tprins/sif/test/ompi/contrib/vt/vt/extlib/otf'
</span><br>
<span class="quotelev2">&gt;&gt;   cd . &amp;&amp; /bin/sh
</span><br>
<span class="quotelev2">&gt;&gt; /u/tprins/sif/test/ompi/contrib/vt/vt/extlib/otf/missing --run
</span><br>
<span class="quotelev2">&gt;&gt; automake-1.10 --gnu
</span><br>
<span class="quotelev2">&gt;&gt; cd . &amp;&amp; /bin/sh /u/tprins/sif/test/ompi/contrib/vt/vt/extlib/otf/ 
</span><br>
<span class="quotelev2">&gt;&gt; missing
</span><br>
<span class="quotelev2">&gt;&gt; --run autoconf
</span><br>
<span class="quotelev2">&gt;&gt; /bin/sh ./config.status --recheck
</span><br>
<span class="quotelev2">&gt;&gt; running CONFIG_SHELL=/bin/sh /bin/sh ./configure  --with-zlib-lib=-lz
</span><br>
<span class="quotelev2">&gt;&gt; --prefix=/usr/local --exec-prefix=/usr/local --bindir=/usr/local/bin
</span><br>
<span class="quotelev2">&gt;&gt; --libdir=/usr/local/lib --includedir=/usr/local/include
</span><br>
<span class="quotelev2">&gt;&gt; --datarootdir=/usr/local/share/vampirtrace
</span><br>
<span class="quotelev2">&gt;&gt; --datadir=${prefix}/share/${PACKAGE_TARNAME}
</span><br>
<span class="quotelev2">&gt;&gt; --docdir=${prefix}/share/${PACKAGE_TARNAME}/doc --cache-file=/dev/ 
</span><br>
<span class="quotelev2">&gt;&gt; null
</span><br>
<span class="quotelev2">&gt;&gt; --srcdir=. CXXFLAGS=-g -Wall -Wundef -Wno-long-long -finline- 
</span><br>
<span class="quotelev2">&gt;&gt; functions
</span><br>
<span class="quotelev2">&gt;&gt; -pthread LDFLAGS=  LIBS=-lnsl -lutil  -lm  CPPFLAGS=  CFLAGS=-g -Wall
</span><br>
<span class="quotelev2">&gt;&gt; -Wundef -Wno-long-long -Wsign-compare -Wmissing-prototypes
</span><br>
<span class="quotelev2">&gt;&gt; -Wstrict-prototypes -Wcomment -pedantic
</span><br>
<span class="quotelev2">&gt;&gt; -Werror-implicit-function-declaration -finline-functions
</span><br>
<span class="quotelev2">&gt;&gt; -fno-strict-aliasing -pthread FFLAGS=  --no-create --no-recursion
</span><br>
<span class="quotelev2">&gt;&gt; checking build system type... x86_64-unknown-linux-gnu
</span><br>
<span class="quotelev2">&gt;&gt; &lt;configure output&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &lt;rest of make clean&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Not sure if this is expected behavior, but it seems wrong to me.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Tim
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Matthias Jurenz wrote:
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Hello,
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; all three VT related errors which MTT reported should be fixed now.
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; 516:
</span><br>
<span class="quotelev3">&gt;&gt; &gt; The fix from George Bosilca at this morning should work on MacOS  
</span><br>
<span class="quotelev2">&gt;&gt; PPC.
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Thanks!
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; 517:
</span><br>
<span class="quotelev3">&gt;&gt; &gt; The compile error occurred due to a missing header include.
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Futhermore, the compiler warnings should be also fixed.
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; 518:
</span><br>
<span class="quotelev3">&gt;&gt; &gt; I have added a check whether MPI I/O is available and add the
</span><br>
<span class="quotelev3">&gt;&gt; &gt; corresponding VT's
</span><br>
<span class="quotelev3">&gt;&gt; &gt; configure option to enable/disable MPI I/O support. Therefor I  
</span><br>
<span class="quotelev2">&gt;&gt; used the
</span><br>
<span class="quotelev3">&gt;&gt; &gt; variable
</span><br>
<span class="quotelev3">&gt;&gt; &gt; &quot;define_mpi_io&quot; from 'ompi/mca/io/configure.m4'. Is that o.k. or  
</span><br>
<span class="quotelev2">&gt;&gt; should
</span><br>
<span class="quotelev3">&gt;&gt; &gt; I use another
</span><br>
<span class="quotelev3">&gt;&gt; &gt; variable ?
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Matthias
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; On Di, 2008-01-29 at 09:19 -0500, Jeff Squyres wrote:
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; I got a bunch of compiler warnings and errors with VT on the PGI
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; compiler last night -- my mail client won't paste it in  
</span><br>
<span class="quotelev2">&gt;&gt; nicely.  :-(
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; See these MTT reports for details:
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; - On Absoft systems:
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;    <a href="http://www.open-mpi.org/mtt/index.php?do_redir=516">http://www.open-mpi.org/mtt/index.php?do_redir=516</a>
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; - On Cisco systems:
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;    With PGI compilers:
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;        <a href="http://www.open-mpi.org/mtt/index.php?do_redir=517">http://www.open-mpi.org/mtt/index.php?do_redir=517</a>
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;    With GNU compilers:
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;        <a href="http://www.open-mpi.org/mtt/index.php?do_redir=518">http://www.open-mpi.org/mtt/index.php?do_redir=518</a>
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; The output may be a bit hard to read -- for MTT builds, we  
</span><br>
<span class="quotelev2">&gt;&gt; separate
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; the stdout and stderr into 2 streams.  So you kinda have to  
</span><br>
<span class="quotelev2">&gt;&gt; merge them
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; in your head; sorry...
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; --
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Matthias Jurenz,
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Center for Information Services and
</span><br>
<span class="quotelev3">&gt;&gt; &gt; High Performance Computing (ZIH), TU Dresden,
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Willersbau A106, Zellescher Weg 12, 01062 Dresden
</span><br>
<span class="quotelev3">&gt;&gt; &gt; phone +49-351-463-31945, fax +49-351-463-37773
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;  
</span><br>
<span class="quotelev2">&gt;&gt; ------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt; &gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
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
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3107.php">Ralph Castain: "Re: [OMPI devel] orte_ns_base_select failed: returned value -1 instead of ORTE_SUCCESS"</a>
<li><strong>Previous message:</strong> <a href="3105.php">Matthias Jurenz: "Re: [OMPI devel] vt compiler warnings and errors"</a>
<li><strong>In reply to:</strong> <a href="3105.php">Matthias Jurenz: "Re: [OMPI devel] vt compiler warnings and errors"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2008/02/3108.php">Andreas Knüpfer: "Re: [OMPI devel] vt compiler warnings and errors"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2008/02/3108.php">Andreas Knüpfer: "Re: [OMPI devel] vt compiler warnings and errors"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2008/02/3109.php">Ralf Wildenhues: "Re: [OMPI devel] vt compiler warnings and errors"</a>
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

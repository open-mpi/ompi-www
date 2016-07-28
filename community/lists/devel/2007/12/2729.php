<?
$subject_val = "Re: [OMPI devel] vt integration";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec  5 12:36:08 2007" -->
<!-- isoreceived="20071205173608" -->
<!-- sent="Wed, 05 Dec 2007 12:36:02 -0500" -->
<!-- isosent="20071205173602" -->
<!-- name="Terry Dontje" -->
<!-- email="Terry.Dontje_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] vt integration" -->
<!-- id="4756E182.2060501_at_sun.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="1196867867.5908.59.camel_at_ricolap" -->
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
<strong>Subject:</strong> Re: [OMPI devel] vt integration<br>
<strong>From:</strong> Terry Dontje (<em>Terry.Dontje_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-12-05 12:36:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2730.php">Arlin Davis: "Re: [OMPI devel] [ofa-general] uDAPL EVD queue length issue"</a>
<li><strong>Previous message:</strong> <a href="2728.php">Brian W. Barrett: "Re: [OMPI devel] vt-integration"</a>
<li><strong>Maybe in reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2007/11/2673.php">Terry Dontje: "[OMPI devel] vt integration"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Have you tested building this with vpath?  I am seeing the following 
<br>
errors during make all (while using a vpath directory):
<br>
<p>Making all in doc
<br>
gmake[5]: Entering directory 
<br>
`/workspace/tdd/ct7/ompi-ws-vt/ompi-vt-integration/builds/ompi-vt-integration/config-data/SunOS/sparc/2007.12.05/64/ompi/contrib/vt/vt/doc'
<br>
cp ../COPYING LICENSE
<br>
cp: cannot access ../COPYING
<br>
gmake[5]: *** [LICENSE] Error 2
<br>
gmake[5]: Leaving directory 
<br>
`/workspace/tdd/ct7/ompi-ws-vt/ompi-vt-integration/builds/ompi-vt-integration/config-data/SunOS/sparc/2007.12.05/64/ompi/contrib/vt/vt/doc'
<br>
<p>The directory ompi/contrib/vt/vt/doc under vpath is essentially empty so 
<br>
I wonder if things aren't set up to copy things correctly.
<br>
<p>--td
<br>
<p>Matthias Jurenz wrote:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Hello Terry,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     the problem should be fixed now. The VT's configure script checks
</span><br>
<span class="quotelev1">&gt;     for the I/O functions
</span><br>
<span class="quotelev1">&gt;     which are a part of the large file extensions (e.g. open64,
</span><br>
<span class="quotelev1">&gt;     creat64, ...). If the system doen't
</span><br>
<span class="quotelev1">&gt;     support these functions the corresponding wrapper functions will
</span><br>
<span class="quotelev1">&gt;     be disabled.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     The new version of VampirTrace (5.4.1) is available on
</span><br>
<span class="quotelev1">&gt;     <a href="http://www.tu-dresden.de/zih/vampirtrace">http://www.tu-dresden.de/zih/vampirtrace</a> .
</span><br>
<span class="quotelev1">&gt;     Futhermore, I have updated the SVN branch 'vt-integration'.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Regards,
</span><br>
<span class="quotelev1">&gt;     Matthias
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;     &gt; I haven't tried to debug the following but I am getting the
</span><br>
<span class="quotelev1">&gt;     following
</span><br>
<span class="quotelev2">&gt;     &gt; errors when building the vt-integration tmp branch on Solaris.  
</span><br>
<span class="quotelev1">&gt;     So I
</span><br>
<span class="quotelev2">&gt;     &gt; don't think the branch is ready for putback yet.
</span><br>
<span class="quotelev2">&gt;     &gt;
</span><br>
<span class="quotelev2">&gt;     &gt; --td
</span><br>
<span class="quotelev2">&gt;     &gt;
</span><br>
<span class="quotelev2">&gt;     &gt; cc -DHAVE_CONFIG_H -I. -I..
</span><br>
<span class="quotelev2">&gt;     &gt;
</span><br>
<span class="quotelev1">&gt;     -I/workspace/tdd/ct7/ompi-ws-vt/ompi-vt-integration/builds/ompi-vt-integration/ompi/contrib/vt/vt/vtlib
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;     &gt;
</span><br>
<span class="quotelev1">&gt;     -I/workspace/tdd/ct7/ompi-ws-vt/ompi-vt-integration/builds/ompi-vt-integration/ompi/contrib/vt/vt/tools/opari/lib
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;     &gt;
</span><br>
<span class="quotelev1">&gt;     -I/workspace/tdd/ct7/ompi-ws-vt/ompi-vt-integration/builds/ompi-vt-integration/ompi/contrib/vt/vt/extlib/otf/otflib
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;     &gt; -I../extlib/otf/otflib       
</span><br>
<span class="quotelev2">&gt;     &gt;
</span><br>
<span class="quotelev1">&gt;     -DBINDIR=\&quot;/workspace/tdd/ct7/ompi-ws-vt/ompi-vt-integration/shared-install/SunOS/i386/2007.11.28/bin\&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;     &gt;
</span><br>
<span class="quotelev1">&gt;     -DDATADIR=\&quot;/workspace/tdd/ct7/ompi-ws-vt/ompi-vt-integration/shared-install/SunOS/i386/2007.11.28/share/vampirtrace\&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;     &gt; -DRFG   -DVT_IOWRAP  -xtarget=generic64 -xarch=generic64 -g -c
</span><br>
<span class="quotelev2">&gt;     &gt;
</span><br>
<span class="quotelev1">&gt;     /workspace/tdd/ct7/ompi-ws-vt/ompi-vt-integration/builds/ompi-vt-integration/ompi/contrib/vt/vt/vtlib/vt_iowrap.c
</span><br>
<span class="quotelev2">&gt;     &gt; cc: Warning: -xarch=generic64 is deprecated, use -m64 to create
</span><br>
<span class="quotelev1">&gt;     64-bit
</span><br>
<span class="quotelev2">&gt;     &gt; programs
</span><br>
<span class="quotelev2">&gt;     &gt; cc: Warning: illegal option -xtarget=generic64
</span><br>
<span class="quotelev2">&gt;     &gt; cc: Warning: -xarch=generic64 is deprecated, use -m64 to create
</span><br>
<span class="quotelev1">&gt;     64-bit
</span><br>
<span class="quotelev2">&gt;     &gt; programs
</span><br>
<span class="quotelev2">&gt;     &gt;
</span><br>
<span class="quotelev1">&gt;     &quot;/workspace/tdd/ct7/ompi-ws-vt/ompi-vt-integration/builds/ompi-vt-integration/ompi/contrib/vt/vt/vtlib/vt_iowrap.c&quot;,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;     &gt; line 193: identifier redefined by use in pragma
</span><br>
<span class="quotelev1">&gt;     redefine_extname: open64  
</span><br>
<span class="quotelev2">&gt;     &gt;
</span><br>
<span class="quotelev1">&gt;     &quot;/workspace/tdd/ct7/ompi-ws-vt/ompi-vt-integration/builds/ompi-vt-integration/ompi/contrib/vt/vt/vtlib/vt_iowrap.c&quot;,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;     &gt; line 249: identifier redefined by use in pragma redefine_extname:
</span><br>
<span class="quotelev2">&gt;     &gt; creat64  
</span><br>
<span class="quotelev2">&gt;     &gt;
</span><br>
<span class="quotelev1">&gt;     &quot;/workspace/tdd/ct7/ompi-ws-vt/ompi-vt-integration/builds/ompi-vt-integration/ompi/contrib/vt/vt/vtlib/vt_iowrap.c&quot;,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;     &gt; line 369: identifier redefined by use in pragma redefine_extname:
</span><br>
<span class="quotelev2">&gt;     &gt; lseek64  
</span><br>
<span class="quotelev2">&gt;     &gt;
</span><br>
<span class="quotelev1">&gt;     &quot;/workspace/tdd/ct7/ompi-ws-vt/ompi-vt-integration/builds/ompi-vt-integration/ompi/contrib/vt/vt/vtlib/vt_iowrap.c&quot;,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;     &gt; line 543: identifier redefined by use in pragma redefine_extname:
</span><br>
<span class="quotelev2">&gt;     &gt; pread64  
</span><br>
<span class="quotelev2">&gt;     &gt;
</span><br>
<span class="quotelev1">&gt;     &quot;/workspace/tdd/ct7/ompi-ws-vt/ompi-vt-integration/builds/ompi-vt-integration/ompi/contrib/vt/vt/vtlib/vt_iowrap.c&quot;,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;     &gt; line 568: identifier redefined by use in pragma redefine_extname:
</span><br>
<span class="quotelev2">&gt;     &gt; pwrite64  
</span><br>
<span class="quotelev2">&gt;     &gt;
</span><br>
<span class="quotelev1">&gt;     &quot;/workspace/tdd/ct7/ompi-ws-vt/ompi-vt-integration/builds/ompi-vt-integration/ompi/contrib/vt/vt/vtlib/vt_iowrap.c&quot;,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;     &gt; line 617: identifier redefined by use in pragma redefine_extname:
</span><br>
<span class="quotelev2">&gt;     &gt; fopen64  
</span><br>
<span class="quotelev2">&gt;     &gt;
</span><br>
<span class="quotelev1">&gt;     &quot;/workspace/tdd/ct7/ompi-ws-vt/ompi-vt-integration/builds/ompi-vt-integration/ompi/contrib/vt/vt/vtlib/vt_iowrap.c&quot;,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;     &gt; line 744: identifier redefined by use in pragma redefine_extname:
</span><br>
<span class="quotelev2">&gt;     &gt; fseeko64  
</span><br>
<span class="quotelev2">&gt;     &gt;
</span><br>
<span class="quotelev1">&gt;     &quot;/workspace/tdd/ct7/ompi-ws-vt/ompi-vt-integration/builds/ompi-vt-integration/ompi/contrib/vt/vt/vtlib/vt_iowrap.c&quot;,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;     &gt; line 815: identifier redefined by use in pragma redefine_extname:
</span><br>
<span class="quotelev2">&gt;     &gt; fsetpos64  
</span><br>
<span class="quotelev2">&gt;     &gt; cc: acomp failed for
</span><br>
<span class="quotelev2">&gt;     &gt;
</span><br>
<span class="quotelev1">&gt;     /workspace/tdd/ct7/ompi-ws-vt/ompi-vt-integration/builds/ompi-vt-integration/ompi/contrib/vt/vt/vtlib/vt_iowrap.c
</span><br>
<span class="quotelev2">&gt;     &gt;
</span><br>
<span class="quotelev2">&gt;     &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;     &gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;     &gt; devel_at_[hidden] &lt;mailto:devel_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;     &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2730.php">Arlin Davis: "Re: [OMPI devel] [ofa-general] uDAPL EVD queue length issue"</a>
<li><strong>Previous message:</strong> <a href="2728.php">Brian W. Barrett: "Re: [OMPI devel] vt-integration"</a>
<li><strong>Maybe in reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2007/11/2673.php">Terry Dontje: "[OMPI devel] vt integration"</a>
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

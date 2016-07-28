<?
$subject_val = "[OMPI devel] vt integration";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Nov 28 13:07:03 2007" -->
<!-- isoreceived="20071128180703" -->
<!-- sent="Wed, 28 Nov 2007 13:06:46 -0500" -->
<!-- isosent="20071128180646" -->
<!-- name="Terry Dontje" -->
<!-- email="Terry.Dontje_at_[hidden]" -->
<!-- subject="[OMPI devel] vt integration" -->
<!-- id="474DAE36.8070902_at_sun.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI devel] vt integration<br>
<strong>From:</strong> Terry Dontje (<em>Terry.Dontje_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-11-28 13:06:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2674.php">Jeff Squyres: "Re: [OMPI devel] THREAD_MULTIPLE"</a>
<li><strong>Previous message:</strong> <a href="2672.php">Richard Graham: "Re: [OMPI devel] THREAD_MULTIPLE"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2007/12/2729.php">Terry Dontje: "Re: [OMPI devel] vt integration"</a>
<li><strong>Maybe reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2007/12/2729.php">Terry Dontje: "Re: [OMPI devel] vt integration"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I haven't tried to debug the following but I am getting the following 
<br>
errors when building the vt-integration tmp branch on Solaris.   So I 
<br>
don't think the branch is ready for putback yet.
<br>
<p>--td
<br>
<p>cc -DHAVE_CONFIG_H -I. -I.. 
<br>
-I/workspace/tdd/ct7/ompi-ws-vt/ompi-vt-integration/builds/ompi-vt-integration/ompi/contrib/vt/vt/vtlib 
<br>
-I/workspace/tdd/ct7/ompi-ws-vt/ompi-vt-integration/builds/ompi-vt-integration/ompi/contrib/vt/vt/tools/opari/lib 
<br>
-I/workspace/tdd/ct7/ompi-ws-vt/ompi-vt-integration/builds/ompi-vt-integration/ompi/contrib/vt/vt/extlib/otf/otflib 
<br>
-I../extlib/otf/otflib        
<br>
-DBINDIR=\&quot;/workspace/tdd/ct7/ompi-ws-vt/ompi-vt-integration/shared-install/SunOS/i386/2007.11.28/bin\&quot; 
<br>
-DDATADIR=\&quot;/workspace/tdd/ct7/ompi-ws-vt/ompi-vt-integration/shared-install/SunOS/i386/2007.11.28/share/vampirtrace\&quot; 
<br>
-DRFG   -DVT_IOWRAP  -xtarget=generic64 -xarch=generic64 -g -c 
<br>
/workspace/tdd/ct7/ompi-ws-vt/ompi-vt-integration/builds/ompi-vt-integration/ompi/contrib/vt/vt/vtlib/vt_iowrap.c
<br>
cc: Warning: -xarch=generic64 is deprecated, use -m64 to create 64-bit 
<br>
programs
<br>
cc: Warning: illegal option -xtarget=generic64
<br>
cc: Warning: -xarch=generic64 is deprecated, use -m64 to create 64-bit 
<br>
programs
<br>
&quot;/workspace/tdd/ct7/ompi-ws-vt/ompi-vt-integration/builds/ompi-vt-integration/ompi/contrib/vt/vt/vtlib/vt_iowrap.c&quot;, 
<br>
line 193: identifier redefined by use in pragma redefine_extname: open64   
<br>
&quot;/workspace/tdd/ct7/ompi-ws-vt/ompi-vt-integration/builds/ompi-vt-integration/ompi/contrib/vt/vt/vtlib/vt_iowrap.c&quot;, 
<br>
line 249: identifier redefined by use in pragma redefine_extname: 
<br>
creat64   
<br>
&quot;/workspace/tdd/ct7/ompi-ws-vt/ompi-vt-integration/builds/ompi-vt-integration/ompi/contrib/vt/vt/vtlib/vt_iowrap.c&quot;, 
<br>
line 369: identifier redefined by use in pragma redefine_extname: 
<br>
lseek64   
<br>
&quot;/workspace/tdd/ct7/ompi-ws-vt/ompi-vt-integration/builds/ompi-vt-integration/ompi/contrib/vt/vt/vtlib/vt_iowrap.c&quot;, 
<br>
line 543: identifier redefined by use in pragma redefine_extname: 
<br>
pread64   
<br>
&quot;/workspace/tdd/ct7/ompi-ws-vt/ompi-vt-integration/builds/ompi-vt-integration/ompi/contrib/vt/vt/vtlib/vt_iowrap.c&quot;, 
<br>
line 568: identifier redefined by use in pragma redefine_extname: 
<br>
pwrite64   
<br>
&quot;/workspace/tdd/ct7/ompi-ws-vt/ompi-vt-integration/builds/ompi-vt-integration/ompi/contrib/vt/vt/vtlib/vt_iowrap.c&quot;, 
<br>
line 617: identifier redefined by use in pragma redefine_extname: 
<br>
fopen64   
<br>
&quot;/workspace/tdd/ct7/ompi-ws-vt/ompi-vt-integration/builds/ompi-vt-integration/ompi/contrib/vt/vt/vtlib/vt_iowrap.c&quot;, 
<br>
line 744: identifier redefined by use in pragma redefine_extname: 
<br>
fseeko64   
<br>
&quot;/workspace/tdd/ct7/ompi-ws-vt/ompi-vt-integration/builds/ompi-vt-integration/ompi/contrib/vt/vt/vtlib/vt_iowrap.c&quot;, 
<br>
line 815: identifier redefined by use in pragma redefine_extname: 
<br>
fsetpos64   
<br>
cc: acomp failed for 
<br>
/workspace/tdd/ct7/ompi-ws-vt/ompi-vt-integration/builds/ompi-vt-integration/ompi/contrib/vt/vt/vtlib/vt_iowrap.c
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2674.php">Jeff Squyres: "Re: [OMPI devel] THREAD_MULTIPLE"</a>
<li><strong>Previous message:</strong> <a href="2672.php">Richard Graham: "Re: [OMPI devel] THREAD_MULTIPLE"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2007/12/2729.php">Terry Dontje: "Re: [OMPI devel] vt integration"</a>
<li><strong>Maybe reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2007/12/2729.php">Terry Dontje: "Re: [OMPI devel] vt integration"</a>
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

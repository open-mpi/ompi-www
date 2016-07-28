<?
$subject_val = "[OMPI devel] [1.8.2rc3] static linking fails on linux (openpty undefined)";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Aug  3 19:58:57 2014" -->
<!-- isoreceived="20140803235857" -->
<!-- sent="Sun, 3 Aug 2014 16:58:55 -0700" -->
<!-- isosent="20140803235855" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="[OMPI devel] [1.8.2rc3] static linking fails on linux (openpty undefined)" -->
<!-- id="CAAvDA17dxMMBjuOt-dwDFacZxgrd6J6==3WdmhEumQW8njbGJg_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI devel] [1.8.2rc3] static linking fails on linux (openpty undefined)<br>
<strong>From:</strong> Paul Hargrove (<em>phhargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-08-03 19:58:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15488.php">Paul Hargrove: "Re: [OMPI devel] [1.8.2rc3] static linking fails on linux (openpty undefined)"</a>
<li><strong>Previous message:</strong> <a href="15486.php">Paul Hargrove: "Re: [OMPI devel] [1.8.2rc3] another openib bug (#4377)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15488.php">Paul Hargrove: "Re: [OMPI devel] [1.8.2rc3] static linking fails on linux (openpty undefined)"</a>
<li><strong>Reply:</strong> <a href="15488.php">Paul Hargrove: "Re: [OMPI devel] [1.8.2rc3] static linking fails on linux (openpty undefined)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I've configured the 1.8.2rc3 tarball with &quot;--enable-static
<br>
--disable-shared&quot; on a fairly standard Linux/x86-64 platform.  While there
<br>
are no problems on the same platform w/o these configure flags, with them I
<br>
cannot link any application codes.
<br>
<p>$ mpicc -g    hello_c.c   -o hello_c
<br>
/global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.8.2rc3-linux-x86_64-static/INST/lib/libopen-pal.a(opal_pty.o):
<br>
In function `opal_openpty':
<br>
opal_pty.c:(.text+0x1): undefined reference to `openpty'
<br>
<p>I checked &quot;make openpty&quot; and the manpage says to link with '-lutil'.
<br>
The '-showme' does not show libutil:
<br>
<p>$ mpicc -showme hello_c.c
<br>
gcc hello_c.c
<br>
-I/global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.8.2rc3-linux-x86_64-static/INST/include
<br>
-pthread -L/usr/syscom/opt/torque/4.1.4/lib -Wl,-rpath
<br>
-Wl,/usr/syscom/opt/torque/4.1.4/lib -Wl,-rpath
<br>
-Wl,/usr/syscom/opt/torque/4.1.4/lib -Wl,-rpath
<br>
-Wl,/usr/syscom/opt/torque/4.1.4/lib -Wl,-rpath
<br>
-Wl,/usr/syscom/opt/torque/4.1.4/lib -Wl,-rpath
<br>
-Wl,/global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.8.2rc3-linux-x86_64-static/INST/lib
<br>
-Wl,--enable-new-dtags
<br>
-L/global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.8.2rc3-linux-x86_64-static/INST/lib
<br>
-lmpi -lopen-rte -lopen-pal -lm -ldl -ltorque -libverbs -lrdmacm
<br>
<p><p>It looks like configure is doing the right thing on some level, but failing
<br>
to add '-lutil' to the appropriate list of libs (OPAL_WRAPPER_EXTRA_LIBS?):
<br>
<p>============================================================================
<br>
== Library and Function tests
<br>
============================================================================
<br>
checking if we need -lutil for openpty... yes
<br>
checking for openpty... yes
<br>
<p><p>-Paul
<br>
<p><pre>
-- 
Paul H. Hargrove                          PHHargrove_at_[hidden]
Future Technologies Group
Computer and Data Sciences Department     Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-15487/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15488.php">Paul Hargrove: "Re: [OMPI devel] [1.8.2rc3] static linking fails on linux (openpty undefined)"</a>
<li><strong>Previous message:</strong> <a href="15486.php">Paul Hargrove: "Re: [OMPI devel] [1.8.2rc3] another openib bug (#4377)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15488.php">Paul Hargrove: "Re: [OMPI devel] [1.8.2rc3] static linking fails on linux (openpty undefined)"</a>
<li><strong>Reply:</strong> <a href="15488.php">Paul Hargrove: "Re: [OMPI devel] [1.8.2rc3] static linking fails on linux (openpty undefined)"</a>
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

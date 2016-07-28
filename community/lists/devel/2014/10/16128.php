<?
$subject_val = "[OMPI devel] Error: undefined reference `__builtin_va_gparg1'";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Oct 29 16:11:12 2014" -->
<!-- isoreceived="20141029201112" -->
<!-- sent="Wed, 29 Oct 2014 20:11:10 +0000" -->
<!-- isosent="20141029201110" -->
<!-- name="Kumar, Amit" -->
<!-- email="ahkumar_at_[hidden]" -->
<!-- subject="[OMPI devel] Error: undefined reference `__builtin_va_gparg1'" -->
<!-- id="BB6BA2C397CCB140A2475E542B216447196B9C3B_at_SXMB1PG.SYSTEMS.SMU.EDU" -->
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
<strong>Subject:</strong> [OMPI devel] Error: undefined reference `__builtin_va_gparg1'<br>
<strong>From:</strong> Kumar, Amit (<em>ahkumar_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-10-29 16:11:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16129.php">Paul Hargrove: "Re: [OMPI devel] Error: undefined reference `__builtin_va_gparg1'"</a>
<li><strong>Previous message:</strong> <a href="16127.php">Howard Pritchard: "Re: [OMPI devel] ROMIO+Lustre problems in OpenMPI 1.8.3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16129.php">Paul Hargrove: "Re: [OMPI devel] Error: undefined reference `__builtin_va_gparg1'"</a>
<li><strong>Reply:</strong> <a href="16129.php">Paul Hargrove: "Re: [OMPI devel] Error: undefined reference `__builtin_va_gparg1'"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear Developers,
<br>
<p>I have ran into the following errors while compiling OpenMPI version(both 1.8.2 and 1.8.3) using PGI-13.2
<br>
<p>Any idea where could I locate defined references to `__builtin_va_gparg1'.
<br>
<p>Any help is greatly appreciated. 
<br>
<p>Regards,
<br>
Amit
<br>
<p>Making all in tool
<br>
make[7]: Entering directory `/grid/software/admin/root/packages/build/openmpi-1.8.3/ompi/contrib/vt/vt/tools/opari/tool'
<br>
&nbsp;&nbsp;CXX      opari-handler.o
<br>
&nbsp;&nbsp;CXX      opari-ompragma.o
<br>
&nbsp;&nbsp;CXX      opari-ompragma_c.o
<br>
&nbsp;&nbsp;CXX      opari-ompragma_f.o
<br>
&nbsp;&nbsp;CXX      opari-ompregion.o
<br>
&nbsp;&nbsp;CXX      opari-opari.o
<br>
&nbsp;&nbsp;CXX      opari-process_c.o
<br>
&nbsp;&nbsp;CXX      opari-process_f.o
<br>
&nbsp;&nbsp;CXX      opari-process_omp.o
<br>
ln -s ../../../util/util.c
<br>
&nbsp;&nbsp;CC       util.o
<br>
&nbsp;&nbsp;CXXLD    opari
<br>
util.o: In function `guess_strlen':
<br>
/grid/software/admin/root/packages/build/openmpi-1.8.3/ompi/contrib/vt/vt/tools/opari/tool/./util.c:51: undefined reference to `__builtin_va_gparg1'
<br>
/grid/software/admin/root/packages/build/openmpi-1.8.3/ompi/contrib/vt/vt/tools/opari/tool/./util.c:55: undefined reference to `__builtin_va_gparg1'
<br>
/grid/software/admin/root/packages/build/openmpi-1.8.3/ompi/contrib/vt/vt/tools/opari/tool/./util.c:69: undefined reference to `__builtin_va_gparg1'
<br>
/grid/software/admin/root/packages/build/openmpi-1.8.3/ompi/contrib/vt/vt/tools/opari/tool/./util.c:82: undefined reference to `__builtin_va_gparg1'
<br>
/grid/software/admin/root/packages/build/openmpi-1.8.3/ompi/contrib/vt/vt/tools/opari/tool/./util.c:91: undefined reference to `__builtin_va_gparg1'
<br>
util.o:/grid/software/admin/root/packages/build/openmpi-1.8.3/ompi/contrib/vt/vt/tools/opari/tool/./util.c:107: more undefined references to `__builtin_va_gparg1' follow
<br>
collect2: ld returned 1 exit status
<br>
make[7]: *** [opari] Error 1
<br>
make[7]: Leaving directory `/grid/software/admin/root/packages/build/openmpi-1.8.3/ompi/contrib/vt/vt/tools/opari/tool'
<br>
make[6]: *** [all-recursive] Error 1
<br>
make[6]: Leaving directory `/grid/software/admin/root/packages/build/openmpi-1.8.3/ompi/contrib/vt/vt/tools/opari'
<br>
make[5]: *** [all-recursive] Error 1
<br>
make[5]: Leaving directory `/grid/software/admin/root/packages/build/openmpi-1.8.3/ompi/contrib/vt/vt/tools'
<br>
make[4]: *** [all-recursive] Error 1
<br>
make[4]: Leaving directory `/grid/software/admin/root/packages/build/openmpi-1.8.3/ompi/contrib/vt/vt'
<br>
make[3]: *** [all] Error 2
<br>
make[3]: Leaving directory `/grid/software/admin/root/packages/build/openmpi-1.8.3/ompi/contrib/vt/vt'
<br>
make[2]: *** [all-recursive] Error 1
<br>
make[2]: Leaving directory `/grid/software/admin/root/packages/build/openmpi-1.8.3/ompi/contrib/vt'
<br>
make[1]: *** [all-recursive] Error 1
<br>
make[1]: Leaving directory `/grid/software/admin/root/packages/build/openmpi-1.8.3/ompi'
<br>
make: *** [all-recursive] Error 1
<br>
<p># cd /grid/software/admin/root/packages/build/openmpi-1.8.3/ompi/contrib/vt/vt/tools/opari/tool
<br>
# make -n
<br>
rm -f opari
<br>
echo &quot;  CXXLD   &quot; opari;/bin/sh ../../../libtool --silent --tag=CXX   --mode=link g++ -DOPARI_VT -O3 -DNDEBUG -finline-functions -pthread   -o opari opari-handler.o opari-ompragma.o opari-ompragma_c.o opari-ompragma_f.o opari-ompregion.o opari-opari.o opari-process_c.o opari-process_f.o opari-process_omp.o util.o  -lrt -lut
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16129.php">Paul Hargrove: "Re: [OMPI devel] Error: undefined reference `__builtin_va_gparg1'"</a>
<li><strong>Previous message:</strong> <a href="16127.php">Howard Pritchard: "Re: [OMPI devel] ROMIO+Lustre problems in OpenMPI 1.8.3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16129.php">Paul Hargrove: "Re: [OMPI devel] Error: undefined reference `__builtin_va_gparg1'"</a>
<li><strong>Reply:</strong> <a href="16129.php">Paul Hargrove: "Re: [OMPI devel] Error: undefined reference `__builtin_va_gparg1'"</a>
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

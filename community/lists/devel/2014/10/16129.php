<?
$subject_val = "Re: [OMPI devel] Error: undefined reference `__builtin_va_gparg1'";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Oct 29 16:19:17 2014" -->
<!-- isoreceived="20141029201917" -->
<!-- sent="Wed, 29 Oct 2014 13:19:14 -0700" -->
<!-- isosent="20141029201914" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Error: undefined reference `__builtin_va_gparg1'" -->
<!-- id="CAAvDA144vPKD7xVA_bFO9BJpXTabmd9YfFujch0PJ0T+2bkvvw_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="BB6BA2C397CCB140A2475E542B216447196B9C3B_at_SXMB1PG.SYSTEMS.SMU.EDU" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Error: undefined reference `__builtin_va_gparg1'<br>
<strong>From:</strong> Paul Hargrove (<em>phhargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-10-29 16:19:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16130.php">Friedley, Andrew: "[OMPI devel] enable-smp-locks affects PSM performance"</a>
<li><strong>Previous message:</strong> <a href="16128.php">Kumar, Amit: "[OMPI devel] Error: undefined reference `__builtin_va_gparg1'"</a>
<li><strong>In reply to:</strong> <a href="16128.php">Kumar, Amit: "[OMPI devel] Error: undefined reference `__builtin_va_gparg1'"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Amit,
<br>
<p>You appear to be mixing PGI and GNU compilers, as shown by the &quot;g++&quot; in the
<br>
final portion of your output.
<br>
You must configure Open MPI with all compilers (C, C++ and Fortran) from
<br>
the same &quot;family&quot;.
<br>
<p>-Paul
<br>
<p><p>On Wed, Oct 29, 2014 at 1:11 PM, Kumar, Amit &lt;ahkumar_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Dear Developers,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have ran into the following errors while compiling OpenMPI version(both
</span><br>
<span class="quotelev1">&gt; 1.8.2 and 1.8.3) using PGI-13.2
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Any idea where could I locate defined references to `__builtin_va_gparg1'.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Any help is greatly appreciated.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; Amit
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Making all in tool
</span><br>
<span class="quotelev1">&gt; make[7]: Entering directory
</span><br>
<span class="quotelev1">&gt; `/grid/software/admin/root/packages/build/openmpi-1.8.3/ompi/contrib/vt/vt/tools/opari/tool'
</span><br>
<span class="quotelev1">&gt;   CXX      opari-handler.o
</span><br>
<span class="quotelev1">&gt;   CXX      opari-ompragma.o
</span><br>
<span class="quotelev1">&gt;   CXX      opari-ompragma_c.o
</span><br>
<span class="quotelev1">&gt;   CXX      opari-ompragma_f.o
</span><br>
<span class="quotelev1">&gt;   CXX      opari-ompregion.o
</span><br>
<span class="quotelev1">&gt;   CXX      opari-opari.o
</span><br>
<span class="quotelev1">&gt;   CXX      opari-process_c.o
</span><br>
<span class="quotelev1">&gt;   CXX      opari-process_f.o
</span><br>
<span class="quotelev1">&gt;   CXX      opari-process_omp.o
</span><br>
<span class="quotelev1">&gt; ln -s ../../../util/util.c
</span><br>
<span class="quotelev1">&gt;   CC       util.o
</span><br>
<span class="quotelev1">&gt;   CXXLD    opari
</span><br>
<span class="quotelev1">&gt; util.o: In function `guess_strlen':
</span><br>
<span class="quotelev1">&gt; /grid/software/admin/root/packages/build/openmpi-1.8.3/ompi/contrib/vt/vt/tools/opari/tool/./util.c:51:
</span><br>
<span class="quotelev1">&gt; undefined reference to `__builtin_va_gparg1'
</span><br>
<span class="quotelev1">&gt; /grid/software/admin/root/packages/build/openmpi-1.8.3/ompi/contrib/vt/vt/tools/opari/tool/./util.c:55:
</span><br>
<span class="quotelev1">&gt; undefined reference to `__builtin_va_gparg1'
</span><br>
<span class="quotelev1">&gt; /grid/software/admin/root/packages/build/openmpi-1.8.3/ompi/contrib/vt/vt/tools/opari/tool/./util.c:69:
</span><br>
<span class="quotelev1">&gt; undefined reference to `__builtin_va_gparg1'
</span><br>
<span class="quotelev1">&gt; /grid/software/admin/root/packages/build/openmpi-1.8.3/ompi/contrib/vt/vt/tools/opari/tool/./util.c:82:
</span><br>
<span class="quotelev1">&gt; undefined reference to `__builtin_va_gparg1'
</span><br>
<span class="quotelev1">&gt; /grid/software/admin/root/packages/build/openmpi-1.8.3/ompi/contrib/vt/vt/tools/opari/tool/./util.c:91:
</span><br>
<span class="quotelev1">&gt; undefined reference to `__builtin_va_gparg1'
</span><br>
<span class="quotelev1">&gt; util.o:/grid/software/admin/root/packages/build/openmpi-1.8.3/ompi/contrib/vt/vt/tools/opari/tool/./util.c:107:
</span><br>
<span class="quotelev1">&gt; more undefined references to `__builtin_va_gparg1' follow
</span><br>
<span class="quotelev1">&gt; collect2: ld returned 1 exit status
</span><br>
<span class="quotelev1">&gt; make[7]: *** [opari] Error 1
</span><br>
<span class="quotelev1">&gt; make[7]: Leaving directory
</span><br>
<span class="quotelev1">&gt; `/grid/software/admin/root/packages/build/openmpi-1.8.3/ompi/contrib/vt/vt/tools/opari/tool'
</span><br>
<span class="quotelev1">&gt; make[6]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; make[6]: Leaving directory
</span><br>
<span class="quotelev1">&gt; `/grid/software/admin/root/packages/build/openmpi-1.8.3/ompi/contrib/vt/vt/tools/opari'
</span><br>
<span class="quotelev1">&gt; make[5]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; make[5]: Leaving directory
</span><br>
<span class="quotelev1">&gt; `/grid/software/admin/root/packages/build/openmpi-1.8.3/ompi/contrib/vt/vt/tools'
</span><br>
<span class="quotelev1">&gt; make[4]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; make[4]: Leaving directory
</span><br>
<span class="quotelev1">&gt; `/grid/software/admin/root/packages/build/openmpi-1.8.3/ompi/contrib/vt/vt'
</span><br>
<span class="quotelev1">&gt; make[3]: *** [all] Error 2
</span><br>
<span class="quotelev1">&gt; make[3]: Leaving directory
</span><br>
<span class="quotelev1">&gt; `/grid/software/admin/root/packages/build/openmpi-1.8.3/ompi/contrib/vt/vt'
</span><br>
<span class="quotelev1">&gt; make[2]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; make[2]: Leaving directory
</span><br>
<span class="quotelev1">&gt; `/grid/software/admin/root/packages/build/openmpi-1.8.3/ompi/contrib/vt'
</span><br>
<span class="quotelev1">&gt; make[1]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; make[1]: Leaving directory
</span><br>
<span class="quotelev1">&gt; `/grid/software/admin/root/packages/build/openmpi-1.8.3/ompi'
</span><br>
<span class="quotelev1">&gt; make: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; # cd
</span><br>
<span class="quotelev1">&gt; /grid/software/admin/root/packages/build/openmpi-1.8.3/ompi/contrib/vt/vt/tools/opari/tool
</span><br>
<span class="quotelev1">&gt; # make -n
</span><br>
<span class="quotelev1">&gt; rm -f opari
</span><br>
<span class="quotelev1">&gt; echo &quot;  CXXLD   &quot; opari;/bin/sh ../../../libtool --silent --tag=CXX
</span><br>
<span class="quotelev1">&gt;  --mode=link g++ -DOPARI_VT -O3 -DNDEBUG -finline-functions -pthread   -o
</span><br>
<span class="quotelev1">&gt; opari opari-handler.o opari-ompragma.o opari-ompragma_c.o
</span><br>
<span class="quotelev1">&gt; opari-ompragma_f.o opari-ompregion.o opari-opari.o opari-process_c.o
</span><br>
<span class="quotelev1">&gt; opari-process_f.o opari-process_omp.o util.o  -lrt -lut
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/10/16128.php">http://www.open-mpi.org/community/lists/devel/2014/10/16128.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
Paul H. Hargrove                          PHHargrove_at_[hidden]
Future Technologies Group
Computer and Data Sciences Department     Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-16129/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16130.php">Friedley, Andrew: "[OMPI devel] enable-smp-locks affects PSM performance"</a>
<li><strong>Previous message:</strong> <a href="16128.php">Kumar, Amit: "[OMPI devel] Error: undefined reference `__builtin_va_gparg1'"</a>
<li><strong>In reply to:</strong> <a href="16128.php">Kumar, Amit: "[OMPI devel] Error: undefined reference `__builtin_va_gparg1'"</a>
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

<?
$subject_val = "Re: [OMPI devel] 1.4.3rc1 out";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Aug 24 21:53:26 2010" -->
<!-- isoreceived="20100825015326" -->
<!-- sent="Tue, 24 Aug 2010 18:53:08 -0700" -->
<!-- isosent="20100825015308" -->
<!-- name="Paul H. Hargrove" -->
<!-- email="PHHargrove_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 1.4.3rc1 out" -->
<!-- id="4C747784.7050902_at_lbl.gov" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="813EE5E7-21CC-4BC9-900C-FC978975ACC7_at_eecs.utk.edu" -->
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
<strong>Subject:</strong> Re: [OMPI devel] 1.4.3rc1 out<br>
<strong>From:</strong> Paul H. Hargrove (<em>PHHargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-08-24 21:53:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8334.php">Paul H. Hargrove: "[OMPI devel] README nit pick (both 1.5rc5 and 1.4.3rc1)"</a>
<li><strong>Previous message:</strong> <a href="8332.php">George Bosilca: "Re: [OMPI devel] 1.4.3rc1 out"</a>
<li><strong>In reply to:</strong> <a href="8332.php">George Bosilca: "Re: [OMPI devel] 1.4.3rc1 out"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8322.php">Paul H. Hargrove: "Re: [OMPI devel] 1.4.3rc1 out"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I suspect that the FORTRAN REAL*16 is a 16-byte floating point type 
<br>
while C's &quot;long double&quot; may just be the x86 10-byte type.  I'd not be 
<br>
surprised if icc has some option to get 16-byte long double.  I don't 
<br>
have time to hunt for such an option, but if somebody know the required 
<br>
compiler option, I'll be glad to retest using it.
<br>
<p>-Paul
<br>
<p>George Bosilca wrote:
<br>
<span class="quotelev1">&gt; Paul,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks for the files. It appears that our configure script detected that a Fortran REAL*16 bit representation differs from a C long double. This is a pretty weird scenario, where a Fortran type cannot be represented in C. As we only support C MPI_Op there is no &quot;simple&quot; way we can support this type. As a result MPI_REAL16 and MPI_COMPLEX32 types have been disabled, in both C and Fortran (and C++ if this still matters), i.e. a user code using these types will fails at compile time.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm in favor of keeping the warning, at least to inform the user that something weird was going on.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   Thanks,
</span><br>
<span class="quotelev1">&gt;     george.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Aug 24, 2010, at 21:10 , George Bosilca wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev2">&gt;&gt; This indicates that two contiguous C long double types are not identical to a Fortran COMPLEX32 type.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Paul, if you still have the config.log and opal_config.h I would like to take a look at them.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks,
</span><br>
<span class="quotelev2">&gt;&gt;  george.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Aug 24, 2010, at 19:38 , Paul H. Hargrove wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Building w/ icc-11.1.046 on x86-64 works with some warnings.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; In addition to the numerous &quot;188&quot; warnings and the single instance of &quot;279&quot; that I reported seeing for 1.5rc5 (<a href="http://www.open-mpi.org/community/lists/devel/2010/08/8320.php">http://www.open-mpi.org/community/lists/devel/2010/08/8320.php</a>), there is one additional warning:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; libtool: compile:  icc -DHAVE_CONFIG_H -I. -I../../../openmpi-1.4.3rc1/ompi/datatype -I../../opal/include -I../../orte/include -I../../ompi/include -I../../opal/mca/paffinity/linux/plpa/src/libplpa -I../../../openmpi-1.4.3rc1 -I../.. -I../../../openmpi-1.4.3rc1/opal/include -I../../../openmpi-1.4.3rc1/orte/include -I../../../openmpi-1.4.3rc1/ompi/include -O3 -DNDEBUG -finline-functions -fno-strict-aliasing -restrict -pthread -fvisibility=hidden -MT dt_module.lo -MD -MP -MF .deps/dt_module.Tpo -c ../../../openmpi-1.4.3rc1/ompi/datatype/dt_module.c -o dt_module.o
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ../../../openmpi-1.4.3rc1/ompi/datatype/dt_module.c(709): warning #1224: #warning directive: &quot;No proper C type found for COMPLEX32&quot;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; #   warning &quot;No proper C type found for COMPLEX32&quot;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     ^
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I don't know enough about datatypes support to determine if that indicates an actual problem or not.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -Paul
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Ralph Castain wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Okay, release candidate 1 for 1.4.3 is now available on the web site. Please give it a whirl.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/software/ompi/v1.4/">http://www.open-mpi.org/software/ompi/v1.4/</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Ralph
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Paul H. Hargrove                          PHHargrove_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Future Technologies Group
</span><br>
<span class="quotelev3">&gt;&gt;&gt; HPC Research Department                   Tel: +1-510-495-2352
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
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
<span class="quotelev3">&gt;&gt;&gt;       
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
<span class="quotelev1">&gt;
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
Paul H. Hargrove                          PHHargrove_at_[hidden]
Future Technologies Group
HPC Research Department                   Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8334.php">Paul H. Hargrove: "[OMPI devel] README nit pick (both 1.5rc5 and 1.4.3rc1)"</a>
<li><strong>Previous message:</strong> <a href="8332.php">George Bosilca: "Re: [OMPI devel] 1.4.3rc1 out"</a>
<li><strong>In reply to:</strong> <a href="8332.php">George Bosilca: "Re: [OMPI devel] 1.4.3rc1 out"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8322.php">Paul H. Hargrove: "Re: [OMPI devel] 1.4.3rc1 out"</a>
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

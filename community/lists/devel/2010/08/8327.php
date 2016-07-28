<?
$subject_val = "Re: [OMPI devel] 1.4.3rc1 out";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Aug 24 21:10:55 2010" -->
<!-- isoreceived="20100825011055" -->
<!-- sent="Tue, 24 Aug 2010 21:10:49 -0400" -->
<!-- isosent="20100825011049" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 1.4.3rc1 out" -->
<!-- id="61D0E65C-4590-4B49-AFAF-6B78C2495CBB_at_eecs.utk.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4C7457D9.5060504_at_lbl.gov" -->
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
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-08-24 21:10:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8328.php">George Bosilca: "Re: [OMPI devel] 1.5rc5 - warnings from Sun C 5.10"</a>
<li><strong>Previous message:</strong> <a href="8326.php">Paul H. Hargrove: "[OMPI devel] 1.5rc5 warnings from gcc on OpenSolaris"</a>
<li><strong>In reply to:</strong> <a href="8321.php">Paul H. Hargrove: "Re: [OMPI devel] 1.4.3rc1 out"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8332.php">George Bosilca: "Re: [OMPI devel] 1.4.3rc1 out"</a>
<li><strong>Reply:</strong> <a href="8332.php">George Bosilca: "Re: [OMPI devel] 1.4.3rc1 out"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
This indicates that two contiguous C long double types are not identical to a Fortran COMPLEX32 type.
<br>
<p>Paul, if you still have the config.log and opal_config.h I would like to take a look at them.
<br>
<p>Thanks,
<br>
&nbsp;&nbsp;george.
<br>
<p>On Aug 24, 2010, at 19:38 , Paul H. Hargrove wrote:
<br>
<p><span class="quotelev1">&gt; Building w/ icc-11.1.046 on x86-64 works with some warnings.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; In addition to the numerous &quot;188&quot; warnings and the single instance of &quot;279&quot; that I reported seeing for 1.5rc5 (<a href="http://www.open-mpi.org/community/lists/devel/2010/08/8320.php">http://www.open-mpi.org/community/lists/devel/2010/08/8320.php</a>), there is one additional warning:
</span><br>
<span class="quotelev2">&gt;&gt; libtool: compile:  icc -DHAVE_CONFIG_H -I. -I../../../openmpi-1.4.3rc1/ompi/datatype -I../../opal/include -I../../orte/include -I../../ompi/include -I../../opal/mca/paffinity/linux/plpa/src/libplpa -I../../../openmpi-1.4.3rc1 -I../.. -I../../../openmpi-1.4.3rc1/opal/include -I../../../openmpi-1.4.3rc1/orte/include -I../../../openmpi-1.4.3rc1/ompi/include -O3 -DNDEBUG -finline-functions -fno-strict-aliasing -restrict -pthread -fvisibility=hidden -MT dt_module.lo -MD -MP -MF .deps/dt_module.Tpo -c ../../../openmpi-1.4.3rc1/ompi/datatype/dt_module.c -o dt_module.o
</span><br>
<span class="quotelev2">&gt;&gt; ../../../openmpi-1.4.3rc1/ompi/datatype/dt_module.c(709): warning #1224: #warning directive: &quot;No proper C type found for COMPLEX32&quot;
</span><br>
<span class="quotelev2">&gt;&gt;  #   warning &quot;No proper C type found for COMPLEX32&quot;
</span><br>
<span class="quotelev2">&gt;&gt;      ^
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I don't know enough about datatypes support to determine if that indicates an actual problem or not.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -Paul
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Ralph Castain wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Okay, release candidate 1 for 1.4.3 is now available on the web site. Please give it a whirl.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/software/ompi/v1.4/">http://www.open-mpi.org/software/ompi/v1.4/</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Ralph
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
<span class="quotelev2">&gt;&gt;  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Paul H. Hargrove                          PHHargrove_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Future Technologies Group
</span><br>
<span class="quotelev1">&gt; HPC Research Department                   Tel: +1-510-495-2352
</span><br>
<span class="quotelev1">&gt; Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
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
<li><strong>Next message:</strong> <a href="8328.php">George Bosilca: "Re: [OMPI devel] 1.5rc5 - warnings from Sun C 5.10"</a>
<li><strong>Previous message:</strong> <a href="8326.php">Paul H. Hargrove: "[OMPI devel] 1.5rc5 warnings from gcc on OpenSolaris"</a>
<li><strong>In reply to:</strong> <a href="8321.php">Paul H. Hargrove: "Re: [OMPI devel] 1.4.3rc1 out"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8332.php">George Bosilca: "Re: [OMPI devel] 1.4.3rc1 out"</a>
<li><strong>Reply:</strong> <a href="8332.php">George Bosilca: "Re: [OMPI devel] 1.4.3rc1 out"</a>
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

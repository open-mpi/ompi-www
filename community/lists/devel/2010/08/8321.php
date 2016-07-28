<?
$subject_val = "Re: [OMPI devel] 1.4.3rc1 out";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Aug 24 19:38:18 2010" -->
<!-- isoreceived="20100824233818" -->
<!-- sent="Tue, 24 Aug 2010 16:38:01 -0700" -->
<!-- isosent="20100824233801" -->
<!-- name="Paul H. Hargrove" -->
<!-- email="PHHargrove_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 1.4.3rc1 out" -->
<!-- id="4C7457D9.5060504_at_lbl.gov" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="9E6320D0-AC29-45A1-995F-021D26C6D094_at_open-mpi.org" -->
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
<strong>Date:</strong> 2010-08-24 19:38:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8322.php">Paul H. Hargrove: "Re: [OMPI devel] 1.4.3rc1 out"</a>
<li><strong>Previous message:</strong> <a href="8320.php">Paul H. Hargrove: "[OMPI devel] 1.5rc5 build failure with icc-11.1"</a>
<li><strong>In reply to:</strong> <a href="8318.php">Ralph Castain: "[OMPI devel] 1.4.3rc1 out"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8327.php">George Bosilca: "Re: [OMPI devel] 1.4.3rc1 out"</a>
<li><strong>Reply:</strong> <a href="8327.php">George Bosilca: "Re: [OMPI devel] 1.4.3rc1 out"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Building w/ icc-11.1.046 on x86-64 works with some warnings.
<br>
<p>In addition to the numerous &quot;188&quot; warnings and the single instance of 
<br>
&quot;279&quot; that I reported seeing for 1.5rc5 
<br>
(<a href="http://www.open-mpi.org/community/lists/devel/2010/08/8320.php">http://www.open-mpi.org/community/lists/devel/2010/08/8320.php</a>), there 
<br>
is one additional warning:
<br>
<span class="quotelev1">&gt; libtool: compile:  icc -DHAVE_CONFIG_H -I. 
</span><br>
<span class="quotelev1">&gt; -I../../../openmpi-1.4.3rc1/ompi/datatype -I../../opal/include 
</span><br>
<span class="quotelev1">&gt; -I../../orte/include -I../../ompi/include 
</span><br>
<span class="quotelev1">&gt; -I../../opal/mca/paffinity/linux/plpa/src/libplpa 
</span><br>
<span class="quotelev1">&gt; -I../../../openmpi-1.4.3rc1 -I../.. 
</span><br>
<span class="quotelev1">&gt; -I../../../openmpi-1.4.3rc1/opal/include 
</span><br>
<span class="quotelev1">&gt; -I../../../openmpi-1.4.3rc1/orte/include 
</span><br>
<span class="quotelev1">&gt; -I../../../openmpi-1.4.3rc1/ompi/include -O3 -DNDEBUG 
</span><br>
<span class="quotelev1">&gt; -finline-functions -fno-strict-aliasing -restrict -pthread 
</span><br>
<span class="quotelev1">&gt; -fvisibility=hidden -MT dt_module.lo -MD -MP -MF .deps/dt_module.Tpo 
</span><br>
<span class="quotelev1">&gt; -c ../../../openmpi-1.4.3rc1/ompi/datatype/dt_module.c -o dt_module.o
</span><br>
<span class="quotelev1">&gt; ../../../openmpi-1.4.3rc1/ompi/datatype/dt_module.c(709): warning 
</span><br>
<span class="quotelev1">&gt; #1224: #warning directive: &quot;No proper C type found for COMPLEX32&quot;
</span><br>
<span class="quotelev1">&gt;   #   warning &quot;No proper C type found for COMPLEX32&quot;
</span><br>
<span class="quotelev1">&gt;       ^
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>I don't know enough about datatypes support to determine if that 
<br>
indicates an actual problem or not.
<br>
<p>-Paul
<br>
<p>Ralph Castain wrote:
<br>
<span class="quotelev1">&gt; Okay, release candidate 1 for 1.4.3 is now available on the web site. Please give it a whirl.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/software/ompi/v1.4/">http://www.open-mpi.org/software/ompi/v1.4/</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ralph
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
<li><strong>Next message:</strong> <a href="8322.php">Paul H. Hargrove: "Re: [OMPI devel] 1.4.3rc1 out"</a>
<li><strong>Previous message:</strong> <a href="8320.php">Paul H. Hargrove: "[OMPI devel] 1.5rc5 build failure with icc-11.1"</a>
<li><strong>In reply to:</strong> <a href="8318.php">Ralph Castain: "[OMPI devel] 1.4.3rc1 out"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8327.php">George Bosilca: "Re: [OMPI devel] 1.4.3rc1 out"</a>
<li><strong>Reply:</strong> <a href="8327.php">George Bosilca: "Re: [OMPI devel] 1.4.3rc1 out"</a>
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

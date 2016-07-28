<?
$subject_val = "Re: [OMPI devel] &quot;make check&quot; (libtool) failure on Linux/ppc w/ XLC (1.5rc5 and 1.4.3rc1)";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Aug 27 20:39:46 2010" -->
<!-- isoreceived="20100828003946" -->
<!-- sent="Fri, 27 Aug 2010 17:39:27 -0700" -->
<!-- isosent="20100828003927" -->
<!-- name="Paul H. Hargrove" -->
<!-- email="PHHargrove_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] &amp;quot;make check&amp;quot; (libtool) failure on Linux/ppc w/ XLC (1.5rc5 and 1.4.3rc1)" -->
<!-- id="4C785ABF.5070505_at_lbl.gov" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="20100827172247.GD20983_at_gmx.de" -->
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
<strong>Subject:</strong> Re: [OMPI devel] &quot;make check&quot; (libtool) failure on Linux/ppc w/ XLC (1.5rc5 and 1.4.3rc1)<br>
<strong>From:</strong> Paul H. Hargrove (<em>PHHargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-08-27 20:39:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8416.php">Paul H. Hargrove: "Re: [OMPI devel] OpenMPI 1.4.2 and PathScale 3.2 C++"</a>
<li><strong>Previous message:</strong> <a href="8414.php">Paul H. Hargrove: "Re: [OMPI devel] OpenMPI 1.4.2 and PathScale 3.2 C++"</a>
<li><strong>In reply to:</strong> <a href="8404.php">Ralf Wildenhues: "Re: [OMPI devel] &quot;make check&quot; (libtool) failure on Linux/ppc w/ XLC (1.5rc5 and 1.4.3rc1)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2010/10/8607.php">Ralf Wildenhues: "Re: [OMPI devel] &quot;make check&quot; (libtool) failure on Linux/ppc w/ XLC (1.5rc5 and 1.4.3rc1)"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2010/10/8607.php">Ralf Wildenhues: "Re: [OMPI devel] &quot;make check&quot; (libtool) failure on Linux/ppc w/ XLC (1.5rc5 and 1.4.3rc1)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I reran the build as Ralf requested (setting  
<br>
shlibpath_overrides_runpath=yes  in the libtool script).
<br>
The build and check were SUCCESSful!
<br>
<p>I have provided Ralf with the requested files off-list.
<br>
-Paul
<br>
<p><p>Ralf Wildenhues wrote:
<br>
<span class="quotelev1">&gt; * Paul H. Hargrove wrote on Fri, Aug 27, 2010 at 03:54:54AM CEST:
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I am now looking at using IBM's XLC compilers for ILP32 builds on
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the same Linux/PPC64 platform for which I've reported some
</span><br>
<span class="quotelev3">&gt;&gt;&gt; XLC/LP64 bugs.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; What I find now is that &quot;make check&quot; is failing with the loader
</span><br>
<span class="quotelev3">&gt;&gt;&gt; unable to find libmpi.so.0.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; This is with both 1.5rc5 and 1.4.3rc1.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; This occurs with xlc, but things are just fine with gcc.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev3">&gt;&gt;&gt; As I said above, the problem is NOT occuring w/ gcc.  So, I've
</span><br>
<span class="quotelev3">&gt;&gt;&gt; attached the &quot;./libtool --config&quot; output for the xlc and gcc
</span><br>
<span class="quotelev3">&gt;&gt;&gt; builds, which I see differ in more ways than I would have
</span><br>
<span class="quotelev3">&gt;&gt;&gt; expected.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The thing that's unexpected to me is the shlibpath_overrides_runpath
</span><br>
<span class="quotelev1">&gt; difference.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev2">&gt;&gt; While I still don't know the root cause, the following diff between
</span><br>
<span class="quotelev2">&gt;&gt; the libtool-generated wrappers for a gcc and xlc build make the
</span><br>
<span class="quotelev2">&gt;&gt; cause of the &quot;make check&quot; failure fairly obvious:
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Please set shlibpath_overrides_runpath=yes in the libtool script for
</span><br>
<span class="quotelev1">&gt; xlc, then try 'make clean all check'.  Please send config.log for xlc
</span><br>
<span class="quotelev1">&gt; (packed).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Ralf
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
<li><strong>Next message:</strong> <a href="8416.php">Paul H. Hargrove: "Re: [OMPI devel] OpenMPI 1.4.2 and PathScale 3.2 C++"</a>
<li><strong>Previous message:</strong> <a href="8414.php">Paul H. Hargrove: "Re: [OMPI devel] OpenMPI 1.4.2 and PathScale 3.2 C++"</a>
<li><strong>In reply to:</strong> <a href="8404.php">Ralf Wildenhues: "Re: [OMPI devel] &quot;make check&quot; (libtool) failure on Linux/ppc w/ XLC (1.5rc5 and 1.4.3rc1)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2010/10/8607.php">Ralf Wildenhues: "Re: [OMPI devel] &quot;make check&quot; (libtool) failure on Linux/ppc w/ XLC (1.5rc5 and 1.4.3rc1)"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2010/10/8607.php">Ralf Wildenhues: "Re: [OMPI devel] &quot;make check&quot; (libtool) failure on Linux/ppc w/ XLC (1.5rc5 and 1.4.3rc1)"</a>
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

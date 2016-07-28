<?
$subject_val = "Re: [OMPI devel] &quot;make check&quot; (libtool) failure on Linux/ppc w/ XLC (1.5rc5 and 1.4.3rc1)";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Oct 14 14:56:26 2010" -->
<!-- isoreceived="20101014185626" -->
<!-- sent="Thu, 14 Oct 2010 20:56:19 +0200" -->
<!-- isosent="20101014185619" -->
<!-- name="Ralf Wildenhues" -->
<!-- email="Ralf.Wildenhues_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] &amp;quot;make check&amp;quot; (libtool) failure on Linux/ppc w/ XLC (1.5rc5 and 1.4.3rc1)" -->
<!-- id="20101014185619.GF15188_at_gmx.de" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4C785ABF.5070505_at_lbl.gov" -->
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
<strong>From:</strong> Ralf Wildenhues (<em>Ralf.Wildenhues_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-10-14 14:56:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8608.php">Ashley Pittman: "[OMPI devel] debugger attach broken in trunk"</a>
<li><strong>Previous message:</strong> <a href="8606.php">Ralf Wildenhues: "Re: [OMPI devel] Failure (libtool?) to build F90 bindings w/ XLC/PPC64 (1.5rc5 and 1.4.3rc1)"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2010/08/8415.php">Paul H. Hargrove: "Re: [OMPI devel] &quot;make check&quot; (libtool) failure on Linux/ppc w/ XLC (1.5rc5 and 1.4.3rc1)"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello Paul,
<br>
<p>this bug has been addressed in upstream Libtool commit
<br>
v2.2.6-59-gb7dbec6:
<br>
&lt;<a href="http://git.savannah.gnu.org/cgit/libtool.git/commit/?id=v2.2.6-59-gb7dbec6">http://git.savannah.gnu.org/cgit/libtool.git/commit/?id=v2.2.6-59-gb7dbec6</a>&gt;
<br>
<p>It is not wholly fixed yet, but for all cases interesting to OpenMPI.
<br>
(A libtoolized package using only Fortran but no C compiler may still
<br>
have issues.)
<br>
<p>Cheers,
<br>
Ralf
<br>
<p>* Paul H. Hargrove wrote on Sat, Aug 28, 2010 at 02:39:27AM CEST:
<br>
<span class="quotelev1">&gt; I reran the build as Ralf requested (setting
</span><br>
<span class="quotelev1">&gt; shlibpath_overrides_runpath=yes  in the libtool script).
</span><br>
<span class="quotelev1">&gt; The build and check were SUCCESSful!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have provided Ralf with the requested files off-list.
</span><br>
<span class="quotelev1">&gt; -Paul
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Ralf Wildenhues wrote:
</span><br>
<span class="quotelev2">&gt; &gt;* Paul H. Hargrove wrote on Fri, Aug 27, 2010 at 03:54:54AM CEST:
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;I am now looking at using IBM's XLC compilers for ILP32 builds on
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;the same Linux/PPC64 platform for which I've reported some
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;XLC/LP64 bugs.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;What I find now is that &quot;make check&quot; is failing with the loader
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;unable to find libmpi.so.0.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;This is with both 1.5rc5 and 1.4.3rc1.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;This occurs with xlc, but things are just fine with gcc.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;As I said above, the problem is NOT occuring w/ gcc.  So, I've
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;attached the &quot;./libtool --config&quot; output for the xlc and gcc
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;builds, which I see differ in more ways than I would have
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;expected.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;The thing that's unexpected to me is the shlibpath_overrides_runpath
</span><br>
<span class="quotelev2">&gt; &gt;difference.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;While I still don't know the root cause, the following diff between
</span><br>
<span class="quotelev3">&gt; &gt;&gt;the libtool-generated wrappers for a gcc and xlc build make the
</span><br>
<span class="quotelev3">&gt; &gt;&gt;cause of the &quot;make check&quot; failure fairly obvious:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;Please set shlibpath_overrides_runpath=yes in the libtool script for
</span><br>
<span class="quotelev2">&gt; &gt;xlc, then try 'make clean all check'.  Please send config.log for xlc
</span><br>
<span class="quotelev2">&gt; &gt;(packed).
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;Thanks,
</span><br>
<span class="quotelev2">&gt; &gt;Ralf
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8608.php">Ashley Pittman: "[OMPI devel] debugger attach broken in trunk"</a>
<li><strong>Previous message:</strong> <a href="8606.php">Ralf Wildenhues: "Re: [OMPI devel] Failure (libtool?) to build F90 bindings w/ XLC/PPC64 (1.5rc5 and 1.4.3rc1)"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2010/08/8415.php">Paul H. Hargrove: "Re: [OMPI devel] &quot;make check&quot; (libtool) failure on Linux/ppc w/ XLC (1.5rc5 and 1.4.3rc1)"</a>
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

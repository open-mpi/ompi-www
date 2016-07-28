<?
$subject_val = "[OMPI devel] More on OMPI on MacOS 10.4/ppc [WORK AROUND]";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb 16 01:29:19 2012" -->
<!-- isoreceived="20120216062919" -->
<!-- sent="Wed, 15 Feb 2012 22:28:58 -0800" -->
<!-- isosent="20120216062858" -->
<!-- name="Paul H. Hargrove" -->
<!-- email="PHHargrove_at_[hidden]" -->
<!-- subject="[OMPI devel] More on OMPI on MacOS 10.4/ppc [WORK AROUND]" -->
<!-- id="4F3CA22A.7090009_at_lbl.gov" -->
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
<strong>Subject:</strong> [OMPI devel] More on OMPI on MacOS 10.4/ppc [WORK AROUND]<br>
<strong>From:</strong> Paul H. Hargrove (<em>PHHargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-02-16 01:28:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10446.php">Matthias Jurenz: "Re: [OMPI devel] VT build failure with Clang++"</a>
<li><strong>Previous message:</strong> <a href="10444.php">Paul H. Hargrove: "Re: [OMPI devel] 1.5.5rc1 tested: MacOS/ppc (w/ 1 failure and a &quot;CMR&quot;)"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
As I already discover (see 
<br>
<a href="http://www.open-mpi.org/community/lists/devel/2012/02/10444.php">http://www.open-mpi.org/community/lists/devel/2012/02/10444.php</a>), MacOS 
<br>
10.4 is NOT listed as a supported platform any longer.  So, this message 
<br>
is really just for the archives.
<br>
<p>&nbsp;From &quot;man ld&quot; on a MacOS 10.4 system (x86 or ppc):
<br>
<span class="quotelev1">&gt;        MACOSX_DEPLOYMENT_TARGET
</span><br>
<span class="quotelev1">&gt;               This is set to indicate the oldest Mac OS X  version  
</span><br>
<span class="quotelev1">&gt; that  that
</span><br>
<span class="quotelev1">&gt;               the output is to be used on.  When this is set to a 
</span><br>
<span class="quotelev1">&gt; release that
</span><br>
<span class="quotelev1">&gt;               is older than the current release features that are 
</span><br>
<span class="quotelev1">&gt; incompatible
</span><br>
<span class="quotelev1">&gt;               with that release will be disabled.  If a feature is 
</span><br>
<span class="quotelev1">&gt; seen in the
</span><br>
<span class="quotelev1">&gt;               input that can't be in the output due to this setting a  
</span><br>
<span class="quotelev1">&gt; warning
</span><br>
<span class="quotelev1">&gt;               is issued.  The current allowable values for this are 
</span><br>
<span class="quotelev1">&gt; 10.1, 10.2
</span><br>
<span class="quotelev1">&gt;               10.3, and 10.4 with the default being 10.4 for the  
</span><br>
<span class="quotelev1">&gt; i386  archi-
</span><br>
<span class="quotelev1">&gt;               tecture and 10.1 for all other architectures.
</span><br>
<p>The last sentence of that seems like a good starting point for why the 
<br>
behaviors I see on ppc and x86 differ.
<br>
So, before configuring OMPI (tarball 1.7a1r25937 or 1.5.5rc2r25933) I did
<br>
<span class="quotelev1">&gt; $ export MACOSX_DEPLOYMENT_TARGET=10.4
</span><br>
<p>And, everything worked!
<br>
Both branches had the previously described errors w/o this env var, but 
<br>
now both work fine.
<br>
<p>So, anybody in need of OMPI on MacOS 10.4/ppc now has a work-around.
<br>
<p>-Paul
<br>
<p><p><pre>
-- 
Paul H. HargrovePHHargrove_at_[hidden]
Future Technologies Group
HPC Research Department                   Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10446.php">Matthias Jurenz: "Re: [OMPI devel] VT build failure with Clang++"</a>
<li><strong>Previous message:</strong> <a href="10444.php">Paul H. Hargrove: "Re: [OMPI devel] 1.5.5rc1 tested: MacOS/ppc (w/ 1 failure and a &quot;CMR&quot;)"</a>
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

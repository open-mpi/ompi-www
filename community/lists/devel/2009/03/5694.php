<?
$subject_val = "Re: [OMPI devel] === CREATE FAILURE (trunk) ===";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Mar 23 21:44:52 2009" -->
<!-- isoreceived="20090324014452" -->
<!-- sent="Mon, 23 Mar 2009 19:44:32 -0600" -->
<!-- isosent="20090324014432" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] === CREATE FAILURE (trunk) ===" -->
<!-- id="A96CB121-2372-4612-9DD7-358380565782_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="200903240130.n2O1UK8v025384_at_eddie.osl.iu.edu" -->
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
<strong>Subject:</strong> Re: [OMPI devel] === CREATE FAILURE (trunk) ===<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-03-23 21:44:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5695.php">Sergey E. Koposov: "[OMPI devel] seg fault in openmpi-1.3.1 when shell in passwd is empty"</a>
<li><strong>Previous message:</strong> <a href="5693.php">George Bosilca: "Re: [OMPI devel] OMPI 1.3 - PERUSE peruse_comm_spec_t peer Negative	Value"</a>
<li><strong>Maybe in reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2008/08/4602.php">Tim Mattox: "Re: [OMPI devel] === CREATE FAILURE (trunk) ==="</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2009/05/6107.php">Josh Hursey: "Re: [OMPI devel] === CREATE FAILURE (trunk) ==="</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Wow, sometimes I even amaze myself! Two for two on create failures in  
<br>
a single night!!
<br>
<p>:-)
<br>
<p>Anyway, both are fixed or shortly will be. However, there will be no  
<br>
MTT runs tonight as neither branch successfully generated a tarball.
<br>
<p>Ralph
<br>
<p><p>On Mar 23, 2009, at 7:30 PM, MPI Team wrote:
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ERROR: Command returned a non-zero exist status (trunk):
</span><br>
<span class="quotelev1">&gt;       make distcheck
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Start time: Mon Mar 23 21:22:33 EDT 2009
</span><br>
<span class="quotelev1">&gt; End time:   Mon Mar 23 21:30:20 EDT 2009
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; ======================================================================
</span><br>
<span class="quotelev1">&gt; { test ! -d openmpi-1.4a1r20848 || { find openmpi-1.4a1r20848 -type  
</span><br>
<span class="quotelev1">&gt; d ! -perm -200 -exec chmod u+w {} ';' &amp;&amp; rm -fr  
</span><br>
<span class="quotelev1">&gt; openmpi-1.4a1r20848; }; }
</span><br>
<span class="quotelev1">&gt; test -d openmpi-1.4a1r20848 || mkdir openmpi-1.4a1r20848
</span><br>
<span class="quotelev1">&gt; list='config contrib opal orte ompi test'; for subdir in $list; do \
</span><br>
<span class="quotelev1">&gt;  if test &quot;$subdir&quot; = .; then :; else \
</span><br>
<span class="quotelev1">&gt;    test -d &quot;openmpi-1.4a1r20848/$subdir&quot; \
</span><br>
<span class="quotelev1">&gt;    || /bin/mkdir -p &quot;openmpi-1.4a1r20848/$subdir&quot; \
</span><br>
<span class="quotelev1">&gt;    || exit 1; \
</span><br>
<span class="quotelev1">&gt;    distdir=`CDPATH=&quot;${ZSH_VERSION+.}:&quot; &amp;&amp; cd openmpi-1.4a1r20848 &amp;&amp;  
</span><br>
<span class="quotelev1">&gt; pwd`; \
</span><br>
<span class="quotelev1">&gt;    top_distdir=`CDPATH=&quot;${ZSH_VERSION+.}:&quot; &amp;&amp; cd openmpi-1.4a1r20848  
</span><br>
<span class="quotelev1">&gt; &amp;&amp; pwd`; \
</span><br>
<span class="quotelev1">&gt;    (cd $subdir &amp;&amp; \
</span><br>
<span class="quotelev1">&gt;      make  \
</span><br>
<span class="quotelev1">&gt;        top_distdir=&quot;$top_distdir&quot; \
</span><br>
<span class="quotelev1">&gt;        distdir=&quot;$distdir/$subdir&quot; \
</span><br>
<span class="quotelev1">&gt; 	am__remove_distdir=: \
</span><br>
<span class="quotelev1">&gt; 	am__skip_length_check=: \
</span><br>
<span class="quotelev1">&gt;        distdir) \
</span><br>
<span class="quotelev1">&gt;      || exit 1; \
</span><br>
<span class="quotelev1">&gt;  fi; \
</span><br>
<span class="quotelev1">&gt; done
</span><br>
<span class="quotelev1">&gt; make[1]: Entering directory `/home/mpiteam/openmpi/nightly-tarball- 
</span><br>
<span class="quotelev1">&gt; build-root/trunk/create-r20848/ompi/config'
</span><br>
<span class="quotelev1">&gt; make[1]: Leaving directory `/home/mpiteam/openmpi/nightly-tarball- 
</span><br>
<span class="quotelev1">&gt; build-root/trunk/create-r20848/ompi/config'
</span><br>
<span class="quotelev1">&gt; make[1]: Entering directory `/home/mpiteam/openmpi/nightly-tarball- 
</span><br>
<span class="quotelev1">&gt; build-root/trunk/create-r20848/ompi/contrib'
</span><br>
<span class="quotelev1">&gt; make[1]: *** No rule to make target `platform/lanl/rr-class/ 
</span><br>
<span class="quotelev1">&gt; debug.conf', needed by `distdir'.  Stop.
</span><br>
<span class="quotelev1">&gt; make[1]: Leaving directory `/home/mpiteam/openmpi/nightly-tarball- 
</span><br>
<span class="quotelev1">&gt; build-root/trunk/create-r20848/ompi/contrib'
</span><br>
<span class="quotelev1">&gt; make: *** [distdir] Error 1
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; ======================================================================
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Your friendly daemon,
</span><br>
<span class="quotelev1">&gt; Cyrador
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; testing mailing list
</span><br>
<span class="quotelev1">&gt; testing_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/testing">http://www.open-mpi.org/mailman/listinfo.cgi/testing</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5695.php">Sergey E. Koposov: "[OMPI devel] seg fault in openmpi-1.3.1 when shell in passwd is empty"</a>
<li><strong>Previous message:</strong> <a href="5693.php">George Bosilca: "Re: [OMPI devel] OMPI 1.3 - PERUSE peruse_comm_spec_t peer Negative	Value"</a>
<li><strong>Maybe in reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2008/08/4602.php">Tim Mattox: "Re: [OMPI devel] === CREATE FAILURE (trunk) ==="</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2009/05/6107.php">Josh Hursey: "Re: [OMPI devel] === CREATE FAILURE (trunk) ==="</a>
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

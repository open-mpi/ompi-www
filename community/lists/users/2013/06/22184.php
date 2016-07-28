<?
$subject_val = "Re: [OMPI users] OpenMPI 1.6.4 and Intel Composer_xe_2013.4.183: problem with remote runs, orted: error while loading shared libraries: libimf.so";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jun 21 13:22:05 2013" -->
<!-- isoreceived="20130621172205" -->
<!-- sent="Fri, 21 Jun 2013 17:22:00 +0000" -->
<!-- isosent="20130621172200" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI 1.6.4 and Intel Composer_xe_2013.4.183: problem with remote runs, orted: error while loading shared libraries: libimf.so" -->
<!-- id="EF66BBEB19BADC41AC8CCF5F684F07FC4F697A11_at_xmb-rcd-x01.cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="51C47742.3050809_at_ldeo.columbia.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] OpenMPI 1.6.4 and Intel Composer_xe_2013.4.183: problem with remote runs, orted: error while loading shared libraries: libimf.so<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-06-21 13:22:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22185.php">Jeff Squyres (jsquyres): "Re: [OMPI users] error running with mpirun"</a>
<li><strong>Previous message:</strong> <a href="22183.php">Mohamad Ali Rostami: "Re: [OMPI users] MPI Finalize hangs!"</a>
<li><strong>In reply to:</strong> <a href="22182.php">Gus Correa: "Re: [OMPI users] OpenMPI 1.6.4 and Intel Composer_xe_2013.4.183: problem with remote runs, orted: error while loading shared libraries: libimf.so"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22187.php">Stefano Zaghi: "Re: [OMPI users] OpenMPI 1.6.4 and Intel Composer_xe_2013.4.183: problem with remote runs, orted: error while loading shared libraries: libimf.so"</a>
<li><strong>Reply:</strong> <a href="22187.php">Stefano Zaghi: "Re: [OMPI users] OpenMPI 1.6.4 and Intel Composer_xe_2013.4.183: problem with remote runs, orted: error while loading shared libraries: libimf.so"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jun 21, 2013, at 11:54 AM, Gus Correa &lt;gus_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; 1) Install them on all nodes, via RPM, or configure/make/install, or other mechanism.
</span><br>
<span class="quotelev1">&gt; This is time consuming and costly to maintain, but scales well
</span><br>
<span class="quotelev1">&gt; in big or small clusters.
</span><br>
<p>Note, too, that the Intel compiler suite gives you scripts to source in your shell startup files (e.g., $HOME/.bashrc) that set all the right paths and ld_library_path values.  Look for files names iccvars.sh and iccvars.csh.
<br>
<p>You should be sure to source one of those files in your shell startup files in a place that will be executed for non-interactive logins.
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22185.php">Jeff Squyres (jsquyres): "Re: [OMPI users] error running with mpirun"</a>
<li><strong>Previous message:</strong> <a href="22183.php">Mohamad Ali Rostami: "Re: [OMPI users] MPI Finalize hangs!"</a>
<li><strong>In reply to:</strong> <a href="22182.php">Gus Correa: "Re: [OMPI users] OpenMPI 1.6.4 and Intel Composer_xe_2013.4.183: problem with remote runs, orted: error while loading shared libraries: libimf.so"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22187.php">Stefano Zaghi: "Re: [OMPI users] OpenMPI 1.6.4 and Intel Composer_xe_2013.4.183: problem with remote runs, orted: error while loading shared libraries: libimf.so"</a>
<li><strong>Reply:</strong> <a href="22187.php">Stefano Zaghi: "Re: [OMPI users] OpenMPI 1.6.4 and Intel Composer_xe_2013.4.183: problem with remote runs, orted: error while loading shared libraries: libimf.so"</a>
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

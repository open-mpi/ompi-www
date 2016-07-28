<?
$subject_val = "[OMPI devel] 1.8.4rc4 is out";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Aug 13 16:37:26 2014" -->
<!-- isoreceived="20140813203726" -->
<!-- sent="Wed, 13 Aug 2014 20:37:24 +0000" -->
<!-- isosent="20140813203724" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[OMPI devel] 1.8.4rc4 is out" -->
<!-- id="8A3D9D5C-A63E-4529-AD90-9E8BD265E543_at_cisco.com" -->
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
<strong>Subject:</strong> [OMPI devel] 1.8.4rc4 is out<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-08-13 16:37:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15641.php">George Bosilca: "Re: [OMPI devel] trunk hang when nodes have similar but private network"</a>
<li><strong>Previous message:</strong> <a href="15639.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] trunk hang when nodes have similar but private	network"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15647.php">Paul Hargrove: "Re: [OMPI devel] 1.8.4rc4 is out"</a>
<li><strong>Reply:</strong> <a href="15647.php">Paul Hargrove: "Re: [OMPI devel] 1.8.4rc4 is out"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Please test!  Ralph would like to release after the teleconf next Tuesday:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/software/ompi/v1.8/">http://www.open-mpi.org/software/ompi/v1.8/</a>
<br>
<p>Changes since last rc:
<br>
<p>- Fix cascading/over-quoting in some cases with the rsh/ssh-based
<br>
&nbsp;&nbsp;launcher.  Thanks to multiple users for raising the issue.
<br>
- Properly add support for gfortran 4.9 ignore TKR pragma (it was
<br>
&nbsp;&nbsp;erroneously only partially added in v1.7.5).  Thanks to Marcus
<br>
&nbsp;&nbsp;Daniels for raising the issue.
<br>
- Update/improve help messages in the usnic BTL.
<br>
- Resolve a race condition in MPI_Abort.
<br>
- Fix obscure cases where static linking from wrapper compilers would
<br>
&nbsp;&nbsp;fail.
<br>
- Clarify the configure --help message about when OpenSHMEM is
<br>
&nbsp;&nbsp;enabled/disabled by default.  Thanks to Paul Hargrove for the
<br>
&nbsp;&nbsp;suggestion.
<br>
- Align pages properly where relevant.  Thanks to Paul Hargrove for
<br>
&nbsp;&nbsp;identifying the issue.
<br>
- Various compiler warning and minor fixes for OpenBSD, FreeBSD, and
<br>
&nbsp;&nbsp;Solaris/SPARC.  Thanks to Paul Hargrove for the patches.
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
<li><strong>Next message:</strong> <a href="15641.php">George Bosilca: "Re: [OMPI devel] trunk hang when nodes have similar but private network"</a>
<li><strong>Previous message:</strong> <a href="15639.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] trunk hang when nodes have similar but private	network"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15647.php">Paul Hargrove: "Re: [OMPI devel] 1.8.4rc4 is out"</a>
<li><strong>Reply:</strong> <a href="15647.php">Paul Hargrove: "Re: [OMPI devel] 1.8.4rc4 is out"</a>
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

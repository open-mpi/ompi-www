<?
$subject_val = "[OMPI devel] 1.8.2rc5 released";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Aug 22 14:33:07 2014" -->
<!-- isoreceived="20140822183307" -->
<!-- sent="Fri, 22 Aug 2014 18:33:06 +0000" -->
<!-- isosent="20140822183306" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[OMPI devel] 1.8.2rc5 released" -->
<!-- id="864F3E6F-461B-4422-8779-AC43A730EADA_at_cisco.com" -->
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
<strong>Subject:</strong> [OMPI devel] 1.8.2rc5 released<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-08-22 14:33:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15695.php">Ralph Castain: "Re: [OMPI devel] 1.8.2rc5 released"</a>
<li><strong>Previous message:</strong> <a href="15693.php">Ralph Castain: "Re: [OMPI devel] OMPI devel] MPI_Abort does not make mpirun return with the right exit code"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15695.php">Ralph Castain: "Re: [OMPI devel] 1.8.2rc5 released"</a>
<li><strong>Reply:</strong> <a href="15695.php">Ralph Castain: "Re: [OMPI devel] 1.8.2rc5 released"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
In the usual location:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/software/ompi/v1.8/">http://www.open-mpi.org/software/ompi/v1.8/</a>
<br>
<p>Changes since rc4:
<br>
<p>- Add a missing atomics stuff into tarball
<br>
- fortran: add missing bindings for WIN_SYNC, WIN_LOCK_ALL, WIN_UNLOCK_ALL
<br>
- README updates
<br>
- usnic: ensure to have a safe destruction of an opal_list_item_t
<br>
- remove deprecation warnings for pernode, npernode, and npersocket
<br>
- OOB updates: if an address fails, just try the next one
<br>
- usnic: Fix connectivity checker pointer mismatch
<br>
- btl/scif: use safe syntax
<br>
- openib/btl: better detect max reg memory.
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
<li><strong>Next message:</strong> <a href="15695.php">Ralph Castain: "Re: [OMPI devel] 1.8.2rc5 released"</a>
<li><strong>Previous message:</strong> <a href="15693.php">Ralph Castain: "Re: [OMPI devel] OMPI devel] MPI_Abort does not make mpirun return with the right exit code"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15695.php">Ralph Castain: "Re: [OMPI devel] 1.8.2rc5 released"</a>
<li><strong>Reply:</strong> <a href="15695.php">Ralph Castain: "Re: [OMPI devel] 1.8.2rc5 released"</a>
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

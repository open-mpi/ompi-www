<?
$subject_val = "[OMPI devel] Non-uniform BTL problems in: openib, tcp, sctp, portals4, vader, scif";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May 13 14:09:47 2014" -->
<!-- isoreceived="20140513180947" -->
<!-- sent="Tue, 13 May 2014 18:09:45 +0000" -->
<!-- isosent="20140513180945" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[OMPI devel] Non-uniform BTL problems in: openib, tcp, sctp, portals4, vader, scif" -->
<!-- id="C65317F8-DB4B-4D0C-A549-4FF93A6EFDF5_at_cisco.com" -->
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
<strong>Subject:</strong> [OMPI devel] Non-uniform BTL problems in: openib, tcp, sctp, portals4, vader, scif<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-05-13 14:09:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14784.php">Jeff Squyres (jsquyres): "[OMPI devel] 1.6.6rc1 tarball posted"</a>
<li><strong>Previous message:</strong> <a href="14782.php">Rolf vandeVaart: "[OMPI devel] Minutes of Open MPI ConCall Meeting - Tuesday, May 13, 2014"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14795.php">George Bosilca: "Re: [OMPI devel] Non-uniform BTL problems in: openib, tcp, sctp, portals4, vader, scif"</a>
<li><strong>Reply:</strong> <a href="14795.php">George Bosilca: "Re: [OMPI devel] Non-uniform BTL problems in: openib, tcp, sctp, portals4, vader, scif"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I notice that BTLs are not checking the return value from ompi_modex_recv() for OPAL_ERR_DATA_VALUE_NOT_FOUND (indicating that the peer process didn't put that modex key).  In the BTL context, NOT_FOUND means that that peer process doesn't have this BTL, so this local peer process should probably mark it as unreachable in add_procs().
<br>
<p>This is on both trunk and the v1.8 branch.
<br>
<p>The BTLs listed above are not checking/handling ompi_modex_recv() returning OPAL_ERR_DATA_VALUE_NOT_FOUND properly.  Most of these BTLs do something like this:
<br>
<p>-----
<br>
module_add_procs() {
<br>
&nbsp;&nbsp;loop over the peers {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;proc = proc_create(...)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;if (NULL == proc)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;error!
<br>
&nbsp;&nbsp;&nbsp;&nbsp;....
<br>
&nbsp;&nbsp;}
<br>
}
<br>
<p>proc_create(...) {
<br>
&nbsp;&nbsp;if (ompi_modex_recv() != OMPI_SUCCESS)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return NULL;
<br>
&nbsp;&nbsp;...
<br>
}
<br>
-----
<br>
<p>The fix is to make proc_create() return something a bit more expressive so that add_procs() can tell the difference between &quot;error!&quot; and &quot;you can't reach this peer&quot;.
<br>
<p>I fixed this in the usnic BTL back in late March, but forgot to bring this to everyone's attention -- oops.  See <a href="https://svn.open-mpi.org/trac/ompi/ticket/4442">https://svn.open-mpi.org/trac/ompi/ticket/4442</a>
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
<li><strong>Next message:</strong> <a href="14784.php">Jeff Squyres (jsquyres): "[OMPI devel] 1.6.6rc1 tarball posted"</a>
<li><strong>Previous message:</strong> <a href="14782.php">Rolf vandeVaart: "[OMPI devel] Minutes of Open MPI ConCall Meeting - Tuesday, May 13, 2014"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14795.php">George Bosilca: "Re: [OMPI devel] Non-uniform BTL problems in: openib, tcp, sctp, portals4, vader, scif"</a>
<li><strong>Reply:</strong> <a href="14795.php">George Bosilca: "Re: [OMPI devel] Non-uniform BTL problems in: openib, tcp, sctp, portals4, vader, scif"</a>
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

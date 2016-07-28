<?
$subject_val = "[OMPI devel] 1.5 branch broken";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Apr 26 08:22:38 2010" -->
<!-- isoreceived="20100426122238" -->
<!-- sent="Mon, 26 Apr 2010 08:22:32 -0400" -->
<!-- isosent="20100426122232" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[OMPI devel] 1.5 branch broken" -->
<!-- id="9B365B6A-AA86-4E60-A359-014B194669CE_at_cisco.com" -->
<!-- charset="windows-1252" -->
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
<strong>Subject:</strong> [OMPI devel] 1.5 branch broken<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-04-26 08:22:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7805.php">Ralph Castain: "Re: [OMPI devel] How is a MPI process launched ?"</a>
<li><strong>Previous message:</strong> <a href="7803.php">Leo P.: "[OMPI devel] How is a MPI process launched ?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7806.php">Ralph Castain: "Re: [OMPI devel] 1.5 branch broken"</a>
<li><strong>Reply:</strong> <a href="7806.php">Ralph Castain: "Re: [OMPI devel] 1.5 branch broken"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<a href="https://svn.open-mpi.org/trac/ompi/changeset/23025">https://svn.open-mpi.org/trac/ompi/changeset/23025</a> broke the v1.5 branch; I get compile failures on Linux.
<br>
<p>-----
<br>
&nbsp;&nbsp;CC     ess_singleton_module.lo
<br>
ess_singleton_module.c:89: error: &#145;orte_ess_base_query_sys_info&#146; undeclared here (not in a function)
<br>
ess_singleton_module.c:91: warning: excess elements in struct initializer
<br>
ess_singleton_module.c:91: warning: (near initialization for &#145;orte_ess_singleton_module&#146;)
<br>
make[2]: *** [ess_singleton_module.lo] Error 1
<br>
-----
<br>
<p>Please fix.
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7805.php">Ralph Castain: "Re: [OMPI devel] How is a MPI process launched ?"</a>
<li><strong>Previous message:</strong> <a href="7803.php">Leo P.: "[OMPI devel] How is a MPI process launched ?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7806.php">Ralph Castain: "Re: [OMPI devel] 1.5 branch broken"</a>
<li><strong>Reply:</strong> <a href="7806.php">Ralph Castain: "Re: [OMPI devel] 1.5 branch broken"</a>
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

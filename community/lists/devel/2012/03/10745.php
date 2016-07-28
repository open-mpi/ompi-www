<?
$subject_val = "[OMPI devel] SUSE verification";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Mar 21 11:32:49 2012" -->
<!-- isoreceived="20120321153249" -->
<!-- sent="Wed, 21 Mar 2012 11:32:44 -0400" -->
<!-- isosent="20120321153244" -->
<!-- name="TERRY DONTJE" -->
<!-- email="terry.dontje_at_[hidden]" -->
<!-- subject="[OMPI devel] SUSE verification" -->
<!-- id="4F69F49C.2080304_at_oracle.com" -->
<!-- charset="UTF-8" -->
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
<strong>Subject:</strong> [OMPI devel] SUSE verification<br>
<strong>From:</strong> TERRY DONTJE (<em>terry.dontje_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-03-21 11:32:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10746.php">TERRY DONTJE: "Re: [OMPI devel] SUSE verification"</a>
<li><strong>Previous message:</strong> <a href="10744.php">Juan Solano: "[OMPI devel] MPI_Init_thread problem on ubuntu ARM (open-mpi 1.4.3)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10746.php">TERRY DONTJE: "Re: [OMPI devel] SUSE verification"</a>
<li><strong>Reply:</strong> <a href="10746.php">TERRY DONTJE: "Re: [OMPI devel] SUSE verification"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I ran into a problem on a Suse 10.1 system and was wondering if anyone 
<br>
has a version of Suse newer than 10.1 that can try the following test 
<br>
and send me the results.
<br>
-----testpci----
<br>
cat &lt;&lt;EOF &gt;testpci.c
<br>
#include &lt;pci/pci.h&gt;
<br>
<p>int testpci() {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;struct pci_access *pciaccess;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;pci_init(pciaccess);
<br>
}
<br>
<p>EOF
<br>
<p>cc -G -m64 testpci.c -lpci
<br>
<p><p>thanks,
<br>
<pre>
-- 
Terry D. Dontje | Principal Software Engineer
Developer Tools Engineering | +1.781.442.2631
Oracle *- Performance Technologies*
95 Network Drive, Burlington, MA 01803
Email terry.dontje_at_[hidden] &lt;mailto:terry.dontje_at_[hidden]&gt;
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-10745/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10746.php">TERRY DONTJE: "Re: [OMPI devel] SUSE verification"</a>
<li><strong>Previous message:</strong> <a href="10744.php">Juan Solano: "[OMPI devel] MPI_Init_thread problem on ubuntu ARM (open-mpi 1.4.3)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10746.php">TERRY DONTJE: "Re: [OMPI devel] SUSE verification"</a>
<li><strong>Reply:</strong> <a href="10746.php">TERRY DONTJE: "Re: [OMPI devel] SUSE verification"</a>
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

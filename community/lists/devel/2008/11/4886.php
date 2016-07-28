<?
$subject_val = "[OMPI devel] RML OOB, What&#180;s wrong?";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Nov 13 08:23:46 2008" -->
<!-- isoreceived="20081113132346" -->
<!-- sent="Thu, 13 Nov 2008 14:26:32 +0100" -->
<!-- isosent="20081113132632" -->
<!-- name="Leonardo Fialho" -->
<!-- email="lfialho_at_[hidden]" -->
<!-- subject="[OMPI devel] RML OOB, What&amp;#180;s wrong?" -->
<!-- id="491C2B08.3010004_at_aomail.uab.es" -->
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
<strong>Subject:</strong> [OMPI devel] RML OOB, What&#180;s wrong?<br>
<strong>From:</strong> Leonardo Fialho (<em>lfialho_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-11-13 08:26:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4887.php">Jeff Squyres: "[OMPI devel] Open MPI at SC'08: win a Wii!"</a>
<li><strong>Previous message:</strong> <a href="4885.php">Leonardo Fialho: "Re: [OMPI devel] Modex and others"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4888.php">Ralph Castain: "Re: [OMPI devel] RML OOB, What&#180;s wrong?"</a>
<li><strong>Reply:</strong> <a href="4888.php">Ralph Castain: "Re: [OMPI devel] RML OOB, What&#180;s wrong?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ralph and others,
<br>
<p>I made two tests with the RML/OOB while a PML module (I know it is 
<br>
trange, but I need it) waits for a message (orte_rml_recv_buffer(...)). 
<br>
The first one was using the --enable-progress-threads and the second one 
<br>
without this.
<br>
<p>My test was:
<br>
<p>Sent a message from an orted, i.e. [[X,0],2], to an application process 
<br>
(where is the modified PML), i.e. [[X,1],0], hosted by another orted, 
<br>
i.e. [[X,0],1]. In this case the message should be routed by the 
<br>
[[X,0],1] daemon.
<br>
<p>I don't know why, but the results are as follows:
<br>
<p>1) With progress thread, the [[X,0],1] daemon receives the message, 
<br>
identify that it should be routed, but do not routed it.
<br>
<p>2) Without progress thread, the message was delivered correctly.
<br>
<p>I don't know if I made any mistake, but the same code which works for an 
<br>
progress thread free compilation does not work for a compilation with a 
<br>
progress thread. Why?
<br>
<p>Thanks,
<br>
<pre>
-- 
Leonardo Fialho
Computer Architecture and Operating Systems Department - CAOS
Universidad Autonoma de Barcelona - UAB
ETSE, Edifcio Q, QC/3088
<a href="http://www.caos.uab.es">http://www.caos.uab.es</a>
Phone: +34-93-581-2888
Fax: +34-93-581-2478
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4887.php">Jeff Squyres: "[OMPI devel] Open MPI at SC'08: win a Wii!"</a>
<li><strong>Previous message:</strong> <a href="4885.php">Leonardo Fialho: "Re: [OMPI devel] Modex and others"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4888.php">Ralph Castain: "Re: [OMPI devel] RML OOB, What&#180;s wrong?"</a>
<li><strong>Reply:</strong> <a href="4888.php">Ralph Castain: "Re: [OMPI devel] RML OOB, What&#180;s wrong?"</a>
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

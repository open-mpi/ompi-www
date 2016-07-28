<?
$subject_val = "[OMPI devel] some questions regarding the portals modules";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jul  9 07:53:58 2010" -->
<!-- isoreceived="20100709115358" -->
<!-- sent="Fri, 9 Jul 2010 13:53:46 +0200" -->
<!-- isosent="20100709115346" -->
<!-- name="Jerome Soumagne" -->
<!-- email="soumagne_at_[hidden]" -->
<!-- subject="[OMPI devel] some questions regarding the portals modules" -->
<!-- id="4C370DCA.9000503_at_cscs.ch" -->
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
<strong>Subject:</strong> [OMPI devel] some questions regarding the portals modules<br>
<strong>From:</strong> Jerome Soumagne (<em>soumagne_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-07-09 07:53:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8153.php">Ralph Castain: "Re: [OMPI devel] alps ras patch for SLURM"</a>
<li><strong>Previous message:</strong> <a href="8151.php">Jerome Soumagne: "[OMPI devel] alps ras patch for SLURM"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8167.php">Matney Sr, Kenneth D.: "Re: [OMPI devel] some questions regarding the portals modules"</a>
<li><strong>Reply:</strong> <a href="8167.php">Matney Sr, Kenneth D.: "Re: [OMPI devel] some questions regarding the portals modules"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>As I said in the previous e-mail, we've recently installed OpenMPI on a 
<br>
Cray XT5 machine, and we therefore use the portals and the alps 
<br>
libraries. Thanks for providing the configuration script from Jaguar, 
<br>
this was very helpful, it had just to be slightly adapted in order to 
<br>
use the latest CNL version installed on this machine.
<br>
<p>I have some questions though regarding the use of the portals btl and 
<br>
mtl components. I noticed that when I compiled OpenMPI with mpi-thread 
<br>
support enabled and ran a job, the portals components did not want to 
<br>
initialize due to these funny lines:
<br>
<p>./mtl_portals_component.c
<br>
182     /* we don't run with no stinkin' threads */
<br>
183     if (enable_progress_threads || enable_mpi_threads) return NULL;
<br>
<p>I'd like to know why are mpi threads disabled since threads are 
<br>
supported on the XT5, does the btl/mtl require to have thread-safety 
<br>
implemented or something like that or is it because of the portals 
<br>
library itself ?
<br>
<p>I would also like to use the MPI_Comm_accept/connect functions, it seems 
<br>
that it's not possible to do that using the portals mtl even if the 
<br>
spawn seems to be supported, did I do something wrong or is it really 
<br>
not supported?
<br>
In this case, is it possible to extend this module to support these 
<br>
functions? We could help in doing that.
<br>
<p>I'd like also to know, are there any plans for creating a module in 
<br>
order to use the DMAPP interface for the Gemini interconnect?
<br>
<p>Thanks.
<br>
<p>Jerome
<br>
<p><pre>
-- 
J&#233;r&#244;me Soumagne
Scientific Computing Research Group
CSCS, Swiss National Supercomputing Centre
Galleria 2, Via Cantonale  | Tel: +41 (0)91 610 8258
CH-6928 Manno, Switzerland | Fax: +41 (0)91 610 8282
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-8152/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8153.php">Ralph Castain: "Re: [OMPI devel] alps ras patch for SLURM"</a>
<li><strong>Previous message:</strong> <a href="8151.php">Jerome Soumagne: "[OMPI devel] alps ras patch for SLURM"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8167.php">Matney Sr, Kenneth D.: "Re: [OMPI devel] some questions regarding the portals modules"</a>
<li><strong>Reply:</strong> <a href="8167.php">Matney Sr, Kenneth D.: "Re: [OMPI devel] some questions regarding the portals modules"</a>
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

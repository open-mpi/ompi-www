<?
$subject_val = "[OMPI devel] help-mpi-btl-openib.txt needs updating with real btl_openib_ib_min_rnr_timer and btl_openib_ib_timeout defaults";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Mar 12 19:06:51 2012" -->
<!-- isoreceived="20120312230651" -->
<!-- sent="Tue, 13 Mar 2012 10:06:43 +1100" -->
<!-- isosent="20120312230643" -->
<!-- name="Chris Samuel" -->
<!-- email="samuel_at_[hidden]" -->
<!-- subject="[OMPI devel] help-mpi-btl-openib.txt needs updating with real btl_openib_ib_min_rnr_timer and btl_openib_ib_timeout defaults" -->
<!-- id="201203131006.44035.samuel_at_unimelb.edu.au" -->
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
<strong>Subject:</strong> [OMPI devel] help-mpi-btl-openib.txt needs updating with real btl_openib_ib_min_rnr_timer and btl_openib_ib_timeout defaults<br>
<strong>From:</strong> Chris Samuel (<em>samuel_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-03-12 19:06:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10710.php">Chris Samuel: "Re: [OMPI devel] help-mpi-btl-openib.txt needs updating with real btl_openib_ib_min_rnr_timer and btl_openib_ib_timeout defaults"</a>
<li><strong>Previous message:</strong> <a href="10708.php">Matthias Jurenz: "Re: [OMPI devel] poor btl sm latency"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10710.php">Chris Samuel: "Re: [OMPI devel] help-mpi-btl-openib.txt needs updating with real btl_openib_ib_min_rnr_timer and btl_openib_ib_timeout defaults"</a>
<li><strong>Reply:</strong> <a href="10710.php">Chris Samuel: "Re: [OMPI devel] help-mpi-btl-openib.txt needs updating with real btl_openib_ib_min_rnr_timer and btl_openib_ib_timeout defaults"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi all,
<br>
<p>We've been working trying to track down an IB issue here where a
<br>
user was having code (Gromacs, run with OMPI 1.4.5) dieing with:
<br>
<p>[[18115,1],2][btl_openib_component.c:3224:handle_wc] from bruce030 to: bruce130 error polling LP CQ with status 
<br>
RETRY EXCEEDED ERROR status number 12 for wr_id 7406080 opcode 0 vendor error 129 qp_idx 2
<br>
<p>The odd thing I've spotted though is that in the error it says:
<br>
<p>* btl_openib_ib_retry_count - The number of times the sender will attempt to retry (defaulted to 7, the maximum 
<br>
value).
<br>
* btl_openib_ib_timeout - The local ACK timeout parameter (defaulted to 10).
<br>
<p>Those don't match the values compiled into OMPI 1.4.5:
<br>
<p>ompi_info -a | egrep 'btl_openib_ib_min_rnr_timer|btl_openib_ib_timeout'
<br>
&nbsp;MCA btl: parameter &quot;btl_openib_ib_min_rnr_timer&quot; (current value: &quot;25&quot;,
<br>
data source: default value)
<br>
&nbsp;MCA btl: parameter &quot;btl_openib_ib_timeout&quot; (current value: &quot;20&quot;, data
<br>
source: default value)
<br>
<p>It looks like the file:
<br>
<p>&nbsp;ompi/mca/btl/openib/help-mpi-btl-openib.txt
<br>
<p>needs to be updated with the correct values.
<br>
<p>We're stuck on 1.4 for the forseable future (too many apps to
<br>
recompile) so I don't know if 1.5+ has the same issue.
<br>
<p>It's been there since at least 2009.. :-)
<br>
<p><a href="http://www.open-mpi.org/community/lists/users/2009/03/8600.php">http://www.open-mpi.org/community/lists/users/2009/03/8600.php</a>
<br>
<p>cheers!
<br>
Chris
<br>
<pre>
-- 
   Christopher Samuel - Senior Systems Administrator
 VLSCI - Victorian Life Sciences Computation Initiative
 Email: samuel_at_[hidden] Phone: +61 (0)3 903 55545
         <a href="http://www.vlsci.unimelb.edu.au/">http://www.vlsci.unimelb.edu.au/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10710.php">Chris Samuel: "Re: [OMPI devel] help-mpi-btl-openib.txt needs updating with real btl_openib_ib_min_rnr_timer and btl_openib_ib_timeout defaults"</a>
<li><strong>Previous message:</strong> <a href="10708.php">Matthias Jurenz: "Re: [OMPI devel] poor btl sm latency"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10710.php">Chris Samuel: "Re: [OMPI devel] help-mpi-btl-openib.txt needs updating with real btl_openib_ib_min_rnr_timer and btl_openib_ib_timeout defaults"</a>
<li><strong>Reply:</strong> <a href="10710.php">Chris Samuel: "Re: [OMPI devel] help-mpi-btl-openib.txt needs updating with real btl_openib_ib_min_rnr_timer and btl_openib_ib_timeout defaults"</a>
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

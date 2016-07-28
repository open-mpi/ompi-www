<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Oct 24 20:01:53 2007" -->
<!-- isoreceived="20071025000153" -->
<!-- sent="Wed, 24 Oct 2007 20:01:44 -0400" -->
<!-- isosent="20071025000144" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[OMPI devel] RFC: Add &amp;quot;connect&amp;quot; field to openib BTL INI file" -->
<!-- id="9069082C-730E-4E6F-AFBE-A6E0C1CE05C8_at_cisco.com" -->
<!-- charset="US-ASCII" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-10-24 20:01:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2496.php">Jeff Squyres: "Re: [OMPI devel] PML cm and heterogeneous support"</a>
<li><strong>Previous message:</strong> <a href="2494.php">Bogdan Costescu: "Re: [OMPI devel] PathScale 3.0 problems with Open MPI 1.2.[34]"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2498.php">Gleb Natapov: "Re: [OMPI devel] RFC: Add &quot;connect&quot; field to openib BTL INI file"</a>
<li><strong>Reply:</strong> <a href="2498.php">Gleb Natapov: "Re: [OMPI devel] RFC: Add &quot;connect&quot; field to openib BTL INI file"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
WHAT: Add a &quot;connect&quot; field to the openib BTL INI file to specify  
<br>
which connect pseudo-component(s) (CPCs) can be used for wireup of a  
<br>
given device.
<br>
<p>WHY: 2 new CPCs are being written (by different parties); certain  
<br>
devices can only use certain CPCs.
<br>
<p>WHERE: Mainly in btl_openib_ini.*, but probably also touch a few  
<br>
other btl_openib_* files.
<br>
<p>WHEN: Sometime in the near future; no specific time set.
<br>
<p>TIMEOUT: Friday, 2 Nov 2007
<br>
<p>--------------------------------
<br>
<p>In addition to the already-existing &quot;oob&quot; connect pseudo-component  
<br>
(CPC), two more are in the works:
<br>
<p>- XRC: Pasha/Mellanox is working on a new XRC CPC for ConnectX HCAs.
<br>
<p>- RDMA CM: Welcome to Jon Mason from Open Grid Computing (for  
<br>
Chelsio) who will be doing iWARP-related work in the udapl and/or  
<br>
openib BTLs.  Either he or I will be implementing the RDMA CM-based CPC.
<br>
<p>My proposal is that the &quot;connect&quot; field can be added to the INI file  
<br>
and take a comma-delimited list of values of acceptable CPCs for a  
<br>
given device.  For example, the ConnectX HCA can take the following  
<br>
value:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;connect = xrc, rdma_cm, oob
<br>
<p>Meaning:
<br>
<p>- first, try the XRC CPC to try to make the connection
<br>
- if that fails, try the RDMA CM CPC
<br>
- if that fails, try the OOB CPC
<br>
- if that fails, fail the connection
<br>
<p>iWARP-based NICs can use the following value:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;connect = rdma_cm
<br>
<p>If no &quot;connect&quot; value is specified, then default value of &quot;oob,  
<br>
rdma_cm&quot; can be assumed (possibly someday changing to &quot;rdma_cm, oob&quot;).
<br>
<p>I mention this here on the devel list because disparate groups are  
<br>
working on different CPC's; coordination will be required to  
<br>
implement this arbitration mechanism.
<br>
<p>Comments?
<br>
<p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2496.php">Jeff Squyres: "Re: [OMPI devel] PML cm and heterogeneous support"</a>
<li><strong>Previous message:</strong> <a href="2494.php">Bogdan Costescu: "Re: [OMPI devel] PathScale 3.0 problems with Open MPI 1.2.[34]"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2498.php">Gleb Natapov: "Re: [OMPI devel] RFC: Add &quot;connect&quot; field to openib BTL INI file"</a>
<li><strong>Reply:</strong> <a href="2498.php">Gleb Natapov: "Re: [OMPI devel] RFC: Add &quot;connect&quot; field to openib BTL INI file"</a>
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

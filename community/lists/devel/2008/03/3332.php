<?
$subject_val = "[OMPI devel] Ticket 1224: disable early completion in v1.2.x series";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Mar  3 12:28:40 2008" -->
<!-- isoreceived="20080303172840" -->
<!-- sent="Mon, 3 Mar 2008 12:28:25 -0500" -->
<!-- isosent="20080303172825" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[OMPI devel] Ticket 1224: disable early completion in v1.2.x series" -->
<!-- id="80D98E31-BFF2-48BB-9D55-C31E789BC7B6_at_cisco.com" -->
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
<strong>Subject:</strong> [OMPI devel] Ticket 1224: disable early completion in v1.2.x series<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-03-03 12:28:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3333.php">Shipman, Galen M.: "Re: [OMPI devel] Ticket 1224: disable early completion in v1.2.x series"</a>
<li><strong>Previous message:</strong> <a href="3331.php">Rainer Keller: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r17681"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3333.php">Shipman, Galen M.: "Re: [OMPI devel] Ticket 1224: disable early completion in v1.2.x series"</a>
<li><strong>Reply:</strong> <a href="3333.php">Shipman, Galen M.: "Re: [OMPI devel] Ticket 1224: disable early completion in v1.2.x series"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The topic of the &quot;early completion&quot; behavior in OB1 for IB  
<br>
optimizations has come up several times in the v1.2 series (it causes  
<br>
problems in some scenarios).
<br>
<p>- leave the default the way it is now (early completions enabled)
<br>
- add an MCA parameter for disabling early completions
<br>
<p>I mention this now because I had a customer complain about it over the  
<br>
weekend.  :-)
<br>
<p>Gleb and I propose the patch in <a href="https://svn.open-mpi.org/trac/ompi/ticket/1224">https://svn.open-mpi.org/trac/ompi/ticket/1224</a> 
<br>
&nbsp;&nbsp;for the v1.2 series.  The new OB1 MCA parameter  
<br>
pml_ob1_use_early_completions defaults to 1 (preserving the same  
<br>
behavior as the rest of the v1.2 series), but it can be set to 0 if  
<br>
the early completions on IB are creating problems for specific  
<br>
applications.
<br>
<p>It would be good to get this functionality in a real release (e.g.,  
<br>
v1.2.6).
<br>
<p>Note that this MCA parameter is not necessary for the upcoming v1.3  
<br>
series because of changes in ob1 and the openib btl.
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
<li><strong>Next message:</strong> <a href="3333.php">Shipman, Galen M.: "Re: [OMPI devel] Ticket 1224: disable early completion in v1.2.x series"</a>
<li><strong>Previous message:</strong> <a href="3331.php">Rainer Keller: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r17681"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3333.php">Shipman, Galen M.: "Re: [OMPI devel] Ticket 1224: disable early completion in v1.2.x series"</a>
<li><strong>Reply:</strong> <a href="3333.php">Shipman, Galen M.: "Re: [OMPI devel] Ticket 1224: disable early completion in v1.2.x series"</a>
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

<?
$subject_val = "Re: [OMPI users] Could following situations caused by RDMAmcaparameters?";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Apr 23 06:56:26 2009" -->
<!-- isoreceived="20090423105626" -->
<!-- sent="Thu, 23 Apr 2009 06:56:20 -0400" -->
<!-- isosent="20090423105620" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Could following situations caused by RDMAmcaparameters?" -->
<!-- id="6E7747CB-DB8E-487A-8008-57C6587A4A3B_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="84b2b5e30904222043j39016925of26dc50990b760fd_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Could following situations caused by RDMAmcaparameters?<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-04-23 06:56:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9058.php">Ankush Kaul: "Re: [OMPI users] Problem with running openMPI program"</a>
<li><strong>Previous message:</strong> <a href="9056.php">Daniel Sp&#195;&#165;ngberg: "Re: [OMPI users] Open-MPI and gprof"</a>
<li><strong>In reply to:</strong> <a href="9043.php">Tsung Han Shie: "Re: [OMPI users] Could following situations caused by RDMA mcaparameters?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Apr 22, 2009, at 11:43 PM, Tsung Han Shie wrote:
<br>
<p><span class="quotelev1">&gt; Unfortunately, after I thoroughly examined entire cluster, I found a  
</span><br>
<span class="quotelev1">&gt; bad node with busted hard drive. That's the reason why this job  
</span><br>
<span class="quotelev1">&gt; hanged.
</span><br>
<span class="quotelev1">&gt; Also, when this job is sent with one bad node among the machinefile,  
</span><br>
<span class="quotelev1">&gt; neither the openmpi nor my program gives me any error messages.  
</span><br>
<span class="quotelev1">&gt; That's why I can't find the reason for job hanged.
</span><br>
<p>Interesting.  Sorry OMPI didn't provide more diagnostics.  :-\
<br>
<p>Did you get the information that you needed about the OpenFabrics  
<br>
optimization stuff?
<br>
<p>Note that we released OMPI 1.3.2 yesterday that fixed the  
<br>
mpi_leave_pinned stuff, but also note that the treatment of the  
<br>
mpi_leave_pinned MCA parameter changed slightly.  Please see this FAQ  
<br>
entry for details:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/faq/?category=openfabrics#setting-mpi-leave-pinned-1.3.2">http://www.open-mpi.org/faq/?category=openfabrics#setting-mpi-leave-pinned-1.3.2</a>
<br>
<p>Also, since you did apparently mean v1.1.3, note that that version is  
<br>
ancient.  Much has happened in Open MPI to improve scalability and  
<br>
performance (and diagnostics!) since the 1.1 series.  If it's possible  
<br>
for you to upgrade, I encourage you to do so.
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
<li><strong>Next message:</strong> <a href="9058.php">Ankush Kaul: "Re: [OMPI users] Problem with running openMPI program"</a>
<li><strong>Previous message:</strong> <a href="9056.php">Daniel Sp&#195;&#165;ngberg: "Re: [OMPI users] Open-MPI and gprof"</a>
<li><strong>In reply to:</strong> <a href="9043.php">Tsung Han Shie: "Re: [OMPI users] Could following situations caused by RDMA mcaparameters?"</a>
<!-- nextthread="start" -->
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

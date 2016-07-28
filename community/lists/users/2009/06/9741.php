<?
$subject_val = "Re: [OMPI users] PBSPro/OpenMPI Errors";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Jun 27 08:45:37 2009" -->
<!-- isoreceived="20090627124537" -->
<!-- sent="Sat, 27 Jun 2009 08:45:31 -0400" -->
<!-- isosent="20090627124531" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] PBSPro/OpenMPI Errors" -->
<!-- id="B6917CA9-B969-4491-AD1F-3497F6635B31_at_cisco.com" -->
<!-- charset="WINDOWS-1252" -->
<!-- inreplyto="59F8E9364A4B184EA893B98611CFC88E097592F0_at_XMAIL.ds.utpa.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] PBSPro/OpenMPI Errors<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-06-27 08:45:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9742.php">Nulik Nol: "Re: [OMPI users] Open specific port TCP/IP in MPI"</a>
<li><strong>Previous message:</strong> <a href="9740.php">Jeff Squyres: "Re: [OMPI users] Problem with qlogic cards InfiniPath_QLE7240and	AlltoAll call"</a>
<li><strong>In reply to:</strong> <a href="9713.php">Robert Jackson: "[OMPI users] PBSPro/OpenMPI Errors"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jun 25, 2009, at 12:06 PM, Robert Jackson wrote:
<br>
<p><span class="quotelev1">&gt; When using OpenMPI and nwchem standalone (mpirun --byslot --mca btl  
</span><br>
<span class="quotelev1">&gt; self,sm,tcp --mca btl_base_verbose 30 --mca btl_tcp_if_exclude  
</span><br>
<span class="quotelev1">&gt; lo,eth1 $NWCHEM h2o.nw &gt; &amp; h2o.nwo.$$) the job runs fine.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; When running the same job via the PBSPro scheduler I get errors. The  
</span><br>
<span class="quotelev1">&gt; PBS script is called nwrun and is run with the following command &#150;  
</span><br>
<span class="quotelev1">&gt; qsub &#150;V &#150;S /bin/bash ./nwrun.
</span><br>
<p>Odd.
<br>
<p>I'm unfortunately unfamiliar with nwchem; it looks like the error is  
<br>
coming from ARMCI.  Have you checked with the nwchem authors to see  
<br>
what this error means?
<br>
<p><span class="quotelev1">&gt; Error listing from error file:
</span><br>
<span class="quotelev1">&gt; ARMCI configured for 4 cluster nodes. Network protocol is 'TCP/IP  
</span><br>
<span class="quotelev1">&gt; Sockets'.
</span><br>
<span class="quotelev1">&gt; 1:trying connect to host=compute-1-4.local, port=35506 t=5 111
</span><br>
<span class="quotelev1">&gt; 1:armci_CreateSocketAndConnect: connect failed: -1
</span><br>
<span class="quotelev1">&gt; trying to connect:: Connection refused
</span><br>
<span class="quotelev1">&gt; 1:armci_CreateSocketAndConnect: connect failed: -1
</span><br>
<span class="quotelev1">&gt; Last System Error Message from Task 1:: Connection refused
</span><br>
<span class="quotelev1">&gt; [compute-1-4.local:04739] MPI_ABORT invoked on rank 1 in  
</span><br>
<span class="quotelev1">&gt; communicator MPI_COMM_WORLD with errorcode -1
</span><br>
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9742.php">Nulik Nol: "Re: [OMPI users] Open specific port TCP/IP in MPI"</a>
<li><strong>Previous message:</strong> <a href="9740.php">Jeff Squyres: "Re: [OMPI users] Problem with qlogic cards InfiniPath_QLE7240and	AlltoAll call"</a>
<li><strong>In reply to:</strong> <a href="9713.php">Robert Jackson: "[OMPI users] PBSPro/OpenMPI Errors"</a>
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

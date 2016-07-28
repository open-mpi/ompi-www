<?
$subject_val = "Re: [OMPI users] problem when mpi_paffinity_alone is set to 1";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Aug 22 07:39:59 2008" -->
<!-- isoreceived="20080822113959" -->
<!-- sent="Fri, 22 Aug 2008 05:39:51 -0600" -->
<!-- isosent="20080822113951" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] problem when mpi_paffinity_alone is set to 1" -->
<!-- id="4E6081FC-8D33-4EFC-93EC-8A5AD15840CE_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="48AEA1C8.7040908_at_lri.fr" -->
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
<strong>Subject:</strong> Re: [OMPI users] problem when mpi_paffinity_alone is set to 1<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-08-22 07:39:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6409.php">Camille Coti: "Re: [OMPI users] problem when mpi_paffinity_alone is set to 1"</a>
<li><strong>Previous message:</strong> <a href="6407.php">Camille Coti: "[OMPI users] problem when mpi_paffinity_alone is set to 1"</a>
<li><strong>In reply to:</strong> <a href="6407.php">Camille Coti: "[OMPI users] problem when mpi_paffinity_alone is set to 1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6409.php">Camille Coti: "Re: [OMPI users] problem when mpi_paffinity_alone is set to 1"</a>
<li><strong>Reply:</strong> <a href="6409.php">Camille Coti: "Re: [OMPI users] problem when mpi_paffinity_alone is set to 1"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Camille
<br>
<p>What OMPI version are you using? We just changed the paffinity module  
<br>
last night, but did nothing to maffinity. However, it is possible that  
<br>
the maffinity framework makes some calls into paffinity that need to  
<br>
adjust.
<br>
<p>So version number would help a great deal in this case.
<br>
<p>Thanks
<br>
Ralph
<br>
<p>On Aug 22, 2008, at 5:23 AM, Camille Coti wrote:
<br>
<p><span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am trying to run applications on a shared-memory machine. For the  
</span><br>
<span class="quotelev1">&gt; moment I am just trying to run tests on point-to-point  
</span><br>
<span class="quotelev1">&gt; communications (a  trivial token ring) and collective operations  
</span><br>
<span class="quotelev1">&gt; (from the SkaMPI tests suite).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It runs smoothly if mpi_paffinity_alone is set to 0. For a number of  
</span><br>
<span class="quotelev1">&gt; processes which is larger than about 10, global communications just  
</span><br>
<span class="quotelev1">&gt; don't seem possible. Point-to-point communications seem to be OK.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; But when I specify  --mca mpi_paffinity_alone 1 in my command line,  
</span><br>
<span class="quotelev1">&gt; I get the following error:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mbind: Invalid argument
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I looked into the code of maffinity/libnuma, and found out the error  
</span><br>
<span class="quotelev1">&gt; comes from
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;        numa_setlocal_memory(segments[i].mbs_start_addr,
</span><br>
<span class="quotelev1">&gt;                             segments[i].mbs_len);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; in maffinity_libnuma_module.c.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The machine I am using is a Linux box running a 2.6.5-7 kernel.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Has anyone experienced a similar problem?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Camille
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6409.php">Camille Coti: "Re: [OMPI users] problem when mpi_paffinity_alone is set to 1"</a>
<li><strong>Previous message:</strong> <a href="6407.php">Camille Coti: "[OMPI users] problem when mpi_paffinity_alone is set to 1"</a>
<li><strong>In reply to:</strong> <a href="6407.php">Camille Coti: "[OMPI users] problem when mpi_paffinity_alone is set to 1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6409.php">Camille Coti: "Re: [OMPI users] problem when mpi_paffinity_alone is set to 1"</a>
<li><strong>Reply:</strong> <a href="6409.php">Camille Coti: "Re: [OMPI users] problem when mpi_paffinity_alone is set to 1"</a>
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

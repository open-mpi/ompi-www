<?
$subject_val = "Re: [OMPI users] problem when mpi_paffinity_alone is set to 1";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Aug 22 09:16:07 2008" -->
<!-- isoreceived="20080822131607" -->
<!-- sent="Fri, 22 Aug 2008 07:16:00 -0600" -->
<!-- isosent="20080822131600" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] problem when mpi_paffinity_alone is set to 1" -->
<!-- id="D1ABE766-E043-44A4-8E00-873BAC097871_at_lanl.gov" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="48AEB92E.30803_at_lri.fr" -->
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
<strong>Date:</strong> 2008-08-22 09:16:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6411.php">Camille Coti: "Re: [OMPI users] problem when mpi_paffinity_alone is set to 1"</a>
<li><strong>Previous message:</strong> <a href="6409.php">Camille Coti: "Re: [OMPI users] problem when mpi_paffinity_alone is set to 1"</a>
<li><strong>In reply to:</strong> <a href="6409.php">Camille Coti: "Re: [OMPI users] problem when mpi_paffinity_alone is set to 1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6411.php">Camille Coti: "Re: [OMPI users] problem when mpi_paffinity_alone is set to 1"</a>
<li><strong>Reply:</strong> <a href="6411.php">Camille Coti: "Re: [OMPI users] problem when mpi_paffinity_alone is set to 1"</a>
<li><strong>Reply:</strong> <a href="6414.php">Mi Yan: "Re: [OMPI users] problem when mpi_paffinity_alone is set to 1"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Okay, I'll look into it. I suspect the problem is due to the  
<br>
redefinition of the paffinity API to clarify physical vs logical  
<br>
processors - more than likely, the maffinity interface suffers from  
<br>
the same problem we had to correct over there.
<br>
<p>We'll report back later with an estimate of how quickly this can be  
<br>
fixed.
<br>
<p>Thanks
<br>
Ralph
<br>
<p>On Aug 22, 2008, at 7:03 AM, Camille Coti wrote:
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ralph,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I compiled a clean checkout from the trunk (r19392), the problem is  
</span><br>
<span class="quotelev1">&gt; still the same.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Camille
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ralph Castain a &#233;crit :
</span><br>
<span class="quotelev2">&gt;&gt; Hi Camille
</span><br>
<span class="quotelev2">&gt;&gt; What OMPI version are you using? We just changed the paffinity  
</span><br>
<span class="quotelev2">&gt;&gt; module last night, but did nothing to maffinity. However, it is  
</span><br>
<span class="quotelev2">&gt;&gt; possible that the maffinity framework makes some calls into  
</span><br>
<span class="quotelev2">&gt;&gt; paffinity that need to adjust.
</span><br>
<span class="quotelev2">&gt;&gt; So version number would help a great deal in this case.
</span><br>
<span class="quotelev2">&gt;&gt; Thanks
</span><br>
<span class="quotelev2">&gt;&gt; Ralph
</span><br>
<span class="quotelev2">&gt;&gt; On Aug 22, 2008, at 5:23 AM, Camille Coti wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hello,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I am trying to run applications on a shared-memory machine. For  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the moment I am just trying to run tests on point-to-point  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; communications (a  trivial token ring) and collective operations  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (from the SkaMPI tests suite).
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; It runs smoothly if mpi_paffinity_alone is set to 0. For a number  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; of processes which is larger than about 10, global communications  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; just don't seem possible. Point-to-point communications seem to be  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; OK.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; But when I specify  --mca mpi_paffinity_alone 1 in my command  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; line, I get the following error:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mbind: Invalid argument
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I looked into the code of maffinity/libnuma, and found out the  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; error comes from
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       numa_setlocal_memory(segments[i].mbs_start_addr,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                            segments[i].mbs_len);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; in maffinity_libnuma_module.c.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The machine I am using is a Linux box running a 2.6.5-7 kernel.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Has anyone experienced a similar problem?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Camille
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
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
<li><strong>Next message:</strong> <a href="6411.php">Camille Coti: "Re: [OMPI users] problem when mpi_paffinity_alone is set to 1"</a>
<li><strong>Previous message:</strong> <a href="6409.php">Camille Coti: "Re: [OMPI users] problem when mpi_paffinity_alone is set to 1"</a>
<li><strong>In reply to:</strong> <a href="6409.php">Camille Coti: "Re: [OMPI users] problem when mpi_paffinity_alone is set to 1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6411.php">Camille Coti: "Re: [OMPI users] problem when mpi_paffinity_alone is set to 1"</a>
<li><strong>Reply:</strong> <a href="6411.php">Camille Coti: "Re: [OMPI users] problem when mpi_paffinity_alone is set to 1"</a>
<li><strong>Reply:</strong> <a href="6414.php">Mi Yan: "Re: [OMPI users] problem when mpi_paffinity_alone is set to 1"</a>
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

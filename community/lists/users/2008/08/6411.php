<?
$subject_val = "Re: [OMPI users] problem when mpi_paffinity_alone is set to 1";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Aug 22 09:25:01 2008" -->
<!-- isoreceived="20080822132501" -->
<!-- sent="Fri, 22 Aug 2008 15:21:19 +0200" -->
<!-- isosent="20080822132119" -->
<!-- name="Camille Coti" -->
<!-- email="coti_at_[hidden]" -->
<!-- subject="Re: [OMPI users] problem when mpi_paffinity_alone is set to 1" -->
<!-- id="48AEBD4F.6070408_at_lri.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="D1ABE766-E043-44A4-8E00-873BAC097871_at_lanl.gov" -->
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
<strong>From:</strong> Camille Coti (<em>coti_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-08-22 09:21:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6412.php">Ralph Castain: "Re: [OMPI users] problem when mpi_paffinity_alone is set to 1"</a>
<li><strong>Previous message:</strong> <a href="6410.php">Ralph Castain: "Re: [OMPI users] problem when mpi_paffinity_alone is set to 1"</a>
<li><strong>In reply to:</strong> <a href="6410.php">Ralph Castain: "Re: [OMPI users] problem when mpi_paffinity_alone is set to 1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6412.php">Ralph Castain: "Re: [OMPI users] problem when mpi_paffinity_alone is set to 1"</a>
<li><strong>Reply:</strong> <a href="6412.php">Ralph Castain: "Re: [OMPI users] problem when mpi_paffinity_alone is set to 1"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
OK, thank you!
<br>
<p>Camille
<br>
<p>Ralph Castain a &#233;crit :
<br>
<span class="quotelev1">&gt; Okay, I'll look into it. I suspect the problem is due to the 
</span><br>
<span class="quotelev1">&gt; redefinition of the paffinity API to clarify physical vs logical 
</span><br>
<span class="quotelev1">&gt; processors - more than likely, the maffinity interface suffers from the 
</span><br>
<span class="quotelev1">&gt; same problem we had to correct over there.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; We'll report back later with an estimate of how quickly this can be fixed.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Aug 22, 2008, at 7:03 AM, Camille Coti wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Ralph,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I compiled a clean checkout from the trunk (r19392), the problem is 
</span><br>
<span class="quotelev2">&gt;&gt; still the same.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Camille
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Ralph Castain a &#233;crit :
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi Camille
</span><br>
<span class="quotelev3">&gt;&gt;&gt; What OMPI version are you using? We just changed the paffinity module 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; last night, but did nothing to maffinity. However, it is possible 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; that the maffinity framework makes some calls into paffinity that 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; need to adjust.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; So version number would help a great deal in this case.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Ralph
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Aug 22, 2008, at 5:23 AM, Camille Coti wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Hello,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I am trying to run applications on a shared-memory machine. For the 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; moment I am just trying to run tests on point-to-point 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; communications (a  trivial token ring) and collective operations 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; (from the SkaMPI tests suite).
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; It runs smoothly if mpi_paffinity_alone is set to 0. For a number of 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; processes which is larger than about 10, global communications just 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; don't seem possible. Point-to-point communications seem to be OK.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; But when I specify  --mca mpi_paffinity_alone 1 in my command line, 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I get the following error:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; mbind: Invalid argument
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I looked into the code of maffinity/libnuma, and found out the error 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; comes from
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;       numa_setlocal_memory(segments[i].mbs_start_addr,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                            segments[i].mbs_len);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; in maffinity_libnuma_module.c.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; The machine I am using is a Linux box running a 2.6.5-7 kernel.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Has anyone experienced a similar problem?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Camille
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
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
<li><strong>Next message:</strong> <a href="6412.php">Ralph Castain: "Re: [OMPI users] problem when mpi_paffinity_alone is set to 1"</a>
<li><strong>Previous message:</strong> <a href="6410.php">Ralph Castain: "Re: [OMPI users] problem when mpi_paffinity_alone is set to 1"</a>
<li><strong>In reply to:</strong> <a href="6410.php">Ralph Castain: "Re: [OMPI users] problem when mpi_paffinity_alone is set to 1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6412.php">Ralph Castain: "Re: [OMPI users] problem when mpi_paffinity_alone is set to 1"</a>
<li><strong>Reply:</strong> <a href="6412.php">Ralph Castain: "Re: [OMPI users] problem when mpi_paffinity_alone is set to 1"</a>
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

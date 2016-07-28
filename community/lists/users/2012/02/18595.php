<?
$subject_val = "Re: [OMPI users] IMB-OpenMPI on Centos 6";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb 29 07:04:32 2012" -->
<!-- isoreceived="20120229120432" -->
<!-- sent="Wed, 29 Feb 2012 06:53:36 -0500" -->
<!-- isosent="20120229115336" -->
<!-- name="Jeffrey Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] IMB-OpenMPI on Centos 6" -->
<!-- id="F54F6E93-2DC4-49BC-9CA6-DEDA9E1AEF6C_at_cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CACiOAODsJPp57zrNio9X50vaqqmmAnc2LEXo_h-B-tTJmFYD8w_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] IMB-OpenMPI on Centos 6<br>
<strong>From:</strong> Jeffrey Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-02-29 06:53:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18596.php">Jeffrey Squyres: "Re: [OMPI users] mpirun fails with no allocated resources"</a>
<li><strong>Previous message:</strong> <a href="18594.php">Jeffrey Squyres: "Re: [OMPI users] Drastic OpenMPI performance reduction when message exeeds 128 KB"</a>
<li><strong>In reply to:</strong> <a href="18558.php">Venkateswara Rao Dokku: "[OMPI users] IMB-OpenMPI on Centos 6"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I haven't followed OFED development for a long time, so I don't know if there is a buggy OFED in RHEL 5.4.
<br>
<p>If you're doing development with the internals Open MPI (or if it'll be necessary to dive into the internals for debugging a custom device/driver), you might want to move this discussion to the devel list, not the user's list.
<br>
<p>Open MPI does have a few open tickets about what happens when registered memory is exhausted.  We just recently committed some improvements to this (although the problem is not fully solved) on the v1.4 and v1.5 branches.  Open MPI v1.4.3 is pretty old, actually.  Could you try upgrading to Open MPI v1.4.5, or the latest v1.5.5rc?
<br>
<p><p>On Feb 27, 2012, at 2:10 AM, Venkateswara Rao Dokku wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; We are facing a problem while running the IMB [Intel MPI Benchmark] tests on Centos 6.0.
</span><br>
<span class="quotelev1">&gt; All the tests [PingPong, Exchange.. etc] stalls after some time with no errors.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Introduction:
</span><br>
<span class="quotelev1">&gt; Our's is a customized OFED stack[Our own Driver specific library and Kernel drivers for the h/w], we use IMB tests for testing the same.
</span><br>
<span class="quotelev1">&gt; We have already tested the same stack on RHEL5.4 and it was fine.  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Observation:
</span><br>
<span class="quotelev1">&gt; Tests sends few packets and it is observed that acknowledgement for all those packets are received. But no more Send Work Queue entries added for the driver to process.
</span><br>
<span class="quotelev1">&gt; Test does not return at all, just stalls there after sending few packets.
</span><br>
<span class="quotelev1">&gt; Observed only in Centos 6/RHEL 6.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Versions of packages installed :
</span><br>
<span class="quotelev1">&gt; OpenMPI     - 1.4.3
</span><br>
<span class="quotelev1">&gt; LibIbVerbs   - 1.1.4 
</span><br>
<span class="quotelev1">&gt; LibIbUmad   - 1.3.6
</span><br>
<span class="quotelev1">&gt; IMB             - 3.2.2
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Please confirm if the versions are compatible with RHEL6. If not, Please suggest the appropriate packages.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Please respond ASAP. Any help will be appreciated.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Thanks &amp; Regards,
</span><br>
<span class="quotelev1">&gt; D.Venkateswara Rao,
</span><br>
<span class="quotelev1">&gt; Software Engineer,One Convergence Devices Pvt Ltd.,
</span><br>
<span class="quotelev1">&gt; Jubille Hills,Hyderabad.
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
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18596.php">Jeffrey Squyres: "Re: [OMPI users] mpirun fails with no allocated resources"</a>
<li><strong>Previous message:</strong> <a href="18594.php">Jeffrey Squyres: "Re: [OMPI users] Drastic OpenMPI performance reduction when message exeeds 128 KB"</a>
<li><strong>In reply to:</strong> <a href="18558.php">Venkateswara Rao Dokku: "[OMPI users] IMB-OpenMPI on Centos 6"</a>
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

<?
$subject_val = "Re: [OMPI users] mpicc --version does not display anything.";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jan 30 09:51:27 2008" -->
<!-- isoreceived="20080130145127" -->
<!-- sent="Wed, 30 Jan 2008 09:50:49 -0500" -->
<!-- isosent="20080130145049" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpicc --version does not display anything." -->
<!-- id="ECE0A1BD-B28E-4879-807F-8499EA3E621F_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="33f36270801300645h167e22e2s64d92483405d1983_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] mpicc --version does not display anything.<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-01-30 09:50:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4921.php">Sang Chul Choi: "Re: [OMPI users] mpicc --version does not display anything."</a>
<li><strong>Previous message:</strong> <a href="4919.php">Sang Chul Choi: "Re: [OMPI users] mpicc --version does not display anything."</a>
<li><strong>In reply to:</strong> <a href="4919.php">Sang Chul Choi: "Re: [OMPI users] mpicc --version does not display anything."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4921.php">Sang Chul Choi: "Re: [OMPI users] mpicc --version does not display anything."</a>
<li><strong>Reply:</strong> <a href="4921.php">Sang Chul Choi: "Re: [OMPI users] mpicc --version does not display anything."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ok.  But note that &quot;mpicc --version&quot; does not show *Open MPI's*  
<br>
version; it will show the version of the underlying compiler.
<br>
<p>You probably want to run ompi_info to see information about your Open  
<br>
MPI installation (to include its version).
<br>
<p><p>On Jan 30, 2008, at 9:45 AM, Sang Chul Choi wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It was a broken package in the latest ubuntu (gutsy). Here is the  
</span><br>
<span class="quotelev1">&gt; solution.
</span><br>
<span class="quotelev1">&gt; <a href="https://bugs.launchpad.net/ubuntu/gutsy/+source/openmpi/+bug/152273">https://bugs.launchpad.net/ubuntu/gutsy/+source/openmpi/+bug/152273</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Sang Chul
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jan 30, 2008 9:31 AM, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; See:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/faq/?category=mpi-apps#wrapper-showme-with-no-file">http://www.open-mpi.org/faq/?category=mpi-apps#wrapper-showme-with-no-file</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jan 30, 2008, at 9:26 AM, Sang Chul Choi wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Hi,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I installed ubuntu package openmpi (debian package version 1.1-2.5,
</span><br>
<span class="quotelev2">&gt; &gt; ubuntu version is the latest one) and I tried to run mpicc to see
</span><br>
<span class="quotelev2">&gt; &gt; its version
</span><br>
<span class="quotelev2">&gt; &gt; $ mpicc --version
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; It does not show anything. Do you have any idea what is wrong? I
</span><br>
<span class="quotelev2">&gt; &gt; appreciate any help.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Thank you,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Sang Chul
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; Cisco Systems
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
<span class="quotelev1">&gt;
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
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4921.php">Sang Chul Choi: "Re: [OMPI users] mpicc --version does not display anything."</a>
<li><strong>Previous message:</strong> <a href="4919.php">Sang Chul Choi: "Re: [OMPI users] mpicc --version does not display anything."</a>
<li><strong>In reply to:</strong> <a href="4919.php">Sang Chul Choi: "Re: [OMPI users] mpicc --version does not display anything."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4921.php">Sang Chul Choi: "Re: [OMPI users] mpicc --version does not display anything."</a>
<li><strong>Reply:</strong> <a href="4921.php">Sang Chul Choi: "Re: [OMPI users] mpicc --version does not display anything."</a>
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

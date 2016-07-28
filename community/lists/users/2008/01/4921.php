<?
$subject_val = "Re: [OMPI users] mpicc --version does not display anything.";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jan 30 09:55:27 2008" -->
<!-- isoreceived="20080130145527" -->
<!-- sent="Wed, 30 Jan 2008 09:55:19 -0500" -->
<!-- isosent="20080130145519" -->
<!-- name="Sang Chul Choi" -->
<!-- email="goshng_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpicc --version does not display anything." -->
<!-- id="33f36270801300655l33facfaal5da3f4fde0d95e08_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="ECE0A1BD-B28E-4879-807F-8499EA3E621F_at_cisco.com" -->
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
<strong>From:</strong> Sang Chul Choi (<em>goshng_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-01-30 09:55:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4922.php">Thomas Ropars: "Re: [OMPI users] error with Vprotocol pessimist"</a>
<li><strong>Previous message:</strong> <a href="4920.php">Jeff Squyres: "Re: [OMPI users] mpicc --version does not display anything."</a>
<li><strong>In reply to:</strong> <a href="4920.php">Jeff Squyres: "Re: [OMPI users] mpicc --version does not display anything."</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Great! Thanks.
<br>
<p>Sang Chul
<br>
<p>On Jan 30, 2008 9:50 AM, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Ok.  But note that &quot;mpicc --version&quot; does not show *Open MPI's*
</span><br>
<span class="quotelev1">&gt; version; it will show the version of the underlying compiler.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; You probably want to run ompi_info to see information about your Open
</span><br>
<span class="quotelev1">&gt; MPI installation (to include its version).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jan 30, 2008, at 9:45 AM, Sang Chul Choi wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Hi,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; It was a broken package in the latest ubuntu (gutsy). Here is the
</span><br>
<span class="quotelev2">&gt; &gt; solution.
</span><br>
<span class="quotelev2">&gt; &gt; <a href="https://bugs.launchpad.net/ubuntu/gutsy/+source/openmpi/+bug/152273">https://bugs.launchpad.net/ubuntu/gutsy/+source/openmpi/+bug/152273</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Thanks,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Sang Chul
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Jan 30, 2008 9:31 AM, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt; See:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/faq/?category=mpi-apps#wrapper-showme-with-no-file">http://www.open-mpi.org/faq/?category=mpi-apps#wrapper-showme-with-no-file</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Jan 30, 2008, at 9:26 AM, Sang Chul Choi wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Hi,
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; I installed ubuntu package openmpi (debian package version 1.1-2.5,
</span><br>
<span class="quotelev3">&gt; &gt; &gt; ubuntu version is the latest one) and I tried to run mpicc to see
</span><br>
<span class="quotelev3">&gt; &gt; &gt; its version
</span><br>
<span class="quotelev3">&gt; &gt; &gt; $ mpicc --version
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; It does not show anything. Do you have any idea what is wrong? I
</span><br>
<span class="quotelev3">&gt; &gt; &gt; appreciate any help.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Thank you,
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Sang Chul
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt; &gt; users mailing list
</span><br>
<span class="quotelev3">&gt; &gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; --
</span><br>
<span class="quotelev2">&gt; &gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt; &gt; Cisco Systems
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
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
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
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-4921/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4922.php">Thomas Ropars: "Re: [OMPI users] error with Vprotocol pessimist"</a>
<li><strong>Previous message:</strong> <a href="4920.php">Jeff Squyres: "Re: [OMPI users] mpicc --version does not display anything."</a>
<li><strong>In reply to:</strong> <a href="4920.php">Jeff Squyres: "Re: [OMPI users] mpicc --version does not display anything."</a>
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

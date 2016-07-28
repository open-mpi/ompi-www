<?
$subject_val = "Re: [OMPI users] Missing file &quot;openmpi/ompi/mpi/f77/constants.h&quot;";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Jun 14 06:28:54 2015" -->
<!-- isoreceived="20150614102854" -->
<!-- sent="Sun, 14 Jun 2015 11:28:48 +0100" -->
<!-- isosent="20150614102848" -->
<!-- name="Filippo Spiga" -->
<!-- email="spiga.filippo_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Missing file &amp;quot;openmpi/ompi/mpi/f77/constants.h&amp;quot;" -->
<!-- id="5860213F-7DEA-4EE8-80D5-0D0D4D89D518_at_gmail.com" -->
<!-- charset="utf-8" -->
<!-- inreplyto="87y4jq2pm8.fsf_at_pc102091.liv.ac.uk" -->
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
<strong>Subject:</strong> Re: [OMPI users] Missing file &quot;openmpi/ompi/mpi/f77/constants.h&quot;<br>
<strong>From:</strong> Filippo Spiga (<em>spiga.filippo_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-06-14 06:28:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27130.php">Lane, William: "[OMPI users] OpenMPI stable 1.8.6 release date?"</a>
<li><strong>Previous message:</strong> <a href="27128.php">borno_borno_at_[hidden]: "Re: [OMPI users] OpenMPI (1.8.3) and environment variable export"</a>
<li><strong>In reply to:</strong> <a href="27097.php">Dave Love: "Re: [OMPI users] Missing file &quot;openmpi/ompi/mpi/f77/constants.h&quot;"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27131.php">Gilles Gouaillardet: "Re: [OMPI users] Missing file &quot;openmpi/ompi/mpi/f77/constants.h&quot;"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear Jeff, dear Dave,
<br>
<p>thank you for your replies.
<br>
<p>I spent a bit more time on the issue, Open MPi is built correctly. The fact is that IPM is looking for a header files that does not exist anymore in the Open MPI 1.8 branch (but it possibly exists in older 1.x versions). So I made a change (basically a check over OPAL_MINOR_VERSION) to IPM source code and push for review to the main IPM repository so nobody else will have troubles with it in the future.
<br>
<p>Thanks again for your support
<br>
<p>Regards,
<br>
Filippo
<br>
<p>On Jun 11, 2015, at 5:09 PM, Dave Love &lt;d.love_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Filippo Spiga &lt;spiga.filippo_at_[hidden]&gt; writes:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Dear OpenMPI experts,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I am rebuilding IPM (<a href="https://github.com/nerscadmin/ipm">https://github.com/nerscadmin/ipm</a>) based on OpenMPI 1.8.5. However, despite OMPI is compiled with the &quot;--with-devel-headers&quot; option, IPM build fails because the file &quot;openmpi/ompi/mpi/f77/constants.h&quot; is missing
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Which version of IPM?  2.0.3 plus irrelevant patches builds against
</span><br>
<span class="quotelev1">&gt; Fedora 22's openmpi-1.8.4:
</span><br>
<span class="quotelev1">&gt; &lt;<a href="http://copr.fedoraproject.org/coprs/loveshack/livhpc/build/97971/">http://copr.fedoraproject.org/coprs/loveshack/livhpc/build/97971/</a>&gt;.
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/06/27097.php">http://www.open-mpi.org/community/lists/users/2015/06/27097.php</a>
</span><br>
<p><pre>
--
Mr. Filippo SPIGA, M.Sc.
<a href="http://fspiga.github.io">http://fspiga.github.io</a> ~ skype: filippo.spiga
&#194;&#171;Nobody will drive us out of Cantor's paradise.&#194;&#187; ~ David Hilbert
*****
Disclaimer: &quot;Please note this message and any attachments are CONFIDENTIAL and may be privileged or otherwise protected from disclosure. The contents are not to be disclosed to anyone other than the addressee. Unauthorized recipients are requested to preserve this confidentiality and to advise the sender immediately of any error in transmission.&quot;
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27130.php">Lane, William: "[OMPI users] OpenMPI stable 1.8.6 release date?"</a>
<li><strong>Previous message:</strong> <a href="27128.php">borno_borno_at_[hidden]: "Re: [OMPI users] OpenMPI (1.8.3) and environment variable export"</a>
<li><strong>In reply to:</strong> <a href="27097.php">Dave Love: "Re: [OMPI users] Missing file &quot;openmpi/ompi/mpi/f77/constants.h&quot;"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27131.php">Gilles Gouaillardet: "Re: [OMPI users] Missing file &quot;openmpi/ompi/mpi/f77/constants.h&quot;"</a>
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

<?
$subject_val = "Re: [OMPI users] usNIC point-to-point messaging module";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Mar 24 12:12:12 2014" -->
<!-- isoreceived="20140324161212" -->
<!-- sent="Mon, 24 Mar 2014 16:12:05 +0000" -->
<!-- isosent="20140324161205" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] usNIC point-to-point messaging module" -->
<!-- id="7EB749B7-DD09-4123-959E-A26F6A6F969B_at_cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="0A17F830-A695-46B4-9712-D36886165B00_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] usNIC point-to-point messaging module<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-03-24 12:12:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23949.php">Hamid Saeed: "Re: [OMPI users] Fwd: problem for multiple clusters using mpirun"</a>
<li><strong>Previous message:</strong> <a href="23947.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Fwd: problem for multiple clusters using mpirun"</a>
<li><strong>In reply to:</strong> <a href="23939.php">Ralph Castain: "Re: [OMPI users] usNIC point-to-point messaging module"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2014/04/24026.php">Filippo Spiga: "Re: [OMPI users] usNIC point-to-point messaging module"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2014/04/24026.php">Filippo Spiga: "Re: [OMPI users] usNIC point-to-point messaging module"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
No, this is not a configure issue -- the usnic BTL uses the verbs API.
<br>
<p>The usnic BTL should be disqualifying itself at runtime, though, if you don't have usNIC devices.
<br>
<p>Are you running on Cisco UCS servers with Cisco VICs, perchance?
<br>
<p>If not, could you send the output of &quot;mpirun --mca btl_base_verbose 100 ...&quot;?
<br>
<p><p><p>On Mar 23, 2014, at 10:35 AM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hmmm...we'll have to check the configure logic as I don't think you should be getting that message. Regardless, it isn't something of concern - you can turn it &quot;off&quot; by adding
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -mca btl ^usnic
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; on your command line, or configuring OMPI --enable-mca-no-build=btl-usnic
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Mar 22, 2014, at 10:00 PM, Filippo Spiga &lt;spiga.filippo_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Dear all,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I recompiled Open MPI 1.7.5 a couple of time, I am sure I have been selected openib. However I have some doubts because this message
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; [[28098,1],8]: A high-performance Open MPI point-to-point messaging module
</span><br>
<span class="quotelev2">&gt;&gt; was unable to find any relevant network interfaces:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Module: usNIC
</span><br>
<span class="quotelev2">&gt;&gt; Host: tesla79
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Another transport will be used instead, although this may result in
</span><br>
<span class="quotelev2">&gt;&gt; lower performance.
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; keeps popping up. I am really worried there might be a degradation of performance because of this warning. Any clue about where it came from and how I can let it disappear?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Thanks in advance,
</span><br>
<span class="quotelev2">&gt;&gt; Filippo
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Mr. Filippo SPIGA, M.Sc.
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.linkedin.com/in/filippospiga">http://www.linkedin.com/in/filippospiga</a> ~ skype: filippo.spiga
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; &#171;Nobody will drive us out of Cantor's paradise.&#187; ~ David Hilbert
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; *****
</span><br>
<span class="quotelev2">&gt;&gt; Disclaimer: &quot;Please note this message and any attachments are CONFIDENTIAL and may be privileged or otherwise protected from disclosure. The contents are not to be disclosed to anyone other than the addressee. Unauthorized recipients are requested to preserve this confidentiality and to advise the sender immediately of any error in transmission.&quot;
</span><br>
<span class="quotelev2">&gt;&gt; 
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
<li><strong>Next message:</strong> <a href="23949.php">Hamid Saeed: "Re: [OMPI users] Fwd: problem for multiple clusters using mpirun"</a>
<li><strong>Previous message:</strong> <a href="23947.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Fwd: problem for multiple clusters using mpirun"</a>
<li><strong>In reply to:</strong> <a href="23939.php">Ralph Castain: "Re: [OMPI users] usNIC point-to-point messaging module"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2014/04/24026.php">Filippo Spiga: "Re: [OMPI users] usNIC point-to-point messaging module"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2014/04/24026.php">Filippo Spiga: "Re: [OMPI users] usNIC point-to-point messaging module"</a>
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

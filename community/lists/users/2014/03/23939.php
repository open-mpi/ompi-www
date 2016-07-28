<?
$subject_val = "Re: [OMPI users] usNIC point-to-point messaging module";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Mar 23 10:37:45 2014" -->
<!-- isoreceived="20140323143745" -->
<!-- sent="Sun, 23 Mar 2014 07:35:48 -0700" -->
<!-- isosent="20140323143548" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] usNIC point-to-point messaging module" -->
<!-- id="0A17F830-A695-46B4-9712-D36886165B00_at_open-mpi.org" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="7446B4F4-3A5A-4ED1-B247-67785BAF3AFA_at_gmail.com" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-03-23 10:35:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23940.php">Hamid Saeed: "Re: [OMPI users] Fwd: problem for multiple clusters using mpirun"</a>
<li><strong>Previous message:</strong> <a href="23938.php">Filippo Spiga: "[OMPI users] usNIC point-to-point messaging module"</a>
<li><strong>In reply to:</strong> <a href="23938.php">Filippo Spiga: "[OMPI users] usNIC point-to-point messaging module"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23948.php">Jeff Squyres (jsquyres): "Re: [OMPI users] usNIC point-to-point messaging module"</a>
<li><strong>Reply:</strong> <a href="23948.php">Jeff Squyres (jsquyres): "Re: [OMPI users] usNIC point-to-point messaging module"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hmmm...we'll have to check the configure logic as I don't think you should be getting that message. Regardless, it isn't something of concern - you can turn it &quot;off&quot; by adding
<br>
<p>-mca btl ^usnic
<br>
<p>on your command line, or configuring OMPI --enable-mca-no-build=btl-usnic
<br>
<p><p>On Mar 22, 2014, at 10:00 PM, Filippo Spiga &lt;spiga.filippo_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Dear all,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I recompiled Open MPI 1.7.5 a couple of time, I am sure I have been selected openib. However I have some doubts because this message
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; [[28098,1],8]: A high-performance Open MPI point-to-point messaging module
</span><br>
<span class="quotelev1">&gt; was unable to find any relevant network interfaces:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Module: usNIC
</span><br>
<span class="quotelev1">&gt;  Host: tesla79
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Another transport will be used instead, although this may result in
</span><br>
<span class="quotelev1">&gt; lower performance.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; keeps popping up. I am really worried there might be a degradation of performance because of this warning. Any clue about where it came from and how I can let it disappear?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks in advance,
</span><br>
<span class="quotelev1">&gt; Filippo
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Mr. Filippo SPIGA, M.Sc.
</span><br>
<span class="quotelev1">&gt; <a href="http://www.linkedin.com/in/filippospiga">http://www.linkedin.com/in/filippospiga</a> ~ skype: filippo.spiga
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; &#171;Nobody will drive us out of Cantor's paradise.&#187; ~ David Hilbert
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; *****
</span><br>
<span class="quotelev1">&gt; Disclaimer: &quot;Please note this message and any attachments are CONFIDENTIAL and may be privileged or otherwise protected from disclosure. The contents are not to be disclosed to anyone other than the addressee. Unauthorized recipients are requested to preserve this confidentiality and to advise the sender immediately of any error in transmission.&quot;
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
<li><strong>Next message:</strong> <a href="23940.php">Hamid Saeed: "Re: [OMPI users] Fwd: problem for multiple clusters using mpirun"</a>
<li><strong>Previous message:</strong> <a href="23938.php">Filippo Spiga: "[OMPI users] usNIC point-to-point messaging module"</a>
<li><strong>In reply to:</strong> <a href="23938.php">Filippo Spiga: "[OMPI users] usNIC point-to-point messaging module"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23948.php">Jeff Squyres (jsquyres): "Re: [OMPI users] usNIC point-to-point messaging module"</a>
<li><strong>Reply:</strong> <a href="23948.php">Jeff Squyres (jsquyres): "Re: [OMPI users] usNIC point-to-point messaging module"</a>
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

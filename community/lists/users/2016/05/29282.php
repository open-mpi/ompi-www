<?
$subject_val = "Re: [OMPI users] problem about mpirun on two nodes";
include("../../include/msg-header.inc");
?>
<!-- received="Mon May 23 10:13:13 2016" -->
<!-- isoreceived="20160523141313" -->
<!-- sent="Mon, 23 May 2016 14:13:11 +0000" -->
<!-- isosent="20160523141311" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] problem about mpirun on two nodes" -->
<!-- id="B2033C1D-8AA4-4823-B984-92756DC1E756_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="154d684ebde-7d99-74e9_at_webprd-a78.mail.aol.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] problem about mpirun on two nodes<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-05-23 10:13:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29283.php">Gilles Gouaillardet: "Re: [OMPI users] Open MPI does not work when MPICH or intel MPI are installed"</a>
<li><strong>Previous message:</strong> <a href="29281.php">Siegmar Gross: "[OMPI users] segmentation fault for slot-list and openmpi-1.10.3rc2"</a>
<li><strong>In reply to:</strong> <a href="29270.php">douraku_at_[hidden]: "[OMPI users] problem about mpirun on two nodes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29290.php">douraku_at_[hidden]: "Re: [OMPI users] problem about mpirun on two nodes"</a>
<li><strong>Reply:</strong> <a href="29290.php">douraku_at_[hidden]: "Re: [OMPI users] problem about mpirun on two nodes"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On May 21, 2016, at 11:31 PM, douraku_at_[hidden] wrote:
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I encountered a problem about mpirun and SSH when using OMPI 1.10.0 compiled with gcc, running on centos7.2.
</span><br>
<span class="quotelev1">&gt; When I execute mpirun on my 2 node cluster, I get the following errors pasted below.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [douraku_at_master home]$ mpirun -np 12 a.out
</span><br>
<span class="quotelev1">&gt; Permission denied (publickey,gssapi-keyex,gssapi-with-mic).
</span><br>
<p>This is the key right here: you got a permission denied error when you (assumedly) tried to execute on the remote server.
<br>
<p>Triple check your ssh settings to ensure that you can run on the remote server(s) without a password or interactive passphrase entry.
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29283.php">Gilles Gouaillardet: "Re: [OMPI users] Open MPI does not work when MPICH or intel MPI are installed"</a>
<li><strong>Previous message:</strong> <a href="29281.php">Siegmar Gross: "[OMPI users] segmentation fault for slot-list and openmpi-1.10.3rc2"</a>
<li><strong>In reply to:</strong> <a href="29270.php">douraku_at_[hidden]: "[OMPI users] problem about mpirun on two nodes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29290.php">douraku_at_[hidden]: "Re: [OMPI users] problem about mpirun on two nodes"</a>
<li><strong>Reply:</strong> <a href="29290.php">douraku_at_[hidden]: "Re: [OMPI users] problem about mpirun on two nodes"</a>
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

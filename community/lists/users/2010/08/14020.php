<?
$subject_val = "Re: [OMPI users] Abort";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Aug 13 13:50:02 2010" -->
<!-- isoreceived="20100813175002" -->
<!-- sent="Fri, 13 Aug 2010 13:47:31 -0400" -->
<!-- isosent="20100813174731" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Abort" -->
<!-- id="FD15284A-F951-470A-BF40-A441F222C3C8_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="1281719930.22705.8.camel_at_ronispc.chem.mcgill.ca" -->
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
<strong>Subject:</strong> Re: [OMPI users] Abort<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-08-13 13:47:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14021.php">David Ronis: "Re: [OMPI users] Abort"</a>
<li><strong>Previous message:</strong> <a href="14019.php">David Ronis: "Re: [OMPI users] Abort"</a>
<li><strong>In reply to:</strong> <a href="14019.php">David Ronis: "Re: [OMPI users] Abort"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14021.php">David Ronis: "Re: [OMPI users] Abort"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Aug 13, 2010, at 1:18 PM, David Ronis wrote:
<br>
<p><span class="quotelev1">&gt; Second coredumpsize is unlimited, and indeed I DO get core dumps when
</span><br>
<span class="quotelev1">&gt; I'm running a single-processor version.  
</span><br>
<p>What launcher are you using underneath Open MPI?
<br>
<p>You might want to make sure that the underlying launcher actually sets the coredumpsize to unlimited on each server where you're running.  E.g., if you're using rsh/ssh, check that your shell startup files set coredumpsize to unlimited for non-interactive logins.  Or, if you're using (for example) Torque, check to ensure that jobs launched under Torque don't have their coredumpsize automatically reset to 0, etc.
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14021.php">David Ronis: "Re: [OMPI users] Abort"</a>
<li><strong>Previous message:</strong> <a href="14019.php">David Ronis: "Re: [OMPI users] Abort"</a>
<li><strong>In reply to:</strong> <a href="14019.php">David Ronis: "Re: [OMPI users] Abort"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14021.php">David Ronis: "Re: [OMPI users] Abort"</a>
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

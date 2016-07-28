<?
$subject_val = "Re: [OMPI users] Bug when mixing sent types	in	version 1.6";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jun 12 10:15:38 2012" -->
<!-- isoreceived="20120612141538" -->
<!-- sent="Tue, 12 Jun 2012 10:15:33 -0400" -->
<!-- isosent="20120612141533" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Bug when mixing sent types	in	version 1.6" -->
<!-- id="D5B3C80D-0F0B-417D-A5CA-5541F418C1CF_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="22226_1339501508_4FD72BC4_22226_13024_1_49CF97100DDD4B4A9C4DC89905CA59A310187E5E26_at_THSONEA01CMS07P.one.grp" -->
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
<strong>Subject:</strong> Re: [OMPI users] Bug when mixing sent types	in	version 1.6<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-06-12 10:15:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19504.php">VimalMathew_at_[hidden]: "[OMPI users] Help with buidling MPI(Error: mpi.h not found)"</a>
<li><strong>Previous message:</strong> <a href="19502.php">BOUVIER Benjamin: "[OMPI users] RE : RE : RE : RE : RE : Bug when mixing sent types	in	version 1.6"</a>
<li><strong>In reply to:</strong> <a href="19502.php">BOUVIER Benjamin: "[OMPI users] RE : RE : RE : RE : RE : Bug when mixing sent types	in	version 1.6"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jun 12, 2012, at 7:45 AM, BOUVIER Benjamin wrote:
<br>
<p><span class="quotelev1">&gt; I'll ask my sysadmin to help me configuring the interfaces, so as it to work without defining mca parameter.
</span><br>
<p><p>Ok, good -- glad you got it tracked down.  A few tips to keep in mind:
<br>
<p>- <a href="http://www.open-mpi.org/faq/?category=tcp#tcp-selection">http://www.open-mpi.org/faq/?category=tcp#tcp-selection</a> (you've probably already seen this, but I bring it up just for reference)
<br>
<p>- <a href="http://www.open-mpi.org/faq/?category=tcp#tcp-routability-1.3">http://www.open-mpi.org/faq/?category=tcp#tcp-routability-1.3</a>
<br>
<p>- Make sure that all your eth devices are on different subnets.  Bad Things can/will happen when you have two eth devices that are on 192.168.1.x (for example).
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
<li><strong>Next message:</strong> <a href="19504.php">VimalMathew_at_[hidden]: "[OMPI users] Help with buidling MPI(Error: mpi.h not found)"</a>
<li><strong>Previous message:</strong> <a href="19502.php">BOUVIER Benjamin: "[OMPI users] RE : RE : RE : RE : RE : Bug when mixing sent types	in	version 1.6"</a>
<li><strong>In reply to:</strong> <a href="19502.php">BOUVIER Benjamin: "[OMPI users] RE : RE : RE : RE : RE : Bug when mixing sent types	in	version 1.6"</a>
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

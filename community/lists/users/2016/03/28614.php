<?
$subject_val = "Re: [OMPI users] General Questions";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar  1 22:00:00 2016" -->
<!-- isoreceived="20160302030000" -->
<!-- sent="Wed, 2 Mar 2016 11:59:59 +0900" -->
<!-- isosent="20160302025959" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles_at_[hidden]" -->
<!-- subject="Re: [OMPI users] General Questions" -->
<!-- id="56D6572F.20405_at_rist.or.jp" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="174E919F-A232-4712-843E-53E94330E54B_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] General Questions<br>
<strong>From:</strong> Gilles Gouaillardet (<em>gilles_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-03-01 21:59:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28615.php">dpchoudh .: "Re: [OMPI users] General Questions"</a>
<li><strong>Previous message:</strong> <a href="28613.php">Jeff Squyres (jsquyres): "Re: [OMPI users] General Questions"</a>
<li><strong>In reply to:</strong> <a href="28613.php">Jeff Squyres (jsquyres): "Re: [OMPI users] General Questions"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28615.php">dpchoudh .: "Re: [OMPI users] General Questions"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
my 0.02 US$
<br>
<p>i do not think the OMPI TCP BTL *explicitly* passses the SDP socket type 
<br>
when creating sockets.
<br>
and though i did not try that, i suspect using SDP via an LD_PRELOAD'ed 
<br>
library would be enought to use SDP sockets
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p>On 3/2/2016 11:54 AM, Jeff Squyres (jsquyres) wrote:
<br>
<span class="quotelev1">&gt; 2. SDP protocol and how it can be utilized, mapping TCP to RDMA
</span><br>
<span class="quotelev1">&gt; I don't think the Open MPI TCP BTL will pass the SDP socket type when creating sockets -- SDP is much lower performance than native verbs/RDMA.  You should use a &quot;native&quot; interface to your RDMA network instead (which one you use depends on which kind of network you have).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28615.php">dpchoudh .: "Re: [OMPI users] General Questions"</a>
<li><strong>Previous message:</strong> <a href="28613.php">Jeff Squyres (jsquyres): "Re: [OMPI users] General Questions"</a>
<li><strong>In reply to:</strong> <a href="28613.php">Jeff Squyres (jsquyres): "Re: [OMPI users] General Questions"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28615.php">dpchoudh .: "Re: [OMPI users] General Questions"</a>
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

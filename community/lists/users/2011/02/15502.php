<?
$subject_val = "Re: [OMPI users] Serial Rapid IO plug in ?";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb  3 07:54:48 2011" -->
<!-- isoreceived="20110203125448" -->
<!-- sent="Thu, 3 Feb 2011 07:54:44 -0500" -->
<!-- isosent="20110203125444" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Serial Rapid IO plug in ?" -->
<!-- id="7B24FECE-3FE8-4630-8D69-7FD75B54A008_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="AANLkTimeK2J8fPoQEM_iqR2CS1hmMuuyypxgBYwZ0Bvh_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Serial Rapid IO plug in ?<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-02-03 07:54:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15503.php">Shiqing Fan: "Re: [OMPI users] Windows release 1.5.1"</a>
<li><strong>Previous message:</strong> <a href="15501.php">Page, Andy (UK): "[OMPI users] Windows release 1.5.1"</a>
<li><strong>In reply to:</strong> <a href="15498.php">Mohamed Husain A.K: "[OMPI users] Serial Rapid IO plug in ?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15508.php">Mohamed Husain A.K: "Re: [OMPI users] Serial Rapid IO plug in ?"</a>
<li><strong>Reply:</strong> <a href="15508.php">Mohamed Husain A.K: "Re: [OMPI users] Serial Rapid IO plug in ?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Feb 3, 2011, at 12:39 AM, Mohamed Husain A.K wrote:
<br>
<p><span class="quotelev1">&gt; Is there any plug in support for byte transfer for SRIO
</span><br>
<p>Not to my knowledge.
<br>
<p><span class="quotelev1">&gt; if not how to go about with the developement of a plug-in
</span><br>
<span class="quotelev1">&gt; The SRIO interface has got a ethernet  like encapsulation.
</span><br>
<p>I know very little about SRIO (i.e., I skimmed <a href="http://en.wikipedia.org/wiki/RapidIO">http://en.wikipedia.org/wiki/RapidIO</a> :-) ).  I read that article to mean that SRIO is used within a single compute server.  If that's true, is it better to use SRIO directly (vs. shared memory-based communication)?  If I'm incorrect and you're using SRIO like a network fabric, then it might be useful to use SRIO for point-to-point MPI communications and see how it does.
<br>
<p>I have no idea what the API is for SRIO, but I'm guessing it would be suitable as a Byte Transfer Layer (BTL) plugin for Open MPI.  BTLs are the back-end implementations behind the &quot;ob1&quot; plugin for the Point-to-Point Messaging Layer (PML) in Open MPI -- i.e., the back-end behind the MPI semantics for MPI_SEND, MPI_RECV, etc.
<br>
<p>There's a few different options for developing new plugins in OMPI -- if I've hit anywhere close to the mark on the above paragraphs, ping us over on the devel list and we can get you started (i.e., developing new plugins is a better topic for the devel list than the general users' list; see <a href="http://www.open-mpi.org/community/lists/ompi.php">http://www.open-mpi.org/community/lists/ompi.php</a>).
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
<li><strong>Next message:</strong> <a href="15503.php">Shiqing Fan: "Re: [OMPI users] Windows release 1.5.1"</a>
<li><strong>Previous message:</strong> <a href="15501.php">Page, Andy (UK): "[OMPI users] Windows release 1.5.1"</a>
<li><strong>In reply to:</strong> <a href="15498.php">Mohamed Husain A.K: "[OMPI users] Serial Rapid IO plug in ?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15508.php">Mohamed Husain A.K: "Re: [OMPI users] Serial Rapid IO plug in ?"</a>
<li><strong>Reply:</strong> <a href="15508.php">Mohamed Husain A.K: "Re: [OMPI users] Serial Rapid IO plug in ?"</a>
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

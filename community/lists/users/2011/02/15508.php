<?
$subject_val = "Re: [OMPI users] Serial Rapid IO plug in ?";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb  3 11:57:14 2011" -->
<!-- isoreceived="20110203165714" -->
<!-- sent="Thu, 3 Feb 2011 22:27:10 +0530" -->
<!-- isosent="20110203165710" -->
<!-- name="Mohamed Husain A.K" -->
<!-- email="husainak_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Serial Rapid IO plug in ?" -->
<!-- id="AANLkTikp5=8J6Uv3DL85OKPKgzTAFTBMJAUdoMxYQLNS_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="7B24FECE-3FE8-4630-8D69-7FD75B54A008_at_cisco.com" -->
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
<strong>From:</strong> Mohamed Husain A.K (<em>husainak_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-02-03 11:57:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15509.php">Samuel K. Gutierrez: "Re: [OMPI users] Segmentation fault with SLURM and non-local nodes"</a>
<li><strong>Previous message:</strong> <a href="15507.php">Gus Correa: "Re: [OMPI users] How closely tied is a specific release of OpenMPI to the host operating system and other system software?"</a>
<li><strong>In reply to:</strong> <a href="15502.php">Jeff Squyres: "Re: [OMPI users] Serial Rapid IO plug in ?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
thanks jeff,
<br>
I shall ping you on devel list.
<br>
<p>Mohamed Husain
<br>
On Thu, Feb 3, 2011 at 6:24 PM, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; On Feb 3, 2011, at 12:39 AM, Mohamed Husain A.K wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Is there any plug in support for byte transfer for SRIO
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Not to my knowledge.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; if not how to go about with the developement of a plug-in
</span><br>
<span class="quotelev2">&gt; &gt; The SRIO interface has got a ethernet  like encapsulation.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I know very little about SRIO (i.e., I skimmed
</span><br>
<span class="quotelev1">&gt; <a href="http://en.wikipedia.org/wiki/RapidIO">http://en.wikipedia.org/wiki/RapidIO</a> :-) ).  I read that article to mean
</span><br>
<span class="quotelev1">&gt; that SRIO is used within a single compute server.  If that's true, is it
</span><br>
<span class="quotelev1">&gt; better to use SRIO directly (vs. shared memory-based communication)?  If I'm
</span><br>
<span class="quotelev1">&gt; incorrect and you're using SRIO like a network fabric, then it might be
</span><br>
<span class="quotelev1">&gt; useful to use SRIO for point-to-point MPI communications and see how it
</span><br>
<span class="quotelev1">&gt; does.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have no idea what the API is for SRIO, but I'm guessing it would be
</span><br>
<span class="quotelev1">&gt; suitable as a Byte Transfer Layer (BTL) plugin for Open MPI.  BTLs are the
</span><br>
<span class="quotelev1">&gt; back-end implementations behind the &quot;ob1&quot; plugin for the Point-to-Point
</span><br>
<span class="quotelev1">&gt; Messaging Layer (PML) in Open MPI -- i.e., the back-end behind the MPI
</span><br>
<span class="quotelev1">&gt; semantics for MPI_SEND, MPI_RECV, etc.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; There's a few different options for developing new plugins in OMPI -- if
</span><br>
<span class="quotelev1">&gt; I've hit anywhere close to the mark on the above paragraphs, ping us over on
</span><br>
<span class="quotelev1">&gt; the devel list and we can get you started (i.e., developing new plugins is a
</span><br>
<span class="quotelev1">&gt; better topic for the devel list than the general users' list; see
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/ompi.php">http://www.open-mpi.org/community/lists/ompi.php</a>).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
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
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-15508/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15509.php">Samuel K. Gutierrez: "Re: [OMPI users] Segmentation fault with SLURM and non-local nodes"</a>
<li><strong>Previous message:</strong> <a href="15507.php">Gus Correa: "Re: [OMPI users] How closely tied is a specific release of OpenMPI to the host operating system and other system software?"</a>
<li><strong>In reply to:</strong> <a href="15502.php">Jeff Squyres: "Re: [OMPI users] Serial Rapid IO plug in ?"</a>
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

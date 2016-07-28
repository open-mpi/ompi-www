<?
$subject_val = "Re: [OMPI users] MPI Literature Survey on Multicores";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr  6 13:22:24 2010" -->
<!-- isoreceived="20100406172224" -->
<!-- sent="Tue, 6 Apr 2010 13:22:20 -0400" -->
<!-- isosent="20100406172220" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI Literature Survey on Multicores" -->
<!-- id="D19625EF-CC82-41AD-A30A-6BFDCC8597F7_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="t2jf807a19d1004061012s57abd007jda8db7d4dd4619a0_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI Literature Survey on Multicores<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-04-06 13:22:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12559.php">Terry Frankcombe: "Re: [OMPI users] Hide Abort output"</a>
<li><strong>Previous message:</strong> <a href="12557.php">vaibhav dutt: "[OMPI users] MPI Literature Survey on Multicores"</a>
<li><strong>In reply to:</strong> <a href="12557.php">vaibhav dutt: "[OMPI users] MPI Literature Survey on Multicores"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Since I moved to industry a few years ago (i.e., out of academia), I haven't kept as close of tabs on research papers as I used to, but I would search for MPI papers dealing with shared memory optimizations.  That would likely be a good starting point.  You also might want to look at some (somewhat older) papers about dedicated communication co-processors -- not so much in the multi-core context, but rather having a separate whole processor just to handle the communication needs (back from the early 90's and earlier).  These ideas are having a bit of a resurgence in a &quot;manycore&quot; context -- e.g., in a world of 100s of cores available in a box, it might be acceptable to dedicate a few of them to off-node communication.  Hopefully, people will remember that these ideas are not new.  ;-)
<br>
<p><p>On Apr 6, 2010, at 1:12 PM, vaibhav dutt wrote:
<br>
<p><span class="quotelev1">&gt; Hi all,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am doing a literature survey on MPI optimizations on Multi Cores and was searching for
</span><br>
<span class="quotelev1">&gt; some good papers.I have got some papers on MPI Intra Node Data Transfer. Can anybody please
</span><br>
<span class="quotelev1">&gt; suggest me how to go about it I mean how can I organize the Survey and also some good source of
</span><br>
<span class="quotelev1">&gt; papers on the topics.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thank You,
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
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12559.php">Terry Frankcombe: "Re: [OMPI users] Hide Abort output"</a>
<li><strong>Previous message:</strong> <a href="12557.php">vaibhav dutt: "[OMPI users] MPI Literature Survey on Multicores"</a>
<li><strong>In reply to:</strong> <a href="12557.php">vaibhav dutt: "[OMPI users] MPI Literature Survey on Multicores"</a>
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

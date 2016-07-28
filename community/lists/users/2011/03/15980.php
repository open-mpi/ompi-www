<?
$subject_val = "Re: [OMPI users] Is there an mca parameter equivalent to	-bind-to-core?";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Mar 23 21:09:14 2011" -->
<!-- isoreceived="20110324010914" -->
<!-- sent="Wed, 23 Mar 2011 21:09:08 -0400" -->
<!-- isosent="20110324010908" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Is there an mca parameter equivalent to	-bind-to-core?" -->
<!-- id="E36B46E7-FA18-40FD-99E1-0814168467BA_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4D8A5616.8040008_at_ldeo.columbia.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] Is there an mca parameter equivalent to	-bind-to-core?<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-03-23 21:09:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15981.php">Gus Correa: "Re: [OMPI users] keyval parser: error 1 reading	file	mpicc-wrapper-data.txt"</a>
<li><strong>Previous message:</strong> <a href="15979.php">Gus Correa: "Re: [OMPI users] keyval parser: error 1 reading file	mpicc-wrapper-data.txt"</a>
<li><strong>In reply to:</strong> <a href="15974.php">Gus Correa: "Re: [OMPI users] Is there an mca parameter equivalent to	-bind-to-core?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15988.php">Gus Correa: "Re: [OMPI users] Is there an mca parameter equivalent	to	-bind-to-core?"</a>
<li><strong>Reply:</strong> <a href="15988.php">Gus Correa: "Re: [OMPI users] Is there an mca parameter equivalent	to	-bind-to-core?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mar 23, 2011, at 4:20 PM, Gus Correa wrote:
<br>
<p><span class="quotelev1">&gt; However, now when I do &quot;ompi_info -a&quot;,
</span><br>
<span class="quotelev1">&gt; the output shows the non-default value 1 twice in a row,
</span><br>
<span class="quotelev1">&gt; then later it shows the default value 0 again!
</span><br>
<p>It's because we wanted to confuse you!
<br>
<p>;-)
<br>
<p>Sorry about that; this is a legitimate bug.  I've fixed it on the trunk and submitted CMRs for both v1.4 and v1.5.  I believe that the correct value is actually being used, despite what your ompi_info is saying.  
<br>
<p>(I can explain further, if you care)
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
<li><strong>Next message:</strong> <a href="15981.php">Gus Correa: "Re: [OMPI users] keyval parser: error 1 reading	file	mpicc-wrapper-data.txt"</a>
<li><strong>Previous message:</strong> <a href="15979.php">Gus Correa: "Re: [OMPI users] keyval parser: error 1 reading file	mpicc-wrapper-data.txt"</a>
<li><strong>In reply to:</strong> <a href="15974.php">Gus Correa: "Re: [OMPI users] Is there an mca parameter equivalent to	-bind-to-core?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15988.php">Gus Correa: "Re: [OMPI users] Is there an mca parameter equivalent	to	-bind-to-core?"</a>
<li><strong>Reply:</strong> <a href="15988.php">Gus Correa: "Re: [OMPI users] Is there an mca parameter equivalent	to	-bind-to-core?"</a>
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

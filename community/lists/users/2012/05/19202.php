<?
$subject_val = "Re: [OMPI users] MPI over tcp";
include("../../include/msg-header.inc");
?>
<!-- received="Fri May  4 18:43:28 2012" -->
<!-- isoreceived="20120504224328" -->
<!-- sent="Fri, 4 May 2012 15:43:20 -0700" -->
<!-- isosent="20120504224320" -->
<!-- name="Don Armstrong" -->
<!-- email="don_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI over tcp" -->
<!-- id="20120504224320.GS3458_at_rzlab.ucr.edu" -->
<!-- charset="utf-8" -->
<!-- inreplyto="20120504193501.GQ3458_at_rzlab.ucr.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI over tcp<br>
<strong>From:</strong> Don Armstrong (<em>don_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-05-04 18:43:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19203.php">Eugene Loh: "Re: [OMPI users] Regarding the execution time calculation"</a>
<li><strong>Previous message:</strong> <a href="19201.php">Jingcha Joba: "Re: [OMPI users] Regarding the execution time calculation"</a>
<li><strong>In reply to:</strong> <a href="19200.php">Don Armstrong: "Re: [OMPI users] MPI over tcp"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19204.php">Jeff Squyres (jsquyres): "Re: [OMPI users] MPI over tcp"</a>
<li><strong>Reply:</strong> <a href="19204.php">Jeff Squyres (jsquyres): "Re: [OMPI users] MPI over tcp"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Fri, 04 May 2012, Don Armstrong wrote:
<br>
<span class="quotelev1">&gt; On Fri, 04 May 2012, TERRY DONTJE wrote:
</span><br>
<span class="quotelev2">&gt; &gt; Sorry if this is a stupid question but what is eth0:1 (it's under
</span><br>
<span class="quotelev2">&gt; &gt; eth0).  Are the 172.16.30.X addresses pingable to each other?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Yes. They're all on the same physical subnet.
</span><br>
<p>Even though this might have seemed like a stupid question, it put me
<br>
onto the right track. Apparently, mca_btl_tcp_endpoint_accept (or
<br>
similar) is unable to handle multiple IP addresses on the same
<br>
interface, and rejects the connection.
<br>
<p>Changing the network topology to only have one address on each
<br>
physical network adapter resolves the problem, and connections are
<br>
made properly.
<br>
<p><p>Don Armstrong
<br>
<p><pre>
-- 
PowerPoint is symptomatic of a certain type of bureaucratic
environment: one typified by interminable presentations with lots of
fussy little bullet-points and flashy dissolves and soundtracks masked
into the background, to try to convince the audience that the goon
behind the computer has something significant to say.
 -- Charles Stross _The Jennifer Morgue_ p33
<a href="http://www.donarmstrong.com">http://www.donarmstrong.com</a>              <a href="http://rzlab.ucr.edu">http://rzlab.ucr.edu</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19203.php">Eugene Loh: "Re: [OMPI users] Regarding the execution time calculation"</a>
<li><strong>Previous message:</strong> <a href="19201.php">Jingcha Joba: "Re: [OMPI users] Regarding the execution time calculation"</a>
<li><strong>In reply to:</strong> <a href="19200.php">Don Armstrong: "Re: [OMPI users] MPI over tcp"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19204.php">Jeff Squyres (jsquyres): "Re: [OMPI users] MPI over tcp"</a>
<li><strong>Reply:</strong> <a href="19204.php">Jeff Squyres (jsquyres): "Re: [OMPI users] MPI over tcp"</a>
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

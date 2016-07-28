<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Jun 13 11:33:36 2007" -->
<!-- isoreceived="20070613153336" -->
<!-- sent="Wed, 13 Jun 2007 11:32:27 -0400 (Eastern Daylight Time)" -->
<!-- isosent="20070613153227" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r15041" -->
<!-- id="Pine.WNT.4.64.0706131126540.2008_at_voyager" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20070613152500.GA6519_at_minantech.com" -->
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
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-06-13 11:32:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1677.php">Galen Shipman: "Re: [OMPI devel] Problem with openib on demand connection bring up."</a>
<li><strong>Previous message:</strong> <a href="1675.php">Gleb Natapov: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r15041"</a>
<li><strong>In reply to:</strong> <a href="1675.php">Gleb Natapov: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r15041"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1679.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r15041"</a>
<li><strong>Reply:</strong> <a href="1679.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r15041"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Wed, 13 Jun 2007, Gleb Natapov wrote:
<br>
<p><span class="quotelev2">&gt;&gt; I'm not particularly fond of creating variable MCA parameters after
</span><br>
<span class="quotelev2">&gt;&gt; the btl open call because they won't show up in ompi_info.  Should we
</span><br>
<span class="quotelev2">&gt;&gt; do something else if you want to override bandwidths, perhaps
</span><br>
<span class="quotelev2">&gt;&gt; something similar to the HCA params file?  If you recall, we made the
</span><br>
<span class="quotelev2">&gt;&gt; HCA params stuff a file because of exactly this issue: we didn't want
</span><br>
<span class="quotelev2">&gt;&gt; variable MCA parameters and we didn't want to have to make the user
</span><br>
<span class="quotelev2">&gt;&gt; type out a potentially long set of complex MCA parameters that were
</span><br>
<span class="quotelev2">&gt;&gt; dependent upon the exact environment that the user was running in.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I modeled this after TCP BTL so blame George :) I actually like this
</span><br>
<span class="quotelev1">&gt; notation, but obviously it has its shortcomings. I am open to other ideas
</span><br>
<span class="quotelev1">&gt; if they can be implemented in a short time frame.
</span><br>
<p>Right ... blame me :) The problem is that we have to know the number of 
<br>
interfaces in order to be able to generate the MCA parameters, and the 
<br>
number of interfaces will only be know inside the init call (and I really 
<br>
doon't think it's a good idea to move this part of the code in the open 
<br>
function).
<br>
<p>I don't mind having some MCA parameters that are never showed by ompi_info 
<br>
(we already have the hidden ones). Anyway, for TCP by default there is the 
<br>
btl_tcp_latency and btl_tcp_bandwidth which will be used as a default 
<br>
value for all NICs. For the others, a quick google search on our mailing 
<br>
list will return all information about how to set the latency and 
<br>
bandwidth by NIC. MX have a similar mechanism ...
<br>
<p>&nbsp;&nbsp;&nbsp;Thanks,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;george.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1677.php">Galen Shipman: "Re: [OMPI devel] Problem with openib on demand connection bring up."</a>
<li><strong>Previous message:</strong> <a href="1675.php">Gleb Natapov: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r15041"</a>
<li><strong>In reply to:</strong> <a href="1675.php">Gleb Natapov: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r15041"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1679.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r15041"</a>
<li><strong>Reply:</strong> <a href="1679.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r15041"</a>
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

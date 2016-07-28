<?
$subject_val = "Re: [OMPI users] writev error: Bad address";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb  6 15:07:51 2014" -->
<!-- isoreceived="20140206200751" -->
<!-- sent="Thu, 6 Feb 2014 20:07:49 +0000" -->
<!-- isosent="20140206200749" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] writev error: Bad address" -->
<!-- id="E9351387-4EF6-48E6-8B79-A80A6F5EC24C_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="52F3E358.5090604_at_biostat.ucsf.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] writev error: Bad address<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-02-06 15:07:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23566.php">Talla: "[OMPI users] OpenMpi installation"</a>
<li><strong>Previous message:</strong> <a href="23564.php">Ralph Castain: "Re: [OMPI users] writev error: Bad address"</a>
<li><strong>In reply to:</strong> <a href="23563.php">Ross Boylan: "Re: [OMPI users] writev error: Bad address"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Feb 6, 2014, at 2:32 PM, Ross Boylan &lt;ross_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Yes.  And it seems the recommended one for this purpose is 1.7, not 1.6.
</span><br>
<p>1.7.4 is our newest feature series release.  1.6.5 is the most recent super-stable release.
<br>
<p>We should be rolling 1.7.x to 1.8 within a few months.
<br>
<p><span class="quotelev1">&gt; What should happen if I try to transmit something big?  At least in my case it was probably under 4G, which might be some kind of boundary (though it's a 64 bit system).
</span><br>
<p>OMPI should be able to transmit whatever size you send.  Note that the MPI API specifies a &quot;count&quot; parameter as an &quot;int&quot;, so it can typically go up to 2B before rolling over to a negative number.  For example, if you send 2B MPI_INTs:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;MPI_Send(buf, 2^30, MPI_INT, ...);
<br>
<p>that will end up sending 2B*sizeof(int) = 8B bytes across the network.
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
<li><strong>Next message:</strong> <a href="23566.php">Talla: "[OMPI users] OpenMpi installation"</a>
<li><strong>Previous message:</strong> <a href="23564.php">Ralph Castain: "Re: [OMPI users] writev error: Bad address"</a>
<li><strong>In reply to:</strong> <a href="23563.php">Ross Boylan: "Re: [OMPI users] writev error: Bad address"</a>
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

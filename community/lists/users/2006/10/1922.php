<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Oct  3 14:01:49 2006" -->
<!-- isoreceived="20061003180149" -->
<!-- sent="Tue, 03 Oct 2006 12:01:37 -0600" -->
<!-- isosent="20061003180137" -->
<!-- name="Troy Telford" -->
<!-- email="ttelford.groups_at_[hidden]" -->
<!-- subject="Re: [OMPI users] IB HCA support" -->
<!-- id="op.tguxozr0zidtg1_at_rygel.lnxi.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="1159897694.5362.275.camel_at_dorado.tuc.noao.edu" -->
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
<strong>From:</strong> Troy Telford (<em>ttelford.groups_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-10-03 14:01:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1923.php">Scott Weitzenkamp \(sweitzen\): "Re: [OMPI users] IB HCA support"</a>
<li><strong>Previous message:</strong> <a href="1921.php">Jeff Squyres: "Re: [OMPI users] IB HCA support"</a>
<li><strong>In reply to:</strong> <a href="1920.php">Janet Tvedt: "[OMPI users] IB HCA support"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1946.php">Greg Lindahl: "Re: [OMPI users] IB HCA support"</a>
<li><strong>Reply:</strong> <a href="1946.php">Greg Lindahl: "Re: [OMPI users] IB HCA support"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Tue, 03 Oct 2006 11:48:14 -0600, Janet Tvedt &lt;tvedt_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; I was curious if there is a list showing which InfiniBand HCAs are known
</span><br>
<span class="quotelev1">&gt; to work with Open MPI.
</span><br>
<p>I can't claim to know which ones are *known* to work, but I've never seen  
<br>
an IB HCA that didn't work with Open MPI.
<br>
<p>That being said, here's the HCA's I've worked with:
<br>
* Mellanox MT23108 based HCA (PCI-X, SDR)
<br>
* Mellanox MTLP25208 based HCA (PCI-Express; not sure if it does DDR, as  
<br>
the IB switch I have is SDR...)
<br>
* This is with the following software:
<br>
&nbsp;&nbsp;&nbsp;* OpenFabrics IB software
<br>
&nbsp;&nbsp;&nbsp;* Mellanox &quot;IB Gold&quot; IB software
<br>
&nbsp;&nbsp;&nbsp;* SilverStorm InfiniServ IB software.
<br>
<p>I haven't tried any non-Mellanox IB silicon with Open MPI (eg. qLogic's  
<br>
InfiniPath).
<br>
<p>That about sums up what I *know* works...
<br>
<pre>
-- 
Troy
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1923.php">Scott Weitzenkamp \(sweitzen\): "Re: [OMPI users] IB HCA support"</a>
<li><strong>Previous message:</strong> <a href="1921.php">Jeff Squyres: "Re: [OMPI users] IB HCA support"</a>
<li><strong>In reply to:</strong> <a href="1920.php">Janet Tvedt: "[OMPI users] IB HCA support"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1946.php">Greg Lindahl: "Re: [OMPI users] IB HCA support"</a>
<li><strong>Reply:</strong> <a href="1946.php">Greg Lindahl: "Re: [OMPI users] IB HCA support"</a>
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

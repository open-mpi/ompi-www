<?
$subject_val = "Re: [OMPI devel] trunk hang when nodes have similar but private	network";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Aug 13 15:33:51 2014" -->
<!-- isoreceived="20140813193351" -->
<!-- sent="Wed, 13 Aug 2014 19:33:49 +0000" -->
<!-- isosent="20140813193349" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] trunk hang when nodes have similar but private	network" -->
<!-- id="E615A533-3522-4C84-86DC-A6DA4F2FAF0C_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAMJJpkUcUx=8uYNpKQH8RdpVB+A5dC0zLc6GfrQ7u06i3S1yqQ_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] trunk hang when nodes have similar but private	network<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-08-13 15:33:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15639.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] trunk hang when nodes have similar but private	network"</a>
<li><strong>Previous message:</strong> <a href="15637.php">Lenny Verkhovsky: "Re: [OMPI devel] [OMPI users] OpenMPI fails with np &gt; 65"</a>
<li><strong>In reply to:</strong> <a href="15635.php">George Bosilca: "Re: [OMPI devel] trunk hang when nodes have similar but private network"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15641.php">George Bosilca: "Re: [OMPI devel] trunk hang when nodes have similar but private network"</a>
<li><strong>Reply:</strong> <a href="15641.php">George Bosilca: "Re: [OMPI devel] trunk hang when nodes have similar but private network"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Aug 13, 2014, at 12:52 PM, George Bosilca &lt;bosilca_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; There are many differences between the trunk and 1.8 regarding the TCP BTL. The major I remember about is that the TCP in the trunk is reporting errors to the upper level via the callbacks attached to fragments, while the 1.8 TCP BTL doesn't.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; So, I guess that once a connection to a particular endpoint fails, the trunk is getting the errors reported via the cb and then takes some drastic measure. In the 1.8 we might fallback and try another IP address before giving up.
</span><br>
<p>Does that has any effect on performance?
<br>
<p>I.e., should we bring this change to v1.8?
<br>
<p>Or, put simply: which way is Right?
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
<li><strong>Next message:</strong> <a href="15639.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] trunk hang when nodes have similar but private	network"</a>
<li><strong>Previous message:</strong> <a href="15637.php">Lenny Verkhovsky: "Re: [OMPI devel] [OMPI users] OpenMPI fails with np &gt; 65"</a>
<li><strong>In reply to:</strong> <a href="15635.php">George Bosilca: "Re: [OMPI devel] trunk hang when nodes have similar but private network"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15641.php">George Bosilca: "Re: [OMPI devel] trunk hang when nodes have similar but private network"</a>
<li><strong>Reply:</strong> <a href="15641.php">George Bosilca: "Re: [OMPI devel] trunk hang when nodes have similar but private network"</a>
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

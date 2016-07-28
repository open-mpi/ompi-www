<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Feb  8 20:17:45 2006" -->
<!-- isoreceived="20060209011745" -->
<!-- sent="Wed, 8 Feb 2006 18:17:41 -0700 (MST)" -->
<!-- isosent="20060209011741" -->
<!-- name="Timothy S. Woodall" -->
<!-- email="twoodall_at_[hidden]" -->
<!-- subject="Re: [O-MPI users] direct openib btl and latency" -->
<!-- id="24583.128.165.0.81.1139447861.squirrel_at_webmail.lanl.gov" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="5A3D550A-3A8D-427D-B500-1C465A3520C5_at_cs.utk.edu" -->
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
<strong>From:</strong> Timothy S. Woodall (<em>twoodall_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-02-08 20:17:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0611.php">Timothy S. Woodall: "Re: [O-MPI users] direct openib btl and latency"</a>
<li><strong>Previous message:</strong> <a href="0609.php">George Bosilca: "Re: [O-MPI users] direct openib btl and latency"</a>
<li><strong>In reply to:</strong> <a href="0609.php">George Bosilca: "Re: [O-MPI users] direct openib btl and latency"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0612.php">Jean-Christophe Hugly: "Re: [O-MPI users] direct openib btl and latency"</a>
<li><strong>Reply:</strong> <a href="0612.php">Jean-Christophe Hugly: "Re: [O-MPI users] direct openib btl and latency"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Feb 8, 2006, at 7:06 PM, Jean-Christophe Hugly wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; But should I understand from all this that the &quot;direct&quot; mode will
</span><br>
<span class="quotelev2">&gt;&gt; never
</span><br>
<span class="quotelev2">&gt;&gt; actually work ? It seems that if you need at least two transports,
</span><br>
<span class="quotelev2">&gt;&gt; then
</span><br>
<span class="quotelev2">&gt;&gt; none of them can be the hardwired unique one, right ? Unless there's a
</span><br>
<span class="quotelev2">&gt;&gt; built-in switch between a built-in self and the built-in other
</span><br>
<span class="quotelev2">&gt;&gt; transport.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Some of the transport layers are able to handle the messages to
</span><br>
<span class="quotelev1">&gt; &quot;self&quot;. However, as we decide to let &quot;self&quot; do this type of work no
</span><br>
<span class="quotelev1">&gt; effort was spending on making sure they do it. Our first concern was/
</span><br>
<span class="quotelev1">&gt; is/will be about performance, and &quot;self&quot; really do a great job. So
</span><br>
<span class="quotelev1">&gt; the quick answer to your question is no, there is no way to limit the
</span><br>
<span class="quotelev1">&gt; number of transports to one.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Long ago, before the latest version of the BTL (byte transport
</span><br>
<span class="quotelev1">&gt; layer), we had something called the PTL. They were used with another
</span><br>
<span class="quotelev1">&gt; set of PML (protocol management layer). I wrote a specific PML
</span><br>
<span class="quotelev1">&gt; (called uniq) that was able to handle only one device (plus &quot;self&quot;).
</span><br>
<span class="quotelev1">&gt; The latency went down by a little bit (around 0.3 micro-seconds).
</span><br>
<span class="quotelev1">&gt; Anyway, the old openib PTL never reached a stable state so this will
</span><br>
<span class="quotelev1">&gt; not help you :(. As we plan to drop all support for the old
</span><br>
<span class="quotelev1">&gt; generation of PML/PTL, I don't think is a wise idea to spend time on
</span><br>
<span class="quotelev1">&gt; the openib PTL to make it working with uniq ...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    Thanks,
</span><br>
<span class="quotelev1">&gt;      george.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>With the change to ob1/BTLs, there was also a refactoring of data
<br>
structures that reduced the overall latency through the stack. As
<br>
Galen indicated, if you do a direct comparison w/ send/recv semantics,
<br>
I think you will find the overall latency through the stack is lower
<br>
than other implementations (on the order of 0.5 us).
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0611.php">Timothy S. Woodall: "Re: [O-MPI users] direct openib btl and latency"</a>
<li><strong>Previous message:</strong> <a href="0609.php">George Bosilca: "Re: [O-MPI users] direct openib btl and latency"</a>
<li><strong>In reply to:</strong> <a href="0609.php">George Bosilca: "Re: [O-MPI users] direct openib btl and latency"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0612.php">Jean-Christophe Hugly: "Re: [O-MPI users] direct openib btl and latency"</a>
<li><strong>Reply:</strong> <a href="0612.php">Jean-Christophe Hugly: "Re: [O-MPI users] direct openib btl and latency"</a>
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

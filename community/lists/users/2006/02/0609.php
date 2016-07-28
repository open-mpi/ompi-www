<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Feb  8 19:39:49 2006" -->
<!-- isoreceived="20060209003949" -->
<!-- sent="Wed, 8 Feb 2006 19:41:00 -0500" -->
<!-- isosent="20060209004100" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [O-MPI users] direct openib btl and latency" -->
<!-- id="5A3D550A-3A8D-427D-B500-1C465A3520C5_at_cs.utk.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="1139443588.1494.178.camel_at_jhugly.pantasys.com" -->
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
<strong>Date:</strong> 2006-02-08 19:41:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0610.php">Timothy S. Woodall: "Re: [O-MPI users] direct openib btl and latency"</a>
<li><strong>Previous message:</strong> <a href="0608.php">Jean-Christophe Hugly: "Re: [O-MPI users] direct openib btl and latency"</a>
<li><strong>In reply to:</strong> <a href="0608.php">Jean-Christophe Hugly: "Re: [O-MPI users] direct openib btl and latency"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0610.php">Timothy S. Woodall: "Re: [O-MPI users] direct openib btl and latency"</a>
<li><strong>Reply:</strong> <a href="0610.php">Timothy S. Woodall: "Re: [O-MPI users] direct openib btl and latency"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Feb 8, 2006, at 7:06 PM, Jean-Christophe Hugly wrote:
<br>
<p><span class="quotelev1">&gt; But should I understand from all this that the &quot;direct&quot; mode will  
</span><br>
<span class="quotelev1">&gt; never
</span><br>
<span class="quotelev1">&gt; actually work ? It seems that if you need at least two transports,  
</span><br>
<span class="quotelev1">&gt; then
</span><br>
<span class="quotelev1">&gt; none of them can be the hardwired unique one, right ? Unless there's a
</span><br>
<span class="quotelev1">&gt; built-in switch between a built-in self and the built-in other
</span><br>
<span class="quotelev1">&gt; transport.
</span><br>
<p>Some of the transport layers are able to handle the messages to  
<br>
&quot;self&quot;. However, as we decide to let &quot;self&quot; do this type of work no  
<br>
effort was spending on making sure they do it. Our first concern was/ 
<br>
is/will be about performance, and &quot;self&quot; really do a great job. So  
<br>
the quick answer to your question is no, there is no way to limit the  
<br>
number of transports to one.
<br>
<p>Long ago, before the latest version of the BTL (byte transport  
<br>
layer), we had something called the PTL. They were used with another  
<br>
set of PML (protocol management layer). I wrote a specific PML  
<br>
(called uniq) that was able to handle only one device (plus &quot;self&quot;).  
<br>
The latency went down by a little bit (around 0.3 micro-seconds).  
<br>
Anyway, the old openib PTL never reached a stable state so this will  
<br>
not help you :(. As we plan to drop all support for the old  
<br>
generation of PML/PTL, I don't think is a wise idea to spend time on  
<br>
the openib PTL to make it working with uniq ...
<br>
<p>&nbsp;&nbsp;&nbsp;Thanks,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;george.
<br>
<p><p>&quot;Half of what I say is meaningless; but I say it so that the other  
<br>
half may reach you&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Kahlil Gibran
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0610.php">Timothy S. Woodall: "Re: [O-MPI users] direct openib btl and latency"</a>
<li><strong>Previous message:</strong> <a href="0608.php">Jean-Christophe Hugly: "Re: [O-MPI users] direct openib btl and latency"</a>
<li><strong>In reply to:</strong> <a href="0608.php">Jean-Christophe Hugly: "Re: [O-MPI users] direct openib btl and latency"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0610.php">Timothy S. Woodall: "Re: [O-MPI users] direct openib btl and latency"</a>
<li><strong>Reply:</strong> <a href="0610.php">Timothy S. Woodall: "Re: [O-MPI users] direct openib btl and latency"</a>
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

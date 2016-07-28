<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Feb  9 22:11:11 2006" -->
<!-- isoreceived="20060210031111" -->
<!-- sent="Thu, 09 Feb 2006 19:10:01 -0800" -->
<!-- isosent="20060210031001" -->
<!-- name="Jean-Christophe Hugly" -->
<!-- email="jice_at_[hidden]" -->
<!-- subject="Re: [O-MPI users] direct openib btl and latency" -->
<!-- id="1139541001.1494.284.camel_at_jhugly.pantasys.com" -->
<!-- inreplyto="20060209233711.GK25930_at_ratbert.sandia.gov" -->
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
<strong>From:</strong> Jean-Christophe Hugly (<em>jice_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-02-09 22:10:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0624.php">Brian Barrett: "Re: [O-MPI users] Firewall ports and Mac OS X 10.4.4"</a>
<li><strong>Previous message:</strong> <a href="0622.php">James Conway: "[O-MPI users] Firewall ports and Mac OS X 10.4.4"</a>
<li><strong>In reply to:</strong> <a href="0621.php">Brightwell, Ronald: "Re: [O-MPI users] direct openib btl and latency"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0625.php">Sayantan Sur: "Re: [O-MPI users] direct openib btl and latency"</a>
<li><strong>Reply:</strong> <a href="0625.php">Sayantan Sur: "Re: [O-MPI users] direct openib btl and latency"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Thu, 2006-02-09 at 16:37 -0700, Brightwell, Ronald wrote:
<br>
<p><span class="quotelev1">&gt; I apologize if it seems like I'm picking on you.
</span><br>
No offense taken.
<br>
<p><span class="quotelev1">&gt;   I'm hypersensitive to
</span><br>
<span class="quotelev1">&gt; people trying to make judgements based on micro-benchmark performance.
</span><br>
<span class="quotelev1">&gt; I've been trying to make an argument that two-node ping-pong latency
</span><br>
<span class="quotelev1">&gt; comparisons really only have meaning in the context of a whole system.
</span><br>
<p>It's very clear to me that micro-benchmarks do not tell you very much
<br>
about real application behaviour; that's not the question. They are
<br>
nevertheless relevant to me because, right or wrong, people who buy
<br>
stuff look at them. And I work for a commercial outfit.
<br>
<p>I may sound silly saying that, but they might be right to look at it,
<br>
they just need to look at the rest too. A micro-benchmarks tells you how
<br>
much you have of a given currency, that you can trade for another. It
<br>
tells you something about the implementation; how efficient the code is,
<br>
how well the hardware is utilized, etc. Not in every respect, but some.
<br>
<p>It also tells you how far you can emphasize a given feature at the
<br>
expense of all others, if it happens that at some point in time it is
<br>
what you most need.
<br>
<p>By making the argument that a particular characteristic is irrelevant,
<br>
you are essentially making a hard coded tradeoff, rather than letting
<br>
the users do it.
<br>
<p>Back to the specific issue of latency vs. scale. Okay for CG and FT, the
<br>
cross-over may be &lt;32, but that's not for all the cases and the
<br>
difference visible at 32 is pretty small. So, it is application
<br>
dependent, no question about it, but small-msg rdma is beneficial below
<br>
a given (application-dependent) cluster size.
<br>
<p><pre>
-- 
Jean-Christophe Hugly &lt;jice_at_[hidden]&gt;
PANTA
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0624.php">Brian Barrett: "Re: [O-MPI users] Firewall ports and Mac OS X 10.4.4"</a>
<li><strong>Previous message:</strong> <a href="0622.php">James Conway: "[O-MPI users] Firewall ports and Mac OS X 10.4.4"</a>
<li><strong>In reply to:</strong> <a href="0621.php">Brightwell, Ronald: "Re: [O-MPI users] direct openib btl and latency"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0625.php">Sayantan Sur: "Re: [O-MPI users] direct openib btl and latency"</a>
<li><strong>Reply:</strong> <a href="0625.php">Sayantan Sur: "Re: [O-MPI users] direct openib btl and latency"</a>
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

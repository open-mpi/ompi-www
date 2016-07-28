<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Jun 15 12:32:31 2007" -->
<!-- isoreceived="20070615163231" -->
<!-- sent="Fri, 15 Jun 2007 12:32:26 -0400" -->
<!-- isosent="20070615163226" -->
<!-- name="Tim Prins" -->
<!-- email="tprins_at_[hidden]" -->
<!-- subject="Re: [MTT users] Differentiating builds in the reporter" -->
<!-- id="200706151232.26633.tprins_at_cs.indiana.edu" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="20070615155036.GA28669_at_sun.com" -->
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
<strong>From:</strong> Tim Prins (<em>tprins_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-06-15 12:32:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0332.php">Ethan Mallove: "[MTT users] INI trick for single-node testing"</a>
<li><strong>Previous message:</strong> <a href="0330.php">Ethan Mallove: "Re: [MTT users] Differentiating builds in the reporter"</a>
<li><strong>In reply to:</strong> <a href="0330.php">Ethan Mallove: "Re: [MTT users] Differentiating builds in the reporter"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks. They are indeed using two different install sections, but I did not 
<br>
know if there was supposed to be any more separation than this.
<br>
<p>Tim
<br>
<p>On Friday 15 June 2007 11:50:37 am Ethan Mallove wrote:
<br>
<span class="quotelev1">&gt; On Fri, Jun/15/2007 10:01:24AM, Jeff Squyres wrote:
</span><br>
<span class="quotelev2">&gt; &gt; On Jun 14, 2007, at 10:45 PM, Tim Prins wrote:
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Here at IU on our cluster Thor, we are running the trunk
</span><br>
<span class="quotelev3">&gt; &gt; &gt; both with  threads enabled and with threads disabled.
</span><br>
<span class="quotelev3">&gt; &gt; &gt; How should these builds be  differentiated for the
</span><br>
<span class="quotelev3">&gt; &gt; &gt; reporter?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Do you have two different MPI install sections for the
</span><br>
<span class="quotelev2">&gt; &gt; with/without  threads?  (that's how I have it configured
</span><br>
<span class="quotelev2">&gt; &gt; in my Cisco MTT -- not  running in production yet, but it
</span><br>
<span class="quotelev2">&gt; &gt; will be soon)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; If so, they should be naturally separated already.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Or try this.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; With threads:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mtt/reporter.php?do_redir=226">http://www.open-mpi.org/mtt/reporter.php?do_redir=226</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Without threads:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mtt/reporter.php?do_redir=227">http://www.open-mpi.org/mtt/reporter.php?do_redir=227</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If you click [Advanced] pop-up window you can see I've
</span><br>
<span class="quotelev1">&gt; entered &quot;threads&quot; and &quot;!threads&quot;.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Ethan
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; --
</span><br>
<span class="quotelev2">&gt; &gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt; &gt; Cisco Systems
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; mtt-users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; mtt-users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; mtt-users mailing list
</span><br>
<span class="quotelev1">&gt; mtt-users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0332.php">Ethan Mallove: "[MTT users] INI trick for single-node testing"</a>
<li><strong>Previous message:</strong> <a href="0330.php">Ethan Mallove: "Re: [MTT users] Differentiating builds in the reporter"</a>
<li><strong>In reply to:</strong> <a href="0330.php">Ethan Mallove: "Re: [MTT users] Differentiating builds in the reporter"</a>
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

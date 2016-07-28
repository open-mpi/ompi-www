<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Aug 10 17:41:58 2006" -->
<!-- isoreceived="20060810214158" -->
<!-- sent="Thu, 10 Aug 2006 14:44:07 -0700" -->
<!-- isosent="20060810214407" -->
<!-- name="Andrew Friedley" -->
<!-- email="afriedle_at_[hidden]" -->
<!-- subject="Re: [OMPI users] network preference" -->
<!-- id="44DBA8A7.7080606_at_open-mpi.org" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="44DBA294.8010507_at_Sun.COM" -->
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
<strong>From:</strong> Andrew Friedley (<em>afriedle_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-08-10 17:44:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1735.php">Galen M. Shipman: "Re: [OMPI users] network preference"</a>
<li><strong>Previous message:</strong> <a href="1733.php">Donald Kerr: "Re: [OMPI users] network preference"</a>
<li><strong>In reply to:</strong> <a href="1733.php">Donald Kerr: "Re: [OMPI users] network preference"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1735.php">Galen M. Shipman: "Re: [OMPI users] network preference"</a>
<li><strong>Reply:</strong> <a href="1735.php">Galen M. Shipman: "Re: [OMPI users] network preference"</a>
<li><strong>Reply:</strong> <a href="1736.php">Donald Kerr: "Re: [OMPI users] network preference"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Donald Kerr wrote:
<br>
<span class="quotelev1">&gt; Hey Andrew I have one for you...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I get the following error message on a node that does not have any IB cards
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; [0,1,0]: uDAPL on host burl-ct-v40z-0 was unable to find any NICs.
</span><br>
<span class="quotelev1">&gt; Another transport will be used instead, although this may result in
</span><br>
<span class="quotelev1">&gt; lower performance.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; but I don't see this for the openib btl. Why udapl and not openib? Am I 
</span><br>
<span class="quotelev1">&gt; missing something?
</span><br>
<p>Don't think I have enough information.  You have an OpenIB stack 
<br>
installed on the system, and the openib BTL is getting loaded?  If 
<br>
there's no loadable openib BTL, you wouldn't see this error message 
<br>
coming from it.
<br>
<p>Looking at the code, you should see a similar error from both, assuming 
<br>
both BTLs are present.
<br>
<p>Andrew
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -DON
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1735.php">Galen M. Shipman: "Re: [OMPI users] network preference"</a>
<li><strong>Previous message:</strong> <a href="1733.php">Donald Kerr: "Re: [OMPI users] network preference"</a>
<li><strong>In reply to:</strong> <a href="1733.php">Donald Kerr: "Re: [OMPI users] network preference"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1735.php">Galen M. Shipman: "Re: [OMPI users] network preference"</a>
<li><strong>Reply:</strong> <a href="1735.php">Galen M. Shipman: "Re: [OMPI users] network preference"</a>
<li><strong>Reply:</strong> <a href="1736.php">Donald Kerr: "Re: [OMPI users] network preference"</a>
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

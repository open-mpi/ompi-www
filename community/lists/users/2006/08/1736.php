<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Aug 10 18:40:51 2006" -->
<!-- isoreceived="20060810224051" -->
<!-- sent="Thu, 10 Aug 2006 18:40:46 -0400" -->
<!-- isosent="20060810224046" -->
<!-- name="Donald Kerr" -->
<!-- email="Don.Kerr_at_[hidden]" -->
<!-- subject="Re: [OMPI users] network preference" -->
<!-- id="44DBB5EE.8040808_at_Sun.COM" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="44DBA8A7.7080606_at_open-mpi.org" -->
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
<strong>From:</strong> Donald Kerr (<em>Don.Kerr_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-08-10 18:40:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1737.php">Donald Kerr: "Re: [OMPI users] network preference"</a>
<li><strong>Previous message:</strong> <a href="1735.php">Galen M. Shipman: "Re: [OMPI users] network preference"</a>
<li><strong>In reply to:</strong> <a href="1734.php">Andrew Friedley: "Re: [OMPI users] network preference"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1739.php">Andrew Friedley: "Re: [OMPI users] network preference"</a>
<li><strong>Reply:</strong> <a href="1739.php">Andrew Friedley: "Re: [OMPI users] network preference"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
So I guess what I am really asking is,  what is expected and what is the 
<br>
trigger.
<br>
<p>What I am hearing is that the trigger is if the btl stack (libraries 
<br>
drivers and so on) is available it will be loaded, attempted to use and 
<br>
if there is a problem a message like I show below is expected.
<br>
<p>If the btl stack is not available no attempt to load and no message is 
<br>
expected.
<br>
<p>So what I am seeing is expected behavior.
<br>
<p>Thanks
<br>
-DON
<br>
<p>Andrew Friedley wrote On 08/10/06 17:44,:
<br>
<p><span class="quotelev1">&gt; Donald Kerr wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hey Andrew I have one for you...
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I get the following error message on a node that does not have any IB 
</span><br>
<span class="quotelev2">&gt;&gt; cards
</span><br>
<span class="quotelev2">&gt;&gt; -------------------------------------------------------------------------- 
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [0,1,0]: uDAPL on host burl-ct-v40z-0 was unable to find any NICs.
</span><br>
<span class="quotelev2">&gt;&gt; Another transport will be used instead, although this may result in
</span><br>
<span class="quotelev2">&gt;&gt; lower performance.
</span><br>
<span class="quotelev2">&gt;&gt; -------------------------------------------------------------------------- 
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; but I don't see this for the openib btl. Why udapl and not openib? Am 
</span><br>
<span class="quotelev2">&gt;&gt; I missing something?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Don't think I have enough information.  You have an OpenIB stack 
</span><br>
<span class="quotelev1">&gt; installed on the system, and the openib BTL is getting loaded?  If 
</span><br>
<span class="quotelev1">&gt; there's no loadable openib BTL, you wouldn't see this error message 
</span><br>
<span class="quotelev1">&gt; coming from it.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Looking at the code, you should see a similar error from both, 
</span><br>
<span class="quotelev1">&gt; assuming both BTLs are present.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Andrew
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -DON
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1737.php">Donald Kerr: "Re: [OMPI users] network preference"</a>
<li><strong>Previous message:</strong> <a href="1735.php">Galen M. Shipman: "Re: [OMPI users] network preference"</a>
<li><strong>In reply to:</strong> <a href="1734.php">Andrew Friedley: "Re: [OMPI users] network preference"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1739.php">Andrew Friedley: "Re: [OMPI users] network preference"</a>
<li><strong>Reply:</strong> <a href="1739.php">Andrew Friedley: "Re: [OMPI users] network preference"</a>
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

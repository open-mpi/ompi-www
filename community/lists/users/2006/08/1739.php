<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Aug 10 19:01:40 2006" -->
<!-- isoreceived="20060810230140" -->
<!-- sent="Thu, 10 Aug 2006 16:03:49 -0700" -->
<!-- isosent="20060810230349" -->
<!-- name="Andrew Friedley" -->
<!-- email="afriedle_at_[hidden]" -->
<!-- subject="Re: [OMPI users] network preference" -->
<!-- id="44DBBB55.5050303_at_open-mpi.org" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="44DBB5EE.8040808_at_Sun.COM" -->
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
<strong>Date:</strong> 2006-08-10 19:03:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1740.php">Nym: "[OMPI users] Gfortran, Mac OS X and MPI_CART_CREATE problem"</a>
<li><strong>Previous message:</strong> <a href="1738.php">Andrew Friedley: "Re: [OMPI users] network preference"</a>
<li><strong>In reply to:</strong> <a href="1736.php">Donald Kerr: "Re: [OMPI users] network preference"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Donald Kerr wrote:
<br>
<span class="quotelev1">&gt; So I guess what I am really asking is,  what is expected and what is the 
</span><br>
<span class="quotelev1">&gt; trigger.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; What I am hearing is that the trigger is if the btl stack (libraries 
</span><br>
<span class="quotelev1">&gt; drivers and so on) is available it will be loaded, attempted to use and 
</span><br>
<span class="quotelev1">&gt; if there is a problem a message like I show below is expected.
</span><br>
<p>The uDAPL BTL generates the message when it was not able to initialize 
<br>
any BTL modules - either uDAPL presented no devices, or errors occured 
<br>
while setting up all the devices uDAPL presented.
<br>
<p>openib on the other hand throws this message immediately when no devices 
<br>
are presented by ibverbs.  Subtle difference there...
<br>
<p>Not sure what other BTLs do.
<br>
<p><span class="quotelev1">&gt; If the btl stack is not available no attempt to load and no message is 
</span><br>
<span class="quotelev1">&gt; expected.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; So what I am seeing is expected behavior.
</span><br>
<p>Yes - the openib BTL isn't around to throw the same error, thought it 
<br>
would if it was around.
<br>
<p>Andrew
<br>
<p><span class="quotelev1">&gt; Thanks
</span><br>
<span class="quotelev1">&gt; -DON
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Andrew Friedley wrote On 08/10/06 17:44,:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Donald Kerr wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hey Andrew I have one for you...
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I get the following error message on a node that does not have any IB 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; cards
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -------------------------------------------------------------------------- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [0,1,0]: uDAPL on host burl-ct-v40z-0 was unable to find any NICs.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Another transport will be used instead, although this may result in
</span><br>
<span class="quotelev3">&gt;&gt;&gt; lower performance.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -------------------------------------------------------------------------- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; but I don't see this for the openib btl. Why udapl and not openib? Am 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I missing something?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Don't think I have enough information.  You have an OpenIB stack 
</span><br>
<span class="quotelev2">&gt;&gt; installed on the system, and the openib BTL is getting loaded?  If 
</span><br>
<span class="quotelev2">&gt;&gt; there's no loadable openib BTL, you wouldn't see this error message 
</span><br>
<span class="quotelev2">&gt;&gt; coming from it.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Looking at the code, you should see a similar error from both, 
</span><br>
<span class="quotelev2">&gt;&gt; assuming both BTLs are present.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Andrew
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -DON
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1740.php">Nym: "[OMPI users] Gfortran, Mac OS X and MPI_CART_CREATE problem"</a>
<li><strong>Previous message:</strong> <a href="1738.php">Andrew Friedley: "Re: [OMPI users] network preference"</a>
<li><strong>In reply to:</strong> <a href="1736.php">Donald Kerr: "Re: [OMPI users] network preference"</a>
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

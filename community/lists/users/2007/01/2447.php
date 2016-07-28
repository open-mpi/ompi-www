<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Jan  8 21:28:13 2007" -->
<!-- isoreceived="20070109022813" -->
<!-- sent="Mon, 8 Jan 2007 21:28:02 -0500" -->
<!-- isosent="20070109022802" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Ompi failing on mx only" -->
<!-- id="A22E09C0-F593-475F-B670-42048B97A0DA_at_cs.utk.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="35aa01c73393$8448a170$58c31fac_at_bart" -->
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
<strong>Date:</strong> 2007-01-08 21:28:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2448.php">Reese Faucette: "Re: [OMPI users] Ompi failing on mx only"</a>
<li><strong>Previous message:</strong> <a href="2446.php">Reese Faucette: "Re: [OMPI users] Ompi failing on mx only"</a>
<li><strong>In reply to:</strong> <a href="2446.php">Reese Faucette: "Re: [OMPI users] Ompi failing on mx only"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2448.php">Reese Faucette: "Re: [OMPI users] Ompi failing on mx only"</a>
<li><strong>Reply:</strong> <a href="2448.php">Reese Faucette: "Re: [OMPI users] Ompi failing on mx only"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jan 8, 2007, at 9:11 PM, Reese Faucette wrote:
<br>
<p><span class="quotelev4">&gt;&gt;&gt;&gt; Second thing. From one of your previous emails, I see that MX
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; is configured with 4 instance by node. Your running with
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; exactly 4 processes on the first 2 nodes. Weirds things might
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; happens ...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 4 processes per node will be just fine.  This is not like GM where  
</span><br>
<span class="quotelev1">&gt; the 4
</span><br>
<span class="quotelev1">&gt; includes some &quot;reserved&quot; ports.
</span><br>
<p>Right, that's the maximum number of open MX channels, i.e. processes  
<br>
than can run on the node using MX. With MX (1.2.0c I think), I get  
<br>
weird messages if I run a second mpirun quickly after the first one  
<br>
failed. The myrinet guys, I quite sure, can explain why and how.  
<br>
Somehow, when an application segfault while the MX port is open  
<br>
things are not cleaned up right away. It take few seconds (not more  
<br>
than one minute) to have everything running correctly after that.
<br>
<p>&nbsp;&nbsp;&nbsp;george.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2448.php">Reese Faucette: "Re: [OMPI users] Ompi failing on mx only"</a>
<li><strong>Previous message:</strong> <a href="2446.php">Reese Faucette: "Re: [OMPI users] Ompi failing on mx only"</a>
<li><strong>In reply to:</strong> <a href="2446.php">Reese Faucette: "Re: [OMPI users] Ompi failing on mx only"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2448.php">Reese Faucette: "Re: [OMPI users] Ompi failing on mx only"</a>
<li><strong>Reply:</strong> <a href="2448.php">Reese Faucette: "Re: [OMPI users] Ompi failing on mx only"</a>
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

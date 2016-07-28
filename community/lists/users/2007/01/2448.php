<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Jan  8 21:34:20 2007" -->
<!-- isoreceived="20070109023420" -->
<!-- sent="Mon, 8 Jan 2007 18:34:10 -0800" -->
<!-- isosent="20070109023410" -->
<!-- name="Reese Faucette" -->
<!-- email="reese_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Ompi failing on mx only" -->
<!-- id="35b301c73396$a4fd6790$58c31fac_at_bart" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="A22E09C0-F593-475F-B670-42048B97A0DA_at_cs.utk.edu" -->
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
<strong>From:</strong> Reese Faucette (<em>reese_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-01-08 21:34:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2449.php">George Bosilca: "Re: [OMPI users] Ompi failing on mx only"</a>
<li><strong>Previous message:</strong> <a href="2447.php">George Bosilca: "Re: [OMPI users] Ompi failing on mx only"</a>
<li><strong>In reply to:</strong> <a href="2447.php">George Bosilca: "Re: [OMPI users] Ompi failing on mx only"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2449.php">George Bosilca: "Re: [OMPI users] Ompi failing on mx only"</a>
<li><strong>Reply:</strong> <a href="2449.php">George Bosilca: "Re: [OMPI users] Ompi failing on mx only"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1">&gt; Right, that's the maximum number of open MX channels, i.e. processes
</span><br>
<span class="quotelev1">&gt; than can run on the node using MX. With MX (1.2.0c I think), I get
</span><br>
<span class="quotelev1">&gt; weird messages if I run a second mpirun quickly after the first one
</span><br>
<span class="quotelev1">&gt; failed. The myrinet guys, I quite sure, can explain why and how.
</span><br>
<span class="quotelev1">&gt; Somehow, when an application segfault while the MX port is open
</span><br>
<span class="quotelev1">&gt; things are not cleaned up right away. It take few seconds (not more
</span><br>
<span class="quotelev1">&gt; than one minute) to have everything running correctly after that.
</span><br>
<p>Supposedly I am a &quot;myrinet guy&quot; ;-)  Yeah, the endpoint cleanup stuff could 
<br>
take a few seconds after an ungraceful exit.  But, if you're getting some 
<br>
behavior that looks like you ought not be getting, please let us know!
<br>
-reese
<br>
Myricom, Inc.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2449.php">George Bosilca: "Re: [OMPI users] Ompi failing on mx only"</a>
<li><strong>Previous message:</strong> <a href="2447.php">George Bosilca: "Re: [OMPI users] Ompi failing on mx only"</a>
<li><strong>In reply to:</strong> <a href="2447.php">George Bosilca: "Re: [OMPI users] Ompi failing on mx only"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2449.php">George Bosilca: "Re: [OMPI users] Ompi failing on mx only"</a>
<li><strong>Reply:</strong> <a href="2449.php">George Bosilca: "Re: [OMPI users] Ompi failing on mx only"</a>
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

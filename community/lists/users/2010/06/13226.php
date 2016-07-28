<?
$subject_val = "Re: [OMPI users] SM failure with mixed 32/64-bit procs onthe	samemachine";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jun  4 18:09:07 2010" -->
<!-- isoreceived="20100604220907" -->
<!-- sent="Fri, 4 Jun 2010 18:09:02 -0400" -->
<!-- isosent="20100604220902" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] SM failure with mixed 32/64-bit procs onthe	samemachine" -->
<!-- id="FD885C1B-2722-4E84-AA8B-3B9369376B07_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="89F8C511E9BE1F41AE2F1BB0424037F201E8BD62DD_at_hasmsx504.ger.corp.intel.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] SM failure with mixed 32/64-bit procs onthe	samemachine<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-06-04 18:09:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13227.php">Audet, Martin: "[OMPI users] Unable to connect to a server using MX MTL with TCP"</a>
<li><strong>Previous message:</strong> <a href="13225.php">Peter Thompson: "[OMPI users] Debug info on Darwin"</a>
<li><strong>In reply to:</strong> <a href="13224.php">Katz, Jacob: "Re: [OMPI users] SM failure with mixed 32/64-bit procs on the	samemachine"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jun 4, 2010, at 2:18 PM, Katz, Jacob wrote:
<br>
<p><span class="quotelev1">&gt; This would be a quite serious limitation from my point of view. I'm a library developer, and my library is used in heterogeneous environment. Since 32b executables regularly work on 64b machines, they get intermixed by the users with 64b executables on the same machine. Switching to another BTL would incur serious performance issues...
</span><br>
<p>You're really the first person to ask us for combined 32/64 bit *on the same machine*.
<br>
<p>Just curious -- why would people still be compiling in 32 bit mode these days?
<br>
<p><span class="quotelev1">&gt; I noticed an SM bug report that looks similar to mine and was reportedly fixed in 1.4.2. I'm going to check that version. If it still fails, what would be the effort to fix this?
</span><br>
<p>No, that was for a different issue (32/64 bit *across different machines*) -- it won't fix this sm issue.  I doubt that any of us had really even thought about mixing 32/64 bit in the sm BTL before (I know I hadn't).  Indeed, we haven't had much demand for 32 bit support over the past few years (it's non-zero, but not large).
<br>
<p>We try to guide OMPI's development by customer demand for features and platforms to support.  Although not a definitive measure, having only one person ask for a (potentially difficult to implement) feature is a good indicator that that's a feature only wanted/needed by a small number of users.  FWIW, the 32/64 scenarios we've generally seen before have been for running an MPI job across multiple different flavors of hardware or OSs -- but we haven't seen much of that, either. 
<br>
<p>All that being said, I'm *not* any kind of authoritative source of HPC knowledge that knows what every customer is doing -- for example, you obviously have a different perspective and viewpoint than me.  Can you give some kind of quantification about how important this kind of feature is to the general HPC community?  How many applications / users do this?  Do you know if other MPI implementations support it?
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13227.php">Audet, Martin: "[OMPI users] Unable to connect to a server using MX MTL with TCP"</a>
<li><strong>Previous message:</strong> <a href="13225.php">Peter Thompson: "[OMPI users] Debug info on Darwin"</a>
<li><strong>In reply to:</strong> <a href="13224.php">Katz, Jacob: "Re: [OMPI users] SM failure with mixed 32/64-bit procs on the	samemachine"</a>
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

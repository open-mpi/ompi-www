<?
$subject_val = "Re: [OMPI users] Compiling on different servers";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Nov  7 08:49:20 2008" -->
<!-- isoreceived="20081107134920" -->
<!-- sent="Fri, 7 Nov 2008 08:49:14 -0500" -->
<!-- isosent="20081107134914" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Compiling on different servers" -->
<!-- id="321C9E0D-57FD-446C-B74B-CAD6A91A3D62_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="A220C7A7-0E8C-49C3-9CE0-AE4B5150DD23_at_gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Compiling on different servers<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-11-07 08:49:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7237.php">Daniel Felix Ferber: "[OMPI users] stdout issues on nightly build"</a>
<li><strong>Previous message:</strong> <a href="7235.php">Robert Kubrick: "Re: [OMPI users] Compiling on different servers"</a>
<li><strong>In reply to:</strong> <a href="7235.php">Robert Kubrick: "Re: [OMPI users] Compiling on different servers"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Nov 6, 2008, at 10:33 PM, Robert Kubrick wrote:
<br>
<p><span class="quotelev1">&gt; Moving one step foreword, server 1, my compile server, has a number  
</span><br>
<span class="quotelev1">&gt; of commercial C++ compilers (Pathscale and Intel). I'd like to  
</span><br>
<span class="quotelev1">&gt; compile different version of the binary with each compiler and then  
</span><br>
<span class="quotelev1">&gt; run these binaries on the Server 2 g++-compiled OMPI environments.
</span><br>
<span class="quotelev1">&gt; The FAQ says &quot;not really, you can't do that&quot;: <a href="http://www.open-mpi.org/faq/?category=sysadmin#multiple-installs">http://www.open-mpi.org/faq/?category=sysadmin#multiple-installs</a> 
</span><br>
<span class="quotelev1">&gt; , but I thought it might be time for an update with some hands-on  
</span><br>
<span class="quotelev1">&gt; experience?
</span><br>
<p><p>You probably still can't do this.  C++ compilers have different symbol  
<br>
mangling schemes and generally do not create executables that are link  
<br>
compatible with g++.  *Some* C++ compilers may be link compatible with  
<br>
g++ (I seem to recall someone mentioning this before); check your  
<br>
vendors' docs and/or try a simple non-MPI C++ app to see if it works.
<br>
<p>Good luck.
<br>
<p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7237.php">Daniel Felix Ferber: "[OMPI users] stdout issues on nightly build"</a>
<li><strong>Previous message:</strong> <a href="7235.php">Robert Kubrick: "Re: [OMPI users] Compiling on different servers"</a>
<li><strong>In reply to:</strong> <a href="7235.php">Robert Kubrick: "Re: [OMPI users] Compiling on different servers"</a>
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

<?
$subject_val = "Re: [OMPI users] mpirun hangs when launching job on remote node";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar 17 20:45:50 2009" -->
<!-- isoreceived="20090318004550" -->
<!-- sent="Wed, 18 Mar 2009 09:45:40 +0900" -->
<!-- isosent="20090318004540" -->
<!-- name="Raymond Wan" -->
<!-- email="rwan_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpirun hangs when launching job on remote node" -->
<!-- id="49C04434.3010202_at_kuicr.kyoto-u.ac.jp" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="Pine.LNX.4.64.0903171514170.23901_at_buphy.bu.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] mpirun hangs when launching job on remote node<br>
<strong>From:</strong> Raymond Wan (<em>rwan_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-03-17 20:45:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8488.php">Jeff Squyres: "Re: [OMPI users] PGI 8.0-4 doesn't like ompi/mca/op/op.h"</a>
<li><strong>Previous message:</strong> <a href="8486.php">Ron Babich: "[OMPI users] mpirun hangs when launching job on remote node"</a>
<li><strong>In reply to:</strong> <a href="8486.php">Ron Babich: "[OMPI users] mpirun hangs when launching job on remote node"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8489.php">Ron Babich: "Re: [OMPI users] mpirun hangs when launching job on remote node"</a>
<li><strong>Reply:</strong> <a href="8489.php">Ron Babich: "Re: [OMPI users] mpirun hangs when launching job on remote node"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Ron,
<br>
<p><p>Ron Babich wrote:
<br>
<span class="quotelev1">&gt; Hi Everyone,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm having a very basic problem getting an MPI job to run on multiple 
</span><br>
<span class="quotelev1">&gt; nodes. My setup consists of two identically configured nodes, called 
</span><br>
<span class="quotelev1">&gt; node01 and node02, connected via ethernet and infiniband.  They are 
</span><br>
<span class="quotelev1">&gt; running CentOS 5.2 and the bundled OMPI, version 1.2.5.  I've attached 
</span><br>
<span class="quotelev1">&gt; the output of &quot;ompi_info --all&quot;, which is the same for both nodes.
</span><br>
<p><p><p>So far, this sounds awfully like the problem I had a few days ago.  Perhaps you can check the firewall settings and if it is enabled (like it was for me), then try disabling it.  If that is the case, then you might want to look into setting it properly since the solution I've adopted is to &quot;simply&quot; keep it disabled...
<br>
<p>Ray
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8488.php">Jeff Squyres: "Re: [OMPI users] PGI 8.0-4 doesn't like ompi/mca/op/op.h"</a>
<li><strong>Previous message:</strong> <a href="8486.php">Ron Babich: "[OMPI users] mpirun hangs when launching job on remote node"</a>
<li><strong>In reply to:</strong> <a href="8486.php">Ron Babich: "[OMPI users] mpirun hangs when launching job on remote node"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8489.php">Ron Babich: "Re: [OMPI users] mpirun hangs when launching job on remote node"</a>
<li><strong>Reply:</strong> <a href="8489.php">Ron Babich: "Re: [OMPI users] mpirun hangs when launching job on remote node"</a>
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

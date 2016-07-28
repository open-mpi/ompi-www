<?
$subject_val = "Re: [OMPI users] Lahey 64 bit and openmpi 1.3?";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar  5 17:30:53 2009" -->
<!-- isoreceived="20090305223053" -->
<!-- sent="Thu, 5 Mar 2009 17:30:45 -0500" -->
<!-- isosent="20090305223045" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Lahey 64 bit and openmpi 1.3?" -->
<!-- id="5F566F01-E887-498A-8D31-137205D609EC_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="49B04EE2.40906_at_coas.oregonstate.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] Lahey 64 bit and openmpi 1.3?<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-03-05 17:30:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8341.php">Pavel Shamis (Pasha): "Re: [OMPI users] mlx4 error - looking for guidance"</a>
<li><strong>Previous message:</strong> <a href="8339.php">Jeff Squyres: "Re: [OMPI users] Gamess with openmpi"</a>
<li><strong>In reply to:</strong> <a href="8336.php">Tiago Silva: "Re: [OMPI users] Lahey 64 bit and openmpi 1.3?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8347.php">Tiago Silva: "Re: [OMPI users] Lahey 64 bit and openmpi 1.3?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mar 5, 2009, at 5:14 PM, Tiago Silva wrote:
<br>
<p><span class="quotelev1">&gt; I am reporting what I found out for the benefit of other lahey users  
</span><br>
<span class="quotelev1">&gt; out
</span><br>
<span class="quotelev1">&gt; there. I have been told by people at Lahey that libtool has been  
</span><br>
<span class="quotelev1">&gt; updated
</span><br>
<span class="quotelev1">&gt; to support their compiler.
</span><br>
<span class="quotelev1">&gt; <a href="http://www.linux-archive.org/archlinux-development/156171-libtool-2-2-6a-1-a.html">http://www.linux-archive.org/archlinux-development/156171-libtool-2-2-6a-1-a.html</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>Odd.  This release says that LLT 2.2.6 is the one that supports  
<br>
Lahey.  But that's the version we ship in Open MPI.  :-\  This is from  
<br>
an expanded OMPI 1.3 tarball:
<br>
<p>-----
<br>
[14:22] svbu-mpi:/home/jsquyres/openmpi-1.3 % ./libtool --version
<br>
ltmain.sh (GNU libtool) 2.2.6
<br>
Written by Gordon Matzigkeit &lt;gord_at_[hidden]&gt;, 1996
<br>
<p>Copyright (C) 2008 Free Software Foundation, Inc.
<br>
This is free software; see the source for copying conditions.  There  
<br>
is NO
<br>
warranty; not even for MERCHANTABILITY or FITNESS FOR A PARTICULAR  
<br>
PURPOSE.
<br>
[14:29] svbu-mpi:/home/jsquyres/openmpi-1.3 %
<br>
-----
<br>
<p>So it looks like something is lacking in the Lahey compiler support.
<br>
<p>The announcement did specifically mention Lahey 8.1 -- is that what  
<br>
you have?
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
<li><strong>Next message:</strong> <a href="8341.php">Pavel Shamis (Pasha): "Re: [OMPI users] mlx4 error - looking for guidance"</a>
<li><strong>Previous message:</strong> <a href="8339.php">Jeff Squyres: "Re: [OMPI users] Gamess with openmpi"</a>
<li><strong>In reply to:</strong> <a href="8336.php">Tiago Silva: "Re: [OMPI users] Lahey 64 bit and openmpi 1.3?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8347.php">Tiago Silva: "Re: [OMPI users] Lahey 64 bit and openmpi 1.3?"</a>
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

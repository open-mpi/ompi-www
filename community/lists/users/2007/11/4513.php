<?
$subject_val = "Re: [OMPI users] ETH BTL";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Nov 22 16:33:34 2007" -->
<!-- isoreceived="20071122213334" -->
<!-- sent="Thu, 22 Nov 2007 16:33:33 -0500" -->
<!-- isosent="20071122213333" -->
<!-- name="Torsten Hoefler" -->
<!-- email="htor_at_[hidden]" -->
<!-- subject="Re: [OMPI users] ETH BTL" -->
<!-- id="20071122213333.GJ8995_at_benten.cs.indiana.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="200710311024.03629.m.janssens_at_opencfd.co.uk" -->
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
<strong>Subject:</strong> Re: [OMPI users] ETH BTL<br>
<strong>From:</strong> Torsten Hoefler (<em>htor_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-11-22 16:33:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4514.php">Madireddy Samuel Vijaykumar: "[OMPI users] Newbie: Using hostfile"</a>
<li><strong>Previous message:</strong> <a href="4512.php">George Bosilca: "Re: [OMPI users] heterogeneous startup"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2007/10/4355.php">Mattijs Janssens: "[OMPI users] ETH BTL"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<span class="quotelev1">&gt; Sorry if this has already been discussed, am new 
</span><br>
<span class="quotelev1">&gt; to this list.
</span><br>
Sorry for th elate reply, I was pretty stressed out due to the
<br>
Supercomputing Conference lately. 
<br>
<p><span class="quotelev1">&gt; I came across the ETH BTL from 
</span><br>
<span class="quotelev1">&gt; <a href="http://archiv.tu-chemnitz.de/pub/2006/0111/data/hoefler-CSR-06-06.pdf">http://archiv.tu-chemnitz.de/pub/2006/0111/data/hoefler-CSR-06-06.pdf</a> 
</span><br>
<span class="quotelev1">&gt; and was wondering whether this protocol is 
</span><br>
<span class="quotelev1">&gt; available / integrated into OpenMPI.
</span><br>
yes and no. The full source code is available at:
<br>
<a href="http://archiv.tu-chemnitz.de/pub/2006/0025/data/enet_module_btl.tar.gz">http://archiv.tu-chemnitz.de/pub/2006/0025/data/enet_module_btl.tar.gz</a>
<br>
<p>It consists of a kernel module implementing the low latency sockets and
<br>
a BTL for Open MPI that uses those new sockets.
<br>
<p>However, this is a stable version that does not have flow control. A
<br>
newer version of the code with flow control (which is still being
<br>
developed/potentially buggy) is available on request only (ask me if you
<br>
are interested to test it). 
<br>
<p>Best,
<br>
&nbsp;&nbsp;Torsten
<br>
<p><pre>
-- 
 bash$ :(){ :|:&amp;};: --------------------- <a href="http://www.unixer.de/">http://www.unixer.de/</a> -----
Indiana University    | <a href="http://www.indiana.edu">http://www.indiana.edu</a>
Open Systems Lab      | <a href="http://osl.iu.edu/">http://osl.iu.edu/</a>
150 S. Woodlawn Ave.  | Bloomington, IN, 474045-7104 | USA
Lindley Hall Room 135 | +01 (812) 855-3608
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4514.php">Madireddy Samuel Vijaykumar: "[OMPI users] Newbie: Using hostfile"</a>
<li><strong>Previous message:</strong> <a href="4512.php">George Bosilca: "Re: [OMPI users] heterogeneous startup"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2007/10/4355.php">Mattijs Janssens: "[OMPI users] ETH BTL"</a>
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

<?
$subject_val = "Re: [OMPI users] openmpi 1.6.1 and libnuma";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Aug 30 14:17:26 2012" -->
<!-- isoreceived="20120830181726" -->
<!-- sent="Thu, 30 Aug 2012 14:17:21 -0400" -->
<!-- isosent="20120830181721" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openmpi 1.6.1 and libnuma" -->
<!-- id="BD2CF4DC-16E8-40FB-840A-A489E4BE4B9D_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="1346340386.4282.5.camel_at_cedar.reachone.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] openmpi 1.6.1 and libnuma<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-08-30 14:17:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20074.php">Gus Correa: "Re: [OMPI users] what is a &quot;node&quot;?"</a>
<li><strong>Previous message:</strong> <a href="20072.php">Brian Budge: "[OMPI users] valgrind/memory leaks from spawn"</a>
<li><strong>In reply to:</strong> <a href="20069.php">Tom Rosmond: "[OMPI users] openmpi 1.6.1 and libnuma"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Aug 30, 2012, at 11:26 AM, Tom Rosmond wrote:
<br>
<p><span class="quotelev1">&gt; I just built Openmpi 1.6.1 with the '--with-libnuma=(dir)' and got a
</span><br>
<span class="quotelev1">&gt; 'WARNING: unrecognized options' message.  I am running on a NUMA
</span><br>
<span class="quotelev1">&gt; architecture and have needed this feature with earlier Openmpi releases.
</span><br>
<span class="quotelev1">&gt; Is the support now native in the 1.6 versions?  If not, what should I
</span><br>
<span class="quotelev1">&gt; do?
</span><br>
<p><p>You shouldn't need this any more.  Open MPI has wholly replaced its use of libnuma with hwloc, which should handle NUMA architectures properly.
<br>
<p>Try running a small test with something like what I cited in a post earlier today:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/community/lists/users/2012/08/20066.php">http://www.open-mpi.org/community/lists/users/2012/08/20066.php</a>
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20074.php">Gus Correa: "Re: [OMPI users] what is a &quot;node&quot;?"</a>
<li><strong>Previous message:</strong> <a href="20072.php">Brian Budge: "[OMPI users] valgrind/memory leaks from spawn"</a>
<li><strong>In reply to:</strong> <a href="20069.php">Tom Rosmond: "[OMPI users] openmpi 1.6.1 and libnuma"</a>
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

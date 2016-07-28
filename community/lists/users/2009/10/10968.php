<?
$subject_val = "Re: [OMPI users] memchecker overhead?";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Oct 26 15:29:21 2009" -->
<!-- isoreceived="20091026192921" -->
<!-- sent="Mon, 26 Oct 2009 15:29:16 -0400" -->
<!-- isosent="20091026192916" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] memchecker overhead?" -->
<!-- id="B4106EE1-E021-42A2-8675-0E2D316C12B7_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="4758E3BB-2F0D-40BF-9793-065A454676DF_at_umich.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] memchecker overhead?<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-10-26 15:29:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10969.php">Brock Palen: "Re: [OMPI users] memchecker overhead?"</a>
<li><strong>Previous message:</strong> <a href="10967.php">Jeff Squyres: "Re: [OMPI users] compiling openmpi with mixed CISCO infiniband. cardand Mellanox infiniband cards."</a>
<li><strong>In reply to:</strong> <a href="10966.php">Brock Palen: "[OMPI users] memchecker overhead?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10969.php">Brock Palen: "Re: [OMPI users] memchecker overhead?"</a>
<li><strong>Reply:</strong> <a href="10969.php">Brock Palen: "Re: [OMPI users] memchecker overhead?"</a>
<li><strong>Reply:</strong> <a href="10970.php">Jed Brown: "Re: [OMPI users] memchecker overhead?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Oct 26, 2009, at 3:23 PM, Brock Palen wrote:
<br>
<p><span class="quotelev1">&gt; Is there a large overhead for
</span><br>
<span class="quotelev1">&gt; --enable-debug --enable-memchecker?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>--enable-debug, yes, there is a pretty large penalty.  --enable-debug  
<br>
is really only intended for Open MPI developers.  If you just want an  
<br>
OMPI that was compiled with debugging symbols, then just add -g to the  
<br>
CFLAGS/CXXFLAGS in OMPI's configure, perhaps like this:
<br>
<p>&nbsp;&nbsp;&nbsp;shell$ ./configure CFLAGS=-g CXXFLAGS=-g ...
<br>
<p>Using --enable-debug adds in a whole pile of developer-level run-time  
<br>
checking and whatnot.  You probably don't want that on production runs.
<br>
<p>I'll let the HLRS guys comment on the cost of --enable-memchecker; I  
<br>
suspect the answer will be &quot;it depends&quot;.
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10969.php">Brock Palen: "Re: [OMPI users] memchecker overhead?"</a>
<li><strong>Previous message:</strong> <a href="10967.php">Jeff Squyres: "Re: [OMPI users] compiling openmpi with mixed CISCO infiniband. cardand Mellanox infiniband cards."</a>
<li><strong>In reply to:</strong> <a href="10966.php">Brock Palen: "[OMPI users] memchecker overhead?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10969.php">Brock Palen: "Re: [OMPI users] memchecker overhead?"</a>
<li><strong>Reply:</strong> <a href="10969.php">Brock Palen: "Re: [OMPI users] memchecker overhead?"</a>
<li><strong>Reply:</strong> <a href="10970.php">Jed Brown: "Re: [OMPI users] memchecker overhead?"</a>
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

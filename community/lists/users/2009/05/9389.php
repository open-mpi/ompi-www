<?
$subject_val = "Re: [OMPI users] CP2K mpi hang";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May 19 12:15:09 2009" -->
<!-- isoreceived="20090519161509" -->
<!-- sent="Tue, 19 May 2009 12:15:01 -0400" -->
<!-- isosent="20090519161501" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] CP2K mpi hang" -->
<!-- id="A6777593-75E4-47B6-93B2-406494E8DB7F_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="1242749582.26039.742.camel_at_localhost.localdomain" -->
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
<strong>Subject:</strong> Re: [OMPI users] CP2K mpi hang<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-05-19 12:15:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9390.php">Noam Bernstein: "Re: [OMPI users] CP2K mpi hang"</a>
<li><strong>Previous message:</strong> <a href="9388.php">Ashley Pittman: "Re: [OMPI users] CP2K mpi hang"</a>
<li><strong>In reply to:</strong> <a href="9388.php">Ashley Pittman: "Re: [OMPI users] CP2K mpi hang"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9390.php">Noam Bernstein: "Re: [OMPI users] CP2K mpi hang"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On May 19, 2009, at 12:13 PM, Ashley Pittman wrote:
<br>
<p><span class="quotelev1">&gt; Finally if you could run it with &quot;--mca btl ^ofed&quot; to rule out the  
</span><br>
<span class="quotelev1">&gt; ofed
</span><br>
<span class="quotelev1">&gt; stack causing the problem that would be useful.  You'd need to check  
</span><br>
<span class="quotelev1">&gt; the
</span><br>
<span class="quotelev1">&gt; syntax here.
</span><br>
<p>--mca btl ^openib
<br>
<p>We're stuck with that old name for now -- see <a href="http://www.open-mpi.org/faq/?category=openfabrics#why-openib-name">http://www.open-mpi.org/faq/?category=openfabrics#why-openib-name</a> 
<br>
.
<br>
<p>Someday we might put in a component aliasing system (e.g., so that  
<br>
both &quot;openib&quot; and &quot;ofed&quot; or &quot;openfabrics&quot; or ... will work), but it  
<br>
hasn't bubbled up high enough in priority yet...
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
<li><strong>Next message:</strong> <a href="9390.php">Noam Bernstein: "Re: [OMPI users] CP2K mpi hang"</a>
<li><strong>Previous message:</strong> <a href="9388.php">Ashley Pittman: "Re: [OMPI users] CP2K mpi hang"</a>
<li><strong>In reply to:</strong> <a href="9388.php">Ashley Pittman: "Re: [OMPI users] CP2K mpi hang"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9390.php">Noam Bernstein: "Re: [OMPI users] CP2K mpi hang"</a>
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

<?
$subject_val = "Re: [OMPI users] Pros and cons of --enable-heterogeneous";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Oct  7 18:54:18 2010" -->
<!-- isoreceived="20101007225418" -->
<!-- sent="Thu, 07 Oct 2010 15:52:46 -0700" -->
<!-- isosent="20101007225246" -->
<!-- name="Eugene Loh" -->
<!-- email="eugene.loh_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Pros and cons of --enable-heterogeneous" -->
<!-- id="4CAE4F3E.4050109_at_oracle.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="1286486857.28705.8.camel_at_ronispc.chem.mcgill.ca" -->
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
<strong>Subject:</strong> Re: [OMPI users] Pros and cons of --enable-heterogeneous<br>
<strong>From:</strong> Eugene Loh (<em>eugene.loh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-10-07 18:52:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14419.php">Reuti: "Re: [OMPI users] memory limits on remote nodes"</a>
<li><strong>Previous message:</strong> <a href="14417.php">Ralph Castain: "Re: [OMPI users] memory limits on remote nodes"</a>
<li><strong>In reply to:</strong> <a href="14415.php">David Ronis: "Re: [OMPI users] Pros and cons of --enable-heterogeneous"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14427.php">Jeff Squyres: "Re: [OMPI users] Pros and cons of --enable-heterogeneous"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
David Ronis wrote:
<br>
<p><span class="quotelev1">&gt;Ralph, thanks for the reply.   
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;If I build with enable-heterogeneous and then decide to run on a
</span><br>
<span class="quotelev1">&gt;homogeneous set of nodes, does the additional &quot;overhead&quot; go away or
</span><br>
<span class="quotelev1">&gt;become completely negligible; i.e., if no conversion is necessary.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
I'm no expert, but I think the overhead does not go away.  Even if you 
<br>
run on a homogeneous set of nodes, a local node does not know that.  It 
<br>
prepares a message without knowing if the destination is &quot;same&quot; or 
<br>
&quot;different&quot;.  (There may be an exception with the sm BTL, which is only 
<br>
for processes on the same node and where it it assumed that a node 
<br>
comprises homogeneous processors.)
<br>
<p>Whether the overhead is significant or negligible is another matter.  A 
<br>
subjective matter.  I suppose you could try some tests and judge for 
<br>
yourself for your case.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14419.php">Reuti: "Re: [OMPI users] memory limits on remote nodes"</a>
<li><strong>Previous message:</strong> <a href="14417.php">Ralph Castain: "Re: [OMPI users] memory limits on remote nodes"</a>
<li><strong>In reply to:</strong> <a href="14415.php">David Ronis: "Re: [OMPI users] Pros and cons of --enable-heterogeneous"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14427.php">Jeff Squyres: "Re: [OMPI users] Pros and cons of --enable-heterogeneous"</a>
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

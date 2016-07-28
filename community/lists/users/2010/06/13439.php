<?
$subject_val = "Re: [OMPI users] about MPI";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jun 29 07:10:46 2010" -->
<!-- isoreceived="20100629111046" -->
<!-- sent="Tue, 29 Jun 2010 07:10:45 -0400" -->
<!-- isosent="20100629111045" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] about MPI" -->
<!-- id="C26AB269-3D53-4A8C-AE6C-23A786E7B6CC_at_cisco.com" -->
<!-- charset="utf-8" -->
<!-- inreplyto="AANLkTilq_fqTdFEs_E-t1PePClsn1BrZGxhb9NZsQfHJ_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] about MPI<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-06-29 07:10:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13440.php">Jeff Squyres: "Re: [OMPI users] dimension mapping of MPI_Cart_create"</a>
<li><strong>Previous message:</strong> <a href="13438.php">Jeff Squyres: "Re: [OMPI users] Open MPI ERR_TRUNCATE: message truncated"</a>
<li><strong>In reply to:</strong> <a href="13434.php">&#205;&#245;&#238;&#163;: "[OMPI users] about MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13443.php">王睿: "Re: [OMPI users] about MPI"</a>
<li><strong>Reply:</strong> <a href="13443.php">王睿: "Re: [OMPI users] about MPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jun 29, 2010, at 3:44 AM, &#231;&#142;&#139;&#231;&#157;&#191; wrote:
<br>
<p><span class="quotelev1">&gt; 1, suppose a MPI program involves several nodes, if one node dead, will the program terminate? 
</span><br>
<p>Open MPI will terminate the whole job, yes.
<br>
<p><span class="quotelev1">&gt; 2, Is there any possibility to extend or shrink the size of MPI communicator size? If so, we can use spare node to replace the dead node?  
</span><br>
<p>Currently, no.
<br>
<p>Fault tolerance and resiliency is an active topic of research and discussion in the MPI-3 forum.  But for the moment, most MPI implementations -- including Open MPI -- have fairly draconian responses to the loss of a process and/or node (i.e., kill the rest of the job).
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
<li><strong>Next message:</strong> <a href="13440.php">Jeff Squyres: "Re: [OMPI users] dimension mapping of MPI_Cart_create"</a>
<li><strong>Previous message:</strong> <a href="13438.php">Jeff Squyres: "Re: [OMPI users] Open MPI ERR_TRUNCATE: message truncated"</a>
<li><strong>In reply to:</strong> <a href="13434.php">&#205;&#245;&#238;&#163;: "[OMPI users] about MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13443.php">王睿: "Re: [OMPI users] about MPI"</a>
<li><strong>Reply:</strong> <a href="13443.php">王睿: "Re: [OMPI users] about MPI"</a>
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

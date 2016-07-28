<?
$subject_val = "[OMPI devel] openib max_cqe";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jul  5 14:26:51 2012" -->
<!-- isoreceived="20120705182651" -->
<!-- sent="Thu, 05 Jul 2012 14:26:53 -0400" -->
<!-- isosent="20120705182653" -->
<!-- name="TERRY DONTJE" -->
<!-- email="terry.dontje_at_[hidden]" -->
<!-- subject="[OMPI devel] openib max_cqe" -->
<!-- id="4FF5DC6D.8080800_at_oracle.com" -->
<!-- charset="UTF-8" -->
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
<strong>Subject:</strong> [OMPI devel] openib max_cqe<br>
<strong>From:</strong> TERRY DONTJE (<em>terry.dontje_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-07-05 14:26:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11235.php">Shamis, Pavel: "Re: [OMPI devel] openib max_cqe"</a>
<li><strong>Previous message:</strong> <a href="11233.php">Jeff Squyres: "Re: [OMPI devel] SM component init unload"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11235.php">Shamis, Pavel: "Re: [OMPI devel] openib max_cqe"</a>
<li><strong>Reply:</strong> <a href="11235.php">Shamis, Pavel: "Re: [OMPI devel] openib max_cqe"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
With Jeff's latest changes to how we set up the cq_size I am now seeing 
<br>
error messages saying that my machine's memlocked limits are too low.  I 
<br>
am concerned that it might be something else because my max'd locked 
<br>
memory is unlimited on my machine.
<br>
<p>So if I do a run of -np 2 across two separate node than the use of the 
<br>
max_cqe of my ib device (4194303) is ok.  Once I go beyond 1 process on 
<br>
the node I start getting the memlocked limits message.  So how much 
<br>
memory does a cqe take?  Is it 1k by any chance?  I ask this because the 
<br>
machine I am running on has 4GB of memory and so I am wondering if I 
<br>
just don't have enough backing memory and if that is so I am wondering 
<br>
how commone of a case this may be?
<br>
<p><pre>
-- 
Terry D. Dontje | Principal Software Engineer
Developer Tools Engineering | +1.781.442.2631
Oracle *- Performance Technologies*
95 Network Drive, Burlington, MA 01803
Email terry.dontje_at_[hidden] &lt;mailto:terry.dontje_at_[hidden]&gt;
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-11234/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11235.php">Shamis, Pavel: "Re: [OMPI devel] openib max_cqe"</a>
<li><strong>Previous message:</strong> <a href="11233.php">Jeff Squyres: "Re: [OMPI devel] SM component init unload"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11235.php">Shamis, Pavel: "Re: [OMPI devel] openib max_cqe"</a>
<li><strong>Reply:</strong> <a href="11235.php">Shamis, Pavel: "Re: [OMPI devel] openib max_cqe"</a>
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

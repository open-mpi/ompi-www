<?
$subject_val = "Re: [OMPI devel] 1.5: does pml DR work?";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Oct  6 03:26:03 2010" -->
<!-- isoreceived="20101006072603" -->
<!-- sent="Wed, 06 Oct 2010 09:25:26 +0200" -->
<!-- isosent="20101006072526" -->
<!-- name="Mouhamed.GUEYE" -->
<!-- email="Mouhamed.GUEYE_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 1.5: does pml DR work?" -->
<!-- id="4CAC2466.1010001_at_bull.net" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="814CDA15-ACD4-42CA-9E55-F01116FA6336_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] 1.5: does pml DR work?<br>
<strong>From:</strong> Mouhamed.GUEYE (<em>Mouhamed.GUEYE_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-10-06 03:25:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8578.php">George Bosilca: "Re: [OMPI devel] 1.5: GM support?"</a>
<li><strong>Previous message:</strong> <a href="8576.php">Ralph Castain: "[OMPI devel] Open MPI v1.4.3 released"</a>
<li><strong>In reply to:</strong> <a href="8575.php">Ralph Castain: "Re: [OMPI devel] 1.5: does pml DR work?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>Before implementing failover over ob1, I first tried to make pml dr work 
<br>
and it did not on systems with multiple btl modules for a same btl 
<br>
component (systems with 2 or more HCA or multi-port HCA for example). 
<br>
This was due to bml r2 removing the unique btl component progress when 
<br>
removing a btl module. Then, the remaining btl module was no longer 
<br>
progressed.
<br>
<p>I managed to get dr work after fixing that but poor performances made me 
<br>
switch to ob1.
<br>
<p>Mouhamed
<br>
<p>Ralph Castain a &#233;crit :
<br>
<span class="quotelev1">&gt; Hasn't worked in years, that I've heard of...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Oct 5, 2010, at 6:56 PM, Jeff Squyres wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev2">&gt;&gt; Do we know if dr in the 1.5 tree works at all?  Should it be removed?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt;&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; For corporate legal information go to:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-8577/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8578.php">George Bosilca: "Re: [OMPI devel] 1.5: GM support?"</a>
<li><strong>Previous message:</strong> <a href="8576.php">Ralph Castain: "[OMPI devel] Open MPI v1.4.3 released"</a>
<li><strong>In reply to:</strong> <a href="8575.php">Ralph Castain: "Re: [OMPI devel] 1.5: does pml DR work?"</a>
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

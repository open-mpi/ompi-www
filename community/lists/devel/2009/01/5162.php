<?
$subject_val = "Re: [OMPI devel] 1.3 PML default choice";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan 13 20:27:38 2009" -->
<!-- isoreceived="20090114012738" -->
<!-- sent="Tue, 13 Jan 2009 20:27:32 -0500" -->
<!-- isosent="20090114012732" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 1.3 PML default choice" -->
<!-- id="8E7883C2-21FF-4219-A38F-C6ACDB4E23A2_at_eecs.utk.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="4B7E567A-A331-46DA-8618-37C8CB997DB8_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] 1.3 PML default choice<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-01-13 20:27:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5163.php">Brian Barrett: "Re: [OMPI devel] 1.3 PML default choice"</a>
<li><strong>Previous message:</strong> <a href="5161.php">Jeff Squyres: "Re: [OMPI devel] 1.3 PML default choice"</a>
<li><strong>In reply to:</strong> <a href="5160.php">Brian Barrett: "Re: [OMPI devel] 1.3 PML default choice"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5163.php">Brian Barrett: "Re: [OMPI devel] 1.3 PML default choice"</a>
<li><strong>Reply:</strong> <a href="5163.php">Brian Barrett: "Re: [OMPI devel] 1.3 PML default choice"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
This topic was raised on the mailing list quite a few times. There is  
<br>
a major difference between the PSM and the MX support. For PSM there  
<br>
is just an MTL, which makes everything a lot simpler. The problem with  
<br>
MX is that we have an MTL and a BTL. In order to figure out which one  
<br>
to use, we have to call the init function and this function initialize  
<br>
MX. The MTL use the default values for this, while the BTL give some  
<br>
hints to the MX library (about how to behave based on the support  
<br>
level we want, i.e. such as who will deal with shared memory or self  
<br>
communications). As there can be only one MX initialization, as the  
<br>
MTL initialize first, the BTL will always get a wrongly initialized MX  
<br>
library (which can generate some performance problems).
<br>
<p>What Brian describe is the best compromise we manage to find few  
<br>
months ago. If you want to get the MX CM to run, you will have to  
<br>
clearly specify on the command line --mca pml cm. All other MTL will  
<br>
have the behavior described on the README.
<br>
<p>&nbsp;&nbsp;&nbsp;george.
<br>
<p>On Jan 13, 2009, at 20:18 , Brian Barrett wrote:
<br>
<p><span class="quotelev1">&gt; On Jan 13, 2009, at 5:48 PM, Patrick Geoffray wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Jeff Squyres wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Gaah!  I specifically asked Patrick and George about this and they  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; said that the README text was fine.  Grr...
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; When I looked at that time, I vaguely remember that _both_ PMLs  
</span><br>
<span class="quotelev2">&gt;&gt; were initialized but CM was eventually used because it was the last  
</span><br>
<span class="quotelev2">&gt;&gt; one. It looked broken, but it worked in the end (MTL was used with  
</span><br>
<span class="quotelev2">&gt;&gt; CM PML). I don't know if that behavior changed since.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I just tested 1.3rc4 with MX and it uses the btl by default.  The  
</span><br>
<span class="quotelev1">&gt; reason is the cm init lowers the priority to 1 unless the MTL that  
</span><br>
<span class="quotelev1">&gt; loaded is psm, in which case it stays at the higher default of 30.   
</span><br>
<span class="quotelev1">&gt; It's a fairly easy fix, I think.  But the last time this was  
</span><br>
<span class="quotelev1">&gt; discussed people in the group had objections to using the MTL by  
</span><br>
<span class="quotelev1">&gt; default with MX.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Brian
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5163.php">Brian Barrett: "Re: [OMPI devel] 1.3 PML default choice"</a>
<li><strong>Previous message:</strong> <a href="5161.php">Jeff Squyres: "Re: [OMPI devel] 1.3 PML default choice"</a>
<li><strong>In reply to:</strong> <a href="5160.php">Brian Barrett: "Re: [OMPI devel] 1.3 PML default choice"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5163.php">Brian Barrett: "Re: [OMPI devel] 1.3 PML default choice"</a>
<li><strong>Reply:</strong> <a href="5163.php">Brian Barrett: "Re: [OMPI devel] 1.3 PML default choice"</a>
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

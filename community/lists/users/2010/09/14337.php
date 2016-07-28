<?
$subject_val = "Re: [OMPI users] Porting Open MPI to ARM: How essential is the opal_sys_timer_get_cycles() function?";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Sep 27 09:38:05 2010" -->
<!-- isoreceived="20100927133805" -->
<!-- sent="Mon, 27 Sep 2010 09:37:59 -0400" -->
<!-- isosent="20100927133759" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Porting Open MPI to ARM: How essential is the opal_sys_timer_get_cycles() function?" -->
<!-- id="B6176C9D-DB76-4329-AE33-20D17A52438C_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="2937AFE7-C237-4CA8-A444-319352AA1C55_at_noao.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] Porting Open MPI to ARM: How essential is the opal_sys_timer_get_cycles() function?<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-09-27 09:37:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14338.php">Terry Dontje: "Re: [OMPI users] [openib] segfault when using openib btl"</a>
<li><strong>Previous message:</strong> <a href="14336.php">Eloi Gaudry: "Re: [OMPI users] [openib] segfault when using openib btl"</a>
<li><strong>In reply to:</strong> <a href="14299.php">Ken Mighell: "[OMPI users] Porting Open MPI to ARM: How essential is the opal_sys_timer_get_cycles() function?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Sep 23, 2010, at 1:24 PM, Ken Mighell wrote:
<br>
<p><span class="quotelev1">&gt; Would a hack written in C suffice?
</span><br>
<p>Assembly is always better, but C should be fine.  If you really want to, could you write it in C and have the compiler generate optimized assembly for you.
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
<li><strong>Next message:</strong> <a href="14338.php">Terry Dontje: "Re: [OMPI users] [openib] segfault when using openib btl"</a>
<li><strong>Previous message:</strong> <a href="14336.php">Eloi Gaudry: "Re: [OMPI users] [openib] segfault when using openib btl"</a>
<li><strong>In reply to:</strong> <a href="14299.php">Ken Mighell: "[OMPI users] Porting Open MPI to ARM: How essential is the opal_sys_timer_get_cycles() function?"</a>
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

<?
$subject_val = "Re: [OMPI devel] 1.3 PML default choice";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan 13 15:14:40 2009" -->
<!-- isoreceived="20090113201440" -->
<!-- sent="Tue, 13 Jan 2009 15:14:35 -0500 (EST)" -->
<!-- isosent="20090113201435" -->
<!-- name="Brian W. Barrett" -->
<!-- email="brbarret_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 1.3 PML default choice" -->
<!-- id="alpine.DEB.1.10.0901131512060.5172_at_marvin.we-be-smart.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="Pine.LNX.4.64.0901132037040.17481_at_kenzo.iwr.uni-heidelberg.de" -->
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
<strong>From:</strong> Brian W. Barrett (<em>brbarret_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-01-13 15:14:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5145.php">Ralph Castain: "Re: [OMPI devel] -display-map"</a>
<li><strong>Previous message:</strong> <a href="5143.php">Bogdan Costescu: "Re: [OMPI devel] 1.3 PML default choice"</a>
<li><strong>In reply to:</strong> <a href="5143.php">Bogdan Costescu: "Re: [OMPI devel] 1.3 PML default choice"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5146.php">Bogdan Costescu: "Re: [OMPI devel] 1.3 PML default choice"</a>
<li><strong>Reply:</strong> <a href="5146.php">Bogdan Costescu: "Re: [OMPI devel] 1.3 PML default choice"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The selection logic for the PML is very confusing and doesn't follow the 
<br>
standard priority selection.  The reasons for this are convoluted and not 
<br>
worth discussing here.  The bottom line, however, is that the OB1 PML will 
<br>
be the default *UNLESS* the PSM (PathScale/Qlogic) MTL can be chosen, in 
<br>
which case the CM PML is used by default.
<br>
<p>Brian
<br>
<p>On Tue, 13 Jan 2009, Bogdan Costescu wrote:
<br>
<p><span class="quotelev1">&gt; On Tue, 13 Jan 2009, Tim Mattox wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The cm PML does not use BTLs..., only MTLs, so
</span><br>
<span class="quotelev2">&gt;&gt; ... the BTL selection is ignored.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; OK, thanks for clarifying this bit, but...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The README for 1.3b2 specifies that CM is now chosen if possible; in my
</span><br>
<span class="quotelev3">&gt;&gt;&gt; trials, when I specify CM+BTL, it doesn't complain and works well.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; However either the default (no options) or OB1+BTL leads to the jumps
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mentioned above, which makes me believe that OB1+BTL is still chosen as
</span><br>
<span class="quotelev3">&gt;&gt;&gt; default, contrary to what the README specifies.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ... this bit is still unclear to me. Should OB1+BTL or CM+MTL be the default 
</span><br>
<span class="quotelev1">&gt; ? I have just tried using &quot;mpi_show_mca_params&quot; for both v1.3b2 and v1.3rc3 
</span><br>
<span class="quotelev1">&gt; and this tells me that:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; pml= (default value)
</span><br>
<span class="quotelev1">&gt; pml_cm_priority=30 (default value)
</span><br>
<span class="quotelev1">&gt; pml_ob1_priority=20 (default value)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; which, from what I know, should lead to CM being chosen as the default. Still 
</span><br>
<span class="quotelev1">&gt; for v1.3b2 OB1 seemed to be chosen; for v1.3rc3 I can't distinguish anymore 
</span><br>
<span class="quotelev1">&gt; from timings as they behave very similarly.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5145.php">Ralph Castain: "Re: [OMPI devel] -display-map"</a>
<li><strong>Previous message:</strong> <a href="5143.php">Bogdan Costescu: "Re: [OMPI devel] 1.3 PML default choice"</a>
<li><strong>In reply to:</strong> <a href="5143.php">Bogdan Costescu: "Re: [OMPI devel] 1.3 PML default choice"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5146.php">Bogdan Costescu: "Re: [OMPI devel] 1.3 PML default choice"</a>
<li><strong>Reply:</strong> <a href="5146.php">Bogdan Costescu: "Re: [OMPI devel] 1.3 PML default choice"</a>
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

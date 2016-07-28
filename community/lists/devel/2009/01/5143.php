<?
$subject_val = "Re: [OMPI devel] 1.3 PML default choice";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan 13 15:00:01 2009" -->
<!-- isoreceived="20090113200001" -->
<!-- sent="Tue, 13 Jan 2009 20:59:55 +0100 (CET)" -->
<!-- isosent="20090113195955" -->
<!-- name="Bogdan Costescu" -->
<!-- email="Bogdan.Costescu_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 1.3 PML default choice" -->
<!-- id="Pine.LNX.4.64.0901132037040.17481_at_kenzo.iwr.uni-heidelberg.de" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="ea86ce220901131028g41083b23j7f859fc51274fe39_at_mail.gmail.com" -->
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
<strong>From:</strong> Bogdan Costescu (<em>Bogdan.Costescu_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-01-13 14:59:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5144.php">Brian W. Barrett: "Re: [OMPI devel] 1.3 PML default choice"</a>
<li><strong>Previous message:</strong> <a href="5142.php">Jeff Squyres: "Re: [OMPI devel] OpenMPI question"</a>
<li><strong>In reply to:</strong> <a href="5136.php">Tim Mattox: "Re: [OMPI devel] 1.3 PML default choice"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5144.php">Brian W. Barrett: "Re: [OMPI devel] 1.3 PML default choice"</a>
<li><strong>Reply:</strong> <a href="5144.php">Brian W. Barrett: "Re: [OMPI devel] 1.3 PML default choice"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Tue, 13 Jan 2009, Tim Mattox wrote:
<br>
<p><span class="quotelev1">&gt; The cm PML does not use BTLs..., only MTLs, so
</span><br>
<span class="quotelev1">&gt; ... the BTL selection is ignored.
</span><br>
<p>OK, thanks for clarifying this bit, but...
<br>
<p><span class="quotelev2">&gt;&gt; The README for 1.3b2 specifies that CM is now chosen if possible; in my
</span><br>
<span class="quotelev2">&gt;&gt; trials, when I specify CM+BTL, it doesn't complain and works well.
</span><br>
<span class="quotelev2">&gt;&gt; However either the default (no options) or OB1+BTL leads to the jumps
</span><br>
<span class="quotelev2">&gt;&gt; mentioned above, which makes me believe that OB1+BTL is still chosen as
</span><br>
<span class="quotelev2">&gt;&gt; default, contrary to what the README specifies.
</span><br>
<p>... this bit is still unclear to me. Should OB1+BTL or CM+MTL be the 
<br>
default ? I have just tried using &quot;mpi_show_mca_params&quot; for both 
<br>
v1.3b2 and v1.3rc3 and this tells me that:
<br>
<p>pml= (default value)
<br>
pml_cm_priority=30 (default value)
<br>
pml_ob1_priority=20 (default value)
<br>
<p>which, from what I know, should lead to CM being chosen as the 
<br>
default. Still for v1.3b2 OB1 seemed to be chosen; for v1.3rc3 I can't 
<br>
distinguish anymore from timings as they behave very similarly.
<br>
<p><pre>
-- 
Bogdan Costescu
IWR, University of Heidelberg, INF 368, D-69120 Heidelberg, Germany
Phone: +49 6221 54 8240, Fax: +49 6221 54 8850
E-mail: bogdan.costescu_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5144.php">Brian W. Barrett: "Re: [OMPI devel] 1.3 PML default choice"</a>
<li><strong>Previous message:</strong> <a href="5142.php">Jeff Squyres: "Re: [OMPI devel] OpenMPI question"</a>
<li><strong>In reply to:</strong> <a href="5136.php">Tim Mattox: "Re: [OMPI devel] 1.3 PML default choice"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5144.php">Brian W. Barrett: "Re: [OMPI devel] 1.3 PML default choice"</a>
<li><strong>Reply:</strong> <a href="5144.php">Brian W. Barrett: "Re: [OMPI devel] 1.3 PML default choice"</a>
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

<?
$subject_val = "Re: [OMPI devel] DDT and spawn issue?";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jul 15 12:04:31 2009" -->
<!-- isoreceived="20090715160431" -->
<!-- sent="Wed, 15 Jul 2009 12:04:50 -0400" -->
<!-- isosent="20090715160450" -->
<!-- name="Rainer Keller" -->
<!-- email="keller_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] DDT and spawn issue?" -->
<!-- id="200907151204.50816.keller_at_ornl.gov" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="D2063199-4268-4E01-ADF8-F4CA6034D0E2_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] DDT and spawn issue?<br>
<strong>From:</strong> Rainer Keller (<em>keller_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-07-15 12:04:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6428.php">Eugene Loh: "Re: [OMPI devel] [OMPI users] where can i get a tracing tool"</a>
<li><strong>Previous message:</strong> <a href="6426.php">Ralph Castain: "Re: [OMPI devel] DDT and spawn issue?"</a>
<li><strong>In reply to:</strong> <a href="6424.php">Jeff Squyres: "[OMPI devel] DDT and spawn issue?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6429.php">Jeff Squyres: "Re: [OMPI devel] DDT and spawn issue?"</a>
<li><strong>Reply:</strong> <a href="6429.php">Jeff Squyres: "Re: [OMPI devel] DDT and spawn issue?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Jeff,
<br>
Ralph and Edgar send fwd an email about this.
<br>
We (George and myselve) are currently looking into this.
<br>
<p>With the changes we have I can get IBM/spawn to work &quot;sometimes&quot;, aka 
<br>
sometimes, it segfaults.
<br>
<p>Thanks,
<br>
Rainer
<br>
<p><p><p><p>On Wednesday 15 July 2009 11:50:13 am Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; I [very briefly] read about the DDT spawn issues, so I went to look at
</span><br>
<span class="quotelev1">&gt; ompi/op/op.c.  I notice that there's a new comment above the op
</span><br>
<span class="quotelev1">&gt; datatype&lt;--&gt;op map construction area that says:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      /* XXX TODO */
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; svn blame says:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   21641   rusraink     /* XXX TODO */
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; r21641 is the big merge from the past weekend where the DDT split came
</span><br>
<span class="quotelev1">&gt; in.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Has this area been looked at and the comment is out of date?  Or does
</span><br>
<span class="quotelev1">&gt; it need to be updated with new mappings?  (I honestly have not looked
</span><br>
<span class="quotelev1">&gt; any farther than this -- the new comment caught my eye)
</span><br>
<p><pre>
-- 
------------------------------------------------------------------------
Rainer Keller, PhD                  Tel: +1 (865) 241-6293
Oak Ridge National Lab          Fax: +1 (865) 241-4811
PO Box 2008 MS 6164           Email: keller_at_[hidden]
Oak Ridge, TN 37831-2008    AIM/Skype: rusraink
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6428.php">Eugene Loh: "Re: [OMPI devel] [OMPI users] where can i get a tracing tool"</a>
<li><strong>Previous message:</strong> <a href="6426.php">Ralph Castain: "Re: [OMPI devel] DDT and spawn issue?"</a>
<li><strong>In reply to:</strong> <a href="6424.php">Jeff Squyres: "[OMPI devel] DDT and spawn issue?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6429.php">Jeff Squyres: "Re: [OMPI devel] DDT and spawn issue?"</a>
<li><strong>Reply:</strong> <a href="6429.php">Jeff Squyres: "Re: [OMPI devel] DDT and spawn issue?"</a>
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

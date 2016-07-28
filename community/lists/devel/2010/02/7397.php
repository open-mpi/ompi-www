<?
$subject_val = "Re: [OMPI devel] failure with zero-length Reduce() andbothsbuf=rbuf=NULL";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb 10 11:59:12 2010" -->
<!-- isoreceived="20100210165912" -->
<!-- sent="Wed, 10 Feb 2010 13:59:07 -0300" -->
<!-- isosent="20100210165907" -->
<!-- name="Lisandro Dalcin" -->
<!-- email="dalcinl_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] failure with zero-length Reduce() andbothsbuf=rbuf=NULL" -->
<!-- id="e7ba66e41002100859g306680afjcd98cc24b92dac95_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="4B72E203.8050606_at_sun.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] failure with zero-length Reduce() andbothsbuf=rbuf=NULL<br>
<strong>From:</strong> Lisandro Dalcin (<em>dalcinl_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-02-10 11:59:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7398.php">Jeff Squyres: "Re: [OMPI devel] failure with zero-length Reduce()andbothsbuf=rbuf=NULL"</a>
<li><strong>Previous message:</strong> <a href="7396.php">Lisandro Dalcin: "Re: [OMPI devel] failure with zero-length Reduce() andbothsbuf=rbuf=NULL"</a>
<li><strong>In reply to:</strong> <a href="7395.php">Eugene Loh: "Re: [OMPI devel] failure with zero-length Reduce()	andbothsbuf=rbuf=NULL"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7398.php">Jeff Squyres: "Re: [OMPI devel] failure with zero-length Reduce()andbothsbuf=rbuf=NULL"</a>
<li><strong>Reply:</strong> <a href="7398.php">Jeff Squyres: "Re: [OMPI devel] failure with zero-length Reduce()andbothsbuf=rbuf=NULL"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 10 February 2010 13:42, Eugene Loh &lt;Eugene.Loh_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; Here is a related case.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If I remember correctly, the HPCC pingpong test synchronizes occasionally by
</span><br>
<span class="quotelev1">&gt; having one process send a zero-byte broadcast to all other processes.
</span><br>
<span class="quotelev1">&gt; &#194;&#160;What's a zero-byte broadcast? &#194;&#160;Well, some MPIs apparently send no data, but
</span><br>
<span class="quotelev1">&gt; do have synchronization semantics. &#194;&#160;(No non-root process can exit before the
</span><br>
<span class="quotelev1">&gt; root process has entered.) &#194;&#160;Other MPIs treat the zero-byte broadcasts as
</span><br>
<span class="quotelev1">&gt; no-ops; &#194;&#160;there is no synchronization and then timing results from the HPCC
</span><br>
<span class="quotelev1">&gt; pingpong test are very misleading. &#194;&#160;So far as I can tell, the MPI standard
</span><br>
<span class="quotelev1">&gt; doesn't address which behavior is correct.
</span><br>
<p>Yep... for p2p communication things are more clear (and behavior more
<br>
consistens in the MPI's out there) regarding zero-length messages...
<br>
IMHO, collectives should be non-op only in the sense that no actual
<br>
reduction is made because there are no elements to operate on. I mean,
<br>
if Reduce(count=1) implies a sync, Reduce(count=0) should also imply a
<br>
sync...
<br>
<p><p><span class="quotelev1">&gt; The test strikes me as
</span><br>
<span class="quotelev1">&gt; deficient: &#194;&#160;it would have been just as easy to have a single-word broadcast
</span><br>
<span class="quotelev1">&gt; to implement the synchronization they were looking for.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>Or use MPI_Barrier() ...
<br>
<p><p><pre>
-- 
Lisandro Dalcin
---------------
Centro Internacional de M&#195;&#169;todos Computacionales en Ingenier&#195;&#173;a (CIMEC)
Instituto de Desarrollo Tecnol&#195;&#179;gico para la Industria Qu&#195;&#173;mica (INTEC)
Consejo Nacional de Investigaciones Cient&#195;&#173;ficas y T&#195;&#169;cnicas (CONICET)
PTLC - G&#195;&#188;emes 3450, (3000) Santa Fe, Argentina
Tel/Fax: +54-(0)342-451.1594
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7398.php">Jeff Squyres: "Re: [OMPI devel] failure with zero-length Reduce()andbothsbuf=rbuf=NULL"</a>
<li><strong>Previous message:</strong> <a href="7396.php">Lisandro Dalcin: "Re: [OMPI devel] failure with zero-length Reduce() andbothsbuf=rbuf=NULL"</a>
<li><strong>In reply to:</strong> <a href="7395.php">Eugene Loh: "Re: [OMPI devel] failure with zero-length Reduce()	andbothsbuf=rbuf=NULL"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7398.php">Jeff Squyres: "Re: [OMPI devel] failure with zero-length Reduce()andbothsbuf=rbuf=NULL"</a>
<li><strong>Reply:</strong> <a href="7398.php">Jeff Squyres: "Re: [OMPI devel] failure with zero-length Reduce()andbothsbuf=rbuf=NULL"</a>
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

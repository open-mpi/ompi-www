<?
$subject_val = "Re: [OMPI devel] SM init failures";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Mar 27 10:16:12 2009" -->
<!-- isoreceived="20090327141612" -->
<!-- sent="Fri, 27 Mar 2009 06:15:38 -0800" -->
<!-- isosent="20090327141538" -->
<!-- name="Eugene Loh" -->
<!-- email="Eugene.Loh_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] SM init failures" -->
<!-- id="49CCDF8A.3090101_at_sun.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="B160C172-2531-4485-8E7C-ABB5A7CB6838_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] SM init failures<br>
<strong>From:</strong> Eugene Loh (<em>Eugene.Loh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-03-27 10:15:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5717.php">Tim Mattox: "Re: [OMPI devel] SM init failures"</a>
<li><strong>Previous message:</strong> <a href="5715.php">Jeff Squyres: "[OMPI devel] cisco mtt failures"</a>
<li><strong>In reply to:</strong> <a href="5712.php">Josh Hursey: "Re: [OMPI devel] SM init failures"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5717.php">Tim Mattox: "Re: [OMPI devel] SM init failures"</a>
<li><strong>Reply:</strong> <a href="5717.php">Tim Mattox: "Re: [OMPI devel] SM init failures"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Josh Hursey wrote:
<br>
<p><span class="quotelev1">&gt; Sif is also running the coll_hierarch component on some of those  
</span><br>
<span class="quotelev1">&gt; tests which has caused some additional problems. I don't know if that  
</span><br>
<span class="quotelev1">&gt; is related or not.
</span><br>
<p>Indeed.  Many of the MTT stack traces (for both 1.3.1 and 1.3.2 and that 
<br>
have seg faults and call out mca_btl_sm.so) do involve collectives 
<br>
and/or have mca_coll_hierarch.so in their stack traces.  I could well 
<br>
imagine this is the culprit, though I do not know for sure.
<br>
<p>Ralph Castain wrote:
<br>
<p><span class="quotelev1">&gt; Hmmm...Eugene, you need to be a tad less sensitive. Nobody was  
</span><br>
<span class="quotelev1">&gt; attempting to indict you or in any way attack you or your code.
</span><br>
<p>Yes, I know, though thank you for saying so.  I was overdoing the 
<br>
defensive rhetoric trying to be funny, but I confess it's nervous 
<br>
humor.  There was stuff in the sm code that I couldn't see how it was 
<br>
100% robust.  Nevertheless, I let that style remain in the code with my 
<br>
changes... perhaps even pushing it a little bit.  My putbacks include a 
<br>
comment or two to that effect.  E.g., 
<br>
<a href="https://svn.open-mpi.org/source/xref/ompi-trunk/ompi/mca/btl/sm/btl_sm.c?r=20774#523">https://svn.open-mpi.org/source/xref/ompi-trunk/ompi/mca/btl/sm/btl_sm.c?r=20774#523</a> 
<br>
.  I understand why the occasional failures that Jeff and Terry saw did 
<br>
not hold up 1.3.1, but I'd really like to understand them and fix them.  
<br>
But at 0.01% fail rate (&lt;0.001% for me... I've never seen it in 100Ks of 
<br>
runs), all I can do about etiology and fixes is speculate.
<br>
<p>Okay, joke overdone and nervousness no longer funny.  Indeed, annoying.  
<br>
I stop.
<br>
<p><span class="quotelev1">&gt; Since we clearly see problems on sif, and Josh has indicated a  
</span><br>
<span class="quotelev1">&gt; willingness to help with debugging, this might be a place to start 
</span><br>
<span class="quotelev1">&gt; the  investigation. If asked nicely, they might even be willing to 
</span><br>
<span class="quotelev1">&gt; grant  access to the machine, if that would help.
</span><br>
<p>Maybe a starting point would be running IU_Sif without coll_hierarch and 
<br>
seeing where we stand.
<br>
<p>And, again, my gut feel is that the failures are unrelated to the 0.01% 
<br>
failures that Jeff and Terry were seeing.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5717.php">Tim Mattox: "Re: [OMPI devel] SM init failures"</a>
<li><strong>Previous message:</strong> <a href="5715.php">Jeff Squyres: "[OMPI devel] cisco mtt failures"</a>
<li><strong>In reply to:</strong> <a href="5712.php">Josh Hursey: "Re: [OMPI devel] SM init failures"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5717.php">Tim Mattox: "Re: [OMPI devel] SM init failures"</a>
<li><strong>Reply:</strong> <a href="5717.php">Tim Mattox: "Re: [OMPI devel] SM init failures"</a>
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

<?
$subject_val = "Re: [OMPI devel] tm-less tm module";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jan 25 13:21:25 2016" -->
<!-- isoreceived="20160125182125" -->
<!-- sent="Mon, 25 Jan 2016 11:21:23 -0700" -->
<!-- isosent="20160125182123" -->
<!-- name="Nathan Hjelm" -->
<!-- email="hjelmn_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] tm-less tm module" -->
<!-- id="20160125182123.GB61377_at_mordor.lanl.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="0E22F599-2818-4660-9241-61BA0757BFCC_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] tm-less tm module<br>
<strong>From:</strong> Nathan Hjelm (<em>hjelmn_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-01-25 13:21:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18510.php">Ralph Castain: "Re: [OMPI devel] tm-less tm module"</a>
<li><strong>Previous message:</strong> <a href="18508.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] tm-less tm module"</a>
<li><strong>In reply to:</strong> <a href="18508.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] tm-less tm module"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18510.php">Ralph Castain: "Re: [OMPI devel] tm-less tm module"</a>
<li><strong>Reply:</strong> <a href="18510.php">Ralph Castain: "Re: [OMPI devel] tm-less tm module"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mon, Jan 25, 2016 at 05:55:20PM +0000, Jeff Squyres (jsquyres) wrote:
<br>
<span class="quotelev1">&gt; Hmm.  I'm of split mind here.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I can see what Howard is saying here -- adding complexity is usually a bad thing.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; But we have gotten these problem reports multiple times over the years: someone *thinking* that they have built with launcher support X (e.g., TM, LSF), but then figuring out later that things aren't running as expected, and after a bunch of work, figure out that it's because they didn't build with support X.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Gilles idea actually sounds interesting -- if the tm module detect some of the sentinel PBS/TM env variables, emit a show_help() if we don't have full TM support compiled in.  This would actually save some users a bunch of time and frustration.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --&gt; Keep in mind that the SLRUM launcher is different, because it's all CLI-based (not API-based) and therefore we always build it (because we don't have to find headers and libraries).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; FWIW, we do have precedent of having extra MCA params for users to turn off warnings that they don't want to see.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I guess the question here is: is there a valid use case for running in PBS/Torque and *not* wanting to use the TM launcher?
</span><br>
<p>Once case comes to mind. In the case of Cray systems that unfortunately
<br>
run Moab/Toque we can launch using either alps or torque (Howard correct
<br>
me if I am wrong). When Sam and I originally wrote the XE support we
<br>
used alps instead of torque. I am not entirely sure what we do now.
<br>
<p>-Nathan
<br>
<p>
<br><hr>
<ul>
<li>application/pgp-signature attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-18509/01-part">stored</a>
</ul>
<!-- attachment="01-part" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18510.php">Ralph Castain: "Re: [OMPI devel] tm-less tm module"</a>
<li><strong>Previous message:</strong> <a href="18508.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] tm-less tm module"</a>
<li><strong>In reply to:</strong> <a href="18508.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] tm-less tm module"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18510.php">Ralph Castain: "Re: [OMPI devel] tm-less tm module"</a>
<li><strong>Reply:</strong> <a href="18510.php">Ralph Castain: "Re: [OMPI devel] tm-less tm module"</a>
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

<?
$subject_val = "Re: [OMPI devel] Specifying networks/APIs for OMPI (was: topic for agenda)";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Oct 20 18:37:11 2015" -->
<!-- isoreceived="20151020223711" -->
<!-- sent="Tue, 20 Oct 2015 15:37:05 -0700" -->
<!-- isosent="20151020223705" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Specifying networks/APIs for OMPI (was: topic for agenda)" -->
<!-- id="CAAvDA16NknU3Ej4xVF+di9qfGrp=F=UkVotH+7sucEh_A7-+mA_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="D18F5ACD-9165-4A06-A9BF-8550F420BF87_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Specifying networks/APIs for OMPI (was: topic for agenda)<br>
<strong>From:</strong> Paul Hargrove (<em>phhargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-10-20 18:37:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18220.php">Ralph Castain: "Re: [OMPI devel] orte-dvm / orte-submit race condition"</a>
<li><strong>Previous message:</strong> <a href="18218.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Specifying networks/APIs for OMPI (was: topic for	agenda)"</a>
<li><strong>In reply to:</strong> <a href="18218.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Specifying networks/APIs for OMPI (was: topic for	agenda)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18231.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Specifying networks/APIs for OMPI (was: topic for	agenda)"</a>
<li><strong>Reply:</strong> <a href="18231.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Specifying networks/APIs for OMPI (was: topic for	agenda)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Tue, Oct 20, 2015 at 3:00 PM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]
<br>
<span class="quotelev1">&gt; wrote:
</span><br>
<p><span class="quotelev1">&gt; I don't think it gets up to 7 MCA params to guarantee a specific API path
</span><br>
<span class="quotelev1">&gt; is used to get to a specific network / port, but your overall point is fair.
</span><br>
<p><p>Jeff, it sounds to me you are responding to a different problem than the
<br>
one I posed in my previous email.
<br>
<p>I am suggesting that a user wishes to NOT USE a specific port at all.
<br>
In other words, I want to &quot;obstruct&quot; all of the API paths that might reach
<br>
that port.
<br>
However, they do want to use some other port of the same type - which means
<br>
they cannot disable entire BTLs or MTLs.
<br>
<p>Unless I am missing something, they need to consider each possible API path
<br>
through OMPI and pass a corresponding MCA param, such
<br>
as btl_openib_if_exclude, to prevent that path from selecting the port in
<br>
question.
<br>
The problem is that the user may not know all the API paths that need to
<br>
have a corresponding exclude.
<br>
This is, in some ways, similar to the initial problem of how to disable all
<br>
uses of mxm - it currently requires knowledge of all API paths that &quot;might
<br>
get you there&quot;.
<br>
<p>I am now seeing my concern turn in another direction, because a quick grep
<br>
for &quot;_exclude&quot; in the OMPI 1.10.1 source turned up matches in only the
<br>
openbl and usnic BLTs, and in oob_tcp.
<br>
Is it really the case that an end user cannot instruct mxm, psm, psm2,
<br>
portals4 or ofi not to use a specific IB port via mpirun?
<br>
Does this really require resorting to library-specific env vars (which is
<br>
even worse than the need for a long list of MCA params)?
<br>
<p><p>Just a reminder: I am *not* a user.
<br>
If you choose to ignore me, it won't hurt my feelings.
<br>
Even if you choose to pursue the concerns I've raised, in the end may not
<br>
effect even a single end-user.
<br>
I brought up these scenarios because I thought they bore some relation to
<br>
the &quot;disable all use of mxm&quot; problem under discussion.
<br>
Specifically they share the complications that arise from having multiple
<br>
&quot;API paths&quot; to reach the same entity (which is either a library or a port).
<br>
<p><p>-Paul
<br>
<p><p><pre>
-- 
Paul H. Hargrove                          PHHargrove_at_[hidden]
Computer Languages &amp; Systems Software (CLaSS) Group
Computer Science Department               Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-18219/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18220.php">Ralph Castain: "Re: [OMPI devel] orte-dvm / orte-submit race condition"</a>
<li><strong>Previous message:</strong> <a href="18218.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Specifying networks/APIs for OMPI (was: topic for	agenda)"</a>
<li><strong>In reply to:</strong> <a href="18218.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Specifying networks/APIs for OMPI (was: topic for	agenda)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18231.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Specifying networks/APIs for OMPI (was: topic for	agenda)"</a>
<li><strong>Reply:</strong> <a href="18231.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Specifying networks/APIs for OMPI (was: topic for	agenda)"</a>
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

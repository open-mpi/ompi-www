<?
$subject_val = "Re: [OMPI devel] Confused topic for developer's meeting";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Feb 26 20:47:18 2016" -->
<!-- isoreceived="20160227014718" -->
<!-- sent="Sat, 27 Feb 2016 10:47:17 +0900" -->
<!-- isosent="20160227014717" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles.gouaillardet_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Confused topic for developer's meeting" -->
<!-- id="CAAkFZ5tSPGdQisVjo_YXpMNjpXd9xWH0CSEV7NGVoH11AR8C4Q_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="6B1D48C6-4FBF-4ABE-9F82-C0FBA07E8134_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Confused topic for developer's meeting<br>
<strong>From:</strong> Gilles Gouaillardet (<em>gilles.gouaillardet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-02-26 20:47:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18639.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] error while compiling openmpi"</a>
<li><strong>Previous message:</strong> <a href="18637.php">Sylvain Jeaugey: "Re: [OMPI devel] Crash in orte_iof_hnp_read_local_handler"</a>
<li><strong>In reply to:</strong> <a href="18634.php">Ralph Castain: "[OMPI devel] Confused topic for developer's meeting"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ralph,
<br>
<p>The goal here is to allow vendor to distribute binary orte frameworks
<br>
(on top of binary components they can already distribute) that can be used
<br>
by a user compiled &quot;stock&quot; openmpi library).
<br>
<p>Did I get it right so far ?
<br>
<p><p>I gave it some thoughts and found that could be simplified.
<br>
<p>My understanding is that such frameworks can only be used by 3rd party
<br>
component(s) from an existing framework, am I right ?
<br>
<p>In this case, what about creating libopen-rte-ext.so with all the 3rd party
<br>
frameworks (one library in case two frameworks need each other, and avoid
<br>
circular dependencies). libopen-rte-ext.so does depend on libopen-rte.so,
<br>
and 3rd party components depend on both rte libs.
<br>
Build order is important :
<br>
- libopen-rte.so
<br>
- libopen-rte-ext.so
<br>
- components
<br>
But there is no circular build dependencies (e.g. libopen-rte.so does not
<br>
depend on libopen-rte-ext.so), and there is no need to create an other
<br>
project.
<br>
The only restriction I can think of is it is impossible that 3rd
<br>
party frameworks from vendor A and vendor B depend on each other. There
<br>
could be frameworks from different vendors as long as they use distinct lib
<br>
names for their extended orte lib.
<br>
<p><p>Any thoughts ?
<br>
<p>Gilles
<br>
<p>On Saturday, February 27, 2016, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; There was some confusion yesterday at the developer&#226;&#128;&#153;s meeting over a topic
</span><br>
<span class="quotelev1">&gt; regarding framework dependencies. I apologize - I should have looked over
</span><br>
<span class="quotelev1">&gt; the agenda more closely in advance to ensure I recalled everything. Instead
</span><br>
<span class="quotelev1">&gt; of the topic I had wanted to discuss, we wound up discussing embedding
</span><br>
<span class="quotelev1">&gt; dependency arguments in component definitions.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; What I really wanted to raise was the issue of statically including all
</span><br>
<span class="quotelev1">&gt; base framework definitions in the core library. In other words, if you want
</span><br>
<span class="quotelev1">&gt; to define a new framework for ORTE, you _must_ put the framework header and
</span><br>
<span class="quotelev1">&gt; the base directory in libopen-rte. This makes it impossible for a 3rd party
</span><br>
<span class="quotelev1">&gt; to add an ORTE framework - they have to get the OMPI community to add it
</span><br>
<span class="quotelev1">&gt; upstream first.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Note that you _can_ add components dynamically - you just can&#226;&#128;&#153;t add a
</span><br>
<span class="quotelev1">&gt; framework.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The only solution a 3rd party has today is to create another project layer
</span><br>
<span class="quotelev1">&gt; in the code, and put the framework there. However, this may be somewhat
</span><br>
<span class="quotelev1">&gt; limiting due to circular build dependencies if, for example, an ORTE
</span><br>
<span class="quotelev1">&gt; component needed to reference the new framework, and the new
</span><br>
<span class="quotelev1">&gt; project/framework has an explicit link to libopen-rte.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Resolving this would require that we dynamically load the frameworks
</span><br>
<span class="quotelev1">&gt; themselves, and not just the components. This point is what led to Jeff&#226;&#128;&#153;s
</span><br>
<span class="quotelev1">&gt; proposal about dependencies - however, the dependency definitions are not
</span><br>
<span class="quotelev1">&gt; _required_ in order to make this change.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So the question to the community is: does anyone see an issue with making
</span><br>
<span class="quotelev1">&gt; frameworks into dll&#226;&#128;&#153;s? Obviously, this approach won&#226;&#128;&#153;t work for static
</span><br>
<span class="quotelev1">&gt; builds, but that is a separate issue.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden] &lt;javascript:;&gt;
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2016/02/18634.php">http://www.open-mpi.org/community/lists/devel/2016/02/18634.php</a>
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-18638/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18639.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] error while compiling openmpi"</a>
<li><strong>Previous message:</strong> <a href="18637.php">Sylvain Jeaugey: "Re: [OMPI devel] Crash in orte_iof_hnp_read_local_handler"</a>
<li><strong>In reply to:</strong> <a href="18634.php">Ralph Castain: "[OMPI devel] Confused topic for developer's meeting"</a>
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

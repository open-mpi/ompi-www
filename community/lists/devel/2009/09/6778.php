<?
$subject_val = "Re: [OMPI devel] RFC - &quot;system-wide-only&quot; MCA parameters";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Sep  4 10:54:39 2009" -->
<!-- isoreceived="20090904145439" -->
<!-- sent="Fri, 4 Sep 2009 08:54:32 -0600" -->
<!-- isosent="20090904145432" -->
<!-- name="Kenneth Lloyd" -->
<!-- email="kenneth.lloyd_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC - &amp;quot;system-wide-only&amp;quot; MCA parameters" -->
<!-- id="FE725DD033DC40CEB8E1E679D9FB7993_at_wattp4" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="0DAF0173-5825-4A77-B553-024415047BD8_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RFC - &quot;system-wide-only&quot; MCA parameters<br>
<strong>From:</strong> Kenneth Lloyd (<em>kenneth.lloyd_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-09-04 10:54:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6779.php">Sylvain Jeaugey: "Re: [OMPI devel] Deadlock on openib when using hindexed types"</a>
<li><strong>Previous message:</strong> <a href="6777.php">Sylvain Jeaugey: "Re: [OMPI devel] RFC - &quot;system-wide-only&quot; MCA parameters"</a>
<li><strong>In reply to:</strong> <a href="6776.php">Ralph Castain: "Re: [OMPI devel] RFC - &quot;system-wide-only&quot; MCA parameters"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6773.php">Sylvain Jeaugey: "Re: [OMPI devel] RFC - &quot;system-wide-only&quot; MCA parameters"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ralph, and all,
<br>
<p>The Japanese have a term poka-yoke which means &quot;fail-safing&quot;. This is an
<br>
excellent concept to apply.  The term does not mean covering all unintended
<br>
consequences of error and omission, though.
<br>
<p>If folks are downloading OMPI (or any software) for unauthorized purposes,
<br>
that seems a policy problem. If it happens more that once or twice in a
<br>
lifetime, or ever in a production environment, it is an indication of a
<br>
system run amok.
<br>
<p>I'm for a root (sysadmin) privilege for setting mca parameters.
<br>
<p>Ken
<br>
<p><span class="quotelev1">&gt; -----Original Message-----
</span><br>
<span class="quotelev1">&gt; From: devel-bounces_at_[hidden] 
</span><br>
<span class="quotelev1">&gt; [mailto:devel-bounces_at_[hidden]] On Behalf Of Ralph Castain
</span><br>
<span class="quotelev1">&gt; Sent: Friday, September 04, 2009 8:28 AM
</span><br>
<span class="quotelev1">&gt; To: Open MPI Developers
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI devel] RFC - &quot;system-wide-only&quot; MCA parameters
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Just want to make this very clear, since other LANL people 
</span><br>
<span class="quotelev1">&gt; are on this list.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am in no way saying that LANL users are ill-intentioned or 
</span><br>
<span class="quotelev1">&gt; deliberately attempting to circumvent system restrictions. 
</span><br>
<span class="quotelev1">&gt; See my other note for the most common scenarios that lead to 
</span><br>
<span class="quotelev1">&gt; this problem and you will see that is the case.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I do not believe this will fully achieve the goal you seek as 
</span><br>
<span class="quotelev1">&gt; it has been attempted before - it helped, but doesn't fully succeed.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; That said, I do not oppose implementing it as it -does- help 
</span><br>
<span class="quotelev1">&gt; alleviate the problem.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Please also note that - if you are worried about problems 
</span><br>
<span class="quotelev1">&gt; caused when tuning - it is often the case that combinations 
</span><br>
<span class="quotelev1">&gt; of param values cause trouble as opposed to the value of a 
</span><br>
<span class="quotelev1">&gt; single param (e.g., when specifying QP buffer sizes). I'm not 
</span><br>
<span class="quotelev1">&gt; sure how your proposal will deal with that situation, but I 
</span><br>
<span class="quotelev1">&gt; leave that to you. :-)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Sep 4, 2009, at 7:58 AM, Arthur Huillet wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Hi,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Ralph Castain wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Let me point out the obvious since this has plagued us at 
</span><br>
<span class="quotelev1">&gt; LANL with 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; regard to this concept. If a user wants to do something different, 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; all they have to do is download and build their own copy of OMPI.
</span><br>
<span class="quotelev2">&gt; &gt; We are well aware of that. It is relatively easy for a user to 
</span><br>
<span class="quotelev2">&gt; &gt; circumvent the limitation...
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; My point here: this concept can help, but it should in no way be 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; viewed as a solution to the problem you are trying to 
</span><br>
<span class="quotelev1">&gt; solve. It is at 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; best a minor obstacle as we made it very simple for a user to 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; circumvent such measures.
</span><br>
<span class="quotelev2">&gt; &gt; ... however the problem we are trying to solve is that some 
</span><br>
<span class="quotelev1">&gt; users may 
</span><br>
<span class="quotelev2">&gt; &gt; inadvertantly modify parameters that they should not, for 
</span><br>
<span class="quotelev1">&gt; example when 
</span><br>
<span class="quotelev2">&gt; &gt; playing around with MCA parameters in order to &quot;tune&quot;
</span><br>
<span class="quotelev2">&gt; &gt; their application.
</span><br>
<span class="quotelev2">&gt; &gt; System wide parameters make it possible to give a message 
</span><br>
<span class="quotelev1">&gt; to the user 
</span><br>
<span class="quotelev2">&gt; &gt; saying he is not allowed to do what he tried to do, and 
</span><br>
<span class="quotelev1">&gt; this is a nice 
</span><br>
<span class="quotelev2">&gt; &gt; to have feature.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; We are defending the system against users who are not ill- 
</span><br>
<span class="quotelev2">&gt; &gt; intentioned, but simply do not always know what they are doing when 
</span><br>
<span class="quotelev2">&gt; &gt; they change parameters. System wide parameters do help in this area.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; --
</span><br>
<span class="quotelev2">&gt; &gt; Greetings, A. Huillet
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
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
<li><strong>Next message:</strong> <a href="6779.php">Sylvain Jeaugey: "Re: [OMPI devel] Deadlock on openib when using hindexed types"</a>
<li><strong>Previous message:</strong> <a href="6777.php">Sylvain Jeaugey: "Re: [OMPI devel] RFC - &quot;system-wide-only&quot; MCA parameters"</a>
<li><strong>In reply to:</strong> <a href="6776.php">Ralph Castain: "Re: [OMPI devel] RFC - &quot;system-wide-only&quot; MCA parameters"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6773.php">Sylvain Jeaugey: "Re: [OMPI devel] RFC - &quot;system-wide-only&quot; MCA parameters"</a>
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

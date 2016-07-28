<?
$subject_val = "Re: [OMPI devel] RFC - &quot;system-wide-only&quot; MCA parameters";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Sep  4 10:28:25 2009" -->
<!-- isoreceived="20090904142825" -->
<!-- sent="Fri, 4 Sep 2009 08:28:11 -0600" -->
<!-- isosent="20090904142811" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC - &amp;quot;system-wide-only&amp;quot; MCA parameters" -->
<!-- id="0DAF0173-5825-4A77-B553-024415047BD8_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="4AA11D21.3080301_at_bull.net" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-09-04 10:28:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6777.php">Sylvain Jeaugey: "Re: [OMPI devel] RFC - &quot;system-wide-only&quot; MCA parameters"</a>
<li><strong>Previous message:</strong> <a href="6775.php">Ralph Castain: "Re: [OMPI devel] RFC - &quot;system-wide-only&quot; MCA parameters"</a>
<li><strong>In reply to:</strong> <a href="6772.php">Arthur Huillet: "Re: [OMPI devel] RFC - &quot;system-wide-only&quot; MCA parameters"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6778.php">Kenneth Lloyd: "Re: [OMPI devel] RFC - &quot;system-wide-only&quot; MCA parameters"</a>
<li><strong>Reply:</strong> <a href="6778.php">Kenneth Lloyd: "Re: [OMPI devel] RFC - &quot;system-wide-only&quot; MCA parameters"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Just want to make this very clear, since other LANL people are on this  
<br>
list.
<br>
<p>I am in no way saying that LANL users are ill-intentioned or  
<br>
deliberately attempting to circumvent system restrictions. See my  
<br>
other note for the most common scenarios that lead to this problem and  
<br>
you will see that is the case.
<br>
<p>I do not believe this will fully achieve the goal you seek as it has  
<br>
been attempted before - it helped, but doesn't fully succeed.
<br>
<p>That said, I do not oppose implementing it as it -does- help alleviate  
<br>
the problem.
<br>
<p>Please also note that - if you are worried about problems caused when  
<br>
tuning - it is often the case that combinations of param values cause  
<br>
trouble as opposed to the value of a single param (e.g., when  
<br>
specifying QP buffer sizes). I'm not sure how your proposal will deal  
<br>
with that situation, but I leave that to you. :-)
<br>
<p>On Sep 4, 2009, at 7:58 AM, Arthur Huillet wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ralph Castain wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Let me point out the obvious since this has plagued us at LANL with  
</span><br>
<span class="quotelev2">&gt;&gt; regard to this concept. If a user wants to do something different,  
</span><br>
<span class="quotelev2">&gt;&gt; all they have to do is download and build their own copy of OMPI.
</span><br>
<span class="quotelev1">&gt; We are well aware of that. It is relatively easy for a user to  
</span><br>
<span class="quotelev1">&gt; circumvent the limitation...
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; My point here: this concept can help, but it should in no way be  
</span><br>
<span class="quotelev2">&gt;&gt; viewed as a solution to the problem you are trying to solve. It is  
</span><br>
<span class="quotelev2">&gt;&gt; at best a minor obstacle as we made it very simple for a user to  
</span><br>
<span class="quotelev2">&gt;&gt; circumvent such measures.
</span><br>
<span class="quotelev1">&gt; ... however the problem we are trying to solve is that some users  
</span><br>
<span class="quotelev1">&gt; may inadvertantly modify parameters that they should not, for  
</span><br>
<span class="quotelev1">&gt; example when playing around with MCA parameters in order to &quot;tune&quot;  
</span><br>
<span class="quotelev1">&gt; their application.
</span><br>
<span class="quotelev1">&gt; System wide parameters make it possible to give a message to the  
</span><br>
<span class="quotelev1">&gt; user saying he is not allowed to do what he tried to do, and this is  
</span><br>
<span class="quotelev1">&gt; a nice to have feature.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; We are defending the system against users who are not ill- 
</span><br>
<span class="quotelev1">&gt; intentioned, but simply do not always know what they are doing when  
</span><br>
<span class="quotelev1">&gt; they change parameters. System wide parameters do help in this area.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Greetings, A. Huillet
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
<li><strong>Next message:</strong> <a href="6777.php">Sylvain Jeaugey: "Re: [OMPI devel] RFC - &quot;system-wide-only&quot; MCA parameters"</a>
<li><strong>Previous message:</strong> <a href="6775.php">Ralph Castain: "Re: [OMPI devel] RFC - &quot;system-wide-only&quot; MCA parameters"</a>
<li><strong>In reply to:</strong> <a href="6772.php">Arthur Huillet: "Re: [OMPI devel] RFC - &quot;system-wide-only&quot; MCA parameters"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6778.php">Kenneth Lloyd: "Re: [OMPI devel] RFC - &quot;system-wide-only&quot; MCA parameters"</a>
<li><strong>Reply:</strong> <a href="6778.php">Kenneth Lloyd: "Re: [OMPI devel] RFC - &quot;system-wide-only&quot; MCA parameters"</a>
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

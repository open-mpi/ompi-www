<?
$subject_val = "Re: [OMPI devel] RFC: Multiple duplicate MCA param generates error";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Sep  9 16:00:02 2014" -->
<!-- isoreceived="20140909200002" -->
<!-- sent="Tue, 9 Sep 2014 12:59:25 -0700" -->
<!-- isosent="20140909195925" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: Multiple duplicate MCA param generates error" -->
<!-- id="E4F8E540-98A7-4BB2-8BE1-0D6897B6007F_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAAO1KyZCQrAMz-88wQv25Fv0w1p3z90Cw7CgoezwMxvWALuE3A_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RFC: Multiple duplicate MCA param generates error<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-09-09 15:59:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15787.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: Multiple duplicate MCA param generates error"</a>
<li><strong>Previous message:</strong> <a href="15785.php">Jeff Squyres (jsquyres): "[OMPI devel] How to fix git messes"</a>
<li><strong>In reply to:</strong> <a href="15784.php">Mike Dubman: "Re: [OMPI devel] RFC: Multiple duplicate MCA param generates error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15787.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: Multiple duplicate MCA param generates error"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I can't see how a user would know how to use such a thing - which mca params can absorb a concatenated value? Why would you take the last vs the first instead of just providing a value only once?
<br>
<p><p>On Sep 9, 2014, at 10:42 AM, Mike Dubman &lt;miked_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; maybe we should have another MCA parameter to specify desired policy? LAST,CONCAT,FIRST and let user select it?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; basically, it is to mimic &quot;setenv(var,val,overwrite)&quot; behavior which is easy to explain and good to have.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Tue, Sep 9, 2014 at 7:31 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; WHAT:     Generate an error if the user provides duplicate MCA params on the cmd line
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; WHY:       User confusion due to unexpected behavior
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; WHEN:     Tues, Sept 16 as this is a gating issue for 1.8.3 release
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; In the beginning, OMPI would look at a cmd line for MCA params - if a param was listed more than once, we would take the LAST value given and ignore all the rest. At some point, this behavior was changed in opal/mca/base/mca_base_cmd_line.c such that we concatenated the values into a comma-delimited list. Unfortunately, the backend parser doesn't know how to deal with such a list when converting the param to values such as INT or BOOL.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; In r32686, I reverted the behavior back to the original one of taking the LAST value. However, this can lead to unexpected behavior. For example, consider the case where the user provides a cmd line containing the following:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ... -mca btl ^sm..... -mca btl openib.....
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; In this case, the result will be a setting of &quot;btl=openib&quot;, and only the openib BTL will be selected. If the user thought that all BTLs other than sm were to be considered, this could be a surprise. Likewise, note that if the order is reversed, the result would be &quot;btl=^sm&quot; - a completely different behavior.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On the telecon, we couldn't think of any use-case where we would want the last value or concatenating behaviors. Instead, there was consensus that we should generate an error as the user is asking us to do conflicting things.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; However, we acknowledged that we might not understand all the use-cases, so we are issuing this as an RFC in case someone knows of a reason for the other behaviors.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/09/15782.php">http://www.open-mpi.org/community/lists/devel/2014/09/15782.php</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Kind Regards,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; M.
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/09/15784.php">http://www.open-mpi.org/community/lists/devel/2014/09/15784.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-15786/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15787.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: Multiple duplicate MCA param generates error"</a>
<li><strong>Previous message:</strong> <a href="15785.php">Jeff Squyres (jsquyres): "[OMPI devel] How to fix git messes"</a>
<li><strong>In reply to:</strong> <a href="15784.php">Mike Dubman: "Re: [OMPI devel] RFC: Multiple duplicate MCA param generates error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15787.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: Multiple duplicate MCA param generates error"</a>
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

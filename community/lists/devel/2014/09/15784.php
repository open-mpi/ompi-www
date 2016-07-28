<?
$subject_val = "Re: [OMPI devel] RFC: Multiple duplicate MCA param generates error";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Sep  9 13:42:51 2014" -->
<!-- isoreceived="20140909174251" -->
<!-- sent="Tue, 9 Sep 2014 20:42:48 +0300" -->
<!-- isosent="20140909174248" -->
<!-- name="Mike Dubman" -->
<!-- email="miked_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: Multiple duplicate MCA param generates error" -->
<!-- id="CAAO1KyZCQrAMz-88wQv25Fv0w1p3z90Cw7CgoezwMxvWALuE3A_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="AB2E393D-904F-4B33-AF9F-27C3E5A26518_at_open-mpi.org" -->
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
<strong>From:</strong> Mike Dubman (<em>miked_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-09-09 13:42:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15785.php">Jeff Squyres (jsquyres): "[OMPI devel] How to fix git messes"</a>
<li><strong>Previous message:</strong> <a href="15783.php">Jeff Squyres (jsquyres): "[OMPI devel] Stop updating the Trac wiki (Github conversion)"</a>
<li><strong>In reply to:</strong> <a href="15782.php">Ralph Castain: "[OMPI devel] RFC: Multiple duplicate MCA param generates error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15786.php">Ralph Castain: "Re: [OMPI devel] RFC: Multiple duplicate MCA param generates error"</a>
<li><strong>Reply:</strong> <a href="15786.php">Ralph Castain: "Re: [OMPI devel] RFC: Multiple duplicate MCA param generates error"</a>
<li><strong>Reply:</strong> <a href="15787.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: Multiple duplicate MCA param generates error"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
maybe we should have another MCA parameter to specify desired policy?
<br>
LAST,CONCAT,FIRST and let user select it?
<br>
<p>basically, it is to mimic &quot;setenv(var,val,overwrite)&quot; behavior which is
<br>
easy to explain and good to have.
<br>
<p><p>On Tue, Sep 9, 2014 at 7:31 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; WHAT:     Generate an error if the user provides duplicate MCA params on
</span><br>
<span class="quotelev1">&gt; the cmd line
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
<span class="quotelev1">&gt; In the beginning, OMPI would look at a cmd line for MCA params - if a
</span><br>
<span class="quotelev1">&gt; param was listed more than once, we would take the LAST value given and
</span><br>
<span class="quotelev1">&gt; ignore all the rest. At some point, this behavior was changed in
</span><br>
<span class="quotelev1">&gt; opal/mca/base/mca_base_cmd_line.c such that we concatenated the values into
</span><br>
<span class="quotelev1">&gt; a comma-delimited list. Unfortunately, the backend parser doesn't know how
</span><br>
<span class="quotelev1">&gt; to deal with such a list when converting the param to values such as INT or
</span><br>
<span class="quotelev1">&gt; BOOL.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In r32686, I reverted the behavior back to the original one of taking the
</span><br>
<span class="quotelev1">&gt; LAST value. However, this can lead to unexpected behavior. For example,
</span><br>
<span class="quotelev1">&gt; consider the case where the user provides a cmd line containing the
</span><br>
<span class="quotelev1">&gt; following:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ... -mca btl ^sm..... -mca btl openib.....
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In this case, the result will be a setting of &quot;btl=openib&quot;, and only the
</span><br>
<span class="quotelev1">&gt; openib BTL will be selected. If the user thought that all BTLs other than
</span><br>
<span class="quotelev1">&gt; sm were to be considered, this could be a surprise. Likewise, note that if
</span><br>
<span class="quotelev1">&gt; the order is reversed, the result would be &quot;btl=^sm&quot; - a completely
</span><br>
<span class="quotelev1">&gt; different behavior.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On the telecon, we couldn't think of any use-case where we would want the
</span><br>
<span class="quotelev1">&gt; last value or concatenating behaviors. Instead, there was consensus that we
</span><br>
<span class="quotelev1">&gt; should generate an error as the user is asking us to do conflicting things.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; However, we acknowledged that we might not understand all the use-cases,
</span><br>
<span class="quotelev1">&gt; so we are issuing this as an RFC in case someone knows of a reason for the
</span><br>
<span class="quotelev1">&gt; other behaviors.
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
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/09/15782.php">http://www.open-mpi.org/community/lists/devel/2014/09/15782.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
Kind Regards,
M.
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-15784/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15785.php">Jeff Squyres (jsquyres): "[OMPI devel] How to fix git messes"</a>
<li><strong>Previous message:</strong> <a href="15783.php">Jeff Squyres (jsquyres): "[OMPI devel] Stop updating the Trac wiki (Github conversion)"</a>
<li><strong>In reply to:</strong> <a href="15782.php">Ralph Castain: "[OMPI devel] RFC: Multiple duplicate MCA param generates error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15786.php">Ralph Castain: "Re: [OMPI devel] RFC: Multiple duplicate MCA param generates error"</a>
<li><strong>Reply:</strong> <a href="15786.php">Ralph Castain: "Re: [OMPI devel] RFC: Multiple duplicate MCA param generates error"</a>
<li><strong>Reply:</strong> <a href="15787.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: Multiple duplicate MCA param generates error"</a>
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

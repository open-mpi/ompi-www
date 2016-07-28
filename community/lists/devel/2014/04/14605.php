<?
$subject_val = "Re: [OMPI devel] RFC: Well-known mca parameters";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Apr 25 00:43:06 2014" -->
<!-- isoreceived="20140425044306" -->
<!-- sent="Fri, 25 Apr 2014 07:43:04 +0300" -->
<!-- isosent="20140425044304" -->
<!-- name="Mike Dubman" -->
<!-- email="miked_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: Well-known mca parameters" -->
<!-- id="CAAO1KyZMhUpuPoJgwsXeP3WzCWgXQE76-7LpNBWYKz1zXT=6vQ_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CAAO1KyaKqRL9w=HeF8wog2OYg6_OikdZvuixLuWQv2FLSPw4tg_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RFC: Well-known mca parameters<br>
<strong>From:</strong> Mike Dubman (<em>miked_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-04-25 00:43:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14606.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: Remove heterogeneous support"</a>
<li><strong>Previous message:</strong> <a href="14604.php">Mike Dubman: "Re: [OMPI devel] RFC: Well-known mca parameters"</a>
<li><strong>In reply to:</strong> <a href="14604.php">Mike Dubman: "Re: [OMPI devel] RFC: Well-known mca parameters"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14616.php">Ralph Castain: "Re: [OMPI devel] RFC: Well-known mca parameters"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Also, the reason for rfc is this:
<br>
<p><a href="https://svn.open-mpi.org/trac/ompi/ticket/4556#comment:5">https://svn.open-mpi.org/trac/ompi/ticket/4556#comment:5</a>
<br>
<p><p><p>On Fri, Apr 25, 2014 at 7:41 AM, Mike Dubman &lt;miked_at_[hidden]&gt;wrote:
<br>
<p><span class="quotelev1">&gt; not a requirement of course, but warm recommendation. Like you mentioned:
</span><br>
<span class="quotelev1">&gt; &quot;component developers who choose to expose such information do so using
</span><br>
<span class="quotelev1">&gt; the suggested syntax, then that is a different proposal.&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;FWIW: we do not (and cannot, for licensing reasons) link against Slurm,
</span><br>
<span class="quotelev1">&gt; so please don't include it in such lists to avoid giving anyone even a
</span><br>
<span class="quotelev1">&gt; passing thought that we do so.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I don`t understand, today we have &quot;--with-slurm --with-pmi&quot; for dynamic
</span><br>
<span class="quotelev1">&gt; link with slurm and others where we call slurm functions from OMPI code.
</span><br>
<span class="quotelev1">&gt; how calling slurm.getVersion() is different?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; afaik, dynamic linking (as we do it today) does not violate current
</span><br>
<span class="quotelev1">&gt; licensing model.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Fri, Apr 25, 2014 at 5:39 AM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Just for clarification: are you proposing that we *require* every
</span><br>
<span class="quotelev2">&gt;&gt; component that links against an external library to include these
</span><br>
<span class="quotelev2">&gt;&gt; parameters? If so, that seems a significant requirement as quite a few of
</span><br>
<span class="quotelev2">&gt;&gt; our components do so.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On the other hand, if you are proposing that those component developers
</span><br>
<span class="quotelev2">&gt;&gt; who choose to expose such information do so using the suggested syntax,
</span><br>
<span class="quotelev2">&gt;&gt; then that is a different proposal.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Just want to understand what you are proposing - a requirement on
</span><br>
<span class="quotelev2">&gt;&gt; components, or a syntax for those who choose to support this capability?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; FWIW: we do not (and cannot, for licensing reasons) link against Slurm,
</span><br>
<span class="quotelev2">&gt;&gt; so please don't include it in such lists to avoid giving anyone even a
</span><br>
<span class="quotelev2">&gt;&gt; passing thought that we do so.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Apr 23, 2014, at 10:38 PM, Mike Dubman &lt;miked_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; WHAT:
</span><br>
<span class="quotelev2">&gt;&gt; * Formalize well-known MCA parameters that can be used by any component
</span><br>
<span class="quotelev2">&gt;&gt; to represent external dependencies for this component.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; * Component can set that well-known MCA r/o parameters to expose to the
</span><br>
<span class="quotelev2">&gt;&gt; end-users different setup related traits of the OMPI installation.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Example:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ompi_info can print for every component which depends on external library:
</span><br>
<span class="quotelev2">&gt;&gt; - ext lib runtime version used by component
</span><br>
<span class="quotelev2">&gt;&gt; - ext lib compiletime version used by component
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; slurm: v2.6.6
</span><br>
<span class="quotelev2">&gt;&gt; mtl/mxm: v2.5
</span><br>
<span class="quotelev2">&gt;&gt; btl/verbs: v3.2
</span><br>
<span class="quotelev2">&gt;&gt; btl/usnic: v1.1
</span><br>
<span class="quotelev2">&gt;&gt; coll/fca: v2.5
</span><br>
<span class="quotelev2">&gt;&gt; ...
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; End-user or site admin or OMPI vendor can aggregate this information by
</span><br>
<span class="quotelev2">&gt;&gt; some script and generate report if given installation compiles with
</span><br>
<span class="quotelev2">&gt;&gt; site/vendor rules.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; * The &quot;well-known&quot; mca parameters can be easily extracted from ALL
</span><br>
<span class="quotelev2">&gt;&gt; components by grep-like utilities.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; * Current proposal:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ** prefix each well-known MCA param with &quot;print_&quot;:
</span><br>
<span class="quotelev2">&gt;&gt; ** Define two well-known mca parameters indicating external library
</span><br>
<span class="quotelev2">&gt;&gt; runtime and compiletime versions, i.e.:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; print_compiletime_version
</span><br>
<span class="quotelev2">&gt;&gt; print_runtime_version
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The following command will show all exposed well-known mca params from
</span><br>
<span class="quotelev2">&gt;&gt; all components:
</span><br>
<span class="quotelev2">&gt;&gt; ompi_info --parsable -l 9 |grep &quot;:print_&quot;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; WHY:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; * Better support-ability: site/vendor can provide script which will check
</span><br>
<span class="quotelev2">&gt;&gt; if OMPI installation complies to release notes or support matrix.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; WHEN:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; - Next teleconf
</span><br>
<span class="quotelev2">&gt;&gt; - code can be observed here:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="https://svn.open-mpi.org/trac/ompi/ticket/4556">https://svn.open-mpi.org/trac/ompi/ticket/4556</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Comments?
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/04/14590.php">http://www.open-mpi.org/community/lists/devel/2014/04/14590.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/04/14601.php">http://www.open-mpi.org/community/lists/devel/2014/04/14601.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-14605/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14606.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: Remove heterogeneous support"</a>
<li><strong>Previous message:</strong> <a href="14604.php">Mike Dubman: "Re: [OMPI devel] RFC: Well-known mca parameters"</a>
<li><strong>In reply to:</strong> <a href="14604.php">Mike Dubman: "Re: [OMPI devel] RFC: Well-known mca parameters"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14616.php">Ralph Castain: "Re: [OMPI devel] RFC: Well-known mca parameters"</a>
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

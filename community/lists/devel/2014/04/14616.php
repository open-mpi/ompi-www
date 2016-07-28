<?
$subject_val = "Re: [OMPI devel] RFC: Well-known mca parameters";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Apr 25 10:25:14 2014" -->
<!-- isoreceived="20140425142514" -->
<!-- sent="Fri, 25 Apr 2014 07:25:08 -0700" -->
<!-- isosent="20140425142508" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: Well-known mca parameters" -->
<!-- id="B8CC841C-085A-458F-AF74-FE9ACB529AA6_at_open-mpi.org" -->
<!-- charset="iso-8859-1" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-04-25 10:25:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14617.php">Ralph Castain: "Re: [OMPI devel] RFC: Well-known mca parameters"</a>
<li><strong>Previous message:</strong> <a href="14615.php">Pavel V. Kaygorodov: "Re: [OMPI devel] mosix patches"</a>
<li><strong>In reply to:</strong> <a href="14604.php">Mike Dubman: "Re: [OMPI devel] RFC: Well-known mca parameters"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14610.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: Well-known mca parameters"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Apr 24, 2014, at 9:41 PM, Mike Dubman &lt;miked_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; not a requirement of course, but warm recommendation. Like you mentioned:
</span><br>
<span class="quotelev1">&gt; &quot;component developers who choose to expose such information do so using the suggested syntax, then that is a different proposal.&quot;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;FWIW: we do not (and cannot, for licensing reasons) link against Slurm, so please don't include it in such lists to avoid giving anyone even a passing thought that we do so.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I don`t understand, today we have &quot;--with-slurm --with-pmi&quot; for dynamic link with slurm and others where we call slurm functions from OMPI code. how calling slurm.getVersion() is different?
</span><br>
<p>We do *not* dynamically link with libslurm, Mike. All --with-slurm does is tell us to build the Slurm-related RAS and PLM components. Those components do *not* link against libslurm - they (a) read the environment for slurm envars to get the allocation and (b) fork/exec srun commands to launch our daemons. Under no conditions do we ever call a slurm function.
<br>
<p>The PMI functions are specifically licensed differently to allow apps to use them without this unfortunate side effect.
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; afaik, dynamic linking (as we do it today) does not violate current licensing model.
</span><br>
<p>This is *not* true. If you include a slurm header, which you must do in order to call a slurm function, then the GPL license pulls all of OMPI into GPL. 
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Fri, Apr 25, 2014 at 5:39 AM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; Just for clarification: are you proposing that we *require* every component that links against an external library to include these parameters? If so, that seems a significant requirement as quite a few of our components do so.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On the other hand, if you are proposing that those component developers who choose to expose such information do so using the suggested syntax, then that is a different proposal.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Just want to understand what you are proposing - a requirement on components, or a syntax for those who choose to support this capability?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; FWIW: we do not (and cannot, for licensing reasons) link against Slurm, so please don't include it in such lists to avoid giving anyone even a passing thought that we do so.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Apr 23, 2014, at 10:38 PM, Mike Dubman &lt;miked_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; WHAT:
</span><br>
<span class="quotelev2">&gt;&gt; * Formalize well-known MCA parameters that can be used by any component to represent external dependencies for this component. 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; * Component can set that well-known MCA r/o parameters to expose to the end-users different setup related traits of the OMPI installation.
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
<span class="quotelev2">&gt;&gt; End-user or site admin or OMPI vendor can aggregate this information by some script and generate report if given installation compiles with site/vendor rules.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; * The &quot;well-known&quot; mca parameters can be easily extracted from ALL components by grep-like utilities.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; * Current proposal:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; ** prefix each well-known MCA param with &quot;print_&quot;:
</span><br>
<span class="quotelev2">&gt;&gt; ** Define two well-known mca parameters indicating external library runtime and compiletime versions, i.e.:
</span><br>
<span class="quotelev2">&gt;&gt;  
</span><br>
<span class="quotelev2">&gt;&gt; print_compiletime_version
</span><br>
<span class="quotelev2">&gt;&gt; print_runtime_version
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; The following command will show all exposed well-known mca params from all components:
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
<span class="quotelev2">&gt;&gt; * Better support-ability: site/vendor can provide script which will check if OMPI installation complies to release notes or support matrix.
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
<span class="quotelev2">&gt;&gt; - code can be observed here: <a href="https://svn.open-mpi.org/trac/ompi/ticket/4556">https://svn.open-mpi.org/trac/ompi/ticket/4556</a>
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
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/04/14590.php">http://www.open-mpi.org/community/lists/devel/2014/04/14590.php</a>
</span><br>
<span class="quotelev1">&gt; 
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/04/14601.php">http://www.open-mpi.org/community/lists/devel/2014/04/14601.php</a>
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/04/14604.php">http://www.open-mpi.org/community/lists/devel/2014/04/14604.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-14616/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14617.php">Ralph Castain: "Re: [OMPI devel] RFC: Well-known mca parameters"</a>
<li><strong>Previous message:</strong> <a href="14615.php">Pavel V. Kaygorodov: "Re: [OMPI devel] mosix patches"</a>
<li><strong>In reply to:</strong> <a href="14604.php">Mike Dubman: "Re: [OMPI devel] RFC: Well-known mca parameters"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14610.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: Well-known mca parameters"</a>
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

<?
$subject_val = "Re: [OMPI devel] RFC: Well-known mca parameters";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Apr 25 07:01:35 2014" -->
<!-- isoreceived="20140425110135" -->
<!-- sent="Fri, 25 Apr 2014 14:01:32 +0300" -->
<!-- isosent="20140425110132" -->
<!-- name="Mike Dubman" -->
<!-- email="miked_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: Well-known mca parameters" -->
<!-- id="CAAO1KybOAzYTn+fngLH8xEeqcoLNYaYgTVuUYqXyHUMS5kyBZg_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="04140068-3F07-4B56-B864-55A3D0A89C90_at_cisco.com" -->
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
<strong>Date:</strong> 2014-04-25 07:01:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14612.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: Well-known mca parameters"</a>
<li><strong>Previous message:</strong> <a href="14610.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: Well-known mca parameters"</a>
<li><strong>In reply to:</strong> <a href="14610.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: Well-known mca parameters"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14612.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: Well-known mca parameters"</a>
<li><strong>Reply:</strong> <a href="14612.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: Well-known mca parameters"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev3">&gt;&gt;&gt;ompi_info --all --parsable | egrep ':(compile|run)time_version'
</span><br>
<p>yep, this is much better, but I don`t think we should count on end-user to
<br>
be unix regex guru.
<br>
Ideally, following would be much user-friendlier:
<br>
<p>ompi_info --all --parsable --print-sys-libs-versions
<br>
<p><p><p><p>On Fri, Apr 25, 2014 at 1:32 PM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]
<br>
<span class="quotelev1">&gt; wrote:
</span><br>
<p><span class="quotelev1">&gt; On Apr 24, 2014, at 1:38 AM, Mike Dubman &lt;miked_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; ** prefix each well-known MCA param with &quot;print_&quot;:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I like the overall idea of this RFC, but I'm not wild about this specific
</span><br>
<span class="quotelev1">&gt; word &quot;print&quot; -- it seems weird.  All the MCA parameters are *printed* --
</span><br>
<span class="quotelev1">&gt; the word &quot;print&quot; doesn't really distinguish anything here.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; (I know I'm just harping on a word, but I think it's an important word
</span><br>
<span class="quotelev1">&gt; here... :-) )
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Got a better suggestion, perchance?  (I don't, offhand...)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; ** Define two well-known mca parameters indicating external library
</span><br>
<span class="quotelev1">&gt; runtime and compiletime versions, i.e.:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; print_compiletime_version
</span><br>
<span class="quotelev2">&gt; &gt; print_runtime_version
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; The following command will show all exposed well-known mca params from
</span><br>
<span class="quotelev1">&gt; all components:
</span><br>
<span class="quotelev2">&gt; &gt; ompi_info --parsable -l 9 |grep &quot;:print_&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; How about changing this a bit (hoping my regexp syntax is correct at
</span><br>
<span class="quotelev1">&gt; 6:30am before coffee...):
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ompi_info --all --parsable | egrep ':(compile|run)time_version'
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Then the &quot;print_&quot; prefix isn't needed.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/04/14610.php">http://www.open-mpi.org/community/lists/devel/2014/04/14610.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-14611/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14612.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: Well-known mca parameters"</a>
<li><strong>Previous message:</strong> <a href="14610.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: Well-known mca parameters"</a>
<li><strong>In reply to:</strong> <a href="14610.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: Well-known mca parameters"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14612.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: Well-known mca parameters"</a>
<li><strong>Reply:</strong> <a href="14612.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: Well-known mca parameters"</a>
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

<?
$subject_val = "Re: [OMPI devel] RFC: Well-known mca parameters";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Apr 25 06:32:52 2014" -->
<!-- isoreceived="20140425103252" -->
<!-- sent="Fri, 25 Apr 2014 10:32:40 +0000" -->
<!-- isosent="20140425103240" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: Well-known mca parameters" -->
<!-- id="04140068-3F07-4B56-B864-55A3D0A89C90_at_cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CAAO1KybnJoCVyJpUkAJ2c+XopV9QZK2BHUcniVZxd7sXB6Zp8g_at_mail.gmail.com" -->
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
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-04-25 06:32:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14611.php">Mike Dubman: "Re: [OMPI devel] RFC: Well-known mca parameters"</a>
<li><strong>Previous message:</strong> <a href="14609.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: Remove heterogeneous support"</a>
<li><strong>In reply to:</strong> <a href="14590.php">Mike Dubman: "[OMPI devel] RFC: Well-known mca parameters"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14611.php">Mike Dubman: "Re: [OMPI devel] RFC: Well-known mca parameters"</a>
<li><strong>Reply:</strong> <a href="14611.php">Mike Dubman: "Re: [OMPI devel] RFC: Well-known mca parameters"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Apr 24, 2014, at 1:38 AM, Mike Dubman &lt;miked_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; ** prefix each well-known MCA param with &quot;print_&quot;:
</span><br>
<p>I like the overall idea of this RFC, but I'm not wild about this specific word &quot;print&quot; -- it seems weird.  All the MCA parameters are *printed* -- the word &quot;print&quot; doesn't really distinguish anything here.
<br>
<p>(I know I'm just harping on a word, but I think it's an important word here... :-) )
<br>
<p>Got a better suggestion, perchance?  (I don't, offhand...)
<br>
<p><span class="quotelev1">&gt; ** Define two well-known mca parameters indicating external library runtime and compiletime versions, i.e.:
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; print_compiletime_version
</span><br>
<span class="quotelev1">&gt; print_runtime_version
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The following command will show all exposed well-known mca params from all components:
</span><br>
<span class="quotelev1">&gt; ompi_info --parsable -l 9 |grep &quot;:print_&quot;
</span><br>
<p>How about changing this a bit (hoping my regexp syntax is correct at 6:30am before coffee...):
<br>
<p>ompi_info --all --parsable | egrep ':(compile|run)time_version'
<br>
<p>Then the &quot;print_&quot; prefix isn't needed.
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14611.php">Mike Dubman: "Re: [OMPI devel] RFC: Well-known mca parameters"</a>
<li><strong>Previous message:</strong> <a href="14609.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: Remove heterogeneous support"</a>
<li><strong>In reply to:</strong> <a href="14590.php">Mike Dubman: "[OMPI devel] RFC: Well-known mca parameters"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14611.php">Mike Dubman: "Re: [OMPI devel] RFC: Well-known mca parameters"</a>
<li><strong>Reply:</strong> <a href="14611.php">Mike Dubman: "Re: [OMPI devel] RFC: Well-known mca parameters"</a>
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

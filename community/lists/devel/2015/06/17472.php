<?
$subject_val = "Re: [OMPI devel] RFC: standardize verbosity values";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jun  8 05:05:00 2015" -->
<!-- isoreceived="20150608090500" -->
<!-- sent="Mon, 08 Jun 2015 18:04:52 +0900" -->
<!-- isosent="20150608090452" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: standardize verbosity values" -->
<!-- id="55755AB4.4050706_at_rist.or.jp" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="20150529163209.GD93226_at_pn1246003.lanl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RFC: standardize verbosity values<br>
<strong>From:</strong> Gilles Gouaillardet (<em>gilles_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-06-08 05:04:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17473.php">Ralph Castain: "Re: [OMPI devel] RFC: standardize verbosity values"</a>
<li><strong>Previous message:</strong> <a href="17471.php">Howard Pritchard: "Re: [OMPI devel] README updates for new version number scheme"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2015/05/17468.php">Nathan Hjelm: "[OMPI devel] RFC: standardize verbosity values"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17473.php">Ralph Castain: "Re: [OMPI devel] RFC: standardize verbosity values"</a>
<li><strong>Reply:</strong> <a href="17473.php">Ralph Castain: "Re: [OMPI devel] RFC: standardize verbosity values"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Nathan,
<br>
<p>i think it is a good idea to use names vs numeric values for verbosity.
<br>
<p>what about using &quot;a la&quot; log4c verbosity names ?
<br>
<a href="http://sourceforge.net/projects/log4c/">http://sourceforge.net/projects/log4c/</a>
<br>
<p>static const char* const priorities[] = {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&quot;FATAL&quot;,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&quot;ALERT&quot;,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&quot;CRIT&quot;,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&quot;ERROR&quot;,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&quot;WARN&quot;,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&quot;NOTICE&quot;,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&quot;INFO&quot;,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&quot;DEBUG&quot;,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&quot;TRACE&quot;,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&quot;NOTSET&quot;,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&quot;UNKNOWN&quot;
<br>
};
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p>On 5/30/2015 1:32 AM, Nathan Hjelm wrote:
<br>
<span class="quotelev1">&gt; At the moment we have a loosely enforced standard for verbosity
</span><br>
<span class="quotelev1">&gt; values. In general frameworks accept anything in the range 0 - 100 with
</span><br>
<span class="quotelev1">&gt; few exceptions. I am thinking about adding an enumerator for verbosities
</span><br>
<span class="quotelev1">&gt; that will accept values in this range and certain named constants which
</span><br>
<span class="quotelev1">&gt; will match with specific verbosity levels. One possible set: none - 0,
</span><br>
<span class="quotelev1">&gt; low - 25, med - 50, high - 75, max - 100. I am open to any set of named
</span><br>
<span class="quotelev1">&gt; verbosities.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thoughts?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Nathan
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/05/17468.php">http://www.open-mpi.org/community/lists/devel/2015/05/17468.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-17472/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17473.php">Ralph Castain: "Re: [OMPI devel] RFC: standardize verbosity values"</a>
<li><strong>Previous message:</strong> <a href="17471.php">Howard Pritchard: "Re: [OMPI devel] README updates for new version number scheme"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2015/05/17468.php">Nathan Hjelm: "[OMPI devel] RFC: standardize verbosity values"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17473.php">Ralph Castain: "Re: [OMPI devel] RFC: standardize verbosity values"</a>
<li><strong>Reply:</strong> <a href="17473.php">Ralph Castain: "Re: [OMPI devel] RFC: standardize verbosity values"</a>
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

<?
$subject_val = "Re: [OMPI devel] RFC: standardize verbosity values";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jun  8 09:39:21 2015" -->
<!-- isoreceived="20150608133921" -->
<!-- sent="Mon, 8 Jun 2015 06:39:16 -0700" -->
<!-- isosent="20150608133916" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: standardize verbosity values" -->
<!-- id="8406A888-F3F2-435A-A715-34CEADB46BBB_at_open-mpi.org" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="55755AB4.4050706_at_rist.or.jp" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-06-08 09:39:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17474.php">Gilles Gouaillardet: "Re: [OMPI devel] RFC: standardize verbosity values"</a>
<li><strong>Previous message:</strong> <a href="17472.php">Gilles Gouaillardet: "Re: [OMPI devel] RFC: standardize verbosity values"</a>
<li><strong>In reply to:</strong> <a href="17472.php">Gilles Gouaillardet: "Re: [OMPI devel] RFC: standardize verbosity values"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17474.php">Gilles Gouaillardet: "Re: [OMPI devel] RFC: standardize verbosity values"</a>
<li><strong>Reply:</strong> <a href="17474.php">Gilles Gouaillardet: "Re: [OMPI devel] RFC: standardize verbosity values"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Could we maybe narrow it down some? If we are going to do it, let&#146;s not make the mistake of the MCA param system and create so many levels. Nobody can figure out the right gradation as it is just too fine grained.
<br>
<p>I think Nathan&#146;s proposal is the max that makes sense.
<br>
<p>I&#146;d also like to see us apply the same logic to the MCA param system. Let&#146;s just define ~4 named levels and get rid of the fine grained numbering.
<br>
<p><p><span class="quotelev1">&gt; On Jun 8, 2015, at 2:04 AM, Gilles Gouaillardet &lt;gilles_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Nathan,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; i think it is a good idea to use names vs numeric values for verbosity.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; what about using &quot;a la&quot; log4c verbosity names ?
</span><br>
<span class="quotelev1">&gt; <a href="http://sourceforge.net/projects/log4c/">http://sourceforge.net/projects/log4c/</a> &lt;<a href="http://sourceforge.net/projects/log4c/">http://sourceforge.net/projects/log4c/</a>&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; static const char* const priorities[] = {
</span><br>
<span class="quotelev1">&gt;     &quot;FATAL&quot;,
</span><br>
<span class="quotelev1">&gt;     &quot;ALERT&quot;,
</span><br>
<span class="quotelev1">&gt;     &quot;CRIT&quot;,
</span><br>
<span class="quotelev1">&gt;     &quot;ERROR&quot;,
</span><br>
<span class="quotelev1">&gt;     &quot;WARN&quot;,
</span><br>
<span class="quotelev1">&gt;     &quot;NOTICE&quot;,
</span><br>
<span class="quotelev1">&gt;     &quot;INFO&quot;,
</span><br>
<span class="quotelev1">&gt;     &quot;DEBUG&quot;,
</span><br>
<span class="quotelev1">&gt;     &quot;TRACE&quot;,
</span><br>
<span class="quotelev1">&gt;     &quot;NOTSET&quot;,
</span><br>
<span class="quotelev1">&gt;     &quot;UNKNOWN&quot;
</span><br>
<span class="quotelev1">&gt; };
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Gilles
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 5/30/2015 1:32 AM, Nathan Hjelm wrote:
</span><br>
<span class="quotelev2">&gt;&gt; At the moment we have a loosely enforced standard for verbosity
</span><br>
<span class="quotelev2">&gt;&gt; values. In general frameworks accept anything in the range 0 - 100 with
</span><br>
<span class="quotelev2">&gt;&gt; few exceptions. I am thinking about adding an enumerator for verbosities
</span><br>
<span class="quotelev2">&gt;&gt; that will accept values in this range and certain named constants which
</span><br>
<span class="quotelev2">&gt;&gt; will match with specific verbosity levels. One possible set: none - 0,
</span><br>
<span class="quotelev2">&gt;&gt; low - 25, med - 50, high - 75, max - 100. I am open to any set of named
</span><br>
<span class="quotelev2">&gt;&gt; verbosities.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Thoughts?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -Nathan
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
<span class="quotelev2">&gt;&gt; devel_at_[hidden] &lt;mailto:devel_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a> &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/05/17468.php">http://www.open-mpi.org/community/lists/devel/2015/05/17468.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/devel/2015/05/17468.php">http://www.open-mpi.org/community/lists/devel/2015/05/17468.php</a>&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/06/17472.php">http://www.open-mpi.org/community/lists/devel/2015/06/17472.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-17473/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17474.php">Gilles Gouaillardet: "Re: [OMPI devel] RFC: standardize verbosity values"</a>
<li><strong>Previous message:</strong> <a href="17472.php">Gilles Gouaillardet: "Re: [OMPI devel] RFC: standardize verbosity values"</a>
<li><strong>In reply to:</strong> <a href="17472.php">Gilles Gouaillardet: "Re: [OMPI devel] RFC: standardize verbosity values"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17474.php">Gilles Gouaillardet: "Re: [OMPI devel] RFC: standardize verbosity values"</a>
<li><strong>Reply:</strong> <a href="17474.php">Gilles Gouaillardet: "Re: [OMPI devel] RFC: standardize verbosity values"</a>
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

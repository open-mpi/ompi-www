<?
$subject_val = "Re: [OMPI devel] RFC: standardize verbosity values";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jun  8 09:48:14 2015" -->
<!-- isoreceived="20150608134814" -->
<!-- sent="Mon, 8 Jun 2015 22:48:04 +0900" -->
<!-- isosent="20150608134804" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles.gouaillardet_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: standardize verbosity values" -->
<!-- id="CAAkFZ5vdUTyM9u+phfUAT0vc+xw44=nPj18=bH7ATMYQdkWPxw_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="8406A888-F3F2-435A-A715-34CEADB46BBB_at_open-mpi.org" -->
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
<strong>From:</strong> Gilles Gouaillardet (<em>gilles.gouaillardet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-06-08 09:48:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17475.php">KAWASHIMA Takahiro: "Re: [OMPI devel] RFC: standardize verbosity values"</a>
<li><strong>Previous message:</strong> <a href="17473.php">Ralph Castain: "Re: [OMPI devel] RFC: standardize verbosity values"</a>
<li><strong>In reply to:</strong> <a href="17473.php">Ralph Castain: "Re: [OMPI devel] RFC: standardize verbosity values"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17475.php">KAWASHIMA Takahiro: "Re: [OMPI devel] RFC: standardize verbosity values"</a>
<li><strong>Reply:</strong> <a href="17475.php">KAWASHIMA Takahiro: "Re: [OMPI devel] RFC: standardize verbosity values"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
so what about :
<br>
<p>static const char* const priorities[] = {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&quot;ERROR&quot;,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&quot;WARN&quot;,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&quot;INFO&quot;,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&quot;DEBUG&quot;,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&quot;TRACE&quot;
<br>
};
<br>
<p>and merge debug and trace if there should be only 4
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p><p>On Monday, June 8, 2015, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Could we maybe narrow it down some? If we are going to do it, let&#226;&#128;&#153;s not
</span><br>
<span class="quotelev1">&gt; make the mistake of the MCA param system and create so many levels. Nobody
</span><br>
<span class="quotelev1">&gt; can figure out the right gradation as it is just too fine grained.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I think Nathan&#226;&#128;&#153;s proposal is the max that makes sense.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I&#226;&#128;&#153;d also like to see us apply the same logic to the MCA param system.
</span><br>
<span class="quotelev1">&gt; Let&#226;&#128;&#153;s just define ~4 named levels and get rid of the fine grained numbering.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jun 8, 2015, at 2:04 AM, Gilles Gouaillardet &lt;gilles_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &lt;javascript:_e(%7B%7D,'cvml','gilles_at_[hidden]');&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Nathan,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; i think it is a good idea to use names vs numeric values for verbosity.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; what about using &quot;a la&quot; log4c verbosity names ?
</span><br>
<span class="quotelev1">&gt; <a href="http://sourceforge.net/projects/log4c/">http://sourceforge.net/projects/log4c/</a>
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
<span class="quotelev1">&gt;
</span><br>
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing listdevel_at_[hidden] &lt;javascript:_e(%7B%7D,'cvml','devel_at_[hidden]');&gt;
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/05/17468.php">http://www.open-mpi.org/community/lists/devel/2015/05/17468.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden] &lt;javascript:_e(%7B%7D,'cvml','devel_at_[hidden]');&gt;
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2015/06/17472.php">http://www.open-mpi.org/community/lists/devel/2015/06/17472.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-17474/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17475.php">KAWASHIMA Takahiro: "Re: [OMPI devel] RFC: standardize verbosity values"</a>
<li><strong>Previous message:</strong> <a href="17473.php">Ralph Castain: "Re: [OMPI devel] RFC: standardize verbosity values"</a>
<li><strong>In reply to:</strong> <a href="17473.php">Ralph Castain: "Re: [OMPI devel] RFC: standardize verbosity values"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17475.php">KAWASHIMA Takahiro: "Re: [OMPI devel] RFC: standardize verbosity values"</a>
<li><strong>Reply:</strong> <a href="17475.php">KAWASHIMA Takahiro: "Re: [OMPI devel] RFC: standardize verbosity values"</a>
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

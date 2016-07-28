<?
$subject_val = "Re: [OMPI devel] RFC: standardize verbosity values";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jun  8 12:11:33 2015" -->
<!-- isoreceived="20150608161133" -->
<!-- sent="Mon, 8 Jun 2015 10:11:31 -0600" -->
<!-- isosent="20150608161131" -->
<!-- name="Nathan Hjelm" -->
<!-- email="hjelmn_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: standardize verbosity values" -->
<!-- id="20150608161131.GB97702_at_pn1246003.lanl.gov" -->
<!-- charset="utf-8" -->
<!-- inreplyto="20150609004205.9c5e8077dfd91ab18932f0f2_at_nifty.com" -->
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
<strong>From:</strong> Nathan Hjelm (<em>hjelmn_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-06-08 12:11:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17477.php">Ralph Castain: "Re: [OMPI devel] RFC: standardize verbosity values"</a>
<li><strong>Previous message:</strong> <a href="17475.php">KAWASHIMA Takahiro: "Re: [OMPI devel] RFC: standardize verbosity values"</a>
<li><strong>In reply to:</strong> <a href="17475.php">KAWASHIMA Takahiro: "Re: [OMPI devel] RFC: standardize verbosity values"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17477.php">Ralph Castain: "Re: [OMPI devel] RFC: standardize verbosity values"</a>
<li><strong>Reply:</strong> <a href="17477.php">Ralph Castain: "Re: [OMPI devel] RFC: standardize verbosity values"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
That would work. The standard verbosity levels could be one of those
<br>
values but allow any number in the interval [0,100] or any of none,
<br>
error, warn, info, debug, and trace. The standard levels could be
<br>
defined as:
<br>
<p>enum {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MCA_BASE_VERBOSE_NONE  = 0,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MCA_BASE_VERBOSE_ERROR = 1,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MCA_BASE_VERBOSE_WARN  = 10,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MCA_BASE_VERBOSE_INFO  = 20,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MCA_BASE_VERBOSE_DEBUG = 40,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MCA_BASE_VERBOSE_TRACE = 60,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MCA_BASE_VERBOSE_MAX   = 100,
<br>
};
<br>
<p>static mca_base_var_enum_value_t verbose_values[] = {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;{&quot;none&quot;,   MCA_BASE_VERBOSE_NONE},
<br>
&nbsp;&nbsp;&nbsp;&nbsp;{&quot;error&quot;,  MCA_BASE_VERBOSE_ERROR},
<br>
&nbsp;&nbsp;&nbsp;&nbsp;{&quot;warn&quot;,   MCA_BASE_VERBOSE_WARN},
<br>
&nbsp;&nbsp;&nbsp;&nbsp;{&quot;info&quot;,   MCA_BASE_VERBOSE_INFO},
<br>
&nbsp;&nbsp;&nbsp;&nbsp;{&quot;debug&quot;,  MCA_BASE_VERBOSE_DEBUG},
<br>
&nbsp;&nbsp;&nbsp;&nbsp;{&quot;trace&quot;,  MCA_BASE_VERBOSE_TRACE},
<br>
&nbsp;&nbsp;&nbsp;&nbsp;{NULL, -1}
<br>
};
<br>
<p>-Nathan
<br>
<p>On Tue, Jun 09, 2015 at 12:42:05AM +0900, KAWASHIMA Takahiro wrote:
<br>
<span class="quotelev2">&gt; &gt; static const char* const priorities[] = {
</span><br>
<span class="quotelev2">&gt; &gt;     &quot;ERROR&quot;,
</span><br>
<span class="quotelev2">&gt; &gt;     &quot;WARN&quot;,
</span><br>
<span class="quotelev2">&gt; &gt;     &quot;INFO&quot;,
</span><br>
<span class="quotelev2">&gt; &gt;     &quot;DEBUG&quot;,
</span><br>
<span class="quotelev2">&gt; &gt;     &quot;TRACE&quot;
</span><br>
<span class="quotelev2">&gt; &gt; };
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; +1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I usually use these levels.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Typical usage:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ERROR:
</span><br>
<span class="quotelev1">&gt;   Print an error message on returning a value other than
</span><br>
<span class="quotelev1">&gt;   OMPI_SUCCESS (and OMPI_ERR_TEMP_OUT_OF_RESOURCE etc.).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; WARN:
</span><br>
<span class="quotelev1">&gt;   This does not indicate an error. But users/developers should
</span><br>
<span class="quotelev1">&gt;   be aware on debugging/tuning. For example, network-level
</span><br>
<span class="quotelev1">&gt;   timeout, hardware queue full, buggy code.
</span><br>
<span class="quotelev1">&gt;   Often used with OMPI_ERR_TEMP_OUT_OF_RESOURCE.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; INFO:
</span><br>
<span class="quotelev1">&gt;   Information that may be useful for users and developers.
</span><br>
<span class="quotelev1">&gt;   Not so verbose. Output only on initialization or
</span><br>
<span class="quotelev1">&gt;   object creation etc.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; DEBUG:
</span><br>
<span class="quotelev1">&gt;   Information that is useful only for developers.
</span><br>
<span class="quotelev1">&gt;   Not so verbose. Output once per MPI routine call.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; TRACE:
</span><br>
<span class="quotelev1">&gt;   Information that is useful only for developers.
</span><br>
<span class="quotelev1">&gt;   Verbose. Output more than once per MPI routine call.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; KAWASHIMA Takahiro
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; so what about :
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; static const char* const priorities[] = {
</span><br>
<span class="quotelev2">&gt; &gt;     &quot;ERROR&quot;,
</span><br>
<span class="quotelev2">&gt; &gt;     &quot;WARN&quot;,
</span><br>
<span class="quotelev2">&gt; &gt;     &quot;INFO&quot;,
</span><br>
<span class="quotelev2">&gt; &gt;     &quot;DEBUG&quot;,
</span><br>
<span class="quotelev2">&gt; &gt;     &quot;TRACE&quot;
</span><br>
<span class="quotelev2">&gt; &gt; };
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; and merge debug and trace if there should be only 4
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Cheers,
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Gilles
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; On Monday, June 8, 2015, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Could we maybe narrow it down some? If we are going to do it, let&#226;&#128;&#153;s not
</span><br>
<span class="quotelev3">&gt; &gt; &gt; make the mistake of the MCA param system and create so many levels. Nobody
</span><br>
<span class="quotelev3">&gt; &gt; &gt; can figure out the right gradation as it is just too fine grained.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; I think Nathan&#226;&#128;&#153;s proposal is the max that makes sense.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; I&#226;&#128;&#153;d also like to see us apply the same logic to the MCA param system.
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Let&#226;&#128;&#153;s just define ~4 named levels and get rid of the fine grained numbering.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; On Jun 8, 2015, at 2:04 AM, Gilles Gouaillardet &lt;gilles_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &lt;javascript:_e(%7B%7D,'cvml','gilles_at_[hidden]');&gt;&gt; wrote:
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;  Nathan,
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; i think it is a good idea to use names vs numeric values for verbosity.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; what about using &quot;a la&quot; log4c verbosity names ?
</span><br>
<span class="quotelev3">&gt; &gt; &gt; <a href="http://sourceforge.net/projects/log4c/">http://sourceforge.net/projects/log4c/</a>
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; static const char* const priorities[] = {
</span><br>
<span class="quotelev3">&gt; &gt; &gt;     &quot;FATAL&quot;,
</span><br>
<span class="quotelev3">&gt; &gt; &gt;     &quot;ALERT&quot;,
</span><br>
<span class="quotelev3">&gt; &gt; &gt;     &quot;CRIT&quot;,
</span><br>
<span class="quotelev3">&gt; &gt; &gt;     &quot;ERROR&quot;,
</span><br>
<span class="quotelev3">&gt; &gt; &gt;     &quot;WARN&quot;,
</span><br>
<span class="quotelev3">&gt; &gt; &gt;     &quot;NOTICE&quot;,
</span><br>
<span class="quotelev3">&gt; &gt; &gt;     &quot;INFO&quot;,
</span><br>
<span class="quotelev3">&gt; &gt; &gt;     &quot;DEBUG&quot;,
</span><br>
<span class="quotelev3">&gt; &gt; &gt;     &quot;TRACE&quot;,
</span><br>
<span class="quotelev3">&gt; &gt; &gt;     &quot;NOTSET&quot;,
</span><br>
<span class="quotelev3">&gt; &gt; &gt;     &quot;UNKNOWN&quot;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; };
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Cheers,
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Gilles
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; On 5/30/2015 1:32 AM, Nathan Hjelm wrote:
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; At the moment we have a loosely enforced standard for verbosity
</span><br>
<span class="quotelev3">&gt; &gt; &gt; values. In general frameworks accept anything in the range 0 - 100 with
</span><br>
<span class="quotelev3">&gt; &gt; &gt; few exceptions. I am thinking about adding an enumerator for verbosities
</span><br>
<span class="quotelev3">&gt; &gt; &gt; that will accept values in this range and certain named constants which
</span><br>
<span class="quotelev3">&gt; &gt; &gt; will match with specific verbosity levels. One possible set: none - 0,
</span><br>
<span class="quotelev3">&gt; &gt; &gt; low - 25, med - 50, high - 75, max - 100. I am open to any set of named
</span><br>
<span class="quotelev3">&gt; &gt; &gt; verbosities.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Thoughts?
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/06/17475.php">http://www.open-mpi.org/community/lists/devel/2015/06/17475.php</a>
</span><br>
<p>
<br><hr>
<ul>
<li>application/pgp-signature attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-17476/01-part">stored</a>
</ul>
<!-- attachment="01-part" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17477.php">Ralph Castain: "Re: [OMPI devel] RFC: standardize verbosity values"</a>
<li><strong>Previous message:</strong> <a href="17475.php">KAWASHIMA Takahiro: "Re: [OMPI devel] RFC: standardize verbosity values"</a>
<li><strong>In reply to:</strong> <a href="17475.php">KAWASHIMA Takahiro: "Re: [OMPI devel] RFC: standardize verbosity values"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17477.php">Ralph Castain: "Re: [OMPI devel] RFC: standardize verbosity values"</a>
<li><strong>Reply:</strong> <a href="17477.php">Ralph Castain: "Re: [OMPI devel] RFC: standardize verbosity values"</a>
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

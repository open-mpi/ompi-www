<?
$subject_val = "Re: [OMPI devel] RFC: standardize verbosity values";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jun  8 11:42:22 2015" -->
<!-- isoreceived="20150608154222" -->
<!-- sent="Tue, 9 Jun 2015 00:42:05 +0900" -->
<!-- isosent="20150608154205" -->
<!-- name="KAWASHIMA Takahiro" -->
<!-- email="rivis.kawashima_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: standardize verbosity values" -->
<!-- id="20150609004205.9c5e8077dfd91ab18932f0f2_at_nifty.com" -->
<!-- charset="ISO-2022-JP" -->
<!-- inreplyto="CAAkFZ5vdUTyM9u+phfUAT0vc+xw44=nPj18=bH7ATMYQdkWPxw_at_mail.gmail.com" -->
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
<strong>From:</strong> KAWASHIMA Takahiro (<em>rivis.kawashima_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-06-08 11:42:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17476.php">Nathan Hjelm: "Re: [OMPI devel] RFC: standardize verbosity values"</a>
<li><strong>Previous message:</strong> <a href="17474.php">Gilles Gouaillardet: "Re: [OMPI devel] RFC: standardize verbosity values"</a>
<li><strong>In reply to:</strong> <a href="17474.php">Gilles Gouaillardet: "Re: [OMPI devel] RFC: standardize verbosity values"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17476.php">Nathan Hjelm: "Re: [OMPI devel] RFC: standardize verbosity values"</a>
<li><strong>Reply:</strong> <a href="17476.php">Nathan Hjelm: "Re: [OMPI devel] RFC: standardize verbosity values"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1">&gt; static const char* const priorities[] = {
</span><br>
<span class="quotelev1">&gt;     &quot;ERROR&quot;,
</span><br>
<span class="quotelev1">&gt;     &quot;WARN&quot;,
</span><br>
<span class="quotelev1">&gt;     &quot;INFO&quot;,
</span><br>
<span class="quotelev1">&gt;     &quot;DEBUG&quot;,
</span><br>
<span class="quotelev1">&gt;     &quot;TRACE&quot;
</span><br>
<span class="quotelev1">&gt; };
</span><br>
<p>+1
<br>
<p>I usually use these levels.
<br>
<p>Typical usage:
<br>
<p>ERROR:
<br>
&nbsp;&nbsp;Print an error message on returning a value other than
<br>
&nbsp;&nbsp;OMPI_SUCCESS (and OMPI_ERR_TEMP_OUT_OF_RESOURCE etc.).
<br>
<p>WARN:
<br>
&nbsp;&nbsp;This does not indicate an error. But users/developers should
<br>
&nbsp;&nbsp;be aware on debugging/tuning. For example, network-level
<br>
&nbsp;&nbsp;timeout, hardware queue full, buggy code.
<br>
&nbsp;&nbsp;Often used with OMPI_ERR_TEMP_OUT_OF_RESOURCE.
<br>
<p>INFO:
<br>
&nbsp;&nbsp;Information that may be useful for users and developers.
<br>
&nbsp;&nbsp;Not so verbose. Output only on initialization or
<br>
&nbsp;&nbsp;object creation etc.
<br>
<p>DEBUG:
<br>
&nbsp;&nbsp;Information that is useful only for developers.
<br>
&nbsp;&nbsp;Not so verbose. Output once per MPI routine call.
<br>
<p>TRACE:
<br>
&nbsp;&nbsp;Information that is useful only for developers.
<br>
&nbsp;&nbsp;Verbose. Output more than once per MPI routine call.
<br>
<p>Regards,
<br>
KAWASHIMA Takahiro
<br>
<p><span class="quotelev1">&gt; so what about :
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; static const char* const priorities[] = {
</span><br>
<span class="quotelev1">&gt;     &quot;ERROR&quot;,
</span><br>
<span class="quotelev1">&gt;     &quot;WARN&quot;,
</span><br>
<span class="quotelev1">&gt;     &quot;INFO&quot;,
</span><br>
<span class="quotelev1">&gt;     &quot;DEBUG&quot;,
</span><br>
<span class="quotelev1">&gt;     &quot;TRACE&quot;
</span><br>
<span class="quotelev1">&gt; };
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; and merge debug and trace if there should be only 4
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
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Monday, June 8, 2015, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Could we maybe narrow it down some? If we are going to do it, let’s not
</span><br>
<span class="quotelev2">&gt; &gt; make the mistake of the MCA param system and create so many levels. Nobody
</span><br>
<span class="quotelev2">&gt; &gt; can figure out the right gradation as it is just too fine grained.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I think Nathan’s proposal is the max that makes sense.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I’d also like to see us apply the same logic to the MCA param system.
</span><br>
<span class="quotelev2">&gt; &gt; Let’s just define ~4 named levels and get rid of the fine grained numbering.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Jun 8, 2015, at 2:04 AM, Gilles Gouaillardet &lt;gilles_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; &lt;javascript:_e(%7B%7D,'cvml','gilles_at_[hidden]');&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;  Nathan,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; i think it is a good idea to use names vs numeric values for verbosity.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; what about using &quot;a la&quot; log4c verbosity names ?
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://sourceforge.net/projects/log4c/">http://sourceforge.net/projects/log4c/</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; static const char* const priorities[] = {
</span><br>
<span class="quotelev2">&gt; &gt;     &quot;FATAL&quot;,
</span><br>
<span class="quotelev2">&gt; &gt;     &quot;ALERT&quot;,
</span><br>
<span class="quotelev2">&gt; &gt;     &quot;CRIT&quot;,
</span><br>
<span class="quotelev2">&gt; &gt;     &quot;ERROR&quot;,
</span><br>
<span class="quotelev2">&gt; &gt;     &quot;WARN&quot;,
</span><br>
<span class="quotelev2">&gt; &gt;     &quot;NOTICE&quot;,
</span><br>
<span class="quotelev2">&gt; &gt;     &quot;INFO&quot;,
</span><br>
<span class="quotelev2">&gt; &gt;     &quot;DEBUG&quot;,
</span><br>
<span class="quotelev2">&gt; &gt;     &quot;TRACE&quot;,
</span><br>
<span class="quotelev2">&gt; &gt;     &quot;NOTSET&quot;,
</span><br>
<span class="quotelev2">&gt; &gt;     &quot;UNKNOWN&quot;
</span><br>
<span class="quotelev2">&gt; &gt; };
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
<span class="quotelev2">&gt; &gt; On 5/30/2015 1:32 AM, Nathan Hjelm wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; At the moment we have a loosely enforced standard for verbosity
</span><br>
<span class="quotelev2">&gt; &gt; values. In general frameworks accept anything in the range 0 - 100 with
</span><br>
<span class="quotelev2">&gt; &gt; few exceptions. I am thinking about adding an enumerator for verbosities
</span><br>
<span class="quotelev2">&gt; &gt; that will accept values in this range and certain named constants which
</span><br>
<span class="quotelev2">&gt; &gt; will match with specific verbosity levels. One possible set: none - 0,
</span><br>
<span class="quotelev2">&gt; &gt; low - 25, med - 50, high - 75, max - 100. I am open to any set of named
</span><br>
<span class="quotelev2">&gt; &gt; verbosities.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Thoughts?
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17476.php">Nathan Hjelm: "Re: [OMPI devel] RFC: standardize verbosity values"</a>
<li><strong>Previous message:</strong> <a href="17474.php">Gilles Gouaillardet: "Re: [OMPI devel] RFC: standardize verbosity values"</a>
<li><strong>In reply to:</strong> <a href="17474.php">Gilles Gouaillardet: "Re: [OMPI devel] RFC: standardize verbosity values"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17476.php">Nathan Hjelm: "Re: [OMPI devel] RFC: standardize verbosity values"</a>
<li><strong>Reply:</strong> <a href="17476.php">Nathan Hjelm: "Re: [OMPI devel] RFC: standardize verbosity values"</a>
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

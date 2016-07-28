<?
$subject_val = "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r24665";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Apr 30 22:15:00 2011" -->
<!-- isoreceived="20110501021500" -->
<!-- sent="Sat, 30 Apr 2011 22:14:52 -0400" -->
<!-- isosent="20110501021452" -->
<!-- name="Tim Mattox" -->
<!-- email="timattox_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r24665" -->
<!-- id="BANLkTim6uL3hGdcj0gyiZN_T5XK8oacBug_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="201104291756.p3THuFWe030238_at_sourcehaven.osl.iu.edu" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r24665<br>
<strong>From:</strong> Tim Mattox (<em>timattox_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-04-30 22:14:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2011/05/9231.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r24665"</a>
<li><strong>Previous message:</strong> <a href="9229.php">Jeff Squyres: "Re: [OMPI devel] 1.4.4 .so version numbers"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2011/05/9231.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r24665"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2011/05/9231.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r24665"</a>
<li><strong>Maybe reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2011/05/9232.php">Rainer Keller: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r24665"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Why not do this instead of a big switch statement?
<br>
<p>pval = strtol(msk, NULL, 10);
<br>
if ((pval &gt; 30) || (pval &lt; 1)) {
<br>
&nbsp;&nbsp;opal_output(0, &quot;opal_iftupletoaddr: unknown mask&quot;);
<br>
&nbsp;&nbsp;free(addr);
<br>
&nbsp;&nbsp;return OPAL_ERROR;
<br>
}
<br>
*mask = 0xFFFFFFFF &lt;&lt; (32 - pval);
<br>
<p><p>On Fri, Apr 29, 2011 at 1:56 PM,  &lt;rhc_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; Author: rhc
</span><br>
<span class="quotelev1">&gt; Date: 2011-04-29 13:56:15 EDT (Fri, 29 Apr 2011)
</span><br>
<span class="quotelev1">&gt; New Revision: 24665
</span><br>
<span class="quotelev1">&gt; URL: <a href="https://svn.open-mpi.org/trac/ompi/changeset/24665">https://svn.open-mpi.org/trac/ompi/changeset/24665</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Log:
</span><br>
<span class="quotelev1">&gt; Cover all the netmask values
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Text files modified:
</span><br>
<span class="quotelev1">&gt; &#160; trunk/opal/util/if.c | &#160; 103 +++++++++++++++++++++++++++++++++++++--
</span><br>
<span class="quotelev1">&gt; &#160; 1 files changed, 96 insertions(+), 7 deletions(-)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Modified: trunk/opal/util/if.c
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/opal/util/if.c &#160; &#160; &#160; &#160;(original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/opal/util/if.c &#160; &#160; &#160; &#160;2011-04-29 13:56:15 EDT (Fri, 29 Apr 2011)
</span><br>
<span class="quotelev1">&gt; @@ -534,13 +534,102 @@
</span><br>
<span class="quotelev1">&gt; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160;* much of the addr to use: e.g., /16
</span><br>
<span class="quotelev1">&gt; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160;*/
</span><br>
<span class="quotelev1">&gt; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; pval = strtol(msk, NULL, 10);
</span><br>
<span class="quotelev1">&gt; - &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160;if (24 == pval) {
</span><br>
<span class="quotelev1">&gt; - &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160;*mask = 0xFFFFFF00;
</span><br>
<span class="quotelev1">&gt; - &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160;} else if (16 == pval) {
</span><br>
<span class="quotelev1">&gt; - &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160;*mask = 0xFFFF0000;
</span><br>
<span class="quotelev1">&gt; - &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160;} else if (8 == pval) {
</span><br>
<span class="quotelev1">&gt; - &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160;*mask = 0xFF000000;
</span><br>
<span class="quotelev1">&gt; - &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160;} else {
</span><br>
<span class="quotelev1">&gt; + &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160;switch(pval) {
</span><br>
<span class="quotelev1">&gt; + &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160;case 30:
</span><br>
<span class="quotelev1">&gt; + &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160;*mask = parse_dots(&quot;255.255.255.252&quot;);
</span><br>
<span class="quotelev1">&gt; + &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160;break;
</span><br>
<span class="quotelev1">&gt; + &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160;case 29:
</span><br>
<span class="quotelev1">&gt; + &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160;*mask = parse_dots(&quot;255.255.255.248&quot;);
</span><br>
<span class="quotelev1">&gt; + &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160;break;
</span><br>
<span class="quotelev1">&gt; + &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160;case 28:
</span><br>
<span class="quotelev1">&gt; + &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160;*mask = parse_dots(&quot;255.255.255.240&quot;);
</span><br>
<span class="quotelev1">&gt; + &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160;break;
</span><br>
<span class="quotelev1">&gt; + &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160;case 27:
</span><br>
<span class="quotelev1">&gt; + &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160;*mask = parse_dots(&quot;255.255.255.224&quot;);
</span><br>
<span class="quotelev1">&gt; + &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160;break;
</span><br>
<span class="quotelev1">&gt; + &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160;case 26:
</span><br>
<span class="quotelev1">&gt; + &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160;*mask = parse_dots(&quot;255.255.255.192&quot;);
</span><br>
<span class="quotelev1">&gt; + &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160;break;
</span><br>
<span class="quotelev1">&gt; + &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160;case 25:
</span><br>
<span class="quotelev1">&gt; + &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160;*mask = parse_dots(&quot;255.255.255.128&quot;);
</span><br>
<span class="quotelev1">&gt; + &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160;break;
</span><br>
<span class="quotelev1">&gt; + &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160;case 24:
</span><br>
<span class="quotelev1">&gt; + &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160;break;
</span><br>
<span class="quotelev1">&gt; + &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160;*mask = parse_dots(&quot;255.255.255.0&quot;);
</span><br>
<span class="quotelev1">&gt; + &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160;break;
</span><br>
<span class="quotelev1">&gt; + &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160;case 23:
</span><br>
<span class="quotelev1">&gt; + &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160;*mask = parse_dots(&quot;255.255.254.0&quot;);
</span><br>
<span class="quotelev1">&gt; + &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160;break;
</span><br>
<span class="quotelev1">&gt; + &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160;case 22:
</span><br>
<span class="quotelev1">&gt; + &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160;*mask = parse_dots(&quot;255.255.252.0&quot;);
</span><br>
<span class="quotelev1">&gt; + &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160;break;
</span><br>
<span class="quotelev1">&gt; + &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160;case 21:
</span><br>
<span class="quotelev1">&gt; + &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160;*mask = parse_dots(&quot;255.255.248.0&quot;);
</span><br>
<span class="quotelev1">&gt; + &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160;break;
</span><br>
<span class="quotelev1">&gt; + &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160;case 20:
</span><br>
<span class="quotelev1">&gt; + &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160;*mask = parse_dots(&quot;255.255.240.0&quot;);
</span><br>
<span class="quotelev1">&gt; + &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160;break;
</span><br>
<span class="quotelev1">&gt; + &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160;case 19:
</span><br>
<span class="quotelev1">&gt; + &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160;*mask = parse_dots(&quot;255.255.224.0&quot;);
</span><br>
<span class="quotelev1">&gt; + &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160;break;
</span><br>
<span class="quotelev1">&gt; + &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160;case 18:
</span><br>
<span class="quotelev1">&gt; + &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160;*mask = parse_dots(&quot;255.255.192.0&quot;);
</span><br>
<span class="quotelev1">&gt; + &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160;break;
</span><br>
<span class="quotelev1">&gt; + &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160;case 17:
</span><br>
<span class="quotelev1">&gt; + &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160;*mask = parse_dots(&quot;255.255.128.0&quot;);
</span><br>
<span class="quotelev1">&gt; + &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160;break;
</span><br>
<span class="quotelev1">&gt; + &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160;case 16:
</span><br>
<span class="quotelev1">&gt; + &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160;*mask = parse_dots(&quot;255.255.0.0&quot;);
</span><br>
<span class="quotelev1">&gt; + &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160;break;
</span><br>
<span class="quotelev1">&gt; + &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160;case 15:
</span><br>
<span class="quotelev1">&gt; + &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160;*mask = parse_dots(&quot;255.254.0.0&quot;);
</span><br>
<span class="quotelev1">&gt; + &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160;break;
</span><br>
<span class="quotelev1">&gt; + &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160;case 14:
</span><br>
<span class="quotelev1">&gt; + &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160;*mask = parse_dots(&quot;255.252.0.0&quot;);
</span><br>
<span class="quotelev1">&gt; + &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160;break;
</span><br>
<span class="quotelev1">&gt; + &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160;case 13:
</span><br>
<span class="quotelev1">&gt; + &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160;*mask = parse_dots(&quot;255.248.0.0&quot;);
</span><br>
<span class="quotelev1">&gt; + &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160;break;
</span><br>
<span class="quotelev1">&gt; + &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160;case 12:
</span><br>
<span class="quotelev1">&gt; + &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160;*mask = parse_dots(&quot;255.240.0.0&quot;);
</span><br>
<span class="quotelev1">&gt; + &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160;break;
</span><br>
<span class="quotelev1">&gt; + &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160;case 11:
</span><br>
<span class="quotelev1">&gt; + &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160;*mask = parse_dots(&quot;255.224.0.0&quot;);
</span><br>
<span class="quotelev1">&gt; + &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160;break;
</span><br>
<span class="quotelev1">&gt; + &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160;case 10:
</span><br>
<span class="quotelev1">&gt; + &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160;*mask = parse_dots(&quot;255.192.0.0&quot;);
</span><br>
<span class="quotelev1">&gt; + &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160;break;
</span><br>
<span class="quotelev1">&gt; + &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160;case 9:
</span><br>
<span class="quotelev1">&gt; + &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160;*mask = parse_dots(&quot;255.128.0.0&quot;);
</span><br>
<span class="quotelev1">&gt; + &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160;break;
</span><br>
<span class="quotelev1">&gt; + &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160;case 8:
</span><br>
<span class="quotelev1">&gt; + &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160;*mask = parse_dots(&quot;255.0.0.0&quot;);
</span><br>
<span class="quotelev1">&gt; + &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160;break;
</span><br>
<span class="quotelev1">&gt; + &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160;case 7:
</span><br>
<span class="quotelev1">&gt; + &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160;*mask = parse_dots(&quot;254.0.0.0&quot;);
</span><br>
<span class="quotelev1">&gt; + &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160;break;
</span><br>
<span class="quotelev1">&gt; + &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160;case 6:
</span><br>
<span class="quotelev1">&gt; + &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160;*mask = parse_dots(&quot;252.0.0.0&quot;);
</span><br>
<span class="quotelev1">&gt; + &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160;break;
</span><br>
<span class="quotelev1">&gt; + &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160;case 5:
</span><br>
<span class="quotelev1">&gt; + &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160;*mask = parse_dots(&quot;248.0.0.0&quot;);
</span><br>
<span class="quotelev1">&gt; + &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160;break;
</span><br>
<span class="quotelev1">&gt; + &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160;case 4:
</span><br>
<span class="quotelev1">&gt; + &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160;*mask = parse_dots(&quot;240.0.0.0&quot;);
</span><br>
<span class="quotelev1">&gt; + &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160;break;
</span><br>
<span class="quotelev1">&gt; + &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160;case 3:
</span><br>
<span class="quotelev1">&gt; + &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160;*mask = parse_dots(&quot;224.0.0.0&quot;);
</span><br>
<span class="quotelev1">&gt; + &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160;break;
</span><br>
<span class="quotelev1">&gt; + &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160;case 2:
</span><br>
<span class="quotelev1">&gt; + &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160;*mask = parse_dots(&quot;192.0.0.0&quot;);
</span><br>
<span class="quotelev1">&gt; + &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160;break;
</span><br>
<span class="quotelev1">&gt; + &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160;case 1:
</span><br>
<span class="quotelev1">&gt; + &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160;*mask = parse_dots(&quot;128.0.0.0&quot;);
</span><br>
<span class="quotelev1">&gt; + &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160;break;
</span><br>
<span class="quotelev1">&gt; + &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160;case 0:
</span><br>
<span class="quotelev1">&gt; + &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160;*mask = parse_dots(&quot;0.0.0.0&quot;);
</span><br>
<span class="quotelev1">&gt; + &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160;break;
</span><br>
<span class="quotelev1">&gt; + &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160;default:
</span><br>
<span class="quotelev1">&gt; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; opal_output(0, &quot;opal_iftupletoaddr: unknown mask&quot;);
</span><br>
<span class="quotelev1">&gt; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; free(addr);
</span><br>
<span class="quotelev1">&gt; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; return OPAL_ERROR;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; svn-full mailing list
</span><br>
<span class="quotelev1">&gt; svn-full_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/svn-full">http://www.open-mpi.org/mailman/listinfo.cgi/svn-full</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
Tim Mattox, Ph.D. - <a href="http://homepage.mac.com/tmattox/">http://homepage.mac.com/tmattox/</a>
&#160;timattox_at_[hidden] || tmattox_at_[hidden]
&#160; &#160; I'm a bright... <a href="http://www.the-brights.net/">http://www.the-brights.net/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2011/05/9231.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r24665"</a>
<li><strong>Previous message:</strong> <a href="9229.php">Jeff Squyres: "Re: [OMPI devel] 1.4.4 .so version numbers"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2011/05/9231.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r24665"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2011/05/9231.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r24665"</a>
<li><strong>Maybe reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2011/05/9232.php">Rainer Keller: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r24665"</a>
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

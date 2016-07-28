<?
$subject_val = "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r24665";
include("../../include/msg-header.inc");
?>
<!-- received="Mon May  2 03:47:45 2011" -->
<!-- isoreceived="20110502074745" -->
<!-- sent="Mon, 2 May 2011 09:48:17 +0200" -->
<!-- isosent="20110502074817" -->
<!-- name="Rainer Keller" -->
<!-- email="keller_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r24665" -->
<!-- id="201105020948.17893.keller_at_hlrs.de" -->
<!-- charset="iso-8859-1" -->
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
<strong>From:</strong> Rainer Keller (<em>keller_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-05-02 03:48:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9233.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r24665"</a>
<li><strong>Previous message:</strong> <a href="9231.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r24665"</a>
<li><strong>Maybe in reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2011/04/9230.php">Tim Mattox: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r24665"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9233.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r24665"</a>
<li><strong>Reply:</strong> <a href="9233.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r24665"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ralph,
<br>
two issues:
<br>
<p>On Friday 29 April 2011 19:56:15 rhc_at_[hidden] wrote:
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
<span class="quotelev1">&gt;    trunk/opal/util/if.c |   103 +++++++++++++++++++++++++++++++++++++--
</span><br>
<span class="quotelev1">&gt;    1 files changed, 96 insertions(+), 7 deletions(-)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Modified: trunk/opal/util/if.c
</span><br>
<span class="quotelev1">&gt; ===========================================================================
</span><br>
<span class="quotelev1">&gt; === --- trunk/opal/util/if.c	(original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/opal/util/if.c	2011-04-29 13:56:15 EDT (Fri, 29 Apr 2011)
</span><br>
<span class="quotelev1">&gt; @@ -534,13 +534,102 @@
</span><br>
<span class="quotelev1">&gt;                   * much of the addr to use: e.g., /16
</span><br>
<span class="quotelev1">&gt;                   */
</span><br>
<span class="quotelev1">&gt;                  pval = strtol(msk, NULL, 10);
</span><br>
<span class="quotelev1">&gt; -                if (24 == pval) {
</span><br>
<span class="quotelev1">&gt; -                    *mask = 0xFFFFFF00;
</span><br>
<span class="quotelev1">&gt; -                } else if (16 == pval) {
</span><br>
<span class="quotelev1">&gt; -                    *mask = 0xFFFF0000;
</span><br>
<span class="quotelev1">&gt; -                } else if (8 == pval) {
</span><br>
<span class="quotelev1">&gt; -                    *mask = 0xFF000000;
</span><br>
<span class="quotelev1">&gt; -                } else {
</span><br>
<span class="quotelev1">&gt; +                switch(pval) {
</span><br>
<span class="quotelev1">&gt; +                case 30:
</span><br>
<span class="quotelev1">&gt; +                    *mask = parse_dots(&quot;255.255.255.252&quot;);
</span><br>
<span class="quotelev1">&gt; +                    break;
</span><br>
<span class="quotelev1">&gt; +                case 29:
</span><br>
<span class="quotelev1">&gt; +                    *mask = parse_dots(&quot;255.255.255.248&quot;);
</span><br>
<span class="quotelev1">&gt; +                    break;
</span><br>
<span class="quotelev1">&gt; +                case 28:
</span><br>
<span class="quotelev1">&gt; +                    *mask = parse_dots(&quot;255.255.255.240&quot;);
</span><br>
<span class="quotelev1">&gt; +                    break;
</span><br>
<span class="quotelev1">&gt; +                case 27:
</span><br>
<span class="quotelev1">&gt; +                    *mask = parse_dots(&quot;255.255.255.224&quot;);
</span><br>
<span class="quotelev1">&gt; +                    break;
</span><br>
<span class="quotelev1">&gt; +                case 26:
</span><br>
<span class="quotelev1">&gt; +                    *mask = parse_dots(&quot;255.255.255.192&quot;);
</span><br>
<span class="quotelev1">&gt; +                    break;
</span><br>
<span class="quotelev1">&gt; +                case 25:
</span><br>
<span class="quotelev1">&gt; +                    *mask = parse_dots(&quot;255.255.255.128&quot;);
</span><br>
<span class="quotelev1">&gt; +                    break;
</span><br>
<span class="quotelev1">&gt; +                case 24:
</span><br>
<span class="quotelev1">&gt; +                    break;
</span><br>
<span class="quotelev1">&gt; +                    *mask = parse_dots(&quot;255.255.255.0&quot;);
</span><br>
<span class="quotelev1">&gt; +                    break;
</span><br>
1 issue: buglet in
<br>
case 24 -&gt; break then parse_dots, then break again ,-]
<br>
<p>Well, the other issue Tim already mentioned. I would vote for making the code 
<br>
readable, aka short.
<br>
<p>Thanks!
<br>
Rainer
<br>
<pre>
-- 
----------------------------------------------------------------
 Dr.-Ing. Rainer Keller  <a href="http://www.hlrs.de/people/keller">http://www.hlrs.de/people/keller</a>
 HLRS                         Tel: ++49 (0)711-685 6 5858
 Nobelstrasse 19                 Fax: ++49 (0)711-685 6 5832
 70550 Stuttgart                    email: keller_at_[hidden]     
 Germany                             AIM/Skype:rusraink
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9233.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r24665"</a>
<li><strong>Previous message:</strong> <a href="9231.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r24665"</a>
<li><strong>Maybe in reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2011/04/9230.php">Tim Mattox: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r24665"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9233.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r24665"</a>
<li><strong>Reply:</strong> <a href="9233.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r24665"</a>
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

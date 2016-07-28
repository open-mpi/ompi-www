<?
$subject_val = "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r24665";
include("../../include/msg-header.inc");
?>
<!-- received="Sun May  1 10:44:42 2011" -->
<!-- isoreceived="20110501144442" -->
<!-- sent="Sun, 1 May 2011 08:44:32 -0600" -->
<!-- isosent="20110501144432" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r24665" -->
<!-- id="7C62E9D0-2A23-443E-AE2F-45E5E004C327_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="BANLkTim6uL3hGdcj0gyiZN_T5XK8oacBug_at_mail.gmail.com" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-05-01 10:44:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9232.php">Rainer Keller: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r24665"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2011/04/9230.php">Tim Mattox: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r24665"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2011/04/9230.php">Tim Mattox: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r24665"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9237.php">Larry Baker: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r24665"</a>
<li><strong>Reply:</strong> <a href="9237.php">Larry Baker: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r24665"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Mostly because I thought it of some value to make the resulting mask readable and apparent to someone looking at the code.
<br>
<p><p>On Apr 30, 2011, at 8:14 PM, Tim Mattox wrote:
<br>
<p><span class="quotelev1">&gt; Why not do this instead of a big switch statement?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; pval = strtol(msk, NULL, 10);
</span><br>
<span class="quotelev1">&gt; if ((pval &gt; 30) || (pval &lt; 1)) {
</span><br>
<span class="quotelev1">&gt;  opal_output(0, &quot;opal_iftupletoaddr: unknown mask&quot;);
</span><br>
<span class="quotelev1">&gt;  free(addr);
</span><br>
<span class="quotelev1">&gt;  return OPAL_ERROR;
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; *mask = 0xFFFFFFFF &lt;&lt; (32 - pval);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Fri, Apr 29, 2011 at 1:56 PM,  &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Author: rhc
</span><br>
<span class="quotelev2">&gt;&gt; Date: 2011-04-29 13:56:15 EDT (Fri, 29 Apr 2011)
</span><br>
<span class="quotelev2">&gt;&gt; New Revision: 24665
</span><br>
<span class="quotelev2">&gt;&gt; URL: <a href="https://svn.open-mpi.org/trac/ompi/changeset/24665">https://svn.open-mpi.org/trac/ompi/changeset/24665</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Log:
</span><br>
<span class="quotelev2">&gt;&gt; Cover all the netmask values
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Text files modified:
</span><br>
<span class="quotelev2">&gt;&gt;   trunk/opal/util/if.c |   103 +++++++++++++++++++++++++++++++++++++--
</span><br>
<span class="quotelev2">&gt;&gt;   1 files changed, 96 insertions(+), 7 deletions(-)
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Modified: trunk/opal/util/if.c
</span><br>
<span class="quotelev2">&gt;&gt; ==============================================================================
</span><br>
<span class="quotelev2">&gt;&gt; --- trunk/opal/util/if.c        (original)
</span><br>
<span class="quotelev2">&gt;&gt; +++ trunk/opal/util/if.c        2011-04-29 13:56:15 EDT (Fri, 29 Apr 2011)
</span><br>
<span class="quotelev2">&gt;&gt; @@ -534,13 +534,102 @@
</span><br>
<span class="quotelev2">&gt;&gt;                  * much of the addr to use: e.g., /16
</span><br>
<span class="quotelev2">&gt;&gt;                  */
</span><br>
<span class="quotelev2">&gt;&gt;                 pval = strtol(msk, NULL, 10);
</span><br>
<span class="quotelev2">&gt;&gt; -                if (24 == pval) {
</span><br>
<span class="quotelev2">&gt;&gt; -                    *mask = 0xFFFFFF00;
</span><br>
<span class="quotelev2">&gt;&gt; -                } else if (16 == pval) {
</span><br>
<span class="quotelev2">&gt;&gt; -                    *mask = 0xFFFF0000;
</span><br>
<span class="quotelev2">&gt;&gt; -                } else if (8 == pval) {
</span><br>
<span class="quotelev2">&gt;&gt; -                    *mask = 0xFF000000;
</span><br>
<span class="quotelev2">&gt;&gt; -                } else {
</span><br>
<span class="quotelev2">&gt;&gt; +                switch(pval) {
</span><br>
<span class="quotelev2">&gt;&gt; +                case 30:
</span><br>
<span class="quotelev2">&gt;&gt; +                    *mask = parse_dots(&quot;255.255.255.252&quot;);
</span><br>
<span class="quotelev2">&gt;&gt; +                    break;
</span><br>
<span class="quotelev2">&gt;&gt; +                case 29:
</span><br>
<span class="quotelev2">&gt;&gt; +                    *mask = parse_dots(&quot;255.255.255.248&quot;);
</span><br>
<span class="quotelev2">&gt;&gt; +                    break;
</span><br>
<span class="quotelev2">&gt;&gt; +                case 28:
</span><br>
<span class="quotelev2">&gt;&gt; +                    *mask = parse_dots(&quot;255.255.255.240&quot;);
</span><br>
<span class="quotelev2">&gt;&gt; +                    break;
</span><br>
<span class="quotelev2">&gt;&gt; +                case 27:
</span><br>
<span class="quotelev2">&gt;&gt; +                    *mask = parse_dots(&quot;255.255.255.224&quot;);
</span><br>
<span class="quotelev2">&gt;&gt; +                    break;
</span><br>
<span class="quotelev2">&gt;&gt; +                case 26:
</span><br>
<span class="quotelev2">&gt;&gt; +                    *mask = parse_dots(&quot;255.255.255.192&quot;);
</span><br>
<span class="quotelev2">&gt;&gt; +                    break;
</span><br>
<span class="quotelev2">&gt;&gt; +                case 25:
</span><br>
<span class="quotelev2">&gt;&gt; +                    *mask = parse_dots(&quot;255.255.255.128&quot;);
</span><br>
<span class="quotelev2">&gt;&gt; +                    break;
</span><br>
<span class="quotelev2">&gt;&gt; +                case 24:
</span><br>
<span class="quotelev2">&gt;&gt; +                    break;
</span><br>
<span class="quotelev2">&gt;&gt; +                    *mask = parse_dots(&quot;255.255.255.0&quot;);
</span><br>
<span class="quotelev2">&gt;&gt; +                    break;
</span><br>
<span class="quotelev2">&gt;&gt; +                case 23:
</span><br>
<span class="quotelev2">&gt;&gt; +                    *mask = parse_dots(&quot;255.255.254.0&quot;);
</span><br>
<span class="quotelev2">&gt;&gt; +                    break;
</span><br>
<span class="quotelev2">&gt;&gt; +                case 22:
</span><br>
<span class="quotelev2">&gt;&gt; +                    *mask = parse_dots(&quot;255.255.252.0&quot;);
</span><br>
<span class="quotelev2">&gt;&gt; +                    break;
</span><br>
<span class="quotelev2">&gt;&gt; +                case 21:
</span><br>
<span class="quotelev2">&gt;&gt; +                    *mask = parse_dots(&quot;255.255.248.0&quot;);
</span><br>
<span class="quotelev2">&gt;&gt; +                    break;
</span><br>
<span class="quotelev2">&gt;&gt; +                case 20:
</span><br>
<span class="quotelev2">&gt;&gt; +                    *mask = parse_dots(&quot;255.255.240.0&quot;);
</span><br>
<span class="quotelev2">&gt;&gt; +                    break;
</span><br>
<span class="quotelev2">&gt;&gt; +                case 19:
</span><br>
<span class="quotelev2">&gt;&gt; +                    *mask = parse_dots(&quot;255.255.224.0&quot;);
</span><br>
<span class="quotelev2">&gt;&gt; +                    break;
</span><br>
<span class="quotelev2">&gt;&gt; +                case 18:
</span><br>
<span class="quotelev2">&gt;&gt; +                    *mask = parse_dots(&quot;255.255.192.0&quot;);
</span><br>
<span class="quotelev2">&gt;&gt; +                    break;
</span><br>
<span class="quotelev2">&gt;&gt; +                case 17:
</span><br>
<span class="quotelev2">&gt;&gt; +                    *mask = parse_dots(&quot;255.255.128.0&quot;);
</span><br>
<span class="quotelev2">&gt;&gt; +                    break;
</span><br>
<span class="quotelev2">&gt;&gt; +                case 16:
</span><br>
<span class="quotelev2">&gt;&gt; +                    *mask = parse_dots(&quot;255.255.0.0&quot;);
</span><br>
<span class="quotelev2">&gt;&gt; +                    break;
</span><br>
<span class="quotelev2">&gt;&gt; +                case 15:
</span><br>
<span class="quotelev2">&gt;&gt; +                    *mask = parse_dots(&quot;255.254.0.0&quot;);
</span><br>
<span class="quotelev2">&gt;&gt; +                    break;
</span><br>
<span class="quotelev2">&gt;&gt; +                case 14:
</span><br>
<span class="quotelev2">&gt;&gt; +                    *mask = parse_dots(&quot;255.252.0.0&quot;);
</span><br>
<span class="quotelev2">&gt;&gt; +                    break;
</span><br>
<span class="quotelev2">&gt;&gt; +                case 13:
</span><br>
<span class="quotelev2">&gt;&gt; +                    *mask = parse_dots(&quot;255.248.0.0&quot;);
</span><br>
<span class="quotelev2">&gt;&gt; +                    break;
</span><br>
<span class="quotelev2">&gt;&gt; +                case 12:
</span><br>
<span class="quotelev2">&gt;&gt; +                    *mask = parse_dots(&quot;255.240.0.0&quot;);
</span><br>
<span class="quotelev2">&gt;&gt; +                    break;
</span><br>
<span class="quotelev2">&gt;&gt; +                case 11:
</span><br>
<span class="quotelev2">&gt;&gt; +                    *mask = parse_dots(&quot;255.224.0.0&quot;);
</span><br>
<span class="quotelev2">&gt;&gt; +                    break;
</span><br>
<span class="quotelev2">&gt;&gt; +                case 10:
</span><br>
<span class="quotelev2">&gt;&gt; +                    *mask = parse_dots(&quot;255.192.0.0&quot;);
</span><br>
<span class="quotelev2">&gt;&gt; +                    break;
</span><br>
<span class="quotelev2">&gt;&gt; +                case 9:
</span><br>
<span class="quotelev2">&gt;&gt; +                    *mask = parse_dots(&quot;255.128.0.0&quot;);
</span><br>
<span class="quotelev2">&gt;&gt; +                    break;
</span><br>
<span class="quotelev2">&gt;&gt; +                case 8:
</span><br>
<span class="quotelev2">&gt;&gt; +                    *mask = parse_dots(&quot;255.0.0.0&quot;);
</span><br>
<span class="quotelev2">&gt;&gt; +                    break;
</span><br>
<span class="quotelev2">&gt;&gt; +                case 7:
</span><br>
<span class="quotelev2">&gt;&gt; +                    *mask = parse_dots(&quot;254.0.0.0&quot;);
</span><br>
<span class="quotelev2">&gt;&gt; +                    break;
</span><br>
<span class="quotelev2">&gt;&gt; +                case 6:
</span><br>
<span class="quotelev2">&gt;&gt; +                    *mask = parse_dots(&quot;252.0.0.0&quot;);
</span><br>
<span class="quotelev2">&gt;&gt; +                    break;
</span><br>
<span class="quotelev2">&gt;&gt; +                case 5:
</span><br>
<span class="quotelev2">&gt;&gt; +                    *mask = parse_dots(&quot;248.0.0.0&quot;);
</span><br>
<span class="quotelev2">&gt;&gt; +                    break;
</span><br>
<span class="quotelev2">&gt;&gt; +                case 4:
</span><br>
<span class="quotelev2">&gt;&gt; +                    *mask = parse_dots(&quot;240.0.0.0&quot;);
</span><br>
<span class="quotelev2">&gt;&gt; +                    break;
</span><br>
<span class="quotelev2">&gt;&gt; +                case 3:
</span><br>
<span class="quotelev2">&gt;&gt; +                    *mask = parse_dots(&quot;224.0.0.0&quot;);
</span><br>
<span class="quotelev2">&gt;&gt; +                    break;
</span><br>
<span class="quotelev2">&gt;&gt; +                case 2:
</span><br>
<span class="quotelev2">&gt;&gt; +                    *mask = parse_dots(&quot;192.0.0.0&quot;);
</span><br>
<span class="quotelev2">&gt;&gt; +                    break;
</span><br>
<span class="quotelev2">&gt;&gt; +                case 1:
</span><br>
<span class="quotelev2">&gt;&gt; +                    *mask = parse_dots(&quot;128.0.0.0&quot;);
</span><br>
<span class="quotelev2">&gt;&gt; +                    break;
</span><br>
<span class="quotelev2">&gt;&gt; +                case 0:
</span><br>
<span class="quotelev2">&gt;&gt; +                    *mask = parse_dots(&quot;0.0.0.0&quot;);
</span><br>
<span class="quotelev2">&gt;&gt; +                    break;
</span><br>
<span class="quotelev2">&gt;&gt; +                default:
</span><br>
<span class="quotelev2">&gt;&gt;                     opal_output(0, &quot;opal_iftupletoaddr: unknown mask&quot;);
</span><br>
<span class="quotelev2">&gt;&gt;                     free(addr);
</span><br>
<span class="quotelev2">&gt;&gt;                     return OPAL_ERROR;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; svn-full mailing list
</span><br>
<span class="quotelev2">&gt;&gt; svn-full_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/svn-full">http://www.open-mpi.org/mailman/listinfo.cgi/svn-full</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Tim Mattox, Ph.D. - <a href="http://homepage.mac.com/tmattox/">http://homepage.mac.com/tmattox/</a>
</span><br>
<span class="quotelev1">&gt;  timattox_at_[hidden] || tmattox_at_[hidden]
</span><br>
<span class="quotelev1">&gt;     I'm a bright... <a href="http://www.the-brights.net/">http://www.the-brights.net/</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9232.php">Rainer Keller: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r24665"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2011/04/9230.php">Tim Mattox: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r24665"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2011/04/9230.php">Tim Mattox: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r24665"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9237.php">Larry Baker: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r24665"</a>
<li><strong>Reply:</strong> <a href="9237.php">Larry Baker: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r24665"</a>
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

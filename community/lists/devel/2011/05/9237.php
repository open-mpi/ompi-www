<?
$subject_val = "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r24665";
include("../../include/msg-header.inc");
?>
<!-- received="Mon May  2 14:17:05 2011" -->
<!-- isoreceived="20110502181705" -->
<!-- sent="Mon, 2 May 2011 11:17:00 -0700" -->
<!-- isosent="20110502181700" -->
<!-- name="Larry Baker" -->
<!-- email="baker_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r24665" -->
<!-- id="C6C4BC80-ECCA-4240-B495-B9DDE525BACE_at_usgs.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="7C62E9D0-2A23-443E-AE2F-45E5E004C327_at_open-mpi.org" -->
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
<strong>From:</strong> Larry Baker (<em>baker_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-05-02 14:17:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9238.php">Peter Kjellström: "Re: [OMPI devel] ofud on InfiniPath?"</a>
<li><strong>Previous message:</strong> <a href="9236.php">Paul H. Hargrove: "[OMPI devel] ofud on InfiniPath?"</a>
<li><strong>In reply to:</strong> <a href="9231.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r24665"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9232.php">Rainer Keller: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r24665"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ralph,
<br>
<p>What about creating a lookup table of static const values with  
<br>
comments for readability, and use Tim's code, except for the last  
<br>
line, which would lookup the value instead of computing it?
<br>
<p>I don't know how often this code path is traversed.  Seeing only this  
<br>
snippet of code, I prefer Tim's code because it is clear what the  
<br>
valid values are for the input argument (no need to scan all the  
<br>
&quot;case&quot;s, find there is a &quot;default&quot;, and deduce what the valid input  
<br>
values are), it is more efficient in space and time, and, to my eyes,  
<br>
more readable (I don't have to know what parse_dots() returns).  I  
<br>
suppose a case could also be made that Tim's code is more  
<br>
maintainable, given the discovery already of a misplaced (though  
<br>
benign) break and the possibility of a typo in all those calls to  
<br>
parse_dots().
<br>
<p>Just my $.02
<br>
<p>Larry Baker
<br>
US Geological Survey
<br>
650-329-5608
<br>
baker_at_[hidden]
<br>
<p>On May 1, 2011, at 7:44 AM, Ralph Castain wrote:
<br>
<p><span class="quotelev1">&gt; Mostly because I thought it of some value to make the resulting mask  
</span><br>
<span class="quotelev1">&gt; readable and apparent to someone looking at the code.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Apr 30, 2011, at 8:14 PM, Tim Mattox wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Why not do this instead of a big switch statement?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; pval = strtol(msk, NULL, 10);
</span><br>
<span class="quotelev2">&gt;&gt; if ((pval &gt; 30) || (pval &lt; 1)) {
</span><br>
<span class="quotelev2">&gt;&gt; opal_output(0, &quot;opal_iftupletoaddr: unknown mask&quot;);
</span><br>
<span class="quotelev2">&gt;&gt; free(addr);
</span><br>
<span class="quotelev2">&gt;&gt; return OPAL_ERROR;
</span><br>
<span class="quotelev2">&gt;&gt; }
</span><br>
<span class="quotelev2">&gt;&gt; *mask = 0xFFFFFFFF &lt;&lt; (32 - pval);
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Fri, Apr 29, 2011 at 1:56 PM,  &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Author: rhc
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Date: 2011-04-29 13:56:15 EDT (Fri, 29 Apr 2011)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; New Revision: 24665
</span><br>
<span class="quotelev3">&gt;&gt;&gt; URL: <a href="https://svn.open-mpi.org/trac/ompi/changeset/24665">https://svn.open-mpi.org/trac/ompi/changeset/24665</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Log:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Cover all the netmask values
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Text files modified:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  trunk/opal/util/if.c |   103 ++++++++++++++++++++++++++++++++++++ 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +--
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  1 files changed, 96 insertions(+), 7 deletions(-)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Modified: trunk/opal/util/if.c
</span><br>
<span class="quotelev3">&gt;&gt;&gt; = 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; = 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; = 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; = 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; = 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; = 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; = 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; = 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; = 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; = 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ====================================================================
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --- trunk/opal/util/if.c        (original)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +++ trunk/opal/util/if.c        2011-04-29 13:56:15 EDT (Fri, 29  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Apr 2011)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; @@ -534,13 +534,102 @@
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                 * much of the addr to use: e.g., /16
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                 */
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                pval = strtol(msk, NULL, 10);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -                if (24 == pval) {
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -                    *mask = 0xFFFFFF00;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -                } else if (16 == pval) {
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -                    *mask = 0xFFFF0000;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -                } else if (8 == pval) {
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -                    *mask = 0xFF000000;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -                } else {
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +                switch(pval) {
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +                case 30:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +                    *mask = parse_dots(&quot;255.255.255.252&quot;);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +                    break;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +                case 29:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +                    *mask = parse_dots(&quot;255.255.255.248&quot;);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +                    break;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +                case 28:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +                    *mask = parse_dots(&quot;255.255.255.240&quot;);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +                    break;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +                case 27:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +                    *mask = parse_dots(&quot;255.255.255.224&quot;);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +                    break;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +                case 26:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +                    *mask = parse_dots(&quot;255.255.255.192&quot;);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +                    break;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +                case 25:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +                    *mask = parse_dots(&quot;255.255.255.128&quot;);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +                    break;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +                case 24:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +                    break;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +                    *mask = parse_dots(&quot;255.255.255.0&quot;);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +                    break;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +                case 23:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +                    *mask = parse_dots(&quot;255.255.254.0&quot;);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +                    break;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +                case 22:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +                    *mask = parse_dots(&quot;255.255.252.0&quot;);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +                    break;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +                case 21:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +                    *mask = parse_dots(&quot;255.255.248.0&quot;);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +                    break;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +                case 20:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +                    *mask = parse_dots(&quot;255.255.240.0&quot;);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +                    break;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +                case 19:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +                    *mask = parse_dots(&quot;255.255.224.0&quot;);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +                    break;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +                case 18:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +                    *mask = parse_dots(&quot;255.255.192.0&quot;);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +                    break;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +                case 17:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +                    *mask = parse_dots(&quot;255.255.128.0&quot;);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +                    break;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +                case 16:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +                    *mask = parse_dots(&quot;255.255.0.0&quot;);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +                    break;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +                case 15:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +                    *mask = parse_dots(&quot;255.254.0.0&quot;);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +                    break;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +                case 14:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +                    *mask = parse_dots(&quot;255.252.0.0&quot;);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +                    break;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +                case 13:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +                    *mask = parse_dots(&quot;255.248.0.0&quot;);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +                    break;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +                case 12:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +                    *mask = parse_dots(&quot;255.240.0.0&quot;);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +                    break;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +                case 11:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +                    *mask = parse_dots(&quot;255.224.0.0&quot;);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +                    break;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +                case 10:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +                    *mask = parse_dots(&quot;255.192.0.0&quot;);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +                    break;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +                case 9:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +                    *mask = parse_dots(&quot;255.128.0.0&quot;);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +                    break;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +                case 8:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +                    *mask = parse_dots(&quot;255.0.0.0&quot;);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +                    break;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +                case 7:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +                    *mask = parse_dots(&quot;254.0.0.0&quot;);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +                    break;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +                case 6:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +                    *mask = parse_dots(&quot;252.0.0.0&quot;);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +                    break;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +                case 5:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +                    *mask = parse_dots(&quot;248.0.0.0&quot;);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +                    break;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +                case 4:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +                    *mask = parse_dots(&quot;240.0.0.0&quot;);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +                    break;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +                case 3:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +                    *mask = parse_dots(&quot;224.0.0.0&quot;);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +                    break;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +                case 2:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +                    *mask = parse_dots(&quot;192.0.0.0&quot;);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +                    break;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +                case 1:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +                    *mask = parse_dots(&quot;128.0.0.0&quot;);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +                    break;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +                case 0:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +                    *mask = parse_dots(&quot;0.0.0.0&quot;);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +                    break;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +                default:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                    opal_output(0, &quot;opal_iftupletoaddr: unknown  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mask&quot;);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                    free(addr);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                    return OPAL_ERROR;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; svn-full mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; svn-full_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/svn-full">http://www.open-mpi.org/mailman/listinfo.cgi/svn-full</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; Tim Mattox, Ph.D. - <a href="http://homepage.mac.com/tmattox/">http://homepage.mac.com/tmattox/</a>
</span><br>
<span class="quotelev2">&gt;&gt; timattox_at_[hidden] || tmattox_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;    I'm a bright... <a href="http://www.the-brights.net/">http://www.the-brights.net/</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9238.php">Peter Kjellström: "Re: [OMPI devel] ofud on InfiniPath?"</a>
<li><strong>Previous message:</strong> <a href="9236.php">Paul H. Hargrove: "[OMPI devel] ofud on InfiniPath?"</a>
<li><strong>In reply to:</strong> <a href="9231.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r24665"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9232.php">Rainer Keller: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r24665"</a>
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

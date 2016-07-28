<?
$subject_val = "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r24665";
include("../../include/msg-header.inc");
?>
<!-- received="Mon May  2 08:19:28 2011" -->
<!-- isoreceived="20110502121928" -->
<!-- sent="Mon, 2 May 2011 06:19:19 -0600" -->
<!-- isosent="20110502121919" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r24665" -->
<!-- id="603EDCEC-EF3F-4CDD-95B9-B245D12A261D_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="201105020948.17893.keller_at_hlrs.de" -->
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
<strong>Date:</strong> 2011-05-02 08:19:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9234.php">Wesley Bland: "Re: [OMPI devel] Open MPI Developers Meeting Agenda"</a>
<li><strong>Previous message:</strong> <a href="9232.php">Rainer Keller: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r24665"</a>
<li><strong>In reply to:</strong> <a href="9232.php">Rainer Keller: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r24665"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On May 2, 2011, at 1:48 AM, Rainer Keller wrote:
<br>
<p><span class="quotelev1">&gt; Ralph,
</span><br>
<span class="quotelev1">&gt; two issues:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Friday 29 April 2011 19:56:15 rhc_at_[hidden] wrote:
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
<span class="quotelev2">&gt;&gt; ===========================================================================
</span><br>
<span class="quotelev2">&gt;&gt; === --- trunk/opal/util/if.c	(original)
</span><br>
<span class="quotelev2">&gt;&gt; +++ trunk/opal/util/if.c	2011-04-29 13:56:15 EDT (Fri, 29 Apr 2011)
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
<span class="quotelev1">&gt; 1 issue: buglet in
</span><br>
<span class="quotelev1">&gt; case 24 -&gt; break then parse_dots, then break again ,-]
</span><br>
<p>Ick - will fix. Thanks!
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Well, the other issue Tim already mentioned. I would vote for making the code 
</span><br>
<span class="quotelev1">&gt; readable, aka short.
</span><br>
<p>I guess I disagree - to me, clearly seeing the resulting netmask is more important than creating short code.
<br>
<p>It isn't like we increase the maintenance load with the extra lines, guys. This code should never change.
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks!
</span><br>
<span class="quotelev1">&gt; Rainer
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; ----------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; Dr.-Ing. Rainer Keller  <a href="http://www.hlrs.de/people/keller">http://www.hlrs.de/people/keller</a>
</span><br>
<span class="quotelev1">&gt; HLRS                         Tel: ++49 (0)711-685 6 5858
</span><br>
<span class="quotelev1">&gt; Nobelstrasse 19                 Fax: ++49 (0)711-685 6 5832
</span><br>
<span class="quotelev1">&gt; 70550 Stuttgart                    email: keller_at_[hidden]     
</span><br>
<span class="quotelev1">&gt; Germany                             AIM/Skype:rusraink
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
<li><strong>Next message:</strong> <a href="9234.php">Wesley Bland: "Re: [OMPI devel] Open MPI Developers Meeting Agenda"</a>
<li><strong>Previous message:</strong> <a href="9232.php">Rainer Keller: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r24665"</a>
<li><strong>In reply to:</strong> <a href="9232.php">Rainer Keller: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r24665"</a>
<!-- nextthread="start" -->
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

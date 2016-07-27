<?
$subject_val = "[hwloc-devel] Fwd:  [hwloc-svn] svn:hwloc r2868";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Dec  3 05:31:34 2010" -->
<!-- isoreceived="20101203103134" -->
<!-- sent="Fri, 3 Dec 2010 11:31:21 +0100" -->
<!-- isosent="20101203103121" -->
<!-- name="Jiri Hladky" -->
<!-- email="hladky.jiri_at_[hidden]" -->
<!-- subject="[hwloc-devel] Fwd:  [hwloc-svn] svn:hwloc r2868" -->
<!-- id="AANLkTikTt7KsX6uF-1A5+GM=a8=x8hDYoH62b77Ezr3p_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="AANLkTimCHVP-7CTQ1Qn9waogi3bSu0rX6To3UN0ahRRE_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [hwloc-devel] Fwd:  [hwloc-svn] svn:hwloc r2868<br>
<strong>From:</strong> Jiri Hladky (<em>hladky.jiri_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-12-03 05:31:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1668.php">Samuel Thibault: "Re: [hwloc-devel] Fwd:  [hwloc-svn] svn:hwloc r2868"</a>
<li><strong>Previous message:</strong> <a href="1666.php">Jiri Hladky: "[hwloc-devel] Fwd:  [hwloc-svn] svn:hwloc r2868"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Brice,
<br>
<p>I just realized that my messages has been rejected. Sending it again.
<br>
<p>Thanks
<br>
Jirka
<br>
<p>---------- Forwarded message ----------
<br>
From: Jiri Hladky &lt;hladky.jiri_at_[hidden]&gt;
<br>
Date: Thu, Dec 2, 2010 at 7:30 PM
<br>
Subject: Re: [hwloc-devel] [hwloc-svn] svn:hwloc r2868
<br>
To: Hardware locality development list &lt;hwloc-devel_at_[hidden]&gt;
<br>
<p><p>Hi Brice,
<br>
<p>I have just tested lstopo coming with hwloc-1.1rc4r2880
<br>
<p>I'm really glad to see that
<br>
--physical is now default for graphical output
<br>
type of indexing, hostname, timestamp has been added to the graphical
<br>
output.
<br>
<p>Just one question regarding timestamp format:
<br>
1) It seems that lstopo ignores LC_TIME
<br>
2)I would vote to use following format string
<br>
date +&quot;%H:%M:%S %a %d %b %Y&quot;
<br>
but it might be my personal preference.
<br>
<p>I would recommend to replace ctime with strftime function. Please note that
<br>
ctime ignores LC_TIME. strftime on the other hand is using LC_TIME
<br>
<p><p>========TEST this C code ==============
<br>
#include &lt;stdlib.h&gt;
<br>
#include &lt;stdio.h&gt;
<br>
#include &lt;time.h&gt;
<br>
#include &lt;locale.h&gt;
<br>
<p>int main(void) {
<br>
<p>char *date;
<br>
time_t t;
<br>
char date_string[50];
<br>
setlocale(LC_TIME, &quot;&quot;);
<br>
<p><p>t = time(NULL);
<br>
date = ctime(&amp;t);
<br>
printf(&quot;Date: %s&quot;, date);
<br>
<p>strftime(date_string,50,&quot;%H:%M:%S %a %d %b %Y&quot;,localtime(&amp;t));
<br>
<p>printf(&quot;Date: %s\n&quot;, date_string);
<br>
<p><p>}
<br>
========================================
<br>
$export LC_ALL=german
<br>
<p>$locale
<br>
LANG=C
<br>
LC_CTYPE=&quot;german&quot;
<br>
LC_NUMERIC=&quot;german&quot;
<br>
LC_TIME=&quot;german&quot;
<br>
LC_COLLATE=&quot;german&quot;
<br>
LC_MONETARY=&quot;german&quot;
<br>
LC_MESSAGES=&quot;german&quot;
<br>
LC_PAPER=&quot;german&quot;
<br>
LC_NAME=&quot;german&quot;
<br>
LC_ADDRESS=&quot;german&quot;
<br>
LC_TELEPHONE=&quot;german&quot;
<br>
LC_MEASUREMENT=&quot;german&quot;
<br>
LC_IDENTIFICATION=&quot;german&quot;
<br>
LC_ALL=german
<br>
<p>$./time_test (the program above)
<br>
Date: Thu Dec  2 19:28:27 2010
<br>
Date: 19:28:27 Do 02 Dez 2010  &lt;--in German
<br>
<p>One more question: do you plan to have Ls in the text output? I think it's a
<br>
great idea to unify graphical and text output.
<br>
<p>Thanks!!
<br>
Jirka
<br>
<p><p><p><p><p>On Wed, Dec 1, 2010 at 6:19 PM, Jiri Hladky &lt;hladky.jiri_at_[hidden]&gt;wrote:
<br>
<p><span class="quotelev1">&gt; Hi Brice,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; it's a good point, I vote to have Ls also in the text output.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks
</span><br>
<span class="quotelev1">&gt; Jirka
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Wed, Dec 1, 2010 at 8:29 AM, Brice Goglin &lt;Brice.Goglin_at_[hidden]&gt;wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Le 30/11/2010 15:59, sthibaul_at_[hidden] a &#195;&#169;crit :
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Author: sthibaul
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Date: 2010-11-30 09:59:40 EST (Tue, 30 Nov 2010)
</span><br>
<span class="quotelev3">&gt;&gt; &gt; New Revision: 2868
</span><br>
<span class="quotelev3">&gt;&gt; &gt; URL: <a href="https://svn.open-mpi.org/trac/hwloc/changeset/2868">https://svn.open-mpi.org/trac/hwloc/changeset/2868</a>
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Log:
</span><br>
<span class="quotelev3">&gt;&gt; &gt; put back L#/P# prefixes in graphical output
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Before the release, we'll have to update the graphical outputs in the
</span><br>
<span class="quotelev2">&gt;&gt; documentation (and grep for # everywhere too :)).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Do we apply something similar to the above patch for the textual output
</span><br>
<span class="quotelev2">&gt;&gt; too?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Current output:         Node #1 (phys=0)
</span><br>
<span class="quotelev2">&gt;&gt;                         Socket #1
</span><br>
<span class="quotelev2">&gt;&gt;                          PU #2 (phys=3)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; would become:           Node L#1 (Phys=0)
</span><br>
<span class="quotelev2">&gt;&gt;                         Socket L#1
</span><br>
<span class="quotelev2">&gt;&gt;                          PU L#2 (Phys=3)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Brice
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; hwloc-devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; hwloc-devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-devel/att-1667/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1668.php">Samuel Thibault: "Re: [hwloc-devel] Fwd:  [hwloc-svn] svn:hwloc r2868"</a>
<li><strong>Previous message:</strong> <a href="1666.php">Jiri Hladky: "[hwloc-devel] Fwd:  [hwloc-svn] svn:hwloc r2868"</a>
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

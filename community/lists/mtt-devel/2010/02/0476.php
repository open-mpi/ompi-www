<?
$subject_val = "Re: [MTT devel] 500 Internal Server Error from open-mpi-mtt.appspot.com";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb 11 17:16:23 2010" -->
<!-- isoreceived="20100211221623" -->
<!-- sent="Thu, 11 Feb 2010 17:16:18 -0500" -->
<!-- isosent="20100211221618" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [MTT devel] 500 Internal Server Error from open-mpi-mtt.appspot.com" -->
<!-- id="52B87A38-8314-46B1-B30B-910AF5269C19_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20100211190518.GB18474_at_sun.com" -->
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
<strong>Subject:</strong> Re: [MTT devel] 500 Internal Server Error from open-mpi-mtt.appspot.com<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-02-11 17:16:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0477.php">Jeff Squyres: "[MTT devel] GDS errors"</a>
<li><strong>Previous message:</strong> <a href="0475.php">Ethan Mallove: "[MTT devel] 500 Internal Server Error from open-mpi-mtt.appspot.com"</a>
<li><strong>In reply to:</strong> <a href="0475.php">Ethan Mallove: "[MTT devel] 500 Internal Server Error from open-mpi-mtt.appspot.com"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0481.php">Igor Ivanov: "Re: [MTT devel] 500 Internal Server Error from	open-mpi-mtt.appspot.com"</a>
<li><strong>Reply:</strong> <a href="0481.php">Igor Ivanov: "Re: [MTT devel] 500 Internal Server Error from	open-mpi-mtt.appspot.com"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
After looking through the logs, Ethan and I *think* that this was just a query that was too large (i.e., it used too much CPU, and therefore it was killed).
<br>
<p>Can someone with a little more knowledge than us have a look at the logs and let us know if we're right?
<br>
<p><p>On Feb 11, 2010, at 2:05 PM, Ethan Mallove wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm getting a 500 Internal Server Error using bquery.pl.  I can --ping
</span><br>
<span class="quotelev1">&gt; successfully:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   $ client/bquery.pl --ping --server=<a href="http://open-mpi-mtt.appspot.com/">http://open-mpi-mtt.appspot.com/</a> --password=xxxxx --username=sun
</span><br>
<span class="quotelev1">&gt;   Ping is successful.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; But an actual query gets an error:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   $ client/bquery.pl --server=<a href="http://open-mpi-mtt.appspot.com/">http://open-mpi-mtt.appspot.com/</a> --password=xxxxx --username=sun --query --gqls=&quot;select * from TestRunPhase where status=1&quot; --dir=&quot;bquery-test&quot;
</span><br>
<span class="quotelev1">&gt;   Error at <a href="http://open-mpi-mtt.appspot.com//client">http://open-mpi-mtt.appspot.com//client</a>
</span><br>
<span class="quotelev1">&gt;   500 Internal Server Error
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -Ethan
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; mtt-devel mailing list
</span><br>
<span class="quotelev1">&gt; mtt-devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-devel">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-devel</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0477.php">Jeff Squyres: "[MTT devel] GDS errors"</a>
<li><strong>Previous message:</strong> <a href="0475.php">Ethan Mallove: "[MTT devel] 500 Internal Server Error from open-mpi-mtt.appspot.com"</a>
<li><strong>In reply to:</strong> <a href="0475.php">Ethan Mallove: "[MTT devel] 500 Internal Server Error from open-mpi-mtt.appspot.com"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0481.php">Igor Ivanov: "Re: [MTT devel] 500 Internal Server Error from	open-mpi-mtt.appspot.com"</a>
<li><strong>Reply:</strong> <a href="0481.php">Igor Ivanov: "Re: [MTT devel] 500 Internal Server Error from	open-mpi-mtt.appspot.com"</a>
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

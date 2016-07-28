<?
$subject_val = "Re: [OMPI devel] mlx4 QP operation err";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jan 28 19:52:49 2015" -->
<!-- isoreceived="20150129005249" -->
<!-- sent="Thu, 29 Jan 2015 11:52:46 +1100" -->
<!-- isosent="20150129005246" -->
<!-- name="Christopher Samuel" -->
<!-- email="samuel_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] mlx4 QP operation err" -->
<!-- id="54C9845E.90102_at_unimelb.edu.au" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="CAFGXdkxm5BAY6upPm7A48Kha8UyPMVWTmL9a+UnAD3fN-GOaWg_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] mlx4 QP operation err<br>
<strong>From:</strong> Christopher Samuel (<em>samuel_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-01-28 19:52:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16839.php">Devendar Bureddy: "Re: [OMPI devel] mlx4 QP operation err"</a>
<li><strong>Previous message:</strong> <a href="16837.php">Dave Turner: "[OMPI devel] mlx4 QP operation err"</a>
<li><strong>In reply to:</strong> <a href="16837.php">Dave Turner: "[OMPI devel] mlx4 QP operation err"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16839.php">Devendar Bureddy: "Re: [OMPI devel] mlx4 QP operation err"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Dave,
<br>
<p>On 29/01/15 11:31, Dave Turner wrote:
<br>
<p><span class="quotelev1">&gt;       I've found some old references to similar mlx4 errors dating back to
</span><br>
<span class="quotelev1">&gt; 2009 that lead me to believe this may be a firmware error.  I believe we're
</span><br>
<span class="quotelev1">&gt; running the most up to date version of the firmware.
</span><br>
<p>There was a new version released a few days ago, 2.33.5100:
<br>
<p><a href="http://www.mellanox.com/page/firmware_table_ConnectX3ProEN">http://www.mellanox.com/page/firmware_table_ConnectX3ProEN</a>
<br>
<p>Release notes are here:
<br>
<p><a href="http://www.mellanox.com/pdf/firmware/ConnectX3Pro-FW-2_33_5100-release_notes.pdf">http://www.mellanox.com/pdf/firmware/ConnectX3Pro-FW-2_33_5100-release_notes.pdf</a>
<br>
<p>Bug fixes start on page 23, looks like there are 29 fixes
<br>
in this version, and fix 1 is for RoCE (though of course may
<br>
not be relevant) - &quot;The first Read response was not treated as
<br>
implicit ACK&quot; (discovered in 2.30.8000).
<br>
<p>All the best,
<br>
Chris
<br>
<pre>
-- 
 Christopher Samuel        Senior Systems Administrator
 VLSCI - Victorian Life Sciences Computation Initiative
 Email: samuel_at_[hidden] Phone: +61 (0)3 903 55545
 <a href="http://www.vlsci.org.au/">http://www.vlsci.org.au/</a>      <a href="http://twitter.com/vlsci">http://twitter.com/vlsci</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16839.php">Devendar Bureddy: "Re: [OMPI devel] mlx4 QP operation err"</a>
<li><strong>Previous message:</strong> <a href="16837.php">Dave Turner: "[OMPI devel] mlx4 QP operation err"</a>
<li><strong>In reply to:</strong> <a href="16837.php">Dave Turner: "[OMPI devel] mlx4 QP operation err"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16839.php">Devendar Bureddy: "Re: [OMPI devel] mlx4 QP operation err"</a>
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

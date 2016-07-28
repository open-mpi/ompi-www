<?
$subject_val = "Re: [OMPI devel] /dev/shm usage";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May 18 10:58:57 2010" -->
<!-- isoreceived="20100518145857" -->
<!-- sent="Tue, 18 May 2010 07:58:46 -0700" -->
<!-- isosent="20100518145846" -->
<!-- name="Paul H. Hargrove" -->
<!-- email="PHHargrove_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] /dev/shm usage" -->
<!-- id="4BF2AB26.7030609_at_lbl.gov" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="E26C578B-BAEC-413C-B959-3A341A77DDBD_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] /dev/shm usage<br>
<strong>From:</strong> Paul H. Hargrove (<em>PHHargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-05-18 10:58:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7967.php">Jeff Squyres: "Re: [OMPI devel] /dev/shm usage"</a>
<li><strong>Previous message:</strong> <a href="7965.php">Jeff Squyres: "Re: [OMPI devel] /dev/shm usage (was: Very poor performance with btlsm...)"</a>
<li><strong>In reply to:</strong> <a href="7961.php">Jeff Squyres: "[OMPI devel] /dev/shm usage (was: Very poor performance with btl sm...)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7967.php">Jeff Squyres: "Re: [OMPI devel] /dev/shm usage"</a>
<li><strong>Reply:</strong> <a href="7967.php">Jeff Squyres: "Re: [OMPI devel] /dev/shm usage"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff Squyres wrote:
<br>
[snip]
<br>
<span class="quotelev1">&gt; Ralph and I talked about this on the phone a bit this morning.  There's several complicating factors in using /dev/shm (aren't there always? :-) ).
</span><br>
<span class="quotelev1">&gt;   
</span><br>
[snip]
<br>
<span class="quotelev1">&gt; --&gt; This seems to imply that using /dev/shm should not be default behavior.
</span><br>
<span class="quotelev1">&gt;   
</span><br>
[snip]
<br>
<p><p>I agree that /dev/shm introduces extra complications and should not be 
<br>
the default.  The FAQ text I provided was intended to suggest /dev/shm 
<br>
as a session dir (or session root) ONLY for people who had diskless 
<br>
nodes and thus no obvious alternatives to network-mounted /tmp.
<br>
<p>If one wants to pursue placing the SM BTL's shared memory files in 
<br>
/dev/shm by default, that is independent of adding something to the new 
<br>
FAQ entry to address the diskless case.
<br>
<p>-Paul
<br>
<p><pre>
-- 
Paul H. Hargrove                          PHHargrove_at_[hidden]
Future Technologies Group                 Tel: +1-510-495-2352
HPC Research Department                   Fax: +1-510-486-6900
Lawrence Berkeley National Laboratory     
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7967.php">Jeff Squyres: "Re: [OMPI devel] /dev/shm usage"</a>
<li><strong>Previous message:</strong> <a href="7965.php">Jeff Squyres: "Re: [OMPI devel] /dev/shm usage (was: Very poor performance with btlsm...)"</a>
<li><strong>In reply to:</strong> <a href="7961.php">Jeff Squyres: "[OMPI devel] /dev/shm usage (was: Very poor performance with btl sm...)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7967.php">Jeff Squyres: "Re: [OMPI devel] /dev/shm usage"</a>
<li><strong>Reply:</strong> <a href="7967.php">Jeff Squyres: "Re: [OMPI devel] /dev/shm usage"</a>
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

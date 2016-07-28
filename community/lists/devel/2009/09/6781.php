<?
$subject_val = "Re: [OMPI devel] suffix flag problems";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Sep  4 14:01:28 2009" -->
<!-- isoreceived="20090904180128" -->
<!-- sent="Fri, 04 Sep 2009 11:01:12 -0700" -->
<!-- isosent="20090904180112" -->
<!-- name="Paul H. Hargrove" -->
<!-- email="PHHargrove_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] suffix flag problems" -->
<!-- id="4AA155E8.7080309_at_lbl.gov" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4257861D-34E2-4BB8-BBF9-79C63CE02590_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] suffix flag problems<br>
<strong>From:</strong> Paul H. Hargrove (<em>PHHargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-09-04 14:01:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6782.php">Ralph Castain: "Re: [OMPI devel] Can I have the same node specified multiple times in a host file?"</a>
<li><strong>Previous message:</strong> <a href="6780.php">Karl, Robert (RKARL): "[OMPI devel] Can I have the same node specified multiple times in a host file?"</a>
<li><strong>In reply to:</strong> <a href="6756.php">Jeff Squyres: "Re: [OMPI devel] suffix flag problems"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6784.php">Jeff Squyres: "Re: [OMPI devel] suffix flag problems"</a>
<li><strong>Reply:</strong> <a href="6784.php">Jeff Squyres: "Re: [OMPI devel] suffix flag problems"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; On Sep 4, 2009, at 7:13 AM, David Robertson wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Perhaps it should be taken out of the help message in the configure
</span><br>
<span class="quotelev2">&gt;&gt; script then.
</span><br>
<span class="quotelev1">&gt; We can't; it's part of the built-in Autoconf options.  :-(
</span><br>
On can't disable the option, but one can prevent confusing the user by 
<br>
(partially) igonoring it.
<br>
In GASNet we dealt with this problem by detecting that the prefix, 
<br>
suffix or transform options had been given and generate an error message 
<br>
telling the user:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;This configure script does not support --program-prefix, 
<br>
--program-suffix or --program-transform-name.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Users are recommended to instead use --prefix with a unique 
<br>
directory and make symbolic links as desired for renaming.
<br>
<p>GASNet is BSD licensed and available at 
<br>
<a href="http://gasnet.cs.berkeley.edu/#download">http://gasnet.cs.berkeley.edu/#download</a>
<br>
The autoconf macro in question is GASNET_FORBID_PROGRAM_TRANSFORM and is 
<br>
located in acinclude.m4
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
<li><strong>Next message:</strong> <a href="6782.php">Ralph Castain: "Re: [OMPI devel] Can I have the same node specified multiple times in a host file?"</a>
<li><strong>Previous message:</strong> <a href="6780.php">Karl, Robert (RKARL): "[OMPI devel] Can I have the same node specified multiple times in a host file?"</a>
<li><strong>In reply to:</strong> <a href="6756.php">Jeff Squyres: "Re: [OMPI devel] suffix flag problems"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6784.php">Jeff Squyres: "Re: [OMPI devel] suffix flag problems"</a>
<li><strong>Reply:</strong> <a href="6784.php">Jeff Squyres: "Re: [OMPI devel] suffix flag problems"</a>
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

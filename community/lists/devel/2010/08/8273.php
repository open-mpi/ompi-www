<?
$subject_val = "Re: [OMPI devel] Trunk Commit Heads-up: New Common Shared Memory Component";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Aug 13 09:31:08 2010" -->
<!-- isoreceived="20100813133108" -->
<!-- sent="Fri, 13 Aug 2010 15:31:01 +0200" -->
<!-- isosent="20100813133101" -->
<!-- name="Rainer Keller" -->
<!-- email="keller_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Trunk Commit Heads-up: New Common Shared Memory Component" -->
<!-- id="201008131531.02041.keller_at_hlrs.de" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="741C9EF0-2A84-4CC8-AFD8-ACF75F1EC2EA_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Trunk Commit Heads-up: New Common Shared Memory Component<br>
<strong>From:</strong> Rainer Keller (<em>keller_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-08-13 09:31:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8274.php">Paul H. Hargrove: "Re: [OMPI devel] Trunk Commit Heads-up: New Common Shared Memory Component"</a>
<li><strong>Previous message:</strong> <a href="8272.php">Jeff Squyres: "Re: [OMPI devel] How to disable paffinity"</a>
<li><strong>In reply to:</strong> <a href="8265.php">Jeff Squyres: "Re: [OMPI devel] Trunk Commit Heads-up: New Common Shared Memory Component"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8274.php">Paul H. Hargrove: "Re: [OMPI devel] Trunk Commit Heads-up: New Common Shared Memory Component"</a>
<li><strong>Reply:</strong> <a href="8274.php">Paul H. Hargrove: "Re: [OMPI devel] Trunk Commit Heads-up: New Common Shared Memory Component"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
On Thursday 12 August 2010 19:09:42 Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; On Aug 12, 2010, at 7:21 AM, Terry Dontje wrote:
</span><br>
<span class="quotelev2">&gt; &gt; Is there not a way to determine whether the fs is tmpfs or not?
</span><br>
<span class="quotelev1">&gt; I don't know -- Rainer?
</span><br>
Well, this is semi-portable ,-]
<br>
But sure, it would work on Linux, where we'd want it:
<br>
<p>./statfs /dev/shm
<br>
--------------- statfs() output-----------------
<br>
statfs() returned the following information
<br>
about file system of path (/dev/shm):
<br>
&nbsp;&nbsp;f_type     : TMPFS (1021994)
<br>
&nbsp;&nbsp;f_bsize    : 4096
<br>
&nbsp;&nbsp;f_blocks   : 723663
<br>
&nbsp;&nbsp;f_bfree    : 723662
<br>
&nbsp;&nbsp;f_bavail   : 723662
<br>
&nbsp;&nbsp;f_files    : 723663
<br>
&nbsp;&nbsp;f_ffree    : 723661
<br>
&nbsp;&nbsp;f_fsid     : TMPFS (0x0)
<br>
&nbsp;&nbsp;f_namelen  : 255
<br>
<p>(the program detects most Filesystems according to their known magic).
<br>
<p>Regards,
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
<hr>
<ul>
<li>text/x-csrc attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-8273/statfs.c">statfs.c</a>
</ul>
<!-- attachment="statfs.c" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8274.php">Paul H. Hargrove: "Re: [OMPI devel] Trunk Commit Heads-up: New Common Shared Memory Component"</a>
<li><strong>Previous message:</strong> <a href="8272.php">Jeff Squyres: "Re: [OMPI devel] How to disable paffinity"</a>
<li><strong>In reply to:</strong> <a href="8265.php">Jeff Squyres: "Re: [OMPI devel] Trunk Commit Heads-up: New Common Shared Memory Component"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8274.php">Paul H. Hargrove: "Re: [OMPI devel] Trunk Commit Heads-up: New Common Shared Memory Component"</a>
<li><strong>Reply:</strong> <a href="8274.php">Paul H. Hargrove: "Re: [OMPI devel] Trunk Commit Heads-up: New Common Shared Memory Component"</a>
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

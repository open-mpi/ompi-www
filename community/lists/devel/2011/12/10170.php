<?
$subject_val = "[OMPI devel] v1.5 status / temporary delegation of RM authority";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Dec 20 18:20:58 2011" -->
<!-- isoreceived="20111220232058" -->
<!-- sent="Tue, 20 Dec 2011 18:20:50 -0500" -->
<!-- isosent="20111220232050" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[OMPI devel] v1.5 status / temporary delegation of RM authority" -->
<!-- id="EC0857B0-2A6C-4144-A5C3-341423FD955A_at_cisco.com" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [OMPI devel] v1.5 status / temporary delegation of RM authority<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-12-20 18:20:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10171.php">Paul H. Hargrove: "[OMPI devel] openmpi-1.5.1rc1: missing file when running autogen"</a>
<li><strong>Previous message:</strong> <a href="10169.php">Paul H. Hargrove: "Re: [OMPI devel] GNU Make required for OMPI 1.5.5rc1: known/intended?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10173.php">Jeff Squyres: "Re: [OMPI devel] v1.5 status / temporary delegation of RM authority"</a>
<li><strong>Reply:</strong> <a href="10173.php">Jeff Squyres: "Re: [OMPI devel] v1.5 status / temporary delegation of RM authority"</a>
<li><strong>Reply:</strong> <a href="10181.php">Paul H. Hargrove: "Re: [OMPI devel] v1.5 status / temporary delegation of RM authority"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'm technically not working this week, but spot-checked my email to see where we are with v1.5 (shh! don't tell my wife...)
<br>
<p>1. There are a number of outstanding issues such that it does not seem like it is a good idea to rush out a v1.5 release just so that we can say it was before the holidays.  
<br>
<p>2. Here are the issues that I am aware of:
<br>
<p>- VT build issues; they just filed a CMR today that may or may not be complete
<br>
- shmem segv errors; Sam and Ralph are iterating on this and seem to be closing in on a fix
<br>
- debugger issues; Nathan and Ralph are iterating on this and seem to be closing in on a fix
<br>
- one of the hwloc generated config.h files is somehow ending up in the tarball; I need to investigate
<br>
- Cisco static MTT builds are failing, I think due to a hwloc libnuma.a/libnuma.so issue; I need to investigate
<br>
- hwloc building issue on older RH8
<br>
<p>3. I may appear here and there over the holidays, but I'll be mostly checked out until Jan 3.  I hereby delegate my RM powers to Ralph for the duration (he's working all this week and will generally be around more than me over the holidays).  He can do things like approve CMRs per both his discretion and the discussion that I had with him about my intent for v1.5.5 earlier today.  Ralph will likely also post a new RC if some/all of the above issues get fixed, just so that we can do another round of testing to see how all of the issues look.  1.5.5 (final) will not be released before Jan 3, 2011.
<br>
<p>Happy holidays, everyone!
<br>
<p><pre>
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
<li><strong>Next message:</strong> <a href="10171.php">Paul H. Hargrove: "[OMPI devel] openmpi-1.5.1rc1: missing file when running autogen"</a>
<li><strong>Previous message:</strong> <a href="10169.php">Paul H. Hargrove: "Re: [OMPI devel] GNU Make required for OMPI 1.5.5rc1: known/intended?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10173.php">Jeff Squyres: "Re: [OMPI devel] v1.5 status / temporary delegation of RM authority"</a>
<li><strong>Reply:</strong> <a href="10173.php">Jeff Squyres: "Re: [OMPI devel] v1.5 status / temporary delegation of RM authority"</a>
<li><strong>Reply:</strong> <a href="10181.php">Paul H. Hargrove: "Re: [OMPI devel] v1.5 status / temporary delegation of RM authority"</a>
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

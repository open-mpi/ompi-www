<?
$subject_val = "Re: [OMPI devel] v1.5 status / temporary delegation of RM authority";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Dec 20 19:04:09 2011" -->
<!-- isoreceived="20111221000409" -->
<!-- sent="Tue, 20 Dec 2011 16:03:46 -0800" -->
<!-- isosent="20111221000346" -->
<!-- name="Paul H. Hargrove" -->
<!-- email="PHHargrove_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] v1.5 status / temporary delegation of RM authority" -->
<!-- id="4EF12262.7060303_at_lbl.gov" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="EC0857B0-2A6C-4144-A5C3-341423FD955A_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] v1.5 status / temporary delegation of RM authority<br>
<strong>From:</strong> Paul H. Hargrove (<em>PHHargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-12-20 19:03:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10182.php">Paul H. Hargrove: "[OMPI devel] missing file when running autogen - ALSO in 1.4.5rc1"</a>
<li><strong>Previous message:</strong> <a href="10180.php">George Bosilca: "Re: [OMPI devel] Fwd: Troubles using MPI_Isend/MPI_Irecv/MPI_Waitany and MPI_Allreduce"</a>
<li><strong>In reply to:</strong> <a href="10170.php">Jeff Squyres: "[OMPI devel] v1.5 status / temporary delegation of RM authority"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I will be &quot;offline&quot; Dec 23 to Jan 2, and thus unable to retest any rc2 
<br>
appearing in that interval against the several issues I reported.
<br>
&quot;My&quot; issues include at least:
<br>
+ 2 VT issues (both header related), one on BSD systems only the other 
<br>
on Solaris10 only
<br>
+ the hwloc generated config.h, on non-linux systems only
<br>
+ hwloc build, on RH8 only
<br>
+ gmake-vs-bmake for asm, on BSD systems only
<br>
<p>The generated hwloc config.h can be retested on MacOS or Solaris (and 
<br>
really only requires examination of the tarball to verify).
<br>
<p>I'll go out on a limb and guess that Terry D. or Maurice F. can find 
<br>
Solaris10 systems to retest the stdbool.h in VT issue.
<br>
However, since I doubt that too many of you have BSD or RH8 for testing 
<br>
I am uncertain if/how we verify fixes for the others.
<br>
<p>I think the RH8 hwloc issues are not worth pursing.
<br>
However, the VT and bmake/asm problems are all probably worth fixing for 
<br>
1.5.5.
<br>
<p>Anybody out there who can volunteer to test an RC2 on a 
<br>
{Free,Net,Open}BSD system?
<br>
<p>-Paul
<br>
<p>On 12/20/2011 3:20 PM, Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; I'm technically not working this week, but spot-checked my email to see where we are with v1.5 (shh! don't tell my wife...)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1. There are a number of outstanding issues such that it does not seem like it is a good idea to rush out a v1.5 release just so that we can say it was before the holidays.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2. Here are the issues that I am aware of:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; - VT build issues; they just filed a CMR today that may or may not be complete
</span><br>
<span class="quotelev1">&gt; - shmem segv errors; Sam and Ralph are iterating on this and seem to be closing in on a fix
</span><br>
<span class="quotelev1">&gt; - debugger issues; Nathan and Ralph are iterating on this and seem to be closing in on a fix
</span><br>
<span class="quotelev1">&gt; - one of the hwloc generated config.h files is somehow ending up in the tarball; I need to investigate
</span><br>
<span class="quotelev1">&gt; - Cisco static MTT builds are failing, I think due to a hwloc libnuma.a/libnuma.so issue; I need to investigate
</span><br>
<span class="quotelev1">&gt; - hwloc building issue on older RH8
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 3. I may appear here and there over the holidays, but I'll be mostly checked out until Jan 3.  I hereby delegate my RM powers to Ralph for the duration (he's working all this week and will generally be around more than me over the holidays).  He can do things like approve CMRs per both his discretion and the discussion that I had with him about my intent for v1.5.5 earlier today.  Ralph will likely also post a new RC if some/all of the above issues get fixed, just so that we can do another round of testing to see how all of the issues look.  1.5.5 (final) will not be released before Jan 3, 2011.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Happy holidays, everyone!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><pre>
-- 
Paul H. Hargrove                          PHHargrove_at_[hidden]
Future Technologies Group
HPC Research Department                   Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10182.php">Paul H. Hargrove: "[OMPI devel] missing file when running autogen - ALSO in 1.4.5rc1"</a>
<li><strong>Previous message:</strong> <a href="10180.php">George Bosilca: "Re: [OMPI devel] Fwd: Troubles using MPI_Isend/MPI_Irecv/MPI_Waitany and MPI_Allreduce"</a>
<li><strong>In reply to:</strong> <a href="10170.php">Jeff Squyres: "[OMPI devel] v1.5 status / temporary delegation of RM authority"</a>
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

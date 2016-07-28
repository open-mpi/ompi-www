<?
$subject_val = "Re: [hwloc-devel] hwloc-bind syntax";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Dec  4 08:44:15 2009" -->
<!-- isoreceived="20091204134415" -->
<!-- sent="Fri, 4 Dec 2009 08:44:10 -0500" -->
<!-- isosent="20091204134410" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] hwloc-bind syntax" -->
<!-- id="6A9DE529-B591-4B7D-A9F6-DBB215665260_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4B18E629.7030906_at_inria.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] hwloc-bind syntax<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-12-04 08:44:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0475.php">Brice Goglin: "Re: [hwloc-devel] hwloc-bind syntax"</a>
<li><strong>Previous message:</strong> <a href="0473.php">Jeff Squyres: "Re: [hwloc-devel] hwloc-bind syntax"</a>
<li><strong>In reply to:</strong> <a href="0466.php">Brice Goglin: "Re: [hwloc-devel] hwloc-bind syntax"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0475.php">Brice Goglin: "Re: [hwloc-devel] hwloc-bind syntax"</a>
<li><strong>Reply:</strong> <a href="0475.php">Brice Goglin: "Re: [hwloc-devel] hwloc-bind syntax"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-devel/2010/01/0607.php">Brice Goglin: "[hwloc-devel] parent vs father"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Dec 4, 2009, at 5:36 AM, Brice Goglin wrote:
<br>
<p><span class="quotelev2">&gt; &gt; It might be good to safely ignore 0x if it's present, but that's a small feature enhancement that can be done at any time (I filed a future ticket).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It seems to work actually :)
</span><br>
<p>Hmm -- I don't think so...?  &quot;0x1&quot; can't pass this test in hwloc_mask_process_arg():
<br>
<p>&nbsp;&nbsp;} else if (strlen(arg) == strspn(arg, &quot;0123456789abcdefABCDEF,&quot;)) {
<br>
<p>In my tests, it's falling through to the &quot;err = -1&quot; case, but just not printing out an error.  Even more fun -- note the lack of error shown, and the lack of &quot;ls&quot; output, except for when we specify -v:
<br>
<p><pre>
----
[8:33] rtp-jsquyres-8711:~/svn/hwloc % ./utils/hwloc-bind 0x1 ls
[8:33] rtp-jsquyres-8711:~/svn/hwloc % ./utils/hwloc-bind -v 0x1 ls
assuming the command starts at 0x1
execvp: No such file or directory
-----
If think that if execvp() fails, we should *always* print an error, not just if -v was specified.  I'll fix.
&gt; &gt; Linux is likely to be among the most popular target for hwloc -- so can you explain in good words definitions for the following:
[snipped]
Thanks.
&gt; &gt; Additionally -- the word &quot;father&quot; is used in the docs.  Should we use the gender-neutral &quot;parent&quot; instead?
&gt; 
&gt; I am not sure. The object structure contains a father pointer. We use
&gt; parent in the API, but it might refer to different things, like father,
&gt; grandfather, ...
FWIW, the english word &quot;parent&quot; definitely refers to the immediate ancestor.  It does *not* refer to grandparents or great-grandparents, etc.
&gt; &gt; What I meant by my question was -- aren't the 3 diagrams above equivalent to &quot;core:6&quot;? If so, what's the value of the foo.bar.baz notation?
&gt; 
&gt; If you have a 96 core machine like we do, the hierarchical notation
&gt; (foo.bar.baz) is really nice. If I want to bind on
&gt; node:2.socket:3.core:4, it's much easier than looking at the topology
&gt; and finding that it's core:70.
Ah, ok.  Fair enough.
&gt; Using physical or logical indexes doesn't
&gt; change anything here. I agree that we don't do that often in real
&gt; applications, but I actually use that quite a lot for my own debugging :)
Another good reason.  :-)
&gt; I actually don't see why people would like to use physical numbers in
&gt; such a hierarchical notation since physical socket/core numbers are
&gt; often strange/illogical and nobody remembers them. However, I agree that
&gt; the physical indexes are useful when *not* using a hierarchical
&gt; notation, ie I want to bind on thread OS index #46.
As a server vendor, using physical/OS indexes is actually quite useful to me (e.g., to ensure that the hardware and OS are playing nicely).
My point is that everyone has a different view here -- we should just support both.  IMHO, the common case is logical indexes -- so let's make those the default.  But there are definitely cases where physical indexes are useful as well.
-- 
Jeff Squyres
jsquyres_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0475.php">Brice Goglin: "Re: [hwloc-devel] hwloc-bind syntax"</a>
<li><strong>Previous message:</strong> <a href="0473.php">Jeff Squyres: "Re: [hwloc-devel] hwloc-bind syntax"</a>
<li><strong>In reply to:</strong> <a href="0466.php">Brice Goglin: "Re: [hwloc-devel] hwloc-bind syntax"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0475.php">Brice Goglin: "Re: [hwloc-devel] hwloc-bind syntax"</a>
<li><strong>Reply:</strong> <a href="0475.php">Brice Goglin: "Re: [hwloc-devel] hwloc-bind syntax"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-devel/2010/01/0607.php">Brice Goglin: "[hwloc-devel] parent vs father"</a>
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

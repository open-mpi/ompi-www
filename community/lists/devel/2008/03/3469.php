<?
$subject_val = "Re: [OMPI devel] RFC: libevent update";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar 18 20:21:09 2008" -->
<!-- isoreceived="20080319002109" -->
<!-- sent="Tue, 18 Mar 2008 17:21:00 -0700" -->
<!-- isosent="20080319002100" -->
<!-- name="Paul H. Hargrove" -->
<!-- email="PHHargrove_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: libevent update" -->
<!-- id="47E05C6C.4000003_at_lbl.gov" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="C8BBF885-2CA4-42CE-B8F8-5482C1A5D7A9_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RFC: libevent update<br>
<strong>From:</strong> Paul H. Hargrove (<em>PHHargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-03-18 20:21:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3470.php">Jeff Squyres: "Re: [OMPI devel] RFC: libevent update"</a>
<li><strong>Previous message:</strong> <a href="3468.php">Jeff Squyres: "Re: [OMPI devel] Switching away from SVN?"</a>
<li><strong>In reply to:</strong> <a href="3464.php">Josh Hursey: "Re: [OMPI devel] RFC: libevent update"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3466.php">Josh Hursey: "Re: [OMPI devel] RFC: libevent update"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
After taking a look at how epoll is implemented in the Linyux kernel, I
<br>
can say with 100% certainty that BLCR will not restore the epoll fd
<br>
correctly.  I hope to fix that eventually, but have too many other
<br>
things on my plate to address is now.
<br>
<p>Since I cannot promise how soon BLCR may be able to resolve this
<br>
problem, I suggest that Josh continue exploring the alternatives.  At
<br>
least &quot;opal_event_include&quot; set to &quot;poll&quot; appears to work.  It is not
<br>
clear to me if the &quot;select&quot; problem is related to BLCR or not.
<br>
<p>I am guessing that I don't get a say as to weather the BLCR/epoll
<br>
problems should delay the libevent merge, but I trust the rest of you to
<br>
determine what is in the best interest of OMPI.
<br>
<p>-Paul
<br>
<p>Josh Hursey wrote:
<br>
<span class="quotelev1">&gt; I have some more data from the field.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Leaving &quot;opal_event_include&quot; unset (Default) BLCR would give me the  
</span><br>
<span class="quotelev1">&gt; following error when trying to restart a 2 process 'noop' MPI  
</span><br>
<span class="quotelev1">&gt; application:
</span><br>
<span class="quotelev1">&gt; ----------------------------
</span><br>
<span class="quotelev1">&gt; shell$ ompi-restart ompi_global_snapshot_8587.ckpt
</span><br>
<span class="quotelev1">&gt; Restart failed: Bad file descriptor
</span><br>
<span class="quotelev1">&gt; Restart failed: Bad file descriptor
</span><br>
<span class="quotelev1">&gt; shell$
</span><br>
<span class="quotelev1">&gt; ----------------------------
</span><br>
[snip]
<br>
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
<li><strong>Next message:</strong> <a href="3470.php">Jeff Squyres: "Re: [OMPI devel] RFC: libevent update"</a>
<li><strong>Previous message:</strong> <a href="3468.php">Jeff Squyres: "Re: [OMPI devel] Switching away from SVN?"</a>
<li><strong>In reply to:</strong> <a href="3464.php">Josh Hursey: "Re: [OMPI devel] RFC: libevent update"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3466.php">Josh Hursey: "Re: [OMPI devel] RFC: libevent update"</a>
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

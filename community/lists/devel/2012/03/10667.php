<?
$subject_val = "Re: [OMPI devel] Replacing poll()";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Mar  2 14:22:17 2012" -->
<!-- isoreceived="20120302192217" -->
<!-- sent="Fri, 02 Mar 2012 21:22:09 +0200" -->
<!-- isosent="20120302192209" -->
<!-- name="Alex Margolin" -->
<!-- email="alex.margolin_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Replacing poll()" -->
<!-- id="4F511DE1.9010108_at_mail.huji.ac.il" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="DAADA9D9-CF16-4BDD-A5CC-EF02D373697D_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Replacing poll()<br>
<strong>From:</strong> Alex Margolin (<em>alex.margolin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-03-02 14:22:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10668.php">Jeffrey Squyres: "Re: [OMPI devel] Replacing poll()"</a>
<li><strong>Previous message:</strong> <a href="10666.php">Hjelm, Nathan T: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r26077 (fwd)"</a>
<li><strong>In reply to:</strong> <a href="10662.php">Jeffrey Squyres: "Re: [OMPI devel] Replacing poll()"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10668.php">Jeffrey Squyres: "Re: [OMPI devel] Replacing poll()"</a>
<li><strong>Reply:</strong> <a href="10668.php">Jeffrey Squyres: "Re: [OMPI devel] Replacing poll()"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 03/02/2012 04:33 PM, Jeffrey Squyres wrote:
<br>
<span class="quotelev1">&gt; Note that the OMPI 1.4.x series is about to be retired.  If you're doing new stuff, I'd advise you to be working with the Open MPI SVN trunk.  In the trunk, we've changed how we build libevent, so if you're adding to it, you probably want to be working there for max forward-compatibility.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; That being said:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I know trying to replace poll() seems like I'm doing something very wrong, but I want to poll on events without a valid linux file descriptor (and existing events, specifically sockets, at the same time), and I see no other way. Obviously, my poll2 calls the linux poll in most cases.
</span><br>
<span class="quotelev1">&gt; What exactly are you trying to do?  OMPI has some internal hooks for non-fd-or-event-based progress.  Indeed, libevent is typically called with fairly low frequency (e.g., if you're running with OpenFabrics or some other high-speed/not-fd-based networking interconnect).
</span><br>
I'm trying to create a new btl module. I've written an adapter from my 
<br>
library to TCP, so I've implemented socket/connect/accept/send/recv... 
<br>
now I've taken the TCP BTL module and cloned it - replacing the relevant 
<br>
calls with mine. My only problem is with poll, which is not in the MCA 
<br>
(at least in 1.4.x).
<br>
I've implemented poll() and select() but it's not that good, because my 
<br>
events are not based on valid linux file descriptors, but I can poll all 
<br>
my events at the same time (but not in conjunction with real FDs, 
<br>
unfortunatly).
<br>
Can you give me some pointers as to where to look in the MPI (1.5?) 
<br>
source code to implement it properly?
<br>
<p>Thanks,
<br>
Alex
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10668.php">Jeffrey Squyres: "Re: [OMPI devel] Replacing poll()"</a>
<li><strong>Previous message:</strong> <a href="10666.php">Hjelm, Nathan T: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r26077 (fwd)"</a>
<li><strong>In reply to:</strong> <a href="10662.php">Jeffrey Squyres: "Re: [OMPI devel] Replacing poll()"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10668.php">Jeffrey Squyres: "Re: [OMPI devel] Replacing poll()"</a>
<li><strong>Reply:</strong> <a href="10668.php">Jeffrey Squyres: "Re: [OMPI devel] Replacing poll()"</a>
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

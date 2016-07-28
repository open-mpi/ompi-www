<?
$subject_val = "Re: [OMPI devel] Replacing poll()";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Mar  2 14:26:30 2012" -->
<!-- isoreceived="20120302192630" -->
<!-- sent="Fri, 2 Mar 2012 14:26:25 -0500" -->
<!-- isosent="20120302192625" -->
<!-- name="Jeffrey Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Replacing poll()" -->
<!-- id="F6E97783-F13F-472D-8CA2-423CCF3E2AD0_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4F511DE1.9010108_at_mail.huji.ac.il" -->
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
<strong>From:</strong> Jeffrey Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-03-02 14:26:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10669.php">George Bosilca: "Re: [OMPI devel] [PATCH]Incorrect algorithm choice using coll_tuned_dynamic_rules_filename (over 2GiB message)"</a>
<li><strong>Previous message:</strong> <a href="10667.php">Alex Margolin: "Re: [OMPI devel] Replacing poll()"</a>
<li><strong>In reply to:</strong> <a href="10667.php">Alex Margolin: "Re: [OMPI devel] Replacing poll()"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10673.php">Alex Margolin: "Re: [OMPI devel] Replacing poll()"</a>
<li><strong>Reply:</strong> <a href="10673.php">Alex Margolin: "Re: [OMPI devel] Replacing poll()"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Give your btl progress function.  It'll get called quite frequently.
<br>
<p>Look at the &quot;progress&quot; section in btl.h.  Progress threads don't work yet, but the btl_progress function will get called by the PML quite frequently.  It's how BTL's like openib progress their outstanding message passing.
<br>
<p><p><p>On Mar 2, 2012, at 2:22 PM, Alex Margolin wrote:
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 03/02/2012 04:33 PM, Jeffrey Squyres wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Note that the OMPI 1.4.x series is about to be retired.  If you're doing new stuff, I'd advise you to be working with the Open MPI SVN trunk.  In the trunk, we've changed how we build libevent, so if you're adding to it, you probably want to be working there for max forward-compatibility.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; That being said:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I know trying to replace poll() seems like I'm doing something very wrong, but I want to poll on events without a valid linux file descriptor (and existing events, specifically sockets, at the same time), and I see no other way. Obviously, my poll2 calls the linux poll in most cases.
</span><br>
<span class="quotelev2">&gt;&gt; What exactly are you trying to do?  OMPI has some internal hooks for non-fd-or-event-based progress.  Indeed, libevent is typically called with fairly low frequency (e.g., if you're running with OpenFabrics or some other high-speed/not-fd-based networking interconnect).
</span><br>
<span class="quotelev1">&gt; I'm trying to create a new btl module. I've written an adapter from my library to TCP, so I've implemented socket/connect/accept/send/recv... now I've taken the TCP BTL module and cloned it - replacing the relevant calls with mine. My only problem is with poll, which is not in the MCA (at least in 1.4.x).
</span><br>
<span class="quotelev1">&gt; I've implemented poll() and select() but it's not that good, because my events are not based on valid linux file descriptors, but I can poll all my events at the same time (but not in conjunction with real FDs, unfortunatly).
</span><br>
<span class="quotelev1">&gt; Can you give me some pointers as to where to look in the MPI (1.5?) source code to implement it properly?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Alex
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10669.php">George Bosilca: "Re: [OMPI devel] [PATCH]Incorrect algorithm choice using coll_tuned_dynamic_rules_filename (over 2GiB message)"</a>
<li><strong>Previous message:</strong> <a href="10667.php">Alex Margolin: "Re: [OMPI devel] Replacing poll()"</a>
<li><strong>In reply to:</strong> <a href="10667.php">Alex Margolin: "Re: [OMPI devel] Replacing poll()"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10673.php">Alex Margolin: "Re: [OMPI devel] Replacing poll()"</a>
<li><strong>Reply:</strong> <a href="10673.php">Alex Margolin: "Re: [OMPI devel] Replacing poll()"</a>
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

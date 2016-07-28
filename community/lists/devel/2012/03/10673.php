<?
$subject_val = "Re: [OMPI devel] Replacing poll()";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Mar  3 18:18:52 2012" -->
<!-- isoreceived="20120303231852" -->
<!-- sent="Sun, 04 Mar 2012 01:18:44 +0200" -->
<!-- isosent="20120303231844" -->
<!-- name="Alex Margolin" -->
<!-- email="alex.margolin_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Replacing poll()" -->
<!-- id="4F52A6D4.30800_at_mail.huji.ac.il" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="F6E97783-F13F-472D-8CA2-423CCF3E2AD0_at_cisco.com" -->
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
<strong>Date:</strong> 2012-03-03 18:18:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10674.php">George Bosilca: "Re: [OMPI devel] Replacing poll()"</a>
<li><strong>Previous message:</strong> <a href="10672.php">Ralph Castain: "Re: [OMPI devel] trunk regression in mpirun (no --prefix) r26081"</a>
<li><strong>In reply to:</strong> <a href="10668.php">Jeffrey Squyres: "Re: [OMPI devel] Replacing poll()"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10674.php">George Bosilca: "Re: [OMPI devel] Replacing poll()"</a>
<li><strong>Reply:</strong> <a href="10674.php">George Bosilca: "Re: [OMPI devel] Replacing poll()"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I've figured that what I really need is to write my own BTL component, 
<br>
rather then trying to manipulate the existing TCP one. I've started 
<br>
writing it using the 1.5.5rc3 tarball and some pdfs from 2006 I found on 
<br>
the website (anything else I can look at? TCP is much more complicated 
<br>
then what I'm writing). I think I'm getting the hang of it, but I still 
<br>
have some questions about terminology for the component implementation:
<br>
<p>The basic data structures for routing fragments are components, modules, 
<br>
interfaces and endpoints, right? So, If I have 3 nodes, each with 2 
<br>
interfaces (each having one constant IP), and i'm running 2 processes 
<br>
total. I'll have... 1 component, 2 modules, 4 interfaces (2 per module) 
<br>
and 4 addresses?
<br>
What about &quot;links&quot; (as in &quot;num_of_links&quot; component struct member) - what 
<br>
does it count?
<br>
<p>ompi_modex_send - Is it supposed to share the addresses of all the 
<br>
running processes before they start? suppose I assume one NIC per 
<br>
machine. Can I just send an array of mca_btl_tcp_addr_t, and every 
<br>
process will find the one belonging to him by some index (his rank?). I 
<br>
saw the ompi_modex_recv() call in _proc.c and it seems that every proc 
<br>
instance reads the entire sent buffer anyway.
<br>
<p>Sorry for flooding you all with questions, I hope I'm not way off here. 
<br>
I hope I'll finish writing something by the end of next week (I'm 
<br>
working on this after hours, not full time), with the purpose of 
<br>
submitting it as a contribution to open-mpi.
<br>
<p>Appreciate your help so far,
<br>
Alex
<br>
<p>On 03/02/2012 09:26 PM, Jeffrey Squyres wrote:
<br>
<span class="quotelev1">&gt; Give your btl progress function.  It'll get called quite frequently.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Look at the &quot;progress&quot; section in btl.h.  Progress threads don't work yet, but the btl_progress function will get called by the PML quite frequently.  It's how BTL's like openib progress their outstanding message passing.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Mar 2, 2012, at 2:22 PM, Alex Margolin wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On 03/02/2012 04:33 PM, Jeffrey Squyres wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Note that the OMPI 1.4.x series is about to be retired.  If you're doing new stuff, I'd advise you to be working with the Open MPI SVN trunk.  In the trunk, we've changed how we build libevent, so if you're adding to it, you probably want to be working there for max forward-compatibility.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; That being said:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I know trying to replace poll() seems like I'm doing something very wrong, but I want to poll on events without a valid linux file descriptor (and existing events, specifically sockets, at the same time), and I see no other way. Obviously, my poll2 calls the linux poll in most cases.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; What exactly are you trying to do?  OMPI has some internal hooks for non-fd-or-event-based progress.  Indeed, libevent is typically called with fairly low frequency (e.g., if you're running with OpenFabrics or some other high-speed/not-fd-based networking interconnect).
</span><br>
<span class="quotelev2">&gt;&gt; I'm trying to create a new btl module. I've written an adapter from my library to TCP, so I've implemented socket/connect/accept/send/recv... now I've taken the TCP BTL module and cloned it - replacing the relevant calls with mine. My only problem is with poll, which is not in the MCA (at least in 1.4.x).
</span><br>
<span class="quotelev2">&gt;&gt; I've implemented poll() and select() but it's not that good, because my events are not based on valid linux file descriptors, but I can poll all my events at the same time (but not in conjunction with real FDs, unfortunatly).
</span><br>
<span class="quotelev2">&gt;&gt; Can you give me some pointers as to where to look in the MPI (1.5?) source code to implement it properly?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks,
</span><br>
<span class="quotelev2">&gt;&gt; Alex
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10674.php">George Bosilca: "Re: [OMPI devel] Replacing poll()"</a>
<li><strong>Previous message:</strong> <a href="10672.php">Ralph Castain: "Re: [OMPI devel] trunk regression in mpirun (no --prefix) r26081"</a>
<li><strong>In reply to:</strong> <a href="10668.php">Jeffrey Squyres: "Re: [OMPI devel] Replacing poll()"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10674.php">George Bosilca: "Re: [OMPI devel] Replacing poll()"</a>
<li><strong>Reply:</strong> <a href="10674.php">George Bosilca: "Re: [OMPI devel] Replacing poll()"</a>
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

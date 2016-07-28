<?
$subject_val = "[OMPI devel] xensocket btl and migration";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Mar  9 06:13:41 2008" -->
<!-- isoreceived="20080309101341" -->
<!-- sent="Sun, 9 Mar 2008 03:13:28 -0700 (PDT)" -->
<!-- isosent="20080309101328" -->
<!-- name="Muhammad Atif" -->
<!-- email="m_atif_s_at_[hidden]" -->
<!-- subject="[OMPI devel] xensocket btl and migration" -->
<!-- id="198651.28366.qm_at_web52102.mail.re2.yahoo.com" -->
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
<strong>Subject:</strong> [OMPI devel] xensocket btl and migration<br>
<strong>From:</strong> Muhammad Atif (<em>m_atif_s_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-03-09 06:13:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3409.php">Jon Mason: "[OMPI devel] OMPI OpenIB Credit Schema breaks Chelsio HW"</a>
<li><strong>Previous message:</strong> <a href="3407.php">Jeff Squyres: "[OMPI devel] bug in openib btl_remove_procs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3446.php">Jeff Squyres: "Re: [OMPI devel] xensocket btl and migration"</a>
<li><strong>Reply:</strong> <a href="3446.php">Jeff Squyres: "Re: [OMPI devel] xensocket btl and migration"</a>
<li><strong>Reply:</strong> <a href="3454.php">Josh Hursey: "Re: [OMPI devel] xensocket btl and migration"</a>
<li><strong>Maybe reply:</strong> <a href="3480.php">Muhammad Atif: "Re: [OMPI devel] xensocket btl and migration"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Okay guys.. with all your support and help in understanding ompi architecture, I was able to get Xensocket to work.  Only minor changes to the xensocket kernel module made it compatible with libevent. I am getting results which are bad but I am sure, I have to cleanup the code. At least my results have improved over native netfront-netback of xen for messages of size larger than 1 MB. 
<br>
<p>I started with making minor changes in the TCP btl, but it seems it is not the best way, as changes are quite huge and it is better to have separate dedicated btl for xensockets. As you guys might be aware Xen supports live migration, now I have one stupid question. My knowledge so far suggests that btl component is initialized only once. The scerario here is if my guest os is migrated from one physical node to another, and realizes that the communicating processes are now on one physical host and they should abandon use of TCP btl and make use of Xensocket btl. I am sure it would not happen out of the box, but is it possible without making heavy changes in the openmpi architecture? 
<br>
With the current design, i am running a mix of tcp and xensocket btls, and endpoints check periodically if they are on same physical host or not. This has quite a big penalty in terms of time.
<br>
<p>Another question is (good thing i am using email otherwise you guys would beat the hell outta me, its such a basic question). I am not able to track MPI_Recv(...) api call and its alike calls. Once in the code of MPI_Recv(..) we give a call to rc = MCA_PML_CALL(recv(buf, count ... ). This call goes to the macro, and pml.recv(..) gets invoked (mca_pml_base_module_recv_fn_t         pml_recv;) . Where can I find the actual function? I get totally lost when trying to pinpoint what exactly is happening. Basically, I am looking for a place where tcp btl recv is getting called with all the goodies and  parameters which were passed by the MPI programmer. I hope I have made my question understandable. 
<br>
&nbsp;
<br>
Best Regards,
<br>
Muhammad Atif
<br>
<p>----- Original Message ----
<br>
From: Brian W. Barrett &lt;brbarret_at_[hidden]&gt;
<br>
To: Open MPI Developers &lt;devel_at_[hidden]&gt;
<br>
Sent: Wednesday, February 6, 2008 2:57:31 AM
<br>
Subject: Re: [OMPI devel] xensocket - callbacks through OPAL/libevent
<br>
<p>On Mon, 4 Feb 2008, Muhammad Atif wrote:
<br>
<p><span class="quotelev1">&gt; I am trying to port xensockets to openmpi. In principle, I have the 
</span><br>
<span class="quotelev1">&gt; framework and everything, but there seems to be a small issue, I cannot 
</span><br>
<span class="quotelev1">&gt; get libevent (or OPAL) to give callbacks for receive (or send) for 
</span><br>
<span class="quotelev1">&gt; xensockets. I have tried to implement native code for xensockets with 
</span><br>
<span class="quotelev1">&gt; libevent library, again the same issue.  No call backs! . With normal 
</span><br>
<span class="quotelev1">&gt; sockets, callbacks do come easily.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So question is, do the socket/file descriptors have to have some special 
</span><br>
<span class="quotelev1">&gt; mechanism attached to them to support callbacks for libevent/opal? i.e 
</span><br>
<span class="quotelev1">&gt; some structure/magic?. i.e. maybe the developers of xensockets did not 
</span><br>
<span class="quotelev1">&gt; add that callback/interrupt thing at the time of creation. Xensockets is 
</span><br>
<span class="quotelev1">&gt; open source, but my knowledge about these issues is limited. So I though 
</span><br>
<span class="quotelev1">&gt; some pointer in right direction might be useful.
</span><br>
<p>Yes and no :).  As you discovered, the OPAL interface just repackages a 
<br>
library called libevent to handle its socket multiplexing.  Libevent can 
<br>
use a number of different mechanisms to look for activity on sockets, 
<br>
including select() and poll() calls.  On Linux, it will generally use 
<br>
poll().  poll() requires some kernel support to do its thing, so if 
<br>
Xensockets doesn't implement the right magic to trigger poll() events, 
<br>
then libevent won't work for Xensockets.  There's really nothing you can 
<br>
do from the Open MPI front to work around this issue -- it would have to 
<br>
be fixed as part of Xensockets.
<br>
<p><span class="quotelev1">&gt; Second question is, what if we cannot have the callbacks. What is the 
</span><br>
<span class="quotelev1">&gt; recommended way to implement the btl component for such a device? Do we 
</span><br>
<span class="quotelev1">&gt; need to do this with event timers?
</span><br>
<p>Have a look at any of the BTLs that isn't TCP -- none of them use libevent 
<br>
callbacks for progress.  Instead, they provide a progress function as part 
<br>
of the BTL interface, which is called on a regular basis whenever progress 
<br>
needs to be made.
<br>
<p>Brian
<br>
_______________________________________________
<br>
devel mailing list
<br>
devel_at_[hidden]
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
<br>
<p><p><p><p><p><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;____________________________________________________________________________________
<br>
Never miss a thing.  Make Yahoo your home page. 
<br>
<a href="http://www.yahoo.com/r/hs">http://www.yahoo.com/r/hs</a>
<br>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-3408/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3409.php">Jon Mason: "[OMPI devel] OMPI OpenIB Credit Schema breaks Chelsio HW"</a>
<li><strong>Previous message:</strong> <a href="3407.php">Jeff Squyres: "[OMPI devel] bug in openib btl_remove_procs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3446.php">Jeff Squyres: "Re: [OMPI devel] xensocket btl and migration"</a>
<li><strong>Reply:</strong> <a href="3446.php">Jeff Squyres: "Re: [OMPI devel] xensocket btl and migration"</a>
<li><strong>Reply:</strong> <a href="3454.php">Josh Hursey: "Re: [OMPI devel] xensocket btl and migration"</a>
<li><strong>Maybe reply:</strong> <a href="3480.php">Muhammad Atif: "Re: [OMPI devel] xensocket btl and migration"</a>
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

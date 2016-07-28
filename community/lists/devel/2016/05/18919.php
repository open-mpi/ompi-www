<?
$subject_val = "[OMPI devel] Question about 'progress function'";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May  5 23:30:59 2016" -->
<!-- isoreceived="20160506033059" -->
<!-- sent="Thu, 5 May 2016 23:30:58 -0400" -->
<!-- isosent="20160506033058" -->
<!-- name="dpchoudh ." -->
<!-- email="dpchoudh_at_[hidden]" -->
<!-- subject="[OMPI devel] Question about 'progress function'" -->
<!-- id="CAHXxYDh+XSmL+tssT89r9sNHB-VNFsBD0s4ymMwA5D68MyVO1A_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
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
<strong>Subject:</strong> [OMPI devel] Question about 'progress function'<br>
<strong>From:</strong> dpchoudh . (<em>dpchoudh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-05-05 23:30:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18920.php">George Bosilca: "Re: [OMPI devel] Question about 'progress function'"</a>
<li><strong>Previous message:</strong> <a href="18918.php">Paul Hargrove: "[OMPI devel] [PATCH] Fix for xlc-13.1.0 ICE (hwloc)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18920.php">George Bosilca: "Re: [OMPI devel] Question about 'progress function'"</a>
<li><strong>Reply:</strong> <a href="18920.php">George Bosilca: "Re: [OMPI devel] Question about 'progress function'"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi all
<br>
<p>Apologies for a 101 level question again, but here it is:
<br>
<p>A new BTL layer I am implementing hangs in MPI_Send(). Please keep in mind
<br>
that at this stage, I am simply desperate to make MPI data move through
<br>
this fabric in any way possible, so I have thrown all good programming
<br>
practice out of the window and in the process might have added bugs.
<br>
<p>The test code basically has a single call to MPI_Send() with 8 bytes of
<br>
data, the smallest amount the HCA can DMA. I have a very simple
<br>
mca_btl_component_progress() method that returns 0 if called before
<br>
mca_btl_endpoint_send() and returns 1 if called after. I use a static
<br>
variable to keep track whether endpoint_send() has been called.
<br>
<p>With this, the MPI process hangs with the following stack:
<br>
<p>(gdb) bt
<br>
#0  0x00007f7518c60b7d in poll () from /lib64/libc.so.6
<br>
#1  0x00007f75183e79f6 in poll_dispatch (base=0x19cf480, tv=0x7f75177efe80)
<br>
at poll.c:165
<br>
#2  0x00007f75183df690 in opal_libevent2022_event_base_loop
<br>
(base=0x19cf480, flags=1) at event.c:1630
<br>
#3  0x00007f75183613d4 in progress_engine (obj=0x19cedd8) at
<br>
runtime/opal_progress_threads.c:105
<br>
#4  0x00007f7518f3ddf5 in start_thread () from /lib64/libpthread.so.0
<br>
#5  0x00007f7518c6b1ad in clone () from /lib64/libc.so.6
<br>
<p>I am using code from master branch for this work.
<br>
<p>Obviously I am not doing the progress handling right, and I don't even
<br>
understand how it should work, as the TCP btl does not even provide a
<br>
component progress function.
<br>
<p>Any relevant pointer on how this should be done is highly appreciated.
<br>
<p>Thanks
<br>
Durga
<br>
<p><p>The surgeon general advises you to eat right, exercise regularly and quit
<br>
ageing.
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-18919/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18920.php">George Bosilca: "Re: [OMPI devel] Question about 'progress function'"</a>
<li><strong>Previous message:</strong> <a href="18918.php">Paul Hargrove: "[OMPI devel] [PATCH] Fix for xlc-13.1.0 ICE (hwloc)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18920.php">George Bosilca: "Re: [OMPI devel] Question about 'progress function'"</a>
<li><strong>Reply:</strong> <a href="18920.php">George Bosilca: "Re: [OMPI devel] Question about 'progress function'"</a>
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

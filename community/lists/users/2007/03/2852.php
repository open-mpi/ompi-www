<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Mar 20 18:53:04 2007" -->
<!-- isoreceived="20070320225304" -->
<!-- sent="Tue, 20 Mar 2007 15:53:00 -0700" -->
<!-- isosent="20070320225300" -->
<!-- name="Mike Houston" -->
<!-- email="mhouston_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Issues with Get/Put and IRecv" -->
<!-- id="460065CC.4070302_at_graphics.stanford.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="265EF55B-E184-471F-A3EE-AA393D558B48_at_lanl.gov" -->
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
<strong>From:</strong> Mike Houston (<em>mhouston_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-03-20 18:53:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2853.php">Jeff Squyres: "Re: [OMPI users] Signal 13"</a>
<li><strong>Previous message:</strong> <a href="2851.php">Brian Barrett: "Re: [OMPI users] Issues with Get/Put and IRecv"</a>
<li><strong>In reply to:</strong> <a href="2851.php">Brian Barrett: "Re: [OMPI users] Issues with Get/Put and IRecv"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2855.php">Mike Houston: "Re: [OMPI users] Issues with Get/Put and IRecv"</a>
<li><strong>Reply:</strong> <a href="2855.php">Mike Houston: "Re: [OMPI users] Issues with Get/Put and IRecv"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Brian Barrett wrote:
<br>
<span class="quotelev1">&gt; On Mar 20, 2007, at 3:15 PM, Mike Houston wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev2">&gt;&gt; If I only do gets/puts, things seem to be working correctly with  
</span><br>
<span class="quotelev2">&gt;&gt; version
</span><br>
<span class="quotelev2">&gt;&gt; 1.2.  However, if I have a posted Irecv on the target node and issue a
</span><br>
<span class="quotelev2">&gt;&gt; MPI_Get against that target, MPI_Test on the posed IRecv causes a  
</span><br>
<span class="quotelev2">&gt;&gt; segfaults:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Anyone have suggestions?  Sadly, I need to have IRecv's posted.  I'll
</span><br>
<span class="quotelev2">&gt;&gt; attempt to find a workaround, but it looks like the posed IRecv is
</span><br>
<span class="quotelev2">&gt;&gt; getting all the data of the MPI_Get from the other node.  It's like  
</span><br>
<span class="quotelev2">&gt;&gt; the
</span><br>
<span class="quotelev2">&gt;&gt; message tagging is getting ignored.  I've never tried posting two
</span><br>
<span class="quotelev2">&gt;&gt; different IRecv's with different message tags either...
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi Mike -
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I've spent some time this afternoon looking at the problem and have  
</span><br>
<span class="quotelev1">&gt; some ideas on what could be happening.  I don't think it's a data  
</span><br>
<span class="quotelev1">&gt; mismatch (the data intended for the IRecv getting delivered to the  
</span><br>
<span class="quotelev1">&gt; Get), but more a problem with the call to MPI_Test perturbing the  
</span><br>
<span class="quotelev1">&gt; progress flow of the one-sided engine.  I can see one or two places  
</span><br>
<span class="quotelev1">&gt; where it's possible this could happen, although I'm having trouble  
</span><br>
<span class="quotelev1">&gt; replicating the problem with any test case I can write.  Is it  
</span><br>
<span class="quotelev1">&gt; possible for you to share the code causing the problem (or some small  
</span><br>
<span class="quotelev1">&gt; test case)?  It would make me feel considerably better if I could  
</span><br>
<span class="quotelev1">&gt; really understand the conditions required to end up in a seg fault  
</span><br>
<span class="quotelev1">&gt; state.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Brian
</span><br>
<span class="quotelev1">&gt;   
</span><br>
Well, I can give you a linux x86 binary if that would do it.  The code 
<br>
is huge as it's part of a much larger system, so there is no such thing 
<br>
as a simple case at the moment, and the code is in pieces an largely 
<br>
unrunnable now with all the hacking...
<br>
<p>I basically have one thread spinning on an MPI_Test on a posted IRecv 
<br>
while being used as the target to the MPI_Get.  I'll see if I can hack 
<br>
together a simple version that breaks late tonight.  I've just played 
<br>
with posting a send to that IRecv, issuing the MPI_Get, handshaking and 
<br>
then posting another IRecv and the MPI_Test continues to eat it, but in 
<br>
a memcpy:
<br>
<p>#0  0x001c068c in memcpy () from /lib/libc.so.6
<br>
#1  0x00e412d9 in ompi_convertor_pack (pConv=0x83c1198, iov=0xa0, 
<br>
out_size=0xaffc1fd8, max_data=0xaffc1fdc) at convertor.c:254
<br>
#2  0x00ea265d in ompi_osc_pt2pt_replyreq_send (module=0x856e668, 
<br>
replyreq=0x83c1180) at osc_pt2pt_data_move.c:411
<br>
#3  0x00ea0ebe in ompi_osc_pt2pt_component_fragment_cb 
<br>
(pt2pt_buffer=0x8573380) at osc_pt2pt_component.c:582
<br>
#4  0x00ea1389 in ompi_osc_pt2pt_progress () at osc_pt2pt_component.c:769
<br>
#5  0x00aa3019 in opal_progress () at runtime/opal_progress.c:288
<br>
#6  0x00ea59e5 in ompi_osc_pt2pt_passive_unlock (module=0x856e668, 
<br>
origin=1, count=1) at osc_pt2pt_sync.c:60
<br>
#7  0x00ea0cd2 in ompi_osc_pt2pt_component_fragment_cb 
<br>
(pt2pt_buffer=0x856f300) at osc_pt2pt_component.c:688
<br>
#8  0x00ea1389 in ompi_osc_pt2pt_progress () at osc_pt2pt_component.c:769
<br>
#9  0x00aa3019 in opal_progress () at runtime/opal_progress.c:288
<br>
#10 0x00e33f05 in ompi_request_test (rptr=0xaffc2430, 
<br>
completed=0xaffc2434, status=0xaffc23fc) at request/req_test.c:82
<br>
#11 0x00e61770 in PMPI_Test (request=0xaffc2430, completed=0xaffc2434, 
<br>
status=0xaffc23fc) at ptest.c:52
<br>
<p>-Mike
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2853.php">Jeff Squyres: "Re: [OMPI users] Signal 13"</a>
<li><strong>Previous message:</strong> <a href="2851.php">Brian Barrett: "Re: [OMPI users] Issues with Get/Put and IRecv"</a>
<li><strong>In reply to:</strong> <a href="2851.php">Brian Barrett: "Re: [OMPI users] Issues with Get/Put and IRecv"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2855.php">Mike Houston: "Re: [OMPI users] Issues with Get/Put and IRecv"</a>
<li><strong>Reply:</strong> <a href="2855.php">Mike Houston: "Re: [OMPI users] Issues with Get/Put and IRecv"</a>
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

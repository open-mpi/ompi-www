<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Mar 26 16:17:09 2007" -->
<!-- isoreceived="20070326201709" -->
<!-- sent="Mon, 26 Mar 2007 14:16:24 -0600" -->
<!-- isosent="20070326201624" -->
<!-- name="Brian Barrett" -->
<!-- email="bbarrett_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Issues with Get/Put and IRecv" -->
<!-- id="E9CDF68C-EF5F-4E84-AB82-C58D12758931_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="46009E65.90408_at_graphics.stanford.edu" -->
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
<strong>From:</strong> Brian Barrett (<em>bbarrett_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-03-26 16:16:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2922.php">Mike Houston: "Re: [OMPI users] Issues with Get/Put and IRecv"</a>
<li><strong>Previous message:</strong> <a href="2920.php">Brian Barrett: "Re: [OMPI users] Installation fails on Mac Os"</a>
<li><strong>In reply to:</strong> <a href="2855.php">Mike Houston: "Re: [OMPI users] Issues with Get/Put and IRecv"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2922.php">Mike Houston: "Re: [OMPI users] Issues with Get/Put and IRecv"</a>
<li><strong>Reply:</strong> <a href="2922.php">Mike Houston: "Re: [OMPI users] Issues with Get/Put and IRecv"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Mike -
<br>
<p>In Open MPI 1.2, one-sided is implemented over point-to-point, so I  
<br>
would expect it to be slower.  This may or may not be addressed in a  
<br>
future version of Open MPI (I would guess so, but don't want to  
<br>
commit to it).  Where you using multiple threads?  If so, how?
<br>
<p>On the good news, I think your call stack looked similar to what I  
<br>
was seeing, so hopefully I can make some progress on a real solution.
<br>
<p>Brian
<br>
<p>On Mar 20, 2007, at 8:54 PM, Mike Houston wrote:
<br>
<p><span class="quotelev1">&gt; Well, I've managed to get a working solution, but I'm not sure how  
</span><br>
<span class="quotelev1">&gt; I got
</span><br>
<span class="quotelev1">&gt; there.  I built a test case that looked like a nice simple version of
</span><br>
<span class="quotelev1">&gt; what I was trying to do and it worked, so I moved the test code  
</span><br>
<span class="quotelev1">&gt; into my
</span><br>
<span class="quotelev1">&gt; implementation and low and behold it works.  I must have been doing
</span><br>
<span class="quotelev1">&gt; something a little funky in the original pass, likely causing a stack
</span><br>
<span class="quotelev1">&gt; smash somewhere or trying to do a get/put out of bounds.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If I have any more problems, I'll let y'all know.  I've tested pretty
</span><br>
<span class="quotelev1">&gt; heavy usage up to 128 MPI processes across 16 nodes and things seem to
</span><br>
<span class="quotelev1">&gt; be behaving.  I did notice that single sided transfers seem to be a
</span><br>
<span class="quotelev1">&gt; little slower than explicit send/recv, at least on GigE.  Once I do  
</span><br>
<span class="quotelev1">&gt; some
</span><br>
<span class="quotelev1">&gt; more testing, I'll bring things up on IB and see how things are going.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Mike
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Mike Houston wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Brian Barrett wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Mar 20, 2007, at 3:15 PM, Mike Houston wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; If I only do gets/puts, things seem to be working correctly with
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; version
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 1.2.  However, if I have a posted Irecv on the target node and  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; issue a
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MPI_Get against that target, MPI_Test on the posed IRecv causes a
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; segfaults:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Anyone have suggestions?  Sadly, I need to have IRecv's posted.   
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I'll
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; attempt to find a workaround, but it looks like the posed IRecv is
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; getting all the data of the MPI_Get from the other node.  It's like
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; message tagging is getting ignored.  I've never tried posting two
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; different IRecv's with different message tags either...
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi Mike -
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I've spent some time this afternoon looking at the problem and have
</span><br>
<span class="quotelev3">&gt;&gt;&gt; some ideas on what could be happening.  I don't think it's a data
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mismatch (the data intended for the IRecv getting delivered to the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Get), but more a problem with the call to MPI_Test perturbing the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; progress flow of the one-sided engine.  I can see one or two places
</span><br>
<span class="quotelev3">&gt;&gt;&gt; where it's possible this could happen, although I'm having trouble
</span><br>
<span class="quotelev3">&gt;&gt;&gt; replicating the problem with any test case I can write.  Is it
</span><br>
<span class="quotelev3">&gt;&gt;&gt; possible for you to share the code causing the problem (or some  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; small
</span><br>
<span class="quotelev3">&gt;&gt;&gt; test case)?  It would make me feel considerably better if I could
</span><br>
<span class="quotelev3">&gt;&gt;&gt; really understand the conditions required to end up in a seg fault
</span><br>
<span class="quotelev3">&gt;&gt;&gt; state.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Brian
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Well, I can give you a linux x86 binary if that would do it.  The  
</span><br>
<span class="quotelev2">&gt;&gt; code
</span><br>
<span class="quotelev2">&gt;&gt; is huge as it's part of a much larger system, so there is no such  
</span><br>
<span class="quotelev2">&gt;&gt; thing
</span><br>
<span class="quotelev2">&gt;&gt; as a simple case at the moment, and the code is in pieces an largely
</span><br>
<span class="quotelev2">&gt;&gt; unrunnable now with all the hacking...
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I basically have one thread spinning on an MPI_Test on a posted IRecv
</span><br>
<span class="quotelev2">&gt;&gt; while being used as the target to the MPI_Get.  I'll see if I can  
</span><br>
<span class="quotelev2">&gt;&gt; hack
</span><br>
<span class="quotelev2">&gt;&gt; together a simple version that breaks late tonight.  I've just played
</span><br>
<span class="quotelev2">&gt;&gt; with posting a send to that IRecv, issuing the MPI_Get,  
</span><br>
<span class="quotelev2">&gt;&gt; handshaking and
</span><br>
<span class="quotelev2">&gt;&gt; then posting another IRecv and the MPI_Test continues to eat it,  
</span><br>
<span class="quotelev2">&gt;&gt; but in
</span><br>
<span class="quotelev2">&gt;&gt; a memcpy:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #0  0x001c068c in memcpy () from /lib/libc.so.6
</span><br>
<span class="quotelev2">&gt;&gt; #1  0x00e412d9 in ompi_convertor_pack (pConv=0x83c1198, iov=0xa0,
</span><br>
<span class="quotelev2">&gt;&gt; out_size=0xaffc1fd8, max_data=0xaffc1fdc) at convertor.c:254
</span><br>
<span class="quotelev2">&gt;&gt; #2  0x00ea265d in ompi_osc_pt2pt_replyreq_send (module=0x856e668,
</span><br>
<span class="quotelev2">&gt;&gt; replyreq=0x83c1180) at osc_pt2pt_data_move.c:411
</span><br>
<span class="quotelev2">&gt;&gt; #3  0x00ea0ebe in ompi_osc_pt2pt_component_fragment_cb
</span><br>
<span class="quotelev2">&gt;&gt; (pt2pt_buffer=0x8573380) at osc_pt2pt_component.c:582
</span><br>
<span class="quotelev2">&gt;&gt; #4  0x00ea1389 in ompi_osc_pt2pt_progress () at  
</span><br>
<span class="quotelev2">&gt;&gt; osc_pt2pt_component.c:769
</span><br>
<span class="quotelev2">&gt;&gt; #5  0x00aa3019 in opal_progress () at runtime/opal_progress.c:288
</span><br>
<span class="quotelev2">&gt;&gt; #6  0x00ea59e5 in ompi_osc_pt2pt_passive_unlock (module=0x856e668,
</span><br>
<span class="quotelev2">&gt;&gt; origin=1, count=1) at osc_pt2pt_sync.c:60
</span><br>
<span class="quotelev2">&gt;&gt; #7  0x00ea0cd2 in ompi_osc_pt2pt_component_fragment_cb
</span><br>
<span class="quotelev2">&gt;&gt; (pt2pt_buffer=0x856f300) at osc_pt2pt_component.c:688
</span><br>
<span class="quotelev2">&gt;&gt; #8  0x00ea1389 in ompi_osc_pt2pt_progress () at  
</span><br>
<span class="quotelev2">&gt;&gt; osc_pt2pt_component.c:769
</span><br>
<span class="quotelev2">&gt;&gt; #9  0x00aa3019 in opal_progress () at runtime/opal_progress.c:288
</span><br>
<span class="quotelev2">&gt;&gt; #10 0x00e33f05 in ompi_request_test (rptr=0xaffc2430,
</span><br>
<span class="quotelev2">&gt;&gt; completed=0xaffc2434, status=0xaffc23fc) at request/req_test.c:82
</span><br>
<span class="quotelev2">&gt;&gt; #11 0x00e61770 in PMPI_Test (request=0xaffc2430,  
</span><br>
<span class="quotelev2">&gt;&gt; completed=0xaffc2434,
</span><br>
<span class="quotelev2">&gt;&gt; status=0xaffc23fc) at ptest.c:52
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -Mike
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2922.php">Mike Houston: "Re: [OMPI users] Issues with Get/Put and IRecv"</a>
<li><strong>Previous message:</strong> <a href="2920.php">Brian Barrett: "Re: [OMPI users] Installation fails on Mac Os"</a>
<li><strong>In reply to:</strong> <a href="2855.php">Mike Houston: "Re: [OMPI users] Issues with Get/Put and IRecv"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2922.php">Mike Houston: "Re: [OMPI users] Issues with Get/Put and IRecv"</a>
<li><strong>Reply:</strong> <a href="2922.php">Mike Houston: "Re: [OMPI users] Issues with Get/Put and IRecv"</a>
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

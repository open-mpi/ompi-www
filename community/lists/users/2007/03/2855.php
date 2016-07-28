<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Mar 20 22:54:33 2007" -->
<!-- isoreceived="20070321025433" -->
<!-- sent="Tue, 20 Mar 2007 19:54:29 -0700" -->
<!-- isosent="20070321025429" -->
<!-- name="Mike Houston" -->
<!-- email="mhouston_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Issues with Get/Put and IRecv" -->
<!-- id="46009E65.90408_at_graphics.stanford.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="460065CC.4070302_at_graphics.stanford.edu" -->
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
<strong>Date:</strong> 2007-03-20 22:54:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2856.php">Weikuan Yu: "[OMPI users] HotI 2007 Call for Papers -- 4th call. Deadline March 31st is approaching"</a>
<li><strong>Previous message:</strong> <a href="2854.php">Jeff Squyres: "Re: [OMPI users] multithreading support"</a>
<li><strong>In reply to:</strong> <a href="2852.php">Mike Houston: "Re: [OMPI users] Issues with Get/Put and IRecv"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2921.php">Brian Barrett: "Re: [OMPI users] Issues with Get/Put and IRecv"</a>
<li><strong>Reply:</strong> <a href="2921.php">Brian Barrett: "Re: [OMPI users] Issues with Get/Put and IRecv"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Well, I've managed to get a working solution, but I'm not sure how I got 
<br>
there.  I built a test case that looked like a nice simple version of 
<br>
what I was trying to do and it worked, so I moved the test code into my 
<br>
implementation and low and behold it works.  I must have been doing 
<br>
something a little funky in the original pass, likely causing a stack 
<br>
smash somewhere or trying to do a get/put out of bounds.
<br>
<p>If I have any more problems, I'll let y'all know.  I've tested pretty 
<br>
heavy usage up to 128 MPI processes across 16 nodes and things seem to 
<br>
be behaving.  I did notice that single sided transfers seem to be a 
<br>
little slower than explicit send/recv, at least on GigE.  Once I do some 
<br>
more testing, I'll bring things up on IB and see how things are going.
<br>
<p>-Mike
<br>
<p>Mike Houston wrote:
<br>
<span class="quotelev1">&gt; Brian Barrett wrote:
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev2">&gt;&gt; On Mar 20, 2007, at 3:15 PM, Mike Houston wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev3">&gt;&gt;&gt; If I only do gets/puts, things seem to be working correctly with  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; version
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 1.2.  However, if I have a posted Irecv on the target node and issue a
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI_Get against that target, MPI_Test on the posed IRecv causes a  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; segfaults:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Anyone have suggestions?  Sadly, I need to have IRecv's posted.  I'll
</span><br>
<span class="quotelev3">&gt;&gt;&gt; attempt to find a workaround, but it looks like the posed IRecv is
</span><br>
<span class="quotelev3">&gt;&gt;&gt; getting all the data of the MPI_Get from the other node.  It's like  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; message tagging is getting ignored.  I've never tried posting two
</span><br>
<span class="quotelev3">&gt;&gt;&gt; different IRecv's with different message tags either...
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       
</span><br>
<span class="quotelev2">&gt;&gt; Hi Mike -
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I've spent some time this afternoon looking at the problem and have  
</span><br>
<span class="quotelev2">&gt;&gt; some ideas on what could be happening.  I don't think it's a data  
</span><br>
<span class="quotelev2">&gt;&gt; mismatch (the data intended for the IRecv getting delivered to the  
</span><br>
<span class="quotelev2">&gt;&gt; Get), but more a problem with the call to MPI_Test perturbing the  
</span><br>
<span class="quotelev2">&gt;&gt; progress flow of the one-sided engine.  I can see one or two places  
</span><br>
<span class="quotelev2">&gt;&gt; where it's possible this could happen, although I'm having trouble  
</span><br>
<span class="quotelev2">&gt;&gt; replicating the problem with any test case I can write.  Is it  
</span><br>
<span class="quotelev2">&gt;&gt; possible for you to share the code causing the problem (or some small  
</span><br>
<span class="quotelev2">&gt;&gt; test case)?  It would make me feel considerably better if I could  
</span><br>
<span class="quotelev2">&gt;&gt; really understand the conditions required to end up in a seg fault  
</span><br>
<span class="quotelev2">&gt;&gt; state.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Brian
</span><br>
<span class="quotelev2">&gt;&gt;   
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev1">&gt; Well, I can give you a linux x86 binary if that would do it.  The code 
</span><br>
<span class="quotelev1">&gt; is huge as it's part of a much larger system, so there is no such thing 
</span><br>
<span class="quotelev1">&gt; as a simple case at the moment, and the code is in pieces an largely 
</span><br>
<span class="quotelev1">&gt; unrunnable now with all the hacking...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I basically have one thread spinning on an MPI_Test on a posted IRecv 
</span><br>
<span class="quotelev1">&gt; while being used as the target to the MPI_Get.  I'll see if I can hack 
</span><br>
<span class="quotelev1">&gt; together a simple version that breaks late tonight.  I've just played 
</span><br>
<span class="quotelev1">&gt; with posting a send to that IRecv, issuing the MPI_Get, handshaking and 
</span><br>
<span class="quotelev1">&gt; then posting another IRecv and the MPI_Test continues to eat it, but in 
</span><br>
<span class="quotelev1">&gt; a memcpy:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #0  0x001c068c in memcpy () from /lib/libc.so.6
</span><br>
<span class="quotelev1">&gt; #1  0x00e412d9 in ompi_convertor_pack (pConv=0x83c1198, iov=0xa0, 
</span><br>
<span class="quotelev1">&gt; out_size=0xaffc1fd8, max_data=0xaffc1fdc) at convertor.c:254
</span><br>
<span class="quotelev1">&gt; #2  0x00ea265d in ompi_osc_pt2pt_replyreq_send (module=0x856e668, 
</span><br>
<span class="quotelev1">&gt; replyreq=0x83c1180) at osc_pt2pt_data_move.c:411
</span><br>
<span class="quotelev1">&gt; #3  0x00ea0ebe in ompi_osc_pt2pt_component_fragment_cb 
</span><br>
<span class="quotelev1">&gt; (pt2pt_buffer=0x8573380) at osc_pt2pt_component.c:582
</span><br>
<span class="quotelev1">&gt; #4  0x00ea1389 in ompi_osc_pt2pt_progress () at osc_pt2pt_component.c:769
</span><br>
<span class="quotelev1">&gt; #5  0x00aa3019 in opal_progress () at runtime/opal_progress.c:288
</span><br>
<span class="quotelev1">&gt; #6  0x00ea59e5 in ompi_osc_pt2pt_passive_unlock (module=0x856e668, 
</span><br>
<span class="quotelev1">&gt; origin=1, count=1) at osc_pt2pt_sync.c:60
</span><br>
<span class="quotelev1">&gt; #7  0x00ea0cd2 in ompi_osc_pt2pt_component_fragment_cb 
</span><br>
<span class="quotelev1">&gt; (pt2pt_buffer=0x856f300) at osc_pt2pt_component.c:688
</span><br>
<span class="quotelev1">&gt; #8  0x00ea1389 in ompi_osc_pt2pt_progress () at osc_pt2pt_component.c:769
</span><br>
<span class="quotelev1">&gt; #9  0x00aa3019 in opal_progress () at runtime/opal_progress.c:288
</span><br>
<span class="quotelev1">&gt; #10 0x00e33f05 in ompi_request_test (rptr=0xaffc2430, 
</span><br>
<span class="quotelev1">&gt; completed=0xaffc2434, status=0xaffc23fc) at request/req_test.c:82
</span><br>
<span class="quotelev1">&gt; #11 0x00e61770 in PMPI_Test (request=0xaffc2430, completed=0xaffc2434, 
</span><br>
<span class="quotelev1">&gt; status=0xaffc23fc) at ptest.c:52
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Mike
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2856.php">Weikuan Yu: "[OMPI users] HotI 2007 Call for Papers -- 4th call. Deadline March 31st is approaching"</a>
<li><strong>Previous message:</strong> <a href="2854.php">Jeff Squyres: "Re: [OMPI users] multithreading support"</a>
<li><strong>In reply to:</strong> <a href="2852.php">Mike Houston: "Re: [OMPI users] Issues with Get/Put and IRecv"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2921.php">Brian Barrett: "Re: [OMPI users] Issues with Get/Put and IRecv"</a>
<li><strong>Reply:</strong> <a href="2921.php">Brian Barrett: "Re: [OMPI users] Issues with Get/Put and IRecv"</a>
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

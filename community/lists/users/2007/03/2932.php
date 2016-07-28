<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Mar 27 13:45:00 2007" -->
<!-- isoreceived="20070327174500" -->
<!-- sent="Tue, 27 Mar 2007 10:44:55 -0700" -->
<!-- isosent="20070327174455" -->
<!-- name="Mike Houston" -->
<!-- email="mhouston_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Issues with Get/Put and IRecv" -->
<!-- id="46095817.2060501_at_graphics.stanford.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="46082B01.6010002_at_graphics.stanford.edu" -->
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
<strong>Date:</strong> 2007-03-27 13:44:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2933.php">George Bosilca: "Re: [OMPI users] Open-MPI 1.2 and GM"</a>
<li><strong>Previous message:</strong> <a href="2931.php">Mohamad Chaarawi: "Re: [OMPI users] [Re:  Memory leak in openmpi-1.2?]"</a>
<li><strong>In reply to:</strong> <a href="2922.php">Mike Houston: "Re: [OMPI users] Issues with Get/Put and IRecv"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Well, mpich2 and mvapich2 are working smoothly for my app.  mpich2 under 
<br>
gige is also giving ~2X the performance of openmpi during the working 
<br>
cases for openmpi.  After the paper deadline, I'll attempt to package up 
<br>
a simple test case and send it to the list.
<br>
<p>Thanks!
<br>
<p>-Mike
<br>
<p>Mike Houston wrote:
<br>
<span class="quotelev1">&gt; Sadly, I've just hit this problem again, so I'll have to find another 
</span><br>
<span class="quotelev1">&gt; MPI implementation as I have a paper deadline quickly approaching.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm using single threads now, but I had very similar issues when using 
</span><br>
<span class="quotelev1">&gt; multiple threads and issuing send/recv on one thread and waiting on a 
</span><br>
<span class="quotelev1">&gt; posted MPI_Recv on another.  The issue seems to actually be with 
</span><br>
<span class="quotelev1">&gt; MPI_Gets.  I can do heavy MPI_Put's and things seem okay.  But as soon 
</span><br>
<span class="quotelev1">&gt; as I have a similar communication pattern with MPI_Get's things get 
</span><br>
<span class="quotelev1">&gt; unstable.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Mike
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Brian Barrett wrote:
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev2">&gt;&gt; Mike -
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; In Open MPI 1.2, one-sided is implemented over point-to-point, so I  
</span><br>
<span class="quotelev2">&gt;&gt; would expect it to be slower.  This may or may not be addressed in a  
</span><br>
<span class="quotelev2">&gt;&gt; future version of Open MPI (I would guess so, but don't want to  
</span><br>
<span class="quotelev2">&gt;&gt; commit to it).  Where you using multiple threads?  If so, how?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On the good news, I think your call stack looked similar to what I  
</span><br>
<span class="quotelev2">&gt;&gt; was seeing, so hopefully I can make some progress on a real solution.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Brian
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Mar 20, 2007, at 8:54 PM, Mike Houston wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Well, I've managed to get a working solution, but I'm not sure how  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I got
</span><br>
<span class="quotelev3">&gt;&gt;&gt; there.  I built a test case that looked like a nice simple version of
</span><br>
<span class="quotelev3">&gt;&gt;&gt; what I was trying to do and it worked, so I moved the test code  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; into my
</span><br>
<span class="quotelev3">&gt;&gt;&gt; implementation and low and behold it works.  I must have been doing
</span><br>
<span class="quotelev3">&gt;&gt;&gt; something a little funky in the original pass, likely causing a stack
</span><br>
<span class="quotelev3">&gt;&gt;&gt; smash somewhere or trying to do a get/put out of bounds.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; If I have any more problems, I'll let y'all know.  I've tested pretty
</span><br>
<span class="quotelev3">&gt;&gt;&gt; heavy usage up to 128 MPI processes across 16 nodes and things seem to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; be behaving.  I did notice that single sided transfers seem to be a
</span><br>
<span class="quotelev3">&gt;&gt;&gt; little slower than explicit send/recv, at least on GigE.  Once I do  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; some
</span><br>
<span class="quotelev3">&gt;&gt;&gt; more testing, I'll bring things up on IB and see how things are going.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -Mike
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Mike Houston wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Brian Barrett wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;       
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; On Mar 20, 2007, at 3:15 PM, Mike Houston wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;         
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;           
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; If I only do gets/puts, things seem to be working correctly with
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; version
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 1.2.  However, if I have a posted Irecv on the target node and  
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; issue a
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; MPI_Get against that target, MPI_Test on the posed IRecv causes a
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; segfaults:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Anyone have suggestions?  Sadly, I need to have IRecv's posted.   
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; I'll
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; attempt to find a workaround, but it looks like the posed IRecv is
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; getting all the data of the MPI_Get from the other node.  It's like
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; the
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; message tagging is getting ignored.  I've never tried posting two
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; different IRecv's with different message tags either...
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;           
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;             
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Hi Mike -
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I've spent some time this afternoon looking at the problem and have
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; some ideas on what could be happening.  I don't think it's a data
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; mismatch (the data intended for the IRecv getting delivered to the
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Get), but more a problem with the call to MPI_Test perturbing the
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; progress flow of the one-sided engine.  I can see one or two places
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; where it's possible this could happen, although I'm having trouble
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; replicating the problem with any test case I can write.  Is it
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; possible for you to share the code causing the problem (or some  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; small
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; test case)?  It would make me feel considerably better if I could
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; really understand the conditions required to end up in a seg fault
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; state.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Thanks,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Brian
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;         
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;           
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Well, I can give you a linux x86 binary if that would do it.  The  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; code
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; is huge as it's part of a much larger system, so there is no such  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; thing
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; as a simple case at the moment, and the code is in pieces an largely
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; unrunnable now with all the hacking...
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I basically have one thread spinning on an MPI_Test on a posted IRecv
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; while being used as the target to the MPI_Get.  I'll see if I can  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; hack
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; together a simple version that breaks late tonight.  I've just played
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; with posting a send to that IRecv, issuing the MPI_Get,  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; handshaking and
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; then posting another IRecv and the MPI_Test continues to eat it,  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; but in
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; a memcpy:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; #0  0x001c068c in memcpy () from /lib/libc.so.6
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; #1  0x00e412d9 in ompi_convertor_pack (pConv=0x83c1198, iov=0xa0,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; out_size=0xaffc1fd8, max_data=0xaffc1fdc) at convertor.c:254
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; #2  0x00ea265d in ompi_osc_pt2pt_replyreq_send (module=0x856e668,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; replyreq=0x83c1180) at osc_pt2pt_data_move.c:411
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; #3  0x00ea0ebe in ompi_osc_pt2pt_component_fragment_cb
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; (pt2pt_buffer=0x8573380) at osc_pt2pt_component.c:582
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; #4  0x00ea1389 in ompi_osc_pt2pt_progress () at  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; osc_pt2pt_component.c:769
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; #5  0x00aa3019 in opal_progress () at runtime/opal_progress.c:288
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; #6  0x00ea59e5 in ompi_osc_pt2pt_passive_unlock (module=0x856e668,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; origin=1, count=1) at osc_pt2pt_sync.c:60
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; #7  0x00ea0cd2 in ompi_osc_pt2pt_component_fragment_cb
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; (pt2pt_buffer=0x856f300) at osc_pt2pt_component.c:688
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; #8  0x00ea1389 in ompi_osc_pt2pt_progress () at  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; osc_pt2pt_component.c:769
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; #9  0x00aa3019 in opal_progress () at runtime/opal_progress.c:288
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; #10 0x00e33f05 in ompi_request_test (rptr=0xaffc2430,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; completed=0xaffc2434, status=0xaffc23fc) at request/req_test.c:82
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; #11 0x00e61770 in PMPI_Test (request=0xaffc2430,  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; completed=0xaffc2434,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; status=0xaffc23fc) at ptest.c:52
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -Mike
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;       
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2933.php">George Bosilca: "Re: [OMPI users] Open-MPI 1.2 and GM"</a>
<li><strong>Previous message:</strong> <a href="2931.php">Mohamad Chaarawi: "Re: [OMPI users] [Re:  Memory leak in openmpi-1.2?]"</a>
<li><strong>In reply to:</strong> <a href="2922.php">Mike Houston: "Re: [OMPI users] Issues with Get/Put and IRecv"</a>
<!-- nextthread="start" -->
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

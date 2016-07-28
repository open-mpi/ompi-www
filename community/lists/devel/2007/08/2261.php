<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Aug 29 11:32:54 2007" -->
<!-- isoreceived="20070829153254" -->
<!-- sent="Wed, 29 Aug 2007 11:33:54 -0400" -->
<!-- isosent="20070829153354" -->
<!-- name="Terry D. Dontje" -->
<!-- email="Terry.Dontje_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] SM BTL hang issue" -->
<!-- id="46D591E2.5050606_at_sun.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="20070829150816.GI25167_at_minantech.com" -->
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
<strong>From:</strong> Terry D. Dontje (<em>Terry.Dontje_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-08-29 11:33:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2262.php">Terry D. Dontje: "Re: [OMPI devel] SM BTL hang issue"</a>
<li><strong>Previous message:</strong> <a href="2260.php">Gleb Natapov: "Re: [OMPI devel] SM BTL hang issue"</a>
<li><strong>In reply to:</strong> <a href="2260.php">Gleb Natapov: "Re: [OMPI devel] SM BTL hang issue"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2262.php">Terry D. Dontje: "Re: [OMPI devel] SM BTL hang issue"</a>
<li><strong>Reply:</strong> <a href="2262.php">Terry D. Dontje: "Re: [OMPI devel] SM BTL hang issue"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Heard you the first time Gleb, just been backed up with other stuff.  
<br>
Following is the code:
<br>
<p>&nbsp;&nbsp;include &quot;mpif.h&quot;
<br>
<p>&nbsp;&nbsp;character(20) cmd_line_arg     ! We'll use the first command-line argument
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;! to set the duration of the test.
<br>
<p>&nbsp;&nbsp;real(8) :: duration = 10       ! The default duration (in seconds) can be
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;! set here.
<br>
<p>&nbsp;&nbsp;real(8) :: endtime             ! This is the time at which we'll end the
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;! test.
<br>
<p>&nbsp;&nbsp;integer(8) :: nmsgs = 1        ! We'll count the number of messages sent
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;! out from each MPI process.  There will be
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;! at least one message (at the very end),
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;! and we'll count all the others.
<br>
<p>&nbsp;&nbsp;logical :: keep_going = .true. ! This flag says whether to keep going.
<br>
<p>&nbsp;&nbsp;! Initialize MPI stuff.
<br>
<p>&nbsp;&nbsp;call MPI_Init(ier)
<br>
&nbsp;&nbsp;call MPI_Comm_rank(MPI_COMM_WORLD, me, ier)
<br>
&nbsp;&nbsp;call MPI_Comm_size(MPI_COMM_WORLD, np, ier)
<br>
<p>&nbsp;&nbsp;if ( np == 1 ) then
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;! Test to make sure there is at least one other process.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;write(6,*) &quot;Need at least 2 processes.&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;write(6,*) &quot;Try resubmitting the job with&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;write(6,*) &quot;   'mpirun -np &lt;np&gt;'&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;write(6,*) &quot;where &lt;np&gt; is at least 2.&quot;
<br>
<p>&nbsp;&nbsp;else if ( me == 0 ) then
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;! The first command-line argument is the duration of the test (seconds).
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;call get_command_argument(1,cmd_line_arg,len,istat)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;if ( istat == 0 ) read(cmd_line_arg,*) duration
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;! Loop until test is done.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;endtime = MPI_Wtime() + duration     ! figure out when to end
<br>
&nbsp;&nbsp;&nbsp;&nbsp;do while ( MPI_Wtime() &lt; endtime )
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;call MPI_Send(keep_going,1,MPI_LOGICAL,1,1,MPI_COMM_WORLD,ier)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;nmsgs = nmsgs + 1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;end do
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;! Then, send the closing signal.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;keep_going = .false.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;call MPI_Send(keep_going,1,MPI_LOGICAL,1,1,MPI_COMM_WORLD,ier)
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;! Write summary information.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;write(6,'(&quot;Target duration (seconds):&quot;,f18.6)') duration
<br>
&nbsp;&nbsp;&nbsp;&nbsp;write(6,'(&quot;# of messages sent in that time:&quot;, i12)') nmsgs
<br>
&nbsp;&nbsp;&nbsp;&nbsp;write(6,'(&quot;Microseconds per message:&quot;, f19.3)') 1.d6 * duration / nmsgs
<br>
<p>&nbsp;&nbsp;else
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;! If you're not Process 0, you need to receive messages
<br>
&nbsp;&nbsp;&nbsp;&nbsp;! (and possibly relay them onward).
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;do while ( keep_going )
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;call MPI_Recv(keep_going,1,MPI_LOGICAL,me-1,1,MPI_COMM_WORLD, &amp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_STATUS_IGNORE,ier)
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if ( me == np - 1 ) cycle     ! The last process only receives 
<br>
messages.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;call MPI_Send(keep_going,1,MPI_LOGICAL,me+1,1,MPI_COMM_WORLD,ier)
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;end do
<br>
<p>&nbsp;&nbsp;end if
<br>
<p>&nbsp;&nbsp;! Finalize.
<br>
<p>&nbsp;&nbsp;call MPI_Finalize(ier)
<br>
<p>end
<br>
<p>Sorry it is in Fortran.
<br>
<p>--td
<br>
Gleb Natapov wrote:
<br>
<p><span class="quotelev1">&gt;On Wed, Aug 29, 2007 at 11:01:14AM -0400, Richard Graham wrote:
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;If you are going to look at it, I will not bother with this.
</span><br>
<span class="quotelev2">&gt;&gt;    
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;I need the code to reproduce the problem. Otherwise I have nothing to
</span><br>
<span class="quotelev1">&gt;look at. 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;Rich
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;On 8/29/07 10:47 AM, &quot;Gleb Natapov&quot; &lt;glebn_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;On Wed, Aug 29, 2007 at 10:46:06AM -0400, Richard Graham wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;Gleb,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  Are you looking at this ?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;        
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;Not today. And I need the code to reproduce the bug. Is this possible?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;Rich
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;On 8/29/07 9:56 AM, &quot;Gleb Natapov&quot; &lt;glebn_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;        
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;On Wed, Aug 29, 2007 at 04:48:07PM +0300, Gleb Natapov wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;          
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;Is this trunk or 1.2?
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;            
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;Oops. I should read more carefully :) This is trunk.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;          
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;On Wed, Aug 29, 2007 at 09:40:30AM -0400, Terry D. Dontje wrote:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;            
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;I have a program that does a simple bucket brigade of sends and receives
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;where rank 0 is the start and repeatedly sends to rank 1 until a certain
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;amount of time has passed and then it sends and all done packet.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;Running this under np=2 always works.  However, when I run with greater
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;than 2 using only the SM btl the program usually hangs and one of the
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;processes has a long stack that has a lot of the following 3 calls in it:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; [25] opal_progress(), line 187 in &quot;opal_progress.c&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;  [26] mca_btl_sm_component_progress(), line 397 in &quot;btl_sm_component.c&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;  [27] mca_bml_r2_progress(), line 110 in &quot;bml_r2.c&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;When stepping through the ompi_fifo_write_to_head routine it looks like
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;the fifo has overflowed.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;I am wondering if what is happening is rank 0 has sent a bunch of
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;messages that have exhausted the
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;resources such that one of the middle ranks which is in the process of
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;sending cannot send and therefore
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;never gets to the point of trying to receive the messages from rank 0?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;Is the above a possible scenario or are messages periodically bled off
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;the SM BTL's fifos?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;Note, I have seen np=3 pass sometimes and I can get it to pass reliably
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;if I raise the shared memory space used by the BTL.   This is using the
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;trunk.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;--td
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;              
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;--
</span><br>
<span class="quotelev1">&gt;			Gleb.
</span><br>
<span class="quotelev1">&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt;devel mailing list
</span><br>
<span class="quotelev1">&gt;devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2262.php">Terry D. Dontje: "Re: [OMPI devel] SM BTL hang issue"</a>
<li><strong>Previous message:</strong> <a href="2260.php">Gleb Natapov: "Re: [OMPI devel] SM BTL hang issue"</a>
<li><strong>In reply to:</strong> <a href="2260.php">Gleb Natapov: "Re: [OMPI devel] SM BTL hang issue"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2262.php">Terry D. Dontje: "Re: [OMPI devel] SM BTL hang issue"</a>
<li><strong>Reply:</strong> <a href="2262.php">Terry D. Dontje: "Re: [OMPI devel] SM BTL hang issue"</a>
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

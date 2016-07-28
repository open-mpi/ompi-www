<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Aug 29 11:35:11 2007" -->
<!-- isoreceived="20070829153511" -->
<!-- sent="Wed, 29 Aug 2007 11:36:12 -0400" -->
<!-- isosent="20070829153612" -->
<!-- name="Terry D. Dontje" -->
<!-- email="Terry.Dontje_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] SM BTL hang issue" -->
<!-- id="46D5926C.1060800_at_sun.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="46D591E2.5050606_at_sun.com" -->
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
<strong>Date:</strong> 2007-08-29 11:36:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2263.php">Andrew Friedley: "Re: [OMPI devel] UD BTL alltoall hangs"</a>
<li><strong>Previous message:</strong> <a href="2261.php">Terry D. Dontje: "Re: [OMPI devel] SM BTL hang issue"</a>
<li><strong>In reply to:</strong> <a href="2261.php">Terry D. Dontje: "Re: [OMPI devel] SM BTL hang issue"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2265.php">Li-Ta Lo: "Re: [OMPI devel] SM BTL hang issue"</a>
<li><strong>Reply:</strong> <a href="2265.php">Li-Ta Lo: "Re: [OMPI devel] SM BTL hang issue"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
To run the code I usually do &quot;mpirun -np 6 a.out 10&quot; on a 2 core 
<br>
system.  It'll print out the following and then hang:
<br>
Target duration (seconds):         10.000000
<br>
# of messages sent in that time:      589207
<br>
Microseconds per message:             16.972
<br>
<p>--td
<br>
<p>Terry D. Dontje wrote:
<br>
<p><span class="quotelev1">&gt; Heard you the first time Gleb, just been backed up with other stuff.  
</span><br>
<span class="quotelev1">&gt; Following is the code:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  include &quot;mpif.h&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  character(20) cmd_line_arg     ! We'll use the first command-line 
</span><br>
<span class="quotelev1">&gt; argument
</span><br>
<span class="quotelev1">&gt;                                 ! to set the duration of the test.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  real(8) :: duration = 10       ! The default duration (in seconds) 
</span><br>
<span class="quotelev1">&gt; can be
</span><br>
<span class="quotelev1">&gt;                                 ! set here.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  real(8) :: endtime             ! This is the time at which we'll end the
</span><br>
<span class="quotelev1">&gt;                                 ! test.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  integer(8) :: nmsgs = 1        ! We'll count the number of messages sent
</span><br>
<span class="quotelev1">&gt;                                 ! out from each MPI process.  There 
</span><br>
<span class="quotelev1">&gt; will be
</span><br>
<span class="quotelev1">&gt;                                 ! at least one message (at the very end),
</span><br>
<span class="quotelev1">&gt;                                 ! and we'll count all the others.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  logical :: keep_going = .true. ! This flag says whether to keep going.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  ! Initialize MPI stuff.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  call MPI_Init(ier)
</span><br>
<span class="quotelev1">&gt;  call MPI_Comm_rank(MPI_COMM_WORLD, me, ier)
</span><br>
<span class="quotelev1">&gt;  call MPI_Comm_size(MPI_COMM_WORLD, np, ier)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  if ( np == 1 ) then
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    ! Test to make sure there is at least one other process.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    write(6,*) &quot;Need at least 2 processes.&quot;
</span><br>
<span class="quotelev1">&gt;    write(6,*) &quot;Try resubmitting the job with&quot;
</span><br>
<span class="quotelev1">&gt;    write(6,*) &quot;   'mpirun -np &lt;np&gt;'&quot;
</span><br>
<span class="quotelev1">&gt;    write(6,*) &quot;where &lt;np&gt; is at least 2.&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  else if ( me == 0 ) then
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    ! The first command-line argument is the duration of the test 
</span><br>
<span class="quotelev1">&gt; (seconds).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    call get_command_argument(1,cmd_line_arg,len,istat)
</span><br>
<span class="quotelev1">&gt;    if ( istat == 0 ) read(cmd_line_arg,*) duration
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    ! Loop until test is done.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    endtime = MPI_Wtime() + duration     ! figure out when to end
</span><br>
<span class="quotelev1">&gt;    do while ( MPI_Wtime() &lt; endtime )
</span><br>
<span class="quotelev1">&gt;      call MPI_Send(keep_going,1,MPI_LOGICAL,1,1,MPI_COMM_WORLD,ier)
</span><br>
<span class="quotelev1">&gt;      nmsgs = nmsgs + 1
</span><br>
<span class="quotelev1">&gt;    end do
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    ! Then, send the closing signal.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    keep_going = .false.
</span><br>
<span class="quotelev1">&gt;    call MPI_Send(keep_going,1,MPI_LOGICAL,1,1,MPI_COMM_WORLD,ier)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    ! Write summary information.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    write(6,'(&quot;Target duration (seconds):&quot;,f18.6)') duration
</span><br>
<span class="quotelev1">&gt;    write(6,'(&quot;# of messages sent in that time:&quot;, i12)') nmsgs
</span><br>
<span class="quotelev1">&gt;    write(6,'(&quot;Microseconds per message:&quot;, f19.3)') 1.d6 * duration / 
</span><br>
<span class="quotelev1">&gt; nmsgs
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  else
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    ! If you're not Process 0, you need to receive messages
</span><br>
<span class="quotelev1">&gt;    ! (and possibly relay them onward).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    do while ( keep_going )
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      call MPI_Recv(keep_going,1,MPI_LOGICAL,me-1,1,MPI_COMM_WORLD, &amp;
</span><br>
<span class="quotelev1">&gt;         MPI_STATUS_IGNORE,ier)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      if ( me == np - 1 ) cycle     ! The last process only receives 
</span><br>
<span class="quotelev1">&gt; messages.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      call MPI_Send(keep_going,1,MPI_LOGICAL,me+1,1,MPI_COMM_WORLD,ier)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    end do
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  end if
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  ! Finalize.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  call MPI_Finalize(ier)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; end
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Sorry it is in Fortran.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --td
</span><br>
<span class="quotelev1">&gt; Gleb Natapov wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Wed, Aug 29, 2007 at 11:01:14AM -0400, Richard Graham wrote:
</span><br>
<span class="quotelev2">&gt;&gt;  
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; If you are going to look at it, I will not bother with this.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I need the code to reproduce the problem. Otherwise I have nothing to
</span><br>
<span class="quotelev2">&gt;&gt; look at.
</span><br>
<span class="quotelev2">&gt;&gt;  
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Rich
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On 8/29/07 10:47 AM, &quot;Gleb Natapov&quot; &lt;glebn_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Wed, Aug 29, 2007 at 10:46:06AM -0400, Richard Graham wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Gleb,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;  Are you looking at this ?
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;       
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Not today. And I need the code to reproduce the bug. Is this possible?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Rich
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; On 8/29/07 9:56 AM, &quot;Gleb Natapov&quot; &lt;glebn_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;       
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; On Wed, Aug 29, 2007 at 04:48:07PM +0300, Gleb Natapov wrote:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;         
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Is this trunk or 1.2?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;           
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Oops. I should read more carefully :) This is trunk.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;         
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; On Wed, Aug 29, 2007 at 09:40:30AM -0400, Terry D. Dontje wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;           
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; I have a program that does a simple bucket brigade of sends and 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; receives
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; where rank 0 is the start and repeatedly sends to rank 1 until 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; a certain
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; amount of time has passed and then it sends and all done packet.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Running this under np=2 always works.  However, when I run with 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; greater
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; than 2 using only the SM btl the program usually hangs and one 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; of the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; processes has a long stack that has a lot of the following 3 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; calls in it:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [25] opal_progress(), line 187 in &quot;opal_progress.c&quot;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  [26] mca_btl_sm_component_progress(), line 397 in 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &quot;btl_sm_component.c&quot;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  [27] mca_bml_r2_progress(), line 110 in &quot;bml_r2.c&quot;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; When stepping through the ompi_fifo_write_to_head routine it 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; looks like
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; the fifo has overflowed.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; I am wondering if what is happening is rank 0 has sent a bunch of
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; messages that have exhausted the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; resources such that one of the middle ranks which is in the 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; process of
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; sending cannot send and therefore
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; never gets to the point of trying to receive the messages from 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; rank 0?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Is the above a possible scenario or are messages periodically 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; bled off
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; the SM BTL's fifos?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Note, I have seen np=3 pass sometimes and I can get it to pass 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; reliably
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; if I raise the shared memory space used by the BTL.   This is 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; using the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; trunk.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; --td
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;             
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt;             Gleb.
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt;  
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2263.php">Andrew Friedley: "Re: [OMPI devel] UD BTL alltoall hangs"</a>
<li><strong>Previous message:</strong> <a href="2261.php">Terry D. Dontje: "Re: [OMPI devel] SM BTL hang issue"</a>
<li><strong>In reply to:</strong> <a href="2261.php">Terry D. Dontje: "Re: [OMPI devel] SM BTL hang issue"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2265.php">Li-Ta Lo: "Re: [OMPI devel] SM BTL hang issue"</a>
<li><strong>Reply:</strong> <a href="2265.php">Li-Ta Lo: "Re: [OMPI devel] SM BTL hang issue"</a>
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

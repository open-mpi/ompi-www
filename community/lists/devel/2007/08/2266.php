<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Aug 29 14:05:39 2007" -->
<!-- isoreceived="20070829180539" -->
<!-- sent="Wed, 29 Aug 2007 14:06:40 -0400" -->
<!-- isosent="20070829180640" -->
<!-- name="Terry D. Dontje" -->
<!-- email="Terry.Dontje_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] SM BTL hang issue" -->
<!-- id="46D5B5B0.20408_at_sun.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="1188410067.7923.70.camel_at_exponential.lanl.gov" -->
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
<strong>Date:</strong> 2007-08-29 14:06:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2267.php">Andrew Friedley: "Re: [OMPI devel] UD BTL alltoall hangs"</a>
<li><strong>Previous message:</strong> <a href="2265.php">Li-Ta Lo: "Re: [OMPI devel] SM BTL hang issue"</a>
<li><strong>In reply to:</strong> <a href="2265.php">Li-Ta Lo: "Re: [OMPI devel] SM BTL hang issue"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2271.php">Li-Ta Lo: "Re: [OMPI devel] SM BTL hang issue"</a>
<li><strong>Reply:</strong> <a href="2271.php">Li-Ta Lo: "Re: [OMPI devel] SM BTL hang issue"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
hmmm, interesting since my version doesn't abort at all.
<br>
<p>--td
<br>
<p>Li-Ta Lo wrote:
<br>
<p><span class="quotelev1">&gt;On Wed, 2007-08-29 at 11:36 -0400, Terry D. Dontje wrote:
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;To run the code I usually do &quot;mpirun -np 6 a.out 10&quot; on a 2 core 
</span><br>
<span class="quotelev2">&gt;&gt;system.  It'll print out the following and then hang:
</span><br>
<span class="quotelev2">&gt;&gt;Target duration (seconds):         10.000000
</span><br>
<span class="quotelev2">&gt;&gt;# of messages sent in that time:      589207
</span><br>
<span class="quotelev2">&gt;&gt;Microseconds per message:             16.972
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;I know almost nothing about FORTRAN but the stack dump told me
</span><br>
<span class="quotelev1">&gt;it got NULL pointer reference when accessing the &quot;me&quot; variable
</span><br>
<span class="quotelev1">&gt;in the do .. while loop. How can this happen?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;[ollie_at_exponential ~]$ mpirun -np 2 a.out 100
</span><br>
<span class="quotelev1">&gt;[exponential:22145] *** Process received signal ***
</span><br>
<span class="quotelev1">&gt;[exponential:22145] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev1">&gt;[exponential:22145] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev1">&gt;[exponential:22145] Failing at address: (nil)
</span><br>
<span class="quotelev1">&gt;[exponential:22145] [ 0] [0xb7f2a440]
</span><br>
<span class="quotelev1">&gt;[exponential:22145] [ 1] a.out(MAIN__+0x54a) [0x804909e]
</span><br>
<span class="quotelev1">&gt;[exponential:22145] [ 2] a.out(main+0x27) [0x8049127]
</span><br>
<span class="quotelev1">&gt;[exponential:22145] [ 3] /lib/libc.so.6(__libc_start_main+0xe0)
</span><br>
<span class="quotelev1">&gt;[0x4e75ef70]
</span><br>
<span class="quotelev1">&gt;[exponential:22145] [ 4] a.out [0x8048aa1]
</span><br>
<span class="quotelev1">&gt;[exponential:22145] *** End of error message ***
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;            call MPI_Send(keep_going,1,MPI_LOGICAL,me+1,1,
</span><br>
<span class="quotelev1">&gt;     $           MPI_COMM_WORLD,ier)
</span><br>
<span class="quotelev1">&gt; 804909e:       8b 45 d4                mov    0xffffffd4(%ebp),%eax
</span><br>
<span class="quotelev1">&gt; 80490a1:       83 c0 01                add    $0x1,%eax
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;It is compiled with g77/g90.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Ollie
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
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
<li><strong>Next message:</strong> <a href="2267.php">Andrew Friedley: "Re: [OMPI devel] UD BTL alltoall hangs"</a>
<li><strong>Previous message:</strong> <a href="2265.php">Li-Ta Lo: "Re: [OMPI devel] SM BTL hang issue"</a>
<li><strong>In reply to:</strong> <a href="2265.php">Li-Ta Lo: "Re: [OMPI devel] SM BTL hang issue"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2271.php">Li-Ta Lo: "Re: [OMPI devel] SM BTL hang issue"</a>
<li><strong>Reply:</strong> <a href="2271.php">Li-Ta Lo: "Re: [OMPI devel] SM BTL hang issue"</a>
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

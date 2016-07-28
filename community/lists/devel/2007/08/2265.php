<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Aug 29 13:54:35 2007" -->
<!-- isoreceived="20070829175435" -->
<!-- sent="Wed, 29 Aug 2007 11:54:27 -0600" -->
<!-- isosent="20070829175427" -->
<!-- name="Li-Ta Lo" -->
<!-- email="ollie_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] SM BTL hang issue" -->
<!-- id="1188410067.7923.70.camel_at_exponential.lanl.gov" -->
<!-- inreplyto="46D5926C.1060800_at_sun.com" -->
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
<strong>From:</strong> Li-Ta Lo (<em>ollie_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-08-29 13:54:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2266.php">Terry D. Dontje: "Re: [OMPI devel] SM BTL hang issue"</a>
<li><strong>Previous message:</strong> <a href="2264.php">Aurelien Bouteiller: "Re: [OMPI devel] UD BTL alltoall hangs"</a>
<li><strong>In reply to:</strong> <a href="2262.php">Terry D. Dontje: "Re: [OMPI devel] SM BTL hang issue"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2266.php">Terry D. Dontje: "Re: [OMPI devel] SM BTL hang issue"</a>
<li><strong>Reply:</strong> <a href="2266.php">Terry D. Dontje: "Re: [OMPI devel] SM BTL hang issue"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Wed, 2007-08-29 at 11:36 -0400, Terry D. Dontje wrote:
<br>
<span class="quotelev1">&gt; To run the code I usually do &quot;mpirun -np 6 a.out 10&quot; on a 2 core 
</span><br>
<span class="quotelev1">&gt; system.  It'll print out the following and then hang:
</span><br>
<span class="quotelev1">&gt; Target duration (seconds):         10.000000
</span><br>
<span class="quotelev1">&gt; # of messages sent in that time:      589207
</span><br>
<span class="quotelev1">&gt; Microseconds per message:             16.972
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p><p>I know almost nothing about FORTRAN but the stack dump told me
<br>
it got NULL pointer reference when accessing the &quot;me&quot; variable
<br>
in the do .. while loop. How can this happen?
<br>
<p>[ollie_at_exponential ~]$ mpirun -np 2 a.out 100
<br>
[exponential:22145] *** Process received signal ***
<br>
[exponential:22145] Signal: Segmentation fault (11)
<br>
[exponential:22145] Signal code: Address not mapped (1)
<br>
[exponential:22145] Failing at address: (nil)
<br>
[exponential:22145] [ 0] [0xb7f2a440]
<br>
[exponential:22145] [ 1] a.out(MAIN__+0x54a) [0x804909e]
<br>
[exponential:22145] [ 2] a.out(main+0x27) [0x8049127]
<br>
[exponential:22145] [ 3] /lib/libc.so.6(__libc_start_main+0xe0)
<br>
[0x4e75ef70]
<br>
[exponential:22145] [ 4] a.out [0x8048aa1]
<br>
[exponential:22145] *** End of error message ***
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;call MPI_Send(keep_going,1,MPI_LOGICAL,me+1,1,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$           MPI_COMM_WORLD,ier)
<br>
&nbsp;804909e:       8b 45 d4                mov    0xffffffd4(%ebp),%eax
<br>
&nbsp;80490a1:       83 c0 01                add    $0x1,%eax
<br>
<p>It is compiled with g77/g90.
<br>
<p>Ollie
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2266.php">Terry D. Dontje: "Re: [OMPI devel] SM BTL hang issue"</a>
<li><strong>Previous message:</strong> <a href="2264.php">Aurelien Bouteiller: "Re: [OMPI devel] UD BTL alltoall hangs"</a>
<li><strong>In reply to:</strong> <a href="2262.php">Terry D. Dontje: "Re: [OMPI devel] SM BTL hang issue"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2266.php">Terry D. Dontje: "Re: [OMPI devel] SM BTL hang issue"</a>
<li><strong>Reply:</strong> <a href="2266.php">Terry D. Dontje: "Re: [OMPI devel] SM BTL hang issue"</a>
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

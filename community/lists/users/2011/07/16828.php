<?
$subject_val = "Re: [OMPI users] File seeking with shared filepointer issues";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jul  6 04:34:59 2011" -->
<!-- isoreceived="20110706083459" -->
<!-- sent="Wed, 6 Jul 2011 10:34:53 +0200" -->
<!-- isosent="20110706083453" -->
<!-- name="pascal.deveze_at_[hidden]" -->
<!-- email="pascal.deveze_at_[hidden]" -->
<!-- subject="Re: [OMPI users] File seeking with shared filepointer issues" -->
<!-- id="OF0A2AE135.4328648F-ONC12578C5.002E72AD-C12578C5.002F251D_at_fraz.bull.fr" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="20110705150730.GC25388_at_mcs.anl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI users] File seeking with shared filepointer issues<br>
<strong>From:</strong> <a href="mailto:pascal.deveze_at_[hidden]?Subject=Re:%20[OMPI%20users]%20File%20seeking%20with%20shared%20filepointer%20issues"><em>pascal.deveze_at_[hidden]</em></a><br>
<strong>Date:</strong> 2011-07-06 04:34:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16829.php">Sushil Mishra: "[OMPI users] openmpi-1.5.2 installation problem"</a>
<li><strong>Previous message:</strong> <a href="16827.php">Steve Kargl: "Re: [OMPI users] tcp communication problems with 1.4.3 and 1.4.4 rc2 on FreeBSD"</a>
<li><strong>In reply to:</strong> <a href="16817.php">Rob Latham: "Re: [OMPI users] File seeking with shared filepointer issues"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16801.php">Rob Latham: "Re: [OMPI users] File seeking with shared filepointer issues"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Rob,
<br>
<p>Thanks for sharing your &quot;jumpshot&quot; experiment for demonstrating my point of
<br>
view
<br>
I really appreciate the result !
<br>
<p>Pascal
<br>
<p><p><p>De :        Rob Latham &lt;robl_at_[hidden]&gt;
<br>
A :         Open MPI Users &lt;users_at_[hidden]&gt;
<br>
Date :      05/07/2011 17:34
<br>
Objet :     Re: [OMPI users] File seeking with shared filepointer issues
<br>
Envoy&#233; par :      users-bounces_at_[hidden]
<br>
<p><p><p>On Mon, Jun 27, 2011 at 03:20:36PM +0200, pascal.deveze_at_[hidden] wrote:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Christian,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Suppose you have N processes calling the first
</span><br>
MPI_File_get_position_shared
<br>
<span class="quotelev1">&gt; ().
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Some of them are running faster and could execute the call to
</span><br>
<span class="quotelev1">&gt; MPI_File_seek_shared() before all the other have got their file position.
</span><br>
<span class="quotelev1">&gt; (Note that the &quot;collective&quot; primitive is not a synchronization. In that
</span><br>
<span class="quotelev1">&gt; case, all parameters are broadcast to the process 0 and checked by
</span><br>
process
<br>
<span class="quotelev1">&gt; 0. All
</span><br>
<span class="quotelev1">&gt; the other processes are not blocked).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So the slow processes can get the file position  that has just been
</span><br>
<span class="quotelev1">&gt; modified by the faster.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; That is the reason why, in your program, It is necessary to synchronize
</span><br>
all
<br>
<span class="quotelev1">&gt; processes just before the call to MPI_File_seek_shared().
</span><br>
<p>There's this tool &quot;Jumpshot&quot; that's fun to use but does have a bit of
<br>
a learning curve: it just presents so much data it can be hard to make
<br>
sense of it.
<br>
<p>Still, I like use jumpshot and this seemed like a good chance to
<br>
demonstrate Pascal's point about timings:
<br>
<p>I've attached a jumpshot trace of an 8 processor run of  Christian's
<br>
test case.
<br>
- I've built ROMIO to record not only the MPI-IO calls but the underlying
<br>
posix i/o calls as well.
<br>
- Then, I enabled display of just the shared file pointer operations
<br>
&nbsp;&nbsp;and the posix calls.    Sorry if anyone is color blind.
<br>
<p>&nbsp;&nbsp;color  / call
<br>
<p>&nbsp;&nbsp;purple / MPI_File_get_position_shared
<br>
&nbsp;&nbsp;pink  / MPI_File_seek_shared
<br>
&nbsp;&nbsp;orange / posix open
<br>
&nbsp;&nbsp;green / posix close
<br>
&nbsp;&nbsp;blue / posix write
<br>
<p>The attached trace shows
<br>
- rank 0 exiting MPI_File_get_position_shared relatively quickly,
<br>
- rank 0 enters MPI_File_seek_shared before anyone else.
<br>
- The blue bar is where rank 0 writes the new value of the shared
<br>
file pointer,
<br>
- Rank 0 did so before any other process read the value of the shared
<br>
&nbsp;&nbsp;file pointer (the green bar)
<br>
<p>Anyway, this is all known behavior.  collecting the traces seemed like
<br>
a fun way to spend the last hour on friday before the long (USA)
<br>
weekend :&gt;
<br>
<p>==rob
<br>
<p><pre>
--
Rob Latham
Mathematics and Computer Science Division
Argonne National Lab, IL USA
[pi&#232;ce jointe &quot;shared_file_ptr_jumpshot.png&quot; supprim&#233;e par Pascal
Deveze/FR/BULL] _______________________________________________
users mailing list
users_at_[hidden]
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16829.php">Sushil Mishra: "[OMPI users] openmpi-1.5.2 installation problem"</a>
<li><strong>Previous message:</strong> <a href="16827.php">Steve Kargl: "Re: [OMPI users] tcp communication problems with 1.4.3 and 1.4.4 rc2 on FreeBSD"</a>
<li><strong>In reply to:</strong> <a href="16817.php">Rob Latham: "Re: [OMPI users] File seeking with shared filepointer issues"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16801.php">Rob Latham: "Re: [OMPI users] File seeking with shared filepointer issues"</a>
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

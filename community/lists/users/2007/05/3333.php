<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon May 28 17:11:44 2007" -->
<!-- isoreceived="20070528211144" -->
<!-- sent="Mon, 28 May 2007 15:11:20 -0600" -->
<!-- isosent="20070528211120" -->
<!-- name="Brian Barrett" -->
<!-- email="bbarrett_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Weird interaction with modem under OS X" -->
<!-- id="C5E664CE-9412-4FE8-B13B-C12F7C96ACA9_at_lanl.gov" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="043B32E1-F342-4105-906A-8FF9AC84FC24_at_nasa.gov" -->
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
<strong>Date:</strong> 2007-05-28 17:11:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3334.php">Richard Graham: "Re: [OMPI users] Sharing an array in an MPI program?"</a>
<li><strong>Previous message:</strong> <a href="3332.php">Tahir Malas: "[OMPI users] Sharing an array in an MPI program?"</a>
<li><strong>In reply to:</strong> <a href="3309.php">Tom Clune: "Re: [OMPI users] Weird interaction with modem under OS X"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On May 22, 2007, at 7:52 PM, Tom Clune wrote:
<br>
<p><span class="quotelev2">&gt;&gt; For example, if it is ppp0, try:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    mpirun -np 1 -mca oob_tcp_exclude ppp0 uptime
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This seems to at least produce a bit of output before hanging:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; LM000953070:~ tlclune$ mpirun -np 1 -mca oob_tcp_exclude ppp0 uptime
</span><br>
<span class="quotelev1">&gt; [153.sub-70-211-6.myvzw.com:07562] [0,0,0] mca_oob_tcp_init:  
</span><br>
<span class="quotelev1">&gt; invalid address '' returned for selected oob interfaces.
</span><br>
<span class="quotelev1">&gt; [153.sub-70-211-6.myvzw.com:07562] [0,0,0] ORTE_ERROR_LOG: Error in  
</span><br>
<span class="quotelev1">&gt; file oob_tcp.c at line 1216
</span><br>
<p>Tom -
<br>
<p>I managed to track this down a bit.  We try to use the ppp0 interface  
<br>
(the cell phone device) for network connectivity, as it's the only  
<br>
non-localhost address up at the time.  Unfortunately, we can't use  
<br>
the address to route messages that way and Open MPI hangs.  The  
<br>
problem is made worse due to a bug that I'm still trying to track  
<br>
down in Open MPI.  When you tell Open MPI to not use a device (like  
<br>
ppp0), it should just use whatever other devices are available.  In  
<br>
your case, that would be localhost, which is what you're using when  
<br>
you don't have any network connectivity at all.  But it appears that  
<br>
this instead causes Open MPI to segfault / hang.  I'm looking into  
<br>
exactly why this is happening and should have a fix in the next day  
<br>
or so.
<br>
<p>Brian
<br>
<p><pre>
-- 
   Brian W. Barrett
   Open MPI Team, CCS-1
   Los Alamos National Laboratory
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-3333/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3334.php">Richard Graham: "Re: [OMPI users] Sharing an array in an MPI program?"</a>
<li><strong>Previous message:</strong> <a href="3332.php">Tahir Malas: "[OMPI users] Sharing an array in an MPI program?"</a>
<li><strong>In reply to:</strong> <a href="3309.php">Tom Clune: "Re: [OMPI users] Weird interaction with modem under OS X"</a>
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

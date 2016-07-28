<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Apr 20 23:53:56 2006" -->
<!-- isoreceived="20060421035356" -->
<!-- sent="Thu, 20 Apr 2006 21:53:41 -0600" -->
<!-- isosent="20060421035341" -->
<!-- name="Galen M. Shipman" -->
<!-- email="gshipman_at_[hidden]" -->
<!-- subject="[OMPI devel] Pack data mismatch in file dps_unpack.c 95/121" -->
<!-- id="5A8A9507-984E-497F-8DE0-7F14E2B42AFE_at_cs.unm.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="1145567422.4629.11.camel_at_localhost.localdomain" -->
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
<strong>From:</strong> Galen M. Shipman (<em>gshipman_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-04-20 23:53:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0837.php">Brian Barrett: "Re: [OMPI devel] Pack data mismatch in file dps_unpack.c 95/121"</a>
<li><strong>Previous message:</strong> <a href="0835.php">Ralph Castain: "Re: [OMPI devel] opal_event_loop exiting"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0837.php">Brian Barrett: "Re: [OMPI devel] Pack data mismatch in file dps_unpack.c 95/121"</a>
<li><strong>Reply:</strong> <a href="0837.php">Brian Barrett: "Re: [OMPI devel] Pack data mismatch in file dps_unpack.c 95/121"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hey Guys,
<br>
<p>Not sure what is going on here, has anyone seen this before?
<br>
<p>- Galen
<br>
<p><p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi Galen,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Sorry to bother you.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have installed latest stable version of Open MPI(1.0) on two of  
</span><br>
<span class="quotelev1">&gt; spider
</span><br>
<span class="quotelev1">&gt; nodes(s7,s4) for some experiments, but there seems to be configuration
</span><br>
<span class="quotelev1">&gt; error  or something else which I don't understand. After  
</span><br>
<span class="quotelev1">&gt; installing, as
</span><br>
<span class="quotelev1">&gt; a test I ran an simple MPI program but it complains with following
</span><br>
<span class="quotelev1">&gt; errors.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [s4:10685] [0,0,0] ORTE_ERROR_LOG: Pack data mismatch in file
</span><br>
<span class="quotelev1">&gt; dps_unpack.c at line 121
</span><br>
<span class="quotelev1">&gt; [s4:10685] [0,0,0] ORTE_ERROR_LOG: Pack data mismatch in file
</span><br>
<span class="quotelev1">&gt; dps_unpack.c at line 95
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Further digging with gdb prints following errors
</span><br>
<span class="quotelev1">&gt; [s7:07005] ERROR: A daemon on node s4 failed to start as expected.
</span><br>
<span class="quotelev1">&gt; [s7:07005] ERROR: There may be more information available from
</span><br>
<span class="quotelev1">&gt; [s7:07005] ERROR: the remote shell (see above).
</span><br>
<span class="quotelev1">&gt; [s7:07005] The daemon received a signal 5.
</span><br>
<span class="quotelev1">&gt; [s7:07005] [0,0,0] ORTE_ERROR_LOG: Pack data mismatch in file
</span><br>
<span class="quotelev1">&gt; dps_unpack.c at line 121
</span><br>
<span class="quotelev1">&gt; [s7:07005] [0,0,0] ORTE_ERROR_LOG: Pack data mismatch in file
</span><br>
<span class="quotelev1">&gt; dps_unpack.c at line 95
</span><br>
<span class="quotelev1">&gt; [s7:07005] [0,0,0] ORTE_ERROR_LOG: Pack data mismatch in file
</span><br>
<span class="quotelev1">&gt; dps_unpack.c at line 121
</span><br>
<span class="quotelev1">&gt; [s7:07005] [0,0,0] ORTE_ERROR_LOG: Pack data mismatch in file
</span><br>
<span class="quotelev1">&gt; dps_unpack.c at line 95
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; any clue on what I am doing wrong ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; thanks,
</span><br>
<span class="quotelev1">&gt; -Manjunath
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-0836/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0837.php">Brian Barrett: "Re: [OMPI devel] Pack data mismatch in file dps_unpack.c 95/121"</a>
<li><strong>Previous message:</strong> <a href="0835.php">Ralph Castain: "Re: [OMPI devel] opal_event_loop exiting"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0837.php">Brian Barrett: "Re: [OMPI devel] Pack data mismatch in file dps_unpack.c 95/121"</a>
<li><strong>Reply:</strong> <a href="0837.php">Brian Barrett: "Re: [OMPI devel] Pack data mismatch in file dps_unpack.c 95/121"</a>
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

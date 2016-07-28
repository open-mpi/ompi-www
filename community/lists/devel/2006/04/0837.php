<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Apr 21 01:42:56 2006" -->
<!-- isoreceived="20060421054256" -->
<!-- sent="Thu, 20 Apr 2006 22:42:48 -0700" -->
<!-- isosent="20060421054248" -->
<!-- name="Brian Barrett" -->
<!-- email="brbarret_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Pack data mismatch in file dps_unpack.c 95/121" -->
<!-- id="8EC3C668-DEF4-4B91-AC3A-D6A645E95DB6_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="5A8A9507-984E-497F-8DE0-7F14E2B42AFE_at_cs.unm.edu" -->
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
<strong>From:</strong> Brian Barrett (<em>brbarret_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-04-21 01:42:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0838.php">Joachim Worringen: "[OMPI devel] Final Call for Papers EuroPVM/MPI 2006 (Deadline Extended May 8th)"</a>
<li><strong>Previous message:</strong> <a href="0836.php">Galen M. Shipman: "[OMPI devel] Pack data mismatch in file dps_unpack.c 95/121"</a>
<li><strong>In reply to:</strong> <a href="0836.php">Galen M. Shipman: "[OMPI devel] Pack data mismatch in file dps_unpack.c 95/121"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0839.php">Manjunath G Venkata: "Re: [OMPI devel] Pack data mismatch in file dps_unpack.c 95/121"</a>
<li><strong>Reply:</strong> <a href="0839.php">Manjunath G Venkata: "Re: [OMPI devel] Pack data mismatch in file dps_unpack.c 95/121"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Are these both identical architecture?  Those look suspiciously like  
<br>
what happens when you're trying to mix 32/64 bit or little endian /  
<br>
big endian.
<br>
<p>Brian
<br>
<p>On Apr 20, 2006, at 8:53 PM, Galen M. Shipman wrote:
<br>
<p><span class="quotelev1">&gt; Hey Guys,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Not sure what is going on here, has anyone seen this before?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; - Galen
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi Galen,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Sorry to bother you.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I have installed latest stable version of Open MPI(1.0) on two of  
</span><br>
<span class="quotelev2">&gt;&gt; spider
</span><br>
<span class="quotelev2">&gt;&gt; nodes(s7,s4) for some experiments, but there seems to be  
</span><br>
<span class="quotelev2">&gt;&gt; configuration
</span><br>
<span class="quotelev2">&gt;&gt; error  or something else which I don't understand. After  
</span><br>
<span class="quotelev2">&gt;&gt; installing, as
</span><br>
<span class="quotelev2">&gt;&gt; a test I ran an simple MPI program but it complains with following
</span><br>
<span class="quotelev2">&gt;&gt; errors.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [s4:10685] [0,0,0] ORTE_ERROR_LOG: Pack data mismatch in file
</span><br>
<span class="quotelev2">&gt;&gt; dps_unpack.c at line 121
</span><br>
<span class="quotelev2">&gt;&gt; [s4:10685] [0,0,0] ORTE_ERROR_LOG: Pack data mismatch in file
</span><br>
<span class="quotelev2">&gt;&gt; dps_unpack.c at line 95
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Further digging with gdb prints following errors
</span><br>
<span class="quotelev2">&gt;&gt; [s7:07005] ERROR: A daemon on node s4 failed to start as expected.
</span><br>
<span class="quotelev2">&gt;&gt; [s7:07005] ERROR: There may be more information available from
</span><br>
<span class="quotelev2">&gt;&gt; [s7:07005] ERROR: the remote shell (see above).
</span><br>
<span class="quotelev2">&gt;&gt; [s7:07005] The daemon received a signal 5.
</span><br>
<span class="quotelev2">&gt;&gt; [s7:07005] [0,0,0] ORTE_ERROR_LOG: Pack data mismatch in file
</span><br>
<span class="quotelev2">&gt;&gt; dps_unpack.c at line 121
</span><br>
<span class="quotelev2">&gt;&gt; [s7:07005] [0,0,0] ORTE_ERROR_LOG: Pack data mismatch in file
</span><br>
<span class="quotelev2">&gt;&gt; dps_unpack.c at line 95
</span><br>
<span class="quotelev2">&gt;&gt; [s7:07005] [0,0,0] ORTE_ERROR_LOG: Pack data mismatch in file
</span><br>
<span class="quotelev2">&gt;&gt; dps_unpack.c at line 121
</span><br>
<span class="quotelev2">&gt;&gt; [s7:07005] [0,0,0] ORTE_ERROR_LOG: Pack data mismatch in file
</span><br>
<span class="quotelev2">&gt;&gt; dps_unpack.c at line 95
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; any clue on what I am doing wrong ?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; thanks,
</span><br>
<span class="quotelev2">&gt;&gt; -Manjunath
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0838.php">Joachim Worringen: "[OMPI devel] Final Call for Papers EuroPVM/MPI 2006 (Deadline Extended May 8th)"</a>
<li><strong>Previous message:</strong> <a href="0836.php">Galen M. Shipman: "[OMPI devel] Pack data mismatch in file dps_unpack.c 95/121"</a>
<li><strong>In reply to:</strong> <a href="0836.php">Galen M. Shipman: "[OMPI devel] Pack data mismatch in file dps_unpack.c 95/121"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0839.php">Manjunath G Venkata: "Re: [OMPI devel] Pack data mismatch in file dps_unpack.c 95/121"</a>
<li><strong>Reply:</strong> <a href="0839.php">Manjunath G Venkata: "Re: [OMPI devel] Pack data mismatch in file dps_unpack.c 95/121"</a>
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

<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Apr 21 17:01:31 2006" -->
<!-- isoreceived="20060421210131" -->
<!-- sent="Fri, 21 Apr 2006 15:01:22 -0600 (MDT)" -->
<!-- isosent="20060421210122" -->
<!-- name="Manjunath G Venkata" -->
<!-- email="manjugv_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Pack data mismatch in file dps_unpack.c 95/121" -->
<!-- id="Pine.LNX.4.62.0604211456430.30698_at_husband.cs.unm.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="8EC3C668-DEF4-4B91-AC3A-D6A645E95DB6_at_open-mpi.org" -->
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
<strong>From:</strong> Manjunath G Venkata (<em>manjugv_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-04-21 17:01:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0840.php">Brian Barrett: "Re: [OMPI devel] Pack data mismatch in file dps_unpack.c 95/121"</a>
<li><strong>Previous message:</strong> <a href="0838.php">Joachim Worringen: "[OMPI devel] Final Call for Papers EuroPVM/MPI 2006 (Deadline Extended May 8th)"</a>
<li><strong>In reply to:</strong> <a href="0837.php">Brian Barrett: "Re: [OMPI devel] Pack data mismatch in file dps_unpack.c 95/121"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0840.php">Brian Barrett: "Re: [OMPI devel] Pack data mismatch in file dps_unpack.c 95/121"</a>
<li><strong>Reply:</strong> <a href="0840.php">Brian Barrett: "Re: [OMPI devel] Pack data mismatch in file dps_unpack.c 95/121"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Thu, 20 Apr 2006, Brian Barrett wrote:
<br>
<p><span class="quotelev1">&gt; Are these both identical architecture?  Those look suspiciously like what 
</span><br>
<span class="quotelev1">&gt; happens when you're trying to mix 32/64 bit or little endian / big endian.
</span><br>
<span class="quotelev1">&gt;
</span><br>
- Both my nodes are Intel Xeons and run linux 2.4.26.
<br>
<p>-Manjunath
<br>
<p><span class="quotelev1">&gt; Brian
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Apr 20, 2006, at 8:53 PM, Galen M. Shipman wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hey Guys,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Not sure what is going on here, has anyone seen this before?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; - Galen
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi Galen,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Sorry to bother you.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I have installed latest stable version of Open MPI(1.0) on two of spider
</span><br>
<span class="quotelev3">&gt;&gt;&gt; nodes(s7,s4) for some experiments, but there seems to be configuration
</span><br>
<span class="quotelev3">&gt;&gt;&gt; error  or something else which I don't understand. After installing, as
</span><br>
<span class="quotelev3">&gt;&gt;&gt; a test I ran an simple MPI program but it complains with following
</span><br>
<span class="quotelev3">&gt;&gt;&gt; errors.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [s4:10685] [0,0,0] ORTE_ERROR_LOG: Pack data mismatch in file
</span><br>
<span class="quotelev3">&gt;&gt;&gt; dps_unpack.c at line 121
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [s4:10685] [0,0,0] ORTE_ERROR_LOG: Pack data mismatch in file
</span><br>
<span class="quotelev3">&gt;&gt;&gt; dps_unpack.c at line 95
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Further digging with gdb prints following errors
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [s7:07005] ERROR: A daemon on node s4 failed to start as expected.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [s7:07005] ERROR: There may be more information available from
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [s7:07005] ERROR: the remote shell (see above).
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [s7:07005] The daemon received a signal 5.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [s7:07005] [0,0,0] ORTE_ERROR_LOG: Pack data mismatch in file
</span><br>
<span class="quotelev3">&gt;&gt;&gt; dps_unpack.c at line 121
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [s7:07005] [0,0,0] ORTE_ERROR_LOG: Pack data mismatch in file
</span><br>
<span class="quotelev3">&gt;&gt;&gt; dps_unpack.c at line 95
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [s7:07005] [0,0,0] ORTE_ERROR_LOG: Pack data mismatch in file
</span><br>
<span class="quotelev3">&gt;&gt;&gt; dps_unpack.c at line 121
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [s7:07005] [0,0,0] ORTE_ERROR_LOG: Pack data mismatch in file
</span><br>
<span class="quotelev3">&gt;&gt;&gt; dps_unpack.c at line 95
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; any clue on what I am doing wrong ?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; thanks,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -Manjunath
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0840.php">Brian Barrett: "Re: [OMPI devel] Pack data mismatch in file dps_unpack.c 95/121"</a>
<li><strong>Previous message:</strong> <a href="0838.php">Joachim Worringen: "[OMPI devel] Final Call for Papers EuroPVM/MPI 2006 (Deadline Extended May 8th)"</a>
<li><strong>In reply to:</strong> <a href="0837.php">Brian Barrett: "Re: [OMPI devel] Pack data mismatch in file dps_unpack.c 95/121"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0840.php">Brian Barrett: "Re: [OMPI devel] Pack data mismatch in file dps_unpack.c 95/121"</a>
<li><strong>Reply:</strong> <a href="0840.php">Brian Barrett: "Re: [OMPI devel] Pack data mismatch in file dps_unpack.c 95/121"</a>
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

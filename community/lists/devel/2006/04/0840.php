<? include("../../include/msg-header.inc"); ?>
<!-- received="Sat Apr 22 12:56:09 2006" -->
<!-- isoreceived="20060422165609" -->
<!-- sent="Sat, 22 Apr 2006 12:56:07 -0400" -->
<!-- isosent="20060422165607" -->
<!-- name="Brian Barrett" -->
<!-- email="brbarret_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Pack data mismatch in file dps_unpack.c 95/121" -->
<!-- id="10526EF1-2C7A-4BBE-96B2-33489F40A31D_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="Pine.LNX.4.62.0604211456430.30698_at_husband.cs.unm.edu" -->
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
<strong>Date:</strong> 2006-04-22 12:56:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0841.php">Ralph Castain: "Re: [OMPI devel] Pack data mismatch in file dps_unpack.c 95/121"</a>
<li><strong>Previous message:</strong> <a href="0839.php">Manjunath G Venkata: "Re: [OMPI devel] Pack data mismatch in file dps_unpack.c 95/121"</a>
<li><strong>In reply to:</strong> <a href="0839.php">Manjunath G Venkata: "Re: [OMPI devel] Pack data mismatch in file dps_unpack.c 95/121"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0841.php">Ralph Castain: "Re: [OMPI devel] Pack data mismatch in file dps_unpack.c 95/121"</a>
<li><strong>Reply:</strong> <a href="0841.php">Ralph Castain: "Re: [OMPI devel] Pack data mismatch in file dps_unpack.c 95/121"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Well, so much for the easy one :(.
<br>
<p>Is it possible that you have two versions of Open MPI in your path  
<br>
somewhere and that you might be getting different versions on  
<br>
different nodes?  The errors below generally indicate that data was  
<br>
received in a totally different format than expected, so I'm just  
<br>
kind of guessing as to how one could get to that situation...
<br>
<p>Brian
<br>
<p>On Apr 21, 2006, at 5:01 PM, Manjunath G Venkata wrote:
<br>
<p><span class="quotelev1">&gt; On Thu, 20 Apr 2006, Brian Barrett wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Are these both identical architecture?  Those look suspiciously  
</span><br>
<span class="quotelev2">&gt;&gt; like what happens when you're trying to mix 32/64 bit or little  
</span><br>
<span class="quotelev2">&gt;&gt; endian / big endian.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; - Both my nodes are Intel Xeons and run linux 2.4.26.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Manjunath
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Brian
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Apr 20, 2006, at 8:53 PM, Galen M. Shipman wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hey Guys,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Not sure what is going on here, has anyone seen this before?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; - Galen
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Hi Galen,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Sorry to bother you.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I have installed latest stable version of Open MPI(1.0) on two  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; of spider
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; nodes(s7,s4) for some experiments, but there seems to be  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; configuration
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; error  or something else which I don't understand. After  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; installing, as
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; a test I ran an simple MPI program but it complains with following
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; errors.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [s4:10685] [0,0,0] ORTE_ERROR_LOG: Pack data mismatch in file
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; dps_unpack.c at line 121
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [s4:10685] [0,0,0] ORTE_ERROR_LOG: Pack data mismatch in file
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; dps_unpack.c at line 95
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Further digging with gdb prints following errors
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [s7:07005] ERROR: A daemon on node s4 failed to start as expected.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [s7:07005] ERROR: There may be more information available from
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [s7:07005] ERROR: the remote shell (see above).
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [s7:07005] The daemon received a signal 5.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [s7:07005] [0,0,0] ORTE_ERROR_LOG: Pack data mismatch in file
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; dps_unpack.c at line 121
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [s7:07005] [0,0,0] ORTE_ERROR_LOG: Pack data mismatch in file
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; dps_unpack.c at line 95
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [s7:07005] [0,0,0] ORTE_ERROR_LOG: Pack data mismatch in file
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; dps_unpack.c at line 121
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [s7:07005] [0,0,0] ORTE_ERROR_LOG: Pack data mismatch in file
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; dps_unpack.c at line 95
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; any clue on what I am doing wrong ?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; thanks,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -Manjunath
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0841.php">Ralph Castain: "Re: [OMPI devel] Pack data mismatch in file dps_unpack.c 95/121"</a>
<li><strong>Previous message:</strong> <a href="0839.php">Manjunath G Venkata: "Re: [OMPI devel] Pack data mismatch in file dps_unpack.c 95/121"</a>
<li><strong>In reply to:</strong> <a href="0839.php">Manjunath G Venkata: "Re: [OMPI devel] Pack data mismatch in file dps_unpack.c 95/121"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0841.php">Ralph Castain: "Re: [OMPI devel] Pack data mismatch in file dps_unpack.c 95/121"</a>
<li><strong>Reply:</strong> <a href="0841.php">Ralph Castain: "Re: [OMPI devel] Pack data mismatch in file dps_unpack.c 95/121"</a>
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

<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Apr 24 13:49:10 2006" -->
<!-- isoreceived="20060424174910" -->
<!-- sent="Mon, 24 Apr 2006 11:48:51 -0600" -->
<!-- isosent="20060424174851" -->
<!-- name="Manjunath GV" -->
<!-- email="manjugv_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Pack data mismatch in file dps_unpack.c 95/121" -->
<!-- id="DAA0BA39-B9A8-42F1-A648-98A7FF33E8A5_at_cs.unm.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="444A63F6.2020203_at_lanl.gov" -->
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
<strong>From:</strong> Manjunath GV (<em>manjugv_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-04-24 13:48:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0843.php">Brian Barrett: "[OMPI devel] Fwd: [all-osl-users] [Fwd: FW: Electrical Outage]"</a>
<li><strong>Previous message:</strong> <a href="0841.php">Ralph Castain: "Re: [OMPI devel] Pack data mismatch in file dps_unpack.c 95/121"</a>
<li><strong>In reply to:</strong> <a href="0841.php">Ralph Castain: "Re: [OMPI devel] Pack data mismatch in file dps_unpack.c 95/121"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks, problem got solved. I had installed old version of open mpi  
<br>
as root for all users and now
<br>
installed Open MPI version 1 for myself. Though the previous version  
<br>
was not in the path, seems like this was causing the problems.
<br>
The combination of removing previous libraries, runtimes solved the  
<br>
problem.
<br>
<p>thanks,
<br>
-Manjunath
<br>
<p>On Apr 22, 2006, at 11:12 AM, Ralph Castain wrote:
<br>
<p><span class="quotelev1">&gt; Another thing to try - go to your installation location's lib  
</span><br>
<span class="quotelev1">&gt; subdirectory (at $prefix/lib) and delete everything that is there.  
</span><br>
<span class="quotelev1">&gt; Then go back to the directory where you put the software and do a  
</span><br>
<span class="quotelev1">&gt; &quot;make install&quot; again.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Sometimes, especially if you are upgrading to a new version, you  
</span><br>
<span class="quotelev1">&gt; can be burned by stale shared libraries. This sounds like it could  
</span><br>
<span class="quotelev1">&gt; be the problem here. We don't remove any old libraries when you do  
</span><br>
<span class="quotelev1">&gt; an installation, so if you change versions, you really should do  
</span><br>
<span class="quotelev1">&gt; this procedure to avoid picking up &quot;old stuff&quot;.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Alternatively, you could build and run without shared libraries to  
</span><br>
<span class="quotelev1">&gt; avoid this problem altogether - just reconfigure with &quot;--enable- 
</span><br>
<span class="quotelev1">&gt; static --disable-shared&quot; and then do &quot;make clean all install&quot;.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Brian Barrett wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Well, so much for the easy one :(.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Is it possible that you have two versions of Open MPI in your path
</span><br>
<span class="quotelev2">&gt;&gt; somewhere and that you might be getting different versions on
</span><br>
<span class="quotelev2">&gt;&gt; different nodes?  The errors below generally indicate that data was
</span><br>
<span class="quotelev2">&gt;&gt; received in a totally different format than expected, so I'm just
</span><br>
<span class="quotelev2">&gt;&gt; kind of guessing as to how one could get to that situation...
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Brian
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Apr 21, 2006, at 5:01 PM, Manjunath G Venkata wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Thu, 20 Apr 2006, Brian Barrett wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Are these both identical architecture?  Those look suspiciously
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; like what happens when you're trying to mix 32/64 bit or little
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; endian / big endian.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; - Both my nodes are Intel Xeons and run linux 2.4.26.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -Manjunath
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Brian
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Apr 20, 2006, at 8:53 PM, Galen M. Shipman wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Hey Guys,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Not sure what is going on here, has anyone seen this before?
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; - Galen
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Hi Galen,
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Sorry to bother you.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; I have installed latest stable version of Open MPI(1.0) on two
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; of spider
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; nodes(s7,s4) for some experiments, but there seems to be
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; configuration
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; error  or something else which I don't understand. After
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; installing, as
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; a test I ran an simple MPI program but it complains with  
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; following
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; errors.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [s4:10685] [0,0,0] ORTE_ERROR_LOG: Pack data mismatch in file
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; dps_unpack.c at line 121
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [s4:10685] [0,0,0] ORTE_ERROR_LOG: Pack data mismatch in file
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; dps_unpack.c at line 95
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Further digging with gdb prints following errors
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [s7:07005] ERROR: A daemon on node s4 failed to start as  
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; expected.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [s7:07005] ERROR: There may be more information available from
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [s7:07005] ERROR: the remote shell (see above).
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [s7:07005] The daemon received a signal 5.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [s7:07005] [0,0,0] ORTE_ERROR_LOG: Pack data mismatch in file
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; dps_unpack.c at line 121
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [s7:07005] [0,0,0] ORTE_ERROR_LOG: Pack data mismatch in file
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; dps_unpack.c at line 95
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [s7:07005] [0,0,0] ORTE_ERROR_LOG: Pack data mismatch in file
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; dps_unpack.c at line 121
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [s7:07005] [0,0,0] ORTE_ERROR_LOG: Pack data mismatch in file
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; dps_unpack.c at line 95
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; any clue on what I am doing wrong ?
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; thanks,
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; -Manjunath
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
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
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-0842/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0843.php">Brian Barrett: "[OMPI devel] Fwd: [all-osl-users] [Fwd: FW: Electrical Outage]"</a>
<li><strong>Previous message:</strong> <a href="0841.php">Ralph Castain: "Re: [OMPI devel] Pack data mismatch in file dps_unpack.c 95/121"</a>
<li><strong>In reply to:</strong> <a href="0841.php">Ralph Castain: "Re: [OMPI devel] Pack data mismatch in file dps_unpack.c 95/121"</a>
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

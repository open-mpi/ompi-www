<?
$subject_val = "Re: [OMPI devel] process kill signal 59";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Oct 30 14:50:35 2012" -->
<!-- isoreceived="20121030185035" -->
<!-- sent="Tue, 30 Oct 2012 11:50:28 -0700" -->
<!-- isosent="20121030185028" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] process kill signal 59" -->
<!-- id="F93D1F87-8B35-44F5-8A1E-18812424009A_at_open-mpi.org" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="BAY166-W307CEBD4FE6A938FE184EECC620_at_phx.gbl" -->
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
<strong>Subject:</strong> Re: [OMPI devel] process kill signal 59<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-10-30 14:50:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11677.php">Sandra Guija: "Re: [OMPI devel] process kill signal 59"</a>
<li><strong>Previous message:</strong> <a href="11675.php">Sandra Guija: "Re: [OMPI devel] process kill signal 59"</a>
<li><strong>In reply to:</strong> <a href="11675.php">Sandra Guija: "Re: [OMPI devel] process kill signal 59"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11677.php">Sandra Guija: "Re: [OMPI devel] process kill signal 59"</a>
<li><strong>Reply:</strong> <a href="11677.php">Sandra Guija: "Re: [OMPI devel] process kill signal 59"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Yeah, you're using too much memory for the shared memory system. Run with -mca btl ^sm on your cmd line - it'll run slower, but you probably don't have a choice.
<br>
<p><p>On Oct 30, 2012, at 11:38 AM, Sandra Guija &lt;sguija_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; yes I think is related with my program too, when I run 1000x1000 matrix multiplication, the program works.
</span><br>
<span class="quotelev1">&gt; when I run the 10,000 matrix only on one machine  I got this:
</span><br>
<span class="quotelev1">&gt; mca_common_sm_mmap_init: mmap failed with errno=12
</span><br>
<span class="quotelev1">&gt; mca_mpool_sm_init: unable to shared memory mapping ( /tmp/openmpi-sessions-mpiu_at_tango_0/default-universe-1529/1/shared_mem_pool .tango)
</span><br>
<span class="quotelev1">&gt; mca_common_sm_mmap_init: /tmp/openmpi-sessions-mpiu_at_tango_0/default-universe-1529/1/shared_mem_pool .tango failed with errno=2
</span><br>
<span class="quotelev1">&gt; mca_mpool_sm_init: unable to shared memory mapping ( /tmp/openmpi-sessions-mpiu_at_tango_0/default-universe-1529/1/shared_mem_pool .tango)
</span><br>
<span class="quotelev1">&gt; PML add procs failed
</span><br>
<span class="quotelev1">&gt; --&gt;Returned &quot;0ut of resource&quot; (-2) instead of &quot; Success&quot; (0)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; this is the result when I run free -m
</span><br>
<span class="quotelev1">&gt;                   total   used   free   shared  buffers   cached
</span><br>
<span class="quotelev1">&gt; Mem:          2026    54    1972      0         6           25
</span><br>
<span class="quotelev1">&gt; -/+ buffer cache:    22      511      
</span><br>
<span class="quotelev1">&gt;  Swap:         511     0       511
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Sandra Guija
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; From: rhc_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Date: Tue, 30 Oct 2012 10:33:02 -0700
</span><br>
<span class="quotelev1">&gt; To: devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI devel] process kill signal 59
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Ummm...not sure what I can say about that with so little info. It looks like your process died for some reason that has nothing to do with us - a bug in your &quot;magic10000&quot; program?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Oct 30, 2012, at 10:24 AM, Sandra Guija &lt;sguija_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hello, 
</span><br>
<span class="quotelev1">&gt; I am running a 10,000x10,000 matrix multiplication in 4 processors/1 core and I get the following error:
</span><br>
<span class="quotelev1">&gt; mpirun -np 4 --hostfile nodes --bynode magic10000
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; mpirun noticed that job rank1 with PID 635 on node slave1 exited on signal 509(Real-time signal 25).
</span><br>
<span class="quotelev1">&gt; 2 additional process aborted (not shown)
</span><br>
<span class="quotelev1">&gt; 1 process killed (possibly by open MPI)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; node file contains:
</span><br>
<span class="quotelev1">&gt; master
</span><br>
<span class="quotelev1">&gt; slave1
</span><br>
<span class="quotelev1">&gt; slave2
</span><br>
<span class="quotelev1">&gt; slave3
</span><br>
<span class="quotelev1">&gt; 
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
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________ devel mailing list devel_at_[hidden] <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-11676/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11677.php">Sandra Guija: "Re: [OMPI devel] process kill signal 59"</a>
<li><strong>Previous message:</strong> <a href="11675.php">Sandra Guija: "Re: [OMPI devel] process kill signal 59"</a>
<li><strong>In reply to:</strong> <a href="11675.php">Sandra Guija: "Re: [OMPI devel] process kill signal 59"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11677.php">Sandra Guija: "Re: [OMPI devel] process kill signal 59"</a>
<li><strong>Reply:</strong> <a href="11677.php">Sandra Guija: "Re: [OMPI devel] process kill signal 59"</a>
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

<?
$subject_val = "Re: [OMPI devel] process kill signal 59";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Oct 30 14:55:06 2012" -->
<!-- isoreceived="20121030185506" -->
<!-- sent="Tue, 30 Oct 2012 11:55:00 -0700" -->
<!-- isosent="20121030185500" -->
<!-- name="Sandra Guija" -->
<!-- email="sguija_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] process kill signal 59" -->
<!-- id="BAY166-W1123B3C841F7C3ED5B7EA0CC620_at_phx.gbl" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="F93D1F87-8B35-44F5-8A1E-18812424009A_at_open-mpi.org" -->
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
<strong>From:</strong> Sandra Guija (<em>sguija_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-10-30 14:55:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11678.php">Edgar Gabriel: "[OMPI devel] sbgp problem"</a>
<li><strong>Previous message:</strong> <a href="11676.php">Ralph Castain: "Re: [OMPI devel] process kill signal 59"</a>
<li><strong>In reply to:</strong> <a href="11676.php">Ralph Castain: "Re: [OMPI devel] process kill signal 59"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11679.php">Ralph Castain: "Re: [OMPI devel] process kill signal 59"</a>
<li><strong>Reply:</strong> <a href="11679.php">Ralph Castain: "Re: [OMPI devel] process kill signal 59"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I am able to change the memory size parameters, so if I increase memory size (currently 2 gb) or add caches, it could be a solution?or is the program that is using too much memory?
<br>
<p>thanks really for you input, I appreciate it.
<br>
<p>Sandra Guija
<br>
<p>From: rhc_at_[hidden]
<br>
Date: Tue, 30 Oct 2012 11:50:28 -0700
<br>
To: devel_at_[hidden]
<br>
Subject: Re: [OMPI devel] process kill signal 59
<br>
<p>Yeah, you're using too much memory for the shared memory system. Run with -mca btl ^sm on your cmd line - it'll run slower, but you probably don't have a choice.
<br>
<p>On Oct 30, 2012, at 11:38 AM, Sandra Guija &lt;sguija_at_[hidden]&gt; wrote:yes I think is related with my program too, when I run 1000x1000 matrix multiplication, the program works.when I run the 10,000 matrix only on one machine  I got this:mca_common_sm_mmap_init: mmap failed with errno=12mca_mpool_sm_init: unable to shared memory mapping ( /tmp/openmpi-sessions-mpiu_at_tango_0/default-universe-1529/1/shared_mem_pool .tango)mca_common_sm_mmap_init: /tmp/openmpi-sessions-mpiu_at_tango_0/default-universe-1529/1/shared_mem_pool .tango failed with errno=2mca_mpool_sm_init: unable to shared memory mapping ( /tmp/openmpi-sessions-mpiu_at_tango_0/default-universe-1529/1/shared_mem_pool .tango)PML add procs failed--&gt;Returned &quot;0ut of resource&quot; (-2) instead of &quot; Success&quot; (0)
<br>
this is the result when I run free -m                  total   used   free   shared  buffers   cachedMem:          2026    54    1972      0         6           25-/+ buffer cache:    22      511      
<br>
&nbsp;Swap:         511     0       511
<br>
Sandra Guija
<br>
<p>From: rhc_at_[hidden]
<br>
Date: Tue, 30 Oct 2012 10:33:02 -0700
<br>
To: devel_at_[hidden]
<br>
Subject: Re: [OMPI devel] process kill signal 59
<br>
<p>Ummm...not sure what I can say about that with so little info. It looks like your process died for some reason that has nothing to do with us - a bug in your &quot;magic10000&quot; program?
<br>
<p>On Oct 30, 2012, at 10:24 AM, Sandra Guija &lt;sguija_at_[hidden]&gt; wrote:Hello, I am running a 10,000x10,000 matrix multiplication in 4 processors/1 core and I get the following error:mpirun -np 4 --hostfile nodes --bynode magic10000
<br>
mpirun noticed that job rank1 with PID 635 on node slave1 exited on signal 509(Real-time signal 25).2 additional process aborted (not shown)1 process killed (possibly by open MPI)
<br>
node file contains:masterslave1slave2slave3
<br>
<p>_______________________________________________
<br>
devel mailing list
<br>
devel_at_[hidden]
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
<br>
<p>_______________________________________________ devel mailing list devel_at_[hidden] <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>_______________________________________________
<br>
devel mailing list
<br>
devel_at_[hidden]
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
<br>
<p>_______________________________________________
<br>
devel mailing list
<br>
devel_at_[hidden]
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a> 		 	   		  
<br>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-11677/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11678.php">Edgar Gabriel: "[OMPI devel] sbgp problem"</a>
<li><strong>Previous message:</strong> <a href="11676.php">Ralph Castain: "Re: [OMPI devel] process kill signal 59"</a>
<li><strong>In reply to:</strong> <a href="11676.php">Ralph Castain: "Re: [OMPI devel] process kill signal 59"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11679.php">Ralph Castain: "Re: [OMPI devel] process kill signal 59"</a>
<li><strong>Reply:</strong> <a href="11679.php">Ralph Castain: "Re: [OMPI devel] process kill signal 59"</a>
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

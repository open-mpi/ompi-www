<?
$subject_val = "[OMPI devel] MPI_Errhandler_fatal_c failure";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Aug 18 09:23:11 2011" -->
<!-- isoreceived="20110818132311" -->
<!-- sent="Thu, 18 Aug 2011 09:23:10 -0400" -->
<!-- isosent="20110818132310" -->
<!-- name="TERRY DONTJE" -->
<!-- email="terry.dontje_at_[hidden]" -->
<!-- subject="[OMPI devel] MPI_Errhandler_fatal_c failure" -->
<!-- id="4E4D123E.4060401_at_oracle.com" -->
<!-- charset="UTF-8" -->
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
<strong>Subject:</strong> [OMPI devel] MPI_Errhandler_fatal_c failure<br>
<strong>From:</strong> TERRY DONTJE (<em>terry.dontje_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-08-18 09:23:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9671.php">Wesley Bland: "Re: [OMPI devel] MPI_Errhandler_fatal_c failure"</a>
<li><strong>Previous message:</strong> <a href="9669.php">Jeff Squyres: "[OMPI devel] 1.5.4 and 1.4.4 NEWS items"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9671.php">Wesley Bland: "Re: [OMPI devel] MPI_Errhandler_fatal_c failure"</a>
<li><strong>Reply:</strong> <a href="9671.php">Wesley Bland: "Re: [OMPI devel] MPI_Errhandler_fatal_c failure"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I am seeing the intel test suite tests MPI_Errhandler_fatal_c and 
<br>
MPI_Errhandler_fatal_f fail with an oob failure quite a bit  I have not 
<br>
seen this test failing under MTT until the epoch code was added.  So I 
<br>
have a suspicion the epoch code might be at fault.  Could someone 
<br>
familiar with the epoch changes (Wesley) take a look at this failure.
<br>
<p>Note this intermittently fails but fails for me more times than not.  
<br>
Attached is a log file of a run that succeeds followed by the failing 
<br>
run.  The piece of concern are the messages involving 
<br>
mca_oob_tcp_msg_recv and below.
<br>
<p>thanks,
<br>
<p><pre>
-- 
Oracle
Terry D. Dontje | Principal Software Engineer
Developer Tools Engineering | +1.781.442.2631
Oracle *- Performance Technologies*
95 Network Drive, Burlington, MA 01803
Email terry.dontje_at_[hidden] &lt;mailto:terry.dontje_at_[hidden]&gt;
</pre>
<p>
<p><p>
<br><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-9670/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<img src="http://www.open-mpi.org/community/lists/devel/att-9670/02-part" alt="picture">
<!-- attachment="02-part" -->
<hr>
<ul>
<li>text/plain attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-9670/mefc.txt">mefc.txt</a>
</ul>
<!-- attachment="mefc.txt" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9671.php">Wesley Bland: "Re: [OMPI devel] MPI_Errhandler_fatal_c failure"</a>
<li><strong>Previous message:</strong> <a href="9669.php">Jeff Squyres: "[OMPI devel] 1.5.4 and 1.4.4 NEWS items"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9671.php">Wesley Bland: "Re: [OMPI devel] MPI_Errhandler_fatal_c failure"</a>
<li><strong>Reply:</strong> <a href="9671.php">Wesley Bland: "Re: [OMPI devel] MPI_Errhandler_fatal_c failure"</a>
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

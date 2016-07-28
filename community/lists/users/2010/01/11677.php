<?
$subject_val = "Re: [OMPI users] VampirTrace: time not increasing";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jan  4 04:38:23 2010" -->
<!-- isoreceived="20100104093823" -->
<!-- sent="Mon, 4 Jan 2010 10:38:18 +0100" -->
<!-- isosent="20100104093818" -->
<!-- name="Andreas Kn&#252;pfer" -->
<!-- email="andreas.knuepfer_at_[hidden]" -->
<!-- subject="Re: [OMPI users] VampirTrace: time not increasing" -->
<!-- id="201001041038.18388.andreas.knuepfer_at_tu-dresden.de" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="20091222152121.GA2839_at_roman.t-soft" -->
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
<strong>Subject:</strong> Re: [OMPI users] VampirTrace: time not increasing<br>
<strong>From:</strong> Andreas Kn&#252;pfer (<em>andreas.knuepfer_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-01-04 04:38:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11678.php">Lenny Verkhovsky: "Re: [OMPI users] Dual quad core Opteron hangs on Bcast."</a>
<li><strong>Previous message:</strong> <a href="11676.php">G&#246;tz Waschk: "[OMPI users] openib btl slows down application"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/12/11632.php">Roman Cheplyaka: "[OMPI users] VampirTrace: time not increasing"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear Roman, dear all,
<br>
<p>this error says, that something is very wrong with the trace collection. Do 
<br>
you know if this error happens in the middle of the run or at the end? To fin 
<br>
out, please export the following before the run
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&quot;export VT_UNIFY=no&quot;
<br>
<p>and afterwards run the unification manually like this:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&quot;vtunify &lt;#files&gt; &lt;iprefix&gt; -k&quot; 
<br>
<p>where &lt;#files&gt; should be 8 in your case and &lt;iprefix&gt; is the first part of the 
<br>
name of the temporary trace files that appear in your working dir. 
<br>
<p>Then, please let me know whether you get the error in the first or second step.
<br>
<p>Furthermore, could you send me the config.log file from the installation of 
<br>
VampirTrace, please.
<br>
<p>Best regards, Andreas
<br>
<p><p>On Tuesday 22 December 2009 16:21:21 Roman Cheplyaka wrote:
<br>
<span class="quotelev1">&gt; I got the following problem while trying to run vt-enabled HPL benchmark on
</span><br>
<span class="quotelev1">&gt;  a single 8-core Linux node.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; OTF ERROR in function OTF_WBuffer_setTimeAndProcess, file: OTF_WBuffer.c,
</span><br>
<span class="quotelev1">&gt;  line: 308: time not increasing. (t= 2995392288, p= 2)
</span><br>
<span class="quotelev1">&gt; vtunify: Error: Could not read events of OTF stream [namestub ./a__ufy.tmp
</span><br>
<span class="quotelev1">&gt;  id 1] vtunify: An error occurred during unifying events - Terminating ...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Sometimes instead of above message I get this:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; vtunify: vt_unify_events_hdlr.cc:37: int Handle_Enter(OTF_WStream*,
</span><br>
<span class="quotelev1">&gt;  uint64_t, uint32_t, uint32_t, uint32_t): Assertion `global_statetoken !=
</span><br>
<span class="quotelev1">&gt;  0' failed.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; A program is automatically instrumented (all I did was changing mpicc to
</span><br>
<span class="quotelev1">&gt; mpicc-vt), compiled and run with latest svn of Open MPI, command:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; mpirun -np 8 --mca btl self,sm hpl
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The same problem was with the latest release version.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; When I run it with less number of processes, it works fine.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Any ideas?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p><pre>
-- 
Dr. rer. nat. Andreas Kn&#252;pfer, 
Center for Information Services and 
High Performance Computing (ZIH), TU Dresden, 
Willersbau A114, Zellescher Weg 12, 01062 Dresden
phone +49-351-463-38323, fax +49-351-463-37773

</pre>
<hr>
<ul>
<li>application/pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-11677/smime.p7s">smime.p7s</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11678.php">Lenny Verkhovsky: "Re: [OMPI users] Dual quad core Opteron hangs on Bcast."</a>
<li><strong>Previous message:</strong> <a href="11676.php">G&#246;tz Waschk: "[OMPI users] openib btl slows down application"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/12/11632.php">Roman Cheplyaka: "[OMPI users] VampirTrace: time not increasing"</a>
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

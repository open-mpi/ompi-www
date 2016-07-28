<?
$subject_val = "Re: [OMPI devel] debugger attach broken in trunk";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Oct 14 19:28:19 2010" -->
<!-- isoreceived="20101014232819" -->
<!-- sent="Thu, 14 Oct 2010 17:28:08 -0600" -->
<!-- isosent="20101014232808" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] debugger attach broken in trunk" -->
<!-- id="F014E66F-4DEF-4D7B-ACE0-2FDE85367B03_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="A613A967-FE21-4E56-84E9-B2A5B76D342D_at_pittman.co.uk" -->
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
<strong>Subject:</strong> Re: [OMPI devel] debugger attach broken in trunk<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-10-14 19:28:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8610.php">Ashley Pittman: "Re: [OMPI devel] debugger attach broken in trunk"</a>
<li><strong>Previous message:</strong> <a href="8608.php">Ashley Pittman: "[OMPI devel] debugger attach broken in trunk"</a>
<li><strong>In reply to:</strong> <a href="8608.php">Ashley Pittman: "[OMPI devel] debugger attach broken in trunk"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8610.php">Ashley Pittman: "Re: [OMPI devel] debugger attach broken in trunk"</a>
<li><strong>Reply:</strong> <a href="8610.php">Ashley Pittman: "Re: [OMPI devel] debugger attach broken in trunk"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Yeah, I heard about it a couple of weeks ago. On the &quot;to-do&quot; list for the future.
<br>
<p><p>On Oct 14, 2010, at 4:20 PM, Ashley Pittman wrote:
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It's been reported to me that using current SVN head debugger attach support is broken, both the MPIR interface and the orte-ps command are returning no data for the hostnames and process identifiers of launched jobs.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The v1.5 download is fine, I've checked that on both counts but a checkout of the trunk exhibits the problem.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ashley_at_cloud1:~/code/padb-read-only/src$ orte-ps 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Information from mpirun [59875,0]
</span><br>
<span class="quotelev1">&gt; ---------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    JobID |   State |  Slots | Num Procs | 
</span><br>
<span class="quotelev1">&gt; ------------------------------------------
</span><br>
<span class="quotelev1">&gt; [59875,1] | Running |      1 |         0 | 
</span><br>
<span class="quotelev1">&gt;        Process Name | ORTE Name | Local Rank |    PID | Node | State | 
</span><br>
<span class="quotelev1">&gt;        ------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; $ gdb -p &lt;pidof mpirun&gt;
</span><br>
<span class="quotelev1">&gt; (gdb) p MPIR_proctable
</span><br>
<span class="quotelev1">&gt; $1 = (struct MPIR_PROCDESC *) 0x0
</span><br>
<span class="quotelev1">&gt; (gdb) p MPIR_proctable_size
</span><br>
<span class="quotelev1">&gt; $2 = 0
</span><br>
<span class="quotelev1">&gt; (gdb) p MPIR_PROCDESC 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ashley_at_cloud1:~/code/padb-read-only/src$ ./padb -Ormgr=mpirun -a --proc-summary -Odebug
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Ashley.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Ashley Pittman, Bath, UK.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Padb - A parallel job inspection tool for cluster computing
</span><br>
<span class="quotelev1">&gt; <a href="http://padb.pittman.org.uk">http://padb.pittman.org.uk</a>
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8610.php">Ashley Pittman: "Re: [OMPI devel] debugger attach broken in trunk"</a>
<li><strong>Previous message:</strong> <a href="8608.php">Ashley Pittman: "[OMPI devel] debugger attach broken in trunk"</a>
<li><strong>In reply to:</strong> <a href="8608.php">Ashley Pittman: "[OMPI devel] debugger attach broken in trunk"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8610.php">Ashley Pittman: "Re: [OMPI devel] debugger attach broken in trunk"</a>
<li><strong>Reply:</strong> <a href="8610.php">Ashley Pittman: "Re: [OMPI devel] debugger attach broken in trunk"</a>
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

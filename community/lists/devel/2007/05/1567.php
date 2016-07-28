<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue May 22 12:50:18 2007" -->
<!-- isoreceived="20070522165018" -->
<!-- sent="Tue, 22 May 2007 12:49:26 -0400" -->
<!-- isosent="20070522164926" -->
<!-- name="Josh Hursey" -->
<!-- email="jjhursey_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [devel-core] Dumping process status etc." -->
<!-- id="9546DE8E-3DAA-412D-9127-E54D268E6F8C_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="C2787255.93B6%rhc_at_lanl.gov" -->
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
<strong>From:</strong> Josh Hursey (<em>jjhursey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-05-22 12:49:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1568.php">George Bosilca: "[OMPI devel] Strange schema error"</a>
<li><strong>Previous message:</strong> <a href="1566.php">Ralph H Castain: "[OMPI devel] Dumping process status etc."</a>
<li><strong>In reply to:</strong> <a href="1566.php">Ralph H Castain: "[OMPI devel] Dumping process status etc."</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
You can also use the orte-ps tool to give you a dump of the GPR. On  
<br>
the machine with 'mpirun' running on it:
<br>
&nbsp;&nbsp;shell$ orte-ps --dump
<br>
This will call orte_gpr.dump_all(0) and push the output to the terminal.
<br>
<p>It gives a quick and dirty access to this information at any point in  
<br>
time.
<br>
<p>-- Josh
<br>
<p>On May 22, 2007, at 12:11 PM, Ralph H Castain wrote:
<br>
<p><span class="quotelev1">&gt; This came up in today's telecon and I promised to send this to  
</span><br>
<span class="quotelev1">&gt; George -
</span><br>
<span class="quotelev1">&gt; however, it occurred to me that others may also want to know.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If you want to dump info for debugging purposes, and if you can get  
</span><br>
<span class="quotelev1">&gt; into
</span><br>
<span class="quotelev1">&gt; orterun/mpirun (e.g., via gdb), you can dump info on anything with the
</span><br>
<span class="quotelev1">&gt; following (NOTE: Gdb will frequently truncate the output from these  
</span><br>
<span class="quotelev1">&gt; commands
</span><br>
<span class="quotelev1">&gt; - that is why there are so many and they are somewhat detailed. I  
</span><br>
<span class="quotelev1">&gt; tend to
</span><br>
<span class="quotelev1">&gt; bury the more verbose of these in the code itself when debugging so  
</span><br>
<span class="quotelev1">&gt; I can be
</span><br>
<span class="quotelev1">&gt; sure to see the entire output):
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; orte_gpr.dump_all(0): this will dump *everything* in the registry  
</span><br>
<span class="quotelev1">&gt; to opal
</span><br>
<span class="quotelev1">&gt; output stream 0 (or whatever one you care to designate), including  
</span><br>
<span class="quotelev1">&gt; all the
</span><br>
<span class="quotelev1">&gt; info on trigger status (e.g., whether it has fired or not).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; orte_gpr.dump_segment(segment-name): this will provide the info  
</span><br>
<span class="quotelev1">&gt; stored on
</span><br>
<span class="quotelev1">&gt; any segment of the registry. Standard segments worth looking at  
</span><br>
<span class="quotelev1">&gt; include:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1. &quot;orte-job-1&quot;: shows info on all procs in your initial applications,
</span><br>
<span class="quotelev1">&gt; including their reported state
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2. &quot;orte-node&quot;: what nodes are known to the system, and anything  
</span><br>
<span class="quotelev1">&gt; about their
</span><br>
<span class="quotelev1">&gt; status
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 3. &quot;orte-job-0&quot;: info on all daemons in the system
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; orte_gpr.dump_triggers(0): status and info on all triggers. The &quot;0&quot;  
</span><br>
<span class="quotelev1">&gt; argument
</span><br>
<span class="quotelev1">&gt; indicates that you want them all dumped to the screen. Since gdb  
</span><br>
<span class="quotelev1">&gt; doesn't
</span><br>
<span class="quotelev1">&gt; like getting too much info, you can use this argument to specify  
</span><br>
<span class="quotelev1">&gt; how many
</span><br>
<span class="quotelev1">&gt; you want to see starting from the end of the list (i.e., &quot;5&quot; says  
</span><br>
<span class="quotelev1">&gt; give me
</span><br>
<span class="quotelev1">&gt; the five last triggers that were defined).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; orte_gpr.dump_subscriptions(0): same as above, only for subscriptions
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; There are more of these that are defined, but they are fairly  
</span><br>
<span class="quotelev1">&gt; obvious - you
</span><br>
<span class="quotelev1">&gt; can see them all listed in orte/mca/gpr/gpr.h.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Also, don't forget that you can dump *any* data type object using the
</span><br>
<span class="quotelev1">&gt; orte_dss.dump command - see orte/dss/dss.h for a description.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hope that helps!
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel-core mailing list
</span><br>
<span class="quotelev1">&gt; devel-core_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel-core">http://www.open-mpi.org/mailman/listinfo.cgi/devel-core</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1568.php">George Bosilca: "[OMPI devel] Strange schema error"</a>
<li><strong>Previous message:</strong> <a href="1566.php">Ralph H Castain: "[OMPI devel] Dumping process status etc."</a>
<li><strong>In reply to:</strong> <a href="1566.php">Ralph H Castain: "[OMPI devel] Dumping process status etc."</a>
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

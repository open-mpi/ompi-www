<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Mar  1 09:01:27 2007" -->
<!-- isoreceived="20070301140127" -->
<!-- sent="Thu, 01 Mar 2007 07:01:20 -0700" -->
<!-- isosent="20070301140120" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Aggregate MCA Parameter Sets" -->
<!-- id="C20C2AC0.1CEB%rhc_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="3E59D5A4-D307-431C-AAC5-37B56A08DBD1_at_open-mpi.org" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-03-01 09:01:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1325.php">Josh Hursey: "Re: [OMPI devel] Aggregate MCA Parameter Sets"</a>
<li><strong>Previous message:</strong> <a href="1323.php">Josh Hursey: "[OMPI devel] Aggregate MCA Parameter Sets"</a>
<li><strong>In reply to:</strong> <a href="1323.php">Josh Hursey: "[OMPI devel] Aggregate MCA Parameter Sets"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1325.php">Josh Hursey: "Re: [OMPI devel] Aggregate MCA Parameter Sets"</a>
<li><strong>Reply:</strong> <a href="1325.php">Josh Hursey: "Re: [OMPI devel] Aggregate MCA Parameter Sets"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hmmmm...only one question left unanswered - where do these &quot;aggregate&quot;
<br>
parameter sets come from??? Does a user create the file? Are we providing
<br>
them somewhere? Are there sets that the sys admin provides that everyone on
<br>
that system can use (but aren't to be used all the time via the conf file)?
<br>
<p><p>On 3/1/07 6:52 AM, &quot;Josh Hursey&quot; &lt;jjhursey_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Developers,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I just committed back to the trunk the Aggregate MCA (AMCA) Parameter
</span><br>
<span class="quotelev1">&gt; Set work that Jeff Squyres and I have been working on. This will be a
</span><br>
<span class="quotelev1">&gt; part of the eventual v1.3 release.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The motivation for creating AMCA parameter sets came from the
</span><br>
<span class="quotelev1">&gt; realization that for certain applications a large number of MCA
</span><br>
<span class="quotelev1">&gt; parameters needed to be set for the job to run well and/or as the
</span><br>
<span class="quotelev1">&gt; user expects. So the goal of this work was to help reduce the number
</span><br>
<span class="quotelev1">&gt; of MCA parameters that the user has to manage, therefore leading to a
</span><br>
<span class="quotelev1">&gt; better end user experience with Open MPI.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; AMCA parameter set files are formated exactly like the &quot;~/.openmpi/
</span><br>
<span class="quotelev1">&gt; mca-params.conf&quot; configuration files. In addition when AMCA parameter
</span><br>
<span class="quotelev1">&gt; sets are used the user may still override the parameters on the
</span><br>
<span class="quotelev1">&gt; command line if they like.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; For example, let's say there is a set of MCA parameters that a user
</span><br>
<span class="quotelev1">&gt; would need to set to get good performance out of Netpipe when using
</span><br>
<span class="quotelev1">&gt; Open IB. They would typically run the application as:
</span><br>
<span class="quotelev1">&gt;    shell$ mpirun -np 2 NPmpi
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; To use the AMCA parameter set for Open IB the user would run:
</span><br>
<span class="quotelev1">&gt;    shell$ mpirun -np 2 -am  btl-openib-benchmark NPmpi
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This will load a series of MCA parameters for the user. If they
</span><br>
<span class="quotelev1">&gt; wanted to override the max_btls MCA parameter for tuning reasons they
</span><br>
<span class="quotelev1">&gt; would run:
</span><br>
<span class="quotelev1">&gt;    shell$ mpirun -np 2 -am  btl-openib-benchmark -mca
</span><br>
<span class="quotelev1">&gt; btl_open_ib_max_btls 10 NPmpi
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; AMCA parameter sets can be coupled. If we take the example above and
</span><br>
<span class="quotelev1">&gt; wanted to also use an AMCA parameter set for TCP, the user would run:
</span><br>
<span class="quotelev1">&gt;    shell$ mpirun -np 2 -am  btl-openib-benchmark:btl-tcp-benchmark -
</span><br>
<span class="quotelev1">&gt; mca btl_open_ib_max_btls 10 NPmpi
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The AMCA parameter sets are loaded in priority order. This means that
</span><br>
<span class="quotelev1">&gt; the OpenIB AMCA set has priority over the TCP AMCA set. So if the TCP
</span><br>
<span class="quotelev1">&gt; AMCA sets the MCA parameter &quot;mpi_leave_pinned=0&quot; and the OpenIB AMCA
</span><br>
<span class="quotelev1">&gt; sets it to &quot;mpi_leave_pinned=1&quot; then the latter, OpenIB version, will
</span><br>
<span class="quotelev1">&gt; be used.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Additional Related MCA parameters:
</span><br>
<span class="quotelev1">&gt;   - mca_base_param_file_prefix
</span><br>
<span class="quotelev1">&gt;       (Default: NULL)
</span><br>
<span class="quotelev1">&gt;       This is the fullname of the &quot;-am&quot; mpirun option. Used to
</span><br>
<span class="quotelev1">&gt; specify a ':' separated list of AMCA parameter set files.
</span><br>
<span class="quotelev1">&gt;   - mca_base_param_file_path
</span><br>
<span class="quotelev1">&gt;       (Default: $SYSCONFDIR/amca-param-sets/:$CWD)
</span><br>
<span class="quotelev1">&gt;       The path to search for AMCA files with relative paths. A
</span><br>
<span class="quotelev1">&gt; warning will be printed if the AMCA file cannot be found.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If you have any problems with this new feature let me know. There
</span><br>
<span class="quotelev1">&gt; will be an FAQ coming shortly about this I suspect.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt; Josh
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ----
</span><br>
<span class="quotelev1">&gt; Josh Hursey
</span><br>
<span class="quotelev1">&gt; jjhursey_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ----
</span><br>
<span class="quotelev1">&gt; Josh Hursey
</span><br>
<span class="quotelev1">&gt; jjhursey_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
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
<li><strong>Next message:</strong> <a href="1325.php">Josh Hursey: "Re: [OMPI devel] Aggregate MCA Parameter Sets"</a>
<li><strong>Previous message:</strong> <a href="1323.php">Josh Hursey: "[OMPI devel] Aggregate MCA Parameter Sets"</a>
<li><strong>In reply to:</strong> <a href="1323.php">Josh Hursey: "[OMPI devel] Aggregate MCA Parameter Sets"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1325.php">Josh Hursey: "Re: [OMPI devel] Aggregate MCA Parameter Sets"</a>
<li><strong>Reply:</strong> <a href="1325.php">Josh Hursey: "Re: [OMPI devel] Aggregate MCA Parameter Sets"</a>
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

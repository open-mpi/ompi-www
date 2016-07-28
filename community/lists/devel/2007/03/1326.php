<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Mar  2 12:21:11 2007" -->
<!-- isoreceived="20070302172111" -->
<!-- sent="Fri, 2 Mar 2007 12:18:09 -0500" -->
<!-- isosent="20070302171809" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Aggregate MCA Parameter Sets" -->
<!-- id="9570B15B-A547-4E76-B267-867F28F43E00_at_cs.utk.edu" -->
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
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-03-02 12:18:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1327.php">Josh Hursey: "Re: [OMPI devel] Aggregate MCA Parameter Sets"</a>
<li><strong>Previous message:</strong> <a href="1325.php">Josh Hursey: "Re: [OMPI devel] Aggregate MCA Parameter Sets"</a>
<li><strong>In reply to:</strong> <a href="1323.php">Josh Hursey: "[OMPI devel] Aggregate MCA Parameter Sets"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1327.php">Josh Hursey: "Re: [OMPI devel] Aggregate MCA Parameter Sets"</a>
<li><strong>Reply:</strong> <a href="1327.php">Josh Hursey: "Re: [OMPI devel] Aggregate MCA Parameter Sets"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I think I miss the discussion about these AMCA here at UTK and about  
<br>
the benefits that give us. Anyway, I have some comments about this  
<br>
patch.
<br>
<p>You seems to add the new AMCA files into the same string as the  
<br>
default MCA param file and then you call your new function  
<br>
fixup_files. This function take a directory as an argument, and you  
<br>
will try to match everything with the path coming from an MCA  
<br>
parameter described as AMCA specific. Doesn't really make sense to  
<br>
me ! If the prefix is AMCA specific then don't match the MCA param  
<br>
files with it, if not then correct the help message.
<br>
<p>Last thing about this patch. Having the opal MCA layer export a bool  
<br>
variable just to make sure the life of orted and orterun (which in  
<br>
fact don't really need it as it set it multiple times to true ???) is  
<br>
much easier, isn't something that look to me like a good approach.
<br>
<p>In fact, I was wondering what is the real difference between having  
<br>
this new AMCA stuff and extending the mca_param_files default MCA  
<br>
parameter ?
<br>
<p>Thanks,
<br>
&nbsp;&nbsp;&nbsp;george.
<br>
<p>On Mar 1, 2007, at 8:52 AM, Josh Hursey wrote:
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
<p>&quot;Half of what I say is meaningless; but I say it so that the other  
<br>
half may reach you&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Kahlil Gibran
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1327.php">Josh Hursey: "Re: [OMPI devel] Aggregate MCA Parameter Sets"</a>
<li><strong>Previous message:</strong> <a href="1325.php">Josh Hursey: "Re: [OMPI devel] Aggregate MCA Parameter Sets"</a>
<li><strong>In reply to:</strong> <a href="1323.php">Josh Hursey: "[OMPI devel] Aggregate MCA Parameter Sets"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1327.php">Josh Hursey: "Re: [OMPI devel] Aggregate MCA Parameter Sets"</a>
<li><strong>Reply:</strong> <a href="1327.php">Josh Hursey: "Re: [OMPI devel] Aggregate MCA Parameter Sets"</a>
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

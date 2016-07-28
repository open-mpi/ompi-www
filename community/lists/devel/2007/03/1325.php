<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Mar  1 10:26:38 2007" -->
<!-- isoreceived="20070301152638" -->
<!-- sent="Thu, 1 Mar 2007 10:26:33 -0500" -->
<!-- isosent="20070301152633" -->
<!-- name="Josh Hursey" -->
<!-- email="jjhursey_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Aggregate MCA Parameter Sets" -->
<!-- id="ECED4826-0FB9-4D67-84EB-3F191206C0C9_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="C20C2AC0.1CEB%rhc_at_lanl.gov" -->
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
<strong>Date:</strong> 2007-03-01 10:26:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1326.php">George Bosilca: "Re: [OMPI devel] Aggregate MCA Parameter Sets"</a>
<li><strong>Previous message:</strong> <a href="1324.php">Ralph Castain: "Re: [OMPI devel] Aggregate MCA Parameter Sets"</a>
<li><strong>In reply to:</strong> <a href="1324.php">Ralph Castain: "Re: [OMPI devel] Aggregate MCA Parameter Sets"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1326.php">George Bosilca: "Re: [OMPI devel] Aggregate MCA Parameter Sets"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mar 1, 2007, at 9:01 AM, Ralph Castain wrote:
<br>
<p><span class="quotelev1">&gt; Hmmmm...only one question left unanswered - where do these &quot;aggregate&quot;
</span><br>
<span class="quotelev1">&gt; parameter sets come from??? Does a user create the file? Are we  
</span><br>
<span class="quotelev1">&gt; providing
</span><br>
<span class="quotelev1">&gt; them somewhere? Are there sets that the sys admin provides that  
</span><br>
<span class="quotelev1">&gt; everyone on
</span><br>
<span class="quotelev1">&gt; that system can use (but aren't to be used all the time via the  
</span><br>
<span class="quotelev1">&gt; conf file)?
</span><br>
<p>Yes to all. Open MPI will ship with some of them, since each  
<br>
component in the system can create a file and have it included in the  
<br>
distro if they choose (a la the OpenIB AMCA file). The user can  
<br>
create there own to experiment with. And the sysadmin can create  
<br>
versions and place them in the  $SYSCONFDIR/amca-param-sets directory  
<br>
or in a special location for users.
<br>
<p>The idea was that anyone can create them just like the mca- 
<br>
params.conf file we currently ship. The only difference between the  
<br>
new Aggregate MCA Parameter Set file and the mca-params.conf file is  
<br>
in when they are used. The mca-params.conf file is always used unless  
<br>
the user overrides it. The Aggregate MCA Parameter Sets are an opt-in  
<br>
feature where the user must explicitly ask for a specific AMCA set  
<br>
when running a job. So the idea is that they would only need one  
<br>
additional command line argument to get a specialized set of MCA  
<br>
parameters for a specific application type or run. That is instead of  
<br>
N mca parameters that the user must mange.
<br>
<p>-- Josh
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 3/1/07 6:52 AM, &quot;Josh Hursey&quot; &lt;jjhursey_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Developers,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I just committed back to the trunk the Aggregate MCA (AMCA) Parameter
</span><br>
<span class="quotelev2">&gt;&gt; Set work that Jeff Squyres and I have been working on. This will be a
</span><br>
<span class="quotelev2">&gt;&gt; part of the eventual v1.3 release.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The motivation for creating AMCA parameter sets came from the
</span><br>
<span class="quotelev2">&gt;&gt; realization that for certain applications a large number of MCA
</span><br>
<span class="quotelev2">&gt;&gt; parameters needed to be set for the job to run well and/or as the
</span><br>
<span class="quotelev2">&gt;&gt; user expects. So the goal of this work was to help reduce the number
</span><br>
<span class="quotelev2">&gt;&gt; of MCA parameters that the user has to manage, therefore leading to a
</span><br>
<span class="quotelev2">&gt;&gt; better end user experience with Open MPI.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; AMCA parameter set files are formated exactly like the &quot;~/.openmpi/
</span><br>
<span class="quotelev2">&gt;&gt; mca-params.conf&quot; configuration files. In addition when AMCA parameter
</span><br>
<span class="quotelev2">&gt;&gt; sets are used the user may still override the parameters on the
</span><br>
<span class="quotelev2">&gt;&gt; command line if they like.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; For example, let's say there is a set of MCA parameters that a user
</span><br>
<span class="quotelev2">&gt;&gt; would need to set to get good performance out of Netpipe when using
</span><br>
<span class="quotelev2">&gt;&gt; Open IB. They would typically run the application as:
</span><br>
<span class="quotelev2">&gt;&gt;    shell$ mpirun -np 2 NPmpi
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; To use the AMCA parameter set for Open IB the user would run:
</span><br>
<span class="quotelev2">&gt;&gt;    shell$ mpirun -np 2 -am  btl-openib-benchmark NPmpi
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; This will load a series of MCA parameters for the user. If they
</span><br>
<span class="quotelev2">&gt;&gt; wanted to override the max_btls MCA parameter for tuning reasons they
</span><br>
<span class="quotelev2">&gt;&gt; would run:
</span><br>
<span class="quotelev2">&gt;&gt;    shell$ mpirun -np 2 -am  btl-openib-benchmark -mca
</span><br>
<span class="quotelev2">&gt;&gt; btl_open_ib_max_btls 10 NPmpi
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; AMCA parameter sets can be coupled. If we take the example above and
</span><br>
<span class="quotelev2">&gt;&gt; wanted to also use an AMCA parameter set for TCP, the user would run:
</span><br>
<span class="quotelev2">&gt;&gt;    shell$ mpirun -np 2 -am  btl-openib-benchmark:btl-tcp-benchmark -
</span><br>
<span class="quotelev2">&gt;&gt; mca btl_open_ib_max_btls 10 NPmpi
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The AMCA parameter sets are loaded in priority order. This means that
</span><br>
<span class="quotelev2">&gt;&gt; the OpenIB AMCA set has priority over the TCP AMCA set. So if the TCP
</span><br>
<span class="quotelev2">&gt;&gt; AMCA sets the MCA parameter &quot;mpi_leave_pinned=0&quot; and the OpenIB AMCA
</span><br>
<span class="quotelev2">&gt;&gt; sets it to &quot;mpi_leave_pinned=1&quot; then the latter, OpenIB version, will
</span><br>
<span class="quotelev2">&gt;&gt; be used.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Additional Related MCA parameters:
</span><br>
<span class="quotelev2">&gt;&gt;   - mca_base_param_file_prefix
</span><br>
<span class="quotelev2">&gt;&gt;       (Default: NULL)
</span><br>
<span class="quotelev2">&gt;&gt;       This is the fullname of the &quot;-am&quot; mpirun option. Used to
</span><br>
<span class="quotelev2">&gt;&gt; specify a ':' separated list of AMCA parameter set files.
</span><br>
<span class="quotelev2">&gt;&gt;   - mca_base_param_file_path
</span><br>
<span class="quotelev2">&gt;&gt;       (Default: $SYSCONFDIR/amca-param-sets/:$CWD)
</span><br>
<span class="quotelev2">&gt;&gt;       The path to search for AMCA files with relative paths. A
</span><br>
<span class="quotelev2">&gt;&gt; warning will be printed if the AMCA file cannot be found.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; If you have any problems with this new feature let me know. There
</span><br>
<span class="quotelev2">&gt;&gt; will be an FAQ coming shortly about this I suspect.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Cheers,
</span><br>
<span class="quotelev2">&gt;&gt; Josh
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ----
</span><br>
<span class="quotelev2">&gt;&gt; Josh Hursey
</span><br>
<span class="quotelev2">&gt;&gt; jjhursey_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ----
</span><br>
<span class="quotelev2">&gt;&gt; Josh Hursey
</span><br>
<span class="quotelev2">&gt;&gt; jjhursey_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
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
<p><pre>
----
Josh Hursey
jjhursey_at_[hidden]
<a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1326.php">George Bosilca: "Re: [OMPI devel] Aggregate MCA Parameter Sets"</a>
<li><strong>Previous message:</strong> <a href="1324.php">Ralph Castain: "Re: [OMPI devel] Aggregate MCA Parameter Sets"</a>
<li><strong>In reply to:</strong> <a href="1324.php">Ralph Castain: "Re: [OMPI devel] Aggregate MCA Parameter Sets"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1326.php">George Bosilca: "Re: [OMPI devel] Aggregate MCA Parameter Sets"</a>
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

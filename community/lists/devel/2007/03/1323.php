<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Mar  1 08:52:37 2007" -->
<!-- isoreceived="20070301135237" -->
<!-- sent="Thu, 1 Mar 2007 08:52:33 -0500" -->
<!-- isosent="20070301135233" -->
<!-- name="Josh Hursey" -->
<!-- email="jjhursey_at_[hidden]" -->
<!-- subject="[OMPI devel] Aggregate MCA Parameter Sets" -->
<!-- id="3E59D5A4-D307-431C-AAC5-37B56A08DBD1_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
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
<strong>Date:</strong> 2007-03-01 08:52:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1324.php">Ralph Castain: "Re: [OMPI devel] Aggregate MCA Parameter Sets"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2007/02/1322.php">Tim Mattox: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r13841"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1324.php">Ralph Castain: "Re: [OMPI devel] Aggregate MCA Parameter Sets"</a>
<li><strong>Reply:</strong> <a href="1324.php">Ralph Castain: "Re: [OMPI devel] Aggregate MCA Parameter Sets"</a>
<li><strong>Reply:</strong> <a href="1326.php">George Bosilca: "Re: [OMPI devel] Aggregate MCA Parameter Sets"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Developers,
<br>
<p>I just committed back to the trunk the Aggregate MCA (AMCA) Parameter  
<br>
Set work that Jeff Squyres and I have been working on. This will be a  
<br>
part of the eventual v1.3 release.
<br>
<p>The motivation for creating AMCA parameter sets came from the  
<br>
realization that for certain applications a large number of MCA  
<br>
parameters needed to be set for the job to run well and/or as the  
<br>
user expects. So the goal of this work was to help reduce the number  
<br>
of MCA parameters that the user has to manage, therefore leading to a  
<br>
better end user experience with Open MPI.
<br>
<p>AMCA parameter set files are formated exactly like the &quot;~/.openmpi/ 
<br>
mca-params.conf&quot; configuration files. In addition when AMCA parameter  
<br>
sets are used the user may still override the parameters on the  
<br>
command line if they like.
<br>
<p>For example, let's say there is a set of MCA parameters that a user  
<br>
would need to set to get good performance out of Netpipe when using  
<br>
Open IB. They would typically run the application as:
<br>
&nbsp;&nbsp;&nbsp;shell$ mpirun -np 2 NPmpi
<br>
<p>To use the AMCA parameter set for Open IB the user would run:
<br>
&nbsp;&nbsp;&nbsp;shell$ mpirun -np 2 -am  btl-openib-benchmark NPmpi
<br>
<p>This will load a series of MCA parameters for the user. If they  
<br>
wanted to override the max_btls MCA parameter for tuning reasons they  
<br>
would run:
<br>
&nbsp;&nbsp;&nbsp;shell$ mpirun -np 2 -am  btl-openib-benchmark -mca  
<br>
btl_open_ib_max_btls 10 NPmpi
<br>
<p>AMCA parameter sets can be coupled. If we take the example above and  
<br>
wanted to also use an AMCA parameter set for TCP, the user would run:
<br>
&nbsp;&nbsp;&nbsp;shell$ mpirun -np 2 -am  btl-openib-benchmark:btl-tcp-benchmark - 
<br>
mca btl_open_ib_max_btls 10 NPmpi
<br>
<p>The AMCA parameter sets are loaded in priority order. This means that  
<br>
the OpenIB AMCA set has priority over the TCP AMCA set. So if the TCP  
<br>
AMCA sets the MCA parameter &quot;mpi_leave_pinned=0&quot; and the OpenIB AMCA  
<br>
sets it to &quot;mpi_leave_pinned=1&quot; then the latter, OpenIB version, will  
<br>
be used.
<br>
<p>Additional Related MCA parameters:
<br>
&nbsp;&nbsp;- mca_base_param_file_prefix
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(Default: NULL)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;This is the fullname of the &quot;-am&quot; mpirun option. Used to  
<br>
specify a ':' separated list of AMCA parameter set files.
<br>
&nbsp;&nbsp;- mca_base_param_file_path
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(Default: $SYSCONFDIR/amca-param-sets/:$CWD)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;The path to search for AMCA files with relative paths. A  
<br>
warning will be printed if the AMCA file cannot be found.
<br>
<p><p>If you have any problems with this new feature let me know. There  
<br>
will be an FAQ coming shortly about this I suspect.
<br>
<p>Cheers,
<br>
Josh
<br>
<p><p><pre>
----
Josh Hursey
jjhursey_at_[hidden]
<a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
----
Josh Hursey
jjhursey_at_[hidden]
<a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1324.php">Ralph Castain: "Re: [OMPI devel] Aggregate MCA Parameter Sets"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2007/02/1322.php">Tim Mattox: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r13841"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1324.php">Ralph Castain: "Re: [OMPI devel] Aggregate MCA Parameter Sets"</a>
<li><strong>Reply:</strong> <a href="1324.php">Ralph Castain: "Re: [OMPI devel] Aggregate MCA Parameter Sets"</a>
<li><strong>Reply:</strong> <a href="1326.php">George Bosilca: "Re: [OMPI devel] Aggregate MCA Parameter Sets"</a>
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

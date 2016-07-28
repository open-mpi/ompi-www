<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Mar  2 15:37:08 2007" -->
<!-- isoreceived="20070302203708" -->
<!-- sent="Fri, 2 Mar 2007 15:37:01 -0500" -->
<!-- isosent="20070302203701" -->
<!-- name="Josh Hursey" -->
<!-- email="jjhursey_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Aggregate MCA Parameter Sets" -->
<!-- id="B55AA595-F398-46FE-9BFB-43C713B5A408_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="9570B15B-A547-4E76-B267-867F28F43E00_at_cs.utk.edu" -->
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
<strong>Date:</strong> 2007-03-02 15:37:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1328.php">Jeff Squyres: "Re: [OMPI devel] Aggregate MCA Parameter Sets"</a>
<li><strong>Previous message:</strong> <a href="1326.php">George Bosilca: "Re: [OMPI devel] Aggregate MCA Parameter Sets"</a>
<li><strong>In reply to:</strong> <a href="1326.php">George Bosilca: "Re: [OMPI devel] Aggregate MCA Parameter Sets"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1328.php">Jeff Squyres: "Re: [OMPI devel] Aggregate MCA Parameter Sets"</a>
<li><strong>Reply:</strong> <a href="1328.php">Jeff Squyres: "Re: [OMPI devel] Aggregate MCA Parameter Sets"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mar 2, 2007, at 12:18 PM, George Bosilca wrote:
<br>
<p><span class="quotelev1">&gt; I think I miss the discussion about these AMCA here at UTK and about
</span><br>
<span class="quotelev1">&gt; the benefits that give us. Anyway, I have some comments about this
</span><br>
<span class="quotelev1">&gt; patch.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; You seems to add the new AMCA files into the same string as the
</span><br>
<span class="quotelev1">&gt; default MCA param file and then you call your new function
</span><br>
<span class="quotelev1">&gt; fixup_files. This function take a directory as an argument, and you
</span><br>
<span class="quotelev1">&gt; will try to match everything with the path coming from an MCA
</span><br>
<span class="quotelev1">&gt; parameter described as AMCA specific. Doesn't really make sense to
</span><br>
<span class="quotelev1">&gt; me ! If the prefix is AMCA specific then don't match the MCA param
</span><br>
<span class="quotelev1">&gt; files with it, if not then correct the help message.
</span><br>
<p>Actually I think you have miss-read the code if I understand what you  
<br>
are saying correctly. We are talking about file &quot;opal/mca/base/ 
<br>
mca_base_param.c&quot;. On Line 213 we call the fixup_files() function  
<br>
passing it the list of AMCA files (-am command line parameter), and  
<br>
the AMCA specific search path. This will resolve the AMCA files using  
<br>
this search path. The variable new_agg_path contains the AMCA  
<br>
specific path which is kept separate from the default MCA param file  
<br>
variable 'new_files'. That is until *after* we have resolved all  
<br>
relative AMCA files. At that point (Line 223) we prepend the default  
<br>
MCA param file list with the specified AMCA parameter files.
<br>
<p>So it is doing exactly as it should, using the AMCA specific path to  
<br>
resolve only the AMCA parameter sets, never the default MCA parameter  
<br>
files.
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Last thing about this patch. Having the opal MCA layer export a bool
</span><br>
<span class="quotelev1">&gt; variable just to make sure the life of orted and orterun (which in
</span><br>
<span class="quotelev1">&gt; fact don't really need it as it set it multiple times to true ???) is
</span><br>
<span class="quotelev1">&gt; much easier, isn't something that look to me like a good approach.
</span><br>
<p>It is really not making the life of the orted/orterun easier as much  
<br>
as it is suppressing a warning from being raised when the user  
<br>
specifies a relative path that needs to be resolved in the current  
<br>
working directory (e.g., -am ../adir/my-amac.conf). We need a way to  
<br>
tell the MCA layer that it shouldn't try to resolve the AMCA stuff  
<br>
because all of the environment variables are not setup properly yet.
<br>
<p>It gets a bit tricky since the orted/orterun processes have to kind  
<br>
of bootstrap the MCA layer a bit due to command line arguments. Upon  
<br>
first entering the mca_base_param_init() function the system has only  
<br>
part of the information [environment variables mostly], but nothing  
<br>
from the command line. The orted/orterun processes then parse the  
<br>
command line therefore seeding the MCA layer with the 'correct'  
<br>
information from the command line. Once we have the correct  
<br>
information we want to recache the files  
<br>
(mca_base_param_recache_files function) using the user provided  
<br>
information. So if we don't have some way of telling the MCA layer  
<br>
that it should not raise a warning about AMCA files that were not  
<br>
found it is possible that when we get certain relative paths that the  
<br>
MCA layer will raise a warning on the first pass through the library  
<br>
(because it doesn't have the complete information yet), but not on  
<br>
the second. Therefore confusing the end user about what happened.
<br>
<p>So this is a long way of saying this is the best way I could think of  
<br>
to do this without changing a whole lot of code and more interfaces  
<br>
in the MCA layer.
<br>
<p><p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In fact, I was wondering what is the real difference between having
</span><br>
<span class="quotelev1">&gt; this new AMCA stuff and extending the mca_param_files default MCA
</span><br>
<span class="quotelev1">&gt; parameter ?
</span><br>
<p>Nothing much other than the way it expresses itself to the end user.  
<br>
As I mentioned in my original email the default MCA parameter files  
<br>
and the AMCA parameter set files are the same format, and only differ  
<br>
in when they are used. The default MCA parameter files are used *all*  
<br>
the time on every run. The AMCA parameter set files are only used  
<br>
when the user explicitly asks for them on the command line. As you  
<br>
may have noticed in the code they are parsed and processed in the  
<br>
same way. But by exposing special MCA parameters for the AMCA file  
<br>
sets and the AMCA special path we can logically separate them so the  
<br>
default MCA parameter files are in one place and the AMCA parameter  
<br>
set files are in another place on the system. This way it is a bit  
<br>
clearer that the AMCA parameter sets are opt-in functionality.
<br>
<p>Certainly the end user could specify another file to use in addition  
<br>
to the default MCA parameter files (mca_param_files), but then they  
<br>
must also specify the other locations that already exist in that path  
<br>
(e.g., $HOME/.openmpi/mca-params.conf:$SYSCONFDIR/openmpi-mca- 
<br>
params.conf). This is a short cut in a sense, so the end user doesn't  
<br>
have to know all of this uglyness every time they want to run a  
<br>
benchmark, or ...
<br>
<p>Hopefully that explains things a bit more, sorry if it was overly  
<br>
confusing.
<br>
<p>-- Josh
<br>
<p><p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt;    george.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Mar 1, 2007, at 8:52 AM, Josh Hursey wrote:
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
<span class="quotelev1">&gt; &quot;Half of what I say is meaningless; but I say it so that the other
</span><br>
<span class="quotelev1">&gt; half may reach you&quot;
</span><br>
<span class="quotelev1">&gt;                                    Kahlil Gibran
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
<li><strong>Next message:</strong> <a href="1328.php">Jeff Squyres: "Re: [OMPI devel] Aggregate MCA Parameter Sets"</a>
<li><strong>Previous message:</strong> <a href="1326.php">George Bosilca: "Re: [OMPI devel] Aggregate MCA Parameter Sets"</a>
<li><strong>In reply to:</strong> <a href="1326.php">George Bosilca: "Re: [OMPI devel] Aggregate MCA Parameter Sets"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1328.php">Jeff Squyres: "Re: [OMPI devel] Aggregate MCA Parameter Sets"</a>
<li><strong>Reply:</strong> <a href="1328.php">Jeff Squyres: "Re: [OMPI devel] Aggregate MCA Parameter Sets"</a>
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

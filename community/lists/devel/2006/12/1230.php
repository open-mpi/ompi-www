<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Dec  8 08:52:10 2006" -->
<!-- isoreceived="20061208135210" -->
<!-- sent="Fri, 08 Dec 2006 08:53:00 -0500" -->
<!-- isosent="20061208135300" -->
<!-- name="Patrick Jessee" -->
<!-- email="pj_at_[hidden]" -->
<!-- subject="[OMPI devel] issues with mpirun --prefix syntax" -->
<!-- id="45796E3C.8040906_at_fluent.com" -->
<!-- charset="utf-8" -->
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
<strong>From:</strong> Patrick Jessee (<em>pj_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-12-08 08:53:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1231.php">Greg Watson: "[OMPI devel] MPI_Init() corrupts argc on Linux"</a>
<li><strong>Previous message:</strong> <a href="1229.php">Jeff Squyres: "Re: [OMPI devel] clarification regarding optimization of MPI collective calls"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1234.php">Jeff Squyres: "Re: [OMPI devel] issues with mpirun --prefix syntax"</a>
<li><strong>Reply:</strong> <a href="1234.php">Jeff Squyres: "Re: [OMPI devel] issues with mpirun --prefix syntax"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello.  For OpenMPI 1.1.2, I've come across a situation where the 
<br>
--prefix syntax does not seem to be working.  I've investigated the 
<br>
issue by stepping through the mpirun startup in a debugger.  Below is a 
<br>
summary of the problem and details about the investigation (along with a 
<br>
prospective fix).
<br>
<p>Summary of  problem
<br>
===============
<br>
<p>When starting a openMPI run with the --prefix option, the MPI 
<br>
application does not start up correctly in certain situations.   An 
<br>
important point is that this problem behavior is masked (and not seen) 
<br>
if the openMPI libraries are available at the compile/install-time 
<br>
location defined by OPAL_PKGLIBDIR (defined in 
<br>
opal/include/opal/install_dirs.h).  So in debugging the problem, it is 
<br>
important to move the openMPI installation from the installed location, 
<br>
and then set the --prefix value to the new location.   In addition, 
<br>
LD_LIBRARY_PATH needs to be set to the new location so mpirun can find 
<br>
liborte.so and libopal.so at program load time (--prefix can't help 
<br>
mpirun with liborte.so and libopal.so because (a) these libs are 
<br>
dynamically linked into mpirun and are needed at program load time, and 
<br>
(b) the --prefix arg isn't processed until after load time.  Thus 
<br>
LD_LIBRARY_PATH is needed for mpirun, but this is tangential).
<br>
<p>The behavior that is see is the following output:
<br>
<p>--------------------------------------------------------------------------
<br>
It looks like orte_init failed for some reason; your parallel process is
<br>
likely to abort.  There are many reasons that a parallel process can
<br>
fail during orte_init; some of which are due to configuration or
<br>
environment problems.  This failure appears to be an internal failure;
<br>
here's some additional information (which may only be relevant to an
<br>
Open MPI developer):
<br>
<p>orte_sds_base_select failed
<br>
--&gt; Returned value -13 instead of ORTE_SUCCESS
<br>
:
<br>
:
<br>
--------------------------------------------------------------------------
<br>
Open RTE was unable to initialize properly.  The error occurred while
<br>
attempting to orte_init().  Returned value -13 instead of ORTE_SUCCESS.
<br>
--------------------------------------------------------------------------
<br>
<p><p>Investigation of the problem
<br>
===================
<br>
<p>As mentioned before, I've looked at mpirun in the debugger.  The 
<br>
instance of mpirun (and the MPI app) find the dynamically linked 
<br>
libraries (liborte.so, libopal.so) just fine, but they do not locate the 
<br>
dynamically loaded ones (the ones in lib/openmpi such as 
<br>
mca_paffinity_linux.so, etc.).  The --prefix directory does not seem to 
<br>
be getting used to open the libraries in lib/openmpi.
<br>
<p>It appears that the location to search is getting set in mca_base_open.c 
<br>
around line 68 (1.1.2):
<br>
<p>asprintf(&amp;value, &quot;%s:~/.openmpi/components&quot;, OPAL_PKGLIBDIR);
<br>
mca_base_param_component_path =
<br>
&nbsp;&nbsp;mca_base_param_reg_string_name(&quot;mca&quot;, &quot;component_path&quot;,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&quot;Path where to look for Open MPI and 
<br>
ORTE components&quot;,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;false, false, value, NULL);
<br>
<p><p>Here, OPAL_PKGLIBDIR is a fixed, compile-time location.  It appears that 
<br>
the --prefix directory (actually &lt;prefix_dir&gt;/lib/openmpi) needs to be 
<br>
appended, if not prepended, to the component_path.  Alternatively, the 
<br>
static OPAL_PKGLIBDIR directory could just be replaced by the runtime 
<br>
value of &lt;prefix_dir&gt;/lib/openmpi.
<br>
<p>I've compiled in a quick fix to libopal.so to see if the approach 
<br>
addressed the issue.  I didn't see how to get access to the --prefix 
<br>
directory at this point, so I just prepended genenv(&quot;LD_LIBRARY_PATH&quot;) 
<br>
to &quot;value&quot; and added &lt;prefix_dir&gt;/lib/openmpi to LD_LIBRARY_PATH before 
<br>
starting the app (note: this is just a way for verifying that if the 
<br>
--prefix directory was used here, it would address the issue; this is 
<br>
not a proposed solution.  The &lt;prefix_dir&gt;/lib/openmpi should be used 
<br>
directly).  Anyway, this fixed the issue and the application was able so 
<br>
start.
<br>
<p>In applying this fix, I also found that is was not only important for 
<br>
mca_base_param_component_path to include the &lt;prefix_dir&gt;/lib/openmpi 
<br>
directory in the instances of mpirun and the MPI app, but also in all 
<br>
instances of orted before they dynamically load libraries.
<br>
<pre>
----
In summary, it seems that this issue can be resolved by applying the 
--prefix directory (&lt;prefix_dir&gt;/lib/openmpi) to 
mca_base_param_component_path in instances of mpirun, orted, and the MPI 
app.
Any help in getting this fix implemented in the code base would be very 
much appreciated, and I'll be happy to provide any more information or 
help.
Regards,
Patrick
P.S.  Even with the fix, a (non-fatal) message is printed.  It's 
probably a tangential issue, but thought it was worth mentioning. Again, 
the --prefix directory probably needs to be used somewhere in place of a 
static directory.  The message is:
--------------------------------------------------------------------------
Sorry!  You were supposed to get help about:
  rds:no-hostfile
from the file:
  help-rds-hostfile.txt
But I couldn't find any file matching that name.  Sorry!
--------------------------------------------------------------------------
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1231.php">Greg Watson: "[OMPI devel] MPI_Init() corrupts argc on Linux"</a>
<li><strong>Previous message:</strong> <a href="1229.php">Jeff Squyres: "Re: [OMPI devel] clarification regarding optimization of MPI collective calls"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1234.php">Jeff Squyres: "Re: [OMPI devel] issues with mpirun --prefix syntax"</a>
<li><strong>Reply:</strong> <a href="1234.php">Jeff Squyres: "Re: [OMPI devel] issues with mpirun --prefix syntax"</a>
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

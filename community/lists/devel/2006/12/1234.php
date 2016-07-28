<? include("../../include/msg-header.inc"); ?>
<!-- received="Sat Dec 16 00:15:12 2006" -->
<!-- isoreceived="20061216051512" -->
<!-- sent="Fri, 15 Dec 2006 19:16:36 -0500" -->
<!-- isosent="20061216001636" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] issues with mpirun --prefix syntax" -->
<!-- id="329B3967-9E13-4667-BA90-76DD91B9F061_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="45796E3C.8040906_at_fluent.com" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-12-15 19:16:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1235.php">Jeff Squyres: "[OMPI devel] Open MPI web site outage"</a>
<li><strong>Previous message:</strong> <a href="1233.php">Roland Dreier: "Re: [OMPI devel] MPI_Init() corrupts argc on Linux"</a>
<li><strong>In reply to:</strong> <a href="1230.php">Patrick Jessee: "[OMPI devel] issues with mpirun --prefix syntax"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1236.php">Patrick Jessee: "Re: [OMPI devel] issues with mpirun --prefix syntax"</a>
<li><strong>Reply:</strong> <a href="1236.php">Patrick Jessee: "Re: [OMPI devel] issues with mpirun --prefix syntax"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Greetings Patrick.  Many thanks for the detailed run-down; sorry I  
<br>
didn't reply earlier.
<br>
<p>This is quite definitely a known problem, and I'm pretty sure we have  
<br>
an open ticket on it (I'm on a plane right now and can't check the  
<br>
web-based bug tracker).  We have a solution in mind for the issue,  
<br>
but it hadn't been done yet mainly because it hadn't bubbled up high  
<br>
enough in priority / no one had the time to code it up.
<br>
<p>How high of a priority is the ability to re-home an OMPI installation  
<br>
for you?
<br>
<p><p>On Dec 8, 2006, at 8:53 AM, Patrick Jessee wrote:
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hello.  For OpenMPI 1.1.2, I've come across a situation where the -- 
</span><br>
<span class="quotelev1">&gt; prefix syntax does not seem to be working.  I've investigated the  
</span><br>
<span class="quotelev1">&gt; issue by stepping through the mpirun startup in a debugger.  Below  
</span><br>
<span class="quotelev1">&gt; is a summary of the problem and details about the investigation  
</span><br>
<span class="quotelev1">&gt; (along with a prospective fix).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Summary of  problem
</span><br>
<span class="quotelev1">&gt; ===============
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; When starting a openMPI run with the --prefix option, the MPI  
</span><br>
<span class="quotelev1">&gt; application does not start up correctly in certain situations.   An  
</span><br>
<span class="quotelev1">&gt; important point is that this problem behavior is masked (and not  
</span><br>
<span class="quotelev1">&gt; seen) if the openMPI libraries are available at the compile/install- 
</span><br>
<span class="quotelev1">&gt; time location defined by OPAL_PKGLIBDIR (defined in opal/include/ 
</span><br>
<span class="quotelev1">&gt; opal/install_dirs.h).  So in debugging the problem, it is important  
</span><br>
<span class="quotelev1">&gt; to move the openMPI installation from the installed location, and  
</span><br>
<span class="quotelev1">&gt; then set the --prefix value to the new location.   In addition,  
</span><br>
<span class="quotelev1">&gt; LD_LIBRARY_PATH needs to be set to the new location so mpirun can  
</span><br>
<span class="quotelev1">&gt; find liborte.so and libopal.so at program load time (--prefix can't  
</span><br>
<span class="quotelev1">&gt; help mpirun with liborte.so and libopal.so because (a) these libs  
</span><br>
<span class="quotelev1">&gt; are dynamically linked into mpirun and are needed at program load  
</span><br>
<span class="quotelev1">&gt; time, and (b) the --prefix arg isn't processed until after load  
</span><br>
<span class="quotelev1">&gt; time.  Thus LD_LIBRARY_PATH is needed for mpirun, but this is  
</span><br>
<span class="quotelev1">&gt; tangential).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The behavior that is see is the following output:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ---------------------------------------------------------------------- 
</span><br>
<span class="quotelev1">&gt; ----
</span><br>
<span class="quotelev1">&gt; It looks like orte_init failed for some reason; your parallel  
</span><br>
<span class="quotelev1">&gt; process is
</span><br>
<span class="quotelev1">&gt; likely to abort.  There are many reasons that a parallel process can
</span><br>
<span class="quotelev1">&gt; fail during orte_init; some of which are due to configuration or
</span><br>
<span class="quotelev1">&gt; environment problems.  This failure appears to be an internal failure;
</span><br>
<span class="quotelev1">&gt; here's some additional information (which may only be relevant to an
</span><br>
<span class="quotelev1">&gt; Open MPI developer):
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; orte_sds_base_select failed
</span><br>
<span class="quotelev1">&gt; --&gt; Returned value -13 instead of ORTE_SUCCESS
</span><br>
<span class="quotelev1">&gt; :
</span><br>
<span class="quotelev1">&gt; :
</span><br>
<span class="quotelev1">&gt; ---------------------------------------------------------------------- 
</span><br>
<span class="quotelev1">&gt; ----
</span><br>
<span class="quotelev1">&gt; Open RTE was unable to initialize properly.  The error occurred while
</span><br>
<span class="quotelev1">&gt; attempting to orte_init().  Returned value -13 instead of  
</span><br>
<span class="quotelev1">&gt; ORTE_SUCCESS.
</span><br>
<span class="quotelev1">&gt; ---------------------------------------------------------------------- 
</span><br>
<span class="quotelev1">&gt; ----
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Investigation of the problem
</span><br>
<span class="quotelev1">&gt; ===================
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; As mentioned before, I've looked at mpirun in the debugger.  The  
</span><br>
<span class="quotelev1">&gt; instance of mpirun (and the MPI app) find the dynamically linked  
</span><br>
<span class="quotelev1">&gt; libraries (liborte.so, libopal.so) just fine, but they do not  
</span><br>
<span class="quotelev1">&gt; locate the dynamically loaded ones (the ones in lib/openmpi such as  
</span><br>
<span class="quotelev1">&gt; mca_paffinity_linux.so, etc.).  The --prefix directory does not  
</span><br>
<span class="quotelev1">&gt; seem to be getting used to open the libraries in lib/openmpi.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It appears that the location to search is getting set in  
</span><br>
<span class="quotelev1">&gt; mca_base_open.c around line 68 (1.1.2):
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; asprintf(&amp;value, &quot;%s:~/.openmpi/components&quot;, OPAL_PKGLIBDIR);
</span><br>
<span class="quotelev1">&gt; mca_base_param_component_path =
</span><br>
<span class="quotelev1">&gt;  mca_base_param_reg_string_name(&quot;mca&quot;, &quot;component_path&quot;,
</span><br>
<span class="quotelev1">&gt;                                 &quot;Path where to look for Open MPI  
</span><br>
<span class="quotelev1">&gt; and ORTE components&quot;,
</span><br>
<span class="quotelev1">&gt;                                 false, false, value, NULL);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Here, OPAL_PKGLIBDIR is a fixed, compile-time location.  It appears  
</span><br>
<span class="quotelev1">&gt; that the --prefix directory (actually &lt;prefix_dir&gt;/lib/openmpi)  
</span><br>
<span class="quotelev1">&gt; needs to be appended, if not prepended, to the component_path.   
</span><br>
<span class="quotelev1">&gt; Alternatively, the static OPAL_PKGLIBDIR directory could just be  
</span><br>
<span class="quotelev1">&gt; replaced by the runtime value of &lt;prefix_dir&gt;/lib/openmpi.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I've compiled in a quick fix to libopal.so to see if the approach  
</span><br>
<span class="quotelev1">&gt; addressed the issue.  I didn't see how to get access to the -- 
</span><br>
<span class="quotelev1">&gt; prefix directory at this point, so I just prepended genenv 
</span><br>
<span class="quotelev1">&gt; (&quot;LD_LIBRARY_PATH&quot;) to &quot;value&quot; and added &lt;prefix_dir&gt;/lib/openmpi  
</span><br>
<span class="quotelev1">&gt; to LD_LIBRARY_PATH before starting the app (note: this is just a  
</span><br>
<span class="quotelev1">&gt; way for verifying that if the --prefix directory was used here, it  
</span><br>
<span class="quotelev1">&gt; would address the issue; this is not a proposed solution.  The  
</span><br>
<span class="quotelev1">&gt; &lt;prefix_dir&gt;/lib/openmpi should be used directly).  Anyway, this  
</span><br>
<span class="quotelev1">&gt; fixed the issue and the application was able so start.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In applying this fix, I also found that is was not only important  
</span><br>
<span class="quotelev1">&gt; for mca_base_param_component_path to include the &lt;prefix_dir&gt;/lib/ 
</span><br>
<span class="quotelev1">&gt; openmpi directory in the instances of mpirun and the MPI app, but  
</span><br>
<span class="quotelev1">&gt; also in all instances of orted before they dynamically load libraries.
</span><br>
<span class="quotelev1">&gt; ----
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In summary, it seems that this issue can be resolved by applying  
</span><br>
<span class="quotelev1">&gt; the --prefix directory (&lt;prefix_dir&gt;/lib/openmpi) to  
</span><br>
<span class="quotelev1">&gt; mca_base_param_component_path in instances of mpirun, orted, and  
</span><br>
<span class="quotelev1">&gt; the MPI app.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Any help in getting this fix implemented in the code base would be  
</span><br>
<span class="quotelev1">&gt; very much appreciated, and I'll be happy to provide any more  
</span><br>
<span class="quotelev1">&gt; information or help.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Patrick
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; P.S.  Even with the fix, a (non-fatal) message is printed.  It's  
</span><br>
<span class="quotelev1">&gt; probably a tangential issue, but thought it was worth mentioning.  
</span><br>
<span class="quotelev1">&gt; Again, the --prefix directory probably needs to be used somewhere  
</span><br>
<span class="quotelev1">&gt; in place of a static directory.  The message is:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ---------------------------------------------------------------------- 
</span><br>
<span class="quotelev1">&gt; ----
</span><br>
<span class="quotelev1">&gt; Sorry!  You were supposed to get help about:
</span><br>
<span class="quotelev1">&gt;  rds:no-hostfile
</span><br>
<span class="quotelev1">&gt; from the file:
</span><br>
<span class="quotelev1">&gt;  help-rds-hostfile.txt
</span><br>
<span class="quotelev1">&gt; But I couldn't find any file matching that name.  Sorry!
</span><br>
<span class="quotelev1">&gt; ---------------------------------------------------------------------- 
</span><br>
<span class="quotelev1">&gt; ----
</span><br>
<span class="quotelev1">&gt; &lt;pj.vcf&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
Server Virtualization Business Unit
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1235.php">Jeff Squyres: "[OMPI devel] Open MPI web site outage"</a>
<li><strong>Previous message:</strong> <a href="1233.php">Roland Dreier: "Re: [OMPI devel] MPI_Init() corrupts argc on Linux"</a>
<li><strong>In reply to:</strong> <a href="1230.php">Patrick Jessee: "[OMPI devel] issues with mpirun --prefix syntax"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1236.php">Patrick Jessee: "Re: [OMPI devel] issues with mpirun --prefix syntax"</a>
<li><strong>Reply:</strong> <a href="1236.php">Patrick Jessee: "Re: [OMPI devel] issues with mpirun --prefix syntax"</a>
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

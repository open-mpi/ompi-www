<?
$subject_val = "Re: [OMPI devel] OMPI_MCA_opal_set_max_sys_limits";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Sep  1 02:51:52 2011" -->
<!-- isoreceived="20110901065152" -->
<!-- sent="Wed, 31 Aug 2011 23:52:12 -0700" -->
<!-- isosent="20110901065212" -->
<!-- name="Eugene Loh" -->
<!-- email="eugene.loh_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] OMPI_MCA_opal_set_max_sys_limits" -->
<!-- id="4E5F2B9C.5020309_at_oracle.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="D960F306-5DED-44B9-8A80-A4B9B71E78A1_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] OMPI_MCA_opal_set_max_sys_limits<br>
<strong>From:</strong> Eugene Loh (<em>eugene.loh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-09-01 02:52:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9739.php">Ralph Castain: "Re: [OMPI devel] OMPI_MCA_opal_set_max_sys_limits"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2011/08/9737.php">Jeff Squyres: "[OMPI devel] RFC: make hwloc be a 1st-class citizen"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2011/08/9735.php">Ralph Castain: "Re: [OMPI devel] OMPI_MCA_opal_set_max_sys_limits"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9739.php">Ralph Castain: "Re: [OMPI devel] OMPI_MCA_opal_set_max_sys_limits"</a>
<li><strong>Reply:</strong> <a href="9739.php">Ralph Castain: "Re: [OMPI devel] OMPI_MCA_opal_set_max_sys_limits"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 8/31/2011 4:48 AM, Ralph Castain wrote:
<br>
<span class="quotelev1">&gt; Perhaps it would help if you had clearly stated your concern.
</span><br>
Yeah.  It would have helped had I clearly understood what was going on.  
<br>
Most of all, that way I wouldn't have had to ask any questions!  :^)
<br>
<span class="quotelev1">&gt;  From this description, I gather your concern is -not- that remote processes don't see the setting, but that the remote -orteds- don't see it.
</span><br>
Let's dumb this down a notch for my sake.  Let's say I want to run a job 
<br>
with the TCP BTL and have lots of processes.  I hit a descriptor limit 
<br>
and so my friend tells me to use the MCA parameter 
<br>
opal_set_max_sys_limits.  So, is the point that while most MCA 
<br>
parameters can be set on the mpirun command line *OR* in param files 
<br>
*OR* with environment variables, in this case the environment-variable 
<br>
setting should be avoided?
<br>
<span class="quotelev1">&gt; Yes, I'm aware of that issue for rsh-based launches. It stems from rsh not allowing one to extend the environment. If you place the param on the cmd line, then it gets propagated because we collect and extend the cmd line params. If you place it in the environment, then we don't - because (as we have repeatedly explained to people) we cannot pass all relevant envars on the cmd line due to length restrictions. We don't have this issue with cmd line params because (the thinking goes) it already fit on the cmd line.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So for rsh-like launches, there is an unavoidable discrepancy. It's one reason why we have both system-level and personal-level MCA param files.
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9739.php">Ralph Castain: "Re: [OMPI devel] OMPI_MCA_opal_set_max_sys_limits"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2011/08/9737.php">Jeff Squyres: "[OMPI devel] RFC: make hwloc be a 1st-class citizen"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2011/08/9735.php">Ralph Castain: "Re: [OMPI devel] OMPI_MCA_opal_set_max_sys_limits"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9739.php">Ralph Castain: "Re: [OMPI devel] OMPI_MCA_opal_set_max_sys_limits"</a>
<li><strong>Reply:</strong> <a href="9739.php">Ralph Castain: "Re: [OMPI devel] OMPI_MCA_opal_set_max_sys_limits"</a>
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

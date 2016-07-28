<?
$subject_val = "Re: [OMPI devel] why does --rankfile need hostlist?";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Jun 21 07:29:37 2009" -->
<!-- isoreceived="20090621112937" -->
<!-- sent="Sun, 21 Jun 2009 07:28:39 -0400" -->
<!-- isosent="20090621112839" -->
<!-- name="Terry Dontje" -->
<!-- email="Terry.Dontje_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] why does --rankfile need hostlist?" -->
<!-- id="4A3E1967.8000605_at_sun.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="71d2d8cc0906191943n677e2bc8h7851788b82ac847e_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] why does --rankfile need hostlist?<br>
<strong>From:</strong> Terry Dontje (<em>Terry.Dontje_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-06-21 07:28:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6292.php">Jeff Squyres: "Re: [OMPI devel] MPI_REAL16"</a>
<li><strong>Previous message:</strong> <a href="6290.php">David Robertson: "Re: [OMPI devel] MPI_REAL16"</a>
<li><strong>In reply to:</strong> <a href="6287.php">Ralph Castain: "Re: [OMPI devel] why does --rankfile need hostlist?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6293.php">Ralph Castain: "Re: [OMPI devel] why does --rankfile need hostlist?"</a>
<li><strong>Reply:</strong> <a href="6293.php">Ralph Castain: "Re: [OMPI devel] why does --rankfile need hostlist?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Being a part of these discussions I can understand your reticence to 
<br>
reopen this discussion.  However, I think this is a major usability 
<br>
issue with this feature which actually is fairly important in order to 
<br>
get things to run performant. Which IMO is important.
<br>
<p>That being said I think there are one of two things that could be done 
<br>
to mitigate the issue.
<br>
<p>1.  To eliminate the element of surprise by changing mpirun to eat 
<br>
rankfile without the hostfile.
<br>
2.  To change the error message to something understandable by the user 
<br>
such that they
<br>
know they might be missing the hostfile option.
<br>
<p>Again I understand this topic is frustrating and there are some 
<br>
boundaries with the design that make these two option orthogonal to each 
<br>
other but I really believe we need to make the rankfile option something 
<br>
that is easily usable by our users.
<br>
<p><p>--td
<br>
<p>Ralph Castain wrote:
<br>
<span class="quotelev1">&gt; Having gone around in circles on hostfile-related issues for over five 
</span><br>
<span class="quotelev1">&gt; years now, I honestly have little motivation to re-open the entire 
</span><br>
<span class="quotelev1">&gt; discussion again. It doesn't seem to be that daunting a requirement 
</span><br>
<span class="quotelev1">&gt; for those who are using it, so I'm inclined to just leave well enough 
</span><br>
<span class="quotelev1">&gt; alone.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; :-)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Fri, Jun 19, 2009 at 2:21 PM, Eugene Loh &lt;Eugene.Loh_at_[hidden] 
</span><br>
<span class="quotelev1">&gt; &lt;mailto:Eugene.Loh_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Ralph Castain wrote:
</span><br>
<span class="quotelev2">&gt;&gt;     The two files have a slightly different format
</span><br>
<span class="quotelev1">&gt;     Agreed.
</span><br>
<span class="quotelev2">&gt;&gt;     and completely different meaning.
</span><br>
<span class="quotelev1">&gt;     Somewhat agreed.  They're both related to mapping processes onto a
</span><br>
<span class="quotelev1">&gt;     cluster.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     The hostfile specifies how many slots are on a node. The rankfile
</span><br>
<span class="quotelev2">&gt;&gt;     specifies a rank and what node/slot it is to be mapped onto.
</span><br>
<span class="quotelev1">&gt;     Agreed.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     Rankfiles can use relative node indexing and refer to nodes
</span><br>
<span class="quotelev2">&gt;&gt;     received from a resource manager - i.e., without any hostfile.
</span><br>
<span class="quotelev1">&gt;     This is the main part I'm concerned about.  E.g.,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     % cat rankfile
</span><br>
<span class="quotelev1">&gt;     rank 0=node0 slot=0
</span><br>
<span class="quotelev1">&gt;     rank 1=node1 slot=0
</span><br>
<span class="quotelev1">&gt;     % mpirun -np 2 -rf rankfile ./a.out
</span><br>
<span class="quotelev1">&gt;     --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;     Rankfile claimed host node1 that was not allocated or
</span><br>
<span class="quotelev1">&gt;     oversubscribed it's slots:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;     [node0:14611] [[61560,0],0] ORTE_ERROR_LOG: Bad parameter in file
</span><br>
<span class="quotelev1">&gt;     rmaps_rank_file.c at line 107
</span><br>
<span class="quotelev1">&gt;     [node0:14611] [[61560,0],0] ORTE_ERROR_LOG: Bad parameter in file
</span><br>
<span class="quotelev1">&gt;     base/rmaps_base_map_job.c at line 86
</span><br>
<span class="quotelev1">&gt;     [node0:14611] [[61560,0],0] ORTE_ERROR_LOG: Bad parameter in file
</span><br>
<span class="quotelev1">&gt;     base/plm_base_launch_support.c at line 86
</span><br>
<span class="quotelev1">&gt;     [node0:14611] [[61560,0],0] ORTE_ERROR_LOG: Bad parameter in file
</span><br>
<span class="quotelev1">&gt;     plm_rsh_module.c at line 1016
</span><br>
<span class="quotelev1">&gt;     % mpirun -np 2 -host node0,node1 -rf rankfile ./a.out
</span><br>
<span class="quotelev1">&gt;     0 on node0
</span><br>
<span class="quotelev1">&gt;     1 on node1
</span><br>
<span class="quotelev1">&gt;     done
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     It seems to me that the rankfile has sufficient information to
</span><br>
<span class="quotelev1">&gt;     express what I want it to do.  But mpirun won't accept this.  To
</span><br>
<span class="quotelev1">&gt;     fix this, I have to, e.g., supply/maintain/specify redundant
</span><br>
<span class="quotelev1">&gt;     information in a hostfile or host list.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     So the files are intentionally quite different. Trying to combine
</span><br>
<span class="quotelev2">&gt;&gt;     them would be rather ugly.
</span><br>
<span class="quotelev1">&gt;     Right.  And my issue is that I'm forced to use both when I only
</span><br>
<span class="quotelev1">&gt;     want rankfile functionality.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     On Thu, Jun 18, 2009 at 1:52 PM, Eugene Loh &lt;Eugene.Loh_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;     &lt;mailto:Eugene.Loh_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         In order to use &quot;mpirun --rankfile&quot;, I also need to specify
</span><br>
<span class="quotelev2">&gt;&gt;         hosts/hostlist.  But that information is redundant with what
</span><br>
<span class="quotelev2">&gt;&gt;         I provide in the rankfile.  So, from a user's point of view,
</span><br>
<span class="quotelev2">&gt;&gt;         this strikes me as broken.  Yes?  Should I file a ticket, or
</span><br>
<span class="quotelev2">&gt;&gt;         am I missing something here about this functionality?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     _______________________________________________
</span><br>
<span class="quotelev1">&gt;     devel mailing list
</span><br>
<span class="quotelev1">&gt;     devel_at_[hidden] &lt;mailto:devel_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;     <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ------------------------------------------------------------------------
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
<span class="quotelev1">&gt;   
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6292.php">Jeff Squyres: "Re: [OMPI devel] MPI_REAL16"</a>
<li><strong>Previous message:</strong> <a href="6290.php">David Robertson: "Re: [OMPI devel] MPI_REAL16"</a>
<li><strong>In reply to:</strong> <a href="6287.php">Ralph Castain: "Re: [OMPI devel] why does --rankfile need hostlist?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6293.php">Ralph Castain: "Re: [OMPI devel] why does --rankfile need hostlist?"</a>
<li><strong>Reply:</strong> <a href="6293.php">Ralph Castain: "Re: [OMPI devel] why does --rankfile need hostlist?"</a>
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

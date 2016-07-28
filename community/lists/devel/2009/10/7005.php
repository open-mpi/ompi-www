<?
$subject_val = "Re: [OMPI devel] A minor nit in the mpirun manpage";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Oct 22 06:58:29 2009" -->
<!-- isoreceived="20091022105829" -->
<!-- sent="Thu, 22 Oct 2009 06:57:20 -0400" -->
<!-- isosent="20091022105720" -->
<!-- name="Terry Dontje" -->
<!-- email="Terry.Dontje_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] A minor nit in the mpirun manpage" -->
<!-- id="4AE03A90.3010408_at_sun.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="4ADFDD7E.8050708_at_lbl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI devel] A minor nit in the mpirun manpage<br>
<strong>From:</strong> Terry Dontje (<em>Terry.Dontje_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-10-22 06:57:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7006.php">Jeff Squyres: "Re: [OMPI devel] 0.9.1rc2 is available"</a>
<li><strong>Previous message:</strong> <a href="7004.php">Ashley Pittman: "[OMPI devel] Stack traces and message queues in MTT results."</a>
<li><strong>In reply to:</strong> <a href="6999.php">Paul H. Hargrove: "[OMPI devel] A minor nit in the mpirun manpage"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Paul H. Hargrove wrote:
<br>
<span class="quotelev1">&gt; Sorry if this has been fixed for 1.3.4, but in the manpge for mpirun 
</span><br>
<span class="quotelev1">&gt; in 1.3.3 I noticed the following in the &quot;MCA&quot; section of the manpage:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;       Note: The -mca switch is simply a shortcut for  setting  
</span><br>
<span class="quotelev1">&gt; environment  variables.   The  same
</span><br>
<span class="quotelev1">&gt;       effect  may  be  accomplished  by setting corresponding 
</span><br>
<span class="quotelev1">&gt; environment variables before running
</span><br>
<span class="quotelev1">&gt;       mpirun.  The form of the environment variables that Open MPI 
</span><br>
<span class="quotelev1">&gt; sets are:
</span><br>
<span class="quotelev1">&gt;             OMPI_&lt;key&gt;=&lt;value&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; However, as &lt;key&gt; is defined the env var one must set is actually
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;             OMPI_MCA_&lt;key&gt;=&lt;value&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Paul
</span><br>
<span class="quotelev1">&gt;
</span><br>
Yes, that is fixed in 1.3.4.
<br>
<p>--td
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7006.php">Jeff Squyres: "Re: [OMPI devel] 0.9.1rc2 is available"</a>
<li><strong>Previous message:</strong> <a href="7004.php">Ashley Pittman: "[OMPI devel] Stack traces and message queues in MTT results."</a>
<li><strong>In reply to:</strong> <a href="6999.php">Paul H. Hargrove: "[OMPI devel] A minor nit in the mpirun manpage"</a>
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

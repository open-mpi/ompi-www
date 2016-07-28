<?
$subject_val = "Re: [OMPI devel] [patch] MPI_Comm_Spawn(), parent name is empty";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jan 20 10:34:12 2010" -->
<!-- isoreceived="20100120153412" -->
<!-- sent="Wed, 20 Jan 2010 08:34:04 -0700" -->
<!-- isosent="20100120153404" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [patch] MPI_Comm_Spawn(), parent name is empty" -->
<!-- id="5A740F55-9383-42AF-82B5-BDDF430E3973_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20100120155430.79f2affe_at_frecb007984" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [patch] MPI_Comm_Spawn(), parent name is empty<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-01-20 10:34:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7332.php">yaohui: "[OMPI devel] how to implement and control a specific network device in openMPI"</a>
<li><strong>Previous message:</strong> <a href="7330.php">Guillaume Thouvenin: "[OMPI devel] [patch] MPI_Comm_Spawn(), parent name is empty"</a>
<li><strong>In reply to:</strong> <a href="7330.php">Guillaume Thouvenin: "[OMPI devel] [patch] MPI_Comm_Spawn(), parent name is empty"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Fascinating - thanks for spotting it! That code hasn't changed in a very long time, so I guess nobody has been looking at the name!
<br>
<p>:-)
<br>
<p>Fixed in the trunk - will add it to the 1.4.2 list.
<br>
<p>On Jan 20, 2010, at 7:54 AM, Guillaume Thouvenin wrote:
<br>
<p><span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; When calling MPI_Comm_get_name() on the predefined communicator
</span><br>
<span class="quotelev1">&gt; MPI_COMM_PARENT after a call to MPI_Comm_spawn(), we are expecting the
</span><br>
<span class="quotelev1">&gt; name MPI_COMM_PARENT as stated into the MPI Standard 2.2. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; In practice, MPI_Comm_get_name() returns an empty string. As far as I
</span><br>
<span class="quotelev1">&gt; understand the problem, it seems that there is a bug into dyn_init().
</span><br>
<span class="quotelev1">&gt; The name is set but the flags is not updated. The following patch fixes
</span><br>
<span class="quotelev1">&gt; the problem.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Guillaume
</span><br>
<span class="quotelev1">&gt; ---
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; diff --git a/ompi/mca/dpm/orte/dpm_orte.c b/ompi/mca/dpm/orte/dpm_orte.c
</span><br>
<span class="quotelev1">&gt; --- a/ompi/mca/dpm/orte/dpm_orte.c
</span><br>
<span class="quotelev1">&gt; +++ b/ompi/mca/dpm/orte/dpm_orte.c
</span><br>
<span class="quotelev1">&gt; @@ -965,6 +965,7 @@ static int dyn_init(void)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     /* Set name for debugging purposes */
</span><br>
<span class="quotelev1">&gt;     snprintf(newcomm-&gt;c_name, MPI_MAX_OBJECT_NAME, &quot;MPI_COMM_PARENT&quot;);
</span><br>
<span class="quotelev1">&gt; +    newcomm-&gt;c_flags |= OMPI_COMM_NAMEISSET;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     return OMPI_SUCCESS;
</span><br>
<span class="quotelev1">&gt; }
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
<li><strong>Next message:</strong> <a href="7332.php">yaohui: "[OMPI devel] how to implement and control a specific network device in openMPI"</a>
<li><strong>Previous message:</strong> <a href="7330.php">Guillaume Thouvenin: "[OMPI devel] [patch] MPI_Comm_Spawn(), parent name is empty"</a>
<li><strong>In reply to:</strong> <a href="7330.php">Guillaume Thouvenin: "[OMPI devel] [patch] MPI_Comm_Spawn(), parent name is empty"</a>
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

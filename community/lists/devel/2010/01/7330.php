<?
$subject_val = "[OMPI devel] [patch] MPI_Comm_Spawn(), parent name is empty";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jan 20 09:53:52 2010" -->
<!-- isoreceived="20100120145352" -->
<!-- sent="Wed, 20 Jan 2010 15:54:30 +0100" -->
<!-- isosent="20100120145430" -->
<!-- name="Guillaume Thouvenin" -->
<!-- email="guillaume.thouvenin_at_[hidden]" -->
<!-- subject="[OMPI devel] [patch] MPI_Comm_Spawn(), parent name is empty" -->
<!-- id="20100120155430.79f2affe_at_frecb007984" -->
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
<strong>Subject:</strong> [OMPI devel] [patch] MPI_Comm_Spawn(), parent name is empty<br>
<strong>From:</strong> Guillaume Thouvenin (<em>guillaume.thouvenin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-01-20 09:54:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7331.php">Ralph Castain: "Re: [OMPI devel] [patch] MPI_Comm_Spawn(), parent name is empty"</a>
<li><strong>Previous message:</strong> <a href="7329.php">Chang IL Yoon: "Re: [OMPI devel] OPEN-MPI Fault-Tolerance for GASNet"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7331.php">Ralph Castain: "Re: [OMPI devel] [patch] MPI_Comm_Spawn(), parent name is empty"</a>
<li><strong>Reply:</strong> <a href="7331.php">Ralph Castain: "Re: [OMPI devel] [patch] MPI_Comm_Spawn(), parent name is empty"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>&nbsp;When calling MPI_Comm_get_name() on the predefined communicator
<br>
MPI_COMM_PARENT after a call to MPI_Comm_spawn(), we are expecting the
<br>
name MPI_COMM_PARENT as stated into the MPI Standard 2.2. 
<br>
<p>&nbsp;In practice, MPI_Comm_get_name() returns an empty string. As far as I
<br>
understand the problem, it seems that there is a bug into dyn_init().
<br>
The name is set but the flags is not updated. The following patch fixes
<br>
the problem.
<br>
<p>Guillaume
<br>
<pre>
---
diff --git a/ompi/mca/dpm/orte/dpm_orte.c b/ompi/mca/dpm/orte/dpm_orte.c
--- a/ompi/mca/dpm/orte/dpm_orte.c
+++ b/ompi/mca/dpm/orte/dpm_orte.c
@@ -965,6 +965,7 @@ static int dyn_init(void)
     
     /* Set name for debugging purposes */
     snprintf(newcomm-&gt;c_name, MPI_MAX_OBJECT_NAME, &quot;MPI_COMM_PARENT&quot;);
+    newcomm-&gt;c_flags |= OMPI_COMM_NAMEISSET;
     
     return OMPI_SUCCESS;
 }
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7331.php">Ralph Castain: "Re: [OMPI devel] [patch] MPI_Comm_Spawn(), parent name is empty"</a>
<li><strong>Previous message:</strong> <a href="7329.php">Chang IL Yoon: "Re: [OMPI devel] OPEN-MPI Fault-Tolerance for GASNet"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7331.php">Ralph Castain: "Re: [OMPI devel] [patch] MPI_Comm_Spawn(), parent name is empty"</a>
<li><strong>Reply:</strong> <a href="7331.php">Ralph Castain: "Re: [OMPI devel] [patch] MPI_Comm_Spawn(), parent name is empty"</a>
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

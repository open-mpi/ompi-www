<?
$subject_val = "Re: [OMPI devel] [PATCH]Segmentation Fault occurs when the function called from MPI_Comm_spawn_multiple fails";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb  9 11:01:00 2012" -->
<!-- isoreceived="20120209160100" -->
<!-- sent="Thu, 9 Feb 2012 09:00:52 -0700" -->
<!-- isosent="20120209160052" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [PATCH]Segmentation Fault occurs when the function called from MPI_Comm_spawn_multiple fails" -->
<!-- id="EE85E316-F85D-48E0-88CE-2D2F9EF538B3_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4F335795.40606_at_jp.fujitsu.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [PATCH]Segmentation Fault occurs when the function called from MPI_Comm_spawn_multiple fails<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-02-09 11:00:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10373.php">Jeff Squyres: "Re: [OMPI devel] btl/openib: get_ib_dev_distance doesn't	see	processes as bound if the job has been launched by srun"</a>
<li><strong>Previous message:</strong> <a href="10371.php">Ralph Castain: "Re: [OMPI devel] btl/openib: get_ib_dev_distance doesn't	see	processes as bound if the job has been launched by srun"</a>
<li><strong>In reply to:</strong> <a href="10353.php">Y.MATSUMOTO: "[OMPI devel] [PATCH]Segmentation Fault occurs when the function called from MPI_Comm_spawn_multiple fails"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks! I added the patch to the trunk and submitted it for the 1.6 update.
<br>
<p>On Feb 8, 2012, at 10:20 PM, Y.MATSUMOTO wrote:
<br>
<p><span class="quotelev1">&gt; Dear All,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Next feedback is &quot;MPI_Comm_spawn_multiple&quot;.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; When the function called from MPI_Comm_spawn_multiple failed,
</span><br>
<span class="quotelev1">&gt; Segmentation fault occurs.
</span><br>
<span class="quotelev1">&gt; In that condition, &quot;newcomp&quot; sets NULL.
</span><br>
<span class="quotelev1">&gt; But member of &quot;newcomp&quot; is referred at following part.
</span><br>
<span class="quotelev1">&gt; (ompi/mpi/c/comm_spawn_multiple.c)
</span><br>
<span class="quotelev1">&gt; 176     /* set array of errorcodes */
</span><br>
<span class="quotelev1">&gt; 177     if (MPI_ERRCODES_IGNORE != array_of_errcodes) {
</span><br>
<span class="quotelev1">&gt; 178         for ( i=0; i &lt; newcomp-&gt;c_remote_group-&gt;grp_proc_count; i++ ) {
</span><br>
<span class="quotelev1">&gt; 179             array_of_errcodes[i]=rc;
</span><br>
<span class="quotelev1">&gt; 180         }
</span><br>
<span class="quotelev1">&gt; 181     }
</span><br>
<span class="quotelev1">&gt; Attached patch fixes it. (Patch is for V1.4.x).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Best regards,
</span><br>
<span class="quotelev1">&gt; Yuki MATSUMOTO
</span><br>
<span class="quotelev1">&gt; MPI development team,
</span><br>
<span class="quotelev1">&gt; Fujitsu
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; &lt;comm_spawn_multi.patch&gt;_______________________________________________
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
<li><strong>Next message:</strong> <a href="10373.php">Jeff Squyres: "Re: [OMPI devel] btl/openib: get_ib_dev_distance doesn't	see	processes as bound if the job has been launched by srun"</a>
<li><strong>Previous message:</strong> <a href="10371.php">Ralph Castain: "Re: [OMPI devel] btl/openib: get_ib_dev_distance doesn't	see	processes as bound if the job has been launched by srun"</a>
<li><strong>In reply to:</strong> <a href="10353.php">Y.MATSUMOTO: "[OMPI devel] [PATCH]Segmentation Fault occurs when the function called from MPI_Comm_spawn_multiple fails"</a>
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

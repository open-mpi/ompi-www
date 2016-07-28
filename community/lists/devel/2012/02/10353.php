<?
$subject_val = "[OMPI devel] [PATCH]Segmentation Fault occurs when the function called from MPI_Comm_spawn_multiple fails";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb  9 00:20:32 2012" -->
<!-- isoreceived="20120209052032" -->
<!-- sent="Thu, 09 Feb 2012 14:20:21 +0900" -->
<!-- isosent="20120209052021" -->
<!-- name="Y.MATSUMOTO" -->
<!-- email="yuki.matsumoto_at_[hidden]" -->
<!-- subject="[OMPI devel] [PATCH]Segmentation Fault occurs when the function called from MPI_Comm_spawn_multiple fails" -->
<!-- id="4F335795.40606_at_jp.fujitsu.com" -->
<!-- charset="ISO-2022-JP" -->
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
<strong>Subject:</strong> [OMPI devel] [PATCH]Segmentation Fault occurs when the function called from MPI_Comm_spawn_multiple fails<br>
<strong>From:</strong> Y.MATSUMOTO (<em>yuki.matsumoto_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-02-09 00:20:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10354.php">Jeff Squyres: "Re: [OMPI devel] btl/openib: get_ib_dev_distance doesn't see processes as bound if the job has been launched by srun"</a>
<li><strong>Previous message:</strong> <a href="10352.php">Ralph Castain: "Re: [OMPI devel] RFC: Java MPI bindings"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10372.php">Ralph Castain: "Re: [OMPI devel] [PATCH]Segmentation Fault occurs when the function called from MPI_Comm_spawn_multiple fails"</a>
<li><strong>Reply:</strong> <a href="10372.php">Ralph Castain: "Re: [OMPI devel] [PATCH]Segmentation Fault occurs when the function called from MPI_Comm_spawn_multiple fails"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear All,
<br>
<p>Next feedback is &quot;MPI_Comm_spawn_multiple&quot;.
<br>
<p>When the function called from MPI_Comm_spawn_multiple failed,
<br>
Segmentation fault occurs.
<br>
In that condition, &quot;newcomp&quot; sets NULL.
<br>
But member of &quot;newcomp&quot; is referred at following part.
<br>
(ompi/mpi/c/comm_spawn_multiple.c)
<br>
176     /* set array of errorcodes */
<br>
177     if (MPI_ERRCODES_IGNORE != array_of_errcodes) {
<br>
178         for ( i=0; i &lt; newcomp-&gt;c_remote_group-&gt;grp_proc_count; i++ ) {
<br>
179             array_of_errcodes[i]=rc;
<br>
180         }
<br>
181     }
<br>
Attached patch fixes it. (Patch is for V1.4.x).
<br>
<p>Best regards,
<br>
Yuki MATSUMOTO
<br>
MPI development team,
<br>
Fujitsu
<br>
<p><p>
<br><p>
<p><hr>
<ul>
<li>text/plain attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-10353/comm_spawn_multi.patch">comm_spawn_multi.patch</a>
</ul>
<!-- attachment="comm_spawn_multi.patch" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10354.php">Jeff Squyres: "Re: [OMPI devel] btl/openib: get_ib_dev_distance doesn't see processes as bound if the job has been launched by srun"</a>
<li><strong>Previous message:</strong> <a href="10352.php">Ralph Castain: "Re: [OMPI devel] RFC: Java MPI bindings"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10372.php">Ralph Castain: "Re: [OMPI devel] [PATCH]Segmentation Fault occurs when the function called from MPI_Comm_spawn_multiple fails"</a>
<li><strong>Reply:</strong> <a href="10372.php">Ralph Castain: "Re: [OMPI devel] [PATCH]Segmentation Fault occurs when the function called from MPI_Comm_spawn_multiple fails"</a>
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

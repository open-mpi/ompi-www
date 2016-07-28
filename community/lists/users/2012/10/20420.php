<?
$subject_val = "[OMPI users] Additional rules for valgrind 3.7 and OpenMPI 1.6.1";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Oct  7 18:20:12 2012" -->
<!-- isoreceived="20121007222012" -->
<!-- sent="Sun, 7 Oct 2012 17:20:07 -0500" -->
<!-- isosent="20121007222007" -->
<!-- name="Yiannis Papadopoulos" -->
<!-- email="giannis.papadopoulos_at_[hidden]" -->
<!-- subject="[OMPI users] Additional rules for valgrind 3.7 and OpenMPI 1.6.1" -->
<!-- id="CABeDPcNiyrQae=iSpDxXxFLCYxyPb1RZE6qgCK5u-Jpa3nKx6Q_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
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
<strong>Subject:</strong> [OMPI users] Additional rules for valgrind 3.7 and OpenMPI 1.6.1<br>
<strong>From:</strong> Yiannis Papadopoulos (<em>giannis.papadopoulos_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-10-07 18:20:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20421.php">Daniel Mitchell: "[OMPI users] [threads] How to configure Open MPI for thread support"</a>
<li><strong>Previous message:</strong> <a href="20419.php">Ralph Castain: "Re: [OMPI users] -output-filename 1234 versus --mca orte_output_filename 1234"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>Adding the following rules to openmpi-valgrind.supp removes all
<br>
warnings from valgrind about memory leaks and incorrect reads (at
<br>
least for the MPI programs I tried it on). Posting them in the mailing
<br>
list in case someone wants to add them to the default suppression
<br>
file:
<br>
<p>{
<br>
&nbsp;&nbsp;writev suppression
<br>
&nbsp;&nbsp;Memcheck:Param
<br>
&nbsp;&nbsp;writev(vector[...])
<br>
&nbsp;&nbsp;fun:writev
<br>
&nbsp;&nbsp;fun:mca_oob_tcp_msg_send_handler
<br>
&nbsp;&nbsp;fun:mca_oob_tcp_peer_send
<br>
&nbsp;&nbsp;fun:mca_oob_tcp_send_nb
<br>
&nbsp;&nbsp;fun:orte_rml_oob_send
<br>
&nbsp;&nbsp;fun:orte_rml_oob_send_buffer
<br>
&nbsp;&nbsp;...
<br>
&nbsp;&nbsp;fun:ompi_mpi_init
<br>
}
<br>
<p>{
<br>
&nbsp;&nbsp;_wordcopy_fwd_dest_aligned suppression
<br>
&nbsp;&nbsp;Memcheck:Addr8
<br>
&nbsp;&nbsp;fun:_wordcopy_fwd_dest_aligned
<br>
&nbsp;&nbsp;fun:__GI_memmove
<br>
&nbsp;&nbsp;fun:argz_insert
<br>
&nbsp;&nbsp;fun:lt_argz_insert
<br>
&nbsp;&nbsp;fun:foreachfile_callback
<br>
&nbsp;&nbsp;fun:foreach_dirinpath
<br>
&nbsp;&nbsp;fun:lt_dlforeachfile
<br>
&nbsp;&nbsp;fun:mca_base_component_find
<br>
&nbsp;&nbsp;fun:mca_base_components_open
<br>
&nbsp;&nbsp;fun:opal_hwloc_base_open
<br>
&nbsp;&nbsp;fun:opal_init
<br>
&nbsp;&nbsp;fun:orte_init
<br>
}
<br>
<p>{
<br>
&nbsp;&nbsp;opal_os_dirpath_create
<br>
&nbsp;&nbsp;Memcheck:Addr4
<br>
&nbsp;&nbsp;fun:opal_os_dirpath_create
<br>
&nbsp;&nbsp;fun:orte_session_dir
<br>
&nbsp;&nbsp;fun:orte_ess_base_app_setup
<br>
&nbsp;&nbsp;fun:rte_init
<br>
&nbsp;&nbsp;fun:orte_init
<br>
&nbsp;&nbsp;fun:ompi_mpi_init
<br>
}
<br>
<p>{
<br>
&nbsp;&nbsp;OMPI init leak
<br>
&nbsp;&nbsp;Memcheck:Leak
<br>
&nbsp;&nbsp;fun:malloc
<br>
&nbsp;&nbsp;...
<br>
&nbsp;&nbsp;fun:ompi_mpi_init
<br>
}
<br>
<p>{
<br>
&nbsp;&nbsp;OMPI init leak
<br>
&nbsp;&nbsp;Memcheck:Leak
<br>
&nbsp;&nbsp;fun:realloc
<br>
&nbsp;&nbsp;...
<br>
&nbsp;&nbsp;fun:ompi_mpi_init
<br>
}
<br>
<p>{
<br>
&nbsp;&nbsp;OMPI init leak
<br>
&nbsp;&nbsp;Memcheck:Leak
<br>
&nbsp;&nbsp;fun:calloc
<br>
&nbsp;&nbsp;...
<br>
&nbsp;&nbsp;fun:ompi_mpi_init
<br>
}
<br>
<p>{
<br>
&nbsp;&nbsp;orte_init leak
<br>
&nbsp;&nbsp;Memcheck:Leak
<br>
&nbsp;&nbsp;fun:malloc
<br>
&nbsp;&nbsp;...
<br>
&nbsp;&nbsp;fun:orte_init
<br>
}
<br>
<p>{
<br>
&nbsp;&nbsp;opal_event_base_loop leak
<br>
&nbsp;&nbsp;Memcheck:Leak
<br>
&nbsp;&nbsp;fun:malloc
<br>
&nbsp;&nbsp;...
<br>
&nbsp;&nbsp;fun:opal_event_base_loop
<br>
}
<br>
<p>{
<br>
&nbsp;&nbsp;opal_hwloc_unpack leak
<br>
&nbsp;&nbsp;Memcheck:Leak
<br>
&nbsp;&nbsp;fun:malloc
<br>
&nbsp;&nbsp;...
<br>
&nbsp;&nbsp;fun:opal_hwloc_unpack
<br>
}
<br>
<p>{
<br>
&nbsp;&nbsp;mca_base_components_open leak
<br>
&nbsp;&nbsp;Memcheck:Leak
<br>
&nbsp;&nbsp;fun:malloc
<br>
&nbsp;&nbsp;...
<br>
&nbsp;&nbsp;fun:mca_base_components_open
<br>
}
<br>
<p>{
<br>
&nbsp;&nbsp;mca_base_components_open leak
<br>
&nbsp;&nbsp;Memcheck:Leak
<br>
&nbsp;&nbsp;fun:calloc
<br>
&nbsp;&nbsp;...
<br>
&nbsp;&nbsp;fun:mca_base_components_open
<br>
}
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20421.php">Daniel Mitchell: "[OMPI users] [threads] How to configure Open MPI for thread support"</a>
<li><strong>Previous message:</strong> <a href="20419.php">Ralph Castain: "Re: [OMPI users] -output-filename 1234 versus --mca orte_output_filename 1234"</a>
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

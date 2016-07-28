<?
$subject_val = "[OMPI devel] v1.7 warnings";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr  2 00:56:24 2013" -->
<!-- isoreceived="20130402045624" -->
<!-- sent="Mon, 1 Apr 2013 21:56:18 -0700" -->
<!-- isosent="20130402045618" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="[OMPI devel] v1.7 warnings" -->
<!-- id="F1A4FD6C-E909-49D6-B262-E498E93A4BAF_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [OMPI devel] v1.7 warnings<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-04-02 00:56:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12231.php">Paul Kapinos: "Re: [OMPI devel] Trunk: Link Failure -- multiple definition	of ib_address_t_class"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2013/03/12229.php">Barrett, Brian W: "[OMPI devel] Open MPI 1.7rc9 tarballs up"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi folks
<br>
<p>As you may have seen, I released v1.7.0 tonight. However, while generating it, I got a flood of warnings (see below).
<br>
<p>We really need to get this cleaned up, so I would appreciate it if you scanned the list and fixed those that belong to you.
<br>
Ralph
<br>
<p><p>bcol_basesmuma_buf_mgmt.c: In function `bcol_basesmuma_bank_init_opti':
<br>
bcol_basesmuma_buf_mgmt.c:421: warning: cast from pointer to integer of different size
<br>
bcol_basesmuma_buf_mgmt.c:422: warning: cast from pointer to integer of different size
<br>
bcol_basesmuma_buf_mgmt.c:452: warning: cast from pointer to integer of different size
<br>
bcol_basesmuma_buf_mgmt.c:452: warning: cast from pointer to integer of different size
<br>
bcol_basesmuma_buf_mgmt.c:452: warning: cast to pointer from integer of different size
<br>
bcol_basesmuma_buf_mgmt.c:455: warning: cast from pointer to integer of different size
<br>
bcol_basesmuma_buf_mgmt.c:456: warning: cast to pointer from integer of different size
<br>
bcol_basesmuma_buf_mgmt.c:466: warning: cast from pointer to integer of different size
<br>
bcol_basesmuma_buf_mgmt.c:467: warning: cast to pointer from integer of different size
<br>
bcol_basesmuma_buf_mgmt.c:471: warning: cast from pointer to integer of different size
<br>
bcol_basesmuma_buf_mgmt.c:472: warning: cast to pointer from integer of different size
<br>
bcol_basesmuma_setup.c: In function `base_bcol_basesmuma_exchange_offsets':
<br>
bcol_basesmuma_setup.c:97: warning: cast to pointer from integer of different size
<br>
bcol_basesmuma_setup.c: In function `base_bcol_basesmuma_exchange_ctl_params':
<br>
bcol_basesmuma_setup.c:270: warning: cast from pointer to integer of different size
<br>
bcol_basesmuma_setup.c:271: warning: cast from pointer to integer of different size
<br>
bcol_basesmuma_setup.c:306: warning: cast from pointer to integer of different size
<br>
bcol_basesmuma_setup.c:306: warning: cast from pointer to integer of different size
<br>
bcol_basesmuma_setup.c:306: warning: cast to pointer from integer of different size
<br>
bcol_basesmuma_setup.c:310: warning: cast from pointer to integer of different size
<br>
bcol_basesmuma_setup.c:311: warning: cast to pointer from integer of different size
<br>
<p>coll_sm_module.c: In function `bootstrap_comm':
<br>
coll_sm_module.c:607: warning: long unsigned int format, size_t arg (arg 6)
<br>
coll_tuned_dynamic_rules.c: In function `ompi_coll_tuned_dump_msg_rule':
<br>
coll_tuned_dynamic_rules.c:111: warning: long unsigned int format, size_t arg (arg 3)
<br>
coll_ml_lex.c: In function `yy_get_next_buffer':
<br>
coll_ml_lex.c:1269: warning: comparison between signed and unsigned
<br>
<p>fbtl_posix_preadv.c: In function `mca_fbtl_posix_preadv':
<br>
fbtl_posix_preadv.c:68: warning: cast from pointer to integer of different size
<br>
fbtl_posix_preadv.c:84: warning: cast from pointer to integer of different size
<br>
fbtl_posix_preadv.c:86: warning: cast from pointer to integer of different size
<br>
fbtl_posix_preadv.c:114: warning: cast from pointer to integer of different size
<br>
fbtl_posix_preadv.c:130: warning: cast from pointer to integer of different size
<br>
fbtl_posix_preadv.c:132: warning: cast from pointer to integer of different size
<br>
fbtl_posix_pwritev.c: In function `mca_fbtl_posix_pwritev':
<br>
fbtl_posix_pwritev.c:71: warning: cast from pointer to integer of different size
<br>
fbtl_posix_pwritev.c:87: warning: cast from pointer to integer of different size
<br>
fbtl_posix_pwritev.c:89: warning: cast from pointer to integer of different size
<br>
fbtl_posix_pwritev.c:116: warning: cast from pointer to integer of different size
<br>
fbtl_posix_pwritev.c:132: warning: cast from pointer to integer of different size
<br>
fbtl_posix_pwritev.c:134: warning: cast from pointer to integer of different size
<br>
fbtl_posix_ipwritev.c: In function `mca_fbtl_posix_ipwritev':
<br>
fbtl_posix_ipwritev.c:54: warning: cast from pointer to integer of different size
<br>
fbtl_posix_ipwritev.c:56: warning: cast from pointer to integer of different size
<br>
fbtl_posix_ipwritev.c:59: warning: cast from pointer to integer of different size
<br>
fbtl_posix_ipwritev.c:104: warning: cast from pointer to integer of different size
<br>
fbtl_posix_ipwritev.c:124: warning: cast from pointer to integer of different size
<br>
fbtl_posix_ipwritev.c:126: warning: cast from pointer to integer of different size
<br>
fbtl_posix_ipwritev.c:129: warning: cast from pointer to integer of different size
<br>
fbtl_posix_ipwritev.c:173: warning: cast from pointer to integer of different size
<br>
<p>fcoll_two_phase_file_read_all.c: In function `mca_fcoll_two_phase_file_read_all':
<br>
fcoll_two_phase_file_read_all.c:249: warning: cast from pointer to integer of different size
<br>
fcoll_two_phase_file_read_all.c:279: warning: cast from pointer to integer of different size
<br>
fcoll_two_phase_file_read_all.c:280: warning: cast from pointer to integer of different size
<br>
fcoll_two_phase_file_read_all.c: In function `two_phase_read_and_exch':
<br>
fcoll_two_phase_file_read_all.c:651: warning: cast to pointer from integer of different size
<br>
fcoll_two_phase_file_read_all.c: In function `two_phase_fill_user_buffer':
<br>
fcoll_two_phase_file_read_all.c:1030: warning: cast from pointer to integer of different size
<br>
fcoll_two_phase_file_write_all.c: In function `mca_fcoll_two_phase_file_write_all':
<br>
fcoll_two_phase_file_write_all.c:294: warning: cast from pointer to integer of different size
<br>
fcoll_two_phase_file_write_all.c:324: warning: cast from pointer to integer of different size
<br>
fcoll_two_phase_file_write_all.c:325: warning: cast from pointer to integer of different size
<br>
fcoll_two_phase_file_write_all.c: In function `two_phase_exch_and_write':
<br>
fcoll_two_phase_file_write_all.c:748: warning: cast to pointer from integer of different size
<br>
fcoll_two_phase_file_write_all.c: In function `two_phase_exchage_data':
<br>
fcoll_two_phase_file_write_all.c:988: warning: cast to pointer from integer of different size
<br>
fcoll_two_phase_file_write_all.c: In function `two_phase_fill_send_buffer':
<br>
fcoll_two_phase_file_write_all.c:1195: warning: cast from pointer to integer of different size
<br>
fcoll_two_phase_support_fns.c: In function `mca_fcoll_two_phase_calc_my_requests':
<br>
fcoll_two_phase_support_fns.c:377: warning: cast from pointer to integer of different size
<br>
fcoll_two_phase_support_fns.c:429: warning: cast from pointer to integer of different size
<br>
fcoll_static_file_read_all.c: In function `mca_fcoll_static_file_read_all':
<br>
fcoll_static_file_read_all.c:148: warning: cast from pointer to integer of different size
<br>
fcoll_static_file_read_all.c:648: warning: cast to pointer from integer of different size
<br>
fcoll_static_file_read_all.c:663: warning: cast to pointer from integer of different size
<br>
fcoll_static_file_write_all.c: In function `mca_fcoll_static_file_write_all':
<br>
fcoll_static_file_write_all.c:169: warning: cast from pointer to integer of different size
<br>
fcoll_static_file_write_all.c:806: warning: cast to pointer from integer of different size
<br>
fcoll_static_file_write_all.c:821: warning: cast to pointer from integer of different size
<br>
fcoll_dynamic_file_write_all.c: In function `mca_fcoll_dynamic_file_write_all':
<br>
fcoll_dynamic_file_write_all.c:926: warning: cast to pointer from integer of different size
<br>
fcoll_dynamic_file_write_all.c:944: warning: cast to pointer from integer of different size
<br>
<p>io_ompio.c: In function `ompi_io_ompio_generate_current_file_view':
<br>
io_ompio.c:183: warning: cast to pointer from integer of different size
<br>
io_ompio_file_open.c: In function `mca_io_ompio_file_get_byte_offset':
<br>
io_ompio_file_open.c:585: warning: cast from pointer to integer of different size
<br>
io_ompio_file_write.c: In function `mca_io_ompio_file_write':
<br>
io_ompio_file_write.c:153: warning: cast to pointer from integer of different size
<br>
io_ompio_file_read.c: In function `mca_io_ompio_file_read':
<br>
io_ompio_file_read.c:167: warning: cast to pointer from integer of different size
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12231.php">Paul Kapinos: "Re: [OMPI devel] Trunk: Link Failure -- multiple definition	of ib_address_t_class"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2013/03/12229.php">Barrett, Brian W: "[OMPI devel] Open MPI 1.7rc9 tarballs up"</a>
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

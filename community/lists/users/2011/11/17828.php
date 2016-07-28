<?
$subject_val = "Re: [OMPI users] open-mpi error";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Nov 24 18:33:02 2011" -->
<!-- isoreceived="20111124233302" -->
<!-- sent="Fri, 25 Nov 2011 00:32:56 +0100" -->
<!-- isosent="20111124233256" -->
<!-- name="Markus Stiller" -->
<!-- email="pge08fjv_at_[hidden]" -->
<!-- subject="Re: [OMPI users] open-mpi error" -->
<!-- id="4ECED428.3080202_at_studserv.uni-leipzig.de" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="000001ccaaed$35e62cb0$a1b28610$_at_com" -->
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
<strong>Subject:</strong> Re: [OMPI users] open-mpi error<br>
<strong>From:</strong> Markus Stiller (<em>pge08fjv_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-11-24 18:32:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17829.php">Ralph Castain: "Re: [OMPI users] open-mpi error"</a>
<li><strong>Previous message:</strong> <a href="17827.php">Markus Stiller: "Re: [OMPI users] open-mpi error"</a>
<li><strong>In reply to:</strong> <a href="17826.php">MM: "Re: [OMPI users] open-mpi error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17829.php">Ralph Castain: "Re: [OMPI users] open-mpi error"</a>
<li><strong>Reply:</strong> <a href="17829.php">Ralph Castain: "Re: [OMPI users] open-mpi error"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 11/24/2011 10:08 PM, MM wrote:
<br>
<span class="quotelev1">&gt; Hi
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I get the same error while linking against home built 1.5.4 openmpi libs on
</span><br>
<span class="quotelev1">&gt; win32.
</span><br>
<span class="quotelev1">&gt; I didn't get this error against the prebuilt libs.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I see you use Suse. There probably is a openmpi.rpm or openmpi.dpkg already
</span><br>
<span class="quotelev1">&gt; available for Suse which contains the libraries and you could link against
</span><br>
<span class="quotelev1">&gt; those and that may work
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; MM
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -----Original Message-----
</span><br>
<span class="quotelev1">&gt; From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] On
</span><br>
<span class="quotelev1">&gt; Behalf Of Markus Stiller
</span><br>
<span class="quotelev1">&gt; Sent: 24 November 2011 20:41
</span><br>
<span class="quotelev1">&gt; To: users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subject: [OMPI users] open-mpi error
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; i have some problem with mpi, i looked in the FAQ and google already but i
</span><br>
<span class="quotelev1">&gt; couldnt find a solution.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; To build mpi i used this:
</span><br>
<span class="quotelev1">&gt; shell$ ./configure --prefix=/opt/mpirun
</span><br>
<span class="quotelev1">&gt; &lt;...lots of output...&gt;
</span><br>
<span class="quotelev1">&gt; shell$ make all install
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Worked fine so far. I am using dlpoly, and this makefile:
</span><br>
<span class="quotelev1">&gt;       $(MAKE) LD=&quot;mpif90 -o&quot; LDFLAGS=&quot;-O3&quot; \
</span><br>
<span class="quotelev1">&gt;       FC=&quot;mpif90 -c&quot; FCFLAGS=&quot;-O3&quot; \
</span><br>
<span class="quotelev1">&gt;       EX=$(EX) BINROOT=$(BINROOT) $(TYPE)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This worked fine too,
</span><br>
<span class="quotelev1">&gt; the problem occurs when i want to run a job with
</span><br>
<span class="quotelev1">&gt; mpiexec -n 4 ./DLPOLY.Z   or
</span><br>
<span class="quotelev1">&gt; mpirun -n 4 ./DLPOLY.z
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I get this error:
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; [linux-6wa6:02927] [[INVALID],INVALID] ORTE_ERROR_LOG: Not found in file
</span><br>
<span class="quotelev1">&gt; orterun.c at line 543 markus_at_linux-6wa6:/media/808CCB178CCB069E/MD
</span><br>
<span class="quotelev1">&gt; Simulations/Test Simu1&gt;  sudo mpiexec -n 4 ./DLPOLY.Z [linux-6wa6:03731]
</span><br>
<span class="quotelev1">&gt; [[INVALID],INVALID] ORTE_ERROR_LOG: Not found in file runtime/orte_init.c at
</span><br>
<span class="quotelev1">&gt; line 125
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; It looks like orte_init failed for some reason; your parallel process is
</span><br>
<span class="quotelev1">&gt; likely to abort.  There are many reasons that a parallel process can fail
</span><br>
<span class="quotelev1">&gt; during orte_init; some of which are due to configuration or environment
</span><br>
<span class="quotelev1">&gt; problems.  This failure appears to be an internal failure; here's some
</span><br>
<span class="quotelev1">&gt; additional information (which may only be relevant to an Open MPI
</span><br>
<span class="quotelev1">&gt; developer):
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     orte_ess_base_select failed
</span><br>
<span class="quotelev1">&gt;     --&gt;  Returned value Not found (-13) instead of ORTE_SUCCESS
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; [linux-6wa6:03731] [[INVALID],INVALID] ORTE_ERROR_LOG: Not found in file
</span><br>
<span class="quotelev1">&gt; orterun.c at line 543
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Some Informations:
</span><br>
<span class="quotelev1">&gt; I use Open MPI 1.4.4, Suse 64bit, AMD quadcore
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; make check gives:
</span><br>
<span class="quotelev1">&gt; make: *** No rule to make target `check'.  Stop.
</span><br>
<span class="quotelev1">&gt; I attached the ompi_info.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thx alot for your help,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; regards,
</span><br>
<span class="quotelev1">&gt; Markus
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p>Now i made open mpi new, but now im ggetting stuff like this:
<br>
<p>..................
<br>
/usr/lib64/gcc/x86_64-suse-linux/4.6/../../../../lib64/libmpi.so: 
<br>
undefined reference to `lam_ssi_base_param_find'
<br>
/usr/lib64/gcc/x86_64-suse-linux/4.6/../../../../lib64/libmpi.so: 
<br>
undefined reference to `asc_parse'
<br>
/usr/lib64/gcc/x86_64-suse-linux/4.6/../../../../lib64/libmpi.so: 
<br>
undefined reference to `lam_ssi_base_param_register_string'
<br>
/usr/lib64/gcc/x86_64-suse-linux/4.6/../../../../lib64/libmpi.so: 
<br>
undefined reference to `lam_ssi_base_param_register_int'
<br>
/usr/lib64/gcc/x86_64-suse-linux/4.6/../../../../lib64/libmpi.so: 
<br>
undefined reference to `lampanic'
<br>
/usr/lib64/gcc/x86_64-suse-linux/4.6/../../../../lib64/libmpi.so: 
<br>
undefined reference to `lam_thread_self'
<br>
/usr/lib64/gcc/x86_64-suse-linux/4.6/../../../../lib64/libmpi.so: 
<br>
undefined reference to `lam_debug_close'
<br>
/usr/local/lib64/libmpi_f77.so: undefined reference to 
<br>
`MPI_CONVERSION_FN_NULL'
<br>
/usr/local/lib64/libmpi_f77.so: undefined reference to 
<br>
`MPI_File_read_at_all'
<br>
/usr/lib64/gcc/x86_64-suse-linux/4.6/../../../../lib64/libmpi.so: 
<br>
undefined reference to `sfh_sock_set_buf_size'
<br>
/usr/lib64/gcc/x86_64-suse-linux/4.6/../../../../lib64/libmpi.so: 
<br>
undefined reference to `blktype'
<br>
/usr/local/lib64/libmpi_f77.so: undefined reference to 
<br>
`MPI_File_preallocate'
<br>
/usr/lib64/gcc/x86_64-suse-linux/4.6/../../../../lib64/libmpi.so: 
<br>
undefined reference to `ao_init'
<br>
/usr/lib64/gcc/x86_64-suse-linux/4.6/../../../../lib64/libmpi.so: 
<br>
undefined reference to `lam_mutex_destroy'
<br>
/usr/local/lib64/libmpi_f77.so: undefined reference to 
<br>
`MPI_File_iread_shared'
<br>
/usr/lib64/gcc/x86_64-suse-linux/4.6/../../../../lib64/libmpi.so: 
<br>
undefined reference to `al_init'
<br>
/usr/lib64/gcc/x86_64-suse-linux/4.6/../../../../lib64/libmpi.so: 
<br>
undefined reference to `stoi'
<br>
/usr/lib64/gcc/x86_64-suse-linux/4.6/../../../../lib64/libmpi.so: 
<br>
undefined reference to `lam_ssi_base_hostmap'
<br>
/usr/local/lib64/libmpi_f77.so: undefined reference to 
<br>
`MPI_FORTRAN_ERRCODES_IGNORE'
<br>
/usr/local/lib64/libmpi_f77.so: undefined reference to `MPI_File_close'
<br>
/usr/lib64/gcc/x86_64-suse-linux/4.6/../../../../lib64/libmpi.so: 
<br>
undefined reference to `al_next'
<br>
/usr/local/lib64/libmpi_f77.so: undefined reference to 
<br>
`MPI_Register_datarep'
<br>
/usr/local/lib64/libmpi_f77.so: undefined reference to 
<br>
`MPI_FORTRAN_STATUSES_IGNORE'
<br>
/usr/lib64/gcc/x86_64-suse-linux/4.6/../../../../lib64/libmpi.so: 
<br>
undefined reference to `nid_parse'
<br>
/usr/local/lib64/libmpi_f77.so: undefined reference to 
<br>
`mpi_fortran_bottom__'
<br>
/usr/local/lib64/libmpi_f77.so: undefined reference to `MPI_File_write_at'
<br>
/usr/local/lib64/libmpi_f77.so: undefined reference to `MPI_File_set_size'
<br>
/usr/lib64/gcc/x86_64-suse-linux/4.6/../../../../lib64/libmpi.so: 
<br>
undefined reference to `al_append'
<br>
/usr/lib64/gcc/x86_64-suse-linux/4.6/../../../../lib64/libmpi.so: 
<br>
undefined reference to `nid_free'
<br>
/usr/lib64/gcc/x86_64-suse-linux/4.6/../../../../lib64/libmpi.so: 
<br>
undefined reference to `terror'
<br>
/usr/lib64/gcc/x86_64-suse-linux/4.6/../../../../lib64/libmpi.so: 
<br>
undefined reference to `lam_perror'
<br>
/usr/local/lib64/libmpi_f77.so: undefined reference to 
<br>
`MPI_Type_create_f90_real'
<br>
/usr/local/lib64/libmpi_f77.so: undefined reference to 
<br>
`MPI_File_write_shared'
<br>
/usr/local/lib64/libmpi_f77.so: undefined reference to 
<br>
`ompi_attr_set_fortran_mpi1'
<br>
/usr/lib64/gcc/x86_64-suse-linux/4.6/../../../../lib64/libmpi.so: 
<br>
undefined reference to `lam_register_objects'
<br>
/usr/local/lib64/libmpi_f77.so: undefined reference to `MPI_File_write'
<br>
/usr/lib64/gcc/x86_64-suse-linux/4.6/../../../../lib64/libmpi.so: 
<br>
undefined reference to `lam_ssi_base_param_lookup_string'
<br>
/usr/lib64/gcc/x86_64-suse-linux/4.6/../../../../lib64/libmpi.so: 
<br>
undefined reference to `next_prime'
<br>
/usr/lib64/gcc/x86_64-suse-linux/4.6/../../../../lib64/libmpi.so: 
<br>
undefined reference to `show_help'
<br>
/usr/lib64/gcc/x86_64-suse-linux/4.6/../../../../lib64/libmpi.so: 
<br>
undefined reference to `lt_dlclose'
<br>
/usr/local/lib64/libmpi_f77.so: undefined reference to 
<br>
`MPI_File_write_ordered_end'
<br>
/usr/lib64/gcc/x86_64-suse-linux/4.6/../../../../lib64/libmpi.so: 
<br>
undefined reference to `lam_rtrnamepub'
<br>
/usr/local/lib64/libmpi_f77.so: undefined reference to 
<br>
`ompi_mpi_datatype_null'
<br>
/usr/local/lib64/libmpi_f77.so: undefined reference to `MPI_File_get_info'
<br>
/usr/lib64/gcc/x86_64-suse-linux/4.6/../../../../lib64/libmpi.so: 
<br>
undefined reference to `ah_expand'
<br>
/usr/lib64/gcc/x86_64-suse-linux/4.6/../../../../lib64/libmpi.so: 
<br>
undefined reference to `lam_ssi_cr_verbose'
<br>
/usr/lib64/gcc/x86_64-suse-linux/4.6/../../../../lib64/libmpi.so: 
<br>
undefined reference to `lam_arr_find'
<br>
/usr/lib64/gcc/x86_64-suse-linux/4.6/../../../../lib64/libmpi.so: 
<br>
undefined reference to `bfiselect'
<br>
/usr/local/lib64/libmpi_f77.so: undefined reference to `MPI_File_set_view'
<br>
/usr/lib64/gcc/x86_64-suse-linux/4.6/../../../../lib64/libmpi.so: 
<br>
undefined reference to `lam_rtrnamedel'
<br>
/usr/lib64/gcc/x86_64-suse-linux/4.6/../../../../lib64/libmpi.so: 
<br>
undefined reference to `lam_mutex_lock'
<br>
/usr/lib64/gcc/x86_64-suse-linux/4.6/../../../../lib64/libmpi.so: 
<br>
undefined reference to `bfiprobe'
<br>
/usr/lib64/gcc/x86_64-suse-linux/4.6/../../../../lib64/libmpi.so: 
<br>
undefined reference to `lam_gethostname'
<br>
/usr/local/lib64/libmpi_f77.so: undefined reference to `MPI_Win_lock'
<br>
/usr/lib64/gcc/x86_64-suse-linux/4.6/../../../../lib64/libmpi.so: 
<br>
undefined reference to `lam_mkcoll'
<br>
/usr/local/lib64/libmpi_f77.so: undefined reference to 
<br>
`MPI_Request_get_status'
<br>
/usr/local/lib64/libmpi_f77.so: undefined reference to 
<br>
`mpi_fortran_argv_null'
<br>
/usr/local/lib64/libmpi_f77.so: undefined reference to 
<br>
`mpi_conversion_fn_null__'
<br>
/usr/local/lib64/libmpi_f77.so: undefined reference to 
<br>
`ompi_attr_create_keyval_fint'
<br>
/usr/lib64/gcc/x86_64-suse-linux/4.6/../../../../lib64/libmpi.so: 
<br>
undefined reference to `ah_init'
<br>
/usr/local/lib64/libmpi_f77.so: undefined reference to 
<br>
`MPI_File_read_all_end'
<br>
/usr/lib64/gcc/x86_64-suse-linux/4.6/../../../../lib64/libmpi.so: 
<br>
undefined reference to `_kio'
<br>
/usr/lib64/gcc/x86_64-suse-linux/4.6/../../../../lib64/libmpi.so: 
<br>
undefined reference to `asc_environment'
<br>
/usr/lib64/gcc/x86_64-suse-linux/4.6/../../../../lib64/libmpi.so: 
<br>
undefined reference to `lam_mkpt'
<br>
/usr/lib64/gcc/x86_64-suse-linux/4.6/../../../../lib64/libmpi.so: 
<br>
undefined reference to `lam_mp_finalize'
<br>
/usr/lib64/gcc/x86_64-suse-linux/4.6/../../../../lib64/libmpi.so: 
<br>
undefined reference to `lam_ssi_base_module_find'
<br>
/usr/local/lib64/libmpi_f77.so: undefined reference to 
<br>
`MPI_File_call_errhandler'
<br>
/usr/local/lib64/libmpi_f77.so: undefined reference to 
<br>
`MPI_Add_error_string'
<br>
/usr/lib64/gcc/x86_64-suse-linux/4.6/../../../../lib64/libmpi.so: 
<br>
undefined reference to `lam_kexit'
<br>
/usr/lib64/gcc/x86_64-suse-linux/4.6/../../../../lib64/libmpi.so: 
<br>
undefined reference to `lam_arr_size'
<br>
/usr/local/lib64/libmpi_f77.so: undefined reference to 
<br>
`ompi_errcodes_intern'
<br>
/usr/local/lib64/libmpi_f77.so: undefined reference to 
<br>
`MPI_File_get_position'
<br>
/usr/lib64/gcc/x86_64-suse-linux/4.6/../../../../lib64/libmpi.so: 
<br>
undefined reference to `kexit'
<br>
/usr/lib64/gcc/x86_64-suse-linux/4.6/../../../../lib64/libmpi.so: 
<br>
undefined reference to `show_help_file'
<br>
/usr/local/lib64/libmpi_f77.so: undefined reference to `MPI_File_get_size'
<br>
/usr/lib64/gcc/x86_64-suse-linux/4.6/../../../../lib64/libmpi.so: 
<br>
undefined reference to `kpause'
<br>
/usr/local/lib64/libmpi_f77.so: undefined reference to `MPI_File_write_all'
<br>
/usr/lib64/gcc/x86_64-suse-linux/4.6/../../../../lib64/libmpi.so: 
<br>
undefined reference to `lam_trpoint'
<br>
/usr/local/lib64/libmpi_f77.so: undefined reference to 
<br>
`MPI_File_get_byte_offset'
<br>
/usr/lib64/gcc/x86_64-suse-linux/4.6/../../../../lib64/libmpi.so: 
<br>
undefined reference to `lam_mutex_init'
<br>
/usr/lib64/gcc/x86_64-suse-linux/4.6/../../../../lib64/libmpi.so: 
<br>
undefined reference to `lam_getpid'
<br>
/usr/local/lib64/libmpi_f77.so: undefined reference to `ompi_ddt_match_size'
<br>
/usr/local/lib64/libmpi_f77.so: undefined reference to 
<br>
`MPI_FORTRAN_ARGVS_NULL'
<br>
/usr/local/lib64/libmpi_f77.so: undefined reference to 
<br>
`MPI_Comm_call_errhandler'
<br>
/usr/local/lib64/libmpi_f77.so: undefined reference to `ompi_mpi_comm_world'
<br>
/usr/local/lib64/libmpi_f77.so: undefined reference to 
<br>
`mpi_fortran_argvs_null'
<br>
/usr/lib64/gcc/x86_64-suse-linux/4.6/../../../../lib64/libmpi.so: 
<br>
undefined reference to `lam_arr_remove'
<br>
/usr/lib64/gcc/x86_64-suse-linux/4.6/../../../../lib64/libmpi.so: 
<br>
undefined reference to `lam_ssi_did'
<br>
/usr/lib64/gcc/x86_64-suse-linux/4.6/../../../../lib64/libmpi.so: 
<br>
undefined reference to `mrev4'
<br>
/usr/lib64/gcc/x86_64-suse-linux/4.6/../../../../lib64/libmpi.so: 
<br>
undefined reference to `rpdoom'
<br>
/usr/local/lib64/libmpi_f77.so: undefined reference to 
<br>
`MPI_File_get_position_shared'
<br>
/usr/local/lib64/libmpi_f77.so: undefined reference to 
<br>
`ompi_mpi_errors_are_fatal_comm_handler'
<br>
/usr/lib64/gcc/x86_64-suse-linux/4.6/../../../../lib64/libmpi.so: 
<br>
undefined reference to `_lam_signal'
<br>
/usr/local/lib64/libmpi_f77.so: undefined reference to 
<br>
`ompi_fortran_string_c2f'
<br>
/usr/lib64/gcc/x86_64-suse-linux/4.6/../../../../lib64/libmpi.so: 
<br>
undefined reference to `lam_reset_pid_cache'
<br>
/usr/lib64/gcc/x86_64-suse-linux/4.6/../../../../lib64/libmpi.so: 
<br>
undefined reference to `bfselect'
<br>
/usr/lib64/gcc/x86_64-suse-linux/4.6/../../../../lib64/libmpi.so: 
<br>
undefined reference to `lam_ssi_base_open'
<br>
/usr/local/lib64/libmpi_f77.so: undefined reference to 
<br>
`MPI_File_write_at_all_end'
<br>
/usr/lib64/gcc/x86_64-suse-linux/4.6/../../../../lib64/libmpi.so: 
<br>
undefined reference to `lam_ssi_base_close'
<br>
/usr/lib64/gcc/x86_64-suse-linux/4.6/../../../../lib64/libmpi.so: 
<br>
undefined reference to `lt_dlsym'
<br>
/usr/lib64/gcc/x86_64-suse-linux/4.6/../../../../lib64/libmpi.so: 
<br>
undefined reference to `lam_ssi_base_set_verbose'
<br>
/usr/lib64/gcc/x86_64-suse-linux/4.6/../../../../lib64/libmpi.so: 
<br>
undefined reference to `lam_arr_init'
<br>
/usr/local/lib64/libmpi_f77.so: undefined reference to 
<br>
`MPI_Type_create_f90_integer'
<br>
/usr/local/lib64/libmpi_f77.so: undefined reference to 
<br>
`ompi_registered_datareps'
<br>
/usr/lib64/gcc/x86_64-suse-linux/4.6/../../../../lib64/libmpi.so: 
<br>
undefined reference to `rw'
<br>
/usr/local/lib64/libmpi_f77.so: undefined reference to 
<br>
`MPI_Type_create_f90_complex'
<br>
/usr/local/lib64/libmpi_f77.so: undefined reference to 
<br>
`MPI_Status_set_cancelled'
<br>
/usr/lib64/gcc/x86_64-suse-linux/4.6/../../../../lib64/libmpi.so: 
<br>
undefined reference to `getroute'
<br>
/usr/lib64/gcc/x86_64-suse-linux/4.6/../../../../lib64/libmpi.so: 
<br>
undefined reference to `lam_deregister_object'
<br>
/usr/lib64/gcc/x86_64-suse-linux/4.6/../../../../lib64/libmpi.so: 
<br>
undefined reference to `ldogetlinks'
<br>
/usr/local/lib64/libmpi_f77.so: undefined reference to 
<br>
`MPI_Win_call_errhandler'
<br>
/usr/lib64/gcc/x86_64-suse-linux/4.6/../../../../lib64/libmpi.so: 
<br>
undefined reference to `lam_strncpy'
<br>
/usr/local/lib64/libmpi_f77.so: undefined reference to `MPI_Add_error_code'
<br>
/usr/lib64/gcc/x86_64-suse-linux/4.6/../../../../lib64/libmpi.so: 
<br>
undefined reference to `microsleep'
<br>
/usr/lib64/gcc/x86_64-suse-linux/4.6/../../../../lib64/libmpi.so: 
<br>
undefined reference to `asc_run'
<br>
/usr/lib64/gcc/x86_64-suse-linux/4.6/../../../../lib64/libmpi.so: 
<br>
undefined reference to `lam_mutex_unlock'
<br>
/usr/lib64/gcc/x86_64-suse-linux/4.6/../../../../lib64/libmpi.so: 
<br>
undefined reference to `ah_free'
<br>
/usr/lib64/gcc/x86_64-suse-linux/4.6/../../../../lib64/libmpi.so: 
<br>
undefined reference to `kinit'
<br>
/usr/lib64/gcc/x86_64-suse-linux/4.6/../../../../lib64/libmpi.so: 
<br>
undefined reference to `lam_thread_create'
<br>
/usr/local/lib64/libmpi_f77.so: undefined reference to `MPI_Grequest_start'
<br>
/usr/local/lib64/libmpi_f77.so: undefined reference to 
<br>
`mpi_fortran_status_ignore__'
<br>
/usr/lib64/gcc/x86_64-suse-linux/4.6/../../../../lib64/libmpi.so: 
<br>
undefined reference to `kenter'
<br>
collect2: ld returned 1 exit status
<br>
make[1]: *** [master] Error 1
<br>
make[1]: Leaving directory `/home/markus/Downloads/dl_poly_4.02/source'
<br>
make: *** [hpc] Error 2
<br>
<p>Whats wrong here?
<br>
How can i tell this where to find these things?
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17829.php">Ralph Castain: "Re: [OMPI users] open-mpi error"</a>
<li><strong>Previous message:</strong> <a href="17827.php">Markus Stiller: "Re: [OMPI users] open-mpi error"</a>
<li><strong>In reply to:</strong> <a href="17826.php">MM: "Re: [OMPI users] open-mpi error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17829.php">Ralph Castain: "Re: [OMPI users] open-mpi error"</a>
<li><strong>Reply:</strong> <a href="17829.php">Ralph Castain: "Re: [OMPI users] open-mpi error"</a>
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

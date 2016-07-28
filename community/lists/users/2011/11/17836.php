<?
$subject_val = "Re: [OMPI users] open-mpi error";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Nov 26 12:22:26 2011" -->
<!-- isoreceived="20111126172226" -->
<!-- sent="Sat, 26 Nov 2011 18:22:17 +0100" -->
<!-- isosent="20111126172217" -->
<!-- name="Markus Stiller" -->
<!-- email="pge08fjv_at_[hidden]" -->
<!-- subject="Re: [OMPI users] open-mpi error" -->
<!-- id="4ED12049.8050801_at_studserv.uni-leipzig.de" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="39A7C6D3-1BA0-4E54-92EB-AAB0F8A83CFF_at_open-mpi.org" -->
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
<strong>Date:</strong> 2011-11-26 12:22:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17837.php">Ralph Castain: "Re: [OMPI users] open-mpi error"</a>
<li><strong>Previous message:</strong> <a href="17835.php">Ralph Castain: "Re: [OMPI users] How are the Open MPI processes spawned?"</a>
<li><strong>In reply to:</strong> <a href="17829.php">Ralph Castain: "Re: [OMPI users] open-mpi error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17837.php">Ralph Castain: "Re: [OMPI users] open-mpi error"</a>
<li><strong>Reply:</strong> <a href="17837.php">Ralph Castain: "Re: [OMPI users] open-mpi error"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Castain,
<br>
<p><span class="quotelev1">&gt;You have some major problems with confused installations of MPIs. First, you cannot compile an application against&gt;MPICH and expect to run it with OMPI - the two are not binary compatible. You need to compile against the MPI&gt;installation you intend to run against.
</span><br>
<p>I did this, sry i didnt tell this.
<br>
I tried mpich and openmpi, and of course for each case i compiled againt 
<br>
mpich and opem mpi
<br>
<p><span class="quotelev1">&gt;Second, your errors appear to be because you are not pointing your library path at the OMPI installation, and so the&gt;libraries are not being found. You need to set LD_LIBRARY_PATH to include the path to where you installed OMPI.&gt;Based on the configure line you give, that would mean ensuring that /opt/mpirun/lib was in that envar. Likewise,&gt;/opt/mpirun/bin needs to be in your PATH.
</span><br>
<p>hmm....i installed openmpi in the std location, changed the variables to this and this works now....
<br>
<p>But now i have the same problem again (the problem why i wrote u in the first place):
<br>
<p>markus_at_linux-6wa6:/media/808CCB178CCB069E/MD Simulations/Test Simu1&gt; 
<br>
sudo mpirun -n 4 ./DLPOLY.Z
<br>
root's password:
<br>
[linux-6wa6:05565] [[INVALID],INVALID] ORTE_ERROR_LOG: Not found in file 
<br>
runtime/orte_init.c at line 125
<br>
--------------------------------------------------------------------------
<br>
It looks like orte_init failed for some reason; your parallel process is
<br>
likely to abort.  There are many reasons that a parallel process can
<br>
fail during orte_init; some of which are due to configuration or
<br>
environment problems.  This failure appears to be an internal failure;
<br>
here's some additional information (which may only be relevant to an
<br>
Open MPI developer):
<br>
<p>&nbsp;&nbsp;&nbsp;orte_ess_base_select failed
<br>
&nbsp;&nbsp;&nbsp;--&gt; Returned value Not found (-13) instead of ORTE_SUCCESS
<br>
--------------------------------------------------------------------------
<br>
[linux-6wa6:05565] [[INVALID],INVALID] ORTE_ERROR_LOG: Not found in file 
<br>
orterun.c at line 543
<br>
<p><p><p>What can i do with this?
<br>
Thx,
<br>
Markus
<br>
<p>On 11/25/2011 03:42 AM, Ralph Castain wrote:
<br>
<span class="quotelev1">&gt; Hi Markus
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; You have some major problems with confused installations of MPIs. First, you cannot compile an application against MPICH and expect to run it with OMPI - the two are not binary compatible. You need to compile against the MPI installation you intend to run against.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Second, your errors appear to be because you are not pointing your library path at the OMPI installation, and so the libraries are not being found. You need to set LD_LIBRARY_PATH to include the path to where you installed OMPI. Based on the configure line you give, that would mean ensuring that /opt/mpirun/lib was in that envar. Likewise, /opt/mpirun/bin needs to be in your PATH.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Once you have those correctly set, and build your app against the appropriate mpicc, you should be able to run.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; BTW: your last message indicates that you built against an old LAM MPI, so you appear to have some pretty old software laying around. Perhaps cleaning out some of the old MPI installations would help.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Nov 24, 2011, at 4:32 PM, Markus Stiller wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On 11/24/2011 10:08 PM, MM wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I get the same error while linking against home built 1.5.4 openmpi libs on
</span><br>
<span class="quotelev3">&gt;&gt;&gt; win32.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I didn't get this error against the prebuilt libs.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I see you use Suse. There probably is a openmpi.rpm or openmpi.dpkg already
</span><br>
<span class="quotelev3">&gt;&gt;&gt; available for Suse which contains the libraries and you could link against
</span><br>
<span class="quotelev3">&gt;&gt;&gt; those and that may work
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MM
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -----Original Message-----
</span><br>
<span class="quotelev3">&gt;&gt;&gt; From:users-bounces_at_[hidden]  [mailto:users-bounces_at_[hidden]] On
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Behalf Of Markus Stiller
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Sent: 24 November 2011 20:41
</span><br>
<span class="quotelev3">&gt;&gt;&gt; To:users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subject: [OMPI users] open-mpi error
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hello,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; i have some problem with mpi, i looked in the FAQ and google already but i
</span><br>
<span class="quotelev3">&gt;&gt;&gt; couldnt find a solution.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; To build mpi i used this:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; shell$ ./configure --prefix=/opt/mpirun
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &lt;...lots of output...&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; shell$ make all install
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Worked fine so far. I am using dlpoly, and this makefile:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       $(MAKE) LD=&quot;mpif90 -o&quot; LDFLAGS=&quot;-O3&quot; \
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       FC=&quot;mpif90 -c&quot; FCFLAGS=&quot;-O3&quot; \
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       EX=$(EX) BINROOT=$(BINROOT) $(TYPE)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; This worked fine too,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the problem occurs when i want to run a job with
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpiexec -n 4 ./DLPOLY.Z   or
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpirun -n 4 ./DLPOLY.z
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I get this error:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [linux-6wa6:02927] [[INVALID],INVALID] ORTE_ERROR_LOG: Not found in file
</span><br>
<span class="quotelev3">&gt;&gt;&gt; orterun.c at line 543 markus_at_linux-6wa6:/media/808CCB178CCB069E/MD
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Simulations/Test Simu1&gt;   sudo mpiexec -n 4 ./DLPOLY.Z [linux-6wa6:03731]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [[INVALID],INVALID] ORTE_ERROR_LOG: Not found in file runtime/orte_init.c at
</span><br>
<span class="quotelev3">&gt;&gt;&gt; line 125
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; It looks like orte_init failed for some reason; your parallel process is
</span><br>
<span class="quotelev3">&gt;&gt;&gt; likely to abort.  There are many reasons that a parallel process can fail
</span><br>
<span class="quotelev3">&gt;&gt;&gt; during orte_init; some of which are due to configuration or environment
</span><br>
<span class="quotelev3">&gt;&gt;&gt; problems.  This failure appears to be an internal failure; here's some
</span><br>
<span class="quotelev3">&gt;&gt;&gt; additional information (which may only be relevant to an Open MPI
</span><br>
<span class="quotelev3">&gt;&gt;&gt; developer):
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     orte_ess_base_select failed
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     --&gt;   Returned value Not found (-13) instead of ORTE_SUCCESS
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [linux-6wa6:03731] [[INVALID],INVALID] ORTE_ERROR_LOG: Not found in file
</span><br>
<span class="quotelev3">&gt;&gt;&gt; orterun.c at line 543
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Some Informations:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I use Open MPI 1.4.4, Suse 64bit, AMD quadcore
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; make check gives:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; make: *** No rule to make target `check'.  Stop.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I attached the ompi_info.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thx alot for your help,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; regards,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Markus
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Now i made open mpi new, but now im ggetting stuff like this:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ..................
</span><br>
<span class="quotelev2">&gt;&gt; /usr/lib64/gcc/x86_64-suse-linux/4.6/../../../../lib64/libmpi.so: undefined reference to `lam_ssi_base_param_find'
</span><br>
<span class="quotelev2">&gt;&gt; /usr/lib64/gcc/x86_64-suse-linux/4.6/../../../../lib64/libmpi.so: undefined reference to `asc_parse'
</span><br>
<span class="quotelev2">&gt;&gt; /usr/lib64/gcc/x86_64-suse-linux/4.6/../../../../lib64/libmpi.so: undefined reference to `lam_ssi_base_param_register_string'
</span><br>
<span class="quotelev2">&gt;&gt; /usr/lib64/gcc/x86_64-suse-linux/4.6/../../../../lib64/libmpi.so: undefined reference to `lam_ssi_base_param_register_int'
</span><br>
<span class="quotelev2">&gt;&gt; /usr/lib64/gcc/x86_64-suse-linux/4.6/../../../../lib64/libmpi.so: undefined reference to `lampanic'
</span><br>
<span class="quotelev2">&gt;&gt; /usr/lib64/gcc/x86_64-suse-linux/4.6/../../../../lib64/libmpi.so: undefined reference to `lam_thread_self'
</span><br>
<span class="quotelev2">&gt;&gt; /usr/lib64/gcc/x86_64-suse-linux/4.6/../../../../lib64/libmpi.so: undefined reference to `lam_debug_close'
</span><br>
<span class="quotelev2">&gt;&gt; /usr/local/lib64/libmpi_f77.so: undefined reference to `MPI_CONVERSION_FN_NULL'
</span><br>
<span class="quotelev2">&gt;&gt; /usr/local/lib64/libmpi_f77.so: undefined reference to `MPI_File_read_at_all'
</span><br>
<span class="quotelev2">&gt;&gt; /usr/lib64/gcc/x86_64-suse-linux/4.6/../../../../lib64/libmpi.so: undefined reference to `sfh_sock_set_buf_size'
</span><br>
<span class="quotelev2">&gt;&gt; /usr/lib64/gcc/x86_64-suse-linux/4.6/../../../../lib64/libmpi.so: undefined reference to `blktype'
</span><br>
<span class="quotelev2">&gt;&gt; /usr/local/lib64/libmpi_f77.so: undefined reference to `MPI_File_preallocate'
</span><br>
<span class="quotelev2">&gt;&gt; /usr/lib64/gcc/x86_64-suse-linux/4.6/../../../../lib64/libmpi.so: undefined reference to `ao_init'
</span><br>
<span class="quotelev2">&gt;&gt; /usr/lib64/gcc/x86_64-suse-linux/4.6/../../../../lib64/libmpi.so: undefined reference to `lam_mutex_destroy'
</span><br>
<span class="quotelev2">&gt;&gt; /usr/local/lib64/libmpi_f77.so: undefined reference to `MPI_File_iread_shared'
</span><br>
<span class="quotelev2">&gt;&gt; /usr/lib64/gcc/x86_64-suse-linux/4.6/../../../../lib64/libmpi.so: undefined reference to `al_init'
</span><br>
<span class="quotelev2">&gt;&gt; /usr/lib64/gcc/x86_64-suse-linux/4.6/../../../../lib64/libmpi.so: undefined reference to `stoi'
</span><br>
<span class="quotelev2">&gt;&gt; /usr/lib64/gcc/x86_64-suse-linux/4.6/../../../../lib64/libmpi.so: undefined reference to `lam_ssi_base_hostmap'
</span><br>
<span class="quotelev2">&gt;&gt; /usr/local/lib64/libmpi_f77.so: undefined reference to `MPI_FORTRAN_ERRCODES_IGNORE'
</span><br>
<span class="quotelev2">&gt;&gt; /usr/local/lib64/libmpi_f77.so: undefined reference to `MPI_File_close'
</span><br>
<span class="quotelev2">&gt;&gt; /usr/lib64/gcc/x86_64-suse-linux/4.6/../../../../lib64/libmpi.so: undefined reference to `al_next'
</span><br>
<span class="quotelev2">&gt;&gt; /usr/local/lib64/libmpi_f77.so: undefined reference to `MPI_Register_datarep'
</span><br>
<span class="quotelev2">&gt;&gt; /usr/local/lib64/libmpi_f77.so: undefined reference to `MPI_FORTRAN_STATUSES_IGNORE'
</span><br>
<span class="quotelev2">&gt;&gt; /usr/lib64/gcc/x86_64-suse-linux/4.6/../../../../lib64/libmpi.so: undefined reference to `nid_parse'
</span><br>
<span class="quotelev2">&gt;&gt; /usr/local/lib64/libmpi_f77.so: undefined reference to `mpi_fortran_bottom__'
</span><br>
<span class="quotelev2">&gt;&gt; /usr/local/lib64/libmpi_f77.so: undefined reference to `MPI_File_write_at'
</span><br>
<span class="quotelev2">&gt;&gt; /usr/local/lib64/libmpi_f77.so: undefined reference to `MPI_File_set_size'
</span><br>
<span class="quotelev2">&gt;&gt; /usr/lib64/gcc/x86_64-suse-linux/4.6/../../../../lib64/libmpi.so: undefined reference to `al_append'
</span><br>
<span class="quotelev2">&gt;&gt; /usr/lib64/gcc/x86_64-suse-linux/4.6/../../../../lib64/libmpi.so: undefined reference to `nid_free'
</span><br>
<span class="quotelev2">&gt;&gt; /usr/lib64/gcc/x86_64-suse-linux/4.6/../../../../lib64/libmpi.so: undefined reference to `terror'
</span><br>
<span class="quotelev2">&gt;&gt; /usr/lib64/gcc/x86_64-suse-linux/4.6/../../../../lib64/libmpi.so: undefined reference to `lam_perror'
</span><br>
<span class="quotelev2">&gt;&gt; /usr/local/lib64/libmpi_f77.so: undefined reference to `MPI_Type_create_f90_real'
</span><br>
<span class="quotelev2">&gt;&gt; /usr/local/lib64/libmpi_f77.so: undefined reference to `MPI_File_write_shared'
</span><br>
<span class="quotelev2">&gt;&gt; /usr/local/lib64/libmpi_f77.so: undefined reference to `ompi_attr_set_fortran_mpi1'
</span><br>
<span class="quotelev2">&gt;&gt; /usr/lib64/gcc/x86_64-suse-linux/4.6/../../../../lib64/libmpi.so: undefined reference to `lam_register_objects'
</span><br>
<span class="quotelev2">&gt;&gt; /usr/local/lib64/libmpi_f77.so: undefined reference to `MPI_File_write'
</span><br>
<span class="quotelev2">&gt;&gt; /usr/lib64/gcc/x86_64-suse-linux/4.6/../../../../lib64/libmpi.so: undefined reference to `lam_ssi_base_param_lookup_string'
</span><br>
<span class="quotelev2">&gt;&gt; /usr/lib64/gcc/x86_64-suse-linux/4.6/../../../../lib64/libmpi.so: undefined reference to `next_prime'
</span><br>
<span class="quotelev2">&gt;&gt; /usr/lib64/gcc/x86_64-suse-linux/4.6/../../../../lib64/libmpi.so: undefined reference to `show_help'
</span><br>
<span class="quotelev2">&gt;&gt; /usr/lib64/gcc/x86_64-suse-linux/4.6/../../../../lib64/libmpi.so: undefined reference to `lt_dlclose'
</span><br>
<span class="quotelev2">&gt;&gt; /usr/local/lib64/libmpi_f77.so: undefined reference to `MPI_File_write_ordered_end'
</span><br>
<span class="quotelev2">&gt;&gt; /usr/lib64/gcc/x86_64-suse-linux/4.6/../../../../lib64/libmpi.so: undefined reference to `lam_rtrnamepub'
</span><br>
<span class="quotelev2">&gt;&gt; /usr/local/lib64/libmpi_f77.so: undefined reference to `ompi_mpi_datatype_null'
</span><br>
<span class="quotelev2">&gt;&gt; /usr/local/lib64/libmpi_f77.so: undefined reference to `MPI_File_get_info'
</span><br>
<span class="quotelev2">&gt;&gt; /usr/lib64/gcc/x86_64-suse-linux/4.6/../../../../lib64/libmpi.so: undefined reference to `ah_expand'
</span><br>
<span class="quotelev2">&gt;&gt; /usr/lib64/gcc/x86_64-suse-linux/4.6/../../../../lib64/libmpi.so: undefined reference to `lam_ssi_cr_verbose'
</span><br>
<span class="quotelev2">&gt;&gt; /usr/lib64/gcc/x86_64-suse-linux/4.6/../../../../lib64/libmpi.so: undefined reference to `lam_arr_find'
</span><br>
<span class="quotelev2">&gt;&gt; /usr/lib64/gcc/x86_64-suse-linux/4.6/../../../../lib64/libmpi.so: undefined reference to `bfiselect'
</span><br>
<span class="quotelev2">&gt;&gt; /usr/local/lib64/libmpi_f77.so: undefined reference to `MPI_File_set_view'
</span><br>
<span class="quotelev2">&gt;&gt; /usr/lib64/gcc/x86_64-suse-linux/4.6/../../../../lib64/libmpi.so: undefined reference to `lam_rtrnamedel'
</span><br>
<span class="quotelev2">&gt;&gt; /usr/lib64/gcc/x86_64-suse-linux/4.6/../../../../lib64/libmpi.so: undefined reference to `lam_mutex_lock'
</span><br>
<span class="quotelev2">&gt;&gt; /usr/lib64/gcc/x86_64-suse-linux/4.6/../../../../lib64/libmpi.so: undefined reference to `bfiprobe'
</span><br>
<span class="quotelev2">&gt;&gt; /usr/lib64/gcc/x86_64-suse-linux/4.6/../../../../lib64/libmpi.so: undefined reference to `lam_gethostname'
</span><br>
<span class="quotelev2">&gt;&gt; /usr/local/lib64/libmpi_f77.so: undefined reference to `MPI_Win_lock'
</span><br>
<span class="quotelev2">&gt;&gt; /usr/lib64/gcc/x86_64-suse-linux/4.6/../../../../lib64/libmpi.so: undefined reference to `lam_mkcoll'
</span><br>
<span class="quotelev2">&gt;&gt; /usr/local/lib64/libmpi_f77.so: undefined reference to `MPI_Request_get_status'
</span><br>
<span class="quotelev2">&gt;&gt; /usr/local/lib64/libmpi_f77.so: undefined reference to `mpi_fortran_argv_null'
</span><br>
<span class="quotelev2">&gt;&gt; /usr/local/lib64/libmpi_f77.so: undefined reference to `mpi_conversion_fn_null__'
</span><br>
<span class="quotelev2">&gt;&gt; /usr/local/lib64/libmpi_f77.so: undefined reference to `ompi_attr_create_keyval_fint'
</span><br>
<span class="quotelev2">&gt;&gt; /usr/lib64/gcc/x86_64-suse-linux/4.6/../../../../lib64/libmpi.so: undefined reference to `ah_init'
</span><br>
<span class="quotelev2">&gt;&gt; /usr/local/lib64/libmpi_f77.so: undefined reference to `MPI_File_read_all_end'
</span><br>
<span class="quotelev2">&gt;&gt; /usr/lib64/gcc/x86_64-suse-linux/4.6/../../../../lib64/libmpi.so: undefined reference to `_kio'
</span><br>
<span class="quotelev2">&gt;&gt; /usr/lib64/gcc/x86_64-suse-linux/4.6/../../../../lib64/libmpi.so: undefined reference to `asc_environment'
</span><br>
<span class="quotelev2">&gt;&gt; /usr/lib64/gcc/x86_64-suse-linux/4.6/../../../../lib64/libmpi.so: undefined reference to `lam_mkpt'
</span><br>
<span class="quotelev2">&gt;&gt; /usr/lib64/gcc/x86_64-suse-linux/4.6/../../../../lib64/libmpi.so: undefined reference to `lam_mp_finalize'
</span><br>
<span class="quotelev2">&gt;&gt; /usr/lib64/gcc/x86_64-suse-linux/4.6/../../../../lib64/libmpi.so: undefined reference to `lam_ssi_base_module_find'
</span><br>
<span class="quotelev2">&gt;&gt; /usr/local/lib64/libmpi_f77.so: undefined reference to `MPI_File_call_errhandler'
</span><br>
<span class="quotelev2">&gt;&gt; /usr/local/lib64/libmpi_f77.so: undefined reference to `MPI_Add_error_string'
</span><br>
<span class="quotelev2">&gt;&gt; /usr/lib64/gcc/x86_64-suse-linux/4.6/../../../../lib64/libmpi.so: undefined reference to `lam_kexit'
</span><br>
<span class="quotelev2">&gt;&gt; /usr/lib64/gcc/x86_64-suse-linux/4.6/../../../../lib64/libmpi.so: undefined reference to `lam_arr_size'
</span><br>
<span class="quotelev2">&gt;&gt; /usr/local/lib64/libmpi_f77.so: undefined reference to `ompi_errcodes_intern'
</span><br>
<span class="quotelev2">&gt;&gt; /usr/local/lib64/libmpi_f77.so: undefined reference to `MPI_File_get_position'
</span><br>
<span class="quotelev2">&gt;&gt; /usr/lib64/gcc/x86_64-suse-linux/4.6/../../../../lib64/libmpi.so: undefined reference to `kexit'
</span><br>
<span class="quotelev2">&gt;&gt; /usr/lib64/gcc/x86_64-suse-linux/4.6/../../../../lib64/libmpi.so: undefined reference to `show_help_file'
</span><br>
<span class="quotelev2">&gt;&gt; /usr/local/lib64/libmpi_f77.so: undefined reference to `MPI_File_get_size'
</span><br>
<span class="quotelev2">&gt;&gt; /usr/lib64/gcc/x86_64-suse-linux/4.6/../../../../lib64/libmpi.so: undefined reference to `kpause'
</span><br>
<span class="quotelev2">&gt;&gt; /usr/local/lib64/libmpi_f77.so: undefined reference to `MPI_File_write_all'
</span><br>
<span class="quotelev2">&gt;&gt; /usr/lib64/gcc/x86_64-suse-linux/4.6/../../../../lib64/libmpi.so: undefined reference to `lam_trpoint'
</span><br>
<span class="quotelev2">&gt;&gt; /usr/local/lib64/libmpi_f77.so: undefined reference to `MPI_File_get_byte_offset'
</span><br>
<span class="quotelev2">&gt;&gt; /usr/lib64/gcc/x86_64-suse-linux/4.6/../../../../lib64/libmpi.so: undefined reference to `lam_mutex_init'
</span><br>
<span class="quotelev2">&gt;&gt; /usr/lib64/gcc/x86_64-suse-linux/4.6/../../../../lib64/libmpi.so: undefined reference to `lam_getpid'
</span><br>
<span class="quotelev2">&gt;&gt; /usr/local/lib64/libmpi_f77.so: undefined reference to `ompi_ddt_match_size'
</span><br>
<span class="quotelev2">&gt;&gt; /usr/local/lib64/libmpi_f77.so: undefined reference to `MPI_FORTRAN_ARGVS_NULL'
</span><br>
<span class="quotelev2">&gt;&gt; /usr/local/lib64/libmpi_f77.so: undefined reference to `MPI_Comm_call_errhandler'
</span><br>
<span class="quotelev2">&gt;&gt; /usr/local/lib64/libmpi_f77.so: undefined reference to `ompi_mpi_comm_world'
</span><br>
<span class="quotelev2">&gt;&gt; /usr/local/lib64/libmpi_f77.so: undefined reference to `mpi_fortran_argvs_null'
</span><br>
<span class="quotelev2">&gt;&gt; /usr/lib64/gcc/x86_64-suse-linux/4.6/../../../../lib64/libmpi.so: undefined reference to `lam_arr_remove'
</span><br>
<span class="quotelev2">&gt;&gt; /usr/lib64/gcc/x86_64-suse-linux/4.6/../../../../lib64/libmpi.so: undefined reference to `lam_ssi_did'
</span><br>
<span class="quotelev2">&gt;&gt; /usr/lib64/gcc/x86_64-suse-linux/4.6/../../../../lib64/libmpi.so: undefined reference to `mrev4'
</span><br>
<span class="quotelev2">&gt;&gt; /usr/lib64/gcc/x86_64-suse-linux/4.6/../../../../lib64/libmpi.so: undefined reference to `rpdoom'
</span><br>
<span class="quotelev2">&gt;&gt; /usr/local/lib64/libmpi_f77.so: undefined reference to `MPI_File_get_position_shared'
</span><br>
<span class="quotelev2">&gt;&gt; /usr/local/lib64/libmpi_f77.so: undefined reference to `ompi_mpi_errors_are_fatal_comm_handler'
</span><br>
<span class="quotelev2">&gt;&gt; /usr/lib64/gcc/x86_64-suse-linux/4.6/../../../../lib64/libmpi.so: undefined reference to `_lam_signal'
</span><br>
<span class="quotelev2">&gt;&gt; /usr/local/lib64/libmpi_f77.so: undefined reference to `ompi_fortran_string_c2f'
</span><br>
<span class="quotelev2">&gt;&gt; /usr/lib64/gcc/x86_64-suse-linux/4.6/../../../../lib64/libmpi.so: undefined reference to `lam_reset_pid_cache'
</span><br>
<span class="quotelev2">&gt;&gt; /usr/lib64/gcc/x86_64-suse-linux/4.6/../../../../lib64/libmpi.so: undefined reference to `bfselect'
</span><br>
<span class="quotelev2">&gt;&gt; /usr/lib64/gcc/x86_64-suse-linux/4.6/../../../../lib64/libmpi.so: undefined reference to `lam_ssi_base_open'
</span><br>
<span class="quotelev2">&gt;&gt; /usr/local/lib64/libmpi_f77.so: undefined reference to `MPI_File_write_at_all_end'
</span><br>
<span class="quotelev2">&gt;&gt; /usr/lib64/gcc/x86_64-suse-linux/4.6/../../../../lib64/libmpi.so: undefined reference to `lam_ssi_base_close'
</span><br>
<span class="quotelev2">&gt;&gt; /usr/lib64/gcc/x86_64-suse-linux/4.6/../../../../lib64/libmpi.so: undefined reference to `lt_dlsym'
</span><br>
<span class="quotelev2">&gt;&gt; /usr/lib64/gcc/x86_64-suse-linux/4.6/../../../../lib64/libmpi.so: undefined reference to `lam_ssi_base_set_verbose'
</span><br>
<span class="quotelev2">&gt;&gt; /usr/lib64/gcc/x86_64-suse-linux/4.6/../../../../lib64/libmpi.so: undefined reference to `lam_arr_init'
</span><br>
<span class="quotelev2">&gt;&gt; /usr/local/lib64/libmpi_f77.so: undefined reference to `MPI_Type_create_f90_integer'
</span><br>
<span class="quotelev2">&gt;&gt; /usr/local/lib64/libmpi_f77.so: undefined reference to `ompi_registered_datareps'
</span><br>
<span class="quotelev2">&gt;&gt; /usr/lib64/gcc/x86_64-suse-linux/4.6/../../../../lib64/libmpi.so: undefined reference to `rw'
</span><br>
<span class="quotelev2">&gt;&gt; /usr/local/lib64/libmpi_f77.so: undefined reference to `MPI_Type_create_f90_complex'
</span><br>
<span class="quotelev2">&gt;&gt; /usr/local/lib64/libmpi_f77.so: undefined reference to `MPI_Status_set_cancelled'
</span><br>
<span class="quotelev2">&gt;&gt; /usr/lib64/gcc/x86_64-suse-linux/4.6/../../../../lib64/libmpi.so: undefined reference to `getroute'
</span><br>
<span class="quotelev2">&gt;&gt; /usr/lib64/gcc/x86_64-suse-linux/4.6/../../../../lib64/libmpi.so: undefined reference to `lam_deregister_object'
</span><br>
<span class="quotelev2">&gt;&gt; /usr/lib64/gcc/x86_64-suse-linux/4.6/../../../../lib64/libmpi.so: undefined reference to `ldogetlinks'
</span><br>
<span class="quotelev2">&gt;&gt; /usr/local/lib64/libmpi_f77.so: undefined reference to `MPI_Win_call_errhandler'
</span><br>
<span class="quotelev2">&gt;&gt; /usr/lib64/gcc/x86_64-suse-linux/4.6/../../../../lib64/libmpi.so: undefined reference to `lam_strncpy'
</span><br>
<span class="quotelev2">&gt;&gt; /usr/local/lib64/libmpi_f77.so: undefined reference to `MPI_Add_error_code'
</span><br>
<span class="quotelev2">&gt;&gt; /usr/lib64/gcc/x86_64-suse-linux/4.6/../../../../lib64/libmpi.so: undefined reference to `microsleep'
</span><br>
<span class="quotelev2">&gt;&gt; /usr/lib64/gcc/x86_64-suse-linux/4.6/../../../../lib64/libmpi.so: undefined reference to `asc_run'
</span><br>
<span class="quotelev2">&gt;&gt; /usr/lib64/gcc/x86_64-suse-linux/4.6/../../../../lib64/libmpi.so: undefined reference to `lam_mutex_unlock'
</span><br>
<span class="quotelev2">&gt;&gt; /usr/lib64/gcc/x86_64-suse-linux/4.6/../../../../lib64/libmpi.so: undefined reference to `ah_free'
</span><br>
<span class="quotelev2">&gt;&gt; /usr/lib64/gcc/x86_64-suse-linux/4.6/../../../../lib64/libmpi.so: undefined reference to `kinit'
</span><br>
<span class="quotelev2">&gt;&gt; /usr/lib64/gcc/x86_64-suse-linux/4.6/../../../../lib64/libmpi.so: undefined reference to `lam_thread_create'
</span><br>
<span class="quotelev2">&gt;&gt; /usr/local/lib64/libmpi_f77.so: undefined reference to `MPI_Grequest_start'
</span><br>
<span class="quotelev2">&gt;&gt; /usr/local/lib64/libmpi_f77.so: undefined reference to `mpi_fortran_status_ignore__'
</span><br>
<span class="quotelev2">&gt;&gt; /usr/lib64/gcc/x86_64-suse-linux/4.6/../../../../lib64/libmpi.so: undefined reference to `kenter'
</span><br>
<span class="quotelev2">&gt;&gt; collect2: ld returned 1 exit status
</span><br>
<span class="quotelev2">&gt;&gt; make[1]: *** [master] Error 1
</span><br>
<span class="quotelev2">&gt;&gt; make[1]: Leaving directory `/home/markus/Downloads/dl_poly_4.02/source'
</span><br>
<span class="quotelev2">&gt;&gt; make: *** [hpc] Error 2
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Whats wrong here?
</span><br>
<span class="quotelev2">&gt;&gt; How can i tell this where to find these things?
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17837.php">Ralph Castain: "Re: [OMPI users] open-mpi error"</a>
<li><strong>Previous message:</strong> <a href="17835.php">Ralph Castain: "Re: [OMPI users] How are the Open MPI processes spawned?"</a>
<li><strong>In reply to:</strong> <a href="17829.php">Ralph Castain: "Re: [OMPI users] open-mpi error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17837.php">Ralph Castain: "Re: [OMPI users] open-mpi error"</a>
<li><strong>Reply:</strong> <a href="17837.php">Ralph Castain: "Re: [OMPI users] open-mpi error"</a>
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

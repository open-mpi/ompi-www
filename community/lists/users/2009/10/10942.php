<?
$subject_val = "[OMPI users] installation with two different compilers";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Oct 22 13:28:54 2009" -->
<!-- isoreceived="20091022172854" -->
<!-- sent="Thu, 22 Oct 2009 19:28:49 +0200" -->
<!-- isosent="20091022172849" -->
<!-- name="Francesco Pietra" -->
<!-- email="chiendarret_at_[hidden]" -->
<!-- subject="[OMPI users] installation with two different compilers" -->
<!-- id="b87c422a0910221028l1b426dfm6a629f025a17605e_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] installation with two different compilers<br>
<strong>From:</strong> Francesco Pietra (<em>chiendarret_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-10-22 13:28:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10943.php">Rob Latham: "Re: [OMPI users] MPI_File_open return error code 16"</a>
<li><strong>Previous message:</strong> <a href="10941.php">Jeff Squyres: "Re: [OMPI users] Any way to make &quot;btl_tcp_if_exclude&quot; option system wide?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10952.php">Francesco Pietra: "[OMPI users] Fwd: installation with two different compilers"</a>
<li><strong>Reply:</strong> <a href="10952.php">Francesco Pietra: "[OMPI users] Fwd: installation with two different compilers"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi:
<br>
Sure there is the howto somewhere, though not found. With Debian Linux
<br>
amd64 lenny I have a working installation of openmpi-1.2.6, intel
<br>
compiled, mpif90 etc in /usr/local/bin. For program OCTOPUS I need
<br>
gfortran-compiled openmpi. I did so with openmpi-1.3.3, mpif90 etc (as
<br>
symlink to /opt/bin/opal_wrapper) in /opt/bin.
<br>
<p>The compilation was carried out as follows:
<br>
./configure --prefix=/opt FC=/usr/bin/gfortran F77=/usr/bin/gfortran
<br>
CC=/usr/bin/gcc CXX=/usr/bin/g++ --with-libnuma=/usr/lib
<br>
<p>As I am the only user, I use to place everything in my .bashrc. Specifically,
<br>
<p>#For openmpi-1.2.6 Intel compiler
<br>
<p>if [ &quot;$LD_LIBRARY_PATH&quot; ] ; then
<br>
&nbsp;&nbsp;export LD_LIBRARY_PATH=&quot;$LD_LIBRARY_PATH:/usr/local/lib&quot;
<br>
else
<br>
&nbsp;&nbsp;export LD_LIBRARY_PATH=&quot;/usr/local/lib&quot;
<br>
fi
<br>
<p>#For openmpi-1.3.3 gnu (gfortran) compiled
<br>
<p>if [ &quot;$LD_LIBRARY_PATH&quot; ] ; then
<br>
&nbsp;&nbsp;export LD_LIBRARY_PATH=&quot;$LD_LIBRARY_PATH:/opt/lib&quot;
<br>
else
<br>
&nbsp;&nbsp;export LD_LIBRARY_PATH=&quot;/opt/lib&quot;
<br>
fi
<br>
<p><p><p>Command
<br>
$ompi_info
<br>
always reports about the intel compiled. How can I have info about the
<br>
gfortran compiled (and runtime) ?
<br>
<p>If relevant:
<br>
<p>francesco_at_tya64:~$ $PATH
<br>
bash: /opt/etsf/bin:/usr/local/delphi_4.1.1:/opt/intel/cce/10.1.015/bin:/opt/intel/fce/10.1.015/bin:/usr/local/bin/vmd:/usr/local/chimera/bin:/opt/etsf/bin:/usr/local/delphi_4.1.1:/opt/intel/cce/10.1.015/bin:/opt/intel/fce/10.1.015/bin:/usr/local/bin/vmd:/usr/local/chimera/bin:/opt/etsf/bin:/usr/local/delphi_4.1.1:/opt/intel/cce/10.1.015/bin:/opt/intel/fce/10.1.015/bin:/usr/local/bin/vmd:/usr/local/chimera/bin:/usr/local/bin:/usr/bin:/bin:/usr/games:/home/francesco/hole2/exe:/usr/local/amber10/exe:/usr/local/dock6/bin:/home/francesco/hole2/exe:/usr/local/amber10/exe:/usr/local/dock6/bin:/home/francesco/hole2/exe:/usr/local/amber10/exe:/usr/local/dock6/bin:
<br>
No such file or directory
<br>
francesco_at_tya64:~$
<br>
<p>francesco_at_tya64:~$ $LD_LIBRARY_PATH
<br>
bash: /opt/intel/mkl/10.0.1.014/lib/em64t:/opt/intel/cce/10.1.015/lib:/opt/intel/fce/10.1.015/lib:/opt/intel/mkl/10.0.1.014/lib/em64t:/opt/intel/cce/10.1.015/lib:/opt/intel/fce/10.1.015/lib:/usr/local/lib:/opt/lib:/opt/acml4.2.0/gfortran64_mp_int64/lib:/usr/local/lib:/opt/lib:/opt/acml4.2.0/gfortran64_mp_int64/lib:
<br>
No such file or directory
<br>
francesco_at_tya64:~$
<br>
<p>I do not understand this &quot;No such file or directory&quot;; the library
<br>
exists. Surely there is something wrong with my handling.
<br>
<p>Under these conditions the parallel ./configure of OCTOPUS with
<br>
<p>export FC=/opt/bin/mpif90
<br>
export CC=/opt/bin/mpicc (C++ is not used)
<br>
<p><p>reports errors of the type:
<br>
configure:5478: /opt/bin/mpicc -E  conftest.c
<br>
conftest.c:13:28: error: ac_nonexistent.h: No such file or directory
<br>
<p>and
<br>
<p>$ make
<br>
fails, finding a lot of problems with mpi:
<br>
<p>......
<br>
/usr/lib/libmpi.so: undefined reference to `orte_data_value_t_class'
<br>
/usr/lib/libmpi.so: undefined reference to `opal_progress_event_increment'
<br>
/usr/lib/libmpi_f77.so: undefined reference to `mpi_conversion_fn_null__'
<br>
/usr/lib/libmpi.so: undefined reference to `opal_progress_events'
<br>
/usr/lib/libmpi.so: undefined reference to `orte_hash_table_set_proc'
<br>
/usr/lib/libmpi_f77.so: undefined reference to `mpi_conversion_fn_null'
<br>
/usr/lib/libmpi.so: undefined reference to `orte_gpr'
<br>
/usr/lib/libmpi.so: undefined reference to `orte_init_stage2'
<br>
/usr/lib/libmpi.so: undefined reference to `orte_schema'
<br>
/usr/lib/libmpi.so: undefined reference to `orte_gpr_trigger_t_class'
<br>
/usr/lib/libmpi_f77.so: undefined reference to `MPI_CONVERSION_FN_NULL'
<br>
/usr/lib/libmpi.so: undefined reference to `orte_ns'
<br>
/usr/lib/libmpi_f77.so: undefined reference to `ompi_registered_datareps'
<br>
/usr/lib/libmpi_f77.so: undefined reference to `mpi_conversion_fn_null_'
<br>
/usr/lib/libmpi.so: undefined reference to `opal_progress_mpi_init'
<br>
/usr/lib/libmpi.so: undefined reference to `orte_gpr_base_selected_component'
<br>
/usr/lib/libmpi.so: undefined reference to `orte_smr'
<br>
/usr/lib/libmpi.so: undefined reference to `opal_progress_mpi_disable'
<br>
/usr/lib/libmpi.so: undefined reference to `orte_app_context_map_t_class'
<br>
/usr/lib/libmpi.so: undefined reference to `orte_ns_name_wildcard'
<br>
/usr/lib/libmpi.so: undefined reference to `orte_system_info'
<br>
/usr/lib/libmpi.so: undefined reference to `orte_buffer_t_class'
<br>
/usr/lib/libmpi.so: undefined reference to `orte_rmgr'
<br>
/usr/lib/libmpi.so: undefined reference to `opal_progress_event_decrement'
<br>
/usr/lib/libmpi.so: undefined reference to `orte_hash_table_get_proc'
<br>
/usr/lib/libmpi.so: undefined reference to `orte_init_stage1'
<br>
/usr/lib/libmpi.so: undefined reference to `orte_dss'
<br>
/usr/lib/libmpi.so: undefined reference to `orte_gpr_subscription_t_class'
<br>
/usr/lib/libmpi.so: undefined reference to `opal_progress_mpi_enable'
<br>
make[3]: *** [octopus_mpi] Error 1
<br>
make[3]: Leaving directory `/home/francesco/octopus/octopus-3.1.0/src/main'
<br>
make[2]: *** [all-recursive] Error 1
<br>
make[2]: Leaving directory `/home/francesco/octopus/octopus-3.1.0/src'
<br>
make[1]: *** [all-recursive] Error 1
<br>
make[1]: Leaving directory `/home/francesco/octopus/octopus-3.1.0'
<br>
make: *** [all] Error 2
<br>
francesco_at_tya64:~/octopus/octopus-3.1.0$
<br>
<p>Thanks for help
<br>
<p>francesco pietra
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10943.php">Rob Latham: "Re: [OMPI users] MPI_File_open return error code 16"</a>
<li><strong>Previous message:</strong> <a href="10941.php">Jeff Squyres: "Re: [OMPI users] Any way to make &quot;btl_tcp_if_exclude&quot; option system wide?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10952.php">Francesco Pietra: "[OMPI users] Fwd: installation with two different compilers"</a>
<li><strong>Reply:</strong> <a href="10952.php">Francesco Pietra: "[OMPI users] Fwd: installation with two different compilers"</a>
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

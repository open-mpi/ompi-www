<?
$subject_val = "Re: [OMPI users] undefined reference to `netcdf_mp_nf90_open_'";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jun 27 12:06:47 2012" -->
<!-- isoreceived="20120627160647" -->
<!-- sent="Wed, 27 Jun 2012 21:06:41 +0500" -->
<!-- isosent="20120627160641" -->
<!-- name="Syed Ahsan Ali" -->
<!-- email="ahsanshah01_at_[hidden]" -->
<!-- subject="Re: [OMPI users] undefined reference to `netcdf_mp_nf90_open_'" -->
<!-- id="CAMvdAs+c6zrNBHZd4uuz59VnP=LuqvAf4wRp1qjrU0ajBO-M_w_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CAGR4S9HEG4xtYmnt7BF5hTLopGDJ15ONFWb9GQ7dCX2mnZ_mHw_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] undefined reference to `netcdf_mp_nf90_open_'<br>
<strong>From:</strong> Syed Ahsan Ali (<em>ahsanshah01_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-06-27 12:06:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19679.php">Syed Ahsan Ali: "Re: [OMPI users] undefined reference to `netcdf_mp_nf90_open_'"</a>
<li><strong>Previous message:</strong> <a href="19677.php">Syed Ahsan Ali: "Re: [OMPI users] undefined reference to `netcdf_mp_nf90_open_'"</a>
<li><strong>In reply to:</strong> <a href="19669.php">Dmitry N. Mikushin: "Re: [OMPI users] undefined reference to `netcdf_mp_nf90_open_'"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear Dima
<br>
<p>I was not sure but it seemed to be like something related to netcdf and
<br>
mpif90. I have struggling with the compilation of comso, int2lm parallel
<br>
has been installed successfully but cosmo is giving this error. I don't
<br>
have any -lnetcdf or -lnetcdff in linker options of the Fopts file. I tried
<br>
recompiling netcdf with mpif90 option. Your help with the configuration of
<br>
cosmo would be higly appreciated.
<br>
<p>Best Regards
<br>
Ahsan
<br>
<p>On Tue, Jun 26, 2012 at 6:21 PM, Dmitry N. Mikushin &lt;maemarcus_at_[hidden]&gt;wrote:
<br>
<p><span class="quotelev1">&gt; Dear Syed,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Why do you think it is related to MPI?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; You seem to be compiling the COSMO model, which depends on netcdf lib, but
</span><br>
<span class="quotelev1">&gt; the symbols are not passed to linker by some reason. Two main reasons are:
</span><br>
<span class="quotelev1">&gt; (1) the library linking flag is missing (check you have something like
</span><br>
<span class="quotelev1">&gt; -lnetcdf -lnetcdff in your linker command line), (2) The netcdf Fortran
</span><br>
<span class="quotelev1">&gt; bindings are compiled with a different naming notation (check names in the
</span><br>
<span class="quotelev1">&gt; lib really contain the expected number of final underscores).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I compiled cosmo 4.22 with openmpi and netcdf not long ago without any
</span><br>
<span class="quotelev1">&gt; problems.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Best,
</span><br>
<span class="quotelev1">&gt; - Dima.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2012/6/26 Syed Ahsan Ali &lt;ahsanshah01_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Dear All
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I am getting following error while compilation of an application. Seems
</span><br>
<span class="quotelev2">&gt;&gt; like something related to netcdf and mpif90. Although I have compiled
</span><br>
<span class="quotelev2">&gt;&gt; netcdf with mpif90 option, dont why this error is happening. Any hint would
</span><br>
<span class="quotelev2">&gt;&gt; be highly appreciated.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/obj/src_obs_proc_cdf.o: In
</span><br>
<span class="quotelev2">&gt;&gt; function `src_obs_proc_cdf_mp_obs_cdf_read_org_':
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x17aa):
</span><br>
<span class="quotelev2">&gt;&gt; undefined reference to `netcdf_mp_nf90_open_'
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/obj/src_obs_proc_cdf.o: In
</span><br>
<span class="quotelev2">&gt;&gt; function `src_obs_proc_cdf_mp_obs_cdf_read_temp_pilot_':
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x1000e):
</span><br>
<span class="quotelev2">&gt;&gt; undefined reference to `netcdf_mp_nf90_inq_varid_'
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x10039):
</span><br>
<span class="quotelev2">&gt;&gt; undefined reference to `netcdf_mp_nf90_inq_varid_'
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x10064):
</span><br>
<span class="quotelev2">&gt;&gt; undefined reference to `netcdf_mp_nf90_inq_varid_'
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x1008b):
</span><br>
<span class="quotelev2">&gt;&gt; undefined reference to `netcdf_mp_nf90_inq_varid_'
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x100c8):
</span><br>
<span class="quotelev2">&gt;&gt; undefined reference to `netcdf_mp_nf90_inq_varid_'
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x10227):
</span><br>
<span class="quotelev2">&gt;&gt; undefined reference to `netcdf_mp_nf90_get_var_1d_fourbyteint_'
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x102eb):
</span><br>
<span class="quotelev2">&gt;&gt; undefined reference to `netcdf_mp_nf90_get_var_1d_fourbyteint_'
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x103af):
</span><br>
<span class="quotelev2">&gt;&gt; undefined reference to `netcdf_mp_nf90_get_var_1d_fourbyteint_'
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x10473):
</span><br>
<span class="quotelev2">&gt;&gt; undefined reference to `netcdf_mp_nf90_get_var_1d_fourbyteint_'
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x10559):
</span><br>
<span class="quotelev2">&gt;&gt; undefined reference to `netcdf_mp_nf90_get_var_1d_fourbyteint_'
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x10890):
</span><br>
<span class="quotelev2">&gt;&gt; undefined reference to `netcdf_mp_nf90_inq_varid_'
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x108bb):
</span><br>
<span class="quotelev2">&gt;&gt; undefined reference to `netcdf_mp_nf90_inq_varid_'
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x108e2):
</span><br>
<span class="quotelev2">&gt;&gt; undefined reference to `netcdf_mp_nf90_inq_varid_'
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x10909):
</span><br>
<span class="quotelev2">&gt;&gt; undefined reference to `netcdf_mp_nf90_inq_varid_'
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x10930):
</span><br>
<span class="quotelev2">&gt;&gt; undefined reference to `netcdf_mp_nf90_inq_varid_'
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/obj/src_obs_proc_cdf.o:/home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x109e8):
</span><br>
<span class="quotelev2">&gt;&gt; more undefined references to `netcdf_mp_nf90_inq_varid_' follow
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/obj/src_obs_proc_cdf.o: In
</span><br>
<span class="quotelev2">&gt;&gt; function `src_obs_proc_cdf_mp_obs_cdf_read_temp_pilot_':
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x10abc):
</span><br>
<span class="quotelev2">&gt;&gt; undefined reference to `netcdf_mp_nf90_get_var_1d_fourbyteint_'
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x10b8c):
</span><br>
<span class="quotelev2">&gt;&gt; undefined reference to `netcdf_mp_nf90_get_var_1d_fourbyteint_'
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x10c5c):
</span><br>
<span class="quotelev2">&gt;&gt; undefined reference to `netcdf_mp_nf90_get_var_1d_eightbytereal_'
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x10d2c):
</span><br>
<span class="quotelev2">&gt;&gt; undefined reference to `netcdf_mp_nf90_get_var_1d_fourbyteint_'
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x10dfc):
</span><br>
<span class="quotelev2">&gt;&gt; undefined reference to `netcdf_mp_nf90_get_var_1d_fourbyteint_'
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x10ecc):
</span><br>
<span class="quotelev2">&gt;&gt; undefined reference to `netcdf_mp_nf90_get_var_1d_fourbyteint_'
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x10ef3):
</span><br>
<span class="quotelev2">&gt;&gt; undefined reference to `netcdf_mp_nf90_inq_varid_'
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x10fbb):
</span><br>
<span class="quotelev2">&gt;&gt; undefined reference to `netcdf_mp_nf90_get_var_1d_fourbyteint_'
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x1105a):
</span><br>
<span class="quotelev2">&gt;&gt; undefined reference to `netcdf_mp_nf90_inq_varid_'
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x110cb):
</span><br>
<span class="quotelev2">&gt;&gt; undefined reference to `netcdf_mp_nf90_inquire_variable_'
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x11102):
</span><br>
<span class="quotelev2">&gt;&gt; undefined reference to `netcdf_mp_nf90_inquire_dimension_'
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x118be):
</span><br>
<span class="quotelev2">&gt;&gt; undefined reference to `netcdf_mp_nf90_inq_varid_'
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x118e9):
</span><br>
<span class="quotelev2">&gt;&gt; undefined reference to `netcdf_mp_nf90_inq_varid_'
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x11914):
</span><br>
<span class="quotelev2">&gt;&gt; undefined reference to `netcdf_mp_nf90_inq_varid_'
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x1193b):
</span><br>
<span class="quotelev2">&gt;&gt; undefined reference to `netcdf_mp_nf90_inq_varid_'
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x11962):
</span><br>
<span class="quotelev2">&gt;&gt; undefined reference to `netcdf_mp_nf90_inq_varid_'
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/obj/src_obs_proc_cdf.o:/home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x11989):
</span><br>
<span class="quotelev2">&gt;&gt; more undefined references to `netcdf_mp_nf90_inq_varid_' follow
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/obj/src_obs_proc_cdf.o: In
</span><br>
<span class="quotelev2">&gt;&gt; function `src_obs_proc_cdf_mp_obs_cdf_read_temp_pilot_':
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x11c36):
</span><br>
<span class="quotelev2">&gt;&gt; undefined reference to `netcdf_mp_nf90_get_var_2d_fourbyteint_'
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x11ceb):
</span><br>
<span class="quotelev2">&gt;&gt; undefined reference to `netcdf_mp_nf90_get_var_2d_fourbyteint_'
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x11da0):
</span><br>
<span class="quotelev2">&gt;&gt; undefined reference to `netcdf_mp_nf90_get_var_2d_fourbyteint_'
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x11e55):
</span><br>
<span class="quotelev2">&gt;&gt; undefined reference to `netcdf_mp_nf90_get_var_2d_eightbytereal_'
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x11f0a):
</span><br>
<span class="quotelev2">&gt;&gt; undefined reference to `netcdf_mp_nf90_get_var_2d_eightbytereal_'
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x11fbf):
</span><br>
<span class="quotelev2">&gt;&gt; undefined reference to `netcdf_mp_nf90_get_var_2d_eightbytereal_'
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x120bf):
</span><br>
<span class="quotelev2">&gt;&gt; undefined reference to `netcdf_mp_nf90_get_var_2d_eightbytereal_'
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x12230):
</span><br>
<span class="quotelev2">&gt;&gt; undefined reference to `netcdf_mp_nf90_get_var_2d_fourbyteint_'
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x122fb):
</span><br>
<span class="quotelev2">&gt;&gt; undefined reference to `netcdf_mp_nf90_get_var_2d_fourbyteint_'
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x123b0):
</span><br>
<span class="quotelev2">&gt;&gt; undefined reference to `netcdf_mp_nf90_get_var_2d_eightbytereal_'
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x1246d):
</span><br>
<span class="quotelev2">&gt;&gt; undefined reference to `netcdf_mp_nf90_get_var_2d_eightbytereal_'
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x12522):
</span><br>
<span class="quotelev2">&gt;&gt; undefined reference to `netcdf_mp_nf90_get_var_2d_eightbytereal_'
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x14a6c):
</span><br>
<span class="quotelev2">&gt;&gt; undefined reference to `netcdf_mp_nf90_strerror_'
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/obj/src_obs_proc_cdf.o: In
</span><br>
<span class="quotelev2">&gt;&gt; function `src_obs_proc_cdf_mp_obs_cdf_read_common_':
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x29e3d):
</span><br>
<span class="quotelev2">&gt;&gt; undefined reference to `netcdf_mp_nf90_inq_varid_'
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x29ec3):
</span><br>
<span class="quotelev2">&gt;&gt; undefined reference to `netcdf_mp_nf90_inquire_variable_'
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x29fa8):
</span><br>
<span class="quotelev2">&gt;&gt; undefined reference to `netcdf_mp_nf90_inquire_dimension_'
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x29fca):
</span><br>
<span class="quotelev2">&gt;&gt; undefined reference to `netcdf_mp_nf90_get_att_one_fourbyteint_'
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x2a801):
</span><br>
<span class="quotelev2">&gt;&gt; undefined reference to `netcdf_mp_nf90_inq_varid_'
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x2a821):
</span><br>
<span class="quotelev2">&gt;&gt; undefined reference to `netcdf_mp_nf90_inq_varid_'
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x2a841):
</span><br>
<span class="quotelev2">&gt;&gt; undefined reference to `netcdf_mp_nf90_inq_varid_'
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x2a861):
</span><br>
<span class="quotelev2">&gt;&gt; undefined reference to `netcdf_mp_nf90_inq_varid_'
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x2a8f9):
</span><br>
<span class="quotelev2">&gt;&gt; undefined reference to `netcdf_mp_nf90_inq_varid_'
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x2a928):
</span><br>
<span class="quotelev2">&gt;&gt; undefined reference to `netcdf_mp_nf90_get_var_1d_fourbyteint_'
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x2a94f):
</span><br>
<span class="quotelev2">&gt;&gt; undefined reference to `netcdf_mp_nf90_get_var_1d_fourbyteint_'
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x2a976):
</span><br>
<span class="quotelev2">&gt;&gt; undefined reference to `netcdf_mp_nf90_get_var_1d_fourbyteint_'
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x2a99d):
</span><br>
<span class="quotelev2">&gt;&gt; undefined reference to `netcdf_mp_nf90_get_var_1d_fourbyteint_'
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x2a9c4):
</span><br>
<span class="quotelev2">&gt;&gt; undefined reference to `netcdf_mp_nf90_get_var_1d_fourbyteint_'
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x2d69a):
</span><br>
<span class="quotelev2">&gt;&gt; undefined reference to `netcdf_mp_nf90_inq_varid_'
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x2d6ba):
</span><br>
<span class="quotelev2">&gt;&gt; undefined reference to `netcdf_mp_nf90_inq_varid_'
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x2d799):
</span><br>
<span class="quotelev2">&gt;&gt; undefined reference to `netcdf_mp_nf90_get_var_1d_fourbyteint_'
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x2d870):
</span><br>
<span class="quotelev2">&gt;&gt; undefined reference to `netcdf_mp_nf90_get_var_1d_fourbyteint_'
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x2ddfa):
</span><br>
<span class="quotelev2">&gt;&gt; undefined reference to `netcdf_mp_nf90_inq_varid_'
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x2de1e):
</span><br>
<span class="quotelev2">&gt;&gt; undefined reference to `netcdf_mp_nf90_inq_varid_'
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x2de3e):
</span><br>
<span class="quotelev2">&gt;&gt; undefined reference to `netcdf_mp_nf90_inq_varid_'
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x2df1a):
</span><br>
<span class="quotelev2">&gt;&gt; undefined reference to `netcdf_mp_nf90_get_var_1d_fourbyteint_'
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x2dfee):
</span><br>
<span class="quotelev2">&gt;&gt; undefined reference to `netcdf_mp_nf90_get_var_1d_fourbyteint_'
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x2e16c):
</span><br>
<span class="quotelev2">&gt;&gt; undefined reference to `netcdf_mp_nf90_inq_varid_'
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x2e248):
</span><br>
<span class="quotelev2">&gt;&gt; undefined reference to `netcdf_mp_nf90_get_var_1d_fourbyteint_'
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x2ece1):
</span><br>
<span class="quotelev2">&gt;&gt; undefined reference to `netcdf_mp_nf90_inq_varid_'
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x2ed01):
</span><br>
<span class="quotelev2">&gt;&gt; undefined reference to `netcdf_mp_nf90_inq_varid_'
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x2eddd):
</span><br>
<span class="quotelev2">&gt;&gt; undefined reference to `netcdf_mp_nf90_get_var_1d_fourbyteint_'
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x2eeb1):
</span><br>
<span class="quotelev2">&gt;&gt; undefined reference to `netcdf_mp_nf90_get_var_1d_fourbyteint_'
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x2eecd):
</span><br>
<span class="quotelev2">&gt;&gt; undefined reference to `netcdf_mp_nf90_inq_varid_'
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x2efc2):
</span><br>
<span class="quotelev2">&gt;&gt; undefined reference to `netcdf_mp_nf90_get_var_1d_fourbyteint_'
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x2f1ab):
</span><br>
<span class="quotelev2">&gt;&gt; undefined reference to `netcdf_mp_nf90_inq_varid_'
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x2f287):
</span><br>
<span class="quotelev2">&gt;&gt; undefined reference to `netcdf_mp_nf90_get_var_1d_fourbyteint_'
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x2f2a3):
</span><br>
<span class="quotelev2">&gt;&gt; undefined reference to `netcdf_mp_nf90_inq_varid_'
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x2f37f):
</span><br>
<span class="quotelev2">&gt;&gt; undefined reference to `netcdf_mp_nf90_get_var_1d_fourbyteint_'
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x2f3a6):
</span><br>
<span class="quotelev2">&gt;&gt; undefined reference to `netcdf_mp_nf90_inq_varid_'
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x2f3c6):
</span><br>
<span class="quotelev2">&gt;&gt; undefined reference to `netcdf_mp_nf90_inq_varid_'
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x2f3ea):
</span><br>
<span class="quotelev2">&gt;&gt; undefined reference to `netcdf_mp_nf90_inq_varid_'
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x2f4d1):
</span><br>
<span class="quotelev2">&gt;&gt; undefined reference to `netcdf_mp_nf90_get_var_1d_fourbyteint_'
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x2f5dc):
</span><br>
<span class="quotelev2">&gt;&gt; undefined reference to `netcdf_mp_nf90_inq_varid_'
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x2f6c3):
</span><br>
<span class="quotelev2">&gt;&gt; undefined reference to `netcdf_mp_nf90_get_var_1d_fourbyteint_'
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x2f7ec):
</span><br>
<span class="quotelev2">&gt;&gt; undefined reference to `netcdf_mp_nf90_inq_varid_'
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x2f80c):
</span><br>
<span class="quotelev2">&gt;&gt; undefined reference to `netcdf_mp_nf90_inq_dimid_'
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x2f82d):
</span><br>
<span class="quotelev2">&gt;&gt; undefined reference to `netcdf_mp_nf90_inq_varid_'
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x2f84d):
</span><br>
<span class="quotelev2">&gt;&gt; undefined reference to `netcdf_mp_nf90_inq_dimid_'
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x2f86e):
</span><br>
<span class="quotelev2">&gt;&gt; undefined reference to `netcdf_mp_nf90_inq_varid_'
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x2f88e):
</span><br>
<span class="quotelev2">&gt;&gt; undefined reference to `netcdf_mp_nf90_inq_dimid_'
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x2f8af):
</span><br>
<span class="quotelev2">&gt;&gt; undefined reference to `netcdf_mp_nf90_inq_varid_'
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x2f8cf):
</span><br>
<span class="quotelev2">&gt;&gt; undefined reference to `netcdf_mp_nf90_inq_dimid_'
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x2f8f0):
</span><br>
<span class="quotelev2">&gt;&gt; undefined reference to `netcdf_mp_nf90_inq_varid_'
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x2f910):
</span><br>
<span class="quotelev2">&gt;&gt; undefined reference to `netcdf_mp_nf90_inq_dimid_'
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x2f92e):
</span><br>
<span class="quotelev2">&gt;&gt; undefined reference to `netcdf_mp_nf90_inq_varid_'
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x2f952):
</span><br>
<span class="quotelev2">&gt;&gt; undefined reference to `netcdf_mp_nf90_inq_dimid_'
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x2f992):
</span><br>
<span class="quotelev2">&gt;&gt; undefined reference to `netcdf_mp_nf90_inquire_dimension_'
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x2fbbd):
</span><br>
<span class="quotelev2">&gt;&gt; undefined reference to `netcdf_mp_nf90_get_var_2d_text_'
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x30031):
</span><br>
<span class="quotelev2">&gt;&gt; undefined reference to `netcdf_mp_nf90_inq_varid_'
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x30051):
</span><br>
<span class="quotelev2">&gt;&gt; undefined reference to `netcdf_mp_nf90_inq_varid_'
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x3006d):
</span><br>
<span class="quotelev2">&gt;&gt; undefined reference to `netcdf_mp_nf90_inq_varid_'
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x3008d):
</span><br>
<span class="quotelev2">&gt;&gt; undefined reference to `netcdf_mp_nf90_inq_varid_'
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x300b7):
</span><br>
<span class="quotelev2">&gt;&gt; undefined reference to `netcdf_mp_nf90_get_att_one_eightbytereal_'
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x3091e):
</span><br>
<span class="quotelev2">&gt;&gt; undefined reference to `netcdf_mp_nf90_get_var_1d_eightbytereal_'
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x309f2):
</span><br>
<span class="quotelev2">&gt;&gt; undefined reference to `netcdf_mp_nf90_get_var_1d_eightbytereal_'
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x30a0e):
</span><br>
<span class="quotelev2">&gt;&gt; undefined reference to `netcdf_mp_nf90_inq_varid_'
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x30aea):
</span><br>
<span class="quotelev2">&gt;&gt; undefined reference to `netcdf_mp_nf90_get_var_1d_fourbyteint_'
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x30b06):
</span><br>
<span class="quotelev2">&gt;&gt; undefined reference to `netcdf_mp_nf90_inq_varid_'
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x30be2):
</span><br>
<span class="quotelev2">&gt;&gt; undefined reference to `netcdf_mp_nf90_get_var_1d_eightbytereal_'
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x30bfe):
</span><br>
<span class="quotelev2">&gt;&gt; undefined reference to `netcdf_mp_nf90_inq_varid_'
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x30cda):
</span><br>
<span class="quotelev2">&gt;&gt; undefined reference to `netcdf_mp_nf90_get_var_1d_eightbytereal_'
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x30cf6):
</span><br>
<span class="quotelev2">&gt;&gt; undefined reference to `netcdf_mp_nf90_inq_varid_'
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x30d16):
</span><br>
<span class="quotelev2">&gt;&gt; undefined reference to `netcdf_mp_nf90_inq_varid_'
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x30df2):
</span><br>
<span class="quotelev2">&gt;&gt; undefined reference to `netcdf_mp_nf90_get_var_1d_fourbyteint_'
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x30e0e):
</span><br>
<span class="quotelev2">&gt;&gt; undefined reference to `netcdf_mp_nf90_inq_varid_'
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x30eea):
</span><br>
<span class="quotelev2">&gt;&gt; undefined reference to `netcdf_mp_nf90_get_var_1d_fourbyteint_'
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x342aa):
</span><br>
<span class="quotelev2">&gt;&gt; undefined reference to `netcdf_mp_nf90_get_var_1d_fourbyteint_'
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x3437e):
</span><br>
<span class="quotelev2">&gt;&gt; undefined reference to `netcdf_mp_nf90_get_var_1d_fourbyteint_'
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x34f13):
</span><br>
<span class="quotelev2">&gt;&gt; undefined reference to `netcdf_mp_nf90_inq_varid_'
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x34f33):
</span><br>
<span class="quotelev2">&gt;&gt; undefined reference to `netcdf_mp_nf90_inq_varid_'
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x34f53):
</span><br>
<span class="quotelev2">&gt;&gt; undefined reference to `netcdf_mp_nf90_inq_varid_'
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x34f73):
</span><br>
<span class="quotelev2">&gt;&gt; undefined reference to `netcdf_mp_nf90_inq_varid_'
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x34ffc):
</span><br>
<span class="quotelev2">&gt;&gt; undefined reference to `netcdf_mp_nf90_inq_varid_'
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x350d8):
</span><br>
<span class="quotelev2">&gt;&gt; undefined reference to `netcdf_mp_nf90_get_var_1d_fourbyteint_'
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x351ac):
</span><br>
<span class="quotelev2">&gt;&gt; undefined reference to `netcdf_mp_nf90_get_var_1d_fourbyteint_'
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x35280):
</span><br>
<span class="quotelev2">&gt;&gt; undefined reference to `netcdf_mp_nf90_get_var_1d_fourbyteint_'
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x35354):
</span><br>
<span class="quotelev2">&gt;&gt; undefined reference to `netcdf_mp_nf90_get_var_1d_fourbyteint_'
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x35428):
</span><br>
<span class="quotelev2">&gt;&gt; undefined reference to `netcdf_mp_nf90_get_var_1d_fourbyteint_'
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/obj/src_obs_proc_cdf.o: In
</span><br>
<span class="quotelev2">&gt;&gt; function `src_obs_proc_cdf_mp_obs_cdf_read_aircraft_':
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x38816):
</span><br>
<span class="quotelev2">&gt;&gt; undefined reference to `netcdf_mp_nf90_inq_varid_'
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x38837):
</span><br>
<span class="quotelev2">&gt;&gt; undefined reference to `netcdf_mp_nf90_inq_varid_'
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x3885c):
</span><br>
<span class="quotelev2">&gt;&gt; undefined reference to `netcdf_mp_nf90_inq_varid_'
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x3887d):
</span><br>
<span class="quotelev2">&gt;&gt; undefined reference to `netcdf_mp_nf90_inq_varid_'
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x3889e):
</span><br>
<span class="quotelev2">&gt;&gt; undefined reference to `netcdf_mp_nf90_inq_varid_'
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/obj/src_obs_proc_cdf.o:/home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x388bf):
</span><br>
<span class="quotelev2">&gt;&gt; more undefined references to `netcdf_mp_nf90_inq_varid_' follow
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/obj/src_obs_proc_cdf.o: In
</span><br>
<span class="quotelev2">&gt;&gt; function `src_obs_proc_cdf_mp_obs_cdf_read_aircraft_':
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x38ad7):
</span><br>
<span class="quotelev2">&gt;&gt; undefined reference to `netcdf_mp_nf90_get_var_1d_fourbyteint_'
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x38b86):
</span><br>
<span class="quotelev2">&gt;&gt; undefined reference to `netcdf_mp_nf90_get_var_2d_fourbyteint_'
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x38c35):
</span><br>
<span class="quotelev2">&gt;&gt; undefined reference to `netcdf_mp_nf90_get_var_2d_fourbyteint_'
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x38ce4):
</span><br>
<span class="quotelev2">&gt;&gt; undefined reference to `netcdf_mp_nf90_get_var_2d_eightbytereal_'
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x38d93):
</span><br>
<span class="quotelev2">&gt;&gt; undefined reference to `netcdf_mp_nf90_get_var_2d_eightbytereal_'
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x38e4f):
</span><br>
<span class="quotelev2">&gt;&gt; undefined reference to `netcdf_mp_nf90_get_var_2d_fourbyteint_'
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x38efe):
</span><br>
<span class="quotelev2">&gt;&gt; undefined reference to `netcdf_mp_nf90_get_var_2d_eightbytereal_'
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x38fd5):
</span><br>
<span class="quotelev2">&gt;&gt; undefined reference to `netcdf_mp_nf90_get_var_1d_eightbytereal_'
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x3909f):
</span><br>
<span class="quotelev2">&gt;&gt; undefined reference to `netcdf_mp_nf90_get_var_1d_eightbytereal_'
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x39169):
</span><br>
<span class="quotelev2">&gt;&gt; undefined reference to `netcdf_mp_nf90_get_var_1d_fourbyteint_'
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x39233):
</span><br>
<span class="quotelev2">&gt;&gt; undefined reference to `netcdf_mp_nf90_get_var_1d_eightbytereal_'
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x392fd):
</span><br>
<span class="quotelev2">&gt;&gt; undefined reference to `netcdf_mp_nf90_get_var_1d_fourbyteint_'
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x393d4):
</span><br>
<span class="quotelev2">&gt;&gt; undefined reference to `netcdf_mp_nf90_get_var_2d_eightbytereal_'
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x3949e):
</span><br>
<span class="quotelev2">&gt;&gt; undefined reference to `netcdf_mp_nf90_get_var_1d_eightbytereal_'
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x39568):
</span><br>
<span class="quotelev2">&gt;&gt; undefined reference to `netcdf_mp_nf90_get_var_1d_fourbyteint_'
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x39632):
</span><br>
<span class="quotelev2">&gt;&gt; undefined reference to `netcdf_mp_nf90_get_var_2d_eightbytereal_'
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x396e1):
</span><br>
<span class="quotelev2">&gt;&gt; undefined reference to `netcdf_mp_nf90_get_var_2d_eightbytereal_'
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x397c1):
</span><br>
<span class="quotelev2">&gt;&gt; undefined reference to `netcdf_mp_nf90_get_var_2d_fourbyteint_'
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x3989d):
</span><br>
<span class="quotelev2">&gt;&gt; undefined reference to `netcdf_mp_nf90_get_var_1d_eightbytereal_'
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x39979):
</span><br>
<span class="quotelev2">&gt;&gt; undefined reference to `netcdf_mp_nf90_get_var_2d_eightbytereal_'
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x39a55):
</span><br>
<span class="quotelev2">&gt;&gt; undefined reference to `netcdf_mp_nf90_get_var_1d_eightbytereal_'
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x39b31):
</span><br>
<span class="quotelev2">&gt;&gt; undefined reference to `netcdf_mp_nf90_get_var_1d_eightbytereal_'
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x39c0d):
</span><br>
<span class="quotelev2">&gt;&gt; undefined reference to `netcdf_mp_nf90_get_var_1d_fourbyteint_'
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x39ce9):
</span><br>
<span class="quotelev2">&gt;&gt; undefined reference to `netcdf_mp_nf90_get_var_1d_eightbytereal_'
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x39dc5):
</span><br>
<span class="quotelev2">&gt;&gt; undefined reference to `netcdf_mp_nf90_get_var_1d_fourbyteint_'
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x39ea1):
</span><br>
<span class="quotelev2">&gt;&gt; undefined reference to `netcdf_mp_nf90_get_var_1d_fourbyteint_'
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x39f7d):
</span><br>
<span class="quotelev2">&gt;&gt; undefined reference to `netcdf_mp_nf90_get_var_1d_eightbytereal_'
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x3c975):
</span><br>
<span class="quotelev2">&gt;&gt; undefined reference to `netcdf_mp_nf90_inq_varid_'
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x3c99a):
</span><br>
<span class="quotelev2">&gt;&gt; undefined reference to `netcdf_mp_nf90_inq_varid_'
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x3c9bf):
</span><br>
<span class="quotelev2">&gt;&gt; undefined reference to `netcdf_mp_nf90_inq_varid_'
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x3ce98):
</span><br>
<span class="quotelev2">&gt;&gt; undefined reference to `netcdf_mp_nf90_inq_varid_'
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x3ceb9):
</span><br>
<span class="quotelev2">&gt;&gt; undefined reference to `netcdf_mp_nf90_inq_varid_'
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/obj/src_obs_proc_cdf.o:/home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x3cee6):
</span><br>
<span class="quotelev2">&gt;&gt; more undefined references to `netcdf_mp_nf90_inq_varid_' follow
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/obj/src_obs_proc_cdf.o: In
</span><br>
<span class="quotelev2">&gt;&gt; function `src_obs_proc_cdf_mp_obs_cdf_read_aircraft_':
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x3e521):
</span><br>
<span class="quotelev2">&gt;&gt; undefined reference to `netcdf_mp_nf90_get_var_1d_fourbyteint_'
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x3e5c0):
</span><br>
<span class="quotelev2">&gt;&gt; undefined reference to `netcdf_mp_nf90_inq_varid_'
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x3e63a):
</span><br>
<span class="quotelev2">&gt;&gt; undefined reference to `netcdf_mp_nf90_inquire_variable_'
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x3e77b):
</span><br>
<span class="quotelev2">&gt;&gt; undefined reference to `netcdf_mp_nf90_inquire_dimension_'
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/obj/src_obs_proc_cdf.o: In
</span><br>
<span class="quotelev2">&gt;&gt; function `src_obs_proc_cdf_mp_obs_cdf_read_surface_':
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x5c9e1):
</span><br>
<span class="quotelev2">&gt;&gt; undefined reference to `netcdf_mp_nf90_inq_varid_'
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x5ca02):
</span><br>
<span class="quotelev2">&gt;&gt; undefined reference to `netcdf_mp_nf90_inq_varid_'
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x5ca27):
</span><br>
<span class="quotelev2">&gt;&gt; undefined reference to `netcdf_mp_nf90_inq_varid_'
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x5ca48):
</span><br>
<span class="quotelev2">&gt;&gt; undefined reference to `netcdf_mp_nf90_inq_varid_'
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x5ca69):
</span><br>
<span class="quotelev2">&gt;&gt; undefined reference to `netcdf_mp_nf90_inq_varid_'
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/obj/src_obs_proc_cdf.o:/home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x5ca8a):
</span><br>
<span class="quotelev2">&gt;&gt; more undefined references to `netcdf_mp_nf90_inq_varid_' follow
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/obj/src_obs_proc_cdf.o: In
</span><br>
<span class="quotelev2">&gt;&gt; function `src_obs_proc_cdf_mp_obs_cdf_read_surface_':
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x5d156):
</span><br>
<span class="quotelev2">&gt;&gt; undefined reference to `netcdf_mp_nf90_get_var_1d_fourbyteint_'
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x5d219):
</span><br>
<span class="quotelev2">&gt;&gt; undefined reference to `netcdf_mp_nf90_get_var_2d_eightbytereal_'
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x5d2d0):
</span><br>
<span class="quotelev2">&gt;&gt; undefined reference to `netcdf_mp_nf90_get_var_2d_eightbytereal_'
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x5d387):
</span><br>
<span class="quotelev2">&gt;&gt; undefined reference to `netcdf_mp_nf90_get_var_2d_fourbyteint_'
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x5d43e):
</span><br>
<span class="quotelev2">&gt;&gt; undefined reference to `netcdf_mp_nf90_get_var_2d_eightbytereal_'
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x5d4f5):
</span><br>
<span class="quotelev2">&gt;&gt; undefined reference to `netcdf_mp_nf90_get_var_1d_eightbytereal_'
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x5d5da):
</span><br>
<span class="quotelev2">&gt;&gt; undefined reference to `netcdf_mp_nf90_get_var_2d_eightbytereal_'
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x5d69d):
</span><br>
<span class="quotelev2">&gt;&gt; undefined reference to `netcdf_mp_nf90_get_var_1d_eightbytereal_'
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x5d760):
</span><br>
<span class="quotelev2">&gt;&gt; undefined reference to `netcdf_mp_nf90_get_var_1d_eightbytereal_'
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x5d823):
</span><br>
<span class="quotelev2">&gt;&gt; undefined reference to `netcdf_mp_nf90_get_var_1d_fourbyteint_'
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x5d8e6):
</span><br>
<span class="quotelev2">&gt;&gt; undefined reference to `netcdf_mp_nf90_get_var_1d_fourbyteint_'
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x5d9a9):
</span><br>
<span class="quotelev2">&gt;&gt; undefined reference to `netcdf_mp_nf90_get_var_1d_fourbyteint_'
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x5da8e):
</span><br>
<span class="quotelev2">&gt;&gt; undefined reference to `netcdf_mp_nf90_get_var_1d_eightbytereal_'
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x5db51):
</span><br>
<span class="quotelev2">&gt;&gt; undefined reference to `netcdf_mp_nf90_get_var_1d_fourbyteint_'
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x5dc28):
</span><br>
<span class="quotelev2">&gt;&gt; undefined reference to `netcdf_mp_nf90_get_var_1d_eightbytereal_'
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x5dceb):
</span><br>
<span class="quotelev2">&gt;&gt; undefined reference to `netcdf_mp_nf90_get_var_1d_fourbyteint_'
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x5ddae):
</span><br>
<span class="quotelev2">&gt;&gt; undefined reference to `netcdf_mp_nf90_get_var_1d_fourbyteint_'
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x5de71):
</span><br>
<span class="quotelev2">&gt;&gt; undefined reference to `netcdf_mp_nf90_get_var_1d_fourbyteint_'
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x5df34):
</span><br>
<span class="quotelev2">&gt;&gt; undefined reference to `netcdf_mp_nf90_get_var_1d_eightbytereal_'
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x5dff7):
</span><br>
<span class="quotelev2">&gt;&gt; undefined reference to `netcdf_mp_nf90_get_var_1d_fourbyteint_'
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x5e0ba):
</span><br>
<span class="quotelev2">&gt;&gt; undefined reference to `netcdf_mp_nf90_get_var_1d_fourbyteint_'
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x5e17d):
</span><br>
<span class="quotelev2">&gt;&gt; undefined reference to `netcdf_mp_nf90_get_var_1d_fourbyteint_'
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x5e240):
</span><br>
<span class="quotelev2">&gt;&gt; undefined reference to `netcdf_mp_nf90_get_var_1d_fourbyteint_'
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x5e303):
</span><br>
<span class="quotelev2">&gt;&gt; undefined reference to `netcdf_mp_nf90_get_var_1d_fourbyteint_'
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/obj/src_obs_proc_cdf.o:/home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x5e3c6):
</span><br>
<span class="quotelev2">&gt;&gt; more undefined references to `netcdf_mp_nf90_get_var_1d_fourbyteint_' follow
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/obj/src_obs_proc_cdf.o: In
</span><br>
<span class="quotelev2">&gt;&gt; function `src_obs_proc_cdf_mp_obs_cdf_read_surface_':
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x5e54c):
</span><br>
<span class="quotelev2">&gt;&gt; undefined reference to `netcdf_mp_nf90_get_var_1d_eightbytereal_'
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x5e60f):
</span><br>
<span class="quotelev2">&gt;&gt; undefined reference to `netcdf_mp_nf90_get_var_1d_eightbytereal_'
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x5e6d2):
</span><br>
<span class="quotelev2">&gt;&gt; undefined reference to `netcdf_mp_nf90_get_var_1d_fourbyteint_'
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x5e795):
</span><br>
<span class="quotelev2">&gt;&gt; undefined reference to `netcdf_mp_nf90_get_var_1d_fourbyteint_'
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x5e858):
</span><br>
<span class="quotelev2">&gt;&gt; undefined reference to `netcdf_mp_nf90_get_var_1d_fourbyteint_'
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x5e91b):
</span><br>
<span class="quotelev2">&gt;&gt; undefined reference to `netcdf_mp_nf90_get_var_1d_fourbyteint_'
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x5e9df):
</span><br>
<span class="quotelev2">&gt;&gt; undefined reference to `netcdf_mp_nf90_get_var_1d_eightbytereal_'
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x5eaa3):
</span><br>
<span class="quotelev2">&gt;&gt; undefined reference to `netcdf_mp_nf90_get_var_1d_eightbytereal_'
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x5eb67):
</span><br>
<span class="quotelev2">&gt;&gt; undefined reference to `netcdf_mp_nf90_get_var_1d_fourbyteint_'
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x5ec2b):
</span><br>
<span class="quotelev2">&gt;&gt; undefined reference to `netcdf_mp_nf90_get_var_1d_fourbyteint_'
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x5ecef):
</span><br>
<span class="quotelev2">&gt;&gt; undefined reference to `netcdf_mp_nf90_get_var_1d_fourbyteint_'
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x5edb3):
</span><br>
<span class="quotelev2">&gt;&gt; undefined reference to `netcdf_mp_nf90_get_var_1d_fourbyteint_'
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x5ee77):
</span><br>
<span class="quotelev2">&gt;&gt; undefined reference to `netcdf_mp_nf90_get_var_1d_eightbytereal_'
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x5ef3b):
</span><br>
<span class="quotelev2">&gt;&gt; undefined reference to `netcdf_mp_nf90_get_var_1d_eightbytereal_'
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x5f00d):
</span><br>
<span class="quotelev2">&gt;&gt; undefined reference to `netcdf_mp_nf90_get_var_1d_fourbyteint_'
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x5f0d0):
</span><br>
<span class="quotelev2">&gt;&gt; undefined reference to `netcdf_mp_nf90_get_var_1d_eightbytereal_'
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x5f193):
</span><br>
<span class="quotelev2">&gt;&gt; undefined reference to `netcdf_mp_nf90_get_var_1d_eightbytereal_'
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x5f256):
</span><br>
<span class="quotelev2">&gt;&gt; undefined reference to `netcdf_mp_nf90_get_var_1d_fourbyteint_'
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x5f323):
</span><br>
<span class="quotelev2">&gt;&gt; undefined reference to `netcdf_mp_nf90_get_var_1d_eightbytereal_'
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x5f3e6):
</span><br>
<span class="quotelev2">&gt;&gt; undefined reference to `netcdf_mp_nf90_get_var_1d_fourbyteint_'
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x5f4a9):
</span><br>
<span class="quotelev2">&gt;&gt; undefined reference to `netcdf_mp_nf90_get_var_1d_eightbytereal_'
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x5f56c):
</span><br>
<span class="quotelev2">&gt;&gt; undefined reference to `netcdf_mp_nf90_get_var_1d_fourbyteint_'
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x5f62f):
</span><br>
<span class="quotelev2">&gt;&gt; undefined reference to `netcdf_mp_nf90_get_var_1d_fourbyteint_'
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x5f6fc):
</span><br>
<span class="quotelev2">&gt;&gt; undefined reference to `netcdf_mp_nf90_get_var_1d_eightbytereal_'
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x5f7ea):
</span><br>
<span class="quotelev2">&gt;&gt; undefined reference to `netcdf_mp_nf90_inq_varid_'
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x5f80b):
</span><br>
<span class="quotelev2">&gt;&gt; undefined reference to `netcdf_mp_nf90_inq_varid_'
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x5f82c):
</span><br>
<span class="quotelev2">&gt;&gt; undefined reference to `netcdf_mp_nf90_inq_varid_'
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x5f8e0):
</span><br>
<span class="quotelev2">&gt;&gt; undefined reference to `netcdf_mp_nf90_inq_varid_'
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x5f955):
</span><br>
<span class="quotelev2">&gt;&gt; undefined reference to `netcdf_mp_nf90_inquire_variable_'
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x5f986):
</span><br>
<span class="quotelev2">&gt;&gt; undefined reference to `netcdf_mp_nf90_inquire_dimension_'
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x5fe2d):
</span><br>
<span class="quotelev2">&gt;&gt; undefined reference to `netcdf_mp_nf90_get_var_2d_fourbyteint_'
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x5fed6):
</span><br>
<span class="quotelev2">&gt;&gt; undefined reference to `netcdf_mp_nf90_get_var_2d_fourbyteint_'
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x5ff7f):
</span><br>
<span class="quotelev2">&gt;&gt; undefined reference to `netcdf_mp_nf90_get_var_2d_fourbyteint_'
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x60028):
</span><br>
<span class="quotelev2">&gt;&gt; undefined reference to `netcdf_mp_nf90_get_var_2d_eightbytereal_'
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x63137):
</span><br>
<span class="quotelev2">&gt;&gt; undefined reference to `netcdf_mp_nf90_inq_varid_'
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x6315c):
</span><br>
<span class="quotelev2">&gt;&gt; undefined reference to `netcdf_mp_nf90_inq_varid_'
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x63181):
</span><br>
<span class="quotelev2">&gt;&gt; undefined reference to `netcdf_mp_nf90_inq_varid_'
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x631a6):
</span><br>
<span class="quotelev2">&gt;&gt; undefined reference to `netcdf_mp_nf90_inq_varid_'
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x631cb):
</span><br>
<span class="quotelev2">&gt;&gt; undefined reference to `netcdf_mp_nf90_inq_varid_'
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/obj/src_obs_proc_cdf.o:/home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x631f0):
</span><br>
<span class="quotelev2">&gt;&gt; more undefined references to `netcdf_mp_nf90_inq_varid_' follow
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/obj/src_obs_proc_cdf.o: In
</span><br>
<span class="quotelev2">&gt;&gt; function `src_obs_proc_cdf_mp_obs_cdf_read_profiler_':
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x6480b):
</span><br>
<span class="quotelev2">&gt;&gt; undefined reference to `netcdf_mp_nf90_get_var_1d_fourbyteint_'
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x6482c):
</span><br>
<span class="quotelev2">&gt;&gt; undefined reference to `netcdf_mp_nf90_inq_varid_'
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x648fa):
</span><br>
<span class="quotelev2">&gt;&gt; undefined reference to `netcdf_mp_nf90_get_var_1d_fourbyteint_'
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x6491b):
</span><br>
<span class="quotelev2">&gt;&gt; undefined reference to `netcdf_mp_nf90_inq_varid_'
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x649e9):
</span><br>
<span class="quotelev2">&gt;&gt; undefined reference to `netcdf_mp_nf90_get_var_1d_fourbyteint_'
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x64a0a):
</span><br>
<span class="quotelev2">&gt;&gt; undefined reference to `netcdf_mp_nf90_inq_varid_'
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x64ad8):
</span><br>
<span class="quotelev2">&gt;&gt; undefined reference to `netcdf_mp_nf90_get_var_1d_fourbyteint_'
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x64af9):
</span><br>
<span class="quotelev2">&gt;&gt; undefined reference to `netcdf_mp_nf90_inq_varid_'
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x64bbb):
</span><br>
<span class="quotelev2">&gt;&gt; undefined reference to `netcdf_mp_nf90_get_var_1d_fourbyteint_'
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x64d4e):
</span><br>
<span class="quotelev2">&gt;&gt; undefined reference to `netcdf_mp_nf90_inq_varid_'
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x64e10):
</span><br>
<span class="quotelev2">&gt;&gt; undefined reference to `netcdf_mp_nf90_get_var_1d_fourbyteint_'
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x64ea9):
</span><br>
<span class="quotelev2">&gt;&gt; undefined reference to `netcdf_mp_nf90_inq_varid_'
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x64f1c):
</span><br>
<span class="quotelev2">&gt;&gt; undefined reference to `netcdf_mp_nf90_inquire_variable_'
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x64f4d):
</span><br>
<span class="quotelev2">&gt;&gt; undefined reference to `netcdf_mp_nf90_inquire_dimension_'
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x67651):
</span><br>
<span class="quotelev2">&gt;&gt; undefined reference to `netcdf_mp_nf90_get_var_2d_fourbyteint_'
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x67672):
</span><br>
<span class="quotelev2">&gt;&gt; undefined reference to `netcdf_mp_nf90_inq_varid_'
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x67725):
</span><br>
<span class="quotelev2">&gt;&gt; undefined reference to `netcdf_mp_nf90_get_var_2d_eightbytereal_'
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x67746):
</span><br>
<span class="quotelev2">&gt;&gt; undefined reference to `netcdf_mp_nf90_inq_varid_'
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x677f9):
</span><br>
<span class="quotelev2">&gt;&gt; undefined reference to `netcdf_mp_nf90_get_var_2d_fourbyteint_'
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x6781a):
</span><br>
<span class="quotelev2">&gt;&gt; undefined reference to `netcdf_mp_nf90_inq_varid_'
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x678cd):
</span><br>
<span class="quotelev2">&gt;&gt; undefined reference to `netcdf_mp_nf90_get_var_2d_fourbyteint_'
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x6790c):
</span><br>
<span class="quotelev2">&gt;&gt; undefined reference to `netcdf_mp_nf90_inq_varid_'
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x679bf):
</span><br>
<span class="quotelev2">&gt;&gt; undefined reference to `netcdf_mp_nf90_get_var_2d_eightbytereal_'
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x679e1):
</span><br>
<span class="quotelev2">&gt;&gt; undefined reference to `netcdf_mp_nf90_inq_varid_'
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x67a94):
</span><br>
<span class="quotelev2">&gt;&gt; undefined reference to `netcdf_mp_nf90_get_var_2d_fourbyteint_'
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x67ab5):
</span><br>
<span class="quotelev2">&gt;&gt; undefined reference to `netcdf_mp_nf90_inq_varid_'
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x67b68):
</span><br>
<span class="quotelev2">&gt;&gt; undefined reference to `netcdf_mp_nf90_get_var_2d_eightbytereal_'
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x67b89):
</span><br>
<span class="quotelev2">&gt;&gt; undefined reference to `netcdf_mp_nf90_inq_varid_'
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x67c3c):
</span><br>
<span class="quotelev2">&gt;&gt; undefined reference to `netcdf_mp_nf90_get_var_2d_eightbytereal_'
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x67c5d):
</span><br>
<span class="quotelev2">&gt;&gt; undefined reference to `netcdf_mp_nf90_inq_varid_'
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x67e04):
</span><br>
<span class="quotelev2">&gt;&gt; undefined reference to `netcdf_mp_nf90_get_var_2d_fourbyteint_'
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/obj/src_obs_proc_cdf.o: In
</span><br>
<span class="quotelev2">&gt;&gt; function `src_obs_proc_cdf_mp_obs_cdf_read_init_':
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x6d36b):
</span><br>
<span class="quotelev2">&gt;&gt; undefined reference to `netcdf_mp_nf90_open_'
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; make: *** [allexe] Error 1
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [root_at_pmd03 cosmo_110525_4.18]#
</span><br>
<span class="quotelev2">&gt;&gt; Regards
</span><br>
<span class="quotelev2">&gt;&gt; Ahsan
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><pre>
-- 
Syed Ahsan Ali Bokhari
Electronic Engineer (EE)
Research &amp; Development Division
Pakistan Meteorological Department H-8/4, Islamabad.
Phone # off  +92518358714
Cell # +923155145014
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-19678/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19679.php">Syed Ahsan Ali: "Re: [OMPI users] undefined reference to `netcdf_mp_nf90_open_'"</a>
<li><strong>Previous message:</strong> <a href="19677.php">Syed Ahsan Ali: "Re: [OMPI users] undefined reference to `netcdf_mp_nf90_open_'"</a>
<li><strong>In reply to:</strong> <a href="19669.php">Dmitry N. Mikushin: "Re: [OMPI users] undefined reference to `netcdf_mp_nf90_open_'"</a>
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

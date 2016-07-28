<?
$subject_val = "[OMPI users] undefined reference to `netcdf_mp_nf90_open_'";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jun 26 07:13:51 2012" -->
<!-- isoreceived="20120626111351" -->
<!-- sent="Tue, 26 Jun 2012 16:13:44 +0500" -->
<!-- isosent="20120626111344" -->
<!-- name="Syed Ahsan Ali" -->
<!-- email="ahsanshah01_at_[hidden]" -->
<!-- subject="[OMPI users] undefined reference to `netcdf_mp_nf90_open_'" -->
<!-- id="CAMvdAs+apGdUe8pMwNEefqjS_JhR23FvMG_e6qSOE3x1KOYMSw_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] undefined reference to `netcdf_mp_nf90_open_'<br>
<strong>From:</strong> Syed Ahsan Ali (<em>ahsanshah01_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-06-26 07:13:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19668.php">Jeff Squyres: "Re: [OMPI users] undefined reference to `netcdf_mp_nf90_open_'"</a>
<li><strong>Previous message:</strong> <a href="19666.php">Damien: "Re: [OMPI users] VS2008 : linking against OpenMPI: unresolved external symbols"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19668.php">Jeff Squyres: "Re: [OMPI users] undefined reference to `netcdf_mp_nf90_open_'"</a>
<li><strong>Reply:</strong> <a href="19668.php">Jeff Squyres: "Re: [OMPI users] undefined reference to `netcdf_mp_nf90_open_'"</a>
<li><strong>Reply:</strong> <a href="19669.php">Dmitry N. Mikushin: "Re: [OMPI users] undefined reference to `netcdf_mp_nf90_open_'"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear All
<br>
<p>I am getting following error while compilation of an application. Seems
<br>
like something related to netcdf and mpif90. Although I have compiled
<br>
netcdf with mpif90 option, dont why this error is happening. Any hint would
<br>
be highly appreciated.
<br>
<p><p><p>/home/pmdtest/cosmo/source/cosmo_110525_4.18/obj/src_obs_proc_cdf.o: In
<br>
function `src_obs_proc_cdf_mp_obs_cdf_read_org_':
<br>
<p>/home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x17aa):
<br>
undefined reference to `netcdf_mp_nf90_open_'
<br>
<p>/home/pmdtest/cosmo/source/cosmo_110525_4.18/obj/src_obs_proc_cdf.o: In
<br>
function `src_obs_proc_cdf_mp_obs_cdf_read_temp_pilot_':
<br>
<p>/home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x1000e):
<br>
undefined reference to `netcdf_mp_nf90_inq_varid_'
<br>
<p>/home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x10039):
<br>
undefined reference to `netcdf_mp_nf90_inq_varid_'
<br>
<p>/home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x10064):
<br>
undefined reference to `netcdf_mp_nf90_inq_varid_'
<br>
<p>/home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x1008b):
<br>
undefined reference to `netcdf_mp_nf90_inq_varid_'
<br>
<p>/home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x100c8):
<br>
undefined reference to `netcdf_mp_nf90_inq_varid_'
<br>
<p>/home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x10227):
<br>
undefined reference to `netcdf_mp_nf90_get_var_1d_fourbyteint_'
<br>
<p>/home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x102eb):
<br>
undefined reference to `netcdf_mp_nf90_get_var_1d_fourbyteint_'
<br>
<p>/home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x103af):
<br>
undefined reference to `netcdf_mp_nf90_get_var_1d_fourbyteint_'
<br>
<p>/home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x10473):
<br>
undefined reference to `netcdf_mp_nf90_get_var_1d_fourbyteint_'
<br>
<p>/home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x10559):
<br>
undefined reference to `netcdf_mp_nf90_get_var_1d_fourbyteint_'
<br>
<p>/home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x10890):
<br>
undefined reference to `netcdf_mp_nf90_inq_varid_'
<br>
<p>/home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x108bb):
<br>
undefined reference to `netcdf_mp_nf90_inq_varid_'
<br>
<p>/home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x108e2):
<br>
undefined reference to `netcdf_mp_nf90_inq_varid_'
<br>
<p>/home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x10909):
<br>
undefined reference to `netcdf_mp_nf90_inq_varid_'
<br>
<p>/home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x10930):
<br>
undefined reference to `netcdf_mp_nf90_inq_varid_'
<br>
<p>/home/pmdtest/cosmo/source/cosmo_110525_4.18/obj/src_obs_proc_cdf.o:/home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x109e8):
<br>
more undefined references to `netcdf_mp_nf90_inq_varid_' follow
<br>
<p>/home/pmdtest/cosmo/source/cosmo_110525_4.18/obj/src_obs_proc_cdf.o: In
<br>
function `src_obs_proc_cdf_mp_obs_cdf_read_temp_pilot_':
<br>
<p>/home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x10abc):
<br>
undefined reference to `netcdf_mp_nf90_get_var_1d_fourbyteint_'
<br>
<p>/home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x10b8c):
<br>
undefined reference to `netcdf_mp_nf90_get_var_1d_fourbyteint_'
<br>
<p>/home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x10c5c):
<br>
undefined reference to `netcdf_mp_nf90_get_var_1d_eightbytereal_'
<br>
<p>/home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x10d2c):
<br>
undefined reference to `netcdf_mp_nf90_get_var_1d_fourbyteint_'
<br>
<p>/home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x10dfc):
<br>
undefined reference to `netcdf_mp_nf90_get_var_1d_fourbyteint_'
<br>
<p>/home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x10ecc):
<br>
undefined reference to `netcdf_mp_nf90_get_var_1d_fourbyteint_'
<br>
<p>/home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x10ef3):
<br>
undefined reference to `netcdf_mp_nf90_inq_varid_'
<br>
<p>/home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x10fbb):
<br>
undefined reference to `netcdf_mp_nf90_get_var_1d_fourbyteint_'
<br>
<p>/home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x1105a):
<br>
undefined reference to `netcdf_mp_nf90_inq_varid_'
<br>
<p>/home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x110cb):
<br>
undefined reference to `netcdf_mp_nf90_inquire_variable_'
<br>
<p>/home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x11102):
<br>
undefined reference to `netcdf_mp_nf90_inquire_dimension_'
<br>
<p>/home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x118be):
<br>
undefined reference to `netcdf_mp_nf90_inq_varid_'
<br>
<p>/home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x118e9):
<br>
undefined reference to `netcdf_mp_nf90_inq_varid_'
<br>
<p>/home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x11914):
<br>
undefined reference to `netcdf_mp_nf90_inq_varid_'
<br>
<p>/home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x1193b):
<br>
undefined reference to `netcdf_mp_nf90_inq_varid_'
<br>
<p>/home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x11962):
<br>
undefined reference to `netcdf_mp_nf90_inq_varid_'
<br>
<p>/home/pmdtest/cosmo/source/cosmo_110525_4.18/obj/src_obs_proc_cdf.o:/home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x11989):
<br>
more undefined references to `netcdf_mp_nf90_inq_varid_' follow
<br>
<p>/home/pmdtest/cosmo/source/cosmo_110525_4.18/obj/src_obs_proc_cdf.o: In
<br>
function `src_obs_proc_cdf_mp_obs_cdf_read_temp_pilot_':
<br>
<p>/home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x11c36):
<br>
undefined reference to `netcdf_mp_nf90_get_var_2d_fourbyteint_'
<br>
<p>/home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x11ceb):
<br>
undefined reference to `netcdf_mp_nf90_get_var_2d_fourbyteint_'
<br>
<p>/home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x11da0):
<br>
undefined reference to `netcdf_mp_nf90_get_var_2d_fourbyteint_'
<br>
<p>/home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x11e55):
<br>
undefined reference to `netcdf_mp_nf90_get_var_2d_eightbytereal_'
<br>
<p>/home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x11f0a):
<br>
undefined reference to `netcdf_mp_nf90_get_var_2d_eightbytereal_'
<br>
<p>/home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x11fbf):
<br>
undefined reference to `netcdf_mp_nf90_get_var_2d_eightbytereal_'
<br>
<p>/home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x120bf):
<br>
undefined reference to `netcdf_mp_nf90_get_var_2d_eightbytereal_'
<br>
<p>/home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x12230):
<br>
undefined reference to `netcdf_mp_nf90_get_var_2d_fourbyteint_'
<br>
<p>/home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x122fb):
<br>
undefined reference to `netcdf_mp_nf90_get_var_2d_fourbyteint_'
<br>
<p>/home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x123b0):
<br>
undefined reference to `netcdf_mp_nf90_get_var_2d_eightbytereal_'
<br>
<p>/home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x1246d):
<br>
undefined reference to `netcdf_mp_nf90_get_var_2d_eightbytereal_'
<br>
<p>/home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x12522):
<br>
undefined reference to `netcdf_mp_nf90_get_var_2d_eightbytereal_'
<br>
<p>/home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x14a6c):
<br>
undefined reference to `netcdf_mp_nf90_strerror_'
<br>
<p>/home/pmdtest/cosmo/source/cosmo_110525_4.18/obj/src_obs_proc_cdf.o: In
<br>
function `src_obs_proc_cdf_mp_obs_cdf_read_common_':
<br>
<p>/home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x29e3d):
<br>
undefined reference to `netcdf_mp_nf90_inq_varid_'
<br>
<p>/home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x29ec3):
<br>
undefined reference to `netcdf_mp_nf90_inquire_variable_'
<br>
<p>/home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x29fa8):
<br>
undefined reference to `netcdf_mp_nf90_inquire_dimension_'
<br>
<p>/home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x29fca):
<br>
undefined reference to `netcdf_mp_nf90_get_att_one_fourbyteint_'
<br>
<p>/home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x2a801):
<br>
undefined reference to `netcdf_mp_nf90_inq_varid_'
<br>
<p>/home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x2a821):
<br>
undefined reference to `netcdf_mp_nf90_inq_varid_'
<br>
<p>/home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x2a841):
<br>
undefined reference to `netcdf_mp_nf90_inq_varid_'
<br>
<p>/home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x2a861):
<br>
undefined reference to `netcdf_mp_nf90_inq_varid_'
<br>
<p>/home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x2a8f9):
<br>
undefined reference to `netcdf_mp_nf90_inq_varid_'
<br>
<p>/home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x2a928):
<br>
undefined reference to `netcdf_mp_nf90_get_var_1d_fourbyteint_'
<br>
<p>/home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x2a94f):
<br>
undefined reference to `netcdf_mp_nf90_get_var_1d_fourbyteint_'
<br>
<p>/home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x2a976):
<br>
undefined reference to `netcdf_mp_nf90_get_var_1d_fourbyteint_'
<br>
<p>/home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x2a99d):
<br>
undefined reference to `netcdf_mp_nf90_get_var_1d_fourbyteint_'
<br>
<p>/home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x2a9c4):
<br>
undefined reference to `netcdf_mp_nf90_get_var_1d_fourbyteint_'
<br>
<p>/home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x2d69a):
<br>
undefined reference to `netcdf_mp_nf90_inq_varid_'
<br>
<p>/home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x2d6ba):
<br>
undefined reference to `netcdf_mp_nf90_inq_varid_'
<br>
<p>/home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x2d799):
<br>
undefined reference to `netcdf_mp_nf90_get_var_1d_fourbyteint_'
<br>
<p>/home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x2d870):
<br>
undefined reference to `netcdf_mp_nf90_get_var_1d_fourbyteint_'
<br>
<p>/home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x2ddfa):
<br>
undefined reference to `netcdf_mp_nf90_inq_varid_'
<br>
<p>/home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x2de1e):
<br>
undefined reference to `netcdf_mp_nf90_inq_varid_'
<br>
<p>/home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x2de3e):
<br>
undefined reference to `netcdf_mp_nf90_inq_varid_'
<br>
<p>/home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x2df1a):
<br>
undefined reference to `netcdf_mp_nf90_get_var_1d_fourbyteint_'
<br>
<p>/home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x2dfee):
<br>
undefined reference to `netcdf_mp_nf90_get_var_1d_fourbyteint_'
<br>
<p>/home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x2e16c):
<br>
undefined reference to `netcdf_mp_nf90_inq_varid_'
<br>
<p>/home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x2e248):
<br>
undefined reference to `netcdf_mp_nf90_get_var_1d_fourbyteint_'
<br>
<p>/home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x2ece1):
<br>
undefined reference to `netcdf_mp_nf90_inq_varid_'
<br>
<p>/home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x2ed01):
<br>
undefined reference to `netcdf_mp_nf90_inq_varid_'
<br>
<p>/home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x2eddd):
<br>
undefined reference to `netcdf_mp_nf90_get_var_1d_fourbyteint_'
<br>
<p>/home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x2eeb1):
<br>
undefined reference to `netcdf_mp_nf90_get_var_1d_fourbyteint_'
<br>
<p>/home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x2eecd):
<br>
undefined reference to `netcdf_mp_nf90_inq_varid_'
<br>
<p>/home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x2efc2):
<br>
undefined reference to `netcdf_mp_nf90_get_var_1d_fourbyteint_'
<br>
<p>/home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x2f1ab):
<br>
undefined reference to `netcdf_mp_nf90_inq_varid_'
<br>
<p>/home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x2f287):
<br>
undefined reference to `netcdf_mp_nf90_get_var_1d_fourbyteint_'
<br>
<p>/home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x2f2a3):
<br>
undefined reference to `netcdf_mp_nf90_inq_varid_'
<br>
<p>/home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x2f37f):
<br>
undefined reference to `netcdf_mp_nf90_get_var_1d_fourbyteint_'
<br>
<p>/home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x2f3a6):
<br>
undefined reference to `netcdf_mp_nf90_inq_varid_'
<br>
<p>/home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x2f3c6):
<br>
undefined reference to `netcdf_mp_nf90_inq_varid_'
<br>
<p>/home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x2f3ea):
<br>
undefined reference to `netcdf_mp_nf90_inq_varid_'
<br>
<p>/home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x2f4d1):
<br>
undefined reference to `netcdf_mp_nf90_get_var_1d_fourbyteint_'
<br>
<p>/home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x2f5dc):
<br>
undefined reference to `netcdf_mp_nf90_inq_varid_'
<br>
<p>/home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x2f6c3):
<br>
undefined reference to `netcdf_mp_nf90_get_var_1d_fourbyteint_'
<br>
<p>/home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x2f7ec):
<br>
undefined reference to `netcdf_mp_nf90_inq_varid_'
<br>
<p>/home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x2f80c):
<br>
undefined reference to `netcdf_mp_nf90_inq_dimid_'
<br>
<p>/home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x2f82d):
<br>
undefined reference to `netcdf_mp_nf90_inq_varid_'
<br>
<p>/home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x2f84d):
<br>
undefined reference to `netcdf_mp_nf90_inq_dimid_'
<br>
<p>/home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x2f86e):
<br>
undefined reference to `netcdf_mp_nf90_inq_varid_'
<br>
<p>/home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x2f88e):
<br>
undefined reference to `netcdf_mp_nf90_inq_dimid_'
<br>
<p>/home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x2f8af):
<br>
undefined reference to `netcdf_mp_nf90_inq_varid_'
<br>
<p>/home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x2f8cf):
<br>
undefined reference to `netcdf_mp_nf90_inq_dimid_'
<br>
<p>/home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x2f8f0):
<br>
undefined reference to `netcdf_mp_nf90_inq_varid_'
<br>
<p>/home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x2f910):
<br>
undefined reference to `netcdf_mp_nf90_inq_dimid_'
<br>
<p>/home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x2f92e):
<br>
undefined reference to `netcdf_mp_nf90_inq_varid_'
<br>
<p>/home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x2f952):
<br>
undefined reference to `netcdf_mp_nf90_inq_dimid_'
<br>
<p>/home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x2f992):
<br>
undefined reference to `netcdf_mp_nf90_inquire_dimension_'
<br>
<p>/home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x2fbbd):
<br>
undefined reference to `netcdf_mp_nf90_get_var_2d_text_'
<br>
<p>/home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x30031):
<br>
undefined reference to `netcdf_mp_nf90_inq_varid_'
<br>
<p>/home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x30051):
<br>
undefined reference to `netcdf_mp_nf90_inq_varid_'
<br>
<p>/home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x3006d):
<br>
undefined reference to `netcdf_mp_nf90_inq_varid_'
<br>
<p>/home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x3008d):
<br>
undefined reference to `netcdf_mp_nf90_inq_varid_'
<br>
<p>/home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x300b7):
<br>
undefined reference to `netcdf_mp_nf90_get_att_one_eightbytereal_'
<br>
<p>/home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x3091e):
<br>
undefined reference to `netcdf_mp_nf90_get_var_1d_eightbytereal_'
<br>
<p>/home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x309f2):
<br>
undefined reference to `netcdf_mp_nf90_get_var_1d_eightbytereal_'
<br>
<p>/home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x30a0e):
<br>
undefined reference to `netcdf_mp_nf90_inq_varid_'
<br>
<p>/home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x30aea):
<br>
undefined reference to `netcdf_mp_nf90_get_var_1d_fourbyteint_'
<br>
<p>/home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x30b06):
<br>
undefined reference to `netcdf_mp_nf90_inq_varid_'
<br>
<p>/home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x30be2):
<br>
undefined reference to `netcdf_mp_nf90_get_var_1d_eightbytereal_'
<br>
<p>/home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x30bfe):
<br>
undefined reference to `netcdf_mp_nf90_inq_varid_'
<br>
<p>/home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x30cda):
<br>
undefined reference to `netcdf_mp_nf90_get_var_1d_eightbytereal_'
<br>
<p>/home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x30cf6):
<br>
undefined reference to `netcdf_mp_nf90_inq_varid_'
<br>
<p>/home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x30d16):
<br>
undefined reference to `netcdf_mp_nf90_inq_varid_'
<br>
<p>/home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x30df2):
<br>
undefined reference to `netcdf_mp_nf90_get_var_1d_fourbyteint_'
<br>
<p>/home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x30e0e):
<br>
undefined reference to `netcdf_mp_nf90_inq_varid_'
<br>
<p>/home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x30eea):
<br>
undefined reference to `netcdf_mp_nf90_get_var_1d_fourbyteint_'
<br>
<p>/home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x342aa):
<br>
undefined reference to `netcdf_mp_nf90_get_var_1d_fourbyteint_'
<br>
<p>/home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x3437e):
<br>
undefined reference to `netcdf_mp_nf90_get_var_1d_fourbyteint_'
<br>
<p>/home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x34f13):
<br>
undefined reference to `netcdf_mp_nf90_inq_varid_'
<br>
<p>/home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x34f33):
<br>
undefined reference to `netcdf_mp_nf90_inq_varid_'
<br>
<p>/home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x34f53):
<br>
undefined reference to `netcdf_mp_nf90_inq_varid_'
<br>
<p>/home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x34f73):
<br>
undefined reference to `netcdf_mp_nf90_inq_varid_'
<br>
<p>/home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x34ffc):
<br>
undefined reference to `netcdf_mp_nf90_inq_varid_'
<br>
<p>/home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x350d8):
<br>
undefined reference to `netcdf_mp_nf90_get_var_1d_fourbyteint_'
<br>
<p>/home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x351ac):
<br>
undefined reference to `netcdf_mp_nf90_get_var_1d_fourbyteint_'
<br>
<p>/home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x35280):
<br>
undefined reference to `netcdf_mp_nf90_get_var_1d_fourbyteint_'
<br>
<p>/home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x35354):
<br>
undefined reference to `netcdf_mp_nf90_get_var_1d_fourbyteint_'
<br>
<p>/home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x35428):
<br>
undefined reference to `netcdf_mp_nf90_get_var_1d_fourbyteint_'
<br>
<p>/home/pmdtest/cosmo/source/cosmo_110525_4.18/obj/src_obs_proc_cdf.o: In
<br>
function `src_obs_proc_cdf_mp_obs_cdf_read_aircraft_':
<br>
<p>/home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x38816):
<br>
undefined reference to `netcdf_mp_nf90_inq_varid_'
<br>
<p>/home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x38837):
<br>
undefined reference to `netcdf_mp_nf90_inq_varid_'
<br>
<p>/home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x3885c):
<br>
undefined reference to `netcdf_mp_nf90_inq_varid_'
<br>
<p>/home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x3887d):
<br>
undefined reference to `netcdf_mp_nf90_inq_varid_'
<br>
<p>/home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x3889e):
<br>
undefined reference to `netcdf_mp_nf90_inq_varid_'
<br>
<p>/home/pmdtest/cosmo/source/cosmo_110525_4.18/obj/src_obs_proc_cdf.o:/home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x388bf):
<br>
more undefined references to `netcdf_mp_nf90_inq_varid_' follow
<br>
<p>/home/pmdtest/cosmo/source/cosmo_110525_4.18/obj/src_obs_proc_cdf.o: In
<br>
function `src_obs_proc_cdf_mp_obs_cdf_read_aircraft_':
<br>
<p>/home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x38ad7):
<br>
undefined reference to `netcdf_mp_nf90_get_var_1d_fourbyteint_'
<br>
<p>/home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x38b86):
<br>
undefined reference to `netcdf_mp_nf90_get_var_2d_fourbyteint_'
<br>
<p>/home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x38c35):
<br>
undefined reference to `netcdf_mp_nf90_get_var_2d_fourbyteint_'
<br>
<p>/home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x38ce4):
<br>
undefined reference to `netcdf_mp_nf90_get_var_2d_eightbytereal_'
<br>
<p>/home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x38d93):
<br>
undefined reference to `netcdf_mp_nf90_get_var_2d_eightbytereal_'
<br>
<p>/home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x38e4f):
<br>
undefined reference to `netcdf_mp_nf90_get_var_2d_fourbyteint_'
<br>
<p>/home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x38efe):
<br>
undefined reference to `netcdf_mp_nf90_get_var_2d_eightbytereal_'
<br>
<p>/home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x38fd5):
<br>
undefined reference to `netcdf_mp_nf90_get_var_1d_eightbytereal_'
<br>
<p>/home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x3909f):
<br>
undefined reference to `netcdf_mp_nf90_get_var_1d_eightbytereal_'
<br>
<p>/home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x39169):
<br>
undefined reference to `netcdf_mp_nf90_get_var_1d_fourbyteint_'
<br>
<p>/home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x39233):
<br>
undefined reference to `netcdf_mp_nf90_get_var_1d_eightbytereal_'
<br>
<p>/home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x392fd):
<br>
undefined reference to `netcdf_mp_nf90_get_var_1d_fourbyteint_'
<br>
<p>/home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x393d4):
<br>
undefined reference to `netcdf_mp_nf90_get_var_2d_eightbytereal_'
<br>
<p>/home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x3949e):
<br>
undefined reference to `netcdf_mp_nf90_get_var_1d_eightbytereal_'
<br>
<p>/home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x39568):
<br>
undefined reference to `netcdf_mp_nf90_get_var_1d_fourbyteint_'
<br>
<p>/home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x39632):
<br>
undefined reference to `netcdf_mp_nf90_get_var_2d_eightbytereal_'
<br>
<p>/home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x396e1):
<br>
undefined reference to `netcdf_mp_nf90_get_var_2d_eightbytereal_'
<br>
<p>/home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x397c1):
<br>
undefined reference to `netcdf_mp_nf90_get_var_2d_fourbyteint_'
<br>
<p>/home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x3989d):
<br>
undefined reference to `netcdf_mp_nf90_get_var_1d_eightbytereal_'
<br>
<p>/home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x39979):
<br>
undefined reference to `netcdf_mp_nf90_get_var_2d_eightbytereal_'
<br>
<p>/home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x39a55):
<br>
undefined reference to `netcdf_mp_nf90_get_var_1d_eightbytereal_'
<br>
<p>/home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x39b31):
<br>
undefined reference to `netcdf_mp_nf90_get_var_1d_eightbytereal_'
<br>
<p>/home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x39c0d):
<br>
undefined reference to `netcdf_mp_nf90_get_var_1d_fourbyteint_'
<br>
<p>/home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x39ce9):
<br>
undefined reference to `netcdf_mp_nf90_get_var_1d_eightbytereal_'
<br>
<p>/home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x39dc5):
<br>
undefined reference to `netcdf_mp_nf90_get_var_1d_fourbyteint_'
<br>
<p>/home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x39ea1):
<br>
undefined reference to `netcdf_mp_nf90_get_var_1d_fourbyteint_'
<br>
<p>/home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x39f7d):
<br>
undefined reference to `netcdf_mp_nf90_get_var_1d_eightbytereal_'
<br>
<p>/home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x3c975):
<br>
undefined reference to `netcdf_mp_nf90_inq_varid_'
<br>
<p>/home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x3c99a):
<br>
undefined reference to `netcdf_mp_nf90_inq_varid_'
<br>
<p>/home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x3c9bf):
<br>
undefined reference to `netcdf_mp_nf90_inq_varid_'
<br>
<p>/home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x3ce98):
<br>
undefined reference to `netcdf_mp_nf90_inq_varid_'
<br>
<p>/home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x3ceb9):
<br>
undefined reference to `netcdf_mp_nf90_inq_varid_'
<br>
<p>/home/pmdtest/cosmo/source/cosmo_110525_4.18/obj/src_obs_proc_cdf.o:/home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x3cee6):
<br>
more undefined references to `netcdf_mp_nf90_inq_varid_' follow
<br>
<p>/home/pmdtest/cosmo/source/cosmo_110525_4.18/obj/src_obs_proc_cdf.o: In
<br>
function `src_obs_proc_cdf_mp_obs_cdf_read_aircraft_':
<br>
<p>/home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x3e521):
<br>
undefined reference to `netcdf_mp_nf90_get_var_1d_fourbyteint_'
<br>
<p>/home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x3e5c0):
<br>
undefined reference to `netcdf_mp_nf90_inq_varid_'
<br>
<p>/home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x3e63a):
<br>
undefined reference to `netcdf_mp_nf90_inquire_variable_'
<br>
<p>/home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x3e77b):
<br>
undefined reference to `netcdf_mp_nf90_inquire_dimension_'
<br>
<p>/home/pmdtest/cosmo/source/cosmo_110525_4.18/obj/src_obs_proc_cdf.o: In
<br>
function `src_obs_proc_cdf_mp_obs_cdf_read_surface_':
<br>
<p>/home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x5c9e1):
<br>
undefined reference to `netcdf_mp_nf90_inq_varid_'
<br>
<p>/home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x5ca02):
<br>
undefined reference to `netcdf_mp_nf90_inq_varid_'
<br>
<p>/home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x5ca27):
<br>
undefined reference to `netcdf_mp_nf90_inq_varid_'
<br>
<p>/home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x5ca48):
<br>
undefined reference to `netcdf_mp_nf90_inq_varid_'
<br>
<p>/home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x5ca69):
<br>
undefined reference to `netcdf_mp_nf90_inq_varid_'
<br>
<p>/home/pmdtest/cosmo/source/cosmo_110525_4.18/obj/src_obs_proc_cdf.o:/home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x5ca8a):
<br>
more undefined references to `netcdf_mp_nf90_inq_varid_' follow
<br>
<p>/home/pmdtest/cosmo/source/cosmo_110525_4.18/obj/src_obs_proc_cdf.o: In
<br>
function `src_obs_proc_cdf_mp_obs_cdf_read_surface_':
<br>
<p>/home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x5d156):
<br>
undefined reference to `netcdf_mp_nf90_get_var_1d_fourbyteint_'
<br>
<p>/home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x5d219):
<br>
undefined reference to `netcdf_mp_nf90_get_var_2d_eightbytereal_'
<br>
<p>/home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x5d2d0):
<br>
undefined reference to `netcdf_mp_nf90_get_var_2d_eightbytereal_'
<br>
<p>/home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x5d387):
<br>
undefined reference to `netcdf_mp_nf90_get_var_2d_fourbyteint_'
<br>
<p>/home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x5d43e):
<br>
undefined reference to `netcdf_mp_nf90_get_var_2d_eightbytereal_'
<br>
<p>/home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x5d4f5):
<br>
undefined reference to `netcdf_mp_nf90_get_var_1d_eightbytereal_'
<br>
<p>/home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x5d5da):
<br>
undefined reference to `netcdf_mp_nf90_get_var_2d_eightbytereal_'
<br>
<p>/home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x5d69d):
<br>
undefined reference to `netcdf_mp_nf90_get_var_1d_eightbytereal_'
<br>
<p>/home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x5d760):
<br>
undefined reference to `netcdf_mp_nf90_get_var_1d_eightbytereal_'
<br>
<p>/home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x5d823):
<br>
undefined reference to `netcdf_mp_nf90_get_var_1d_fourbyteint_'
<br>
<p>/home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x5d8e6):
<br>
undefined reference to `netcdf_mp_nf90_get_var_1d_fourbyteint_'
<br>
<p>/home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x5d9a9):
<br>
undefined reference to `netcdf_mp_nf90_get_var_1d_fourbyteint_'
<br>
<p>/home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x5da8e):
<br>
undefined reference to `netcdf_mp_nf90_get_var_1d_eightbytereal_'
<br>
<p>/home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x5db51):
<br>
undefined reference to `netcdf_mp_nf90_get_var_1d_fourbyteint_'
<br>
<p>/home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x5dc28):
<br>
undefined reference to `netcdf_mp_nf90_get_var_1d_eightbytereal_'
<br>
<p>/home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x5dceb):
<br>
undefined reference to `netcdf_mp_nf90_get_var_1d_fourbyteint_'
<br>
<p>/home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x5ddae):
<br>
undefined reference to `netcdf_mp_nf90_get_var_1d_fourbyteint_'
<br>
<p>/home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x5de71):
<br>
undefined reference to `netcdf_mp_nf90_get_var_1d_fourbyteint_'
<br>
<p>/home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x5df34):
<br>
undefined reference to `netcdf_mp_nf90_get_var_1d_eightbytereal_'
<br>
<p>/home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x5dff7):
<br>
undefined reference to `netcdf_mp_nf90_get_var_1d_fourbyteint_'
<br>
<p>/home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x5e0ba):
<br>
undefined reference to `netcdf_mp_nf90_get_var_1d_fourbyteint_'
<br>
<p>/home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x5e17d):
<br>
undefined reference to `netcdf_mp_nf90_get_var_1d_fourbyteint_'
<br>
<p>/home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x5e240):
<br>
undefined reference to `netcdf_mp_nf90_get_var_1d_fourbyteint_'
<br>
<p>/home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x5e303):
<br>
undefined reference to `netcdf_mp_nf90_get_var_1d_fourbyteint_'
<br>
<p>/home/pmdtest/cosmo/source/cosmo_110525_4.18/obj/src_obs_proc_cdf.o:/home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x5e3c6):
<br>
more undefined references to `netcdf_mp_nf90_get_var_1d_fourbyteint_' follow
<br>
<p>/home/pmdtest/cosmo/source/cosmo_110525_4.18/obj/src_obs_proc_cdf.o: In
<br>
function `src_obs_proc_cdf_mp_obs_cdf_read_surface_':
<br>
<p>/home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x5e54c):
<br>
undefined reference to `netcdf_mp_nf90_get_var_1d_eightbytereal_'
<br>
<p>/home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x5e60f):
<br>
undefined reference to `netcdf_mp_nf90_get_var_1d_eightbytereal_'
<br>
<p>/home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x5e6d2):
<br>
undefined reference to `netcdf_mp_nf90_get_var_1d_fourbyteint_'
<br>
<p>/home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x5e795):
<br>
undefined reference to `netcdf_mp_nf90_get_var_1d_fourbyteint_'
<br>
<p>/home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x5e858):
<br>
undefined reference to `netcdf_mp_nf90_get_var_1d_fourbyteint_'
<br>
<p>/home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x5e91b):
<br>
undefined reference to `netcdf_mp_nf90_get_var_1d_fourbyteint_'
<br>
<p>/home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x5e9df):
<br>
undefined reference to `netcdf_mp_nf90_get_var_1d_eightbytereal_'
<br>
<p>/home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x5eaa3):
<br>
undefined reference to `netcdf_mp_nf90_get_var_1d_eightbytereal_'
<br>
<p>/home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x5eb67):
<br>
undefined reference to `netcdf_mp_nf90_get_var_1d_fourbyteint_'
<br>
<p>/home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x5ec2b):
<br>
undefined reference to `netcdf_mp_nf90_get_var_1d_fourbyteint_'
<br>
<p>/home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x5ecef):
<br>
undefined reference to `netcdf_mp_nf90_get_var_1d_fourbyteint_'
<br>
<p>/home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x5edb3):
<br>
undefined reference to `netcdf_mp_nf90_get_var_1d_fourbyteint_'
<br>
<p>/home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x5ee77):
<br>
undefined reference to `netcdf_mp_nf90_get_var_1d_eightbytereal_'
<br>
<p>/home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x5ef3b):
<br>
undefined reference to `netcdf_mp_nf90_get_var_1d_eightbytereal_'
<br>
<p>/home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x5f00d):
<br>
undefined reference to `netcdf_mp_nf90_get_var_1d_fourbyteint_'
<br>
<p>/home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x5f0d0):
<br>
undefined reference to `netcdf_mp_nf90_get_var_1d_eightbytereal_'
<br>
<p>/home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x5f193):
<br>
undefined reference to `netcdf_mp_nf90_get_var_1d_eightbytereal_'
<br>
<p>/home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x5f256):
<br>
undefined reference to `netcdf_mp_nf90_get_var_1d_fourbyteint_'
<br>
<p>/home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x5f323):
<br>
undefined reference to `netcdf_mp_nf90_get_var_1d_eightbytereal_'
<br>
<p>/home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x5f3e6):
<br>
undefined reference to `netcdf_mp_nf90_get_var_1d_fourbyteint_'
<br>
<p>/home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x5f4a9):
<br>
undefined reference to `netcdf_mp_nf90_get_var_1d_eightbytereal_'
<br>
<p>/home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x5f56c):
<br>
undefined reference to `netcdf_mp_nf90_get_var_1d_fourbyteint_'
<br>
<p>/home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x5f62f):
<br>
undefined reference to `netcdf_mp_nf90_get_var_1d_fourbyteint_'
<br>
<p>/home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x5f6fc):
<br>
undefined reference to `netcdf_mp_nf90_get_var_1d_eightbytereal_'
<br>
<p>/home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x5f7ea):
<br>
undefined reference to `netcdf_mp_nf90_inq_varid_'
<br>
<p>/home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x5f80b):
<br>
undefined reference to `netcdf_mp_nf90_inq_varid_'
<br>
<p>/home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x5f82c):
<br>
undefined reference to `netcdf_mp_nf90_inq_varid_'
<br>
<p>/home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x5f8e0):
<br>
undefined reference to `netcdf_mp_nf90_inq_varid_'
<br>
<p>/home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x5f955):
<br>
undefined reference to `netcdf_mp_nf90_inquire_variable_'
<br>
<p>/home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x5f986):
<br>
undefined reference to `netcdf_mp_nf90_inquire_dimension_'
<br>
<p>/home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x5fe2d):
<br>
undefined reference to `netcdf_mp_nf90_get_var_2d_fourbyteint_'
<br>
<p>/home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x5fed6):
<br>
undefined reference to `netcdf_mp_nf90_get_var_2d_fourbyteint_'
<br>
<p>/home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x5ff7f):
<br>
undefined reference to `netcdf_mp_nf90_get_var_2d_fourbyteint_'
<br>
<p>/home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x60028):
<br>
undefined reference to `netcdf_mp_nf90_get_var_2d_eightbytereal_'
<br>
<p>/home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x63137):
<br>
undefined reference to `netcdf_mp_nf90_inq_varid_'
<br>
<p>/home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x6315c):
<br>
undefined reference to `netcdf_mp_nf90_inq_varid_'
<br>
<p>/home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x63181):
<br>
undefined reference to `netcdf_mp_nf90_inq_varid_'
<br>
<p>/home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x631a6):
<br>
undefined reference to `netcdf_mp_nf90_inq_varid_'
<br>
<p>/home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x631cb):
<br>
undefined reference to `netcdf_mp_nf90_inq_varid_'
<br>
<p>/home/pmdtest/cosmo/source/cosmo_110525_4.18/obj/src_obs_proc_cdf.o:/home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x631f0):
<br>
more undefined references to `netcdf_mp_nf90_inq_varid_' follow
<br>
<p>/home/pmdtest/cosmo/source/cosmo_110525_4.18/obj/src_obs_proc_cdf.o: In
<br>
function `src_obs_proc_cdf_mp_obs_cdf_read_profiler_':
<br>
<p>/home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x6480b):
<br>
undefined reference to `netcdf_mp_nf90_get_var_1d_fourbyteint_'
<br>
<p>/home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x6482c):
<br>
undefined reference to `netcdf_mp_nf90_inq_varid_'
<br>
<p>/home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x648fa):
<br>
undefined reference to `netcdf_mp_nf90_get_var_1d_fourbyteint_'
<br>
<p>/home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x6491b):
<br>
undefined reference to `netcdf_mp_nf90_inq_varid_'
<br>
<p>/home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x649e9):
<br>
undefined reference to `netcdf_mp_nf90_get_var_1d_fourbyteint_'
<br>
<p>/home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x64a0a):
<br>
undefined reference to `netcdf_mp_nf90_inq_varid_'
<br>
<p>/home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x64ad8):
<br>
undefined reference to `netcdf_mp_nf90_get_var_1d_fourbyteint_'
<br>
<p>/home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x64af9):
<br>
undefined reference to `netcdf_mp_nf90_inq_varid_'
<br>
<p>/home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x64bbb):
<br>
undefined reference to `netcdf_mp_nf90_get_var_1d_fourbyteint_'
<br>
<p>/home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x64d4e):
<br>
undefined reference to `netcdf_mp_nf90_inq_varid_'
<br>
<p>/home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x64e10):
<br>
undefined reference to `netcdf_mp_nf90_get_var_1d_fourbyteint_'
<br>
<p>/home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x64ea9):
<br>
undefined reference to `netcdf_mp_nf90_inq_varid_'
<br>
<p>/home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x64f1c):
<br>
undefined reference to `netcdf_mp_nf90_inquire_variable_'
<br>
<p>/home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x64f4d):
<br>
undefined reference to `netcdf_mp_nf90_inquire_dimension_'
<br>
<p>/home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x67651):
<br>
undefined reference to `netcdf_mp_nf90_get_var_2d_fourbyteint_'
<br>
<p>/home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x67672):
<br>
undefined reference to `netcdf_mp_nf90_inq_varid_'
<br>
<p>/home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x67725):
<br>
undefined reference to `netcdf_mp_nf90_get_var_2d_eightbytereal_'
<br>
<p>/home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x67746):
<br>
undefined reference to `netcdf_mp_nf90_inq_varid_'
<br>
<p>/home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x677f9):
<br>
undefined reference to `netcdf_mp_nf90_get_var_2d_fourbyteint_'
<br>
<p>/home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x6781a):
<br>
undefined reference to `netcdf_mp_nf90_inq_varid_'
<br>
<p>/home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x678cd):
<br>
undefined reference to `netcdf_mp_nf90_get_var_2d_fourbyteint_'
<br>
<p>/home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x6790c):
<br>
undefined reference to `netcdf_mp_nf90_inq_varid_'
<br>
<p>/home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x679bf):
<br>
undefined reference to `netcdf_mp_nf90_get_var_2d_eightbytereal_'
<br>
<p>/home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x679e1):
<br>
undefined reference to `netcdf_mp_nf90_inq_varid_'
<br>
<p>/home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x67a94):
<br>
undefined reference to `netcdf_mp_nf90_get_var_2d_fourbyteint_'
<br>
<p>/home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x67ab5):
<br>
undefined reference to `netcdf_mp_nf90_inq_varid_'
<br>
<p>/home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x67b68):
<br>
undefined reference to `netcdf_mp_nf90_get_var_2d_eightbytereal_'
<br>
<p>/home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x67b89):
<br>
undefined reference to `netcdf_mp_nf90_inq_varid_'
<br>
<p>/home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x67c3c):
<br>
undefined reference to `netcdf_mp_nf90_get_var_2d_eightbytereal_'
<br>
<p>/home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x67c5d):
<br>
undefined reference to `netcdf_mp_nf90_inq_varid_'
<br>
<p>/home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x67e04):
<br>
undefined reference to `netcdf_mp_nf90_get_var_2d_fourbyteint_'
<br>
<p>/home/pmdtest/cosmo/source/cosmo_110525_4.18/obj/src_obs_proc_cdf.o: In
<br>
function `src_obs_proc_cdf_mp_obs_cdf_read_init_':
<br>
<p>/home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x6d36b):
<br>
undefined reference to `netcdf_mp_nf90_open_'
<br>
<p>make: *** [allexe] Error 1
<br>
<p>[root_at_pmd03 cosmo_110525_4.18]#
<br>
Regards
<br>
Ahsan
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-19667/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19668.php">Jeff Squyres: "Re: [OMPI users] undefined reference to `netcdf_mp_nf90_open_'"</a>
<li><strong>Previous message:</strong> <a href="19666.php">Damien: "Re: [OMPI users] VS2008 : linking against OpenMPI: unresolved external symbols"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19668.php">Jeff Squyres: "Re: [OMPI users] undefined reference to `netcdf_mp_nf90_open_'"</a>
<li><strong>Reply:</strong> <a href="19668.php">Jeff Squyres: "Re: [OMPI users] undefined reference to `netcdf_mp_nf90_open_'"</a>
<li><strong>Reply:</strong> <a href="19669.php">Dmitry N. Mikushin: "Re: [OMPI users] undefined reference to `netcdf_mp_nf90_open_'"</a>
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

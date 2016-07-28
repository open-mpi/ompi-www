<?
$subject_val = "Re: [OMPI users] undefined reference to `netcdf_mp_nf90_open_'";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jun 26 09:20:58 2012" -->
<!-- isoreceived="20120626132058" -->
<!-- sent="Tue, 26 Jun 2012 09:20:54 -0400" -->
<!-- isosent="20120626132054" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] undefined reference to `netcdf_mp_nf90_open_'" -->
<!-- id="6F5947ED-E824-4ED7-BF0E-695E4833379E_at_cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CAMvdAs+apGdUe8pMwNEefqjS_JhR23FvMG_e6qSOE3x1KOYMSw_at_mail.gmail.com" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-06-26 09:20:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19669.php">Dmitry N. Mikushin: "Re: [OMPI users] undefined reference to `netcdf_mp_nf90_open_'"</a>
<li><strong>Previous message:</strong> <a href="19667.php">Syed Ahsan Ali: "[OMPI users] undefined reference to `netcdf_mp_nf90_open_'"</a>
<li><strong>In reply to:</strong> <a href="19667.php">Syed Ahsan Ali: "[OMPI users] undefined reference to `netcdf_mp_nf90_open_'"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19670.php">Tim Prince: "Re: [OMPI users] undefined reference to `netcdf_mp_nf90_open_'"</a>
<li><strong>Reply:</strong> <a href="19670.php">Tim Prince: "Re: [OMPI users] undefined reference to `netcdf_mp_nf90_open_'"</a>
<li><strong>Reply:</strong> <a href="19677.php">Syed Ahsan Ali: "Re: [OMPI users] undefined reference to `netcdf_mp_nf90_open_'"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Sorry, this looks like an application issue -- i.e., the linker error you're getting doesn't look like it's coming from Open MPI.  Perhaps it's a missing application/middleware library.
<br>
<p>More specifically, you can take the mpif90 command that is being used to generate these errors and add &quot;--showme&quot; to the end of it, and you'll see what underlying compiler command is being executed under the covers.  That might help you understand exactly what is going on.
<br>
<p><p><p>On Jun 26, 2012, at 7:13 AM, Syed Ahsan Ali wrote:
<br>
<p><span class="quotelev1">&gt; Dear All
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; I am getting following error while compilation of an application. Seems like something related to netcdf and mpif90. Although I have compiled netcdf with mpif90 option, dont why this error is happening. Any hint would be highly appreciated.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/obj/src_obs_proc_cdf.o: In function `src_obs_proc_cdf_mp_obs_cdf_read_org_':
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x17aa): undefined reference to `netcdf_mp_nf90_open_'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/obj/src_obs_proc_cdf.o: In function `src_obs_proc_cdf_mp_obs_cdf_read_temp_pilot_':
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x1000e): undefined reference to `netcdf_mp_nf90_inq_varid_'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x10039): undefined reference to `netcdf_mp_nf90_inq_varid_'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x10064): undefined reference to `netcdf_mp_nf90_inq_varid_'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x1008b): undefined reference to `netcdf_mp_nf90_inq_varid_'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x100c8): undefined reference to `netcdf_mp_nf90_inq_varid_'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x10227): undefined reference to `netcdf_mp_nf90_get_var_1d_fourbyteint_'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x102eb): undefined reference to `netcdf_mp_nf90_get_var_1d_fourbyteint_'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x103af): undefined reference to `netcdf_mp_nf90_get_var_1d_fourbyteint_'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x10473): undefined reference to `netcdf_mp_nf90_get_var_1d_fourbyteint_'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x10559): undefined reference to `netcdf_mp_nf90_get_var_1d_fourbyteint_'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x10890): undefined reference to `netcdf_mp_nf90_inq_varid_'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x108bb): undefined reference to `netcdf_mp_nf90_inq_varid_'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x108e2): undefined reference to `netcdf_mp_nf90_inq_varid_'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x10909): undefined reference to `netcdf_mp_nf90_inq_varid_'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x10930): undefined reference to `netcdf_mp_nf90_inq_varid_'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/obj/src_obs_proc_cdf.o:/home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x109e8): more undefined references to `netcdf_mp_nf90_inq_varid_' follow
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/obj/src_obs_proc_cdf.o: In function `src_obs_proc_cdf_mp_obs_cdf_read_temp_pilot_':
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x10abc): undefined reference to `netcdf_mp_nf90_get_var_1d_fourbyteint_'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x10b8c): undefined reference to `netcdf_mp_nf90_get_var_1d_fourbyteint_'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x10c5c): undefined reference to `netcdf_mp_nf90_get_var_1d_eightbytereal_'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x10d2c): undefined reference to `netcdf_mp_nf90_get_var_1d_fourbyteint_'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x10dfc): undefined reference to `netcdf_mp_nf90_get_var_1d_fourbyteint_'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x10ecc): undefined reference to `netcdf_mp_nf90_get_var_1d_fourbyteint_'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x10ef3): undefined reference to `netcdf_mp_nf90_inq_varid_'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x10fbb): undefined reference to `netcdf_mp_nf90_get_var_1d_fourbyteint_'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x1105a): undefined reference to `netcdf_mp_nf90_inq_varid_'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x110cb): undefined reference to `netcdf_mp_nf90_inquire_variable_'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x11102): undefined reference to `netcdf_mp_nf90_inquire_dimension_'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x118be): undefined reference to `netcdf_mp_nf90_inq_varid_'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x118e9): undefined reference to `netcdf_mp_nf90_inq_varid_'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x11914): undefined reference to `netcdf_mp_nf90_inq_varid_'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x1193b): undefined reference to `netcdf_mp_nf90_inq_varid_'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x11962): undefined reference to `netcdf_mp_nf90_inq_varid_'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/obj/src_obs_proc_cdf.o:/home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x11989): more undefined references to `netcdf_mp_nf90_inq_varid_' follow
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/obj/src_obs_proc_cdf.o: In function `src_obs_proc_cdf_mp_obs_cdf_read_temp_pilot_':
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x11c36): undefined reference to `netcdf_mp_nf90_get_var_2d_fourbyteint_'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x11ceb): undefined reference to `netcdf_mp_nf90_get_var_2d_fourbyteint_'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x11da0): undefined reference to `netcdf_mp_nf90_get_var_2d_fourbyteint_'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x11e55): undefined reference to `netcdf_mp_nf90_get_var_2d_eightbytereal_'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x11f0a): undefined reference to `netcdf_mp_nf90_get_var_2d_eightbytereal_'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x11fbf): undefined reference to `netcdf_mp_nf90_get_var_2d_eightbytereal_'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x120bf): undefined reference to `netcdf_mp_nf90_get_var_2d_eightbytereal_'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x12230): undefined reference to `netcdf_mp_nf90_get_var_2d_fourbyteint_'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x122fb): undefined reference to `netcdf_mp_nf90_get_var_2d_fourbyteint_'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x123b0): undefined reference to `netcdf_mp_nf90_get_var_2d_eightbytereal_'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x1246d): undefined reference to `netcdf_mp_nf90_get_var_2d_eightbytereal_'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x12522): undefined reference to `netcdf_mp_nf90_get_var_2d_eightbytereal_'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x14a6c): undefined reference to `netcdf_mp_nf90_strerror_'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/obj/src_obs_proc_cdf.o: In function `src_obs_proc_cdf_mp_obs_cdf_read_common_':
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x29e3d): undefined reference to `netcdf_mp_nf90_inq_varid_'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x29ec3): undefined reference to `netcdf_mp_nf90_inquire_variable_'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x29fa8): undefined reference to `netcdf_mp_nf90_inquire_dimension_'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x29fca): undefined reference to `netcdf_mp_nf90_get_att_one_fourbyteint_'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x2a801): undefined reference to `netcdf_mp_nf90_inq_varid_'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x2a821): undefined reference to `netcdf_mp_nf90_inq_varid_'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x2a841): undefined reference to `netcdf_mp_nf90_inq_varid_'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x2a861): undefined reference to `netcdf_mp_nf90_inq_varid_'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x2a8f9): undefined reference to `netcdf_mp_nf90_inq_varid_'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x2a928): undefined reference to `netcdf_mp_nf90_get_var_1d_fourbyteint_'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x2a94f): undefined reference to `netcdf_mp_nf90_get_var_1d_fourbyteint_'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x2a976): undefined reference to `netcdf_mp_nf90_get_var_1d_fourbyteint_'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x2a99d): undefined reference to `netcdf_mp_nf90_get_var_1d_fourbyteint_'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x2a9c4): undefined reference to `netcdf_mp_nf90_get_var_1d_fourbyteint_'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x2d69a): undefined reference to `netcdf_mp_nf90_inq_varid_'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x2d6ba): undefined reference to `netcdf_mp_nf90_inq_varid_'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x2d799): undefined reference to `netcdf_mp_nf90_get_var_1d_fourbyteint_'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x2d870): undefined reference to `netcdf_mp_nf90_get_var_1d_fourbyteint_'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x2ddfa): undefined reference to `netcdf_mp_nf90_inq_varid_'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x2de1e): undefined reference to `netcdf_mp_nf90_inq_varid_'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x2de3e): undefined reference to `netcdf_mp_nf90_inq_varid_'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x2df1a): undefined reference to `netcdf_mp_nf90_get_var_1d_fourbyteint_'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x2dfee): undefined reference to `netcdf_mp_nf90_get_var_1d_fourbyteint_'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x2e16c): undefined reference to `netcdf_mp_nf90_inq_varid_'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x2e248): undefined reference to `netcdf_mp_nf90_get_var_1d_fourbyteint_'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x2ece1): undefined reference to `netcdf_mp_nf90_inq_varid_'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x2ed01): undefined reference to `netcdf_mp_nf90_inq_varid_'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x2eddd): undefined reference to `netcdf_mp_nf90_get_var_1d_fourbyteint_'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x2eeb1): undefined reference to `netcdf_mp_nf90_get_var_1d_fourbyteint_'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x2eecd): undefined reference to `netcdf_mp_nf90_inq_varid_'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x2efc2): undefined reference to `netcdf_mp_nf90_get_var_1d_fourbyteint_'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x2f1ab): undefined reference to `netcdf_mp_nf90_inq_varid_'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x2f287): undefined reference to `netcdf_mp_nf90_get_var_1d_fourbyteint_'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x2f2a3): undefined reference to `netcdf_mp_nf90_inq_varid_'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x2f37f): undefined reference to `netcdf_mp_nf90_get_var_1d_fourbyteint_'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x2f3a6): undefined reference to `netcdf_mp_nf90_inq_varid_'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x2f3c6): undefined reference to `netcdf_mp_nf90_inq_varid_'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x2f3ea): undefined reference to `netcdf_mp_nf90_inq_varid_'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x2f4d1): undefined reference to `netcdf_mp_nf90_get_var_1d_fourbyteint_'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x2f5dc): undefined reference to `netcdf_mp_nf90_inq_varid_'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x2f6c3): undefined reference to `netcdf_mp_nf90_get_var_1d_fourbyteint_'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x2f7ec): undefined reference to `netcdf_mp_nf90_inq_varid_'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x2f80c): undefined reference to `netcdf_mp_nf90_inq_dimid_'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x2f82d): undefined reference to `netcdf_mp_nf90_inq_varid_'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x2f84d): undefined reference to `netcdf_mp_nf90_inq_dimid_'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x2f86e): undefined reference to `netcdf_mp_nf90_inq_varid_'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x2f88e): undefined reference to `netcdf_mp_nf90_inq_dimid_'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x2f8af): undefined reference to `netcdf_mp_nf90_inq_varid_'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x2f8cf): undefined reference to `netcdf_mp_nf90_inq_dimid_'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x2f8f0): undefined reference to `netcdf_mp_nf90_inq_varid_'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x2f910): undefined reference to `netcdf_mp_nf90_inq_dimid_'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x2f92e): undefined reference to `netcdf_mp_nf90_inq_varid_'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x2f952): undefined reference to `netcdf_mp_nf90_inq_dimid_'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x2f992): undefined reference to `netcdf_mp_nf90_inquire_dimension_'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x2fbbd): undefined reference to `netcdf_mp_nf90_get_var_2d_text_'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x30031): undefined reference to `netcdf_mp_nf90_inq_varid_'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x30051): undefined reference to `netcdf_mp_nf90_inq_varid_'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x3006d): undefined reference to `netcdf_mp_nf90_inq_varid_'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x3008d): undefined reference to `netcdf_mp_nf90_inq_varid_'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x300b7): undefined reference to `netcdf_mp_nf90_get_att_one_eightbytereal_'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x3091e): undefined reference to `netcdf_mp_nf90_get_var_1d_eightbytereal_'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x309f2): undefined reference to `netcdf_mp_nf90_get_var_1d_eightbytereal_'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x30a0e): undefined reference to `netcdf_mp_nf90_inq_varid_'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x30aea): undefined reference to `netcdf_mp_nf90_get_var_1d_fourbyteint_'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x30b06): undefined reference to `netcdf_mp_nf90_inq_varid_'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x30be2): undefined reference to `netcdf_mp_nf90_get_var_1d_eightbytereal_'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x30bfe): undefined reference to `netcdf_mp_nf90_inq_varid_'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x30cda): undefined reference to `netcdf_mp_nf90_get_var_1d_eightbytereal_'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x30cf6): undefined reference to `netcdf_mp_nf90_inq_varid_'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x30d16): undefined reference to `netcdf_mp_nf90_inq_varid_'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x30df2): undefined reference to `netcdf_mp_nf90_get_var_1d_fourbyteint_'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x30e0e): undefined reference to `netcdf_mp_nf90_inq_varid_'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x30eea): undefined reference to `netcdf_mp_nf90_get_var_1d_fourbyteint_'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x342aa): undefined reference to `netcdf_mp_nf90_get_var_1d_fourbyteint_'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x3437e): undefined reference to `netcdf_mp_nf90_get_var_1d_fourbyteint_'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x34f13): undefined reference to `netcdf_mp_nf90_inq_varid_'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x34f33): undefined reference to `netcdf_mp_nf90_inq_varid_'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x34f53): undefined reference to `netcdf_mp_nf90_inq_varid_'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x34f73): undefined reference to `netcdf_mp_nf90_inq_varid_'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x34ffc): undefined reference to `netcdf_mp_nf90_inq_varid_'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x350d8): undefined reference to `netcdf_mp_nf90_get_var_1d_fourbyteint_'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x351ac): undefined reference to `netcdf_mp_nf90_get_var_1d_fourbyteint_'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x35280): undefined reference to `netcdf_mp_nf90_get_var_1d_fourbyteint_'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x35354): undefined reference to `netcdf_mp_nf90_get_var_1d_fourbyteint_'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x35428): undefined reference to `netcdf_mp_nf90_get_var_1d_fourbyteint_'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/obj/src_obs_proc_cdf.o: In function `src_obs_proc_cdf_mp_obs_cdf_read_aircraft_':
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x38816): undefined reference to `netcdf_mp_nf90_inq_varid_'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x38837): undefined reference to `netcdf_mp_nf90_inq_varid_'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x3885c): undefined reference to `netcdf_mp_nf90_inq_varid_'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x3887d): undefined reference to `netcdf_mp_nf90_inq_varid_'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x3889e): undefined reference to `netcdf_mp_nf90_inq_varid_'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/obj/src_obs_proc_cdf.o:/home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x388bf): more undefined references to `netcdf_mp_nf90_inq_varid_' follow
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/obj/src_obs_proc_cdf.o: In function `src_obs_proc_cdf_mp_obs_cdf_read_aircraft_':
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x38ad7): undefined reference to `netcdf_mp_nf90_get_var_1d_fourbyteint_'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x38b86): undefined reference to `netcdf_mp_nf90_get_var_2d_fourbyteint_'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x38c35): undefined reference to `netcdf_mp_nf90_get_var_2d_fourbyteint_'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x38ce4): undefined reference to `netcdf_mp_nf90_get_var_2d_eightbytereal_'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x38d93): undefined reference to `netcdf_mp_nf90_get_var_2d_eightbytereal_'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x38e4f): undefined reference to `netcdf_mp_nf90_get_var_2d_fourbyteint_'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x38efe): undefined reference to `netcdf_mp_nf90_get_var_2d_eightbytereal_'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x38fd5): undefined reference to `netcdf_mp_nf90_get_var_1d_eightbytereal_'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x3909f): undefined reference to `netcdf_mp_nf90_get_var_1d_eightbytereal_'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x39169): undefined reference to `netcdf_mp_nf90_get_var_1d_fourbyteint_'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x39233): undefined reference to `netcdf_mp_nf90_get_var_1d_eightbytereal_'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x392fd): undefined reference to `netcdf_mp_nf90_get_var_1d_fourbyteint_'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x393d4): undefined reference to `netcdf_mp_nf90_get_var_2d_eightbytereal_'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x3949e): undefined reference to `netcdf_mp_nf90_get_var_1d_eightbytereal_'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x39568): undefined reference to `netcdf_mp_nf90_get_var_1d_fourbyteint_'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x39632): undefined reference to `netcdf_mp_nf90_get_var_2d_eightbytereal_'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x396e1): undefined reference to `netcdf_mp_nf90_get_var_2d_eightbytereal_'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x397c1): undefined reference to `netcdf_mp_nf90_get_var_2d_fourbyteint_'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x3989d): undefined reference to `netcdf_mp_nf90_get_var_1d_eightbytereal_'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x39979): undefined reference to `netcdf_mp_nf90_get_var_2d_eightbytereal_'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x39a55): undefined reference to `netcdf_mp_nf90_get_var_1d_eightbytereal_'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x39b31): undefined reference to `netcdf_mp_nf90_get_var_1d_eightbytereal_'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x39c0d): undefined reference to `netcdf_mp_nf90_get_var_1d_fourbyteint_'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x39ce9): undefined reference to `netcdf_mp_nf90_get_var_1d_eightbytereal_'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x39dc5): undefined reference to `netcdf_mp_nf90_get_var_1d_fourbyteint_'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x39ea1): undefined reference to `netcdf_mp_nf90_get_var_1d_fourbyteint_'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x39f7d): undefined reference to `netcdf_mp_nf90_get_var_1d_eightbytereal_'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x3c975): undefined reference to `netcdf_mp_nf90_inq_varid_'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x3c99a): undefined reference to `netcdf_mp_nf90_inq_varid_'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x3c9bf): undefined reference to `netcdf_mp_nf90_inq_varid_'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x3ce98): undefined reference to `netcdf_mp_nf90_inq_varid_'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x3ceb9): undefined reference to `netcdf_mp_nf90_inq_varid_'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/obj/src_obs_proc_cdf.o:/home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x3cee6): more undefined references to `netcdf_mp_nf90_inq_varid_' follow
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/obj/src_obs_proc_cdf.o: In function `src_obs_proc_cdf_mp_obs_cdf_read_aircraft_':
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x3e521): undefined reference to `netcdf_mp_nf90_get_var_1d_fourbyteint_'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x3e5c0): undefined reference to `netcdf_mp_nf90_inq_varid_'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x3e63a): undefined reference to `netcdf_mp_nf90_inquire_variable_'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x3e77b): undefined reference to `netcdf_mp_nf90_inquire_dimension_'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/obj/src_obs_proc_cdf.o: In function `src_obs_proc_cdf_mp_obs_cdf_read_surface_':
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x5c9e1): undefined reference to `netcdf_mp_nf90_inq_varid_'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x5ca02): undefined reference to `netcdf_mp_nf90_inq_varid_'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x5ca27): undefined reference to `netcdf_mp_nf90_inq_varid_'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x5ca48): undefined reference to `netcdf_mp_nf90_inq_varid_'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x5ca69): undefined reference to `netcdf_mp_nf90_inq_varid_'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/obj/src_obs_proc_cdf.o:/home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x5ca8a): more undefined references to `netcdf_mp_nf90_inq_varid_' follow
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/obj/src_obs_proc_cdf.o: In function `src_obs_proc_cdf_mp_obs_cdf_read_surface_':
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x5d156): undefined reference to `netcdf_mp_nf90_get_var_1d_fourbyteint_'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x5d219): undefined reference to `netcdf_mp_nf90_get_var_2d_eightbytereal_'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x5d2d0): undefined reference to `netcdf_mp_nf90_get_var_2d_eightbytereal_'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x5d387): undefined reference to `netcdf_mp_nf90_get_var_2d_fourbyteint_'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x5d43e): undefined reference to `netcdf_mp_nf90_get_var_2d_eightbytereal_'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x5d4f5): undefined reference to `netcdf_mp_nf90_get_var_1d_eightbytereal_'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x5d5da): undefined reference to `netcdf_mp_nf90_get_var_2d_eightbytereal_'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x5d69d): undefined reference to `netcdf_mp_nf90_get_var_1d_eightbytereal_'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x5d760): undefined reference to `netcdf_mp_nf90_get_var_1d_eightbytereal_'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x5d823): undefined reference to `netcdf_mp_nf90_get_var_1d_fourbyteint_'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x5d8e6): undefined reference to `netcdf_mp_nf90_get_var_1d_fourbyteint_'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x5d9a9): undefined reference to `netcdf_mp_nf90_get_var_1d_fourbyteint_'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x5da8e): undefined reference to `netcdf_mp_nf90_get_var_1d_eightbytereal_'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x5db51): undefined reference to `netcdf_mp_nf90_get_var_1d_fourbyteint_'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x5dc28): undefined reference to `netcdf_mp_nf90_get_var_1d_eightbytereal_'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x5dceb): undefined reference to `netcdf_mp_nf90_get_var_1d_fourbyteint_'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x5ddae): undefined reference to `netcdf_mp_nf90_get_var_1d_fourbyteint_'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x5de71): undefined reference to `netcdf_mp_nf90_get_var_1d_fourbyteint_'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x5df34): undefined reference to `netcdf_mp_nf90_get_var_1d_eightbytereal_'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x5dff7): undefined reference to `netcdf_mp_nf90_get_var_1d_fourbyteint_'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x5e0ba): undefined reference to `netcdf_mp_nf90_get_var_1d_fourbyteint_'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x5e17d): undefined reference to `netcdf_mp_nf90_get_var_1d_fourbyteint_'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x5e240): undefined reference to `netcdf_mp_nf90_get_var_1d_fourbyteint_'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x5e303): undefined reference to `netcdf_mp_nf90_get_var_1d_fourbyteint_'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/obj/src_obs_proc_cdf.o:/home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x5e3c6): more undefined references to `netcdf_mp_nf90_get_var_1d_fourbyteint_' follow
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/obj/src_obs_proc_cdf.o: In function `src_obs_proc_cdf_mp_obs_cdf_read_surface_':
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x5e54c): undefined reference to `netcdf_mp_nf90_get_var_1d_eightbytereal_'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x5e60f): undefined reference to `netcdf_mp_nf90_get_var_1d_eightbytereal_'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x5e6d2): undefined reference to `netcdf_mp_nf90_get_var_1d_fourbyteint_'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x5e795): undefined reference to `netcdf_mp_nf90_get_var_1d_fourbyteint_'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x5e858): undefined reference to `netcdf_mp_nf90_get_var_1d_fourbyteint_'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x5e91b): undefined reference to `netcdf_mp_nf90_get_var_1d_fourbyteint_'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x5e9df): undefined reference to `netcdf_mp_nf90_get_var_1d_eightbytereal_'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x5eaa3): undefined reference to `netcdf_mp_nf90_get_var_1d_eightbytereal_'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x5eb67): undefined reference to `netcdf_mp_nf90_get_var_1d_fourbyteint_'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x5ec2b): undefined reference to `netcdf_mp_nf90_get_var_1d_fourbyteint_'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x5ecef): undefined reference to `netcdf_mp_nf90_get_var_1d_fourbyteint_'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x5edb3): undefined reference to `netcdf_mp_nf90_get_var_1d_fourbyteint_'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x5ee77): undefined reference to `netcdf_mp_nf90_get_var_1d_eightbytereal_'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x5ef3b): undefined reference to `netcdf_mp_nf90_get_var_1d_eightbytereal_'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x5f00d): undefined reference to `netcdf_mp_nf90_get_var_1d_fourbyteint_'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x5f0d0): undefined reference to `netcdf_mp_nf90_get_var_1d_eightbytereal_'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x5f193): undefined reference to `netcdf_mp_nf90_get_var_1d_eightbytereal_'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x5f256): undefined reference to `netcdf_mp_nf90_get_var_1d_fourbyteint_'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x5f323): undefined reference to `netcdf_mp_nf90_get_var_1d_eightbytereal_'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x5f3e6): undefined reference to `netcdf_mp_nf90_get_var_1d_fourbyteint_'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x5f4a9): undefined reference to `netcdf_mp_nf90_get_var_1d_eightbytereal_'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x5f56c): undefined reference to `netcdf_mp_nf90_get_var_1d_fourbyteint_'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x5f62f): undefined reference to `netcdf_mp_nf90_get_var_1d_fourbyteint_'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x5f6fc): undefined reference to `netcdf_mp_nf90_get_var_1d_eightbytereal_'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x5f7ea): undefined reference to `netcdf_mp_nf90_inq_varid_'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x5f80b): undefined reference to `netcdf_mp_nf90_inq_varid_'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x5f82c): undefined reference to `netcdf_mp_nf90_inq_varid_'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x5f8e0): undefined reference to `netcdf_mp_nf90_inq_varid_'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x5f955): undefined reference to `netcdf_mp_nf90_inquire_variable_'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x5f986): undefined reference to `netcdf_mp_nf90_inquire_dimension_'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x5fe2d): undefined reference to `netcdf_mp_nf90_get_var_2d_fourbyteint_'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x5fed6): undefined reference to `netcdf_mp_nf90_get_var_2d_fourbyteint_'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x5ff7f): undefined reference to `netcdf_mp_nf90_get_var_2d_fourbyteint_'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x60028): undefined reference to `netcdf_mp_nf90_get_var_2d_eightbytereal_'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x63137): undefined reference to `netcdf_mp_nf90_inq_varid_'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x6315c): undefined reference to `netcdf_mp_nf90_inq_varid_'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x63181): undefined reference to `netcdf_mp_nf90_inq_varid_'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x631a6): undefined reference to `netcdf_mp_nf90_inq_varid_'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x631cb): undefined reference to `netcdf_mp_nf90_inq_varid_'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/obj/src_obs_proc_cdf.o:/home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x631f0): more undefined references to `netcdf_mp_nf90_inq_varid_' follow
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/obj/src_obs_proc_cdf.o: In function `src_obs_proc_cdf_mp_obs_cdf_read_profiler_':
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x6480b): undefined reference to `netcdf_mp_nf90_get_var_1d_fourbyteint_'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x6482c): undefined reference to `netcdf_mp_nf90_inq_varid_'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x648fa): undefined reference to `netcdf_mp_nf90_get_var_1d_fourbyteint_'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x6491b): undefined reference to `netcdf_mp_nf90_inq_varid_'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x649e9): undefined reference to `netcdf_mp_nf90_get_var_1d_fourbyteint_'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x64a0a): undefined reference to `netcdf_mp_nf90_inq_varid_'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x64ad8): undefined reference to `netcdf_mp_nf90_get_var_1d_fourbyteint_'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x64af9): undefined reference to `netcdf_mp_nf90_inq_varid_'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x64bbb): undefined reference to `netcdf_mp_nf90_get_var_1d_fourbyteint_'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x64d4e): undefined reference to `netcdf_mp_nf90_inq_varid_'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x64e10): undefined reference to `netcdf_mp_nf90_get_var_1d_fourbyteint_'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x64ea9): undefined reference to `netcdf_mp_nf90_inq_varid_'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x64f1c): undefined reference to `netcdf_mp_nf90_inquire_variable_'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x64f4d): undefined reference to `netcdf_mp_nf90_inquire_dimension_'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x67651): undefined reference to `netcdf_mp_nf90_get_var_2d_fourbyteint_'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x67672): undefined reference to `netcdf_mp_nf90_inq_varid_'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x67725): undefined reference to `netcdf_mp_nf90_get_var_2d_eightbytereal_'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x67746): undefined reference to `netcdf_mp_nf90_inq_varid_'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x677f9): undefined reference to `netcdf_mp_nf90_get_var_2d_fourbyteint_'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x6781a): undefined reference to `netcdf_mp_nf90_inq_varid_'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x678cd): undefined reference to `netcdf_mp_nf90_get_var_2d_fourbyteint_'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x6790c): undefined reference to `netcdf_mp_nf90_inq_varid_'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x679bf): undefined reference to `netcdf_mp_nf90_get_var_2d_eightbytereal_'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x679e1): undefined reference to `netcdf_mp_nf90_inq_varid_'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x67a94): undefined reference to `netcdf_mp_nf90_get_var_2d_fourbyteint_'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x67ab5): undefined reference to `netcdf_mp_nf90_inq_varid_'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x67b68): undefined reference to `netcdf_mp_nf90_get_var_2d_eightbytereal_'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x67b89): undefined reference to `netcdf_mp_nf90_inq_varid_'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x67c3c): undefined reference to `netcdf_mp_nf90_get_var_2d_eightbytereal_'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x67c5d): undefined reference to `netcdf_mp_nf90_inq_varid_'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x67e04): undefined reference to `netcdf_mp_nf90_get_var_2d_fourbyteint_'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/obj/src_obs_proc_cdf.o: In function `src_obs_proc_cdf_mp_obs_cdf_read_init_':
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x6d36b): undefined reference to `netcdf_mp_nf90_open_'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; make: *** [allexe] Error 1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [root_at_pmd03 cosmo_110525_4.18]#
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Regards
</span><br>
<span class="quotelev1">&gt; Ahsan
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
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19669.php">Dmitry N. Mikushin: "Re: [OMPI users] undefined reference to `netcdf_mp_nf90_open_'"</a>
<li><strong>Previous message:</strong> <a href="19667.php">Syed Ahsan Ali: "[OMPI users] undefined reference to `netcdf_mp_nf90_open_'"</a>
<li><strong>In reply to:</strong> <a href="19667.php">Syed Ahsan Ali: "[OMPI users] undefined reference to `netcdf_mp_nf90_open_'"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19670.php">Tim Prince: "Re: [OMPI users] undefined reference to `netcdf_mp_nf90_open_'"</a>
<li><strong>Reply:</strong> <a href="19670.php">Tim Prince: "Re: [OMPI users] undefined reference to `netcdf_mp_nf90_open_'"</a>
<li><strong>Reply:</strong> <a href="19677.php">Syed Ahsan Ali: "Re: [OMPI users] undefined reference to `netcdf_mp_nf90_open_'"</a>
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

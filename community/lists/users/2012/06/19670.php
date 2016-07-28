<?
$subject_val = "Re: [OMPI users] undefined reference to `netcdf_mp_nf90_open_'";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jun 26 09:50:55 2012" -->
<!-- isoreceived="20120626135055" -->
<!-- sent="Tue, 26 Jun 2012 09:50:44 -0400" -->
<!-- isosent="20120626135044" -->
<!-- name="Tim Prince" -->
<!-- email="n8tm_at_[hidden]" -->
<!-- subject="Re: [OMPI users] undefined reference to `netcdf_mp_nf90_open_'" -->
<!-- id="4FE9BE34.1090500_at_aol.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="6F5947ED-E824-4ED7-BF0E-695E4833379E_at_cisco.com" -->
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
<strong>From:</strong> Tim Prince (<em>n8tm_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-06-26 09:50:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19671.php">Dr AD: "Re: [OMPI users] VS2008 : linking against OpenMPI: unresolved external symbols"</a>
<li><strong>Previous message:</strong> <a href="19669.php">Dmitry N. Mikushin: "Re: [OMPI users] undefined reference to `netcdf_mp_nf90_open_'"</a>
<li><strong>In reply to:</strong> <a href="19668.php">Jeff Squyres: "Re: [OMPI users] undefined reference to `netcdf_mp_nf90_open_'"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19679.php">Syed Ahsan Ali: "Re: [OMPI users] undefined reference to `netcdf_mp_nf90_open_'"</a>
<li><strong>Reply:</strong> <a href="19679.php">Syed Ahsan Ali: "Re: [OMPI users] undefined reference to `netcdf_mp_nf90_open_'"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 6/26/2012 9:20 AM, Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; Sorry, this looks like an application issue -- i.e., the linker error you're getting doesn't look like it's coming from Open MPI.  Perhaps it's a missing application/middleware library.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; More specifically, you can take the mpif90 command that is being used to generate these errors and add &quot;--showme&quot; to the end of it, and you'll see what underlying compiler command is being executed under the covers.  That might help you understand exactly what is going on.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jun 26, 2012, at 7:13 AM, Syed Ahsan Ali wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Dear All
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I am getting following error while compilation of an application. Seems like something related to netcdf and mpif90. Although I have compiled netcdf with mpif90 option, dont why this error is happening. Any hint would be highly appreciated.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/obj/src_obs_proc_cdf.o: In function `src_obs_proc_cdf_mp_obs_cdf_read_org_':
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /home/pmdtest/cosmo/source/cosmo_110525_4.18/src/src_obs_proc_cdf.f90:(.text+0x17aa): undefined reference to `netcdf_mp_nf90_open_'
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
If your mpif90 is properly built and set up with the same Fortran 
<br>
compiler you are using, it appears that either you didn't build the 
<br>
netcdf Fortran 90 modules with that compiler, or you didn't set the 
<br>
include path for the netcdf modules.  This would work the same with 
<br>
mpif90 as with the underlying Fortran compiler.
<br>
<p><p><pre>
-- 
Tim Prince
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19671.php">Dr AD: "Re: [OMPI users] VS2008 : linking against OpenMPI: unresolved external symbols"</a>
<li><strong>Previous message:</strong> <a href="19669.php">Dmitry N. Mikushin: "Re: [OMPI users] undefined reference to `netcdf_mp_nf90_open_'"</a>
<li><strong>In reply to:</strong> <a href="19668.php">Jeff Squyres: "Re: [OMPI users] undefined reference to `netcdf_mp_nf90_open_'"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19679.php">Syed Ahsan Ali: "Re: [OMPI users] undefined reference to `netcdf_mp_nf90_open_'"</a>
<li><strong>Reply:</strong> <a href="19679.php">Syed Ahsan Ali: "Re: [OMPI users] undefined reference to `netcdf_mp_nf90_open_'"</a>
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

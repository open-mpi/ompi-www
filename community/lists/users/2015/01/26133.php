<?
$subject_val = "[OMPI users] libpsm_infinipath issues?";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan  8 16:07:29 2015" -->
<!-- isoreceived="20150108210729" -->
<!-- sent="Thu, 8 Jan 2015 16:07:27 -0500" -->
<!-- isosent="20150108210727" -->
<!-- name="VanEss.Michael" -->
<!-- email="vaness.michael_at_[hidden]" -->
<!-- subject="[OMPI users] libpsm_infinipath issues?" -->
<!-- id="FDF06AD843A5D84F89537BCAA377E69162F8DA4811_at_mb-ex07.ensco.win" -->
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
<strong>Subject:</strong> [OMPI users] libpsm_infinipath issues?<br>
<strong>From:</strong> VanEss.Michael (<em>vaness.michael_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-01-08 16:07:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26134.php">Jesse Ziser: "[OMPI users] -fgnu89-inline needed to avoid &quot;multiple definition of `lstat64'&quot; error"</a>
<li><strong>Previous message:</strong> <a href="26132.php">Tom Rosmond: "Re: [OMPI users] send and receive vectors + variable length"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26135.php">Friedley, Andrew: "Re: [OMPI users] libpsm_infinipath issues?"</a>
<li><strong>Reply:</strong> <a href="26135.php">Friedley, Andrew: "Re: [OMPI users] libpsm_infinipath issues?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello all,
<br>
<p>Our clusters were just upgraded to both a new version of PGI (14.9) as well as openmpi (1.8.3).  Previous versions were 12.1 and 1.6 respectively, and those compiled and linked just fine.  The newest versions are not linking my mpi applications at all.  Here's the problem:
<br>
<p>/opt/scyld/openmpi/1.8.3/pgi/bin/mpif90 -C chemcode_mpi.o mod_mpichem.o plume_mpi.o amb2D_mpi.o fex.o jex.o use_tuv.o run_lsode.o mod_amb.o utmgeo.o lsode.o newamb.o plume.o amb2D.o solve.o mod_cdf.o calc_rates.o mod_tuv.o flux.o amb1D.o amb_com.o newamb2D.o vs_ccode.o ck_errors.o newamb1D.o doChem.o mod_lsode.o stode.o plume_com.o typeSizes.o netcdf.o mod_parameters.o mod_chem.o runfile.o com_codes.o mod_SLAM.o mod_CPUFF.o calc_za.o mod_releases.o mod_site.o mod_distance.o nuclear_dates.o mod_luparms.o deposition.o diffusion.o getTJ.o mod_met.o met_data.o mod_h5tuv.o tuv10.o mod_h5camx.o cmxamb.o \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-L/ensco/apps/cm/CMSOL/linux/zlib-1.2.1/lib -L/ensco/apps/cm/CMSOL/linux/szip-2.1/lib -o \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;chemcode_mpi  -L/opt/pgi/linux86-64/14.9/lib -lpgf90 -lpgf90rtl \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-L/ensco/apps/cm/CMSOL/linux/hdf5-1.8.3/lib -lhdf5_fortran -l hdf5 -lz -lm
<br>
/usr/lib64/libpsm_infinipath.so.1: undefined reference to `knem_put'
<br>
/usr/lib64/libpsm_infinipath.so.1: undefined reference to `knem_open_device'
<br>
/usr/lib64/libpsm_infinipath.so.1: undefined reference to `knem_get'
<br>
/usr/lib64/libpsm_infinipath.so.1: undefined reference to `knem_register_region'
<br>
<p>I've searched the net for any information on this and nothing has seemed to help.  I'm fairly confident that all my variables and paths to the new software is correct.
<br>
<p>Any ideas?
<br>
<p>Regards,
<br>
<p>Mike
<br>
<p><p>________________________________
<br>
The information contained in this email message is intended only for the use of the individual(s) to whom it is addressed and may contain information that is privileged and sensitive. If you are not the intended recipient, or otherwise have received this communication in error, please notify the sender immediately by email at the above referenced address and note that any further dissemination, distribution or copying of this communication is strictly prohibited.
<br>
<p>The U.S. Export Control Laws regulate the export and re-export of technology originating in the United States. This includes the electronic transmission of information and software to foreign countries and to certain foreign nationals. Recipient agrees to abide by these laws and their regulations -- including the U.S. Department of Commerce Export Administration Regulations and the U.S. Department of State International Traffic in Arms Regulations -- and not to transfer, by electronic transmission or otherwise, any content derived from this email to either a foreign national or a foreign destination in violation of such laws.
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-26133/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26134.php">Jesse Ziser: "[OMPI users] -fgnu89-inline needed to avoid &quot;multiple definition of `lstat64'&quot; error"</a>
<li><strong>Previous message:</strong> <a href="26132.php">Tom Rosmond: "Re: [OMPI users] send and receive vectors + variable length"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26135.php">Friedley, Andrew: "Re: [OMPI users] libpsm_infinipath issues?"</a>
<li><strong>Reply:</strong> <a href="26135.php">Friedley, Andrew: "Re: [OMPI users] libpsm_infinipath issues?"</a>
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

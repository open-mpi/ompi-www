<?
$subject_val = "Re: [OMPI users] libpsm_infinipath issues?";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan  8 16:44:44 2015" -->
<!-- isoreceived="20150108214444" -->
<!-- sent="Thu, 08 Jan 2015 16:44:38 -0500" -->
<!-- isosent="20150108214438" -->
<!-- name="Gus Correa" -->
<!-- email="gus_at_[hidden]" -->
<!-- subject="Re: [OMPI users] libpsm_infinipath issues?" -->
<!-- id="54AEFA46.8020001_at_ldeo.columbia.edu" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="0429C22EBDB44040B478F8F77EF14518C94E9E_at_ORSMSX114.amr.corp.intel.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] libpsm_infinipath issues?<br>
<strong>From:</strong> Gus Correa (<em>gus_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-01-08 16:44:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26137.php">Diego Avesani: "Re: [OMPI users] send and receive vectors + variable length"</a>
<li><strong>Previous message:</strong> <a href="26135.php">Friedley, Andrew: "Re: [OMPI users] libpsm_infinipath issues?"</a>
<li><strong>In reply to:</strong> <a href="26135.php">Friedley, Andrew: "Re: [OMPI users] libpsm_infinipath issues?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26151.php">VanEss.Michael: "Re: [OMPI users] libpsm_infinipath issues?"</a>
<li><strong>Reply:</strong> <a href="26151.php">VanEss.Michael: "Re: [OMPI users] libpsm_infinipath issues?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Michael, Andrew, list
<br>
<p>knem is doesn't work in OMPI 1.8.3.
<br>
See this thread:
<br>
<a href="http://www.open-mpi.org/community/lists/users/2014/10/25511.php">http://www.open-mpi.org/community/lists/users/2014/10/25511.php</a>
<br>
<p>A fix was promised on OMPI 1.8.4:
<br>
<a href="http://www.open-mpi.org/software/ompi/v1.8/">http://www.open-mpi.org/software/ompi/v1.8/</a>
<br>
<p>Have you tried it?
<br>
<p>I hope this helps,
<br>
Gus Correa
<br>
<p>On 01/08/2015 04:36 PM, Friedley, Andrew wrote:
<br>
<span class="quotelev1">&gt; Hi Mike,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Have you contacted your admins, or the vendor that provided your True
</span><br>
<span class="quotelev1">&gt; Scale and/or PSM installation? E.g. Redhat, or Intel via
</span><br>
<span class="quotelev1">&gt; ibsupport_at_[hidden] &lt;mailto:ibsupport_at_[hidden]&gt;?  They are normally the
</span><br>
<span class="quotelev1">&gt; recommended path for True Scale support.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; That said, here&#146;s some things to look into:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I think it&#146;s strange that you&#146;re hitting PSM linker problems while
</span><br>
<span class="quotelev1">&gt; compiling an app with Open MPI.  Normally only the PSM MTL is linked
</span><br>
<span class="quotelev1">&gt; directly against PSM.  Try verifying that nothing else is linking in
</span><br>
<span class="quotelev1">&gt; PSM. Also, it&#146;s possible your OMPI build is different from normal too.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; PSM has optional KNEM support that can be compiled in, but it&#146;s off by
</span><br>
<span class="quotelev1">&gt; default and I&#146;ve never heard of it being used.  It&#146;s possible that your
</span><br>
<span class="quotelev1">&gt; PSM was changed or recompiled and part of your cluster upgrade, and the
</span><br>
<span class="quotelev1">&gt; installation isn&#146;t quite right.  It looks like your PSM was compiled
</span><br>
<span class="quotelev1">&gt; with KNEM support, but the KNEM library isn&#146;t being linked in or is not
</span><br>
<span class="quotelev1">&gt; being found.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Andrew
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *From:* users [mailto:users-bounces_at_[hidden]] *On Behalf Of
</span><br>
<span class="quotelev1">&gt; *VanEss.Michael
</span><br>
<span class="quotelev1">&gt; *Sent:* Thursday, January 8, 2015 1:07 PM
</span><br>
<span class="quotelev1">&gt; *To:* users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; *Subject:* [OMPI users] libpsm_infinipath issues?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hello all,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Our clusters were just upgraded to both a new version of PGI (14.9) as
</span><br>
<span class="quotelev1">&gt; well as openmpi (1.8.3).  Previous versions were 12.1 and 1.6
</span><br>
<span class="quotelev1">&gt; respectively, and those compiled and linked just fine.  The newest
</span><br>
<span class="quotelev1">&gt; versions are not linking my mpi applications at all.  Here&#146;s the problem:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; /opt/scyld/openmpi/1.8.3/pgi/bin/mpif90 -C chemcode_mpi.o mod_mpichem.o
</span><br>
<span class="quotelev1">&gt; plume_mpi.o amb2D_mpi.o fex.o jex.o use_tuv.o run_lsode.o mod_amb.o
</span><br>
<span class="quotelev1">&gt; utmgeo.o lsode.o newamb.o plume.o amb2D.o solve.o mod_cdf.o calc_rates.o
</span><br>
<span class="quotelev1">&gt; mod_tuv.o flux.o amb1D.o amb_com.o newamb2D.o vs_ccode.o ck_errors.o
</span><br>
<span class="quotelev1">&gt; newamb1D.o doChem.o mod_lsode.o stode.o plume_com.o typeSizes.o netcdf.o
</span><br>
<span class="quotelev1">&gt; mod_parameters.o mod_chem.o runfile.o com_codes.o mod_SLAM.o mod_CPUFF.o
</span><br>
<span class="quotelev1">&gt; calc_za.o mod_releases.o mod_site.o mod_distance.o nuclear_dates.o
</span><br>
<span class="quotelev1">&gt; mod_luparms.o deposition.o diffusion.o getTJ.o mod_met.o met_data.o
</span><br>
<span class="quotelev1">&gt; mod_h5tuv.o tuv10.o mod_h5camx.o cmxamb.o \
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;          -L/ensco/apps/cm/CMSOL/linux/zlib-1.2.1/lib
</span><br>
<span class="quotelev1">&gt; -L/ensco/apps/cm/CMSOL/linux/szip-2.1/lib -o \
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;          chemcode_mpi  -L/opt/pgi/linux86-64/14.9/lib -lpgf90 -lpgf90rtl \
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;          -L/ensco/apps/cm/CMSOL/linux/hdf5-1.8.3/lib -lhdf5_fortran -l
</span><br>
<span class="quotelev1">&gt; hdf5 -lz -lm
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; /usr/lib64/libpsm_infinipath.so.1: undefined reference to `knem_put'
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; /usr/lib64/libpsm_infinipath.so.1: undefined reference to `knem_open_device'
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; /usr/lib64/libpsm_infinipath.so.1: undefined reference to `knem_get'
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; /usr/lib64/libpsm_infinipath.so.1: undefined reference to
</span><br>
<span class="quotelev1">&gt; `knem_register_region'
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I&#146;ve searched the net for any information on this and nothing has seemed
</span><br>
<span class="quotelev1">&gt; to help.  I&#146;m fairly confident that all my variables and paths to the
</span><br>
<span class="quotelev1">&gt; new software is correct.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Any ideas?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Mike
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The information contained in this email message is intended only for the
</span><br>
<span class="quotelev1">&gt; use of the individual(s) to whom it is addressed and may contain
</span><br>
<span class="quotelev1">&gt; information that is privileged and sensitive. If you are not the
</span><br>
<span class="quotelev1">&gt; intended recipient, or otherwise have received this communication in
</span><br>
<span class="quotelev1">&gt; error, please notify the sender immediately by email at the above
</span><br>
<span class="quotelev1">&gt; referenced address and note that any further dissemination, distribution
</span><br>
<span class="quotelev1">&gt; or copying of this communication is strictly prohibited.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The U.S. Export Control Laws regulate the export and re-export of
</span><br>
<span class="quotelev1">&gt; technology originating in the United States. This includes the
</span><br>
<span class="quotelev1">&gt; electronic transmission of information and software to foreign countries
</span><br>
<span class="quotelev1">&gt; and to certain foreign nationals. Recipient agrees to abide by these
</span><br>
<span class="quotelev1">&gt; laws and their regulations -- including the U.S. Department of Commerce
</span><br>
<span class="quotelev1">&gt; Export Administration Regulations and the U.S. Department of State
</span><br>
<span class="quotelev1">&gt; International Traffic in Arms Regulations -- and not to transfer, by
</span><br>
<span class="quotelev1">&gt; electronic transmission or otherwise, any content derived from this
</span><br>
<span class="quotelev1">&gt; email to either a foreign national or a foreign destination in violation
</span><br>
<span class="quotelev1">&gt; of such laws.
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/01/26135.php">http://www.open-mpi.org/community/lists/users/2015/01/26135.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26137.php">Diego Avesani: "Re: [OMPI users] send and receive vectors + variable length"</a>
<li><strong>Previous message:</strong> <a href="26135.php">Friedley, Andrew: "Re: [OMPI users] libpsm_infinipath issues?"</a>
<li><strong>In reply to:</strong> <a href="26135.php">Friedley, Andrew: "Re: [OMPI users] libpsm_infinipath issues?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26151.php">VanEss.Michael: "Re: [OMPI users] libpsm_infinipath issues?"</a>
<li><strong>Reply:</strong> <a href="26151.php">VanEss.Michael: "Re: [OMPI users] libpsm_infinipath issues?"</a>
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

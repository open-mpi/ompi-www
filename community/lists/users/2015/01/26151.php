<?
$subject_val = "Re: [OMPI users] libpsm_infinipath issues?";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan  9 08:55:32 2015" -->
<!-- isoreceived="20150109135532" -->
<!-- sent="Fri, 9 Jan 2015 08:55:31 -0500" -->
<!-- isosent="20150109135531" -->
<!-- name="VanEss.Michael" -->
<!-- email="vaness.michael_at_[hidden]" -->
<!-- subject="Re: [OMPI users] libpsm_infinipath issues?" -->
<!-- id="FDF06AD843A5D84F89537BCAA377E69162F8DA483D_at_mb-ex07.ensco.win" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="54AEFA46.8020001_at_ldeo.columbia.edu" -->
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
<strong>From:</strong> VanEss.Michael (<em>vaness.michael_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-01-09 08:55:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26152.php">Sasso, John (GE Power & Water, Non-GE): "[OMPI users] Determine IB transport type of OpenMPI job"</a>
<li><strong>Previous message:</strong> <a href="26150.php">Jeff Squyres (jsquyres): "Re: [OMPI users] send and receive vectors + variable length"</a>
<li><strong>In reply to:</strong> <a href="26136.php">Gus Correa: "Re: [OMPI users] libpsm_infinipath issues?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Gus, Andrew, list
<br>
<p>No, I haven't tried 1.8.4.  I'll give it a whirl and hope that it fixes the issue.
<br>
<p>Thanks,
<br>
<p>Mike
<br>
<p><span class="quotelev1">&gt; -----Original Message-----
</span><br>
<span class="quotelev1">&gt; From: users [mailto:users-bounces_at_[hidden]] On Behalf Of Gus Correa
</span><br>
<span class="quotelev1">&gt; Sent: Thursday, January 08, 2015 4:45 PM
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] libpsm_infinipath issues?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi Michael, Andrew, list
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; knem is doesn't work in OMPI 1.8.3.
</span><br>
<span class="quotelev1">&gt; See this thread:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2014/10/25511.php">http://www.open-mpi.org/community/lists/users/2014/10/25511.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; A fix was promised on OMPI 1.8.4:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/software/ompi/v1.8/">http://www.open-mpi.org/software/ompi/v1.8/</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Have you tried it?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I hope this helps,
</span><br>
<span class="quotelev1">&gt; Gus Correa
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 01/08/2015 04:36 PM, Friedley, Andrew wrote:
</span><br>
<span class="quotelev2">&gt; &gt; Hi Mike,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Have you contacted your admins, or the vendor that provided your True
</span><br>
<span class="quotelev2">&gt; &gt; Scale and/or PSM installation? E.g. Redhat, or Intel via
</span><br>
<span class="quotelev2">&gt; &gt; ibsupport_at_[hidden] &lt;mailto:ibsupport_at_[hidden]&gt;?  They are normally
</span><br>
<span class="quotelev2">&gt; &gt; the recommended path for True Scale support.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; That said, here's some things to look into:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I think it's strange that you're hitting PSM linker problems while
</span><br>
<span class="quotelev2">&gt; &gt; compiling an app with Open MPI.  Normally only the PSM MTL is linked
</span><br>
<span class="quotelev2">&gt; &gt; directly against PSM.  Try verifying that nothing else is linking in
</span><br>
<span class="quotelev2">&gt; &gt; PSM. Also, it's possible your OMPI build is different from normal too.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; PSM has optional KNEM support that can be compiled in, but it's off by
</span><br>
<span class="quotelev2">&gt; &gt; default and I've never heard of it being used.  It's possible that
</span><br>
<span class="quotelev2">&gt; &gt; your PSM was changed or recompiled and part of your cluster upgrade,
</span><br>
<span class="quotelev2">&gt; &gt; and the installation isn't quite right.  It looks like your PSM was
</span><br>
<span class="quotelev2">&gt; &gt; compiled with KNEM support, but the KNEM library isn't being linked in
</span><br>
<span class="quotelev2">&gt; &gt; or is not being found.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Andrew
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; *From:* users [mailto:users-bounces_at_[hidden]] *On Behalf Of
</span><br>
<span class="quotelev2">&gt; &gt; *VanEss.Michael
</span><br>
<span class="quotelev2">&gt; &gt; *Sent:* Thursday, January 8, 2015 1:07 PM
</span><br>
<span class="quotelev2">&gt; &gt; *To:* users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; *Subject:* [OMPI users] libpsm_infinipath issues?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Hello all,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Our clusters were just upgraded to both a new version of PGI (14.9) as
</span><br>
<span class="quotelev2">&gt; &gt; well as openmpi (1.8.3).  Previous versions were 12.1 and 1.6
</span><br>
<span class="quotelev2">&gt; &gt; respectively, and those compiled and linked just fine.  The newest
</span><br>
<span class="quotelev2">&gt; &gt; versions are not linking my mpi applications at all.  Here's the problem:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; /opt/scyld/openmpi/1.8.3/pgi/bin/mpif90 -C chemcode_mpi.o
</span><br>
<span class="quotelev2">&gt; &gt; mod_mpichem.o plume_mpi.o amb2D_mpi.o fex.o jex.o use_tuv.o
</span><br>
<span class="quotelev2">&gt; &gt; run_lsode.o mod_amb.o utmgeo.o lsode.o newamb.o plume.o amb2D.o
</span><br>
<span class="quotelev2">&gt; &gt; solve.o mod_cdf.o calc_rates.o mod_tuv.o flux.o amb1D.o amb_com.o
</span><br>
<span class="quotelev2">&gt; &gt; newamb2D.o vs_ccode.o ck_errors.o newamb1D.o doChem.o
</span><br>
<span class="quotelev1">&gt; mod_lsode.o
</span><br>
<span class="quotelev2">&gt; &gt; stode.o plume_com.o typeSizes.o netcdf.o mod_parameters.o
</span><br>
<span class="quotelev1">&gt; mod_chem.o
</span><br>
<span class="quotelev2">&gt; &gt; runfile.o com_codes.o mod_SLAM.o mod_CPUFF.o calc_za.o
</span><br>
<span class="quotelev1">&gt; mod_releases.o
</span><br>
<span class="quotelev2">&gt; &gt; mod_site.o mod_distance.o nuclear_dates.o mod_luparms.o deposition.o
</span><br>
<span class="quotelev2">&gt; &gt; diffusion.o getTJ.o mod_met.o met_data.o mod_h5tuv.o tuv10.o
</span><br>
<span class="quotelev2">&gt; &gt; mod_h5camx.o cmxamb.o \
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;          -L/ensco/apps/cm/CMSOL/linux/zlib-1.2.1/lib
</span><br>
<span class="quotelev2">&gt; &gt; -L/ensco/apps/cm/CMSOL/linux/szip-2.1/lib -o \
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;          chemcode_mpi  -L/opt/pgi/linux86-64/14.9/lib -lpgf90
</span><br>
<span class="quotelev2">&gt; &gt; -lpgf90rtl \
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;          -L/ensco/apps/cm/CMSOL/linux/hdf5-1.8.3/lib -lhdf5_fortran -l
</span><br>
<span class="quotelev2">&gt; &gt; hdf5 -lz -lm
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; /usr/lib64/libpsm_infinipath.so.1: undefined reference to `knem_put'
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; /usr/lib64/libpsm_infinipath.so.1: undefined reference to
</span><br>
<span class="quotelev1">&gt; `knem_open_device'
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; /usr/lib64/libpsm_infinipath.so.1: undefined reference to `knem_get'
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; /usr/lib64/libpsm_infinipath.so.1: undefined reference to
</span><br>
<span class="quotelev2">&gt; &gt; `knem_register_region'
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I've searched the net for any information on this and nothing has
</span><br>
<span class="quotelev2">&gt; &gt; seemed to help.  I'm fairly confident that all my variables and paths
</span><br>
<span class="quotelev2">&gt; &gt; to the new software is correct.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Any ideas?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Regards,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Mike
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; ----------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt; --
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; The information contained in this email message is intended only for
</span><br>
<span class="quotelev2">&gt; &gt; the use of the individual(s) to whom it is addressed and may contain
</span><br>
<span class="quotelev2">&gt; &gt; information that is privileged and sensitive. If you are not the
</span><br>
<span class="quotelev2">&gt; &gt; intended recipient, or otherwise have received this communication in
</span><br>
<span class="quotelev2">&gt; &gt; error, please notify the sender immediately by email at the above
</span><br>
<span class="quotelev2">&gt; &gt; referenced address and note that any further dissemination,
</span><br>
<span class="quotelev2">&gt; &gt; distribution or copying of this communication is strictly prohibited.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; The U.S. Export Control Laws regulate the export and re-export of
</span><br>
<span class="quotelev2">&gt; &gt; technology originating in the United States. This includes the
</span><br>
<span class="quotelev2">&gt; &gt; electronic transmission of information and software to foreign
</span><br>
<span class="quotelev2">&gt; &gt; countries and to certain foreign nationals. Recipient agrees to abide
</span><br>
<span class="quotelev2">&gt; &gt; by these laws and their regulations -- including the U.S. Department
</span><br>
<span class="quotelev2">&gt; &gt; of Commerce Export Administration Regulations and the U.S. Department
</span><br>
<span class="quotelev2">&gt; &gt; of State International Traffic in Arms Regulations -- and not to
</span><br>
<span class="quotelev2">&gt; &gt; transfer, by electronic transmission or otherwise, any content derived
</span><br>
<span class="quotelev2">&gt; &gt; from this email to either a foreign national or a foreign destination
</span><br>
<span class="quotelev2">&gt; &gt; in violation of such laws.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt; Link to this post:
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/community/lists/users/2015/01/26135.php">http://www.open-mpi.org/community/lists/users/2015/01/26135.php</a>
</span><br>
<span class="quotelev2">&gt; &gt;
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open">http://www.open</a>-
</span><br>
<span class="quotelev1">&gt; mpi.org/community/lists/users/2015/01/26136.php
</span><br>
<p>The information contained in this email message is intended only for the use of the individual(s) to whom it is addressed and may contain information that is privileged and sensitive. If you are not the intended recipient, or otherwise have received this communication in error, please notify the sender immediately by email at the above referenced address and note that any further dissemination, distribution or copying of this communication is strictly prohibited.
<br>
<p>The U.S. Export Control Laws regulate the export and re-export of technology originating in the United States. This includes the electronic transmission of information and software to foreign countries and to certain foreign nationals. Recipient agrees to abide by these laws and their regulations -- including the U.S. Department of Commerce Export Administration Regulations and the U.S. Department of State International Traffic in Arms Regulations -- and not to transfer, by electronic transmission or otherwise, any content derived from this email to either a foreign national or a foreign destination in violation of such laws.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26152.php">Sasso, John (GE Power & Water, Non-GE): "[OMPI users] Determine IB transport type of OpenMPI job"</a>
<li><strong>Previous message:</strong> <a href="26150.php">Jeff Squyres (jsquyres): "Re: [OMPI users] send and receive vectors + variable length"</a>
<li><strong>In reply to:</strong> <a href="26136.php">Gus Correa: "Re: [OMPI users] libpsm_infinipath issues?"</a>
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

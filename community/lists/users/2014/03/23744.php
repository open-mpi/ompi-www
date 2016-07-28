<?
$subject_val = "Re: [OMPI users] Compiling Open MPI 1.7.4 using PGI 14.2 and Mellanox HCOLL enabled";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Mar  2 19:05:38 2014" -->
<!-- isoreceived="20140303000538" -->
<!-- sent="Mon, 3 Mar 2014 00:05:48 +0000" -->
<!-- isosent="20140303000548" -->
<!-- name="Filippo Spiga" -->
<!-- email="spiga.filippo_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Compiling Open MPI 1.7.4 using PGI 14.2 and Mellanox HCOLL enabled" -->
<!-- id="5B4A2B09-3D0F-4C67-90BE-0B989C439363_at_gmail.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="29215AD2-030E-4F86-B9AE-475B739AFF81_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] Compiling Open MPI 1.7.4 using PGI 14.2 and Mellanox HCOLL enabled<br>
<strong>From:</strong> Filippo Spiga (<em>spiga.filippo_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-03-02 19:05:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23745.php">tmishima_at_[hidden]: "Re: [OMPI users] new map-by-obj has a problem"</a>
<li><strong>Previous message:</strong> <a href="23743.php">Reuti: "Re: [OMPI users] Heterogeneous cluster problem - mixing AMD and Intel nodes"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2014/02/23662.php">Ralph Castain: "Re: [OMPI users] Compiling Open MPI 1.7.4 using PGI 14.2 and Mellanox HCOLL enabled"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23798.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Compiling Open MPI 1.7.4 using PGI 14.2 and Mellanox	HCOLL enabled"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear Ralph,
<br>
<p>I still need a workaround to compile using PGI and --with-hcoll. I tried a night snapshot last week I will try again the latest one and if something change I will let you know.
<br>
<p>Regards,
<br>
Filippo
<br>
<p><p>On Feb 26, 2014, at 6:16 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Perhaps you could try the nightly 1.7.5 tarball? I believe some PGI fixes may have gone in there
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Feb 25, 2014, at 3:22 PM, Filippo Spiga &lt;spiga.filippo_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Dear all,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I came across another small issue while I was compiling Open MPI 1.7.4 using PGI 14.2 and building the support for Mellanox Hierarchical Collectives (--with-hcoll). Here you how configure Open MPI:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; export MXM_DIR=/opt/mellanox/mxm
</span><br>
<span class="quotelev2">&gt;&gt; export KNEM_DIR=$(find /opt -maxdepth 1 -type d -name &quot;knem*&quot; -print0)
</span><br>
<span class="quotelev2">&gt;&gt; export FCA_DIR=/opt/mellanox/fca
</span><br>
<span class="quotelev2">&gt;&gt; export HCOLL_DIR=/opt/mellanox/hcoll
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; ../configure  CC=pgcc CXX=pgCC FC=pgf90 F90=pgf90 --prefix=/usr/local/Cluster-Users/fs395/openmpi-1.7.4/pgi-14.2_cuda-6.0RC  --enable-mpirun-prefix-by-default --with-hcoll=$HCOLL_DIR --with-fca=$FCA_DIR --with-mxm=$MXM_DIR --with-knem=$KNEM_DIR --with-slurm=/usr/local/Cluster-Apps/slurm  --with-cuda=$CUDA_INSTALL_PATH
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; At some point the compile process fails with this error:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; make[2]: Leaving directory `/home/fs395/archive/openmpi-1.7.4/build/ompi/mca/coll/hierarch'
</span><br>
<span class="quotelev2">&gt;&gt; Making all in mca/coll/hcoll
</span><br>
<span class="quotelev2">&gt;&gt; make[2]: Entering directory `/home/fs395/archive/openmpi-1.7.4/build/ompi/mca/coll/hcoll'
</span><br>
<span class="quotelev2">&gt;&gt; CC       coll_hcoll_module.lo
</span><br>
<span class="quotelev2">&gt;&gt; CC       coll_hcoll_component.lo
</span><br>
<span class="quotelev2">&gt;&gt; CC       coll_hcoll_rte.lo
</span><br>
<span class="quotelev2">&gt;&gt; CC       coll_hcoll_ops.lo
</span><br>
<span class="quotelev2">&gt;&gt; CCLD     mca_coll_hcoll.la
</span><br>
<span class="quotelev2">&gt;&gt; pgcc-Error-Unknown switch: -pthread
</span><br>
<span class="quotelev2">&gt;&gt; make[2]: *** [mca_coll_hcoll.la] Error 1
</span><br>
<span class="quotelev2">&gt;&gt; make[2]: Leaving directory `/home/fs395/archive/openmpi-1.7.4/build/ompi/mca/coll/hcoll'
</span><br>
<span class="quotelev2">&gt;&gt; make[1]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev2">&gt;&gt; make[1]: Leaving directory `/home/fs395/archive/openmpi-1.7.4/build/ompi'
</span><br>
<span class="quotelev2">&gt;&gt; make: *** [all-recursive] Error 1
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Attached the configure.log and the make.log collected as reported on the website.  Using google I found an old post referring to the same problem. Here few relevant links:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2009/03/8687.php">http://www.open-mpi.org/community/lists/users/2009/03/8687.php</a>
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2010/09/14229.php">http://www.open-mpi.org/community/lists/users/2010/09/14229.php</a>
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2009/04/8911.php">http://www.open-mpi.org/community/lists/users/2009/04/8911.php</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I have no problem to use a fake wrapper or the &quot;-noswitcherror&quot; compiler pgf90 flag. I wonder if this procedure will affect in some way the MPI built and I have to carry on this flag also when I compile my applications. 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Is there any way to fix libtool so Open MPI can build itself properly?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Thanks
</span><br>
<span class="quotelev2">&gt;&gt; Filippo
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Mr. Filippo SPIGA, M.Sc.
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.linkedin.com/in/filippospiga">http://www.linkedin.com/in/filippospiga</a> ~ skype: filippo.spiga
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; &#171;Nobody will drive us out of Cantor's paradise.&#187; ~ David Hilbert
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; *****
</span><br>
<span class="quotelev2">&gt;&gt; Disclaimer: &quot;Please note this message and any attachments are CONFIDENTIAL and may be privileged or otherwise protected from disclosure. The contents are not to be disclosed to anyone other than the addressee. Unauthorized recipients are requested to preserve this confidentiality and to advise the sender immediately of any error in transmission.&quot;
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
<p><pre>
--
Mr. Filippo SPIGA, M.Sc.
<a href="http://www.linkedin.com/in/filippospiga">http://www.linkedin.com/in/filippospiga</a> ~ skype: filippo.spiga
&#171;Nobody will drive us out of Cantor's paradise.&#187; ~ David Hilbert
*****
Disclaimer: &quot;Please note this message and any attachments are CONFIDENTIAL and may be privileged or otherwise protected from disclosure. The contents are not to be disclosed to anyone other than the addressee. Unauthorized recipients are requested to preserve this confidentiality and to advise the sender immediately of any error in transmission.&quot;
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23745.php">tmishima_at_[hidden]: "Re: [OMPI users] new map-by-obj has a problem"</a>
<li><strong>Previous message:</strong> <a href="23743.php">Reuti: "Re: [OMPI users] Heterogeneous cluster problem - mixing AMD and Intel nodes"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2014/02/23662.php">Ralph Castain: "Re: [OMPI users] Compiling Open MPI 1.7.4 using PGI 14.2 and Mellanox HCOLL enabled"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23798.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Compiling Open MPI 1.7.4 using PGI 14.2 and Mellanox	HCOLL enabled"</a>
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

<?
$subject_val = "Re: [OMPI users] Compiling Open MPI 1.7.4 using PGI 14.2 and Mellanox	HCOLL enabled";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar 11 11:12:03 2014" -->
<!-- isoreceived="20140311151203" -->
<!-- sent="Tue, 11 Mar 2014 15:12:01 +0000" -->
<!-- isosent="20140311151201" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Compiling Open MPI 1.7.4 using PGI 14.2 and Mellanox	HCOLL enabled" -->
<!-- id="685ECC3F-765E-48F1-BFDB-39470B9A70F6_at_cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="5C7EC447-AEA1-4C97-8916-48E52A37F43F_at_gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Compiling Open MPI 1.7.4 using PGI 14.2 and Mellanox	HCOLL enabled<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-03-11 11:12:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23799.php">흆e Sandgren: "Re: [OMPI users] Compiling Open MPI 1.7.4 using PGI 14.2 and Mellanox HCOLL enabled"</a>
<li><strong>Previous message:</strong> <a href="23797.php">Velickovic Nikola: "Re: [OMPI users] Problems with computation-communication overlap	in	non-blocking mode"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2014/02/23644.php">Filippo Spiga: "[OMPI users] Compiling Open MPI 1.7.4 using PGI 14.2 and Mellanox HCOLL enabled"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23799.php">흆e Sandgren: "Re: [OMPI users] Compiling Open MPI 1.7.4 using PGI 14.2 and Mellanox HCOLL enabled"</a>
<li><strong>Reply:</strong> <a href="23799.php">흆e Sandgren: "Re: [OMPI users] Compiling Open MPI 1.7.4 using PGI 14.2 and Mellanox HCOLL enabled"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I don't see the config.log and make.log attached - can you send all the info requested here (including config.log and config.out):
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>
<br>
<p>Can you also send &quot;make V=1&quot; output as well?
<br>
<p><p>On Feb 25, 2014, at 6:22 PM, Filippo Spiga &lt;spiga.filippo_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Dear all,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I came across another small issue while I was compiling Open MPI 1.7.4 using PGI 14.2 and building the support for Mellanox Hierarchical Collectives (--with-hcoll). Here you how configure Open MPI:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; export MXM_DIR=/opt/mellanox/mxm
</span><br>
<span class="quotelev1">&gt; export KNEM_DIR=$(find /opt -maxdepth 1 -type d -name &quot;knem*&quot; -print0)
</span><br>
<span class="quotelev1">&gt; export FCA_DIR=/opt/mellanox/fca
</span><br>
<span class="quotelev1">&gt; export HCOLL_DIR=/opt/mellanox/hcoll
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ../configure  CC=pgcc CXX=pgCC FC=pgf90 F90=pgf90 --prefix=/usr/local/Cluster-Users/fs395/openmpi-1.7.4/pgi-14.2_cuda-6.0RC  --enable-mpirun-prefix-by-default --with-hcoll=$HCOLL_DIR --with-fca=$FCA_DIR --with-mxm=$MXM_DIR --with-knem=$KNEM_DIR --with-slurm=/usr/local/Cluster-Apps/slurm  --with-cuda=$CUDA_INSTALL_PATH
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; At some point the compile process fails with this error:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; make[2]: Leaving directory `/home/fs395/archive/openmpi-1.7.4/build/ompi/mca/coll/hierarch'
</span><br>
<span class="quotelev1">&gt; Making all in mca/coll/hcoll
</span><br>
<span class="quotelev1">&gt; make[2]: Entering directory `/home/fs395/archive/openmpi-1.7.4/build/ompi/mca/coll/hcoll'
</span><br>
<span class="quotelev1">&gt;  CC       coll_hcoll_module.lo
</span><br>
<span class="quotelev1">&gt;  CC       coll_hcoll_component.lo
</span><br>
<span class="quotelev1">&gt;  CC       coll_hcoll_rte.lo
</span><br>
<span class="quotelev1">&gt;  CC       coll_hcoll_ops.lo
</span><br>
<span class="quotelev1">&gt;  CCLD     mca_coll_hcoll.la
</span><br>
<span class="quotelev1">&gt; pgcc-Error-Unknown switch: -pthread
</span><br>
<span class="quotelev1">&gt; make[2]: *** [mca_coll_hcoll.la] Error 1
</span><br>
<span class="quotelev1">&gt; make[2]: Leaving directory `/home/fs395/archive/openmpi-1.7.4/build/ompi/mca/coll/hcoll'
</span><br>
<span class="quotelev1">&gt; make[1]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; make[1]: Leaving directory `/home/fs395/archive/openmpi-1.7.4/build/ompi'
</span><br>
<span class="quotelev1">&gt; make: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Attached the configure.log and the make.log collected as reported on the website.  Using google I found an old post referring to the same problem. Here few relevant links:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2009/03/8687.php">http://www.open-mpi.org/community/lists/users/2009/03/8687.php</a>
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2010/09/14229.php">http://www.open-mpi.org/community/lists/users/2010/09/14229.php</a>
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2009/04/8911.php">http://www.open-mpi.org/community/lists/users/2009/04/8911.php</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have no problem to use a fake wrapper or the &quot;-noswitcherror&quot; compiler pgf90 flag. I wonder if this procedure will affect in some way the MPI built and I have to carry on this flag also when I compile my applications. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Is there any way to fix libtool so Open MPI can build itself properly?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks
</span><br>
<span class="quotelev1">&gt; Filippo
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Mr. Filippo SPIGA, M.Sc.
</span><br>
<span class="quotelev1">&gt; <a href="http://www.linkedin.com/in/filippospiga">http://www.linkedin.com/in/filippospiga</a> ~ skype: filippo.spiga
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; &#171;Nobody will drive us out of Cantor's paradise.&#187; ~ David Hilbert
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; *****
</span><br>
<span class="quotelev1">&gt; Disclaimer: &quot;Please note this message and any attachments are CONFIDENTIAL and may be privileged or otherwise protected from disclosure. The contents are not to be disclosed to anyone other than the addressee. Unauthorized recipients are requested to preserve this confidentiality and to advise the sender immediately of any error in transmission.&quot;
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
<li><strong>Next message:</strong> <a href="23799.php">흆e Sandgren: "Re: [OMPI users] Compiling Open MPI 1.7.4 using PGI 14.2 and Mellanox HCOLL enabled"</a>
<li><strong>Previous message:</strong> <a href="23797.php">Velickovic Nikola: "Re: [OMPI users] Problems with computation-communication overlap	in	non-blocking mode"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2014/02/23644.php">Filippo Spiga: "[OMPI users] Compiling Open MPI 1.7.4 using PGI 14.2 and Mellanox HCOLL enabled"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23799.php">흆e Sandgren: "Re: [OMPI users] Compiling Open MPI 1.7.4 using PGI 14.2 and Mellanox HCOLL enabled"</a>
<li><strong>Reply:</strong> <a href="23799.php">흆e Sandgren: "Re: [OMPI users] Compiling Open MPI 1.7.4 using PGI 14.2 and Mellanox HCOLL enabled"</a>
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

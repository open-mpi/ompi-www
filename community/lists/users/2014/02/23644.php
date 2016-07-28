<?
$subject_val = "[OMPI users] Compiling Open MPI 1.7.4 using PGI 14.2 and Mellanox HCOLL enabled";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Feb 25 18:22:46 2014" -->
<!-- isoreceived="20140225232246" -->
<!-- sent="Tue, 25 Feb 2014 23:22:46 +0000" -->
<!-- isosent="20140225232246" -->
<!-- name="Filippo Spiga" -->
<!-- email="spiga.filippo_at_[hidden]" -->
<!-- subject="[OMPI users] Compiling Open MPI 1.7.4 using PGI 14.2 and Mellanox HCOLL enabled" -->
<!-- id="5C7EC447-AEA1-4C97-8916-48E52A37F43F_at_gmail.com" -->
<!-- charset="iso-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] Compiling Open MPI 1.7.4 using PGI 14.2 and Mellanox HCOLL enabled<br>
<strong>From:</strong> Filippo Spiga (<em>spiga.filippo_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-02-25 18:22:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23645.php">Doug Roberts: "Re: [OMPI users] Connection timed out with multiple nodes"</a>
<li><strong>Previous message:</strong> <a href="23643.php">Jeff Squyres (jsquyres): "Re: [OMPI users] OrangeFS ROMIO support"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23662.php">Ralph Castain: "Re: [OMPI users] Compiling Open MPI 1.7.4 using PGI 14.2 and Mellanox HCOLL enabled"</a>
<li><strong>Reply:</strong> <a href="23662.php">Ralph Castain: "Re: [OMPI users] Compiling Open MPI 1.7.4 using PGI 14.2 and Mellanox HCOLL enabled"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2014/03/23798.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Compiling Open MPI 1.7.4 using PGI 14.2 and Mellanox	HCOLL enabled"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear all,
<br>
<p>I came across another small issue while I was compiling Open MPI 1.7.4 using PGI 14.2 and building the support for Mellanox Hierarchical Collectives (--with-hcoll). Here you how configure Open MPI:
<br>
<p>export MXM_DIR=/opt/mellanox/mxm
<br>
export KNEM_DIR=$(find /opt -maxdepth 1 -type d -name &quot;knem*&quot; -print0)
<br>
export FCA_DIR=/opt/mellanox/fca
<br>
export HCOLL_DIR=/opt/mellanox/hcoll
<br>
<p>../configure  CC=pgcc CXX=pgCC FC=pgf90 F90=pgf90 --prefix=/usr/local/Cluster-Users/fs395/openmpi-1.7.4/pgi-14.2_cuda-6.0RC  --enable-mpirun-prefix-by-default --with-hcoll=$HCOLL_DIR --with-fca=$FCA_DIR --with-mxm=$MXM_DIR --with-knem=$KNEM_DIR --with-slurm=/usr/local/Cluster-Apps/slurm  --with-cuda=$CUDA_INSTALL_PATH
<br>
<p><p>At some point the compile process fails with this error:
<br>
<p>make[2]: Leaving directory `/home/fs395/archive/openmpi-1.7.4/build/ompi/mca/coll/hierarch'
<br>
Making all in mca/coll/hcoll
<br>
make[2]: Entering directory `/home/fs395/archive/openmpi-1.7.4/build/ompi/mca/coll/hcoll'
<br>
&nbsp;&nbsp;CC       coll_hcoll_module.lo
<br>
&nbsp;&nbsp;CC       coll_hcoll_component.lo
<br>
&nbsp;&nbsp;CC       coll_hcoll_rte.lo
<br>
&nbsp;&nbsp;CC       coll_hcoll_ops.lo
<br>
&nbsp;&nbsp;CCLD     mca_coll_hcoll.la
<br>
pgcc-Error-Unknown switch: -pthread
<br>
make[2]: *** [mca_coll_hcoll.la] Error 1
<br>
make[2]: Leaving directory `/home/fs395/archive/openmpi-1.7.4/build/ompi/mca/coll/hcoll'
<br>
make[1]: *** [all-recursive] Error 1
<br>
make[1]: Leaving directory `/home/fs395/archive/openmpi-1.7.4/build/ompi'
<br>
make: *** [all-recursive] Error 1
<br>
<p>Attached the configure.log and the make.log collected as reported on the website.  Using google I found an old post referring to the same problem. Here few relevant links:
<br>
<a href="http://www.open-mpi.org/community/lists/users/2009/03/8687.php">http://www.open-mpi.org/community/lists/users/2009/03/8687.php</a>
<br>
<a href="http://www.open-mpi.org/community/lists/users/2010/09/14229.php">http://www.open-mpi.org/community/lists/users/2010/09/14229.php</a>
<br>
<a href="http://www.open-mpi.org/community/lists/users/2009/04/8911.php">http://www.open-mpi.org/community/lists/users/2009/04/8911.php</a>
<br>
<p>I have no problem to use a fake wrapper or the &quot;-noswitcherror&quot; compiler pgf90 flag. I wonder if this procedure will affect in some way the MPI built and I have to carry on this flag also when I compile my applications. 
<br>
<p>Is there any way to fix libtool so Open MPI can build itself properly?
<br>
<p>Thanks
<br>
Filippo
<br>
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
<li><strong>Next message:</strong> <a href="23645.php">Doug Roberts: "Re: [OMPI users] Connection timed out with multiple nodes"</a>
<li><strong>Previous message:</strong> <a href="23643.php">Jeff Squyres (jsquyres): "Re: [OMPI users] OrangeFS ROMIO support"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23662.php">Ralph Castain: "Re: [OMPI users] Compiling Open MPI 1.7.4 using PGI 14.2 and Mellanox HCOLL enabled"</a>
<li><strong>Reply:</strong> <a href="23662.php">Ralph Castain: "Re: [OMPI users] Compiling Open MPI 1.7.4 using PGI 14.2 and Mellanox HCOLL enabled"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2014/03/23798.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Compiling Open MPI 1.7.4 using PGI 14.2 and Mellanox	HCOLL enabled"</a>
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

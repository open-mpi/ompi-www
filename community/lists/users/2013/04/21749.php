<?
$subject_val = "[OMPI users] OMPI v1.7.1 fails to build on RHEL 5 and RHEL 6";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr 17 17:27:33 2013" -->
<!-- isoreceived="20130417212733" -->
<!-- sent="Wed, 17 Apr 2013 15:27:28 -0600 (MDT)" -->
<!-- isosent="20130417212728" -->
<!-- name="Timothy Dwight Dunn" -->
<!-- email="Timothy.Dunn_at_[hidden]" -->
<!-- subject="[OMPI users] OMPI v1.7.1 fails to build on RHEL 5 and RHEL 6" -->
<!-- id="20130417152728.BAA68256_at_batman.int.colorado.edu" -->
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
<strong>Subject:</strong> [OMPI users] OMPI v1.7.1 fails to build on RHEL 5 and RHEL 6<br>
<strong>From:</strong> Timothy Dwight Dunn (<em>Timothy.Dunn_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-04-17 17:27:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21750.php">Ralph Castain: "Re: [OMPI users] OMPI v1.7.1 fails to build on RHEL 5 and RHEL 6"</a>
<li><strong>Previous message:</strong> <a href="21748.php">Ralph Castain: "Re: [OMPI users] MPI based HLA/RTI ?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21750.php">Ralph Castain: "Re: [OMPI users] OMPI v1.7.1 fails to build on RHEL 5 and RHEL 6"</a>
<li><strong>Reply:</strong> <a href="21750.php">Ralph Castain: "Re: [OMPI users] OMPI v1.7.1 fails to build on RHEL 5 and RHEL 6"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I have been trying to get the new v1.7.1 to build on a few different systems and I get the same error on every build attempted. While the builds are on 3 different clusters the are all using RHEL 5 or RHEL6 (6.3 not 6.4 as OFED is still not working for it yet)
<br>
<p>While I have complex configs, even when I go down to a simple config using either gnu or Intel compilers such as; 
<br>
export CC=icc
<br>
export CXX=icpc
<br>
export F77=ifort
<br>
export FC=ifort
<br>
<p>./configure --prefix=~/openmpi-1.7.1 --with-tm=~/torque-2.5.11/ --with-verbs
<br>
<p>(Note the ~ is just covering up my actual paths otherwise all is well)
<br>
<p>So this config's without problems but when I go to build with make all -j 8 I get the following error
<br>
<p><p>make[2]: Entering directory `~openmpi-1.7.1/ompi/mpi/fortran/mpiext'
<br>
&nbsp;&nbsp;PPFC     mpi-ext-module.lo
<br>
&nbsp;&nbsp;PPFC     mpi-f08-ext-module.lo
<br>
&nbsp;&nbsp;FCLD     libforce_usempi_module_to_be_built.la
<br>
&nbsp;&nbsp;FCLD     libforce_usempif08_module_to_be_built.la
<br>
make[2]: Leaving directory `~openmpi-1.7.1/ompi/mpi/fortran/mpiext'
<br>
Making all in mca/common/ofacm
<br>
make[2]: Entering directory `~openmpi-1.7.1/ompi/mca/common/ofacm'
<br>
&nbsp;&nbsp;CC       libmca_common_ofacm_la-common_ofacm_oob.lo
<br>
&nbsp;&nbsp;CC       libmca_common_ofacm_la-common_ofacm_base.lo
<br>
if test -z &quot;libmca_common_ofacm.la&quot;; then \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;rm -f &quot;libmca_common_ofacm.la&quot;; \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ln -s &quot;libmca_common_ofacm_noinst.la&quot; &quot;libmca_common_ofacm.la&quot;; \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;fi
<br>
&nbsp;&nbsp;CC       libmca_common_ofacm_la-common_ofacm_empty.lo
<br>
&nbsp;&nbsp;CC       libmca_common_ofacm_la-common_ofacm_xoob.lo
<br>
common_ofacm_xoob.c(158): error: identifier &quot;ompi_jobid_t&quot; is undefined
<br>
&nbsp;&nbsp;static int xoob_ib_address_init(ofacm_ib_address_t *ib_addr, uint16_t lid, uint64_t s_id, ompi_jobid_t ep_jobid)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;^
<br>
<p>compilation aborted for common_ofacm_xoob.c (code 2)
<br>
make[2]: *** [libmca_common_ofacm_la-common_ofacm_xoob.lo] Error 1
<br>
<p><p><p>Note I get this even if I try and build without IB verbs. Googeling for help on this has turned up nothing, literally nothing.
<br>
<p>Any suggestions?
<br>
<p>Thanks
<br>
Tim Dunn
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21750.php">Ralph Castain: "Re: [OMPI users] OMPI v1.7.1 fails to build on RHEL 5 and RHEL 6"</a>
<li><strong>Previous message:</strong> <a href="21748.php">Ralph Castain: "Re: [OMPI users] MPI based HLA/RTI ?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21750.php">Ralph Castain: "Re: [OMPI users] OMPI v1.7.1 fails to build on RHEL 5 and RHEL 6"</a>
<li><strong>Reply:</strong> <a href="21750.php">Ralph Castain: "Re: [OMPI users] OMPI v1.7.1 fails to build on RHEL 5 and RHEL 6"</a>
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

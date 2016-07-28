<?
$subject_val = "Re: [OMPI users] OMPI v1.7.1 fails to build on RHEL 5 and RHEL 6";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr 17 17:38:03 2013" -->
<!-- isoreceived="20130417213803" -->
<!-- sent="Wed, 17 Apr 2013 14:37:56 -0700" -->
<!-- isosent="20130417213756" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OMPI v1.7.1 fails to build on RHEL 5 and RHEL 6" -->
<!-- id="526DE6BC-4A23-4B27-8415-9922101D1DD4_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20130417152728.BAA68256_at_batman.int.colorado.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] OMPI v1.7.1 fails to build on RHEL 5 and RHEL 6<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-04-17 17:37:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21751.php">Paul Kapinos: "Re: [OMPI users] OMPI v1.7.1 fails to build on RHEL 5 and RHEL 6"</a>
<li><strong>Previous message:</strong> <a href="21749.php">Timothy Dwight Dunn: "[OMPI users] OMPI v1.7.1 fails to build on RHEL 5 and RHEL 6"</a>
<li><strong>In reply to:</strong> <a href="21749.php">Timothy Dwight Dunn: "[OMPI users] OMPI v1.7.1 fails to build on RHEL 5 and RHEL 6"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21751.php">Paul Kapinos: "Re: [OMPI users] OMPI v1.7.1 fails to build on RHEL 5 and RHEL 6"</a>
<li><strong>Reply:</strong> <a href="21751.php">Paul Kapinos: "Re: [OMPI users] OMPI v1.7.1 fails to build on RHEL 5 and RHEL 6"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Try adding --disable-openib-connectx-xrc to your configure line
<br>
<p><p>On Apr 17, 2013, at 2:27 PM, Timothy Dwight Dunn &lt;Timothy.Dunn_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; I have been trying to get the new v1.7.1 to build on a few different systems and I get the same error on every build attempted. While the builds are on 3 different clusters the are all using RHEL 5 or RHEL6 (6.3 not 6.4 as OFED is still not working for it yet)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; While I have complex configs, even when I go down to a simple config using either gnu or Intel compilers such as; 
</span><br>
<span class="quotelev1">&gt; export CC=icc
</span><br>
<span class="quotelev1">&gt; export CXX=icpc
</span><br>
<span class="quotelev1">&gt; export F77=ifort
</span><br>
<span class="quotelev1">&gt; export FC=ifort
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ./configure --prefix=~/openmpi-1.7.1 --with-tm=~/torque-2.5.11/ --with-verbs
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; (Note the ~ is just covering up my actual paths otherwise all is well)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; So this config's without problems but when I go to build with make all -j 8 I get the following error
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; make[2]: Entering directory `~openmpi-1.7.1/ompi/mpi/fortran/mpiext'
</span><br>
<span class="quotelev1">&gt;  PPFC     mpi-ext-module.lo
</span><br>
<span class="quotelev1">&gt;  PPFC     mpi-f08-ext-module.lo
</span><br>
<span class="quotelev1">&gt;  FCLD     libforce_usempi_module_to_be_built.la
</span><br>
<span class="quotelev1">&gt;  FCLD     libforce_usempif08_module_to_be_built.la
</span><br>
<span class="quotelev1">&gt; make[2]: Leaving directory `~openmpi-1.7.1/ompi/mpi/fortran/mpiext'
</span><br>
<span class="quotelev1">&gt; Making all in mca/common/ofacm
</span><br>
<span class="quotelev1">&gt; make[2]: Entering directory `~openmpi-1.7.1/ompi/mca/common/ofacm'
</span><br>
<span class="quotelev1">&gt;  CC       libmca_common_ofacm_la-common_ofacm_oob.lo
</span><br>
<span class="quotelev1">&gt;  CC       libmca_common_ofacm_la-common_ofacm_base.lo
</span><br>
<span class="quotelev1">&gt; if test -z &quot;libmca_common_ofacm.la&quot;; then \
</span><br>
<span class="quotelev1">&gt;          rm -f &quot;libmca_common_ofacm.la&quot;; \
</span><br>
<span class="quotelev1">&gt;          ln -s &quot;libmca_common_ofacm_noinst.la&quot; &quot;libmca_common_ofacm.la&quot;; \
</span><br>
<span class="quotelev1">&gt;        fi
</span><br>
<span class="quotelev1">&gt;  CC       libmca_common_ofacm_la-common_ofacm_empty.lo
</span><br>
<span class="quotelev1">&gt;  CC       libmca_common_ofacm_la-common_ofacm_xoob.lo
</span><br>
<span class="quotelev1">&gt; common_ofacm_xoob.c(158): error: identifier &quot;ompi_jobid_t&quot; is undefined
</span><br>
<span class="quotelev1">&gt;  static int xoob_ib_address_init(ofacm_ib_address_t *ib_addr, uint16_t lid, uint64_t s_id, ompi_jobid_t ep_jobid)
</span><br>
<span class="quotelev1">&gt;                                                                                            ^
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; compilation aborted for common_ofacm_xoob.c (code 2)
</span><br>
<span class="quotelev1">&gt; make[2]: *** [libmca_common_ofacm_la-common_ofacm_xoob.lo] Error 1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Note I get this even if I try and build without IB verbs. Googeling for help on this has turned up nothing, literally nothing.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Any suggestions?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks
</span><br>
<span class="quotelev1">&gt; Tim Dunn
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21751.php">Paul Kapinos: "Re: [OMPI users] OMPI v1.7.1 fails to build on RHEL 5 and RHEL 6"</a>
<li><strong>Previous message:</strong> <a href="21749.php">Timothy Dwight Dunn: "[OMPI users] OMPI v1.7.1 fails to build on RHEL 5 and RHEL 6"</a>
<li><strong>In reply to:</strong> <a href="21749.php">Timothy Dwight Dunn: "[OMPI users] OMPI v1.7.1 fails to build on RHEL 5 and RHEL 6"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21751.php">Paul Kapinos: "Re: [OMPI users] OMPI v1.7.1 fails to build on RHEL 5 and RHEL 6"</a>
<li><strong>Reply:</strong> <a href="21751.php">Paul Kapinos: "Re: [OMPI users] OMPI v1.7.1 fails to build on RHEL 5 and RHEL 6"</a>
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

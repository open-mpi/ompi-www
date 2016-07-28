<?
$subject_val = "Re: [OMPI users] OMPI v1.7.1 fails to build on RHEL 5 and RHEL 6";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Apr 18 07:30:16 2013" -->
<!-- isoreceived="20130418113016" -->
<!-- sent="Thu, 18 Apr 2013 13:30:09 +0200" -->
<!-- isosent="20130418113009" -->
<!-- name="Paul Kapinos" -->
<!-- email="kapinos_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OMPI v1.7.1 fails to build on RHEL 5 and RHEL 6" -->
<!-- id="516FD941.6070707_at_rz.rwth-aachen.de" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="526DE6BC-4A23-4B27-8415-9922101D1DD4_at_open-mpi.org" -->
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
<strong>From:</strong> Paul Kapinos (<em>kapinos_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-04-18 07:30:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21752.php">Shamis, Pavel: "Re: [OMPI users] OMPI v1.7.1 fails to build on RHEL 5 and RHEL 6"</a>
<li><strong>Previous message:</strong> <a href="21750.php">Ralph Castain: "Re: [OMPI users] OMPI v1.7.1 fails to build on RHEL 5 and RHEL 6"</a>
<li><strong>In reply to:</strong> <a href="21750.php">Ralph Castain: "Re: [OMPI users] OMPI v1.7.1 fails to build on RHEL 5 and RHEL 6"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21752.php">Shamis, Pavel: "Re: [OMPI users] OMPI v1.7.1 fails to build on RHEL 5 and RHEL 6"</a>
<li><strong>Reply:</strong> <a href="21752.php">Shamis, Pavel: "Re: [OMPI users] OMPI v1.7.1 fails to build on RHEL 5 and RHEL 6"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 04/17/13 23:37, Ralph Castain wrote:
<br>
<span class="quotelev1">&gt; Try adding --disable-openib-connectx-xrc to your configure line
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>That mean, the XRC issue is still not fixed, though this in the 1.7.1 announce?
<br>
<p><span class="quotelev1"> &gt; - Fixed XRC compile issue in Open Fabrics support.
</span><br>
<p><p><p><p><p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Apr 17, 2013, at 2:27 PM, Timothy Dwight Dunn &lt;Timothy.Dunn_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I have been trying to get the new v1.7.1 to build on a few different systems and I get the same error on every build attempted. While the builds are on 3 different clusters the are all using RHEL 5 or RHEL6 (6.3 not 6.4 as OFED is still not working for it yet)
</span><br>
<p>Get this, too:
<br>
<p>gmake[2]: Entering directory 
<br>
`/tmp/pk224850/linuxc2_10777/openmpi-1.7.1_linux64_intel/ompi/mca/common/ofacm'
<br>
&nbsp;&nbsp;&nbsp;CC       common_ofacm_xoob.lo
<br>
common_ofacm_xoob.c(158): error: identifier &quot;ompi_jobid_t&quot; is undefined
<br>
&nbsp;&nbsp;&nbsp;static int xoob_ib_address_init(ofacm_ib_address_t *ib_addr, uint16_t lid, 
<br>
uint64_t s_id, ompi_jobid_t ep_jobid)
<br>
&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;^
<br>
<p>common_ofacm_xoob.c(873): warning #188: enumerated type mixed with another type
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;enum ibv_mtu mtu = (context-&gt;attr[0].path_mtu &lt; 
<br>
context-&gt;remote_info.rem_mtu) ?
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;^
<br>
<p>common_ofacm_xoob.c(953): warning #188: enumerated type mixed with another type
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;enum ibv_mtu mtu = (context-&gt;attr[0].path_mtu &lt; remote_info-&gt;rem_mtu) ?
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;^
<br>
<p>compilation aborted for common_ofacm_xoob.c (code 2)
<br>
gmake[2]: *** [common_ofacm_xoob.lo] Error 1
<br>
<p><p><p><p><p><p><p><p><span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; While I have complex configs, even when I go down to a simple config using either gnu or Intel compilers such as;
</span><br>
<span class="quotelev2">&gt;&gt; export CC=icc
</span><br>
<span class="quotelev2">&gt;&gt; export CXX=icpc
</span><br>
<span class="quotelev2">&gt;&gt; export F77=ifort
</span><br>
<span class="quotelev2">&gt;&gt; export FC=ifort
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ./configure --prefix=~/openmpi-1.7.1 --with-tm=~/torque-2.5.11/ --with-verbs
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; (Note the ~ is just covering up my actual paths otherwise all is well)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; So this config's without problems but when I go to build with make all -j 8 I get the following error
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; make[2]: Entering directory `~openmpi-1.7.1/ompi/mpi/fortran/mpiext'
</span><br>
<span class="quotelev2">&gt;&gt;   PPFC     mpi-ext-module.lo
</span><br>
<span class="quotelev2">&gt;&gt;   PPFC     mpi-f08-ext-module.lo
</span><br>
<span class="quotelev2">&gt;&gt;   FCLD     libforce_usempi_module_to_be_built.la
</span><br>
<span class="quotelev2">&gt;&gt;   FCLD     libforce_usempif08_module_to_be_built.la
</span><br>
<span class="quotelev2">&gt;&gt; make[2]: Leaving directory `~openmpi-1.7.1/ompi/mpi/fortran/mpiext'
</span><br>
<span class="quotelev2">&gt;&gt; Making all in mca/common/ofacm
</span><br>
<span class="quotelev2">&gt;&gt; make[2]: Entering directory `~openmpi-1.7.1/ompi/mca/common/ofacm'
</span><br>
<span class="quotelev2">&gt;&gt;   CC       libmca_common_ofacm_la-common_ofacm_oob.lo
</span><br>
<span class="quotelev2">&gt;&gt;   CC       libmca_common_ofacm_la-common_ofacm_base.lo
</span><br>
<span class="quotelev2">&gt;&gt; if test -z &quot;libmca_common_ofacm.la&quot;; then \
</span><br>
<span class="quotelev2">&gt;&gt;           rm -f &quot;libmca_common_ofacm.la&quot;; \
</span><br>
<span class="quotelev2">&gt;&gt;           ln -s &quot;libmca_common_ofacm_noinst.la&quot; &quot;libmca_common_ofacm.la&quot;; \
</span><br>
<span class="quotelev2">&gt;&gt;         fi
</span><br>
<span class="quotelev2">&gt;&gt;   CC       libmca_common_ofacm_la-common_ofacm_empty.lo
</span><br>
<span class="quotelev2">&gt;&gt;   CC       libmca_common_ofacm_la-common_ofacm_xoob.lo
</span><br>
<span class="quotelev2">&gt;&gt; common_ofacm_xoob.c(158): error: identifier &quot;ompi_jobid_t&quot; is undefined
</span><br>
<span class="quotelev2">&gt;&gt;   static int xoob_ib_address_init(ofacm_ib_address_t *ib_addr, uint16_t lid, uint64_t s_id, ompi_jobid_t ep_jobid)
</span><br>
<span class="quotelev2">&gt;&gt;                                                                                             ^
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; compilation aborted for common_ofacm_xoob.c (code 2)
</span><br>
<span class="quotelev2">&gt;&gt; make[2]: *** [libmca_common_ofacm_la-common_ofacm_xoob.lo] Error 1
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Note I get this even if I try and build without IB verbs. Googeling for help on this has turned up nothing, literally nothing.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Any suggestions?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks
</span><br>
<span class="quotelev2">&gt;&gt; Tim Dunn
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
<span class="quotelev1">&gt;
</span><br>
<p><p><pre>
-- 
Dipl.-Inform. Paul Kapinos   -   High Performance Computing,
RWTH Aachen University, Center for Computing and Communication
Seffenter Weg 23,  D 52074  Aachen (Germany)
Tel: +49 241/80-24915

</pre>
<hr>
<ul>
<li>application/pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-21751/smime.p7s">S/MIME Cryptographic Signature</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21752.php">Shamis, Pavel: "Re: [OMPI users] OMPI v1.7.1 fails to build on RHEL 5 and RHEL 6"</a>
<li><strong>Previous message:</strong> <a href="21750.php">Ralph Castain: "Re: [OMPI users] OMPI v1.7.1 fails to build on RHEL 5 and RHEL 6"</a>
<li><strong>In reply to:</strong> <a href="21750.php">Ralph Castain: "Re: [OMPI users] OMPI v1.7.1 fails to build on RHEL 5 and RHEL 6"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21752.php">Shamis, Pavel: "Re: [OMPI users] OMPI v1.7.1 fails to build on RHEL 5 and RHEL 6"</a>
<li><strong>Reply:</strong> <a href="21752.php">Shamis, Pavel: "Re: [OMPI users] OMPI v1.7.1 fails to build on RHEL 5 and RHEL 6"</a>
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

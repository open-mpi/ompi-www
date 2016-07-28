<?
$subject_val = "Re: [OMPI users] OMPI v1.7.1 fails to build on RHEL 5 and RHEL 6";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Apr 18 10:41:40 2013" -->
<!-- isoreceived="20130418144140" -->
<!-- sent="Thu, 18 Apr 2013 10:41:34 -0400" -->
<!-- isosent="20130418144134" -->
<!-- name="Shamis, Pavel" -->
<!-- email="shamisp_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OMPI v1.7.1 fails to build on RHEL 5 and RHEL 6" -->
<!-- id="F1AA611D-4388-443D-92D8-8B1917CF460B_at_ornl.gov" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="516FD941.6070707_at_rz.rwth-aachen.de" -->
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
<strong>From:</strong> Shamis, Pavel (<em>shamisp_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-04-18 10:41:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21753.php">Ralph Castain: "Re: [OMPI users] OMPI v1.7.1 fails to build on RHEL 5 and RHEL 6"</a>
<li><strong>Previous message:</strong> <a href="21751.php">Paul Kapinos: "Re: [OMPI users] OMPI v1.7.1 fails to build on RHEL 5 and RHEL 6"</a>
<li><strong>In reply to:</strong> <a href="21751.php">Paul Kapinos: "Re: [OMPI users] OMPI v1.7.1 fails to build on RHEL 5 and RHEL 6"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21753.php">Ralph Castain: "Re: [OMPI users] OMPI v1.7.1 fails to build on RHEL 5 and RHEL 6"</a>
<li><strong>Reply:</strong> <a href="21753.php">Ralph Castain: "Re: [OMPI users] OMPI v1.7.1 fails to build on RHEL 5 and RHEL 6"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I was sure that this one was fixed as well.
<br>
<p>I think this is some other problem, which related to the combination of XRC + intel compiler.
<br>
Due to limited availability of the XRC system, I doubt the combination was tested.
<br>
<p>I'm trying to look at the issue, but first I have to find the setup...
<br>
<p>Pavel (Pasha) Shamis
<br>
<pre>
---
Computer Science Research Group
Computer Science and Math Division
Oak Ridge National Laboratory
On Apr 18, 2013, at 7:30 AM, Paul Kapinos &lt;kapinos_at_[hidden]&gt; wrote:
&gt; On 04/17/13 23:37, Ralph Castain wrote:
&gt;&gt; Try adding --disable-openib-connectx-xrc to your configure line
&gt;&gt; 
&gt; 
&gt; That mean, the XRC issue is still not fixed, though this in the 1.7.1 announce?
&gt; 
&gt;&gt; - Fixed XRC compile issue in Open Fabrics support.
&gt; 
&gt; 
&gt; 
&gt; 
&gt; 
&gt;&gt; 
&gt;&gt; On Apr 17, 2013, at 2:27 PM, Timothy Dwight Dunn &lt;Timothy.Dunn_at_[hidden]&gt; wrote:
&gt;&gt; 
&gt;&gt;&gt; I have been trying to get the new v1.7.1 to build on a few different systems and I get the same error on every build attempted. While the builds are on 3 different clusters the are all using RHEL 5 or RHEL6 (6.3 not 6.4 as OFED is still not working for it yet)
&gt; 
&gt; Get this, too:
&gt; 
&gt; gmake[2]: Entering directory 
&gt; `/tmp/pk224850/linuxc2_10777/openmpi-1.7.1_linux64_intel/ompi/mca/common/ofacm'
&gt;   CC       common_ofacm_xoob.lo
&gt; common_ofacm_xoob.c(158): error: identifier &quot;ompi_jobid_t&quot; is undefined
&gt;   static int xoob_ib_address_init(ofacm_ib_address_t *ib_addr, uint16_t lid, 
&gt; uint64_t s_id, ompi_jobid_t ep_jobid)
&gt; 
&gt;              ^
&gt; 
&gt; common_ofacm_xoob.c(873): warning #188: enumerated type mixed with another type
&gt;       enum ibv_mtu mtu = (context-&gt;attr[0].path_mtu &lt; 
&gt; context-&gt;remote_info.rem_mtu) ?
&gt;                          ^
&gt; 
&gt; common_ofacm_xoob.c(953): warning #188: enumerated type mixed with another type
&gt;       enum ibv_mtu mtu = (context-&gt;attr[0].path_mtu &lt; remote_info-&gt;rem_mtu) ?
&gt;                          ^
&gt; 
&gt; compilation aborted for common_ofacm_xoob.c (code 2)
&gt; gmake[2]: *** [common_ofacm_xoob.lo] Error 1
&gt; 
&gt; 
&gt; 
&gt; 
&gt; 
&gt; 
&gt; 
&gt; 
&gt;&gt;&gt; 
&gt;&gt;&gt; While I have complex configs, even when I go down to a simple config using either gnu or Intel compilers such as;
&gt;&gt;&gt; export CC=icc
&gt;&gt;&gt; export CXX=icpc
&gt;&gt;&gt; export F77=ifort
&gt;&gt;&gt; export FC=ifort
&gt;&gt;&gt; 
&gt;&gt;&gt; ./configure --prefix=~/openmpi-1.7.1 --with-tm=~/torque-2.5.11/ --with-verbs
&gt;&gt;&gt; 
&gt;&gt;&gt; (Note the ~ is just covering up my actual paths otherwise all is well)
&gt;&gt;&gt; 
&gt;&gt;&gt; So this config's without problems but when I go to build with make all -j 8 I get the following error
&gt;&gt;&gt; 
&gt;&gt;&gt; 
&gt;&gt;&gt; make[2]: Entering directory `~openmpi-1.7.1/ompi/mpi/fortran/mpiext'
&gt;&gt;&gt;  PPFC     mpi-ext-module.lo
&gt;&gt;&gt;  PPFC     mpi-f08-ext-module.lo
&gt;&gt;&gt;  FCLD     libforce_usempi_module_to_be_built.la
&gt;&gt;&gt;  FCLD     libforce_usempif08_module_to_be_built.la
&gt;&gt;&gt; make[2]: Leaving directory `~openmpi-1.7.1/ompi/mpi/fortran/mpiext'
&gt;&gt;&gt; Making all in mca/common/ofacm
&gt;&gt;&gt; make[2]: Entering directory `~openmpi-1.7.1/ompi/mca/common/ofacm'
&gt;&gt;&gt;  CC       libmca_common_ofacm_la-common_ofacm_oob.lo
&gt;&gt;&gt;  CC       libmca_common_ofacm_la-common_ofacm_base.lo
&gt;&gt;&gt; if test -z &quot;libmca_common_ofacm.la&quot;; then \
&gt;&gt;&gt;          rm -f &quot;libmca_common_ofacm.la&quot;; \
&gt;&gt;&gt;          ln -s &quot;libmca_common_ofacm_noinst.la&quot; &quot;libmca_common_ofacm.la&quot;; \
&gt;&gt;&gt;        fi
&gt;&gt;&gt;  CC       libmca_common_ofacm_la-common_ofacm_empty.lo
&gt;&gt;&gt;  CC       libmca_common_ofacm_la-common_ofacm_xoob.lo
&gt;&gt;&gt; common_ofacm_xoob.c(158): error: identifier &quot;ompi_jobid_t&quot; is undefined
&gt;&gt;&gt;  static int xoob_ib_address_init(ofacm_ib_address_t *ib_addr, uint16_t lid, uint64_t s_id, ompi_jobid_t ep_jobid)
&gt;&gt;&gt;                                                                                            ^
&gt;&gt;&gt; 
&gt;&gt;&gt; compilation aborted for common_ofacm_xoob.c (code 2)
&gt;&gt;&gt; make[2]: *** [libmca_common_ofacm_la-common_ofacm_xoob.lo] Error 1
&gt;&gt;&gt; 
&gt;&gt;&gt; 
&gt;&gt;&gt; 
&gt;&gt;&gt; Note I get this even if I try and build without IB verbs. Googeling for help on this has turned up nothing, literally nothing.
&gt;&gt;&gt; 
&gt;&gt;&gt; Any suggestions?
&gt;&gt;&gt; 
&gt;&gt;&gt; Thanks
&gt;&gt;&gt; Tim Dunn
&gt;&gt;&gt; 
&gt;&gt;&gt; 
&gt;&gt;&gt; _______________________________________________
&gt;&gt;&gt; users mailing list
&gt;&gt;&gt; users_at_[hidden]
&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt;&gt; 
&gt;&gt; 
&gt;&gt; _______________________________________________
&gt;&gt; users mailing list
&gt;&gt; users_at_[hidden]
&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt;&gt; 
&gt; 
&gt; 
&gt; -- 
&gt; Dipl.-Inform. Paul Kapinos   -   High Performance Computing,
&gt; RWTH Aachen University, Center for Computing and Communication
&gt; Seffenter Weg 23,  D 52074  Aachen (Germany)
&gt; Tel: +49 241/80-24915
&gt; 
&gt; &lt;smime.p7s&gt;_______________________________________________
&gt; users mailing list
&gt; users_at_[hidden]
&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21753.php">Ralph Castain: "Re: [OMPI users] OMPI v1.7.1 fails to build on RHEL 5 and RHEL 6"</a>
<li><strong>Previous message:</strong> <a href="21751.php">Paul Kapinos: "Re: [OMPI users] OMPI v1.7.1 fails to build on RHEL 5 and RHEL 6"</a>
<li><strong>In reply to:</strong> <a href="21751.php">Paul Kapinos: "Re: [OMPI users] OMPI v1.7.1 fails to build on RHEL 5 and RHEL 6"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21753.php">Ralph Castain: "Re: [OMPI users] OMPI v1.7.1 fails to build on RHEL 5 and RHEL 6"</a>
<li><strong>Reply:</strong> <a href="21753.php">Ralph Castain: "Re: [OMPI users] OMPI v1.7.1 fails to build on RHEL 5 and RHEL 6"</a>
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

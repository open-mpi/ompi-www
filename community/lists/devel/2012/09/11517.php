<?
$subject_val = "[OMPI devel] F90 build failures with XLF-14.1 and OMPI trunk";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Sep 13 17:33:21 2012" -->
<!-- isoreceived="20120913213321" -->
<!-- sent="Thu, 13 Sep 2012 14:33:10 -0700" -->
<!-- isosent="20120913213310" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="[OMPI devel] F90 build failures with XLF-14.1 and OMPI trunk" -->
<!-- id="CAAvDA15Vi9ZTF0vx2C6562+7oarvz+LTghDtvdKyo-ti9ASxFw_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI devel] F90 build failures with XLF-14.1 and OMPI trunk<br>
<strong>From:</strong> Paul Hargrove (<em>phhargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-09-13 17:33:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11518.php">Paul Hargrove: "Re: [OMPI devel] F90 build failures with XLF-14.1 and OMPI trunk"</a>
<li><strong>Previous message:</strong> <a href="11516.php">Paul Hargrove: "Re: [OMPI devel] 1.6.2rc3 released"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11518.php">Paul Hargrove: "Re: [OMPI devel] F90 build failures with XLF-14.1 and OMPI trunk"</a>
<li><strong>Reply:</strong> <a href="11518.php">Paul Hargrove: "Re: [OMPI devel] F90 build failures with XLF-14.1 and OMPI trunk"</a>
<li><strong>Reply:</strong> <a href="11519.php">Jeff Squyres: "Re: [OMPI devel] F90 build failures with XLF-14.1 and OMPI trunk"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I've just tried building the Open MPI Trunk on a PPC64/Linux node using the
<br>
May 2012 XL compilers from IBM (XLC-12.1 and XLF-14.1)
<br>
<p>While I CAN build the 1.6.2 rc's, a build of the trunk is failing in the
<br>
F90 bindings as shown at the end of this message.
<br>
While MOST errors are &quot;1513-230&quot;, note that the last 2 errors are
<br>
&quot;1520-031&quot;.
<br>
I am attaching the (gzip-compressed) config.status so you can see all the
<br>
fortran/c types detected by configure.
<br>
<p>Also the &quot;-_REENTRANT is not recognized&quot; warning looks like an indication
<br>
of a possible typo.
<br>
There are also warnings earlier in the build suggesting that the command
<br>
line options are not proper in other ways:
<br>
<p><span class="quotelev1">&gt;   PPFC     mpi-ignore-tkr.lo
</span><br>
<span class="quotelev1">&gt; /soft/compilers/ibmcmp-may2012/xlf/bg/14.1/bin/.orig/xlf90: 1501-214 (W)
</span><br>
<span class="quotelev1">&gt; command option M reserved for future use - ignored
</span><br>
<span class="quotelev1">&gt; /soft/compilers/ibmcmp-may2012/xlf/bg/14.1/bin/.orig/xlf90: 1501-257 (W)
</span><br>
<span class="quotelev1">&gt; Option P is not recognized.  Option will be ignored.
</span><br>
<span class="quotelev1">&gt; /soft/compilers/ibmcmp-may2012/xlf/bg/14.1/bin/.orig/xlf90: 1501-214 (W)
</span><br>
<span class="quotelev1">&gt; command option M reserved for future use - ignored
</span><br>
<span class="quotelev1">&gt; /soft/compilers/ibmcmp-may2012/xlf/bg/14.1/bin/.orig/xlf90: 1501-257 (W)
</span><br>
<span class="quotelev1">&gt; Option P is not recognized.  Option will be ignored.
</span><br>
<span class="quotelev1">&gt; /soft/compilers/ibmcmp-may2012/xlf/bg/14.1/bin/.orig/xlf90: 1501-216 (W)
</span><br>
<span class="quotelev1">&gt; command option -_REENTRANT is not recognized - passed to ld
</span><br>
<p><p>However, &quot;make V=1&quot; doesn't reveal anything that appears to me to
<br>
correspond to the options xlf90 is complaining about:
<br>
<p><span class="quotelev1">&gt; /bin/sh ../../../../libtool  --tag=FC   --mode=compile xlf90
</span><br>
<span class="quotelev1">&gt; -DHAVE_CONFIG_H -I.
</span><br>
<span class="quotelev1">&gt; -I/home/hargrove/SCRATCH/OMPI/openmpi-trunk-linux-ppc64-xlc-12.1/openmpi-trunk/ompi/mpi/fortran/use-mpi-ignore-tkr
</span><br>
<span class="quotelev1">&gt; -I../../../../opal/include -I../../../../orte/include
</span><br>
<span class="quotelev1">&gt; -I../../../../ompi/include
</span><br>
<span class="quotelev1">&gt; -I../../../../opal/mca/hwloc/hwloc142/hwloc/include/private/autogen
</span><br>
<span class="quotelev1">&gt; -I../../../../opal/mca/hwloc/hwloc142/hwloc/include/hwloc/autogen
</span><br>
<span class="quotelev1">&gt;  -DOMPI_PROFILE_LAYER=0 -DOMPI_COMPILING_FORTRAN_WRAPPERS=1
</span><br>
<span class="quotelev1">&gt; -I/home/hargrove/SCRATCH/OMPI/openmpi-trunk-linux-ppc64-xlc-12.1/openmpi-trunk
</span><br>
<span class="quotelev1">&gt; -I../../../..
</span><br>
<span class="quotelev1">&gt; -I/home/hargrove/SCRATCH/OMPI/openmpi-trunk-linux-ppc64-xlc-12.1/openmpi-trunk/opal/include
</span><br>
<span class="quotelev1">&gt; -I/home/hargrove/SCRATCH/OMPI/openmpi-trunk-linux-ppc64-xlc-12.1/openmpi-trunk/orte/include
</span><br>
<span class="quotelev1">&gt; -I/home/hargrove/SCRATCH/OMPI/openmpi-trunk-linux-ppc64-xlc-12.1/openmpi-trunk/ompi/include
</span><br>
<span class="quotelev1">&gt;  -D_REENTRANT
</span><br>
<span class="quotelev1">&gt; -I/home/hargrove/SCRATCH/OMPI/openmpi-trunk-linux-ppc64-xlc-12.1/openmpi-trunk/opal/mca/hwloc/hwloc142/hwloc/include
</span><br>
<span class="quotelev1">&gt; -I/home/hargrove/SCRATCH/OMPI/openmpi-trunk-linux-ppc64-xlc-12.1/BLD/opal/mca/hwloc/hwloc142/hwloc/include
</span><br>
<span class="quotelev1">&gt; -I/home/hargrove/SCRATCH/OMPI/openmpi-trunk-linux-ppc64-xlc-12.1/openmpi-trunk/opal/mca/event/libevent2019/libevent
</span><br>
<span class="quotelev1">&gt; -I/home/hargrove/SCRATCH/OMPI/openmpi-trunk-linux-ppc64-xlc-12.1/openmpi-trunk/opal/mca/event/libevent2019/libevent/include
</span><br>
<span class="quotelev1">&gt; -I/home/hargrove/SCRATCH/OMPI/openmpi-trunk-linux-ppc64-xlc-12.1/BLD/opal/mca/event/libevent2019/libevent/include
</span><br>
<span class="quotelev1">&gt;    -I/usr/include/infiniband -I/usr/include/infiniband
</span><br>
<span class="quotelev1">&gt; -I/usr/include/infiniband -I/usr/include/infiniband
</span><br>
<span class="quotelev1">&gt; -I/usr/include/infiniband  -I/usr/include/infiniband
</span><br>
<span class="quotelev1">&gt; -I../../../../ompi/include
</span><br>
<span class="quotelev1">&gt; -I/home/hargrove/SCRATCH/OMPI/openmpi-trunk-linux-ppc64-xlc-12.1/openmpi-trunk/ompi/include
</span><br>
<span class="quotelev1">&gt; -I../../../..
</span><br>
<span class="quotelev1">&gt; -I/home/hargrove/SCRATCH/OMPI/openmpi-trunk-linux-ppc64-xlc-12.1/openmpi-trunk
</span><br>
<span class="quotelev1">&gt;  -q64 -c -o mpi-ignore-tkr.lo
</span><br>
<span class="quotelev1">&gt; /home/hargrove/SCRATCH/OMPI/openmpi-trunk-linux-ppc64-xlc-12.1/openmpi-trunk/ompi/mpi/fortran/use-mpi-ignore-tkr/mpi-ignore-tkr.F90
</span><br>
<span class="quotelev1">&gt; libtool: compile:  xlf90 -DHAVE_CONFIG_H -I.
</span><br>
<span class="quotelev1">&gt; -I/home/hargrove/SCRATCH/OMPI/openmpi-trunk-linux-ppc64-xlc-12.1/openmpi-trunk/ompi/mpi/fortran/use-mpi-ignore-tkr
</span><br>
<span class="quotelev1">&gt; -I../../../../opal/include -I../../../../orte/include
</span><br>
<span class="quotelev1">&gt; -I../../../../ompi/include
</span><br>
<span class="quotelev1">&gt; -I../../../../opal/mca/hwloc/hwloc142/hwloc/include/private/autogen
</span><br>
<span class="quotelev1">&gt; -I../../../../opal/mca/hwloc/hwloc142/hwloc/include/hwloc/autogen
</span><br>
<span class="quotelev1">&gt; -DOMPI_PROFILE_LAYER=0 -DOMPI_COMPILING_FORTRAN_WRAPPERS=1
</span><br>
<span class="quotelev1">&gt; -I/home/hargrove/SCRATCH/OMPI/openmpi-trunk-linux-ppc64-xlc-12.1/openmpi-trunk
</span><br>
<span class="quotelev1">&gt; -I../../../..
</span><br>
<span class="quotelev1">&gt; -I/home/hargrove/SCRATCH/OMPI/openmpi-trunk-linux-ppc64-xlc-12.1/openmpi-trunk/opal/include
</span><br>
<span class="quotelev1">&gt; -I/home/hargrove/SCRATCH/OMPI/openmpi-trunk-linux-ppc64-xlc-12.1/openmpi-trunk/orte/include
</span><br>
<span class="quotelev1">&gt; -I/home/hargrove/SCRATCH/OMPI/openmpi-trunk-linux-ppc64-xlc-12.1/openmpi-trunk/ompi/include
</span><br>
<span class="quotelev1">&gt; -D_REENTRANT
</span><br>
<span class="quotelev1">&gt; -I/home/hargrove/SCRATCH/OMPI/openmpi-trunk-linux-ppc64-xlc-12.1/openmpi-trunk/opal/mca/hwloc/hwloc142/hwloc/include
</span><br>
<span class="quotelev1">&gt; -I/home/hargrove/SCRATCH/OMPI/openmpi-trunk-linux-ppc64-xlc-12.1/BLD/opal/mca/hwloc/hwloc142/hwloc/include
</span><br>
<span class="quotelev1">&gt; -I/home/hargrove/SCRATCH/OMPI/openmpi-trunk-linux-ppc64-xlc-12.1/openmpi-trunk/opal/mca/event/libevent2019/libevent
</span><br>
<span class="quotelev1">&gt; -I/home/hargrove/SCRATCH/OMPI/openmpi-trunk-linux-ppc64-xlc-12.1/openmpi-trunk/opal/mca/event/libevent2019/libevent/include
</span><br>
<span class="quotelev1">&gt; -I/home/hargrove/SCRATCH/OMPI/openmpi-trunk-linux-ppc64-xlc-12.1/BLD/opal/mca/event/libevent2019/libevent/include
</span><br>
<span class="quotelev1">&gt; -I/usr/include/infiniband -I/usr/include/infiniband
</span><br>
<span class="quotelev1">&gt; -I/usr/include/infiniband -I/usr/include/infiniband
</span><br>
<span class="quotelev1">&gt; -I/usr/include/infiniband -I/usr/include/infiniband
</span><br>
<span class="quotelev1">&gt; -I../../../../ompi/include
</span><br>
<span class="quotelev1">&gt; -I/home/hargrove/SCRATCH/OMPI/openmpi-trunk-linux-ppc64-xlc-12.1/openmpi-trunk/ompi/include
</span><br>
<span class="quotelev1">&gt; -I../../../..
</span><br>
<span class="quotelev1">&gt; -I/home/hargrove/SCRATCH/OMPI/openmpi-trunk-linux-ppc64-xlc-12.1/openmpi-trunk
</span><br>
<span class="quotelev1">&gt; -q64 -c
</span><br>
<span class="quotelev1">&gt; /home/hargrove/SCRATCH/OMPI/openmpi-trunk-linux-ppc64-xlc-12.1/openmpi-trunk/ompi/mpi/fortran/use-mpi-ignore-tkr/mpi-ignore-tkr.F90
</span><br>
<span class="quotelev1">&gt;  -qpic -o .libs/mpi-ignore-tkr.o
</span><br>
<p><p>-Paul
<br>
<p>The &quot;main&quot; error:
<br>
<p>&nbsp;&nbsp;PPFC     mpi-f08.lo
<br>
<span class="quotelev1">&gt; /soft/compilers/ibmcmp-may2012/xlf/bg/14.1/bin/.orig/xlf90: 1501-216 (W)
</span><br>
<span class="quotelev1">&gt; command option -_REENTRANT is not recognized - passed to ld
</span><br>
<span class="quotelev1">&gt; &quot;/home/hargrove/SCRATCH/OMPI/openmpi-trunk-linux-ppc64-xlc-12.1/openmpi-trunk/ompi/mpi/fortran/use-mpi-f08/mpi-f-interfaces-bind.h&quot;,
</span><br>
<span class="quotelev1">&gt; line 91.28: 1513-230 (S) Procedure ompi_iprobe_f was declared with the
</span><br>
<span class="quotelev1">&gt; BIND(C) attribute.  Dummy argument flag of ompi_iprobe_f must have
</span><br>
<span class="quotelev1">&gt; interoperable type and type parameters.
</span><br>
<span class="quotelev1">&gt; &quot;/home/hargrove/SCRATCH/OMPI/openmpi-trunk-linux-ppc64-xlc-12.1/openmpi-trunk/ompi/mpi/fortran/use-mpi-f08/mpi-f-interfaces-bind.h&quot;,
</span><br>
<span class="quotelev1">&gt; line 185.28: 1513-230 (S) Procedure ompi_request_get_status_f was declared
</span><br>
<span class="quotelev1">&gt; with the BIND(C) attribute.  Dummy argument flag of
</span><br>
<span class="quotelev1">&gt; ompi_request_get_status_f must have interoperable type and type parameters.
</span><br>
<span class="quotelev1">&gt; &quot;/home/hargrove/SCRATCH/OMPI/openmpi-trunk-linux-ppc64-xlc-12.1/openmpi-trunk/ompi/mpi/fortran/use-mpi-f08/mpi-f-interfaces-bind.h&quot;,
</span><br>
<span class="quotelev1">&gt; line 301.28: 1513-230 (S) Procedure ompi_test_f was declared with the
</span><br>
<span class="quotelev1">&gt; BIND(C) attribute.  Dummy argument flag of ompi_test_f must have
</span><br>
<span class="quotelev1">&gt; interoperable type and type parameters.
</span><br>
<span class="quotelev1">&gt; &quot;/home/hargrove/SCRATCH/OMPI/openmpi-trunk-linux-ppc64-xlc-12.1/openmpi-trunk/ompi/mpi/fortran/use-mpi-f08/mpi-f-interfaces-bind.h&quot;,
</span><br>
<span class="quotelev1">&gt; line 312.28: 1513-230 (S) Procedure ompi_testall_f was declared with the
</span><br>
<span class="quotelev1">&gt; BIND(C) attribute.  Dummy argument flag of ompi_testall_f must have
</span><br>
<span class="quotelev1">&gt; interoperable type and type parameters.
</span><br>
<span class="quotelev1">&gt; &quot;/home/hargrove/SCRATCH/OMPI/openmpi-trunk-linux-ppc64-xlc-12.1/openmpi-trunk/ompi/mpi/fortran/use-mpi-f08/mpi-f-interfaces-bind.h&quot;,
</span><br>
<span class="quotelev1">&gt; line 324.28: 1513-230 (S) Procedure ompi_testany_f was declared with the
</span><br>
<span class="quotelev1">&gt; BIND(C) attribute.  Dummy argument flag of ompi_testany_f must have
</span><br>
<span class="quotelev1">&gt; interoperable type and type parameters.
</span><br>
<span class="quotelev1">&gt; &quot;/home/hargrove/SCRATCH/OMPI/openmpi-trunk-linux-ppc64-xlc-12.1/openmpi-trunk/ompi/mpi/fortran/use-mpi-f08/mpi-f-interfaces-bind.h&quot;,
</span><br>
<span class="quotelev1">&gt; line 347.28: 1513-230 (S) Procedure ompi_test_cancelled_f was declared with
</span><br>
<span class="quotelev1">&gt; the BIND(C) attribute.  Dummy argument flag of ompi_test_cancelled_f must
</span><br>
<span class="quotelev1">&gt; have interoperable type and type parameters.
</span><br>
<span class="quotelev1">&gt; &quot;/home/hargrove/SCRATCH/OMPI/openmpi-trunk-linux-ppc64-xlc-12.1/openmpi-trunk/ompi/mpi/fortran/use-mpi-f08/mpi-f-interfaces-bind.h&quot;,
</span><br>
<span class="quotelev1">&gt; line 951.28: 1513-230 (S) Procedure ompi_op_commutative_f was declared with
</span><br>
<span class="quotelev1">&gt; the BIND(C) attribute.  Dummy argument commute of ompi_op_commutative_f
</span><br>
<span class="quotelev1">&gt; must have interoperable type and type parameters.
</span><br>
<span class="quotelev1">&gt; &quot;/home/hargrove/SCRATCH/OMPI/openmpi-trunk-linux-ppc64-xlc-12.1/openmpi-trunk/ompi/mpi/fortran/use-mpi-f08/mpi-f-interfaces-bind.h&quot;,
</span><br>
<span class="quotelev1">&gt; line 960.27: 1513-230 (S) Procedure ompi_op_create_f was declared with the
</span><br>
<span class="quotelev1">&gt; BIND(C) attribute.  Dummy argument commute of ompi_op_create_f must have
</span><br>
<span class="quotelev1">&gt; interoperable type and type parameters.
</span><br>
<span class="quotelev1">&gt; &quot;/home/hargrove/SCRATCH/OMPI/openmpi-trunk-linux-ppc64-xlc-12.1/openmpi-trunk/ompi/mpi/fortran/use-mpi-f08/mpi-f-interfaces-bind.h&quot;,
</span><br>
<span class="quotelev1">&gt; line 1199.28: 1513-230 (S) Procedure ompi_comm_get_attr_f was declared with
</span><br>
<span class="quotelev1">&gt; the BIND(C) attribute.  Dummy argument flag of ompi_comm_get_attr_f must
</span><br>
<span class="quotelev1">&gt; have interoperable type and type parameters.
</span><br>
<span class="quotelev1">&gt; &quot;/home/hargrove/SCRATCH/OMPI/openmpi-trunk-linux-ppc64-xlc-12.1/openmpi-trunk/ompi/mpi/fortran/use-mpi-f08/mpi-f-interfaces-bind.h&quot;,
</span><br>
<span class="quotelev1">&gt; line 1287.28: 1513-230 (S) Procedure ompi_comm_test_inter_f was declared
</span><br>
<span class="quotelev1">&gt; with the BIND(C) attribute.  Dummy argument flag of ompi_comm_test_inter_f
</span><br>
<span class="quotelev1">&gt; must have interoperable type and type parameters.
</span><br>
<span class="quotelev1">&gt; &quot;/home/hargrove/SCRATCH/OMPI/openmpi-trunk-linux-ppc64-xlc-12.1/openmpi-trunk/ompi/mpi/fortran/use-mpi-f08/mpi-f-interfaces-bind.h&quot;,
</span><br>
<span class="quotelev1">&gt; line 1413.27: 1513-230 (S) Procedure ompi_intercomm_merge_f was declared
</span><br>
<span class="quotelev1">&gt; with the BIND(C) attribute.  Dummy argument high of ompi_intercomm_merge_f
</span><br>
<span class="quotelev1">&gt; must have interoperable type and type parameters.
</span><br>
<span class="quotelev1">&gt; &quot;/home/hargrove/SCRATCH/OMPI/openmpi-trunk-linux-ppc64-xlc-12.1/openmpi-trunk/ompi/mpi/fortran/use-mpi-f08/mpi-f-interfaces-bind.h&quot;,
</span><br>
<span class="quotelev1">&gt; line 1454.28: 1513-230 (S) Procedure ompi_type_get_attr_f was declared with
</span><br>
<span class="quotelev1">&gt; the BIND(C) attribute.  Dummy argument flag of ompi_type_get_attr_f must
</span><br>
<span class="quotelev1">&gt; have interoperable type and type parameters.
</span><br>
<span class="quotelev1">&gt; &quot;/home/hargrove/SCRATCH/OMPI/openmpi-trunk-linux-ppc64-xlc-12.1/openmpi-trunk/ompi/mpi/fortran/use-mpi-f08/mpi-f-interfaces-bind.h&quot;,
</span><br>
<span class="quotelev1">&gt; line 1525.28: 1513-230 (S) Procedure ompi_win_get_attr_f was declared with
</span><br>
<span class="quotelev1">&gt; the BIND(C) attribute.  Dummy argument flag of ompi_win_get_attr_f must
</span><br>
<span class="quotelev1">&gt; have interoperable type and type parameters.
</span><br>
<span class="quotelev1">&gt; &quot;/home/hargrove/SCRATCH/OMPI/openmpi-trunk-linux-ppc64-xlc-12.1/openmpi-trunk/ompi/mpi/fortran/use-mpi-f08/mpi-f-interfaces-bind.h&quot;,
</span><br>
<span class="quotelev1">&gt; line 1583.27: 1513-230 (S) Procedure ompi_cart_create_f was declared with
</span><br>
<span class="quotelev1">&gt; the BIND(C) attribute.  Dummy argument periods of ompi_cart_create_f must
</span><br>
<span class="quotelev1">&gt; have interoperable type and type parameters.
</span><br>
<span class="quotelev1">&gt; &quot;/home/hargrove/SCRATCH/OMPI/openmpi-trunk-linux-ppc64-xlc-12.1/openmpi-trunk/ompi/mpi/fortran/use-mpi-f08/mpi-f-interfaces-bind.h&quot;,
</span><br>
<span class="quotelev1">&gt; line 1583.43: 1513-230 (S) Procedure ompi_cart_create_f was declared with
</span><br>
<span class="quotelev1">&gt; the BIND(C) attribute.  Dummy argument reorder of ompi_cart_create_f must
</span><br>
<span class="quotelev1">&gt; have interoperable type and type parameters.
</span><br>
<span class="quotelev1">&gt; &quot;/home/hargrove/SCRATCH/OMPI/openmpi-trunk-linux-ppc64-xlc-12.1/openmpi-trunk/ompi/mpi/fortran/use-mpi-f08/mpi-f-interfaces-bind.h&quot;,
</span><br>
<span class="quotelev1">&gt; line 1594.28: 1513-230 (S) Procedure ompi_cart_get_f was declared with the
</span><br>
<span class="quotelev1">&gt; BIND(C) attribute.  Dummy argument periods of ompi_cart_get_f must have
</span><br>
<span class="quotelev1">&gt; interoperable type and type parameters.
</span><br>
<span class="quotelev1">&gt; &quot;/home/hargrove/SCRATCH/OMPI/openmpi-trunk-linux-ppc64-xlc-12.1/openmpi-trunk/ompi/mpi/fortran/use-mpi-f08/mpi-f-interfaces-bind.h&quot;,
</span><br>
<span class="quotelev1">&gt; line 1603.27: 1513-230 (S) Procedure ompi_cart_map_f was declared with the
</span><br>
<span class="quotelev1">&gt; BIND(C) attribute.  Dummy argument periods of ompi_cart_map_f must have
</span><br>
<span class="quotelev1">&gt; interoperable type and type parameters.
</span><br>
<span class="quotelev1">&gt; &quot;/home/hargrove/SCRATCH/OMPI/openmpi-trunk-linux-ppc64-xlc-12.1/openmpi-trunk/ompi/mpi/fortran/use-mpi-f08/mpi-f-interfaces-bind.h&quot;,
</span><br>
<span class="quotelev1">&gt; line 1630.27: 1513-230 (S) Procedure ompi_cart_sub_f was declared with the
</span><br>
<span class="quotelev1">&gt; BIND(C) attribute.  Dummy argument remain_dims of ompi_cart_sub_f must have
</span><br>
<span class="quotelev1">&gt; interoperable type and type parameters.
</span><br>
<span class="quotelev1">&gt; &quot;/home/hargrove/SCRATCH/OMPI/openmpi-trunk-linux-ppc64-xlc-12.1/openmpi-trunk/ompi/mpi/fortran/use-mpi-f08/mpi-f-interfaces-bind.h&quot;,
</span><br>
<span class="quotelev1">&gt; line 1651.27: 1513-230 (S) Procedure ompi_dist_graph_create_f was declared
</span><br>
<span class="quotelev1">&gt; with the BIND(C) attribute.  Dummy argument reorder of
</span><br>
<span class="quotelev1">&gt; ompi_dist_graph_create_f must have interoperable type and type parameters.
</span><br>
<span class="quotelev1">&gt; &quot;/home/hargrove/SCRATCH/OMPI/openmpi-trunk-linux-ppc64-xlc-12.1/openmpi-trunk/ompi/mpi/fortran/use-mpi-f08/mpi-f-interfaces-bind.h&quot;,
</span><br>
<span class="quotelev1">&gt; line 1666.27: 1513-230 (S) Procedure ompi_dist_graph_create_adjacent_f was
</span><br>
<span class="quotelev1">&gt; declared with the BIND(C) attribute.  Dummy argument reorder of
</span><br>
<span class="quotelev1">&gt; ompi_dist_graph_create_adjacent_f must have interoperable type and type
</span><br>
<span class="quotelev1">&gt; parameters.
</span><br>
<span class="quotelev1">&gt; &quot;/home/hargrove/SCRATCH/OMPI/openmpi-trunk-linux-ppc64-xlc-12.1/openmpi-trunk/ompi/mpi/fortran/use-mpi-f08/mpi-f-interfaces-bind.h&quot;,
</span><br>
<span class="quotelev1">&gt; line 1688.28: 1513-230 (S) Procedure ompi_dist_graph_neighbors_count_f was
</span><br>
<span class="quotelev1">&gt; declared with the BIND(C) attribute.  Dummy argument weighted of
</span><br>
<span class="quotelev1">&gt; ompi_dist_graph_neighbors_count_f must have interoperable type and type
</span><br>
<span class="quotelev1">&gt; parameters.
</span><br>
<span class="quotelev1">&gt; &quot;/home/hargrove/SCRATCH/OMPI/openmpi-trunk-linux-ppc64-xlc-12.1/openmpi-trunk/ompi/mpi/fortran/use-mpi-f08/mpi-f-interfaces-bind.h&quot;,
</span><br>
<span class="quotelev1">&gt; line 1707.27: 1513-230 (S) Procedure ompi_graph_create_f was declared with
</span><br>
<span class="quotelev1">&gt; the BIND(C) attribute.  Dummy argument reorder of ompi_graph_create_f must
</span><br>
<span class="quotelev1">&gt; have interoperable type and type parameters.
</span><br>
<span class="quotelev1">&gt; &quot;/home/hargrove/SCRATCH/OMPI/openmpi-trunk-linux-ppc64-xlc-12.1/openmpi-trunk/ompi/mpi/fortran/use-mpi-f08/mpi-f-interfaces-bind.h&quot;,
</span><br>
<span class="quotelev1">&gt; line 1915.28: 1513-230 (S) Procedure ompi_finalized_f was declared with the
</span><br>
<span class="quotelev1">&gt; BIND(C) attribute.  Dummy argument flag of ompi_finalized_f must have
</span><br>
<span class="quotelev1">&gt; interoperable type and type parameters.
</span><br>
<span class="quotelev1">&gt; &quot;/home/hargrove/SCRATCH/OMPI/openmpi-trunk-linux-ppc64-xlc-12.1/openmpi-trunk/ompi/mpi/fortran/use-mpi-f08/mpi-f-interfaces-bind.h&quot;,
</span><br>
<span class="quotelev1">&gt; line 1953.28: 1513-230 (S) Procedure ompi_initialized_f was declared with
</span><br>
<span class="quotelev1">&gt; the BIND(C) attribute.  Dummy argument flag of ompi_initialized_f must have
</span><br>
<span class="quotelev1">&gt; interoperable type and type parameters.
</span><br>
<span class="quotelev1">&gt; &quot;/home/hargrove/SCRATCH/OMPI/openmpi-trunk-linux-ppc64-xlc-12.1/openmpi-trunk/ompi/mpi/fortran/use-mpi-f08/mpi-f-interfaces-bind.h&quot;,
</span><br>
<span class="quotelev1">&gt; line 2030.28: 1513-230 (S) Procedure ompi_info_get_f was declared with the
</span><br>
<span class="quotelev1">&gt; BIND(C) attribute.  Dummy argument flag of ompi_info_get_f must have
</span><br>
<span class="quotelev1">&gt; interoperable type and type parameters.
</span><br>
<span class="quotelev1">&gt; &quot;/home/hargrove/SCRATCH/OMPI/openmpi-trunk-linux-ppc64-xlc-12.1/openmpi-trunk/ompi/mpi/fortran/use-mpi-f08/mpi-f-interfaces-bind.h&quot;,
</span><br>
<span class="quotelev1">&gt; line 2061.28: 1513-230 (S) Procedure ompi_info_get_valuelen_f was declared
</span><br>
<span class="quotelev1">&gt; with the BIND(C) attribute.  Dummy argument flag of
</span><br>
<span class="quotelev1">&gt; ompi_info_get_valuelen_f must have interoperable type and type parameters.
</span><br>
<span class="quotelev1">&gt; &quot;/home/hargrove/SCRATCH/OMPI/openmpi-trunk-linux-ppc64-xlc-12.1/openmpi-trunk/ompi/mpi/fortran/use-mpi-f08/mpi-f-interfaces-bind.h&quot;,
</span><br>
<span class="quotelev1">&gt; line 2326.28: 1513-230 (S) Procedure ompi_win_test_f was declared with the
</span><br>
<span class="quotelev1">&gt; BIND(C) attribute.  Dummy argument flag of ompi_win_test_f must have
</span><br>
<span class="quotelev1">&gt; interoperable type and type parameters.
</span><br>
<span class="quotelev1">&gt; &quot;/home/hargrove/SCRATCH/OMPI/openmpi-trunk-linux-ppc64-xlc-12.1/openmpi-trunk/ompi/mpi/fortran/use-mpi-f08/mpi-f-interfaces-bind.h&quot;,
</span><br>
<span class="quotelev1">&gt; line 2380.28: 1513-230 (S) Procedure ompi_is_thread_main_f was declared
</span><br>
<span class="quotelev1">&gt; with the BIND(C) attribute.  Dummy argument flag of ompi_is_thread_main_f
</span><br>
<span class="quotelev1">&gt; must have interoperable type and type parameters.
</span><br>
<span class="quotelev1">&gt; &quot;/home/hargrove/SCRATCH/OMPI/openmpi-trunk-linux-ppc64-xlc-12.1/openmpi-trunk/ompi/mpi/fortran/use-mpi-f08/mpi-f-interfaces-bind.h&quot;,
</span><br>
<span class="quotelev1">&gt; line 2396.28: 1513-230 (S) Procedure ompi_status_set_cancelled_f was
</span><br>
<span class="quotelev1">&gt; declared with the BIND(C) attribute.  Dummy argument flag of
</span><br>
<span class="quotelev1">&gt; ompi_status_set_cancelled_f must have interoperable type and type
</span><br>
<span class="quotelev1">&gt; parameters.
</span><br>
<span class="quotelev1">&gt; &quot;/home/hargrove/SCRATCH/OMPI/openmpi-trunk-linux-ppc64-xlc-12.1/openmpi-trunk/ompi/mpi/fortran/use-mpi-f08/mpi-f-interfaces-bind.h&quot;,
</span><br>
<span class="quotelev1">&gt; line 2439.28: 1513-230 (S) Procedure ompi_file_get_atomicity_f was declared
</span><br>
<span class="quotelev1">&gt; with the BIND(C) attribute.  Dummy argument flag of
</span><br>
<span class="quotelev1">&gt; ompi_file_get_atomicity_f must have interoperable type and type parameters.
</span><br>
<span class="quotelev1">&gt; &quot;/home/hargrove/SCRATCH/OMPI/openmpi-trunk-linux-ppc64-xlc-12.1/openmpi-trunk/ompi/mpi/fortran/use-mpi-f08/mpi-f-interfaces-bind.h&quot;,
</span><br>
<span class="quotelev1">&gt; line 2772.27: 1513-230 (S) Procedure ompi_file_set_atomicity_f was declared
</span><br>
<span class="quotelev1">&gt; with the BIND(C) attribute.  Dummy argument flag of
</span><br>
<span class="quotelev1">&gt; ompi_file_set_atomicity_f must have interoperable type and type parameters.
</span><br>
<span class="quotelev1">&gt; &quot;/home/hargrove/SCRATCH/OMPI/openmpi-trunk-linux-ppc64-xlc-12.1/openmpi-trunk/ompi/mpi/fortran/use-mpi-f08/mpi-f-interfaces-bind.h&quot;,
</span><br>
<span class="quotelev1">&gt; line 3068.28: 1513-230 (S) Procedure ompi_improbe_f was declared with the
</span><br>
<span class="quotelev1">&gt; BIND(C) attribute.  Dummy argument flag of ompi_improbe_f must have
</span><br>
<span class="quotelev1">&gt; interoperable type and type parameters.
</span><br>
<span class="quotelev1">&gt; &quot;/home/hargrove/SCRATCH/OMPI/openmpi-trunk-linux-ppc64-xlc-12.1/openmpi-trunk/ompi/mpi/fortran/use-mpi-f08/pmpi-f-interfaces-bind.h&quot;,
</span><br>
<span class="quotelev1">&gt; line 91.28: 1513-230 (S) Procedure pompi_iprobe_f was declared with the
</span><br>
<span class="quotelev1">&gt; BIND(C) attribute.  Dummy argument flag of pompi_iprobe_f must have
</span><br>
<span class="quotelev1">&gt; interoperable type and type parameters.
</span><br>
<span class="quotelev1">&gt; &quot;/home/hargrove/SCRATCH/OMPI/openmpi-trunk-linux-ppc64-xlc-12.1/openmpi-trunk/ompi/mpi/fortran/use-mpi-f08/pmpi-f-interfaces-bind.h&quot;,
</span><br>
<span class="quotelev1">&gt; line 185.28: 1513-230 (S) Procedure pompi_request_get_status_f was declared
</span><br>
<span class="quotelev1">&gt; with the BIND(C) attribute.  Dummy argument flag of
</span><br>
<span class="quotelev1">&gt; pompi_request_get_status_f must have interoperable type and type parameters.
</span><br>
<span class="quotelev1">&gt; &quot;/home/hargrove/SCRATCH/OMPI/openmpi-trunk-linux-ppc64-xlc-12.1/openmpi-trunk/ompi/mpi/fortran/use-mpi-f08/pmpi-f-interfaces-bind.h&quot;,
</span><br>
<span class="quotelev1">&gt; line 301.28: 1513-230 (S) Procedure pompi_test_f was declared with the
</span><br>
<span class="quotelev1">&gt; BIND(C) attribute.  Dummy argument flag of pompi_test_f must have
</span><br>
<span class="quotelev1">&gt; interoperable type and type parameters.
</span><br>
<span class="quotelev1">&gt; &quot;/home/hargrove/SCRATCH/OMPI/openmpi-trunk-linux-ppc64-xlc-12.1/openmpi-trunk/ompi/mpi/fortran/use-mpi-f08/pmpi-f-interfaces-bind.h&quot;,
</span><br>
<span class="quotelev1">&gt; line 312.28: 1513-230 (S) Procedure pompi_testall_f was declared with the
</span><br>
<span class="quotelev1">&gt; BIND(C) attribute.  Dummy argument flag of pompi_testall_f must have
</span><br>
<span class="quotelev1">&gt; interoperable type and type parameters.
</span><br>
<span class="quotelev1">&gt; &quot;/home/hargrove/SCRATCH/OMPI/openmpi-trunk-linux-ppc64-xlc-12.1/openmpi-trunk/ompi/mpi/fortran/use-mpi-f08/pmpi-f-interfaces-bind.h&quot;,
</span><br>
<span class="quotelev1">&gt; line 324.28: 1513-230 (S) Procedure pompi_testany_f was declared with the
</span><br>
<span class="quotelev1">&gt; BIND(C) attribute.  Dummy argument flag of pompi_testany_f must have
</span><br>
<span class="quotelev1">&gt; interoperable type and type parameters.
</span><br>
<span class="quotelev1">&gt; &quot;/home/hargrove/SCRATCH/OMPI/openmpi-trunk-linux-ppc64-xlc-12.1/openmpi-trunk/ompi/mpi/fortran/use-mpi-f08/pmpi-f-interfaces-bind.h&quot;,
</span><br>
<span class="quotelev1">&gt; line 347.28: 1513-230 (S) Procedure pompi_test_cancelled_f was declared
</span><br>
<span class="quotelev1">&gt; with the BIND(C) attribute.  Dummy argument flag of pompi_test_cancelled_f
</span><br>
<span class="quotelev1">&gt; must have interoperable type and type parameters.
</span><br>
<span class="quotelev1">&gt; &quot;/home/hargrove/SCRATCH/OMPI/openmpi-trunk-linux-ppc64-xlc-12.1/openmpi-trunk/ompi/mpi/fortran/use-mpi-f08/pmpi-f-interfaces-bind.h&quot;,
</span><br>
<span class="quotelev1">&gt; line 951.28: 1513-230 (S) Procedure pompi_op_commutative_f was declared
</span><br>
<span class="quotelev1">&gt; with the BIND(C) attribute.  Dummy argument commute of
</span><br>
<span class="quotelev1">&gt; pompi_op_commutative_f must have interoperable type and type parameters.
</span><br>
<span class="quotelev1">&gt; &quot;/home/hargrove/SCRATCH/OMPI/openmpi-trunk-linux-ppc64-xlc-12.1/openmpi-trunk/ompi/mpi/fortran/use-mpi-f08/pmpi-f-interfaces-bind.h&quot;,
</span><br>
<span class="quotelev1">&gt; line 960.27: 1513-230 (S) Procedure pompi_op_create_f was declared with the
</span><br>
<span class="quotelev1">&gt; BIND(C) attribute.  Dummy argument commute of pompi_op_create_f must have
</span><br>
<span class="quotelev1">&gt; interoperable type and type parameters.
</span><br>
<span class="quotelev1">&gt; &quot;/home/hargrove/SCRATCH/OMPI/openmpi-trunk-linux-ppc64-xlc-12.1/openmpi-trunk/ompi/mpi/fortran/use-mpi-f08/pmpi-f-interfaces-bind.h&quot;,
</span><br>
<span class="quotelev1">&gt; line 1199.28: 1513-230 (S) Procedure pompi_comm_get_attr_f was declared
</span><br>
<span class="quotelev1">&gt; with the BIND(C) attribute.  Dummy argument flag of pompi_comm_get_attr_f
</span><br>
<span class="quotelev1">&gt; must have interoperable type and type parameters.
</span><br>
<span class="quotelev1">&gt; &quot;/home/hargrove/SCRATCH/OMPI/openmpi-trunk-linux-ppc64-xlc-12.1/openmpi-trunk/ompi/mpi/fortran/use-mpi-f08/pmpi-f-interfaces-bind.h&quot;,
</span><br>
<span class="quotelev1">&gt; line 1287.28: 1513-230 (S) Procedure pompi_comm_test_inter_f was declared
</span><br>
<span class="quotelev1">&gt; with the BIND(C) attribute.  Dummy argument flag of pompi_comm_test_inter_f
</span><br>
<span class="quotelev1">&gt; must have interoperable type and type parameters.
</span><br>
<span class="quotelev1">&gt; &quot;/home/hargrove/SCRATCH/OMPI/openmpi-trunk-linux-ppc64-xlc-12.1/openmpi-trunk/ompi/mpi/fortran/use-mpi-f08/pmpi-f-interfaces-bind.h&quot;,
</span><br>
<span class="quotelev1">&gt; line 1413.27: 1513-230 (S) Procedure pompi_intercomm_merge_f was declared
</span><br>
<span class="quotelev1">&gt; with the BIND(C) attribute.  Dummy argument high of pompi_intercomm_merge_f
</span><br>
<span class="quotelev1">&gt; must have interoperable type and type parameters.
</span><br>
<span class="quotelev1">&gt; &quot;/home/hargrove/SCRATCH/OMPI/openmpi-trunk-linux-ppc64-xlc-12.1/openmpi-trunk/ompi/mpi/fortran/use-mpi-f08/pmpi-f-interfaces-bind.h&quot;,
</span><br>
<span class="quotelev1">&gt; line 1454.28: 1513-230 (S) Procedure pompi_type_get_attr_f was declared
</span><br>
<span class="quotelev1">&gt; with the BIND(C) attribute.  Dummy argument flag of pompi_type_get_attr_f
</span><br>
<span class="quotelev1">&gt; must have interoperable type and type parameters.
</span><br>
<span class="quotelev1">&gt; &quot;/home/hargrove/SCRATCH/OMPI/openmpi-trunk-linux-ppc64-xlc-12.1/openmpi-trunk/ompi/mpi/fortran/use-mpi-f08/pmpi-f-interfaces-bind.h&quot;,
</span><br>
<span class="quotelev1">&gt; line 1525.28: 1513-230 (S) Procedure pompi_win_get_attr_f was declared with
</span><br>
<span class="quotelev1">&gt; the BIND(C) attribute.  Dummy argument flag of pompi_win_get_attr_f must
</span><br>
<span class="quotelev1">&gt; have interoperable type and type parameters.
</span><br>
<span class="quotelev1">&gt; &quot;/home/hargrove/SCRATCH/OMPI/openmpi-trunk-linux-ppc64-xlc-12.1/openmpi-trunk/ompi/mpi/fortran/use-mpi-f08/pmpi-f-interfaces-bind.h&quot;,
</span><br>
<span class="quotelev1">&gt; line 1583.27: 1513-230 (S) Procedure pompi_cart_create_f was declared with
</span><br>
<span class="quotelev1">&gt; the BIND(C) attribute.  Dummy argument periods of pompi_cart_create_f must
</span><br>
<span class="quotelev1">&gt; have interoperable type and type parameters.
</span><br>
<span class="quotelev1">&gt; &quot;/home/hargrove/SCRATCH/OMPI/openmpi-trunk-linux-ppc64-xlc-12.1/openmpi-trunk/ompi/mpi/fortran/use-mpi-f08/pmpi-f-interfaces-bind.h&quot;,
</span><br>
<span class="quotelev1">&gt; line 1583.43: 1513-230 (S) Procedure pompi_cart_create_f was declared with
</span><br>
<span class="quotelev1">&gt; the BIND(C) attribute.  Dummy argument reorder of pompi_cart_create_f must
</span><br>
<span class="quotelev1">&gt; have interoperable type and type parameters.
</span><br>
<span class="quotelev1">&gt; &quot;/home/hargrove/SCRATCH/OMPI/openmpi-trunk-linux-ppc64-xlc-12.1/openmpi-trunk/ompi/mpi/fortran/use-mpi-f08/pmpi-f-interfaces-bind.h&quot;,
</span><br>
<span class="quotelev1">&gt; line 1594.28: 1513-230 (S) Procedure pompi_cart_get_f was declared with the
</span><br>
<span class="quotelev1">&gt; BIND(C) attribute.  Dummy argument periods of pompi_cart_get_f must have
</span><br>
<span class="quotelev1">&gt; interoperable type and type parameters.
</span><br>
<span class="quotelev1">&gt; &quot;/home/hargrove/SCRATCH/OMPI/openmpi-trunk-linux-ppc64-xlc-12.1/openmpi-trunk/ompi/mpi/fortran/use-mpi-f08/pmpi-f-interfaces-bind.h&quot;,
</span><br>
<span class="quotelev1">&gt; line 1603.27: 1513-230 (S) Procedure pompi_cart_map_f was declared with the
</span><br>
<span class="quotelev1">&gt; BIND(C) attribute.  Dummy argument periods of pompi_cart_map_f must have
</span><br>
<span class="quotelev1">&gt; interoperable type and type parameters.
</span><br>
<span class="quotelev1">&gt; &quot;/home/hargrove/SCRATCH/OMPI/openmpi-trunk-linux-ppc64-xlc-12.1/openmpi-trunk/ompi/mpi/fortran/use-mpi-f08/pmpi-f-interfaces-bind.h&quot;,
</span><br>
<span class="quotelev1">&gt; line 1630.27: 1513-230 (S) Procedure pompi_cart_sub_f was declared with the
</span><br>
<span class="quotelev1">&gt; BIND(C) attribute.  Dummy argument remain_dims of pompi_cart_sub_f must
</span><br>
<span class="quotelev1">&gt; have interoperable type and type parameters.
</span><br>
<span class="quotelev1">&gt; &quot;/home/hargrove/SCRATCH/OMPI/openmpi-trunk-linux-ppc64-xlc-12.1/openmpi-trunk/ompi/mpi/fortran/use-mpi-f08/pmpi-f-interfaces-bind.h&quot;,
</span><br>
<span class="quotelev1">&gt; line 1651.27: 1513-230 (S) Procedure pompi_dist_graph_create_f was declared
</span><br>
<span class="quotelev1">&gt; with the BIND(C) attribute.  Dummy argument reorder of
</span><br>
<span class="quotelev1">&gt; pompi_dist_graph_create_f must have interoperable type and type parameters.
</span><br>
<span class="quotelev1">&gt; &quot;/home/hargrove/SCRATCH/OMPI/openmpi-trunk-linux-ppc64-xlc-12.1/openmpi-trunk/ompi/mpi/fortran/use-mpi-f08/pmpi-f-interfaces-bind.h&quot;,
</span><br>
<span class="quotelev1">&gt; line 1666.27: 1513-230 (S) Procedure pompi_dist_graph_create_adjacent_f was
</span><br>
<span class="quotelev1">&gt; declared with the BIND(C) attribute.  Dummy argument reorder of
</span><br>
<span class="quotelev1">&gt; pompi_dist_graph_create_adjacent_f must have interoperable type and type
</span><br>
<span class="quotelev1">&gt; parameters.
</span><br>
<span class="quotelev1">&gt; &quot;/home/hargrove/SCRATCH/OMPI/openmpi-trunk-linux-ppc64-xlc-12.1/openmpi-trunk/ompi/mpi/fortran/use-mpi-f08/pmpi-f-interfaces-bind.h&quot;,
</span><br>
<span class="quotelev1">&gt; line 1688.28: 1513-230 (S) Procedure pompi_dist_graph_neighbors_count_f was
</span><br>
<span class="quotelev1">&gt; declared with the BIND(C) attribute.  Dummy argument weighted of
</span><br>
<span class="quotelev1">&gt; pompi_dist_graph_neighbors_count_f must have interoperable type and type
</span><br>
<span class="quotelev1">&gt; parameters.
</span><br>
<span class="quotelev1">&gt; &quot;/home/hargrove/SCRATCH/OMPI/openmpi-trunk-linux-ppc64-xlc-12.1/openmpi-trunk/ompi/mpi/fortran/use-mpi-f08/pmpi-f-interfaces-bind.h&quot;,
</span><br>
<span class="quotelev1">&gt; line 1707.27: 1513-230 (S) Procedure pompi_graph_create_f was declared with
</span><br>
<span class="quotelev1">&gt; the BIND(C) attribute.  Dummy argument reorder of pompi_graph_create_f must
</span><br>
<span class="quotelev1">&gt; have interoperable type and type parameters.
</span><br>
<span class="quotelev1">&gt; &quot;/home/hargrove/SCRATCH/OMPI/openmpi-trunk-linux-ppc64-xlc-12.1/openmpi-trunk/ompi/mpi/fortran/use-mpi-f08/pmpi-f-interfaces-bind.h&quot;,
</span><br>
<span class="quotelev1">&gt; line 1918.28: 1513-230 (S) Procedure pompi_finalized_f was declared with
</span><br>
<span class="quotelev1">&gt; the BIND(C) attribute.  Dummy argument flag of pompi_finalized_f must have
</span><br>
<span class="quotelev1">&gt; interoperable type and type parameters.
</span><br>
<span class="quotelev1">&gt; &quot;/home/hargrove/SCRATCH/OMPI/openmpi-trunk-linux-ppc64-xlc-12.1/openmpi-trunk/ompi/mpi/fortran/use-mpi-f08/pmpi-f-interfaces-bind.h&quot;,
</span><br>
<span class="quotelev1">&gt; line 1959.28: 1513-230 (S) Procedure pompi_initialized_f was declared with
</span><br>
<span class="quotelev1">&gt; the BIND(C) attribute.  Dummy argument flag of pompi_initialized_f must
</span><br>
<span class="quotelev1">&gt; have interoperable type and type parameters.
</span><br>
<span class="quotelev1">&gt; &quot;/home/hargrove/SCRATCH/OMPI/openmpi-trunk-linux-ppc64-xlc-12.1/openmpi-trunk/ompi/mpi/fortran/use-mpi-f08/pmpi-f-interfaces-bind.h&quot;,
</span><br>
<span class="quotelev1">&gt; line 2036.28: 1513-230 (S) Procedure pompi_info_get_f was declared with the
</span><br>
<span class="quotelev1">&gt; BIND(C) attribute.  Dummy argument flag of pompi_info_get_f must have
</span><br>
<span class="quotelev1">&gt; interoperable type and type parameters.
</span><br>
<span class="quotelev1">&gt; &quot;/home/hargrove/SCRATCH/OMPI/openmpi-trunk-linux-ppc64-xlc-12.1/openmpi-trunk/ompi/mpi/fortran/use-mpi-f08/pmpi-f-interfaces-bind.h&quot;,
</span><br>
<span class="quotelev1">&gt; line 2067.28: 1513-230 (S) Procedure pompi_info_get_valuelen_f was declared
</span><br>
<span class="quotelev1">&gt; with the BIND(C) attribute.  Dummy argument flag of
</span><br>
<span class="quotelev1">&gt; pompi_info_get_valuelen_f must have interoperable type and type parameters.
</span><br>
<span class="quotelev1">&gt; &quot;/home/hargrove/SCRATCH/OMPI/openmpi-trunk-linux-ppc64-xlc-12.1/openmpi-trunk/ompi/mpi/fortran/use-mpi-f08/pmpi-f-interfaces-bind.h&quot;,
</span><br>
<span class="quotelev1">&gt; line 2332.28: 1513-230 (S) Procedure pompi_win_test_f was declared with the
</span><br>
<span class="quotelev1">&gt; BIND(C) attribute.  Dummy argument flag of pompi_win_test_f must have
</span><br>
<span class="quotelev1">&gt; interoperable type and type parameters.
</span><br>
<span class="quotelev1">&gt; &quot;/home/hargrove/SCRATCH/OMPI/openmpi-trunk-linux-ppc64-xlc-12.1/openmpi-trunk/ompi/mpi/fortran/use-mpi-f08/pmpi-f-interfaces-bind.h&quot;,
</span><br>
<span class="quotelev1">&gt; line 2386.28: 1513-230 (S) Procedure pompi_is_thread_main_f was declared
</span><br>
<span class="quotelev1">&gt; with the BIND(C) attribute.  Dummy argument flag of pompi_is_thread_main_f
</span><br>
<span class="quotelev1">&gt; must have interoperable type and type parameters.
</span><br>
<span class="quotelev1">&gt; &quot;/home/hargrove/SCRATCH/OMPI/openmpi-trunk-linux-ppc64-xlc-12.1/openmpi-trunk/ompi/mpi/fortran/use-mpi-f08/pmpi-f-interfaces-bind.h&quot;,
</span><br>
<span class="quotelev1">&gt; line 2402.28: 1513-230 (S) Procedure pompi_status_set_cancelled_f was
</span><br>
<span class="quotelev1">&gt; declared with the BIND(C) attribute.  Dummy argument flag of
</span><br>
<span class="quotelev1">&gt; pompi_status_set_cancelled_f must have interoperable type and type
</span><br>
<span class="quotelev1">&gt; parameters.
</span><br>
<span class="quotelev1">&gt; &quot;/home/hargrove/SCRATCH/OMPI/openmpi-trunk-linux-ppc64-xlc-12.1/openmpi-trunk/ompi/mpi/fortran/use-mpi-f08/pmpi-f-interfaces-bind.h&quot;,
</span><br>
<span class="quotelev1">&gt; line 2445.28: 1513-230 (S) Procedure pompi_file_get_atomicity_f was
</span><br>
<span class="quotelev1">&gt; declared with the BIND(C) attribute.  Dummy argument flag of
</span><br>
<span class="quotelev1">&gt; pompi_file_get_atomicity_f must have interoperable type and type parameters.
</span><br>
<span class="quotelev1">&gt; &quot;/home/hargrove/SCRATCH/OMPI/openmpi-trunk-linux-ppc64-xlc-12.1/openmpi-trunk/ompi/mpi/fortran/use-mpi-f08/pmpi-f-interfaces-bind.h&quot;,
</span><br>
<span class="quotelev1">&gt; line 2778.27: 1513-230 (S) Procedure pompi_file_set_atomicity_f was
</span><br>
<span class="quotelev1">&gt; declared with the BIND(C) attribute.  Dummy argument flag of
</span><br>
<span class="quotelev1">&gt; pompi_file_set_atomicity_f must have interoperable type and type parameters.
</span><br>
<span class="quotelev1">&gt; &quot;/home/hargrove/SCRATCH/OMPI/openmpi-trunk-linux-ppc64-xlc-12.1/openmpi-trunk/ompi/mpi/fortran/use-mpi-f08/pmpi-f-interfaces-bind.h&quot;,
</span><br>
<span class="quotelev1">&gt; line 3074.28: 1513-230 (S) Procedure pompi_improbe_f was declared with the
</span><br>
<span class="quotelev1">&gt; BIND(C) attribute.  Dummy argument flag of pompi_improbe_f must have
</span><br>
<span class="quotelev1">&gt; interoperable type and type parameters.
</span><br>
<span class="quotelev1">&gt; &quot;/home/hargrove/SCRATCH/OMPI/openmpi-trunk-linux-ppc64-xlc-12.1/openmpi-trunk/ompi/mpi/fortran/use-mpi-f08/mpi-f08.F90&quot;,
</span><br>
<span class="quotelev1">&gt; 1516-194 (S) A binding label must not be the same as the name of a program
</span><br>
<span class="quotelev1">&gt; unit, common block, external procedure, and another binding label, ignoring
</span><br>
<span class="quotelev1">&gt; differences in case.
</span><br>
<span class="quotelev1">&gt; &quot;/home/hargrove/SCRATCH/OMPI/openmpi-trunk-linux-ppc64-xlc-12.1/openmpi-trunk/ompi/mpi/fortran/use-mpi-f08/mpi-f08.F90&quot;,
</span><br>
<span class="quotelev1">&gt; 1520-031 (W) Option DLINES is ignored within Fortran 90 free form and IBM
</span><br>
<span class="quotelev1">&gt; free form.
</span><br>
<span class="quotelev1">&gt; &quot;/home/hargrove/SCRATCH/OMPI/openmpi-trunk-linux-ppc64-xlc-12.1/openmpi-trunk/ompi/mpi/fortran/use-mpi-f08/mpi-f08.F90&quot;,
</span><br>
<span class="quotelev1">&gt; 1516-194 (S) A binding label must not be the same as the name of a program
</span><br>
<span class="quotelev1">&gt; unit, common block, external procedure, and another binding label, ignoring
</span><br>
<span class="quotelev1">&gt; differences in case.
</span><br>
<span class="quotelev1">&gt; ** mpi_f08   === End of Compilation 1 ===
</span><br>
<span class="quotelev1">&gt; 1501-511  Compilation failed for file mpi-f08.F90.
</span><br>
<span class="quotelev1">&gt; make[2]: *** [mpi-f08.lo] Error 1
</span><br>
<p><p><p><p><pre>
-- 
Paul H. Hargrove                          PHHargrove_at_[hidden]
Future Technologies Group
Computer and Data Sciences Department     Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900

</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-11517/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>application/x-gzip attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-11517/config.status.gz">config.status.gz</a>
</ul>
<!-- attachment="config.status.gz" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11518.php">Paul Hargrove: "Re: [OMPI devel] F90 build failures with XLF-14.1 and OMPI trunk"</a>
<li><strong>Previous message:</strong> <a href="11516.php">Paul Hargrove: "Re: [OMPI devel] 1.6.2rc3 released"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11518.php">Paul Hargrove: "Re: [OMPI devel] F90 build failures with XLF-14.1 and OMPI trunk"</a>
<li><strong>Reply:</strong> <a href="11518.php">Paul Hargrove: "Re: [OMPI devel] F90 build failures with XLF-14.1 and OMPI trunk"</a>
<li><strong>Reply:</strong> <a href="11519.php">Jeff Squyres: "Re: [OMPI devel] F90 build failures with XLF-14.1 and OMPI trunk"</a>
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

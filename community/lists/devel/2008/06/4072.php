<?
$subject_val = "[OMPI devel] r18551 - brakes ob1 compilation on Sles10";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jun  2 08:25:24 2008" -->
<!-- isoreceived="20080602122524" -->
<!-- sent="Mon, 02 Jun 2008 15:25:13 +0300" -->
<!-- isosent="20080602122513" -->
<!-- name="Pavel Shamis (Pasha)" -->
<!-- email="pasha_at_[hidden]" -->
<!-- subject="[OMPI devel] r18551 - brakes ob1 compilation on Sles10" -->
<!-- id="4843E6A9.1020305_at_dev.mellanox.co.il" -->
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
<strong>Subject:</strong> [OMPI devel] r18551 - brakes ob1 compilation on Sles10<br>
<strong>From:</strong> Pavel Shamis (Pasha) (<em>pasha_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-06-02 08:25:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4073.php">Ralf Wildenhues: "Re: [OMPI devel] r18551 - brakes ob1 compilation on Sles10"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2008/05/4071.php">Joseph Bane: "[OMPI devel] openmpi-1.2.6 and pvfs-2.7.0+ Support"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4073.php">Ralf Wildenhues: "Re: [OMPI devel] r18551 - brakes ob1 compilation on Sles10"</a>
<li><strong>Reply:</strong> <a href="4073.php">Ralf Wildenhues: "Re: [OMPI devel] r18551 - brakes ob1 compilation on Sles10"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
r18551 brakes ompi compilation on SLES10 gcc 4.1.0.
<br>
<p>I got follow error on my systems 
<br>
(<a href="http://www.open-mpi.org/mtt/index.php?do_redir=672">http://www.open-mpi.org/mtt/index.php?do_redir=672</a> ):
<br>
make[2]: Entering directory 
<br>
`/.autodirect/hpc/work/pasha/tmp/mtt-8/installs/5VHm/src/openmpi-1.3a1r18553/ompi/mca/pml/ob1'
<br>
/bin/sh ../../../../libtool --tag=CC   --mode=link gcc  -g -pipe -Wall 
<br>
-Wundef -Wno-long-long -Wsign-compare -Wmissing-prototypes 
<br>
-Wstrict-prototypes -Wcomment -pedantic 
<br>
-Werror-implicit-function-declaration -finline-functions 
<br>
-fno-strict-aliasing -pthread -fvisibility=hidden -module -avoid-version 
<br>
-export-dynamic   -o mca_pml_ob1.la -rpath 
<br>
/.autodirect/hpc/work/pasha/tmp/mtt-8/installs/5VHm/install/lib/openmpi 
<br>
pml_ob1.lo pml_ob1_comm.lo pml_ob1_component.lo pml_ob1_iprobe.lo 
<br>
pml_ob1_irecv.lo pml_ob1_isend.lo pml_ob1_progress.lo pml_ob1_rdma.lo 
<br>
pml_ob1_rdmafrag.lo pml_ob1_recvfrag.lo pml_ob1_recvreq.lo 
<br>
pml_ob1_sendreq.lo pml_ob1_start.lo  -lnsl -lutil  -lm
<br>
libtool: link: gcc -shared  .libs/pml_ob1.o .libs/pml_ob1_comm.o 
<br>
.libs/pml_ob1_component.o .libs/pml_ob1_iprobe.o .libs/pml_ob1_irecv.o 
<br>
.libs/pml_ob1_isend.o .libs/pml_ob1_progress.o .libs/pml_ob1_rdma.o 
<br>
.libs/pml_ob1_rdmafrag.o .libs/pml_ob1_recvfrag.o 
<br>
.libs/pml_ob1_recvreq.o .libs/pml_ob1_sendreq.o .libs/pml_ob1_start.o   
<br>
-lnsl -lutil -lm  -pthread   -pthread -Wl,-soname -Wl,mca_pml_ob1.so -o 
<br>
.libs/mca_pml_ob1.so
<br>
/usr/lib64/gcc/x86_64-suse-linux/4.1.0/../../../../x86_64-suse-linux/bin/ld: 
<br>
.libs/pml_ob1_sendreq.o: relocation R_X86_64_PC32 against 
<br>
`mca_pml_ob1_rndv_completion' can not be used when making a shared 
<br>
object; recompile with -fPIC
<br>
/usr/lib64/gcc/x86_64-suse-linux/4.1.0/../../../../x86_64-suse-linux/bin/ld: 
<br>
final link failed: Bad value
<br>
collect2: ld returned 1 exit status
<br>
<p>Removing inline from some of functions (see attached file), resolves the 
<br>
problem.
<br>
<p>Thanks,
<br>
Pasha
<br>
<p><p>
<br><p>
--- pml_ob1_sendreq.c	2008-06-01 10:59:51.094063000 +0300
<br>
+++ pml_ob1_sendreq.c.new	2008-06-02 15:07:02.612983000 +0300
<br>
@@ -192,7 +192,7 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA_PML_OB1_PROGRESS_PENDING(bml_btl);
<br>
&nbsp;}
<br>
&nbsp;
<br>
-static inline void
<br>
+static void
<br>
&nbsp;mca_pml_ob1_match_completion_free( struct mca_btl_base_module_t* btl,  
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;struct mca_btl_base_endpoint_t* ep,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;struct mca_btl_base_descriptor_t* des,
<br>
@@ -235,7 +235,7 @@
<br>
&nbsp;&nbsp;*  Completion of the first fragment of a long message that 
<br>
&nbsp;&nbsp;*  requires an acknowledgement
<br>
&nbsp;&nbsp;*/
<br>
-static inline void
<br>
+static void
<br>
&nbsp;mca_pml_ob1_rndv_completion( mca_btl_base_module_t* btl,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;struct mca_btl_base_endpoint_t* ep,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;struct mca_btl_base_descriptor_t* des,
<br>
@@ -269,7 +269,7 @@
<br>
&nbsp;&nbsp;* Completion of a get request.
<br>
&nbsp;&nbsp;*/
<br>
&nbsp;
<br>
-static inline void
<br>
+static void
<br>
&nbsp;mca_pml_ob1_rget_completion( mca_btl_base_module_t* btl,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;struct mca_btl_base_endpoint_t* ep,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;struct mca_btl_base_descriptor_t* des,
<br>
@@ -295,7 +295,7 @@
<br>
&nbsp;&nbsp;* Completion of a control message - return resources.
<br>
&nbsp;&nbsp;*/
<br>
&nbsp;
<br>
-static inline void
<br>
+static void
<br>
&nbsp;mca_pml_ob1_send_ctl_completion( mca_btl_base_module_t* btl,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;struct mca_btl_base_endpoint_t* ep,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;struct mca_btl_base_descriptor_t* des,
<br>
@@ -312,7 +312,7 @@
<br>
&nbsp;&nbsp;* to schedule additional fragments.
<br>
&nbsp;&nbsp;*/
<br>
&nbsp;
<br>
-static inline void
<br>
+static void
<br>
&nbsp;mca_pml_ob1_frag_completion( mca_btl_base_module_t* btl,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;struct mca_btl_base_endpoint_t* ep,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;struct mca_btl_base_descriptor_t* des,
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4073.php">Ralf Wildenhues: "Re: [OMPI devel] r18551 - brakes ob1 compilation on Sles10"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2008/05/4071.php">Joseph Bane: "[OMPI devel] openmpi-1.2.6 and pvfs-2.7.0+ Support"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4073.php">Ralf Wildenhues: "Re: [OMPI devel] r18551 - brakes ob1 compilation on Sles10"</a>
<li><strong>Reply:</strong> <a href="4073.php">Ralf Wildenhues: "Re: [OMPI devel] r18551 - brakes ob1 compilation on Sles10"</a>
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

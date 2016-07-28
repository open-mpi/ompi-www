<?
$subject_val = "[OMPI devel] TIPC BTL Segmentation fault";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jun 29 09:47:57 2011" -->
<!-- isoreceived="20110629134757" -->
<!-- sent="Wed, 29 Jun 2011 15:48:27 +0200" -->
<!-- isosent="20110629134827" -->
<!-- name="Xin He" -->
<!-- email="xin.i.he_at_[hidden]" -->
<!-- subject="[OMPI devel] TIPC BTL Segmentation fault" -->
<!-- id="4E0B2D2B.8070207_at_ericsson.com" -->
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
<strong>Subject:</strong> [OMPI devel] TIPC BTL Segmentation fault<br>
<strong>From:</strong> Xin He (<em>xin.i.he_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-06-29 09:48:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9445.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r24836"</a>
<li><strong>Previous message:</strong> <a href="9443.php">Kawashima: "Re: [OMPI devel] &quot;Open MPI&quot;-based MPI library used by K computer"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2011/07/9460.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] TIPC BTL Segmentation fault"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2011/07/9460.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] TIPC BTL Segmentation fault"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>As I advanced in my implementation of TIPC BTL, I added the component 
<br>
and tried to run hello_c program to test.
<br>
<p>Then I got this segmentation fault. It seemed happening after the call 
<br>
&quot;mca_btl_tipc_add_procs&quot;.
<br>
<p>The error message displayed:
<br>
<p>[oak:23192] *** Process received signal ***
<br>
[oak:23192] Signal: Segmentation fault (11)
<br>
[oak:23192] Signal code:  (128)
<br>
[oak:23192] Failing at address: (nil)
<br>
[oak:23192] [ 0] /lib/libpthread.so.0(+0xfb40) [0x7fec2a40fb40]
<br>
[oak:23192] [ 1] /usr/lib/libmpi.so.0(+0x1e6c10) [0x7fec2b2afc10]
<br>
[oak:23192] [ 2] /usr/lib/libmpi.so.0(+0x1e71f2) [0x7fec2b2b01f2]
<br>
[oak:23192] [ 3] /usr/lib/openmpi/mca_pml_ob1.so(+0x59f2) [0x7fec264fc9f2]
<br>
[oak:23192] [ 4] /usr/lib/openmpi/mca_pml_ob1.so(+0x5e5a) [0x7fec264fce5a]
<br>
[oak:23192] [ 5] /usr/lib/openmpi/mca_pml_ob1.so(+0x2386) [0x7fec264f9386]
<br>
[oak:23192] [ 6] /usr/lib/openmpi/mca_pml_ob1.so(+0x24a0) [0x7fec264f94a0]
<br>
[oak:23192] [ 7] /usr/lib/openmpi/mca_pml_ob1.so(+0x22fb) [0x7fec264f92fb]
<br>
[oak:23192] [ 8] /usr/lib/openmpi/mca_pml_ob1.so(+0x3a60) [0x7fec264faa60]
<br>
[oak:23192] [ 9] /usr/lib/libmpi.so.0(+0x67f51) [0x7fec2b130f51]
<br>
[oak:23192] [10] /usr/lib/libmpi.so.0(MPI_Init+0x173) [0x7fec2b161c33]
<br>
[oak:23192] [11] hello_i(main+0x22) [0x400936]
<br>
[oak:23192] [12] /lib/libc.so.6(__libc_start_main+0xfe) [0x7fec2a09bd8e]
<br>
[oak:23192] [13] hello_i() [0x400859]
<br>
[oak:23192] *** End of error message ***
<br>
<p>I used gdb to check the stack:
<br>
(gdb) bt
<br>
#0  0x00007ffff7afac10 in opal_obj_run_constructors (object=0x6ca980)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;at ../opal/class/opal_object.h:427
<br>
#1  0x00007ffff7afb1f2 in opal_list_construct (list=0x6ca958) at 
<br>
class/opal_list.c:88
<br>
#2  0x00007ffff2d479f2 in opal_obj_run_constructors (object=0x6ca958)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;at ../../../../opal/class/opal_object.h:427
<br>
#3  0x00007ffff2d47e5a in mca_pml_ob1_comm_construct (comm=0x6ca8c0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;at pml_ob1_comm.c:55
<br>
#4  0x00007ffff2d44386 in opal_obj_run_constructors (object=0x6ca8c0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;at ../../../../opal/class/opal_object.h:427
<br>
#5  0x00007ffff2d444a0 in opal_obj_new (cls=0x7ffff2f6c040)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;at ../../../../opal/class/opal_object.h:477
<br>
#6  0x00007ffff2d442fb in opal_obj_new_debug (type=0x7ffff2f6c040,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;file=0x7ffff2d62840 &quot;pml_ob1.c&quot;, line=182)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;at ../../../../opal/class/opal_object.h:252
<br>
#7  0x00007ffff2d45a60 in mca_pml_ob1_add_comm (comm=0x601060) at 
<br>
pml_ob1.c:182
<br>
#8  0x00007ffff797bf51 in ompi_mpi_init (argc=1, argv=0x7fffffffdf58, 
<br>
requested=0,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;provided=0x7fffffffde28) at runtime/ompi_mpi_init.c:770
<br>
#9  0x00007ffff79acc33 in PMPI_Init (argc=0x7fffffffde5c, 
<br>
argv=0x7fffffffde50)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;at pinit.c:84
<br>
#10 0x0000000000400936 in main (argc=1, argv=0x7fffffffdf58) at hello_c.c:17
<br>
<p>It seems the error happened when an object is constructed. Any idea why 
<br>
this is happening?
<br>
<p>Thanks.
<br>
<p>Best regards,
<br>
Xin
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9445.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r24836"</a>
<li><strong>Previous message:</strong> <a href="9443.php">Kawashima: "Re: [OMPI devel] &quot;Open MPI&quot;-based MPI library used by K computer"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2011/07/9460.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] TIPC BTL Segmentation fault"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2011/07/9460.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] TIPC BTL Segmentation fault"</a>
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

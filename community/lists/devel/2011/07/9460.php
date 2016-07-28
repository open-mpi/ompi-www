<?
$subject_val = "Re: [OMPI devel] TIPC BTL Segmentation fault";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Jul  2 16:49:52 2011" -->
<!-- isoreceived="20110702204952" -->
<!-- sent="Sat, 2 Jul 2011 15:49:33 -0500" -->
<!-- isosent="20110702204933" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] TIPC BTL Segmentation fault" -->
<!-- id="54CF246B-7A11-4B53-82D1-FEB3022DB741_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4E0B2D2B.8070207_at_ericsson.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] TIPC BTL Segmentation fault<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-07-02 16:49:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9461.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] &quot;Open MPI&quot;-based MPI library used by K computer"</a>
<li><strong>Previous message:</strong> <a href="9459.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Trunk problem: VT breakage"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2011/06/9444.php">Xin He: "[OMPI devel] TIPC BTL Segmentation fault"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9466.php">Xin He: "Re: [OMPI devel] TIPC BTL Segmentation fault"</a>
<li><strong>Reply:</strong> <a href="9466.php">Xin He: "Re: [OMPI devel] TIPC BTL Segmentation fault"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Do u know which object it is that is being constructed?  When you compile with debugging enabled, theres strings in the object struct that identify te file and line where the obj was created. 
<br>
<p>Sent from my phone. No type good. 
<br>
<p>On Jun 29, 2011, at 8:48 AM, &quot;Xin He&quot; &lt;xin.i.he_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; As I advanced in my implementation of TIPC BTL, I added the component and tried to run hello_c program to test.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Then I got this segmentation fault. It seemed happening after the call &quot;mca_btl_tipc_add_procs&quot;.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The error message displayed:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [oak:23192] *** Process received signal ***
</span><br>
<span class="quotelev1">&gt; [oak:23192] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev1">&gt; [oak:23192] Signal code:  (128)
</span><br>
<span class="quotelev1">&gt; [oak:23192] Failing at address: (nil)
</span><br>
<span class="quotelev1">&gt; [oak:23192] [ 0] /lib/libpthread.so.0(+0xfb40) [0x7fec2a40fb40]
</span><br>
<span class="quotelev1">&gt; [oak:23192] [ 1] /usr/lib/libmpi.so.0(+0x1e6c10) [0x7fec2b2afc10]
</span><br>
<span class="quotelev1">&gt; [oak:23192] [ 2] /usr/lib/libmpi.so.0(+0x1e71f2) [0x7fec2b2b01f2]
</span><br>
<span class="quotelev1">&gt; [oak:23192] [ 3] /usr/lib/openmpi/mca_pml_ob1.so(+0x59f2) [0x7fec264fc9f2]
</span><br>
<span class="quotelev1">&gt; [oak:23192] [ 4] /usr/lib/openmpi/mca_pml_ob1.so(+0x5e5a) [0x7fec264fce5a]
</span><br>
<span class="quotelev1">&gt; [oak:23192] [ 5] /usr/lib/openmpi/mca_pml_ob1.so(+0x2386) [0x7fec264f9386]
</span><br>
<span class="quotelev1">&gt; [oak:23192] [ 6] /usr/lib/openmpi/mca_pml_ob1.so(+0x24a0) [0x7fec264f94a0]
</span><br>
<span class="quotelev1">&gt; [oak:23192] [ 7] /usr/lib/openmpi/mca_pml_ob1.so(+0x22fb) [0x7fec264f92fb]
</span><br>
<span class="quotelev1">&gt; [oak:23192] [ 8] /usr/lib/openmpi/mca_pml_ob1.so(+0x3a60) [0x7fec264faa60]
</span><br>
<span class="quotelev1">&gt; [oak:23192] [ 9] /usr/lib/libmpi.so.0(+0x67f51) [0x7fec2b130f51]
</span><br>
<span class="quotelev1">&gt; [oak:23192] [10] /usr/lib/libmpi.so.0(MPI_Init+0x173) [0x7fec2b161c33]
</span><br>
<span class="quotelev1">&gt; [oak:23192] [11] hello_i(main+0x22) [0x400936]
</span><br>
<span class="quotelev1">&gt; [oak:23192] [12] /lib/libc.so.6(__libc_start_main+0xfe) [0x7fec2a09bd8e]
</span><br>
<span class="quotelev1">&gt; [oak:23192] [13] hello_i() [0x400859]
</span><br>
<span class="quotelev1">&gt; [oak:23192] *** End of error message ***
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I used gdb to check the stack:
</span><br>
<span class="quotelev1">&gt; (gdb) bt
</span><br>
<span class="quotelev1">&gt; #0  0x00007ffff7afac10 in opal_obj_run_constructors (object=0x6ca980)
</span><br>
<span class="quotelev1">&gt;    at ../opal/class/opal_object.h:427
</span><br>
<span class="quotelev1">&gt; #1  0x00007ffff7afb1f2 in opal_list_construct (list=0x6ca958) at class/opal_list.c:88
</span><br>
<span class="quotelev1">&gt; #2  0x00007ffff2d479f2 in opal_obj_run_constructors (object=0x6ca958)
</span><br>
<span class="quotelev1">&gt;    at ../../../../opal/class/opal_object.h:427
</span><br>
<span class="quotelev1">&gt; #3  0x00007ffff2d47e5a in mca_pml_ob1_comm_construct (comm=0x6ca8c0)
</span><br>
<span class="quotelev1">&gt;    at pml_ob1_comm.c:55
</span><br>
<span class="quotelev1">&gt; #4  0x00007ffff2d44386 in opal_obj_run_constructors (object=0x6ca8c0)
</span><br>
<span class="quotelev1">&gt;    at ../../../../opal/class/opal_object.h:427
</span><br>
<span class="quotelev1">&gt; #5  0x00007ffff2d444a0 in opal_obj_new (cls=0x7ffff2f6c040)
</span><br>
<span class="quotelev1">&gt;    at ../../../../opal/class/opal_object.h:477
</span><br>
<span class="quotelev1">&gt; #6  0x00007ffff2d442fb in opal_obj_new_debug (type=0x7ffff2f6c040,
</span><br>
<span class="quotelev1">&gt;    file=0x7ffff2d62840 &quot;pml_ob1.c&quot;, line=182)
</span><br>
<span class="quotelev1">&gt;    at ../../../../opal/class/opal_object.h:252
</span><br>
<span class="quotelev1">&gt; #7  0x00007ffff2d45a60 in mca_pml_ob1_add_comm (comm=0x601060) at pml_ob1.c:182
</span><br>
<span class="quotelev1">&gt; #8  0x00007ffff797bf51 in ompi_mpi_init (argc=1, argv=0x7fffffffdf58, requested=0,
</span><br>
<span class="quotelev1">&gt;    provided=0x7fffffffde28) at runtime/ompi_mpi_init.c:770
</span><br>
<span class="quotelev1">&gt; #9  0x00007ffff79acc33 in PMPI_Init (argc=0x7fffffffde5c, argv=0x7fffffffde50)
</span><br>
<span class="quotelev1">&gt;    at pinit.c:84
</span><br>
<span class="quotelev1">&gt; #10 0x0000000000400936 in main (argc=1, argv=0x7fffffffdf58) at hello_c.c:17
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It seems the error happened when an object is constructed. Any idea why this is happening?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Best regards,
</span><br>
<span class="quotelev1">&gt; Xin
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9461.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] &quot;Open MPI&quot;-based MPI library used by K computer"</a>
<li><strong>Previous message:</strong> <a href="9459.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Trunk problem: VT breakage"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2011/06/9444.php">Xin He: "[OMPI devel] TIPC BTL Segmentation fault"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9466.php">Xin He: "Re: [OMPI devel] TIPC BTL Segmentation fault"</a>
<li><strong>Reply:</strong> <a href="9466.php">Xin He: "Re: [OMPI devel] TIPC BTL Segmentation fault"</a>
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

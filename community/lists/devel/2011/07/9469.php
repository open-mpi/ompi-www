<?
$subject_val = "Re: [OMPI devel] TIPC BTL Segmentation fault";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jul  4 07:44:42 2011" -->
<!-- isoreceived="20110704114442" -->
<!-- sent="Mon, 4 Jul 2011 13:45:24 +0200" -->
<!-- isosent="20110704114524" -->
<!-- name="Xin He" -->
<!-- email="xin.i.he_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] TIPC BTL Segmentation fault" -->
<!-- id="4E11A7D4.9040001_at_ericsson.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="895E544C-4C49-443F-A8DF-F89647735CD7_at_cisco.com" -->
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
<strong>From:</strong> Xin He (<em>xin.i.he_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-07-04 07:45:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9470.php">Jeff Squyres: "Re: [OMPI devel] TIPC BTL Segmentation fault"</a>
<li><strong>Previous message:</strong> <a href="9468.php">Jeff Squyres: "Re: [OMPI devel] &quot;Open MPI&quot;-based MPI library used by K computer"</a>
<li><strong>In reply to:</strong> <a href="9467.php">Jeff Squyres: "Re: [OMPI devel] TIPC BTL Segmentation fault"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9470.php">Jeff Squyres: "Re: [OMPI devel] TIPC BTL Segmentation fault"</a>
<li><strong>Reply:</strong> <a href="9470.php">Jeff Squyres: "Re: [OMPI devel] TIPC BTL Segmentation fault"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I ran the program with valgrind, and it showed almost the same error. It 
<br>
appeared that the segmentation fault happened during
<br>
the initiation of an opal_object.  That's why it puzzled me.
<br>
<p>/Xin
<br>
<p><p>On 07/04/2011 01:40 PM, Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; Ah -- so this is in the template code.  I suspect this code might have bit rotted a bit.  :-\
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If you run this through valgrind, does anything obvious show up?  I ask because this kind of error is typically a symptom of the real error.  I.e., the real error was some kind of memory corruption that occurred earlier, and this is the memory access that exposes that prior memory corruption.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jul 4, 2011, at 5:08 AM, Xin He wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Yes, it is a opal_object.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; And this error seems to be caused by these code:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   void mca_btl_template_proc_construct(mca_btl_template_proc_t* template_proc){
</span><br>
<span class="quotelev2">&gt;&gt;      .......
</span><br>
<span class="quotelev2">&gt;&gt;     .........
</span><br>
<span class="quotelev2">&gt;&gt;      /* add to list of all proc instance */
</span><br>
<span class="quotelev2">&gt;&gt;      OPAL_THREAD_LOCK(&amp;mca_btl_template_component.template_lock);
</span><br>
<span class="quotelev2">&gt;&gt;      opal_list_append(&amp;mca_btl_template_component.template_procs,&amp;template_proc-&gt;super);
</span><br>
<span class="quotelev2">&gt;&gt;      OPAL_THREAD_UNLOCK(&amp;mca_btl_template_component.template_lock);
</span><br>
<span class="quotelev2">&gt;&gt; }
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /Xin
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On 07/02/2011 10:49 PM, Jeff Squyres (jsquyres) wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Do u know which object it is that is being constructed?  When you compile with debugging enabled, theres strings in the object struct that identify te file and line where the obj was created.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Sent from my phone. No type good.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Jun 29, 2011, at 8:48 AM, &quot;Xin He&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &lt;xin.i.he_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; As I advanced in my implementation of TIPC BTL, I added the component and tried to run hello_c program to test.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Then I got this segmentation fault. It seemed happening after the call &quot;mca_btl_tipc_add_procs&quot;.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; The error message displayed:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [oak:23192] *** Process received signal ***
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [oak:23192] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [oak:23192] Signal code:  (128)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [oak:23192] Failing at address: (nil)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [oak:23192] [ 0] /lib/libpthread.so.0(+0xfb40) [0x7fec2a40fb40]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [oak:23192] [ 1] /usr/lib/libmpi.so.0(+0x1e6c10) [0x7fec2b2afc10]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [oak:23192] [ 2] /usr/lib/libmpi.so.0(+0x1e71f2) [0x7fec2b2b01f2]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [oak:23192] [ 3] /usr/lib/openmpi/mca_pml_ob1.so(+0x59f2) [0x7fec264fc9f2]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [oak:23192] [ 4] /usr/lib/openmpi/mca_pml_ob1.so(+0x5e5a) [0x7fec264fce5a]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [oak:23192] [ 5] /usr/lib/openmpi/mca_pml_ob1.so(+0x2386) [0x7fec264f9386]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [oak:23192] [ 6] /usr/lib/openmpi/mca_pml_ob1.so(+0x24a0) [0x7fec264f94a0]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [oak:23192] [ 7] /usr/lib/openmpi/mca_pml_ob1.so(+0x22fb) [0x7fec264f92fb]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [oak:23192] [ 8] /usr/lib/openmpi/mca_pml_ob1.so(+0x3a60) [0x7fec264faa60]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [oak:23192] [ 9] /usr/lib/libmpi.so.0(+0x67f51) [0x7fec2b130f51]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [oak:23192] [10] /usr/lib/libmpi.so.0(MPI_Init+0x173) [0x7fec2b161c33]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [oak:23192] [11] hello_i(main+0x22) [0x400936]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [oak:23192] [12] /lib/libc.so.6(__libc_start_main+0xfe) [0x7fec2a09bd8e]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [oak:23192] [13] hello_i() [0x400859]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [oak:23192] *** End of error message ***
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I used gdb to check the stack:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; (gdb) bt
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; #0  0x00007ffff7afac10 in opal_obj_run_constructors (object=0x6ca980)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     at ../opal/class/opal_object.h:427
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; #1  0x00007ffff7afb1f2 in opal_list_construct (list=0x6ca958) at class/opal_list.c:88
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; #2  0x00007ffff2d479f2 in opal_obj_run_constructors (object=0x6ca958)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     at ../../../../opal/class/opal_object.h:427
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; #3  0x00007ffff2d47e5a in mca_pml_ob1_comm_construct (comm=0x6ca8c0)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     at pml_ob1_comm.c:55
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; #4  0x00007ffff2d44386 in opal_obj_run_constructors (object=0x6ca8c0)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     at ../../../../opal/class/opal_object.h:427
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; #5  0x00007ffff2d444a0 in opal_obj_new (cls=0x7ffff2f6c040)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     at ../../../../opal/class/opal_object.h:477
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; #6  0x00007ffff2d442fb in opal_obj_new_debug (type=0x7ffff2f6c040,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     file=0x7ffff2d62840 &quot;pml_ob1.c&quot;, line=182)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     at ../../../../opal/class/opal_object.h:252
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; #7  0x00007ffff2d45a60 in mca_pml_ob1_add_comm (comm=0x601060) at pml_ob1.c:182
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; #8  0x00007ffff797bf51 in ompi_mpi_init (argc=1, argv=0x7fffffffdf58, requested=0,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     provided=0x7fffffffde28) at runtime/ompi_mpi_init.c:770
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; #9  0x00007ffff79acc33 in PMPI_Init (argc=0x7fffffffde5c, argv=0x7fffffffde50)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     at pinit.c:84
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; #10 0x0000000000400936 in main (argc=1, argv=0x7fffffffdf58) at hello_c.c:17
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; It seems the error happened when an object is constructed. Any idea why this is happening?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Thanks.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Best regards,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Xin
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9470.php">Jeff Squyres: "Re: [OMPI devel] TIPC BTL Segmentation fault"</a>
<li><strong>Previous message:</strong> <a href="9468.php">Jeff Squyres: "Re: [OMPI devel] &quot;Open MPI&quot;-based MPI library used by K computer"</a>
<li><strong>In reply to:</strong> <a href="9467.php">Jeff Squyres: "Re: [OMPI devel] TIPC BTL Segmentation fault"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9470.php">Jeff Squyres: "Re: [OMPI devel] TIPC BTL Segmentation fault"</a>
<li><strong>Reply:</strong> <a href="9470.php">Jeff Squyres: "Re: [OMPI devel] TIPC BTL Segmentation fault"</a>
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

<?
$subject_val = "Re: [OMPI users] PGI 8.0-4 doesn't like ompi/mca/op/op.h";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar 12 18:38:49 2009" -->
<!-- isoreceived="20090312223849" -->
<!-- sent="Thu, 12 Mar 2009 18:38:44 -0400" -->
<!-- isosent="20090312223844" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] PGI 8.0-4 doesn't like ompi/mca/op/op.h" -->
<!-- id="369B8565-2D9E-4B94-AE4C-130CA2B84472_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="2624BF77-9237-4C2C-BCBC-46A8C9CCF253_at_eecs.utk.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] PGI 8.0-4 doesn't like ompi/mca/op/op.h<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-03-12 18:38:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8414.php">Mark Potts: "Re: [OMPI users] PGI 8.0-4 doesn't like ompi/mca/op/op.h"</a>
<li><strong>Previous message:</strong> <a href="8412.php">George Bosilca: "Re: [OMPI users] PGI 8.0-4 doesn't like ompi/mca/op/op.h"</a>
<li><strong>In reply to:</strong> <a href="8412.php">George Bosilca: "Re: [OMPI users] PGI 8.0-4 doesn't like ompi/mca/op/op.h"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8427.php">Mostyn Lewis: "Re: [OMPI users] PGI 8.0-4 doesn't like ompi/mca/op/op.h"</a>
<li><strong>Reply:</strong> <a href="8427.php">Mostyn Lewis: "Re: [OMPI users] PGI 8.0-4 doesn't like ompi/mca/op/op.h"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Mostyn -- can you try this and see if it works with the PGI 8.0  
<br>
compiler?
<br>
<p><p>On Mar 12, 2009, at 6:20 PM, George Bosilca wrote:
<br>
<p><span class="quotelev1">&gt; Apparently, the PGI compiler (version 8) doesn't recognize restrict as
</span><br>
<span class="quotelev1">&gt; a keyword in a function prototype if the associated argument is not
</span><br>
<span class="quotelev1">&gt; named. There is one obvious solution: remove the restrict keyword but
</span><br>
<span class="quotelev1">&gt; I don't think it's the right one.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Can you try to replace
</span><br>
<span class="quotelev2">&gt; &gt; typedef void (*ompi_op_base_3buff_handler_fn_1_0_0_t)(void  
</span><br>
<span class="quotelev1">&gt; *restrict,
</span><br>
<span class="quotelev2">&gt; &gt;                                                      void *restrict,
</span><br>
<span class="quotelev2">&gt; &gt;                                                      void *restrict,
</span><br>
<span class="quotelev2">&gt; &gt; int *,
</span><br>
<span class="quotelev2">&gt; &gt;                                                      struct
</span><br>
<span class="quotelev2">&gt; &gt; ompi_datatype_t **,
</span><br>
<span class="quotelev2">&gt; &gt;                                                      struct
</span><br>
<span class="quotelev2">&gt; &gt; ompi_op_base_module_1_0_0_t *);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; by typedef void (*ompi_op_base_3buff_handler_fn_1_0_0_t)(void
</span><br>
<span class="quotelev1">&gt; *restrict in1,
</span><br>
<span class="quotelev2">&gt; &gt;                                                      void *restrict
</span><br>
<span class="quotelev2">&gt; &gt; in2,
</span><br>
<span class="quotelev2">&gt; &gt;                                                      void *restrict
</span><br>
<span class="quotelev2">&gt; &gt; out, int *,
</span><br>
<span class="quotelev2">&gt; &gt;                                                      struct
</span><br>
<span class="quotelev2">&gt; &gt; ompi_datatype_t **,
</span><br>
<span class="quotelev2">&gt; &gt;                                                      struct
</span><br>
<span class="quotelev2">&gt; &gt; ompi_op_base_module_1_0_0_t *);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt;    george.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Mar 11, 2009, at 15:52 , Mostyn Lewis wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Compiling SVN r20757 with PGI 8.0-4 failed doing ompi_info with
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; &quot;../../../.././ompi/mca/op/op.h&quot;, line 264: error: duplicate
</span><br>
<span class="quotelev2">&gt; &gt; parameter name
</span><br>
<span class="quotelev2">&gt; &gt;                                                        void  
</span><br>
<span class="quotelev1">&gt; *restrict,
</span><br>
<span class="quotelev2">&gt; &gt;                                                              ^
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; &quot;../../../.././ompi/mca/op/op.h&quot;, line 265: error: duplicate
</span><br>
<span class="quotelev2">&gt; &gt; parameter name
</span><br>
<span class="quotelev2">&gt; &gt;                                                        void
</span><br>
<span class="quotelev2">&gt; &gt; *restrict, int *,
</span><br>
<span class="quotelev2">&gt; &gt;                                                              ^
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; 2 errors detected in the compilation of &quot;../../../.././ompi/tools/
</span><br>
<span class="quotelev2">&gt; &gt; ompi_info/components.cc&quot;.
</span><br>
<span class="quotelev2">&gt; &gt; make[2]: *** [components.o] Error 2
</span><br>
<span class="quotelev2">&gt; &gt; make[2]: Leaving directory `/tmp/o/openmpi-1.4a1r20757_svn/build/
</span><br>
<span class="quotelev2">&gt; &gt; ompi/tools/ompi_info'
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Code is:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; /*
</span><br>
<span class="quotelev2">&gt; &gt; * Typedef for 3-buffer (two input and one output) op functions.
</span><br>
<span class="quotelev2">&gt; &gt; */
</span><br>
<span class="quotelev2">&gt; &gt; typedef void (*ompi_op_base_3buff_handler_fn_1_0_0_t)(void  
</span><br>
<span class="quotelev1">&gt; *restrict,
</span><br>
<span class="quotelev2">&gt; &gt;                                                      void *restrict,
</span><br>
<span class="quotelev2">&gt; &gt;                                                      void *restrict,
</span><br>
<span class="quotelev2">&gt; &gt; int *,
</span><br>
<span class="quotelev2">&gt; &gt;                                                      struct
</span><br>
<span class="quotelev2">&gt; &gt; ompi_datatype_t **,
</span><br>
<span class="quotelev2">&gt; &gt;                                                      struct
</span><br>
<span class="quotelev2">&gt; &gt; ompi_op_base_module_1_0_0_t *);
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; DM
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8414.php">Mark Potts: "Re: [OMPI users] PGI 8.0-4 doesn't like ompi/mca/op/op.h"</a>
<li><strong>Previous message:</strong> <a href="8412.php">George Bosilca: "Re: [OMPI users] PGI 8.0-4 doesn't like ompi/mca/op/op.h"</a>
<li><strong>In reply to:</strong> <a href="8412.php">George Bosilca: "Re: [OMPI users] PGI 8.0-4 doesn't like ompi/mca/op/op.h"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8427.php">Mostyn Lewis: "Re: [OMPI users] PGI 8.0-4 doesn't like ompi/mca/op/op.h"</a>
<li><strong>Reply:</strong> <a href="8427.php">Mostyn Lewis: "Re: [OMPI users] PGI 8.0-4 doesn't like ompi/mca/op/op.h"</a>
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

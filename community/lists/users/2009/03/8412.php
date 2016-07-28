<?
$subject_val = "Re: [OMPI users] PGI 8.0-4 doesn't like ompi/mca/op/op.h";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar 12 18:20:47 2009" -->
<!-- isoreceived="20090312222047" -->
<!-- sent="Thu, 12 Mar 2009 18:20:37 -0400" -->
<!-- isosent="20090312222037" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI users] PGI 8.0-4 doesn't like ompi/mca/op/op.h" -->
<!-- id="2624BF77-9237-4C2C-BCBC-46A8C9CCF253_at_eecs.utk.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="Pine.GSO.4.64.0903111248440.7314_at_aragorn.brc.West.Sun.COM" -->
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
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-03-12 18:20:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8413.php">Jeff Squyres: "Re: [OMPI users] PGI 8.0-4 doesn't like ompi/mca/op/op.h"</a>
<li><strong>Previous message:</strong> <a href="8411.php">Joshua Bernstein: "Re: [OMPI users] Installation Problems with Openmpi-1.2.9"</a>
<li><strong>In reply to:</strong> <a href="8402.php">Mostyn Lewis: "[OMPI users] PGI 8.0-4 doesn't like ompi/mca/op/op.h"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8413.php">Jeff Squyres: "Re: [OMPI users] PGI 8.0-4 doesn't like ompi/mca/op/op.h"</a>
<li><strong>Reply:</strong> <a href="8413.php">Jeff Squyres: "Re: [OMPI users] PGI 8.0-4 doesn't like ompi/mca/op/op.h"</a>
<li><strong>Reply:</strong> <a href="8414.php">Mark Potts: "Re: [OMPI users] PGI 8.0-4 doesn't like ompi/mca/op/op.h"</a>
<li><strong>Reply:</strong> <a href="8423.php">Prentice Bisbal: "Re: [OMPI users] PGI 8.0-4 doesn't like ompi/mca/op/op.h"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Apparently, the PGI compiler (version 8) doesn't recognize restrict as  
<br>
a keyword in a function prototype if the associated argument is not  
<br>
named. There is one obvious solution: remove the restrict keyword but  
<br>
I don't think it's the right one.
<br>
<p>Can you try to replace
<br>
<span class="quotelev1">&gt; typedef void (*ompi_op_base_3buff_handler_fn_1_0_0_t)(void *restrict,
</span><br>
<span class="quotelev1">&gt;                                                      void *restrict,
</span><br>
<span class="quotelev1">&gt;                                                      void *restrict,  
</span><br>
<span class="quotelev1">&gt; int *,
</span><br>
<span class="quotelev1">&gt;                                                      struct  
</span><br>
<span class="quotelev1">&gt; ompi_datatype_t **,
</span><br>
<span class="quotelev1">&gt;                                                      struct  
</span><br>
<span class="quotelev1">&gt; ompi_op_base_module_1_0_0_t *);
</span><br>
<p>by typedef void (*ompi_op_base_3buff_handler_fn_1_0_0_t)(void  
<br>
*restrict in1,
<br>
<span class="quotelev1">&gt;                                                      void *restrict  
</span><br>
<span class="quotelev1">&gt; in2,
</span><br>
<span class="quotelev1">&gt;                                                      void *restrict  
</span><br>
<span class="quotelev1">&gt; out, int *,
</span><br>
<span class="quotelev1">&gt;                                                      struct  
</span><br>
<span class="quotelev1">&gt; ompi_datatype_t **,
</span><br>
<span class="quotelev1">&gt;                                                      struct  
</span><br>
<span class="quotelev1">&gt; ompi_op_base_module_1_0_0_t *);
</span><br>
<p>Thanks,
<br>
&nbsp;&nbsp;&nbsp;george.
<br>
<p>On Mar 11, 2009, at 15:52 , Mostyn Lewis wrote:
<br>
<p><span class="quotelev1">&gt; Compiling SVN r20757 with PGI 8.0-4 failed doing ompi_info with
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &quot;../../../.././ompi/mca/op/op.h&quot;, line 264: error: duplicate  
</span><br>
<span class="quotelev1">&gt; parameter name
</span><br>
<span class="quotelev1">&gt;                                                        void *restrict,
</span><br>
<span class="quotelev1">&gt;                                                              ^
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &quot;../../../.././ompi/mca/op/op.h&quot;, line 265: error: duplicate  
</span><br>
<span class="quotelev1">&gt; parameter name
</span><br>
<span class="quotelev1">&gt;                                                        void  
</span><br>
<span class="quotelev1">&gt; *restrict, int *,
</span><br>
<span class="quotelev1">&gt;                                                              ^
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2 errors detected in the compilation of &quot;../../../.././ompi/tools/ 
</span><br>
<span class="quotelev1">&gt; ompi_info/components.cc&quot;.
</span><br>
<span class="quotelev1">&gt; make[2]: *** [components.o] Error 2
</span><br>
<span class="quotelev1">&gt; make[2]: Leaving directory `/tmp/o/openmpi-1.4a1r20757_svn/build/ 
</span><br>
<span class="quotelev1">&gt; ompi/tools/ompi_info'
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Code is:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; /*
</span><br>
<span class="quotelev1">&gt; * Typedef for 3-buffer (two input and one output) op functions.
</span><br>
<span class="quotelev1">&gt; */
</span><br>
<span class="quotelev1">&gt; typedef void (*ompi_op_base_3buff_handler_fn_1_0_0_t)(void *restrict,
</span><br>
<span class="quotelev1">&gt;                                                      void *restrict,
</span><br>
<span class="quotelev1">&gt;                                                      void *restrict,  
</span><br>
<span class="quotelev1">&gt; int *,
</span><br>
<span class="quotelev1">&gt;                                                      struct  
</span><br>
<span class="quotelev1">&gt; ompi_datatype_t **,
</span><br>
<span class="quotelev1">&gt;                                                      struct  
</span><br>
<span class="quotelev1">&gt; ompi_op_base_module_1_0_0_t *);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; DM
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
<li><strong>Next message:</strong> <a href="8413.php">Jeff Squyres: "Re: [OMPI users] PGI 8.0-4 doesn't like ompi/mca/op/op.h"</a>
<li><strong>Previous message:</strong> <a href="8411.php">Joshua Bernstein: "Re: [OMPI users] Installation Problems with Openmpi-1.2.9"</a>
<li><strong>In reply to:</strong> <a href="8402.php">Mostyn Lewis: "[OMPI users] PGI 8.0-4 doesn't like ompi/mca/op/op.h"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8413.php">Jeff Squyres: "Re: [OMPI users] PGI 8.0-4 doesn't like ompi/mca/op/op.h"</a>
<li><strong>Reply:</strong> <a href="8413.php">Jeff Squyres: "Re: [OMPI users] PGI 8.0-4 doesn't like ompi/mca/op/op.h"</a>
<li><strong>Reply:</strong> <a href="8414.php">Mark Potts: "Re: [OMPI users] PGI 8.0-4 doesn't like ompi/mca/op/op.h"</a>
<li><strong>Reply:</strong> <a href="8423.php">Prentice Bisbal: "Re: [OMPI users] PGI 8.0-4 doesn't like ompi/mca/op/op.h"</a>
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

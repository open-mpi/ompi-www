<?
$subject_val = "Re: [OMPI users] PGI 8.0-4 doesn't like ompi/mca/op/op.h";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar 12 19:10:52 2009" -->
<!-- isoreceived="20090312231052" -->
<!-- sent="Thu, 12 Mar 2009 19:09:53 -0400" -->
<!-- isosent="20090312230953" -->
<!-- name="Mark Potts" -->
<!-- email="potts_at_[hidden]" -->
<!-- subject="Re: [OMPI users] PGI 8.0-4 doesn't like ompi/mca/op/op.h" -->
<!-- id="49B99641.6020202_at_hpcapplications.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>From:</strong> Mark Potts (<em>potts_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-03-12 19:09:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8415.php">Jeff Squyres: "Re: [OMPI users] PGI 8.0-4 doesn't like ompi/mca/op/op.h"</a>
<li><strong>Previous message:</strong> <a href="8413.php">Jeff Squyres: "Re: [OMPI users] PGI 8.0-4 doesn't like ompi/mca/op/op.h"</a>
<li><strong>In reply to:</strong> <a href="8412.php">George Bosilca: "Re: [OMPI users] PGI 8.0-4 doesn't like ompi/mca/op/op.h"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8415.php">Jeff Squyres: "Re: [OMPI users] PGI 8.0-4 doesn't like ompi/mca/op/op.h"</a>
<li><strong>Reply:</strong> <a href="8415.php">Jeff Squyres: "Re: [OMPI users] PGI 8.0-4 doesn't like ompi/mca/op/op.h"</a>
<li><strong>Reply:</strong> <a href="8424.php">Prentice Bisbal: "Re: [OMPI users] PGI 8.0-4 doesn't like ompi/mca/op/op.h"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
All,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;I don't know PGI's compilers, but is it possible that since &quot;restrict&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;was supposedly introduced as a C99 feature that it is not supported
<br>
&nbsp;&nbsp;&nbsp;&nbsp;by default by their C compiler?  This would explain the wording of
<br>
&nbsp;&nbsp;&nbsp;&nbsp;the error message which indicates interpretation of &quot;restrict&quot; as a
<br>
&nbsp;&nbsp;&nbsp;&nbsp;variable name.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;Perhaps, like gcc, there is a -std=c99 option for the PGI compiler?
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;regards,
<br>
<p>George Bosilca wrote:
<br>
<span class="quotelev1">&gt; Apparently, the PGI compiler (version 8) doesn't recognize restrict as a 
</span><br>
<span class="quotelev1">&gt; keyword in a function prototype if the associated argument is not named. 
</span><br>
<span class="quotelev1">&gt; There is one obvious solution: remove the restrict keyword but I don't 
</span><br>
<span class="quotelev1">&gt; think it's the right one.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Can you try to replace
</span><br>
<span class="quotelev2">&gt;&gt; typedef void (*ompi_op_base_3buff_handler_fn_1_0_0_t)(void *restrict,
</span><br>
<span class="quotelev2">&gt;&gt;                                                      void *restrict,
</span><br>
<span class="quotelev2">&gt;&gt;                                                      void *restrict, 
</span><br>
<span class="quotelev2">&gt;&gt; int *,
</span><br>
<span class="quotelev2">&gt;&gt;                                                      struct 
</span><br>
<span class="quotelev2">&gt;&gt; ompi_datatype_t **,
</span><br>
<span class="quotelev2">&gt;&gt;                                                      struct 
</span><br>
<span class="quotelev2">&gt;&gt; ompi_op_base_module_1_0_0_t *);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; by typedef void (*ompi_op_base_3buff_handler_fn_1_0_0_t)(void *restrict 
</span><br>
<span class="quotelev1">&gt; in1,
</span><br>
<span class="quotelev2">&gt;&gt;                                                      void *restrict in2,
</span><br>
<span class="quotelev2">&gt;&gt;                                                      void *restrict 
</span><br>
<span class="quotelev2">&gt;&gt; out, int *,
</span><br>
<span class="quotelev2">&gt;&gt;                                                      struct 
</span><br>
<span class="quotelev2">&gt;&gt; ompi_datatype_t **,
</span><br>
<span class="quotelev2">&gt;&gt;                                                      struct 
</span><br>
<span class="quotelev2">&gt;&gt; ompi_op_base_module_1_0_0_t *);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt;   george.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Mar 11, 2009, at 15:52 , Mostyn Lewis wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Compiling SVN r20757 with PGI 8.0-4 failed doing ompi_info with
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &quot;../../../.././ompi/mca/op/op.h&quot;, line 264: error: duplicate parameter 
</span><br>
<span class="quotelev2">&gt;&gt; name
</span><br>
<span class="quotelev2">&gt;&gt;                                                        void *restrict,
</span><br>
<span class="quotelev2">&gt;&gt;                                                              ^
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &quot;../../../.././ompi/mca/op/op.h&quot;, line 265: error: duplicate parameter 
</span><br>
<span class="quotelev2">&gt;&gt; name
</span><br>
<span class="quotelev2">&gt;&gt;                                                        void *restrict, 
</span><br>
<span class="quotelev2">&gt;&gt; int *,
</span><br>
<span class="quotelev2">&gt;&gt;                                                              ^
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 2 errors detected in the compilation of 
</span><br>
<span class="quotelev2">&gt;&gt; &quot;../../../.././ompi/tools/ompi_info/components.cc&quot;.
</span><br>
<span class="quotelev2">&gt;&gt; make[2]: *** [components.o] Error 2
</span><br>
<span class="quotelev2">&gt;&gt; make[2]: Leaving directory 
</span><br>
<span class="quotelev2">&gt;&gt; `/tmp/o/openmpi-1.4a1r20757_svn/build/ompi/tools/ompi_info'
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Code is:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /*
</span><br>
<span class="quotelev2">&gt;&gt; * Typedef for 3-buffer (two input and one output) op functions.
</span><br>
<span class="quotelev2">&gt;&gt; */
</span><br>
<span class="quotelev2">&gt;&gt; typedef void (*ompi_op_base_3buff_handler_fn_1_0_0_t)(void *restrict,
</span><br>
<span class="quotelev2">&gt;&gt;                                                      void *restrict,
</span><br>
<span class="quotelev2">&gt;&gt;                                                      void *restrict, 
</span><br>
<span class="quotelev2">&gt;&gt; int *,
</span><br>
<span class="quotelev2">&gt;&gt;                                                      struct 
</span><br>
<span class="quotelev2">&gt;&gt; ompi_datatype_t **,
</span><br>
<span class="quotelev2">&gt;&gt;                                                      struct 
</span><br>
<span class="quotelev2">&gt;&gt; ompi_op_base_module_1_0_0_t *);
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; DM
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
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><pre>
-- 
***********************************
 &gt;&gt; Mark J. Potts, PhD
 &gt;&gt;
 &gt;&gt; HPC Applications Inc.
 &gt;&gt; phone: 410-992-8360 Bus
 &gt;&gt;        410-313-9318 Home
 &gt;&gt;        443-418-4375 Cell
 &gt;&gt; email: potts_at_[hidden]
 &gt;&gt;        potts_at_[hidden]
***********************************
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8415.php">Jeff Squyres: "Re: [OMPI users] PGI 8.0-4 doesn't like ompi/mca/op/op.h"</a>
<li><strong>Previous message:</strong> <a href="8413.php">Jeff Squyres: "Re: [OMPI users] PGI 8.0-4 doesn't like ompi/mca/op/op.h"</a>
<li><strong>In reply to:</strong> <a href="8412.php">George Bosilca: "Re: [OMPI users] PGI 8.0-4 doesn't like ompi/mca/op/op.h"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8415.php">Jeff Squyres: "Re: [OMPI users] PGI 8.0-4 doesn't like ompi/mca/op/op.h"</a>
<li><strong>Reply:</strong> <a href="8415.php">Jeff Squyres: "Re: [OMPI users] PGI 8.0-4 doesn't like ompi/mca/op/op.h"</a>
<li><strong>Reply:</strong> <a href="8424.php">Prentice Bisbal: "Re: [OMPI users] PGI 8.0-4 doesn't like ompi/mca/op/op.h"</a>
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

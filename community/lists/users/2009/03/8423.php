<?
$subject_val = "Re: [OMPI users] PGI 8.0-4 doesn't like ompi/mca/op/op.h";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Mar 13 09:12:00 2009" -->
<!-- isoreceived="20090313131200" -->
<!-- sent="Fri, 13 Mar 2009 09:11:55 -0400" -->
<!-- isosent="20090313131155" -->
<!-- name="Prentice Bisbal" -->
<!-- email="prentice_at_[hidden]" -->
<!-- subject="Re: [OMPI users] PGI 8.0-4 doesn't like ompi/mca/op/op.h" -->
<!-- id="49BA5B9B.7060902_at_ias.edu" -->
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
<strong>From:</strong> Prentice Bisbal (<em>prentice_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-03-13 09:11:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8424.php">Prentice Bisbal: "Re: [OMPI users] PGI 8.0-4 doesn't like ompi/mca/op/op.h"</a>
<li><strong>Previous message:</strong> <a href="8422.php">Ricardo Fern&#225;ndez-Perea: "[OMPI users] Xgrid performance (it choose tcp when it should choose sm)"</a>
<li><strong>In reply to:</strong> <a href="8412.php">George Bosilca: "Re: [OMPI users] PGI 8.0-4 doesn't like ompi/mca/op/op.h"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8441.php">Terry Dontje: "Re: [OMPI users] PGI 8.0-4 doesn't like ompi/mca/op/op.h"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I was able to compile 1.3.0 with PGI 8.0-3 on January 27th. If that
<br>
helps anyone.
<br>
<p><pre>
--
Prentice
George Bosilca wrote:
&gt; Apparently, the PGI compiler (version 8) doesn't recognize restrict as a
&gt; keyword in a function prototype if the associated argument is not named.
&gt; There is one obvious solution: remove the restrict keyword but I don't
&gt; think it's the right one.
&gt; 
&gt; Can you try to replace
&gt;&gt; typedef void (*ompi_op_base_3buff_handler_fn_1_0_0_t)(void *restrict,
&gt;&gt;                                                      void *restrict,
&gt;&gt;                                                      void *restrict,
&gt;&gt; int *,
&gt;&gt;                                                      struct
&gt;&gt; ompi_datatype_t **,
&gt;&gt;                                                      struct
&gt;&gt; ompi_op_base_module_1_0_0_t *);
&gt; 
&gt; by typedef void (*ompi_op_base_3buff_handler_fn_1_0_0_t)(void *restrict
&gt; in1,
&gt;&gt;                                                      void *restrict in2,
&gt;&gt;                                                      void *restrict
&gt;&gt; out, int *,
&gt;&gt;                                                      struct
&gt;&gt; ompi_datatype_t **,
&gt;&gt;                                                      struct
&gt;&gt; ompi_op_base_module_1_0_0_t *);
&gt; 
&gt; Thanks,
&gt;   george.
&gt; 
&gt; On Mar 11, 2009, at 15:52 , Mostyn Lewis wrote:
&gt; 
&gt;&gt; Compiling SVN r20757 with PGI 8.0-4 failed doing ompi_info with
&gt;&gt;
&gt;&gt; &quot;../../../.././ompi/mca/op/op.h&quot;, line 264: error: duplicate parameter
&gt;&gt; name
&gt;&gt;                                                        void *restrict,
&gt;&gt;                                                              ^
&gt;&gt;
&gt;&gt; &quot;../../../.././ompi/mca/op/op.h&quot;, line 265: error: duplicate parameter
&gt;&gt; name
&gt;&gt;                                                        void *restrict,
&gt;&gt; int *,
&gt;&gt;                                                              ^
&gt;&gt;
&gt;&gt; 2 errors detected in the compilation of
&gt;&gt; &quot;../../../.././ompi/tools/ompi_info/components.cc&quot;.
&gt;&gt; make[2]: *** [components.o] Error 2
&gt;&gt; make[2]: Leaving directory
&gt;&gt; `/tmp/o/openmpi-1.4a1r20757_svn/build/ompi/tools/ompi_info'
&gt;&gt;
&gt;&gt; Code is:
&gt;&gt;
&gt;&gt; /*
&gt;&gt; * Typedef for 3-buffer (two input and one output) op functions.
&gt;&gt; */
&gt;&gt; typedef void (*ompi_op_base_3buff_handler_fn_1_0_0_t)(void *restrict,
&gt;&gt;                                                      void *restrict,
&gt;&gt;                                                      void *restrict,
&gt;&gt; int *,
&gt;&gt;                                                      struct
&gt;&gt; ompi_datatype_t **,
&gt;&gt;                                                      struct
&gt;&gt; ompi_op_base_module_1_0_0_t *);
&gt;&gt;
&gt;&gt; DM
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8424.php">Prentice Bisbal: "Re: [OMPI users] PGI 8.0-4 doesn't like ompi/mca/op/op.h"</a>
<li><strong>Previous message:</strong> <a href="8422.php">Ricardo Fern&#225;ndez-Perea: "[OMPI users] Xgrid performance (it choose tcp when it should choose sm)"</a>
<li><strong>In reply to:</strong> <a href="8412.php">George Bosilca: "Re: [OMPI users] PGI 8.0-4 doesn't like ompi/mca/op/op.h"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8441.php">Terry Dontje: "Re: [OMPI users] PGI 8.0-4 doesn't like ompi/mca/op/op.h"</a>
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

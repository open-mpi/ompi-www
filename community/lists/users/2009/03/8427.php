<?
$subject_val = "Re: [OMPI users] PGI 8.0-4 doesn't like ompi/mca/op/op.h";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Mar 13 15:07:20 2009" -->
<!-- isoreceived="20090313190720" -->
<!-- sent="Fri, 13 Mar 2009 12:07:05 -0700 (PDT)" -->
<!-- isosent="20090313190705" -->
<!-- name="Mostyn Lewis" -->
<!-- email="Mostyn.Lewis_at_[hidden]" -->
<!-- subject="Re: [OMPI users] PGI 8.0-4 doesn't like ompi/mca/op/op.h" -->
<!-- id="Pine.GSO.4.64.0903131200500.3619_at_aragorn.brc.West.Sun.COM" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="369B8565-2D9E-4B94-AE4C-130CA2B84472_at_cisco.com" -->
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
<strong>From:</strong> Mostyn Lewis (<em>Mostyn.Lewis_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-03-13 15:07:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8428.php">Jeff Squyres: "Re: [OMPI users] PGI 8.0-4 doesn't like ompi/mca/op/op.h"</a>
<li><strong>Previous message:</strong> <a href="8426.php">Amos Leffler: "Re: [OMPI users] Installation Problems with Openmpi-1.2.9"</a>
<li><strong>In reply to:</strong> <a href="8413.php">Jeff Squyres: "Re: [OMPI users] PGI 8.0-4 doesn't like ompi/mca/op/op.h"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8428.php">Jeff Squyres: "Re: [OMPI users] PGI 8.0-4 doesn't like ompi/mca/op/op.h"</a>
<li><strong>Reply:</strong> <a href="8428.php">Jeff Squyres: "Re: [OMPI users] PGI 8.0-4 doesn't like ompi/mca/op/op.h"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Well George's syntax didn't work, either:
<br>
<p>&quot;../../../.././ompi/mca/op/op.h&quot;, line 263: error: expected a &quot;)&quot;
<br>
&nbsp;&nbsp;&nbsp;typedef void (*ompi_op_base_3buff_handler_fn_1_0_0_t)(void *restrict in1,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;^
<br>
<p>&quot;../../../.././ompi/mca/op/op.h&quot;, line 267: warning: parsing restarts here
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;after previous syntax error
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;struct ompi_op_base_module_1_0_0_t *);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;^
<br>
<p>1 error detected in the compilation of &quot;../../../.././ompi/tools/ompi_info/components.cc&quot;.
<br>
make[2]: *** [components.o] Error 2
<br>
<p>Using -c99 as a compiler flag made no difference, using the original source.
<br>
Using -c89 as a compiler flag brought in a ton of other errors.
<br>
<p>I'll be sending PGI a bug report to see what they say.
<br>
<p>DM
<br>
<p><p>On Thu, 12 Mar 2009, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; Mostyn -- can you try this and see if it works with the PGI 8.0 compiler?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Mar 12, 2009, at 6:20 PM, George Bosilca wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Apparently, the PGI compiler (version 8) doesn't recognize restrict as
</span><br>
<span class="quotelev2">&gt;&gt; a keyword in a function prototype if the associated argument is not
</span><br>
<span class="quotelev2">&gt;&gt; named. There is one obvious solution: remove the restrict keyword but
</span><br>
<span class="quotelev2">&gt;&gt; I don't think it's the right one.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Can you try to replace
</span><br>
<span class="quotelev3">&gt;&gt;&gt; typedef void (*ompi_op_base_3buff_handler_fn_1_0_0_t)(void *restrict,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                                      void *restrict,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                                      void *restrict,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; int *,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                                      struct
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ompi_datatype_t **,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                                      struct
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ompi_op_base_module_1_0_0_t *);
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; by typedef void (*ompi_op_base_3buff_handler_fn_1_0_0_t)(void
</span><br>
<span class="quotelev2">&gt;&gt; *restrict in1,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                                      void *restrict
</span><br>
<span class="quotelev3">&gt;&gt;&gt; in2,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                                      void *restrict
</span><br>
<span class="quotelev3">&gt;&gt;&gt; out, int *,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                                      struct
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ompi_datatype_t **,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                                      struct
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ompi_op_base_module_1_0_0_t *);
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Thanks,
</span><br>
<span class="quotelev2">&gt;&gt;   george.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Mar 11, 2009, at 15:52 , Mostyn Lewis wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Compiling SVN r20757 with PGI 8.0-4 failed doing ompi_info with
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &quot;../../../.././ompi/mca/op/op.h&quot;, line 264: error: duplicate
</span><br>
<span class="quotelev3">&gt;&gt;&gt; parameter name
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                                        void *restrict,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                                              ^
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &quot;../../../.././ompi/mca/op/op.h&quot;, line 265: error: duplicate
</span><br>
<span class="quotelev3">&gt;&gt;&gt; parameter name
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                                        void
</span><br>
<span class="quotelev3">&gt;&gt;&gt; *restrict, int *,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                                              ^
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 2 errors detected in the compilation of &quot;../../../.././ompi/tools/
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ompi_info/components.cc&quot;.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; make[2]: *** [components.o] Error 2
</span><br>
<span class="quotelev3">&gt;&gt;&gt; make[2]: Leaving directory `/tmp/o/openmpi-1.4a1r20757_svn/build/
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ompi/tools/ompi_info'
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Code is:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /*
</span><br>
<span class="quotelev3">&gt;&gt;&gt; * Typedef for 3-buffer (two input and one output) op functions.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; */
</span><br>
<span class="quotelev3">&gt;&gt;&gt; typedef void (*ompi_op_base_3buff_handler_fn_1_0_0_t)(void *restrict,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                                      void *restrict,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                                      void *restrict,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; int *,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                                      struct
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ompi_datatype_t **,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                                      struct
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ompi_op_base_module_1_0_0_t *);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; DM
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; Cisco Systems
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8428.php">Jeff Squyres: "Re: [OMPI users] PGI 8.0-4 doesn't like ompi/mca/op/op.h"</a>
<li><strong>Previous message:</strong> <a href="8426.php">Amos Leffler: "Re: [OMPI users] Installation Problems with Openmpi-1.2.9"</a>
<li><strong>In reply to:</strong> <a href="8413.php">Jeff Squyres: "Re: [OMPI users] PGI 8.0-4 doesn't like ompi/mca/op/op.h"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8428.php">Jeff Squyres: "Re: [OMPI users] PGI 8.0-4 doesn't like ompi/mca/op/op.h"</a>
<li><strong>Reply:</strong> <a href="8428.php">Jeff Squyres: "Re: [OMPI users] PGI 8.0-4 doesn't like ompi/mca/op/op.h"</a>
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

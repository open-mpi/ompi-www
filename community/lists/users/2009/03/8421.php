<?
$subject_val = "Re: [OMPI users] PGI 8.0-4 doesn't like ompi/mca/op/op.h";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Mar 13 07:53:12 2009" -->
<!-- isoreceived="20090313115312" -->
<!-- sent="Fri, 13 Mar 2009 07:53:06 -0400 (EDT)" -->
<!-- isosent="20090313115306" -->
<!-- name="Andrew J Caird" -->
<!-- email="acaird_at_[hidden]" -->
<!-- subject="Re: [OMPI users] PGI 8.0-4 doesn't like ompi/mca/op/op.h" -->
<!-- id="Pine.LNX.4.64L.0903130751280.27582_at_flyte.engin.umich.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="68AC6B38-AA58-4C37-84F6-A1AF65AD1AD8_at_cisco.com" -->
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
<strong>From:</strong> Andrew J Caird (<em>acaird_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-03-13 07:53:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8422.php">Ricardo Fernández-Perea: "[OMPI users] Xgrid performance (it choose tcp when it should choose sm)"</a>
<li><strong>Previous message:</strong> <a href="8420.php">Raymond Wan: "[OMPI users] Can't start program across network"</a>
<li><strong>In reply to:</strong> <a href="8415.php">Jeff Squyres: "Re: [OMPI users] PGI 8.0-4 doesn't like ompi/mca/op/op.h"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8424.php">Prentice Bisbal: "Re: [OMPI users] PGI 8.0-4 doesn't like ompi/mca/op/op.h"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
FWIW, It compiles with PGI 7.2 on RHEL4U7
<br>
<p>[acaird_at_nyx-login1 ~]$ ompi_info  | grep &quot;compiler abs&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;C compiler absolute: /usr/caen/pgi-7.2/linux86-64/7.2-1/bin/pgcc
<br>
&nbsp;&nbsp;&nbsp;&nbsp;C++ compiler absolute: /usr/caen/pgi-7.2/linux86-64/7.2-1/bin/pgCC
<br>
&nbsp;&nbsp;&nbsp;Fortran77 compiler abs: /usr/caen/pgi-7.2/linux86-64/7.2-1/bin/pgf77
<br>
&nbsp;&nbsp;&nbsp;Fortran90 compiler abs: /usr/caen/pgi-7.2/linux86-64/7.2-1/bin/pgf90
<br>
[acaird_at_nyx-login1 ~]$ /usr/caen/pgi-7.2/linux86-64/7.2-1/bin/pgf90 -V
<br>
<p>pgf90 7.2-1 64-bit target on x86-64 Linux -tp k8-64e
<br>
Copyright 1989-2000, The Portland Group, Inc.  All Rights Reserved.
<br>
Copyright 2000-2008, STMicroelectronics, Inc.  All Rights Reserved.
<br>
[acaird_at_nyx-login1 ~]$ cat /etc/redhat-release
<br>
Red Hat Enterprise Linux WS release 4 (Nahant Update 7)
<br>
[acaird_at_nyx-login1 ~]$
<br>
<p><p><p>On Thu, 12 Mar 2009, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; It's odd because PGI 7.0 and 7.1 compile OMPI just fine (don't know
</span><br>
<span class="quotelev1">&gt; about PGI 7.2).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Mar 12, 2009, at 7:09 PM, Mark Potts wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; All,
</span><br>
<span class="quotelev2">&gt;&gt;     I don't know PGI's compilers, but is it possible that since
</span><br>
<span class="quotelev2">&gt;&gt; &quot;restrict&quot;
</span><br>
<span class="quotelev2">&gt;&gt;     was supposedly introduced as a C99 feature that it is not
</span><br>
<span class="quotelev2">&gt;&gt; supported
</span><br>
<span class="quotelev2">&gt;&gt;     by default by their C compiler?  This would explain the wording of
</span><br>
<span class="quotelev2">&gt;&gt;     the error message which indicates interpretation of &quot;restrict&quot;
</span><br>
<span class="quotelev2">&gt;&gt; as a
</span><br>
<span class="quotelev2">&gt;&gt;     variable name.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     Perhaps, like gcc, there is a -std=c99 option for the PGI
</span><br>
<span class="quotelev2">&gt;&gt; compiler?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;          regards,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; George Bosilca wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Apparently, the PGI compiler (version 8) doesn't recognize
</span><br>
<span class="quotelev2">&gt;&gt; restrict as a
</span><br>
<span class="quotelev3">&gt;&gt;&gt; keyword in a function prototype if the associated argument is not
</span><br>
<span class="quotelev2">&gt;&gt; named.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; There is one obvious solution: remove the restrict keyword but I
</span><br>
<span class="quotelev2">&gt;&gt; don't
</span><br>
<span class="quotelev3">&gt;&gt;&gt; think it's the right one.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Can you try to replace
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; typedef void (*ompi_op_base_3buff_handler_fn_1_0_0_t)(void
</span><br>
<span class="quotelev2">&gt;&gt; *restrict,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                                                      void
</span><br>
<span class="quotelev2">&gt;&gt; *restrict,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                                                      void
</span><br>
<span class="quotelev2">&gt;&gt; *restrict,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; int *,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                                                      struct
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ompi_datatype_t **,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                                                      struct
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ompi_op_base_module_1_0_0_t *);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; by typedef void (*ompi_op_base_3buff_handler_fn_1_0_0_t)(void
</span><br>
<span class="quotelev2">&gt;&gt; *restrict
</span><br>
<span class="quotelev3">&gt;&gt;&gt; in1,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                                                      void
</span><br>
<span class="quotelev2">&gt;&gt; *restrict in2,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                                                      void *restrict
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; out, int *,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                                                      struct
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ompi_datatype_t **,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                                                      struct
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ompi_op_base_module_1_0_0_t *);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   george.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Mar 11, 2009, at 15:52 , Mostyn Lewis wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Compiling SVN r20757 with PGI 8.0-4 failed doing ompi_info with
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &quot;../../../.././ompi/mca/op/op.h&quot;, line 264: error: duplicate
</span><br>
<span class="quotelev2">&gt;&gt; parameter
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; name
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                                                        void
</span><br>
<span class="quotelev2">&gt;&gt; *restrict,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                                                              ^
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &quot;../../../.././ompi/mca/op/op.h&quot;, line 265: error: duplicate
</span><br>
<span class="quotelev2">&gt;&gt; parameter
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; name
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                                                        void
</span><br>
<span class="quotelev2">&gt;&gt; *restrict,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; int *,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                                                              ^
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 2 errors detected in the compilation of
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &quot;../../../.././ompi/tools/ompi_info/components.cc&quot;.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; make[2]: *** [components.o] Error 2
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; make[2]: Leaving directory
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; `/tmp/o/openmpi-1.4a1r20757_svn/build/ompi/tools/ompi_info'
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Code is:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /*
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; * Typedef for 3-buffer (two input and one output) op functions.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; */
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; typedef void (*ompi_op_base_3buff_handler_fn_1_0_0_t)(void
</span><br>
<span class="quotelev2">&gt;&gt; *restrict,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                                                      void
</span><br>
<span class="quotelev2">&gt;&gt; *restrict,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                                                      void
</span><br>
<span class="quotelev2">&gt;&gt; *restrict,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; int *,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                                                      struct
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ompi_datatype_t **,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                                                      struct
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ompi_op_base_module_1_0_0_t *);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; DM
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
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
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; ***********************************
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; Mark J. Potts, PhD
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; HPC Applications Inc.
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; phone: 410-992-8360 Bus
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;        410-313-9318 Home
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;        443-418-4375 Cell
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; email: potts_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;        potts_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; ***********************************
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
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8422.php">Ricardo Fernández-Perea: "[OMPI users] Xgrid performance (it choose tcp when it should choose sm)"</a>
<li><strong>Previous message:</strong> <a href="8420.php">Raymond Wan: "[OMPI users] Can't start program across network"</a>
<li><strong>In reply to:</strong> <a href="8415.php">Jeff Squyres: "Re: [OMPI users] PGI 8.0-4 doesn't like ompi/mca/op/op.h"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8424.php">Prentice Bisbal: "Re: [OMPI users] PGI 8.0-4 doesn't like ompi/mca/op/op.h"</a>
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

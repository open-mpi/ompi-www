<?
$subject_val = "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r24830";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Jul  9 07:25:01 2011" -->
<!-- isoreceived="20110709112501" -->
<!-- sent="Sat, 9 Jul 2011 07:24:54 -0400" -->
<!-- isosent="20110709112454" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r24830" -->
<!-- id="429CC10D-080C-4032-BB6B-0E1069401A33_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4E1085BC.2010402_at_dev.mellanox.co.il" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r24830<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-07-09 07:24:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9490.php">Jeff Squyres: "Re: [OMPI devel] opal_init/finalize counter --&gt; boolean"</a>
<li><strong>Previous message:</strong> <a href="9488.php">Jeff Squyres: "Re: [OMPI devel] [OMPI users] huge VmRSS on rank 0 after MPI_Init when using &quot;btl_openib_receive_queues&quot; option"</a>
<li><strong>In reply to:</strong> <a href="9464.php">Yevgeny Kliteynik: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r24830"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9514.php">Yevgeny Kliteynik: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r24830"</a>
<li><strong>Reply:</strong> <a href="9514.php">Yevgeny Kliteynik: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r24830"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'm still getting warnings about OMPI_ENABLE_DYNAMIC_SL not being defined, even though I see this in my configure output:
<br>
<p>checking if can use dynamic SL support... yes
<br>
<p>That's why I wanted that macro *always* defined by the m4 (to either 0 or 1) -- not just defining it or not.  This is one of the OMPI coding guidelines: always define logical preprocessor macros to 0 or 1, not define-them-or-not.  If you always define them, then you can get preprocessor warnings if you misspell a macro name.  E.g.:
<br>
<p>#if MISSPELLED_MACRO_NAME 
<br>
<p>will return a warning because the macro doesn't exist.  But if you just define-the-macro-or-not and use
<br>
<p>#ifdef MISSPELLED_MACRO_NAME
<br>
<p>then you won't get a warning and it may be a difficult-to-find bug that you misspelled the macro name in the code.
<br>
<p>Also, note that the 4-argument version of AC_ARG_ENABLE isn't really necessary:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;AC_ARG_ENABLE([openib-dynamic-sl],
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[AC_HELP_STRING([--enable-openib-dynamic-sl],
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[Enable openib BTL to query Subnet Manager for IB SL (default: enabled)])],
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[enable_openib_dynamic_sl=&quot;$enableval&quot;],
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[enable_openib_dynamic_sl=&quot;not_provided&quot;])
<br>
<p>You can shorten it to:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;AC_ARG_ENABLE([openib-dynamic-sl],
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[AC_HELP_STRING([--enable-openib-dynamic-sl],
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[Enable openib BTL to query Subnet Manager for IB SL (default: enabled)])])
<br>
<p>because $enable_openib_dynamic_sl will automatically be set to &quot;yes&quot; (when --enable-openib-dynamic-sl is used), &quot;no&quot; (when --disable-openib-dynamic-sl is used), or &quot;&quot; (when neither is used).  So there's no need to manually set this variable in args 3 and 4 -- it's set for you automatically.
<br>
<p>I know we have some of the older 4-arg forms in ompi_check_openib.m4, but they're just old and haven't been updated.  You probably don't want to introduce *new* 4-arg usage.
<br>
<p>Finally, are you sure that infiniband/complib/cl_types_osd.h exists on all platforms?  (e.g., Solaris)  I know you said you don't have any Solaris machines to test with, but you should ping Oracle directly for some testing -- Terry might not be paying attention to this specific thread...
<br>
<p>-----
<br>
<p>Here's the warnings I'm seeing -- did you remove the AC_DEFINE for OMPI_ENABLE_DYNAMIC_SL altogether by accident?
<br>
<p>[4:13] svbu-mpi:~/svn/ompi5/ompi/mca/btl/openib % make
<br>
&nbsp;&nbsp;CC     btl_openib.lo
<br>
In file included from btl_openib_ini.h:16:0,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;from btl_openib.c:47:
<br>
btl_openib.h:219:6: warning: &quot;OMPI_ENABLE_DYNAMIC_SL&quot; is not defined
<br>
&nbsp;&nbsp;CC     btl_openib_component.lo
<br>
In file included from btl_openib_component.c:80:0:
<br>
btl_openib.h:219:6: warning: &quot;OMPI_ENABLE_DYNAMIC_SL&quot; is not defined
<br>
&nbsp;&nbsp;CC     btl_openib_endpoint.lo
<br>
In file included from btl_openib_endpoint.h:32:0,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;from btl_openib_endpoint.c:46:
<br>
btl_openib.h:219:6: warning: &quot;OMPI_ENABLE_DYNAMIC_SL&quot; is not defined
<br>
&nbsp;&nbsp;CC     btl_openib_frag.lo
<br>
In file included from btl_openib_frag.c:22:0:
<br>
btl_openib.h:219:6: warning: &quot;OMPI_ENABLE_DYNAMIC_SL&quot; is not defined
<br>
&nbsp;&nbsp;CC     btl_openib_proc.lo
<br>
In file included from btl_openib_proc.c:27:0:
<br>
btl_openib.h:219:6: warning: &quot;OMPI_ENABLE_DYNAMIC_SL&quot; is not defined
<br>
&nbsp;&nbsp;CC     btl_openib_lex.lo
<br>
btl_openib_lex.c: In function 'yy_get_next_buffer':
<br>
btl_openib_lex.c:1229:3: warning: comparison between signed and unsigned integer expressions
<br>
btl_openib_lex.l: At top level:
<br>
btl_openib_lex.c:1323:17: warning: 'yyunput' defined but not used
<br>
btl_openib_lex.c:1364:16: warning: 'input' defined but not used
<br>
&nbsp;&nbsp;CC     btl_openib_mca.lo
<br>
In file included from btl_openib_mca.c:33:0:
<br>
btl_openib.h:219:6: warning: &quot;OMPI_ENABLE_DYNAMIC_SL&quot; is not defined
<br>
btl_openib_mca.c: In function 'btl_openib_register_mca_params':
<br>
btl_openib_mca.c:401:6: warning: &quot;OMPI_ENABLE_DYNAMIC_SL&quot; is not defined
<br>
&nbsp;&nbsp;CC     btl_openib_ini.lo
<br>
In file included from btl_openib_ini.c:35:0:
<br>
btl_openib.h:219:6: warning: &quot;OMPI_ENABLE_DYNAMIC_SL&quot; is not defined
<br>
&nbsp;&nbsp;CC     btl_openib_async.lo
<br>
In file included from btl_openib_async.c:26:0:
<br>
btl_openib.h:219:6: warning: &quot;OMPI_ENABLE_DYNAMIC_SL&quot; is not defined
<br>
&nbsp;&nbsp;CC     btl_openib_xrc.lo
<br>
In file included from btl_openib_xrc.h:14:0,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;from btl_openib_xrc.c:23:
<br>
btl_openib.h:219:6: warning: &quot;OMPI_ENABLE_DYNAMIC_SL&quot; is not defined
<br>
&nbsp;&nbsp;CC     btl_openib_fd.lo
<br>
&nbsp;&nbsp;CC     btl_openib_ip.lo
<br>
In file included from btl_openib_endpoint.h:32:0,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;from btl_openib_ip.c:30:
<br>
btl_openib.h:219:6: warning: &quot;OMPI_ENABLE_DYNAMIC_SL&quot; is not defined
<br>
&nbsp;&nbsp;CC     connect/btl_openib_connect_base.lo
<br>
In file included from connect/btl_openib_connect_base.c:13:0:
<br>
./btl_openib.h:219:6: warning: &quot;OMPI_ENABLE_DYNAMIC_SL&quot; is not defined
<br>
&nbsp;&nbsp;CC     connect/btl_openib_connect_oob.lo
<br>
In file included from connect/btl_openib_connect_oob.c:41:0:
<br>
./btl_openib.h:219:6: warning: &quot;OMPI_ENABLE_DYNAMIC_SL&quot; is not defined
<br>
connect/btl_openib_connect_oob.c:47:6: warning: &quot;OMPI_ENABLE_DYNAMIC_SL&quot; is not defined
<br>
connect/btl_openib_connect_oob.c:65:6: warning: &quot;OMPI_ENABLE_DYNAMIC_SL&quot; is not defined
<br>
connect/btl_openib_connect_oob.c:115:6: warning: &quot;OMPI_ENABLE_DYNAMIC_SL&quot; is not defined
<br>
connect/btl_openib_connect_oob.c:271:6: warning: &quot;OMPI_ENABLE_DYNAMIC_SL&quot; is not defined
<br>
connect/btl_openib_connect_oob.c: In function 'oob_component_finalize':
<br>
connect/btl_openib_connect_oob.c:307:7: warning: &quot;OMPI_ENABLE_DYNAMIC_SL&quot; is not defined
<br>
connect/btl_openib_connect_oob.c: In function 'qp_connect_all':
<br>
connect/btl_openib_connect_oob.c:396:6: warning: &quot;OMPI_ENABLE_DYNAMIC_SL&quot; is not defined
<br>
connect/btl_openib_connect_oob.c: At top level:
<br>
connect/btl_openib_connect_oob.c:1011:6: warning: &quot;OMPI_ENABLE_DYNAMIC_SL&quot; is not defined
<br>
&nbsp;&nbsp;CC     connect/btl_openib_connect_empty.lo
<br>
In file included from connect/btl_openib_connect_empty.c:13:0:
<br>
./btl_openib.h:219:6: warning: &quot;OMPI_ENABLE_DYNAMIC_SL&quot; is not defined
<br>
&nbsp;&nbsp;CC     connect/btl_openib_connect_xoob.lo
<br>
In file included from connect/btl_openib_connect_xoob.c:30:0:
<br>
./btl_openib.h:219:6: warning: &quot;OMPI_ENABLE_DYNAMIC_SL&quot; is not defined
<br>
&nbsp;&nbsp;CC     connect/btl_openib_connect_rdmacm.lo
<br>
In file included from ./btl_openib_proc.h:26:0,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;from connect/btl_openib_connect_rdmacm.c:53:
<br>
./btl_openib.h:219:6: warning: &quot;OMPI_ENABLE_DYNAMIC_SL&quot; is not defined
<br>
&nbsp;&nbsp;CCLD   libmca_btl_openib.la
<br>
[4:13] svbu-mpi:~/svn/ompi5/ompi/mca/btl/openib % cd
<br>
<p><p><p>On Jul 3, 2011, at 11:07 AM, Yevgeny Kliteynik wrote:
<br>
<p><span class="quotelev1">&gt; Hi Jeff,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 02-Jul-11 11:52 PM, Jeff Squyres (jsquyres) wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Were all the issueswith this code fixed?  There were m4 issues and solaris issues, IIRC.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I took all the fixes I could find based on the trac:
</span><br>
<span class="quotelev1">&gt; &quot;Be sure also to look at r24196; Josh committed a
</span><br>
<span class="quotelev1">&gt;  bunch of warning fixes for you after r24915&quot;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I also removed all the libibmad dependencies and unneded macros,
</span><br>
<span class="quotelev1">&gt; so I hope that this is OK. However, I don't have any Solaris machine
</span><br>
<span class="quotelev1">&gt; to try this to make sure that there are no issues.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The only complaint w.r.t. Solaris that I could find was Terry's
</span><br>
<span class="quotelev1">&gt; mail from last week, but it turned out to be a different problem.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Are there any other problems that I'm not aware of?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- YK
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Sent from my phone. No type good.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Jun 28, 2011, at 9:28 AM, &quot;kliteyn_at_[hidden]&quot;&lt;kliteyn_at_[hidden]&gt;  wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Author: kliteyn
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Date: 2011-06-28 10:28:29 EDT (Tue, 28 Jun 2011)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; New Revision: 24830
</span><br>
<span class="quotelev3">&gt;&gt;&gt; URL: <a href="https://svn.open-mpi.org/trac/ompi/changeset/24830">https://svn.open-mpi.org/trac/ompi/changeset/24830</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Log:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Supporting dynamic SL (#2674)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; - Added enable/disable configuration parameter for dynamic SL
</span><br>
<span class="quotelev3">&gt;&gt;&gt; - All the dynamic SL code is conditionalized
</span><br>
<span class="quotelev3">&gt;&gt;&gt; - Removed libibmad dependency
</span><br>
<span class="quotelev3">&gt;&gt;&gt; - Using only one include - ib_types.h (part of opensm-devel package)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; - Removed all the macro and data types definitions, using the
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   existing definitions from ib_types.h instead
</span><br>
<span class="quotelev3">&gt;&gt;&gt; - general cleaning here and there
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The async mode is not implemented yet - stay tuned...
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Text files modified:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   trunk/ompi/config/ompi_check_openib.m4                     |    38 ++++
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   trunk/ompi/mca/btl/openib/btl_openib.h                     |     5
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   trunk/ompi/mca/btl/openib/btl_openib_mca.c                 |    10
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   trunk/ompi/mca/btl/openib/connect/btl_openib_connect_oob.c |   309 +++++++++++++++++----------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   4 files changed, 182 insertions(+), 180 deletions(-)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Modified: trunk/ompi/config/ompi_check_openib.m4
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ==============================================================================
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --- trunk/ompi/config/ompi_check_openib.m4    (original)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +++ trunk/ompi/config/ompi_check_openib.m4    2011-06-28 10:28:29 EDT (Tue, 28 Jun 2011)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; @@ -155,11 +155,21 @@
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                      [$ompi_cv_func_ibv_create_cq_args],
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                      [Number of arguments to ibv_create_cq])])])
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +    #
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +    # OpenIB dynamic SL
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +    #
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +    AC_ARG_ENABLE([openib-dynamic-sl],
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +        [AC_HELP_STRING([--enable-openib-dynamic-sl],
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +                        [Enable openib BTL to query Subnet Manager for IB SL (default: enabled)])],
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +        [enable_openib_dynamic_sl=&quot;$enableval&quot;],
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +        [enable_openib_dynamic_sl=&quot;yes&quot;])
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     # Set these up so that we can do an AC_DEFINE below
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     # (unconditionally)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     $1_have_xrc=0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     $1_have_rdmacm=0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     $1_have_ibcm=0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +    $1_have_dynamic_sl=0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     # If we have the openib stuff available, find out what we've got
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     AS_IF([test &quot;$ompi_check_openib_happy&quot; = &quot;yes&quot;],
</span><br>
<span class="quotelev3">&gt;&gt;&gt; @@ -176,6 +186,19 @@
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                AC_CHECK_FUNCS([ibv_create_xrc_rcv_qp], [$1_have_xrc=1])
</span><br>
<span class="quotelev3">&gt;&gt;&gt;            fi
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +           if test &quot;$enable_openib_dynamic_sl&quot; = &quot;yes&quot;; then
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +               # We need ib_types.h file, which is installed with opensm-devel
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +               # package. However, ib_types.h has a bad include directive,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +               # which will cause AC_CHECK_HEADER to fail.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +               # So instead, we will look for another file that is also
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +               # installed as part of opensm-devel package and included in
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +               # ib_types.h, but it doesn't include any other IB-related files.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +               AC_CHECK_HEADER([infiniband/complib/cl_types_osd.h],
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +                               [$1_have_dynamic_sl=1],
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +                               [AC_MSG_ERROR([opensm-devel package not found - please install it or disable dynamic SL support with \&quot;--disable-openib-dynamic-sl\&quot;])],
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +                               [])
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +           fi
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +
</span><br>
<span class="quotelev3">&gt;&gt;&gt;            # Do we have a recent enough RDMA CM?  Need to have the
</span><br>
<span class="quotelev3">&gt;&gt;&gt;            # rdma_get_peer_addr (inline) function (originally appeared
</span><br>
<span class="quotelev3">&gt;&gt;&gt;            # in OFED v1.3).
</span><br>
<span class="quotelev3">&gt;&gt;&gt; @@ -244,6 +267,15 @@
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     else
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         AC_MSG_RESULT([no])
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     fi
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +    AC_MSG_CHECKING([if dynamic SL is enabled])
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +    AC_DEFINE_UNQUOTED([OMPI_ENABLE_DYNAMIC_SL], [$$1_have_dynamic_sl],
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +        [Enable features required for dynamic SL support])
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +    if test &quot;1&quot; = &quot;$$1_have_dynamic_sl&quot;; then
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +        AC_MSG_RESULT([yes])
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +    else
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +        AC_MSG_RESULT([no])
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +    fi
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     AC_MSG_CHECKING([if OpenFabrics RDMACM support is enabled])
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     AC_DEFINE_UNQUOTED([OMPI_HAVE_RDMACM], [$$1_have_rdmacm],
</span><br>
<span class="quotelev3">&gt;&gt;&gt; @@ -267,7 +299,11 @@
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         AC_MSG_RESULT([no])
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     fi
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -    CPPFLAGS=&quot;$ompi_check_openib_$1_save_CPPFLAGS&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +    AS_IF([test -z &quot;$ompi_check_openib_dir&quot;],
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +          [openib_include_dir=&quot;/usr/include&quot;],
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +          [openib_include_dir=&quot;$ompi_check_openib_dir/include&quot;])
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +    CPPFLAGS=&quot;$ompi_check_openib_$1_save_CPPFLAGS -I$openib_include_dir/infiniband&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     LDFLAGS=&quot;$ompi_check_openib_$1_save_LDFLAGS&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     LIBS=&quot;$ompi_check_openib_$1_save_LIBS&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Modified: trunk/ompi/mca/btl/openib/btl_openib.h
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ==============================================================================
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --- trunk/ompi/mca/btl/openib/btl_openib.h    (original)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +++ trunk/ompi/mca/btl/openib/btl_openib.h    2011-06-28 10:28:29 EDT (Tue, 28 Jun 2011)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; @@ -52,6 +52,7 @@
</span><br>
<span class="quotelev3">&gt;&gt;&gt; BEGIN_C_DECLS
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #define HAVE_XRC (1 == OMPI_HAVE_CONNECTX_XRC)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#define ENABLE_DYNAMIC_SL (1 == OMPI_ENABLE_DYNAMIC_SL)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #define MCA_BTL_IB_LEAVE_PINNED 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #define IB_DEFAULT_GID_PREFIX 0xfe80000000000000ll
</span><br>
<span class="quotelev3">&gt;&gt;&gt; @@ -215,7 +216,9 @@
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     uint32_t ib_rnr_retry;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     uint32_t ib_max_rdma_dst_ops;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     uint32_t ib_service_level;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -    uint32_t ib_path_rec_service_level;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#if (ENABLE_DYNAMIC_SL)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +    uint32_t ib_path_record_service_level;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#endif
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     int32_t use_eager_rdma;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     int32_t eager_rdma_threshold; /**&lt;  After this number of msg, use RDMA for short messages, always */
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     int32_t eager_rdma_num;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Modified: trunk/ompi/mca/btl/openib/btl_openib_mca.c
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ==============================================================================
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --- trunk/ompi/mca/btl/openib/btl_openib_mca.c    (original)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +++ trunk/ompi/mca/btl/openib/btl_openib_mca.c    2011-06-28 10:28:29 EDT (Tue, 28 Jun 2011)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; @@ -398,10 +398,14 @@
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     }
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     mca_btl_openib_component.ib_service_level = (uint32_t) ival;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -    CHECK(reg_int(&quot;ib_path_rec_service_level&quot;, NULL, &quot;Enable getting InfiniBand service level from PathRecord &quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -                  &quot;(must be&gt;= 0, 0 = disabled, positive = try to get the service level from PathRecord)&quot;,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#if (ENABLE_DYNAMIC_SL)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +    CHECK(reg_int(&quot;ib_path_record_service_level&quot;, NULL,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +                  &quot;Enable getting InfiniBand service level from PathRecord &quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +                  &quot;(must be&gt;= 0, 0 = disabled, positive = try to get the &quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +                  &quot;service level from PathRecord)&quot;,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                   0,&amp;ival, REGINT_GE_ZERO));
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -    mca_btl_openib_component.ib_path_rec_service_level = (uint32_t) ival;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +    mca_btl_openib_component.ib_path_record_service_level = (uint32_t) ival;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#endif
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     CHECK(reg_int(&quot;use_eager_rdma&quot;, NULL, &quot;Use RDMA for eager messages &quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                   &quot;(-1 = use device default, 0 = do not use eager RDMA, &quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Modified: trunk/ompi/mca/btl/openib/connect/btl_openib_connect_oob.c
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ==============================================================================
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --- trunk/ompi/mca/btl/openib/connect/btl_openib_connect_oob.c    (original)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +++ trunk/ompi/mca/btl/openib/connect/btl_openib_connect_oob.c    2011-06-28 10:28:29 EDT (Tue, 28 Jun 2011)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; @@ -44,6 +44,10 @@
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #include &quot;connect/connect.h&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #include &quot;orte/util/show_help.h&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#if (ENABLE_DYNAMIC_SL)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#include&lt;infiniband/iba/ib_types.h&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#endif
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #ifdef HAVE_UNISTD_H
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #include&lt;unistd.h&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #endif
</span><br>
<span class="quotelev3">&gt;&gt;&gt; @@ -54,109 +58,17 @@
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     ENDPOINT_CONNECT_ACK
</span><br>
<span class="quotelev3">&gt;&gt;&gt; } connect_message_type_t;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#ifndef __WINDOWS__
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#define PACK_SUFFIX __attribute__((packed))
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#else
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#define PACK_SUFFIX
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#endif
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#define SL_NOT_PRESENT                0x7F
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#define SL_NOT_PRESENT                0xFF
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #define MAX_GET_SL_REC_RETRIES        20
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #define GET_SL_REC_RETRIES_TIMEOUT_MS 2000000
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#define IB_SA_QPN                     1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#define IB_GLOBAL_QKEY                0x80010000UL
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#define IB_MGMT_BASE_VERSION          1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#define IB_MGMT_CLASS_SUBN_ADM        0x03
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#define IB_MGMT_METHOD_GET            0x01
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#define IB_SA_TID_GET_PATH_REC_0      0xCA000000UL
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#define IB_SA_TID_GET_PATH_REC_1      0xBEEF0000UL
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#define IB_PATH_REC_SL_MASK           0x000F
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#define IB_SA_ATTR_PATH_REC           0x35
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#define IB_SA_PATH_REC_DLID           (1&lt;&lt;4)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#define IB_SA_PATH_REC_SLID           (1&lt;&lt;5)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#ifdef __WINDOWS__
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -  #pragma pack(push)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -  #pragma pack(1)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#endif
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -struct ib_mad_hdr {
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -    uint8_t   base_version;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -    uint8_t   mgmt_class;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -    uint8_t   class_version;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -    uint8_t   method;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -    uint16_t  status;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -    uint16_t  class_spec;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -    uint32_t  tid[2];
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -    uint16_t  attr_id;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -    uint16_t  resv;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -    uint32_t  attr_mod;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -} PACK_SUFFIX;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -struct ib_rmpp_hdr {
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -    uint32_t  raw[3];
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -} PACK_SUFFIX;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -struct ib_sa_hdr {
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -    uint32_t sm_key[2];
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -    uint16_t reserved;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -    uint16_t attrib_offset;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -    uint32_t comp_mask[2];
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -} PACK_SUFFIX;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -typedef union _ib_gid {
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -    uint8_t raw[16];
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -    struct _ib_gid_unicast {
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -        uint64_t prefix;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -        uint64_t interface_id;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -    } PACK_SUFFIX unicast;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -    struct _ib_gid_multicast {
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -        uint8_t header[2];
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -        uint8_t raw_group_id[14];
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -    } PACK_SUFFIX multicast;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -} PACK_SUFFIX ib_gid_t;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -struct ib_path_record {
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -    uint64_t service_id;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -    ib_gid_t dgit;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -    ib_gid_t sgit;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -    uint16_t dlid;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -    uint16_t slid;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -    uint32_t hop_flow_raw;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -    uint8_t  tclass;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -    uint8_t  num_path;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -    uint16_t pkey;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -    uint8_t  reserved1;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -    uint8_t  qos_class_sl;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -    uint8_t  mtu;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -    uint8_t  rate;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -    uint32_t preference__packet_lifetime__packet_lifetime_selector;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -    uint32_t reserved2[35];
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -} PACK_SUFFIX;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -union ib_sa_data {
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -    struct ib_path_record path_record;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -} PACK_SUFFIX;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -struct ib_mad_sa {
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -    struct ib_mad_hdr mad_hdr;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -    struct ib_rmpp_hdr rmpp_hdr;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -    struct ib_sa_hdr sa_hdr;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -    union  ib_sa_data sa_data;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -} PACK_SUFFIX;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#ifdef __WINDOWS__
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -  #pragma pack(pop)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#endif
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#if (ENABLE_DYNAMIC_SL)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; static struct mca_btl_openib_sa_qp_cache {
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     /* There will be a MR with the one send and receive buffer together */
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     /* The send buffer is first, the receive buffer is second */
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     /* The receive buffer in a UD queue pair needs room for the 40 byte GRH */
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     /* The buffers are first in the structure for page alignment */
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -    char     send_recv_buffer[sizeof(struct ib_mad_sa) * 2 + 40];
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +    char     send_recv_buffer[MAD_BLOCK_SIZE * 2 + 40];
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     struct   mca_btl_openib_sa_qp_cache *next;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     struct   ibv_context *context;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     char     *device_name;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; @@ -168,8 +80,9 @@
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     struct   ibv_pd *pd;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     struct   ibv_recv_wr rwr;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     struct   ibv_sge rsge;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -    char     sl_values[65536];
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +    uint8_t  sl_values[65536]; /* 64K */
</span><br>
<span class="quotelev3">&gt;&gt;&gt; } *sa_qp_cache = 0;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#endif
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; static int oob_priority = 50;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; static bool rml_recv_posted = false;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; @@ -198,27 +111,31 @@
</span><br>
<span class="quotelev3">&gt;&gt;&gt; static void rml_recv_cb(int status, orte_process_name_t* process_name,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                         opal_buffer_t* buffer, orte_rml_tag_t tag,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                         void* cbdata);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#if (ENABLE_DYNAMIC_SL)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; static int init_ud_qp(struct ibv_context *context_arg,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                       struct mca_btl_openib_sa_qp_cache *cache);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; static void init_sa_mad(struct mca_btl_openib_sa_qp_cache *cache,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -                        struct ib_mad_sa *sag,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -                        struct ibv_send_wr *swr,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -                        struct ibv_sge *ssge,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -                        uint16_t lid,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -                        uint16_t rem_lid);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +                       ib_sa_mad_t *sa_mad,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +                       struct ibv_send_wr *swr,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +                       struct ibv_sge *ssge,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +                       uint16_t lid,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +                       uint16_t rem_lid);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; static int get_pathrecord_info(struct mca_btl_openib_sa_qp_cache *cache,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -                               struct ib_mad_sa *sag,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -                               struct ib_mad_sa *sar,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -                               struct ibv_send_wr *swr,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -                               uint16_t lid,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -                               uint16_t rem_lid);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -static int init_device(struct ibv_context *context_arg,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -                       struct mca_btl_openib_sa_qp_cache *cache,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -                       uint32_t port_num);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -static int get_pathrecord_sl(struct ibv_context *context_arg,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -                             uint32_t port_num,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +                             ib_sa_mad_t *sa_mad,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +                             ib_sa_mad_t *sar,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +                             struct ibv_send_wr *swr,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                              uint16_t lid,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                              uint16_t rem_lid);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +static int init_device(struct ibv_context *context_arg,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +                      struct mca_btl_openib_sa_qp_cache *cache,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +                      uint32_t port_num);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +static int get_pathrecord_sl(struct ibv_context *context_arg,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +                           uint32_t port_num,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +                           uint16_t lid,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +                           uint16_t rem_lid);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +static void free_sa_qp_cache(void);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#endif
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /*
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  * The &quot;component&quot; struct -- the top-level function pointers for the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; @@ -351,6 +268,33 @@
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     return OMPI_SUCCESS;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; }
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#if (ENABLE_DYNAMIC_SL)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +static void free_sa_qp_cache(void)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +{
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +    struct mca_btl_openib_sa_qp_cache *cache, *tmp;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +    cache = sa_qp_cache;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +    while (NULL != cache) {
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +        /* free cache data */
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +        if (cache-&gt;device_name)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +            free(cache-&gt;device_name);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +        if (NULL != cache-&gt;qp)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +            ibv_destroy_qp(cache-&gt;qp);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +        if (NULL != cache-&gt;ah)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +            ibv_destroy_ah(cache-&gt;ah);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +        if (NULL != cache-&gt;cq)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +            ibv_destroy_cq(cache-&gt;cq);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +        if (NULL != cache-&gt;mr)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +            ibv_dereg_mr(cache-&gt;mr);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +        if (NULL != cache-&gt;pd)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +            ibv_dealloc_pd(cache-&gt;pd);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +        tmp = cache-&gt;next;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +        free(cache);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +        cache = tmp;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +    }
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +}
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#endif
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /*
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  * Component finalize function.  Cleanup RML non-blocking receive.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  */
</span><br>
<span class="quotelev3">&gt;&gt;&gt; @@ -360,7 +304,9 @@
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         orte_rml.recv_cancel(ORTE_NAME_WILDCARD, OMPI_RML_TAG_OPENIB);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         rml_recv_posted = false;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     }
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -
</span><br>
<span class="quotelev3">&gt;&gt;&gt; + #if (ENABLE_DYNAMIC_SL)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +   free_sa_qp_cache();
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#endif
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     return OMPI_SUCCESS;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; }
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; @@ -425,7 +371,7 @@
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  */
</span><br>
<span class="quotelev3">&gt;&gt;&gt; static int qp_connect_all(mca_btl_openib_endpoint_t *endpoint)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; {
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -    int i, rc;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +    int i;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     mca_btl_openib_module_t* openib_btl =
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         (mca_btl_openib_module_t*)endpoint-&gt;endpoint_btl;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; @@ -446,18 +392,24 @@
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         attr.ah_attr.dlid          = endpoint-&gt;rem_info.rem_lid;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         attr.ah_attr.src_path_bits = openib_btl-&gt;src_path_bits;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         attr.ah_attr.port_num      = openib_btl-&gt;port_num;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -        attr.ah_attr.sl = mca_btl_openib_component.ib_service_level;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -        /* if user enable ib_path_rec_service_level - dynamically get the sl from PathRecord */
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -        if (mca_btl_openib_component.ib_path_rec_service_level&gt;  0) {
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -            rc = get_pathrecord_sl(qp-&gt;context,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#if (ENABLE_DYNAMIC_SL)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +        /* if user enabled dynamic SL, get it from PathRecord */
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +        if (0 != mca_btl_openib_component.ib_path_record_service_level) {
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +            int rc = get_pathrecord_sl(qp-&gt;context,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                    attr.ah_attr.port_num,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                    openib_btl-&gt;lid,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                    attr.ah_attr.dlid);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             if (OMPI_ERROR == rc) {
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +                free_sa_qp_cache();
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                 return OMPI_ERROR;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             }
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             attr.ah_attr.sl = rc;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         }
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#else
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +        attr.ah_attr.sl = mca_btl_openib_component.ib_service_level;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#endif
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         /* JMS to be filled in later dynamically */
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         attr.ah_attr.static_rate   = 0;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; @@ -1056,6 +1008,7 @@
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     OPAL_THREAD_UNLOCK(&amp;mca_btl_openib_component.ib_lock);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; }
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#if (ENABLE_DYNAMIC_SL)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; static int init_ud_qp(struct ibv_context *context_arg,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                       struct mca_btl_openib_sa_qp_cache *cache)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; {
</span><br>
<span class="quotelev3">&gt;&gt;&gt; @@ -1094,7 +1047,7 @@
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     memset(&amp;mattr, 0, sizeof(mattr));
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     mattr.qp_state = IBV_QPS_INIT;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     mattr.port_num = cache-&gt;port_num;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -    mattr.qkey = IB_GLOBAL_QKEY;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +    mattr.qkey = ntohl(IB_QP1_WELL_KNOWN_Q_KEY);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     rc = ibv_modify_qp(cache-&gt;qp,&amp;mattr,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             IBV_QP_STATE              |
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             IBV_QP_PKEY_INDEX         |
</span><br>
<span class="quotelev3">&gt;&gt;&gt; @@ -1128,61 +1081,75 @@
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     return OMPI_SUCCESS;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; }
</span><br>
<span class="quotelev3">&gt;&gt;&gt; static void init_sa_mad(struct mca_btl_openib_sa_qp_cache *cache,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -                        struct ib_mad_sa *sag,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -                        struct ibv_send_wr *swr,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -                        struct ibv_sge *ssge,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -                        uint16_t lid,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -                        uint16_t rem_lid)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +                       ib_sa_mad_t *sa_mad,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +                       struct ibv_send_wr *swr,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +                       struct ibv_sge *ssge,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +                       uint16_t lid,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +                       uint16_t rem_lid)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; {
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -    memset(sag, 0, sizeof(*sag));
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +    ib_path_rec_t *path_record = (ib_path_rec_t*)sa_mad-&gt;data;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     memset(swr, 0, sizeof(*swr));
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     memset(ssge, 0, sizeof(*ssge));
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -    sag-&gt;mad_hdr.base_version = IB_MGMT_BASE_VERSION;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -    sag-&gt;mad_hdr.mgmt_class = IB_MGMT_CLASS_SUBN_ADM;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -    sag-&gt;mad_hdr.class_version = 2;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -    sag-&gt;mad_hdr.method = IB_MGMT_METHOD_GET;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -    sag-&gt;mad_hdr.attr_id = htons (IB_SA_ATTR_PATH_REC);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -    sag-&gt;mad_hdr.tid[0] = IB_SA_TID_GET_PATH_REC_0 + cache-&gt;qp-&gt;qp_num;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -    sag-&gt;mad_hdr.tid[1] = IB_SA_TID_GET_PATH_REC_1 + rem_lid;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -    sag-&gt;sa_hdr.comp_mask[1] =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -        htonl(IB_SA_PATH_REC_DLID | IB_SA_PATH_REC_SLID);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -    sag-&gt;sa_data.path_record.dlid = htons(rem_lid);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -    sag-&gt;sa_data.path_record.slid = htons(lid);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +    /* Initialize the standard MAD header. */
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +    memset(sa_mad, 0, MAD_BLOCK_SIZE);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +    ib_mad_init_new((ib_mad_t *)sa_mad,          /* mad header pointer */
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +                    IB_MCLASS_SUBN_ADM,          /* management class */
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +                    (uint8_t) 2,                 /* version */
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +                    IB_MAD_METHOD_GET,           /* method */
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +                    hton64((uint64_t)lid&lt;&lt;  48 | /* transaction ID */
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +                           (uint64_t)rem_lid&lt;&lt;  32 |
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +                           (uint64_t)cache-&gt;qp-&gt;qp_num&lt;&lt;  8),
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +                    IB_MAD_ATTR_PATH_RECORD,     /* attribute ID */
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +                    0);                          /* attribute modifier */
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +    sa_mad-&gt;comp_mask = IB_PR_COMPMASK_DLID | IB_PR_COMPMASK_SLID;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +    path_record-&gt;dlid = htons(rem_lid);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +    path_record-&gt;slid = htons(lid);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     swr-&gt;sg_list = ssge;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     swr-&gt;num_sge = 1;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     swr-&gt;opcode = IBV_WR_SEND;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     swr-&gt;wr.ud.ah = cache-&gt;ah;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -    swr-&gt;wr.ud.remote_qpn = IB_SA_QPN;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -    swr-&gt;wr.ud.remote_qkey = IB_GLOBAL_QKEY;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +    swr-&gt;wr.ud.remote_qpn = ntohl(IB_QP1);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +    swr-&gt;wr.ud.remote_qkey = ntohl(IB_QP1_WELL_KNOWN_Q_KEY);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     swr-&gt;send_flags = IBV_SEND_SIGNALED | IBV_SEND_SOLICITED;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -    ssge-&gt;addr = (uint64_t)(void *)sag;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -    ssge-&gt;length = sizeof(*sag);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +    ssge-&gt;addr = (uint64_t)(void *)sa_mad;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +    ssge-&gt;length = MAD_BLOCK_SIZE;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     ssge-&gt;lkey = cache-&gt;mr-&gt;lkey;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; }
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; static int get_pathrecord_info(struct mca_btl_openib_sa_qp_cache *cache,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -                               struct ib_mad_sa *sag,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -                               struct ib_mad_sa *sar,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -                               struct ibv_send_wr *swr,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -                               uint16_t lid,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -                               uint16_t rem_lid)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +                             ib_sa_mad_t *req_mad,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +                             ib_sa_mad_t *resp_mad,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +                             struct ibv_send_wr *swr,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +                             uint16_t lid,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +                             uint16_t rem_lid)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; {
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     struct ibv_send_wr *bswr;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     struct ibv_wc wc;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     struct timeval get_sl_rec_last_sent, get_sl_rec_last_poll;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     struct ibv_recv_wr *brwr;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     int got_sl_value, get_sl_rec_retries, rc, ne, i;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +    ib_path_rec_t *req_path_record = ib_sa_mad_get_payload_ptr(req_mad);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +    ib_path_rec_t *resp_path_record = ib_sa_mad_get_payload_ptr(resp_mad);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     got_sl_value = 0;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     get_sl_rec_retries = 0;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +    rc = ibv_post_recv(cache-&gt;qp,&amp;(cache-&gt;rwr),&amp;brwr);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +    if (0 != rc) {
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +        BTL_ERROR((&quot;error posting receive on QP [0x%x] errno says: %s [%d]&quot;,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +                   cache-&gt;qp-&gt;qp_num, strerror(errno), errno));
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +        return OMPI_ERROR;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +    }
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     while (0 == got_sl_value) {
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         rc = ibv_post_send(cache-&gt;qp, swr,&amp;bswr);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         if (0 != rc) {
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -            BTL_ERROR((&quot;error posing send on QP[%x] errno says: %s [%d]&quot;,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +            BTL_ERROR((&quot;error posting send on QP [0x%x] errno says: %s [%d]&quot;,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                        cache-&gt;qp-&gt;qp_num, strerror(errno), errno));
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             return OMPI_ERROR;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         }
</span><br>
<span class="quotelev3">&gt;&gt;&gt; @@ -1190,25 +1157,23 @@
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         while (0 == got_sl_value) {
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             ne = ibv_poll_cq(cache-&gt;cq, 1,&amp;wc);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -            if (ne&gt;  0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -&amp;&amp;  wc.status == IBV_WC_SUCCESS
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -&amp;&amp;  wc.opcode == IBV_WC_RECV
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -&amp;&amp;  wc.byte_len&gt;= sizeof(*sar)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -&amp;&amp;  sar-&gt;mad_hdr.tid[0] == sag-&gt;mad_hdr.tid[0]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -&amp;&amp;  sar-&gt;mad_hdr.tid[1] == sag-&gt;mad_hdr.tid[1]) {
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -                if (0 == sar-&gt;mad_hdr.status
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -&amp;&amp;  sar-&gt;sa_data.path_record.slid == htons(lid)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -&amp;&amp;  sar-&gt;sa_data.path_record.dlid == htons(rem_lid)) {
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +            if (ne&gt;  0&amp;&amp;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +                IBV_WC_SUCCESS == wc.status&amp;&amp;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +                IBV_WC_RECV == wc.opcode&amp;&amp;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +                wc.byte_len&gt;= MAD_BLOCK_SIZE&amp;&amp;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +                resp_mad-&gt;trans_id == req_mad-&gt;trans_id) {
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +                if (0 == resp_mad-&gt;status&amp;&amp;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +                    req_path_record-&gt;slid == htons(lid)&amp;&amp;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +                    req_path_record-&gt;dlid == htons(rem_lid)) {
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                     /* Everything matches, so we have the desired SL */
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -                    cache-&gt;sl_values[rem_lid] =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -                        sar-&gt;sa_data.path_record.qos_class_sl&amp;  IB_PATH_REC_SL_MASK;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +                    cache-&gt;sl_values[rem_lid] = ib_path_rec_sl(resp_path_record);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                     got_sl_value = 1; /* still must repost recieve buf */
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                 } else {
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                     /* Probably bad status, unlikely bad lid match. We will */
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                     /* ignore response and let it time out so that we do a  */
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                     /* retry, but after a delay. We must make a new TID so  */
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                     /* the SM doesn't see it as the same request.           */
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -                    sag-&gt;mad_hdr.tid[1] += 0x10000;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +                    req_mad-&gt;trans_id += hton64(1);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                 }
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                 rc = ibv_post_recv(cache-&gt;qp,&amp;(cache-&gt;rwr),&amp;brwr);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                 if (0 != rc) {
</span><br>
<span class="quotelev3">&gt;&gt;&gt; @@ -1249,7 +1214,6 @@
</span><br>
<span class="quotelev3">&gt;&gt;&gt; {
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     struct ibv_ah_attr aattr;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     struct ibv_port_attr pattr;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -    struct ibv_recv_wr *brwr;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     int rc;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     cache-&gt;context = ibv_open_device(context_arg-&gt;device);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; @@ -1315,16 +1279,10 @@
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     cache-&gt;rwr.sg_list =&amp;(cache-&gt;rsge);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     memset(&amp;(cache-&gt;rsge), 0, sizeof(cache-&gt;rsge));
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     cache-&gt;rsge.addr = (uint64_t)(void *)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -        (cache-&gt;send_recv_buffer + sizeof(struct ib_mad_sa));
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -    cache-&gt;rsge.length = sizeof(struct ib_mad_sa) + 40;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +        (cache-&gt;send_recv_buffer + MAD_BLOCK_SIZE);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +    cache-&gt;rsge.length = MAD_BLOCK_SIZE + 40;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     cache-&gt;rsge.lkey = cache-&gt;mr-&gt;lkey;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -    rc = ibv_post_recv(cache-&gt;qp,&amp;(cache-&gt;rwr),&amp;brwr);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -    if (0 != rc) {
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -        BTL_ERROR((&quot;error posing receive on QP[%x] errno says: %s [%d]&quot;,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -                   cache-&gt;qp-&gt;qp_num, strerror(errno), errno));
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -        return OMPI_ERROR;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -    }
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     return 0;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; }
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; @@ -1334,7 +1292,7 @@
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                              uint16_t rem_lid)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; {
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     struct ibv_send_wr swr;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -    struct ib_mad_sa *sag, *sar;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +    ib_sa_mad_t *req_mad, *resp_mad;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     struct ibv_sge ssge;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     struct mca_btl_openib_sa_qp_cache *cache;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     long page_size = sysconf(_SC_PAGESIZE);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; @@ -1342,8 +1300,8 @@
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     /* search for a cached item */
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     for (cache = sa_qp_cache; cache; cache = cache-&gt;next) {
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -        if (strcmp(cache-&gt;device_name,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -                    ibv_get_device_name(context_arg-&gt;device)) == 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +        if (0 == strcmp(cache-&gt;device_name,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +                    ibv_get_device_name(context_arg-&gt;device))
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                 &amp;&amp;  cache-&gt;port_num == port_num) {
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             break;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         }
</span><br>
<span class="quotelev3">&gt;&gt;&gt; @@ -1365,15 +1323,15 @@
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     /* if the destination lid SL value is not in the cache, go get it */
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     if (SL_NOT_PRESENT == cache-&gt;sl_values[rem_lid]) {
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -        /* sag is first buffer, where we build the SA Get request to send */
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -        sag = (struct ib_mad_sa *)(cache-&gt;send_recv_buffer);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +        /* sa_mad is first buffer, where we build the SA Get request to send */
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +        req_mad = (ib_sa_mad_t *)(cache-&gt;send_recv_buffer);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -        init_sa_mad(cache, sag,&amp;swr,&amp;ssge, lid, rem_lid);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +        init_sa_mad(cache, req_mad,&amp;swr,&amp;ssge, lid, rem_lid);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -        /* sar is the receive buffer (40 byte GRH) */
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -        sar = (struct ib_mad_sa *)(cache-&gt;send_recv_buffer + sizeof(struct ib_mad_sa) + 40);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +        /* resp_mad is the receive buffer (40 byte offset is for GRH) */
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +        resp_mad = (ib_sa_mad_t *)(cache-&gt;send_recv_buffer + MAD_BLOCK_SIZE + 40);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -        rc = get_pathrecord_info(cache, sag, sar,&amp;swr, lid, rem_lid);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +        rc = get_pathrecord_info(cache, req_mad, resp_mad,&amp;swr, lid, rem_lid);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         if (0 != rc) {
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             return rc;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         }
</span><br>
<span class="quotelev3">&gt;&gt;&gt; @@ -1382,3 +1340,4 @@
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     /* now all we do is send back the value laying around */
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     return cache-&gt;sl_values[rem_lid];
</span><br>
<span class="quotelev3">&gt;&gt;&gt; }
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#endif
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; svn-full mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; svn-full_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/svn-full">http://www.open-mpi.org/mailman/listinfo.cgi/svn-full</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9490.php">Jeff Squyres: "Re: [OMPI devel] opal_init/finalize counter --&gt; boolean"</a>
<li><strong>Previous message:</strong> <a href="9488.php">Jeff Squyres: "Re: [OMPI devel] [OMPI users] huge VmRSS on rank 0 after MPI_Init when using &quot;btl_openib_receive_queues&quot; option"</a>
<li><strong>In reply to:</strong> <a href="9464.php">Yevgeny Kliteynik: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r24830"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9514.php">Yevgeny Kliteynik: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r24830"</a>
<li><strong>Reply:</strong> <a href="9514.php">Yevgeny Kliteynik: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r24830"</a>
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

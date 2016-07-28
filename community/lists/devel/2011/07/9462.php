<?
$subject_val = "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r24830";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Jul  2 16:53:10 2011" -->
<!-- isoreceived="20110702205310" -->
<!-- sent="Sat, 2 Jul 2011 15:52:46 -0500" -->
<!-- isosent="20110702205246" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r24830" -->
<!-- id="17D92EF6-DE21-439E-8A00-067F6D8DB248_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="201106281428.p5SESUU3018790_at_sourcehaven.osl.iu.edu" -->
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
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-07-02 16:52:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9463.php">Yevgeny Kliteynik: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r24836"</a>
<li><strong>Previous message:</strong> <a href="9461.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] &quot;Open MPI&quot;-based MPI library used by K computer"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9464.php">Yevgeny Kliteynik: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r24830"</a>
<li><strong>Reply:</strong> <a href="9464.php">Yevgeny Kliteynik: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r24830"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Were all the issueswith this code fixed?  There were m4 issues and solaris issues, IIRC. 
<br>
<p>Sent from my phone. No type good. 
<br>
<p>On Jun 28, 2011, at 9:28 AM, &quot;kliteyn_at_[hidden]&quot; &lt;kliteyn_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Author: kliteyn
</span><br>
<span class="quotelev1">&gt; Date: 2011-06-28 10:28:29 EDT (Tue, 28 Jun 2011)
</span><br>
<span class="quotelev1">&gt; New Revision: 24830
</span><br>
<span class="quotelev1">&gt; URL: <a href="https://svn.open-mpi.org/trac/ompi/changeset/24830">https://svn.open-mpi.org/trac/ompi/changeset/24830</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Log:
</span><br>
<span class="quotelev1">&gt; Supporting dynamic SL (#2674)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; - Added enable/disable configuration parameter for dynamic SL
</span><br>
<span class="quotelev1">&gt; - All the dynamic SL code is conditionalized
</span><br>
<span class="quotelev1">&gt; - Removed libibmad dependency
</span><br>
<span class="quotelev1">&gt; - Using only one include - ib_types.h (part of opensm-devel package)
</span><br>
<span class="quotelev1">&gt; - Removed all the macro and data types definitions, using the
</span><br>
<span class="quotelev1">&gt;   existing definitions from ib_types.h instead
</span><br>
<span class="quotelev1">&gt; - general cleaning here and there
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The async mode is not implemented yet - stay tuned...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Text files modified: 
</span><br>
<span class="quotelev1">&gt;   trunk/ompi/config/ompi_check_openib.m4                     |    38 ++++                                    
</span><br>
<span class="quotelev1">&gt;   trunk/ompi/mca/btl/openib/btl_openib.h                     |     5                                         
</span><br>
<span class="quotelev1">&gt;   trunk/ompi/mca/btl/openib/btl_openib_mca.c                 |    10                                         
</span><br>
<span class="quotelev1">&gt;   trunk/ompi/mca/btl/openib/connect/btl_openib_connect_oob.c |   309 +++++++++++++++++---------------------- 
</span><br>
<span class="quotelev1">&gt;   4 files changed, 182 insertions(+), 180 deletions(-)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Modified: trunk/ompi/config/ompi_check_openib.m4
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/ompi/config/ompi_check_openib.m4    (original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/ompi/config/ompi_check_openib.m4    2011-06-28 10:28:29 EDT (Tue, 28 Jun 2011)
</span><br>
<span class="quotelev1">&gt; @@ -155,11 +155,21 @@
</span><br>
<span class="quotelev1">&gt;                                      [$ompi_cv_func_ibv_create_cq_args],
</span><br>
<span class="quotelev1">&gt;                                      [Number of arguments to ibv_create_cq])])])
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; +    #
</span><br>
<span class="quotelev1">&gt; +    # OpenIB dynamic SL
</span><br>
<span class="quotelev1">&gt; +    #
</span><br>
<span class="quotelev1">&gt; +    AC_ARG_ENABLE([openib-dynamic-sl],
</span><br>
<span class="quotelev1">&gt; +        [AC_HELP_STRING([--enable-openib-dynamic-sl],
</span><br>
<span class="quotelev1">&gt; +                        [Enable openib BTL to query Subnet Manager for IB SL (default: enabled)])],
</span><br>
<span class="quotelev1">&gt; +        [enable_openib_dynamic_sl=&quot;$enableval&quot;],
</span><br>
<span class="quotelev1">&gt; +        [enable_openib_dynamic_sl=&quot;yes&quot;])
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt;     # Set these up so that we can do an AC_DEFINE below
</span><br>
<span class="quotelev1">&gt;     # (unconditionally)
</span><br>
<span class="quotelev1">&gt;     $1_have_xrc=0
</span><br>
<span class="quotelev1">&gt;     $1_have_rdmacm=0
</span><br>
<span class="quotelev1">&gt;     $1_have_ibcm=0
</span><br>
<span class="quotelev1">&gt; +    $1_have_dynamic_sl=0
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     # If we have the openib stuff available, find out what we've got
</span><br>
<span class="quotelev1">&gt;     AS_IF([test &quot;$ompi_check_openib_happy&quot; = &quot;yes&quot;],
</span><br>
<span class="quotelev1">&gt; @@ -176,6 +186,19 @@
</span><br>
<span class="quotelev1">&gt;                AC_CHECK_FUNCS([ibv_create_xrc_rcv_qp], [$1_have_xrc=1])
</span><br>
<span class="quotelev1">&gt;            fi
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; +           if test &quot;$enable_openib_dynamic_sl&quot; = &quot;yes&quot;; then
</span><br>
<span class="quotelev1">&gt; +               # We need ib_types.h file, which is installed with opensm-devel
</span><br>
<span class="quotelev1">&gt; +               # package. However, ib_types.h has a bad include directive,
</span><br>
<span class="quotelev1">&gt; +               # which will cause AC_CHECK_HEADER to fail.
</span><br>
<span class="quotelev1">&gt; +               # So instead, we will look for another file that is also
</span><br>
<span class="quotelev1">&gt; +               # installed as part of opensm-devel package and included in
</span><br>
<span class="quotelev1">&gt; +               # ib_types.h, but it doesn't include any other IB-related files.
</span><br>
<span class="quotelev1">&gt; +               AC_CHECK_HEADER([infiniband/complib/cl_types_osd.h],
</span><br>
<span class="quotelev1">&gt; +                               [$1_have_dynamic_sl=1],
</span><br>
<span class="quotelev1">&gt; +                               [AC_MSG_ERROR([opensm-devel package not found - please install it or disable dynamic SL support with \&quot;--disable-openib-dynamic-sl\&quot;])],
</span><br>
<span class="quotelev1">&gt; +                               [])
</span><br>
<span class="quotelev1">&gt; +           fi
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt;            # Do we have a recent enough RDMA CM?  Need to have the
</span><br>
<span class="quotelev1">&gt;            # rdma_get_peer_addr (inline) function (originally appeared
</span><br>
<span class="quotelev1">&gt;            # in OFED v1.3).
</span><br>
<span class="quotelev1">&gt; @@ -244,6 +267,15 @@
</span><br>
<span class="quotelev1">&gt;     else
</span><br>
<span class="quotelev1">&gt;         AC_MSG_RESULT([no])
</span><br>
<span class="quotelev1">&gt;     fi
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +    AC_MSG_CHECKING([if dynamic SL is enabled])
</span><br>
<span class="quotelev1">&gt; +    AC_DEFINE_UNQUOTED([OMPI_ENABLE_DYNAMIC_SL], [$$1_have_dynamic_sl],
</span><br>
<span class="quotelev1">&gt; +        [Enable features required for dynamic SL support])
</span><br>
<span class="quotelev1">&gt; +    if test &quot;1&quot; = &quot;$$1_have_dynamic_sl&quot;; then
</span><br>
<span class="quotelev1">&gt; +        AC_MSG_RESULT([yes])
</span><br>
<span class="quotelev1">&gt; +    else
</span><br>
<span class="quotelev1">&gt; +        AC_MSG_RESULT([no])
</span><br>
<span class="quotelev1">&gt; +    fi
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     AC_MSG_CHECKING([if OpenFabrics RDMACM support is enabled])
</span><br>
<span class="quotelev1">&gt;     AC_DEFINE_UNQUOTED([OMPI_HAVE_RDMACM], [$$1_have_rdmacm],
</span><br>
<span class="quotelev1">&gt; @@ -267,7 +299,11 @@
</span><br>
<span class="quotelev1">&gt;         AC_MSG_RESULT([no])
</span><br>
<span class="quotelev1">&gt;     fi
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -    CPPFLAGS=&quot;$ompi_check_openib_$1_save_CPPFLAGS&quot;
</span><br>
<span class="quotelev1">&gt; +    AS_IF([test -z &quot;$ompi_check_openib_dir&quot;],
</span><br>
<span class="quotelev1">&gt; +          [openib_include_dir=&quot;/usr/include&quot;],
</span><br>
<span class="quotelev1">&gt; +          [openib_include_dir=&quot;$ompi_check_openib_dir/include&quot;])
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +    CPPFLAGS=&quot;$ompi_check_openib_$1_save_CPPFLAGS -I$openib_include_dir/infiniband&quot;
</span><br>
<span class="quotelev1">&gt;     LDFLAGS=&quot;$ompi_check_openib_$1_save_LDFLAGS&quot;
</span><br>
<span class="quotelev1">&gt;     LIBS=&quot;$ompi_check_openib_$1_save_LIBS&quot;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Modified: trunk/ompi/mca/btl/openib/btl_openib.h
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/ompi/mca/btl/openib/btl_openib.h    (original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/ompi/mca/btl/openib/btl_openib.h    2011-06-28 10:28:29 EDT (Tue, 28 Jun 2011)
</span><br>
<span class="quotelev1">&gt; @@ -52,6 +52,7 @@
</span><br>
<span class="quotelev1">&gt; BEGIN_C_DECLS
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #define HAVE_XRC (1 == OMPI_HAVE_CONNECTX_XRC)
</span><br>
<span class="quotelev1">&gt; +#define ENABLE_DYNAMIC_SL (1 == OMPI_ENABLE_DYNAMIC_SL)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #define MCA_BTL_IB_LEAVE_PINNED 1
</span><br>
<span class="quotelev1">&gt; #define IB_DEFAULT_GID_PREFIX 0xfe80000000000000ll
</span><br>
<span class="quotelev1">&gt; @@ -215,7 +216,9 @@
</span><br>
<span class="quotelev1">&gt;     uint32_t ib_rnr_retry;
</span><br>
<span class="quotelev1">&gt;     uint32_t ib_max_rdma_dst_ops;
</span><br>
<span class="quotelev1">&gt;     uint32_t ib_service_level;
</span><br>
<span class="quotelev1">&gt; -    uint32_t ib_path_rec_service_level;
</span><br>
<span class="quotelev1">&gt; +#if (ENABLE_DYNAMIC_SL)
</span><br>
<span class="quotelev1">&gt; +    uint32_t ib_path_record_service_level;
</span><br>
<span class="quotelev1">&gt; +#endif
</span><br>
<span class="quotelev1">&gt;     int32_t use_eager_rdma;
</span><br>
<span class="quotelev1">&gt;     int32_t eager_rdma_threshold; /**&lt; After this number of msg, use RDMA for short messages, always */
</span><br>
<span class="quotelev1">&gt;     int32_t eager_rdma_num;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Modified: trunk/ompi/mca/btl/openib/btl_openib_mca.c
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/ompi/mca/btl/openib/btl_openib_mca.c    (original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/ompi/mca/btl/openib/btl_openib_mca.c    2011-06-28 10:28:29 EDT (Tue, 28 Jun 2011)
</span><br>
<span class="quotelev1">&gt; @@ -398,10 +398,14 @@
</span><br>
<span class="quotelev1">&gt;     }
</span><br>
<span class="quotelev1">&gt;     mca_btl_openib_component.ib_service_level = (uint32_t) ival;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -    CHECK(reg_int(&quot;ib_path_rec_service_level&quot;, NULL, &quot;Enable getting InfiniBand service level from PathRecord &quot;
</span><br>
<span class="quotelev1">&gt; -                  &quot;(must be &gt;= 0, 0 = disabled, positive = try to get the service level from PathRecord)&quot;,
</span><br>
<span class="quotelev1">&gt; +#if (ENABLE_DYNAMIC_SL)
</span><br>
<span class="quotelev1">&gt; +    CHECK(reg_int(&quot;ib_path_record_service_level&quot;, NULL,
</span><br>
<span class="quotelev1">&gt; +                  &quot;Enable getting InfiniBand service level from PathRecord &quot;
</span><br>
<span class="quotelev1">&gt; +                  &quot;(must be &gt;= 0, 0 = disabled, positive = try to get the &quot;
</span><br>
<span class="quotelev1">&gt; +                  &quot;service level from PathRecord)&quot;, 
</span><br>
<span class="quotelev1">&gt;                   0, &amp;ival, REGINT_GE_ZERO));
</span><br>
<span class="quotelev1">&gt; -    mca_btl_openib_component.ib_path_rec_service_level = (uint32_t) ival;
</span><br>
<span class="quotelev1">&gt; +    mca_btl_openib_component.ib_path_record_service_level = (uint32_t) ival;
</span><br>
<span class="quotelev1">&gt; +#endif
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     CHECK(reg_int(&quot;use_eager_rdma&quot;, NULL, &quot;Use RDMA for eager messages &quot;
</span><br>
<span class="quotelev1">&gt;                   &quot;(-1 = use device default, 0 = do not use eager RDMA, &quot;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Modified: trunk/ompi/mca/btl/openib/connect/btl_openib_connect_oob.c
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/ompi/mca/btl/openib/connect/btl_openib_connect_oob.c    (original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/ompi/mca/btl/openib/connect/btl_openib_connect_oob.c    2011-06-28 10:28:29 EDT (Tue, 28 Jun 2011)
</span><br>
<span class="quotelev1">&gt; @@ -44,6 +44,10 @@
</span><br>
<span class="quotelev1">&gt; #include &quot;connect/connect.h&quot;
</span><br>
<span class="quotelev1">&gt; #include &quot;orte/util/show_help.h&quot;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; +#if (ENABLE_DYNAMIC_SL)
</span><br>
<span class="quotelev1">&gt; +#include &lt;infiniband/iba/ib_types.h&gt;
</span><br>
<span class="quotelev1">&gt; +#endif
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; #ifdef HAVE_UNISTD_H
</span><br>
<span class="quotelev1">&gt; #include &lt;unistd.h&gt;
</span><br>
<span class="quotelev1">&gt; #endif
</span><br>
<span class="quotelev1">&gt; @@ -54,109 +58,17 @@
</span><br>
<span class="quotelev1">&gt;     ENDPOINT_CONNECT_ACK
</span><br>
<span class="quotelev1">&gt; } connect_message_type_t;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -#ifndef __WINDOWS__
</span><br>
<span class="quotelev1">&gt; -#define PACK_SUFFIX __attribute__((packed))
</span><br>
<span class="quotelev1">&gt; -#else
</span><br>
<span class="quotelev1">&gt; -#define PACK_SUFFIX
</span><br>
<span class="quotelev1">&gt; -#endif
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; -#define SL_NOT_PRESENT                0x7F
</span><br>
<span class="quotelev1">&gt; +#define SL_NOT_PRESENT                0xFF
</span><br>
<span class="quotelev1">&gt; #define MAX_GET_SL_REC_RETRIES        20
</span><br>
<span class="quotelev1">&gt; #define GET_SL_REC_RETRIES_TIMEOUT_MS 2000000
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -#define IB_SA_QPN                     1
</span><br>
<span class="quotelev1">&gt; -#define IB_GLOBAL_QKEY                0x80010000UL
</span><br>
<span class="quotelev1">&gt; -#define IB_MGMT_BASE_VERSION          1
</span><br>
<span class="quotelev1">&gt; -#define IB_MGMT_CLASS_SUBN_ADM        0x03
</span><br>
<span class="quotelev1">&gt; -#define IB_MGMT_METHOD_GET            0x01
</span><br>
<span class="quotelev1">&gt; -#define IB_SA_TID_GET_PATH_REC_0      0xCA000000UL
</span><br>
<span class="quotelev1">&gt; -#define IB_SA_TID_GET_PATH_REC_1      0xBEEF0000UL
</span><br>
<span class="quotelev1">&gt; -#define IB_PATH_REC_SL_MASK           0x000F
</span><br>
<span class="quotelev1">&gt; -#define IB_SA_ATTR_PATH_REC           0x35
</span><br>
<span class="quotelev1">&gt; -#define IB_SA_PATH_REC_DLID           (1&lt;&lt;4)
</span><br>
<span class="quotelev1">&gt; -#define IB_SA_PATH_REC_SLID           (1&lt;&lt;5)
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; -#ifdef __WINDOWS__
</span><br>
<span class="quotelev1">&gt; -  #pragma pack(push)
</span><br>
<span class="quotelev1">&gt; -  #pragma pack(1)
</span><br>
<span class="quotelev1">&gt; -#endif
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; -struct ib_mad_hdr {
</span><br>
<span class="quotelev1">&gt; -    uint8_t   base_version;
</span><br>
<span class="quotelev1">&gt; -    uint8_t   mgmt_class;
</span><br>
<span class="quotelev1">&gt; -    uint8_t   class_version;
</span><br>
<span class="quotelev1">&gt; -    uint8_t   method;
</span><br>
<span class="quotelev1">&gt; -    uint16_t  status;
</span><br>
<span class="quotelev1">&gt; -    uint16_t  class_spec;
</span><br>
<span class="quotelev1">&gt; -    uint32_t  tid[2];
</span><br>
<span class="quotelev1">&gt; -    uint16_t  attr_id;
</span><br>
<span class="quotelev1">&gt; -    uint16_t  resv;
</span><br>
<span class="quotelev1">&gt; -    uint32_t  attr_mod;
</span><br>
<span class="quotelev1">&gt; -} PACK_SUFFIX;
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; -struct ib_rmpp_hdr {
</span><br>
<span class="quotelev1">&gt; -    uint32_t  raw[3];
</span><br>
<span class="quotelev1">&gt; -} PACK_SUFFIX;
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; -struct ib_sa_hdr {
</span><br>
<span class="quotelev1">&gt; -    uint32_t sm_key[2];
</span><br>
<span class="quotelev1">&gt; -    uint16_t reserved;
</span><br>
<span class="quotelev1">&gt; -    uint16_t attrib_offset;
</span><br>
<span class="quotelev1">&gt; -    uint32_t comp_mask[2];
</span><br>
<span class="quotelev1">&gt; -} PACK_SUFFIX;
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; -typedef union _ib_gid {
</span><br>
<span class="quotelev1">&gt; -    uint8_t raw[16];
</span><br>
<span class="quotelev1">&gt; -    struct _ib_gid_unicast {
</span><br>
<span class="quotelev1">&gt; -        uint64_t prefix;
</span><br>
<span class="quotelev1">&gt; -        uint64_t interface_id;
</span><br>
<span class="quotelev1">&gt; -    } PACK_SUFFIX unicast;
</span><br>
<span class="quotelev1">&gt; -    struct _ib_gid_multicast {
</span><br>
<span class="quotelev1">&gt; -        uint8_t header[2];
</span><br>
<span class="quotelev1">&gt; -        uint8_t raw_group_id[14];
</span><br>
<span class="quotelev1">&gt; -    } PACK_SUFFIX multicast;
</span><br>
<span class="quotelev1">&gt; -} PACK_SUFFIX ib_gid_t;
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; -struct ib_path_record {
</span><br>
<span class="quotelev1">&gt; -    uint64_t service_id;
</span><br>
<span class="quotelev1">&gt; -    ib_gid_t dgit;
</span><br>
<span class="quotelev1">&gt; -    ib_gid_t sgit;
</span><br>
<span class="quotelev1">&gt; -    uint16_t dlid;
</span><br>
<span class="quotelev1">&gt; -    uint16_t slid;
</span><br>
<span class="quotelev1">&gt; -    uint32_t hop_flow_raw;
</span><br>
<span class="quotelev1">&gt; -    uint8_t  tclass;
</span><br>
<span class="quotelev1">&gt; -    uint8_t  num_path;
</span><br>
<span class="quotelev1">&gt; -    uint16_t pkey;
</span><br>
<span class="quotelev1">&gt; -    uint8_t  reserved1;
</span><br>
<span class="quotelev1">&gt; -    uint8_t  qos_class_sl;
</span><br>
<span class="quotelev1">&gt; -    uint8_t  mtu;
</span><br>
<span class="quotelev1">&gt; -    uint8_t  rate;
</span><br>
<span class="quotelev1">&gt; -    uint32_t preference__packet_lifetime__packet_lifetime_selector;
</span><br>
<span class="quotelev1">&gt; -    uint32_t reserved2[35];
</span><br>
<span class="quotelev1">&gt; -} PACK_SUFFIX;
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; -union ib_sa_data {
</span><br>
<span class="quotelev1">&gt; -    struct ib_path_record path_record;
</span><br>
<span class="quotelev1">&gt; -} PACK_SUFFIX;
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; -struct ib_mad_sa {
</span><br>
<span class="quotelev1">&gt; -    struct ib_mad_hdr mad_hdr;
</span><br>
<span class="quotelev1">&gt; -    struct ib_rmpp_hdr rmpp_hdr;
</span><br>
<span class="quotelev1">&gt; -    struct ib_sa_hdr sa_hdr;
</span><br>
<span class="quotelev1">&gt; -    union  ib_sa_data sa_data;
</span><br>
<span class="quotelev1">&gt; -} PACK_SUFFIX;
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; -#ifdef __WINDOWS__
</span><br>
<span class="quotelev1">&gt; -  #pragma pack(pop)
</span><br>
<span class="quotelev1">&gt; -#endif
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; +#if (ENABLE_DYNAMIC_SL)
</span><br>
<span class="quotelev1">&gt; static struct mca_btl_openib_sa_qp_cache {
</span><br>
<span class="quotelev1">&gt;     /* There will be a MR with the one send and receive buffer together */
</span><br>
<span class="quotelev1">&gt;     /* The send buffer is first, the receive buffer is second */
</span><br>
<span class="quotelev1">&gt;     /* The receive buffer in a UD queue pair needs room for the 40 byte GRH */
</span><br>
<span class="quotelev1">&gt;     /* The buffers are first in the structure for page alignment */
</span><br>
<span class="quotelev1">&gt; -    char     send_recv_buffer[sizeof(struct ib_mad_sa) * 2 + 40];
</span><br>
<span class="quotelev1">&gt; +    char     send_recv_buffer[MAD_BLOCK_SIZE * 2 + 40];
</span><br>
<span class="quotelev1">&gt;     struct   mca_btl_openib_sa_qp_cache *next;
</span><br>
<span class="quotelev1">&gt;     struct   ibv_context *context;
</span><br>
<span class="quotelev1">&gt;     char     *device_name;
</span><br>
<span class="quotelev1">&gt; @@ -168,8 +80,9 @@
</span><br>
<span class="quotelev1">&gt;     struct   ibv_pd *pd;
</span><br>
<span class="quotelev1">&gt;     struct   ibv_recv_wr rwr;
</span><br>
<span class="quotelev1">&gt;     struct   ibv_sge rsge;
</span><br>
<span class="quotelev1">&gt; -    char     sl_values[65536];
</span><br>
<span class="quotelev1">&gt; +    uint8_t  sl_values[65536]; /* 64K */
</span><br>
<span class="quotelev1">&gt; } *sa_qp_cache = 0;
</span><br>
<span class="quotelev1">&gt; +#endif
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; static int oob_priority = 50;
</span><br>
<span class="quotelev1">&gt; static bool rml_recv_posted = false;
</span><br>
<span class="quotelev1">&gt; @@ -198,27 +111,31 @@
</span><br>
<span class="quotelev1">&gt; static void rml_recv_cb(int status, orte_process_name_t* process_name, 
</span><br>
<span class="quotelev1">&gt;                         opal_buffer_t* buffer, orte_rml_tag_t tag, 
</span><br>
<span class="quotelev1">&gt;                         void* cbdata);
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +#if (ENABLE_DYNAMIC_SL)
</span><br>
<span class="quotelev1">&gt; static int init_ud_qp(struct ibv_context *context_arg,
</span><br>
<span class="quotelev1">&gt;                       struct mca_btl_openib_sa_qp_cache *cache);
</span><br>
<span class="quotelev1">&gt; static void init_sa_mad(struct mca_btl_openib_sa_qp_cache *cache,
</span><br>
<span class="quotelev1">&gt; -                        struct ib_mad_sa *sag,
</span><br>
<span class="quotelev1">&gt; -                        struct ibv_send_wr *swr,
</span><br>
<span class="quotelev1">&gt; -                        struct ibv_sge *ssge,
</span><br>
<span class="quotelev1">&gt; -                        uint16_t lid,
</span><br>
<span class="quotelev1">&gt; -                        uint16_t rem_lid);
</span><br>
<span class="quotelev1">&gt; +                       ib_sa_mad_t *sa_mad,
</span><br>
<span class="quotelev1">&gt; +                       struct ibv_send_wr *swr,
</span><br>
<span class="quotelev1">&gt; +                       struct ibv_sge *ssge,
</span><br>
<span class="quotelev1">&gt; +                       uint16_t lid,
</span><br>
<span class="quotelev1">&gt; +                       uint16_t rem_lid);
</span><br>
<span class="quotelev1">&gt; static int get_pathrecord_info(struct mca_btl_openib_sa_qp_cache *cache,
</span><br>
<span class="quotelev1">&gt; -                               struct ib_mad_sa *sag,
</span><br>
<span class="quotelev1">&gt; -                               struct ib_mad_sa *sar,
</span><br>
<span class="quotelev1">&gt; -                               struct ibv_send_wr *swr,
</span><br>
<span class="quotelev1">&gt; -                               uint16_t lid,
</span><br>
<span class="quotelev1">&gt; -                               uint16_t rem_lid);
</span><br>
<span class="quotelev1">&gt; -static int init_device(struct ibv_context *context_arg,
</span><br>
<span class="quotelev1">&gt; -                       struct mca_btl_openib_sa_qp_cache *cache,
</span><br>
<span class="quotelev1">&gt; -                       uint32_t port_num);
</span><br>
<span class="quotelev1">&gt; -static int get_pathrecord_sl(struct ibv_context *context_arg,
</span><br>
<span class="quotelev1">&gt; -                             uint32_t port_num,
</span><br>
<span class="quotelev1">&gt; +                             ib_sa_mad_t *sa_mad,
</span><br>
<span class="quotelev1">&gt; +                             ib_sa_mad_t *sar,
</span><br>
<span class="quotelev1">&gt; +                             struct ibv_send_wr *swr,
</span><br>
<span class="quotelev1">&gt;                              uint16_t lid,
</span><br>
<span class="quotelev1">&gt;                              uint16_t rem_lid);
</span><br>
<span class="quotelev1">&gt; +static int init_device(struct ibv_context *context_arg,
</span><br>
<span class="quotelev1">&gt; +                      struct mca_btl_openib_sa_qp_cache *cache,
</span><br>
<span class="quotelev1">&gt; +                      uint32_t port_num);
</span><br>
<span class="quotelev1">&gt; +static int get_pathrecord_sl(struct ibv_context *context_arg,
</span><br>
<span class="quotelev1">&gt; +                           uint32_t port_num,
</span><br>
<span class="quotelev1">&gt; +                           uint16_t lid,
</span><br>
<span class="quotelev1">&gt; +                           uint16_t rem_lid);
</span><br>
<span class="quotelev1">&gt; +static void free_sa_qp_cache(void);
</span><br>
<span class="quotelev1">&gt; +#endif
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /*
</span><br>
<span class="quotelev1">&gt;  * The &quot;component&quot; struct -- the top-level function pointers for the
</span><br>
<span class="quotelev1">&gt; @@ -351,6 +268,33 @@
</span><br>
<span class="quotelev1">&gt;     return OMPI_SUCCESS;
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; +#if (ENABLE_DYNAMIC_SL)
</span><br>
<span class="quotelev1">&gt; +static void free_sa_qp_cache(void)
</span><br>
<span class="quotelev1">&gt; +{
</span><br>
<span class="quotelev1">&gt; +    struct mca_btl_openib_sa_qp_cache *cache, *tmp;
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +    cache = sa_qp_cache;
</span><br>
<span class="quotelev1">&gt; +    while (NULL != cache) {
</span><br>
<span class="quotelev1">&gt; +        /* free cache data */
</span><br>
<span class="quotelev1">&gt; +        if (cache-&gt;device_name)
</span><br>
<span class="quotelev1">&gt; +            free(cache-&gt;device_name);
</span><br>
<span class="quotelev1">&gt; +        if (NULL != cache-&gt;qp)
</span><br>
<span class="quotelev1">&gt; +            ibv_destroy_qp(cache-&gt;qp);
</span><br>
<span class="quotelev1">&gt; +        if (NULL != cache-&gt;ah)
</span><br>
<span class="quotelev1">&gt; +            ibv_destroy_ah(cache-&gt;ah);
</span><br>
<span class="quotelev1">&gt; +        if (NULL != cache-&gt;cq)
</span><br>
<span class="quotelev1">&gt; +            ibv_destroy_cq(cache-&gt;cq);
</span><br>
<span class="quotelev1">&gt; +        if (NULL != cache-&gt;mr)
</span><br>
<span class="quotelev1">&gt; +            ibv_dereg_mr(cache-&gt;mr);
</span><br>
<span class="quotelev1">&gt; +        if (NULL != cache-&gt;pd)
</span><br>
<span class="quotelev1">&gt; +            ibv_dealloc_pd(cache-&gt;pd);
</span><br>
<span class="quotelev1">&gt; +        tmp = cache-&gt;next;
</span><br>
<span class="quotelev1">&gt; +        free(cache);
</span><br>
<span class="quotelev1">&gt; +        cache = tmp;
</span><br>
<span class="quotelev1">&gt; +    }
</span><br>
<span class="quotelev1">&gt; +}
</span><br>
<span class="quotelev1">&gt; +#endif
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; /*
</span><br>
<span class="quotelev1">&gt;  * Component finalize function.  Cleanup RML non-blocking receive.
</span><br>
<span class="quotelev1">&gt;  */
</span><br>
<span class="quotelev1">&gt; @@ -360,7 +304,9 @@
</span><br>
<span class="quotelev1">&gt;         orte_rml.recv_cancel(ORTE_NAME_WILDCARD, OMPI_RML_TAG_OPENIB);
</span><br>
<span class="quotelev1">&gt;         rml_recv_posted = false;
</span><br>
<span class="quotelev1">&gt;     }
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; + #if (ENABLE_DYNAMIC_SL)
</span><br>
<span class="quotelev1">&gt; +   free_sa_qp_cache();
</span><br>
<span class="quotelev1">&gt; +#endif
</span><br>
<span class="quotelev1">&gt;     return OMPI_SUCCESS;
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; @@ -425,7 +371,7 @@
</span><br>
<span class="quotelev1">&gt;  */
</span><br>
<span class="quotelev1">&gt; static int qp_connect_all(mca_btl_openib_endpoint_t *endpoint)
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt; -    int i, rc;
</span><br>
<span class="quotelev1">&gt; +    int i;
</span><br>
<span class="quotelev1">&gt;     mca_btl_openib_module_t* openib_btl =
</span><br>
<span class="quotelev1">&gt;         (mca_btl_openib_module_t*)endpoint-&gt;endpoint_btl;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; @@ -446,18 +392,24 @@
</span><br>
<span class="quotelev1">&gt;         attr.ah_attr.dlid          = endpoint-&gt;rem_info.rem_lid;
</span><br>
<span class="quotelev1">&gt;         attr.ah_attr.src_path_bits = openib_btl-&gt;src_path_bits;
</span><br>
<span class="quotelev1">&gt;         attr.ah_attr.port_num      = openib_btl-&gt;port_num;
</span><br>
<span class="quotelev1">&gt; -        attr.ah_attr.sl = mca_btl_openib_component.ib_service_level;
</span><br>
<span class="quotelev1">&gt; -        /* if user enable ib_path_rec_service_level - dynamically get the sl from PathRecord */
</span><br>
<span class="quotelev1">&gt; -        if (mca_btl_openib_component.ib_path_rec_service_level &gt; 0) {
</span><br>
<span class="quotelev1">&gt; -            rc = get_pathrecord_sl(qp-&gt;context,
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +#if (ENABLE_DYNAMIC_SL)
</span><br>
<span class="quotelev1">&gt; +        /* if user enabled dynamic SL, get it from PathRecord */
</span><br>
<span class="quotelev1">&gt; +        if (0 != mca_btl_openib_component.ib_path_record_service_level) {
</span><br>
<span class="quotelev1">&gt; +            int rc = get_pathrecord_sl(qp-&gt;context,
</span><br>
<span class="quotelev1">&gt;                                    attr.ah_attr.port_num,
</span><br>
<span class="quotelev1">&gt;                                    openib_btl-&gt;lid,
</span><br>
<span class="quotelev1">&gt;                                    attr.ah_attr.dlid);
</span><br>
<span class="quotelev1">&gt;             if (OMPI_ERROR == rc) {
</span><br>
<span class="quotelev1">&gt; +                free_sa_qp_cache();
</span><br>
<span class="quotelev1">&gt;                 return OMPI_ERROR;
</span><br>
<span class="quotelev1">&gt;             }
</span><br>
<span class="quotelev1">&gt;             attr.ah_attr.sl = rc;
</span><br>
<span class="quotelev1">&gt;         }
</span><br>
<span class="quotelev1">&gt; +#else
</span><br>
<span class="quotelev1">&gt; +        attr.ah_attr.sl = mca_btl_openib_component.ib_service_level;
</span><br>
<span class="quotelev1">&gt; +#endif
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt;         /* JMS to be filled in later dynamically */
</span><br>
<span class="quotelev1">&gt;         attr.ah_attr.static_rate   = 0;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; @@ -1056,6 +1008,7 @@
</span><br>
<span class="quotelev1">&gt;     OPAL_THREAD_UNLOCK(&amp;mca_btl_openib_component.ib_lock);
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; +#if (ENABLE_DYNAMIC_SL)
</span><br>
<span class="quotelev1">&gt; static int init_ud_qp(struct ibv_context *context_arg,
</span><br>
<span class="quotelev1">&gt;                       struct mca_btl_openib_sa_qp_cache *cache)
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt; @@ -1094,7 +1047,7 @@
</span><br>
<span class="quotelev1">&gt;     memset(&amp;mattr, 0, sizeof(mattr));
</span><br>
<span class="quotelev1">&gt;     mattr.qp_state = IBV_QPS_INIT;
</span><br>
<span class="quotelev1">&gt;     mattr.port_num = cache-&gt;port_num;
</span><br>
<span class="quotelev1">&gt; -    mattr.qkey = IB_GLOBAL_QKEY;
</span><br>
<span class="quotelev1">&gt; +    mattr.qkey = ntohl(IB_QP1_WELL_KNOWN_Q_KEY);
</span><br>
<span class="quotelev1">&gt;     rc = ibv_modify_qp(cache-&gt;qp, &amp;mattr,
</span><br>
<span class="quotelev1">&gt;             IBV_QP_STATE              |
</span><br>
<span class="quotelev1">&gt;             IBV_QP_PKEY_INDEX         |
</span><br>
<span class="quotelev1">&gt; @@ -1128,61 +1081,75 @@
</span><br>
<span class="quotelev1">&gt;     return OMPI_SUCCESS;
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; static void init_sa_mad(struct mca_btl_openib_sa_qp_cache *cache,
</span><br>
<span class="quotelev1">&gt; -                        struct ib_mad_sa *sag,
</span><br>
<span class="quotelev1">&gt; -                        struct ibv_send_wr *swr,
</span><br>
<span class="quotelev1">&gt; -                        struct ibv_sge *ssge,
</span><br>
<span class="quotelev1">&gt; -                        uint16_t lid,
</span><br>
<span class="quotelev1">&gt; -                        uint16_t rem_lid)
</span><br>
<span class="quotelev1">&gt; +                       ib_sa_mad_t *sa_mad,
</span><br>
<span class="quotelev1">&gt; +                       struct ibv_send_wr *swr,
</span><br>
<span class="quotelev1">&gt; +                       struct ibv_sge *ssge,
</span><br>
<span class="quotelev1">&gt; +                       uint16_t lid,
</span><br>
<span class="quotelev1">&gt; +                       uint16_t rem_lid)
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt; -    memset(sag, 0, sizeof(*sag));
</span><br>
<span class="quotelev1">&gt; +    ib_path_rec_t *path_record = (ib_path_rec_t*)sa_mad-&gt;data;
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt;     memset(swr, 0, sizeof(*swr));
</span><br>
<span class="quotelev1">&gt;     memset(ssge, 0, sizeof(*ssge));
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -    sag-&gt;mad_hdr.base_version = IB_MGMT_BASE_VERSION;
</span><br>
<span class="quotelev1">&gt; -    sag-&gt;mad_hdr.mgmt_class = IB_MGMT_CLASS_SUBN_ADM;
</span><br>
<span class="quotelev1">&gt; -    sag-&gt;mad_hdr.class_version = 2;
</span><br>
<span class="quotelev1">&gt; -    sag-&gt;mad_hdr.method = IB_MGMT_METHOD_GET;
</span><br>
<span class="quotelev1">&gt; -    sag-&gt;mad_hdr.attr_id = htons (IB_SA_ATTR_PATH_REC);
</span><br>
<span class="quotelev1">&gt; -    sag-&gt;mad_hdr.tid[0] = IB_SA_TID_GET_PATH_REC_0 + cache-&gt;qp-&gt;qp_num;
</span><br>
<span class="quotelev1">&gt; -    sag-&gt;mad_hdr.tid[1] = IB_SA_TID_GET_PATH_REC_1 + rem_lid;
</span><br>
<span class="quotelev1">&gt; -    sag-&gt;sa_hdr.comp_mask[1] =
</span><br>
<span class="quotelev1">&gt; -        htonl(IB_SA_PATH_REC_DLID | IB_SA_PATH_REC_SLID);
</span><br>
<span class="quotelev1">&gt; -    sag-&gt;sa_data.path_record.dlid = htons(rem_lid);
</span><br>
<span class="quotelev1">&gt; -    sag-&gt;sa_data.path_record.slid = htons(lid);
</span><br>
<span class="quotelev1">&gt; +    /* Initialize the standard MAD header. */
</span><br>
<span class="quotelev1">&gt; +    memset(sa_mad, 0, MAD_BLOCK_SIZE);
</span><br>
<span class="quotelev1">&gt; +    ib_mad_init_new((ib_mad_t *)sa_mad,          /* mad header pointer */
</span><br>
<span class="quotelev1">&gt; +                    IB_MCLASS_SUBN_ADM,          /* management class */
</span><br>
<span class="quotelev1">&gt; +                    (uint8_t) 2,                 /* version */
</span><br>
<span class="quotelev1">&gt; +                    IB_MAD_METHOD_GET,           /* method */
</span><br>
<span class="quotelev1">&gt; +                    hton64((uint64_t)lid &lt;&lt; 48 | /* transaction ID */
</span><br>
<span class="quotelev1">&gt; +                           (uint64_t)rem_lid &lt;&lt; 32 |
</span><br>
<span class="quotelev1">&gt; +                           (uint64_t)cache-&gt;qp-&gt;qp_num &lt;&lt; 8),
</span><br>
<span class="quotelev1">&gt; +                    IB_MAD_ATTR_PATH_RECORD,     /* attribute ID */
</span><br>
<span class="quotelev1">&gt; +                    0);                          /* attribute modifier */
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +    sa_mad-&gt;comp_mask = IB_PR_COMPMASK_DLID | IB_PR_COMPMASK_SLID;
</span><br>
<span class="quotelev1">&gt; +    path_record-&gt;dlid = htons(rem_lid);
</span><br>
<span class="quotelev1">&gt; +    path_record-&gt;slid = htons(lid);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     swr-&gt;sg_list = ssge;
</span><br>
<span class="quotelev1">&gt;     swr-&gt;num_sge = 1;
</span><br>
<span class="quotelev1">&gt;     swr-&gt;opcode = IBV_WR_SEND;
</span><br>
<span class="quotelev1">&gt;     swr-&gt;wr.ud.ah = cache-&gt;ah;
</span><br>
<span class="quotelev1">&gt; -    swr-&gt;wr.ud.remote_qpn = IB_SA_QPN;
</span><br>
<span class="quotelev1">&gt; -    swr-&gt;wr.ud.remote_qkey = IB_GLOBAL_QKEY;
</span><br>
<span class="quotelev1">&gt; +    swr-&gt;wr.ud.remote_qpn = ntohl(IB_QP1);
</span><br>
<span class="quotelev1">&gt; +    swr-&gt;wr.ud.remote_qkey = ntohl(IB_QP1_WELL_KNOWN_Q_KEY);
</span><br>
<span class="quotelev1">&gt;     swr-&gt;send_flags = IBV_SEND_SIGNALED | IBV_SEND_SOLICITED;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -    ssge-&gt;addr = (uint64_t)(void *)sag;
</span><br>
<span class="quotelev1">&gt; -    ssge-&gt;length = sizeof(*sag);
</span><br>
<span class="quotelev1">&gt; +    ssge-&gt;addr = (uint64_t)(void *)sa_mad;
</span><br>
<span class="quotelev1">&gt; +    ssge-&gt;length = MAD_BLOCK_SIZE;
</span><br>
<span class="quotelev1">&gt;     ssge-&gt;lkey = cache-&gt;mr-&gt;lkey;
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; static int get_pathrecord_info(struct mca_btl_openib_sa_qp_cache *cache,
</span><br>
<span class="quotelev1">&gt; -                               struct ib_mad_sa *sag,
</span><br>
<span class="quotelev1">&gt; -                               struct ib_mad_sa *sar,
</span><br>
<span class="quotelev1">&gt; -                               struct ibv_send_wr *swr,
</span><br>
<span class="quotelev1">&gt; -                               uint16_t lid,
</span><br>
<span class="quotelev1">&gt; -                               uint16_t rem_lid)
</span><br>
<span class="quotelev1">&gt; +                             ib_sa_mad_t *req_mad,
</span><br>
<span class="quotelev1">&gt; +                             ib_sa_mad_t *resp_mad,
</span><br>
<span class="quotelev1">&gt; +                             struct ibv_send_wr *swr,
</span><br>
<span class="quotelev1">&gt; +                             uint16_t lid,
</span><br>
<span class="quotelev1">&gt; +                             uint16_t rem_lid)
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt;     struct ibv_send_wr *bswr;
</span><br>
<span class="quotelev1">&gt;     struct ibv_wc wc;
</span><br>
<span class="quotelev1">&gt;     struct timeval get_sl_rec_last_sent, get_sl_rec_last_poll;
</span><br>
<span class="quotelev1">&gt;     struct ibv_recv_wr *brwr;
</span><br>
<span class="quotelev1">&gt;     int got_sl_value, get_sl_rec_retries, rc, ne, i;
</span><br>
<span class="quotelev1">&gt; +    ib_path_rec_t *req_path_record = ib_sa_mad_get_payload_ptr(req_mad);
</span><br>
<span class="quotelev1">&gt; +    ib_path_rec_t *resp_path_record = ib_sa_mad_get_payload_ptr(resp_mad);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     got_sl_value = 0;
</span><br>
<span class="quotelev1">&gt;     get_sl_rec_retries = 0;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; +    rc = ibv_post_recv(cache-&gt;qp, &amp;(cache-&gt;rwr), &amp;brwr);
</span><br>
<span class="quotelev1">&gt; +    if (0 != rc) {
</span><br>
<span class="quotelev1">&gt; +        BTL_ERROR((&quot;error posting receive on QP [0x%x] errno says: %s [%d]&quot;,
</span><br>
<span class="quotelev1">&gt; +                   cache-&gt;qp-&gt;qp_num, strerror(errno), errno));
</span><br>
<span class="quotelev1">&gt; +        return OMPI_ERROR;
</span><br>
<span class="quotelev1">&gt; +    }
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt;     while (0 == got_sl_value) {
</span><br>
<span class="quotelev1">&gt;         rc = ibv_post_send(cache-&gt;qp, swr, &amp;bswr);
</span><br>
<span class="quotelev1">&gt;         if (0 != rc) {
</span><br>
<span class="quotelev1">&gt; -            BTL_ERROR((&quot;error posing send on QP[%x] errno says: %s [%d]&quot;,
</span><br>
<span class="quotelev1">&gt; +            BTL_ERROR((&quot;error posting send on QP [0x%x] errno says: %s [%d]&quot;,
</span><br>
<span class="quotelev1">&gt;                        cache-&gt;qp-&gt;qp_num, strerror(errno), errno));
</span><br>
<span class="quotelev1">&gt;             return OMPI_ERROR;
</span><br>
<span class="quotelev1">&gt;         }
</span><br>
<span class="quotelev1">&gt; @@ -1190,25 +1157,23 @@
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;         while (0 == got_sl_value) {
</span><br>
<span class="quotelev1">&gt;             ne = ibv_poll_cq(cache-&gt;cq, 1, &amp;wc);
</span><br>
<span class="quotelev1">&gt; -            if (ne &gt; 0
</span><br>
<span class="quotelev1">&gt; -                    &amp;&amp; wc.status == IBV_WC_SUCCESS
</span><br>
<span class="quotelev1">&gt; -                    &amp;&amp; wc.opcode == IBV_WC_RECV
</span><br>
<span class="quotelev1">&gt; -                    &amp;&amp; wc.byte_len &gt;= sizeof(*sar)
</span><br>
<span class="quotelev1">&gt; -                    &amp;&amp; sar-&gt;mad_hdr.tid[0] == sag-&gt;mad_hdr.tid[0]
</span><br>
<span class="quotelev1">&gt; -                    &amp;&amp; sar-&gt;mad_hdr.tid[1] == sag-&gt;mad_hdr.tid[1]) {
</span><br>
<span class="quotelev1">&gt; -                if (0 == sar-&gt;mad_hdr.status
</span><br>
<span class="quotelev1">&gt; -                        &amp;&amp; sar-&gt;sa_data.path_record.slid == htons(lid)
</span><br>
<span class="quotelev1">&gt; -                        &amp;&amp; sar-&gt;sa_data.path_record.dlid == htons(rem_lid)) {
</span><br>
<span class="quotelev1">&gt; +            if (ne &gt; 0 &amp;&amp;
</span><br>
<span class="quotelev1">&gt; +                IBV_WC_SUCCESS == wc.status &amp;&amp;
</span><br>
<span class="quotelev1">&gt; +                IBV_WC_RECV == wc.opcode &amp;&amp;
</span><br>
<span class="quotelev1">&gt; +                wc.byte_len &gt;= MAD_BLOCK_SIZE &amp;&amp;
</span><br>
<span class="quotelev1">&gt; +                resp_mad-&gt;trans_id == req_mad-&gt;trans_id) {
</span><br>
<span class="quotelev1">&gt; +                if (0 == resp_mad-&gt;status &amp;&amp;
</span><br>
<span class="quotelev1">&gt; +                    req_path_record-&gt;slid == htons(lid) &amp;&amp;
</span><br>
<span class="quotelev1">&gt; +                    req_path_record-&gt;dlid == htons(rem_lid)) {
</span><br>
<span class="quotelev1">&gt;                     /* Everything matches, so we have the desired SL */
</span><br>
<span class="quotelev1">&gt; -                    cache-&gt;sl_values[rem_lid] =
</span><br>
<span class="quotelev1">&gt; -                        sar-&gt;sa_data.path_record.qos_class_sl &amp; IB_PATH_REC_SL_MASK;
</span><br>
<span class="quotelev1">&gt; +                    cache-&gt;sl_values[rem_lid] = ib_path_rec_sl(resp_path_record);
</span><br>
<span class="quotelev1">&gt;                     got_sl_value = 1; /* still must repost recieve buf */
</span><br>
<span class="quotelev1">&gt;                 } else {
</span><br>
<span class="quotelev1">&gt;                     /* Probably bad status, unlikely bad lid match. We will */
</span><br>
<span class="quotelev1">&gt;                     /* ignore response and let it time out so that we do a  */
</span><br>
<span class="quotelev1">&gt;                     /* retry, but after a delay. We must make a new TID so  */
</span><br>
<span class="quotelev1">&gt;                     /* the SM doesn't see it as the same request.           */
</span><br>
<span class="quotelev1">&gt; -                    sag-&gt;mad_hdr.tid[1] += 0x10000;
</span><br>
<span class="quotelev1">&gt; +                    req_mad-&gt;trans_id += hton64(1);
</span><br>
<span class="quotelev1">&gt;                 }
</span><br>
<span class="quotelev1">&gt;                 rc = ibv_post_recv(cache-&gt;qp, &amp;(cache-&gt;rwr), &amp;brwr);
</span><br>
<span class="quotelev1">&gt;                 if (0 != rc) {
</span><br>
<span class="quotelev1">&gt; @@ -1249,7 +1214,6 @@
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt;     struct ibv_ah_attr aattr;
</span><br>
<span class="quotelev1">&gt;     struct ibv_port_attr pattr;
</span><br>
<span class="quotelev1">&gt; -    struct ibv_recv_wr *brwr;
</span><br>
<span class="quotelev1">&gt;     int rc;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     cache-&gt;context = ibv_open_device(context_arg-&gt;device);
</span><br>
<span class="quotelev1">&gt; @@ -1315,16 +1279,10 @@
</span><br>
<span class="quotelev1">&gt;     cache-&gt;rwr.sg_list = &amp;(cache-&gt;rsge);
</span><br>
<span class="quotelev1">&gt;     memset(&amp;(cache-&gt;rsge), 0, sizeof(cache-&gt;rsge));
</span><br>
<span class="quotelev1">&gt;     cache-&gt;rsge.addr = (uint64_t)(void *)
</span><br>
<span class="quotelev1">&gt; -        (cache-&gt;send_recv_buffer + sizeof(struct ib_mad_sa));
</span><br>
<span class="quotelev1">&gt; -    cache-&gt;rsge.length = sizeof(struct ib_mad_sa) + 40;
</span><br>
<span class="quotelev1">&gt; +        (cache-&gt;send_recv_buffer + MAD_BLOCK_SIZE);
</span><br>
<span class="quotelev1">&gt; +    cache-&gt;rsge.length = MAD_BLOCK_SIZE + 40;
</span><br>
<span class="quotelev1">&gt;     cache-&gt;rsge.lkey = cache-&gt;mr-&gt;lkey;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -    rc = ibv_post_recv(cache-&gt;qp, &amp;(cache-&gt;rwr), &amp;brwr);
</span><br>
<span class="quotelev1">&gt; -    if (0 != rc) {
</span><br>
<span class="quotelev1">&gt; -        BTL_ERROR((&quot;error posing receive on QP[%x] errno says: %s [%d]&quot;,
</span><br>
<span class="quotelev1">&gt; -                   cache-&gt;qp-&gt;qp_num, strerror(errno), errno));
</span><br>
<span class="quotelev1">&gt; -        return OMPI_ERROR;
</span><br>
<span class="quotelev1">&gt; -    }
</span><br>
<span class="quotelev1">&gt;     return 0;
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; @@ -1334,7 +1292,7 @@
</span><br>
<span class="quotelev1">&gt;                              uint16_t rem_lid)
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt;     struct ibv_send_wr swr;
</span><br>
<span class="quotelev1">&gt; -    struct ib_mad_sa *sag, *sar;
</span><br>
<span class="quotelev1">&gt; +    ib_sa_mad_t *req_mad, *resp_mad;
</span><br>
<span class="quotelev1">&gt;     struct ibv_sge ssge;
</span><br>
<span class="quotelev1">&gt;     struct mca_btl_openib_sa_qp_cache *cache;
</span><br>
<span class="quotelev1">&gt;     long page_size = sysconf(_SC_PAGESIZE);
</span><br>
<span class="quotelev1">&gt; @@ -1342,8 +1300,8 @@
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     /* search for a cached item */
</span><br>
<span class="quotelev1">&gt;     for (cache = sa_qp_cache; cache; cache = cache-&gt;next) {
</span><br>
<span class="quotelev1">&gt; -        if (strcmp(cache-&gt;device_name,
</span><br>
<span class="quotelev1">&gt; -                    ibv_get_device_name(context_arg-&gt;device)) == 0
</span><br>
<span class="quotelev1">&gt; +        if (0 == strcmp(cache-&gt;device_name,
</span><br>
<span class="quotelev1">&gt; +                    ibv_get_device_name(context_arg-&gt;device))
</span><br>
<span class="quotelev1">&gt;                 &amp;&amp; cache-&gt;port_num == port_num) {
</span><br>
<span class="quotelev1">&gt;             break;
</span><br>
<span class="quotelev1">&gt;         }
</span><br>
<span class="quotelev1">&gt; @@ -1365,15 +1323,15 @@
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     /* if the destination lid SL value is not in the cache, go get it */
</span><br>
<span class="quotelev1">&gt;     if (SL_NOT_PRESENT == cache-&gt;sl_values[rem_lid]) {
</span><br>
<span class="quotelev1">&gt; -        /* sag is first buffer, where we build the SA Get request to send */
</span><br>
<span class="quotelev1">&gt; -        sag = (struct ib_mad_sa *)(cache-&gt;send_recv_buffer);
</span><br>
<span class="quotelev1">&gt; +        /* sa_mad is first buffer, where we build the SA Get request to send */
</span><br>
<span class="quotelev1">&gt; +        req_mad = (ib_sa_mad_t *)(cache-&gt;send_recv_buffer);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -        init_sa_mad(cache, sag, &amp;swr, &amp;ssge, lid, rem_lid);
</span><br>
<span class="quotelev1">&gt; +        init_sa_mad(cache, req_mad, &amp;swr, &amp;ssge, lid, rem_lid);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -        /* sar is the receive buffer (40 byte GRH) */
</span><br>
<span class="quotelev1">&gt; -        sar = (struct ib_mad_sa *)(cache-&gt;send_recv_buffer + sizeof(struct ib_mad_sa) + 40);
</span><br>
<span class="quotelev1">&gt; +        /* resp_mad is the receive buffer (40 byte offset is for GRH) */
</span><br>
<span class="quotelev1">&gt; +        resp_mad = (ib_sa_mad_t *)(cache-&gt;send_recv_buffer + MAD_BLOCK_SIZE + 40);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -        rc = get_pathrecord_info(cache, sag, sar, &amp;swr, lid, rem_lid);
</span><br>
<span class="quotelev1">&gt; +        rc = get_pathrecord_info(cache, req_mad, resp_mad, &amp;swr, lid, rem_lid);
</span><br>
<span class="quotelev1">&gt;         if (0 != rc) {
</span><br>
<span class="quotelev1">&gt;             return rc;
</span><br>
<span class="quotelev1">&gt;         }
</span><br>
<span class="quotelev1">&gt; @@ -1382,3 +1340,4 @@
</span><br>
<span class="quotelev1">&gt;     /* now all we do is send back the value laying around */
</span><br>
<span class="quotelev1">&gt;     return cache-&gt;sl_values[rem_lid];
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; +#endif
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; svn-full mailing list
</span><br>
<span class="quotelev1">&gt; svn-full_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/svn-full">http://www.open-mpi.org/mailman/listinfo.cgi/svn-full</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9463.php">Yevgeny Kliteynik: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r24836"</a>
<li><strong>Previous message:</strong> <a href="9461.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] &quot;Open MPI&quot;-based MPI library used by K computer"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9464.php">Yevgeny Kliteynik: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r24830"</a>
<li><strong>Reply:</strong> <a href="9464.php">Yevgeny Kliteynik: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r24830"</a>
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

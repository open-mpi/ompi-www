<? include("../../include/msg-header.inc"); ?>
<!-- received="Sat Jul  7 03:52:11 2007" -->
<!-- isoreceived="20070707075211" -->
<!-- sent="Sat, 7 Jul 2007 09:51:25 +0200" -->
<!-- isosent="20070707075125" -->
<!-- name="Rainer Keller" -->
<!-- email="keller_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r15302" -->
<!-- id="200707070951.25464.keller_at_hlrs.de" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="200707070431.l674V8O4020033_at_sourcehaven.osl.iu.edu" -->
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
<strong>From:</strong> Rainer Keller (<em>keller_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-07-07 03:51:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1803.php">George Bosilca: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r15302"</a>
<li><strong>Previous message:</strong> <a href="1801.php">Tim Prins: "[OMPI devel] Ob1 segfault"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1803.php">George Bosilca: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r15302"</a>
<li><strong>Reply:</strong> <a href="1803.php">George Bosilca: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r15302"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi George,
<br>
joust out of curiosity, how much did that get You?
<br>
<p>CU,
<br>
Rainer
<br>
<p>On Saturday 07 July 2007 06:31, bosilca_at_[hidden] wrote:
<br>
<span class="quotelev1">&gt; Author: bosilca
</span><br>
<span class="quotelev1">&gt; Date: 2007-07-07 00:31:06 EDT (Sat, 07 Jul 2007)
</span><br>
<span class="quotelev1">&gt; New Revision: 15302
</span><br>
<span class="quotelev1">&gt; URL: <a href="https://svn.open-mpi.org/trac/ompi/changeset/15302">https://svn.open-mpi.org/trac/ompi/changeset/15302</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Log:
</span><br>
<span class="quotelev1">&gt; Add few OPAL_LIKELY/OPAL_UNLIKELY to the datatype engine.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Text files modified:
</span><br>
<span class="quotelev1">&gt;    trunk/ompi/datatype/convertor.c |    20 ++++++++++----------
</span><br>
<span class="quotelev1">&gt;    trunk/ompi/datatype/convertor.h |     9 +++++----
</span><br>
<span class="quotelev1">&gt;    2 files changed, 15 insertions(+), 14 deletions(-)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Modified: trunk/ompi/datatype/convertor.c
</span><br>
<span class="quotelev1">&gt; ===========================================================================
</span><br>
<span class="quotelev1">&gt;=== --- trunk/ompi/datatype/convertor.c	(original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/ompi/datatype/convertor.c	2007-07-07 00:31:06 EDT (Sat, 07 Jul
</span><br>
<span class="quotelev1">&gt; 2007) @@ -229,7 +229,7 @@
</span><br>
<span class="quotelev1">&gt;  {
</span><br>
<span class="quotelev1">&gt;      OMPI_CONVERTOR_SET_STATUS_BEFORE_PACK_UNPACK( pConv, iov, out_size,
</span><br>
<span class="quotelev1">&gt; max_data );
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -    if( pConv-&gt;flags &amp; CONVERTOR_NO_OP ) {
</span><br>
<span class="quotelev1">&gt; +    if( OPAL_LIKELY(pConv-&gt;flags &amp; CONVERTOR_NO_OP) ) {
</span><br>
<span class="quotelev1">&gt;          /* We are doing conversion on a contiguous datatype on a
</span><br>
<span class="quotelev1">&gt; homogeneous * environment. The convertor contain minimal informations, we
</span><br>
<span class="quotelev1">&gt; only * use the bConverted to manage the conversion.
</span><br>
<span class="quotelev1">&gt; @@ -245,7 +245,7 @@
</span><br>
<span class="quotelev1">&gt;              if( iov[i].iov_len &gt;= pending_length ) {
</span><br>
<span class="quotelev1">&gt;                  goto complete_contiguous_data_pack;
</span><br>
<span class="quotelev1">&gt;              }
</span><br>
<span class="quotelev1">&gt; -            if( NULL == iov[i].iov_base )
</span><br>
<span class="quotelev1">&gt; +            if( OPAL_LIKELY(NULL == iov[i].iov_base) )
</span><br>
<span class="quotelev1">&gt;                  iov[i].iov_base = base_pointer;
</span><br>
<span class="quotelev1">&gt;              else
</span><br>
<span class="quotelev1">&gt;                  MEMCPY( iov[i].iov_base, base_pointer, iov[i].iov_len );
</span><br>
<span class="quotelev1">&gt; @@ -257,7 +257,7 @@
</span><br>
<span class="quotelev1">&gt;          return 0;
</span><br>
<span class="quotelev1">&gt;      complete_contiguous_data_pack:
</span><br>
<span class="quotelev1">&gt;          iov[i].iov_len = pending_length;
</span><br>
<span class="quotelev1">&gt; -        if( NULL == iov[i].iov_base )
</span><br>
<span class="quotelev1">&gt; +        if( OPAL_LIKELY(NULL == iov[i].iov_base) )
</span><br>
<span class="quotelev1">&gt;              iov[i].iov_base = base_pointer;
</span><br>
<span class="quotelev1">&gt;          else
</span><br>
<span class="quotelev1">&gt;              MEMCPY( iov[i].iov_base, base_pointer, iov[i].iov_len );
</span><br>
<span class="quotelev1">&gt; @@ -276,7 +276,7 @@
</span><br>
<span class="quotelev1">&gt;  {
</span><br>
<span class="quotelev1">&gt;      OMPI_CONVERTOR_SET_STATUS_BEFORE_PACK_UNPACK( pConv, iov, out_size,
</span><br>
<span class="quotelev1">&gt; max_data );
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -    if( pConv-&gt;flags &amp; CONVERTOR_NO_OP ) {
</span><br>
<span class="quotelev1">&gt; +    if( OPAL_LIKELY(pConv-&gt;flags &amp; CONVERTOR_NO_OP) ) {
</span><br>
<span class="quotelev1">&gt;          /* We are doing conversion on a contiguous datatype on a
</span><br>
<span class="quotelev1">&gt; homogeneous * environment. The convertor contain minimal informations, we
</span><br>
<span class="quotelev1">&gt; only * use the bConverted to manage the conversion.
</span><br>
<span class="quotelev1">&gt; @@ -340,7 +340,7 @@
</span><br>
<span class="quotelev1">&gt;      /* we save the current displacement starting from the begining
</span><br>
<span class="quotelev1">&gt;       * of this data.
</span><br>
<span class="quotelev1">&gt;       */
</span><br>
<span class="quotelev1">&gt; -    if( 0 == count ) {
</span><br>
<span class="quotelev1">&gt; +    if( OPAL_LIKELY(0 == count) ) {
</span><br>
<span class="quotelev1">&gt;          pStack[1].type     = pElems-&gt;elem.common.type;
</span><br>
<span class="quotelev1">&gt;          pStack[1].count    = pElems-&gt;elem.count;
</span><br>
<span class="quotelev1">&gt;          pStack[1].disp     = pElems-&gt;elem.disp;
</span><br>
<span class="quotelev1">&gt; @@ -403,7 +403,7 @@
</span><br>
<span class="quotelev1">&gt;          rc = ompi_convertor_create_stack_at_begining( convertor,
</span><br>
<span class="quotelev1">&gt; ompi_ddt_local_sizes ); if( 0 == (*position) ) return rc;
</span><br>
<span class="quotelev1">&gt;      }
</span><br>
<span class="quotelev1">&gt; -    if( convertor-&gt;flags &amp; DT_FLAG_CONTIGUOUS ) {
</span><br>
<span class="quotelev1">&gt; +    if( OPAL_LIKELY(convertor-&gt;flags &amp; DT_FLAG_CONTIGUOUS) ) {
</span><br>
<span class="quotelev1">&gt;          rc = ompi_convertor_create_stack_with_pos_contig( convertor,
</span><br>
<span class="quotelev1">&gt; (*position), ompi_ddt_local_sizes ); } else {
</span><br>
<span class="quotelev1">&gt; @@ -443,13 +443,13 @@
</span><br>
<span class="quotelev1">&gt;           * completed. With this flag set the pack and unpack functions  \
</span><br>
<span class="quotelev1">&gt;           * will not do anything.                                        \
</span><br>
<span class="quotelev1">&gt;           */                                                             \
</span><br>
<span class="quotelev1">&gt; -        if( OPAL_UNLIKELY(0 == convertor-&gt;local_size) ) {               \
</span><br>
<span class="quotelev1">&gt; +        if( OPAL_UNLIKELY((0 == count) || (0 == datatype-&gt;size)) ) {    \
</span><br>
<span class="quotelev1">&gt;              convertor-&gt;flags |= CONVERTOR_COMPLETED;                    \
</span><br>
<span class="quotelev1">&gt;              convertor-&gt;remote_size = 0;                                 \
</span><br>
<span class="quotelev1">&gt;              return OMPI_SUCCESS;                                        \
</span><br>
<span class="quotelev1">&gt;          }                                                               \
</span><br>
<span class="quotelev1">&gt;                                                                          \
</span><br>
<span class="quotelev1">&gt; -        if( convertor-&gt;remoteArch == ompi_mpi_local_arch ) {            \
</span><br>
<span class="quotelev1">&gt; +        if( OPAL_LIKELY(convertor-&gt;remoteArch == ompi_mpi_local_arch) ) {
</span><br>
<span class="quotelev1">&gt; \ convertor-&gt;remote_size = convertor-&gt;local_size;             \ if(
</span><br>
<span class="quotelev1">&gt; (convertor-&gt;flags &amp; (CONVERTOR_WITH_CHECKSUM | DT_FLAG_NO_GAPS)) ==
</span><br>
<span class="quotelev1">&gt; DT_FLAG_NO_GAPS ) { \ return OMPI_SUCCESS;                                 
</span><br>
<span class="quotelev1">&gt;   \ @@ -599,7 +599,7 @@
</span><br>
<span class="quotelev1">&gt;      destination-&gt;local_size        = source-&gt;local_size;
</span><br>
<span class="quotelev1">&gt;      destination-&gt;remote_size       = source-&gt;remote_size;
</span><br>
<span class="quotelev1">&gt;      /* create the stack */
</span><br>
<span class="quotelev1">&gt; -    if( source-&gt;stack_size &gt; DT_STATIC_STACK_SIZE ) {
</span><br>
<span class="quotelev1">&gt; +    if( OPAL_UNLIKELY(source-&gt;stack_size &gt; DT_STATIC_STACK_SIZE) ) {
</span><br>
<span class="quotelev1">&gt;          destination-&gt;pStack = (dt_stack_t*)malloc(sizeof(dt_stack_t) *
</span><br>
<span class="quotelev1">&gt; source-&gt;stack_size ); } else {
</span><br>
<span class="quotelev1">&gt;          destination-&gt;pStack = destination-&gt;static_stack;
</span><br>
<span class="quotelev1">&gt; @@ -607,7 +607,7 @@
</span><br>
<span class="quotelev1">&gt;      destination-&gt;stack_size = source-&gt;stack_size;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      /* initialize the stack */
</span><br>
<span class="quotelev1">&gt; -    if( 0 == copy_stack ) {
</span><br>
<span class="quotelev1">&gt; +    if( OPAL_LIKELY(0 == copy_stack) ) {
</span><br>
<span class="quotelev1">&gt;          destination-&gt;bConverted = -1;
</span><br>
<span class="quotelev1">&gt;          destination-&gt;stack_pos  = -1;
</span><br>
<span class="quotelev1">&gt;      } else {
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Modified: trunk/ompi/datatype/convertor.h
</span><br>
<span class="quotelev1">&gt; ===========================================================================
</span><br>
<span class="quotelev1">&gt;=== --- trunk/ompi/datatype/convertor.h	(original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/ompi/datatype/convertor.h	2007-07-07 00:31:06 EDT (Sat, 07 Jul
</span><br>
<span class="quotelev1">&gt; 2007) @@ -23,6 +23,7 @@
</span><br>
<span class="quotelev1">&gt;  #include &quot;ompi_config.h&quot;
</span><br>
<span class="quotelev1">&gt;  #include &quot;ompi/constants.h&quot;
</span><br>
<span class="quotelev1">&gt;  #include &quot;ompi/datatype/datatype.h&quot;
</span><br>
<span class="quotelev1">&gt; +#include &quot;opal/prefetch.h&quot;
</span><br>
<span class="quotelev1">&gt;  #ifdef HAVE_SYS_TYPES_H
</span><br>
<span class="quotelev1">&gt;  #include &lt;sys/types.h&gt;
</span><br>
<span class="quotelev1">&gt;  #endif
</span><br>
<span class="quotelev1">&gt; @@ -143,7 +144,7 @@
</span><br>
<span class="quotelev1">&gt;   */
</span><br>
<span class="quotelev1">&gt;  static inline int ompi_convertor_cleanup( ompi_convertor_t* convertor )
</span><br>
<span class="quotelev1">&gt;  {
</span><br>
<span class="quotelev1">&gt; -    if( convertor-&gt;stack_size &gt; DT_STATIC_STACK_SIZE ) {
</span><br>
<span class="quotelev1">&gt; +    if( OPAL_UNLIKELY(convertor-&gt;stack_size &gt; DT_STATIC_STACK_SIZE) ) {
</span><br>
<span class="quotelev1">&gt;          free( convertor-&gt;pStack );
</span><br>
<span class="quotelev1">&gt;          convertor-&gt;pStack     = convertor-&gt;static_stack;
</span><br>
<span class="quotelev1">&gt;          convertor-&gt;stack_size = DT_STATIC_STACK_SIZE;
</span><br>
<span class="quotelev1">&gt; @@ -256,13 +257,13 @@
</span><br>
<span class="quotelev1">&gt;      /*
</span><br>
<span class="quotelev1">&gt;       * If the convertor is already at the correct position we are happy.
</span><br>
<span class="quotelev1">&gt;       */
</span><br>
<span class="quotelev1">&gt; -    if( (*position) == convertor-&gt;bConverted ) return OMPI_SUCCESS;
</span><br>
<span class="quotelev1">&gt; +    if( OPAL_LIKELY((*position) == convertor-&gt;bConverted) ) return
</span><br>
<span class="quotelev1">&gt; OMPI_SUCCESS;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      /*
</span><br>
<span class="quotelev1">&gt;       * Do not allow the convertor to go outside the data boundaries. This
</span><br>
<span class="quotelev1">&gt; test include * the check for datatype with size zero as well as for
</span><br>
<span class="quotelev1">&gt; convertors with a count of zero. */
</span><br>
<span class="quotelev1">&gt; -    if( convertor-&gt;local_size &lt;= *position) {
</span><br>
<span class="quotelev1">&gt; +    if( OPAL_UNLIKELY(convertor-&gt;local_size &lt;= *position) ) {
</span><br>
<span class="quotelev1">&gt;          convertor-&gt;flags |= CONVERTOR_COMPLETED;
</span><br>
<span class="quotelev1">&gt;          convertor-&gt;bConverted = convertor-&gt;local_size;
</span><br>
<span class="quotelev1">&gt;          *position = convertor-&gt;bConverted;
</span><br>
<span class="quotelev1">&gt; @@ -291,7 +292,7 @@
</span><br>
<span class="quotelev1">&gt;  {
</span><br>
<span class="quotelev1">&gt;      convertor-&gt;flags |= flags;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -    if( NULL == position )
</span><br>
<span class="quotelev1">&gt; +    if( OPAL_UNLIKELY(NULL == position) )
</span><br>
<span class="quotelev1">&gt;          return OMPI_SUCCESS;
</span><br>
<span class="quotelev1">&gt;      return ompi_convertor_set_position( convertor, position );
</span><br>
<span class="quotelev1">&gt;  }
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; svn-full mailing list
</span><br>
<span class="quotelev1">&gt; svn-full_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/svn-full">http://www.open-mpi.org/mailman/listinfo.cgi/svn-full</a>
</span><br>
<p><pre>
-- 
----------------------------------------------------------------
Dipl.-Inf. Rainer Keller       <a href="http://www.hlrs.de/people/keller">http://www.hlrs.de/people/keller</a>
 High Performance Computing       Tel: ++49 (0)711-685 6 5858
   Center Stuttgart (HLRS)           Fax: ++49 (0)711-685 6 5832
 POSTAL:Nobelstrasse 19                 email: keller_at_[hidden]     
 ACTUAL:Allmandring 30, R.O.030            AIM:rusraink
 70550 Stuttgart
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1803.php">George Bosilca: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r15302"</a>
<li><strong>Previous message:</strong> <a href="1801.php">Tim Prins: "[OMPI devel] Ob1 segfault"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1803.php">George Bosilca: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r15302"</a>
<li><strong>Reply:</strong> <a href="1803.php">George Bosilca: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r15302"</a>
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

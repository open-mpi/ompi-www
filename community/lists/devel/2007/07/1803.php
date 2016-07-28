<? include("../../include/msg-header.inc"); ?>
<!-- received="Sat Jul  7 11:48:31 2007" -->
<!-- isoreceived="20070707154831" -->
<!-- sent="Sat, 7 Jul 2007 11:48:14 -0400" -->
<!-- isosent="20070707154814" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r15302" -->
<!-- id="699B3B4A-5064-499F-9AF9-3D63A701D89B_at_cs.utk.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="200707070951.25464.keller_at_hlrs.de" -->
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
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-07-07 11:48:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1804.php">George Bosilca: "Re: [OMPI devel] extracting MPI message tag at the btl level"</a>
<li><strong>Previous message:</strong> <a href="1802.php">Rainer Keller: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r15302"</a>
<li><strong>In reply to:</strong> <a href="1802.php">Rainer Keller: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r15302"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Unfortunately a lot less than expected. There are still a lot of  
<br>
places in the critical path where these macros can be used, and at  
<br>
the end we might something like 2-3% improvement. Which is not worth  
<br>
the effort, I think.
<br>
<p>In same time, I played with the memcpy framework (replacing manually  
<br>
the MEMCPY macro in the datatype engine) and there I got a lot more.  
<br>
So, right now I think that's the way to go ...
<br>
<p>&nbsp;&nbsp;&nbsp;george.
<br>
<p>On Jul 7, 2007, at 3:51 AM, Rainer Keller wrote:
<br>
<p><span class="quotelev1">&gt; Hi George,
</span><br>
<span class="quotelev1">&gt; joust out of curiosity, how much did that get You?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; CU,
</span><br>
<span class="quotelev1">&gt; Rainer
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Saturday 07 July 2007 06:31, bosilca_at_[hidden] wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Author: bosilca
</span><br>
<span class="quotelev2">&gt;&gt; Date: 2007-07-07 00:31:06 EDT (Sat, 07 Jul 2007)
</span><br>
<span class="quotelev2">&gt;&gt; New Revision: 15302
</span><br>
<span class="quotelev2">&gt;&gt; URL: <a href="https://svn.open-mpi.org/trac/ompi/changeset/15302">https://svn.open-mpi.org/trac/ompi/changeset/15302</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Log:
</span><br>
<span class="quotelev2">&gt;&gt; Add few OPAL_LIKELY/OPAL_UNLIKELY to the datatype engine.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Text files modified:
</span><br>
<span class="quotelev2">&gt;&gt;    trunk/ompi/datatype/convertor.c |    20 ++++++++++----------
</span><br>
<span class="quotelev2">&gt;&gt;    trunk/ompi/datatype/convertor.h |     9 +++++----
</span><br>
<span class="quotelev2">&gt;&gt;    2 files changed, 15 insertions(+), 14 deletions(-)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Modified: trunk/ompi/datatype/convertor.c
</span><br>
<span class="quotelev2">&gt;&gt; ===================================================================== 
</span><br>
<span class="quotelev2">&gt;&gt; ======
</span><br>
<span class="quotelev2">&gt;&gt; === --- trunk/ompi/datatype/convertor.c	(original)
</span><br>
<span class="quotelev2">&gt;&gt; +++ trunk/ompi/datatype/convertor.c	2007-07-07 00:31:06 EDT (Sat,  
</span><br>
<span class="quotelev2">&gt;&gt; 07 Jul
</span><br>
<span class="quotelev2">&gt;&gt; 2007) @@ -229,7 +229,7 @@
</span><br>
<span class="quotelev2">&gt;&gt;  {
</span><br>
<span class="quotelev2">&gt;&gt;      OMPI_CONVERTOR_SET_STATUS_BEFORE_PACK_UNPACK( pConv, iov,  
</span><br>
<span class="quotelev2">&gt;&gt; out_size,
</span><br>
<span class="quotelev2">&gt;&gt; max_data );
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -    if( pConv-&gt;flags &amp; CONVERTOR_NO_OP ) {
</span><br>
<span class="quotelev2">&gt;&gt; +    if( OPAL_LIKELY(pConv-&gt;flags &amp; CONVERTOR_NO_OP) ) {
</span><br>
<span class="quotelev2">&gt;&gt;          /* We are doing conversion on a contiguous datatype on a
</span><br>
<span class="quotelev2">&gt;&gt; homogeneous * environment. The convertor contain minimal  
</span><br>
<span class="quotelev2">&gt;&gt; informations, we
</span><br>
<span class="quotelev2">&gt;&gt; only * use the bConverted to manage the conversion.
</span><br>
<span class="quotelev2">&gt;&gt; @@ -245,7 +245,7 @@
</span><br>
<span class="quotelev2">&gt;&gt;              if( iov[i].iov_len &gt;= pending_length ) {
</span><br>
<span class="quotelev2">&gt;&gt;                  goto complete_contiguous_data_pack;
</span><br>
<span class="quotelev2">&gt;&gt;              }
</span><br>
<span class="quotelev2">&gt;&gt; -            if( NULL == iov[i].iov_base )
</span><br>
<span class="quotelev2">&gt;&gt; +            if( OPAL_LIKELY(NULL == iov[i].iov_base) )
</span><br>
<span class="quotelev2">&gt;&gt;                  iov[i].iov_base = base_pointer;
</span><br>
<span class="quotelev2">&gt;&gt;              else
</span><br>
<span class="quotelev2">&gt;&gt;                  MEMCPY( iov[i].iov_base, base_pointer, iov 
</span><br>
<span class="quotelev2">&gt;&gt; [i].iov_len );
</span><br>
<span class="quotelev2">&gt;&gt; @@ -257,7 +257,7 @@
</span><br>
<span class="quotelev2">&gt;&gt;          return 0;
</span><br>
<span class="quotelev2">&gt;&gt;      complete_contiguous_data_pack:
</span><br>
<span class="quotelev2">&gt;&gt;          iov[i].iov_len = pending_length;
</span><br>
<span class="quotelev2">&gt;&gt; -        if( NULL == iov[i].iov_base )
</span><br>
<span class="quotelev2">&gt;&gt; +        if( OPAL_LIKELY(NULL == iov[i].iov_base) )
</span><br>
<span class="quotelev2">&gt;&gt;              iov[i].iov_base = base_pointer;
</span><br>
<span class="quotelev2">&gt;&gt;          else
</span><br>
<span class="quotelev2">&gt;&gt;              MEMCPY( iov[i].iov_base, base_pointer, iov[i].iov_len );
</span><br>
<span class="quotelev2">&gt;&gt; @@ -276,7 +276,7 @@
</span><br>
<span class="quotelev2">&gt;&gt;  {
</span><br>
<span class="quotelev2">&gt;&gt;      OMPI_CONVERTOR_SET_STATUS_BEFORE_PACK_UNPACK( pConv, iov,  
</span><br>
<span class="quotelev2">&gt;&gt; out_size,
</span><br>
<span class="quotelev2">&gt;&gt; max_data );
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -    if( pConv-&gt;flags &amp; CONVERTOR_NO_OP ) {
</span><br>
<span class="quotelev2">&gt;&gt; +    if( OPAL_LIKELY(pConv-&gt;flags &amp; CONVERTOR_NO_OP) ) {
</span><br>
<span class="quotelev2">&gt;&gt;          /* We are doing conversion on a contiguous datatype on a
</span><br>
<span class="quotelev2">&gt;&gt; homogeneous * environment. The convertor contain minimal  
</span><br>
<span class="quotelev2">&gt;&gt; informations, we
</span><br>
<span class="quotelev2">&gt;&gt; only * use the bConverted to manage the conversion.
</span><br>
<span class="quotelev2">&gt;&gt; @@ -340,7 +340,7 @@
</span><br>
<span class="quotelev2">&gt;&gt;      /* we save the current displacement starting from the begining
</span><br>
<span class="quotelev2">&gt;&gt;       * of this data.
</span><br>
<span class="quotelev2">&gt;&gt;       */
</span><br>
<span class="quotelev2">&gt;&gt; -    if( 0 == count ) {
</span><br>
<span class="quotelev2">&gt;&gt; +    if( OPAL_LIKELY(0 == count) ) {
</span><br>
<span class="quotelev2">&gt;&gt;          pStack[1].type     = pElems-&gt;elem.common.type;
</span><br>
<span class="quotelev2">&gt;&gt;          pStack[1].count    = pElems-&gt;elem.count;
</span><br>
<span class="quotelev2">&gt;&gt;          pStack[1].disp     = pElems-&gt;elem.disp;
</span><br>
<span class="quotelev2">&gt;&gt; @@ -403,7 +403,7 @@
</span><br>
<span class="quotelev2">&gt;&gt;          rc = ompi_convertor_create_stack_at_begining( convertor,
</span><br>
<span class="quotelev2">&gt;&gt; ompi_ddt_local_sizes ); if( 0 == (*position) ) return rc;
</span><br>
<span class="quotelev2">&gt;&gt;      }
</span><br>
<span class="quotelev2">&gt;&gt; -    if( convertor-&gt;flags &amp; DT_FLAG_CONTIGUOUS ) {
</span><br>
<span class="quotelev2">&gt;&gt; +    if( OPAL_LIKELY(convertor-&gt;flags &amp; DT_FLAG_CONTIGUOUS) ) {
</span><br>
<span class="quotelev2">&gt;&gt;          rc = ompi_convertor_create_stack_with_pos_contig( convertor,
</span><br>
<span class="quotelev2">&gt;&gt; (*position), ompi_ddt_local_sizes ); } else {
</span><br>
<span class="quotelev2">&gt;&gt; @@ -443,13 +443,13 @@
</span><br>
<span class="quotelev2">&gt;&gt;           * completed. With this flag set the pack and unpack  
</span><br>
<span class="quotelev2">&gt;&gt; functions  \
</span><br>
<span class="quotelev2">&gt;&gt;           * will not do  
</span><br>
<span class="quotelev2">&gt;&gt; anything.                                        \
</span><br>
<span class="quotelev2">&gt;&gt;            
</span><br>
<span class="quotelev2">&gt;&gt; */                                                             \
</span><br>
<span class="quotelev2">&gt;&gt; -        if( OPAL_UNLIKELY(0 == convertor-&gt;local_size) )  
</span><br>
<span class="quotelev2">&gt;&gt; {               \
</span><br>
<span class="quotelev2">&gt;&gt; +        if( OPAL_UNLIKELY((0 == count) || (0 == datatype- 
</span><br>
<span class="quotelev3">&gt;&gt; &gt;size)) ) {    \
</span><br>
<span class="quotelev2">&gt;&gt;              convertor-&gt;flags |=  
</span><br>
<span class="quotelev2">&gt;&gt; CONVERTOR_COMPLETED;                    \
</span><br>
<span class="quotelev2">&gt;&gt;              convertor-&gt;remote_size =  
</span><br>
<span class="quotelev2">&gt;&gt; 0;                                 \
</span><br>
<span class="quotelev2">&gt;&gt;              return  
</span><br>
<span class="quotelev2">&gt;&gt; OMPI_SUCCESS;                                        \
</span><br>
<span class="quotelev2">&gt;&gt;          }                                                            
</span><br>
<span class="quotelev2">&gt;&gt;     \
</span><br>
<span class="quotelev2">&gt;&gt;                                                                       
</span><br>
<span class="quotelev2">&gt;&gt;     \
</span><br>
<span class="quotelev2">&gt;&gt; -        if( convertor-&gt;remoteArch == ompi_mpi_local_arch )  
</span><br>
<span class="quotelev2">&gt;&gt; {            \
</span><br>
<span class="quotelev2">&gt;&gt; +        if( OPAL_LIKELY(convertor-&gt;remoteArch ==  
</span><br>
<span class="quotelev2">&gt;&gt; ompi_mpi_local_arch) ) {
</span><br>
<span class="quotelev2">&gt;&gt; \ convertor-&gt;remote_size = convertor-&gt;local_size;             \ if(
</span><br>
<span class="quotelev2">&gt;&gt; (convertor-&gt;flags &amp; (CONVERTOR_WITH_CHECKSUM | DT_FLAG_NO_GAPS)) ==
</span><br>
<span class="quotelev2">&gt;&gt; DT_FLAG_NO_GAPS ) { \ return OMPI_SUCCESS;
</span><br>
<span class="quotelev2">&gt;&gt;   \ @@ -599,7 +599,7 @@
</span><br>
<span class="quotelev2">&gt;&gt;      destination-&gt;local_size        = source-&gt;local_size;
</span><br>
<span class="quotelev2">&gt;&gt;      destination-&gt;remote_size       = source-&gt;remote_size;
</span><br>
<span class="quotelev2">&gt;&gt;      /* create the stack */
</span><br>
<span class="quotelev2">&gt;&gt; -    if( source-&gt;stack_size &gt; DT_STATIC_STACK_SIZE ) {
</span><br>
<span class="quotelev2">&gt;&gt; +    if( OPAL_UNLIKELY(source-&gt;stack_size &gt; DT_STATIC_STACK_SIZE) ) {
</span><br>
<span class="quotelev2">&gt;&gt;          destination-&gt;pStack = (dt_stack_t*)malloc(sizeof 
</span><br>
<span class="quotelev2">&gt;&gt; (dt_stack_t) *
</span><br>
<span class="quotelev2">&gt;&gt; source-&gt;stack_size ); } else {
</span><br>
<span class="quotelev2">&gt;&gt;          destination-&gt;pStack = destination-&gt;static_stack;
</span><br>
<span class="quotelev2">&gt;&gt; @@ -607,7 +607,7 @@
</span><br>
<span class="quotelev2">&gt;&gt;      destination-&gt;stack_size = source-&gt;stack_size;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;      /* initialize the stack */
</span><br>
<span class="quotelev2">&gt;&gt; -    if( 0 == copy_stack ) {
</span><br>
<span class="quotelev2">&gt;&gt; +    if( OPAL_LIKELY(0 == copy_stack) ) {
</span><br>
<span class="quotelev2">&gt;&gt;          destination-&gt;bConverted = -1;
</span><br>
<span class="quotelev2">&gt;&gt;          destination-&gt;stack_pos  = -1;
</span><br>
<span class="quotelev2">&gt;&gt;      } else {
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Modified: trunk/ompi/datatype/convertor.h
</span><br>
<span class="quotelev2">&gt;&gt; ===================================================================== 
</span><br>
<span class="quotelev2">&gt;&gt; ======
</span><br>
<span class="quotelev2">&gt;&gt; === --- trunk/ompi/datatype/convertor.h	(original)
</span><br>
<span class="quotelev2">&gt;&gt; +++ trunk/ompi/datatype/convertor.h	2007-07-07 00:31:06 EDT (Sat,  
</span><br>
<span class="quotelev2">&gt;&gt; 07 Jul
</span><br>
<span class="quotelev2">&gt;&gt; 2007) @@ -23,6 +23,7 @@
</span><br>
<span class="quotelev2">&gt;&gt;  #include &quot;ompi_config.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt;  #include &quot;ompi/constants.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt;  #include &quot;ompi/datatype/datatype.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; +#include &quot;opal/prefetch.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt;  #ifdef HAVE_SYS_TYPES_H
</span><br>
<span class="quotelev2">&gt;&gt;  #include &lt;sys/types.h&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  #endif
</span><br>
<span class="quotelev2">&gt;&gt; @@ -143,7 +144,7 @@
</span><br>
<span class="quotelev2">&gt;&gt;   */
</span><br>
<span class="quotelev2">&gt;&gt;  static inline int ompi_convertor_cleanup( ompi_convertor_t*  
</span><br>
<span class="quotelev2">&gt;&gt; convertor )
</span><br>
<span class="quotelev2">&gt;&gt;  {
</span><br>
<span class="quotelev2">&gt;&gt; -    if( convertor-&gt;stack_size &gt; DT_STATIC_STACK_SIZE ) {
</span><br>
<span class="quotelev2">&gt;&gt; +    if( OPAL_UNLIKELY(convertor-&gt;stack_size &gt;  
</span><br>
<span class="quotelev2">&gt;&gt; DT_STATIC_STACK_SIZE) ) {
</span><br>
<span class="quotelev2">&gt;&gt;          free( convertor-&gt;pStack );
</span><br>
<span class="quotelev2">&gt;&gt;          convertor-&gt;pStack     = convertor-&gt;static_stack;
</span><br>
<span class="quotelev2">&gt;&gt;          convertor-&gt;stack_size = DT_STATIC_STACK_SIZE;
</span><br>
<span class="quotelev2">&gt;&gt; @@ -256,13 +257,13 @@
</span><br>
<span class="quotelev2">&gt;&gt;      /*
</span><br>
<span class="quotelev2">&gt;&gt;       * If the convertor is already at the correct position we are  
</span><br>
<span class="quotelev2">&gt;&gt; happy.
</span><br>
<span class="quotelev2">&gt;&gt;       */
</span><br>
<span class="quotelev2">&gt;&gt; -    if( (*position) == convertor-&gt;bConverted ) return OMPI_SUCCESS;
</span><br>
<span class="quotelev2">&gt;&gt; +    if( OPAL_LIKELY((*position) == convertor-&gt;bConverted) ) return
</span><br>
<span class="quotelev2">&gt;&gt; OMPI_SUCCESS;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;      /*
</span><br>
<span class="quotelev2">&gt;&gt;       * Do not allow the convertor to go outside the data  
</span><br>
<span class="quotelev2">&gt;&gt; boundaries. This
</span><br>
<span class="quotelev2">&gt;&gt; test include * the check for datatype with size zero as well as for
</span><br>
<span class="quotelev2">&gt;&gt; convertors with a count of zero. */
</span><br>
<span class="quotelev2">&gt;&gt; -    if( convertor-&gt;local_size &lt;= *position) {
</span><br>
<span class="quotelev2">&gt;&gt; +    if( OPAL_UNLIKELY(convertor-&gt;local_size &lt;= *position) ) {
</span><br>
<span class="quotelev2">&gt;&gt;          convertor-&gt;flags |= CONVERTOR_COMPLETED;
</span><br>
<span class="quotelev2">&gt;&gt;          convertor-&gt;bConverted = convertor-&gt;local_size;
</span><br>
<span class="quotelev2">&gt;&gt;          *position = convertor-&gt;bConverted;
</span><br>
<span class="quotelev2">&gt;&gt; @@ -291,7 +292,7 @@
</span><br>
<span class="quotelev2">&gt;&gt;  {
</span><br>
<span class="quotelev2">&gt;&gt;      convertor-&gt;flags |= flags;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -    if( NULL == position )
</span><br>
<span class="quotelev2">&gt;&gt; +    if( OPAL_UNLIKELY(NULL == position) )
</span><br>
<span class="quotelev2">&gt;&gt;          return OMPI_SUCCESS;
</span><br>
<span class="quotelev2">&gt;&gt;      return ompi_convertor_set_position( convertor, position );
</span><br>
<span class="quotelev2">&gt;&gt;  }
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; svn-full mailing list
</span><br>
<span class="quotelev2">&gt;&gt; svn-full_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/svn-full">http://www.open-mpi.org/mailman/listinfo.cgi/svn-full</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; ----------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; Dipl.-Inf. Rainer Keller       <a href="http://www.hlrs.de/people/keller">http://www.hlrs.de/people/keller</a>
</span><br>
<span class="quotelev1">&gt;  High Performance Computing       Tel: ++49 (0)711-685 6 5858
</span><br>
<span class="quotelev1">&gt;    Center Stuttgart (HLRS)           Fax: ++49 (0)711-685 6 5832
</span><br>
<span class="quotelev1">&gt;  POSTAL:Nobelstrasse 19                 email: keller_at_[hidden]
</span><br>
<span class="quotelev1">&gt;  ACTUAL:Allmandring 30, R.O.030            AIM:rusraink
</span><br>
<span class="quotelev1">&gt;  70550 Stuttgart
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p><p>
<br><hr>
<ul>
<li>application/pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-1803/smime.p7s">smime.p7s</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1804.php">George Bosilca: "Re: [OMPI devel] extracting MPI message tag at the btl level"</a>
<li><strong>Previous message:</strong> <a href="1802.php">Rainer Keller: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r15302"</a>
<li><strong>In reply to:</strong> <a href="1802.php">Rainer Keller: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r15302"</a>
<!-- nextthread="start" -->
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

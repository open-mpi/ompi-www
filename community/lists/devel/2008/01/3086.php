<?
$subject_val = "Re: [OMPI devel] [OMPI svn] svn:open-mpi r17307";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan 29 19:37:49 2008" -->
<!-- isoreceived="20080130003749" -->
<!-- sent="Tue, 29 Jan 2008 19:37:42 -0500" -->
<!-- isosent="20080130003742" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn] svn:open-mpi r17307" -->
<!-- id="F0A3ACAD-2C50-4F39-81EC-7448BEB5005A_at_eecs.utk.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="200801291555.m0TFtvMK002633_at_sourcehaven.osl.iu.edu" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [OMPI svn] svn:open-mpi r17307<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-01-29 19:37:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3087.php">Adrian Knoth: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r17307"</a>
<li><strong>Previous message:</strong> <a href="3085.php">Aur&#233;lien Bouteiller: "Re: [OMPI devel] RES:  v pml question"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3087.php">Adrian Knoth: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r17307"</a>
<li><strong>Reply:</strong> <a href="3087.php">Adrian Knoth: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r17307"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The previous code was correct. Each IP address correspond to a  
<br>
specific endpoint, and therefore to a specific BTL. This enable us to  
<br>
have multiple TCP BTL at the same time, and allow the OB1 PML to  
<br>
stripe the data over all of them.
<br>
<p>Unfortunately, your commit disable the multi-rail over TCP. Please  
<br>
undo it.
<br>
<p>&nbsp;&nbsp;&nbsp;Thanks,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;george.
<br>
<p>On Jan 29, 2008, at 10:55 AM, adi_at_[hidden] wrote:
<br>
<p><span class="quotelev1">&gt; Author: adi
</span><br>
<span class="quotelev1">&gt; Date: 2008-01-29 10:55:56 EST (Tue, 29 Jan 2008)
</span><br>
<span class="quotelev1">&gt; New Revision: 17307
</span><br>
<span class="quotelev1">&gt; URL: <a href="https://svn.open-mpi.org/trac/ompi/changeset/17307">https://svn.open-mpi.org/trac/ompi/changeset/17307</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Log:
</span><br>
<span class="quotelev1">&gt; accept incoming connections from hosts with multiple addresses.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; We loop over all peer addresses and accept when one of them matches.
</span><br>
<span class="quotelev1">&gt; Note that this might break functionality: mca_btl_tcp_proc_insert now
</span><br>
<span class="quotelev1">&gt; always inserts the same endpoint. (is the lack of endpoints the  
</span><br>
<span class="quotelev1">&gt; problem?
</span><br>
<span class="quotelev1">&gt; should there be one for every remote address?)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Re #1206
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Text files modified:
</span><br>
<span class="quotelev1">&gt;   trunk/ompi/mca/btl/tcp/btl_tcp_proc.c |    12 ++++++------
</span><br>
<span class="quotelev1">&gt;   1 files changed, 6 insertions(+), 6 deletions(-)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Modified: trunk/ompi/mca/btl/tcp/btl_tcp_proc.c
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; ======================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/ompi/mca/btl/tcp/btl_tcp_proc.c	(original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/ompi/mca/btl/tcp/btl_tcp_proc.c	2008-01-29 10:55:56 EST  
</span><br>
<span class="quotelev1">&gt; (Tue, 29 Jan 2008)
</span><br>
<span class="quotelev1">&gt; @@ -327,16 +327,16 @@
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt;     size_t i;
</span><br>
<span class="quotelev1">&gt;     OPAL_THREAD_LOCK(&amp;btl_proc-&gt;proc_lock);
</span><br>
<span class="quotelev1">&gt; -    for( i = 0; i &lt; btl_proc-&gt;proc_endpoint_count; i++ ) {
</span><br>
<span class="quotelev1">&gt; -        mca_btl_base_endpoint_t* btl_endpoint = btl_proc- 
</span><br>
<span class="quotelev2">&gt; &gt;proc_endpoints[i];
</span><br>
<span class="quotelev1">&gt; +    for( i = 0; i &lt; btl_proc-&gt;proc_addr_count; i++ ) {
</span><br>
<span class="quotelev1">&gt; +        mca_btl_tcp_addr_t*  exported_address = btl_proc- 
</span><br>
<span class="quotelev2">&gt; &gt;proc_addrs + i;
</span><br>
<span class="quotelev1">&gt;         /* Check all conditions before going to try to accept the  
</span><br>
<span class="quotelev1">&gt; connection. */
</span><br>
<span class="quotelev1">&gt; -        if( btl_endpoint-&gt;endpoint_addr-&gt;addr_family != addr- 
</span><br>
<span class="quotelev2">&gt; &gt;sa_family ) {
</span><br>
<span class="quotelev1">&gt; +        if( exported_address-&gt;addr_family != addr-&gt;sa_family ) {
</span><br>
<span class="quotelev1">&gt;             continue;
</span><br>
<span class="quotelev1">&gt;         }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         switch (addr-&gt;sa_family) {
</span><br>
<span class="quotelev1">&gt;         case AF_INET:
</span><br>
<span class="quotelev1">&gt; -            if( memcmp( &amp;btl_endpoint-&gt;endpoint_addr-&gt;addr_inet,
</span><br>
<span class="quotelev1">&gt; +            if( memcmp( &amp;exported_address-&gt;addr_inet,
</span><br>
<span class="quotelev1">&gt;                         &amp;(((struct sockaddr_in*)addr)-&gt;sin_addr),
</span><br>
<span class="quotelev1">&gt;                         sizeof(struct in_addr) ) ) {
</span><br>
<span class="quotelev1">&gt;                 continue;
</span><br>
<span class="quotelev1">&gt; @@ -344,7 +344,7 @@
</span><br>
<span class="quotelev1">&gt;             break;
</span><br>
<span class="quotelev1">&gt; #if OPAL_WANT_IPV6
</span><br>
<span class="quotelev1">&gt;         case AF_INET6:
</span><br>
<span class="quotelev1">&gt; -            if( memcmp( &amp;btl_endpoint-&gt;endpoint_addr-&gt;addr_inet,
</span><br>
<span class="quotelev1">&gt; +            if( memcmp( &amp;exported_address-&gt;addr_inet,
</span><br>
<span class="quotelev1">&gt;                         &amp;(((struct sockaddr_in6*)addr)-&gt;sin6_addr),
</span><br>
<span class="quotelev1">&gt;                         sizeof(struct in6_addr) ) ) {
</span><br>
<span class="quotelev1">&gt;                 continue;
</span><br>
<span class="quotelev1">&gt; @@ -355,7 +355,7 @@
</span><br>
<span class="quotelev1">&gt;             ;
</span><br>
<span class="quotelev1">&gt;         }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -        if(mca_btl_tcp_endpoint_accept(btl_endpoint, addr, sd)) {
</span><br>
<span class="quotelev1">&gt; +        if(mca_btl_tcp_endpoint_accept(btl_proc-&gt;proc_endpoints[0],  
</span><br>
<span class="quotelev1">&gt; addr, sd)) {
</span><br>
<span class="quotelev1">&gt;             OPAL_THREAD_UNLOCK(&amp;btl_proc-&gt;proc_lock);
</span><br>
<span class="quotelev1">&gt;             return true;
</span><br>
<span class="quotelev1">&gt;         }
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; svn mailing list
</span><br>
<span class="quotelev1">&gt; svn_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/svn">http://www.open-mpi.org/mailman/listinfo.cgi/svn</a>
</span><br>
<p><p>
<br><hr>
<ul>
<li>application/pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-3086/smime.p7s">smime.p7s</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3087.php">Adrian Knoth: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r17307"</a>
<li><strong>Previous message:</strong> <a href="3085.php">Aur&#233;lien Bouteiller: "Re: [OMPI devel] RES:  v pml question"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3087.php">Adrian Knoth: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r17307"</a>
<li><strong>Reply:</strong> <a href="3087.php">Adrian Knoth: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r17307"</a>
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

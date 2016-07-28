<?
$subject_val = "Re: [OMPI devel] [OMPI svn] svn:open-mpi r21234";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May 13 22:54:52 2009" -->
<!-- isoreceived="20090514025452" -->
<!-- sent="Wed, 13 May 2009 20:54:43 -0600" -->
<!-- isosent="20090514025443" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn] svn:open-mpi r21234" -->
<!-- id="F0D71C83-37FC-412D-8CD0-BBFEFC86367A_at_open-mpi.org" -->
<!-- charset="WINDOWS-1252" -->
<!-- inreplyto="200905140052.n4E0qKnJ022514_at_sourcehaven.osl.iu.edu" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [OMPI svn] svn:open-mpi r21234<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-05-13 22:54:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6014.php">Ralph Castain: "[OMPI devel] Warnings in sctp BTL"</a>
<li><strong>Previous message:</strong> <a href="6012.php">Maninder Singh: "Re: [OMPI devel] Configuring openmpi-1.3.2 with	&quot;--without-rte-support&quot;. FLAG."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6020.php">Rainer Keller: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r21234"</a>
<li><strong>Reply:</strong> <a href="6020.php">Rainer Keller: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r21234"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Yo Rainer
<br>
<p>This generated a bunch of warnings - the &quot;z&quot; length modifier is not a  
<br>
generally supported option, which is why we do not use it.
<br>
<p>btl_tcp_frag.c: In function &#145;mca_btl_tcp_frag_send&#146;:
<br>
btl_tcp_frag.c:115: warning: ISO C90 does not support the &#145;z&#146; printf  
<br>
length modifier
<br>
btl_tcp_frag.c:115: warning: ISO C90 does not support the &#145;z&#146; printf  
<br>
length modifier
<br>
btl_tcp_frag.c: In function &#145;mca_btl_tcp_frag_recv&#146;:
<br>
btl_tcp_frag.c:207: warning: ISO C90 does not support the &#145;z&#146; printf  
<br>
length modifier
<br>
btl_tcp_frag.c:207: warning: ISO C90 does not support the &#145;z&#146; printf  
<br>
length modifier
<br>
btl_tcp_component.c: In function &#145;mca_btl_tcp_component_create_listen&#146;:
<br>
btl_tcp_component.c:682: warning: too many arguments for format
<br>
btl_tcp_proc.c: In function &#145;mca_btl_tcp_proc_create&#146;:
<br>
btl_tcp_proc.c:134: warning: ISO C90 does not support the &#145;z&#146; printf  
<br>
length modifier
<br>
<p>Could you please fix this? If you want to deal with the size_t 32/64  
<br>
bit issues, there is another little macro thingy that we created for  
<br>
just that purpose (someone else here undoubtedly remembers it).
<br>
<p>Thanks
<br>
Ralph
<br>
<p><p>On May 13, 2009, at 6:52 PM, rusraink_at_[hidden] wrote:
<br>
<p><span class="quotelev1">&gt; Author: rusraink
</span><br>
<span class="quotelev1">&gt; Date: 2009-05-13 20:52:20 EDT (Wed, 13 May 2009)
</span><br>
<span class="quotelev1">&gt; New Revision: 21234
</span><br>
<span class="quotelev1">&gt; URL: <a href="https://svn.open-mpi.org/trac/ompi/changeset/21234">https://svn.open-mpi.org/trac/ompi/changeset/21234</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Log:
</span><br>
<span class="quotelev1">&gt; - Use the &quot;z&quot; length modifier for size_t arguments for printf.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Text files modified:
</span><br>
<span class="quotelev1">&gt;   trunk/ompi/mca/btl/tcp/btl_tcp_frag.c |     4 ++--
</span><br>
<span class="quotelev1">&gt;   trunk/ompi/mca/btl/tcp/btl_tcp_proc.c |     2 +-
</span><br>
<span class="quotelev1">&gt;   2 files changed, 3 insertions(+), 3 deletions(-)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Modified: trunk/ompi/mca/btl/tcp/btl_tcp_frag.c
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
<span class="quotelev1">&gt; --- trunk/ompi/mca/btl/tcp/btl_tcp_frag.c	(original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/ompi/mca/btl/tcp/btl_tcp_frag.c	2009-05-13 20:52:20 EDT  
</span><br>
<span class="quotelev1">&gt; (Wed, 13 May 2009)
</span><br>
<span class="quotelev1">&gt; @@ -112,7 +112,7 @@
</span><br>
<span class="quotelev1">&gt;             case EWOULDBLOCK:
</span><br>
<span class="quotelev1">&gt;                 return false;
</span><br>
<span class="quotelev1">&gt;             case EFAULT:
</span><br>
<span class="quotelev1">&gt; -                BTL_ERROR((&quot;mca_btl_tcp_frag_send: writev error  
</span><br>
<span class="quotelev1">&gt; (%p, %d)\n\t%s(%d)\n&quot;,
</span><br>
<span class="quotelev1">&gt; +                BTL_ERROR((&quot;mca_btl_tcp_frag_send: writev error  
</span><br>
<span class="quotelev1">&gt; (%p, %zd)\n\t%s(%zd)\n&quot;,
</span><br>
<span class="quotelev1">&gt;                     frag-&gt;iov_ptr[0].iov_base, frag- 
</span><br>
<span class="quotelev2">&gt; &gt;iov_ptr[0].iov_len,
</span><br>
<span class="quotelev1">&gt;                     strerror(opal_socket_errno), frag-&gt;iov_cnt));
</span><br>
<span class="quotelev1">&gt;                 mca_btl_tcp_endpoint_close(frag-&gt;endpoint);
</span><br>
<span class="quotelev1">&gt; @@ -204,7 +204,7 @@
</span><br>
<span class="quotelev1">&gt; 	case EWOULDBLOCK:
</span><br>
<span class="quotelev1">&gt; 	    return false;
</span><br>
<span class="quotelev1">&gt; 	case EFAULT:
</span><br>
<span class="quotelev1">&gt; -            BTL_ERROR((&quot;mca_btl_tcp_frag_recv: readv error (%p, %d) 
</span><br>
<span class="quotelev1">&gt; \n\t%s(%d)\n&quot;,
</span><br>
<span class="quotelev1">&gt; +            BTL_ERROR((&quot;mca_btl_tcp_frag_recv: readv error (%p, %zd) 
</span><br>
<span class="quotelev1">&gt; \n\t%s(%zd)\n&quot;,
</span><br>
<span class="quotelev1">&gt;                        frag-&gt;iov_ptr[0].iov_base, frag- 
</span><br>
<span class="quotelev2">&gt; &gt;iov_ptr[0].iov_len,
</span><br>
<span class="quotelev1">&gt;                        strerror(opal_socket_errno), frag-&gt;iov_cnt));
</span><br>
<span class="quotelev1">&gt; 	    mca_btl_tcp_endpoint_close(btl_endpoint);
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
<span class="quotelev1">&gt; +++ trunk/ompi/mca/btl/tcp/btl_tcp_proc.c	2009-05-13 20:52:20 EDT  
</span><br>
<span class="quotelev1">&gt; (Wed, 13 May 2009)
</span><br>
<span class="quotelev1">&gt; @@ -131,7 +131,7 @@
</span><br>
<span class="quotelev1">&gt;         return NULL;
</span><br>
<span class="quotelev1">&gt;     }
</span><br>
<span class="quotelev1">&gt;     if(0 != (size % sizeof(mca_btl_tcp_addr_t))) {
</span><br>
<span class="quotelev1">&gt; -        BTL_ERROR((&quot;mca_base_modex_recv: invalid size %d: btl-size:  
</span><br>
<span class="quotelev1">&gt; %d\n&quot;,
</span><br>
<span class="quotelev1">&gt; +        BTL_ERROR((&quot;mca_base_modex_recv: invalid size %zd: btl- 
</span><br>
<span class="quotelev1">&gt; size: %ld\n&quot;,
</span><br>
<span class="quotelev1">&gt;           size, sizeof(mca_btl_tcp_addr_t)));
</span><br>
<span class="quotelev1">&gt;         return NULL;
</span><br>
<span class="quotelev1">&gt;     }
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; svn mailing list
</span><br>
<span class="quotelev1">&gt; svn_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/svn">http://www.open-mpi.org/mailman/listinfo.cgi/svn</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6014.php">Ralph Castain: "[OMPI devel] Warnings in sctp BTL"</a>
<li><strong>Previous message:</strong> <a href="6012.php">Maninder Singh: "Re: [OMPI devel] Configuring openmpi-1.3.2 with	&quot;--without-rte-support&quot;. FLAG."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6020.php">Rainer Keller: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r21234"</a>
<li><strong>Reply:</strong> <a href="6020.php">Rainer Keller: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r21234"</a>
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

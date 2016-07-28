<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Jul 25 13:40:28 2007" -->
<!-- isoreceived="20070725174028" -->
<!-- sent="Wed, 25 Jul 2007 13:40:21 -0400" -->
<!-- isosent="20070725174021" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn] svn:open-mpi r15606" -->
<!-- id="32A917D0-9051-47EF-A0E2-2E6B047BC7B3_at_cs.utk.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="200707251221.l6PCL1Sr004327_at_sourcehaven.osl.iu.edu" -->
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
<strong>Date:</strong> 2007-07-25 13:40:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1996.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r15606"</a>
<li><strong>Previous message:</strong> <a href="1994.php">Lisandro Dalcin: "Re: [OMPI devel] MPI_ALLOC_MEM warning when requesting 0 (zero) bytes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1996.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r15606"</a>
<li><strong>Reply:</strong> <a href="1996.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r15606"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Do we really need this one ? It look more like dead code forever to  
<br>
me than anything else.
<br>
<p>On one hand we're claiming that we don't use any blocking pooling  
<br>
inside (and therefore Open MPI use 100% of the CPU) because a cluster  
<br>
is dedicated to performance gathering, and on the other we allow the  
<br>
users to disable the only latency improvement that TCP allow us ...  
<br>
It doesn't really make sense to me. Moreover, it turned out that the  
<br>
problem wasn't even coming from there.
<br>
<p>&nbsp;&nbsp;&nbsp;george.
<br>
<p>On Jul 25, 2007, at 8:21 AM, jsquyres_at_[hidden] wrote:
<br>
<p><span class="quotelev1">&gt; Author: jsquyres
</span><br>
<span class="quotelev1">&gt; Date: 2007-07-25 08:21:00 EDT (Wed, 25 Jul 2007)
</span><br>
<span class="quotelev1">&gt; New Revision: 15606
</span><br>
<span class="quotelev1">&gt; URL: <a href="https://svn.open-mpi.org/trac/ompi/changeset/15606">https://svn.open-mpi.org/trac/ompi/changeset/15606</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Log:
</span><br>
<span class="quotelev1">&gt; Add MCA parameter to enable/disable Nagle's algorithm on the TCP BTL.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Text files modified:
</span><br>
<span class="quotelev1">&gt;    trunk/ompi/mca/btl/tcp/btl_tcp.h           |     3 ++
</span><br>
<span class="quotelev1">&gt;    trunk/ompi/mca/btl/tcp/btl_tcp_component.c |    54 ++++++++++++++ 
</span><br>
<span class="quotelev1">&gt; ++++++++-----------------
</span><br>
<span class="quotelev1">&gt;    trunk/ompi/mca/btl/tcp/btl_tcp_endpoint.c  |     2
</span><br>
<span class="quotelev1">&gt;    3 files changed, 34 insertions(+), 25 deletions(-)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Modified: trunk/ompi/mca/btl/tcp/btl_tcp.h
</span><br>
<span class="quotelev1">&gt; ====================================================================== 
</span><br>
<span class="quotelev1">&gt; ========
</span><br>
<span class="quotelev1">&gt; --- trunk/ompi/mca/btl/tcp/btl_tcp.h	(original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/ompi/mca/btl/tcp/btl_tcp.h	2007-07-25 08:21:00 EDT (Wed,  
</span><br>
<span class="quotelev1">&gt; 25 Jul 2007)
</span><br>
<span class="quotelev1">&gt; @@ -90,6 +90,9 @@
</span><br>
<span class="quotelev1">&gt;      ompi_free_list_t tcp_frag_eager;
</span><br>
<span class="quotelev1">&gt;      ompi_free_list_t tcp_frag_max;
</span><br>
<span class="quotelev1">&gt;      ompi_free_list_t tcp_frag_user;
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +    /* Do we want to use TCP_NODELAY? */
</span><br>
<span class="quotelev1">&gt; +    int    tcp_use_nodelay;
</span><br>
<span class="quotelev1">&gt;  };
</span><br>
<span class="quotelev1">&gt;  typedef struct mca_btl_tcp_component_t mca_btl_tcp_component_t;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Modified: trunk/ompi/mca/btl/tcp/btl_tcp_component.c
</span><br>
<span class="quotelev1">&gt; ====================================================================== 
</span><br>
<span class="quotelev1">&gt; ========
</span><br>
<span class="quotelev1">&gt; --- trunk/ompi/mca/btl/tcp/btl_tcp_component.c	(original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/ompi/mca/btl/tcp/btl_tcp_component.c	2007-07-25 08:21:00  
</span><br>
<span class="quotelev1">&gt; EDT (Wed, 25 Jul 2007)
</span><br>
<span class="quotelev1">&gt; @@ -104,23 +104,27 @@
</span><br>
<span class="quotelev1">&gt;   */
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  static inline char* mca_btl_tcp_param_register_string(
</span><br>
<span class="quotelev1">&gt; -                                                     const char*  
</span><br>
<span class="quotelev1">&gt; param_name,
</span><br>
<span class="quotelev1">&gt; -                                                     const char*  
</span><br>
<span class="quotelev1">&gt; default_value)
</span><br>
<span class="quotelev1">&gt; +        const char* param_name,
</span><br>
<span class="quotelev1">&gt; +        const char* help_string,
</span><br>
<span class="quotelev1">&gt; +        const char* default_value)
</span><br>
<span class="quotelev1">&gt;  {
</span><br>
<span class="quotelev1">&gt; -    char *param_value;
</span><br>
<span class="quotelev1">&gt; -    int id = mca_base_param_register_string 
</span><br>
<span class="quotelev1">&gt; (&quot;btl&quot;,&quot;tcp&quot;,param_name,NULL,default_value);
</span><br>
<span class="quotelev1">&gt; -    mca_base_param_lookup_string(id, &amp;param_value);
</span><br>
<span class="quotelev1">&gt; -    return param_value;
</span><br>
<span class="quotelev1">&gt; +    char *value;
</span><br>
<span class="quotelev1">&gt; +    mca_base_param_reg_string 
</span><br>
<span class="quotelev1">&gt; (&amp;mca_btl_tcp_component.super.btl_version,
</span><br>
<span class="quotelev1">&gt; +                              param_name, help_string, false, false,
</span><br>
<span class="quotelev1">&gt; +                              default_value, &amp;value);
</span><br>
<span class="quotelev1">&gt; +    return value;
</span><br>
<span class="quotelev1">&gt;  }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  static inline int mca_btl_tcp_param_register_int(
</span><br>
<span class="quotelev1">&gt;          const char* param_name,
</span><br>
<span class="quotelev1">&gt; +        const char* help_string,
</span><br>
<span class="quotelev1">&gt;          int default_value)
</span><br>
<span class="quotelev1">&gt;  {
</span><br>
<span class="quotelev1">&gt; -    int id = mca_base_param_register_int 
</span><br>
<span class="quotelev1">&gt; (&quot;btl&quot;,&quot;tcp&quot;,param_name,NULL,default_value);
</span><br>
<span class="quotelev1">&gt; -    int param_value = default_value;
</span><br>
<span class="quotelev1">&gt; -    mca_base_param_lookup_int(id,&amp;param_value);
</span><br>
<span class="quotelev1">&gt; -    return param_value;
</span><br>
<span class="quotelev1">&gt; +    int value;
</span><br>
<span class="quotelev1">&gt; +    mca_base_param_reg_int(&amp;mca_btl_tcp_component.super.btl_version,
</span><br>
<span class="quotelev1">&gt; +                           param_name, help_string, false, false,
</span><br>
<span class="quotelev1">&gt; +                           default_value, &amp;value);
</span><br>
<span class="quotelev1">&gt; +    return value;
</span><br>
<span class="quotelev1">&gt;  }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; @@ -197,23 +201,25 @@
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      /* register TCP component parameters */
</span><br>
<span class="quotelev1">&gt;      mca_btl_tcp_component.tcp_num_links =
</span><br>
<span class="quotelev1">&gt; -        mca_btl_tcp_param_register_int(&quot;links&quot;, 1);
</span><br>
<span class="quotelev1">&gt; +        mca_btl_tcp_param_register_int(&quot;links&quot;, NULL, 1);
</span><br>
<span class="quotelev1">&gt;      mca_btl_tcp_component.tcp_if_include =
</span><br>
<span class="quotelev1">&gt; -        mca_btl_tcp_param_register_string(&quot;if_include&quot;, &quot;&quot;);
</span><br>
<span class="quotelev1">&gt; +        mca_btl_tcp_param_register_string(&quot;if_include&quot;, NULL, &quot;&quot;);
</span><br>
<span class="quotelev1">&gt;      mca_btl_tcp_component.tcp_if_exclude =
</span><br>
<span class="quotelev1">&gt; -        mca_btl_tcp_param_register_string(&quot;if_exclude&quot;, &quot;lo&quot;);
</span><br>
<span class="quotelev1">&gt; +        mca_btl_tcp_param_register_string(&quot;if_exclude&quot;, NULL, &quot;lo&quot;);
</span><br>
<span class="quotelev1">&gt;      mca_btl_tcp_component.tcp_free_list_num =
</span><br>
<span class="quotelev1">&gt; -        mca_btl_tcp_param_register_int (&quot;free_list_num&quot;, 8);
</span><br>
<span class="quotelev1">&gt; +        mca_btl_tcp_param_register_int (&quot;free_list_num&quot;, NULL, 8);
</span><br>
<span class="quotelev1">&gt;      mca_btl_tcp_component.tcp_free_list_max =
</span><br>
<span class="quotelev1">&gt; -        mca_btl_tcp_param_register_int (&quot;free_list_max&quot;, -1);
</span><br>
<span class="quotelev1">&gt; +        mca_btl_tcp_param_register_int (&quot;free_list_max&quot;, NULL, -1);
</span><br>
<span class="quotelev1">&gt;      mca_btl_tcp_component.tcp_free_list_inc =
</span><br>
<span class="quotelev1">&gt; -        mca_btl_tcp_param_register_int (&quot;free_list_inc&quot;, 32);
</span><br>
<span class="quotelev1">&gt; +        mca_btl_tcp_param_register_int (&quot;free_list_inc&quot;, NULL, 32);
</span><br>
<span class="quotelev1">&gt;      mca_btl_tcp_component.tcp_sndbuf =
</span><br>
<span class="quotelev1">&gt; -        mca_btl_tcp_param_register_int (&quot;sndbuf&quot;, 128*1024);
</span><br>
<span class="quotelev1">&gt; +        mca_btl_tcp_param_register_int (&quot;sndbuf&quot;, NULL, 128*1024);
</span><br>
<span class="quotelev1">&gt;      mca_btl_tcp_component.tcp_rcvbuf =
</span><br>
<span class="quotelev1">&gt; -        mca_btl_tcp_param_register_int (&quot;rcvbuf&quot;, 128*1024);
</span><br>
<span class="quotelev1">&gt; +        mca_btl_tcp_param_register_int (&quot;rcvbuf&quot;, NULL, 128*1024);
</span><br>
<span class="quotelev1">&gt;      mca_btl_tcp_component.tcp_endpoint_cache =
</span><br>
<span class="quotelev1">&gt; -        mca_btl_tcp_param_register_int (&quot;endpoint_cache&quot;, 30*1024);
</span><br>
<span class="quotelev1">&gt; +        mca_btl_tcp_param_register_int (&quot;endpoint_cache&quot;, NULL,  
</span><br>
<span class="quotelev1">&gt; 30*1024);
</span><br>
<span class="quotelev1">&gt; +    mca_btl_tcp_component.tcp_use_nodelay =
</span><br>
<span class="quotelev1">&gt; +        !mca_btl_tcp_param_register_int (&quot;use_nagle&quot;, &quot;Whether to  
</span><br>
<span class="quotelev1">&gt; use Nagle's algorithm or not (using Nagle's algorithm may increase  
</span><br>
<span class="quotelev1">&gt; short message latency)&quot;, 0);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      mca_btl_tcp_module.super.btl_exclusivity =   
</span><br>
<span class="quotelev1">&gt; MCA_BTL_EXCLUSIVITY_LOW;
</span><br>
<span class="quotelev1">&gt;      mca_btl_tcp_module.super.btl_eager_limit = 64*1024;
</span><br>
<span class="quotelev1">&gt; @@ -232,7 +238,7 @@
</span><br>
<span class="quotelev1">&gt;              &amp;mca_btl_tcp_module.super);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      mca_btl_tcp_component.tcp_disable_family =
</span><br>
<span class="quotelev1">&gt; -        mca_btl_tcp_param_register_int (&quot;disable_family&quot;, 0);
</span><br>
<span class="quotelev1">&gt; +        mca_btl_tcp_param_register_int (&quot;disable_family&quot;, NULL, 0);
</span><br>
<span class="quotelev1">&gt;      return OMPI_SUCCESS;
</span><br>
<span class="quotelev1">&gt;  }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; @@ -320,11 +326,11 @@
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;          /* allow user to specify interface bandwidth */
</span><br>
<span class="quotelev1">&gt;          sprintf(param, &quot;bandwidth_%s&quot;, if_name);
</span><br>
<span class="quotelev1">&gt; -        btl-&gt;super.btl_bandwidth = mca_btl_tcp_param_register_int 
</span><br>
<span class="quotelev1">&gt; (param, btl-&gt;super.btl_bandwidth);
</span><br>
<span class="quotelev1">&gt; +        btl-&gt;super.btl_bandwidth = mca_btl_tcp_param_register_int 
</span><br>
<span class="quotelev1">&gt; (param, NULL, btl-&gt;super.btl_bandwidth);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;          /* allow user to override/specify latency ranking */
</span><br>
<span class="quotelev1">&gt;          sprintf(param, &quot;latency_%s&quot;, if_name);
</span><br>
<span class="quotelev1">&gt; -        btl-&gt;super.btl_latency = mca_btl_tcp_param_register_int 
</span><br>
<span class="quotelev1">&gt; (param, btl-&gt;super.btl_latency);
</span><br>
<span class="quotelev1">&gt; +        btl-&gt;super.btl_latency = mca_btl_tcp_param_register_int 
</span><br>
<span class="quotelev1">&gt; (param, NULL, btl-&gt;super.btl_latency);
</span><br>
<span class="quotelev1">&gt;          if( i &gt; 0 ) {
</span><br>
<span class="quotelev1">&gt;              btl-&gt;super.btl_bandwidth &gt;&gt;= 1;
</span><br>
<span class="quotelev1">&gt;              btl-&gt;super.btl_latency   &lt;&lt;= 1;
</span><br>
<span class="quotelev1">&gt; @@ -332,11 +338,11 @@
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;          /* allow user to specify interface bandwidth */
</span><br>
<span class="quotelev1">&gt;          sprintf(param, &quot;bandwidth_%s:%d&quot;, if_name, i);
</span><br>
<span class="quotelev1">&gt; -        btl-&gt;super.btl_bandwidth = mca_btl_tcp_param_register_int 
</span><br>
<span class="quotelev1">&gt; (param, btl-&gt;super.btl_bandwidth);
</span><br>
<span class="quotelev1">&gt; +        btl-&gt;super.btl_bandwidth = mca_btl_tcp_param_register_int 
</span><br>
<span class="quotelev1">&gt; (param, NULL, btl-&gt;super.btl_bandwidth);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;          /* allow user to override/specify latency ranking */
</span><br>
<span class="quotelev1">&gt;          sprintf(param, &quot;latency_%s:%d&quot;, if_name, i);
</span><br>
<span class="quotelev1">&gt; -        btl-&gt;super.btl_latency = mca_btl_tcp_param_register_int 
</span><br>
<span class="quotelev1">&gt; (param, btl-&gt;super.btl_latency);
</span><br>
<span class="quotelev1">&gt; +        btl-&gt;super.btl_latency = mca_btl_tcp_param_register_int 
</span><br>
<span class="quotelev1">&gt; (param, NULL, btl-&gt;super.btl_latency);
</span><br>
<span class="quotelev1">&gt;  #if 0 &amp;&amp; OMPI_ENABLE_DEBUG
</span><br>
<span class="quotelev1">&gt;          BTL_OUTPUT((&quot;interface %s instance %i: bandwidth %d  
</span><br>
<span class="quotelev1">&gt; latency %d\n&quot;, if_name, i,
</span><br>
<span class="quotelev1">&gt;                      btl-&gt;super.btl_bandwidth, btl- 
</span><br>
<span class="quotelev2">&gt; &gt;super.btl_latency));
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Modified: trunk/ompi/mca/btl/tcp/btl_tcp_endpoint.c
</span><br>
<span class="quotelev1">&gt; ====================================================================== 
</span><br>
<span class="quotelev1">&gt; ========
</span><br>
<span class="quotelev1">&gt; --- trunk/ompi/mca/btl/tcp/btl_tcp_endpoint.c	(original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/ompi/mca/btl/tcp/btl_tcp_endpoint.c	2007-07-25 08:21:00  
</span><br>
<span class="quotelev1">&gt; EDT (Wed, 25 Jul 2007)
</span><br>
<span class="quotelev1">&gt; @@ -489,7 +489,7 @@
</span><br>
<span class="quotelev1">&gt;  {
</span><br>
<span class="quotelev1">&gt;      int optval;
</span><br>
<span class="quotelev1">&gt;  #if defined(TCP_NODELAY)
</span><br>
<span class="quotelev1">&gt; -    optval = 1;
</span><br>
<span class="quotelev1">&gt; +    optval = mca_btl_tcp_component.tcp_use_nodelay;
</span><br>
<span class="quotelev1">&gt;      if(setsockopt(sd, IPPROTO_TCP, TCP_NODELAY, (char *)&amp;optval,  
</span><br>
<span class="quotelev1">&gt; sizeof(optval)) &lt; 0) {
</span><br>
<span class="quotelev1">&gt;          BTL_ERROR((&quot;setsockopt(TCP_NODELAY) failed: %s (%d)&quot;,
</span><br>
<span class="quotelev1">&gt;                     strerror(opal_socket_errno), opal_socket_errno));
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
<li><strong>Next message:</strong> <a href="1996.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r15606"</a>
<li><strong>Previous message:</strong> <a href="1994.php">Lisandro Dalcin: "Re: [OMPI devel] MPI_ALLOC_MEM warning when requesting 0 (zero) bytes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1996.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r15606"</a>
<li><strong>Reply:</strong> <a href="1996.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r15606"</a>
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

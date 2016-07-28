<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Jul 25 13:52:18 2007" -->
<!-- isoreceived="20070725175218" -->
<!-- sent="Wed, 25 Jul 2007 13:51:24 -0400" -->
<!-- isosent="20070725175124" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn] svn:open-mpi r15606" -->
<!-- id="90C2F640-D32E-47D9-8944-F9062ADE2F69_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="32A917D0-9051-47EF-A0E2-2E6B047BC7B3_at_cs.utk.edu" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-07-25 13:51:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1997.php">Jeff Squyres: "Re: [OMPI devel] MPI_ALLOC_MEM warning when requesting 0 (zero) bytes"</a>
<li><strong>Previous message:</strong> <a href="1995.php">George Bosilca: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r15606"</a>
<li><strong>In reply to:</strong> <a href="1995.php">George Bosilca: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r15606"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Aside from updating the TCP BTL to use the not-deprecated MCA  
<br>
parameter interface functions, the new functionality introduced in  
<br>
this patch is about 5 lines of code (1 new member variable in the  
<br>
component struct, one new call to the MCA param register function,  
<br>
then use the new component.member variable instead of a hard-coded  
<br>
1).  Is it really harmful?
<br>
<p>I did it because I found it silly that we have this nice run-time  
<br>
parameter system but for someone who wanted to experiment with  
<br>
nagle's algorithm, they had to go change source code.
<br>
<p>Plus, per prior conversations, it would be nice to be able to have  
<br>
OMPI be able to block for progress someday...
<br>
<p>So yes, I agree it will be very unusual for someone to use this  
<br>
parameter.  But doesn't that describe many of our MCA  
<br>
parameters?  :-)  The point of MCA parameters is not necessarily for  
<br>
all the purposes that we can imagine -- it's precisely for the  
<br>
reasons that we *can't* imagine that they're useful.
<br>
<p>Just my $0.02...
<br>
<p><p>On Jul 25, 2007, at 1:40 PM, George Bosilca wrote:
<br>
<p><span class="quotelev1">&gt; Do we really need this one ? It look more like dead code forever to
</span><br>
<span class="quotelev1">&gt; me than anything else.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On one hand we're claiming that we don't use any blocking pooling
</span><br>
<span class="quotelev1">&gt; inside (and therefore Open MPI use 100% of the CPU) because a cluster
</span><br>
<span class="quotelev1">&gt; is dedicated to performance gathering, and on the other we allow the
</span><br>
<span class="quotelev1">&gt; users to disable the only latency improvement that TCP allow us ...
</span><br>
<span class="quotelev1">&gt; It doesn't really make sense to me. Moreover, it turned out that the
</span><br>
<span class="quotelev1">&gt; problem wasn't even coming from there.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    george.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jul 25, 2007, at 8:21 AM, jsquyres_at_[hidden] wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Author: jsquyres
</span><br>
<span class="quotelev2">&gt;&gt; Date: 2007-07-25 08:21:00 EDT (Wed, 25 Jul 2007)
</span><br>
<span class="quotelev2">&gt;&gt; New Revision: 15606
</span><br>
<span class="quotelev2">&gt;&gt; URL: <a href="https://svn.open-mpi.org/trac/ompi/changeset/15606">https://svn.open-mpi.org/trac/ompi/changeset/15606</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Log:
</span><br>
<span class="quotelev2">&gt;&gt; Add MCA parameter to enable/disable Nagle's algorithm on the TCP BTL.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Text files modified:
</span><br>
<span class="quotelev2">&gt;&gt;    trunk/ompi/mca/btl/tcp/btl_tcp.h           |     3 ++
</span><br>
<span class="quotelev2">&gt;&gt;    trunk/ompi/mca/btl/tcp/btl_tcp_component.c |    54 ++++++++++++++
</span><br>
<span class="quotelev2">&gt;&gt; ++++++++-----------------
</span><br>
<span class="quotelev2">&gt;&gt;    trunk/ompi/mca/btl/tcp/btl_tcp_endpoint.c  |     2
</span><br>
<span class="quotelev2">&gt;&gt;    3 files changed, 34 insertions(+), 25 deletions(-)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Modified: trunk/ompi/mca/btl/tcp/btl_tcp.h
</span><br>
<span class="quotelev2">&gt;&gt; ===================================================================== 
</span><br>
<span class="quotelev2">&gt;&gt; =
</span><br>
<span class="quotelev2">&gt;&gt; ========
</span><br>
<span class="quotelev2">&gt;&gt; --- trunk/ompi/mca/btl/tcp/btl_tcp.h	(original)
</span><br>
<span class="quotelev2">&gt;&gt; +++ trunk/ompi/mca/btl/tcp/btl_tcp.h	2007-07-25 08:21:00 EDT (Wed,
</span><br>
<span class="quotelev2">&gt;&gt; 25 Jul 2007)
</span><br>
<span class="quotelev2">&gt;&gt; @@ -90,6 +90,9 @@
</span><br>
<span class="quotelev2">&gt;&gt;      ompi_free_list_t tcp_frag_eager;
</span><br>
<span class="quotelev2">&gt;&gt;      ompi_free_list_t tcp_frag_max;
</span><br>
<span class="quotelev2">&gt;&gt;      ompi_free_list_t tcp_frag_user;
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt; +    /* Do we want to use TCP_NODELAY? */
</span><br>
<span class="quotelev2">&gt;&gt; +    int    tcp_use_nodelay;
</span><br>
<span class="quotelev2">&gt;&gt;  };
</span><br>
<span class="quotelev2">&gt;&gt;  typedef struct mca_btl_tcp_component_t mca_btl_tcp_component_t;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Modified: trunk/ompi/mca/btl/tcp/btl_tcp_component.c
</span><br>
<span class="quotelev2">&gt;&gt; ===================================================================== 
</span><br>
<span class="quotelev2">&gt;&gt; =
</span><br>
<span class="quotelev2">&gt;&gt; ========
</span><br>
<span class="quotelev2">&gt;&gt; --- trunk/ompi/mca/btl/tcp/btl_tcp_component.c	(original)
</span><br>
<span class="quotelev2">&gt;&gt; +++ trunk/ompi/mca/btl/tcp/btl_tcp_component.c	2007-07-25 08:21:00
</span><br>
<span class="quotelev2">&gt;&gt; EDT (Wed, 25 Jul 2007)
</span><br>
<span class="quotelev2">&gt;&gt; @@ -104,23 +104,27 @@
</span><br>
<span class="quotelev2">&gt;&gt;   */
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  static inline char* mca_btl_tcp_param_register_string(
</span><br>
<span class="quotelev2">&gt;&gt; -                                                     const char*
</span><br>
<span class="quotelev2">&gt;&gt; param_name,
</span><br>
<span class="quotelev2">&gt;&gt; -                                                     const char*
</span><br>
<span class="quotelev2">&gt;&gt; default_value)
</span><br>
<span class="quotelev2">&gt;&gt; +        const char* param_name,
</span><br>
<span class="quotelev2">&gt;&gt; +        const char* help_string,
</span><br>
<span class="quotelev2">&gt;&gt; +        const char* default_value)
</span><br>
<span class="quotelev2">&gt;&gt;  {
</span><br>
<span class="quotelev2">&gt;&gt; -    char *param_value;
</span><br>
<span class="quotelev2">&gt;&gt; -    int id = mca_base_param_register_string
</span><br>
<span class="quotelev2">&gt;&gt; (&quot;btl&quot;,&quot;tcp&quot;,param_name,NULL,default_value);
</span><br>
<span class="quotelev2">&gt;&gt; -    mca_base_param_lookup_string(id, &amp;param_value);
</span><br>
<span class="quotelev2">&gt;&gt; -    return param_value;
</span><br>
<span class="quotelev2">&gt;&gt; +    char *value;
</span><br>
<span class="quotelev2">&gt;&gt; +    mca_base_param_reg_string
</span><br>
<span class="quotelev2">&gt;&gt; (&amp;mca_btl_tcp_component.super.btl_version,
</span><br>
<span class="quotelev2">&gt;&gt; +                              param_name, help_string, false, false,
</span><br>
<span class="quotelev2">&gt;&gt; +                              default_value, &amp;value);
</span><br>
<span class="quotelev2">&gt;&gt; +    return value;
</span><br>
<span class="quotelev2">&gt;&gt;  }
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  static inline int mca_btl_tcp_param_register_int(
</span><br>
<span class="quotelev2">&gt;&gt;          const char* param_name,
</span><br>
<span class="quotelev2">&gt;&gt; +        const char* help_string,
</span><br>
<span class="quotelev2">&gt;&gt;          int default_value)
</span><br>
<span class="quotelev2">&gt;&gt;  {
</span><br>
<span class="quotelev2">&gt;&gt; -    int id = mca_base_param_register_int
</span><br>
<span class="quotelev2">&gt;&gt; (&quot;btl&quot;,&quot;tcp&quot;,param_name,NULL,default_value);
</span><br>
<span class="quotelev2">&gt;&gt; -    int param_value = default_value;
</span><br>
<span class="quotelev2">&gt;&gt; -    mca_base_param_lookup_int(id,&amp;param_value);
</span><br>
<span class="quotelev2">&gt;&gt; -    return param_value;
</span><br>
<span class="quotelev2">&gt;&gt; +    int value;
</span><br>
<span class="quotelev2">&gt;&gt; +    mca_base_param_reg_int(&amp;mca_btl_tcp_component.super.btl_version,
</span><br>
<span class="quotelev2">&gt;&gt; +                           param_name, help_string, false, false,
</span><br>
<span class="quotelev2">&gt;&gt; +                           default_value, &amp;value);
</span><br>
<span class="quotelev2">&gt;&gt; +    return value;
</span><br>
<span class="quotelev2">&gt;&gt;  }
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; @@ -197,23 +201,25 @@
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;      /* register TCP component parameters */
</span><br>
<span class="quotelev2">&gt;&gt;      mca_btl_tcp_component.tcp_num_links =
</span><br>
<span class="quotelev2">&gt;&gt; -        mca_btl_tcp_param_register_int(&quot;links&quot;, 1);
</span><br>
<span class="quotelev2">&gt;&gt; +        mca_btl_tcp_param_register_int(&quot;links&quot;, NULL, 1);
</span><br>
<span class="quotelev2">&gt;&gt;      mca_btl_tcp_component.tcp_if_include =
</span><br>
<span class="quotelev2">&gt;&gt; -        mca_btl_tcp_param_register_string(&quot;if_include&quot;, &quot;&quot;);
</span><br>
<span class="quotelev2">&gt;&gt; +        mca_btl_tcp_param_register_string(&quot;if_include&quot;, NULL, &quot;&quot;);
</span><br>
<span class="quotelev2">&gt;&gt;      mca_btl_tcp_component.tcp_if_exclude =
</span><br>
<span class="quotelev2">&gt;&gt; -        mca_btl_tcp_param_register_string(&quot;if_exclude&quot;, &quot;lo&quot;);
</span><br>
<span class="quotelev2">&gt;&gt; +        mca_btl_tcp_param_register_string(&quot;if_exclude&quot;, NULL, &quot;lo&quot;);
</span><br>
<span class="quotelev2">&gt;&gt;      mca_btl_tcp_component.tcp_free_list_num =
</span><br>
<span class="quotelev2">&gt;&gt; -        mca_btl_tcp_param_register_int (&quot;free_list_num&quot;, 8);
</span><br>
<span class="quotelev2">&gt;&gt; +        mca_btl_tcp_param_register_int (&quot;free_list_num&quot;, NULL, 8);
</span><br>
<span class="quotelev2">&gt;&gt;      mca_btl_tcp_component.tcp_free_list_max =
</span><br>
<span class="quotelev2">&gt;&gt; -        mca_btl_tcp_param_register_int (&quot;free_list_max&quot;, -1);
</span><br>
<span class="quotelev2">&gt;&gt; +        mca_btl_tcp_param_register_int (&quot;free_list_max&quot;, NULL, -1);
</span><br>
<span class="quotelev2">&gt;&gt;      mca_btl_tcp_component.tcp_free_list_inc =
</span><br>
<span class="quotelev2">&gt;&gt; -        mca_btl_tcp_param_register_int (&quot;free_list_inc&quot;, 32);
</span><br>
<span class="quotelev2">&gt;&gt; +        mca_btl_tcp_param_register_int (&quot;free_list_inc&quot;, NULL, 32);
</span><br>
<span class="quotelev2">&gt;&gt;      mca_btl_tcp_component.tcp_sndbuf =
</span><br>
<span class="quotelev2">&gt;&gt; -        mca_btl_tcp_param_register_int (&quot;sndbuf&quot;, 128*1024);
</span><br>
<span class="quotelev2">&gt;&gt; +        mca_btl_tcp_param_register_int (&quot;sndbuf&quot;, NULL, 128*1024);
</span><br>
<span class="quotelev2">&gt;&gt;      mca_btl_tcp_component.tcp_rcvbuf =
</span><br>
<span class="quotelev2">&gt;&gt; -        mca_btl_tcp_param_register_int (&quot;rcvbuf&quot;, 128*1024);
</span><br>
<span class="quotelev2">&gt;&gt; +        mca_btl_tcp_param_register_int (&quot;rcvbuf&quot;, NULL, 128*1024);
</span><br>
<span class="quotelev2">&gt;&gt;      mca_btl_tcp_component.tcp_endpoint_cache =
</span><br>
<span class="quotelev2">&gt;&gt; -        mca_btl_tcp_param_register_int (&quot;endpoint_cache&quot;, 30*1024);
</span><br>
<span class="quotelev2">&gt;&gt; +        mca_btl_tcp_param_register_int (&quot;endpoint_cache&quot;, NULL,
</span><br>
<span class="quotelev2">&gt;&gt; 30*1024);
</span><br>
<span class="quotelev2">&gt;&gt; +    mca_btl_tcp_component.tcp_use_nodelay =
</span><br>
<span class="quotelev2">&gt;&gt; +        !mca_btl_tcp_param_register_int (&quot;use_nagle&quot;, &quot;Whether to
</span><br>
<span class="quotelev2">&gt;&gt; use Nagle's algorithm or not (using Nagle's algorithm may increase
</span><br>
<span class="quotelev2">&gt;&gt; short message latency)&quot;, 0);
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;      mca_btl_tcp_module.super.btl_exclusivity =
</span><br>
<span class="quotelev2">&gt;&gt; MCA_BTL_EXCLUSIVITY_LOW;
</span><br>
<span class="quotelev2">&gt;&gt;      mca_btl_tcp_module.super.btl_eager_limit = 64*1024;
</span><br>
<span class="quotelev2">&gt;&gt; @@ -232,7 +238,7 @@
</span><br>
<span class="quotelev2">&gt;&gt;              &amp;mca_btl_tcp_module.super);
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;      mca_btl_tcp_component.tcp_disable_family =
</span><br>
<span class="quotelev2">&gt;&gt; -        mca_btl_tcp_param_register_int (&quot;disable_family&quot;, 0);
</span><br>
<span class="quotelev2">&gt;&gt; +        mca_btl_tcp_param_register_int (&quot;disable_family&quot;, NULL, 0);
</span><br>
<span class="quotelev2">&gt;&gt;      return OMPI_SUCCESS;
</span><br>
<span class="quotelev2">&gt;&gt;  }
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; @@ -320,11 +326,11 @@
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;          /* allow user to specify interface bandwidth */
</span><br>
<span class="quotelev2">&gt;&gt;          sprintf(param, &quot;bandwidth_%s&quot;, if_name);
</span><br>
<span class="quotelev2">&gt;&gt; -        btl-&gt;super.btl_bandwidth = mca_btl_tcp_param_register_int
</span><br>
<span class="quotelev2">&gt;&gt; (param, btl-&gt;super.btl_bandwidth);
</span><br>
<span class="quotelev2">&gt;&gt; +        btl-&gt;super.btl_bandwidth = mca_btl_tcp_param_register_int
</span><br>
<span class="quotelev2">&gt;&gt; (param, NULL, btl-&gt;super.btl_bandwidth);
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;          /* allow user to override/specify latency ranking */
</span><br>
<span class="quotelev2">&gt;&gt;          sprintf(param, &quot;latency_%s&quot;, if_name);
</span><br>
<span class="quotelev2">&gt;&gt; -        btl-&gt;super.btl_latency = mca_btl_tcp_param_register_int
</span><br>
<span class="quotelev2">&gt;&gt; (param, btl-&gt;super.btl_latency);
</span><br>
<span class="quotelev2">&gt;&gt; +        btl-&gt;super.btl_latency = mca_btl_tcp_param_register_int
</span><br>
<span class="quotelev2">&gt;&gt; (param, NULL, btl-&gt;super.btl_latency);
</span><br>
<span class="quotelev2">&gt;&gt;          if( i &gt; 0 ) {
</span><br>
<span class="quotelev2">&gt;&gt;              btl-&gt;super.btl_bandwidth &gt;&gt;= 1;
</span><br>
<span class="quotelev2">&gt;&gt;              btl-&gt;super.btl_latency   &lt;&lt;= 1;
</span><br>
<span class="quotelev2">&gt;&gt; @@ -332,11 +338,11 @@
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;          /* allow user to specify interface bandwidth */
</span><br>
<span class="quotelev2">&gt;&gt;          sprintf(param, &quot;bandwidth_%s:%d&quot;, if_name, i);
</span><br>
<span class="quotelev2">&gt;&gt; -        btl-&gt;super.btl_bandwidth = mca_btl_tcp_param_register_int
</span><br>
<span class="quotelev2">&gt;&gt; (param, btl-&gt;super.btl_bandwidth);
</span><br>
<span class="quotelev2">&gt;&gt; +        btl-&gt;super.btl_bandwidth = mca_btl_tcp_param_register_int
</span><br>
<span class="quotelev2">&gt;&gt; (param, NULL, btl-&gt;super.btl_bandwidth);
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;          /* allow user to override/specify latency ranking */
</span><br>
<span class="quotelev2">&gt;&gt;          sprintf(param, &quot;latency_%s:%d&quot;, if_name, i);
</span><br>
<span class="quotelev2">&gt;&gt; -        btl-&gt;super.btl_latency = mca_btl_tcp_param_register_int
</span><br>
<span class="quotelev2">&gt;&gt; (param, btl-&gt;super.btl_latency);
</span><br>
<span class="quotelev2">&gt;&gt; +        btl-&gt;super.btl_latency = mca_btl_tcp_param_register_int
</span><br>
<span class="quotelev2">&gt;&gt; (param, NULL, btl-&gt;super.btl_latency);
</span><br>
<span class="quotelev2">&gt;&gt;  #if 0 &amp;&amp; OMPI_ENABLE_DEBUG
</span><br>
<span class="quotelev2">&gt;&gt;          BTL_OUTPUT((&quot;interface %s instance %i: bandwidth %d
</span><br>
<span class="quotelev2">&gt;&gt; latency %d\n&quot;, if_name, i,
</span><br>
<span class="quotelev2">&gt;&gt;                      btl-&gt;super.btl_bandwidth, btl-
</span><br>
<span class="quotelev3">&gt;&gt;&gt; super.btl_latency));
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Modified: trunk/ompi/mca/btl/tcp/btl_tcp_endpoint.c
</span><br>
<span class="quotelev2">&gt;&gt; ===================================================================== 
</span><br>
<span class="quotelev2">&gt;&gt; =
</span><br>
<span class="quotelev2">&gt;&gt; ========
</span><br>
<span class="quotelev2">&gt;&gt; --- trunk/ompi/mca/btl/tcp/btl_tcp_endpoint.c	(original)
</span><br>
<span class="quotelev2">&gt;&gt; +++ trunk/ompi/mca/btl/tcp/btl_tcp_endpoint.c	2007-07-25 08:21:00
</span><br>
<span class="quotelev2">&gt;&gt; EDT (Wed, 25 Jul 2007)
</span><br>
<span class="quotelev2">&gt;&gt; @@ -489,7 +489,7 @@
</span><br>
<span class="quotelev2">&gt;&gt;  {
</span><br>
<span class="quotelev2">&gt;&gt;      int optval;
</span><br>
<span class="quotelev2">&gt;&gt;  #if defined(TCP_NODELAY)
</span><br>
<span class="quotelev2">&gt;&gt; -    optval = 1;
</span><br>
<span class="quotelev2">&gt;&gt; +    optval = mca_btl_tcp_component.tcp_use_nodelay;
</span><br>
<span class="quotelev2">&gt;&gt;      if(setsockopt(sd, IPPROTO_TCP, TCP_NODELAY, (char *)&amp;optval,
</span><br>
<span class="quotelev2">&gt;&gt; sizeof(optval)) &lt; 0) {
</span><br>
<span class="quotelev2">&gt;&gt;          BTL_ERROR((&quot;setsockopt(TCP_NODELAY) failed: %s (%d)&quot;,
</span><br>
<span class="quotelev2">&gt;&gt;                     strerror(opal_socket_errno), opal_socket_errno));
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; svn mailing list
</span><br>
<span class="quotelev2">&gt;&gt; svn_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/svn">http://www.open-mpi.org/mailman/listinfo.cgi/svn</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1997.php">Jeff Squyres: "Re: [OMPI devel] MPI_ALLOC_MEM warning when requesting 0 (zero) bytes"</a>
<li><strong>Previous message:</strong> <a href="1995.php">George Bosilca: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r15606"</a>
<li><strong>In reply to:</strong> <a href="1995.php">George Bosilca: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r15606"</a>
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

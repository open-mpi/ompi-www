<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Jul 18 16:33:10 2007" -->
<!-- isoreceived="20070718203310" -->
<!-- sent="Wed, 18 Jul 2007 16:32:58 -0400" -->
<!-- isosent="20070718203258" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[OMPI devel] pathscale compilers and TLS" -->
<!-- id="5B0E8C81-3740-4675-A26D-0235383B5785_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="200707182025.l6IKP2CX003313_at_sourcehaven.osl.iu.edu" -->
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
<strong>Date:</strong> 2007-07-18 16:32:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1938.php">Jeff Squyres: "[OMPI devel] problems with openib finalize"</a>
<li><strong>Previous message:</strong> <a href="1936.php">Matthew Moskewicz: "Re: [OMPI devel] Fwd: lsf support / farm use models"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Crud.
<br>
<p>The Pathscale 3.0 compilers do not support thread-local data.  This  
<br>
is what we've been fighting with <a href="https://svn.open-mpi.org/trac/ompi/">https://svn.open-mpi.org/trac/ompi/</a> 
<br>
ticket/1025; QLogic just told us last week that their compiler does  
<br>
not support TLS (even though OMPI was not currently using it, glibc  
<br>
does, and something calls abort() deep within pthread_exit(NULL)).   
<br>
If you don't use the TLS glibc, everything works fine, but the TLS  
<br>
glibc is the default on many Linux systems.
<br>
<p>QLogic is looking into the problem and said they will get back to use  
<br>
(I'm unwilling to do horrid LD_PRELOAD tricks to get the non-TLS  
<br>
glibc, etc.).
<br>
<p>I'm guessing that this change will guarantee to make the pathscale  
<br>
3.0 compilers not work at all.
<br>
<p>Is this change just to fix a memory leak?  If so, could we add a  
<br>
configure test to see if the compiler is broken w.r.t. TLS?  (I know,  
<br>
I know... :-( )
<br>
<p><p><p>On Jul 18, 2007, at 4:25 PM, brbarret_at_[hidden] wrote:
<br>
<p><span class="quotelev1">&gt; Author: brbarret
</span><br>
<span class="quotelev1">&gt; Date: 2007-07-18 16:25:01 EDT (Wed, 18 Jul 2007)
</span><br>
<span class="quotelev1">&gt; New Revision: 15494
</span><br>
<span class="quotelev1">&gt; URL: <a href="https://svn.open-mpi.org/trac/ompi/changeset/15494">https://svn.open-mpi.org/trac/ompi/changeset/15494</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Log:
</span><br>
<span class="quotelev1">&gt; Use thread specific data and static buffers for the return type of
</span><br>
<span class="quotelev1">&gt; opal_net_get_hostname() rather than malloc, because no one was freeing
</span><br>
<span class="quotelev1">&gt; the buffer and the common use case was for printfs, where calling
</span><br>
<span class="quotelev1">&gt; free is a pain.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Text files modified:
</span><br>
<span class="quotelev1">&gt;    trunk/opal/runtime/opal_finalize.c |     3 +
</span><br>
<span class="quotelev1">&gt;    trunk/opal/runtime/opal_init.c     |     6 +++
</span><br>
<span class="quotelev1">&gt;    trunk/opal/util/net.c              |    68 ++++++++++++++++++++++ 
</span><br>
<span class="quotelev1">&gt; +++++++++++++++++
</span><br>
<span class="quotelev1">&gt;    trunk/opal/util/net.h              |    28 +++++++++++++++
</span><br>
<span class="quotelev1">&gt;    4 files changed, 103 insertions(+), 2 deletions(-)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Modified: trunk/opal/runtime/opal_finalize.c
</span><br>
<span class="quotelev1">&gt; ====================================================================== 
</span><br>
<span class="quotelev1">&gt; ========
</span><br>
<span class="quotelev1">&gt; --- trunk/opal/runtime/opal_finalize.c	(original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/opal/runtime/opal_finalize.c	2007-07-18 16:25:01 EDT  
</span><br>
<span class="quotelev1">&gt; (Wed, 18 Jul 2007)
</span><br>
<span class="quotelev1">&gt; @@ -25,6 +25,7 @@
</span><br>
<span class="quotelev1">&gt;  #include &quot;opal/util/output.h&quot;
</span><br>
<span class="quotelev1">&gt;  #include &quot;opal/util/malloc.h&quot;
</span><br>
<span class="quotelev1">&gt;  #include &quot;opal/util/if.h&quot;
</span><br>
<span class="quotelev1">&gt; +#include &quot;opal/util/net.h&quot;
</span><br>
<span class="quotelev1">&gt;  #include &quot;opal/util/keyval_parse.h&quot;
</span><br>
<span class="quotelev1">&gt;  #include &quot;opal/memoryhooks/memory.h&quot;
</span><br>
<span class="quotelev1">&gt;  #include &quot;opal/mca/base/base.h&quot;
</span><br>
<span class="quotelev1">&gt; @@ -53,6 +54,8 @@
</span><br>
<span class="quotelev1">&gt;         close when not opened internally */
</span><br>
<span class="quotelev1">&gt;      opal_iffinalize();
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; +    opal_net_finalize();
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt;      /* keyval lex-based parser */
</span><br>
<span class="quotelev1">&gt;      opal_util_keyval_parse_finalize();
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Modified: trunk/opal/runtime/opal_init.c
</span><br>
<span class="quotelev1">&gt; ====================================================================== 
</span><br>
<span class="quotelev1">&gt; ========
</span><br>
<span class="quotelev1">&gt; --- trunk/opal/runtime/opal_init.c	(original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/opal/runtime/opal_init.c	2007-07-18 16:25:01 EDT (Wed, 18  
</span><br>
<span class="quotelev1">&gt; Jul 2007)
</span><br>
<span class="quotelev1">&gt; @@ -28,6 +28,7 @@
</span><br>
<span class="quotelev1">&gt;  #include &quot;opal/memoryhooks/memory.h&quot;
</span><br>
<span class="quotelev1">&gt;  #include &quot;opal/mca/base/base.h&quot;
</span><br>
<span class="quotelev1">&gt;  #include &quot;opal/runtime/opal.h&quot;
</span><br>
<span class="quotelev1">&gt; +#include &quot;opal/util/net.h&quot;
</span><br>
<span class="quotelev1">&gt;  #include &quot;opal/mca/installdirs/base/base.h&quot;
</span><br>
<span class="quotelev1">&gt;  #include &quot;opal/mca/memory/base/base.h&quot;
</span><br>
<span class="quotelev1">&gt;  #include &quot;opal/mca/memcpy/base/base.h&quot;
</span><br>
<span class="quotelev1">&gt; @@ -165,6 +166,11 @@
</span><br>
<span class="quotelev1">&gt;          goto return_error;
</span><br>
<span class="quotelev1">&gt;      }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; +    if (OPAL_SUCCESS != (ret = opal_net_init())) {
</span><br>
<span class="quotelev1">&gt; +        error = &quot;opal_net_init&quot;;
</span><br>
<span class="quotelev1">&gt; +        goto return_error;
</span><br>
<span class="quotelev1">&gt; +    }
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt;      /* Setup the parameter system */
</span><br>
<span class="quotelev1">&gt;      if (OPAL_SUCCESS != (ret = mca_base_param_init())) {
</span><br>
<span class="quotelev1">&gt;          error = &quot;mca_base_param_init&quot;;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Modified: trunk/opal/util/net.c
</span><br>
<span class="quotelev1">&gt; ====================================================================== 
</span><br>
<span class="quotelev1">&gt; ========
</span><br>
<span class="quotelev1">&gt; --- trunk/opal/util/net.c	(original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/opal/util/net.c	2007-07-18 16:25:01 EDT (Wed, 18 Jul 2007)
</span><br>
<span class="quotelev1">&gt; @@ -74,9 +74,62 @@
</span><br>
<span class="quotelev1">&gt;  #include &quot;opal/util/output.h&quot;
</span><br>
<span class="quotelev1">&gt;  #include &quot;opal/util/strncpy.h&quot;
</span><br>
<span class="quotelev1">&gt;  #include &quot;opal/constants.h&quot;
</span><br>
<span class="quotelev1">&gt; +#include &quot;opal/threads/tsd.h&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  #ifdef HAVE_STRUCT_SOCKADDR_IN
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; +#if OPAL_WANT_IPV6
</span><br>
<span class="quotelev1">&gt; +static opal_tsd_key_t hostname_tsd_key;
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +static void
</span><br>
<span class="quotelev1">&gt; +hostname_cleanup(void *value)
</span><br>
<span class="quotelev1">&gt; +{
</span><br>
<span class="quotelev1">&gt; +    opal_output(0, &quot;cleaning up buffer: 0x%lx&quot;, value);
</span><br>
<span class="quotelev1">&gt; +    if (NULL != value) free(value);
</span><br>
<span class="quotelev1">&gt; +}
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +static char*
</span><br>
<span class="quotelev1">&gt; +get_hostname_buffer(void)
</span><br>
<span class="quotelev1">&gt; +{
</span><br>
<span class="quotelev1">&gt; +    void *buffer;
</span><br>
<span class="quotelev1">&gt; +    int ret;
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +    ret = opal_tsd_getspecific(hostname_tsd_key, &amp;buffer);
</span><br>
<span class="quotelev1">&gt; +    if (OPAL_SUCCESS != ret) return NULL;
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +    if (NULL == buffer) {
</span><br>
<span class="quotelev1">&gt; +        opal_output(0, &quot;getting a buffer&quot;);
</span><br>
<span class="quotelev1">&gt; +        buffer = (void*) malloc((NI_MAXHOST + 1) * sizeof(char));
</span><br>
<span class="quotelev1">&gt; +        ret = opal_tsd_setspecific(hostname_tsd_key, buffer);
</span><br>
<span class="quotelev1">&gt; +    }
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +    opal_output(0, &quot;returning buffer: 0x%lx&quot;, buffer);
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +    return (char*) buffer;
</span><br>
<span class="quotelev1">&gt; +}
</span><br>
<span class="quotelev1">&gt; +#endif
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +int
</span><br>
<span class="quotelev1">&gt; +opal_net_init()
</span><br>
<span class="quotelev1">&gt; +{
</span><br>
<span class="quotelev1">&gt; +#if OPAL_WANT_IPV6
</span><br>
<span class="quotelev1">&gt; +    return opal_tsd_key_create(&amp;hostname_tsd_key, hostname_cleanup);
</span><br>
<span class="quotelev1">&gt; +#else
</span><br>
<span class="quotelev1">&gt; +    return OPAL_SUCCESS;
</span><br>
<span class="quotelev1">&gt; +#endif
</span><br>
<span class="quotelev1">&gt; +}
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +int
</span><br>
<span class="quotelev1">&gt; +opal_net_finalize()
</span><br>
<span class="quotelev1">&gt; +{
</span><br>
<span class="quotelev1">&gt; +    return OPAL_SUCCESS;
</span><br>
<span class="quotelev1">&gt; +}
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt;  /* convert a CIDR prefixlen to netmask (in network byte order) */
</span><br>
<span class="quotelev1">&gt;  uint32_t
</span><br>
<span class="quotelev1">&gt;  opal_net_prefix2netmask(uint32_t prefixlen)
</span><br>
<span class="quotelev1">&gt; @@ -225,7 +278,7 @@
</span><br>
<span class="quotelev1">&gt;  opal_net_get_hostname(struct sockaddr *addr)
</span><br>
<span class="quotelev1">&gt;  {
</span><br>
<span class="quotelev1">&gt;  #if OPAL_WANT_IPV6
</span><br>
<span class="quotelev1">&gt; -    char *name = (char *)malloc((NI_MAXHOST + 1) * sizeof(char));
</span><br>
<span class="quotelev1">&gt; +    char *name = get_hostname_buffer();
</span><br>
<span class="quotelev1">&gt;      int error;
</span><br>
<span class="quotelev1">&gt;      socklen_t addrlen;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; @@ -297,6 +350,19 @@
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  #else /* HAVE_STRUCT_SOCKADDR_IN */
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; +int
</span><br>
<span class="quotelev1">&gt; +opal_net_init()
</span><br>
<span class="quotelev1">&gt; +{
</span><br>
<span class="quotelev1">&gt; +    return OPAL_SUCCESS;
</span><br>
<span class="quotelev1">&gt; +}
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +int
</span><br>
<span class="quotelev1">&gt; +opal_net_finalize()
</span><br>
<span class="quotelev1">&gt; +{
</span><br>
<span class="quotelev1">&gt; +    return OPAL_SUCCESS;
</span><br>
<span class="quotelev1">&gt; +}
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  uint32_t
</span><br>
<span class="quotelev1">&gt;  opal_net_prefix2netmask(uint32_t prefixlen)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Modified: trunk/opal/util/net.h
</span><br>
<span class="quotelev1">&gt; ====================================================================== 
</span><br>
<span class="quotelev1">&gt; ========
</span><br>
<span class="quotelev1">&gt; --- trunk/opal/util/net.h	(original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/opal/util/net.h	2007-07-18 16:25:01 EDT (Wed, 18 Jul 2007)
</span><br>
<span class="quotelev1">&gt; @@ -35,6 +35,31 @@
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  BEGIN_C_DECLS
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; +/**
</span><br>
<span class="quotelev1">&gt; + * Intiailize the network helper subsystem
</span><br>
<span class="quotelev1">&gt; + *
</span><br>
<span class="quotelev1">&gt; + * Initialize the network helper subsystem.  Should be called exactly
</span><br>
<span class="quotelev1">&gt; + * once for any process that will use any function in the network
</span><br>
<span class="quotelev1">&gt; + * helper subsystem.
</span><br>
<span class="quotelev1">&gt; + *
</span><br>
<span class="quotelev1">&gt; + * @retval OPAL_SUCCESS   Success
</span><br>
<span class="quotelev1">&gt; + * @retval OPAL_ERR_TEMP_OUT_OF_RESOURCE Not enough memory for static
</span><br>
<span class="quotelev1">&gt; + *                        buffer creation
</span><br>
<span class="quotelev1">&gt; + */
</span><br>
<span class="quotelev1">&gt; +OPAL_DECLSPEC int opal_net_init(void);
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +/**
</span><br>
<span class="quotelev1">&gt; + * Finalize the network helper subsystem
</span><br>
<span class="quotelev1">&gt; + *
</span><br>
<span class="quotelev1">&gt; + * Finalize the network helper subsystem.  Should be called exactly
</span><br>
<span class="quotelev1">&gt; + * once for any process that will use any function in the network
</span><br>
<span class="quotelev1">&gt; + * helper subsystem.
</span><br>
<span class="quotelev1">&gt; + *
</span><br>
<span class="quotelev1">&gt; + * @retval OPAL_SUCCESS   Success
</span><br>
<span class="quotelev1">&gt; + */
</span><br>
<span class="quotelev1">&gt; +OPAL_DECLSPEC int opal_net_finalize(void);
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  /**
</span><br>
<span class="quotelev1">&gt;   * Calculate netmask in network byte order from CIDR notation
</span><br>
<span class="quotelev1">&gt; @@ -90,7 +115,8 @@
</span><br>
<span class="quotelev1">&gt;   * Get string version of address
</span><br>
<span class="quotelev1">&gt;   *
</span><br>
<span class="quotelev1">&gt;   * Return the un-resolved address in a string format.  The string  
</span><br>
<span class="quotelev1">&gt; will
</span><br>
<span class="quotelev1">&gt; - * be created with malloc and the user must free the string.
</span><br>
<span class="quotelev1">&gt; + * be returned in a per-thread static buffer and should not be freed
</span><br>
<span class="quotelev1">&gt; + * by the user.
</span><br>
<span class="quotelev1">&gt;   *
</span><br>
<span class="quotelev1">&gt;   * @param addr              struct sockaddr of address
</span><br>
<span class="quotelev1">&gt;   * @return                  literal representation of \c addr
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; svn-full mailing list
</span><br>
<span class="quotelev1">&gt; svn-full_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/svn-full">http://www.open-mpi.org/mailman/listinfo.cgi/svn-full</a>
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
<li><strong>Next message:</strong> <a href="1938.php">Jeff Squyres: "[OMPI devel] problems with openib finalize"</a>
<li><strong>Previous message:</strong> <a href="1936.php">Matthew Moskewicz: "Re: [OMPI devel] Fwd: lsf support / farm use models"</a>
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

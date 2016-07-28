<?
$subject_val = "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r22762";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Mar  3 13:24:22 2010" -->
<!-- isoreceived="20100303182422" -->
<!-- sent="Wed, 3 Mar 2010 13:24:16 -0500" -->
<!-- isosent="20100303182416" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r22762" -->
<!-- id="8385C835-ADBB-4A2D-A63E-7FD43AF04D17_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="201003031551.o23FpFoC005133_at_sourcehaven.osl.iu.edu" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r22762<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-03-03 13:24:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7523.php">Iain Bason: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r22762"</a>
<li><strong>Previous message:</strong> <a href="7521.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [OMPI bugs] [Open MPI] #2322: Something is wrong with rdmacm cpc"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7523.php">Iain Bason: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r22762"</a>
<li><strong>Reply:</strong> <a href="7523.php">Iain Bason: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r22762"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'm not sure I agree with change #1.  I understand in principle why the change was made, but I'm uncomfortable with:
<br>
<p>1. The individual entries now behave like pseudo-regexp's rather that strict matching.  We used strict matching before this for a reason.  If we want to allow regexp-like behavior, then I think we should enable that with special characters -- that's the customary/usual way to do it.
<br>
<p>2. All other &lt;foo&gt;_in|exclude behavior in ompi is strict matching, not prefix matching.  I'm uncomfortable with the disparity.
<br>
<p>Additionally, if loopback is now handled properly via change #2, shouldn't the default value for the btl_tcp_if_exclude parameter now be empty?
<br>
<p>Actually -- thinking about this a little more, does opal_net_islocalhost() guarantee to work on peer interfaces?  
<br>
<p><p><p>On Mar 3, 2010, at 10:51 AM, &lt;igb_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Author: igb
</span><br>
<span class="quotelev1">&gt; Date: 2010-03-03 10:51:15 EST (Wed, 03 Mar 2010)
</span><br>
<span class="quotelev1">&gt; New Revision: 22762
</span><br>
<span class="quotelev1">&gt; URL: <a href="https://svn.open-mpi.org/trac/ompi/changeset/22762">https://svn.open-mpi.org/trac/ompi/changeset/22762</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Log:
</span><br>
<span class="quotelev1">&gt; Fixed two problems:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 1. The code that looks at btl_tcp_if_exclude before doing a
</span><br>
<span class="quotelev1">&gt;    modex_send uses strcmp rather than strncmp. That means that
</span><br>
<span class="quotelev1">&gt;    &quot;lo0&quot; gets sent even though &quot;lo&quot; is excluded.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 2. The code that determines whether a particular local TCP
</span><br>
<span class="quotelev1">&gt;    interface can connect to a particular remote interface doesn't
</span><br>
<span class="quotelev1">&gt;    check for loopback interfaces. With this fix, users can now
</span><br>
<span class="quotelev1">&gt;    enable &quot;lo&quot; and be assured that it will only be used for intra-
</span><br>
<span class="quotelev1">&gt;    node communication.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Text files modified:
</span><br>
<span class="quotelev1">&gt;    trunk/ompi/mca/btl/tcp/btl_tcp_component.c |     2 +-                                     
</span><br>
<span class="quotelev1">&gt;    trunk/ompi/mca/btl/tcp/btl_tcp_proc.c      |    25 +++++++++++++++++++++++--              
</span><br>
<span class="quotelev1">&gt;    2 files changed, 24 insertions(+), 3 deletions(-)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Modified: trunk/ompi/mca/btl/tcp/btl_tcp_component.c
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/ompi/mca/btl/tcp/btl_tcp_component.c  (original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/ompi/mca/btl/tcp/btl_tcp_component.c  2010-03-03 10:51:15 EST (Wed, 03 Mar 2010)
</span><br>
<span class="quotelev1">&gt; @@ -610,7 +610,7 @@
</span><br>
<span class="quotelev1">&gt;              /* check to see if this interface exists in the exclude list */
</span><br>
<span class="quotelev1">&gt;              argv = exclude;
</span><br>
<span class="quotelev1">&gt;              while(argv &amp;&amp; *argv) {
</span><br>
<span class="quotelev1">&gt; -                if(strcmp(*argv,if_name) == 0)
</span><br>
<span class="quotelev1">&gt; +                if(strncmp(*argv,if_name,strlen(*argv)) == 0)
</span><br>
<span class="quotelev1">&gt;                      break;
</span><br>
<span class="quotelev1">&gt;                  argv++;
</span><br>
<span class="quotelev1">&gt;              }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Modified: trunk/ompi/mca/btl/tcp/btl_tcp_proc.c
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/ompi/mca/btl/tcp/btl_tcp_proc.c       (original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/ompi/mca/btl/tcp/btl_tcp_proc.c       2010-03-03 10:51:15 EST (Wed, 03 Mar 2010)
</span><br>
<span class="quotelev1">&gt; @@ -504,8 +504,18 @@
</span><br>
<span class="quotelev1">&gt;              if(NULL != local_interfaces[i]-&gt;ipv4_address &amp;&amp;
</span><br>
<span class="quotelev1">&gt;                 NULL != peer_interfaces[j]-&gt;ipv4_address) {
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; +                /*  check for loopback */
</span><br>
<span class="quotelev1">&gt; +                if ((opal_net_islocalhost((struct sockaddr *)local_interfaces[i]-&gt;ipv4_address)
</span><br>
<span class="quotelev1">&gt; +                     &amp;&amp; !opal_net_islocalhost((struct sockaddr *)peer_interfaces[j]-&gt;ipv4_address))
</span><br>
<span class="quotelev1">&gt; +                    || (opal_net_islocalhost((struct sockaddr *)peer_interfaces[j]-&gt;ipv4_address)
</span><br>
<span class="quotelev1">&gt; +                        &amp;&amp; !opal_net_islocalhost((struct sockaddr *)local_interfaces[i]-&gt;ipv4_address))
</span><br>
<span class="quotelev1">&gt; +                    || (opal_net_islocalhost((struct sockaddr *)local_interfaces[i]-&gt;ipv4_address)
</span><br>
<span class="quotelev1">&gt; +                        &amp;&amp; !opal_ifislocal(btl_proc-&gt;proc_ompi-&gt;proc_hostname))) {
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +                    /* No connection is possible on these interfaces */
</span><br>
<span class="quotelev1">&gt; +               
</span><br>
<span class="quotelev1">&gt;                  /*  check for RFC1918 */
</span><br>
<span class="quotelev1">&gt; -                if(opal_net_addr_isipv4public((struct sockaddr*) local_interfaces[i]-&gt;ipv4_address)
</span><br>
<span class="quotelev1">&gt; +                } else if(opal_net_addr_isipv4public((struct sockaddr*) local_interfaces[i]-&gt;ipv4_address)
</span><br>
<span class="quotelev1">&gt;                     &amp;&amp; opal_net_addr_isipv4public((struct sockaddr*)
</span><br>
<span class="quotelev1">&gt;                                                   peer_interfaces[j]-&gt;ipv4_address)) {
</span><br>
<span class="quotelev1">&gt;                      if(opal_net_samenetwork((struct sockaddr*) local_interfaces[i]-&gt;ipv4_address,
</span><br>
<span class="quotelev1">&gt; @@ -534,7 +544,18 @@
</span><br>
<span class="quotelev1">&gt;               */
</span><br>
<span class="quotelev1">&gt;              if(NULL != local_interfaces[i]-&gt;ipv6_address &amp;&amp;
</span><br>
<span class="quotelev1">&gt;                 NULL != peer_interfaces[j]-&gt;ipv6_address) {
</span><br>
<span class="quotelev1">&gt; -                if(opal_net_samenetwork((struct sockaddr*) local_interfaces[i]-&gt;ipv6_address,
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +                /*  check for loopback */
</span><br>
<span class="quotelev1">&gt; +                if ((opal_net_islocalhost((struct sockaddr *)local_interfaces[i]-&gt;ipv6_address)
</span><br>
<span class="quotelev1">&gt; +                     &amp;&amp; !opal_net_islocalhost((struct sockaddr *)peer_interfaces[j]-&gt;ipv6_address))
</span><br>
<span class="quotelev1">&gt; +                    || (opal_net_islocalhost((struct sockaddr *)peer_interfaces[j]-&gt;ipv6_address)
</span><br>
<span class="quotelev1">&gt; +                        &amp;&amp; !opal_net_islocalhost((struct sockaddr *)local_interfaces[i]-&gt;ipv6_address))
</span><br>
<span class="quotelev1">&gt; +                    || (opal_net_islocalhost((struct sockaddr *)local_interfaces[i]-&gt;ipv6_address)
</span><br>
<span class="quotelev1">&gt; +                        &amp;&amp; !opal_ifislocal(btl_proc-&gt;proc_ompi-&gt;proc_hostname))) {
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +                    /* No connection is possible on these interfaces */
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +                } else if(opal_net_samenetwork((struct sockaddr*) local_interfaces[i]-&gt;ipv6_address,
</span><br>
<span class="quotelev1">&gt;                                          (struct sockaddr*) peer_interfaces[j]-&gt;ipv6_address,
</span><br>
<span class="quotelev1">&gt;                                          local_interfaces[i]-&gt;ipv6_netmask)) {
</span><br>
<span class="quotelev1">&gt;                      weights[i][j] = CQ_PUBLIC_SAME_NETWORK;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; svn-full mailing list
</span><br>
<span class="quotelev1">&gt; svn-full_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/svn-full">http://www.open-mpi.org/mailman/listinfo.cgi/svn-full</a>
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
<li><strong>Next message:</strong> <a href="7523.php">Iain Bason: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r22762"</a>
<li><strong>Previous message:</strong> <a href="7521.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [OMPI bugs] [Open MPI] #2322: Something is wrong with rdmacm cpc"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7523.php">Iain Bason: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r22762"</a>
<li><strong>Reply:</strong> <a href="7523.php">Iain Bason: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r22762"</a>
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

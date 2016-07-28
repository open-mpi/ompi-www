<?
$subject_val = "Re: [OMPI users] Pointers for understanding failure messages on NetBSD";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Dec  4 13:33:19 2009" -->
<!-- isoreceived="20091204183319" -->
<!-- sent="Fri, 4 Dec 2009 13:33:13 -0500" -->
<!-- isosent="20091204183313" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Pointers for understanding failure messages on NetBSD" -->
<!-- id="ACE1843A-B1C1-4D8B-9CBF-616DACB7A695_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="8a7aa557a7a081e36cb0f54c8f660ef7.squirrel_at_mail.ecs.vuw.ac.nz" -->
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
<strong>Subject:</strong> Re: [OMPI users] Pointers for understanding failure messages on NetBSD<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-12-04 13:33:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11421.php">Jeff Squyres: "Re: [OMPI users] Mimicking timeout for MPI_Wait"</a>
<li><strong>Previous message:</strong> <a href="11419.php">Jed Brown: "[OMPI users] Wrappers should put include path *after* user args"</a>
<li><strong>In reply to:</strong> <a href="11406.php">Kevin.Buckley_at_[hidden]: "Re: [OMPI users] Pointers for understanding failure messages on NetBSD"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11459.php">Kevin.Buckley_at_[hidden]: "Re: [OMPI users] Pointers for understanding failure messages on NetBSD"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Excellent!
<br>
<p>Once you get some more definitive results, could you send this in patch form?
<br>
<p><p>On Dec 3, 2009, at 7:05 PM, &lt;Kevin.Buckley_at_[hidden]&gt; &lt;Kevin.Buckley_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev3">&gt; &gt;&gt; I have actually already taken the IPv6 block and simply tried to
</span><br>
<span class="quotelev3">&gt; &gt;&gt; replace any IPv6 stuff with IPv4 &quot;equivalents&quot;, eg:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; At the risk of showing a lot of ignorance, here's the block I coddled
</span><br>
<span class="quotelev2">&gt; &gt; together based on the IPv6 block.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I have tried to keep it looking as close to the original IPv6
</span><br>
<span class="quotelev2">&gt; &gt; block as possible.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; OK, I now have something that seems to work without generating
</span><br>
<span class="quotelev1">&gt; any error messages.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'll post it here for reference and try and make a PkgSrc patch
</span><br>
<span class="quotelev1">&gt; once I get access to the WIP tree for the NetBSD port of OpenMPI,
</span><br>
<span class="quotelev1">&gt; which will make more sense to Aleksej.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The main difference between this and the IPv6 block is the
</span><br>
<span class="quotelev1">&gt; extra:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             ((struct sockaddr_in*) &amp;intf.if_addr)-&gt;sin_len =
</span><br>
<span class="quotelev1">&gt; cur_ifaddrs-&gt;ifa_addr-&gt;sa_len;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; line just below the
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             /* fill values into the opal_if_t */
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; stanza.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The errors I posted as seeing relating to
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; opal_sockaddr2str failed:Temporary failure in name resolution (return code 4)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; were arising because the sin_len was appearing as 0 after the
</span><br>
<span class="quotelev1">&gt; interface had been placed into the opal_list.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Given that the getifaddrs code can handle both IPv4 and IPv6, there
</span><br>
<span class="quotelev1">&gt; may not be a need to have two loops, one for each protocol but I
</span><br>
<span class="quotelev1">&gt; am not going to make such a major change at present, indeed, my
</span><br>
<span class="quotelev1">&gt; code probably needs tarting up.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; But anyroad, here the block as it stands
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #if defined(__NetBSD__)
</span><br>
<span class="quotelev1">&gt; /* || defined(__OpenBSD__) || defined(__FreeBSD__) ||                   \
</span><br>
<span class="quotelev1">&gt;              defined(__386BSD__) || defined(__bsdi__) ||
</span><br>
<span class="quotelev1">&gt; defined(__APPLE__) */
</span><br>
<span class="quotelev1">&gt; /*           || defined(__linux__)  */
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     {
</span><br>
<span class="quotelev1">&gt;         OBJ_CONSTRUCT(&amp;opal_if_list, opal_list_t);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;         struct ifaddrs **ifadd_list;
</span><br>
<span class="quotelev1">&gt;         struct ifaddrs *cur_ifaddrs;
</span><br>
<span class="quotelev1">&gt;         struct sockaddr_in* sin_addr;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;         /*
</span><br>
<span class="quotelev1">&gt;          * the manpage claims that getifaddrs() allocates the memory,
</span><br>
<span class="quotelev1">&gt;          * and freeifaddrs() is later used to release the allocated memory.
</span><br>
<span class="quotelev1">&gt;          * however, without this malloc the call to getifaddrs() segfaults
</span><br>
<span class="quotelev1">&gt;          */
</span><br>
<span class="quotelev1">&gt;         ifadd_list = (struct ifaddrs **) malloc(sizeof(struct ifaddrs*));
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;         /* create the linked list of ifaddrs structs */
</span><br>
<span class="quotelev1">&gt;         if(getifaddrs(ifadd_list) &lt; 0) {
</span><br>
<span class="quotelev1">&gt;             opal_output(0, &quot;opal_ifinit: getifaddrs() failed with
</span><br>
<span class="quotelev1">&gt; error=%d\n&quot;,
</span><br>
<span class="quotelev1">&gt;                     errno);
</span><br>
<span class="quotelev1">&gt;             return OPAL_ERROR;
</span><br>
<span class="quotelev1">&gt;         }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;         for(cur_ifaddrs = *ifadd_list; NULL != cur_ifaddrs;
</span><br>
<span class="quotelev1">&gt;                 cur_ifaddrs = cur_ifaddrs-&gt;ifa_next) {
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             opal_if_t intf;
</span><br>
<span class="quotelev1">&gt;             opal_if_t *intf_ptr;
</span><br>
<span class="quotelev1">&gt;             struct in_addr a4;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #if 0
</span><br>
<span class="quotelev1">&gt;             printf(&quot;interface %s.\n&quot;, cur_ifaddrs-&gt;ifa_name);
</span><br>
<span class="quotelev1">&gt; #endif
</span><br>
<span class="quotelev1">&gt;             /* skip non- af_inet interface addresses */
</span><br>
<span class="quotelev1">&gt;             if(AF_INET != cur_ifaddrs-&gt;ifa_addr-&gt;sa_family) {
</span><br>
<span class="quotelev1">&gt; #if 0
</span><br>
<span class="quotelev1">&gt;               printf(&quot;skipping non- af_inet interface %s, family %d.\n&quot;,
</span><br>
<span class="quotelev1">&gt;                      cur_ifaddrs-&gt;ifa_name, cur_ifaddrs-&gt;ifa_addr-&gt;sa_family);
</span><br>
<span class="quotelev1">&gt; #endif
</span><br>
<span class="quotelev1">&gt;                 continue;
</span><br>
<span class="quotelev1">&gt;             }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             /* skip interface if it is down (IFF_UP not set) */
</span><br>
<span class="quotelev1">&gt;             if(0 == (cur_ifaddrs-&gt;ifa_flags &amp; IFF_UP)) {
</span><br>
<span class="quotelev1">&gt; #if 0
</span><br>
<span class="quotelev1">&gt;                 printf(&quot;skipping non-up interface %s.\n&quot;,
</span><br>
<span class="quotelev1">&gt; cur_ifaddrs-&gt;ifa_name);
</span><br>
<span class="quotelev1">&gt; #endif
</span><br>
<span class="quotelev1">&gt;                 continue;
</span><br>
<span class="quotelev1">&gt;             }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             /* skip interface if it is a loopback device (IFF_LOOPBACK
</span><br>
<span class="quotelev1">&gt; set) */
</span><br>
<span class="quotelev1">&gt;             /* or if it is a point-to-point interface */
</span><br>
<span class="quotelev1">&gt;             /* TODO: do we really skip p2p? */
</span><br>
<span class="quotelev1">&gt;             if(0 != (cur_ifaddrs-&gt;ifa_flags &amp; IFF_LOOPBACK)
</span><br>
<span class="quotelev1">&gt;                     || 0!= (cur_ifaddrs-&gt;ifa_flags &amp; IFF_POINTOPOINT)) {
</span><br>
<span class="quotelev1">&gt; #if 0
</span><br>
<span class="quotelev1">&gt;                 printf(&quot;skipping loopback interface %s.\n&quot;,
</span><br>
<span class="quotelev1">&gt; cur_ifaddrs-&gt;ifa_name);
</span><br>
<span class="quotelev1">&gt; #endif
</span><br>
<span class="quotelev1">&gt;                 continue;
</span><br>
<span class="quotelev1">&gt;             }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #if 0
</span><br>
<span class="quotelev1">&gt;             printf(&quot;sa_len %d.\n&quot;, cur_ifaddrs-&gt;ifa_addr-&gt;sa_len);
</span><br>
<span class="quotelev1">&gt; #endif
</span><br>
<span class="quotelev1">&gt;             sin_addr = (struct sockaddr_in *) cur_ifaddrs-&gt;ifa_addr;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             /* There shouldn't be any IPv6 address starting with fe80: to
</span><br>
<span class="quotelev1">&gt; skip */
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             memset(&amp;intf, 0, sizeof(intf));
</span><br>
<span class="quotelev1">&gt;             OBJ_CONSTRUCT(&amp;intf, opal_list_item_t);
</span><br>
<span class="quotelev1">&gt; #if 0
</span><br>
<span class="quotelev1">&gt;             char *addr_name = (char *) malloc(48*sizeof(char));
</span><br>
<span class="quotelev1">&gt;             inet_ntop(AF_INET, &amp;sin_addr-&gt;sin_addr, addr_name,
</span><br>
<span class="quotelev1">&gt; 48*sizeof(char));
</span><br>
<span class="quotelev1">&gt;             opal_output(0, &quot;inet capable interface %s discovered, address
</span><br>
<span class="quotelev1">&gt; %s.\n&quot;,
</span><br>
<span class="quotelev1">&gt;                     cur_ifaddrs-&gt;ifa_name, addr_name);
</span><br>
<span class="quotelev1">&gt;             free(addr_name);
</span><br>
<span class="quotelev1">&gt; #endif
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             /* fill values into the opal_if_t */
</span><br>
<span class="quotelev1">&gt;             memcpy(&amp;a4, &amp;(sin_addr-&gt;sin_addr), sizeof(struct in_addr));
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             strncpy(intf.if_name, cur_ifaddrs-&gt;ifa_name, IF_NAMESIZE);
</span><br>
<span class="quotelev1">&gt;             intf.if_index = opal_list_get_size(&amp;opal_if_list) + 1;
</span><br>
<span class="quotelev1">&gt;             ((struct sockaddr_in*) &amp;intf.if_addr)-&gt;sin_addr = a4;
</span><br>
<span class="quotelev1">&gt;             ((struct sockaddr_in*) &amp;intf.if_addr)-&gt;sin_family = AF_INET;
</span><br>
<span class="quotelev1">&gt;             ((struct sockaddr_in*) &amp;intf.if_addr)-&gt;sin_len =
</span><br>
<span class="quotelev1">&gt; cur_ifaddrs-&gt;ifa_addr-&gt;sa_len;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             /* since every scope != 0 is ignored, we just set the scope to
</span><br>
<span class="quotelev1">&gt; 0 */
</span><br>
<span class="quotelev1">&gt;             /* There's no scope_id in the non-ipv6 stuff
</span><br>
<span class="quotelev1">&gt;             ((struct sockaddr_in6*) &amp;intf.if_addr)-&gt;sin6_scope_id = 0;
</span><br>
<span class="quotelev1">&gt;             */
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             /*
</span><br>
<span class="quotelev1">&gt;              * hardcoded netmask, adrian says that's ok
</span><br>
<span class="quotelev1">&gt;              */
</span><br>
<span class="quotelev1">&gt;             /* Non-NetBSD uses intf.if_mask = prefix(((struct sockaddr_in*)
</span><br>
<span class="quotelev1">&gt; &amp;ifr-&gt;ifr_addr)-&gt;sin_addr.s_addr); */
</span><br>
<span class="quotelev1">&gt;             /* intf.if_mask = 64; */
</span><br>
<span class="quotelev1">&gt;             intf.if_mask = prefix( sin_addr-&gt;sin_addr.s_addr);
</span><br>
<span class="quotelev1">&gt;             intf.if_flags = cur_ifaddrs-&gt;ifa_flags;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             /*
</span><br>
<span class="quotelev1">&gt;              * FIXME: figure out how to gain access to the kernel index
</span><br>
<span class="quotelev1">&gt;              * (or create our own), getifaddrs() does not contain such
</span><br>
<span class="quotelev1">&gt;              * data
</span><br>
<span class="quotelev1">&gt;              */
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             intf.if_kernel_index = (uint16_t)
</span><br>
<span class="quotelev1">&gt; if_nametoindex(cur_ifaddrs-&gt;ifa_name);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             intf_ptr = (opal_if_t*) calloc(1, sizeof(opal_if_t));
</span><br>
<span class="quotelev1">&gt;             if(NULL == intf_ptr) {
</span><br>
<span class="quotelev1">&gt;                 opal_output(0, &quot;opal_ifinit: unable to allocate %lu bytes\n&quot;,
</span><br>
<span class="quotelev1">&gt;                             sizeof(opal_if_t));
</span><br>
<span class="quotelev1">&gt;                 OBJ_DESTRUCT(&amp;intf);
</span><br>
<span class="quotelev1">&gt;                 return OPAL_ERR_OUT_OF_RESOURCE;
</span><br>
<span class="quotelev1">&gt;             }
</span><br>
<span class="quotelev1">&gt;             memcpy(intf_ptr, &amp;intf, sizeof(intf));
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #if 0
</span><br>
<span class="quotelev1">&gt;             printf(&quot;About to append interface %s.\n&quot;, cur_ifaddrs-&gt;ifa_name);
</span><br>
<span class="quotelev1">&gt; #endif
</span><br>
<span class="quotelev1">&gt;             /* opal_list_append(&amp;opal_if_list, &amp;intf_ptr-&gt;super); */
</span><br>
<span class="quotelev1">&gt;             opal_list_append(&amp;opal_if_list, (opal_list_item_t*) intf_ptr);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             OBJ_DESTRUCT(&amp;intf);
</span><br>
<span class="quotelev1">&gt;         }   /*  of for loop over ifaddrs list */
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     }
</span><br>
<span class="quotelev1">&gt; #endif  /* netbsd */
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Kevin M. Buckley                                  Room:  CO327
</span><br>
<span class="quotelev1">&gt; School of Engineering and                         Phone: +64 4 463 5971
</span><br>
<span class="quotelev1">&gt;  Computer Science
</span><br>
<span class="quotelev1">&gt; Victoria University of Wellington
</span><br>
<span class="quotelev1">&gt; New Zealand
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11421.php">Jeff Squyres: "Re: [OMPI users] Mimicking timeout for MPI_Wait"</a>
<li><strong>Previous message:</strong> <a href="11419.php">Jed Brown: "[OMPI users] Wrappers should put include path *after* user args"</a>
<li><strong>In reply to:</strong> <a href="11406.php">Kevin.Buckley_at_[hidden]: "Re: [OMPI users] Pointers for understanding failure messages on NetBSD"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11459.php">Kevin.Buckley_at_[hidden]: "Re: [OMPI users] Pointers for understanding failure messages on NetBSD"</a>
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

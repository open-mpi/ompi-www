<?
$subject_val = "Re: [OMPI users] Pointers for understanding failure messages on NetBSD";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Dec  1 22:10:21 2009" -->
<!-- isoreceived="20091202031021" -->
<!-- sent="Tue, 1 Dec 2009 20:10:12 -0700" -->
<!-- isosent="20091202031012" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Pointers for understanding failure messages on NetBSD" -->
<!-- id="0D5CFBD9-9342-41D3-9261-570A44A39431_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="2409d237dad513265ce9ace684443253.squirrel_at_mail.ecs.vuw.ac.nz" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-12-01 22:10:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11357.php">Gus Correa: "Re: [OMPI users] mpirun is using one PBS node only"</a>
<li><strong>Previous message:</strong> <a href="11355.php">Kevin.Buckley_at_[hidden]: "Re: [OMPI users] Pointers for understanding failure messages on NetBSD"</a>
<li><strong>In reply to:</strong> <a href="11355.php">Kevin.Buckley_at_[hidden]: "Re: [OMPI users] Pointers for understanding failure messages on NetBSD"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11359.php">Kevin.Buckley_at_[hidden]: "Re: [OMPI users] Pointers for understanding failure messages on NetBSD"</a>
<li><strong>Reply:</strong> <a href="11359.php">Kevin.Buckley_at_[hidden]: "Re: [OMPI users] Pointers for understanding failure messages on NetBSD"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Interesting - especially since the existing code works quite well over a wide range of platforms. So I'm not quite so eager to declare it incorrect and only working by accident.
<br>
<p>However, I would welcome a proposed patch so we can look at it. This is always an important area for us, so the more discussion over how to do it the better.
<br>
<p>Thanks
<br>
Ralph
<br>
<p>On Dec 1, 2009, at 7:59 PM, Kevin.Buckley_at_[hidden] wrote:
<br>
<p><span class="quotelev3">&gt;&gt;&gt; I assume that both of you have seen the reply from Aleksej Saushev,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; who seems to be the bloke looking after the port of OpenMPI to the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; NetBSD platform.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Aleksej suggested some mods he had partially looked at, in
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; opal/util/if.c
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Nope - didn't see anything like that :-/
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Aah, just realised that that portion of Aleksej's comments were in
</span><br>
<span class="quotelev1">&gt; an offlist posting.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It'll be interesting to compare which files Jeff thinks the munging
</span><br>
<span class="quotelev1">&gt; needs to be done in.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Since none of us (to my knowledge) have ever looked at NetBSD (in
</span><br>
<span class="quotelev2">&gt;&gt; fact, I never heard of it before), I would not be surprised to find
</span><br>
<span class="quotelev2">&gt;&gt; that there are going to be problems encountered in such a port.
</span><br>
<span class="quotelev2">&gt;&gt; There always are.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have not had a chance to start looking at this in earnest myself
</span><br>
<span class="quotelev1">&gt; yet but I include the relevant info here, in case experience with
</span><br>
<span class="quotelev1">&gt; porting to those platforms you have heard of suggests something
</span><br>
<span class="quotelev1">&gt; obvious.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ==
</span><br>
<span class="quotelev1">&gt; OpenMPI uses incorrect way to access network interface information,
</span><br>
<span class="quotelev1">&gt; what works for FreeBSD (by an accident) doesn't work for NetBSD,
</span><br>
<span class="quotelev1">&gt; we should rewrite respective parts of opal/util/if.c file to use BSD API,
</span><br>
<span class="quotelev1">&gt; that is getifaddrs(3) even when walking over IPv4 addresses.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; My old &quot;draft&quot; (which is simply pointer to that part) is below,
</span><br>
<span class="quotelev1">&gt; I don't remember which OpenMPI version it is based on, I hope that you
</span><br>
<span class="quotelev1">&gt; find the place yourself. If not, ask or wait. I do hope to find some
</span><br>
<span class="quotelev1">&gt; time for OpenMPI next week after I finish reworking Fortran support in
</span><br>
<span class="quotelev1">&gt; pkgsrc. Stay tuned.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --- opal/util/if.c.orig        2009-03-18 18:42:39.000000000 +0300
</span><br>
<span class="quotelev1">&gt; +++ opal/util/if.c        2009-03-21 22:14:44.000000000 +0300
</span><br>
<span class="quotelev1">&gt; @@ -164,6 +164,135 @@
</span><br>
<span class="quotelev1">&gt;                                 false, false, (int)false, &amp;sd);
</span><br>
<span class="quotelev1">&gt;     do_not_resolve = OPAL_INT_TO_BOOL(sd);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; +#if defined( __NetBSD__) || defined(__OpenBSD__) || defined(__FreeBSD__)
</span><br>
<span class="quotelev1">&gt; +/* || defined(__386BSD__) || defined(__bsdi__) || defined(__APPLE__) */
</span><br>
<span class="quotelev1">&gt; +/*           || defined(__linux__)  */
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +    {
</span><br>
<span class="quotelev1">&gt; +        struct ifaddrs **ifadd_list;
</span><br>
<span class="quotelev1">&gt; +        struct ifaddrs *cur_ifaddrs;
</span><br>
<span class="quotelev1">&gt; +        struct sockaddr_in6* sin_addr;
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +        /*
</span><br>
<span class="quotelev1">&gt; +         * the manpage claims that getifaddrs() allocates the memory,
</span><br>
<span class="quotelev1">&gt; +         * and freeifaddrs() is later used to release the allocated memory.
</span><br>
<span class="quotelev1">&gt; +         * however, without this malloc the call to getifaddrs() segfaults
</span><br>
<span class="quotelev1">&gt; +         */
</span><br>
<span class="quotelev1">&gt; +        ifadd_list = (struct ifaddrs **) malloc(sizeof(struct ifaddrs*));
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +        /* create the linked list of ifaddrs structs */
</span><br>
<span class="quotelev1">&gt; +        if(getifaddrs(ifadd_list) &lt; 0) {
</span><br>
<span class="quotelev1">&gt; +            opal_output(0, &quot;opal_ifinit: getifaddrs() failed with
</span><br>
<span class="quotelev1">&gt; error=%d\n&quot;,
</span><br>
<span class="quotelev1">&gt; +                    errno);
</span><br>
<span class="quotelev1">&gt; +            return OPAL_ERROR;
</span><br>
<span class="quotelev1">&gt; +        }
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +        for(cur_ifaddrs = *ifadd_list; NULL != cur_ifaddrs;
</span><br>
<span class="quotelev1">&gt; +                cur_ifaddrs = cur_ifaddrs-&gt;ifa_next) {
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +            opal_if_t intf;
</span><br>
<span class="quotelev1">&gt; +            opal_if_t *intf_ptr;
</span><br>
<span class="quotelev1">&gt; +            struct in6_addr a6;
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +            /* skip non-ipv6 interface addresses */
</span><br>
<span class="quotelev1">&gt; +            if(AF_INET6 != cur_ifaddrs-&gt;ifa_addr-&gt;sa_family) {
</span><br>
<span class="quotelev1">&gt; +#if 0
</span><br>
<span class="quotelev1">&gt; +                printf(&quot;skipping non-ipv6 interface %s.\n&quot;,
</span><br>
<span class="quotelev1">&gt; cur_ifaddrs-&gt;ifa_name);
</span><br>
<span class="quotelev1">&gt; +#endif
</span><br>
<span class="quotelev1">&gt; +                continue;
</span><br>
<span class="quotelev1">&gt; +            }
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +            /* skip interface if it is down (IFF_UP not set) */
</span><br>
<span class="quotelev1">&gt; +            if(0 == (cur_ifaddrs-&gt;ifa_flags &amp; IFF_UP)) {
</span><br>
<span class="quotelev1">&gt; +#if 0
</span><br>
<span class="quotelev1">&gt; +                printf(&quot;skipping non-up interface %s.\n&quot;,
</span><br>
<span class="quotelev1">&gt; cur_ifaddrs-&gt;ifa_name);
</span><br>
<span class="quotelev1">&gt; +#endif
</span><br>
<span class="quotelev1">&gt; +                continue;
</span><br>
<span class="quotelev1">&gt; +            }
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +            /* skip interface if it is a loopback device (IFF_LOOPBACK
</span><br>
<span class="quotelev1">&gt; set) */
</span><br>
<span class="quotelev1">&gt; +            /* or if it is a point-to-point interface */
</span><br>
<span class="quotelev1">&gt; +            /* TODO: do we really skip p2p? */
</span><br>
<span class="quotelev1">&gt; +            if(0 != (cur_ifaddrs-&gt;ifa_flags &amp; IFF_LOOPBACK)
</span><br>
<span class="quotelev1">&gt; +                    || 0!= (cur_ifaddrs-&gt;ifa_flags &amp; IFF_POINTOPOINT)) {
</span><br>
<span class="quotelev1">&gt; +#if 0
</span><br>
<span class="quotelev1">&gt; +                printf(&quot;skipping loopback interface %s.\n&quot;,
</span><br>
<span class="quotelev1">&gt; cur_ifaddrs-&gt;ifa_name);
</span><br>
<span class="quotelev1">&gt; +#endif
</span><br>
<span class="quotelev1">&gt; +                continue;
</span><br>
<span class="quotelev1">&gt; +            }
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +            sin_addr = (struct sockaddr_in6 *) cur_ifaddrs-&gt;ifa_addr;
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +            /*
</span><br>
<span class="quotelev1">&gt; +             * skip IPv6 address starting with fe80:, as this is supposed
</span><br>
<span class="quotelev1">&gt; to be
</span><br>
<span class="quotelev1">&gt; +             * link-local scope. sockaddr_in6-&gt;sin6_scope_id doesn't
</span><br>
<span class="quotelev1">&gt; always work
</span><br>
<span class="quotelev1">&gt; +             * TODO: test whether scope id is set to a sensible value on
</span><br>
<span class="quotelev1">&gt; +             * linux and/or bsd (including osx)
</span><br>
<span class="quotelev1">&gt; +             *
</span><br>
<span class="quotelev1">&gt; +             * MacOSX: fe80::... has a scope of 0, but ifconfig -a shows
</span><br>
<span class="quotelev1">&gt; +             * a scope of 4 on that particular machine,
</span><br>
<span class="quotelev1">&gt; +             * so the scope returned by getifaddrs() isn't working properly
</span><br>
<span class="quotelev1">&gt; +             */
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +            if((IN6_IS_ADDR_LINKLOCAL (&amp;sin_addr-&gt;sin6_addr))) {
</span><br>
<span class="quotelev1">&gt; +#if 0
</span><br>
<span class="quotelev1">&gt; +                printf(&quot;skipping link-local ipv6 address on interface \
</span><br>
<span class="quotelev1">&gt; +                        %s with scope %d.\n&quot;,
</span><br>
<span class="quotelev1">&gt; +                        cur_ifaddrs-&gt;ifa_name, sin_addr-&gt;sin6_scope_id);
</span><br>
<span class="quotelev1">&gt; +#endif
</span><br>
<span class="quotelev1">&gt; +                continue;
</span><br>
<span class="quotelev1">&gt; +            }
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +            OMPI_DEBUG_ZERO(intf);
</span><br>
<span class="quotelev1">&gt; +            OBJ_CONSTRUCT(&amp;intf, opal_list_item_t);
</span><br>
<span class="quotelev1">&gt; +#if 0
</span><br>
<span class="quotelev1">&gt; +            char *addr_name = (char *) malloc(48*sizeof(char));
</span><br>
<span class="quotelev1">&gt; +            inet_ntop(AF_INET6, &amp;sin_addr-&gt;sin6_addr, addr_name,
</span><br>
<span class="quotelev1">&gt; 48*sizeof(char));
</span><br>
<span class="quotelev1">&gt; +            opal_output(0, &quot;ipv6 capable interface %s discovered, address
</span><br>
<span class="quotelev1">&gt; %s.\n&quot;,
</span><br>
<span class="quotelev1">&gt; +                    cur_ifaddrs-&gt;ifa_name, addr_name);
</span><br>
<span class="quotelev1">&gt; +            free(addr_name);
</span><br>
<span class="quotelev1">&gt; +#endif
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +            /* fill values into the opal_if_t */
</span><br>
<span class="quotelev1">&gt; +            memcpy(&amp;a6, &amp;(sin_addr-&gt;sin6_addr), sizeof(struct in6_addr));
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +            strncpy(intf.if_name, cur_ifaddrs-&gt;ifa_name, IF_NAMESIZE);
</span><br>
<span class="quotelev1">&gt; +            intf.if_index = opal_list_get_size(&amp;opal_if_list) + 1;
</span><br>
<span class="quotelev1">&gt; +            ((struct sockaddr_in6*) &amp;intf.if_addr)-&gt;sin6_addr = a6;
</span><br>
<span class="quotelev1">&gt; +            ((struct sockaddr_in6*) &amp;intf.if_addr)-&gt;sin6_family = AF_INET6;
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +            /* since every scope != 0 is ignored, we just set the scope
</span><br>
<span class="quotelev1">&gt; to 0 */
</span><br>
<span class="quotelev1">&gt; +            ((struct sockaddr_in6*) &amp;intf.if_addr)-&gt;sin6_scope_id = 0;
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +            /*
</span><br>
<span class="quotelev1">&gt; +             * hardcoded netmask, adrian says that's ok
</span><br>
<span class="quotelev1">&gt; +             */
</span><br>
<span class="quotelev1">&gt; +            intf.if_mask = 64;
</span><br>
<span class="quotelev1">&gt; +            intf.if_flags = cur_ifaddrs-&gt;ifa_flags;
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +            /*
</span><br>
<span class="quotelev1">&gt; +             * FIXME: figure out how to gain access to the kernel index
</span><br>
<span class="quotelev1">&gt; +             * (or create our own), getifaddrs() does not contain such
</span><br>
<span class="quotelev1">&gt; +             * data
</span><br>
<span class="quotelev1">&gt; +             */
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +            intf.if_kernel_index = (uint16_t)
</span><br>
<span class="quotelev1">&gt; if_nametoindex(cur_ifaddrs-&gt;ifa_name);
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +            intf_ptr = (opal_if_t*) malloc(sizeof(opal_if_t));
</span><br>
<span class="quotelev1">&gt; +            OMPI_DEBUG_ZERO(*intf_ptr);
</span><br>
<span class="quotelev1">&gt; +            if(NULL == intf_ptr) {
</span><br>
<span class="quotelev1">&gt; +                opal_output(0, &quot;opal_ifinit: unable to allocate %lu
</span><br>
<span class="quotelev1">&gt; bytes\n&quot;,
</span><br>
<span class="quotelev1">&gt; +                            sizeof(opal_if_t));
</span><br>
<span class="quotelev1">&gt; +                OBJ_DESTRUCT(&amp;intf);
</span><br>
<span class="quotelev1">&gt; +                return OPAL_ERR_OUT_OF_RESOURCE;
</span><br>
<span class="quotelev1">&gt; +            }
</span><br>
<span class="quotelev1">&gt; +            memcpy(intf_ptr, &amp;intf, sizeof(intf));
</span><br>
<span class="quotelev1">&gt; +            opal_list_append(&amp;opal_if_list, (opal_list_item_t*) intf_ptr);
</span><br>
<span class="quotelev1">&gt; +            OBJ_DESTRUCT(&amp;intf);
</span><br>
<span class="quotelev1">&gt; +        }   /*  of for loop over ifaddrs list */
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +    }
</span><br>
<span class="quotelev1">&gt; +#else
</span><br>
<span class="quotelev1">&gt;     /* create the internet socket to test off */
</span><br>
<span class="quotelev1">&gt; /*
</span><br>
<span class="quotelev1">&gt;    Change AF_INET to AF_UNSPEC (or AF_INET6) and everything will fail.
</span><br>
<span class="quotelev1">&gt; @@ -358,6 +487,9 @@
</span><br>
<span class="quotelev1">&gt;     }
</span><br>
<span class="quotelev1">&gt;     free(ifconf.ifc_req);
</span><br>
<span class="quotelev1">&gt;     close(sd);
</span><br>
<span class="quotelev1">&gt; +#endif  /* bsd,  macosx */
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; #if OPAL_WANT_IPV6
</span><br>
<span class="quotelev1">&gt; #ifdef __linux__ /* Linux does not have SIOCGL*, so parse
</span><br>
<span class="quotelev1">&gt;                      /proc/net/if_inet6 instead */
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ==
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Kevin M. Buckley                                  Room:  CO327
</span><br>
<span class="quotelev1">&gt; School of Engineering and                         Phone: +64 4 463 5971
</span><br>
<span class="quotelev1">&gt; Computer Science
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11357.php">Gus Correa: "Re: [OMPI users] mpirun is using one PBS node only"</a>
<li><strong>Previous message:</strong> <a href="11355.php">Kevin.Buckley_at_[hidden]: "Re: [OMPI users] Pointers for understanding failure messages on NetBSD"</a>
<li><strong>In reply to:</strong> <a href="11355.php">Kevin.Buckley_at_[hidden]: "Re: [OMPI users] Pointers for understanding failure messages on NetBSD"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11359.php">Kevin.Buckley_at_[hidden]: "Re: [OMPI users] Pointers for understanding failure messages on NetBSD"</a>
<li><strong>Reply:</strong> <a href="11359.php">Kevin.Buckley_at_[hidden]: "Re: [OMPI users] Pointers for understanding failure messages on NetBSD"</a>
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

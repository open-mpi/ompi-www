<?
$subject_val = "Re: [OMPI users] Pointers for understanding failure messages on NetBSD";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec  2 19:01:57 2009" -->
<!-- isoreceived="20091203000157" -->
<!-- sent="Wed, 2 Dec 2009 17:01:47 -0700" -->
<!-- isosent="20091203000147" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Pointers for understanding failure messages on NetBSD" -->
<!-- id="CD2EC99A-EEF9-4EA0-BE7F-03FAF48EF5A4_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="151228cf50bacc90f3e822cdf3c915cd.squirrel_at_mail.ecs.vuw.ac.nz" -->
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
<strong>Date:</strong> 2009-12-02 19:01:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11386.php">Ralph Castain: "Re: [OMPI users] MPI_Comm_spawn lots of times"</a>
<li><strong>Previous message:</strong> <a href="11384.php">Kevin.Buckley_at_[hidden]: "Re: [OMPI users] Pointers for understanding failure messages on NetBSD"</a>
<li><strong>In reply to:</strong> <a href="11384.php">Kevin.Buckley_at_[hidden]: "Re: [OMPI users] Pointers for understanding failure messages on NetBSD"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11387.php">Kevin.Buckley_at_[hidden]: "Re: [OMPI users] Pointers for understanding failure messages on NetBSD"</a>
<li><strong>Reply:</strong> <a href="11387.php">Kevin.Buckley_at_[hidden]: "Re: [OMPI users] Pointers for understanding failure messages on NetBSD"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I believe this line is incorrect:
<br>
<p><span class="quotelev1">&gt;            opal_list_append(&amp;opal_if_list, (opal_list_item_t*) intf_ptr);
</span><br>
<p>It needs to be
<br>
<p>opal_list_append(&amp;opal_if_list, &amp;intf_ptr-&gt;super);
<br>
<p><p>On Dec 2, 2009, at 4:46 PM, Kevin.Buckley_at_[hidden] wrote:
<br>
<p><span class="quotelev2">&gt;&gt; I have actually already taken the IPv6 block and simply tried to
</span><br>
<span class="quotelev2">&gt;&gt; replace any IPv6 stuff with IPv4 &quot;equivalents&quot;, eg:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; At the risk of showing a lot of ignorance, here's the block I coddled
</span><br>
<span class="quotelev1">&gt; together based on the IPv6 block.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have tried to keep it looking as close to the original IPv6
</span><br>
<span class="quotelev1">&gt; block as possible.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Note the little printf near the end.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #if defined(__NetBSD__)
</span><br>
<span class="quotelev1">&gt; /* || defined(__OpenBSD__) || defined(__FreeBSD__) ||			\
</span><br>
<span class="quotelev1">&gt;             defined(__386BSD__) || defined(__bsdi__) ||
</span><br>
<span class="quotelev1">&gt; defined(__APPLE__) */
</span><br>
<span class="quotelev1">&gt; /*           || defined(__linux__)  */
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    {
</span><br>
<span class="quotelev1">&gt;        struct ifaddrs **ifadd_list;
</span><br>
<span class="quotelev1">&gt;        struct ifaddrs *cur_ifaddrs;
</span><br>
<span class="quotelev1">&gt;        struct sockaddr_in* sin_addr;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;        /*
</span><br>
<span class="quotelev1">&gt;         * the manpage claims that getifaddrs() allocates the memory,
</span><br>
<span class="quotelev1">&gt;         * and freeifaddrs() is later used to release the allocated memory.
</span><br>
<span class="quotelev1">&gt;         * however, without this malloc the call to getifaddrs() segfaults
</span><br>
<span class="quotelev1">&gt;         */
</span><br>
<span class="quotelev1">&gt;        ifadd_list = (struct ifaddrs **) malloc(sizeof(struct ifaddrs*));
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;        /* create the linked list of ifaddrs structs */
</span><br>
<span class="quotelev1">&gt;        if(getifaddrs(ifadd_list) &lt; 0) {
</span><br>
<span class="quotelev1">&gt;            opal_output(0, &quot;opal_ifinit: getifaddrs() failed with
</span><br>
<span class="quotelev1">&gt; error=%d\n&quot;,
</span><br>
<span class="quotelev1">&gt;                    errno);
</span><br>
<span class="quotelev1">&gt;            return OPAL_ERROR;
</span><br>
<span class="quotelev1">&gt;        }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;        for(cur_ifaddrs = *ifadd_list; NULL != cur_ifaddrs;
</span><br>
<span class="quotelev1">&gt;                cur_ifaddrs = cur_ifaddrs-&gt;ifa_next) {
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;            opal_if_t intf;
</span><br>
<span class="quotelev1">&gt;            opal_if_t *intf_ptr;
</span><br>
<span class="quotelev1">&gt;            struct in_addr a4;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;            /* skip non- af_inet interface addresses */
</span><br>
<span class="quotelev1">&gt;            if(AF_INET != cur_ifaddrs-&gt;ifa_addr-&gt;sa_family) {
</span><br>
<span class="quotelev1">&gt; #if 0
</span><br>
<span class="quotelev1">&gt;                printf(&quot;skipping non- af_inet interface %s.\n&quot;,
</span><br>
<span class="quotelev1">&gt; cur_ifaddrs-&gt;ifa_name);
</span><br>
<span class="quotelev1">&gt; #endif
</span><br>
<span class="quotelev1">&gt; 		continue;
</span><br>
<span class="quotelev1">&gt; 	    }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;            /* skip interface if it is down (IFF_UP not set) */
</span><br>
<span class="quotelev1">&gt;            if(0 == (cur_ifaddrs-&gt;ifa_flags &amp; IFF_UP)) {
</span><br>
<span class="quotelev1">&gt; #if 0
</span><br>
<span class="quotelev1">&gt;                printf(&quot;skipping non-up interface %s.\n&quot;,
</span><br>
<span class="quotelev1">&gt; cur_ifaddrs-&gt;ifa_name);
</span><br>
<span class="quotelev1">&gt; #endif
</span><br>
<span class="quotelev1">&gt;                continue;
</span><br>
<span class="quotelev1">&gt;            }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;            /* skip interface if it is a loopback device (IFF_LOOPBACK
</span><br>
<span class="quotelev1">&gt; set) */
</span><br>
<span class="quotelev1">&gt;            /* or if it is a point-to-point interface */
</span><br>
<span class="quotelev1">&gt;            /* TODO: do we really skip p2p? */
</span><br>
<span class="quotelev1">&gt;            if(0 != (cur_ifaddrs-&gt;ifa_flags &amp; IFF_LOOPBACK)
</span><br>
<span class="quotelev1">&gt;                    || 0!= (cur_ifaddrs-&gt;ifa_flags &amp; IFF_POINTOPOINT)) {
</span><br>
<span class="quotelev1">&gt; #if 0
</span><br>
<span class="quotelev1">&gt;                printf(&quot;skipping loopback interface %s.\n&quot;,
</span><br>
<span class="quotelev1">&gt; cur_ifaddrs-&gt;ifa_name);
</span><br>
<span class="quotelev1">&gt; #endif
</span><br>
<span class="quotelev1">&gt;                continue;
</span><br>
<span class="quotelev1">&gt;            }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;            sin_addr = (struct sockaddr_in *) cur_ifaddrs-&gt;ifa_addr;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;            /* There shouldn't be any IPv6 address starting with fe80: to
</span><br>
<span class="quotelev1">&gt; skip */
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;            memset(&amp;intf, 0, sizeof(intf));
</span><br>
<span class="quotelev1">&gt;            OBJ_CONSTRUCT(&amp;intf, opal_list_item_t);
</span><br>
<span class="quotelev1">&gt; #if 0
</span><br>
<span class="quotelev1">&gt;            char *addr_name = (char *) malloc(48*sizeof(char));
</span><br>
<span class="quotelev1">&gt;            inet_ntop(AF_INET, &amp;in_addr-&gt;s_addr, addr_name, 48*sizeof(char));
</span><br>
<span class="quotelev1">&gt;            opal_output(0, &quot;inet capable interface %s discovered, address
</span><br>
<span class="quotelev1">&gt; %s.\n&quot;,
</span><br>
<span class="quotelev1">&gt;                    cur_ifaddrs-&gt;ifa_name, addr_name);
</span><br>
<span class="quotelev1">&gt;            free(addr_name);
</span><br>
<span class="quotelev1">&gt; #endif
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;            /* fill values into the opal_if_t */
</span><br>
<span class="quotelev1">&gt;            memcpy(&amp;a4, &amp;(sin_addr-&gt;sin_addr), sizeof(struct in_addr));
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;            strncpy(intf.if_name, cur_ifaddrs-&gt;ifa_name, IF_NAMESIZE);
</span><br>
<span class="quotelev1">&gt;            intf.if_index = opal_list_get_size(&amp;opal_if_list) + 1;
</span><br>
<span class="quotelev1">&gt;            ((struct sockaddr_in*) &amp;intf.if_addr)-&gt;sin_addr = a4;
</span><br>
<span class="quotelev1">&gt;            ((struct sockaddr_in*) &amp;intf.if_addr)-&gt;sin_family = AF_INET;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;            /* since every scope != 0 is ignored, we just set the scope to
</span><br>
<span class="quotelev1">&gt; 0 */
</span><br>
<span class="quotelev1">&gt;            /* There's no scope_id in the non-ipv6 stuff
</span><br>
<span class="quotelev1">&gt; 	    ((struct sockaddr_in6*) &amp;intf.if_addr)-&gt;sin6_scope_id = 0;
</span><br>
<span class="quotelev1">&gt; 	    */
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;            /*
</span><br>
<span class="quotelev1">&gt;             * hardcoded netmask, adrian says that's ok
</span><br>
<span class="quotelev1">&gt;             */
</span><br>
<span class="quotelev1">&gt;            intf.if_mask = 64;
</span><br>
<span class="quotelev1">&gt;            intf.if_flags = cur_ifaddrs-&gt;ifa_flags;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;            /*
</span><br>
<span class="quotelev1">&gt;             * FIXME: figure out how to gain access to the kernel index
</span><br>
<span class="quotelev1">&gt;             * (or create our own), getifaddrs() does not contain such
</span><br>
<span class="quotelev1">&gt;             * data
</span><br>
<span class="quotelev1">&gt;             */
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;            intf.if_kernel_index = (uint16_t)
</span><br>
<span class="quotelev1">&gt; if_nametoindex(cur_ifaddrs-&gt;ifa_name);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;            intf_ptr = (opal_if_t*) calloc(1, sizeof(opal_if_t));
</span><br>
<span class="quotelev1">&gt;            if(NULL == intf_ptr) {
</span><br>
<span class="quotelev1">&gt;                opal_output(0, &quot;opal_ifinit: unable to allocate %lu bytes\n&quot;,
</span><br>
<span class="quotelev1">&gt;                            sizeof(opal_if_t));
</span><br>
<span class="quotelev1">&gt;                OBJ_DESTRUCT(&amp;intf);
</span><br>
<span class="quotelev1">&gt;                return OPAL_ERR_OUT_OF_RESOURCE;
</span><br>
<span class="quotelev1">&gt;            }
</span><br>
<span class="quotelev1">&gt;            memcpy(intf_ptr, &amp;intf, sizeof(intf));
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;            printf(&quot;About to append interface %s.\n&quot;, cur_ifaddrs-&gt;ifa_name);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;            opal_list_append(&amp;opal_if_list, (opal_list_item_t*) intf_ptr);
</span><br>
<span class="quotelev1">&gt;            OBJ_DESTRUCT(&amp;intf);
</span><br>
<span class="quotelev1">&gt;        }   /*  of for loop over ifaddrs list */
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    }
</span><br>
<span class="quotelev1">&gt; #endif  /* netbsd */
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; What I get when I try to do an   mpirun -n 4 hello_f77 is  now
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; About to append interface wm0.
</span><br>
<span class="quotelev1">&gt; [europa:27981] *** Process received signal ***
</span><br>
<span class="quotelev1">&gt; [europa:27981] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev1">&gt; [europa:27981] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev1">&gt; [europa:27981] Failing at address: 0x8
</span><br>
<span class="quotelev1">&gt; [europa:27981] *** End of error message ***
</span><br>
<span class="quotelev1">&gt; Segmentation fault
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; So I am not tripping up on the iotctls anymore !
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Maybe that will shed some light for someone else.
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
<li><strong>Next message:</strong> <a href="11386.php">Ralph Castain: "Re: [OMPI users] MPI_Comm_spawn lots of times"</a>
<li><strong>Previous message:</strong> <a href="11384.php">Kevin.Buckley_at_[hidden]: "Re: [OMPI users] Pointers for understanding failure messages on NetBSD"</a>
<li><strong>In reply to:</strong> <a href="11384.php">Kevin.Buckley_at_[hidden]: "Re: [OMPI users] Pointers for understanding failure messages on NetBSD"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11387.php">Kevin.Buckley_at_[hidden]: "Re: [OMPI users] Pointers for understanding failure messages on NetBSD"</a>
<li><strong>Reply:</strong> <a href="11387.php">Kevin.Buckley_at_[hidden]: "Re: [OMPI users] Pointers for understanding failure messages on NetBSD"</a>
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

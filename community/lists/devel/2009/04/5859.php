<?
$subject_val = "Re: [OMPI devel] Patch to resolve valgrind warnings for 1.3.2";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Apr 23 14:53:20 2009" -->
<!-- isoreceived="20090423185320" -->
<!-- sent="Thu, 23 Apr 2009 14:52:48 -0400" -->
<!-- isosent="20090423185248" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Patch to resolve valgrind warnings for 1.3.2" -->
<!-- id="BFB97E8B-617F-442D-BADB-9038CE314F0C_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="49F08B03.5030909_at_ntlworld.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Patch to resolve valgrind warnings for 1.3.2<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-04-23 14:52:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5860.php">doriankrause: "[OMPI devel] size of items in mca_osc_pt2pt_component.p2p_c_buffers"</a>
<li><strong>Previous message:</strong> <a href="5858.php">Number Cruncher: "[OMPI devel] Patch to resolve valgrind warnings for 1.3.2"</a>
<li><strong>In reply to:</strong> <a href="5858.php">Number Cruncher: "[OMPI devel] Patch to resolve valgrind warnings for 1.3.2"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Done; thanks!
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="https://svn.open-mpi.org/trac/ompi/changeset/21060">https://svn.open-mpi.org/trac/ompi/changeset/21060</a>
<br>
<p>(I added in a few more memset's and calloc's elsewhere in if.c, just  
<br>
to be complete)
<br>
<p><p><p><p>On Apr 23, 2009, at 11:36 AM, Number Cruncher wrote:
<br>
<p><span class="quotelev1">&gt; Although --enable-mem-debug resolves the issue, I get warnings about
</span><br>
<span class="quotelev1">&gt; uninitialized bytes in writev from the opal_if_t structs in  
</span><br>
<span class="quotelev1">&gt; opal_ifinit:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ==25777== Syscall param writev(vector[...]) points to uninitialised  
</span><br>
<span class="quotelev1">&gt; byte(s)
</span><br>
<span class="quotelev1">&gt; ==25777==    at 0x34DE2C9F0C: writev (in /lib64/libc-2.6.so)
</span><br>
<span class="quotelev1">&gt; ==25777==    by 0xAC233B: mca_oob_tcp_msg_send_handler  
</span><br>
<span class="quotelev1">&gt; (oob_tcp_msg.c:265)
</span><br>
<span class="quotelev1">&gt; ==25777==    by 0xABAC92: mca_oob_tcp_peer_send (oob_tcp_peer.c:197)
</span><br>
<span class="quotelev1">&gt; ==25777==    by 0xAC0A80: mca_oob_tcp_send_nb (oob_tcp_send.c:167)
</span><br>
<span class="quotelev1">&gt; ==25777==    by 0xAD025E: orte_rml_oob_send (rml_oob_send.c:137)
</span><br>
<span class="quotelev1">&gt; ==25777==    by 0xAD0CE3: orte_rml_oob_send_buffer (rml_oob_send.c: 
</span><br>
<span class="quotelev1">&gt; 269)
</span><br>
<span class="quotelev1">&gt; ==25777==    by 0xAA50A6: allgather (grpcomm_bad_module.c:370)
</span><br>
<span class="quotelev1">&gt; ==25777==    by 0xAA592D: modex (grpcomm_bad_module.c:498)
</span><br>
<span class="quotelev1">&gt; ==25777==    by 0x92EE48: ompi_mpi_init (ompi_mpi_init.c:626)
</span><br>
<span class="quotelev1">&gt; ==25777==    by 0x95351C: PMPI_Init (pinit.c:80)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Since this isn't a performance critical part of Open MPI, why not  
</span><br>
<span class="quotelev1">&gt; follow
</span><br>
<span class="quotelev1">&gt; the reasoning already noted in a comment at opal/util/if.c:208 and
</span><br>
<span class="quotelev1">&gt; zero-out the struct even outside OMPI_ENABLE_MEM_DEBUG.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The attached patch makes this one-line change and clears up all  
</span><br>
<span class="quotelev1">&gt; valgrind
</span><br>
<span class="quotelev1">&gt; warnings (when --with-valgrind enabled).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; Simon
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; diff -r -U 5 openmpi-1.3.2/opal/util/if.c openmpi-1.3.2.edited/opal/ 
</span><br>
<span class="quotelev1">&gt; util/if.c
</span><br>
<span class="quotelev1">&gt; --- openmpi-1.3.2/opal/util/if.c	2009-04-16 20:02:42.000000000 +0100
</span><br>
<span class="quotelev1">&gt; +++ openmpi-1.3.2.edited/opal/util/if.c	2009-04-23  
</span><br>
<span class="quotelev1">&gt; 16:18:09.000000000 +0100
</span><br>
<span class="quotelev1">&gt; @@ -258,11 +258,12 @@
</span><br>
<span class="quotelev1">&gt;         struct ifreq* ifr = (struct ifreq*) ptr;
</span><br>
<span class="quotelev1">&gt;         opal_if_t intf;
</span><br>
<span class="quotelev1">&gt;         opal_if_t *intf_ptr;
</span><br>
<span class="quotelev1">&gt;         int length;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -        OMPI_DEBUG_ZERO(intf);
</span><br>
<span class="quotelev1">&gt; +        /* Again, make valgrind and purify happy - this isn't  
</span><br>
<span class="quotelev1">&gt; performance critical. */
</span><br>
<span class="quotelev1">&gt; +        memset(&amp;intf, 0, sizeof(intf));
</span><br>
<span class="quotelev1">&gt;         OBJ_CONSTRUCT(&amp;intf, opal_list_item_t);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         /* compute offset for entries */
</span><br>
<span class="quotelev1">&gt; #ifdef HAVE_STRUCT_SOCKADDR_SA_LEN
</span><br>
<span class="quotelev1">&gt;         length = sizeof(struct sockaddr);
</span><br>
<span class="quotelev1">&gt; &lt;ATT4832482.txt&gt;
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
<li><strong>Next message:</strong> <a href="5860.php">doriankrause: "[OMPI devel] size of items in mca_osc_pt2pt_component.p2p_c_buffers"</a>
<li><strong>Previous message:</strong> <a href="5858.php">Number Cruncher: "[OMPI devel] Patch to resolve valgrind warnings for 1.3.2"</a>
<li><strong>In reply to:</strong> <a href="5858.php">Number Cruncher: "[OMPI devel] Patch to resolve valgrind warnings for 1.3.2"</a>
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

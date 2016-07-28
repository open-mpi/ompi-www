<?
$subject_val = "[OMPI devel] Patch to resolve valgrind warnings for 1.3.2";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Apr 23 11:36:40 2009" -->
<!-- isoreceived="20090423153640" -->
<!-- sent="Thu, 23 Apr 2009 16:36:35 +0100" -->
<!-- isosent="20090423153635" -->
<!-- name="Number Cruncher" -->
<!-- email="number.cruncher_at_[hidden]" -->
<!-- subject="[OMPI devel] Patch to resolve valgrind warnings for 1.3.2" -->
<!-- id="49F08B03.5030909_at_ntlworld.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI devel] Patch to resolve valgrind warnings for 1.3.2<br>
<strong>From:</strong> Number Cruncher (<em>number.cruncher_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-04-23 11:36:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5859.php">Jeff Squyres: "Re: [OMPI devel] Patch to resolve valgrind warnings for 1.3.2"</a>
<li><strong>Previous message:</strong> <a href="5857.php">Jeff Squyres: "Re: [OMPI devel] MTT GAE/GDS call this morning"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5859.php">Jeff Squyres: "Re: [OMPI devel] Patch to resolve valgrind warnings for 1.3.2"</a>
<li><strong>Reply:</strong> <a href="5859.php">Jeff Squyres: "Re: [OMPI devel] Patch to resolve valgrind warnings for 1.3.2"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Although --enable-mem-debug resolves the issue, I get warnings about 
<br>
uninitialized bytes in writev from the opal_if_t structs in opal_ifinit:
<br>
<p>==25777== Syscall param writev(vector[...]) points to uninitialised byte(s)
<br>
==25777==    at 0x34DE2C9F0C: writev (in /lib64/libc-2.6.so)
<br>
==25777==    by 0xAC233B: mca_oob_tcp_msg_send_handler (oob_tcp_msg.c:265)
<br>
==25777==    by 0xABAC92: mca_oob_tcp_peer_send (oob_tcp_peer.c:197)
<br>
==25777==    by 0xAC0A80: mca_oob_tcp_send_nb (oob_tcp_send.c:167)
<br>
==25777==    by 0xAD025E: orte_rml_oob_send (rml_oob_send.c:137)
<br>
==25777==    by 0xAD0CE3: orte_rml_oob_send_buffer (rml_oob_send.c:269)
<br>
==25777==    by 0xAA50A6: allgather (grpcomm_bad_module.c:370)
<br>
==25777==    by 0xAA592D: modex (grpcomm_bad_module.c:498)
<br>
==25777==    by 0x92EE48: ompi_mpi_init (ompi_mpi_init.c:626)
<br>
==25777==    by 0x95351C: PMPI_Init (pinit.c:80)
<br>
<p>Since this isn't a performance critical part of Open MPI, why not follow 
<br>
the reasoning already noted in a comment at opal/util/if.c:208 and 
<br>
zero-out the struct even outside OMPI_ENABLE_MEM_DEBUG.
<br>
<p>The attached patch makes this one-line change and clears up all valgrind 
<br>
warnings (when --with-valgrind enabled).
<br>
<p>Regards,
<br>
Simon
<br>
<p><p>
<br><hr>
<ul>
<li>text/x-patch attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-5858/openmpi-if.c.patch">openmpi-if.c.patch</a>
</ul>
<!-- attachment="openmpi-if.c.patch" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5859.php">Jeff Squyres: "Re: [OMPI devel] Patch to resolve valgrind warnings for 1.3.2"</a>
<li><strong>Previous message:</strong> <a href="5857.php">Jeff Squyres: "Re: [OMPI devel] MTT GAE/GDS call this morning"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5859.php">Jeff Squyres: "Re: [OMPI devel] Patch to resolve valgrind warnings for 1.3.2"</a>
<li><strong>Reply:</strong> <a href="5859.php">Jeff Squyres: "Re: [OMPI devel] Patch to resolve valgrind warnings for 1.3.2"</a>
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

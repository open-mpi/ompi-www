<?
$subject_val = "Re: [OMPI devel] v1.5 r25914 DOA";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Feb 21 19:37:53 2012" -->
<!-- isoreceived="20120222003753" -->
<!-- sent="Tue, 21 Feb 2012 16:37:39 -0800" -->
<!-- isosent="20120222003739" -->
<!-- name="Paul H. Hargrove" -->
<!-- email="PHHargrove_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] v1.5 r25914 DOA" -->
<!-- id="4F4438D3.5050802_at_lbl.gov" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4F4434E1.2040602_at_oracle.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] v1.5 r25914 DOA<br>
<strong>From:</strong> Paul H. Hargrove (<em>PHHargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-02-21 19:37:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10551.php">Paul H. Hargrove: "Re: [OMPI devel] v1.5 build failure w/ Solaris Studio 12.2 on Linux"</a>
<li><strong>Previous message:</strong> <a href="10549.php">Jeffrey Squyres: "Re: [OMPI devel] v1.5 r25914 DOA"</a>
<li><strong>In reply to:</strong> <a href="10548.php">Eugene Loh: "[OMPI devel] v1.5 r25914 DOA"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10552.php">Paul H. Hargrove: "Re: [OMPI devel] v1.5 r25914 DOA"</a>
<li><strong>Reply:</strong> <a href="10552.php">Paul H. Hargrove: "Re: [OMPI devel] v1.5 r25914 DOA"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I have been testing v1.5 with slightly older Intel 
<br>
&quot;composerxe-2011.5.220&quot; compilers.
<br>
I see a &quot;make check&quot; failure in opal_datatype_test which is not present 
<br>
with any other compiler (such as gcc on the same node).
<br>
This has been seen most recently on the 1.5.5rc2r25990 tarball generated 
<br>
earlier today.
<br>
With &quot;make check -k&quot; I can confirm that opal_datatype_test is the ONLY 
<br>
failure I see with this compiler.
<br>
So, I have just assumed this was a buggy compiler and thought nothing 
<br>
more of it.
<br>
<p>I have not yet tested them, but also have the same 
<br>
&quot;composer_xe_2011_sp1.7.256&quot; compiler and a more recent 
<br>
&quot;composer_xe_2011_sp1.8.273&quot;.  I will test both ASAP and report back 
<br>
with my findings.
<br>
<p>-Paul
<br>
<p><p>On 2/21/2012 4:20 PM, Eugene Loh wrote:
<br>
<span class="quotelev1">&gt; We have some amount of MTT testing going on every night and on ONE of 
</span><br>
<span class="quotelev1">&gt; our systems v1.5 has been dead since r25914.  The system is
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Linux burl-ct-v20z-10 2.6.9-67.ELsmp #1 SMP Wed Nov 7 13:56:44 EST 
</span><br>
<span class="quotelev1">&gt; 2007 x86_64 x86_64 x86_64 GNU/Linux
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; and I'm encountering the problem with Intel 
</span><br>
<span class="quotelev1">&gt; (composer_xe_2011_sp1.7.256) compilers.  I haven't poked around enough 
</span><br>
<span class="quotelev1">&gt; yet to figure out what the problematic characteristic of this 
</span><br>
<span class="quotelev1">&gt; configuration is.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In r25914, orte/mca/odls/base/odls_base_open.c, we get
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     222     /* get the number of local sockets unless we were given a 
</span><br>
<span class="quotelev1">&gt; number */
</span><br>
<span class="quotelev1">&gt;     223     if (0 == orte_default_num_sockets_per_board) {
</span><br>
<span class="quotelev1">&gt;     224         
</span><br>
<span class="quotelev1">&gt; opal_paffinity_base_get_socket_info(&amp;orte_odls_globals.num_sockets);
</span><br>
<span class="quotelev1">&gt;     225     }
</span><br>
<span class="quotelev1">&gt;     226     /* get the number of local processors */
</span><br>
<span class="quotelev1">&gt;     227     
</span><br>
<span class="quotelev1">&gt; opal_paffinity_base_get_processor_info(&amp;orte_odls_globals.num_processors);
</span><br>
<span class="quotelev1">&gt;     228     /* compute the base number of cores/socket, if not given */
</span><br>
<span class="quotelev1">&gt;     229     if (0 == orte_default_num_cores_per_socket) {
</span><br>
<span class="quotelev1">&gt;     230         orte_odls_globals.num_cores_per_socket = 
</span><br>
<span class="quotelev1">&gt; orte_odls_globals.num_processors / orte_odls_globals.num_sockets;
</span><br>
<span class="quotelev1">&gt;     231     }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Well, we execute the branch at line 224, but num_sockets remains 0.  
</span><br>
<span class="quotelev1">&gt; This leads to the divide-by-0 at line 230.  Digging deeper, the call 
</span><br>
<span class="quotelev1">&gt; at line 224 led us to 
</span><br>
<span class="quotelev1">&gt; opal/mca/paffinity/hwloc/paffinity_hwloc_module.c (lots of stuff left 
</span><br>
<span class="quotelev1">&gt; out):
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; static int module_get_socket_info(int *num_sockets) {
</span><br>
<span class="quotelev1">&gt;     hwloc_topology_t *t = &amp;opal_hwloc_topology;
</span><br>
<span class="quotelev1">&gt;     *num_sockets = (int) hwloc_get_nbobjs_by_type(*t, HWLOC_OBJ_SOCKET);
</span><br>
<span class="quotelev1">&gt;     return OPAL_SUCCESS;
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Anyhow, SOCKET is somehow an unknown layer, so num_sockets is 
</span><br>
<span class="quotelev1">&gt; returning 0.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I can poke around more, but does someone want to advise?
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p><pre>
-- 
Paul H. Hargrove                          PHHargrove_at_[hidden]
Future Technologies Group
HPC Research Department                   Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10551.php">Paul H. Hargrove: "Re: [OMPI devel] v1.5 build failure w/ Solaris Studio 12.2 on Linux"</a>
<li><strong>Previous message:</strong> <a href="10549.php">Jeffrey Squyres: "Re: [OMPI devel] v1.5 r25914 DOA"</a>
<li><strong>In reply to:</strong> <a href="10548.php">Eugene Loh: "[OMPI devel] v1.5 r25914 DOA"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10552.php">Paul H. Hargrove: "Re: [OMPI devel] v1.5 r25914 DOA"</a>
<li><strong>Reply:</strong> <a href="10552.php">Paul H. Hargrove: "Re: [OMPI devel] v1.5 r25914 DOA"</a>
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

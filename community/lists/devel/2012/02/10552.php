<?
$subject_val = "Re: [OMPI devel] v1.5 r25914 DOA";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Feb 21 20:40:49 2012" -->
<!-- isoreceived="20120222014049" -->
<!-- sent="Tue, 21 Feb 2012 17:40:35 -0800" -->
<!-- isosent="20120222014035" -->
<!-- name="Paul H. Hargrove" -->
<!-- email="PHHargrove_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] v1.5 r25914 DOA" -->
<!-- id="4F444793.20209_at_lbl.gov" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4F4438D3.5050802_at_lbl.gov" -->
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
<strong>Date:</strong> 2012-02-21 20:40:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10553.php">Paul H. Hargrove: "Re: [OMPI devel] v1.5 r25914 DOA"</a>
<li><strong>Previous message:</strong> <a href="10551.php">Paul H. Hargrove: "Re: [OMPI devel] v1.5 build failure w/ Solaris Studio 12.2 on Linux"</a>
<li><strong>In reply to:</strong> <a href="10550.php">Paul H. Hargrove: "Re: [OMPI devel] v1.5 r25914 DOA"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10553.php">Paul H. Hargrove: "Re: [OMPI devel] v1.5 r25914 DOA"</a>
<li><strong>Reply:</strong> <a href="10553.php">Paul H. Hargrove: "Re: [OMPI devel] v1.5 r25914 DOA"</a>
<li><strong>Reply:</strong> <a href="10555.php">Eugene Loh: "Re: [OMPI devel] v1.5 r25914 DOA"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Here are the first of the results of the testing I promised.
<br>
I am not 100% sure how to reach the code that Eugene reported as 
<br>
problematic, so I tried just running the ring test with various 
<br>
-bind-to-* options.   I am quite willing to run additional test cases.  
<br>
All runs are w/ OMPI_MCA_btl=sm,self.
<br>
<p>+ 2011.5.220
<br>
&nbsp;&nbsp;&nbsp;FAIL: &quot;make check&quot; fails opal_datatype_test
<br>
&nbsp;&nbsp;&nbsp;OK: mpirun -np 2 ./ring_c
<br>
&nbsp;&nbsp;&nbsp;OK: mpirun -np 2 -bind-to-none ./ring_c
<br>
&nbsp;&nbsp;&nbsp;OK: mpirun -np 2 -bind-to-core ./ring_c
<br>
&nbsp;&nbsp;&nbsp;OK: mpirun -np 2 -bind-to-socket ./ring_c
<br>
<p>+ 2011_sp1.7.256
<br>
&nbsp;&nbsp;&nbsp;OK: &quot;make check&quot;
<br>
&nbsp;&nbsp;&nbsp;OK: mpirun -np 2 -bind-to-none ./ring_c
<br>
&nbsp;&nbsp;&nbsp;OK: mpirun -np 2 -bind-to-core ./ring_c
<br>
&nbsp;&nbsp;&nbsp;OK: mpirun -np 2 -bind-to-socket ./ring_c
<br>
<p>So, I don't think the &quot;2011_sp1.7.256&quot; compilers are broken (and are 
<br>
&quot;better&quot; than the ones I've been using).
<br>
I have a build with &quot;2011_sp1.8.273&quot; churning away right now (est. 
<br>
45minutes to complete - should have disabled the Fortan bindings)
<br>
<p>If there is something other than the -bind-to-* flags I should be using 
<br>
to reach the problematic code, let me know.
<br>
But based on what I've seen so far, I think we can probably rule out the 
<br>
compiler as the problem.
<br>
<p>-Paul
<br>
<p><p>On 2/21/2012 4:37 PM, Paul H. Hargrove wrote:
<br>
<span class="quotelev1">&gt; I have been testing v1.5 with slightly older Intel 
</span><br>
<span class="quotelev1">&gt; &quot;composerxe-2011.5.220&quot; compilers.
</span><br>
<span class="quotelev1">&gt; I see a &quot;make check&quot; failure in opal_datatype_test which is not 
</span><br>
<span class="quotelev1">&gt; present with any other compiler (such as gcc on the same node).
</span><br>
<span class="quotelev1">&gt; This has been seen most recently on the 1.5.5rc2r25990 tarball 
</span><br>
<span class="quotelev1">&gt; generated earlier today.
</span><br>
<span class="quotelev1">&gt; With &quot;make check -k&quot; I can confirm that opal_datatype_test is the ONLY 
</span><br>
<span class="quotelev1">&gt; failure I see with this compiler.
</span><br>
<span class="quotelev1">&gt; So, I have just assumed this was a buggy compiler and thought nothing 
</span><br>
<span class="quotelev1">&gt; more of it.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have not yet tested them, but also have the same 
</span><br>
<span class="quotelev1">&gt; &quot;composer_xe_2011_sp1.7.256&quot; compiler and a more recent 
</span><br>
<span class="quotelev1">&gt; &quot;composer_xe_2011_sp1.8.273&quot;.  I will test both ASAP and report back 
</span><br>
<span class="quotelev1">&gt; with my findings.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Paul
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 2/21/2012 4:20 PM, Eugene Loh wrote:
</span><br>
<span class="quotelev2">&gt;&gt; We have some amount of MTT testing going on every night and on ONE of 
</span><br>
<span class="quotelev2">&gt;&gt; our systems v1.5 has been dead since r25914.  The system is
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Linux burl-ct-v20z-10 2.6.9-67.ELsmp #1 SMP Wed Nov 7 13:56:44 EST 
</span><br>
<span class="quotelev2">&gt;&gt; 2007 x86_64 x86_64 x86_64 GNU/Linux
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; and I'm encountering the problem with Intel 
</span><br>
<span class="quotelev2">&gt;&gt; (composer_xe_2011_sp1.7.256) compilers.  I haven't poked around 
</span><br>
<span class="quotelev2">&gt;&gt; enough yet to figure out what the problematic characteristic of this 
</span><br>
<span class="quotelev2">&gt;&gt; configuration is.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; In r25914, orte/mca/odls/base/odls_base_open.c, we get
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     222     /* get the number of local sockets unless we were given a 
</span><br>
<span class="quotelev2">&gt;&gt; number */
</span><br>
<span class="quotelev2">&gt;&gt;     223     if (0 == orte_default_num_sockets_per_board) {
</span><br>
<span class="quotelev2">&gt;&gt;     224         
</span><br>
<span class="quotelev2">&gt;&gt; opal_paffinity_base_get_socket_info(&amp;orte_odls_globals.num_sockets);
</span><br>
<span class="quotelev2">&gt;&gt;     225     }
</span><br>
<span class="quotelev2">&gt;&gt;     226     /* get the number of local processors */
</span><br>
<span class="quotelev2">&gt;&gt;     227     
</span><br>
<span class="quotelev2">&gt;&gt; opal_paffinity_base_get_processor_info(&amp;orte_odls_globals.num_processors);
</span><br>
<span class="quotelev2">&gt;&gt;     228     /* compute the base number of cores/socket, if not given */
</span><br>
<span class="quotelev2">&gt;&gt;     229     if (0 == orte_default_num_cores_per_socket) {
</span><br>
<span class="quotelev2">&gt;&gt;     230         orte_odls_globals.num_cores_per_socket = 
</span><br>
<span class="quotelev2">&gt;&gt; orte_odls_globals.num_processors / orte_odls_globals.num_sockets;
</span><br>
<span class="quotelev2">&gt;&gt;     231     }
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Well, we execute the branch at line 224, but num_sockets remains 0.  
</span><br>
<span class="quotelev2">&gt;&gt; This leads to the divide-by-0 at line 230.  Digging deeper, the call 
</span><br>
<span class="quotelev2">&gt;&gt; at line 224 led us to 
</span><br>
<span class="quotelev2">&gt;&gt; opal/mca/paffinity/hwloc/paffinity_hwloc_module.c (lots of stuff left 
</span><br>
<span class="quotelev2">&gt;&gt; out):
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; static int module_get_socket_info(int *num_sockets) {
</span><br>
<span class="quotelev2">&gt;&gt;     hwloc_topology_t *t = &amp;opal_hwloc_topology;
</span><br>
<span class="quotelev2">&gt;&gt;     *num_sockets = (int) hwloc_get_nbobjs_by_type(*t, HWLOC_OBJ_SOCKET);
</span><br>
<span class="quotelev2">&gt;&gt;     return OPAL_SUCCESS;
</span><br>
<span class="quotelev2">&gt;&gt; }
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Anyhow, SOCKET is somehow an unknown layer, so num_sockets is 
</span><br>
<span class="quotelev2">&gt;&gt; returning 0.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I can poke around more, but does someone want to advise?
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
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
<li><strong>Next message:</strong> <a href="10553.php">Paul H. Hargrove: "Re: [OMPI devel] v1.5 r25914 DOA"</a>
<li><strong>Previous message:</strong> <a href="10551.php">Paul H. Hargrove: "Re: [OMPI devel] v1.5 build failure w/ Solaris Studio 12.2 on Linux"</a>
<li><strong>In reply to:</strong> <a href="10550.php">Paul H. Hargrove: "Re: [OMPI devel] v1.5 r25914 DOA"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10553.php">Paul H. Hargrove: "Re: [OMPI devel] v1.5 r25914 DOA"</a>
<li><strong>Reply:</strong> <a href="10553.php">Paul H. Hargrove: "Re: [OMPI devel] v1.5 r25914 DOA"</a>
<li><strong>Reply:</strong> <a href="10555.php">Eugene Loh: "Re: [OMPI devel] v1.5 r25914 DOA"</a>
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

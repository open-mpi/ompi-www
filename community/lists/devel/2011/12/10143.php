<?
$subject_val = "Re: [OMPI devel] Totalview broken with 1.5/trunk";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Dec 15 15:33:33 2011" -->
<!-- isoreceived="20111215203333" -->
<!-- sent="Thu, 15 Dec 2011 15:33:28 -0500" -->
<!-- isosent="20111215203328" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Totalview broken with 1.5/trunk" -->
<!-- id="15A171A1-1B9C-44AF-882A-F164CEC067DB_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="alpine.OSX.2.00.1112151329270.9108_at_panthera.lanl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Totalview broken with 1.5/trunk<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-12-15 15:33:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10144.php">Ashley Pittman: "Re: [OMPI devel] 1.5.5rc1 is out"</a>
<li><strong>Previous message:</strong> <a href="10142.php">Nathan Hjelm: "Re: [OMPI devel] Totalview broken with 1.5/trunk"</a>
<li><strong>In reply to:</strong> <a href="10142.php">Nathan Hjelm: "Re: [OMPI devel] Totalview broken with 1.5/trunk"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10125.php">George Bosilca: "Re: [OMPI devel] Totalview broken with 1.5/trunk"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Right -- the symbol isn't declared in orterun.  It's in libopen-rte.so.
<br>
<p>My changes ensure that the .o file that MPIR_Breakpoint is defined in will be pulled in by the linker to be in the mpirun process.
<br>
<p><p>On Dec 15, 2011, at 3:30 PM, Nathan Hjelm wrote:
<br>
<p><span class="quotelev1">&gt; Your changes don't break anything but they also don't cause MPIR_Breakpoint to appear in orterun:
</span><br>
<span class="quotelev1">&gt; ct-login1:/scratch2/hjelmn hjelmn$ nm `type -p orterun` | grep MPIR
</span><br>
<span class="quotelev1">&gt; 000000000060b0e0 B MPIR_attach_fifo
</span><br>
<span class="quotelev1">&gt; 000000000060b2e0 B MPIR_being_debugged
</span><br>
<span class="quotelev1">&gt; 000000000060b7b0 B MPIR_debug_state
</span><br>
<span class="quotelev1">&gt; 000000000060ada0 B MPIR_executable_path
</span><br>
<span class="quotelev1">&gt; 000000000060b840 B MPIR_force_to_main
</span><br>
<span class="quotelev1">&gt; 000000000060b7b4 B MPIR_forward_comm
</span><br>
<span class="quotelev1">&gt; 000000000060b8c8 B MPIR_forward_output
</span><br>
<span class="quotelev1">&gt; 000000000060b9fc B MPIR_i_am_starter
</span><br>
<span class="quotelev1">&gt; 000000000060afe0 B MPIR_partial_attach_ok
</span><br>
<span class="quotelev1">&gt; 000000000060b8c0 B MPIR_proctable
</span><br>
<span class="quotelev1">&gt; 000000000060b9f8 B MPIR_proctable_size
</span><br>
<span class="quotelev1">&gt; 000000000060b300 B MPIR_server_arguments
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -Nathan
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Thu, 15 Dec 2011, Jeff Squyres wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Ok, here's what I did:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; <a href="https://svn.open-mpi.org/trac/ompi/changeset/25660">https://svn.open-mpi.org/trac/ompi/changeset/25660</a>
</span><br>
<span class="quotelev2">&gt;&gt; --&gt; pulls in symbols like MPIR_Breakpoint via a different dummy function
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; <a href="https://svn.open-mpi.org/trac/ompi/changeset/25661">https://svn.open-mpi.org/trac/ompi/changeset/25661</a>
</span><br>
<span class="quotelev2">&gt;&gt; --&gt; Fixes the ORTE_DECLSPEC typos that George found
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; LANL: Can you verify that this (still) works for you with totalview and stat?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Dec 15, 2011, at 1:35 PM, Jeff Squyres wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Dec 15, 2011, at 10:28 AM, Ralph Castain wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I have had the chance now to test it with totalview and stat 1.1.0. Looks good. I pushed the fix to the trunk and it will need to be CMRed to 1.5.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Ralph and I just talked about this on the phone some more -- I don't think <a href="https://svn.open-mpi.org/trac/ompi/changeset/25654">https://svn.open-mpi.org/trac/ompi/changeset/25654</a> was the right fix.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; We still need to ensure that all the symbols in orte/debugger/base/debugger_base_fns.o are pulled in from shared libraries at run-time.  Totalview may well have gotten confused if we used the actual MPIR_Breakpoint symbol to pull it in (i.e., it actually broke right there, rather than when we actually invoked MPIR_Breakpoint, later).
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; A better way might be to use another dummy function to pull in all the symbols from that .o file.  I.e., instead of doing foo=MPIR_Breakpoint, call some other dummy function that lives in debugger_base_fns.c.  It's only purpose in life would be to ensure that all the symbols -- including MPIR_Breakpoint -- are pulled in at run time.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I'll go do that on the trunk right now...
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev3">&gt;&gt;&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; For corporate legal information go to:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt;&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; For corporate legal information go to:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
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
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10144.php">Ashley Pittman: "Re: [OMPI devel] 1.5.5rc1 is out"</a>
<li><strong>Previous message:</strong> <a href="10142.php">Nathan Hjelm: "Re: [OMPI devel] Totalview broken with 1.5/trunk"</a>
<li><strong>In reply to:</strong> <a href="10142.php">Nathan Hjelm: "Re: [OMPI devel] Totalview broken with 1.5/trunk"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10125.php">George Bosilca: "Re: [OMPI devel] Totalview broken with 1.5/trunk"</a>
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

<?
$subject_val = "Re: [OMPI devel] Totalview broken with 1.5/trunk";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Dec 15 15:30:15 2011" -->
<!-- isoreceived="20111215203015" -->
<!-- sent="Thu, 15 Dec 2011 13:30:10 -0700 (MST)" -->
<!-- isosent="20111215203010" -->
<!-- name="Nathan Hjelm" -->
<!-- email="hjelmn_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Totalview broken with 1.5/trunk" -->
<!-- id="alpine.OSX.2.00.1112151329270.9108_at_panthera.lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="78618A8C-2DA6-43FC-8954-91FB934C6D0A_at_cisco.com" -->
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
<strong>From:</strong> Nathan Hjelm (<em>hjelmn_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-12-15 15:30:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10143.php">Jeff Squyres: "Re: [OMPI devel] Totalview broken with 1.5/trunk"</a>
<li><strong>Previous message:</strong> <a href="10141.php">Ashley Pittman: "Re: [OMPI devel] 1.5.5rc1 is out"</a>
<li><strong>In reply to:</strong> <a href="10137.php">Jeff Squyres: "Re: [OMPI devel] Totalview broken with 1.5/trunk"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10143.php">Jeff Squyres: "Re: [OMPI devel] Totalview broken with 1.5/trunk"</a>
<li><strong>Reply:</strong> <a href="10143.php">Jeff Squyres: "Re: [OMPI devel] Totalview broken with 1.5/trunk"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Your changes don't break anything but they also don't cause MPIR_Breakpoint to appear in orterun:
<br>
ct-login1:/scratch2/hjelmn hjelmn$ nm `type -p orterun` | grep MPIR
<br>
000000000060b0e0 B MPIR_attach_fifo
<br>
000000000060b2e0 B MPIR_being_debugged
<br>
000000000060b7b0 B MPIR_debug_state
<br>
000000000060ada0 B MPIR_executable_path
<br>
000000000060b840 B MPIR_force_to_main
<br>
000000000060b7b4 B MPIR_forward_comm
<br>
000000000060b8c8 B MPIR_forward_output
<br>
000000000060b9fc B MPIR_i_am_starter
<br>
000000000060afe0 B MPIR_partial_attach_ok
<br>
000000000060b8c0 B MPIR_proctable
<br>
000000000060b9f8 B MPIR_proctable_size
<br>
000000000060b300 B MPIR_server_arguments
<br>
<p>-Nathan
<br>
<p>On Thu, 15 Dec 2011, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; Ok, here's what I did:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; <a href="https://svn.open-mpi.org/trac/ompi/changeset/25660">https://svn.open-mpi.org/trac/ompi/changeset/25660</a>
</span><br>
<span class="quotelev1">&gt; --&gt; pulls in symbols like MPIR_Breakpoint via a different dummy function
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; <a href="https://svn.open-mpi.org/trac/ompi/changeset/25661">https://svn.open-mpi.org/trac/ompi/changeset/25661</a>
</span><br>
<span class="quotelev1">&gt; --&gt; Fixes the ORTE_DECLSPEC typos that George found
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; LANL: Can you verify that this (still) works for you with totalview and stat?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Dec 15, 2011, at 1:35 PM, Jeff Squyres wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Dec 15, 2011, at 10:28 AM, Ralph Castain wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I have had the chance now to test it with totalview and stat 1.1.0. Looks good. I pushed the fix to the trunk and it will need to be CMRed to 1.5.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Ralph and I just talked about this on the phone some more -- I don't think <a href="https://svn.open-mpi.org/trac/ompi/changeset/25654">https://svn.open-mpi.org/trac/ompi/changeset/25654</a> was the right fix.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; We still need to ensure that all the symbols in orte/debugger/base/debugger_base_fns.o are pulled in from shared libraries at run-time.  Totalview may well have gotten confused if we used the actual MPIR_Breakpoint symbol to pull it in (i.e., it actually broke right there, rather than when we actually invoked MPIR_Breakpoint, later).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; A better way might be to use another dummy function to pull in all the symbols from that .o file.  I.e., instead of doing foo=MPIR_Breakpoint, call some other dummy function that lives in debugger_base_fns.c.  It's only purpose in life would be to ensure that all the symbols -- including MPIR_Breakpoint -- are pulled in at run time.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I'll go do that on the trunk right now...
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10143.php">Jeff Squyres: "Re: [OMPI devel] Totalview broken with 1.5/trunk"</a>
<li><strong>Previous message:</strong> <a href="10141.php">Ashley Pittman: "Re: [OMPI devel] 1.5.5rc1 is out"</a>
<li><strong>In reply to:</strong> <a href="10137.php">Jeff Squyres: "Re: [OMPI devel] Totalview broken with 1.5/trunk"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10143.php">Jeff Squyres: "Re: [OMPI devel] Totalview broken with 1.5/trunk"</a>
<li><strong>Reply:</strong> <a href="10143.php">Jeff Squyres: "Re: [OMPI devel] Totalview broken with 1.5/trunk"</a>
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

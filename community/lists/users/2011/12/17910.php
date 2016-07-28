<?
$subject_val = "Re: [OMPI users] orte_ess_base_select failed";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec  7 14:51:16 2011" -->
<!-- isoreceived="20111207195116" -->
<!-- sent="Wed, 7 Dec 2011 19:50:33 +0000" -->
<!-- isosent="20111207195033" -->
<!-- name="tim" -->
<!-- email="tprince_at_[hidden]" -->
<!-- subject="Re: [OMPI users] orte_ess_base_select failed" -->
<!-- id="1854822195-1323287470-cardhu_decombobulator_blackberry.rim.net-954445992-_at_b14.c6.bise6.blackberry" -->
<!-- inreplyto="[OMPI users] orte_ess_base_select failed" -->
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
<strong>Subject:</strong> Re: [OMPI users] orte_ess_base_select failed<br>
<strong>From:</strong> tim (<em>tprince_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-12-07 14:50:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17911.php">Rayson Ho: "Re: [OMPI users] EXTERNAL: Re: Unresolved reference 'mbind' and 'get_mempolicy'"</a>
<li><strong>Previous message:</strong> <a href="17909.php">Ralph Castain: "Re: [OMPI users] orte_ess_base_select failed"</a>
<li><strong>Maybe in reply to:</strong> <a href="17899.php">John Doe: "[OMPI users] orte_ess_base_select failed"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
------Original Message------
<br>
From: Gustavo Correa
<br>
Sender: users-bounces_at_[hidden]
<br>
To: Open MPI Users
<br>
ReplyTo: Open MPI Users
<br>
Sent: Dec 7, 2011 1:10 PM
<br>
Subject: Re: [OMPI users] orte_ess_base_select failed
<br>
<p>Hi John Doe
<br>
<p>I would keep it very simple, particularly if you are just starting with MPI or OpenMPI.
<br>
Why not this?
<br>
<p>./configure --prefix=/opt/ompi/gnu/1.4.4 
<br>
<p>You may also point to the compilers CC, CXX, F77. FC, for C, C++, Fortran-77 and Fortran-90, 
<br>
respectively , in case they are not in standard location.
<br>
<p>Do a 'make distclean' before you start, to cleanup any old mess.
<br>
<p>Once you get it working, you can add other flags.
<br>
However, I would add only those that you may really need.
<br>
<p>I hope this helps,
<br>
Gary Cooper
<br>
<p>On Dec 7, 2011, at 12:19 PM, John Doe wrote:
<br>
<p><span class="quotelev1">&gt; Hi Ralph,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  I may have been a little promiscous in my use of build flags. My initial configure line was much simpler then I kept throwing in flags when it wouldn't run. I'll try to build it again with the your config line and see if that resolves the issue.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Sam
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Wed, Dec 7, 2011 at 11:11 AM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; I don't understand your configure line - why did you give an argument to enable-shared?? That option doesn't take an argument, and may be causing the confusion. Also, enable-debug by default turns off optimization as otherwise the optimizer removes all debug symbols.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If you want a debug version, try just this:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ./configure --prefix=/opt/ompi/gnu/1.4.4 --enable-debug --with-valgrind=/opt/valgrind --enable-orterun-prefix-by-default --enable-memchecker --enable-mem-profile
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; You don't need --with-devel-headers unless you intend to write code that directly drives the OMPI internals.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Dec 7, 2011, at 10:00 AM, John Doe wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Hi Gustavo,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;  I do have /opt/ompi/gnu/1.4.4/lib in my LD_LIBRARY_PATH and the bin directory in my path as well but that didn't seem to help.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Sam
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Tue, Dec 6, 2011 at 5:18 PM, Gustavo Correa &lt;gus_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Hi John Doe
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; What you need to add to LD_LIBRARY_PATH is /opt/ompi/gnu/1.4.4/lib
</span><br>
<span class="quotelev2">&gt;&gt; [note 'lib' at the end].
</span><br>
<span class="quotelev2">&gt;&gt; Your email seems to say that you added /opt/ompi/gnu/1.4.4/lib/openmpi
</span><br>
<span class="quotelev2">&gt;&gt; instead, if I understood it right.
</span><br>
<span class="quotelev2">&gt;&gt; And to your PATH you need to add the corresponding 'bin' directory:
</span><br>
<span class="quotelev2">&gt;&gt; /opt/ompi/gnu/1.4.4/bin.
</span><br>
<span class="quotelev2">&gt;&gt; The rule here is your installation prefix /opt/ompi/gnu/1.4.4/
</span><br>
<span class="quotelev2">&gt;&gt; with 'lib' or 'bin' at the end.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I hope this helps,
</span><br>
<span class="quotelev2">&gt;&gt; Frank Capra
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Dec 6, 2011, at 5:54 PM, John Doe wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt; &gt; I recently built and installed openmpi on my 64 bit linux machine running centOS 6.
</span><br>
<span class="quotelev3">&gt;&gt; &gt; However whenever I try mpirun I get the error message:
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; [[INVALID],INVALID] ORTE_ERROR_LOG: Not found in file runtime/orte_init.c at line 125
</span><br>
<span class="quotelev3">&gt;&gt; &gt; orte_ess_base_select failed
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Actually here's the full error transcript:
</span><br>
<span class="quotelev3">&gt;&gt; &gt; ====================================================================================================
</span><br>
<span class="quotelev1">&gt;&gt; &gt; &gt;&gt; mpiexec -n 4 object/a.out
</span><br>
<span class="quotelev3">&gt;&gt; &gt; [ellipse:01480] mca: base: component_find: unable to open /opt/ompi/gnu/1.4.4/lib/openmpi/mca_paffinity_linux: file not found (ignored)
</span><br>
<span class="quotelev3">&gt;&gt; &gt; [ellipse:01480] mca: base: component_find: unable to open /opt/ompi/gnu/1.4.4/lib/openmpi/mca_carto_auto_detect: file not found (ignored)
</span><br>
<span class="quotelev3">&gt;&gt; &gt; [ellipse:01480] mca: base: component_find: unable to open /opt/ompi/gnu/1.4.4/lib/openmpi/mca_carto_file: file not found (ignored)
</span><br>
<span class="quotelev3">&gt;&gt; &gt; [ellipse:01480] mca: base: component_find: unable to open /opt/ompi/gnu/1.4.4/lib/openmpi/mca_ess_env: file not found (ignored)
</span><br>
<span class="quotelev3">&gt;&gt; &gt; [ellipse:01480] mca: base: component_find: unable to open /opt/ompi/gnu/1.4.4/lib/openmpi/mca_ess_hnp: file not found (ignored)
</span><br>
<span class="quotelev3">&gt;&gt; &gt; [ellipse:01480] mca: base: component_find: unable to open /opt/ompi/gnu/1.4.4/lib/openmpi/mca_ess_singleton: file not found (ignored)
</span><br>
<span class="quotelev3">&gt;&gt; &gt; [ellipse:01480] mca: base: component_find: unable to open /opt/ompi/gnu/1.4.4/lib/openmpi/mca_ess_slurm: file not found (ignored)
</span><br>
<span class="quotelev3">&gt;&gt; &gt; [ellipse:01480] mca: base: component_find: unable to open /opt/ompi/gnu/1.4.4/lib/openmpi/mca_ess_tool: file not found (ignored)
</span><br>
<span class="quotelev3">&gt;&gt; &gt; [ellipse:01480] [[INVALID],INVALID] ORTE_ERROR_LOG: Not found in file runtime/orte_init.c at line 125
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<p>Sent via BlackBerry by AT&amp;T
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17911.php">Rayson Ho: "Re: [OMPI users] EXTERNAL: Re: Unresolved reference 'mbind' and 'get_mempolicy'"</a>
<li><strong>Previous message:</strong> <a href="17909.php">Ralph Castain: "Re: [OMPI users] orte_ess_base_select failed"</a>
<li><strong>Maybe in reply to:</strong> <a href="17899.php">John Doe: "[OMPI users] orte_ess_base_select failed"</a>
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

<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Dec 16 19:55:08 2005" -->
<!-- isoreceived="20051217005508" -->
<!-- sent="Fri, 16 Dec 2005 19:55:00 -0500" -->
<!-- isosent="20051217005500" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re:  sm btl/signal 11 problem on Linux" -->
<!-- id="C2BB6C17-1892-4F60-B9C1-0CE355CB4D9E_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="C8E2CD2D-6867-47C4-AF7C-5E3891D48DA7_at_lanl.gov" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2005-12-16 19:55:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0624.php">Greg Watson: "Re:  sm btl/signal 11 problem on Linux"</a>
<li><strong>Previous message:</strong> <a href="0622.php">Greg Watson: "Re:  sm btl/signal 11 problem on Linux"</a>
<li><strong>In reply to:</strong> <a href="0622.php">Greg Watson: "Re:  sm btl/signal 11 problem on Linux"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0624.php">Greg Watson: "Re:  sm btl/signal 11 problem on Linux"</a>
<li><strong>Reply:</strong> <a href="0624.php">Greg Watson: "Re:  sm btl/signal 11 problem on Linux"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Dec 16, 2005, at 10:47 AM, Greg Watson wrote:
<br>
<p><span class="quotelev1">&gt; I finally worked out why I couldn't reproduce the problem. You're not
</span><br>
<span class="quotelev1">&gt; going to like it though.
</span><br>
<p>You're right -- this kind of buglet is among the most un-fun.  :-(
<br>
<p><span class="quotelev1">&gt; Here's the stacktracefrom the core file:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #0  0x00e93fe8 in orte_pls_rsh_launch ()
</span><br>
<span class="quotelev1">&gt;     from /usr/local/ompi/lib/openmpi/mca_pls_rsh.so
</span><br>
<span class="quotelev1">&gt; #1  0x0023c642 in orte_rmgr_urm_spawn ()
</span><br>
<span class="quotelev1">&gt;     from /usr/local/ompi/lib/openmpi/mca_rmgr_urm.so
</span><br>
<span class="quotelev1">&gt; #2  0x0804a0d4 in orterun (argc=5, argv=0xbfab2e84) at orterun.c:373
</span><br>
<span class="quotelev1">&gt; #3  0x08049b16 in main (argc=5, argv=0xbfab2e84) at main.c:13
</span><br>
<p>Can you recompile this one file with -g?  Specifically, cd into the  
<br>
orte/mca/pla/rsh dir and &quot;make clean&quot;.  Then &quot;make&quot;.  Then cut-n- 
<br>
paste the compile line for that one file to a shell prompt, and put  
<br>
in a -g.
<br>
<p>Then either re-install that component (it looks like you're doing a  
<br>
dynamic build with separate components, so you can do &quot;make install&quot;  
<br>
right from the rsh dir) or re-link liborte and re-install that and re- 
<br>
run.  The corefile might give something a little more meaningful in  
<br>
this case...?
<br>
<p><pre>
--
{+} Jeff Squyres
{+} The Open MPI Project
{+} <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0624.php">Greg Watson: "Re:  sm btl/signal 11 problem on Linux"</a>
<li><strong>Previous message:</strong> <a href="0622.php">Greg Watson: "Re:  sm btl/signal 11 problem on Linux"</a>
<li><strong>In reply to:</strong> <a href="0622.php">Greg Watson: "Re:  sm btl/signal 11 problem on Linux"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0624.php">Greg Watson: "Re:  sm btl/signal 11 problem on Linux"</a>
<li><strong>Reply:</strong> <a href="0624.php">Greg Watson: "Re:  sm btl/signal 11 problem on Linux"</a>
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

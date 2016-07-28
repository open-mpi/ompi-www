<?
$subject_val = "Re: [OMPI users] Pointers for understanding failure messages on NetBSD";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Dec  1 19:53:05 2009" -->
<!-- isoreceived="20091202005305" -->
<!-- sent="Tue, 1 Dec 2009 19:52:59 -0500" -->
<!-- isosent="20091202005259" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Pointers for understanding failure messages on NetBSD" -->
<!-- id="2A9435F7-802D-49D4-A166-2144EEEA35C5_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="6156f1e43e69078ee96878fb10a2b60b.squirrel_at_mail.ecs.vuw.ac.nz" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-12-01 19:52:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11345.php">Jeff Squyres: "Re: [OMPI users] OpenMPI without IPoIB"</a>
<li><strong>Previous message:</strong> <a href="11343.php">Jeff Squyres: "Re: [OMPI users] Program deadlocks, on simple send/recv loop"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/11/11289.php">Kevin.Buckley_at_[hidden]: "[OMPI users] Pointers for understanding failure messages on NetBSD"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11346.php">Ralph Castain: "Re: [OMPI users] Pointers for understanding failure messages on NetBSD"</a>
<li><strong>Reply:</strong> <a href="11346.php">Ralph Castain: "Re: [OMPI users] Pointers for understanding failure messages on NetBSD"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Nov 29, 2009, at 6:15 PM, &lt;Kevin.Buckley_at_[hidden]&gt; &lt;Kevin.Buckley_at_[hidden] 
<br>
<span class="quotelev1"> &gt; wrote:
</span><br>
<p><span class="quotelev1">&gt; $ mpirun -n 4 hello_f77
</span><br>
<span class="quotelev1">&gt; [somebox.ecs.vuw.ac.nz:04414] opal_ifinit: ioctl(SIOCGIFFLAGS)  
</span><br>
<span class="quotelev1">&gt; failed with
</span><br>
<span class="quotelev1">&gt; errno=6
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>Oy.  This is ick, because this error code is coming from horrendously  
<br>
complex code deep in the depths of OMPI that is probing the OS to  
<br>
figure out what ethernet interfaces you have.  It may or may not be  
<br>
simple to fix this.
<br>
<p>Do you mind diving into the OMPI code a bit to figure this out?  I'm  
<br>
afraid that none of the developers are likely to have access to  
<br>
NetBSD.  :-(  I can point you right where to look.
<br>
<p><span class="quotelev1">&gt; When running on a &quot;server&quot; machine within the grid, a machine I am  
</span><br>
<span class="quotelev1">&gt; told
</span><br>
<span class="quotelev1">&gt; should not be any different to the workstation I was using above in
</span><br>
<span class="quotelev1">&gt; respect of user environment, I get a different error and find that the
</span><br>
<span class="quotelev1">&gt; job does not run at all.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This case seems to producean error message that is oft reported within
</span><br>
<span class="quotelev1">&gt; the OpenMPI community:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; $ mpirun -n 4 hello_f77
</span><br>
<span class="quotelev1">&gt; [somebox2.ecs.vuw.ac.nz:25244] [[51186,0],0] ORTE_ERROR_LOG: Error  
</span><br>
<span class="quotelev1">&gt; in file
</span><br>
<span class="quotelev1">&gt; ess_hnp_module.c at line 150
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; It looks like orte_init failed for some reason; your parallel  
</span><br>
<span class="quotelev1">&gt; process is
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   orte_rml_base_select failed
</span><br>
<span class="quotelev1">&gt;   --&gt; Returned value Error (-1) instead of ORTE_SUCCESS
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>This could well be a side-effect of the same error as above -- OMPI  
<br>
may have concluded that it didn't find any ethernet devices and  
<br>
therefore aborted.
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11345.php">Jeff Squyres: "Re: [OMPI users] OpenMPI without IPoIB"</a>
<li><strong>Previous message:</strong> <a href="11343.php">Jeff Squyres: "Re: [OMPI users] Program deadlocks, on simple send/recv loop"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/11/11289.php">Kevin.Buckley_at_[hidden]: "[OMPI users] Pointers for understanding failure messages on NetBSD"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11346.php">Ralph Castain: "Re: [OMPI users] Pointers for understanding failure messages on NetBSD"</a>
<li><strong>Reply:</strong> <a href="11346.php">Ralph Castain: "Re: [OMPI users] Pointers for understanding failure messages on NetBSD"</a>
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

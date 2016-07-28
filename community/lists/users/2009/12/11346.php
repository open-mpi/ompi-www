<?
$subject_val = "Re: [OMPI users] Pointers for understanding failure messages on NetBSD";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Dec  1 20:00:33 2009" -->
<!-- isoreceived="20091202010033" -->
<!-- sent="Tue, 1 Dec 2009 18:00:24 -0700" -->
<!-- isosent="20091202010024" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Pointers for understanding failure messages on NetBSD" -->
<!-- id="07F41ED0-1BD8-4CD9-B9A6-D79D8BB95DE8_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="2A9435F7-802D-49D4-A166-2144EEEA35C5_at_cisco.com" -->
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
<strong>Date:</strong> 2009-12-01 20:00:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11347.php">Ralph Castain: "Re: [OMPI users] MPI_Comm_spawn lots of times"</a>
<li><strong>Previous message:</strong> <a href="11345.php">Jeff Squyres: "Re: [OMPI users] OpenMPI without IPoIB"</a>
<li><strong>In reply to:</strong> <a href="11344.php">Jeff Squyres: "Re: [OMPI users] Pointers for understanding failure messages on NetBSD"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11349.php">Kevin.Buckley_at_[hidden]: "Re: [OMPI users] Pointers for understanding failure messages on NetBSD"</a>
<li><strong>Reply:</strong> <a href="11349.php">Kevin.Buckley_at_[hidden]: "Re: [OMPI users] Pointers for understanding failure messages on NetBSD"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I  believe what this is saying is that we are not finding any TCP interfaces - the ioctl itself is failing. So yes - miprun failing at that point is going to happen because we have no way to communicate for launch.
<br>
<p>Do you see interfaces if you do an /sbin/ifconfig? Do they have valid IP addresses?
<br>
<p>On Dec 1, 2009, at 5:52 PM, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; On Nov 29, 2009, at 6:15 PM, &lt;Kevin.Buckley_at_[hidden]&gt; &lt;Kevin.Buckley_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; $ mpirun -n 4 hello_f77
</span><br>
<span class="quotelev2">&gt;&gt; [somebox.ecs.vuw.ac.nz:04414] opal_ifinit: ioctl(SIOCGIFFLAGS) failed with
</span><br>
<span class="quotelev2">&gt;&gt; errno=6
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Oy.  This is ick, because this error code is coming from horrendously complex code deep in the depths of OMPI that is probing the OS to figure out what ethernet interfaces you have.  It may or may not be simple to fix this.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Do you mind diving into the OMPI code a bit to figure this out?  I'm afraid that none of the developers are likely to have access to NetBSD.  :-(  I can point you right where to look.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; When running on a &quot;server&quot; machine within the grid, a machine I am told
</span><br>
<span class="quotelev2">&gt;&gt; should not be any different to the workstation I was using above in
</span><br>
<span class="quotelev2">&gt;&gt; respect of user environment, I get a different error and find that the
</span><br>
<span class="quotelev2">&gt;&gt; job does not run at all.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; This case seems to producean error message that is oft reported within
</span><br>
<span class="quotelev2">&gt;&gt; the OpenMPI community:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; $ mpirun -n 4 hello_f77
</span><br>
<span class="quotelev2">&gt;&gt; [somebox2.ecs.vuw.ac.nz:25244] [[51186,0],0] ORTE_ERROR_LOG: Error in file
</span><br>
<span class="quotelev2">&gt;&gt; ess_hnp_module.c at line 150
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; It looks like orte_init failed for some reason; your parallel process is
</span><br>
<span class="quotelev2">&gt;&gt; ...
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;  orte_rml_base_select failed
</span><br>
<span class="quotelev2">&gt;&gt;  --&gt; Returned value Error (-1) instead of ORTE_SUCCESS
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This could well be a side-effect of the same error as above -- OMPI may have concluded that it didn't find any ethernet devices and therefore aborted.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
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
<li><strong>Next message:</strong> <a href="11347.php">Ralph Castain: "Re: [OMPI users] MPI_Comm_spawn lots of times"</a>
<li><strong>Previous message:</strong> <a href="11345.php">Jeff Squyres: "Re: [OMPI users] OpenMPI without IPoIB"</a>
<li><strong>In reply to:</strong> <a href="11344.php">Jeff Squyres: "Re: [OMPI users] Pointers for understanding failure messages on NetBSD"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11349.php">Kevin.Buckley_at_[hidden]: "Re: [OMPI users] Pointers for understanding failure messages on NetBSD"</a>
<li><strong>Reply:</strong> <a href="11349.php">Kevin.Buckley_at_[hidden]: "Re: [OMPI users] Pointers for understanding failure messages on NetBSD"</a>
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

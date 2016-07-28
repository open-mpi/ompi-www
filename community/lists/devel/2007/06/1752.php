<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Jun 22 14:45:54 2007" -->
<!-- isoreceived="20070622184554" -->
<!-- sent="Fri, 22 Jun 2007 14:45:21 -0400" -->
<!-- isosent="20070622184521" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] (loose) SGE Integration fails, why?" -->
<!-- id="7D90A479-C65D-4913-A66D-6B72C9B60FCD_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="467BE039.2000304_at_gmx.net" -->
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
<strong>Date:</strong> 2007-06-22 14:45:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1753.php">Jeff Squyres: "Re: [OMPI devel] PML/BTL MCA params review"</a>
<li><strong>Previous message:</strong> <a href="1751.php">sadfub_at_[hidden]: "Re: [OMPI devel] (loose) SGE Integration fails, why?"</a>
<li><strong>In reply to:</strong> <a href="1751.php">sadfub_at_[hidden]: "Re: [OMPI devel] (loose) SGE Integration fails, why?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1754.php">sadfub_at_[hidden]: "Re: [OMPI devel] (loose) SGE Integration fails, why?"</a>
<li><strong>Reply:</strong> <a href="1754.php">sadfub_at_[hidden]: "Re: [OMPI devel] (loose) SGE Integration fails, why?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jun 22, 2007, at 10:44 AM, sadfub_at_[hidden] wrote:
<br>
<p><span class="quotelev2">&gt;&gt; Can you send more information on this?  See <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
</span><br>
<span class="quotelev2">&gt;&gt; community/help/
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -sh-3.00$ ompi/bin/mpirun -d -np 2 -H node03,node06 hostname
</span><br>
<span class="quotelev1">&gt; [headnode:23178] connect_uni: connection not allowed
</span><br>
<span class="quotelev1">&gt; [headnode:23178] connect_uni: connection not allowed
</span><br>
<span class="quotelev1">&gt; [headnode:23178] connect_uni: connection not allowed
</span><br>
<span class="quotelev1">&gt; [headnode:23178] connect_uni: connection not allowed
</span><br>
<span class="quotelev1">&gt; [headnode:23178] connect_uni: connection not allowed
</span><br>
<span class="quotelev1">&gt; [headnode:23178] connect_uni: connection not allowed
</span><br>
<span class="quotelev1">&gt; [headnode:23178] connect_uni: connection not allowed
</span><br>
<span class="quotelev1">&gt; [headnode:23178] connect_uni: connection not allowed
</span><br>
<span class="quotelev1">&gt; [headnode:23178] connect_uni: connection not allowed
</span><br>
<span class="quotelev1">&gt; [headnode:23178] connect_uni: connection not allowed
</span><br>
<span class="quotelev1">&gt; [headnode:23178] [0,0,0] setting up session dir with
</span><br>
<span class="quotelev1">&gt; [headnode:23178]        universe default-universe-23178
</span><br>
<span class="quotelev1">&gt; [headnode:23178]        user me
</span><br>
<span class="quotelev1">&gt; [headnode:23178]        host headnode
</span><br>
<span class="quotelev1">&gt; [headnode:23178]        jobid 0
</span><br>
<span class="quotelev1">&gt; [headnode:23178]        procid 0
</span><br>
<span class="quotelev1">&gt; [headnode:23178] procdir:
</span><br>
<span class="quotelev1">&gt; /tmp/openmpi-sessions-me_at_headnode_0/default-universe-23178/0/0
</span><br>
<span class="quotelev1">&gt; [headnode:23178] jobdir:
</span><br>
<span class="quotelev1">&gt; /tmp/openmpi-sessions-me_at_headnode_0/default-universe-23178/0
</span><br>
<span class="quotelev1">&gt; [headnode:23178] unidir:
</span><br>
<span class="quotelev1">&gt; /tmp/openmpi-sessions-me_at_headnode_0/default-universe-23178
</span><br>
<span class="quotelev1">&gt; [headnode:23178] top: openmpi-sessions-me_at_headnode_0
</span><br>
<span class="quotelev1">&gt; [headnode:23178] tmp: /tmp
</span><br>
<span class="quotelev1">&gt; [headnode:23178] [0,0,0] contact_file
</span><br>
<span class="quotelev1">&gt; /tmp/openmpi-sessions-me_at_headnode_0/default-universe-23178/universe- 
</span><br>
<span class="quotelev1">&gt; setup.txt
</span><br>
<span class="quotelev1">&gt; [headnode:23178] [0,0,0] wrote setup file
</span><br>
<span class="quotelev1">&gt; [headnode:23178] *** Process received signal ***
</span><br>
<span class="quotelev1">&gt; [headnode:23178] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev1">&gt; [headnode:23178] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev1">&gt; [headnode:23178] Failing at address: 0x1
</span><br>
<span class="quotelev1">&gt; [headnode:23178] [ 0] /lib64/tls/libpthread.so.0 [0x39ed80c430]
</span><br>
<span class="quotelev1">&gt; [headnode:23178] [ 1] /lib64/tls/libc.so.6(strcmp+0) [0x39ecf6ff00]
</span><br>
<span class="quotelev1">&gt; [headnode:23178] [ 2]
</span><br>
<span class="quotelev1">&gt; /home/me/ompi/lib/openmpi/mca_pls_rsh.so(orte_pls_rsh_launch+0x24f)
</span><br>
<span class="quotelev1">&gt; [0x2a9723cc7f]
</span><br>
<span class="quotelev1">&gt; [headnode:23178] [ 3] /home/me/ompi/lib/openmpi/mca_rmgr_urm.so
</span><br>
<span class="quotelev1">&gt; [0x2a9764fa90]
</span><br>
<span class="quotelev1">&gt; [headnode:23178] [ 4] /home/me/ompi/bin/mpirun(orterun+0x35b)  
</span><br>
<span class="quotelev1">&gt; [0x402ca3]
</span><br>
<span class="quotelev1">&gt; [headnode:23178] [ 5] /home/me/ompi/bin/mpirun(main+0x1b) [0x402943]
</span><br>
<span class="quotelev1">&gt; [headnode:23178] [ 6] /lib64/tls/libc.so.6(__libc_start_main+0xdb)
</span><br>
<span class="quotelev1">&gt; [0x39ecf1c3fb]
</span><br>
<span class="quotelev1">&gt; [headnode:23178] [ 7] /home/me/ompi/bin/mpirun [0x40289a]
</span><br>
<span class="quotelev1">&gt; [headnode:23178] *** End of error message ***
</span><br>
<span class="quotelev1">&gt; Segmentation fault
</span><br>
<p>This should not happen -- this is [obviously] even before any MPI  
<br>
processing starts.  Are you inside an SGE job here?
<br>
<p>Pak/Ralph: any ideas?
<br>
<p><span class="quotelev2">&gt;&gt; Launch an SGE job that calls the shell command &quot;limit&quot; (if you run C-
</span><br>
<span class="quotelev2">&gt;&gt; shell variants) or &quot;ulimit -l&quot; (if you run Bourne shell variants).
</span><br>
<span class="quotelev2">&gt;&gt; Ensure that the output is &quot;unlimited&quot;.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I've done that allready, but how to distinguish between tight coupled
</span><br>
<span class="quotelev1">&gt; job ulimits and loose coupled job ulimits? I tested to pass
</span><br>
<span class="quotelev1">&gt; $TMPDIR/machines to a shell script which in turn delivers a &quot;ulimit  
</span><br>
<span class="quotelev1">&gt; -a&quot;,
</span><br>
<span class="quotelev1">&gt; *assuming* this is considered as a tight coupled job, but each node
</span><br>
<span class="quotelev1">&gt; returned unlimited.. and without this $TMPDIR/machines too. Even the
</span><br>
<span class="quotelev1">&gt; headnode is set to unlimited.
</span><br>
<p>I don't really know what this means.  People have explained &quot;loose&quot;  
<br>
vs. &quot;tight&quot; integration to me before, but since I'm not an SGE user,  
<br>
the definitions always fall away.
<br>
<p>Based on your prior e-mail, it looks like you are always invoking  
<br>
&quot;ulimit&quot; via &quot;pdsh&quot;, even under SGE jobs.  This is incorrect.  Can't  
<br>
you just submit an SGE job script that runs &quot;ulimit&quot;?
<br>
<p><span class="quotelev2">&gt;&gt; What are the limits of the user that launches the SGE daemons?  I.e.,
</span><br>
<span class="quotelev2">&gt;&gt; did the SGE daemons get started with proper &quot;unlimited&quot; limits?  If
</span><br>
<span class="quotelev2">&gt;&gt; not, that could hamper SGE's ability to set the limits that you told
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The limits in /etc/security/limits.conf apply to all users (using a
</span><br>
<span class="quotelev1">&gt; '*'), hence the SGE processes and deamons shouldn't have any limits.
</span><br>
<p>Not really.  limits.conf is not universally applied; it's a PAM  
<br>
entity.  So for daemons that start via /etc/init.d scripts (or  
<br>
whatever the equivalent is on your system), PAM limits are not  
<br>
necessarily applied.  For example, I had to manually insert a &quot;ulimit  
<br>
-Hl unlimited&quot; in the startup script for my SLURM daemons.
<br>
<p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1753.php">Jeff Squyres: "Re: [OMPI devel] PML/BTL MCA params review"</a>
<li><strong>Previous message:</strong> <a href="1751.php">sadfub_at_[hidden]: "Re: [OMPI devel] (loose) SGE Integration fails, why?"</a>
<li><strong>In reply to:</strong> <a href="1751.php">sadfub_at_[hidden]: "Re: [OMPI devel] (loose) SGE Integration fails, why?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1754.php">sadfub_at_[hidden]: "Re: [OMPI devel] (loose) SGE Integration fails, why?"</a>
<li><strong>Reply:</strong> <a href="1754.php">sadfub_at_[hidden]: "Re: [OMPI devel] (loose) SGE Integration fails, why?"</a>
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

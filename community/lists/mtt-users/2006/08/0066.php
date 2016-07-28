<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Aug 30 10:12:09 2006" -->
<!-- isoreceived="20060830141209" -->
<!-- sent="Wed, 30 Aug 2006 10:03:55 -0400" -->
<!-- isosent="20060830140355" -->
<!-- name="Josh Hursey" -->
<!-- email="jjhursey_at_[hidden]" -->
<!-- subject="Re: [MTT users] Tests timing out" -->
<!-- id="DE1CA48D-5CEE-4F31-89AB-5744CDCBD69B_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="B8B9F5AD-D546-4E27-A7DC-55E605FFE8EB_at_open-mpi.org" -->
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
<strong>From:</strong> Josh Hursey (<em>jjhursey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-08-30 10:03:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0067.php">Josh Hursey: "Re: [MTT users] Tests timing out"</a>
<li><strong>Previous message:</strong> <a href="0065.php">Josh Hursey: "Re: [MTT users] Tests timing out"</a>
<li><strong>In reply to:</strong> <a href="0065.php">Josh Hursey: "Re: [MTT users] Tests timing out"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0070.php">Jeff Squyres: "Re: [MTT users] Tests timing out"</a>
<li><strong>Reply:</strong> <a href="0070.php">Jeff Squyres: "Re: [MTT users] Tests timing out"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
yet another point (sorry for the spam). This may not be an MTT issue  
<br>
but a broken ORTE on the trunk :(
<br>
<p>When I try to run in a allocation (srun -N 16 -A) things run fine.  
<br>
But if I try to run in batch mode (srun -N 16 -b myscript.sh) then I  
<br>
see the same hang as in MTT. seems that mpirun is not getting  
<br>
properly notified of the completion of the job. :(
<br>
<p>I'll try to investigate a bit further today. Any thoughts on what  
<br>
might be causing this?
<br>
<p>Cheers,
<br>
Josh
<br>
<p>On Aug 30, 2006, at 9:54 AM, Josh Hursey wrote:
<br>
<p><span class="quotelev1">&gt; forgot this bit in my mail. With the mpirun just hanging out there I
</span><br>
<span class="quotelev1">&gt; attached GDB and got the following stack trace:
</span><br>
<span class="quotelev1">&gt; (gdb) bt
</span><br>
<span class="quotelev1">&gt; #0  0x0000003d1b9bd1af in poll () from /lib64/tls/libc.so.6
</span><br>
<span class="quotelev1">&gt; #1  0x0000002a956e6389 in opal_poll_dispatch (base=0x5136d0,
</span><br>
<span class="quotelev1">&gt; arg=0x513730, tv=0x7fbfffee70) at poll.c:191
</span><br>
<span class="quotelev1">&gt; #2  0x0000002a956e28b6 in opal_event_base_loop (base=0x5136d0,
</span><br>
<span class="quotelev1">&gt; flags=5) at event.c:584
</span><br>
<span class="quotelev1">&gt; #3  0x0000002a956e26b7 in opal_event_loop (flags=5) at event.c:514
</span><br>
<span class="quotelev1">&gt; #4  0x0000002a956db7c7 in opal_progress () at runtime/opal_progress.c:
</span><br>
<span class="quotelev1">&gt; 259
</span><br>
<span class="quotelev1">&gt; #5  0x000000000040334c in opal_condition_wait (c=0x509650,
</span><br>
<span class="quotelev1">&gt; m=0x509600) at ../../../opal/threads/condition.h:81
</span><br>
<span class="quotelev1">&gt; #6  0x0000000000402f52 in orterun (argc=9, argv=0x7fbffff0b8) at
</span><br>
<span class="quotelev1">&gt; orterun.c:444
</span><br>
<span class="quotelev1">&gt; #7  0x00000000004028a3 in main (argc=9, argv=0x7fbffff0b8) at  
</span><br>
<span class="quotelev1">&gt; main.c:13
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Seems that mpirun is waiting for things to complete :/
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Aug 30, 2006, at 9:53 AM, Josh Hursey wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Aug 30, 2006, at 7:19 AM, Jeff Squyres wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On 8/29/06 8:57 PM, &quot;Josh Hursey&quot; &lt;jjhursey_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Does this apply to *all* tests, or only some of the tests (like
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; allgather)?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; All of the tests: Trivial and ibm. They all timeout :(
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Blah.  The trivial tests are simply &quot;hello world&quot;, so they should
</span><br>
<span class="quotelev3">&gt;&gt;&gt; take just
</span><br>
<span class="quotelev3">&gt;&gt;&gt; about no time at all.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Is this running under SLURM?  I put the code in there to know how
</span><br>
<span class="quotelev3">&gt;&gt;&gt; many procs
</span><br>
<span class="quotelev3">&gt;&gt;&gt; to use in SLURM but have not tested it in eons.  I doubt that's the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; problem,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; but that's one thing to check.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Yep it is in SLURM. and it seems that the 'number of procs' code is
</span><br>
<span class="quotelev2">&gt;&gt; working fine as it changes with different allocations.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Can you set a super-long timeout (e.g., a few minutes), and while
</span><br>
<span class="quotelev3">&gt;&gt;&gt; one of the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; trivial tests is running, do some ps's on the relevant nodes and
</span><br>
<span class="quotelev3">&gt;&gt;&gt; see what,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; if anything, is running?  E.g., mpirun, the test executable on the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; nodes,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; etc.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Without setting a long timeout. It seems that mpirun is running, but
</span><br>
<span class="quotelev2">&gt;&gt; nothing else and only on the launching node.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; When a test starts you see the mpirun launching properly:
</span><br>
<span class="quotelev2">&gt;&gt; $ ps aux | grep ...
</span><br>
<span class="quotelev2">&gt;&gt; USER       PID %CPU %MEM   VSZ  RSS TTY      STAT START   TIME  
</span><br>
<span class="quotelev2">&gt;&gt; COMMAND
</span><br>
<span class="quotelev2">&gt;&gt; mpiteam  15117  0.5  0.8 113024 33680 ?      S    09:32   0:06  
</span><br>
<span class="quotelev2">&gt;&gt; perl ./
</span><br>
<span class="quotelev2">&gt;&gt; client/mtt --debug --scratch /u/mpiteam/tmp/mtt-scratch --file /u/
</span><br>
<span class="quotelev2">&gt;&gt; mpiteam/local/etc/ompi-iu-odin-core.ini --verbose --print-time
</span><br>
<span class="quotelev2">&gt;&gt; mpiteam  15294  0.0  0.0     0    0 ?        Z    09:32   0:00 [sh]
</span><br>
<span class="quotelev2">&gt;&gt; &lt;defunct&gt;
</span><br>
<span class="quotelev2">&gt;&gt; mpiteam  28453  0.2  0.0 38072 3536 ?        S    09:50   0:00 mpirun
</span><br>
<span class="quotelev2">&gt;&gt; -mca btl tcp,self -np 32 --prefix /san/homedirs/mpiteam/tmp/mtt-
</span><br>
<span class="quotelev2">&gt;&gt; scratch/installs/ompi-nightly-trunk/odin_gcc_warnings/1.3a1r11497/
</span><br>
<span class="quotelev2">&gt;&gt; install collective/allgather_in_place
</span><br>
<span class="quotelev2">&gt;&gt; mpiteam  28454  0.0  0.0 41716 2040 ?        Sl   09:50   0:00  
</span><br>
<span class="quotelev2">&gt;&gt; srun --
</span><br>
<span class="quotelev2">&gt;&gt; nodes=16 --ntasks=16 --
</span><br>
<span class="quotelev2">&gt;&gt; nodelist=odin022,odin021,odin020,odin019,odin018,odin017,odin016,odin 
</span><br>
<span class="quotelev2">&gt;&gt; 0
</span><br>
<span class="quotelev2">&gt;&gt; 15
</span><br>
<span class="quotelev2">&gt;&gt; ,odin014,odin013,odin012,odin011,odin010,odin009,odin008,odin007
</span><br>
<span class="quotelev2">&gt;&gt; orted --no-daemonize --bootproxy 1 --ns-nds slurm --name 0.0.1 --
</span><br>
<span class="quotelev2">&gt;&gt; num_procs 16 --vpid_start 0 --universe
</span><br>
<span class="quotelev2">&gt;&gt; mpiteam_at_[hidden]:default-universe-28453 --nsreplica
</span><br>
<span class="quotelev2">&gt;&gt; &quot;0.0.0;tcp://129.79.240.107:40904&quot; --gprreplica &quot;0.0.0;tcp://
</span><br>
<span class="quotelev2">&gt;&gt; 129.79.240.107:40904&quot;
</span><br>
<span class="quotelev2">&gt;&gt; mpiteam  28455  0.0  0.0 23212 1804 ?        Ssl  09:50   0:00  
</span><br>
<span class="quotelev2">&gt;&gt; srun --
</span><br>
<span class="quotelev2">&gt;&gt; nodes=16 --ntasks=16 --
</span><br>
<span class="quotelev2">&gt;&gt; nodelist=odin022,odin021,odin020,odin019,odin018,odin017,odin016,odin 
</span><br>
<span class="quotelev2">&gt;&gt; 0
</span><br>
<span class="quotelev2">&gt;&gt; 15
</span><br>
<span class="quotelev2">&gt;&gt; ,odin014,odin013,odin012,odin011,odin010,odin009,odin008,odin007
</span><br>
<span class="quotelev2">&gt;&gt; orted --no-daemonize --bootproxy 1 --ns-nds slurm --name 0.0.1 --
</span><br>
<span class="quotelev2">&gt;&gt; num_procs 16 --vpid_start 0 --universe
</span><br>
<span class="quotelev2">&gt;&gt; mpiteam_at_[hidden]:default-universe-28453 --nsreplica
</span><br>
<span class="quotelev2">&gt;&gt; &quot;0.0.0;tcp://129.79.240.107:40904&quot; --gprreplica &quot;0.0.0;tcp://
</span><br>
<span class="quotelev2">&gt;&gt; 129.79.240.107:40904&quot;
</span><br>
<span class="quotelev2">&gt;&gt; mpiteam  28472  0.0  0.0 36956 2256 ?        S    09:50   0:00 /san/
</span><br>
<span class="quotelev2">&gt;&gt; homedirs/mpiteam/tmp/mtt-scratch/installs/ompi-nightly-trunk/
</span><br>
<span class="quotelev2">&gt;&gt; odin_gcc_warnings/1.3a1r11497/install/bin/orted --no-daemonize --
</span><br>
<span class="quotelev2">&gt;&gt; bootproxy 1 --ns-nds slurm --name 0.0.1 --num_procs 16 --vpid_start 0
</span><br>
<span class="quotelev2">&gt;&gt; --universe mpiteam_at_[hidden]:default-universe-28453 --
</span><br>
<span class="quotelev2">&gt;&gt; nsreplica &quot;0.0.0;tcp://129.79.240.107:40904&quot; --gprreplica
</span><br>
<span class="quotelev2">&gt;&gt; &quot;0.0.0;tcp://129.79.240.107:40904&quot;
</span><br>
<span class="quotelev2">&gt;&gt; mpiteam  28482  0.1  0.0 64296 3564 ?        S    09:50   0:00
</span><br>
<span class="quotelev2">&gt;&gt; collective/allgather_in_place
</span><br>
<span class="quotelev2">&gt;&gt; mpiteam  28483  0.1  0.0 64296 3564 ?        S    09:50   0:00
</span><br>
<span class="quotelev2">&gt;&gt; collective/allgather_in_place
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; But once the test finishes, mpirun seems to just be hanging out.
</span><br>
<span class="quotelev2">&gt;&gt; $ ps aux | grep ...
</span><br>
<span class="quotelev2">&gt;&gt; USER       PID %CPU %MEM   VSZ  RSS TTY      STAT START   TIME  
</span><br>
<span class="quotelev2">&gt;&gt; COMMAND
</span><br>
<span class="quotelev2">&gt;&gt; mpiteam  15083  0.0  0.0 52760 1040 ?        S    09:31   0:00 /bin/
</span><br>
<span class="quotelev2">&gt;&gt; bash /var/tmp/slurmd/job148126/script
</span><br>
<span class="quotelev2">&gt;&gt; root     15086  0.0  0.0 42884 3172 ?        Ss   09:31   0:00 sshd:
</span><br>
<span class="quotelev2">&gt;&gt; mpiteam [priv]
</span><br>
<span class="quotelev2">&gt;&gt; mpiteam  15088  0.0  0.0 43012 3252 ?        S    09:31   0:00 sshd:
</span><br>
<span class="quotelev2">&gt;&gt; mpiteam_at_pts/1
</span><br>
<span class="quotelev2">&gt;&gt; mpiteam  15089  0.0  0.0 56680 1912 pts/1    Ss   09:31   0:00 -tcsh
</span><br>
<span class="quotelev2">&gt;&gt; mpiteam  15117  0.5  0.8 113024 33680 ?      S    09:32   0:06  
</span><br>
<span class="quotelev2">&gt;&gt; perl ./
</span><br>
<span class="quotelev2">&gt;&gt; client/mtt --debug --scratch /u/mpiteam/tmp/mtt-scratch --file /u/
</span><br>
<span class="quotelev2">&gt;&gt; mpiteam/local/etc/ompi-iu-odin-core.ini --verbose --print-time
</span><br>
<span class="quotelev2">&gt;&gt; mpiteam  15294  0.0  0.0     0    0 ?        Z    09:32   0:00 [sh]
</span><br>
<span class="quotelev2">&gt;&gt; &lt;defunct&gt;
</span><br>
<span class="quotelev2">&gt;&gt; mpiteam  28453  0.0  0.0 38204 3568 ?        S    09:50   0:00 mpirun
</span><br>
<span class="quotelev2">&gt;&gt; -mca btl tcp,self -np 32 --prefix /san/homedirs/mpiteam/tmp/mtt-
</span><br>
<span class="quotelev2">&gt;&gt; scratch/installs/ompi-nightly-trunk/odin_gcc_warnings/1.3a1r11497/
</span><br>
<span class="quotelev2">&gt;&gt; install collective/allgather_in_place
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thoughts?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Server Virtualization Business Unit
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Cisco Systems
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; mtt-users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; mtt-users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; mtt-users mailing list
</span><br>
<span class="quotelev1">&gt; mtt-users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0067.php">Josh Hursey: "Re: [MTT users] Tests timing out"</a>
<li><strong>Previous message:</strong> <a href="0065.php">Josh Hursey: "Re: [MTT users] Tests timing out"</a>
<li><strong>In reply to:</strong> <a href="0065.php">Josh Hursey: "Re: [MTT users] Tests timing out"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0070.php">Jeff Squyres: "Re: [MTT users] Tests timing out"</a>
<li><strong>Reply:</strong> <a href="0070.php">Jeff Squyres: "Re: [MTT users] Tests timing out"</a>
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

<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Aug 30 09:53:49 2006" -->
<!-- isoreceived="20060830135349" -->
<!-- sent="Wed, 30 Aug 2006 09:53:30 -0400" -->
<!-- isosent="20060830135330" -->
<!-- name="Josh Hursey" -->
<!-- email="jjhursey_at_[hidden]" -->
<!-- subject="Re: [MTT users] Tests timing out" -->
<!-- id="532C9352-7DD0-436B-BAE5-C8A68E0D7D76_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="C11AEC9B.24CFF%jsquyres_at_cisco.com" -->
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
<strong>Date:</strong> 2006-08-30 09:53:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0065.php">Josh Hursey: "Re: [MTT users] Tests timing out"</a>
<li><strong>Previous message:</strong> <a href="0063.php">Jeff Squyres: "Re: [MTT users] OMPI snapshot tarball generation"</a>
<li><strong>In reply to:</strong> <a href="0061.php">Jeff Squyres: "Re: [MTT users] Tests timing out"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0065.php">Josh Hursey: "Re: [MTT users] Tests timing out"</a>
<li><strong>Reply:</strong> <a href="0065.php">Josh Hursey: "Re: [MTT users] Tests timing out"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Aug 30, 2006, at 7:19 AM, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; On 8/29/06 8:57 PM, &quot;Josh Hursey&quot; &lt;jjhursey_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Does this apply to *all* tests, or only some of the tests (like
</span><br>
<span class="quotelev3">&gt;&gt;&gt; allgather)?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; All of the tests: Trivial and ibm. They all timeout :(
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Blah.  The trivial tests are simply &quot;hello world&quot;, so they should  
</span><br>
<span class="quotelev1">&gt; take just
</span><br>
<span class="quotelev1">&gt; about no time at all.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Is this running under SLURM?  I put the code in there to know how  
</span><br>
<span class="quotelev1">&gt; many procs
</span><br>
<span class="quotelev1">&gt; to use in SLURM but have not tested it in eons.  I doubt that's the  
</span><br>
<span class="quotelev1">&gt; problem,
</span><br>
<span class="quotelev1">&gt; but that's one thing to check.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>Yep it is in SLURM. and it seems that the 'number of procs' code is  
<br>
working fine as it changes with different allocations.
<br>
<p><span class="quotelev1">&gt; Can you set a super-long timeout (e.g., a few minutes), and while  
</span><br>
<span class="quotelev1">&gt; one of the
</span><br>
<span class="quotelev1">&gt; trivial tests is running, do some ps's on the relevant nodes and  
</span><br>
<span class="quotelev1">&gt; see what,
</span><br>
<span class="quotelev1">&gt; if anything, is running?  E.g., mpirun, the test executable on the  
</span><br>
<span class="quotelev1">&gt; nodes,
</span><br>
<span class="quotelev1">&gt; etc.
</span><br>
<p>Without setting a long timeout. It seems that mpirun is running, but  
<br>
nothing else and only on the launching node.
<br>
<p>When a test starts you see the mpirun launching properly:
<br>
$ ps aux | grep ...
<br>
USER       PID %CPU %MEM   VSZ  RSS TTY      STAT START   TIME COMMAND
<br>
mpiteam  15117  0.5  0.8 113024 33680 ?      S    09:32   0:06 perl ./ 
<br>
client/mtt --debug --scratch /u/mpiteam/tmp/mtt-scratch --file /u/ 
<br>
mpiteam/local/etc/ompi-iu-odin-core.ini --verbose --print-time
<br>
mpiteam  15294  0.0  0.0     0    0 ?        Z    09:32   0:00 [sh]  
<br>
&lt;defunct&gt;
<br>
mpiteam  28453  0.2  0.0 38072 3536 ?        S    09:50   0:00 mpirun  
<br>
-mca btl tcp,self -np 32 --prefix /san/homedirs/mpiteam/tmp/mtt- 
<br>
scratch/installs/ompi-nightly-trunk/odin_gcc_warnings/1.3a1r11497/ 
<br>
install collective/allgather_in_place
<br>
mpiteam  28454  0.0  0.0 41716 2040 ?        Sl   09:50   0:00 srun -- 
<br>
nodes=16 --ntasks=16 -- 
<br>
nodelist=odin022,odin021,odin020,odin019,odin018,odin017,odin016,odin015 
<br>
,odin014,odin013,odin012,odin011,odin010,odin009,odin008,odin007  
<br>
orted --no-daemonize --bootproxy 1 --ns-nds slurm --name 0.0.1 -- 
<br>
num_procs 16 --vpid_start 0 --universe  
<br>
mpiteam_at_[hidden]:default-universe-28453 --nsreplica  
<br>
&quot;0.0.0;tcp://129.79.240.107:40904&quot; --gprreplica &quot;0.0.0;tcp:// 
<br>
129.79.240.107:40904&quot;
<br>
mpiteam  28455  0.0  0.0 23212 1804 ?        Ssl  09:50   0:00 srun -- 
<br>
nodes=16 --ntasks=16 -- 
<br>
nodelist=odin022,odin021,odin020,odin019,odin018,odin017,odin016,odin015 
<br>
,odin014,odin013,odin012,odin011,odin010,odin009,odin008,odin007  
<br>
orted --no-daemonize --bootproxy 1 --ns-nds slurm --name 0.0.1 -- 
<br>
num_procs 16 --vpid_start 0 --universe  
<br>
mpiteam_at_[hidden]:default-universe-28453 --nsreplica  
<br>
&quot;0.0.0;tcp://129.79.240.107:40904&quot; --gprreplica &quot;0.0.0;tcp:// 
<br>
129.79.240.107:40904&quot;
<br>
mpiteam  28472  0.0  0.0 36956 2256 ?        S    09:50   0:00 /san/ 
<br>
homedirs/mpiteam/tmp/mtt-scratch/installs/ompi-nightly-trunk/ 
<br>
odin_gcc_warnings/1.3a1r11497/install/bin/orted --no-daemonize -- 
<br>
bootproxy 1 --ns-nds slurm --name 0.0.1 --num_procs 16 --vpid_start 0  
<br>
--universe mpiteam_at_[hidden]:default-universe-28453 -- 
<br>
nsreplica &quot;0.0.0;tcp://129.79.240.107:40904&quot; --gprreplica  
<br>
&quot;0.0.0;tcp://129.79.240.107:40904&quot;
<br>
mpiteam  28482  0.1  0.0 64296 3564 ?        S    09:50   0:00  
<br>
collective/allgather_in_place
<br>
mpiteam  28483  0.1  0.0 64296 3564 ?        S    09:50   0:00  
<br>
collective/allgather_in_place
<br>
<p>But once the test finishes, mpirun seems to just be hanging out.
<br>
$ ps aux | grep ...
<br>
USER       PID %CPU %MEM   VSZ  RSS TTY      STAT START   TIME COMMAND
<br>
mpiteam  15083  0.0  0.0 52760 1040 ?        S    09:31   0:00 /bin/ 
<br>
bash /var/tmp/slurmd/job148126/script
<br>
root     15086  0.0  0.0 42884 3172 ?        Ss   09:31   0:00 sshd:  
<br>
mpiteam [priv]
<br>
mpiteam  15088  0.0  0.0 43012 3252 ?        S    09:31   0:00 sshd:  
<br>
mpiteam_at_pts/1
<br>
mpiteam  15089  0.0  0.0 56680 1912 pts/1    Ss   09:31   0:00 -tcsh
<br>
mpiteam  15117  0.5  0.8 113024 33680 ?      S    09:32   0:06 perl ./ 
<br>
client/mtt --debug --scratch /u/mpiteam/tmp/mtt-scratch --file /u/ 
<br>
mpiteam/local/etc/ompi-iu-odin-core.ini --verbose --print-time
<br>
mpiteam  15294  0.0  0.0     0    0 ?        Z    09:32   0:00 [sh]  
<br>
&lt;defunct&gt;
<br>
mpiteam  28453  0.0  0.0 38204 3568 ?        S    09:50   0:00 mpirun  
<br>
-mca btl tcp,self -np 32 --prefix /san/homedirs/mpiteam/tmp/mtt- 
<br>
scratch/installs/ompi-nightly-trunk/odin_gcc_warnings/1.3a1r11497/ 
<br>
install collective/allgather_in_place
<br>
<p>Thoughts?
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; Server Virtualization Business Unit
</span><br>
<span class="quotelev1">&gt; Cisco Systems
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0065.php">Josh Hursey: "Re: [MTT users] Tests timing out"</a>
<li><strong>Previous message:</strong> <a href="0063.php">Jeff Squyres: "Re: [MTT users] OMPI snapshot tarball generation"</a>
<li><strong>In reply to:</strong> <a href="0061.php">Jeff Squyres: "Re: [MTT users] Tests timing out"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0065.php">Josh Hursey: "Re: [MTT users] Tests timing out"</a>
<li><strong>Reply:</strong> <a href="0065.php">Josh Hursey: "Re: [MTT users] Tests timing out"</a>
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

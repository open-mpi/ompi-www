<?
$subject_val = "Re: [hwloc-users] Understanding hwloc-ps output";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May 30 11:00:07 2012" -->
<!-- isoreceived="20120530150007" -->
<!-- sent="Wed, 30 May 2012 10:59:43 -0400" -->
<!-- isosent="20120530145943" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] Understanding hwloc-ps output" -->
<!-- id="9E172FB7-AA66-4E2D-B078-B3D3F8A6CC40_at_cisco.com" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="4FC62976.4020100_at_inria.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-users] Understanding hwloc-ps output<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-05-30 10:59:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0639.php">John Hanks: "[hwloc-users] Hwloc error."</a>
<li><strong>Previous message:</strong> <a href="0637.php">Youri LACAN-BARTLEY: "Re: [hwloc-users] Understanding hwloc-ps output"</a>
<li><strong>In reply to:</strong> <a href="0636.php">Brice Goglin: "Re: [hwloc-users] Understanding hwloc-ps output"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Short version: 
<br>
==============
<br>
<p>OMPI 1.6.soon-to-be-1 will report *logical* hwloc core bitmasks (not PUs!).  The reasons for this are sordid and, frankly, uninteresting.  :-\
<br>
<p>Perhaps we need to update this to be something a bit more user-friendly before 1.6.1 goes final.  Hrm...
<br>
<p>More detail:
<br>
============
<br>
<p>Here's the lstopo of a node of mine that has hyperthreading enabled:
<br>
<p>-----
<br>
# Logical lstopo output
<br>
% lstopo --no-io
<br>
Machine (24GB)
<br>
&nbsp;&nbsp;NUMANode L#0 (P#0 12GB) + Socket L#0 + L3 L#0 (8192KB)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;L2 L#0 (256KB) + L1d L#0 (32KB) + L1i L#0 (32KB) + Core L#0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PU L#0 (P#0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PU L#1 (P#8)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;L2 L#1 (256KB) + L1d L#1 (32KB) + L1i L#1 (32KB) + Core L#1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PU L#2 (P#2)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PU L#3 (P#10)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;L2 L#2 (256KB) + L1d L#2 (32KB) + L1i L#2 (32KB) + Core L#2
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PU L#4 (P#4)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PU L#5 (P#12)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;L2 L#3 (256KB) + L1d L#3 (32KB) + L1i L#3 (32KB) + Core L#3
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PU L#6 (P#6)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PU L#7 (P#14)
<br>
&nbsp;&nbsp;NUMANode L#1 (P#1 12GB) + Socket L#1 + L3 L#1 (8192KB)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;L2 L#4 (256KB) + L1d L#4 (32KB) + L1i L#4 (32KB) + Core L#4
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PU L#8 (P#1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PU L#9 (P#9)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;L2 L#5 (256KB) + L1d L#5 (32KB) + L1i L#5 (32KB) + Core L#5
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PU L#10 (P#3)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PU L#11 (P#11)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;L2 L#6 (256KB) + L1d L#6 (32KB) + L1i L#6 (32KB) + Core L#6
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PU L#12 (P#5)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PU L#13 (P#13)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;L2 L#7 (256KB) + L1d L#7 (32KB) + L1i L#7 (32KB) + Core L#7
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PU L#14 (P#7)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PU L#15 (P#15)
<br>
<p># Note the physical lstopo output -- my sockets are physically ordered 
<br>
# &quot;backwards&quot; for some weird reason.  Shrug.  This is important to note 
<br>
# for the example below, however.
<br>
<p>% lstopo -p --no-io
<br>
Machine (24GB)
<br>
&nbsp;&nbsp;NUMANode P#0 (12GB) + Socket P#1 + L3 (8192KB)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;L2 (256KB) + L1d (32KB) + L1i (32KB) + Core P#0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PU P#0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PU P#8
<br>
&nbsp;&nbsp;&nbsp;&nbsp;L2 (256KB) + L1d (32KB) + L1i (32KB) + Core P#1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PU P#2
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PU P#10
<br>
&nbsp;&nbsp;&nbsp;&nbsp;L2 (256KB) + L1d (32KB) + L1i (32KB) + Core P#2
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PU P#4
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PU P#12
<br>
&nbsp;&nbsp;&nbsp;&nbsp;L2 (256KB) + L1d (32KB) + L1i (32KB) + Core P#3
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PU P#6
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PU P#14
<br>
&nbsp;&nbsp;NUMANode P#1 (12GB) + Socket P#0 + L3 (8192KB)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;L2 (256KB) + L1d (32KB) + L1i (32KB) + Core P#0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PU P#1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PU P#9
<br>
&nbsp;&nbsp;&nbsp;&nbsp;L2 (256KB) + L1d (32KB) + L1i (32KB) + Core P#1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PU P#3
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PU P#11
<br>
&nbsp;&nbsp;&nbsp;&nbsp;L2 (256KB) + L1d (32KB) + L1i (32KB) + Core P#2
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PU P#5
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PU P#13
<br>
&nbsp;&nbsp;&nbsp;&nbsp;L2 (256KB) + L1d (32KB) + L1i (32KB) + Core P#3
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PU P#7
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PU P#15
<br>
-----
<br>
<p>Here's an mpirun with --bind-to-core --bycore with the new 1.6.soon-to-be-1 stuff (but not yet committed to the v1.6 SVN branch):
<br>
<p>-----
<br>
% cat report-bindings.sh 
<br>
#!/bin/sh
<br>
<p>bitmap=`hwloc-bind --get -p`
<br>
friendly=`hwloc-calc -p -H socket.core.pu $bitmap`
<br>
<p>echo &quot;MCW rank $OMPI_COMM_WORLD_RANK (`hostname`): $friendly&quot;
<br>
exit 0
<br>
% mpirun --mca btl tcp,sm,self --report-bindings --host svbu-mpi056 --np 2 --bind-to-core --bycore ./report-bindings.sh
<br>
[svbu-mpi056:23643] [[11178,0],1] odls:default:fork binding child [[11178,1],0] to cpus 0001
<br>
[svbu-mpi056:23643] [[11178,0],1] odls:default:fork binding child [[11178,1],1] to cpus 0002
<br>
MCW rank 0 (svbu-mpi056): Socket:1.Core:0.PU:0 Socket:1.Core:0.PU:8
<br>
MCW rank 1 (svbu-mpi056): Socket:1.Core:1.PU:2 Socket:1.Core:1.PU:10
<br>
%
<br>
-----
<br>
<p>Specifically: OMPI 1.6.soon-to-be-1 is binding MCW rank 0 to both the PUs in physical socket:1.core:0, and binding MCW rank 1 to all the PUs in physical socket:1.core:1.  **Remember** My sockets are physically ordered opposite of their logical ordering; see the lstopo -p output, above.
<br>
<p>I don't remember offhand what kind of bitmask OMPI 1.4.x outputs.  I'd be kinda surprised if it binds to core X on socket A and core Y on socket B (where A != B), though...
<br>
<p>The more I think about this, the more I think that if the OMPI 1.6 series is going to have a decent shelf life (as the new stable series), we should make --report-bindings output something more user friendly.  I'll work on that.
<br>
<p>As a holdover until I get that done, note that you can configure OMPI with --enable-mpi-ext=affinity to enable the OMPI_Affinity_str() function.  See the OMPI_Affinity_str(3) man page for details.  
<br>
<p>We have an example OMPI_Affinity_str() program in OMPI 1.7 that you can compile with OMPI 1.6; it prettyprints the current bindings.  For example:
<br>
<p>-----
<br>
% wget --no-check-certificate <a href="http://svn.open-mpi.org/svn/ompi/trunk/ompi/mpiext/affinity/c/example.c">http://svn.open-mpi.org/svn/ompi/trunk/ompi/mpiext/affinity/c/example.c</a>
<br>
[...snip wget output...]
<br>
% mpicc example.c -o example
<br>
% mpirun --mca btl tcp,sm,self --report-bindings --host svbu-mpi056 --np 2 --bind-to-core --bycore ./example
<br>
[svbu-mpi056:24312] [[19149,0],1] odls:default:fork binding child [[19149,1],0] to cpus 0001
<br>
[svbu-mpi056:24312] [[19149,0],1] odls:default:fork binding child [[19149,1],1] to cpus 0002
<br>
rank 0 (resource string): 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ompi_bound: socket 0[core 0] 
<br>
&nbsp;&nbsp;current_binding: socket 0[core 0] 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;exists: socket 0 has 4 cores, socket 1 has 4 cores
<br>
rank 0 (layout): 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ompi_bound: [B . . .][. . . .]
<br>
&nbsp;&nbsp;current_binding: [B . . .][. . . .]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;exists: [. . . .][. . . .]
<br>
rank 1 (resource string): 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ompi_bound: socket 0[core 1] 
<br>
&nbsp;&nbsp;current_binding: socket 0[core 1] 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;exists: socket 0 has 4 cores, socket 1 has 4 cores
<br>
rank 1 (layout): 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ompi_bound: [. B . .][. . . .]
<br>
&nbsp;&nbsp;current_binding: [. B . .][. . . .]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;exists: [. . . .][. . . .]
<br>
%
<br>
-----
<br>
<p>Note, too, that OMPI 1.6 only lets you bind to sockets and cores, which is why the above output doesn't show hyperthreads (even though they are there, according to the lstopo output).  
<br>
<p>That being said, we have completely revamped process/processor affinity support in what will become OMPI v1.7 (i.e., the current OMPI SVN trunk).  For example, OMPI 1.7 will let you bind to hyperthreads (and caches and ...others).  If you run the same example OMPI_Affinity_str() program with what will become OMPI v1.7, the output is a little more expressive -- it shows the hyperthreads:
<br>
<p>-----
<br>
% cd &lt;my OMPI SVN trunk checkout&gt;
<br>
% cd ompi/mpiext/affinity/c
<br>
% mpicc example.c -o example
<br>
% mpirun --mca btl tcp,sm,self --report-bindings --host svbu-mpi056 --np 2 --bind-to-core ./example
<br>
[svbu-mpi056:25041] [[23016,0],1] odls:default binding child [[23016,1],0] to cpus 0,8
<br>
[svbu-mpi056:25041] [[23016,0],1] odls:default binding child [[23016,1],1] to cpus 2,10
<br>
[svbu-mpi056:25042] [[23016,1],0] is bound to cpus 0,8
<br>
[svbu-mpi056:25043] [[23016,1],1] is bound to cpus 2,10
<br>
rank 0 (resource string): 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ompi_bound: socket 1[core 0[hwt 0-1]]
<br>
&nbsp;&nbsp;current_binding: socket 1[core 0[hwt 0-1]]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;exists: socket 1 has 4 cores, each with 2 hwts; socket 0 has 4 cores, each with 2 hwts
<br>
rank 0 (layout): 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ompi_bound: [BB/../../..][../../../..]
<br>
&nbsp;&nbsp;current_binding: [BB/../../..][../../../..]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;exists: [../../../..][../../../..]
<br>
rank 1 (resource string): 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ompi_bound: socket 1[core 1[hwt 0-1]]
<br>
&nbsp;&nbsp;current_binding: socket 1[core 1[hwt 0-1]]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;exists: socket 1 has 4 cores, each with 2 hwts; socket 0 has 4 cores, each with 2 hwts
<br>
rank 1 (layout): 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ompi_bound: [../BB/../..][../../../..]
<br>
&nbsp;&nbsp;current_binding: [../BB/../..][../../../..]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;exists: [../../../..][../../../..]
<br>
%
<br>
-----
<br>
<p>I notice the --report-bindings output is a bit different in 1.7 vs. 1.6.  We should clarify this stuff, make it user-friendly, and make it the same (as much as possible) between 1.6.x and 1.7.x.  I'll work on that.
<br>
<p><p>On May 30, 2012, at 10:06 AM, Brice Goglin wrote:
<br>
<p><span class="quotelev1">&gt; Jeff,
</span><br>
<span class="quotelev1">&gt; What is the displayed bitmask in OMPI 1.6? Is it the hwloc bitmask? Or
</span><br>
<span class="quotelev1">&gt; the OMPI bitmask made of OMPI indexes?
</span><br>
<span class="quotelev1">&gt; Brice
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Le 30/05/2012 16:01, Jeff Squyres a &#233;crit :
</span><br>
<span class="quotelev2">&gt;&gt; You might want to try the OMPI tarball that is about to become OMPI v1.6.1 -- we made a bunch of affinity-related fixes, and it should be much more predictable / stable in what it does in terms of process binding:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;    <a href="http://www.open-mpi.org/~jsquyres/unofficial/">http://www.open-mpi.org/~jsquyres/unofficial/</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; (these affinity fixes are not yet in a nightly 1.6 tarball because we're testing them before they get committed to the OMPI v1.6 SVN branch)
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On May 30, 2012, at 9:54 AM, Brice Goglin wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hello Youri,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; When using openmpi 1.4.4 with --np 2 --bind-to-core --bycore&#148; it reports the following:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [hostname:03339] [[17125,0],0] odls:default:fork binding child [[17125,1],0] to cpus 0001
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [hostname:03339] [[17125,0],0] odls:default:fork binding child [[17125,1],1] to cpus 0002
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Bitmask 0001 and 0002 mean CPUs with physical indexes 0 and 1 in OMPI 1.4. So that corresponds to the first core of each socket, and that matches what hwloc-ps says. Try &quot;hwloc-ps -c&quot; should show the same bitmask.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; However, I agree that these are not adjacent cores, but I don't know enough of OMPI binding options to understand what it was supposed to do in your case.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Brice
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; hwloc-users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; hwloc-users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; hwloc-users mailing list
</span><br>
<span class="quotelev1">&gt; hwloc-users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0639.php">John Hanks: "[hwloc-users] Hwloc error."</a>
<li><strong>Previous message:</strong> <a href="0637.php">Youri LACAN-BARTLEY: "Re: [hwloc-users] Understanding hwloc-ps output"</a>
<li><strong>In reply to:</strong> <a href="0636.php">Brice Goglin: "Re: [hwloc-users] Understanding hwloc-ps output"</a>
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

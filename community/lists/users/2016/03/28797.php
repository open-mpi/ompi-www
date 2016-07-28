<?
$subject_val = "Re: [OMPI users] Strange problem with mpirun and LIGGGHTS after reboot of machine";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Mar 23 09:39:35 2016" -->
<!-- isoreceived="20160323133935" -->
<!-- sent="Wed, 23 Mar 2016 14:39:29 +0100" -->
<!-- isosent="20160323133929" -->
<!-- name="Rainer Koenig" -->
<!-- email="Rainer.Koenig_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Strange problem with mpirun and LIGGGHTS after reboot of machine" -->
<!-- id="56F29C91.2030802_at_ts.fujitsu.com" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="CAAkFZ5txp03XyxPLTzkXi8kojzLsiGh320D9vJ+3i2gng=1kzw_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Strange problem with mpirun and LIGGGHTS after reboot of machine<br>
<strong>From:</strong> Rainer Koenig (<em>Rainer.Koenig_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-03-23 09:39:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28798.php">Gilles Gouaillardet: "Re: [OMPI users] Strange problem with mpirun and LIGGGHTS after reboot of machine"</a>
<li><strong>Previous message:</strong> <a href="28796.php">Gilles Gouaillardet: "Re: [OMPI users] terrible infiniband performance for"</a>
<li><strong>In reply to:</strong> <a href="28788.php">Gilles Gouaillardet: "Re: [OMPI users] Strange problem with mpirun and LIGGGHTS after reboot of machine"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28798.php">Gilles Gouaillardet: "Re: [OMPI users] Strange problem with mpirun and LIGGGHTS after reboot of machine"</a>
<li><strong>Reply:</strong> <a href="28798.php">Gilles Gouaillardet: "Re: [OMPI users] Strange problem with mpirun and LIGGGHTS after reboot of machine"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Gilles,
<br>
<p>I managed to get snapshots of all the /proc/&lt;pid&gt;/status entries for all
<br>
liggghts jobs, but the Cpus_allowed ist similar no matter if the system
<br>
was cold or warm booted.
<br>
<p>Then I looked around in /proc/ and found sched_debug.
<br>
<p>This at least shows, that the liggghts-processes are not spread over all
<br>
cores. Some cores just have on of those, some have none and some have many.
<br>
<p>I agree that the problem that the processes are not spread over all
<br>
cores is a consequence but not the root cause. This means I now need to
<br>
find out how the kernel scheduler decides on which core a process should
<br>
run and why he can spread 48 tasks over 48 cores when I cold boot the
<br>
machine and can't when I warm boot it.
<br>
<p>So I guess I have to proceed to the linux kernel mailing list with this
<br>
issue. Another thing that points towards the kernel is that yesterday I
<br>
installed a newer 4.4.0 kernel on the machine and the problem is still
<br>
there, but not that worse than on the 4.2 kernel.
<br>
<p>I also tried mpirun -mca... but that didn't change anything.
<br>
<p>Thanks for your input anyway, at least I now have a sched_debug
<br>
snapshot, maybe that is helpful in the further investigation.
<br>
<p>Regards
<br>
Rainer
<br>
<p>Am 22.03.2016 um 14:38 schrieb Gilles Gouaillardet:
<br>
<span class="quotelev1">&gt; Rainer,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; a first step could be to gather /proc/pid/status for your 48 tasks.
</span><br>
<span class="quotelev1">&gt; then you can
</span><br>
<span class="quotelev1">&gt; grep Cpus_allowed_list
</span><br>
<span class="quotelev1">&gt; and see if you find something suspucious.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; if your processes are idling, then the scheduler might assign them to
</span><br>
<span class="quotelev1">&gt; the same core.
</span><br>
<span class="quotelev1">&gt; in this case, your processes not being spread is a consequence and not a
</span><br>
<span class="quotelev1">&gt; root cause.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; just to make sure there are no strange side effects, could you
</span><br>
<span class="quotelev1">&gt; mpirun --mca btl sm,self ...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Gilles
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Tuesday, March 22, 2016, Rainer Koenig &lt;Rainer.Koenig_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &lt;mailto:Rainer.Koenig_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     Am 17.03.2016 um 10:40 schrieb Ralph Castain:
</span><br>
<span class="quotelev2">&gt;     &gt; Just some thoughts offhand:
</span><br>
<span class="quotelev2">&gt;     &gt;
</span><br>
<span class="quotelev2">&gt;     &gt; * what version of OMPI are you using?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     dpkg -l openmpi-bin says 1.6.5-8 from Ubuntu 14.04.
</span><br>
<span class="quotelev2">&gt;     &gt;
</span><br>
<span class="quotelev2">&gt;     &gt; * are you saying that after the warm reboot, all 48 procs are
</span><br>
<span class="quotelev1">&gt;     running on a subset of cores?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     Yes. After a cold boot all 48 processses are spread over all 48 cores
</span><br>
<span class="quotelev1">&gt;     and all cores show up as almost 100% in the htop cpu meter.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     After a warm boot, the 48 processes are just spread over a few cores and
</span><br>
<span class="quotelev1">&gt;     the rest of the system is idling.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;     &gt; * it sounds like some of the cores have been marked as &#147;offline&#148;
</span><br>
<span class="quotelev1">&gt;     for some reason. Make sure you have hwloc installed on the machine,
</span><br>
<span class="quotelev1">&gt;     and run &#147;lstopo&#148; and see if that is the case
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     I tried with lstopo, but the graphics that I got look almost similar.
</span><br>
<span class="quotelev1">&gt;     The visible difference is in the sort of topology for the graphics
</span><br>
<span class="quotelev1">&gt;     adapter and the LAN cards. The path to the graphics shows 2 times the
</span><br>
<span class="quotelev1">&gt;     numbers 4,0 above the lines and the path to the eth0 shows 2 times the
</span><br>
<span class="quotelev1">&gt;     numbers 0,2 above the lines. lstopo for the warm boot looks identical,
</span><br>
<span class="quotelev1">&gt;     but those small numbers are missing now.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     I also tried with hwloc-gather-topology and diff'd the 2 results. There
</span><br>
<span class="quotelev1">&gt;     is nothing special to see. Differneces in /proc/stats/ and
</span><br>
<span class="quotelev1">&gt;     /proc/cpuinfo, but nothing special, just ohter values.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     Something is obviously wrong on a low level, but I'm still struggling to
</span><br>
<span class="quotelev1">&gt;     find it. :-/
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     Rainer
</span><br>
<span class="quotelev1">&gt;     --
</span><br>
<span class="quotelev1">&gt;     Dipl.-Inf. (FH) Rainer Koenig
</span><br>
<span class="quotelev1">&gt;     Project Manager Linux Clients
</span><br>
<span class="quotelev1">&gt;     Dept. PDG WPS R&amp;D SW OSE
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     Fujitsu Technology Solutions
</span><br>
<span class="quotelev1">&gt;     B&#252;rgermeister-Ullrich-Str. 100
</span><br>
<span class="quotelev1">&gt;     86199 Augsburg
</span><br>
<span class="quotelev1">&gt;     Germany
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     Telephone: +49-821-804-3321
</span><br>
<span class="quotelev1">&gt;     Telefax:   +49-821-804-2131
</span><br>
<span class="quotelev1">&gt;     Mail:      mailto:Rainer.Koenig_at_[hidden] &lt;javascript:;&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     Internet         ts.fujtsu.com &lt;<a href="http://ts.fujtsu.com">http://ts.fujtsu.com</a>&gt;
</span><br>
<span class="quotelev1">&gt;     Company Details  ts.fujitsu.com/imprint.html
</span><br>
<span class="quotelev1">&gt;     &lt;<a href="http://ts.fujitsu.com/imprint.html">http://ts.fujitsu.com/imprint.html</a>&gt;
</span><br>
<span class="quotelev1">&gt;     _______________________________________________
</span><br>
<span class="quotelev1">&gt;     users mailing list
</span><br>
<span class="quotelev1">&gt;     users_at_[hidden] &lt;javascript:;&gt;
</span><br>
<span class="quotelev1">&gt;     Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;     Link to this post:
</span><br>
<span class="quotelev1">&gt;     <a href="http://www.open-mpi.org/community/lists/users/2016/03/28787.php">http://www.open-mpi.org/community/lists/users/2016/03/28787.php</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/03/28788.php">http://www.open-mpi.org/community/lists/users/2016/03/28788.php</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p><p><pre>
-- 
Dipl.-Inf. (FH) Rainer Koenig
Project Manager Linux Clients
Dept. PDG WPS R&amp;D SW OSE
Fujitsu Technology Solutions
B&#252;rgermeister-Ullrich-Str. 100
86199 Augsburg
Germany
Telephone: +49-821-804-3321
Telefax:   +49-821-804-2131
Mail:      mailto:Rainer.Koenig_at_[hidden]
Internet         ts.fujtsu.com
Company Details  ts.fujitsu.com/imprint.html
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28798.php">Gilles Gouaillardet: "Re: [OMPI users] Strange problem with mpirun and LIGGGHTS after reboot of machine"</a>
<li><strong>Previous message:</strong> <a href="28796.php">Gilles Gouaillardet: "Re: [OMPI users] terrible infiniband performance for"</a>
<li><strong>In reply to:</strong> <a href="28788.php">Gilles Gouaillardet: "Re: [OMPI users] Strange problem with mpirun and LIGGGHTS after reboot of machine"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28798.php">Gilles Gouaillardet: "Re: [OMPI users] Strange problem with mpirun and LIGGGHTS after reboot of machine"</a>
<li><strong>Reply:</strong> <a href="28798.php">Gilles Gouaillardet: "Re: [OMPI users] Strange problem with mpirun and LIGGGHTS after reboot of machine"</a>
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

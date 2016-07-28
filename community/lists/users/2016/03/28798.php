<?
$subject_val = "Re: [OMPI users] Strange problem with mpirun and LIGGGHTS after reboot of machine";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Mar 23 09:49:01 2016" -->
<!-- isoreceived="20160323134901" -->
<!-- sent="Wed, 23 Mar 2016 22:48:42 +0900" -->
<!-- isosent="20160323134842" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles.gouaillardet_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Strange problem with mpirun and LIGGGHTS after reboot of machine" -->
<!-- id="CAAkFZ5tbzhB7DL0V_1QAuQ2Nq2KMw7S3U+S03F00pQugnrsLUg_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="56F29C91.2030802_at_ts.fujitsu.com" -->
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
<strong>From:</strong> Gilles Gouaillardet (<em>gilles.gouaillardet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-03-23 09:48:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28799.php">Ronald Cohen: "Re: [OMPI users] terrible infiniband performance for"</a>
<li><strong>Previous message:</strong> <a href="28797.php">Rainer Koenig: "Re: [OMPI users] Strange problem with mpirun and LIGGGHTS after reboot of machine"</a>
<li><strong>In reply to:</strong> <a href="28797.php">Rainer Koenig: "Re: [OMPI users] Strange problem with mpirun and LIGGGHTS after reboot of machine"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28753.php">Thomas Jahns: "Re: [OMPI users] Strange problem with mpirun and LIGGGHTS after reboot of machine"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Rainer,
<br>
<p>what if you explicitly bind tasks to cores ?
<br>
<p>mpirun -bind-to core ...
<br>
<p>note this is v1.8 syntax ...
<br>
v1.6 is now obsolete (Debian folks are working on upgrading it...)
<br>
<p>out of curiosity, did you try an other distro such as redhat and the likes,
<br>
suse ...
<br>
and do you observe the same behavior ?
<br>
<p>and btw, what does /proc/self/status say ?
<br>
bound to cores ? socket ? no binding at all ?
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p>On Wednesday, March 23, 2016, Rainer Koenig &lt;Rainer.Koenig_at_[hidden]&gt;
<br>
wrote:
<br>
<p><span class="quotelev1">&gt; Gilles,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I managed to get snapshots of all the /proc/&lt;pid&gt;/status entries for all
</span><br>
<span class="quotelev1">&gt; liggghts jobs, but the Cpus_allowed ist similar no matter if the system
</span><br>
<span class="quotelev1">&gt; was cold or warm booted.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Then I looked around in /proc/ and found sched_debug.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This at least shows, that the liggghts-processes are not spread over all
</span><br>
<span class="quotelev1">&gt; cores. Some cores just have on of those, some have none and some have many.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I agree that the problem that the processes are not spread over all
</span><br>
<span class="quotelev1">&gt; cores is a consequence but not the root cause. This means I now need to
</span><br>
<span class="quotelev1">&gt; find out how the kernel scheduler decides on which core a process should
</span><br>
<span class="quotelev1">&gt; run and why he can spread 48 tasks over 48 cores when I cold boot the
</span><br>
<span class="quotelev1">&gt; machine and can't when I warm boot it.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So I guess I have to proceed to the linux kernel mailing list with this
</span><br>
<span class="quotelev1">&gt; issue. Another thing that points towards the kernel is that yesterday I
</span><br>
<span class="quotelev1">&gt; installed a newer 4.4.0 kernel on the machine and the problem is still
</span><br>
<span class="quotelev1">&gt; there, but not that worse than on the 4.2 kernel.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I also tried mpirun -mca... but that didn't change anything.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks for your input anyway, at least I now have a sched_debug
</span><br>
<span class="quotelev1">&gt; snapshot, maybe that is helpful in the further investigation.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Regards
</span><br>
<span class="quotelev1">&gt; Rainer
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Am 22.03.2016 um 14:38 schrieb Gilles Gouaillardet:
</span><br>
<span class="quotelev2">&gt; &gt; Rainer,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; a first step could be to gather /proc/pid/status for your 48 tasks.
</span><br>
<span class="quotelev2">&gt; &gt; then you can
</span><br>
<span class="quotelev2">&gt; &gt; grep Cpus_allowed_list
</span><br>
<span class="quotelev2">&gt; &gt; and see if you find something suspucious.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; if your processes are idling, then the scheduler might assign them to
</span><br>
<span class="quotelev2">&gt; &gt; the same core.
</span><br>
<span class="quotelev2">&gt; &gt; in this case, your processes not being spread is a consequence and not a
</span><br>
<span class="quotelev2">&gt; &gt; root cause.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; just to make sure there are no strange side effects, could you
</span><br>
<span class="quotelev2">&gt; &gt; mpirun --mca btl sm,self ...
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Cheers,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Gilles
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Tuesday, March 22, 2016, Rainer Koenig &lt;Rainer.Koenig_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &lt;javascript:;&gt;
</span><br>
<span class="quotelev2">&gt; &gt; &lt;mailto:Rainer.Koenig_at_[hidden] &lt;javascript:;&gt;&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;     Am 17.03.2016 um 10:40 schrieb Ralph Castain:
</span><br>
<span class="quotelev3">&gt; &gt;     &gt; Just some thoughts offhand:
</span><br>
<span class="quotelev3">&gt; &gt;     &gt;
</span><br>
<span class="quotelev3">&gt; &gt;     &gt; * what version of OMPI are you using?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;     dpkg -l openmpi-bin says 1.6.5-8 from Ubuntu 14.04.
</span><br>
<span class="quotelev3">&gt; &gt;     &gt;
</span><br>
<span class="quotelev3">&gt; &gt;     &gt; * are you saying that after the warm reboot, all 48 procs are
</span><br>
<span class="quotelev2">&gt; &gt;     running on a subset of cores?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;     Yes. After a cold boot all 48 processses are spread over all 48 cores
</span><br>
<span class="quotelev2">&gt; &gt;     and all cores show up as almost 100% in the htop cpu meter.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;     After a warm boot, the 48 processes are just spread over a few cores
</span><br>
<span class="quotelev1">&gt; and
</span><br>
<span class="quotelev2">&gt; &gt;     the rest of the system is idling.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;     &gt; * it sounds like some of the cores have been marked as &#226;&#128;&#156;offline&#226;&#128;&#157;
</span><br>
<span class="quotelev2">&gt; &gt;     for some reason. Make sure you have hwloc installed on the machine,
</span><br>
<span class="quotelev2">&gt; &gt;     and run &#226;&#128;&#156;lstopo&#226;&#128;&#157; and see if that is the case
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;     I tried with lstopo, but the graphics that I got look almost similar.
</span><br>
<span class="quotelev2">&gt; &gt;     The visible difference is in the sort of topology for the graphics
</span><br>
<span class="quotelev2">&gt; &gt;     adapter and the LAN cards. The path to the graphics shows 2 times the
</span><br>
<span class="quotelev2">&gt; &gt;     numbers 4,0 above the lines and the path to the eth0 shows 2 times
</span><br>
<span class="quotelev1">&gt; the
</span><br>
<span class="quotelev2">&gt; &gt;     numbers 0,2 above the lines. lstopo for the warm boot looks
</span><br>
<span class="quotelev1">&gt; identical,
</span><br>
<span class="quotelev2">&gt; &gt;     but those small numbers are missing now.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;     I also tried with hwloc-gather-topology and diff'd the 2 results.
</span><br>
<span class="quotelev1">&gt; There
</span><br>
<span class="quotelev2">&gt; &gt;     is nothing special to see. Differneces in /proc/stats/ and
</span><br>
<span class="quotelev2">&gt; &gt;     /proc/cpuinfo, but nothing special, just ohter values.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;     Something is obviously wrong on a low level, but I'm still
</span><br>
<span class="quotelev1">&gt; struggling to
</span><br>
<span class="quotelev2">&gt; &gt;     find it. :-/
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;     Rainer
</span><br>
<span class="quotelev2">&gt; &gt;     --
</span><br>
<span class="quotelev2">&gt; &gt;     Dipl.-Inf. (FH) Rainer Koenig
</span><br>
<span class="quotelev2">&gt; &gt;     Project Manager Linux Clients
</span><br>
<span class="quotelev2">&gt; &gt;     Dept. PDG WPS R&amp;D SW OSE
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;     Fujitsu Technology Solutions
</span><br>
<span class="quotelev2">&gt; &gt;     B&#195;&#188;rgermeister-Ullrich-Str. 100
</span><br>
<span class="quotelev2">&gt; &gt;     86199 Augsburg
</span><br>
<span class="quotelev2">&gt; &gt;     Germany
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;     Telephone: +49-821-804-3321
</span><br>
<span class="quotelev2">&gt; &gt;     Telefax:   +49-821-804-2131
</span><br>
<span class="quotelev2">&gt; &gt;     Mail:      mailto:Rainer.Koenig_at_[hidden] &lt;javascript:;&gt;
</span><br>
<span class="quotelev1">&gt; &lt;javascript:;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;     Internet         ts.fujtsu.com &lt;<a href="http://ts.fujtsu.com">http://ts.fujtsu.com</a>&gt;
</span><br>
<span class="quotelev2">&gt; &gt;     Company Details  ts.fujitsu.com/imprint.html
</span><br>
<span class="quotelev2">&gt; &gt;     &lt;<a href="http://ts.fujitsu.com/imprint.html">http://ts.fujitsu.com/imprint.html</a>&gt;
</span><br>
<span class="quotelev2">&gt; &gt;     _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt;     users mailing list
</span><br>
<span class="quotelev2">&gt; &gt;     users_at_[hidden] &lt;javascript:;&gt; &lt;javascript:;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;     Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt;     Link to this post:
</span><br>
<span class="quotelev2">&gt; &gt;     <a href="http://www.open-mpi.org/community/lists/users/2016/03/28787.php">http://www.open-mpi.org/community/lists/users/2016/03/28787.php</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden] &lt;javascript:;&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/03/28788.php">http://www.open-mpi.org/community/lists/users/2016/03/28788.php</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Dipl.-Inf. (FH) Rainer Koenig
</span><br>
<span class="quotelev1">&gt; Project Manager Linux Clients
</span><br>
<span class="quotelev1">&gt; Dept. PDG WPS R&amp;D SW OSE
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Fujitsu Technology Solutions
</span><br>
<span class="quotelev1">&gt; B&#195;&#188;rgermeister-Ullrich-Str. 100
</span><br>
<span class="quotelev1">&gt; 86199 Augsburg
</span><br>
<span class="quotelev1">&gt; Germany
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Telephone: +49-821-804-3321
</span><br>
<span class="quotelev1">&gt; Telefax:   +49-821-804-2131
</span><br>
<span class="quotelev1">&gt; Mail:      mailto:Rainer.Koenig_at_[hidden] &lt;javascript:;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Internet         ts.fujtsu.com
</span><br>
<span class="quotelev1">&gt; Company Details  ts.fujitsu.com/imprint.html
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden] &lt;javascript:;&gt;
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/03/28797.php">http://www.open-mpi.org/community/lists/users/2016/03/28797.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-28798/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28799.php">Ronald Cohen: "Re: [OMPI users] terrible infiniband performance for"</a>
<li><strong>Previous message:</strong> <a href="28797.php">Rainer Koenig: "Re: [OMPI users] Strange problem with mpirun and LIGGGHTS after reboot of machine"</a>
<li><strong>In reply to:</strong> <a href="28797.php">Rainer Koenig: "Re: [OMPI users] Strange problem with mpirun and LIGGGHTS after reboot of machine"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28753.php">Thomas Jahns: "Re: [OMPI users] Strange problem with mpirun and LIGGGHTS after reboot of machine"</a>
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

<?
$subject_val = "Re: [OMPI users] Strange problem with mpirun and LIGGGHTS after reboot of machine";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar 22 09:38:12 2016" -->
<!-- isoreceived="20160322133812" -->
<!-- sent="Tue, 22 Mar 2016 22:38:09 +0900" -->
<!-- isosent="20160322133809" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles.gouaillardet_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Strange problem with mpirun and LIGGGHTS after reboot of machine" -->
<!-- id="CAAkFZ5txp03XyxPLTzkXi8kojzLsiGh320D9vJ+3i2gng=1kzw_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="56F12100.4030200_at_ts.fujitsu.com" -->
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
<strong>Date:</strong> 2016-03-22 09:38:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28789.php">Husen R: "[OMPI users] Open MPI trunk"</a>
<li><strong>Previous message:</strong> <a href="28787.php">Rainer Koenig: "Re: [OMPI users] Strange problem with mpirun and LIGGGHTS after reboot of machine"</a>
<li><strong>In reply to:</strong> <a href="28787.php">Rainer Koenig: "Re: [OMPI users] Strange problem with mpirun and LIGGGHTS after reboot of machine"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28797.php">Rainer Koenig: "Re: [OMPI users] Strange problem with mpirun and LIGGGHTS after reboot of machine"</a>
<li><strong>Reply:</strong> <a href="28797.php">Rainer Koenig: "Re: [OMPI users] Strange problem with mpirun and LIGGGHTS after reboot of machine"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Rainer,
<br>
<p>a first step could be to gather /proc/pid/status for your 48 tasks.
<br>
then you can
<br>
grep Cpus_allowed_list
<br>
and see if you find something suspucious.
<br>
<p>if your processes are idling, then the scheduler might assign them to the
<br>
same core.
<br>
in this case, your processes not being spread is a consequence and not a
<br>
root cause.
<br>
<p>just to make sure there are no strange side effects, could you
<br>
mpirun --mca btl sm,self ...
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p><p>On Tuesday, March 22, 2016, Rainer Koenig &lt;Rainer.Koenig_at_[hidden]&gt;
<br>
wrote:
<br>
<p><span class="quotelev1">&gt; Am 17.03.2016 um 10:40 schrieb Ralph Castain:
</span><br>
<span class="quotelev2">&gt; &gt; Just some thoughts offhand:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; * what version of OMPI are you using?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; dpkg -l openmpi-bin says 1.6.5-8 from Ubuntu 14.04.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; * are you saying that after the warm reboot, all 48 procs are running on
</span><br>
<span class="quotelev1">&gt; a subset of cores?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Yes. After a cold boot all 48 processses are spread over all 48 cores
</span><br>
<span class="quotelev1">&gt; and all cores show up as almost 100% in the htop cpu meter.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; After a warm boot, the 48 processes are just spread over a few cores and
</span><br>
<span class="quotelev1">&gt; the rest of the system is idling.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; * it sounds like some of the cores have been marked as &#226;&#128;&#156;offline&#226;&#128;&#157; for
</span><br>
<span class="quotelev1">&gt; some reason. Make sure you have hwloc installed on the machine, and run
</span><br>
<span class="quotelev1">&gt; &#226;&#128;&#156;lstopo&#226;&#128;&#157; and see if that is the case
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I tried with lstopo, but the graphics that I got look almost similar.
</span><br>
<span class="quotelev1">&gt; The visible difference is in the sort of topology for the graphics
</span><br>
<span class="quotelev1">&gt; adapter and the LAN cards. The path to the graphics shows 2 times the
</span><br>
<span class="quotelev1">&gt; numbers 4,0 above the lines and the path to the eth0 shows 2 times the
</span><br>
<span class="quotelev1">&gt; numbers 0,2 above the lines. lstopo for the warm boot looks identical,
</span><br>
<span class="quotelev1">&gt; but those small numbers are missing now.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I also tried with hwloc-gather-topology and diff'd the 2 results. There
</span><br>
<span class="quotelev1">&gt; is nothing special to see. Differneces in /proc/stats/ and
</span><br>
<span class="quotelev1">&gt; /proc/cpuinfo, but nothing special, just ohter values.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Something is obviously wrong on a low level, but I'm still struggling to
</span><br>
<span class="quotelev1">&gt; find it. :-/
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Rainer
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/03/28787.php">http://www.open-mpi.org/community/lists/users/2016/03/28787.php</a>
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-28788/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28789.php">Husen R: "[OMPI users] Open MPI trunk"</a>
<li><strong>Previous message:</strong> <a href="28787.php">Rainer Koenig: "Re: [OMPI users] Strange problem with mpirun and LIGGGHTS after reboot of machine"</a>
<li><strong>In reply to:</strong> <a href="28787.php">Rainer Koenig: "Re: [OMPI users] Strange problem with mpirun and LIGGGHTS after reboot of machine"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28797.php">Rainer Koenig: "Re: [OMPI users] Strange problem with mpirun and LIGGGHTS after reboot of machine"</a>
<li><strong>Reply:</strong> <a href="28797.php">Rainer Koenig: "Re: [OMPI users] Strange problem with mpirun and LIGGGHTS after reboot of machine"</a>
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

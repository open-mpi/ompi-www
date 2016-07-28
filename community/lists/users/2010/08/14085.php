<?
$subject_val = "Re: [OMPI users] IMB-MPI broadcast test stalls for large core counts: debug ideas?";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Aug 22 22:57:31 2010" -->
<!-- isoreceived="20100823025731" -->
<!-- sent="Sun, 22 Aug 2010 19:57:25 -0700 (PDT)" -->
<!-- isosent="20100823025725" -->
<!-- name="Randolph Pullen" -->
<!-- email="randolph_pullen_at_[hidden]" -->
<!-- subject="Re: [OMPI users] IMB-MPI broadcast test stalls for large core counts: debug ideas?" -->
<!-- id="772866.51641.qm_at_web50803.mail.re2.yahoo.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="AANLkTi=NHYq+RfLMp9ymxbwRjH+Vjwn2oi5kP0hAVe-k_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] IMB-MPI broadcast test stalls for large core counts: debug ideas?<br>
<strong>From:</strong> Randolph Pullen (<em>randolph_pullen_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-08-22 22:57:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14086.php">Philippe: "Re: [OMPI users] MPI process dies with a route error when using dynamic process calls to connect more than 2 clients to a server with InfiniBand"</a>
<li><strong>Previous message:</strong> <a href="14084.php">ananda.mudar_at_[hidden]: "Re: [OMPI users] Checkpointing mpi4py program (Probably bcast issue)"</a>
<li><strong>In reply to:</strong> <a href="14082.php">Rahul Nabar: "[OMPI users] IMB-MPI broadcast test stalls for large core counts: debug ideas?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14089.php">Rahul Nabar: "Re: [OMPI users] IMB-MPI broadcast test stalls for large core counts: debug ideas?"</a>
<li><strong>Reply:</strong> <a href="14089.php">Rahul Nabar: "Re: [OMPI users] IMB-MPI broadcast test stalls for large core counts: debug ideas?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Its a long shot but could it be related to the total data volume ?
<br>
ie&#160; 524288 * 80 = 41943040 bytes active in the cluster
<br>
<p>Can you exceed this 41943040 data volume with a smaller message repeated more often or a larger one less often?
<br>
<p><p>--- On Fri, 20/8/10, Rahul Nabar &lt;rpnabar_at_[hidden]&gt; wrote:
<br>
<p>From: Rahul Nabar &lt;rpnabar_at_[hidden]&gt;
<br>
Subject: [OMPI users] IMB-MPI broadcast test stalls for large core counts: debug ideas?
<br>
To: &quot;Open MPI Users&quot; &lt;users_at_[hidden]&gt;
<br>
Received: Friday, 20 August, 2010, 12:03 PM
<br>
<p>My Intel IMB-MPI tests stall, but only in very specific cases:larger
<br>
packet sizes + large core counts. Only happens for bcast, gather and
<br>
exchange tests. Only for the larger core counts (~256 cores). Other
<br>
tests like pingpong and sendrecev run fine even with larger core
<br>
counts.
<br>
<p>e.g. This bcast test hangs consistently at the 524288 bytes packet
<br>
size when invoked on 256 cores. Same test runs fine on 128 cores.
<br>
<p>NP=256;mpirun&#160; -np $NP --host [ 32_HOSTS_8_core_each]&#160; -mca btl
<br>
openib,sm,self&#160; &#160; /mpitests/imb/src/IMB-MPI1 -npmin $NP&#160; bcast
<br>
<p>&#160; &#160; &#160;&#160;&#160;#bytes #repetitions&#160; t_min[usec]&#160; t_max[usec]&#160; t_avg[usec]
<br>
&#160; &#160; &#160; &#160; &#160; &#160; 0&#160; &#160; &#160; &#160;&#160;&#160;1000&#160; &#160; &#160; &#160;&#160;&#160;0.02&#160; &#160; &#160; &#160;&#160;&#160;0.02&#160; &#160; &#160; &#160;&#160;&#160;0.02
<br>
&#160; &#160; &#160; &#160; &#160; &#160; 1&#160; &#160; &#160; &#160; &#160; 130&#160; &#160; &#160; &#160; 26.94&#160; &#160; &#160; &#160; 27.59&#160; &#160; &#160; &#160; 27.25
<br>
&#160; &#160; &#160; &#160; &#160; &#160; 2&#160; &#160; &#160; &#160; &#160; 130&#160; &#160; &#160; &#160; 26.44&#160; &#160; &#160; &#160; 27.09&#160; &#160; &#160; &#160; 26.77
<br>
&#160; &#160; &#160; &#160; &#160; &#160; 4&#160; &#160; &#160; &#160; &#160; 130&#160; &#160; &#160; &#160; 75.98&#160; &#160; &#160; &#160; 81.07&#160; &#160; &#160; &#160; 76.75
<br>
&#160; &#160; &#160; &#160; &#160; &#160; 8&#160; &#160; &#160; &#160; &#160; 130&#160; &#160; &#160; &#160; 28.41&#160; &#160; &#160; &#160; 29.06&#160; &#160; &#160; &#160; 28.74
<br>
&#160; &#160; &#160; &#160; &#160;&#160;&#160;16&#160; &#160; &#160; &#160; &#160; 130&#160; &#160; &#160; &#160; 28.70&#160; &#160; &#160; &#160; 29.39&#160; &#160; &#160; &#160; 29.03
<br>
&#160; &#160; &#160; &#160; &#160;&#160;&#160;32&#160; &#160; &#160; &#160; &#160; 130&#160; &#160; &#160; &#160; 28.48&#160; &#160; &#160; &#160; 29.15&#160; &#160; &#160; &#160; 28.85
<br>
&#160; &#160; &#160; &#160; &#160;&#160;&#160;64&#160; &#160; &#160; &#160; &#160; 130&#160; &#160; &#160; &#160; 30.10&#160; &#160; &#160; &#160; 30.86&#160; &#160; &#160; &#160; 30.48
<br>
&#160; &#160; &#160; &#160; &#160; 128&#160; &#160; &#160; &#160; &#160; 130&#160; &#160; &#160; &#160; 31.62&#160; &#160; &#160; &#160; 32.41&#160; &#160; &#160; &#160; 32.01
<br>
&#160; &#160; &#160; &#160; &#160; 256&#160; &#160; &#160; &#160; &#160; 130&#160; &#160; &#160; &#160; 31.08&#160; &#160; &#160; &#160; 31.72&#160; &#160; &#160; &#160; 31.42
<br>
&#160; &#160; &#160; &#160; &#160; 512&#160; &#160; &#160; &#160; &#160; 130&#160; &#160; &#160; &#160; 31.79&#160; &#160; &#160; &#160; 32.58&#160; &#160; &#160; &#160; 32.13
<br>
&#160; &#160; &#160; &#160;&#160;&#160;1024&#160; &#160; &#160; &#160; &#160; 130&#160; &#160; &#160; &#160; 33.22&#160; &#160; &#160; &#160; 34.06&#160; &#160; &#160; &#160; 33.65
<br>
&#160; &#160; &#160; &#160;&#160;&#160;2048&#160; &#160; &#160; &#160; &#160; 130&#160; &#160; &#160; &#160; 66.21&#160; &#160; &#160; &#160; 67.61&#160; &#160; &#160; &#160; 67.21
<br>
&#160; &#160; &#160; &#160;&#160;&#160;4096&#160; &#160; &#160; &#160; &#160; 130&#160; &#160; &#160; &#160; 79.14&#160; &#160; &#160; &#160; 80.86&#160; &#160; &#160; &#160; 80.37
<br>
&#160; &#160; &#160; &#160;&#160;&#160;8192&#160; &#160; &#160; &#160; &#160; 130&#160; &#160; &#160;&#160;&#160;103.38&#160; &#160; &#160;&#160;&#160;105.21&#160; &#160; &#160;&#160;&#160;104.70
<br>
&#160; &#160; &#160; &#160; 16384&#160; &#160; &#160; &#160; &#160; 130&#160; &#160; &#160;&#160;&#160;160.82&#160; &#160; &#160;&#160;&#160;163.67&#160; &#160; &#160;&#160;&#160;162.97
<br>
&#160; &#160; &#160; &#160; 32768&#160; &#160; &#160; &#160; &#160; 130&#160; &#160; &#160;&#160;&#160;516.11&#160; &#160; &#160;&#160;&#160;541.75&#160; &#160; &#160;&#160;&#160;533.46
<br>
&#160; &#160; &#160; &#160; 65536&#160; &#160; &#160; &#160; &#160; 130&#160; &#160; &#160; 1044.09&#160; &#160; &#160; 1063.63&#160; &#160; &#160; 1052.88
<br>
&#160; &#160; &#160;&#160;&#160;131072&#160; &#160; &#160; &#160; &#160; 130&#160; &#160; &#160; 1740.09&#160; &#160; &#160; 1750.12&#160; &#160; &#160; 1746.78
<br>
&#160; &#160; &#160;&#160;&#160;262144&#160; &#160; &#160; &#160; &#160; 130&#160; &#160; &#160; 3587.23&#160; &#160; &#160; 3598.52&#160; &#160; &#160; 3594.52
<br>
&#160; &#160; &#160;&#160;&#160;524288&#160; &#160; &#160; &#160; &#160;&#160;&#160;80&#160; &#160; &#160; 4000.99&#160; &#160; &#160; 6669.65&#160; &#160; &#160; 5737.78
<br>
stalls for at least 5 minutes at this point when I killed the test.
<br>
<p>I did more extensive testing for various combinations of test-type and
<br>
core counts (see below). I know exactly when the tests fail but I
<br>
still cannot see a trend from this data. Any points or further debug
<br>
ideas? I do have padb installed and have collected core dumps if that
<br>
is going to help? One example below:
<br>
<p><a href="http://dl.dropbox.com/u/118481/padb.log.new.new.txt">http://dl.dropbox.com/u/118481/padb.log.new.new.txt</a>
<br>
<p>System Details:
<br>
Intel Nehalem 2.2 GHz
<br>
10Gig Ethernet Chelsio Cards and Cisco Nexus Switch. Using the OFED drivers.
<br>
CentOS 5.4
<br>
Open MPI: 1.4.1 / Open RTE: 1.4.1 / OPAL: 1.4.1
<br>
<p><p>------------------------------------------------------------------
<br>
bcast:
<br>
&#160; &#160; NP256&#160; &#160; hangs
<br>
&#160; &#160; NP128&#160; &#160; OK
<br>
<p>Note: &quot;bcast&quot; mostly hangs at:
<br>
<p>&#160; &#160; &#160;&#160;&#160;#bytes #repetitions&#160; t_min[usec]&#160; t_max[usec]&#160; t_avg[usec]
<br>
&#160; &#160; &#160;&#160;&#160;524288&#160; &#160; &#160; &#160; &#160;&#160;&#160;80&#160; &#160; &#160; 2682.61&#160; &#160; &#160; 4408.94&#160; &#160; &#160; 3880.68
<br>
------------------------------------------------------------------
<br>
sendrecv:
<br>
&#160; &#160; NP256&#160; &#160; OK
<br>
------------------------------------------------------------------
<br>
gather:
<br>
&#160; &#160; NP256&#160; &#160; hangs
<br>
&#160; &#160; NP128&#160; &#160; hangs
<br>
&#160; &#160; NP64&#160; &#160; hangs
<br>
&#160; &#160; NP32&#160; &#160; OK
<br>
<p>Note: &quot;gather&quot; always hangs at the following line of the test:
<br>
&#160; &#160; &#160;&#160;&#160;#bytes #repetitions&#160; t_min[usec]&#160; t_max[usec]&#160; t_avg[usec]
<br>
[snip]
<br>
&#160; &#160; &#160; &#160;&#160;&#160;4096&#160; &#160; &#160; &#160;&#160;&#160;1000&#160; &#160; &#160;&#160;&#160;525.80&#160; &#160; &#160;&#160;&#160;527.69&#160; &#160; &#160;&#160;&#160;526.79
<br>
------------------------------------------------------------------
<br>
exchange:
<br>
&#160; &#160; NP256&#160; &#160; hangs
<br>
&#160; &#160; NP128&#160; &#160; OK
<br>
<p>Note: &quot;exchange&quot; always hangs at:
<br>
<p>#bytes #repetitions&#160; t_min[usec]&#160; t_max[usec]&#160; t_avg[usec]&#160;&#160;&#160;Mbytes/sec
<br>
8192&#160; &#160; &#160; &#160;&#160;&#160;1000&#160; &#160; &#160;&#160;&#160;109.65&#160; &#160; &#160;&#160;&#160;110.79&#160; &#160; &#160;&#160;&#160;110.37&#160; &#160; &#160;&#160;&#160;282.08
<br>
------------------------------------------------------------------
<br>
<p>Note: I kept the --host string the same (all 32 servers) and just
<br>
changed the NPMIN. Just in case this matters for how the procs are
<br>
mapped out
<br>
_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-14085/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14086.php">Philippe: "Re: [OMPI users] MPI process dies with a route error when using dynamic process calls to connect more than 2 clients to a server with InfiniBand"</a>
<li><strong>Previous message:</strong> <a href="14084.php">ananda.mudar_at_[hidden]: "Re: [OMPI users] Checkpointing mpi4py program (Probably bcast issue)"</a>
<li><strong>In reply to:</strong> <a href="14082.php">Rahul Nabar: "[OMPI users] IMB-MPI broadcast test stalls for large core counts: debug ideas?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14089.php">Rahul Nabar: "Re: [OMPI users] IMB-MPI broadcast test stalls for large core counts: debug ideas?"</a>
<li><strong>Reply:</strong> <a href="14089.php">Rahul Nabar: "Re: [OMPI users] IMB-MPI broadcast test stalls for large core counts: debug ideas?"</a>
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

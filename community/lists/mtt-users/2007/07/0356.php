<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Jul 17 10:52:38 2007" -->
<!-- isoreceived="20070717145238" -->
<!-- sent="Tue, 17 Jul 2007 17:54:25 +0300" -->
<!-- isosent="20070717145425" -->
<!-- name="Shai Venter" -->
<!-- email="venters_at_[hidden]" -->
<!-- subject="[MTT users] Some mtt,mpi issues for newbie" -->
<!-- id="6C2C79E72C305246B504CBA17B5500C901E738AA_at_mtlexch01.mtl.com" -->
<!-- charset="US-ASCII" -->
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
<strong>From:</strong> Shai Venter (<em>venters_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-07-17 10:54:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0357.php">Jeff Squyres: "Re: [MTT users] Some mtt,mpi issues for newbie"</a>
<li><strong>Previous message:</strong> <a href="0355.php">Jeff Squyres: "[MTT users] MTT OMPI results"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0357.php">Jeff Squyres: "Re: [MTT users] Some mtt,mpi issues for newbie"</a>
<li><strong>Reply:</strong> <a href="0357.php">Jeff Squyres: "Re: [MTT users] Some mtt,mpi issues for newbie"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello Mr. Squyres, Team,
<br>
&nbsp;
<br>
I know you guys are busy. Any attention to my questions will be mostly
<br>
appreciated.
<br>
Is there a FAQ for mtt? May be some of my Q have been answered before.
<br>
&nbsp;
<br>
I intend to run mtt and test some performance over Infiniband. My setup
<br>
is a 2-Dell uni-core machines (i.e.: sw160,sw170) running SLES10.0. Each
<br>
host has an Infiniband HCA Card installed. Each HCA Card has 2 Physical
<br>
ports which are assigned unique IP's (i.e.: 11.4.3.160,12.4.3.160 and
<br>
11.4.3.170,12.4.3.170 respectively)
<br>
Ports are connected back-to-back (port1 &lt;-&gt; port1 and port2 &lt;-&gt; port2)
<br>
&nbsp;
<br>
&nbsp;
<br>
Q #1: Can I override INI file value for hostlist in command line? If
<br>
yes, please provide example.
<br>
&nbsp;
<br>
Q #2: In your opinion, what should I specify to hostlist in order to run
<br>
mpi jobs over my Infiniband fabric? 
<br>
Is it hostlist = sw160 sw170 
<br>
Is it hostlist = 11.4.3.160 12.4.3.160 11.4.3.170 12.4.3.170
<br>
&nbsp;
<br>
Q #3: How do I determine which Interfaces mpi uses? 
<br>
&nbsp;
<br>
&nbsp;
<br>
Q #4: How can I determine max num of processes for my setup? In the case
<br>
of hostlist = sw160 sw170 , mtt will evaluate max_np to 2.
<br>
In the case of hostlist = 11.4.3.160 12.4.3.160 11.4.3.170 12.4.3.170 ,
<br>
max_np will result to 4.
<br>
&nbsp;
<br>
Q #5: I what terms can I ask mtt to use a local scratch directory on one
<br>
of the host' s hard drive  as oppose to some shared scratch folder on
<br>
Network file system.
<br>
&nbsp;
<br>
Shai Venter
<br>
Q.A
<br>
Mellanox Technologies, Ltd.
<br>
www.mellanox.com
<br>
+972 (0)4  9097200 ext. 252
<br>
+972 (0)50 2888637
<br>
&nbsp;
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/mtt-users/att-0356/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0357.php">Jeff Squyres: "Re: [MTT users] Some mtt,mpi issues for newbie"</a>
<li><strong>Previous message:</strong> <a href="0355.php">Jeff Squyres: "[MTT users] MTT OMPI results"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0357.php">Jeff Squyres: "Re: [MTT users] Some mtt,mpi issues for newbie"</a>
<li><strong>Reply:</strong> <a href="0357.php">Jeff Squyres: "Re: [MTT users] Some mtt,mpi issues for newbie"</a>
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

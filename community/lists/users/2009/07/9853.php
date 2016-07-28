<?
$subject_val = "Re: [OMPI users] Configuration problem or network problem?";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jul  6 23:33:42 2009" -->
<!-- isoreceived="20090707033342" -->
<!-- sent="Tue, 7 Jul 2009 11:33:13 +0800" -->
<!-- isosent="20090707033313" -->
<!-- name="Zou, Lin (GE, Research, Consultant)" -->
<!-- email="Lin.Zou_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Configuration problem or network problem?" -->
<!-- id="0332CB5EB6327940B291055AAD964221048FDE02_at_SHAMLVEM02.e2k.ad.ge.com" -->
<!-- charset="gb2312" -->
<!-- inreplyto="A0845651-E6B4-40E5-8802-4C5FF47F83C2_at_rain.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] Configuration problem or network problem?<br>
<strong>From:</strong> Zou, Lin (GE, Research, Consultant) (<em>Lin.Zou_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-07-06 23:33:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9854.php">rahmani: "[OMPI users] bulding rpm"</a>
<li><strong>Previous message:</strong> <a href="9852.php">Terry Frankcombe: "Re: [OMPI users] MPI and C++ (Boost)"</a>
<li><strong>In reply to:</strong> <a href="9849.php">Doug Reeder: "Re: [OMPI users] Configuration problem or network problem?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9866.php">Jeff Squyres: "Re: [OMPI users] Configuration problem or network problem?"</a>
<li><strong>Reply:</strong> <a href="9866.php">Jeff Squyres: "Re: [OMPI users] Configuration problem or network problem?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
&nbsp;
<br>
Thank you for your suggestion, I tried this solution, but it doesn't work. In fact, the headnode doesn't participate the computing and communication, it only malloc a large a memory, and when the loop in every PS3 is over, the headnode gather the data from every PS3.
<br>
The strange thing is that sometimes the program can work well, but when reboot the system, without any change to the program, it can't work, so I think it should be some mechanism in OpenMPI that can configure to let the program work well.
<br>
&nbsp;
<br>
Lin
<br>
<p>________________________________
<br>
<p>From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] On Behalf Of Doug Reeder
<br>
Sent: 2009&#196;&#234;7&#212;&#194;7&#200;&#213; 10:49
<br>
To: Open MPI Users
<br>
Subject: Re: [OMPI users] Configuration problem or network problem?
<br>
<p><p>Lin, 
<br>
<p>Try -np 16 and not running on the head node.
<br>
<p>Doug Reeder
<br>
<p>On Jul 6, 2009, at 7:08 PM, Zou, Lin (GE, Research, Consultant) wrote:
<br>
<p><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Hi all,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;The system I use is a PS3 cluster, with 16 PS3s and a PowerPC as a headnode, they are connected by a high speed switch.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;There are point-to-point communication functions( MPI_Send and MPI_Recv ), the data size is about 40KB, and a lot of computings which will consume a long time(about 1 sec)in a loop.The co-processor in PS3 can take care of the computation, the main processor take care of point-to-point communication,so the computing and communication can overlap.The communication funtions should return much faster than computing function.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;My question is that after some circles, the time consumed by communication functions in a PS3 will increase heavily, and the whole cluster's sync state will corrupt.When I decrease the computing time, this situation just disappeare.I am very confused about this.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;I think there is a mechanism in OpenMPI that cause this case, does everyone get this situation before? 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;I use &quot;mpirun --mca btl tcp, self -np 17 --hostfile ...&quot;, is there something i should added?
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Lin
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;_______________________________________________
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;users mailing list
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;users_at_[hidden]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
<p><p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-9853/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9854.php">rahmani: "[OMPI users] bulding rpm"</a>
<li><strong>Previous message:</strong> <a href="9852.php">Terry Frankcombe: "Re: [OMPI users] MPI and C++ (Boost)"</a>
<li><strong>In reply to:</strong> <a href="9849.php">Doug Reeder: "Re: [OMPI users] Configuration problem or network problem?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9866.php">Jeff Squyres: "Re: [OMPI users] Configuration problem or network problem?"</a>
<li><strong>Reply:</strong> <a href="9866.php">Jeff Squyres: "Re: [OMPI users] Configuration problem or network problem?"</a>
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

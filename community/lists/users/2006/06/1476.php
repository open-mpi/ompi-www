<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Jun 28 07:59:13 2006" -->
<!-- isoreceived="20060628115913" -->
<!-- sent="Wed, 28 Jun 2006 07:59:01 -0400" -->
<!-- isosent="20060628115901" -->
<!-- name="Jeff Squyres \(jsquyres\)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] rsh/ssh is work but mpirun hang ?" -->
<!-- id="C835B9C9CB0F1C4E9DA48913C9E8F8AFAE95C1_at_xmb-rtp-215.amer.cisco.com" -->
<!-- charset="GB2312" -->
<!-- inreplyto="[OMPI users] rsh/ssh is work but mpirun hang ?" -->
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
<strong>From:</strong> Jeff Squyres \(jsquyres\) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-06-28 07:59:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1477.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] Fw: OpenMPI version 1.1"</a>
<li><strong>Previous message:</strong> <a href="1475.php">Frank: "Re: [OMPI users] OpenMPI 1.1: Signal:10 info.si_errno:0(Unknown error:	0), si_code:1(BUS_ADRALN) (Frank)"</a>
<li><strong>Maybe in reply to:</strong> <a href="1457.php">shen T.T.: "[OMPI users] rsh/ssh is work but mpirun hang ?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1480.php">shen T.T.: "Re: [OMPI users] rsh/ssh is work but mpirun hang ?"</a>
<li><strong>Reply:</strong> <a href="1480.php">shen T.T.: "Re: [OMPI users] rsh/ssh is work but mpirun hang ?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Can you provide a little more information?
<br>
&nbsp;
<br>
What exactly are you trying to mpirun across multiple nodes?  Is it an MPI application or a non-MPI application?  For example, can you mpirun &quot;hostname&quot; (i.e., the Unix hostname utility) across multiple nodes successfully?
<br>
&nbsp;
<br>
If you're trying to mpirun a user application, what application is it?  Can you mpirun a trivial MPI application (e.g., hello world) successfully?
<br>
&nbsp;
<br>
Thanks.
<br>
<p><p>________________________________
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] On Behalf Of shen T.T.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Sent: Wednesday, June 21, 2006 11:01 AM
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;To: users_at_[hidden]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Subject: [OMPI users] rsh/ssh is work but mpirun hang ?
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;I have installed the openmpi -1.0.2 on the Fedora Core5 operating system. I use the Intel Fortran compiler. I can rsh/ssh  to the other processor in our cluster( 2 PC's , 4cores). I can mpirun on a processor itself successfully. When i mpirun on  2 PC's, after entering the password, the program will be hung!  
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Does anyone encounter this problem?How do i check and fix it?
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Thanks in advance 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Vincent
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;___________________________________________________ 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&#215;&#238;&#208;&#194;&#176;&#230; Yahoo!&#198;&#230;&#196;&#166;&#188;&#180;&#149;r&#205;&#168;&#211;&#141; 7.0&#163;&#172;&#195;&#226;&#217;M&#190;W&#194;&#183;&#235;&#138;&#212;&#146;&#200;&#206;&#196;&#227;&#180;&#242;&#163;&#161; 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://messenger.yahoo.com.tw/">http://messenger.yahoo.com.tw/</a>
<br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-1476/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1477.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] Fw: OpenMPI version 1.1"</a>
<li><strong>Previous message:</strong> <a href="1475.php">Frank: "Re: [OMPI users] OpenMPI 1.1: Signal:10 info.si_errno:0(Unknown error:	0), si_code:1(BUS_ADRALN) (Frank)"</a>
<li><strong>Maybe in reply to:</strong> <a href="1457.php">shen T.T.: "[OMPI users] rsh/ssh is work but mpirun hang ?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1480.php">shen T.T.: "Re: [OMPI users] rsh/ssh is work but mpirun hang ?"</a>
<li><strong>Reply:</strong> <a href="1480.php">shen T.T.: "Re: [OMPI users] rsh/ssh is work but mpirun hang ?"</a>
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

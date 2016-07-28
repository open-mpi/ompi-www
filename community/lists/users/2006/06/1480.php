<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Jun 28 09:10:20 2006" -->
<!-- isoreceived="20060628131020" -->
<!-- sent="Wed, 28 Jun 2006 21:09:10 +0800 (CST)" -->
<!-- isosent="20060628130910" -->
<!-- name="shen T.T." -->
<!-- email="life_floating_at_[hidden]" -->
<!-- subject="Re: [OMPI users] rsh/ssh is work but mpirun hang ?" -->
<!-- id="20060628130910.78831.qmail_at_web17906.mail.tpe.yahoo.com" -->
<!-- charset="big5" -->
<!-- inreplyto="C835B9C9CB0F1C4E9DA48913C9E8F8AFAE95C1_at_xmb-rtp-215.amer.cisco.com" -->
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
<strong>From:</strong> shen T.T. (<em>life_floating_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-06-28 09:09:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1481.php">Jeff Squyres \(jsquyres\): "[OMPI users] FW: mpi_allreduce error"</a>
<li><strong>Previous message:</strong> <a href="1479.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] Installing OpenMPI on a solaris"</a>
<li><strong>In reply to:</strong> <a href="1476.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] rsh/ssh is work but mpirun hang ?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1482.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] rsh/ssh is work but mpirun hang ?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
If i mpirun the MPI application--'hello world' on a single computer(dual core) itself, it is work. But it can't be successful when i mpirun it across multiple nodes. The rsh/ssh agent is work, i can rsh/ssh to other nodes.Everytime i mpirun 'hostname' , the remote rsh/ssh agent ask for the password.I enter the password but the Openmpi is hang. It is just hang and nothing else.
<br>
&nbsp;&nbsp;I don't know what happen to my Openmpi enviroment or operating system.
<br>
&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;Would you ever encount this problem?  
<br>
&nbsp;&nbsp;
<br>
Vincent
<br>
&quot;Jeff Squyres (jsquyres)&quot; &lt;jsquyres_at_[hidden]&gt; &#187;&#161;&#161;G
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Can you provide a little more information?
<br>
&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;What exactly are you trying to mpirun across multiple nodes?  Is it an MPI application or a non-MPI application?  For example, can you mpirun &quot;hostname&quot; (i.e., the Unix hostname utility) across multiple nodes successfully?
<br>
&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;If you're trying to mpirun a user application, what application is it?  Can you mpirun a trivial MPI application (e.g., hello world) successfully?
<br>
&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;Thanks.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
---------------------------------
<br>
&nbsp;&nbsp;From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] On Behalf Of shen T.T.
<br>
Sent: Wednesday, June 21, 2006 11:01 AM
<br>
To: users_at_[hidden]
<br>
Subject: [OMPI users] rsh/ssh is work but mpirun hang ?
<br>
<p><p>&nbsp;&nbsp;
<br>
&nbsp;&nbsp;I have installed the openmpi -1.0.2 on the Fedora Core5 operating system. I use the Intel Fortran compiler. I can rsh/ssh  to the other processor in our cluster( 2 PC's , 4cores). I can mpirun on a processor itself successfully. When i mpirun on  2 PC's, after entering the password, the program will be hung!  
<br>
&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;Does anyone encounter this problem?How do i check and fix it?
<br>
&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;Thanks in advance 
<br>
&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;Vincent
<br>
&nbsp;&nbsp;___________________________________________________ 
<br>
&#215;&#238;&#208;&#194;&#176;&#230; Yahoo!&#198;&#230;&#196;&#166;&#188;&#180;&#149;r&#205;&#168;? 7.0&#163;&#172;&#195;&#226;&#217;M&#190;W&#194;&#183;??&#200;&#206;&#196;&#227;&#180;&#242;&#163;&#161; 
<br>
<a href="http://messenger.yahoo.com.tw/">http://messenger.yahoo.com.tw/</a>
<br>
_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
<p>&nbsp;___________________________________________________ 
<br>
&nbsp;&#179;&#204;&#183;s&#170;&#169; Yahoo!&#169;_&#188;&#175;&#167;Y&#174;&#201;&#179;q&#176;T 7.0&#161;A&#167;K&#182;O&#186;&#244;&#184;&#244;&#185;q&#184;&#220;&#165;&#244;&#167;A&#165;&#180;&#161;I 
<br>
&nbsp;<a href="http://messenger.yahoo.com.tw/">http://messenger.yahoo.com.tw/</a>
<br>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-1480/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1481.php">Jeff Squyres \(jsquyres\): "[OMPI users] FW: mpi_allreduce error"</a>
<li><strong>Previous message:</strong> <a href="1479.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] Installing OpenMPI on a solaris"</a>
<li><strong>In reply to:</strong> <a href="1476.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] rsh/ssh is work but mpirun hang ?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1482.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] rsh/ssh is work but mpirun hang ?"</a>
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

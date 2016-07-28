<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Jun 28 09:16:04 2006" -->
<!-- isoreceived="20060628131604" -->
<!-- sent="Wed, 28 Jun 2006 09:15:53 -0400" -->
<!-- isosent="20060628131553" -->
<!-- name="Jeff Squyres \(jsquyres\)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] rsh/ssh is work but mpirun hang ?" -->
<!-- id="C835B9C9CB0F1C4E9DA48913C9E8F8AFAE960B_at_xmb-rtp-215.amer.cisco.com" -->
<!-- charset="utf-8" -->
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
<strong>Date:</strong> 2006-06-28 09:15:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1483.php">openmpi-user: "Re: [OMPI users] users Digest, Vol 317, Issue 4"</a>
<li><strong>Previous message:</strong> <a href="1481.php">Jeff Squyres \(jsquyres\): "[OMPI users] FW: mpi_allreduce error"</a>
<li><strong>Maybe in reply to:</strong> <a href="1457.php">shen T.T.: "[OMPI users] rsh/ssh is work but mpirun hang ?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
This *may* be due to stdio blocking issues (e.g., not getting the password/passphrase to ssh properly, so the application never actually launches on the remote node).
<br>
&nbsp;
<br>
The first thing I would do is find out why you are getting prompted for a password.  Open MPI requires that you are not prompted -- check out our FAQ on the issue:
<br>
&nbsp;
<br>
<a href="http://www.open-mpi.org/faq/?category=rsh">http://www.open-mpi.org/faq/?category=rsh</a>
<br>
&nbsp;
<br>
In particular:
<br>
&nbsp;
<br>
<a href="http://www.open-mpi.org/faq/?category=rsh#ssh-keys">http://www.open-mpi.org/faq/?category=rsh#ssh-keys</a>
<br>
&nbsp;
<br>
Once you get that going, try OMPI's mpirun again and see if it works without hanging.  I'd first try launching non-MPI applications such as &quot;hostname&quot; or &quot;uptime&quot;.  If those work, then try your MPI hello world program.
<br>

<br>

<br>
________________________________
<br>

<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] On Behalf Of shen T.T.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Sent: Wednesday, June 28, 2006 9:09 AM
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;To: Open MPI Users
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Subject: Re: [OMPI users] rsh/ssh is work but mpirun hang ?
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;If i mpirun the MPI application--'hello world' on a single computer(dual core) itself, it is work. But it can't be successful when i mpirun it across multiple nodes. The rsh/ssh agent is work, i can rsh/ssh to other nodes.Everytime i mpirun 'hostname' , the remote rsh/ssh agent ask for the password.I enter the password but the Openmpi is hang. It is just hang and nothing else.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;I don't know what happen to my Openmpi enviroment or operating system.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Would you ever encount this problem?  
<br>

<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Vincent
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&quot;Jeff Squyres (jsquyres)&quot; &lt;jsquyres_at_[hidden]&gt; &#232;&#170;&#170;&#239;&#188;&#154;
<br>

<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Can you provide a little more information?
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;What exactly are you trying to mpirun across multiple nodes?  Is it an MPI application or a non-MPI application?  For example, can you mpirun &quot;hostname&quot; (i.e., the Unix hostname utility) across multiple nodes successfully?
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;If you're trying to mpirun a user application, what application is it?  Can you mpirun a trivial MPI application (e.g., hello world) successfully?
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Thanks.
<br>

<br>

<br>
________________________________
<br>

<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] On Behalf Of shen T.T.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Sent: Wednesday, June 21, 2006 11:01 AM
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;To: users_at_[hidden]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Subject: [OMPI users] rsh/ssh is work but mpirun hang ?
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;I have installed the openmpi -1.0.2 on the Fedora Core5 operating system. I use the Intel Fortran compiler. I can rsh/ssh  to the other processor in our cluster( 2 PC's , 4cores). I can mpirun on a processor itself successfully. When i mpirun on  2 PC's, after entering the password, the program will be hung!  
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Does anyone encounter this problem?How do i check and fix it?
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Thanks in advance 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Vincent
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;___________________________________________________ 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&#233;&#131;&#148;&#233;&#153;&#148;&#229;&#148;&#179; Yahoo!&#239;&#155;&#182;&#232;&#151;&#187;&#230;&#146;&#136;&#238;&#158;&#142;&#231;&#177;&#181;? 7.0&#227;&#132;&#155;&#232;&#189;&#142;&#230;&#132;&#144;&#233;&#139;&#146;&#231;&#185;&#154;??&#239;&#160;&#152;&#230;&#150;&#149;&#230;&#185;&#150;&#227;&#132;&#144; 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://messenger.yahoo.com.tw/">http://messenger.yahoo.com.tw/</a>
<br>

<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;_______________________________________________
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;users mailing list
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;users_at_[hidden]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>

<br>

<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;___________________________________________________ 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&#230;&#156;&#128;&#230;&#150;&#176;&#231;&#137;&#136; Yahoo!&#229;&#165;&#135;&#230;&#145;&#169;&#229;&#141;&#179;&#230;&#153;&#130;&#233;&#128;&#154;&#232;&#168;&#138; 7.0&#239;&#188;&#140;&#229;&#133;&#141;&#232;&#178;&#187;&#231;&#182;&#178;&#232;&#183;&#175;&#233;&#155;&#187;&#232;&#169;&#177;&#228;&#187;&#187;&#228;&#189;&#160;&#230;&#137;&#147;&#239;&#188;&#129; 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://messenger.yahoo.com.tw/">http://messenger.yahoo.com.tw/</a>
<br>

<br>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-1482/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1483.php">openmpi-user: "Re: [OMPI users] users Digest, Vol 317, Issue 4"</a>
<li><strong>Previous message:</strong> <a href="1481.php">Jeff Squyres \(jsquyres\): "[OMPI users] FW: mpi_allreduce error"</a>
<li><strong>Maybe in reply to:</strong> <a href="1457.php">shen T.T.: "[OMPI users] rsh/ssh is work but mpirun hang ?"</a>
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

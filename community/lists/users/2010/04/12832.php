<?
$subject_val = "Re: [OMPI users] mpirun works locally but not through network";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr 28 06:29:05 2010" -->
<!-- isoreceived="20100428102905" -->
<!-- sent="Wed, 28 Apr 2010 05:28:59 -0500" -->
<!-- isosent="20100428102859" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpirun works locally but not through network" -->
<!-- id="58D723FE08DC6A4398E6596E38F3FA17056770_at_XMB-RCD-205.cisco.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="814403.65601.qm_at_web24006.mail.ird.yahoo.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] mpirun works locally but not through network<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-04-28 06:28:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12833.php">Terry Dontje: "Re: [OMPI users] MPI_ABORT was invoked on rank 0 in communicator MPI_COMM_WORLD with errorcode 0."</a>
<li><strong>Previous message:</strong> <a href="12831.php">Nguyen Kim Son: "Re: [OMPI users] mpirun works locally but not through network"</a>
<li><strong>In reply to:</strong> <a href="12831.php">Nguyen Kim Son: "Re: [OMPI users] mpirun works locally but not through network"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12847.php">Nguyen Kim Son: "Re: [OMPI users] mpirun works locally but not through network"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
So processes are running - good. The hang might then be occurring in the tcp wireup of mpi communications (ompi only lazily creates connections between processes). 
<br>

<br>
What is the tcp setup between the two machines? (Ipaddr, netmask, etc.) Do you have any firewall software running? 
<br>

<br>
-jms 
<br>
Sent from my PDA. No type good.
<br>

<br>
________________________________
<br>

<br>
From: users-bounces_at_[hidden] &lt;users-bounces_at_[hidden]&gt; 
<br>
To: Open MPI Users &lt;users_at_[hidden]&gt; 
<br>
Sent: Wed Apr 28 04:08:23 2010
<br>
Subject: Re: [OMPI users] mpirun works locally but not through network 
<br>

<br>

<br>
Thanks for your suggestion !
<br>
&quot;$ mpirun --host localhost,name_of_distant_machine hostname&quot; works.
<br>
In fact, the simple programs that prints &quot; I am process # &quot; always works. Problem arises only if there is communication between process which are lying on two different computers.
<br>

<br>
I don't think it is a problem of ssh/rsh because it works well if i put only name_of_distant_machine in the  --host. Maybe because of the two computers are virtuals and the network by default for mpirun is eth0 and not eth1 ?
<br>

<br>
Son.
<br>

<br>

<br>
--- En date de : Mar 27.4.10, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; a &#195;&#169;crit :
<br>

<br>

<br>

<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;De: Jeff Squyres &lt;jsquyres_at_[hidden]&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Objet: Re: [OMPI users] mpirun works locally but not through network
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&#195;&#128;: &quot;Open MPI Users&quot; &lt;users_at_[hidden]&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Date: Mardi 27 avril 2010, 7h46
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;I'm not intimately familiar with boost++ -- you might want to try the &quot;hello world&quot; and &quot;ring&quot; example programs in the OMPI examples/ directory as a baseline.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Additionally, try executing a non-MPI program such as &quot;hostname&quot; to verify that your remote connectivity is working.  For example:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$ mpirun --host localhost,name_of_distant_machine hostname
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;You should see the output of both &quot;hostname&quot; executions.  If you don't, check the process table and see if OMPI is trying to ssh or rsh over to the remote host, and see what is happening on the remote host.  E.g., is that rsh or ssh being blocked?  Or is it actually executing on the remote machine and hanging?  Or ...?
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Ensure that you have the same version of OMPI installed on both machines and that both are in your default search PATH for non-interactive logins.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Once you get something like &quot;hostname&quot; to work, it's much more likely that an MPI application will also work.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;On Apr 27, 2010, at 10:19 AM, Nguyen Kim Son wrote:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
<span class="quotelev1">	&gt; Hi all,
</span><br>
<span class="quotelev1">	&gt; 
</span><br>
<span class="quotelev1">	&gt; I'am writing a small program where the process of rank 0 sends &quot;alo alo&quot; to the process of rank 1 and then process 1 will show this message on screen. I am using boost++ library but result stays the same when I use the MPI standard.
</span><br>
<span class="quotelev1">	&gt; The program work locally ( that means: mpirun --host localhost), on the distant machine (mpirun --host name_of_distant_machine) but not on both ( mpirun --host localhost, name_of_distant_machine). There is no error message so i don't have any idea to resolve this.
</span><br>
<span class="quotelev1">	&gt; The machine I am running is a virtual one, and the distant machine too.
</span><br>
<span class="quotelev1">	&gt; Thank you in advance!
</span><br>
<span class="quotelev1">	&gt; 
</span><br>
<span class="quotelev1">	&gt; Son.
</span><br>
<span class="quotelev1">	&gt; 
</span><br>
<span class="quotelev1">	&gt; Nguyen Kim Son.
</span><br>
<span class="quotelev1">	&gt; Antibes, France
</span><br>
<span class="quotelev1">	&gt; Tel: +336 48 28 37 47
</span><br>
<span class="quotelev1">	&gt; 
</span><br>
<span class="quotelev1">	&gt; &lt;alo_example.cpp&gt;_______________________________________________
</span><br>
<span class="quotelev1">	&gt; users mailing list
</span><br>
<span class="quotelev1">	&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">	&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-- 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Jeff Squyres
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;jsquyres_at_[hidden]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;For corporate legal information go to:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;_______________________________________________
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;users mailing list
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;users_at_[hidden]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>

<br>

<br>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-12832/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12833.php">Terry Dontje: "Re: [OMPI users] MPI_ABORT was invoked on rank 0 in communicator MPI_COMM_WORLD with errorcode 0."</a>
<li><strong>Previous message:</strong> <a href="12831.php">Nguyen Kim Son: "Re: [OMPI users] mpirun works locally but not through network"</a>
<li><strong>In reply to:</strong> <a href="12831.php">Nguyen Kim Son: "Re: [OMPI users] mpirun works locally but not through network"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12847.php">Nguyen Kim Son: "Re: [OMPI users] mpirun works locally but not through network"</a>
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

<?
$subject_val = "Re: [OMPI users] &quot;ssh: connect to host XXX.XXX.XXX.XX port 22: connection timed out&quot; errors during mpirun";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jun  5 17:24:25 2013" -->
<!-- isoreceived="20130605212425" -->
<!-- sent="Wed, 5 Jun 2013 14:24:16 -0700" -->
<!-- isosent="20130605212416" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] &amp;quot;ssh: connect to host XXX.XXX.XXX.XX port 22: connection timed out&amp;quot; errors during mpirun" -->
<!-- id="50EFD51F-65ED-4CB9-B5CE-47AB6495C77F_at_open-mpi.org" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CANxn1WVpEVrLPpi2E8sCjFxXTYBYucg8Q_Yk-Ruxyo5Kp1jMUg_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] &quot;ssh: connect to host XXX.XXX.XXX.XX port 22: connection timed out&quot; errors during mpirun<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-06-05 17:24:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22035.php">Murthy, Mahalakshmi (GE Global Research, consultant): "Re: [OMPI users] openmpi-lsb_launch failed"</a>
<li><strong>Previous message:</strong> <a href="22033.php">Jeff Squyres (jsquyres): "Re: [OMPI users] problem with -lmpi"</a>
<li><strong>In reply to:</strong> <a href="22021.php">vacate: "[OMPI users] &quot;ssh: connect to host XXX.XXX.XXX.XX port 22: connection timed out&quot; errors during mpirun"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22056.php">vacate: "Re: [OMPI users] &quot;ssh: connect to host XXX.XXX.XXX.XX port 22: connection timed out&quot; errors during mpirun"</a>
<li><strong>Reply:</strong> <a href="22056.php">vacate: "Re: [OMPI users] &quot;ssh: connect to host XXX.XXX.XXX.XX port 22: connection timed out&quot; errors during mpirun"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
It has nothing to do with OMPI - this is an ssh issue. I suspect you are simply overwhelming the connection system.
<br>
<p>Maybe you could tell us what you are actually trying to accomplish - running thousands of mpiruns in parallel seems a tad extreme.
<br>
<p>On Jun 4, 2013, at 9:48 AM, vacate &lt;vacatehoping_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hello everyone,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; After solving my first ssh_exchange_identification problem, 
</span><br>
<span class="quotelev1">&gt; I feel embarrassed to ask my another problem... :'((
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I got some &quot;ssh: connect to host XXX.XXX.XXX.XX port 22: connection timed out&quot; errors 
</span><br>
<span class="quotelev1">&gt; when I mpirun over 2000 times almost at the same time.
</span><br>
<span class="quotelev1">&gt; ---
</span><br>
<span class="quotelev1">&gt; my bash shell script file :
</span><br>
<span class="quotelev1">&gt;    for (( index=0; index&lt;2000 ; index++))
</span><br>
<span class="quotelev1">&gt;       do
</span><br>
<span class="quotelev1">&gt;           (time mpirun --hostfile my_hostfile openMPI_test &amp;) &gt;&gt; file 2&gt;&amp;1
</span><br>
<span class="quotelev1">&gt;       done
</span><br>
<span class="quotelev1">&gt; ---
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; But not &quot;always&quot; got this problem, just &quot;often&quot;.(It seldom works well.)
</span><br>
<span class="quotelev1">&gt; In addition, the amount of &quot;timed out&quot; error in each test are different.
</span><br>
<span class="quotelev1">&gt; (In 2000 times, this error happened between 0~200 times)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I try to google it,
</span><br>
<span class="quotelev1">&gt; but I can't find anyone have this ssh problem when he/she use a lot of ssh connections...
</span><br>
<span class="quotelev1">&gt; So I think maybe someone here have had the same problem as mine.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ----------------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The following are some of my settings that I have tried to change :
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 1. net.ipv4.tcp_fin_timeout=180
</span><br>
<span class="quotelev1">&gt; <a href="http://askubuntu.com/questions/21182/how-to-change-the-default-timeout-of-internet-connection">http://askubuntu.com/questions/21182/how-to-change-the-default-timeout-of-internet-connection</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 2. sudo iptables -A INPUT -p tcp --dport ssh -j ACCEPT
</span><br>
<span class="quotelev1">&gt; <a href="http://www.serkey.com/ubuntu-ssh-connection-timed-out-due-to-firewall-behgct.html">http://www.serkey.com/ubuntu-ssh-connection-timed-out-due-to-firewall-behgct.html</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ----------------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; but these changes still didn't solve my problem... 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I still can't figure out where is the problem and are there some potential problems :(((
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If someone here have any idea about this situation ,or have had the same problem as mine?
</span><br>
<span class="quotelev1">&gt; Is it my machine problem or system problem? Or OpenMPI can't let me do something like this?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Really hope someone can give me a hand ..
</span><br>
<span class="quotelev1">&gt; Thank you all very very very much!!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Best Wishes,
</span><br>
<span class="quotelev1">&gt; Jen
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-22034/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22035.php">Murthy, Mahalakshmi (GE Global Research, consultant): "Re: [OMPI users] openmpi-lsb_launch failed"</a>
<li><strong>Previous message:</strong> <a href="22033.php">Jeff Squyres (jsquyres): "Re: [OMPI users] problem with -lmpi"</a>
<li><strong>In reply to:</strong> <a href="22021.php">vacate: "[OMPI users] &quot;ssh: connect to host XXX.XXX.XXX.XX port 22: connection timed out&quot; errors during mpirun"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22056.php">vacate: "Re: [OMPI users] &quot;ssh: connect to host XXX.XXX.XXX.XX port 22: connection timed out&quot; errors during mpirun"</a>
<li><strong>Reply:</strong> <a href="22056.php">vacate: "Re: [OMPI users] &quot;ssh: connect to host XXX.XXX.XXX.XX port 22: connection timed out&quot; errors during mpirun"</a>
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

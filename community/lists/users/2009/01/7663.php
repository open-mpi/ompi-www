<?
$subject_val = "[OMPI users] Need help in setting up openmpi on multiple clusters";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan  8 02:02:46 2009" -->
<!-- isoreceived="20090108070246" -->
<!-- sent="Thu, 8 Jan 2009 12:32:39 +0530" -->
<!-- isosent="20090108070239" -->
<!-- name="gaurav gupta" -->
<!-- email="1989.gaurav_at_[hidden]" -->
<!-- subject="[OMPI users] Need help in setting up openmpi on multiple clusters" -->
<!-- id="f4e1c520901072302y5f51ed3eoec4a5ad0bce098ab_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] Need help in setting up openmpi on multiple clusters<br>
<strong>From:</strong> gaurav gupta (<em>1989.gaurav_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-01-08 02:02:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7664.php">jody: "Re: [OMPI users] Need help in setting up openmpi on multiple clusters"</a>
<li><strong>Previous message:</strong> <a href="7662.php">Biagio Lucini: "Re: [OMPI users] Problem with openmpi and infiniband"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7664.php">jody: "Re: [OMPI users] Need help in setting up openmpi on multiple clusters"</a>
<li><strong>Reply:</strong> <a href="7664.php">jody: "Re: [OMPI users] Need help in setting up openmpi on multiple clusters"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I am new to mpi programming and openmpi. I have installed openmpi and run
<br>
several sample programmes on single machine. But while running on several
<br>
nodes it is showing errors.
<br>
<p>I have configured openmpi and automated login to all nodes with user mpi.
<br>
Now on master i tried to run by &quot;mpiexec -np 4 -host n1,n2,n3,n4 a.out&quot;
<br>
where n1,n2,n3 and n4 are four nodes on which i have enabled automatic
<br>
login. Now I am getting error :
<br>
<p>Failed to find the following executable:
<br>
<p>Host:       server1.tm.local
<br>
Executable: a.out
<br>
<p>Cannot continue.
<br>
<p>Now my problem is this should I copy this executable to all nodes ??? If yes
<br>
then how will it work, because I am not expecting any value from user all
<br>
parameters are generated in a.out itself.
<br>
<p>Please help me out what is the problem here and what should i do.
<br>
<p>Thanks in advance.
<br>
<p><pre>
-- 
GAURAV GUPTA
B.Tech III Yr. , Department of Computer Science &amp; Engineering
IT BHU , Varanasi
Contacts
Phone No: +91-99569-49491
e-mail :
gaurav.gupta_at_[hidden]
gaurav.gupta.cse06_at_[hidden]
1989.gaurav_at_[hidden]
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-7663/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7664.php">jody: "Re: [OMPI users] Need help in setting up openmpi on multiple clusters"</a>
<li><strong>Previous message:</strong> <a href="7662.php">Biagio Lucini: "Re: [OMPI users] Problem with openmpi and infiniband"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7664.php">jody: "Re: [OMPI users] Need help in setting up openmpi on multiple clusters"</a>
<li><strong>Reply:</strong> <a href="7664.php">jody: "Re: [OMPI users] Need help in setting up openmpi on multiple clusters"</a>
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

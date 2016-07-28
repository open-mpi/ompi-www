<?
$subject_val = "Re: [OMPI users] run orterun with more than 200 processes";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Mar  2 14:14:27 2012" -->
<!-- isoreceived="20120302191427" -->
<!-- sent="Fri, 2 Mar 2012 11:14:10 -0800" -->
<!-- isosent="20120302191410" -->
<!-- name="Jianzhang He" -->
<!-- email="jhe_at_[hidden]" -->
<!-- subject="Re: [OMPI users] run orterun with more than 200 processes" -->
<!-- id="17407EDD41F37540967107FACCF7AEFB3935A9DA09_at_SP2-EX07VS02.ds.corp.yahoo.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CF769CBA-D801-44F5-884F-2875311CB4FC_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] run orterun with more than 200 processes<br>
<strong>From:</strong> Jianzhang He (<em>jhe_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-03-02 14:14:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18672.php">Ralph Castain: "Re: [OMPI users] run orterun with more than 200 processes"</a>
<li><strong>Previous message:</strong> <a href="18670.php">Ralph Castain: "Re: [OMPI users] Hybrid OpenMPI / OpenMP programming"</a>
<li><strong>In reply to:</strong> <a href="18657.php">Ralph Castain: "Re: [OMPI users] run orterun with more than 200 processes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18672.php">Ralph Castain: "Re: [OMPI users] run orterun with more than 200 processes"</a>
<li><strong>Reply:</strong> <a href="18672.php">Ralph Castain: "Re: [OMPI users] run orterun with more than 200 processes"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Sorry that I did not make it clear. Actually, we are able to run in this way with less than 100 processes.
<br>
I put  'hostname1.domain.com&lt;<a href="http://hostname1.domain.com">http://hostname1.domain.com</a>&gt;,1,2,3,4,5,6,7,8,9,.....,196,197,198,199' in a hostfile and it does not work. I wonder what might be the equivalent format in a hostfile.
<br>
<p>Thaks,
<br>
Jianzhang
<br>
<p>From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] On Behalf Of Ralph Castain
<br>
Sent: Thursday, March 01, 2012 3:05 PM
<br>
To: Open MPI Users
<br>
Subject: Re: [OMPI users] run orterun with more than 200 processes
<br>
<p>You might try putting that list of hosts in a hostfile instead of on the cmd line - you may be hitting some limits there.
<br>
<p>I also don't believe that you can add an orted in that manner - orterun will have no idea how it got there and is likely to abort.
<br>
<p>On Mar 1, 2012, at 3:20 PM, Jianzhang He wrote:
<br>
<p><p>Hi,
<br>
<p>I am not sure if this is the right place to post this question. If you know where it is appropriate, please let me know.
<br>
<p>I need to run application that  launches 200 processes with the command:
<br>
1)    orterun --prefix ./ -np 200 -wd ./ -host hostname1.domain.com&lt;<a href="http://hostname1.domain.com">http://hostname1.domain.com</a>&gt;,1,2,3,4,5,6,7,8,9,.....,196,197,198,199  CMD
<br>
<p>Later,  I will run a command to communicate with 1) with a command like:
<br>
<p>2)    orted -mca ess env -mca orte_ess_ -mca orte_ess_vpid 100 -mca orte_ess_num_procs 200 --hnp-uri &quot;job#;tcp:/ hostname1.domain.com&lt;<a href="http://hostname1.domain.com">http://hostname1.domain.com</a>&gt; /:port#&quot;
<br>
<p>The problem I have is I can only run with about 100 nodes. If the number is higher, 1) will not invoke CMD and the total number of processes is about 130 or so.
<br>
<p>My question is how to remove that limit?
<br>
<p>Thanks in advance.
<br>
<p>Jianzhang
<br>
<p>_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-18671/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18672.php">Ralph Castain: "Re: [OMPI users] run orterun with more than 200 processes"</a>
<li><strong>Previous message:</strong> <a href="18670.php">Ralph Castain: "Re: [OMPI users] Hybrid OpenMPI / OpenMP programming"</a>
<li><strong>In reply to:</strong> <a href="18657.php">Ralph Castain: "Re: [OMPI users] run orterun with more than 200 processes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18672.php">Ralph Castain: "Re: [OMPI users] run orterun with more than 200 processes"</a>
<li><strong>Reply:</strong> <a href="18672.php">Ralph Castain: "Re: [OMPI users] run orterun with more than 200 processes"</a>
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

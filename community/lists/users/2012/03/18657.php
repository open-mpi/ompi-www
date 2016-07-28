<?
$subject_val = "Re: [OMPI users] run orterun with more than 200 processes";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar  1 18:05:34 2012" -->
<!-- isoreceived="20120301230534" -->
<!-- sent="Thu, 1 Mar 2012 16:05:26 -0700" -->
<!-- isosent="20120301230526" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] run orterun with more than 200 processes" -->
<!-- id="CF769CBA-D801-44F5-884F-2875311CB4FC_at_open-mpi.org" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="17407EDD41F37540967107FACCF7AEFB3935A9D8FB_at_SP2-EX07VS02.ds.corp.yahoo.com" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-03-01 18:05:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18658.php">Abhinav Sarje: "Re: [OMPI users] compilation error with pgcc Unknown switch"</a>
<li><strong>Previous message:</strong> <a href="18656.php">Ralph Castain: "Re: [OMPI users] orted daemon not found! --- environment not passed to slave nodes"</a>
<li><strong>In reply to:</strong> <a href="18654.php">Jianzhang He: "[OMPI users] run orterun with more than 200 processes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18671.php">Jianzhang He: "Re: [OMPI users] run orterun with more than 200 processes"</a>
<li><strong>Reply:</strong> <a href="18671.php">Jianzhang He: "Re: [OMPI users] run orterun with more than 200 processes"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
You might try putting that list of hosts in a hostfile instead of on the cmd line - you may be hitting some limits there.
<br>
<p>I also don't believe that you can add an orted in that manner - orterun will have no idea how it got there and is likely to abort.
<br>
<p>On Mar 1, 2012, at 3:20 PM, Jianzhang He wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; I am not sure if this is the right place to post this question. If you know where it is appropriate, please let me know.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; I need to run application that  launches 200 processes with the command:
</span><br>
<span class="quotelev1">&gt; 1)    orterun --prefix ./ -np 200 -wd ./ -host hostname1.domain.com,1,2,3,4,5,6,7,8,9,&#133;..,196,197,198,199  CMD
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Later,  I will run a command to communicate with 1) with a command like:
</span><br>
<span class="quotelev1">&gt; 2)    orted -mca ess env -mca orte_ess_ -mca orte_ess_vpid 100 -mca orte_ess_num_procs 200 --hnp-uri &quot;job#;tcp:/ hostname1.domain.com /:port#&quot;
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; The problem I have is I can only run with about 100 nodes. If the number is higher, 1) will not invoke CMD and the total number of processes is about 130 or so.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; My question is how to remove that limit?
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Thanks in advance.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Jianzhang
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-18657/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18658.php">Abhinav Sarje: "Re: [OMPI users] compilation error with pgcc Unknown switch"</a>
<li><strong>Previous message:</strong> <a href="18656.php">Ralph Castain: "Re: [OMPI users] orted daemon not found! --- environment not passed to slave nodes"</a>
<li><strong>In reply to:</strong> <a href="18654.php">Jianzhang He: "[OMPI users] run orterun with more than 200 processes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18671.php">Jianzhang He: "Re: [OMPI users] run orterun with more than 200 processes"</a>
<li><strong>Reply:</strong> <a href="18671.php">Jianzhang He: "Re: [OMPI users] run orterun with more than 200 processes"</a>
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

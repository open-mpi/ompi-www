<?
$subject_val = "[OMPI users] run orterun with more than 200 processes";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar  1 17:21:04 2012" -->
<!-- isoreceived="20120301222104" -->
<!-- sent="Thu, 1 Mar 2012 14:20:34 -0800" -->
<!-- isosent="20120301222034" -->
<!-- name="Jianzhang He" -->
<!-- email="jhe_at_[hidden]" -->
<!-- subject="[OMPI users] run orterun with more than 200 processes" -->
<!-- id="17407EDD41F37540967107FACCF7AEFB3935A9D8FB_at_SP2-EX07VS02.ds.corp.yahoo.com" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [OMPI users] run orterun with more than 200 processes<br>
<strong>From:</strong> Jianzhang He (<em>jhe_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-03-01 17:20:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18655.php">Yiguang Yan: "Re: [OMPI users] orted daemon not found! --- environment not passed to slave nodes"</a>
<li><strong>Previous message:</strong> <a href="18653.php">Jeffrey Squyres: "Re: [OMPI users] orted daemon not found! --- environment not passed to slave nodes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18657.php">Ralph Castain: "Re: [OMPI users] run orterun with more than 200 processes"</a>
<li><strong>Reply:</strong> <a href="18657.php">Ralph Castain: "Re: [OMPI users] run orterun with more than 200 processes"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I am not sure if this is the right place to post this question. If you know where it is appropriate, please let me know.
<br>
<p>I need to run application that  launches 200 processes with the command:
<br>
<p>1)    orterun --prefix ./ -np 200 -wd ./ -host hostname1.domain.com,1,2,3,4,5,6,7,8,9,.....,196,197,198,199  CMD
<br>
<p>Later,  I will run a command to communicate with 1) with a command like:
<br>
<p>2)    orted -mca ess env -mca orte_ess_ -mca orte_ess_vpid 100 -mca orte_ess_num_procs 200 --hnp-uri &quot;job#;tcp:/ hostname1.domain.com /:port#&quot;
<br>
<p>The problem I have is I can only run with about 100 nodes. If the number is higher, 1) will not invoke CMD and the total number of processes is about 130 or so.
<br>
<p>My question is how to remove that limit?
<br>
<p>Thanks in advance.
<br>
<p>Jianzhang
<br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-18654/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18655.php">Yiguang Yan: "Re: [OMPI users] orted daemon not found! --- environment not passed to slave nodes"</a>
<li><strong>Previous message:</strong> <a href="18653.php">Jeffrey Squyres: "Re: [OMPI users] orted daemon not found! --- environment not passed to slave nodes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18657.php">Ralph Castain: "Re: [OMPI users] run orterun with more than 200 processes"</a>
<li><strong>Reply:</strong> <a href="18657.php">Ralph Castain: "Re: [OMPI users] run orterun with more than 200 processes"</a>
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

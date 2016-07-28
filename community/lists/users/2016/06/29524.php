<?
$subject_val = "Re: [OMPI users] Why communication performance change with binding PEs?";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jun 23 00:36:33 2016" -->
<!-- isoreceived="20160623043633" -->
<!-- sent="Thu, 23 Jun 2016 13:36:31 +0900" -->
<!-- isosent="20160623043631" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Why communication performance change with binding PEs?" -->
<!-- id="9a80c3a2-3b51-e3eb-ae69-9a99e30719a4_at_rist.or.jp" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="CA+ssbKVpTXCMnu=Rzct_vCLOqydoF6oVJOpnhaop70pi9L=SqA_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Why communication performance change with binding PEs?<br>
<strong>From:</strong> Gilles Gouaillardet (<em>gilles_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-06-23 00:36:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29525.php">Ralph Castain: "Re: [OMPI users] Shared Libraries"</a>
<li><strong>Previous message:</strong> <a href="29523.php">Saliya Ekanayake: "[OMPI users] Why communication performance change with binding PEs?"</a>
<li><strong>In reply to:</strong> <a href="29523.php">Saliya Ekanayake: "[OMPI users] Why communication performance change with binding PEs?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29529.php">Saliya Ekanayake: "Re: [OMPI users] Why communication performance change with binding PEs?"</a>
<li><strong>Reply:</strong> <a href="29529.php">Saliya Ekanayake: "Re: [OMPI users] Why communication performance change with binding PEs?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Can you please provide more details on your config, how test are 
<br>
performed and the results ?
<br>
<p><p>to be fair, you should only compare cases in which mpi tasks are bound 
<br>
to the same sockets.
<br>
<p>for example, if socket0 has core[0-7] and socket1 has core[8-15]
<br>
<p>it is fair to compare {task0,task1} bound on
<br>
<p>{0,8}, {[0-1],[8-9]}, {[0-7],[8-15]}
<br>
<p>but it is unfair to compare
<br>
<p>{0,1} and {0,8} or {[0-7],[8-15]}
<br>
<p>since {0,1} does not involve traffic on the QPI, but {0,8} does.
<br>
<p>depending on the btl you are using, it might involve or not an other 
<br>
&quot;helper&quot; thread.
<br>
if your task is bound on one core, and assuming there is no SMT, then 
<br>
the task and the helper do time sharing.
<br>
but if the task is bound on more than one core, then the task and the 
<br>
helper run in parallel.
<br>
<p><p>Cheers,
<br>
<p>Gilles
<br>
On 6/23/2016 1:21 PM, Saliya Ekanayake wrote:
<br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am trying to understand this peculiar behavior where the 
</span><br>
<span class="quotelev1">&gt; communication time in OpenMPI changes depending on the number of 
</span><br>
<span class="quotelev1">&gt; process elements (cores) the process is bound to.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Is this expected?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thank you,
</span><br>
<span class="quotelev1">&gt; saliya
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Saliya Ekanayake
</span><br>
<span class="quotelev1">&gt; Ph.D. Candidate | Research Assistant
</span><br>
<span class="quotelev1">&gt; School of Informatics and Computing | Digital Science Center
</span><br>
<span class="quotelev1">&gt; Indiana University, Bloomington
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/06/29523.php">http://www.open-mpi.org/community/lists/users/2016/06/29523.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-29524/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29525.php">Ralph Castain: "Re: [OMPI users] Shared Libraries"</a>
<li><strong>Previous message:</strong> <a href="29523.php">Saliya Ekanayake: "[OMPI users] Why communication performance change with binding PEs?"</a>
<li><strong>In reply to:</strong> <a href="29523.php">Saliya Ekanayake: "[OMPI users] Why communication performance change with binding PEs?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29529.php">Saliya Ekanayake: "Re: [OMPI users] Why communication performance change with binding PEs?"</a>
<li><strong>Reply:</strong> <a href="29529.php">Saliya Ekanayake: "Re: [OMPI users] Why communication performance change with binding PEs?"</a>
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

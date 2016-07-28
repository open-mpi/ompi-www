<?
$subject_val = "[OMPI users] Troubleshooting mpirun with tree spawn hang";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Apr 11 00:50:11 2014" -->
<!-- isoreceived="20140411045011" -->
<!-- sent="Fri, 11 Apr 2014 12:50:10 +0800" -->
<!-- isosent="20140411045010" -->
<!-- name="Anthony Alba" -->
<!-- email="ascanio.alba7_at_[hidden]" -->
<!-- subject="[OMPI users] Troubleshooting mpirun with tree spawn hang" -->
<!-- id="CADkWibdU3NzCNdxxGmgrBdkXauUDa5cLm-v1Kqk4PX_cd4Aaig_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] Troubleshooting mpirun with tree spawn hang<br>
<strong>From:</strong> Anthony Alba (<em>ascanio.alba7_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-04-11 00:50:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24150.php">Saliya Ekanayake: "Re: [OMPI users] Optimal mapping/binding when threads are used?"</a>
<li><strong>Previous message:</strong> <a href="24148.php">Ralph Castain: "Re: [OMPI users] Optimal mapping/binding when threads are used?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24154.php">Ralph Castain: "Re: [OMPI users] Troubleshooting mpirun with tree spawn hang"</a>
<li><strong>Reply:</strong> <a href="24154.php">Ralph Castain: "Re: [OMPI users] Troubleshooting mpirun with tree spawn hang"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Is there a way to troubleshoot
<br>
plm_rsh_no_tree_spawn=true hang?
<br>
<p>I have a set of passwordless-ssh nodes, each node can ssh into any other.,
<br>
i.e.,
<br>
<p>for h1 in A B C D; do for h2 in A B C D; do ssh $h1 ssh $h2 hostname; done;
<br>
done
<br>
<p>works perfectly.
<br>
<p>Generally tree spawn works, however there is one host where
<br>
launching  mpirun with tree spawn hangs as soon as there are 6 or more host
<br>
(with launch node also in the host list). If the launcher is not in the
<br>
host list the hang happens with five hosts.
<br>
<p><p>- Anthony
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-24149/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24150.php">Saliya Ekanayake: "Re: [OMPI users] Optimal mapping/binding when threads are used?"</a>
<li><strong>Previous message:</strong> <a href="24148.php">Ralph Castain: "Re: [OMPI users] Optimal mapping/binding when threads are used?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24154.php">Ralph Castain: "Re: [OMPI users] Troubleshooting mpirun with tree spawn hang"</a>
<li><strong>Reply:</strong> <a href="24154.php">Ralph Castain: "Re: [OMPI users] Troubleshooting mpirun with tree spawn hang"</a>
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

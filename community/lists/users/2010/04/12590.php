<?
$subject_val = "[OMPI users] Using a rankfile for ompi-restart";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Apr  8 13:34:10 2010" -->
<!-- isoreceived="20100408173410" -->
<!-- sent="Thu, 8 Apr 2010 14:34:05 -0300" -->
<!-- isosent="20100408173405" -->
<!-- name="Fernando Lemos" -->
<!-- email="fernandotcl_at_[hidden]" -->
<!-- subject="[OMPI users] Using a rankfile for ompi-restart" -->
<!-- id="w2m9108753b1004081034y70a09588u150340e54a84a38c_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] Using a rankfile for ompi-restart<br>
<strong>From:</strong> Fernando Lemos (<em>fernandotcl_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-04-08 13:34:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12591.php">rohan nigam: "Re: [OMPI users] Problem running mpirun with ssh on remote nodes -Daemon did not report back when launched problem"</a>
<li><strong>Previous message:</strong> <a href="12589.php">Fernando Lemos: "Re: [OMPI users] orted: error while loading shared libraries"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/05/13079.php">Josh Hursey: "Re: [OMPI users] Using a rankfile for ompi-restart"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/05/13079.php">Josh Hursey: "Re: [OMPI users] Using a rankfile for ompi-restart"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p><p>I've noticed that ompi-restart doesn't support the --rankfile option.
<br>
It only supports --hostfile/--machinefile. Is there any reason
<br>
--rankfile isn't supported?
<br>
<p>Suppose you have a cluster without a shared file system. When one node
<br>
fails, you transfer its checkpoint to a spare node and invoke
<br>
ompi-restart. In 1.5, ompi-restart automagically handles this
<br>
situation (if you supply a hostfile) and is able to restart the
<br>
process, but I'm afraid it might not always be able to find the
<br>
checkpoints this way. If you could specify to ompi-restart where the
<br>
ranks are (and thus where the checkpoints are), then maybe restart
<br>
would always work as long (as long as you've specified the location of
<br>
the checkpoints correctly), or maybe ompi-restart would be faster.
<br>
<p><p><p>Regards,
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12591.php">rohan nigam: "Re: [OMPI users] Problem running mpirun with ssh on remote nodes -Daemon did not report back when launched problem"</a>
<li><strong>Previous message:</strong> <a href="12589.php">Fernando Lemos: "Re: [OMPI users] orted: error while loading shared libraries"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/05/13079.php">Josh Hursey: "Re: [OMPI users] Using a rankfile for ompi-restart"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/05/13079.php">Josh Hursey: "Re: [OMPI users] Using a rankfile for ompi-restart"</a>
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

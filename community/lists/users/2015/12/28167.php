<?
$subject_val = "[OMPI users] OpenMPI non blocking I_Allreduce segfaults when using custom function..";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec 16 14:48:50 2015" -->
<!-- isoreceived="20151216194850" -->
<!-- sent="Wed, 16 Dec 2015 14:48:45 -0500" -->
<!-- isosent="20151216194845" -->
<!-- name="Udayanga Wickramasinghe" -->
<!-- email="uswickra_at_[hidden]" -->
<!-- subject="[OMPI users] OpenMPI non blocking I_Allreduce segfaults when using custom function.." -->
<!-- id="CAAMMxCYAELM0FFXfuM5L_s5d64R-=f4OAk5V_VaBR7t7hURtKA_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
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
<strong>Subject:</strong> [OMPI users] OpenMPI non blocking I_Allreduce segfaults when using custom function..<br>
<strong>From:</strong> Udayanga Wickramasinghe (<em>uswickra_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-12-16 14:48:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28168.php">Ralph Castain: "Re: [OMPI users] performance issue with OpenMPI 1.10.1"</a>
<li><strong>Previous message:</strong> <a href="28166.php">Jingchao Zhang: "Re: [OMPI users] performance issue with OpenMPI 1.10.1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28170.php">Nathan Hjelm: "Re: [OMPI users] OpenMPI non blocking I_Allreduce segfaults when using custom function.."</a>
<li><strong>Reply:</strong> <a href="28170.php">Nathan Hjelm: "Re: [OMPI users] OpenMPI non blocking I_Allreduce segfaults when using custom function.."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi all,
<br>
I have a custom MPI_Op function which I use within a non blocking version
<br>
of all_reduce(). When executing the mpi program I am seeing a segfault
<br>
thrown from libNBC. It seems like this is a known issue in openMPI atleast
<br>
[1]. Is this somehow fixed in a later release version of openmpi ? I am
<br>
using 1.8.4.
<br>
<p>Thanks
<br>
Udayanga
<br>
<p>[1] <a href="http://www.open-mpi.org/community/lists/devel/2014/04/14588.php">http://www.open-mpi.org/community/lists/devel/2014/04/14588.php</a>
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-28167/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28168.php">Ralph Castain: "Re: [OMPI users] performance issue with OpenMPI 1.10.1"</a>
<li><strong>Previous message:</strong> <a href="28166.php">Jingchao Zhang: "Re: [OMPI users] performance issue with OpenMPI 1.10.1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28170.php">Nathan Hjelm: "Re: [OMPI users] OpenMPI non blocking I_Allreduce segfaults when using custom function.."</a>
<li><strong>Reply:</strong> <a href="28170.php">Nathan Hjelm: "Re: [OMPI users] OpenMPI non blocking I_Allreduce segfaults when using custom function.."</a>
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

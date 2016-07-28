<?
$subject_val = "Re: [OMPI users] Docker Cluster Queue Manager";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Jun  4 09:01:49 2016" -->
<!-- isoreceived="20160604130149" -->
<!-- sent="Sat, 4 Jun 2016 07:01:06 -0600" -->
<!-- isosent="20160604130106" -->
<!-- name="Rob Nagler" -->
<!-- email="openmpi-wooxi_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Docker Cluster Queue Manager" -->
<!-- id="CAJB=V02AKEVLYCXZ_+s5F2Aa+-GpyEchTetdwWnHOjWYNa-Gfw_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="57529114.70704_at_letai.org.il" -->
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
<strong>Subject:</strong> Re: [OMPI users] Docker Cluster Queue Manager<br>
<strong>From:</strong> Rob Nagler (<em>openmpi-wooxi_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-06-04 09:01:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29367.php">Ralph Castain: "Re: [OMPI users] Does Open MPI support manual launcher?"</a>
<li><strong>Previous message:</strong> <a href="29365.php">Daniel Letai: "Re: [OMPI users] Docker Cluster Queue Manager"</a>
<li><strong>In reply to:</strong> <a href="29365.php">Daniel Letai: "Re: [OMPI users] Docker Cluster Queue Manager"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29368.php">dani: "Re: [OMPI users] Docker Cluster Queue Manager"</a>
<li><strong>Reply:</strong> <a href="29368.php">dani: "Re: [OMPI users] Docker Cluster Queue Manager"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Daniel,
<br>
<p>Thanks.
<br>
<p>Shifter is also interesting. However, it assumes our users map to a Unix
<br>
user id, and therefore the access to the shared file system can be
<br>
controlled by normal Unix permissions. That's not scalable, and makes for
<br>
quite a bit of complexity. Each node must know about each user so you have
<br>
to run LDAP or something similar. This adds complexity to dynamic cluster
<br>
creation.
<br>
<p>Shifter runs in a chroot, not an cgroup, context. For a supercomputer
<br>
center with an application process to get an account, this works fine. For
<br>
a web application with no &quot;background check&quot;, it's more risky. At NERSC,
<br>
you don't have the bad actor problem. Web apps do, and all it takes is one
<br>
local exploit to escape chroot. Docker/cgroups is safer, and the focus on
<br>
improving Linux security is on cgroups these days, not chroot &quot;jails&quot;.
<br>
<p>Shifter also does not solve the problem of queuing dynamic clusters.
<br>
SLURM/Torque, which Shifter relies on, does not either. This is probably
<br>
the most difficult item. StarCluster does solve this problem, but doesn't
<br>
work on bare metal, and it's not clear if it is being maintained any more.
<br>
<p>Rob
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-29366/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29367.php">Ralph Castain: "Re: [OMPI users] Does Open MPI support manual launcher?"</a>
<li><strong>Previous message:</strong> <a href="29365.php">Daniel Letai: "Re: [OMPI users] Docker Cluster Queue Manager"</a>
<li><strong>In reply to:</strong> <a href="29365.php">Daniel Letai: "Re: [OMPI users] Docker Cluster Queue Manager"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29368.php">dani: "Re: [OMPI users] Docker Cluster Queue Manager"</a>
<li><strong>Reply:</strong> <a href="29368.php">dani: "Re: [OMPI users] Docker Cluster Queue Manager"</a>
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

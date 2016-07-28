<?
$subject_val = "Re: [OMPI users] Problems with gridengine integration on RHEL 6";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb 15 17:00:08 2012" -->
<!-- isoreceived="20120215220008" -->
<!-- sent="Wed, 15 Feb 2012 13:59:33 -0800" -->
<!-- isosent="20120215215933" -->
<!-- name="Brian McNally" -->
<!-- email="bmcnally_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problems with gridengine integration on RHEL 6" -->
<!-- id="4F3C2AC5.9070402_at_uw.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="F563032D-0E0E-4339-A6D8-239A2F145AC2_at_staff.uni-marburg.de" -->
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
<strong>Subject:</strong> Re: [OMPI users] Problems with gridengine integration on RHEL 6<br>
<strong>From:</strong> Brian McNally (<em>bmcnally_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-02-15 16:59:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18499.php">Abhinav Sarje: "Re: [OMPI users] compilation error with pgcc Unknown switch"</a>
<li><strong>Previous message:</strong> <a href="18497.php">Reuti: "Re: [OMPI users] Problems with gridengine integration on RHEL 6"</a>
<li><strong>In reply to:</strong> <a href="18497.php">Reuti: "Re: [OMPI users] Problems with gridengine integration on RHEL 6"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18500.php">Reuti: "Re: [OMPI users] Problems with gridengine integration on RHEL 6"</a>
<li><strong>Reply:</strong> <a href="18500.php">Reuti: "Re: [OMPI users] Problems with gridengine integration on RHEL 6"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
For for responding so quickly Reuti!
<br>
<p>To be clear my RHEL 5 and RHEL 6 nodes are part of the same cluster. In 
<br>
the RHEL 5 case qrsh -inherit gets called via mpirun. In the RHEL 6 case 
<br>
/usr/bin/ssh gets called directly from mpirun. The cluster setup looks like:
<br>
<p>qlogin_command               /usr/local/bin/qlogin_command
<br>
qlogin_daemon                /usr/sbin/sshd -i
<br>
rlogin_command               builtin
<br>
rsh_command                  builtin
<br>
rsh_daemon                   builtin
<br>
<p>I don't seem to have a &quot;rlogin_daemon&quot; set.
<br>
<p><pre>
--
Brian McNally
On 02/15/2012 01:43 PM, Reuti wrote:
&gt; Hi,
&gt;
&gt; Am 15.02.2012 um 22:21 schrieb Brian McNally:
&gt;
&gt;&gt; Hello Open MPI community,
&gt;&gt;
&gt;&gt; I'm running the openmpi 1.5.3 package as provided by Redhat Enterprise Linux 6, along with SGE 6.2u3. I've discovered that under RHEL 5 orted gets spawned via qrsh and under RHEL 6 orted gets spanwed via SSH. This is happening in the same cluster environment with the same parallel environment setup. I want orted to get spawned via qrsh because we impose memory limits if a job is spawned through SSH.
&gt;
&gt; Is it spawned by SSH directly or as a result of `qrsh -inherit ...`, while:
&gt;
&gt; $ qconf -sconf
&gt; ...
&gt; qlogin_command               builtin
&gt; qlogin_daemon                builtin
&gt; rlogin_command               builtin
&gt; rlogin_daemon                builtin
&gt; rsh_command                  builtin
&gt; rsh_daemon                   builtin
&gt;
&gt; is set in the old cluster but different in the new one (i.e. pointing to SSH there)?
&gt;
&gt; -- Reuti
&gt;
&gt;
&gt;&gt; I cannot determine WHY the behavior is different from RHEL 5 to RHEL 6. In the former I'm using the openmpi 1.4.3 package, in the latter I'm using openmpi 1.5.3. Both are supposedly built to support the gridengine ras.
&gt;&gt;
&gt;&gt; MCA ras: gridengine (MCA v2.0, API v2.0, Component v1.4.3)
&gt;&gt; MCA ras: gridengine (MCA v2.0, API v2.0, Component v1.5.3)
&gt;&gt;
&gt;&gt; Any thoughts? The documentation indicates that &quot;Open MPI will automatically detect when it is running inside SGE and will just 'do the Right Thing.'&quot; In my case that isn't the case!
&gt;&gt;
&gt;&gt; --
&gt;&gt; Brian McNally
&gt;&gt; _______________________________________________
&gt;&gt; users mailing list
&gt;&gt; users_at_[hidden]
&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt;
&gt;
&gt; _______________________________________________
&gt; users mailing list
&gt; users_at_[hidden]
&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18499.php">Abhinav Sarje: "Re: [OMPI users] compilation error with pgcc Unknown switch"</a>
<li><strong>Previous message:</strong> <a href="18497.php">Reuti: "Re: [OMPI users] Problems with gridengine integration on RHEL 6"</a>
<li><strong>In reply to:</strong> <a href="18497.php">Reuti: "Re: [OMPI users] Problems with gridengine integration on RHEL 6"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18500.php">Reuti: "Re: [OMPI users] Problems with gridengine integration on RHEL 6"</a>
<li><strong>Reply:</strong> <a href="18500.php">Reuti: "Re: [OMPI users] Problems with gridengine integration on RHEL 6"</a>
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

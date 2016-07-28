<?
$subject_val = "Re: [OMPI users] btl_openib_connect_oob.c:867:rml_recv_cb error	after Infini-band stack update.";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jun 20 14:56:26 2014" -->
<!-- isoreceived="20140620185626" -->
<!-- sent="Fri, 20 Jun 2014 20:56:23 +0200" -->
<!-- isosent="20140620185623" -->
<!-- name="Ivanov, Aleksandar (INR)" -->
<!-- email="aleksandar.ivanov_at_[hidden]" -->
<!-- subject="Re: [OMPI users] btl_openib_connect_oob.c:867:rml_recv_cb error	after Infini-band stack update." -->
<!-- id="0CDC5C0A257A5D40A5DCDC6E58F28E5EA62A74C823_at_KIT-MSX-07.kit.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="DD6DC45D-2EBB-4D0E-BFDE-FD2C924E4BC0_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] btl_openib_connect_oob.c:867:rml_recv_cb error	after Infini-band stack update.<br>
<strong>From:</strong> Ivanov, Aleksandar (INR) (<em>aleksandar.ivanov_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-06-20 14:56:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24688.php">Joshua Ladd: "Re: [OMPI users] btl_openib_connect_oob.c:867:rml_recv_cb error after Infini-band stack update."</a>
<li><strong>Previous message:</strong> <a href="24686.php">Ralph Castain: "Re: [OMPI users] btl_openib_connect_oob.c:867:rml_recv_cb error after Infini-band stack update."</a>
<li><strong>In reply to:</strong> <a href="24686.php">Ralph Castain: "Re: [OMPI users] btl_openib_connect_oob.c:867:rml_recv_cb error after Infini-band stack update."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24688.php">Joshua Ladd: "Re: [OMPI users] btl_openib_connect_oob.c:867:rml_recv_cb error after Infini-band stack update."</a>
<li><strong>Reply:</strong> <a href="24688.php">Joshua Ladd: "Re: [OMPI users] btl_openib_connect_oob.c:867:rml_recv_cb error after Infini-band stack update."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I was not the one updating the machine unfortunately, however I can ask my colleagues for specific list of modifications done. If I understand you correctly you are referring to the &quot;ulimit&quot; parameters. They are properly set, in fact we use JMS as job scheduler, therefore the &quot;ulimit -v&quot; is set by the user. In my case I used 31GB per MPI process.
<br>
The stack size is set to infinity.
<br>
<p><p><p><p>From: users [mailto:users-bounces_at_[hidden]] On Behalf Of Ralph Castain
<br>
Sent: Friday, June 20, 2014 8:42 PM
<br>
To: Open MPI Users
<br>
Subject: Re: [OMPI users] btl_openib_connect_oob.c:867:rml_recv_cb error after Infini-band stack update.
<br>
<p>What was updated? If the OS, did you remember to set the memory registration limits to max?
<br>
<p><p>On Jun 20, 2014, at 11:25 AM, Ivanov, Aleksandar (INR) &lt;aleksandar.ivanov_at_[hidden]&lt;mailto:aleksandar.ivanov_at_[hidden]&gt;&gt; wrote:
<br>
<p><p><p>Dear Sir or Madam,
<br>
<p>I am using the openmpi 1.6.5 library compiled with IFORT / ICC 13.1.5. Since a recent update of our machine I started generating mpi errors. The code crashes after completing approx. 24 % from the total job. The same code and input were run before on the same machine and no such problems were ever observed. The actual error message is attached.
<br>
I presume that after the update an incompatibility between the infiniband-stack and the openmpi library might have been introduced. I think that the suggested  &quot;out of memory problem&quot; should not be causing the malfunction, since the application uses only 1GB of the total 32 GB available.
<br>
<p>I would appreciate your help and ideas how to clarify this issue.
<br>
<p>Thank you in advance
<br>
<p>Best Regards
<br>
<p>Aleksandar Ivanov
<br>
<p><p><p><p>&lt;openmpi.log&gt;_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;
<br>
Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/06/24685.php">http://www.open-mpi.org/community/lists/users/2014/06/24685.php</a>
<br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-24687/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24688.php">Joshua Ladd: "Re: [OMPI users] btl_openib_connect_oob.c:867:rml_recv_cb error after Infini-band stack update."</a>
<li><strong>Previous message:</strong> <a href="24686.php">Ralph Castain: "Re: [OMPI users] btl_openib_connect_oob.c:867:rml_recv_cb error after Infini-band stack update."</a>
<li><strong>In reply to:</strong> <a href="24686.php">Ralph Castain: "Re: [OMPI users] btl_openib_connect_oob.c:867:rml_recv_cb error after Infini-band stack update."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24688.php">Joshua Ladd: "Re: [OMPI users] btl_openib_connect_oob.c:867:rml_recv_cb error after Infini-band stack update."</a>
<li><strong>Reply:</strong> <a href="24688.php">Joshua Ladd: "Re: [OMPI users] btl_openib_connect_oob.c:867:rml_recv_cb error after Infini-band stack update."</a>
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

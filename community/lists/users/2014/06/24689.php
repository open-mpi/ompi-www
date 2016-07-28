<?
$subject_val = "Re: [OMPI users] btl_openib_connect_oob.c:867:rml_recv_cb error after Infini-band stack update.";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jun 20 15:42:51 2014" -->
<!-- isoreceived="20140620194251" -->
<!-- sent="Fri, 20 Jun 2014 21:42:47 +0200" -->
<!-- isosent="20140620194247" -->
<!-- name="Ivanov, Aleksandar (INR)" -->
<!-- email="aleksandar.ivanov_at_[hidden]" -->
<!-- subject="Re: [OMPI users] btl_openib_connect_oob.c:867:rml_recv_cb error after Infini-band stack update." -->
<!-- id="0CDC5C0A257A5D40A5DCDC6E58F28E5EA62A74C827_at_KIT-MSX-07.kit.edu" -->
<!-- charset="utf-8" -->
<!-- inreplyto="CAG4F6z8_3EkU=rJoAOEkd9o694et2db+WAX-f5jGUMw_HJGz8w_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] btl_openib_connect_oob.c:867:rml_recv_cb error after Infini-band stack update.<br>
<strong>From:</strong> Ivanov, Aleksandar (INR) (<em>aleksandar.ivanov_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-06-20 15:42:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24690.php">Brock Palen: "Re: [OMPI users] affinity issues under cpuset torque 1.8.1"</a>
<li><strong>Previous message:</strong> <a href="24688.php">Joshua Ladd: "Re: [OMPI users] btl_openib_connect_oob.c:867:rml_recv_cb error after Infini-band stack update."</a>
<li><strong>In reply to:</strong> <a href="24688.php">Joshua Ladd: "Re: [OMPI users] btl_openib_connect_oob.c:867:rml_recv_cb error after Infini-band stack update."</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Joshua,
<br>

<br>
I am using a job scheduling system so ulimit &#226;&#128;&#147;v is set by me. Nevertheless the ulimit &#226;&#128;&#147;l is always half the value of ulimit &#226;&#128;&#147;v. This is a bit strange, I am not sure whether this might be an issue (31GB and 156GB are decent values).
<br>

<br>
For completeness the output of ulimit &#226;&#128;&#147;o from one of the nodes
<br>

<br>
core file size          (blocks, -c) 1
<br>
data seg size           (kbytes, -d) 32768000
<br>
scheduling priority             (-e) 0
<br>
file size               (blocks, -f) unlimited
<br>
pending signals                 (-i) 515032
<br>
max locked memory       (kbytes, -l) 16460684
<br>
max memory size         (kbytes, -m) 56047808
<br>
open files                      (-n) 8192
<br>
pipe size            (512 bytes, -p) 8
<br>
POSIX message queues     (bytes, -q) 819200
<br>
real-time priority              (-r) 0
<br>
stack size              (kbytes, -s) unlimited
<br>
cpu time               (seconds, -t) 2400
<br>
max user processes              (-u) 16308
<br>
virtual memory          (kbytes, -v) 32768000
<br>
file locks                      (-x) unlimited
<br>

<br>
Best Regards
<br>
Alex
<br>

<br>
From: users [mailto:users-bounces_at_[hidden]] On Behalf Of Joshua Ladd
<br>
Sent: Friday, June 20, 2014 9:15 PM
<br>
To: Open MPI Users
<br>
Subject: Re: [OMPI users] btl_openib_connect_oob.c:867:rml_recv_cb error after Infini-band stack update.
<br>

<br>
Aleksandar,
<br>
Please ensure your system administrator follows the guidelines outlined in the link printed in the error message
<br>

<br>
<a href="http://www.open-mpi.org/faq/?category=openfabrics#ib-locked-pages">http://www.open-mpi.org/faq/?category=openfabrics#ib-locked-pages</a>
<br>
Best,
<br>
Josh
<br>

<br>
On Fri, Jun 20, 2014 at 2:56 PM, Ivanov, Aleksandar (INR) &lt;aleksandar.ivanov_at_[hidden]&lt;mailto:aleksandar.ivanov_at_[hidden]&gt;&gt; wrote:
<br>
Hi,
<br>

<br>
I was not the one updating the machine unfortunately, however I can ask my colleagues for specific list of modifications done. If I understand you correctly you are referring to the &#226;&#128;&#156;ulimit&#226;&#128;&#157; parameters. They are properly set, in fact we use JMS as job scheduler, therefore the &#226;&#128;&#156;ulimit -v&#226;&#128;&#157; is set by the user. In my case I used 31GB per MPI process.
<br>
The stack size is set to infinity.
<br>

<br>

<br>

<br>

<br>
From: users [mailto:users-bounces_at_[hidden]&lt;mailto:users-bounces_at_[hidden]&gt;] On Behalf Of Ralph Castain
<br>
Sent: Friday, June 20, 2014 8:42 PM
<br>
To: Open MPI Users
<br>
Subject: Re: [OMPI users] btl_openib_connect_oob.c:867:rml_recv_cb error after Infini-band stack update.
<br>

<br>
What was updated? If the OS, did you remember to set the memory registration limits to max?
<br>

<br>

<br>
On Jun 20, 2014, at 11:25 AM, Ivanov, Aleksandar (INR) &lt;aleksandar.ivanov_at_[hidden]&lt;mailto:aleksandar.ivanov_at_[hidden]&gt;&gt; wrote:
<br>

<br>

<br>
Dear Sir or Madam,
<br>

<br>
I am using the openmpi 1.6.5 library compiled with IFORT / ICC 13.1.5. Since a recent update of our machine I started generating mpi errors. The code crashes after completing approx. 24 % from the total job. The same code and input were run before on the same machine and no such problems were ever observed. The actual error message is attached.
<br>
I presume that after the update an incompatibility between the infiniband-stack and the openmpi library might have been introduced. I think that the suggested  &#226;&#128;&#156;out of memory problem&#226;&#128;&#157; should not be causing the malfunction, since the application uses only 1GB of the total 32 GB available.
<br>

<br>
I would appreciate your help and ideas how to clarify this issue.
<br>

<br>
Thank you in advance
<br>

<br>
Best Regards
<br>

<br>
Aleksandar Ivanov
<br>

<br>

<br>

<br>

<br>
&lt;openmpi.log&gt;_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;
<br>
Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/06/24685.php">http://www.open-mpi.org/community/lists/users/2014/06/24685.php</a>
<br>

<br>

<br>
_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;
<br>
Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/06/24687.php">http://www.open-mpi.org/community/lists/users/2014/06/24687.php</a>
<br>

<br>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-24689/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24690.php">Brock Palen: "Re: [OMPI users] affinity issues under cpuset torque 1.8.1"</a>
<li><strong>Previous message:</strong> <a href="24688.php">Joshua Ladd: "Re: [OMPI users] btl_openib_connect_oob.c:867:rml_recv_cb error after Infini-band stack update."</a>
<li><strong>In reply to:</strong> <a href="24688.php">Joshua Ladd: "Re: [OMPI users] btl_openib_connect_oob.c:867:rml_recv_cb error after Infini-band stack update."</a>
<!-- nextthread="start" -->
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

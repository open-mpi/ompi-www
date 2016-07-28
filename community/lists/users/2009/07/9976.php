<?
$subject_val = "Re: [OMPI users] selectively bind MPI to one HCA out of available	ones";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jul 15 09:31:09 2009" -->
<!-- isoreceived="20090715133109" -->
<!-- sent="Wed, 15 Jul 2009 19:03:41 +0530" -->
<!-- isosent="20090715133341" -->
<!-- name="neeraj_at_[hidden]" -->
<!-- email="neeraj_at_[hidden]" -->
<!-- subject="Re: [OMPI users] selectively bind MPI to one HCA out of available	ones" -->
<!-- id="OF90E770E5.5C3621C0-ON652575F4.004A647B-652575F4.004A40D4_at_crlindia.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="71d2d8cc0907150620rf67e63bsecc50ab0b6b95335_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] selectively bind MPI to one HCA out of available	ones<br>
<strong>From:</strong> <a href="mailto:neeraj_at_[hidden]?Subject=Re:%20[OMPI%20users]%20selectively%20bind%20MPI%20to%20one%20HCA%20out%20of%20available	ones"><em>neeraj_at_[hidden]</em></a><br>
<strong>Date:</strong> 2009-07-15 09:33:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9977.php">Lenny Verkhovsky: "Re: [OMPI users] selectively bind MPI to one HCA out of available ones"</a>
<li><strong>Previous message:</strong> <a href="9975.php">Lenny Verkhovsky: "Re: [OMPI users] 1.3.1 -rf rankfile behaviour ??"</a>
<li><strong>In reply to:</strong> <a href="9974.php">Ralph Castain: "Re: [OMPI users] selectively bind MPI to one HCA out of available ones"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9980.php">Rolf Vandevaart: "Re: [OMPI users] selectively bind MPI to one HCA out of	available ones"</a>
<li><strong>Reply:</strong> <a href="9980.php">Rolf Vandevaart: "Re: [OMPI users] selectively bind MPI to one HCA out of	available ones"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks Ralph,
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;i found the mca parameter. It is btl_openib_max_btls which 
<br>
controls the available HCAs.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Thanks for helping.
<br>
<p>Regards
<br>
<p>Neeraj Chourasia (MTS)
<br>
Computational Research Laboratories Ltd.
<br>
(A wholly Owned Subsidiary of TATA SONS Ltd)
<br>
B-101, ICC Trade Towers, Senapati Bapat Road
<br>
Pune 411016 (Mah) INDIA
<br>
(O) +91-20-6620 9863  (Fax) +91-20-6620 9862
<br>
M: +91.9225520634
<br>
<p><p><p><p>Ralph Castain &lt;rhc_at_[hidden]&gt; 
<br>
Sent by: users-bounces_at_[hidden]
<br>
07/15/2009 06:54 PM
<br>
Please respond to
<br>
Open MPI Users &lt;users_at_[hidden]&gt;
<br>
<p><p>To
<br>
Open MPI Users &lt;users_at_[hidden]&gt;
<br>
cc
<br>
<p>Subject
<br>
Re: [OMPI users] selectively bind MPI to one HCA out of available ones
<br>
<p><p><p><p><p><p>Take a look at the output from &quot;ompi_info --params btl openib&quot; and you 
<br>
will see the available MCA params to direct the openib subsystem. I 
<br>
believe you will find that you can indeed specify the interface.
<br>
<p><p>On Wed, Jul 15, 2009 at 7:15 AM, &lt;neeraj_at_[hidden]&gt; wrote:
<br>
<p>Hi all, 
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;I have a cluster where both HCA's of blade are active, but 
<br>
connected to different subnet. 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Is there an option in MPI to select one HCA out of available 
<br>
one's? I know it can be done by making changes in openmpi code, but i need 
<br>
clean interface like option during mpi launch time to select mthca0 or 
<br>
mthca1? 
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Any help is appreciated. Btw i just checked Mvapich and feature is 
<br>
there inside. 
<br>
<p>Regards
<br>
<p>Neeraj Chourasia (MTS)
<br>
Computational Research Laboratories Ltd.
<br>
(A wholly Owned Subsidiary of TATA SONS Ltd)
<br>
B-101, ICC Trade Towers, Senapati Bapat Road
<br>
Pune 411016 (Mah) INDIA
<br>
(O) +91-20-6620 9863  (Fax) +91-20-6620 9862
<br>
M: +91.9225520634
<br>
=====-----=====-----===== Notice: The information contained in this e-mail 
<br>
message and/or attachments to it may contain confidential or privileged 
<br>
information. If you are not the intended recipient, any dissemination, 
<br>
use, review, distribution, printing or copying of the information 
<br>
contained in this e-mail message and/or attachments to it are strictly 
<br>
prohibited. If you have received this communication in error, please 
<br>
notify us by reply e-mail or telephone and immediately and permanently 
<br>
delete the message and any attachments. Internet communications cannot be 
<br>
guaranteed to be timely, secure, error or virus-free. The sender does not 
<br>
accept liability for any errors or omissions.Thank you 
<br>
=====-----=====-----=====
<br>
<p>_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
<p>=====-----=====-----=====
<br>
<p><p><p>Notice: The information contained in this e-mail
<br>
message and/or attachments to it may contain 
<br>
confidential or privileged information. If you are 
<br>
not the intended recipient, any dissemination, use, 
<br>
review, distribution, printing or copying of the 
<br>
information contained in this e-mail message 
<br>
and/or attachments to it are strictly prohibited. If 
<br>
you have received this communication in error, 
<br>
please notify us by reply e-mail or telephone and 
<br>
immediately and permanently delete the message 
<br>
and any attachments. 
<br>
<p>Internet communications cannot be guaranteed to be timely,
<br>
secure, error or virus-free. The sender does not accept liability
<br>
for any errors or omissions.Thank you
<br>
<p>=====-----=====-----=====
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-9976/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9977.php">Lenny Verkhovsky: "Re: [OMPI users] selectively bind MPI to one HCA out of available ones"</a>
<li><strong>Previous message:</strong> <a href="9975.php">Lenny Verkhovsky: "Re: [OMPI users] 1.3.1 -rf rankfile behaviour ??"</a>
<li><strong>In reply to:</strong> <a href="9974.php">Ralph Castain: "Re: [OMPI users] selectively bind MPI to one HCA out of available ones"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9980.php">Rolf Vandevaart: "Re: [OMPI users] selectively bind MPI to one HCA out of	available ones"</a>
<li><strong>Reply:</strong> <a href="9980.php">Rolf Vandevaart: "Re: [OMPI users] selectively bind MPI to one HCA out of	available ones"</a>
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

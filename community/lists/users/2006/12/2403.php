<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Dec 22 15:51:16 2006" -->
<!-- isoreceived="20061222205116" -->
<!-- sent="Fri, 22 Dec 2006 15:51:02 -0500" -->
<!-- isosent="20061222205102" -->
<!-- name="Ali Eghlima" -->
<!-- email="Ali_Eghlima_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Open MPI 1.1.2 stdout problem with IBM AIX 5.3" -->
<!-- id="OF9536EC20.D1D2C883-ON8525724C.00721F64-8525724C.007289B7_at_mck.us.ray.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="C1B18E17.FAC%rhc_at_lanl.gov" -->
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
<strong>From:</strong> Ali Eghlima (<em>Ali_Eghlima_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-12-22 15:51:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2404.php">Jayanta Roy: "[OMPI users] jumbo frame can create deallock?"</a>
<li><strong>Previous message:</strong> <a href="2402.php">Ralph Castain: "Re: [OMPI users] Open MPI 1.1.2 stdout problem with IBM AIX 5.3"</a>
<li><strong>In reply to:</strong> <a href="2402.php">Ralph Castain: "Re: [OMPI users] Open MPI 1.1.2 stdout problem with IBM AIX 5.3"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Ralph,
<br>

<br>
I could run any test that you want me to run to diagnose the problem. 
<br>

<br>
Thanks again, Have a great holiday
<br>

<br>
Ali 
<br>
&nbsp;
<br>
&nbsp;
<br>

<br>

<br>

<br>
Ralph Castain &lt;rhc_at_[hidden]&gt; 
<br>
Sent by: users-bounces_at_[hidden]
<br>
12/22/2006 03:28 PM
<br>
Please respond to
<br>
Open MPI Users &lt;users_at_[hidden]&gt;
<br>

<br>

<br>
To
<br>
Open MPI Users &lt;users_at_[hidden]&gt;
<br>
cc
<br>

<br>
Subject
<br>
Re: [OMPI users] Open MPI 1.1.2 stdout problem with IBM AIX 5.3
<br>

<br>

<br>

<br>

<br>

<br>

<br>
Thanks Ali. That is indeed helpful.
<br>

<br>
I personally launch using rsh (both on OSX and Linux) frequently and have 
<br>
no problem with IO forwarding. So it must be something about the AIX 
<br>
environment that is causing the issue.
<br>

<br>
Debug daemons should have nothing to do with the application process&#226;&#128;&#153; 
<br>
stdio channels. I&#226;&#128;&#153;ll take another look at that code and see if there is 
<br>
some unexpected interaction that might be occurring.
<br>

<br>
As I said earlier, though, there is little we can do about AIX at this 
<br>
time due to lack of access to that environment. If we can find someone 
<br>
with access and willing to help, we will explore it further.
<br>

<br>
Ralph
<br>

<br>

<br>

<br>
On 12/22/06 11:29 AM, &quot;Ali Eghlima&quot; &lt;Ali_Eghlima_at_[hidden]&gt; wrote:
<br>

<br>

<br>
Hi Ralph, 
<br>

<br>
Thanks for the quick reply. The launch environment is rsh. I was also 
<br>
puzzled, when I find out --debug-daemons option 
<br>
makes mpirun to work for a simple case. 
<br>

<br>
Thanks again 
<br>

<br>
Ali, 
<br>

<br>

<br>

<br>

<br>
Ralph Castain &lt;rhc_at_[hidden]&gt; 
<br>
Sent by: users-bounces_at_[hidden] 12/22/2006 10:49 AM 
<br>
Please respond to
<br>
Open MPI Users &lt;users_at_[hidden]&gt; 
<br>
To 
<br>
Open MPI Users &lt;users_at_[hidden]&gt; 
<br>
cc
<br>
Subject 
<br>
Re: [OMPI users] Open MPI 1.1.2 stdout problem with IBM AIX 5.3 
<br>

<br>

<br>

<br>

<br>
Hi Ali
<br>

<br>
I have seen this reported twice now &#226;&#128;&#147; I think from two different sources, 
<br>
but I could be incorrect. Unfortunately, we don&#226;&#128;&#153;t have access to an AIX 
<br>
cluster to investigate the problem. We don&#226;&#128;&#153;t see it on any other platform 
<br>
at this time.
<br>

<br>
Could you tell me something more about your cluster? In particular, it 
<br>
would help to know your launch environment (e.g., rsh/ssh, SLURM, TM, 
<br>
etc.). The noted behavior of using &#226;&#128;&#148;debug-daemons to resolve the problem 
<br>
has me puzzled as that flag only causes the daemons to keep their stdio 
<br>
ports open &#226;&#128;&#147; it has nothing to do with the application processes nor the 
<br>
I/O forwarding subsystem.
<br>

<br>
I can suggest a couple of options in the interim, though I don&#226;&#128;&#153;t know that 
<br>
they will solve the problem:
<br>

<br>
1.        You could upgrade to the 1.2 beta release. The runtime underwent 
<br>
some significant changes that might help here; or 
<br>
2.        You could try configuring Open MPI with &#226;&#128;&#156;--disable-pty-support&#226;&#128;&#157;. 
<br>
The I/O forwarding system is currently based upon pty&#226;&#128;&#153;s. We have seen a 
<br>
problem on one other platform where the pty support wasn&#226;&#128;&#153;t quite what Open 
<br>
MPI expects &#226;&#128;&#147; disabling it solved the problem. You should first check if 
<br>
the 1.1.2 release supports this configuration option (I honestly can&#226;&#128;&#153;t 
<br>
remember &#226;&#128;&#147; it has been too long) - you may need to upgrade to 1.2 to do 
<br>
this. 
<br>

<br>
I hope that provides some help. If/when we get access to an AIX cluster, 
<br>
we&#226;&#128;&#153;ll try to dig deeper into this issue.
<br>

<br>
Ralph
<br>

<br>

<br>

<br>
On 12/22/06 7:44 AM, &quot;Ali Eghlima&quot; &lt;Ali_Eghlima_at_[hidden]&gt; wrote:
<br>

<br>

<br>
Hello, 
<br>

<br>
We have Open MPI 1.1.2 installed on IBM AIX 5.3 cluster. It looks like 
<br>
terminal output is broken. There are a few entry in the archive for this 
<br>
problem, 
<br>
with no suggested solution or real work around. 
<br>

<br>
I am putting this posting with hope to get some advise for a work around 
<br>
or solution. 
<br>

<br>

<br>

<br>
#mpirun -np 1  hostname 
<br>

<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;No out put, piping the command to &quot;cat&quot; or &quot;more&quot; generate no out 
<br>
put as well. 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;The only way to get an output from this command is to add 
<br>
--debug-daemons 
<br>

<br>
#mpirun -np 1 --debug-daemons  hostname 
<br>

<br>
Even this debug option is not working for a real application which 
<br>
generate several output. 
<br>

<br>
Looking forward for any comments. 
<br>

<br>
Thanks 
<br>

<br>
Ali, 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>

<br>

<br>

<br>

<br>

<br>
_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a> &lt;
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>&gt; 
<br>
_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a> 
<br>

<br>
_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>

<br>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-2403/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2404.php">Jayanta Roy: "[OMPI users] jumbo frame can create deallock?"</a>
<li><strong>Previous message:</strong> <a href="2402.php">Ralph Castain: "Re: [OMPI users] Open MPI 1.1.2 stdout problem with IBM AIX 5.3"</a>
<li><strong>In reply to:</strong> <a href="2402.php">Ralph Castain: "Re: [OMPI users] Open MPI 1.1.2 stdout problem with IBM AIX 5.3"</a>
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

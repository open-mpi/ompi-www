<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Sep 15 11:54:51 2006" -->
<!-- isoreceived="20060915155451" -->
<!-- sent="Fri, 15 Sep 2006 11:54:41 -0400" -->
<!-- isosent="20060915155441" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI on large clusters" -->
<!-- id="C1304501.26DAD%jsquyres_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20060915152538.58594.qmail_at_web37504.mail.mud.yahoo.com" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-09-15 11:54:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1877.php">Eng. A.A. Isola: "[OMPI users] Inter vs Intracommunicator...Who is the best?"</a>
<li><strong>Previous message:</strong> <a href="1875.php">George Bosilca: "Re: [OMPI users] Perl and MPI"</a>
<li><strong>In reply to:</strong> <a href="1870.php">imran shaik: "[OMPI users] MPI on large clusters"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I think the answer to all your questions is: &quot;it depends on your
<br>
application.&quot;
<br>
<p>MPI is used on extremely large clusters (many thousands of nodes), but with
<br>
applications that were specially written for those large numbers of nodes.
<br>
You need to look at the specific requirements of your application (George
<br>
said some helpful things in his mail that should help with this) and
<br>
determine how to want to program your solution.  Then look at spec'ing out a
<br>
hardware solution (what kind of nodes?  How much RAM?  What processor(s)?
<br>
How much disk?  What kind of network?  ...?), which is a complicated and
<br>
involved process -- originally stemming from exactly what you want to *do*
<br>
with your cluster (if you have only a single app that is going to run on
<br>
this cluster, you should spec out a cluster that will fit the needs of that
<br>
app).
<br>
<p><p>On 9/15/06 11:25 AM, &quot;imran shaik&quot; &lt;sk.imran_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi folks,
</span><br>
<span class="quotelev1">&gt;   Is MPI suitable for running jobs on large clusters??
</span><br>
<span class="quotelev1">&gt;   Is it best suited only for SMP ?
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev1">&gt;   I used MPI on relatively small cluster.
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev1">&gt;   But now i have to recommend  MPI for a relatively large 600 node cluster.
</span><br>
<span class="quotelev1">&gt; Shall I ??
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev1">&gt;   The nature of jobs is well, processing tera bytes of data.
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev1">&gt;   Thanks in advance
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev1">&gt;   Regards,
</span><br>
<span class="quotelev1">&gt;   Imran
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ---------------------------------
</span><br>
<span class="quotelev1">&gt; Get your own web address for just $1.99/1st yr. We'll help. Yahoo! Small
</span><br>
<span class="quotelev1">&gt; Business.
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
Server Virtualization Business Unit
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1877.php">Eng. A.A. Isola: "[OMPI users] Inter vs Intracommunicator...Who is the best?"</a>
<li><strong>Previous message:</strong> <a href="1875.php">George Bosilca: "Re: [OMPI users] Perl and MPI"</a>
<li><strong>In reply to:</strong> <a href="1870.php">imran shaik: "[OMPI users] MPI on large clusters"</a>
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

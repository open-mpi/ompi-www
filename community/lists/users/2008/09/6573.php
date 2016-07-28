<?
$subject_val = "Re: [OMPI users] mpirun hang";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Sep 17 08:46:10 2008" -->
<!-- isoreceived="20080917124610" -->
<!-- sent="Wed, 17 Sep 2008 14:46:05 +0200" -->
<!-- isosent="20080917124605" -->
<!-- name="Christophe Spaggiari" -->
<!-- email="christophe.spaggiari_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpirun hang" -->
<!-- id="f2843b810809170546x541eae34qc4b38806c2982ad6_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="2D0F05E7-8B55-47D7-B6FF-C72A826FFE34_at_eecs.utk.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] mpirun hang<br>
<strong>From:</strong> Christophe Spaggiari (<em>christophe.spaggiari_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-09-17 08:46:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6574.php">Paul Kapinos: "Re: [OMPI users] Why compilig in global paths	(only)	for	configuretion files?"</a>
<li><strong>Previous message:</strong> <a href="6572.php">Josh Hursey: "Re: [OMPI users] BLCR not found"</a>
<li><strong>In reply to:</strong> <a href="6570.php">George Bosilca: "Re: [OMPI users] mpirun hang"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thank you very much. That was it. I didn't know that by default it was any
<br>
firewall running on the default Yellow Dog Linux installations since nothing
<br>
was asked about this issue during the installation.
<br>
You really saved my day George.
<br>
Regards,
<br>
Chris
<br>
<p><p>On Wed, Sep 17, 2008 at 2:24 PM, George Bosilca &lt;bosilca_at_[hidden]&gt;wrote:
<br>
<p><span class="quotelev1">&gt; Christophe,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Looks like a firewall problem. Please check the mailing list archives for
</span><br>
<span class="quotelev1">&gt; the proper fix.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Thanks,
</span><br>
<span class="quotelev1">&gt;    george.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Sep 17, 2008, at 6:53 AM, Christophe Spaggiari wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Hi,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I am new to MPI and try to get my Open MPI environment up and running. I
</span><br>
<span class="quotelev2">&gt;&gt; have two machines Alpha and Beta, on which I have successfully installed
</span><br>
<span class="quotelev2">&gt;&gt; Open MPI in /usr/local/openmpi. I have made the ssh setting to not have to
</span><br>
<span class="quotelev2">&gt;&gt; enter password manually (using rsa keys), and I have modified the .rc files
</span><br>
<span class="quotelev2">&gt;&gt; to get the right path and right LD_LIBRARY_PATH when login using ssh on both
</span><br>
<span class="quotelev2">&gt;&gt; machines.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; In order to check if my installation was working I have started &quot;mpirun
</span><br>
<span class="quotelev2">&gt;&gt; hostname&quot; on Alpha and it is working just fine.
</span><br>
<span class="quotelev2">&gt;&gt; I have tested as well &quot;mpirun hostname&quot; on Beta and it is working fine
</span><br>
<span class="quotelev2">&gt;&gt; too.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I have tested &quot;ssh beta env&quot; to check that my setting are correct and it
</span><br>
<span class="quotelev2">&gt;&gt; is working as expected.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; BUT when I am running &quot;mpirun -host beta hostname&quot; from Alpha nothing
</span><br>
<span class="quotelev2">&gt;&gt; happens. After several minutes I have to kill the &quot;mpirun&quot; process with
</span><br>
<span class="quotelev2">&gt;&gt; Ctrl-C (two times). Does any of you run into similar problem and could tell
</span><br>
<span class="quotelev2">&gt;&gt; me what I am doing wrong ? It seems that each local installation are working
</span><br>
<span class="quotelev2">&gt;&gt; fine but I can not start tasks on other nodes.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The interesting point is that when I run a &quot;ps&quot; on Beta I can see that a
</span><br>
<span class="quotelev2">&gt;&gt; &quot;orted&quot; process is started (and stay in process list) for each of my try to
</span><br>
<span class="quotelev2">&gt;&gt; run &quot;mpirun&quot; command from Alpha. So somehow Beta gets the command to start
</span><br>
<span class="quotelev2">&gt;&gt; orted and does it but then, nothing happens .......
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I have been browsing the users list for similar issues and I found one guy
</span><br>
<span class="quotelev2">&gt;&gt; describing exactly the same problem but it was no answer to his post.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Not sure if this is relevant but Alpha and Beta are Sony PS3 machines
</span><br>
<span class="quotelev2">&gt;&gt; running Yellow Dog Linux 6.1
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks in advance for your help.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Regards,
</span><br>
<span class="quotelev2">&gt;&gt; Chris
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-6573/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6574.php">Paul Kapinos: "Re: [OMPI users] Why compilig in global paths	(only)	for	configuretion files?"</a>
<li><strong>Previous message:</strong> <a href="6572.php">Josh Hursey: "Re: [OMPI users] BLCR not found"</a>
<li><strong>In reply to:</strong> <a href="6570.php">George Bosilca: "Re: [OMPI users] mpirun hang"</a>
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

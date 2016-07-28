<?
$subject_val = "Re: [OMPI users] Simple openmpi-mca-params.conf question";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Apr  6 20:49:34 2015" -->
<!-- isoreceived="20150407004934" -->
<!-- sent="Mon, 06 Apr 2015 20:49:07 -0400" -->
<!-- isosent="20150407004907" -->
<!-- name="Ray Sheppard" -->
<!-- email="rsheppar_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Simple openmpi-mca-params.conf question" -->
<!-- id="55232983.4090107_at_iu.edu" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="A839B050-CD2C-4C31-9269-6377818FFE60_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] Simple openmpi-mca-params.conf question<br>
<strong>From:</strong> Ray Sheppard (<em>rsheppar_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-04-06 20:49:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26629.php">Ralph Castain: "Re: [OMPI users] Simple openmpi-mca-params.conf question"</a>
<li><strong>Previous message:</strong> <a href="26627.php">Ralph Castain: "Re: [OMPI users] Simple openmpi-mca-params.conf question"</a>
<li><strong>In reply to:</strong> <a href="26627.php">Ralph Castain: "Re: [OMPI users] Simple openmpi-mca-params.conf question"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26629.php">Ralph Castain: "Re: [OMPI users] Simple openmpi-mca-params.conf question"</a>
<li><strong>Reply:</strong> <a href="26629.php">Ralph Castain: "Re: [OMPI users] Simple openmpi-mca-params.conf question"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks Ralph,
<br>
&nbsp;&nbsp;&nbsp;The FAQ had me putting in prefixes to that line and I just never 
<br>
figured it out.  I have just dumbly added these things to my mpirun 
<br>
line.  I have one other question. When I write into the system conf 
<br>
file, will the mpirun know to look there (which seems what the file 
<br>
says) or should I explicitly add the .../etc directory to a variable 
<br>
like CPATH?  Thanks again,
<br>
Ray
<br>
<p>On 4/6/2015 8:14 PM, Ralph Castain wrote:
<br>
<span class="quotelev1">&gt; btl_tcp_if_exclude=eth2
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; should work
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Apr 6, 2015, at 5:09 PM, Ray Sheppard &lt;rsheppar_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hello list,
</span><br>
<span class="quotelev2">&gt;&gt;   I have been given permission to impose my usual defaults on the system.  I have been reading documentation for the openmpi-mca-params.conf file. &quot;ompi_info --param all all&quot; did not help.  All the FAQ's seem to do was confuse me. I can not seem to understand how to instantiate a simple switch like:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -mca btl_tcp_if_exclude eth2
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I have tried various ways but always seem to get:
</span><br>
<span class="quotelev2">&gt;&gt; keyval parser: error 2 reading file /N/u/rsheppar/Karst/.openmpi/mca-params.conf at line 1:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I would really appreciate a simple example of a proper entry. Thanks.
</span><br>
<span class="quotelev2">&gt;&gt;                       Ray
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/04/26626.php">http://www.open-mpi.org/community/lists/users/2015/04/26626.php</a>
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/04/26627.php">http://www.open-mpi.org/community/lists/users/2015/04/26627.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26629.php">Ralph Castain: "Re: [OMPI users] Simple openmpi-mca-params.conf question"</a>
<li><strong>Previous message:</strong> <a href="26627.php">Ralph Castain: "Re: [OMPI users] Simple openmpi-mca-params.conf question"</a>
<li><strong>In reply to:</strong> <a href="26627.php">Ralph Castain: "Re: [OMPI users] Simple openmpi-mca-params.conf question"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26629.php">Ralph Castain: "Re: [OMPI users] Simple openmpi-mca-params.conf question"</a>
<li><strong>Reply:</strong> <a href="26629.php">Ralph Castain: "Re: [OMPI users] Simple openmpi-mca-params.conf question"</a>
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

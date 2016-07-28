<?
$subject_val = "Re: [OMPI users] bin/orted: Command not found.";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Aug 10 07:49:04 2009" -->
<!-- isoreceived="20090810114904" -->
<!-- sent="Mon, 10 Aug 2009 14:48:59 +0300" -->
<!-- isosent="20090810114859" -->
<!-- name="Lenny Verkhovsky" -->
<!-- email="lenny.verkhovsky_at_[hidden]" -->
<!-- subject="Re: [OMPI users] bin/orted: Command not found." -->
<!-- id="453d39990908100448j6e804009kdbaebbd176ab14eb_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="Pine.LNX.4.60.0908080700590.7916_at_qe2.sdsc.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] bin/orted: Command not found.<br>
<strong>From:</strong> Lenny Verkhovsky (<em>lenny.verkhovsky_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-08-10 07:48:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10266.php">Lenny Verkhovsky: "Re: [OMPI users] compile mpi program on Cell BE"</a>
<li><strong>Previous message:</strong> <a href="10264.php">Attila B&#246;rcs: "[OMPI users] compile mpi program on Cell BE"</a>
<li><strong>In reply to:</strong> <a href="10261.php">Kenneth Yoshimoto: "Re: [OMPI users] bin/orted: Command not found."</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
try specifing  -prefix in the command line
<br>
ex:  mpirun -np 4 -prefix $MPIHOME ./app
<br>
Lenny.
<br>
<p>On Sat, Aug 8, 2009 at 5:04 PM, Kenneth Yoshimoto &lt;kenneth_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I don't own these nodes, so I have to use them with
</span><br>
<span class="quotelev1">&gt; whatever path setups they came with.  In particular,
</span><br>
<span class="quotelev1">&gt; my home directory has a different path on each set.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It would be nice to be able to specify the path to orted
</span><br>
<span class="quotelev1">&gt; on each remote node.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Kenneth
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Fri, 7 Aug 2009, Ralph Castain wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Date: Fri, 7 Aug 2009 18:49:13 -0600
</span><br>
<span class="quotelev2">&gt;&gt; From: Ralph Castain &lt;rhc_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; To: Kenneth Yoshimoto &lt;kenneth_at_[hidden]&gt;, Open MPI Users &lt;
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Subject: Re: [OMPI users] bin/orted: Command not found.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Not that I know of - I don't think we currently have any way for you to
</span><br>
<span class="quotelev2">&gt;&gt; specify a location for individual nodes.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Is there some reason why you installed it this way?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Fri, Aug 7, 2009 at 11:27 AM, Kenneth Yoshimoto &lt;kenneth_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hello,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  I have three sets of nodes, each with openmpi installed in
</span><br>
<span class="quotelev3">&gt;&gt;&gt; a different location.  I am getting an error related to orted:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /users/kenneth/info/openmpi/install/bin/orted: Command not found.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  I think it's looking for orted in the wrong place on some of
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the nodes.  Is there an easy way to have mpirun look for
</span><br>
<span class="quotelev3">&gt;&gt;&gt; orted in the right place on the different sets of nodes?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Kenneth
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  _______________________________________________
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-10265/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10266.php">Lenny Verkhovsky: "Re: [OMPI users] compile mpi program on Cell BE"</a>
<li><strong>Previous message:</strong> <a href="10264.php">Attila B&#246;rcs: "[OMPI users] compile mpi program on Cell BE"</a>
<li><strong>In reply to:</strong> <a href="10261.php">Kenneth Yoshimoto: "Re: [OMPI users] bin/orted: Command not found."</a>
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

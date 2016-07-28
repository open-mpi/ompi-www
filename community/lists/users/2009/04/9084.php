<?
$subject_val = "Re: [OMPI users] Launching MPI app manually when rsh/ssh can't beused...";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Apr 24 04:16:24 2009" -->
<!-- isoreceived="20090424081624" -->
<!-- sent="Fri, 24 Apr 2009 10:16:19 +0200" -->
<!-- isosent="20090424081619" -->
<!-- name="Mariusz Mamo&#197;&#132;ski" -->
<!-- email="mamonski_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Launching MPI app manually when rsh/ssh can't beused..." -->
<!-- id="78259bca0904240116o7489bf5as403a20752499ae7_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="5958F6AC-E1D3-4961-9B31-23152D990EFA_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Launching MPI app manually when rsh/ssh can't beused...<br>
<strong>From:</strong> Mariusz Mamo&#197;&#132;ski (<em>mamonski_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-04-24 04:16:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9085.php">jan: "[OMPI users] running problem on Dell blade server, confirm 2d21ce3ce8be64d8104b3ad71b8c59e2514a72eb"</a>
<li><strong>Previous message:</strong> <a href="9083.php">Eugene Loh: "Re: [OMPI users] MPI_Bcast from OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="9078.php">Jeff Squyres: "Re: [OMPI users] Launching MPI app manually when rsh/ssh can't beused..."</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Thu, Apr 23, 2009 at 9:03 PM, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; On Apr 23, 2009, at 3:51 AM, Katz, Jacob wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Is there a way to start up an MPI app by some manual procedure, when
</span><br>
<span class="quotelev2">&gt;&gt; rsh/ssh cannot be used to log into a machine where part of the app should
</span><br>
<span class="quotelev2">&gt;&gt; run?
</span><br>
<span class="quotelev2">&gt;&gt; E.g. a set of commands that can be manually executed on the machines to
</span><br>
<span class="quotelev2">&gt;&gt; start the run-time/daemons/actual executables?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Not easily, no (meaning: no). &#194;&#160;Is there some other parallel launching system
</span><br>
<span class="quotelev1">&gt; that should be used? &#194;&#160;It's fairly straightforward to write another plugin to
</span><br>
<span class="quotelev1">&gt; use another launcher (that's kinda the point of our plugin system).
</span><br>
<p>What about using plm_rsh_agent mca parameter set to /bin/echo (or some
<br>
custom scripts that intercepts all arguments needed to start orted
<br>
daemon properly)?
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; Cisco Systems
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
<p><p><p><pre>
-- 
Mariusz Mamonski
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9085.php">jan: "[OMPI users] running problem on Dell blade server, confirm 2d21ce3ce8be64d8104b3ad71b8c59e2514a72eb"</a>
<li><strong>Previous message:</strong> <a href="9083.php">Eugene Loh: "Re: [OMPI users] MPI_Bcast from OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="9078.php">Jeff Squyres: "Re: [OMPI users] Launching MPI app manually when rsh/ssh can't beused..."</a>
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

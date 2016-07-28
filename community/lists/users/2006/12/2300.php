<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Dec  5 12:33:47 2006" -->
<!-- isoreceived="20061205173347" -->
<!-- sent="Tue, 5 Dec 2006 18:32:45 +0100" -->
<!-- isosent="20061205173245" -->
<!-- name="Rainer Keller" -->
<!-- email="keller_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Any known issues with ksh?" -->
<!-- id="200612051832.45449.keller_at_hlrs.de" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="1165338167.2410.119.camel_at_shavano.itc.virginia.edu" -->
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
<strong>From:</strong> Rainer Keller (<em>keller_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-12-05 12:32:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2301.php">Ryan Thompson: "[OMPI users] OpenMPE build failure"</a>
<li><strong>Previous message:</strong> <a href="2299.php">Katherine Holcomb: "Re: [OMPI users] Any known issues with ksh?"</a>
<li><strong>In reply to:</strong> <a href="2297.php">Katherine Holcomb: "[OMPI users] Any known issues with ksh?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2318.php">Jeff Squyres: "Re: [OMPI users] Any known issues with ksh?"</a>
<li><strong>Reply:</strong> <a href="2318.php">Jeff Squyres: "Re: [OMPI users] Any known issues with ksh?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello Katherine,
<br>
On Tuesday 05 December 2006 18:02, Katherine Holcomb wrote:
<br>
<span class="quotelev1">&gt; We are in the process of converting our clusters from MPICH to OpenMPI
</span><br>
<span class="quotelev1">&gt; and have encountered some odd problems.  For historical reasons, the
</span><br>
<span class="quotelev1">&gt; default shell we install for users is ksh.  The --profile option to
</span><br>
<span class="quotelev1">&gt; mpirun does not work for our users under ksh.  We are unsure why
</span><br>
<span class="quotelev1">&gt; although our system administrator believes that OpenMPI may be making
</span><br>
<span class="quotelev1">&gt; the ksh on the remote nodes believe that it's a login shell.  We've
</span><br>
<span class="quotelev1">&gt; tried both rsh and ssh.  Has anybody seen anything like this?
</span><br>
<p>Please try using --mca pls_rsh_assume_same_shell 0 -- to check for the shell 
<br>
on the node, it should detect the ksh on the node being used from the $SHELL 
<br>
env-variable.
<br>
<p>To check, You may also use:
<br>
ssh &lt;nodename&gt; echo $SHELL
<br>
<p><span class="quotelev1">&gt; There are no problems at all under bash.  (I use bash and I had no
</span><br>
<span class="quotelev1">&gt; trouble, but then started switching some users who were having MPICH
</span><br>
<span class="quotelev1">&gt; problems and they could not get it to work unless they changed to bash.)
</span><br>
<p>In case it does not detect the correct value and set the environment 
<br>
variables, could You please use --mca orte_debug 1 --mca pls_rsh_debug 1 and 
<br>
send the output?
<br>
<p>Thanks,
<br>
Rainer
<br>
<pre>
-- 
----------------------------------------------------------------
Dipl.-Inf. Rainer Keller       <a href="http://www.hlrs.de/people/keller">http://www.hlrs.de/people/keller</a>
 High Performance Computing       Tel: ++49 (0)711-685 6 5858
   Center Stuttgart (HLRS)           Fax: ++49 (0)711-685 6 5832
 POSTAL:Nobelstrasse 19                 email: keller_at_[hidden]     
 ACTUAL:Allmandring 30, R.O.030            AIM:rusraink
 70550 Stuttgart
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2301.php">Ryan Thompson: "[OMPI users] OpenMPE build failure"</a>
<li><strong>Previous message:</strong> <a href="2299.php">Katherine Holcomb: "Re: [OMPI users] Any known issues with ksh?"</a>
<li><strong>In reply to:</strong> <a href="2297.php">Katherine Holcomb: "[OMPI users] Any known issues with ksh?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2318.php">Jeff Squyres: "Re: [OMPI users] Any known issues with ksh?"</a>
<li><strong>Reply:</strong> <a href="2318.php">Jeff Squyres: "Re: [OMPI users] Any known issues with ksh?"</a>
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

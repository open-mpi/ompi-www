<?
$subject_val = "Re: [OMPI users] Can't start program across network";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Mar 16 10:05:16 2009" -->
<!-- isoreceived="20090316140516" -->
<!-- sent="Mon, 16 Mar 2009 10:05:11 -0400" -->
<!-- isosent="20090316140511" -->
<!-- name="Prentice Bisbal" -->
<!-- email="prentice_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Can't start program across network" -->
<!-- id="49BE5C97.8010700_at_ias.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="49BB0474.9000407_at_kuicr.kyoto-u.ac.jp" -->
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
<strong>Subject:</strong> Re: [OMPI users] Can't start program across network<br>
<strong>From:</strong> Prentice Bisbal (<em>prentice_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-03-16 10:05:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8460.php">Prentice Bisbal: "Re: [OMPI users] Can't start program across network"</a>
<li><strong>Previous message:</strong> <a href="8458.php">Marcia Cristina Cera: "[OMPI users] problems with MPI_Loockup_name"</a>
<li><strong>In reply to:</strong> <a href="8438.php">Raymond Wan: "Re: [OMPI users] Can't start program across network"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Raymond Wan wrote:
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Actually, when I run the above mpirun command, I don't see &quot;sleep&quot;
</span><br>
<span class="quotelev1">&gt; running locally on machine Y, either.  However, if I did this:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; mpirun --host Y --np 3 sleep 1000
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I see 3 instances of &quot;sleep&quot; when I do ps -aedf.  Does mpirun try to
</span><br>
<span class="quotelev1">&gt; &quot;ssh&quot; all networked machines first before it starts the program (even if
</span><br>
<span class="quotelev1">&gt; one of those instances will run locally?).  Perhaps unrelated...but when
</span><br>
<span class="quotelev1">&gt; I am on Y and I do an rsh to Z, I get a &quot;No route to host&quot;.  I asked the
</span><br>
<span class="quotelev1">&gt; sysadmin about it (I'm not the sysadmin of Y or Z) and he doesn't know
</span><br>
<span class="quotelev1">&gt; why but as we should be using ssh anyway, he isn't going to address the
</span><br>
<span class="quotelev1">&gt; problem (unless it is a side-effect of my mpirun problem). I only
</span><br>
<span class="quotelev1">&gt; presume rsh hasn't been set up properly; ssh works fine, though.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p>The &quot;no route to host&quot; problem should be a problem independent of
<br>
whether you are using rsh or ssh. That is a problem with your name
<br>
service. Either DNS, LDAP, NIS or /etc/hosts (depending on which name
<br>
service you are using) is screwed up. You should get that error
<br>
regardless of whether you use rsh, ssh, or any other command that needs
<br>
to resolve hostnames to IP addresses, like ping, ftp, telnet, etc.
<br>
<p>It could be that one of your hosts has misconfigured host information.
<br>
I'd start by comparing /etc/hosts on all 3 systems. What happens if you
<br>
replace the hostnames in your MPI hosts file with their IP addresses?
<br>
<p><pre>
-- 
Prentice
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8460.php">Prentice Bisbal: "Re: [OMPI users] Can't start program across network"</a>
<li><strong>Previous message:</strong> <a href="8458.php">Marcia Cristina Cera: "[OMPI users] problems with MPI_Loockup_name"</a>
<li><strong>In reply to:</strong> <a href="8438.php">Raymond Wan: "Re: [OMPI users] Can't start program across network"</a>
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

<?
$subject_val = "Re: [OMPI users] Help with some fundamentals";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan 21 09:59:19 2011" -->
<!-- isoreceived="20110121145919" -->
<!-- sent="Fri, 21 Jan 2011 15:59:13 +0100" -->
<!-- isosent="20110121145913" -->
<!-- name="Olivier SANNIER" -->
<!-- email="Olivier.SANNIER_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Help with some fundamentals" -->
<!-- id="CACA1C4D94C3374F81C530763A09DBF036A85DFD1C_at_ex-adg-01.addinggroup.lan" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="AANLkTinYD=obsjH2woOpid_iWV56O28_NoMKxj7m0inK_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Help with some fundamentals<br>
<strong>From:</strong> Olivier SANNIER (<em>Olivier.SANNIER_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-01-21 09:59:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15394.php">Avinash Malik: "[OMPI users] A problem with running a 32-bit program on a 64-bit machine"</a>
<li><strong>Previous message:</strong> <a href="15392.php">Olivier SANNIER: "Re: [OMPI users] Help with some fundamentals"</a>
<li><strong>In reply to:</strong> <a href="15388.php">John Hearns: "Re: [OMPI users] Help with some fundamentals"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15389.php">John Hearns: "Re: [OMPI users] Help with some fundamentals"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
-----Message d'origine-----
<br>
De&#160;: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] De la part de John Hearns
<br>
Envoy&#233;&#160;: vendredi 21 janvier 2011 11:35
<br>
&#192;&#160;: Open MPI Users
<br>
Objet&#160;: Re: [OMPI users] Help with some fundamentals
<br>
<p>On 20 January 2011 16:50, Olivier SANNIER &lt;Olivier.SANNIER_at_[hidden]&gt; wrote:
<br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So there is no dynamic discovery of nodes available on the network. 
</span><br>
<span class="quotelev1">&gt; Unless, of course, if I was to write a tool that would do it before 
</span><br>
<span class="quotelev1">&gt; the actual run is started.
</span><br>
<p>That is in essence what a batch scheduler does.
<br>
<p>OK, to be honest it has to be set up with a list of ths hosts you have in the beginning.
<br>
(Actually - any Condor experts here - you can join a Condor pool dynamically can't you?)
<br>
<p>Once the batch scheduler knows all the hosts you have available, you run a batch daemon on each machine, for example the PBS Mom process or the Gridengine execd The batch scheduler machine will keep track of which hosts respond - any which do not respond are marked as 'dwon' and you will not be able to schedule jobs on them.
<br>
the batch scheduler will decide which hosts are free to run jobs - based on how many jobs are already running on a host, and how busy the host is - indeed you can have your own metrics, such as the numebr of liceses free for commercial software.
<br>
the batch scheduler then gives your program a list of hostnames - which you in tuurn use with the 'mpirun' command which actually fires off the MPI processes.
<br>
<p><p>Thanks, that makes it clearer to me now.
<br>
<p>Olivier
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15394.php">Avinash Malik: "[OMPI users] A problem with running a 32-bit program on a 64-bit machine"</a>
<li><strong>Previous message:</strong> <a href="15392.php">Olivier SANNIER: "Re: [OMPI users] Help with some fundamentals"</a>
<li><strong>In reply to:</strong> <a href="15388.php">John Hearns: "Re: [OMPI users] Help with some fundamentals"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15389.php">John Hearns: "Re: [OMPI users] Help with some fundamentals"</a>
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

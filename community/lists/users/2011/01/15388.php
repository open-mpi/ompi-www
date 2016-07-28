<?
$subject_val = "Re: [OMPI users] Help with some fundamentals";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan 21 05:35:11 2011" -->
<!-- isoreceived="20110121103511" -->
<!-- sent="Fri, 21 Jan 2011 10:34:36 +0000" -->
<!-- isosent="20110121103436" -->
<!-- name="John Hearns" -->
<!-- email="hearnsj_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Help with some fundamentals" -->
<!-- id="AANLkTinYD=obsjH2woOpid_iWV56O28_NoMKxj7m0inK_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CACA1C4D94C3374F81C530763A09DBF036A85DFB0D_at_ex-adg-01.addinggroup.lan" -->
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
<strong>From:</strong> John Hearns (<em>hearnsj_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-01-21 05:34:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15389.php">John Hearns: "Re: [OMPI users] Help with some fundamentals"</a>
<li><strong>Previous message:</strong> <a href="15387.php">Dave Goodell: "Re: [OMPI users] Hair depleting issue with Ompi143 and one program"</a>
<li><strong>In reply to:</strong> <a href="15381.php">Olivier SANNIER: "Re: [OMPI users] Help with some fundamentals"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15393.php">Olivier SANNIER: "Re: [OMPI users] Help with some fundamentals"</a>
<li><strong>Reply:</strong> <a href="15393.php">Olivier SANNIER: "Re: [OMPI users] Help with some fundamentals"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 20 January 2011 16:50, Olivier SANNIER &lt;Olivier.SANNIER_at_[hidden]&gt; wrote:
<br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So there is no dynamic discovery of nodes available on the network. Unless,
</span><br>
<span class="quotelev1">&gt; of course, if I was to write a tool that would do it before the actual run
</span><br>
<span class="quotelev1">&gt; is started.
</span><br>
<p>That is in essence what a batch scheduler does.
<br>
<p>OK, to be honest it has to be set up with a list of ths hosts you have
<br>
in the beginning.
<br>
(Actually - any Condor experts here - you can join a Condor pool
<br>
dynamically can't you?)
<br>
<p>Once the batch scheduler knows all the hosts you have available, you
<br>
run a batch daemon on each machine,
<br>
for example the PBS Mom process or the Gridengine execd
<br>
The batch scheduler machine will keep track of which hosts respond -
<br>
any which do not respond are marked as 'dwon' and you will
<br>
not be able to schedule jobs on them.
<br>
the batch scheduler will decide which hosts are free to run jobs -
<br>
based on how many jobs are already running on a host,
<br>
and how busy the host is - indeed you can have your own metrics, such
<br>
as the numebr of liceses free for commercial software.
<br>
the batch scheduler then gives your program a list of hostnames -
<br>
which you in tuurn use with the 'mpirun' command
<br>
which actually fires off the MPI processes.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15389.php">John Hearns: "Re: [OMPI users] Help with some fundamentals"</a>
<li><strong>Previous message:</strong> <a href="15387.php">Dave Goodell: "Re: [OMPI users] Hair depleting issue with Ompi143 and one program"</a>
<li><strong>In reply to:</strong> <a href="15381.php">Olivier SANNIER: "Re: [OMPI users] Help with some fundamentals"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15393.php">Olivier SANNIER: "Re: [OMPI users] Help with some fundamentals"</a>
<li><strong>Reply:</strong> <a href="15393.php">Olivier SANNIER: "Re: [OMPI users] Help with some fundamentals"</a>
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

<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Jun 12 15:42:16 2006" -->
<!-- isoreceived="20060612194216" -->
<!-- sent="Mon, 12 Jun 2006 15:42:14 -0400" -->
<!-- isosent="20060612194214" -->
<!-- name="Ethan Mallove" -->
<!-- email="Ethan.Mallove_at_[hidden]" -->
<!-- subject="[MTT users] multiple testing configurations from a single workspace" -->
<!-- id="448DC396.9030702_at_Sun.COM" -->
<!-- charset="us-ascii" -->
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
<strong>From:</strong> Ethan Mallove (<em>Ethan.Mallove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-06-12 15:42:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0011.php">Andrew Friedley: "Re: [MTT users] multiple testing configurations from a single workspace"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/mtt-users/2006/05/0009.php">Andrew Friedley: "Re: [MTT users] MTT resurrected"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0011.php">Andrew Friedley: "Re: [MTT users] multiple testing configurations from a single workspace"</a>
<li><strong>Reply:</strong> <a href="0011.php">Andrew Friedley: "Re: [MTT users] multiple testing configurations from a single workspace"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Folks,
<br>
<p>Is there a way to test multiple test configurations from a single 
<br>
workspace simultaneously in MTT? For example, I want to run a set of 
<br>
tests on i386 and sparc at the same time from a single testing 
<br>
workspace. Looking at the sample.ini file, it seems like this could be 
<br>
done using multiple .ini files and setting each &quot;copydir&quot; in each to run 
<br>
in a different workspace to avoid conflicts amongst multiple instances 
<br>
of MTT.
<br>
<p>It turns out that this is a limitation of TET (I think). Right now, in 
<br>
order to do the above I have to create a separate testing area for each 
<br>
testing configuration (e.g., sparc, i386, solaris 10, solaris 11, ...) 
<br>
to avoid multiple TET's from interfering with each other.
<br>
<p>-Ethan
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0011.php">Andrew Friedley: "Re: [MTT users] multiple testing configurations from a single workspace"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/mtt-users/2006/05/0009.php">Andrew Friedley: "Re: [MTT users] MTT resurrected"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0011.php">Andrew Friedley: "Re: [MTT users] multiple testing configurations from a single workspace"</a>
<li><strong>Reply:</strong> <a href="0011.php">Andrew Friedley: "Re: [MTT users] multiple testing configurations from a single workspace"</a>
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

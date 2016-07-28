<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Feb  5 12:22:46 2007" -->
<!-- isoreceived="20070205172246" -->
<!-- sent="Tue, 6 Feb 2007 11:22:39 +1800" -->
<!-- isosent="20070205172239" -->
<!-- name="Bo Peng" -->
<!-- email="ben.bob_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Choices on how to implement a python module in MPI." -->
<!-- id="6ea7b5430702050922h66b1b5d2kd6ec6591ac06d8d9_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="1170621687.3380.12.camel_at_cedar.reachone.com" -->
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
<strong>From:</strong> Bo Peng (<em>ben.bob_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-02-05 12:22:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2608.php">Jeff Squyres: "Re: [OMPI users] -prefix not working"</a>
<li><strong>Previous message:</strong> <a href="2606.php">Joe Griffin: "Re: [OMPI users] -prefix not working"</a>
<li><strong>In reply to:</strong> <a href="2601.php">Tom Rosmond: "Re: [OMPI users] Choices on how to implement a python module in	MPI."</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 2/5/07, Tom Rosmond &lt;rosmond_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; Have you looked at the self-scheduling algorithm described in &quot;USING
</span><br>
<span class="quotelev1">&gt; MPI&quot; by Gropp, Lusk, and Skjellum.
</span><br>
<p>Yes, a master-slave mode should be better for my module. In this way:
<br>
<p>1. the master is started on node 0 and execute the Python script, the
<br>
master send command to the slaves if it needs to manipulate data  on a
<br>
particular node.
<br>
2. the slave turns to a 'feed-me' loop after the module is loaded. It
<br>
accepts something like an operation code and parameters, then look up
<br>
a function and execute.
<br>
<p>My biggest problem now is that the types of operations are numerous
<br>
and  the programming mode would be vastly different between master and
<br>
slaves. I mean, the module is written in C++ and is wrapped by SWIG so
<br>
that I have complete C++ class hierarchy. How much the slaves should
<br>
*undertand* the data structure is a problem.
<br>
<p>Anyway, many thanks for your suggestion.
<br>
<p>Bo
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2608.php">Jeff Squyres: "Re: [OMPI users] -prefix not working"</a>
<li><strong>Previous message:</strong> <a href="2606.php">Joe Griffin: "Re: [OMPI users] -prefix not working"</a>
<li><strong>In reply to:</strong> <a href="2601.php">Tom Rosmond: "Re: [OMPI users] Choices on how to implement a python module in	MPI."</a>
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

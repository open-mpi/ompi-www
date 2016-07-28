<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Jun  7 13:30:50 2007" -->
<!-- isoreceived="20070607173050" -->
<!-- sent="Thu, 7 Jun 2007 12:30:46 -0500" -->
<!-- isosent="20070607173046" -->
<!-- name="Michael Edwards" -->
<!-- email="miedward_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Segfault in orted (home directory problem)" -->
<!-- id="8d71b5680706071030j417d5e87i50049d56f03d51a2_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="E51BCEB9-E530-4809-AB33-79B99B43EE2E_at_cggveritas.com" -->
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
<strong>From:</strong> Michael Edwards (<em>miedward_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-06-07 13:30:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3400.php">Ralph Castain: "Re: [OMPI users] Segfault in orted (home directory problem)"</a>
<li><strong>Previous message:</strong> <a href="3398.php">Guillaume THOMAS-COLLIGNON: "[OMPI users] Segfault in orted (home directory problem)"</a>
<li><strong>In reply to:</strong> <a href="3398.php">Guillaume THOMAS-COLLIGNON: "[OMPI users] Segfault in orted (home directory problem)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3400.php">Ralph Castain: "Re: [OMPI users] Segfault in orted (home directory problem)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
That is the default behavior because having common home areas is
<br>
fairly common, but with some work you can run your code from wherever
<br>
is convenient.  Using the -wd flag you can have the code run from
<br>
wherever you want, but the code and data has to get there somehow.
<br>
<p>If you are using a batch scheduler it is fairly easy to write into
<br>
your execution script a section that parses the list of assigned nodes
<br>
and pushes your data and executable out to the scratch space on those
<br>
nodes, and then cleans up afterward (or not).
<br>
<p>The sensible way to do this will depend a lot on what schedulers you
<br>
are using and your application.  Openmpi may have a trick to push
<br>
data/executables around as well, but I haven't run across one yet.
<br>
<p>Mike Edwards
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3400.php">Ralph Castain: "Re: [OMPI users] Segfault in orted (home directory problem)"</a>
<li><strong>Previous message:</strong> <a href="3398.php">Guillaume THOMAS-COLLIGNON: "[OMPI users] Segfault in orted (home directory problem)"</a>
<li><strong>In reply to:</strong> <a href="3398.php">Guillaume THOMAS-COLLIGNON: "[OMPI users] Segfault in orted (home directory problem)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3400.php">Ralph Castain: "Re: [OMPI users] Segfault in orted (home directory problem)"</a>
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

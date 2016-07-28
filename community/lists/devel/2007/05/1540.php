<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri May 11 12:32:38 2007" -->
<!-- isoreceived="20070511163238" -->
<!-- sent="Fri, 11 May 2007 12:32:52 -0400" -->
<!-- isosent="20070511163252" -->
<!-- name="Ethan Mallove" -->
<!-- email="ethan.mallove_at_[hidden]" -->
<!-- subject="[OMPI devel] MTT for developers" -->
<!-- id="20070511163252.GA45053_at_sun.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4643DEC2.8060905_at_Sun.COM" -->
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
<strong>From:</strong> Ethan Mallove (<em>ethan.mallove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-05-11 12:32:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1541.php">Caitlin Bestler: "Re: [OMPI devel] OMPI over ofed udapl over iwarp"</a>
<li><strong>Previous message:</strong> <a href="1539.php">Steve Wise: "Re: [OMPI devel] OMPI over ofed udapl over iwarp"</a>
<li><strong>In reply to:</strong> <a href="1537.php">Donald Kerr: "Re: [OMPI devel] OMPI over ofed udapl over iwarp"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1541.php">Caitlin Bestler: "Re: [OMPI devel] OMPI over ofed udapl over iwarp"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
All,
<br>
<p>MTT can now be used to test your developer workspaces. The
<br>
quick, cut-n-paste way to get started is:
<br>
<p>&nbsp;$ svn co <a href="https://svn.open-mpi.org/svn/mtt/branches/ompi-core-testers">https://svn.open-mpi.org/svn/mtt/branches/ompi-core-testers</a>
<br>
&nbsp;$ cd samples
<br>
&nbsp;$ cat developer.ini trivial.ini | ../client/mtt - hostlist=host1,host2 alreadyinstalled_dir=/your/mpi/installation
<br>
<p>Where &quot;host1&quot; and &quot;host2&quot; are the hosts you want to run
<br>
tests on, and &quot;/your/mpi/installation&quot; is where your MPI is
<br>
installed (what you would pass to mpirun's --prefix). A more
<br>
thorough HOWTO is here:
<br>
<p><a href="https://svn.open-mpi.org/trac/mtt/wiki/AlreadyInstalled">https://svn.open-mpi.org/trac/mtt/wiki/AlreadyInstalled</a>
<br>
<p>Please report any questions and/or issues to
<br>
mtt-users_at_open-mpi.org.
<br>
<p>Cheers,
<br>
Ethan
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1541.php">Caitlin Bestler: "Re: [OMPI devel] OMPI over ofed udapl over iwarp"</a>
<li><strong>Previous message:</strong> <a href="1539.php">Steve Wise: "Re: [OMPI devel] OMPI over ofed udapl over iwarp"</a>
<li><strong>In reply to:</strong> <a href="1537.php">Donald Kerr: "Re: [OMPI devel] OMPI over ofed udapl over iwarp"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1541.php">Caitlin Bestler: "Re: [OMPI devel] OMPI over ofed udapl over iwarp"</a>
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

<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Feb 21 01:45:57 2006" -->
<!-- isoreceived="20060221064557" -->
<!-- sent="Mon, 20 Feb 2006 22:45:41 -0800" -->
<!-- isosent="20060221064541" -->
<!-- name="Scott Weitzenkamp \(sweitzen\)" -->
<!-- email="sweitzen_at_[hidden]" -->
<!-- subject="[OMPI users] couple of subversion questions" -->
<!-- id="A15335FBE9BD2449AF2C9EF3D1EB8EA30153063B_at_xmb-sjc-216.amer.cisco.com" -->
<!-- charset="US-ASCII" -->
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
<strong>From:</strong> Scott Weitzenkamp \(sweitzen\) (<em>sweitzen_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-02-21 01:45:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0677.php">George Bosilca: "Re: [OMPI users] couple of subversion questions"</a>
<li><strong>Previous message:</strong> <a href="0675.php">Jeff Squyres: "Re: [OMPI users] openMPI 1.0.1 on parallelknoppix"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0677.php">George Bosilca: "Re: [OMPI users] couple of subversion questions"</a>
<li><strong>Reply:</strong> <a href="0677.php">George Bosilca: "Re: [OMPI users] couple of subversion questions"</a>
<li><strong>Maybe reply:</strong> <a href="0690.php">Scott Weitzenkamp \(sweitzen\): "Re: [OMPI users] couple of subversion questions"</a>
<li><strong>Maybe reply:</strong> <a href="0703.php">Scott Weitzenkamp \(sweitzen\): "Re: [OMPI users] couple of subversion questions"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
1) I'm trying to check out the Open MPI source, and am having trouble.
<br>
I'm using subversion 1.3.0 on RHEL3 IA32.
<br>
&nbsp;
<br>
$ svn co <a href="http://svn.open-mpi.org/svn/ompi/trunk">http://svn.open-mpi.org/svn/ompi/trunk</a> ompi-trunk
<br>
A    ompi-trunk/test
<br>
A    ompi-trunk/test/mca
<br>
A    ompi-trunk/test/mca/oob
<br>
A    ompi-trunk/test/mca/oob/oob_test.c
<br>
A    ompi-trunk/test/mca/oob/oob_test_packed.c
<br>
...
<br>
A    ompi-trunk/opal/class/opal_hash_table.h
<br>
A    ompi-trunk/opal/class/opal_value_array.h
<br>
A    ompi-trunk/opal/class/opal_list.h
<br>
svn: REPORT request failed on '/svn/ompi/!svn/vcc/default'
<br>
svn: REPORT of '/svn/ompi/!svn/vcc/default': Could not read response
<br>
body: Conne
<br>
ction reset by peer (<a href="http://svn.open-mpi.org">http://svn.open-mpi.org</a>)
<br>
<p>If I keep running the command over and over, eventually I get the entire
<br>
tree.  Any ideas?
<br>
&nbsp;
<br>
2) I saw a commit message with Subject &quot;[OMPI svn] svn:open-mpi-tests
<br>
r490&quot; and another one with Subject &quot;[OMPI svn] svn:open-mpi r9098&quot;.  Are
<br>
there two sets of revision numbers on the same subversion repository?
<br>
How do I check out r490?
<br>
&nbsp;
<br>
Thanks in advance...
<br>
&nbsp;
<br>
Scott Weitzenkamp
<br>
SQA Manager
<br>
Cisco
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-0676/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0677.php">George Bosilca: "Re: [OMPI users] couple of subversion questions"</a>
<li><strong>Previous message:</strong> <a href="0675.php">Jeff Squyres: "Re: [OMPI users] openMPI 1.0.1 on parallelknoppix"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0677.php">George Bosilca: "Re: [OMPI users] couple of subversion questions"</a>
<li><strong>Reply:</strong> <a href="0677.php">George Bosilca: "Re: [OMPI users] couple of subversion questions"</a>
<li><strong>Maybe reply:</strong> <a href="0690.php">Scott Weitzenkamp \(sweitzen\): "Re: [OMPI users] couple of subversion questions"</a>
<li><strong>Maybe reply:</strong> <a href="0703.php">Scott Weitzenkamp \(sweitzen\): "Re: [OMPI users] couple of subversion questions"</a>
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

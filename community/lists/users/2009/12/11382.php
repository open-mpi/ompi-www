<?
$subject_val = "[OMPI users] Application Schema for LAM to OpenMPI";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec  2 17:17:26 2009" -->
<!-- isoreceived="20091202221726" -->
<!-- sent="Wed, 2 Dec 2009 17:17:21 -0500" -->
<!-- isosent="20091202221721" -->
<!-- name="Nathan Glenn" -->
<!-- email="nglenn2_at_[hidden]" -->
<!-- subject="[OMPI users] Application Schema for LAM to OpenMPI" -->
<!-- id="8427a310912021417m47b907abte826d6ce206ce988_at_mail.gmail.com" -->
<!-- charset="windows-1252" -->
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
<strong>Subject:</strong> [OMPI users] Application Schema for LAM to OpenMPI<br>
<strong>From:</strong> Nathan Glenn (<em>nglenn2_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-12-02 17:17:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11383.php">Abhishek Kulkarni: "Re: [OMPI users] MPI_Comm_spawn lots of times"</a>
<li><strong>Previous message:</strong> <a href="11381.php">Ralph Castain: "Re: [OMPI users] MPI_Comm_spawn lots of times"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Currently, I am in the process of converting an MPMD program of mine from
<br>
LAM to OpenMPI.  The old LAM setup used an application schema to handle the
<br>
launching of the server and remote processes on all the nodes in the
<br>
cluster; however, I have run into an issue due to the difference in how
<br>
mpirun works in both.  Because mpirun will route STDIN and STDOUT on remote
<br>
processes to the location of STDIN and STDOUT where mpirun was originally
<br>
run, I use a shell to launch the remote processes on all the nodes.  In
<br>
other words, I have mpirun start a shell (/bin/sh) on all the nodes and pass
<br>
to it a string of runtime variables to be passed into the executable that is
<br>
started by the shell.  By using the shell&#146;s &#147;-c&#148; option, I can start a
<br>
process this way and it allows me to control the STDIN and STDOUT of the
<br>
process.  Below is an example application schema that works in LAM but not
<br>
OpenMPI (obviously the &#150;mca option doesn&#146;t exist in LAM but its equivalence
<br>
would).   When trying to use this below in OpenMPI, I get EOF file parsing
<br>
errors because OpenMPI does not know what to do with the variables listed in
<br>
the quotations.  It will parse the first quote, the program and its path,
<br>
then errors trying to look for a matching quote when it should have kept on
<br>
reading in all the runtime variables located in this string.  How do I get
<br>
this entire string to be passed by mpirun so that the shell can execute the
<br>
corresponding process and pass the associated runtime variables to it.
<br>
<p><p>#Example Application Schema
<br>
<p>#server
<br>
<p>-host node1 --mca btl tcp,self &#150;np 1 /bin/sh &#150;c &#147;/usr/bin/SERVER_PROG
<br>
--varTen blah&#148; &gt; myOwnLogfile_server.log 2&gt;&amp;1&#148;
<br>
<p>#node2
<br>
<p>-host node2 --mca btl tcp,self -np 1 /bin/sh -c &#147;/usr/bin/REMOTE_PROG
<br>
--varOne 59339 --varTwo 65888&#148; &gt; myOwnLogfile_remote1.log 2&gt;&amp;1&#148;
<br>
<p>#node3
<br>
<p>-host node3 --mca btl tcp,self -np 1 /bin/sh -c &#147;/usr/bin/REMOTE_PROG
<br>
--varOne 59339 --varTwo 65888&#148; &gt; myOwnLogfile_remote2.log 2&gt;&amp;1&#148;
<br>
<p>#node4
<br>
<p>-host node4 --mca btl tcp,self -np 1 /bin/sh -c &#147;/usr/bin/REMOTE_PROG
<br>
--varOne 59339 --varTwo 65888&#148; &gt; myOwnLogfile_remote3.log 2&gt;&amp;1&#148;
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-11382/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11383.php">Abhishek Kulkarni: "Re: [OMPI users] MPI_Comm_spawn lots of times"</a>
<li><strong>Previous message:</strong> <a href="11381.php">Ralph Castain: "Re: [OMPI users] MPI_Comm_spawn lots of times"</a>
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

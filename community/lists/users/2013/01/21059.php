<?
$subject_val = "[OMPI users] mpirun - All Nodes Filled";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan  3 09:53:52 2013" -->
<!-- isoreceived="20130103145352" -->
<!-- sent="Thu, 3 Jan 2013 06:53:47 -0800 (PST)" -->
<!-- isosent="20130103145347" -->
<!-- name="Chuck Mosher" -->
<!-- email="chuckmosher_at_[hidden]" -->
<!-- subject="[OMPI users] mpirun - All Nodes Filled" -->
<!-- id="1357224827.94911.YahooMailNeo_at_web141104.mail.bf1.yahoo.com" -->
<!-- charset="iso-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] mpirun - All Nodes Filled<br>
<strong>From:</strong> Chuck Mosher (<em>chuckmosher_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-01-03 09:53:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21060.php">Ralph Castain: "Re: [OMPI users] grpcomm component hier gone..."</a>
<li><strong>Previous message:</strong> <a href="21058.php">Ake Sandgren: "Re: [OMPI users] grpcomm component hier gone..."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21061.php">Ralph Castain: "Re: [OMPI users] mpirun - All Nodes Filled"</a>
<li><strong>Reply:</strong> <a href="21061.php">Ralph Castain: "Re: [OMPI users] mpirun - All Nodes Filled"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Simple question for today !

I am working on converting a public domain code suite (<a href="http://www.JavaSeis.org">http://www.JavaSeis.org</a>) to use openmpi rather than mpiJava.
So far, all has gone well, other than the usual issues with getting all the paths and variables straightened out.
For automation purposes, I would like to be able to specify everything from the command line, rather than using files.

Why does this command work:

chuck-&gt; /usr/local/bin/mpirun -np 1 /usr/bin/java -version
java version &quot;1.6.0_37&quot;
Java(TM) SE Runtime Environment (build 1.6.0_37-b06-434-10M3909)
Java HotSpot(TM) 64-Bit Server VM (build 20.12-b01-434, mixed mode)

But this one does not:

chuck-&gt; /usr/local/bin/mpirun -np 1 &#160;-host localhost /usr/bin/java -version
--------------------------------------------------------------------------
All nodes which are allocated for this job are already filled.
--------------------------------------------------------------------------

Nor does this one:

chuck-&gt; cat hostfile
localhost slots=2

chuck-&gt;/usr/local/bin/mpirun -np 1 -hostfile hostfile /usr/bin/java -cp . -version
--------------------------------------------------------------------------
All nodes which are allocated for this job are already filled.
--------------------------------------------------------------------------


For reference:

chuck-&gt; /usr/local/bin/mpirun -version
mpirun (Open MPI) 1.7rc5

Report bugs to <a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>

chuck-&gt; uname -a
Darwin iMac.local 10.8.0 Darwin Kernel Version 10.8.0: Tue Jun &#160;7 16:32:41 PDT 2011; root:xnu-1504.15.3~1/RELEASE_X86_64 x86_64

My build was done with &quot;configure --enable-mpi-java --prefix=/usr/local&quot;.

Thanks for any insight !

Chuck Mosher
chuckmosher_at_[hidden]

<br>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-21059/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21060.php">Ralph Castain: "Re: [OMPI users] grpcomm component hier gone..."</a>
<li><strong>Previous message:</strong> <a href="21058.php">Ake Sandgren: "Re: [OMPI users] grpcomm component hier gone..."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21061.php">Ralph Castain: "Re: [OMPI users] mpirun - All Nodes Filled"</a>
<li><strong>Reply:</strong> <a href="21061.php">Ralph Castain: "Re: [OMPI users] mpirun - All Nodes Filled"</a>
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

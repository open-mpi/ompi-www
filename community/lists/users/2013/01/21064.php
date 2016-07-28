<?
$subject_val = "Re: [OMPI users] mpirun - All Nodes Filled";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan  3 10:16:18 2013" -->
<!-- isoreceived="20130103151618" -->
<!-- sent="Thu, 3 Jan 2013 07:16:14 -0800 (PST)" -->
<!-- isosent="20130103151614" -->
<!-- name="Chuck Mosher" -->
<!-- email="chuckmosher_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpirun - All Nodes Filled" -->
<!-- id="1357226174.91064.YahooMailNeo_at_web141103.mail.bf1.yahoo.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="7B2BBD6C-A9F8-4151-B633-3E6BE7E23073_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] mpirun - All Nodes Filled<br>
<strong>From:</strong> Chuck Mosher (<em>chuckmosher_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-01-03 10:16:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21065.php">Ake Sandgren: "Re: [OMPI users] grpcomm component hier gone..."</a>
<li><strong>Previous message:</strong> <a href="21063.php">Ralph Castain: "Re: [OMPI users] grpcomm component hier gone..."</a>
<li><strong>In reply to:</strong> <a href="21061.php">Ralph Castain: "Re: [OMPI users] mpirun - All Nodes Filled"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ralph,

Thanks for the response !

If I substitute the output from `hostname` (Chucks-iMac.local) I get the same behavior, but using `hostname -s` (Chucks-iMac) all is well.
So, to summarize:

Fails:
mpirun -host localhost -np 1 java -version
mpirun -host `hostname` -np 1 java -version

Succeeds:
mpirun -host `hostname -s` -np 1 java -version

At least I have a fix for now !

Best regards,
Chuck Mosher


________________________________
 From: Ralph Castain &lt;rhc_at_[hidden]&gt;
To: Chuck Mosher &lt;chuckmosher_at_[hidden]&gt;; Open MPI Users &lt;users_at_[hidden]&gt; 
Sent: Thursday, January 3, 2013 9:02 AM
Subject: Re: [OMPI users] mpirun - All Nodes Filled
 

Hmmm...I would say there is a bug in 1.7 then! It isn't recognizing the word &quot;localhost&quot; as being your local host. I'll take a look at it.

Thanks!


On Jan 3, 2013, at 6:53 AM, Chuck Mosher &lt;chuckmosher_at_[hidden]&gt; wrote:

Simple question for today !
&gt;
&gt;
&gt;I am working on converting a public domain code suite (<a href="http://www.JavaSeis.org">http://www.JavaSeis.org</a>) to use openmpi rather than mpiJava.
&gt;So far, all has gone well, other than the usual issues with getting all the paths and variables straightened out.
&gt;For automation purposes, I would like to be able to specify everything from the command line, rather than using files.
&gt;
&gt;
&gt;Why does this command work:
&gt;
&gt;
&gt;chuck-&gt; /usr/local/bin/mpirun -np 1 /usr/bin/java -version
&gt;java version &quot;1.6.0_37&quot;
&gt;Java(TM) SE Runtime Environment (build 1.6.0_37-b06-434-10M3909)
&gt;Java HotSpot(TM) 64-Bit Server VM (build 20.12-b01-434, mixed mode)
&gt;
&gt;
&gt;But this one does not:
&gt;
&gt;
&gt;chuck-&gt; /usr/local/bin/mpirun -np 1 &#160;-host localhost /usr/bin/java -version
&gt;--------------------------------------------------------------------------
&gt;All nodes which are allocated for this job are already filled.
&gt;--------------------------------------------------------------------------
&gt;
&gt;
&gt;Nor does this one:
&gt;
&gt;
&gt;chuck-&gt; cat hostfile
&gt;localhost slots=2
&gt;
&gt;
&gt;chuck-&gt;/usr/local/bin/mpirun -np 1 -hostfile hostfile /usr/bin/java -cp . -version
&gt;--------------------------------------------------------------------------
&gt;All nodes which are allocated for this job are already filled.
&gt;--------------------------------------------------------------------------
&gt;
&gt;
&gt;
&gt;
&gt;For reference:
&gt;
&gt;
&gt;chuck-&gt; /usr/local/bin/mpirun -version
&gt;mpirun (Open MPI) 1.7rc5
&gt;
&gt;
&gt;Report bugs to <a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>
&gt;
&gt;
&gt;chuck-&gt; uname -a
&gt;Darwin iMac.local 10.8.0 Darwin Kernel Version 10.8.0: Tue Jun &#160;7 16:32:41 PDT 2011; root:xnu-1504.15.3~1/RELEASE_X86_64 x86_64
&gt;
&gt;
&gt;My build was done with &quot;configure --enable-mpi-java --prefix=/usr/local&quot;.
&gt;
&gt;
&gt;Thanks for any insight !
&gt;
&gt;
&gt;Chuck Mosher
&gt;chuckmosher_at_[hidden]
&gt;
&gt;_______________________________________________
&gt;users mailing list
&gt;users_at_[hidden]
&gt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-21064/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21065.php">Ake Sandgren: "Re: [OMPI users] grpcomm component hier gone..."</a>
<li><strong>Previous message:</strong> <a href="21063.php">Ralph Castain: "Re: [OMPI users] grpcomm component hier gone..."</a>
<li><strong>In reply to:</strong> <a href="21061.php">Ralph Castain: "Re: [OMPI users] mpirun - All Nodes Filled"</a>
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
